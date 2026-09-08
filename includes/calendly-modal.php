<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/icons.php';
$__root = site_root();

/*
 * Book-a-meeting modal
 * --------------------
 * Two modes controlled by CALENDLY_URL in includes/config.php:
 *
 *  A. Placeholder mode (default) — a designed "Book with Kuresh" screen with
 *     his portrait and three working actions: WhatsApp, phone, email. This
 *     is what visitors see today.
 *  B. Calendly mode — flip CALENDLY_URL to a real https://calendly.com/...
 *     link. The iframe below activates and the placeholder screen goes away.
 */
$__is_placeholder = !CALENDLY_URL
  || strpos(CALENDLY_URL, 'calendly.com/summarise-corporate') !== false;
?>
<div class="modal" data-modal="calendly" role="dialog" aria-modal="true" aria-labelledby="calendly-modal-title" aria-hidden="true">
  <div class="modal__scrim" data-modal-close></div>
  <div class="modal__panel <?= $__is_placeholder ? 'modal__panel--book' : '' ?>">
    <button type="button" class="modal__close" data-modal-close aria-label="Close">&times;</button>

<?php if ($__is_placeholder): ?>
    <!-- Book-with-Kuresh screen (Calendly not connected yet) -->
    <div class="modal__body">
      <div class="book-modal">
        <aside class="book-modal__photo">
          <img src="<?= $__root ?>assets/img/team/kuresh-portrait.jpg"
               alt="Kuresh Morbiwala, Founder and Principal Consultant"
               width="960" height="1280" loading="eager" decoding="async">
          <div class="book-modal__photo-overlay">
            <h3 id="calendly-modal-title">Kuresh Morbiwala</h3>
            <span>Founder &amp; Principal Consultant</span>
            <div class="book-modal__badges">
              <span class="book-modal__badge"><?= icon('shield') ?> AMFI · ARN-<?= substr(AMFI_ARN, 4) ?></span>
              <span class="book-modal__badge"><?= icon('award') ?> IRDAI · <?= IRDAI_AGENCY_CODE ?></span>
              <span class="book-modal__badge"><?= icon('clock') ?> 20+ years</span>
            </div>
          </div>
        </aside>

        <section class="book-modal__body">
          <div class="book-modal__eyebrow"><?= icon('sparkle') ?> Book a private conversation</div>
          <h2 class="book-modal__title">Speak with <em>Kuresh</em>.</h2>
          <p class="book-modal__lead">
            An initial call is 30 minutes. No product pitch, no obligation &mdash; we&rsquo;ll listen to your situation and explain what a relationship with us would look like.
          </p>

          <div class="book-modal__actions">
            <!-- 1. Book an appointment (Calendly). Placeholder for now, wires
                    to real Calendly the moment CALENDLY_URL is set in config. -->
            <a class="book-action book-action--appt"
               href="<?= htmlspecialchars(CALENDLY_URL, ENT_QUOTES) ?>"
               target="_blank"
               rel="noopener"
               data-book-appt>
              <span class="book-action__icon" style="background:var(--grad-navy); color:var(--champagne-gold);"><?= icon('calendar') ?></span>
              <span class="book-action__body">
                <strong>Book an appointment with Kuresh</strong>
                <em>Pick a 30-minute slot on his calendar</em>
              </span>
              <span class="book-action__cta">Open calendar <?= icon('arrow-right') ?></span>
            </a>

            <!-- 2. WhatsApp: fastest response path. -->
            <a class="book-action book-action--wa"
               href="https://wa.me/<?= BIZ_WHATSAPP ?>?text=<?= urlencode('Hi Kuresh, I would like to book a 30-minute consultation.') ?>"
               target="_blank" rel="noopener">
              <span class="book-action__icon" style="background:#25D366; color:white;">
                <svg viewBox="0 0 32 32" width="22" height="22" fill="currentColor" aria-hidden="true"><path d="M16 3C9 3 3.5 8.5 3.5 15.4c0 2.5.7 4.9 2 7L3 29l6.9-2.4c2 .9 4 1.3 6.2 1.3h.1c7 0 12.5-5.5 12.5-12.4C28.7 8.5 23 3 16 3zm0 22.6c-1.9 0-3.7-.5-5.3-1.4l-.4-.2-4.1 1.4 1.4-4-.3-.4c-1-1.6-1.5-3.5-1.5-5.4 0-5.6 4.6-10.1 10.2-10.1s10.2 4.5 10.2 10.1c0 5.6-4.6 10-10.2 10zm5.8-7.5c-.3-.2-1.8-.9-2.1-1s-.5-.2-.7.2c-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.2-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.7.1-.1.3-.4.5-.6.2-.2.2-.3.3-.5.1-.2.1-.4 0-.6-.1-.2-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5H12c-.2 0-.5.1-.7.4-.2.3-.9.9-.9 2.2 0 1.3.9 2.5 1 2.7.1.2 1.9 3 4.7 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.8-.7 2-1.5.2-.7.2-1.4.2-1.5-.1-.1-.3-.2-.6-.4z"/></svg>
              </span>
              <span class="book-action__body">
                <strong>Message on WhatsApp</strong>
                <em>Usually replies same business day</em>
              </span>
              <span class="book-action__cta">Open WhatsApp <?= icon('arrow-right') ?></span>
            </a>

            <!-- 3. Email fallback. -->
            <a class="book-action book-action--mail" href="mailto:<?= BIZ_EMAIL ?>?subject=<?= urlencode('Consultation enquiry from summarise.in') ?>">
              <span class="book-action__icon" style="background:var(--pale-gold); color:var(--champagne-deep);"><?= icon('mail') ?></span>
              <span class="book-action__body">
                <strong>Email Kuresh</strong>
                <em><?= BIZ_EMAIL ?></em>
              </span>
              <span class="book-action__cta">Compose <?= icon('arrow-right') ?></span>
            </a>
          </div>

          <p class="book-modal__note">
            <?= icon('phone') ?>
            Prefer to call? Dial <a href="tel:<?= BIZ_PHONE_RAW ?>" style="color:var(--ink-navy); font-weight:500;"><?= BIZ_PHONE ?></a> &middot; Mon–Sat, 10am–7pm IST.
          </p>
        </section>
      </div>
    </div>

<?php else: ?>
    <!-- Calendly-connected mode: full-panel iframe (lazy-loaded via main.js) -->
    <div class="modal__body">
      <h2 id="calendly-modal-title" style="position:absolute;left:-9999px;">Book a consultation with Summarise Corporate</h2>
      <iframe
        data-src="<?= htmlspecialchars(CALENDLY_URL, ENT_QUOTES) ?>"
        title="Book a consultation"
        loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin"
        allow="fullscreen">
      </iframe>
    </div>
<?php endif; ?>

  </div>
</div>
