<?php
/**
 * Template Name: Website Design
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- HERO: browser building in -->
      <section class="relative pt-28 sm:pt-36 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Website Design</span>
          </nav>
          <div class="text-center max-w-3xl mx-auto">
            <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:gauge" class="text-accent text-sm"></iconify-icon> Fast · Responsive · SEO-ready</div>
            <h1 class="reveal font-display text-[2.6rem] leading-[0.98] sm:text-7xl tt">Websites that load fast<br class="hidden sm:block" /> &amp; <span class="text-accent">convert faster</span></h1>
            <p class="reveal text-ink-soft mt-5 max-w-xl mx-auto leading-relaxed" data-delay="1">As a website design company in Jaipur, we build everything from marketing sites to product front-ends — engineered for Core Web Vitals, built to convert, and easy for your team to manage.</p>
            <div class="reveal flex flex-wrap items-center justify-center gap-3 mt-7" data-delay="2">
              <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Build my website</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
              <a href="#perf" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:zap" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See performance</span></a>
            </div>
          </div>

          <!-- BROWSER MOCK -->
          <div class="reveal mt-12 max-w-4xl mx-auto" data-delay="2">
            <div class="bg-paper border border-line rounded-[1.25rem] shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] overflow-hidden">
              <div class="flex items-center gap-2 px-4 py-3 border-b border-line bg-surface">
                <span class="h-3 w-3 rounded-full bg-[#ff5f57]"></span><span class="h-3 w-3 rounded-full bg-[#febc2e]"></span><span class="h-3 w-3 rounded-full bg-[#28c840]"></span>
                <span class="ml-3 flex-1 rounded-full bg-paper border border-line px-3 py-1 text-xs text-ink-soft inline-flex items-center gap-2"><iconify-icon icon="lucide:lock" class="text-[11px] text-accent"></iconify-icon> www.yourbrand.com</span>
                <iconify-icon icon="lucide:refresh-cw" class="text-ink-soft text-sm"></iconify-icon>
              </div>
              <div class="p-5 sm:p-7">
                <div class="blk b1 flex items-center justify-between mb-5"><span class="font-display tt text-lg">YourBrand</span><div class="hidden sm:flex gap-4 text-xs text-ink-soft"><span>Home</span><span>Work</span><span>About</span><span class="rounded-full bg-ink text-paper px-3 py-1.5">Contact</span></div></div>
                <div class="blk b2 grid sm:grid-cols-2 gap-5 items-center">
                  <div><div class="h-9 w-3/4 rounded bg-surface-2 mb-2"></div><div class="h-9 w-1/2 rounded bg-accent/20 mb-3"></div><div class="h-3 w-full rounded bg-surface-2 mb-1.5"></div><div class="h-3 w-2/3 rounded bg-surface-2 mb-4"></div><div class="h-9 w-32 rounded-full bg-ink"></div></div>
                  <div class="rounded-xl bg-gradient-to-br from-accent/30 to-accent/5 aspect-[4/3] grid place-items-center"><iconify-icon icon="lucide:image" class="text-3xl text-accent/50"></iconify-icon></div>
                </div>
                <div class="blk b3 grid grid-cols-3 gap-3 mt-5">
                  <div class="rounded-xl border border-line p-3"><div class="h-7 w-7 rounded-lg bg-accent/20 mb-2"></div><div class="h-2.5 w-full rounded bg-surface-2"></div></div>
                  <div class="rounded-xl border border-line p-3"><div class="h-7 w-7 rounded-lg bg-accent/20 mb-2"></div><div class="h-2.5 w-full rounded bg-surface-2"></div></div>
                  <div class="rounded-xl border border-line p-3"><div class="h-7 w-7 rounded-lg bg-accent/20 mb-2"></div><div class="h-2.5 w-full rounded bg-surface-2"></div></div>
                </div>
                <div class="blk b4 mt-5 rounded-xl bg-ink text-paper p-4 flex items-center justify-between"><span class="font-display tt">Ready to grow?</span><span class="rounded-full bg-accent text-paper text-xs px-3 py-1.5">Get started</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- RESPONSIVE SWITCHER -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 text-center">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Looks right everywhere</p>
          <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Responsive website designing in Jaipur, pixel-perfect on every screen</h2>
          <div class="reveal flex items-center justify-center gap-2 mt-8" data-delay="1">
            <button class="device-btn active rounded-full border border-line px-4 py-2 text-sm font-medium inline-flex items-center gap-2" data-w="100%"><iconify-icon icon="lucide:monitor"></iconify-icon> Desktop</button>
            <button class="device-btn rounded-full border border-line px-4 py-2 text-sm font-medium inline-flex items-center gap-2" data-w="640px"><iconify-icon icon="lucide:tablet"></iconify-icon> Tablet</button>
            <button class="device-btn rounded-full border border-line px-4 py-2 text-sm font-medium inline-flex items-center gap-2" data-w="360px"><iconify-icon icon="lucide:smartphone"></iconify-icon> Mobile</button>
          </div>
          <div class="reveal mt-8 flex justify-center" data-delay="1">
            <div id="viewport" class="bg-paper border border-line rounded-[1.25rem] shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] overflow-hidden mx-auto w-full" style="max-width:100%">
              <div class="flex items-center gap-2 px-4 py-2.5 border-b border-line bg-surface"><span class="h-2.5 w-2.5 rounded-full bg-[#ff5f57]"></span><span class="h-2.5 w-2.5 rounded-full bg-[#febc2e]"></span><span class="h-2.5 w-2.5 rounded-full bg-[#28c840]"></span></div>
              <div class="p-5">
                <div class="flex items-center justify-between mb-4"><span class="font-display tt">YourBrand</span><span class="rounded-full bg-ink text-paper text-[11px] px-3 py-1.5">Menu</span></div>
                <div class="rounded-xl bg-gradient-to-br from-accent/25 to-accent/5 h-28 grid place-items-center mb-3"><span class="font-display tt text-xl">Hero section</span></div>
                <div class="grid grid-cols-2 gap-3"><div class="rounded-lg border border-line h-16"></div><div class="rounded-lg border border-line h-16"></div></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PERFORMANCE GAUGES -->
      <section id="perf" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Built for speed</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Performance you can measure</h2><p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">As a web development company in Jaipur, we engineer for Core Web Vitals and page speed from day one — because fast sites rank better, convert better and feel better.</p></div>
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-4" data-delay="1">
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#2e7d5b" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:24" /></svg>
              <p class="font-display text-2xl tt -mt-20">98</p>
              <p class="text-sm text-ink-soft mt-14">Performance</p>
            </div>
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#2e7d5b" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:18" /></svg>
              <p class="font-display text-2xl tt -mt-20">100</p>
              <p class="text-sm text-ink-soft mt-14">Accessibility</p>
            </div>
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#fa5539" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:28" /></svg>
              <p class="font-display text-2xl tt -mt-20">95</p>
              <p class="text-sm text-ink-soft mt-14">Best Practices</p>
            </div>
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#2e7d5b" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:20" /></svg>
              <p class="font-display text-2xl tt -mt-20">99</p>
              <p class="text-sm text-ink-soft mt-14">SEO</p>
            </div>
          </div>
          <p class="reveal text-xs text-ink-soft mt-5" data-delay="2">Illustrative Lighthouse scores — we target 90+ across the board on every build.</p>
        </div>
      </section>

      <!-- WHAT WE BUILD -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">What we build</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A website design company in Jaipur for every job</h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal card rounded-xl2 bg-paper border border-line p-7"><span class="text-accent text-2xl"><iconify-icon icon="lucide:globe"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Marketing sites</h3><p class="text-ink-soft text-sm mt-1.5">Custom website design for Jaipur brands that tells your story and converts.</p></div>
            <div class="reveal card rounded-xl2 bg-paper border border-line p-7" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:mouse-pointer-click"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Landing pages</h3><p class="text-ink-soft text-sm mt-1.5">Focused, fast pages built for campaigns &amp; ads.</p></div>
            <div class="reveal card rounded-xl2 bg-paper border border-line p-7" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:shopping-bag"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">E-commerce</h3><p class="text-ink-soft text-sm mt-1.5">Ecommerce website design in Jaipur — stores easy to shop and easy to run.</p></div>
            <div class="reveal card rounded-xl2 bg-paper border border-line p-7" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:layout-dashboard"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Web apps &amp; front-ends</h3><p class="text-ink-soft text-sm mt-1.5">Product UIs built from your designs.</p></div>
          </div>
          <!-- IMAGE PLACEHOLDER -->
          <figure class="imgph rounded-xl2 aspect-[16/7] bg-surface-2 border border-line mt-6 reveal">
            <img src="/wp-content/themes/boostronixx/assets/img/website-showcase.avif" alt="Responsive BoostronixX website shown across desktop, tablet and mobile devices" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b>Device showcase · 1600×700</b><span>A real client website displayed across desktop, tablet and phone frames — proves responsive, polished delivery.</span></figcaption>
          </figure>
        </div>
      </section>

      <!-- PROCESS -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">How we build</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Design. Build. Test. Launch.</h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal card rounded-xl2 border border-line p-7"><span class="font-display text-5xl tt text-accent/25">01</span><h3 class="font-display text-xl tt mt-3">Design</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">UX and UI mapped to your brand and conversion goals.</p></div>
            <div class="reveal card rounded-xl2 border border-line p-7" data-delay="1"><span class="font-display text-5xl tt text-accent/25">02</span><h3 class="font-display text-xl tt mt-3">Build</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Clean, responsive, mobile-first code — custom or WordPress — with an easy-to-edit CMS.</p></div>
            <div class="reveal card rounded-xl2 border border-line p-7" data-delay="2"><span class="font-display text-5xl tt text-accent/25">03</span><h3 class="font-display text-xl tt mt-3">Test</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Speed, cross-device, SEO and accessibility checks.</p></div>
            <div class="reveal card rounded-xl2 border border-line p-7" data-delay="3"><span class="font-display text-5xl tt text-accent/25">04</span><h3 class="font-display text-xl tt mt-3">Launch</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Go live with analytics, training and ongoing support.</p></div>
          </div>
          <div class="reveal mt-8 rounded-2xl border border-line bg-surface p-6 flex items-center gap-4" data-delay="1">
            <span class="grid place-items-center h-12 w-12 rounded-full bg-ink text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-xl text-accent"></iconify-icon></span>
            <p class="text-sm text-ink-soft">Built by the BoostronixX web team — affordable website design in Jaipur with SEO-ready markup, Core Web Vitals tuned, and a CMS your team can actually use.</p>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Website questions</h2></div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl bg-paper px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">How long does a website take?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Most marketing websites take 4–8 weeks depending on the number of pages, content readiness and complexity. We'll share a clear timeline and milestones in your proposal.</div></div></div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Can I update the site myself?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes. We build on an easy-to-manage CMS and include training, so your team can edit content, add pages and publish without touching code.</div></div></div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Is the website SEO-ready?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Always. Whether it's a custom build or WordPress website design, clean markup, fast load times, proper headings, schema and mobile-first design come standard — and our SEO team can take it further from there.</div></div></div>
            <div class="faq border border-line rounded-2xl bg-paper px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you offer maintenance after launch?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes — we offer ongoing care plans for updates, backups, security and improvements, so your site stays fast and secure.</div></div></div>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Pairs well with</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/ui-ux-design/" class="reveal card group rounded-2xl border border-line p-6 flex items-center gap-4"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:figma"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">UI/UX Design</span><span class="text-xs text-ink-soft">Design the experience</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/seo-services/" class="reveal card group rounded-2xl border border-line p-6 flex items-center gap-4" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:search"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">SEO Services</span><span class="text-xs text-ink-soft">Get it ranking</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/brand-consulting/" class="reveal card group rounded-2xl border border-line p-6 flex items-center gap-4" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Brand Consulting</span><span class="text-xs text-ink-soft">Look the part</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Let's build a site that works as hard as you do</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us about your project — we'll scope a fast, beautiful, SEO-ready website around your goals.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Get a website quote</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="/portfolio/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:briefcase" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See sites we've built</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
