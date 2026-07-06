<?php
/**
 * ACF field group for the UI/UX Design page template (page-ui-ux-design.php).
 *
 * Registered in PHP (version-controlled, not DB-only) and bound to the page
 * template via location rules. Defaults mirror the original hard-coded content;
 * the template falls back to the same defaults via bx_field()/render helpers so
 * nothing ever blanks if ACF is off.
 *
 * Every field key/name (including repeater sub_fields) is prefixed with
 * `ui_ux_design_` to stay globally unique across all local field groups.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_ui_ux_design' );
/**
 * Register the UI/UX Design field group.
 */
function bx_acf_ui_ux_design() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_ui-ux-design',
			'title'      => 'UI/UX Design Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-ui-ux-design.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_ui_ux_design_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_badge',
					'name'          => 'ui_ux_design_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Research-led product & interface design',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_heading_a',
					'name'          => 'ui_ux_design_hero_heading_a',
					'label'         => 'Heading — before accent',
					'type'          => 'text',
					'default_value' => 'Interfaces people ',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_heading_accent',
					'name'          => 'ui_ux_design_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'love',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_heading_b',
					'name'          => 'ui_ux_design_hero_heading_b',
					'label'         => 'Heading — after accent',
					'type'          => 'text',
					'default_value' => ' to use',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_text',
					'name'          => 'ui_ux_design_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As a UI/UX design agency in Jaipur, we take you from wireframes to polished, accessible UI and scalable design systems — products that feel obvious, look beautiful and convert.',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_cta1',
					'name'          => 'ui_ux_design_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_cta2',
					'name'          => 'ui_ux_design_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_ui_ux_design_hero_tip',
					'name'          => 'ui_ux_design_hero_tip',
					'label'         => 'Tip line (after the pointer icon)',
					'instructions'  => 'The leading icon stays in the template.',
					'type'          => 'text',
					'default_value' => 'Tip: tap the mockup to toggle wireframe ↔ final UI.',
				),

				// ---------------- WHAT WE DESIGN TAB ----------------
				array(
					'key'   => 'tab_ui_ux_design_what',
					'label' => 'What we design',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_ui_ux_design_what_eyebrow',
					'name'          => 'ui_ux_design_what_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'What we design',
				),
				array(
					'key'           => 'f_ui_ux_design_what_heading',
					'name'          => 'ui_ux_design_what_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'What our UI/UX design agency in Jaipur ships',
				),
				array(
					'key'          => 'f_ui_ux_design_what_items',
					'name'         => 'ui_ux_design_what_items',
					'label'        => 'Cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:palette).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_ui_ux_design_what_icon',
							'name'  => 'ui_ux_design_what_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_what_title',
							'name'  => 'ui_ux_design_what_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_what_text',
							'name'  => 'ui_ux_design_what_text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- DESIGN SYSTEM TAB ----------------
				array(
					'key'   => 'tab_ui_ux_design_system',
					'label' => 'Design system',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_ui_ux_design_system_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The colour-token, type-scale and component blocks are part of the design. Here you can edit the section heading and the showcase image.',
				),
				array(
					'key'           => 'f_ui_ux_design_system_eyebrow',
					'name'          => 'ui_ux_design_system_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'A system, not just screens',
				),
				array(
					'key'           => 'f_ui_ux_design_system_heading',
					'name'          => 'ui_ux_design_system_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Why teams pick our UX design company in Jaipur',
				),
				array(
					'key'           => 'f_ui_ux_design_system_img_file',
					'name'          => 'ui_ux_design_system_image',
					'label'         => 'UI screens image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_ui_ux_design_system_img_alt',
					'name'          => 'ui_ux_design_system_image_alt',
					'label'         => 'Showcase image — alt text',
					'type'          => 'text',
					'default_value' => 'A set of polished BoostronixX UI/UX product screens and components',
				),
				array(
					'key'           => 'f_ui_ux_design_system_img_cap',
					'name'          => 'ui_ux_design_system_image_caption',
					'label'         => 'Showcase image — caption (bold)',
					'type'          => 'text',
					'default_value' => 'UI screens · 1600×700',
				),
				array(
					'key'           => 'f_ui_ux_design_system_img_cap2',
					'name'          => 'ui_ux_design_system_image_caption2',
					'label'         => 'Showcase image — caption (sub)',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'Mockup of real product screens / a Figma design-system board — showing components, app screens and prototypes.',
				),

				// ---------------- PROCESS TAB ----------------
				array(
					'key'   => 'tab_ui_ux_design_process',
					'label' => 'Process',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_ui_ux_design_process_eyebrow',
					'name'          => 'ui_ux_design_process_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'How we design',
				),
				array(
					'key'           => 'f_ui_ux_design_process_heading',
					'name'          => 'ui_ux_design_process_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Five steps to a product that works',
				),
				array(
					'key'          => 'f_ui_ux_design_process_items',
					'name'         => 'ui_ux_design_process_items',
					'label'        => 'Steps',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array(
							'key'   => 'f_ui_ux_design_process_num',
							'name'  => 'ui_ux_design_process_num',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_process_title',
							'name'  => 'ui_ux_design_process_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_process_text',
							'name'  => 'ui_ux_design_process_text',
							'label' => 'Text',
							'type'  => 'text',
						),
					),
				),
				array(
					'key'           => 'f_ui_ux_design_process_callout_heading',
					'name'          => 'ui_ux_design_process_callout_heading',
					'label'         => 'Callout — heading',
					'type'          => 'text',
					'default_value' => 'Designed by the BoostronixX product team',
				),
				array(
					'key'           => 'f_ui_ux_design_process_callout_text',
					'name'          => 'ui_ux_design_process_callout_text',
					'label'         => 'Callout — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'a senior team with deep SaaS product design experience in Jaipur, app design and D2C — the UI/UX design agency in Jaipur teams trust for accessibility-minded, developer-friendly handoff every time.',
				),
				array(
					'key'           => 'f_ui_ux_design_process_callout_link_text',
					'name'          => 'ui_ux_design_process_callout_link_text',
					'label'         => 'Callout — link text',
					'type'          => 'text',
					'default_value' => 'See the Freshee case study',
				),
				array(
					'key'           => 'f_ui_ux_design_process_callout_link_url',
					'name'          => 'ui_ux_design_process_callout_link_url',
					'label'         => 'Callout — link URL',
					'type'          => 'text',
					'default_value' => '/portfolio/freshee/',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_ui_ux_design_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_ui_ux_design_faq_eyebrow',
					'name'          => 'ui_ux_design_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_ui_ux_design_faq_heading',
					'name'          => 'ui_ux_design_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Design questions',
				),
				array(
					'key'          => 'f_ui_ux_design_faq_items',
					'name'         => 'ui_ux_design_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_ui_ux_design_faq_q',
							'name'  => 'ui_ux_design_faq_question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_faq_a',
							'name'  => 'ui_ux_design_faq_answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- RELATED & CTA TAB ----------------
				array(
					'key'   => 'tab_ui_ux_design_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_ui_ux_design_related_eyebrow',
					'name'          => 'ui_ux_design_related_eyebrow',
					'label'         => 'Related — eyebrow',
					'type'          => 'text',
					'default_value' => 'Pairs well with',
				),
				array(
					'key'          => 'f_ui_ux_design_related_items',
					'name'         => 'ui_ux_design_related_items',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_ui_ux_design_related_icon',
							'name'  => 'ui_ux_design_related_icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_related_title',
							'name'  => 'ui_ux_design_related_title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_related_sub',
							'name'  => 'ui_ux_design_related_sub',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ui_ux_design_related_url',
							'name'  => 'ui_ux_design_related_url',
							'label' => 'Link URL',
							'type'  => 'text',
						),
					),
				),
				array(
					'key'           => 'f_ui_ux_design_cta_heading',
					'name'          => 'ui_ux_design_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => "Let's design something people love",
				),
				array(
					'key'           => 'f_ui_ux_design_cta_text',
					'name'          => 'ui_ux_design_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Show us your product or idea — we'll map the experience and a path to a beautiful, usable design.",
				),
				array(
					'key'           => 'f_ui_ux_design_cta_button1',
					'name'          => 'ui_ux_design_cta_button_primary',
					'label'         => 'CTA — primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_ui_ux_design_cta_button2',
					'name'          => 'ui_ux_design_cta_button_secondary',
					'label'         => 'CTA — secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
			),
		)
	);
}

/**
 * Render the UI/UX "What we design" cards from ACF (ui_ux_design_what_items
 * repeater), falling back to the original six defaults when empty / ACF off.
 */
function bx_ui_ux_design_render_what() {
	$defaults = array(
		array( 'icon' => 'lucide:search-check', 'title' => 'UX Research', 'text' => 'Interviews, flows and journey mapping that ground every design decision in real user behaviour.' ),
		array( 'icon' => 'lucide:layout-template', 'title' => 'Wireframing', 'text' => 'Low-fi structure to nail flow before a single pixel is polished.' ),
		array( 'icon' => 'lucide:palette', 'title' => 'UI Design', 'text' => 'Beautiful, on-brand, pixel-perfect interfaces — from web to mobile app UI design in Jaipur.' ),
		array( 'icon' => 'lucide:mouse-pointer-click', 'title' => 'Prototyping', 'text' => 'Clickable prototypes — the way a product design agency in Jaipur tests and feels the experience early.' ),
		array( 'icon' => 'lucide:component', 'title' => 'Design Systems', 'text' => 'Reusable components and tokens that keep teams fast & consistent.' ),
		array( 'icon' => 'lucide:accessibility', 'title' => 'Accessibility', 'text' => 'WCAG-minded contrast, focus states and inclusive patterns.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'ui_ux_design_what_items' ) ) {
		while ( have_rows( 'ui_ux_design_what_items' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'ui_ux_design_what_icon' ),
				'title' => (string) get_sub_field( 'ui_ux_design_what_title' ),
				'text'  => (string) get_sub_field( 'ui_ux_design_what_text' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $c ) {
		$delay = ( 0 === $i % 3 ) ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		printf(
			'<div class="reveal cmp rounded-xl2 border border-line p-7"%s><span class="inline-grid place-items-center h-12 w-12 rounded-2xl bg-surface text-accent text-2xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">%s</h3><p class="text-ink-soft text-sm mt-2">%s</p></div>',
			$delay,
			esc_attr( $c['icon'] ),
			esc_html( $c['title'] ),
			esc_html( $c['text'] )
		);
	}
}

/**
 * Render the UI/UX "How we design" process step cards from ACF
 * (ui_ux_design_process_items repeater), falling back to the original five
 * defaults when empty / ACF off.
 */
function bx_ui_ux_design_render_process() {
	$defaults = array(
		array( 'number' => '01', 'title' => 'Research', 'text' => 'Users, goals, flows.' ),
		array( 'number' => '02', 'title' => 'Wireframe', 'text' => 'Structure & flow.' ),
		array( 'number' => '03', 'title' => 'UI design', 'text' => 'Polished visuals.' ),
		array( 'number' => '04', 'title' => 'Prototype', 'text' => 'Test & refine.' ),
		array( 'number' => '05', 'title' => 'Handoff', 'text' => 'Dev-ready specs.' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'ui_ux_design_process_items' ) ) {
		while ( have_rows( 'ui_ux_design_process_items' ) ) {
			the_row();
			$items[] = array(
				'number' => (string) get_sub_field( 'ui_ux_design_process_num' ),
				'title'  => (string) get_sub_field( 'ui_ux_design_process_title' ),
				'text'   => (string) get_sub_field( 'ui_ux_design_process_text' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $s ) {
		$delay = ( 0 === $i % 4 ) ? '' : ' data-delay="' . (int) ( $i % 4 ) . '"';
		printf(
			'<div class="reveal rounded-xl2 border border-line p-6"%s><span class="font-display text-4xl tt text-accent/25">%s</span><h3 class="font-display text-lg tt mt-2">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$delay,
			esc_html( $s['number'] ),
			esc_html( $s['title'] ),
			esc_html( $s['text'] )
		);
	}
}

/**
 * Render the UI/UX FAQ accordion items from ACF (ui_ux_design_faq_items
 * repeater), falling back to the original four defaults when empty / ACF off.
 */
function bx_ui_ux_design_render_faqs() {
	$defaults = array(
		array(
			'q' => 'Do you design in Figma?',
			'a' => 'Yes — all our Figma design in Jaipur lives in a tidy, organised file with components, prototypes and dev-ready specs you fully own.',
		),
		array(
			'q' => 'Can you work with our developers?',
			'a' => 'Absolutely. We deliver developer-friendly handoff — specs, tokens and assets — and can collaborate directly with your engineering team, or build it ourselves.',
		),
		array(
			'q' => 'Do you also build the front-end?',
			'a' => 'Yes — as an app design agency in Jaipur with in-house developers, our website & development service takes designs all the way to a fast, responsive live build.',
		),
		array(
			'q' => 'What about accessibility?',
			'a' => 'We design with WCAG in mind — sufficient colour contrast, clear focus states, sensible tap targets and inclusive patterns — so your product works for everyone.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'ui_ux_design_faq_items' ) ) {
		while ( have_rows( 'ui_ux_design_faq_items' ) ) {
			the_row();
			$items[] = array(
				'q' => (string) get_sub_field( 'ui_ux_design_faq_question' ),
				'a' => (string) get_sub_field( 'ui_ux_design_faq_answer' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $it ) {
		printf(
			'<div class="faq border border-white/12 rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-paper/60 text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}

/**
 * Render the UI/UX "Pairs well with" related cards from ACF
 * (ui_ux_design_related_items repeater), falling back to the original three
 * defaults when empty / ACF off.
 */
function bx_ui_ux_design_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:monitor-smartphone', 'title' => 'Website Design', 'sub' => 'Design, built live', 'url' => '/services/website-design/' ),
		array( 'icon' => 'lucide:palette', 'title' => 'Brand Consulting', 'sub' => 'Identity first', 'url' => '/services/brand-consulting/' ),
		array( 'icon' => 'lucide:layout-grid', 'title' => 'All Services', 'sub' => 'The full stack', 'url' => '/services/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'ui_ux_design_related_items' ) ) {
		while ( have_rows( 'ui_ux_design_related_items' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'ui_ux_design_related_icon' ),
				'title' => (string) get_sub_field( 'ui_ux_design_related_title' ),
				'sub'   => (string) get_sub_field( 'ui_ux_design_related_sub' ),
				'url'   => (string) get_sub_field( 'ui_ux_design_related_url' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<a href="%s" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>',
			esc_url( $r['url'] ),
			$delay,
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['sub'] )
		);
	}
}
