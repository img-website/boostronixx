<?php
/**
 * Blog index (the WP "Posts page"). Renders the blog-listing design.
 * Set the Blog page as Settings → Reading → Posts page so /blog/ uses this and
 * posts live at /blog/{slug}/ without the page-slug rewrite clash.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$bx_paged = bx_paged();
$bx_query = new WP_Query(
	array(
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => 12,
		'paged'               => $bx_paged,
		'ignore_sticky_posts' => true,
	)
);
$bx_posts = $bx_query->posts;
// Feature the first post on page 1 only; pages 2+ show a full grid, no featured.
$bx_featured = ( 1 === $bx_paged && $bx_posts ) ? array_shift( $bx_posts ) : null;
$bx_cats     = get_categories( array( 'hide_empty' => true ) );
?>

<main id="main">
      <!-- HERO -->
      <section class="relative pt-24 sm:pt-28 pb-10 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Blog</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><span class="h-2 w-2 rounded-full bg-accent" aria-hidden="true"></span> Insights from the studio</div>
              <h1 class="reveal font-display text-[2.7rem] leading-[0.96] sm:text-7xl tt">Ideas worth<br class="hidden sm:block" /> your <span class="text-accent">time</span></h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">Practical digital marketing, SEO and branding insights from our Jaipur studio — written by the people who do the work, for people who want to grow.</p>
            </div>
          </div>
          <!-- search -->
          <div class="reveal mt-9 max-w-xl" data-delay="2">
            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <label for="blogSearch" class="sr-only">Search articles</label>
              <div class="relative">
                <iconify-icon icon="lucide:search" class="absolute left-5 top-1/2 -translate-y-1/2 text-xl text-ink-soft" aria-hidden="true"></iconify-icon>
                <input id="blogSearch" name="s" type="search" placeholder="Search articles…" class="w-full rounded-full border border-line bg-paper py-4 pr-5 text-base outline-none focus:border-accent transition" style="padding-left:3.25rem" autocomplete="off" />
              </div>
            </form>
          </div>
        </div>
      </section>

      <?php if ( $bx_featured ) : setup_postdata( $GLOBALS['post'] = $bx_featured ); // phpcs:ignore ?>
      <!-- FEATURED -->
      <section class="py-10" aria-label="Featured article">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Featured</p>
          <?php get_template_part( 'template-parts/blog-card-featured', null, array( 'grad' => bx_blog_gradient( 1 ) ) ); ?>
        </div>
      </section>
      <?php wp_reset_postdata(); endif; ?>

      <!-- FILTER + GRID -->
      <section class="py-10 sm:py-14" aria-label="All articles">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-5 mb-10">
            <h2 class="reveal font-display text-2xl sm:text-3xl tt">Latest digital marketing, SEO &amp; branding insights</h2>
            <div id="chips" class="reveal flex flex-wrap gap-2" role="group" aria-label="Filter by category" data-delay="1">
              <?php $bx_all = get_permalink( get_option( 'page_for_posts' ) ); $bx_all = $bx_all ? $bx_all : home_url( '/blog/' ); ?>
              <a href="<?php echo esc_url( $bx_all ); ?>" class="chip active rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="all" aria-pressed="true">All</a>
              <?php foreach ( $bx_cats as $bx_cat ) : ?>
              <a href="<?php echo esc_url( get_category_link( $bx_cat->term_id ) ); ?>" class="chip rounded-full border border-line px-4 py-2 text-sm font-medium" data-cat="<?php echo esc_attr( $bx_cat->slug ); ?>"><?php echo esc_html( $bx_cat->name ); ?></a>
              <?php endforeach; ?>
            </div>
          </div>

          <div id="grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <?php
            if ( $bx_posts ) :
                foreach ( $bx_posts as $i => $bx_p ) :
                    setup_postdata( $GLOBALS['post'] = $bx_p ); // phpcs:ignore
                    get_template_part( 'template-parts/blog-card', null, array( 'grad' => bx_blog_gradient( $i ) ) );
                endforeach;
                wp_reset_postdata();
            elseif ( ! $bx_featured ) :
                ?>
            <p class="text-ink-soft">No articles published yet.</p>
            <?php endif; ?>
          </div>

          <?php bx_pagination( $bx_query ); ?>

          <!-- empty -->
          <div id="blogEmpty" class="hidden text-center py-16" role="status">
            <span class="text-4xl text-ink-soft" aria-hidden="true"><iconify-icon icon="lucide:search-x"></iconify-icon></span>
            <p class="font-display text-xl tt mt-4">No articles match</p>
            <p class="text-ink-soft text-sm mt-1">Try a different keyword or category.</p>
          </div>
        </div>
      </section>

      <!-- NEWSLETTER -->
      <section class="py-16 sm:py-24" aria-label="Newsletter">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-12 py-12 sm:py-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]" aria-hidden="true"></div>
            <div class="relative grid lg:grid-cols-2 gap-8 items-center">
              <div>
                <h2 class="font-display text-3xl sm:text-4xl tt leading-tight">Get one useful idea, every week</h2>
                <p class="text-paper/70 mt-4 max-w-md">No spam, no fluff — just practical branding and growth tips you can actually use. Unsubscribe anytime.</p>
              </div>
              <form id="newsForm" class="lg:justify-self-end w-full max-w-md">
                <label for="newsEmail" class="sr-only">Email address</label>
                <div class="flex flex-col sm:flex-row gap-2">
                  <div class="relative flex-1">
                    <iconify-icon icon="lucide:mail" class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40" aria-hidden="true"></iconify-icon>
                    <input id="newsEmail" name="email" type="email" required placeholder="you@email.com" class="w-full rounded-full bg-white/5 border border-white/15 pl-11 pr-4 py-3.5 text-sm text-white placeholder-white/35 outline-none focus:border-accent transition" />
                  </div>
                  <button type="submit" class="rounded-full bg-accent text-white px-6 py-3.5 text-sm font-medium hover:bg-white hover:text-ink transition">Subscribe</button>
                </div>
                <p id="newsOk" class="hidden text-sm text-accent mt-3 items-center gap-1.5"><iconify-icon icon="lucide:check-circle" aria-hidden="true"></iconify-icon> You're in — check your inbox to confirm.</p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
