<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'About Summarise Corporate',
  'description' => 'A boutique Mumbai financial services firm founded in 2003 by Kuresh Morbiwala. Learn our story, mission, team, and the credentials that back our practice.',
  'breadcrumbs' => [['Home', '/'], ['About', '/about/']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('building', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">About us</span>
      <h1 class="headline headline--light">A boutique practice, built on <em>clarity and relationships</em>.</h1>
      <p class="lead">Founded in 2003 in Mumbai. Serving families and business owners across India who value depth, discretion and long-term thinking over transactional advice.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg">
      <a class="card" href="our-story.php" data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('clock', 'gold', 'lg') ?>
          <div>
            <span class="card__tag">Our Story</span>
            <h3 style="margin:0;">Founded 2003. The same conviction since.</h3>
          </div>
        </div>
        <p class="muted">People are often underserved not for lack of investment options, but for lack of clarity about how their savings, protection needs, goals and risks connect. That&rsquo;s what we set out to change.</p>
        <span class="card__link">Read our story</span>
      </a>
      <a class="card" href="mission-vision-values.php" data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('target', '', 'lg') ?>
          <div>
            <span class="card__tag">Mission &amp; Values</span>
            <h3 style="margin:0;">Eight values, one client philosophy.</h3>
          </div>
        </div>
        <p class="muted">Client first. Long-term thinking. Full transparency. Continuous learning. The principles that guide every relationship we take on.</p>
        <span class="card__link">Read our values</span>
      </a>
      <a class="card" href="team.php" data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('users', 'gold', 'lg') ?>
          <div>
            <span class="card__tag">Team</span>
            <h3 style="margin:0;">Meet the people you actually work with.</h3>
          </div>
        </div>
        <p class="muted">Kuresh Morbiwala (Founder &amp; Principal Consultant) and Chandrashekhar Verma (Back Office Operations). Two people, four decades of combined financial services experience.</p>
        <span class="card__link">Meet the team</span>
      </a>
      <a class="card" href="credentials.php" data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('award', '', 'lg') ?>
          <div>
            <span class="card__tag">Credentials</span>
            <h3 style="margin:0;">The registrations that back our practice.</h3>
          </div>
        </div>
        <p class="muted">AMFI-registered Mutual Fund Distributor (ARN-78740), IRDAI-Licensed Insurance Advisor (Agency Code 00413837), and the regulatory framework we operate under.</p>
        <span class="card__link">See credentials</span>
      </a>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Prefer a conversation to a website?</span>
    <h2 class="headline headline--light">Book a 30-minute call with Kuresh.</h2>
    <p>We&rsquo;ll listen to your situation and explain how we can be helpful &mdash; or point you elsewhere if we can&rsquo;t.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
