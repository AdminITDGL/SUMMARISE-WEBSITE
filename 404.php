<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page = [
  'title'       => 'Page Not Found',
  'description' => 'That page couldn\'t be found. Return to the Summarise Corporate homepage or browse our services and insights.',
  'noindex'     => true,
];
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="section" style="padding-top:6rem;padding-bottom:6rem;text-align:center;">
  <div class="wrap-text">
    <span class="eyebrow">404</span>
    <h1>That page isn&rsquo;t here.</h1>
    <p class="lead">The link may be broken or the page may have moved. Nothing lost &mdash; here are a few good places to go instead.</p>

    <div class="grid grid-2 mt-4">
      <a class="card" href="/">
        <h3>Home</h3>
        <p class="muted">Start from the top.</p>
      </a>
      <a class="card" href="/services/">
        <h3>Our Services</h3>
        <p class="muted">Mutual funds, insurance, integrated perspective, business owners.</p>
      </a>
      <a class="card" href="/insights/">
        <h3>Insights</h3>
        <p class="muted">Educational articles on investing, insurance and business finance.</p>
      </a>
      <a class="card" href="/contact.php">
        <h3>Contact</h3>
        <p class="muted">Book a consultation or reach us on WhatsApp.</p>
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
