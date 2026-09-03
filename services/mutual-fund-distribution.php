<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Mutual Fund Distribution',
  'description' => 'AMFI-registered Mutual Fund Distributor (ARN-78740) in Mumbai. SIPs, lump-sum, systematic withdrawals and goal-linked portfolios across equity, debt, hybrid and international funds.',
  'breadcrumbs' => [['Home', '/'], ['Services', '/services/'], ['Mutual Fund Distribution', '/services/mutual-fund-distribution']],
  'json_ld'     => [[
    '@context' => 'https://schema.org',
    '@type'    => 'Service',
    'serviceType' => 'Mutual Fund Distribution',
    'provider' => ['@id' => SITE_URL . '/#organization'],
    'areaServed' => 'IN',
    'name' => 'Mutual Fund Distribution',
    'description' => 'AMFI-registered distribution of mutual fund schemes: SIPs, lump-sum, SWPs, and goal-linked portfolios.',
  ]],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('chart-line', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Services &rsaquo; Mutual Fund Distribution</span>
      <h1 class="headline headline--light">Helping you understand <em>financial choices</em>.</h1>
      <p class="lead">From equity and debt to hybrid and international funds, we help clients build diversified, goal-linked portfolios suited to their risk appetite and time horizon &mdash; as an AMFI-registered Mutual Fund Distributor since 2003.</p>
    </div>
  </div>
</section>

<!-- HOW WE WORK / WHO IT'S FOR -->
<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">How we work</span>
        <h2>A distributor&rsquo;s role, done properly.</h2>
        <p>Our role as a distributor is to help you understand what you&rsquo;re buying, how it fits your goals, and what to expect from it over time. We don&rsquo;t recommend specific stocks and we don&rsquo;t churn portfolios &mdash; we help you make informed choices and stay involved as your priorities change.</p>
        <p>Every portfolio decision is anchored to something real in your life: a goal, a time horizon, a liquidity need, a risk you want to protect against.</p>
        <div class="card card--gold mt-3" style="padding:1.5rem;">
          <div style="display:flex; align-items:center; gap:1rem;">
            <?= icon_badge('gem', 'navy') ?>
            <div>
              <strong style="color:var(--ink-navy); font-size:1.05rem;">Who this is for</strong>
              <p class="mb-0 muted" style="margin-top:0.25rem;">HNI individuals, families, business owners and senior professionals with <strong>&#8377;1 Crore+ investible assets</strong>.</p>
            </div>
          </div>
        </div>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">Product areas</span>
        <h2>What we distribute.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('refresh') ?></span>
            <div><strong>Systematic Investment Plans (SIPs)</strong><p>Consistent, disciplined investing to build long-term wealth through market cycles.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('coins') ?></span>
            <div><strong>Lump-Sum Investments</strong><p>Deploying surplus capital strategically, matched to your goals and investment horizon.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('trending-up') ?></span>
            <div><strong>Systematic Withdrawal Plans (SWPs)</strong><p>Creating a structured, sustainable income stream from your investments.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('target') ?></span>
            <div><strong>Goal-Based Portfolio Construction</strong><p>Diversified portfolios aligned with specific goals, risk profile and time horizon.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('layers') ?></span>
            <div><strong>Specialised Investment Funds (SIFs)</strong><p>Differentiated strategies designed for specific investment objectives.</p></div>
          </li>
<?php if (FEATURE_PMS_ENABLED): ?>
          <li>
            <span class="feat-icon"><?= icon('briefcase') ?></span>
            <div><strong>Portfolio Management Services (PMS)</strong><p>Professionally managed, customised portfolios aligned with specific investment objectives.</p></div>
          </li>
<?php endif; ?>
<?php if (FEATURE_AIF_ENABLED): ?>
          <li>
            <span class="feat-icon"><?= icon('sparkle') ?></span>
            <div><strong>Alternative Investment Funds (AIFs)</strong><p>Alternative investment strategies beyond traditional asset classes.</p></div>
          </li>
<?php endif; ?>
        </ul>
<?php if (!FEATURE_PMS_ENABLED && !FEATURE_AIF_ENABLED): ?>
        <!-- PMS/AIF held off launch pending NISM-XXI-A / NISM-XIX-A confirmation.
             Flip FEATURE_PMS_ENABLED / FEATURE_AIF_ENABLED in includes/config.php. -->
<?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section section--ivory">
  <div class="wrap-tight">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">The process</span>
      <h2 class="headline">How a new relationship <em>actually works</em>.</h2>
    </div>
    <div class="process">
      <div class="process-step" data-reveal data-reveal-delay="1">
        <div>
          <h3>Initial conversation</h3>
          <p>A 30-minute call to understand your goals, existing portfolio, time horizon and any specific liquidity needs.</p>
        </div>
      </div>
      <div class="process-step" data-reveal data-reveal-delay="2">
        <div>
          <h3>Portfolio review or construction</h3>
          <p>If you have an existing portfolio, we review it against your goals. If you&rsquo;re starting fresh, we propose a diversified structure across appropriate asset classes.</p>
        </div>
      </div>
      <div class="process-step" data-reveal data-reveal-delay="3">
        <div>
          <h3>Onboarding</h3>
          <p>KYC, folio setup, SIP mandate registration, and clear documentation of what you&rsquo;re investing in and why.</p>
        </div>
      </div>
      <div class="process-step" data-reveal data-reveal-delay="4">
        <div>
          <h3>Ongoing review</h3>
          <p>Periodic portfolio reviews, rebalancing considerations, and updates on relevant product or regulatory developments.</p>
        </div>
      </div>
      <div class="process-step" data-reveal>
        <div>
          <h3>Always available</h3>
          <p>Chandrashekhar in operations and Kuresh directly &mdash; the same two people, for the length of the relationship.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATUTORY -->
<section class="section section--tight">
  <div class="wrap-text">
    <div class="card" data-reveal style="border-left:3px solid var(--champagne-gold); background:var(--pale-gold); padding:1.75rem;">
      <div style="display:flex; align-items:flex-start; gap:1rem;">
        <?= icon_badge('lock', 'navy') ?>
        <div>
          <p class="mb-1"><strong>Statutory note.</strong> Mutual fund investments are subject to market risks. Please read all scheme-related documents carefully before investing. Past performance is not indicative of future returns.</p>
          <p class="mb-0"><strong>Compensation.</strong> Summarise Corporate earns commission from AMCs for schemes distributed to clients. We do not charge advisory fees. <a href="../legal/disclaimers.php">Full disclosures</a>.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Ready to have a conversation about your portfolio?</h2>
    <p>Book a 30-minute consultation &mdash; no product pitch, no obligation.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
