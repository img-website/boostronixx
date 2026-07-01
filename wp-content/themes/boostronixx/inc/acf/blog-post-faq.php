<?php
/**
 * ACF field group for single blog posts — an optional FAQ repeater.
 *
 * Q&A pairs render as the blog-post design's accordion at the end of the post
 * (see single.php) and emit FAQPage JSON-LD for SEO. Located on the `post`
 * post type so it shows on every blog post editor screen.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_blog_post_faq' );
/**
 * Register the blog-post FAQ field group.
 */
function bx_acf_blog_post_faq() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_post_faq',
			'title'      => 'FAQ (accordion + SEO schema)',
			'location'   => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'post',
					),
				),
			),
			'menu_order' => 20,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(
				array(
					'key'           => 'f_post_banner',
					'label'         => 'Top banner image',
					'name'          => 'banner',
					'type'          => 'image',
					'return_format' => 'id',
					'preview_size'  => 'medium',
					'instructions'  => 'Optional wide landscape banner shown at the top of the article (below the title). The 3:4 Featured image is used for the blog-list card.',
				),
				array(
					'key'          => 'f_post_faqs',
					'label'        => 'FAQs',
					'name'         => 'f_post_faqs',
					'type'         => 'repeater',
					'instructions' => 'Optional. Add question/answer pairs — they appear as an accordion below the article and generate FAQ rich-result schema. Leave empty to hide the FAQ section.',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'min'          => 0,
					'sub_fields'   => array(
						array(
							'key'     => 'f_post_faq_q',
							'label'   => 'Question',
							'name'    => 'question',
							'type'    => 'text',
							'required' => 1,
						),
						array(
							'key'          => 'f_post_faq_a',
							'label'        => 'Answer',
							'name'         => 'answer',
							'type'         => 'wysiwyg',
							'tabs'         => 'visual',
							'toolbar'      => 'basic',
							'media_upload' => 0,
							'required'     => 1,
						),
					),
				),
			),
		)
	);
}
