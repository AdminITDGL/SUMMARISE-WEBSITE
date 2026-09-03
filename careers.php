<?php
require_once __DIR__ . '/includes/config.php';
$page = [
  'title'       => 'Careers',
  'description' => 'We\'re hiring a Certified Financial Planner (CFP) in Mumbai. Join a boutique financial services practice built on long-term relationships and honest client work.',
  'breadcrumbs' => [['Home', '/'], ['Careers', '/careers']],
  'json_ld'     => [[
    '@context' => 'https://schema.org',
    '@type'    => 'JobPosting',
    'title'    => 'Certified Financial Planner (CFP)',
    'description' => 'A Certified Financial Planner (CFP) role in a boutique Mumbai financial services practice. Client-facing, long-term, focused on relationship depth over transaction volume.',
    'datePosted' => date('Y-m-d'),
    'employmentType' => 'FULL_TIME',
    'hiringOrganization' => ['@id' => SITE_URL . '/#organization'],
    'jobLocation' => [
      '@type' => 'Place',
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress'  => BIZ_ADDR_LINE1 . ', ' . BIZ_ADDR_LINE2,
        'addressLocality'=> BIZ_ADDR_CITY,
        'addressRegion'  => BIZ_ADDR_STATE,
        'postalCode'     => BIZ_ADDR_PIN,
        'addressCountry' => BIZ_ADDR_COUNTRY,
      ],
    ],
  ]],
];
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Careers</span>
    <h1>Join a boutique practice built on the long game.</h1>
    <p class="lead">We&rsquo;re small, we&rsquo;re deliberately staying that way, and we hire slowly. If a two-decade-old client relationship sounds like your kind of work, we&rsquo;d like to hear from you.</p>
  </div>
</section>

<section class="section">
  <div class="wrap-tight">
    <div class="card mb-4">
      <span class="card__tag">Current opening</span>
      <h2>Certified Financial Planner (CFP)</h2>
      <p class="muted mb-3">Full-time &middot; Nariman Point, Mumbai</p>

      <h3>About the role</h3>
      <p>A client-facing role in our practice, working directly with families and business owners across our four service areas. You&rsquo;ll sit alongside Kuresh on new relationships, take primary responsibility for a set of existing ones over time, and contribute to the educational content we publish.</p>

      <h3>What we&rsquo;re looking for</h3>
      <ul>
        <li>Certified Financial Planner (CFP) qualification, or actively working towards it</li>
        <li>Deep interest in personal finance, capital markets and Indian financial products</li>
        <li>Someone who can explain complex ideas in plain language, in writing and in conversation</li>
        <li>Comfort with the AMFI/IRDAI regulatory framework and a willingness to work strictly within it</li>
        <li>3+ years in a similar client-facing financial services role preferred (but the right person with less experience should still reach out)</li>
      </ul>

      <h3>What the work looks like day-to-day</h3>
      <ul>
        <li>Client conversations &mdash; discovery, portfolio reviews, insurance reviews</li>
        <li>Operational coordination with Chandrashekhar on onboarding and transaction paperwork</li>
        <li>Contribution to the Insights hub &mdash; drafting explainer content in your area of interest</li>
        <li>Attending industry updates, product training, and continuing professional education</li>
      </ul>

      <h3>How to apply</h3>
      <p>Email <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a> with the subject line <em>&ldquo;CFP role &mdash; Application&rdquo;</em>. Please attach your CV and a short note (a few paragraphs is plenty) on why this practice interests you and what you&rsquo;d want to work on first.</p>
      <p>We reply to every application, either way.</p>
    </div>

    <p class="small muted">Note: &ldquo;Certified Financial Planner&rdquo; here names a specific hiring qualification for this role, and does not describe or imply the delivery of regulated investment advisory services by Summarise Corporate. See our <a href="about/credentials.php">credentials page</a> for the firm&rsquo;s regulatory positioning.</p>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
