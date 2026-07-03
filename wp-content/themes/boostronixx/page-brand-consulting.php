<?php
/**
 * Template Name: Brand Consulting
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
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Brand Consulting</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:palette" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'brand_consulting_hero_badge', false, 'Brand strategy & identity' ) ); ?></div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt"><?php echo esc_html( bx_field( 'brand_consulting_hero_heading', false, 'A brand people ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'brand_consulting_hero_heading_accent', false, 'instantly recognise' ) ); ?></span></h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'brand_consulting_hero_text', false, "As a branding agency in Jaipur, we build positioning, strategy, naming, logo and a complete visual identity — researched, refined and designed to convert. We make sure you look like the leader you're becoming." ) ); ?></p>
              <?php
              $bc_hero_cta1 = get_field( 'brand_consulting_hero_cta_primary' );
              $bc_hero_cta1_url   = is_array( $bc_hero_cta1 ) && ! empty( $bc_hero_cta1['url'] ) ? $bc_hero_cta1['url'] : '/contact-us/';
              $bc_hero_cta1_label = is_array( $bc_hero_cta1 ) && ! empty( $bc_hero_cta1['title'] ) ? $bc_hero_cta1['title'] : 'Start your brand';
              $bc_hero_cta2 = get_field( 'brand_consulting_hero_cta_secondary' );
              $bc_hero_cta2_url   = is_array( $bc_hero_cta2 ) && ! empty( $bc_hero_cta2['url'] ) ? $bc_hero_cta2['url'] : '#blocks';
              $bc_hero_cta2_label = is_array( $bc_hero_cta2 ) && ! empty( $bc_hero_cta2['title'] ) ? $bc_hero_cta2['title'] : "What's included";
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $bc_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $bc_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $bc_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:layers" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $bc_hero_cta2_label ); ?></span></a>
              </div>
            </div>
            <!-- BRAND BOARD MOCK -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8">
                <div class="flex items-center justify-between mb-5"><span class="text-xs tracking-[.2em] uppercase text-ink-soft">Brand Board</span><span class="text-xs text-ink-soft">v1.0</span></div>
                <div class="grid grid-cols-3 gap-3">
                  <div class="bb-tile col-span-2 rounded-2xl bg-ink text-paper p-5 flex items-end min-h-[120px]"><span class="font-display text-3xl tt">Lumen<span class="text-accent">.</span></span></div>
                  <div class="bb-tile bb-accent rounded-2xl bg-accent grid place-items-center min-h-[120px]"><iconify-icon icon="lucide:sparkles" class="text-paper text-3xl"></iconify-icon></div>
                  <div class="bb-tile swatch rounded-xl h-14" style="background:#fa5539"></div>
                  <div class="bb-tile swatch rounded-xl h-14" style="background:#0a0a0a"></div>
                  <div class="bb-tile swatch rounded-xl h-14 border border-line" style="background:#f3ead2"></div>
                  <div class="bb-tile col-span-3 rounded-2xl bg-surface border border-line p-4"><p class="font-display tt text-xl">Aa Bb Cc — Bricolage Grotesque</p><p class="text-xs text-ink-soft mt-1">Confident, modern, human. 0123456789</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- STATEMENT BAND -->
      <section class="py-16 sm:py-20 bg-ink text-paper">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 text-center">
          <p class="reveal font-display text-2xl sm:text-4xl lg:text-5xl tt leading-[1.15]">A brand isn't your logo. It's the <span class="text-accent">feeling</span> people get — and the <span class="text-accent">reason</span> they choose you over everyone else.</p>
        </div>
      </section>

      <!-- BUILDING BLOCKS -->
      <section id="blocks" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'brand_consulting_blocks_eyebrow', false, 'The building blocks' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'brand_consulting_blocks_heading', false, 'What our branding agency in Jaipur builds' ) ); ?></h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php bx_brand_consulting_render_blocks(); ?>
          </div>
        </div>
      </section>

      <!-- PALETTE + TYPE SHOWCASE -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'brand_consulting_palette_eyebrow', false, 'Crafted, not generated' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'brand_consulting_palette_heading', false, 'Colour and type with intent' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'brand_consulting_palette_text', false, 'As a brand identity agency in Jaipur, we choose every palette and typeface for meaning and legibility — tested across screens, print and the real world before it ships.' ) ); ?></p>
            <!-- IMAGE PLACEHOLDER -->
            <figure class="imgph rounded-xl2 aspect-[16/10] bg-surface-2 border border-line mt-10 reveal" data-delay="1">
              <img width="590" height="368" src="<?php echo esc_url( bx_img_url( 'brand_consulting_palette_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/brand-moodboard.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'brand_consulting_palette_image_alt', false, 'BoostronixX brand identity moodboard and collateral mockups' ) ); ?>" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'brand_consulting_palette_image_caption_title', false, 'Moodboard · 1280×800' ) ); ?></b><span><?php echo esc_html( bx_field( 'brand_consulting_palette_image_caption_text', false, 'Flat-lay of brand collateral — business cards, packaging, signage — or a moodboard grid. Shows identity applied in the real world.' ) ); ?></span></figcaption>
            </figure>
          </div>
          <div class="reveal" data-delay="1">
            <div class="grid grid-cols-5 gap-2 mb-4">
              <div class="swatch rounded-xl aspect-square" style="background:#fa5539"></div>
              <div class="swatch rounded-xl aspect-square" style="background:#0a0a0a"></div>
              <div class="swatch rounded-xl aspect-square" style="background:#f3ead2"></div>
              <div class="swatch rounded-xl aspect-square" style="background:#2e7d5b"></div>
              <div class="swatch rounded-xl aspect-square border border-line" style="background:#ffffff"></div>
            </div>
            <div class="rounded-xl2 bg-paper border border-line p-7">
              <p class="font-display text-6xl tt leading-none">Aa</p>
              <p class="text-ink-soft text-sm mt-3">Bricolage Grotesque · Display / Body</p>
              <div class="mt-4 space-y-1.5">
                <p class="font-display text-2xl tt">Bold headlines that lead.</p>
                <p class="text-base">Readable body text that builds trust and tells your story clearly.</p>
                <p class="text-xs tracking-[.25em] uppercase text-ink-soft">Captions &amp; labels</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PROCESS (vertical timeline) -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'brand_consulting_process_eyebrow', false, 'How we build it' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'brand_consulting_process_heading', false, 'From blank page to brand book' ) ); ?></h2>
          </div>
          <div class="vstep relative pl-14 space-y-8">
            <span class="vrail"></span>
            <?php bx_brand_consulting_render_process(); ?>
          </div>
        </div>
      </section>

      <!-- DELIVERABLES + WHY US -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'brand_consulting_deliverables_eyebrow', false, "What's in your brand book" ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'brand_consulting_deliverables_heading', false, 'Tangible deliverables, not just ideas' ) ); ?></h2>
            <div class="grid sm:grid-cols-2 gap-3 mt-8">
              <?php bx_brand_consulting_render_deliverables(); ?>
            </div>
          </div>
          <div class="lg:pl-8">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'brand_consulting_why_eyebrow', false, 'Why BoostronixX' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'brand_consulting_why_heading', false, 'Strategy-led, research-backed' ) ); ?></h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'brand_consulting_why_text', false, "Since 2026 our brand strategy in Jaipur has shaped 50+ brands across real estate, schools and D2C — from startup branding in Jaipur to full rebrands. We don't decorate; we make decisions that hold up commercially and look beautiful doing it." ) ); ?></p>
            <div class="reveal mt-7 rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4" data-delay="1">
              <span class="grid place-items-center h-12 w-12 rounded-full bg-accent text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-xl"></iconify-icon></span>
              <p class="text-sm text-paper/70"><?php echo esc_html( bx_field( 'brand_consulting_why_note', false, 'Designed & reviewed by the BoostronixX brand team — strategy, design and copy under one roof.' ) ); ?></p>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'brand_consulting_faq_eyebrow', false, 'FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'brand_consulting_faq_heading', false, 'Brand consulting in Jaipur, answered' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_brand_consulting_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'brand_consulting_related_eyebrow', false, 'Pairs well with' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_brand_consulting_render_related(); ?>
          </div>
          <?php
          $bc_cta_btn1 = get_field( 'brand_consulting_cta_button_primary' );
          $bc_cta_btn1_url   = is_array( $bc_cta_btn1 ) && ! empty( $bc_cta_btn1['url'] ) ? $bc_cta_btn1['url'] : '/contact-us/';
          $bc_cta_btn1_label = is_array( $bc_cta_btn1 ) && ! empty( $bc_cta_btn1['title'] ) ? $bc_cta_btn1['title'] : 'Book a discovery call';
          $bc_cta_btn2 = get_field( 'brand_consulting_cta_button_secondary' );
          $bc_cta_btn2_url   = is_array( $bc_cta_btn2 ) && ! empty( $bc_cta_btn2['url'] ) ? $bc_cta_btn2['url'] : '/portfolio/';
          $bc_cta_btn2_label = is_array( $bc_cta_btn2 ) && ! empty( $bc_cta_btn2['title'] ) ? $bc_cta_btn2['title'] : "See brands we've built";
          ?>
          <div class="relative rounded-xl2 bg-accent text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.12]"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'brand_consulting_cta_heading', false, "Let's build a brand worth remembering" ) ); ?></h2>
              <p class="text-paper/90 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'brand_consulting_cta_text', false, "Book a brand discovery call with the branding agency in Jaipur ambitious businesses trust — we'll explore your positioning and show you what's possible." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $bc_cta_btn1_url ); ?>" class="inline-flex items-center gap-2 rounded-full bg-ink text-paper px-7 py-4 font-medium hover:bg-paper hover:text-ink transition"><?php echo esc_html( $bc_cta_btn1_label ); ?> <iconify-icon icon="lucide:arrow-right"></iconify-icon></a>
                <a href="<?php echo esc_url( $bc_cta_btn2_url ); ?>" class="inline-flex items-center gap-2 rounded-full bg-paper/15 border border-paper/30 px-7 py-4 font-medium hover:bg-paper hover:text-ink transition"><iconify-icon icon="lucide:briefcase"></iconify-icon> <?php echo esc_html( $bc_cta_btn2_label ); ?></a>
              </div>
            </div>
            	<?php bx_cta_image( 'brand_consulting_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/brand-consulting-cta-image.avif', false, 'BoostronixX brand consulting team in Jaipur', 420, 447 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
