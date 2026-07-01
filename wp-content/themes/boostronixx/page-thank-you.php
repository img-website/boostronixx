<?php
/**
 * Template Name: Thank You
 *
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-sm font-medium text-ink-soft hover:text-accent inline-flex items-center gap-1.5"><iconify-icon icon="lucide:arrow-left"></iconify-icon> Back to home</a>
		</div>
	</div>
</header>

<div id="confetti" aria-hidden="true"></div>

<main id="main" class="relative min-h-screen grid-lines flex items-center justify-center px-4 py-28 overflow-hidden">
      <div class="w-full max-w-2xl text-center">
        <!-- success badge -->
        <div class="flex justify-center">
          <div class="badge-pop halo relative inline-grid place-items-center h-28 w-28 rounded-full bg-ink">
            <svg viewBox="0 0 120 120" class="h-20 w-20">
              <circle class="check-ring" cx="60" cy="60" r="52" fill="none" stroke="#fa5539" stroke-width="6" stroke-linecap="round" transform="rotate(-90 60 60)" />
              <path class="check-mark" d="M40 62 L54 76 L82 44" fill="none" stroke="#fff" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>

        <p class="rise d1 mt-8 text-xs font-medium tracking-[.25em] uppercase text-accent">Message received</p>
        <h1 id="tyHeading" class="rise d2 font-display text-4xl sm:text-6xl tt leading-[1.0] mt-3">
          Thank you!
        </h1>
        <p class="rise d3 text-ink-soft mt-5 max-w-md mx-auto leading-relaxed">
          Your message is in good hands. A real person from our team will get back
          to you <span class="text-ink font-medium">within 24 hours</span> — usually
          much sooner.
        </p>

        <!-- mini timeline -->
        <div class="rise d4 mt-9 text-left mx-auto max-w-md rounded-xl2 border border-line bg-paper p-6 shadow-[0_40px_80px_-60px_rgba(10,10,10,.45)]">
          <p class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft mb-5">While you wait — here's what's next</p>
          <ol class="relative ml-3">
            <span class="tl-line absolute left-[7px] top-2 bottom-2 w-0.5"></span>
            <li class="relative pl-7 pb-5">
              <span class="absolute left-0 top-1 h-3.5 w-3.5 rounded-full bg-accent ring-4 ring-accent/15"></span>
              <p class="font-display tt">We review your brief</p>
              <p class="text-ink-soft text-sm">Within a few business hours.</p>
            </li>
            <li class="relative pl-7 pb-5">
              <span class="absolute left-0 top-1 h-3.5 w-3.5 rounded-full bg-ink"></span>
              <p class="font-display tt">We reach out to you</p>
              <p class="text-ink-soft text-sm">To book your free strategy call.</p>
            </li>
            <li class="relative pl-7">
              <span class="absolute left-0 top-1 h-3.5 w-3.5 rounded-full bg-ink"></span>
              <p class="font-display tt">You get a roadmap</p>
              <p class="text-ink-soft text-sm">Quick wins + a clear, costed plan.</p>
            </li>
          </ol>
        </div>

        <div class="rise d5 flex flex-wrap items-center justify-center gap-3 mt-9">
          <a href="/portfolio/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium">
            <span class="relative z-10 sheen-text">Explore our work</span>
            <iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
          </a>
          <a href="/blog/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium">
            <iconify-icon icon="lucide:book-open" class="relative z-10 shrink-0"></iconify-icon>
            <span class="relative z-10 sheen-text-dark">Read our insights</span>
          </a>
        </div>

        <p class="rise d5 text-xs text-ink-soft mt-8">
          Redirecting you home in <span id="count" class="font-semibold text-ink">15</span>s ·
          <button id="stopRedirect" class="underline underline-offset-2 decoration-accent hover:text-accent">stay here</button>
        </p>
      </div>
    </main>

<?php
get_footer( 'blank' );
