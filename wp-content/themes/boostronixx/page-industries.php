<?php
/**
 * Template Name: Industries
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bx_ind_hero_btn = function_exists( 'get_field' ) ? get_field( 'industries_hero_button' ) : false;
$bx_ind_hero_btn_url = ( is_array( $bx_ind_hero_btn ) && ! empty( $bx_ind_hero_btn['url'] ) ) ? $bx_ind_hero_btn['url'] : '#sectors';
$bx_ind_hero_btn_txt = ( is_array( $bx_ind_hero_btn ) && ! empty( $bx_ind_hero_btn['title'] ) ) ? $bx_ind_hero_btn['title'] : 'See your sector';

$bx_ind_proof_btn = function_exists( 'get_field' ) ? get_field( 'industries_proof_button' ) : false;
$bx_ind_proof_btn_url = ( is_array( $bx_ind_proof_btn ) && ! empty( $bx_ind_proof_btn['url'] ) ) ? $bx_ind_proof_btn['url'] : '/portfolio/';
$bx_ind_proof_btn_txt = ( is_array( $bx_ind_proof_btn ) && ! empty( $bx_ind_proof_btn['title'] ) ) ? $bx_ind_proof_btn['title'] : 'View all work';

$bx_ind_cta1 = function_exists( 'get_field' ) ? get_field( 'industries_cta_button_primary' ) : false;
$bx_ind_cta1_url = ( is_array( $bx_ind_cta1 ) && ! empty( $bx_ind_cta1['url'] ) ) ? $bx_ind_cta1['url'] : '/contact/';
$bx_ind_cta1_txt = ( is_array( $bx_ind_cta1 ) && ! empty( $bx_ind_cta1['title'] ) ) ? $bx_ind_cta1['title'] : 'Get a sector strategy';

$bx_ind_cta2 = function_exists( 'get_field' ) ? get_field( 'industries_cta_button_secondary' ) : false;
$bx_ind_cta2_url = ( is_array( $bx_ind_cta2 ) && ! empty( $bx_ind_cta2['url'] ) ) ? $bx_ind_cta2['url'] : '/services/';
$bx_ind_cta2_txt = ( is_array( $bx_ind_cta2 ) && ! empty( $bx_ind_cta2['title'] ) ) ? $bx_ind_cta2['title'] : 'See all services';
?>

<main id="main">
      <!-- HERO -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:-30px;left:-50px" aria-hidden="true"></span>
        <span class="orb orb-b" style="width:260px;height:260px;background:#ffc59e;bottom:-50px;right:8%" aria-hidden="true"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Industries</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><span class="h-2 w-2 rounded-full bg-accent" aria-hidden="true"></span> <?php echo esc_html( bx_field( 'industries_hero_badge', false, 'Industries we empower · 15+ sectors' ) ); ?></div>
              <h1 class="reveal font-display text-[2.5rem] leading-[0.98] sm:text-7xl lg:text-[4.6rem] tt">
                <?php echo esc_html( bx_field( 'industries_hero_heading', false, 'Growth, tailored to' ) ); ?><br class="hidden sm:block" />
                <span id="rotind" class="text-accent"><?php echo esc_html( bx_field( 'industries_hero_rotating', false, 'real estate' ) ); ?></span><span class="caret" aria-hidden="true"></span>
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1"><?php
              $bx_ind_hero_sub = function_exists( 'get_field' ) ? get_field( 'industries_hero_subheading' ) : '';
              if ( $bx_ind_hero_sub ) {
                echo esc_html( $bx_ind_hero_sub );
              } else {
                echo 'Same in-house team, a different playbook for every sector — that\'s what industry-specific digital marketing in Jaipur looks like with us. We learn how <em>your</em> customers buy, then build the brand and campaigns that win them.';
              }
              ?></p>
              <a href="<?php echo esc_url( $bx_ind_hero_btn_url ); ?>" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-6 font-medium" data-delay="2"><span class="relative z-10 sheen-text"><?php echo esc_html( $bx_ind_hero_btn_txt ); ?></span><iconify-icon icon="lucide:arrow-down" class="relative z-10" aria-hidden="true"></iconify-icon></a>
            </div>
          </div>

          <!-- stat band -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px mt-12 rounded-2xl overflow-hidden border border-line bg-line" data-delay="2">
<?php bx_industries_render_stats(); ?>
          </div>
        </div>
      </section>

      <!-- SECTOR BENTO -->
      <section id="sectors" class="py-16 sm:py-24" aria-label="Industries">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'industries_sectors_eyebrow', false, 'Pick your sector' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'industries_sectors_heading', false, 'Four sectors we know inside out' ) ); ?></h2>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
            <!-- ============ REAL ESTATE (wide) — skyline + leads ============ -->
            <a href="/industries/real-estate/" class="icard reveal group md:col-span-2 lg:col-span-3 rounded-xl2 border border-line bg-paper p-5 sm:p-6 grid sm:grid-cols-2 gap-6 items-center" aria-label="Real estate marketing">
              <!-- visual: skyline + leads stat -->
              <div class="relative rounded-2xl bg-ink text-paper p-5 overflow-hidden min-h-[210px] flex flex-col">
                <div class="absolute inset-0 grid-lines opacity-[0.08]" aria-hidden="true"></div>
                <div class="relative flex items-center justify-between">
                  <span class="text-[11px] tracking-[.18em] uppercase text-paper/50">Site visits · 90d</span>
                  <span class="inline-flex items-center gap-1 text-sm font-semibold text-accent">+<span class="count" data-to="128">0</span>% <iconify-icon icon="lucide:trending-up" aria-hidden="true"></iconify-icon></span>
                </div>
                <!-- skyline -->
                <div class="relative mt-auto flex items-end justify-center gap-2 h-28" aria-hidden="true">
                  <div class="bar2 w-7 bg-white/15" style="--h:42%"></div>
                  <div class="bar2 w-8 bg-white/20" style="--h:64%"></div>
                  <div class="bar2 w-9 relative bg-gradient-to-t from-accent/80 to-accent/30" style="--h:92%">
                    <span class="absolute -top-9 left-1/2 -translate-x-1/2 grid place-items-center h-7 w-7 rounded-full bg-accent text-paper text-sm shadow-lg"><iconify-icon icon="lucide:map-pin" aria-hidden="true"></iconify-icon></span>
                  </div>
                  <div class="bar2 w-8 bg-white/20" style="--h:72%"></div>
                  <div class="bar2 w-7 bg-white/15" style="--h:50%"></div>
                </div>
              </div>
              <!-- content -->
              <div>
                <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium"><iconify-icon icon="lucide:building-2" class="text-accent" aria-hidden="true"></iconify-icon> Real Estate</span>
                <h3 class="font-display text-2xl sm:text-3xl tt mt-3">Fill projects faster with qualified leads</h3>
                <p class="text-ink-soft text-sm mt-2 max-w-md">Digital marketing for real estate in Jaipur that brings serious buyers, not tyre-kickers — site-visit campaigns, RERA-ready brand trust and follow-up that closes.</p>
                <div class="flex flex-wrap gap-2 mt-4 text-xs">
                  <span class="rounded-full border border-line px-2.5 py-1">Lead Gen</span>
                  <span class="rounded-full border border-line px-2.5 py-1">Project Branding</span>
                  <span class="rounded-full border border-line px-2.5 py-1">Performance Ads</span>
                </div>
                <span class="mt-5 inline-flex items-center gap-2 text-sm font-medium">Explore real estate <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></span></span>
              </div>
            </a>

            <!-- ============ SCHOOLS — admissions ring ============ -->
            <a href="/industries/schools/" class="icard reveal group rounded-xl2 border border-line bg-paper p-5 flex flex-col" aria-label="School and admissions marketing">
              <div class="rounded-2xl bg-surface border border-line p-5 min-h-[200px] flex flex-col">
                <div class="flex items-center gap-3">
                  <svg viewBox="0 0 80 80" class="h-16 w-16 -rotate-90 shrink-0" aria-hidden="true">
                    <circle cx="40" cy="40" r="32" fill="none" stroke="#e6e1da" stroke-width="8" />
                    <circle class="ring2" cx="40" cy="40" r="32" fill="none" stroke="#fa5539" stroke-width="8" stroke-linecap="round" stroke-dasharray="201" style="--c:201;--o:36" />
                  </svg>
                  <div><p class="font-display text-2xl tt">82%</p><p class="text-xs text-ink-soft">seats filled</p></div>
                  <span class="ml-auto text-right"><span class="block font-display text-xl tt text-accent">+<span class="count" data-to="96">0</span>%</span><span class="block text-[11px] text-ink-soft">enquiries</span></span>
                </div>
                <div class="mt-4 space-y-2">
                  <div class="pop2 s1 flex items-center gap-2 rounded-lg bg-paper border border-line px-3 py-2 text-xs"><iconify-icon icon="lucide:check-circle" class="text-accent" aria-hidden="true"></iconify-icon> Enquiry received</div>
                  <div class="pop2 s2 flex items-center gap-2 rounded-lg bg-paper border border-line px-3 py-2 text-xs"><iconify-icon icon="lucide:check-circle" class="text-accent" aria-hidden="true"></iconify-icon> School visit booked</div>
                  <div class="pop2 s3 flex items-center gap-2 rounded-lg bg-paper border border-line px-3 py-2 text-xs text-ink-soft"><iconify-icon icon="lucide:play-circle" class="text-accent" aria-hidden="true"></iconify-icon> Application · in progress</div>
                </div>
              </div>
              <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium mt-5 w-fit"><iconify-icon icon="lucide:graduation-cap" class="text-accent" aria-hidden="true"></iconify-icon> Schools</span>
              <h3 class="font-display text-2xl tt mt-3">Fill your admission seats</h3>
              <p class="text-ink-soft text-sm mt-2">School marketing in Jaipur done right — trust-led branding, local SEO and admission-season campaigns that turn parent searches into enquiries and seats.</p>
              <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium">Explore <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span></span>
            </a>

            <!-- ============ D2C — product card + cart ============ -->
            <a href="/industries/d2c-ecommerce/" class="icard reveal group rounded-xl2 border border-line bg-paper p-5 flex flex-col" data-delay="1" aria-label="D2C eCommerce marketing">
              <div class="rounded-2xl bg-surface border border-line p-5 min-h-[200px] flex flex-col">
                <div class="rounded-xl bg-paper border border-line p-3">
                  <div class="pop2 s1 rounded-lg h-20 bg-gradient-to-br from-accent/30 via-[#ff8a5c]/20 to-surface-2 grid place-items-center" aria-hidden="true"><iconify-icon icon="lucide:package" class="text-3xl text-accent/70"></iconify-icon></div>
                  <div class="flex items-center justify-between mt-2.5">
                    <div><p class="text-sm font-medium">Bestseller</p><p class="text-accent font-display tt">₹<span class="count" data-to="899">0</span></p></div>
                    <span class="pop2 s2 text-accent text-xs" aria-label="5 star rating">★★★★★</span>
                  </div>
                </div>
                <div class="mt-3 flex items-center gap-2">
                  <span class="flex-1 rounded-full bg-ink text-paper text-center text-xs font-medium py-2.5">Add to cart</span>
                  <span class="relative grid place-items-center h-9 w-9 rounded-full bg-paper border border-line text-ink"><iconify-icon icon="lucide:shopping-cart" aria-hidden="true"></iconify-icon><span class="cartpulse absolute -top-1 -right-1 grid place-items-center h-5 w-5 rounded-full bg-accent text-paper text-[10px] font-bold"><span class="count" data-to="3">0</span></span></span>
                </div>
              </div>
              <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium mt-5 w-fit"><iconify-icon icon="lucide:shopping-bag" class="text-accent" aria-hidden="true"></iconify-icon> D2C eCommerce</span>
              <h3 class="font-display text-2xl tt mt-3">Scale orders, profitably</h3>
              <p class="text-ink-soft text-sm mt-2">eCommerce marketing in Jaipur built to scale — scroll-stopping creative, profitable paid social and a brand customers come back to.</p>
              <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium">Explore <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span></span>
            </a>

            <!-- ============ HOSPITALS — heartbeat + appointments ============ -->
            <a href="/industries/hospitals/" class="icard reveal group rounded-xl2 border border-line bg-paper p-5 flex flex-col" data-delay="2" aria-label="Hospital and healthcare marketing">
              <div class="relative rounded-2xl bg-ink text-paper p-5 overflow-hidden min-h-[200px] flex flex-col">
                <div class="absolute inset-0 grid-lines opacity-[0.08]" aria-hidden="true"></div>
                <div class="relative flex items-center justify-between">
                  <span class="text-[11px] tracking-[.18em] uppercase text-paper/50">Appointments · today</span>
                  <span class="inline-flex items-center gap-1 text-sm font-semibold text-accent">+<span class="count" data-to="142">0</span>%</span>
                </div>
                <svg viewBox="0 0 240 84" class="relative w-full mt-3 flex-1" fill="none" aria-hidden="true">
                  <polyline class="draw2" points="0,46 64,46 78,46 88,18 98,74 108,46 150,46 164,46 174,20 184,72 194,46 240,46" pathLength="1" stroke="#fa5539" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="relative mt-3 flex items-center gap-2 rounded-xl bg-white/5 border border-white/10 px-3 py-2">
                  <span class="grid place-items-center h-7 w-7 rounded-full bg-accent/20 text-accent shrink-0" aria-hidden="true"><iconify-icon icon="lucide:stethoscope" class="text-sm"></iconify-icon></span>
                  <span class="leading-tight"><span class="block text-xs font-medium">Dr. Mehta · Cardiology</span><span class="block text-[11px] text-paper/50">Today · 4 slots left</span></span>
                  <span class="ml-auto text-accent text-xs font-semibold">Book</span>
                </div>
              </div>
              <span class="inline-flex items-center gap-2 rounded-full bg-surface px-3 py-1 text-xs font-medium mt-5 w-fit"><iconify-icon icon="lucide:heart-pulse" class="text-accent" aria-hidden="true"></iconify-icon> Hospitals</span>
              <h3 class="font-display text-2xl tt mt-3">Fill your appointment book</h3>
              <p class="text-ink-soft text-sm mt-2">Healthcare marketing in Jaipur with a conscience — trust-led branding, local SEO and ethical campaigns that turn "near me" searches into booked appointments.</p>
              <span class="mt-4 inline-flex items-center gap-2 text-sm font-medium">Explore <span class="iarr grid place-items-center h-8 w-8 rounded-full border border-line"><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span></span>
            </a>
          </div>
          <p class="reveal text-sm text-ink-soft mt-6" data-delay="1"><?php
          $bx_ind_sectors_footer = function_exists( 'get_field' ) ? get_field( 'industries_sectors_footer' ) : '';
          if ( $bx_ind_sectors_footer ) {
            echo esc_html( $bx_ind_sectors_footer );
          } else {
            echo 'Don\'t see your industry? Our industry-specific digital marketing in Jaipur spans 15+ sectors — <a href="/contact/" class="underline underline-offset-2 decoration-accent text-ink hover:text-accent">tell us about yours</a>.';
          }
          ?></p>
        </div>
      </section>

      <!-- HOW WE TAILOR -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="How we tailor it">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'industries_tailor_eyebrow', false, 'Same craft, sector-specific strategy' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'industries_tailor_heading', false, 'How industry-specific digital marketing in Jaipur works' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'industries_tailor_text', false, 'Our seven services stay the same — what changes is the strategy behind them. As a sector-specific marketing agency in Jaipur, we adapt the message, channels and metrics to how your industry actually buys.' ) ); ?></p>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
<?php bx_industries_render_tailor(); ?>
          </div>
        </div>
      </section>

      <!-- PROOF (E-E-A-T) -->
      <section class="py-20 sm:py-28" aria-label="Proof of industry work">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-10">
            <div>
              <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'industries_proof_eyebrow', false, 'Proof, by sector' ) ); ?></p>
              <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'industries_proof_heading', false, "We've done it in your space" ) ); ?></h2>
            </div>
            <a href="<?php echo esc_url( $bx_ind_proof_btn_url ); ?>" class="reveal group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium" data-delay="1"><span class="relative z-10 sheen-text-dark"><?php echo esc_html( $bx_ind_proof_btn_txt ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
<?php bx_industries_render_proof(); ?>
          </div>

          <!-- testimonial -->
          <figure class="reveal mt-10 rounded-xl2 bg-ink text-paper p-8 sm:p-12 relative overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
            <iconify-icon icon="lucide:quote" class="absolute right-6 top-6 text-6xl text-accent/15" aria-hidden="true"></iconify-icon>
            <blockquote class="relative font-display text-2xl sm:text-3xl tt leading-snug max-w-3xl"><?php echo esc_html( bx_field( 'industries_proof_quote', false, '"They understood our market from day one — the campaigns felt built for our buyers, not copy-pasted from another industry."' ) ); ?></blockquote>
            <figcaption class="relative mt-5 flex items-center gap-3">
              <span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display" aria-hidden="true"><?php echo esc_html( bx_field( 'industries_proof_initial', false, 'V' ) ); ?></span>
              <span class="text-sm"><span class="block font-medium"><?php echo esc_html( bx_field( 'industries_proof_name', false, 'Vikram Rathore' ) ); ?></span><span class="block text-paper/50 text-xs"><?php echo esc_html( bx_field( 'industries_proof_role', false, 'Real estate · BoostronixX client' ) ); ?></span></span>
              <span class="ml-auto text-accent text-sm" aria-label="5 out of 5 stars">★★★★★</span>
            </figcaption>
          </figure>
        </div>
      </section>

      <!-- SERVICE x INDUSTRY MATRIX -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="Services for your industry">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'industries_matrix_eyebrow', false, 'Everything, applied to your sector' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'industries_matrix_heading', false, 'The full stack, tuned for you' ) ); ?></h2>
          </div>
          <div class="reveal flex flex-wrap gap-3" data-delay="1">
<?php bx_industries_render_matrix(); ?>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28" aria-label="Frequently asked questions">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'industries_faq_eyebrow', false, 'FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'industries_faq_heading', false, 'Industry questions' ) ); ?></h2></div>
          <div class="space-y-3">
<?php bx_industries_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="pb-20 sm:pb-28" aria-label="Get started">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
            <div class="absolute right-6 top-6 sm:right-12 sm:top-12 h-24 w-24 spin hidden sm:block" aria-hidden="true">
              <svg viewBox="0 0 100 100" class="w-full h-full"><defs><path id="c2" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs><text font-size="9.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c2">YOUR SECTOR · YOUR GROWTH ·</textPath></text></svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
            </div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-6xl tt leading-[1.02]"><?php echo esc_html( bx_field( 'industries_cta_heading', false, "Let's build a strategy for your sector" ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'industries_cta_text', false, "Tell us your industry and goal — we'll come back with sector-specific quick wins and a roadmap. Free, no obligation." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $bx_ind_cta1_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $bx_ind_cta1_txt ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="<?php echo esc_url( $bx_ind_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10"><?php echo esc_html( $bx_ind_cta2_txt ); ?></span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'industries_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/industries-cta-image.avif', false, 'BoostronixX industry marketing specialists', 420, 525 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
