<?php
/**
 * Generic archive (date, author, etc.) — reuses the blog card-grid design.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bx_title  = get_the_archive_title();
$bx_desc   = wp_strip_all_tags( get_the_archive_description() );
$bx_active = '';

require BX_DIR . '/template-parts/blog-archive.php';

get_footer();
