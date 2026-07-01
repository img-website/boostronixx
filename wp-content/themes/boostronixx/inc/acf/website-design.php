<?php
/**
 * ACF field group for the Website Design page template (page-website-design.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * EVERY field key and name (including repeater sub_fields) is prefixed with
 * `website_design_` to guarantee global uniqueness across all theme field groups.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_website_design' );
/**
 * Register the Website Design field group.
 */
function bx_acf_website_design() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_website-design',
			'title'      => 'Website Design Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-website-design.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_website_design_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_website_design_hero_badge',
					'name'          => 'website_design_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Fast · Responsive · SEO-ready',
				),
				array(
					'key'           => 'f_website_design_hero_heading_a',
					'name'          => 'website_design_hero_heading_a',
					'label'         => 'Heading — line 1',
					'type'          => 'text',
					'default_value' => 'Websites that load fast',
				),
				array(
					'key'           => 'f_website_design_hero_heading_b',
					'name'          => 'website_design_hero_heading_b',
					'label'         => 'Heading — line 2 (before accent)',
					'instructions'  => 'Rendered after "&amp; ".',
					'type'          => 'text',
					'default_value' => '',
				),
				array(
					'key'           => 'f_website_design_hero_heading_accent',
					'name'          => 'website_design_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'convert faster',
				),
				array(
					'key'           => 'f_website_design_hero_text',
					'name'          => 'website_design_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As a website design company in Jaipur, we build everything from marketing sites to product front-ends — engineered for Core Web Vitals, built to convert, and easy for your team to manage.',
				),
				array(
					'key'           => 'f_website_design_hero_cta1',
					'name'          => 'website_design_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_website_design_hero_cta2',
					'name'          => 'website_design_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- RESPONSIVE SWITCHER TAB ----------------
				array(
					'key'   => 'tab_website_design_responsive',
					'label' => 'Responsive switcher',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_website_design_responsive_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The device switcher buttons and the live preview frame are part of the design. Here you can edit the eyebrow and heading.',
				),
				array(
					'key'           => 'f_website_design_responsive_eyebrow',
					'name'          => 'website_design_responsive_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Looks right everywhere',
				),
				array(
					'key'           => 'f_website_design_responsive_heading',
					'name'          => 'website_design_responsive_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Responsive website designing in Jaipur, pixel-perfect on every screen',
				),

				// ---------------- PERFORMANCE TAB ----------------
				array(
					'key'   => 'tab_website_design_perf',
					'label' => 'Performance',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_website_design_perf_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The four animated score gauges are part of the design. Here you can edit the eyebrow, heading, intro and footnote.',
				),
				array(
					'key'           => 'f_website_design_perf_eyebrow',
					'name'          => 'website_design_perf_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Built for speed',
				),
				array(
					'key'           => 'f_website_design_perf_heading',
					'name'          => 'website_design_perf_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Performance you can measure',
				),
				array(
					'key'           => 'f_website_design_perf_text',
					'name'          => 'website_design_perf_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'As a web development company in Jaipur, we engineer for Core Web Vitals and page speed from day one — because fast sites rank better, convert better and feel better.',
				),
				array(
					'key'           => 'f_website_design_perf_footnote',
					'name'          => 'website_design_perf_footnote',
					'label'         => 'Footnote',
					'type'          => 'text',
					'default_value' => 'Illustrative Lighthouse scores — we target 90+ across the board on every build.',
				),

				// ---------------- WHAT WE BUILD TAB ----------------
				array(
					'key'   => 'tab_website_design_build',
					'label' => 'What we build',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_website_design_build_eyebrow',
					'name'          => 'website_design_build_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'What we build',
				),
				array(
					'key'           => 'f_website_design_build_heading',
					'name'          => 'website_design_build_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A website design company in Jaipur for every job',
				),
				array(
					'key'          => 'f_website_design_build_items',
					'name'         => 'website_design_build_items',
					'label'        => 'Build cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:globe).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_website_design_build_icon',
							'name'  => 'website_design_build_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_website_design_build_title',
							'name'  => 'website_design_build_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_website_design_build_text',
							'name'  => 'website_design_build_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),
				array(
					'key'           => 'f_website_design_build_img_file',
					'name'          => 'website_design_build_image',
					'label'         => 'Device showcase image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_website_design_build_img_alt',
					'name'          => 'website_design_build_image_alt',
					'label'         => 'Showcase image — alt text',
					'type'          => 'text',
					'default_value' => 'Responsive BoostronixX website shown across desktop, tablet and mobile devices',
				),
				array(
					'key'           => 'f_website_design_build_img_cap_a',
					'name'          => 'website_design_build_image_caption_a',
					'label'         => 'Showcase image — caption (bold line)',
					'type'          => 'text',
					'default_value' => 'Device showcase · 1600×700',
				),
				array(
					'key'           => 'f_website_design_build_img_cap_b',
					'name'          => 'website_design_build_image_caption_b',
					'label'         => 'Showcase image — caption (sub line)',
					'type'          => 'text',
					'default_value' => 'A real client website displayed across desktop, tablet and phone frames — proves responsive, polished delivery.',
				),

				// ---------------- PROCESS TAB ----------------
				array(
					'key'   => 'tab_website_design_process',
					'label' => 'Process',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_website_design_process_eyebrow',
					'name'          => 'website_design_process_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'How we build',
				),
				array(
					'key'           => 'f_website_design_process_heading',
					'name'          => 'website_design_process_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Design. Build. Test. Launch.',
				),
				array(
					'key'          => 'f_website_design_process_items',
					'name'         => 'website_design_process_items',
					'label'        => 'Steps',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array(
							'key'   => 'f_website_design_process_num',
							'name'  => 'website_design_process_number',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_website_design_process_title',
							'name'  => 'website_design_process_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_website_design_process_text',
							'name'  => 'website_design_process_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),
				array(
					'key'           => 'f_website_design_process_callout',
					'name'          => 'website_design_process_callout',
					'label'         => 'Callout note',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Built by the BoostronixX web team — affordable website design in Jaipur with SEO-ready markup, Core Web Vitals tuned, and a CMS your team can actually use.',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_website_design_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_website_design_faq_eyebrow',
					'name'          => 'website_design_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_website_design_faq_heading',
					'name'          => 'website_design_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Website questions',
				),
				array(
					'key'          => 'f_website_design_faq_items',
					'name'         => 'website_design_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_website_design_faq_q',
							'name'  => 'website_design_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_website_design_faq_a',
							'name'  => 'website_design_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED + CTA TAB ----------------
				array(
					'key'   => 'tab_website_design_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_website_design_related_eyebrow',
					'name'          => 'website_design_related_eyebrow',
					'label'         => 'Related — eyebrow',
					'type'          => 'text',
					'default_value' => 'Pairs well with',
				),
				array(
					'key'          => 'f_website_design_related_items',
					'name'         => 'website_design_related_items',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:figma).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_website_design_related_icon',
							'name'  => 'website_design_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_website_design_related_title',
							'name'  => 'website_design_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_website_design_related_text',
							'name'  => 'website_design_related_text',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_website_design_related_link',
							'name'          => 'website_design_related_link',
							'label'         => 'Link',
							'type'          => 'link',
							'return_format' => 'array',
						),
					),
				),
				array(
					'key'           => 'f_website_design_cta_heading',
					'name'          => 'website_design_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => "Let's build a site that works as hard as you do",
				),
				array(
					'key'           => 'f_website_design_cta_text',
					'name'          => 'website_design_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Tell us about your project — we'll scope a fast, beautiful, SEO-ready website around your goals.",
				),
				array(
					'key'           => 'f_website_design_cta_btn1',
					'name'          => 'website_design_cta_button_primary',
					'label'         => 'CTA — primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_website_design_cta_btn2',
					'name'          => 'website_design_cta_button_secondary',
					'label'         => 'CTA — secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
			),
		)
	);
}

/**
 * Render the Website Design "What we build" cards from ACF
 * (website_design_build_items repeater), falling back to the original four
 * defaults when empty / ACF off.
 */
function bx_website_design_render_build() {
	$defaults = array(
		array( 'icon' => 'lucide:globe', 'title' => 'Marketing sites', 'text' => 'Custom website design for Jaipur brands that tells your story and converts.' ),
		array( 'icon' => 'lucide:mouse-pointer-click', 'title' => 'Landing pages', 'text' => 'Focused, fast pages built for campaigns &amp; ads.' ),
		array( 'icon' => 'lucide:shopping-bag', 'title' => 'E-commerce', 'text' => 'Ecommerce website design in Jaipur — stores easy to shop and easy to run.' ),
		array( 'icon' => 'lucide:layout-dashboard', 'title' => 'Web apps &amp; front-ends', 'text' => 'Product UIs built from your designs.' ),
	);

	$items   = array();
	$has_acf = false;
	if ( function_exists( 'have_rows' ) && have_rows( 'website_design_build_items' ) ) {
		$has_acf = true;
		while ( have_rows( 'website_design_build_items' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'website_design_build_icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'website_design_build_title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'website_design_build_text' ) ),
			);
		}
	}
	if ( ! $has_acf ) {
		// Pre-escaped/known-safe defaults preserve original inline &amp; entity.
		$items = $defaults;
	}

	foreach ( $items as $i => $c ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal card rounded-xl2 bg-paper border border-line p-7"%s><span class="text-accent text-2xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$delay,
			$c['icon'],
			$c['title'],
			$c['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / known-safe default markup.
	}
}

/**
 * Render the Website Design process step cards from ACF
 * (website_design_process_items repeater), falling back to the original four
 * defaults when empty / ACF off.
 */
function bx_website_design_render_process() {
	$defaults = array(
		array( 'number' => '01', 'title' => 'Design', 'text' => 'UX and UI mapped to your brand and conversion goals.' ),
		array( 'number' => '02', 'title' => 'Build', 'text' => 'Clean, responsive, mobile-first code — custom or WordPress — with an easy-to-edit CMS.' ),
		array( 'number' => '03', 'title' => 'Test', 'text' => 'Speed, cross-device, SEO and accessibility checks.' ),
		array( 'number' => '04', 'title' => 'Launch', 'text' => 'Go live with analytics, training and ongoing support.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'website_design_process_items' ) ) {
		while ( have_rows( 'website_design_process_items' ) ) {
			the_row();
			$items[] = array(
				'number' => (string) get_sub_field( 'website_design_process_number' ),
				'title'  => (string) get_sub_field( 'website_design_process_title' ),
				'text'   => (string) get_sub_field( 'website_design_process_text' ),
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
			esc_html( $s['number'] ),
			esc_html( $s['title'] ),
			esc_html( $s['text'] )
		);
	}
}

/**
 * Render the Website Design FAQ accordion items from ACF
 * (website_design_faq_items repeater), falling back to the original default
 * questions when empty / ACF off.
 */
function bx_website_design_render_faqs() {
	$defaults = array(
		array(
			'q' => 'How long does a website take?',
			'a' => "Most marketing websites take 4–8 weeks depending on the number of pages, content readiness and complexity. We'll share a clear timeline and milestones in your proposal.",
		),
		array(
			'q' => 'Can I update the site myself?',
			'a' => 'Yes. We build on an easy-to-manage CMS and include training, so your team can edit content, add pages and publish without touching code.',
		),
		array(
			'q' => 'Is the website SEO-ready?',
			'a' => "Always. Whether it's a custom build or WordPress website design, clean markup, fast load times, proper headings, schema and mobile-first design come standard — and our SEO team can take it further from there.",
		),
		array(
			'q' => 'Do you offer maintenance after launch?',
			'a' => 'Yes — we offer ongoing care plans for updates, backups, security and improvements, so your site stays fast and secure.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'website_design_faq_items' ) ) {
		while ( have_rows( 'website_design_faq_items' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'website_design_faq_question' ),
				'a' => (string) get_sub_field( 'website_design_faq_answer' ),
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
 * Render the Website Design "Pairs well with" related cards from ACF
 * (website_design_related_items repeater), falling back to the original three
 * defaults when empty / ACF off.
 */
function bx_website_design_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:figma', 'title' => 'UI/UX Design', 'text' => 'Design the experience', 'url' => '/ui-ux-design/' ),
		array( 'icon' => 'lucide:search', 'title' => 'SEO Services', 'text' => 'Get it ranking', 'url' => '/seo-services/' ),
		array( 'icon' => 'lucide:palette', 'title' => 'Brand Consulting', 'text' => 'Look the part', 'url' => '/brand-consulting/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'website_design_related_items' ) ) {
		while ( have_rows( 'website_design_related_items' ) ) {
			the_row();
			$link    = get_sub_field( 'website_design_related_link' );
			$url     = ( is_array( $link ) && ! empty( $link['url'] ) ) ? $link['url'] : '';
			$items[] = array(
				'icon'  => (string) get_sub_field( 'website_design_related_icon' ),
				'title' => (string) get_sub_field( 'website_design_related_title' ),
				'text'  => (string) get_sub_field( 'website_design_related_text' ),
				'url'   => $url,
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		$url   = '' !== $r['url'] ? $r['url'] : '/';
		printf(
			'<a href="%s" class="reveal card group rounded-2xl border border-line p-6 flex items-center gap-4"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>',
			esc_url( $url ),
			$delay,
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['text'] )
		);
	}
}
