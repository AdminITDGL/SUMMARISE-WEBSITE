<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'For Senior Executives & Professionals',
  'description' => 'For C-suite executives, senior corporate professionals, doctors, lawyers and CAs whose high income deserves disciplined long-term structuring across investments, protection and liquidity.',
  'breadcrumbs' => [['Home', '/'], ['Who We Serve', '/who-we-serve/'], ['Senior Executives & Professionals', '/who-we-serve/executives-professionals']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('user-tie', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Who We Serve &rsaquo; Senior Executives &amp; Professionals</span>
      <h1 class="headline headline--light">For high-earning professionals with <em>limited time</em>.</h1>
      <p class="lead">C-suite executives, senior corporate professionals, doctors, lawyers, CAs and other high-earning specialists &mdash; often time-poor, well-compensated, and less structured about their personal finances than they&rsquo;d like to be.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">What this audience wants</span>
        <h2>Structure, not another product pitch.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('layers') ?></span>
            <div><strong>Disciplined structuring</strong><p>A framework across investments, insurance, liquidity and long-term wealth that doesn&rsquo;t need monthly attention.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('trending-up') ?></span>
            <div><strong>ESOP and RSU realism</strong><p>Understanding what liquidity you actually have (and don&rsquo;t) once concentrated equity compensation is accounted for.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('shield') ?></span>
            <div><strong>Protection sized properly</strong><p>Term cover, health cover and critical-illness protection sized against household dependence, not a round number.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('phone') ?></span>
            <div><strong>A single point of contact</strong><p>Instead of a bank RM, an insurance agent and three product-specific salespeople.</p></div>
          </li>
        </ul>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">How we help</span>
        <h2>Diagnose, then structure.</h2>
        <p>We work with executives and senior professionals across all four practice areas &mdash; typically starting with a diagnostic conversation about existing holdings, protection cover, upcoming liquidity events and long-term priorities.</p>
        <div class="grid grid-2" style="gap:0.85rem; margin-top:1.25rem;">
          <a class="card" href="../services/mutual-fund-distribution.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('chart-line', 'gold') ?>
              <strong style="color:var(--ink-navy);">Mutual Funds</strong>
            </div>
          </a>
          <a class="card" href="../services/insurance.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('shield') ?>
              <strong style="color:var(--ink-navy);">Insurance</strong>
            </div>
          </a>
          <a class="card" href="../services/integrated-financial-perspective.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('compass', 'gold') ?>
              <strong style="color:var(--ink-navy);">Integrated Perspective</strong>
            </div>
          </a>
          <a class="card" href="../services/business-owner-solutions.php" style="padding:1rem 1.15rem;">
            <div style="display:flex; align-items:center; gap:0.75rem;">
              <?= icon_badge('briefcase') ?>
              <strong style="color:var(--ink-navy);">Business Owners</strong>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Short on time, but ready to structure things properly?</h2>
    <p>A 30-minute conversation is usually enough to know if we&rsquo;re the right fit.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
