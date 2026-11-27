<?php
/**
 * Service page "in-depth guide": renders the page's own block-editor content
 * as a long-form section (with a small table of contents) just before the FAQ.
 *
 * Reuses the blog article typography: the compiled CSS styles
 * `.bx-page-blog-post .prose`, so the wrapper carries `bx-page-blog-post`
 * (no CSS rebuild needed). Renders nothing while the page has no content.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bx_guide_raw = trim( (string) get_post_field( 'post_content', get_queried_object_id() ) );
if ( '' === $bx_guide_raw ) {
	return;
}

$bx_guide_rendered = (string) apply_filters( 'the_content', $bx_guide_raw );
// Content that renders to nothing visible (e.g. an empty paragraph block) shows no section.
if ( '' === trim( wp_strip_all_tags( $bx_guide_rendered ) ) && ! preg_match( '/<(img|iframe|video|svg)\b/i', $bx_guide_rendered ) ) {
	return;
}

list( $bx_guide_html, $bx_guide_toc ) = bx_article_content( $bx_guide_rendered );
?>
      <!-- IN-DEPTH GUIDE (light band, so the blog prose colours stay readable on dark service pages) -->
      <section id="guide" class="bg-paper text-ink py-16 sm:py-20" aria-label="In-depth guide">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 bx-page-blog-post">
          <?php if ( count( $bx_guide_toc ) >= 2 ) : ?>
          <nav class="mb-8 rounded-xl2 border border-line p-5" aria-label="On this page">
            <p class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft mb-3">On this page</p>
            <ol class="space-y-1.5 text-sm">
              <?php foreach ( $bx_guide_toc as $bx_item ) : ?>
              <li><a href="#<?php echo esc_attr( $bx_item['id'] ); ?>" class="hover:text-accent"><?php echo esc_html( $bx_item['text'] ); ?></a></li>
              <?php endforeach; ?>
            </ol>
          </nav>
          <?php endif; ?>
          <div class="prose">
            <?php echo $bx_guide_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- the_content already filtered. ?>
          </div>
        </div>
      </section>
