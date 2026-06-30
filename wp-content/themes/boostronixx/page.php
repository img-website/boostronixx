<?php
/**
 * Generic page fallback (used for any page without a page-{slug}.php template).
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="pt-28 sm:pt-36 pb-20">
	<div class="mx-auto max-w-3xl px-4 sm:px-6">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<h1 class="font-display text-4xl sm:text-5xl tt mb-6"><?php the_title(); ?></h1>
			<div class="prose">
				<?php the_content(); ?>
			</div>
			<?php
		endwhile;
		?>
	</div>
</main>

<?php
get_footer();
