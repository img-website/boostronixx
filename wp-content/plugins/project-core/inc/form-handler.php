<?php
/**
 * Secure handler for all lead-capture forms (contact, popup, blog contact,
 * blog-post modal, newsletter). Saves each submission as a bx_lead and emails
 * the site admin. Front-end submission is wired by assets/forms.js.
 *
 * @package ProjectCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'bxcore_enqueue_forms' );
/**
 * Enqueue the form-submission script and pass it the AJAX URL + nonce.
 */
function bxcore_enqueue_forms() {
	wp_enqueue_script(
		'bx-forms',
		BXCORE_URL . 'assets/forms.js',
		array(),
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
		)
	);
}

add_action( 'wp_ajax_bx_submit_lead', 'bxcore_handle_lead' );
add_action( 'wp_ajax_nopriv_bx_submit_lead', 'bxcore_handle_lead' );
/**
 * Validate, store and notify on a lead submission. Responds with JSON.
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
	$rl_key  = 'bxcore_rl_' . md5( bxcore_client_ip() );
	$rl_hits = (int) get_transient( $rl_key );
	if ( $rl_hits >= 5 ) {
		wp_send_json_error( array( 'message' => __( 'Too many submissions from your connection — please try again in a few minutes.', 'project-core' ) ), 429 );
	}
	set_transient( $rl_key, $rl_hits + 1, 10 * MINUTE_IN_SECONDS );

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
	if ( ! is_email( $fields['email'] ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'project-core' ) ), 422 );
	}
	if ( 'newsletter' !== $source && '' === $fields['name'] ) {
		wp_send_json_error( array( 'message' => __( 'Please enter your name.', 'project-core' ) ), 422 );
	}

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

	// Notify (best-effort; production needs SMTP).
	$to      = get_option( 'admin_email' );
	$subject = sprintf( '[%s] New enquiry — %s', get_bloginfo( 'name' ), $source );
	$body    = '';
	foreach ( array_merge( $fields, array( 'source' => $source, 'page' => $page ) ) as $k => $v ) {
		if ( '' !== $v && 'message' !== $k ) {
			$body .= ucfirst( $k ) . ': ' . $v . "\n";
		}
	}
	$body  .= "\nMessage:\n" . $fields['message'] . "\n";
	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( is_email( $fields['email'] ) ) {
		$headers[] = 'Reply-To: ' . $fields['name'] . ' <' . $fields['email'] . '>';
	}
	wp_mail( $to, $subject, $body, $headers );

	wp_send_json_success( array( 'ok' => true ) );
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
