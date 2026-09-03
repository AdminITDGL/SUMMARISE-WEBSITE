<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Privacy Policy',
  'description' => 'What personal data Summarise Corporate collects, why, how it is used and stored, and your rights in relation to it.',
  'breadcrumbs' => [['Home', '/'], ['Disclosures & Legal', '/legal/'], ['Privacy Policy', '/legal/privacy-policy']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Legal &rsaquo; Privacy Policy</span>
    <h1>Privacy Policy</h1>
    <p class="lead">This policy explains what personal information we collect, why we collect it, how it&rsquo;s used, how long we keep it, and what rights you have over it.</p>
    <p class="small muted">Last updated: <?= date('F Y') ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap-tight">
    <h2>1. Who we are</h2>
    <p>Summarise Corporate Private Limited, registered office at 322, Tulsiani Chambers, 212 Free Press Journal Marg, Nariman Point, Mumbai &ndash; 400021 (&ldquo;Summarise Corporate,&rdquo; &ldquo;we,&rdquo; &ldquo;us&rdquo;), is the data controller of personal data collected through this website and through our client relationships.</p>
    <p>Contact for privacy queries: <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a>.</p>

    <h2>2. What we collect</h2>
    <p>We collect the following categories of personal data:</p>
    <ul>
      <li><strong>Contact information:</strong> name, email address, phone number, postal address.</li>
      <li><strong>Enquiry content:</strong> the message you send us through the website contact form, WhatsApp or email.</li>
      <li><strong>Onboarding data (for clients):</strong> KYC information required by AMCs and insurers &mdash; PAN, Aadhaar (where applicable), bank details, income range, occupation, and other information required for account opening and product application.</li>
      <li><strong>Website analytics data:</strong> aggregated and anonymised usage patterns (pages viewed, referral source, device and browser type) through Google Analytics, where enabled. IP addresses are anonymised.</li>
    </ul>

    <h2>3. Why we collect it</h2>
    <p>Personal data is used only for the following purposes:</p>
    <ul>
      <li>To respond to your enquiry or booking request.</li>
      <li>To provide our services under our AMFI and IRDAI registrations &mdash; onboarding, transactions, ongoing service.</li>
      <li>To meet our regulatory KYC, anti-money-laundering, tax and reporting obligations.</li>
      <li>With your explicit consent, to send you our monthly newsletter or occasional educational content.</li>
      <li>To improve the website and understand how visitors use it.</li>
    </ul>
    <p>We do not sell your personal data to any third party.</p>

    <h2>4. Who we share it with</h2>
    <ul>
      <li><strong>Asset management companies and insurers</strong> whose products you have applied for or hold &mdash; strictly to the extent required to process the application and service the product.</li>
      <li><strong>KYC Registration Agencies (KRAs), registrars and transfer agents</strong> as required to complete regulatory KYC and process transactions.</li>
      <li><strong>Regulatory authorities</strong> where required by law &mdash; SEBI, AMFI, IRDAI, income tax authorities, etc.</li>
      <li><strong>Service providers</strong> such as our website hosting provider, email service, analytics provider (Google Analytics) &mdash; each bound by their own confidentiality and data-processing obligations.</li>
    </ul>

    <h2>5. How long we keep it</h2>
    <p>We retain personal data only as long as necessary for the purposes above, or as required by applicable law. Client onboarding and transaction records are retained for the regulatory retention periods prescribed by SEBI, AMFI, IRDAI and Indian tax law &mdash; typically eight years after the relationship ends.</p>
    <p>Website enquiries that do not result in an ongoing relationship are retained for up to 24 months, after which they are deleted unless a legal obligation requires longer retention.</p>

    <h2>6. Your rights</h2>
    <p>You have the right to:</p>
    <ul>
      <li>Ask what personal data we hold about you.</li>
      <li>Ask us to correct inaccurate data.</li>
      <li>Ask us to delete your data where we are not required to retain it for regulatory or legal reasons.</li>
      <li>Withdraw consent for marketing communications at any time &mdash; every email includes an unsubscribe link, and you can email us directly to unsubscribe.</li>
    </ul>
    <p>To exercise any of these rights, email <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a>. We will respond within a reasonable time.</p>

    <h2>7. Cookies</h2>
    <p>This website uses a small number of first-party and third-party cookies:</p>
    <ul>
      <li><strong>Strictly necessary cookies</strong> required for the site to function.</li>
      <li><strong>Analytics cookies</strong> (Google Analytics 4) that help us understand aggregated usage patterns. IP anonymisation is enabled.</li>
    </ul>
    <p>You can disable non-essential cookies in your browser settings. Doing so does not affect the site&rsquo;s functionality.</p>

    <h2>8. Security</h2>
    <p>We take reasonable technical and organisational measures to protect personal data against unauthorised access, alteration, disclosure or destruction. No system connected to the internet is completely secure, however, and we cannot guarantee absolute security.</p>

    <h2>9. Changes to this policy</h2>
    <p>We may update this policy from time to time to reflect changes in our practices or in the law. The &ldquo;last updated&rdquo; date at the top of this page shows when it was last revised. Material changes will be highlighted on the website.</p>

    <h2>10. Contact us</h2>
    <p>Email <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a> or write to us at 322, Tulsiani Chambers, 212 Free Press Journal Marg, Nariman Point, Mumbai &ndash; 400021.</p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
