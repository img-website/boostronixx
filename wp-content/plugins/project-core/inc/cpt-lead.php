<?php
/**
 * Leads (enquiries) custom post type — stores every form submission so the
 * client can see them in WP admin. Not public, not manually creatable.
 *
 * @package ProjectCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'bxcore_register_lead_cpt' );
/**
 * Register the bx_lead post type.
 */
function bxcore_register_lead_cpt() {
	register_post_type(
		'bx_lead',
		array(
			'labels'             => array(
				'name'          => __( 'Leads', 'project-core' ),
				'singular_name' => __( 'Lead', 'project-core' ),
				'menu_name'     => __( 'Leads', 'project-core' ),
				'all_items'     => __( 'All Leads', 'project-core' ),
				'edit_item'     => __( 'View Lead', 'project-core' ),
				'search_items'  => __( 'Search Leads', 'project-core' ),
			),
			'public'             => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-email-alt',
			'menu_position'      => 26,
			'capability_type'    => 'post',
			'map_meta_cap'       => true,
			'capabilities'       => array( 'create_posts' => 'do_not_allow' ), // leads only arrive via the form
			'supports'           => array( 'title' ),
			'has_archive'        => false,
			'rewrite'            => false,
			'exclude_from_search' => true,
		)
	);
}

add_filter( 'manage_bx_lead_posts_columns', 'bxcore_lead_columns' );
/**
 * Admin list columns.
 *
 * @param array $cols Columns.
 * @return array
 */
function bxcore_lead_columns( $cols ) {
	return array(
		'cb'        => isset( $cols['cb'] ) ? $cols['cb'] : '',
		'title'     => __( 'Name', 'project-core' ),
		'bx_email'  => __( 'Email', 'project-core' ),
		'bx_phone'  => __( 'Phone', 'project-core' ),
		'bx_source' => __( 'Source', 'project-core' ),
		'date'      => __( 'Received', 'project-core' ),
	);
}

add_action( 'manage_bx_lead_posts_custom_column', 'bxcore_lead_column_content', 10, 2 );
/**
 * Render custom column values.
 *
 * @param string $col Column key.
 * @param int    $id  Post ID.
 */
function bxcore_lead_column_content( $col, $id ) {
	$map = array(
		'bx_email'  => '_bx_email',
		'bx_phone'  => '_bx_phone',
		'bx_source' => '_bx_source',
	);
	if ( isset( $map[ $col ] ) ) {
		echo esc_html( get_post_meta( $id, $map[ $col ], true ) );
	}
}

add_action( 'add_meta_boxes', 'bxcore_lead_metabox' );
/**
 * Add the enquiry-details meta box.
 */
function bxcore_lead_metabox() {
	add_meta_box( 'bx_lead_details', __( 'Enquiry details', 'project-core' ), 'bxcore_lead_metabox_render', 'bx_lead', 'normal', 'high' );
}

/**
 * Render the enquiry-details meta box.
 *
 * @param WP_Post $post Lead post.
 */
function bxcore_lead_metabox_render( $post ) {
	$rows = array(
		__( 'Email', 'project-core' )   => get_post_meta( $post->ID, '_bx_email', true ),
		__( 'Phone', 'project-core' )   => get_post_meta( $post->ID, '_bx_phone', true ),
		__( 'Company', 'project-core' ) => get_post_meta( $post->ID, '_bx_company', true ),
		__( 'Service', 'project-core' ) => get_post_meta( $post->ID, '_bx_service', true ),
		__( 'Budget', 'project-core' )  => get_post_meta( $post->ID, '_bx_budget', true ),
		__( 'Source', 'project-core' )  => get_post_meta( $post->ID, '_bx_source', true ),
		__( 'Page', 'project-core' )    => get_post_meta( $post->ID, '_bx_page', true ),
	);
	echo '<table class="widefat striped"><tbody>';
	foreach ( $rows as $label => $val ) {
		if ( '' === $val ) {
			continue;
		}
		printf( '<tr><th style="width:140px">%s</th><td>%s</td></tr>', esc_html( $label ), esc_html( $val ) );
	}
	echo '</tbody></table>';
	$msg = get_post_meta( $post->ID, '_bx_message', true );
	if ( $msg ) {
		echo '<p style="margin-top:1em"><strong>' . esc_html__( 'Message', 'project-core' ) . ':</strong></p>';
		echo '<p style="white-space:pre-wrap">' . esc_html( $msg ) . '</p>';
	}
}
