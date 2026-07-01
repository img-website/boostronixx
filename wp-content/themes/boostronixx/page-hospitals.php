<?php
/**
 * Template Name: Hospitals
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
      <!-- ===================== HERO — the appointment booker ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <a href="/industries/" class="hover:text-accent">Industries</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Hospitals</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:heart-pulse" class="text-accent text-sm heartbeat-ic" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'hospitals_hero_badge', false, 'Industry · Hospitals & Healthcare' ) ); ?></div>
              <h1 class="reveal font-display text-[2.6rem] leading-[1.0] sm:text-6xl tt"><?php echo esc_html( bx_field( 'hospitals_hero_heading_a', false, 'Keep your ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'hospitals_hero_heading_accent', false, 'appointment book' ) ); ?></span><?php echo esc_html( bx_field( 'hospitals_hero_heading_b', false, ' full' ) ); ?></h1>
              <p class="reveal text-ink-soft mt-6 max-w-lg leading-relaxed" data-delay="1"><?php bx_hospitals_text( 'hospitals_hero_text', 'As a healthcare marketing agency in Jaipur, we help hospitals, clinics and doctors earn patient trust and turn "near me" searches into real enquiries and booked appointments — with credible branding, local SEO and ethical, compliant campaigns.' ); ?></p>
              <?php
              $hosp_hero_cta1 = get_field( 'hospitals_hero_cta_primary' );
              $hosp_hero_cta1_url   = is_array( $hosp_hero_cta1 ) && ! empty( $hosp_hero_cta1['url'] ) ? $hosp_hero_cta1['url'] : '/contact-us/';
              $hosp_hero_cta1_label = is_array( $hosp_hero_cta1 ) && ! empty( $hosp_hero_cta1['title'] ) ? $hosp_hero_cta1['title'] : 'Get more patients';
              $hosp_hero_cta2 = get_field( 'hospitals_hero_cta_secondary' );
              $hosp_hero_cta2_url   = is_array( $hosp_hero_cta2 ) && ! empty( $hosp_hero_cta2['url'] ) ? $hosp_hero_cta2['url'] : '#pathway';
              $hosp_hero_cta2_label = is_array( $hosp_hero_cta2 ) && ! empty( $hosp_hero_cta2['title'] ) ? $hosp_hero_cta2['title'] : 'See the care path';
              ?><div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $hosp_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $hosp_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="<?php echo esc_url( $hosp_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:activity" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10"><?php echo esc_html( $hosp_hero_cta2_label ); ?></span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-5 gap-y-2 mt-7 text-xs text-ink-soft" data-delay="3">
                <?php
                $hosp_hero_trust  = bx_lines( bx_field( 'hospitals_hero_trust', false, "NABH-minded\nEthical & compliant\nVerified doctor profiles" ) );
                $hosp_trust_icons = array( 'lucide:shield-check', 'lucide:scale', 'lucide:badge-check' );
                foreach ( $hosp_hero_trust as $hosp_ti => $hosp_trust ) {
                    $hosp_trust_icon = isset( $hosp_trust_icons[ $hosp_ti ] ) ? $hosp_trust_icons[ $hosp_ti ] : 'lucide:badge-check';
                    $hosp_trust_lead = 0 === $hosp_ti ? '' : "\n" . str_repeat( ' ', 16 );
                    echo $hosp_trust_lead . '<span class="inline-flex items-center gap-1.5"><iconify-icon icon="' . esc_attr( $hosp_trust_icon ) . '" class="text-accent" aria-hidden="true"></iconify-icon> ' . esc_html( $hosp_trust ) . '</span>';
                }
                echo "\n" . str_repeat( ' ', 14 );
                ?></div>
            </div>

            <!-- hero visual: BOOK AN APPOINTMENT widget -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="rounded-xl2 border border-line bg-paper shadow-[0_50px_90px_-55px_rgba(10,10,10,.5)] overflow-hidden">
                <div class="flex items-center justify-between px-6 py-4 border-b border-line">
                  <div class="flex items-center gap-2"><iconify-icon icon="lucide:calendar-check" class="text-accent text-xl" aria-hidden="true"></iconify-icon><p class="font-display tt">Book an appointment</p></div>
                  <span class="inline-flex items-center gap-1.5 text-xs text-ink-soft"><span class="live inline-block h-2 w-2 rounded-full bg-accent" aria-hidden="true"></span> OPD open</span>
                </div>
                <div class="p-6 space-y-5">
                  <!-- step 1: department -->
                  <div>
                    <p class="text-[11px] tracking-[.18em] uppercase text-ink-soft mb-2">1 · Department</p>
                    <div class="flex flex-wrap gap-2">
                      <span class="slot inline-flex items-center gap-1.5 rounded-full bg-accent text-paper text-xs font-medium px-3 py-1.5"><iconify-icon icon="lucide:heart-pulse" aria-hidden="true"></iconify-icon> Cardiology</span>
                      <span class="slot inline-flex items-center gap-1.5 rounded-full border border-line text-xs px-3 py-1.5"><iconify-icon icon="lucide:bone" class="text-accent" aria-hidden="true"></iconify-icon> Ortho</span>
                      <span class="slot inline-flex items-center gap-1.5 rounded-full border border-line text-xs px-3 py-1.5"><iconify-icon icon="lucide:ear" class="text-accent" aria-hidden="true"></iconify-icon> ENT</span>
                      <span class="slot inline-flex items-center gap-1.5 rounded-full border border-line text-xs px-3 py-1.5"><iconify-icon icon="lucide:eye" class="text-accent" aria-hidden="true"></iconify-icon> Eye</span>
                    </div>
                  </div>
                  <!-- step 2: doctor -->
                  <div>
                    <p class="text-[11px] tracking-[.18em] uppercase text-ink-soft mb-2">2 · Doctor</p>
                    <div class="flex items-center gap-3 rounded-xl border border-line p-3">
                      <span class="grid place-items-center h-11 w-11 rounded-full bg-gradient-to-br from-accent/25 to-surface-2 text-accent shrink-0" aria-hidden="true"><iconify-icon icon="lucide:stethoscope"></iconify-icon></span>
                      <div class="flex-1 min-w-0"><p class="text-sm font-medium truncate">Dr. A. Mehta</p><p class="text-xs text-ink-soft">Cardiologist · 12 yrs · ★ 4.9</p></div>
                      <span class="inline-flex items-center gap-1 rounded-full bg-accent/10 text-accent text-[10px] font-semibold px-2 py-1"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Verified</span>
                    </div>
                  </div>
                  <!-- step 3: slot -->
                  <div>
                    <p class="text-[11px] tracking-[.18em] uppercase text-ink-soft mb-2">3 · Today's slots</p>
                    <div class="grid grid-cols-4 gap-2 text-center text-xs">
                      <span class="slot rounded-lg border border-line py-2 text-ink-soft line-through">10:00</span>
                      <span class="slot rounded-lg bg-accent text-paper font-semibold py-2">10:30</span>
                      <span class="slot rounded-lg border border-line py-2">11:15</span>
                      <span class="slot rounded-lg border border-line py-2">12:00</span>
                    </div>
                  </div>
                  <button class="w-full btn-glow rounded-full py-3 font-medium inline-flex items-center justify-center gap-2"><span class="sheen-text">Confirm appointment</span><iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></button>
                </div>
                <p class="text-[11px] text-ink-soft px-6 pb-4 -mt-2">Illustrative booking flow — yours, on your website.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== CARE PATHWAY — the EKG line ===================== -->
      <section id="pathway" class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden" aria-label="The patient care pathway">
        <div class="absolute inset-0 grid-lines-d opacity-50" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'hospitals_pathway_eyebrow', false, 'The patient pathway' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php bx_hospitals_text( 'hospitals_pathway_heading', 'From a "near me" search to a kept appointment' ); ?></h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'hospitals_pathway_text', false, 'Health is a heartbeat — and so is the patient journey. We keep the line strong at every beat, so more patients reach your door and come back.' ) ); ?></p>
          </div>

          <!-- the EKG pathway -->
          <div class="reveal overflow-x-auto pb-2 -mx-4 px-4 sm:mx-0 sm:px-0" data-delay="1">
            <div class="min-w-[760px]">
              <svg viewBox="0 0 1000 120" class="w-full h-24" fill="none" preserveAspectRatio="none" aria-hidden="true">
                <path class="ekg-line" pathLength="1" d="M0,60 L120,60 L150,60 L165,26 L185,96 L205,60 L320,60 L350,60 L365,26 L385,96 L405,60 L520,60 L550,60 L565,26 L585,96 L605,60 L720,60 L750,60 L765,26 L785,96 L805,60 L920,60 L1000,60" stroke="#fa5539" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="grid grid-cols-5 gap-3 -mt-3">
                <div class="beat b1 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:search" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Symptom search</p><p class="text-[11px] text-paper/50 mt-1">"cardiologist near me"</p>
                </div>
                <div class="beat b2 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:map-pin" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Finds you</p><p class="text-[11px] text-paper/50 mt-1">Top of the map pack</p>
                </div>
                <div class="beat b3 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:calendar-check" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Books</p><p class="text-[11px] text-paper/50 mt-1">One-tap appointment</p>
                </div>
                <div class="beat b4 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:building-2" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Visits</p><p class="text-[11px] text-paper/50 mt-1">Reminders cut no-shows</p>
                </div>
                <div class="beat b5 text-center">
                  <span class="mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border border-accent text-paper text-xl"><iconify-icon icon="lucide:heart-pulse" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Care &amp; recall</p><p class="text-[11px] text-paper/50 mt-1">Follow-ups &amp; check-ups</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== DEPARTMENTS — the directory ===================== -->
      <section class="py-20 sm:py-28" aria-label="Specialities we help be found">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'hospitals_depts_eyebrow', false, 'The department directory' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'hospitals_depts_heading', false, 'Every speciality, found first' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'hospitals_depts_text', false, 'From clinic marketing in Jaipur for a single-specialty practice to doctor marketing in Jaipur for a multispeciality hospital — we make the right doctor show up for every patient search.' ) ); ?></p>
          </div>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php bx_hospitals_render_depts(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== Rx — the prescription (services) ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="What we prescribe">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-start">
          <div class="lg:col-span-4 lg:sticky lg:top-28">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'hospitals_rx_eyebrow', false, 'Your growth, prescribed' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'hospitals_rx_heading', false, 'The prescription for a full OPD' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php bx_hospitals_text( 'hospitals_rx_text', "Symptoms: empty slots, weak online presence, lost to the hospital down the road. Here's the treatment plan — from medical SEO in Jaipur to patient acquisition that fills the calendar. Tap any line for the service behind it." ); ?></p>
            <div class="reveal mt-6 inline-flex items-center gap-2 rounded-full bg-paper border border-line px-4 py-2 text-sm" data-delay="2"><iconify-icon icon="lucide:heart-pulse" class="text-accent heartbeat-ic" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'hospitals_rx_pill', false, 'One team, full recovery' ) ); ?></div>
          </div>
          <!-- the Rx pad -->
          <div class="lg:col-span-8 reveal" data-delay="1">
            <div class="rounded-xl2 bg-paper border border-line overflow-hidden">
              <div class="flex items-center justify-between px-6 py-4 border-b border-dashed border-line">
                <div class="flex items-end gap-2">
                  <span class="font-display text-4xl tt text-accent leading-none">℞</span>
                  <div><p class="text-[11px] tracking-[.2em] uppercase text-ink-soft">BoostronixX · Growth Clinic</p><p class="font-display tt">Treatment plan</p></div>
                </div>
                <span class="mono text-[11px] text-ink-soft">Dose: ongoing</span>
              </div>
              <div class="divide-y divide-line">
                <?php bx_hospitals_render_rx(); ?>
              </div>
              <p class="hand px-6 py-4 border-t border-dashed border-line text-sm text-ink-soft font-display tt italic">Signed — BoostronixX Growth Clinic · ethical &amp; compliant</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PROOF — patient vitals monitor ===================== -->
      <section class="py-20 sm:py-28" aria-label="Results">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'hospitals_proof_eyebrow', false, 'The vitals are strong' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'hospitals_proof_heading', false, 'A healthcare marketing agency in Jaipur with healthy numbers' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">From credible, reassuring campaigns to local lead-gen that lifted patient enquiries <strong class="text-ink">+142%</strong>, we build hospital marketing in Jaipur that earns trust and books appointments.</p>
            <figure class="reveal mt-7 rounded-2xl bg-surface border border-line p-6" data-delay="1">
              <blockquote class="font-display tt text-lg leading-snug"><?php bx_hospitals_text( 'hospitals_proof_quote', '"They understood that healthcare runs on trust — the campaigns felt credible and respectful, and our OPD appointments climbed steadily."' ); ?></blockquote>
              <figcaption class="mt-4 flex items-center gap-3"><span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display" aria-hidden="true"><?php echo esc_html( bx_field( 'hospitals_proof_avatar', false, 'S' ) ); ?></span><span class="text-sm"><span class="block font-medium"><?php echo esc_html( bx_field( 'hospitals_proof_name', false, 'Dr. S. Agarwal' ) ); ?></span><span class="block text-ink-soft text-xs"><?php echo esc_html( bx_field( 'hospitals_proof_role', false, 'Hospital director' ) ); ?></span></span><span class="ml-auto text-accent text-sm" aria-label="5 out of 5 stars">★★★★★</span></figcaption>
            </figure>
          </div>
          <!-- the monitor -->
          <div class="reveal" data-delay="1">
            <div class="relative rounded-xl2 bg-ink text-paper p-6 sm:p-8 overflow-hidden">
              <div class="absolute inset-0 monitor-grid opacity-40" aria-hidden="true"></div>
              <div class="relative flex items-center justify-between">
                <span class="inline-flex items-center gap-2 text-xs text-paper/60"><span class="live inline-block h-2 w-2 rounded-full bg-accent" aria-hidden="true"></span> Patient vitals · live</span>
                <span class="mono text-[11px] text-paper/40">BX-MONITOR</span>
              </div>
              <!-- main reading -->
              <div class="relative mt-4 flex items-end gap-2">
                <p class="font-display text-6xl tt text-accent leading-none">+<span class="count" data-to="142">0</span>%</p>
                <p class="text-paper/60 mb-1.5">patient enquiries</p>
              </div>
              <svg viewBox="0 0 400 60" class="relative w-full h-12 mt-2" fill="none" preserveAspectRatio="none" aria-hidden="true">
                <polyline points="0,30 80,30 96,12 112,48 128,30 200,30 216,12 232,48 248,30 320,30 336,12 352,48 368,30 400,30" stroke="#fa5539" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <!-- secondary readings -->
              <div class="relative grid grid-cols-3 gap-3 mt-4">
                <div class="rounded-xl bg-white/5 border border-white/10 p-3"><p class="inline-flex items-center gap-1.5 text-[10px] text-paper/50 uppercase tracking-wide"><span class="blip inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> Sat</p><p class="font-display text-xl tt"><span class="count" data-to="96">0</span>%</p><p class="text-[10px] text-paper/40">satisfaction</p></div>
                <div class="rounded-xl bg-white/5 border border-white/10 p-3"><p class="inline-flex items-center gap-1.5 text-[10px] text-paper/50 uppercase tracking-wide"><span class="blip d2 inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> CPL</p><p class="font-display text-xl tt">₹<span class="count" data-to="59">0</span></p><p class="text-[10px] text-paper/40">per enquiry</p></div>
                <div class="rounded-xl bg-white/5 border border-white/10 p-3"><p class="inline-flex items-center gap-1.5 text-[10px] text-paper/50 uppercase tracking-wide"><span class="blip d3 inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> Appt</p><p class="font-display text-xl tt"><span class="count" data-to="384">0</span></p><p class="text-[10px] text-paper/40">per month</p></div>
              </div>
              <p class="relative text-[11px] text-paper/40 mt-4">Illustrative — results vary by speciality, location and reputation.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== PATIENTS ASK AI — the map-pack result ===================== -->
      <section id="ai-search" class="py-20 sm:py-28 bg-surface border-y border-line" aria-labelledby="aiHeading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <div class="lg:col-span-6">
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'hospitals_ai_eyebrow', false, 'AEO · GEO · Local AI' ) ); ?></p>
            <h2 id="aiHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php bx_hospitals_text( 'hospitals_ai_heading', 'Be the answer to "near me"' ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">Patients search "best hospital near me" on Google and ask ChatGPT for a recommendation. We make sure your hospital owns the map pack and gets <strong class="text-ink">named and cited</strong> — with the trust signals that earn the call.</p>
            <ul class="reveal space-y-2 mt-6 text-sm" data-delay="2">
              <?php
              foreach ( bx_lines( bx_field( 'hospitals_ai_bullets', false, "Google Business Profile & map-pack dominance\nSchema & doctor entities AI tools can cite\nA review profile that wins the decision" ) ) as $hosp_bi => $hosp_ai_bullet ) {
                  $hosp_bullet_lead = 0 === $hosp_bi ? '' : "\n" . str_repeat( ' ', 14 );
                  echo $hosp_bullet_lead . '<li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> ' . esc_html( $hosp_ai_bullet ) . '</li>';
              }
              echo "\n" . str_repeat( ' ', 12 );
              ?></ul>
            <?php
            $hosp_ai_btn = get_field( 'hospitals_ai_button' );
            $hosp_ai_btn_url   = is_array( $hosp_ai_btn ) && ! empty( $hosp_ai_btn['url'] ) ? $hosp_ai_btn['url'] : '/seo-services/#aeo-geo';
            $hosp_ai_btn_label = is_array( $hosp_ai_btn ) && ! empty( $hosp_ai_btn['title'] ) ? $hosp_ai_btn['title'] : 'How local & AI search works';
            ?><a href="<?php echo esc_url( $hosp_ai_btn_url ); ?>" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-7 font-medium" data-delay="3"><span class="relative z-10 sheen-text"><?php echo esc_html( $hosp_ai_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
          </div>
          <!-- google-style map-pack result -->
          <div class="lg:col-span-6 reveal" data-delay="1">
            <div class="rounded-xl2 border border-line bg-paper shadow-[0_45px_90px_-55px_rgba(10,10,10,.5)] overflow-hidden">
              <div class="flex items-center gap-2 rounded-full border border-line bg-surface px-4 py-2.5 m-4 text-sm text-ink">
                <iconify-icon icon="lucide:search" class="text-ink-soft" aria-hidden="true"></iconify-icon>
                <span>best multispeciality hospital near me<span class="caret" aria-hidden="true"></span></span>
              </div>
              <!-- AI overview pill -->
              <div class="mx-4 mb-3 rounded-xl bg-accent/[0.06] border border-accent/25 p-3">
                <p class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-accent uppercase tracking-wide"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> AI Overview</p>
                <p class="text-sm text-ink mt-1.5 leading-relaxed">For multispeciality care nearby, <strong class="text-accent">CityCare Hospital</strong> is highly rated — NABH-accredited with 24×7 emergency. <span class="text-ink-soft">[1]</span></p>
              </div>
              <!-- map pack result -->
              <div class="mx-4 mb-4 rounded-xl border border-line p-4">
                <div class="flex items-start gap-3">
                  <span class="grid place-items-center h-11 w-11 rounded-lg bg-accent/15 text-accent shrink-0" aria-hidden="true"><iconify-icon icon="lucide:building-2" class="text-xl"></iconify-icon></span>
                  <div class="flex-1 min-w-0">
                    <p class="font-display tt">CityCare Hospital</p>
                    <p class="text-xs text-ink-soft mt-0.5"><span class="text-accent font-semibold">4.8 ★★★★★</span> · 1,240 reviews · Hospital</p>
                    <p class="text-xs text-ink-soft mt-0.5 inline-flex items-center gap-1"><span class="h-1.5 w-1.5 rounded-full bg-green-600 inline-block"></span> Open · 24×7 emergency · 1.2 km</p>
                  </div>
                </div>
                <div class="flex items-center gap-2 mt-3">
                  <a href="/contact-us/" class="flex-1 text-center rounded-full bg-ink text-paper text-xs font-medium py-2">Book</a>
                  <a href="tel:+918058212202" class="flex-1 text-center rounded-full border border-line text-xs font-medium py-2">Call</a>
                  <span class="flex-1 text-center rounded-full border border-line text-xs font-medium py-2 text-ink-soft">Directions</span>
                </div>
              </div>
              <div class="mx-4 mb-4 flex items-center justify-center gap-1.5 rounded-full bg-accent text-paper text-xs font-semibold py-2"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Your hospital, cited as the answer</div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ (shared design) ===================== -->
      <section class="py-20 sm:py-28" aria-label="Frequently asked questions">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'hospitals_faq_eyebrow', false, 'Healthcare FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'hospitals_faq_heading', false, 'Your questions, answered' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_hospitals_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA (shared design) ===================== -->
      <section class="pb-20 sm:pb-28 pt-4" aria-label="Related and contact">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'hospitals_related_eyebrow', false, 'Explore more' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_hospitals_render_related(); ?>
          </div>
          <?php
          $hosp_cta_btn = get_field( 'hospitals_cta_button' );
          $hosp_cta_btn_url   = is_array( $hosp_cta_btn ) && ! empty( $hosp_cta_btn['url'] ) ? $hosp_cta_btn['url'] : '/contact-us/';
          $hosp_cta_btn_label = is_array( $hosp_cta_btn ) && ! empty( $hosp_cta_btn['title'] ) ? $hosp_cta_btn['title'] : 'Get more patients';
          ?><div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-60" aria-hidden="true"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php bx_hospitals_text( 'hospitals_cta_heading', "Let's fill your appointment book" ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php bx_hospitals_text( 'hospitals_cta_text', "Tell us about your hospital or clinic — we'll map an ethical, compliant plan to bring more patient enquiries and appointments. Free, no obligation." ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $hosp_cta_btn_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $hosp_cta_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="<?php echo esc_url( bx_field( 'hospitals_cta_phone_href', false, 'tel:+918058212202' ) ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10"><?php echo esc_html( bx_field( 'hospitals_cta_phone', false, '+91 80582 12202' ) ); ?></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      </article>
    </main>

<?php
get_footer();
