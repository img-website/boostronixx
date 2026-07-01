<?php
/**
 * Plugin Name: BoostronixX Security Hardening
 * Description: Locks down comments, XML-RPC, REST (user enumeration + anonymous writes), dangerous/script file uploads, author + feed + oEmbed username enumeration, and adds a login brute-force lockout, version-disclosure removal and security headers. Must-use — cannot be disabled from the admin. (Web-server-layer hardening — .git/backups deny, no directory listing, no PHP execution in uploads — lives in the root + uploads .htaccess.)
 * Author: BoostronixX
 * Version: 1.0.0
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Block the admin theme/plugin code editors (a top code-injection vector).
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}

/* =========================================================================
 * 1) XML-RPC — disabled entirely (brute-force amplification, pingback DDoS,
 *    and the wp.uploadFile / metaWeblog.newPost file+post APIs live here).
 * ====================================================================== */
add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter( 'xmlrpc_methods', '__return_empty_array', 99 );
add_filter( 'pre_update_option_enable_xmlrpc', '__return_false' );
add_filter( 'wp_headers', 'bxsec_strip_pingback_header' );
add_action( 'init', 'bxsec_block_xmlrpc_request', 0 );

/**
 * Drop the X-Pingback response header.
 *
 * @param array $headers Headers.
 * @return array
 */
function bxsec_strip_pingback_header( $headers ) {
	unset( $headers['X-Pingback'] );
	return $headers;
}

/**
 * Hard-stop any direct hit to xmlrpc.php.
 */
function bxsec_block_xmlrpc_request() {
	if ( defined( 'XMLRPC_REQUEST' ) && XMLRPC_REQUEST ) {
		status_header( 403 );
		exit( 'XML-RPC services are disabled on this site.' );
	}
}

/* =========================================================================
 * 2) Comments & trackbacks — disabled site-wide. No comment forms, no
 *    wp-comments-post.php, no REST comment endpoint, no admin UI.
 * ====================================================================== */
add_action( 'init', 'bxsec_kill_comment_support' );
add_filter( 'comments_open', '__return_false', 20 );
add_filter( 'pings_open', '__return_false', 20 );
add_filter( 'comments_array', '__return_empty_array', 20 );
add_filter( 'rest_endpoints', 'bxsec_remove_comment_rest_routes' );
add_action( 'admin_menu', 'bxsec_hide_comments_menu' );
add_action( 'wp_before_admin_bar_render', 'bxsec_hide_comments_adminbar' );
add_action( 'admin_init', 'bxsec_block_comment_admin' );
add_action( 'init', 'bxsec_block_comment_post', 0 );

/**
 * Remove comment/trackback support from every post type.
 */
function bxsec_kill_comment_support() {
	foreach ( get_post_types() as $pt ) {
		if ( post_type_supports( $pt, 'comments' ) ) {
			remove_post_type_support( $pt, 'comments' );
		}
		if ( post_type_supports( $pt, 'trackbacks' ) ) {
			remove_post_type_support( $pt, 'trackbacks' );
		}
	}
}

/**
 * Remove the REST comments routes so /wp-json/wp/v2/comments cannot be read
 * or POSTed to.
 *
 * @param array $endpoints REST endpoints.
 * @return array
 */
function bxsec_remove_comment_rest_routes( $endpoints ) {
	foreach ( array_keys( $endpoints ) as $route ) {
		if ( 0 === strpos( $route, '/wp/v2/comments' ) ) {
			unset( $endpoints[ $route ] );
		}
	}
	return $endpoints;
}

/**
 * Hide the Comments admin menu.
 */
function bxsec_hide_comments_menu() {
	remove_menu_page( 'edit-comments.php' );
	remove_submenu_page( 'options-general.php', 'options-discussion.php' );
}

/**
 * Remove the admin-bar "Comments" node.
 */
function bxsec_hide_comments_adminbar() {
	global $wp_admin_bar;
	if ( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'comments' );
	}
}

/**
 * Redirect the comments admin screen + drop the dashboard widget.
 */
function bxsec_block_comment_admin() {
	global $pagenow;
	if ( in_array( $pagenow, array( 'edit-comments.php', 'options-discussion.php' ), true ) ) {
		wp_safe_redirect( admin_url() );
		exit;
	}
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
}

/**
 * Block direct POSTs to wp-comments-post.php.
 */
function bxsec_block_comment_post() {
	if ( ! empty( $_SERVER['REQUEST_URI'] ) && false !== strpos( wp_unslash( $_SERVER['REQUEST_URI'] ), 'wp-comments-post.php' ) ) { // phpcs:ignore
		status_header( 403 );
		exit( 'Comments are disabled on this site.' );
	}
}

/* =========================================================================
 * 3) REST API — block user enumeration and ALL anonymous write requests.
 *    (Authenticated editors/admins keep full REST access for the block
 *    editor, ACF and Yoast. The contact form uses admin-ajax, not REST.)
 * ====================================================================== */
add_filter( 'rest_endpoints', 'bxsec_block_rest_user_routes' );
add_filter( 'rest_pre_dispatch', 'bxsec_block_anonymous_rest_writes', 10, 3 );

/**
 * Remove the /wp/v2/users routes for logged-out requests (username leak).
 *
 * @param array $endpoints REST endpoints.
 * @return array
 */
function bxsec_block_rest_user_routes( $endpoints ) {
	if ( is_user_logged_in() ) {
		return $endpoints;
	}
	foreach ( array_keys( $endpoints ) as $route ) {
		if ( 0 === strpos( $route, '/wp/v2/users' ) ) {
			unset( $endpoints[ $route ] );
		}
	}
	return $endpoints;
}

/**
 * Reject any anonymous POST/PUT/PATCH/DELETE to the REST API — no logged-out
 * user should ever create posts, media, comments or anything else.
 *
 * @param mixed           $result  Response to replace, or null to continue.
 * @param WP_REST_Server  $server  Server instance.
 * @param WP_REST_Request $request Request.
 * @return mixed
 */
function bxsec_block_anonymous_rest_writes( $result, $server, $request ) {
	if ( is_user_logged_in() ) {
		return $result;
	}
	$write = array( 'POST', 'PUT', 'PATCH', 'DELETE' );
	if ( in_array( strtoupper( $request->get_method() ), $write, true ) ) {
		return new WP_Error( 'rest_forbidden', 'Authentication required.', array( 'status' => 401 ) );
	}
	return $result;
}

/* =========================================================================
 * 4) Author enumeration — ?author=N and /author/<login>/ leak usernames.
 * ====================================================================== */
add_action( 'template_redirect', 'bxsec_block_author_enum' );
add_filter( 'redirect_canonical', 'bxsec_stop_author_canonical', 10, 2 );

/**
 * Send author archive requests (and ?author=N probes) back to the home page.
 */
function bxsec_block_author_enum() {
	if ( is_admin() ) {
		return;
	}
	if ( is_author() || isset( $_GET['author'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		wp_safe_redirect( home_url( '/' ), 301 );
		exit;
	}
}

/**
 * Don't let WP canonical-redirect a ?author=N into /author/<login>/.
 *
 * @param string $redirect Redirect URL.
 * @param string $request  Requested URL.
 * @return string|false
 */
function bxsec_stop_author_canonical( $redirect, $request ) {
	if ( isset( $_GET['author'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		return false;
	}
	return $redirect;
}

/* =========================================================================
 * 5) Application passwords — off (they grant API access outside the main
 *    password and are unused here).
 * ====================================================================== */
add_filter( 'wp_is_application_passwords_available', '__return_false' );

/* =========================================================================
 * 6) User registration — hard-off regardless of the DB option.
 * ====================================================================== */
add_filter( 'option_users_can_register', '__return_zero' );

/* =========================================================================
 * 7) Version / generator disclosure — removed.
 * ====================================================================== */
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );
add_filter( 'style_loader_src', 'bxsec_strip_core_ver', 15 );
add_filter( 'script_loader_src', 'bxsec_strip_core_ver', 15 );

/**
 * Strip the WordPress core ?ver= from core asset URLs (leaks the exact version).
 *
 * @param string $src Asset URL.
 * @return string
 */
function bxsec_strip_core_ver( $src ) {
	if ( $src && false !== strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}

/* =========================================================================
 * 8) Security response headers on every WP-served page.
 * ====================================================================== */
add_action( 'send_headers', 'bxsec_security_headers' );

/**
 * Add conservative, break-nothing security headers.
 */
function bxsec_security_headers() {
	if ( headers_sent() ) {
		return;
	}
	header( 'X-Content-Type-Options: nosniff' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Permissions-Policy: geolocation=(), microphone=(), camera=(), browsing-topics=()' );
}

/* =========================================================================
 * 9) Login — generic error text (don't confirm which of username/password
 *    was wrong, i.e. don't confirm a valid username).
 * ====================================================================== */
add_filter( 'login_errors', 'bxsec_generic_login_error' );

/**
 * @return string
 */
function bxsec_generic_login_error() {
	return __( 'Invalid login details.', 'boostronixx' );
}

/* =========================================================================
 * 10) Stop username leaks via oEmbed + feeds (dc:creator). The public author
 *     name is aliased to the site name where it would otherwise expose the
 *     account login.
 * ====================================================================== */
add_filter( 'oembed_response_data', 'bxsec_scrub_oembed_author', 20 );
add_filter( 'the_author', 'bxsec_feed_author_alias' );
add_filter( 'the_author_url', 'bxsec_feed_author_url', 20 );

/**
 * Remove author name/url from oEmbed responses.
 *
 * @param array $data oEmbed data.
 * @return array
 */
function bxsec_scrub_oembed_author( $data ) {
	unset( $data['author_name'], $data['author_url'] );
	return $data;
}

/**
 * In feeds, publish the site name as the author (dc:creator) instead of the
 * account login. Front-end bylines are unaffected.
 *
 * @param string $name Author display name.
 * @return string
 */
function bxsec_feed_author_alias( $name ) {
	return is_feed() ? get_bloginfo( 'name' ) : $name;
}

/**
 * Never emit an author permalink (/author/<login>/) in feeds.
 *
 * @param string $url Author URL.
 * @return string
 */
function bxsec_feed_author_url( $url ) {
	return is_feed() ? home_url( '/' ) : $url;
}

/* =========================================================================
 * 11) Basic brute-force lockout on wp-login.php — lock an IP after repeated
 *     failed logins (a lightweight built-in; a dedicated WAF/plugin is still
 *     recommended for production).
 * ====================================================================== */
add_filter( 'authenticate', 'bxsec_login_lockout', 30, 3 );
add_action( 'wp_login_failed', 'bxsec_record_login_failure' );
add_action( 'wp_login', 'bxsec_clear_login_failures', 10, 2 );

/**
 * @return string transient key for the current client IP.
 */
function bxsec_lockout_key() {
	$ip = isset( $_SERVER['REMOTE_ADDR'] ) ? preg_replace( '/[^0-9a-fA-F:.]/', '', wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '0';
	return 'bxsec_ll_' . md5( $ip );
}

/**
 * Block authentication once an IP passes the failure threshold.
 *
 * @param null|WP_User|WP_Error $user     Auth result.
 * @param string                $username Username.
 * @param string                $password Password.
 * @return null|WP_User|WP_Error
 */
function bxsec_login_lockout( $user, $username, $password ) {
	if ( '' === $username && '' === $password ) {
		return $user;
	}
	if ( (int) get_transient( bxsec_lockout_key() ) >= 8 ) {
		return new WP_Error( 'bxsec_locked', __( 'Too many failed attempts. Please try again in about 15 minutes.', 'boostronixx' ) );
	}
	return $user;
}

/**
 * Count a failed login against the client IP.
 */
function bxsec_record_login_failure() {
	$k = bxsec_lockout_key();
	set_transient( $k, (int) get_transient( $k ) + 1, 15 * MINUTE_IN_SECONDS );
}

/**
 * Clear the failure counter on a successful login.
 *
 * @param string  $login Username.
 * @param WP_User $user  User.
 */
function bxsec_clear_login_failures( $login, $user ) {
	delete_transient( bxsec_lockout_key() );
}

/* =========================================================================
 * 12) Upload hardening — refuse script/executable + double-extension uploads
 *     (image.php.jpg) even for authenticated users, and drop SVG from the
 *     allowed types (SVGs can carry script).
 * ====================================================================== */
add_filter( 'upload_mimes', 'bxsec_restrict_upload_mimes', 20 );
add_filter( 'wp_handle_upload_prefilter', 'bxsec_block_dangerous_uploads' );
add_filter( 'wp_check_filetype_and_ext', 'bxsec_recheck_filetype', 20, 4 );

/**
 * Remove risky MIME types from the allow-list.
 *
 * @param array $mimes Allowed mimes.
 * @return array
 */
function bxsec_restrict_upload_mimes( $mimes ) {
	unset( $mimes['svg'], $mimes['svgz'] );
	return $mimes;
}

/**
 * Reject uploads whose name carries an executable/script extension anywhere
 * (including the double-extension trick image.php.jpg).
 *
 * @param array $file Upload array.
 * @return array
 */
function bxsec_block_dangerous_uploads( $file ) {
	$name = isset( $file['name'] ) ? strtolower( (string) $file['name'] ) : '';
	if ( preg_match( '/\.(php|phtml|php[0-9]|phps|pht|phar|cgi|pl|py|rb|asp|aspx|jsp|jspx|sh|shtml|exe|bat|cmd|com|htaccess|svg|svgz)(\.|$)/i', $name ) ) {
		$file['error'] = __( 'Sorry, this file type is not allowed for security reasons.', 'boostronixx' );
	}
	return $file;
}

/**
 * Belt-and-suspenders: force a disallowed result for dangerous extensions even
 * if some other filter tried to permit them.
 *
 * @param array  $data     File data (ext, type, proper_filename).
 * @param string $file     Full path.
 * @param string $filename Filename.
 * @param array  $mimes    Allowed mimes.
 * @return array
 */
function bxsec_recheck_filetype( $data, $file, $filename, $mimes ) {
	if ( preg_match( '/\.(php|phtml|php[0-9]|phps|pht|phar|cgi|pl|py|rb|asp|aspx|jsp|sh|exe|bat|htaccess|svg|svgz)$/i', (string) $filename ) ) {
		$data['ext']  = false;
		$data['type'] = false;
	}
	return $data;
}
