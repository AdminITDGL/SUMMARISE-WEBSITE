<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Insurance & Protection — Insights',
  'description' => 'Insurance product education, protection planning fundamentals, and product-understanding notes on life, term, health and critical-illness cover.',
  'breadcrumbs' => [['Home', '/'], ['Insights', '/insights/'], ['Insurance & Protection', '/insights/insurance-protection']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Insights &rsaquo; Insurance &amp; Protection</span>
    <h1>Insurance &amp; Protection</h1>
    <p class="lead">Product understanding across life, term, health and critical illness. Written to help you know what you&rsquo;re buying &mdash; and what you&rsquo;re not.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="card" style="text-align:center;padding:3rem 2rem;">
      <span class="pill mb-2" style="display:inline-block;">Coming soon</span>
      <h3>New articles are being written for this category.</h3>
      <p class="muted">Planned pieces include term-versus-endowment, how sum insured should track dependence rather than income, and what a claim process actually looks like in India.</p>
      <p class="mt-3"><a class="btn btn-secondary" href="index.php">Back to Insights hub</a></p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
