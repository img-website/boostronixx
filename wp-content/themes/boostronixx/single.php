<?php
/**
 * Single blog post — dynamic version of the blog-post design.
 * Body class bx-page-blog-post (see bx_body_class) so the article CSS applies.
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

while ( have_posts() ) :
	the_post();

	$bx_pc       = bx_primary_category();
	$bx_rt       = bx_reading_time();
	$bx_author   = get_the_author();
	$bx_initial  = mb_strtoupper( mb_substr( $bx_author, 0, 1 ) );
	$bx_bio      = get_the_author_meta( 'description' );
	$bx_url      = get_permalink();
	$bx_share    = rawurlencode( $bx_url );
	list( $bx_body_html, $bx_toc ) = bx_article_content( apply_filters( 'the_content', get_the_content() ) );
	?>

<main id="article">
      <!-- reading progress (fixed top bar) -->
      <div id="progressWrap"><div id="progressBar" role="progressbar" aria-label="Reading progress" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"></div></div>
      <article>
        <!-- ARTICLE HERO -->
        <header class="pt-24 sm:pt-28 pb-8 grid-lines">
          <div class="mx-auto max-w-3xl px-4 sm:px-6">
            <nav class="flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-accent">Home</a>
              <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
              <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="hover:text-accent">Blog</a>
              <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
              <span class="text-ink font-medium" aria-current="page"><?php the_title(); ?></span>
            </nav>
            <?php if ( $bx_pc ) : ?>
            <a href="<?php echo esc_url( get_category_link( $bx_pc->term_id ) ); ?>" class="inline-flex items-center gap-1.5 rounded-full bg-accent/10 text-accent text-xs font-medium px-3 py-1.5"><?php echo esc_html( $bx_pc->name ); ?></a>
            <?php endif; ?>
            <h1 class="font-display text-[2.2rem] leading-[1.05] sm:text-5xl tt mt-5"><?php the_title(); ?></h1>
            <?php if ( has_excerpt() ) : ?><p class="text-ink-soft text-lg mt-5 leading-relaxed"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>

            <!-- byline -->
            <div class="flex flex-wrap items-center gap-x-4 gap-y-3 mt-7 pt-6 border-t border-line">
              <div class="flex items-center gap-3">
                <?php echo bx_author_avatar( 'grid place-items-center h-11 w-11 rounded-full bg-ink text-paper font-display' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- helper returns escaped HTML. ?>
                <div class="text-sm leading-tight">
                  <p class="font-medium">By <?php echo esc_html( $bx_author ); ?></p>
                  <p class="text-ink-soft text-xs">BoostronixX</p>
                </div>
              </div>
              <span class="hidden sm:block h-8 w-px bg-line" aria-hidden="true"></span>
              <div class="flex items-center gap-4 text-xs text-ink-soft">
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:calendar" aria-hidden="true"></iconify-icon> <time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time></span>
                <?php if ( get_the_modified_date( 'Y-m-d' ) !== get_the_date( 'Y-m-d' ) ) : ?><span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:refresh-cw" aria-hidden="true"></iconify-icon> Updated <time datetime="<?php echo esc_attr( get_the_modified_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_modified_date( 'M j' ) ); ?></time></span><?php endif; ?>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> <?php echo (int) $bx_rt; ?> min read</span>
              </div>
              <!-- share -->
              <div class="ml-auto flex items-center gap-2" aria-label="Share this article">
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $bx_share; ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:linkedin" aria-hidden="true"></iconify-icon></a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $bx_share; ?>" target="_blank" rel="noopener" aria-label="Share on X" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:x" aria-hidden="true"></iconify-icon></a>
                <a href="https://wa.me/?text=<?php echo $bx_share; ?>" target="_blank" rel="noopener" aria-label="Share on WhatsApp" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:whatsapp" aria-hidden="true"></iconify-icon></a>
                <button id="copyLink" data-url="<?php echo esc_url( $bx_url ); ?>" aria-label="Copy link" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="lucide:link" aria-hidden="true"></iconify-icon></button>
              </div>
            </div>
          </div>
        </header>

        <?php
        // Top banner (like the live site) — a wide landscape image; falls back
        // to the featured image. The 3:4 featured image is used for the list card.
        $bx_banner_id  = function_exists( 'get_field' ) ? (int) get_field( 'banner' ) : 0;
        if ( ! $bx_banner_id ) { $bx_banner_id = (int) get_post_meta( get_the_ID(), '_bx_banner_id', true ); }
        $bx_banner_url = $bx_banner_id ? wp_get_attachment_image_url( $bx_banner_id, 'large' ) : '';
        if ( $bx_banner_url ) :
            ?>
        <!-- ARTICLE BANNER -->
        <div class="mx-auto max-w-5xl px-4 sm:px-6 mt-6">
          <img width="976" height="271" src="<?php echo esc_url( $bx_banner_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="w-full rounded-xl2" style="height:auto;max-height:520px;object-fit:cover" loading="eager" />
        </div>
        <?php endif; ?>

        <!-- BODY -->
        <div class="mx-auto max-w-7xl px-4 sm:px-6 mt-12 pb-16 sm:pb-20 grid lg:grid-cols-12 gap-10 lg:gap-14">
          <!-- TOC (desktop) -->
          <?php if ( $bx_toc ) : ?>
          <aside class="hidden lg:block lg:col-span-3">
            <div class="sticky top-28">
              <p class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft mb-3">On this page</p>
              <nav id="toc" aria-label="Table of contents" class="flex flex-col">
                <?php foreach ( $bx_toc as $bx_item ) : ?>
                <a href="#<?php echo esc_attr( $bx_item['id'] ); ?>" class="toc-link"><?php echo esc_html( $bx_item['text'] ); ?></a>
                <?php endforeach; ?>
              </nav>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-ink hover:text-accent">Need help deciding? <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></a>
            </div>
          </aside>
          <?php endif; ?>

          <!-- CONTENT -->
          <div class="<?php echo $bx_toc ? 'lg:col-span-9' : 'lg:col-span-12'; ?>">
            <div class="prose max-w-[68ch]">
              <?php echo $bx_body_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- the_content already filtered/sanitised ?>
            </div>

            <!-- TAGS -->
            <?php $bx_tags = get_the_tags(); ?>
            <?php if ( $bx_tags ) : ?>
            <div class="max-w-[68ch] mt-10 flex flex-wrap items-center gap-2">
              <span class="text-xs text-ink-soft">Tags:</span>
              <?php foreach ( $bx_tags as $bx_tag ) : ?>
              <a href="<?php echo esc_url( get_tag_link( $bx_tag->term_id ) ); ?>" class="rounded-full border border-line px-3 py-1.5 text-xs hover:border-accent hover:text-accent transition"><?php echo esc_html( $bx_tag->name ); ?></a>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- AUTHOR BIO (E-E-A-T) -->
            <div class="max-w-[68ch] mt-10 rounded-xl2 border border-line bg-surface p-6 flex flex-col sm:flex-row gap-5">
              <?php echo bx_author_avatar( 'grid place-items-center h-16 w-16 rounded-full bg-ink text-paper font-display text-2xl shrink-0' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- helper returns escaped HTML. ?>
              <div>
                <p class="font-display tt text-lg"><?php echo esc_html( $bx_author ); ?></p>
                <p class="text-accent text-sm">BoostronixX</p>
                <?php if ( $bx_bio ) : ?><p class="text-ink-soft text-sm mt-2 leading-relaxed"><?php echo esc_html( $bx_bio ); ?></p><?php endif; ?>
                <div class="flex items-center gap-3 mt-3 text-sm">
                  <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="font-medium text-ink hover:text-accent inline-flex items-center gap-1.5">More about the team <iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
        // FAQ — optional ACF repeater, renders the design's accordion + FAQPage schema.
        if ( function_exists( 'have_rows' ) && have_rows( 'f_post_faqs' ) ) :
            $bx_faq_schema = array();
            ?>
        <!-- FAQ -->
        <section id="faq" class="py-16 sm:py-20 mt-8" aria-label="Frequently asked questions">
          <div class="mx-auto max-w-3xl px-4 sm:px-6">
            <h2 class="font-display text-2xl sm:text-4xl tt text-center mb-10">Frequently asked questions</h2>
            <div class="space-y-3">
              <?php
                $bx_fi = 0;
                while ( have_rows( 'f_post_faqs' ) ) :
                    the_row();
                    $bx_q = trim( (string) get_sub_field( 'question' ) );
                    $bx_a = (string) get_sub_field( 'answer' );
                    if ( '' === $bx_q ) {
                        continue;
                    }
                    $bx_open         = ( 0 === $bx_fi );
                    $bx_faq_schema[] = array(
                        '@type'          => 'Question',
                        'name'           => wp_strip_all_tags( $bx_q ),
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text'  => wp_strip_all_tags( $bx_a ),
                        ),
                    );
                    ?>
              <div class="faq border border-line rounded-2xl px-6 group<?php echo $bx_open ? ' open' : ''; ?>">
                <button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="<?php echo $bx_open ? 'true' : 'false'; ?>"><?php echo esc_html( $bx_q ); ?><span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button>
                <div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed"><?php echo wp_kses_post( $bx_a ); ?></div></div>
              </div>
                    <?php
                    $bx_fi++;
                endwhile;
                ?>
            </div>
          </div>
        </section>
            <?php if ( $bx_faq_schema ) : ?>
        <script type="application/ld+json"><?php echo wp_json_encode( array( '@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $bx_faq_schema ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?></script>
            <?php endif; ?>
        <?php endif; ?>

        <!-- CONTACT FORM -->
        <section class="py-16 sm:py-20 bg-surface border-y border-line" aria-label="Contact us">
          <div class="mx-auto max-w-3xl px-4 sm:px-6">
            <div class="text-center mb-8">
              <p class="text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Still deciding?</p>
              <h2 class="font-display text-3xl sm:text-4xl tt leading-tight">Tell us your goal — we'll point you the right way</h2>
              <p class="text-ink-soft mt-3 max-w-md mx-auto">No pitch, no pressure. Share where you're stuck and we'll reply within 24 hours with a clear next step.</p>
            </div>
            <form id="blogContact" class="grid sm:grid-cols-2 gap-4" novalidate>
              <div class="field"><label for="bcName">Name <span class="text-accent">*</span></label><input id="bcName" name="name" type="text" required autocomplete="name" /></div>
              <div class="field"><label for="bcEmail">Email <span class="text-accent">*</span></label><input id="bcEmail" name="email" type="email" required autocomplete="email" /></div>
              <div class="field sm:col-span-2"><label for="bcMsg">What are you working on? <span class="text-accent">*</span></label><textarea id="bcMsg" name="message" rows="4" required></textarea></div>
              <div class="sm:col-span-2 flex flex-wrap items-center gap-4">
                <button id="bcSubmit" type="submit" class="group btn-glow inline-flex items-center justify-center gap-2 rounded-full px-7 py-4 font-medium min-w-[180px]"><span id="bcLabel" class="relative z-10 sheen-text inline-flex items-center gap-2">Send message <iconify-icon icon="lucide:send" class="relative z-10" aria-hidden="true"></iconify-icon></span><span id="bcSpinner" class="spinner hidden" aria-hidden="true"></span></button>
                <p class="text-xs text-ink-soft inline-flex items-center gap-1.5"><iconify-icon icon="lucide:shield-check" class="text-accent" aria-hidden="true"></iconify-icon> By submitting you agree to our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="underline underline-offset-2 decoration-accent text-ink">privacy policy</a>.</p>
              </div>
              <p id="bcError" class="sm:col-span-2 hidden text-sm text-accent font-medium" role="alert"><iconify-icon icon="lucide:alert-circle" aria-hidden="true"></iconify-icon> Please fill in all required fields correctly.</p>
            </form>
          </div>
        </section>

        <!-- RELATED -->
        <?php
        $bx_cat_ids = wp_get_post_categories( get_the_ID() );
        $bx_rel     = new WP_Query(
            array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post__not_in'   => array( get_the_ID() ),
                'category__in'   => $bx_cat_ids ? $bx_cat_ids : array(),
                'no_found_rows'  => true,
            )
        );
        if ( $bx_rel->have_posts() ) :
            $bx_relgrads = array( 'linear-gradient(135deg,#fa5539,#2e1c16)', 'linear-gradient(135deg,#0a0a0a,#3a3a3a)', 'linear-gradient(135deg,#d6457a,#fa5539)' );
            ?>
        <section class="py-16 sm:py-24" aria-label="Related articles">
          <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="flex items-end justify-between mb-8">
              <h2 class="font-display text-2xl sm:text-3xl tt">Keep reading</h2>
              <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="text-sm font-medium text-ink hover:text-accent inline-flex items-center gap-1.5">All articles <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></a>
            </div>
            <div class="grid sm:grid-cols-3 gap-6">
              <?php
                $bx_ri = 0;
                while ( $bx_rel->have_posts() ) :
                    $bx_rel->the_post();
                    $bx_rpc = bx_primary_category();
                    ?>
              <a href="<?php the_permalink(); ?>" class="relpost group block">
                <div class="relimg imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:<?php echo esc_attr( $bx_relgrads[ $bx_ri % 3 ] ); ?>" aria-hidden="true"></div><?php if ( has_post_thumbnail() ) : ?><img width="395" height="526" src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'bx-blog-cover' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy" /><?php endif; ?></div>
                <div class="mt-3"><?php if ( $bx_rpc ) : ?><span class="text-xs rounded-full bg-surface px-2.5 py-1 font-medium"><?php echo esc_html( $bx_rpc->name ); ?></span><?php endif; ?><h3 class="font-display text-lg tt mt-2 leading-snug"><?php the_title(); ?></h3><p class="text-xs text-ink-soft mt-2"><time datetime="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time> · <?php echo (int) bx_reading_time(); ?> min</p></div>
              </a>
                    <?php
                    $bx_ri++;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
          </div>
        </section>
        <?php endif; ?>
      </article>
    </main>

<!-- Sticky CTA that opens the lead modal (fades in via app.js, styles in compiled CSS) -->
<button id="bpCtaBtn" type="button" class="fixed right-4 sm:right-6 bottom-20 lg:bottom-6 z-40" aria-haspopup="dialog" aria-controls="bpModal">
	<iconify-icon icon="lucide:sparkles" class="bp-ico" aria-hidden="true"></iconify-icon>
	<span>Get a free strategy call</span>
</button>

<!-- Blog-post lead modal (styles in compiled CSS, behaviour in app.js) -->
<div id="bpModal" role="dialog" aria-modal="true" aria-labelledby="bpTitle">
	<div class="bp-bd" data-bpclose></div>
	<div class="bp-card">
		<button type="button" data-bpclose aria-label="Close" class="absolute right-4 top-4 h-9 w-9 inline-flex items-center justify-center rounded-full border border-line text-ink-soft hover:bg-surface transition">
			<iconify-icon icon="lucide:x" class="text-lg" aria-hidden="true"></iconify-icon>
		</button>
		<div>
			<p class="text-[11px] font-semibold tracking-[.18em] uppercase text-accent">Free 20-min strategy call</p>
			<h3 id="bpTitle" class="font-display text-2xl sm:text-3xl tt leading-tight mt-2">Turn this read into <span class="text-accent">real growth.</span></h3>
			<p class="text-ink-soft text-sm mt-2 leading-relaxed">Tell us where you want to go — we'll come back with quick, practical wins. No fluff, no obligation.</p>
			<form id="bpForm" class="mt-5 grid gap-4" novalidate>
				<div class="bxfld">
					<input id="bpName" name="name" type="text" placeholder=" " required />
					<label for="bpName">Full name *</label>
				</div>
				<div class="bxfld">
					<input id="bpEmail" name="email" type="email" placeholder=" " required />
					<label for="bpEmail">Email *</label>
				</div>
				<div class="bxfld">
					<input id="bpPhone" name="phone" type="tel" placeholder=" " />
					<label for="bpPhone">Phone</label>
				</div>
				<div class="bxfld">
					<textarea id="bpMsg" name="message" placeholder=" " required></textarea>
					<label for="bpMsg">What do you want to grow? *</label>
				</div>
				<label class="flex items-start gap-2 text-xs text-ink-soft cursor-pointer"><input type="checkbox" required class="mt-0.5 h-4 w-4 accent-[#fa5539]" /> I agree to be contacted about my enquiry.</label>
				<button id="bpSubmit" type="submit" class="btn-glow inline-flex items-center justify-center gap-2 rounded-full px-6 py-3.5 font-medium mt-1">
					<span id="bpBtnLabel" class="inline-flex items-center gap-2">Send &amp; get my plan <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></span>
					<span id="bpSpinner" class="spinner hidden"></span>
				</button>
			</form>
		</div>
	</div>
</div>

<?php
endwhile;
get_footer();
