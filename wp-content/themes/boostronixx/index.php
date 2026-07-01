<?php
/**
 * Fallback template (required by WordPress). Used for the posts index / archives
 * until a dedicated blog/archive template is built.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="pt-24 sm:pt-28 pb-20">
	<div class="mx-auto max-w-5xl px-4 sm:px-6">
		<?php if ( have_posts() ) : ?>
			<div class="grid gap-10">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'border-b border-line pb-8' ); ?>>
						<h2 class="font-display text-2xl sm:text-3xl tt">
							<a href="<?php the_permalink(); ?>" class="hover:text-accent"><?php the_title(); ?></a>
						</h2>
						<div class="text-ink-soft mt-3"><?php the_excerpt(); ?></div>
					</article>
					<?php
				endwhile;
				?>
			</div>
			<?php bx_pagination(); ?>
		<?php else : ?>
			<p class="text-ink-soft">Nothing here yet.</p>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
