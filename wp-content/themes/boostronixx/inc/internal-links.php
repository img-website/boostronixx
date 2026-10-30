<?php
/**
 * Internal linking blocks — cross-links between service and industry pages.
 *
 * Per the BoostronixX audit: every service page links out to the industry
 * pages ("Industries we serve"), and every industry page links to the other
 * industries ("Other industries we serve"). Anchors are kept natural but
 * keyword-aligned to the target page.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Industry base data: slug => icon, title, url.
 *
 * @return array
 */
function bx_industries_base() {
	return array(
		'real-estate'   => array( 'icon' => 'lucide:building-2',     'title' => 'Real Estate',         'url' => '/industries/real-estate/' ),
		'hospitals'     => array( 'icon' => 'lucide:stethoscope',    'title' => 'Hospitals & Clinics', 'url' => '/industries/hospitals/' ),
		'schools'       => array( 'icon' => 'lucide:graduation-cap', 'title' => 'Schools & Education',  'url' => '/industries/schools/' ),
		'd2c-ecommerce' => array( 'icon' => 'lucide:shopping-bag',   'title' => 'D2C & E-commerce',     'url' => '/industries/d2c-ecommerce/' ),
	);
}

/**
 * Render the "Industries we serve" (service pages) or "Other industries we
 * serve" (industry pages) internal-link card section.
 *
 * @param string $current_industry Industry slug when rendered on an industry
 *                                 page (excluded from the list). Empty string
 *                                 for service pages (all four are shown).
 * @return void
 */
function bx_industries_links_section( $current_industry = '' ) {
	$base = bx_industries_base();

	// Service-page context: keyword-aligned descriptor for each industry.
	$service_desc = array(
		'real-estate'   => 'Real estate digital marketing',
		'hospitals'     => 'Hospital digital marketing',
		'schools'       => 'Schools digital marketing',
		'd2c-ecommerce' => 'E-commerce digital marketing',
	);

	// Industry-page context: source-specific descriptors (ordered per audit).
	$industry_desc = array(
		'd2c-ecommerce' => array(
			'hospitals'   => 'Healthcare digital marketing agency',
			'real-estate' => 'Real estate digital marketing agency',
			'schools'     => 'School digital marketing agency',
		),
		'hospitals'     => array(
			'real-estate'   => 'Real estate digital marketing services',
			'schools'       => 'Schools digital marketing services',
			'd2c-ecommerce' => 'E-commerce digital marketing services',
		),
		'real-estate'   => array(
			'schools'       => 'Digital marketing for private schools',
			'd2c-ecommerce' => 'Digital marketing for D2C brands',
			'hospitals'     => 'Digital marketing for doctors',
		),
		'schools'       => array(
			'd2c-ecommerce' => 'E-commerce marketing agency',
			'hospitals'     => 'Hospital marketing agency',
			'real-estate'   => 'Real estate marketing agency',
		),
	);

	$cards = array();
	if ( $current_industry && isset( $industry_desc[ $current_industry ] ) ) {
		$eyebrow = 'Other industries we serve';
		foreach ( $industry_desc[ $current_industry ] as $slug => $desc ) {
			if ( isset( $base[ $slug ] ) ) {
				$cards[] = $base[ $slug ] + array( 'text' => $desc );
			}
		}
	} else {
		$eyebrow = 'Industries we serve';
		foreach ( $base as $slug => $info ) {
			if ( isset( $service_desc[ $slug ] ) ) {
				$cards[] = $info + array( 'text' => $service_desc[ $slug ] );
			}
		}
	}

	if ( ! $cards ) {
		return;
	}

	$cols = ( count( $cards ) >= 4 ) ? 'sm:grid-cols-2 lg:grid-cols-4' : 'sm:grid-cols-3';
	?>
	<section class="pb-4 sm:pb-6" aria-label="<?php echo esc_attr( $eyebrow ); ?>">
		<div class="mx-auto max-w-7xl px-4 sm:px-6">
			<p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( $eyebrow ); ?></p>
			<div class="grid <?php echo esc_attr( $cols ); ?> gap-4">
				<?php foreach ( $cards as $bx_i => $bx_c ) : ?>
				<a href="<?php echo esc_url( $bx_c['url'] ); ?>" class="reveal lift group rounded-2xl border border-line p-6 flex items-center gap-4"<?php echo $bx_i ? ' data-delay="' . (int) $bx_i . '"' : ''; ?>>
					<span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="<?php echo esc_attr( $bx_c['icon'] ); ?>" aria-hidden="true"></iconify-icon></span>
					<span class="flex-1"><span class="font-display tt block"><?php echo esc_html( $bx_c['title'] ); ?></span><span class="text-xs text-ink-soft"><?php echo esc_html( $bx_c['text'] ); ?></span></span>
					<iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php
}
