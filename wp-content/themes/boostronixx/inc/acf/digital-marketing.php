<?php
/**
 * ACF field group for the Digital Marketing page template (page-digital-marketing.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * Every field key/name is prefixed with `digital_marketing_` for global
 * uniqueness so it never collides with other page groups.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_digital_marketing' );
/**
 * Register the Digital Marketing field group.
 */
function bx_acf_digital_marketing() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_digital-marketing',
			'title'      => 'Digital Marketing Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-digital-marketing.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_digital_marketing_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_digital_marketing_hero_badge',
					'name'          => 'digital_marketing_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Full-funnel growth, measured',
				),
				array(
					'key'           => 'f_digital_marketing_hero_heading',
					'name'          => 'digital_marketing_hero_heading',
					'label'         => 'Heading (before accent word)',
					'type'          => 'text',
					'default_value' => 'Marketing that turns traffic into ',
				),
				array(
					'key'           => 'f_digital_marketing_hero_heading_accent',
					'name'          => 'digital_marketing_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'customers',
				),
				array(
					'key'           => 'f_digital_marketing_hero_text',
					'name'          => 'digital_marketing_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Full-funnel digital marketing in Jaipur: SEO, content, email, social and ads working together as one funnel, with dashboards that show exactly how a click becomes a customer.',
				),
				array(
					'key'           => 'f_digital_marketing_hero_cta1',
					'name'          => 'digital_marketing_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_digital_marketing_hero_cta2',
					'name'          => 'digital_marketing_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- CHANNELS TAB ----------------
				array(
					'key'   => 'tab_digital_marketing_channels',
					'label' => 'Channels',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_digital_marketing_channels_eyebrow',
					'name'          => 'digital_marketing_channels_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'One connected engine',
				),
				array(
					'key'           => 'f_digital_marketing_channels_heading',
					'name'          => 'digital_marketing_channels_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Every channel, pulling together',
				),
				array(
					'key'           => 'f_digital_marketing_channels_text',
					'name'          => 'digital_marketing_channels_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Channels in silos waste budget. As a digital marketing company in Jaipur, we orchestrate SEO, content, email, social and paid so each one amplifies the others — awareness, consideration and conversion all reporting into one place.',
				),
				array(
					'key'          => 'f_digital_marketing_channels_items',
					'name'         => 'digital_marketing_channels',
					'label'        => 'Channel chips',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:search). Label may contain &amp; entities.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add channel',
					'sub_fields'   => array(
						array(
							'key'   => 'f_digital_marketing_channel_icon',
							'name'  => 'digital_marketing_channel_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_channel_label',
							'name'  => 'digital_marketing_channel_label',
							'label' => 'Label',
							'type'  => 'text',
						),
					),
				),

				// ---------------- FUNNEL FLOW TAB ----------------
				array(
					'key'   => 'tab_digital_marketing_flow',
					'label' => 'Funnel flow',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_digital_marketing_flow_eyebrow',
					'name'          => 'digital_marketing_flow_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'How it connects',
				),
				array(
					'key'           => 'f_digital_marketing_flow_heading',
					'name'          => 'digital_marketing_flow_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Full-funnel digital marketing in Jaipur, from first click to loyal customer',
				),
				array(
					'key'          => 'f_digital_marketing_flow_items',
					'name'         => 'digital_marketing_flow',
					'label'        => 'Flow cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name. Text may contain &amp; entities.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_digital_marketing_flow_icon',
							'name'  => 'digital_marketing_flow_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_flow_title',
							'name'  => 'digital_marketing_flow_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_flow_text',
							'name'  => 'digital_marketing_flow_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
					),
				),

				// ---------------- ANALYTICS TAB ----------------
				array(
					'key'   => 'tab_digital_marketing_analytics',
					'label' => 'Analytics',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_digital_marketing_analytics_eyebrow',
					'name'          => 'digital_marketing_analytics_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'No black boxes',
				),
				array(
					'key'           => 'f_digital_marketing_analytics_heading',
					'name'          => 'digital_marketing_analytics_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Dashboards, not vanity metrics',
				),
				array(
					'key'           => 'f_digital_marketing_analytics_text',
					'name'          => 'digital_marketing_analytics_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "As an online marketing agency in Jaipur, we give you a live view of what's working — traffic, leads, conversion rate and revenue impact — with clear attribution, so every rupee of marketing is accountable.",
				),
				array(
					'key'           => 'f_digital_marketing_analytics_img_file',
					'name'          => 'digital_marketing_analytics_image',
					'label'         => 'Analytics dashboard image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_digital_marketing_analytics_img_alt',
					'name'          => 'digital_marketing_analytics_image_alt',
					'label'         => 'Dashboard image — alt text',
					'type'          => 'text',
					'default_value' => 'Google Analytics 4 dashboard showing traffic, leads and conversion trends',
				),
				array(
					'key'           => 'f_digital_marketing_analytics_img_cap_title',
					'name'          => 'digital_marketing_analytics_image_caption_title',
					'label'         => 'Dashboard image — caption title',
					'type'          => 'text',
					'default_value' => 'Analytics dashboard · 1280×720',
				),
				array(
					'key'           => 'f_digital_marketing_analytics_img_cap_text',
					'name'          => 'digital_marketing_analytics_image_caption_text',
					'label'         => 'Dashboard image — caption text',
					'type'          => 'text',
					'default_value' => 'Screenshot of a GA4 / Looker Studio report with traffic, leads and conversion trends. Anonymise data.',
				),

				// ---------------- PROCESS TAB ----------------
				array(
					'key'   => 'tab_digital_marketing_process',
					'label' => 'Process',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_digital_marketing_process_eyebrow',
					'name'          => 'digital_marketing_process_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Our process',
				),
				array(
					'key'           => 'f_digital_marketing_process_heading',
					'name'          => 'digital_marketing_process_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Strategy first, always',
				),
				array(
					'key'          => 'f_digital_marketing_process_items',
					'name'         => 'digital_marketing_process',
					'label'        => 'Process steps',
					'instructions' => 'Leave empty to keep the current defaults. Title/text may contain &amp; entities.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array(
							'key'   => 'f_digital_marketing_process_num',
							'name'  => 'digital_marketing_process_number',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_process_title',
							'name'  => 'digital_marketing_process_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_process_text',
							'name'  => 'digital_marketing_process_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),
				array(
					'key'           => 'f_digital_marketing_process_note',
					'name'          => 'digital_marketing_process_note',
					'label'         => 'Footnote',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Run by the BoostronixX growth team — a growth marketing agency in Jaipur with strategy, content, design and analytics in-house, building your full funnel marketing strategy and reporting against real business goals.',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_digital_marketing_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_digital_marketing_faq_eyebrow',
					'name'          => 'digital_marketing_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_digital_marketing_faq_heading',
					'name'          => 'digital_marketing_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Digital marketing, answered',
				),
				array(
					'key'          => 'f_digital_marketing_faq_items',
					'name'         => 'digital_marketing_faq',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_digital_marketing_faq_q',
							'name'  => 'digital_marketing_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_faq_a',
							'name'  => 'digital_marketing_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED + CTA TAB ----------------
				array(
					'key'   => 'tab_digital_marketing_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_digital_marketing_related_eyebrow',
					'name'          => 'digital_marketing_related_eyebrow',
					'label'         => 'Related — eyebrow',
					'type'          => 'text',
					'default_value' => 'Pairs well with',
				),
				array(
					'key'          => 'f_digital_marketing_related_items',
					'name'         => 'digital_marketing_related',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_digital_marketing_related_icon',
							'name'  => 'digital_marketing_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_related_title',
							'name'  => 'digital_marketing_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_digital_marketing_related_meta',
							'name'  => 'digital_marketing_related_meta',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_digital_marketing_related_link',
							'name'          => 'digital_marketing_related_link',
							'label'         => 'Link',
							'type'          => 'page_link',
							'allow_null'    => 1,
							'allow_archives' => 0,
						),
					),
				),
				array(
					'key'           => 'f_digital_marketing_cta_heading',
					'name'          => 'digital_marketing_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => "Let's build your growth engine",
				),
				array(
					'key'           => 'f_digital_marketing_cta_text',
					'name'          => 'digital_marketing_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Book a free strategy call — we'll map your funnel and the channels that will move it fastest.",
				),
				array(
					'key'           => 'f_digital_marketing_cta_button',
					'name'          => 'digital_marketing_cta_button',
					'label'         => 'CTA — primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_digital_marketing_cta_button2',
					'name'          => 'digital_marketing_cta_button_secondary',
					'label'         => 'CTA — secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
			),
		)
	);
}

/**
 * Render the Digital Marketing channel chips from ACF (digital_marketing_channels
 * repeater), falling back to the original four defaults when empty / ACF off.
 */
function bx_digital_marketing_render_channels() {
	$defaults = array(
		array( 'icon' => 'lucide:search', 'label' => 'SEO &amp; organic' ),
		array( 'icon' => 'lucide:pen-tool', 'label' => 'Content marketing' ),
		array( 'icon' => 'lucide:mail', 'label' => 'Email &amp; CRM' ),
		array( 'icon' => 'lucide:megaphone', 'label' => 'Paid &amp; social' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'digital_marketing_channels' ) ) {
		while ( have_rows( 'digital_marketing_channels' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'digital_marketing_channel_icon' ) ),
				'label' => esc_html( (string) get_sub_field( 'digital_marketing_channel_label' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $c ) {
		printf(
			'<div class="flex items-center gap-3 rounded-xl bg-paper border border-line p-4"><iconify-icon icon="%s" class="text-accent text-xl"></iconify-icon><span class="font-medium text-sm">%s</span></div>',
			$c['icon'], // Pre-escaped above / known-safe default markup.
			$c['label']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / default markup contains intentional entities.
	}
}

/**
 * Render the Digital Marketing "How it connects" flow cards from ACF
 * (digital_marketing_flow repeater), falling back to the original four defaults
 * when empty / ACF off.
 */
function bx_digital_marketing_render_flow() {
	$defaults = array(
		array( 'icon' => 'lucide:users', 'title' => 'Attract', 'text' => 'SEO &amp; content bring the right people in.' ),
		array( 'icon' => 'lucide:heart-handshake', 'title' => 'Engage', 'text' => 'Social &amp; email marketing nurture consideration into intent.' ),
		array( 'icon' => 'lucide:badge-indian-rupee', 'title' => 'Convert', 'text' => 'Landing pages &amp; ads close the loop.' ),
		array( 'icon' => 'lucide:repeat', 'title' => 'Retain', 'text' => 'Lifecycle and retention marketing turn buyers into fans.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'digital_marketing_flow' ) ) {
		while ( have_rows( 'digital_marketing_flow' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'digital_marketing_flow_icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'digital_marketing_flow_title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'digital_marketing_flow_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $f ) {
		printf(
			'<div class="card rounded-xl2 border border-line p-6"><span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$f['icon'], // Pre-escaped above / known-safe default markup.
			$f['title'],
			$f['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / default markup contains intentional entities.
	}
}

/**
 * Render the Digital Marketing process step cards from ACF
 * (digital_marketing_process repeater), falling back to the original four
 * defaults when empty / ACF off.
 */
function bx_digital_marketing_render_process() {
	$defaults = array(
		array( 'number' => '01', 'title' => 'Audit &amp; goals', 'text' => 'We map your funnel, baseline metrics and the outcomes that matter.' ),
		array( 'number' => '02', 'title' => 'Strategy', 'text' => 'A channel plan, calendar and KPIs aligned to your budget.' ),
		array( 'number' => '03', 'title' => 'Execute', 'text' => 'As a content marketing agency in Jaipur, we ship content, campaigns and automation consistently.' ),
		array( 'number' => '04', 'title' => 'Optimise', 'text' => 'Monthly reviews to double down on what drives revenue.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'digital_marketing_process' ) ) {
		while ( have_rows( 'digital_marketing_process' ) ) {
			the_row();
			$items[] = array(
				'number' => esc_html( (string) get_sub_field( 'digital_marketing_process_number' ) ),
				'title'  => esc_html( (string) get_sub_field( 'digital_marketing_process_title' ) ),
				'text'   => esc_html( (string) get_sub_field( 'digital_marketing_process_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $s ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal card rounded-xl2 border border-line p-7"%s><span class="font-display text-5xl tt text-accent/25">%s</span><h3 class="font-display text-xl tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">%s</p></div>',
			$delay,
			$s['number'], // Pre-escaped above / known-safe default markup.
			$s['title'],
			$s['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / default markup contains intentional entities.
	}
}

/**
 * Render the Digital Marketing FAQ accordion items from ACF
 * (digital_marketing_faq repeater), falling back to the original four default
 * questions when empty / ACF off.
 */
function bx_digital_marketing_render_faqs() {
	$defaults = array(
		array(
			'q' => 'Is digital marketing different from just running ads?',
			'a' => "Yes. Ads are one channel; full-funnel digital marketing in Jaipur is the whole funnel — SEO, content, email and social working together so you're not dependent on paid spend alone.",
		),
		array(
			'q' => 'Can I start with just one channel?',
			'a' => "Absolutely. Many clients start with SEO or social and expand as results come in. We'll recommend the highest-impact starting point for your stage and budget.",
		),
		array(
			'q' => 'How do you measure success?',
			'a' => 'Against the KPIs we agree up front — traffic, leads, conversion rate and revenue impact — reported in a clear monthly dashboard, not vanity metrics.',
		),
		array(
			'q' => 'When will I see results?',
			'a' => 'Paid channels can move quickly; organic compounds over months. A blended full funnel marketing strategy in Jaipur typically shows meaningful momentum across the first 60–90 days, from awareness through to retention.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'digital_marketing_faq' ) ) {
		while ( have_rows( 'digital_marketing_faq' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'digital_marketing_faq_question' ),
				'a' => (string) get_sub_field( 'digital_marketing_faq_answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		printf(
			'<div class="faq border border-line rounded-2xl bg-paper px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}

/**
 * Render the Digital Marketing "Pairs well with" related cards from ACF
 * (digital_marketing_related repeater), falling back to the original three
 * defaults when empty / ACF off.
 */
function bx_digital_marketing_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:search', 'title' => 'SEO Services', 'meta' => 'Top of funnel', 'url' => '/seo-services/' ),
		array( 'icon' => 'lucide:target', 'title' => 'Performance Marketing', 'meta' => 'Convert faster', 'url' => '/performance-marketing/' ),
		array( 'icon' => 'lucide:thumbs-up', 'title' => 'Social Media', 'meta' => 'Stay top of mind', 'url' => '/social-media-marketing/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'digital_marketing_related' ) ) {
		while ( have_rows( 'digital_marketing_related' ) ) {
			the_row();
			$url     = (string) get_sub_field( 'digital_marketing_related_link' );
			$items[] = array(
				'icon'  => (string) get_sub_field( 'digital_marketing_related_icon' ),
				'title' => (string) get_sub_field( 'digital_marketing_related_title' ),
				'meta'  => (string) get_sub_field( 'digital_marketing_related_meta' ),
				'url'   => $url,
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		$url   = $r['url'] ? $r['url'] : '/services/';
		printf(
			'<a href="%s" class="reveal card group rounded-2xl border border-line p-6 flex items-center gap-4"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>',
			esc_url( $url ),
			$delay,
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['meta'] )
		);
	}
}
