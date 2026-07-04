<?php
/**
 * Theme supports & menus.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'after_setup_theme', 'bx_theme_support' );
/**
 * Register theme feature support.
 */
function bx_theme_support() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	// Blog cover/banner crop — 3:4 portrait, used for featured images on posts & cards.
	add_image_size( 'bx-blog-cover', 900, 1200, true );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 64,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'boostronixx' ),
			'footer'  => __( 'Footer Menu', 'boostronixx' ),
		)
	);
}

add_filter( 'language_attributes', 'bx_html_lang_en_in' );
/**
 * Output <html lang="en-IN"> to match the site's audience (English, India / Jaipur).
 *
 * The WP locale stays en_US (so admin, date formats and translations are
 * unaffected) — we only correct the public HTML lang attribute so it agrees
 * with the page schema, which already declares `inLanguage: en-IN`. Applies to
 * every template that calls language_attributes() (header.php + header-blank.php).
 *
 * @param string $output The language attributes string (e.g. lang="en-US").
 * @return string
 */
function bx_html_lang_en_in( $output ) {
	return str_replace( 'lang="en-US"', 'lang="en-IN"', $output );
}

add_filter( 'body_class', 'bx_body_class' );
/**
 * Add a stable per-page body class so each converted page's own CSS can be
 * scoped to it (the source pages reuse generic class names like .field, .chip,
 * .orb with different styling, which must not bleed across pages).
 *
 * The class is derived from the ASSIGNED page TEMPLATE (e.g. page-about-us.php
 * → bx-page-about-us), NOT the URL slug — so changing a page's permalink never
 * breaks its styling. Falls back to the slug when no custom template is assigned
 * (e.g. the front page, which uses front-page.php).
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function bx_body_class( $classes ) {
	if ( is_404() ) {
		$classes[] = 'bx-page-404';
		return $classes;
	}
	// Single blog posts reuse the blog-post article design's scope class.
	if ( is_singular( 'post' ) ) {
		$classes[] = 'bx-page-blog-post';
		return $classes;
	}
	$obj = get_queried_object();
	if ( $obj instanceof WP_Post ) {
		$tpl = get_page_template_slug( $obj->ID );
		if ( $tpl && preg_match( '/^page-(.+)\.php$/', $tpl, $m ) ) {
			$classes[] = 'bx-page-' . sanitize_html_class( $m[1] );
		} elseif ( $obj->post_name ) {
			$classes[] = 'bx-page-' . sanitize_html_class( $obj->post_name );
		}
	}
	return $classes;
}
