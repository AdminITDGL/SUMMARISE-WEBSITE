<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Our Services',
  'description' => 'Mutual Fund Distribution, Insurance Solutions, an Integrated Financial Perspective, and Business Owner Solutions — four practice areas for families and business owners who want clarity and long-term thinking.',
  'breadcrumbs' => [['Home', '/'], ['Services', '/services/']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('layers', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Services</span>
      <h1 class="headline headline--light">Four practice areas.<br>One <em>integrated way of thinking</em>.</h1>
      <p class="lead">Our four service lines are designed to work together &mdash; because the financial decisions in a family or a business rarely sit neatly in one bucket. Start with the one closest to your situation.</p>
    </div>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg">
      <a class="card" href="mutual-fund-distribution.php" data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('chart-line', 'gold', 'lg') ?>
          <div>
            <span class="card__tag">Service 01</span>
            <h3 style="margin:0;">Mutual Fund Distribution</h3>
          </div>
        </div>
        <p class="muted"><em>&ldquo;Helping you understand financial choices.&rdquo;</em></p>
        <p class="muted">Systematic Investment Plans, lump-sum investments, systematic withdrawals, and goal-linked portfolio construction across equity, debt, hybrid and international funds.</p>
        <span class="card__link">Explore MFD</span>
      </a>

      <a class="card" href="insurance.php" data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('shield', '', 'lg') ?>
          <div>
            <span class="card__tag">Service 02</span>
            <h3 style="margin:0;">Insurance Solutions</h3>
          </div>
        </div>
        <p class="muted"><em>&ldquo;Protect what matters most.&rdquo;</em></p>
        <p class="muted">Life &amp; term insurance, health insurance, critical illness protection and family protection &mdash; explained clearly so you can make informed decisions.</p>
        <span class="card__link">Explore Insurance</span>
      </a>

      <a class="card" href="integrated-financial-perspective.php" data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('compass', 'gold', 'lg') ?>
          <div>
            <span class="card__tag">Service 03</span>
            <h3 style="margin:0;">Integrated Financial Perspective</h3>
          </div>
        </div>
        <p class="muted"><em>&ldquo;Beyond individual products. See the bigger financial picture.&rdquo;</em></p>
        <p class="muted">Investments, insurance, tax awareness, liquidity and estate considerations &mdash; understood together, not in isolation.</p>
        <span class="card__link">Explore IFP</span>
      </a>

      <a class="card" href="business-owner-solutions.php" data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('briefcase', '', 'lg') ?>
          <div>
            <span class="card__tag">Service 04</span>
            <h3 style="margin:0;">Business Owner Solutions</h3>
          </div>
        </div>
        <p class="muted"><em>&ldquo;Build. Protect. Grow. Transition with confidence.&rdquo;</em></p>
        <p class="muted">Continuity, liquidity, protection, succession and eventual transition &mdash; the personal financial questions that shape every business owner&rsquo;s life.</p>
        <span class="card__link">Explore Business Solutions</span>
      </a>
    </div>
  </div>
</section>

<!-- COMPENSATION TRANSPARENCY -->
<section class="section section--ivory">
  <div class="wrap-tight">
    <div class="card card--gold" data-reveal style="padding:2.5rem; text-align:center;">
      <?= icon_badge('lock', 'navy', 'lg') ?>
      <h2 class="mt-2">How we&rsquo;re compensated</h2>
      <p class="lead" style="margin:0 auto 1.5rem;">
        We earn commission income from asset management companies and insurance providers for the products we distribute. We do <strong>not</strong> charge advisory fees, and we are <strong>not</strong> a SEBI-registered Investment Adviser. This is standard practice for AMFI-registered distributors and IRDAI-licensed insurance advisors &mdash; and we believe you should know how any firm you work with is paid.
      </p>
      <a class="btn btn-secondary" href="../legal/disclaimers.php"><?= icon('file-text') ?> Read our full disclosures</a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Not sure where to start?</span>
    <h2 class="headline headline--light">Let&rsquo;s figure it out together.</h2>
    <p>Book a consultation and we&rsquo;ll help you find the service that best fits your situation &mdash; or tell you if we&rsquo;re not the right firm for you at all.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
