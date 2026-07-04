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

$bx_services_hero_btn  = function_exists( 'get_field' ) ? get_field( 'services_hero_btn' ) : false;
$bx_services_hero_btn_url = ( is_array( $bx_services_hero_btn ) && ! empty( $bx_services_hero_btn['url'] ) ) ? $bx_services_hero_btn['url'] : '#services-list';
$bx_services_hero_btn_txt = ( is_array( $bx_services_hero_btn ) && ! empty( $bx_services_hero_btn['title'] ) ) ? $bx_services_hero_btn['title'] : 'See all services';

$bx_services_cta1  = function_exists( 'get_field' ) ? get_field( 'services_cta_btn1' ) : false;
$bx_services_cta1_url = ( is_array( $bx_services_cta1 ) && ! empty( $bx_services_cta1['url'] ) ) ? $bx_services_cta1['url'] : '/contact/';
$bx_services_cta1_txt = ( is_array( $bx_services_cta1 ) && ! empty( $bx_services_cta1['title'] ) ) ? $bx_services_cta1['title'] : 'Set up a discovery call';
$bx_services_cta2  = function_exists( 'get_field' ) ? get_field( 'services_cta_btn2' ) : false;
$bx_services_cta2_url = ( is_array( $bx_services_cta2 ) && ! empty( $bx_services_cta2['url'] ) ) ? $bx_services_cta2['url'] : '/portfolio/';
$bx_services_cta2_txt = ( is_array( $bx_services_cta2 ) && ! empty( $bx_services_cta2['title'] ) ) ? $bx_services_cta2['title'] : 'See our work';

$bx_services_whyus_img = function_exists( 'get_field' ) ? get_field( 'services_whyus_img' ) : false;
$bx_services_whyus_img_url = ( is_array( $bx_services_whyus_img ) && ! empty( $bx_services_whyus_img['url'] ) ) ? $bx_services_whyus_img['url'] : 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/about-studio.avif';
$bx_services_whyus_img_alt = ( is_array( $bx_services_whyus_img ) && ! empty( $bx_services_whyus_img['alt'] ) ) ? $bx_services_whyus_img['alt'] : 'The BoostronixX team at work in the Jaipur studio';
?>

<main id="top">
      <!-- ===================== HERO ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:-30px;left:-50px"></span>
        <span class="orb orb-b" style="width:260px;height:260px;background:#ffc59e;bottom:-50px;right:8%"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium"><?php echo esc_html( bx_field( 'services_hero_crumb', false, 'Services' ) ); ?></span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <span class="h-2 w-2 rounded-full bg-accent"></span> <?php echo esc_html( bx_field( 'services_hero_badge', false, 'Strategy · Creative · Performance — under one roof' ) ); ?>
              </div>
              <h1 class="reveal font-display text-[2.6rem] leading-[0.96] sm:text-7xl lg:text-[4.8rem] tt">
                <?php echo esc_html( bx_field( 'services_hero_heading_a', false, 'Services that build' ) ); ?><br class="hidden sm:block" />
                <?php echo esc_html( bx_field( 'services_hero_heading_b', false, 'brands &' ) ); ?> <span class="text-accent"><?php echo esc_html( bx_field( 'services_hero_heading_accent', false, 'drive growth' ) ); ?></span>
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">
                <?php echo esc_html( bx_field( 'services_hero_sub', false, 'Digital marketing services in Jaipur done right — from brand identity to SEO, ads and product design. Seven core services, one accountable team, and dashboards that prove the work.' ) ); ?>
              </p>
              <a href="<?php echo esc_url( $bx_services_hero_btn_url ); ?>" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-6 font-medium" data-delay="2">
                <span class="relative z-10 sheen-text"><?php echo esc_html( $bx_services_hero_btn_txt ); ?></span>
                <iconify-icon icon="lucide:arrow-down" class="relative z-10"></iconify-icon>
              </a>
            </div>
          </div>

          <!-- stat band (E-E-A-T: experience signals) -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px mt-12 rounded-2xl overflow-hidden border border-line bg-line" data-delay="2">
<?php bx_services_render_stats(); ?>
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
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'services_list_eyebrow', false, 'What we do' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'services_list_heading', false, 'Digital marketing services in Jaipur, built as one growth engine' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'services_list_intro', false, 'Pick one or combine them. As a digital marketing company in Jaipur, every engagement is strategy-led, creatively crafted and measured against outcomes that matter to your business — SEO, social media, PPC, branding and web design under one roof.' ) ); ?></p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- 1 SEO (featured -> detail page) -->
            <a href="/services/seo-services/" class="scard reveal group block rounded-xl2 border border-line p-7 relative">
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
            <a href="/services/brand-consulting/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="1">
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
            <a href="/services/digital-marketing/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="2">
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
            <a href="/services/performance-marketing/" class="scard reveal group block rounded-xl2 border border-line p-7">
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
            <a href="/services/social-media-marketing/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="1">
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
            <a href="/services/ui-ux-design/" class="scard reveal group block rounded-xl2 border border-line p-7" data-delay="2">
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
            <a href="/services/website-design/" class="scard reveal group block rounded-xl2 border border-line p-7 md:col-span-2 lg:col-span-3 md:flex md:items-center md:gap-8">
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
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'services_process_eyebrow', false, 'How we deliver' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'services_process_heading', false, 'A clear path from brief to results' ) ); ?></h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_services_render_process(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== WHY US (E-E-A-T) ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
          <div class="lg:col-span-5">
            <!-- IMAGE PLACEHOLDER: team / studio -->
            <figure class="imgph rounded-xl2 aspect-4/5 reveal">
              <img width="490" height="613" src="<?php echo esc_url( $bx_services_whyus_img_url ); ?>" alt="<?php echo esc_attr( $bx_services_whyus_img_alt ); ?>" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b>Team photo · 880×1100</b><span>Real photo of the BoostronixX team / studio — builds E-E-A-T trust. Bright, candid, faces visible.</span></figcaption>
            </figure>
          </div>
          <div class="lg:col-span-7">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'services_whyus_eyebrow', false, 'Why teams choose us' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight max-w-xl"><?php echo esc_html( bx_field( 'services_whyus_heading', false, 'Expertise you can verify, results you can measure' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-xl leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'services_whyus_text', false, 'A digital marketing agency in Jaipur since 2026, we pair deep local market knowledge with a senior, in-house team across strategy, design and growth — result-driven digital marketing Jaipur founders can actually measure, because we report on everything.' ) ); ?></p>
            <div class="grid sm:grid-cols-2 gap-4 mt-8">
<?php bx_services_render_whyus_cards(); ?>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== TESTIMONIALS ===================== -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'services_testi_eyebrow', false, 'Trusted by founders' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'services_testi_heading', false, 'What clients say' ) ); ?></h2>
          </div>
          <div class="grid md:grid-cols-3 gap-5">
<?php bx_services_render_testimonials(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'services_faq_eyebrow', false, 'FAQ' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'services_faq_heading', false, 'Service questions, answered' ) ); ?></h2>
          </div>
          <div class="space-y-3">
<?php bx_services_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="absolute right-6 top-6 sm:right-12 sm:top-12 h-24 w-24 spin hidden sm:block">
              <svg viewBox="0 0 100 100" class="w-full h-full"><defs><path id="c2" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs><text font-size="10.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c2">FREE STRATEGY CALL · NO OBLIGATION ·</textPath></text></svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
            </div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-6xl tt leading-[1.02]"><?php echo esc_html( bx_field( 'services_cta_heading', false, 'Not sure which service you need?' ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'services_cta_text', false, "Tell us your goal. We'll map the right services, share quick wins and a costed roadmap — free, and with no obligation." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $bx_services_cta1_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $bx_services_cta1_txt ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $bx_services_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:briefcase" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $bx_services_cta2_txt ); ?></span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'services_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/all-service-cta-image.avif', false, 'BoostronixX full-service digital marketing team in Jaipur', 420, 525 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
