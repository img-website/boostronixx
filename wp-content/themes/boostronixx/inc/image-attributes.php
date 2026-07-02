<?php
/**
 * Image attribute completion — alt/title only.
 *
 * Ensures every <img> the site renders on the front end carries alt and title
 * attributes (a11y + SEO). width/height are NOT handled here: they are STATIC
 * in the templates and post content, set from measured rendered sizes (see
 * memory note "tailwind-build-and-gotchas" — scratchpad measure_render.js
 * produced the values). Only *missing* attributes are added; existing ones are
 * never touched.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Belt-and-suspenders for WordPress-generated attachment images (featured
 * images, wp_get_attachment_image, galleries): guarantee a title, falling back
 * to alt then the attachment title.
 *
 * @param array   $attr       Existing attributes.
 * @param WP_Post $attachment Attachment.
 * @return array
 */
add_filter( 'wp_get_attachment_image_attributes', 'bx_attachment_image_title', 20, 2 );
function bx_attachment_image_title( $attr, $attachment ) {
	if ( empty( $attr['title'] ) ) {
		$t = '';
		if ( ! empty( $attr['alt'] ) ) {
			$t = $attr['alt'];
		} elseif ( $attachment instanceof WP_Post ) {
			$t = $attachment->post_title;
		}
		if ( '' !== $t ) {
			$attr['title'] = $t;
		}
	}
	return $attr;
}

/**
 * Start buffering the front-end response so we can complete <img> attributes.
 */
add_action( 'template_redirect', 'bx_img_attr_buffer_start', 1 );
function bx_img_attr_buffer_start() {
	if ( is_admin() || is_feed() || is_embed() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) || wp_doing_ajax() ) {
		return;
	}
	ob_start( 'bx_complete_img_attrs' );
}

/**
 * Add any missing alt/title to every <img>.
 *
 * @param string $html Full page HTML.
 * @return string
 */
function bx_complete_img_attrs( $html ) {
	if ( false === stripos( $html, '<img' ) ) {
		return $html;
	}

	return preg_replace_callback(
		'/<img\b[^>]*>/i',
		function ( $m ) {
			$tag = $m[0];
			$add = array();

			// alt — always present (empty = decorative) for valid HTML/a11y.
			if ( ! preg_match( '/\salt\s*=/i', $tag ) ) {
				$add['alt'] = '';
			}

			// title — mirror alt when we have a non-empty one.
			if ( ! preg_match( '/\stitle\s*=/i', $tag ) ) {
				if ( preg_match( '/\salt\s*=\s*(["\'])(.*?)\1/i', $tag, $am ) && '' !== trim( $am[2] ) ) {
					$add['title'] = $am[2];
				}
			}

			if ( ! $add ) {
				return $tag;
			}

			$attr_str = '';
			foreach ( $add as $k => $v ) {
				$attr_str .= ' ' . $k . '="' . esc_attr( $v ) . '"';
			}
			return preg_replace( '/^<img\b/i', '<img' . $attr_str, $tag, 1 );
		},
		$html
	);
}
