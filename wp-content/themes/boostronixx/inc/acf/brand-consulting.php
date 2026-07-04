<?php
/**
 * ACF field group for the Brand Consulting page template (page-brand-consulting.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_brand_consulting' );
/**
 * Register the Brand Consulting field group.
 */
function bx_acf_brand_consulting() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_brand-consulting',
			'title'      => 'Brand Consulting Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-brand-consulting.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_brand_consulting_hero_badge',
					'name'          => 'brand_consulting_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Brand strategy & identity',
				),
				array(
					'key'           => 'f_brand_consulting_hero_heading',
					'name'          => 'brand_consulting_hero_heading',
					'label'         => 'Heading — before accent',
					'type'          => 'text',
					'default_value' => 'A brand people ',
				),
				array(
					'key'           => 'f_brand_consulting_hero_heading_accent',
					'name'          => 'brand_consulting_hero_heading_accent',
					'label'         => 'Heading — accent words',
					'type'          => 'text',
					'default_value' => 'instantly recognise',
				),
				array(
					'key'           => 'f_brand_consulting_hero_text',
					'name'          => 'brand_consulting_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "As a branding agency in Jaipur, we build positioning, strategy, naming, logo and a complete visual identity — researched, refined and designed to convert. We make sure you look like the leader you're becoming.",
				),
				array(
					'key'           => 'f_brand_consulting_hero_cta1',
					'name'          => 'brand_consulting_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_brand_consulting_hero_cta2',
					'name'          => 'brand_consulting_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- STATEMENT BAND TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_statement',
					'label' => 'Statement band',
					'type'  => 'tab',
				),
				array(
					'key'          => 'f_brand_consulting_statement_note',
					'label'        => 'Note',
					'type'         => 'message',
					'message'      => 'The statement sentence contains inline accent highlights (&lt;span&gt;) and is left in the template as static markup.',
				),

				// ---------------- BUILDING BLOCKS TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_blocks',
					'label' => 'Building blocks',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_brand_consulting_blocks_eyebrow',
					'name'          => 'brand_consulting_blocks_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The building blocks',
				),
				array(
					'key'           => 'f_brand_consulting_blocks_heading',
					'name'          => 'brand_consulting_blocks_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'What our branding agency in Jaipur builds',
				),
				array(
					'key'          => 'f_brand_consulting_blocks_items',
					'name'         => 'brand_consulting_blocks',
					'label'        => 'Building block cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:compass).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add block',
					'sub_fields'   => array(
						array(
							'key'   => 'f_brand_consulting_block_icon',
							'name'  => 'brand_consulting_block_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_brand_consulting_block_title',
							'name'  => 'brand_consulting_block_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_brand_consulting_block_text',
							'name'  => 'brand_consulting_block_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- PALETTE & TYPE TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_palette',
					'label' => 'Palette & type',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_brand_consulting_palette_eyebrow',
					'name'          => 'brand_consulting_palette_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Crafted, not generated',
				),
				array(
					'key'           => 'f_brand_consulting_palette_heading',
					'name'          => 'brand_consulting_palette_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Colour and type with intent',
				),
				array(
					'key'           => 'f_brand_consulting_palette_text',
					'name'          => 'brand_consulting_palette_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'As a brand identity agency in Jaipur, we choose every palette and typeface for meaning and legibility — tested across screens, print and the real world before it ships.',
				),
				array(
					'key'           => 'f_brand_consulting_palette_img_file',
					'name'          => 'brand_consulting_palette_image',
					'label'         => 'Moodboard / palette image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_brand_consulting_palette_img_alt',
					'name'          => 'brand_consulting_palette_image_alt',
					'label'         => 'Moodboard image — alt text',
					'type'          => 'text',
					'default_value' => 'BoostronixX brand identity moodboard and collateral mockups',
				),
				array(
					'key'           => 'f_brand_consulting_palette_img_cap_b',
					'name'          => 'brand_consulting_palette_image_caption_title',
					'label'         => 'Moodboard image — caption title',
					'type'          => 'text',
					'default_value' => 'Moodboard · 1280×800',
				),
				array(
					'key'           => 'f_brand_consulting_palette_img_cap_s',
					'name'          => 'brand_consulting_palette_image_caption_text',
					'label'         => 'Moodboard image — caption text',
					'type'          => 'text',
					'default_value' => 'Flat-lay of brand collateral — business cards, packaging, signage — or a moodboard grid. Shows identity applied in the real world.',
				),

				// ---------------- PROCESS TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_process',
					'label' => 'Process',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_brand_consulting_process_eyebrow',
					'name'          => 'brand_consulting_process_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'How we build it',
				),
				array(
					'key'           => 'f_brand_consulting_process_heading',
					'name'          => 'brand_consulting_process_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'From blank page to brand book',
				),
				array(
					'key'          => 'f_brand_consulting_process_items',
					'name'         => 'brand_consulting_process',
					'label'        => 'Process steps',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array(
							'key'   => 'f_brand_consulting_process_num',
							'name'  => 'brand_consulting_process_number',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_brand_consulting_process_title',
							'name'  => 'brand_consulting_process_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_brand_consulting_process_text',
							'name'  => 'brand_consulting_process_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- DELIVERABLES TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_deliverables',
					'label' => 'Deliverables',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_brand_consulting_deliv_eyebrow',
					'name'          => 'brand_consulting_deliverables_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => "What's in your brand book",
				),
				array(
					'key'           => 'f_brand_consulting_deliv_heading',
					'name'          => 'brand_consulting_deliverables_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Tangible deliverables, not just ideas',
				),
				array(
					'key'           => 'f_brand_consulting_deliv_items',
					'name'          => 'brand_consulting_deliverables_items',
					'label'         => 'Deliverable items',
					'instructions'  => 'One per line. Leave empty to keep the current defaults.',
					'type'          => 'textarea',
					'rows'          => 6,
					'default_value' => "Logo suite & lockups\nColour & type system\nBrand voice & messaging\nTemplates & collateral\nSocial & ad kit\nFull guidelines PDF",
				),
				array(
					'key'           => 'f_brand_consulting_why_eyebrow',
					'name'          => 'brand_consulting_why_eyebrow',
					'label'         => 'Why us — eyebrow',
					'type'          => 'text',
					'default_value' => 'Why BoostronixX',
				),
				array(
					'key'           => 'f_brand_consulting_why_heading',
					'name'          => 'brand_consulting_why_heading',
					'label'         => 'Why us — heading',
					'type'          => 'text',
					'default_value' => 'Strategy-led, research-backed',
				),
				array(
					'key'           => 'f_brand_consulting_why_text',
					'name'          => 'brand_consulting_why_text',
					'label'         => 'Why us — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Since 2026 our brand strategy in Jaipur has shaped 50+ brands across real estate, schools and D2C — from startup branding in Jaipur to full rebrands. We don't decorate; we make decisions that hold up commercially and look beautiful doing it.",
				),
				array(
					'key'           => 'f_brand_consulting_why_note',
					'name'          => 'brand_consulting_why_note',
					'label'         => 'Why us — note card text',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'Designed & reviewed by the BoostronixX brand team — strategy, design and copy under one roof.',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_brand_consulting_faq_eyebrow',
					'name'          => 'brand_consulting_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_brand_consulting_faq_heading',
					'name'          => 'brand_consulting_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Brand consulting in Jaipur, answered',
				),
				array(
					'key'          => 'f_brand_consulting_faq_items',
					'name'         => 'brand_consulting_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_brand_consulting_faq_q',
							'name'  => 'brand_consulting_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_brand_consulting_faq_a',
							'name'  => 'brand_consulting_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED & CTA TAB ----------------
				array(
					'key'   => 'tab_brand_consulting_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_brand_consulting_related_eyebrow',
					'name'          => 'brand_consulting_related_eyebrow',
					'label'         => 'Related — eyebrow',
					'type'          => 'text',
					'default_value' => 'Pairs well with',
				),
				array(
					'key'          => 'f_brand_consulting_related_items',
					'name'         => 'brand_consulting_related',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add related',
					'sub_fields'   => array(
						array(
							'key'   => 'f_brand_consulting_related_icon',
							'name'  => 'brand_consulting_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_brand_consulting_related_title',
							'name'  => 'brand_consulting_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_brand_consulting_related_meta',
							'name'  => 'brand_consulting_related_meta',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_brand_consulting_related_link',
							'name'          => 'brand_consulting_related_link',
							'label'         => 'Link',
							'type'          => 'page_link',
							'allow_null'    => 1,
							'allow_archives' => 0,
						),
					),
				),
				array(
					'key'           => 'f_brand_consulting_cta_heading',
					'name'          => 'brand_consulting_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => "Let's build a brand worth remembering",
				),
				array(
					'key'           => 'f_brand_consulting_cta_text',
					'name'          => 'brand_consulting_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Book a brand discovery call with the branding agency in Jaipur ambitious businesses trust — we'll explore your positioning and show you what's possible.",
				),
				array(
					'key'           => 'f_brand_consulting_cta_btn1',
					'name'          => 'brand_consulting_cta_button_primary',
					'label'         => 'CTA — primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_brand_consulting_cta_btn2',
					'name'          => 'brand_consulting_cta_button_secondary',
					'label'         => 'CTA — secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
			),
		)
	);
}

/**
 * Render the Brand Consulting "building blocks" cards from ACF
 * (brand_consulting_blocks repeater), falling back to the original six defaults
 * when empty / ACF off.
 */
function bx_brand_consulting_render_blocks() {
	$defaults = array(
		array( 'icon' => 'lucide:compass', 'title' => 'Brand Strategy', 'text' => 'Research, audience and the core idea everything builds on.' ),
		array( 'icon' => 'lucide:crosshair', 'title' => 'Positioning', 'text' => "A sharp, ownable space in your customer's mind." ),
		array( 'icon' => 'lucide:type', 'title' => 'Naming &amp; Voice', 'text' => 'A name and tone that sound unmistakably you.' ),
		array( 'icon' => 'lucide:pen-tool', 'title' => 'Logo &amp; Identity', 'text' => 'A flexible logo system and signature visual marks.' ),
		array( 'icon' => 'lucide:swatch-book', 'title' => 'Visual System', 'text' => 'Colour, type, imagery and layout that scale anywhere.' ),
		array( 'icon' => 'lucide:book-marked', 'title' => 'Brand Guidelines', 'text' => 'A clear rulebook so your brand stays consistent.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'brand_consulting_blocks' ) ) {
		while ( have_rows( 'brand_consulting_blocks' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'brand_consulting_block_icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'brand_consulting_block_title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'brand_consulting_block_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $b ) {
		$delay = ( 0 === $i % 3 ) ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		printf(
			'<div class="reveal rounded-xl2 border border-line p-7 hover:border-accent transition"%s><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">%s</h3><p class="text-ink-soft text-sm mt-2">%s</p></div>',
			$delay,
			$b['icon'], // Pre-escaped above / known-safe default markup.
			$b['title'],
			$b['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / defaults are trusted inline markup.
	}
}

/**
 * Render the Brand Consulting process timeline steps from ACF
 * (brand_consulting_process repeater), falling back to the original five
 * defaults when empty / ACF off.
 */
function bx_brand_consulting_render_process() {
	$defaults = array(
		array( 'number' => '1', 'title' => 'Discovery', 'text' => 'Workshops and research to understand your business, audience and competitors.' ),
		array( 'number' => '2', 'title' => 'Strategy', 'text' => 'Positioning, messaging and the core idea your brand will stand for.' ),
		array( 'number' => '3', 'title' => 'Identity design', 'text' => 'Logo, colour, type and visual language — explored, refined and chosen with you.' ),
		array( 'number' => '4', 'title' => 'System &amp; assets', 'text' => 'Templates, collateral and ready-to-use files across every touchpoint.' ),
		array( 'number' => '5', 'title' => 'Guidelines &amp; handoff', 'text' => 'A complete brand book so anyone can use your brand correctly.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'brand_consulting_process' ) ) {
		while ( have_rows( 'brand_consulting_process' ) ) {
			the_row();
			$items[] = array(
				'number' => esc_html( (string) get_sub_field( 'brand_consulting_process_number' ) ),
				'title'  => esc_html( (string) get_sub_field( 'brand_consulting_process_title' ) ),
				'text'   => esc_html( (string) get_sub_field( 'brand_consulting_process_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $s ) {
		$delay  = 0 === $i ? '' : ' data-delay="' . (int) min( $i, 2 ) . '"';
		$bubble = 0 === $i ? 'bg-accent' : 'bg-ink';
		printf(
			'<div class="reveal relative"%s><span class="absolute -left-14 top-0 grid place-items-center h-10 w-10 rounded-full %s text-paper font-display tt">%s</span><h3 class="font-display text-xl tt">%s</h3><p class="text-ink-soft text-sm mt-1.5 leading-relaxed">%s</p></div>',
			$delay,
			$bubble,
			$s['number'],
			$s['title'],
			$s['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / defaults are trusted inline markup.
	}
}

/**
 * Render the Brand Consulting deliverable check items from ACF
 * (brand_consulting_deliverables_items textarea, one per line), falling back to
 * the original six defaults when empty / ACF off.
 */
function bx_brand_consulting_render_deliverables() {
	$defaults = array(
		'Logo suite &amp; lockups',
		'Colour &amp; type system',
		'Brand voice &amp; messaging',
		'Templates &amp; collateral',
		'Social &amp; ad kit',
		'Full guidelines PDF',
	);

	$raw   = bx_field( 'brand_consulting_deliverables_items', false, '' );
	$items = $raw ? bx_lines( $raw ) : array();
	if ( ! $items ) {
		$items   = $defaults;
		$escaped = false; // Defaults already contain trusted inline entities.
	} else {
		$escaped = true;
	}

	foreach ( $items as $i => $d ) {
		$delay = ( 0 === $i % 2 ) ? '' : ' data-delay="1"';
		$label = $escaped ? esc_html( $d ) : $d;
		printf(
			'<div class="reveal flex items-center gap-3 rounded-xl bg-white/5 border border-white/10 p-4"%s><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon><span class="text-sm">%s</span></div>',
			$delay,
			$label
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / defaults are trusted inline markup.
	}
}

/**
 * Render the Brand Consulting FAQ accordion items from ACF
 * (brand_consulting_faq_items repeater), falling back to the original default
 * questions when empty / ACF off.
 */
function bx_brand_consulting_render_faqs() {
	$defaults = array(
		array(
			'q' => 'How long does a brand identity take?',
			'a' => "Most brand identities take 3–5 weeks depending on scope and the number of review rounds. A full strategy-plus-identity engagement can run a little longer — we'll share a clear timeline in your proposal.",
		),
		array(
			'q' => 'Do I own the logo and files?',
			'a' => 'Yes. Unlike a templated logo design company in Jaipur, we hand over real ownership — on final payment, full rights to your logo, identity and source files transfer to you, along with editable files where applicable.',
		),
		array(
			'q' => 'Can you rebrand an existing business?',
			'a' => "Absolutely — as a rebranding agency in Jaipur we handle full rebrands and refreshes, carrying forward the equity worth keeping while modernising everything that's holding you back.",
		),
		array(
			'q' => 'Do you build the website too?',
			'a' => 'Yes — branding, UI/UX and website design are all in-house, so your new identity rolls out seamlessly across every channel.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'brand_consulting_faq_items' ) ) {
		while ( have_rows( 'brand_consulting_faq_items' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'brand_consulting_faq_question' ),
				'a' => (string) get_sub_field( 'brand_consulting_faq_answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}

/**
 * Render the Brand Consulting "Pairs well with" related cards from ACF
 * (brand_consulting_related repeater), falling back to the original three
 * defaults when empty / ACF off.
 */
function bx_brand_consulting_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:figma', 'title' => 'UI/UX Design', 'meta' => 'Identity in product', 'url' => '/services/ui-ux-design/' ),
		array( 'icon' => 'lucide:monitor-smartphone', 'title' => 'Website Design', 'meta' => 'Brand, live', 'url' => '/services/website-design/' ),
		array( 'icon' => 'lucide:thumbs-up', 'title' => 'Social Media', 'meta' => 'Brand in the feed', 'url' => '/services/social-media-marketing/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'brand_consulting_related' ) ) {
		while ( have_rows( 'brand_consulting_related' ) ) {
			the_row();
			$url     = (string) get_sub_field( 'brand_consulting_related_link' );
			$items[] = array(
				'icon'  => (string) get_sub_field( 'brand_consulting_related_icon' ),
				'title' => (string) get_sub_field( 'brand_consulting_related_title' ),
				'meta'  => (string) get_sub_field( 'brand_consulting_related_meta' ),
				'url'   => $url,
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		$url   = $r['url'] ? $r['url'] : '#';
		printf(
			'<a href="%s" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>',
			esc_url( $url ),
			$delay,
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['meta'] )
		);
	}
}
