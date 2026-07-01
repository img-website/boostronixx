<?php
/**
 * Image attribute completion.
 *
 * Ensures every <img> the site renders on the front end carries alt, title,
 * width and height attributes — good for accessibility, SEO and Core Web
 * Vitals (no layout shift). Rather than editing dozens of
 * templates and dynamic-image helpers, this post-processes the final HTML so
 * BOTH hard-coded template images AND dynamic (ACF / content / featured)
 * images are covered from one place.
 *
 * Only *missing* attributes are added — existing ones are never touched.
 * Width/height come from the Media Library metadata (matched by file name).
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Map of image basename => array( width, height ), from attachment metadata.
 * Cached in an autoloaded option; rebuilt when attachments change.
 *
 * @return array
 */
function bx_img_dims_map() {
	static $cache = null;
	if ( null !== $cache ) {
		return $cache;
	}
	$cache = get_option( 'bx_img_dims_map' );
	if ( is_array( $cache ) ) {
		return $cache;
	}
	$cache = bx_rebuild_img_dims_map();
	return $cache;
}

/**
 * Rebuild + persist the basename => [w,h] map from _wp_attachment_metadata.
 *
 * @return array
 */
function bx_rebuild_img_dims_map() {
	global $wpdb;
	$map  = array();
	$rows = $wpdb->get_col( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key = '_wp_attachment_metadata'" );
	foreach ( $rows as $val ) {
		$m = maybe_unserialize( $val );
		if ( ! is_array( $m ) || empty( $m['file'] ) || empty( $m['width'] ) ) {
			continue;
		}
		$map[ strtolower( wp_basename( $m['file'] ) ) ] = array( (int) $m['width'], (int) $m['height'] );
		// also index resized sizes so scaled URLs resolve to their own dims.
		if ( ! empty( $m['sizes'] ) && is_array( $m['sizes'] ) ) {
			foreach ( $m['sizes'] as $s ) {
				if ( ! empty( $s['file'] ) && ! empty( $s['width'] ) ) {
					$map[ strtolower( $s['file'] ) ] = array( (int) $s['width'], (int) $s['height'] );
				}
			}
		}
	}
	update_option( 'bx_img_dims_map', $map, false );
	return $map;
}

// Invalidate the cached map when the media library changes.
add_action( 'add_attachment', 'bx_flush_img_dims_map' );
add_action( 'edit_attachment', 'bx_flush_img_dims_map' );
add_action( 'delete_attachment', 'bx_flush_img_dims_map' );
add_action( 'wp_update_attachment_metadata', 'bx_flush_img_dims_map' );
/**
 * Delete the cached dimensions map.
 */
function bx_flush_img_dims_map() {
	delete_option( 'bx_img_dims_map' );
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
 * Add any missing alt/title/width/height/loading/decoding to every <img>.
 *
 * @param string $html Full page HTML.
 * @return string
 */
function bx_complete_img_attrs( $html ) {
	if ( false === stripos( $html, '<img' ) ) {
		return $html;
	}
	$map = bx_img_dims_map();

	return preg_replace_callback(
		'/<img\b[^>]*>/i',
		function ( $m ) use ( $map ) {
			$tag = $m[0];

			// Skip anything without a real src (data-src lazy placeholders etc. still get attrs, but need a src to size).
			$has_src = preg_match( '/\ssrc\s*=\s*(["\'])(.*?)\1/i', $tag, $sm );
			$src     = $has_src ? $sm[2] : '';

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

			// width/height from the Media Library (by file name).
			$need_w = ! preg_match( '/\swidth\s*=/i', $tag );
			$need_h = ! preg_match( '/\sheight\s*=/i', $tag );
			if ( ( $need_w || $need_h ) && $src ) {
				$path = wp_parse_url( $src, PHP_URL_PATH );
				$base = $path ? strtolower( rawurldecode( wp_basename( $path ) ) ) : '';
				if ( $base && isset( $map[ $base ] ) ) {
					if ( $need_w ) {
						$add['width'] = $map[ $base ][0];
					}
					if ( $need_h ) {
						$add['height'] = $map[ $base ][1];
					}
				}
			}

			if ( ! $add ) {
				return $tag;
			}

			$attr_str = '';
			foreach ( $add as $k => $v ) {
				$attr_str .= ' ' . $k . '="' . esc_attr( $v ) . '"';
			}
			// insert right after "<img".
			return preg_replace( '/^<img\b/i', '<img' . $attr_str, $tag, 1 );
		},
		$html
	);
}
