<?php
/**
 * Secure handler for all lead-capture forms (contact, popup, blog contact,
 * blog-post modal, newsletter). Saves each submission as a bx_lead and emails
 * the site admin. Front-end submission is wired by assets/forms.js.
 *
 * The notification email is sent OUT OF BAND (see bxcore_dispatch_notification)
 * because SMTP costs seconds and the visitor must not wait for it.
 *
 * @package ProjectCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const BXCORE_ITI_VER    = '29.1.2';
const BXCORE_NOTIFY_ACT = 'bx_notify_lead';

add_action( 'wp_enqueue_scripts', 'bxcore_enqueue_forms' );
/**
 * Enqueue intl-tel-input + the form script, and pass the AJAX URL + nonce.
 */
function bxcore_enqueue_forms() {
	// intl-tel-input (MIT, vendored in assets/intl-tel-input). The "WithUtils"
	// bundle carries libphonenumber, which is what supplies the per-country
	// example placeholder, the length/format rules and isValidNumber().
	wp_enqueue_style(
		'intl-tel-input',
		BXCORE_URL . 'assets/intl-tel-input/css/intlTelInput.min.css',
		array(),
		BXCORE_ITI_VER
	);
	wp_enqueue_style(
		'bx-forms',
		BXCORE_URL . 'assets/forms.css',
		array( 'intl-tel-input' ),
		BXCORE_VER
	);
	wp_enqueue_script(
		'intl-tel-input',
		BXCORE_URL . 'assets/intl-tel-input/js/intlTelInputWithUtils.min.js',
		array(),
		BXCORE_ITI_VER,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
	wp_enqueue_script(
		'bx-forms',
		BXCORE_URL . 'assets/forms.js',
		array( 'intl-tel-input' ),
		BXCORE_VER,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
	wp_localize_script(
		'bx-forms',
		'BX_FORMS',
		array(
			'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
			'nonce'    => wp_create_nonce( 'bx_lead' ),
			'thankYou' => home_url( '/thank-you/' ),
			/**
			 * Country pre-selected when the IP lookup is unavailable or blocked.
			 *
			 * @param string $cc ISO 3166-1 alpha-2, lowercase.
			 */
			'defaultCountry' => apply_filters( 'bxcore_default_country', 'in' ),
		)
	);
}

/**
 * Stricter than is_email(), which happily accepts single-letter TLDs such as
 * "a@b.c". Requires a dot-separated domain ending in a 2+ letter TLD, matching
 * the client-side rule in forms.js.
 *
 * @param string $email Candidate address.
 * @return bool
 */
function bxcore_is_valid_email( $email ) {
	if ( ! is_email( $email ) ) {
		return false;
	}
	return (bool) preg_match( '/@[A-Za-z0-9-]+(?:\.[A-Za-z0-9-]+)*\.[A-Za-z]{2,}$/', $email );
}

add_action( 'wp_ajax_bx_submit_lead', 'bxcore_handle_lead' );
add_action( 'wp_ajax_nopriv_bx_submit_lead', 'bxcore_handle_lead' );
/**
 * Validate and store a lead submission, then hand the email off to a
 * background request. Responds with JSON.
 */
function bxcore_handle_lead() {
	// Security: nonce.
	$nonce = isset( $_POST['nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['nonce'] ) ) : '';
	if ( ! wp_verify_nonce( $nonce, 'bx_lead' ) ) {
		wp_send_json_error( array( 'message' => __( 'Session expired — please refresh the page and try again.', 'project-core' ) ), 403 );
	}

	// Spam: honeypot. Pretend success so bots move on.
	if ( ! empty( $_POST['bx_hp'] ) ) {
		wp_send_json_success( array( 'ok' => true ) );
	}

	// Rate limit: cap submissions per client IP (rolling ~10-minute window) to
	// stop anonymous lead/email flooding and DB bloat via this open endpoint.
	// Checked here but only INCREMENTED once a submission validates, so a
	// visitor correcting a typo can't lock themselves out.
	$rl_key  = 'bxcore_rl_' . md5( bxcore_client_ip() );
	$rl_hits = (int) get_transient( $rl_key );
	if ( $rl_hits >= 5 ) {
		wp_send_json_error( array( 'message' => __( 'Too many submissions from your connection — please try again in a few minutes.', 'project-core' ) ), 429 );
	}

	// Sanitise + hard length caps (reject-by-truncate) so no field can be abused
	// to write oversized rows to the database.
	$fields = array(
		'name'    => isset( $_POST['name'] ) ? mb_substr( sanitize_text_field( wp_unslash( $_POST['name'] ) ), 0, 100 ) : '',
		'email'   => isset( $_POST['email'] ) ? mb_substr( sanitize_email( wp_unslash( $_POST['email'] ) ), 0, 200 ) : '',
		'phone'   => isset( $_POST['phone'] ) ? mb_substr( sanitize_text_field( wp_unslash( $_POST['phone'] ) ), 0, 40 ) : '',
		'company' => isset( $_POST['company'] ) ? mb_substr( sanitize_text_field( wp_unslash( $_POST['company'] ) ), 0, 120 ) : '',
		'service' => isset( $_POST['service'] ) ? mb_substr( sanitize_text_field( wp_unslash( $_POST['service'] ) ), 0, 80 ) : '',
		'budget'  => isset( $_POST['budget'] ) ? mb_substr( sanitize_text_field( wp_unslash( $_POST['budget'] ) ), 0, 80 ) : '',
		'message' => isset( $_POST['message'] ) ? mb_substr( sanitize_textarea_field( wp_unslash( $_POST['message'] ) ), 0, 5000 ) : '',
	);
	$source = isset( $_POST['source'] ) ? mb_substr( sanitize_text_field( wp_unslash( $_POST['source'] ) ), 0, 40 ) : 'form';
	$page   = isset( $_POST['page'] ) ? mb_substr( esc_url_raw( wp_unslash( $_POST['page'] ) ), 0, 300 ) : '';

	// Validation.
	if ( ! bxcore_is_valid_email( $fields['email'] ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a complete email address, e.g. name@example.com', 'project-core' ) ), 422 );
	}
	if ( 'newsletter' !== $source && '' === $fields['name'] ) {
		wp_send_json_error( array( 'message' => __( 'Please enter your name.', 'project-core' ) ), 422 );
	}
	// forms.js submits E.164 (+911234567890) via intl-tel-input. Accept a plain
	// international-looking number too, in case JS-side enhancement is missing.
	if ( '' !== $fields['phone'] && ! preg_match( '/^\+?[0-9][0-9 ().-]{5,29}$/', $fields['phone'] ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid phone number.', 'project-core' ) ), 422 );
	}

	set_transient( $rl_key, $rl_hits + 1, 10 * MINUTE_IN_SECONDS );

	// Store.
	$title   = ( $fields['name'] ? $fields['name'] : __( '(no name)', 'project-core' ) ) . ' — ' . $source;
	$lead_id = wp_insert_post(
		array(
			'post_type'   => 'bx_lead',
			'post_status' => 'publish',
			'post_title'  => $title,
		),
		true
	);
	if ( is_wp_error( $lead_id ) ) {
		wp_send_json_error( array( 'message' => __( 'Could not save your message. Please try again.', 'project-core' ) ), 500 );
	}
	foreach ( $fields as $k => $v ) {
		update_post_meta( $lead_id, '_bx_' . $k, $v );
	}
	update_post_meta( $lead_id, '_bx_source', $source );
	update_post_meta( $lead_id, '_bx_page', $page );

	// Hand the (slow) email off to a background request and answer now.
	bxcore_dispatch_notification( $lead_id );

	wp_send_json_success( array( 'ok' => true ) );
}

/**
 * Kick off the notification email without blocking the visitor.
 *
 * SMTP costs seconds; this request must not pay for it. PHP-FPM's
 * fastcgi_finish_request() is not available under mod_fcgid/CGI, so instead we
 * fire a non-blocking loopback request that does the sending, and schedule a
 * cron event as a safety net for hosts where loopback requests are blocked.
 * bxcore_notify_lead() claims the send, so only one of the two ever delivers.
 *
 * @param int $lead_id Lead post ID.
 */
function bxcore_dispatch_notification( $lead_id ) {
	// One-time token: the background endpoint is public, so it must not be
	// usable to make the site email arbitrary leads on demand.
	$token = wp_generate_password( 24, false );
	update_post_meta( $lead_id, '_bx_notify_token', $token );

	// Safety net first, so a fatal in the loopback still leaves a retry.
	if ( ! wp_next_scheduled( 'bxcore_notify_lead_event', array( $lead_id ) ) ) {
		wp_schedule_single_event( time() + 60, 'bxcore_notify_lead_event', array( $lead_id ) );
	}

	$body = array(
		'action' => BXCORE_NOTIFY_ACT,
		'lead'   => $lead_id,
		'token'  => $token,
	);

	if ( bxcore_spawn_loopback( admin_url( 'admin-ajax.php' ), $body ) ) {
		return;
	}

	// Socket write failed (disabled functions, odd host). Fall back to the HTTP
	// API. Note this still costs ~1s even when non-blocking, because WP_Http
	// runs the timeout through ceil() — hence the socket path above.
	wp_remote_post(
		admin_url( 'admin-ajax.php' ),
		array(
			'timeout'    => 0.01,
			'blocking'   => false,
			'sslverify'  => false, // Loopback to ourselves; local certs are self-signed.
			'user-agent' => 'BoostronixX/loopback',
			'body'       => $body,
		)
	);
}

/**
 * Write a POST request straight to the socket and hang up without reading the
 * response — a genuine fire-and-forget (~20ms) rather than WP_Http's ~1s floor.
 *
 * @param string $url  Absolute URL to call.
 * @param array  $body Form-encoded payload.
 * @return bool True when the request was written to the socket.
 */
function bxcore_spawn_loopback( $url, array $body ) {
	if ( ! function_exists( 'stream_socket_client' ) ) {
		return false;
	}

	$parts = wp_parse_url( $url );
	if ( empty( $parts['host'] ) ) {
		return false;
	}

	$scheme = isset( $parts['scheme'] ) ? $parts['scheme'] : 'http';
	$host   = $parts['host'];
	$port   = isset( $parts['port'] ) ? (int) $parts['port'] : ( 'https' === $scheme ? 443 : 80 );
	$path   = ( isset( $parts['path'] ) ? $parts['path'] : '/' );
	if ( ! empty( $parts['query'] ) ) {
		$path .= '?' . $parts['query'];
	}

	// Loopback to ourselves, so certificate checks add latency without adding
	// trust (and local/staging certs are self-signed).
	$context = stream_context_create(
		array(
			'ssl' => array(
				'verify_peer'       => false,
				'verify_peer_name'  => false,
				'SNI_enabled'       => true,
				'peer_name'         => $host,
			),
		)
	);

	$transport = ( 'https' === $scheme ) ? 'ssl://' : 'tcp://';
	$errno     = 0;
	$errstr    = '';
	$socket    = @stream_socket_client( // phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged -- failure is handled by the caller.
		$transport . $host . ':' . $port,
		$errno,
		$errstr,
		2,
		STREAM_CLIENT_CONNECT,
		$context
	);
	if ( ! $socket ) {
		return false;
	}

	$payload = http_build_query( $body );
	$request  = 'POST ' . $path . " HTTP/1.1\r\n";
	$request .= 'Host: ' . $host . "\r\n";
	$request .= "User-Agent: BoostronixX/loopback\r\n";
	$request .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$request .= 'Content-Length: ' . strlen( $payload ) . "\r\n";
	$request .= "Connection: Close\r\n\r\n";
	$request .= $payload;

	$written = fwrite( $socket, $request );

	// Hold the connection open for a beat before hanging up. Closing the
	// instant the bytes are written makes Apache/mod_fcgid drop the request
	// before it ever reaches PHP (measured: 0ms never ran, 50ms always did).
	// This is the only part of the dispatch the visitor waits on, and the cron
	// event scheduled by the caller still covers a host that needs longer.
	/**
	 * Microseconds to hold the loopback socket open before closing.
	 *
	 * @param int $usec Hold time in microseconds.
	 */
	$hold = (int) apply_filters( 'bxcore_loopback_hold_us', 150000 );
	if ( $hold > 0 ) {
		usleep( $hold );
	}

	fclose( $socket );

	return strlen( $request ) === $written;
}

add_action( 'wp_ajax_' . BXCORE_NOTIFY_ACT, 'bxcore_notify_endpoint' );
add_action( 'wp_ajax_nopriv_' . BXCORE_NOTIFY_ACT, 'bxcore_notify_endpoint' );
/**
 * Background endpoint that actually sends the notification email.
 */
function bxcore_notify_endpoint() {
	// The caller hangs up immediately by design — keep running anyway, or PHP
	// would abort partway through the SMTP conversation.
	ignore_user_abort( true );

	$lead  = isset( $_POST['lead'] ) ? absint( $_POST['lead'] ) : 0;
	$token = isset( $_POST['token'] ) ? sanitize_text_field( wp_unslash( $_POST['token'] ) ) : '';

	$stored = $lead ? (string) get_post_meta( $lead, '_bx_notify_token', true ) : '';
	if ( ! $lead || '' === $stored || '' === $token || ! hash_equals( $stored, $token ) ) {
		wp_die( '', '', array( 'response' => 403 ) );
	}

	bxcore_notify_lead( $lead );
	wp_die( '', '', array( 'response' => 200 ) );
}

add_action( 'bxcore_notify_lead_event', 'bxcore_notify_lead' );
/**
 * Email the site's lead inbox about one stored lead. Safe to call more than
 * once — the first caller claims the send.
 *
 * @param int $lead_id Lead post ID.
 */
function bxcore_notify_lead( $lead_id ) {
	$lead_id = absint( $lead_id );
	if ( ! $lead_id || 'bx_lead' !== get_post_type( $lead_id ) ) {
		return;
	}

	// Claim it. add_post_meta() with $unique = true returns false when the key
	// already exists, so the loopback and the cron fallback can't both send.
	if ( ! add_post_meta( $lead_id, '_bx_notified', time(), true ) ) {
		return;
	}

	$keys   = array( 'name', 'email', 'phone', 'company', 'service', 'budget', 'message' );
	$fields = array();
	foreach ( $keys as $k ) {
		$fields[ $k ] = (string) get_post_meta( $lead_id, '_bx_' . $k, true );
	}
	$source = (string) get_post_meta( $lead_id, '_bx_source', true );
	$page   = (string) get_post_meta( $lead_id, '_bx_page', true );

	// Recipient is CMS-editable via Site Settings → Contact → "Leads
	// notification email" (bx_option 'leads_email'), which supports
	// comma-separated inboxes and falls back to the admin email.
	$to_raw = function_exists( 'bx_option' ) ? (string) bx_option( 'leads_email', '' ) : '';
	$to     = array_values( array_filter( array_map( 'trim', explode( ',', $to_raw ) ), 'is_email' ) );
	if ( empty( $to ) ) {
		$to = get_option( 'admin_email' );
	}

	$subject = sprintf( '[%s] New enquiry — %s', get_bloginfo( 'name' ), $source );
	$body    = '';
	foreach ( array_merge( $fields, array( 'source' => $source, 'page' => $page ) ) as $k => $v ) {
		if ( '' !== $v && 'message' !== $k ) {
			$body .= ucfirst( $k ) . ': ' . $v . "\n";
		}
	}
	$body .= "\nMessage:\n" . $fields['message'] . "\n";

	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( is_email( $fields['email'] ) ) {
		$headers[] = 'Reply-To: ' . $fields['name'] . ' <' . $fields['email'] . '>';
	}

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		delete_post_meta( $lead_id, '_bx_notify_token' );
		wp_clear_scheduled_hook( 'bxcore_notify_lead_event', array( $lead_id ) );
		return;
	}

	// Release the claim so the cron fallback retries, and leave a breadcrumb.
	delete_post_meta( $lead_id, '_bx_notified' );
	global $phpmailer;
	$err = ( isset( $phpmailer ) && ! empty( $phpmailer->ErrorInfo ) ) ? (string) $phpmailer->ErrorInfo : 'unknown';
	update_post_meta( $lead_id, '_bx_notify_error', mb_substr( $err, 0, 300 ) );
	if ( ! wp_next_scheduled( 'bxcore_notify_lead_event', array( $lead_id ) ) ) {
		wp_schedule_single_event( time() + 300, 'bxcore_notify_lead_event', array( $lead_id ) );
	}
}

/**
 * Best-effort client IP for rate limiting. Uses REMOTE_ADDR only (not the
 * spoofable X-Forwarded-For), so an attacker can't reset the limit at will.
 *
 * @return string
 */
function bxcore_client_ip() {
	$ip = isset( $_SERVER['REMOTE_ADDR'] ) ? wp_unslash( $_SERVER['REMOTE_ADDR'] ) : '0.0.0.0';
	return preg_replace( '/[^0-9a-fA-F:.]/', '', (string) $ip );
}
