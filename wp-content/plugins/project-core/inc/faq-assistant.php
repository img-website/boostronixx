<?php
/**
 * FAQ assistant — grounded answers for the /faqs/ search box.
 *
 * Design goals, in priority order:
 *
 *  1. NEVER invent an answer. Retrieval happens first, in PHP, against this
 *     site's own content. If nothing on the site is relevant, we do not call a
 *     model at all — the page just shows its normal "no matching questions"
 *     state. A model is only ever asked to phrase an answer FROM passages we
 *     already retrieved, and is told to refuse if they don't cover the question.
 *
 *  2. Never show the visitor an error. Providers are tried in order and a
 *     failure (quota, timeout, bad key, outage) silently falls through to the
 *     next. If every provider is unavailable — or none is configured — the
 *     endpoint still returns the retrieved passages as plain links, so the page
 *     degrades to exactly what it does today with no error state.
 *
 *  3. Cost nothing. Every supported provider has a permanent free tier that
 *     needs no credit card.
 *
 * Keys are read from wp-config.php constants first (so they stay out of the
 * database and out of git), falling back to the `bxcore_ai_keys` option.
 *
 * @package ProjectCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const BXCORE_KB_OPTION  = 'bxcore_faq_kb';
const BXCORE_KB_VERSION = 5;

/* =========================================================================
 * 1. Knowledge base — the site's own content, chunked
 * ====================================================================== */

/**
 * Plain text from HTML, with scripts/styles and shortcodes removed.
 *
 * @param string $html Raw HTML.
 * @return string
 */
function bxcore_kb_text( $html ) {
	$html = preg_replace( '#<(script|style|noscript)[^>]*>.*?</\1>#is', ' ', (string) $html );
	$html = strip_shortcodes( $html );
	$text = wp_strip_all_tags( $html, true );
	$text = html_entity_decode( $text, ENT_QUOTES, 'UTF-8' );
	return trim( preg_replace( '/\s+/u', ' ', $text ) );
}

/**
 * Split text into overlapping chunks so an answer is never cut in half.
 *
 * @param string $text Plain text.
 * @param int    $size Target characters per chunk.
 * @return array<int,string>
 */
function bxcore_kb_chunk( $text, $size = 700 ) {
	$text = trim( $text );
	if ( '' === $text ) {
		return array();
	}
	if ( mb_strlen( $text ) <= $size ) {
		return array( $text );
	}

	$chunks    = array();
	$sentences = preg_split( '/(?<=[.!?])\s+/u', $text ) ?: array( $text );
	$buffer    = '';

	foreach ( $sentences as $sentence ) {
		if ( '' !== $buffer && mb_strlen( $buffer . ' ' . $sentence ) > $size ) {
			$chunks[] = trim( $buffer );
			// Overlap: carry the tail so context spanning a boundary survives.
			$buffer = mb_substr( $buffer, -150 ) . ' ' . $sentence;
		} else {
			$buffer = '' === $buffer ? $sentence : $buffer . ' ' . $sentence;
		}
	}
	if ( '' !== trim( $buffer ) ) {
		$chunks[] = trim( $buffer );
	}
	return $chunks;
}

/**
 * Build the knowledge base from FAQ items, pages and posts.
 *
 * @return array
 */
function bxcore_kb_build() {
	$docs = array();

	// --- FAQ items: the highest-value source, indexed one Q&A per chunk. ---
	$faq_page = get_page_by_path( 'faqs' );
	if ( $faq_page && function_exists( 'have_rows' ) && have_rows( 'faq_page_items', $faq_page->ID ) ) {
		while ( have_rows( 'faq_page_items', $faq_page->ID ) ) {
			the_row();
			$q = bxcore_kb_text( get_sub_field( 'question' ) );
			$a = bxcore_kb_text( get_sub_field( 'answer' ) );
			if ( '' === $q || '' === $a ) {
				continue;
			}
			$docs[] = array(
				'title'  => $q,
				'url'    => get_permalink( $faq_page->ID ),
				'type'   => 'faq',
				'text'   => $q . ' — ' . $a,
				// Kept separately so it can be quoted verbatim as an answer
				// without a model — see bxcore_kb_extract_answer().
				'answer' => $a,
			);
		}
	}

	// --- Per-post FAQ repeaters (blog posts carry their own). ---
	$posts = get_posts(
		array(
			'post_type'        => array( 'post', 'page' ),
			'post_status'      => 'publish',
			'numberposts'      => 200,
			'suppress_filters' => false,
		)
	);

	foreach ( $posts as $p ) {
		if ( function_exists( 'have_rows' ) && have_rows( 'f_post_faqs', $p->ID ) ) {
			while ( have_rows( 'f_post_faqs', $p->ID ) ) {
				the_row();
				$q = bxcore_kb_text( get_sub_field( 'question' ) );
				$a = bxcore_kb_text( get_sub_field( 'answer' ) );
				if ( '' === $q || '' === $a ) {
					continue;
				}
				$docs[] = array(
					'title'  => $q,
					'url'    => get_permalink( $p->ID ),
					'type'   => 'faq',
					'text'   => $q . ' — ' . $a,
					'answer' => $a,
				);
			}
		}

		$body = bxcore_kb_text( $p->post_content );
		if ( mb_strlen( $body ) < 80 ) {
			continue;
		}
		foreach ( bxcore_kb_chunk( $body ) as $chunk ) {
			$docs[] = array(
				'title' => $p->post_title,
				'url'   => get_permalink( $p->ID ),
				'type'  => $p->post_type,
				'text'  => $p->post_title . '. ' . $chunk,
			);
		}
	}

	/**
	 * Extra knowledge-base documents (e.g. copy that lives in templates
	 * rather than post content).
	 *
	 * @param array $docs Documents.
	 */
	$docs = apply_filters( 'bxcore_kb_documents', $docs );

	// Precompute term frequencies + document frequencies for BM25.
	$df = array();
	foreach ( $docs as $i => $doc ) {
		$tf = array_count_values( bxcore_kb_tokens( $doc['text'] ) );
		$docs[ $i ]['tf']  = $tf;
		$docs[ $i ]['len'] = array_sum( $tf );
		foreach ( array_keys( $tf ) as $term ) {
			$df[ $term ] = ( $df[ $term ] ?? 0 ) + 1;
		}
	}

	$total = count( $docs );
	$avg   = $total ? array_sum( wp_list_pluck( $docs, 'len' ) ) / $total : 0;

	return array(
		'version' => BXCORE_KB_VERSION,
		'built'   => time(),
		'docs'    => $docs,
		'df'      => $df,
		'avg_len' => $avg,
	);
}

/**
 * Lowercase word tokens, stopwords removed.
 *
 * @param string $text Text.
 * @return array<int,string>
 */
function bxcore_kb_tokens( $text ) {
	$text  = mb_strtolower( $text, 'UTF-8' );
	$words = preg_split( '/[^a-z0-9₹+]+/u', $text, -1, PREG_SPLIT_NO_EMPTY ) ?: array();

	$stop = bxcore_kb_stopwords();

	$map = bxcore_kb_hinglish();

	$out = array();
	foreach ( $words as $w ) {
		// Hinglish first: fold it to the English term the site actually uses,
		// so a Romanised-Hindi question can match English content.
		if ( isset( $map[ $w ] ) ) {
			$w = $map[ $w ];
			if ( '' === $w ) {
				continue; // Hinglish function word — carries no topic.
			}
		}
		if ( mb_strlen( $w ) < 2 || isset( $stop[ $w ] ) ) {
			continue;
		}
		// Crude stemmer: fold common plural/verb endings so "pricing" ~ "price".
		$out[] = preg_replace( '/(ing|ies|es|s)$/', '', $w );
	}
	return $out;
}

/**
 * Words carrying no topic. Shared so the query tokenizer can drop them BEFORE
 * attempting any spelling correction — otherwise "what" gets helpfully
 * "corrected" into "whit" and counted as a real search term.
 *
 * @return array<string,int>
 */
function bxcore_kb_stopwords() {
	static $stop = null;
	if ( null === $stop ) {
		$stop = array_flip(
			array(
				'a', 'an', 'and', 'are', 'as', 'at', 'be', 'but', 'by', 'can', 'do', 'does', 'for',
				'from', 'get', 'has', 'have', 'how', 'i', 'if', 'in', 'is', 'it', 'me', 'my', 'of',
				'on', 'or', 'our', 'so', 'that', 'the', 'their', 'them', 'they', 'this', 'to', 'us',
				'was', 'we', 'what', 'when', 'where', 'which', 'who', 'why', 'will', 'with', 'you',
				'your', 'about', 'would', 'there',
				/*
				 * Low-signal question filler. These were inflating the
				 * denominator in the coverage gate: "how long does seo take to
				 * work" scored 4 terms, only 2 of which the answer could
				 * possibly contain, so a question the site answers well was
				 * rejected at 0.50 coverage.
				 */
				'long', 'take', 'takes', 'much', 'many', 'lot', 'very', 'really', 'please',
				'some', 'any', 'all', 'more', 'most', 'than', 'then', 'into', 'over',
				'did', 'done', 'am', 'been', 'were', 'should', 'could', 'may', 'might',
				'want', 'need', 'give', 'tell', 'know', 'let', 'go', 'got',
			)
		);
	}

	return $stop;
}

/**
 * Romanised-Hindi normalisation.
 *
 * Visitors here type Hinglish — "kya aap india se bahar kaam karte ho?" — and
 * the index is entirely English, so every word looked unknown and the
 * relevance gate correctly (but unhelpfully) stayed silent on a question the
 * FAQ answers outright.
 *
 * Two kinds of entry: an empty string marks a function word to drop, anything
 * else rewrites to the English term the site's own copy uses. Applied to
 * documents as well as queries, which costs nothing because English copy
 * contains none of these keys.
 *
 * @return array<string,string>
 */
function bxcore_kb_hinglish() {
	static $map = null;
	if ( null !== $map ) {
		return $map;
	}

	$drop = array(
		'kya', 'kyaa', 'aap', 'app', 'tum', 'hum', 'hai', 'hain', 'ho', 'hota', 'hoti', 'hote',
		'ka', 'ki', 'ke', 'ko', 'se', 'me', 'mein', 'par', 'pe', 'bhi', 'to', 'toh', 'na', 'nahi',
		'nahin', 'haan', 'ha', 'ji', 'kar', 'kare', 'karo', 'karta', 'karti', 'karte', 'karna',
		'kiya', 'kiye', 'hoga', 'hogi', 'honge', 'sakta', 'sakte', 'sakti', 'chahiye', 'chahiye',
		'wala', 'wali', 'wale', 'apna', 'apne', 'apni', 'mera', 'meri', 'mere', 'aapka', 'aapki',
		'aapke', 'iska', 'iski', 'iske', 'uska', 'uski', 'jo', 'ye', 'yeh', 'wo', 'woh', 'is',
		'us', 'agar', 'lekin', 'aur', 'ya', 'phir', 'bas', 'sirf', 'thoda', 'zyada', 'jyada',
		'batao', 'bataye', 'bataiye', 'chahta', 'chahte', 'raha', 'rahe', 'rahi', 'liye', 'lie',
		/*
		 * Common Hinglish verbs. Each of these on its own was enough to fail
		 * the "every content word must be known" gate: "kitna paisa LAGEGA",
		 * "google ads CHALATE ho", "guarantee DETE ho". The topical nouns
		 * beside them (paisa, ads, guarantee) already carry the meaning, so
		 * these are dropped rather than translated.
		 */
		'lagega', 'lagegi', 'lagenge', 'lagta', 'lagti', 'lagte', 'laga', 'lagi',
		'chalate', 'chalata', 'chalati', 'chalana', 'chalao', 'chala',
		'dete', 'deta', 'deti', 'dena', 'diya', 'diye', 'de', 'den',
		'lete', 'leta', 'leti', 'lena', 'liya', 'le',
		'milta', 'milti', 'milte', 'milega', 'milegi', 'milna', 'mil',
		'rakhte', 'rakhta', 'rakhna', 'dekhte', 'dekhna', 'dekh', 'dekho',
		'bolo', 'bolna', 'kehte', 'kehna', 'puchna', 'poochna', 'puch',
		'jata', 'jati', 'jate', 'jana', 'aata', 'aati', 'aate', 'aana',
		'padta', 'padti', 'padega', 'padegi', 'hoti', 'hue', 'huye', 'hua', 'hui',
	);

	$rewrite = array(
		// question words → their English equivalents (then treated as stopwords)
		'kaise'   => 'how',
		'kese'    => 'how',
		'kaisay'  => 'how',
		'kitna'   => 'how',
		'kitne'   => 'how',
		'kitni'   => 'how',
		'kab'     => 'when',
		'kahan'   => 'where',
		'kaha'    => 'where',
		'kyun'    => 'why',
		'kyu'     => 'why',
		'kyon'    => 'why',
		'kaun'    => 'who',
		'kon'     => 'who',
		// topical vocabulary
		'kaam'    => 'work',
		'paisa'   => 'cost',
		'paise'   => 'cost',
		'kimat'   => 'cost',
		'keemat'  => 'cost',
		'daam'    => 'cost',
		'kharcha' => 'cost',
		'kharch'  => 'cost',
		'muft'    => 'free',
		'samay'   => 'time',
		'waqt'    => 'time',
		'din'     => 'day',
		'mahina'  => 'month',
		'mahine'  => 'month',
		'saal'    => 'year',
		'shuru'   => 'start',
		'shuruat' => 'start',
		'madad'   => 'help',
		'bahar'   => 'outside',
		'andar'   => 'inside',
		'bharat'  => 'india',
		'seva'    => 'service',
		'sevaen'  => 'service',
		'sampark' => 'contact',
		'baat'    => 'contact',
		'bharosa' => 'trust',
		'vishwas' => 'trust',
		'jaldi'   => 'quick',
		'tez'     => 'fast',
		'accha'   => 'good',
		'achha'   => 'good',
		'sasta'   => 'cheap',
		'mahanga' => 'expensive',
		'vebsite' => 'website',
		'dhanda'  => 'business',
		'vyapar'  => 'business',
		'grahak'  => 'client',
		'natija'  => 'result',
		'natije'  => 'result',
		'parinam' => 'result',
		'pehli'   => 'first',
		'pehla'   => 'first',
		'pehle'   => 'first',
		'naya'    => 'new',
		'nayi'    => 'new',
		'naye'    => 'new',
		'purana'  => 'old',
		'purani'  => 'old',
		/*
		 * Verb BASE forms matter more than inflections here. The skeleton
		 * index keys on consonants, so one base covers the whole family:
		 * 'bana' (skeleton "bn") also resolves bna, bnao, banao, bnaa. Listing
		 * only inflected forms like 'banate' (skeleton "bnt") left the most
		 * common spelling of all — the short one — unmatched.
		 */
		'bana'    => 'build',
		'banate'  => 'build',
		'banata'  => 'build',
		'banana'  => 'build',
		'banaye'  => 'build',
		'banwana' => 'build',
		'chala'   => 'run',
		'laga'    => 'cost',
		'saka'    => '',
		'deta'    => '',
		'leta'    => '',
		'badhana' => 'grow',
		'badhane' => 'grow',
		'sudhar'  => 'improve',
		'badalna' => 'change',
		'badalne' => 'change',
		'sikhna'  => 'learn',
		'kaam'    => 'work',
	);

	$map = array();
	foreach ( $drop as $w ) {
		$map[ $w ] = '';
	}
	foreach ( $rewrite as $k => $v ) {
		$map[ $k ] = $v;
	}

	/**
	 * Filter the Hinglish normalisation map.
	 *
	 * @param array $map word => English term, or '' to drop.
	 */
	return apply_filters( 'bxcore_kb_hinglish', $map );
}

/**
 * Fetch (and lazily rebuild) the knowledge base.
 *
 * @param bool $force Rebuild even if cached.
 * @return array
 */
function bxcore_kb_get( $force = false ) {
	$kb = get_option( BXCORE_KB_OPTION );
	if ( $force || ! is_array( $kb ) || ( $kb['version'] ?? 0 ) !== BXCORE_KB_VERSION || empty( $kb['docs'] ) ) {
		$kb = bxcore_kb_build();
		update_option( BXCORE_KB_OPTION, $kb, false );
	}
	return $kb;
}

// Rebuild when content changes, and nightly as a safety net.
add_action( 'save_post', 'bxcore_kb_invalidate', 20 );
add_action( 'deleted_post', 'bxcore_kb_invalidate', 20 );
add_action( 'bxcore_kb_rebuild_event', 'bxcore_kb_rebuild_now' );

/**
 * Drop the cached knowledge base so the next query rebuilds it.
 *
 * @param int $post_id Post ID.
 */
function bxcore_kb_invalidate( $post_id = 0 ) {
	if ( $post_id && ( wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) ) ) {
		return;
	}
	delete_option( BXCORE_KB_OPTION );
}

/**
 * Cron target: rebuild immediately.
 */
function bxcore_kb_rebuild_now() {
	bxcore_kb_get( true );
}

add_action( 'init', 'bxcore_kb_schedule' );
/**
 * Ensure the nightly rebuild is scheduled.
 */
function bxcore_kb_schedule() {
	if ( ! wp_next_scheduled( 'bxcore_kb_rebuild_event' ) ) {
		wp_schedule_event( time() + HOUR_IN_SECONDS, 'daily', 'bxcore_kb_rebuild_event' );
	}
}

/**
 * Transliterate Devanagari to Roman.
 *
 * The tokenizer splits on [^a-z0-9], so a question typed in Hindi script was
 * reduced to zero tokens and could never reach retrieval — let alone a model.
 * This is a character mapping over a closed set (~60 code points), not a word
 * list, so it covers any Hindi input rather than the phrases we thought of.
 *
 * Handles the inherent 'a' correctly: a consonant carries one unless a matra
 * replaces it or a virama removes it.
 *
 * @param string $text Possibly-Devanagari text.
 * @return string
 */
function bxcore_kb_deva_to_roman( $text ) {
	if ( ! preg_match( '/\p{Devanagari}/u', $text ) ) {
		return $text;
	}

	static $cons = null, $vowel = null, $matra = null;
	if ( null === $cons ) {
		$cons = array(
			'क' => 'k', 'ख' => 'kh', 'ग' => 'g', 'घ' => 'gh', 'ङ' => 'n',
			'च' => 'ch', 'छ' => 'chh', 'ज' => 'j', 'झ' => 'jh', 'ञ' => 'n',
			'ट' => 't', 'ठ' => 'th', 'ड' => 'd', 'ढ' => 'dh', 'ण' => 'n',
			'त' => 't', 'थ' => 'th', 'द' => 'd', 'ध' => 'dh', 'न' => 'n',
			'प' => 'p', 'फ' => 'ph', 'ब' => 'b', 'भ' => 'bh', 'म' => 'm',
			'य' => 'y', 'र' => 'r', 'ल' => 'l', 'व' => 'v', 'ळ' => 'l',
			'श' => 'sh', 'ष' => 'sh', 'स' => 's', 'ह' => 'h',
			'क़' => 'q', 'ख़' => 'kh', 'ग़' => 'g', 'ज़' => 'z', 'ड़' => 'r',
			'ढ़' => 'rh', 'फ़' => 'f',
		);
		$vowel = array(
			'अ' => 'a', 'आ' => 'aa', 'इ' => 'i', 'ई' => 'ee', 'उ' => 'u',
			'ऊ' => 'oo', 'ऋ' => 'ri', 'ए' => 'e', 'ऐ' => 'ai', 'ओ' => 'o',
			'औ' => 'au',
		);
		$matra = array(
			'ा' => 'a', 'ि' => 'i', 'ी' => 'i', 'ु' => 'u', 'ू' => 'u',
			'ृ' => 'ri', 'े' => 'e', 'ै' => 'ai', 'ो' => 'o', 'ौ' => 'au',
			// Candra forms, used for English loanwords: कॉल = call, बॅंक = bank.
			'ॉ' => 'o', 'ॅ' => 'e',
		);
	}

	$chars   = preg_split( '//u', $text, -1, PREG_SPLIT_NO_EMPTY );
	$out     = '';
	$pending = false; // a consonant is waiting for its inherent 'a'

	foreach ( $chars as $i => $ch ) {
		// Nukta forms arrive as two code points; fold them here.
		if ( '़' === $ch ) {
			continue;
		}

		if ( isset( $cons[ $ch ] ) ) {
			if ( $pending ) {
				$out .= 'a';
			}
			$out    .= $cons[ $ch ];
			$pending = true;
			continue;
		}
		if ( isset( $matra[ $ch ] ) ) {
			$out    .= $matra[ $ch ];
			$pending = false;
			continue;
		}
		if ( '्' === $ch ) { // virama kills the inherent vowel
			$pending = false;
			continue;
		}
		if ( isset( $vowel[ $ch ] ) ) {
			if ( $pending ) {
				$out .= 'a';
			}
			$out    .= $vowel[ $ch ];
			$pending = false;
			continue;
		}
		if ( 'ं' === $ch || 'ँ' === $ch ) {
			if ( $pending ) {
				$out .= 'a';
			}
			$out    .= 'n';
			$pending = false;
			continue;
		}
		if ( 'ः' === $ch ) {
			$pending = false;
			$out    .= 'h';
			continue;
		}

		// Anything else (space, punctuation, Latin) ends the syllable.
		if ( $pending ) {
			$out .= 'a';
		}
		$pending = false;
		$out    .= $ch;
	}
	if ( $pending ) {
		$out .= 'a';
	}

	return $out;
}

/**
 * Consonant skeleton of a word.
 *
 * Romanised Hindi has no fixed spelling — the same word arrives as bana /
 * bnao / bna, karna / krna, chahiye / chahye. The consonants are stable; the
 * vowels are what people drop. Comparing skeletons matches all of those to one
 * dictionary entry, which is why the Hinglish map does not need an entry per
 * spelling — adding them one at a time was never going to converge.
 *
 * @param string $w Word.
 * @return string
 */
function bxcore_kb_skeleton( $w ) {
	/*
	 * Fold letters that spell the same Hindi sound before stripping vowels.
	 * व is written v or w, क़ as q or k, ज़ as z or j, फ़ as f or ph — so a
	 * transliterated "vebasaita" and an English "website" only meet once v and
	 * w are the same letter.
	 */
	$w = strtr( $w, array( 'v' => 'w', 'z' => 'j', 'q' => 'k' ) );
	$w = str_replace( 'ph', 'f', $w );
	$w = preg_replace( '/c(?!h)/', 'k', $w );

	$sk = preg_replace( '/[aeiou]/', '', $w );
	// Doubled consonants are a spelling habit, not a sound: call ~ kal.
	$sk = preg_replace( '/(.)+/', '$1', (string) $sk );

	return '' === $sk ? $w : $sk;
}

/**
 * Skeleton index over the site's own vocabulary, built once per request.
 *
 * @param array $vocab The KB df map.
 * @return array<string,string> skeleton => term
 */
function bxcore_kb_vocab_skeletons( $vocab ) {
	static $idx = null;
	if ( null !== $idx ) {
		return $idx;
	}
	$idx = array();
	foreach ( array_keys( $vocab ) as $term ) {
		$term = (string) $term;
		$sk   = bxcore_kb_skeleton( $term );
		/*
		 * Short skeletons collide with almost anything. At three consonants
		 * "dijaina" (djn) matched "dozen" (djn) and answered a logo-design
		 * question with a branding-mistakes article at full confidence. Four
		 * is the shortest length that behaved.
		 */
		if ( mb_strlen( $sk ) < 4 ) {
			continue;
		}
		if ( ! isset( $idx[ $sk ] ) || mb_strlen( $term ) < mb_strlen( $idx[ $sk ] ) ) {
			$idx[ $sk ] = $term;
		}
	}
	return $idx;
}

/**
 * Skeleton index of the Hinglish map, built once.
 *
 * @return array<string,string> skeleton => canonical key
 */
function bxcore_kb_skeleton_index() {
	static $idx = null;
	if ( null !== $idx ) {
		return $idx;
	}
	$idx = array();
	foreach ( array_keys( bxcore_kb_hinglish() ) as $key ) {
		$sk = bxcore_kb_skeleton( $key );
		if ( ! isset( $idx[ $sk ] ) ) {
			$idx[ $sk ] = $key;
		}
	}
	return $idx;
}

/**
 * Tokenise a VISITOR QUERY.
 *
 * Documents go through bxcore_kb_tokens() unchanged — they are our own copy,
 * correctly spelled. Queries are not: they arrive misspelled, vowel-dropped
 * and in Romanised Hindi. So an unknown query word gets three more chances
 * before we conclude the site does not discuss it: the Hinglish map, then the
 * same map by consonant skeleton, then a near-miss against the site's own
 * vocabulary (which also fixes ordinary English typos).
 *
 * @param string $text  Query.
 * @param array  $vocab Known terms (the KB's df map).
 * @return array<int,string>
 */
function bxcore_kb_query_tokens( $text, $vocab, &$stats = null ) {
	$stats = array(
		'exact'   => 0,
		'guessed' => 0,
	);
	$map  = bxcore_kb_hinglish();
	$skel = bxcore_kb_skeleton_index();
	$stop = bxcore_kb_stopwords();
	// Hindi script first, or the split below erases the question entirely.
	$text = bxcore_kb_deva_to_roman( $text );
	$raw  = preg_split( '/[^a-z0-9]+/u', mb_strtolower( $text, 'UTF-8' ), -1, PREG_SPLIT_NO_EMPTY );
	$raw  = $raw ? $raw : array();

	$resolved = array();
	foreach ( $raw as $w ) {
		if ( mb_strlen( $w ) < 2 ) {
			continue;
		}

		// Drop filler BEFORE any correction. Question words are absent from the
		// index (they are stopwords there too), so a spell-checker sees them as
		// unknown and "fixes" them into real terms — "what" became "whit".
		if ( isset( $stop[ $w ] ) ) {
			continue;
		}

		// 1. Known Hinglish spelling.
		if ( isset( $map[ $w ] ) ) {
			// Only counts as evidence if it survives to become a search term.
			// "kon" rewrites to "who", which the stoplist then drops — scoring
			// that as a real match was enough to let "mere paas me kon beta
			// hai" through on one word.
			if ( '' !== $map[ $w ] && ! isset( $stop[ $map[ $w ] ] ) ) {
				$stats['exact']++;
			}
			$resolved[] = $map[ $w ];
			continue;
		}

		// 2. Already a word the site uses — an EXACT hit, not a guess.
		$stem = preg_replace( '/(ing|ies|es|s)$/', '', $w );
		if ( isset( $vocab[ $stem ] ) ) {
			$stats['exact']++;
			$resolved[] = $w;
			continue;
		}

		/*
		 * Transliteration leaves the inherent vowel on the end of every word —
		 * आप becomes "aapa", करते becomes "karate". Trimming it is undoing our
		 * own artifact, not guessing at the visitor's spelling, so a hit here
		 * still counts as exact.
		 */
		if ( 'a' === substr( $w, -1 ) && mb_strlen( $w ) > 2 ) {
			$trim = substr( $w, 0, -1 );
			if ( isset( $map[ $trim ] ) ) {
				if ( '' !== $map[ $trim ] && ! isset( $stop[ $map[ $trim ] ] ) ) {
					$stats['exact']++;
				}
				$resolved[] = $map[ $trim ];
				continue;
			}
			$tstem = preg_replace( '/(ing|ies|es|s)$/', '', $trim );
			if ( isset( $vocab[ $tstem ] ) ) {
				$stats['exact']++;
				$resolved[] = $trim;
				continue;
			}
		}

		// 3. Hinglish by consonant skeleton — catches bna/bnao for bana.
		$sk = bxcore_kb_skeleton( $w );
		if ( isset( $skel[ $sk ] ) ) {
			$stats['guessed']++;
			$resolved[] = $map[ $skel[ $sk ] ];
			continue;
		}

		/*
		 * 4. Near-miss against the site's vocabulary (websitee, brnding).
		 *
		 * Exactly ONE edit, and the first letter must survive. Allowing two
		 * edits turned genuinely foreign words into familiar ones — "france"
		 * became "finance" and answered a question about Paris with the home
		 * page. A typo is one slip; two edits is a different word.
		 */
		// Compare the STEM, because the vocabulary is stemmed: "brnding" is
		// three edits from "branding" but one from "brand", which is what the
		// index actually holds.
		if ( mb_strlen( $stem ) >= 4 ) {
			$best = '';
			foreach ( array_keys( $vocab ) as $term ) {
				$term = (string) $term; // numeric-looking terms come back as ints
				if ( '' === $term || abs( mb_strlen( $term ) - mb_strlen( $stem ) ) > 1 ) {
					continue;
				}
				if ( $term[0] !== $stem[0] ) {
					continue;
				}
				/*
				 * Only accept a correction that RESTORES a dropped character
				 * (the term is longer), unless the word is long enough that a
				 * substitution is plausibly a typo. Without this, short real
				 * words get rewritten into short unrelated ones: "visa" became
				 * "via", which then answered a visa question from the site.
				 */
				if ( mb_strlen( $term ) <= mb_strlen( $stem ) && mb_strlen( $stem ) < 6 ) {
					continue;
				}
				if ( 1 === levenshtein( $stem, $term ) ) {
					$best = $term;
					break;
				}
			}
			if ( '' !== $best ) {
				$stats['guessed']++;
				$resolved[] = $best;
				continue;
			}
		}

		// 5. Skeleton against the site's own vocabulary. Transliterated Hindi
		// spells English loanwords its own way — "वेबसाइट" arrives as
		// "vebasaita", which no edit-distance rule will pull to "website",
		// but their consonant skeletons are identical once v and w are folded.
		$vsk = bxcore_kb_vocab_skeletons( $vocab );
		$sk2 = bxcore_kb_skeleton( $stem );
		if ( mb_strlen( $sk2 ) >= 4 && isset( $vsk[ $sk2 ] ) ) {
			$stats['guessed']++;
			$resolved[] = $vsk[ $sk2 ];
			continue;
		}

		// Genuinely unknown — kept so the relevance gate can count it missing.
		$resolved[] = $w;
	}

	return bxcore_kb_tokens( implode( ' ', $resolved ) );
}

/* =========================================================================
 * 2. Retrieval — BM25 over the knowledge base, no external call
 * ====================================================================== */

/**
 * Best-matching passages for a query.
 *
 * @param string $query Visitor's question.
 * @param int    $limit Max passages.
 * @return array{hits:array,top:float}
 */
function bxcore_kb_search( $query, $limit = 4 ) {
	$kb = bxcore_kb_get();
	if ( empty( $kb['docs'] ) ) {
		return array(
			'hits'          => array(),
			'top'           => 0.0,
			'terms'         => 0,
			'known_terms'   => 0,
			'exact_terms'   => 0,
			'missing_rate'  => 1.0,
			'top_coverage'  => 0.0,
			'best_coverage' => 0.0,
		);
	}

	$q_terms = bxcore_kb_query_tokens( $query, $kb['df'], $qstats );
	if ( ! $q_terms ) {
		return array(
			'hits'          => array(),
			'top'           => 0.0,
			'terms'         => 0,
			'known_terms'   => 0,
			'exact_terms'   => 0,
			'missing_rate'  => 1.0,
			'top_coverage'  => 0.0,
			'best_coverage' => 0.0,
		);
	}

	$n     = count( $kb['docs'] );
	$avg   = max( 1, (float) $kb['avg_len'] );
	$k1    = 1.5;
	$b     = 0.75;
	$score = array();

	foreach ( $kb['docs'] as $i => $doc ) {
		$s = 0.0;
		foreach ( array_unique( $q_terms ) as $term ) {
			$f = $doc['tf'][ $term ] ?? 0;
			if ( ! $f ) {
				continue;
			}
			$df   = $kb['df'][ $term ] ?? 1;
			$idf  = log( 1 + ( ( $n - $df + 0.5 ) / ( $df + 0.5 ) ) );
			$norm = $f * ( $k1 + 1 ) / ( $f + $k1 * ( 1 - $b + $b * ( $doc['len'] / $avg ) ) );
			$s   += $idf * $norm;
		}
		// FAQ entries answer questions directly — nudge them above prose.
		if ( 'faq' === $doc['type'] ) {
			$s *= 1.25;
		}
		if ( $s > 0 ) {
			$score[ $i ] = $s;
		}
	}

	if ( ! $score ) {
		return array(
			'hits'          => array(),
			'top'           => 0.0,
			'terms'         => 0,
			'known_terms'   => 0,
			'exact_terms'   => 0,
			'missing_rate'  => 1.0,
			'top_coverage'  => 0.0,
			'best_coverage' => 0.0,
		);
	}

	arsort( $score );
	$top  = (float) reset( $score );
	$hits = array();
	foreach ( array_slice( $score, 0, $limit, true ) as $i => $s ) {
		$hits[] = array(
			'title'  => $kb['docs'][ $i ]['title'],
			'url'    => $kb['docs'][ $i ]['url'],
			'type'   => $kb['docs'][ $i ]['type'],
			'text'   => $kb['docs'][ $i ]['text'],
			'answer' => $kb['docs'][ $i ]['answer'] ?? '',
			'score'  => round( $s, 3 ),
		);
	}

	/*
	 * A raw BM25 score is a bad relevance gate on its own, in both directions:
	 *
	 *  - It over-fires. One rare word carries a huge IDF, so "how do I cook
	 *    biryani" scored 9.5 against the privacy policy purely on "cook"
	 *    matching "cookies", with "biryani" contributing nothing.
	 *  - It under-fires. "do you do branding" reduces to the single term
	 *    "brand", which is so common here that its IDF — and the score — is
	 *    near zero, even though the site is entirely about branding.
	 *
	 * Coverage is the honest signal. If the visitor's distinctive words are
	 * absent from the site's vocabulary, the site does not discuss the topic,
	 * whatever the score says.
	 */
	$unique  = array_values( array_unique( $q_terms ) );
	$missing = 0;
	foreach ( $unique as $term ) {
		if ( empty( $kb['df'][ $term ] ) ) {
			$missing++;
		}
	}
	$present = max( 1, count( $unique ) - $missing );

	/*
	 * Coverage is measured across ALL the passages we are about to hand the
	 * model, not just the single best one — that is the evidence it actually
	 * gets. Measuring the top passage alone rejected "how much does a website
	 * cost", because the pricing FAQ says "project" rather than "website"
	 * while a neighbouring passage supplied the missing half.
	 */
	$sent = array_slice( array_keys( $score ), 0, $limit );
	$in_top = 0;
	foreach ( $unique as $term ) {
		if ( empty( $kb['df'][ $term ] ) ) {
			continue;
		}
		foreach ( $sent as $i ) {
			if ( ! empty( $kb['docs'][ $i ]['tf'][ $term ] ) ) {
				$in_top++;
				break;
			}
		}
	}

	// Coverage of the single best passage, as a second opinion on the union.
	$best     = $kb['docs'][ (int) $sent[0] ];
	$in_best  = 0;
	foreach ( $unique as $term ) {
		if ( ! empty( $kb['df'][ $term ] ) && ! empty( $best['tf'][ $term ] ) ) {
			$in_best++;
		}
	}

	return array(
		'hits'          => $hits,
		'top'           => $top,
		'terms'         => count( $unique ),
		'known_terms'   => count( $unique ) - $missing,
		'exact_terms'   => (int) ( $qstats['exact'] ?? 0 ),
		'missing_rate'  => count( $unique ) ? $missing / count( $unique ) : 1.0,
		'top_coverage'  => $in_top / $present,
		'best_coverage' => $in_best / $present,
	);
}

/**
 * How confident are we that the site answers this?
 *
 * The previous gate demanded that EVERY content word be known, which conflated
 * two very different unknowns. Measured against the corpus, "mujhe", "ek",
 * "visa", "biryani" and "loan" are all equally absent (df = 0) — nothing in
 * our own content can tell a Hindi pronoun apart from an off-topic noun, so
 * hard-blocking on unknown words meant "mujhe ek website banwani hai" failed
 * for the same reason "do you offer visa services" did.
 *
 * So an unknown word no longer blocks; it lowers confidence. We assert an
 * answer only when certain, offer pointers when the known words alone are
 * strong evidence, and stay quiet otherwise. A link is not a claim, so the
 * middle tier cannot be wrong in the way an asserted answer can.
 *
 * @param array $found Result of bxcore_kb_search().
 * @return string 'high' | 'medium' | 'none'
 */
function bxcore_kb_confidence( $found ) {
	if ( empty( $found['hits'] ) || $found['top'] < bxcore_kb_threshold() ) {
		return 'none';
	}

	// The best passage has to be about this, whatever else is true.
	if ( $found['best_coverage'] < (float) apply_filters( 'bxcore_kb_min_best_coverage', 0.5 ) ) {
		return 'none';
	}

	$known = (int) $found['known_terms'];
	$exact = (int) ( $found['exact_terms'] ?? 0 );

	/*
	 * At least one word must have matched EXACTLY. Every other route into the
	 * index is a guess — a consonant skeleton or a one-edit correction — and a
	 * guess on its own is not evidence. "mere paas me kon beta hai" reduced to
	 * a single skeleton collision ("paas" ~ "paisa" → cost) and was asserted
	 * as a confident answer about rebrand pricing. One guess, nothing else,
	 * must never be enough to speak.
	 */
	if ( $exact < 1 ) {
		return 'none';
	}

	// Every word recognised, at least two of them, and the passages cover
	// them: assert an answer.
	if ( $found['missing_rate'] <= 0.0
		&& $known >= 2
		&& $found['top_coverage'] >= (float) apply_filters( 'bxcore_kb_min_coverage', 0.6 ) ) {
		return 'high';
	}

	/*
	 * Otherwise we recognised something real but not everything. Point at the
	 * pages rather than putting words in our own mouth — a link cannot be
	 * wrong in the way an asserted answer can.
	 *
	 * How much evidence that needs depends on whether anything can judge the
	 * result. A model can read "क्या आप बिरयानी बनाते हैं" and see it is not
	 * about us, even though "बनाते" resolves to the perfectly real term
	 * "build"; lexical matching cannot tell that from "mujhe seo karwana hai",
	 * which has exactly the same shape. So with a provider we let one solid
	 * term through and let the model decide, and without one we insist on two
	 * before showing anything at all.
	 */
	$need = bxcore_ai_available() ? 1 : 2;
	if ( $known >= $need && $found['top_coverage'] >= 0.999 ) {
		return 'medium';
	}

	return 'none';
}

/**
 * Back-compat shim: relevant means anything we are willing to show.
 *
 * @param array $found Result of bxcore_kb_search().
 * @return bool
 */
function bxcore_kb_is_relevant( $found ) {
	return 'none' !== bxcore_kb_confidence( $found );
}

/* =========================================================================
 * 3. Providers — free tiers, tried in order, failures invisible
 * ====================================================================== */

/**
 * The provider chain.
 *
 * All of these have a permanent free tier that needs no credit card. The first
 * four speak the OpenAI chat-completions shape, so they share one adapter;
 * Gemini has its own request/response format.
 *
 * Order is cheapest-to-fail-over first: fast providers with per-minute limits
 * come before ones with generous daily caps, so the daily budget is preserved
 * for when the fast ones are throttled.
 *
 * @return array<int,array>
 */
function bxcore_ai_providers() {
	$providers = array(
		array(
			'id'       => 'groq',
			'label'    => 'Groq',
			'endpoint' => 'https://api.groq.com/openai/v1/chat/completions',
			'model'    => 'llama-3.3-70b-versatile',
			'shape'    => 'openai',
		),
		array(
			'id'       => 'cerebras',
			'label'    => 'Cerebras',
			'endpoint' => 'https://api.cerebras.ai/v1/chat/completions',
			'model'    => 'llama-3.3-70b',
			'shape'    => 'openai',
		),
		array(
			'id'       => 'gemini',
			'label'    => 'Google Gemini',
			'endpoint' => 'https://generativelanguage.googleapis.com/v1beta/models/{model}:generateContent',
			'model'    => 'gemini-2.0-flash',
			'shape'    => 'gemini',
		),
		array(
			'id'       => 'openrouter',
			'label'    => 'OpenRouter',
			'endpoint' => 'https://openrouter.ai/api/v1/chat/completions',
			'model'    => 'meta-llama/llama-3.3-70b-instruct:free',
			'shape'    => 'openai',
		),
		array(
			'id'       => 'mistral',
			'label'    => 'Mistral',
			'endpoint' => 'https://api.mistral.ai/v1/chat/completions',
			'model'    => 'mistral-small-latest',
			'shape'    => 'openai',
		),
	);

	/**
	 * Filter the provider chain (order, models, endpoints).
	 *
	 * @param array $providers Providers.
	 */
	return apply_filters( 'bxcore_ai_providers', $providers );
}

/**
 * API key for a provider. wp-config constants win over the stored option so
 * secrets can stay out of the database and out of version control.
 *
 * @param string $id Provider id.
 * @return string
 */
function bxcore_ai_key( $id ) {
	$const = 'BX_AI_' . strtoupper( $id ) . '_KEY';
	if ( defined( $const ) && constant( $const ) ) {
		return (string) constant( $const );
	}
	$keys = get_option( 'bxcore_ai_keys', array() );
	return is_array( $keys ) && ! empty( $keys[ $id ] ) ? (string) $keys[ $id ] : '';
}

/**
 * Mark a provider as unavailable for a while, so we stop paying the latency
 * cost of calling something we already know is throttled.
 *
 * @param string $id      Provider id.
 * @param int    $seconds Cool-off.
 */
function bxcore_ai_cooldown( $id, $seconds ) {
	set_transient( 'bxcore_ai_cool_' . $id, 1, max( 60, (int) $seconds ) );
}

/**
 * Is the provider currently cooling off?
 *
 * @param string $id Provider id.
 * @return bool
 */
function bxcore_ai_is_cooling( $id ) {
	return (bool) get_transient( 'bxcore_ai_cool_' . $id );
}

/**
 * Ask one provider. Returns the answer text, or '' on any failure.
 *
 * @param array  $p      Provider config.
 * @param string $system System prompt.
 * @param string $user   User prompt.
 * @return string
 */
function bxcore_ai_call( $p, $system, $user ) {
	$key = bxcore_ai_key( $p['id'] );
	if ( '' === $key ) {
		return '';
	}

	$endpoint = str_replace( '{model}', $p['model'], $p['endpoint'] );
	$args     = array(
		'timeout' => 12,
		'headers' => array( 'Content-Type' => 'application/json' ),
	);

	if ( 'gemini' === $p['shape'] ) {
		$args['headers']['x-goog-api-key'] = $key;
		$args['body']                      = wp_json_encode(
			array(
				'systemInstruction' => array( 'parts' => array( array( 'text' => $system ) ) ),
				'contents'          => array(
					array(
						'role'  => 'user',
						'parts' => array( array( 'text' => $user ) ),
					),
				),
				'generationConfig'  => array(
					'temperature'     => 0.2,
					'maxOutputTokens' => 400,
				),
			)
		);
	} else {
		$args['headers']['Authorization'] = 'Bearer ' . $key;
		if ( 'openrouter' === $p['id'] ) {
			$args['headers']['HTTP-Referer'] = home_url( '/' );
			$args['headers']['X-Title']      = get_bloginfo( 'name' );
		}
		$args['body'] = wp_json_encode(
			array(
				'model'       => $p['model'],
				'temperature' => 0.2,
				'max_tokens'  => 400,
				'messages'    => array(
					array(
						'role'    => 'system',
						'content' => $system,
					),
					array(
						'role'    => 'user',
						'content' => $user,
					),
				),
			)
		);
	}

	$res = wp_remote_post( $endpoint, $args );

	if ( is_wp_error( $res ) ) {
		bxcore_ai_cooldown( $p['id'], 5 * MINUTE_IN_SECONDS );
		return '';
	}

	$code = (int) wp_remote_retrieve_response_code( $res );
	if ( 200 !== $code ) {
		// 429 = out of quota for now, 401/403 = bad key. Both mean "skip me".
		$cool = ( 429 === $code ) ? 15 * MINUTE_IN_SECONDS : HOUR_IN_SECONDS;
		if ( $code >= 500 ) {
			$cool = 5 * MINUTE_IN_SECONDS;
		}
		bxcore_ai_cooldown( $p['id'], $cool );
		return '';
	}

	$body = json_decode( wp_remote_retrieve_body( $res ), true );
	if ( ! is_array( $body ) ) {
		return '';
	}

	$text = ( 'gemini' === $p['shape'] )
		? ( $body['candidates'][0]['content']['parts'][0]['text'] ?? '' )
		: ( $body['choices'][0]['message']['content'] ?? '' );

	return is_string( $text ) ? trim( $text ) : '';
}

/**
 * Is any provider configured and not cooling off?
 *
 * @return bool
 */
function bxcore_ai_available() {
	foreach ( bxcore_ai_providers() as $p ) {
		if ( '' !== bxcore_ai_key( $p['id'] ) && ! bxcore_ai_is_cooling( $p['id'] ) ) {
			return true;
		}
	}
	return false;
}

/**
 * Walk the provider chain until one answers.
 *
 * @param string $system System prompt.
 * @param string $user   User prompt.
 * @return array{text:string,provider:string}
 */
function bxcore_ai_complete( $system, $user ) {
	foreach ( bxcore_ai_providers() as $p ) {
		if ( '' === bxcore_ai_key( $p['id'] ) || bxcore_ai_is_cooling( $p['id'] ) ) {
			continue;
		}
		$text = bxcore_ai_call( $p, $system, $user );
		if ( '' !== $text ) {
			return array(
				'text'     => $text,
				'provider' => $p['id'],
			);
		}
	}
	return array(
		'text'     => '',
		'provider' => '',
	);
}

/* =========================================================================
 * 3b. Extractive answer — a written answer with no model at all
 *
 * A model is the nicest phrasing, not the only way to produce prose. Most of
 * what visitors ask is already answered in a human-written sentence somewhere
 * on this site: the FAQ entries ARE answers. Quoting them verbatim is both
 * free and the most accurate output possible — it cannot drift from the copy
 * because it IS the copy.
 *
 * So the answer tiers are: model phrasing if a provider is up, otherwise this,
 * otherwise links. Only the phrasing degrades; the visitor always gets prose.
 * ====================================================================== */

/**
 * Build an answer out of the retrieved passages themselves.
 *
 * @param string $query Visitor question.
 * @param array  $hits  Retrieved passages.
 * @return string Answer text, or '' when nothing quotable was found.
 */
function bxcore_kb_extract_answer( $query, $hits ) {
	if ( empty( $hits ) ) {
		return '';
	}

	// Best case: the top hit is an FAQ entry, so a written answer already
	// exists. Use it word for word.
	if ( 'faq' === $hits[0]['type'] && ! empty( $hits[0]['answer'] ) ) {
		return trim( $hits[0]['answer'] );
	}

	// Otherwise pick the sentences from the best passage that actually address
	// the question, rather than dumping the whole chunk.
	$terms = array_flip( bxcore_kb_tokens( $query ) );
	if ( ! $terms ) {
		return '';
	}

	$scored = array();
	foreach ( array_slice( $hits, 0, 2 ) as $hit ) {
		$body = $hit['text'];
		// Chunks are prefixed with "Title. " — drop it so the answer does not
		// open by restating the page name.
		$body = preg_replace( '/^' . preg_quote( $hit['title'], '/' ) . '\.\s*/u', '', $body );

		foreach ( preg_split( '/(?<=[.!?])\s+/u', $body ) ?: array() as $sentence ) {
			$sentence = trim( $sentence );
			$len      = mb_strlen( $sentence );
			if ( $len < 40 || $len > 320 ) {
				continue;
			}
			$hits_in = 0;
			foreach ( array_unique( bxcore_kb_tokens( $sentence ) ) as $t ) {
				if ( isset( $terms[ $t ] ) ) {
					$hits_in++;
				}
			}
			if ( $hits_in < 1 ) {
				continue;
			}
			// Favour density over raw length so a short, on-point sentence wins.
			$scored[ $sentence ] = $hits_in / sqrt( max( 1, $len / 60 ) );
		}
	}

	if ( ! $scored ) {
		return '';
	}

	arsort( $scored );
	$picked = array_slice( array_keys( $scored ), 0, 2 );

	// Restore reading order — ranking scrambled them.
	$out = array();
	foreach ( array_slice( $hits, 0, 2 ) as $hit ) {
		foreach ( preg_split( '/(?<=[.!?])\s+/u', $hit['text'] ) ?: array() as $sentence ) {
			$sentence = trim( $sentence );
			if ( in_array( $sentence, $picked, true ) && ! in_array( $sentence, $out, true ) ) {
				$out[] = $sentence;
			}
		}
	}

	return trim( implode( ' ', $out ) );
}

/* =========================================================================
 * 4. Endpoint — retrieval first, model second, links as the floor
 * ====================================================================== */

/**
 * Minimum BM25 score before we consider the site to actually cover a question.
 * Below this we say nothing rather than risk an unrelated answer.
 *
 * @return float
 */
function bxcore_kb_threshold() {
	return (float) apply_filters( 'bxcore_kb_threshold', 0.8 );
}

add_action( 'wp_ajax_bx_faq_ask', 'bxcore_faq_ask' );
add_action( 'wp_ajax_nopriv_bx_faq_ask', 'bxcore_faq_ask' );
/**
 * Answer a visitor question from site content.
 *
 * Always responds 200 with a usable payload — the front end has no error path
 * to render, by design.
 */
function bxcore_faq_ask() {
	$q = isset( $_POST['q'] ) ? sanitize_text_field( wp_unslash( $_POST['q'] ) ) : '';
	$q = trim( mb_substr( $q, 0, 300 ) );

	if ( mb_strlen( $q ) < 3 ) {
		wp_send_json_success( array( 'status' => 'none' ) );
	}

	// Repeat questions are common; serving them from cache keeps the free
	// quotas for genuinely new ones. The knowledge base's build time is part
	// of the key, so rebuilding the index — or retuning retrieval — expires
	// every cached answer instead of leaving stale "we don't cover that"
	// replies to outlive the content that now answers them.
	$kb_stamp  = (int) ( bxcore_kb_get()['built'] ?? 0 );
	$cache_key = 'bxfaq_' . md5( $kb_stamp . '|' . mb_strtolower( $q ) );
	$cached    = get_transient( $cache_key );
	if ( is_array( $cached ) ) {
		wp_send_json_success( $cached );
	}

	// Light rate limit — this endpoint is public and spends free-tier quota.
	$rl_key = 'bxfaq_rl_' . md5( bxcore_client_ip() );
	$hits   = (int) get_transient( $rl_key );
	if ( $hits >= 20 ) {
		wp_send_json_success( array( 'status' => 'none' ) );
	}
	set_transient( $rl_key, $hits + 1, 10 * MINUTE_IN_SECONDS );

	$found      = bxcore_kb_search( $q, 4 );
	$confidence = bxcore_kb_confidence( $found );

	// Nothing on this site is relevant — say nothing rather than guess.
	if ( 'none' === $confidence ) {
		$payload = array( 'status' => 'none' );
		set_transient( $cache_key, $payload, DAY_IN_SECONDS );
		wp_send_json_success( $payload );
	}

	$sources = array();
	$seen    = array();
	foreach ( $found['hits'] as $h ) {
		if ( isset( $seen[ $h['url'] ] ) ) {
			continue;
		}
		$seen[ $h['url'] ] = true;
		$sources[]         = array(
			'title' => $h['title'],
			'url'   => $h['url'],
		);
	}

	/*
	 * Medium confidence means the question contains words our lexical index
	 * does not recognise, so WE cannot tell whether the passages really answer
	 * it. A model can — it reads meaning rather than matching tokens, and it
	 * has an explicit NO_ANSWER escape. So when a provider is available the
	 * judgement is handed to it; when none is, we fall back to offering the
	 * pages, because a link cannot be wrong the way an assertion can.
	 */
	if ( 'medium' === $confidence && ! bxcore_ai_available() ) {
		$payload = array(
			'status'  => 'links',
			'sources' => array_slice( $sources, 0, 3 ),
		);
		set_transient( $cache_key, $payload, HOUR_IN_SECONDS );
		wp_send_json_success( $payload );
	}

	$context = '';
	foreach ( $found['hits'] as $i => $h ) {
		$context .= sprintf( "[%d] %s\n%s\n\n", $i + 1, $h['title'], $h['text'] );
	}

	$system = 'You are the assistant for ' . get_bloginfo( 'name' ) . ', a digital marketing agency in Jaipur, India. '
		. 'Answer ONLY from the numbered passages supplied by the user. '
		. 'If the passages do not contain the answer, reply with exactly: NO_ANSWER. '
		. 'Never invent services, prices, timelines, guarantees, statistics or contact details. '
		/*
		 * Mirror the visitor's language. The passages are always English, but
		 * this audience asks in Hinglish as often as English, and being
		 * answered in the language you asked in is most of what makes it feel
		 * like a reply rather than a search result.
		 */
		. 'CRITICAL: reply in the SAME language and script the question was asked in. '
		. 'If the question is in Hinglish (Hindi written in Roman letters), reply in natural Hinglish. '
		. 'If it is in Hindi, Marathi, Gujarati or any other language, reply in that language. '
		. 'If it is in English, reply in English. Translate the facts from the passages; never change them. '
		. 'Write 2-4 short sentences in a plain, friendly business tone. '
		. 'Write as "we". Do not mention the passages, sources, numbering or that you were given context. '
		. 'Do not use markdown, headings or bullet points.';

	$user = "Passages:\n\n" . $context . "Question: " . $q;

	$ai = bxcore_ai_complete( $system, $user );

	$answer = $ai['text'];
	if ( '' !== $answer && preg_match( '/NO_ANSWER/i', $answer ) ) {
		$answer = '';
	}

	if ( '' !== $answer ) {
		$payload = array(
			'status'  => 'answer',
			'answer'  => wp_strip_all_tags( $answer ),
			'sources' => array_slice( $sources, 0, 3 ),
		);
		set_transient( $cache_key, $payload, WEEK_IN_SECONDS );
		wp_send_json_success( $payload );
	}

	// No model available (no keys, all throttled, or all refused) — but the
	// site still answers this in writing, so quote it rather than dropping to
	// bare links. Same shape as a model answer, so the front end renders it
	// identically and the visitor sees no difference in kind.
	// On a medium-confidence query the model is the only thing qualified to
	// judge; if it declined, quoting site copy anyway would put that copy
	// against a question we were never sure of.
	$extract = ( 'high' === $confidence ) ? bxcore_kb_extract_answer( $q, $found['hits'] ) : '';
	if ( '' !== $extract ) {
		$payload = array(
			'status'  => 'answer',
			'answer'  => wp_strip_all_tags( $extract ),
			'sources' => array_slice( $sources, 0, 3 ),
		);
		// Short cache: a provider may free up and phrase it better.
		set_transient( $cache_key, $payload, 10 * MINUTE_IN_SECONDS );
		wp_send_json_success( $payload );
	}

	/*
	 * If a model was available and still declined, that refusal is the most
	 * informed judgement in the system — respect it. Falling through to links
	 * here showed "How long does it take to build a strong brand" against
	 * "क्या आप बिरयानी बनाते हैं", which the model had just correctly refused.
	 * Links are the fallback for having NO judge, not for overruling one.
	 */
	if ( 'high' !== $confidence && bxcore_ai_available() ) {
		$payload = array( 'status' => 'none' );
		set_transient( $cache_key, $payload, HOUR_IN_SECONDS );
		wp_send_json_success( $payload );
	}

	// Last resort: hand back what we found as links. Accurate and useful, and
	// indistinguishable from a plain "here's where to look" result.
	$payload = array(
		'status'  => 'links',
		'sources' => array_slice( $sources, 0, 3 ),
	);
	// Short cache only: a provider may free up in minutes.
	set_transient( $cache_key, $payload, 5 * MINUTE_IN_SECONDS );
	wp_send_json_success( $payload );
}

/* =========================================================================
 * 5. Front end
 * ====================================================================== */

add_action( 'wp_enqueue_scripts', 'bxcore_faq_assets', 20 );
/**
 * Load the assistant only on the FAQ page.
 */
function bxcore_faq_assets() {
	if ( ! is_page( 'faqs' ) ) {
		return;
	}

	wp_enqueue_style(
		'bx-faq-assistant',
		BXCORE_URL . 'assets/faq-assistant.css',
		array(),
		BXCORE_VER
	);
	wp_enqueue_script(
		'bx-faq-assistant',
		BXCORE_URL . 'assets/faq-assistant.js',
		array(),
		BXCORE_VER,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
	wp_localize_script(
		'bx-faq-assistant',
		'BX_FAQ',
		array(
			'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
			/**
			 * Rotating example queries for the animated placeholder.
			 *
			 * @param array $examples Example searches.
			 */
			'examples' => apply_filters(
				'bxcore_faq_placeholders',
				array(
					'How much does a project cost?',
					'How long until SEO shows results?',
					'Do you work with businesses outside Jaipur?',
					'Is the first strategy call really free?',
					'Do you manage the ad budget for us?',
					'How quickly do you reply?',
				)
			),
			'contact'  => home_url( '/contact/' ),
		)
	);
}

/* =========================================================================
 * 6. Page copy — rendered, not post_content
 *
 * Service and industry pages keep their copy in ACF fields and template
 * defaults, so post_content is empty for most of them: indexing it alone
 * captured 2 pages out of 24 and missed exactly the material visitors ask
 * about. We therefore index the RENDERED page.
 *
 * Fetching 24 pages over HTTP is too slow to do inside a visitor's request,
 * so it happens on the nightly cron and is cached in its own option. The
 * synchronous build reads that cache if it exists and simply goes without it
 * on a cold start.
 * ====================================================================== */

const BXCORE_KB_PAGES_OPTION = 'bxcore_faq_kb_pages';

add_action( 'bxcore_kb_rebuild_event', 'bxcore_kb_refresh_pages', 5 );
/**
 * Fetch and cache the rendered text of every published page.
 */
function bxcore_kb_refresh_pages() {
	$pages = get_pages(
		array(
			'post_status' => 'publish',
			'number'      => 60,
		)
	);

	$store = array();
	foreach ( $pages as $page ) {
		// The FAQ page itself is already indexed from its repeater, and these
		// two carry no answerable copy.
		// Legal boilerplate is not answerable copy, and its generic vocabulary
		// was producing false matches ("do you sell used cars" hit the privacy
		// policy on 'sell' + 'used').
		if ( in_array( $page->post_name, array( 'faqs', 'thank-you', 'sitemap', 'privacy-policy', 'terms-and-conditions', 'disclaimer' ), true ) ) {
			continue;
		}

		$res = wp_remote_get(
			get_permalink( $page->ID ),
			array(
				'timeout'    => 20,
				'sslverify'  => false,
				'user-agent' => 'BoostronixX/kb-indexer',
			)
		);
		if ( is_wp_error( $res ) || 200 !== (int) wp_remote_retrieve_response_code( $res ) ) {
			continue;
		}

		$html = wp_remote_retrieve_body( $res );
		if ( preg_match( '#<main\b[^>]*>(.*?)</main>#is', $html, $m ) ) {
			$html = $m[1];
		}
		// Drop chrome that would otherwise pollute every page's index.
		$html = preg_replace( '#<(header|footer|nav|form)\b[^>]*>.*?</\1>#is', ' ', $html );

		$text = bxcore_kb_text( $html );
		if ( mb_strlen( $text ) < 120 ) {
			continue;
		}

		$store[ $page->ID ] = array(
			'title' => $page->post_title,
			'url'   => get_permalink( $page->ID ),
			'text'  => $text,
		);
	}

	if ( $store ) {
		update_option( BXCORE_KB_PAGES_OPTION, $store, false );
		// Rebuild so the fresh page copy is actually searchable.
		delete_option( BXCORE_KB_OPTION );
	}
}

add_filter( 'bxcore_kb_documents', 'bxcore_kb_add_page_docs' );
/**
 * Merge the cached rendered-page text into the knowledge base.
 *
 * @param array $docs Existing documents.
 * @return array
 */
function bxcore_kb_add_page_docs( $docs ) {
	$store = get_option( BXCORE_KB_PAGES_OPTION );
	if ( ! is_array( $store ) ) {
		return $docs;
	}

	// Drop the thin post_content versions of any page we have rendered copy
	// for, so the same page is not represented twice.
	$have = array();
	foreach ( $store as $entry ) {
		$have[ untrailingslashit( $entry['url'] ) ] = true;
	}
	$docs = array_values(
		array_filter(
			$docs,
			function ( $d ) use ( $have ) {
				return 'page' !== $d['type'] || ! isset( $have[ untrailingslashit( $d['url'] ) ] );
			}
		)
	);

	foreach ( $store as $entry ) {
		foreach ( bxcore_kb_chunk( $entry['text'] ) as $chunk ) {
			$docs[] = array(
				'title' => $entry['title'],
				'url'   => $entry['url'],
				'type'  => 'page',
				'text'  => $entry['title'] . '. ' . $chunk,
			);
		}
	}

	return $docs;
}
