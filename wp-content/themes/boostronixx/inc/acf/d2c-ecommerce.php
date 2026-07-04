<?php
/**
 * ACF field group for the D2C E-commerce page template (page-d2c-ecommerce.php).
 *
 * Defaults mirror the original hard-coded content; the template also falls back
 * to the same defaults via bx_field()/render helpers so nothing ever blanks if
 * ACF is off or a field is left empty.
 *
 * NOTE: every field key and name is prefixed with d2c_ecommerce_ to stay globally
 * unique across all locally-registered field groups in this theme.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_d2c_ecommerce' );
/**
 * Register the D2C E-commerce page field group.
 */
function bx_acf_d2c_ecommerce() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_d2c-ecommerce',
			'title'      => 'D2C E-commerce Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-d2c-ecommerce.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_d2c_ecommerce_hero_badge',
					'name'          => 'd2c_ecommerce_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Industry · D2C & eCommerce',
				),
				array(
					'key'           => 'f_d2c_ecommerce_hero_heading_a',
					'name'          => 'd2c_ecommerce_hero_heading_a',
					'label'         => 'Heading — before accent',
					'type'          => 'text',
					'default_value' => 'Turn scrolls into ',
				),
				array(
					'key'           => 'f_d2c_ecommerce_hero_heading_accent',
					'name'          => 'd2c_ecommerce_hero_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'sales',
				),
				array(
					'key'           => 'f_d2c_ecommerce_hero_heading_b',
					'name'          => 'd2c_ecommerce_hero_heading_b',
					'label'         => 'Heading — after accent',
					'type'          => 'text',
					'default_value' => ', profitably',
				),
				array(
					'key'           => 'f_d2c_ecommerce_hero_text',
					'name'          => 'd2c_ecommerce_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As an ecommerce marketing agency in Jaipur, we help D2C and online brands turn the scroll into a cart, the cart into checkout, and the first order into a loyal customer — with standout branding, ROAS-driven ads and retention that compounds.',
				),
				array(
					'key'           => 'f_d2c_ecommerce_hero_cta1',
					'name'          => 'd2c_ecommerce_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_d2c_ecommerce_hero_cta2',
					'name'          => 'd2c_ecommerce_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'          => 'f_d2c_ecommerce_hero_pills',
					'name'         => 'd2c_ecommerce_hero_pills',
					'label'        => 'Trust pills',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:trending-up).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add pill',
					'sub_fields'   => array(
						array(
							'key'   => 'f_d2c_ecommerce_hero_pill_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_hero_pill_label',
							'name'  => 'label',
							'label' => 'Label',
							'type'  => 'text',
						),
					),
				),

				// ---------------- BUYER JOURNEY TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_journey',
					'label' => 'Buyer journey',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_d2c_ecommerce_journey_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated 5-step order tracker is part of the design. Here you can edit the section eyebrow, heading, intro and footnote.',
				),
				array(
					'key'           => 'f_d2c_ecommerce_journey_eyebrow',
					'name'          => 'd2c_ecommerce_journey_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'The buyer journey',
				),
				array(
					'key'           => 'f_d2c_ecommerce_journey_heading',
					'name'          => 'd2c_ecommerce_journey_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Track every order, from scroll to repeat',
				),
				array(
					'key'           => 'f_d2c_ecommerce_journey_text',
					'name'          => 'd2c_ecommerce_journey_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "As an ecommerce marketing agency in Jaipur, we engineer the whole journey like an order you can track — and we don't stop at the first sale. The real profit is in the second, third and tenth order.",
				),
				array(
					'key'           => 'f_d2c_ecommerce_journey_footnote',
					'name'          => 'd2c_ecommerce_journey_footnote',
					'label'         => 'Footnote',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => "Lower CAC at the top, higher AOV in the middle, more repeat at the end — that's how ROAS holds as you scale.",
				),

				// ---------------- CATEGORIES TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_categories',
					'label' => 'Categories',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_d2c_ecommerce_categories_eyebrow',
					'name'          => 'd2c_ecommerce_categories_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Shop by category',
				),
				array(
					'key'           => 'f_d2c_ecommerce_categories_heading',
					'name'          => 'd2c_ecommerce_categories_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'An ecommerce marketing agency in Jaipur built for every kind of online brand',
				),
				array(
					'key'          => 'f_d2c_ecommerce_categories_items',
					'name'         => 'd2c_ecommerce_categories',
					'label'        => 'Category cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:shirt).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add category',
					'sub_fields'   => array(
						array(
							'key'   => 'f_d2c_ecommerce_category_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_category_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_category_text',
							'name'  => 'text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
					),
				),

				// ---------------- GROWTH CART TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_cart',
					'label' => 'Growth cart',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cart_eyebrow',
					'name'          => 'd2c_ecommerce_cart_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Your growth cart',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cart_heading',
					'name'          => 'd2c_ecommerce_cart_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Everything your store needs, in one cart',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cart_text',
					'name'          => 'd2c_ecommerce_cart_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'As a D2C marketing agency in Jaipur, we let you add the capabilities that scale you profitably — tap any line for the service behind it. Checkout = a growth team that pays for itself.',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cart_pill',
					'name'          => 'd2c_ecommerce_cart_pill',
					'label'         => 'Pill text',
					'type'          => 'text',
					'default_value' => 'Priced on profit, not vanity',
				),
				array(
					'key'          => 'f_d2c_ecommerce_cart_items',
					'name'         => 'd2c_ecommerce_cart_items',
					'label'        => 'Cart line items',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:palette).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add item',
					'sub_fields'   => array(
						array(
							'key'   => 'f_d2c_ecommerce_cart_item_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_cart_item_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_cart_item_text',
							'name'  => 'text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
						array(
							'key'           => 'f_d2c_ecommerce_cart_item_link',
							'name'          => 'link',
							'label'         => 'Link URL',
							'type'          => 'text',
						),
					),
				),
				array(
					'key'           => 'f_d2c_ecommerce_cart_subtotal_label',
					'name'          => 'd2c_ecommerce_cart_subtotal_label',
					'label'         => 'Subtotal — label',
					'type'          => 'text',
					'default_value' => 'Subtotal',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cart_subtotal_value',
					'name'          => 'd2c_ecommerce_cart_subtotal_value',
					'label'         => 'Subtotal — value',
					'type'          => 'text',
					'default_value' => 'Profitable, compounding growth',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cart_checkout',
					'name'          => 'd2c_ecommerce_cart_checkout',
					'label'         => 'Checkout button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- PROOF TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_proof',
					'label' => 'Proof',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_d2c_ecommerce_proof_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The three review cards, the intro paragraph (it contains inline emphasis markup) and the animated stat band are part of the design and stay in the template. Here you can edit the eyebrow and heading.',
				),
				array(
					'key'           => 'f_d2c_ecommerce_proof_eyebrow',
					'name'          => 'd2c_ecommerce_proof_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => '★ 4.8 average',
				),
				array(
					'key'           => 'f_d2c_ecommerce_proof_heading',
					'name'          => 'd2c_ecommerce_proof_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => "Reviews don't lie",
				),

				// ---------------- SHOPPERS ASK AI TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_ai',
					'label' => 'Shoppers ask AI',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_d2c_ecommerce_ai_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The animated AI shopping assistant mock and the intro paragraph (it contains inline emphasis markup) stay in the template. Here you can edit the eyebrow, heading, checklist and button.',
				),
				array(
					'key'           => 'f_d2c_ecommerce_ai_eyebrow',
					'name'          => 'd2c_ecommerce_ai_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'AEO · GEO · AI Shopping',
				),
				array(
					'key'           => 'f_d2c_ecommerce_ai_heading',
					'name'          => 'd2c_ecommerce_ai_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Shoppers ask AI what to buy',
				),
				array(
					'key'           => 'f_d2c_ecommerce_ai_points',
					'name'          => 'd2c_ecommerce_ai_points',
					'label'         => 'Checklist points',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Answer-ready content for \"best [product]\" queries\nProduct schema & reviews AI tools can cite\nA reputation that wins the comparison",
				),
				array(
					'key'           => 'f_d2c_ecommerce_ai_button',
					'name'          => 'd2c_ecommerce_ai_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_d2c_ecommerce_faq_eyebrow',
					'name'          => 'd2c_ecommerce_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'D2C & eCommerce FAQ',
				),
				array(
					'key'           => 'f_d2c_ecommerce_faq_heading',
					'name'          => 'd2c_ecommerce_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Your questions, answered',
				),
				array(
					'key'          => 'f_d2c_ecommerce_faq_items',
					'name'         => 'd2c_ecommerce_faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_d2c_ecommerce_faq_q',
							'name'  => 'question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_faq_a',
							'name'  => 'answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 4,
						),
					),
				),

				// ---------------- RELATED + CTA TAB ----------------
				array(
					'key'   => 'tab_d2c_ecommerce_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_d2c_ecommerce_related_eyebrow',
					'name'          => 'd2c_ecommerce_related_eyebrow',
					'label'         => 'Related — eyebrow',
					'type'          => 'text',
					'default_value' => 'Explore more',
				),
				array(
					'key'          => 'f_d2c_ecommerce_related_items',
					'name'         => 'd2c_ecommerce_related_items',
					'label'        => 'Related cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:target).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_d2c_ecommerce_related_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_related_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_related_text',
							'name'  => 'text',
							'label' => 'Sub-line',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_d2c_ecommerce_related_link',
							'name'  => 'link',
							'label' => 'Link URL',
							'type'  => 'text',
						),
					),
				),
				array(
					'key'           => 'f_d2c_ecommerce_cta_heading',
					'name'          => 'd2c_ecommerce_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => "Let's scale your store profitably",
				),
				array(
					'key'           => 'f_d2c_ecommerce_cta_text',
					'name'          => 'd2c_ecommerce_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Tell us about your brand — we'll map a plan to grow orders, ROAS and repeat customers. Free, no obligation.",
				),
				array(
					'key'           => 'f_d2c_ecommerce_cta_button',
					'name'          => 'd2c_ecommerce_cta_button',
					'label'         => 'CTA — button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cta_phone',
					'name'          => 'd2c_ecommerce_cta_phone',
					'label'         => 'CTA — phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_d2c_ecommerce_cta_phone_href',
					'name'          => 'd2c_ecommerce_cta_phone_href',
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
 * Render the D2C hero trust pills from ACF (d2c_ecommerce_hero_pills repeater),
 * falling back to the original three defaults when empty / ACF off.
 */
function bx_d2c_ecommerce_render_hero_pills() {
	$defaults = array(
		array( 'icon' => 'lucide:trending-up', 'label' => 'Profit-first growth' ),
		array( 'icon' => 'lucide:target', 'label' => 'ROAS over spend' ),
		array( 'icon' => 'lucide:repeat', 'label' => 'Built for repeat' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'd2c_ecommerce_hero_pills' ) ) {
		while ( have_rows( 'd2c_ecommerce_hero_pills' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'icon' ),
				'label' => (string) get_sub_field( 'label' ),
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $p ) {
		printf(
			'<span class="inline-flex items-center gap-1.5"><iconify-icon icon="%s" class="text-accent" aria-hidden="true"></iconify-icon> %s</span>',
			esc_attr( $p['icon'] ),
			esc_html( $p['label'] )
		);
	}
}

/**
 * Render the D2C category cards from ACF (d2c_ecommerce_categories repeater),
 * falling back to the original six defaults when empty / ACF off.
 */
function bx_d2c_ecommerce_render_categories() {
	$defaults = array(
		array( 'icon' => 'lucide:shirt', 'title' => 'Fashion &amp; apparel', 'text' => 'Thumb-stopping creative &amp; a brand people want to wear.' ),
		array( 'icon' => 'lucide:droplets', 'title' => 'Beauty &amp; skincare', 'text' => 'UGC, reviews &amp; education that build trust fast.' ),
		array( 'icon' => 'lucide:utensils', 'title' => 'Food &amp; beverage', 'text' => 'Subscriptions, bundles &amp; loyalty that stick.' ),
		array( 'icon' => 'lucide:leaf', 'title' => 'Health &amp; nutrition', 'text' => 'High-LTV brands with a strong repeat engine.' ),
		array( 'icon' => 'lucide:armchair', 'title' => 'Home &amp; lifestyle', 'text' => 'Bigger baskets via bundles &amp; rich PDPs.' ),
		array( 'icon' => 'lucide:headphones', 'title' => 'Electronics &amp; gadgets', 'text' => 'Specs, reviews &amp; retargeting that close.' ),
	);

	$rows = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'd2c_ecommerce_categories' ) ) {
		while ( have_rows( 'd2c_ecommerce_categories' ) ) {
			the_row();
			$rows[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'text' ) ),
			);
		}
	}
	if ( ! $rows ) {
		$rows = $defaults; // Pre-escaped default markup (preserves the &amp; entities verbatim).
	}

	foreach ( $rows as $i => $c ) {
		$delay = 0 === $i % 3 ? '' : ' data-delay="' . (int) ( $i % 3 ) . '"';
		printf(
			'<div class="cat reveal rounded-xl2 border border-line bg-paper p-6"%s><span class="cat-ic grid place-items-center h-14 w-14 rounded-2xl bg-surface text-accent text-3xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-xl tt mt-4">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$delay,
			$c['icon'],
			$c['title'], // Pre-escaped above / known-safe default markup.
			$c['text']   // Pre-escaped above / known-safe default markup.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the D2C growth-cart line items from ACF (d2c_ecommerce_cart_items
 * repeater), falling back to the original six defaults when empty / ACF off.
 */
function bx_d2c_ecommerce_render_cart_items() {
	$defaults = array(
		array( 'icon' => 'lucide:palette', 'title' => 'Brand that stands out', 'text' => 'Identity, packaging &amp; story that earns the click.', 'link' => '/services/brand-consulting/' ),
		array( 'icon' => 'lucide:search', 'title' => 'SEO &amp; Google Shopping', 'text' => 'An ecommerce SEO company in Jaipur capturing "best [product]" &amp; category demand.', 'link' => '/services/seo-services/' ),
		array( 'icon' => 'lucide:target', 'title' => 'ROAS-driven ads', 'text' => 'Meta, Google &amp; marketplaces, tuned for profit.', 'link' => '/services/performance-marketing/' ),
		array( 'icon' => 'lucide:monitor-smartphone', 'title' => 'A store that converts', 'text' => 'Fast Shopify, rich PDPs &amp; checkout CRO.', 'link' => '/services/website-design/' ),
		array( 'icon' => 'lucide:clapperboard', 'title' => 'Content &amp; UGC that sells', 'text' => 'Reels &amp; creators that feed your ads.', 'link' => '/services/social-media-marketing/' ),
		array( 'icon' => 'lucide:mail', 'title' => 'Retention &amp; LTV', 'text' => 'Email, WhatsApp &amp; loyalty that grow repeat.', 'link' => '/services/digital-marketing/' ),
	);

	$rows = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'd2c_ecommerce_cart_items' ) ) {
		while ( have_rows( 'd2c_ecommerce_cart_items' ) ) {
			the_row();
			$rows[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'text' ) ),
				'link'  => esc_url( (string) get_sub_field( 'link' ) ),
			);
		}
	}
	if ( ! $rows ) {
		foreach ( $defaults as $d ) {
			$rows[] = array(
				'icon'  => $d['icon'],
				'title' => $d['title'], // Pre-escaped default markup (keeps &amp; entities verbatim).
				'text'  => $d['text'],  // Pre-escaped default markup (keeps &amp; entities verbatim).
				'link'  => esc_url( $d['link'] ),
			);
		}
	}

	foreach ( $rows as $c ) {
		printf(
			'<a href="%s" class="citem flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><span class="inline-flex items-center gap-1 text-xs text-accent font-medium shrink-0"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon> Added</span><iconify-icon icon="lucide:arrow-up-right" class="citem-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>',
			$c['link'],
			$c['icon'],
			$c['title'], // Pre-escaped above / known-safe default markup.
			$c['text']   // Pre-escaped above / known-safe default markup.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the D2C FAQ accordion items from ACF (d2c_ecommerce_faq_items
 * repeater), falling back to the original six default questions when empty.
 */
function bx_d2c_ecommerce_render_faqs() {
	$defaults = array(
		array(
			'q' => 'How do you market a D2C / eCommerce brand?',
			'a' => 'As an ecommerce marketing agency in Jaipur, we grow a D2C brand across five moves: brand it to stand out (identity, packaging, story), win search and shopping (SEO, Google Shopping, AEO and GEO), scale ads profitably (Meta Ads, Google and marketplace campaigns tuned for ROAS and new-customer profit), make the store convert (fast Shopify, rich PDPs and checkout CRO), and retain (email, WhatsApp and loyalty) so first orders become repeat customers.',
		),
		array(
			'q' => 'How do you improve ROAS and lower CAC?',
			'a' => 'We attack it from both sides: better creative and tighter targeting to lower acquisition cost, and conversion-rate, AOV and retention work to raise the value of every customer. Strong UGC, offer structure, checkout CRO and email/WhatsApp flows mean each rupee of ad spend earns more — which is how ROAS holds as you scale.',
		),
		array(
			'q' => 'Do you work with Shopify and other platforms?',
			'a' => 'Yes. As a Shopify marketing agency in Jaipur, we build and optimise high-converting Shopify stores, and also work with WooCommerce and custom storefronts. Our website and UI/UX teams handle rich product pages, fast load times, shopping feed setup and checkout CRO so the traffic your campaigns drive actually converts.',
		),
		array(
			'q' => 'Do you handle marketplaces like Amazon &amp; Flipkart?',
			'a' => "Yes. Marketplace marketing in Jaipur is part of the mix — we help with listings, A+ content, ads and ratings on Amazon and Flipkart, while building your own website and audience so you're not fully dependent on marketplaces. The right balance depends on your margins and category.",
		),
		array(
			'q' => 'How long until we see profitable growth?',
			'a' => 'Paid campaigns can drive orders within days, with ROAS improving over the first 30–60 days as creative and targeting are optimised. Retention and SEO compound over 3–6 months, lowering your blended acquisition cost and lifting lifetime value.',
		),
		array(
			'q' => 'Do you create the ad creative and UGC?',
			'a' => 'Yes — creative is where D2C is won. We produce scroll-stopping static and video ads, source and direct UGC creators, and continuously test hooks and angles so your best-performing creative keeps your performance ads efficient.',
		),
	);

	$rows = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'd2c_ecommerce_faq_items' ) ) {
		while ( have_rows( 'd2c_ecommerce_faq_items' ) ) {
			the_row();
			$rows[] = array(
				'q' => esc_html( (string) get_sub_field( 'question' ) ),
				'a' => esc_html( (string) get_sub_field( 'answer' ) ),
			);
		}
	}
	if ( ! $rows ) {
		$rows = $defaults; // Question 4 keeps its original &amp; entity verbatim.
	}

	foreach ( $rows as $i => $it ) {
		$open     = 0 === $i ? ' open' : '';
		$expanded = 0 === $i ? 'true' : 'false';
		printf(
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="%s">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			$open,
			$expanded,
			$it['q'], // Pre-escaped above / known-safe default markup.
			$it['a']  // Pre-escaped above / known-safe default markup.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}

/**
 * Render the D2C "Explore more" related cards from ACF
 * (d2c_ecommerce_related_items repeater), falling back to the original three
 * defaults when empty / ACF off.
 */
function bx_d2c_ecommerce_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:target', 'title' => 'Performance Marketing', 'text' => 'ROAS-driven ads', 'link' => '/services/performance-marketing/' ),
		array( 'icon' => 'lucide:thumbs-up', 'title' => 'Social &amp; UGC', 'text' => 'Creative that sells', 'link' => '/services/social-media-marketing/' ),
		array( 'icon' => 'lucide:layers', 'title' => 'All Industries', 'text' => 'Other sectors', 'link' => '/industries/' ),
	);

	$rows = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'd2c_ecommerce_related_items' ) ) {
		while ( have_rows( 'd2c_ecommerce_related_items' ) ) {
			the_row();
			$rows[] = array(
				'icon'  => esc_attr( (string) get_sub_field( 'icon' ) ),
				'title' => esc_html( (string) get_sub_field( 'title' ) ),
				'text'  => esc_html( (string) get_sub_field( 'text' ) ),
				'link'  => esc_url( (string) get_sub_field( 'link' ) ),
			);
		}
	}
	if ( ! $rows ) {
		foreach ( $defaults as $d ) {
			$rows[] = array(
				'icon'  => $d['icon'],
				'title' => $d['title'], // Pre-escaped default markup (keeps &amp; entity verbatim).
				'text'  => $d['text'],
				'link'  => esc_url( $d['link'] ),
			);
		}
	}

	foreach ( $rows as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<a href="%s" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>',
			$r['link'],
			$delay,
			$r['icon'],
			$r['title'], // Pre-escaped above / known-safe default markup.
			$r['text']   // Pre-escaped above / known-safe default markup.
		); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
	}
}
