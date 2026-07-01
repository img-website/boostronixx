<?php
/**
 * Category archive — reuses the blog card-grid design, filtered to the term.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bx_term   = get_queried_object();
$bx_title  = 'Category: <span class="text-accent">' . esc_html( single_cat_title( '', false ) ) . '</span>';
$bx_desc   = ( $bx_term && ! empty( $bx_term->description ) ) ? wp_strip_all_tags( $bx_term->description ) : '';
$bx_active = ( $bx_term instanceof WP_Term ) ? $bx_term->slug : '';

require BX_DIR . '/template-parts/blog-archive.php';

get_footer();
