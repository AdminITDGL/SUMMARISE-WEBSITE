<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Disclaimers & Commission Disclosure',
  'description' => 'Regulatory disclaimers, mutual fund market-risk disclosure, insurance solicitation notice, and our commission-based compensation model in full.',
  'breadcrumbs' => [['Home', '/'], ['Disclosures & Legal', '/legal/'], ['Disclaimers & Commission Disclosure', '/legal/disclaimers']],
  'hide_disclaimer' => true, // this page IS the disclaimer
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Legal &rsaquo; Disclaimers &amp; Commission Disclosure</span>
    <h1>Disclaimers &amp; Commission Disclosure</h1>
    <p class="lead">Everything below is either mandated by AMFI or IRDAI, or is something we believe you should be able to see clearly &mdash; not buried in footer fine print.</p>
    <p class="small muted">Last updated: <?= date('F Y') ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap-tight">

    <h2>1. Who we are, and what we are registered as</h2>
    <p><strong>Summarise Corporate Private Limited</strong> (&ldquo;Summarise Corporate,&rdquo; &ldquo;we,&rdquo; &ldquo;us&rdquo;) is a Private Limited Company incorporated in India, with its registered office at 322, Tulsiani Chambers, 212 Free Press Journal Marg, Nariman Point, Mumbai &ndash; 400021.</p>
    <p>We hold the following regulatory registrations:</p>
    <ul>
      <li><strong>AMFI-Registered Mutual Fund Distributor</strong> &mdash; ARN: <?= substr(AMFI_ARN, 4) ?></li>
      <li><strong>IRDAI-Licensed Insurance Advisor</strong> &mdash; Agency Code: <?= IRDAI_AGENCY_CODE ?></li>
    </ul>
    <p>We do <strong>not</strong> hold SEBI Investment Adviser (RIA) registration. Accordingly, we do not describe ourselves as, or provide the services of, an investment adviser, financial planner, wealth manager or similar. Our services are limited to those permitted under the AMFI and IRDAI registrations noted above.</p>

    <h2>2. Mutual funds &mdash; market risk disclosure</h2>
    <p class="lead" style="background:var(--pale-gold);padding:1.25rem;border-radius:var(--radius-lg);">
      <strong>Mutual fund investments are subject to market risks. Please read the scheme information document and offer document carefully before investing.</strong>
    </p>
    <p>Past performance of any mutual fund scheme is not indicative of future returns. The value of investments in mutual funds can go up or down depending on the factors and forces affecting the securities market. Neither Summarise Corporate nor any of its representatives guarantees the performance or safety of the invested amount or any assured return on investments.</p>

    <h2>3. Insurance &mdash; solicitation notice</h2>
    <p><strong>Insurance is the subject matter of solicitation.</strong></p>
    <p>Please read the policy wording carefully before concluding a sale. Product benefits, features, exclusions, premium rates and other terms vary by insurer and by product. The applicable policy document issued by the insurer is the definitive reference for the terms and conditions of any policy purchased.</p>

    <h2>4. Commission disclosure</h2>
    <p>Summarise Corporate earns <strong>commission income</strong> from:</p>
    <ul>
      <li>Asset management companies (AMCs), for mutual fund schemes distributed to our clients &mdash; in the form of trail commission and, where applicable, upfront commission, in line with prevailing AMFI and SEBI regulations.</li>
      <li>Insurance companies, for insurance policies placed with our clients &mdash; in the form of commission on premium as determined by the insurer and permitted under IRDAI regulations.</li>
    </ul>
    <p><strong>We do not charge advisory fees to clients.</strong> Our compensation is derived exclusively from the AMCs and insurers whose products we distribute. This means:</p>
    <ul>
      <li>Our compensation for a mutual fund scheme depends on the scheme distributed, its category, and the applicable trail commission structure of the AMC.</li>
      <li>Our compensation for an insurance product depends on the insurer, product type and premium.</li>
      <li>We are happy to walk any client through the commission structure of a specific product before they decide to purchase it. Please ask, and we will explain.</li>
    </ul>

    <h2>5. What this website is, and is not</h2>
    <p>Content published on <a href="<?= SITE_URL ?>">www.summarise.in</a> &mdash; including all pages, articles, downloadable material and email newsletters &mdash; is provided for <strong>general information and educational purposes only</strong>. It is not, and should not be construed as:</p>
    <ul>
      <li>Investment advice, or a recommendation to buy, sell or hold any specific security, mutual fund scheme, insurance policy or other financial product.</li>
      <li>Legal, tax, accounting or estate planning advice.</li>
      <li>A solicitation or offer of investment advisory services.</li>
    </ul>
    <p>Before acting on any information on this website, please consult with the appropriate professional adviser to whom the specific facts of your situation are known. Summarise Corporate accepts no responsibility for actions taken on the basis of general information published here.</p>

    <h2>6. Coordination with other professionals</h2>
    <p>Financial matters routinely require input from tax professionals, chartered accountants, legal counsel, estate planners and other specialists. Summarise Corporate is not a substitute for any of these &mdash; we will say so clearly whenever a question sits outside our AMFI/IRDAI scope, and will coordinate with your existing professional advisers or help you identify one where needed.</p>

    <h2>7. Data protection</h2>
    <p>Please see our <a href="privacy-policy.php">Privacy Policy</a> for a full description of what personal data we collect, why, how we use it, and your rights in relation to it.</p>

    <h2>8. Grievance redressal</h2>
    <p>Our grievance redressal process, including escalation to AMFI and IRDAI, is set out on the <a href="grievance-redressal.php">Grievance Redressal</a> page. For product-specific complaints, the AMC or insurer will be the primary party for redressal in most cases; we will support the process end-to-end.</p>

    <h2>9. Copyright &amp; permitted use</h2>
    <p>All content on this website &mdash; text, graphics, logos and imagery &mdash; is the property of Summarise Corporate Private Limited unless attributed to another party. You may share links to pages freely. Reproduction of substantial content in other media requires written permission from us.</p>

    <hr class="divider">

    <p class="small muted">Questions about anything on this page? Email us at <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a> or call <a href="tel:<?= BIZ_PHONE_RAW ?>"><?= BIZ_PHONE ?></a>.</p>

  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
