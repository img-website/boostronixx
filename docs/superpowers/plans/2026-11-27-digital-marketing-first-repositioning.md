# Digital-Marketing-First Repositioning Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Make boostronixx.com lead with digital marketing everywhere. Phase A re-orders services and rewrites branding-first copy, titles and schema. Phase B deepens the six priority service pages one at a time.

**Architecture:**
- **Theme code** (local repo, identical to live) gets a small set of edits plus two new pieces: FAQPage-from-ACF in `inc/page-schema.php`, and a `service-guide` template part. These are uploaded to live through cPanel File Manager after backups.
- **Content** (ACF, Yoast, WP settings, page order) is edited directly in live wp-admin.
- **Stored JSON-LD** (`_bx_schema`) is edited on live with Better Search Replace.

**Tech Stack:** WordPress 7.1, custom theme `boostronixx`, ACF Pro, Yoast SEO Premium, Better Search Replace, PHP 8.4 CLI (`C:\laragon\bin\php\php-8.4.27-Win32-vs17-x64\php.exe`) for lint/tests, Chrome (logged in to wp-admin + cPanel), GSC.

**Spec:** `docs/superpowers/specs/2026-11-27-digital-marketing-first-repositioning-design.md`

## Global Constraints

- **Service order everywhere:** Digital Marketing, SEO Services, Social Media Marketing, Performance Marketing, Website Design, UI/UX Design, Brand Consulting (last).
- **Keyword map:**
  - Home → "digital marketing agency in Jaipur"
  - /services/ → navigational, never "digital marketing services (in Jaipur)"
  - /services/digital-marketing/ → "digital marketing services in Jaipur"
  - SEO → "SEO company in Jaipur"
  - Social → "social media marketing agency in Jaipur"
  - Performance → "performance marketing agency in Jaipur"
  - Website → "website design company in Jaipur"
  - UI/UX → "UI/UX design company in Jaipur"
  - Brand → unchanged
- **No URL/slug changes.** No page deletions. No visual redesign. No new Tailwind utility classes in Phase A (no CSS build available).
- **Brand Consulting page content is unchanged.** Only its position moves.
- **Logo image, OG/blog images, blog posts and blog categories are unchanged.**
- **No invented facts.** Prices only from the site's published cost blogs or figures the user confirms. Case studies only Mount Litera Zee School, Freshee, or ones the user names.
- **Live is the source of truth for content.** Every "before" value comes from live wp-admin or live HTML, never the local DB.
- **Every live change has a backup first:** files `.bak` on the server, rendered JSON-LD saved locally, and before-values logged in `docs/superpowers/plans/2026-11-27-change-log.md`.
- **Commits only when the user asks.**

## Review Focus

1. **FAQ repeater empty or missing on a page.** The stored schema must still print. Expected: no FAQPage node, and no PHP warning. Test in Task 4.
2. **Stored `_bx_schema` that is not valid JSON, or has no `@graph`.** Expected: the original string is printed unchanged. Test in Task 4.
3. **FAQ answers containing HTML (ACF wysiwyg/textarea).** Expected: the schema `text` is plain text with tags stripped, and JSON-escaped. Test in Task 4.
4. **Service page with empty block-editor content.** Expected: the service-guide renders nothing, so no empty section or heading. Test in Task 5.
5. **Better Search Replace matching more than the intended cell.** Expected: the dry-run count equals the number of pages listed for that string. Otherwise stop and narrow the string. Check in Task 9.

---

## Phase A

### Task 1: Re-order the homepage services showcase

**Files:**
- Modify: `wp-content/themes/boostronixx/front-page.php:277-1116`. Showcase blocks today: 01 DM (292), 02 SEO (383), 03 Social (576), 04 Performance (700), 05 Brand (817), 06 UI/UX (907), 07 Website (994).
- Modify: `wp-content/themes/boostronixx/inc/acf-fields.php:564-570` (labels of `svc1_title`…`svc7_title`).

**Interfaces:**
- Produces: block order DM 01, SEO 02, Social 03, Performance 04, Website 05, UI/UX 06, Brand 07.
- Each block keeps its own `svcN_title` field name. Task 7 then puts the right headline into the field shown in each position.

- [ ] **Step 1: Record the current layout.** For each block, note its position-dependent classes (alternating image left/right, `border-b` on the last block, the number label). Save the list in the change log.
- [ ] **Step 2: Move the blocks.** Move the Brand block (817-906) to after the Website block, so the order is …04, Website, UI/UX, Brand. Then re-apply the position-dependent classes from Step 1 to positions 05, 06 and 07, renumber the labels to 05/06/07, and put `border-b` on the new last block only.
- [ ] **Step 3: Relabel the ACF fields** in `inc/acf-fields.php:564-570` so the label text matches the block each field now sits in. Field `name`s stay the same.
- [ ] **Step 4: Verify.**
  - Run `php -l front-page.php` and `php -l inc/acf-fields.php`. Expected: `No syntax errors detected` for both.
  - Run `grep -n "<!-- 0[1-7]" front-page.php`. Expected: labels in the order DM, SEO, SOCIAL, PERFORMANCE, WEBSITE, UI/UX, BRAND.

### Task 2: Re-order Services-hub cards and fix hard-coded branding copy

**Files:**
- Modify `page-services.php:105-204`. Card order becomes DM, SEO, Social, Performance, Website Design & Development, UI/UX, Brand Consulting. The full-width-row styling moves to the last card (Brand). SEO keeps its "Full details" badge.
- Modify `header.php:54`. Logo alt becomes "BoostronixX — digital marketing agency in Jaipur".
- Modify `page-about-us.php:127-132`. Story paragraph 2, exact copy: "BoostronixX began as a creative branding studio. Today we're a digital marketing agency in Jaipur — SEO, social media, performance ads and websites run by one team, with branding as the finishing layer rather than the starting point."
- Modify `page-sitemap.php:90-97`. Service links in the global order, Brand last.
- Modify `home.php:47,77,120`, `page-blog.php:48,78,121` and `template-parts/blog-archive.php:45,65,108`.
  - "practical branding and growth tips" becomes "practical digital marketing and growth tips".
  - Other "branding" leads change the same way.
- Modify the blog category-chip query in the same three files. Order by this fixed slug list:
  1. digital-marketing
  2. seo
  3. social-media-marketing
  4. performance-marketing
  5. web-ui-ux-design
  6. content-marketing
  7. growth-case-studies
  8. trends-insights
  9. branding-and-strategy

  Any category not in the list goes after it, by name.
- Modify `page-portfolio.php:38`. "Branding and digital marketing work…" becomes "Digital marketing, web and design work…".
- Modify `template-parts/lead-popup.php:37,84`.
  - "Get a free growth plan for your brand" becomes "Get a free growth plan for your business".
  - "pairs sharp design with performance marketing" becomes "pairs SEO, ads and social with sharp design".
- Modify `page-industries.php:106`. Move the "Project Branding" chip to the end.
- Modify `style.css:6`. Theme description becomes "Custom theme for BoostronixX — digital marketing agency in Jaipur."

**Interfaces:**
- Produces: `bx_ordered_blog_categories(): WP_Term[]` in `inc/blog.php`, used by the three blog templates in place of the raw `get_categories()` call.

- [ ] **Step 1: Make the edits above.** Exact strings as given.
- [ ] **Step 2: Lint each changed file.** Run `php -l <file>` on every changed file. Expected: `No syntax errors detected` for each.
- [ ] **Step 3: Check for leftovers.** Run `grep -rn -i "creative branding\|branding and growth tips" --include=*.php .`. Expected: matches only in `page-brand-consulting.php` and `inc/acf/brand-consulting.php`.

### Task 3: ACF "pairs well with" defaults and other code defaults (consistency only)

The live DB values are what show, and Task 7 changes them. This task keeps code defaults consistent for fresh installs.

**Files:**
- `inc/acf/social-media-marketing.php:590-594`: Brand → SEO.
- `inc/acf/ui-ux-design.php:564-568`: Brand → Digital Marketing.
- `inc/acf/website-design.php:581-585`: Brand → Performance Marketing.
- `inc/acf-fields.php`:
  - hero defaults `:54,:61,:70,:78,:99,:129`
  - `insights_heading` `:245`
  - `cta_text` `:196`
  - FAQ Q1 `:594-595`
- `inc/acf/services.php:69,76,83,91,142,521-522`.
- `inc/acf/about-us.php:55` and the team order at `:586-591`.
- `inc/acf/industries.php:487-496`.
- The industry playbook and FAQ defaults (schools 502-508, real-estate 600-607, hospitals 591-598, 644, d2c 597-604).
- `inc/acf/faq.php:196`.
- `inc/acf/privacy-policy.php:143`.
- `inc/site-options.php:195-202`.

Use the same copy as Task 7.

- [ ] **Step 1: Make the edits.** Default values equal the Task 7 copy word for word.
- [ ] **Step 2: Lint each changed file.** Run `php -l` on each. Expected: no syntax errors.

### Task 4: FAQPage schema built from ACF repeaters

**Files:**
- Modify: `wp-content/themes/boostronixx/inc/page-schema.php`
- Create: `tests/page-schema-faq-test.php` (repo root `C:\laragon\www\boostronixx\tests\`)

**Interfaces:**
- Produces:
  - `bx_schema_faq_map(): array<string, array{0:string,1:string,2:string}>`. It is keyed by page slug, or `'__front'` for the front page, and maps to `[repeater, question_sub, answer_sub]`.
  - `bx_schema_replace_faqpage( string $json, array $faqs ): string`. This is a pure function. `$faqs` is a list of `['q' => string, 'a' => string]`.
- `bx_output_page_schema()` calls these before echo.

FAQ map (exact):

| Key | Repeater | Question sub-field | Answer sub-field |
|---|---|---|---|
| `__front` | faq_items | question | answer |
| services | services_faq_items | question | answer |
| digital-marketing | digital_marketing_faq | digital_marketing_faq_question | digital_marketing_faq_answer |
| seo-services | seo_services_faq | question | answer |
| social-media-marketing | social_media_marketing_faq_items | social_media_marketing_faq_question | social_media_marketing_faq_answer |
| performance-marketing | performance_marketing_faq | performance_marketing_faq_question | performance_marketing_faq_answer |
| website-design | website_design_faq_items | website_design_faq_question | website_design_faq_answer |
| ui-ux-design | ui_ux_design_faq_items | ui_ux_design_faq_question | ui_ux_design_faq_answer |
| brand-consulting | brand_consulting_faq_items | brand_consulting_faq_question | brand_consulting_faq_answer |
| schools | schools_faq_items | schools_faq_question | schools_faq_answer |
| real-estate | real_estate_faqs | real_estate_faq_question | real_estate_faq_answer |
| hospitals | hospitals_faqs | question | answer |
| d2c-ecommerce | d2c_ecommerce_faq_items | question | answer |
| faqs | faq_page_items | question | answer |

- [ ] **Step 1: Write the failing test** `tests/page-schema-faq-test.php`. It is a plain PHP CLI script that:
  - defines `ABSPATH`
  - stubs `add_action`, `add_filter` and `wp_strip_all_tags` (as `strip_tags`)
  - requires `inc/page-schema.php`
  - runs these assertions, printing `PASS`/`FAIL` per case and exiting 1 on any fail:

  ```php
  // 1 graph with FAQPage replaced
  $in  = '{"@context":"https://schema.org","@graph":[{"@type":"WebPage","name":"X"},{"@type":"FAQPage","mainEntity":[{"@type":"Question","name":"old"}]}]}';
  $out = json_decode( bx_schema_replace_faqpage( $in, [ ['q'=>'New Q?','a'=>'<p>New <b>A</b></p>'] ] ), true );
  assert_eq( count( array_filter( $out['@graph'], fn($n)=>$n['@type']==='FAQPage' ) ), 1 );
  assert_eq( end($out['@graph'])['mainEntity'][0]['name'], 'New Q?' );
  assert_eq( end($out['@graph'])['mainEntity'][0]['acceptedAnswer']['text'], 'New A' );
  // 2 top-level array of nodes
  $in2 = '[{"@type":"Organization"},{"@type":"FAQPage","mainEntity":[]}]';
  // → result is an array with exactly one FAQPage and the Organization kept
  // 3 empty $faqs → FAQPage nodes removed, none added, other nodes kept
  // 4 invalid JSON "{not json" → returned unchanged
  // 5 single top-level object that is itself an FAQPage → replaced by the new FAQPage
  // 6 output contains no "\/" escapes (JSON_UNESCAPED_SLASHES) and no "\u20b9" escapes for ₹ (JSON_UNESCAPED_UNICODE)
  ```

- [ ] **Step 2: Run it and confirm it fails.** Run `"C:\laragon\bin\php\php-8.4.27-Win32-vs17-x64\php.exe" tests\page-schema-faq-test.php`. Expected: fatal error, undefined function `bx_schema_replace_faqpage`.
- [ ] **Step 3: Implement `bx_schema_replace_faqpage( string $json, array $faqs ): string` and `bx_schema_faq_map(): array`** in `inc/page-schema.php`.
  - Decode. On failure, return `$json`.
  - Remove FAQPage nodes from `@graph`, from a top-level list, or a top-level single node.
  - If `$faqs` is non-empty, append one FAQPage node to `@graph`, or to the list, or wrap it with the single node.
  - Encode with `JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE`.
- [ ] **Step 4: Wire it into `bx_output_page_schema()`.**
  - Resolve the key: `'__front'` if `is_front_page()`, else the queried page's `post_name`.
  - Read the repeater with `get_field( $repeater, $id )`. Build the `$faqs` list from `$row[$q_sub]` and `$row[$a_sub]`, skipping rows with an empty question.
  - Call `bx_schema_replace_faqpage`. This runs before the existing domain and Instagram `str_replace`.
  - If ACF is missing or the key is unmapped, leave the stored schema untouched.
- [ ] **Step 5: Run the test and confirm it passes.** Same command. Expected: 6× `PASS`, exit 0.
- [ ] **Step 6: Lint.** Run `php -l inc/page-schema.php`. Expected: no syntax errors.

### Task 5: Service-guide template part (Phase B scaffold; ships with Phase A, renders nothing yet)

**Files:**
- Create: `wp-content/themes/boostronixx/template-parts/service-guide.php`
- Modify: these six templates, inserting `get_template_part( 'template-parts/service-guide' );` immediately before their FAQ section comment:
  - `page-digital-marketing.php` (before `<!-- FAQ` at :142)
  - `page-seo-services.php`
  - `page-social-media-marketing.php`
  - `page-performance-marketing.php`
  - `page-website-design.php`
  - `page-ui-ux-design.php`

**Interfaces:**
- Consumes: the current page's `post_content`.
- Produces: markup `<section id="guide" class="py-16 sm:py-20" aria-label="In-depth guide"><div class="mx-auto max-w-3xl px-4 sm:px-6 bx-page-blog-post"><div class="prose">…</div></div></section>`.
  - The `bx-page-blog-post` wrapper class is deliberate: it reuses the compiled `.bx-page-blog-post .prose` styles without a CSS rebuild.
  - If the content has two or more H2s, an "On this page" list of anchor links goes above the prose. Anchors come from `bx_article_content()` in `inc/blog.php`, which already returns `[html, toc]`.

- [ ] **Step 1: Write the template part.** It returns early when `trim( get_post_field( 'post_content', get_the_ID() ) ) === ''`.
- [ ] **Step 2: Insert the `get_template_part` call** into the six templates at the points listed.
- [ ] **Step 3: Lint.** Run `php -l` on all seven files. Expected: no syntax errors.
- [ ] **Step 4: Confirm the empty case renders nothing.** Run `grep -c 'id="guide"' <saved live HTML of /services/digital-marketing/ after deploy>`. Expected: `0` while the content is empty (checked in Task 6).

### Task 6: Deploy code to live

**Files:** every theme file changed in Tasks 1–5, uploaded to `/boostronixx.com/wp-content/themes/boostronixx/`, same relative paths.

- [ ] **Step 1: Back up on the server.** In cPanel File Manager, copy each target file to `<name>.bak-20261127` beside it. New files have no backup.
- [ ] **Step 2: Upload the changed files.** Upload into the matching folders, overwriting.
- [ ] **Step 3: Smoke test** (logged out). Run `curl -s -o /dev/null -w "%{http_code}"` on each of these:
  - Home
  - /services/
  - each of the seven service pages
  - /about-us/, /contact/, /blog/, /portfolio/, /sitemap/, /industries/
  - the four industry pages

  Expected: all `200`, and no "Fatal error" or "Warning:" text in the body.
- [ ] **Step 4: Check the schema on each.** Extract every `application/ld+json` block, `json.loads` it, and count FAQPage nodes. Expected: valid JSON, and exactly 1 FAQPage on pages with FAQs.
- [ ] **Step 5: Check the homepage showcase.** Expected: section order DM → SEO → Social → Performance → Website → UI/UX → Brand, with the alternating layout intact. Check with a screenshot at desktop and 390 px width.
- [ ] **Step 6: If anything fails,** restore the `.bak` files and stop. Otherwise delete the `.bak` files after Task 10 passes.

### Task 7: Live wp-admin content and order

For every field: write the live "before" value into the change log, then save the new value.

- [ ] **Step 1: Page order.** Set Page Attributes → Order:

  | Page | Order |
  |---|---|
  | Digital Marketing | 1 |
  | SEO | 2 |
  | Social | 3 |
  | Performance | 4 |
  | Website Design | 5 |
  | UI/UX | 6 |
  | Brand Consulting | 7 |

  Check: header dropdown and mobile drawer on live show this order.

- [ ] **Step 2: Home (page 12) ACF.** Exact copy:
  - `hero_badge`: "Digital marketing agency · Jaipur, India"
  - `hero_heading`: "Digital marketing in Jaipur that"
  - `hero_rotating_words`: "gets you found / brings leads / converts / scales". Keep the field's existing separator format.
  - `hero_subheading`: "BoostronixX is a digital marketing agency in Jaipur — SEO, social media, performance ads and websites from one team, built to bring you customers, not vanity metrics."
  - `hero_stat_eyebrow`: "Businesses grown"
  - `hero_stat_tags`: "SEO / Social / Ads / Web"
  - `svc1_title`–`svc7_title`: after Task 1, make sure each position shows its own service's headline. Move the saved Brand headline into whichever field now sits at position 07, and so on.
  - `about_heading`: "A digital marketing team that thinks like your growth partner"
  - `about_text`: rewrite the "turns ideas into scalable brands" sentence to "turns search, social and ads into steady enquiries". The rest stays.
  - `insights_heading`: "Ideas on digital marketing & growth"
  - `cta_text`: replace "creative branding and digital marketing partner in Jaipur" with "digital marketing partner in Jaipur".
  - `faq_items` Q1 answer: list the services in the global order, Brand Consulting last. The rest of the answer stays.
- [ ] **Step 3: Services hub (page 14) ACF.**
  - heading lines: "Services that" / "grow your business" / "online"
  - list heading: "SEO, social, ads & websites — one growth engine"
  - subheading and list intro: services named in the global order
  - `services_faq_items` Q1: "Not sure where to start? Most businesses start with digital marketing or SEO; brand consulting comes later if you need it." Keep the rest of the existing answer if it adds facts.
- [ ] **Step 4: About (page 13).**
  - `about_us_hero_badge`: "Digital marketing agency · since 2026"
  - heading: "We're the team that gets Jaipur businesses found"
  - `about_us_mission_text`: "become brands people remember" becomes "turn online attention into customers"
  - team repeater order: Performance & SEO, Web & Development, Design & Creative, Brand & Strategy
- [ ] **Step 5: Site Settings.**
  - `footer_tagline`: "A digital marketing agency in Jaipur, India — SEO, social media, performance ads and websites that bring you customers."
  - `footer_col1`: All Services, Digital Marketing, SEO Services, Social Media Marketing, Performance Marketing, Website Design, UI/UX Design, Brand Consulting
- [ ] **Step 6: Industries.**
  - `industries_matrix_items`: global order.
  - Industry playbooks (schools, real estate, hospitals, D2C): move the brand/trust step from first to last position and renumber.
  - FAQ answers that open with "brand it for trust": reorder the clauses so visibility/leads come first. Facts stay unchanged.
- [ ] **Step 7: "Pairs well with" cards.**
  - Social: Brand → SEO Services
  - UI/UX: Brand → Digital Marketing
  - Website Design: Brand → Performance Marketing
- [ ] **Step 8: FAQ page and privacy.**
  - `faq_page_items` Q1 answer: global order.
  - Privacy: "a creative branding and digital marketing agency" → "a digital marketing agency".
- [ ] **Step 9: Spot-check live** (logged out). Run `curl` on Home, /services/, /about-us/ and /industries/schools/. Expected: no "creative branding", "build brands that", "Ideas on branding" or "Brands grown" in the HTML.

### Task 8: Yoast and WP settings

- [ ] **Step 1: Home page 12, Yoast.**
  - Title: "Digital Marketing Agency in Jaipur | SEO, Social & Ads | BoostronixX"
  - Meta: "BoostronixX is a digital marketing agency in Jaipur for SEO, social media, Google & Meta ads and websites — one team focused on leads. Book a free call." (≤155 chars, counting the date-free page)
  - Focus keyphrase: "digital marketing agency in Jaipur"
  - Related keyphrases: "digital marketing company in Jaipur", "best digital marketing agency in Jaipur", "marketing agency in Jaipur"
  - FB/X title and description: matching
- [ ] **Step 2: Services hub 14, Yoast.**
  - Title: "Our Services — SEO, Social, Ads & Web Design in Jaipur | BoostronixX"
  - Meta: services in the global order
  - Focus keyphrase: "boostronixx services"
- [ ] **Step 3: Yoast Settings.**
  - Site representation `company_alternate_name`: "BoostronixX Digital Marketing Agency"
  - `org-description`: digital-first, services in the global order
  - Site basics `alternate_website_name`: "BoostronixX Digital Marketing Agency"
- [ ] **Step 4: WP Settings → General.** Tagline: "Digital Marketing Agency in Jaipur".
- [ ] **Step 5: Check llms.txt.** Fetch `https://www.boostronixx.com/llms.txt`. Expected: the tagline and home description are the new ones. If Yoast caches it, re-save Yoast llms.txt settings.

### Task 9: Stored schema (`_bx_schema`) via Better Search Replace

**Files:** none (live DB). Backups go in `scratchpad/schema-backup/<slug>.json`.

- [ ] **Step 1: Back up and baseline.** Save the rendered `bx-schema` JSON of every page carrying it. For each page, list the exact strings to change from that live JSON:
  - Home:
    - alternateName → "BoostronixX — Digital Marketing Agency in Jaipur"
    - description → digital-first
    - slogan → "Digital marketing in Jaipur that gets you found."
    - OfferCatalog name → "Digital Marketing Services"
  - Every page: descriptions that open with branding.
- [ ] **Step 2: Re-order the OfferCatalog** on Home and Services. Replace each item's `"name"` and URL pair in place, so that position N holds the Nth service in the global order. Use one Better Search Replace call per unique string, done through a temporary unique placeholder (A→`__BXTMP1__`, B→A, `__BXTMP1__`→B) to avoid collisions. If an item has its own description, swap that with it.
- [ ] **Step 3: Dry run each replacement** on `bstrx_postmeta` only. Expected: the cell count equals the number of pages expected for that string. If not, stop and lengthen the string.
- [ ] **Step 4: Run it, re-fetch the pages and validate.** Then re-fetch every page and `json.loads` each block. Expected: valid JSON, OfferCatalog in the global order, no "Branding & Digital Marketing" or "Creative Branding" outside the Brand Consulting page.
- [ ] **Step 5: Rich Results Test.** Run it on Home and /services/. Expected: no errors, and FAQ detected once.

### Task 10: Verify, index, record

- [ ] **Step 1: Full live sweep** (logged out, cache-busted). For every page in Task 6 Step 3, check the title, meta, H1, header dropdown order, footer services order, and the count of "brand" mentions on Home. Expected: Home "brand" count drops from 30 to under 8, the remaining ones being testimonials and the Brand Consulting card. Save the results in the change log.
- [ ] **Step 2: Mobile check.** Screenshot Home, /services/ and one service page at 390 px.
- [ ] **Step 3: Request indexing in GSC** for /, /services/, /about-us/ and the six priority service pages. That is 9 URLs, within the daily quota.
- [ ] **Step 4: Clean up.** Delete the server `.bak-20261127` files. Update the memory notes (`gbp-gsc-workflow.md`, new `site-repositioning` note).
- [ ] **Step 5: Ask the user before committing.** Ask whether to commit the theme changes, tests, spec, plan and change log to git. Commit only if they say yes.

---

## Phase B (repeat per page: Digital Marketing → SEO → Social → Performance → Website → UI/UX)

### Task 11+: Deepen `<service page>`

**Files:** none in code (the scaffold shipped in Task 5). Content goes into the page's block-editor content, its FAQ repeater and Yoast, all on live.

- [ ] **Step 1: Baseline.** Record the page's GSC impressions, clicks and average position (last 3 months) and its head-term position in the change log.
- [ ] **Step 2: Research.**
  - `seo_get_serp` for the head term (India, depth 10) plus `seo_search_keywords` (suggestions, India) for secondary terms.
  - Read the top 3 competitor pages and note their sections and depth.
  - Collect People Also Ask questions.
  - Pull the GSC queries for this page.
- [ ] **Step 3: Brief.** Write it in `docs/superpowers/briefs/<slug>.md`:
  - search intent
  - H2/H3 outline that doesn't repeat the page's existing sections
  - 6–8 FAQs
  - internal links (related services, matching industries, relevant blogs)
  - facts needed from the user (prices, case results)
- [ ] **Step 4: Draft.** The guide is 1,000–1,600 words, so the whole page lands at 1,800–2,500. Use only facts that are published or that the user confirmed.
  - **The user reviews the draft before anything is published.**
- [ ] **Step 5: Publish.**
  - Put the guide into the page content through the REST API or block editor.
  - Add the FAQs to the repeater.
  - Fill every Yoast field: title/meta per the keyword map, focus keyphrase, related keyphrases, synonyms, social.
- [ ] **Step 6: Verify on live.**
  - The guide renders with its TOC.
  - The FAQ accordion and the FAQPage schema match.
  - The JSON is valid.
  - The mobile layout is OK.
  - The word count is in range.
- [ ] **Step 7: Request indexing, then re-check after 4 weeks.** Request indexing in GSC. Note the 4-week check date in the change log. The next page starts without waiting.
