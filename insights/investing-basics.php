<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Investing Basics — Insights',
  'description' => 'Educational articles on SIPs, asset classes, portfolio construction and the fundamentals every investor should understand before they buy.',
  'breadcrumbs' => [['Home', '/'], ['Insights', '/insights/'], ['Investing Basics', '/insights/investing-basics']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Insights &rsaquo; Investing Basics</span>
    <h1>Investing Basics</h1>
    <p class="lead">Fundamentals every investor should know &mdash; SIPs, asset classes, portfolio construction, and the tradeoffs no one bothers to explain up front.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="card" style="text-align:center;padding:3rem 2rem;">
      <span class="pill mb-2" style="display:inline-block;">Coming soon</span>
      <h3>New articles are being written for this category.</h3>
      <p class="muted">We&rsquo;re building this out through the second half of 2026 &mdash; short, plain-language explainers on SIP mechanics, asset allocation basics, and the &ldquo;boring stuff that matters&rdquo; series.</p>
      <p class="mt-3"><a class="btn btn-secondary" href="index.php">Back to Insights hub</a></p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
