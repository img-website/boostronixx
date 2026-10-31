<?php
/**
 * Sitemap tweaks.
 *
 * Remove the XSL stylesheet reference from Yoast's XML sitemaps. Chrome (and
 * other Chromium browsers) are removing built-in XSLT support, which makes the
 * styled sitemap view break and shows a deprecation warning when a human opens
 * a sitemap in the browser. The sitemap XML itself is unchanged and fully valid
 * for search engines; without the stylesheet, browsers simply render it as raw
 * XML instead of the styled table, and the warning goes away.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Yoast applies this filter to the whole `<?xml-stylesheet ... ?>` line
// (inc/sitemaps/class-sitemaps-renderer.php); returning an empty string drops it.
add_filter( 'wpseo_stylesheet_url', '__return_empty_string' );
