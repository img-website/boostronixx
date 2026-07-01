<?php
/**
 * ACF field group + render helpers for the Terms & Conditions template
 * (page-terms-and-conditions.php).
 *
 * The numbered term blocks are a repeater (numbering 01, 02… is automatic).
 * Defaults mirror the original design content so nothing ever blanks.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_terms' );
/**
 * Register the Terms & Conditions field group.
 */
function bx_acf_terms() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_terms',
			'title'      => 'Terms & Conditions Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-terms-and-conditions.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO ----------------
				array( 'key' => 'tab_tc_hero', 'label' => 'Hero', 'type' => 'tab' ),
				array( 'key' => 'f_tc_crumb', 'name' => 'tc_crumb', 'label' => 'Breadcrumb label', 'type' => 'text', 'default_value' => 'Terms & Conditions' ),
				array( 'key' => 'f_tc_badge_icon', 'name' => 'tc_badge_icon', 'label' => 'Badge icon', 'type' => 'text', 'default_value' => 'lucide:scroll-text', 'wrapper' => array( 'width' => '40' ) ),
				array( 'key' => 'f_tc_badge', 'name' => 'tc_badge', 'label' => 'Badge text', 'type' => 'text', 'default_value' => 'The agreement', 'wrapper' => array( 'width' => '60' ) ),
				array( 'key' => 'f_tc_title', 'name' => 'tc_title', 'label' => 'Heading', 'type' => 'text', 'default_value' => 'Terms & Conditions' ),
				array( 'key' => 'f_tc_intro', 'name' => 'tc_intro', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Please read these terms carefully. They set out the rules for using the BoostronixX website and engaging our services.' ),
				array( 'key' => 'f_tc_effective', 'name' => 'tc_effective', 'label' => 'Effective date', 'type' => 'text', 'default_value' => 'June 10, 2026' ),
				array( 'key' => 'f_tc_effective_icon', 'name' => 'tc_effective_icon', 'label' => 'Icon — "Effective" pill', 'type' => 'text', 'default_value' => 'lucide:calendar', 'instructions' => 'Iconify icon id — browse at icon-sets.iconify.design.' ),

				// ---------------- AGREEMENT BANNER ----------------
				array( 'key' => 'tab_tc_banner', 'label' => 'Agreement banner', 'type' => 'tab' ),
				array( 'key' => 'f_tc_banner_icon', 'name' => 'tc_banner_icon', 'label' => 'Icon', 'type' => 'text', 'default_value' => 'lucide:check' ),
				array( 'key' => 'f_tc_banner_heading', 'name' => 'tc_banner_heading', 'label' => 'Heading', 'type' => 'text', 'default_value' => 'By using this site, you agree' ),
				array( 'key' => 'f_tc_banner_text', 'name' => 'tc_banner_text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 3, 'default_value' => "Accessing boostronixx.com or working with us means you accept these Terms & Conditions in full. If you don't agree with any part, please don't use the website or our services." ),

				// ---------------- TERM BLOCKS ----------------
				array( 'key' => 'tab_tc_terms', 'label' => 'Terms', 'type' => 'tab' ),
				array( 'key' => 'f_tc_terms_note', 'label' => 'Note', 'type' => 'message', 'message' => 'Blocks are numbered automatically (01, 02, 03…). Leave empty to keep the current terms.' ),
				array(
					'key'          => 'f_tc_terms',
					'name'         => 'tc_terms',
					'label'        => 'Term blocks',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add term',
					'sub_fields'   => array(
						array( 'key' => 'f_tc_term_heading', 'name' => 'heading', 'label' => 'Heading', 'type' => 'text' ),
						array( 'key' => 'f_tc_term_body', 'name' => 'body', 'label' => 'Body', 'type' => 'wysiwyg', 'tabs' => 'all', 'media_upload' => 0 ),
					),
				),

				// ---------------- CTA ----------------
				array( 'key' => 'tab_tc_cta', 'label' => 'CTA', 'type' => 'tab' ),
				array( 'key' => 'f_tc_cta_heading', 'name' => 'tc_cta_heading', 'label' => 'Heading', 'type' => 'text', 'default_value' => 'Ready to work together?' ),
				array( 'key' => 'f_tc_cta_text', 'name' => 'tc_cta_text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 2, 'default_value' => "Got the terms — now let's get to the good part. Book a free, no-obligation strategy call." ),
				array( 'key' => 'f_tc_cta_button', 'name' => 'tc_cta_button', 'label' => 'Button', 'type' => 'link', 'return_format' => 'array', 'instructions' => 'Defaults to “Book a Free Strategy Call” → /contact-us/.' ),
				array( 'key' => 'f_tc_cta_icon', 'name' => 'tc_cta_icon', 'label' => 'CTA button — icon', 'type' => 'text', 'default_value' => 'lucide:arrow-right', 'instructions' => 'Iconify icon id.' ),
			),
		)
	);
}

/**
 * Default term blocks (heading + body HTML).
 *
 * @return array
 */
function bx_tc_default_terms() {
	return array(
		array( 'heading' => 'Use of our website', 'body' => '<p>You may use this website for lawful purposes only. You agree not to use it in any way that breaches applicable laws, infringes the rights of others, or disrupts the site\'s normal operation or security.</p>' ),
		array( 'heading' => 'Services & scope', 'body' => '<p>The specific deliverables, timelines and fees for any engagement are defined in a separate proposal or agreement. These Terms apply alongside that document; where they conflict, the signed proposal prevails.</p>' ),
		array( 'heading' => 'Quotes & proposals', 'body' => '<p>Quotes are valid for 30 days unless stated otherwise. Estimates are based on the scope shared with us; significant changes to requirements may affect timelines and pricing, which we\'ll communicate before proceeding.</p>' ),
		array(
			'heading' => 'Payments',
			'body'    => <<<'HTML'
<ul>
<li>Fees, schedules and any advance amounts are set out in your proposal.</li>
<li>Invoices are payable within the period stated on the invoice.</li>
<li>Work may be paused if payments are overdue.</li>
<li>Third-party costs (ad spend, fonts, stock, hosting, plugins) are billed separately or paid directly by you.</li>
</ul>
HTML,
		),
		array( 'heading' => 'Client responsibilities', 'body' => '<p>To deliver our best work, we rely on you to provide accurate information, timely feedback, necessary access and approvals. Delays in these may affect agreed timelines.</p>' ),
		array( 'heading' => 'Intellectual property', 'body' => '<p>Until full payment is received, all work product remains the property of BoostronixX. On final payment, ownership of the agreed final deliverables transfers to you. We may showcase non-confidential work in our portfolio and marketing unless agreed otherwise in writing.</p>' ),
		array( 'heading' => 'Revisions & approvals', 'body' => '<p>Each engagement includes a defined number of revision rounds as set out in your proposal. Additional revisions or scope beyond that may be quoted separately. Approved deliverables are considered final.</p>' ),
		array( 'heading' => 'Third-party services', 'body' => '<p>Our work may rely on third-party platforms and tools (e.g. ad networks, analytics, hosting). We are not responsible for the performance, policies, outages or pricing changes of services we don\'t control.</p>' ),
		array( 'heading' => 'Limitation of liability', 'body' => '<p>We work hard to deliver results, but marketing outcomes can depend on factors outside our control. To the maximum extent permitted by law, BoostronixX is not liable for indirect or consequential losses, and our total liability is limited to the fees paid for the relevant engagement.</p>' ),
		array( 'heading' => 'Termination', 'body' => '<p>Either party may end an engagement with written notice as set out in the proposal. You remain responsible for fees for work completed up to the termination date. Provisions on payment, IP and liability survive termination.</p>' ),
		array( 'heading' => 'Governing law', 'body' => '<p>These Terms are governed by the laws of India. Any disputes are subject to the exclusive jurisdiction of the courts of Jaipur, Rajasthan.</p>' ),
		array( 'heading' => 'Changes & contact', 'body' => '<p>We may update these Terms from time to time; the effective date above reflects the latest version. Questions? Email <a href="mailto:boostronixx@gmail.com">boostronixx@gmail.com</a> or call <a href="tel:+918058212202">+91 80582 12202</a>.</p>' ),
	);
}

/**
 * Term blocks from the repeater, or the defaults when empty.
 *
 * @return array
 */
function bx_tc_term_items() {
	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'tc_terms' ) ) {
		while ( have_rows( 'tc_terms' ) ) {
			the_row();
			$items[] = array(
				'heading' => (string) get_sub_field( 'heading' ),
				'body'    => (string) get_sub_field( 'body' ),
			);
		}
	}
	return $items ? $items : bx_tc_default_terms();
}

/**
 * Render the numbered term blocks.
 */
function bx_tc_render_terms() {
	foreach ( bx_tc_term_items() as $i => $t ) {
		printf(
			'<article class="term reveal grid grid-cols-[auto_1fr] gap-5 sm:gap-7 py-10">
            <span class="term-no text-4xl sm:text-6xl">%s</span>
            <div>
              <h2 class="font-display text-xl sm:text-2xl tt">%s</h2>
              %s
            </div>
          </article>',
			esc_html( str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ) ),
			esc_html( $t['heading'] ),
			$t['body'] // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted first-party rich text.
		);
	}
}
