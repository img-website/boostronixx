<?php
/**
 * Blog helpers (dynamic posts).
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Estimated reading time in minutes for a post.
 *
 * @param int|WP_Post|null $post Post or ID.
 * @return int
 */
function bx_reading_time( $post = null ) {
	$post = get_post( $post );
	if ( ! $post ) {
		return 1;
	}
	$words = str_word_count( wp_strip_all_tags( $post->post_content ) );
	return max( 1, (int) ceil( $words / 200 ) );
}

/**
 * Primary (first) category of a post.
 *
 * @param int|WP_Post|null $post Post or ID.
 * @return WP_Term|null
 */
function bx_primary_category( $post = null ) {
	$post = get_post( $post );
	if ( ! $post ) {
		return null;
	}
	$cats = get_the_category( $post->ID );
	return $cats ? $cats[0] : null;
}

/**
 * Space-separated category slugs for a post (used as the card's data-cat filter value).
 *
 * @param int|WP_Post|null $post Post or ID.
 * @return string
 */
function bx_category_slugs( $post = null ) {
	$post = get_post( $post );
	$cats = $post ? get_the_category( $post->ID ) : array();
	return implode( ' ', wp_list_pluck( $cats, 'slug' ) );
}

/**
 * Inject id attributes into the article's H2/H3 and return [processed_html, toc_items].
 * TOC lists H2 headings only (matches the original design's flat TOC).
 *
 * @param string $html Post content HTML.
 * @return array{0:string,1:array<int,array{id:string,text:string}>}
 */
function bx_article_content( $html ) {
	$toc  = array();
	$seen = array();
	$html = preg_replace_callback(
		'/<(h2|h3)\b([^>]*)>(.*?)<\/\1>/is',
		function ( $m ) use ( &$toc, &$seen ) {
			$tag   = strtolower( $m[1] );
			$attrs = $m[2];
			$text  = trim( wp_strip_all_tags( $m[3] ) );

			if ( preg_match( '/\sid=["\']([^"\']+)["\']/i', $attrs, $idm ) ) {
				$id = $idm[1];
			} else {
				$id = sanitize_title( $text );
				if ( '' === $id ) {
					$id = 'section';
				}
				$base = $id;
				$i    = 2;
				while ( isset( $seen[ $id ] ) ) {
					$id = $base . '-' . $i++;
				}
				$attrs .= ' id="' . esc_attr( $id ) . '"';
			}
			$seen[ $id ] = true;

			if ( 'h2' === $tag ) {
				$toc[] = array(
					'id'   => $id,
					'text' => $text,
				);
			}
			return '<' . $tag . $attrs . '>' . $m[3] . '</' . $tag . '>';
		},
		$html
	);
	return array( $html, $toc );
}

/**
 * Blog card gradient palette (shared by the blog index and archives).
 *
 * @return string[]
 */
function bx_blog_gradients() {
	return array(
		'linear-gradient(135deg,#0a0a0a,#3a3a3a)',
		'linear-gradient(135deg,#fa5539,#2e1c16)',
		'linear-gradient(135deg,#7c3aed,#fa5539)',
		'linear-gradient(135deg,#0a0a0a,#fa5539)',
		'linear-gradient(135deg,#2e7d5b,#0a0a0a)',
		'linear-gradient(135deg,#fa5539,#0a0a0a)',
		'linear-gradient(135deg,#d6457a,#fa5539)',
		'linear-gradient(135deg,#0fa3a3,#0a0a0a)',
	);
}

/**
 * Nth gradient from the palette (wraps around).
 *
 * @param int $i Index.
 * @return string
 */
function bx_blog_gradient( $i = 0 ) {
	$g = bx_blog_gradients();
	return $g[ (int) $i % count( $g ) ];
}

/**
 * Current page number for the main archive/listing query.
 * Uses 'page' when the posts index is the site front page, else 'paged'.
 *
 * @return int
 */
function bx_paged() {
	$paged = (int) ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ) );
	return max( 1, $paged );
}

/**
 * Render the site's styled pagination control (rounded pills, accent active
 * state, lucide chevron prev/next). Matches the .chip pill language of the design.
 * Prints nothing when there is only one page.
 *
 * @param WP_Query|null $query Query to paginate. Defaults to the global $wp_query.
 * @return void
 */
function bx_pagination( $query = null ) {
	global $wp_query;
	$query = $query instanceof WP_Query ? $query : $wp_query;

	$total = (int) $query->max_num_pages;
	if ( $total < 2 ) {
		return;
	}

	$links = paginate_links(
		array(
			'total'     => $total,
			'current'   => bx_paged(),
			'mid_size'  => 1,
			'end_size'  => 1,
			'type'      => 'array',
			'prev_text' => '<iconify-icon icon="lucide:chevron-left" aria-hidden="true"></iconify-icon><span class="hidden sm:inline">Prev</span>',
			'next_text' => '<span class="hidden sm:inline">Next</span><iconify-icon icon="lucide:chevron-right" aria-hidden="true"></iconify-icon>',
		)
	);

	if ( empty( $links ) ) {
		return;
	}

	$pill = 'inline-flex items-center justify-center h-10 rounded-full border border-line text-sm font-medium transition';

	echo '<nav class="mt-12 sm:mt-14 flex justify-center" aria-label="Blog pagination"><ul class="flex flex-wrap items-center gap-2">';

	foreach ( $links as $link ) {
		$is_prevnext = ( false !== strpos( $link, 'prev' ) || false !== strpos( $link, 'next' ) );
		$shape       = $is_prevnext ? ' gap-1.5 px-4' : ' w-10';

		if ( false !== strpos( $link, 'current' ) ) {
			$cls = $pill . $shape . ' bg-accent text-paper border-accent';
		} elseif ( false !== strpos( $link, 'dots' ) ) {
			$cls = 'inline-flex items-center justify-center h-10 w-10 text-sm text-ink-soft';
		} else {
			$cls = $pill . $shape . ' text-ink-soft hover:text-paper hover:bg-accent hover:border-accent';
		}

		// Strip the default page-numbers class attribute, inject ours after the tag name.
		$link = preg_replace( '/\sclass="[^"]*"/', '', $link, 1 );
		$link = preg_replace( '/^(\s*<(?:a|span))\b/', '$1 class="' . $cls . '"', $link, 1 );

		echo '<li>' . $link . '</li>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- markup built from paginate_links + own classes.
	}

	echo '</ul></nav>';
}

add_action( 'pre_get_posts', 'bx_archive_ppp' );
/**
 * Give category/tag/author/date archives and search a consistent 12-per-page.
 * (The blog index home.php builds its own WP_Query and is unaffected.)
 *
 * @param WP_Query $q Main query.
 * @return void
 */
function bx_archive_ppp( $q ) {
	if ( ! is_admin() && $q->is_main_query() && ( $q->is_archive() || $q->is_search() ) ) {
		$q->set( 'posts_per_page', 12 );
	}
}

/**
 * Author avatar circle: the uploaded author photo (ACF user field author_photo)
 * when set, otherwise the author's initial letter (the original design fallback).
 * The wrapper keeps the caller's circle classes so every spot stays pixel-identical.
 *
 * @param string $wrap_classes Circle wrapper classes (size/rounded/bg/etc.).
 * @param string $size         Image size for the photo (default 'thumbnail').
 * @param int    $user_id      Author user ID (default: current loop author).
 * @return string Safe HTML.
 */
function bx_author_avatar( $wrap_classes = '', $size = 'thumbnail', $user_id = 0 ) {
	$user_id = $user_id ? (int) $user_id : (int) get_the_author_meta( 'ID' );
	$name    = get_the_author_meta( 'display_name', $user_id );
	$photo   = function_exists( 'get_field' ) ? get_field( 'author_photo', 'user_' . $user_id ) : 0;
	$url     = $photo ? wp_get_attachment_image_url( (int) $photo, $size ) : '';

	if ( $url ) {
		return '<span class="' . esc_attr( $wrap_classes . ' overflow-hidden' ) . '" aria-hidden="true"><img src="' . esc_url( $url ) . '" alt="" class="h-full w-full object-cover" loading="lazy" decoding="async" /></span>';
	}

	$initial = $name ? mb_strtoupper( mb_substr( $name, 0, 1 ) ) : '?';
	return '<span class="' . esc_attr( $wrap_classes ) . '" aria-hidden="true">' . esc_html( $initial ) . '</span>';
}
