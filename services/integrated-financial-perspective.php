<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Integrated Financial Perspective',
  'description' => 'Investments, insurance, tax awareness, liquidity and estate considerations — understood together, not in isolation. A broader financial perspective for HNI families and business owners.',
  'breadcrumbs' => [['Home', '/'], ['Services', '/services/'], ['Integrated Financial Perspective', '/services/integrated-financial-perspective']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('compass', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">Services &rsaquo; Integrated Financial Perspective</span>
      <h1 class="headline headline--light">Beyond individual products. See the <em>bigger financial picture</em>.</h1>
      <p class="lead">Financial decisions rarely exist in isolation. Investments, insurance, liquidity, tax awareness and estate considerations can all play an important role in a family&rsquo;s financial life &mdash; and understanding how they interact matters as much as any single choice.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <div class="grid grid-2 grid-lg" style="align-items:start;">
      <div data-reveal>
        <span class="eyebrow">The idea</span>
        <h2>Coherent, not just clever.</h2>
        <p>An investment decision that looks smart in isolation may be the wrong call once you consider your liquidity in the next 24 months, your family&rsquo;s protection needs, or an inheritance conversation you haven&rsquo;t yet had.</p>
        <p>We provide relevant <strong>information</strong>, <strong>research</strong> and <strong>insights</strong> so you can make more informed decisions across your financial life &mdash; and coordinate with your tax advisor, CA, lawyer and other professionals when specialised advice is required.</p>
        <div class="card card--gold mt-3" style="padding:1.5rem;">
          <div style="display:flex; align-items:center; gap:1rem;">
            <?= icon_badge('gem', 'navy') ?>
            <div>
              <strong style="color:var(--ink-navy); font-size:1.05rem;">Who this is for</strong>
              <p class="mb-0 muted" style="margin-top:0.25rem;">HNI individuals, business owners, senior professionals and families with <strong>&#8377;1 Crore+ investible assets</strong> who value clarity, research and long-term relationship-based service.</p>
            </div>
          </div>
        </div>
      </div>

      <div data-reveal data-reveal-delay="1">
        <span class="eyebrow">Seven perspectives</span>
        <h2>What we work across.</h2>
        <ul class="feature-list">
          <li>
            <span class="feat-icon"><?= icon('chart-line') ?></span>
            <div><strong>Investment Information &amp; Insights</strong><p>Existing holdings, product characteristics, market developments, and how each fits your goals.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('shield') ?></span>
            <div><strong>Insurance &amp; Protection Information</strong><p>Where you&rsquo;re covered, where you may not be, and how protection interacts with your investment strategy.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('file-text') ?></span>
            <div><strong>Tax Awareness &amp; Considerations</strong><p>Structural implications that inform investment and protection choices &mdash; coordinated with your CA where formal tax planning is required.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('coins') ?></span>
            <div><strong>Liquidity &amp; Cash-Flow Considerations</strong><p>Emergency reserves, near-term commitments, and which parts of your portfolio should stay accessible.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('users') ?></span>
            <div><strong>Estate &amp; Succession Considerations</strong><p>Wills, nominations, joint holdings, family conversations &mdash; coordinated with your legal counsel for formal estate planning.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('eye') ?></span>
            <div><strong>Understanding the Bigger Picture</strong><p>Bringing all of the above into a single view so trade-offs are visible, not hidden.</p></div>
          </li>
          <li>
            <span class="feat-icon"><?= icon('refresh') ?></span>
            <div><strong>Regular Review &amp; Rebalancing</strong><p>Because circumstances, goals and markets all change &mdash; and a picture that made sense two years ago may not today.</p></div>
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
      <h2 class="headline headline--light">Deliberately explicit about our <em>scope</em>.</h2>
    </div>
    <p style="text-align:center; max-width:70ch; margin:0 auto;">Under our AMFI and IRDAI registrations, we distribute mutual funds and insurance and provide financial information and product understanding. We are <strong>not</strong> a SEBI-Registered Investment Adviser, and we do not provide fee-based investment advisory services or hold ourselves out as fiduciary advisers, financial planners or wealth managers.</p>
    <p style="text-align:center; max-width:70ch; margin:1rem auto 2rem;">Where a client needs formal tax planning, legal advice on estate matters, or fee-based fiduciary investment advice, we say so clearly and coordinate with the appropriate professional. This is intentional &mdash; we&rsquo;d rather do a smaller thing well than pretend to do everything.</p>
    <p style="text-align:center;"><a class="btn btn-outline-light" href="../about/credentials.php"><?= icon('award') ?> See our credentials</a></p>
  </div>
</section>

<section class="section section--tight">
  <div class="wrap-text">
    <div class="card" data-reveal style="border-left:3px solid var(--champagne-gold); background:var(--pale-gold); padding:1.75rem;">
      <div style="display:flex; align-items:flex-start; gap:1rem;">
        <?= icon_badge('lock', 'navy') ?>
        <div>
          <p class="mb-1"><strong>Important.</strong> The content on this page describes an information- and distribution-led service under our AMFI Mutual Fund Distributor registration and IRDAI Insurance Advisor licence. It does not constitute investment advice, tax advice, legal advice, or a recommendation of any specific security, fund, insurance product or strategy.</p>
          <p class="mb-0">Mutual fund investments are subject to market risks; please read scheme-related documents carefully before investing. Insurance is the subject matter of solicitation. See <a href="../legal/disclaimers.php">full disclosures</a>.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Ready to see the whole picture?</h2>
    <p>A 30-minute conversation is a good way to find out whether an integrated perspective is what you&rsquo;re looking for.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="../contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
