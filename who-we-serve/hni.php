<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'For HNI Individuals & Families',
  'description' => 'A Mumbai-based boutique practice for HNI families with ₹1 Cr+ investible wealth who value personalised attention, deep research and long-term relationships over transactional advice.',
  'breadcrumbs' => [['Home', '/'], ['Who We Serve', '/who-we-serve/'], ['HNI Individuals & Families', '/who-we-serve/hni']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('gem', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Who We Serve &rsaquo; HNI Individuals &amp; Families</span>
      <h1 class="headline headline--light">For families with <em>substantial investible wealth</em>.</h1>
      <p class="lead">Our service model is particularly suited to individuals and families with <strong>&#8377;1 Crore+ of investible wealth</strong> who value detailed information, independent research and a high level of personal attention.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">What HNI families want</span>
        <h2>Depth, discretion, continuity.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('clock') ?></span>
            <div><strong>Time and attention</strong><p>A conversation that isn&rsquo;t rushed, from the same two people, for as long as the relationship lasts.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('file-text') ?></span>
            <div><strong>Deeper product understanding</strong><p>Beyond product brochures &mdash; how a fund actually behaves, what the manager&rsquo;s process is, what the real risks look like.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('compass') ?></span>
            <div><strong>An integrated view</strong><p>Investments, insurance, liquidity and estate considerations understood together, not as isolated purchases.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('lock') ?></span>
            <div><strong>Discretion and continuity</strong><p>Confidential conversations, consistent people, and a firm that will still be here in 20 years.</p></div>
          </li>
        </ul>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">How we help</span>
        <h2>The relationship, in practice.</h2>
        <p>Every relationship starts with a proper listening session &mdash; not a KYC form. We want to understand the family, the timelines, the priorities, the concerns that keep coming up, and the questions that haven&rsquo;t been asked yet.</p>
        <p>From there we work across our four practice areas as needed:</p>
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

<section class="section section--ivory">
  <div class="wrap-tight">
    <div class="founder-quote" data-reveal>
      <p>Limiting the number of relationships we take on lets us provide the time, attention and responsive service each client deserves.</p>
      <footer>This is written into our USP &mdash; and it is a real operational constraint, not marketing language.</footer>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">A private conversation, whenever suits you.</h2>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
