<?php
/**
 * ACF field group on the User profile — an optional author photo.
 *
 * When set, it replaces the initial-letter avatar shown in blog bylines,
 * the author bio card and the featured post card (see bx_author_avatar()).
 * When empty, those spots fall back to the author's initial.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_user_author' );
/**
 * Register the author-photo field on user profiles.
 */
function bx_acf_user_author() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_user_author',
			'title'      => 'Author profile',
			'location'   => array(
				array(
					array(
						'param'    => 'user_form',
						'operator' => '==',
						'value'    => 'all',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(
				array(
					'key'           => 'f_author_photo',
					'label'         => 'Author photo',
					'name'          => 'author_photo',
					'type'          => 'image',
					'instructions'  => 'Optional. Shown as the round author avatar on blog posts and the featured card. If empty, the author\'s initial is shown instead. A square image works best.',
					'return_format' => 'id',
					'preview_size'  => 'thumbnail',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
				),
			),
		)
	);
}
