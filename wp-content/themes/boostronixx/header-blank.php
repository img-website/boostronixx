<?php
/**
 * Minimal "blank" header for standalone full-screen pages (maintenance, 500,
 * thank-you, 404). It outputs only <head> (so Yoast + enqueued CSS/JS still
 * load via wp_head) and opens <body> — no site navigation and, paired with
 * footer-blank.php, no dark site footer. Each template supplies its own compact
 * logo header, matching the original HTML design.
 *
 * Used via get_header( 'blank' ).
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#0a0a0a" />
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased' ); ?>>
<?php wp_body_open(); ?>
<a href="#main" class="skip-link">Skip to content</a>
