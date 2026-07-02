<?php
/**
 * Featured / lead blog card for the current post (blog index, page 1).
 * Markup matches home.php / blog.html verbatim.
 *
 * @param array $args { grad?: string }
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bx_grad = isset( $args['grad'] ) ? $args['grad'] : bx_blog_gradient( 1 );
$bx_pc   = bx_primary_category();
?>
<a href="<?php the_permalink(); ?>" class="post reveal group grid lg:grid-cols-12 gap-6 lg:gap-10 items-center rounded-xl2 border border-line p-4 sm:p-6 hover:border-accent transition">
  <div class="lg:col-span-5">
    <div class="thumb imgph rounded-xl2 aspect-[3/4]">
      <div class="ph-zoom absolute inset-0 z-0" style="background:<?php echo esc_attr( $bx_grad ); ?>" aria-hidden="true"></div>
      <?php if ( has_post_thumbnail() ) : ?><img width="469" height="626" src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'bx-blog-cover' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy" /><?php endif; ?>
    </div>
  </div>
  <div class="lg:col-span-7">
    <div class="flex flex-wrap items-center gap-3 text-xs">
      <?php if ( $bx_pc ) : ?><span class="rounded-full bg-accent/10 text-accent font-medium px-3 py-1"><?php echo esc_html( $bx_pc->name ); ?></span><?php endif; ?>
      <span class="text-ink-soft inline-flex items-center gap-1.5"><iconify-icon icon="lucide:calendar" aria-hidden="true"></iconify-icon> <time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time></span>
      <span class="text-ink-soft inline-flex items-center gap-1.5"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> <?php echo (int) bx_reading_time(); ?> min read</span>
    </div>
    <h2 class="mt-4"><span class="font-display text-3xl sm:text-5xl tt leading-[1.04] group-hover:text-accent transition"><?php the_title(); ?></span></h2>
    <p class="text-ink-soft mt-4 max-w-xl leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p>
    <div class="flex items-center gap-3 mt-6">
      <?php echo bx_author_avatar( 'grid place-items-center h-10 w-10 rounded-full bg-ink text-paper font-display' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- helper returns escaped HTML. ?>
      <div class="text-sm"><p class="font-medium"><?php echo esc_html( get_the_author() ); ?></p><p class="text-ink-soft text-xs">BoostronixX</p></div>
      <span class="ml-auto inline-flex items-center gap-1.5 text-sm font-medium text-ink group-hover:text-accent transition">Read article <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span>
    </div>
  </div>
</a>
