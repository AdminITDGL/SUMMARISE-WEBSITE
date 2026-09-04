<?php
require_once __DIR__ . '/config.php';
$__root = site_root();
?>
</main>

<!-- Per-page disclaimer bar (mandatory on financial services pages) -->
<?php if (empty($page['hide_disclaimer'])): ?>
<div class="page-disclaimer">
  <div class="wrap">
    <p class="mb-0">
      <strong>Disclaimer.</strong>
      Summarise Corporate Private Limited is an AMFI-registered Mutual Fund Distributor (ARN-<?= substr(AMFI_ARN, 4) ?>) and an IRDAI-Licensed Insurance Advisor (Agency Code <?= IRDAI_AGENCY_CODE ?>). We are <strong>not</strong> a SEBI-registered Investment Adviser (RIA). Content on this website is educational and informational in nature — not investment, tax or legal advice. Mutual fund investments are subject to market risks. Please read all scheme-related documents carefully before investing. See <a href="<?= $__root ?>legal/disclaimers.php">full disclosures</a>.
    </p>
  </div>
</div>
<?php endif; ?>

<footer class="site-footer" role="contentinfo">
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <a class="brand" href="<?= $__root ?>">
          <img src="<?= $__root ?>assets/img/brand/logo-white.png" alt="<?= htmlspecialchars(BIZ_TRADING_NAME, ENT_QUOTES) ?>" width="1600" height="1600" loading="lazy" decoding="async">
        </a>
        <p class="mt-2"><?= htmlspecialchars(BIZ_TAGLINE, ENT_QUOTES) ?></p>
        <p class="small mt-2" style="color:rgba(255,255,255,0.55);">
          Serving HNI families, business owners &amp; senior professionals across India since <?= BIZ_FOUNDED ?>.
        </p>
      </div>

      <div>
        <h4>Explore</h4>
        <ul class="footer-list">
          <li><a href="<?= $__root ?>about/">About Us</a></li>
          <li><a href="<?= $__root ?>services/">Services</a></li>
          <li><a href="<?= $__root ?>who-we-serve/">Who We Serve</a></li>
          <li><a href="<?= $__root ?>insights/">Insights</a></li>
          <li><a href="<?= $__root ?>client-stories.php">Client Stories</a></li>
          <li><a href="<?= $__root ?>careers.php">Careers</a></li>
          <li><a href="<?= $__root ?>faqs.php">FAQs</a></li>
        </ul>
      </div>

      <div>
        <h4>Services</h4>
        <ul class="footer-list">
          <li><a href="<?= $__root ?>services/mutual-fund-distribution.php">Mutual Fund Distribution</a></li>
          <li><a href="<?= $__root ?>services/insurance.php">Insurance Solutions</a></li>
          <li><a href="<?= $__root ?>services/integrated-financial-perspective.php">Integrated Financial Perspective</a></li>
          <li><a href="<?= $__root ?>services/business-owner-solutions.php">Business Owner Solutions</a></li>
        </ul>
      </div>

      <div>
        <h4>Contact</h4>
        <span class="footer-contact-line">
          <?= htmlspecialchars(BIZ_ADDR_LINE1, ENT_QUOTES) ?>,<br>
          <?= htmlspecialchars(BIZ_ADDR_LINE2, ENT_QUOTES) ?>,<br>
          <?= htmlspecialchars(BIZ_ADDR_AREA, ENT_QUOTES) ?>, <?= htmlspecialchars(BIZ_ADDR_CITY, ENT_QUOTES) ?> &ndash; <?= BIZ_ADDR_PIN ?>
        </span>
        <span class="footer-contact-line">
          <a href="tel:<?= BIZ_PHONE_RAW ?>"><?= htmlspecialchars(BIZ_PHONE, ENT_QUOTES) ?></a>
        </span>
        <span class="footer-contact-line">
          <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a>
        </span>
        <span class="footer-contact-line">
          <a href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener">WhatsApp us</a>
        </span>
      </div>
    </div>

    <!-- AMFI-mandated display (min 12pt equivalent) -->
    <div class="footer-mandatory">
      <p class="mb-0">
        <strong>AMFI-Registered Mutual Fund Distributor</strong> — ARN: <?= substr(AMFI_ARN, 4) ?> &nbsp;|&nbsp;
        <strong>IRDAI-Licensed Insurance Advisor</strong> — Agency Code: <?= IRDAI_AGENCY_CODE ?>
      </p>
      <p class="mb-0 mt-1">
        Summarise Corporate Private Limited earns commission income from asset management companies and insurance providers for products distributed to clients. We do not charge advisory fees. Mutual fund investments are subject to market risks; please read the scheme information document and offer document carefully before investing. Insurance is the subject matter of solicitation. For grievances, please see our <a href="<?= $__root ?>legal/grievance-redressal.php">grievance redressal</a> process.
      </p>
    </div>

    <div class="footer-bottom">
      <div>&copy; <?= date('Y') ?> <?= htmlspecialchars(BIZ_LEGAL_NAME, ENT_QUOTES) ?>. All rights reserved.</div>
      <ul class="legal-links">
        <li><a href="<?= $__root ?>legal/">Disclosures &amp; Legal</a></li>
        <li><a href="<?= $__root ?>legal/privacy-policy.php">Privacy</a></li>
        <li><a href="<?= $__root ?>legal/terms-of-use.php">Terms</a></li>
        <li><a href="<?= $__root ?>legal/grievance-redressal.php">Grievance Redressal</a></li>
      </ul>
    </div>
  </div>
</footer>

<!-- Sticky action stack — always visible: Book a Meeting + WhatsApp -->
<div class="sticky-actions" aria-label="Quick actions">
  <button type="button" class="sticky-btn sticky-btn--book" data-modal-open="calendly" aria-label="Book a meeting">
    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="7"/><line x1="16" y1="3" x2="16" y2="7"/></svg>
    <span>Book a Meeting</span>
  </button>
  <a class="sticky-btn sticky-btn--wa" href="https://wa.me/<?= BIZ_WHATSAPP ?>?text=<?= urlencode('Hi Summarise Corporate, I would like to book a consultation.') ?>" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M16 3C9 3 3.5 8.5 3.5 15.4c0 2.5.7 4.9 2 7L3 29l6.9-2.4c2 .9 4 1.3 6.2 1.3h.1c7 0 12.5-5.5 12.5-12.4C28.7 8.5 23 3 16 3zm0 22.6c-1.9 0-3.7-.5-5.3-1.4l-.4-.2-4.1 1.4 1.4-4-.3-.4c-1-1.6-1.5-3.5-1.5-5.4 0-5.6 4.6-10.1 10.2-10.1s10.2 4.5 10.2 10.1c0 5.6-4.6 10-10.2 10zm5.8-7.5c-.3-.2-1.8-.9-2.1-1s-.5-.2-.7.2c-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.2-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.7.1-.1.3-.4.5-.6.2-.2.2-.3.3-.5.1-.2.1-.4 0-.6-.1-.2-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5H12c-.2 0-.5.1-.7.4-.2.3-.9.9-.9 2.2 0 1.3.9 2.5 1 2.7.1.2 1.9 3 4.7 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.8-.7 2-1.5.2-.7.2-1.4.2-1.5-.1-.1-.3-.2-.6-.4z"/></svg>
  </a>
</div>

<!-- Calendly modal (site-wide) -->
<?php include __DIR__ . '/calendly-modal.php'; ?>

<script src="<?= $__root ?>assets/js/main.js" defer></script>
</body>
</html>
