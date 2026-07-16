<?php
/**
 * ACF image fields for the Mount Litera Zee School case study
 * (page-mount-litera-zee-school.php).
 *
 * Copy is static in the template; only the photographic slots are CMS-editable
 * so the school can drop in real website screenshots, a mobile view, campus
 * gallery imagery and a CTA cut-out later. Read via bx_ph_figure() /
 * bx_cta_image(), which show placeholders until an image is set.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_mlz_images' );
/**
 * Register the Mount Litera Zee School case-study image fields.
 */
function bx_acf_mlz_images() {
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
			'key'            => 'group_bx_mlz_images',
			'title'          => 'Mount Litera Zee School — case-study images',
			'fields'         => array(
				$img( 'field_bx_mlz_hero', 'mlz_hero_image', 'Hero — website homepage', 'Shown inside the browser frame in the hero. Wide ~1280×635 (the browser chrome around it is built in code).' ),
				$img( 'field_bx_mlz_features', 'mlz_features_image', 'Features — admissions experience', 'Shown in “Everything a parent needs, nothing in the way”. ~1076×869.' ),
				$img( 'field_bx_mlz_website', 'mlz_website_image', 'Website homepage', 'Showcase — desktop screenshot of the school website homepage. Landscape ~16:10.' ),
				$img( 'field_bx_mlz_mobile', 'mlz_mobile_image', 'Mobile view', 'Showcase — responsive mobile screenshot / admissions enquiry. Portrait ~4:5.' ),
				$img( 'field_bx_mlz_campus', 'mlz_campus_image', 'Campus gallery', 'Showcase — wide campus-life photo (classrooms, sports, arts). Landscape ~16:7.' ),
				$img( 'field_bx_mlz_cta', 'mlz_cta_image', 'CTA side image', 'Shown beside the closing CTA. Portrait cut-outs work best. Leave empty to show the CTA text full-width.' ),
			),
			'location'       => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-mount-litera-zee-school.php',
					),
				),
			),
			'menu_order'     => 20,
			'position'       => 'normal',
			'style'          => 'default',
			'label_placement' => 'top',
			'active'         => true,
			'description'    => 'Photographic slots for the Mount Litera Zee School case study (placeholders show until set).',
		)
	);
}
