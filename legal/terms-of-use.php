<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Terms of Use',
  'description' => 'Terms under which this website may be used. Nothing on this website is investment, legal or tax advice.',
  'breadcrumbs' => [['Home', '/'], ['Disclosures & Legal', '/legal/'], ['Terms of Use', '/legal/terms-of-use']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Legal &rsaquo; Terms of Use</span>
    <h1>Terms of Use</h1>
    <p class="lead">By accessing or using www.summarise.in, you agree to be bound by these terms.</p>
    <p class="small muted">Last updated: <?= date('F Y') ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap-tight">
    <h2>1. About this website</h2>
    <p>This website is owned and operated by Summarise Corporate Private Limited, a Private Limited Company incorporated in India, with its registered office at 322, Tulsiani Chambers, 212 Free Press Journal Marg, Nariman Point, Mumbai &ndash; 400021.</p>

    <h2>2. Purpose of the website</h2>
    <p>The website exists to describe our services under our AMFI Mutual Fund Distributor registration and IRDAI Insurance Advisor licence, publish educational content, and enable prospective clients to book a consultation.</p>

    <h2>3. Nothing here is advice</h2>
    <p>All content on this website is provided for general information and educational purposes only. It does not constitute investment advice, legal advice, tax advice, estate planning advice, or a recommendation of any specific security, mutual fund scheme, insurance policy or other product. Please consult the appropriate professional adviser before acting on any information published here. See our <a href="disclaimers.php">full disclaimers</a>.</p>

    <h2>4. Accuracy of content</h2>
    <p>We take reasonable care to ensure content is accurate at the time of publication. Financial markets, regulations, product features and pricing change frequently, and content may become outdated. We do not undertake to update every article as circumstances change, and accept no liability for reliance placed on outdated information.</p>

    <h2>5. External links</h2>
    <p>The website may contain links to third-party websites. We are not responsible for the content, accuracy, privacy practices or availability of those third-party sites.</p>

    <h2>6. Intellectual property</h2>
    <p>All content on this website &mdash; including text, graphics, logos, imagery and downloadable material &mdash; is the property of Summarise Corporate Private Limited unless attributed to another party. You may share links to individual pages freely. Any other reproduction of substantial content requires our prior written permission.</p>

    <h2>7. Prohibited use</h2>
    <p>You agree not to use the website to:</p>
    <ul>
      <li>Attempt to gain unauthorised access to the site, its server, or any related infrastructure.</li>
      <li>Interfere with the operation of the site or its use by others.</li>
      <li>Post, transmit or link to any material that is unlawful, defamatory, discriminatory or otherwise objectionable.</li>
      <li>Impersonate any person or entity, including any of our staff.</li>
    </ul>

    <h2>8. Limitation of liability</h2>
    <p>To the fullest extent permitted by Indian law, Summarise Corporate Private Limited, its directors, employees and representatives are not liable for any direct, indirect, incidental, consequential or special damages arising out of your use of this website or reliance on any content published on it.</p>

    <h2>9. Governing law &amp; jurisdiction</h2>
    <p>These terms are governed by the laws of India. Any disputes arising out of or in connection with the use of this website shall be subject to the exclusive jurisdiction of the courts at Mumbai, Maharashtra.</p>

    <h2>10. Changes to these terms</h2>
    <p>We may update these terms from time to time. The &ldquo;last updated&rdquo; date at the top of this page indicates when they were last revised. Continued use of the website after any change constitutes acceptance of the revised terms.</p>

    <h2>11. Contact</h2>
    <p>Questions about these terms? Email <a href="mailto:<?= BIZ_EMAIL ?>"><?= BIZ_EMAIL ?></a>.</p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
