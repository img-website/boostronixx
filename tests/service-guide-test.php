<?php
/**
 * CLI test: the service-page guide renders only real content, on a light band.
 * Run: php tests/service-guide-test.php
 */
define( 'ABSPATH', __DIR__ . '/' );
$GLOBALS['bx_test_content'] = '';
function get_queried_object_id() {
	return 1;
}
function get_post_field( $field, $id ) {
	return $GLOBALS['bx_test_content'];
}
function apply_filters( $hook, $value ) {
	// Stand-in for the_content: drop block comments, as do_blocks() would.
	return preg_replace( '/<!--.*?-->/s', '', $value );
}
function wp_strip_all_tags( $s ) {
	return trim( strip_tags( $s ) );
}
function esc_attr( $s ) {
	return htmlspecialchars( (string) $s, ENT_QUOTES );
}
function esc_html( $s ) {
	return htmlspecialchars( (string) $s, ENT_QUOTES );
}
function bx_article_content( $html ) {
	return array( $html, array() );
}

$fails = 0;
function check( $name, $cond ) {
	global $fails;
	echo ( $cond ? 'PASS ' : 'FAIL ' ) . $name . PHP_EOL;
	if ( ! $cond ) {
		$fails++;
	}
}
function render( $content ) {
	$GLOBALS['bx_test_content'] = $content;
	ob_start();
	include __DIR__ . '/../wp-content/themes/boostronixx/template-parts/service-guide.php';
	return trim( ob_get_clean() );
}

check( 'empty content renders nothing', '' === render( '' ) );
check( 'empty paragraph block renders nothing', '' === render( "<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->" ) );
$out = render( '<h2>Why it works</h2><p>Real guide text.</p>' );
check( 'real content renders the guide section', false !== strpos( $out, 'id="guide"' ) && false !== strpos( $out, 'Real guide text.' ) );
check( 'guide sits on a light band (readable on dark pages)', (bool) preg_match( '/<section id="guide" class="[^"]*\bbg-paper\b[^"]*\btext-ink\b/', $out ) );
check( 'image-only content still renders', false !== strpos( render( '<figure><img src="a.jpg" alt=""></figure>' ), 'id="guide"' ) );

exit( $fails ? 1 : 0 );
