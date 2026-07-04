<?php
/**
 * Template Name: Schools
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
      <!-- ===================== HERO — report card + admissions-open seal ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-12 grid-lines overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <a href="/industries/" class="hover:text-accent">Industries</a><iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
            <span class="text-ink font-medium" aria-current="page">Schools</span>
          </nav>
          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5"><iconify-icon icon="lucide:graduation-cap" class="text-accent text-sm" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'schools_hero_badge', false, 'Industry · Schools & Admissions' ) ); ?></div>
              <h1 class="reveal font-display text-[2.6rem] leading-[1.0] sm:text-6xl tt"><?php echo esc_html( bx_field( 'schools_hero_heading_a', false, 'Fill every seat,' ) ); ?><br />
                <span class="relative inline-block"><?php echo esc_html( bx_field( 'schools_hero_heading_b', false, 'every ' ) ); ?><span class="text-accent"><?php echo esc_html( bx_field( 'schools_hero_heading_accent', false, 'admission season' ) ); ?></span>
                  <svg class="absolute -bottom-2 left-0 w-full" height="14" viewBox="0 0 320 14" fill="none" aria-hidden="true"><path class="chalk-path" pathLength="1" d="M3,9 C70,3 130,12 180,7 C230,3 290,10 317,5" stroke="#fa5539" stroke-width="4" stroke-linecap="round"/></svg>
                </span>
              </h1>
              <p class="reveal text-ink-soft mt-7 max-w-lg leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'schools_hero_text', false, 'As a school marketing agency in Jaipur, we help pre-schools, K-12, CBSE, ICSE, boarding and international schools earn parent trust and turn "best school near me" into admission enquiries, campus visits and confirmed admissions.' ) ); ?></p>
              <?php
              $schools_hero_cta1       = get_field( 'schools_hero_cta_primary' );
              $schools_hero_cta1_url   = is_array( $schools_hero_cta1 ) && ! empty( $schools_hero_cta1['url'] ) ? $schools_hero_cta1['url'] : '/contact/';
              $schools_hero_cta1_label = is_array( $schools_hero_cta1 ) && ! empty( $schools_hero_cta1['title'] ) ? $schools_hero_cta1['title'] : 'Grow my admissions';
              $schools_hero_cta2       = get_field( 'schools_hero_cta_secondary' );
              $schools_hero_cta2_url   = is_array( $schools_hero_cta2 ) && ! empty( $schools_hero_cta2['url'] ) ? $schools_hero_cta2['url'] : '#journey';
              $schools_hero_cta2_label = is_array( $schools_hero_cta2 ) && ! empty( $schools_hero_cta2['title'] ) ? $schools_hero_cta2['title'] : 'Follow the journey';
              ?>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="<?php echo esc_url( $schools_hero_cta1_url ); ?>" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text"><?php echo esc_html( $schools_hero_cta1_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="<?php echo esc_url( $schools_hero_cta2_url ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:bus-front" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10"><?php echo esc_html( $schools_hero_cta2_label ); ?></span></a>
              </div>
              <p class="reveal hand text-2xl text-ink-soft mt-7 inline-flex items-center gap-2" data-delay="3"><iconify-icon icon="lucide:sparkles" class="text-accent text-base" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'schools_hero_note', false, 'built to be found wherever parents look — Google, Maps & AI' ) ); ?></p>
            </div>

            <!-- hero visual: a marketing REPORT CARD -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="relative">
                <div class="rounded-xl2 border border-line bg-paper shadow-[0_50px_90px_-55px_rgba(10,10,10,.5)] overflow-hidden">
                  <!-- card header -->
                  <div class="bg-ink text-paper px-6 py-5 flex items-center justify-between">
                    <div>
                      <p class="text-[10px] tracking-[.25em] uppercase text-paper/50">Marketing Report Card</p>
                      <p class="font-display text-lg tt">Greenwood Public School</p>
                    </div>
                    <span class="grid place-items-center h-11 w-11 rounded-full bg-accent text-paper text-xl shrink-0" aria-hidden="true"><iconify-icon icon="lucide:school"></iconify-icon></span>
                  </div>
                  <!-- subjects -->
                  <div class="ruled px-6 py-3">
                    <div class="flex items-center justify-between py-3 border-b border-line/70">
                      <div class="min-w-0"><p class="text-sm font-medium">Admission enquiries</p><p class="text-xs text-ink-soft">+96% this season</p></div>
                      <span class="grade g1 grid place-items-center h-9 w-9 rounded-full bg-accent/12 text-accent font-display text-lg shrink-0">A+</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-line/70">
                      <div class="min-w-0"><p class="text-sm font-medium">Local search · "near me"</p><p class="text-xs text-ink-soft">Top 3 in your area</p></div>
                      <span class="grade g2 grid place-items-center h-9 w-9 rounded-full bg-accent/12 text-accent font-display text-lg shrink-0">A</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b border-line/70">
                      <div class="min-w-0"><p class="text-sm font-medium">Brand &amp; parent trust</p><p class="text-xs text-ink-soft">Parents' first choice</p></div>
                      <span class="grade g3 grid place-items-center h-9 w-9 rounded-full bg-accent/12 text-accent font-display text-lg shrink-0">A+</span>
                    </div>
                    <div class="flex items-center justify-between py-3">
                      <div class="min-w-0"><p class="text-sm font-medium">Reviews &amp; reputation</p><p class="text-xs text-ink-soft">4.8★ and rising</p></div>
                      <span class="grade g4 grid place-items-center h-9 w-9 rounded-full bg-accent/12 text-accent font-display text-lg shrink-0">A</span>
                    </div>
                  </div>
                  <!-- card footer + stamp -->
                  <div class="relative px-6 py-4 bg-surface border-t border-line flex items-center justify-between">
                    <div><p class="text-[11px] text-ink-soft">Remarks</p><p class="font-display tt">Result: seats filling fast</p></div>
                    <span class="seal-stamp inline-flex items-center gap-1.5 rounded-md border-[3px] border-accent text-accent font-display tt text-sm px-3 py-1.5 uppercase tracking-wide" aria-hidden="true"><iconify-icon icon="lucide:badge-check"></iconify-icon> Admissions Open</span>
                  </div>
                </div>
                <p class="text-[11px] text-ink-soft mt-3 text-center">Illustrative — every school's report card looks different.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== ADMISSION JOURNEY — the school-bus route ===================== -->
      <section id="journey" class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden" aria-label="The admission journey">
        <div class="absolute inset-0 grid-lines-d opacity-60" aria-hidden="true"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'schools_journey_eyebrow', false, 'The admission journey' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'schools_journey_heading', false, 'From "best school near me" to a confirmed seat' ) ); ?></h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'schools_journey_text', false, 'Every parent in the city rides the same route. Our admission marketing in Jaipur makes sure your school is the destination at every single stop — and drives them all the way to a confirmed seat.' ) ); ?></p>
          </div>

          <!-- the route -->
          <div class="reveal overflow-x-auto pb-3 -mx-4 px-4 sm:mx-0 sm:px-0" data-delay="1">
            <div class="road min-w-[720px] pt-12">
              <!-- the bus -->
              <div class="bus" aria-hidden="true">
                <div class="bus-body relative">
                  <div class="relative h-9 w-14 rounded-lg rounded-tr-2xl bg-accent flex items-center px-1.5 gap-1 shadow-lg">
                    <span class="h-4 w-3 rounded-sm bg-white/85"></span><span class="h-4 w-3 rounded-sm bg-white/85"></span>
                    <span class="absolute -right-1 top-2 h-3 w-1.5 rounded-r bg-ink/30"></span>
                  </div>
                  <svg class="wheel absolute -bottom-1.5 left-2 h-3 w-3" viewBox="0 0 12 12" aria-hidden="true"><circle cx="6" cy="6" r="5" fill="#0a0a0a"/><circle cx="6" cy="6" r="1.4" fill="#fff"/></svg>
                  <svg class="wheel absolute -bottom-1.5 right-2 h-3 w-3" viewBox="0 0 12 12" aria-hidden="true"><circle cx="6" cy="6" r="5" fill="#0a0a0a"/><circle cx="6" cy="6" r="1.4" fill="#fff"/></svg>
                </div>
              </div>
              <!-- the road bar -->
              <div class="relative h-3 rounded-full bg-white/12">
                <div class="absolute inset-x-3 top-1/2 -translate-y-1/2 h-0.5" style="background:repeating-linear-gradient(90deg,rgba(255,255,255,.5) 0 12px,transparent 12px 26px)"></div>
              </div>
              <!-- stops -->
              <div class="grid grid-cols-5 gap-2 mt-5">
                <div class="text-center">
                  <span class="stopdot k1 mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:search" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Discover</p><p class="text-[11px] text-paper/50 mt-1">Parent searches a school</p>
                </div>
                <div class="text-center">
                  <span class="stopdot k2 mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:phone-call" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Enquiry</p><p class="text-[11px] text-paper/50 mt-1">Fills the enquiry form</p>
                </div>
                <div class="text-center">
                  <span class="stopdot k3 mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:map-pin" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Campus visit</p><p class="text-[11px] text-paper/50 mt-1">Tours the school</p>
                </div>
                <div class="text-center">
                  <span class="stopdot k4 mx-auto grid place-items-center h-12 w-12 rounded-full bg-white/10 border border-white/15 text-accent text-xl"><iconify-icon icon="lucide:file-pen" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Application</p><p class="text-[11px] text-paper/50 mt-1">Applies for a seat</p>
                </div>
                <div class="text-center">
                  <span class="stopdot k5 mx-auto grid place-items-center h-12 w-12 rounded-full bg-accent border border-accent text-paper text-xl"><iconify-icon icon="lucide:party-popper" aria-hidden="true"></iconify-icon></span>
                  <p class="font-display tt mt-3">Admission</p><p class="text-[11px] text-paper/50 mt-1">Seat confirmed 🎉</p>
                </div>
              </div>
            </div>
          </div>
          <p class="reveal text-xs text-paper/40 mt-6" data-delay="2"><?php echo esc_html( bx_field( 'schools_journey_footnote', false, 'We engineer every stop — discovery, enquiry, visit and follow-up — so fewer parents drop off and more reach admission.' ) ); ?></p>
        </div>
      </section>

      <!-- ===================== TIMETABLE — what fills your seats ===================== -->
      <section class="py-20 sm:py-28" aria-label="Our school growth timetable">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-start">
          <div class="lg:col-span-4 lg:sticky lg:top-28">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'schools_timetable_eyebrow', false, 'Your growth timetable' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight"><?php echo esc_html( bx_field( 'schools_timetable_heading', false, 'What a school marketing agency in Jaipur runs for you' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'schools_timetable_text', false, 'Think of it as a school day for your admissions. Each "period" is a capability we run for you — six together cover the full sweep of education digital marketing in Jaipur. Tap any to see the service behind it.' ) ); ?></p>
            <div class="reveal mt-6 inline-flex items-center gap-2 rounded-full bg-surface px-4 py-2 text-sm" data-delay="2"><iconify-icon icon="lucide:bell" class="text-accent" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'schools_timetable_pill', false, 'One team, one timetable, full classrooms' ) ); ?></div>
          </div>
          <div class="lg:col-span-8 rounded-xl2 border border-line overflow-hidden divide-y divide-line">
            <?php bx_schools_render_periods(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== SCHOOL TYPES — the campus row ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line" aria-label="Schools we help">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'schools_types_eyebrow', false, 'Every kind of school' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'schools_types_heading', false, 'Whatever your campus, we fill it' ) ); ?></h2>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
            <?php bx_schools_render_types(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== PROOF — the noticeboard ===================== -->
      <section class="py-20 sm:py-28" aria-label="Results">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'schools_proof_eyebrow', false, 'On the noticeboard' ) ); ?></p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'schools_proof_heading', false, 'Results worth pinning up' ) ); ?></h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6">
            <div class="pin reveal relative rounded-xl bg-paper border border-line p-6 rotate-[-2deg]">
              <span class="absolute left-1/2 -top-2 -translate-x-1/2 h-4 w-4 rounded-full bg-accent shadow" aria-hidden="true"></span>
              <p class="font-display text-5xl tt text-accent">+<span class="count" data-to="96">0</span>%</p>
              <p class="text-ink-soft text-sm mt-1">admission enquiries this season</p>
            </div>
            <div class="pin reveal relative rounded-xl bg-paper border border-line p-6 rotate-[1.5deg]" data-delay="1">
              <span class="absolute left-1/2 -top-2 -translate-x-1/2 h-4 w-4 rounded-full bg-ink shadow" aria-hidden="true"></span>
              <p class="font-display text-5xl tt"><span class="count" data-to="82">0</span>%</p>
              <p class="text-ink-soft text-sm mt-1">of Grade 6 seats filled</p>
              <div class="mt-3 h-2 rounded-full bg-surface-2 overflow-hidden"><div class="seatbar h-full" style="--w:82%"></div></div>
            </div>
            <div class="pin reveal relative rounded-xl bg-paper border border-line p-6 rotate-[-1deg]" data-delay="2">
              <span class="absolute left-1/2 -top-2 -translate-x-1/2 h-4 w-4 rounded-full bg-accent shadow" aria-hidden="true"></span>
              <p class="font-display text-5xl tt">₹<span class="count" data-to="64">0</span></p>
              <p class="text-ink-soft text-sm mt-1">cost per enquiry</p>
            </div>
            <!-- handwritten parent note -->
            <div class="pin reveal relative rounded-xl bg-[#fffdf3] border border-line p-6 rotate-[2deg]" data-delay="3">
              <span class="absolute left-1/2 -top-2 -translate-x-1/2 h-4 w-4 rounded-full bg-ink shadow" aria-hidden="true"></span>
              <p class="hand text-xl text-ink leading-snug">"We finally look as good online as we are on campus — enquiries doubled."</p>
              <p class="hand text-lg text-accent mt-3">— Meena Sharma, School Director</p>
              <span class="text-accent text-sm" aria-label="5 out of 5 stars">★★★★★</span>
            </div>
          </div>
          <p class="reveal text-[11px] text-ink-soft mt-6 text-center" data-delay="1">Illustrative — results vary by board, location and reputation.</p>
        </div>
      </section>

      <!-- ===================== PARENTS ASK AI — a parent's phone search ===================== -->
      <section id="ai-search" class="py-20 sm:py-28 bg-surface border-y border-line" aria-labelledby="aiHeading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-12 items-center">
          <div class="lg:col-span-6">
            <p class="reveal inline-flex items-center gap-2 text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> <?php echo esc_html( bx_field( 'schools_ai_eyebrow', false, 'AEO · GEO · AI Overviews' ) ); ?></p>
            <h2 id="aiHeading" class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'schools_ai_heading', false, 'Parents ask AI before they ask you' ) ); ?></h2>
            <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1"><?php echo esc_html( bx_field( 'schools_ai_text', false, 'More parents now start admissions research inside ChatGPT, Perplexity or Google\'s AI Overview. We make sure that when they ask,' ) ); ?> <strong class="text-ink">your school is the answer — named, cited and trusted.</strong></p>
            <ul class="reveal space-y-2 mt-6 text-sm" data-delay="2">
              <?php
              foreach ( bx_lines( bx_field( 'schools_ai_points', false, "Answer-ready content for board, area & grade queries\nSchema & entities so AI tools cite your school\nA review profile that earns the click" ) ) as $schools_ai_point ) {
                  echo '<li class="flex items-center gap-2"><iconify-icon icon="lucide:check" class="text-accent" aria-hidden="true"></iconify-icon> ' . esc_html( $schools_ai_point ) . '</li>';
              }
              ?>
            </ul>
            <?php
            $schools_ai_btn       = get_field( 'schools_ai_button' );
            $schools_ai_btn_url   = is_array( $schools_ai_btn ) && ! empty( $schools_ai_btn['url'] ) ? $schools_ai_btn['url'] : '/seo-services/#aeo-geo';
            $schools_ai_btn_label = is_array( $schools_ai_btn ) && ! empty( $schools_ai_btn['title'] ) ? $schools_ai_btn['title'] : 'How AEO & GEO works';
            ?>
            <a href="<?php echo esc_url( $schools_ai_btn_url ); ?>" class="reveal group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-7 font-medium" data-delay="3"><span class="relative z-10 sheen-text"><?php echo esc_html( $schools_ai_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
          </div>
          <!-- parent's phone -->
          <div class="lg:col-span-6 reveal flex justify-center" data-delay="1">
            <div class="w-full max-w-[320px] rounded-[2.2rem] border-[6px] border-ink bg-paper shadow-[0_45px_90px_-50px_rgba(10,10,10,.55)] overflow-hidden">
              <div class="bg-ink h-7 flex items-center justify-center"><span class="h-1.5 w-16 rounded-full bg-white/25"></span></div>
              <div class="p-4">
                <!-- search bar -->
                <div class="flex items-center gap-2 rounded-full border border-line bg-surface px-3 py-2 text-sm text-ink">
                  <iconify-icon icon="lucide:search" class="text-ink-soft" aria-hidden="true"></iconify-icon>
                  <span>best CBSE school near me<span class="caret" aria-hidden="true"></span></span>
                </div>
                <!-- AI answer -->
                <div class="mt-4 rounded-2xl border border-line p-4">
                  <p class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-accent uppercase tracking-wide"><iconify-icon icon="lucide:sparkles" aria-hidden="true"></iconify-icon> AI answer</p>
                  <p class="text-sm text-ink mt-2 leading-relaxed">A strong choice is <strong class="text-accent">Greenwood Public School</strong> — CBSE, great academics &amp; sports, safe transport and excellent parent reviews.</p>
                  <a href="/contact/" class="mt-3 inline-flex items-center gap-1.5 rounded-full border border-accent/40 bg-accent/10 text-accent text-xs font-medium px-2.5 py-1 hover:bg-accent hover:text-paper transition"><iconify-icon icon="lucide:link" class="text-[11px]" aria-hidden="true"></iconify-icon> your-school.com <span class="opacity-70">[1]</span></a>
                </div>
                <div class="mt-4 flex items-center justify-center gap-1.5 rounded-full bg-accent text-paper text-xs font-semibold px-3 py-2"><iconify-icon icon="lucide:badge-check" aria-hidden="true"></iconify-icon> Your school, cited as the answer</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== FAQ (shared design) ===================== -->
      <section class="py-20 sm:py-28" aria-label="Frequently asked questions">
        <div class="mx-auto max-w-3xl px-4 sm:px-6">
          <div class="text-center mb-12"><p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3"><?php echo esc_html( bx_field( 'schools_faq_eyebrow', false, 'School marketing FAQ' ) ); ?></p><h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight"><?php echo esc_html( bx_field( 'schools_faq_heading', false, 'Your questions, answered' ) ); ?></h2></div>
          <div class="space-y-3">
            <?php bx_schools_render_faqs(); ?>
          </div>
        </div>
      </section>

      <!-- ===================== RELATED + CTA (shared design) ===================== -->
      <section class="pb-20 sm:pb-28 pt-4" aria-label="Related and contact">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-6"><?php echo esc_html( bx_field( 'schools_related_eyebrow', false, 'Explore more' ) ); ?></p>
          <div class="grid sm:grid-cols-3 gap-4 mb-12">
            <?php bx_schools_render_related(); ?>
          </div>
          <?php
          $schools_cta_btn       = get_field( 'schools_cta_button' );
          $schools_cta_btn_url   = is_array( $schools_cta_btn ) && ! empty( $schools_cta_btn['url'] ) ? $schools_cta_btn['url'] : '/contact/';
          $schools_cta_btn_label = is_array( $schools_cta_btn ) && ! empty( $schools_cta_btn['title'] ) ? $schools_cta_btn['title'] : 'Grow my admissions';
          ?>
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-60" aria-hidden="true"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
            	<div class="relative max-w-2xl py-16">
              <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]"><?php echo esc_html( bx_field( 'schools_cta_heading', false, "Let's fill your next admission season" ) ); ?></h2>
              <p class="text-paper/70 mt-5 text-lg max-w-xl"><?php echo esc_html( bx_field( 'schools_cta_text', false, "Tell us about your school — we'll map a plan to bring more admission enquiries, school visits and confirmed seats. Free, no obligation." ) ); ?></p>
              <div class="flex flex-wrap items-center gap-3 mt-9">
                <a href="<?php echo esc_url( $schools_cta_btn_url ); ?>" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light"><?php echo esc_html( $schools_cta_btn_label ); ?></span><iconify-icon icon="lucide:arrow-right" class="relative z-10" aria-hidden="true"></iconify-icon></a>
                <a href="<?php echo esc_url( bx_field( 'schools_cta_phone_href', false, 'tel:+918058212202' ) ); ?>" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:phone" class="relative z-10 shrink-0" aria-hidden="true"></iconify-icon><span class="relative z-10"><?php echo esc_html( bx_field( 'schools_cta_phone', false, '+91 80582 12202' ) ); ?></span></a>
              </div>
            </div>
            	<?php bx_cta_image( 'schools_cta_image', 'https://boostronixx.s3.ap-south-1.amazonaws.com/images/edtech-cta-image.avif', false, 'BoostronixX school & education marketing team in Jaipur', 420, 447 ); ?>
            </div>
          </div>
        </div>
      </section>
      </article>
    </main>

<?php
get_footer();
