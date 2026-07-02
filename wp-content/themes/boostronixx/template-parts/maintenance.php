<?php
/**
 * Maintenance screen content (rendered inside blank chrome by the maintenance
 * handler in inc/maintenance.php — never a directly-routable page).
 *
 * Heading and message are editable in Site Settings → Maintenance.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bx_m_heading = bx_option( 'maintenance_heading', "We're tuning things up" );
$bx_m_message = bx_option( 'maintenance_message', "Our site is getting a quick upgrade to serve you better. We'll be back online shortly — thanks for your patience." );
?>
<div id="particles" class="fixed inset-0 pointer-events-none z-0" aria-hidden="true"></div>

<main id="main" class="relative min-h-screen grid-lines-d flex flex-col items-center justify-center text-center px-4 py-16 overflow-hidden">
	<!-- logo -->
	<img width="143" height="36" src="<?php echo esc_url( bx_logo_white_url() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="rise d1 h-8 sm:h-9 w-auto mb-10" />

	<!-- gears -->
	<div class="rise d2 relative h-40 w-40 sm:h-48 sm:w-48 mb-9">
		<svg viewBox="0 0 200 200" class="absolute inset-0 h-full w-full">
			<!-- big gear -->
			<g class="gear-a" style="transform-origin: 70px 78px">
				<path fill="#fa5539" d="M70 38c4 0 7 .5 7 .5l2 9a32 32 0 0 1 9 4l8-5 10 10-5 8a32 32 0 0 1 4 9l9 2v14l-9 2a32 32 0 0 1-4 9l5 8-10 10-8-5a32 32 0 0 1-9 4l-2 9H63l-2-9a32 32 0 0 1-9-4l-8 5-10-10 5-8a32 32 0 0 1-4-9l-9-2v-14l9-2a32 32 0 0 1 4-9l-5-8 10-10 8 5a32 32 0 0 1 9-4l2-9s3-.5 7-.5z" />
				<circle cx="70" cy="78" r="17" fill="#0a0a0a" />
				<circle cx="70" cy="78" r="8" fill="#fa5539" />
			</g>
			<!-- small gear -->
			<g class="gear-b" style="transform-origin: 138px 130px">
				<path fill="#ffffff" d="M138 104c3 0 5 .4 5 .4l1.4 6.5a24 24 0 0 1 6.6 2.8l5.7-3.6 7 7-3.6 5.7a24 24 0 0 1 2.8 6.6l6.5 1.4v10l-6.5 1.4a24 24 0 0 1-2.8 6.6l3.6 5.7-7 7-5.7-3.6a24 24 0 0 1-6.6 2.8l-1.4 6.5h-10l-1.4-6.5a24 24 0 0 1-6.6-2.8l-5.7 3.6-7-7 3.6-5.7a24 24 0 0 1-2.8-6.6l-6.5-1.4v-10l6.5-1.4a24 24 0 0 1 2.8-6.6l-3.6-5.7 7-7 5.7 3.6a24 24 0 0 1 6.6-2.8l1.4-6.5s2-.4 5-.4z" />
				<circle cx="138" cy="130" r="12" fill="#0a0a0a" />
				<circle cx="138" cy="130" r="5" fill="#ffffff" />
			</g>
		</svg>
		<span class="absolute -right-1 top-1 inline-flex items-center gap-1.5 rounded-full bg-white/10 px-2.5 py-1 text-[10px] font-medium backdrop-blur"><span class="live h-1.5 w-1.5 rounded-full bg-accent"></span> working on it</span>
	</div>

	<p class="rise d3 text-xs font-medium tracking-[.25em] uppercase text-accent">Scheduled maintenance</p>
	<h1 class="rise d4 font-display text-4xl sm:text-6xl lg:text-7xl tt leading-[0.98] mt-3 max-w-3xl">
		<?php echo esc_html( $bx_m_heading ); ?>
	</h1>
	<p class="rise d5 text-white/60 mt-5 max-w-md leading-relaxed">
		<?php echo esc_html( $bx_m_message ); ?>
	</p>

	<!-- progress -->
	<div class="rise d5 w-full max-w-sm mt-9">
		<div class="bar-track h-2 w-full rounded-full"><div class="bar-fill h-full rounded-full"></div></div>
		<div class="flex justify-between text-[11px] text-white/40 mt-2">
			<span>Upgrading systems…</span><span>Almost there</span>
		</div>
	</div>

	<!-- notify -->
	<form id="notifyForm" class="rise d6 mt-9 w-full max-w-md">
		<p class="text-sm text-white/70 mb-3">Want a ping when we're back?</p>
		<div class="flex flex-col sm:flex-row gap-2">
			<div class="relative flex-1">
				<iconify-icon icon="lucide:mail" class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40"></iconify-icon>
				<input id="notifyEmail" type="email" required aria-label="Email address" placeholder="you@email.com" class="w-full rounded-full bg-white/5 border border-white/15 pl-11 pr-4 py-3.5 text-sm text-white placeholder-white/35 outline-none focus:border-accent focus:bg-white/10 transition" />
			</div>
			<button type="submit" class="rounded-full bg-accent text-white px-6 py-3.5 text-sm font-medium hover:bg-white hover:text-ink transition inline-flex items-center justify-center gap-2">
				<span id="notifyLabel">Notify me</span>
				<iconify-icon icon="lucide:bell" id="notifyIcon"></iconify-icon>
			</button>
		</div>
		<p id="notifyOk" class="hidden text-sm text-accent mt-3 items-center justify-center gap-1.5"><iconify-icon icon="lucide:check-circle"></iconify-icon> You're on the list — we'll let you know.</p>
	</form>

	<!-- meta + social -->
	<div class="rise d6 mt-10 flex flex-col items-center gap-4">
		<p class="text-xs text-white/40 inline-flex items-center gap-2"><iconify-icon icon="lucide:clock"></iconify-icon> Estimated downtime: under 2 hours</p>
		<div class="flex items-center gap-2">
			<?php
			$bx_m_social = bx_option( 'social_links', array() );
			if ( ! $bx_m_social ) {
				$bx_m_social = array(
					array( 'platform' => 'linkedin', 'url' => 'https://www.linkedin.com/company/boostronixx' ),
					array( 'platform' => 'instagram', 'url' => 'https://www.instagram.com/boostronixx/' ),
				);
			}
			foreach ( $bx_m_social as $bx_m_s ) :
				if ( empty( $bx_m_s['url'] ) ) {
					continue;
				}
				?>
			<a href="<?php echo esc_url( $bx_m_s['url'] ); ?>" target="_blank" rel="noopener" aria-label="<?php echo esc_attr( ucfirst( $bx_m_s['platform'] ) ); ?>" class="grid place-items-center h-10 w-10 rounded-full border border-white/15 hover:bg-accent hover:border-accent transition"><iconify-icon icon="<?php echo esc_attr( bx_social_icon( $bx_m_s['platform'] ) ); ?>" aria-hidden="true"></iconify-icon></a>
			<?php endforeach; ?>
			<a href="mailto:<?php echo esc_attr( bx_option( 'contact_email', 'boostronixx@gmail.com' ) ); ?>" aria-label="Email" class="grid place-items-center h-10 w-10 rounded-full border border-white/15 hover:bg-accent hover:border-accent transition"><iconify-icon icon="lucide:mail"></iconify-icon></a>
		</div>
	</div>
</main>
