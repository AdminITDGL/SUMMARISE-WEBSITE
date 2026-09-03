<?php
require_once __DIR__ . '/includes/config.php';
$page = [
  'title'       => 'Client Stories',
  'description' => 'Testimonials and anonymised case studies from Summarise Corporate clients — phased in with written consent.',
  'breadcrumbs' => [['Home', '/'], ['Client Stories', '/client-stories']],
];
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Client Stories</span>
    <h1>What clients say &mdash; in their own words.</h1>
    <p class="lead">The best signal of whether a financial firm is worth working with is what its long-standing clients actually say. We&rsquo;re phasing these in over 2026, published only with written consent and anonymised where relatives or third parties are named.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="card" style="text-align:center;padding:3rem 2rem;">
      <span class="pill mb-2" style="display:inline-block;">Coming soon &mdash; with client consent</span>
      <h3>Testimonials and case studies are being collected.</h3>
      <p class="muted" style="max-width:60ch;margin:0 auto;">Our practice is more than two decades old, so there is no shortage of relationships to draw from. What matters is that every story published here has explicit written consent from the client, and is anonymised wherever it needs to be to protect their family&rsquo;s privacy.</p>
      <p class="mt-4"><a class="btn btn-primary" href="contact.php" data-modal-open="calendly">Book a Consultation</a></p>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap-text text-center">
    <h2>Are you an existing client?</h2>
    <p>If you&rsquo;d be happy to be featured &mdash; named or anonymised &mdash; please email <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a> and we&rsquo;ll be in touch with the consent form.</p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
