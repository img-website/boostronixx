<?php
/**
 * Site footer + mobile bottom nav + (home-only) lead popup.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bx_logo = 'https://boostronixx.s3.ap-south-1.amazonaws.com/wp-content/uploads/2026/04/boostronixx-full-logo.webp';

/**
 * Bottom-nav link classes (active item gets the accent colour, as in the original JS).
 *
 * @param string $key home|services|portfolio|contact
 * @return string
 */
function bx_appnav_classes( $key ) {
	$base = 'flex flex-col items-center gap-1 py-2.5 text-[11px] font-medium ';
	return $base . ( bx_appnav_is_active( $key ) ? 'text-accent' : 'text-ink-soft' );
}
?>

<!-- ===================== FOOTER ===================== -->
<footer class="border-t border-line pt-16 pb-28 lg:pb-16">
	<div class="mx-auto max-w-7xl px-4 sm:px-6">
		<div class="grid sm:grid-cols-2 lg:grid-cols-12 gap-10">
			<div class="lg:col-span-5">
				<img src="<?php echo esc_url( $bx_logo ); ?>" alt="BoostronixX" class="h-8" />
				<p class="text-ink-soft mt-5 max-w-sm text-sm leading-relaxed">A creative branding &amp; digital marketing agency in Jaipur, India — helping ambitious businesses build brands that grow.</p>
				<div class="flex items-center gap-3 mt-6 text-xs font-medium">
					<a href="https://www.linkedin.com/company/boostronixx" aria-label="LinkedIn" class="grid place-items-center h-10 w-10 rounded-full border border-line text-base hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:linkedin" aria-hidden="true"></iconify-icon></a>
					<a href="https://www.instagram.com/boostronixx/" aria-label="Instagram" class="grid place-items-center h-10 w-10 rounded-full border border-line text-base hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:instagram" aria-hidden="true"></iconify-icon></a>
					<a href="https://www.youtube.com/@boostronixx" aria-label="YouTube" class="grid place-items-center h-10 w-10 rounded-full border border-line text-base hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:youtube" aria-hidden="true"></iconify-icon></a>
					<a href="https://www.facebook.com/boostronixx" aria-label="Facebook" class="grid place-items-center h-10 w-10 rounded-full border border-line text-base hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:facebook" aria-hidden="true"></iconify-icon></a>
				</div>
			</div>
			<div class="lg:col-span-2">
				<h4 class="font-display text-sm mb-4">Services</h4>
				<ul class="space-y-3 text-sm text-ink-soft">
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="hover:text-accent">All Services</a></li>
					<li><a href="<?php echo esc_url( home_url( '/seo-services/' ) ); ?>" class="hover:text-accent">SEO Services</a></li>
					<li><a href="<?php echo esc_url( home_url( '/social-media-marketing/' ) ); ?>" class="hover:text-accent">Social Media</a></li>
					<li><a href="<?php echo esc_url( home_url( '/performance-marketing/' ) ); ?>" class="hover:text-accent">Performance Marketing</a></li>
					<li><a href="<?php echo esc_url( home_url( '/website-design/' ) ); ?>" class="hover:text-accent">Website Design</a></li>
				</ul>
			</div>
			<div class="lg:col-span-2">
				<h4 class="font-display text-sm mb-4">Company</h4>
				<ul class="space-y-3 text-sm text-ink-soft">
					<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="hover:text-accent">About Us</a></li>
					<li><a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>" class="hover:text-accent">Industries</a></li>
					<li><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="hover:text-accent">Work</a></li>
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="hover:text-accent">Insights</a></li>
					<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="hover:text-accent">FAQ</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="hover:text-accent">Contact</a></li>
				</ul>
			</div>
			<div class="lg:col-span-3">
				<h4 class="font-display text-sm mb-4">Get in touch</h4>
				<address class="not-italic space-y-3 text-sm text-ink-soft">
					<p><a href="tel:+918058212202" class="hover:text-accent font-medium text-ink">+91 80582 12202</a></p>
					<p><a href="mailto:boostronixx@gmail.com" class="hover:text-accent">boostronixx@gmail.com</a></p>
					<p>880, Rani Sati Nagar, Gautam Marg,<br />Nirman Nagar, Jaipur, Rajasthan 302019, India</p>
					<p class="text-xs">Mon–Fri · 9 AM–7 PM IST</p>
				</address>
			</div>
		</div>
		<div class="flex flex-col sm:flex-row items-center justify-between gap-3 mt-14 pt-6 border-t border-line text-xs text-ink-soft">
			<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> BoostronixX. All rights reserved. <span class="opacity-70">&middot; Updated <time datetime="2026-06-23">Jun 23, 2026</time></span></p>
			<div class="flex flex-wrap gap-5">
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="hover:text-accent">Privacy</a>
				<a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>" class="hover:text-accent">Terms</a>
				<a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>" class="hover:text-accent">Disclaimer</a>
				<a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>" class="hover:text-accent">Sitemap</a>
			</div>
		</div>
	</div>
</footer>

<!-- ===================== MOBILE APP BOTTOM NAV ===================== -->
<nav class="appnav lg:hidden fixed bottom-0 inset-x-0 z-40 bg-paper/90 backdrop-blur-md border-t border-line" aria-label="Quick navigation">
	<div class="grid grid-cols-4 max-w-md mx-auto">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo esc_attr( bx_appnav_classes( 'home' ) ); ?>"><iconify-icon icon="lucide:house" class="text-[22px]" aria-hidden="true"></iconify-icon>Home</a>
		<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="<?php echo esc_attr( bx_appnav_classes( 'services' ) ); ?>"><iconify-icon icon="lucide:layout-grid" class="text-[22px]" aria-hidden="true"></iconify-icon>Services</a>
		<a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="<?php echo esc_attr( bx_appnav_classes( 'portfolio' ) ); ?>"><iconify-icon icon="lucide:briefcase" class="text-[22px]" aria-hidden="true"></iconify-icon>Work</a>
		<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="<?php echo esc_attr( bx_appnav_classes( 'contact' ) ); ?>"><iconify-icon icon="lucide:message-square" class="text-[22px]" aria-hidden="true"></iconify-icon>Contact</a>
	</div>
</nav>

<?php get_template_part( 'template-parts/lead-popup' ); ?>

<?php wp_footer(); ?>
</body>
</html>
