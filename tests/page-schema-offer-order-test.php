<?php
/**
 * CLI test: OfferCatalog items are printed in the global service order
 * (Digital Marketing → SEO → Social → Performance → Website → UI/UX → Brand).
 * Run: php tests/page-schema-offer-order-test.php
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
function offer( $name, $url = null ) {
	$s = array( '@type' => 'Service', 'name' => $name );
	if ( $url ) {
		$s['url'] = $url;
	}
	return array( '@type' => 'Offer', 'itemOffered' => $s );
}
function names( $items ) {
	return array_map( fn( $i ) => $i['itemOffered']['name'], $items );
}
$want = array( 'Digital Marketing', 'SEO Services', 'Social Media Marketing', 'Performance Marketing', 'Website Design', 'UI/UX Design', 'Brand Consulting' );

// 1. Home: catalog nested in the Organization node; each name keeps its url.
$home = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type'           => array( 'Organization', 'LocalBusiness' ),
			'name'            => 'BoostronixX',
			'hasOfferCatalog' => array(
				'@type'           => 'OfferCatalog',
				'name'            => 'Digital Marketing Services',
				'itemListElement' => array(
					offer( 'Brand Consulting', 'https://x.test/services/brand-consulting/' ),
					offer( 'SEO Services', 'https://x.test/services/seo-services/' ),
					offer( 'Social Media Marketing', 'https://x.test/services/social-media-marketing/' ),
					offer( 'Performance Marketing', 'https://x.test/services/performance-marketing/' ),
					offer( 'Digital Marketing', 'https://x.test/services/digital-marketing/' ),
					offer( 'UI/UX Design', 'https://x.test/services/ui-ux-design/' ),
					offer( 'Website Design', 'https://x.test/services/website-design/' ),
				),
			),
		),
		array( '@type' => 'WebSite', 'name' => 'BoostronixX' ),
	),
);
$out1  = json_decode( bx_schema_sort_offer_catalogs( json_encode( $home ) ), true );
$items = $out1['@graph'][0]['hasOfferCatalog']['itemListElement'];
check( 'home catalog in global order', names( $items ) === $want );
check( 'home names keep their urls', 'https://x.test/services/brand-consulting/' === $items[6]['itemOffered']['url'] && 'https://x.test/services/digital-marketing/' === $items[0]['itemOffered']['url'] );
check( 'home other nodes untouched', 'WebSite' === $out1['@graph'][1]['@type'] && 'Digital Marketing Services' === $out1['@graph'][0]['hasOfferCatalog']['name'] );

// 2. Services: catalog is its own @graph node; "Website Design & Development" counts as Website.
$svc  = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type'           => 'OfferCatalog',
			'name'            => 'BoostronixX Services',
			'itemListElement' => array(
				offer( 'SEO Services', 'https://x.test/services/seo-services/' ),
				offer( 'Brand Consulting' ),
				offer( 'Digital Marketing' ),
				offer( 'Performance Marketing' ),
				offer( 'Social Media Marketing' ),
				offer( 'UI/UX Design' ),
				offer( 'Website Design & Development' ),
			),
		),
	),
);
$out2 = json_decode( bx_schema_sort_offer_catalogs( json_encode( $svc ) ), true );
check( 'services catalog in global order', names( $out2['@graph'][0]['itemListElement'] ) === array( 'Digital Marketing', 'SEO Services', 'Social Media Marketing', 'Performance Marketing', 'Website Design & Development', 'UI/UX Design', 'Brand Consulting' ) );

// 3. A catalog with any item that is not one of the seven core services is left as is.
$mixed = array( '@type' => 'OfferCatalog', 'itemListElement' => array( offer( 'Google Ads' ), offer( 'Brand Consulting' ), offer( 'Content Marketing' ), offer( 'SEO Services' ) ) );
$out3  = json_decode( bx_schema_sort_offer_catalogs( json_encode( $mixed ) ), true );
check( 'catalog with non-core item unchanged', names( $out3['itemListElement'] ) === array( 'Google Ads', 'Brand Consulting', 'Content Marketing', 'SEO Services' ) );

// 3b. A single-object itemListElement (allowed by schema.org) is left intact.
$single = array( '@type' => 'OfferCatalog', 'itemListElement' => offer( 'SEO Services', 'https://x.test/services/seo-services/' ) );
$out3b  = json_decode( bx_schema_sort_offer_catalogs( json_encode( $single ) ), true );
check( 'single-object itemListElement intact', isset( $out3b['itemListElement']['@type'] ) && 'Offer' === $out3b['itemListElement']['@type'] && 'SEO Services' === $out3b['itemListElement']['itemOffered']['name'] );

// 3c. The service URL decides the rank before the name does.
$byurl = array( '@type' => 'OfferCatalog', 'itemListElement' => array( offer( 'Brand Consulting', 'https://x.test/services/brand-consulting/' ), offer( 'High-performance Websites', 'https://x.test/services/website-design/' ), offer( 'Performance Marketing', 'https://x.test/services/performance-marketing/' ) ) );
$out3c = json_decode( bx_schema_sort_offer_catalogs( json_encode( $byurl ) ), true );
check( 'url ranks before name', names( $out3c['itemListElement'] ) === array( 'Performance Marketing', 'High-performance Websites', 'Brand Consulting' ) );

// 4. No OfferCatalog: returned byte-for-byte (pretty-printed stored JSON stays as is).
$plain = "{\n  \"@context\": \"https://schema.org\",\n  \"@type\": \"WebPage\", \"name\": \"X\"\n}";
check( 'no catalog returned unchanged', bx_schema_sort_offer_catalogs( $plain ) === $plain );

// 5. Invalid JSON returned unchanged.
check( 'invalid JSON unchanged', bx_schema_sort_offer_catalogs( '{"@type":"OfferCatalog",' ) === '{"@type":"OfferCatalog",' );

// 6. Encoding stays unescaped (slashes and unicode).
$raw6 = bx_schema_sort_offer_catalogs( json_encode( array( '@type' => 'OfferCatalog', 'name' => 'A — B', 'itemListElement' => array( offer( 'UI/UX Design', 'https://x.test/a/' ) ) ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) );
check( 'unescaped slashes and unicode', strpos( $raw6, chr( 92 ) . '/' ) === false && strpos( $raw6, '—' ) !== false );

exit( $fails ? 1 : 0 );
