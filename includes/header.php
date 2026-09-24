<?php
require_once __DIR__ . '/config.php';
$__root = site_root();
?>
<a class="skip-link" href="#main" style="position:absolute;left:-9999px;top:0;background:#fff;color:#0F2442;padding:8px 12px;z-index:9999;" onfocus="this.style.left='8px'" onblur="this.style.left='-9999px'">Skip to main content</a>

<!-- Top contact bar — thin navy strip above the main nav.
     Hidden on mobile ≤640px (contact info still available in the footer). -->
<div class="top-bar" role="complementary" aria-label="Contact information">
  <div class="wrap top-bar__inner">
    <div class="top-bar__contacts">
      <a class="top-bar__item" href="tel:<?= BIZ_PHONE_RAW ?>" aria-label="Call Summarise Corporate">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2z"/></svg>
        <span><?= BIZ_PHONE ?></span>
      </a>
      <a class="top-bar__item" href="mailto:<?= BIZ_EMAIL_CONNECT ?>" aria-label="Email for consultations">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2 6 12 13 22 6"/></svg>
        <span class="top-bar__label">Consultations:</span>
        <span><?= BIZ_EMAIL_CONNECT ?></span>
      </a>
      <a class="top-bar__item" href="mailto:<?= BIZ_EMAIL_CARE ?>" aria-label="Customer support email">
        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/><line x1="4.9" y1="4.9" x2="9.2" y2="9.2"/><line x1="14.8" y1="14.8" x2="19.1" y2="19.1"/></svg>
        <span class="top-bar__label">Support:</span>
        <span><?= BIZ_EMAIL_CARE ?></span>
      </a>
    </div>
    <div class="top-bar__badge">
      <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z"/></svg>
      AMFI · <?= AMFI_ARN ?>  |  IRDAI · <?= IRDAI_AGENCY_CODE ?>
    </div>
  </div>
</div>

<header class="site-header" role="banner">
  <div class="wrap">
    <nav class="nav" data-nav aria-label="Primary">
      <a class="brand" href="<?= $__root ?>" aria-label="<?= htmlspecialchars(BIZ_TRADING_NAME, ENT_QUOTES) ?> — Home">
        <img src="<?= $__root ?>assets/img/brand/logo.png" alt="<?= htmlspecialchars(BIZ_TRADING_NAME, ENT_QUOTES) ?> — AMFI-registered Mutual Fund Distributor &amp; IRDAI-Licensed Insurance Advisor, Mumbai" width="1600" height="1600" fetchpriority="high" decoding="async">
      </a>

      <ul class="nav-list" role="menubar">
        <li role="none"><a role="menuitem" href="<?= $__root ?>">Home</a></li>

        <li class="nav-has-menu" role="none">
          <a role="menuitem" href="<?= $__root ?>about/" aria-haspopup="true">About</a>
          <ul class="nav-submenu" role="menu">
            <li><a href="<?= $__root ?>about/our-story.php">Our Story</a></li>
            <li><a href="<?= $__root ?>about/mission-vision-values.php">Mission, Vision &amp; Values</a></li>
            <li><a href="<?= $__root ?>about/team.php">Meet the Team</a></li>
            <li><a href="<?= $__root ?>about/credentials.php">Credentials &amp; Registrations</a></li>
          </ul>
        </li>

        <li class="nav-has-menu" role="none">
          <a role="menuitem" href="<?= $__root ?>services/" aria-haspopup="true">Services</a>
          <ul class="nav-submenu" role="menu">
            <li><a href="<?= $__root ?>services/mutual-fund-distribution.php">Mutual Fund Distribution</a></li>
            <li><a href="<?= $__root ?>services/insurance.php">Insurance Solutions</a></li>
            <li><a href="<?= $__root ?>services/integrated-financial-perspective.php">Integrated Financial Perspective</a></li>
            <li><a href="<?= $__root ?>services/business-owner-solutions.php">Business Owner Solutions</a></li>
          </ul>
        </li>

        <li class="nav-has-menu" role="none">
          <a role="menuitem" href="<?= $__root ?>who-we-serve/" aria-haspopup="true">Who We Serve</a>
          <ul class="nav-submenu" role="menu">
            <li><a href="<?= $__root ?>who-we-serve/hni.php">HNI Individuals &amp; Families</a></li>
            <li><a href="<?= $__root ?>who-we-serve/business-owners.php">Business Owners &amp; Entrepreneurs</a></li>
            <li><a href="<?= $__root ?>who-we-serve/executives-professionals.php">Senior Executives &amp; Professionals</a></li>
            <li><a href="<?= $__root ?>who-we-serve/young-professionals.php">Young Professionals</a></li>
          </ul>
        </li>

        <li role="none"><a role="menuitem" href="<?= $__root ?>insights/">Insights</a></li>
        <li role="none"><a role="menuitem" href="<?= $__root ?>faqs.php">FAQs</a></li>
        <li role="none"><a role="menuitem" href="<?= $__root ?>contact.php">Contact</a></li>
      </ul>

      <div class="nav-cta">
        <a class="btn btn-primary btn-sm" href="<?= htmlspecialchars(CALENDLY_URL, ENT_QUOTES) ?>" data-modal-open="calendly" target="_blank" rel="noopener">Book a Consultation</a>
      </div>

      <button class="nav-toggle" type="button" data-nav-toggle aria-expanded="false" aria-label="Toggle navigation">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
          <line x1="4" y1="7"  x2="20" y2="7"/>
          <line x1="4" y1="12" x2="20" y2="12"/>
          <line x1="4" y1="17" x2="20" y2="17"/>
        </svg>
      </button>
    </nav>
  </div>
</header>
<main id="main">
