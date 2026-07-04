<?php
/**
 * Template Name: Website Design
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- HERO: browser building in -->
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Website Design</span>
          </nav>
          <div class="text-center max-w-3xl mx-auto">
            <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:gauge" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'website_design_hero_badge', false, 'Fast · Responsive · SEO-ready' ) ); ?></div>
            <h1 class="reveal font-display text-[2.6rem] leading-[0.98] sm:text-7xl tt"><?php echo esc_html( bx_field( 'website_design_hero_heading_a', false, 'Websites that load fast' ) ); ?><br class="hidden sm:block" /> &amp; <?php echo esc_html( bx_field( 'website_design_hero_heading_b', false, '' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'website_design_hero_heading_accent', false, 'convert faster' ) ); ?></span></h1>
            <p class="reveal text-ink-soft mt-5 max-w-xl mx-auto leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'website_design_hero_text', false, 'As a website design company in Jaipur, we build everything from marketing sites to product front-ends — engineered for Core Web Vitals, built to convert, and easy for your team to manage.' ) ); ?></p>
            <?php
            $wd_hero_cta1 = get_field( 'website_design_hero_cta_primary' );
            $wd_hero_cta1_url   = is_array( $wd_hero_cta1 ) && ! empty( $wd_hero_cta1['url'] ) ? $wd_hero_cta1['url'] : '/contact/';
            $wd_hero_cta1_label = is_array( $wd_hero_cta1 ) && ! empty( $wd_hero_cta1['title'] ) ? $wd_hero_cta1['title'] : 'Build my website';
            $wd_hero_cta2 = get_field( 'website_design_hero_cta_secondary' );
            $wd_hero_cta2_url   = is_array( $wd_hero_cta2 ) && ! empty( $wd_hero_cta2['url'] ) ? $wd_hero_cta2['url'] : '#perf';
            $wd_hero_cta2_label = is_array( $wd_hero_cta2 ) && ! empty( $wd_hero_cta2['title'] ) ? $wd_hero_cta2['title'] : 'See performance';
            ?>
            <div class="reveal flex flex-wrap items-center justify-center gap-3 mt-7" data-delay="2">
              <a href="<?php echo esc_url( $wd_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $wd_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
              <a href="<?php echo esc_url( $wd_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:zap" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $wd_hero_cta2_label ); ?></span></a>
            </div>
          </div>

          <!-- BROWSER MOCK -->
          <div class="reveal mt-12 max-w-4xl mx-auto" data-delay="2">
            <div class="bg-paper border border-line rounded-[1.25rem] shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] overflow-hidden">
              <div class="flex items-center gap-2 px-4 py-3 border-b border-line bg-surface">
                <span class="h-3 w-3 rounded-full bg-[#ff5f57]"></span><span class="h-3 w-3 rounded-full bg-[#febc2e]"></span><span class="h-3 w-3 rounded-full bg-[#28c840]"></span>
                <span class="ml-3 flex-1 rounded-full bg-paper border border-line px-3 py-1 text-xs text-ink-soft inline-flex items-center gap-2"><iconify-icon icon="lucide:lock" class="text-[11px] text-accent"></iconify-icon> www.yourbrand.com</span>
                <iconify-icon icon="lucide:refresh-cw" class="text-ink-soft text-sm"></iconify-icon>
              </div>
              <div class="p-5 sm:p-7">
                <div class="blk b1 flex items-center justify-between mb-5"><span class="font-display tt text-lg">YourBrand</span><div class="hidden sm:flex gap-4 text-xs text-ink-soft"><span>Home</span><span>Work</span><span>About</span><span class="rounded-full bg-ink text-paper px-3 py-1.5">Contact</span></div></div>
                <div class="blk b2 grid sm:grid-cols-2 gap-5 items-center">
                  <div><div class="h-9 w-3/4 rounded bg-surface-2 mb-2"></div><div class="h-9 w-1/2 rounded bg-accent/20 mb-3"></div><div class="h-3 w-full rounded bg-surface-2 mb-1.5"></div><div class="h-3 w-2/3 rounded bg-surface-2 mb-4"></div><div class="h-9 w-32 rounded-full bg-ink"></div></div>
                  <div class="rounded-xl bg-gradient-to-br from-accent/30 to-accent/5 aspect-[4/3] grid place-items-center"><iconify-icon icon="lucide:image" class="text-3xl text-accent/50"></iconify-icon></div>
                </div>
                <div class="blk b3 grid grid-cols-3 gap-3 mt-5">
                  <div class="rounded-xl border border-line p-3"><div class="h-7 w-7 rounded-lg bg-accent/20 mb-2"></div><div class="h-2.5 w-full rounded bg-surface-2"></div></div>
                  <div class="rounded-xl border border-line p-3"><div class="h-7 w-7 rounded-lg bg-accent/20 mb-2"></div><div class="h-2.5 w-full rounded bg-surface-2"></div></div>
                  <div class="rounded-xl border border-line p-3"><div class="h-7 w-7 rounded-lg bg-accent/20 mb-2"></div><div class="h-2.5 w-full rounded bg-surface-2"></div></div>
                </div>
                <div class="blk b4 mt-5 rounded-xl bg-ink text-paper p-4 flex items-center justify-between"><span class="font-display tt">Ready to grow?</span><span class="rounded-full bg-accent text-paper text-xs px-3 py-1.5">Get started</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- RESPONSIVE SWITCHER -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 text-center">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'website_design_responsive_eyebrow', false, 'Looks right everywhere' ) ); ?></p>
          <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'website_design_responsive_heading', false, 'Responsive website designing in Jaipur, pixel-perfect on every screen' ) ); ?></h2>
          <div class="reveal flex items-center justify-center gap-2 mt-8" data-delay="1">
            <button class="device-btn active rounded-full border border-line px-4 py-2 text-sm font-medium inline-flex items-center gap-2" data-w="100%"><iconify-icon icon="lucide:monitor"></iconify-icon> Desktop</button>
            <button class="device-btn rounded-full border border-line px-4 py-2 text-sm font-medium inline-flex items-center gap-2" data-w="640px"><iconify-icon icon="lucide:tablet"></iconify-icon> Tablet</button>
            <button class="device-btn rounded-full border border-line px-4 py-2 text-sm font-medium inline-flex items-center gap-2" data-w="360px"><iconify-icon icon="lucide:smartphone"></iconify-icon> Mobile</button>
          </div>
          <div class="reveal mt-8 flex justify-center" data-delay="1">
            <div id="viewport" class="bg-paper border border-line rounded-[1.25rem] shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] overflow-hidden mx-auto w-full" style="max-width:100%">
              <div class="flex items-center gap-2 px-4 py-2.5 border-b border-line bg-surface"><span class="h-2.5 w-2.5 rounded-full bg-[#ff5f57]"></span><span class="h-2.5 w-2.5 rounded-full bg-[#febc2e]"></span><span class="h-2.5 w-2.5 rounded-full bg-[#28c840]"></span></div>
              <div class="p-5">
                <div class="flex items-center justify-between mb-4"><span class="font-display tt">YourBrand</span><span class="rounded-full bg-ink text-paper text-[11px] px-3 py-1.5">Menu</span></div>
                <div class="rounded-xl bg-gradient-to-br from-accent/25 to-accent/5 h-28 grid place-items-center mb-3"><span class="font-display tt text-xl">Hero section</span></div>
                <div class="grid grid-cols-2 gap-3"><div class="rounded-lg border border-line h-16"></div><div class="rounded-lg border border-line h-16"></div></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PERFORMANCE GAUGES -->
      <section id="perf" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'website_design_perf_eyebrow', false, 'Built for speed' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'website_design_perf_heading', false, 'Performance you can measure' ) ); ?></h2><p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'website_design_perf_text', false, 'As a web development company in Jaipur, we engineer for Core Web Vitals and page speed from day one — because fast sites rank better, convert better and feel better.' ) ); ?></p></div>
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-4" data-delay="1">
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#2e7d5b" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:24" /></svg>
              <p class="font-display text-2xl tt -mt-20">98</p>
              <p class="text-sm text-ink-soft mt-14">Performance</p>
            </div>
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#2e7d5b" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:18" /></svg>
              <p class="font-display text-2xl tt -mt-20">100</p>
              <p class="text-sm text-ink-soft mt-14">Accessibility</p>
            </div>
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#fa5539" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:28" /></svg>
              <p class="font-display text-2xl tt -mt-20">95</p>
              <p class="text-sm text-ink-soft mt-14">Best Practices</p>
            </div>
            <div class="rounded-xl2 border border-line p-6 text-center">
              <svg viewBox="0 0 120 120" class="w-28 h-28 mx-auto -rotate-90"><circle cx="60" cy="60" r="50" fill="none" stroke="#e6e1da" stroke-width="10" /><circle class="ring-fg" cx="60" cy="60" r="50" fill="none" stroke="#2e7d5b" stroke-width="10" stroke-linecap="round" stroke-dasharray="314" style="--c:314;--o:20" /></svg>
              <p class="font-display text-2xl tt -mt-20">99</p>
              <p class="text-sm text-ink-soft mt-14">SEO</p>
            </div>
          </div>
          <p class="reveal text-xs text-ink-soft mt-5" data-delay="2"><?php echo esc_html( bx_field( 'website_design_perf_footnote', false, 'Illustrative Lighthouse scores — we target 90+ across the board on every build.' ) ); ?></p>
        </div>
      </section>

      <!-- WHAT WE BUILD -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'website_design_build_eyebrow', false, 'What we build' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'website_design_build_heading', false, 'A website design company in Jaipur for every job' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_website_design_render_build(); ?>
          </div>
          <!-- IMAGE PLACEHOLDER -->
          <figure class="imgph rounded-xl2 aspect-[16/7] bg-surface-2 border border-line mt-12 reveal">
            <img width="1230" height="537" src="<?php echo esc_url( bx_img_url( 'website_design_build_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/website-showcase.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'website_design_build_image_alt', false, 'Responsive BoostronixX website shown across desktop, tablet and mobile devices' ) ); ?>" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'website_design_build_image_caption_a', false, 'Device showcase · 1600×700' ) ); ?></b><span><?php echo esc_html( bx_field( 'website_design_build_image_caption_b', false, 'A real client website displayed across desktop, tablet and phone frames — proves responsive, polished delivery.' ) ); ?></span></figcaption>
          </figure>
        </div>
      </section>

      <!-- PROCESS -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'website_design_process_eyebrow', false, 'How we build' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'website_design_process_heading', false, 'Design. Build. Test. Launch.' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_website_design_render_process(); ?>
          </div>
          <div class="reveal mt-8 rounded-2xl border border-line bg-surface p-6 flex items-center gap-4" data-delay="1">
            <span class="grid place-items-center h-12 w-12 rounded-full bg-ink text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-xl text-accent"></iconify-icon></span>
            <p class="text-sm text-ink-soft"><?php echo esc_html( bx_field( 'website_design_process_callout', false, 'Built by the BoostronixX web team — affordable website design in Jaipur with SEO-ready markup, Core Web Vitals tuned, and a CMS your team can actually use.' ) ); ?></p>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'website_design_faq_eyebrow', false, 'FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'website_design_faq_heading', false, 'Website questions' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_website_design_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'website_design_related_eyebrow', false, 'Pairs well with' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_website_design_render_related(); ?>
          </div>
          <?php
          $wd_cta_btn1 = get_field( 'website_design_cta_button_primary' );
          $wd_cta_btn1_url   = is_array( $wd_cta_btn1 ) && ! empty( $wd_cta_btn1['url'] ) ? $wd_cta_btn1['url'] : '/contact/';
          $wd_cta_btn1_label = is_array( $wd_cta_btn1 ) && ! empty( $wd_cta_btn1['title'] ) ? $wd_cta_btn1['title'] : 'Get a website quote';
          $wd_cta_btn2 = get_field( 'website_design_cta_button_secondary' );
          $wd_cta_btn2_url   = is_array( $wd_cta_btn2 ) && ! empty( $wd_cta_btn2['url'] ) ? $wd_cta_btn2['url'] : '/portfolio/';
          $wd_cta_btn2_label = is_array( $wd_cta_btn2 ) && ! empty( $wd_cta_btn2['title'] ) ? $wd_cta_btn2['title'] : "See sites we've built";
          ?>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'website_design_cta_heading', false, "Let's build a site that works as hard as you do" ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'website_design_cta_text', false, "Tell us about your project — we'll scope a fast, beautiful, SEO-ready website around your goals." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $wd_cta_btn1_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $wd_cta_btn1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $wd_cta_btn2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:briefcase" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $wd_cta_btn2_label ); ?></span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'website_design_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/website-design-cta-image.avif', false, 'BoostronixX website design team in Jaipur', 420, 447 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
