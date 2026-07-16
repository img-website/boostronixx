<?php
/**
 * ACF image fields for the Freshee portfolio case study (page-freshee.php).
 *
 * The copy is static in the template (like the Edoovi case study); only the
 * photographic slots are CMS-editable so the client can drop in real brand
 * boards, app screens, storefront shots and a CTA cut-out later. Each field is
 * read via bx_ph_figure() / bx_cta_image(), which fall back to a placeholder
 * caption until an image is set.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_freshee_images' );
/**
 * Register the Freshee case-study image fields.
 */
function bx_acf_freshee_images() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$img = function ( $key, $name, $label, $instr ) {
		return array(
			'key'           => $key,
			'name'          => $name,
			'label'         => $label,
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'medium',
			'library'       => 'all',
			'mime_types'    => 'jpg,jpeg,png,webp,avif',
			'instructions'  => $instr,
		);
	};

	acf_add_local_field_group(
		array(
			'key'            => 'group_bx_freshee_images',
			'title'          => 'Freshee — case-study images',
			'fields'         => array(
				$img( 'field_bx_freshee_hero', 'freshee_hero_image', 'Hero art (cut-out)', 'Hero — transparent cut-out render (app + shopper). Portrait ~795×1175. Shown at natural size on the page background, so use a PNG/WebP with transparency.' ),
				$img( 'field_bx_freshee_features', 'freshee_features_image', 'Features — storefront render', 'Shown inside the browser frame in “An app and storefront made to reorder”. Wide ~1340×630 (the browser chrome around it is built in code).' ),
				$img( 'field_bx_freshee_app', 'freshee_app_image', 'App UI screens', 'Showcase — Freshee app screens (home, category, product, cart). Landscape ~16:10.' ),
				$img( 'field_bx_freshee_brandboard', 'freshee_brandboard_image', 'Brand board', 'Showcase — logo, colour palette and typography. Portrait ~4:5.' ),
				$img( 'field_bx_freshee_storefront', 'freshee_storefront_image', 'D2C storefront', 'Showcase — freshee.shop responsive storefront (wide). Landscape ~16:7.' ),
				$img( 'field_bx_freshee_cta', 'freshee_cta_image', 'CTA side image', 'Shown beside the closing CTA. Portrait cut-outs work best. Leave empty to show the CTA text full-width.' ),
			),
			'location'       => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-freshee.php',
					),
				),
			),
			'menu_order'     => 20,
			'position'       => 'normal',
			'style'          => 'default',
			'label_placement' => 'top',
			'active'         => true,
			'description'    => 'Photographic slots for the Freshee case study (placeholders show until set).',
		)
	);
}
