<?php
/**
 * Plugin dependency guard (CLAUDE.md §4).
 *
 * The site relies on ACF Pro (CMS fields) and Yoast SEO Premium (SEO/schema).
 * If either is deactivated the site must NOT fatal — it shows an admin notice
 * and degrades gracefully. All dependent calls elsewhere must be wrapped in
 * function_exists()/class_exists() with safe fallbacks.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_notices', 'bx_dependency_notice' );
/**
 * Warn admins when a required plugin is missing.
 */
function bx_dependency_notice() {
	if ( ! current_user_can( 'activate_plugins' ) ) {
		return;
	}

	$missing = array();
	if ( ! class_exists( 'ACF' ) ) {
		$missing[] = 'ACF Pro';
	}
	if ( ! defined( 'WPSEO_VERSION' ) ) {
		$missing[] = 'Yoast SEO Premium';
	}

	if ( $missing ) {
		printf(
			'<div class="notice notice-error"><p><strong>%s</strong> %s</p></div>',
			esc_html( implode( ', ', $missing ) ),
			esc_html__( 'required hai par active nahi. Site safe mode me chal rahi hai — kuch features band hain.', 'boostronixx' )
		);
	}
}

/**
 * Safe ACF field getter — never fatals if ACF is inactive.
 *
 * @param string   $selector Field name/key.
 * @param int|bool $post_id  Optional post ID.
 * @param mixed    $default  Fallback when ACF is missing or field is empty.
 * @return mixed
 */
function bx_field( $selector, $post_id = false, $default = '' ) {
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $selector, $post_id );
		return ( null === $value || '' === $value ) ? $default : $value;
	}
	return $default;
}

/**
 * Resolve an ACF image field to a usable URL, with a fallback.
 *
 * Handles every ACF image return format (array, attachment ID, URL string).
 * Falls back to $fallback when ACF is inactive or the field is empty — so a
 * section image is fully CMS-editable but still degrades to its placeholder.
 *
 * @param string   $selector Image field name/key.
 * @param string   $fallback URL used when no image is set.
 * @param int|bool $post_id  Optional post ID.
 * @return string
 */
function bx_img_url( $selector, $fallback = '', $post_id = false ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $fallback;
	}
	$img = get_field( $selector, $post_id );
	if ( is_array( $img ) && ! empty( $img['url'] ) ) {
		return $img['url'];
	}
	if ( is_numeric( $img ) && (int) $img > 0 ) {
		$url = wp_get_attachment_url( (int) $img );
		if ( $url ) {
			return $url;
		}
	}
	if ( is_string( $img ) && '' !== $img ) {
		return $img;
	}
	return $fallback;
}

/**
 * Render the side image column for a CTA card (matches the home-page CTA).
 *
 * Outputs nothing when no image resolves, so the CTA gracefully falls back to
 * a single-column text layout. On mobile the grid stacks and the image sits
 * full-width below the copy (object-contain keeps the cut-out framed).
 *
 * @param string   $selector Image field name/key.
 * @param string   $fallback Fallback image URL.
 * @param int|bool $post_id  Optional post ID.
 * @param string   $alt      Alt text.
 * @param int      $width    Static width attribute (measured rendered size).
 * @param int      $height   Static height attribute (measured rendered size).
 * @return void
 */
function bx_cta_image( $selector, $fallback = '', $post_id = false, $alt = 'BoostronixX strategy call', $width = 420, $height = 447 ) {
	$url = bx_img_url( $selector, $fallback, $post_id );
	if ( ! $url ) {
		return;
	}
	// h-auto keeps mobile height intrinsic (the height attribute stays a hint only).
	printf(
		'<div class="relative overflow-hidden"><img width="%d" height="%d" src="%s" alt="%s" loading="lazy" class="h-auto md:h-full w-full object-contain object-center" /></div>',
		(int) $width,
		(int) $height,
		esc_url( $url ),
		esc_attr( $alt )
	);
}

/**
 * Render a placeholder-aware image at its NATURAL ratio (no crop, no backdrop).
 *
 * For transparent cut-out renders (hero art) that must sit directly on the page
 * background — unlike bx_ph_figure(), which cover-crops inside a tinted box.
 * Loads eagerly since these are above-the-fold LCP art.
 *
 * @param string   $selector ACF image field name.
 * @param string   $classes  Utility classes for the <img> (sizing + object-fit).
 * @param string   $label    Small uppercase placeholder label.
 * @param string   $alt      Alt/title text.
 * @param int      $width    Static width attribute (native).
 * @param int      $height   Static height attribute (native).
 * @param int|bool $post_id  Optional post ID.
 * @return void
 */
function bx_ph_image( $selector, $classes, $label, $alt, $width, $height, $post_id = false ) {
	$url = bx_img_url( $selector, '', $post_id );
	if ( $url ) {
		printf(
			'<img width="%d" height="%d" src="%s" alt="%s" title="%s" loading="eager" fetchpriority="high" class="%s" />',
			(int) $width,
			(int) $height,
			esc_url( $url ),
			esc_attr( $alt ),
			esc_attr( $alt ),
			esc_attr( $classes )
		);
		return;
	}
	printf(
		'<figure class="imgph rounded-xl2 bg-surface-2 %s" style="aspect-ratio:%d/%d"><figcaption class="lbl"><b>%s · %d×%d</b><span>%s</span></figcaption></figure>',
		esc_attr( $classes ),
		(int) $width,
		(int) $height,
		esc_html( $label ),
		(int) $width,
		(int) $height,
		esc_html( $alt )
	);
}

/**
 * Render a placeholder-aware image figure (the `.imgph` pattern).
 *
 * When the ACF image is set it renders a covering <img> (with static
 * width/height + alt/title); otherwise it shows the dashed "coming soon"
 * caption so the layout is complete before the client supplies real photos.
 * `$classes` carries the aspect-ratio + background utilities (e.g.
 * "aspect-[16/10] bg-surface" or "aspect-[4/3] !bg-[#141414]").
 *
 * @param string   $selector ACF image field name.
 * @param string   $classes  Extra figure utility classes (aspect + bg).
 * @param string   $label    Small uppercase placeholder label.
 * @param string   $alt      Alt/title text (and placeholder sub-line).
 * @param int      $width    Static width attribute.
 * @param int      $height   Static height attribute.
 * @param int|bool $post_id  Optional post ID.
 * @return void
 */
function bx_ph_figure( $selector, $classes, $label, $alt, $width = 1280, $height = 800, $post_id = false ) {
	$url = bx_img_url( $selector, '', $post_id );
	printf( '<figure class="imgph rounded-xl2 %s">', esc_attr( $classes ) );
	if ( $url ) {
		printf(
			'<img src="%s" alt="%s" title="%s" width="%d" height="%d" loading="lazy" />',
			esc_url( $url ),
			esc_attr( $alt ),
			esc_attr( $alt ),
			(int) $width,
			(int) $height
		);
	} else {
		printf(
			'<figcaption class="lbl"><b>%s · %d×%d</b><span>%s</span></figcaption>',
			esc_html( $label ),
			(int) $width,
			(int) $height,
			esc_html( $alt )
		);
	}
	echo '</figure>';
}
