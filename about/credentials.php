<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Credentials & Registrations',
  'description' => 'AMFI ARN-78740, IRDAI Agency Code 00413837, and the regulatory framework Summarise Corporate operates under. What each credential does and does not permit.',
  'breadcrumbs' => [['Home', '/'], ['About', '/about/'], ['Credentials', '/about/credentials']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('award', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">About &rsaquo; Credentials &amp; Registrations</span>
      <h1 class="headline headline--light">The registrations that back <em>our practice</em>.</h1>
      <p class="lead">On one page: exactly which regulatory registrations we hold and what each of them actually permits us to do.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap-tight">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Currently held</span>
      <h2>Three active registrations.</h2>
    </div>

    <div class="card mb-3" data-reveal data-reveal-delay="1">
      <div class="icon-card__head">
        <?= icon_badge('chart-line', 'gold', 'lg') ?>
        <div>
          <span class="card__tag">Mutual Funds</span>
          <h3 style="margin:0;">AMFI-Registered Mutual Fund Distributor</h3>
        </div>
      </div>
      <p class="mb-1"><strong>ARN:</strong> <?= substr(AMFI_ARN, 4) ?></p>
      <p><strong>What this permits:</strong> distribution of mutual fund schemes and earning of commission from asset management companies for products distributed to clients.</p>
      <p class="mb-0"><strong>What this does <em>not</em> permit:</strong> charging investment advisory fees, or holding out as an investment adviser. AMFI-registered distributors are compensated through commission, not fees. See our <a href="../legal/disclaimers.php">full disclosures</a>.</p>
    </div>

    <div class="card mb-3" data-reveal data-reveal-delay="2">
      <div class="icon-card__head">
        <?= icon_badge('shield', '', 'lg') ?>
        <div>
          <span class="card__tag">Insurance</span>
          <h3 style="margin:0;">IRDAI-Licensed Insurance Advisor</h3>
        </div>
      </div>
      <p class="mb-1"><strong>Agency Code:</strong> <?= IRDAI_AGENCY_CODE ?></p>
      <p><strong>What this permits:</strong> solicitation and distribution of life, health and general insurance products from empanelled insurers. &ldquo;Insurance Advisor&rdquo; is an IRDAI-recognised designation for licensed agents.</p>
      <p class="mb-0"><strong>Compensation:</strong> commission from the insurer for policies placed, in line with IRDAI regulations.</p>
    </div>

    <div class="card" data-reveal data-reveal-delay="3">
      <div class="icon-card__head">
        <?= icon_badge('file-text', 'gold', 'lg') ?>
        <div>
          <span class="card__tag">Underlying certification</span>
          <h3 style="margin:0;">NISM-Series-V-A: Mutual Fund Distributors</h3>
        </div>
      </div>
      <p class="mb-0">The certification underlying the AMFI ARN. Maintained through the required Continuing Professional Education (CPE) cycles.</p>
    </div>
  </div>
</section>

<section class="section section--ivory">
  <div class="wrap-tight">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">What we are <em>not</em></span>
      <h2>Where we explicitly draw the line.</h2>
    </div>
    <div class="card" data-reveal>
      <div class="icon-card__head">
        <?= icon_badge('lock', 'navy', 'lg') ?>
        <div>
          <h3 style="margin:0;">Not a SEBI-Registered Investment Adviser (RIA)</h3>
        </div>
      </div>
      <p class="mb-1">Summarise Corporate does not hold SEBI Investment Adviser registration. Accordingly, we do not use terms such as &ldquo;financial planner,&rdquo; &ldquo;investment adviser,&rdquo; &ldquo;advisory services,&rdquo; &ldquo;wealth manager,&rdquo; or similar terminology that would imply we provide regulated investment advisory services.</p>
      <p class="mb-0">We provide financial <strong>information</strong>, <strong>insights</strong> and <strong>product distribution</strong> under our AMFI and IRDAI registrations. Where a client needs regulated advice, tax planning or legal counsel, we coordinate with their respective professional advisors.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap-tight">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Company registration</span>
      <h2>The corporate entity.</h2>
    </div>
    <div class="grid grid-2" data-reveal>
      <div class="value-item">
        <h3><?= icon_inline('building') ?> Legal name</h3>
        <p>Summarise Corporate Private Limited</p>
      </div>
      <div class="value-item">
        <h3><?= icon_inline('file-text') ?> Type</h3>
        <p>Private Limited Company (India)</p>
      </div>
      <div class="value-item">
        <h3><?= icon_inline('map-pin') ?> Registered office</h3>
        <p>322, Tulsiani Chambers, 212 Free Press Journal Marg, Nariman Point, Mumbai &ndash; 400021</p>
      </div>
      <div class="value-item">
        <h3><?= icon_inline('clock') ?> Founded</h3>
        <p>2003</p>
      </div>
    </div>
    <p class="small muted mt-4 text-center">For a fuller regulatory framework &mdash; mandatory disclaimers, commission disclosure, market-risk language and grievance redressal &mdash; please see the <a href="../legal/">Disclosures &amp; Legal</a> section.</p>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Questions about how we&rsquo;re regulated?</h2>
    <p>Happy to walk you through it in more detail on a call.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
