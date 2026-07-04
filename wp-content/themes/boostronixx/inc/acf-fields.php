<?php
/**
 * ACF field groups (registered in PHP so they are version-controlled and not
 * DB-only — CLAUDE.md §4 Rule D). Tab-wise per page section (§5).
 *
 * Defaults mirror the original hard-coded content; the templates also fall back
 * to the same defaults via bx_field()/?: so nothing ever blanks if ACF is off.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_register_acf_fields' );
/**
 * Register all local field groups.
 */
function bx_register_acf_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group(
		array(
			'key'      => 'group_home',
			'title'    => 'Home Page Content',
			'location' => array(
				array(
					array(
						'param'    => 'page_type',
						'operator' => '==',
						'value'    => 'front_page',
					),
				),
			),
			'menu_order' => 0,
			'position'   => 'normal',
			'style'      => 'default',
			'fields'     => array(

				// ---------------- HERO TAB ----------------
				array(
					'key'   => 'tab_hero',
					'label' => 'Hero',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_hero_badge',
					'name'          => 'hero_badge',
					'label'         => 'Badge text',
					'type'          => 'text',
					'default_value' => 'Creative branding & growth studio · Jaipur, India',
				),
				array(
					'key'           => 'f_hero_heading',
					'name'          => 'hero_heading',
					'label'         => 'Heading (line before the animated word)',
					'type'          => 'text',
					'default_value' => 'We build brands that',
				),
				array(
					'key'           => 'f_hero_words',
					'name'          => 'hero_rotating_words',
					'label'         => 'Rotating words',
					'instructions'  => 'One per line. These cycle in the heading after "' . 'We build brands that".',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "get noticed\nconvert\nstand out\nscale fast",
				),
				array(
					'key'           => 'f_hero_sub',
					'name'          => 'hero_subheading',
					'label'         => 'Subheading',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'BoostronixX is a digital marketing company in Jaipur — branding, SEO, social media and performance marketing in one creative team, turning ambitious businesses into brands people remember with ROI-driven, affordable growth.',
				),
				array(
					'key'           => 'f_hero_cta1',
					'name'          => 'hero_cta_primary',
					'label'         => 'Primary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_hero_cta2',
					'name'          => 'hero_cta_secondary',
					'label'         => 'Secondary button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_stat_eyebrow',
					'name'          => 'hero_stat_eyebrow',
					'label'         => 'Stat card — label',
					'type'          => 'text',
					'default_value' => 'Brands grown',
				),
				array(
					'key'           => 'f_stat_number',
					'name'          => 'hero_stat_number',
					'label'         => 'Stat card — number',
					'type'          => 'number',
					'default_value' => 50,
				),
				array(
					'key'           => 'f_stat_suffix',
					'name'          => 'hero_stat_suffix',
					'label'         => 'Stat card — number suffix',
					'type'          => 'text',
					'default_value' => '+',
				),
				array(
					'key'           => 'f_stat_caption',
					'name'          => 'hero_stat_caption',
					'label'         => 'Stat card — caption',
					'type'          => 'text',
					'default_value' => 'happy clients & counting',
				),
				array(
					'key'           => 'f_stat_tags',
					'name'          => 'hero_stat_tags',
					'label'         => 'Stat card — tags',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Branding\nSEO\nSocial\nAds",
				),

				// ---------------- FAQ TAB ----------------
				array(
					'key'   => 'tab_faq',
					'label' => 'FAQ',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_faq_eyebrow',
					'name'          => 'faq_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'FAQ',
				),
				array(
					'key'           => 'f_faq_heading',
					'name'          => 'faq_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Questions, answered',
				),
				array(
					'key'          => 'f_faq_items',
					'name'         => 'faq_items',
					'label'        => 'FAQ items',
					'instructions' => 'Leave empty to keep the current default questions.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add FAQ',
					'sub_fields'   => array(
						array(
							'key'   => 'f_faq_q',
							'name'  => 'question',
							'label' => 'Question',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_faq_a',
							'name'  => 'answer',
							'label' => 'Answer',
							'type'  => 'textarea',
							'rows'  => 3,
						),
					),
				),

				// ---------------- CTA TAB ----------------
				array(
					'key'   => 'tab_cta',
					'label' => 'Call to action',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_cta_heading',
					'name'          => 'cta_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Ready to build something great together?',
				),
				array(
					'key'           => 'f_cta_text',
					'name'          => 'cta_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Real estate, school, D2C or healthcare brand ready to scale — BoostronixX is your creative branding and digital marketing partner in Jaipur, trusted as one of the best digital marketing agencies in Jaipur for ROI-driven, affordable growth. Book a free strategy call today.',
				),
				array(
					'key'           => 'f_cta_button',
					'name'          => 'cta_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'           => 'f_cta_phone',
					'name'          => 'cta_phone',
					'label'         => 'Phone (display)',
					'type'          => 'text',
					'default_value' => '+91 80582 12202',
				),
				array(
					'key'           => 'f_cta_email',
					'name'          => 'cta_email',
					'label'         => 'Email',
					'type'          => 'email',
					'default_value' => 'boostronixx@gmail.com',
				),
				array(
					'key'           => 'f_cta_hours',
					'name'          => 'cta_hours',
					'label'         => 'Hours line',
					'type'          => 'text',
					'default_value' => 'Mon–Fri, 9 AM–7 PM IST',
				),

				// ---------------- INSIGHTS TAB ----------------
				array(
					'key'   => 'tab_insights',
					'label' => 'Insights',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_ins_eyebrow',
					'name'          => 'insights_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Insights',
				),
				array(
					'key'           => 'f_ins_heading',
					'name'          => 'insights_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Ideas on branding & growth',
				),
				array(
					'key'     => 'f_ins_note',
					'label'   => 'Articles',
					'type'    => 'message',
					'message' => 'The 3 cards below the heading are pulled automatically from your latest blog posts — no editing needed here.',
				),

				// ---------------- TESTIMONIALS TAB ----------------
				array(
					'key'   => 'tab_testi',
					'label' => 'Testimonials',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_testi_eyebrow',
					'name'          => 'testimonials_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Results clients trust',
				),
				array(
					'key'           => 'f_testi_heading',
					'name'          => 'testimonials_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Brands that grew with us',
				),
				array(
					'key'          => 'f_testi_items',
					'name'         => 'testimonials',
					'label'        => 'Testimonials',
					'instructions' => 'Leave empty to keep the current default testimonials.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add testimonial',
					'sub_fields'   => array(
						array(
							'key'   => 'f_t_quote',
							'name'  => 'quote',
							'label' => 'Quote',
							'type'  => 'textarea',
							'rows'  => 3,
						),
						array(
							'key'   => 'f_t_name',
							'name'  => 'name',
							'label' => 'Name',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_t_role',
							'name'  => 'role',
							'label' => 'Role / company',
							'type'  => 'text',
						),
						array(
							'key'           => 'f_t_avatar',
							'name'          => 'avatar',
							'label'         => 'Avatar',
							'type'          => 'image',
							'return_format' => 'array',
							'preview_size'  => 'thumbnail',
						),
					),
				),

				// ---------------- ABOUT TAB ----------------
				array(
					'key'   => 'tab_about',
					'label' => 'About',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_ab_eyebrow',
					'name'          => 'about_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Get to know us',
				),
				array(
					'key'           => 'f_ab_heading',
					'name'          => 'about_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'A creative studio that thinks like a growth team',
				),
				array(
					'key'           => 'f_ab_text',
					'name'          => 'about_text',
					'label'         => 'Text',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "BoostronixX turns ideas into scalable brands. We combine strategy, creativity and performance marketing to deliver consistent results — whether you're a start-up finding your footing or an established business ready to scale.",
				),
				array(
					'key'           => 'f_ab_points',
					'name'          => 'about_points',
					'label'         => 'Bullet points',
					'instructions'  => 'One per line.',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Strategy-first, creative-led\nTransparent, tracked ROI\nIn-house design & dev\nAI + data optimisation",
				),
				array(
					'key'          => 'f_ab_stats',
					'name'         => 'about_stats',
					'label'        => 'Stats',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add stat',
					'sub_fields'   => array(
						array(
							'key'   => 'f_ab_stat_label',
							'name'  => 'label',
							'label' => 'Label',
							'type'  => 'text',
						),
						array(
							'key'   => 'f_ab_stat_value',
							'name'  => 'value',
							'label' => 'Value',
							'type'  => 'text',
						),
					),
				),
				array(
					'key'           => 'f_ab_button',
					'name'          => 'about_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- WHY US TAB ----------------
				array(
					'key'   => 'tab_whyus',
					'label' => 'Why us',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_wu_eyebrow',
					'name'          => 'whyus_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Why BoostronixX',
				),
				array(
					'key'           => 'f_wu_heading',
					'name'          => 'whyus_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Outcomes, not vanity metrics — from a digital marketing agency in Jaipur',
				),
				array(
					'key'           => 'f_wu_res_label',
					'name'          => 'whyus_result_label',
					'label'         => 'Big stat — label',
					'type'          => 'text',
					'default_value' => 'Avg. client result',
				),
				array(
					'key'           => 'f_wu_res_num',
					'name'          => 'whyus_result_number',
					'label'         => 'Big stat — number (%)',
					'type'          => 'number',
					'default_value' => 65,
				),
				array(
					'key'           => 'f_wu_res_text',
					'name'          => 'whyus_result_text',
					'label'         => 'Big stat — caption',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'average year-on-year sales growth reported by our clients across Jaipur and beyond.',
				),
				array(
					'key'           => 'f_wu_exp',
					'name'          => 'whyus_exp_number',
					'label'         => 'In-house (%) — shown under the "In-house" stat',
					'type'          => 'number',
					'default_value' => 100,
				),
				array(
					'key'           => 'f_wu_clients',
					'name'          => 'whyus_clients_number',
					'label'         => 'Clients',
					'type'          => 'number',
					'default_value' => 50,
				),
				array(
					'key'           => 'f_wu_quote',
					'name'          => 'whyus_quote',
					'label'         => 'Quote',
					'type'          => 'text',
					'default_value' => "They don't just deliver services — they become your growth partners.",
				),

				// ---------------- CLIENT MARQUEE TAB ----------------
				array(
					'key'   => 'tab_marquee',
					'label' => 'Client marquee',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_marquee',
					'name'          => 'marquee_brands',
					'label'         => 'Brand names',
					'instructions'  => 'One per line — they scroll in the strip under the hero.',
					'type'          => 'textarea',
					'rows'          => 8,
					'default_value' => "UrbanCraft\nGreenLeaf\nTechFlow\nBella Vita\nAurum Realty\nSilhouette\nFinEdge\nNutriFresh",
				),

				// ---------------- WORK TAB ----------------
				array(
					'key'   => 'tab_work',
					'label' => 'Work',
					'type'  => 'tab',
				),
				array(
					'key'           => 'f_work_eyebrow',
					'name'          => 'work_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Selected work',
				),
				array(
					'key'           => 'f_work_heading',
					'name'          => 'work_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Our latest projects',
				),
				array(
					'key'           => 'f_work_button',
					'name'          => 'work_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),
				array(
					'key'          => 'f_work_items',
					'name'         => 'work_projects',
					'label'        => 'Projects',
					'instructions' => 'Leave empty to keep the current defaults.',
					'type'         => 'repeater',
					'layout'       => 'block',
					'button_label' => 'Add project',
					'sub_fields'   => array(
						array( 'key' => 'f_wk_title', 'name' => 'title', 'label' => 'Title', 'type' => 'text' ),
						array( 'key' => 'f_wk_sub', 'name' => 'subtitle', 'label' => 'Subtitle', 'type' => 'text' ),
						array( 'key' => 'f_wk_link', 'name' => 'link', 'label' => 'Link', 'type' => 'page_link', 'allow_null' => 1, 'allow_archives' => 0 ),
						array( 'key' => 'f_wk_img', 'name' => 'image', 'label' => 'Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium' ),
					),
				),

				// ---------------- INDUSTRIES TAB ----------------
				array(
					'key'   => 'tab_industries',
					'label' => 'Industries',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_ind_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'The 4 animated industry cards are part of the design. Here you can edit the section heading and button.',
				),
				array(
					'key'           => 'f_ind_eyebrow',
					'name'          => 'industries_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'Industries we empower',
				),
				array(
					'key'           => 'f_ind_heading',
					'name'          => 'industries_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => 'Growth strategy, tailored to your sector',
				),
				array(
					'key'           => 'f_ind_button',
					'name'          => 'industries_button',
					'label'         => 'Button',
					'type'          => 'link',
					'return_format' => 'array',
				),

				// ---------------- SERVICES SHOWCASE TAB ----------------
				array(
					'key'   => 'tab_services',
					'label' => 'Services showcase',
					'type'  => 'tab',
				),
				array(
					'key'     => 'f_svc_note',
					'label'   => 'Note',
					'type'    => 'message',
					'message' => 'Each service\'s animated preview and detailed copy live on its own service page. Here you can edit the section heading and the 7 service headlines.',
				),
				array(
					'key'           => 'f_svc_eyebrow',
					'name'          => 'services_eyebrow',
					'label'         => 'Eyebrow',
					'type'          => 'text',
					'default_value' => 'What we do — and how it looks',
				),
				array(
					'key'           => 'f_svc_heading',
					'name'          => 'services_heading',
					'label'         => 'Heading',
					'type'          => 'text',
					'default_value' => "Every service, shown the way we'd build it for you",
				),
				array( 'key' => 'f_svc1', 'name' => 'svc1_title', 'label' => '01 · Digital Marketing — headline', 'type' => 'text', 'default_value' => 'Full-funnel growth you can actually measure' ),
				array( 'key' => 'f_svc2', 'name' => 'svc2_title', 'label' => '02 · SEO — headline', 'type' => 'text', 'default_value' => 'Rank on Google — and get cited by AI' ),
				array( 'key' => 'f_svc3', 'name' => 'svc3_title', 'label' => '03 · Social — headline', 'type' => 'text', 'default_value' => 'Feeds that turn followers into customers' ),
				array( 'key' => 'f_svc4', 'name' => 'svc4_title', 'label' => '04 · Performance — headline', 'type' => 'text', 'default_value' => 'Every rupee tracked, optimised and accountable' ),
				array( 'key' => 'f_svc5', 'name' => 'svc5_title', 'label' => '05 · Branding — headline', 'type' => 'text', 'default_value' => 'A brand identity people instantly recognise' ),
				array( 'key' => 'f_svc6', 'name' => 'svc6_title', 'label' => '06 · UI/UX — headline', 'type' => 'text', 'default_value' => 'From rough wireframe to interface that converts' ),
				array( 'key' => 'f_svc7', 'name' => 'svc7_title', 'label' => '07 · Website — headline', 'type' => 'text', 'default_value' => 'Fast, responsive sites that load and convert' ),
			),
		)
	);
}

/**
 * Split a textarea value into a trimmed array of non-empty lines.
 *
 * @param string $value Raw textarea value.
 * @return array
 */
function bx_lines( $value ) {
	return array_values( array_filter( array_map( 'trim', preg_split( '/\r\n|\r|\n/', (string) $value ) ) ) );
}

/**
 * Render the Home FAQ accordion items from ACF (faq_items repeater), falling
 * back to the original default questions when the repeater is empty / ACF off.
 */
function bx_home_render_faqs() {
	$items    = array();
	$defaults = array(
		array(
			'q' => 'Which services does BoostronixX offer?',
			'a' => 'Brand consulting, digital marketing, SEO, social media marketing, performance marketing, UI/UX design and website design — strategy through execution, all in-house.',
		),
		array(
			'q' => 'Where is BoostronixX located?',
			'a' => 'Jaipur, Rajasthan, India — working with clients across India and internationally.',
		),
		array(
			'q' => 'Which industries do you specialise in?',
			'a' => 'Real estate, schools, D2C eCommerce and healthcare — our framework adapts to most growth-stage businesses.',
		),
		array(
			'q' => 'How do we get started?',
			'a' => "Book a free strategy call. We'll review your goals, share quick wins and propose a roadmap — no obligation.",
		),
	);

	if ( function_exists( 'have_rows' ) && have_rows( 'faq_items' ) ) {
		while ( have_rows( 'faq_items' ) ) {
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
			'<div class="faq border border-line rounded-2xl px-6 group%s"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg">%s<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">%s</div></div></div>',
			0 === $i ? ' open' : '',
			esc_html( $it['q'] ),
			esc_html( $it['a'] )
		);
	}
}

/**
 * Render the Home "Insights" cards from the latest blog posts (auto-updating).
 */
function bx_home_render_insights() {
	$q = new WP_Query(
		array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'posts_per_page'      => 3,
			'no_found_rows'       => true,
			'ignore_sticky_posts' => true,
		)
	);
	if ( ! $q->have_posts() ) {
		return;
	}
	$grads = array(
		'linear-gradient(135deg,#0a0a0a,#3a3a3a)',
		'linear-gradient(135deg,#fa5539,#2e1c16)',
		'linear-gradient(135deg,#7c3aed,#fa5539)',
	);
	$i = 0;
	while ( $q->have_posts() ) {
		$q->the_post();
		$pc  = function_exists( 'bx_primary_category' ) ? bx_primary_category() : null;
		$rt  = function_exists( 'bx_reading_time' ) ? bx_reading_time() : 5;
		$img = has_post_thumbnail() ? '<img src="' . esc_url( get_the_post_thumbnail_url( null, 'bx-blog-cover' ) ) . '" alt="' . esc_attr( get_the_title() ) . '" width="600" height="800" loading="lazy" class="relative" />' : '';
		$cat = $pc ? '<span class="rounded-full bg-paper border border-line px-3 py-1 font-medium">' . esc_html( $pc->name ) . '</span>' : '';
		printf(
			'<article class="reveal group"%s><a href="%s" class="block"><figure class="imgph rounded-xl2 aspect-[3/4] shadow-lg mb-5"><div class="ph-zoom absolute inset-0 z-0" style="background:%s" aria-hidden="true"></div>%s</figure><div class="flex flex-wrap items-center gap-3 text-xs text-ink-soft">%s<time datetime="%s">%s</time><span>· %d min read</span></div><h3 class="font-display text-xl tt mt-3 group-hover:text-accent transition-colors">%s</h3><p class="text-xs text-ink-soft mt-2">By <span class="font-medium text-ink">%s</span></p></a></article>',
			$i > 0 ? ' data-delay="' . (int) $i . '"' : '',
			esc_url( get_permalink() ),
			esc_attr( $grads[ $i % 3 ] ),
			$img,
			$cat,
			esc_attr( get_the_date( 'Y-m-d' ) ),
			esc_html( get_the_date( 'M j, Y' ) ),
			(int) $rt,
			esc_html( get_the_title() ),
			esc_html( get_the_author() )
		);
		$i++;
	}
	wp_reset_postdata();
}

/**
 * Render the Home testimonial slides from ACF (testimonials repeater),
 * falling back to the original defaults when empty / ACF off.
 */
function bx_home_render_testimonials() {
	$boy      = 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/boy-avatar.avif';
	$girl     = 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/girl-avatar.avif';
	$defaults = array(
		array( 'quote' => '"Boostronixx completely transformed our brand identity. We saw a 40% increase in engagement within the first three months."', 'name' => 'Arjun Khanna', 'role' => 'Founder, UrbanCraft', 'avatar' => $boy ),
		array( 'quote' => '"They became our growth partners — translated our vision into a powerful brand strategy. Our customer recall improved significantly."', 'name' => 'Kavita Nair', 'role' => 'Director, GreenLeaf Organics', 'avatar' => $girl ),
		array( 'quote' => '"Data-driven strategy with creative excellence. Our website traffic doubled and conversions improved by 35% in six months."', 'name' => 'Rajesh Menon', 'role' => 'CEO, TechFlow Solutions', 'avatar' => $boy ),
		array( 'quote' => '"Online sales grew by 65% year-on-year. From logo to website to social — everything was cohesive and on-brand."', 'name' => 'Vikram Rathore', 'role' => 'MD, Aurum Realty', 'avatar' => $boy ),
		array( 'quote' => '"We approached them with a vague idea and got a concrete brand identity — delivered ahead of schedule. CAC dropped 25%."', 'name' => 'Anjali Deshmukh', 'role' => 'Founder, Silhouette Studio', 'avatar' => $girl ),
		array( 'quote' => '"They understood our budget but never compromised on quality. The branding helped us pitch investors — seed round closed in two months."', 'name' => 'Suresh Iyer', 'role' => 'Director, FinEdge Capital', 'avatar' => $boy ),
	);

	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'testimonials' ) ) {
		while ( have_rows( 'testimonials' ) ) {
			the_row();
			$av     = get_sub_field( 'avatar' );
			$av_url = ( is_array( $av ) && ! empty( $av['url'] ) ) ? $av['url'] : ( is_string( $av ) && $av ? $av : $boy );
			$items[] = array(
				'quote'  => (string) get_sub_field( 'quote' ),
				'name'   => (string) get_sub_field( 'name' ),
				'role'   => (string) get_sub_field( 'role' ),
				'avatar' => $av_url,
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	$stars = str_repeat( '<iconify-icon icon="material-symbols:star-rounded"></iconify-icon>', 5 );
	foreach ( $items as $t ) {
		printf(
			'<div class="tslide pr-5"><figure class="h-full bg-surface border border-line rounded-xl2 p-7 flex flex-col"><div class="flex gap-0.5 text-accent text-lg" role="img" aria-label="5 out of 5 stars">%s</div><blockquote class="mt-5 text-lg leading-relaxed grow">%s</blockquote><figcaption class="flex items-center gap-3 mt-7"><img width="48" height="48" src="%s" alt="%s" class="h-12 w-12 rounded-full object-cover" /><span><span class="block font-display">%s</span><span class="block text-sm text-ink-soft">%s</span></span></figcaption></figure></div>',
			$stars,
			esc_html( $t['quote'] ),
			esc_url( $t['avatar'] ),
			esc_attr( $t['name'] ),
			esc_html( $t['name'] ),
			esc_html( $t['role'] )
		);
	}
}

/**
 * Output one marquee row of brand names (name • name • …) from ACF/defaults.
 */
function bx_home_marquee_row() {
	$brands = bx_lines( bx_field( 'marquee_brands', false, "UrbanCraft\nGreenLeaf\nTechFlow\nBella Vita\nAurum Realty\nSilhouette\nFinEdge\nNutriFresh" ) );
	$out    = '';
	foreach ( $brands as $b ) {
		$out .= '<span>' . esc_html( $b ) . '</span><span>•</span>';
	}
	echo $out; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped per item above.
}

/**
 * Render the Home "Work" project cards from ACF (work_projects), falling back
 * to the original two projects when empty / ACF off.
 */
function bx_home_render_work() {
	$defaults = array(
		array( 'title' => 'Edoovi — ERP SaaS', 'subtitle' => 'Product design · Branding · Web', 'url' => home_url( '/portfolio/edoovi-erp/' ), 'img' => '' ),
		array( 'title' => 'Freshee — Quick Commerce', 'subtitle' => 'Mobile app · UI/UX · Brand', 'url' => home_url( '/portfolio/' ), 'img' => '' ),
	);
	$items = array();
	if ( function_exists( 'have_rows' ) && have_rows( 'work_projects' ) ) {
		while ( have_rows( 'work_projects' ) ) {
			the_row();
			$img   = get_sub_field( 'image' );
			$items[] = array(
				'title'    => (string) get_sub_field( 'title' ),
				'subtitle' => (string) get_sub_field( 'subtitle' ),
				'url'      => (string) get_sub_field( 'link' ),
				'img'      => ( is_array( $img ) && ! empty( $img['url'] ) ) ? $img['url'] : '',
			);
		}
	}
	if ( ! $items ) {
		$items = $defaults;
	}

	foreach ( $items as $i => $w ) {
		$offset = 0 === $i ? '' : ' md:mt-16';
		$delay  = 0 === $i ? '' : ' data-delay="1"';
		$imgtag = $w['img'] ? '<img src="' . esc_url( $w['img'] ) . '" alt="' . esc_attr( $w['title'] ) . '" width="1280" height="880" loading="lazy" />' : '<figcaption class="lbl"><b style="color:#7d7d7d">Project · 1280×880</b><span style="color:#6a6a6a">' . esc_html( $w['title'] ) . '</span></figcaption>';
		printf(
			'<a href="%s" class="reveal group block%s"%s><figure class="imgph rounded-xl2 aspect-[16/11] !bg-[#161616]">%s</figure><div class="flex items-center justify-between mt-5"><div><h3 class="font-display text-2xl tt">%s</h3><p class="text-sm text-paper/50 mt-1">%s</p></div><span class="grid place-items-center h-11 w-11 rounded-full border border-paper/20 group-hover:bg-accent group-hover:border-accent transition"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span></div></a>',
			esc_url( $w['url'] ? $w['url'] : home_url( '/portfolio/' ) ),
			$offset,
			$delay,
			$imgtag,
			esc_html( $w['title'] ),
			esc_html( $w['subtitle'] )
		);
	}
}
