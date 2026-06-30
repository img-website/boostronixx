<?php
/**
 * Template Name: Brand Consulting
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
      <section class="relative pt-28 sm:pt-36 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Brand Consulting</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:palette" class="text-accent text-sm"></iconify-icon> Brand strategy &amp; identity</div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt">A brand people <span class="text-accent">instantly recognise</span></h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">As a branding agency in Jaipur, we build positioning, strategy, naming, logo and a complete visual identity — researched, refined and designed to convert. We make sure you look like the leader you're becoming.</p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Start your brand</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="#blocks" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:layers" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">What's included</span></a>
              </div>
            </div>
            <!-- BRAND BOARD MOCK -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8">
                <div class="flex items-center justify-between mb-5"><span class="text-xs tracking-[.2em] uppercase text-ink-soft">Brand Board</span><span class="text-xs text-ink-soft">v1.0</span></div>
                <div class="grid grid-cols-3 gap-3">
                  <div class="bb-tile col-span-2 rounded-2xl bg-ink text-paper p-5 flex items-end min-h-[120px]"><span class="font-display text-3xl tt">Lumen<span class="text-accent">.</span></span></div>
                  <div class="bb-tile bb-accent rounded-2xl bg-accent grid place-items-center min-h-[120px]"><iconify-icon icon="lucide:sparkles" class="text-paper text-3xl"></iconify-icon></div>
                  <div class="bb-tile swatch rounded-xl h-14" style="background:#fa5539"></div>
                  <div class="bb-tile swatch rounded-xl h-14" style="background:#0a0a0a"></div>
                  <div class="bb-tile swatch rounded-xl h-14 border border-line" style="background:#f3ead2"></div>
                  <div class="bb-tile col-span-3 rounded-2xl bg-surface border border-line p-4"><p class="font-display tt text-xl">Aa Bb Cc — Bricolage Grotesque</p><p class="text-xs text-ink-soft mt-1">Confident, modern, human. 0123456789</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- STATEMENT BAND -->
      <section class="py-16 sm:py-20 bg-ink text-paper">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 text-center">
          <p class="reveal font-display text-2xl sm:text-4xl lg:text-5xl tt leading-[1.15]">A brand isn't your logo. It's the <span class="text-accent">feeling</span> people get — and the <span class="text-accent">reason</span> they choose you over everyone else.</p>
        </div>
      </section>

      <!-- BUILDING BLOCKS -->
      <section id="blocks" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The building blocks</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">What our branding agency in Jaipur builds</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="reveal rounded-xl2 border border-line p-7 hover:border-accent transition"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:compass"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Brand Strategy</h3><p class="text-ink-soft text-sm mt-2">Research, audience and the core idea everything builds on.</p></div>
            <div class="reveal rounded-xl2 border border-line p-7 hover:border-accent transition" data-delay="1"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:crosshair"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Positioning</h3><p class="text-ink-soft text-sm mt-2">A sharp, ownable space in your customer's mind.</p></div>
            <div class="reveal rounded-xl2 border border-line p-7 hover:border-accent transition" data-delay="2"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:type"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Naming &amp; Voice</h3><p class="text-ink-soft text-sm mt-2">A name and tone that sound unmistakably you.</p></div>
            <div class="reveal rounded-xl2 border border-line p-7 hover:border-accent transition"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:pen-tool"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Logo &amp; Identity</h3><p class="text-ink-soft text-sm mt-2">A flexible logo system and signature visual marks.</p></div>
            <div class="reveal rounded-xl2 border border-line p-7 hover:border-accent transition" data-delay="1"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:swatch-book"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Visual System</h3><p class="text-ink-soft text-sm mt-2">Colour, type, imagery and layout that scale anywhere.</p></div>
            <div class="reveal rounded-xl2 border border-line p-7 hover:border-accent transition" data-delay="2"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:book-marked"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Brand Guidelines</h3><p class="text-ink-soft text-sm mt-2">A clear rulebook so your brand stays consistent.</p></div>
          </div>
        </div>
      </section>

      <!-- PALETTE + TYPE SHOWCASE -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Crafted, not generated</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Colour and type with intent</h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">As a brand identity agency in Jaipur, we choose every palette and typeface for meaning and legibility — tested across screens, print and the real world before it ships.</p>
            <!-- IMAGE PLACEHOLDER -->
            <figure class="imgph rounded-xl2 aspect-[16/10] bg-surface-2 border border-line mt-8 reveal" data-delay="1">
              <img src="/wp-content/themes/boostronixx/assets/img/brand-moodboard.avif" alt="BoostronixX brand identity moodboard and collateral mockups" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b>Moodboard · 1280×800</b><span>Flat-lay of brand collateral — business cards, packaging, signage — or a moodboard grid. Shows identity applied in the real world.</span></figcaption>
            </figure>
          </div>
          <div class="reveal" data-delay="1">
            <div class="grid grid-cols-5 gap-2 mb-4">
              <div class="swatch rounded-xl aspect-square" style="background:#fa5539"></div>
              <div class="swatch rounded-xl aspect-square" style="background:#0a0a0a"></div>
              <div class="swatch rounded-xl aspect-square" style="background:#f3ead2"></div>
              <div class="swatch rounded-xl aspect-square" style="background:#2e7d5b"></div>
              <div class="swatch rounded-xl aspect-square border border-line" style="background:#ffffff"></div>
            </div>
            <div class="rounded-xl2 bg-paper border border-line p-7">
              <p class="font-display text-6xl tt leading-none">Aa</p>
              <p class="text-ink-soft text-sm mt-3">Bricolage Grotesque · Display / Body</p>
              <div class="mt-4 space-y-1.5">
                <p class="font-display text-2xl tt">Bold headlines that lead.</p>
                <p class="text-base">Readable body text that builds trust and tells your story clearly.</p>
                <p class="text-xs tracking-[.25em] uppercase text-ink-soft">Captions &amp; labels</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PROCESS (vertical timeline) -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">How we build it</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">From blank page to brand book</h2>
          </div>
          <div class="vstep relative pl-14 space-y-8">
            <span class="vrail"></span>
            <div class="reveal relative"><span class="absolute -left-14 top-0 grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display tt">1</span><h3 class="font-display text-xl tt">Discovery</h3><p class="text-ink-soft text-sm mt-1.5 leading-relaxed">Workshops and research to understand your business, audience and competitors.</p></div>
            <div class="reveal relative" data-delay="1"><span class="absolute -left-14 top-0 grid place-items-center h-10 w-10 rounded-full bg-ink text-paper font-display tt">2</span><h3 class="font-display text-xl tt">Strategy</h3><p class="text-ink-soft text-sm mt-1.5 leading-relaxed">Positioning, messaging and the core idea your brand will stand for.</p></div>
            <div class="reveal relative" data-delay="1"><span class="absolute -left-14 top-0 grid place-items-center h-10 w-10 rounded-full bg-ink text-paper font-display tt">3</span><h3 class="font-display text-xl tt">Identity design</h3><p class="text-ink-soft text-sm mt-1.5 leading-relaxed">Logo, colour, type and visual language — explored, refined and chosen with you.</p></div>
            <div class="reveal relative" data-delay="2"><span class="absolute -left-14 top-0 grid place-items-center h-10 w-10 rounded-full bg-ink text-paper font-display tt">4</span><h3 class="font-display text-xl tt">System &amp; assets</h3><p class="text-ink-soft text-sm mt-1.5 leading-relaxed">Templates, collateral and ready-to-use files across every touchpoint.</p></div>
            <div class="reveal relative" data-delay="2"><span class="absolute -left-14 top-0 grid place-items-center h-10 w-10 rounded-full bg-ink text-paper font-display tt">5</span><h3 class="font-display text-xl tt">Guidelines &amp; handoff</h3><p class="text-ink-soft text-sm mt-1.5 leading-relaxed">A complete brand book so anyone can use your brand correctly.</p></div>
          </div>
        </div>
      </section>

      <!-- DELIVERABLES + WHY US -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">What's in your brand book</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Tangible deliverables, not just ideas</h2>
            <div class="grid sm:grid-cols-2 gap-3 mt-8">
              <div class="reveal flex items-center gap-3 rounded-xl bg-white/5 border border-white/10 p-4"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon><span class="text-sm">Logo suite &amp; lockups</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl bg-white/5 border border-white/10 p-4" data-delay="1"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon><span class="text-sm">Colour &amp; type system</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl bg-white/5 border border-white/10 p-4"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon><span class="text-sm">Brand voice &amp; messaging</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl bg-white/5 border border-white/10 p-4" data-delay="1"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon><span class="text-sm">Templates &amp; collateral</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl bg-white/5 border border-white/10 p-4"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon><span class="text-sm">Social &amp; ad kit</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl bg-white/5 border border-white/10 p-4" data-delay="1"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon><span class="text-sm">Full guidelines PDF</span></div>
            </div>
          </div>
          <div class="lg:pl-8">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Why BoostronixX</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Strategy-led, research-backed</h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1">Since 2021 our brand strategy in Jaipur has shaped 50+ brands across real estate, schools and D2C — from startup branding in Jaipur to full rebrands. We don't decorate; we make decisions that hold up commercially and look beautiful doing it.</p>
            <div class="reveal mt-7 rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4" data-delay="1">
              <span class="grid place-items-center h-12 w-12 rounded-full bg-accent text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-xl"></iconify-icon></span>
              <p class="text-sm text-paper/70">Designed &amp; reviewed by the BoostronixX brand team — strategy, design and copy under one roof.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Brand consulting in Jaipur, answered</h2></div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">How long does a brand identity take?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Most brand identities take 3–5 weeks depending on scope and the number of review rounds. A full strategy-plus-identity engagement can run a little longer — we'll share a clear timeline in your proposal.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do I own the logo and files?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes. Unlike a templated logo design company in Jaipur, we hand over real ownership — on final payment, full rights to your logo, identity and source files transfer to you, along with editable files where applicable.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Can you rebrand an existing business?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Absolutely — as a rebranding agency in Jaipur we handle full rebrands and refreshes, carrying forward the equity worth keeping while modernising everything that's holding you back.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you build the website too?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes — branding, UI/UX and website design are all in-house, so your new identity rolls out seamlessly across every channel.</div></div></div>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Pairs well with</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/ui-ux-design/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:figma"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">UI/UX Design</span><span class="text-xs text-ink-soft">Identity in product</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/website-design/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:monitor-smartphone"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Website Design</span><span class="text-xs text-ink-soft">Brand, live</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/social-media-marketing/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:thumbs-up"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Social Media</span><span class="text-xs text-ink-soft">Brand in the feed</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-accent text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.12]"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Let's build a brand worth remembering</h2>
              <p class="text-paper/90 mt-5 text-lg max-w-xl">Book a brand discovery call with the branding agency in Jaipur ambitious businesses trust — we'll explore your positioning and show you what's possible.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="inline-flex items-center gap-2 rounded-full bg-ink text-paper px-7 py-4 font-medium hover:bg-paper hover:text-ink transition">Book a discovery call <iconify-icon icon="lucide:arrow-right"></iconify-icon></a>
                <a href="/portfolio/" class="inline-flex items-center gap-2 rounded-full bg-paper/15 border border-paper/30 px-7 py-4 font-medium hover:bg-paper hover:text-ink transition"><iconify-icon icon="lucide:briefcase"></iconify-icon> See brands we've built</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
