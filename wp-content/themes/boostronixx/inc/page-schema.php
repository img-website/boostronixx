<?php
/**
 * Per-page JSON-LD schema carried over from the original HTML design (Service,
 * FAQPage, LocalBusiness/ProfessionalService, OfferCatalog, CollectionPage, …) —
 * the hand-written, high-ranking structured data Yoast does not auto-generate.
 *
 * The raw JSON is stored on each page in the `_bx_schema` meta (see the one-time
 * importer). It is printed in <head>, with the old domain swapped to the current
 * site URL at output time so it's correct on any environment. On pages that carry
 * this schema, Yoast's own graph is suppressed to avoid duplicate structured data.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', 'bx_output_page_schema', 20 );
/**
 * Print the page's stored JSON-LD schema.
 */
function bx_output_page_schema() {
	if ( ! is_singular( 'page' ) ) {
		return;
	}
	$bx_page_id = get_queried_object_id();
	$schema     = get_post_meta( $bx_page_id, '_bx_schema', true );
	if ( ! $schema ) {
		return;
	}
	// FAQPage follows the visible FAQ: rebuild it from the page's ACF rows.
	$bx_faq_key = is_front_page() ? '__front' : get_post_field( 'post_name', $bx_page_id );
	$bx_map     = bx_schema_faq_map();
	if ( function_exists( 'get_field' ) && isset( $bx_map[ $bx_faq_key ] ) ) {
		list( $bx_rep, $bx_q, $bx_a ) = $bx_map[ $bx_faq_key ];
		$bx_rows = get_field( $bx_rep, $bx_page_id );
		$bx_faqs = array();
		foreach ( is_array( $bx_rows ) ? $bx_rows : array() as $bx_row ) {
			$q = isset( $bx_row[ $bx_q ] ) ? trim( (string) $bx_row[ $bx_q ] ) : '';
			if ( '' !== $q ) {
				$bx_faqs[] = array( 'q' => $q, 'a' => isset( $bx_row[ $bx_a ] ) ? (string) $bx_row[ $bx_a ] : '' );
			}
		}
		$schema = bx_schema_replace_faqpage( $schema, $bx_faqs );
		if ( '' === $schema ) {
			return;
		}
	}
	// Service lists follow the site-wide priority order (Brand Consulting last).
	$schema = bx_schema_sort_offer_catalogs( $schema );
	$schema = str_replace(
		array( 'https://www.boostronixx.com', 'https://boostronixx.com' ),
		untrailingslashit( home_url() ),
		$schema
	);
	// The Instagram handle changed to @boostronixx_; keep the stored schema's
	// sameAs in sync at output time (mirrors the domain swap above).
	$schema = str_replace(
		'https://www.instagram.com/boostronixx/',
		'https://www.instagram.com/boostronixx_/',
		$schema
	);
	echo "\n" . '<script type="application/ld+json" class="bx-schema">' . $schema . '</script>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted first-party JSON-LD.
}

/**
 * Page → FAQ repeater map: [repeater field, question sub-field, answer sub-field].
 * Keyed by page slug ('__front' for the static front page).
 *
 * @return array
 */
function bx_schema_faq_map() {
	return array(
		'__front'                => array( 'faq_items', 'question', 'answer' ),
		'services'               => array( 'services_faq_items', 'question', 'answer' ),
		'digital-marketing'      => array( 'digital_marketing_faq', 'digital_marketing_faq_question', 'digital_marketing_faq_answer' ),
		'seo-services'           => array( 'seo_services_faq', 'question', 'answer' ),
		'social-media-marketing' => array( 'social_media_marketing_faq_items', 'social_media_marketing_faq_question', 'social_media_marketing_faq_answer' ),
		'performance-marketing'  => array( 'performance_marketing_faq', 'performance_marketing_faq_question', 'performance_marketing_faq_answer' ),
		'website-design'         => array( 'website_design_faq_items', 'website_design_faq_question', 'website_design_faq_answer' ),
		'ui-ux-design'           => array( 'ui_ux_design_faq_items', 'ui_ux_design_faq_question', 'ui_ux_design_faq_answer' ),
		'brand-consulting'       => array( 'brand_consulting_faq_items', 'brand_consulting_faq_question', 'brand_consulting_faq_answer' ),
		'schools'                => array( 'schools_faq_items', 'schools_faq_question', 'schools_faq_answer' ),
		'real-estate'            => array( 'real_estate_faqs', 'real_estate_faq_question', 'real_estate_faq_answer' ),
		'hospitals'              => array( 'hospitals_faqs', 'question', 'answer' ),
		'd2c-ecommerce'          => array( 'd2c_ecommerce_faq_items', 'question', 'answer' ),
		'faqs'                   => array( 'faq_page_items', 'question', 'answer' ),
	);
}

/**
 * Replace every FAQPage node in a stored JSON-LD string with one built from
 * $faqs. Invalid JSON is returned unchanged; with no rows the FAQPage is just
 * removed ('' when nothing else is left).
 *
 * @param string $json Stored JSON-LD.
 * @param array  $faqs List of array( 'q' => string, 'a' => string ).
 * @return string
 */
function bx_schema_replace_faqpage( $json, array $faqs ) {
	$data = json_decode( $json, true );
	if ( ! is_array( $data ) ) {
		return $json;
	}
	$clean = function ( $s ) {
		return trim( preg_replace( '/\s+/u', ' ', html_entity_decode( wp_strip_all_tags( (string) $s ), ENT_QUOTES, 'UTF-8' ) ) );
	};
	$faq = null;
	if ( $faqs ) {
		$faq = array(
			'@type'      => 'FAQPage',
			'mainEntity' => array_map(
				function ( $f ) use ( $clean ) {
					return array(
						'@type'          => 'Question',
						'name'           => $clean( $f['q'] ),
						'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $clean( $f['a'] ) ),
					);
				},
				array_values( $faqs )
			),
		);
	}
	$not_faq = function ( $n ) {
		return ! ( is_array( $n ) && isset( $n['@type'] ) && 'FAQPage' === $n['@type'] );
	};
	$with_ctx = function ( $node ) {
		return array( '@context' => 'https://schema.org' ) + $node;
	};

	if ( isset( $data['@graph'] ) && is_array( $data['@graph'] ) ) {
		$data['@graph'] = array_values( array_filter( $data['@graph'], $not_faq ) );
		if ( $faq ) {
			$data['@graph'][] = $faq;
		}
	} elseif ( array_keys( $data ) === range( 0, count( $data ) - 1 ) ) {
		$data = array_values( array_filter( $data, $not_faq ) );
		if ( $faq ) {
			$data[] = $with_ctx( $faq );
		}
	} elseif ( ! $not_faq( $data ) ) {
		if ( ! $faq ) {
			return '';
		}
		$data = $with_ctx( $faq );
	} elseif ( $faq ) {
		$data = array( $data, $with_ctx( $faq ) );
	}
	return (string) wp_json_encode_bx( $data );
}

/**
 * Rank of a core service in the site-wide priority order, decided by its
 * /services/<slug>/ URL first, then by its exact name. Anything that is not
 * one of the seven core services gets -1.
 *
 * @param string $name Service name, e.g. "SEO Services".
 * @param string $url  Service URL, if any.
 * @return int 0–6, or -1 when unknown.
 */
function bx_schema_service_rank( $name, $url = '' ) {
	$slugs = array( 'digital-marketing', 'seo-services', 'social-media-marketing', 'performance-marketing', 'website-design', 'ui-ux-design', 'brand-consulting' );
	if ( preg_match( '#/services/([a-z0-9-]+)/?$#', (string) $url, $m ) ) {
		$rank = array_search( $m[1], $slugs, true );
		return false === $rank ? -1 : $rank;
	}
	$names = array(
		'digital marketing'            => 0,
		'seo services'                 => 1,
		'seo'                          => 1,
		'social media marketing'       => 2,
		'performance marketing'        => 3,
		'website design'               => 4,
		'website design & development' => 4,
		'ui/ux design'                 => 5,
		'brand consulting'             => 6,
	);
	$key = strtolower( trim( html_entity_decode( (string) $name, ENT_QUOTES, 'UTF-8' ) ) );
	return isset( $names[ $key ] ) ? $names[ $key ] : -1;
}

/**
 * Re-order every OfferCatalog's items into the site-wide service priority
 * order (stable for ties). Only a list of items that are all core services is
 * re-ordered; a single-object itemListElement or a catalog with any other item
 * is left as is. JSON without an OfferCatalog, or invalid JSON, is returned
 * unchanged.
 *
 * @param string $json Stored JSON-LD.
 * @return string
 */
function bx_schema_sort_offer_catalogs( $json ) {
	if ( false === strpos( (string) $json, 'OfferCatalog' ) ) {
		return $json;
	}
	$data = json_decode( $json, true );
	if ( ! is_array( $data ) ) {
		return $json;
	}
	$walk = function ( $node ) use ( &$walk ) {
		if ( ! is_array( $node ) ) {
			return $node;
		}
		foreach ( $node as $k => $v ) {
			$node[ $k ] = $walk( $v );
		}
		$list = isset( $node['@type'], $node['itemListElement'] ) && 'OfferCatalog' === $node['@type'] ? $node['itemListElement'] : null;
		if ( is_array( $list ) && $list && array_keys( $list ) === range( 0, count( $list ) - 1 ) ) {
			$keyed = array();
			foreach ( $list as $i => $item ) {
				$svc  = ( is_array( $item ) && isset( $item['itemOffered'] ) && is_array( $item['itemOffered'] ) ) ? $item['itemOffered'] : ( is_array( $item ) ? $item : array() );
				$rank = bx_schema_service_rank( isset( $svc['name'] ) ? $svc['name'] : '', isset( $svc['url'] ) ? $svc['url'] : '' );
				if ( $rank < 0 ) {
					return $node; // Not purely core services: leave this catalog alone.
				}
				$keyed[] = array( $rank, $i, $item );
			}
			usort(
				$keyed,
				function ( $a, $b ) {
					return $a[0] === $b[0] ? $a[1] - $b[1] : $a[0] - $b[0];
				}
			);
			$node['itemListElement'] = array_map(
				function ( $k ) {
					return $k[2];
				},
				$keyed
			);
		}
		return $node;
	};
	return (string) wp_json_encode_bx( $walk( $data ) );
}

/**
 * JSON encode with unescaped slashes/unicode (no WP dependency, testable).
 *
 * @param mixed $data Data.
 * @return string|false
 */
function wp_json_encode_bx( $data ) {
	// JSON_HEX_TAG: a "<" or ">" in any text can never close the <script> early.
	return json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG );
}

add_filter( 'wpseo_frontend_presenters', 'bx_remove_yoast_schema_presenter' );
/**
 * Drop Yoast's Schema presenter entirely on pages that carry our custom schema,
 * so there's no leftover empty `@graph:[]` block — just our single JSON-LD.
 *
 * @param array $presenters Yoast head presenters.
 * @return array
 */
function bx_remove_yoast_schema_presenter( $presenters ) {
	if ( is_singular( 'page' ) && get_post_meta( get_queried_object_id(), '_bx_schema', true ) ) {
		return array_filter(
			$presenters,
			function ( $p ) {
				return false === strpos( get_class( $p ), 'Schema_Presenter' );
			}
		);
	}
	return $presenters;
}
