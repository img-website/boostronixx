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
