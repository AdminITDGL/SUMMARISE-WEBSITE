<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'For Young Professionals (SIP Starters)',
  'description' => 'For early-career professionals and first-time investors getting the foundations right — investing basics, protection, savings discipline. The years when compounding does its best work.',
  'breadcrumbs' => [['Home', '/'], ['Who We Serve', '/who-we-serve/'], ['Young Professionals', '/who-we-serve/young-professionals']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('seedling', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Who We Serve &rsaquo; Young Professionals</span>
      <h1 class="headline headline--light">For early-career professionals starting the <em>right habits</em>.</h1>
      <p class="lead">The first ten years of an investing career have the least money and the most compounding time. Getting the foundations right &mdash; regular SIPs, appropriate protection, honest savings discipline &mdash; matters more than any product pick.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">What we help with</span>
        <h2>Habits that compound.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('refresh') ?></span>
            <div><strong>SIP discipline</strong><p>Setting up SIPs that survive salary changes, promotions and the occasional bad market year.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('eye') ?></span>
            <div><strong>Understanding what you own</strong><p>Because a portfolio you understand is a portfolio you actually keep.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('shield') ?></span>
            <div><strong>Right-sized protection</strong><p>Term and health cover sized to actual life responsibilities, not a formula.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('file-text') ?></span>
            <div><strong>Financial literacy</strong><p>Clear explanations of the products, the fees, the risks and the tradeoffs &mdash; in plain language.</p></div>
          </li>
        </ul>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">Where to start</span>
        <h2>An honest first conversation.</h2>
        <p>The best introduction for most young professionals is one honest conversation about goals, timelines and current savings behaviour &mdash; followed by a simple, disciplined <a href="../services/mutual-fund-distribution.php">mutual fund SIP</a> setup and appropriate <a href="../services/insurance.php">protection cover</a>.</p>
        <p>The <a href="../insights/investing-basics.php">Investing Basics</a> category on our Insights hub is written specifically for this stage &mdash; short, plain-language explainers on SIPs, asset classes and the tradeoffs no one bothers to tell you about early on.</p>
        <p class="mt-3"><a class="btn btn-secondary" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book an introductory conversation</a></p>
      </div>
    </div>
  </div>
</section>

<section class="section section--ivory">
  <div class="wrap-tight">
    <div class="founder-quote" data-reveal>
      <p>Meaningful financial progress is built through patience, discipline, consistency and a long-term perspective.</p>
      <footer>One of our core values &mdash; and the one that matters most in the first decade.</footer>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Start early. Start honestly.</h2>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
