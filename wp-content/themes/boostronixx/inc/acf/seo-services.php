<?php
/**
 * ACF field group + render helpers for the SEO Services page template
 * (page-seo-services.php). Registered in PHP so it is version-controlled and not
 * DB-only, mirroring inc/acf/about-us.php.
 *
 * Defaults mirror the original hard-coded content; the template also falls back
 * to the same defaults via bx_field()/render helpers so nothing ever blanks if
 * ACF is off. Every key/name is prefixed `seo_services_` for global uniqueness.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_acf_seo_services' );
/**
 * Register the SEO Services page field group.
 */
function bx_acf_seo_services() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'        => 'group_seo-services',
			'title'      => 'SEO Services Page Content',
			'location'   => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-seo-services.php',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_seo_services_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_hero_badge',
					'name'          => 'seo_services_hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Local SEO experts · Jaipur, Rajasthan',
				),
				array(
					'key'           => 'f_seo_services_hero_heading',
					'name'          => 'seo_services_hero_heading',
					'label'         => 'Heading (before accent)',
					'type'          => 'text',
					'default_value' => 'SEO company in Jaipur that ',
				),
				array(
					'key'           => 'f_seo_services_hero_heading_accent',
					'name'          => 'seo_services_hero_heading_accent',
					'label'         => 'Heading — accent words',
					'type'          => 'text',
					'default_value' => 'ranks & converts',
				),
				array(
					'key'           => 'f_seo_services_hero_text',
					'name'          => 'seo_services_hero_text',
					'label'         => 'Intro paragraph',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'As an SEO company in Jaipur, BoostronixX delivers result-driven, white-hat SEO services that help local businesses rank higher on Google, attract qualified traffic and generate consistent organic leads.',
				),
				array(
					'key'           => 'f_seo_services_hero_cta1',
					'name'          => 'seo_services_hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_seo_services_hero_cta2',
					'name'          => 'seo_services_hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_seo_services_hero_feat1',
					'name'          => 'seo_services_hero_feature_1',
					'label'         => 'Feature pill 1',
					'type'          => 'text',
					'default_value' => 'White-hat only',
				),
				array(
					'key'           => 'f_seo_services_hero_feat2',
					'name'          => 'seo_services_hero_feature_2',
					'label'         => 'Feature pill 2',
					'type'          => 'text',
					'default_value' => 'Monthly reporting',
				),
				array(
					'key'           => 'f_seo_services_hero_feat3',
					'name'          => 'seo_services_hero_feature_3',
					'label'         => 'Feature pill 3',
					'type'          => 'text',
					'default_value' => 'No lock-in tricks',
				),
				array(
					'key'           => 'f_seo_services_hero_feat_aeo',
					'name'          => 'seo_services_hero_feature_aeo',
					'label'         => 'Feature pill — AEO/GEO link text',
					'instructions'  => 'The "&" renders correctly; written as plain text.',
					'type'          => 'text',
					'default_value' => 'AEO & GEO included',
				),

				// ---------------- OVERVIEW & INCLUDES TAB ----------------
				array(
					'key'   => 'tab_seo_services_overview',
					'label' => 'Overview & includes',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_overview_eyebrow',
					'name'          => 'seo_services_overview_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Overview',
				),
				array(
					'key'           => 'f_seo_services_overview_heading',
					'name'          => 'seo_services_overview_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A trusted SEO company in Jaipur for ambitious brands',
				),
				array(
					'key'           => 'f_seo_services_overview_text',
					'name'          => 'seo_services_overview_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Our SEO services in Jaipur span on-page, off-page, technical and local SEO plus content marketing — with a focus on real estate, schools, healthcare and D2C brands across Jaipur and beyond. Every tactic is white-hat, built for long-term visibility, not short-lived spikes.',
				),
				array(
					'key'           => 'f_seo_services_overview_button',
					'name'          => 'seo_services_overview_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_seo_services_includes_title',
					'name'          => 'seo_services_includes_title',
					'label'         => "What's included — label",
					'type'          => 'text',
					'default_value' => "What's included",
				),
				array(
					'key'          => 'f_seo_services_includes_items',
					'name'         => 'seo_services_includes',
					'label'        => 'Included items',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name (e.g. lucide:file-search). Badge = small "New" label, leave empty for none. Highlight = tint the card (used for the AEO/GEO cards).',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add item',
					'sub_fields'   => array(
						array(
							'key'   => 'f_seo_services_include_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_include_label',
							'name'  => 'label',
							'label' => 'Label',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_include_badge',
							'name'  => 'badge',
							'label' => 'Badge (e.g. New)',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_seo_services_include_highlight',
							'name'          => 'highlight',
							'label'         => 'Highlight card',
							'type'          => 'true_false',
							'ui'            => 1,
							'default_value' => 0,
						),
					),
				),

				// ---------------- DASHBOARD IMAGE TAB ----------------
				array(
					'key'   => 'tab_seo_services_dashboard',
					'label' => 'Dashboard image',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_dashboard_img_file',
					'name'          => 'seo_services_dashboard_image',
					'label'         => 'Dashboard image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_seo_services_dashboard_alt',
					'name'          => 'seo_services_dashboard_image_alt',
					'label'         => 'Dashboard image — alt text',
					'type'          => 'text',
					'default_value' => 'BoostronixX SEO reporting dashboard showing keyword rankings and organic traffic growth',
				),
				array(
					'key'           => 'f_seo_services_dashboard_cap_b',
					'name'          => 'seo_services_dashboard_caption_title',
					'label'         => 'Dashboard image — caption title',
					'type'          => 'text',
					'default_value' => 'SEO dashboard · 1600×700',
				),
				array(
					'key'           => 'f_seo_services_dashboard_cap_s',
					'name'          => 'seo_services_dashboard_caption_text',
					'label'         => 'Dashboard image — caption text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Screenshot of a real ranking / traffic dashboard (Google Search Console or Analytics) with rising organic-traffic and keyword-position graphs. Anonymise client data.',
				),

				// ---------------- PROCESS TAB ----------------
				array(
					'key'   => 'tab_seo_services_process',
					'label' => 'Process',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_process_eyebrow',
					'name'          => 'seo_services_process_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Our process',
				),
				array(
					'key'           => 'f_seo_services_process_heading',
					'name'          => 'seo_services_process_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'How we get you ranking',
				),
				array(
					'key'          => 'f_seo_services_process_items',
					'name'         => 'seo_services_process_steps',
					'label'        => 'Steps',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add step',
					'sub_fields'   => array(
						array(
							'key'   => 'f_seo_services_process_num',
							'name'  => 'number',
							'label' => 'Number',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_process_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_process_text',
							'name'  => 'text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- LOCAL SEO TAB ----------------
				array(
					'key'   => 'tab_seo_services_local',
					'label' => 'Local SEO',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_local_eyebrow',
					'name'          => 'seo_services_local_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Local SEO Jaipur',
				),
				array(
					'key'           => 'f_seo_services_local_heading',
					'name'          => 'seo_services_local_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Own the map pack in your city',
				),
				array(
					'key'           => 'f_seo_services_local_text',
					'name'          => 'seo_services_local_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'When someone searches "SEO agency near me" or "in Jaipur", local SEO decides whether they find you or a competitor. Our local SEO services in Jaipur cover Google Business Profile optimization, local citations and reviews, so you show up in the map pack and on Maps when buyers are ready to act.',
				),
				array(
					'key'           => 'f_seo_services_local_points',
					'name'          => 'seo_services_local_points',
					'label'         => 'Checklist points',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "GBP optimisation\nLocal citations & NAP\nReview strategy\nLocal landing pages",
				),
				array(
					'key'           => 'f_seo_services_local_img_file',
					'name'          => 'seo_services_local_image',
					'label'         => 'Map pack / GBP image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'library'       => 'all',
					'mime_types'    => 'jpg,jpeg,png,webp,avif',
					'instructions'  => 'Upload the section image. Leave empty to show the placeholder box.',
				),
				array(
					'key'           => 'f_seo_services_local_img_alt',
					'name'          => 'seo_services_local_image_alt',
					'label'         => 'Map image — alt text',
					'type'          => 'text',
					'default_value' => 'Google local map pack showing BoostronixX ranking for SEO company in Jaipur',
				),
				array(
					'key'           => 'f_seo_services_local_img_cap_b',
					'name'          => 'seo_services_local_caption_title',
					'label'         => 'Map image — caption title',
					'type'          => 'text',
					'default_value' => 'Map pack · 1080×810',
				),
				array(
					'key'           => 'f_seo_services_local_img_cap_s',
					'name'          => 'seo_services_local_caption_text',
					'label'         => 'Map image — caption text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Screenshot of the Google local 3-pack / Maps result for a Jaipur search, or a Google Business Profile with reviews. Shows local ranking proof.',
				),

				// ---------------- AEO & GEO TAB ----------------
				array(
					'key'   => 'tab_seo_services_aeo',
					'label' => 'AEO & GEO',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_aeo_eyebrow',
					'name'          => 'seo_services_aeo_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Trending now · AI search',
				),
				array(
					'key'           => 'f_seo_services_aeo_heading_a',
					'name'          => 'seo_services_aeo_heading_a',
					'label'         => 'Heading — line 1',
					'type'          => 'text',
					'default_value' => "Don't just rank.",
				),
				array(
					'key'           => 'f_seo_services_aeo_heading_b',
					'name'          => 'seo_services_aeo_heading_b',
					'label'         => 'Heading — line 2 (before accent)',
					'type'          => 'text',
					'default_value' => 'Be the ',
				),
				array(
					'key'           => 'f_seo_services_aeo_heading_accent',
					'name'          => 'seo_services_aeo_heading_accent',
					'label'         => 'Heading — accent word',
					'type'          => 'text',
					'default_value' => 'answer',
				),
				array(
					'key'          => 'f_seo_services_aeo_intro_note',
					'label'        => 'Intro paragraph',
					'instructions' => 'The intro paragraph below the heading contains inline emphasis markup (&lt;em&gt;one&lt;/em&gt;) and is left in the template.',
					'type'         => 'message',
					'message'      => 'Search has changed. People now ask ChatGPT, Perplexity and Google AI Overviews — and those engines answer with <em>one</em> recommendation, not ten blue links. AEO and GEO make sure that recommendation is you.',
				),
				array(
					'key'           => 'f_seo_services_aeo_card1_title',
					'name'          => 'seo_services_aeo_card1_title',
					'label'         => 'Card 1 — title',
					'type'          => 'text',
					'default_value' => 'AEO — Answer Engine Optimization',
				),
				array(
					'key'           => 'f_seo_services_aeo_card1_text',
					'name'          => 'seo_services_aeo_card1_text',
					'label'         => 'Card 1 — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Structuring your content so search engines lift it as the direct answer — featured snippets, People Also Ask, voice search and FAQ rich results.',
				),
				array(
					'key'           => 'f_seo_services_aeo_card2_title',
					'name'          => 'seo_services_aeo_card2_title',
					'label'         => 'Card 2 — title',
					'type'          => 'text',
					'default_value' => 'GEO — Generative Engine Optimization',
				),
				array(
					'key'           => 'f_seo_services_aeo_card2_text',
					'name'          => 'seo_services_aeo_card2_text',
					'label'         => 'Card 2 — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Making your brand citable by AI — entity building, schema, llms.txt, brand mentions and content AI models trust enough to quote and recommend.',
				),
				array(
					'key'           => 'f_seo_services_aeo_tags',
					'name'          => 'seo_services_aeo_tags',
					'label'         => 'Tags',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 5,
					'default_value' => "Schema & entities\nllms.txt\nCitable content\nBrand mentions\nAI visibility tracking",
				),

				// ---------------- TIMELINE TAB ----------------
				array(
					'key'   => 'tab_seo_services_timeline',
					'label' => 'Timeline',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_timeline_eyebrow',
					'name'          => 'seo_services_timeline_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Realistic timelines',
				),
				array(
					'key'           => 'f_seo_services_timeline_heading',
					'name'          => 'seo_services_timeline_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => "SEO compounds — here's roughly when to expect movement",
				),
				array(
					'key'          => 'f_seo_services_timeline_items',
					'name'         => 'seo_services_timeline',
					'label'        => 'Timeline cards',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_seo_services_timeline_when',
							'name'  => 'when',
							'label' => 'When (e.g. 4–8 wks)',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_timeline_desc',
							'name'  => 'description',
							'label' => 'Description',
							'type'  => 'textarea',
							'rows'  => 2,
						),
					),
				),
				array(
					'key'           => 'f_seo_services_timeline_note',
					'name'          => 'seo_services_timeline_note',
					'label'         => 'Footnote',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'Timelines are typical ranges and vary with competition, budget and starting point — never guaranteed.',
				),

				// ---------------- WHY US / E-E-A-T TAB ----------------
				array(
					'key'   => 'tab_seo_services_why',
					'label' => 'Why us',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_why_eyebrow',
					'name'          => 'seo_services_why_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Why choose BoostronixX',
				),
				array(
					'key'           => 'f_seo_services_why_heading',
					'name'          => 'seo_services_why_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'What makes us the best SEO company in Jaipur',
				),
				array(
					'key'          => 'f_seo_services_why_items',
					'name'         => 'seo_services_why_cards',
					'label'        => 'Why-us cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_seo_services_why_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_why_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_why_text',
							'name'  => 'text',
							'label' => 'Text',
							'type'  => 'textarea',
							'rows'  => 2,
						),
					),
				),
				array(
					'key'           => 'f_seo_services_reviewer_title',
					'name'          => 'seo_services_reviewer_title',
					'label'         => 'Reviewer — title',
					'type'          => 'text',
					'default_value' => 'Reviewed by the BoostronixX SEO team',
				),
				array(
					'key'           => 'f_seo_services_reviewer_text',
					'name'          => 'seo_services_reviewer_text',
					'label'         => 'Reviewer — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Practising SEO since 2026 across 50+ brands in real estate, schools and D2C. We follow Google's guidelines and white-hat best practices on every engagement.",
				),
				array(
					'key'           => 'f_seo_services_reviewer_link',
					'name'          => 'seo_services_reviewer_link',
					'label'         => 'Reviewer — link',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_seo_services_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_faq_eyebrow',
					'name'          => 'seo_services_faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'SEO FAQ',
				),
				array(
					'key'           => 'f_seo_services_faq_heading',
					'name'          => 'seo_services_faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Your SEO questions, answered',
				),
				array(
					'key'          => 'f_seo_services_faq_items',
					'name'         => 'seo_services_faq',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_seo_services_faq_q',
							'name'  => 'question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_faq_a',
							'name'  => 'answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 4,
						),
					),
				),

				// ---------------- RELATED & CTA TAB ----------------
				array(
					'key'   => 'tab_seo_services_cta',
					'label' => 'Related & CTA',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_seo_services_related_label',
					'name'          => 'seo_services_related_label',
					'label'         => 'Related services — label',
					'type'          => 'text',
					'default_value' => 'Related services',
				),
				array(
					'key'          => 'f_seo_services_related_items',
					'name'         => 'seo_services_related',
					'label'        => 'Related service cards',
					'instructions' => 'Leave empty to keep the current defaults. Icon = Iconify name.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add card',
					'sub_fields'   => array(
						array(
							'key'   => 'f_seo_services_related_icon',
							'name'  => 'icon',
							'label' => 'Icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_related_title',
							'name'  => 'title',
							'label' => 'Title',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_seo_services_related_text',
							'name'  => 'text',
							'label' => 'Sub-text',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_seo_services_related_link',
							'name'          => 'link',
							'label'         => 'Link',
							'type'          => 'link',
							'return_format' => 'array',
						),
					),
				),
				array(
					'key'           => 'f_seo_services_cta_heading',
					'name'          => 'seo_services_cta_heading',
					'label'         => 'CTA — heading',
					'type'          => 'text',
					'default_value' => 'Ready to rank on page one?',
				),
				array(
					'key'           => 'f_seo_services_cta_text',
					'name'          => 'seo_services_cta_text',
					'label'         => 'CTA — text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "Get a free SEO audit of your site — we'll show you the quick wins and a clear path to more organic leads.",
				),
				array(
					'key'           => 'f_seo_services_cta_button',
					'name'          => 'seo_services_cta_button',
					'label'         => 'CTA — button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_seo_services_cta_phone',
					'name'          => 'seo_services_cta_phone',
					'label'         => 'CTA — phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_seo_services_cta_phone_href',
					'name'          => 'seo_services_cta_phone_href',
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
 * Render the SEO Services "What's included" cards from ACF
 * (seo_services_includes repeater), falling back to the original ten defaults
 * when empty / ACF off.
 */
function bx_seo_services_render_includes() {
	$defaults = array(
		array( 'icon' => 'lucide:file-search', 'label' => 'On-Page SEO Optimisation', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:map-pin', 'label' => 'Local SEO — Jaipur', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:key-round', 'label' => 'Keyword Research &amp; Strategy', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:link', 'label' => 'Link Building &amp; Backlinks', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:pen-tool', 'label' => 'Content Marketing', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:building-2', 'label' => 'Google Business Profile', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:mail', 'label' => 'Email Marketing', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:bar-chart-3', 'label' => 'Monthly SEO Reporting', 'badge' => '', 'highlight' => false ),
		array( 'icon' => 'lucide:message-square-quote', 'label' => 'AEO — Answer Engine Optimization', 'badge' => 'New', 'highlight' => true ),
		array( 'icon' => 'lucide:sparkles', 'label' => 'GEO — AI Search Visibility', 'badge' => 'New', 'highlight' => true ),
	);

	$items     = array();
	$from_acf  = false;
	if ( function_exists( 'have_rows' ) && have_rows( 'seo_services_includes' ) ) {
		$from_acf = true;
		while ( have_rows( 'seo_services_includes' ) ) {
			the_row();
			$items[] = array(
				'icon'      => (string) get_sub_field( 'icon' ),
				'label'     => (string) get_sub_field( 'label' ),
				'badge'     => (string) get_sub_field( 'badge' ),
				'highlight' => (bool) get_sub_field( 'highlight' ),
			);
		}
	}
	if ( ! $items ) {
		$items    = $defaults;
		$from_acf = false;
	}

	foreach ( $items as $i => $it ) {
		// Class string is composed of known-safe literals; matches the original
		// markup byte-for-byte (border classes precede p-4).
		$classes = $it['highlight']
			? 'reveal flex items-center gap-3 rounded-xl border border-accent/40 bg-accent/5 p-4'
			: 'reveal flex items-center gap-3 rounded-xl border border-line p-4';
		$delay   = ( 0 === $i % 2 ) ? '' : ' data-delay="1"';

		// Label may carry intentional &amp; entities in defaults; from ACF it is escaped.
		$label = $from_acf ? esc_html( $it['label'] ) : $it['label'];

		$badge = '';
		if ( '' !== $it['badge'] ) {
			$badge_text = $from_acf ? esc_html( $it['badge'] ) : $it['badge'];
			$badge      = ' <span class="ml-1 rounded-full bg-accent text-paper text-[10px] font-semibold px-2 py-0.5 align-middle">' . $badge_text . '</span>';
		}

		printf(
			'<div class="%s"%s><span class="text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="font-medium text-sm">%s%s</span></div>',
			$classes, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- known-safe literal class string.
			$delay,
			esc_attr( $it['icon'] ),
			$label, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above / known-safe default markup.
			$badge // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above / known-safe default markup.
		);
	}
}

/**
 * Render the SEO Services process step cards from ACF
 * (seo_services_process_steps repeater), falling back to the original four
 * defaults when empty / ACF off.
 */
function bx_seo_services_render_process() {
	$defaults = array(
		array( 'number' => '01', 'title' => 'Audit &amp; research', 'text' => 'A technical audit surfacing crawl errors, speed issues and keyword gaps — plus a close look at your competitors.' ),
		array( 'number' => '02', 'title' => 'Keyword &amp; content plan', 'text' => 'We target high-intent, locally relevant keywords — including long-tail and industry-specific terms.' ),
		array( 'number' => '03', 'title' => 'On-page &amp; technical SEO', 'text' => 'Technical SEO in Jaipur done right: meta optimisation, heading structure, internal linking, schema markup, Core Web Vitals and mobile usability.' ),
		array( 'number' => '04', 'title' => 'Links &amp; reporting', 'text' => 'White-hat link building services in Jaipur — high-quality backlinks from authoritative sites, with transparent monthly performance reports.' ),
	);

	$items    = array();
	$from_acf = false;
	if ( function_exists( 'have_rows' ) && have_rows( 'seo_services_process_steps' ) ) {
		$from_acf = true;
		while ( have_rows( 'seo_services_process_steps' ) ) {
			the_row();
			$items[] = array(
				'number' => (string) get_sub_field( 'number' ),
				'title'  => (string) get_sub_field( 'title' ),
				'text'   => (string) get_sub_field( 'text' ),
			);
		}
	}
	if ( ! $items ) {
		$items    = $defaults;
		$from_acf = false;
	}

	foreach ( $items as $i => $s ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		$title = $from_acf ? esc_html( $s['title'] ) : $s['title'];
		$text  = $from_acf ? esc_html( $s['text'] ) : $s['text'];
		printf(
			'<div class="reveal lift rounded-xl2 bg-paper border border-line p-7"%s><span class="font-display text-5xl tt text-accent/25">%s</span><h3 class="font-display text-xl tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-2 leading-relaxed">%s</p></div>',
			$delay,
			$from_acf ? esc_html( $s['number'] ) : $s['number'],
			$title, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above / known-safe default markup.
			$text // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above / known-safe default markup.
		);
	}
}

/**
 * Render the SEO Services timeline cards from ACF (seo_services_timeline
 * repeater), falling back to the original three defaults when empty / ACF off.
 */
function bx_seo_services_render_timeline() {
	$defaults = array(
		array( 'when' => '4–8 wks', 'description' => 'Local SEO begins to move — Maps &amp; local pack.' ),
		array( 'when' => '3–6 mo', 'description' => 'Noticeable ranking &amp; organic-traffic improvements.' ),
		array( 'when' => '6–12 mo', 'description' => 'Competitive keywords reach the front page.' ),
	);

	$items    = array();
	$from_acf = false;
	if ( function_exists( 'have_rows' ) && have_rows( 'seo_services_timeline' ) ) {
		$from_acf = true;
		while ( have_rows( 'seo_services_timeline' ) ) {
			the_row();
			$items[] = array(
				'when'        => (string) get_sub_field( 'when' ),
				'description' => (string) get_sub_field( 'description' ),
			);
		}
	}
	if ( ! $items ) {
		$items    = $defaults;
		$from_acf = false;
	}

	foreach ( $items as $t ) {
		$desc = $from_acf ? esc_html( $t['description'] ) : $t['description'];
		printf(
			'<div class="rounded-2xl bg-white/5 border border-white/10 p-6"><p class="font-display text-3xl tt text-accent">%s</p><p class="text-paper/70 text-sm mt-1.5">%s</p></div>',
			$from_acf ? esc_html( $t['when'] ) : $t['when'],
			$desc // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above / known-safe default markup.
		);
	}
}

/**
 * Render the SEO Services "Why us" cards from ACF (seo_services_why_cards
 * repeater), falling back to the original four defaults when empty / ACF off.
 */
function bx_seo_services_render_why() {
	$defaults = array(
		array( 'icon' => 'lucide:map-pinned', 'title' => 'Deep local knowledge', 'text' => "We know how Jaipur's competitive sectors search and convert." ),
		array( 'icon' => 'lucide:database', 'title' => 'Data-driven expertise', 'text' => 'Decisions backed by Search Console, Analytics and real SERP data.' ),
		array( 'icon' => 'lucide:target', 'title' => 'Focused on outcomes', 'text' => 'We optimise for leads and revenue — not vanity rankings.' ),
		array( 'icon' => 'lucide:shield-check', 'title' => 'White-hat &amp; transparent', 'text' => 'Sustainable methods and clear monthly reporting, always.' ),
	);

	$items    = array();
	$from_acf = false;
	if ( function_exists( 'have_rows' ) && have_rows( 'seo_services_why_cards' ) ) {
		$from_acf = true;
		while ( have_rows( 'seo_services_why_cards' ) ) {
			the_row();
			$items[] = array(
				'icon'  => (string) get_sub_field( 'icon' ),
				'title' => (string) get_sub_field( 'title' ),
				'text'  => (string) get_sub_field( 'text' ),
			);
		}
	}
	if ( ! $items ) {
		$items    = $defaults;
		$from_acf = false;
	}

	foreach ( $items as $i => $c ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		$title = $from_acf ? esc_html( $c['title'] ) : $c['title'];
		$text  = $from_acf ? esc_html( $c['text'] ) : $c['text'];
		printf(
			'<div class="reveal lift rounded-2xl border border-line p-6"%s><span class="text-accent text-2xl"><iconify-icon icon="%s"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">%s</h3><p class="text-ink-soft text-sm mt-1.5">%s</p></div>',
			$delay,
			esc_attr( $c['icon'] ),
			$title, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above / known-safe default markup.
			$text // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above / known-safe default markup.
		);
	}
}

/**
 * Render the SEO Services FAQ accordion items from ACF (seo_services_faq
 * repeater), falling back to the original six default questions when empty /
 * ACF off.
 */
function bx_seo_services_render_faqs() {
	$defaults = array(
		array(
			'q' => 'What is SEO and why do Jaipur businesses need it?',
			'a' => 'SEO improves your visibility on Google so customers find you when they search. In competitive Jaipur sectors like real estate, schools, healthcare and D2C retail, strong SEO is often the difference between a steady flow of organic leads and being invisible to buyers.',
		),
		array(
			'q' => 'How long does SEO take to show results?',
			'a' => 'Typically 3 to 6 months for noticeable improvements, and 6 to 12 months for highly competitive keywords. Local SEO usually moves faster — often within 4 to 8 weeks. SEO compounds over time, so results build and strengthen the longer you invest.',
		),
		array(
			'q' => 'What is local SEO and do I need it?',
			'a' => 'Local SEO helps you rank for location-based searches like "SEO company in Jaipur" or "near me". It includes Google Business Profile optimisation, local citations and reviews. If you serve customers in a specific area, you need it to appear in the local map pack.',
		),
		array(
			'q' => 'What SEO services does BoostronixX offer?',
			'a' => 'A full stack: technical audits, on-page and off-page optimisation, keyword research, content marketing, link building, local SEO, e-commerce SEO and transparent monthly reporting — all using white-hat methods. Plans are scoped to your goals and budget, so you get affordable SEO services in Jaipur without lock-in tricks.',
		),
		array(
			'q' => 'Why choose BoostronixX for SEO?',
			'a' => "Deep local market knowledge, data-driven SEO expertise and a relentless focus on real business outcomes — backed by transparent reporting and specialisation in Jaipur's competitive sectors.",
		),
		array(
			'q' => 'What are AEO and GEO — and do I need them?',
			'a' => 'AEO (Answer Engine Optimization) structures your content so search engines lift it as the direct answer — featured snippets, People Also Ask and voice search. GEO (Generative Engine Optimization) makes your brand citable by AI tools like ChatGPT, Perplexity, Gemini and Google AI Overviews through schema, entity building, llms.txt and authoritative content. As more buyers ask AI instead of scrolling results, both are fast becoming essential — and they build on the same white-hat foundation as classic SEO.',
		),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'seo_services_faq' ) ) {
		while ( have_rows( 'seo_services_faq' ) ) {
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
			'<div class="faq border border-line rounded-2xl bg-paper px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}

/**
 * Render the SEO Services "Related services" cards from ACF
 * (seo_services_related repeater), falling back to the original three defaults
 * when empty / ACF off.
 */
function bx_seo_services_render_related() {
	$defaults = array(
		array( 'icon' => 'lucide:target', 'title' => 'Performance Marketing', 'text' => 'Paid ads that convert', 'url' => '/services/performance-marketing/' ),
		array( 'icon' => 'lucide:thumbs-up', 'title' => 'Social Media', 'text' => 'Content that engages', 'url' => '/services/social-media-marketing/' ),
		array( 'icon' => 'lucide:layout-grid', 'title' => 'All Services', 'text' => 'See the full stack', 'url' => '/services/' ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'seo_services_related' ) ) {
		while ( have_rows( 'seo_services_related' ) ) {
			the_row();
			$link    = get_sub_field( 'link' );
			$url     = ( is_array( $link ) && ! empty( $link['url'] ) ) ? $link['url'] : '/services/';
			$items[] = array(
				'icon'  => (string) get_sub_field( 'icon' ),
				'title' => (string) get_sub_field( 'title' ),
				'text'  => (string) get_sub_field( 'text' ),
				'url'   => $url,
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $r ) {
		$delay = 0 === $i ? '' : ' data-delay="' . (int) $i . '"';
		printf(
			'<a href="%s" class="reveal lift group rounded-2xl border border-line p-6 flex items-center gap-4"%s><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="%s"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">%s</span><span class="text-xs text-ink-soft">%s</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition"></iconify-icon></a>',
			esc_url( $r['url'] ),
			$delay,
			esc_attr( $r['icon'] ),
			esc_html( $r['title'] ),
			esc_html( $r['text'] )
		);
	}
}
