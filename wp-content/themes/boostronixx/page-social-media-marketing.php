<?php
/**
 * Template Name: Social Media Marketing
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
            <span class="text-ink font-medium">Social Media Marketing</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:heart" class="text-accent text-sm"></iconify-icon> Content · Community · Paid social</div>
              <h1 class="reveal font-display text-[2.5rem] leading-[0.98] sm:text-6xl lg:text-7xl tt">Feeds that turn followers into <span class="text-accent">customers</span></h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">As a social media marketing agency in Jaipur, we craft platform-native content for Instagram, Facebook, LinkedIn and YouTube — designed to stop the scroll, build trust and drive real action, not just likes.</p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Grow my socials</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="#formats" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:grid-2x2" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See content we make</span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-6 gap-y-2 mt-8" data-delay="3">
                <div><p class="font-display text-3xl tt"><span class="count" data-to="12480">0</span></p><p class="text-xs text-ink-soft">avg. likes / post</p></div>
                <div><p class="font-display text-3xl tt">+<span class="count" data-to="64">0</span>%</p><p class="text-xs text-ink-soft">engagement lift</p></div>
                <div><p class="font-display text-3xl tt"><span class="count" data-to="4">0</span></p><p class="text-xs text-ink-soft">platforms</p></div>
              </div>
            </div>
            <!-- PHONE FEED -->
            <div class="lg:col-span-5 reveal flex justify-center" data-delay="1">
              <div class="phone-frame rounded-[3rem] p-4 w-[300px]">
                <div class="flex justify-center mb-3"><span class="h-1.5 w-16 rounded-full bg-ink/10"></span></div>
                <!-- stories -->
                <div class="flex gap-3 px-1 mb-3 overflow-hidden">
                  <span class="ring h-12 w-12 rounded-full p-[2px] shrink-0"><span class="grid place-items-center h-full w-full rounded-full bg-paper text-accent"><iconify-icon icon="lucide:plus"></iconify-icon></span></span>
                  <span class="ring h-12 w-12 rounded-full p-[2px] shrink-0"><span class="block h-full w-full rounded-full bg-surface-2"></span></span>
                  <span class="ring h-12 w-12 rounded-full p-[2px] shrink-0"><span class="block h-full w-full rounded-full bg-surface-2"></span></span>
                  <span class="ring h-12 w-12 rounded-full p-[2px] shrink-0"><span class="block h-full w-full rounded-full bg-surface-2"></span></span>
                </div>
                <div class="flex items-center gap-2.5 px-1">
                  <span class="h-8 w-8 rounded-full ring p-[1.5px]"><span class="grid place-items-center h-full w-full rounded-full bg-paper text-accent text-xs font-bold">B</span></span>
                  <div class="leading-tight flex-1"><p class="text-sm font-semibold">boostronixx</p><p class="text-[10px] text-ink-soft">Sponsored</p></div>
                  <iconify-icon icon="mdi:dots-horizontal" class="text-ink-soft"></iconify-icon>
                </div>
                <div class="relative mt-2.5 rounded-xl overflow-hidden bg-surface aspect-square">
                  <div id="feedImg" class="absolute inset-0 grid place-items-center text-paper font-display tt text-2xl" style="background:linear-gradient(135deg,#fa5539,#ff8a5c)">Stop the scroll.</div>
                  <div id="feedImgB" class="absolute inset-0 grid place-items-center text-paper font-display tt text-2xl opacity-0" style="background:linear-gradient(135deg,#0a0a0a,#3a3a3a)">Build the trust.</div>
                  <span id="feedCount" class="absolute top-2 right-2 rounded-full bg-ink/70 text-paper text-[10px] font-medium px-2 py-0.5">1/3</span>
                </div>
                <div class="flex items-center gap-3 mt-2 text-xl px-1">
                  <span class="heart text-accent inline-flex"><iconify-icon icon="mdi:heart"></iconify-icon></span>
                  <iconify-icon icon="lucide:message-circle"></iconify-icon>
                  <iconify-icon icon="lucide:send"></iconify-icon>
                  <span class="ml-auto"><iconify-icon icon="lucide:bookmark"></iconify-icon></span>
                </div>
                <p class="text-sm font-semibold mt-2 px-1"><span id="feedLikes" class="count">12,480</span> likes</p>
                <p class="text-xs text-ink-soft mt-1 px-1 pb-1">Every frame built to spark trust and drive action.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PLATFORMS -->
      <section class="py-16 sm:py-20 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-8">Platforms we manage as your SMM company in Jaipur</p>
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal pcard rounded-2xl bg-paper border border-line p-6"><iconify-icon icon="simple-icons:instagram" class="text-3xl text-accent"></iconify-icon><h3 class="font-display text-lg tt mt-4">Instagram</h3><p class="text-ink-soft text-sm mt-1">Reels, carousels &amp; stories that get shared — Instagram marketing agency work in Jaipur.</p></div>
            <div class="reveal pcard rounded-2xl bg-paper border border-line p-6" data-delay="1"><iconify-icon icon="simple-icons:facebook" class="text-3xl text-accent"></iconify-icon><h3 class="font-display text-lg tt mt-4">Facebook</h3><p class="text-ink-soft text-sm mt-1">Community, groups and local reach — a Facebook marketing company in Jaipur at heart.</p></div>
            <div class="reveal pcard rounded-2xl bg-paper border border-line p-6" data-delay="2"><iconify-icon icon="simple-icons:linkedin" class="text-3xl text-accent"></iconify-icon><h3 class="font-display text-lg tt mt-4">LinkedIn</h3><p class="text-ink-soft text-sm mt-1">Authority content for B2B &amp; founders.</p></div>
            <div class="reveal pcard rounded-2xl bg-paper border border-line p-6" data-delay="3"><iconify-icon icon="simple-icons:youtube" class="text-3xl text-accent"></iconify-icon><h3 class="font-display text-lg tt mt-4">YouTube</h3><p class="text-ink-soft text-sm mt-1">Shorts and long-form that builds a library.</p></div>
          </div>
        </div>
      </section>

      <!-- CONTENT FORMATS -->
      <section id="formats" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">What we create</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Scroll-stopping content from your social media marketing agency in Jaipur</h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden">
              <div class="h-44 grid place-items-center text-paper font-display tt text-2xl relative" style="background:linear-gradient(135deg,#fa5539,#ff8a5c)"><span>Reels</span><span class="absolute bottom-3 left-3 inline-flex items-center gap-1 text-xs bg-black/30 rounded-full px-2 py-1"><iconify-icon icon="lucide:play"></iconify-icon> 0:15</span></div>
              <div class="p-5"><h3 class="font-display text-lg tt">Short-form video</h3><p class="text-ink-soft text-sm mt-1">Hook-led Reels &amp; Shorts built for reach.</p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="1">
              <div class="h-44 grid grid-cols-3 gap-1 p-3 bg-surface"><span class="rounded-lg bg-ink"></span><span class="rounded-lg bg-accent"></span><span class="rounded-lg bg-surface-2 border border-line"></span></div>
              <div class="p-5"><h3 class="font-display text-lg tt">Carousels</h3><p class="text-ink-soft text-sm mt-1">Swipe-worthy stories that teach &amp; sell.</p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="2">
              <div class="h-44 grid place-items-center bg-ink relative"><span class="ring h-24 w-16 rounded-2xl p-[3px]"><span class="grid place-items-center h-full w-full rounded-2xl bg-[#161616] text-paper text-xs">Story</span></span></div>
              <div class="p-5"><h3 class="font-display text-lg tt">Stories &amp; polls</h3><p class="text-ink-soft text-sm mt-1">Daily presence that builds community.</p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden">
              <div class="h-44 grid place-items-center text-paper font-display tt text-xl" style="background:linear-gradient(135deg,#0a0a0a,#3a3a3a)">Brand posts</div>
              <div class="p-5"><h3 class="font-display text-lg tt">Static &amp; brand</h3><p class="text-ink-soft text-sm mt-1">On-brand grid posts and announcements.</p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="1">
              <div class="h-44 grid place-items-center bg-surface"><span class="rounded-2xl bg-paper border border-line px-4 py-3 font-display tt text-lg">"Quote that lands"</span></div>
              <div class="p-5"><h3 class="font-display text-lg tt">Quotes &amp; tips</h3><p class="text-ink-soft text-sm mt-1">Save-worthy value that grows reach.</p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="2">
              <div class="h-44 grid place-items-center bg-accent/10"><iconify-icon icon="lucide:megaphone" class="text-5xl text-accent"></iconify-icon></div>
              <div class="p-5"><h3 class="font-display text-lg tt">Paid social</h3><p class="text-ink-soft text-sm mt-1">Boosted &amp; targeted campaigns that convert.</p></div>
            </div>
          </div>
        </div>
      </section>

      <!-- GROWTH + IMAGE -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">It compounds</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Consistency that grows an audience</h2>
            <p class="reveal text-paper/60 mt-5 max-w-md leading-relaxed" data-delay="1">Our social media management in Jaipur runs on a content calendar, a recognisable style and a feedback loop on what's working — that's how followings turn into communities, and communities into customers.</p>
            <!-- IMAGE PLACEHOLDER -->
            <figure class="imgph rounded-xl2 aspect-[16/10] bg-white/[0.04] border border-white/10 mt-8 reveal" data-delay="1">
              <img src="/wp-content/themes/boostronixx/assets/img/social-grid.avif" alt="A curated Instagram grid of BoostronixX client content" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b>Feed grid · 1280×800</b><span>9-tile Instagram grid mockup of real client content showing a cohesive, on-brand aesthetic.</span></figcaption>
            </figure>
          </div>
          <div class="reveal" data-delay="1">
            <div class="rounded-xl2 bg-white/5 border border-white/10 p-7">
              <div class="flex items-center justify-between"><span class="text-xs tracking-[.2em] uppercase text-paper/50">Followers</span><span class="inline-flex items-center gap-1 text-sm font-semibold text-accent">+<span class="count" data-to="218">0</span>% <iconify-icon icon="lucide:trending-up"></iconify-icon></span></div>
              <p class="font-display text-5xl tt mt-2"><span class="count" data-to="48">0</span>.6k</p>
              <div class="flex items-end gap-2 h-28 mt-6">
                <div class="flex-1 rounded-t-lg bg-white/15" style="height:26%"></div>
                <div class="flex-1 rounded-t-lg bg-white/15" style="height:38%"></div>
                <div class="flex-1 rounded-t-lg bg-white/15" style="height:34%"></div>
                <div class="flex-1 rounded-t-lg bg-white/25" style="height:54%"></div>
                <div class="flex-1 rounded-t-lg bg-accent/60" style="height:70%"></div>
                <div class="flex-1 rounded-t-lg bg-accent" style="height:100%"></div>
              </div>
              <p class="text-[11px] text-paper/40 mt-2">Illustrative growth · 6 months</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Social, answered</h2></div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">How many posts do I get each month?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">It depends on your plan and goals. As a social media marketing agency in Jaipur, we build a content calendar around the right mix of Reels, carousels and stories for your platforms — quality and consistency over sheer volume.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do you handle replies and community?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes — community management is part of the service, including responding to comments and DMs in your brand voice, gathering UGC and flagging anything that needs your attention.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Will you shoot content or use ours?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Both. We can design from your assets, direct shoots, or guide you to capture great raw content — then handle the editing, design and scheduling. Searching for a social media agency near me in Jaipur? We work on-site and remotely across the city.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">Do likes actually lead to sales?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">We optimise for saves, shares, DMs and clicks — the engagement that leads to customers — not vanity likes. Organic social builds trust and demand, then paid social puts your best posts in front of more of the right people to convert.</div></div></div>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Pairs well with</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/performance-marketing/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:target"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Performance Marketing</span><span class="text-xs text-ink-soft">Boost the winners</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/brand-consulting/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Brand Consulting</span><span class="text-xs text-ink-soft">A look worth following</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
            <a href="/digital-marketing/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:line-chart"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Digital Marketing</span><span class="text-xs text-ink-soft">The full funnel</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Make your brand impossible to scroll past</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Let's plan a month of content and show you what consistent, on-brand social can do.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Grow my socials</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="/portfolio/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:images" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See our content</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
