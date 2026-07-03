<?php
/**
 * Template Name: UI/UX Design
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- HERO: wireframe -> hifi -->
      <section class="relative pt-24 sm:pt-28 pb-14 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/services/" class="hover:text-accent">Services</a><iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">UI/UX Design</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:figma" class="text-accent text-sm"></iconify-icon> <?php echo esc_html( bx_field( 'ui_ux_design_hero_badge', false, 'Research-led product & interface design' ) ); ?></div>
              <h1 class="reveal font-display text-[2.5rem] leading-[1.0] sm:text-6xl tt"><?php echo esc_html( bx_field( 'ui_ux_design_hero_heading_a', false, 'Interfaces people ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'ui_ux_design_hero_heading_accent', false, 'love' ) ); ?></span><?php echo esc_html( bx_field( 'ui_ux_design_hero_heading_b', false, ' to use' ) ); ?></h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'ui_ux_design_hero_text', false, 'As a UI/UX design agency in Jaipur, we take you from wireframes to polished, accessible UI and scalable design systems — products that feel obvious, look beautiful and convert.' ) ); ?></p>
              <?php
              $uiux_hero_cta1 = get_field( 'ui_ux_design_hero_cta_primary' );
              $uiux_hero_cta1_url   = is_array( $uiux_hero_cta1 ) && ! empty( $uiux_hero_cta1['url'] ) ? $uiux_hero_cta1['url'] : '/contact-us/';
              $uiux_hero_cta1_label = is_array( $uiux_hero_cta1 ) && ! empty( $uiux_hero_cta1['title'] ) ? $uiux_hero_cta1['title'] : 'Design my product';
              $uiux_hero_cta2 = get_field( 'ui_ux_design_hero_cta_secondary' );
              $uiux_hero_cta2_url   = is_array( $uiux_hero_cta2 ) && ! empty( $uiux_hero_cta2['url'] ) ? $uiux_hero_cta2['url'] : '#process';
              $uiux_hero_cta2_label = is_array( $uiux_hero_cta2 ) && ! empty( $uiux_hero_cta2['title'] ) ? $uiux_hero_cta2['title'] : 'Our design process';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $uiux_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $uiux_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $uiux_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:route" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $uiux_hero_cta2_label ); ?></span></a>
              </div>
              <p class="reveal text-xs text-ink-soft mt-5" data-delay="3"><iconify-icon icon="lucide:hand-pointer" class="text-accent"></iconify-icon> <?php echo esc_html( bx_field( 'ui_ux_design_hero_tip', false, 'Tip: tap the mockup to toggle wireframe ↔ final UI.' ) ); ?></p>
            </div>
            <!-- STAGE: wf/hf -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div id="stage" class="stage bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-5 sm:p-7 relative select-none">
                <div class="flex items-center justify-between mb-4"><span class="text-xs tracking-[.2em] uppercase text-ink-soft">Checkout screen</span><span class="text-xs text-ink-soft inline-flex items-center gap-1"><span class="h-2 w-2 rounded-full bg-accent"></span> <span id="stageLabel">Final UI</span></span></div>
                <div class="relative h-[300px]">
                  <!-- wireframe -->
                  <div class="wf absolute inset-0">
                    <div class="space-y-3">
                      <div class="h-8 w-2/3 rounded bg-surface-2 border border-dashed border-line"></div>
                      <div class="grid grid-cols-2 gap-3"><div class="h-20 rounded bg-surface-2 border border-dashed border-line"></div><div class="h-20 rounded bg-surface-2 border border-dashed border-line"></div></div>
                      <div class="h-4 w-1/2 rounded bg-surface-2 border border-dashed border-line"></div>
                      <div class="h-4 w-3/4 rounded bg-surface-2 border border-dashed border-line"></div>
                      <div class="h-11 w-full rounded bg-surface-2 border border-dashed border-line grid place-items-center text-xs text-ink-soft">[ button ]</div>
                    </div>
                  </div>
                  <!-- hi-fi -->
                  <div class="hf absolute inset-0">
                    <div class="space-y-3">
                      <p class="font-display text-2xl tt">Complete your order</p>
                      <div class="grid grid-cols-2 gap-3">
                        <div class="rounded-xl border border-line p-3"><div class="h-10 rounded-lg bg-gradient-to-br from-accent/30 to-accent/10"></div><p class="text-xs mt-2 font-medium">Premium plan</p><p class="text-[11px] text-ink-soft">₹2,499 / mo</p></div>
                        <div class="rounded-xl border border-accent bg-accent/5 p-3"><div class="h-10 rounded-lg bg-gradient-to-br from-ink/80 to-ink/40"></div><p class="text-xs mt-2 font-medium">Annual <span class="text-accent">−20%</span></p><p class="text-[11px] text-ink-soft">₹1,999 / mo</p></div>
                      </div>
                      <div class="flex items-center justify-between text-sm"><span class="text-ink-soft">Total</span><span class="font-display tt text-lg">₹23,988</span></div>
                      <div class="rounded-full bg-ink text-paper text-center text-sm font-medium py-3">Pay securely</div>
                      <p class="text-[11px] text-ink-soft text-center inline-flex items-center justify-center gap-1 w-full"><iconify-icon icon="lucide:lock" class="text-accent"></iconify-icon> 256-bit encrypted</p>
                    </div>
                  </div>
                  <span class="uicursor absolute bottom-6 right-10 text-ink text-xl pointer-events-none"><iconify-icon icon="lucide:mouse-pointer-2"></iconify-icon></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- WHAT WE DESIGN -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'ui_ux_design_what_eyebrow', false, 'What we design' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'ui_ux_design_what_heading', false, 'What our UI/UX design agency in Jaipur ships' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php bx_ui_ux_design_render_what(); ?>
          </div>
        </div>
      </section>

      <!-- DESIGN SYSTEM SHOWCASE -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'ui_ux_design_system_eyebrow', false, 'A system, not just screens' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'ui_ux_design_system_heading', false, 'Why teams pick our UX design company in Jaipur' ) ); ?></h2></div>
          <div class="grid lg:grid-cols-3 gap-5">
            <!-- color tokens -->
            <div class="reveal rounded-xl2 bg-paper border border-line p-6">
              <p class="text-xs tracking-[.2em] uppercase text-ink-soft mb-4">Colour tokens</p>
              <div class="grid grid-cols-4 gap-2">
                <div class="token rounded-xl aspect-square" style="background:#fa5539"></div>
                <div class="token rounded-xl aspect-square" style="background:#0a0a0a"></div>
                <div class="token rounded-xl aspect-square" style="background:#4a463f"></div>
                <div class="token rounded-xl aspect-square border border-line" style="background:#f6f4f1"></div>
                <div class="token rounded-xl aspect-square" style="background:#2e7d5b"></div>
                <div class="token rounded-xl aspect-square" style="background:#e6e1da"></div>
                <div class="token rounded-xl aspect-square" style="background:#ffb38a"></div>
                <div class="token rounded-xl aspect-square border border-line" style="background:#ffffff"></div>
              </div>
            </div>
            <!-- type scale -->
            <div class="reveal rounded-xl2 bg-paper border border-line p-6" data-delay="1">
              <p class="text-xs tracking-[.2em] uppercase text-ink-soft mb-4">Type scale</p>
              <div class="space-y-1.5">
                <p class="font-display text-3xl tt leading-none">Display</p>
                <p class="font-display text-xl tt">Heading</p>
                <p class="text-base">Body text for clarity</p>
                <p class="text-xs tracking-[.2em] uppercase text-ink-soft">Caption / label</p>
              </div>
            </div>
            <!-- components -->
            <div class="reveal rounded-xl2 bg-paper border border-line p-6" data-delay="2">
              <p class="text-xs tracking-[.2em] uppercase text-ink-soft mb-4">Components</p>
              <div class="space-y-3">
                <div class="flex gap-2"><span class="rounded-full bg-ink text-paper text-xs px-3 py-1.5">Primary</span><span class="rounded-full border border-line text-xs px-3 py-1.5">Secondary</span></div>
                <div class="rounded-lg border border-line px-3 py-2 text-xs text-ink-soft flex items-center gap-2"><iconify-icon icon="lucide:mail"></iconify-icon> input field</div>
                <div class="flex items-center gap-2"><span class="h-5 w-9 rounded-full bg-accent relative"><span class="absolute right-0.5 top-0.5 h-4 w-4 rounded-full bg-white"></span></span><span class="text-xs text-ink-soft">toggle</span></div>
                <div class="flex gap-1.5"><span class="rounded-md bg-accent/10 text-accent text-[10px] px-2 py-1">badge</span><span class="rounded-md bg-surface text-[10px] px-2 py-1 border border-line">chip</span></div>
              </div>
            </div>
          </div>
          <!-- IMAGE PLACEHOLDER -->
          <figure class="imgph rounded-xl2 aspect-[16/7] bg-surface-2 border border-line mt-12 reveal">
            <img width="1230" height="537" src="<?php echo esc_url( bx_img_url( 'ui_ux_design_system_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/ui-screens.avif' ) ); ?>" alt="<?php echo esc_attr( bx_field( 'ui_ux_design_system_image_alt', false, 'A set of polished BoostronixX UI/UX product screens and components' ) ); ?>" loading="lazy" onerror="this.remove()" />
            <figcaption class="lbl"><b><?php echo esc_html( bx_field( 'ui_ux_design_system_image_caption', false, 'UI screens · 1600×700' ) ); ?></b><span><?php echo esc_html( bx_field( 'ui_ux_design_system_image_caption2', false, 'Mockup of real product screens / a Figma design-system board — showing components, app screens and prototypes.' ) ); ?></span></figcaption>
          </figure>
        </div>
      </section>

      <!-- PROCESS -->
      <section id="process" class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-14"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'ui_ux_design_process_eyebrow', false, 'How we design' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'ui_ux_design_process_heading', false, 'Five steps to a product that works' ) ); ?></h2></div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
            <?php bx_ui_ux_design_render_process(); ?>
          </div>
          <div class="reveal mt-8 rounded-2xl border border-line bg-surface p-6 flex flex-col sm:flex-row sm:items-center gap-5" data-delay="1">
            <span class="grid place-items-center h-14 w-14 rounded-full bg-ink text-paper shrink-0"><iconify-icon icon="lucide:badge-check" class="text-2xl text-accent"></iconify-icon></span>
            <div class="flex-1"><p class="font-display tt text-lg"><?php echo esc_html( bx_field( 'ui_ux_design_process_callout_heading', false, 'Designed by the BoostronixX product team' ) ); ?></p><p class="text-ink-soft text-sm mt-1"><?php echo esc_html( bx_field( 'ui_ux_design_process_callout_text', false, 'a senior team with deep SaaS product design experience in Jaipur, app design and D2C — the UI/UX design agency in Jaipur teams trust for accessibility-minded, developer-friendly handoff every time.' ) ); ?></p></div>
            <a href="<?php echo esc_url( bx_field( 'ui_ux_design_process_callout_link_url', false, '/edoovi-erp/' ) ); ?>" class="text-sm font-medium text-ink hover:text-accent inline-flex items-center gap-1.5 shrink-0"><?php echo esc_html( bx_field( 'ui_ux_design_process_callout_link_text', false, 'See the Edoovi case study' ) ); ?> <iconify-icon icon="lucide:arrow-up-right"></iconify-icon></a>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-20 sm:py-28 bg-ink text-paper">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'ui_ux_design_faq_eyebrow', false, 'FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'ui_ux_design_faq_heading', false, 'Design questions' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_ui_ux_design_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- RELATED + CTA -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'ui_ux_design_related_eyebrow', false, 'Pairs well with' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_ui_ux_design_render_related(); ?>
          </div>
          <?php
          $uiux_cta_btn1 = get_field( 'ui_ux_design_cta_button_primary' );
          $uiux_cta_btn1_url   = is_array( $uiux_cta_btn1 ) && ! empty( $uiux_cta_btn1['url'] ) ? $uiux_cta_btn1['url'] : '/contact-us/';
          $uiux_cta_btn1_label = is_array( $uiux_cta_btn1 ) && ! empty( $uiux_cta_btn1['title'] ) ? $uiux_cta_btn1['title'] : 'Start a design project';
          $uiux_cta_btn2 = get_field( 'ui_ux_design_cta_button_secondary' );
          $uiux_cta_btn2_url   = is_array( $uiux_cta_btn2 ) && ! empty( $uiux_cta_btn2['url'] ) ? $uiux_cta_btn2['url'] : '/portfolio/';
          $uiux_cta_btn2_label = is_array( $uiux_cta_btn2 ) && ! empty( $uiux_cta_btn2['title'] ) ? $uiux_cta_btn2['title'] : 'See product work';
          ?>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines opacity-[0.06]"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'ui_ux_design_cta_heading', false, "Let's design something people love" ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'ui_ux_design_cta_text', false, "Show us your product or idea — we'll map the experience and a path to a beautiful, usable design." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $uiux_cta_btn1_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $uiux_cta_btn1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                <a href="<?php echo esc_url( $uiux_cta_btn2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:layout-grid" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10"><?php echo esc_html( $uiux_cta_btn2_label ); ?></span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'ui_ux_design_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/ui-ux-cta-image.avif', false, 'BoostronixX UI/UX design team in Jaipur', 420, 447 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
