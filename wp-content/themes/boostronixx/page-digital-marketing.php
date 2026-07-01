<?php
/**
 * Template Name: Digital Marketing
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- HERO with FUNNEL -->
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Digital Marketing</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:filter" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'digital_marketing_hero_badge', false, 'Full-funnel growth, measured' ) ); ?></div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt"><?php echo esc_html( bx_field( 'digital_marketing_hero_heading', false, 'Marketing that turns traffic into ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'digital_marketing_hero_heading_accent', false, 'customers' ) ); ?></span></h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'digital_marketing_hero_text', false, 'Full-funnel digital marketing in Jaipur: SEO, content, email, social and ads working together as one funnel, with dashboards that show exactly how a click becomes a customer.' ) ); ?></p>
              <?php
              $dm_hero_cta1       = get_field( 'digital_marketing_hero_cta_primary' );
              $dm_hero_cta1_url   = is_array( $dm_hero_cta1 ) && ! empty( $dm_hero_cta1['url'] ) ? $dm_hero_cta1['url'] : '/contact-us/';
              $dm_hero_cta1_label = is_array( $dm_hero_cta1 ) && ! empty( $dm_hero_cta1['title'] ) ? $dm_hero_cta1['title'] : 'Plan my growth';
              $dm_hero_cta2       = get_field( 'digital_marketing_hero_cta_secondary' );
              $dm_hero_cta2_url   = is_array( $dm_hero_cta2 ) && ! empty( $dm_hero_cta2['url'] ) ? $dm_hero_cta2['url'] : '#funnel';
              $dm_hero_cta2_label = is_array( $dm_hero_cta2 ) && ! empty( $dm_hero_cta2['title'] ) ? $dm_hero_cta2['title'] : 'See the funnel';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $dm_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $dm_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $dm_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:filter" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $dm_hero_cta2_label ); ?></span></a>
              </div>
            </div>
            <!-- FUNNEL MOCK -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8">
                <div class="flex items-center justify-between mb-5"><span class="text-xs tracking-[.2em] uppercase text-ink-soft">Your funnel · live</span><span class="text-xs text-accent inline-flex items-center gap-1">+<span class="count" data-to="128">0</span>% <iconify-icon icon="lucide:trending-up"></iconify-icon></span></div>
                <div class="space-y-2.5">
                  <div class="fstage f1 rounded-xl bg-accent/15 text-ink px-4 py-3 flex items-center justify-between mx-auto" style="width:100%"><span class="text-sm font-medium">Awareness · Traffic</span><span class="font-display tt"><span class="count" data-to="48">0</span>.2k</span></div>
                  <div class="fstage f2 rounded-xl bg-accent/30 text-ink px-4 py-3 flex items-center justify-between mx-auto" style="width:80%"><span class="text-sm font-medium">Interest · Engaged</span><span class="font-display tt"><span class="count" data-to="12">0</span>.4k</span></div>
                  <div class="fstage f3 rounded-xl bg-accent/60 text-paper px-4 py-3 flex items-center justify-between mx-auto" style="width:60%"><span class="text-sm font-medium">Intent · Leads</span><span class="font-display tt"><span class="count" data-to="3">0</span>.1k</span></div>
                  <div class="fstage f4 rounded-xl bg-accent text-paper px-4 py-3 flex items-center justify-between mx-auto" style="width:42%"><span class="text-sm font-medium">Action · Customers</span><span class="font-display tt"><span class="count" data-to="640">0</span></span></div>
                </div>
                <p class="text-[11px] text-ink-soft mt-4 text-center">Illustrative funnel · awareness → conversion</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CHANNELS -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'digital_marketing_channels_eyebrow', false, 'One connected engine' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'digital_marketing_channels_heading', false, 'Every channel, pulling together' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'digital_marketing_channels_text', false, 'Channels in silos waste budget. As a digital marketing company in Jaipur, we orchestrate SEO, content, email, social and paid so each one amplifies the others — awareness, consideration and conversion all reporting into one place.' ) ); ?></p>
            <div class="reveal grid sm:grid-cols-2 gap-3 mt-7" data-delay="2">
              <?php bx_digital_marketing_render_channels(); ?>
            </div>
          </div>
          <!-- channel orbit -->
          <div class="reveal flex justify-center" data-delay="1">
            <div class="relative h-72 w-72">
              <div class="absolute inset-0 grid place-items-center"><span class="grid place-items-center h-20 w-20 rounded-2xl bg-ink text-paper font-display tt text-center text-sm leading-tight">Your<br/>brand</span></div>
              <svg viewBox="0 0 288 288" class="absolute inset-0 w-full h-full"><circle cx="144" cy="144" r="120" fill="none" stroke="#e6e1da" stroke-width="1.5" stroke-dasharray="3 7" /></svg>
              <div class="orbit-ring absolute inset-0">
                <span class="chip absolute left-1/2 -translate-x-1/2 top-1 grid place-items-center h-12 w-12 rounded-full bg-paper border border-line shadow-sm text-accent text-xl"><iconify-icon icon="simple-icons:google"></iconify-icon></span>
                <span class="chip absolute right-1 top-1/2 -translate-y-1/2 grid place-items-center h-12 w-12 rounded-full bg-paper border border-line shadow-sm text-accent text-xl"><iconify-icon icon="simple-icons:instagram"></iconify-icon></span>
                <span class="chip absolute left-1/2 -translate-x-1/2 bottom-1 grid place-items-center h-12 w-12 rounded-full bg-paper border border-line shadow-sm text-accent text-xl"><iconify-icon icon="simple-icons:gmail"></iconify-icon></span>
                <span class="chip absolute left-1 top-1/2 -translate-y-1/2 grid place-items-center h-12 w-12 rounded-full bg-paper border border-line shadow-sm text-accent text-xl"><iconify-icon icon="simple-icons:youtube"></iconify-icon></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- TRAFFIC -> CUSTOMER FLOW -->
      <section id="funnel" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'digital_marketing_flow_eyebrow', false, 'How it connects' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'digital_marketing_flow_heading', false, 'Full-funnel digital marketing in Jaipur, from first click to loyal customer' ) ); ?></h2></div>
          <div class="reveal grid sm:grid-cols-2 lg:grid-cols-4 gap-3 items-stretch" data-delay="1">
            <?php bx_digital_marketing_render_flow(); ?>
          </div>
        </div>
      </section>

      <!-- ANALYTICS + IMAGE -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div class="reveal">
            <div class="rounded-xl2 bg-white/5 border border-white/10 p-7">
              <div class="flex items-center justify-between mb-1"><span class="text-xs tracking-[.2em] uppercase text-paper/50">Traffic</span><span class="inline-flex items-center gap-1 text-sm font-semibold text-accent">+<span class="count" data-to="128">0</span>% <iconify-icon icon="lucide:trending-up"></iconify-icon></span></div>
              <p class="font-display text-4xl tt"><span class="count" data-to="48">0</span>.2k <span class="text-base text-paper/60 font-normal">visits / mo</span></p>
              <svg viewBox="0 0 320 130" class="w-full mt-4" fill="none">
                <polyline class="area" points="0,120 0,90 50,96 100,70 150,78 200,46 260,40 320,16 320,120" fill="#fa5539" fill-opacity="0.12" />
                <polyline class="draw" points="0,90 50,96 100,70 150,78 200,46 260,40 320,16" pathLength="1" stroke="#fa5539" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <circle cx="320" cy="16" r="4" fill="#fa5539" />
              </svg>
              <div class="grid grid-cols-3 gap-3 mt-3">
                <div class="rounded-xl bg-white/5 p-3"><p class="text-[11px] text-paper/50">Leads</p><p class="font-display tt text-lg"><span class="count" data-to="3140">0</span></p></div>
                <div class="rounded-xl bg-white/5 p-3"><p class="text-[11px] text-paper/50">CVR</p><p class="font-display tt text-lg"><span class="count" data-to="4">0</span>.2%</p></div>
                <div class="rounded-xl bg-white/5 p-3"><p class="text-[11px] text-paper/50">Revenue</p><p class="font-display tt text-lg text-accent">↑</p></div>
              </div>
            </div>
          </div>
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'digital_marketing_analytics_eyebrow', false, 'No black boxes' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'digital_marketing_analytics_heading', false, 'Dashboards, not vanity metrics' ) ); ?></h2>
            <p class="reveal text-paper/60 mt-5 max-w-md leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'digital_marketing_analytics_text', false, "As an online marketing agency in Jaipur, we give you a live view of what's working — traffic, leads, conversion rate and revenue impact — with clear attribution, so every rupee of marketing is accountable." ) ); ?></p>
            <!-- IMAGE PLACEHOLDER -->
            <figure class="imgph rounded-xl2 aspect-[16/9] bg-white/[0.04] border border-white/10 mt-10 reveal" data-delay="1">
              <img src="<?php echo esc_url( bx_img_url( 'digital_marketing_analytics_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/ga-dashboard.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'digital_marketing_analytics_image_alt', false, 'Google Analytics 4 dashboard showing traffic, leads and conversion trends' ) ); ?>" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'digital_marketing_analytics_image_caption_title', false, 'Analytics dashboard · 1280×720' ) ); ?></b><span><?php echo esc_html( bx_field( 'digital_marketing_analytics_image_caption_text', false, 'Screenshot of a GA4 / Looker Studio report with traffic, leads and conversion trends. Anonymise data.' ) ); ?></span></figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- PROCESS -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'digital_marketing_process_eyebrow', false, 'Our process' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'digital_marketing_process_heading', false, 'Strategy first, always' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_digital_marketing_render_process(); ?>
          </div>
          <div class="reveal mt-8 rounded-2xl border border-line bg-surface p-6 flex items-center gap-4" data-delay="1">
            <span class="grid place-items-center h-12 w-12 rounded-full bg-ink text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-xl text-accent"></iconify-icon></span>
            <p class="text-sm text-ink-soft"><?php echo esc_html( bx_field( 'digital_marketing_process_note', false, 'Run by the BoostronixX growth team — a growth marketing agency in Jaipur with strategy, content, design and analytics in-house, building your full funnel marketing strategy and reporting against real business goals.' ) ); ?></p>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'digital_marketing_faq_eyebrow', false, 'FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'digital_marketing_faq_heading', false, 'Digital marketing, answered' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_digital_marketing_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'digital_marketing_related_eyebrow', false, 'Pairs well with' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_digital_marketing_render_related(); ?>
          </div>
          <?php
          $dm_cta_btn        = get_field( 'digital_marketing_cta_button' );
          $dm_cta_btn_url    = is_array( $dm_cta_btn ) && ! empty( $dm_cta_btn['url'] ) ? $dm_cta_btn['url'] : '/contact-us/';
          $dm_cta_btn_label  = is_array( $dm_cta_btn ) && ! empty( $dm_cta_btn['title'] ) ? $dm_cta_btn['title'] : 'Plan my growth';
          $dm_cta_btn2       = get_field( 'digital_marketing_cta_button_secondary' );
          $dm_cta_btn2_url   = is_array( $dm_cta_btn2 ) && ! empty( $dm_cta_btn2['url'] ) ? $dm_cta_btn2['url'] : '/services/';
          $dm_cta_btn2_label = is_array( $dm_cta_btn2 ) && ! empty( $dm_cta_btn2['title'] ) ? $dm_cta_btn2['title'] : 'All services';
          ?>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'digital_marketing_cta_heading', false, "Let's build your growth engine" ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'digital_marketing_cta_text', false, "Book a free strategy call — we'll map your funnel and the channels that will move it fastest." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $dm_cta_btn_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $dm_cta_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $dm_cta_btn2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $dm_cta_btn2_label ); ?></span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'digital_marketing_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/digital-marketing-cta-image.avif', false, 'BoostronixX digital marketing team in Jaipur' ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
