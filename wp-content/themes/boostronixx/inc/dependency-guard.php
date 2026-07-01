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
 * @return void
 */
function bx_cta_image( $selector, $fallback = '', $post_id = false, $alt = 'BoostronixX strategy call' ) {
	$url = bx_img_url( $selector, $fallback, $post_id );
	if ( ! $url ) {
		return;
	}
	printf(
		'<div class="relative overflow-hidden rounded-xl2 aspect-[4/3]"><img src="%s" alt="%s" title="%s" width="1200" height="900" loading="lazy" decoding="async" class="absolute inset-0 h-full w-full object-cover object-top" /></div>',
		esc_url( $url ),
		esc_attr( $alt ),
		esc_attr( $alt )
	);
}
