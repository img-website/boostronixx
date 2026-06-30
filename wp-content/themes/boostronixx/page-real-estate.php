<?php
/**
 * Template Name: Real Estate
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
      <!-- ===================== HERO — the property listing ===================== -->
      <section class="relative pt-28 sm:pt-36 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <a href="/industries/" class="hover:text-accent">Industries</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Real Estate</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:building-2" class="text-accent text-sm" aria-hidden="true"></iconify-icon> Industry · Real Estate &amp; Property</div>
              <h1 class="reveal font-display text-[2.6rem] leading-[1.0] sm:text-6xl tt">Sell out projects with <span class="text-accent">qualified buyers</span></h1>
              <p class="reveal text-ink-soft mt-6 max-w-lg leading-relaxed" data-delay="1">As a real estate digital marketing agency in Jaipur, we help builders, developers and brokers turn "3 BHK near me" into serious site visits and bookings — with project branding, local SEO and RERA-ready performance campaigns.</p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Get qualified leads</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="#path" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:key-round" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10">Path to possession</span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-5 gap-y-2 mt-7 text-xs text-ink-soft" data-delay="3">
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:shield-check" class="text-accent" aria-hidden="true"></iconify-icon> RERA-ready</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:map-pinned" class="text-accent" aria-hidden="true"></iconify-icon> Hyper-local targeting</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:sparkles" class="text-accent" aria-hidden="true"></iconify-icon> Found on Google &amp; AI</span>
              </div>
            </div>

            <!-- hero visual: a PROPERTY LISTING card -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="rounded-xl2 border border-line bg-paper shadow-[0_50px_90px_-55px_rgba(10,10,10,.5)] overflow-hidden">
                <!-- listing image (CSS skyline) -->
                <div class="relative h-48 bg-gradient-to-b from-[#1b3a52] to-[#0c1b2a] overflow-hidden flex items-end justify-center gap-1.5 px-6 pb-0">
                  <div class="sky-b s1 w-8 bg-white/15 rounded-t" style="height:55%"></div>
                  <div class="sky-b s2 w-10 bg-white/20 rounded-t" style="height:78%"></div>
                  <div class="sky-b s3 w-12 bg-gradient-to-t from-accent/70 to-accent/30 rounded-t" style="height:96%"></div>
                  <div class="sky-b s4 w-10 bg-white/20 rounded-t" style="height:70%"></div>
                  <div class="sky-b s5 w-8 bg-white/15 rounded-t" style="height:50%"></div>
                  <span class="absolute top-3 left-3 inline-flex items-center gap-1 rounded-full bg-paper/95 text-ink text-[11px] font-bold px-2.5 py-1"><iconify-icon icon="lucide:shield-check" class="text-accent" aria-hidden="true"></iconify-icon> RERA ✓</span>
                  <span class="absolute top-3 right-3 rounded-full bg-accent text-paper text-[11px] font-semibold px-3 py-1">Now Launching</span>
                  <span class="absolute bottom-3 left-3 inline-flex items-center gap-1.5 rounded-full bg-paper/90 backdrop-blur px-2.5 py-1 text-[11px] font-medium"><span class="live inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> 12 enquiries today</span>
                </div>
                <!-- listing details -->
                <div class="p-6">
                  <div class="flex items-start justify-between gap-3">
                    <div>
                      <p class="font-display text-xl tt">Skyline Residency</p>
                      <p class="text-xs text-ink-soft mt-1 inline-flex items-center gap-1"><iconify-icon icon="lucide:map-pin" class="text-accent" aria-hidden="true"></iconify-icon> 3 &amp; 4 BHK · Mansarovar, Jaipur</p>
                    </div>
                    <div class="text-right shrink-0"><p class="font-display text-2xl tt text-accent">₹85L<span class="text-sm">*</span></p><p class="text-[11px] text-ink-soft">EMI ₹42k/mo</p></div>
                  </div>
                  <!-- amenities -->
                  <div class="flex flex-wrap gap-2 mt-4 text-xs">
                    <span class="inline-flex items-center gap-1 rounded-full bg-surface px-2.5 py-1"><iconify-icon icon="lucide:waves" class="text-accent" aria-hidden="true"></iconify-icon> Pool</span>
                    <span class="inline-flex items-center gap-1 rounded-full bg-surface px-2.5 py-1"><iconify-icon icon="lucide:dumbbell" class="text-accent" aria-hidden="true"></iconify-icon> Clubhouse</span>
                    <span class="inline-flex items-center gap-1 rounded-full bg-surface px-2.5 py-1"><iconify-icon icon="lucide:trees" class="text-accent" aria-hidden="true"></iconify-icon> Park</span>
                    <span class="inline-flex items-center gap-1 rounded-full bg-surface px-2.5 py-1"><iconify-icon icon="lucide:shield" class="text-accent" aria-hidden="true"></iconify-icon> 24×7</span>
                  </div>
                  <div class="flex items-center gap-2 mt-5">
                    <button class="flex-1 btn-glow rounded-full py-3 font-medium inline-flex items-center justify-center gap-2"><iconify-icon icon="lucide:calendar-check" aria-hidden="true"></iconify-icon> <span class="sheen-text">Book a site visit</span></button>
                    <button class="grid place-items-center h-11 w-11 rounded-full border border-line text-ink-soft" aria-label="Save"><iconify-icon icon="lucide:heart"></iconify-icon></button>
                  </div>
                  <p class="text-[11px] text-ink-soft mt-3">Possession 2026 · *Illustrative listing — your project, your numbers.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PATH TO POSSESSION — the route ===================== -->
      <section id="path" class="py-20 sm:py-28 blueprint text-paper relative overflow-hidden" aria-label="The path to possession">
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The path to possession</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">From a search to the keys in hand</h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1">A home is a months-long journey. Smart property marketing in Jaipur maps the whole route — and keeps your project the destination from the first search to the day they get the keys.</p>
          </div>

          <!-- the map route to the home (pins drop onto the route) -->
          <div class="reveal overflow-x-auto pb-2 -mx-4 px-4 sm:mx-0 sm:px-0" data-delay="1">
            <div class="relative min-w-[600px] pt-2">
              <!-- dashed map road, runs through the pin centers -->
              <div class="absolute left-[10%] right-[10%] top-9 h-[3px] rounded-full" style="background:repeating-linear-gradient(90deg,rgba(250,85,57,.9) 0 9px,transparent 9px 20px)" aria-hidden="true"></div>
              <div class="relative grid grid-cols-5 gap-2 sm:gap-4 text-center">
                <div>
                  <div class="pindrop p1 mx-auto w-fit">
                    <span class="relative z-10 grid place-items-center h-14 w-14 rounded-full bg-[#0c1b2a] border-2 border-white/25 text-accent text-xl"><iconify-icon icon="lucide:search" aria-hidden="true"></iconify-icon></span>
                    <span class="block mx-auto -mt-1.5 h-3 w-3 rotate-45 bg-[#0c1b2a] border-b-2 border-r-2 border-white/25"></span>
                  </div>
                  <p class="font-display tt mt-3">Search</p><p class="text-[11px] text-paper/50 mt-1">"3 BHK in Mansarovar"</p>
                </div>
                <div>
                  <div class="pindrop p2 mx-auto w-fit">
                    <span class="relative z-10 grid place-items-center h-14 w-14 rounded-full bg-[#0c1b2a] border-2 border-white/25 text-accent text-xl"><iconify-icon icon="lucide:message-square-text" aria-hidden="true"></iconify-icon></span>
                    <span class="block mx-auto -mt-1.5 h-3 w-3 rotate-45 bg-[#0c1b2a] border-b-2 border-r-2 border-white/25"></span>
                  </div>
                  <p class="font-display tt mt-3">Enquiry</p><p class="text-[11px] text-paper/50 mt-1">Qualified, not junk</p>
                </div>
                <div>
                  <div class="pindrop p3 mx-auto w-fit">
                    <span class="relative z-10 grid place-items-center h-14 w-14 rounded-full bg-[#0c1b2a] border-2 border-white/25 text-accent text-xl"><iconify-icon icon="lucide:map-pin" aria-hidden="true"></iconify-icon></span>
                    <span class="block mx-auto -mt-1.5 h-3 w-3 rotate-45 bg-[#0c1b2a] border-b-2 border-r-2 border-white/25"></span>
                  </div>
                  <p class="font-display tt mt-3">Site visit</p><p class="text-[11px] text-paper/50 mt-1">One-tap booking</p>
                </div>
                <div>
                  <div class="pindrop p4 mx-auto w-fit">
                    <span class="relative z-10 grid place-items-center h-14 w-14 rounded-full bg-[#0c1b2a] border-2 border-white/25 text-accent text-xl"><iconify-icon icon="lucide:file-signature" aria-hidden="true"></iconify-icon></span>
                    <span class="block mx-auto -mt-1.5 h-3 w-3 rotate-45 bg-[#0c1b2a] border-b-2 border-r-2 border-white/25"></span>
                  </div>
                  <p class="font-display tt mt-3">Booking</p><p class="text-[11px] text-paper/50 mt-1">Nurtured to close</p>
                </div>
                <div>
                  <div class="pindrop p5 mx-auto w-fit">
                    <span class="home-glow relative z-10 grid place-items-center h-14 w-14 rounded-full bg-accent text-paper text-2xl"><iconify-icon icon="lucide:house" aria-hidden="true"></iconify-icon></span>
                    <span class="block mx-auto -mt-1.5 h-3 w-3 rotate-45 bg-accent"></span>
                  </div>
                  <p class="font-display tt mt-3">Possession</p><p class="text-[11px] text-paper/50 mt-1">Keys handed over 🔑</p>
                </div>
              </div>
            </div>
          </div>
          <p class="reveal text-xs text-paper/40 mt-6" data-delay="2">We optimise for site visits and bookings — not raw form-fills — and weed out the noise early.</p>
        </div>
      </section>

      <!-- ===================== PROPERTY TYPES ===================== -->
      <section class="py-20 sm:py-28" aria-label="Who we help">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Who we help</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Every kind of property business</h2>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="ptype reveal rounded-xl2 border border-line bg-paper p-6 overflow-hidden">
              <span class="ptype-roof block h-1.5 w-12 rounded-full bg-accent/30 mb-4" aria-hidden="true"></span>
              <iconify-icon icon="lucide:building" class="text-accent text-3xl" aria-hidden="true"></iconify-icon>
              <h3 class="font-display text-lg tt mt-3">Apartments &amp; builders</h3>
              <p class="text-ink-soft text-sm mt-1.5">Sell out a project faster with qualified site visits.</p>
            </div>
            <div class="ptype reveal rounded-xl2 border border-line bg-paper p-6 overflow-hidden" data-delay="1">
              <span class="ptype-roof block h-1.5 w-12 rounded-full bg-accent/30 mb-4" aria-hidden="true"></span>
              <iconify-icon icon="lucide:home" class="text-accent text-3xl" aria-hidden="true"></iconify-icon>
              <h3 class="font-display text-lg tt mt-3">Villas &amp; floors</h3>
              <p class="text-ink-soft text-sm mt-1.5">Premium homes for end-users and investors.</p>
            </div>
            <div class="ptype reveal rounded-xl2 border border-line bg-paper p-6 overflow-hidden" data-delay="2">
              <span class="ptype-roof block h-1.5 w-12 rounded-full bg-accent/30 mb-4" aria-hidden="true"></span>
              <iconify-icon icon="lucide:map" class="text-accent text-3xl" aria-hidden="true"></iconify-icon>
              <h3 class="font-display text-lg tt mt-3">Plots &amp; townships</h3>
              <p class="text-ink-soft text-sm mt-1.5">Target intent by location and budget.</p>
            </div>
            <div class="ptype reveal rounded-xl2 border border-line bg-paper p-6 overflow-hidden">
              <span class="ptype-roof block h-1.5 w-12 rounded-full bg-accent/30 mb-4" aria-hidden="true"></span>
              <iconify-icon icon="lucide:briefcase" class="text-accent text-3xl" aria-hidden="true"></iconify-icon>
              <h3 class="font-display text-lg tt mt-3">Commercial &amp; office</h3>
              <p class="text-ink-soft text-sm mt-1.5">Reach decision-makers, not browsers.</p>
            </div>
            <div class="ptype reveal rounded-xl2 border border-line bg-paper p-6 overflow-hidden" data-delay="1">
              <span class="ptype-roof block h-1.5 w-12 rounded-full bg-accent/30 mb-4" aria-hidden="true"></span>
              <iconify-icon icon="lucide:gem" class="text-accent text-3xl" aria-hidden="true"></iconify-icon>
              <h3 class="font-display text-lg tt mt-3">Luxury &amp; HNI</h3>
              <p class="text-ink-soft text-sm mt-1.5">Premium branding, discreet targeting.</p>
            </div>
            <div class="ptype reveal rounded-xl2 border border-line bg-paper p-6 overflow-hidden" data-delay="2">
              <span class="ptype-roof block h-1.5 w-12 rounded-full bg-accent/30 mb-4" aria-hidden="true"></span>
              <iconify-icon icon="lucide:rocket" class="text-accent text-3xl" aria-hidden="true"></iconify-icon>
              <h3 class="font-display text-lg tt mt-3">New launches</h3>
              <p class="text-ink-soft text-sm mt-1.5">High-impact launch &amp; a lead-day surge.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== SERVICES — the building floor directory ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="How we sell projects">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">We build it floor by floor</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A real estate digital marketing agency in Jaipur, floor by floor</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Like any great building, growth is constructed from the ground up. Each floor is a service — from project branding in Jaipur to real estate PPC — that stacks into one engine. Tap any floor to see how it powers your project.</p>
          </div>

          <!-- the building -->
          <div class="reveal mx-auto" data-delay="1">
            <!-- roof + crane -->
            <div class="relative">
              <!-- crane -->
              <svg class="crane absolute -top-12 right-2 w-24 h-16 hidden sm:block" viewBox="0 0 120 80" fill="none" aria-hidden="true">
                <line x1="14" y1="78" x2="14" y2="10" stroke="#0a0a0a" stroke-width="3"/>
                <line x1="6" y1="14" x2="100" y2="14" stroke="#0a0a0a" stroke-width="3"/>
                <line x1="14" y1="14" x2="40" y2="34" stroke="#0a0a0a" stroke-width="2"/>
                <line x1="86" y1="14" x2="86" y2="40" stroke="#fa5539" stroke-width="2"/>
                <rect x="80" y="40" width="12" height="9" rx="1.5" fill="#fa5539"/>
              </svg>
              <div class="rounded-t-2xl bg-ink text-paper px-6 py-4 flex items-center justify-between">
                <span class="inline-flex items-center gap-2 text-sm font-display tt"><iconify-icon icon="lucide:flag" class="text-accent" aria-hidden="true"></iconify-icon> Now selling — the growth tower</span>
                <span class="text-[11px] text-paper/50">6 floors</span>
              </div>
            </div>
            <!-- floors: top (06) -> ground (01) -->
            <div class="border-x border-line divide-y divide-line bg-paper">
              <a href="/digital-marketing/" class="floor f6 flex items-center gap-4 px-5 sm:px-6 py-4 bg-paper">
                <span class="shrink-0 font-display text-2xl tt text-accent/30 w-9">06</span>
                <span class="hidden sm:flex gap-1 shrink-0" aria-hidden="true"><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span></span>
                <span class="flex-1 min-w-0"><span class="font-display tt block">Nurture to booking</span><span class="text-xs text-ink-soft">Follow-ups, retargeting &amp; CRM flows that close long cycles.</span></span>
                <iconify-icon icon="lucide:arrow-up-right" class="floor-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon>
              </a>
              <a href="/social-media-marketing/" class="floor f5 flex items-center gap-4 px-5 sm:px-6 py-4 bg-paper">
                <span class="shrink-0 font-display text-2xl tt text-accent/30 w-9">05</span>
                <span class="hidden sm:flex gap-1 shrink-0" aria-hidden="true"><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span></span>
                <span class="flex-1 min-w-0"><span class="font-display tt block">Build reach &amp; proof</span><span class="text-xs text-ink-soft">Walkthroughs, locality content &amp; reviews that build desire.</span></span>
                <iconify-icon icon="lucide:arrow-up-right" class="floor-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon>
              </a>
              <a href="/website-design/" class="floor f4 flex items-center gap-4 px-5 sm:px-6 py-4 bg-paper">
                <span class="shrink-0 font-display text-2xl tt text-accent/30 w-9">04</span>
                <span class="hidden sm:flex gap-1 shrink-0" aria-hidden="true"><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span></span>
                <span class="flex-1 min-w-0"><span class="font-display tt block">Showcase the property</span><span class="text-xs text-ink-soft">Fast microsites with galleries, floor plans &amp; site-visit booking.</span></span>
                <iconify-icon icon="lucide:arrow-up-right" class="floor-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon>
              </a>
              <a href="/performance-marketing/" class="floor f3 flex items-center gap-4 px-5 sm:px-6 py-4 bg-paper">
                <span class="shrink-0 font-display text-2xl tt text-accent/30 w-9">03</span>
                <span class="hidden sm:flex gap-1 shrink-0" aria-hidden="true"><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span></span>
                <span class="flex-1 min-w-0"><span class="font-display tt block">Generate qualified leads</span><span class="text-xs text-ink-soft">Meta &amp; Google campaigns tuned for site visits, not junk.</span></span>
                <iconify-icon icon="lucide:arrow-up-right" class="floor-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon>
              </a>
              <a href="/seo-services/" class="floor f2 flex items-center gap-4 px-5 sm:px-6 py-4 bg-paper">
                <span class="shrink-0 font-display text-2xl tt text-accent/30 w-9">02</span>
                <span class="hidden sm:flex gap-1 shrink-0" aria-hidden="true"><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span></span>
                <span class="flex-1 min-w-0"><span class="font-display tt block">Win local search</span><span class="text-xs text-ink-soft">Local SEO, AEO &amp; GEO for locality, BHK &amp; budget queries.</span></span>
                <iconify-icon icon="lucide:arrow-up-right" class="floor-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon>
              </a>
              <a href="/brand-consulting/" class="floor f1 flex items-center gap-4 px-5 sm:px-6 py-4 bg-paper">
                <span class="shrink-0 font-display text-2xl tt text-accent/30 w-9">01</span>
                <span class="hidden sm:flex gap-1 shrink-0" aria-hidden="true"><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span></span>
                <span class="flex-1 min-w-0"><span class="font-display tt block">Brand the project for trust</span><span class="text-xs text-ink-soft">Identity, RERA credibility &amp; a story that makes buyers feel safe.</span></span>
                <iconify-icon icon="lucide:arrow-up-right" class="floor-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon>
              </a>
            </div>
            <!-- ground / lobby -->
            <div class="rounded-b-2xl bg-ink text-paper px-6 py-3 flex items-center justify-center gap-2 text-xs text-paper/60">
              <iconify-icon icon="lucide:door-open" class="text-accent" aria-hidden="true"></iconify-icon> Ground floor: a strategy-first foundation
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PROOF — the availability board ===================== -->
      <section class="py-20 sm:py-28" aria-label="Results">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Project performance</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Inventory that moves, leads that convert</h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">From premium-feeling campaign visuals to real estate lead generation in Jaipur that climbed <strong class="text-ink">+128%</strong> in qualified leads, we build marketing that brings buyers to the door — and to a booking.</p>
            <figure class="reveal mt-7 rounded-2xl bg-surface border border-line p-6" data-delay="1">
              <blockquote class="font-display tt text-lg leading-snug">"They understood our market from day one — the campaigns felt built for our buyers, not copy-pasted from another industry."</blockquote>
              <figcaption class="mt-4 flex items-center gap-3"><span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display" aria-hidden="true">V</span><span class="text-sm"><span class="block font-medium">Vikram Rathore</span><span class="block text-ink-soft text-xs">Real estate client</span></span><span class="ml-auto text-accent text-sm" aria-label="5 out of 5 stars">★★★★★</span></figcaption>
            </figure>
          </div>
          <!-- availability board -->
          <div class="reveal" data-delay="1">
            <div class="rounded-xl2 border border-line bg-paper p-6 sm:p-8">
              <div class="flex items-center justify-between">
                <p class="font-display tt">Skyline Residency · availability</p>
                <span class="inline-flex items-center gap-1.5 text-xs text-ink-soft"><span class="live inline-block h-2 w-2 rounded-full bg-accent" aria-hidden="true"></span> live</span>
              </div>
              <!-- units grid -->
              <div class="grid grid-cols-10 gap-1.5 mt-5" aria-hidden="true">
                <span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span>
                <span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit sold h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit h-6 rounded-sm border border-line bg-surface-2"></span><span class="unit h-6 rounded-sm border border-line bg-surface-2"></span>
              </div>
              <div class="flex items-center gap-4 mt-3 text-[11px] text-ink-soft">
                <span class="inline-flex items-center gap-1.5"><span class="h-3 w-3 rounded-sm bg-accent"></span> Sold</span>
                <span class="inline-flex items-center gap-1.5"><span class="h-3 w-3 rounded-sm bg-surface-2 border border-line"></span> Available</span>
                <span class="ml-auto font-display text-ink tt text-base"><span class="count" data-to="85">0</span>% sold</span>
              </div>
              <!-- KPIs -->
              <div class="grid grid-cols-2 gap-3 mt-6">
                <div class="rounded-xl bg-surface p-4"><p class="font-display text-3xl tt text-accent">+<span class="count" data-to="128">0</span>%</p><p class="text-xs text-ink-soft mt-1">qualified leads</p></div>
                <div class="rounded-xl bg-surface p-4 text-center">
                  <svg viewBox="0 0 80 80" class="h-16 w-16 mx-auto -rotate-90" aria-hidden="true"><circle cx="40" cy="40" r="32" fill="none" stroke="#e6e1da" stroke-width="8" /><circle class="ring2" cx="40" cy="40" r="32" fill="none" stroke="#fa5539" stroke-width="8" stroke-linecap="round" stroke-dasharray="201" style="--c:201;--o:70" /></svg>
                  <p class="font-display text-lg tt -mt-11">65%</p>
                  <p class="text-[11px] text-ink-soft mt-7">visit show-up</p>
                </div>
                <div class="rounded-xl bg-surface p-4"><p class="font-display text-3xl tt">₹<span class="count" data-to="46">0</span></p><p class="text-xs text-ink-soft mt-1">cost per lead</p></div>
                <div class="rounded-xl bg-ink text-paper p-4"><p class="font-display text-3xl tt text-accent"><span class="count" data-to="38">0</span></p><p class="text-xs text-paper/60 mt-1">bookings / month</p></div>
              </div>
              <p class="text-[11px] text-ink-soft mt-4">Illustrative — results vary by project, location and budget.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== BUYERS ASK AI — property portal result ===================== -->
      <section id="ai-search" class="py-20 sm:py-28 bg-surface border-y border-line" aria-labelledby="aiHeading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <div class="lg:col-span-6">
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> AEO · GEO · AI Overviews</p>
            <h2 id="aiHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Buyers ask AI — be the recommendation</h2>
            <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">Home buyers increasingly start by asking AI or searching a portal. Our real estate SEO in Jaipur makes sure that for "best 3 BHK in Jagatpura under ₹1 crore", <strong class="text-ink">your project is ranked, cited and RERA-verified.</strong></p>
            <ul class="reveal space-y-2 mt-6 text-sm" data-delay="2">
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> Featured for locality, BHK &amp; budget queries</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> Schema &amp; locality entities AI tools can cite</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> RERA trust signals that win the visit</li>
            </ul>
            <a href="/seo-services/#aeo-geo" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-7 font-medium" data-delay="3"><span class="relative z-10 sheen-text">How AEO &amp; GEO works</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
          </div>
          <!-- portal result -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <div class="rounded-xl2 border border-line bg-paper shadow-[0_45px_90px_-55px_rgba(10,10,10,.5)] overflow-hidden">
              <div class="flex items-center gap-2 rounded-full border border-line bg-surface px-4 py-2.5 m-4 text-sm text-ink">
                <iconify-icon icon="lucide:search" class="text-ink-soft" aria-hidden="true"></iconify-icon>
                <span>3 BHK in Mansarovar under ₹1 crore<span class="caret" aria-hidden="true"></span></span>
              </div>
              <div class="mx-4 mb-3 rounded-xl bg-accent/[0.06] border border-accent/25 p-3">
                <p class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-accent uppercase tracking-wide"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> AI Overview</p>
                <p class="text-sm text-ink mt-1.5 leading-relaxed">A strong RERA-approved option is <strong class="text-accent">Skyline Residency</strong> — 3 BHK homes in a prime Mansarovar locality. <span class="text-ink-soft">[1]</span></p>
              </div>
              <div class="mx-4 mb-4 rounded-xl border border-line p-4">
                <div class="flex items-start gap-3">
                  <span class="grid place-items-center h-11 w-11 rounded-lg bg-accent/15 text-accent shrink-0" aria-hidden="true"><iconify-icon icon="lucide:building-2" class="text-xl"></iconify-icon></span>
                  <div class="flex-1 min-w-0">
                    <p class="font-display tt inline-flex items-center gap-2">Skyline Residency <span class="inline-flex items-center gap-1 rounded-full bg-accent/10 text-accent text-[10px] font-semibold px-2 py-0.5">Rank #1 <iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span></p>
                    <p class="text-xs text-ink-soft mt-0.5">3 &amp; 4 BHK · Mansarovar, Jaipur · ₹85L onwards</p>
                    <p class="text-xs text-ink-soft mt-0.5 inline-flex items-center gap-1"><iconify-icon icon="lucide:shield-check" class="text-accent" aria-hidden="true"></iconify-icon> RERA verified · Possession 2026</p>
                  </div>
                </div>
                <div class="flex items-center gap-2 mt-3">
                  <a href="/contact-us/" class="flex-1 text-center rounded-full bg-ink text-paper text-xs font-medium py-2">Book a visit</a>
                  <a href="tel:+918058212202" class="flex-1 text-center rounded-full border border-line text-xs font-medium py-2">Call</a>
                </div>
              </div>
              <div class="mx-4 mb-4 flex items-center justify-center gap-1.5 rounded-full bg-accent text-paper text-xs font-semibold py-2"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Your project, cited as the answer</div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ (shared design) ===================== -->
      <section class="py-20 sm:py-28" aria-label="Frequently asked questions">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Real estate FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Your questions, answered</h2></div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="true">How do you market a real estate project?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">We market a project in four moves: brand it for trust (identity, RERA credibility, a clear story), win local search (SEO, AEO and GEO for locality, BHK and budget queries — think "3 BHK in Mansarovar" or "plots on Ajmer Road"), generate qualified leads (Meta Ads and Google campaigns tuned for site visits), and showcase it well (a fast microsite with galleries, floor plans and easy booking) — then nurture leads to a booking.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">How do you generate qualified leads instead of junk?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">We target by intent — locality, budget and buyer type — use qualifying questions and landing pages, optimise toward site visits (not raw form fills), and continuously cut audiences and creatives that bring low-quality enquiries. The goal is fewer, better leads your sales team can actually close.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">How long until we see site visits and bookings?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Performance campaigns can drive leads and site visits within days, with quality improving over the first 30–60 days as we optimise. Because real estate has a long cycle, bookings build over weeks of nurturing. Local SEO and AEO/GEO compound over 3–6 months into a steady, low-cost lead source.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Do you handle RERA-compliant advertising?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes. RERA-ready advertising is the default here — registration details where required, no misleading promises, and responsible, honest claims. Compliant, credible advertising actually converts better in real estate because trust is the deciding factor.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Which channels work best for real estate?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">A blend works best: Meta Ads &amp; Google performance ads for lead-gen, local SEO and Google Business Profile for high-intent searches, and Instagram/YouTube for walkthroughs and social proof. For builder marketing in Jaipur the right mix depends on whether you're a builder, broker, plotting project or luxury developer.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Do you build project microsites and landing pages?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes — our website and UI/UX teams build fast, SEO-ready project microsites and landing pages with galleries, floor plans, locality maps and one-tap site-visit booking, so your ad traffic actually converts.</div></div></div>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA (shared design) ===================== -->
      <section class="pb-20 sm:pb-28 pt-4" aria-label="Related and contact">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Explore more</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/performance-marketing/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:target"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Performance Marketing</span><span class="text-xs text-ink-soft">Lead-gen that converts</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
            <a href="/seo-services/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:search"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">SEO · AEO · GEO</span><span class="text-xs text-ink-soft">Win local search &amp; AI</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
            <a href="/industries/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:layers"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">All Industries</span><span class="text-xs text-ink-soft">Other sectors</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-60" aria-hidden="true"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Let's fill your project with buyers</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us about your project and the real estate digital marketing agency in Jaipur behind these results will map a plan to bring qualified site visits and bookings. Free, no obligation.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Get qualified leads</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
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
