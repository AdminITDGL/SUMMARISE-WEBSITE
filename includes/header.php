<?php
require_once __DIR__ . '/config.php';
$__root = site_root();
?>
<a class="skip-link" href="#main" style="position:absolute;left:-9999px;top:0;background:#fff;color:#0F2442;padding:8px 12px;z-index:9999;" onfocus="this.style.left='8px'" onblur="this.style.left='-9999px'">Skip to main content</a>
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
        <a class="btn btn-primary btn-sm" href="<?= $__root ?>contact.php" data-modal-open="calendly">Book a Consultation</a>
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
