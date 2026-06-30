<?php
/**
 * Template Name: UI/UX Design
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- HERO: wireframe -> hifi -->
      <section class="relative pt-28 sm:pt-36 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">UI/UX Design</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:figma" class="text-accent text-sm"></iconify-icon> Research-led product &amp; interface design</div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt">Interfaces people <span class="text-accent">love</span> to use</h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">As a UI/UX design agency in Jaipur, we take you from wireframes to polished, accessible UI and scalable design systems — products that feel obvious, look beautiful and convert.</p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Design my product</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="#process" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:route" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">Our design process</span></a>
              </div>
              <p class="reveal text-xs text-ink-soft mt-5" data-delay="3"><iconify-icon icon="lucide:hand-pointer" class="text-accent"></iconify-icon> Tip: tap the mockup to toggle wireframe ↔ final UI.</p>
            </div>
            <!-- STAGE: wf/hf -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div id="stage" class="stage bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-5 sm:p-7 relative select-none">
                <div class="flex items-center justify-between mb-4"><span class="text-xs tracking-[.2em] uppercase text-ink-soft">Checkout screen</span><span class="text-xs text-ink-soft inline-flex items-center gap-1"><span class="h-2 w-2 rounded-full bg-accent"></span> <span id="stageLabel">Final UI</span></span></div>
                <div class="relative h-[300px]">
                  <!-- wireframe -->
                  <div class="wf absolute inset-0">
                    <div class="space-y-3">
                      <div class="h-8 w-2/3 rounded bg-surface-2 border border-dashed border-line"></div>
                      <div class="grid grid-cols-2 gap-3"><div class="h-20 rounded bg-surface-2 border border-dashed border-line"></div><div class="h-20 rounded bg-surface-2 border border-dashed border-line"></div></div>
                      <div class="h-4 w-1/2 rounded bg-surface-2 border border-dashed border-line"></div>
                      <div class="h-4 w-3/4 rounded bg-surface-2 border border-dashed border-line"></div>
                      <div class="h-11 w-full rounded bg-surface-2 border border-dashed border-line grid place-items-center text-xs text-ink-soft">[ button ]</div>
                    </div>
                  </div>
                  <!-- hi-fi -->
                  <div class="hf absolute inset-0">
                    <div class="space-y-3">
                      <p class="font-display text-2xl tt">Complete your order</p>
                      <div class="grid grid-cols-2 gap-3">
                        <div class="rounded-xl border border-line p-3"><div class="h-10 rounded-lg bg-gradient-to-br from-accent/30 to-accent/10"></div><p class="text-xs mt-2 font-medium">Premium plan</p><p class="text-[11px] text-ink-soft">₹2,499 / mo</p></div>
                        <div class="rounded-xl border border-accent bg-accent/5 p-3"><div class="h-10 rounded-lg bg-gradient-to-br from-ink/80 to-ink/40"></div><p class="text-xs mt-2 font-medium">Annual <span class="text-accent">−20%</span></p><p class="text-[11px] text-ink-soft">₹1,999 / mo</p></div>
                      </div>
                      <div class="flex items-center justify-between text-sm"><span class="text-ink-soft">Total</span><span class="font-display tt text-lg">₹23,988</span></div>
                      <div class="rounded-full bg-ink text-paper text-center text-sm font-medium py-3">Pay securely</div>
                      <p class="text-[11px] text-ink-soft text-center inline-flex items-center justify-center gap-1 w-full"><iconify-icon icon="lucide:lock" class="text-accent"></iconify-icon> 256-bit encrypted</p>
                    </div>
                  </div>
                  <span class="uicursor absolute bottom-6 right-10 text-ink text-xl pointer-events-none"><iconify-icon icon="lucide:mouse-pointer-2"></iconify-icon></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- WHAT WE DESIGN -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">What we design</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">What our UI/UX design agency in Jaipur ships</h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="reveal cmp rounded-xl2 border border-line p-7"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:search-check"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">UX Research</h3><p class="text-ink-soft text-sm mt-2">Interviews, flows and journey mapping that ground every design decision in real user behaviour.</p></div>
            <div class="reveal cmp rounded-xl2 border border-line p-7" data-delay="1"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:layout-template"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Wireframing</h3><p class="text-ink-soft text-sm mt-2">Low-fi structure to nail flow before a single pixel is polished.</p></div>
            <div class="reveal cmp rounded-xl2 border border-line p-7" data-delay="2"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">UI Design</h3><p class="text-ink-soft text-sm mt-2">Beautiful, on-brand, pixel-perfect interfaces — from web to mobile app UI design in Jaipur.</p></div>
            <div class="reveal cmp rounded-xl2 border border-line p-7"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:mouse-pointer-click"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Prototyping</h3><p class="text-ink-soft text-sm mt-2">Clickable prototypes — the way a product design agency in Jaipur tests and feels the experience early.</p></div>
            <div class="reveal cmp rounded-xl2 border border-line p-7" data-delay="1"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:component"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Design Systems</h3><p class="text-ink-soft text-sm mt-2">Reusable components and tokens that keep teams fast &amp; consistent.</p></div>
            <div class="reveal cmp rounded-xl2 border border-line p-7" data-delay="2"><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="lucide:accessibility"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">Accessibility</h3><p class="text-ink-soft text-sm mt-2">WCAG-minded contrast, focus states and inclusive patterns.</p></div>
          </div>
        </div>
      </section>

      <!-- DESIGN SYSTEM SHOWCASE -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">A system, not just screens</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Why teams pick our UX design company in Jaipur</h2></div>
          <div class="grid lg:grid-cols-3 gap-5">
            <!-- color tokens -->
            <div class="reveal rounded-xl2 bg-paper border border-line p-6">
              <p class="text-xs tracking-[.2em] uppercase text-ink-soft mb-4">Colour tokens</p>
              <div class="grid grid-cols-4 gap-2">
                <div class="token rounded-xl aspect-square" style="background:#fa5539"></div>
                <div class="token rounded-xl aspect-square" style="background:#0a0a0a"></div>
                <div class="token rounded-xl aspect-square" style="background:#4a463f"></div>
                <div class="token rounded-xl aspect-square border border-line" style="background:#f6f4f1"></div>
                <div class="token rounded-xl aspect-square" style="background:#2e7d5b"></div>
                <div class="token rounded-xl aspect-square" style="background:#e6e1da"></div>
                <div class="token rounded-xl aspect-square" style="background:#ffb38a"></div>
                <div class="token rounded-xl aspect-square border border-line" style="background:#ffffff"></div>
              </div>
            </div>
            <!-- type scale -->
            <div class="reveal rounded-xl2 bg-paper border border-line p-6" data-delay="1">
              <p class="text-xs tracking-[.2em] uppercase text-ink-soft mb-4">Type scale</p>
              <div class="space-y-1.5">
                <p class="font-display text-3xl tt leading-none">Display</p>
                <p class="font-display text-xl tt">Heading</p>
                <p class="text-base">Body text for clarity</p>
                <p class="text-xs tracking-[.2em] uppercase text-ink-soft">Caption / label</p>
              </div>
            </div>
            <!-- components -->
            <div class="reveal rounded-xl2 bg-paper border border-line p-6" data-delay="2">
              <p class="text-xs tracking-[.2em] uppercase text-ink-soft mb-4">Components</p>
              <div class="space-y-3">
                <div class="flex gap-2"><span class="rounded-full bg-ink text-paper text-xs px-3 py-1.5">Primary</span><span class="rounded-full border border-line text-xs px-3 py-1.5">Secondary</span></div>
                <div class="rounded-lg border border-line px-3 py-2 text-xs text-ink-soft flex items-center gap-2"><iconify-icon icon="lucide:mail"></iconify-icon> input field</div>
                <div class="flex items-center gap-2"><span class="h-5 w-9 rounded-full bg-accent relative"><span class="absolute right-0.5 top-0.5 h-4 w-4 rounded-full bg-white"></span></span><span class="text-xs text-ink-soft">toggle</span></div>
                <div class="flex gap-1.5"><span class="rounded-md bg-accent/10 text-accent text-[10px] px-2 py-1">badge</span><span class="rounded-md bg-surface text-[10px] px-2 py-1 border border-line">chip</span></div>
              </div>
            </div>
          </div>
          <!-- IMAGE PLACEHOLDER -->
          <figure class="imgph rounded-xl2 aspect-[16/7] bg-surface-2 border border-line mt-5 reveal">
            <img src="/wp-content/themes/boostronixx/assets/img/ui-screens.avif" alt="A set of polished BoostronixX UI/UX product screens and components" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b>UI screens · 1600×700</b><span>Mockup of real product screens / a Figma design-system board — showing components, app screens and prototypes.</span></figcaption>
          </figure>
        </div>
      </section>

      <!-- PROCESS -->
      <section id="process" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">How we design</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Five steps to a product that works</h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="reveal rounded-xl2 border border-line p-6"><span class="font-display text-4xl tt text-accent/25">01</span><h3 class="font-display text-lg tt mt-2">Research</h3><p class="text-ink-soft text-sm mt-1.5">Users, goals, flows.</p></div>
            <div class="reveal rounded-xl2 border border-line p-6" data-delay="1"><span class="font-display text-4xl tt text-accent/25">02</span><h3 class="font-display text-lg tt mt-2">Wireframe</h3><p class="text-ink-soft text-sm mt-1.5">Structure &amp; flow.</p></div>
            <div class="reveal rounded-xl2 border border-line p-6" data-delay="2"><span class="font-display text-4xl tt text-accent/25">03</span><h3 class="font-display text-lg tt mt-2">UI design</h3><p class="text-ink-soft text-sm mt-1.5">Polished visuals.</p></div>
            <div class="reveal rounded-xl2 border border-line p-6" data-delay="3"><span class="font-display text-4xl tt text-accent/25">04</span><h3 class="font-display text-lg tt mt-2">Prototype</h3><p class="text-ink-soft text-sm mt-1.5">Test &amp; refine.</p></div>
            <div class="reveal rounded-xl2 border border-line p-6"><span class="font-display text-4xl tt text-accent/25">05</span><h3 class="font-display text-lg tt mt-2">Handoff</h3><p class="text-ink-soft text-sm mt-1.5">Dev-ready specs.</p></div>
          </div>
          <div class="reveal mt-8 rounded-2xl border border-line bg-surface p-6 flex flex-col sm:flex-row sm:items-center gap-5" data-delay="1">
            <span class="grid place-items-center h-14 w-14 rounded-full bg-ink text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-2xl text-accent"></iconify-icon></span>
            <div class="flex-1"><p class="font-display tt text-lg">Designed by the BoostronixX product team</p><p class="text-ink-soft text-sm mt-1">5+ years on SaaS product design in Jaipur, app design and D2C — the UI/UX design agency in Jaipur teams trust for accessibility-minded, developer-friendly handoff every time.</p></div>
            <a href="/edoovi-erp/" class="text-sm font-medium text-ink hover:text-accent inline-flex items-center gap-1.5 shrink-0">See the Edoovi case study <iconify-icon icon="lucide:arrow-up-right"></iconify-icon></a>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Design questions</h2></div>
          <div class="space-y-3">
            <div class="faq border border-white/12 rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you design in Figma?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-paper/60 text-sm leading-relaxed">Yes — all our Figma design in Jaipur lives in a tidy, organised file with components, prototypes and dev-ready specs you fully own.</div></div></div>
            <div class="faq border border-white/12 rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Can you work with our developers?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-paper/60 text-sm leading-relaxed">Absolutely. We deliver developer-friendly handoff — specs, tokens and assets — and can collaborate directly with your engineering team, or build it ourselves.</div></div></div>
            <div class="faq border border-white/12 rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you also build the front-end?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-paper/60 text-sm leading-relaxed">Yes — as an app design agency in Jaipur with in-house developers, our website &amp; development service takes designs all the way to a fast, responsive live build.</div></div></div>
            <div class="faq border border-white/12 rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">What about accessibility?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-paper/60 text-sm leading-relaxed">We design with WCAG in mind — sufficient colour contrast, clear focus states, sensible tap targets and inclusive patterns — so your product works for everyone.</div></div></div>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Pairs well with</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/website-design/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:monitor-smartphone"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Website Design</span><span class="text-xs text-ink-soft">Design, built live</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/brand-consulting/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Brand Consulting</span><span class="text-xs text-ink-soft">Identity first</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/services/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:layout-grid"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">All Services</span><span class="text-xs text-ink-soft">The full stack</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Let's design something people love</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Show us your product or idea — we'll map the experience and a path to a beautiful, usable design.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Start a design project</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="/portfolio/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See product work</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
