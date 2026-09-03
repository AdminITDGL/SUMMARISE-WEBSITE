<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Grievance Redressal',
  'description' => 'How to raise a complaint or grievance with Summarise Corporate, and the escalation paths to AMFI, IRDAI, SEBI SCORES and the Insurance Ombudsman.',
  'breadcrumbs' => [['Home', '/'], ['Disclosures & Legal', '/legal/'], ['Grievance Redressal', '/legal/grievance-redressal']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Legal &rsaquo; Grievance Redressal</span>
    <h1>Grievance Redressal Process</h1>
    <p class="lead">If something isn&rsquo;t right, we want to know about it first. This page sets out the process to raise a grievance with us, and the regulatory escalation paths if we don&rsquo;t resolve it to your satisfaction.</p>
    <p class="small muted">Last updated: <?= date('F Y') ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap-tight">

    <h2>Step 1 &mdash; Raise it with us</h2>
    <p>The fastest way to resolve any issue is to write to us directly. Please include as much detail as possible &mdash; the product or transaction concerned, any reference numbers, and the outcome you&rsquo;re seeking.</p>
    <div class="card mb-4">
      <p class="mb-1"><strong>Grievance officer:</strong> Kuresh Morbiwala, Founder &amp; Principal Consultant</p>
      <p class="mb-1"><strong>Email:</strong> <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a></p>
      <p class="mb-1"><strong>Phone:</strong> <a href="tel:<?= BIZ_PHONE_RAW ?>"><?= BIZ_PHONE ?></a></p>
      <p class="mb-0"><strong>Address:</strong> 322, Tulsiani Chambers, 212 Free Press Journal Marg, Nariman Point, Mumbai &ndash; 400021</p>
    </div>
    <p>We will acknowledge receipt of your grievance within <strong>3 business days</strong> and endeavour to resolve it within <strong>30 days</strong> of receipt.</p>

    <h2>Step 2 &mdash; Escalate to the product provider (AMC or Insurer)</h2>
    <p>Most complaints relate to a specific product &mdash; a mutual fund scheme or an insurance policy. The primary redressal party in that case is the asset management company (AMC) or the insurance company. Every AMC and insurer publishes a grievance redressal officer&rsquo;s contact details on its own website and on the product documents. We will help you identify the right contact and support you through the process.</p>

    <h2>Step 3 &mdash; Escalate to the regulator</h2>

    <h3>For mutual fund matters &mdash; AMFI &amp; SEBI SCORES</h3>
    <ul>
      <li>
        <strong>AMFI (Association of Mutual Funds in India):</strong>
        Complaints against distributors are handled by AMFI.
        Website: <a href="https://www.amfiindia.com/investor-corner/investor-center/investor-complaints.html" target="_blank" rel="noopener">amfiindia.com &rsaquo; Investor Complaints</a>
      </li>
      <li>
        <strong>SEBI SCORES:</strong>
        SEBI operates an online complaint redressal platform for securities-market grievances.
        Website: <a href="https://scores.sebi.gov.in/" target="_blank" rel="noopener">scores.sebi.gov.in</a>
      </li>
      <li>
        <strong>SEBI ODR (Online Dispute Resolution):</strong>
        Website: <a href="https://smartodr.in/" target="_blank" rel="noopener">smartodr.in</a>
      </li>
    </ul>

    <h3>For insurance matters &mdash; IRDAI &amp; Insurance Ombudsman</h3>
    <ul>
      <li>
        <strong>IRDAI Bima Bharosa (formerly IGMS):</strong>
        The IRDAI&rsquo;s online complaint portal.
        Website: <a href="https://bimabharosa.irdai.gov.in/" target="_blank" rel="noopener">bimabharosa.irdai.gov.in</a>
        &middot; IRDAI toll-free: 155255 / 1800 4254 732
      </li>
      <li>
        <strong>Insurance Ombudsman:</strong>
        For unresolved complaints against insurers, the Insurance Ombudsman offers a free and independent dispute-resolution mechanism.
        Website: <a href="https://www.cioins.co.in/" target="_blank" rel="noopener">cioins.co.in</a>
      </li>
    </ul>

    <h2>Timelines to expect</h2>
    <table style="width:100%;border-collapse:collapse;margin:1rem 0;">
      <thead>
        <tr style="background:var(--pale-gold);">
          <th style="text-align:left;padding:0.75rem;border-bottom:1px solid var(--line);">Stage</th>
          <th style="text-align:left;padding:0.75rem;border-bottom:1px solid var(--line);">Typical time to acknowledge</th>
          <th style="text-align:left;padding:0.75rem;border-bottom:1px solid var(--line);">Target resolution</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding:0.75rem;border-bottom:1px solid var(--line);">Raised with Summarise Corporate</td>
          <td style="padding:0.75rem;border-bottom:1px solid var(--line);">3 business days</td>
          <td style="padding:0.75rem;border-bottom:1px solid var(--line);">30 days</td>
        </tr>
        <tr>
          <td style="padding:0.75rem;border-bottom:1px solid var(--line);">Escalated to AMC or insurer</td>
          <td style="padding:0.75rem;border-bottom:1px solid var(--line);">As per AMC/insurer policy</td>
          <td style="padding:0.75rem;border-bottom:1px solid var(--line);">Typically 30 days</td>
        </tr>
        <tr>
          <td style="padding:0.75rem;">Regulator (SEBI SCORES / IRDAI Bima Bharosa / Insurance Ombudsman)</td>
          <td style="padding:0.75rem;">As per regulator&rsquo;s process</td>
          <td style="padding:0.75rem;">Varies</td>
        </tr>
      </tbody>
    </table>

    <p class="small muted">This page is intended as a practical guide. The regulators&rsquo; own websites and published circulars are the authoritative source for the current escalation processes, portals and timelines.</p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
