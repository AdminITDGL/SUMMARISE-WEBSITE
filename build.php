<?php
/**
 * Static-render build script.
 *
 * Walks every .php page in the site, renders it via the running PHP CLI
 * server, and saves the resulting HTML into ./dist/. Copies static assets,
 * sitemap.xml, robots.txt and a vercel.json alongside.
 *
 * Usage:
 *   1. Start the PHP server:   php -S localhost:8765 -t .
 *   2. Run the build:          php build.php
 *   3. Deploy:                 npx vercel --prod
 */

$SRC  = __DIR__;
$DIST = __DIR__ . '/dist';
$HOST = 'http://localhost:8765';

// --- Pages to render — (source_url, output_path_in_dist) ---------------
$pages = [
  ['/',                                                'index.html'],
  ['/about/',                                          'about/index.html'],
  ['/about/our-story.php',                             'about/our-story.html'],
  ['/about/mission-vision-values.php',                 'about/mission-vision-values.html'],
  ['/about/team.php',                                  'about/team.html'],
  ['/about/credentials.php',                           'about/credentials.html'],
  ['/services/',                                       'services/index.html'],
  ['/services/mutual-fund-distribution.php',           'services/mutual-fund-distribution.html'],
  ['/services/insurance.php',                          'services/insurance.html'],
  ['/services/integrated-financial-perspective.php',   'services/integrated-financial-perspective.html'],
  ['/services/business-owner-solutions.php',           'services/business-owner-solutions.html'],
  ['/who-we-serve/',                                   'who-we-serve/index.html'],
  ['/who-we-serve/hni.php',                            'who-we-serve/hni.html'],
  ['/who-we-serve/business-owners.php',                'who-we-serve/business-owners.html'],
  ['/who-we-serve/executives-professionals.php',       'who-we-serve/executives-professionals.html'],
  ['/who-we-serve/young-professionals.php',            'who-we-serve/young-professionals.html'],
  ['/insights/',                                       'insights/index.html'],
  ['/insights/investing-basics.php',                   'insights/investing-basics.html'],
  ['/insights/insurance-protection.php',               'insights/insurance-protection.html'],
  ['/insights/business-owners.php',                    'insights/business-owners.html'],
  ['/insights/market-updates.php',                     'insights/market-updates.html'],
  ['/client-stories.php',                              'client-stories.html'],
  ['/careers.php',                                     'careers.html'],
  ['/faqs.php',                                        'faqs.html'],
  ['/contact.php',                                     'contact.html'],
  ['/legal/',                                          'legal/index.html'],
  ['/legal/disclaimers.php',                           'legal/disclaimers.html'],
  ['/legal/privacy-policy.php',                        'legal/privacy-policy.html'],
  ['/legal/terms-of-use.php',                          'legal/terms-of-use.html'],
  ['/legal/grievance-redressal.php',                   'legal/grievance-redressal.html'],
  ['/404.php',                                         '404.html'],
];

// --- Utility: recursive copy -------------------------------------------
function rcopy($src, $dst, $skip = []) {
  if (!is_dir($src)) return;
  @mkdir($dst, 0755, true);
  $it = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($src, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
  );
  foreach ($it as $item) {
    $rel = substr($item->getPathname(), strlen($src) + 1);
    foreach ($skip as $s) if (strpos($rel, $s) === 0) continue 2;
    $dstPath = $dst . DIRECTORY_SEPARATOR . $rel;
    if ($item->isDir()) { @mkdir($dstPath, 0755, true); }
    else                { @copy($item->getPathname(), $dstPath); }
  }
}

function ensure_dir($p) { @mkdir(dirname($p), 0755, true); }

// --- Clean and prepare dist/ -------------------------------------------
echo "Cleaning $DIST\n";
if (is_dir($DIST)) {
  $it = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($DIST, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::CHILD_FIRST
  );
  foreach ($it as $item) {
    if ($item->isDir()) @rmdir($item->getPathname());
    else                @unlink($item->getPathname());
  }
  @rmdir($DIST);
}
@mkdir($DIST, 0755, true);

// --- Render each page ---------------------------------------------------
$ok = 0; $fail = 0;
foreach ($pages as [$url, $out]) {
  $full = $HOST . $url;
  $html = @file_get_contents($full);
  if ($html === false) {
    fwrite(STDERR, "FAIL $url\n");
    $fail++;
    continue;
  }
  // Rewrite internal links from .php → clean URLs so the static site works
  // whether served via Vercel (cleanUrls) or a plain file host.
  $html = preg_replace_callback('#(href|src)="([^"]+)"#', function ($m) {
    $attr = $m[1]; $val = $m[2];
    // Skip external and anchor
    if (preg_match('#^(https?:)?//#', $val) || strpos($val, '#') === 0 || strpos($val, 'mailto:') === 0 || strpos($val, 'tel:') === 0) {
      return $attr . '="' . $val . '"';
    }
    // Strip .php from the end (but not from mid-path query strings)
    $q = ''; $frag = '';
    if (($pos = strpos($val, '#')) !== false) { $frag = substr($val, $pos); $val = substr($val, 0, $pos); }
    if (($pos = strpos($val, '?')) !== false) { $q    = substr($val, $pos); $val = substr($val, 0, $pos); }
    if (substr($val, -10) === '/index.php') $val = substr($val, 0, -9);
    if (substr($val, -4)  === '.php')       $val = substr($val, 0, -4);
    return $attr . '="' . $val . $q . $frag . '"';
  }, $html);

  $dst = $DIST . '/' . $out;
  ensure_dir($dst);
  file_put_contents($dst, $html);
  echo "OK  $url  →  $out (" . strlen($html) . " bytes)\n";
  $ok++;
}

// --- Copy assets, robots, sitemap --------------------------------------
echo "Copying assets/, sitemap.xml, robots.txt\n";
rcopy($SRC . '/assets', $DIST . '/assets');
@copy($SRC . '/sitemap.xml', $DIST . '/sitemap.xml');
@copy($SRC . '/robots.txt',  $DIST . '/robots.txt');

// --- Write vercel.json --------------------------------------------------
$vercel = [
  'cleanUrls'  => true,
  'trailingSlash' => false,
  'headers' => [
    [
      'source' => '/assets/(.*)',
      'headers' => [
        // Short cache so a redesign can propagate to users the same day.
        // The <link> URL is versioned with the build mtime (see head.php),
        // so browsers refetch on every new deploy anyway.
        ['key' => 'Cache-Control', 'value' => 'public, max-age=300, must-revalidate'],
      ],
    ],
    [
      'source' => '/(.*)',
      'headers' => [
        ['key' => 'X-Content-Type-Options',  'value' => 'nosniff'],
        ['key' => 'X-Frame-Options',         'value' => 'SAMEORIGIN'],
        ['key' => 'Referrer-Policy',         'value' => 'strict-origin-when-cross-origin'],
        ['key' => 'Permissions-Policy',      'value' => 'camera=(), microphone=(), geolocation=(self), interest-cohort=()'],
      ],
    ],
  ],
  'rewrites' => [
    [ 'source' => '/about',        'destination' => '/about/index' ],
    [ 'source' => '/services',     'destination' => '/services/index' ],
    [ 'source' => '/who-we-serve', 'destination' => '/who-we-serve/index' ],
    [ 'source' => '/insights',     'destination' => '/insights/index' ],
    [ 'source' => '/legal',        'destination' => '/legal/index' ],
  ],
];
file_put_contents($DIST . '/vercel.json', json_encode($vercel, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

// --- Summary ------------------------------------------------------------
echo "\nBuild complete: $ok pages rendered, $fail failed.\n";
echo "Output: $DIST\n";
echo "Next:  cd dist  &&  npx vercel --prod\n";
