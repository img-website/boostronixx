<?php
/**
 * Template Name: D2C E-commerce
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main">
      <article>
      <!-- ===================== HERO — the live storefront ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <a href="/industries/" class="hover:text-accent">Industries</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">D2C eCommerce</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:shopping-bag" class="text-accent text-sm" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'd2c_ecommerce_hero_badge', false, 'Industry · D2C & eCommerce' ) ); ?></div>
              <h1 class="reveal font-display text-[2.6rem] leading-[1.0] sm:text-6xl tt"><?php echo esc_html( bx_field( 'd2c_ecommerce_hero_heading_a', false, 'Turn scrolls into ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'd2c_ecommerce_hero_heading_accent', false, 'sales' ) ); ?></span><?php echo esc_html( bx_field( 'd2c_ecommerce_hero_heading_b', false, ', profitably' ) ); ?></h1>
              <p class="reveal text-ink-soft mt-6 max-w-lg leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'd2c_ecommerce_hero_text', false, 'As an ecommerce marketing agency in Jaipur, we help D2C and online brands turn the scroll into a cart, the cart into checkout, and the first order into a loyal customer — with standout branding, ROAS-driven ads and retention that compounds.' ) ); ?></p>
              <?php
              $d2c_hero_cta1 = get_field( 'd2c_ecommerce_hero_cta_primary' );
              $d2c_hero_cta1_url   = is_array( $d2c_hero_cta1 ) && ! empty( $d2c_hero_cta1['url'] ) ? $d2c_hero_cta1['url'] : '/contact-us/';
              $d2c_hero_cta1_label = is_array( $d2c_hero_cta1 ) && ! empty( $d2c_hero_cta1['title'] ) ? $d2c_hero_cta1['title'] : 'Scale my store';
              $d2c_hero_cta2 = get_field( 'd2c_ecommerce_hero_cta_secondary' );
              $d2c_hero_cta2_url   = is_array( $d2c_hero_cta2 ) && ! empty( $d2c_hero_cta2['url'] ) ? $d2c_hero_cta2['url'] : '#journey';
              $d2c_hero_cta2_label = is_array( $d2c_hero_cta2 ) && ! empty( $d2c_hero_cta2['title'] ) ? $d2c_hero_cta2['title'] : 'See the buyer journey';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $d2c_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $d2c_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="<?php echo esc_url( $d2c_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:shopping-cart" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10"><?php echo esc_html( $d2c_hero_cta2_label ); ?></span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-5 gap-y-2 mt-7 text-xs text-ink-soft" data-delay="3">
                <?php bx_d2c_ecommerce_render_hero_pills(); ?>
              </div>
            </div>

            <!-- hero visual: live STOREFRONT product card -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="relative">
                <!-- floating cart -->
                <div class="absolute -top-4 -right-3 z-20 grid place-items-center h-12 w-12 rounded-full bg-ink text-paper shadow-lg" aria-hidden="true">
                  <iconify-icon icon="lucide:shopping-cart" class="text-xl"></iconify-icon>
                  <span class="cartpulse absolute -top-1.5 -right-1.5 grid place-items-center h-6 min-w-6 px-1 rounded-full bg-accent text-paper text-xs font-bold">3</span>
                </div>
                <div class="rounded-xl2 border border-line bg-paper shadow-[0_50px_90px_-55px_rgba(10,10,10,.5)] overflow-hidden">
                  <!-- product image area -->
                  <div class="relative h-52 bg-gradient-to-br from-accent/25 via-[#ff8a5c]/15 to-surface-2 grid place-items-center">
                    <iconify-icon icon="lucide:shirt" class="text-7xl text-accent/70" aria-hidden="true"></iconify-icon>
                    <span class="absolute top-3 left-3 rounded-full bg-accent text-paper text-xs font-bold px-3 py-1">−40%</span>
                    <span class="absolute top-3 right-3 rounded-full bg-ink text-paper text-[11px] font-semibold px-3 py-1">Bestseller</span>
                    <div class="absolute bottom-3 left-3 inline-flex items-center gap-1.5 rounded-full bg-paper/90 backdrop-blur px-2.5 py-1 text-[11px] font-medium"><span class="live inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> 312 sold today</div>
                  </div>
                  <!-- product details -->
                  <div class="p-6">
                    <div class="flex items-start justify-between gap-3">
                      <div>
                        <p class="font-display text-xl tt">Folkstreet Oversized Tee</p>
                        <p class="text-xs text-ink-soft mt-1 inline-flex items-center gap-1"><span class="text-accent">★★★★★</span> 4.8 · 124 reviews</p>
                      </div>
                      <div class="text-right shrink-0"><p class="font-display text-2xl tt text-accent">₹899</p><p class="text-xs text-ink-soft line-through">₹1,499</p></div>
                    </div>
                    <button class="addcart w-full mt-5 rounded-full bg-ink text-paper py-3 font-medium inline-flex items-center justify-center gap-2"><iconify-icon icon="lucide:shopping-cart" aria-hidden="true"></iconify-icon> Add to cart</button>
                    <!-- live store stats -->
                    <div class="grid grid-cols-3 gap-2 mt-5 text-center">
                      <div class="rounded-xl bg-surface p-2.5"><p class="font-display text-lg tt"><span class="count" data-to="4">0</span>.8x</p><p class="text-[10px] text-ink-soft">ROAS</p></div>
                      <div class="rounded-xl bg-surface p-2.5"><p class="font-display text-lg tt">₹<span class="count" data-to="1180">0</span></p><p class="text-[10px] text-ink-soft">AOV</p></div>
                      <div class="rounded-xl bg-surface p-2.5"><p class="font-display text-lg tt"><span class="count" data-to="42">0</span>%</p><p class="text-[10px] text-ink-soft">Repeat</p></div>
                    </div>
                  </div>
                </div>
                <p class="text-[11px] text-ink-soft mt-3 text-center">Illustrative storefront — your brand, your numbers.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== BUYER JOURNEY — order-tracking flow ===================== -->
      <section id="journey" class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden" aria-label="The buyer journey">
        <div class="absolute inset-0 grid-lines-d opacity-50" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'd2c_ecommerce_journey_eyebrow', false, 'The buyer journey' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'd2c_ecommerce_journey_heading', false, 'Track every order, from scroll to repeat' ) ); ?></h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'd2c_ecommerce_journey_text', false, "As an ecommerce marketing agency in Jaipur, we engineer the whole journey like an order you can track — and we don't stop at the first sale. The real profit is in the second, third and tenth order." ) ); ?></p>
          </div>

          <!-- order tracker -->
          <div class="reveal overflow-x-auto pb-2 -mx-4 px-4 sm:mx-0 sm:px-0" data-delay="1">
            <div class="min-w-[720px]">
              <!-- progress rail -->
              <div class="relative h-1.5 rounded-full bg-white/12 mx-6">
                <div class="track-fill absolute left-0 top-0 h-full rounded-full bg-accent" style="--w:100%"></div>
              </div>
              <div class="grid grid-cols-5 gap-3 -mt-4">
                <div class="tnode t1 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:eye" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Discover</p><p class="text-[11px] text-paper/50 mt-1">Scroll-stopping creative</p>
                </div>
                <div class="tnode t2 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:shopping-cart" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Add to cart</p><p class="text-[11px] text-paper/50 mt-1">Rich PDPs &amp; offers</p>
                </div>
                <div class="tnode t3 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:credit-card" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Checkout</p><p class="text-[11px] text-paper/50 mt-1">CRO that recovers carts</p>
                </div>
                <div class="tnode t4 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:truck" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Delivered</p><p class="text-[11px] text-paper/50 mt-1">A wow unboxing moment</p>
                </div>
                <div class="tnode t5 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border-4 border-ink text-paper text-xl"><iconify-icon icon="lucide:repeat" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Repeat</p><p class="text-[11px] text-paper/50 mt-1">Email, WhatsApp &amp; loyalty</p>
                </div>
              </div>
            </div>
          </div>
          <p class="reveal text-xs text-paper/40 mt-6" data-delay="2"><?php echo esc_html( bx_field( 'd2c_ecommerce_journey_footnote', false, "Lower CAC at the top, higher AOV in the middle, more repeat at the end — that's how ROAS holds as you scale." ) ); ?></p>
        </div>
      </section>

      <!-- ===================== CATEGORIES — storefront aisle ===================== -->
      <section class="py-20 sm:py-28" aria-label="Brands we help">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'd2c_ecommerce_categories_eyebrow', false, 'Shop by category' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'd2c_ecommerce_categories_heading', false, 'An ecommerce marketing agency in Jaipur built for every kind of online brand' ) ); ?></h2>
          </div>
          <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <?php bx_d2c_ecommerce_render_categories(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== GROWTH CART — services as a cart ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="What's in your growth cart">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-start">
          <div class="lg:col-span-4 lg:sticky lg:top-28">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'd2c_ecommerce_cart_eyebrow', false, 'Your growth cart' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'd2c_ecommerce_cart_heading', false, 'Everything your store needs, in one cart' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'd2c_ecommerce_cart_text', false, 'As a D2C marketing agency in Jaipur, we let you add the capabilities that scale you profitably — tap any line for the service behind it. Checkout = a growth team that pays for itself.' ) ); ?></p>
            <div class="reveal mt-6 inline-flex items-center gap-2 rounded-full bg-paper border border-line px-4 py-2 text-sm" data-delay="2"><iconify-icon icon="lucide:badge-indian-rupee" class="text-accent" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'd2c_ecommerce_cart_pill', false, 'Priced on profit, not vanity' ) ); ?></div>
          </div>
          <!-- the cart -->
          <div class="lg:col-span-8 reveal" data-delay="1">
            <div class="rounded-xl2 bg-paper border border-line overflow-hidden">
              <div class="flex items-center justify-between px-6 py-4 border-b border-line">
                <div class="flex items-center gap-2"><iconify-icon icon="lucide:shopping-cart" class="text-accent text-xl" aria-hidden="true"></iconify-icon><p class="font-display tt">Growth cart</p></div>
                <span class="text-xs text-ink-soft">6 items</span>
              </div>
              <div class="divide-y divide-line">
                <?php bx_d2c_ecommerce_render_cart_items(); ?>
              </div>
              <?php
              $d2c_cart_checkout = get_field( 'd2c_ecommerce_cart_checkout' );
              $d2c_cart_checkout_url   = is_array( $d2c_cart_checkout ) && ! empty( $d2c_cart_checkout['url'] ) ? $d2c_cart_checkout['url'] : '/contact-us/';
              $d2c_cart_checkout_label = is_array( $d2c_cart_checkout ) && ! empty( $d2c_cart_checkout['title'] ) ? $d2c_cart_checkout['title'] : 'Checkout';
              ?>
              <div class="flex items-center justify-between gap-4 px-6 py-5 bg-ink text-paper">
                <div><p class="text-[11px] text-paper/50 uppercase tracking-wide"><?php echo esc_html( bx_field( 'd2c_ecommerce_cart_subtotal_label', false, 'Subtotal' ) ); ?></p><p class="font-display text-lg tt"><?php echo esc_html( bx_field( 'd2c_ecommerce_cart_subtotal_value', false, 'Profitable, compounding growth' ) ); ?></p></div>
                <a href="<?php echo esc_url( $d2c_cart_checkout_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-6 py-3 font-medium shrink-0"><span class="sheen-text-light"><?php echo esc_html( $d2c_cart_checkout_label ); ?></span><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PROOF — reviews wall ===================== -->
      <section class="py-20 sm:py-28" aria-label="Results and reviews">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-12">
            <div>
              <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'd2c_ecommerce_proof_eyebrow', false, '★ 4.8 average' ) ); ?></p>
              <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'd2c_ecommerce_proof_heading', false, "Reviews don't lie" ) ); ?></h2>
            </div>
            <p class="reveal text-ink-soft max-w-sm text-sm" data-delay="1">Online store marketing in Jaipur done right: scroll-stopping creative and retention flows that lifted revenue <strong class="text-ink">+156%</strong> while holding ROAS — growth that actually compounds.</p>
          </div>
          <!-- reviews -->
          <div class="grid sm:grid-cols-3 gap-5 mb-6">
            <div class="rev r1 rounded-xl2 border border-line bg-paper p-6"><div class="flex items-center justify-between"><span class="text-accent">★★★★★</span><iconify-icon icon="lucide:badge-check" class="text-accent" aria-hidden="true"></iconify-icon></div><p class="mt-3 leading-snug">"ROAS held at 4.8x while we doubled spend. Repeat orders finally took off."</p><div class="mt-4 flex items-center gap-2.5"><span class="grid place-items-center h-9 w-9 rounded-full bg-surface text-accent font-display" aria-hidden="true">R</span><span class="text-xs"><span class="block font-medium">Riya Malhotra</span><span class="block text-ink-soft">Founder · apparel · Verified</span></span></div></div>
            <div class="rev r2 rounded-xl2 border border-line bg-paper p-6"><div class="flex items-center justify-between"><span class="text-accent">★★★★★</span><iconify-icon icon="lucide:badge-check" class="text-accent" aria-hidden="true"></iconify-icon></div><p class="mt-3 leading-snug">"Our AOV jumped 28% with their bundles and PDP work. Checkout finally converts."</p><div class="mt-4 flex items-center gap-2.5"><span class="grid place-items-center h-9 w-9 rounded-full bg-surface text-accent font-display" aria-hidden="true">A</span><span class="text-xs"><span class="block font-medium">Arjun Sethi</span><span class="block text-ink-soft">Founder · skincare · Verified</span></span></div></div>
            <div class="rev r3 rounded-xl2 border border-line bg-paper p-6"><div class="flex items-center justify-between"><span class="text-accent">★★★★★</span><iconify-icon icon="lucide:badge-check" class="text-accent" aria-hidden="true"></iconify-icon></div><p class="mt-3 leading-snug">"The UGC engine they built keeps our ads fresh — CAC dropped and stayed down."</p><div class="mt-4 flex items-center gap-2.5"><span class="grid place-items-center h-9 w-9 rounded-full bg-surface text-accent font-display" aria-hidden="true">N</span><span class="text-xs"><span class="block font-medium">Neha Gupta</span><span class="block text-ink-soft">Founder · foods · Verified</span></span></div></div>
          </div>
          <!-- stat band -->
          <div class="reveal grid grid-cols-2 lg:grid-cols-4 gap-px rounded-2xl overflow-hidden border border-line bg-line" data-delay="1">
            <div class="bg-paper p-6"><p class="font-display text-4xl tt text-accent">+<span class="count" data-to="156">0</span>%</p><p class="text-ink-soft text-sm mt-1">revenue</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl tt"><span class="count" data-to="4">0</span>.8x</p><p class="text-ink-soft text-sm mt-1">blended ROAS</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl tt">₹<span class="count" data-to="1180">0</span></p><p class="text-ink-soft text-sm mt-1">avg. order value</p></div>
            <div class="bg-paper p-6"><p class="font-display text-4xl tt"><span class="count" data-to="42">0</span>%</p><p class="text-ink-soft text-sm mt-1">repeat rate</p></div>
          </div>
          <p class="reveal text-[11px] text-ink-soft mt-5 text-center" data-delay="1">Illustrative — results vary by category, margins and pricing.</p>
        </div>
      </section>

      <!-- ===================== SHOPPERS ASK AI ===================== -->
      <section id="ai-search" class="py-20 sm:py-28 bg-surface border-y border-line" aria-labelledby="aiHeading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <div class="lg:col-span-6">
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'd2c_ecommerce_ai_eyebrow', false, 'AEO · GEO · AI Shopping' ) ); ?></p>
            <h2 id="aiHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'd2c_ecommerce_ai_heading', false, 'Shoppers ask AI what to buy' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">More shoppers ask ChatGPT, Perplexity or Google's AI Overview for the best brand in a category and budget. We make sure that when they do, <strong class="text-ink">your brand is recommended — named, cited and reviewed.</strong></p>
            <ul class="reveal space-y-2 mt-6 text-sm" data-delay="2">
              <?php
              foreach ( bx_lines( bx_field( 'd2c_ecommerce_ai_points', false, "Answer-ready content for \"best [product]\" queries\nProduct schema & reviews AI tools can cite\nA reputation that wins the comparison" ) ) as $d2c_ai_point ) {
                  echo '<li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> ' . esc_html( $d2c_ai_point ) . '</li>';
              }
              ?>
            </ul>
            <?php
            $d2c_ai_btn = get_field( 'd2c_ecommerce_ai_button' );
            $d2c_ai_btn_url   = is_array( $d2c_ai_btn ) && ! empty( $d2c_ai_btn['url'] ) ? $d2c_ai_btn['url'] : '/seo-services/#aeo-geo';
            $d2c_ai_btn_label = is_array( $d2c_ai_btn ) && ! empty( $d2c_ai_btn['title'] ) ? $d2c_ai_btn['title'] : 'How AEO & GEO works';
            ?>
            <a href="<?php echo esc_url( $d2c_ai_btn_url ); ?>" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-7 font-medium" data-delay="3"><span class="relative z-10 sheen-text"><?php echo esc_html( $d2c_ai_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
          </div>
          <!-- AI shopping assistant -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <div class="rounded-xl2 bg-[#141414] border border-white/10 p-5 sm:p-6">
              <div class="flex items-center gap-2 pb-4 border-b border-white/10">
                <span class="grid place-items-center h-8 w-8 rounded-full bg-accent text-paper" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <p class="text-sm font-medium text-paper">AI Shopping Assistant</p>
                <span class="ml-auto inline-flex items-center gap-1.5 rounded-full bg-white/8 px-2.5 py-1 text-[10px] text-paper/60"><span class="h-1.5 w-1.5 rounded-full bg-accent" aria-hidden="true"></span> live</span>
              </div>
              <div class="mt-4 flex justify-end"><p class="max-w-[82%] rounded-2xl rounded-br-md bg-white/10 text-paper text-sm px-4 py-3">Best Indian activewear brand under ₹2,000?</p></div>
              <div class="mt-4 flex gap-2.5">
                <span class="grid place-items-center h-7 w-7 rounded-full bg-accent text-paper text-xs shrink-0" aria-hidden="true"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                <div class="flex-1">
                  <p class="text-sm text-paper/85 leading-relaxed">I'd go with <strong class="text-accent">Folkstreet</strong> — great reviews, free returns and pieces under ₹2,000<span class="caret" aria-hidden="true"></span></p>
                  <!-- recommended product card -->
                  <div class="mt-3 rounded-xl bg-white/5 border border-white/10 p-3 flex items-center gap-3">
                    <span class="grid place-items-center h-12 w-12 rounded-lg bg-gradient-to-br from-accent/40 to-white/5 text-accent shrink-0" aria-hidden="true"><iconify-icon icon="lucide:shirt" class="text-xl"></iconify-icon></span>
                    <div class="flex-1 min-w-0"><p class="text-sm font-medium text-paper truncate">Folkstreet Oversized Tee</p><p class="text-[11px] text-paper/60"><span class="text-accent">★ 4.8</span> · ₹899 · Free returns</p></div>
                    <a href="/contact-us/" class="rounded-full bg-accent text-paper text-[11px] font-semibold px-3 py-1.5 shrink-0">Shop</a>
                  </div>
                  <a href="/contact-us/" class="mt-3 inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent text-xs font-medium px-2.5 py-1 hover:bg-accent hover:text-paper transition"><iconify-icon icon="lucide:link" class="text-[11px]" aria-hidden="true"></iconify-icon> your-store.com <span class="opacity-70">[1]</span></a>
                </div>
              </div>
              <div class="mt-5 flex items-center justify-center gap-1.5 rounded-full bg-accent text-paper text-xs font-semibold py-2"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Your brand, recommended by AI</div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ (shared design) ===================== -->
      <section class="py-20 sm:py-28" aria-label="Frequently asked questions">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'd2c_ecommerce_faq_eyebrow', false, 'D2C & eCommerce FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'd2c_ecommerce_faq_heading', false, 'Your questions, answered' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_d2c_ecommerce_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA (shared design) ===================== -->
      <section class="pb-20 sm:pb-28 pt-4" aria-label="Related and contact">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'd2c_ecommerce_related_eyebrow', false, 'Explore more' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_d2c_ecommerce_render_related(); ?>
          </div>
          <?php
          $d2c_cta_btn = get_field( 'd2c_ecommerce_cta_button' );
          $d2c_cta_btn_url   = is_array( $d2c_cta_btn ) && ! empty( $d2c_cta_btn['url'] ) ? $d2c_cta_btn['url'] : '/contact-us/';
          $d2c_cta_btn_label = is_array( $d2c_cta_btn ) && ! empty( $d2c_cta_btn['title'] ) ? $d2c_cta_btn['title'] : 'Scale my store';
          ?>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-60" aria-hidden="true"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'd2c_ecommerce_cta_heading', false, "Let's scale your store profitably" ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'd2c_ecommerce_cta_text', false, "Tell us about your brand — we'll map a plan to grow orders, ROAS and repeat customers. Free, no obligation." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $d2c_cta_btn_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $d2c_cta_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="<?php echo esc_url( bx_field( 'd2c_ecommerce_cta_phone_href', false, 'tel:+918058212202' ) ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10"><?php echo esc_html( bx_field( 'd2c_ecommerce_cta_phone', false, '+91 80582 12202' ) ); ?></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      </article>
    </main>

<?php
get_footer();
