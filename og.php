<?php
/**
 * Summarise Corporate — dynamic Open Graph image
 * ------------------------------------------------------------------
 * Renders a 1200×630 branded PNG for social preview cards
 * (WhatsApp, LinkedIn, Facebook, Twitter, Slack, iMessage).
 *
 * Usage:
 *   /og.php               → default card (site tagline)
 *   /og.php?t=Custom+Title→ custom title, brand line stays
 *
 * The output is cached hard (1 year) — social platforms re-fetch
 * once per URL and keep the result for weeks, so re-cachebust by
 * changing the URL (e.g. /og.php?v=2) or purging the platform's
 * cache via its debug tool (see MONTHLY REPORTING notes).
 * ------------------------------------------------------------------
 */

require_once __DIR__ . '/includes/config.php';

// ---- Inputs ---------------------------------------------------------------
$title   = isset($_GET['t']) ? substr(trim($_GET['t']), 0, 120) : 'Financial Consulting for HNI Families & Business Owners';
$tagline = 'AMFI-Registered MFD · IRDAI-Licensed Advisor · Mumbai · Since 2003';
$domain  = 'www.summarise.in';

// ---- Brand palette --------------------------------------------------------
// Ink Navy #0F2442, Champagne Gold #C9B07C, Deep Teal #30576A, cream text
$ink    = [0x0F, 0x24, 0x42];
$gold   = [0xC9, 0xB0, 0x7C];
$teal   = [0x30, 0x57, 0x6A];
$cream  = [0xF7, 0xF3, 0xEB];
$white  = [0xFF, 0xFF, 0xFF];
$muted  = [0xB8, 0xC6, 0xD8];

// ---- Fallback path if GD is unavailable ----------------------------------
if (!function_exists('imagecreatetruecolor')) {
    // Fall back to serving the flat logo file. Better than a broken link.
    header('Location: /assets/img/brand/logo.png', true, 302);
    exit;
}

// ---- Canvas ---------------------------------------------------------------
$W = 1200;
$H = 630;
$im = imagecreatetruecolor($W, $H);
imagesavealpha($im, true);

$c_ink   = imagecolorallocate($im, ...$ink);
$c_gold  = imagecolorallocate($im, ...$gold);
$c_teal  = imagecolorallocate($im, ...$teal);
$c_cream = imagecolorallocate($im, ...$cream);
$c_white = imagecolorallocate($im, ...$white);
$c_muted = imagecolorallocate($im, ...$muted);

// Ink background
imagefilledrectangle($im, 0, 0, $W, $H, $c_ink);

// Subtle radial-ish gradient by drawing large translucent teal circles
$tealTrans = imagecolorallocatealpha($im, 0x30, 0x57, 0x6A, 100);
imagefilledellipse($im, 200, 100, 900, 900, $tealTrans);
$goldTrans = imagecolorallocatealpha($im, 0xC9, 0xB0, 0x7C, 115);
imagefilledellipse($im, 1100, 550, 700, 700, $goldTrans);

// Gold accent bar on the left edge
imagefilledrectangle($im, 0, 0, 10, $H, $c_gold);

// Bottom gold thin line
imagefilledrectangle($im, 60, $H - 90, $W - 60, $H - 88, $c_gold);

// ---- Text ------------------------------------------------------------------
// PHP GD's built-in fonts are bitmap and ugly at large sizes. Prefer a
// TTF if available; fall back to imagestring() bitmap so we NEVER return
// a broken image.
$fontDejavuBold = '/usr/share/fonts/truetype/dejavu/DejaVuSerif-Bold.ttf';
$fontDejavuReg  = '/usr/share/fonts/truetype/dejavu/DejaVuSerif.ttf';
$fontSansBold   = '/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf';
$fontSans       = '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf';

$haveTtf = is_readable($fontDejavuBold) && function_exists('imagettftext');

// Brand row (top-left)
$brand = 'SUMMARISE';
$subBrand = 'CORPORATE';
if ($haveTtf) {
    imagettftext($im, 34, 0, 60,  95, $c_gold,  $fontDejavuBold, $brand);
    imagettftext($im, 18, 0, 60, 125, $c_muted, $fontSans,       $subBrand);
} else {
    imagestring($im, 5, 60, 60,  $brand, $c_gold);
    imagestring($im, 4, 60, 90,  $subBrand, $c_muted);
}

// Main title — wrap at ~28 chars per line
$titleLines = wordwrap_lines($title, 28);
$startY = 240;
$lineH  = 74;
if ($haveTtf) {
    foreach ($titleLines as $i => $line) {
        imagettftext($im, 46, 0, 60, $startY + $i * $lineH, $c_cream, $fontDejavuBold, $line);
    }
} else {
    foreach ($titleLines as $i => $line) {
        imagestring($im, 5, 60, $startY + $i * 30 - 40, $line, $c_cream);
    }
}

// Tagline (bottom, above the gold line)
if ($haveTtf) {
    imagettftext($im, 20, 0, 60, $H - 120, $c_gold, $fontSansBold, $tagline);
} else {
    imagestring($im, 3, 60, $H - 140, $tagline, $c_gold);
}

// Domain (bottom-right, small)
if ($haveTtf) {
    // right-align the domain
    $bbox = imagettfbbox(18, 0, $fontSans, $domain);
    $tw   = $bbox[2] - $bbox[0];
    imagettftext($im, 18, 0, $W - 60 - $tw, $H - 48, $c_muted, $fontSans, $domain);
} else {
    imagestring($im, 3, $W - 220, $H - 50, $domain, $c_muted);
}

// ---- Output ---------------------------------------------------------------
// Long browser + platform cache. Bust by changing the query string.
header('Content-Type: image/png');
header('Cache-Control: public, max-age=31536000, immutable');
header('X-OG-Generator: summarise/1');
imagepng($im, null, 6);
imagedestroy($im);
exit;

// ---- Helpers --------------------------------------------------------------
function wordwrap_lines($text, $maxChars) {
    $wrapped = wordwrap($text, $maxChars, "\n", true);
    return explode("\n", $wrapped);
}
