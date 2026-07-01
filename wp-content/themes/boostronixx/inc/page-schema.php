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
	$schema = get_post_meta( get_queried_object_id(), '_bx_schema', true );
	if ( ! $schema ) {
		return;
	}
	$schema = str_replace(
		array( 'https://www.boostronixx.com', 'https://boostronixx.com' ),
		untrailingslashit( home_url() ),
		$schema
	);
	echo "\n" . '<script type="application/ld+json" class="bx-schema">' . $schema . '</script>' . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted first-party JSON-LD.
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
