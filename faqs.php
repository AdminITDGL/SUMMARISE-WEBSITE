<?php
require_once __DIR__ . '/includes/config.php';

/*
 * FAQs — grouped by category so the sidebar tabs and live-search actually
 * have something to filter on. Icons pick up per-question tone.
 */
$faqs = [
  ['cat' => 'consultation', 'icon' => 'calendar', 'q' => 'How does an initial consultation work?',
   'a' => 'It&rsquo;s a 30-minute conversation, usually over video call or at our Nariman Point office. Kuresh will ask about your situation, existing holdings, goals and any specific concerns. There&rsquo;s no product pitch and no obligation to become a client &mdash; if we don&rsquo;t think we&rsquo;re the right firm for you, we&rsquo;ll say so.'],

  ['cat' => 'fees', 'icon' => 'coins', 'q' => 'How is Summarise Corporate compensated?',
   'a' => '<strong>We earn commission, not advisory fees.</strong> As an AMFI-registered Mutual Fund Distributor we earn distribution commission from asset management companies for schemes placed with clients. As an IRDAI-Licensed Insurance Advisor we earn commission from insurers for policies placed. We do not charge advisory fees and we do not hold SEBI Investment Adviser registration. This is a standard model for AMFI/IRDAI-regulated distributors &mdash; and we believe you should know how any firm is paid before you work with them.'],

  ['cat' => 'regulation', 'icon' => 'shield', 'q' => 'Why don&rsquo;t you call yourselves &ldquo;wealth managers&rdquo; or &ldquo;financial planners&rdquo;?',
   'a' => 'Because we&rsquo;re not licensed to. Terms like &ldquo;financial planner,&rdquo; &ldquo;investment adviser,&rdquo; &ldquo;wealth manager&rdquo; and &ldquo;advisory services&rdquo; in India are reserved for firms holding SEBI Investment Adviser registration &mdash; which we do not. What we do hold is AMFI Mutual Fund Distributor registration and an IRDAI Insurance Advisor licence, and we deliberately describe our work using terms consistent with what those registrations actually permit: distribution, information, insights and product understanding.'],

  ['cat' => 'onboarding', 'icon' => 'file-text', 'q' => 'What&rsquo;s the onboarding process?',
   'a' => 'After the initial call, if there&rsquo;s a good fit we send a short intake note summarising what we understood, followed by KYC and account-opening paperwork. First transactions typically follow within a couple of weeks, once folios are active and any existing portfolio has been reviewed.'],

  ['cat' => 'fees', 'icon' => 'gem', 'q' => 'Is there a minimum investible amount?',
   'a' => 'Our practice is particularly suited to families and business owners with &#8377;1 Crore+ of investible wealth &mdash; that&rsquo;s where our service depth and relationship model tend to earn their keep. That said, we work with committed young professionals starting an SIP journey too, because the habits set in the first ten years matter more than any product pick later on.'],

  ['cat' => 'regulation', 'icon' => 'lock', 'q' => 'Do you take custody of my money?',
   'a' => 'No. Investments sit in your own folios directly with the AMC (for mutual funds) or with the insurer (for insurance policies), in your name. We are a distributor &mdash; we help you understand, transact and monitor. We never take custody of client funds.'],

  ['cat' => 'consultation', 'icon' => 'phone', 'q' => 'How often will we speak once I&rsquo;m a client?',
   'a' => 'It depends entirely on the relationship. Typically we&rsquo;ll do a scheduled portfolio review at least annually &mdash; more often for larger portfolios or during periods of life change. Between reviews, you can reach us on WhatsApp, email or phone; we aim to respond the same business day.'],

  ['cat' => 'contact', 'icon' => 'globe', 'q' => 'Do you serve clients outside Mumbai?',
   'a' => 'Yes. While our office is in Nariman Point, our clients are spread across India and internationally. Most conversations happen over video call, and paperwork is fully digital wherever the KYC and product structure allow.'],

  ['cat' => 'regulation', 'icon' => 'compass', 'q' => 'Do you provide tax, legal or estate planning advice?',
   'a' => 'We provide relevant financial <em>information</em> and <em>considerations</em> that help you think about these areas, but we do not provide regulated tax advice, legal advice or formal estate planning. Where a specialist is needed, we coordinate with your CA, lawyer or estate planner &mdash; and if you don&rsquo;t have one, we can typically point you to a good one.'],

  ['cat' => 'contact', 'icon' => 'life-buoy', 'q' => 'How do I raise a complaint or grievance?',
   'a' => 'Our full grievance redressal process is documented on our <a href="legal/grievance-redressal.php">grievance redressal page</a>. In summary: contact us directly first at <a href="mailto:' . BIZ_EMAIL . '">' . BIZ_EMAIL . '</a> or by phone; if not resolved, escalation paths to AMFI and IRDAI are documented on that page.'],
];

$cats = [
  'all'          => ['label' => 'All questions',   'icon' => 'layers'],
  'consultation' => ['label' => 'Consultations',   'icon' => 'calendar'],
  'fees'         => ['label' => 'Fees &amp; minimums', 'icon' => 'coins'],
  'regulation'   => ['label' => 'Regulation',      'icon' => 'shield'],
  'onboarding'   => ['label' => 'Onboarding',      'icon' => 'file-text'],
  'contact'      => ['label' => 'Contact &amp; support', 'icon' => 'phone'],
];

$page = [
  'title'       => 'Frequently Asked Questions',
  'description' => 'Answers to the questions we\'re asked most often — consultations, fees, regulation, onboarding, and how a relationship with Summarise Corporate actually works. Live-searchable.',
  'breadcrumbs' => [['Home', '/'], ['FAQs', '/faqs']],
  'json_ld'     => [[
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
      return [
        '@type' => 'Question',
        'name'  => strip_tags(html_entity_decode($f['q'])),
        'acceptedAnswer' => [
          '@type' => 'Answer',
          'text'  => strip_tags(html_entity_decode($f['a'])),
        ],
      ];
    }, $faqs),
  ]],
];
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('chat', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">FAQs</span>
      <h1 class="headline headline--light">Practical questions. <em>Honest answers.</em></h1>
      <p class="lead">The questions we&rsquo;re asked most often &mdash; including the ones on fees, regulation and how we&rsquo;re compensated, which we&rsquo;d rather answer up front than in a footer.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="faq-layout">

      <!-- Sidebar: category tabs (sticky on desktop) -->
      <aside class="faq-sidebar" data-reveal>
        <h4>Browse by topic</h4>
        <ul class="faq-tabs" role="tablist">
<?php foreach ($cats as $slug => $c): ?>
          <li>
            <button type="button" class="faq-tab<?= $slug === 'all' ? ' is-active' : '' ?>"
                    data-faq-tab="<?= $slug ?>"
                    aria-pressed="<?= $slug === 'all' ? 'true' : 'false' ?>">
              <?= icon($c['icon']) ?>
              <span><?= $c['label'] ?></span>
            </button>
          </li>
<?php endforeach; ?>
        </ul>

        <div class="mt-4">
          <h4>Still stuck?</h4>
          <p class="small muted" style="margin-bottom:0.75rem;">Ask us anything on WhatsApp &mdash; we usually reply the same business day.</p>
          <a class="btn btn-secondary btn-sm" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
        </div>
      </aside>

      <!-- Main: search + list -->
      <div>
        <div class="faq-search" data-reveal>
          <label class="sr-only" for="faq-search" style="position:absolute;left:-9999px;">Search FAQs</label>
          <input type="search" id="faq-search" data-faq-search placeholder="Search FAQs &mdash; try &lsquo;commission&rsquo; or &lsquo;SIP&rsquo;&hellip;" autocomplete="off">
        </div>

<?php foreach ($faqs as $i => $f): ?>
        <details class="faq-item" data-faq-item data-cat="<?= $f['cat'] ?>"<?= $i === 0 ? ' open' : '' ?>>
          <summary>
            <span class="faq-item__icon"><?= icon($f['icon']) ?></span>
            <span class="faq-item__q"><?= $f['q'] ?></span>
            <span class="faq-item__toggle"><?= icon('plus') ?></span>
          </summary>
          <div class="faq-item__body">
            <p><?= $f['a'] ?></p>
          </div>
        </details>
<?php endforeach; ?>

        <div class="faq-empty" data-faq-empty hidden>
          <strong>No FAQ matches that yet.</strong>
          Try a different word, or <a href="contact.php" data-modal-open="calendly">ask us in a 30-minute call</a>.
        </div>
      </div>

    </div>
  </div>
</section>

<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Still have a question?</span>
    <h2 class="headline headline--light">Book a 30-minute conversation.</h2>
    <p>We&rsquo;ll answer it directly &mdash; and if it doesn&rsquo;t belong on this page, we&rsquo;ll add it here for the next person who asks.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="contact.php" data-modal-open="calendly"><?= icon('calendar') ?> Book a Consultation</a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('chat') ?> WhatsApp us</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
