<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/icons.php';

/**
 * $page — array assembled by each page BEFORE including head.php:
 *   title         string   Page title (without brand suffix)
 *   description   string   Meta description
 *   canonical     string   Optional canonical override (default: current URL)
 *   og_image      string   Optional custom OG image URL
 *   robots        string   Optional robots directive (default: index,follow)
 *   noindex       bool     Optional shortcut to set robots to noindex
 *   json_ld       array    Optional array of associative arrays; each becomes a
 *                          separate <script type="application/ld+json">
 *   breadcrumbs   array    Optional [[label, href], ...] used for JSON-LD
 *   page_class    string   Optional class added to <body>
 */
$page = $page ?? [];

$__title = ($page['title'] ?? 'Financial Consulting for HNI Families & Business Owners') . ' | ' . BIZ_TRADING_NAME;
$__desc  = $page['description'] ?? 'Summarise Corporate is a Mumbai-based, AMFI-registered Mutual Fund Distributor and IRDAI-Licensed Insurance Advisor helping HNI families, business owners and senior professionals make informed financial decisions since 2003.';
$__canon = $page['canonical']   ?? current_canonical();
$__og    = $page['og_image']    ?? OG_DEFAULT_IMAGE;
$__robots= $page['robots']      ?? (!empty($page['noindex']) ? 'noindex,follow' : 'index,follow,max-image-preview:large,max-snippet:-1');
$__root  = site_root();

// --- JSON-LD: build defaults --------------------------------------------
$__ld = [];

// 1. Organization + LocalBusiness combined as FinancialService (SEO best practice for this vertical)
$__ld[] = [
  '@context' => 'https://schema.org',
  '@type'    => ['Organization', 'FinancialService', 'LocalBusiness'],
  '@id'      => SITE_URL . '/#organization',
  'name'     => BIZ_TRADING_NAME,
  'legalName'=> BIZ_LEGAL_NAME,
  'url'      => SITE_URL,
  'logo'     => SITE_URL . '/assets/img/brand/logo.png',
  'image'    => SITE_URL . '/assets/img/brand/logo.png',
  'foundingDate' => BIZ_FOUNDED,
  'founder'  => ['@type' => 'Person', 'name' => BIZ_FOUNDER],
  'slogan'   => BIZ_TAGLINE,
  'description' => $__desc,
  'address'  => [
    '@type' => 'PostalAddress',
    'streetAddress'  => BIZ_ADDR_LINE1 . ', ' . BIZ_ADDR_LINE2,
    'addressLocality'=> BIZ_ADDR_AREA . ', ' . BIZ_ADDR_CITY,
    'addressRegion'  => BIZ_ADDR_STATE,
    'postalCode'     => BIZ_ADDR_PIN,
    'addressCountry' => BIZ_ADDR_COUNTRY,
  ],
  'geo' => [
    '@type' => 'GeoCoordinates',
    'latitude'  => BIZ_GEO_LAT,
    'longitude' => BIZ_GEO_LNG,
  ],
  'telephone' => BIZ_PHONE,
  'email'     => BIZ_EMAIL,
  'areaServed' => [
    ['@type' => 'Country', 'name' => 'India'],
    ['@type' => 'City',    'name' => 'Mumbai'],
  ],
  'identifier' => [
    ['@type' => 'PropertyValue', 'name' => 'AMFI ARN',           'value' => AMFI_ARN],
    ['@type' => 'PropertyValue', 'name' => 'IRDAI Agency Code',  'value' => IRDAI_AGENCY_CODE],
  ],
  'sameAs' => array_values(array_filter([
    SOCIAL_LINKEDIN_COMPANY, SOCIAL_LINKEDIN_KURESH, SOCIAL_INSTAGRAM,
    SOCIAL_FACEBOOK, SOCIAL_YOUTUBE, SOCIAL_X,
  ])),
  'contactPoint' => [[
    '@type' => 'ContactPoint',
    'telephone'   => BIZ_PHONE,
    'contactType' => 'customer service',
    'email'       => BIZ_EMAIL,
    'areaServed'  => 'IN',
    'availableLanguage' => ['English', 'Hindi'],
  ]],
];

// 2. WebSite entity + SearchAction (helps Google build a sitelinks searchbox)
$__ld[] = [
  '@context' => 'https://schema.org',
  '@type'    => 'WebSite',
  '@id'      => SITE_URL . '/#website',
  'url'      => SITE_URL,
  'name'     => BIZ_TRADING_NAME,
  'publisher'=> ['@id' => SITE_URL . '/#organization'],
];

// 3. Breadcrumbs (only if the page passed them)
if (!empty($page['breadcrumbs']) && is_array($page['breadcrumbs'])) {
  $__crumbs = [];
  foreach ($page['breadcrumbs'] as $i => $c) {
    $__crumbs[] = [
      '@type'    => 'ListItem',
      'position' => $i + 1,
      'name'     => $c[0],
      'item'     => strpos($c[1], 'http') === 0 ? $c[1] : SITE_URL . $c[1],
    ];
  }
  $__ld[] = [
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => $__crumbs,
  ];
}

// 4. Any page-supplied JSON-LD blocks
if (!empty($page['json_ld']) && is_array($page['json_ld'])) {
  foreach ($page['json_ld'] as $extra) $__ld[] = $extra;
}
?><!doctype html>
<html lang="en-IN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($__title, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($__desc, ENT_QUOTES, 'UTF-8') ?>">
<meta name="robots" content="<?= htmlspecialchars($__robots, ENT_QUOTES, 'UTF-8') ?>">
<link rel="canonical" href="<?= htmlspecialchars($__canon, ENT_QUOTES, 'UTF-8') ?>">

<!-- Theming / mobile -->
<meta name="theme-color" content="#0F2442">
<meta name="format-detection" content="telephone=yes">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= htmlspecialchars(BIZ_TRADING_NAME, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars($__canon, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:title" content="<?= htmlspecialchars($__title, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:description" content="<?= htmlspecialchars($__desc, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="<?= htmlspecialchars($__og, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:locale" content="en_IN">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($__title, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($__desc, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($__og, ENT_QUOTES, 'UTF-8') ?>">

<!-- Favicons -->
<link rel="icon" type="image/png" href="<?= $__root ?>assets/img/brand/logo-mark.png">
<link rel="apple-touch-icon" href="<?= $__root ?>assets/img/brand/logo-mark.png">

<!-- Fonts (Cormorant Garamond + Roboto per brand guidelines) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

<!-- Styles — asset URL is versioned with each build's mtime so CDN & browser
     caches invalidate automatically on redeploy. -->
<?php $__cssVer = @filemtime(__DIR__ . '/../assets/css/style.css') ?: time(); ?>
<link rel="stylesheet" href="<?= $__root ?>assets/css/style.css?v=<?= $__cssVer ?>">

<!-- Google Search Console verification (fill in constant when available) -->
<?php if (GSC_VERIFICATION_CODE): ?>
<meta name="google-site-verification" content="<?= htmlspecialchars(GSC_VERIFICATION_CODE, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>

<!-- GA4 (loads only if configured) -->
<?php if (GA4_MEASUREMENT_ID): ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars(GA4_MEASUREMENT_ID, ENT_QUOTES, 'UTF-8') ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?= htmlspecialchars(GA4_MEASUREMENT_ID, ENT_QUOTES, 'UTF-8') ?>', {anonymize_ip: true});
</script>
<?php endif; ?>

<!-- JSON-LD -->
<?php foreach ($__ld as $ld): ?>
<script type="application/ld+json"><?= json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endforeach; ?>
</head>
<body class="<?= htmlspecialchars($page['page_class'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
