<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'For Business Owners & Entrepreneurs',
  'description' => 'For SMB and mid-market business owners whose personal finances are tied to the business. Continuity, liquidity, protection, succession and eventual transition — from a boutique Mumbai firm.',
  'breadcrumbs' => [['Home', '/'], ['Who We Serve', '/who-we-serve/'], ['Business Owners', '/who-we-serve/business-owners']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('briefcase', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Who We Serve &rsaquo; Business Owners</span>
      <h1 class="headline headline--light">For owners whose business is also their <em>balance sheet</em>.</h1>
      <p class="lead">SMB and mid-market entrepreneurs whose personal wealth is concentrated in the business &mdash; and who want a clearer view of continuity, liquidity, protection and eventual transition, before those questions become urgent.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">Common patterns</span>
        <h2>The situations we see most often.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('building') ?></span>
            <div><strong>Concentrated wealth</strong><p>Most of the household&rsquo;s net worth is inside the business &mdash; the personal portfolio outside is thin or ad-hoc.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('coins') ?></span>
            <div><strong>Liquidity blindspots</strong><p>The business is profitable, but personal liquidity for a 12&ndash;24 month worst case is unclear.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('shield') ?></span>
            <div><strong>Underinsured against the owner</strong><p>Life, health and critical-illness cover isn&rsquo;t sized against what the family actually depends on.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('users') ?></span>
            <div><strong>Deferred succession conversations</strong><p>Everyone knows they need to happen. Very few families have actually had them.</p></div>
          </li>
        </ul>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">How we help</span>
        <h2>Four practice areas, one conversation.</h2>
        <p>We start with a listening conversation &mdash; the business, the family, the ownership structure, the near- and long-term intentions. From there we work across:</p>
        <div class="grid grid-2" style="gap:0.85rem; margin-top:1.25rem;">
          <a class="card" href="../services/business-owner-solutions.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('briefcase') ?>
              <strong style="color:var(--ink-navy);">Business Owner Solutions</strong>
            </div>
          </a>
          <a class="card" href="../services/integrated-financial-perspective.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('compass', 'gold') ?>
              <strong style="color:var(--ink-navy);">Integrated Perspective</strong>
            </div>
          </a>
          <a class="card" href="../services/insurance.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('shield') ?>
              <strong style="color:var(--ink-navy);">Insurance Solutions</strong>
            </div>
          </a>
          <a class="card" href="../services/mutual-fund-distribution.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('chart-line', 'gold') ?>
              <strong style="color:var(--ink-navy);">Mutual Funds</strong>
            </div>
          </a>
        </div>
        <p class="mt-3">Where formal legal, tax, accounting or M&amp;A advice is required, we coordinate with your existing professionals rather than pretending to replace them.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Business questions you keep pushing to next quarter?</h2>
    <p>Book a confidential conversation. It costs nothing to find out whether we can be helpful.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
