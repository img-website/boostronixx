<?php
/**
 * Lead-capture popup (home page only, as in the original design).
 *
 * Styles live in the compiled CSS (#hpPop rules) and the open/close + submit
 * behaviour lives in app.js (both guarded by the presence of #hpPop).
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_front_page() ) {
	return;
}
?>
<div id="hpPop" role="dialog" aria-modal="true" aria-labelledby="hpTitle">
	<div class="hp-bd" data-hpclose></div>
	<div class="hp-card">
		<button type="button" data-hpclose aria-label="Close" class="absolute right-3.5 top-3.5 z-20 h-9 w-9 inline-flex items-center justify-center rounded-full bg-white/85 text-ink hover:bg-white shadow transition"><iconify-icon icon="lucide:x" class="text-lg" aria-hidden="true"></iconify-icon></button>
		<div class="hp-grid">
			<!-- LEFT: form -->
			<div class="p-7 sm:p-9 order-2 md:order-1">
				<div>
					<p class="text-[11px] font-semibold tracking-[.18em] uppercase text-accent">Before you go</p>
					<h3 id="hpTitle" class="font-display text-2xl sm:text-[28px] tt leading-tight mt-2">Get a free <span class="text-accent">growth plan</span> for your brand.</h3>
					<p class="text-ink-soft text-sm mt-2 leading-relaxed">Drop your details and we'll send 2-3 quick, practical wins tailored to your business. No spam, no obligation.</p>
					<form id="hpForm" class="mt-5 grid gap-4" novalidate>
						<div class="bxfld">
							<input id="hpName" name="name" type="text" placeholder=" " required />
							<label for="hpName">Full name *</label>
						</div>
						<div class="bxfld">
							<input id="hpEmail" name="email" type="email" placeholder=" " required />
							<label for="hpEmail">Email *</label>
						</div>
						<div class="bxfld">
							<input id="hpPhone" name="phone" type="tel" placeholder=" " />
							<label for="hpPhone">Phone</label>
						</div>
						<div class="bxfld">
							<textarea id="hpMsg" name="message" placeholder=" "></textarea>
							<label for="hpMsg">What do you want to grow?</label>
						</div>
						<button id="hpSubmit" type="submit" class="btn-glow inline-flex items-center justify-center gap-2 rounded-full px-6 py-3.5 font-medium">
							<span id="hpBtnLabel" class="inline-flex items-center gap-2">Get my free plan <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span>
							<span id="hpSpinner" class="spinner hidden"></span>
						</button>
						<p class="text-[11px] text-ink-soft text-center">Replies within 24 hours &middot; No spam, ever.</p>
					</form>
				</div>
			</div>
			<!-- RIGHT: visual -->
			<div class="hp-vis order-1 md:order-2">
				<span class="hp-orb" style="width:170px;height:170px;background:#ffd0a8;opacity:.5;top:-36px;right:-26px;"></span>
				<span class="hp-orb" style="width:140px;height:140px;background:#fa5539;opacity:.4;bottom:-34px;left:24px;"></span>
				<div class="relative z-10">
					<div class="flex items-center gap-2 flex-wrap">
						<span class="hp-chip"><iconify-icon icon="lucide:zap" aria-hidden="true"></iconify-icon> Free 20-min call</span>
						<span class="hp-chip"><iconify-icon icon="lucide:trending-up" aria-hidden="true"></iconify-icon> ROI-driven</span>
					</div>
					<h4 class="font-display text-2xl sm:text-3xl tt leading-tight mt-4">Brands we touch don't stay invisible.</h4>
					<p class="text-white/75 text-sm mt-2 leading-relaxed">A Jaipur studio that pairs sharp design with performance marketing - and reports on every rupee.</p>
				</div>
				<div class="relative z-10 hidden md:block">
					<div class="hp-float bg-white/12 border border-white/20 rounded-2xl p-4 backdrop-blur-sm max-w-[262px]">
						<div class="flex items-center justify-between text-[11px] text-white/70"><span>Avg. client growth</span><span class="h-2 w-2 rounded-full bg-white"></span></div>
						<p class="font-display text-4xl tt mt-1">+220%</p>
						<div class="flex items-end gap-1.5 h-12 mt-3" aria-hidden="true">
							<span class="flex-1 rounded-sm bg-white/30" style="height:32%"></span>
							<span class="flex-1 rounded-sm bg-white/40" style="height:46%"></span>
							<span class="flex-1 rounded-sm bg-white/30" style="height:38%"></span>
							<span class="flex-1 rounded-sm bg-white/55" style="height:64%"></span>
							<span class="flex-1 rounded-sm bg-white/45" style="height:54%"></span>
							<span class="flex-1 rounded-sm bg-white" style="height:88%"></span>
							<span class="flex-1 rounded-sm bg-white/70" style="height:74%"></span>
						</div>
					</div>
					<div class="hp-float2 absolute -bottom-3 right-1 bg-white text-ink rounded-xl px-3 py-2 shadow-xl flex items-center gap-2">
						<span class="text-accent text-sm tracking-tight">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
						<span class="text-[11px] font-semibold">4.9 &middot; 50+ brands</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
