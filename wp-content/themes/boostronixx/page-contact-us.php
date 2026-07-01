<?php
/**
 * Template Name: Contact Us
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="top">
      <!-- ===================== HERO + FORM ===================== -->
      <section class="relative pt-24 sm:pt-28 pb-16 grid-lines overflow-hidden">
        <span class="orb orb-a" style="width: 320px; height: 320px; background: #fa5539; top: -40px; left: -60px"></span>
        <span class="orb orb-b" style="width: 280px; height: 280px; background: #ffb38a; bottom: -60px; right: 10%"></span>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6">
          <nav class="reveal flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
            <a href="/" class="hover:text-accent">Home</a>
            <iconify-icon icon="lucide:chevron-right" class="text-sm"></iconify-icon>
            <span class="text-ink font-medium">Contact</span>
          </nav>

          <div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-start">
            <!-- LEFT: intro + methods -->
            <div class="lg:col-span-5">
              <div class="reveal inline-flex items-center gap-2 rounded-full border border-line bg-paper px-3 py-1.5 text-xs font-medium text-ink-soft mb-5">
                <span class="live-dot inline-block h-2 w-2 rounded-full bg-accent"></span> Currently replying within 24 hours
              </div>
              <h1 class="reveal font-display text-[2.6rem] leading-[0.97] sm:text-6xl tt">
                Let's build<br />something <span class="text-accent">great</span>.
              </h1>
              <p class="reveal text-ink-soft mt-5 max-w-md leading-relaxed" data-delay="1">
                Tell us a little about your brand and where you want to grow. As a
                digital marketing agency in Jaipur, we'll come back with quick wins
                and a clear next step — no fluff, no obligation.
              </p>

              <div class="grid sm:grid-cols-2 gap-3 mt-8">
                <a href="tel:+918058212202" class="cmethod reveal rounded-2xl border border-line bg-paper p-5" data-delay="1">
                  <span class="cmethod-ico inline-grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:phone"></iconify-icon></span>
                  <p class="text-xs text-ink-soft mt-3">Call us</p>
                  <p class="font-display text-base tt mt-0.5">+91 80582 12202</p>
                </a>
                <a href="mailto:boostronixx@gmail.com" class="cmethod reveal rounded-2xl border border-line bg-paper p-5" data-delay="2">
                  <span class="cmethod-ico inline-grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:mail"></iconify-icon></span>
                  <p class="text-xs text-ink-soft mt-3">Email us</p>
                  <p class="font-display text-base tt mt-0.5 break-all">boostronixx@gmail.com</p>
                </a>
                <a href="https://wa.me/918058212202" class="cmethod reveal rounded-2xl border border-line bg-paper p-5" data-delay="2">
                  <span class="cmethod-ico inline-grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="simple-icons:whatsapp"></iconify-icon></span>
                  <p class="text-xs text-ink-soft mt-3">WhatsApp</p>
                  <p class="font-display text-base tt mt-0.5">Chat with us</p>
                </a>
                <div class="cmethod reveal rounded-2xl border border-line bg-paper p-5" data-delay="3">
                  <span class="cmethod-ico inline-grid place-items-center h-11 w-11 rounded-xl bg-surface text-accent text-xl"><iconify-icon icon="lucide:map-pin"></iconify-icon></span>
                  <p class="text-xs text-ink-soft mt-3">Visit</p>
                  <p class="font-display text-base tt mt-0.5 leading-tight">Nirman Nagar,<br />Jaipur, RJ</p>
                </div>
              </div>

              <div class="reveal flex items-center gap-3 mt-7" data-delay="3">
                <p class="text-xs text-ink-soft">Follow along</p>
                <div class="flex items-center gap-2">
                  <a href="https://www.linkedin.com/company/boostronixx" aria-label="LinkedIn" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:linkedin"></iconify-icon></a>
                  <a href="https://www.instagram.com/boostronixx/" aria-label="Instagram" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:instagram"></iconify-icon></a>
                  <a href="https://www.youtube.com/@boostronixx" aria-label="YouTube" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:youtube"></iconify-icon></a>
                </div>
              </div>
            </div>

            <!-- RIGHT: form -->
            <div class="lg:col-span-7">
              <div class="reveal bg-paper border border-line rounded-xl2 shadow-[0_40px_80px_-50px_rgba(10,10,10,0.45)] p-6 sm:p-9 relative" data-delay="1">
                <div class="absolute right-5 top-5 sm:right-7 sm:top-7 h-16 w-16 spin hidden sm:block">
                  <svg viewBox="0 0 100 100" class="w-full h-full">
                    <defs><path id="cir" d="M50,50 m-37,0 a37,37 0 1,1 74,0 a37,37 0 1,1 -74,0" /></defs>
                    <text font-size="9.5" font-family="Bricolage Grotesque" fill="#0a0a0a" letter-spacing="2"><textPath href="#cir">FREE AUDIT · NO OBLIGATION ·</textPath></text>
                  </svg>
                  <span class="absolute inset-0 grid place-items-center text-accent text-base"><iconify-icon icon="lucide:sparkles"></iconify-icon></span>
                </div>

                <h2 class="font-display text-2xl sm:text-3xl tt">Tell us about your project</h2>
                <p class="text-ink-soft text-sm mt-2">Fields marked <span class="text-accent">*</span> are required.</p>

                <form id="contactForm" class="mt-7 grid sm:grid-cols-2 gap-4" novalidate>
                  <div class="field">
                    <input id="name" name="name" type="text" placeholder=" " required />
                    <label for="name">Full name *</label>
                  </div>
                  <div class="field">
                    <input id="email" name="email" type="email" placeholder=" " required />
                    <label for="email">Email *</label>
                  </div>
                  <div class="field">
                    <input id="phone" name="phone" type="tel" placeholder=" " />
                    <label for="phone">Phone</label>
                  </div>
                  <div class="field">
                    <input id="company" name="company" type="text" placeholder=" " />
                    <label for="company">Company</label>
                  </div>
                  <div class="field float">
                    <select id="service" name="service" required>
                      <option value="" selected disabled hidden></option>
                      <option>Branding & Identity</option>
                      <option>SEO Services</option>
                      <option>Social Media Marketing</option>
                      <option>Performance Marketing</option>
                      <option>UI/UX & Website Design</option>
                      <option>Not sure yet</option>
                    </select>
                    <label for="service">Service needed *</label>
                    <span class="chev"><iconify-icon icon="lucide:chevron-down"></iconify-icon></span>
                  </div>
                  <div class="field float">
                    <select id="budget" name="budget">
                      <option value="" selected disabled hidden></option>
                      <option>Under ₹50k</option>
                      <option>₹50k – ₹1.5L</option>
                      <option>₹1.5L – ₹5L</option>
                      <option>₹5L+</option>
                    </select>
                    <label for="budget">Monthly budget</label>
                    <span class="chev"><iconify-icon icon="lucide:chevron-down"></iconify-icon></span>
                  </div>
                  <div class="field sm:col-span-2">
                    <textarea id="message" name="message" placeholder=" " required></textarea>
                    <label for="message">Tell us about your goals *</label>
                  </div>

                  <label class="sm:col-span-2 flex items-start gap-3 text-sm text-ink-soft cursor-pointer">
                    <input id="consent" type="checkbox" required class="mt-1 h-4 w-4 accent-[#fa5539]" />
                    <span>I agree to be contacted about my enquiry and accept the <a href="/privacy-policy/" class="underline underline-offset-2 decoration-accent text-ink">privacy policy</a>.</span>
                  </label>

                  <div class="sm:col-span-2 flex flex-wrap items-center gap-4 mt-1">
                    <button id="submitBtn" type="submit" class="group btn-glow inline-flex items-center justify-center gap-2 rounded-full px-7 py-4 font-medium min-w-[200px]">
                      <span id="btnLabel" class="relative z-10 sheen-text inline-flex items-center gap-2">Send message <iconify-icon icon="lucide:send" class="relative z-10"></iconify-icon></span>
                      <span id="btnSpinner" class="spinner hidden"></span>
                    </button>
                    <p class="text-xs text-ink-soft inline-flex items-center gap-1.5"><iconify-icon icon="lucide:shield-check" class="text-accent"></iconify-icon> Your details stay private.</p>
                  </div>
                  <p id="formError" class="sm:col-span-2 hidden text-sm text-accent font-medium"><iconify-icon icon="lucide:alert-circle"></iconify-icon> Please fill in all required fields correctly.</p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ===================== WHAT HAPPENS NEXT ===================== -->
      <section class="py-16 sm:py-20 bg-surface border-y border-line">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
          <div class="max-w-xl mb-10">
            <p class="reveal text-xs font-medium tracking-[.2em] uppercase text-accent mb-3">After you hit send</p>
            <h2 class="reveal font-display text-3xl sm:text-4xl tt leading-tight">What happens next</h2>
          </div>
          <div class="grid sm:grid-cols-3 gap-4">
            <div class="reveal rounded-2xl bg-paper border border-line p-6">
              <span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-ink text-paper text-lg"><iconify-icon icon="lucide:inbox"></iconify-icon></span>
              <p class="font-display text-lg tt mt-4">1 · We read it carefully</p>
              <p class="text-ink-soft text-sm mt-1.5">A real person reviews your brief — usually within a few hours on business days.</p>
            </div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="1">
              <span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-ink text-paper text-lg"><iconify-icon icon="lucide:phone-call"></iconify-icon></span>
              <p class="font-display text-lg tt mt-4">2 · We reach out</p>
              <p class="text-ink-soft text-sm mt-1.5">We reply within 24 hours to set up a free strategy call at a time that suits you.</p>
            </div>
            <div class="reveal rounded-2xl bg-paper border border-line p-6" data-delay="2">
              <span class="inline-grid place-items-center h-11 w-11 rounded-xl bg-ink text-paper text-lg"><iconify-icon icon="lucide:map"></iconify-icon></span>
              <p class="font-display text-lg tt mt-4">3 · You get a roadmap</p>
              <p class="text-ink-soft text-sm mt-1.5">Quick wins and a proposed plan — clear, costed and obligation-free.</p>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
