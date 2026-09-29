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

          <p class="small muted mb-1" style="text-transform:uppercase; letter-spacing:0.12em; font-size:0.72rem; color:var(--champagne-deep); font-weight:500; margin-top:0.35rem;">Consultation booking</p>
          <p class="mb-1"><?= icon_inline('phone') ?> <a href="tel:<?= BIZ_PHONE_CONSULT_RAW ?>"><?= BIZ_PHONE_CONSULT ?></a></p>
          <p class="mb-3"><?= icon_inline('mail') ?> <a href="mailto:<?= BIZ_EMAIL_CONNECT ?>"><?= BIZ_EMAIL_CONNECT ?></a></p>

          <p class="small muted mb-1" style="text-transform:uppercase; letter-spacing:0.12em; font-size:0.72rem; color:var(--champagne-deep); font-weight:500;">Service &amp; support</p>
          <p class="mb-1"><?= icon_inline('phone') ?> <a href="tel:<?= BIZ_PHONE_CARE_RAW ?>"><?= BIZ_PHONE_CARE ?></a></p>
          <p class="mb-0"><?= icon_inline('mail') ?> <a href="mailto:<?= BIZ_EMAIL_CARE ?>"><?= BIZ_EMAIL_CARE ?></a></p>
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

          <!--
            Contact form → emails connect@summarise.in via FormSubmit.co.
            First submission triggers a one-time activation email that must be
            opened + confirmed once. After that, every future submission is
            delivered instantly with no signup required. Once we're on the
            client's own PHP server, this fetch endpoint can be swapped for
            a native contact-submit.php that uses mail() or SMTP.
          -->
          <form id="contact-form" data-contact-form novalidate>
            <input type="hidden" name="_subject"    value="New contact enquiry from summarise.in">
            <input type="hidden" name="_captcha"    value="false">
            <input type="hidden" name="_template"   value="table">
            <input type="hidden" name="Source"      value="Contact page">
            <!-- Honeypot — bots fill this, humans don't (it's visually hidden) -->
            <input type="text"   name="_honey"      style="display:none" tabindex="-1" autocomplete="off">

            <div class="form-field">
              <label for="cf-name">Your name</label>
              <input type="text" id="cf-name" name="Name" required autocomplete="name">
            </div>
            <div class="form-field">
              <label for="cf-email">Email</label>
              <input type="email" id="cf-email" name="Email" required autocomplete="email">
            </div>
            <div class="form-field">
              <label for="cf-phone">Phone (optional)</label>
              <input type="tel" id="cf-phone" name="Phone" autocomplete="tel">
            </div>
            <div class="form-field">
              <label for="cf-topic">What is this about?</label>
              <select id="cf-topic" name="Topic">
                <option value="Book a consultation">Book a consultation</option>
                <option value="Mutual fund distribution">Mutual fund distribution</option>
                <option value="Insurance">Insurance</option>
                <option value="Integrated financial perspective">Integrated financial perspective</option>
                <option value="Business owner solutions">Business owner solutions</option>
                <option value="Careers">Careers</option>
                <option value="Something else">Something else</option>
              </select>
            </div>
            <div class="form-field">
              <label for="cf-msg">How can we help?</label>
              <textarea id="cf-msg" name="Message" rows="5" required></textarea>
            </div>

            <p class="form-note">By submitting, you agree to be contacted about your enquiry. Summarise Corporate does not sell or share your data. See our <a href="legal/privacy-policy.php">privacy policy</a>.</p>

            <button type="submit" class="btn btn-primary" data-contact-submit>
              <?= icon('mail') ?> Send message
            </button>

            <div data-contact-error hidden style="margin-top:1rem; padding:1rem 1.15rem; background:#fbeadb; border:1px solid #c98b4d; border-radius:var(--radius); color:#8f4b1e; font-size:0.9rem;"></div>
          </form>

          <div data-contact-success hidden style="margin-top:1rem; padding:1.75rem; background:#e5f6ed; border:1px solid #2f9e6b; border-radius:var(--radius-lg); color:#16794c;">
            <h3 style="margin:0 0 0.5rem; color:#16794c;">Thanks — message received.</h3>
            <p style="margin:0 0 0.75rem; color:#3d6a52;">Kuresh will get back to you within one business day at the email you provided. If you'd like to speak sooner, WhatsApp is the fastest way through.</p>
            <p style="margin:0;">
              <a class="btn btn-secondary btn-sm" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener">
                <?= icon('chat') ?> WhatsApp us
              </a>
            </p>
          </div>
        </div>

        <script>
        /* Wire contact form submission to FormSubmit → connect@summarise.in */
        (function () {
          var form = document.querySelector('[data-contact-form]');
          if (!form) return;
          var submit  = form.querySelector('[data-contact-submit]');
          var errorEl = document.querySelector('[data-contact-error]');
          var successEl = document.querySelector('[data-contact-success]');
          var ENDPOINT = 'https://formsubmit.co/ajax/<?= BIZ_EMAIL_CONNECT ?>';

          form.addEventListener('submit', function (e) {
            e.preventDefault();
            errorEl.hidden = true;

            // Honeypot check — silently drop bots
            if (form.querySelector('[name="_honey"]').value) {
              successEl.hidden = false; form.hidden = true;
              return;
            }

            if (!form.checkValidity()) { form.reportValidity(); return; }

            submit.setAttribute('disabled', 'true');
            var originalHTML = submit.innerHTML;
            submit.innerHTML = 'Sending…';

            var fd = new FormData(form);
            fetch(ENDPOINT, {
              method: 'POST',
              body: fd,
              headers: { 'Accept': 'application/json' }
            }).then(function (r) {
              return r.ok ? r.json() : Promise.reject(r);
            }).then(function () {
              form.hidden = true;
              successEl.hidden = false;
              successEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
              if (typeof window.gtag === 'function') {
                window.gtag('event', 'contact_submit', { topic: fd.get('Topic') || 'unknown' });
              }
            }).catch(function () {
              submit.removeAttribute('disabled');
              submit.innerHTML = originalHTML;
              errorEl.textContent = 'Sorry — something went wrong sending your message. Please try WhatsApp or email connect@summarise.in directly.';
              errorEl.hidden = false;
            });
          });
        })();
        </script>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
