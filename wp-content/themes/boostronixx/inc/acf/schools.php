<?php
/**
 * ACF field group for the Schools page template (page-schools.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * Every field key and name is prefixed with `schools_` for global uniqueness.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_schools' );
/**
 * Register the Schools field group.
 */
function bx_acf_schools() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_schools',
			'title'      => 'Schools Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-schools.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_schools_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_hero_badge',
					'name'          => 'schools_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Industry · Schools & Admissions',
				),
				array(
					'key'           => 'f_schools_hero_heading_a',
					'name'          => 'schools_hero_heading_a',
					'label'         => 'Heading — line 1',
					'type'          => 'text',
					'default_value' => 'Fill every seat,',
				),
				array(
					'key'           => 'f_schools_hero_heading_b',
					'name'          => 'schools_hero_heading_b',
					'label'         => 'Heading — line 2 (before accent)',
					'type'          => 'text',
					'default_value' => 'every ',
				),
				array(
					'key'           => 'f_schools_hero_heading_accent',
					'name'          => 'schools_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'admission season',
				),
				array(
					'key'           => 'f_schools_hero_text',
					'name'          => 'schools_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As a school marketing agency in Jaipur, we help pre-schools, K-12, CBSE, ICSE, boarding and international schools earn parent trust and turn "best school near me" into admission enquiries, campus visits and confirmed admissions.',
				),
				array(
					'key'           => 'f_schools_hero_cta1',
					'name'          => 'schools_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_schools_hero_cta2',
					'name'          => 'schools_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_schools_hero_note',
					'name'          => 'schools_hero_note',
					'label'         => 'Handwritten note',
					'type'          => 'text',
					'default_value' => 'built to be found wherever parents look — Google, Maps & AI',
				),

				// ---------------- ADMISSION JOURNEY TAB ----------------
				array(
					'key'     => 'f_schools_journey_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated school-bus route (the 5 stops) is part of the design. Here you can edit the section eyebrow, heading and the two paragraphs around it.',
				),
				array(
					'key'   => 'tab_schools_journey',
					'label' => 'Admission journey',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_journey_eyebrow',
					'name'          => 'schools_journey_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The admission journey',
				),
				array(
					'key'           => 'f_schools_journey_heading',
					'name'          => 'schools_journey_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'From "best school near me" to a confirmed seat',
				),
				array(
					'key'           => 'f_schools_journey_text',
					'name'          => 'schools_journey_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Every parent in the city rides the same route. Our admission marketing in Jaipur makes sure your school is the destination at every single stop — and drives them all the way to a confirmed seat.',
				),
				array(
					'key'           => 'f_schools_journey_footnote',
					'name'          => 'schools_journey_footnote',
					'label'         => 'Footer note',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'We engineer every stop — discovery, enquiry, visit and follow-up — so fewer parents drop off and more reach admission.',
				),

				// ---------------- TIMETABLE TAB ----------------
				array(
					'key'   => 'tab_schools_timetable',
					'label' => 'Timetable',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_timetable_eyebrow',
					'name'          => 'schools_timetable_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Your growth timetable',
				),
				array(
					'key'           => 'f_schools_timetable_heading',
					'name'          => 'schools_timetable_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'What a school marketing agency in Jaipur runs for you',
				),
				array(
					'key'           => 'f_schools_timetable_text',
					'name'          => 'schools_timetable_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Think of it as a school day for your admissions. Each "period" is a capability we run for you — six together cover the full sweep of education digital marketing in Jaipur. Tap any to see the service behind it.',
				),
				array(
					'key'           => 'f_schools_timetable_pill',
					'name'          => 'schools_timetable_pill',
					'label'         => 'Pill text',
					'type'          => 'text',
					'default_value' => 'One team, one timetable, full classrooms',
				),
				array(
					'key'          => 'f_schools_timetable_items',
					'name'         => 'schools_timetable_periods',
					'label'        => 'Periods',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:palette).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add period',
					'sub_fields'   => array(
						array(
							'key'   => 'f_schools_period_num',
							'name'  => 'schools_period_num',
							'label' => 'Period label (e.g. P1)',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_period_icon',
							'name'  => 'schools_period_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_period_title',
							'name'  => 'schools_period_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_period_text',
							'name'  => 'schools_period_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
						array(
							'key'           => 'f_schools_period_link',
							'name'          => 'schools_period_link',
							'label'         => 'Link',
							'type'          => 'link',
							'return_format' => 'array',
						),
					),
				),

				// ---------------- SCHOOL TYPES TAB ----------------
				array(
					'key'   => 'tab_schools_types',
					'label' => 'School types',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_types_eyebrow',
					'name'          => 'schools_types_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Every kind of school',
				),
				array(
					'key'           => 'f_schools_types_heading',
					'name'          => 'schools_types_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Whatever your campus, we fill it',
				),
				array(
					'key'          => 'f_schools_types_items',
					'name'         => 'schools_types',
					'label'        => 'School type cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:baby).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add school type',
					'sub_fields'   => array(
						array(
							'key'   => 'f_schools_type_icon',
							'name'  => 'schools_type_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_type_title',
							'name'  => 'schools_type_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_type_text',
							'name'  => 'schools_type_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
					),
				),

				// ---------------- PROOF TAB ----------------
				array(
					'key'     => 'f_schools_proof_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The 4 noticeboard pins (animated counters, seat bar and the handwritten parent note) are part of the design. Here you can edit the section eyebrow and heading.',
				),
				array(
					'key'   => 'tab_schools_proof',
					'label' => 'Proof',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_proof_eyebrow',
					'name'          => 'schools_proof_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'On the noticeboard',
				),
				array(
					'key'           => 'f_schools_proof_heading',
					'name'          => 'schools_proof_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Results worth pinning up',
				),

				// ---------------- PARENTS ASK AI TAB ----------------
				array(
					'key'     => 'f_schools_ai_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => "The parent's phone mock-up is part of the design. Here you can edit the eyebrow, heading, paragraph, the three bullet points and the button. (The paragraph keeps its bold inline phrase from the template.)",
				),
				array(
					'key'   => 'tab_schools_ai',
					'label' => 'Parents ask AI',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_ai_eyebrow',
					'name'          => 'schools_ai_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'AEO · GEO · AI Overviews',
				),
				array(
					'key'           => 'f_schools_ai_heading',
					'name'          => 'schools_ai_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Parents ask AI before they ask you',
				),
				array(
					'key'           => 'f_schools_ai_text',
					'name'          => 'schools_ai_text',
					'label'         => 'Lead-in sentence',
					'instructions'  => 'The bold closing phrase ("your school is the answer — named, cited and trusted.") is kept in the template because it contains inline emphasis markup.',
					'type'          => 'text',
					'default_value' => 'More parents now start admissions research inside ChatGPT, Perplexity or Google\'s AI Overview. We make sure that when they ask,',
				),
				array(
					'key'           => 'f_schools_ai_points',
					'name'          => 'schools_ai_points',
					'label'         => 'Bullet points',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Answer-ready content for board, area & grade queries\nSchema & entities so AI tools cite your school\nA review profile that earns the click",
				),
				array(
					'key'           => 'f_schools_ai_button',
					'name'          => 'schools_ai_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_schools_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_faq_eyebrow',
					'name'          => 'schools_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'School marketing FAQ',
				),
				array(
					'key'           => 'f_schools_faq_heading',
					'name'          => 'schools_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Your questions, answered',
				),
				array(
					'key'          => 'f_schools_faq_items',
					'name'         => 'schools_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_schools_faq_q',
							'name'  => 'schools_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_faq_a',
							'name'  => 'schools_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED + CTA TAB ----------------
				array(
					'key'   => 'tab_schools_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_schools_related_eyebrow',
					'name'          => 'schools_related_eyebrow',
					'label'         => 'Explore more — eyebrow',
					'type'          => 'text',
					'default_value' => 'Explore more',
				),
				array(
					'key'          => 'f_schools_related_items',
					'name'         => 'schools_related',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:target).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add related card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_schools_related_icon',
							'name'  => 'schools_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_related_title',
							'name'  => 'schools_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_schools_related_meta',
							'name'  => 'schools_related_meta',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_schools_related_link',
							'name'          => 'schools_related_link',
							'label'         => 'Link',
							'type'          => 'link',
							'return_format' => 'array',
						),
					),
				),
				array(
					'key'           => 'f_schools_cta_heading',
					'name'          => 'schools_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => "Let's fill your next admission season",
				),
				array(
					'key'           => 'f_schools_cta_text',
					'name'          => 'schools_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Tell us about your school — we'll map a plan to bring more admission enquiries, school visits and confirmed seats. Free, no obligation.",
				),
				array(
					'key'           => 'f_schools_cta_button',
					'name'          => 'schools_cta_button',
					'label'         => 'CTA — primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_schools_cta_phone',
					'name'          => 'schools_cta_phone',
					'label'         => 'Phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_schools_cta_phone_href',
					'name'          => 'schools_cta_phone_href',
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
 * Render the Schools "Timetable" period rows from ACF (schools_timetable_periods
 * repeater), falling back to the original six defaults when empty / ACF off.
 */
function bx_schools_render_periods() {
	$defaults = array(
		array( 'num' => 'P1', 'icon' => 'lucide:palette', 'title' => 'Brand & identity', 'text' => 'School branding in Jaipur parents instantly trust — name, crest, story & tone.', 'url' => '/services/brand-consulting/' ),
		array( 'num' => 'P2', 'icon' => 'lucide:map-pin', 'title' => 'Local SEO & Maps', 'text' => 'School SEO in Jaipur that owns "best CBSE school near me" and the Google map pack.', 'url' => '/services/seo-services/' ),
		array( 'num' => 'P3', 'icon' => 'lucide:target', 'title' => 'Admission campaigns', 'text' => 'Admission campaigns in Jaipur on Meta & Google ads, timed to the season, tuned for quality enquiries.', 'url' => '/services/performance-marketing/' ),
		array( 'num' => 'P4', 'icon' => 'lucide:monitor-smartphone', 'title' => 'Website & enquiry', 'text' => 'A fast site with virtual tour, facilities & a one-tap enquiry form.', 'url' => '/services/website-design/' ),
		array( 'num' => 'P5', 'icon' => 'lucide:star', 'title' => 'Reviews & social', 'text' => 'Events, achievements & reviews that make your reputation visible.', 'url' => '/services/social-media-marketing/' ),
		array( 'num' => 'P6', 'icon' => 'lucide:repeat', 'title' => 'Nurture & recall', 'text' => 'WhatsApp follow-ups & reminders that turn enquiries into seats.', 'url' => '/services/digital-marketing/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'schools_timetable_periods' ) ) {
		while ( have_rows( 'schools_timetable_periods' ) ) {
			the_row();
			$link = get_sub_field( 'schools_period_link' );
			$url  = ( is_array( $link ) && ! empty( $link['url'] ) ) ? $link['url'] : '';
			$items[] = array(
				'num'   => (string) get_sub_field( 'schools_period_num' ),
				'icon'  => (string) get_sub_field( 'schools_period_icon' ),
				'title' => (string) get_sub_field( 'schools_period_title' ),
				'text'  => (string) get_sub_field( 'schools_period_text' ),
				'url'   => $url,
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $p ) {
		$delay = ( 0 === $i % 3 ) ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		$url   = '' !== $p['url'] ? $p['url'] : '#';
		printf(
			'<a href="%s" class="period reveal flex items-center gap-4 sm:gap-6 p-5 sm:p-6 bg-paper"%s><span class="shrink-0 grid place-items-center h-12 w-12 rounded-xl bg-ink text-paper font-display tt">%s</span><span class="bell text-accent text-2xl shrink-0" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display text-lg tt block">%s</span><span class="text-ink-soft text-sm">%s</span></span><iconify-icon icon="lucide:arrow-up-right" class="text-ink-soft text-xl shrink-0" aria-hidden="true"></iconify-icon></a>',
			esc_url( $url ),
			$delay, // Known-safe attribute fragment built above.
			esc_html( $p['num'] ),
			esc_attr( $p['icon'] ),
			esc_html( $p['title'] ),
			esc_html( $p['text'] )
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the Schools "School types" cards from ACF (schools_types repeater),
 * falling back to the original six defaults when empty / ACF off.
 */
function bx_schools_render_types() {
	$defaults = array(
		array( 'icon' => 'lucide:baby', 'title' => 'Pre-schools & daycare', 'text' => 'Warmth, safety & trust that fills every batch.' ),
		array( 'icon' => 'lucide:school', 'title' => 'CBSE & ICSE day schools', 'text' => 'CBSE school marketing and school SEO in Jaipur that wins local search and admission enquiries.' ),
		array( 'icon' => 'lucide:book-open', 'title' => 'State-board schools', 'text' => 'Local enquiries that convert to seats.' ),
		array( 'icon' => 'lucide:bed', 'title' => 'Boarding & residential', 'text' => 'Trust & reach across cities.' ),
		array( 'icon' => 'lucide:globe', 'title' => 'International & IB', 'text' => 'Premium positioning for discerning parents.' ),
		array( 'icon' => 'lucide:building-2', 'title' => 'School groups & chains', 'text' => 'Fill seats across every campus, one brand.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'schools_types' ) ) {
		while ( have_rows( 'schools_types' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'schools_type_icon' ),
				'title' => (string) get_sub_field( 'schools_type_title' ),
				'text'  => (string) get_sub_field( 'schools_type_text' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $t ) {
		$delay = ( 0 === $i % 3 ) ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		printf(
			'<div class="tcard reveal rounded-xl2 border border-line bg-paper p-6"%s><span class="roof block h-1.5 w-10 rounded-full bg-accent/30 mb-4 transition-colors" aria-hidden="true"></span><iconify-icon icon="%s" class="text-accent text-3xl" aria-hidden="true"></iconify-icon><h3 class="font-display text-lg tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$delay, // Known-safe attribute fragment built above.
			esc_attr( $t['icon'] ),
			esc_html( $t['title'] ),
			esc_html( $t['text'] )
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the Schools FAQ accordion items from ACF (schools_faq_items repeater),
 * falling back to the original default questions when empty / ACF off.
 */
function bx_schools_render_faqs() {
	$defaults = array(
		array(
			'q' => 'How do you market a school?',
			'a' => 'As a school marketing agency in Jaipur, we brand the school for trust, win local search with SEO/AEO/GEO and Google Business Profile for board, area and grade queries, fill admission enquiries with Meta and Google campaigns timed for the season, and make enquiring easy with a fast website and one-tap enquiry form — then nurture enquiries to confirmed admissions.',
		),
		array(
			'q' => 'How do you increase admission enquiries?',
			'a' => 'We target parents by area, board and grade with high-intent campaigns, capture them with clear landing pages and a simple enquiry form, and optimise toward school visits rather than raw form-fills. WhatsApp follow-ups and visit reminders convert enquiries into applications and admissions.',
		),
		array(
			'q' => 'When should we start before admission season?',
			'a' => "Ideally 3–4 months before the admission window opens, so we can build awareness and reviews early, warm up campaigns, and capture parents in the research phase — making your school top of mind when they're ready to enquire and visit.",
		),
		array(
			'q' => 'Which channels work best for schools?',
			'a' => "Effective education digital marketing in Jaipur blends Google Search and Google Ads with the map pack for near-me queries, Meta ads for awareness and lead-gen among local parents, a strong review profile for trust, and Instagram/YouTube for events and campus life. The mix depends on whether you're a pre-school, day school or boarding school.",
		),
		array(
			'q' => 'Do you build school websites with enquiry forms?',
			'a' => 'Yes — our website and UI/UX teams build fast, SEO-ready school websites with virtual tours, faculty and facilities, fee and curriculum details, and a one-tap admission enquiry/apply form.',
		),
		array(
			'q' => 'Do you also help with school management software?',
			'a' => 'Yes. Beyond marketing, we designed Edoovi — an AI-powered school ERP that connects administration, teachers, parents and students with attendance, fees, transport and communication in one platform.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'schools_faq_items' ) ) {
		while ( have_rows( 'schools_faq_items' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'schools_faq_question' ),
				'a' => (string) get_sub_field( 'schools_faq_answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		$open     = 0 === $i;
		$expanded = $open ? 'true' : 'false';
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="%s">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			$open ? ' open' : '',
			$expanded,
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the Schools "Explore more" related cards from ACF (schools_related
 * repeater), falling back to the original three defaults when empty / ACF off.
 */
function bx_schools_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:target', 'title' => 'Performance Marketing', 'meta' => 'Admission campaigns', 'url' => '/services/performance-marketing/' ),
		array( 'icon' => 'lucide:layout-dashboard', 'title' => 'Mount Litera Zee School — website case study', 'meta' => 'Our case study', 'url' => '/portfolio/mount-litera-zee-school/' ),
		array( 'icon' => 'lucide:layers', 'title' => 'All Industries', 'meta' => 'Other sectors', 'url' => '/industries/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'schools_related' ) ) {
		while ( have_rows( 'schools_related' ) ) {
			the_row();
			$link = get_sub_field( 'schools_related_link' );
			$url  = ( is_array( $link ) && ! empty( $link['url'] ) ) ? $link['url'] : '';
			$items[] = array(
				'icon'  => (string) get_sub_field( 'schools_related_icon' ),
				'title' => (string) get_sub_field( 'schools_related_title' ),
				'meta'  => (string) get_sub_field( 'schools_related_meta' ),
				'url'   => $url,
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		$url   = '' !== $r['url'] ? $r['url'] : '#';
		printf(
			'<a href="%s" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>',
			esc_url( $url ),
			$delay, // Known-safe attribute fragment built above.
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['meta'] )
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}
