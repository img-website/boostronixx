<?php
/**
 * Template Name: FAQ
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- ===================== HERO + SEARCH ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 text-center">
          <nav class="reveal flex items-center justify-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium"><?php echo esc_html( bx_field( 'faq_hero_crumb', false, 'FAQ' ) ); ?></span>
          </nav>
          <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
            <span class="h-2 w-2 rounded-full bg-accent"></span> <?php echo esc_html( bx_field( 'faq_hero_badge', false, 'Help Center' ) ); ?>
          </div>
          <h1 class="reveal font-display text-4xl sm:text-6xl tt leading-[0.98]">
            <?php echo esc_html( bx_field( 'faq_hero_heading', false, 'How can we' ) ); ?> <span class="text-accent"><?php echo esc_html( bx_field( 'faq_hero_heading_accent', false, 'help?' ) ); ?></span>
          </h1>
          <p class="reveal text-ink-soft mt-5 max-w-lg mx-auto" data-delay="1">
            <?php echo esc_html( bx_field( 'faq_hero_subheading', false, "Common questions about our digital marketing services in Jaipur —\n            from pricing and process to SEO and timelines. Browse by category, or\n            search below. Still stuck? We're one message away." ) ); ?>
          </p>
          <!-- search -->
          <div class="reveal mt-8 relative max-w-xl mx-auto" data-delay="2">
            <iconify-icon
              icon="lucide:search"
              class="absolute left-5 top-1/2 -translate-y-1/2 text-xl text-ink-soft"
            ></iconify-icon>
            <input
              id="faqSearch"
              aria-label="Search FAQs"
              type="text"
              placeholder="<?php echo esc_attr( bx_field( 'faq_hero_search_placeholder', false, 'Search e.g. pricing, SEO, timeline…' ) ); ?>"
              class="w-full rounded-full border border-line bg-paper pl-13 pr-5 py-4 text-base outline-none focus:border-accent transition"
              style="padding-left: 3.25rem"
              autocomplete="off"
            />
          </div>
        </div>
      </section>

      <!-- ===================== CATEGORY FILTER + LIST ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <!-- filter chips -->
          <div id="chips" class="flex flex-wrap items-center justify-center gap-2 mb-10">
            <button class="chip active rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="all">All</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="services">Services</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="pricing">Pricing</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="process">Process</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="seo">SEO &amp; Ads</button>
            <button class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="support">Support</button>
          </div>

          <!-- list -->
          <div id="faqList" class="space-y-3">
<?php bx_faq_render_items(); ?>
          </div>

          <!-- empty state -->
          <div id="faqEmpty" class="hidden text-center py-16">
            <span class="text-4xl text-ink-soft"><iconify-icon icon="lucide:search-x"></iconify-icon></span>
            <p class="font-display text-xl tt mt-4">No matching questions</p>
            <p class="text-ink-soft text-sm mt-1">Try a different keyword — or just ask us directly.</p>
          </div>
        </div>
      </section>

      <!-- ===================== STILL HAVE QUESTIONS ===================== -->
      <?php
      $bx_faq_cta   = function_exists( 'get_field' ) ? get_field( 'faq_cta_button' ) : false;
      $bx_faq_cta_u = ( is_array( $bx_faq_cta ) && ! empty( $bx_faq_cta['url'] ) ) ? $bx_faq_cta['url'] : '/contact/';
      $bx_faq_cta_t = ( is_array( $bx_faq_cta ) && ! empty( $bx_faq_cta['title'] ) ) ? $bx_faq_cta['title'] : 'Book a Free Strategy Call';
      $bx_faq_email = bx_field( 'faq_cta_email', false, 'boostronixx@gmail.com' );
      ?>
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="reveal relative rounded-xl2 bg-ink text-paper p-8 sm:p-12 overflow-hidden text-center">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="absolute right-5 top-5 h-20 w-20 spin hidden sm:block">
              <svg viewBox="0 0 100 100" class="w-full h-full">
                <defs><path id="c3" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs>
                <text font-size="10" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c3">ASK US ANYTHING · ASK US ·</textPath></text>
              </svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:message-circle-question"></iconify-icon></span>
            </div>
            <div class="relative">
              <h2 class="font-display text-2xl sm:text-4xl tt"><?php echo esc_html( bx_field( 'faq_cta_heading', false, 'Still have a question?' ) ); ?></h2>
              <p class="text-paper/70 mt-3 max-w-md mx-auto">
                <?php echo esc_html( bx_field( 'faq_cta_text', false, "Can't find what you're looking for? Talk to a human — we usually\n                reply within 24 hours." ) ); ?>
              </p>
              <div class="flex flex-wrap items-center justify-center gap-3 mt-7">
                <a href="<?php echo esc_url( $bx_faq_cta_u ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium">
                  <span class="relative z-10 sheen-text-light"><?php echo esc_html( $bx_faq_cta_t ); ?></span>
                  <iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon>
                </a>
                <a href="<?php echo esc_url( 'mailto:' . $bx_faq_email ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium">
                  <iconify-icon icon="lucide:mail" class="relative z-10 shrink-0"></iconify-icon>
                  <span class="relative z-10">Email us</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
