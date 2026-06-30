<?php
/**
 * Template Name: FAQ
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- ===================== HERO + SEARCH ===================== -->
      <section class="relative pt-28 sm:pt-36 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 text-center">
          <nav class="reveal flex items-center justify-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">FAQ</span>
          </nav>
          <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
            <span class="h-2 w-2 rounded-full bg-accent"></span> Help Center
          </div>
          <h1 class="reveal font-display text-4xl sm:text-6xl tt leading-[0.98]">
            How can we <span class="text-accent">help?</span>
          </h1>
          <p class="reveal text-ink-soft mt-5 max-w-lg mx-auto" data-delay="1">
            Common questions about our digital marketing services in Jaipur —
            from pricing and process to SEO and timelines. Browse by category, or
            search below. Still stuck? We're one message away.
          </p>
          <!-- search -->
          <div class="reveal mt-8 relative max-w-xl mx-auto" data-delay="2">
            <iconify-icon
              icon="lucide:search"
              class="absolute left-5 top-1/2 -translate-y-1/2 text-xl text-ink-soft"
            ></iconify-icon>
            <input
              id="faqSearch"
              aria-label="Search FAQs"
              type="text"
              placeholder="Search e.g. pricing, SEO, timeline…"
              class="w-full rounded-full border border-line bg-paper pl-13 pr-5 py-4 text-base outline-none focus:border-accent transition"
              style="padding-left: 3.25rem"
              autocomplete="off"
            />
          </div>
        </div>
      </section>

      <!-- ===================== CATEGORY FILTER + LIST ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <!-- filter chips -->
          <div id="chips" class="flex flex-wrap items-center justify-center gap-2 mb-10">
            <button class="chip active rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="all">All</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="services">Services</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="pricing">Pricing</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="process">Process</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="seo">SEO &amp; Ads</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="support">Support</button>
          </div>

          <!-- list -->
          <div id="faqList" class="space-y-3">
            <!-- SERVICES -->
            <div class="faq border border-line rounded-2xl px-6 group open" data-cat="services">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Which services does BoostronixX offer?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Brand consulting, digital marketing, SEO, social media marketing, performance marketing, UI/UX design and website design — strategy through execution, all in-house.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="services">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Do you work with businesses outside Jaipur?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Absolutely. We're based in Jaipur but work with clients across India and internationally — most collaboration happens over calls, shared docs and live dashboards.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="services">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Which industries do you specialise in?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Real estate, schools, D2C eCommerce and healthcare — though our strategy-first framework adapts to most growth-stage businesses.
              </div></div>
            </div>

            <!-- PRICING -->
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="pricing">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">How much does a project cost?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Every engagement is scoped to your goals, so there's no one-size price. After a free strategy call we send a clear proposal with deliverables and pricing — no hidden costs, no surprises.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="pricing">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Do you offer monthly retainers or one-off projects?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Both. One-offs suit projects like branding or a website build; retainers work best for ongoing SEO, social and performance marketing where momentum compounds.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="pricing">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Is the first strategy call really free?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Yes. The first call is free and no-obligation. We review your goals, share quick wins and propose a roadmap — whether or not you work with us.
              </div></div>
            </div>

            <!-- PROCESS -->
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="process">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">How do we get started?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Book a free strategy call on +91 80582 12202 or email boostronixx@gmail.com. We'll review your goals, share quick wins and propose a roadmap.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="process">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">How long does a typical project take?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                A brand identity usually takes 3–5 weeks and a website 4–8 weeks, depending on scope. Marketing campaigns build momentum over the first 60–90 days. We share a clear timeline in your proposal.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="process">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Will I have one point of contact?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Yes. You get a dedicated point of contact who keeps things moving and loops in the right specialists — you never have to chase a faceless inbox.
              </div></div>
            </div>

            <!-- SEO & ADS -->
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="seo">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">How long until SEO shows results?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                SEO is a compounding game. Early movement often appears in 8–12 weeks, with meaningful ranking and traffic gains across 4–6 months. We report progress transparently the whole way.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="seo">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Do you guarantee a #1 Google ranking?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                No honest agency can guarantee a specific rank — Google's algorithm isn't ours to control. What we guarantee is a sound, white-hat strategy and clear reporting on real progress.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="seo">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Do you manage the ad budget for us?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                Yes. We plan, run and optimise Meta and Google Ads against your goals — A/B testing creatives and audiences — and report ROAS, CPL and leads so every rupee is accountable.
              </div></div>
            </div>

            <!-- SUPPORT -->
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="support">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">How quickly do you reply?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                We aim to respond to every enquiry within 24 hours on business days (Mon–Fri, 9 AM–7 PM IST). Active clients get faster, dedicated turnaround.
              </div></div>
            </div>
            <div class="faq border border-line rounded-2xl px-6 group" data-cat="support">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">Who owns the work once it's delivered?</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                You do. On final payment, full rights to delivered brand assets, designs and website transfer to you, along with source files where applicable.
              </div></div>
            </div>
          </div>

          <!-- empty state -->
          <div id="faqEmpty" class="hidden text-center py-16">
            <span class="text-4xl text-ink-soft"><iconify-icon icon="lucide:search-x"></iconify-icon></span>
            <p class="font-display text-xl tt mt-4">No matching questions</p>
            <p class="text-ink-soft text-sm mt-1">Try a different keyword — or just ask us directly.</p>
          </div>
        </div>
      </section>

      <!-- ===================== STILL HAVE QUESTIONS ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="reveal relative rounded-xl2 bg-ink text-paper p-8 sm:p-12 overflow-hidden text-center">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="absolute right-5 top-5 h-20 w-20 spin hidden sm:block">
              <svg viewBox="0 0 100 100" class="w-full h-full">
                <defs><path id="c3" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs>
                <text font-size="10" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c3">ASK US ANYTHING · ASK US ·</textPath></text>
              </svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:message-circle-question"></iconify-icon></span>
            </div>
            <div class="relative">
              <h2 class="font-display text-2xl sm:text-4xl tt">Still have a question?</h2>
              <p class="text-paper/70 mt-3 max-w-md mx-auto">
                Can't find what you're looking for? Talk to a human — we usually
                reply within 24 hours.
              </p>
              <div class="flex flex-wrap items-center justify-center gap-3 mt-7">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium">
                  <span class="relative z-10 sheen-text-light">Book a Free Strategy Call</span>
                  <iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
                </a>
                <a href="mailto:boostronixx@gmail.com" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium">
                  <iconify-icon icon="lucide:mail" class="relative z-10 shrink-0"></iconify-icon>
                  <span class="relative z-10">Email us</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
