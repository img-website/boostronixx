<?php
/**
 * Template Name: Error
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="relative min-h-screen grid-lines-d flex items-center justify-center px-4 py-28 overflow-hidden">
      <div class="w-full max-w-2xl text-center">
        <!-- 500 with signal -->
        <div class="rise d1 relative mx-auto w-fit">
          <span class="glow500 absolute inset-0 -z-10"></span>
          <p class="shake font-display text-[6rem] sm:text-[10rem] tt leading-[0.8] select-none">5<span class="text-accent">0</span>0</p>
          <!-- flatlining signal under the number -->
          <svg viewBox="0 0 320 60" class="w-full h-12 mt-2" fill="none" aria-hidden="true">
            <path class="sig" d="M0,30 L80,30 L96,30 L104,8 L116,52 L128,18 L138,30 L210,30 L226,30 L234,12 L246,48 L258,30 L320,30"
              stroke="#fa5539" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>

        <p class="rise d2 text-xs font-medium tracking-[.25em] uppercase text-accent">Internal server error</p>
        <h1 class="rise d3 font-display text-3xl sm:text-5xl tt leading-tight mt-3">
          Something broke on our end
        </h1>
        <p class="rise d3 text-white/60 mt-4 max-w-md mx-auto leading-relaxed">
          This one's on us, not you. Our team has been automatically notified and is
          on it. Give it a moment and try again.
        </p>

        <!-- mini diagnostic console -->
        <div class="rise d4 mt-8 mx-auto max-w-md text-left rounded-2xl border border-white/12 bg-white/[0.04] backdrop-blur p-5 font-mono text-[13px]">
          <div class="flex items-center gap-1.5 mb-3">
            <span class="h-2.5 w-2.5 rounded-full bg-white/20"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-white/20"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-accent"></span>
            <span class="ml-2 text-white/40 text-[11px]">diagnostics</span>
          </div>
          <p class="text-white/50">&gt; request failed <span class="text-accent">[500]</span></p>
          <p class="text-white/50">&gt; team notified <span class="blip2 text-emerald-400">✓</span></p>
          <p class="text-white/50">&gt; retrying connection<span class="caret"></span></p>
        </div>

        <div class="rise d5 flex flex-wrap items-center justify-center gap-3 mt-8">
          <button id="retryBtn" class="inline-flex items-center justify-center gap-2 rounded-full bg-accent text-white px-7 py-3.5 font-medium hover:bg-white hover:text-ink transition min-w-[150px]">
            <span id="retryLabel" class="inline-flex items-center gap-2">Try again <iconify-icon icon="lucide:rotate-cw"></iconify-icon></span>
            <span id="retrySpinner" class="spinner hidden"></span>
          </button>
          <a href="/" class="inline-flex items-center gap-2 rounded-full border border-white/20 px-7 py-3.5 font-medium hover:bg-white hover:text-ink transition">
            <iconify-icon icon="lucide:house"></iconify-icon> Go home
          </a>
        </div>

        <p class="rise d5 text-xs text-white/40 mt-7">
          Still stuck? <a href="mailto:boostronixx@gmail.com?subject=Error%20500%20report" class="underline underline-offset-2 decoration-accent hover:text-accent">Report this issue</a> and we'll dig in.
        </p>
      </div>
    </main>

<?php
get_footer();
