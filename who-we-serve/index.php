<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Who We Serve',
  'description' => 'HNI families, business owners, senior executives and young professionals across India. Our practice is built for clients who value clarity, discretion and long-term relationships.',
  'breadcrumbs' => [['Home', '/'], ['Who We Serve', '/who-we-serve/']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('users', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Who we serve</span>
      <h1 class="headline headline--light">Practices tailored to different <em>stages of wealth</em>.</h1>
      <p class="lead">We work across four broad audiences. The common thread is a preference for clarity, depth and a long-term relationship &mdash; over transactional advice or product pitches.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg">
      <a class="card" href="hni.php" data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('gem', 'gold', 'lg') ?>
          <div>
            <span class="card__tag">Segment 01</span>
            <h3 style="margin:0;">HNI Individuals &amp; Families</h3>
          </div>
        </div>
        <p class="muted">Families with &#8377;1 Crore+ of investible wealth who want personalised attention, deep research and a genuinely long-term relationship &mdash; not a monthly pitch.</p>
        <span class="card__link">See how we help HNIs</span>
      </a>

      <a class="card" href="business-owners.php" data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('briefcase', '', 'lg') ?>
          <div>
            <span class="card__tag">Segment 02</span>
            <h3 style="margin:0;">Business Owners &amp; Entrepreneurs</h3>
          </div>
        </div>
        <p class="muted">SMB and mid-market owners whose personal finances are tightly tied to the business &mdash; and who want a clearer view of continuity, liquidity, protection and eventual transition.</p>
        <span class="card__link">See how we help business owners</span>
      </a>

      <a class="card" href="executives-professionals.php" data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('user-tie', 'gold', 'lg') ?>
          <div>
            <span class="card__tag">Segment 03</span>
            <h3 style="margin:0;">Senior Executives &amp; Professionals</h3>
          </div>
        </div>
        <p class="muted">C-suite executives, senior corporate professionals, doctors, lawyers, CAs and other high-earning professionals whose income deserves disciplined long-term structuring.</p>
        <span class="card__link">See how we help professionals</span>
      </a>

      <a class="card" href="young-professionals.php" data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('seedling', '', 'lg') ?>
          <div>
            <span class="card__tag">Segment 04</span>
            <h3 style="margin:0;">Young Professionals (SIP Starters)</h3>
          </div>
        </div>
        <p class="muted">Early-career professionals and first-time investors getting the foundations right &mdash; investing basics, protection, savings discipline. The years when compounding does its best work.</p>
        <span class="card__link">See how we help young professionals</span>
      </a>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Not sure which fits?</span>
    <h2 class="headline headline--light">Have a conversation with us.</h2>
    <p>The best way to find out whether we&rsquo;re the right practice for you is a short conversation. Book a consultation &mdash; no obligation, no pitch.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
