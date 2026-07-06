<?php
/**
 * Portfolio card image — the 3:4 cover shown for each project on the /portfolio/
 * listing. One field, shared by every portfolio case-study template, read on the
 * listing via get_field()/bx_ph_figure() against each child page. Placeholder
 * shows until the client uploads a real cover.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_portfolio_cards' );
/**
 * Register the shared portfolio card-image field on the case-study templates.
 */
function bx_acf_portfolio_cards() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'             => 'group_bx_portfolio_card',
			'title'           => 'Portfolio card',
			'fields'          => array(
				array(
					'key'           => 'field_bx_portfolio_card_image',
					'name'          => 'portfolio_card_image',
					'label'         => 'Portfolio cover (3:4)',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Portrait 3:4 cover shown for this project on the Portfolio listing (two per row). Leave empty to show a placeholder.',
				),
			),
			'location'        => array(
				array(
					array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-freshee.php' ),
				),
				array(
					array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-mount-litera-zee-school.php' ),
				),
			),
			'menu_order'      => 10,
			'position'        => 'normal',
			'style'           => 'default',
			'label_placement' => 'top',
			'active'          => true,
			'description'     => 'Cover image for the /portfolio/ listing grid.',
		)
	);
}
