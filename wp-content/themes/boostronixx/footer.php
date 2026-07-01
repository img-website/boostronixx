<?php
/**
 * Site footer + mobile bottom nav + (home-only) lead popup.
 *
 * All content is driven by the Site Settings options page (inc/site-options.php),
 * each value falling back to the original design content when empty.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bx_logo    = bx_logo_url();
$bx_tagline = bx_option( 'footer_tagline', 'A creative branding & digital marketing agency in Jaipur, India — helping ambitious businesses build brands that grow.' );

$bx_social = bx_option( 'social_links', array() );
if ( ! $bx_social ) {
	$bx_social = array(
		array( 'platform' => 'linkedin', 'url' => 'https://www.linkedin.com/company/boostronixx' ),
		array( 'platform' => 'instagram', 'url' => 'https://www.instagram.com/boostronixx/' ),
		array( 'platform' => 'youtube', 'url' => 'https://www.youtube.com/@boostronixx' ),
		array( 'platform' => 'facebook', 'url' => 'https://www.facebook.com/boostronixx' ),
	);
}

$bx_col1 = bx_option( 'footer_col1', array() );
if ( ! $bx_col1 ) {
	$bx_col1 = array(
		array( 'link' => array( 'title' => 'All Services', 'url' => home_url( '/services/' ) ) ),
		array( 'link' => array( 'title' => 'SEO Services', 'url' => home_url( '/seo-services/' ) ) ),
		array( 'link' => array( 'title' => 'Social Media', 'url' => home_url( '/social-media-marketing/' ) ) ),
		array( 'link' => array( 'title' => 'Performance Marketing', 'url' => home_url( '/performance-marketing/' ) ) ),
		array( 'link' => array( 'title' => 'Website Design', 'url' => home_url( '/website-design/' ) ) ),
	);
}
$bx_col2 = bx_option( 'footer_col2', array() );
if ( ! $bx_col2 ) {
	$bx_col2 = array(
		array( 'link' => array( 'title' => 'About Us', 'url' => home_url( '/about-us/' ) ) ),
		array( 'link' => array( 'title' => 'Industries', 'url' => home_url( '/industries/' ) ) ),
		array( 'link' => array( 'title' => 'Work', 'url' => home_url( '/portfolio/' ) ) ),
		array( 'link' => array( 'title' => 'Insights', 'url' => home_url( '/blog/' ) ) ),
		array( 'link' => array( 'title' => 'FAQ', 'url' => home_url( '/faq/' ) ) ),
		array( 'link' => array( 'title' => 'Contact', 'url' => home_url( '/contact-us/' ) ) ),
	);
}
$bx_legal = bx_option( 'footer_legal', array() );
if ( ! $bx_legal ) {
	$bx_legal = array(
		array( 'link' => array( 'title' => 'Privacy', 'url' => home_url( '/privacy-policy/' ) ) ),
		array( 'link' => array( 'title' => 'Terms', 'url' => home_url( '/terms-and-conditions/' ) ) ),
		array( 'link' => array( 'title' => 'Disclaimer', 'url' => home_url( '/disclaimer/' ) ) ),
		array( 'link' => array( 'title' => 'Sitemap', 'url' => home_url( '/sitemap/' ) ) ),
	);
}

$bx_phone      = bx_option( 'contact_phone', '+91 80582 12202' );
$bx_phone_link = bx_option( 'contact_phone_link', '+918058212202' );
$bx_email      = bx_option( 'contact_email', 'boostronixx@gmail.com' );
$bx_address    = bx_option( 'contact_address', "880, Rani Sati Nagar, Gautam Marg,\nNirman Nagar, Jaipur, Rajasthan 302019, India" );
$bx_hours      = bx_option( 'contact_hours', 'Mon–Fri · 9 AM–7 PM IST' );

$bx_appnav = bx_option( 'app_nav', array() );
if ( ! $bx_appnav ) {
	$bx_appnav = array(
		array( 'icon' => 'lucide:house', 'label' => 'Home', 'link' => array( 'url' => home_url( '/' ) ) ),
		array( 'icon' => 'lucide:layout-grid', 'label' => 'Services', 'link' => array( 'url' => home_url( '/services/' ) ) ),
		array( 'icon' => 'lucide:briefcase', 'label' => 'Work', 'link' => array( 'url' => home_url( '/portfolio/' ) ) ),
		array( 'icon' => 'lucide:message-square', 'label' => 'Contact', 'link' => array( 'url' => home_url( '/contact-us/' ) ) ),
	);
}

/**
 * Render a simple footer link list from an ACF link-repeater array.
 *
 * @param array $rows Repeater rows each with a 'link' => {title,url,target}.
 * @return void
 */
function bx_footer_links( $rows ) {
	foreach ( (array) $rows as $row ) {
		$l = isset( $row['link'] ) ? $row['link'] : array();
		if ( empty( $l['url'] ) ) {
			continue;
		}
		$t = ! empty( $l['target'] ) ? ' target="' . esc_attr( $l['target'] ) . '"' : '';
		printf(
			'<li><a href="%s"%s class="hover:text-accent">%s</a></li>',
			esc_url( $l['url'] ),
			$t, // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- esc_attr above.
			esc_html( $l['title'] )
		);
	}
}
?>

<!-- ===================== FOOTER ===================== -->
<footer class="border-t border-line pt-16 pb-28 lg:pb-16">
	<div class="mx-auto max-w-7xl px-4 sm:px-6">
		<div class="grid sm:grid-cols-2 lg:grid-cols-12 gap-10">
			<div class="lg:col-span-5">
				<img src="<?php echo esc_url( $bx_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="h-8 w-auto" />
				<p class="text-ink-soft mt-5 max-w-sm text-sm leading-relaxed"><?php echo esc_html( $bx_tagline ); ?></p>
				<div class="flex items-center gap-3 mt-6 text-xs font-medium">
					<?php
					foreach ( $bx_social as $bx_s ) :
						if ( empty( $bx_s['url'] ) ) {
							continue;
						}
						?>
					<a href="<?php echo esc_url( $bx_s['url'] ); ?>" target="_blank" rel="noopener" aria-label="<?php echo esc_attr( ucfirst( $bx_s['platform'] ) ); ?>" class="grid place-items-center h-10 w-10 rounded-full border border-line text-base hover:bg-ink hover:text-paper transition"><iconify-icon icon="<?php echo esc_attr( bx_social_icon( $bx_s['platform'] ) ); ?>" aria-hidden="true"></iconify-icon></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="lg:col-span-2">
				<h4 class="font-display text-sm mb-4"><?php echo esc_html( bx_option( 'footer_col1_heading', 'Services' ) ); ?></h4>
				<ul class="space-y-3 text-sm text-ink-soft">
					<?php bx_footer_links( $bx_col1 ); ?>
				</ul>
			</div>
			<div class="lg:col-span-2">
				<h4 class="font-display text-sm mb-4"><?php echo esc_html( bx_option( 'footer_col2_heading', 'Company' ) ); ?></h4>
				<ul class="space-y-3 text-sm text-ink-soft">
					<?php bx_footer_links( $bx_col2 ); ?>
				</ul>
			</div>
			<div class="lg:col-span-3">
				<h4 class="font-display text-sm mb-4"><?php echo esc_html( bx_option( 'footer_col3_heading', 'Get in touch' ) ); ?></h4>
				<address class="not-italic space-y-3 text-sm text-ink-soft">
					<?php if ( $bx_phone ) : ?><p><a href="tel:<?php echo esc_attr( $bx_phone_link ); ?>" class="hover:text-accent font-medium text-ink"><?php echo esc_html( $bx_phone ); ?></a></p><?php endif; ?>
					<?php if ( $bx_email ) : ?><p><a href="mailto:<?php echo esc_attr( $bx_email ); ?>" class="hover:text-accent"><?php echo esc_html( $bx_email ); ?></a></p><?php endif; ?>
					<?php if ( $bx_address ) : ?><p><?php echo nl2br( esc_html( $bx_address ) ); ?></p><?php endif; ?>
					<?php if ( $bx_hours ) : ?><p class="text-xs"><?php echo esc_html( $bx_hours ); ?></p><?php endif; ?>
				</address>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row items-center justify-between gap-3 mt-14 pt-6 border-t border-line text-xs text-ink-soft">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( bx_option( 'copyright_text', 'BoostronixX. All rights reserved.' ) ); ?><?php $bx_upd = function_exists( 'bx_last_updated_ts' ) ? bx_last_updated_ts() : 0; ?><?php if ( $bx_upd ) : ?> <span class="opacity-70">&middot; Updated <time datetime="<?php echo esc_attr( gmdate( 'Y-m-d', $bx_upd ) ); ?>"><?php echo esc_html( date_i18n( 'M j, Y', $bx_upd ) ); ?></time></span><?php endif; ?></p>
			<div class="flex flex-wrap gap-5">
				<?php
				foreach ( $bx_legal as $bx_row ) :
					$bx_l = isset( $bx_row['link'] ) ? $bx_row['link'] : array();
					if ( empty( $bx_l['url'] ) ) {
						continue;
					}
					?>
				<a href="<?php echo esc_url( $bx_l['url'] ); ?>" class="hover:text-accent"><?php echo esc_html( $bx_l['title'] ); ?></a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</footer>

<!-- ===================== MOBILE APP BOTTOM NAV ===================== -->
<nav class="appnav lg:hidden fixed bottom-0 inset-x-0 z-40 bg-paper/90 backdrop-blur-md border-t border-line" aria-label="Quick navigation">
	<div class="grid grid-cols-4 max-w-md mx-auto">
		<?php
		foreach ( $bx_appnav as $bx_a ) :
			$bx_url = isset( $bx_a['link']['url'] ) ? $bx_a['link']['url'] : '';
			if ( ! $bx_url ) {
				continue;
			}
			$bx_cls = 'flex flex-col items-center gap-1 py-2.5 text-[11px] font-medium ' . ( bx_link_is_current( $bx_url ) ? 'text-accent' : 'text-ink-soft' );
			?>
		<a href="<?php echo esc_url( $bx_url ); ?>" class="<?php echo esc_attr( $bx_cls ); ?>"><iconify-icon icon="<?php echo esc_attr( $bx_a['icon'] ); ?>" class="text-[22px]" aria-hidden="true"></iconify-icon><?php echo esc_html( $bx_a['label'] ); ?></a>
		<?php endforeach; ?>
	</div>
</nav>

<?php get_template_part( 'template-parts/lead-popup' ); ?>

<?php wp_footer(); ?>
</body>
</html>
