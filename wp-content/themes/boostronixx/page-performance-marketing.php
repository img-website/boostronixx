<?php
/**
 * Template Name: Performance Marketing
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- HERO -->
      <section class="relative pt-28 sm:pt-36 pb-14 grid-lines-d overflow-hidden">
        <span class="glow500 absolute -top-20 right-0 w-[420px] h-[420px]"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-white/50 mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-white font-medium">Performance Marketing</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-white/12 bg-white/5 px-3 py-1.5 text-xs font-medium text-white/70 mb-5"><span class="live inline-block h-2 w-2 rounded-full bg-accent"></span> Every rupee tracked &amp; accountable</div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt">Paid ads that pay for <span class="text-accent">themselves</span></h1>
              <p class="reveal text-white/60 mt-5 max-w-lg leading-relaxed" data-delay="1">As a performance marketing agency in Jaipur, we run Meta &amp; Google Ads on data — A/B tested, audience-segmented and optimised for the only metric that matters: return on ad spend.</p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="inline-flex items-center gap-2 rounded-full bg-accent text-white px-6 py-3.5 font-medium hover:bg-white hover:text-ink transition">Get a free ad audit <iconify-icon icon="lucide:arrow-right"></iconify-icon></a>
                <a href="#metrics" class="inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-3.5 font-medium hover:bg-white hover:text-ink transition"><iconify-icon icon="lucide:activity"></iconify-icon> See the metrics</a>
              </div>
            </div>
            <!-- ROAS DASHBOARD -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="rounded-xl2 bg-[#141414] border border-white/10 p-6 sm:p-8">
                <div class="flex items-center justify-between"><span class="text-xs tracking-[.2em] uppercase text-white/50">Campaign · live</span><span class="inline-flex items-center gap-1.5 text-xs text-white/60"><span class="live inline-block h-2 w-2 rounded-full bg-accent"></span> optimising</span></div>
                <div class="flex items-end gap-2 mt-5"><p class="font-display text-6xl sm:text-7xl tt text-accent"><span class="count" data-to="6">0</span>.<span class="count" data-to="4">0</span>x</p><p class="text-white/60 mb-3">ROAS</p></div>
                <div class="grid grid-cols-3 gap-3 mt-6">
                  <div class="rounded-xl bg-white/5 p-3"><p class="text-[11px] text-white/50">CTR</p><p class="font-display text-xl tt"><span class="count" data-to="3">0</span>.2%</p></div>
                  <div class="rounded-xl bg-white/5 p-3"><p class="text-[11px] text-white/50">Leads</p><p class="font-display text-xl tt"><span class="count" data-to="1240">0</span></p></div>
                  <div class="rounded-xl bg-white/5 p-3"><p class="inline-flex items-center gap-0.5 text-[11px] text-white/50">CPL <iconify-icon icon="lucide:arrow-down" class="text-accent"></iconify-icon></p><p class="font-display text-xl tt">₹<span class="count" data-to="38">0</span></p></div>
                </div>
                <div class="flex items-end gap-2 h-16 mt-6">
                  <div class="bar" style="--h:40%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:55%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:48%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:72%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:100%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                </div>
                <p class="text-[11px] text-white/40 mt-2">Illustrative campaign performance</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PLATFORMS -->
      <section class="py-16 sm:py-20 border-y border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-8">Where we run</p>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="reveal card rounded-2xl bg-white/5 border border-white/10 p-6 flex flex-col items-center text-center gap-3"><iconify-icon icon="simple-icons:meta" class="text-3xl text-accent"></iconify-icon><span class="font-medium text-sm">Meta Ads</span></div>
            <div class="reveal card rounded-2xl bg-white/5 border border-white/10 p-6 flex flex-col items-center text-center gap-3" data-delay="1"><iconify-icon icon="simple-icons:googleads" class="text-3xl text-accent"></iconify-icon><span class="font-medium text-sm">Google Ads</span></div>
            <div class="reveal card rounded-2xl bg-white/5 border border-white/10 p-6 flex flex-col items-center text-center gap-3" data-delay="2"><iconify-icon icon="simple-icons:youtube" class="text-3xl text-accent"></iconify-icon><span class="font-medium text-sm">YouTube Ads</span></div>
            <div class="reveal card rounded-2xl bg-white/5 border border-white/10 p-6 flex flex-col items-center text-center gap-3" data-delay="3"><iconify-icon icon="simple-icons:linkedin" class="text-3xl text-accent"></iconify-icon><span class="font-medium text-sm">LinkedIn Ads</span></div>
          </div>
        </div>
      </section>

      <!-- A/B TESTING -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">We never guess</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Every creative earns its budget</h2>
            <p class="reveal text-white/60 mt-5 max-w-md leading-relaxed" data-delay="1">As a PPC company in Jaipur, we A/B test headlines, ad creative and audience segments against each other, then shift spend to the winners — continuously. No favourites, just data.</p>
            <div class="reveal flex flex-wrap gap-2 mt-7 text-sm" data-delay="2">
              <span class="rounded-full border border-white/15 px-3 py-1.5">Creative testing</span>
              <span class="rounded-full border border-white/15 px-3 py-1.5">Audience splits</span>
              <span class="rounded-full border border-white/15 px-3 py-1.5">Landing-page CRO</span>
            </div>
          </div>
          <div class="reveal grid grid-cols-2 gap-4" data-delay="1">
            <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
              <div class="rounded-xl bg-gradient-to-br from-white/10 to-transparent h-24 grid place-items-center text-white/40 text-xs">Variant A</div>
              <div class="flex items-center justify-between mt-3"><span class="text-xs text-white/50">CTR</span><span class="font-display tt">1.8%</span></div>
              <div class="h-1.5 rounded-full bg-white/10 mt-2 overflow-hidden"><span class="block h-full w-[45%] bg-white/40"></span></div>
            </div>
            <div class="rounded-2xl bg-accent/10 border border-accent/40 p-5 relative">
              <span class="absolute -top-2.5 right-4 rounded-full bg-accent text-white text-[10px] font-semibold px-2 py-0.5">Winner</span>
              <div class="rounded-xl bg-gradient-to-br from-accent/40 to-transparent h-24 grid place-items-center text-white text-xs">Variant B</div>
              <div class="flex items-center justify-between mt-3"><span class="text-xs text-white/50">CTR</span><span class="font-display tt text-accent">3.2%</span></div>
              <div class="h-1.5 rounded-full bg-white/10 mt-2 overflow-hidden"><span class="block h-full w-[88%] bg-accent"></span></div>
            </div>
          </div>
        </div>
      </section>

      <!-- METRICS -->
      <section id="metrics" class="py-20 sm:py-28 border-y border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Metrics that matter</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A performance marketing agency in Jaipur that optimises for revenue, not reach</h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:trending-up"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">ROAS</h3><p class="text-white/55 text-sm mt-1.5">Return on every rupee of ad spend.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:user-plus"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Cost per lead</h3><p class="text-white/55 text-sm mt-1.5">Driven down without losing quality.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:mouse-pointer-click"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">CTR &amp; CVR</h3><p class="text-white/55 text-sm mt-1.5">Creative and funnel efficiency.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:wallet"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">CAC &amp; LTV</h3><p class="text-white/55 text-sm mt-1.5">Sustainable, profitable growth.</p></div>
          </div>
          <!-- IMAGE PLACEHOLDER -->
          <figure class="imgph rounded-xl2 aspect-[16/6] bg-white/[0.04] border border-white/10 mt-6 reveal">
            <img src="/wp-content/themes/boostronixx/assets/img/ads-manager.avif" alt="Meta and Google Ads manager dashboard showing ROAS and campaign performance" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b>Ads dashboard · 1600×600</b><span>Screenshot of Meta Ads Manager / Google Ads with ROAS, CPL and conversion columns. Anonymise account data.</span></figcaption>
          </figure>
        </div>
      </section>

      <!-- PROCESS -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Our process</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Audit. Build. Test. Scale.</h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal card rounded-xl2 bg-white/5 border border-white/10 p-7"><span class="font-display text-5xl tt text-accent/40">01</span><h3 class="font-display text-xl tt mt-3">Audit</h3><p class="text-white/55 text-sm mt-2 leading-relaxed">We review your account, tracking and funnel to find the leaks and the levers.</p></div>
            <div class="reveal card rounded-xl2 bg-white/5 border border-white/10 p-7" data-delay="1"><span class="font-display text-5xl tt text-accent/40">02</span><h3 class="font-display text-xl tt mt-3">Build</h3><p class="text-white/55 text-sm mt-2 leading-relaxed">Clean tracking, sharp audiences, and creatives built to stop the scroll.</p></div>
            <div class="reveal card rounded-xl2 bg-white/5 border border-white/10 p-7" data-delay="2"><span class="font-display text-5xl tt text-accent/40">03</span><h3 class="font-display text-xl tt mt-3">Test</h3><p class="text-white/55 text-sm mt-2 leading-relaxed">Structured A/B tests to learn what your audience actually responds to.</p></div>
            <div class="reveal card rounded-xl2 bg-white/5 border border-white/10 p-7" data-delay="3"><span class="font-display text-5xl tt text-accent/40">04</span><h3 class="font-display text-xl tt mt-3">Scale</h3><p class="text-white/55 text-sm mt-2 leading-relaxed">Pour budget into winners and expand — protecting efficiency as you grow.</p></div>
          </div>
          <div class="reveal mt-8 rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4" data-delay="1">
            <span class="grid place-items-center h-12 w-12 rounded-full bg-accent text-white shrink-0"><iconify-icon icon="lucide:badge-check" class="text-xl"></iconify-icon></span>
            <p class="text-sm text-white/65">Managed by the BoostronixX performance team — your Google and Facebook Ads agency in Jaipur and lead generation company in Jaipur, certified on Meta &amp; Google and reporting ROAS, CPL and leads transparently every month.</p>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28 border-t border-white/10">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Paid ads, answered</h2></div>
          <div class="space-y-3">
            <div class="faq border border-white/12 rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">What ad budget do I need to start?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-white/60 text-sm leading-relaxed">It depends on your goals and market. Whether you're starting with a Meta Ads agency Jaipur setup or a search-led Google campaign, we'll recommend a sensible starting budget on your audit call so there's enough room to test, learn and find what converts before scaling.</div></div></div>
            <div class="faq border border-white/12 rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Is the ad spend included in your fee?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-white/60 text-sm leading-relaxed">No — ad spend is paid directly to the platforms (Meta, Google) from your own account. Our management fee is separate and agreed up front.</div></div></div>
            <div class="faq border border-white/12 rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">How soon will I see results?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-white/60 text-sm leading-relaxed">Our PPC services in Jaipur can drive traffic and leads within days, but the first few weeks are a learning phase. With conversion tracking and retargeting in place, performance typically stabilises and improves over the first 30–60 days as testing compounds.</div></div></div>
            <div class="faq border border-white/12 rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you guarantee a specific ROAS?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-white/60 text-sm leading-relaxed">No honest agency can guarantee an exact ROAS — it depends on your offer, margins and market. What we guarantee is the rigorous, ROAS-driven ads Jaipur businesses actually need: structured A/B testing, clean conversion tracking and transparent reporting on real performance.</div></div></div>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="pb-20 sm:pb-28 pt-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Pairs well with</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/seo-services/" class="reveal card group rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4"><span class="grid place-items-center h-11 w-11 rounded-xl bg-white/10 text-accent text-xl"><iconify-icon icon="lucide:search"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">SEO Services</span><span class="text-xs text-white/50">Organic + paid</span></span><iconify-icon icon="lucide:arrow-right" class="text-white/50 group-hover:text-accent transition"></iconify-icon></a>
            <a href="/social-media-marketing/" class="reveal card group rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-white/10 text-accent text-xl"><iconify-icon icon="lucide:thumbs-up"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Social Media</span><span class="text-xs text-white/50">Creative fuel</span></span><iconify-icon icon="lucide:arrow-right" class="text-white/50 group-hover:text-accent transition"></iconify-icon></a>
            <a href="/digital-marketing/" class="reveal card group rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-white/10 text-accent text-xl"><iconify-icon icon="lucide:line-chart"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Digital Marketing</span><span class="text-xs text-white/50">Full funnel</span></span><iconify-icon icon="lucide:arrow-right" class="text-white/50 group-hover:text-accent transition"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-white/5 border border-white/10 px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <span class="glow500 absolute -bottom-20 left-1/3 w-[420px] h-[420px]"></span>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">See where your ad spend is leaking</h2>
              <p class="text-white/60 mt-5 text-lg max-w-xl">Get a free audit from a performance marketing agency in Jaipur that lives in the numbers — we'll show you the quick wins and what scaling could look like.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="inline-flex items-center gap-2 rounded-full bg-accent text-white px-7 py-4 font-medium hover:bg-white hover:text-ink transition">Get my free ad audit <iconify-icon icon="lucide:arrow-right"></iconify-icon></a>
                <a href="tel:+918058212202" class="inline-flex items-center gap-2 rounded-full border border-white/20 px-7 py-4 font-medium hover:bg-white hover:text-ink transition"><iconify-icon icon="lucide:phone"></iconify-icon> +91 80582 12202</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
