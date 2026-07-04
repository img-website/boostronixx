<?php
/**
 * ACF field group for the Real Estate page template (page-real-estate.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * Every field key/name is prefixed with `real_estate_` to stay globally unique
 * across all theme field groups.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_real_estate' );
/**
 * Register the Real Estate field group.
 */
function bx_acf_real_estate() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_real-estate',
			'title'      => 'Real Estate Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-real-estate.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_real_estate_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_real_estate_hero_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The property-listing card on the right of the hero is an animated design element and is not editable here.',
				),
				array(
					'key'           => 'f_real_estate_hero_badge',
					'name'          => 'real_estate_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Industry · Real Estate & Property',
				),
				array(
					'key'           => 'f_real_estate_hero_heading',
					'name'          => 'real_estate_hero_heading',
					'label'         => 'Heading (before accent)',
					'type'          => 'text',
					'default_value' => 'Sell out projects with ',
				),
				array(
					'key'           => 'f_real_estate_hero_heading_accent',
					'name'          => 'real_estate_hero_heading_accent',
					'label'         => 'Heading — accent words',
					'type'          => 'text',
					'default_value' => 'qualified buyers',
				),
				array(
					'key'           => 'f_real_estate_hero_text',
					'name'          => 'real_estate_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As a real estate digital marketing agency in Jaipur, we help builders, developers and brokers turn "3 BHK near me" into serious site visits and bookings — with project branding, local SEO and RERA-ready performance campaigns.',
				),
				array(
					'key'           => 'f_real_estate_hero_cta1',
					'name'          => 'real_estate_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_real_estate_hero_cta2_label',
					'name'          => 'real_estate_hero_cta_secondary_label',
					'label'         => 'Secondary button — label',
					'instructions'  => 'The secondary button scrolls to the "Path to possession" section (#path), so only the label is editable.',
					'type'          => 'text',
					'default_value' => 'Path to possession',
				),
				array(
					'key'           => 'f_real_estate_hero_trust1',
					'name'          => 'real_estate_hero_trust1',
					'label'         => 'Trust badge 1',
					'type'          => 'text',
					'default_value' => 'RERA-ready',
				),
				array(
					'key'           => 'f_real_estate_hero_trust2',
					'name'          => 'real_estate_hero_trust2',
					'label'         => 'Trust badge 2',
					'type'          => 'text',
					'default_value' => 'Hyper-local targeting',
				),
				array(
					'key'           => 'f_real_estate_hero_trust3',
					'name'          => 'real_estate_hero_trust3',
					'label'         => 'Trust badge 3',
					'type'          => 'text',
					'default_value' => 'Found on Google & AI',
				),

				// ---------------- PATH TO POSSESSION TAB ----------------
				array(
					'key'   => 'tab_real_estate_path',
					'label' => 'Path to possession',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_real_estate_path_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated 5-pin route map is a design element. Here you can edit the heading, intro and the closing note.',
				),
				array(
					'key'           => 'f_real_estate_path_eyebrow',
					'name'          => 'real_estate_path_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The path to possession',
				),
				array(
					'key'           => 'f_real_estate_path_heading',
					'name'          => 'real_estate_path_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'From a search to the keys in hand',
				),
				array(
					'key'           => 'f_real_estate_path_text',
					'name'          => 'real_estate_path_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'A home is a months-long journey. Smart property marketing in Jaipur maps the whole route — and keeps your project the destination from the first search to the day they get the keys.',
				),
				array(
					'key'           => 'f_real_estate_path_note_text',
					'name'          => 'real_estate_path_note_text',
					'label'         => 'Closing note',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'We optimise for site visits and bookings — not raw form-fills — and weed out the noise early.',
				),

				// ---------------- PROPERTY TYPES TAB ----------------
				array(
					'key'   => 'tab_real_estate_ptypes',
					'label' => 'Property types',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_real_estate_ptypes_eyebrow',
					'name'          => 'real_estate_ptypes_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Who we help',
				),
				array(
					'key'           => 'f_real_estate_ptypes_heading',
					'name'          => 'real_estate_ptypes_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Every kind of property business',
				),
				array(
					'key'          => 'f_real_estate_ptypes_items',
					'name'         => 'real_estate_ptypes',
					'label'        => 'Property type cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:building).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add property type',
					'sub_fields'   => array(
						array(
							'key'   => 'f_real_estate_ptype_icon',
							'name'  => 'real_estate_ptype_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_real_estate_ptype_title',
							'name'  => 'real_estate_ptype_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_real_estate_ptype_text',
							'name'  => 'real_estate_ptype_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
					),
				),

				// ---------------- SERVICES (FLOORS) TAB ----------------
				array(
					'key'   => 'tab_real_estate_floors',
					'label' => 'Services (the tower)',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_real_estate_floors_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The "growth tower" is an animated design element. You can edit the heading, intro, the tower labels and the six floor rows below.',
				),
				array(
					'key'           => 'f_real_estate_floors_eyebrow',
					'name'          => 'real_estate_floors_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'We build it floor by floor',
				),
				array(
					'key'           => 'f_real_estate_floors_heading',
					'name'          => 'real_estate_floors_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A real estate digital marketing agency in Jaipur, floor by floor',
				),
				array(
					'key'           => 'f_real_estate_floors_text',
					'name'          => 'real_estate_floors_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Like any great building, growth is constructed from the ground up. Each floor is a service — from project branding in Jaipur to real estate PPC — that stacks into one engine. Tap any floor to see how it powers your project.',
				),
				array(
					'key'           => 'f_real_estate_floors_top_label',
					'name'          => 'real_estate_floors_top_label',
					'label'         => 'Tower top label',
					'type'          => 'text',
					'default_value' => 'Now selling — the growth tower',
				),
				array(
					'key'           => 'f_real_estate_floors_count_label',
					'name'          => 'real_estate_floors_count_label',
					'label'         => 'Tower floor-count label',
					'type'          => 'text',
					'default_value' => '6 floors',
				),
				array(
					'key'           => 'f_real_estate_floors_bottom_label',
					'name'          => 'real_estate_floors_bottom_label',
					'label'         => 'Tower ground-floor label',
					'type'          => 'text',
					'default_value' => 'Ground floor: a strategy-first foundation',
				),
				array(
					'key'          => 'f_real_estate_floors_items',
					'name'         => 'real_estate_floors',
					'label'        => 'Floor rows (top floor first)',
					'instructions' => 'Leave empty to keep the current defaults. Number is the big "06"-style label; link points the row to a service page.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add floor',
					'sub_fields'   => array(
						array(
							'key'   => 'f_real_estate_floor_number',
							'name'  => 'real_estate_floor_number',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_real_estate_floor_link',
							'name'          => 'real_estate_floor_link',
							'label'         => 'Link (URL)',
							'type'          => 'text',
						),
						array(
							'key'   => 'f_real_estate_floor_title',
							'name'  => 'real_estate_floor_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_real_estate_floor_text',
							'name'  => 'real_estate_floor_text',
							'label' => 'Text',
							'type'  => 'text',
						),
					),
				),

				// ---------------- PROOF TAB ----------------
				array(
					'key'   => 'tab_real_estate_proof',
					'label' => 'Proof',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_real_estate_proof_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The live "availability board" with KPIs is an animated design element. The intro paragraph contains inline emphasis markup and is left in the template. Here you can edit the heading, the testimonial and its author.',
				),
				array(
					'key'           => 'f_real_estate_proof_eyebrow',
					'name'          => 'real_estate_proof_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Project performance',
				),
				array(
					'key'           => 'f_real_estate_proof_heading',
					'name'          => 'real_estate_proof_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Inventory that moves, leads that convert',
				),
				array(
					'key'           => 'f_real_estate_proof_quote',
					'name'          => 'real_estate_proof_quote',
					'label'         => 'Testimonial quote',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => '"They understood our market from day one — the campaigns felt built for our buyers, not copy-pasted from another industry."',
				),
				array(
					'key'           => 'f_real_estate_proof_author',
					'name'          => 'real_estate_proof_author',
					'label'         => 'Testimonial author',
					'type'          => 'text',
					'default_value' => 'Vikram Rathore',
				),
				array(
					'key'           => 'f_real_estate_proof_author_meta',
					'name'          => 'real_estate_proof_author_meta',
					'label'         => 'Testimonial author meta',
					'type'          => 'text',
					'default_value' => 'Real estate client',
				),

				// ---------------- BUYERS ASK AI TAB ----------------
				array(
					'key'   => 'tab_real_estate_ai',
					'label' => 'Buyers ask AI',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_real_estate_ai_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The portal/AI-Overview result mock on the right is an animated design element. The body paragraph contains inline emphasis markup and is left in the template. Here you can edit the eyebrow, heading, the three checklist points and the button.',
				),
				array(
					'key'           => 'f_real_estate_ai_eyebrow',
					'name'          => 'real_estate_ai_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'AEO · GEO · AI Overviews',
				),
				array(
					'key'           => 'f_real_estate_ai_heading',
					'name'          => 'real_estate_ai_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Buyers ask AI — be the recommendation',
				),
				array(
					'key'           => 'f_real_estate_ai_point1',
					'name'          => 'real_estate_ai_point1',
					'label'         => 'Checklist point 1',
					'type'          => 'text',
					'default_value' => 'Featured for locality, BHK & budget queries',
				),
				array(
					'key'           => 'f_real_estate_ai_point2',
					'name'          => 'real_estate_ai_point2',
					'label'         => 'Checklist point 2',
					'type'          => 'text',
					'default_value' => 'Schema & locality entities AI tools can cite',
				),
				array(
					'key'           => 'f_real_estate_ai_point3',
					'name'          => 'real_estate_ai_point3',
					'label'         => 'Checklist point 3',
					'type'          => 'text',
					'default_value' => 'RERA trust signals that win the visit',
				),
				array(
					'key'           => 'f_real_estate_ai_button',
					'name'          => 'real_estate_ai_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_real_estate_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_real_estate_faq_eyebrow',
					'name'          => 'real_estate_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Real estate FAQ',
				),
				array(
					'key'           => 'f_real_estate_faq_heading',
					'name'          => 'real_estate_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Your questions, answered',
				),
				array(
					'key'          => 'f_real_estate_faq_items',
					'name'         => 'real_estate_faqs',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_real_estate_faq_q',
							'name'  => 'real_estate_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_real_estate_faq_a',
							'name'  => 'real_estate_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED + CTA TAB ----------------
				array(
					'key'   => 'tab_real_estate_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_real_estate_related_eyebrow',
					'name'          => 'real_estate_related_eyebrow',
					'label'         => 'Explore-more eyebrow',
					'type'          => 'text',
					'default_value' => 'Explore more',
				),
				array(
					'key'          => 'f_real_estate_related_items',
					'name'         => 'real_estate_related',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_real_estate_related_icon',
							'name'  => 'real_estate_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_real_estate_related_link',
							'name'          => 'real_estate_related_link',
							'label'         => 'Link (URL)',
							'type'          => 'text',
						),
						array(
							'key'   => 'f_real_estate_related_title',
							'name'  => 'real_estate_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_real_estate_related_text',
							'name'  => 'real_estate_related_text',
							'label' => 'Text',
							'type'  => 'text',
						),
					),
				),
				array(
					'key'           => 'f_real_estate_cta_heading',
					'name'          => 'real_estate_cta_heading',
					'label'         => 'CTA heading',
					'type'          => 'text',
					'default_value' => "Let's fill your project with buyers",
				),
				array(
					'key'           => 'f_real_estate_cta_text',
					'name'          => 'real_estate_cta_text',
					'label'         => 'CTA text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Tell us about your project and the real estate digital marketing agency in Jaipur behind these results will map a plan to bring qualified site visits and bookings. Free, no obligation.',
				),
				array(
					'key'           => 'f_real_estate_cta_button',
					'name'          => 'real_estate_cta_button',
					'label'         => 'CTA button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_real_estate_cta_phone',
					'name'          => 'real_estate_cta_phone',
					'label'         => 'Phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_real_estate_cta_phone_href',
					'name'          => 'real_estate_cta_phone_href',
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
 * Render the Real Estate "property type" cards from ACF (real_estate_ptypes
 * repeater), falling back to the original six defaults when empty / ACF off.
 */
function bx_real_estate_render_ptypes() {
	$defaults = array(
		array( 'icon' => 'lucide:building', 'title' => 'Apartments &amp; builders', 'text' => 'Sell out a project faster with qualified site visits.' ),
		array( 'icon' => 'lucide:home', 'title' => 'Villas &amp; floors', 'text' => 'Premium homes for end-users and investors.' ),
		array( 'icon' => 'lucide:map', 'title' => 'Plots &amp; townships', 'text' => 'Target intent by location and budget.' ),
		array( 'icon' => 'lucide:briefcase', 'title' => 'Commercial &amp; office', 'text' => 'Reach decision-makers, not browsers.' ),
		array( 'icon' => 'lucide:gem', 'title' => 'Luxury &amp; HNI', 'text' => 'Premium branding, discreet targeting.' ),
		array( 'icon' => 'lucide:rocket', 'title' => 'New launches', 'text' => 'High-impact launch &amp; a lead-day surge.' ),
	);

	$items   = array();
	$use_acf = false;
	if ( function_exists( 'have_rows' ) && have_rows( 'real_estate_ptypes' ) ) {
		$use_acf = true;
		while ( have_rows( 'real_estate_ptypes' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'real_estate_ptype_icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'real_estate_ptype_title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'real_estate_ptype_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items   = $defaults; // Pre-escaped / known-safe default markup (contains &amp;).
		$use_acf = false;
	}

	foreach ( $items as $i => $p ) {
		$delay = ( 0 === $i % 3 ) ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		printf(
			'<div class="ptype reveal rounded-xl2 border border-line bg-paper p-6 overflow-hidden"%s><span class="ptype-roof block h-1.5 w-12 rounded-full bg-accent/30 mb-4" aria-hidden="true"></span><iconify-icon icon="%s" class="text-accent text-3xl" aria-hidden="true"></iconify-icon><h3 class="font-display text-lg tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$delay,
			$p['icon'],  // Escaped above (ACF) / safe default.
			$p['title'], // Escaped above (ACF) / safe default.
			$p['text']   // Escaped above (ACF) / safe default.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / known-safe defaults.
	}
}

/**
 * Render the Real Estate "growth tower" floor rows from ACF (real_estate_floors
 * repeater), falling back to the original six defaults when empty / ACF off.
 *
 * Floor classes (f6 → f1) and their CSS animation delays are part of the design,
 * so they are assigned by position regardless of the row content.
 */
function bx_real_estate_render_floors() {
	$defaults = array(
		array( 'number' => '06', 'link' => '/services/digital-marketing/', 'title' => 'Nurture to booking', 'text' => 'Follow-ups, retargeting &amp; CRM flows that close long cycles.' ),
		array( 'number' => '05', 'link' => '/services/social-media-marketing/', 'title' => 'Build reach &amp; proof', 'text' => 'Walkthroughs, locality content &amp; reviews that build desire.' ),
		array( 'number' => '04', 'link' => '/services/website-design/', 'title' => 'Showcase the property', 'text' => 'Fast microsites with galleries, floor plans &amp; site-visit booking.' ),
		array( 'number' => '03', 'link' => '/services/performance-marketing/', 'title' => 'Generate qualified leads', 'text' => 'Meta &amp; Google campaigns tuned for site visits, not junk.' ),
		array( 'number' => '02', 'link' => '/services/seo-services/', 'title' => 'Win local search', 'text' => 'Local SEO, AEO &amp; GEO for locality, BHK &amp; budget queries.' ),
		array( 'number' => '01', 'link' => '/services/brand-consulting/', 'title' => 'Brand the project for trust', 'text' => 'Identity, RERA credibility &amp; a story that makes buyers feel safe.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'real_estate_floors' ) ) {
		while ( have_rows( 'real_estate_floors' ) ) {
			the_row();
			$items[] = array(
				'number' => esc_html( (string) get_sub_field( 'real_estate_floor_number' ) ),
				'link'   => esc_url( (string) get_sub_field( 'real_estate_floor_link' ) ),
				'title'  => esc_html( (string) get_sub_field( 'real_estate_floor_title' ) ),
				'text'   => esc_html( (string) get_sub_field( 'real_estate_floor_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		// Pre-escaped/known-safe defaults: URLs run through esc_url, text contains &amp;.
		$items = array();
		foreach ( $defaults as $d ) {
			$items[] = array(
				'number' => $d['number'],
				'link'   => esc_url( $d['link'] ),
				'title'  => $d['title'],
				'text'   => $d['text'],
			);
		}
	}

	$total = count( $items );
	foreach ( $items as $i => $f ) {
		// First rendered row is the top floor (f6-style); decrement to the ground floor.
		$floor_n = $total - $i;
		printf(
			'<a href="%s" class="floor f%d flex items-center gap-4 px-5 sm:px-6 py-4 bg-paper"><span class="shrink-0 font-display text-2xl tt text-accent/30 w-9">%s</span><span class="hidden sm:flex gap-1 shrink-0" aria-hidden="true"><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span><span class="h-3 w-3 rounded-sm bg-surface-2"></span></span><span class="flex-1 min-w-0"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-up-right" class="floor-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>',
			$f['link'],   // esc_url above.
			(int) $floor_n,
			$f['number'], // esc_html above / safe default.
			$f['title'],  // esc_html above / safe default.
			$f['text']    // esc_html above / safe default.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / known-safe defaults.
	}
}

/**
 * Render the Real Estate FAQ accordion items from ACF (real_estate_faqs
 * repeater), falling back to the original six defaults when empty / ACF off.
 */
function bx_real_estate_render_faqs() {
	$defaults = array(
		array(
			'q' => 'How do you market a real estate project?',
			'a' => 'We market a project in four moves: brand it for trust (identity, RERA credibility, a clear story), win local search (SEO, AEO and GEO for locality, BHK and budget queries — think "3 BHK in Mansarovar" or "plots on Ajmer Road"), generate qualified leads (Meta Ads and Google campaigns tuned for site visits), and showcase it well (a fast microsite with galleries, floor plans and easy booking) — then nurture leads to a booking.',
		),
		array(
			'q' => 'How do you generate qualified leads instead of junk?',
			'a' => 'We target by intent — locality, budget and buyer type — use qualifying questions and landing pages, optimise toward site visits (not raw form fills), and continuously cut audiences and creatives that bring low-quality enquiries. The goal is fewer, better leads your sales team can actually close.',
		),
		array(
			'q' => 'How long until we see site visits and bookings?',
			'a' => 'Performance campaigns can drive leads and site visits within days, with quality improving over the first 30–60 days as we optimise. Because real estate has a long cycle, bookings build over weeks of nurturing. Local SEO and AEO/GEO compound over 3–6 months into a steady, low-cost lead source.',
		),
		array(
			'q' => 'Do you handle RERA-compliant advertising?',
			'a' => 'Yes. RERA-ready advertising is the default here — registration details where required, no misleading promises, and responsible, honest claims. Compliant, credible advertising actually converts better in real estate because trust is the deciding factor.',
		),
		array(
			'q' => 'Which channels work best for real estate?',
			'a' => 'A blend works best: Meta Ads &amp; Google performance ads for lead-gen, local SEO and Google Business Profile for high-intent searches, and Instagram/YouTube for walkthroughs and social proof. For builder marketing in Jaipur the right mix depends on whether you\'re a builder, broker, plotting project or luxury developer.',
		),
		array(
			'q' => 'Do you build project microsites and landing pages?',
			'a' => 'Yes — our website and UI/UX teams build fast, SEO-ready project microsites and landing pages with galleries, floor plans, locality maps and one-tap site-visit booking, so your ad traffic actually converts.',
		),
	);

	$items   = array();
	$has_acf = false;
	if ( function_exists( 'have_rows' ) && have_rows( 'real_estate_faqs' ) ) {
		$has_acf = true;
		while ( have_rows( 'real_estate_faqs' ) ) {
			the_row();
			$items[] = array(
				'q' => esc_html( (string) get_sub_field( 'real_estate_faq_question' ) ),
				'a' => esc_html( (string) get_sub_field( 'real_estate_faq_answer' ) ),
			);
		}
	}
	if ( ! $items ) {
		// Defaults are known-safe markup (answers may contain &amp; / escaped apostrophes).
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		$open     = 0 === $i ? ' open' : '';
		$expanded = 0 === $i ? 'true' : 'false';
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="%s">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			$open,
			$expanded,
			$it['q'], // esc_html above / safe default.
			$it['a']  // esc_html above / safe default.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / known-safe defaults.
	}
}

/**
 * Render the Real Estate "Explore more" related cards from ACF
 * (real_estate_related repeater), falling back to the original three defaults
 * when empty / ACF off.
 */
function bx_real_estate_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:target', 'link' => '/services/performance-marketing/', 'title' => 'Performance Marketing', 'text' => 'Lead-gen that converts' ),
		array( 'icon' => 'lucide:search', 'link' => '/services/seo-services/', 'title' => 'SEO · AEO · GEO', 'text' => 'Win local search &amp; AI' ),
		array( 'icon' => 'lucide:layers', 'link' => '/industries/', 'title' => 'All Industries', 'text' => 'Other sectors' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'real_estate_related' ) ) {
		while ( have_rows( 'real_estate_related' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'real_estate_related_icon' ) ),
				'link'  => esc_url( (string) get_sub_field( 'real_estate_related_link' ) ),
				'title' => esc_html( (string) get_sub_field( 'real_estate_related_title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'real_estate_related_text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = array();
		foreach ( $defaults as $d ) {
			$items[] = array(
				'icon'  => $d['icon'],
				'link'  => esc_url( $d['link'] ),
				'title' => $d['title'], // Known-safe default (may contain &amp;).
				'text'  => $d['text'],  // Known-safe default (may contain &amp;).
			);
		}
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<a href="%s" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>',
			$r['link'], // esc_url above.
			$delay,
			$r['icon'], // esc_attr above / safe default.
			$r['title'], // esc_html above / safe default.
			$r['text']  // esc_html above / safe default.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above / known-safe defaults.
	}
}
