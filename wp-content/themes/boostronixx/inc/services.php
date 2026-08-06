<?php
/**
 * Single source of truth for the service list.
 *
 * The contact form's "Service needed" select used to be hardcoded and had
 * drifted: it listed 5 options while 7 service pages existed, Digital
 * Marketing was missing entirely, and "UI/UX & Website Design" collapsed two
 * separate pages into one. Everything that needs the service list — the
 * contact form, the lead popup, the header dropdown — now reads it from the
 * published children of the Services page, so it cannot drift again.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Published child pages of a top-level section, in menu order. Backs both the
 * services and the industries header dropdowns.
 *
 * @param string $parent_slug Slug of the parent page ('services', 'industries').
 * @return array<int,array{id:int,title:string,slug:string,url:string}>
 */
function bx_section_pages( $parent_slug ) {
	static $cache = array();
	if ( isset( $cache[ $parent_slug ] ) ) {
		return $cache[ $parent_slug ];
	}

	$parent                 = get_page_by_path( $parent_slug );
	$cache[ $parent_slug ] = array();
	if ( ! $parent ) {
		return $cache[ $parent_slug ];
	}

	$pages = get_pages(
		array(
			'parent'      => $parent->ID,
			'post_status' => 'publish',
			'sort_column' => 'menu_order,post_title',
		)
	);

	foreach ( $pages as $page ) {
		$cache[ $parent_slug ][] = array(
			'id'    => (int) $page->ID,
			'title' => $page->post_title,
			'slug'  => $page->post_name,
			'url'   => get_permalink( $page->ID ),
		);
	}

	return $cache[ $parent_slug ];
}

/**
 * The published service pages, in menu order.
 *
 * @return array<int,array{id:int,title:string,slug:string,url:string}>
 */
function bx_service_pages() {
	return bx_section_pages( 'services' );
}

/**
 * The published industry pages, in menu order.
 *
 * @return array<int,array{id:int,title:string,slug:string,url:string}>
 */
function bx_industry_pages() {
	return bx_section_pages( 'industries' );
}

/**
 * Options for a "Service needed" select: the real service pages plus a
 * catch-all. The stored value is the page title, which is what lands in the
 * lead email and the Leads admin column.
 *
 * @return array<int,array{value:string,slug:string}>
 */
function bx_service_options() {
	$options = array();

	foreach ( bx_service_pages() as $service ) {
		$options[] = array(
			'value' => $service['title'],
			'slug'  => $service['slug'],
		);
	}

	$options[] = array(
		'value' => __( 'Not sure yet', 'boostronixx' ),
		'slug'  => '',
	);

	return $options;
}

/**
 * The service slug for the page being viewed, or '' when it is not a service
 * page. Used to pre-select the right option when the lead popup is opened
 * from a service page, so the visitor does not re-state what they were just
 * reading about.
 *
 * @return string
 */
function bx_current_service_slug() {
	if ( ! is_page() ) {
		return '';
	}

	$post_id = get_queried_object_id();
	foreach ( bx_service_pages() as $service ) {
		if ( $service['id'] === (int) $post_id ) {
			return $service['slug'];
		}
	}

	return '';
}

/**
 * Print the <option> list for a service select.
 *
 * @param string $selected_slug Slug of the option to pre-select.
 * @return void
 */
function bx_service_select_options( $selected_slug = '' ) {
	$options = bx_service_options();

	// Only treat the incoming slug as a match if it actually exists, otherwise
	// the placeholder must stay selected.
	$match = '';
	if ( '' !== $selected_slug ) {
		foreach ( $options as $option ) {
			if ( '' !== $option['slug'] && $option['slug'] === $selected_slug ) {
				$match = $option['slug'];
				break;
			}
		}
	}

	printf(
		'<option value=""%s disabled hidden></option>',
		'' === $match ? ' selected' : ''
	);

	foreach ( $options as $option ) {
		printf(
			'<option value="%1$s" data-slug="%2$s"%3$s>%1$s</option>',
			esc_attr( $option['value'] ),
			esc_attr( $option['slug'] ),
			( '' !== $match && $option['slug'] === $match ) ? ' selected' : ''
		);
	}
}
