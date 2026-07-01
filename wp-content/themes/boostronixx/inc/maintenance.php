<?php
/**
 * Conditional maintenance mode.
 *
 * The maintenance screen is never a public, directly-routable page. Instead it
 * is served on `template_redirect` (HTTP 503) when the site is put into
 * maintenance, at one of three scopes:
 *
 *   1. Whole website   — Site Settings → Maintenance → "Whole website".
 *   2. Selected pages   — Site Settings → Maintenance → "Only selected pages".
 *   3. A single page    — the per-page "Show maintenance screen on this page"
 *                          toggle in the page editor (independent of the above).
 *
 * Logged-in administrators always bypass it, so they can keep working while the
 * public sees the maintenance screen. Admins can also preview either standalone
 * screen without triggering it live:  ?bx_preview=maintenance  |  ?bx_preview=error
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'bx_register_page_maintenance_field' );
/**
 * Per-page toggle: force the maintenance screen on just this page.
 */
function bx_register_page_maintenance_field() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	acf_add_local_field_group(
		array(
			'key'                   => 'group_bx_page_maintenance',
			'title'                 => 'Maintenance',
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'page',
					),
				),
			),
			'position'              => 'side',
			'menu_order'            => 20,
			'hide_on_screen'        => array(),
			'fields'                => array(
				array(
					'key'          => 'f_bx_page_maintenance',
					'label'        => 'Show maintenance screen on this page',
					'name'         => 'page_maintenance',
					'type'         => 'true_false',
					'ui'           => 1,
					'instructions' => 'Temporarily replace just this page with the maintenance screen (503). Works independently of the site-wide toggle in Site Settings → Maintenance.',
				),
			),
		)
	);
}

add_action( 'template_redirect', 'bx_maybe_serve_maintenance', 0 );
/**
 * Decide whether to serve the maintenance screen for this request.
 */
function bx_maybe_serve_maintenance() {

	// Admin-only previews of the standalone screens (no live effect).
	if ( isset( $_GET['bx_preview'] ) && current_user_can( 'manage_options' ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$which = sanitize_key( wp_unslash( $_GET['bx_preview'] ) ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( 'maintenance' === $which ) {
			bx_render_maintenance( false );
		}
		if ( 'error' === $which ) {
			$drop_in = WP_CONTENT_DIR . '/php-error.php';
			if ( is_readable( $drop_in ) ) {
				include $drop_in;
				exit;
			}
		}
	}

	// Never intercept admin, login, cron, REST or AJAX.
	if ( is_admin() || wp_doing_ajax() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) || ( defined( 'DOING_CRON' ) && DOING_CRON ) ) {
		return;
	}
	// Administrators keep browsing the live site while it's under maintenance.
	if ( current_user_can( 'manage_options' ) ) {
		return;
	}

	if ( bx_should_show_maintenance() ) {
		bx_render_maintenance( true );
	}
}

/**
 * Should the maintenance screen replace the current request?
 *
 * @return bool
 */
function bx_should_show_maintenance() {
	$obj = get_queried_object();

	// (3) Per-page override — forces maintenance on this single page.
	if ( $obj instanceof WP_Post && get_post_meta( $obj->ID, 'page_maintenance', true ) ) {
		return true;
	}

	// Master switch off → nothing else applies.
	if ( ! bx_option( 'maintenance_enabled' ) ) {
		return false;
	}

	$scope = bx_option( 'maintenance_scope', 'site' );

	// (1) Whole website.
	if ( 'site' === $scope ) {
		return true;
	}

	// (2) Only selected pages.
	if ( 'selected' === $scope && $obj instanceof WP_Post ) {
		$ids = array_map(
			static function ( $p ) {
				return is_object( $p ) ? (int) $p->ID : (int) $p;
			},
			(array) bx_option( 'maintenance_pages', array() )
		);
		return in_array( (int) $obj->ID, $ids, true );
	}

	return false;
}

/**
 * Render the standalone maintenance screen and stop.
 *
 * @param bool $send_503 Send a 503 "Service Unavailable" response (true for a
 *                       live maintenance hit; false for an admin preview).
 */
function bx_render_maintenance( $send_503 = true ) {
	if ( $send_503 && ! headers_sent() ) {
		status_header( 503 );
		header( 'Retry-After: 3600' );
		header( 'X-Robots-Tag: noindex, nofollow', true );
		nocache_headers();
	}
	// Force the maintenance page's scoped-CSS class onto <body> so its animations
	// (gears, progress bar, particles, rise) apply regardless of which URL was hit —
	// and drop the requested page's own scope class so its theme doesn't leak in.
	add_filter(
		'body_class',
		static function ( $classes ) {
			$classes = array_filter(
				$classes,
				static function ( $c ) {
					return 0 !== strpos( $c, 'bx-page-' );
				}
			);
			$classes[] = 'bx-page-maintenance';
			return array_values( $classes );
		}
	);
	get_header( 'blank' );
	get_template_part( 'template-parts/maintenance' );
	get_footer( 'blank' );
	exit;
}

/**
 * A short human summary of what maintenance is currently doing site-wide, for the
 * admin indicator. Returns false when nothing is under maintenance.
 *
 * @return array{label:string}|false
 */
function bx_maintenance_summary() {
	if ( ! bx_option( 'maintenance_enabled' ) ) {
		// Master switch off — but individual pages may still be flipped on.
		$per_page = get_posts(
			array(
				'post_type'   => 'page',
				'post_status' => 'any',
				'numberposts' => 1,
				'fields'      => 'ids',
				'meta_query'  => array( // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_query
					array(
						'key'     => 'page_maintenance',
						'value'   => '1',
						'compare' => '=',
					),
				),
			)
		);
		return $per_page ? array( 'label' => count( $per_page ) . ' page(s)' ) : false;
	}

	$scope = bx_option( 'maintenance_scope', 'site' );
	if ( 'selected' === $scope ) {
		$n = count( (array) bx_option( 'maintenance_pages', array() ) );
		return array( 'label' => $n ? $n . ' selected page(s)' : 'no pages selected' );
	}
	return array( 'label' => 'whole site' );
}

add_action( 'admin_bar_menu', 'bx_maintenance_admin_bar', 100 );
/**
 * Show a loud "Maintenance: ON" indicator in the admin bar (front-end + wp-admin)
 * whenever maintenance is live, so an administrator — who bypasses the screen —
 * is never left wondering whether it's actually on. Includes a one-click preview.
 *
 * @param WP_Admin_Bar $bar Admin bar instance.
 */
function bx_maintenance_admin_bar( $bar ) {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	$summary = bx_maintenance_summary();
	$on      = (bool) $summary;

	// The on/off action is a POST (submitted by JS on click), never a plain GET
	// link — a GET with a side effect can be fired by browser prefetch/preload on
	// hover, which would toggle maintenance by accident. href="#" is prefetch-safe.
	if ( $on ) {
		$bar->add_node(
			array(
				'id'    => 'bx-maintenance',
				'title' => '🔧 Maintenance: ON',
				'href'  => admin_url( 'admin.php?page=bx-site-settings' ),
				'meta'  => array( 'title' => 'Visitors see the maintenance screen (503). You bypass it because you are logged in as an admin.' ),
			)
		);
		$bar->add_node(
			array(
				'parent' => 'bx-maintenance',
				'id'     => 'bx-maintenance-scope',
				'title'  => 'Applies to: ' . $summary['label'],
			)
		);
		$bar->add_node(
			array(
				'parent' => 'bx-maintenance',
				'id'     => 'bx-maintenance-off',
				'title'  => '⏻  Turn OFF maintenance',
				'href'   => '#',
				'meta'   => array( 'class' => 'bx-mt-toggle', 'title' => 'Take the site back live for everyone.' ),
			)
		);
		$bar->add_node(
			array(
				'parent' => 'bx-maintenance',
				'id'     => 'bx-maintenance-preview',
				'title'  => 'Preview the maintenance screen',
				'href'   => home_url( '/?bx_preview=maintenance' ),
				'meta'   => array( 'target' => '_blank' ),
			)
		);
	} else {
		$bar->add_node(
			array(
				'id'    => 'bx-maintenance',
				'title' => '●  Site: Live',
				'href'  => admin_url( 'admin.php?page=bx-site-settings' ),
				'meta'  => array( 'title' => 'Maintenance is off — the site is live for everyone.' ),
			)
		);
		$bar->add_node(
			array(
				'parent' => 'bx-maintenance',
				'id'     => 'bx-maintenance-on',
				'title'  => '🔧  Enable maintenance (whole site)',
				'href'   => '#',
				'meta'   => array( 'class' => 'bx-mt-toggle', 'title' => 'Put the whole site into maintenance now.' ),
			)
		);
		$bar->add_node(
			array(
				'parent' => 'bx-maintenance',
				'id'     => 'bx-maintenance-preview',
				'title'  => 'Preview the maintenance screen',
				'href'   => home_url( '/?bx_preview=maintenance' ),
				'meta'   => array( 'target' => '_blank' ),
			)
		);
	}
	$bar->add_node(
		array(
			'parent' => 'bx-maintenance',
			'id'     => 'bx-maintenance-settings',
			'title'  => 'Maintenance settings',
			'href'   => admin_url( 'admin.php?page=bx-site-settings' ),
		)
	);
}

add_action( 'admin_post_bx_toggle_maintenance', 'bx_handle_toggle_maintenance' );
/**
 * One-click maintenance on/off from the admin bar — writes straight to the ACF
 * option (no "Update" button needed). POST only, so browser prefetch can't fire
 * it. Enabling from here always means whole-site; use Site Settings → Maintenance
 * for per-page / selected-page scopes.
 */
function bx_handle_toggle_maintenance() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'You are not allowed to do this.', 'boostronixx' ), 403 );
	}
	if ( empty( $_SERVER['REQUEST_METHOD'] ) || 'POST' !== $_SERVER['REQUEST_METHOD'] ) {
		wp_safe_redirect( admin_url( 'admin.php?page=bx-site-settings' ) );
		exit;
	}
	check_admin_referer( 'bx_toggle_maintenance' );

	$to = isset( $_POST['to'] ) && '1' === $_POST['to'];
	if ( function_exists( 'update_field' ) ) {
		update_field( 'maintenance_enabled', $to ? 1 : 0, 'option' );
		if ( $to ) {
			update_field( 'maintenance_scope', 'site', 'option' );
		}
	} else {
		update_option( 'options_maintenance_enabled', $to ? '1' : '0' );
	}

	$back = wp_get_referer();
	wp_safe_redirect( $back ? $back : admin_url( 'admin.php?page=bx-site-settings' ) );
	exit;
}

add_action( 'wp_footer', 'bx_maintenance_admin_bar_js', 100 );
add_action( 'admin_footer', 'bx_maintenance_admin_bar_js', 100 );
/**
 * Turn the admin-bar on/off items into a nonce-protected POST submission, so the
 * toggle can never be triggered by a prefetched GET.
 */
function bx_maintenance_admin_bar_js() {
	if ( ! is_admin_bar_showing() || ! current_user_can( 'manage_options' ) ) {
		return;
	}
	$url   = esc_js( admin_url( 'admin-post.php' ) );
	$nonce = esc_js( wp_create_nonce( 'bx_toggle_maintenance' ) );
	?>
<script>
(function(){
	document.addEventListener('click', function(e){
		var a = e.target.closest('#wp-admin-bar-bx-maintenance-on > a, #wp-admin-bar-bx-maintenance-off > a');
		if (!a) { return; }
		e.preventDefault();
		var to = a.parentNode.id === 'wp-admin-bar-bx-maintenance-on' ? '1' : '0';
		var f = document.createElement('form');
		f.method = 'POST';
		f.action = '<?php echo $url; // phpcs:ignore ?>';
		f.style.display = 'none';
		f.innerHTML = '<input type="hidden" name="action" value="bx_toggle_maintenance">' +
			'<input type="hidden" name="to" value="' + to + '">' +
			'<input type="hidden" name="_wpnonce" value="<?php echo $nonce; // phpcs:ignore ?>">';
		document.body.appendChild(f);
		f.submit();
	});
})();
</script>
	<?php
}

add_action( 'wp_head', 'bx_maintenance_admin_bar_css' );
add_action( 'admin_head', 'bx_maintenance_admin_bar_css' );
/**
 * Colour the admin-bar indicator so "Maintenance: ON" is impossible to miss.
 */
function bx_maintenance_admin_bar_css() {
	if ( ! is_admin_bar_showing() || ! current_user_can( 'manage_options' ) || ! bx_maintenance_summary() ) {
		return;
	}
	echo '<style>#wpadminbar #wp-admin-bar-bx-maintenance > .ab-item{background:#fa5539;color:#fff;font-weight:600}#wpadminbar #wp-admin-bar-bx-maintenance:hover > .ab-item{background:#e0432a;color:#fff}</style>';
}
