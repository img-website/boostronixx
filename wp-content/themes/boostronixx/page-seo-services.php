<?php
/**
 * Template Name: SEO Services
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
      <section class="relative pt-28 sm:pt-36 pb-14 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:0;right:-40px"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">SEO Services</span>
          </nav>

          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <iconify-icon icon="lucide:map-pin" class="text-accent text-sm"></iconify-icon> Local SEO experts · Jaipur, Rajasthan
              </div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt">
                SEO company in Jaipur that <span class="text-accent">ranks &amp; converts</span>
              </h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">
                As an SEO company in Jaipur, BoostronixX delivers result-driven,
                white-hat SEO services that help local businesses rank higher on
                Google, attract qualified traffic and generate consistent organic
                leads.
              </p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Get a free SEO audit</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="#process" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:route" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See our process</span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-6 gap-y-2 mt-7 text-sm text-ink-soft" data-delay="3">
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:check-circle" class="text-accent"></iconify-icon> White-hat only</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:check-circle" class="text-accent"></iconify-icon> Monthly reporting</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:check-circle" class="text-accent"></iconify-icon> No lock-in tricks</span>
                <a href="#aeo-geo" class="inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent font-medium px-3 py-1 hover:bg-accent hover:text-paper transition"><iconify-icon icon="lucide:sparkles"></iconify-icon> AEO &amp; GEO included</a>
              </div>
            </div>

            <!-- animated SERP rank mock -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div id="serpMock" class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8">
                <div class="flex items-center gap-2 rounded-full border border-line px-4 py-2.5 text-sm text-ink-soft h-11">
                  <iconify-icon icon="lucide:search" class="text-base"></iconify-icon>
                  <span id="serpType"></span><span class="caret"></span>
                </div>
                <div id="serpCard" class="mt-4 rounded-2xl border border-line bg-paper p-4" style="transition:opacity .25s ease">
                  <div class="flex items-center gap-2 text-xs text-ink-soft"><span class="h-5 w-5 rounded grid place-items-center bg-accent/10 text-accent text-[10px] font-bold">B</span> www.boostronixx.com</div>
                  <p id="serpTitle" class="font-display text-lg tt mt-1.5">SEO Company in Jaipur — BoostronixX</p>
                  <p class="text-sm text-ink-soft mt-1">Result-driven, white-hat SEO services that rank you on page one and grow organic leads.</p>
                  <span class="inline-flex items-center gap-1 mt-3 rounded-full bg-accent/10 text-accent text-xs font-semibold px-2.5 py-1">Rank #1 <iconify-icon icon="lucide:check"></iconify-icon></span>
                </div>
                <div class="flex items-end justify-between gap-2 h-24 mt-5">
                  <div class="bar" style="--h:24%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:34%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:30%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:48%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:60%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:78%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:96%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                </div>
                <p class="text-[11px] text-ink-soft mt-2">Illustrative ranking growth · first 6 months</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== OVERVIEW + INCLUDES ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12">
          <div class="lg:col-span-5">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Overview</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">A trusted SEO company in Jaipur for ambitious brands</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Our SEO services in Jaipur span on-page, off-page, technical and local SEO plus content marketing — with a focus on real estate, schools, healthcare and D2C brands across Jaipur and beyond. Every tactic is white-hat, built for long-term visibility, not short-lived spikes.</p>
            <a href="/contact-us/" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-8 font-medium" data-delay="2"><span class="relative z-10 sheen-text">Talk to an SEO specialist</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
          </div>
          <div class="lg:col-span-7">
            <p class="reveal text-sm font-medium text-ink-soft mb-4" data-delay="1">What's included</p>
            <div class="grid sm:grid-cols-2 gap-3">
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:file-search"></iconify-icon></span><span class="font-medium text-sm">On-Page SEO Optimisation</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:map-pin"></iconify-icon></span><span class="font-medium text-sm">Local SEO — Jaipur</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:key-round"></iconify-icon></span><span class="font-medium text-sm">Keyword Research &amp; Strategy</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:link"></iconify-icon></span><span class="font-medium text-sm">Link Building &amp; Backlinks</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:pen-tool"></iconify-icon></span><span class="font-medium text-sm">Content Marketing</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:building-2"></iconify-icon></span><span class="font-medium text-sm">Google Business Profile</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:mail"></iconify-icon></span><span class="font-medium text-sm">Email Marketing</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:bar-chart-3"></iconify-icon></span><span class="font-medium text-sm">Monthly SEO Reporting</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-accent/40 bg-accent/5 p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:message-square-quote"></iconify-icon></span><span class="font-medium text-sm">AEO — Answer Engine Optimization <span class="ml-1 rounded-full bg-accent text-paper text-[10px] font-semibold px-2 py-0.5 align-middle">New</span></span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-accent/40 bg-accent/5 p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:sparkles"></iconify-icon></span><span class="font-medium text-sm">GEO — AI Search Visibility <span class="ml-1 rounded-full bg-accent text-paper text-[10px] font-semibold px-2 py-0.5 align-middle">New</span></span></div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== IMAGE: dashboard ===================== -->
      <section class="pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <figure class="imgph rounded-xl2 aspect-[16/7] bg-surface-2 reveal border border-line">
            <img src="/wp-content/themes/boostronixx/assets/img/seo-dashboard.avif" alt="BoostronixX SEO reporting dashboard showing keyword rankings and organic traffic growth" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b>SEO dashboard · 1600×700</b><span>Screenshot of a real ranking / traffic dashboard (Google Search Console or Analytics) with rising organic-traffic and keyword-position graphs. Anonymise client data.</span></figcaption>
          </figure>
        </div>
      </section>

      <!-- ===================== PROCESS ===================== -->
      <section id="process" class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Our process</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">How we get you ranking</h2>
          </div>
          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal lift rounded-xl2 bg-paper border border-line p-7">
              <span class="font-display text-5xl tt text-accent/25">01</span>
              <h3 class="font-display text-xl tt mt-3">Audit &amp; research</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">A technical audit surfacing crawl errors, speed issues and keyword gaps — plus a close look at your competitors.</p>
            </div>
            <div class="reveal lift rounded-xl2 bg-paper border border-line p-7" data-delay="1">
              <span class="font-display text-5xl tt text-accent/25">02</span>
              <h3 class="font-display text-xl tt mt-3">Keyword &amp; content plan</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">We target high-intent, locally relevant keywords — including long-tail and industry-specific terms.</p>
            </div>
            <div class="reveal lift rounded-xl2 bg-paper border border-line p-7" data-delay="2">
              <span class="font-display text-5xl tt text-accent/25">03</span>
              <h3 class="font-display text-xl tt mt-3">On-page &amp; technical SEO</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">Technical SEO in Jaipur done right: meta optimisation, heading structure, internal linking, schema markup, Core Web Vitals and mobile usability.</p>
            </div>
            <div class="reveal lift rounded-xl2 bg-paper border border-line p-7" data-delay="3">
              <span class="font-display text-5xl tt text-accent/25">04</span>
              <h3 class="font-display text-xl tt mt-3">Links &amp; reporting</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">White-hat link building services in Jaipur — high-quality backlinks from authoritative sites, with transparent monthly performance reports.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== LOCAL SEO ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <div class="lg:col-span-6">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Local SEO Jaipur</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Own the map pack in your city</h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">When someone searches "SEO agency near me" or "in Jaipur", local SEO decides whether they find you or a competitor. Our local SEO services in Jaipur cover Google Business Profile optimization, local citations and reviews, so you show up in the map pack and on Maps when buyers are ready to act.</p>
            <ul class="reveal grid sm:grid-cols-2 gap-3 mt-7 text-sm" data-delay="2">
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon> GBP optimisation</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon> Local citations &amp; NAP</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon> Review strategy</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon> Local landing pages</li>
            </ul>
          </div>
          <!-- IMAGE PLACEHOLDER: map pack / GBP -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <figure class="imgph rounded-xl2 aspect-[4/3] bg-surface-2 border border-line">
              <img src="/wp-content/themes/boostronixx/assets/img/local-seo-map.avif" alt="Google local map pack showing BoostronixX ranking for SEO company in Jaipur" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b>Map pack · 1080×810</b><span>Screenshot of the Google local 3-pack / Maps result for a Jaipur search, or a Google Business Profile with reviews. Shows local ranking proof.</span></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- ===================== AEO & GEO (AI SEARCH) ===================== -->
      <section id="aeo-geo" class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden" aria-labelledby="aeoGeoHeading">
        <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <!-- copy -->
          <div class="lg:col-span-6">
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:trending-up" aria-hidden="true"></iconify-icon> Trending now · AI search</p>
            <h2 id="aeoGeoHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Don't just rank.<br />Be the <span class="text-accent">answer</span>.</h2>
            <p class="reveal text-paper/60 mt-5 max-w-lg leading-relaxed" data-delay="1">Search has changed. People now ask ChatGPT, Perplexity and Google AI Overviews — and those engines answer with <em>one</em> recommendation, not ten blue links. AEO and GEO make sure that recommendation is you.</p>
            <div class="grid sm:grid-cols-2 gap-4 mt-8">
              <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="1">
                <span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl" aria-hidden="true"><iconify-icon icon="lucide:message-square-quote"></iconify-icon></span>
                <h3 class="font-display text-lg tt mt-4">AEO — Answer Engine Optimization</h3>
                <p class="text-paper/55 text-sm mt-1.5 leading-relaxed">Structuring your content so search engines lift it as the direct answer — featured snippets, People Also Ask, voice search and FAQ rich results.</p>
              </div>
              <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="2">
                <span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <h3 class="font-display text-lg tt mt-4">GEO — Generative Engine Optimization</h3>
                <p class="text-paper/55 text-sm mt-1.5 leading-relaxed">Making your brand citable by AI — entity building, schema, llms.txt, brand mentions and content AI models trust enough to quote and recommend.</p>
              </div>
            </div>
            <ul class="reveal flex flex-wrap gap-2 mt-6 text-sm" data-delay="2">
              <li class="rounded-full border border-white/15 px-3 py-1.5">Schema &amp; entities</li>
              <li class="rounded-full border border-white/15 px-3 py-1.5">llms.txt</li>
              <li class="rounded-full border border-white/15 px-3 py-1.5">Citable content</li>
              <li class="rounded-full border border-white/15 px-3 py-1.5">Brand mentions</li>
              <li class="rounded-full border border-white/15 px-3 py-1.5">AI visibility tracking</li>
            </ul>
          </div>

          <!-- AI chat mock -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <div class="rounded-xl2 bg-[#141414] border border-white/10 p-5 sm:p-7">
              <div class="flex items-center gap-2 pb-4 border-b border-white/10">
                <span class="aiavatar grid place-items-center h-8 w-8 rounded-full bg-accent text-paper" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <p class="text-sm font-medium text-paper">AI Assistant</p>
                <span class="ml-auto inline-flex items-center gap-1.5 rounded-full bg-white/8 px-2.5 py-1 text-[10px] text-paper/60"><span class="h-1.5 w-1.5 rounded-full bg-accent" aria-hidden="true"></span> answering</span>
              </div>
              <div class="mt-5 space-y-4">
                <!-- user bubble -->
                <div class="bubble bu1 flex justify-end">
                  <p class="max-w-[80%] rounded-2xl rounded-br-md bg-white/10 text-paper text-sm px-4 py-3">Who's the best SEO company in Jaipur?</p>
                </div>
                <!-- ai bubble -->
                <div class="bubble bu2 flex gap-2.5">
                  <span class="grid place-items-center h-7 w-7 rounded-full bg-accent text-paper text-xs shrink-0" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                  <div class="max-w-[85%] rounded-2xl rounded-tl-md bg-white/5 border border-white/10 px-4 py-3">
                    <p class="text-sm text-paper/85 leading-relaxed">Based on results and reviews, <strong class="text-accent">BoostronixX</strong> is a leading choice — a Jaipur studio known for white-hat SEO, transparent reporting and strong local rankings<span class="caret" aria-hidden="true"></span></p>
                    <a href="/" class="mt-3 inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent text-xs font-medium px-2.5 py-1 hover:bg-accent hover:text-paper transition"><iconify-icon icon="lucide:link" class="text-[11px]" aria-hidden="true"></iconify-icon> boostronixx.com <span class="text-[10px] opacity-70">[1]</span></a>
                  </div>
                </div>
                <!-- cited badge -->
                <div class="bubble bu3 flex justify-center">
                  <span class="inline-flex items-center gap-1.5 rounded-full bg-accent text-paper text-xs font-semibold px-3 py-1.5"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Your brand, cited as the answer</span>
                </div>
              </div>
              <!-- platforms -->
              <div class="mt-6 pt-4 border-t border-white/10">
                <p class="text-[11px] text-paper/40 mb-2.5">We optimise your visibility across</p>
                <ul class="flex flex-wrap gap-2 text-xs text-paper/70">
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:google" class="text-accent" aria-hidden="true"></iconify-icon> AI Overviews</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:openai" class="text-accent" aria-hidden="true"></iconify-icon> ChatGPT</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:perplexity" class="text-accent" aria-hidden="true"></iconify-icon> Perplexity</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:googlegemini" class="text-accent" aria-hidden="true"></iconify-icon> Gemini</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="lucide:bot" class="text-accent" aria-hidden="true"></iconify-icon> Copilot</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== TIMELINE / EXPECTATIONS ===================== -->
      <section class="pt-20 sm:pt-28 pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="reveal rounded-xl2 bg-ink text-paper p-8 sm:p-12 relative overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative">
              <p class="text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Realistic timelines</p>
              <h2 class="font-display text-2xl sm:text-4xl tt leading-tight max-w-2xl">SEO compounds — here's roughly when to expect movement</h2>
              <div class="grid sm:grid-cols-3 gap-4 mt-9">
                <div class="rounded-2xl bg-white/5 border border-white/10 p-6"><p class="font-display text-3xl tt text-accent">4–8 wks</p><p class="text-paper/70 text-sm mt-1.5">Local SEO begins to move — Maps &amp; local pack.</p></div>
                <div class="rounded-2xl bg-white/5 border border-white/10 p-6"><p class="font-display text-3xl tt text-accent">3–6 mo</p><p class="text-paper/70 text-sm mt-1.5">Noticeable ranking &amp; organic-traffic improvements.</p></div>
                <div class="rounded-2xl bg-white/5 border border-white/10 p-6"><p class="font-display text-3xl tt text-accent">6–12 mo</p><p class="text-paper/70 text-sm mt-1.5">Competitive keywords reach the front page.</p></div>
              </div>
              <p class="text-paper/40 text-xs mt-5">Timelines are typical ranges and vary with competition, budget and starting point — never guaranteed.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== WHY US / E-E-A-T ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Why choose BoostronixX</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">What makes us the best SEO company in Jaipur</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal lift rounded-2xl border border-line p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:map-pinned"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Deep local knowledge</h3><p class="text-ink-soft text-sm mt-1.5">We know how Jaipur's competitive sectors search and convert.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:database"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Data-driven expertise</h3><p class="text-ink-soft text-sm mt-1.5">Decisions backed by Search Console, Analytics and real SERP data.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:target"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Focused on outcomes</h3><p class="text-ink-soft text-sm mt-1.5">We optimise for leads and revenue — not vanity rankings.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:shield-check"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">White-hat &amp; transparent</h3><p class="text-ink-soft text-sm mt-1.5">Sustainable methods and clear monthly reporting, always.</p></div>
          </div>

          <!-- author / reviewer (E-E-A-T) -->
          <div class="reveal mt-8 rounded-2xl border border-line bg-surface p-6 flex flex-col sm:flex-row sm:items-center gap-5">
            <span class="grid place-items-center h-14 w-14 rounded-full bg-ink text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-2xl text-accent"></iconify-icon></span>
            <div class="flex-1">
              <p class="font-display tt text-lg">Reviewed by the BoostronixX SEO team</p>
              <p class="text-ink-soft text-sm mt-1">Practising SEO since 2021 across 50+ brands in real estate, schools and D2C. We follow Google's guidelines and white-hat best practices on every engagement.</p>
            </div>
            <a href="/about-us/" class="text-sm font-medium text-ink hover:text-accent inline-flex items-center gap-1.5 shrink-0">Meet the team <iconify-icon icon="lucide:arrow-up-right"></iconify-icon></a>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">SEO FAQ</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Your SEO questions, answered</h2>
          </div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl bg-paper px-6 group open">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">What is SEO and why do Jaipur businesses need it?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">SEO improves your visibility on Google so customers find you when they search. In competitive Jaipur sectors like real estate, schools, healthcare and D2C retail, strong SEO is often the difference between a steady flow of organic leads and being invisible to buyers.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">How long does SEO take to show results?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Typically 3 to 6 months for noticeable improvements, and 6 to 12 months for highly competitive keywords. Local SEO usually moves faster — often within 4 to 8 weeks. SEO compounds over time, so results build and strengthen the longer you invest.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">What is local SEO and do I need it?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Local SEO helps you rank for location-based searches like "SEO company in Jaipur" or "near me". It includes Google Business Profile optimisation, local citations and reviews. If you serve customers in a specific area, you need it to appear in the local map pack.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">What SEO services does BoostronixX offer?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">A full stack: technical audits, on-page and off-page optimisation, keyword research, content marketing, link building, local SEO, e-commerce SEO and transparent monthly reporting — all using white-hat methods. Plans are scoped to your goals and budget, so you get affordable SEO services in Jaipur without lock-in tricks.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Why choose BoostronixX for SEO?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Deep local market knowledge, data-driven SEO expertise and a relentless focus on real business outcomes — backed by transparent reporting and specialisation in Jaipur's competitive sectors.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">What are AEO and GEO — and do I need them?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">AEO (Answer Engine Optimization) structures your content so search engines lift it as the direct answer — featured snippets, People Also Ask and voice search. GEO (Generative Engine Optimization) makes your brand citable by AI tools like ChatGPT, Perplexity, Gemini and Google AI Overviews through schema, entity building, llms.txt and authoritative content. As more buyers ask AI instead of scrolling results, both are fast becoming essential — and they build on the same white-hat foundation as classic SEO.</div></div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Related services</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/performance-marketing/" class="reveal lift group rounded-2xl border border-line p-6 flex items-center gap-4"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:target"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Performance Marketing</span><span class="text-xs text-ink-soft">Paid ads that convert</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/social-media-marketing/" class="reveal lift group rounded-2xl border border-line p-6 flex items-center gap-4" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:thumbs-up"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Social Media</span><span class="text-xs text-ink-soft">Content that engages</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/services/" class="reveal lift group rounded-2xl border border-line p-6 flex items-center gap-4" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:layout-grid"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">All Services</span><span class="text-xs text-ink-soft">See the full stack</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
          </div>

          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Ready to rank on page one?</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Get a free SEO audit of your site — we'll show you the quick wins and a clear path to more organic leads.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Get my free SEO audit</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="tel:+918058212202" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">+91 80582 12202</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
