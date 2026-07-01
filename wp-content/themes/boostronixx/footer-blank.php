<?php
/**
 * Minimal "blank" footer for standalone full-screen pages. Fires wp_footer()
 * (so enqueued JS still runs) and closes the document — deliberately no dark
 * site footer, no mobile bottom nav and no lead popup.
 *
 * Used via get_footer( 'blank' ).
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php wp_footer(); ?>
</body>
</html>
