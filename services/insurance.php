<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Insurance Solutions',
  'description' => 'IRDAI-Licensed Insurance Advisor helping families and business owners understand life, term, health, critical illness and family protection options — and choose cover that actually fits.',
  'breadcrumbs' => [['Home', '/'], ['Services', '/services/'], ['Insurance Solutions', '/services/insurance']],
  'json_ld'     => [[
    '@context' => 'https://schema.org',
    '@type'    => 'Service',
    'serviceType' => 'Insurance Advisory',
    'provider' => ['@id' => SITE_URL . '/#organization'],
    'areaServed' => 'IN',
    'name' => 'Insurance Solutions',
    'description' => 'IRDAI-licensed insurance advisory across life, health, critical illness and family protection.',
  ]],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<!-- HERO -->
<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('shield', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Services &rsaquo; Insurance Solutions</span>
      <h1 class="headline headline--light">Protect <em>what matters most</em>.</h1>
      <p class="lead">Protection is an important part of financial preparedness. As an IRDAI-Licensed Insurance Advisor (Agency Code <?= IRDAI_AGENCY_CODE ?>), we help you understand different insurance products and coverage options &mdash; so you can make informed decisions about protecting against unexpected financial obligations.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">How we work</span>
        <h2>Information first. Sales pressure never.</h2>
        <p>Insurance is often the least understood part of a household&rsquo;s financial life &mdash; and often the part where mistakes are most expensive. Our approach focuses on clear information, product understanding and ongoing service, so you understand the role of insurance in protecting income, health and family financial security.</p>
        <p>We don&rsquo;t recommend the policy with the highest commission. We explain what different policies cover, what they don&rsquo;t, how riders work, what a claim process actually looks like &mdash; and then help you choose cover that fits your situation.</p>
        <div class="card card--gold mt-3" style="padding:1.5rem;">
          <div style="display:flex; align-items:center; gap:1rem;">
            <?= icon_badge('users', 'navy') ?>
            <div>
              <strong style="color:var(--ink-navy); font-size:1.05rem;">Who this is for</strong>
              <p class="mb-0 muted" style="margin-top:0.25rem;">Individuals and families seeking to understand insurance options and strengthen their financial protection &mdash; working professionals, families, business owners, and individuals with significant financial responsibilities.</p>
            </div>
          </div>
        </div>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">What we cover</span>
        <h2>Six areas we work across.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('heart') ?></span>
            <div><strong>Life &amp; Term Insurance</strong><p>Information across life and term products &mdash; including how term cover typically differs from savings-linked life policies.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('shield') ?></span>
            <div><strong>Health Insurance</strong><p>Understanding coverage, sum-insured decisions, network hospitals and the options available in the current market.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('life-buoy') ?></span>
            <div><strong>Critical Illness Protection</strong><p>Information on critical illness cover and its role alongside regular health insurance.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('users') ?></span>
            <div><strong>Family Protection</strong><p>Helping families understand the importance and structure of appropriate cover for household needs.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('file-text') ?></span>
            <div><strong>Insurance Product Information</strong><p>Clear, structured explanations of product features, benefits, exclusions and key considerations before you buy.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('phone') ?></span>
            <div><strong>Ongoing Service &amp; Support</strong><p>Continued assistance and communication for the length of the relationship &mdash; renewals, endorsements and claim assistance when it matters.</p></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section--ivory">
  <div class="wrap-tight">
    <div class="founder-quote" data-reveal>
      <p>How a policy is sold matters as much as what&rsquo;s in it. Insurance agents and advisors in India earn commission from the insurer. We&rsquo;re happy to walk you through the commission structure of any product before you sign anything.</p>
      <footer>Our position on transparency</footer>
    </div>
  </div>
</section>

<section class="section section--tight">
  <div class="wrap-text">
    <div class="card" data-reveal style="border-left:3px solid var(--champagne-gold); background:var(--pale-gold); padding:1.75rem;">
      <div style="display:flex; align-items:flex-start; gap:1rem;">
        <?= icon_badge('lock', 'navy') ?>
        <div>
          <p class="mb-0"><strong>Statutory note.</strong> Insurance is the subject matter of solicitation. Please read the policy wording carefully before concluding a sale. Product benefits, features and exclusions vary by insurer and by product; the applicable policy document is the definitive reference.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Not sure whether your family is properly covered?</h2>
    <p>Book a 30-minute consultation. We&rsquo;ll review what you have and explain, in plain language, whether there are gaps worth closing.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
