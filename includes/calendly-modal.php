<?php require_once __DIR__ . '/config.php'; ?>
<div class="modal" data-modal="calendly" role="dialog" aria-modal="true" aria-labelledby="calendly-modal-title" aria-hidden="true">
  <div class="modal__scrim" data-modal-close></div>
  <div class="modal__panel">
    <button type="button" class="modal__close" data-modal-close aria-label="Close">&times;</button>
    <div class="modal__body">
      <h2 id="calendly-modal-title" class="sr-only" style="position:absolute;left:-9999px;">Book a consultation with Summarise Corporate</h2>
      <!--
        Calendly iframe.
        data-src is used instead of src so we lazy-load Calendly only when a
        visitor actually clicks "Book a Consultation". main.js swaps this in.
        Swap CALENDLY_URL in includes/config.php once the real link is provided.
      -->
      <iframe
        data-src="<?= htmlspecialchars(CALENDLY_URL, ENT_QUOTES) ?>"
        title="Book a consultation"
        loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin"
        allow="fullscreen">
      </iframe>
    </div>
  </div>
</div>
