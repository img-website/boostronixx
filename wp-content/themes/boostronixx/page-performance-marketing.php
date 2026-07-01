<?php
/**
 * Template Name: Performance Marketing
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
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines-d overflow-hidden">
        <span class="glow500 absolute -top-20 right-0 w-[420px] h-[420px]"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-white/50 mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-white font-medium">Performance Marketing</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-white/12 bg-white/5 px-3 py-1.5 text-xs font-medium text-white/70 mb-5"><span class="live inline-block h-2 w-2 rounded-full bg-accent"></span> Every rupee tracked &amp; accountable</div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt"><?php echo esc_html( bx_field( 'performance_marketing_hero_heading_a', false, 'Paid ads that pay for ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'performance_marketing_hero_heading_accent', false, 'themselves' ) ); ?></span></h1>
              <p class="reveal text-white/60 mt-5 max-w-lg leading-relaxed" data-delay="1">As a performance marketing agency in Jaipur, we run Meta &amp; Google Ads on data — A/B tested, audience-segmented and optimised for the only metric that matters: return on ad spend.</p>
              <?php
              $pm_hero_cta1       = get_field( 'performance_marketing_hero_cta_primary' );
              $pm_hero_cta1_url   = is_array( $pm_hero_cta1 ) && ! empty( $pm_hero_cta1['url'] ) ? $pm_hero_cta1['url'] : '/contact-us/';
              $pm_hero_cta1_label = is_array( $pm_hero_cta1 ) && ! empty( $pm_hero_cta1['title'] ) ? $pm_hero_cta1['title'] : 'Get a free ad audit';
              $pm_hero_cta2       = get_field( 'performance_marketing_hero_cta_secondary' );
              $pm_hero_cta2_url   = is_array( $pm_hero_cta2 ) && ! empty( $pm_hero_cta2['url'] ) ? $pm_hero_cta2['url'] : '#metrics';
              $pm_hero_cta2_label = is_array( $pm_hero_cta2 ) && ! empty( $pm_hero_cta2['title'] ) ? $pm_hero_cta2['title'] : 'See the metrics';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $pm_hero_cta1_url ); ?>" class="inline-flex items-center gap-2 rounded-full bg-accent text-white px-6 py-3.5 font-medium hover:bg-white hover:text-ink transition"><?php echo esc_html( $pm_hero_cta1_label ); ?> <iconify-icon icon="lucide:arrow-right"></iconify-icon></a>
                <a href="<?php echo esc_url( $pm_hero_cta2_url ); ?>" class="inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-3.5 font-medium hover:bg-white hover:text-ink transition"><iconify-icon icon="lucide:activity"></iconify-icon> <?php echo esc_html( $pm_hero_cta2_label ); ?></a>
              </div>
            </div>
            <!-- ROAS DASHBOARD -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="rounded-xl2 bg-[#141414] border border-white/10 p-6 sm:p-8">
                <div class="flex items-center justify-between"><span class="text-xs tracking-[.2em] uppercase text-white/50">Campaign · live</span><span class="inline-flex items-center gap-1.5 text-xs text-white/60"><span class="live inline-block h-2 w-2 rounded-full bg-accent"></span> optimising</span></div>
                <div class="flex items-end gap-2 mt-5"><p class="font-display text-6xl sm:text-7xl tt text-accent"><span class="count" data-to="6">0</span>.<span class="count" data-to="4">0</span>x</p><p class="text-white/60 mb-3">ROAS</p></div>
                <div class="grid grid-cols-3 gap-3 mt-6">
                  <div class="rounded-xl bg-white/5 p-3"><p class="text-[11px] text-white/50">CTR</p><p class="font-display text-xl tt"><span class="count" data-to="3">0</span>.2%</p></div>
                  <div class="rounded-xl bg-white/5 p-3"><p class="text-[11px] text-white/50">Leads</p><p class="font-display text-xl tt"><span class="count" data-to="1240">0</span></p></div>
                  <div class="rounded-xl bg-white/5 p-3"><p class="inline-flex items-center gap-0.5 text-[11px] text-white/50">CPL <iconify-icon icon="lucide:arrow-down" class="text-accent"></iconify-icon></p><p class="font-display text-xl tt">₹<span class="count" data-to="38">0</span></p></div>
                </div>
                <div class="flex items-end gap-2 h-16 mt-6">
                  <div class="bar" style="--h:40%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:55%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:48%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:72%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                  <div class="bar" style="--h:100%;width:16%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                </div>
                <p class="text-[11px] text-white/40 mt-2">Illustrative campaign performance</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PLATFORMS -->
      <section class="py-16 sm:py-20 border-y border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-8"><?php echo esc_html( bx_field( 'performance_marketing_platforms_eyebrow', false, 'Where we run' ) ); ?></p>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <?php bx_performance_marketing_render_platforms(); ?>
          </div>
        </div>
      </section>

      <!-- A/B TESTING -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'performance_marketing_ab_eyebrow', false, 'We never guess' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'performance_marketing_ab_heading', false, 'Every creative earns its budget' ) ); ?></h2>
            <p class="reveal text-white/60 mt-5 max-w-md leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'performance_marketing_ab_text', false, 'As a PPC company in Jaipur, we A/B test headlines, ad creative and audience segments against each other, then shift spend to the winners — continuously. No favourites, just data.' ) ); ?></p>
            <div class="reveal flex flex-wrap gap-2 mt-7 text-sm" data-delay="2">
              <?php foreach ( bx_lines( bx_field( 'performance_marketing_ab_tags', false, "Creative testing\nAudience splits\nLanding-page CRO" ) ) as $pm_ab_tag ) : ?>
              <span class="rounded-full border border-white/15 px-3 py-1.5"><?php echo esc_html( $pm_ab_tag ); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="reveal grid grid-cols-2 gap-4" data-delay="1">
            <div class="rounded-2xl bg-white/5 border border-white/10 p-5">
              <div class="rounded-xl bg-gradient-to-br from-white/10 to-transparent h-24 grid place-items-center text-white/40 text-xs">Variant A</div>
              <div class="flex items-center justify-between mt-3"><span class="text-xs text-white/50">CTR</span><span class="font-display tt">1.8%</span></div>
              <div class="h-1.5 rounded-full bg-white/10 mt-2 overflow-hidden"><span class="block h-full w-[45%] bg-white/40"></span></div>
            </div>
            <div class="rounded-2xl bg-accent/10 border border-accent/40 p-5 relative">
              <span class="absolute -top-2.5 right-4 rounded-full bg-accent text-white text-[10px] font-semibold px-2 py-0.5">Winner</span>
              <div class="rounded-xl bg-gradient-to-br from-accent/40 to-transparent h-24 grid place-items-center text-white text-xs">Variant B</div>
              <div class="flex items-center justify-between mt-3"><span class="text-xs text-white/50">CTR</span><span class="font-display tt text-accent">3.2%</span></div>
              <div class="h-1.5 rounded-full bg-white/10 mt-2 overflow-hidden"><span class="block h-full w-[88%] bg-accent"></span></div>
            </div>
          </div>
        </div>
      </section>

      <!-- METRICS -->
      <section id="metrics" class="py-20 sm:py-28 border-y border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'performance_marketing_metrics_eyebrow', false, 'Metrics that matter' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'performance_marketing_metrics_heading', false, 'A performance marketing agency in Jaipur that optimises for revenue, not reach' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_performance_marketing_render_metrics(); ?>
          </div>
          <!-- IMAGE PLACEHOLDER -->
          <figure class="imgph rounded-xl2 aspect-[16/6] bg-white/[0.04] border border-white/10 mt-12 reveal">
            <img src="<?php echo esc_url( bx_img_url( 'performance_marketing_metrics_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/ads-manager.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'performance_marketing_metrics_image_alt', false, 'Meta and Google Ads manager dashboard showing ROAS and campaign performance' ) ); ?>" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'performance_marketing_metrics_image_caption_title', false, 'Ads dashboard · 1600×600' ) ); ?></b><span><?php echo esc_html( bx_field( 'performance_marketing_metrics_image_caption_sub', false, 'Screenshot of Meta Ads Manager / Google Ads with ROAS, CPL and conversion columns. Anonymise account data.' ) ); ?></span></figcaption>
          </figure>
        </div>
      </section>

      <!-- PROCESS -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'performance_marketing_process_eyebrow', false, 'Our process' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'performance_marketing_process_heading', false, 'Audit. Build. Test. Scale.' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_performance_marketing_render_process(); ?>
          </div>
          <div class="reveal mt-8 rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4" data-delay="1">
            <span class="grid place-items-center h-12 w-12 rounded-full bg-accent text-white shrink-0"><iconify-icon icon="lucide:badge-check" class="text-xl"></iconify-icon></span>
            <p class="text-sm text-white/65">Managed by the BoostronixX performance team — your Google and Facebook Ads agency in Jaipur and lead generation company in Jaipur, certified on Meta &amp; Google and reporting ROAS, CPL and leads transparently every month.</p>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28 border-t border-white/10">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'performance_marketing_faq_eyebrow', false, 'FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'performance_marketing_faq_heading', false, 'Paid ads, answered' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_performance_marketing_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="pb-20 sm:pb-28 pt-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'performance_marketing_related_eyebrow', false, 'Pairs well with' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_performance_marketing_render_related(); ?>
          </div>
          <div class="relative rounded-xl2 bg-white/5 border border-white/10 px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <span class="glow500 absolute -bottom-20 left-1/3 w-[420px] h-[420px]"></span>
            <?php
            $pm_cta_btn       = get_field( 'performance_marketing_cta_button' );
            $pm_cta_btn_url   = is_array( $pm_cta_btn ) && ! empty( $pm_cta_btn['url'] ) ? $pm_cta_btn['url'] : '/contact-us/';
            $pm_cta_btn_label = is_array( $pm_cta_btn ) && ! empty( $pm_cta_btn['title'] ) ? $pm_cta_btn['title'] : 'Get my free ad audit';
            ?>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
              <div class="relative max-w-2xl">
                <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'performance_marketing_cta_heading', false, 'See where your ad spend is leaking' ) ); ?></h2>
                <p class="text-white/60 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'performance_marketing_cta_text', false, "Get a free audit from a performance marketing agency in Jaipur that lives in the numbers — we'll show you the quick wins and what scaling could look like." ) ); ?></p>
                <div class="flex flex-wrap items-center gap-3 mt-9">
                  <a href="<?php echo esc_url( $pm_cta_btn_url ); ?>" class="inline-flex items-center gap-2 rounded-full bg-accent text-white px-7 py-4 font-medium hover:bg-white hover:text-ink transition"><?php echo esc_html( $pm_cta_btn_label ); ?> <iconify-icon icon="lucide:arrow-right"></iconify-icon></a>
                  <a href="<?php echo esc_url( bx_field( 'performance_marketing_cta_phone_href', false, 'tel:+918058212202' ) ); ?>" class="inline-flex items-center gap-2 rounded-full border border-white/20 px-7 py-4 font-medium hover:bg-white hover:text-ink transition"><iconify-icon icon="lucide:phone"></iconify-icon> <?php echo esc_html( bx_field( 'performance_marketing_cta_phone', false, '+91 80582 12202' ) ); ?></a>
                </div>
              </div>
              <?php bx_cta_image( 'performance_marketing_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/performancel-marketing-cta-image.avif', false, 'BoostronixX performance marketing team in Jaipur' ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
