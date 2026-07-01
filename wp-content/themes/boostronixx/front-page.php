<?php
/**
 * Front page (home) template.
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- ===================== HERO ===================== -->
      <?php
      $bx_hero_words = bx_lines( bx_field( 'hero_rotating_words', false, "get noticed\nconvert\nstand out\nscale fast" ) );
      $bx_hero_first = $bx_hero_words ? $bx_hero_words[0] : 'get noticed';
      $bx_cta1       = function_exists( 'get_field' ) ? get_field( 'hero_cta_primary' ) : false;
      $bx_cta2       = function_exists( 'get_field' ) ? get_field( 'hero_cta_secondary' ) : false;
      $bx_cta1_url   = ( is_array( $bx_cta1 ) && ! empty( $bx_cta1['url'] ) ) ? $bx_cta1['url'] : '#contact';
      $bx_cta1_txt   = ( is_array( $bx_cta1 ) && ! empty( $bx_cta1['title'] ) ) ? $bx_cta1['title'] : 'Free Strategy Call';
      $bx_cta2_url   = ( is_array( $bx_cta2 ) && ! empty( $bx_cta2['url'] ) ) ? $bx_cta2['url'] : '#services';
      $bx_cta2_txt   = ( is_array( $bx_cta2 ) && ! empty( $bx_cta2['title'] ) ) ? $bx_cta2['title'] : 'See what we do';
      ?>
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft"
          >
            <span class="h-2 w-2 rounded-full bg-accent"></span> <?php echo esc_html( bx_field( 'hero_badge', false, 'Creative branding & growth studio · Jaipur, India' ) ); ?>
          </div>

          <div class="grid lg:grid-cols-12 gap-8 items-end mt-6">
            <div class="lg:col-span-8">
              <h1
                class="reveal font-display text-[2.9rem] leading-[0.95] sm:text-7xl lg:text-[5.4rem] tt"
              >
                <?php echo esc_html( bx_field( 'hero_heading', false, 'We build brands that' ) ); ?><br class="hidden sm:block" />
                <span id="rotator" class="text-accent" data-words="<?php echo esc_attr( implode( '|', $bx_hero_words ) ); ?>"><?php echo esc_html( $bx_hero_first ); ?></span
                ><span class="caret"></span>
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">
                <?php echo esc_html( bx_field( 'hero_subheading', false, 'BoostronixX is a digital marketing company in Jaipur — branding, SEO, social media and performance marketing in one creative team, turning ambitious businesses into brands people remember with ROI-driven, affordable growth.' ) ); ?>
              </p>
              <div
                class="reveal flex flex-wrap items-center gap-3 mt-6"
                data-delay="2"
              >
                <a
                  href="<?php echo esc_url( $bx_cta1_url ); ?>"
                  class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"
                >
                  <span class="relative z-10 sheen-text"
                    ><?php echo esc_html( $bx_cta1_txt ); ?></span
                  >
                  <iconify-icon
                    icon="lucide:arrow-right"
                    class="relative z-10"
                  ></iconify-icon>
                </a>
                <a
                  href="<?php echo esc_url( $bx_cta2_url ); ?>"
                  class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"
                >
                  <iconify-icon
                    icon="lucide:eye"
                    class="relative z-10 shrink-0"
                  ></iconify-icon>
                  <span class="relative z-10 sheen-text-dark"
                    ><?php echo esc_html( $bx_cta2_txt ); ?></span
                  >
                </a>
              </div>
            </div>
          </div>

          <!-- hero visual: live "agency desk" -->
          <div class="reveal relative mt-12" data-delay="2">
            <div class="grid lg:grid-cols-12 gap-4">
              <!-- big stat / brand tile -->
              <div
                class="lg:col-span-5 bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-7 flex flex-col justify-between min-h-[260px]"
              >
                <div class="flex items-center justify-between">
                  <span
                    class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft"
                    ><?php echo esc_html( bx_field( 'hero_stat_eyebrow', false, 'Brands grown' ) ); ?></span
                  >
                  <span class="h-2.5 w-2.5 rounded-full bg-accent"></span>
                </div>
                <div>
                  <p class="font-display text-6xl sm:text-7xl tt">
                    <span class="count" data-to="<?php echo (int) bx_field( 'hero_stat_number', false, 50 ); ?>">0</span><?php echo esc_html( bx_field( 'hero_stat_suffix', false, '+' ) ); ?>
                  </p>
                  <p class="text-ink-soft mt-1">
                    <?php echo esc_html( bx_field( 'hero_stat_caption', false, 'happy clients & counting' ) ); ?>
                  </p>
                </div>
                <div class="flex flex-wrap gap-2 mt-4 text-xs">
                  <?php foreach ( bx_lines( bx_field( 'hero_stat_tags', false, "Branding\nSEO\nSocial\nAds" ) ) as $bx_tag ) : ?>
                  <span class="rounded-full bg-surface px-3 py-1"><?php echo esc_html( $bx_tag ); ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
              <!-- mini SERP -->
              <div class="lg:col-span-4 bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-5 min-h-[260px]">
                <div
                  class="flex items-center gap-2 rounded-full border border-line px-3 py-2 text-sm text-ink-soft h-10"
                >
                  <iconify-icon
                    icon="lucide:search"
                    class="text-sm"
                  ></iconify-icon>
                  <span id="serpType2"></span><span class="caret"></span>
                </div>
                <div
                  id="serpCard2"
                  class="mt-4 rounded-xl border border-line p-3 transition-opacity duration-500"
                >
                  <div class="flex items-center gap-2 text-xs text-ink-soft">
                    <span
                      class="h-4 w-4 rounded overflow-hidden grid place-items-center bg-surface shrink-0"
                      ><img
                        id="serpFav2"
                        src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/souk-favicon.avif"
                        alt=""
                        class="h-full w-full object-contain"
                    /></span>
                    <span id="serpDomain2">www.zouk.in</span>
                  </div>
                  <p
                    id="serpTitle2"
                    class="font-display text-base tt mt-1 leading-snug"
                  >
                    Zouk — Proudly Indian, Vegan Bags
                  </p>
                  <div
                    id="serpRank2"
                    class="inline-flex items-center gap-1 mt-2 rounded-full bg-accent/10 text-accent text-xs font-medium px-2 py-0.5"
                  >
                    Rank #1 <iconify-icon icon="lucide:check"></iconify-icon>
                  </div>
                </div>
                <div class="flex items-end gap-1.5 h-12 mt-4">
                  <div
                    class="bar dark"
                    style="
                      height: 24%;
                      width: 14%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar dark"
                    style="
                      height: 30%;
                      width: 14%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar dark"
                    style="
                      height: 48%;
                      width: 14%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar"
                    style="
                      height: 76%;
                      width: 14%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar"
                    style="
                      height: 94%;
                      width: 14%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                </div>
              </div>
              <!-- mini social — auto-playing Instagram-style post carousel -->
              <div
                id="igCard"
                class="lg:col-span-3 bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-4 min-h-[260px] flex flex-col"
              >
                <!-- header -->
                <div class="flex items-center gap-2.5">
                  <span
                    class="h-9 w-9 rounded-full p-[1.5px] bg-gradient-to-tr from-accent via-[#ff8a5c] to-[#ffd0a8] shrink-0"
                  >
                    <img
                      id="igAvatar"
                      src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/ashiana-favicon.avif"
                      alt=""
                      class="h-full w-full rounded-full object-cover bg-paper"
                    />
                  </span>
                  <div class="leading-tight flex-1 min-w-0">
                    <p id="igName" class="text-sm font-semibold truncate">
                      Ashiana Housing
                    </p>
                    <p class="text-[11px] text-ink-soft">Sponsored</p>
                  </div>
                  <iconify-icon
                    icon="mdi:dots-horizontal"
                    class="text-lg text-ink-soft shrink-0"
                  ></iconify-icon>
                </div>
                <!-- post carousel -->
                <div
                  class="relative mt-3 rounded-xl overflow-hidden bg-surface flex-1 min-h-[150px]"
                >
                  <img
                    id="igPostA"
                    src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/ashiana-post.avif"
                    alt=""
                    class="absolute inset-0 h-full w-full object-cover object-top transition-opacity duration-500"
                  />
                  <img
                    id="igPostB"
                    src=""
                    alt=""
                    class="absolute inset-0 h-full w-full object-cover object-top opacity-0 transition-opacity duration-500"
                  />
                  <span
                    id="igCount"
                    class="absolute top-2 right-2 rounded-full bg-ink/70 text-paper text-[10px] font-medium px-2 py-0.5"
                    >1/5</span
                  >
                </div>
                <!-- carousel dots -->
                <div
                  id="igDots"
                  class="flex justify-center items-center gap-1.5 mt-2.5"
                ></div>
                <!-- action row -->
                <div class="flex items-center gap-3 mt-2 text-xl">
                  <span class="heart text-accent inline-flex"
                    ><iconify-icon icon="mdi:heart"></iconify-icon
                  ></span>
                  <iconify-icon icon="lucide:message-circle"></iconify-icon>
                  <iconify-icon icon="lucide:send"></iconify-icon>
                  <span class="ml-auto inline-flex"
                    ><iconify-icon icon="lucide:bookmark"></iconify-icon
                  ></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== CLIENT MARQUEE ===================== -->
      <section class="py-6 border-y border-line bg-surface overflow-hidden">
        <div class="marquee text-ink/30">
          <div class="flex items-center gap-12 pr-12 font-display text-xl tt">
<?php bx_home_marquee_row(); ?>
          </div>
          <div
            class="flex items-center gap-12 pr-12 font-display text-xl tt"
            aria-hidden="true"
          >
<?php bx_home_marquee_row(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== SERVICES — VISUAL SHOWCASES ===================== -->
      <section id="services" class="pt-20 sm:pt-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 mb-14">
          <p
            class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
          >
            <?php echo esc_html( bx_field( 'services_eyebrow', false, 'What we do — and how it looks' ) ); ?>
          </p>
          <h2
            class="reveal font-display text-3xl sm:text-5xl tt max-w-2xl leading-tight"
          >
            <?php echo esc_html( bx_field( 'services_heading', false, "Every service, shown the way we'd build it for you" ) ); ?>
          </h2>
        </div>

        <!-- 01 DIGITAL MARKETING -->
        <div class="border-t border-line">
          <div
            class="mx-auto max-w-7xl px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
          >
            <div class="reveal">
              <div class="flex items-center gap-3 text-sm text-ink-soft">
                <span class="font-display text-accent">01</span
                ><span class="h-px w-8 bg-line"></span> Digital Marketing
              </div>
              <h3
                class="font-display text-3xl sm:text-4xl tt mt-4 leading-tight"
              ><?php echo esc_html( bx_field( 'svc1_title', false, 'Full-funnel growth you can actually measure' ) ); ?></h3>
              <p class="text-ink-soft mt-4 max-w-md">
                SEO, content and social working together — with dashboards that
                show exactly how traffic turns into customers.
              </p>
              <div class="flex flex-wrap gap-2 mt-6 text-sm">
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Content Marketing</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Email</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Analytics</span
                >
              </div>
              <a
                href="/digital-marketing/"
                class="group btn-glow mt-8 inline-flex items-center gap-2 rounded-full px-5 py-3 text-sm font-medium"
              >
                <span class="relative z-10 sheen-text"
                  >Explore Digital Marketing</span
                >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </a>
            </div>
            <!-- mock: analytics line chart -->
            <div class="reveal" data-delay="1">
              <div class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8">
                <div class="flex items-center justify-between mb-1">
                  <span class="text-xs tracking-[.2em] uppercase text-ink-soft"
                    >Traffic</span
                  ><span
                    class="inline-flex items-center gap-1 text-sm font-semibold text-accent"
                    >+<span class="count" data-to="128">0</span>%
                    <iconify-icon
                      icon="lucide:trending-up"
                      class="text-sm"
                    ></iconify-icon
                  ></span>
                </div>
                <p class="font-display text-4xl tt">
                  <span class="count" data-to="48">0</span>.2k
                  <span class="text-base text-ink-soft font-normal"
                    >visits / mo</span
                  >
                </p>
                <svg viewBox="0 0 320 130" class="w-full mt-4" fill="none">
                  <polyline
                    class="area"
                    points="0,120 0,90 50,96 100,70 150,78 200,46 260,40 320,16 320,120"
                    fill="#fa5539"
                    fill-opacity="0.08"
                  />
                  <polyline
                    class="draw"
                    points="0,90 50,96 100,70 150,78 200,46 260,40 320,16"
                    pathLength="1"
                    stroke="#fa5539"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <circle cx="320" cy="16" r="4" fill="#fa5539" />
                </svg>
                <div
                  class="flex justify-between text-[11px] text-ink-soft mt-1"
                >
                  <span>Jan</span><span>Mar</span><span>May</span
                  ><span>Jul</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 02 SEO -->
        <div class="border-t border-line bg-surface">
          <div
            class="mx-auto max-w-7xl px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
          >
            <div class="reveal lg:order-2">
              <div class="flex items-center gap-3 text-sm text-ink-soft">
                <span class="font-display text-accent">02</span
                ><span class="h-px w-8 bg-line"></span> SEO Services
              </div>
              <h3
                class="font-display text-3xl sm:text-4xl tt mt-4 leading-tight"
              ><?php echo esc_html( bx_field( 'svc2_title', false, 'Rank on Google — and get cited by AI' ) ); ?></h3>
              <p class="text-ink-soft mt-4 max-w-md">
                On-page, technical and local SEO that climbs you to page one —
                plus <strong class="text-ink">AEO &amp; GEO</strong>, so answer
                engines and AI search like ChatGPT, Perplexity and Google AI
                Overviews recommend your brand by name.
              </p>
              <div class="flex flex-wrap gap-2 mt-6 text-sm">
                <span
                  class="rounded-full border border-line bg-paper px-3 py-1.5"
                  >Local SEO Jaipur</span
                >
                <span
                  class="rounded-full border border-line bg-paper px-3 py-1.5"
                  >Technical SEO</span
                >
                <span
                  class="inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent font-medium px-3 py-1.5"
                  ><iconify-icon
                    icon="lucide:message-square-quote"
                    class="text-sm"
                  ></iconify-icon
                  >AEO · Answer Engines</span
                >
                <span
                  class="inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent font-medium px-3 py-1.5"
                  ><iconify-icon
                    icon="lucide:sparkles"
                    class="text-sm"
                  ></iconify-icon
                  >GEO · AI Search</span
                >
              </div>
              <a
                href="/seo-services/"
                class="group btn-glow mt-8 inline-flex items-center gap-2 rounded-full px-5 py-3 text-sm font-medium"
              >
                <span class="relative z-10 sheen-text"
                  >Explore SEO Services</span
                >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </a>
            </div>
            <!-- mock: SERP + ranking climb -->
            <div class="reveal lg:order-1" data-delay="1">
              <div class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8">
                <div
                  class="flex items-center gap-2 rounded-full border border-line px-4 py-2.5 text-sm text-ink-soft h-11"
                >
                  <iconify-icon
                    icon="lucide:search"
                    class="text-base"
                  ></iconify-icon>
                  <span id="seoType"></span><span class="caret"></span>
                </div>
                <!-- AI Overview strip (AEO/GEO) -->
                <div
                  class="mt-4 rounded-2xl border border-accent/30 bg-accent/5 p-4"
                >
                  <div
                    class="flex items-center gap-2 text-xs font-semibold text-accent"
                  >
                    <iconify-icon icon="lucide:sparkles"></iconify-icon> AI
                    Overview
                    <span
                      class="ml-auto inline-flex items-center gap-1 rounded-full bg-accent text-paper font-medium px-2 py-0.5 text-[10px]"
                      >Your brand · cited
                      <iconify-icon icon="lucide:check"></iconify-icon
                    ></span>
                  </div>
                  <div class="mt-2.5 space-y-1.5" aria-hidden="true">
                    <span class="block h-2 w-full rounded bg-ink/10"></span>
                    <span class="block h-2 w-4/5 rounded bg-ink/10"></span>
                    <span
                      class="inline-flex items-center gap-1 mt-1 rounded-full border border-line bg-paper px-2 py-0.5 text-[10px] text-ink-soft not-italic"
                      ><iconify-icon
                        icon="lucide:link"
                        class="text-accent text-[10px]"
                      ></iconify-icon>
                      sourced from your site</span
                    >
                  </div>
                </div>
                <div
                  id="serpCard"
                  class="mt-3 rounded-2xl border border-line bg-paper p-4 transition-opacity duration-500"
                >
                  <div class="flex items-center gap-2 text-xs text-ink-soft">
                    <span
                      class="h-5 w-5 rounded overflow-hidden grid place-items-center bg-surface shrink-0"
                      ><img
                        id="serpFav"
                        src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/souk-favicon.avif"
                        alt=""
                        class="h-full w-full object-contain"
                    /></span>
                    <span id="serpDomain">www.zouk.in</span>
                  </div>
                  <p id="serpTitle" class="font-display text-lg tt mt-1.5">
                    Zouk — Proudly Indian, Vegan Bags
                  </p>
                  <p id="serpSnippet" class="text-sm text-ink-soft mt-1">
                    Vegan handbags, laptop bags &amp; wallets — proudly Indian,
                    cruelty-free.
                  </p>
                  <div
                    id="serpRank"
                    class="inline-flex items-center gap-1 mt-3 rounded-full bg-accent/10 text-accent text-xs font-semibold px-2.5 py-1"
                  >
                    Rank #1 <iconify-icon icon="lucide:check"></iconify-icon>
                  </div>
                </div>
                <div class="flex items-end justify-between gap-2 h-24 mt-5">
                  <div
                    class="bar dark"
                    style="
                      height: 24%;
                      width: 11%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar dark"
                    style="
                      height: 36%;
                      width: 11%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar dark"
                    style="
                      height: 30%;
                      width: 11%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar dark"
                    style="
                      height: 48%;
                      width: 11%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar dark"
                    style="
                      height: 58%;
                      width: 11%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar"
                    style="
                      height: 76%;
                      width: 11%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                  <div
                    class="bar"
                    style="
                      height: 94%;
                      width: 11%;
                      transition: height 1.1s cubic-bezier(0.2, 0.7, 0.2, 1);
                    "
                  ></div>
                </div>
                <p class="text-[11px] text-ink-soft mt-2">
                  Organic rankings · last 7 months
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- 03 SOCIAL -->
        <div class="border-t border-line">
          <div
            class="mx-auto max-w-7xl px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
          >
            <div class="reveal">
              <div class="flex items-center gap-3 text-sm text-ink-soft">
                <span class="font-display text-accent">03</span
                ><span class="h-px w-8 bg-line"></span> Social Media Marketing
              </div>
              <h3
                class="font-display text-3xl sm:text-4xl tt mt-4 leading-tight"
              ><?php echo esc_html( bx_field( 'svc3_title', false, 'Feeds that turn followers into customers' ) ); ?></h3>
              <p class="text-ink-soft mt-4 max-w-md">
                Platform-native content for Instagram, Facebook, LinkedIn and
                YouTube — built to stop the scroll and drive action.
              </p>
              <div class="flex flex-wrap gap-2 mt-6 text-sm">
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Content & Design</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Paid Social</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Community</span
                >
              </div>
              <a
                href="/social-media-marketing/"
                class="group btn-glow mt-8 inline-flex items-center gap-2 rounded-full px-5 py-3 text-sm font-medium"
              >
                <span class="relative z-10 sheen-text"
                  >Explore Social Media</span
                >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </a>
            </div>
            <!-- mock: phone feed -->
            <div class="reveal flex justify-center" data-delay="1">
              <div
                id="igCardSocial"
                class="phone-frame rounded-[3rem] p-4 w-[306px]"
              >
                <div class="flex justify-center">
                  <span class="h-1.5 w-16 rounded-full bg-ink/10"></span>
                </div>
                <div class="mt-4">
                  <div class="flex items-center gap-2.5">
                    <span
                      class="h-9 w-9 rounded-full p-[1.5px] bg-gradient-to-tr from-accent via-[#ff8a5c] to-[#ffd0a8] shrink-0"
                    >
                      <img
                        id="igAvatarSocial"
                        src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/veeba-favicon.avif"
                        alt="BoostronixX"
                        class="h-full w-full rounded-full object-cover bg-paper"
                      />
                    </span>
                    <div class="leading-tight flex-1 min-w-0">
                      <p
                        id="igNameSocial"
                        class="text-sm font-semibold truncate"
                      >
                        BoostronixX
                      </p>
                      <p class="text-[11px] text-ink-soft">Sponsored</p>
                    </div>
                    <span
                      class="rounded-full bg-accent text-paper text-[11px] font-medium px-3 py-1"
                      >Follow</span
                    >
                  </div>
                  <div
                    class="relative mt-3 rounded-xl overflow-hidden bg-surface aspect-square"
                  >
                    <img
                      id="igPostASocial"
                      src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/veeba-carousel-1.avif"
                      alt="BoostronixX social feed"
                      class="absolute inset-0 h-full w-full object-cover object-top transition-opacity duration-500"
                    />
                    <img
                      id="igPostBSocial"
                      src=""
                      alt="BoostronixX social feed"
                      class="absolute inset-0 h-full w-full object-cover object-top opacity-0 transition-opacity duration-500"
                    />
                    <span
                      id="igCountSocial"
                      class="absolute top-2 right-2 rounded-full bg-ink/70 text-paper text-[10px] font-medium px-2 py-0.5"
                      >1/8</span
                    >
                  </div>
                  <div
                    id="igDotsSocial"
                    class="flex justify-center items-center gap-1.5 mt-2.5"
                  ></div>
                  <div class="flex items-center gap-3 mt-2 text-xl">
                    <span class="heart text-accent inline-flex"
                      ><iconify-icon icon="mdi:heart"></iconify-icon
                    ></span>
                    <iconify-icon icon="lucide:message-circle"></iconify-icon>
                    <iconify-icon icon="lucide:send"></iconify-icon>
                    <span class="ml-auto inline-flex"
                      ><iconify-icon icon="lucide:bookmark"></iconify-icon
                    ></span>
                  </div>
                  <p class="text-sm font-semibold mt-3">
                    <span id="igLikesSocial">12,480</span> likes
                  </p>
                  <p id="igCaptionSocial" class="text-sm mt-1 text-ink-soft">
                    Every frame built to stop the scroll, spark trust and drive
                    action.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 04 PERFORMANCE -->
        <div class="border-t border-line bg-ink text-paper">
          <div
            class="mx-auto max-w-7xl px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
          >
            <div class="reveal lg:order-2">
              <div class="flex items-center gap-3 text-sm text-paper/60">
                <span class="font-display text-accent">04</span
                ><span class="h-px w-8 bg-paper/20"></span> Performance
                Marketing
              </div>
              <h3
                class="font-display text-3xl sm:text-4xl tt mt-4 leading-tight"
              ><?php echo esc_html( bx_field( 'svc4_title', false, 'Every rupee tracked, optimised and accountable' ) ); ?></h3>
              <p class="text-paper/70 mt-4 max-w-md">
                Meta & Google Ads run on data — A/B tested, audience-segmented
                and aligned to the only metric that matters: ROI.
              </p>
              <div class="flex flex-wrap gap-2 mt-6 text-sm">
                <span class="rounded-full border border-paper/20 px-3 py-1.5"
                  >Meta Ads</span
                >
                <span class="rounded-full border border-paper/20 px-3 py-1.5"
                  >Google Ads</span
                >
                <span class="rounded-full border border-paper/20 px-3 py-1.5"
                  >Lead Gen</span
                >
              </div>
              <a
                href="/performance-marketing/"
                class="group btn-glow-light mt-8 inline-flex items-center gap-2 rounded-full px-5 py-3 text-sm font-medium"
              >
                <span class="relative z-10 sheen-text-dark"
                  >Explore Performance Marketing</span
                >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </a>
            </div>
            <!-- mock: ROAS dashboard (dark) -->
            <div class="reveal lg:order-1" data-delay="1">
              <div
                class="rounded-xl2 bg-[#141414] border border-white/10 p-6 sm:p-8"
              >
                <div class="flex items-center justify-between">
                  <span class="text-xs tracking-[.2em] uppercase text-paper/50"
                    >Campaign · live</span
                  ><span
                    class="inline-flex items-center gap-1.5 text-xs text-paper/60"
                    ><span class="h-2 w-2 rounded-full bg-accent"></span>
                    optimising</span
                  >
                </div>
                <div class="flex items-end gap-2 mt-5">
                  <p class="font-display text-6xl sm:text-7xl tt text-accent">
                    <span class="count" data-to="6">0</span>.<span
                      class="count"
                      data-to="4"
                      >0</span
                    >x
                  </p>
                  <p class="text-paper/60 mb-3">ROAS</p>
                </div>
                <div class="grid grid-cols-3 gap-3 mt-6">
                  <div class="rounded-xl bg-white/5 p-3">
                    <p class="text-[11px] text-paper/50">CTR</p>
                    <p class="font-display text-xl tt">
                      <span class="count" data-to="3">0</span>.2%
                    </p>
                  </div>
                  <div class="rounded-xl bg-white/5 p-3">
                    <p class="text-[11px] text-paper/50">Leads</p>
                    <p class="font-display text-xl tt">
                      <span class="count" data-to="1240">0</span>
                    </p>
                  </div>
                  <div class="rounded-xl bg-white/5 p-3">
                    <p
                      class="inline-flex items-center gap-0.5 text-[11px] text-paper/50"
                    >
                      CPL <iconify-icon icon="lucide:arrow-down"></iconify-icon>
                    </p>
                    <p class="font-display text-xl tt">
                      ₹<span class="count" data-to="38">0</span>
                    </p>
                  </div>
                </div>
                <div class="flex items-end gap-2 h-16 mt-6">
                  <div
                    class="bar"
                    style="--h: 40%; width: 16%; transition-delay: 0.05s"
                  ></div>
                  <div
                    class="bar"
                    style="--h: 55%; width: 16%; transition-delay: 0.12s"
                  ></div>
                  <div
                    class="bar"
                    style="--h: 48%; width: 16%; transition-delay: 0.19s"
                  ></div>
                  <div
                    class="bar"
                    style="--h: 72%; width: 16%; transition-delay: 0.26s"
                  ></div>
                  <div
                    class="bar"
                    style="--h: 100%; width: 16%; transition-delay: 0.33s"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 05 BRANDING -->
        <div class="border-t border-line">
          <div
            class="mx-auto max-w-7xl px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
          >
            <div class="reveal">
              <div class="flex items-center gap-3 text-sm text-ink-soft">
                <span class="font-display text-accent">05</span
                ><span class="h-px w-8 bg-line"></span> Brand Consulting
              </div>
              <h3
                class="font-display text-3xl sm:text-4xl tt mt-4 leading-tight"
              ><?php echo esc_html( bx_field( 'svc5_title', false, 'A brand identity people instantly recognise' ) ); ?></h3>
              <p class="text-ink-soft mt-4 max-w-md">
                Positioning, strategy, logo and a complete visual system — built
                from research, designed to convert.
              </p>
              <div class="flex flex-wrap gap-2 mt-6 text-sm">
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Brand Strategy</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Positioning</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Visual Identity</span
                >
              </div>
              <a
                href="/brand-consulting/"
                class="group btn-glow mt-8 inline-flex items-center gap-2 rounded-full px-5 py-3 text-sm font-medium"
              >
                <span class="relative z-10 sheen-text"
                  >Explore Brand Consulting</span
                >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </a>
            </div>
            <!-- mock: brand board -->
            <div class="reveal" data-delay="1">
              <div
                id="brandBoard"
                class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-8 relative overflow-hidden"
              >
                <span
                  id="bbSweep"
                  class="pointer-events-none absolute inset-y-0 left-0 w-1/4 z-20 bg-gradient-to-r from-transparent via-white/60 to-transparent"
                  style="opacity: 0"
                ></span>
                <div class="flex items-center justify-between mb-5">
                  <span class="text-xs tracking-[.2em] uppercase text-ink-soft"
                    >Brand Board</span
                  ><span class="text-xs text-ink-soft">v1.0</span>
                </div>
                <div class="grid grid-cols-3 gap-3">
                  <div
                    class="bb-tile col-span-2 rounded-2xl bg-ink text-paper p-5 flex items-end min-h-[120px]"
                  >
                    <span class="font-display text-3xl tt"
                      >Boostronix<span class="text-accent">X</span></span
                    >
                  </div>
                  <div
                    class="bb-tile rounded-2xl bg-surface grid place-items-center min-h-[120px]"
                  >
                    <span class="font-display text-5xl tt">Aa</span>
                  </div>
                  <div class="bb-tile rounded-xl h-14 bg-ink"></div>
                  <div
                    class="bb-tile bb-accent rounded-xl h-14 bg-accent"
                  ></div>
                  <div
                    class="bb-tile rounded-xl h-14 bg-surface-2 border border-line"
                  ></div>
                </div>
                <div
                  class="flex items-center justify-between mt-4 text-[11px] text-ink-soft font-medium"
                >
                  <span class="bb-hex" data-hex="#0A0A0A">#0A0A0A</span
                  ><span class="bb-hex" data-hex="#FA5539">#FA5539</span
                  ><span class="bb-hex" data-hex="#F6F4F1">#F6F4F1</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 06 UI/UX -->
        <div class="border-t border-line bg-surface">
          <div
            class="mx-auto max-w-7xl px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
          >
            <div class="reveal lg:order-2">
              <div class="flex items-center gap-3 text-sm text-ink-soft">
                <span class="font-display text-accent">06</span
                ><span class="h-px w-8 bg-line"></span> UI/UX Design
              </div>
              <h3
                class="font-display text-3xl sm:text-4xl tt mt-4 leading-tight"
              ><?php echo esc_html( bx_field( 'svc6_title', false, 'From rough wireframe to interface that converts' ) ); ?></h3>
              <p class="text-ink-soft mt-4 max-w-md">
                UX research and product design for apps and websites — every
                screen built for clarity, usability and brand feel.
              </p>
              <div class="flex flex-wrap gap-2 mt-6 text-sm">
                <span
                  class="rounded-full border border-line bg-paper px-3 py-1.5"
                  >UX Research</span
                >
                <span
                  class="rounded-full border border-line bg-paper px-3 py-1.5"
                  >Product Design</span
                >
                <span
                  class="rounded-full border border-line bg-paper px-3 py-1.5"
                  >Prototyping</span
                >
              </div>
              <a
                href="/ui-ux-design/"
                class="group btn-glow mt-8 inline-flex items-center gap-2 rounded-full px-5 py-3 text-sm font-medium"
              >
                <span class="relative z-10 sheen-text"
                  >Explore UI/UX Design</span
                >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </a>
            </div>
            <!-- mock: wireframe -> hi-fi -->
            <div class="reveal lg:order-1" data-delay="1">
              <div class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-4 relative">
                <span
                  class="absolute top-6 right-6 z-10 text-[11px] font-medium rounded-full bg-ink text-paper px-3 py-1 inline-flex items-center gap-1"
                  >wireframe
                  <iconify-icon icon="lucide:arrow-right"></iconify-icon>
                  design</span
                >
                <div class="relative h-[300px]">
                  <!-- wireframe layer -->
                  <div class="wf absolute inset-0 p-5">
                    <div class="h-6 w-1/2 rounded bg-surface-2"></div>
                    <div class="h-3 w-3/4 rounded bg-surface-2 mt-3"></div>
                    <div class="h-3 w-2/3 rounded bg-surface-2 mt-2"></div>
                    <div class="h-28 w-full rounded-xl bg-surface-2 mt-4"></div>
                    <div class="h-9 w-32 rounded-full bg-surface-2 mt-4"></div>
                  </div>
                  <!-- hi-fi layer -->
                  <div class="hf absolute inset-0 p-5">
                    <p class="font-display text-2xl tt">
                      Grow your <span class="text-accent">brand</span>
                    </p>
                    <p class="text-sm text-ink-soft mt-2">
                      A clean, conversion-first interface designed around your
                      customer's journey.
                    </p>
                    <div
                      class="h-28 w-full rounded-xl bg-ink text-paper grid place-items-center mt-4 font-display tt"
                    >
                      App Preview
                    </div>
                    <span
                      class="inline-flex mt-4 rounded-full bg-accent text-paper text-sm font-medium px-5 py-2.5"
                      >Get started</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 07 WEBSITE -->
        <div class="border-t border-b border-line">
          <div
            class="mx-auto max-w-7xl px-4 sm:px-6 py-16 sm:py-20 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center"
          >
            <div class="reveal">
              <div class="flex items-center gap-3 text-sm text-ink-soft">
                <span class="font-display text-accent">07</span
                ><span class="h-px w-8 bg-line"></span> Website Design
              </div>
              <h3
                class="font-display text-3xl sm:text-4xl tt mt-4 leading-tight"
              ><?php echo esc_html( bx_field( 'svc7_title', false, 'Fast, responsive sites that load and convert' ) ); ?></h3>
              <p class="text-ink-soft mt-4 max-w-md">
                Custom, SEO-friendly websites and e-commerce builds — engineered
                for speed, polished for brand, optimised to sell.
              </p>
              <div class="flex flex-wrap gap-2 mt-6 text-sm">
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Custom Web</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >E-Commerce</span
                >
                <span class="rounded-full border border-line px-3 py-1.5"
                  >Speed Optimised</span
                >
              </div>
              <a
                href="/website-design/"
                class="group btn-glow mt-8 inline-flex items-center gap-2 rounded-full px-5 py-3 text-sm font-medium"
              >
                <span class="relative z-10 sheen-text"
                  >Explore Website Design</span
                >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </a>
            </div>
            <!-- mock: browser -->
            <div class="reveal from-right" data-delay="1">
              <div class="bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] overflow-hidden">
                <div
                  class="flex items-center gap-2 px-4 py-3 border-b border-line bg-surface"
                >
                  <span class="h-3 w-3 rounded-full bg-ink/15"></span
                  ><span class="h-3 w-3 rounded-full bg-ink/15"></span
                  ><span class="h-3 w-3 rounded-full bg-accent"></span>
                  <span
                    class="ml-3 flex-1 rounded-full bg-paper border border-line text-xs text-ink-soft px-3 py-1.5"
                    >https://boostronixx.com</span
                  >
                </div>
                <div class="p-5">
                  <div class="flex items-center justify-between">
                    <div
                      class="blk h-5 w-24 rounded bg-ink"
                      style="transition-delay: 0.05s"
                    ></div>
                    <div class="blk flex gap-2" style="transition-delay: 0.1s">
                      <span class="h-3 w-10 rounded bg-surface-2"></span
                      ><span class="h-3 w-10 rounded bg-surface-2"></span
                      ><span class="h-6 w-16 rounded-full bg-accent"></span>
                    </div>
                  </div>
                  <div
                    class="blk h-9 w-3/4 rounded bg-surface-2 mt-5"
                    style="transition-delay: 0.18s"
                  ></div>
                  <div
                    class="blk h-3 w-2/3 rounded bg-surface-2 mt-3"
                    style="transition-delay: 0.24s"
                  ></div>
                  <div class="grid grid-cols-3 gap-3 mt-5">
                    <div
                      class="blk h-20 rounded-xl bg-surface"
                      style="transition-delay: 0.3s"
                    ></div>
                    <div
                      class="blk h-20 rounded-xl bg-surface"
                      style="transition-delay: 0.36s"
                    ></div>
                    <div
                      class="blk h-20 rounded-xl bg-surface"
                      style="transition-delay: 0.42s"
                    ></div>
                  </div>
                  <div class="flex items-center gap-3 mt-5">
                    <svg viewBox="0 0 36 36" class="w-12 h-12 -rotate-90">
                      <circle
                        cx="18"
                        cy="18"
                        r="15"
                        fill="none"
                        stroke="#e6e1da"
                        stroke-width="4"
                      />
                      <circle
                        class="ring-fg"
                        cx="18"
                        cy="18"
                        r="15"
                        fill="none"
                        stroke="#fa5539"
                        stroke-width="4"
                        stroke-linecap="round"
                        stroke-dasharray="94.2"
                        style="--c: 94.2; --o: 0"
                      />
                    </svg>
                    <div>
                      <p class="font-display text-xl tt">100</p>
                      <p class="text-[11px] text-ink-soft">PageSpeed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== WHY US (BENTO) ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p
              class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
            >
              <?php echo esc_html( bx_field( 'whyus_eyebrow', false, 'Why BoostronixX' ) ); ?>
            </p>
            <h2
              class="reveal font-display text-3xl sm:text-5xl tt leading-tight"
            >
              <?php echo esc_html( bx_field( 'whyus_heading', false, 'Outcomes, not vanity metrics — from a digital marketing agency in Jaipur' ) ); ?>
            </h2>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:auto-rows-[170px]">
            <div
              class="reveal relative overflow-hidden col-span-2 row-span-2 rounded-xl2 bg-ink text-paper p-7 flex flex-col justify-between"
            >
              <div class="md:absolute md:right-0 md:bottom-0 max-md:w-full max-md:order-last max-md:-mb-7">
                <img src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/why-boostronixx.avif" alt="BoostronixX performance illustration" class="pointer-events-none z-0 md:max-w-[300px] md:w-[36vw] md:min-w-[160px] max-md:w-full rounded-[2rem] shadow-[0_25px_60px_-30px_rgba(0,0,0,.55)] object-cover" />
              </div>
              <div class="flex items-center justify-between">
                <span
                  class="text-xs font-medium tracking-[.2em] uppercase text-paper/50"
                  ><?php echo esc_html( bx_field( 'whyus_result_label', false, 'Avg. client result' ) ); ?></span
                ><span class="h-2.5 w-2.5 rounded-full bg-accent"></span>
              </div>
              <div>
                <p class="font-display text-6xl sm:text-7xl tt">
                  <span class="count" data-to="<?php echo (int) bx_field( 'whyus_result_number', false, 65 ); ?>">0</span>%
                </p>
                <p class="text-paper/70 mt-2 max-w-xs">
                  <?php echo esc_html( bx_field( 'whyus_result_text', false, 'average year-on-year sales growth reported by our clients across Jaipur and beyond.' ) ); ?>
                </p>
              </div>
            </div>
            <div
              class="reveal rounded-xl2 border border-line p-6 flex flex-col justify-between"
              data-delay="1"
            >
              <span
                class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft"
                >In-house</span
              >
              <p class="font-display text-5xl tt">
                <span class="count" data-to="<?php echo (int) bx_field( 'whyus_exp_number', false, 100 ); ?>">0</span>%
              </p>
            </div>
            <div
              class="reveal rounded-xl2 border border-line p-6 flex flex-col justify-between"
              data-delay="2"
            >
              <span
                class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft"
                >Clients</span
              >
              <p class="font-display text-5xl tt">
                <span class="count" data-to="<?php echo (int) bx_field( 'whyus_clients_number', false, 50 ); ?>">0</span>+
              </p>
            </div>
            <div
              class="reveal col-span-2 rounded-xl2 bg-surface p-6 flex items-center"
              data-delay="2"
            >
              <p class="font-display text-xl sm:text-2xl tt leading-snug">
                "<?php echo esc_html( bx_field( 'whyus_quote', false, "They don't just deliver services — they become your growth partners." ) ); ?>"
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== WORK ===================== -->
      <section id="work" class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-12"
          >
            <div>
              <p
                class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
              >
                <?php echo esc_html( bx_field( 'work_eyebrow', false, 'Selected work' ) ); ?>
              </p>
              <h2
                class="reveal font-display text-3xl sm:text-5xl tt max-w-xl leading-tight"
              >
                <?php echo esc_html( bx_field( 'work_heading', false, 'Our latest projects' ) ); ?>
              </h2>
            </div>
            <?php
            $bx_wk     = function_exists( 'get_field' ) ? get_field( 'work_button' ) : false;
            $bx_wk_url = ( is_array( $bx_wk ) && ! empty( $bx_wk['url'] ) ) ? $bx_wk['url'] : home_url( '/portfolio/' );
            $bx_wk_txt = ( is_array( $bx_wk ) && ! empty( $bx_wk['title'] ) ) ? $bx_wk['title'] : 'View all projects';
            ?>
            <a
              href="<?php echo esc_url( $bx_wk_url ); ?>"
              class="reveal group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"
              data-delay="1"
            >
              <span class="relative z-10 sheen-text-dark"
                ><?php echo esc_html( $bx_wk_txt ); ?></span
              >
              <iconify-icon
                icon="lucide:arrow-right"
                class="relative z-10"
              ></iconify-icon>
            </a>
          </div>
          <div class="grid md:grid-cols-2 gap-6">
            <?php bx_home_render_work(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== ABOUT ===================== -->
      <section id="about" class="py-20 sm:py-28">
        <div
          class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10 items-center"
        >
          <div class="lg:col-span-5 reveal">
            <div class="relative">
              <figure class="imgph rounded-xl2 aspect-[4/5]">
                <img
                  src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/about-studio.avif"
                  alt="Inside the BoostronixX studio in Jaipur, Rajasthan"
                  width="880"
                  height="1100"
                  loading="lazy"
                  onerror="this.remove()"
                />
                <figcaption class="lbl">
                  <b>About · 880×1100</b
                  ><span
                    >Studio candid or curated flat-lay of deliverables. Bright,
                    airy.</span
                  >
                </figcaption>
              </figure>
              <div
                class="absolute right-2 top-2 sm:-right-4 sm:-top-4 h-24 w-24 spin"
              >
                <svg viewBox="0 0 100 100" class="w-full h-full">
                  <defs>
                    <path
                      id="cir"
                      d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0"
                    />
                  </defs>
                  <circle cx="50" cy="50" r="49" fill="#0a0a0a" />
                  <text
                    font-size="10.5"
                    font-family="Bricolage Grotesque"
                    fill="#fff"
                    letter-spacing="2"
                  >
                    <textPath href="#cir">
                      BOOSTRONIXX · CREATIVE · GROWTH ·
                    </textPath>
                  </text>
                </svg>
                <span
                  class="absolute inset-0 grid place-items-center text-accent text-lg"
                  ><iconify-icon icon="lucide:sparkles"></iconify-icon
                ></span>
              </div>
            </div>
          </div>
          <div class="lg:col-span-7">
            <p
              class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
            >
              <?php echo esc_html( bx_field( 'about_eyebrow', false, 'Get to know us' ) ); ?>
            </p>
            <h2
              class="reveal font-display text-3xl sm:text-5xl tt leading-tight max-w-xl"
            >
              <?php echo esc_html( bx_field( 'about_heading', false, 'A creative studio that thinks like a growth team' ) ); ?>
            </h2>
            <p
              class="reveal text-ink-soft mt-6 max-w-xl leading-relaxed"
              data-delay="1"
            >
              <?php echo esc_html( bx_field( 'about_text', false, "BoostronixX turns ideas into scalable brands. We combine strategy, creativity and performance marketing to deliver consistent results — whether you're a start-up finding your footing or an established business ready to scale." ) ); ?>
            </p>
            <ul
              class="reveal grid sm:grid-cols-2 gap-3 mt-8 text-sm"
              data-delay="2"
            >
              <?php foreach ( bx_lines( bx_field( 'about_points', false, "Strategy-first, creative-led\nTransparent, tracked ROI\nIn-house design & dev\nAI + data optimisation" ) ) as $bx_pt ) : ?>
              <li class="flex items-center gap-3">
                <span class="h-1.5 w-1.5 rounded-full bg-accent"></span>
                <?php echo esc_html( $bx_pt ); ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <dl
              class="reveal grid grid-cols-2 sm:grid-cols-4 gap-px mt-9 rounded-2xl overflow-hidden border border-line bg-line"
              data-delay="2"
            >
              <?php
              $bx_about_stats = array();
              if ( function_exists( 'have_rows' ) && have_rows( 'about_stats' ) ) {
                  while ( have_rows( 'about_stats' ) ) {
                      the_row();
                      $bx_about_stats[] = array( (string) get_sub_field( 'label' ), (string) get_sub_field( 'value' ) );
                  }
              }
              if ( ! $bx_about_stats ) {
                  $bx_about_stats = array(
                      array( 'Founded', '2026' ),
                      array( 'Based in', 'Jaipur' ),
                      array( 'Brands served', '50+' ),
                      array( 'Avg. reply', '<24h' ),
                  );
              }
              foreach ( $bx_about_stats as $bx_st ) :
                  ?>
              <div class="bg-paper p-4">
                <dt class="text-xs text-ink-soft"><?php echo esc_html( $bx_st[0] ); ?></dt>
                <dd class="font-display text-2xl tt mt-1"><?php echo esc_html( $bx_st[1] ); ?></dd>
              </div>
              <?php endforeach; ?>
            </dl>
            <?php
            $bx_ab     = function_exists( 'get_field' ) ? get_field( 'about_button' ) : false;
            $bx_ab_url = ( is_array( $bx_ab ) && ! empty( $bx_ab['url'] ) ) ? $bx_ab['url'] : home_url( '/about-us/' );
            $bx_ab_txt = ( is_array( $bx_ab ) && ! empty( $bx_ab['title'] ) ) ? $bx_ab['title'] : 'About BoostronixX';
            ?>
            <a
              href="<?php echo esc_url( $bx_ab_url ); ?>"
              class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-9 font-medium"
              data-delay="2"
            >
              <span class="relative z-10 sheen-text"><?php echo esc_html( $bx_ab_txt ); ?></span>
              <iconify-icon
                icon="lucide:arrow-right"
                class="relative z-10"
              ></iconify-icon>
            </a>
          </div>
        </div>
      </section>

      <!-- ===================== INDUSTRIES ===================== -->
      <section id="industries" class="py-20 sm:py-28 bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-12"
          >
            <div class="max-w-2xl">
              <p
                class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
              >
                <?php echo esc_html( bx_field( 'industries_eyebrow', false, 'Industries we empower' ) ); ?>
              </p>
              <h2
                class="reveal font-display text-3xl sm:text-5xl tt leading-tight"
              >
                <?php echo esc_html( bx_field( 'industries_heading', false, 'Growth strategy, tailored to your sector' ) ); ?>
              </h2>
            </div>
            <?php
            $bx_ind     = function_exists( 'get_field' ) ? get_field( 'industries_button' ) : false;
            $bx_ind_url = ( is_array( $bx_ind ) && ! empty( $bx_ind['url'] ) ) ? $bx_ind['url'] : home_url( '/industries/' );
            $bx_ind_txt = ( is_array( $bx_ind ) && ! empty( $bx_ind['title'] ) ) ? $bx_ind['title'] : 'View all industries';
            ?>
            <a
              href="<?php echo esc_url( $bx_ind_url ); ?>"
              class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium shrink-0"
              data-delay="1"
            >
              <span class="relative z-10 sheen-text"><?php echo esc_html( $bx_ind_txt ); ?></span>
              <iconify-icon
                icon="lucide:arrow-right"
                class="relative z-10"
              ></iconify-icon>
            </a>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Real Estate — skyline + pulsing pin -->
            <a href="/real-estate/" class="reveal group rounded-2xl bg-paper border border-line p-5 hover:border-accent hover:-translate-y-1 transition-all duration-300" aria-label="Real estate marketing">
              <div class="relative aspect-[5/4] rounded-xl overflow-hidden bg-gradient-to-b from-[#243a55] via-[#162739] to-[#0b1521]">
                <span class="ind-glow absolute top-4 right-5 h-9 w-9 rounded-full bg-[#ffe4bd]" aria-hidden="true"></span>
                <div class="absolute left-1/2 -translate-x-1/2 top-[7%] z-10" aria-hidden="true"><span class="ind-bob grid place-items-center h-7 w-7 rounded-full bg-accent text-paper text-sm shadow-[0_6px_14px_-4px_rgba(250,85,57,.6)] ring-2 ring-[#0b1521]"><iconify-icon icon="lucide:map-pin"></iconify-icon></span></div>
                <div class="absolute inset-x-0 bottom-0 h-full flex items-end justify-center gap-1.5 px-3" aria-hidden="true">
                  <div class="skb w-7 rounded-t bg-[#1c3a59] win-dim" style="height:40%"></div>
                  <div class="skb w-9 rounded-t bg-[#234567] win-dim" style="height:60%"></div>
                  <div class="skb w-10 rounded-t bg-accent win-lit" style="height:82%"></div>
                  <div class="skb w-9 rounded-t bg-[#234567] win-dim" style="height:54%"></div>
                  <div class="skb w-7 rounded-t bg-[#1c3a59] win-dim" style="height:44%"></div>
                </div>
              </div>
              <div class="mt-4 flex items-center justify-between gap-2">
                <div class="min-w-0"><h3 class="font-display text-lg tt group-hover:text-accent transition">Real Estate</h3><p class="text-xs text-ink-soft truncate">Leads, site visits &amp; bookings</p></div>
                <span class="grid place-items-center h-8 w-8 rounded-full border border-line text-ink-soft shrink-0 group-hover:bg-accent group-hover:text-paper group-hover:border-accent transition" aria-hidden="true"><iconify-icon icon="lucide:arrow-up-right"></iconify-icon></span>
              </div>
            </a>
            <!-- Schools — graduation cap toss + sparkles -->
            <a href="/schools/" class="reveal group rounded-2xl bg-paper border border-line p-5 hover:border-accent hover:-translate-y-1 transition-all duration-300" data-delay="1" aria-label="School marketing">
              <div class="relative aspect-[5/4] rounded-xl overflow-hidden bg-[#26473a] ring-[5px] ring-inset ring-[#6e4a29]">
                <span class="absolute inset-0 opacity-[0.05]" style="background:radial-gradient(circle at 72% 28%, #fff, transparent 55%)" aria-hidden="true"></span>
                <span class="absolute top-4 left-5 font-display tt text-[40px] leading-none text-white/90" aria-hidden="true">A+</span>
                <iconify-icon icon="lucide:graduation-cap" class="ind-bob absolute top-4 right-5 text-4xl text-white/85" aria-hidden="true"></iconify-icon>
                <div class="absolute left-5 right-5 top-1/2 -translate-y-1/2" aria-hidden="true">
                  <p class="text-white/85 text-sm">Admissions <span class="text-accent font-semibold">↑ 96%</span></p>
                  <svg class="w-28 h-3 mt-1" viewBox="0 0 120 12" fill="none" aria-hidden="true"><path class="chalk-draw" pathLength="1" d="M2,7 C30,2 60,11 92,5 C104,3 114,7 118,5" stroke="#ffffff" stroke-opacity=".8" stroke-width="2.5" stroke-linecap="round"/></svg>
                </div>
                <div class="absolute bottom-0 inset-x-0 h-3.5 bg-[#6e4a29]" aria-hidden="true"></div>
                <span class="ind-pop absolute bottom-1 left-6 h-1.5 w-6 rounded-full bg-white/85" aria-hidden="true"></span>
                <span class="ind-pop p2 absolute bottom-1 left-14 h-1.5 w-4 rounded-full bg-accent/80" aria-hidden="true"></span>
                <span class="ind-pop p3 absolute bottom-1 right-6 h-2.5 w-7 rounded-[3px] bg-[#caa06a]" aria-hidden="true"></span>
              </div>
              <div class="mt-4 flex items-center justify-between gap-2">
                <div class="min-w-0"><h3 class="font-display text-lg tt group-hover:text-accent transition">Schools</h3><p class="text-xs text-ink-soft truncate">Admission enquiries &amp; seats</p></div>
                <span class="grid place-items-center h-8 w-8 rounded-full border border-line text-ink-soft shrink-0 group-hover:bg-accent group-hover:text-paper group-hover:border-accent transition" aria-hidden="true"><iconify-icon icon="lucide:arrow-up-right"></iconify-icon></span>
              </div>
            </a>
            <!-- D2C eCommerce — shopping bag + cart badge + sale tag -->
            <a href="/d2c-ecommerce/" class="reveal group rounded-2xl bg-paper border border-line p-5 hover:border-accent hover:-translate-y-1 transition-all duration-300" data-delay="2" aria-label="D2C eCommerce marketing">
              <div class="relative aspect-[5/4] rounded-xl overflow-hidden bg-paper border border-line flex flex-col">
                <div class="relative flex-1 min-h-0 bg-gradient-to-br from-accent/25 via-[#ff8a5c]/15 to-surface-2 grid place-items-center overflow-hidden">
                  <span class="absolute -top-6 -left-6 h-20 w-20 rounded-full bg-white/30 blur-md" aria-hidden="true"></span>
                  <iconify-icon icon="lucide:shirt" class="ind-bob relative text-[72px] text-accent/80" aria-hidden="true"></iconify-icon>
                  <span class="ind-tag absolute top-2.5 left-2.5 rounded-md bg-accent text-paper text-[10px] font-bold px-2 py-0.5 shadow" aria-hidden="true">−40%</span>
                  <span class="absolute top-2.5 right-2.5 rounded-full bg-ink text-paper text-[9px] font-semibold px-2 py-0.5" aria-hidden="true">Bestseller</span>
                </div>
                <div class="p-3" aria-hidden="true">
                  <div class="flex items-start justify-between gap-2">
                    <div class="min-w-0"><p class="text-[10px] text-accent leading-none">★★★★★ <span class="text-ink-soft">4.8</span></p><p class="font-display tt text-sm mt-1 truncate">Folkstreet Tee</p></div>
                    <div class="text-right shrink-0"><p class="font-display tt text-accent text-base leading-none">₹899</p><p class="text-[9px] text-ink-soft line-through">₹1,499</p></div>
                  </div>
                  <div class="mt-2.5 flex items-center gap-2">
                    <span class="flex-1 rounded-full bg-ink text-paper text-center text-[11px] font-medium py-2 inline-flex items-center justify-center gap-1.5"><iconify-icon icon="lucide:shopping-cart" class="text-xs"></iconify-icon> Add to cart</span>
                    <span class="relative grid place-items-center h-8 w-8 rounded-full bg-accent text-paper shadow shrink-0"><iconify-icon icon="lucide:shopping-bag" class="text-sm"></iconify-icon><span class="ind-badge absolute -top-1 -right-1 grid place-items-center h-4 min-w-4 px-1 rounded-full bg-ink text-paper text-[9px] font-bold">3</span></span>
                  </div>
                </div>
              </div>
              <div class="mt-4 flex items-center justify-between gap-2">
                <div class="min-w-0"><h3 class="font-display text-lg tt group-hover:text-accent transition">D2C eCommerce</h3><p class="text-xs text-ink-soft truncate">Orders, ROAS &amp; repeat</p></div>
                <span class="grid place-items-center h-8 w-8 rounded-full border border-line text-ink-soft shrink-0 group-hover:bg-accent group-hover:text-paper group-hover:border-accent transition" aria-hidden="true"><iconify-icon icon="lucide:arrow-up-right"></iconify-icon></span>
              </div>
            </a>
            <!-- Hospitals — beating heart + EKG trace -->
            <a href="/hospitals/" class="reveal group rounded-2xl bg-paper border border-line p-5 hover:border-accent hover:-translate-y-1 transition-all duration-300" data-delay="3" aria-label="Hospital marketing">
              <div class="relative aspect-[5/4] rounded-xl overflow-hidden bg-[#0b1521]">
                <span class="absolute inset-0" style="background-image:linear-gradient(rgba(250,85,57,.1) 1px,transparent 1px),linear-gradient(90deg,rgba(250,85,57,.1) 1px,transparent 1px);background-size:18px 18px" aria-hidden="true"></span>
                <div class="absolute top-3 left-4 flex items-center gap-1.5" aria-hidden="true"><iconify-icon icon="lucide:heart" class="ind-heart text-accent text-base"></iconify-icon><span class="font-display tt text-sm text-paper">72 <span class="text-[10px] text-paper/50">BPM</span></span></div>
                <span class="mon-blip absolute top-4 right-4 h-2 w-2 rounded-full bg-emerald-400" aria-hidden="true"></span>
                <svg class="absolute inset-x-0 top-1/2 -translate-y-1/2 w-full h-16" viewBox="0 0 200 60" preserveAspectRatio="none" fill="none" aria-hidden="true"><polyline class="ind-ekg" points="0,30 50,30 60,30 68,9 78,52 86,30 130,30 140,30 148,11 158,50 166,30 200,30" stroke="#fa5539" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <div class="absolute bottom-3 inset-x-4 flex items-center justify-between text-[10px] text-paper/55" aria-hidden="true"><span class="inline-flex items-center gap-1"><span class="mon-blip block h-1.5 w-1.5 rounded-full bg-accent"></span> SpO₂ 98%</span><span class="inline-flex items-center gap-1"><span class="mon-blip b2 block h-1.5 w-1.5 rounded-full bg-accent"></span> BP 120/80</span></div>
              </div>
              <div class="mt-4 flex items-center justify-between gap-2">
                <div class="min-w-0"><h3 class="font-display text-lg tt group-hover:text-accent transition">Hospitals</h3><p class="text-xs text-ink-soft truncate">Patients &amp; appointments</p></div>
                <span class="grid place-items-center h-8 w-8 rounded-full border border-line text-ink-soft shrink-0 group-hover:bg-accent group-hover:text-paper group-hover:border-accent transition" aria-hidden="true"><iconify-icon icon="lucide:arrow-up-right"></iconify-icon></span>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- ===================== TESTIMONIALS (slider) ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-12"
          >
            <div>
              <p
                class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
              >
                <?php echo esc_html( bx_field( 'testimonials_eyebrow', false, 'Results clients trust' ) ); ?>
              </p>
              <h2
                class="reveal font-display text-3xl sm:text-5xl tt leading-tight"
              >
                <?php echo esc_html( bx_field( 'testimonials_heading', false, 'Brands that grew with us' ) ); ?>
              </h2>
            </div>
            <div class="reveal flex items-center gap-3" data-delay="1">
              <button
                id="tPrev"
                type="button"
                aria-label="Previous"
                class="btn-glow-light grid place-items-center h-12 w-12 rounded-full text-xl"
              >
                <iconify-icon
                  icon="lucide:arrow-left"
                  class="relative z-10"
                ></iconify-icon>
              </button>
              <button
                id="tNext"
                type="button"
                aria-label="Next"
                class="btn-glow-light grid place-items-center h-12 w-12 rounded-full text-xl"
              >
                <iconify-icon
                  icon="lucide:arrow-right"
                  class="relative z-10"
                ></iconify-icon>
              </button>
            </div>
          </div>
          <div id="tViewport">
            <div id="tTrack">
              <?php bx_home_render_testimonials(); ?>
            </div>
          </div>
          <div class="flex items-center justify-between mt-7">
            <div id="tDots" class="flex items-center gap-2"></div>
            <p class="inline-flex items-center gap-1 text-xs text-ink-soft">
              Drag, swipe or use arrows
              <iconify-icon icon="lucide:arrow-right"></iconify-icon>
            </p>
          </div>
        </div>
      </section>

      <!-- ===================== INSIGHTS ===================== -->
      <section id="insights" class="py-20 sm:py-28 bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-12"
          >
            <div>
              <p
                class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
              >
                <?php echo esc_html( bx_field( 'insights_eyebrow', false, 'Insights' ) ); ?>
              </p>
              <h2
                class="reveal font-display text-3xl sm:text-5xl tt max-w-xl leading-tight"
              >
                <?php echo esc_html( bx_field( 'insights_heading', false, 'Ideas on branding & growth' ) ); ?>
              </h2>
            </div>
            <a
              href="/blog/"
              class="reveal text-sm font-medium underline underline-offset-4 decoration-accent decoration-2"
              data-delay="1"
              >Read the blog
              <iconify-icon
                icon="lucide:arrow-right"
                class="align-middle"
              ></iconify-icon
            ></a>
          </div>
          <div class="grid md:grid-cols-3 gap-6">
            <?php bx_home_render_insights(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12">
            <p
              class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"
            >
              <?php echo esc_html( bx_field( 'faq_eyebrow', false, 'FAQ' ) ); ?>
            </p>
            <h2
              class="reveal font-display text-3xl sm:text-5xl tt leading-tight"
            >
              <?php echo esc_html( bx_field( 'faq_heading', false, 'Questions, answered' ) ); ?>
            </h2>
          </div>
          <div class="space-y-3">
            <?php bx_home_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <?php
      $bx_cta_btn     = function_exists( 'get_field' ) ? get_field( 'cta_button' ) : false;
      $bx_cta_btn_url = ( is_array( $bx_cta_btn ) && ! empty( $bx_cta_btn['url'] ) ) ? $bx_cta_btn['url'] : home_url( '/contact-us/' );
      $bx_cta_btn_txt = ( is_array( $bx_cta_btn ) && ! empty( $bx_cta_btn['title'] ) ) ? $bx_cta_btn['title'] : 'Book a Free Strategy Call';
      $bx_cta_phone   = bx_field( 'cta_phone', false, '+91 80582 12202' );
      $bx_cta_tel     = preg_replace( '/[^0-9+]/', '', $bx_cta_phone );
      $bx_cta_email   = bx_field( 'cta_email', false, 'boostronixx@gmail.com' );
      ?>
      <section id="contact" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div
            class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-24 overflow-hidden"
          >
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div
              class="absolute right-6 top-6 sm:right-12 sm:top-12 h-24 w-24 spin hidden sm:block"
            >
              <svg viewBox="0 0 100 100" class="w-full h-full">
                <defs>
                  <path
                    id="cir2"
                    d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0"
                  />
                </defs>
                <text
                  font-size="10.5"
                  font-family="Bricolage Grotesque"
                  fill="#fff"
                  letter-spacing="2"
                >
                  <textPath href="#cir2">BOOK A CALL · FREE AUDIT ·</textPath>
                </text>
              </svg>
              <span
                class="absolute inset-0 grid place-items-center text-accent text-lg"
                ><iconify-icon icon="lucide:sparkles"></iconify-icon
              ></span>
            </div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
              <div class="max-w-2xl">
                <h2 class="font-display text-3xl sm:text-6xl tt leading-[1.02]">
                  <?php echo esc_html( bx_field( 'cta_heading', false, 'Ready to build something great together?' ) ); ?>
                </h2>
                <p class="text-paper/70 mt-6 text-lg max-w-xl">
                  <?php echo esc_html( bx_field( 'cta_text', false, 'Real estate, school, D2C or healthcare brand ready to scale — BoostronixX is your creative branding and digital marketing partner in Jaipur, trusted as one of the best digital marketing agencies in Jaipur for ROI-driven, affordable growth. Book a free strategy call today.' ) ); ?>
                </p>
                <div class="flex flex-wrap items-center gap-3 mt-9">
                  <a
                    href="<?php echo esc_url( $bx_cta_btn_url ); ?>"
                    class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"
                  >
                    <span class="relative z-10 sheen-text-light"
                      ><?php echo esc_html( $bx_cta_btn_txt ); ?></span
                    >
                    <iconify-icon
                      icon="lucide:arrow-right"
                      class="relative z-10"
                    ></iconify-icon>
                  </a>
                  <a
                    href="tel:<?php echo esc_attr( $bx_cta_tel ); ?>"
                    class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"
                    ><iconify-icon
                      icon="lucide:phone"
                      class="relative z-10 shrink-0"
                    ></iconify-icon
                    ><span class="relative z-10"><?php echo esc_html( $bx_cta_phone ); ?></span></a
                  >
                </div>
                <p class="text-paper/50 text-sm mt-5">
                  Or email
                  <a
                    href="mailto:<?php echo esc_attr( $bx_cta_email ); ?>"
                    class="text-paper underline underline-offset-4 decoration-accent"
                    ><?php echo esc_html( $bx_cta_email ); ?></a
                  >
                  · <?php echo esc_html( bx_field( 'cta_hours', false, 'Mon–Fri, 9 AM–7 PM IST' ) ); ?>
                </p>
              </div>
              <div class="relative overflow-hidden">
                <img
                  src="https://boostronixx.s3.ap-south-1.amazonaws.com/images/cta1.avif"
                  alt="BoostronixX strategy call"
                  class="md:h-full w-full object-contain object-center"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
