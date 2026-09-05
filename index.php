<?php
require_once __DIR__ . '/includes/config.php';
$page = [
  'title'       => 'Financial Consulting for HNI Families & Business Owners',
  'description' => 'Summarise Corporate helps HNI families, business owners and senior professionals across India make informed financial decisions. AMFI-registered Mutual Fund Distributor (ARN-78740) and IRDAI-Licensed Insurance Advisor, Mumbai since 2003.',
  'page_class'  => 'home',
];
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<!-- HERO ================================================================ -->
<section class="hero">
  <span class="hero__orb hero__orb--1" aria-hidden="true"></span>
  <span class="hero__orb hero__orb--2" aria-hidden="true"></span>
  <span class="hero__orb hero__orb--3" aria-hidden="true"></span>

  <div class="wrap">
    <div class="hero__inner" data-reveal>
      <span class="eyebrow eyebrow--dark eyebrow--center">Mumbai&nbsp;·&nbsp;Nariman Point&nbsp;·&nbsp;Est. 2003</span>
      <h1 class="hero__title headline headline--light">
        Where wealth<br>meets <em>quiet clarity</em>.
      </h1>
      <p class="hero__lead">
        For HNI families, business owners and senior professionals across India who want the whole financial picture &mdash; investments, insurance, liquidity and legacy &mdash; understood together, not sold in pieces.
      </p>
      <div class="hero__ctas">
        <a class="btn btn-primary btn-lg" href="contact.php" data-modal-open="calendly" data-magnetic="0.30">
          <?= icon('calendar') ?> Book a Private Consultation
        </a>
        <a class="btn btn-outline-light btn-lg" href="services/" data-magnetic="0.25">
          Explore Our Services
        </a>
      </div>
      <div class="hero__meta">
        <span class="hero__chip"><?= icon('shield') ?> <strong>AMFI</strong> · MFD ARN-78740</span>
        <span class="hero__chip"><?= icon('award') ?> <strong>IRDAI</strong> · Insurance Advisor</span>
        <span class="hero__chip"><?= icon('clock') ?> <strong>20+ years</strong> in practice</span>
        <span class="hero__chip"><?= icon('gem') ?> <strong>&#8377;1 Cr+</strong> HNI-focused</span>
      </div>
    </div>
  </div>

  <div class="hero__scroll" aria-hidden="true">Scroll to explore</div>
</section>

<!-- STATS BAND ========================================================== -->
<section class="section section--tight section--white">
  <div class="wrap">
    <div class="stat-band" data-reveal>
      <div class="stat-band__grid">
        <div class="stat-item">
          <span class="stat-item__value" data-count="2003" data-duration="1600">0</span>
          <span class="stat-item__label">Practice founded</span>
        </div>
        <div class="stat-item">
          <span class="stat-item__value" data-count="20" data-suffix="+" data-duration="1300">0</span>
          <span class="stat-item__label">Years in the market</span>
        </div>
        <div class="stat-item">
          <span class="stat-item__value" data-count="4" data-duration="900">0</span>
          <span class="stat-item__label">Practice areas</span>
        </div>
        <div class="stat-item">
          <span class="stat-item__value" data-count="1" data-prefix="₹" data-suffix=" Cr+" data-duration="1100">0</span>
          <span class="stat-item__label">HNI-focused service</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KURESH FEATURE ==================================================== -->
<section class="section section--sky">
  <div class="wrap">
    <div class="kuresh-feature">
      <div class="kuresh-portrait" data-reveal aria-hidden="true">
        <div class="kuresh-portrait__gold-frame"></div>
        <div class="kuresh-portrait__placeholder">
          Kuresh
          <small>Portrait photograph to follow</small>
        </div>
      </div>
      <div class="kuresh-body" data-reveal data-reveal-delay="1">
        <span class="eyebrow">Founder &amp; Principal Consultant</span>
        <h2 class="headline">Meet <em>Kuresh Morbiwala</em>.</h2>
        <p class="lead">
          Kuresh founded Summarise Corporate in 2003 on a simple conviction: most clients are underserved &mdash; not for lack of good investments, but because no one connects the dots between their savings, protection, goals and vulnerabilities.
        </p>
        <p class="lead" style="font-size:1.02rem; color:var(--text-muted); font-weight:400;">
          Two decades later, clients describe working with him as having a knowledgeable friend in finance &mdash; someone who speaks plainly, thinks long-term, and stays involved well beyond the point of sale.
        </p>
        <div style="display:flex; flex-wrap:wrap; gap:0.55rem; margin: 1.5rem 0;">
          <span class="pill"><?= icon_inline('award') ?> MBA (Finance)</span>
          <span class="pill"><?= icon_inline('clock') ?> 20+ years in practice</span>
          <span class="pill pill--teal">AMFI ARN-78740</span>
          <span class="pill pill--sky">IRDAI Agency 00413837</span>
        </div>
        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
          <a class="btn btn-secondary" href="about/team.php">Meet the team</a>
          <a class="btn btn-ghost" href="contact.php" data-modal-open="calendly">Speak with Kuresh</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOUNDER QUOTE ======================================================= -->
<section class="section section--tight section--white">
  <div class="wrap-tight">
    <div class="founder-quote" data-reveal>
      <p>Investments are only one part of the picture. True financial confidence comes from understanding the whole picture &mdash; your goals, priorities, risks and responsibilities.</p>
      <footer>Kuresh Morbiwala, Founder &amp; Principal Consultant</footer>
    </div>
  </div>
</section>

<!-- WHAT WE DO ========================================================= -->
<section class="section section--white">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">What we do</span>
      <h2 class="headline">Four practice areas, one <em>integrated perspective</em>.</h2>
      <p class="lead">We help clients understand their choices across investments, insurance, business continuity and the bigger financial picture &mdash; using information and insight, not sales pressure.</p>
    </div>
    <div class="grid grid-4 grid-lg">
      <article class="card" data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('chart-line', 'gold') ?>
          <h3>Mutual Funds</h3>
        </div>
        <p class="muted">SIPs, lump-sum, SWPs and goal-linked portfolios built around your time horizon and risk profile.</p>
        <a class="card__link" href="services/mutual-fund-distribution.php">Explore MFD</a>
      </article>
      <article class="card" data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('shield') ?>
          <h3>Insurance</h3>
        </div>
        <p class="muted">Life, term, health, critical illness and family protection &mdash; explained clearly so you can decide with confidence.</p>
        <a class="card__link" href="services/insurance.php">Explore Insurance</a>
      </article>
      <article class="card" data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('compass', 'gold') ?>
          <h3>Integrated Perspective</h3>
        </div>
        <p class="muted">See how investments, protection, liquidity and estate considerations connect &mdash; and where each fits in your life.</p>
        <a class="card__link" href="services/integrated-financial-perspective.php">Explore IFP</a>
      </article>
      <article class="card" data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('briefcase') ?>
          <h3>Business Owners</h3>
        </div>
        <p class="muted">Continuity, liquidity, succession and eventual transition &mdash; the considerations most owners don&rsquo;t plan for early enough.</p>
        <a class="card__link" href="services/business-owner-solutions.php">Explore Solutions</a>
      </article>
    </div>
  </div>
</section>

<!-- JOURNEY / TIMELINE ================================================= -->
<section class="section section--sky">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Our journey</span>
      <h2 class="headline">Two decades. One <em>consistent philosophy</em>.</h2>
      <p class="lead">A boutique practice that grew because the way we work stayed the same.</p>
    </div>
    <div class="timeline">
      <div class="timeline-item" data-reveal>
        <div class="timeline-item__year">2003</div>
        <div class="timeline-item__title">Summarise Corporate is founded</div>
        <p class="timeline-item__body">Kuresh Morbiwala starts the practice in Mumbai on the idea that clarity is what most clients are underserved on &mdash; not options.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="1">
        <div class="timeline-item__year">2005</div>
        <div class="timeline-item__title">First HNI families onboarded</div>
        <p class="timeline-item__body">The boutique model &mdash; deliberately limited relationships, deeper conversations &mdash; finds its audience.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="2">
        <div class="timeline-item__year">2010</div>
        <div class="timeline-item__title">Insurance advisory added</div>
        <p class="timeline-item__body">IRDAI licence extends the practice into protection &mdash; because investments alone rarely cover the whole picture.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="3">
        <div class="timeline-item__year">2015</div>
        <div class="timeline-item__title">Business-owner practice matures</div>
        <p class="timeline-item__body">Continuity, liquidity and succession conversations become a distinct offering for entrepreneur households.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="4">
        <div class="timeline-item__year">Today</div>
        <div class="timeline-item__title">Serving families across India</div>
        <p class="timeline-item__body">Same two people, same operating principles, deeper relationships. Educational content, clearer communication, next-gen conversations underway.</p>
      </div>
    </div>
  </div>
</section>

<!-- PARTNERS / EMPANELMENTS ============================================ -->
<!--
  Text-mark placeholders. Replace each .logo-tile's innerHTML with:
    <img src="assets/img/partners/hdfc-amc.svg" alt="HDFC Asset Management">
  once Kuresh confirms empanelments and real logo files are added under
  assets/img/partners/.
-->
<section class="section section--white">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Empanelled partners &amp; credentials</span>
      <h2 class="headline">Institutions we <em>work with</em>.</h2>
      <p class="lead">As an AMFI-registered Mutual Fund Distributor and IRDAI-Licensed Insurance Advisor, we&rsquo;re empanelled with India&rsquo;s leading asset management companies and insurance providers.</p>
    </div>

    <div class="partners">

      <!-- Mutual Fund Partners -->
      <div class="partners__group" data-reveal>
        <div class="partners__label">
          <strong>Mutual Fund Partners</strong>
          <span>AMFI-registered distribution</span>
        </div>
        <div class="partners__grid">
          <div class="logo-tile">HDFC AMC</div>
          <div class="logo-tile">ICICI Prudential</div>
          <div class="logo-tile">SBI Mutual Fund</div>
          <div class="logo-tile">Nippon India</div>
          <div class="logo-tile">Axis AMC</div>
          <div class="logo-tile">Kotak Mahindra</div>
          <div class="logo-tile">Aditya Birla Sun Life</div>
          <div class="logo-tile">Franklin Templeton</div>
          <div class="logo-tile">DSP Mutual Fund</div>
          <div class="logo-tile">Mirae Asset</div>
          <div class="logo-tile">UTI Mutual Fund</div>
          <div class="logo-tile">Motilal Oswal</div>
        </div>
      </div>

      <!-- Insurance Partners -->
      <div class="partners__group" data-reveal data-reveal-delay="1">
        <div class="partners__label">
          <strong>Insurance Partners</strong>
          <span>IRDAI-licensed advisory</span>
        </div>
        <div class="partners__grid">
          <div class="logo-tile">HDFC Life</div>
          <div class="logo-tile">ICICI Prudential Life</div>
          <div class="logo-tile">LIC of India</div>
          <div class="logo-tile">Max Life</div>
          <div class="logo-tile">SBI Life</div>
          <div class="logo-tile">TATA AIA</div>
          <div class="logo-tile">Bajaj Allianz</div>
          <div class="logo-tile">HDFC Ergo</div>
          <div class="logo-tile">Star Health</div>
          <div class="logo-tile">Care Health</div>
          <div class="logo-tile">Niva Bupa</div>
          <div class="logo-tile">Aditya Birla Health</div>
        </div>
      </div>

      <!-- Regulatory registrations -->
      <div class="partners__group" data-reveal data-reveal-delay="2">
        <div class="partners__label">
          <strong>Our Registrations</strong>
          <span>Regulatory framework we operate under</span>
        </div>
        <div class="partners__grid">
          <div class="logo-tile logo-tile--reg">
            <div><strong>AMFI</strong>ARN-78740</div>
          </div>
          <div class="logo-tile logo-tile--reg">
            <div><strong>IRDAI</strong>Agency 00413837</div>
          </div>
          <div class="logo-tile logo-tile--reg">
            <div><strong>NISM-V-A</strong>Certified MFD</div>
          </div>
          <div class="logo-tile logo-tile--reg">
            <div><strong>BSE StAR MF</strong>Empanelled</div>
          </div>
        </div>
      </div>

    </div>

    <p class="small muted text-center mt-4">Empanelments and partner logos are indicative; actual list to be confirmed by Kuresh, and real logo files will replace these placeholders in the next update.</p>
  </div>
</section>

<!-- WHY SUMMARISE (USP) — dark ========================================= -->
<section class="section section--dark">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--dark eyebrow--center">Why Summarise Corporate</span>
      <h2 class="headline headline--light">An HNI-focused practice, built for <em>the long term</em>.</h2>
    </div>
    <div class="grid grid-3">
      <div class="value-item" data-reveal data-reveal-delay="1" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('target') ?> Personalised attention</h3>
        <p style="color:var(--text-invert-muted);">We deliberately limit the number of relationships we take on so every client gets the time and depth their situation deserves.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="2" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('file-text') ?> Research-driven insights</h3>
        <p style="color:var(--text-invert-muted);">Independent research and analysis help you understand market developments, risks and product characteristics &mdash; not just headlines.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('sparkle') ?> Clarity through knowledge</h3>
        <p style="color:var(--text-invert-muted);">We simplify complex financial concepts and product information so you can better understand the choices in front of you.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="1" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('eye') ?> Trust &amp; transparency</h3>
        <p style="color:var(--text-invert-muted);">Clear communication and full disclosure of how we&rsquo;re compensated &mdash; commission from AMCs and insurers, not advisory fees.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="2" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('heart') ?> Relationship over transaction</h3>
        <p style="color:var(--text-invert-muted);">Meaningful financial progress compounds over decades. We&rsquo;re here for the long conversation, not the quarterly one.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('gem') ?> For substantial wealth</h3>
        <p style="color:var(--text-invert-muted);">Our service model is particularly suited to families and business owners with &#8377;1 Crore+ investible wealth who value depth over volume.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHO WE SERVE ======================================================= -->
<section class="section section--white">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Who we serve</span>
      <h2 class="headline">Practices tailored to different <em>stages of wealth</em>.</h2>
    </div>
    <div class="grid grid-4 grid-lg">
      <a class="card" href="who-we-serve/hni.php" data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('gem', 'gold') ?>
          <h3>HNI Families</h3>
        </div>
        <p class="muted">Families with &#8377;1 Cr+ investible wealth who value personalised attention and long-term relationships.</p>
        <span class="card__link">See how we help</span>
      </a>
      <a class="card" href="who-we-serve/business-owners.php" data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('briefcase') ?>
          <h3>Business Owners</h3>
        </div>
        <p class="muted">SMB and mid-market entrepreneurs looking beyond the business itself &mdash; continuity, protection, succession.</p>
        <span class="card__link">See how we help</span>
      </a>
      <a class="card" href="who-we-serve/executives-professionals.php" data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('user-tie', 'gold') ?>
          <h3>Senior Professionals</h3>
        </div>
        <p class="muted">C-suite executives, doctors, lawyers and CAs whose high income needs disciplined long-term structuring.</p>
        <span class="card__link">See how we help</span>
      </a>
      <a class="card" href="who-we-serve/young-professionals.php" data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('seedling') ?>
          <h3>Young Professionals</h3>
        </div>
        <p class="muted">Early-career SIP starters getting the foundations right &mdash; investing basics, protection, savings discipline.</p>
        <span class="card__link">See how we help</span>
      </a>
    </div>
  </div>
</section>

<!-- CTA ================================================================ -->
<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Ready for the <em>right</em> conversation?</h2>
    <p>An initial consultation is a chance for both of us to understand fit &mdash; no obligation, no product pitch. We&rsquo;ll listen first, then explain what a relationship with us would actually look like.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="contact.php" data-modal-open="calendly" data-magnetic="0.30">
        <?= icon('calendar') ?> Book a Consultation
      </a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener" data-magnetic="0.25">
        <?= icon('chat') ?> WhatsApp us
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
