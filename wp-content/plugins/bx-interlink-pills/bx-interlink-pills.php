<?php
/**
 * Plugin Name:       BX Interlink Pills
 * Description:       Renders the cross-industry internal-link sections ("Other industries we serve" on industry pages, "Industries we serve" on service pages) as compact pills, so they read as a distinct tag row instead of a second copy of the "Explore more" related cards — both share the theme's card markup, which made the two sections look like the same design stacked twice. Presentational CSS only, scoped to those two sections by their aria-label; the "Related and contact" / "Explore more" cards are untouched. This lives in a plugin because theme-file editing is disabled on this host; fold it into the theme's own CSS on the next full deploy and remove this plugin.
 * Version:           1.0.0
 * Author:            BoostronixX
 * License:           GPL-2.0-or-later
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', 'bx_interlink_pills_css', 99 );
/**
 * Print the scoped pill styling for the internal-link sections.
 *
 * Only shape/layout is overridden; the card's existing `border border-line`
 * and the icon's `bg-surface` circle are reused, so it stays correct in any
 * colour scheme. The big industry name (`.tt`) and the trailing arrow are
 * hidden, leaving the keyword-aligned descriptor as the pill label.
 */
function bx_interlink_pills_css() {
	echo <<<'CSS'
<style id="bx-interlink-pills">
section[aria-label="Other industries we serve"] .grid,
section[aria-label="Industries we serve"] .grid{display:flex !important;flex-wrap:wrap;gap:.6rem;}
section[aria-label="Other industries we serve"] .grid > a,
section[aria-label="Industries we serve"] .grid > a{width:auto;padding:.45rem 1.1rem .45rem .5rem;border-radius:999px;gap:.5rem;transition:border-color .2s ease,color .2s ease;}
section[aria-label="Other industries we serve"] .grid > a:hover,
section[aria-label="Industries we serve"] .grid > a:hover{border-color:var(--accent,#fa5539);}
section[aria-label="Other industries we serve"] .grid > a > span:first-child,
section[aria-label="Industries we serve"] .grid > a > span:first-child{height:1.85rem;width:1.85rem;border-radius:999px;font-size:.95rem;flex:0 0 auto;}
section[aria-label="Other industries we serve"] .grid > a .flex-1,
section[aria-label="Industries we serve"] .grid > a .flex-1{flex:0 1 auto;}
section[aria-label="Other industries we serve"] .grid > a .tt,
section[aria-label="Industries we serve"] .grid > a .tt{display:none;}
section[aria-label="Other industries we serve"] .grid > a .flex-1 > span:last-child,
section[aria-label="Industries we serve"] .grid > a .flex-1 > span:last-child{font-size:.85rem;font-weight:500;line-height:1.2;color:inherit;white-space:nowrap;}
section[aria-label="Other industries we serve"] .grid > a:hover .flex-1 > span:last-child,
section[aria-label="Industries we serve"] .grid > a:hover .flex-1 > span:last-child{color:var(--accent,#fa5539);}
section[aria-label="Other industries we serve"] .grid > a > iconify-icon,
section[aria-label="Industries we serve"] .grid > a > iconify-icon{display:none;}
</style>

CSS;
}
