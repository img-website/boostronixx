<?php
/**
 * Template Name: Sitemap
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
      <section class="relative pt-28 sm:pt-36 pb-10 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Sitemap</span>
          </nav>
          <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
            <div>
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <iconify-icon icon="lucide:git-fork" class="text-accent text-sm"></iconify-icon> <span id="pageCount">0</span> pages · all in one place
              </div>
              <h1 class="reveal font-display text-4xl sm:text-6xl tt leading-[0.98]">The whole map</h1>
              <p class="reveal text-ink-soft mt-4 max-w-lg leading-relaxed">Every page on the BoostronixX site, organised by section. Type to filter, or jump straight in.</p>
            </div>
            <!-- filter -->
            <div class="reveal relative w-full lg:w-80">
              <iconify-icon icon="lucide:filter" class="absolute left-4 top-1/2 -translate-y-1/2 text-ink-soft"></iconify-icon>
              <input id="mapFilter" type="text" aria-label="Filter pages" placeholder="Filter pages…" class="w-full rounded-full border border-line bg-paper pl-11 pr-4 py-3 text-sm outline-none focus:border-accent transition" autocomplete="off" />
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== ROOT NODE ===================== -->
      <section class="pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="reveal flex justify-center">
            <a href="/" class="node group inline-flex items-center gap-3 rounded-2xl bg-ink text-paper px-6 py-4">
              <span class="node-ico grid place-items-center h-10 w-10 rounded-xl bg-white/10 text-accent text-xl"><iconify-icon icon="lucide:house"></iconify-icon></span>
              <span><span class="font-display tt text-lg block">Homepage</span><span class="text-xs text-paper/50">boostronixx.com</span></span>
              <iconify-icon icon="lucide:arrow-up-right" class="node-arr text-paper/60 ml-2"></iconify-icon>
            </a>
          </div>
          <div class="flex justify-center"><span class="block h-8 w-0.5 bg-line"></span></div>
        </div>
      </section>

      <!-- ===================== CATEGORY GRID ===================== -->
      <section class="pb-20 sm:pb-28">
        <div id="mapGrid" class="mx-auto max-w-7xl px-4 sm:px-6 grid md:grid-cols-2 xl:grid-cols-3 gap-5">

          <!-- MAIN -->
          <div class="catcard reveal rounded-xl2 border border-line p-6" data-cat>
            <div class="flex items-center gap-3 mb-5">
              <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:compass"></iconify-icon></span>
              <h2 class="font-display text-xl tt">Main</h2>
              <span class="ml-auto text-xs text-ink-soft rounded-full bg-surface px-2.5 py-1 cat-count"></span>
            </div>
            <div class="stagger space-y-2">
              <a href="/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="home homepage"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:house"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Home</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/services/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="services what we do"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:layout-grid"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Services</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/portfolio/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="work portfolio projects case studies"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:briefcase"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Portfolio</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/industries/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="industries sectors real estate schools d2c ecommerce hospitals"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:layers"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Industries</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/real-estate/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="real estate property industry marketing leads bookings"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:building-2"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Real Estate — Industry</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/schools/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="schools education industry admissions cbse icse marketing enquiries"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:graduation-cap"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Schools — Industry</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/d2c-ecommerce/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="d2c ecommerce online store shopify industry roas orders"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:shopping-bag"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">D2C eCommerce — Industry</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/hospitals/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="hospitals healthcare clinics doctors industry appointments patients"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:heart-pulse"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Hospitals — Industry</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/edoovi-erp/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="edoovi erp case study saas"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:app-window"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Edoovi ERP — Case Study</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/blog/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="insights blog articles"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:book-open"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Insights</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
            </div>
          </div>

          <!-- SERVICES -->
          <div class="catcard reveal rounded-xl2 border border-line p-6" data-cat>
            <div class="flex items-center gap-3 mb-5">
              <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
              <h2 class="font-display text-xl tt">Services</h2>
              <span class="ml-auto text-xs text-ink-soft rounded-full bg-surface px-2.5 py-1 cat-count"></span>
            </div>
            <div class="stagger space-y-2">
              <a href="/services/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="all services overview"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:layout-grid"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">All Services</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/brand-consulting/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="brand consulting branding identity"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:palette"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Brand Consulting</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/seo-services/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="seo services search rankings jaipur"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:search"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">SEO Services</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/digital-marketing/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="digital marketing full funnel growth"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:line-chart"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Digital Marketing</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/performance-marketing/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="performance marketing ads ppc roas"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:target"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Performance Marketing</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/social-media-marketing/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="social media marketing instagram"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:thumbs-up"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Social Media Marketing</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/ui-ux-design/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="ui ux product interface design"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:figma"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">UI/UX Design</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/website-design/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="website design development web"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:monitor-smartphone"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Website Design</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
            </div>
          </div>

          <!-- COMPANY -->
          <div class="catcard reveal rounded-xl2 border border-line p-6" data-cat>
            <div class="flex items-center gap-3 mb-5">
              <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:building-2"></iconify-icon></span>
              <h2 class="font-display text-xl tt">Company</h2>
              <span class="ml-auto text-xs text-ink-soft rounded-full bg-surface px-2.5 py-1 cat-count"></span>
            </div>
            <div class="stagger space-y-2">
              <a href="/about-us/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="about us story team"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:users"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">About Us</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/faq/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="faq questions help"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:help-circle"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">FAQ</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/contact-us/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="contact us get in touch"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:message-square"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Contact Us</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/blog/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="blog articles insights"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:newspaper"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Blog</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/blog-post/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="article branding vs marketing blog post"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:file-text"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Article — Branding vs. Marketing</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
            </div>
          </div>

          <!-- LEGAL -->
          <div class="catcard reveal rounded-xl2 border border-line p-6" data-cat>
            <div class="flex items-center gap-3 mb-5">
              <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:scale"></iconify-icon></span>
              <h2 class="font-display text-xl tt">Legal</h2>
              <span class="ml-auto text-xs text-ink-soft rounded-full bg-surface px-2.5 py-1 cat-count"></span>
            </div>
            <div class="stagger space-y-2">
              <a href="/privacy-policy/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="privacy policy data"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:shield-check"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Privacy Policy</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/terms-and-conditions/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="terms and conditions agreement"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:scroll-text"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Terms &amp; Conditions</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
              <a href="/disclaimer/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="disclaimer notice"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:triangle-alert"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Disclaimer</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
            </div>
          </div>

          <!-- CONVERSION -->
          <div class="catcard reveal rounded-xl2 border border-line p-6" data-cat>
            <div class="flex items-center gap-3 mb-5">
              <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:rocket"></iconify-icon></span>
              <h2 class="font-display text-xl tt">Get Started</h2>
              <span class="ml-auto text-xs text-ink-soft rounded-full bg-surface px-2.5 py-1 cat-count"></span>
            </div>
            <div class="stagger space-y-2">
              <a href="/contact-us/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="contact book strategy call"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:calendar-check"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Book a Strategy Call</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
            </div>
          </div>

          <!-- UTILITY -->
          <div class="catcard reveal rounded-xl2 border border-line p-6" data-cat>
            <div class="flex items-center gap-3 mb-5">
              <span class="grid place-items-center h-10 w-10 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:wrench"></iconify-icon></span>
              <h2 class="font-display text-xl tt">Utility</h2>
              <span class="ml-auto text-xs text-ink-soft rounded-full bg-surface px-2.5 py-1 cat-count"></span>
            </div>
            <div class="stagger space-y-2">
              <a href="/sitemap/" class="node sm-link flex items-center gap-3 rounded-xl border border-line p-3" data-name="sitemap map pages"><span class="node-ico grid place-items-center h-9 w-9 rounded-lg bg-surface text-accent"><iconify-icon icon="lucide:git-fork"></iconify-icon></span><span class="flex-1 font-medium text-sm sm-label">Sitemap</span><iconify-icon icon="lucide:arrow-right" class="node-arr text-ink-soft"></iconify-icon></a>
            </div>
          </div>
        </div>

        <!-- empty -->
        <div id="mapEmpty" class="hidden mx-auto max-w-7xl px-4 sm:px-6 text-center py-16">
          <span class="text-4xl text-ink-soft"><iconify-icon icon="lucide:search-x"></iconify-icon></span>
          <p class="font-display text-xl tt mt-4">No pages match that</p>
          <p class="text-ink-soft text-sm mt-1">Try a different word.</p>
        </div>

        <!-- xml note -->
        <div class="mx-auto max-w-7xl px-4 sm:px-6 mt-12">
          <div class="reveal rounded-2xl bg-surface border border-line p-5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-ink-soft inline-flex items-center gap-2"><iconify-icon icon="lucide:code-2" class="text-accent text-lg"></iconify-icon> Looking for the machine-readable version for search engines?</p>
            <a href="https://www.boostronixx.com/sitemap.xml" class="group btn-glow inline-flex items-center gap-2 rounded-full px-5 py-2.5 text-sm font-medium">
              <span class="relative z-10 sheen-text">View XML sitemap</span>
              <iconify-icon icon="lucide:arrow-up-right" class="relative z-10"></iconify-icon>
            </a>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
