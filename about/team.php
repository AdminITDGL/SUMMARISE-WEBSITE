<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Meet the Team',
  'description' => 'Kuresh Morbiwala (Founder & Principal Consultant) and Chandrashekhar Verma (Back Office Operations) — the people you actually work with at Summarise Corporate.',
  'breadcrumbs' => [['Home', '/'], ['About', '/about/'], ['Meet the Team', '/about/team']],
  'json_ld'     => [
    [
      '@context' => 'https://schema.org',
      '@type'    => 'Person',
      'name'     => 'Kuresh Morbiwala',
      'jobTitle' => 'Founder & Principal Consultant',
      'worksFor' => ['@id' => SITE_URL . '/#organization'],
      'email'    => 'kuresh@summarise.in',
      'telephone'=> BIZ_PHONE,
      'alumniOf' => ['@type' => 'EducationalOrganization', 'name' => 'MBA (Finance)'],
      'description' => 'Founder & Principal Consultant of Summarise Corporate. MBA (Finance) with 20+ years in practice since 2003.',
    ],
    [
      '@context' => 'https://schema.org',
      '@type'    => 'Person',
      'name'     => 'Chandrashekhar Verma',
      'jobTitle' => 'Back Office Operations',
      'worksFor' => ['@id' => SITE_URL . '/#organization'],
      'email'    => 'cverma@summarise.in',
      'description' => 'Back Office Operations at Summarise Corporate. M.Com with over 20 years of financial services and operational management experience.',
    ],
  ],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="wrap">
    <div data-reveal>
      <div class="page-hero__icon"><?= icon('users', '', 32) ?></div>
      <span class="eyebrow eyebrow--dark">About &rsaquo; Meet the Team</span>
      <h1 class="headline headline--light">Two people. Four decades of <em>experience</em>.</h1>
      <p class="lead">We are deliberately a small practice. When you become a client, these are the people you actually work with &mdash; not a rotating account manager and a call centre.</p>
    </div>
  </div>
</section>

<section class="section section--white">
  <div class="wrap">
    <article class="team-card mb-4" data-reveal>
      <div class="team-card__photo" aria-hidden="true">KM</div>
      <div class="team-card__body">
        <h3>Kuresh Morbiwala</h3>
        <div class="team-card__role">Founder &amp; Principal Consultant</div>
        <p>Kuresh founded Summarise Corporate in 2003 on the belief that most clients are underserved &mdash; not for lack of good investments, but because no one has connected the dots between their savings, protection, goals and vulnerabilities.</p>
        <p>Clients describe working with him as having a knowledgeable friend in finance: someone who speaks plainly, thinks long-term, and stays involved well beyond the point of sale.</p>
        <div class="team-card__meta">
          <span class="pill"><?= icon_inline('award') ?> MBA (Finance)</span>
          <span class="pill"><?= icon_inline('clock') ?> 20+ years in practice</span>
          <span class="pill pill--teal">AMFI ARN-78740</span>
          <span class="pill pill--teal">IRDAI Agency 00413837</span>
        </div>
        <p class="mt-3 mb-0">
          <a href="mailto:kuresh@summarise.in"><?= icon_inline('mail') ?> kuresh@summarise.in</a>
          &nbsp;&middot;&nbsp;
          <a href="tel:<?= BIZ_PHONE_RAW ?>"><?= icon_inline('phone') ?> <?= BIZ_PHONE ?></a>
        </p>
      </div>
    </article>

    <article class="team-card" data-reveal data-reveal-delay="1">
      <div class="team-card__photo" aria-hidden="true">CV</div>
      <div class="team-card__body">
        <h3>Chandrashekhar Verma</h3>
        <div class="team-card__role">Back Office Operations</div>
        <p>Chandrashekhar has over 20 years of experience in financial services and operational management. His expertise sits in back-office processes, documentation, accounting support, and the administrative operations that keep client work moving cleanly behind the scenes.</p>
        <p>Clients rarely see this side of the practice, but they benefit from it every single time a transaction settles cleanly, a statement arrives on time, or a query gets a same-day reply.</p>
        <div class="team-card__meta">
          <span class="pill"><?= icon_inline('award') ?> M.Com</span>
          <span class="pill"><?= icon_inline('clock') ?> 20+ years in operations</span>
        </div>
        <p class="mt-3 mb-0">
          <a href="mailto:cverma@summarise.in"><?= icon_inline('mail') ?> cverma@summarise.in</a>
        </p>
      </div>
    </article>
  </div>
</section>

<section class="section section--ivory">
  <div class="wrap-tight text-center">
    <span class="eyebrow eyebrow--center">Careers</span>
    <h2 class="headline">We&rsquo;re <em>hiring</em>.</h2>
    <p class="lead" style="margin:0 auto 1.5rem;">A Certified Financial Planner (CFP) role is open. If you care about clarity, long-term client relationships and doing work the compliant way, we&rsquo;d love to hear from you.</p>
    <a class="btn btn-secondary" href="../careers.php"><?= icon('arrow-right') ?> See the opening</a>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
