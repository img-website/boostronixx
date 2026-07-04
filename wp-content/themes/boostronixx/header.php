<?php
/**
 * Site header: <head>, top bar nav, and mobile menu drawer.
 *
 * SEO meta / title / canonical / OG / JSON-LD are intentionally NOT hardcoded
 * here — Yoast SEO is the source of truth and outputs them via wp_head()
 * (CLAUDE.md §9: no duplicate meta/schema).
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bx_logo  = bx_logo_url();
$bx_brand = is_front_page() ? '#top' : home_url( '/' );

// Header nav (ACF Site Settings) — falls back to the original links if empty.
$bx_nav = bx_option( 'header_nav', array() );
if ( ! $bx_nav ) {
	$bx_nav = array(
		array( 'link' => array( 'title' => 'Services', 'url' => home_url( '/services/' ) ) ),
		array( 'link' => array( 'title' => 'Work', 'url' => home_url( '/portfolio/' ) ) ),
		array( 'link' => array( 'title' => 'About', 'url' => home_url( '/about-us/' ) ) ),
		array( 'link' => array( 'title' => 'Industries', 'url' => home_url( '/industries/' ) ) ),
		array( 'link' => array( 'title' => 'Insights', 'url' => home_url( '/blog/' ) ) ),
	);
}

// Header CTA button.
$bx_cta              = bx_option( 'header_cta', array() );
$bx_cta_url          = ! empty( $bx_cta['url'] ) ? $bx_cta['url'] : home_url( '/contact/' );
$bx_cta_label        = ! empty( $bx_cta['title'] ) ? $bx_cta['title'] : "Let's Build Together";
$bx_cta_tgt          = ! empty( $bx_cta['target'] ) ? ' target="' . esc_attr( $bx_cta['target'] ) . '"' : '';
$bx_mobile_cta_label = bx_option( 'mobile_cta_label', 'Book a Free Strategy Call' );
?><!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#0a0a0a" />
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased' ); ?>>
<?php wp_body_open(); ?>
<a href="#top" class="skip-link">Skip to content</a>

<!-- ===================== HEADER ===================== -->
<header class="fixed top-0 inset-x-0 z-50">
	<div class="mx-auto max-w-7xl px-4 sm:px-6">
		<div id="hdrbar" class="mt-3 flex items-center justify-between rounded-full border border-line bg-paper/80 backdrop-blur-md px-3 sm:px-5 h-14 sm:h-16 transition-all duration-300">
			<a href="<?php echo esc_url( $bx_brand ); ?>" class="flex items-center gap-2 shrink-0"><img width="127" height="32" src="<?php echo esc_url( $bx_logo ); ?>" alt="BoostronixX — creative branding and digital marketing agency" class="h-7 sm:h-8 w-auto" /></a>
			<nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-ink-soft">
				<?php
				foreach ( $bx_nav as $bx_item ) :
					$bx_l = isset( $bx_item['link'] ) ? $bx_item['link'] : array();
					if ( empty( $bx_l['url'] ) ) {
						continue;
					}
					$bx_active = bx_link_is_current( $bx_l['url'] ) ? ' active text-ink' : '';
					?>
				<a href="<?php echo esc_url( $bx_l['url'] ); ?>"<?php echo ! empty( $bx_l['target'] ) ? ' target="' . esc_attr( $bx_l['target'] ) . '"' : ''; ?> class="nav-link<?php echo esc_attr( $bx_active ); ?>"><?php echo esc_html( $bx_l['title'] ); ?></a>
				<?php endforeach; ?>
			</nav>
			<div class="flex items-center gap-2">
				<a href="<?php echo esc_url( $bx_cta_url ); ?>"<?php echo $bx_cta_tgt; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built with esc_attr above. ?> class="group btn-glow hidden sm:inline-flex items-center gap-2 rounded-full pl-4 pr-5 py-2.5 text-sm font-medium">
					<iconify-icon icon="lucide:sparkles" class="relative z-10 text-base"></iconify-icon>
					<span class="relative z-10 sheen-text"><?php echo esc_html( $bx_cta_label ); ?></span>
				</a>
				<button id="menuBtn" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu" class="lg:hidden grid place-items-center h-10 w-10 rounded-full border border-line text-xl">
					<iconify-icon icon="lucide:menu"></iconify-icon>
				</button>
			</div>
		</div>
	</div>
</header>

<div id="mobileMenu" class="fixed inset-0 z-[60] hidden">
	<div class="absolute inset-0 bg-ink/40 backdrop-blur-sm" data-close></div>
	<div id="menuPanel" class="absolute right-0 top-0 h-full w-[86%] max-w-sm bg-paper p-6 flex flex-col translate-x-full transition-transform duration-300">
		<div class="flex items-center justify-between">
			<img width="111" height="28" src="<?php echo esc_url( $bx_logo ); ?>" alt="BoostronixX" class="h-7 w-auto" />
			<button data-close aria-label="Close menu" class="grid place-items-center h-10 w-10 rounded-full border border-line text-xl">
				<iconify-icon icon="lucide:x"></iconify-icon>
			</button>
		</div>
		<nav class="mt-10 flex flex-col gap-1 text-2xl font-display tt">
			<?php
			foreach ( $bx_nav as $bx_item ) :
				$bx_l = isset( $bx_item['link'] ) ? $bx_item['link'] : array();
				if ( empty( $bx_l['url'] ) ) {
					continue;
				}
				?>
			<a href="<?php echo esc_url( $bx_l['url'] ); ?>"<?php echo ! empty( $bx_l['target'] ) ? ' target="' . esc_attr( $bx_l['target'] ) . '"' : ''; ?> data-close class="py-3 border-b border-line flex items-center justify-between"><?php echo esc_html( $bx_l['title'] ); ?><span class="text-accent"><iconify-icon icon="lucide:arrow-right"></iconify-icon></span></a>
			<?php endforeach; ?>
		</nav>
		<a href="<?php echo esc_url( $bx_cta_url ); ?>"<?php echo $bx_cta_tgt; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built with esc_attr above. ?> data-close class="group btn-glow-accent mt-auto inline-flex justify-center items-center gap-2 rounded-full px-6 py-4 font-medium">
			<span class="relative z-10 sheen-text-light"><?php echo esc_html( $bx_mobile_cta_label ); ?></span>
			<iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
		</a>
	</div>
</div>
