<?php
/**
 * Template Name: Industries
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main">
      <!-- HERO -->
      <section class="relative pt-28 sm:pt-36 pb-12 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:-30px;left:-50px" aria-hidden="true"></span>
        <span class="orb orb-b" style="width:260px;height:260px;background:#ffc59e;bottom:-50px;right:8%" aria-hidden="true"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Industries</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><span class="h-2 w-2 rounded-full bg-accent" aria-hidden="true"></span> Industries we empower · 15+ sectors</div>
              <h1 class="reveal font-display text-[2.5rem] leading-[0.98] sm:text-7xl lg:text-[4.6rem] tt">
                Growth, tailored to<br class="hidden sm:block" />
                <span id="rotind" class="text-accent">real estate</span><span class="caret" aria-hidden="true"></span>
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">Same in-house team, a different playbook for every sector — that's what industry-specific digital marketing in Jaipur looks like with us. We learn how <em>your</em> customers buy, then build the brand and campaigns that win them.</p>
              <a href="#sectors" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-6 font-medium" data-delay="2"><span class="relative z-10 sheen-text">See your sector</span><iconify-icon icon="lucide:arrow-down" class="relative z-10" aria-hidden="true"></iconify-icon></a>
            </div>
          </div>

          <!-- stat band -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px mt-12 rounded-2xl overflow-hidden border border-line bg-line" data-delay="2">
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="15">0</span>+</p><p class="text-ink-soft text-sm mt-1">Industries served</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="50">0</span>+</p><p class="text-ink-soft text-sm mt-1">Brands grown</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="100">0</span>+</p><p class="text-ink-soft text-sm mt-1">Projects shipped</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="4">0</span></p><p class="text-ink-soft text-sm mt-1">Core sectors</p></div>
          </div>
        </div>
      </section>

      <!-- SECTOR BENTO -->
      <section id="sectors" class="py-16 sm:py-24" aria-label="Industries">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Pick your sector</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Four sectors we know inside out</h2>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
            <!-- ============ REAL ESTATE (wide) — skyline + leads ============ -->
            <a href="/real-estate/" class="icard reveal group md:col-span-2 lg:col-span-3 rounded-xl2 border border-line bg-paper p-5 sm:p-6 grid sm:grid-cols-2 gap-6 items-center" aria-label="Real estate marketing">
              <!-- visual: skyline + leads stat -->
              <div class="relative rounded-2xl bg-ink text-paper p-5 overflow-hidden min-h-[210px] flex flex-col">
                <div class="absolute inset-0 grid-lines opacity-[0.08]" aria-hidden="true"></div>
                <div class="relative flex items-center justify-between">
                  <span class="text-[11px] tracking-[.18em] uppercase text-paper/50">Site visits · 90d</span>
                  <span class="inline-flex items-center gap-1 text-sm font-semibold text-accent">+<span class="count" data-to="128">0</span>% <iconify-icon icon="lucide:trending-up" aria-hidden="true"></iconify-icon></span>
                </div>
                <!-- skyline -->
                <div class="relative mt-auto flex items-end justify-center gap-2 h-28" aria-hidden="true">
                  <div class="bar2 w-7 bg-white/15" style="--h:42%"></div>
                  <div class="bar2 w-8 bg-white/20" style="--h:64%"></div>
                  <div class="bar2 w-9 relative bg-gradient-to-t from-accent/80 to-accent/30" style="--h:92%">
                    <span class="absolute -top-9 left-1/2 -translate-x-1/2 grid place-items-center h-7 w-7 rounded-full bg-accent text-paper text-sm shadow-lg"><iconify-icon icon="lucide:map-pin" aria-hidden="true"></iconify-icon></span>
                  </div>
                  <div class="bar2 w-8 bg-white/20" style="--h:72%"></div>
                  <div class="bar2 w-7 bg-white/15" style="--h:50%"></div>
                </div>
              </div>
              <!-- content -->
              <div>
                <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium"><iconify-icon icon="lucide:building-2" class="text-accent" aria-hidden="true"></iconify-icon> Real Estate</span>
                <h3 class="font-display text-2xl sm:text-3xl tt mt-3">Fill projects faster with qualified leads</h3>
                <p class="text-ink-soft text-sm mt-2 max-w-md">Digital marketing for real estate in Jaipur that brings serious buyers, not tyre-kickers — site-visit campaigns, RERA-ready brand trust and follow-up that closes.</p>
                <div class="flex flex-wrap gap-2 mt-4 text-xs">
                  <span class="rounded-full border border-line px-2.5 py-1">Lead Gen</span>
                  <span class="rounded-full border border-line px-2.5 py-1">Project Branding</span>
                  <span class="rounded-full border border-line px-2.5 py-1">Performance Ads</span>
                </div>
                <span class="mt-5 inline-flex items-center gap-2 text-sm font-medium">Explore real estate <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></span></span>
              </div>
            </a>

            <!-- ============ SCHOOLS — admissions ring ============ -->
            <a href="/schools/" class="icard reveal group rounded-xl2 border border-line bg-paper p-5 flex flex-col" aria-label="School and admissions marketing">
              <div class="rounded-2xl bg-surface border border-line p-5 min-h-[200px] flex flex-col">
                <div class="flex items-center gap-3">
                  <svg viewBox="0 0 80 80" class="h-16 w-16 -rotate-90 shrink-0" aria-hidden="true">
                    <circle cx="40" cy="40" r="32" fill="none" stroke="#e6e1da" stroke-width="8" />
                    <circle class="ring2" cx="40" cy="40" r="32" fill="none" stroke="#fa5539" stroke-width="8" stroke-linecap="round" stroke-dasharray="201" style="--c:201;--o:36" />
                  </svg>
                  <div><p class="font-display text-2xl tt">82%</p><p class="text-xs text-ink-soft">seats filled</p></div>
                  <span class="ml-auto text-right"><span class="block font-display text-xl tt text-accent">+<span class="count" data-to="96">0</span>%</span><span class="block text-[11px] text-ink-soft">enquiries</span></span>
                </div>
                <div class="mt-4 space-y-2">
                  <div class="pop2 s1 flex items-center gap-2 rounded-lg bg-paper border border-line px-3 py-2 text-xs"><iconify-icon icon="lucide:check-circle" class="text-accent" aria-hidden="true"></iconify-icon> Enquiry received</div>
                  <div class="pop2 s2 flex items-center gap-2 rounded-lg bg-paper border border-line px-3 py-2 text-xs"><iconify-icon icon="lucide:check-circle" class="text-accent" aria-hidden="true"></iconify-icon> School visit booked</div>
                  <div class="pop2 s3 flex items-center gap-2 rounded-lg bg-paper border border-line px-3 py-2 text-xs text-ink-soft"><iconify-icon icon="lucide:play-circle" class="text-accent" aria-hidden="true"></iconify-icon> Application · in progress</div>
                </div>
              </div>
              <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium mt-5 w-fit"><iconify-icon icon="lucide:graduation-cap" class="text-accent" aria-hidden="true"></iconify-icon> Schools</span>
              <h3 class="font-display text-2xl tt mt-3">Fill your admission seats</h3>
              <p class="text-ink-soft text-sm mt-2">School marketing in Jaipur done right — trust-led branding, local SEO and admission-season campaigns that turn parent searches into enquiries and seats.</p>
              <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium">Explore <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span></span>
            </a>

            <!-- ============ D2C — product card + cart ============ -->
            <a href="/d2c-ecommerce/" class="icard reveal group rounded-xl2 border border-line bg-paper p-5 flex flex-col" data-delay="1" aria-label="D2C eCommerce marketing">
              <div class="rounded-2xl bg-surface border border-line p-5 min-h-[200px] flex flex-col">
                <div class="rounded-xl bg-paper border border-line p-3">
                  <div class="pop2 s1 rounded-lg h-20 bg-gradient-to-br from-accent/30 via-[#ff8a5c]/20 to-surface-2 grid place-items-center" aria-hidden="true"><iconify-icon icon="lucide:package" class="text-3xl text-accent/70"></iconify-icon></div>
                  <div class="flex items-center justify-between mt-2.5">
                    <div><p class="text-sm font-medium">Bestseller</p><p class="text-accent font-display tt">₹<span class="count" data-to="899">0</span></p></div>
                    <span class="pop2 s2 text-accent text-xs" aria-label="5 star rating">★★★★★</span>
                  </div>
                </div>
                <div class="mt-3 flex items-center gap-2">
                  <span class="flex-1 rounded-full bg-ink text-paper text-center text-xs font-medium py-2.5">Add to cart</span>
                  <span class="relative grid place-items-center h-9 w-9 rounded-full bg-paper border border-line text-ink"><iconify-icon icon="lucide:shopping-cart" aria-hidden="true"></iconify-icon><span class="cartpulse absolute -top-1 -right-1 grid place-items-center h-5 w-5 rounded-full bg-accent text-paper text-[10px] font-bold"><span class="count" data-to="3">0</span></span></span>
                </div>
              </div>
              <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium mt-5 w-fit"><iconify-icon icon="lucide:shopping-bag" class="text-accent" aria-hidden="true"></iconify-icon> D2C eCommerce</span>
              <h3 class="font-display text-2xl tt mt-3">Scale orders, profitably</h3>
              <p class="text-ink-soft text-sm mt-2">eCommerce marketing in Jaipur built to scale — scroll-stopping creative, profitable paid social and a brand customers come back to.</p>
              <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium">Explore <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span></span>
            </a>

            <!-- ============ HOSPITALS — heartbeat + appointments ============ -->
            <a href="/hospitals/" class="icard reveal group rounded-xl2 border border-line bg-paper p-5 flex flex-col" data-delay="2" aria-label="Hospital and healthcare marketing">
              <div class="relative rounded-2xl bg-ink text-paper p-5 overflow-hidden min-h-[200px] flex flex-col">
                <div class="absolute inset-0 grid-lines opacity-[0.08]" aria-hidden="true"></div>
                <div class="relative flex items-center justify-between">
                  <span class="text-[11px] tracking-[.18em] uppercase text-paper/50">Appointments · today</span>
                  <span class="inline-flex items-center gap-1 text-sm font-semibold text-accent">+<span class="count" data-to="142">0</span>%</span>
                </div>
                <svg viewBox="0 0 240 84" class="relative w-full mt-3 flex-1" fill="none" aria-hidden="true">
                  <polyline class="draw2" points="0,46 64,46 78,46 88,18 98,74 108,46 150,46 164,46 174,20 184,72 194,46 240,46" pathLength="1" stroke="#fa5539" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="relative mt-3 flex items-center gap-2 rounded-xl bg-white/5 border border-white/10 px-3 py-2">
                  <span class="grid place-items-center h-7 w-7 rounded-full bg-accent/20 text-accent shrink-0" aria-hidden="true"><iconify-icon icon="lucide:stethoscope" class="text-sm"></iconify-icon></span>
                  <span class="leading-tight"><span class="block text-xs font-medium">Dr. Mehta · Cardiology</span><span class="block text-[11px] text-paper/50">Today · 4 slots left</span></span>
                  <span class="ml-auto text-accent text-xs font-semibold">Book</span>
                </div>
              </div>
              <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium mt-5 w-fit"><iconify-icon icon="lucide:heart-pulse" class="text-accent" aria-hidden="true"></iconify-icon> Hospitals</span>
              <h3 class="font-display text-2xl tt mt-3">Fill your appointment book</h3>
              <p class="text-ink-soft text-sm mt-2">Healthcare marketing in Jaipur with a conscience — trust-led branding, local SEO and ethical campaigns that turn "near me" searches into booked appointments.</p>
              <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium">Explore <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span></span>
            </a>
          </div>
          <p class="reveal text-sm text-ink-soft mt-6" data-delay="1">Don't see your industry? Our industry-specific digital marketing in Jaipur spans 15+ sectors — <a href="/contact-us/" class="underline underline-offset-2 decoration-accent text-ink hover:text-accent">tell us about yours</a>.</p>
        </div>
      </section>

      <!-- HOW WE TAILOR -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="How we tailor it">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Same craft, sector-specific strategy</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">How industry-specific digital marketing in Jaipur works</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Our seven services stay the same — what changes is the strategy behind them. As a sector-specific marketing agency in Jaipur, we adapt the message, channels and metrics to how your industry actually buys.</p>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="reveal rounded-xl2 bg-paper border border-line p-7"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:users-round"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Audience-first research</h3><p class="text-ink-soft text-sm mt-2">We map your sector's buyer journey — what they search, trust and act on.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="1"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:message-square-quote"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Sector-fluent messaging</h3><p class="text-ink-soft text-sm mt-2">Copy and creative that speak your industry's language and earn trust fast.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="2"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:route"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Right channels, right order</h3><p class="text-ink-soft text-sm mt-2">A real estate funnel differs from D2C — we pick the channels that actually convert for you.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:target"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Metrics that matter to you</h3><p class="text-ink-soft text-sm mt-2">Site visits, enrolments, ROAS or repeat rate — we report on your sector's real KPIs.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="1"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:shield-check"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Compliance & trust</h3><p class="text-ink-soft text-sm mt-2">RERA, medical ethics, education claims, product compliance — we keep your brand safe and credible.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="2"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:repeat"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Learn &amp; compound</h3><p class="text-ink-soft text-sm mt-2">Every campaign teaches us more about your niche — so results keep improving.</p></div>
          </div>
        </div>
      </section>

      <!-- PROOF (E-E-A-T) -->
      <section class="py-20 sm:py-28" aria-label="Proof of industry work">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-10">
            <div>
              <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Proof, by sector</p>
              <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">We've done it in your space</h2>
            </div>
            <a href="/portfolio/" class="reveal group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium" data-delay="1"><span class="relative z-10 sheen-text-dark">View all work</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="/portfolio/" class="reveal group rounded-2xl border border-line p-6 hover:border-accent transition"><span class="text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:building-2"></iconify-icon></span><p class="text-xs text-ink-soft mt-3">Real Estate</p><h3 class="font-display text-lg tt group-hover:text-accent transition">Ashiana — +128% leads</h3><span class="inline-flex items-center gap-1 text-sm font-medium mt-3">See the work <iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></span></a>
            <a href="/edoovi-erp/" class="reveal group rounded-2xl border border-line p-6 hover:border-accent transition" data-delay="1"><span class="text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:graduation-cap"></iconify-icon></span><p class="text-xs text-ink-soft mt-3">Schools</p><h3 class="font-display text-lg tt group-hover:text-accent transition">Edoovi — Smart school ERP</h3><span class="inline-flex items-center gap-1 text-sm font-medium mt-3">Read case study <iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></span></a>
            <a href="/portfolio/" class="reveal group rounded-2xl border border-line p-6 hover:border-accent transition" data-delay="2"><span class="text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:shopping-bag"></iconify-icon></span><p class="text-xs text-ink-soft mt-3">D2C eCommerce</p><h3 class="font-display text-lg tt group-hover:text-accent transition">Veeba — Social content</h3><span class="inline-flex items-center gap-1 text-sm font-medium mt-3">See the work <iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></span></a>
            <a href="/portfolio/" class="reveal group rounded-2xl border border-line p-6 hover:border-accent transition" data-delay="3"><span class="text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:heart-pulse"></iconify-icon></span><p class="text-xs text-ink-soft mt-3">Hospitals</p><h3 class="font-display text-lg tt group-hover:text-accent transition">CityCare — +142% enquiries</h3><span class="inline-flex items-center gap-1 text-sm font-medium mt-3">See the work <iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></span></a>
          </div>

          <!-- testimonial -->
          <figure class="reveal mt-10 rounded-xl2 bg-ink text-paper p-8 sm:p-12 relative overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
            <iconify-icon icon="lucide:quote" class="absolute right-6 top-6 text-6xl text-accent/15" aria-hidden="true"></iconify-icon>
            <blockquote class="relative font-display text-2xl sm:text-3xl tt leading-snug max-w-3xl">"They understood our market from day one — the campaigns felt built for our buyers, not copy-pasted from another industry."</blockquote>
            <figcaption class="relative mt-5 flex items-center gap-3">
              <span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display" aria-hidden="true">V</span>
              <span class="text-sm"><span class="block font-medium">Vikram Rathore</span><span class="block text-paper/50 text-xs">Real estate · BoostronixX client</span></span>
              <span class="ml-auto text-accent text-sm" aria-label="5 out of 5 stars">★★★★★</span>
            </figcaption>
          </figure>
        </div>
      </section>

      <!-- SERVICE x INDUSTRY MATRIX -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="Services for your industry">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Everything, applied to your sector</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">The full stack, tuned for you</h2>
          </div>
          <div class="reveal flex flex-wrap gap-3" data-delay="1">
            <a href="/brand-consulting/" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="lucide:palette" class="text-accent" aria-hidden="true"></iconify-icon> Brand Consulting</a>
            <a href="/seo-services/" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="lucide:search" class="text-accent" aria-hidden="true"></iconify-icon> SEO · AEO · GEO</a>
            <a href="/performance-marketing/" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="lucide:target" class="text-accent" aria-hidden="true"></iconify-icon> Performance Marketing</a>
            <a href="/social-media-marketing/" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="lucide:thumbs-up" class="text-accent" aria-hidden="true"></iconify-icon> Social Media</a>
            <a href="/digital-marketing/" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="lucide:line-chart" class="text-accent" aria-hidden="true"></iconify-icon> Digital Marketing</a>
            <a href="/ui-ux-design/" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="lucide:figma" class="text-accent" aria-hidden="true"></iconify-icon> UI/UX Design</a>
            <a href="/website-design/" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="lucide:monitor-smartphone" class="text-accent" aria-hidden="true"></iconify-icon> Website Design</a>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28" aria-label="Frequently asked questions">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Industry questions</h2></div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="true">Do you only work with these four industries?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">No — these are the sectors we go deepest in, but our strategy-first framework adapts to most growth-stage businesses. We've worked across 15+ industries. Tell us about yours on a free call.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Why does industry experience matter for marketing?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Because how a customer buys a flat is nothing like how they buy a skincare product or choose a school. Working with a sector-specific marketing agency in Jaipur means we skip the learning curve — the right channels, message and metrics from day one, not month three.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Can you handle industry-specific compliance?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes. We're mindful of sector rules — RERA disclosures in real estate, ethical medical advertising for hospitals, honest education claims for schools and product compliance in D2C — so your brand stays credible and safe.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Will my competitors get the same playbook?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">No. Sector know-how is shared; your strategy, positioning and creative are built uniquely around your brand and goals. We don't run identical campaigns for competing clients.</div></div></div>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="pb-20 sm:pb-28" aria-label="Get started">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
            <div class="absolute right-6 top-6 sm:right-12 sm:top-12 h-24 w-24 spin hidden sm:block" aria-hidden="true">
              <svg viewBox="0 0 100 100" class="w-full h-full"><defs><path id="c2" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs><text font-size="9.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c2">YOUR SECTOR · YOUR GROWTH ·</textPath></text></svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
            </div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-6xl tt leading-[1.02]">Let's build a strategy for your sector</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us your industry and goal — we'll come back with sector-specific quick wins and a roadmap. Free, no obligation.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Get a sector strategy</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="/services/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10">See all services</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
