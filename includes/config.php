<?php
/**
 * Summarise Corporate — site-wide configuration
 *
 * Change values here once and every page picks them up.
 * ------------------------------------------------------
 */

// --- Canonical site URL ---------------------------------------------------
// IMPORTANT: keep exactly this — the last-site audit flagged canonical/OG
// URLs pointing to a Vercel staging URL, which suppressed indexing. This
// value is the single source of truth for canonical, OG:url and sitemap.
if (!defined('SITE_URL')) define('SITE_URL', 'https://www.summarise.in');

// --- Business identity ----------------------------------------------------
if (!defined('BIZ_LEGAL_NAME'))   define('BIZ_LEGAL_NAME',   'Summarise Corporate Private Limited');
if (!defined('BIZ_TRADING_NAME')) define('BIZ_TRADING_NAME', 'Summarise Corporate');
if (!defined('BIZ_TAGLINE'))      define('BIZ_TAGLINE',      'Clarity that moves you forward.');
if (!defined('BIZ_FOUNDED'))      define('BIZ_FOUNDED',      '2003');
if (!defined('BIZ_FOUNDER'))      define('BIZ_FOUNDER',      'Kuresh Morbiwala');

// --- Contact --------------------------------------------------------------
// --- Public business phone numbers ----------------------------------------
// Two dedicated lines with clear purposes (per client, 2026-09-29):
//   BIZ_PHONE_CONSULT  9702090005 → consultation booking
//   BIZ_PHONE_CARE     9702090006 → service-related queries / customer support
// BIZ_PHONE/BIZ_WHATSAPP alias the consultation number for backward
// compatibility with the many CTAs, footer, schema and modal that use
// BIZ_PHONE by name.
if (!defined('BIZ_PHONE_CONSULT'))     define('BIZ_PHONE_CONSULT',     '+91 97020 90005');
if (!defined('BIZ_PHONE_CONSULT_RAW')) define('BIZ_PHONE_CONSULT_RAW', '+919702090005');
if (!defined('BIZ_WHATSAPP_CONSULT'))  define('BIZ_WHATSAPP_CONSULT',  '919702090005');

if (!defined('BIZ_PHONE_CARE'))        define('BIZ_PHONE_CARE',        '+91 97020 90006');
if (!defined('BIZ_PHONE_CARE_RAW'))    define('BIZ_PHONE_CARE_RAW',    '+919702090006');
if (!defined('BIZ_WHATSAPP_CARE'))     define('BIZ_WHATSAPP_CARE',     '919702090006');

// Primary business number — used by all generic phone/WhatsApp CTAs.
// Set to consultation number since most public-facing CTAs are booking-related.
if (!defined('BIZ_PHONE'))     define('BIZ_PHONE',     BIZ_PHONE_CONSULT);
if (!defined('BIZ_PHONE_RAW')) define('BIZ_PHONE_RAW', BIZ_PHONE_CONSULT_RAW);
if (!defined('BIZ_WHATSAPP'))  define('BIZ_WHATSAPP',  BIZ_WHATSAPP_CONSULT);

// (Kuresh's personal mobile 98920 38451 removed from all public CTAs
//  per client instruction 2026-09-29 — the two dedicated business lines
//  above cover consultation booking and support respectively.)
if (!defined('BIZ_EMAIL'))         define('BIZ_EMAIL',         'kuresh@summarise.in'); // Kuresh — kept for the About/Team page and personal correspondence
if (!defined('BIZ_EMAIL_CONNECT')) define('BIZ_EMAIL_CONNECT', 'connect@summarise.in'); // Booking / consultation enquiries — primary public inbox
if (!defined('BIZ_EMAIL_CARE'))    define('BIZ_EMAIL_CARE',    'care@summarise.in');    // Customer support / existing clients
if (!defined('BIZ_EMAIL_OPS'))     define('BIZ_EMAIL_OPS',     'cverma@summarise.in'); // Chandrashekhar — operations

if (!defined('BIZ_ADDR_LINE1')) define('BIZ_ADDR_LINE1', '322, Tulsiani Chambers');
if (!defined('BIZ_ADDR_LINE2')) define('BIZ_ADDR_LINE2', '212, Free Press Journal Marg');
if (!defined('BIZ_ADDR_AREA'))  define('BIZ_ADDR_AREA',  'Nariman Point');
if (!defined('BIZ_ADDR_CITY'))  define('BIZ_ADDR_CITY',  'Mumbai');
if (!defined('BIZ_ADDR_STATE')) define('BIZ_ADDR_STATE', 'Maharashtra');
if (!defined('BIZ_ADDR_PIN'))   define('BIZ_ADDR_PIN',   '400021');
if (!defined('BIZ_ADDR_COUNTRY')) define('BIZ_ADDR_COUNTRY', 'IN');
if (!defined('BIZ_GEO_LAT'))    define('BIZ_GEO_LAT',   '18.9256');
if (!defined('BIZ_GEO_LNG'))    define('BIZ_GEO_LNG',   '72.8236');
if (!defined('BIZ_MAP_URL'))    define('BIZ_MAP_URL',   'https://maps.google.com/?q=Tulsiani+Chambers+Nariman+Point+Mumbai');

// --- Regulatory registrations (used across footer, credentials page, schema)
if (!defined('AMFI_ARN'))          define('AMFI_ARN',          'ARN-78740');
if (!defined('IRDAI_AGENCY_CODE')) define('IRDAI_AGENCY_CODE', '00413837');

// --- Booking / Calendly ---------------------------------------------------
// Real Calendly link supplied by the client (2026-09-24).
// Every "Book a Consultation" CTA and the site-wide modal reads from this
// constant, and the modal's "Book an appointment" action fires the Calendly
// popup widget with this URL.
if (!defined('CALENDLY_URL')) define('CALENDLY_URL', 'https://calendly.com/connect-summarise/30min');

// --- Client Portal (WealthMagic / FintsoWM) --------------------------------
// The login URL for existing clients — surfaced as a sticky right-edge
// button and a small link in the top contact bar.
if (!defined('CLIENT_PORTAL_URL')) define('CLIENT_PORTAL_URL', 'https://mfppl.wealthmagic.in/');

// --- Feature flags --------------------------------------------------------
//
// COMPLIANCE HOLD: PMS and AIF distribution require confirmed NISM-XXI-A
// (PMS) and NISM-XIX-A (AIF) certifications. The sitemap plan explicitly
// says: hold these sections off launch until confirmed with Kuresh.
// Flip to true only after certifications are signed off.
if (!defined('FEATURE_PMS_ENABLED')) define('FEATURE_PMS_ENABLED', false);
if (!defined('FEATURE_AIF_ENABLED')) define('FEATURE_AIF_ENABLED', false);

// --- Social profiles ------------------------------------------------------
// Official Summarise handles — provided by client 2026-10-01. Tracking
// params (notif_id, stkn, ref) stripped. YouTube "studio.youtube.com" URL
// converted to the public channel URL. LinkedIn + X: pending.
if (!defined('SOCIAL_LINKEDIN_COMPANY')) define('SOCIAL_LINKEDIN_COMPANY', '');
if (!defined('SOCIAL_LINKEDIN_KURESH'))  define('SOCIAL_LINKEDIN_KURESH',  '');
if (!defined('SOCIAL_INSTAGRAM'))        define('SOCIAL_INSTAGRAM',        'https://www.instagram.com/sumcorp_official');
if (!defined('SOCIAL_FACEBOOK'))         define('SOCIAL_FACEBOOK',         'https://www.facebook.com/profile.php?id=61595026257109');
if (!defined('SOCIAL_YOUTUBE'))          define('SOCIAL_YOUTUBE',          'https://www.youtube.com/channel/UCQ_RRQfyzIgxkMAnD8uzkWg');
if (!defined('SOCIAL_X'))                define('SOCIAL_X',                '');

// --- Analytics placeholders (fill once accounts exist) --------------------
if (!defined('GA4_MEASUREMENT_ID'))    define('GA4_MEASUREMENT_ID',    ''); // e.g. G-XXXXXXX
if (!defined('GSC_VERIFICATION_CODE')) define('GSC_VERIFICATION_CODE', ''); // meta content value only

// --- Path helpers ---------------------------------------------------------
// $site_root always resolves to the site root regardless of how deep the
// current page is. Handles both root pages (index.php) and nested pages
// (services/insurance.php, about/team.php, etc.).
if (!function_exists('site_root')) {
    function site_root() {
        // Depth = number of "/" between web root and current script
        $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
        $script = ltrim($script, '/');
        $depth  = max(0, substr_count($script, '/'));
        return $depth === 0 ? './' : str_repeat('../', $depth);
    }
}

// --- Current page URL (canonical) -----------------------------------------
if (!function_exists('current_canonical')) {
    function current_canonical() {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        // Strip query string — canonicals should not include filters/sorts
        $uri = strtok($uri, '?');
        // Rewrite /foo/index.php or /foo.php → clean URLs
        $uri = preg_replace('#/index\.php$#', '/', $uri);
        $uri = preg_replace('#\.php$#', '', $uri);
        if ($uri === '') $uri = '/';
        return SITE_URL . $uri;
    }
}

// --- OG/Twitter image fallback --------------------------------------------
// Static logo PNG — same approach as GrowthLabs/TravelKit, no server-side
// image generation needed. Facebook/LinkedIn/WhatsApp will display this
// as the social-share card. Swap for a 1200x630 designed card any time
// by uploading one to /assets/img/og/ and updating this constant.
if (!defined('OG_DEFAULT_IMAGE')) define('OG_DEFAULT_IMAGE', SITE_URL . '/assets/img/brand/logo.png');
