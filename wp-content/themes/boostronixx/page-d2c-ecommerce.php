<?php
/**
 * Template Name: D2C E-commerce
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main">
      <article>
      <!-- ===================== HERO — the live storefront ===================== -->
      <section class="relative pt-28 sm:pt-36 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <a href="/industries/" class="hover:text-accent">Industries</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">D2C eCommerce</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:shopping-bag" class="text-accent text-sm" aria-hidden="true"></iconify-icon> Industry · D2C &amp; eCommerce</div>
              <h1 class="reveal font-display text-[2.6rem] leading-[1.0] sm:text-6xl tt">Turn scrolls into <span class="text-accent">sales</span>, profitably</h1>
              <p class="reveal text-ink-soft mt-6 max-w-lg leading-relaxed" data-delay="1">As an ecommerce marketing agency in Jaipur, we help D2C and online brands turn the scroll into a cart, the cart into checkout, and the first order into a loyal customer — with standout branding, ROAS-driven ads and retention that compounds.</p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Scale my store</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="#journey" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:shopping-cart" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10">See the buyer journey</span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-5 gap-y-2 mt-7 text-xs text-ink-soft" data-delay="3">
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:trending-up" class="text-accent" aria-hidden="true"></iconify-icon> Profit-first growth</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:target" class="text-accent" aria-hidden="true"></iconify-icon> ROAS over spend</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:repeat" class="text-accent" aria-hidden="true"></iconify-icon> Built for repeat</span>
              </div>
            </div>

            <!-- hero visual: live STOREFRONT product card -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="relative">
                <!-- floating cart -->
                <div class="absolute -top-4 -right-3 z-20 grid place-items-center h-12 w-12 rounded-full bg-ink text-paper shadow-lg" aria-hidden="true">
                  <iconify-icon icon="lucide:shopping-cart" class="text-xl"></iconify-icon>
                  <span class="cartpulse absolute -top-1.5 -right-1.5 grid place-items-center h-6 min-w-6 px-1 rounded-full bg-accent text-paper text-xs font-bold">3</span>
                </div>
                <div class="rounded-xl2 border border-line bg-paper shadow-[0_50px_90px_-55px_rgba(10,10,10,.5)] overflow-hidden">
                  <!-- product image area -->
                  <div class="relative h-52 bg-gradient-to-br from-accent/25 via-[#ff8a5c]/15 to-surface-2 grid place-items-center">
                    <iconify-icon icon="lucide:shirt" class="text-7xl text-accent/70" aria-hidden="true"></iconify-icon>
                    <span class="absolute top-3 left-3 rounded-full bg-accent text-paper text-xs font-bold px-3 py-1">−40%</span>
                    <span class="absolute top-3 right-3 rounded-full bg-ink text-paper text-[11px] font-semibold px-3 py-1">Bestseller</span>
                    <div class="absolute bottom-3 left-3 inline-flex items-center gap-1.5 rounded-full bg-paper/90 backdrop-blur px-2.5 py-1 text-[11px] font-medium"><span class="live inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> 312 sold today</div>
                  </div>
                  <!-- product details -->
                  <div class="p-6">
                    <div class="flex items-start justify-between gap-3">
                      <div>
                        <p class="font-display text-xl tt">Folkstreet Oversized Tee</p>
                        <p class="text-xs text-ink-soft mt-1 inline-flex items-center gap-1"><span class="text-accent">★★★★★</span> 4.8 · 124 reviews</p>
                      </div>
                      <div class="text-right shrink-0"><p class="font-display text-2xl tt text-accent">₹899</p><p class="text-xs text-ink-soft line-through">₹1,499</p></div>
                    </div>
                    <button class="addcart w-full mt-5 rounded-full bg-ink text-paper py-3 font-medium inline-flex items-center justify-center gap-2"><iconify-icon icon="lucide:shopping-cart" aria-hidden="true"></iconify-icon> Add to cart</button>
                    <!-- live store stats -->
                    <div class="grid grid-cols-3 gap-2 mt-5 text-center">
                      <div class="rounded-xl bg-surface p-2.5"><p class="font-display text-lg tt"><span class="count" data-to="4">0</span>.8x</p><p class="text-[10px] text-ink-soft">ROAS</p></div>
                      <div class="rounded-xl bg-surface p-2.5"><p class="font-display text-lg tt">₹<span class="count" data-to="1180">0</span></p><p class="text-[10px] text-ink-soft">AOV</p></div>
                      <div class="rounded-xl bg-surface p-2.5"><p class="font-display text-lg tt"><span class="count" data-to="42">0</span>%</p><p class="text-[10px] text-ink-soft">Repeat</p></div>
                    </div>
                  </div>
                </div>
                <p class="text-[11px] text-ink-soft mt-3 text-center">Illustrative storefront — your brand, your numbers.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== BUYER JOURNEY — order-tracking flow ===================== -->
      <section id="journey" class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden" aria-label="The buyer journey">
        <div class="absolute inset-0 grid-lines-d opacity-50" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The buyer journey</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Track every order, from scroll to repeat</h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1">As an ecommerce marketing agency in Jaipur, we engineer the whole journey like an order you can track — and we don't stop at the first sale. The real profit is in the second, third and tenth order.</p>
          </div>

          <!-- order tracker -->
          <div class="reveal overflow-x-auto pb-2 -mx-4 px-4 sm:mx-0 sm:px-0" data-delay="1">
            <div class="min-w-[720px]">
              <!-- progress rail -->
              <div class="relative h-1.5 rounded-full bg-white/12 mx-6">
                <div class="track-fill absolute left-0 top-0 h-full rounded-full bg-accent" style="--w:100%"></div>
              </div>
              <div class="grid grid-cols-5 gap-3 -mt-4">
                <div class="tnode t1 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:eye" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Discover</p><p class="text-[11px] text-paper/50 mt-1">Scroll-stopping creative</p>
                </div>
                <div class="tnode t2 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:shopping-cart" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Add to cart</p><p class="text-[11px] text-paper/50 mt-1">Rich PDPs &amp; offers</p>
                </div>
                <div class="tnode t3 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:credit-card" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Checkout</p><p class="text-[11px] text-paper/50 mt-1">CRO that recovers carts</p>
                </div>
                <div class="tnode t4 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:truck" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Delivered</p><p class="text-[11px] text-paper/50 mt-1">A wow unboxing moment</p>
                </div>
                <div class="tnode t5 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:repeat" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Repeat</p><p class="text-[11px] text-paper/50 mt-1">Email, WhatsApp &amp; loyalty</p>
                </div>
              </div>
            </div>
          </div>
          <p class="reveal text-xs text-paper/40 mt-6" data-delay="2">Lower CAC at the top, higher AOV in the middle, more repeat at the end — that's how ROAS holds as you scale.</p>
        </div>
      </section>

      <!-- ===================== CATEGORIES — storefront aisle ===================== -->
      <section class="py-20 sm:py-28" aria-label="Brands we help">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Shop by category</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">An ecommerce marketing agency in Jaipur built for every kind of online brand</h2>
          </div>
          <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div class="cat reveal rounded-xl2 border border-line bg-paper p-6"><span class="cat-ic grid place-items-center h-14 w-14 rounded-2xl bg-surface text-accent text-3xl" aria-hidden="true"><iconify-icon icon="lucide:shirt"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Fashion &amp; apparel</h3><p class="text-ink-soft text-sm mt-1.5">Thumb-stopping creative &amp; a brand people want to wear.</p></div>
            <div class="cat reveal rounded-xl2 border border-line bg-paper p-6" data-delay="1"><span class="cat-ic grid place-items-center h-14 w-14 rounded-2xl bg-surface text-accent text-3xl" aria-hidden="true"><iconify-icon icon="lucide:droplets"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Beauty &amp; skincare</h3><p class="text-ink-soft text-sm mt-1.5">UGC, reviews &amp; education that build trust fast.</p></div>
            <div class="cat reveal rounded-xl2 border border-line bg-paper p-6" data-delay="2"><span class="cat-ic grid place-items-center h-14 w-14 rounded-2xl bg-surface text-accent text-3xl" aria-hidden="true"><iconify-icon icon="lucide:utensils"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Food &amp; beverage</h3><p class="text-ink-soft text-sm mt-1.5">Subscriptions, bundles &amp; loyalty that stick.</p></div>
            <div class="cat reveal rounded-xl2 border border-line bg-paper p-6"><span class="cat-ic grid place-items-center h-14 w-14 rounded-2xl bg-surface text-accent text-3xl" aria-hidden="true"><iconify-icon icon="lucide:leaf"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Health &amp; nutrition</h3><p class="text-ink-soft text-sm mt-1.5">High-LTV brands with a strong repeat engine.</p></div>
            <div class="cat reveal rounded-xl2 border border-line bg-paper p-6" data-delay="1"><span class="cat-ic grid place-items-center h-14 w-14 rounded-2xl bg-surface text-accent text-3xl" aria-hidden="true"><iconify-icon icon="lucide:armchair"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Home &amp; lifestyle</h3><p class="text-ink-soft text-sm mt-1.5">Bigger baskets via bundles &amp; rich PDPs.</p></div>
            <div class="cat reveal rounded-xl2 border border-line bg-paper p-6" data-delay="2"><span class="cat-ic grid place-items-center h-14 w-14 rounded-2xl bg-surface text-accent text-3xl" aria-hidden="true"><iconify-icon icon="lucide:headphones"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Electronics &amp; gadgets</h3><p class="text-ink-soft text-sm mt-1.5">Specs, reviews &amp; retargeting that close.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== GROWTH CART — services as a cart ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="What's in your growth cart">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-start">
          <div class="lg:col-span-4 lg:sticky lg:top-28">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Your growth cart</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Everything your store needs, in one cart</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">As a D2C marketing agency in Jaipur, we let you add the capabilities that scale you profitably — tap any line for the service behind it. Checkout = a growth team that pays for itself.</p>
            <div class="reveal mt-6 inline-flex items-center gap-2 rounded-full bg-paper border border-line px-4 py-2 text-sm" data-delay="2"><iconify-icon icon="lucide:badge-indian-rupee" class="text-accent" aria-hidden="true"></iconify-icon> Priced on profit, not vanity</div>
          </div>
          <!-- the cart -->
          <div class="lg:col-span-8 reveal" data-delay="1">
            <div class="rounded-xl2 bg-paper border border-line overflow-hidden">
              <div class="flex items-center justify-between px-6 py-4 border-b border-line">
                <div class="flex items-center gap-2"><iconify-icon icon="lucide:shopping-cart" class="text-accent text-xl" aria-hidden="true"></iconify-icon><p class="font-display tt">Growth cart</p></div>
                <span class="text-xs text-ink-soft">6 items</span>
              </div>
              <div class="divide-y divide-line">
                <a href="/brand-consulting/" class="citem flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:palette"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Brand that stands out</span><span class="text-xs text-ink-soft">Identity, packaging &amp; story that earns the click.</span></span><span class="inline-flex items-center gap-1 text-xs text-accent font-medium shrink-0"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon> Added</span><iconify-icon icon="lucide:arrow-up-right" class="citem-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/seo-services/" class="citem flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:search"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">SEO &amp; Google Shopping</span><span class="text-xs text-ink-soft">An ecommerce SEO company in Jaipur capturing "best [product]" &amp; category demand.</span></span><span class="inline-flex items-center gap-1 text-xs text-accent font-medium shrink-0"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon> Added</span><iconify-icon icon="lucide:arrow-up-right" class="citem-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/performance-marketing/" class="citem flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:target"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">ROAS-driven ads</span><span class="text-xs text-ink-soft">Meta, Google &amp; marketplaces, tuned for profit.</span></span><span class="inline-flex items-center gap-1 text-xs text-accent font-medium shrink-0"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon> Added</span><iconify-icon icon="lucide:arrow-up-right" class="citem-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/website-design/" class="citem flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:monitor-smartphone"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">A store that converts</span><span class="text-xs text-ink-soft">Fast Shopify, rich PDPs &amp; checkout CRO.</span></span><span class="inline-flex items-center gap-1 text-xs text-accent font-medium shrink-0"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon> Added</span><iconify-icon icon="lucide:arrow-up-right" class="citem-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/social-media-marketing/" class="citem flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:clapperboard"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Content &amp; UGC that sells</span><span class="text-xs text-ink-soft">Reels &amp; creators that feed your ads.</span></span><span class="inline-flex items-center gap-1 text-xs text-accent font-medium shrink-0"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon> Added</span><iconify-icon icon="lucide:arrow-up-right" class="citem-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/digital-marketing/" class="citem flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:mail"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Retention &amp; LTV</span><span class="text-xs text-ink-soft">Email, WhatsApp &amp; loyalty that grow repeat.</span></span><span class="inline-flex items-center gap-1 text-xs text-accent font-medium shrink-0"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon> Added</span><iconify-icon icon="lucide:arrow-up-right" class="citem-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
              </div>
              <div class="flex items-center justify-between gap-4 px-6 py-5 bg-ink text-paper">
                <div><p class="text-[11px] text-paper/50 uppercase tracking-wide">Subtotal</p><p class="font-display text-lg tt">Profitable, compounding growth</p></div>
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-6 py-3 font-medium shrink-0"><span class="sheen-text-light">Checkout</span><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PROOF — reviews wall ===================== -->
      <section class="py-20 sm:py-28" aria-label="Results and reviews">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-12">
            <div>
              <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">★ 4.8 average</p>
              <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Reviews don't lie</h2>
            </div>
            <p class="reveal text-ink-soft max-w-sm text-sm" data-delay="1">Online store marketing in Jaipur done right: scroll-stopping creative and retention flows that lifted revenue <strong class="text-ink">+156%</strong> while holding ROAS — growth that actually compounds.</p>
          </div>
          <!-- reviews -->
          <div class="grid sm:grid-cols-3 gap-5 mb-6">
            <div class="rev r1 rounded-xl2 border border-line bg-paper p-6"><div class="flex items-center justify-between"><span class="text-accent">★★★★★</span><iconify-icon icon="lucide:badge-check" class="text-accent" aria-hidden="true"></iconify-icon></div><p class="mt-3 leading-snug">"ROAS held at 4.8x while we doubled spend. Repeat orders finally took off."</p><div class="mt-4 flex items-center gap-2.5"><span class="grid place-items-center h-9 w-9 rounded-full bg-surface text-accent font-display" aria-hidden="true">R</span><span class="text-xs"><span class="block font-medium">Riya Malhotra</span><span class="block text-ink-soft">Founder · apparel · Verified</span></span></div></div>
            <div class="rev r2 rounded-xl2 border border-line bg-paper p-6"><div class="flex items-center justify-between"><span class="text-accent">★★★★★</span><iconify-icon icon="lucide:badge-check" class="text-accent" aria-hidden="true"></iconify-icon></div><p class="mt-3 leading-snug">"Our AOV jumped 28% with their bundles and PDP work. Checkout finally converts."</p><div class="mt-4 flex items-center gap-2.5"><span class="grid place-items-center h-9 w-9 rounded-full bg-surface text-accent font-display" aria-hidden="true">A</span><span class="text-xs"><span class="block font-medium">Arjun Sethi</span><span class="block text-ink-soft">Founder · skincare · Verified</span></span></div></div>
            <div class="rev r3 rounded-xl2 border border-line bg-paper p-6"><div class="flex items-center justify-between"><span class="text-accent">★★★★★</span><iconify-icon icon="lucide:badge-check" class="text-accent" aria-hidden="true"></iconify-icon></div><p class="mt-3 leading-snug">"The UGC engine they built keeps our ads fresh — CAC dropped and stayed down."</p><div class="mt-4 flex items-center gap-2.5"><span class="grid place-items-center h-9 w-9 rounded-full bg-surface text-accent font-display" aria-hidden="true">N</span><span class="text-xs"><span class="block font-medium">Neha Gupta</span><span class="block text-ink-soft">Founder · foods · Verified</span></span></div></div>
          </div>
          <!-- stat band -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px rounded-2xl overflow-hidden border border-line bg-line" data-delay="1">
            <div class="bg-paper p-6"><p class="font-display text-4xl tt text-accent">+<span class="count" data-to="156">0</span>%</p><p class="text-ink-soft text-sm mt-1">revenue</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl tt"><span class="count" data-to="4">0</span>.8x</p><p class="text-ink-soft text-sm mt-1">blended ROAS</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl tt">₹<span class="count" data-to="1180">0</span></p><p class="text-ink-soft text-sm mt-1">avg. order value</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl tt"><span class="count" data-to="42">0</span>%</p><p class="text-ink-soft text-sm mt-1">repeat rate</p></div>
          </div>
          <p class="reveal text-[11px] text-ink-soft mt-5 text-center" data-delay="1">Illustrative — results vary by category, margins and pricing.</p>
        </div>
      </section>

      <!-- ===================== SHOPPERS ASK AI ===================== -->
      <section id="ai-search" class="py-20 sm:py-28 bg-surface border-y border-line" aria-labelledby="aiHeading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <div class="lg:col-span-6">
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> AEO · GEO · AI Shopping</p>
            <h2 id="aiHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Shoppers ask AI what to buy</h2>
            <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">More shoppers ask ChatGPT, Perplexity or Google's AI Overview for the best brand in a category and budget. We make sure that when they do, <strong class="text-ink">your brand is recommended — named, cited and reviewed.</strong></p>
            <ul class="reveal space-y-2 mt-6 text-sm" data-delay="2">
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> Answer-ready content for "best [product]" queries</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> Product schema &amp; reviews AI tools can cite</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> A reputation that wins the comparison</li>
            </ul>
            <a href="/seo-services/#aeo-geo" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-7 font-medium" data-delay="3"><span class="relative z-10 sheen-text">How AEO &amp; GEO works</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
          </div>
          <!-- AI shopping assistant -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <div class="rounded-xl2 bg-[#141414] border border-white/10 p-5 sm:p-6">
              <div class="flex items-center gap-2 pb-4 border-b border-white/10">
                <span class="grid place-items-center h-8 w-8 rounded-full bg-accent text-paper" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <p class="text-sm font-medium text-paper">AI Shopping Assistant</p>
                <span class="ml-auto inline-flex items-center gap-1.5 rounded-full bg-white/8 px-2.5 py-1 text-[10px] text-paper/60"><span class="h-1.5 w-1.5 rounded-full bg-accent" aria-hidden="true"></span> live</span>
              </div>
              <div class="mt-4 flex justify-end"><p class="max-w-[82%] rounded-2xl rounded-br-md bg-white/10 text-paper text-sm px-4 py-3">Best Indian activewear brand under ₹2,000?</p></div>
              <div class="mt-4 flex gap-2.5">
                <span class="grid place-items-center h-7 w-7 rounded-full bg-accent text-paper text-xs shrink-0" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <div class="flex-1">
                  <p class="text-sm text-paper/85 leading-relaxed">I'd go with <strong class="text-accent">Folkstreet</strong> — great reviews, free returns and pieces under ₹2,000<span class="caret" aria-hidden="true"></span></p>
                  <!-- recommended product card -->
                  <div class="mt-3 rounded-xl bg-white/5 border border-white/10 p-3 flex items-center gap-3">
                    <span class="grid place-items-center h-12 w-12 rounded-lg bg-gradient-to-br from-accent/40 to-white/5 text-accent shrink-0" aria-hidden="true"><iconify-icon icon="lucide:shirt" class="text-xl"></iconify-icon></span>
                    <div class="flex-1 min-w-0"><p class="text-sm font-medium text-paper truncate">Folkstreet Oversized Tee</p><p class="text-[11px] text-paper/60"><span class="text-accent">★ 4.8</span> · ₹899 · Free returns</p></div>
                    <a href="/contact-us/" class="rounded-full bg-accent text-paper text-[11px] font-semibold px-3 py-1.5 shrink-0">Shop</a>
                  </div>
                  <a href="/contact-us/" class="mt-3 inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent text-xs font-medium px-2.5 py-1 hover:bg-accent hover:text-paper transition"><iconify-icon icon="lucide:link" class="text-[11px]" aria-hidden="true"></iconify-icon> your-store.com <span class="opacity-70">[1]</span></a>
                </div>
              </div>
              <div class="mt-5 flex items-center justify-center gap-1.5 rounded-full bg-accent text-paper text-xs font-semibold py-2"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Your brand, recommended by AI</div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ (shared design) ===================== -->
      <section class="py-20 sm:py-28" aria-label="Frequently asked questions">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">D2C &amp; eCommerce FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Your questions, answered</h2></div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="true">How do you market a D2C / eCommerce brand?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">As an ecommerce marketing agency in Jaipur, we grow a D2C brand across five moves: brand it to stand out (identity, packaging, story), win search and shopping (SEO, Google Shopping, AEO and GEO), scale ads profitably (Meta Ads, Google and marketplace campaigns tuned for ROAS and new-customer profit), make the store convert (fast Shopify, rich PDPs and checkout CRO), and retain (email, WhatsApp and loyalty) so first orders become repeat customers.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">How do you improve ROAS and lower CAC?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">We attack it from both sides: better creative and tighter targeting to lower acquisition cost, and conversion-rate, AOV and retention work to raise the value of every customer. Strong UGC, offer structure, checkout CRO and email/WhatsApp flows mean each rupee of ad spend earns more — which is how ROAS holds as you scale.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Do you work with Shopify and other platforms?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes. As a Shopify marketing agency in Jaipur, we build and optimise high-converting Shopify stores, and also work with WooCommerce and custom storefronts. Our website and UI/UX teams handle rich product pages, fast load times, shopping feed setup and checkout CRO so the traffic your campaigns drive actually converts.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Do you handle marketplaces like Amazon &amp; Flipkart?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes. Marketplace marketing in Jaipur is part of the mix — we help with listings, A+ content, ads and ratings on Amazon and Flipkart, while building your own website and audience so you're not fully dependent on marketplaces. The right balance depends on your margins and category.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">How long until we see profitable growth?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Paid campaigns can drive orders within days, with ROAS improving over the first 30–60 days as creative and targeting are optimised. Retention and SEO compound over 3–6 months, lowering your blended acquisition cost and lifting lifetime value.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Do you create the ad creative and UGC?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes — creative is where D2C is won. We produce scroll-stopping static and video ads, source and direct UGC creators, and continuously test hooks and angles so your best-performing creative keeps your performance ads efficient.</div></div></div>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA (shared design) ===================== -->
      <section class="pb-20 sm:pb-28 pt-4" aria-label="Related and contact">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Explore more</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/performance-marketing/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:target"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Performance Marketing</span><span class="text-xs text-ink-soft">ROAS-driven ads</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
            <a href="/social-media-marketing/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:thumbs-up"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Social &amp; UGC</span><span class="text-xs text-ink-soft">Creative that sells</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
            <a href="/industries/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:layers"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">All Industries</span><span class="text-xs text-ink-soft">Other sectors</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-60" aria-hidden="true"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Let's scale your store profitably</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us about your brand — we'll map a plan to grow orders, ROAS and repeat customers. Free, no obligation.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Scale my store</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="tel:+918058212202" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10">+91 80582 12202</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      </article>
    </main>

<?php
get_footer();
