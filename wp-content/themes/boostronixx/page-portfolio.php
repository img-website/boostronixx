<?php
/**
 * Template Name: Portfolio
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- ===================== HERO ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:-30px;left:-50px"></span>
        <span class="orb orb-b" style="width:260px;height:260px;background:#ffc59e;bottom:-50px;right:8%"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Portfolio</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-8 items-end">
            <div class="lg:col-span-8">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <span class="live inline-block h-2 w-2 rounded-full bg-accent"></span> 100+ projects shipped · 15+ industries
              </div>
              <h1 class="reveal font-display text-[2.7rem] leading-[0.95] sm:text-7xl lg:text-[5rem] tt">
                Proof, not<br class="hidden sm:block" />
                promises<span class="text-accent">.</span>
              </h1>
            </div>
            <div class="lg:col-span-4">
              <p class="reveal text-ink-soft leading-relaxed" data-delay="1">
                Branding and digital marketing work, SaaS product design, apps and
                growth campaigns — a look at what we've built from our Jaipur studio
                for ambitious brands across India and beyond.
              </p>
              <a href="#projects" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-6 font-medium" data-delay="2">
                <span class="relative z-10 sheen-text">Jump to the work</span>
                <iconify-icon icon="lucide:arrow-down" class="relative z-10"></iconify-icon>
              </a>
            </div>
          </div>

          <!-- stat band -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px mt-12 rounded-2xl overflow-hidden border border-line bg-line" data-delay="2">
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="50">0</span>+</p><p class="text-ink-soft text-sm mt-1">Brands transformed</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="100">0</span>+</p><p class="text-ink-soft text-sm mt-1">Projects delivered</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="15">0</span>+</p><p class="text-ink-soft text-sm mt-1">Industries served</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl sm:text-5xl tt"><span class="count" data-to="98">0</span>%</p><p class="text-ink-soft text-sm mt-1">Client satisfaction</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== CATEGORY MARQUEE ===================== -->
      <section class="py-5 border-y border-line bg-surface overflow-hidden">
        <div class="marquee text-ink/25">
          <div class="flex items-center gap-10 pr-10 font-display text-lg tt">
            <span>Brand Identity</span><span class="text-accent">✶</span><span>SaaS Product Design</span><span class="text-accent">✶</span><span>Mobile Apps</span><span class="text-accent">✶</span><span>UI / UX</span><span class="text-accent">✶</span><span>Web Design</span><span class="text-accent">✶</span><span>Digital Marketing</span><span class="text-accent">✶</span>
          </div>
          <div class="flex items-center gap-10 pr-10 font-display text-lg tt" aria-hidden="true">
            <span>Brand Identity</span><span class="text-accent">✶</span><span>SaaS Product Design</span><span class="text-accent">✶</span><span>Mobile Apps</span><span class="text-accent">✶</span><span>UI / UX</span><span class="text-accent">✶</span><span>Web Design</span><span class="text-accent">✶</span><span>Digital Marketing</span><span class="text-accent">✶</span>
          </div>
        </div>
      </section>

      <!-- ===================== WORK GRID (3:4 cards, 2 per row) ===================== -->
      <section id="projects" class="py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10 sm:mb-14">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Selected work</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Case studies from our Jaipur studio</h2>
            <p class="reveal text-ink-soft mt-4 leading-relaxed" data-delay="1">A closer look at the brands we&rsquo;ve shaped end to end &mdash; strategy, design and build, from first sketch to live.</p>
          </div>
          <?php
          $bx_pf = array(
            'freshee' => array(
              'title' => 'Freshee',
              'cat'   => 'D2C E-commerce',
              'desc'  => 'Organic quick-commerce grocery &mdash; brand identity, app UI/UX and D2C storefront.',
              'year'  => '2025',
              'alt'   => 'Freshee organic quick-commerce grocery — case study cover',
            ),
            'mount-litera-zee-school' => array(
              'title' => 'Mount Litera Zee School',
              'cat'   => 'Education',
              'desc'  => 'A warm, admissions-focused CBSE school website, branding and SEO.',
              'year'  => '2025',
              'alt'   => 'Mount Litera Zee School Alwar — school website case study cover',
            ),
          );
          $bx_kids  = get_posts( array( 'post_type' => 'page', 'post_parent' => get_the_ID(), 'post_status' => 'publish', 'orderby' => 'menu_order title', 'order' => 'ASC', 'numberposts' => -1 ) );
          $bx_cards = array();
          foreach ( $bx_kids as $bx_kid ) {
            if ( isset( $bx_pf[ $bx_kid->post_name ] ) ) {
              $bx_cards[] = array( 'id' => $bx_kid->ID, 'url' => get_permalink( $bx_kid->ID ), 'm' => $bx_pf[ $bx_kid->post_name ] );
            }
          }
          ?>
          <div class="grid sm:grid-cols-2 gap-6 lg:gap-10">
            <?php foreach ( $bx_cards as $bx_idx => $bx_c ) : $bx_m = $bx_c['m']; ?>
            <a href="<?php echo esc_url( $bx_c['url'] ); ?>" class="pcard reveal group block"<?php echo $bx_idx ? ' data-delay="1"' : ''; ?>>
              <div class="pf-media relative overflow-hidden rounded-xl2 border border-line">
                <?php bx_ph_figure( 'portfolio_card_image', 'aspect-[1069/770] bg-surface-2 mb-0', $bx_m['cat'], $bx_m['alt'], 1069, 770, $bx_c['id'] ); ?>
                <span class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-ink/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none z-[3]"></span>
                <span class="absolute top-4 left-4 z-[4] inline-flex items-center gap-1.5 rounded-full bg-paper/85 backdrop-blur-sm border border-line px-3 py-1.5 text-xs font-medium"><span class="h-1.5 w-1.5 rounded-full bg-accent"></span> <?php echo esc_html( $bx_m['cat'] ); ?></span>
                <span class="absolute top-4 right-4 z-[4] rounded-full bg-ink/65 text-paper backdrop-blur-sm px-3 py-1.5 text-xs font-medium"><?php echo esc_html( $bx_m['year'] ); ?></span>
              </div>
              <div class="flex items-start justify-between gap-4 mt-6">
                <div>
                  <h3 class="font-display text-2xl sm:text-3xl tt group-hover:text-accent transition"><?php echo esc_html( $bx_m['title'] ); ?></h3>
                  <p class="text-ink-soft mt-2 leading-relaxed max-w-sm"><?php echo wp_kses_post( $bx_m['desc'] ); ?></p>
                  <span class="inline-flex items-center gap-1.5 mt-4 text-sm font-medium text-ink group-hover:text-accent transition">View case study <iconify-icon icon="lucide:arrow-right" class="transition-transform group-hover:translate-x-1"></iconify-icon></span>
                </div>
                <span class="parrow shrink-0 grid place-items-center h-12 w-12 rounded-full border border-line"><iconify-icon icon="lucide:arrow-up-right" class="text-lg"></iconify-icon></span>
              </div>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- ===================== CAPABILITIES ===================== -->
      <section class="py-16 sm:py-20 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">What's inside every project</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">From first sketch to live and growing</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl bg-paper border border-line p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:search-check"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Research</h3><p class="text-ink-soft text-sm mt-1.5">Audience, market and competitor deep-dives.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Design</h3><p class="text-ink-soft text-sm mt-1.5">Identity, UI/UX and design systems that scale.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:code-2"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Build</h3><p class="text-ink-soft text-sm mt-1.5">Fast, responsive websites and product front-ends.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:trending-up"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Grow</h3><p class="text-ink-soft text-sm mt-1.5">SEO, social and ads that compound results.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== CTA ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="absolute right-6 top-6 sm:right-12 sm:top-12 h-24 w-24 spin hidden sm:block">
              <svg viewBox="0 0 100 100" class="w-full h-full"><defs><path id="c2" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs><text font-size="10.5" font-family="Bricolage Grotesque" fill="#fff" letter-spacing="2"><textPath href="#c2">YOUR PROJECT NEXT · LET'S BUILD ·</textPath></text></svg>
              <span class="absolute inset-0 grid place-items-center text-accent text-lg"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
            </div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-6xl tt leading-[1.02]">Want to be our next case study?</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us what you're building. We'll bring the strategy, the design and the growth to make it impossible to ignore.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Start your project</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="/services/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">See our services</span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'portfolio_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/portfolio-cta-image.avif', false, 'BoostronixX portfolio and creative work', 420, 525 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
