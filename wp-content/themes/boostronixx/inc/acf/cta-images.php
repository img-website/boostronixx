<?php
/**
 * CTA side-image fields — one lightweight ACF field group per page template.
 *
 * Each service / landing page has a bottom CTA card. This registers a single
 * "CTA image" field per page (bound to that page-{slug}.php template) so the
 * image beside the CTA copy is fully CMS-editable, without touching each
 * page's main field-group file. The templates read it via bx_cta_image(),
 * falling back to the uploaded S3 image, so the CTA never breaks if cleared.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_cta_images' );
/**
 * Register a "CTA image" field group for each CTA-enabled page template.
 */
function bx_acf_cta_images() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// page slug => CTA image field name (matches the template's bx_cta_image() call).
	$bx_cta_pages = array(
		'about-us'               => 'about_us_cta_image',
		'services'               => 'services_cta_image',
		'brand-consulting'       => 'brand_consulting_cta_image',
		'digital-marketing'      => 'digital_marketing_cta_image',
		'industries'             => 'industries_cta_image',
		'performance-marketing'  => 'performance_marketing_cta_image',
		'portfolio'              => 'portfolio_cta_image',
		'schools'                => 'schools_cta_image',
		'seo-services'           => 'seo_services_cta_image',
		'real-estate'            => 'real_estate_cta_image',
		'social-media-marketing' => 'social_media_marketing_cta_image',
		'ui-ux-design'           => 'ui_ux_design_cta_image',
		'website-design'         => 'website_design_cta_image',
	);

	foreach ( $bx_cta_pages as $bx_slug => $bx_field ) {
		acf_add_local_field_group(
			array(
				'key'                   => 'group_bx_cta_image_' . str_replace( '-', '_', $bx_slug ),
				'title'                 => 'CTA image',
				'fields'                => array(
					array(
						'key'           => 'field_bx_' . $bx_field,
						'name'          => $bx_field,
						'label'         => 'CTA side image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'library'       => 'all',
						'mime_types'    => 'jpg,jpeg,png,webp,avif',
						'instructions'  => 'Shown beside the CTA text (like the home-page CTA). Portrait cut-outs work best. Leave empty to show the CTA text full-width.',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'page-' . $bx_slug . '.php',
						),
					),
				),
				'menu_order'            => 30,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => 'Side image for the bottom CTA card.',
			)
		);
	}
}
