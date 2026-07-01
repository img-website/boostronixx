<?php
/**
 * Keep <iconify-icon> elements alive in editorial rich text.
 *
 * WordPress' HTML sanitiser (wp_kses) and the classic/TinyMCE editor both strip
 * unknown custom elements on save — which silently removed the design's inline
 * icons (mail, phone, map-pin, …) from ACF WYSIWYG fields and post content.
 * These filters whitelist the <iconify-icon> web component everywhere it can be
 * edited, so icons survive editing and are never dropped.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'wp_kses_allowed_html', 'bx_allow_iconify_kses', 10, 2 );
/**
 * Allow <iconify-icon icon="…"> in post/rich-text contexts.
 *
 * @param array  $tags    Allowed tags.
 * @param string $context Context name.
 * @return array
 */
function bx_allow_iconify_kses( $tags, $context ) {
	if ( in_array( $context, array( 'post', 'pre_user_description' ), true ) || 'post' === $context ) {
		$tags['iconify-icon'] = array(
			'icon'        => true,
			'class'       => true,
			'style'       => true,
			'width'       => true,
			'height'      => true,
			'inline'      => true,
			'rotate'      => true,
			'flip'        => true,
			'mode'        => true,
			'id'          => true,
			'aria-hidden' => true,
			'aria-label'  => true,
		);
	}
	return $tags;
}

add_filter( 'tiny_mce_before_init', 'bx_allow_iconify_tinymce' );
/**
 * Tell TinyMCE to treat <iconify-icon> as a valid inline custom element so the
 * visual editor doesn't strip it.
 *
 * @param array $init TinyMCE init settings.
 * @return array
 */
function bx_allow_iconify_tinymce( $init ) {
	$custom = empty( $init['custom_elements'] ) ? '' : $init['custom_elements'] . ',';
	$init['custom_elements'] = $custom . '~iconify-icon';

	$valid = empty( $init['extended_valid_elements'] ) ? '' : $init['extended_valid_elements'] . ',';
	$init['extended_valid_elements'] = $valid . 'iconify-icon[icon|class|style|width|height|inline|rotate|flip|mode|id|aria-hidden|aria-label]';

	return $init;
}
