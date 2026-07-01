<?php
/**
 * ACF field group for the Performance Marketing page template
 * (page-performance-marketing.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * Every field key AND name is globally prefixed with `performance_marketing_`
 * to avoid collisions with other field groups in this theme.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_performance_marketing' );
/**
 * Register the Performance Marketing field group.
 */
function bx_acf_performance_marketing() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_performance-marketing',
			'title'      => 'Performance Marketing Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-performance-marketing.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_performance_marketing_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_performance_marketing_hero_heading_a',
					'name'          => 'performance_marketing_hero_heading_a',
					'label'         => 'Heading — text before accent',
					'type'          => 'text',
					'default_value' => 'Paid ads that pay for ',
				),
				array(
					'key'           => 'f_performance_marketing_hero_heading_accent',
					'name'          => 'performance_marketing_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'themselves',
				),
				array(
					'key'           => 'f_performance_marketing_hero_text',
					'name'          => 'performance_marketing_hero_text',
					'label'         => 'Intro paragraph',
					'instructions'  => 'The original copy contains an "&" — kept as static markup in the template.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As a performance marketing agency in Jaipur, we run Meta & Google Ads on data — A/B tested, audience-segmented and optimised for the only metric that matters: return on ad spend.',
				),
				array(
					'key'           => 'f_performance_marketing_hero_cta1',
					'name'          => 'performance_marketing_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_performance_marketing_hero_cta2',
					'name'          => 'performance_marketing_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- PLATFORMS TAB ----------------
				array(
					'key'   => 'tab_performance_marketing_platforms',
					'label' => 'Platforms',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_performance_marketing_platforms_eyebrow',
					'name'          => 'performance_marketing_platforms_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Where we run',
				),
				array(
					'key'          => 'f_performance_marketing_platforms_items',
					'name'         => 'performance_marketing_platforms',
					'label'        => 'Platform cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. simple-icons:meta).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add platform',
					'sub_fields'   => array(
						array(
							'key'   => 'f_performance_marketing_platform_icon',
							'name'  => 'performance_marketing_platform_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_platform_label',
							'name'  => 'performance_marketing_platform_label',
							'label' => 'Label',
							'type'  => 'text',
						),
					),
				),

				// ---------------- A/B TESTING TAB ----------------
				array(
					'key'   => 'tab_performance_marketing_ab',
					'label' => 'A/B testing',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_performance_marketing_ab_eyebrow',
					'name'          => 'performance_marketing_ab_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'We never guess',
				),
				array(
					'key'           => 'f_performance_marketing_ab_heading',
					'name'          => 'performance_marketing_ab_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Every creative earns its budget',
				),
				array(
					'key'           => 'f_performance_marketing_ab_text',
					'name'          => 'performance_marketing_ab_text',
					'label'         => 'Paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'As a PPC company in Jaipur, we A/B test headlines, ad creative and audience segments against each other, then shift spend to the winners — continuously. No favourites, just data.',
				),
				array(
					'key'           => 'f_performance_marketing_ab_tags',
					'name'          => 'performance_marketing_ab_tags',
					'label'         => 'Tags',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Creative testing\nAudience splits\nLanding-page CRO",
				),

				// ---------------- METRICS TAB ----------------
				array(
					'key'   => 'tab_performance_marketing_metrics',
					'label' => 'Metrics',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_performance_marketing_metrics_eyebrow',
					'name'          => 'performance_marketing_metrics_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Metrics that matter',
				),
				array(
					'key'           => 'f_performance_marketing_metrics_heading',
					'name'          => 'performance_marketing_metrics_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A performance marketing agency in Jaipur that optimises for revenue, not reach',
				),
				array(
					'key'          => 'f_performance_marketing_metrics_items',
					'name'         => 'performance_marketing_metrics',
					'label'        => 'Metric cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:trending-up).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add metric',
					'sub_fields'   => array(
						array(
							'key'   => 'f_performance_marketing_metric_icon',
							'name'  => 'performance_marketing_metric_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_metric_title',
							'name'  => 'performance_marketing_metric_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_metric_text',
							'name'  => 'performance_marketing_metric_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
					),
				),
				array(
					'key'           => 'f_performance_marketing_metrics_img_file',
					'name'          => 'performance_marketing_metrics_image',
					'label'         => 'Ads dashboard image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_performance_marketing_metrics_img_alt',
					'name'          => 'performance_marketing_metrics_image_alt',
					'label'         => 'Dashboard image — alt text',
					'type'          => 'text',
					'default_value' => 'Meta and Google Ads manager dashboard showing ROAS and campaign performance',
				),
				array(
					'key'           => 'f_performance_marketing_metrics_img_cap_b',
					'name'          => 'performance_marketing_metrics_image_caption_title',
					'label'         => 'Dashboard image — caption title',
					'type'          => 'text',
					'default_value' => 'Ads dashboard · 1600×600',
				),
				array(
					'key'           => 'f_performance_marketing_metrics_img_cap_s',
					'name'          => 'performance_marketing_metrics_image_caption_sub',
					'label'         => 'Dashboard image — caption sub-line',
					'type'          => 'text',
					'default_value' => 'Screenshot of Meta Ads Manager / Google Ads with ROAS, CPL and conversion columns. Anonymise account data.',
				),

				// ---------------- PROCESS TAB ----------------
				array(
					'key'   => 'tab_performance_marketing_process',
					'label' => 'Process',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_performance_marketing_process_eyebrow',
					'name'          => 'performance_marketing_process_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Our process',
				),
				array(
					'key'           => 'f_performance_marketing_process_heading',
					'name'          => 'performance_marketing_process_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Audit. Build. Test. Scale.',
				),
				array(
					'key'          => 'f_performance_marketing_process_items',
					'name'         => 'performance_marketing_process',
					'label'        => 'Process steps',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array(
							'key'   => 'f_performance_marketing_process_num',
							'name'  => 'performance_marketing_process_number',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_process_title',
							'name'  => 'performance_marketing_process_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_process_text',
							'name'  => 'performance_marketing_process_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_performance_marketing_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_performance_marketing_faq_eyebrow',
					'name'          => 'performance_marketing_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_performance_marketing_faq_heading',
					'name'          => 'performance_marketing_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Paid ads, answered',
				),
				array(
					'key'          => 'f_performance_marketing_faq_items',
					'name'         => 'performance_marketing_faq',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_performance_marketing_faq_q',
							'name'  => 'performance_marketing_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_faq_a',
							'name'  => 'performance_marketing_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED + CTA TAB ----------------
				array(
					'key'   => 'tab_performance_marketing_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_performance_marketing_related_eyebrow',
					'name'          => 'performance_marketing_related_eyebrow',
					'label'         => 'Related — eyebrow',
					'type'          => 'text',
					'default_value' => 'Pairs well with',
				),
				array(
					'key'          => 'f_performance_marketing_related_items',
					'name'         => 'performance_marketing_related',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:search).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_performance_marketing_related_icon',
							'name'  => 'performance_marketing_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_related_title',
							'name'  => 'performance_marketing_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_related_meta',
							'name'  => 'performance_marketing_related_meta',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_performance_marketing_related_url',
							'name'  => 'performance_marketing_related_url',
							'label' => 'Link URL',
							'type'  => 'text',
						),
					),
				),
				array(
					'key'           => 'f_performance_marketing_cta_heading',
					'name'          => 'performance_marketing_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => 'See where your ad spend is leaking',
				),
				array(
					'key'           => 'f_performance_marketing_cta_text',
					'name'          => 'performance_marketing_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Get a free audit from a performance marketing agency in Jaipur that lives in the numbers — we'll show you the quick wins and what scaling could look like.",
				),
				array(
					'key'           => 'f_performance_marketing_cta_button',
					'name'          => 'performance_marketing_cta_button',
					'label'         => 'CTA — button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_performance_marketing_cta_phone',
					'name'          => 'performance_marketing_cta_phone',
					'label'         => 'CTA — phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_performance_marketing_cta_phone_href',
					'name'          => 'performance_marketing_cta_phone_href',
					'label'         => 'CTA — phone (tel: link)',
					'instructions'  => 'e.g. tel:+918058212202',
					'type'          => 'text',
					'default_value' => 'tel:+918058212202',
				),
			),
		)
	);
}

/**
 * Render the Performance Marketing platform cards from ACF
 * (performance_marketing_platforms repeater), falling back to the original
 * four defaults when empty / ACF off.
 */
function bx_performance_marketing_render_platforms() {
	$defaults = array(
		array( 'icon' => 'simple-icons:meta', 'label' => 'Meta Ads' ),
		array( 'icon' => 'simple-icons:googleads', 'label' => 'Google Ads' ),
		array( 'icon' => 'simple-icons:youtube', 'label' => 'YouTube Ads' ),
		array( 'icon' => 'simple-icons:linkedin', 'label' => 'LinkedIn Ads' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'performance_marketing_platforms' ) ) {
		while ( have_rows( 'performance_marketing_platforms' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'performance_marketing_platform_icon' ),
				'label' => (string) get_sub_field( 'performance_marketing_platform_label' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $p ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal card rounded-2xl bg-white/5 border border-white/10 p-6 flex flex-col items-center text-center gap-3"%s><iconify-icon icon="%s" class="text-3xl text-accent"></iconify-icon><span class="font-medium text-sm">%s</span></div>',
			$delay,
			esc_attr( $p['icon'] ),
			esc_html( $p['label'] )
		);
	}
}

/**
 * Render the Performance Marketing metric cards from ACF
 * (performance_marketing_metrics repeater), falling back to the original four
 * defaults when empty / ACF off.
 */
function bx_performance_marketing_render_metrics() {
	$defaults = array(
		array( 'icon' => 'lucide:trending-up', 'title' => 'ROAS', 'text' => 'Return on every rupee of ad spend.' ),
		array( 'icon' => 'lucide:user-plus', 'title' => 'Cost per lead', 'text' => 'Driven down without losing quality.' ),
		array( 'icon' => 'lucide:mouse-pointer-click', 'title' => 'CTR & CVR', 'text' => 'Creative and funnel efficiency.' ),
		array( 'icon' => 'lucide:wallet', 'title' => 'CAC & LTV', 'text' => 'Sustainable, profitable growth.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'performance_marketing_metrics' ) ) {
		while ( have_rows( 'performance_marketing_metrics' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'performance_marketing_metric_icon' ),
				'title' => (string) get_sub_field( 'performance_marketing_metric_title' ),
				'text'  => (string) get_sub_field( 'performance_marketing_metric_text' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $m ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6"%s><span class="text-accent text-2xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">%s</h3><p class="text-white/55 text-sm mt-1.5">%s</p></div>',
			$delay,
			esc_attr( $m['icon'] ),
			esc_html( $m['title'] ),
			esc_html( $m['text'] )
		);
	}
}

/**
 * Render the Performance Marketing process step cards from ACF
 * (performance_marketing_process repeater), falling back to the original four
 * defaults when empty / ACF off.
 */
function bx_performance_marketing_render_process() {
	$defaults = array(
		array( 'number' => '01', 'title' => 'Audit', 'text' => 'We review your account, tracking and funnel to find the leaks and the levers.' ),
		array( 'number' => '02', 'title' => 'Build', 'text' => 'Clean tracking, sharp audiences, and creatives built to stop the scroll.' ),
		array( 'number' => '03', 'title' => 'Test', 'text' => 'Structured A/B tests to learn what your audience actually responds to.' ),
		array( 'number' => '04', 'title' => 'Scale', 'text' => 'Pour budget into winners and expand — protecting efficiency as you grow.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'performance_marketing_process' ) ) {
		while ( have_rows( 'performance_marketing_process' ) ) {
			the_row();
			$items[] = array(
				'number' => (string) get_sub_field( 'performance_marketing_process_number' ),
				'title'  => (string) get_sub_field( 'performance_marketing_process_title' ),
				'text'   => (string) get_sub_field( 'performance_marketing_process_text' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $s ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal card rounded-xl2 bg-white/5 border border-white/10 p-7"%s><span class="font-display text-5xl tt text-accent/40">%s</span><h3 class="font-display text-xl tt mt-3">%s</h3><p class="text-white/55 text-sm mt-2 leading-relaxed">%s</p></div>',
			$delay,
			esc_html( $s['number'] ),
			esc_html( $s['title'] ),
			esc_html( $s['text'] )
		);
	}
}

/**
 * Render the Performance Marketing FAQ items from ACF
 * (performance_marketing_faq repeater), falling back to the original four
 * default questions when empty / ACF off.
 */
function bx_performance_marketing_render_faqs() {
	$defaults = array(
		array(
			'q' => 'What ad budget do I need to start?',
			'a' => "It depends on your goals and market. Whether you're starting with a Meta Ads agency Jaipur setup or a search-led Google campaign, we'll recommend a sensible starting budget on your audit call so there's enough room to test, learn and find what converts before scaling.",
		),
		array(
			'q' => 'Is the ad spend included in your fee?',
			'a' => 'No — ad spend is paid directly to the platforms (Meta, Google) from your own account. Our management fee is separate and agreed up front.',
		),
		array(
			'q' => 'How soon will I see results?',
			'a' => 'Our PPC services in Jaipur can drive traffic and leads within days, but the first few weeks are a learning phase. With conversion tracking and retargeting in place, performance typically stabilises and improves over the first 30–60 days as testing compounds.',
		),
		array(
			'q' => 'Do you guarantee a specific ROAS?',
			'a' => 'No honest agency can guarantee an exact ROAS — it depends on your offer, margins and market. What we guarantee is the rigorous, ROAS-driven ads Jaipur businesses actually need: structured A/B testing, clean conversion tracking and transparent reporting on real performance.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'performance_marketing_faq' ) ) {
		while ( have_rows( 'performance_marketing_faq' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'performance_marketing_faq_question' ),
				'a' => (string) get_sub_field( 'performance_marketing_faq_answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		printf(
			'<div class="faq border border-white/12 rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-white/60 text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}

/**
 * Render the Performance Marketing "Pairs well with" related cards from ACF
 * (performance_marketing_related repeater), falling back to the original three
 * defaults when empty / ACF off.
 */
function bx_performance_marketing_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:search', 'title' => 'SEO Services', 'meta' => 'Organic + paid', 'url' => '/seo-services/' ),
		array( 'icon' => 'lucide:thumbs-up', 'title' => 'Social Media', 'meta' => 'Creative fuel', 'url' => '/social-media-marketing/' ),
		array( 'icon' => 'lucide:line-chart', 'title' => 'Digital Marketing', 'meta' => 'Full funnel', 'url' => '/digital-marketing/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'performance_marketing_related' ) ) {
		while ( have_rows( 'performance_marketing_related' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'performance_marketing_related_icon' ),
				'title' => (string) get_sub_field( 'performance_marketing_related_title' ),
				'meta'  => (string) get_sub_field( 'performance_marketing_related_meta' ),
				'url'   => (string) get_sub_field( 'performance_marketing_related_url' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<a href="%s" class="reveal card group rounded-2xl bg-white/5 border border-white/10 p-6 flex items-center gap-4"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-white/10 text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-white/50">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-white/50 group-hover:text-accent transition"></iconify-icon></a>',
			esc_url( $r['url'] ),
			$delay,
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['meta'] )
		);
	}
}
