<?php
/**
 * Search results — reuses the blog card-grid design.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bx_q      = get_search_query();
$bx_title  = 'Search: <span class="text-accent">' . esc_html( $bx_q ) . '</span>';
$bx_desc   = $bx_q ? sprintf( 'Results for “%s”.', $bx_q ) : 'Type a keyword to search the blog.';
$bx_active = '';

require BX_DIR . '/template-parts/blog-archive.php';

get_footer();
