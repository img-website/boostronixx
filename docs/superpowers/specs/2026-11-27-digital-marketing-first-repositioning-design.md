# BoostronixX — Digital-Marketing-First Repositioning (Design)

Date: 2026-11-27 · Site: https://www.boostronixx.com (WordPress, custom theme `boostronixx`)

## 1. Intent and why

BoostronixX was built as a branding-first agency ("We build brands that get noticed"). The business has changed priority: branding is now the **last** offer. The main offers, in this exact order, are:

1. Digital Marketing — /services/digital-marketing/
2. SEO Services — /services/seo-services/
3. Social Media Marketing — /services/social-media-marketing/
4. Performance Marketing — /services/performance-marketing/
5. Website Design — /services/website-design/
6. UI/UX Design — /services/ui-ux-design/
7. Brand Consulting — /services/brand-consulting/ (last; kept, not removed)

The site must say this everywhere a visitor, Google or an AI engine reads it: order, headlines, titles, schema and copy. The user asked for every change to be grounded in research ("bina soche samjhe kuch mat karna").

### Evidence (collected 2026-11-27)

India monthly search volume (DataForSEO):

| Keyword | Volume | KD |
|---|---|---|
| digital marketing agency in jaipur | 4,400 | 26 |
| digital marketing company in jaipur | 4,400 | 12 |
| best digital marketing agency in jaipur | 1,600 | 27 |
| digital marketing services in jaipur | 320 | 35 |
| seo company in jaipur | 2,400 | 31 |
| seo services / seo agency in jaipur | 1,300 / 1,300 | 16 / 18 |
| web development company in jaipur | 2,400 | 5 |
| website design / designing company in jaipur | 1,300 / 1,300 | 10 / 18 |
| marketing agency in jaipur | 880 | 23 |
| advertising agency in jaipur | 480 | 12 |
| social media marketing agency / company in jaipur | 260 / 260 | 18 / 21 |
| performance marketing agency in jaipur | 260 | – |
| google ads agency in jaipur | 70 | – |
| **branding agency in jaipur** | **70** | **48** |

Google Search Console, last 3 months: 439 clicks, 47.8k impressions. Commercial "Jaipur" queries by theme: SEO 1,276 impressions, social 821, performance 550, digital marketing 398, website 114, branding 86. Most of them average position 10–25 (page 2).

Pages, last 3 months:

| Page | Impressions | Avg position | Note |
|---|---|---|---|
| /services/seo-services/ | 1,466 | 27 | |
| /services/performance-marketing/ | 796 | 13.2 | |
| / | 591 | 8.3 | |
| /services/website-design/ | 267 | 10.5 | |
| /services/brand-consulting/ | 236 | 11.1 | |
| /services/social-media-marketing/ | 232 | 15.6 | |
| /services/digital-marketing/ | 116 | 9.5 | weakest of the priority pages |

Page-one SERP for "digital marketing agency in jaipur": a local pack, directories (Justdial), "Top 10/20 agencies" listicles, and agency homepages titled "Digital Marketing Agency in Jaipur | Brand". BoostronixX is not in the top 20.

Content depth today (words in `<main>`):

| Page | Words |
|---|---|
| home | 1,117 ("brand" appears 30 times) |
| SEO | 1,140 |
| Brand Consulting | 647 |
| Digital Marketing | 568 |
| Performance | 568 |
| Social | 536 |
| Website | 510 |
| UI/UX | 509 |

## 2. Goals, non-goals, anti-goals

**Goals**
- Phase A: every list of services on the site, and in schema, follows the order above. Every branding-first headline, tagline, title, meta and description is rewritten to lead with digital marketing.
- Phase A: the homepage targets "digital marketing agency / company in Jaipur". Each service page targets its own head term (keyword map below), with no two pages competing for the same term.
- Phase B: the six priority service pages become the best answer on page one for their head term. That means deeper, original, useful content (target 1,500–2,000 words each), FAQs with schema, and internal links. Work goes one page at a time, Digital Marketing first.

**Non-goals**
- No URL or slug changes. No page deletions. No redesign of the visual style.
- Brand Consulting is not removed or rewritten. Its page keeps targeting "branding agency in Jaipur"; it only moves to last everywhere.
- The logo image (which contains "Building Brands That Last") and existing OG/blog images are not changed.
- Blog posts are not rewritten. The "Branding & Strategy" category and its URLs stay.
- No changes to GBP in this project (its description and categories were already updated on 2026-11-18).

**Anti-goals (would count as failure even if "done")**
- Breaking the live layout. For example: the homepage services showcase loses its alternating layout, or CSS classes are missing because the Tailwind build was skipped.
- Keyword cannibalisation: the homepage, the Services hub and /services/digital-marketing/ all targeting "digital marketing agency in Jaipur".
- Invented facts: fake stats, client names, awards or prices that BoostronixX hasn't published or confirmed.
- Invalid JSON-LD after edits.
- Losing live content because local DB values (which may be stale) were pushed over live.

## 3. Constraints (how the site actually works)

- **Live and local theme code are identical.** Only line endings differ (verified by hashing CSS/JS on 2026-11-27).
- **Deployment.** There is no git on the server (cPanel Git Version Control is empty) and no CI. `DISALLOW_FILE_EDIT` is set, so the WP theme editor is off. Code reaches live by uploading changed files through cPanel File Manager. The user is logged in to cPanel and wp-admin in Chrome. Fallback: wp-admin → Themes → Upload (replace current). The git repo root is `C:\laragon\www\boostronixx`. Commits are made only when the user asks.
- **Content source of truth is the live DB.** All ACF fields on live hold saved values, so changing a code default changes nothing. ACF-backed copy is edited in live wp-admin, never by syncing the local DB.
- **Service order mechanism.** `bx_section_pages()` (inc/services.php:38-44) sorts by `menu_order,post_title`. All seven service pages have Order 0, so the list is alphabetical with Brand Consulting first. This one list drives the header dropdown, the mobile drawer, the lead-popup dropdown and the contact-form dropdown.
- **Schema.** `_bx_schema` post meta (no admin UI) is printed by inc/page-schema.php, which suppresses Yoast schema on those pages. It is edited on live with Better Search Replace, scoped to `bstrx_postmeta`, after a dry run and after saving a backup of the rendered JSON. Phpmyadmin is not available to Claude.
- **CSS.** Tailwind v4 output (`assets/css/app.min.css`) is committed. Any new utility class needs a rebuild with the standalone CLI (README). Prefer existing classes.
- **Yoast.** The homepage is a static page (ID 12). Its own Yoast title ("BoostronixX | Creative Branding & Marketing Agency in Jaipur") overrides the Search Appearance homepage title.

## 4. Approaches considered

**Phase A**

| Option | What it means | Trade-off | Verdict |
|---|---|---|---|
| A1 | Edit only what wp-admin exposes (page order, ACF, Yoast, Site Settings) | Fast and low-risk, but leaves the hard-coded homepage showcase (Brand = #5), the Services-hub cards (Brand = #2), the sitemap page and others in the old order | Rejected: half-done |
| **A2** | wp-admin edits for ACF/Yoast/order + a small code change set for the hard-coded spots + Better Search Replace for schema | Covers everything; needs one code deploy | **Picked** |
| A3 | Move every hard-coded list into ACF first, then edit | Most flexible later, but much more code and risk for a re-order | Rejected: over-build |

**Phase B** (how to add depth to service pages)

| Option | What it means | Trade-off | Verdict |
|---|---|---|---|
| B1 | New bespoke ACF sections per page | Matches the design exactly, but heavy code per page and slow to iterate | Rejected |
| **B2** | One reusable "in-depth guide" section, added to each priority service template, that renders the page's own block-editor content in the blog's prose style; existing ACF FAQ repeaters extended | One small code change; content then lives in wp-admin and can be written or updated like a blog post | **Picked** |
| B3 | Separate long-form "guide" blog posts per service, linked from service pages | No code, but splits relevance away from the money page and invites cannibalisation | Rejected |

User decision (2026-11-27): do A and B, phased: A first and live, then B one page at a time.

## 5. Keyword map (prevents cannibalisation)

| Page | Primary target | Secondary |
|---|---|---|
| Home (/) | digital marketing agency in Jaipur | digital marketing company in Jaipur, best digital marketing agency in Jaipur, marketing agency in Jaipur |
| Services hub (/services/) | digital marketing services list (navigational) | "SEO, social media, ads & website design services in Jaipur" |
| /services/digital-marketing/ | digital marketing services in Jaipur | full-funnel / integrated digital marketing, online marketing services |
| /services/seo-services/ | SEO company in Jaipur | SEO services/agency in Jaipur, local SEO services in Jaipur |
| /services/social-media-marketing/ | social media marketing agency in Jaipur | social media marketing company/agency in Jaipur |
| /services/performance-marketing/ | performance marketing agency in Jaipur | Google Ads agency in Jaipur, PPC company in Jaipur, Meta ads |
| /services/website-design/ | website design company in Jaipur | website designing company, web development company in Jaipur |
| /services/ui-ux-design/ | UI/UX design company in Jaipur | UI/UX design agency in Jaipur |
| /services/brand-consulting/ | branding agency in Jaipur | unchanged |

## 6. Phase A — change inventory

### A.1 wp-admin: page order (fixes four lists at once)

Set Page Attributes → Order on the service pages:

| Page | Order |
|---|---|
| Digital Marketing | 1 |
| SEO | 2 |
| Social | 3 |
| Performance | 4 |
| Website Design | 5 |
| UI/UX | 6 |
| Brand Consulting (ID 18) | 7 |

The other six pages are IDs 15–21 in the local DB; confirm them on live. This fixes:
- the header Services dropdown
- the mobile drawer
- the lead-popup service dropdown
- the contact-form service dropdown

Industries pages keep their order.

### A.2 wp-admin: ACF copy on live (Home page ID 12)

- `hero_badge` → "Digital marketing agency · Jaipur, India"
- `hero_heading` + `hero_rotating_words` → "Digital marketing in Jaipur that" + "gets you found / brings leads / converts / scales". The H1 then carries the head term.
- `hero_subheading` → leads with "digital marketing agency in Jaipur", then lists SEO, social media, performance ads and websites in the priority order. No "branding" first.
- `hero_stat_eyebrow` "Brands grown" → "Businesses grown". `hero_stat_tags` → "SEO / Social / Ads / Web".
- `svc1_title`–`svc7_title`: keep each headline with its block (blocks re-ordered in code, A.3).
- `about_heading` / `about_text`: reframe "creative studio … scalable brands" as a digital marketing team. The why-us angle stays.
- `insights_heading` "Ideas on branding & growth" → "Ideas on digital marketing & growth".
- `cta_text`: "your digital marketing partner in Jaipur" (drop "creative branding").
- Home FAQ Q1 answer: list services in the priority order, Brand Consulting last.
- Testimonials: no edit (real client words). Only the order of display, if one leads with "brand identity", may change.

Other pages:
- **Services hub (ID 14).** Per the keyword map the hub is navigational and must not use "digital marketing services (in Jaipur)" anywhere. That term belongs to /services/digital-marketing/.
  - hero heading "Services that build brands & drive growth" → "Services that grow your business online"
  - list heading "Digital marketing services in Jaipur, built as one growth engine" → "SEO, social, ads & websites — one growth engine"
  - hero sub and list intro list the services in the new order
  - the WebPage schema name in `_bx_schema` → "BoostronixX Services"
  - Yoast focus keyphrase → "boostronixx services"
  - FAQ Q1 "New brand? Start with brand consulting…" → reframed to "Start with digital marketing / SEO", with brand consulting mentioned as an option
  - every "before" value is taken from live (the live hub title is "Brand, SEO, Ads and Web Design Services in Jaipur | BoostronixX")
- **About (ID 13):**
  - hero badge "Creative branding & growth studio" → "Digital marketing agency · since 2026"
  - heading "We're the team behind brands that get noticed" → digital-marketing framing
  - mission text
  - team repeater order: Performance & SEO, Web & Development, Design & Creative, Brand & Strategy (last)
- **Site Settings:**
  - `footer_tagline` → "A digital marketing agency in Jaipur, India — SEO, social media, performance ads and websites that bring you customers."
  - `footer_col1` (Services column) → All Services + all seven services in the priority order (Digital Marketing, UI/UX and Brand are added; Brand last)
- **Industries hub:** `industries_matrix_items` reordered (Digital Marketing first, Brand last).
- **Industry pages** (schools, real estate, hospitals, D2C):
  - playbook repeaters reordered so search/leads come first and brand/trust comes later
  - FAQ answers that open with "brand it for trust" reworded to open with visibility/leads
  - facts unchanged
- **"Pairs well with" cards:**
  - Social → replace Brand with SEO
  - UI/UX → replace Brand with Digital Marketing
  - Website Design → replace Brand with Performance Marketing
  - Brand Consulting keeps its own
- **FAQ page:** Q1 answer reordered.
- **Privacy policy:** "a creative branding and digital marketing agency" → "a digital marketing agency".

### A.3 Code changes (theme; deploy via cPanel)

- **front-page.php:** today the services-showcase blocks run DM 01, SEO 02, Social 03, Performance 04, Brand 05, UI/UX 06, Website 07. The target is DM 01, SEO 02, Social 03, Performance 04, **Website 05, UI/UX 06, Brand 07**:
  - Rotate blocks 05–07 (Website up to 05, UI/UX stays 06, Brand down to 07).
  - Keep the alternating layout classes by position.
  - Move `border-b` to the new last block.
  - Renumber the labels.
  - Relabel the ACF field labels in inc/acf-fields.php to match the new positions. Saved values stay attached to field names, so check that the headlines still match their blocks after the swap and fix them in wp-admin if not.
- **page-services.php:** reorder the hard-coded cards to the priority order, Brand last. Keep the "full-width row" layout on the last card and the SEO "Full details" badge.
- **header.php:** logo alt → "BoostronixX — digital marketing agency in Jaipur".
- **page-about-us.php:** story paragraph 2 ("began as a creative branding & growth studio…") rewritten honestly: started with branding, now a digital marketing agency.
- **page-sitemap.php:** service list in the priority order.
- **Blog templates** (home.php, page-blog.php, template-parts/blog-archive.php): newsletter/intro lines lead with "digital marketing and growth tips"; category chips ordered by a fixed priority list (digital marketing, SEO, social, performance, web, branding last) instead of name.
- **page-portfolio.php:** "Branding and digital marketing work" → "Digital marketing, web and design work".
- **template-parts/lead-popup.php:** "Get a free growth plan for your brand" → "for your business"; "pairs sharp design with performance marketing" → "pairs SEO, ads and social with design".
- **page-industries.php:** "Project Branding" chip → lead with a digital chip; brand chip last.
- **style.css:** theme description (admin only).
- **inc/page-schema.php:** builds FAQPage from the ACF repeaters at output (see section 7), so the Phase A FAQ rewrites show up in schema.
- **Out of scope** (no service order): 404, internal-links.php, bx-interlink-pills.

### A.4 Yoast / WordPress settings (live wp-admin)

- **Home page (ID 12), Yoast:**
  - title "Digital Marketing Agency in Jaipur | SEO, Social & Ads | BoostronixX"
  - meta description ≤155 characters, leading with "digital marketing agency in Jaipur" and listing SEO, social, ads and websites
  - social title and description matching
- **Services hub, Yoast:** title "Our Services — SEO, Social, Ads & Web Design in Jaipur | BoostronixX"; meta in the priority order.
- **About and Contact:** keep their already-digital titles; fix any "brand" lead.
- **Yoast Site Representation:** `company_alternate_name` "BoostronixX Branding Agency" → "BoostronixX Digital Marketing Agency"; `org-description` rewritten digital-first.
- **Yoast Search Appearance:** `alternate_website_name` → "BoostronixX Digital Marketing Agency".
- **WP Settings → General:** tagline "Building Brands That Last" → "Digital Marketing Agency in Jaipur". The logo image is unchanged.
- **llms.txt:** Yoast regenerates it; check after saving.

### A.5 Schema (`_bx_schema`, live, Better Search Replace)

For each page that carries `_bx_schema`:
- Home 12, About 13, Services 14
- the seven service pages 15–21
- Industries 22 and the industry pages 23–26
- Portfolio 27, Blog 29, FAQs 32

Take every "before" value from live, not from the local DB. Then:
1. Save the rendered JSON-LD from the live page as a backup.
2. Write the exact replacement strings:
   - **Home:**
     - alternateName "Creative Branding & Digital Marketing Agency" → "Digital Marketing Agency in Jaipur"
     - description digital-first
     - slogan "We build brands that get noticed." → the new hero line
     - OfferCatalog name → "Digital Marketing Services"
     - OfferCatalog items re-ordered to the priority order
   - **Services:** OfferCatalog items re-ordered.
   - **Other pages:** descriptions that open with branding reworded.
3. Dry run → confirm the cell counts → run → re-fetch each page and validate the JSON. Then run Google's Rich Results Test on Home and Services.

Re-ordering OfferCatalog items is a multi-line JSON move, which Better Search Replace can't do with simple strings. Approach: replace each item's `name`/`url` pair in place (so position N gets the service that should be Nth), which keeps the JSON shape. The builder decides the exact mechanics, but must validate.

### A.6 Phase A go-live and checks

1. Code is deployed: changed theme files are uploaded to `/boostronixx.com/wp-content/themes/boostronixx/`. Originals are backed up first (downloaded or renamed `.bak` in place, then removed after verification).
2. wp-admin edits are made.
3. Better Search Replace runs on the schema.
4. Verify on live, logged out:
   - every list in the new order
   - no "branding" in any lead position
   - titles and metas
   - valid JSON-LD
   - layout intact on desktop and mobile
5. Request indexing in GSC for Home, Services hub and the six priority service pages.
6. Update memory notes.

## 7. Phase B — deepen the six priority pages (one at a time)

Order: Digital Marketing → SEO → Social → Performance → Website Design → UI/UX.

**Code, once:** add a reusable section `template-parts/service-guide.php`:
- It renders the page's `post_content` in a styled long-form block, reusing the blog `.prose` styles under a service-page scope (needs a Tailwind rebuild).
- It includes a small auto table of contents from H2s.
- Insert it in each priority template just before the FAQ section.
- If the page has no content, nothing renders, so it is safe to deploy before the content is written.
- The existing FAQ ACF repeaters get more Q&As.

**FAQ schema follows the visible FAQ (built in Phase A, so Phase A's FAQ rewrites stay in sync too).** Today each page's FAQPage JSON-LD is a hand-written static copy inside `_bx_schema`, separate from the ACF repeater that prints the accordion. Change `inc/page-schema.php` so that, on any page with a known FAQ repeater:
- it decodes the stored JSON
- drops any `FAQPage` node (top-level or inside `@graph`)
- appends a FAQPage built from that page's repeater at output time
- re-encodes the result

Details:
- One map holds page → repeater field name and its question/answer sub-field names (home `faq_items`, services hub `services_faq_items`, digital marketing `digital_marketing_faq`, SEO, social, performance, website, UI/UX, brand, the industry pages, FAQ page `faq_page_items`).
- If the decode fails, the stored JSON is printed unchanged, which is safe.
- Stored `_bx_schema` is not edited for FAQs.
- Verify with the Rich Results Test that each page has exactly one FAQPage.

**Per page:**
1. **Research.** Page-one SERP for the head term (DataForSEO); the top 3 competitors' coverage (sections, depth, FAQs); People Also Ask; GSC queries the page already gets.
2. **Brief.** Search intent, outline (H2/H3), the questions to answer, internal links (to related services, the matching industries and relevant blogs), and the facts needed from the user.
3. **Draft.** The whole page (everything in `<main>`) reaches roughly 1,800–2,500 words, so the guide adds about 1,000–1,600 on top of the existing sections (less on SEO, which already has 1,140).
   - The guide must not repeat what existing sections already say (channels, process, analytics, industries). Where they overlap, it goes deeper, or the existing section's ACF copy is tightened in the same pass.
   - Plain, specific, original. Covers:
   - what is included
   - process
   - pricing guidance (only ranges BoostronixX has already published, e.g. the digital-marketing-cost blog, or ranges the user confirms)
   - how results are measured
   - who it is for (industries)
   - Jaipur/local proof (real case studies only: Mount Litera Zee School, Freshee and other confirmed work)
   - FAQs
4. **Review and publish.** The user reviews the draft (doc or preview). It is then published into the page's block editor content, FAQs are added to ACF, and Yoast is updated (title/meta tuned to the keyword map, focus keyphrase, related keyphrases, synonyms, every field filled). Indexing is requested.
5. **Track.** Note the GSC baseline (impressions, position for the head term) before publishing, and re-check after 4 weeks.
   - The 4-week check runs alongside; it does not gate the next page. Pages ship one after another as each draft is approved.
   - What a check teaches is applied to the pages still to come.

## 8. What's left to the builder

- Exact copy wording for each field, within the direction above.
- How to reorder the showcase blocks without breaking the layout.
- How to stage the deploy (one upload vs per file).
- The exact Better Search Replace strings.
- The service-guide component's markup.
- Phase B outlines.

## 9. Calls made by Claude after the builder check (user to confirm while reading)

1. **FAQ schema.** Generated from the ACF FAQ repeaters at output (section 7), not hand-synced in stored JSON. Built in Phase A.
2. **Services hub.** Navigational. "Digital marketing services in Jaipur" is reserved for /services/digital-marketing/ (A.2).
3. **Phase B length.** The 1,800–2,500-word target counts the whole page. The guide deepens rather than repeats existing sections.
4. **Phase B cadence.** No 4-week gate between pages; tracking runs alongside.
5. **Facts.** Pricing uses only ranges already published on the site (the digital-marketing-cost and website-design-cost blogs), or figures the user confirms in review. Case studies are only Mount Litera Zee School, Freshee and others the user names.

## 10. Open questions for the user

None blocking. Each Phase B draft goes to the user for review before it is published.
