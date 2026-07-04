<?php
/**
 * Template Name: Portfolio
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
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:-30px;left:-50px"></span>
        <span class="orb orb-b" style="width:260px;height:260px;background:#ffc59e;bottom:-50px;right:8%"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Portfolio</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <span class="live inline-block h-2 w-2 rounded-full bg-accent"></span> 100+ projects shipped · 15+ industries
              </div>
              <h1 class="reveal font-display text-[2.7rem] leading-[0.95] sm:text-7xl lg:text-[5rem] tt">
                Proof, not<br class="hidden sm:block" />
                promises<span class="text-accent">.</span>
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">
                Branding and digital marketing work, SaaS product design, apps and
                growth campaigns — a look at what we've built from our Jaipur studio
                for ambitious brands across India and beyond.
              </p>
              <a href="#projects" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-6 font-medium" data-delay="2">
                <span class="relative z-10 sheen-text">Jump to the work</span>
                <iconify-icon icon="lucide:arrow-down" class="relative z-10"></iconify-icon>
              </a>
            </div>
          </div>

          <!-- stat band -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px mt-12 rounded-2xl overflow-hidden border border-line bg-line" data-delay="2">
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="50">0</span>+</p><p class="text-ink-soft text-sm mt-1">Brands transformed</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="100">0</span>+</p><p class="text-ink-soft text-sm mt-1">Projects delivered</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="15">0</span>+</p><p class="text-ink-soft text-sm mt-1">Industries served</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="98">0</span>%</p><p class="text-ink-soft text-sm mt-1">Client satisfaction</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== CATEGORY MARQUEE ===================== -->
      <section class="py-5 border-y border-line bg-surface overflow-hidden">
        <div class="marquee text-ink/25">
          <div class="flex items-center gap-10 pr-10 font-display text-lg tt">
            <span>Brand Identity</span><span class="text-accent">✶</span><span>SaaS Product Design</span><span class="text-accent">✶</span><span>Mobile Apps</span><span class="text-accent">✶</span><span>UI / UX</span><span class="text-accent">✶</span><span>Web Design</span><span class="text-accent">✶</span><span>Digital Marketing</span><span class="text-accent">✶</span>
          </div>
          <div class="flex items-center gap-10 pr-10 font-display text-lg tt" aria-hidden="true">
            <span>Brand Identity</span><span class="text-accent">✶</span><span>SaaS Product Design</span><span class="text-accent">✶</span><span>Mobile Apps</span><span class="text-accent">✶</span><span>UI / UX</span><span class="text-accent">✶</span><span>Web Design</span><span class="text-accent">✶</span><span>Digital Marketing</span><span class="text-accent">✶</span>
          </div>
        </div>
      </section>

      <!-- ===================== FEATURED — EDOOVI ===================== -->
      <section class="py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-8">Featured case study</p>
          <a href="/portfolio/edoovi-erp/" class="reveal pcard group block">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
              <!-- animated dashboard mock -->
              <div class="screen rounded-xl2 bg-[#0e0e0e] border border-white/10 p-5 sm:p-7 overflow-hidden order-2 lg:order-1">
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center gap-2 text-paper">
                    <span class="grid place-items-center h-7 w-7 rounded-lg bg-accent text-xs font-bold">E</span>
                    <span class="font-display tt text-sm">Edoovi ERP</span>
                  </div>
                  <span class="inline-flex items-center gap-1.5 rounded-full bg-white/8 px-2.5 py-1 text-[10px] text-paper/60"><span class="live inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> live</span>
                </div>
                <div class="grid grid-cols-[64px_1fr] gap-3">
                  <!-- sidebar -->
                  <div class="rounded-xl bg-white/5 p-2 space-y-2">
                    <span class="pop p1 block h-8 rounded-lg bg-accent/80"></span>
                    <span class="pop p2 block h-8 rounded-lg bg-white/10"></span>
                    <span class="pop p3 block h-8 rounded-lg bg-white/10"></span>
                    <span class="pop p4 block h-8 rounded-lg bg-white/10"></span>
                  </div>
                  <!-- main -->
                  <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-2">
                      <div class="pop p1 rounded-xl bg-white/5 p-2.5"><p class="text-[9px] text-paper/40">Students</p><p class="font-display tt text-paper text-lg"><span class="count" data-to="2480">0</span></p></div>
                      <div class="pop p2 rounded-xl bg-white/5 p-2.5"><p class="text-[9px] text-paper/40">Attendance</p><p class="font-display tt text-accent text-lg"><span class="count" data-to="96">0</span>%</p></div>
                      <div class="pop p3 rounded-xl bg-white/5 p-2.5"><p class="text-[9px] text-paper/40">Fees due</p><p class="font-display tt text-paper text-lg">₹<span class="count" data-to="42">0</span>k</p></div>
                    </div>
                    <div class="rounded-xl bg-white/5 p-3">
                      <div class="flex items-end gap-2 h-20">
                        <div class="bar" style="--h:45%;width:13%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                        <div class="bar" style="--h:62%;width:13%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                        <div class="bar" style="--h:38%;width:13%;background:linear-gradient(180deg,#ffffff,transparent);opacity:.3"></div>
                        <div class="bar" style="--h:78%;width:13%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                        <div class="bar" style="--h:54%;width:13%;background:linear-gradient(180deg,#ffffff,transparent);opacity:.3"></div>
                        <div class="bar" style="--h:92%;width:13%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- info -->
              <div class="order-1 lg:order-2">
                <div class="flex flex-wrap items-center gap-2 text-xs">
                  <span class="rounded-full bg-accent/10 text-accent font-medium px-3 py-1">SaaS Product Design</span>
                  <span class="rounded-full bg-surface px-3 py-1">EdTech</span>
                  <span class="rounded-full bg-surface px-3 py-1">2025</span>
                </div>
                <h2 class="font-display text-3xl sm:text-5xl tt mt-5 leading-[1.04]">Edoovi — Smart ERP for modern schools</h2>
                <p class="text-ink-soft mt-4 max-w-md leading-relaxed">An AI-powered ERP and mobile-app ecosystem that connects administration, teachers, parents and students on one platform — replacing fragmented, manual workflows.</p>
                <div class="flex flex-wrap gap-2 mt-6 text-sm">
                  <span class="rounded-full border border-line px-3 py-1.5">UI/UX Design</span>
                  <span class="rounded-full border border-line px-3 py-1.5">Product Strategy</span>
                  <span class="rounded-full border border-line px-3 py-1.5">Design System</span>
                </div>
                <span class="mt-8 inline-flex items-center gap-2 font-medium text-ink group-hover:text-accent transition">
                  Read the case study
                  <span class="parrow grid place-items-center h-10 w-10 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
                </span>
              </div>
            </div>
          </a>
        </div>
      </section>

      <!-- ===================== FILTER + GRID ===================== -->
      <section id="projects" class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-10">
            <div>
              <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">More selected work</p>
              <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Selected work from our Jaipur studio</h2>
            </div>
            <div id="chips" class="reveal flex flex-wrap gap-2" data-delay="1">
              <button class="chip active rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="all">All</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="branding">Branding</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="mobile">Mobile App</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="marketing">Marketing</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="social">Social</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="seo">SEO / Web</button>
            </div>
          </div>

          <div id="grid" class="grid md:grid-cols-2 gap-6 lg:gap-8">

            <!-- FRESHEE — mobile app -->
            <a href="/contact/" class="pcard reveal group block" data-cat="mobile">
              <div class="screen rounded-xl2 bg-gradient-to-br from-[#0f1f17] to-[#0a0a0a] border border-white/10 p-6 overflow-hidden flex justify-center">
                <div class="w-[230px] rounded-[2rem] bg-[#0a0a0a] border border-white/12 p-3">
                  <div class="flex justify-center"><span class="h-1.5 w-12 rounded-full bg-white/15"></span></div>
                  <div class="mt-3 flex items-center justify-between text-paper">
                    <span class="font-display tt text-sm">Freshee</span>
                    <span class="relative grid place-items-center h-7 w-7 rounded-full bg-white/8 text-xs"><iconify-icon icon="lucide:shopping-cart"></iconify-icon><span class="absolute -top-1 -right-1 h-4 w-4 grid place-items-center rounded-full bg-accent text-[9px] font-bold"><span class="count" data-to="6">0</span></span></span>
                  </div>
                  <div class="mt-3 flex items-center gap-1.5 rounded-full bg-white/6 px-3 py-2 text-[11px] text-paper/50"><iconify-icon icon="lucide:search"></iconify-icon> Fresh fruits<span class="caret"></span></div>
                  <div class="grid grid-cols-2 gap-2 mt-3">
                    <div class="pop p1 rounded-xl bg-white/6 p-2"><span class="block h-12 rounded-lg bg-gradient-to-br from-emerald-400/40 to-emerald-600/30"></span><p class="text-[10px] text-paper/70 mt-1.5">Avocado</p><p class="text-[10px] text-accent font-semibold">₹120</p></div>
                    <div class="pop p2 rounded-xl bg-white/6 p-2"><span class="block h-12 rounded-lg bg-gradient-to-br from-orange-300/40 to-orange-500/30"></span><p class="text-[10px] text-paper/70 mt-1.5">Oranges</p><p class="text-[10px] text-accent font-semibold">₹80</p></div>
                    <div class="pop p3 rounded-xl bg-white/6 p-2"><span class="block h-12 rounded-lg bg-gradient-to-br from-red-300/40 to-red-500/30"></span><p class="text-[10px] text-paper/70 mt-1.5">Tomato</p><p class="text-[10px] text-accent font-semibold">₹40</p></div>
                    <div class="pop p4 rounded-xl bg-white/6 p-2"><span class="block h-12 rounded-lg bg-gradient-to-br from-lime-300/40 to-lime-500/30"></span><p class="text-[10px] text-paper/70 mt-1.5">Spinach</p><p class="text-[10px] text-accent font-semibold">₹30</p></div>
                  </div>
                  <div class="mt-3 rounded-full bg-accent text-paper text-center text-xs font-medium py-2.5">Deliver in 10 min</div>
                </div>
              </div>
              <div class="flex items-center justify-between mt-5">
                <div><h3 class="font-display text-2xl tt">Freshee — Quick Commerce</h3><p class="text-sm text-ink-soft mt-1">Mobile App · UI/UX · Brand</p></div>
                <span class="parrow grid place-items-center h-11 w-11 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
              </div>
            </a>

            <!-- AURUM — jewellery brand board -->
            <a href="/contact/" class="pcard reveal group block md:mt-12" data-cat="branding" data-delay="1">
              <div class="screen rounded-xl2 bg-surface border border-line p-6 overflow-hidden">
                <div class="flex items-center justify-between mb-4"><span class="text-[11px] tracking-[.2em] uppercase text-ink-soft">Brand Board</span><span class="text-[11px] text-ink-soft">v1.0</span></div>
                <div class="grid grid-cols-3 gap-3">
                  <div class="pop p1 col-span-2 rounded-2xl bg-ink text-paper p-5 flex items-end min-h-[110px]"><span class="font-display text-3xl tt" style="letter-spacing:.02em">A<span class="text-accent">U</span>RUM</span></div>
                  <div class="pop p2 rounded-2xl grid place-items-center min-h-[110px]" style="background:linear-gradient(135deg,#d9b24b,#a9812a)"><iconify-icon icon="lucide:gem" class="text-paper text-3xl"></iconify-icon></div>
                  <div class="pop p3 rounded-xl h-12" style="background:#d9b24b"></div>
                  <div class="pop p3 rounded-xl h-12" style="background:#2b2b2b"></div>
                  <div class="pop p4 rounded-xl h-12 border border-line" style="background:#f3ead2"></div>
                  <div class="pop p2 col-span-3 rounded-2xl bg-paper border border-line p-3"><p class="font-display tt text-lg">Timeless. Crafted. Yours.</p><p class="text-xs text-ink-soft">Aa Bb Cc · 0123456789</p></div>
                </div>
              </div>
              <div class="flex items-center justify-between mt-5">
                <div><h3 class="font-display text-2xl tt">Aurum — Jewellery</h3><p class="text-sm text-ink-soft mt-1">Brand Identity · Visual System</p></div>
                <span class="parrow grid place-items-center h-11 w-11 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
              </div>
            </a>

            <!-- ASHIANA — real estate growth -->
            <a href="/contact/" class="pcard reveal group block" data-cat="marketing">
              <div class="screen rounded-xl2 bg-paper border border-line p-6 overflow-hidden">
                <div class="flex items-center justify-between mb-1"><span class="text-[11px] tracking-[.2em] uppercase text-ink-soft">Leads · 90 days</span><span class="inline-flex items-center gap-1 text-sm font-semibold text-accent">+<span class="count" data-to="128">0</span>% <iconify-icon icon="lucide:trending-up"></iconify-icon></span></div>
                <p class="font-display text-4xl tt"><span class="count" data-to="3">0</span>.4k <span class="text-base text-ink-soft font-normal">qualified leads</span></p>
                <svg viewBox="0 0 320 120" class="w-full mt-3" fill="none">
                  <polyline class="area" points="0,110 0,84 54,90 108,66 162,72 216,42 270,38 320,14 320,110" fill="#fa5539" fill-opacity="0.08" />
                  <polyline class="draw" points="0,84 54,90 108,66 162,72 216,42 270,38 320,14" pathLength="1" stroke="#fa5539" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  <circle cx="320" cy="14" r="4" fill="#fa5539" />
                </svg>
                <div class="grid grid-cols-3 gap-2 mt-4">
                  <div class="rounded-xl bg-surface p-2.5"><p class="text-[10px] text-ink-soft">CPL</p><p class="font-display tt">₹<span class="count" data-to="46">0</span></p></div>
                  <div class="rounded-xl bg-surface p-2.5"><p class="text-[10px] text-ink-soft">Site visits</p><p class="font-display tt"><span class="count" data-to="610">0</span></p></div>
                  <div class="rounded-xl bg-surface p-2.5"><p class="text-[10px] text-ink-soft">Bookings</p><p class="font-display tt text-accent"><span class="count" data-to="38">0</span></p></div>
                </div>
              </div>
              <div class="flex items-center justify-between mt-5">
                <div><h3 class="font-display text-2xl tt">Ashiana — Real Estate</h3><p class="text-sm text-ink-soft mt-1">Performance Marketing · Lead Gen</p></div>
                <span class="parrow grid place-items-center h-11 w-11 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
              </div>
            </a>

            <!-- VEEBA — social -->
            <a href="/contact/" class="pcard reveal group block md:mt-12" data-cat="social" data-delay="1">
              <div class="screen rounded-xl2 bg-[#0e0e0e] border border-white/10 p-6 overflow-hidden flex justify-center">
                <div class="w-[250px] rounded-2xl bg-[#161616] border border-white/10 p-3">
                  <div class="flex items-center gap-2.5">
                    <span class="h-8 w-8 rounded-full p-[1.5px] bg-gradient-to-tr from-accent via-[#ff8a5c] to-[#ffd0a8]"><span class="grid place-items-center h-full w-full rounded-full bg-[#161616] text-paper text-xs font-bold">V</span></span>
                    <div class="leading-tight"><p class="text-paper text-xs font-semibold">veeba</p><p class="text-[10px] text-paper/40">Sponsored</p></div>
                    <span class="ml-auto rounded-full bg-accent text-paper text-[10px] px-2.5 py-1">Follow</span>
                  </div>
                  <div class="pop p1 mt-3 rounded-xl h-36 bg-gradient-to-br from-[#fa5539]/40 via-[#ff8a5c]/30 to-[#1a1a1a] grid place-items-center">
                    <span class="font-display tt text-paper text-xl">Dip into bold.</span>
                  </div>
                  <div class="flex items-center gap-3 mt-2.5 text-paper text-lg">
                    <span class="beat text-accent inline-flex"><iconify-icon icon="mdi:heart"></iconify-icon></span>
                    <iconify-icon icon="lucide:message-circle"></iconify-icon>
                    <iconify-icon icon="lucide:send"></iconify-icon>
                    <span class="ml-auto"><iconify-icon icon="lucide:bookmark"></iconify-icon></span>
                  </div>
                  <p class="text-paper text-xs font-semibold mt-2"><span class="count" data-to="14820">0</span> likes</p>
                </div>
              </div>
              <div class="flex items-center justify-between mt-5">
                <div><h3 class="font-display text-2xl tt">Veeba — D2C Social</h3><p class="text-sm text-ink-soft mt-1">Content · Social Media · Creative</p></div>
                <span class="parrow grid place-items-center h-11 w-11 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
              </div>
            </a>

            <!-- SIMPLILEARN — SEO/web -->
            <a href="/contact/" class="pcard reveal group block" data-cat="seo">
              <div class="screen rounded-xl2 bg-paper border border-line p-6 overflow-hidden">
                <div class="flex items-center gap-2 rounded-full border border-line px-4 py-2.5 text-sm text-ink-soft h-11"><iconify-icon icon="lucide:search"></iconify-icon> online learning platform<span class="caret"></span></div>
                <div class="mt-4 rounded-2xl border border-line p-4">
                  <div class="flex items-center gap-2 text-xs text-ink-soft"><span class="h-4 w-4 rounded grid place-items-center bg-accent/10 text-accent text-[9px]">S</span> www.simplilearn.com</div>
                  <p class="font-display text-lg tt mt-1.5">Simplilearn — Online Courses & Certification</p>
                  <span class="inline-flex items-center gap-1 mt-2 rounded-full bg-accent/10 text-accent text-xs font-semibold px-2.5 py-1">Rank #1 <iconify-icon icon="lucide:check"></iconify-icon></span>
                </div>
                <div class="flex items-end justify-between gap-2 h-20 mt-4">
                  <div class="bar" style="--h:26%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:38%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:32%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:50%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:64%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:80%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:96%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                </div>
              </div>
              <div class="flex items-center justify-between mt-5">
                <div><h3 class="font-display text-2xl tt">Simplilearn — EdTech</h3><p class="text-sm text-ink-soft mt-1">SEO · Content · Web</p></div>
                <span class="parrow grid place-items-center h-11 w-11 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
              </div>
            </a>

            <!-- EDOOVI tile (in grid too, for SaaS filter) -->
            <a href="/portfolio/edoovi-erp/" class="pcard reveal group block md:mt-12" data-cat="saas branding" data-delay="1">
              <div class="screen rounded-xl2 bg-[#0e0e0e] border border-white/10 p-6 overflow-hidden">
                <div class="flex items-center justify-between mb-3 text-paper">
                  <span class="font-display tt text-sm inline-flex items-center gap-2"><span class="grid place-items-center h-6 w-6 rounded-md bg-accent text-[10px] font-bold">E</span> Parent App</span>
                  <iconify-icon icon="lucide:bell" class="text-paper/50"></iconify-icon>
                </div>
                <div class="grid grid-cols-2 gap-2">
                  <div class="pop p1 rounded-xl bg-white/5 p-3"><iconify-icon icon="lucide:calendar-check" class="text-accent text-lg"></iconify-icon><p class="text-[10px] text-paper/50 mt-2">Attendance</p><p class="font-display tt text-paper">Present</p></div>
                  <div class="pop p2 rounded-xl bg-white/5 p-3"><iconify-icon icon="lucide:book-open" class="text-accent text-lg"></iconify-icon><p class="text-[10px] text-paper/50 mt-2">Homework</p><p class="font-display tt text-paper"><span class="count" data-to="3">0</span> new</p></div>
                  <div class="pop p3 rounded-xl bg-white/5 p-3"><iconify-icon icon="lucide:bus" class="text-accent text-lg"></iconify-icon><p class="text-[10px] text-paper/50 mt-2">Bus</p><p class="font-display tt text-paper">5 min</p></div>
                  <div class="pop p4 rounded-xl bg-white/5 p-3"><iconify-icon icon="lucide:wallet" class="text-accent text-lg"></iconify-icon><p class="text-[10px] text-paper/50 mt-2">Fees</p><p class="font-display tt text-accent">Paid</p></div>
                </div>
              </div>
              <div class="flex items-center justify-between mt-5">
                <div><h3 class="font-display text-2xl tt">Edoovi — Parent App</h3><p class="text-sm text-ink-soft mt-1">SaaS · App · Design System</p></div>
                <span class="parrow grid place-items-center h-11 w-11 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
              </div>
            </a>
          </div>

          <!-- empty -->
          <div id="gridEmpty" class="hidden text-center py-16">
            <span class="text-4xl text-ink-soft"><iconify-icon icon="lucide:search-x"></iconify-icon></span>
            <p class="font-display text-xl tt mt-4">No projects in this category yet</p>
            <p class="text-ink-soft text-sm mt-1">Try another filter — or start your own.</p>
          </div>
        </div>
      </section>

      <!-- ===================== CAPABILITIES ===================== -->
      <section class="py-16 sm:py-20 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">What's inside every project</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">From first sketch to live and growing</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl bg-paper border border-line p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:search-check"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Research</h3><p class="text-ink-soft text-sm mt-1.5">Audience, market and competitor deep-dives.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Design</h3><p class="text-ink-soft text-sm mt-1.5">Identity, UI/UX and design systems that scale.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:code-2"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Build</h3><p class="text-ink-soft text-sm mt-1.5">Fast, responsive websites and product front-ends.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:trending-up"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Grow</h3><p class="text-ink-soft text-sm mt-1.5">SEO, social and ads that compound results.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="absolute right-6 top-6 sm:right-12 sm:top-12 h-24 w-24 spin hidden sm:block">
              <svg viewBox="0 0 100 100" class="w-full h-full"><defs><path id="c2" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs><text font-size="10.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c2">YOUR PROJECT NEXT · LET'S BUILD ·</textPath></text></svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
            </div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-6xl tt leading-[1.02]">Want to be our next case study?</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us what you're building. We'll bring the strategy, the design and the growth to make it impossible to ignore.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Start your project</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="/services/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See our services</span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'portfolio_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/portfolio-cta-image.avif', false, 'BoostronixX portfolio and creative work', 420, 525 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
