<?php
/**
 * Plugin Name:       BX Sitemap XSLT Remover
 * Description:       Removes the XSL stylesheet reference from Yoast's XML sitemaps. Chrome is dropping built-in XSLT, which breaks the styled sitemap view and shows a deprecation warning; the sitemap XML stays fully valid for search engines and browsers render it as plain XML.
 * Version:           1.0.0
 * Author:            BoostronixX
 * License:           GPL-2.0-or-later
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Yoast applies this filter to the full `<?xml-stylesheet ... ?>` processing
 * instruction (inc/sitemaps/class-sitemaps-renderer.php); returning an empty
 * string removes it from every sitemap.
 */
add_filter( 'wpseo_stylesheet_url', '__return_empty_string' );
