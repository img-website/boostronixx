<?php
/**
 * ACF field group for the Social Media Marketing page template
 * (page-social-media-marketing.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * Every field key and name is globally prefixed with social_media_marketing_ to
 * avoid collisions with other field groups.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_social_media_marketing' );
/**
 * Register the Social Media Marketing field group.
 */
function bx_acf_social_media_marketing() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_social-media-marketing',
			'title'      => 'Social Media Marketing Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-social-media-marketing.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_social_media_marketing_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_badge',
					'name'          => 'social_media_marketing_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Content · Community · Paid social',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_heading',
					'name'          => 'social_media_marketing_hero_heading',
					'label'         => 'Heading (before accent word)',
					'type'          => 'text',
					'default_value' => 'Feeds that turn followers into ',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_heading_accent',
					'name'          => 'social_media_marketing_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'customers',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_text',
					'name'          => 'social_media_marketing_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As a social media marketing agency in Jaipur, we craft platform-native content for Instagram, Facebook, LinkedIn and YouTube — designed to stop the scroll, build trust and drive real action, not just likes.',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_cta1',
					'name'          => 'social_media_marketing_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_cta2',
					'name'          => 'social_media_marketing_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_stat1_num',
					'name'          => 'social_media_marketing_hero_stat1_number',
					'label'         => 'Stat 1 — number (counts up to)',
					'type'          => 'number',
					'default_value' => 12480,
				),
				array(
					'key'           => 'f_social_media_marketing_hero_stat1_label',
					'name'          => 'social_media_marketing_hero_stat1_label',
					'label'         => 'Stat 1 — label',
					'type'          => 'text',
					'default_value' => 'avg. likes / post',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_stat2_num',
					'name'          => 'social_media_marketing_hero_stat2_number',
					'label'         => 'Stat 2 — number (counts up to)',
					'type'          => 'number',
					'default_value' => 64,
				),
				array(
					'key'           => 'f_social_media_marketing_hero_stat2_label',
					'name'          => 'social_media_marketing_hero_stat2_label',
					'label'         => 'Stat 2 — label',
					'type'          => 'text',
					'default_value' => 'engagement lift',
				),
				array(
					'key'           => 'f_social_media_marketing_hero_stat3_num',
					'name'          => 'social_media_marketing_hero_stat3_number',
					'label'         => 'Stat 3 — number (counts up to)',
					'type'          => 'number',
					'default_value' => 4,
				),
				array(
					'key'           => 'f_social_media_marketing_hero_stat3_label',
					'name'          => 'social_media_marketing_hero_stat3_label',
					'label'         => 'Stat 3 — label',
					'type'          => 'text',
					'default_value' => 'platforms',
				),

				// ---------------- PLATFORMS TAB ----------------
				array(
					'key'   => 'tab_social_media_marketing_platforms',
					'label' => 'Platforms',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_social_media_marketing_platforms_eyebrow',
					'name'          => 'social_media_marketing_platforms_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Platforms we manage as your SMM company in Jaipur',
				),
				array(
					'key'          => 'f_social_media_marketing_platforms_items',
					'name'         => 'social_media_marketing_platforms',
					'label'        => 'Platform cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. simple-icons:instagram).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add platform',
					'sub_fields'   => array(
						array(
							'key'   => 'f_social_media_marketing_platform_icon',
							'name'  => 'social_media_marketing_platform_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_social_media_marketing_platform_title',
							'name'  => 'social_media_marketing_platform_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_social_media_marketing_platform_text',
							'name'  => 'social_media_marketing_platform_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- CONTENT FORMATS TAB ----------------
				array(
					'key'   => 'tab_social_media_marketing_formats',
					'label' => 'Content formats',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_social_media_marketing_formats_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The six format cards use bespoke animated/gradient previews that are part of the design. Here you can edit the section eyebrow, heading and the title + description on each of the six cards.',
				),
				array(
					'key'           => 'f_social_media_marketing_formats_eyebrow',
					'name'          => 'social_media_marketing_formats_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'What we create',
				),
				array(
					'key'           => 'f_social_media_marketing_formats_heading',
					'name'          => 'social_media_marketing_formats_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Scroll-stopping content from your social media marketing agency in Jaipur',
				),
				array(
					'key'           => 'f_social_media_marketing_format1_title',
					'name'          => 'social_media_marketing_format1_title',
					'label'         => 'Card 1 — title',
					'type'          => 'text',
					'default_value' => 'Short-form video',
				),
				array(
					'key'           => 'f_social_media_marketing_format1_text',
					'name'          => 'social_media_marketing_format1_text',
					'label'         => 'Card 1 — text',
					'type'          => 'text',
					'default_value' => 'Hook-led Reels & Shorts built for reach.',
				),
				array(
					'key'           => 'f_social_media_marketing_format2_title',
					'name'          => 'social_media_marketing_format2_title',
					'label'         => 'Card 2 — title',
					'type'          => 'text',
					'default_value' => 'Carousels',
				),
				array(
					'key'           => 'f_social_media_marketing_format2_text',
					'name'          => 'social_media_marketing_format2_text',
					'label'         => 'Card 2 — text',
					'type'          => 'text',
					'default_value' => 'Swipe-worthy stories that teach & sell.',
				),
				array(
					'key'           => 'f_social_media_marketing_format3_title',
					'name'          => 'social_media_marketing_format3_title',
					'label'         => 'Card 3 — title',
					'type'          => 'text',
					'default_value' => 'Stories & polls',
				),
				array(
					'key'           => 'f_social_media_marketing_format3_text',
					'name'          => 'social_media_marketing_format3_text',
					'label'         => 'Card 3 — text',
					'type'          => 'text',
					'default_value' => 'Daily presence that builds community.',
				),
				array(
					'key'           => 'f_social_media_marketing_format4_title',
					'name'          => 'social_media_marketing_format4_title',
					'label'         => 'Card 4 — title',
					'type'          => 'text',
					'default_value' => 'Static & brand',
				),
				array(
					'key'           => 'f_social_media_marketing_format4_text',
					'name'          => 'social_media_marketing_format4_text',
					'label'         => 'Card 4 — text',
					'type'          => 'text',
					'default_value' => 'On-brand grid posts and announcements.',
				),
				array(
					'key'           => 'f_social_media_marketing_format5_title',
					'name'          => 'social_media_marketing_format5_title',
					'label'         => 'Card 5 — title',
					'type'          => 'text',
					'default_value' => 'Quotes & tips',
				),
				array(
					'key'           => 'f_social_media_marketing_format5_text',
					'name'          => 'social_media_marketing_format5_text',
					'label'         => 'Card 5 — text',
					'type'          => 'text',
					'default_value' => 'Save-worthy value that grows reach.',
				),
				array(
					'key'           => 'f_social_media_marketing_format6_title',
					'name'          => 'social_media_marketing_format6_title',
					'label'         => 'Card 6 — title',
					'type'          => 'text',
					'default_value' => 'Paid social',
				),
				array(
					'key'           => 'f_social_media_marketing_format6_text',
					'name'          => 'social_media_marketing_format6_text',
					'label'         => 'Card 6 — text',
					'type'          => 'text',
					'default_value' => 'Boosted & targeted campaigns that convert.',
				),

				// ---------------- GROWTH TAB ----------------
				array(
					'key'   => 'tab_social_media_marketing_growth',
					'label' => 'Growth',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_social_media_marketing_growth_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated growth chart on the right is part of the design. Here you can edit the eyebrow, heading, paragraph and the feed-grid image alt/caption.',
				),
				array(
					'key'           => 'f_social_media_marketing_growth_eyebrow',
					'name'          => 'social_media_marketing_growth_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'It compounds',
				),
				array(
					'key'           => 'f_social_media_marketing_growth_heading',
					'name'          => 'social_media_marketing_growth_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Consistency that grows an audience',
				),
				array(
					'key'           => 'f_social_media_marketing_growth_text',
					'name'          => 'social_media_marketing_growth_text',
					'label'         => 'Paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Our social media management in Jaipur runs on a content calendar, a recognisable style and a feedback loop on what's working — that's how followings turn into communities, and communities into customers.",
				),
				array(
					'key'           => 'f_social_media_marketing_growth_img_file',
					'name'          => 'social_media_marketing_growth_image',
					'label'         => 'Feed grid image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_social_media_marketing_growth_img_alt',
					'name'          => 'social_media_marketing_growth_image_alt',
					'label'         => 'Feed grid image — alt text',
					'type'          => 'text',
					'default_value' => 'A curated Instagram grid of BoostronixX client content',
				),
				array(
					'key'           => 'f_social_media_marketing_growth_img_cap_a',
					'name'          => 'social_media_marketing_growth_image_caption_a',
					'label'         => 'Feed grid image — caption (bold line)',
					'type'          => 'text',
					'default_value' => 'Feed grid · 1280×800',
				),
				array(
					'key'           => 'f_social_media_marketing_growth_img_cap_b',
					'name'          => 'social_media_marketing_growth_image_caption_b',
					'label'         => 'Feed grid image — caption (sub line)',
					'type'          => 'text',
					'default_value' => '9-tile Instagram grid mockup of real client content showing a cohesive, on-brand aesthetic.',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_social_media_marketing_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_social_media_marketing_faq_eyebrow',
					'name'          => 'social_media_marketing_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_social_media_marketing_faq_heading',
					'name'          => 'social_media_marketing_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Social, answered',
				),
				array(
					'key'          => 'f_social_media_marketing_faq_items',
					'name'         => 'social_media_marketing_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_social_media_marketing_faq_q',
							'name'  => 'social_media_marketing_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_social_media_marketing_faq_a',
							'name'  => 'social_media_marketing_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED TAB ----------------
				array(
					'key'   => 'tab_social_media_marketing_related',
					'label' => 'Related services',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_social_media_marketing_related_eyebrow',
					'name'          => 'social_media_marketing_related_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Pairs well with',
				),
				array(
					'key'          => 'f_social_media_marketing_related_items',
					'name'         => 'social_media_marketing_related',
					'label'        => 'Related service cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:target).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add related service',
					'sub_fields'   => array(
						array(
							'key'   => 'f_social_media_marketing_related_icon',
							'name'  => 'social_media_marketing_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_social_media_marketing_related_title',
							'name'  => 'social_media_marketing_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_social_media_marketing_related_text',
							'name'  => 'social_media_marketing_related_text',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_social_media_marketing_related_url',
							'name'  => 'social_media_marketing_related_url',
							'label' => 'Link URL',
							'type'  => 'text',
						),
					),
				),

				// ---------------- CTA TAB ----------------
				array(
					'key'   => 'tab_social_media_marketing_cta',
					'label' => 'Call to action',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_social_media_marketing_cta_heading',
					'name'          => 'social_media_marketing_cta_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Make your brand impossible to scroll past',
				),
				array(
					'key'           => 'f_social_media_marketing_cta_text',
					'name'          => 'social_media_marketing_cta_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Let's plan a month of content and show you what consistent, on-brand social can do.",
				),
				array(
					'key'           => 'f_social_media_marketing_cta_button',
					'name'          => 'social_media_marketing_cta_button',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_social_media_marketing_cta_button2',
					'name'          => 'social_media_marketing_cta_button_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
			),
		)
	);
}

/**
 * Render the Social Media Marketing platform cards from ACF
 * (social_media_marketing_platforms repeater), falling back to the original
 * four defaults when empty / ACF off.
 */
function bx_social_media_marketing_render_platforms() {
	$defaults = array(
		array( 'icon' => 'simple-icons:instagram', 'title' => 'Instagram', 'text' => 'Reels, carousels &amp; stories that get shared — Instagram marketing agency work in Jaipur.' ),
		array( 'icon' => 'simple-icons:facebook', 'title' => 'Facebook', 'text' => 'Community, groups and local reach — a Facebook marketing company in Jaipur at heart.' ),
		array( 'icon' => 'simple-icons:linkedin', 'title' => 'LinkedIn', 'text' => 'Authority content for B2B &amp; founders.' ),
		array( 'icon' => 'simple-icons:youtube', 'title' => 'YouTube', 'text' => 'Shorts and long-form that builds a library.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'social_media_marketing_platforms' ) ) {
		while ( have_rows( 'social_media_marketing_platforms' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'social_media_marketing_platform_icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'social_media_marketing_platform_title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'social_media_marketing_platform_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $p ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal pcard rounded-2xl bg-paper border border-line p-6"%s><iconify-icon icon="%s" class="text-3xl text-accent"></iconify-icon><h3 class="font-display text-lg tt mt-4">%s</h3><p class="text-ink-soft text-sm mt-1">%s</p></div>',
			$delay,
			$p['icon'], // Pre-escaped above / known-safe default markup.
			$p['title'],
			$p['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the Social Media Marketing FAQ accordion items from ACF
 * (social_media_marketing_faq_items repeater), falling back to the original
 * default questions when empty / ACF off.
 */
function bx_social_media_marketing_render_faqs() {
	$defaults = array(
		array(
			'q' => 'How many posts do I get each month?',
			'a' => 'It depends on your plan and goals. As a social media marketing agency in Jaipur, we build a content calendar around the right mix of Reels, carousels and stories for your platforms — quality and consistency over sheer volume.',
		),
		array(
			'q' => 'Do you handle replies and community?',
			'a' => 'Yes — community management is part of the service, including responding to comments and DMs in your brand voice, gathering UGC and flagging anything that needs your attention.',
		),
		array(
			'q' => 'Will you shoot content or use ours?',
			'a' => 'Both. We can design from your assets, direct shoots, or guide you to capture great raw content — then handle the editing, design and scheduling. Searching for a social media agency near me in Jaipur? We work on-site and remotely across the city.',
		),
		array(
			'q' => 'Do likes actually lead to sales?',
			'a' => 'We optimise for saves, shares, DMs and clicks — the engagement that leads to customers — not vanity likes. Organic social builds trust and demand, then paid social puts your best posts in front of more of the right people to convert.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'social_media_marketing_faq_items' ) ) {
		while ( have_rows( 'social_media_marketing_faq_items' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'social_media_marketing_faq_question' ),
				'a' => (string) get_sub_field( 'social_media_marketing_faq_answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}

/**
 * Render the Social Media Marketing "Pairs well with" related-service cards from
 * ACF (social_media_marketing_related repeater), falling back to the original
 * three defaults when empty / ACF off.
 */
function bx_social_media_marketing_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:target', 'title' => 'Performance Marketing', 'text' => 'Boost the winners', 'url' => '/performance-marketing/' ),
		array( 'icon' => 'lucide:palette', 'title' => 'Brand Consulting', 'text' => 'A look worth following', 'url' => '/brand-consulting/' ),
		array( 'icon' => 'lucide:line-chart', 'title' => 'Digital Marketing', 'text' => 'The full funnel', 'url' => '/digital-marketing/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'social_media_marketing_related' ) ) {
		while ( have_rows( 'social_media_marketing_related' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'social_media_marketing_related_icon' ),
				'title' => (string) get_sub_field( 'social_media_marketing_related_title' ),
				'text'  => (string) get_sub_field( 'social_media_marketing_related_text' ),
				'url'   => (string) get_sub_field( 'social_media_marketing_related_url' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<a href="%s" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>',
			esc_url( $r['url'] ),
			$delay,
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['text'] )
		);
	}
}
