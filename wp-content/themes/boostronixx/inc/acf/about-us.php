<?php
/**
 * ACF field group for the About Us page template (page-about-us.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_about_us' );
/**
 * Register the About Us field group.
 */
function bx_acf_about_us() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_about-us',
			'title'      => 'About Us Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-about-us.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_about_us_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_about_us_hero_badge',
					'name'          => 'about_us_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Creative branding & growth studio · since 2026',
				),
				array(
					'key'           => 'f_about_us_hero_heading_a',
					'name'          => 'about_us_hero_heading_a',
					'label'         => 'Heading — line 1',
					'type'          => 'text',
					'default_value' => "We're the team behind",
				),
				array(
					'key'           => 'f_about_us_hero_heading_b',
					'name'          => 'about_us_hero_heading_b',
					'label'         => 'Heading — line 2 (before accent)',
					'type'          => 'text',
					'default_value' => 'brands that ',
				),
				array(
					'key'           => 'f_about_us_hero_heading_accent',
					'name'          => 'about_us_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'get noticed',
				),
				array(
					'key'           => 'f_about_us_hero_text',
					'name'          => 'about_us_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'BoostronixX is a digital marketing agency in Jaipur that thinks like a growth team. Strategy, design and performance under one roof — turning ambitious businesses into brands people remember.',
				),
				array(
					'key'           => 'f_about_us_hero_cta1',
					'name'          => 'about_us_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_about_us_hero_cta2',
					'name'          => 'about_us_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- STAT BAND TAB ----------------
				array(
					'key'   => 'tab_about_us_stats',
					'label' => 'Stat band',
					'type'  => 'tab',
				),
				array(
					'key'          => 'f_about_us_stats',
					'name'         => 'about_us_stats',
					'label'        => 'Stat cards',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add stat',
					'sub_fields'   => array(
						array(
							'key'          => 'f_about_us_stat_prefix',
							'name'         => 'prefix',
							'label'        => 'Prefix (before number)',
							'instructions' => 'e.g. "<" — leave empty for none.',
							'type'         => 'text',
						),
						array(
							'key'   => 'f_about_us_stat_number',
							'name'  => 'number',
							'label' => 'Number (counts up to)',
							'type'  => 'number',
						),
						array(
							'key'          => 'f_about_us_stat_suffix',
							'name'         => 'suffix',
							'label'        => 'Suffix (after number)',
							'instructions' => 'e.g. "+", ".9", "h".',
							'type'         => 'text',
						),
						array(
							'key'   => 'f_about_us_stat_label',
							'name'  => 'label',
							'label' => 'Label',
							'type'  => 'text',
						),
					),
				),

				// ---------------- OUR STORY TAB ----------------
				array(
					'key'   => 'tab_about_us_story',
					'label' => 'Our story',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_about_us_story_img_alt',
					'name'          => 'about_us_story_image_alt',
					'label'         => 'Studio image — alt text',
					'type'          => 'text',
					'default_value' => 'Inside the BoostronixX studio in Jaipur',
				),
				array(
					'key'           => 'f_about_us_story_img_cap',
					'name'          => 'about_us_story_image_caption',
					'label'         => 'Studio image — caption',
					'type'          => 'text',
					'default_value' => 'Inside the studio',
				),
				array(
					'key'           => 'f_about_us_story_eyebrow',
					'name'          => 'about_us_story_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Our story',
				),
				array(
					'key'           => 'f_about_us_story_heading',
					'name'          => 'about_us_story_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'How our Jaipur studio started — with a simple frustration',
				),
				array(
					'key'           => 'f_about_us_story_p1',
					'name'          => 'about_us_story_p1',
					'label'         => 'Paragraph 1',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Too many good businesses were invisible — great products, terrible reach. Agencies sold either pretty design with no results, or results with no soul. We thought there had to be a better way.',
				),
				array(
					'key'           => 'f_about_us_story_p3',
					'name'          => 'about_us_story_p3',
					'label'         => 'Paragraph 3',
					'instructions'  => 'The second paragraph contains inline emphasis markup and is left in the template.',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => '50+ brands later, that belief still runs everything we do — across real estate, schools, D2C and healthcare.',
				),
				array(
					'key'           => 'f_about_us_story_tags',
					'name'          => 'about_us_story_tags',
					'label'         => 'Tags',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Strategy-first\nCreative-led\nIn-house team\nTracked ROI",
				),

				// ---------------- MISSION & VISION TAB ----------------
				array(
					'key'   => 'tab_about_us_mv',
					'label' => 'Mission & vision',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_about_us_mission_heading',
					'name'          => 'about_us_mission_heading',
					'label'         => 'Mission — heading',
					'type'          => 'text',
					'default_value' => 'Our mission',
				),
				array(
					'key'           => 'f_about_us_mission_text',
					'name'          => 'about_us_mission_text',
					'label'         => 'Mission — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'To help ambitious businesses become brands people remember — by pairing sharp strategy with creative that actually performs, and proving every rupee of it.',
				),
				array(
					'key'           => 'f_about_us_vision_heading',
					'name'          => 'about_us_vision_heading',
					'label'         => 'Vision — heading',
					'type'          => 'text',
					'default_value' => 'Our vision',
				),
				array(
					'key'           => 'f_about_us_vision_text',
					'name'          => 'about_us_vision_text',
					'label'         => 'Vision — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'A world where great businesses are never held back by being unseen — where brilliant brands from anywhere, including a studio in Jaipur, can compete and win anywhere.',
				),

				// ---------------- VALUES TAB ----------------
				array(
					'key'   => 'tab_about_us_values',
					'label' => 'Values',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_about_us_values_eyebrow',
					'name'          => 'about_us_values_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'What we stand for',
				),
				array(
					'key'           => 'f_about_us_values_heading',
					'name'          => 'about_us_values_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Six things we never compromise on',
				),
				array(
					'key'          => 'f_about_us_values_items',
					'name'         => 'about_us_values',
					'label'        => 'Value cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:compass).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add value',
					'sub_fields'   => array(
						array(
							'key'   => 'f_about_us_value_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_about_us_value_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_about_us_value_text',
							'name'  => 'text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- HOW WE WORK TAB ----------------
				array(
					'key'   => 'tab_about_us_how',
					'label' => 'How we work',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_about_us_how_eyebrow',
					'name'          => 'about_us_how_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'How we work',
				),
				array(
					'key'           => 'f_about_us_how_heading',
					'name'          => 'about_us_how_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A simple, four-step way of working',
				),
				array(
					'key'          => 'f_about_us_how_items',
					'name'         => 'about_us_steps',
					'label'        => 'Steps',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array(
							'key'   => 'f_about_us_step_num',
							'name'  => 'number',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_about_us_step_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_about_us_step_text',
							'name'  => 'text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- TEAM TAB ----------------
				array(
					'key'   => 'tab_about_us_team',
					'label' => 'Team',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_about_us_team_eyebrow',
					'name'          => 'about_us_team_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The people',
				),
				array(
					'key'           => 'f_about_us_team_heading',
					'name'          => 'about_us_team_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A small team that punches above its weight',
				),
				array(
					'key'          => 'f_about_us_team_items',
					'name'         => 'about_us_team',
					'label'        => 'Team members',
					'instructions' => 'Leave empty to keep the current defaults. Avatar uses girl-avatar.avif if left empty.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add member',
					'sub_fields'   => array(
						array(
							'key'           => 'f_about_us_team_img',
							'name'          => 'image',
							'label'         => 'Photo',
							'type'          => 'image',
							'return_format' => 'array',
							'preview_size'  => 'thumbnail',
						),
						array(
							'key'   => 'f_about_us_team_alt',
							'name'  => 'image_alt',
							'label' => 'Photo alt text',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_about_us_team_badge',
							'name'  => 'badge',
							'label' => 'Image badge label',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_about_us_team_name',
							'name'  => 'name',
							'label' => 'Role title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_about_us_team_meta',
							'name'  => 'meta',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
					),
				),

				// ---------------- CTA TAB ----------------
				array(
					'key'   => 'tab_about_us_cta',
					'label' => 'Call to action',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_about_us_cta_heading',
					'name'          => 'about_us_cta_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => "Like how we think? Let's build together.",
				),
				array(
					'key'           => 'f_about_us_cta_text',
					'name'          => 'about_us_cta_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Tell us where you want to grow. We'll bring the strategy, the creative and the receipts.",
				),
				array(
					'key'           => 'f_about_us_cta_button',
					'name'          => 'about_us_cta_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_about_us_cta_phone',
					'name'          => 'about_us_cta_phone',
					'label'         => 'Phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_about_us_cta_phone_href',
					'name'          => 'about_us_cta_phone_href',
					'label'         => 'Phone (tel: link)',
					'instructions'  => 'e.g. tel:+918058212202',
					'type'          => 'text',
					'default_value' => 'tel:+918058212202',
				),
			),
		)
	);
}

/**
 * Render the About Us stat band cards from ACF (about_us_stats repeater),
 * falling back to the original four defaults when empty / ACF off.
 */
function bx_about_us_render_stats() {
	$defaults = array(
		array( 'prefix' => '', 'number' => '50', 'suffix' => '+', 'label' => 'Brands grown' ),
		array( 'prefix' => '', 'number' => '100', 'suffix' => '%', 'label' => 'In-house team' ),
		array( 'prefix' => '', 'number' => '4', 'suffix' => '.9', 'label' => 'Average client rating' ),
		array( 'prefix' => '&lt;', 'number' => '24', 'suffix' => 'h', 'label' => 'Average reply time' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'about_us_stats' ) ) {
		while ( have_rows( 'about_us_stats' ) ) {
			the_row();
			$items[] = array(
				'prefix' => esc_html( (string) get_sub_field( 'prefix' ) ),
				'number' => esc_attr( (string) get_sub_field( 'number' ) ),
				'suffix' => esc_html( (string) get_sub_field( 'suffix' ) ),
				'label'  => esc_html( (string) get_sub_field( 'label' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $s ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal bg-surface p-6 sm:p-8"%s><p class="font-display text-4xl sm:text-5xl tt">%s<span class="count" data-to="%s">0</span>%s</p><p class="text-ink-soft text-sm mt-1">%s</p></div>',
			$delay,
			$s['prefix'], // Pre-escaped above / known-safe default markup.
			$s['number'],
			$s['suffix'],
			$s['label']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the About Us value cards from ACF (about_us_values repeater),
 * falling back to the original six defaults when empty / ACF off.
 */
function bx_about_us_render_values() {
	$defaults = array(
		array( 'icon' => 'lucide:compass', 'title' => 'Strategy before pixels', 'text' => 'We never design in the dark. Research and positioning come first — everything beautiful is also intentional.' ),
		array( 'icon' => 'lucide:line-chart', 'title' => 'Results you can measure', 'text' => "Dashboards, not vanity metrics. If we can't tie work to growth, we'd rather not do it." ),
		array( 'icon' => 'lucide:eye-off', 'title' => 'Radical transparency', 'text' => "Clear scopes, honest timelines, no jargon walls. You always know what we're doing and why." ),
		array( 'icon' => 'lucide:sparkles', 'title' => 'Craft as standard', 'text' => "Good enough isn't. Every frame, headline and pixel earns its place before it ships." ),
		array( 'icon' => 'lucide:handshake', 'title' => 'Partners, not vendors', 'text' => "Your goals become ours. We win when you grow — that's the only scoreboard that counts." ),
		array( 'icon' => 'lucide:rocket', 'title' => 'Curious & always learning', 'text' => 'AI, new platforms, fresh formats — we test early so your brand stays a step ahead.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'about_us_values' ) ) {
		while ( have_rows( 'about_us_values' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'icon' ),
				'title' => (string) get_sub_field( 'title' ),
				'text'  => (string) get_sub_field( 'text' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $v ) {
		$delay = ( 0 === $i % 3 ) ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		printf(
			'<div class="reveal vcard rounded-xl2 border border-line p-7"%s><span class="text-accent text-3xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">%s</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">%s</p></div>',
			$delay,
			esc_attr( $v['icon'] ),
			esc_html( $v['title'] ),
			esc_html( $v['text'] )
		);
	}
}

/**
 * Render the About Us "How we work" step cards from ACF (about_us_steps
 * repeater), falling back to the original four defaults when empty / ACF off.
 */
function bx_about_us_render_steps() {
	$defaults = array(
		array( 'number' => '01', 'title' => 'Discover', 'text' => 'We dig into your business, audience and competition to find the real opportunity.' ),
		array( 'number' => '02', 'title' => 'Strategise', 'text' => 'A clear roadmap — positioning, channels and KPIs — agreed before a single thing is designed.' ),
		array( 'number' => '03', 'title' => 'Create & launch', 'text' => 'Design, build and ship — brand, content and campaigns that look sharp and work hard.' ),
		array( 'number' => '04', 'title' => 'Optimise', 'text' => 'We read the data, double down on what works and keep compounding the results.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'about_us_steps' ) ) {
		while ( have_rows( 'about_us_steps' ) ) {
			the_row();
			$items[] = array(
				'number' => (string) get_sub_field( 'number' ),
				'title'  => (string) get_sub_field( 'title' ),
				'text'   => (string) get_sub_field( 'text' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $s ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal rounded-xl2 bg-paper border border-line p-7"%s><span class="font-display text-5xl tt text-accent/25">%s</span><h3 class="font-display text-xl tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">%s</p></div>',
			$delay,
			esc_html( $s['number'] ),
			esc_html( $s['title'] ),
			esc_html( $s['text'] )
		);
	}
}

/**
 * Render the About Us team cards from ACF (about_us_team repeater), falling
 * back to the original four defaults when empty / ACF off.
 */
function bx_about_us_render_team() {
	$boy  = 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/boy-avatar.avif';
	$girl = 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/girl-avatar.avif';

	$defaults = array(
		array( 'img' => $girl, 'image_alt' => 'Strategy lead', 'badge' => 'Strategy', 'name' => 'Brand & Strategy', 'meta' => 'Positioning · Research' ),
		array( 'img' => $boy, 'image_alt' => 'Creative lead', 'badge' => 'Creative', 'name' => 'Design & Creative', 'meta' => 'Identity · Content' ),
		array( 'img' => $girl, 'image_alt' => 'Growth lead', 'badge' => 'Growth', 'name' => 'Performance & SEO', 'meta' => 'Ads · Rankings' ),
		array( 'img' => $boy, 'image_alt' => 'Web lead', 'badge' => 'Build', 'name' => 'Web & Development', 'meta' => 'UI/UX · Sites' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'about_us_team' ) ) {
		while ( have_rows( 'about_us_team' ) ) {
			the_row();
			$img     = get_sub_field( 'image' );
			$img_url = ( is_array( $img ) && ! empty( $img['url'] ) ) ? $img['url'] : $girl;
			$items[] = array(
				'img'       => $img_url,
				'image_alt' => (string) get_sub_field( 'image_alt' ),
				'badge'     => (string) get_sub_field( 'badge' ),
				'name'      => (string) get_sub_field( 'name' ),
				'meta'      => (string) get_sub_field( 'meta' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $m ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal text-center"%s><div class="imgph rounded-xl2 aspect-square bg-surface-2 mb-4"><img src="%s" alt="%s" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>%s</b></span></div><p class="font-display text-lg tt">%s</p><p class="text-ink-soft text-sm">%s</p></div>',
			$delay,
			esc_url( $m['img'] ),
			esc_attr( $m['image_alt'] ),
			esc_html( $m['badge'] ),
			esc_html( $m['name'] ),
			esc_html( $m['meta'] )
		);
	}
}
