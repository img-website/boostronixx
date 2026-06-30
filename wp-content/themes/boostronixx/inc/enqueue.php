<?php
/**
 * Front-end asset enqueueing.
 *
 * Performance notes (CLAUDE.md §7):
 * - Tailwind is pre-compiled into app.min.css (no runtime CDN compilation).
 * - JS is deferred and loaded in the footer.
 * - Extra font families (Caveat, JetBrains Mono) load only on the pages that use them.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'wp_resource_hints', 'bx_resource_hints', 10, 2 );
/**
 * Preconnect to the font + icon CDNs.
 *
 * @param array  $hints    Hints for this relation.
 * @param string $relation Relation type.
 * @return array
 */
function bx_resource_hints( $hints, $relation ) {
	if ( 'preconnect' === $relation ) {
		$hints[] = 'https://fonts.googleapis.com';
		$hints[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
		$hints[] = 'https://cdn.jsdelivr.net';
	}
	return $hints;
}

add_action( 'wp_enqueue_scripts', 'bx_enqueue_assets' );
/**
 * Register and enqueue theme styles and scripts.
 */
function bx_enqueue_assets() {

	// Brand font — used site-wide.
	wp_enqueue_style(
		'bx-font-bricolage',
		'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&display=swap',
		array(),
		null
	);

	// Page-specific accent fonts (only where the design actually uses them).
	if ( is_page( 'schools' ) ) {
		wp_enqueue_style( 'bx-font-caveat', 'https://fonts.googleapis.com/css2?family=Caveat:wght@500;700&display=swap', array(), null );
	}
	if ( is_page( 'hospitals' ) ) {
		wp_enqueue_style( 'bx-font-jetbrains', 'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500;700&display=swap', array(), null );
	}

	// Compiled Tailwind + custom CSS layer.
	$css_path = BX_DIR . '/assets/css/app.min.css';
	wp_enqueue_style(
		'bx-app',
		BX_URI . '/assets/css/app.min.css',
		array( 'bx-font-bricolage' ),
		file_exists( $css_path ) ? filemtime( $css_path ) : BX_VER
	);

	// Iconify web component (icons) — deferred.
	wp_enqueue_script(
		'bx-iconify',
		'https://cdn.jsdelivr.net/npm/iconify-icon@2/dist/iconify-icon.min.js',
		array(),
		null,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);

	// Theme behaviour — deferred, footer.
	$js_path = BX_DIR . '/assets/js/app.js';
	wp_enqueue_script(
		'bx-app',
		BX_URI . '/assets/js/app.js',
		array(),
		file_exists( $js_path ) ? filemtime( $js_path ) : BX_VER,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);

	// Expose the theme image base + a few flags to app.js
	// (the original markup used relative "assets/img/" paths).
	$data = array(
		'img'     => trailingslashit( BX_URI ) . 'assets/img/',
		'isFront' => is_front_page(),
		'urls'    => array(
			'thankYou' => home_url( '/thank-you/' ),
		),
	);
	wp_add_inline_script( 'bx-app', 'window.BX = ' . wp_json_encode( $data ) . ';', 'before' );
}
