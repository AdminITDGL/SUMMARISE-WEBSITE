<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Market & Product Updates — Insights',
  'description' => 'Commentary on Indian markets and product/regulatory developments. Educational only — never specific stock or fund recommendations.',
  'breadcrumbs' => [['Home', '/'], ['Insights', '/insights/'], ['Market & Product Updates', '/insights/market-updates']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Insights &rsaquo; Market &amp; Product Updates</span>
    <h1>Market &amp; Product Updates</h1>
    <p class="lead">Commentary on Indian markets and product/regulatory developments. Educational only &mdash; we never publish specific stock or fund recommendations here.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="card" style="text-align:center;padding:3rem 2rem;">
      <span class="pill mb-2" style="display:inline-block;">Coming soon</span>
      <h3>New commentary is being written for this category.</h3>
      <p class="muted">Expect short notes on regulatory changes affecting distributors, new fund categories, and market events worth understanding &mdash; without a &ldquo;buy this now&rdquo; take.</p>
      <p class="mt-3"><a class="btn btn-secondary" href="index.php">Back to Insights hub</a></p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
