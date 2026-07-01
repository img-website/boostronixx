<?php
/**
 * Tag archive — reuses the blog card-grid design, filtered to the tag.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bx_term   = get_queried_object();
$bx_title  = 'Tag: <span class="text-accent">' . esc_html( single_tag_title( '', false ) ) . '</span>';
$bx_desc   = ( $bx_term && ! empty( $bx_term->description ) ) ? wp_strip_all_tags( $bx_term->description ) : '';
$bx_active = ''; // Chips are category-based; no tag chip to activate.

require BX_DIR . '/template-parts/blog-archive.php';

get_footer();
