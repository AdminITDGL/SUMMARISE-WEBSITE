<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Disclosures & Legal',
  'description' => 'Regulatory disclosures, commission disclosure, privacy policy, terms of use and grievance redressal process for Summarise Corporate Private Limited.',
  'breadcrumbs' => [['Home', '/'], ['Disclosures & Legal', '/legal/']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Disclosures &amp; Legal</span>
    <h1>The regulatory framework we operate under.</h1>
    <p class="lead">One place for the mandatory disclosures, our commission model, how we handle your data, our terms of use, and the process to raise a grievance.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="grid grid-2">
      <a class="card" href="disclaimers.php">
        <span class="card__tag">Regulatory</span>
        <h3>Disclaimers &amp; Commission Disclosure</h3>
        <p class="muted">AMFI and IRDAI mandated disclosures, market-risk wording, our commission-based compensation model in full.</p>
        <span class="card__link">Read disclaimers</span>
      </a>
      <a class="card" href="privacy-policy.php">
        <span class="card__tag">Data</span>
        <h3>Privacy Policy</h3>
        <p class="muted">What personal data we collect, why, how we use it, and your rights over it.</p>
        <span class="card__link">Read privacy policy</span>
      </a>
      <a class="card" href="terms-of-use.php">
        <span class="card__tag">Website</span>
        <h3>Terms of Use</h3>
        <p class="muted">The terms under which this website may be used. Nothing here is legal or financial advice.</p>
        <span class="card__link">Read terms</span>
      </a>
      <a class="card" href="grievance-redressal.php">
        <span class="card__tag">Complaints</span>
        <h3>Grievance Redressal</h3>
        <p class="muted">How to raise a complaint with us, and the escalation paths to AMFI, IRDAI and other regulatory bodies.</p>
        <span class="card__link">See process</span>
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
