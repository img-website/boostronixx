<?php
/**
 * Template Name: Services
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
      <section class="relative pt-28 sm:pt-36 pb-12 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:-30px;left:-50px"></span>
        <span class="orb orb-b" style="width:260px;height:260px;background:#ffc59e;bottom:-50px;right:8%"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Services</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <span class="h-2 w-2 rounded-full bg-accent"></span> Strategy · Creative · Performance — under one roof
              </div>
              <h1 class="reveal font-display text-[2.6rem] leading-[0.96] sm:text-7xl lg:text-[4.8rem] tt">
                Services that build<br class="hidden sm:block" />
                brands &amp; <span class="text-accent">drive growth</span>
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">
                Digital marketing services in Jaipur done right — from brand identity to SEO,
                ads and product design. Seven core services, one accountable team, and
                dashboards that prove the work.
              </p>
              <a href="#services-list" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-6 font-medium" data-delay="2">
                <span class="relative z-10 sheen-text">See all services</span>
                <iconify-icon icon="lucide:arrow-down" class="relative z-10"></iconify-icon>
              </a>
            </div>
          </div>

          <!-- stat band (E-E-A-T: experience signals) -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px mt-12 rounded-2xl overflow-hidden border border-line bg-line" data-delay="2">
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="5">0</span>+</p><p class="text-ink-soft text-sm mt-1">Years of experience</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="50">0</span>+</p><p class="text-ink-soft text-sm mt-1">Brands served</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="100">0</span>+</p><p class="text-ink-soft text-sm mt-1">Projects delivered</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="4">0</span>.9★</p><p class="text-ink-soft text-sm mt-1">Average rating</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== TOOLS MARQUEE (authority) ===================== -->
      <section class="py-5 border-y border-line bg-surface overflow-hidden">
        <div class="marquee text-ink/45">
          <div class="flex items-center gap-10 pr-10 text-2xl">
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:googleanalytics"></iconify-icon> Analytics</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:googlesearchconsole"></iconify-icon> Search Console</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:googleads"></iconify-icon> Google Ads</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:meta"></iconify-icon> Meta Ads</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:figma"></iconify-icon> Figma</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:semrush"></iconify-icon> Semrush</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:wordpress"></iconify-icon> WordPress</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:mailchimp"></iconify-icon> Email</span>
          </div>
          <div class="flex items-center gap-10 pr-10 text-2xl" aria-hidden="true">
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:googleanalytics"></iconify-icon> Analytics</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:googlesearchconsole"></iconify-icon> Search Console</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:googleads"></iconify-icon> Google Ads</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:meta"></iconify-icon> Meta Ads</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:figma"></iconify-icon> Figma</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:semrush"></iconify-icon> Semrush</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:wordpress"></iconify-icon> WordPress</span>
            <span class="inline-flex items-center gap-2 text-sm font-medium"><iconify-icon icon="simple-icons:mailchimp"></iconify-icon> Email</span>
          </div>
        </div>
      </section>

      <!-- ===================== SERVICES LIST ===================== -->
      <section id="services-list" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">What we do</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Digital marketing services in Jaipur, built as one growth engine</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Pick one or combine them. As a digital marketing company in Jaipur, every engagement is strategy-led, creatively crafted and measured against outcomes that matter to your business — SEO, social media, PPC, branding and web design under one roof.</p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- 1 SEO (featured -> detail page) -->
            <a href="/seo-services/" class="scard reveal group block rounded-xl2 border border-line p-7 relative">
              <span class="absolute right-5 top-5 text-[10px] font-semibold tracking-wide uppercase rounded-full bg-accent/10 text-accent px-2.5 py-1">Full details</span>
              <span class="num font-display text-sm text-ink-soft">01</span>
              <span class="sico mt-3 inline-grid place-items-center h-13 w-13 rounded-2xl bg-surface text-accent text-2xl" style="height:3.25rem;width:3.25rem"><iconify-icon icon="lucide:search"></iconify-icon></span>
              <h3 class="font-display text-2xl tt mt-4">SEO Services</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">Rank on page one of Google with white-hat on-page, technical and local SEO that earns durable organic traffic.</p>
              <div class="flex flex-wrap gap-2 mt-5 text-xs">
                <span class="rounded-full border border-line px-2.5 py-1">Local SEO Jaipur</span>
                <span class="rounded-full border border-line px-2.5 py-1">Technical</span>
                <span class="rounded-full border border-line px-2.5 py-1">Content</span>
              </div>
              <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">View details <iconify-icon icon="lucide:arrow-right" class="sarr"></iconify-icon></span>
            </a>

            <!-- 2 Brand Consulting -->
            <a href="/brand-consulting/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="1">
              <span class="num font-display text-sm text-ink-soft">02</span>
              <span class="sico mt-3 inline-grid place-items-center rounded-2xl bg-surface text-accent text-2xl" style="height:3.25rem;width:3.25rem"><iconify-icon icon="lucide:palette"></iconify-icon></span>
              <h3 class="font-display text-2xl tt mt-4">Brand Consulting</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">Positioning, strategy, logo and a complete visual identity — built from research, designed to be instantly recognised.</p>
              <div class="flex flex-wrap gap-2 mt-5 text-xs">
                <span class="rounded-full border border-line px-2.5 py-1">Strategy</span>
                <span class="rounded-full border border-line px-2.5 py-1">Identity</span>
                <span class="rounded-full border border-line px-2.5 py-1">Guidelines</span>
              </div>
              <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">View details <iconify-icon icon="lucide:arrow-right" class="sarr"></iconify-icon></span>
            </a>

            <!-- 3 Digital Marketing -->
            <a href="/digital-marketing/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="2">
              <span class="num font-display text-sm text-ink-soft">03</span>
              <span class="sico mt-3 inline-grid place-items-center rounded-2xl bg-surface text-accent text-2xl" style="height:3.25rem;width:3.25rem"><iconify-icon icon="lucide:line-chart"></iconify-icon></span>
              <h3 class="font-display text-2xl tt mt-4">Digital Marketing</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">Full-funnel campaigns across content, email and channels — connected to dashboards that show how traffic becomes customers.</p>
              <div class="flex flex-wrap gap-2 mt-5 text-xs">
                <span class="rounded-full border border-line px-2.5 py-1">Content</span>
                <span class="rounded-full border border-line px-2.5 py-1">Email</span>
                <span class="rounded-full border border-line px-2.5 py-1">Analytics</span>
              </div>
              <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">View details <iconify-icon icon="lucide:arrow-right" class="sarr"></iconify-icon></span>
            </a>

            <!-- 4 Performance Marketing -->
            <a href="/performance-marketing/" class="scard reveal group block rounded-xl2 border border-line p-7">
              <span class="num font-display text-sm text-ink-soft">04</span>
              <span class="sico mt-3 inline-grid place-items-center rounded-2xl bg-surface text-accent text-2xl" style="height:3.25rem;width:3.25rem"><iconify-icon icon="lucide:target"></iconify-icon></span>
              <h3 class="font-display text-2xl tt mt-4">Performance Marketing</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">Meta &amp; Google Ads run on data — A/B tested, audience-segmented and aligned to the only metric that matters: ROI.</p>
              <div class="flex flex-wrap gap-2 mt-5 text-xs">
                <span class="rounded-full border border-line px-2.5 py-1">Meta Ads</span>
                <span class="rounded-full border border-line px-2.5 py-1">Google Ads</span>
                <span class="rounded-full border border-line px-2.5 py-1">Lead Gen</span>
              </div>
              <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">View details <iconify-icon icon="lucide:arrow-right" class="sarr"></iconify-icon></span>
            </a>

            <!-- 5 Social Media -->
            <a href="/social-media-marketing/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="1">
              <span class="num font-display text-sm text-ink-soft">05</span>
              <span class="sico mt-3 inline-grid place-items-center rounded-2xl bg-surface text-accent text-2xl" style="height:3.25rem;width:3.25rem"><iconify-icon icon="lucide:thumbs-up"></iconify-icon></span>
              <h3 class="font-display text-2xl tt mt-4">Social Media Marketing</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">Platform-native content for Instagram, Facebook, LinkedIn and YouTube — built to stop the scroll and drive action.</p>
              <div class="flex flex-wrap gap-2 mt-5 text-xs">
                <span class="rounded-full border border-line px-2.5 py-1">Content &amp; Design</span>
                <span class="rounded-full border border-line px-2.5 py-1">Paid Social</span>
                <span class="rounded-full border border-line px-2.5 py-1">Community</span>
              </div>
              <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">View details <iconify-icon icon="lucide:arrow-right" class="sarr"></iconify-icon></span>
            </a>

            <!-- 6 UI/UX Design -->
            <a href="/ui-ux-design/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="2">
              <span class="num font-display text-sm text-ink-soft">06</span>
              <span class="sico mt-3 inline-grid place-items-center rounded-2xl bg-surface text-accent text-2xl" style="height:3.25rem;width:3.25rem"><iconify-icon icon="lucide:figma"></iconify-icon></span>
              <h3 class="font-display text-2xl tt mt-4">UI/UX Design</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">Research-led product and interface design — wireframes to polished, accessible UI and scalable design systems.</p>
              <div class="flex flex-wrap gap-2 mt-5 text-xs">
                <span class="rounded-full border border-line px-2.5 py-1">UX Research</span>
                <span class="rounded-full border border-line px-2.5 py-1">UI Design</span>
                <span class="rounded-full border border-line px-2.5 py-1">Design Systems</span>
              </div>
              <span class="mt-6 inline-flex items-center gap-2 text-sm font-medium">View details <iconify-icon icon="lucide:arrow-right" class="sarr"></iconify-icon></span>
            </a>

            <!-- 7 Website Design (full width feature row) -->
            <a href="/website-design/" class="scard reveal group block rounded-xl2 border border-line p-7 md:col-span-2 lg:col-span-3 md:flex md:items-center md:gap-8">
              <div class="md:flex-1">
                <span class="num font-display text-sm text-ink-soft">07</span>
                <span class="sico mt-3 inline-grid place-items-center rounded-2xl bg-surface text-accent text-2xl" style="height:3.25rem;width:3.25rem"><iconify-icon icon="lucide:monitor-smartphone"></iconify-icon></span>
                <h3 class="font-display text-2xl tt mt-4">Website Design &amp; Development</h3>
                <p class="text-ink-soft text-sm mt-2 leading-relaxed max-w-xl">Fast, responsive, SEO-ready websites — from marketing sites to product front-ends, engineered to convert and easy to manage.</p>
              </div>
              <div class="flex flex-wrap gap-2 mt-5 md:mt-0 text-xs">
                <span class="rounded-full border border-line px-2.5 py-1">Responsive</span>
                <span class="rounded-full border border-line px-2.5 py-1">Core Web Vitals</span>
                <span class="rounded-full border border-line px-2.5 py-1">CMS</span>
              </div>
              <span class="mt-6 md:mt-0 md:ml-6 inline-grid place-items-center h-12 w-12 rounded-full border border-line shrink-0 group-hover:bg-accent group-hover:border-accent group-hover:text-paper transition"><iconify-icon icon="lucide:arrow-up-right" class="text-xl"></iconify-icon></span>
            </a>
          </div>
        </div>
      </section>

      <!-- ===================== PROCESS ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">How we deliver</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A clear path from brief to results</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-xl2 bg-paper border border-line p-7"><span class="font-display text-5xl tt text-accent/25">01</span><h3 class="font-display text-xl tt mt-3">Discover</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Audits, audience and competitor research to find the real opportunity.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="1"><span class="font-display text-5xl tt text-accent/25">02</span><h3 class="font-display text-xl tt mt-3">Strategise</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">A costed roadmap — channels, messaging and KPIs agreed up front.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="2"><span class="font-display text-5xl tt text-accent/25">03</span><h3 class="font-display text-xl tt mt-3">Create &amp; launch</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Design, build and ship work that looks sharp and performs hard.</p></div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="3"><span class="font-display text-5xl tt text-accent/25">04</span><h3 class="font-display text-xl tt mt-3">Optimise</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">Read the data, double down on what works, report transparently.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== WHY US (E-E-A-T) ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
          <div class="lg:col-span-5">
            <!-- IMAGE PLACEHOLDER: team / studio -->
            <figure class="imgph rounded-xl2 aspect-[4/5] bg-surface-2 reveal">
              <img src="/wp-content/themes/boostronixx/assets/img/about-studio.avif" alt="The BoostronixX team at work in the Jaipur studio" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b>Team photo · 880×1100</b><span>Real photo of the BoostronixX team / studio — builds E-E-A-T trust. Bright, candid, faces visible.</span></figcaption>
            </figure>
          </div>
          <div class="lg:col-span-7">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Why teams choose us</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight max-w-xl">Expertise you can verify, results you can measure</h2>
            <p class="reveal text-ink-soft mt-5 max-w-xl leading-relaxed" data-delay="1">A digital marketing agency in Jaipur since 2021, we pair deep local market knowledge with a senior, in-house team across strategy, design and growth — result-driven digital marketing Jaipur founders can actually measure, because we report on everything.</p>
            <div class="grid sm:grid-cols-2 gap-4 mt-8">
              <div class="reveal lift rounded-2xl border border-line p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:award"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">5+ years, 50+ brands</h3><p class="text-ink-soft text-sm mt-1.5">Proven across real estate, schools and D2C.</p></div>
              <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:users"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Senior, in-house team</h3><p class="text-ink-soft text-sm mt-1.5">No outsourcing — strategy, design and dev under one roof.</p></div>
              <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:bar-chart-3"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Transparent reporting</h3><p class="text-ink-soft text-sm mt-1.5">Clear monthly dashboards — you always see what's working.</p></div>
              <div class="reveal lift rounded-2xl border border-line p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:shield-check"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">White-hat &amp; ethical</h3><p class="text-ink-soft text-sm mt-1.5">Sustainable methods that protect your brand long-term.</p></div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== TESTIMONIALS ===================== -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Trusted by founders</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">What clients say</h2>
          </div>
          <div class="grid md:grid-cols-3 gap-5">
            <figure class="reveal rounded-xl2 bg-white/5 border border-white/10 p-7">
              <div class="flex gap-0.5 text-sm star">★★★★★</div>
              <blockquote class="mt-4 text-paper/90 leading-relaxed">"BoostronixX completely transformed our brand identity. We saw a 40% increase in engagement within the first three months."</blockquote>
              <figcaption class="mt-5 flex items-center gap-3"><span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display">A</span><span><span class="block font-medium">Arjun Khanna</span><span class="block text-xs text-paper/50">UrbanCraft</span></span></figcaption>
            </figure>
            <figure class="reveal rounded-xl2 bg-white/5 border border-white/10 p-7" data-delay="1">
              <div class="flex gap-0.5 text-sm star">★★★★★</div>
              <blockquote class="mt-4 text-paper/90 leading-relaxed">"They don't just deliver services; they become your growth partners. Our customer recall has improved significantly."</blockquote>
              <figcaption class="mt-5 flex items-center gap-3"><span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display">K</span><span><span class="block font-medium">Kavita Nair</span><span class="block text-xs text-paper/50">GreenLeaf Organics</span></span></figcaption>
            </figure>
            <figure class="reveal rounded-xl2 bg-white/5 border border-white/10 p-7" data-delay="2">
              <div class="flex gap-0.5 text-sm star">★★★★★</div>
              <blockquote class="mt-4 text-paper/90 leading-relaxed">"Data-driven strategy with creative excellence. Our website traffic doubled and conversions improved by 35% in six months."</blockquote>
              <figcaption class="mt-5 flex items-center gap-3"><span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display">R</span><span><span class="block font-medium">Rajesh Menon</span><span class="block text-xs text-paper/50">TechFlow Solutions</span></span></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">FAQ</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Service questions, answered</h2>
          </div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl px-6 group open">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Which services should I start with?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">It depends on your goal. New brand? Start with brand consulting and a website. Need leads now? SEO and performance marketing. On a free strategy call we'll recommend the right mix of digital marketing services in Jaipur for your stage and budget — including 360 degree digital marketing Jaipur growth plans when you want every channel pulling together.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you offer affordable packages, retainers or one-off projects?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">All three. One-offs suit branding or a website build; retainers work best for SEO, social and ads where momentum compounds. We also offer affordable digital marketing services in Jaipur and tiered digital marketing packages in Jaipur scoped to your budget — every price agreed in writing up front, no surprises.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Will I get regular reporting?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes. You get clear, transparent monthly reports tied to the KPIs we agreed — traffic, rankings, leads, ROAS — plus a dedicated point of contact who keeps things moving.</div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you work with businesses outside Jaipur?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Absolutely. We're based in Jaipur but work with clients across India and internationally — most collaboration happens over calls, shared docs and live dashboards.</div></div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="absolute right-6 top-6 sm:right-12 sm:top-12 h-24 w-24 spin hidden sm:block">
              <svg viewBox="0 0 100 100" class="w-full h-full"><defs><path id="c2" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs><text font-size="10.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c2">FREE STRATEGY CALL · NO OBLIGATION ·</textPath></text></svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
            </div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-6xl tt leading-[1.02]">Not sure which service you need?</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us your goal. We'll map the right services, share quick wins and a costed roadmap — free, and with no obligation.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Set up a discovery call</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="/portfolio/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:briefcase" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See our work</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
