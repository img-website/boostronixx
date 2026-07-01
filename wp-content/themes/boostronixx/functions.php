<?php
/**
 * BoostronixX theme bootstrap.
 *
 * Keep this file thin: constants + includes + small template helpers only.
 * Heavy/site logic belongs in the project-core plugin.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BX_VER', '1.0.0' );
define( 'BX_DIR', get_template_directory() );
define( 'BX_URI', get_template_directory_uri() );

require_once BX_DIR . '/inc/theme-support.php';
require_once BX_DIR . '/inc/enqueue.php';
require_once BX_DIR . '/inc/dependency-guard.php';
require_once BX_DIR . '/inc/blog.php';
require_once BX_DIR . '/inc/acf-fields.php';
require_once BX_DIR . '/inc/block-patterns.php';
require_once BX_DIR . '/inc/site-options.php';
require_once BX_DIR . '/inc/page-schema.php';
require_once BX_DIR . '/inc/maintenance.php';
require_once BX_DIR . '/inc/editor-icons.php';

// Per-page ACF field groups (one file per page) for clean, scalable CMS editing.
foreach ( glob( BX_DIR . '/inc/acf/*.php' ) as $bx_acf_file ) {
	require_once $bx_acf_file;
}

/**
 * Is the given page slug the one currently being viewed?
 *
 * @param string $slug Page slug to test.
 * @return bool
 */
function bx_is_current( $slug ) {
	$obj = get_queried_object();
	return ( $obj instanceof WP_Post ) && $obj->post_name === $slug;
}

/**
 * Active-state classes for a top nav link (matches the original design).
 *
 * @param string $slug    Page slug this link points to.
 * @param string $classes Classes to add when active.
 * @return string
 */
function bx_nav_active( $slug, $classes = ' active text-ink' ) {
	return bx_is_current( $slug ) ? $classes : '';
}

/**
 * Whether a given bottom-nav ("appnav") key is the active one for this view.
 * Mirrors the grouping the original JS used (service + sub-service pages map to
 * "services"; portfolio + edoovi map to "portfolio").
 *
 * @param string $key One of: home, services, portfolio, contact.
 * @return bool
 */
function bx_appnav_is_active( $key ) {
	if ( 'home' === $key ) {
		return is_front_page();
	}

	$obj = get_queried_object();
	$slug = ( $obj instanceof WP_Post ) ? $obj->post_name : '';

	$map = array(
		'services'  => array( 'services', 'digital-marketing', 'seo-services', 'performance-marketing', 'social-media-marketing', 'brand-consulting', 'website-design', 'ui-ux-design' ),
		'portfolio' => array( 'portfolio', 'edoovi-erp' ),
		'contact'   => array( 'contact-us' ),
	);

	return isset( $map[ $key ] ) && in_array( $slug, $map[ $key ], true );
}
