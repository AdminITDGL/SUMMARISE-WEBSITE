<?php
require_once __DIR__ . '/includes/config.php';
$page = [
  'title'       => 'Contact Us — Book a Consultation',
  'description' => 'Book a consultation with Summarise Corporate. Reach us on ' . BIZ_PHONE . ', WhatsApp, or email ' . BIZ_EMAIL . '. Office at Nariman Point, Mumbai.',
  'breadcrumbs' => [['Home', '/'], ['Contact', '/contact']],
  'json_ld'     => [[
    '@context' => 'https://schema.org',
    '@type'    => 'ContactPage',
    'name'     => 'Contact Summarise Corporate',
    'url'      => SITE_URL . '/contact',
  ]],
];
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Contact</span>
    <h1>Book a consultation.</h1>
    <p class="lead">An initial call is 30 minutes. We&rsquo;ll listen to your situation and explain what a relationship with us would look like &mdash; no product pitch, no obligation.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="grid grid-2" style="align-items:start;">
      <!-- LEFT: booking + contact -->
      <div>
        <h2>Three ways to reach us</h2>

        <div class="card mb-3">
          <h3 style="margin-top:0;">Book directly</h3>
          <p class="muted">Pick a slot on Kuresh&rsquo;s calendar &mdash; you&rsquo;ll get a confirmation email with the meeting details straight away.</p>
          <a class="btn btn-primary" href="#" data-modal-open="calendly">Open the calendar</a>
        </div>

        <div class="card mb-3">
          <h3 style="margin-top:0;">WhatsApp us</h3>
          <p class="muted">The fastest way to a real reply. We usually respond within a few business hours.</p>
          <a class="btn btn-secondary" href="https://wa.me/<?= BIZ_WHATSAPP ?>?text=<?= urlencode('Hi Summarise Corporate, I would like to book a consultation.') ?>" target="_blank" rel="noopener">Chat on WhatsApp</a>
        </div>

        <div class="card">
          <h3 style="margin-top:0;">Call or email</h3>
          <p class="mb-1"><strong>Phone:</strong> <a href="tel:<?= BIZ_PHONE_RAW ?>"><?= BIZ_PHONE ?></a></p>
          <p class="mb-1"><strong>Email:</strong> <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a></p>
          <p class="mb-0"><strong>Operations:</strong> <a href="mailto:<?= BIZ_EMAIL_OPS ?>"><?= BIZ_EMAIL_OPS ?></a></p>
        </div>
      </div>

      <!-- RIGHT: office + map + form -->
      <div>
        <h2>Our Mumbai office</h2>
        <address class="lead" style="font-style:normal;">
          <?= BIZ_ADDR_LINE1 ?>,<br>
          <?= BIZ_ADDR_LINE2 ?>,<br>
          <?= BIZ_ADDR_AREA ?>, <?= BIZ_ADDR_CITY ?> &ndash; <?= BIZ_ADDR_PIN ?><br>
          <?= BIZ_ADDR_STATE ?>, India
        </address>
        <p><a class="btn btn-ghost" href="<?= BIZ_MAP_URL ?>" target="_blank" rel="noopener">Open in Google Maps &rarr;</a></p>

        <div class="mt-4">
          <h3>Or send us a message</h3>
          <form method="post" action="#" onsubmit="event.preventDefault(); alert('Form handler goes live once we wire the mail backend. For now, please use WhatsApp or the calendar.');">
            <div class="form-field">
              <label for="cf-name">Your name</label>
              <input type="text" id="cf-name" name="name" required autocomplete="name">
            </div>
            <div class="form-field">
              <label for="cf-email">Email</label>
              <input type="email" id="cf-email" name="email" required autocomplete="email">
            </div>
            <div class="form-field">
              <label for="cf-phone">Phone (optional)</label>
              <input type="tel" id="cf-phone" name="phone" autocomplete="tel">
            </div>
            <div class="form-field">
              <label for="cf-msg">How can we help?</label>
              <textarea id="cf-msg" name="message" rows="5" required></textarea>
            </div>
            <p class="form-note">By submitting, you agree to be contacted about your enquiry. See our <a href="legal/privacy-policy.php">privacy policy</a>.</p>
            <button type="submit" class="btn btn-primary">Send message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
