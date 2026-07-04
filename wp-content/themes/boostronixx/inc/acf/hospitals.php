<?php
/**
 * ACF field group for the Hospitals page template (page-hospitals.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * Every field key and name is prefixed with `hospitals_` so they never collide
 * with field keys/names registered by other page groups.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_hospitals' );
/**
 * Register the Hospitals field group.
 */
function bx_acf_hospitals() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_hospitals',
			'title'      => 'Hospitals Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-hospitals.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_hospitals_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_hospitals_hero_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated "Book an appointment" widget on the right is part of the design and is not editable here. You can edit the hero copy and buttons below.',
				),
				array(
					'key'           => 'f_hospitals_hero_badge',
					'name'          => 'hospitals_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Industry · Hospitals & Healthcare',
				),
				array(
					'key'           => 'f_hospitals_hero_heading_a',
					'name'          => 'hospitals_hero_heading_a',
					'label'         => 'Heading — before accent',
					'type'          => 'text',
					'default_value' => 'Keep your ',
				),
				array(
					'key'           => 'f_hospitals_hero_heading_accent',
					'name'          => 'hospitals_hero_heading_accent',
					'label'         => 'Heading — accent words',
					'type'          => 'text',
					'default_value' => 'appointment book',
				),
				array(
					'key'           => 'f_hospitals_hero_heading_b',
					'name'          => 'hospitals_hero_heading_b',
					'label'         => 'Heading — after accent',
					'type'          => 'text',
					'default_value' => ' full',
				),
				array(
					'key'           => 'f_hospitals_hero_text',
					'name'          => 'hospitals_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As a healthcare marketing agency in Jaipur, we help hospitals, clinics and doctors earn patient trust and turn "near me" searches into real enquiries and booked appointments — with credible branding, local SEO and ethical, compliant campaigns.',
				),
				array(
					'key'           => 'f_hospitals_hero_cta1',
					'name'          => 'hospitals_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_hospitals_hero_cta2',
					'name'          => 'hospitals_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_hospitals_hero_trust',
					'name'          => 'hospitals_hero_trust',
					'label'         => 'Trust badges',
					'instructions'  => 'One per line. Leave empty to keep the current defaults.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "NABH-minded\nEthical & compliant\nVerified doctor profiles",
				),

				// ---------------- CARE PATHWAY TAB ----------------
				array(
					'key'   => 'tab_hospitals_pathway',
					'label' => 'Care pathway',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_hospitals_pathway_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated EKG line and its 5 beat steps are part of the design. You can edit the section eyebrow, heading and intro below.',
				),
				array(
					'key'           => 'f_hospitals_pathway_eyebrow',
					'name'          => 'hospitals_pathway_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The patient pathway',
				),
				array(
					'key'           => 'f_hospitals_pathway_heading',
					'name'          => 'hospitals_pathway_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'From a "near me" search to a kept appointment',
				),
				array(
					'key'           => 'f_hospitals_pathway_text',
					'name'          => 'hospitals_pathway_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Health is a heartbeat — and so is the patient journey. We keep the line strong at every beat, so more patients reach your door and come back.',
				),

				// ---------------- DEPARTMENTS TAB ----------------
				array(
					'key'   => 'tab_hospitals_depts',
					'label' => 'Departments',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_hospitals_depts_eyebrow',
					'name'          => 'hospitals_depts_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The department directory',
				),
				array(
					'key'           => 'f_hospitals_depts_heading',
					'name'          => 'hospitals_depts_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Every speciality, found first',
				),
				array(
					'key'           => 'f_hospitals_depts_text',
					'name'          => 'hospitals_depts_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'From clinic marketing in Jaipur for a single-specialty practice to doctor marketing in Jaipur for a multispeciality hospital — we make the right doctor show up for every patient search.',
				),
				array(
					'key'          => 'f_hospitals_depts_items',
					'name'         => 'hospitals_depts',
					'label'        => 'Department cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:heart-pulse).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add department',
					'sub_fields'   => array(
						array(
							'key'   => 'f_hospitals_dept_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_hospitals_dept_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_hospitals_dept_text',
							'name'  => 'text',
							'label' => 'Text',
							'type'  => 'text',
						),
					),
				),

				// ---------------- PRESCRIPTION (Rx) TAB ----------------
				array(
					'key'   => 'tab_hospitals_rx',
					'label' => 'Prescription',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_hospitals_rx_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The Rx pad header (℞ · Treatment plan) and signature line are part of the design. You can edit the left-column copy and the prescription service lines below.',
				),
				array(
					'key'           => 'f_hospitals_rx_eyebrow',
					'name'          => 'hospitals_rx_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Your growth, prescribed',
				),
				array(
					'key'           => 'f_hospitals_rx_heading',
					'name'          => 'hospitals_rx_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'The prescription for a full OPD',
				),
				array(
					'key'           => 'f_hospitals_rx_text',
					'name'          => 'hospitals_rx_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Symptoms: empty slots, weak online presence, lost to the hospital down the road. Here's the treatment plan — from medical SEO in Jaipur to patient acquisition that fills the calendar. Tap any line for the service behind it.",
				),
				array(
					'key'           => 'f_hospitals_rx_pill',
					'name'          => 'hospitals_rx_pill',
					'label'         => 'Pill text',
					'type'          => 'text',
					'default_value' => 'One team, full recovery',
				),
				array(
					'key'          => 'f_hospitals_rx_items',
					'name'         => 'hospitals_rx_lines',
					'label'        => 'Prescription lines',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add line',
					'sub_fields'   => array(
						array(
							'key'           => 'f_hospitals_rx_link',
							'name'          => 'link',
							'label'         => 'Link',
							'type'          => 'link',
							'return_format' => 'array',
						),
						array(
							'key'   => 'f_hospitals_rx_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_hospitals_rx_sub',
							'name'  => 'sub',
							'label' => 'Sub-line (mono)',
							'type'  => 'text',
						),
					),
				),

				// ---------------- PROOF / VITALS TAB ----------------
				array(
					'key'   => 'tab_hospitals_proof',
					'label' => 'Proof',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_hospitals_proof_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated "patient vitals" monitor on the right is part of the design. You can edit the left-column copy and the testimonial below.',
				),
				array(
					'key'           => 'f_hospitals_proof_eyebrow',
					'name'          => 'hospitals_proof_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The vitals are strong',
				),
				array(
					'key'           => 'f_hospitals_proof_heading',
					'name'          => 'hospitals_proof_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A healthcare marketing agency in Jaipur with healthy numbers',
				),
				array(
					'key'           => 'f_hospitals_proof_quote',
					'name'          => 'hospitals_proof_quote',
					'label'         => 'Testimonial quote',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => '"They understood that healthcare runs on trust — the campaigns felt credible and respectful, and our OPD appointments climbed steadily."',
				),
				array(
					'key'           => 'f_hospitals_proof_avatar',
					'name'          => 'hospitals_proof_avatar',
					'label'         => 'Avatar initial',
					'type'          => 'text',
					'default_value' => 'S',
				),
				array(
					'key'           => 'f_hospitals_proof_name',
					'name'          => 'hospitals_proof_name',
					'label'         => 'Author name',
					'type'          => 'text',
					'default_value' => 'Dr. S. Agarwal',
				),
				array(
					'key'           => 'f_hospitals_proof_role',
					'name'          => 'hospitals_proof_role',
					'label'         => 'Author role',
					'type'          => 'text',
					'default_value' => 'Hospital director',
				),

				// ---------------- AI SEARCH TAB ----------------
				array(
					'key'   => 'tab_hospitals_ai',
					'label' => 'AI search',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_hospitals_ai_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated Google-style map-pack result on the right is part of the design. You can edit the left-column copy, bullet list and button below.',
				),
				array(
					'key'           => 'f_hospitals_ai_eyebrow',
					'name'          => 'hospitals_ai_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'AEO · GEO · Local AI',
				),
				array(
					'key'           => 'f_hospitals_ai_heading',
					'name'          => 'hospitals_ai_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Be the answer to "near me"',
				),
				array(
					'key'           => 'f_hospitals_ai_bullets',
					'name'          => 'hospitals_ai_bullets',
					'label'         => 'Bullet list',
					'instructions'  => 'One per line. Leave empty to keep the current defaults.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Google Business Profile & map-pack dominance\nSchema & doctor entities AI tools can cite\nA review profile that wins the decision",
				),
				array(
					'key'           => 'f_hospitals_ai_button',
					'name'          => 'hospitals_ai_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_hospitals_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_hospitals_faq_eyebrow',
					'name'          => 'hospitals_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Healthcare FAQ',
				),
				array(
					'key'           => 'f_hospitals_faq_heading',
					'name'          => 'hospitals_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Your questions, answered',
				),
				array(
					'key'          => 'f_hospitals_faq_items',
					'name'         => 'hospitals_faqs',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_hospitals_faq_q',
							'name'  => 'question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_hospitals_faq_a',
							'name'  => 'answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 4,
						),
					),
				),

				// ---------------- RELATED + CTA TAB ----------------
				array(
					'key'   => 'tab_hospitals_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_hospitals_related_eyebrow',
					'name'          => 'hospitals_related_eyebrow',
					'label'         => 'Related — eyebrow',
					'type'          => 'text',
					'default_value' => 'Explore more',
				),
				array(
					'key'          => 'f_hospitals_related_items',
					'name'         => 'hospitals_related',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'           => 'f_hospitals_related_link',
							'name'          => 'link',
							'label'         => 'Link',
							'type'          => 'link',
							'return_format' => 'array',
						),
						array(
							'key'   => 'f_hospitals_related_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_hospitals_related_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_hospitals_related_text',
							'name'  => 'text',
							'label' => 'Sub-text',
							'type'  => 'text',
						),
					),
				),
				array(
					'key'           => 'f_hospitals_cta_heading',
					'name'          => 'hospitals_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => "Let's fill your appointment book",
				),
				array(
					'key'           => 'f_hospitals_cta_text',
					'name'          => 'hospitals_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Tell us about your hospital or clinic — we'll map an ethical, compliant plan to bring more patient enquiries and appointments. Free, no obligation.",
				),
				array(
					'key'           => 'f_hospitals_cta_button',
					'name'          => 'hospitals_cta_button',
					'label'         => 'CTA — button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_hospitals_cta_phone',
					'name'          => 'hospitals_cta_phone',
					'label'         => 'CTA — phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_hospitals_cta_phone_href',
					'name'          => 'hospitals_cta_phone_href',
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
 * Echo a Hospitals text field for inline body copy.
 *
 * When an editor has entered a value in ACF it is escaped with esc_html() before
 * output. When the field is empty / ACF is off it falls back to the supplied
 * default, which is the original template copy and is echoed verbatim so the page
 * stays byte-for-byte identical (the original copy contains literal " and '
 * characters that esc_html() would otherwise re-encode).
 *
 * @param string $selector Field name.
 * @param string $default  Original verbatim default copy.
 */
function bx_hospitals_text( $selector, $default = '' ) {
	$value = function_exists( 'get_field' ) ? get_field( $selector ) : null;
	if ( null === $value || '' === $value ) {
		echo $default; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- verbatim original template copy.
		return;
	}
	echo esc_html( (string) $value );
}

/**
 * Render the Hospitals department cards from ACF (hospitals_depts repeater),
 * falling back to the original eight defaults when empty / ACF off.
 */
function bx_hospitals_render_depts() {
	$defaults = array(
		array( 'icon' => 'lucide:heart-pulse', 'title' => 'Cardiology', 'text' => 'Heart-care that builds instant trust.' ),
		array( 'icon' => 'lucide:bone', 'title' => 'Orthopaedics', 'text' => 'Found for "knee / joint specialist".' ),
		array( 'icon' => 'lucide:ear', 'title' => 'ENT', 'text' => 'Win the everyday consultation.' ),
		array( 'icon' => 'lucide:smile', 'title' => 'Dental', 'text' => 'Fill the chair, fill the calendar.' ),
		array( 'icon' => 'lucide:eye', 'title' => 'Eye care', 'text' => 'High-trust elective procedures.' ),
		array( 'icon' => 'lucide:baby', 'title' => 'Gynae &amp; IVF', 'text' => 'Sensitive, credible, discreet.' ),
		array( 'icon' => 'lucide:brain', 'title' => 'Neurology', 'text' => 'Authority-led specialist demand.' ),
		array( 'icon' => 'lucide:microscope', 'title' => 'Diagnostics &amp; labs', 'text' => 'Tests, packages &amp; home collection.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'hospitals_depts' ) ) {
		while ( have_rows( 'hospitals_depts' ) ) {
			the_row();
			$items[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'text' ) ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $d ) {
		$delay = 0 === $i % 4 ? '' : ' data-delay="' . (int) ( $i % 4 ) . '"';
		$lead  = 0 === $i ? '' : "\n" . str_repeat( ' ', 12 );
		printf(
			'%s<div class="dept reveal rounded-xl2 border border-line bg-paper p-5"%s><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">%s</h3><p class="text-ink-soft text-xs mt-1">%s</p></div>',
			$lead,
			$delay,
			$d['icon'], // Pre-escaped above / known-safe default markup.
			$d['title'],
			$d['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
	echo "\n"; // Restore the newline PHP eats right after the template close tag.
}

/**
 * Render the Hospitals prescription (Rx) service lines from ACF
 * (hospitals_rx_lines repeater), falling back to the original six defaults
 * when empty / ACF off.
 */
function bx_hospitals_render_rx() {
	$defaults = array(
		array( 'url' => '/services/brand-consulting/', 'title' => 'Brand for trust', 'sub' => 'identity · doctor profiles · accreditation cues' ),
		array( 'url' => '/services/seo-services/', 'title' => 'Win local &amp; the map pack', 'sub' => '"specialist near me" · GBP · AEO/GEO' ),
		array( 'url' => '/services/performance-marketing/', 'title' => 'Fill the appointment book', 'sub' => 'Meta &amp; Google · enquiries by speciality' ),
		array( 'url' => '/services/website-design/', 'title' => 'Website with online booking', 'sub' => 'doctor pages · departments · one-tap booking' ),
		array( 'url' => '/services/social-media-marketing/', 'title' => 'Reputation &amp; reviews', 'sub' => 'review engine · patient stories · health content' ),
		array( 'url' => '/services/digital-marketing/', 'title' => 'Nurture &amp; recall', 'sub' => 'follow-ups · health-checkup recalls · CRM' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'hospitals_rx_lines' ) ) {
		while ( have_rows( 'hospitals_rx_lines' ) ) {
			the_row();
			$link = get_sub_field( 'link' );
			$url  = ( is_array( $link ) && ! empty( $link['url'] ) ) ? $link['url'] : '';
			$items[] = array(
				'url'   => esc_url( $url ),
				'title' => esc_html( (string) get_sub_field( 'title' ) ),
				'sub'   => esc_html( (string) get_sub_field( 'sub' ) ),
			);
		}
	}
	if ( ! $items ) {
		// Defaults carry intentional inline entities; escape only the URL.
		foreach ( $defaults as &$def ) {
			$def['url'] = esc_url( $def['url'] );
		}
		unset( $def );
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$lead = 0 === $i ? '' : "\n" . str_repeat( ' ', 16 );
		printf(
			'%s<a href="%s" class="rx flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-9 w-9 rounded-full border border-accent text-accent"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">%s</span><span class="mono text-[11px] text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-up-right" class="rx-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>',
			$lead,
			$r['url'],
			$r['title'], // Pre-escaped above / known-safe default markup.
			$r['sub']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
	echo "\n"; // Restore the newline PHP eats right after the template close tag.
}

/**
 * Render the Hospitals FAQ accordion items from ACF (hospitals_faqs repeater),
 * falling back to the original default questions when empty / ACF off.
 */
function bx_hospitals_render_faqs() {
	$defaults = array(
		array(
			'q' => 'How do you market a hospital or clinic?',
			'a' => 'As a healthcare marketing agency in Jaipur, we market a hospital in four moves: brand it for trust (hospital branding in Jaipur with identity, doctor profiles, NABH and accreditation cues and patient stories), win local search (local SEO, Google Business Profile, AEO and GEO for "near me" and speciality queries), fill the appointment book (Meta and Google campaigns tuned for enquiries and appointments), and make booking effortless (a fast website with online appointment booking) — then build reviews and recall.',
		),
		array(
			'q' => 'How do you get more patient appointments?',
			'a' => 'We target high-intent searches by speciality and locality, capture them with clear landing pages and one-tap booking, and optimise toward booked appointments rather than raw clicks. Reminders and follow-ups reduce no-shows, while local SEO and a strong review profile keep a steady, low-cost stream of enquiries coming in.',
		),
		array(
			'q' => 'Is medical advertising allowed and ethical?',
			'a' => "Yes, when it's done responsibly. We follow medical advertising norms and platform policies — no guaranteed cures, no misleading before/after claims, and honest, factual messaging. Ethical, compliant healthcare marketing actually performs better, because trust is what makes a patient choose you.",
		),
		array(
			'q' => 'How long until we see more patients?',
			'a' => 'Performance campaigns can drive enquiries and appointments within days, with quality improving over the first 30–60 days. Local SEO, your Google Business Profile and reviews compound over 3–6 months into a steady, low-cost flow of patients who find you organically.',
		),
		array(
			'q' => 'Which channels work best for healthcare?',
			'a' => "A blend works best: Google Search and the map pack for high-intent \"near me\" queries, Meta ads for awareness and lead-gen, a strong review profile for trust, and helpful health content for authority. As a hospital marketing agency in Jaipur, we tune the mix to whether you're a multispeciality hospital, a single-specialty clinic or an individual doctor.",
		),
		array(
			'q' => 'Do you build websites with appointment booking?',
			'a' => 'Yes — our website and UI/UX teams build fast, SEO-ready hospital websites with department pages, doctor profiles, location details and one-tap appointment booking, so the patients your campaigns attract can book in seconds.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'hospitals_faqs' ) ) {
		while ( have_rows( 'hospitals_faqs' ) ) {
			the_row();
			$items[] = array(
				'q' => esc_html( (string) get_sub_field( 'question' ) ),
				'a' => esc_html( (string) get_sub_field( 'answer' ) ),
			);
		}
	}
	if ( ! $items ) {
		// Defaults are the original verbatim copy (with literal quotes); emit as-is.
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		$open     = 0 === $i;
		$expanded = $open ? 'true' : 'false';
		$lead     = 0 === $i ? '' : "\n" . str_repeat( ' ', 12 );
		printf(
			'%s<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="%s">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			$lead,
			$open ? ' open' : '',
			$expanded,
			$it['q'], // Pre-escaped above (ACF) / verbatim original default.
			$it['a']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
	echo "\n"; // Restore the newline PHP eats right after the template close tag.
}

/**
 * Render the Hospitals "Explore more" related cards from ACF
 * (hospitals_related repeater), falling back to the original three defaults
 * when empty / ACF off.
 */
function bx_hospitals_render_related() {
	$defaults = array(
		array( 'url' => '/services/performance-marketing/', 'icon' => 'lucide:target', 'title' => 'Performance Marketing', 'text' => 'Appointment campaigns' ),
		array( 'url' => '/services/seo-services/', 'icon' => 'lucide:search', 'title' => 'SEO · AEO · GEO', 'text' => 'Win "near me" &amp; AI' ),
		array( 'url' => '/industries/', 'icon' => 'lucide:layers', 'title' => 'All Industries', 'text' => 'Other sectors' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'hospitals_related' ) ) {
		while ( have_rows( 'hospitals_related' ) ) {
			the_row();
			$link = get_sub_field( 'link' );
			$url  = ( is_array( $link ) && ! empty( $link['url'] ) ) ? $link['url'] : '';
			$items[] = array(
				'url'   => esc_url( $url ),
				'icon'  => esc_attr( (string) get_sub_field( 'icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'text' ) ),
			);
		}
	}
	if ( ! $items ) {
		// Defaults carry intentional inline entities; escape only the URL & icon.
		foreach ( $defaults as &$def ) {
			$def['url']  = esc_url( $def['url'] );
			$def['icon'] = esc_attr( $def['icon'] );
		}
		unset( $def );
		$items = $defaults;
	}

	foreach ( $items as $i => $c ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		$lead  = 0 === $i ? '' : "\n" . str_repeat( ' ', 12 );
		printf(
			'%s<a href="%s" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>',
			$lead,
			$c['url'],
			$delay,
			$c['icon'], // Pre-escaped above / known-safe default markup.
			$c['title'],
			$c['text']
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
	echo "\n"; // Restore the newline PHP eats right after the template close tag.
}
