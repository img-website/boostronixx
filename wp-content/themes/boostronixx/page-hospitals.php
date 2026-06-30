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
      <section class="relative pt-28 sm:pt-36 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <a href="/industries/" class="hover:text-accent">Industries</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Hospitals</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:heart-pulse" class="text-accent text-sm heartbeat-ic" aria-hidden="true"></iconify-icon> Industry · Hospitals &amp; Healthcare</div>
              <h1 class="reveal font-display text-[2.6rem] leading-[1.0] sm:text-6xl tt">Keep your <span class="text-accent">appointment book</span> full</h1>
              <p class="reveal text-ink-soft mt-6 max-w-lg leading-relaxed" data-delay="1">As a healthcare marketing agency in Jaipur, we help hospitals, clinics and doctors earn patient trust and turn "near me" searches into real enquiries and booked appointments — with credible branding, local SEO and ethical, compliant campaigns.</p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="/contact-us/" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Get more patients</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="#pathway" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:activity" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10">See the care path</span></a>
              </div>
              <div class="reveal flex flex-wrap items-center gap-x-5 gap-y-2 mt-7 text-xs text-ink-soft" data-delay="3">
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:shield-check" class="text-accent" aria-hidden="true"></iconify-icon> NABH-minded</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:scale" class="text-accent" aria-hidden="true"></iconify-icon> Ethical &amp; compliant</span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:badge-check" class="text-accent" aria-hidden="true"></iconify-icon> Verified doctor profiles</span>
              </div>
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
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The patient pathway</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">From a "near me" search to a kept appointment</h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1">Health is a heartbeat — and so is the patient journey. We keep the line strong at every beat, so more patients reach your door and come back.</p>
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
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The department directory</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Every speciality, found first</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">From clinic marketing in Jaipur for a single-specialty practice to doctor marketing in Jaipur for a multispeciality hospital — we make the right doctor show up for every patient search.</p>
          </div>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:heart-pulse"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Cardiology</h3><p class="text-ink-soft text-xs mt-1">Heart-care that builds instant trust.</p></div>
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5" data-delay="1"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:bone"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Orthopaedics</h3><p class="text-ink-soft text-xs mt-1">Found for "knee / joint specialist".</p></div>
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5" data-delay="2"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:ear"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">ENT</h3><p class="text-ink-soft text-xs mt-1">Win the everyday consultation.</p></div>
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5" data-delay="3"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:smile"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Dental</h3><p class="text-ink-soft text-xs mt-1">Fill the chair, fill the calendar.</p></div>
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:eye"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Eye care</h3><p class="text-ink-soft text-xs mt-1">High-trust elective procedures.</p></div>
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5" data-delay="1"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:baby"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Gynae &amp; IVF</h3><p class="text-ink-soft text-xs mt-1">Sensitive, credible, discreet.</p></div>
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5" data-delay="2"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:brain"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Neurology</h3><p class="text-ink-soft text-xs mt-1">Authority-led specialist demand.</p></div>
            <div class="dept reveal rounded-xl2 border border-line bg-paper p-5" data-delay="3"><span class="dept-ic grid place-items-center h-12 w-12 rounded-xl bg-surface text-accent text-2xl" aria-hidden="true"><iconify-icon icon="lucide:microscope"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Diagnostics &amp; labs</h3><p class="text-ink-soft text-xs mt-1">Tests, packages &amp; home collection.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== Rx — the prescription (services) ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="What we prescribe">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-start">
          <div class="lg:col-span-4 lg:sticky lg:top-28">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Your growth, prescribed</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">The prescription for a full OPD</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Symptoms: empty slots, weak online presence, lost to the hospital down the road. Here's the treatment plan — from medical SEO in Jaipur to patient acquisition that fills the calendar. Tap any line for the service behind it.</p>
            <div class="reveal mt-6 inline-flex items-center gap-2 rounded-full bg-paper border border-line px-4 py-2 text-sm" data-delay="2"><iconify-icon icon="lucide:heart-pulse" class="text-accent heartbeat-ic" aria-hidden="true"></iconify-icon> One team, full recovery</div>
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
                <a href="/brand-consulting/" class="rx flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-9 w-9 rounded-full border border-accent text-accent"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Brand for trust</span><span class="mono text-[11px] text-ink-soft">identity · doctor profiles · accreditation cues</span></span><iconify-icon icon="lucide:arrow-up-right" class="rx-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/seo-services/" class="rx flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-9 w-9 rounded-full border border-accent text-accent"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Win local &amp; the map pack</span><span class="mono text-[11px] text-ink-soft">"specialist near me" · GBP · AEO/GEO</span></span><iconify-icon icon="lucide:arrow-up-right" class="rx-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/performance-marketing/" class="rx flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-9 w-9 rounded-full border border-accent text-accent"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Fill the appointment book</span><span class="mono text-[11px] text-ink-soft">Meta &amp; Google · enquiries by speciality</span></span><iconify-icon icon="lucide:arrow-up-right" class="rx-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/website-design/" class="rx flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-9 w-9 rounded-full border border-accent text-accent"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Website with online booking</span><span class="mono text-[11px] text-ink-soft">doctor pages · departments · one-tap booking</span></span><iconify-icon icon="lucide:arrow-up-right" class="rx-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/social-media-marketing/" class="rx flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-9 w-9 rounded-full border border-accent text-accent"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Reputation &amp; reviews</span><span class="mono text-[11px] text-ink-soft">review engine · patient stories · health content</span></span><iconify-icon icon="lucide:arrow-up-right" class="rx-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
                <a href="/digital-marketing/" class="rx flex items-center gap-4 px-6 py-4"><span class="shrink-0 grid place-items-center h-9 w-9 rounded-full border border-accent text-accent"><iconify-icon icon="lucide:check" aria-hidden="true"></iconify-icon></span><span class="flex-1 min-w-0"><span class="font-display tt block">Nurture &amp; recall</span><span class="mono text-[11px] text-ink-soft">follow-ups · health-checkup recalls · CRM</span></span><iconify-icon icon="lucide:arrow-up-right" class="rx-arr text-ink-soft text-lg shrink-0" aria-hidden="true"></iconify-icon></a>
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
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The vitals are strong</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">A healthcare marketing agency in Jaipur with healthy numbers</h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">From credible, reassuring campaigns to local lead-gen that lifted patient enquiries <strong class="text-ink">+142%</strong>, we build hospital marketing in Jaipur that earns trust and books appointments.</p>
            <figure class="reveal mt-7 rounded-2xl bg-surface border border-line p-6" data-delay="1">
              <blockquote class="font-display tt text-lg leading-snug">"They understood that healthcare runs on trust — the campaigns felt credible and respectful, and our OPD appointments climbed steadily."</blockquote>
              <figcaption class="mt-4 flex items-center gap-3"><span class="grid place-items-center h-10 w-10 rounded-full bg-accent text-paper font-display" aria-hidden="true">S</span><span class="text-sm"><span class="block font-medium">Dr. S. Agarwal</span><span class="block text-ink-soft text-xs">Hospital director</span></span><span class="ml-auto text-accent text-sm" aria-label="5 out of 5 stars">★★★★★</span></figcaption>
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
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> AEO · GEO · Local AI</p>
            <h2 id="aiHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Be the answer to "near me"</h2>
            <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">Patients search "best hospital near me" on Google and ask ChatGPT for a recommendation. We make sure your hospital owns the map pack and gets <strong class="text-ink">named and cited</strong> — with the trust signals that earn the call.</p>
            <ul class="reveal space-y-2 mt-6 text-sm" data-delay="2">
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> Google Business Profile &amp; map-pack dominance</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> Schema &amp; doctor entities AI tools can cite</li>
              <li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> A review profile that wins the decision</li>
            </ul>
            <a href="/seo-services/#aeo-geo" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-7 font-medium" data-delay="3"><span class="relative z-10 sheen-text">How local &amp; AI search works</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
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
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Healthcare FAQ</p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Your questions, answered</h2></div>
          <div class="space-y-3">
            <div class="faq border border-line rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="true">How do you market a hospital or clinic?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">As a healthcare marketing agency in Jaipur, we market a hospital in four moves: brand it for trust (hospital branding in Jaipur with identity, doctor profiles, NABH and accreditation cues and patient stories), win local search (local SEO, Google Business Profile, AEO and GEO for "near me" and speciality queries), fill the appointment book (Meta and Google campaigns tuned for enquiries and appointments), and make booking effortless (a fast website with online appointment booking) — then build reviews and recall.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">How do you get more patient appointments?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">We target high-intent searches by speciality and locality, capture them with clear landing pages and one-tap booking, and optimise toward booked appointments rather than raw clicks. Reminders and follow-ups reduce no-shows, while local SEO and a strong review profile keep a steady, low-cost stream of enquiries coming in.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Is medical advertising allowed and ethical?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes, when it's done responsibly. We follow medical advertising norms and platform policies — no guaranteed cures, no misleading before/after claims, and honest, factual messaging. Ethical, compliant healthcare marketing actually performs better, because trust is what makes a patient choose you.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">How long until we see more patients?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Performance campaigns can drive enquiries and appointments within days, with quality improving over the first 30–60 days. Local SEO, your Google Business Profile and reviews compound over 3–6 months into a steady, low-cost flow of patients who find you organically.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Which channels work best for healthcare?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">A blend works best: Google Search and the map pack for high-intent "near me" queries, Meta ads for awareness and lead-gen, a strong review profile for trust, and helpful health content for authority. As a hospital marketing agency in Jaipur, we tune the mix to whether you're a multispeciality hospital, a single-specialty clinic or an individual doctor.</div></div></div>
            <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">Do you build websites with appointment booking?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes — our website and UI/UX teams build fast, SEO-ready hospital websites with department pages, doctor profiles, location details and one-tap appointment booking, so the patients your campaigns attract can book in seconds.</div></div></div>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA (shared design) ===================== -->
      <section class="pb-20 sm:pb-28 pt-4" aria-label="Related and contact">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6">Explore more</p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <a href="/performance-marketing/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:target"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">Performance Marketing</span><span class="text-xs text-ink-soft">Appointment campaigns</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
            <a href="/seo-services/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:search"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">SEO · AEO · GEO</span><span class="text-xs text-ink-soft">Win "near me" &amp; AI</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
            <a href="/industries/" class="reveal group rounded-2xl border border-line p-6 flex items-center gap-4 hover:border-accent transition" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl" aria-hidden="true"><iconify-icon icon="lucide:layers"></iconify-icon></span><span class="flex-1"><span class="font-display tt block">All Industries</span><span class="text-xs text-ink-soft">Other sectors</span></span><iconify-icon icon="lucide:arrow-right" class="text-ink-soft group-hover:text-accent transition" aria-hidden="true"></iconify-icon></a>
          </div>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 py-16 sm:py-20 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-60" aria-hidden="true"></div>
            <div class="relative max-w-2xl">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Let's fill your appointment book</h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl">Tell us about your hospital or clinic — we'll map an ethical, compliant plan to bring more patient enquiries and appointments. Free, no obligation.</p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="/contact-us/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Get more patients</span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="tel:+918058212202" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10">+91 80582 12202</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      </article>
    </main>

<?php
get_footer();
