<?php
/**
 * 404 / not-found template.
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'blank' );
?>

<header class="absolute top-0 inset-x-0 z-50">
	<div class="mx-auto max-w-7xl px-4 sm:px-6">
		<div class="mt-5 flex items-center justify-between">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-2"><img src="<?php echo esc_url( bx_logo_url() ); ?>" alt="BoostronixX" class="h-7 sm:h-8 w-auto" /></a>
			<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="text-sm font-medium text-ink-soft hover:text-accent inline-flex items-center gap-1.5">Need help? <iconify-icon icon="lucide:life-buoy"></iconify-icon></a>
		</div>
	</div>
</header>

<main id="main" class="relative min-h-screen grid-lines flex items-center justify-center px-4 py-28 overflow-hidden">
      <div class="w-full max-w-2xl text-center">
        <!-- 404 with orbit -->
        <div class="rise d1 relative mx-auto w-fit">
          <!-- orbit decorations -->
          <svg viewBox="0 0 400 240" class="absolute -inset-8 w-[calc(100%+4rem)] h-[calc(100%+4rem)] pointer-events-none" aria-hidden="true">
            <g class="orbit" style="transform-origin: 200px 120px">
              <circle cx="200" cy="22" r="6" fill="#fa5539" />
            </g>
            <g class="orbit-rev" style="transform-origin: 200px 120px">
              <rect x="356" y="112" width="12" height="12" rx="3" fill="#0a0a0a" />
            </g>
            <ellipse cx="200" cy="120" rx="186" ry="104" fill="none" stroke="#e6e1da" stroke-width="2" stroke-dasharray="2 8" />
          </svg>

          <p class="glitch font-display text-[7rem] sm:text-[11rem] tt select-none" aria-label="404">
            <span class="relative z-10">404</span>
            <span class="layer l1" aria-hidden="true">404</span>
            <span class="layer l2" aria-hidden="true">404</span>
          </p>
        </div>

        <p class="rise d2 text-xs font-medium tracking-[.25em] uppercase text-accent mt-2">Lost in space</p>
        <h1 class="rise d3 font-display text-3xl sm:text-5xl tt leading-tight mt-3">
          This page drifted off the map
        </h1>
        <p class="rise d3 text-ink-soft mt-4 max-w-md mx-auto leading-relaxed">
          The link may be broken or the page may have moved. Let's get you back to
          something useful.
        </p>

        <!-- search -->
        <form id="searchForm" class="rise d4 mt-8 relative max-w-md mx-auto">
          <iconify-icon icon="lucide:search" class="absolute left-5 top-1/2 -translate-y-1/2 text-xl text-ink-soft"></iconify-icon>
          <input id="q" type="text" aria-label="Search the site" placeholder="Search the site…" class="w-full rounded-full border border-line bg-paper py-4 pr-28 text-base outline-none focus:border-accent transition" style="padding-left: 3.25rem" />
          <button type="submit" class="absolute right-1.5 top-1.5 bottom-1.5 rounded-full bg-ink text-paper px-5 text-sm font-medium hover:bg-accent transition">Search</button>
        </form>

        <!-- quick links -->
        <div class="rise d5 grid sm:grid-cols-3 gap-3 mt-8 text-left">
          <a href="/" class="lcard rounded-2xl border border-line bg-paper p-4 flex items-center gap-3">
            <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-lg shrink-0"><iconify-icon icon="lucide:house"></iconify-icon></span>
            <span class="flex-1"><span class="font-display tt block">Home</span><span class="text-xs text-ink-soft">Start over</span></span>
            <iconify-icon icon="lucide:arrow-right" class="larr text-ink-soft"></iconify-icon>
          </a>
          <a href="/services/" class="lcard rounded-2xl border border-line bg-paper p-4 flex items-center gap-3">
            <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-lg shrink-0"><iconify-icon icon="lucide:layout-grid"></iconify-icon></span>
            <span class="flex-1"><span class="font-display tt block">Services</span><span class="text-xs text-ink-soft">What we do</span></span>
            <iconify-icon icon="lucide:arrow-right" class="larr text-ink-soft"></iconify-icon>
          </a>
          <a href="/contact-us/" class="lcard rounded-2xl border border-line bg-paper p-4 flex items-center gap-3">
            <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-lg shrink-0"><iconify-icon icon="lucide:message-square"></iconify-icon></span>
            <span class="flex-1"><span class="font-display tt block">Contact</span><span class="text-xs text-ink-soft">Talk to us</span></span>
            <iconify-icon icon="lucide:arrow-right" class="larr text-ink-soft"></iconify-icon>
          </a>
        </div>

        <div class="rise d5 mt-8">
          <a href="/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-7 py-3.5 font-medium">
            <iconify-icon icon="lucide:arrow-left" class="relative z-10"></iconify-icon>
            <span class="relative z-10 sheen-text">Back to homepage</span>
          </a>
          <p class="text-xs text-ink-soft mt-5">
            Or browse the full <a href="/sitemap/" class="underline underline-offset-2 decoration-accent hover:text-accent">sitemap</a>.
          </p>
        </div>
      </div>
    </main>

<?php
get_footer( 'blank' );
