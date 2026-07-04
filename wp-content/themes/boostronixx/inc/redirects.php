<?php
/**
 * 301 redirects — restore the original (Google-indexed) URL structure.
 *
 * The rebuild briefly served flat slugs (/seo-services/) while the live site
 * had — and Google indexed — nested ones (/services/seo-services/). Pages are
 * now correctly nested; these permanent redirects catch the flat URLs (and the
 * old /contact-us/, plus indexed portfolio items with no rebuilt page) so no
 * inbound link or search result ever hits a 404 and link-equity is preserved.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'template_redirect', 'bx_legacy_url_redirects', 0 );
/**
 * Send a 301 for any known legacy path to its canonical location.
 */
function bx_legacy_url_redirects() {
	if ( is_admin() || is_robots() || is_feed() ) {
		return;
	}

	// old (flat / renamed) path  =>  correct nested path.
	$map = array(
		'seo-services'           => '/services/seo-services/',
		'digital-marketing'      => '/services/digital-marketing/',
		'performance-marketing'  => '/services/performance-marketing/',
		'social-media-marketing' => '/services/social-media-marketing/',
		'brand-consulting'       => '/services/brand-consulting/',
		'website-design'         => '/services/website-design/',
		'ui-ux-design'           => '/services/ui-ux-design/',
		'real-estate'            => '/industries/real-estate/',
		'schools'                => '/industries/schools/',
		'hospitals'              => '/industries/hospitals/',
		'd2c-ecommerce'          => '/industries/d2c-ecommerce/',
		'edoovi-erp'             => '/portfolio/edoovi-erp/',
		'portfolio/freshee'      => '/portfolio/', // indexed case study not rebuilt yet
		'contact-us'             => '/contact/',
		'faq'                    => '/faqs/', // page renamed to the indexed /faqs/

		// portfolio taxonomy archives (no portfolio CPT in the rebuild).
		'portfolio/category/saas-product-design'    => '/portfolio/edoovi-erp/',
		'portfolio/category/mobile-app-development'  => '/portfolio/',

		// pruned blog tags → the most relevant surviving post / tag archive.
		'blog/tag/brand-image'         => '/blog/brand-identity-vs-brand-image/',
		'blog/tag/brand-audit'         => '/blog/brand-audit-checklist/',
		'blog/tag/brand-refresh'       => '/blog/rebranding-vs-brand-refresh/',
		'blog/tag/brand-guidelines'    => '/blog/how-to-create-a-brand-style-guide/',
		'blog/tag/brand-storytelling'  => '/blog/brand-storytelling-indian-brands/',
		'blog/tag/brand-trust'         => '/blog/how-to-build-brand-trust/',
		'blog/tag/consumer-psychology' => '/blog/how-to-build-brand-trust/',
		'blog/tag/google-ads'          => '/blog/why-ads-alone-dont-work-funnel-based-performance-marketing/',
		'blog/tag/digital-branding'    => '/blog/tag/brand-building/',
		'blog/tag/business-growth'     => '/blog/tag/business-branding/',
	);

	$path = wp_parse_url( isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '', PHP_URL_PATH );
	if ( ! $path ) {
		return;
	}
	$key = trim( rawurldecode( $path ), '/' );          // normalise: no leading/trailing slash.
	$key = preg_replace( '#/{2,}#', '/', $key );

	if ( isset( $map[ $key ] ) ) {
		wp_safe_redirect( home_url( $map[ $key ] ), 301 );
		exit;
	}
}
