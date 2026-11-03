<?php
/**
 * Plugin Name:       BX Industry Links Band
 * Description:       Restyles the cross-industry internal-link sections ("Other industries we serve" on industry pages, "Industries we serve" on service pages) as one dark "sectors" feature band — a deliberately distinct module from the light "Pairs well with" / "Explore more" related cards, which share the same card markup and otherwise made the two sections read as one design stacked twice. The band differs on three axes: a dark panel with a warm accent glow (vs light cards), one unified container (vs separate bordered cards), and a vertical icon-over-name-over-descriptor layout (vs the horizontal icon-beside-name cards). Presentational CSS only, scoped by aria-label and targeting just the layout grid via a child combinator (the icon wrapper also uses the .grid class, so the combinator avoids touching it). The related cards and CTA are untouched. Lives in a plugin because theme-file editing is disabled on the live host; can be folded into the theme CSS on a future deploy and this plugin removed.
 * Version:           1.2.0
 * Author:            BoostronixX
 * License:           GPL-2.0-or-later
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_head', 'bx_industry_links_band_css', 99 );
/**
 * Print the scoped "sectors band" styling for the internal-link sections.
 *
 * The layout grid becomes a dark rounded band; each link becomes a borderless
 * column (icon tile, large display name, muted keyword descriptor) divided from
 * its neighbour by a hairline, with the trailing arrow pinned to the top-right
 * as a hover affordance. Desktop reserves two lines for the name so descriptors
 * align across columns; on mobile the columns stack into full-width rows with
 * horizontal dividers.
 */
function bx_industry_links_band_css() {
	echo <<<'CSS'
<style id="bx-industry-links-band">
section[aria-label="Industries we serve"] > div > .grid,
section[aria-label="Other industries we serve"] > div > .grid{display:flex !important;flex-wrap:wrap;gap:0 !important;background:radial-gradient(135% 130% at 90% -12%, rgba(250,85,57,.22), transparent 52%), #0a0a0a;border:0 !important;border-radius:1.9rem;padding:.6rem;position:relative;overflow:hidden;box-shadow:0 34px 80px -48px rgba(0,0,0,.65);}
section[aria-label="Industries we serve"] > div > .grid > a,
section[aria-label="Other industries we serve"] > div > .grid > a{flex:1 1 210px;min-width:180px;display:flex !important;flex-direction:column;align-items:flex-start;justify-content:flex-start;gap:1rem !important;border:0 !important;border-radius:1.3rem !important;padding:1.6rem 1.4rem 1.5rem !important;background:transparent;position:relative;transition:background .25s ease,transform .25s ease;}
section[aria-label="Industries we serve"] > div > .grid > a:not(:last-child)::after,
section[aria-label="Other industries we serve"] > div > .grid > a:not(:last-child)::after{content:"";position:absolute;right:0;top:20%;bottom:20%;width:1px;background:rgba(255,255,255,.1);}
section[aria-label="Industries we serve"] > div > .grid > a:hover,
section[aria-label="Other industries we serve"] > div > .grid > a:hover{background:rgba(255,255,255,.05);transform:translateY(-2px);}
section[aria-label="Industries we serve"] > div > .grid > a > span:first-child,
section[aria-label="Other industries we serve"] > div > .grid > a > span:first-child{height:3rem !important;width:3rem !important;border-radius:1rem !important;background:rgba(250,85,57,.13) !important;color:var(--accent,#fa5539) !important;border:1px solid rgba(250,85,57,.3);box-shadow:none;font-size:1.4rem !important;flex:0 0 auto;transition:background .25s ease,border-color .25s ease;}
section[aria-label="Industries we serve"] > div > .grid > a:hover > span:first-child,
section[aria-label="Other industries we serve"] > div > .grid > a:hover > span:first-child{background:rgba(250,85,57,.22) !important;border-color:rgba(250,85,57,.55);}
section[aria-label="Industries we serve"] > div > .grid > a .flex-1,
section[aria-label="Other industries we serve"] > div > .grid > a .flex-1{display:block;min-width:0;}
section[aria-label="Industries we serve"] > div > .grid > a .tt,
section[aria-label="Other industries we serve"] > div > .grid > a .tt{display:block !important;font-size:1.24rem !important;line-height:1.14;color:#fff !important;margin-bottom:.5rem;letter-spacing:-.01em;min-height:2.3em;}
section[aria-label="Industries we serve"] > div > .grid > a .flex-1 > span:last-child,
section[aria-label="Other industries we serve"] > div > .grid > a .flex-1 > span:last-child{display:block;font-size:.8rem !important;line-height:1.35;color:rgba(255,255,255,.52) !important;}
section[aria-label="Industries we serve"] > div > .grid > a > iconify-icon,
section[aria-label="Other industries we serve"] > div > .grid > a > iconify-icon{position:absolute;top:1.3rem;right:1.3rem;display:block !important;color:rgba(255,255,255,.32) !important;font-size:1.05rem;transition:color .25s ease,transform .25s ease;}
section[aria-label="Industries we serve"] > div > .grid > a:hover > iconify-icon,
section[aria-label="Other industries we serve"] > div > .grid > a:hover > iconify-icon{color:var(--accent,#fa5539) !important;transform:translate(3px,-3px);}
@media (max-width:640px){
section[aria-label="Industries we serve"] > div > .grid > a,
section[aria-label="Other industries we serve"] > div > .grid > a{flex:1 1 100% !important;min-width:0 !important;flex-direction:row;align-items:center;gap:1rem !important;padding:1.15rem 1.2rem !important;}
section[aria-label="Industries we serve"] > div > .grid > a .tt,
section[aria-label="Other industries we serve"] > div > .grid > a .tt{margin-bottom:.15rem;font-size:1.08rem !important;min-height:0;}
section[aria-label="Industries we serve"] > div > .grid > a:not(:last-child)::after,
section[aria-label="Other industries we serve"] > div > .grid > a:not(:last-child)::after{top:auto;bottom:0;left:1.2rem;right:1.2rem;width:auto;height:1px;}
section[aria-label="Industries we serve"] > div > .grid > a > iconify-icon,
section[aria-label="Other industries we serve"] > div > .grid > a > iconify-icon{position:static;margin-left:auto;}
}
</style>

CSS;
}
