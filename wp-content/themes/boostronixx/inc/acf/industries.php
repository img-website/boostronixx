<?php
/**
 * ACF field group for the Industries page template (page-industries.php).
 *
 * Defaults mirror the original hard-coded content; the template also falls back
 * to the same defaults via bx_field()/render helpers so nothing ever blanks if
 * ACF is off or a field is left empty.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_industries' );
/**
 * Register the Industries page field group.
 */
function bx_acf_industries() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_industries',
			'title'      => 'Industries Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-industries.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_industries_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_industries_hero_badge',
					'name'          => 'industries_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Industries we empower · 15+ sectors',
				),
				array(
					'key'           => 'f_industries_hero_heading',
					'name'          => 'industries_hero_heading',
					'label'         => 'Heading (line before the rotating word)',
					'type'          => 'text',
					'default_value' => 'Growth, tailored to',
				),
				array(
					'key'           => 'f_industries_hero_rotating',
					'name'          => 'industries_hero_rotating',
					'label'         => 'Rotating word (first / static word shown)',
					'type'          => 'text',
					'default_value' => 'real estate',
				),
				array(
					'key'           => 'f_industries_hero_sub',
					'name'          => 'industries_hero_subheading',
					'label'         => 'Subheading',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Same in-house team, a different playbook for every sector — that's what industry-specific digital marketing in Jaipur looks like with us. We learn how your customers buy, then build the brand and campaigns that win them.",
				),
				array(
					'key'           => 'f_industries_hero_btn',
					'name'          => 'industries_hero_button',
					'label'         => 'Hero button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'          => 'f_industries_hero_stats',
					'name'         => 'industries_hero_stats',
					'label'        => 'Stat band',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add stat',
					'sub_fields'   => array(
						array( 'key' => 'f_industries_stat_num', 'name' => 'number', 'label' => 'Number', 'type' => 'number' ),
						array( 'key' => 'f_industries_stat_suffix', 'name' => 'suffix', 'label' => 'Suffix (e.g. +)', 'type' => 'text' ),
						array( 'key' => 'f_industries_stat_label', 'name' => 'label', 'label' => 'Label', 'type' => 'text' ),
					),
				),

				// ---------------- SECTOR BENTO TAB ----------------
				array(
					'key'   => 'tab_industries_sectors',
					'label' => 'Sectors',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_industries_sectors_eyebrow',
					'name'          => 'industries_sectors_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Pick your sector',
				),
				array(
					'key'           => 'f_industries_sectors_heading',
					'name'          => 'industries_sectors_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Four sectors we know inside out',
				),
				array(
					'key'     => 'f_industries_sectors_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The four sector cards have animated visuals that are part of the design. Below you can edit the closing line under the cards.',
				),
				array(
					'key'           => 'f_industries_sectors_footer',
					'name'          => 'industries_sectors_footer',
					'label'         => 'Closing line under cards (the linked words stay as a link to Contact)',
					'type'          => 'text',
					'default_value' => "Don't see your industry? Our industry-specific digital marketing in Jaipur spans 15+ sectors — tell us about yours.",
				),

				// ---------------- HOW WE TAILOR TAB ----------------
				array(
					'key'   => 'tab_industries_tailor',
					'label' => 'How we tailor',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_industries_tailor_eyebrow',
					'name'          => 'industries_tailor_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Same craft, sector-specific strategy',
				),
				array(
					'key'           => 'f_industries_tailor_heading',
					'name'          => 'industries_tailor_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'How industry-specific digital marketing in Jaipur works',
				),
				array(
					'key'           => 'f_industries_tailor_text',
					'name'          => 'industries_tailor_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Our seven services stay the same — what changes is the strategy behind them. As a sector-specific marketing agency in Jaipur, we adapt the message, channels and metrics to how your industry actually buys.',
				),
				array(
					'key'          => 'f_industries_tailor_items',
					'name'         => 'industries_tailor_items',
					'label'        => 'Process cards',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array( 'key' => 'f_industries_tailor_icon', 'name' => 'icon', 'label' => 'Icon (iconify name, e.g. lucide:users-round)', 'type' => 'text' ),
						array( 'key' => 'f_industries_tailor_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
						array( 'key' => 'f_industries_tailor_body', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 3 ),
					),
				),

				// ---------------- PROOF TAB ----------------
				array(
					'key'   => 'tab_industries_proof',
					'label' => 'Proof',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_industries_proof_eyebrow',
					'name'          => 'industries_proof_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Proof, by sector',
				),
				array(
					'key'           => 'f_industries_proof_heading',
					'name'          => 'industries_proof_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => "We've done it in your space",
				),
				array(
					'key'           => 'f_industries_proof_button',
					'name'          => 'industries_proof_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'          => 'f_industries_proof_items',
					'name'         => 'industries_proof_items',
					'label'        => 'Proof cards',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array( 'key' => 'f_industries_proof_icon', 'name' => 'icon', 'label' => 'Icon (iconify name)', 'type' => 'text' ),
						array( 'key' => 'f_industries_proof_sector', 'name' => 'sector', 'label' => 'Sector label', 'type' => 'text' ),
						array( 'key' => 'f_industries_proof_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
						array( 'key' => 'f_industries_proof_cta', 'name' => 'cta', 'label' => 'CTA text', 'type' => 'text' ),
						array( 'key' => 'f_industries_proof_link', 'name' => 'link', 'label' => 'Link', 'type' => 'page_link', 'allow_null' => 1, 'allow_archives' => 0 ),
						array( 'key' => 'f_industries_proof_arrow', 'name' => 'arrow', 'label' => 'Arrow icon (iconify name)', 'type' => 'text' ),
					),
				),
				array(
					'key'           => 'f_industries_proof_quote',
					'name'          => 'industries_proof_quote',
					'label'         => 'Testimonial quote',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => '"They understood our market from day one — the campaigns felt built for our buyers, not copy-pasted from another industry."',
				),
				array(
					'key'           => 'f_industries_proof_initial',
					'name'          => 'industries_proof_initial',
					'label'         => 'Testimonial avatar initial',
					'type'          => 'text',
					'default_value' => 'V',
				),
				array(
					'key'           => 'f_industries_proof_name',
					'name'          => 'industries_proof_name',
					'label'         => 'Testimonial name',
					'type'          => 'text',
					'default_value' => 'Vikram Rathore',
				),
				array(
					'key'           => 'f_industries_proof_role',
					'name'          => 'industries_proof_role',
					'label'         => 'Testimonial role / company',
					'type'          => 'text',
					'default_value' => 'Real estate · BoostronixX client',
				),

				// ---------------- SERVICE MATRIX TAB ----------------
				array(
					'key'   => 'tab_industries_matrix',
					'label' => 'Service matrix',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_industries_matrix_eyebrow',
					'name'          => 'industries_matrix_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Everything, applied to your sector',
				),
				array(
					'key'           => 'f_industries_matrix_heading',
					'name'          => 'industries_matrix_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'The full stack, tuned for you',
				),
				array(
					'key'          => 'f_industries_matrix_items',
					'name'         => 'industries_matrix_items',
					'label'        => 'Service pills',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add pill',
					'sub_fields'   => array(
						array( 'key' => 'f_industries_matrix_icon', 'name' => 'icon', 'label' => 'Icon (iconify name)', 'type' => 'text' ),
						array( 'key' => 'f_industries_matrix_label', 'name' => 'label', 'label' => 'Label', 'type' => 'text' ),
						array( 'key' => 'f_industries_matrix_link', 'name' => 'link', 'label' => 'Link', 'type' => 'page_link', 'allow_null' => 1, 'allow_archives' => 0 ),
					),
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_industries_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_industries_faq_eyebrow',
					'name'          => 'industries_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_industries_faq_heading',
					'name'          => 'industries_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Industry questions',
				),
				array(
					'key'          => 'f_industries_faq_items',
					'name'         => 'industries_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array( 'key' => 'f_industries_faq_q', 'name' => 'question', 'label' => 'Question', 'type' => 'text' ),
						array( 'key' => 'f_industries_faq_a', 'name' => 'answer', 'label' => 'Answer', 'type' => 'textarea', 'rows' => 3 ),
					),
				),

				// ---------------- CTA TAB ----------------
				array(
					'key'   => 'tab_industries_cta',
					'label' => 'Call to action',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_industries_cta_heading',
					'name'          => 'industries_cta_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => "Let's build a strategy for your sector",
				),
				array(
					'key'           => 'f_industries_cta_text',
					'name'          => 'industries_cta_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Tell us your industry and goal — we'll come back with sector-specific quick wins and a roadmap. Free, no obligation.",
				),
				array(
					'key'           => 'f_industries_cta_btn1',
					'name'          => 'industries_cta_button_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_industries_cta_btn2',
					'name'          => 'industries_cta_button_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
			),
		)
	);
}

/**
 * Render the Industries hero stat band from ACF (industries_hero_stats),
 * falling back to the original four stats when empty / ACF off.
 */
function bx_industries_render_stats() {
	$defaults = array(
		array( 'number' => 15, 'suffix' => '+', 'label' => 'Industries served' ),
		array( 'number' => 50, 'suffix' => '+', 'label' => 'Brands grown' ),
		array( 'number' => 100, 'suffix' => '+', 'label' => 'Projects shipped' ),
		array( 'number' => 4, 'suffix' => '', 'label' => 'Core sectors' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'industries_hero_stats' ) ) {
		while ( have_rows( 'industries_hero_stats' ) ) {
			the_row();
			$items[] = array(
				'number' => (int) get_sub_field( 'number' ),
				'suffix' => (string) get_sub_field( 'suffix' ),
				'label'  => (string) get_sub_field( 'label' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $s ) {
		printf(
			'<div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="%d">0</span>%s</p><p class="text-ink-soft text-sm mt-1">%s</p></div>',
			(int) $s['number'],
			esc_html( $s['suffix'] ),
			esc_html( $s['label'] )
		);
	}
}

/**
 * Render the Industries "How we tailor" process cards from ACF
 * (industries_tailor_items), falling back to the original six cards.
 */
function bx_industries_render_tailor() {
	$defaults = array(
		array( 'icon' => 'lucide:users-round', 'title' => 'Audience-first research', 'text' => "We map your sector's buyer journey — what they search, trust and act on." ),
		array( 'icon' => 'lucide:message-square-quote', 'title' => 'Sector-fluent messaging', 'text' => "Copy and creative that speak your industry's language and earn trust fast." ),
		array( 'icon' => 'lucide:route', 'title' => 'Right channels, right order', 'text' => 'A real estate funnel differs from D2C — we pick the channels that actually convert for you.' ),
		array( 'icon' => 'lucide:target', 'title' => 'Metrics that matter to you', 'text' => "Site visits, enrolments, ROAS or repeat rate — we report on your sector's real KPIs." ),
		array( 'icon' => 'lucide:shield-check', 'title' => 'Compliance & trust', 'text' => 'RERA, medical ethics, education claims, product compliance — we keep your brand safe and credible.' ),
		array( 'icon' => 'lucide:repeat', 'title' => 'Learn & compound', 'text' => 'Every campaign teaches us more about your niche — so results keep improving.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'industries_tailor_items' ) ) {
		while ( have_rows( 'industries_tailor_items' ) ) {
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

	foreach ( $items as $i => $c ) {
		$delay = 0 === ( $i % 3 ) ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		printf(
			'<div class="reveal rounded-xl2 bg-paper border border-line p-7"%s><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">%s</h3><p class="text-ink-soft text-sm mt-2">%s</p></div>',
			$delay,
			esc_attr( $c['icon'] ),
			esc_html( $c['title'] ),
			esc_html( $c['text'] )
		);
	}
}

/**
 * Render the Industries proof cards from ACF (industries_proof_items),
 * falling back to the original four cards.
 */
function bx_industries_render_proof() {
	$defaults = array(
		array( 'icon' => 'lucide:building-2', 'sector' => 'Real Estate', 'title' => 'Ashiana — +128% leads', 'cta' => 'See the work', 'link' => '/portfolio/', 'arrow' => 'lucide:arrow-up-right' ),
		array( 'icon' => 'lucide:graduation-cap', 'sector' => 'Schools', 'title' => 'Edoovi — Smart school ERP', 'cta' => 'Read case study', 'link' => '/portfolio/edoovi-erp/', 'arrow' => 'lucide:arrow-up-right' ),
		array( 'icon' => 'lucide:shopping-bag', 'sector' => 'D2C eCommerce', 'title' => 'Veeba — Social content', 'cta' => 'See the work', 'link' => '/portfolio/', 'arrow' => 'lucide:arrow-up-right' ),
		array( 'icon' => 'lucide:heart-pulse', 'sector' => 'Hospitals', 'title' => 'CityCare — +142% enquiries', 'cta' => 'See the work', 'link' => '/portfolio/', 'arrow' => 'lucide:arrow-up-right' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'industries_proof_items' ) ) {
		while ( have_rows( 'industries_proof_items' ) ) {
			the_row();
			$items[] = array(
				'icon'   => (string) get_sub_field( 'icon' ),
				'sector' => (string) get_sub_field( 'sector' ),
				'title'  => (string) get_sub_field( 'title' ),
				'cta'    => (string) get_sub_field( 'cta' ),
				'link'   => (string) get_sub_field( 'link' ),
				'arrow'  => (string) get_sub_field( 'arrow' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $p ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<a href="%s" class="reveal group rounded-2xl border border-line p-6 hover:border-accent transition"%s><span class="text-accent text-2xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><p class="text-xs text-ink-soft mt-3">%s</p><h3 class="font-display text-lg tt group-hover:text-accent transition">%s</h3><span class="inline-flex items-center gap-1 text-sm font-medium mt-3">%s <iconify-icon icon="%s" aria-hidden="true"></iconify-icon></span></a>',
			esc_url( $p['link'] ? $p['link'] : '/portfolio/' ),
			$delay,
			esc_attr( $p['icon'] ),
			esc_html( $p['sector'] ),
			esc_html( $p['title'] ),
			esc_html( $p['cta'] ),
			esc_attr( $p['arrow'] )
		);
	}
}

/**
 * Render the Industries service-matrix pills from ACF
 * (industries_matrix_items), falling back to the original seven pills.
 */
function bx_industries_render_matrix() {
	$defaults = array(
		array( 'icon' => 'lucide:palette', 'label' => 'Brand Consulting', 'link' => '/services/brand-consulting/' ),
		array( 'icon' => 'lucide:search', 'label' => 'SEO · AEO · GEO', 'link' => '/services/seo-services/' ),
		array( 'icon' => 'lucide:target', 'label' => 'Performance Marketing', 'link' => '/services/performance-marketing/' ),
		array( 'icon' => 'lucide:thumbs-up', 'label' => 'Social Media', 'link' => '/services/social-media-marketing/' ),
		array( 'icon' => 'lucide:line-chart', 'label' => 'Digital Marketing', 'link' => '/services/digital-marketing/' ),
		array( 'icon' => 'lucide:figma', 'label' => 'UI/UX Design', 'link' => '/services/ui-ux-design/' ),
		array( 'icon' => 'lucide:monitor-smartphone', 'label' => 'Website Design', 'link' => '/services/website-design/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'industries_matrix_items' ) ) {
		while ( have_rows( 'industries_matrix_items' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'icon' ),
				'label' => (string) get_sub_field( 'label' ),
				'link'  => (string) get_sub_field( 'link' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $m ) {
		printf(
			'<a href="%s" class="mx inline-flex items-center gap-2 rounded-full border border-line bg-paper px-4 py-2.5 text-sm font-medium"><iconify-icon icon="%s" class="text-accent" aria-hidden="true"></iconify-icon> %s</a>',
			esc_url( $m['link'] ? $m['link'] : '#' ),
			esc_attr( $m['icon'] ),
			esc_html( $m['label'] )
		);
	}
}

/**
 * Render the Industries FAQ accordion items from ACF (industries_faq_items),
 * falling back to the original default questions when empty / ACF off.
 */
function bx_industries_render_faqs() {
	$defaults = array(
		array(
			'q' => 'Do you only work with these four industries?',
			'a' => "No — these are the sectors we go deepest in, but our strategy-first framework adapts to most growth-stage businesses. We've worked across 15+ industries. Tell us about yours on a free call.",
		),
		array(
			'q' => 'Why does industry experience matter for marketing?',
			'a' => 'Because how a customer buys a flat is nothing like how they buy a skincare product or choose a school. Working with a sector-specific marketing agency in Jaipur means we skip the learning curve — the right channels, message and metrics from day one, not month three.',
		),
		array(
			'q' => 'Can you handle industry-specific compliance?',
			'a' => "Yes. We're mindful of sector rules — RERA disclosures in real estate, ethical medical advertising for hospitals, honest education claims for schools and product compliance in D2C — so your brand stays credible and safe.",
		),
		array(
			'q' => 'Will my competitors get the same playbook?',
			'a' => "No. Sector know-how is shared; your strategy, positioning and creative are built uniquely around your brand and goals. We don't run identical campaigns for competing clients.",
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'industries_faq_items' ) ) {
		while ( have_rows( 'industries_faq_items' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'question' ),
				'a' => (string) get_sub_field( 'answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		$open     = 0 === $i ? ' open' : '';
		$expanded = 0 === $i ? 'true' : 'false';
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="%s">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			$open,
			$expanded,
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}
