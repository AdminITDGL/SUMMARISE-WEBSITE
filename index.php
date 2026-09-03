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
  <div class="wrap">
    <div class="hero__inner" data-reveal>
      <span class="eyebrow eyebrow--dark eyebrow--center">Mumbai&nbsp;·&nbsp;Since 2003</span>
      <h1 class="hero__title headline headline--light">
        Financial clarity for the<br><em>whole picture</em>.
      </h1>
      <p class="hero__lead">
        Investments, insurance, liquidity, family priorities &mdash; they rarely exist in isolation.
        We help HNI families, business owners and senior professionals see how the pieces fit together, and make more informed decisions with confidence.
      </p>
      <div class="hero__ctas">
        <a class="btn btn-primary btn-lg" href="contact.php" data-modal-open="calendly">
          <?= icon('calendar') ?> Book a Consultation
        </a>
        <a class="btn btn-outline-light btn-lg" href="services/">Explore Our Services</a>
      </div>
      <div class="hero__meta">
        <span class="hero__meta-item"><?= icon('shield') ?><strong>AMFI-registered</strong>&nbsp;· MFD ARN-78740</span>
        <span class="hero__meta-item"><?= icon('award') ?><strong>IRDAI-Licensed</strong>&nbsp;· Insurance Advisor</span>
        <span class="hero__meta-item"><?= icon('clock') ?><strong>20+ years</strong>&nbsp;in practice</span>
      </div>
    </div>
  </div>
</section>

<!-- STATS =============================================================== -->
<section class="section section--tight">
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

<!-- FOUNDER QUOTE ======================================================= -->
<section class="section section--tight">
  <div class="wrap-tight">
    <div class="founder-quote" data-reveal>
      <p>Investments are only one part of the picture. True financial confidence comes from understanding the whole picture &mdash; your goals, priorities, risks and responsibilities.</p>
      <footer>Kuresh Morbiwala, Founder &amp; Principal Consultant</footer>
    </div>
  </div>
</section>

<!-- WHAT WE DO =========================================================== -->
<section class="section section--white">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">What we do</span>
      <h2 class="headline">Four practice areas, one <em>integrated perspective</em>.</h2>
      <p class="lead">We help clients understand their choices across investments, insurance, business continuity and the bigger financial picture &mdash; using information and insight, not sales pressure.</p>
    </div>
    <div class="grid grid-4 grid-lg">
      <article class="card" data-tilt data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('chart-line', 'gold') ?>
          <h3>Mutual Funds</h3>
        </div>
        <p class="muted">SIPs, lump-sum, SWPs and goal-linked portfolios built around your time horizon and risk profile.</p>
        <a class="card__link" href="services/mutual-fund-distribution.php">Explore MFD</a>
      </article>
      <article class="card" data-tilt data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('shield') ?>
          <h3>Insurance</h3>
        </div>
        <p class="muted">Life, term, health, critical illness and family protection &mdash; explained clearly so you can decide with confidence.</p>
        <a class="card__link" href="services/insurance.php">Explore Insurance</a>
      </article>
      <article class="card" data-tilt data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('compass', 'gold') ?>
          <h3>Integrated Perspective</h3>
        </div>
        <p class="muted">See how investments, protection, liquidity and estate considerations connect &mdash; and where each fits in your life.</p>
        <a class="card__link" href="services/integrated-financial-perspective.php">Explore IFP</a>
      </article>
      <article class="card" data-tilt data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('briefcase') ?>
          <h3>Business Owners</h3>
        </div>
        <p class="muted">Continuity, liquidity, succession and eventual transition &mdash; the financial considerations most owners don&rsquo;t plan for early enough.</p>
        <a class="card__link" href="services/business-owner-solutions.php">Explore Solutions</a>
      </article>
    </div>
  </div>
</section>

<!-- WHY SUMMARISE (USP) — dark section for premium contrast ============ -->
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
        <p style="color:var(--text-invert-muted);">Clear communication, transparent processes and full disclosure of how we&rsquo;re compensated &mdash; commission from AMCs and insurers, not advisory fees.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="2" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('heart') ?> Relationship over transaction</h3>
        <p style="color:var(--text-invert-muted);">Meaningful financial progress compounds over decades. We&rsquo;re here for the long conversation, not the quarterly one.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('gem') ?> For substantial wealth</h3>
        <p style="color:var(--text-invert-muted);">Our service model is particularly suited to families and business owners with &#8377;1 Crore+ of investible wealth who value depth over volume.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHO WE SERVE ======================================================== -->
<section class="section section--ivory">
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

<!-- INSIGHTS TEASER ===================================================== -->
<section class="section section--white">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Insights</span>
      <h2 class="headline">Financial information, in <em>plain language</em>.</h2>
      <p class="lead">Educational content across four areas &mdash; investing basics, insurance &amp; protection, business owners, and market updates.</p>
    </div>
    <div class="grid grid-4">
      <a class="card" href="insights/investing-basics.php" data-reveal data-reveal-delay="1">
        <span class="card__tag"><?= icon_inline('chart-line') ?> Investing Basics</span>
        <h3>SIPs and long-term investing</h3>
        <p class="muted">The building blocks of a disciplined investment habit.</p>
        <span class="card__link">Read more</span>
      </a>
      <a class="card" href="insights/insurance-protection.php" data-reveal data-reveal-delay="2">
        <span class="card__tag"><?= icon_inline('shield') ?> Insurance</span>
        <h3>Term vs whole-life</h3>
        <p class="muted">Product understanding is the first step to appropriate cover.</p>
        <span class="card__link">Read more</span>
      </a>
      <a class="card" href="insights/business-owners.php" data-reveal data-reveal-delay="3">
        <span class="card__tag"><?= icon_inline('briefcase') ?> Business Owners</span>
        <h3>Continuity, before you need it</h3>
        <p class="muted">Considerations for owners whose personal finance sits inside the business.</p>
        <span class="card__link">Read more</span>
      </a>
      <a class="card" href="insights/market-updates.php" data-reveal data-reveal-delay="4">
        <span class="card__tag"><?= icon_inline('globe') ?> Market Updates</span>
        <h3>Regulatory changes to know</h3>
        <p class="muted">Commentary only &mdash; never fund-specific recommendations.</p>
        <span class="card__link">Read more</span>
      </a>
    </div>
    <div class="text-center mt-5">
      <a class="btn btn-secondary" href="insights/">Browse all insights <?= icon('arrow-right') ?></a>
    </div>
  </div>
</section>

<!-- CTA ================================================================= -->
<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Ready for a conversation?</h2>
    <p>An initial consultation is a chance for both of us to understand fit &mdash; no obligation, no product pitch. We&rsquo;ll listen first, then explain what a relationship with us would actually look like.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="contact.php" data-modal-open="calendly">
        <?= icon('calendar') ?> Book a Consultation
      </a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener">
        <?= icon('chat') ?> WhatsApp us
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
