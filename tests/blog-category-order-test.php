<?php
/**
 * CLI test: blog category chips follow the digital-marketing-first priority.
 * Run: php tests/blog-category-order-test.php
 */
define( 'ABSPATH', __DIR__ . '/' );
function add_action() {}
function add_filter() {}
require __DIR__ . '/../wp-content/themes/boostronixx/inc/blog.php';

$fails = 0;
function check( $name, $cond ) {
	global $fails;
	echo ( $cond ? 'PASS ' : 'FAIL ' ) . $name . PHP_EOL;
	if ( ! $cond ) {
		$fails++;
	}
}
function term( $slug, $name ) {
	return (object) array( 'slug' => $slug, 'name' => $name );
}
$slugs = function ( $terms ) {
	return array_map( fn( $t ) => $t->slug, $terms );
};

// Alphabetical input, as get_categories() returns it today.
$in = array(
	term( 'branding-and-strategy', 'Branding & Strategy' ),
	term( 'digital-marketing', 'Digital Marketing' ),
	term( 'performance-marketing', 'Performance Marketing' ),
	term( 'seo', 'SEO' ),
	term( 'social-media-marketing', 'Social Media Marketing' ),
	term( 'web-ui-ux-design', 'Web & UI/UX Design' ),
);
check(
	'priority order, branding last',
	$slugs( bx_sort_categories_by_priority( $in ) ) === array( 'digital-marketing', 'seo', 'social-media-marketing', 'performance-marketing', 'web-ui-ux-design', 'branding-and-strategy' )
);

// Unknown categories go after the known ones, by name.
$in2 = array( term( 'zeta-news', 'Zeta News' ), term( 'seo', 'SEO' ), term( 'alpha-tips', 'Alpha Tips' ), term( 'branding-and-strategy', 'Branding & Strategy' ) );
check(
	'unknown slugs after known, sorted by name',
	$slugs( bx_sort_categories_by_priority( $in2 ) ) === array( 'seo', 'branding-and-strategy', 'alpha-tips', 'zeta-news' )
);

check( 'empty input gives empty array', bx_sort_categories_by_priority( array() ) === array() );

exit( $fails ? 1 : 0 );
