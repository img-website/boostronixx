<?php
/**
 * CLI test: FAQPage JSON-LD is rebuilt from the page's FAQ rows.
 * Run: php tests/page-schema-faq-test.php
 */
define( 'ABSPATH', __DIR__ . '/' );
function add_action() {}
function add_filter() {}
function wp_strip_all_tags( $s ) {
	return trim( strip_tags( $s ) );
}
require __DIR__ . '/../wp-content/themes/boostronixx/inc/page-schema.php';

$fails = 0;
function check( $name, $cond ) {
	global $fails;
	echo ( $cond ? 'PASS ' : 'FAIL ' ) . $name . PHP_EOL;
	if ( ! $cond ) {
		$fails++;
	}
}
function faq_nodes( $nodes ) {
	return array_values( array_filter( $nodes, fn( $n ) => is_array( $n ) && ( $n['@type'] ?? '' ) === 'FAQPage' ) );
}
$new = array( array( 'q' => 'New Q?', 'a' => '<p>New <b>A</b></p>' ) );

// 1. @graph: old FAQPage replaced by one built from the rows; HTML stripped.
$in  = '{"@context":"https://schema.org","@graph":[{"@type":"WebPage","name":"X"},{"@type":"FAQPage","mainEntity":[{"@type":"Question","name":"old"}]}]}';
$out = json_decode( bx_schema_replace_faqpage( $in, $new ), true );
$faq = faq_nodes( $out['@graph'] );
check( 'graph keeps one FAQPage', count( $faq ) === 1 );
check( 'graph FAQ question from rows', $faq[0]['mainEntity'][0]['name'] === 'New Q?' );
check( 'graph FAQ answer is plain text', $faq[0]['mainEntity'][0]['acceptedAnswer']['text'] === 'New A' );
check( 'graph keeps WebPage', $out['@graph'][0]['@type'] === 'WebPage' );

// 2. Top-level list of nodes.
$out2 = json_decode( bx_schema_replace_faqpage( '[{"@type":"Organization"},{"@type":"FAQPage","mainEntity":[]}]', $new ), true );
check( 'list keeps Organization', $out2[0]['@type'] === 'Organization' );
check( 'list has exactly one FAQPage', count( faq_nodes( $out2 ) ) === 1 && faq_nodes( $out2 )[0]['mainEntity'][0]['name'] === 'New Q?' );

// 3. Empty rows: FAQPage removed, nothing added, other nodes kept.
$out3 = json_decode( bx_schema_replace_faqpage( $in, array() ), true );
check( 'empty rows remove FAQPage', count( faq_nodes( $out3['@graph'] ) ) === 0 && count( $out3['@graph'] ) === 1 );

// 4. Invalid JSON returned unchanged.
check( 'invalid JSON unchanged', bx_schema_replace_faqpage( '{not json', $new ) === '{not json' );

// 5. Single top-level FAQPage object replaced.
$out5 = json_decode( bx_schema_replace_faqpage( '{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"old"}]}', $new ), true );
$nodes5 = isset( $out5['@graph'] ) ? $out5['@graph'] : ( isset( $out5['@type'] ) ? array( $out5 ) : $out5 );
check( 'single FAQPage replaced', count( faq_nodes( $nodes5 ) ) === 1 && faq_nodes( $nodes5 )[0]['mainEntity'][0]['name'] === 'New Q?' );

// 6. Encoding: no escaped slashes, no \u escapes for unicode.
$raw6 = bx_schema_replace_faqpage( $in, array( array( 'q' => 'Cost in ₹?', 'a' => 'See https://www.boostronixx.com/x/' ) ) );
check( 'unescaped slashes and unicode', strpos( $raw6, chr( 92 ) . '/' ) === false && strpos( $raw6, chr( 92 ) . 'u20b9' ) === false && strpos( $raw6, '₹' ) !== false );

// 6b. An answer can't close the JSON-LD <script> early (entity-encoded or raw).
$raw6b = bx_schema_replace_faqpage( $in, array( array( 'q' => 'Pixel?', 'a' => 'Paste &lt;/script&gt;&lt;script&gt;fbq()&lt;/script&gt; and </script><b>x</b>' ) ) );
check( 'no script tag breakout in output', false === stripos( $raw6b, '</script' ) && false === stripos( $raw6b, '<script' ) );
check( 'breakout-safe output still decodes to the text', false !== strpos( json_decode( $raw6b, true )['@graph'][1]['mainEntity'][0]['acceptedAnswer']['text'], '</script>' ) );

// 7. Map has every FAQ page, with [repeater, q_sub, a_sub].
$map = bx_schema_faq_map();
check( 'map covers 14 keys', count( $map ) === 14 && isset( $map['__front'], $map['digital-marketing'], $map['faqs'] ) );
check( 'map DM sub-fields', $map['digital-marketing'] === array( 'digital_marketing_faq', 'digital_marketing_faq_question', 'digital_marketing_faq_answer' ) );

exit( $fails ? 1 : 0 );
