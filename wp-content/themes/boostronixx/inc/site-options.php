<?php
/**
 * Site Settings — a single ACF options page that makes the whole header +
 * footer editable from the admin (logo, nav links, CTAs, social, contact,
 * footer columns, copyright, mobile bottom nav). Every field falls back to the
 * original hard-coded value via bx_option()/template fallbacks, so nothing ever
 * blanks if ACF is off or a field is empty.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Guarded getter for an option-page field (mirrors bx_field for 'option').
 *
 * @param string $field   Field name.
 * @param mixed  $default Fallback when ACF is off / value empty.
 * @return mixed
 */
function bx_option( $field, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}
	$v = get_field( $field, 'option' );
	if ( null === $v || false === $v || '' === $v || array() === $v ) {
		return $default;
	}
	return $v;
}

/**
 * The site logo URL (Site Settings → Branding), falling back to the AVIF logo
 * on S3. Single source of truth for the header, footer and standalone pages.
 *
 * @return string
 */
function bx_logo_url() {
	return bx_option( 'site_logo', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/boostronixx-full-logo.avif' );
}

/**
 * The white / dark-background logo URL (Site Settings → Branding), used on the
 * dark standalone screens (maintenance, 500) instead of CSS-inverting the colour
 * logo. Falls back to the white AVIF on S3.
 *
 * @return string
 */
function bx_logo_white_url() {
	return bx_option( 'site_logo_dark', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/boostronixx-white-logo.avif' );
}

/**
 * Map a social platform key to its Iconify icon.
 *
 * @param string $platform e.g. linkedin, instagram.
 * @return string
 */
function bx_social_icon( $platform ) {
	$map = array(
		'linkedin'  => 'simple-icons:linkedin',
		'instagram' => 'simple-icons:instagram',
		'youtube'   => 'simple-icons:youtube',
		'facebook'  => 'simple-icons:facebook',
		'x'         => 'simple-icons:x',
		'twitter'   => 'simple-icons:x',
		'whatsapp'  => 'simple-icons:whatsapp',
		'threads'   => 'simple-icons:threads',
		'pinterest' => 'simple-icons:pinterest',
	);
	$k = strtolower( (string) $platform );
	return isset( $map[ $k ] ) ? $map[ $k ] : 'simple-icons:' . sanitize_key( $k );
}

/**
 * Is a nav link URL the current page? (exact path match, trailing-slash safe).
 *
 * @param string $url Link URL.
 * @return bool
 */
function bx_link_is_current( $url ) {
	if ( ! $url ) {
		return false;
	}
	$here = home_url( add_query_arg( array(), $GLOBALS['wp']->request ) );
	return untrailingslashit( wp_parse_url( $url, PHP_URL_PATH ) ?: $url ) === untrailingslashit( wp_parse_url( $here, PHP_URL_PATH ) ?: $here );
}

/**
 * GMT timestamp of the site's last meaningful change — the latest post/page
 * modification OR any admin save (posts, pages, Site Settings, Customizer).
 * Powers the footer "Updated" date, which refreshes whenever the site is edited.
 *
 * @return int
 */
function bx_last_updated_ts() {
	$cand = array( (int) get_option( 'bx_site_updated', 0 ) );
	foreach ( array( 'post', 'page' ) as $pt ) {
		$d = get_lastpostmodified( 'gmt', $pt );
		if ( $d ) {
			$cand[] = (int) strtotime( $d . ' GMT' );
		}
	}
	return max( $cand );
}

add_action( 'save_post', 'bx_touch_site_updated' );
add_action( 'acf/save_post', 'bx_touch_site_updated', 20 );
add_action( 'customize_save_after', 'bx_touch_site_updated' );
/**
 * Bump the site's last-updated stamp on any content/settings save (skips
 * post revisions/autosaves).
 *
 * @param mixed $arg First hook arg (post ID for save_post; varies otherwise).
 */
function bx_touch_site_updated( $arg = 0 ) {
	if ( is_int( $arg ) && ( wp_is_post_revision( $arg ) || wp_is_post_autosave( $arg ) ) ) {
		return;
	}
	update_option( 'bx_site_updated', time(), false );
}

/* -------------------------------------------------------------------------
 * Options page + fields
 * ---------------------------------------------------------------------- */

add_action( 'acf/init', 'bx_register_site_settings' );
/**
 * Register the Site Settings options page and its fields.
 */
function bx_register_site_settings() {
	if ( ! function_exists( 'acf_add_options_page' ) ) {
		return;
	}

	acf_add_options_page(
		array(
			'page_title' => 'Site Settings',
			'menu_title' => 'Site Settings',
			'menu_slug'  => 'bx-site-settings',
			'capability' => 'edit_theme_options',
			'icon_url'   => 'dashicons-admin-generic',
			'position'   => 59,
			'redirect'   => false,
		)
	);

	// Reusable sub-fields for a nav link row (ACF Link field → {title,url,target}).
	$link_sub = array(
		'key'           => 'f_ss_navlink',
		'label'         => 'Link',
		'name'          => 'link',
		'type'          => 'link',
		'return_format' => 'array',
	);

	acf_add_local_field_group(
		array(
			'key'        => 'group_site_settings',
			'title'      => 'Site Settings',
			'location'   => array(
				array(
					array(
						'param'    => 'options_page',
						'operator' => '==',
						'value'    => 'bx-site-settings',
					),
				),
			),
			'menu_order' => 0,
			'fields'     => array(

				// ---------------- BRANDING ----------------
				array( 'key' => 'tab_ss_brand', 'label' => 'Branding', 'type' => 'tab' ),
				array(
					'key'           => 'f_ss_logo',
					'label'         => 'Logo',
					'name'          => 'site_logo',
					'type'          => 'image',
					'return_format' => 'url',
					'preview_size'  => 'medium',
					'instructions'  => 'Used in the header, footer and mobile menu. Leave empty to keep the current logo.',
				),
					array(
						'key'           => 'f_ss_logo_dark',
						'label'         => 'Logo (dark backgrounds)',
						'name'          => 'site_logo_dark',
						'type'          => 'image',
						'return_format' => 'url',
						'preview_size'  => 'medium',
						'instructions'  => 'White version of the logo, shown on the dark screens (maintenance, 500 error). Leave empty to keep the current white logo.',
					),
				array(
					'key'           => 'f_ss_tagline',
					'label'         => 'Footer tagline',
					'name'          => 'footer_tagline',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'A creative branding & digital marketing agency in Jaipur, India — helping ambitious businesses build brands that grow.',
				),

				// ---------------- MAINTENANCE ----------------
					array( 'key' => 'tab_ss_maint', 'label' => 'Maintenance', 'type' => 'tab' ),
					array(
						'key'          => 'f_ss_maint_enabled',
						'label'        => 'Maintenance mode',
						'name'         => 'maintenance_enabled',
						'type'         => 'true_false',
						'ui'           => 1,
						'ui_on_text'   => 'On',
						'ui_off_text'  => 'Off',
						'instructions' => 'Show a maintenance screen to visitors. Logged-in administrators keep seeing the live site. Tip: preview it any time at <code>?bx_preview=maintenance</code> (and the 500 page at <code>?bx_preview=error</code>).',
					),
					array(
						'key'               => 'f_ss_maint_scope',
						'label'             => 'Apply to',
						'name'              => 'maintenance_scope',
						'type'              => 'radio',
						'choices'           => array(
							'site'     => 'Whole website',
							'selected' => 'Only selected pages',
						),
						'default_value'     => 'site',
						'layout'            => 'horizontal',
						'conditional_logic' => array(
							array(
								array( 'field' => 'f_ss_maint_enabled', 'operator' => '==', 'value' => '1' ),
							),
						),
					),
					array(
						'key'               => 'f_ss_maint_pages',
						'label'             => 'Pages under maintenance',
						'name'              => 'maintenance_pages',
						'type'              => 'post_object',
						'post_type'         => array( 'page' ),
						'multiple'          => 1,
						'return_format'     => 'id',
						'ui'                => 1,
						'instructions'      => 'Only these pages show the maintenance screen. (To flip a single page without touching this list, use the "Maintenance" box in the page editor.)',
						'conditional_logic' => array(
							array(
								array( 'field' => 'f_ss_maint_enabled', 'operator' => '==', 'value' => '1' ),
								array( 'field' => 'f_ss_maint_scope', 'operator' => '==', 'value' => 'selected' ),
							),
						),
					),
					array(
						'key'           => 'f_ss_maint_heading',
						'label'         => 'Heading',
						'name'          => 'maintenance_heading',
						'type'          => 'text',
						'default_value' => "We're tuning things up",
					),
					array(
						'key'           => 'f_ss_maint_message',
						'label'         => 'Message',
						'name'          => 'maintenance_message',
						'type'          => 'textarea',
						'rows'          => 3,
						'default_value' => "Our site is getting a quick upgrade to serve you better. We'll be back online shortly — thanks for your patience.",
					),

					// ---------------- HEADER ----------------
				array( 'key' => 'tab_ss_header', 'label' => 'Header', 'type' => 'tab' ),
				array(
					'key'          => 'f_ss_header_nav',
					'label'        => 'Header navigation',
					'name'         => 'header_nav',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add link',
					'instructions' => 'The main menu (also used in the mobile drawer). Drag to reorder.',
					'sub_fields'   => array( $link_sub ),
				),
				array(
					'key'           => 'f_ss_header_cta',
					'label'         => 'Header button',
					'name'          => 'header_cta',
					'type'          => 'link',
					'return_format' => 'array',
					'instructions'  => 'The "Let\'s Build Together" button.',
				),
				array(
					'key'           => 'f_ss_mobile_cta_label',
					'label'         => 'Mobile menu button label',
					'name'          => 'mobile_cta_label',
					'type'          => 'text',
					'default_value' => 'Book a Free Strategy Call',
					'instructions'  => 'Uses the same link as the header button.',
				),

				// ---------------- FOOTER LINKS ----------------
				array( 'key' => 'tab_ss_footer', 'label' => 'Footer links', 'type' => 'tab' ),
				array( 'key' => 'f_ss_col1_head', 'label' => 'Column 1 heading', 'name' => 'footer_col1_heading', 'type' => 'text', 'default_value' => 'Services', 'wrapper' => array( 'width' => '50' ) ),
				array( 'key' => 'f_ss_col1', 'label' => 'Column 1 links', 'name' => 'footer_col1', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add link', 'sub_fields' => array( array_merge( $link_sub, array( 'key' => 'f_ss_col1link' ) ) ) ),
				array( 'key' => 'f_ss_col2_head', 'label' => 'Column 2 heading', 'name' => 'footer_col2_heading', 'type' => 'text', 'default_value' => 'Company', 'wrapper' => array( 'width' => '50' ) ),
				array( 'key' => 'f_ss_col2', 'label' => 'Column 2 links', 'name' => 'footer_col2', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add link', 'sub_fields' => array( array_merge( $link_sub, array( 'key' => 'f_ss_col2link' ) ) ) ),
				array( 'key' => 'f_ss_legal', 'label' => 'Legal links (bottom bar)', 'name' => 'footer_legal', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add link', 'sub_fields' => array( array_merge( $link_sub, array( 'key' => 'f_ss_legallink' ) ) ) ),
				array( 'key' => 'f_ss_copyright', 'label' => 'Copyright text', 'name' => 'copyright_text', 'type' => 'text', 'default_value' => 'BoostronixX. All rights reserved.', 'instructions' => 'Shown after "© {year}".' ),

				// ---------------- CONTACT ----------------
				array( 'key' => 'tab_ss_contact', 'label' => 'Contact', 'type' => 'tab' ),
				array( 'key' => 'f_ss_col3_head', 'label' => 'Contact heading', 'name' => 'footer_col3_heading', 'type' => 'text', 'default_value' => 'Get in touch' ),
				array( 'key' => 'f_ss_phone', 'label' => 'Phone (display)', 'name' => 'contact_phone', 'type' => 'text', 'default_value' => '+91 80582 12202', 'wrapper' => array( 'width' => '50' ) ),
				array( 'key' => 'f_ss_phone_link', 'label' => 'Phone (dial)', 'name' => 'contact_phone_link', 'type' => 'text', 'default_value' => '+918058212202', 'wrapper' => array( 'width' => '50' ), 'instructions' => 'Digits only, with country code.' ),
				array( 'key' => 'f_ss_email', 'label' => 'Email', 'name' => 'contact_email', 'type' => 'email', 'default_value' => 'boostronixx@gmail.com' ),
				array( 'key' => 'f_ss_address', 'label' => 'Address', 'name' => 'contact_address', 'type' => 'textarea', 'rows' => 2, 'default_value' => "880, Rani Sati Nagar, Gautam Marg,\nNirman Nagar, Jaipur, Rajasthan 302019, India" ),
				array( 'key' => 'f_ss_hours', 'label' => 'Hours', 'name' => 'contact_hours', 'type' => 'text', 'default_value' => 'Mon–Fri · 9 AM–7 PM IST' ),

				// ---------------- BLOG CTA ----------------
				array( 'key' => 'tab_ss_blogcta', 'label' => 'Blog CTA', 'type' => 'tab' ),
				array( 'key' => 'f_ss_bcta_note', 'label' => 'About', 'type' => 'message', 'message' => 'The contact section shown at the bottom of every blog post.' ),
				array( 'key' => 'f_ss_bcta_eyebrow', 'label' => 'Eyebrow', 'name' => 'blog_cta_eyebrow', 'type' => 'text', 'default_value' => 'Still deciding?' ),
				array( 'key' => 'f_ss_bcta_heading', 'label' => 'Heading', 'name' => 'blog_cta_heading', 'type' => 'text', 'default_value' => 'Tell us your goal — we’ll point you the right way' ),
				array( 'key' => 'f_ss_bcta_text', 'label' => 'Intro text', 'name' => 'blog_cta_text', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'No pitch, no pressure. Share where you’re stuck and we’ll reply with a clear next step.' ),
				array(
					'key'          => 'f_ss_bcta_points',
					'label'        => 'Trust points',
					'name'         => 'blog_cta_points',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add point',
					'instructions' => 'Leave empty to keep the current defaults. Basic HTML like <strong> is allowed in the text.',
					'sub_fields'   => array(
						array( 'key' => 'f_ss_bcta_pt_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'default_value' => 'lucide:check', 'instructions' => 'Iconify name, e.g. lucide:clock', 'wrapper' => array( 'width' => '30' ) ),
						array( 'key' => 'f_ss_bcta_pt_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text', 'wrapper' => array( 'width' => '70' ) ),
					),
				),
				array( 'key' => 'f_ss_bcta_btn', 'label' => 'Button label', 'name' => 'blog_cta_button', 'type' => 'text', 'default_value' => 'Send message' ),

				// ---------------- SOCIAL ----------------
				array( 'key' => 'tab_ss_social', 'label' => 'Social', 'type' => 'tab' ),
				array(
					'key'          => 'f_ss_social',
					'label'        => 'Social links',
					'name'         => 'social_links',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add social link',
					'sub_fields'   => array(
						array(
							'key'     => 'f_ss_social_platform',
							'label'   => 'Platform',
							'name'    => 'platform',
							'type'    => 'select',
							'choices' => array(
								'linkedin'  => 'LinkedIn',
								'instagram' => 'Instagram',
								'youtube'   => 'YouTube',
								'facebook'  => 'Facebook',
								'x'         => 'X (Twitter)',
								'whatsapp'  => 'WhatsApp',
								'threads'   => 'Threads',
								'pinterest' => 'Pinterest',
							),
							'wrapper' => array( 'width' => '40' ),
						),
						array( 'key' => 'f_ss_social_url', 'label' => 'URL', 'name' => 'url', 'type' => 'url', 'wrapper' => array( 'width' => '60' ) ),
					),
				),

				// ---------------- MOBILE BOTTOM NAV ----------------
				array( 'key' => 'tab_ss_appnav', 'label' => 'Mobile bottom nav', 'type' => 'tab' ),
				array(
					'key'          => 'f_ss_appnav',
					'label'        => 'App-style bottom bar (mobile)',
					'name'         => 'app_nav',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add item',
					'instructions' => 'The fixed bar shown at the bottom on phones. Keep it to 4 items for the best layout.',
					'sub_fields'   => array(
						array( 'key' => 'f_ss_appnav_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'text', 'placeholder' => 'lucide:house', 'wrapper' => array( 'width' => '30' ), 'instructions' => 'Iconify id.' ),
						array( 'key' => 'f_ss_appnav_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'wrapper' => array( 'width' => '30' ) ),
						array( 'key' => 'f_ss_appnav_link', 'label' => 'Link', 'name' => 'link', 'type' => 'link', 'return_format' => 'array', 'wrapper' => array( 'width' => '40' ) ),
					),
				),
			),
		)
	);
}
