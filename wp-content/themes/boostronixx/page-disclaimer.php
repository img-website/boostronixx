<?php
/**
 * Template Name: Disclaimer
 *
 * Content is editable in the page's "Disclaimer Content" panel (ACF); the
 * markup/classes mirror the original design so the scoped CSS and reveal JS keep
 * working unchanged. Contact buttons use Site Settings → Contact.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$dc_email      = bx_option( 'contact_email', 'boostronixx@gmail.com' );
$dc_phone      = bx_option( 'contact_phone', '+91 80582 12202' );
$dc_phone_link = bx_option( 'contact_phone_link', '+918058212202' );
?>

<main id="top">
      <!-- ===================== HERO ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-2xl px-4 sm:px-6 text-center">
          <nav class="reveal flex items-center justify-center gap-2 text-xs text-ink-soft mb-7" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium"><?php echo esc_html( bx_field( 'dc_crumb', false, 'Disclaimer' ) ); ?></span>
          </nav>
          <div class="reveal flex justify-center">
            <span class="pulse inline-grid place-items-center h-16 w-16 rounded-2xl bg-accent text-paper text-3xl">
              <iconify-icon icon="<?php echo esc_attr( bx_field( 'dc_icon', false, 'lucide:triangle-alert' ) ); ?>"></iconify-icon>
            </span>
          </div>
          <h1 class="reveal font-display text-4xl sm:text-6xl tt leading-[0.98] mt-7">
            <?php echo esc_html( bx_field( 'dc_title', false, 'Disclaimer' ) ); ?>
          </h1>
          <p class="reveal text-ink-soft mt-5 max-w-lg mx-auto leading-relaxed" data-delay="1">
            <?php echo esc_html( bx_field( 'dc_intro', false, 'The information on this website is shared in good faith and for general guidance only. Please read these notices before relying on anything you find here.' ) ); ?>
          </p>
          <p class="reveal text-xs text-ink-soft mt-6" data-delay="2">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-surface px-3 py-1.5"><iconify-icon icon="<?php echo esc_attr( bx_field( 'dc_updated_icon', false, 'lucide:calendar' ) ); ?>" class="text-sm"></iconify-icon> Last updated: <?php echo esc_html( bx_field( 'dc_updated', false, 'June 10, 2026' ) ); ?></span>
          </p>
        </div>
      </section>

      <!-- ===================== NOTICE CARDS ===================== -->
      <section class="py-12 sm:py-16">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 space-y-4">
          <?php bx_dc_render_notices(); ?>
        </div>
      </section>

      <!-- ===================== AGREEMENT + CONTACT ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="reveal relative rounded-xl2 bg-ink text-paper p-8 sm:p-12 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative">
              <span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-accent text-paper text-2xl mb-5"><iconify-icon icon="<?php echo esc_attr( bx_field( 'dc_banner_icon', false, 'lucide:check-check' ) ); ?>"></iconify-icon></span>
              <h2 class="font-display text-2xl sm:text-3xl tt"><?php echo esc_html( bx_field( 'dc_banner_heading', false, 'By using this website, you accept this disclaimer' ) ); ?></h2>
              <p class="text-paper/70 mt-3 max-w-xl leading-relaxed">
                <?php echo esc_html( bx_field( 'dc_banner_text', false, "If you do not agree with any part of it, please discontinue use of the site. Have a question about anything here? We're happy to help." ) ); ?>
              </p>
              <div class="flex flex-wrap items-center gap-3 mt-7">
                <a href="mailto:<?php echo esc_attr( $dc_email ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium">
                  <iconify-icon icon="<?php echo esc_attr( bx_field( 'dc_banner_email_icon', false, 'lucide:mail' ) ); ?>" class="relative z-10 shrink-0"></iconify-icon>
                  <span class="relative z-10 sheen-text-light"><?php echo esc_html( $dc_email ); ?></span>
                </a>
                <a href="tel:<?php echo esc_attr( $dc_phone_link ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium">
                  <iconify-icon icon="<?php echo esc_attr( bx_field( 'dc_banner_phone_icon', false, 'lucide:phone' ) ); ?>" class="relative z-10 shrink-0"></iconify-icon>
                  <span class="relative z-10"><?php echo esc_html( $dc_phone ); ?></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
