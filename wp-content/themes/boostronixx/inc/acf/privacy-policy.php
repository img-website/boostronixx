<?php
/**
 * ACF field group + render helpers for the Privacy Policy template
 * (page-privacy-policy.php).
 *
 * The "at a glance" cards and the numbered policy sections are repeaters; the
 * sticky table of contents is generated automatically from the sections, so
 * numbering and anchors always stay in sync. Defaults mirror the original
 * hard-coded content so nothing ever blanks if a field is empty / ACF is off.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_privacy_policy' );
/**
 * Register the Privacy Policy field group.
 */
function bx_acf_privacy_policy() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_privacy_policy',
			'title'      => 'Privacy Policy Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-privacy-policy.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO ----------------
				array( 'key' => 'tab_pp_hero', 'label' => 'Hero', 'type' => 'tab' ),
				array( 'key' => 'f_pp_crumb', 'name' => 'pp_crumb', 'label' => 'Breadcrumb label', 'type' => 'text', 'default_value' => 'Privacy Policy' ),
				array( 'key' => 'f_pp_badge_icon', 'name' => 'pp_badge_icon', 'label' => 'Badge icon (Iconify id)', 'type' => 'text', 'default_value' => 'lucide:shield-check', 'wrapper' => array( 'width' => '40' ) ),
				array( 'key' => 'f_pp_badge', 'name' => 'pp_badge', 'label' => 'Badge text', 'type' => 'text', 'default_value' => 'Your data, respected', 'wrapper' => array( 'width' => '60' ) ),
				array( 'key' => 'f_pp_title', 'name' => 'pp_title', 'label' => 'Heading', 'type' => 'text', 'default_value' => 'Privacy Policy' ),
				array( 'key' => 'f_pp_intro', 'name' => 'pp_intro', 'label' => 'Intro', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'This policy explains what we collect, why we collect it, and the control you have over your information when you use the BoostronixX website or services.' ),
				array( 'key' => 'f_pp_updated', 'name' => 'pp_updated', 'label' => 'Last updated', 'type' => 'text', 'default_value' => 'June 10, 2026', 'wrapper' => array( 'width' => '50' ) ),
				array( 'key' => 'f_pp_readtime', 'name' => 'pp_readtime', 'label' => 'Read time', 'type' => 'text', 'default_value' => '~6 min read', 'wrapper' => array( 'width' => '50' ) ),
				array( 'key' => 'f_pp_updated_icon', 'name' => 'pp_updated_icon', 'label' => 'Icon — "Last updated" pill', 'type' => 'text', 'default_value' => 'lucide:calendar', 'instructions' => 'Iconify icon id — browse at icon-sets.iconify.design (e.g. lucide:calendar).', 'wrapper' => array( 'width' => '50' ) ),
				array( 'key' => 'f_pp_readtime_icon', 'name' => 'pp_readtime_icon', 'label' => 'Icon — "Read time" pill', 'type' => 'text', 'default_value' => 'lucide:clock', 'wrapper' => array( 'width' => '50' ) ),

				// ---------------- AT A GLANCE ----------------
				array( 'key' => 'tab_pp_glance', 'label' => 'At a glance', 'type' => 'tab' ),
				array( 'key' => 'f_pp_glance_heading', 'name' => 'pp_glance_heading', 'label' => 'Section heading', 'type' => 'text', 'default_value' => 'Your privacy at a glance' ),
				array(
					'key'          => 'f_pp_glance',
					'name'         => 'pp_glance',
					'label'        => 'Cards',
					'instructions' => 'Leave empty to keep the current 4 cards.',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array( 'key' => 'f_pp_glance_icon', 'name' => 'icon', 'label' => 'Icon', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
						array( 'key' => 'f_pp_glance_heading2', 'name' => 'heading', 'label' => 'Heading', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
						array( 'key' => 'f_pp_glance_text', 'name' => 'text', 'label' => 'Text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array( 'width' => '45' ) ),
					),
				),

				// ---------------- SECTIONS ----------------
				array( 'key' => 'tab_pp_sections', 'label' => 'Policy sections', 'type' => 'tab' ),
				array( 'key' => 'f_pp_sections_note', 'label' => 'Note', 'type' => 'message', 'message' => 'Sections are numbered automatically (1, 2, 3…) and the sticky table of contents is generated from them. Leave empty to keep the current policy text.' ),
				array(
					'key'          => 'f_pp_sections',
					'name'         => 'pp_sections',
					'label'        => 'Sections',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add section',
					'sub_fields'   => array(
						array( 'key' => 'f_pp_sec_heading', 'name' => 'heading', 'label' => 'Heading', 'type' => 'text' ),
						array( 'key' => 'f_pp_sec_toc', 'name' => 'toc', 'label' => 'Short label for the table of contents', 'instructions' => 'Leave empty to reuse the heading.', 'type' => 'text' ),
						array( 'key' => 'f_pp_sec_body', 'name' => 'body', 'label' => 'Body', 'type' => 'wysiwyg', 'tabs' => 'all', 'media_upload' => 0 ),
					),
				),

				// ---------------- CONTACT CARD ----------------
				array( 'key' => 'tab_pp_contact', 'label' => 'Contact card', 'type' => 'tab' ),
				array( 'key' => 'f_pp_contact_note', 'label' => 'Note', 'type' => 'message', 'message' => 'The card at the end of the "Contact us" section. Each row has its own editable icon.' ),
				array( 'key' => 'f_pp_contact_heading', 'name' => 'pp_contact_heading', 'label' => 'Card heading', 'type' => 'text', 'default_value' => 'BoostronixX' ),
				array(
					'key'          => 'f_pp_contact_items',
					'name'         => 'pp_contact_items',
					'label'        => 'Contact rows',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add row',
					'sub_fields'   => array(
						array( 'key' => 'f_pp_contact_icon', 'name' => 'icon', 'label' => 'Icon', 'type' => 'text', 'instructions' => 'Iconify id, e.g. lucide:mail', 'wrapper' => array( 'width' => '25' ) ),
						array( 'key' => 'f_pp_contact_text', 'name' => 'text', 'label' => 'Text', 'type' => 'text', 'wrapper' => array( 'width' => '45' ) ),
						array( 'key' => 'f_pp_contact_url', 'name' => 'url', 'label' => 'Link (optional)', 'type' => 'text', 'instructions' => 'e.g. mailto:… or tel:… — leave empty for plain text.', 'wrapper' => array( 'width' => '30' ) ),
					),
				),
			),
		)
	);
}

/* -------------------------------------------------------------------------
 * Defaults (mirror the original design content)
 * ---------------------------------------------------------------------- */

/**
 * Default "at a glance" cards.
 *
 * @return array
 */
function bx_pp_default_glance() {
	return array(
		array( 'icon' => 'lucide:hand-coins', 'heading' => 'We never sell your data', 'text' => 'Your information is never sold or rented to third parties — full stop.' ),
		array( 'icon' => 'lucide:target', 'heading' => 'Only what we need', 'text' => 'We collect the minimum needed to respond, deliver and improve our work.' ),
		array( 'icon' => 'lucide:user-cog', 'heading' => "You're in control", 'text' => 'Access, correct or delete your data anytime by reaching out to us.' ),
		array( 'icon' => 'lucide:lock', 'heading' => 'Kept secure', 'text' => 'Reasonable technical and organisational safeguards protect your data.' ),
	);
}

/**
 * Default policy sections (heading, short TOC label, body HTML).
 *
 * @return array
 */
function bx_pp_default_sections() {
	return array(
		array(
			'heading' => 'Who we are',
			'toc'     => 'Who we are',
			'body'    => <<<'HTML'
<p>BoostronixX ("we", "us", "our") is a creative branding and digital marketing agency based at 880, Rani Sati Nagar, Gautam Marg, Nirman Nagar, Jaipur, Rajasthan 302019, India. We are responsible for the personal data collected through our website and services and are committed to protecting it.</p>
HTML,
		),
		array(
			'heading' => 'Information we collect',
			'toc'     => 'Information we collect',
			'body'    => <<<'HTML'
<p>We only collect information that helps us serve you. This may include:</p>
<ul>
<li><strong>Contact details</strong> you provide — name, email, phone number and company, e.g. when you book a call or send an enquiry.</li>
<li><strong>Project information</strong> you share with us to scope or deliver work.</li>
<li><strong>Usage data</strong> — pages visited, device and browser type, and approximate location, collected automatically via cookies and analytics.</li>
<li><strong>Communications</strong> — the content of messages and emails you send us.</li>
</ul>
HTML,
		),
		array(
			'heading' => 'How we use your information',
			'toc'     => 'How we use it',
			'body'    => <<<'HTML'
<p>We use the data we collect to:</p>
<ul>
<li>Respond to your enquiries and provide the services you request.</li>
<li>Send proposals, updates and relevant information about your project.</li>
<li>Improve our website, content and the quality of our services.</li>
<li>Meet legal, accounting and security obligations.</li>
</ul>
<p>We rely on your consent, our legitimate business interests, or the need to perform a contract as the legal basis for processing.</p>
HTML,
		),
		array(
			'heading' => 'Cookies & analytics',
			'toc'     => 'Cookies & analytics',
			'body'    => <<<'HTML'
<p>Our site uses cookies and similar technologies to keep it working properly and to understand how it's used — for example via Google Analytics. You can control or disable cookies through your browser settings, though some features may not function as intended if you do.</p>
HTML,
		),
		array(
			'heading' => 'Sharing & third parties',
			'toc'     => 'Sharing & third parties',
			'body'    => <<<'HTML'
<p>We do not sell or rent your personal data. We may share it only with trusted service providers who help us operate — such as hosting, analytics, email and advertising platforms — and only to the extent needed to do their job, or where required by law.</p>
HTML,
		),
		array(
			'heading' => 'Data retention',
			'toc'     => 'Data retention',
			'body'    => <<<'HTML'
<p>We keep personal data only for as long as necessary to fulfil the purposes it was collected for, including any legal, accounting or reporting requirements. When it's no longer needed, we securely delete or anonymise it.</p>
HTML,
		),
		array(
			'heading' => 'Your rights',
			'toc'     => 'Your rights',
			'body'    => <<<'HTML'
<p>Depending on your location, you may have the right to:</p>
<ul>
<li>Access the personal data we hold about you.</li>
<li>Request correction of inaccurate information.</li>
<li>Request deletion of your data.</li>
<li>Object to or restrict certain processing.</li>
<li>Withdraw consent at any time.</li>
</ul>
<p>To exercise any of these, email us at <a href="mailto:boostronixx@gmail.com">boostronixx@gmail.com</a> and we'll respond within a reasonable timeframe.</p>
HTML,
		),
		array(
			'heading' => 'Security',
			'toc'     => 'Security',
			'body'    => <<<'HTML'
<p>We implement reasonable technical and organisational measures to protect your data against loss, misuse and unauthorised access. No method of transmission over the internet is completely secure, however, so we cannot guarantee absolute security.</p>
HTML,
		),
		array(
			'heading' => 'Changes to this policy',
			'toc'     => 'Changes',
			'body'    => <<<'HTML'
<p>We may update this Privacy Policy from time to time. The "last updated" date at the top reflects the latest revision, and material changes will be highlighted on this page.</p>
HTML,
		),
		array(
			'heading' => 'Contact us',
			'toc'     => 'Contact us',
			'body'    => '<p>Questions about your privacy or this policy? Get in touch:</p>',
		),
	);
}

/* -------------------------------------------------------------------------
 * Getters (repeater value, or defaults) + renderers
 * ---------------------------------------------------------------------- */

/**
 * Glance cards from the repeater, or the defaults when empty.
 *
 * @return array
 */
function bx_pp_glance_items() {
	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'pp_glance' ) ) {
		while ( have_rows( 'pp_glance' ) ) {
			the_row();
			$items[] = array(
				'icon'    => (string) get_sub_field( 'icon' ),
				'heading' => (string) get_sub_field( 'heading' ),
				'text'    => (string) get_sub_field( 'text' ),
			);
		}
	}
	return $items ? $items : bx_pp_default_glance();
}

/**
 * Policy sections from the repeater, or the defaults when empty.
 *
 * @return array
 */
function bx_pp_section_items() {
	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'pp_sections' ) ) {
		while ( have_rows( 'pp_sections' ) ) {
			the_row();
			$items[] = array(
				'heading' => (string) get_sub_field( 'heading' ),
				'toc'     => (string) get_sub_field( 'toc' ),
				'body'    => (string) get_sub_field( 'body' ),
			);
		}
	}
	return $items ? $items : bx_pp_default_sections();
}

/**
 * Render the "at a glance" cards.
 */
function bx_pp_render_glance() {
	foreach ( bx_pp_glance_items() as $i => $c ) {
		printf(
			'<div class="reveal rounded-2xl bg-paper border border-line p-6"%s>
              <span class="text-accent text-2xl"><iconify-icon icon="%s"></iconify-icon></span>
              <h3 class="font-display text-base tt mt-3">%s</h3>
              <p class="text-ink-soft text-sm mt-1.5">%s</p>
            </div>',
			$i > 0 ? ' data-delay="' . (int) $i . '"' : '',
			esc_attr( $c['icon'] ),
			esc_html( $c['heading'] ),
			esc_html( $c['text'] )
		);
	}
}

/**
 * Default contact-card rows (icon, text, optional link).
 *
 * @return array
 */
function bx_pp_default_contact() {
	return array(
		array( 'icon' => 'lucide:mail', 'text' => 'boostronixx@gmail.com', 'url' => 'mailto:boostronixx@gmail.com' ),
		array( 'icon' => 'lucide:phone', 'text' => '+91 80582 12202', 'url' => 'tel:+918058212202' ),
		array( 'icon' => 'lucide:map-pin', 'text' => 'Nirman Nagar, Jaipur, Rajasthan 302019, India', 'url' => '' ),
	);
}

/**
 * Contact-card rows from the repeater, or the defaults when empty.
 *
 * @return array
 */
function bx_pp_contact_items() {
	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'pp_contact_items' ) ) {
		while ( have_rows( 'pp_contact_items' ) ) {
			the_row();
			$items[] = array(
				'icon' => (string) get_sub_field( 'icon' ),
				'text' => (string) get_sub_field( 'text' ),
				'url'  => (string) get_sub_field( 'url' ),
			);
		}
	}
	return $items ? $items : bx_pp_default_contact();
}

/**
 * Build the "Contact us" card HTML from the structured fields (each row keeps its
 * own icon), so icons never live in editable rich text and can't be stripped.
 *
 * @return string
 */
function bx_pp_contact_card_html() {
	$rows = '';
	foreach ( bx_pp_contact_items() as $it ) {
		$inner = ( '' !== $it['url'] )
			? sprintf( '<a href="%s" class="hover:text-accent">%s</a>', esc_url( $it['url'] ), esc_html( $it['text'] ) )
			: esc_html( $it['text'] );
		$rows .= sprintf(
			'<p class="flex items-center gap-2"><iconify-icon icon="%s" class="text-accent"></iconify-icon> %s</p>',
			esc_attr( $it['icon'] ),
			$inner // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built from esc_url/esc_html above.
		);
	}
	return sprintf(
		'<div class="not-prose mt-5 rounded-2xl border border-line bg-surface p-6"><p class="font-display text-lg tt">%s</p><div class="mt-3 space-y-2 text-sm text-ink-soft">%s</div></div>',
		esc_html( bx_field( 'pp_contact_heading', false, 'BoostronixX' ) ),
		$rows // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built above.
	);
}

/**
 * Render the sticky table of contents + the numbered policy sections.
 */
function bx_pp_render_content() {
	$sections = bx_pp_section_items();

	echo '<aside class="lg:col-span-4 xl:col-span-3"><div class="lg:sticky lg:top-28"><p class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft mb-4">On this page</p><nav id="toc" class="flex flex-col gap-1 text-sm text-ink-soft">';
	foreach ( $sections as $i => $s ) {
		$n     = $i + 1;
		$label = '' !== $s['toc'] ? $s['toc'] : $s['heading'];
		printf( '<a href="#s%1$d" class="toc-link pl-4 py-1.5">%1$d. %2$s</a>', $n, esc_html( $label ) );
	}
	echo '</nav></div></aside>';

	echo '<article class="lg:col-span-8 xl:col-span-9 prose-legal max-w-none">';
	$last = count( $sections ) - 1;
	foreach ( $sections as $i => $s ) {
		$n = $i + 1;
		printf(
			'<section id="s%1$d"%2$s><h2>%1$d. %3$s</h2>%4$s%5$s</section>',
			$n,
			$n > 1 ? ' class="mt-12"' : '',
			esc_html( $s['heading'] ),
			$s['body'], // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- trusted first-party rich text.
			$i === $last ? bx_pp_contact_card_html() : '' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built with esc_* helpers.
		);
	}
	echo '</article>';
}
