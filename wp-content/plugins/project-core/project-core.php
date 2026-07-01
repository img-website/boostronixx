<?php
/**
 * Plugin Name:       BoostronixX Core
 * Description:       Site-specific logic that must survive theme switches — Leads (enquiries) CPT and secure form handling for all lead-capture forms.
 * Version:           1.0.0
 * Requires PHP:      8.1
 * Author:            IMG Global Infotech
 * Text Domain:       project-core
 *
 * @package ProjectCore
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BXCORE_VER', '1.0.0' );
define( 'BXCORE_DIR', plugin_dir_path( __FILE__ ) );
define( 'BXCORE_URL', plugin_dir_url( __FILE__ ) );

require_once BXCORE_DIR . 'inc/cpt-lead.php';
require_once BXCORE_DIR . 'inc/form-handler.php';

register_activation_hook(
	__FILE__,
	function () {
		bxcore_register_lead_cpt();
		flush_rewrite_rules();
	}
);
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
