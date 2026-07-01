<?php
/**
 * ACF field group + render helpers for the Services page template
 * (page-services.php). Registered in PHP so it is version-controlled and not
 * DB-only, mirroring inc/acf-fields.php.
 *
 * Defaults mirror the original hard-coded content; the template also falls back
 * to the same defaults via bx_field()/?: so nothing ever blanks if ACF is off.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_services' );
/**
 * Register the Services page field group.
 */
function bx_acf_services() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_services',
			'title'      => 'Services Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-services.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_services_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_services_hero_crumb',
					'name'          => 'services_hero_crumb',
					'label'         => 'Breadcrumb — current page label',
					'type'          => 'text',
					'default_value' => 'Services',
				),
				array(
					'key'           => 'f_services_hero_badge',
					'name'          => 'services_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Strategy · Creative · Performance — under one roof',
				),
				array(
					'key'           => 'f_services_hero_heading_a',
					'name'          => 'services_hero_heading_a',
					'label'         => 'Heading — line 1',
					'type'          => 'text',
					'default_value' => 'Services that build',
				),
				array(
					'key'           => 'f_services_hero_heading_b',
					'name'          => 'services_hero_heading_b',
					'label'         => 'Heading — line 2 (plain part)',
					'type'          => 'text',
					'default_value' => 'brands &',
				),
				array(
					'key'           => 'f_services_hero_heading_accent',
					'name'          => 'services_hero_heading_accent',
					'label'         => 'Heading — line 2 (accent part)',
					'type'          => 'text',
					'default_value' => 'drive growth',
				),
				array(
					'key'           => 'f_services_hero_sub',
					'name'          => 'services_hero_sub',
					'label'         => 'Subheading',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Digital marketing services in Jaipur done right — from brand identity to SEO, ads and product design. Seven core services, one accountable team, and dashboards that prove the work.',
				),
				array(
					'key'           => 'f_services_hero_btn',
					'name'          => 'services_hero_btn',
					'label'         => 'Hero button',
					'instructions'  => 'Default points to #services-list.',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'          => 'f_services_hero_stats',
					'name'         => 'services_hero_stats',
					'label'        => 'Stat band',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add stat',
					'sub_fields'   => array(
						array( 'key' => 'f_services_stat_num', 'name' => 'number', 'label' => 'Number (counts up from 0)', 'type' => 'number' ),
						array( 'key' => 'f_services_stat_suffix', 'name' => 'suffix', 'label' => 'Suffix (e.g. + or .9★)', 'type' => 'text' ),
						array( 'key' => 'f_services_stat_label', 'name' => 'label', 'label' => 'Label', 'type' => 'text' ),
					),
				),

				// ---------------- SERVICES LIST TAB ----------------
				array(
					'key'   => 'tab_services_list',
					'label' => 'Services list',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_services_list_eyebrow',
					'name'          => 'services_list_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'What we do',
				),
				array(
					'key'           => 'f_services_list_heading',
					'name'          => 'services_list_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Digital marketing services in Jaipur, built as one growth engine',
				),
				array(
					'key'           => 'f_services_list_intro',
					'name'          => 'services_list_intro',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Pick one or combine them. As a digital marketing company in Jaipur, every engagement is strategy-led, creatively crafted and measured against outcomes that matter to your business — SEO, social media, PPC, branding and web design under one roof.',
				),
				array(
					'key'     => 'f_services_list_note',
					'label'   => 'Cards note',
					'type'    => 'message',
					'message' => 'The 7 service cards below the intro are part of the design (each links to its own detailed service page). Their layout varies card-to-card, so they are not editable here — edit the heading and intro above.',
				),

				// ---------------- PROCESS TAB ----------------
				array(
					'key'   => 'tab_services_process',
					'label' => 'Process',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_services_process_eyebrow',
					'name'          => 'services_process_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'How we deliver',
				),
				array(
					'key'           => 'f_services_process_heading',
					'name'          => 'services_process_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A clear path from brief to results',
				),
				array(
					'key'          => 'f_services_process_steps',
					'name'         => 'services_process_steps',
					'label'        => 'Process steps',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array( 'key' => 'f_services_step_num', 'name' => 'number', 'label' => 'Number', 'type' => 'text' ),
						array( 'key' => 'f_services_step_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
						array( 'key' => 'f_services_step_text', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 3 ),
					),
				),

				// ---------------- WHY US TAB ----------------
				array(
					'key'   => 'tab_services_whyus',
					'label' => 'Why us',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_services_whyus_img',
					'name'          => 'services_whyus_img',
					'label'         => 'Photo (team / studio)',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
				),
				array(
					'key'           => 'f_services_whyus_eyebrow',
					'name'          => 'services_whyus_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Why teams choose us',
				),
				array(
					'key'           => 'f_services_whyus_heading',
					'name'          => 'services_whyus_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Expertise you can verify, results you can measure',
				),
				array(
					'key'           => 'f_services_whyus_text',
					'name'          => 'services_whyus_text',
					'label'         => 'Paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'A digital marketing agency in Jaipur since 2026, we pair deep local market knowledge with a senior, in-house team across strategy, design and growth — result-driven digital marketing Jaipur founders can actually measure, because we report on everything.',
				),
				array(
					'key'          => 'f_services_whyus_cards',
					'name'         => 'services_whyus_cards',
					'label'        => 'Why-us cards',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array( 'key' => 'f_services_whyus_card_icon', 'name' => 'icon', 'label' => 'Icon (Iconify name)', 'type' => 'text' ),
						array( 'key' => 'f_services_whyus_card_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
						array( 'key' => 'f_services_whyus_card_text', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 2 ),
					),
				),

				// ---------------- TESTIMONIALS TAB ----------------
				array(
					'key'   => 'tab_services_testi',
					'label' => 'Testimonials',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_services_testi_eyebrow',
					'name'          => 'services_testi_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Trusted by founders',
				),
				array(
					'key'           => 'f_services_testi_heading',
					'name'          => 'services_testi_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'What clients say',
				),
				array(
					'key'          => 'f_services_testi_items',
					'name'         => 'services_testi_items',
					'label'        => 'Testimonials',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add testimonial',
					'sub_fields'   => array(
						array( 'key' => 'f_services_testi_quote', 'name' => 'quote', 'label' => 'Quote', 'type' => 'textarea', 'rows' => 3 ),
						array( 'key' => 'f_services_testi_initial', 'name' => 'initial', 'label' => 'Avatar initial', 'type' => 'text' ),
						array( 'key' => 'f_services_testi_name', 'name' => 'name', 'label' => 'Name', 'type' => 'text' ),
						array( 'key' => 'f_services_testi_company', 'name' => 'company', 'label' => 'Company', 'type' => 'text' ),
					),
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_services_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_services_faq_eyebrow',
					'name'          => 'services_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_services_faq_heading',
					'name'          => 'services_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Service questions, answered',
				),
				array(
					'key'          => 'f_services_faq_items',
					'name'         => 'services_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array( 'key' => 'f_services_faq_q', 'name' => 'question', 'label' => 'Question', 'type' => 'text' ),
						array( 'key' => 'f_services_faq_a', 'name' => 'answer', 'label' => 'Answer', 'type' => 'textarea', 'rows' => 3 ),
					),
				),

				// ---------------- CTA TAB ----------------
				array(
					'key'   => 'tab_services_cta',
					'label' => 'Call to action',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_services_cta_heading',
					'name'          => 'services_cta_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Not sure which service you need?',
				),
				array(
					'key'           => 'f_services_cta_text',
					'name'          => 'services_cta_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Tell us your goal. We'll map the right services, share quick wins and a costed roadmap — free, and with no obligation.",
				),
				array(
					'key'           => 'f_services_cta_btn1',
					'name'          => 'services_cta_btn1',
					'label'         => 'Primary button',
					'instructions'  => 'Default: Set up a discovery call → /contact-us/',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_services_cta_btn2',
					'name'          => 'services_cta_btn2',
					'label'         => 'Secondary button',
					'instructions'  => 'Default: See our work → /portfolio/',
					'type'          => 'link',
					'return_format' => 'array',
				),
			),
		)
	);
}

/**
 * Render the Services hero stat band from ACF (services_hero_stats), falling
 * back to the original four stats when empty / ACF off.
 */
function bx_services_render_stats() {
	$defaults = array(
		array( 'number' => 100, 'suffix' => '%', 'label' => 'In-house team' ),
		array( 'number' => 50, 'suffix' => '+', 'label' => 'Brands served' ),
		array( 'number' => 100, 'suffix' => '+', 'label' => 'Projects delivered' ),
		array( 'number' => 4, 'suffix' => '.9★', 'label' => 'Average rating' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'services_hero_stats' ) ) {
		while ( have_rows( 'services_hero_stats' ) ) {
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
 * Render the Services "Process" step cards from ACF (services_process_steps),
 * falling back to the original four steps when empty / ACF off.
 */
function bx_services_render_process() {
	$defaults = array(
		array( 'number' => '01', 'title' => 'Discover', 'text' => 'Audits, audience and competitor research to find the real opportunity.' ),
		array( 'number' => '02', 'title' => 'Strategise', 'text' => 'A costed roadmap — channels, messaging and KPIs agreed up front.' ),
		array( 'number' => '03', 'title' => 'Create &amp; launch', 'text' => 'Design, build and ship work that looks sharp and performs hard.' ),
		array( 'number' => '04', 'title' => 'Optimise', 'text' => 'Read the data, double down on what works, report transparently.' ),
	);

	$rows = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'services_process_steps' ) ) {
		while ( have_rows( 'services_process_steps' ) ) {
			the_row();
			$rows[] = array(
				'number' => esc_html( (string) get_sub_field( 'number' ) ),
				'title'  => esc_html( (string) get_sub_field( 'title' ) ),
				'text'   => esc_html( (string) get_sub_field( 'text' ) ),
			);
		}
	}
	if ( ! $rows ) {
		// Defaults already contain pre-escaped HTML entities (e.g. &amp;).
		$rows = $defaults;
	}

	foreach ( $rows as $i => $p ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<div class="reveal rounded-xl2 bg-paper border border-line p-7"%s><span class="font-display text-5xl tt text-accent/25">%s</span><h3 class="font-display text-xl tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">%s</p></div>',
			$delay,
			$p['number'],
			$p['title'],
			$p['text']
		);
	}
}

/**
 * Render the Services "Why us" feature cards from ACF (services_whyus_cards),
 * falling back to the original four cards when empty / ACF off.
 */
function bx_services_render_whyus_cards() {
	$defaults = array(
		array( 'icon' => 'lucide:award', 'title' => '50+ brands, senior team', 'text' => 'Proven across real estate, schools and D2C.' ),
		array( 'icon' => 'lucide:users', 'title' => 'Senior, in-house team', 'text' => 'No outsourcing — strategy, design and dev under one roof.' ),
		array( 'icon' => 'lucide:bar-chart-3', 'title' => 'Transparent reporting', 'text' => "Clear monthly dashboards — you always see what's working." ),
		array( 'icon' => 'lucide:shield-check', 'title' => 'White-hat &amp; ethical', 'text' => 'Sustainable methods that protect your brand long-term.' ),
	);

	$rows = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'services_whyus_cards' ) ) {
		while ( have_rows( 'services_whyus_cards' ) ) {
			the_row();
			$rows[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'text' ) ),
			);
		}
	}
	if ( ! $rows ) {
		// Defaults already contain pre-escaped HTML entities and a known-safe icon.
		foreach ( $defaults as $d ) {
			$rows[] = array(
				'icon'  => $d['icon'],
				'title' => $d['title'],
				'text'  => esc_html( $d['text'] ),
			);
		}
	}

	// Match the original per-card data-delay sequence: 0, 1, 1, 2.
	$delays = array( '', ' data-delay="1"', ' data-delay="1"', ' data-delay="2"' );
	foreach ( array_values( $rows ) as $i => $c ) {
		$delay = isset( $delays[ $i ] ) ? $delays[ $i ] : ' data-delay="2"';
		printf(
			'<div class="reveal lift rounded-2xl border border-line p-6"%s><span class="text-accent text-2xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$delay,
			$c['icon'],
			$c['title'],
			$c['text']
		);
	}
}

/**
 * Render the Services testimonial cards from ACF (services_testi_items),
 * falling back to the original three testimonials when empty / ACF off.
 */
function bx_services_render_testimonials() {
	$defaults = array(
		array( 'quote' => '"BoostronixX completely transformed our brand identity. We saw a 40% increase in engagement within the first three months."', 'initial' => 'A', 'name' => 'Arjun Khanna', 'company' => 'UrbanCraft' ),
		array( 'quote' => '"They don\'t just deliver services; they become your growth partners. Our customer recall has improved significantly."', 'initial' => 'K', 'name' => 'Kavita Nair', 'company' => 'GreenLeaf Organics' ),
		array( 'quote' => '"Data-driven strategy with creative excellence. Our website traffic doubled and conversions improved by 35% in six months."', 'initial' => 'R', 'name' => 'Rajesh Menon', 'company' => 'TechFlow Solutions' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'services_testi_items' ) ) {
		while ( have_rows( 'services_testi_items' ) ) {
			the_row();
			$items[] = array(
				'quote'   => (string) get_sub_field( 'quote' ),
				'initial' => (string) get_sub_field( 'initial' ),
				'name'    => (string) get_sub_field( 'name' ),
				'company' => (string) get_sub_field( 'company' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $t ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<figure class="reveal rounded-xl2 bg-white/5 border border-white/10 p-7"%s><div class="flex gap-0.5 text-sm star">★★★★★</div><blockquote class="mt-4 text-paper/90 leading-relaxed">%s</blockquote><figcaption class="mt-5 flex items-center gap-3"><span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display">%s</span><span><span class="block font-medium">%s</span><span class="block text-xs text-paper/50">%s</span></span></figcaption></figure>',
			$delay,
			esc_html( $t['quote'] ),
			esc_html( $t['initial'] ),
			esc_html( $t['name'] ),
			esc_html( $t['company'] )
		);
	}
}

/**
 * Render the Services FAQ accordion items from ACF (services_faq_items),
 * falling back to the original default questions when empty / ACF off.
 */
function bx_services_render_faqs() {
	$defaults = array(
		array(
			'q' => 'Which services should I start with?',
			'a' => "It depends on your goal. New brand? Start with brand consulting and a website. Need leads now? SEO and performance marketing. On a free strategy call we'll recommend the right mix of digital marketing services in Jaipur for your stage and budget — including 360 degree digital marketing Jaipur growth plans when you want every channel pulling together.",
		),
		array(
			'q' => 'Do you offer affordable packages, retainers or one-off projects?',
			'a' => 'All three. One-offs suit branding or a website build; retainers work best for SEO, social and ads where momentum compounds. We also offer affordable digital marketing services in Jaipur and tiered digital marketing packages in Jaipur scoped to your budget — every price agreed in writing up front, no surprises.',
		),
		array(
			'q' => 'Will I get regular reporting?',
			'a' => 'Yes. You get clear, transparent monthly reports tied to the KPIs we agreed — traffic, rankings, leads, ROAS — plus a dedicated point of contact who keeps things moving.',
		),
		array(
			'q' => 'Do you work with businesses outside Jaipur?',
			'a' => "Absolutely. We're based in Jaipur but work with clients across India and internationally — most collaboration happens over calls, shared docs and live dashboards.",
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'services_faq_items' ) ) {
		while ( have_rows( 'services_faq_items' ) ) {
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
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}
