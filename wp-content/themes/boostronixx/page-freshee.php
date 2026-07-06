<?php
/**
 * Template Name: Portfolio — Freshee
 *
 * Case study: Freshee — organic quick-commerce grocery brand, app UI/UX and D2C
 * storefront. Design language leans "fresh organic green" in the product mocks
 * while keeping the site's accent for brand consistency. Photographic slots use
 * bx_ph_figure() placeholders (ACF images: freshee_*) so the client can add real
 * screenshots later. SEO title/OG/schema come from Yoast + _bx_schema.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- ===================== HERO ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#34d399;top:-20px;right:-40px"></span>
        <span class="orb orb-b" style="width:240px;height:240px;background:#a3e635;bottom:-40px;left:-30px"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/portfolio/" class="hover:text-accent">Portfolio</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Freshee</span>
          </nav>

          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal flex flex-wrap items-center gap-2 text-xs mb-5">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 text-emerald-700 font-medium px-3 py-1.5"><iconify-icon icon="lucide:leaf"></iconify-icon> Quick Commerce</span>
                <span class="rounded-full border border-line px-3 py-1.5">D2C E-commerce</span>
                <span class="rounded-full border border-line px-3 py-1.5">2025</span>
              </div>
              <h1 class="reveal font-display text-[2.4rem] leading-[1.0] sm:text-6xl tt">
                Organic freshness, <span class="text-accent">delivered in minutes</span>
              </h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">
                Freshee is a Jabalpur-born quick-commerce brand on a simple promise — 100%
                certified-organic vegetables, fruits, fresh juices and daily essentials, at
                your doorstep in minutes. BoostronixX shaped the brand identity, the iOS and
                Android app experience and the D2C storefront so ordering fresh feels as
                effortless as the tagline: freshness at your fingertips.
              </p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="#overview" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Explore the case study</span><iconify-icon icon="lucide:arrow-down" class="relative z-10"></iconify-icon></a>
                <a href="https://freshee.shop/" target="_blank" rel="noopener" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:external-link" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">Visit Freshee</span></a>
              </div>
            </div>

            <!-- hero grocery app mock -->
            <div class="lg:col-span-6 reveal flex justify-center" data-delay="1">
              <div class="w-[300px] rounded-[2.4rem] bg-[#0c130f] border border-white/12 p-4 shadow-[0_50px_100px_-50px_rgba(10,20,12,.6)]">
                <div class="flex justify-center"><span class="h-1.5 w-14 rounded-full bg-white/15"></span></div>
                <div class="mt-4 flex items-center justify-between text-paper">
                  <div class="flex items-center gap-2">
                    <span class="grid place-items-center h-8 w-8 rounded-xl bg-emerald-500 text-xs font-bold"><iconify-icon icon="lucide:sprout"></iconify-icon></span>
                    <div class="leading-tight"><p class="font-display tt text-sm">Freshee</p><p class="text-[10px] text-paper/40 flex items-center gap-1"><iconify-icon icon="lucide:map-pin" class="text-emerald-400"></iconify-icon> Jabalpur · 10 min</p></div>
                  </div>
                  <span class="relative grid place-items-center h-8 w-8 rounded-full bg-white/8 text-paper"><iconify-icon icon="lucide:shopping-cart"></iconify-icon><span class="absolute -top-1 -right-1 h-4 w-4 grid place-items-center rounded-full bg-accent text-[9px] font-bold"><span class="count" data-to="6">0</span></span></span>
                </div>
                <div class="mt-3 flex items-center gap-1.5 rounded-full bg-white/6 px-3 py-2.5 text-[11px] text-paper/50"><iconify-icon icon="lucide:search"></iconify-icon> Fresh fruits<span class="caret"></span></div>
                <div class="mt-3 flex items-center gap-2 overflow-hidden text-[10px]">
                  <span class="shrink-0 rounded-full bg-emerald-500/15 text-emerald-300 px-2.5 py-1 font-medium">All</span>
                  <span class="shrink-0 rounded-full bg-white/6 text-paper/60 px-2.5 py-1">Vegetables</span>
                  <span class="shrink-0 rounded-full bg-white/6 text-paper/60 px-2.5 py-1">Fruits</span>
                  <span class="shrink-0 rounded-full bg-white/6 text-paper/60 px-2.5 py-1">Juices</span>
                </div>
                <div class="grid grid-cols-2 gap-2 mt-3">
                  <div class="pop p1 rounded-2xl bg-white/6 p-2.5"><span class="block h-14 rounded-xl bg-gradient-to-br from-emerald-400/50 to-emerald-700/30 grid place-items-center text-emerald-100/70 text-xl"><iconify-icon icon="lucide:apple"></iconify-icon></span><p class="text-[10px] text-paper/70 mt-1.5 flex items-center gap-1"><iconify-icon icon="lucide:badge-check" class="text-emerald-400"></iconify-icon> Avocado</p><div class="flex items-center justify-between mt-0.5"><p class="text-[10px] text-paper font-semibold">₹120</p><span class="grid place-items-center h-5 w-5 rounded-md bg-accent text-paper text-[10px]">+</span></div></div>
                  <div class="pop p2 rounded-2xl bg-white/6 p-2.5"><span class="block h-14 rounded-xl bg-gradient-to-br from-orange-300/50 to-orange-500/30 grid place-items-center text-orange-100/70 text-xl"><iconify-icon icon="lucide:citrus"></iconify-icon></span><p class="text-[10px] text-paper/70 mt-1.5 flex items-center gap-1"><iconify-icon icon="lucide:badge-check" class="text-emerald-400"></iconify-icon> Oranges</p><div class="flex items-center justify-between mt-0.5"><p class="text-[10px] text-paper font-semibold">₹80</p><span class="grid place-items-center h-5 w-5 rounded-md bg-accent text-paper text-[10px]">+</span></div></div>
                  <div class="pop p3 rounded-2xl bg-white/6 p-2.5"><span class="block h-14 rounded-xl bg-gradient-to-br from-red-300/50 to-red-500/30 grid place-items-center text-red-100/70 text-xl"><iconify-icon icon="lucide:cherry"></iconify-icon></span><p class="text-[10px] text-paper/70 mt-1.5 flex items-center gap-1"><iconify-icon icon="lucide:badge-check" class="text-emerald-400"></iconify-icon> Tomato</p><div class="flex items-center justify-between mt-0.5"><p class="text-[10px] text-paper font-semibold">₹40</p><span class="grid place-items-center h-5 w-5 rounded-md bg-accent text-paper text-[10px]">+</span></div></div>
                  <div class="pop p4 rounded-2xl bg-white/6 p-2.5"><span class="block h-14 rounded-xl bg-gradient-to-br from-lime-300/50 to-lime-600/30 grid place-items-center text-lime-100/70 text-xl"><iconify-icon icon="lucide:leaf"></iconify-icon></span><p class="text-[10px] text-paper/70 mt-1.5 flex items-center gap-1"><iconify-icon icon="lucide:badge-check" class="text-emerald-400"></iconify-icon> Spinach</p><div class="flex items-center justify-between mt-0.5"><p class="text-[10px] text-paper font-semibold">₹30</p><span class="grid place-items-center h-5 w-5 rounded-md bg-accent text-paper text-[10px]">+</span></div></div>
                </div>
                <div class="mt-3 rounded-2xl bg-accent text-paper flex items-center justify-between px-4 py-3 text-xs font-medium"><span class="flex items-center gap-1.5"><iconify-icon icon="lucide:bike"></iconify-icon> Deliver in 10 min</span><span class="font-display tt">₹270</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== OVERVIEW FACTS ===================== -->
      <section id="overview" class="border-y border-line bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid grid-cols-2 lg:grid-cols-4 gap-px bg-line">
          <div class="reveal bg-surface p-6"><p class="text-xs text-ink-soft">Client</p><p class="font-display text-lg tt mt-1">Freshee</p></div>
          <div class="reveal bg-surface p-6" data-delay="1"><p class="text-xs text-ink-soft">Category</p><p class="font-display text-lg tt mt-1">D2C · Quick Commerce</p></div>
          <div class="reveal bg-surface p-6" data-delay="2"><p class="text-xs text-ink-soft">Engagement</p><p class="font-display text-lg tt mt-1">Brand · App UI/UX · Storefront</p></div>
          <div class="reveal bg-surface p-6" data-delay="3"><p class="text-xs text-ink-soft">Year &amp; Location</p><p class="font-display text-lg tt mt-1">2025 · Jabalpur, MP</p></div>
        </div>
      </section>

      <!-- ===================== CHALLENGE ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10">
          <div class="lg:col-span-4">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The challenge</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Make &ldquo;100% organic&rdquo; feel effortless to buy</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Organic grocery is a trust purchase; quick commerce is a speed purchase — Freshee had to be both at once. It needed an identity that signalled genuinely organic without cliché, plus an app and storefront where a busy family goes from craving to checkout in under a minute, seamlessly across iOS, Android and web.</p>
          </div>
          <div class="lg:col-span-8 grid sm:grid-cols-2 gap-4">
            <div class="reveal lift rounded-2xl border border-line p-6"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:leaf"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Prove the organic promise</h3><p class="text-ink-soft text-sm mt-1.5">Make certified 100% organic and sustainable packaging a felt guarantee, not just a badge.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:timer"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Design for minutes</h3><p class="text-ink-soft text-sm mt-1.5">A quick-commerce flow where discovery, cart and checkout stay fast, light and thumb-friendly.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:layout-grid"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">One brand, three surfaces</h3><p class="text-ink-soft text-sm mt-1.5">A consistent look and feel spanning the iOS app, Android app and the freshee.shop storefront.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:users"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Win family trust</h3><p class="text-ink-soft text-sm mt-1.5">A warm, health-first tone that reassures parents shopping for the whole household.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== APPROACH (dark) ===================== -->
      <section class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden">
        <div class="absolute inset-0 grid-lines-d opacity-60"></div>
        <span class="orb" style="width:320px;height:320px;background:#10b981;opacity:.18;top:-60px;left:10%"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Our approach</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A fresh, organic system built to move fast</h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1">We started with the brand — living greens, natural produce cues and a friendly, health-forward voice — then built a single design system so every screen feels like one Freshee. Component-first thinking meant the same product cards, category chips and cart patterns flow cleanly from app to storefront.</p>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6"><span class="grid place-items-center h-11 w-11 rounded-xl bg-emerald-500 text-paper text-xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><h3 class="font-display tt mt-4">Brand identity &amp; board</h3><p class="text-paper/55 text-sm mt-1.5">Logo, organic green palette, produce-led illustration and a clear voice built around freshness.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-emerald-500 text-paper text-xl"><iconify-icon icon="lucide:component"></iconify-icon></span><h3 class="font-display tt mt-4">Reusable design system</h3><p class="text-paper/55 text-sm mt-1.5">Product cards, category chips, cart and checkout components consistent on every surface.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-emerald-500 text-paper text-xl"><iconify-icon icon="lucide:route"></iconify-icon></span><h3 class="font-display tt mt-4">Mapped shopping journeys</h3><p class="text-paper/55 text-sm mt-1.5">Streamlined flows from browse to reorder, cutting steps so ordering feels genuinely quick.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="3"><span class="grid place-items-center h-11 w-11 rounded-xl bg-emerald-500 text-paper text-xl"><iconify-icon icon="lucide:recycle"></iconify-icon></span><h3 class="font-display tt mt-4">Sustainability, made visible</h3><p class="text-paper/55 text-sm mt-1.5">Design cues that surface organic certification and sustainable packaging where they build trust.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== FEATURES + STOREFRONT MOCK ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Key features</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">An app and storefront made to reorder</h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">Built around the moments that matter in grocery — finding what you need, trusting it's fresh, and getting it fast. Clear browsing, prominent freshness cues, a frictionless cart and an easy reorder path make a weekly shop take moments.</p>
            <div class="grid sm:grid-cols-2 gap-3 mt-8">
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:smartphone"></iconify-icon></span><span class="font-medium text-sm">iOS &amp; Android apps</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:search"></iconify-icon></span><span class="font-medium text-sm">Fast browse &amp; search</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:shopping-cart"></iconify-icon></span><span class="font-medium text-sm">Frictionless checkout</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:repeat"></iconify-icon></span><span class="font-medium text-sm">Easy reorder</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:bike"></iconify-icon></span><span class="font-medium text-sm">Delivery clarity</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:leaf"></iconify-icon></span><span class="font-medium text-sm">Organic-first cues</span></div>
            </div>
          </div>
          <!-- storefront browser mock -->
          <div class="reveal" data-delay="1">
            <div class="rounded-xl2 bg-[#0c130f] border border-white/10 p-3 shadow-[0_50px_100px_-50px_rgba(10,20,12,.5)] overflow-hidden">
              <div class="flex items-center gap-1.5 px-2 py-2">
                <span class="h-2.5 w-2.5 rounded-full bg-white/15"></span><span class="h-2.5 w-2.5 rounded-full bg-white/15"></span><span class="h-2.5 w-2.5 rounded-full bg-white/15"></span>
                <span class="ml-3 flex-1 rounded-full bg-white/6 px-3 py-1 text-[10px] text-paper/40 flex items-center gap-1.5"><iconify-icon icon="lucide:lock" class="text-emerald-400"></iconify-icon> freshee.shop</span>
              </div>
              <div class="rounded-xl bg-[#0f1712] p-4">
                <div class="flex items-center justify-between text-paper">
                  <span class="font-display tt text-sm inline-flex items-center gap-1.5"><iconify-icon icon="lucide:sprout" class="text-emerald-400"></iconify-icon> Freshee</span>
                  <span class="hidden sm:flex items-center gap-3 text-[10px] text-paper/50">Shop <span>Organic</span> <span>About</span> <span class="rounded-full bg-accent text-paper px-2.5 py-1">Order now</span></span>
                </div>
                <div class="mt-4 grid grid-cols-[1.3fr_1fr] gap-3 items-center">
                  <div>
                    <p class="font-display tt text-paper text-lg leading-tight">Freshness at your doorstep</p>
                    <p class="text-[10px] text-paper/45 mt-1">100% organic · delivered in minutes</p>
                    <span class="inline-flex mt-2 rounded-full bg-emerald-500 text-paper text-[10px] px-3 py-1.5">Start shopping</span>
                  </div>
                  <div class="rounded-xl bg-gradient-to-br from-emerald-400/40 to-emerald-700/20 h-20 grid place-items-center text-emerald-100/70 text-2xl"><iconify-icon icon="lucide:shopping-basket"></iconify-icon></div>
                </div>
                <div class="grid grid-cols-4 gap-2 mt-3">
                  <div class="pop p1 rounded-lg bg-white/6 h-12 grid place-items-center text-emerald-300"><iconify-icon icon="lucide:carrot"></iconify-icon></div>
                  <div class="pop p2 rounded-lg bg-white/6 h-12 grid place-items-center text-orange-300"><iconify-icon icon="lucide:citrus"></iconify-icon></div>
                  <div class="pop p3 rounded-lg bg-white/6 h-12 grid place-items-center text-lime-300"><iconify-icon icon="lucide:leaf"></iconify-icon></div>
                  <div class="pop p4 rounded-lg bg-white/6 h-12 grid place-items-center text-red-300"><iconify-icon icon="lucide:cherry"></iconify-icon></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== SHOWCASE (image placeholders) ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The showcase</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Freshee, from splash screen to storefront</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Across the brand board, app screens and the D2C storefront, the system holds together — living greens, generous produce imagery and a calm layout that lets the food be the hero.</p>
          </div>
          <div class="grid lg:grid-cols-3 gap-5">
            <div class="reveal lg:col-span-2">
              <?php bx_ph_figure( 'freshee_app_image', 'aspect-[16/10] bg-surface-2', 'App UI screens', 'Freshee mobile app UI screens — home, product categories and shopping cart', 1280, 800 ); ?>
              <p class="text-sm text-ink-soft mt-3">App UI · home, category, product &amp; cart screens</p>
            </div>
            <div class="reveal" data-delay="1">
              <?php bx_ph_figure( 'freshee_brandboard_image', 'aspect-[4/5] bg-surface-2', 'Brand board', 'Freshee brand board — logo, organic green palette and typography', 720, 900 ); ?>
              <p class="text-sm text-ink-soft mt-3">Brand board · logo, palette &amp; type</p>
            </div>
          </div>
          <div class="reveal mt-5" data-delay="1">
            <?php bx_ph_figure( 'freshee_storefront_image', 'aspect-[16/7] bg-surface-2', 'D2C storefront', 'Freshee D2C e-commerce storefront shown responsively on desktop and mobile', 1600, 700 ); ?>
            <p class="text-sm text-ink-soft mt-3">D2C storefront · responsive freshee.shop layout that mirrors the app</p>
          </div>
        </div>
      </section>

      <!-- ===================== OUTCOMES ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The outcome</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A brand as fresh as what it sells</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl bg-paper border border-line p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:badge-check"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">A brand customers trust</h3><p class="text-ink-soft text-sm mt-1.5">A cohesive organic identity that makes the 100%-organic, sustainable promise feel real at a glance.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:zap"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Fast to shop</h3><p class="text-ink-soft text-sm mt-1.5">Browsing, cart and checkout flows designed so ordering fresh groceries feels quick and effortless.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:smartphone"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Consistent app &amp; web</h3><p class="text-ink-soft text-sm mt-1.5">One design system carried cleanly across iOS, Android and freshee.shop — never stitched together.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:repeat"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Built for repeat</h3><p class="text-ink-soft text-sm mt-1.5">An easy reorder path and familiar patterns designed to turn a first order into a weekly habit.</p></div>
          </div>

          <div class="reveal mt-12 rounded-xl2 bg-paper border border-line p-8 sm:p-12 relative overflow-hidden">
            <iconify-icon icon="lucide:quote" class="absolute right-6 top-6 text-6xl text-accent/10"></iconify-icon>
            <p class="font-display text-2xl sm:text-3xl tt leading-snug max-w-3xl relative">&ldquo;We wanted ordering organic to feel as fresh and effortless as the food itself — so the brand, app and storefront finally speak with one voice.&rdquo;</p>
            <p class="text-ink-soft text-sm mt-5">— BoostronixX · Brand &amp; Product Design team</p>
          </div>
        </div>
      </section>

      <!-- ===================== NEXT / CTA ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-[0.08]"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
              <div class="relative max-w-2xl py-16">
                <p class="text-xs font-medium tracking-[.2em] uppercase text-accent mb-4">D2C · Quick commerce · E-commerce</p>
                <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Building a D2C brand or grocery app?</h2>
                <p class="text-paper/70 mt-5 text-lg max-w-xl">Let's shape the brand, the app and the storefront together — one system, built to convert and easy to grow.</p>
                <div class="flex flex-wrap items-center gap-3 mt-9">
                  <a href="/contact/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Start your project</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                  <a href="/portfolio/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">All projects</span></a>
                </div>
              </div>
              <?php bx_cta_image( 'freshee_cta_image', '', false, 'Fresh organic produce delivered — Freshee case study by BoostronixX', 420, 525 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
