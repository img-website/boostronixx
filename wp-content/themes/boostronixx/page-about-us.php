<?php
/**
 * Template Name: About Us
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
      <section class="relative pt-28 sm:pt-36 pb-16 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav
            class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6"
            aria-label="Breadcrumb"
          >
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">About Us</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div
                class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"
              >
                <span class="h-2 w-2 rounded-full bg-accent"></span> Creative
                branding & growth studio · since 2021
              </div>
              <h1
                class="reveal font-display text-[2.7rem] leading-[0.97] sm:text-7xl lg:text-[5rem] tt"
              >
                We're the team behind<br class="hidden sm:block" />
                brands that <span class="text-accent">get noticed</span>.
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">
                BoostronixX is a digital marketing agency in Jaipur that thinks
                like a growth team. Strategy, design and performance under one
                roof — turning ambitious businesses into brands people remember.
              </p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-6" data-delay="2">
                <a
                  href="/contact-us/"
                  class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"
                >
                  <span class="relative z-10 sheen-text">Work With Us</span>
                  <iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
                </a>
                <a
                  href="/portfolio/"
                  class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"
                >
                  <iconify-icon icon="lucide:eye" class="relative z-10 shrink-0"></iconify-icon>
                  <span class="relative z-10 sheen-text-dark">See our work</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== STAT BAND ===================== -->
      <section class="border-y border-line bg-surface">
        <div
          class="mx-auto max-w-7xl px-4 sm:px-6 grid grid-cols-2 lg:grid-cols-4 gap-px bg-line"
        >
          <div class="reveal bg-surface p-6 sm:p-8">
            <p class="font-display text-4xl sm:text-5xl tt">
              <span class="count" data-to="50">0</span>+
            </p>
            <p class="text-ink-soft text-sm mt-1">Brands grown</p>
          </div>
          <div class="reveal bg-surface p-6 sm:p-8" data-delay="1">
            <p class="font-display text-4xl sm:text-5xl tt">
              <span class="count" data-to="5">0</span>+
            </p>
            <p class="text-ink-soft text-sm mt-1">Years in the game</p>
          </div>
          <div class="reveal bg-surface p-6 sm:p-8" data-delay="2">
            <p class="font-display text-4xl sm:text-5xl tt">
              <span class="count" data-to="4">0</span>.9
            </p>
            <p class="text-ink-soft text-sm mt-1">Average client rating</p>
          </div>
          <div class="reveal bg-surface p-6 sm:p-8" data-delay="3">
            <p class="font-display text-4xl sm:text-5xl tt">
              &lt;<span class="count" data-to="24">0</span>h
            </p>
            <p class="text-ink-soft text-sm mt-1">Average reply time</p>
          </div>
        </div>
      </section>

      <!-- ===================== OUR STORY ===================== -->
      <section class="py-20 sm:py-28">
        <div
          class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10 lg:gap-16 items-center"
        >
          <div class="lg:col-span-5 reveal">
            <div class="relative">
              <figure class="imgph rounded-xl2 aspect-[4/5] bg-surface-2">
                <img
                  src="/wp-content/themes/boostronixx/assets/img/about-studio.avif"
                  alt="Inside the BoostronixX studio in Jaipur"
                  loading="lazy"
                  onerror="this.remove()"
                />
                <figcaption class="lbl"><b>Inside the studio</b></figcaption>
              </figure>
              <div class="absolute right-2 top-2 sm:-right-5 sm:-top-5 h-24 w-24 spin">
                <svg viewBox="0 0 100 100" class="w-full h-full">
                  <defs>
                    <path id="cir" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" />
                  </defs>
                  <circle cx="50" cy="50" r="49" fill="#0a0a0a" />
                  <text font-size="10.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2">
                    <textPath href="#cir">EST · 2021 · JAIPUR · INDIA ·</textPath>
                  </text>
                </svg>
                <span class="absolute inset-0 grid place-items-center text-accent text-lg"
                  ><iconify-icon icon="lucide:sparkles"></iconify-icon
                ></span>
              </div>
            </div>
          </div>
          <div class="lg:col-span-7">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              Our story
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight max-w-xl">
              How our Jaipur studio started — with a simple frustration
            </h2>
            <div class="reveal space-y-4 text-ink-soft mt-6 max-w-xl leading-relaxed" data-delay="1">
              <p>
                Too many good businesses were invisible — great products, terrible
                reach. Agencies sold either pretty design with no results, or
                results with no soul. We thought there had to be a better way.
              </p>
              <p>
                Based in Jaipur since 2021, BoostronixX began as a creative
                branding &amp; growth studio in Jaipur with one belief:
                <span class="text-ink font-medium"
                  >creativity and performance aren't opposites — they're partners</span
                >. A logo that converts. A campaign that's also art. A funnel that
                feels like a brand.
              </p>
              <p>
                Five years and 50+ brands later, that belief still runs everything
                we do — across real estate, schools, D2C and healthcare.
              </p>
            </div>
            <div class="reveal flex flex-wrap gap-2 mt-7 text-sm" data-delay="2">
              <span class="rounded-full border border-line px-3 py-1.5">Strategy-first</span>
              <span class="rounded-full border border-line px-3 py-1.5">Creative-led</span>
              <span class="rounded-full border border-line px-3 py-1.5">In-house team</span>
              <span class="rounded-full border border-line px-3 py-1.5">Tracked ROI</span>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== MISSION & VISION ===================== -->
      <section class="pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid md:grid-cols-2 gap-4">
          <div class="reveal rounded-xl2 bg-ink text-paper p-8 sm:p-10 relative overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative">
              <span
                class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-accent text-paper text-2xl"
                ><iconify-icon icon="lucide:target"></iconify-icon
              ></span>
              <h3 class="font-display text-2xl sm:text-3xl tt mt-6">Our mission</h3>
              <p class="text-paper/70 mt-3 leading-relaxed">
                To help ambitious businesses become brands people remember — by
                pairing sharp strategy with creative that actually performs, and
                proving every rupee of it.
              </p>
            </div>
          </div>
          <div class="reveal rounded-xl2 border border-line bg-surface p-8 sm:p-10" data-delay="1">
            <span
              class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-ink text-paper text-2xl"
              ><iconify-icon icon="lucide:eye"></iconify-icon
            ></span>
            <h3 class="font-display text-2xl sm:text-3xl tt mt-6">Our vision</h3>
            <p class="text-ink-soft mt-3 leading-relaxed">
              A world where great businesses are never held back by being unseen —
              where brilliant brands from anywhere, including a studio in Jaipur,
              can compete and win anywhere.
            </p>
          </div>
        </div>
      </section>

      <!-- ===================== VALUES ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              What we stand for
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">
              Six things we never compromise on
            </h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="reveal vcard rounded-xl2 border border-line p-7">
              <span class="text-accent text-3xl"
                ><iconify-icon icon="lucide:compass"></iconify-icon
              ></span>
              <h3 class="font-display text-xl tt mt-4">Strategy before pixels</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                We never design in the dark. Research and positioning come first —
                everything beautiful is also intentional.
              </p>
            </div>
            <div class="reveal vcard rounded-xl2 border border-line p-7" data-delay="1">
              <span class="text-accent text-3xl"
                ><iconify-icon icon="lucide:line-chart"></iconify-icon
              ></span>
              <h3 class="font-display text-xl tt mt-4">Results you can measure</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                Dashboards, not vanity metrics. If we can't tie work to growth,
                we'd rather not do it.
              </p>
            </div>
            <div class="reveal vcard rounded-xl2 border border-line p-7" data-delay="2">
              <span class="text-accent text-3xl"
                ><iconify-icon icon="lucide:eye-off"></iconify-icon
              ></span>
              <h3 class="font-display text-xl tt mt-4">Radical transparency</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                Clear scopes, honest timelines, no jargon walls. You always know
                what we're doing and why.
              </p>
            </div>
            <div class="reveal vcard rounded-xl2 border border-line p-7">
              <span class="text-accent text-3xl"
                ><iconify-icon icon="lucide:sparkles"></iconify-icon
              ></span>
              <h3 class="font-display text-xl tt mt-4">Craft as standard</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                Good enough isn't. Every frame, headline and pixel earns its
                place before it ships.
              </p>
            </div>
            <div class="reveal vcard rounded-xl2 border border-line p-7" data-delay="1">
              <span class="text-accent text-3xl"
                ><iconify-icon icon="lucide:handshake"></iconify-icon
              ></span>
              <h3 class="font-display text-xl tt mt-4">Partners, not vendors</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                Your goals become ours. We win when you grow — that's the only
                scoreboard that counts.
              </p>
            </div>
            <div class="reveal vcard rounded-xl2 border border-line p-7" data-delay="2">
              <span class="text-accent text-3xl"
                ><iconify-icon icon="lucide:rocket"></iconify-icon
              ></span>
              <h3 class="font-display text-xl tt mt-4">Curious & always learning</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                AI, new platforms, fresh formats — we test early so your brand
                stays a step ahead.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== HOW WE WORK ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              How we work
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">
              A simple, four-step way of working
            </h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-xl2 bg-paper border border-line p-7">
              <span class="font-display text-5xl tt text-accent/25">01</span>
              <h3 class="font-display text-xl tt mt-3">Discover</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                We dig into your business, audience and competition to find the
                real opportunity.
              </p>
            </div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="1">
              <span class="font-display text-5xl tt text-accent/25">02</span>
              <h3 class="font-display text-xl tt mt-3">Strategise</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                A clear roadmap — positioning, channels and KPIs — agreed before a
                single thing is designed.
              </p>
            </div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="2">
              <span class="font-display text-5xl tt text-accent/25">03</span>
              <h3 class="font-display text-xl tt mt-3">Create & launch</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                Design, build and ship — brand, content and campaigns that look
                sharp and work hard.
              </p>
            </div>
            <div class="reveal rounded-xl2 bg-paper border border-line p-7" data-delay="3">
              <span class="font-display text-5xl tt text-accent/25">04</span>
              <h3 class="font-display text-xl tt mt-3">Optimise</h3>
              <p class="text-ink-soft text-sm mt-2 leading-relaxed">
                We read the data, double down on what works and keep compounding
                the results.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== TEAM ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              The people
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">
              A small team that punches above its weight
            </h2>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal text-center">
              <div class="imgph rounded-xl2 aspect-square bg-surface-2 mb-4">
                <img src="/wp-content/themes/boostronixx/assets/img/girl-avatar.avif" alt="Strategy lead" loading="lazy" onerror="this.remove()" />
                <span class="lbl"><b>Strategy</b></span>
              </div>
              <p class="font-display text-lg tt">Brand & Strategy</p>
              <p class="text-ink-soft text-sm">Positioning · Research</p>
            </div>
            <div class="reveal text-center" data-delay="1">
              <div class="imgph rounded-xl2 aspect-square bg-surface-2 mb-4">
                <img src="/wp-content/themes/boostronixx/assets/img/boy-avatar.avif" alt="Creative lead" loading="lazy" onerror="this.remove()" />
                <span class="lbl"><b>Creative</b></span>
              </div>
              <p class="font-display text-lg tt">Design & Creative</p>
              <p class="text-ink-soft text-sm">Identity · Content</p>
            </div>
            <div class="reveal text-center" data-delay="2">
              <div class="imgph rounded-xl2 aspect-square bg-surface-2 mb-4">
                <img src="/wp-content/themes/boostronixx/assets/img/girl-avatar.avif" alt="Growth lead" loading="lazy" onerror="this.remove()" />
                <span class="lbl"><b>Growth</b></span>
              </div>
              <p class="font-display text-lg tt">Performance & SEO</p>
              <p class="text-ink-soft text-sm">Ads · Rankings</p>
            </div>
            <div class="reveal text-center" data-delay="3">
              <div class="imgph rounded-xl2 aspect-square bg-surface-2 mb-4">
                <img src="/wp-content/themes/boostronixx/assets/img/boy-avatar.avif" alt="Web lead" loading="lazy" onerror="this.remove()" />
                <span class="lbl"><b>Build</b></span>
              </div>
              <p class="font-display text-lg tt">Web & Development</p>
              <p class="text-ink-soft text-sm">UI/UX · Sites</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden"
          >
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">
                Like how we think? Let's build together.
              </h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">
                Tell us where you want to grow. We'll bring the strategy, the
                creative and the receipts.
              </p>
              <div class="flex flex-wrap items-center gap-3 mt-8">
                <a
                  href="/contact-us/"
                  class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"
                >
                  <span class="relative z-10 sheen-text-light">Book a Free Strategy Call</span>
                  <iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
                </a>
                <a
                  href="tel:+918058212202"
                  class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"
                  ><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0"></iconify-icon
                  ><span class="relative z-10">+91 80582 12202</span></a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
