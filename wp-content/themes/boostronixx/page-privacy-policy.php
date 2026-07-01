<?php
/**
 * Template Name: Privacy Policy
 *
 * Content is editable in the page's "Privacy Policy Content" panel (ACF); the
 * markup/classes below mirror the original design exactly so the scoped CSS and
 * the reveal / TOC scroll-spy JS keep working unchanged.
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
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines overflow-hidden border-b border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium"><?php echo esc_html( bx_field( 'pp_crumb', false, 'Privacy Policy' ) ); ?></span>
          </nav>
          <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
            <iconify-icon icon="<?php echo esc_attr( bx_field( 'pp_badge_icon', false, 'lucide:shield-check' ) ); ?>" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'pp_badge', false, 'Your data, respected' ) ); ?>
          </div>
          <h1 class="reveal font-display text-4xl sm:text-6xl tt leading-[0.98] max-w-2xl">
            <?php echo esc_html( bx_field( 'pp_title', false, 'Privacy Policy' ) ); ?>
          </h1>
          <p class="reveal text-ink-soft mt-5 max-w-xl leading-relaxed" data-delay="1">
            <?php echo esc_html( bx_field( 'pp_intro', false, 'This policy explains what we collect, why we collect it, and the control you have over your information when you use the BoostronixX website or services.' ) ); ?>
          </p>
          <div class="reveal flex flex-wrap items-center gap-3 mt-6 text-xs text-ink-soft" data-delay="2">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-surface px-3 py-1.5"><iconify-icon icon="<?php echo esc_attr( bx_field( 'pp_updated_icon', false, 'lucide:calendar' ) ); ?>" class="text-sm"></iconify-icon> Last updated: <?php echo esc_html( bx_field( 'pp_updated', false, 'June 10, 2026' ) ); ?></span>
            <span class="inline-flex items-center gap-1.5 rounded-full bg-surface px-3 py-1.5"><iconify-icon icon="<?php echo esc_attr( bx_field( 'pp_readtime_icon', false, 'lucide:clock' ) ); ?>" class="text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'pp_readtime', false, '~6 min read' ) ); ?></span>
          </div>
        </div>
      </section>

      <!-- ===================== AT A GLANCE ===================== -->
      <section class="py-12 sm:py-16 bg-surface border-b border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'pp_glance_heading', false, 'Your privacy at a glance' ) ); ?></p>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php bx_pp_render_glance(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== CONTENT + TOC ===================== -->
      <section class="py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12">
          <?php bx_pp_render_content(); ?>
        </div>
      </section>
    </main>

<?php
get_footer();
