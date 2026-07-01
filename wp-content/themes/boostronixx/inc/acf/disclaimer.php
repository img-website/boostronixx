<?php
/**
 * ACF field group + render helper for the Disclaimer template
 * (page-disclaimer.php).
 *
 * The notice cards are a repeater; the contact banner's email/phone buttons come
 * from Site Settings so they stay in sync with the rest of the site. Defaults
 * mirror the original design content so nothing ever blanks.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_disclaimer' );
/**
 * Register the Disclaimer field group.
 */
function bx_acf_disclaimer() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_disclaimer',
			'title'      => 'Disclaimer Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-disclaimer.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO ----------------
				array( 'key' => 'tab_dc_hero', 'label' => 'Hero', 'type' => 'tab' ),
				array( 'key' => 'f_dc_crumb', 'name' => 'dc_crumb', 'label' => 'Breadcrumb label', 'type' => 'text', 'default_value' => 'Disclaimer' ),
				array( 'key' => 'f_dc_icon', 'name' => 'dc_icon', 'label' => 'Hero icon', 'type' => 'text', 'default_value' => 'lucide:triangle-alert' ),
				array( 'key' => 'f_dc_title', 'name' => 'dc_title', 'label' => 'Heading', 'type' => 'text', 'default_value' => 'Disclaimer' ),
				array( 'key' => 'f_dc_intro', 'name' => 'dc_intro', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'The information on this website is shared in good faith and for general guidance only. Please read these notices before relying on anything you find here.' ),
				array( 'key' => 'f_dc_updated', 'name' => 'dc_updated', 'label' => 'Last updated', 'type' => 'text', 'default_value' => 'June 10, 2026' ),
				array( 'key' => 'f_dc_updated_icon', 'name' => 'dc_updated_icon', 'label' => 'Icon — "Last updated" pill', 'type' => 'text', 'default_value' => 'lucide:calendar', 'instructions' => 'Iconify icon id — browse at icon-sets.iconify.design.' ),

				// ---------------- NOTICES ----------------
				array( 'key' => 'tab_dc_notices', 'label' => 'Notices', 'type' => 'tab' ),
				array(
					'key'          => 'f_dc_notices',
					'name'         => 'dc_notices',
					'label'        => 'Notice cards',
					'instructions' => 'Leave empty to keep the current notices.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add notice',
					'sub_fields'   => array(
						array( 'key' => 'f_dc_notice_icon', 'name' => 'icon', 'label' => 'Icon', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
						array( 'key' => 'f_dc_notice_heading', 'name' => 'heading', 'label' => 'Heading', 'type' => 'text', 'wrapper' => array( 'width' => '35' ) ),
						array( 'key' => 'f_dc_notice_text', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array( 'width' => '40' ) ),
					),
				),

				// ---------------- CONTACT BANNER ----------------
				array( 'key' => 'tab_dc_banner', 'label' => 'Contact banner', 'type' => 'tab' ),
				array( 'key' => 'f_dc_banner_note', 'label' => 'Note', 'type' => 'message', 'message' => 'The email and phone buttons use the details from Site Settings → Contact.' ),
				array( 'key' => 'f_dc_banner_icon', 'name' => 'dc_banner_icon', 'label' => 'Icon', 'type' => 'text', 'default_value' => 'lucide:check-check' ),
				array( 'key' => 'f_dc_banner_heading', 'name' => 'dc_banner_heading', 'label' => 'Heading', 'type' => 'text', 'default_value' => 'By using this website, you accept this disclaimer' ),
				array( 'key' => 'f_dc_banner_text', 'name' => 'dc_banner_text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 3, 'default_value' => "If you do not agree with any part of it, please discontinue use of the site. Have a question about anything here? We're happy to help." ),
				array( 'key' => 'f_dc_banner_email_icon', 'name' => 'dc_banner_email_icon', 'label' => 'Email button — icon', 'type' => 'text', 'default_value' => 'lucide:mail', 'wrapper' => array( 'width' => '50' ) ),
				array( 'key' => 'f_dc_banner_phone_icon', 'name' => 'dc_banner_phone_icon', 'label' => 'Phone button — icon', 'type' => 'text', 'default_value' => 'lucide:phone', 'wrapper' => array( 'width' => '50' ) ),
			),
		)
	);
}

/**
 * Default notice cards.
 *
 * @return array
 */
function bx_dc_default_notices() {
	return array(
		array( 'icon' => 'lucide:info', 'heading' => 'General information only', 'text' => 'All content on boostronixx.com is provided for general informational purposes. It is not professional, legal, financial or business advice, and should not be treated as a substitute for tailored guidance for your specific situation.' ),
		array( 'icon' => 'lucide:trending-up', 'heading' => 'No guarantee of results', 'text' => 'Marketing, SEO and advertising outcomes depend on many factors beyond our control — your market, budget, competition and platform algorithms. Any examples, case studies or figures shown are illustrative and not a promise of similar results for your business.' ),
		array( 'icon' => 'lucide:external-link', 'heading' => 'External links', 'text' => "Our site may link to third-party websites for convenience. We don't control and aren't responsible for their content, accuracy, policies or practices. A link is not an endorsement, and you visit external sites at your own risk." ),
		array( 'icon' => 'lucide:copyright', 'heading' => 'Brands & trademarks', 'text' => 'Third-party names, logos and brands shown on this site belong to their respective owners and are used only for identification or illustrative purposes. Their use does not imply any affiliation, partnership or endorsement unless explicitly stated.' ),
		array( 'icon' => 'lucide:shield-off', 'heading' => 'Limitation of liability', 'text' => 'To the fullest extent permitted by law, BoostronixX is not liable for any loss or damage arising from the use of, or reliance on, information on this website. You use the site and its content at your own discretion and risk.' ),
		array( 'icon' => 'lucide:refresh-cw', 'heading' => 'Accuracy & updates', 'text' => "We try to keep content current and correct, but we make no warranties about its completeness, accuracy or reliability. Information may change without notice, and we're not obliged to update it." ),
	);
}

/**
 * Notice cards from the repeater, or the defaults when empty.
 *
 * @return array
 */
function bx_dc_notice_items() {
	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'dc_notices' ) ) {
		while ( have_rows( 'dc_notices' ) ) {
			the_row();
			$items[] = array(
				'icon'    => (string) get_sub_field( 'icon' ),
				'heading' => (string) get_sub_field( 'heading' ),
				'text'    => (string) get_sub_field( 'text' ),
			);
		}
	}
	return $items ? $items : bx_dc_default_notices();
}

/**
 * Render the notice cards. The reveal stagger (data-delay) cycles 0–3 exactly as
 * the original markup did.
 */
function bx_dc_render_notices() {
	foreach ( bx_dc_notice_items() as $i => $n ) {
		$delay = $i % 4;
		printf(
			'<div class="notice reveal flex items-start gap-4 rounded-2xl border border-line bg-surface p-6 sm:p-7"%s>
            <span class="inline-grid place-items-center h-11 w-11 shrink-0 rounded-xl bg-paper border border-line text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span>
            <div>
              <h2 class="font-display text-lg tt">%s</h2>
              <p class="mt-1.5">%s</p>
            </div>
          </div>',
			$delay > 0 ? ' data-delay="' . (int) $delay . '"' : '',
			esc_attr( $n['icon'] ),
			esc_html( $n['heading'] ),
			esc_html( $n['text'] )
		);
	}
}
