<?php
/**
 * Template Name: SEO Services
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
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:0;right:-40px"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">SEO Services</span>
          </nav>

          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <iconify-icon icon="lucide:map-pin" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'seo_services_hero_badge', false, 'Local SEO experts · Jaipur, Rajasthan' ) ); ?>
              </div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt">
                <?php echo esc_html( bx_field( 'seo_services_hero_heading', false, 'SEO company in Jaipur that ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'seo_services_hero_heading_accent', false, 'ranks & converts' ) ); ?></span>
              </h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">
                <?php echo esc_html( bx_field( 'seo_services_hero_text', false, 'As an SEO company in Jaipur, BoostronixX delivers result-driven, white-hat SEO services that help local businesses rank higher on Google, attract qualified traffic and generate consistent organic leads.' ) ); ?>
              </p>
              <?php
              $seo_hero_cta1       = get_field( 'seo_services_hero_cta_primary' );
              $seo_hero_cta1_url   = is_array( $seo_hero_cta1 ) && ! empty( $seo_hero_cta1['url'] ) ? $seo_hero_cta1['url'] : '/contact-us/';
              $seo_hero_cta1_label = is_array( $seo_hero_cta1 ) && ! empty( $seo_hero_cta1['title'] ) ? $seo_hero_cta1['title'] : 'Get a free SEO audit';
              $seo_hero_cta2       = get_field( 'seo_services_hero_cta_secondary' );
              $seo_hero_cta2_url   = is_array( $seo_hero_cta2 ) && ! empty( $seo_hero_cta2['url'] ) ? $seo_hero_cta2['url'] : '#process';
              $seo_hero_cta2_label = is_array( $seo_hero_cta2 ) && ! empty( $seo_hero_cta2['title'] ) ? $seo_hero_cta2['title'] : 'See our process';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $seo_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $seo_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $seo_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:route" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $seo_hero_cta2_label ); ?></span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-6 gap-y-2 mt-7 text-sm text-ink-soft" data-delay="3">
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:check-circle" class="text-accent"></iconify-icon> <?php echo esc_html( bx_field( 'seo_services_hero_feature_1', false, 'White-hat only' ) ); ?></span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:check-circle" class="text-accent"></iconify-icon> <?php echo esc_html( bx_field( 'seo_services_hero_feature_2', false, 'Monthly reporting' ) ); ?></span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:check-circle" class="text-accent"></iconify-icon> <?php echo esc_html( bx_field( 'seo_services_hero_feature_3', false, 'No lock-in tricks' ) ); ?></span>
                <a href="#aeo-geo" class="inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent font-medium px-3 py-1 hover:bg-accent hover:text-paper transition"><iconify-icon icon="lucide:sparkles"></iconify-icon> <?php echo esc_html( bx_field( 'seo_services_hero_feature_aeo', false, 'AEO & GEO included' ) ); ?></a>
              </div>
            </div>

            <!-- animated SERP rank mock -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div id="serpMock" class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8">
                <div class="flex items-center gap-2 rounded-full border border-line px-4 py-2.5 text-sm text-ink-soft h-11">
                  <iconify-icon icon="lucide:search" class="text-base"></iconify-icon>
                  <span id="serpType"></span><span class="caret"></span>
                </div>
                <div id="serpCard" class="mt-4 rounded-2xl border border-line bg-paper p-4" style="transition:opacity .25s ease">
                  <div class="flex items-center gap-2 text-xs text-ink-soft"><span class="h-5 w-5 rounded grid place-items-center bg-accent/10 text-accent text-[10px] font-bold">B</span> www.boostronixx.com</div>
                  <p id="serpTitle" class="font-display text-lg tt mt-1.5">SEO Company in Jaipur — BoostronixX</p>
                  <p class="text-sm text-ink-soft mt-1">Result-driven, white-hat SEO services that rank you on page one and grow organic leads.</p>
                  <span class="inline-flex items-center gap-1 mt-3 rounded-full bg-accent/10 text-accent text-xs font-semibold px-2.5 py-1">Rank #1 <iconify-icon icon="lucide:check"></iconify-icon></span>
                </div>
                <div class="flex items-end justify-between gap-2 h-24 mt-5">
                  <div class="bar" style="--h:24%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:34%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:30%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:48%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:60%;width:11%;background:linear-gradient(180deg,#0a0a0a,transparent)"></div>
                  <div class="bar" style="--h:78%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:96%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                </div>
                <p class="text-[11px] text-ink-soft mt-2">Illustrative ranking growth · first 6 months</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== OVERVIEW + INCLUDES ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12">
          <div class="lg:col-span-5">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'seo_services_overview_eyebrow', false, 'Overview' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'seo_services_overview_heading', false, 'A trusted SEO company in Jaipur for ambitious brands' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'seo_services_overview_text', false, 'Our SEO services in Jaipur span on-page, off-page, technical and local SEO plus content marketing — with a focus on real estate, schools, healthcare and D2C brands across Jaipur and beyond. Every tactic is white-hat, built for long-term visibility, not short-lived spikes.' ) ); ?></p>
            <?php
            $seo_overview_btn       = get_field( 'seo_services_overview_button' );
            $seo_overview_btn_url   = is_array( $seo_overview_btn ) && ! empty( $seo_overview_btn['url'] ) ? $seo_overview_btn['url'] : '/contact-us/';
            $seo_overview_btn_label = is_array( $seo_overview_btn ) && ! empty( $seo_overview_btn['title'] ) ? $seo_overview_btn['title'] : 'Talk to an SEO specialist';
            ?>
            <a href="<?php echo esc_url( $seo_overview_btn_url ); ?>" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-8 font-medium" data-delay="2"><span class="relative z-10 sheen-text"><?php echo esc_html( $seo_overview_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
          </div>
          <div class="lg:col-span-7">
            <p class="reveal text-sm font-medium text-ink-soft mb-4" data-delay="1"><?php echo esc_html( bx_field( 'seo_services_includes_title', false, "What's included" ) ); ?></p>
            <div class="grid sm:grid-cols-2 gap-3">
              <?php bx_seo_services_render_includes(); ?>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== IMAGE: dashboard ===================== -->
      <section class="pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <figure class="imgph rounded-xl2 aspect-[16/7] bg-surface-2 reveal border border-line">
            <img src="<?php echo esc_url( bx_img_url( 'seo_services_dashboard_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/seo-dashboard.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'seo_services_dashboard_image_alt', false, 'BoostronixX SEO reporting dashboard showing keyword rankings and organic traffic growth' ) ); ?>" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'seo_services_dashboard_caption_title', false, 'SEO dashboard · 1600×700' ) ); ?></b><span><?php echo esc_html( bx_field( 'seo_services_dashboard_caption_text', false, 'Screenshot of a real ranking / traffic dashboard (Google Search Console or Analytics) with rising organic-traffic and keyword-position graphs. Anonymise client data.' ) ); ?></span></figcaption>
          </figure>
        </div>
      </section>

      <!-- ===================== PROCESS ===================== -->
      <section id="process" class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'seo_services_process_eyebrow', false, 'Our process' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'seo_services_process_heading', false, 'How we get you ranking' ) ); ?></h2>
          </div>
          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_seo_services_render_process(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== LOCAL SEO ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <div class="lg:col-span-6">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'seo_services_local_eyebrow', false, 'Local SEO Jaipur' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'seo_services_local_heading', false, 'Own the map pack in your city' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'seo_services_local_text', false, 'When someone searches "SEO agency near me" or "in Jaipur", local SEO decides whether they find you or a competitor. Our local SEO services in Jaipur cover Google Business Profile optimization, local citations and reviews, so you show up in the map pack and on Maps when buyers are ready to act.' ) ); ?></p>
            <ul class="reveal grid sm:grid-cols-2 gap-3 mt-7 text-sm" data-delay="2">
              <?php
              foreach ( bx_lines( bx_field( 'seo_services_local_points', false, "GBP optimisation\nLocal citations & NAP\nReview strategy\nLocal landing pages" ) ) as $seo_local_point ) {
                  echo '<li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent"></iconify-icon> ' . esc_html( $seo_local_point ) . '</li>';
              }
              ?>
            </ul>
          </div>
          <!-- IMAGE PLACEHOLDER: map pack / GBP -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <figure class="imgph rounded-xl2 aspect-[4/3] bg-surface-2 border border-line">
              <img src="<?php echo esc_url( bx_img_url( 'seo_services_local_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/local-seo-map.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'seo_services_local_image_alt', false, 'Google local map pack showing BoostronixX ranking for SEO company in Jaipur' ) ); ?>" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'seo_services_local_caption_title', false, 'Map pack · 1080×810' ) ); ?></b><span><?php echo esc_html( bx_field( 'seo_services_local_caption_text', false, 'Screenshot of the Google local 3-pack / Maps result for a Jaipur search, or a Google Business Profile with reviews. Shows local ranking proof.' ) ); ?></span></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- ===================== AEO & GEO (AI SEARCH) ===================== -->
      <section id="aeo-geo" class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden" aria-labelledby="aeoGeoHeading">
        <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <!-- copy -->
          <div class="lg:col-span-6">
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:trending-up" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'seo_services_aeo_eyebrow', false, 'Trending now · AI search' ) ); ?></p>
            <h2 id="aeoGeoHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'seo_services_aeo_heading_a', false, "Don't just rank." ) ); ?><br /><?php echo esc_html( bx_field( 'seo_services_aeo_heading_b', false, 'Be the ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'seo_services_aeo_heading_accent', false, 'answer' ) ); ?></span>.</h2>
            <p class="reveal text-paper/60 mt-5 max-w-lg leading-relaxed" data-delay="1">Search has changed. People now ask ChatGPT, Perplexity and Google AI Overviews — and those engines answer with <em>one</em> recommendation, not ten blue links. AEO and GEO make sure that recommendation is you.</p>
            <div class="grid sm:grid-cols-2 gap-4 mt-8">
              <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="1">
                <span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl" aria-hidden="true"><iconify-icon icon="lucide:message-square-quote"></iconify-icon></span>
                <h3 class="font-display text-lg tt mt-4"><?php echo esc_html( bx_field( 'seo_services_aeo_card1_title', false, 'AEO — Answer Engine Optimization' ) ); ?></h3>
                <p class="text-paper/55 text-sm mt-1.5 leading-relaxed"><?php echo esc_html( bx_field( 'seo_services_aeo_card1_text', false, 'Structuring your content so search engines lift it as the direct answer — featured snippets, People Also Ask, voice search and FAQ rich results.' ) ); ?></p>
              </div>
              <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="2">
                <span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <h3 class="font-display text-lg tt mt-4"><?php echo esc_html( bx_field( 'seo_services_aeo_card2_title', false, 'GEO — Generative Engine Optimization' ) ); ?></h3>
                <p class="text-paper/55 text-sm mt-1.5 leading-relaxed"><?php echo esc_html( bx_field( 'seo_services_aeo_card2_text', false, 'Making your brand citable by AI — entity building, schema, llms.txt, brand mentions and content AI models trust enough to quote and recommend.' ) ); ?></p>
              </div>
            </div>
            <ul class="reveal flex flex-wrap gap-2 mt-6 text-sm" data-delay="2">
              <?php
              foreach ( bx_lines( bx_field( 'seo_services_aeo_tags', false, "Schema & entities\nllms.txt\nCitable content\nBrand mentions\nAI visibility tracking" ) ) as $seo_aeo_tag ) {
                  echo '<li class="rounded-full border border-white/15 px-3 py-1.5">' . esc_html( $seo_aeo_tag ) . '</li>';
              }
              ?>
            </ul>
          </div>

          <!-- AI chat mock -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <div class="rounded-xl2 bg-[#141414] border border-white/10 p-5 sm:p-7">
              <div class="flex items-center gap-2 pb-4 border-b border-white/10">
                <span class="aiavatar grid place-items-center h-8 w-8 rounded-full bg-accent text-paper" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <p class="text-sm font-medium text-paper">AI Assistant</p>
                <span class="ml-auto inline-flex items-center gap-1.5 rounded-full bg-white/8 px-2.5 py-1 text-[10px] text-paper/60"><span class="h-1.5 w-1.5 rounded-full bg-accent" aria-hidden="true"></span> answering</span>
              </div>
              <div class="mt-5 space-y-4">
                <!-- user bubble -->
                <div class="bubble bu1 flex justify-end">
                  <p class="max-w-[80%] rounded-2xl rounded-br-md bg-white/10 text-paper text-sm px-4 py-3">Who's the best SEO company in Jaipur?</p>
                </div>
                <!-- ai bubble -->
                <div class="bubble bu2 flex gap-2.5">
                  <span class="grid place-items-center h-7 w-7 rounded-full bg-accent text-paper text-xs shrink-0" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                  <div class="max-w-[85%] rounded-2xl rounded-tl-md bg-white/5 border border-white/10 px-4 py-3">
                    <p class="text-sm text-paper/85 leading-relaxed">Based on results and reviews, <strong class="text-accent">BoostronixX</strong> is a leading choice — a Jaipur studio known for white-hat SEO, transparent reporting and strong local rankings<span class="caret" aria-hidden="true"></span></p>
                    <a href="/" class="mt-3 inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent text-xs font-medium px-2.5 py-1 hover:bg-accent hover:text-paper transition"><iconify-icon icon="lucide:link" class="text-[11px]" aria-hidden="true"></iconify-icon> boostronixx.com <span class="text-[10px] opacity-70">[1]</span></a>
                  </div>
                </div>
                <!-- cited badge -->
                <div class="bubble bu3 flex justify-center">
                  <span class="inline-flex items-center gap-1.5 rounded-full bg-accent text-paper text-xs font-semibold px-3 py-1.5"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Your brand, cited as the answer</span>
                </div>
              </div>
              <!-- platforms -->
              <div class="mt-6 pt-4 border-t border-white/10">
                <p class="text-[11px] text-paper/40 mb-2.5">We optimise your visibility across</p>
                <ul class="flex flex-wrap gap-2 text-xs text-paper/70">
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:google" class="text-accent" aria-hidden="true"></iconify-icon> AI Overviews</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:openai" class="text-accent" aria-hidden="true"></iconify-icon> ChatGPT</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:perplexity" class="text-accent" aria-hidden="true"></iconify-icon> Perplexity</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="simple-icons:googlegemini" class="text-accent" aria-hidden="true"></iconify-icon> Gemini</li>
                  <li class="inline-flex items-center gap-1.5 rounded-full bg-white/5 border border-white/10 px-2.5 py-1"><iconify-icon icon="lucide:bot" class="text-accent" aria-hidden="true"></iconify-icon> Copilot</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== TIMELINE / EXPECTATIONS ===================== -->
      <section class="pt-20 sm:pt-28 pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="reveal rounded-xl2 bg-ink text-paper p-8 sm:p-12 relative overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative">
              <p class="text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'seo_services_timeline_eyebrow', false, 'Realistic timelines' ) ); ?></p>
              <h2 class="font-display text-2xl sm:text-4xl tt leading-tight max-w-2xl"><?php echo esc_html( bx_field( 'seo_services_timeline_heading', false, "SEO compounds — here's roughly when to expect movement" ) ); ?></h2>
              <div class="grid sm:grid-cols-3 gap-4 mt-9">
                <?php bx_seo_services_render_timeline(); ?>
              </div>
              <p class="text-paper/40 text-xs mt-5"><?php echo esc_html( bx_field( 'seo_services_timeline_note', false, 'Timelines are typical ranges and vary with competition, budget and starting point — never guaranteed.' ) ); ?></p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== WHY US / E-E-A-T ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'seo_services_why_eyebrow', false, 'Why choose BoostronixX' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'seo_services_why_heading', false, 'What makes us the best SEO company in Jaipur' ) ); ?></h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_seo_services_render_why(); ?>
          </div>

          <!-- author / reviewer (E-E-A-T) -->
          <?php
          $seo_reviewer_link       = get_field( 'seo_services_reviewer_link' );
          $seo_reviewer_link_url   = is_array( $seo_reviewer_link ) && ! empty( $seo_reviewer_link['url'] ) ? $seo_reviewer_link['url'] : '/about-us/';
          $seo_reviewer_link_label = is_array( $seo_reviewer_link ) && ! empty( $seo_reviewer_link['title'] ) ? $seo_reviewer_link['title'] : 'Meet the team';
          ?>
          <div class="reveal mt-8 rounded-2xl border border-line bg-surface p-6 flex flex-col sm:flex-row sm:items-center gap-5">
            <span class="grid place-items-center h-14 w-14 rounded-full bg-ink text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-2xl text-accent"></iconify-icon></span>
            <div class="flex-1">
              <p class="font-display tt text-lg"><?php echo esc_html( bx_field( 'seo_services_reviewer_title', false, 'Reviewed by the BoostronixX SEO team' ) ); ?></p>
              <p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'seo_services_reviewer_text', false, "Practising SEO since 2026 across 50+ brands in real estate, schools and D2C. We follow Google's guidelines and white-hat best practices on every engagement." ) ); ?></p>
            </div>
            <a href="<?php echo esc_url( $seo_reviewer_link_url ); ?>" class="text-sm font-medium text-ink hover:text-accent inline-flex items-center gap-1.5 shrink-0"><?php echo esc_html( $seo_reviewer_link_label ); ?> <iconify-icon icon="lucide:arrow-up-right"></iconify-icon></a>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'seo_services_faq_eyebrow', false, 'SEO FAQ' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'seo_services_faq_heading', false, 'Your SEO questions, answered' ) ); ?></h2>
          </div>
          <div class="space-y-3">
            <?php bx_seo_services_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'seo_services_related_label', false, 'Related services' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_seo_services_render_related(); ?>
          </div>

          <?php
          $seo_cta_btn       = get_field( 'seo_services_cta_button' );
          $seo_cta_btn_url   = is_array( $seo_cta_btn ) && ! empty( $seo_cta_btn['url'] ) ? $seo_cta_btn['url'] : '/contact-us/';
          $seo_cta_btn_label = is_array( $seo_cta_btn ) && ! empty( $seo_cta_btn['title'] ) ? $seo_cta_btn['title'] : 'Get my free SEO audit';
          ?>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'seo_services_cta_heading', false, 'Ready to rank on page one?' ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'seo_services_cta_text', false, "Get a free SEO audit of your site — we'll show you the quick wins and a clear path to more organic leads." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $seo_cta_btn_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $seo_cta_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( bx_field( 'seo_services_cta_phone_href', false, 'tel:+918058212202' ) ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( bx_field( 'seo_services_cta_phone', false, '+91 80582 12202' ) ); ?></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
