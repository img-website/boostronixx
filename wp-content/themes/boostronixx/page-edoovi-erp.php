<?php
/**
 * Template Name: Edoovi ERP
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
        <span class="orb orb-a" style="width:300px;height:300px;background:#fa5539;top:0;right:-40px"></span>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <a href="/portfolio/" class="hover:text-accent">Portfolio</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Edoovi ERP</span>
          </nav>

          <div class="grid lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
              <div class="reveal flex flex-wrap items-center gap-2 text-xs mb-5">
                <span class="rounded-full bg-accent/10 text-accent font-medium px-3 py-1.5">SaaS Software</span>
                <span class="rounded-full border border-line px-3 py-1.5">EdTech</span>
                <span class="rounded-full border border-line px-3 py-1.5">2025</span>
              </div>
              <h1 class="reveal font-display text-[2.4rem] leading-[1.0] sm:text-6xl tt">
                Edoovi — smart ERP for <span class="text-accent">modern schools</span>
              </h1>
              <p class="reveal text-ink-soft mt-5 max-w-lg leading-relaxed" data-delay="1">
                A UI/UX design case study in SaaS product design — how we streamlined
                operations, connected every stakeholder and helped schools scale faster
                with an all-in-one, AI-powered ERP and mobile-app ecosystem, designed
                end to end by BoostronixX.
              </p>
              <div class="reveal flex flex-wrap items-center gap-3 mt-7" data-delay="2">
                <a href="#overview" class="group btn-glow inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><span class="relative z-10 sheen-text">Explore the case study</span><iconify-icon icon="lucide:arrow-down" class="relative z-10"></iconify-icon></a>
                <a href="/contact/" class="group btn-glow-light inline-flex items-center gap-2 rounded-full px-6 py-3.5 font-medium"><iconify-icon icon="lucide:rocket" class="relative z-10 shrink-0"></iconify-icon><span class="relative z-10">Build something like this</span></a>
              </div>
            </div>

            <!-- hero dashboard mock -->
            <div class="lg:col-span-6 reveal" data-delay="1">
              <div class="rounded-xl2 bg-[#0e0e0e] border border-white/10 p-5 sm:p-7 overflow-hidden">
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center gap-2 text-paper"><span class="grid place-items-center h-7 w-7 rounded-lg bg-accent text-xs font-bold">E</span><span class="font-display tt text-sm">Edoovi · Admin</span></div>
                  <span class="inline-flex items-center gap-1.5 rounded-full bg-white/8 px-2.5 py-1 text-[10px] text-paper/60"><span class="live inline-block h-1.5 w-1.5 rounded-full bg-accent"></span> live</span>
                </div>
                <div class="grid grid-cols-[70px_1fr] gap-3">
                  <div class="rounded-xl bg-white/5 p-2 space-y-2">
                    <span class="pop p1 grid place-items-center h-9 rounded-lg bg-accent/80 text-paper text-sm"><iconify-icon icon="lucide:layout-dashboard"></iconify-icon></span>
                    <span class="pop p2 grid place-items-center h-9 rounded-lg bg-white/10 text-paper/60 text-sm"><iconify-icon icon="lucide:users"></iconify-icon></span>
                    <span class="pop p3 grid place-items-center h-9 rounded-lg bg-white/10 text-paper/60 text-sm"><iconify-icon icon="lucide:calendar-check"></iconify-icon></span>
                    <span class="pop p4 grid place-items-center h-9 rounded-lg bg-white/10 text-paper/60 text-sm"><iconify-icon icon="lucide:bus"></iconify-icon></span>
                    <span class="pop p5 grid place-items-center h-9 rounded-lg bg-white/10 text-paper/60 text-sm"><iconify-icon icon="lucide:wallet"></iconify-icon></span>
                  </div>
                  <div class="space-y-3">
                    <div class="grid grid-cols-3 gap-2">
                      <div class="pop p1 rounded-xl bg-white/5 p-2.5"><p class="text-[9px] text-paper/40">Students</p><p class="font-display tt text-paper text-lg"><span class="count" data-to="2480">0</span></p></div>
                      <div class="pop p2 rounded-xl bg-white/5 p-2.5"><p class="text-[9px] text-paper/40">Attendance</p><p class="font-display tt text-accent text-lg"><span class="count" data-to="96">0</span>%</p></div>
                      <div class="pop p3 rounded-xl bg-white/5 p-2.5"><p class="text-[9px] text-paper/40">On route</p><p class="font-display tt text-paper text-lg"><span class="count" data-to="32">0</span></p></div>
                    </div>
                    <div class="rounded-xl bg-white/5 p-3">
                      <div class="flex items-center justify-between mb-2"><span class="text-[10px] text-paper/40">Fee collection · this term</span><span class="text-[10px] text-accent">+<span class="count" data-to="18">0</span>%</span></div>
                      <div class="flex items-end gap-1.5 h-20">
                        <div class="bar" style="--h:40%;width:11%;background:linear-gradient(180deg,#ffffff,transparent);opacity:.3"></div>
                        <div class="bar" style="--h:55%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                        <div class="bar" style="--h:48%;width:11%;background:linear-gradient(180deg,#ffffff,transparent);opacity:.3"></div>
                        <div class="bar" style="--h:70%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                        <div class="bar" style="--h:60%;width:11%;background:linear-gradient(180deg,#ffffff,transparent);opacity:.3"></div>
                        <div class="bar" style="--h:84%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                        <div class="bar" style="--h:96%;width:11%;background:linear-gradient(180deg,#fa5539,transparent)"></div>
                      </div>
                    </div>
                    <div class="pop p4 rounded-xl bg-white/5 p-2.5 flex items-center gap-2 text-paper/70 text-[11px]"><iconify-icon icon="lucide:sparkles" class="text-accent"></iconify-icon> AI insight: 3 classes need attendance follow-up<span class="caret"></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== OVERVIEW FACTS ===================== -->
      <section id="overview" class="border-y border-line bg-surface">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid grid-cols-2 lg:grid-cols-4 gap-px bg-line">
          <div class="reveal bg-surface p-6"><p class="text-xs text-ink-soft">Client</p><p class="font-display text-xl tt mt-1">Edoovi ERP</p></div>
          <div class="reveal bg-surface p-6" data-delay="1"><p class="text-xs text-ink-soft">Category</p><p class="font-display text-xl tt mt-1">SaaS Software</p></div>
          <div class="reveal bg-surface p-6" data-delay="2"><p class="text-xs text-ink-soft">Engagement</p><p class="font-display text-xl tt mt-1">UI/UX &amp; Consulting</p></div>
          <div class="reveal bg-surface p-6" data-delay="3"><p class="text-xs text-ink-soft">Started</p><p class="font-display text-xl tt mt-1">Jan 2025</p></div>
        </div>
      </section>

      <!-- ===================== CHALLENGE ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-12 gap-10">
          <div class="lg:col-span-4">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The challenge</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">Schools were running on fragmented, manual systems</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">Institutions juggled disconnected tools, paperwork and phone calls — slowing everyone down and leaving leaders without a real-time view.</p>
          </div>
          <div class="lg:col-span-8 grid sm:grid-cols-2 gap-4">
            <div class="reveal lift rounded-2xl border border-line p-6"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:unplug"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Fragmented communication</h3><p class="text-ink-soft text-sm mt-1.5">Stakeholders scattered across WhatsApp, calls and registers.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:file-clock"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Manual, error-prone work</h3><p class="text-ink-soft text-sm mt-1.5">Paperwork causing delays, mistakes and duplicated effort.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:eye-off"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">No real-time tracking</h3><p class="text-ink-soft text-sm mt-1.5">Academic and operational data was always a step behind.</p></div>
            <div class="reveal lift rounded-2xl border border-line p-6" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:puzzle"></iconify-icon></span><h3 class="font-display text-lg tt mt-4">Poor integration</h3><p class="text-ink-soft text-sm mt-1.5">Departments worked in silos with no shared source of truth.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== SOLUTION ===================== -->
      <section class="py-20 sm:py-28 bg-ink text-paper relative overflow-hidden">
        <div class="absolute inset-0 grid-lines-d opacity-60"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The solution</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">One AI-powered platform for the whole school</h2>
            <p class="reveal text-paper/60 mt-5 leading-relaxed" data-delay="1">Our product design work paired an ERP and mobile-app ecosystem that streamlines operations with an experience that connects every stakeholder — from the front office to the parent's pocket.</p>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6"><span class="grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl"><iconify-icon icon="lucide:layout-dashboard"></iconify-icon></span><h3 class="font-display tt mt-4">Centralised dashboard</h3><p class="text-paper/55 text-sm mt-1.5">A single control room for the whole institution.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="1"><span class="grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl"><iconify-icon icon="lucide:smartphone"></iconify-icon></span><h3 class="font-display tt mt-4">Role-based apps</h3><p class="text-paper/55 text-sm mt-1.5">Tailored views for every kind of user.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="2"><span class="grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl"><iconify-icon icon="lucide:users-round"></iconify-icon></span><h3 class="font-display tt mt-4">Parent &amp; student apps</h3><p class="text-paper/55 text-sm mt-1.5">Everyone stays in the loop, in real time.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="3"><span class="grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl"><iconify-icon icon="lucide:settings-2"></iconify-icon></span><h3 class="font-display tt mt-4">Automated admin</h3><p class="text-paper/55 text-sm mt-1.5">Routine tasks handled without the busywork.</p></div>
            <div class="reveal rounded-2xl bg-white/5 border border-white/10 p-6" data-delay="4"><span class="grid place-items-center h-11 w-11 rounded-xl bg-accent text-paper text-xl"><iconify-icon icon="lucide:radio"></iconify-icon></span><h3 class="font-display tt mt-4">Real-time comms</h3><p class="text-paper/55 text-sm mt-1.5">Instant updates across every stakeholder.</p></div>
          </div>
        </div>
      </section>

      <!-- ===================== STAKEHOLDERS ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Built for everyone</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">Every stakeholder, one ecosystem</h2>
            <p class="reveal text-ink-soft mt-5 leading-relaxed" data-delay="1">We mapped ten distinct roles and designed the right experience for each — so the whole school moves together.</p>
          </div>
          <div class="reveal grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3" data-delay="1">
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:briefcase"></iconify-icon></span><span class="font-medium text-sm">Director</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:graduation-cap"></iconify-icon></span><span class="font-medium text-sm">Principal</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:clipboard-list"></iconify-icon></span><span class="font-medium text-sm">Admin</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:phone-call"></iconify-icon></span><span class="font-medium text-sm">Receptionist</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:presentation"></iconify-icon></span><span class="font-medium text-sm">Teacher</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:library"></iconify-icon></span><span class="font-medium text-sm">Librarian</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:bus-front"></iconify-icon></span><span class="font-medium text-sm">Driver</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:shield"></iconify-icon></span><span class="font-medium text-sm">Security</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:users"></iconify-icon></span><span class="font-medium text-sm">Parent</span></div>
            <div class="stake rounded-2xl border border-line p-4 flex flex-col items-center text-center gap-2"><span class="stake-i text-accent text-2xl"><iconify-icon icon="lucide:backpack"></iconify-icon></span><span class="font-medium text-sm">Student</span></div>
          </div>
        </div>
      </section>

      <!-- ===================== FEATURES + SHOWCASE ===================== -->
      <section class="py-20 sm:py-28 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">Key features</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">A cloud system that runs the whole day</h2>
            <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">From morning attendance to evening fee reports — academics, transport, communication and finance, integrated with real-time access and automation.</p>
            <div class="grid sm:grid-cols-2 gap-3 mt-8">
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:book-open"></iconify-icon></span><span class="font-medium text-sm">Academics</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:calendar-check"></iconify-icon></span><span class="font-medium text-sm">Attendance</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:message-square"></iconify-icon></span><span class="font-medium text-sm">Communication</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:bus"></iconify-icon></span><span class="font-medium text-sm">Transport</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4"><span class="text-accent text-xl"><iconify-icon icon="lucide:wallet"></iconify-icon></span><span class="font-medium text-sm">Finance &amp; fees</span></div>
              <div class="reveal flex items-center gap-3 rounded-xl border border-line bg-paper p-4" data-delay="1"><span class="text-accent text-xl"><iconify-icon icon="lucide:cloud"></iconify-icon></span><span class="font-medium text-sm">Cloud &amp; automation</span></div>
            </div>
          </div>
          <!-- parent app showcase -->
          <div class="reveal flex justify-center" data-delay="1">
            <div class="w-[290px] rounded-[2.4rem] bg-[#0e0e0e] border border-white/12 p-4 shadow-[0_50px_100px_-50px_rgba(10,10,10,.6)]">
              <div class="flex justify-center"><span class="h-1.5 w-14 rounded-full bg-white/15"></span></div>
              <div class="mt-4 flex items-center justify-between text-paper">
                <div class="flex items-center gap-2"><span class="grid place-items-center h-8 w-8 rounded-lg bg-accent text-xs font-bold">E</span><div class="leading-tight"><p class="text-sm font-semibold">Hi, Meera</p><p class="text-[10px] text-paper/40">Parent · Class 6-B</p></div></div>
                <span class="relative grid place-items-center h-8 w-8 rounded-full bg-white/8 text-paper"><iconify-icon icon="lucide:bell"></iconify-icon><span class="absolute top-1 right-1 h-2 w-2 rounded-full bg-accent"></span></span>
              </div>
              <div class="grid grid-cols-2 gap-2.5 mt-4">
                <div class="pop p1 rounded-2xl bg-white/5 p-3.5"><iconify-icon icon="lucide:calendar-check" class="text-accent text-xl"></iconify-icon><p class="text-[10px] text-paper/45 mt-2">Attendance</p><p class="font-display tt text-paper">Present</p></div>
                <div class="pop p2 rounded-2xl bg-white/5 p-3.5"><iconify-icon icon="lucide:book-open" class="text-accent text-xl"></iconify-icon><p class="text-[10px] text-paper/45 mt-2">Homework</p><p class="font-display tt text-paper"><span class="count" data-to="3">0</span> new</p></div>
                <div class="pop p3 rounded-2xl bg-white/5 p-3.5"><iconify-icon icon="lucide:bus" class="text-accent text-xl"></iconify-icon><p class="text-[10px] text-paper/45 mt-2">Bus arriving</p><p class="font-display tt text-paper"><span class="count" data-to="5">0</span> min</p></div>
                <div class="pop p4 rounded-2xl bg-white/5 p-3.5"><iconify-icon icon="lucide:wallet" class="text-accent text-xl"></iconify-icon><p class="text-[10px] text-paper/45 mt-2">Term fees</p><p class="font-display tt text-accent">Paid</p></div>
              </div>
              <div class="mt-3 rounded-2xl bg-white/5 p-3 flex items-center gap-2 text-paper/70 text-[11px]"><iconify-icon icon="lucide:message-circle" class="text-accent"></iconify-icon> Ms. Rao: "Great progress in maths!"</div>
              <div class="mt-3 rounded-full bg-accent text-paper text-center text-xs font-medium py-2.5">Open report card</div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== OUTCOMES ===================== -->
      <section class="py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-2xl mb-12">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">The outcome</p>
            <h2 class="reveal font-display text-3xl sm:text-5xl tt leading-tight">From scattered to seamless</h2>
          </div>
          <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="reveal rounded-2xl border border-line p-6"><span class="text-accent text-2xl"><iconify-icon icon="lucide:layers"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">One source of truth</h3><p class="text-ink-soft text-sm mt-1.5">Every department working from the same live data.</p></div>
            <div class="reveal rounded-2xl border border-line p-6" data-delay="1"><span class="text-accent text-2xl"><iconify-icon icon="lucide:zap"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Less manual work</h3><p class="text-ink-soft text-sm mt-1.5">Routine admin automated, freeing up staff time.</p></div>
            <div class="reveal rounded-2xl border border-line p-6" data-delay="2"><span class="text-accent text-2xl"><iconify-icon icon="lucide:radar"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Real-time visibility</h3><p class="text-ink-soft text-sm mt-1.5">Leaders see academics and operations as they happen.</p></div>
            <div class="reveal rounded-2xl border border-line p-6" data-delay="3"><span class="text-accent text-2xl"><iconify-icon icon="lucide:heart-handshake"></iconify-icon></span><h3 class="font-display text-lg tt mt-3">Connected community</h3><p class="text-ink-soft text-sm mt-1.5">Parents, students and staff aligned on one platform.</p></div>
          </div>

          <!-- pull quote -->
          <div class="reveal mt-12 rounded-xl2 bg-surface border border-line p-8 sm:p-12 relative overflow-hidden">
            <iconify-icon icon="lucide:quote" class="absolute right-6 top-6 text-6xl text-accent/10"></iconify-icon>
            <p class="font-display text-2xl sm:text-3xl tt leading-snug max-w-3xl relative">"We set out to replace a tangle of manual processes with one calm, connected system — and design every screen so it just makes sense, for a principal or a parent."</p>
            <p class="text-ink-soft text-sm mt-5">— BoostronixX · Product &amp; Design team</p>
          </div>
        </div>
      </section>

      <!-- ===================== NEXT / CTA ===================== -->
      <section class="pb-20 sm:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 grid lg:grid-cols-2 gap-5">
          <!-- next project -->
          <a href="/portfolio/" class="reveal group rounded-xl2 border border-line p-8 flex items-center justify-between hover:border-accent transition">
            <div>
              <p class="text-xs text-ink-soft mb-2">Back to</p>
              <h3 class="font-display text-2xl sm:text-3xl tt">All projects</h3>
              <p class="text-ink-soft text-sm mt-1">See the rest of our work</p>
            </div>
            <span class="grid place-items-center h-12 w-12 rounded-full border border-line group-hover:bg-accent group-hover:border-accent group-hover:text-paper transition"><iconify-icon icon="lucide:layout-grid" class="text-xl"></iconify-icon></span>
          </a>
          <!-- cta -->
          <div class="reveal rounded-xl2 bg-ink text-paper p-8 relative overflow-hidden" data-delay="1">
            <div class="absolute inset-0 grid-lines-d opacity-60"></div>
            <div class="relative">
              <h3 class="font-display text-2xl sm:text-3xl tt">Have a product in mind?</h3>
              <p class="text-paper/60 mt-2 max-w-sm">Let's design it end to end — strategy, UI/UX and a system that scales.</p>
              <a href="/contact/" class="group btn-glow-accent inline-flex items-center gap-2 rounded-full px-6 py-3.5 mt-6 font-medium"><span class="relative z-10 sheen-text-light">Start your project</span><iconify-icon icon="lucide:arrow-right" class="relative z-10"></iconify-icon></a>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
