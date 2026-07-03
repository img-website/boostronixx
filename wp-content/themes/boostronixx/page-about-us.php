<?php
/**
 * Template Name: About Us
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
      <section class="relative pt-24 sm:pt-28 pb-16 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav
            class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6"
            aria-label="Breadcrumb"
          >
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">About Us</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div
                class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"
              >
                <span class="h-2 w-2 rounded-full bg-accent"></span> <?php echo esc_html( bx_field( 'about_us_hero_badge', false, 'Creative branding & growth studio · since 2026' ) ); ?>
              </div>
              <h1
                class="reveal font-display text-[2.7rem] leading-[0.97] sm:text-7xl lg:text-[5rem] tt"
              >
                <?php echo esc_html( bx_field( 'about_us_hero_heading_a', false, "We're the team behind" ) ); ?><br class="hidden sm:block" />
                <?php echo esc_html( bx_field( 'about_us_hero_heading_b', false, 'brands that ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'about_us_hero_heading_accent', false, 'get noticed' ) ); ?></span>.
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">
                <?php echo esc_html( bx_field( 'about_us_hero_text', false, 'BoostronixX is a digital marketing agency in Jaipur that thinks like a growth team. Strategy, design and performance under one roof — turning ambitious businesses into brands people remember.' ) ); ?>
              </p>
              <?php
              $about_hero_cta1 = get_field( 'about_us_hero_cta_primary' );
              $about_hero_cta1_url   = is_array( $about_hero_cta1 ) && ! empty( $about_hero_cta1['url'] ) ? $about_hero_cta1['url'] : '/contact-us/';
              $about_hero_cta1_label = is_array( $about_hero_cta1 ) && ! empty( $about_hero_cta1['title'] ) ? $about_hero_cta1['title'] : 'Work With Us';
              $about_hero_cta2 = get_field( 'about_us_hero_cta_secondary' );
              $about_hero_cta2_url   = is_array( $about_hero_cta2 ) && ! empty( $about_hero_cta2['url'] ) ? $about_hero_cta2['url'] : '/portfolio/';
              $about_hero_cta2_label = is_array( $about_hero_cta2 ) && ! empty( $about_hero_cta2['title'] ) ? $about_hero_cta2['title'] : 'See our work';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-6" data-delay="2">
                <a
                  href="<?php echo esc_url( $about_hero_cta1_url ); ?>"
                  class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"
                >
                  <span class="relative z-10 sheen-text"><?php echo esc_html( $about_hero_cta1_label ); ?></span>
                  <iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
                </a>
                <a
                  href="<?php echo esc_url( $about_hero_cta2_url ); ?>"
                  class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"
                >
                  <iconify-icon icon="lucide:eye" class="relative z-10 shrink-0"></iconify-icon>
                  <span class="relative z-10 sheen-text-dark"><?php echo esc_html( $about_hero_cta2_label ); ?></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== STAT BAND ===================== -->
      <section class="border-y border-line bg-surface">
        <div
          class="mx-auto max-w-7xl px-4 sm:px-6 grid grid-cols-2 lg:grid-cols-4 gap-px bg-line"
        >
          <?php bx_about_us_render_stats(); ?>
        </div>
      </section>

      <!-- ===================== OUR STORY ===================== -->
      <section class="py-20 sm:py-28">
        <div
          class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10 lg:gap-16 items-center"
        >
          <div class="lg:col-span-5 reveal">
            <div class="relative">
              <figure class="imgph rounded-xl2 aspect-4/5">
                <img width="490" height="613"
                  src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/about-studio.avif"
                  alt="<?php echo esc_attr( bx_field( 'about_us_story_image_alt', false, 'Inside the BoostronixX studio in Jaipur' ) ); ?>"
                  loading="lazy"
                  onerror="this.remove()"
                />
                <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'about_us_story_image_caption', false, 'Inside the studio' ) ); ?></b></figcaption>
              </figure>
              <div class="absolute right-2 top-2 sm:-right-5 sm:-top-5 h-24 w-24 spin">
                <svg viewBox="0 0 100 100" class="w-full h-full">
                  <defs>
                    <path id="cir" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" />
                  </defs>
                  <circle cx="50" cy="50" r="49" fill="#0a0a0a" />
                  <text font-size="10.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2">
                    <textPath href="#cir">EST · 2026 · JAIPUR · INDIA ·</textPath>
                  </text>
                </svg>
                <span class="absolute inset-0 grid place-items-center text-accent text-lg"
                  ><iconify-icon icon="lucide:sparkles"></iconify-icon
                ></span>
              </div>
            </div>
          </div>
          <div class="lg:col-span-7">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              <?php echo esc_html( bx_field( 'about_us_story_eyebrow', false, 'Our story' ) ); ?>
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight max-w-xl">
              <?php echo esc_html( bx_field( 'about_us_story_heading', false, 'How our Jaipur studio started — with a simple frustration' ) ); ?>
            </h2>
            <div class="reveal space-y-4 text-ink-soft mt-6 max-w-xl leading-relaxed" data-delay="1">
              <p>
                <?php echo esc_html( bx_field( 'about_us_story_p1', false, 'Too many good businesses were invisible — great products, terrible reach. Agencies sold either pretty design with no results, or results with no soul. We thought there had to be a better way.' ) ); ?>
              </p>
              <p>
                Based in Jaipur since 2026, BoostronixX began as a creative
                branding &amp; growth studio in Jaipur with one belief:
                <span class="text-ink font-medium"
                  >creativity and performance aren't opposites — they're partners</span
                >. A logo that converts. A campaign that's also art. A funnel that
                feels like a brand.
              </p>
              <p>
                <?php echo esc_html( bx_field( 'about_us_story_p3', false, '50+ brands later, that belief still runs everything we do — across real estate, schools, D2C and healthcare.' ) ); ?>
              </p>
            </div>
            <div class="reveal flex flex-wrap gap-2 mt-7 text-sm" data-delay="2">
              <?php
              foreach ( bx_lines( bx_field( 'about_us_story_tags', false, "Strategy-first\nCreative-led\nIn-house team\nTracked ROI" ) ) as $about_tag ) {
                  echo '<span class="rounded-full border border-line px-3 py-1.5">' . esc_html( $about_tag ) . '</span>';
              }
              ?>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== MISSION & VISION ===================== -->
      <section class="pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid md:grid-cols-2 gap-4">
          <div class="reveal rounded-xl2 bg-ink text-paper p-8 sm:p-10 relative overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative">
              <span
                class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-accent text-paper text-2xl"
                ><iconify-icon icon="lucide:target"></iconify-icon
              ></span>
              <h3 class="font-display text-2xl sm:text-3xl tt mt-6"><?php echo esc_html( bx_field( 'about_us_mission_heading', false, 'Our mission' ) ); ?></h3>
              <p class="text-paper/70 mt-3 leading-relaxed">
                <?php echo esc_html( bx_field( 'about_us_mission_text', false, 'To help ambitious businesses become brands people remember — by pairing sharp strategy with creative that actually performs, and proving every rupee of it.' ) ); ?>
              </p>
            </div>
          </div>
          <div class="reveal rounded-xl2 border border-line bg-surface p-8 sm:p-10" data-delay="1">
            <span
              class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-ink text-paper text-2xl"
              ><iconify-icon icon="lucide:eye"></iconify-icon
            ></span>
            <h3 class="font-display text-2xl sm:text-3xl tt mt-6"><?php echo esc_html( bx_field( 'about_us_vision_heading', false, 'Our vision' ) ); ?></h3>
            <p class="text-ink-soft mt-3 leading-relaxed">
              <?php echo esc_html( bx_field( 'about_us_vision_text', false, 'A world where great businesses are never held back by being unseen — where brilliant brands from anywhere, including a studio in Jaipur, can compete and win anywhere.' ) ); ?>
            </p>
          </div>
        </div>
      </section>

      <!-- ===================== VALUES ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              <?php echo esc_html( bx_field( 'about_us_values_eyebrow', false, 'What we stand for' ) ); ?>
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">
              <?php echo esc_html( bx_field( 'about_us_values_heading', false, 'Six things we never compromise on' ) ); ?>
            </h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php bx_about_us_render_values(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== HOW WE WORK ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              <?php echo esc_html( bx_field( 'about_us_how_eyebrow', false, 'How we work' ) ); ?>
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">
              <?php echo esc_html( bx_field( 'about_us_how_heading', false, 'A simple, four-step way of working' ) ); ?>
            </h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_about_us_render_steps(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== TEAM ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">
              <?php echo esc_html( bx_field( 'about_us_team_eyebrow', false, 'The people' ) ); ?>
            </p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">
              <?php echo esc_html( bx_field( 'about_us_team_heading', false, 'A small team that punches above its weight' ) ); ?>
            </h2>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_about_us_render_team(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden"
          >
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <?php
            $about_cta_btn = get_field( 'about_us_cta_button' );
            $about_cta_btn_url   = is_array( $about_cta_btn ) && ! empty( $about_cta_btn['url'] ) ? $about_cta_btn['url'] : '/contact-us/';
            $about_cta_btn_label = is_array( $about_cta_btn ) && ! empty( $about_cta_btn['title'] ) ? $about_cta_btn['title'] : 'Book a Free Strategy Call';
            ?>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">
                <?php echo esc_html( bx_field( 'about_us_cta_heading', false, "Like how we think? Let's build together." ) ); ?>
              </h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">
                <?php echo esc_html( bx_field( 'about_us_cta_text', false, "Tell us where you want to grow. We'll bring the strategy, the creative and the receipts." ) ); ?>
              </p>
              <div class="flex flex-wrap items-center gap-3 mt-8">
                <a
                  href="<?php echo esc_url( $about_cta_btn_url ); ?>"
                  class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"
                >
                  <span class="relative z-10 sheen-text-light"><?php echo esc_html( $about_cta_btn_label ); ?></span>
                  <iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
                </a>
                <a
                  href="<?php echo esc_url( bx_field( 'about_us_cta_phone_href', false, 'tel:+918058212202' ) ); ?>"
                  class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"
                  ><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0"></iconify-icon
                  ><span class="relative z-10"><?php echo esc_html( bx_field( 'about_us_cta_phone', false, '+91 80582 12202' ) ); ?></span></a
                >
              </div>
            </div>
            	<?php bx_cta_image( 'about_us_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/about-us-cta-image.avif', false, 'BoostronixX team ready to build with you', 420, 525 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
