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
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Social Media Marketing</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:heart" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'social_media_marketing_hero_badge', false, 'Content · Community · Paid social' ) ); ?></div>
              <h1 class="reveal font-display text-[2.5rem] leading-[0.98] sm:text-6xl lg:text-7xl tt"><?php echo esc_html( bx_field( 'social_media_marketing_hero_heading', false, 'Feeds that turn followers into ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'social_media_marketing_hero_heading_accent', false, 'customers' ) ); ?></span></h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'social_media_marketing_hero_text', false, 'As a social media marketing agency in Jaipur, we craft platform-native content for Instagram, Facebook, LinkedIn and YouTube — designed to stop the scroll, build trust and drive real action, not just likes.' ) ); ?></p>
              <?php
              $smm_hero_cta1 = get_field( 'social_media_marketing_hero_cta_primary' );
              $smm_hero_cta1_url   = is_array( $smm_hero_cta1 ) && ! empty( $smm_hero_cta1['url'] ) ? $smm_hero_cta1['url'] : '/contact/';
              $smm_hero_cta1_label = is_array( $smm_hero_cta1 ) && ! empty( $smm_hero_cta1['title'] ) ? $smm_hero_cta1['title'] : 'Grow my socials';
              $smm_hero_cta2 = get_field( 'social_media_marketing_hero_cta_secondary' );
              $smm_hero_cta2_url   = is_array( $smm_hero_cta2 ) && ! empty( $smm_hero_cta2['url'] ) ? $smm_hero_cta2['url'] : '#formats';
              $smm_hero_cta2_label = is_array( $smm_hero_cta2 ) && ! empty( $smm_hero_cta2['title'] ) ? $smm_hero_cta2['title'] : 'See content we make';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $smm_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $smm_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $smm_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:grid-2x2" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $smm_hero_cta2_label ); ?></span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-6 gap-y-2 mt-8" data-delay="3">
                <div><p class="font-display text-3xl tt"><span class="count" data-to="<?php echo esc_attr( bx_field( 'social_media_marketing_hero_stat1_number', false, '12480' ) ); ?>">0</span></p><p class="text-xs text-ink-soft"><?php echo esc_html( bx_field( 'social_media_marketing_hero_stat1_label', false, 'avg. likes / post' ) ); ?></p></div>
                <div><p class="font-display text-3xl tt">+<span class="count" data-to="<?php echo esc_attr( bx_field( 'social_media_marketing_hero_stat2_number', false, '64' ) ); ?>">0</span>%</p><p class="text-xs text-ink-soft"><?php echo esc_html( bx_field( 'social_media_marketing_hero_stat2_label', false, 'engagement lift' ) ); ?></p></div>
                <div><p class="font-display text-3xl tt"><span class="count" data-to="<?php echo esc_attr( bx_field( 'social_media_marketing_hero_stat3_number', false, '4' ) ); ?>">0</span></p><p class="text-xs text-ink-soft"><?php echo esc_html( bx_field( 'social_media_marketing_hero_stat3_label', false, 'platforms' ) ); ?></p></div>
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
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-8"><?php echo esc_html( bx_field( 'social_media_marketing_platforms_eyebrow', false, 'Platforms we manage as your SMM company in Jaipur' ) ); ?></p>
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_social_media_marketing_render_platforms(); ?>
          </div>
        </div>
      </section>

      <!-- CONTENT FORMATS -->
      <section id="formats" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'social_media_marketing_formats_eyebrow', false, 'What we create' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'social_media_marketing_formats_heading', false, 'Scroll-stopping content from your social media marketing agency in Jaipur' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden">
              <div class="h-44 grid place-items-center text-paper font-display tt text-2xl relative" style="background:linear-gradient(135deg,#fa5539,#ff8a5c)"><span>Reels</span><span class="absolute bottom-3 left-3 inline-flex items-center gap-1 text-xs bg-black/30 rounded-full px-2 py-1"><iconify-icon icon="lucide:play"></iconify-icon> 0:15</span></div>
              <div class="p-5"><h3 class="font-display text-lg tt"><?php echo esc_html( bx_field( 'social_media_marketing_format1_title', false, 'Short-form video' ) ); ?></h3><p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'social_media_marketing_format1_text', false, 'Hook-led Reels & Shorts built for reach.' ) ); ?></p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="1">
              <div class="h-44 grid grid-cols-3 gap-1 p-3 bg-surface"><span class="rounded-lg bg-ink"></span><span class="rounded-lg bg-accent"></span><span class="rounded-lg bg-surface-2 border border-line"></span></div>
              <div class="p-5"><h3 class="font-display text-lg tt"><?php echo esc_html( bx_field( 'social_media_marketing_format2_title', false, 'Carousels' ) ); ?></h3><p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'social_media_marketing_format2_text', false, 'Swipe-worthy stories that teach & sell.' ) ); ?></p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="2">
              <div class="h-44 grid place-items-center bg-ink relative"><span class="ring h-24 w-16 rounded-2xl p-[3px]"><span class="grid place-items-center h-full w-full rounded-2xl bg-[#161616] text-paper text-xs">Story</span></span></div>
              <div class="p-5"><h3 class="font-display text-lg tt"><?php echo esc_html( bx_field( 'social_media_marketing_format3_title', false, 'Stories & polls' ) ); ?></h3><p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'social_media_marketing_format3_text', false, 'Daily presence that builds community.' ) ); ?></p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden">
              <div class="h-44 grid place-items-center text-paper font-display tt text-xl" style="background:linear-gradient(135deg,#0a0a0a,#3a3a3a)">Brand posts</div>
              <div class="p-5"><h3 class="font-display text-lg tt"><?php echo esc_html( bx_field( 'social_media_marketing_format4_title', false, 'Static & brand' ) ); ?></h3><p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'social_media_marketing_format4_text', false, 'On-brand grid posts and announcements.' ) ); ?></p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="1">
              <div class="h-44 grid place-items-center bg-surface"><span class="rounded-2xl bg-paper border border-line px-4 py-3 font-display tt text-lg">"Quote that lands"</span></div>
              <div class="p-5"><h3 class="font-display text-lg tt"><?php echo esc_html( bx_field( 'social_media_marketing_format5_title', false, 'Quotes & tips' ) ); ?></h3><p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'social_media_marketing_format5_text', false, 'Save-worthy value that grows reach.' ) ); ?></p></div>
            </div>
            <div class="reveal ctype rounded-xl2 border border-line overflow-hidden" data-delay="2">
              <div class="h-44 grid place-items-center bg-accent/10"><iconify-icon icon="lucide:megaphone" class="text-5xl text-accent"></iconify-icon></div>
              <div class="p-5"><h3 class="font-display text-lg tt"><?php echo esc_html( bx_field( 'social_media_marketing_format6_title', false, 'Paid social' ) ); ?></h3><p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'social_media_marketing_format6_text', false, 'Boosted & targeted campaigns that convert.' ) ); ?></p></div>
            </div>
          </div>
        </div>
      </section>

      <!-- GROWTH + IMAGE -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'social_media_marketing_growth_eyebrow', false, 'It compounds' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'social_media_marketing_growth_heading', false, 'Consistency that grows an audience' ) ); ?></h2>
            <p class="reveal text-paper/60 mt-5 max-w-md leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'social_media_marketing_growth_text', false, "Our social media management in Jaipur runs on a content calendar, a recognisable style and a feedback loop on what's working — that's how followings turn into communities, and communities into customers." ) ); ?></p>
            <!-- IMAGE PLACEHOLDER -->
            <figure class="imgph rounded-xl2 aspect-[16/10] bg-white/[0.04] border border-white/10 mt-10 reveal" data-delay="1">
              <img width="590" height="369" src="<?php echo esc_url( bx_img_url( 'social_media_marketing_growth_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/social-grid.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'social_media_marketing_growth_image_alt', false, 'A curated Instagram grid of BoostronixX client content' ) ); ?>" loading="lazy" onerror="this.remove()" />
              <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'social_media_marketing_growth_image_caption_a', false, 'Feed grid · 1280×800' ) ); ?></b><span><?php echo esc_html( bx_field( 'social_media_marketing_growth_image_caption_b', false, '9-tile Instagram grid mockup of real client content showing a cohesive, on-brand aesthetic.' ) ); ?></span></figcaption>
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
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'social_media_marketing_faq_eyebrow', false, 'FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'social_media_marketing_faq_heading', false, 'Social, answered' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_social_media_marketing_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'social_media_marketing_related_eyebrow', false, 'Pairs well with' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_social_media_marketing_render_related(); ?>
          </div>
          <?php
          $smm_cta_btn = get_field( 'social_media_marketing_cta_button' );
          $smm_cta_btn_url   = is_array( $smm_cta_btn ) && ! empty( $smm_cta_btn['url'] ) ? $smm_cta_btn['url'] : '/contact/';
          $smm_cta_btn_label = is_array( $smm_cta_btn ) && ! empty( $smm_cta_btn['title'] ) ? $smm_cta_btn['title'] : 'Grow my socials';
          $smm_cta_btn2 = get_field( 'social_media_marketing_cta_button_secondary' );
          $smm_cta_btn2_url   = is_array( $smm_cta_btn2 ) && ! empty( $smm_cta_btn2['url'] ) ? $smm_cta_btn2['url'] : '/portfolio/';
          $smm_cta_btn2_label = is_array( $smm_cta_btn2 ) && ! empty( $smm_cta_btn2['title'] ) ? $smm_cta_btn2['title'] : 'See our content';
          ?>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'social_media_marketing_cta_heading', false, 'Make your brand impossible to scroll past' ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'social_media_marketing_cta_text', false, "Let's plan a month of content and show you what consistent, on-brand social can do." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $smm_cta_btn_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $smm_cta_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $smm_cta_btn2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:images" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $smm_cta_btn2_label ); ?></span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'social_media_marketing_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/social-media-cta-image.avif', false, 'BoostronixX social media marketing team in Jaipur', 420, 447 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
