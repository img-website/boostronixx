<?php
/**
 * Template Name: Portfolio — Mount Litera Zee School
 *
 * Case study: Mount Litera Zee School, Alwar — a warm, admissions-focused CBSE
 * school website + branding + digital presence. Design language is "warm
 * academic" (indigo/amber cues in the website & enquiry mocks) while keeping the
 * site accent for brand consistency. Photographic slots use bx_ph_figure()
 * placeholders (ACF images: mlz_*) so the client can add real screenshots later.
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
        <span class="orb orb-a" style="width:300px;height:300px;background:#6366f1;top:-20px;right:-40px"></span>
        <span class="orb orb-b" style="width:240px;height:240px;background:#f59e0b;bottom:-40px;left:-30px"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/portfolio/" class="hover:text-accent">Portfolio</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Mount Litera Zee School</span>
          </nav>

          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal flex flex-wrap items-center gap-2 text-xs mb-5">
                <span class="inline-flex items-center gap-1.5 rounded-full bg-indigo-500/10 text-indigo-700 font-medium px-3 py-1.5"><iconify-icon icon="lucide:graduation-cap"></iconify-icon> Education</span>
                <span class="rounded-full border border-line px-3 py-1.5">School Website</span>
                <span class="rounded-full border border-line px-3 py-1.5">2025</span>
              </div>
              <h1 class="reveal font-display text-[2.4rem] leading-[1.0] sm:text-6xl tt">
                A modern digital campus for <span class="text-accent">a great school</span>
              </h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">
                Mount Litera Zee School, Alwar is a CBSE-affiliated K-12 school on the
                Alwar-Bhiwadi highway, built on the Litera Octave approach and the eMountLitera
                platform. BoostronixX designed and built an admissions-focused website, refreshed
                the digital presence and shaped an SEO foundation so more Alwar parents discover,
                trust and enquire — the way a great school deserves to be found.
              </p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="#overview" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Explore the case study</span><iconify-icon icon="lucide:arrow-down" class="relative z-10"></iconify-icon></a>
                <a href="https://www.mlzsalwar.ac.in/" target="_blank" rel="noopener" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:external-link" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">Visit the live school</span></a>
              </div>
            </div>

            <!-- hero school website (desktop) mock -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="rounded-xl2 bg-[#0e1016] border border-white/10 p-3 shadow-[0_50px_100px_-50px_rgba(10,12,22,.6)] overflow-hidden">
                <div class="flex items-center gap-1.5 px-2 py-2">
                  <span class="h-2.5 w-2.5 rounded-full bg-white/15"></span><span class="h-2.5 w-2.5 rounded-full bg-white/15"></span><span class="h-2.5 w-2.5 rounded-full bg-white/15"></span>
                  <span class="ml-3 flex-1 rounded-full bg-white/6 px-3 py-1 text-[10px] text-paper/40 flex items-center gap-1.5"><iconify-icon icon="lucide:lock" class="text-indigo-400"></iconify-icon> mlzsalwar.ac.in</span>
                </div>
                <?php bx_ph_figure( 'mlz_hero_image', 'aspect-[1280/635] !rounded-xl !bg-[#12141d]', 'Website homepage', 'Mount Litera Zee School Alwar website homepage designed by BoostronixX', 1280, 635 ); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== OVERVIEW FACTS ===================== -->
      <section id="overview" class="border-y border-line bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid grid-cols-2 lg:grid-cols-4 gap-px bg-line">
          <div class="reveal bg-surface p-6"><p class="text-xs text-ink-soft">Client</p><p class="font-display text-lg tt mt-1">Mount Litera Zee School</p></div>
          <div class="reveal bg-surface p-6" data-delay="1"><p class="text-xs text-ink-soft">Category</p><p class="font-display text-lg tt mt-1">CBSE K-12 · Education</p></div>
          <div class="reveal bg-surface p-6" data-delay="2"><p class="text-xs text-ink-soft">Engagement</p><p class="font-display text-lg tt mt-1">Website · Branding · SEO</p></div>
          <div class="reveal bg-surface p-6" data-delay="3"><p class="text-xs text-ink-soft">Year / Location</p><p class="font-display text-lg tt mt-1">2025 · Alwar, Rajasthan</p></div>
        </div>
      </section>

      <!-- ===================== CHALLENGE ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10">
          <div class="lg:col-span-4">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The challenge</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">A great school that deserved a great first impression</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">For most Alwar parents, the admissions journey starts on a phone screen long before a campus visit. The school needed a digital front door as warm and credible as the education inside — one that answered a parent's real questions and made enquiring effortless, while keeping key CBSE details clear.</p>
          </div>
          <div class="lg:col-span-8 grid sm:grid-cols-2 gap-4">
            <div class="reveal lift rounded-2xl border border-line p-6"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:search"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Hard to discover</h3><p class="text-ink-soft text-sm mt-1.5">Parents searching for a trusted CBSE school in Alwar needed to find Mount Litera and grasp its difference fast.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:heart-handshake"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Trust to earn</h3><p class="text-ink-soft text-sm mt-1.5">A school site carries the weight of a family's biggest decision — it has to feel safe, warm and reassuring.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:file-check-2"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Clarity to deliver</h3><p class="text-ink-soft text-sm mt-1.5">Programs, the Litera Octave approach, campus life and CBSE details all had to be current and easy to navigate.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:smartphone"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Mobile-first reality</h3><p class="text-ink-soft text-sm mt-1.5">Most parents browse on the move, so every page had to load fast and read beautifully on a small screen.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== APPROACH (dark) ===================== -->
      <section class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden">
        <div class="absolute inset-0 grid-lines-d opacity-60"></div>
        <span class="orb" style="width:320px;height:320px;background:#6366f1;opacity:.2;top:-60px;right:8%"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The approach</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Design that feels like the school itself</h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1">We shaped a warm, academic design language — confident typography, calm whitespace and photography-led sections — that mirrors the school's promise of a great future for every child. Structure came first: a clear path from first impression to programs to an unmistakable admissions call-to-action.</p>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6"><span class="grid place-items-center h-11 w-11 rounded-xl bg-indigo-500 text-paper text-xl"><iconify-icon icon="lucide:palette"></iconify-icon></span><h3 class="font-display tt mt-4">Warm-academic identity</h3><p class="text-paper/55 text-sm mt-1.5">A trustworthy visual system — colour, type and tone — carried consistently across every page.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-indigo-500 text-paper text-xl"><iconify-icon icon="lucide:layout-dashboard"></iconify-icon></span><h3 class="font-display tt mt-4">Admissions-first IA</h3><p class="text-paper/55 text-sm mt-1.5">Navigation and page flow engineered around one job: reach the enquiry form.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-indigo-500 text-paper text-xl"><iconify-icon icon="lucide:graduation-cap"></iconify-icon></span><h3 class="font-display tt mt-4">Story of learning</h3><p class="text-paper/55 text-sm mt-1.5">The Litera Octave approach and eMountLitera platform, told simply so parents grasp the value.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="3"><span class="grid place-items-center h-11 w-11 rounded-xl bg-indigo-500 text-paper text-xl"><iconify-icon icon="lucide:image"></iconify-icon></span><h3 class="font-display tt mt-4">Campus, front and centre</h3><p class="text-paper/55 text-sm mt-1.5">Photo-led sections for classrooms, sports, arts and life-skills that let real school life persuade.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== FEATURES + ENQUIRY MOCK ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Key features</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Everything a parent needs, nothing in the way</h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">An inviting front end paired with the practical building blocks a modern CBSE school website needs — responsive, fast, and easy for the school to keep current through the year.</p>
            <div class="grid sm:grid-cols-2 gap-3 mt-8">
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:clipboard-pen-line"></iconify-icon></span><span class="font-medium text-sm">Admissions enquiry</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:book-open-check"></iconify-icon></span><span class="font-medium text-sm">Programs, Nursery–12</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:phone-call"></iconify-icon></span><span class="font-medium text-sm">One-tap contact</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:image-plus"></iconify-icon></span><span class="font-medium text-sm">Gallery &amp; campus life</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:shield-check"></iconify-icon></span><span class="font-medium text-sm">CBSE-ready info</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:gauge"></iconify-icon></span><span class="font-medium text-sm">Fast on mobile</span></div>
            </div>
          </div>
                    <!-- admissions experience image -->
          <div class="reveal" data-delay="1">
            <?php bx_ph_figure( 'mlz_features_image', 'aspect-[1076/869] bg-surface-2', 'Admissions experience', 'A family exploring the Mount Litera Zee School Alwar website on a phone', 1076, 869 ); ?>
          </div>
        </div>
      </section>

      <!-- ===================== SHOWCASE (image placeholders) ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The showcase</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A homepage that welcomes, then converts</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">The hero leads with the school's promise and an immediate admissions call-to-action, then guides parents through the approach, programs and campus life — fast and legible on mobile, breathing on desktop.</p>
          </div>
          <div class="grid lg:grid-cols-3 gap-5">
            <div class="reveal lg:col-span-2">
              <?php bx_ph_figure( 'mlz_website_image', 'aspect-[16/10] bg-surface-2', 'Website homepage', 'Mount Litera Zee School Alwar website homepage designed by BoostronixX', 1280, 800 ); ?>
              <p class="text-sm text-ink-soft mt-3">Website homepage · admissions-focused hero &amp; programs</p>
            </div>
            <div class="reveal" data-delay="1">
              <?php bx_ph_figure( 'mlz_mobile_image', 'aspect-[4/5] bg-surface-2', 'Mobile view', 'Responsive mobile view of the Mount Litera Zee School Alwar website with the enquiry form', 720, 900 ); ?>
              <p class="text-sm text-ink-soft mt-3">Responsive mobile &amp; admissions enquiry</p>
            </div>
          </div>
          <div class="reveal mt-5" data-delay="1">
            <?php bx_ph_figure( 'mlz_campus_image', 'aspect-[16/7] bg-surface-2', 'Campus gallery', 'Campus life gallery — classrooms, sports and activities at Mount Litera Zee School Alwar', 1600, 700 ); ?>
            <p class="text-sm text-ink-soft mt-3">Campus-life gallery · classrooms, sports, arts &amp; life-skills</p>
          </div>
        </div>
      </section>

      <!-- ===================== OUTCOMES ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The outcome</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">A digital front door the school is proud to share</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl bg-paper border border-line p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:heart-handshake"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">A presence parents trust</h3><p class="text-ink-soft text-sm mt-1.5">A warm, credible website that feels as caring and forward-looking as the school itself.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:clipboard-check"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Enquiries made effortless</h3><p class="text-ink-soft text-sm mt-1.5">A clear admissions journey and friendly enquiry flow that meet parents on their phones.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:compass"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Easy to find and follow</h3><p class="text-ink-soft text-sm mt-1.5">A clean, SEO-ready foundation that helps Alwar families discover the school and understand it fast.</p></div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:layers"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">A brand that holds together</h3><p class="text-ink-soft text-sm mt-1.5">One cohesive identity across every page and touchpoint, ready to grow with the school.</p></div>
          </div>

          <div class="reveal mt-12 rounded-xl2 bg-paper border border-line p-8 sm:p-12 relative overflow-hidden">
            <iconify-icon icon="lucide:quote" class="absolute right-6 top-6 text-6xl text-accent/10"></iconify-icon>
            <p class="font-display text-2xl sm:text-3xl tt leading-snug max-w-3xl relative">&ldquo;We set out to make the website feel the way a great campus feels — warm, ambitious and genuinely about the child — and to make the next step, an admissions enquiry, effortless for every parent.&rdquo;</p>
            <p class="text-ink-soft text-sm mt-5">— BoostronixX · Web &amp; Brand Design team</p>
          </div>
        </div>
      </section>

      <!-- ===================== NEXT / CTA ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="relative rounded-xl2 bg-ink text-paper px-6 sm:px-16 overflow-hidden">
            <div class="absolute inset-0 grid-lines-d opacity-[0.08]"></div>
            <div class="relative grid gap-12 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-center">
              <div class="relative max-w-2xl py-16">
                <p class="text-xs font-medium tracking-[.2em] uppercase text-accent mb-4">Education · School websites · Admissions</p>
                <h2 class="font-display text-3xl sm:text-5xl tt leading-[1.04]">Need a school website that fills seats?</h2>
                <p class="text-paper/70 mt-5 text-lg max-w-xl">We design admissions-focused websites, branding and SEO for schools — warm, fast and built to turn parents into enquiries.</p>
                <div class="flex flex-wrap items-center gap-3 mt-9">
                  <a href="/contact/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><span class="relative z-10 sheen-text-light">Start your project</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
                  <a href="/industries/schools/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-7 py-4 font-medium"><iconify-icon icon="lucide:school" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">Schools we serve</span></a>
                </div>
              </div>
              <?php bx_cta_image( 'mlz_cta_image', '', false, 'Start a school website project with BoostronixX — Mount Litera Zee School case study', 420, 464 ); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
