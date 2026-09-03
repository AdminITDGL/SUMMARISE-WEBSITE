# Summarise Corporate — Website

Marketing website for **Summarise Corporate Private Limited** — an AMFI-registered Mutual Fund Distributor (ARN-78740) and IRDAI-Licensed Insurance Advisor (Agency Code 00413837) based in Nariman Point, Mumbai.

Built by [ITD GrowthLabs](https://itdgrowthlabs.com). Client contact: Kuresh Morbiwala.

---

## Stack

- **Plain PHP** — 30 pages, shared includes for `head`, `header`, `footer`, `calendly-modal`.
- No database. No build step. Deploys to any Apache/PHP host (cPanel/Hostinger/etc.).
- CSS: hand-written design system in `assets/css/style.css` (Ink Navy #0F2442 / Champagne Gold #C9B07C / Deep Teal #30576A, Cormorant Garamond + Roboto from Google Fonts).
- JS: one small `assets/js/main.js` — nav toggle, Calendly modal, active-nav highlight.

---

## Local development

You need PHP 7.4+ installed (`php -v`). Then, from the project root:

```bash
php -S localhost:8000
```

Open http://localhost:8000. Clean URLs (`/about`, `/services/insurance`) require the Apache rewrite rules in `.htaccess`, which the PHP built-in server does not honour — locally, use `/about/`, `/services/insurance.php`, etc.

---

## Content and configuration

**All site-wide values live in one place: [`includes/config.php`](includes/config.php).** Change them there and every page picks them up.

Key things to update after launch:

| Constant | Purpose | Current value |
| --- | --- | --- |
| `CALENDLY_URL` | Calendly link every "Book a Consultation" CTA opens | `https://calendly.com/summarise-corporate/consultation` — **PLACEHOLDER**, swap for the real link |
| `GA4_MEASUREMENT_ID` | Google Analytics 4 measurement ID | *(empty — set to `G-XXXXXXX` when GA4 is created)* |
| `GSC_VERIFICATION_CODE` | Google Search Console meta-tag verification | *(empty — paste once site is added to GSC)* |
| `FEATURE_PMS_ENABLED` | Show the PMS section on the MFD page | `false` — flip only after NISM-XXI-A confirmed with Kuresh |
| `FEATURE_AIF_ENABLED` | Show the AIF section on the MFD page | `false` — flip only after NISM-XIX-A confirmed with Kuresh |
| `SOCIAL_LINKEDIN_COMPANY` etc. | Social profile URLs — appear in footer & schema | empty until accounts are created |

---

## SEO / Google Search Console setup

The site ships fully wired for SEO. To go live properly:

1. **Confirm the canonical domain.** Every page's canonical + `og:url` is generated from `SITE_URL` in `config.php` (`https://www.summarise.in`). The old site's audit called this out as the #1 issue — do not change unless you're moving domains.
2. **Add the property in [Google Search Console](https://search.google.com/search-console).** Use the **URL prefix** property, `https://www.summarise.in/`. Verify with the meta-tag method — paste the `content` value into `GSC_VERIFICATION_CODE` in `config.php`.
3. **Submit the sitemap.** URL: `https://www.summarise.in/sitemap.xml` — GSC → Sitemaps → paste `sitemap.xml`.
4. **Request indexing** for the top ~10 pages via the URL Inspection tool.
5. **Set up Bing Webmaster** and import from GSC to save time.
6. **Structured data check.** After deploy, run every top-level page through [Rich Results Test](https://search.google.com/test/rich-results) — the site emits Organization + FinancialService + LocalBusiness on every page, plus JobPosting (Careers), FAQPage (FAQs), Person (Team), BreadcrumbList (all interior pages).

---

## Deploy

### Option A — Any Apache + PHP host (recommended, matches existing team stack)

1. Upload the entire folder to the host's `public_html` (or web root).
2. Ensure `mod_rewrite`, `mod_headers`, `mod_deflate`, `mod_expires` are enabled (they are on virtually every managed host).
3. Point `www.summarise.in` DNS A-record to the host's IP. Add the naked apex as a 301 to `www` — the `.htaccess` already forces the canonical.
4. Enable free SSL (Let's Encrypt / AutoSSL) in cPanel.

### Option B — GitHub Pages / Vercel (static only)

GitHub Pages does not run PHP. To use it, first render each `.php` file to a static `.html` (there is no build step here today because the client host is expected to be PHP). If you go this route, ping the ITD GrowthLabs team and we'll add a `render-static.php` script.

### Option C — Vercel with the community PHP runtime

Works but is not first-class. Prefer Option A for a marketing site of this scale.

---

## GitHub

Origin remote is already set:

```
origin  https://github.com/AdminITDGL/SUMMARISE-WEBSITE.git
```

First push:

```bash
git add .
git commit -m "v1: initial 30-page launch scaffold"
git push -u origin main
```

---

## Compliance rules — please read before editing copy

This is a financial services site for a firm that holds AMFI and IRDAI registrations but is **not** a SEBI Registered Investment Adviser (RIA). SEBI restricts distributor firms from using certain terms.

**Never use, anywhere on the site:**

- "financial planner" / "financial planning" (except naming a job qualification — see Careers page for the compliant framing)
- "investment adviser" / "investment advisory" / "advisory services" (as a service description)
- "wealth manager" / "wealth management" (as a service description)
- "consultant" / "coach" / "guide" (as a distributor designation)

**Safe to use:**

- "AMFI-registered Mutual Fund Distributor" ✅
- "IRDAI-Licensed Insurance Advisor" ✅ (IRDAI-recognised designation)
- "financial information," "insights," "considerations" ✅
- "distributor," "distribution" ✅

The full framing is documented on `/about/credentials.php` and `/legal/disclaimers.php` — those pages are the source of truth for the firm's regulatory positioning.

---

## What's held for later

- **PMS and AIF product sections** — hidden behind `FEATURE_PMS_ENABLED` / `FEATURE_AIF_ENABLED` in config. Turn on only after NISM-XXI-A / NISM-XIX-A confirmed.
- **Insights articles** — the four category pages ship with "Coming Soon" states. Individual article pages will be added under `/insights/<category>/<slug>.php`.
- **Client testimonials** — Client Stories page shows a consent-first empty state. Add cards as clients approve.
- **Contact form backend** — the form currently alerts on submit; wire to PHPMailer / SendGrid / a webhook once the host account is ready.
- **Team photos** — placeholder initials on `/about/team.php`. Swap `.team-card__photo` divs for `<img>` tags once the client provides photography.

---

## Local backup

Full local backup lives at:

```
C:\Users\Prashant\Desktop\ALL\summarise.in
```

## Contact

- **Client (Summarise Corporate):** Kuresh Morbiwala — kuresh@summarise.in — +91 98920 38451
- **Agency (ITD GrowthLabs):** info@itdgrowthlabs.com
