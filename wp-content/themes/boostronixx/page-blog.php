<?php
/**
 * Template Name: Blog
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
      <section class="relative pt-28 sm:pt-36 pb-10 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Blog</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><span class="h-2 w-2 rounded-full bg-accent" aria-hidden="true"></span> Insights from the studio</div>
              <h1 class="reveal font-display text-[2.7rem] leading-[0.96] sm:text-7xl tt">Ideas worth<br class="hidden sm:block" /> your <span class="text-accent">time</span></h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">Practical digital marketing, SEO and branding insights from our Jaipur studio — written by the people who do the work, for people who want to grow.</p>
            </div>
          </div>
          <!-- search -->
          <div class="reveal mt-9 max-w-xl" data-delay="2">
            <label for="blogSearch" class="sr-only">Search articles</label>
            <div class="relative">
              <iconify-icon icon="lucide:search" class="absolute left-5 top-1/2 -translate-y-1/2 text-xl text-ink-soft" aria-hidden="true"></iconify-icon>
              <input id="blogSearch" type="text" placeholder="Search articles…" class="w-full rounded-full border border-line bg-paper py-4 pr-5 text-base outline-none focus:border-accent transition" style="padding-left:3.25rem" autocomplete="off" />
            </div>
          </div>
        </div>
      </section>

      <!-- FEATURED -->
      <section class="py-10" aria-label="Featured article">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Featured</p>
          <a href="/blog-post/" class="post reveal group grid lg:grid-cols-12 gap-6 lg:gap-10 items-center rounded-xl2 border border-line p-4 sm:p-6 hover:border-accent transition">
            <div class="lg:col-span-5">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]">
                <div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#fa5539,#ff8a5c)" aria-hidden="true"></div>
                <img src="/wp-content/themes/boostronixx/assets/img/blog-branding-vs-marketing.avif" alt="Illustration contrasting branding and marketing for a business" loading="lazy" onerror="this.remove()" />
                <span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Editorial cover illustration for the featured article.</span></span>
              </div>
            </div>
            <div class="lg:col-span-7">
              <div class="flex flex-wrap items-center gap-3 text-xs">
                <span class="rounded-full bg-accent/10 text-accent font-medium px-3 py-1">Branding</span>
                <span class="text-ink-soft inline-flex items-center gap-1.5"><iconify-icon icon="lucide:calendar" aria-hidden="true"></iconify-icon> <time datetime="2026-06-02">Jun 2, 2026</time></span>
                <span class="text-ink-soft inline-flex items-center gap-1.5"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 8 min read</span>
              </div>
              <h2 class="mt-4"><span class="font-display text-3xl sm:text-5xl tt leading-[1.04] group-hover:text-accent transition">Branding vs. Marketing: what your business actually needs first</span></h2>
              <p class="text-ink-soft mt-4 max-w-xl leading-relaxed">Everyone says you need both — but order matters. Here's a simple way to know whether to invest in your brand or your marketing right now, with a 2-minute self-test.</p>
              <div class="flex items-center gap-3 mt-6">
                <span class="grid place-items-center h-10 w-10 rounded-full bg-ink text-paper font-display" aria-hidden="true">A</span>
                <div class="text-sm"><p class="font-medium">Aarav Sharma</p><p class="text-ink-soft text-xs">Brand Strategy Lead</p></div>
                <span class="ml-auto inline-flex items-center gap-1.5 text-sm font-medium text-ink group-hover:text-accent transition">Read article <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span>
              </div>
            </div>
          </a>
        </div>
      </section>

      <!-- FILTER + GRID -->
      <section class="py-10 sm:py-14" aria-label="All articles">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-5 mb-10">
            <h2 class="reveal font-display text-2xl sm:text-3xl tt">Latest digital marketing, SEO &amp; branding insights</h2>
            <div id="chips" class="reveal flex flex-wrap gap-2" role="group" aria-label="Filter by category" data-delay="1">
              <button class="chip active rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="all" aria-pressed="true">All</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="branding" aria-pressed="false">Branding</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="seo" aria-pressed="false">SEO</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="social" aria-pressed="false">Social</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="performance" aria-pressed="false">Ads</button>
              <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="design" aria-pressed="false">Design</button>
            </div>
          </div>

          <div id="grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

            <!-- card template repeated -->
            <a href="/blog-post/" class="post group block" data-cat="seo" data-title="local seo jaipur businesses playbook">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#0a0a0a,#3a3a3a)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-local-seo.avif" alt="Map pin over a city skyline representing local SEO" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Local SEO cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">SEO</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 7 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">Local SEO for Jaipur businesses: the 2026 playbook</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Show up when nearby customers search. A step-by-step local SEO guide.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-05-28">May 28, 2026</time> · Neha Verma</p></div>
            </a>

            <a href="/blog-post/" class="post group block" data-cat="branding" data-title="7 signs your brand needs a refresh rebrand">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#fa5539,#2e1c16)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-brand-refresh.avif" alt="Before and after of a brand identity refresh" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Rebrand cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">Branding</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 6 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">7 signs your brand is overdue for a refresh</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">If these feel familiar, it's time to modernise your identity.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-05-20">May 20, 2026</time> · Aarav Sharma</p></div>
            </a>

            <a href="/blog-post/" class="post group block" data-cat="social" data-title="instagram feed that sells social funnel">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#7c3aed,#fa5539)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-instagram.avif" alt="Phone showing a polished Instagram feed grid" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Instagram cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">Social</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 5 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">How to build an Instagram feed that actually sells</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Turn scrollers into customers with a feed built on intent.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-05-14">May 14, 2026</time> · Priya Nair</p></div>
            </a>

            <a href="/blog-post/" class="post group block" data-cat="performance" data-title="roas framework ad spend waste meta google ads">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#0a0a0a,#fa5539)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-roas.avif" alt="Dashboard chart showing return on ad spend" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>ROAS cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">Ads</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 6 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">Stop wasting ad spend: a simple ROAS framework</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">A clear way to decide what to scale, pause or test next.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-05-08">May 8, 2026</time> · Rohit Mehta</p></div>
            </a>

            <a href="/blog-post/" class="post group block" data-cat="design" data-title="high converting landing page anatomy">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#2e7d5b,#0a0a0a)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-landing.avif" alt="Wireframe of a high-converting landing page" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Landing page cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">Design</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 7 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">The anatomy of a high-converting landing page</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Every section that earns the click — in the right order.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-05-02">May 2, 2026</time> · Sana Kapoor</p></div>
            </a>

            <a href="/blog-post/" class="post group block" data-cat="seo" data-title="content compounds seo beats ads long term">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#fa5539,#0a0a0a)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-content.avif" alt="Compounding growth chart for content marketing" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Content cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">SEO</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 8 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">Content that compounds: why SEO beats ads long-term</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Ads stop when you stop paying. Content keeps working.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-04-25">Apr 25, 2026</time> · Neha Verma</p></div>
            </a>

            <a href="/blog-post/" class="post group block" data-cat="branding design" data-title="color psychology branding palette">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#d6457a,#fa5539)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-color.avif" alt="Colour palette swatches for brand identity" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Colour cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">Branding</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 5 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">Colour psychology in branding: choosing your palette</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">What your colours say before a single word is read.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-04-18">Apr 18, 2026</time> · Aarav Sharma</p></div>
            </a>

            <a href="/blog-post/" class="post group block" data-cat="social" data-title="followers to customers social funnel">
              <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#0fa3a3,#0a0a0a)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-funnel.avif" alt="Funnel turning followers into customers" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4 · 900×1200</b><span>Funnel cover</span></span></div>
              <div class="mt-4"><div class="flex items-center gap-2 text-xs"><span class="rounded-full bg-surface px-2.5 py-1 font-medium">Social</span><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 6 min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug">From followers to customers: the social funnel</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Likes are nice. Here's how to turn them into revenue.</p><p class="text-xs text-ink-soft mt-4"><time datetime="2026-04-10">Apr 10, 2026</time> · Priya Nair</p></div>
            </a>
          </div>

          <!-- empty -->
          <div id="blogEmpty" class="hidden text-center py-16" role="status">
            <span class="text-4xl text-ink-soft" aria-hidden="true"><iconify-icon icon="lucide:search-x"></iconify-icon></span>
            <p class="font-display text-xl tt mt-4">No articles match</p>
            <p class="text-ink-soft text-sm mt-1">Try a different keyword or category.</p>
          </div>
        </div>
      </section>

      <!-- NEWSLETTER -->
      <section class="py-16 sm:py-24" aria-label="Newsletter">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-12 py-12 sm:py-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
            <div class="relative grid lg:grid-cols-2 gap-8 items-center">
              <div>
                <h2 class="font-display text-3xl sm:text-4xl tt leading-tight">Get one useful idea, every week</h2>
                <p class="text-paper/70 mt-4 max-w-md">No spam, no fluff — just practical branding and growth tips you can actually use. Unsubscribe anytime.</p>
              </div>
              <form id="newsForm" class="lg:justify-self-end w-full max-w-md">
                <label for="newsEmail" class="sr-only">Email address</label>
                <div class="flex flex-col sm:flex-row gap-2">
                  <div class="relative flex-1">
                    <iconify-icon icon="lucide:mail" class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40" aria-hidden="true"></iconify-icon>
                    <input id="newsEmail" type="email" required placeholder="you@email.com" class="w-full rounded-full bg-white/5 border border-white/15 pl-11 pr-4 py-3.5 text-sm text-white placeholder-white/35 outline-none focus:border-accent transition" />
                  </div>
                  <button type="submit" class="rounded-full bg-accent text-white px-6 py-3.5 text-sm font-medium hover:bg-white hover:text-ink transition">Subscribe</button>
                </div>
                <p id="newsOk" class="hidden text-sm text-accent mt-3 items-center gap-1.5"><iconify-icon icon="lucide:check-circle" aria-hidden="true"></iconify-icon> You're in — check your inbox to confirm.</p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
