<?php
/**
 * ACF field group + render helpers for the FAQ page template (page-faq.php).
 *
 * Defaults mirror the original hard-coded content; the template also falls back
 * to the same defaults via bx_field()/the render helper so nothing ever blanks
 * if ACF is off.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_faq' );
/**
 * Register the FAQ page field group.
 */
function bx_acf_faq() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_faq',
			'title'      => 'FAQ Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-faq.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_faq_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_faq_hero_crumb',
					'name'          => 'faq_hero_crumb',
					'label'         => 'Breadcrumb label',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_faq_hero_badge',
					'name'          => 'faq_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Help Center',
				),
				array(
					'key'           => 'f_faq_hero_heading',
					'name'          => 'faq_hero_heading',
					'label'         => 'Heading (text before the accent word)',
					'type'          => 'text',
					'default_value' => 'How can we',
				),
				array(
					'key'           => 'f_faq_hero_heading_accent',
					'name'          => 'faq_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'help?',
				),
				array(
					'key'           => 'f_faq_hero_sub',
					'name'          => 'faq_hero_subheading',
					'label'         => 'Subheading',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Common questions about our digital marketing services in Jaipur —\n                  from pricing and process to SEO and timelines. Browse by category, or\n                  search below. Still stuck? We're one message away.",
				),
				array(
					'key'           => 'f_faq_hero_search',
					'name'          => 'faq_hero_search_placeholder',
					'label'         => 'Search box placeholder',
					'type'          => 'text',
					'default_value' => 'Search e.g. pricing, SEO, timeline…',
				),

				// ---------------- FAQ LIST TAB ----------------
				array(
					'key'   => 'tab_faq_list',
					'label' => 'FAQ list',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_faq_list_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The category filter chips (All / Services / Pricing / Process / SEO &amp; Ads / Support) are part of the design and stay fixed. Each question below is tagged with a category so it appears under the right chip.',
				),
				array(
					'key'          => 'f_faqpage_items',
					'name'         => 'faq_page_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'           => 'f_faq_item_cat',
							'name'          => 'category',
							'label'         => 'Category',
							'type'          => 'select',
							'choices'       => array(
								'services' => 'Services',
								'pricing'  => 'Pricing',
								'process'  => 'Process',
								'seo'      => 'SEO & Ads',
								'support'  => 'Support',
							),
							'default_value' => 'services',
							'allow_null'    => 0,
							'multiple'      => 0,
							'ui'            => 0,
							'return_format' => 'value',
						),
						array(
							'key'   => 'f_faq_item_q',
							'name'  => 'question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_faq_item_a',
							'name'  => 'answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- CTA TAB ----------------
				array(
					'key'   => 'tab_faq_cta',
					'label' => 'Still have a question',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_faq_cta_heading',
					'name'          => 'faq_cta_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Still have a question?',
				),
				array(
					'key'           => 'f_faq_cta_text',
					'name'          => 'faq_cta_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Can't find what you're looking for? Talk to a human — we usually\n                reply within 24 hours.",
				),
				array(
					'key'           => 'f_faq_cta_button',
					'name'          => 'faq_cta_button',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_faq_cta_email',
					'name'          => 'faq_cta_email',
					'label'         => 'Email (for the "Email us" button)',
					'type'          => 'email',
					'default_value' => 'boostronixx@gmail.com',
				),
			),
		)
	);
}

/**
 * Render the FAQ accordion list for page-faq.php from ACF (faq_page_items
 * repeater), falling back to the original default questions when the repeater
 * is empty / ACF off. Markup mirrors the original cards byte-for-byte so the
 * JS chip-filter / search keeps working.
 */
function bx_faq_render_items() {
	$defaults = array(
		array( 'cat' => 'services', 'q' => 'Which services does BoostronixX offer?', 'a' => 'Brand consulting, digital marketing, SEO, social media marketing, performance marketing, UI/UX design and website design — strategy through execution, all in-house.' ),
		array( 'cat' => 'services', 'q' => 'Do you work with businesses outside Jaipur?', 'a' => "Absolutely. We're based in Jaipur but work with clients across India and internationally — most collaboration happens over calls, shared docs and live dashboards." ),
		array( 'cat' => 'services', 'q' => 'Which industries do you specialise in?', 'a' => 'Real estate, schools, D2C eCommerce and healthcare — though our strategy-first framework adapts to most growth-stage businesses.' ),
		array( 'cat' => 'pricing', 'q' => 'How much does a project cost?', 'a' => "Every engagement is scoped to your goals, so there's no one-size price. After a free strategy call we send a clear proposal with deliverables and pricing — no hidden costs, no surprises." ),
		array( 'cat' => 'pricing', 'q' => 'Do you offer monthly retainers or one-off projects?', 'a' => 'Both. One-offs suit projects like branding or a website build; retainers work best for ongoing SEO, social and performance marketing where momentum compounds.' ),
		array( 'cat' => 'pricing', 'q' => 'Is the first strategy call really free?', 'a' => 'Yes. The first call is free and no-obligation. We review your goals, share quick wins and propose a roadmap — whether or not you work with us.' ),
		array( 'cat' => 'process', 'q' => 'How do we get started?', 'a' => "Book a free strategy call on +91 80582 12202 or email boostronixx@gmail.com. We'll review your goals, share quick wins and propose a roadmap." ),
		array( 'cat' => 'process', 'q' => 'How long does a typical project take?', 'a' => 'A brand identity usually takes 3–5 weeks and a website 4–8 weeks, depending on scope. Marketing campaigns build momentum over the first 60–90 days. We share a clear timeline in your proposal.' ),
		array( 'cat' => 'process', 'q' => 'Will I have one point of contact?', 'a' => 'Yes. You get a dedicated point of contact who keeps things moving and loops in the right specialists — you never have to chase a faceless inbox.' ),
		array( 'cat' => 'seo', 'q' => 'How long until SEO shows results?', 'a' => 'SEO is a compounding game. Early movement often appears in 8–12 weeks, with meaningful ranking and traffic gains across 4–6 months. We report progress transparently the whole way.' ),
		array( 'cat' => 'seo', 'q' => 'Do you guarantee a #1 Google ranking?', 'a' => "No honest agency can guarantee a specific rank — Google's algorithm isn't ours to control. What we guarantee is a sound, white-hat strategy and clear reporting on real progress." ),
		array( 'cat' => 'seo', 'q' => 'Do you manage the ad budget for us?', 'a' => 'Yes. We plan, run and optimise Meta and Google Ads against your goals — A/B testing creatives and audiences — and report ROAS, CPL and leads so every rupee is accountable.' ),
		array( 'cat' => 'support', 'q' => 'How quickly do you reply?', 'a' => 'We aim to respond to every enquiry within 24 hours on business days (Mon–Fri, 9 AM–7 PM IST). Active clients get faster, dedicated turnaround.' ),
		array( 'cat' => 'support', 'q' => "Who owns the work once it's delivered?", 'a' => 'You do. On final payment, full rights to delivered brand assets, designs and website transfer to you, along with source files where applicable.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'faq_page_items' ) ) {
		while ( have_rows( 'faq_page_items' ) ) {
			the_row();
			$items[] = array(
				'cat' => (string) get_sub_field( 'category' ),
				'q'   => (string) get_sub_field( 'question' ),
				'a'   => (string) get_sub_field( 'answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s" data-cat="%s">
              <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">
                <span class="q">%s</span>
                <span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span>
              </button>
              <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed a">
                %s
              </div></div>
            </div>',
			0 === $i ? ' open' : '',
			esc_attr( $it['cat'] ),
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}
