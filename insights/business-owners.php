<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'For Business Owners — Insights',
  'description' => 'Continuity, succession, exit and personal-finance education for business owners — the financial considerations that sit outside the business itself.',
  'breadcrumbs' => [['Home', '/'], ['Insights', '/insights/'], ['For Business Owners', '/insights/business-owners']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Insights &rsaquo; For Business Owners</span>
    <h1>For Business Owners</h1>
    <p class="lead">Continuity, succession, exit and personal-finance considerations for owner-led households &mdash; the questions that shape every business owner&rsquo;s life outside the business.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="card" style="text-align:center;padding:3rem 2rem;">
      <span class="pill mb-2" style="display:inline-block;">Coming soon</span>
      <h3>New articles are being written for this category.</h3>
      <p class="muted">Planned pieces include diversifying the personal balance sheet away from the business, key-person cover basics, and how to start a family succession conversation.</p>
      <p class="mt-3"><a class="btn btn-secondary" href="index.php">Back to Insights hub</a></p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
