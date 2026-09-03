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
if (!defined('BIZ_PHONE'))     define('BIZ_PHONE',     '+91 98920 38451');
if (!defined('BIZ_PHONE_RAW')) define('BIZ_PHONE_RAW', '+919892038451'); // tel: link
if (!defined('BIZ_WHATSAPP'))  define('BIZ_WHATSAPP',  '919892038451');  // wa.me link
if (!defined('BIZ_EMAIL'))     define('BIZ_EMAIL',     'kuresh@summarise.in');
if (!defined('BIZ_EMAIL_OPS')) define('BIZ_EMAIL_OPS', 'cverma@summarise.in');

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
//
// PLACEHOLDER — swap this to the real Calendly URL once the client provides it.
// Every "Book a Consultation" CTA and the site-wide modal reads from this
// constant, so this is a one-line change site-wide.
if (!defined('CALENDLY_URL')) define('CALENDLY_URL', 'https://calendly.com/summarise-corporate/consultation');

// --- Feature flags --------------------------------------------------------
//
// COMPLIANCE HOLD: PMS and AIF distribution require confirmed NISM-XXI-A
// (PMS) and NISM-XIX-A (AIF) certifications. The sitemap plan explicitly
// says: hold these sections off launch until confirmed with Kuresh.
// Flip to true only after certifications are signed off.
if (!defined('FEATURE_PMS_ENABLED')) define('FEATURE_PMS_ENABLED', false);
if (!defined('FEATURE_AIF_ENABLED')) define('FEATURE_AIF_ENABLED', false);

// --- Social profiles ------------------------------------------------------
// All "Make new one" per onboarding form — placeholders left here so the
// footer/schema pick them up as soon as the accounts exist.
if (!defined('SOCIAL_LINKEDIN_COMPANY')) define('SOCIAL_LINKEDIN_COMPANY', '');
if (!defined('SOCIAL_LINKEDIN_KURESH'))  define('SOCIAL_LINKEDIN_KURESH',  '');
if (!defined('SOCIAL_INSTAGRAM'))        define('SOCIAL_INSTAGRAM',        '');
if (!defined('SOCIAL_FACEBOOK'))         define('SOCIAL_FACEBOOK',         '');
if (!defined('SOCIAL_YOUTUBE'))          define('SOCIAL_YOUTUBE',          '');
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
if (!defined('OG_DEFAULT_IMAGE')) define('OG_DEFAULT_IMAGE', SITE_URL . '/assets/img/og/summarise-default.jpg');
