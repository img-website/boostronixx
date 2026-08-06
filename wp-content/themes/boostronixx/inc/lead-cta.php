<?php
/**
 * Turn on-page conversion buttons into lead-popup triggers.
 *
 * Mobile feedback: every "Free Strategy Call" / "Get a free SEO audit" button
 * either scrolled to another CTA block or threw the visitor onto /contact/,
 * so people were bouncing between pages instead of enquiring. Those buttons
 * now open the lead popup in place, with the service pre-selected when the
 * visitor is on a service page.
 *
 * Done as an output filter (the same approach inc/image-attributes.php uses)
 * rather than by hand-editing anchors, because the same two CTAs repeat across
 * the home page and all seven service templates — and a new service page would
 * otherwise be shipped with the old behaviour.
 *
 * Scope is deliberately narrow:
 *   - only <a> styled as a pill button — `rounded-full` AND `inline-flex`.
 *     Surveyed against every /contact/ link the site renders: all four CTA
 *     variants match (btn-glow, btn-glow-accent, bg-accent, bg-ink), and
 *     neither of the two non-CTA variants does — footer/body text links
 *     (`hover:text-accent`) and the mobile bottom bar (`flex flex-col …
 *     text-[11px]`) both lack `rounded-full`. Matching on `btn-glow` alone
 *     was too narrow and silently missed the performance-marketing page.
 *   - only when it points at /contact/;
 *   - never when it opts out with `data-bx-nolead` (the header and mobile-menu
 *     CTAs do, so there is always an obvious route to the full contact page).
 *
 * The href is left untouched, so the button still works without JavaScript and
 * still says where it goes for crawlers and middle-click.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'template_redirect', 'bx_lead_cta_buffer_start', 2 );
/**
 * Start buffering so conversion CTAs can be tagged.
 */
function bx_lead_cta_buffer_start() {
	if ( is_admin() || is_feed() || is_embed() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) || wp_doing_ajax() ) {
		return;
	}
	// The popup is not rendered on these, so there would be nothing to open.
	if ( is_page( 'contact' ) || is_page( 'thank-you' ) ) {
		return;
	}
	ob_start( 'bx_tag_lead_ctas' );
}

/**
 * Add data-bx-lead (and the current service) to qualifying CTA buttons.
 *
 * @param string $html Full page HTML.
 * @return string
 */
function bx_tag_lead_ctas( $html ) {
	if ( '' === trim( $html ) ) {
		return $html;
	}

	$service = function_exists( 'bx_current_service_slug' ) ? bx_current_service_slug() : '';

	$out = preg_replace_callback(
		'#<a\b([^>]*)>#i',
		function ( $m ) use ( $service ) {
			$attrs = $m[1];

			// Already handled, or explicitly opted out.
			if ( false !== stripos( $attrs, 'data-bx-lead' ) || false !== stripos( $attrs, 'data-bx-nolead' ) ) {
				return $m[0];
			}
			// Pill-styled conversion button only, never a text or nav link.
			if ( ! preg_match( '/\bclass=["\']([^"\']*)["\']/i', $attrs, $cls )
				|| ! preg_match( '/\brounded-full\b/', $cls[1] )
				|| ! preg_match( '/\binline-flex\b/', $cls[1] ) ) {
				return $m[0];
			}
			// Pointing at the contact page.
			if ( ! preg_match( '#href=["\'][^"\']*/contact/?(?:["\'?\#])#i', $attrs ) ) {
				return $m[0];
			}

			$extra = ' data-bx-lead';
			if ( '' !== $service ) {
				$extra .= ' data-bx-service="' . esc_attr( $service ) . '"';
			}

			return '<a' . $attrs . $extra . '>';
		},
		$html
	);

	return null === $out ? $html : $out;
}
