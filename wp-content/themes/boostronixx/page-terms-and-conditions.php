<?php
/**
 * Template Name: Terms & Conditions
 *
 * Content is editable in the page's "Terms & Conditions Content" panel (ACF);
 * the markup/classes mirror the original design so the scoped CSS and reveal JS
 * keep working unchanged.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$tc_btn       = bx_field( 'tc_cta_button', false, array() );
$tc_btn_url   = ! empty( $tc_btn['url'] ) ? $tc_btn['url'] : home_url( '/contact-us/' );
$tc_btn_label = ! empty( $tc_btn['title'] ) ? $tc_btn['title'] : 'Book a Free Strategy Call';
$tc_btn_tgt   = ! empty( $tc_btn['target'] ) ? ' target="' . esc_attr( $tc_btn['target'] ) . '"' : '';
?>

<main id="top">
      <!-- ===================== HERO ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-10 overflow-hidden">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium"><?php echo esc_html( bx_field( 'tc_crumb', false, 'Terms & Conditions' ) ); ?></span>
          </nav>
          <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
            <iconify-icon icon="<?php echo esc_attr( bx_field( 'tc_badge_icon', false, 'lucide:scroll-text' ) ); ?>" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'tc_badge', false, 'The agreement' ) ); ?>
          </div>
          <h1 class="reveal font-display text-4xl sm:text-6xl tt leading-[0.98]">
            <?php echo esc_html( bx_field( 'tc_title', false, 'Terms & Conditions' ) ); ?>
          </h1>
          <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">
            <?php echo esc_html( bx_field( 'tc_intro', false, 'Please read these terms carefully. They set out the rules for using the BoostronixX website and engaging our services.' ) ); ?>
          </p>
          <p class="reveal text-xs text-ink-soft mt-5" data-delay="2">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-surface px-3 py-1.5"><iconify-icon icon="<?php echo esc_attr( bx_field( 'tc_effective_icon', false, 'lucide:calendar' ) ); ?>" class="text-sm"></iconify-icon> Effective: <?php echo esc_html( bx_field( 'tc_effective', false, 'June 10, 2026' ) ); ?></span>
          </p>
        </div>
      </section>

      <!-- ===================== AGREEMENT BANNER ===================== -->
      <section class="pb-14">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="reveal relative rounded-xl2 bg-ink text-paper p-7 sm:p-9 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative flex items-start gap-4">
              <span class="inline-grid place-items-center h-12 w-12 shrink-0 rounded-2xl bg-accent text-paper text-2xl">
                <iconify-icon icon="<?php echo esc_attr( bx_field( 'tc_banner_icon', false, 'lucide:check' ) ); ?>"></iconify-icon>
              </span>
              <div>
                <h2 class="font-display text-xl sm:text-2xl tt"><?php echo esc_html( bx_field( 'tc_banner_heading', false, 'By using this site, you agree' ) ); ?></h2>
                <p class="text-paper/70 mt-2 text-sm leading-relaxed">
                  <?php echo esc_html( bx_field( 'tc_banner_text', false, "Accessing boostronixx.com or working with us means you accept these Terms & Conditions in full. If you don't agree with any part, please don't use the website or our services." ) ); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== TERMS BLOCKS ===================== -->
      <section class="pb-16 sm:pb-24" data-track>
        <div class="mx-auto max-w-3xl px-4 sm:px-6 divide-y divide-line">
          <?php bx_tc_render_terms(); ?>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="reveal rounded-xl2 border border-line bg-surface p-8 sm:p-10 text-center">
            <h2 class="font-display text-2xl sm:text-3xl tt"><?php echo esc_html( bx_field( 'tc_cta_heading', false, 'Ready to work together?' ) ); ?></h2>
            <p class="text-ink-soft mt-3 max-w-md mx-auto"><?php echo esc_html( bx_field( 'tc_cta_text', false, "Got the terms — now let's get to the good part. Book a free, no-obligation strategy call." ) ); ?></p>
            <a href="<?php echo esc_url( $tc_btn_url ); ?>"<?php echo $tc_btn_tgt; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- esc_attr above. ?> class="group btn-glow inline-flex items-center gap-2 rounded-full px-7 py-4 mt-7 font-medium">
              <span class="relative z-10 sheen-text"><?php echo esc_html( $tc_btn_label ); ?></span>
              <iconify-icon icon="<?php echo esc_attr( bx_field( 'tc_cta_icon', false, 'lucide:arrow-right' ) ); ?>" class="relative z-10"></iconify-icon>
            </a>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
