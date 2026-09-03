<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Business Owner Solutions',
  'description' => 'Continuity, liquidity, protection, succession and eventual transition considerations for business owners — the personal financial questions that shape every entrepreneur\'s life.',
  'breadcrumbs' => [['Home', '/'], ['Services', '/services/'], ['Business Owner Solutions', '/services/business-owner-solutions']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('briefcase', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Services &rsaquo; Business Owner Solutions</span>
      <h1 class="headline headline--light">Build. Protect. Grow. <em>Transition with confidence</em>.</h1>
      <p class="lead">Business owners face financial decisions that extend beyond the business itself. Continuity, liquidity, protection, succession and eventual transition all shape the financial future of the owner and the family &mdash; and are often the last things anyone plans for.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">The idea</span>
        <h2>Beyond the business itself.</h2>
        <p>Most business owners we work with have spent decades building the business. What&rsquo;s harder is stepping back to look at what the business means for the household &mdash; the concentration of family wealth in a single asset, the liquidity picture if something changes suddenly, the succession conversation everyone knows they need to have and no one has yet.</p>
        <p>We provide relevant financial <strong>information</strong>, <strong>research</strong> and <strong>insights</strong> to help business owners better understand these considerations and the financial products and options available to them &mdash; while recognising that specialised legal, tax, accounting and succession matters need coordination with their respective professional advisors.</p>
        <div class="card card--gold mt-3" style="padding:1.5rem;">
          <div style="display:flex; align-items:center; gap:1rem;">
            <?= icon_badge('building', 'navy') ?>
            <div>
              <strong style="color:var(--ink-navy); font-size:1.05rem;">Who this is for</strong>
              <p class="mb-0 muted" style="margin-top:0.25rem;">Business owners and entrepreneurs who have built substantial businesses and want greater clarity around protecting, preserving and eventually transitioning the wealth they&rsquo;ve created.</p>
            </div>
          </div>
        </div>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">Considerations</span>
        <h2>What we work across.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('file-text') ?></span>
            <div><strong>Business &amp; Financial Information</strong><p>How the business connects to the owner&rsquo;s personal balance sheet, and what that means for personal financial choices.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('coins') ?></span>
            <div><strong>Liquidity Considerations</strong><p>Personal liquidity outside the business &mdash; because the business is rarely as liquid as the family may need in a crisis.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('shield') ?></span>
            <div><strong>Insurance &amp; Protection Information</strong><p>Key-person cover, family protection, health &mdash; sized against what the family actually depends on.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('life-buoy') ?></span>
            <div><strong>Business Continuity Considerations</strong><p>What happens to the business, and the family, if the owner cannot be present for a period. The financial framework, not the operational one.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('users') ?></span>
            <div><strong>Succession &amp; Family Wealth</strong><p>Preparing the next generation, understanding available frameworks, and the conversations most families put off.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('arrow-right') ?></span>
            <div><strong>Exit &amp; Transition Considerations</strong><p>Financial considerations around a future sale, partial exit or generational handover &mdash; long before the actual transaction.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('layers') ?></span>
            <div><strong>Investment &amp; Product Insights</strong><p>Building a personal portfolio that is genuinely diversified from the business itself.</p></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap-tight">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--dark eyebrow--center">Where our role ends</span>
      <h2 class="headline headline--light">We stay in <em>our lane</em>.</h2>
    </div>
    <p style="text-align:center; max-width:70ch; margin:0 auto 2rem;">Legal, tax, accounting, formal estate structuring and M&amp;A transaction advisory are specialised fields that require the appropriate professional counsel &mdash; typically your CA, lawyer, and where relevant a transaction advisor. Our role is to sit alongside those professionals, provide the financial-product and personal-liquidity perspective, and help you keep the picture coherent.</p>
    <p style="text-align:center;"><a class="btn btn-outline-light" href="../about/credentials.php"><?= icon('award') ?> See our credentials</a></p>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Business questions you keep putting off?</h2>
    <p>Book a confidential conversation with Kuresh &mdash; no obligation, no product pitch.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
