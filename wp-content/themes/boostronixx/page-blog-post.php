<?php
/**
 * Template Name: Blog Post
 *
 * @package BoostronixX
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="article">
      <article>
        <!-- ARTICLE HERO -->
        <header class="pt-28 sm:pt-36 pb-8 grid-lines">
          <div class="mx-auto max-w-3xl px-4 sm:px-6">
            <nav class="flex items-center gap-2 text-xs text-ink-soft mb-6" aria-label="Breadcrumb">
              <a href="/" class="hover:text-accent">Home</a>
              <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
              <a href="/blog/" class="hover:text-accent">Blog</a>
              <iconify-icon icon="lucide:chevron-right" class="text-sm" aria-hidden="true"></iconify-icon>
              <span class="text-ink font-medium" aria-current="page">Branding vs. Marketing</span>
            </nav>
            <a href="blog.html?cat=branding" class="inline-flex items-center gap-1.5 rounded-full bg-accent/10 text-accent text-xs font-medium px-3 py-1.5">Branding</a>
            <h1 class="font-display text-[2.2rem] leading-[1.05] sm:text-5xl tt mt-5">Branding vs. Marketing: what your business actually needs first</h1>
            <p class="text-ink-soft text-lg mt-5 leading-relaxed">Everyone says you need both. True — but the order you invest in them decides how far your money goes. Here's a clear way to choose, plus a 2-minute self-test.</p>

            <!-- byline -->
            <div class="flex flex-wrap items-center gap-x-4 gap-y-3 mt-7 pt-6 border-t border-line">
              <div class="flex items-center gap-3">
                <img src="/wp-content/themes/boostronixx/assets/img/author-aarav.avif" alt="Aarav Sharma" class="h-11 w-11 rounded-full object-cover bg-surface-2" onerror="this.outerHTML='<span class=&quot;grid place-items-center h-11 w-11 rounded-full bg-ink text-paper font-display&quot; aria-hidden=&quot;true&quot;>A</span>'" />
                <div class="text-sm leading-tight">
                  <p class="font-medium">By Aarav Sharma</p>
                  <p class="text-ink-soft text-xs">Brand Strategy Lead · BoostronixX</p>
                </div>
              </div>
              <span class="hidden sm:block h-8 w-px bg-line" aria-hidden="true"></span>
              <div class="flex items-center gap-4 text-xs text-ink-soft">
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:calendar" aria-hidden="true"></iconify-icon> <time datetime="2026-06-02">Jun 2, 2026</time></span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:refresh-cw" aria-hidden="true"></iconify-icon> Updated <time datetime="2026-06-10">Jun 10</time></span>
                <span class="inline-flex items-center gap-1.5"><iconify-icon icon="lucide:clock" aria-hidden="true"></iconify-icon> 8 min read</span>
              </div>
              <!-- share -->
              <div class="ml-auto flex items-center gap-2" aria-label="Share this article">
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://www.boostronixx.com/blog/branding-vs-marketing/" aria-label="Share on LinkedIn" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:linkedin" aria-hidden="true"></iconify-icon></a>
                <a href="https://twitter.com/intent/tweet?url=https://www.boostronixx.com/blog/branding-vs-marketing/" aria-label="Share on X" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:x" aria-hidden="true"></iconify-icon></a>
                <a href="https://wa.me/?text=https://www.boostronixx.com/blog/branding-vs-marketing/" aria-label="Share on WhatsApp" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="simple-icons:whatsapp" aria-hidden="true"></iconify-icon></a>
                <button id="copyLink" aria-label="Copy link" class="grid place-items-center h-9 w-9 rounded-full border border-line hover:bg-ink hover:text-paper transition"><iconify-icon icon="lucide:link" aria-hidden="true"></iconify-icon></button>
              </div>
            </div>
          </div>
        </header>

        <!-- FEATURED IMAGE 16:9 -->
        <div class="mx-auto max-w-5xl px-4 sm:px-6">
          <figure class="imgph rounded-xl2 aspect-video">
            <img src="/wp-content/themes/boostronixx/assets/img/blog-branding-vs-marketing-hero.avif" alt="A brand logo on one side and a megaphone with charts on the other, illustrating branding versus marketing" loading="eager" onerror="this.remove()" />
            <figcaption class="lbl"><b>Hero 16:9 · 1600×900</b><span>Lead editorial image for the article — branding (identity) vs marketing (reach), bold and on-brand.</span></figcaption>
          </figure>
        </div>

        <!-- BODY -->
        <div class="mx-auto max-w-7xl px-4 sm:px-6 mt-12 grid lg:grid-cols-12 gap-10 lg:gap-14">
          <!-- TOC (desktop) -->
          <aside class="hidden lg:block lg:col-span-3">
            <div class="sticky top-28">
              <p class="text-xs font-medium tracking-[.2em] uppercase text-ink-soft mb-3">On this page</p>
              <nav id="toc" aria-label="Table of contents" class="flex flex-col">
                <a href="#answer" class="toc-link">The 30-second answer</a>
                <a href="#branding" class="toc-link">What branding actually is</a>
                <a href="#marketing" class="toc-link">What marketing actually is</a>
                <a href="#order" class="toc-link">Why the order matters</a>
                <a href="#test" class="toc-link">A 2-minute self-test</a>
                <a href="#together" class="toc-link">How they work together</a>
                <a href="#start" class="toc-link">Where to start today</a>
                <a href="#faq" class="toc-link">FAQ</a>
              </nav>
              <a href="/contact-us/" class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-ink hover:text-accent">Need help deciding? <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></a>
            </div>
          </aside>

          <!-- CONTENT -->
          <div class="lg:col-span-9">
            <div class="prose max-w-[68ch]">
              <!-- mobile TOC -->
              <details class="lg:hidden rounded-2xl border border-line bg-surface p-4 mb-8 not-prose">
                <summary class="font-display tt text-base cursor-pointer flex items-center justify-between">On this page <iconify-icon icon="lucide:chevron-down" aria-hidden="true"></iconify-icon></summary>
                <nav aria-label="Table of contents" class="mt-3 flex flex-col gap-1 text-sm">
                  <a href="#answer" class="py-1 text-ink-soft hover:text-accent">The 30-second answer</a>
                  <a href="#branding" class="py-1 text-ink-soft hover:text-accent">What branding actually is</a>
                  <a href="#marketing" class="py-1 text-ink-soft hover:text-accent">What marketing actually is</a>
                  <a href="#order" class="py-1 text-ink-soft hover:text-accent">Why the order matters</a>
                  <a href="#test" class="py-1 text-ink-soft hover:text-accent">A 2-minute self-test</a>
                  <a href="#together" class="py-1 text-ink-soft hover:text-accent">How they work together</a>
                  <a href="#start" class="py-1 text-ink-soft hover:text-accent">Where to start today</a>
                  <a href="#faq" class="py-1 text-ink-soft hover:text-accent">FAQ</a>
                </nav>
              </details>

              <p>If you've ever stared at a budget wondering whether to spend it on a new logo or a round of ads, you're asking the right question — just maybe in the wrong order. The branding vs marketing debate isn't really about which one wins: <strong>branding and marketing aren't rivals.</strong> They're two halves of the same growth engine. But when money and time are limited, a clear brand strategy and the right sequence are everything.</p>

              <h2 id="answer">The 30-second answer</h2>
              <p>Here's the shortcut, before the detail:</p>
              <ul>
                <li><strong>Brand first</strong> if people don't understand who you are, what you stand for, or why you're different.</li>
                <li><strong>Marketing first</strong> if your brand is already clear and consistent, but not enough people know you exist.</li>
              </ul>
              <p>Most early-stage businesses get the most leverage from getting the brand right <em>before</em> pouring money into reach. Spending on ads to send traffic to a confusing, forgettable brand is like filling a leaky bucket faster.</p>

              <div class="callout accent not-prose">
                <span class="text-accent text-xl shrink-0" aria-hidden="true"><iconify-icon icon="lucide:lightbulb"></iconify-icon></span>
                <p class="text-sm leading-relaxed text-ink">Rule of thumb: marketing brings people to the door. Branding decides whether they walk in — and whether they tell a friend.</p>
              </div>

              <h2 id="branding">What branding actually is</h2>
              <p>Branding isn't your logo. Your logo is a <em>symbol</em> of your brand. Branding is the whole impression people carry around about you — the promise you make and how reliably you keep it.</p>
              <p>A strong brand answers three questions instantly:</p>
              <ul>
                <li><strong>Who are you?</strong> Your name, look and personality.</li>
                <li><strong>What do you stand for?</strong> Your positioning and values.</li>
                <li><strong>Why should I care?</strong> The specific value only you offer.</li>
              </ul>
              <p>Done well, branding makes you <strong>recognisable, trusted and memorable</strong> — three things no amount of ad spend can buy on their own.</p>

              <figure>
                <div class="imgph rounded-xl2 aspect-video">
                  <img src="/wp-content/themes/boostronixx/assets/img/blog-brand-system.avif" alt="A brand system showing logo, colour palette and typography laid out together" loading="lazy" onerror="this.remove()" />
                  <figcaption class="lbl" style="position:absolute"><b>Inline 16:9 · 1600×900</b><span>Brand system example — logo, palette and type working together.</span></figcaption>
                </div>
                <figcaption>A coherent brand system makes every touchpoint feel like it belongs to the same story.</figcaption>
              </figure>

              <h2 id="marketing">What marketing actually is</h2>
              <p>If branding is who you are, marketing is how you get in front of the right people and move them to act. It's the engine of <strong>reach and conversion</strong>: SEO, content, social, email and paid ads, all pointed at measurable outcomes.</p>
              <p>Great marketing does three jobs:</p>
              <ol>
                <li>Puts you in front of people who are likely to buy.</li>
                <li>Gives them a reason — and an easy way — to take the next step.</li>
                <li>Measures what's working so you can do more of it.</li>
              </ol>
              <p>But here's the catch: marketing amplifies whatever brand it points to. Amplify a clear, compelling brand and you compound. Amplify a fuzzy one and you just spend faster.</p>

              <blockquote>
                <p>"Marketing without branding is noise. Branding without marketing is a secret."</p>
              </blockquote>

              <h2 id="order">Why the order matters</h2>
              <p>Imagine two coffee shops on the same street with the same ad budget. One has a clear identity — a name, look and feeling people remember and repeat. The other is generic. Both run the same ads. The first turns clicks into regulars; the second turns clicks into one-time visits.</p>
              <p>That difference isn't the ads. It's the brand the ads were pointing at. Getting the brand right first means <strong>every rupee of marketing afterwards works harder</strong> — better click-through, better conversion, better word of mouth. So when to invest in branding comes down to a simple test: if the ads would point at something unclear, that's your cue to shape the brand strategy first.</p>

              <h2 id="test">A 2-minute self-test</h2>
              <p>Answer honestly. Count your "yes" answers in each group.</p>
              <h3>Group A — your brand</h3>
              <ul>
                <li>Could a stranger describe what you do in one sentence after seeing your site?</li>
                <li>Do all your channels look and sound like the same company?</li>
                <li>Can you state, clearly, why someone should choose you over a competitor?</li>
              </ul>
              <h3>Group B — your reach</h3>
              <ul>
                <li>Is your brand clear and consistent, but traffic and leads are low?</li>
                <li>Do people who find you tend to convert and come back?</li>
                <li>Are you confident your offer lands — you just need more eyes on it?</li>
              </ul>
              <div class="callout not-prose">
                <span class="text-accent text-xl shrink-0" aria-hidden="true"><iconify-icon icon="lucide:check-check"></iconify-icon></span>
                <p class="text-sm leading-relaxed text-ink">More "yes" in <strong>Group A</strong>? Invest in <strong>branding</strong> first. More "yes" in <strong>Group B</strong>? Lead with <strong>marketing</strong>. Tied? Start with a light brand tune-up, then scale marketing.</p>
              </div>

              <h2 id="together">How they work together</h2>
              <p>Once your brand is clear, branding and marketing stop being a "which first" question and become a flywheel:</p>
              <ul>
                <li><strong>Brand</strong> sets the message, look and promise.</li>
                <li><strong>Marketing</strong> carries that message to the right audience.</li>
                <li><strong>Results</strong> teach you what resonates — which sharpens the brand.</li>
              </ul>
              <p>That loop is exactly how the strongest businesses compound: a recognisable brand that earns trust, amplified by marketing that's accountable to real outcomes.</p>

              <h2 id="start">Where to start today</h2>
              <p>You don't need a six-month rebrand to begin. Start small:</p>
              <ol>
                <li>Write one clear sentence: "We help [who] do [what] so they can [outcome]."</li>
                <li>Make your logo, colours and tone consistent across every channel.</li>
                <li>Pick the <em>one</em> marketing channel where your customers already are — and do it well.</li>
                <li>Measure, learn, and reinvest in what works.</li>
              </ol>

              <!-- key takeaways -->
              <div class="takeaways not-prose mt-10">
                <p class="font-display tt text-lg mb-4 flex items-center gap-2"><iconify-icon icon="lucide:sparkles" class="text-accent" aria-hidden="true"></iconify-icon> Key takeaways</p>
                <ul class="space-y-2.5 text-sm text-paper/80">
                  <li class="flex gap-2.5"><iconify-icon icon="lucide:check" class="text-accent mt-0.5 shrink-0" aria-hidden="true"></iconify-icon> Branding = who you are; marketing = how you reach people.</li>
                  <li class="flex gap-2.5"><iconify-icon icon="lucide:check" class="text-accent mt-0.5 shrink-0" aria-hidden="true"></iconify-icon> If your brand is unclear, fix that before scaling ads.</li>
                  <li class="flex gap-2.5"><iconify-icon icon="lucide:check" class="text-accent mt-0.5 shrink-0" aria-hidden="true"></iconify-icon> Marketing amplifies whatever brand it points to — for better or worse.</li>
                  <li class="flex gap-2.5"><iconify-icon icon="lucide:check" class="text-accent mt-0.5 shrink-0" aria-hidden="true"></iconify-icon> Together they form a flywheel: brand → reach → results → sharper brand.</li>
                </ul>
              </div>
            </div>

            <!-- TAGS -->
            <div class="max-w-[68ch] mt-10 flex flex-wrap items-center gap-2">
              <span class="text-xs text-ink-soft">Tags:</span>
              <a href="/blog/" class="rounded-full border border-line px-3 py-1.5 text-xs hover:border-accent hover:text-accent transition">Branding</a>
              <a href="/blog/" class="rounded-full border border-line px-3 py-1.5 text-xs hover:border-accent hover:text-accent transition">Strategy</a>
              <a href="/blog/" class="rounded-full border border-line px-3 py-1.5 text-xs hover:border-accent hover:text-accent transition">Marketing</a>
            </div>

            <!-- AUTHOR BIO (E-E-A-T) -->
            <div class="max-w-[68ch] mt-10 rounded-xl2 border border-line bg-surface p-6 flex flex-col sm:flex-row gap-5">
              <span class="grid place-items-center h-16 w-16 rounded-full bg-ink text-paper font-display text-2xl shrink-0" aria-hidden="true">A</span>
              <div>
                <p class="font-display tt text-lg">Aarav Sharma</p>
                <p class="text-accent text-sm">Brand Strategy Lead · BoostronixX</p>
                <p class="text-ink-soft text-sm mt-2 leading-relaxed">Aarav has led brand strategy and identity projects for 50+ businesses across real estate, schools and D2C since 2021. He writes about positioning, identity and the unglamorous decisions that make brands stick.</p>
                <div class="flex items-center gap-3 mt-3 text-sm">
                  <a href="/about-us/" class="font-medium text-ink hover:text-accent inline-flex items-center gap-1.5">More about the team <iconify-icon icon="lucide:arrow-up-right" aria-hidden="true"></iconify-icon></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- FAQ -->
        <section id="faq" class="py-16 sm:py-20 mt-8" aria-label="Frequently asked questions">
          <div class="mx-auto max-w-3xl px-4 sm:px-6">
            <h2 class="font-display text-2xl sm:text-4xl tt text-center mb-10">Frequently asked questions</h2>
            <div class="space-y-3">
              <div class="faq border border-line rounded-2xl px-6 group open"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="true">Can I do branding and marketing at the same time?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Yes — and established businesses usually should. The "which first" question matters most when budget is tight or your brand isn't yet clear. In that case, a focused brand tune-up first makes every later marketing rupee work harder.</div></div></div>
              <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">How much does branding cost vs. marketing?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">Branding is usually a one-off (or occasional) investment, while marketing is ongoing. Both are scoped to your goals — on a free strategy call we'll recommend the right starting mix for your stage and budget.</div></div></div>
              <div class="faq border border-line rounded-2xl px-6 group"><button class="faq-head w-full flex items-center justify-between gap-4 py-5 text-left font-display text-lg" aria-expanded="false">My brand feels fine — should I still review it?<span class="plus text-accent text-2xl leading-none shrink-0 grid place-items-center"><iconify-icon icon="lucide:plus" aria-hidden="true"></iconify-icon></span></button><div class="faq-body"><div class="group-[.open]:pb-5 pb-0 transition-all text-ink-soft text-sm leading-relaxed">A quick audit never hurts. If your channels look consistent and customers can explain what you do and why you're different, you're in good shape — focus on reach. If not, a light refresh pays for itself fast.</div></div></div>
            </div>
          </div>
        </section>

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
                <p class="text-xs text-ink-soft inline-flex items-center gap-1.5"><iconify-icon icon="lucide:shield-check" class="text-accent" aria-hidden="true"></iconify-icon> By submitting you agree to our <a href="/privacy-policy/" class="underline underline-offset-2 decoration-accent text-ink">privacy policy</a>.</p>
              </div>
              <p id="bcError" class="sm:col-span-2 hidden text-sm text-accent font-medium" role="alert"><iconify-icon icon="lucide:alert-circle" aria-hidden="true"></iconify-icon> Please fill in all required fields correctly.</p>
            </form>
          </div>
        </section>

        <!-- RELATED -->
        <section class="py-16 sm:py-24" aria-label="Related articles">
          <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="flex items-end justify-between mb-8">
              <h2 class="font-display text-2xl sm:text-3xl tt">Keep reading</h2>
              <a href="/blog/" class="text-sm font-medium text-ink hover:text-accent inline-flex items-center gap-1.5">All articles <iconify-icon icon="lucide:arrow-right" aria-hidden="true"></iconify-icon></a>
            </div>
            <div class="grid sm:grid-cols-3 gap-6">
              <a href="/blog-post/" class="relpost group block">
                <div class="relimg imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#fa5539,#2e1c16)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-brand-refresh.avif" alt="Brand refresh before and after" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4</b></span></div>
                <div class="mt-3"><span class="text-xs rounded-full bg-surface px-2.5 py-1 font-medium">Branding</span><h3 class="font-display text-lg tt mt-2 leading-snug">7 signs your brand is overdue for a refresh</h3><p class="text-xs text-ink-soft mt-2"><time datetime="2026-05-20">May 20, 2026</time> · 6 min</p></div>
              </a>
              <a href="/blog-post/" class="relpost group block">
                <div class="relimg imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#0a0a0a,#3a3a3a)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-local-seo.avif" alt="Local SEO map pin" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4</b></span></div>
                <div class="mt-3"><span class="text-xs rounded-full bg-surface px-2.5 py-1 font-medium">SEO</span><h3 class="font-display text-lg tt mt-2 leading-snug">Local SEO for Jaipur businesses: the 2026 playbook</h3><p class="text-xs text-ink-soft mt-2"><time datetime="2026-05-28">May 28, 2026</time> · 7 min</p></div>
              </a>
              <a href="/blog-post/" class="relpost group block">
                <div class="relimg imgph rounded-xl2 aspect-[3/4]"><div class="ph-zoom absolute inset-0 z-0" style="background:linear-gradient(135deg,#d6457a,#fa5539)" aria-hidden="true"></div><img src="/wp-content/themes/boostronixx/assets/img/blog-color.avif" alt="Colour palette swatches" loading="lazy" onerror="this.remove()" /><span class="lbl"><b>Thumb 3:4</b></span></div>
                <div class="mt-3"><span class="text-xs rounded-full bg-surface px-2.5 py-1 font-medium">Branding</span><h3 class="font-display text-lg tt mt-2 leading-snug">Colour psychology in branding: choosing your palette</h3><p class="text-xs text-ink-soft mt-2"><time datetime="2026-04-18">Apr 18, 2026</time> · 5 min</p></div>
              </a>
            </div>
          </div>
        </section>
      </article>
    </main>

<!-- Blog-post lead modal (page-specific; styles in compiled CSS, behaviour in app.js) -->
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
get_footer();
