<?php
/**
 * Plugin Name:       BX Industry Links Panel
 * Description:       Styles the cross-industry internal-link sections ("Other industries we serve" on industry pages, "Industries we serve" on service pages) as one unified panel of divided columns — a distinct module from the "Explore more" related cards, which share the same card markup and otherwise made the two sections look like one design stacked twice. Presentational CSS only, scoped by aria-label and targeting just the layout grid (the icon wrapper also uses the .grid class, so the selectors use a child combinator to avoid touching it). The "Explore more" / "Related and contact" cards are untouched. Lives in a plugin because theme-file editing is disabled on the live host; can be folded into the theme CSS on a future deploy and this plugin removed.
 * Version:           1.1.0
 * Author:            BoostronixX
 * License:           GPL-2.0-or-later
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', 'bx_industry_links_panel_css', 99 );
/**
 * Print the scoped panel styling for the internal-link sections.
 *
 * Only the layout grid is restyled into a flex panel; the card's existing
 * border is dropped in favour of the panel's, and the icon wrapper keeps its
 * own centring. The big industry name (`.tt`) stays as the primary label, the
 * keyword-aligned descriptor below it as the muted sub-label, and the trailing
 * arrow is hidden. On mobile the columns stack and dividers run horizontally.
 */
function bx_industry_links_panel_css() {
	echo <<<'CSS'
<style id="bx-industry-links-panel">
section[aria-label="Other industries we serve"] > div > .grid,
section[aria-label="Industries we serve"] > div > .grid{display:flex !important;flex-wrap:wrap;gap:0 !important;background:#f6f4f1;border:1px solid #ece7e0;border-radius:1.5rem;padding:.5rem;}
section[aria-label="Other industries we serve"] > div > .grid > a,
section[aria-label="Industries we serve"] > div > .grid > a{flex:1 1 210px;min-width:180px;border:0 !important;border-radius:1.15rem !important;padding:1.15rem 1.25rem !important;gap:.9rem !important;background:transparent;position:relative;align-items:center;transition:background .2s ease,box-shadow .2s ease;}
section[aria-label="Other industries we serve"] > div > .grid > a:not(:last-child)::after,
section[aria-label="Industries we serve"] > div > .grid > a:not(:last-child)::after{content:"";position:absolute;right:0;top:22%;bottom:22%;width:1px;background:#e4ddd3;}
section[aria-label="Other industries we serve"] > div > .grid > a:hover,
section[aria-label="Industries we serve"] > div > .grid > a:hover{background:#fff;box-shadow:0 10px 24px -14px rgba(20,16,12,.25);}
section[aria-label="Other industries we serve"] > div > .grid > a:hover::after,
section[aria-label="Industries we serve"] > div > .grid > a:hover::after{opacity:0;}
section[aria-label="Other industries we serve"] > div > .grid > a > span:first-child,
section[aria-label="Industries we serve"] > div > .grid > a > span:first-child{height:2.75rem !important;width:2.75rem !important;border-radius:.9rem !important;background:#fff !important;color:var(--accent,#fa5539) !important;box-shadow:0 1px 2px rgba(0,0,0,.06);flex:0 0 auto;font-size:1.2rem !important;transition:background .2s ease;}
section[aria-label="Other industries we serve"] > div > .grid > a:hover > span:first-child,
section[aria-label="Industries we serve"] > div > .grid > a:hover > span:first-child{background:#fde9e5 !important;}
section[aria-label="Other industries we serve"] > div > .grid > a .flex-1,
section[aria-label="Industries we serve"] > div > .grid > a .flex-1{display:block;min-width:0;}
section[aria-label="Other industries we serve"] > div > .grid > a .tt,
section[aria-label="Industries we serve"] > div > .grid > a .tt{display:block !important;font-size:.98rem !important;font-weight:600;color:#161310;line-height:1.2;margin-bottom:.15rem;}
section[aria-label="Other industries we serve"] > div > .grid > a .flex-1 > span:last-child,
section[aria-label="Industries we serve"] > div > .grid > a .flex-1 > span:last-child{display:block;font-size:.78rem !important;color:#8c857a;line-height:1.3;}
section[aria-label="Other industries we serve"] > div > .grid > a > iconify-icon,
section[aria-label="Industries we serve"] > div > .grid > a > iconify-icon{display:none !important;}
@media (max-width:640px){
section[aria-label="Other industries we serve"] > div > .grid > a,
section[aria-label="Industries we serve"] > div > .grid > a{flex:1 1 100% !important;min-width:0 !important;}
section[aria-label="Other industries we serve"] > div > .grid > a:not(:last-child)::after,
section[aria-label="Industries we serve"] > div > .grid > a:not(:last-child)::after{top:auto;bottom:0;left:1.25rem;right:1.25rem;width:auto;height:1px;}
}
</style>

CSS;
}
