<?php
/**
 * Blog GRID card for the current post in the loop.
 * Markup matches the blog listing design (home.php / blog.html) verbatim.
 *
 * @param array $args { grad?: string }  Passed via get_template_part 3rd arg.
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bx_grad = isset( $args['grad'] ) ? $args['grad'] : bx_blog_gradient( 0 );
$bx_pc   = bx_primary_category();
?>
<a href="<?php the_permalink(); ?>" class="post group block" data-cat="<?php echo esc_attr( bx_category_slugs() ); ?>" data-title="<?php echo esc_attr( strtolower( get_the_title() . ' ' . ( $bx_pc ? $bx_pc->name : '' ) ) ); ?>">
  <div class="thumb imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:<?php echo esc_attr( $bx_grad ); ?>" aria-hidden="true"></div><?php if ( has_post_thumbnail() ) : ?><img width="395" height="526" src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'bx-blog-cover' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy" /><?php endif; ?></div>
  <div class="mt-4"><div class="flex items-center gap-2 text-xs"><?php if ( $bx_pc ) : ?><span class="rounded-full bg-surface px-2.5 py-1 font-medium"><?php echo esc_html( $bx_pc->name ); ?></span><?php endif; ?><span class="text-ink-soft inline-flex items-center gap-1"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> <?php echo (int) bx_reading_time(); ?> min</span></div><h3 class="ttl font-display text-xl tt mt-3 leading-snug"><?php the_title(); ?></h3><p class="text-ink-soft text-sm mt-2 leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p><p class="text-xs text-ink-soft mt-4"><time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time> · <?php echo esc_html( get_the_author() ); ?></p></div>
</a>
