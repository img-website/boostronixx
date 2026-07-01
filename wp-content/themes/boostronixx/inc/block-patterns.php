<?php
/**
 * Block patterns for blog content — the blog-post design's styled sections
 * (callouts, key-takeaways) as reusable presets editors can insert from the
 * block inserter (Patterns → BoostronixX). The classes are already in the
 * compiled CSS, scoped to .bx-page-blog-post, so they render styled on posts.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'bx_register_block_patterns' );
/**
 * Register the BoostronixX pattern category and the blog content patterns.
 */
function bx_register_block_patterns() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	register_block_pattern_category( 'boostronixx', array( 'label' => __( 'BoostronixX', 'boostronixx' ) ) );

	// Accent callout (tip).
	register_block_pattern(
		'boostronixx/callout-tip',
		array(
			'title'       => __( 'Callout — Tip (accent)', 'boostronixx' ),
			'description' => __( 'Highlighted accent box with a lightbulb icon, for a key tip or rule of thumb.', 'boostronixx' ),
			'categories'  => array( 'boostronixx' ),
			'keywords'    => array( 'callout', 'tip', 'highlight', 'box' ),
			'content'     => '<!-- wp:html -->
<div class="callout accent not-prose"><span class="text-accent text-xl shrink-0" aria-hidden="true"><iconify-icon icon="lucide:lightbulb"></iconify-icon></span><p class="text-sm leading-relaxed text-ink">Write your tip or rule of thumb here.</p></div>
<!-- /wp:html -->',
		)
	);

	// Note callout (neutral).
	register_block_pattern(
		'boostronixx/callout-note',
		array(
			'title'       => __( 'Callout — Note', 'boostronixx' ),
			'description' => __( 'Neutral note box with a check icon, for a summary or recommendation.', 'boostronixx' ),
			'categories'  => array( 'boostronixx' ),
			'keywords'    => array( 'callout', 'note', 'box' ),
			'content'     => '<!-- wp:html -->
<div class="callout not-prose"><span class="text-accent text-xl shrink-0" aria-hidden="true"><iconify-icon icon="lucide:check-check"></iconify-icon></span><p class="text-sm leading-relaxed text-ink">Write your note or recommendation here. You can use <strong>bold</strong> for emphasis.</p></div>
<!-- /wp:html -->',
		)
	);

	// Key takeaways box.
	register_block_pattern(
		'boostronixx/key-takeaways',
		array(
			'title'       => __( 'Key takeaways', 'boostronixx' ),
			'description' => __( 'Dark summary box listing the article\'s key takeaways.', 'boostronixx' ),
			'categories'  => array( 'boostronixx' ),
			'keywords'    => array( 'takeaways', 'summary', 'key points', 'recap' ),
			'content'     => '<!-- wp:html -->
<div class="takeaways not-prose mt-10"><p class="font-display tt text-lg mb-4 flex items-center gap-2"><iconify-icon icon="lucide:sparkles" class="text-accent" aria-hidden="true"></iconify-icon> Key takeaways</p><ul class="space-y-2.5 text-sm text-paper/80"><li class="flex gap-2.5"><iconify-icon icon="lucide:check" class="text-accent mt-0.5 shrink-0" aria-hidden="true"></iconify-icon> First key takeaway.</li><li class="flex gap-2.5"><iconify-icon icon="lucide:check" class="text-accent mt-0.5 shrink-0" aria-hidden="true"></iconify-icon> Second key takeaway.</li><li class="flex gap-2.5"><iconify-icon icon="lucide:check" class="text-accent mt-0.5 shrink-0" aria-hidden="true"></iconify-icon> Third key takeaway.</li></ul></div>
<!-- /wp:html -->',
		)
	);

	// Figure with caption (native image block → media picker; styled by .prose).
	register_block_pattern(
		'boostronixx/figure-caption',
		array(
			'title'       => __( 'Figure with caption', 'boostronixx' ),
			'description' => __( 'An inline image with a centered caption below it.', 'boostronixx' ),
			'categories'  => array( 'boostronixx' ),
			'keywords'    => array( 'image', 'figure', 'photo', 'caption', 'media' ),
			'content'     => '<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img alt=""/><figcaption class="wp-element-caption">Describe the image for readers and search engines.</figcaption></figure>
<!-- /wp:image -->',
		)
	);

	// Numbered steps (ordered list with the prose accent numbering).
	register_block_pattern(
		'boostronixx/numbered-steps',
		array(
			'title'       => __( 'Numbered steps', 'boostronixx' ),
			'description' => __( 'An ordered list — renders with accent step numbers.', 'boostronixx' ),
			'categories'  => array( 'boostronixx' ),
			'keywords'    => array( 'steps', 'numbered', 'ordered', 'list', 'how to' ),
			'content'     => '<!-- wp:list {"ordered":true} -->
<ol><!-- wp:list-item --><li>First step.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Second step.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Third step.</li><!-- /wp:list-item --></ol>
<!-- /wp:list -->',
		)
	);

	// Pull quote (uses the .prose blockquote styling).
	register_block_pattern(
		'boostronixx/pull-quote',
		array(
			'title'       => __( 'Pull quote', 'boostronixx' ),
			'description' => __( 'A large emphasised quote, styled by the article prose.', 'boostronixx' ),
			'categories'  => array( 'boostronixx' ),
			'keywords'    => array( 'quote', 'pullquote', 'blockquote' ),
			'content'     => '<!-- wp:html -->
<blockquote><p>"Write a punchy, quotable sentence that sums up the point."</p></blockquote>
<!-- /wp:html -->',
		)
	);
}
