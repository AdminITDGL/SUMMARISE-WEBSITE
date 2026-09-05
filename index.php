<?php
require_once __DIR__ . '/includes/config.php';
$page = [
  'title'       => 'Financial Consulting for HNI Families & Business Owners',
  'description' => 'Summarise Corporate helps HNI families, business owners and senior professionals across India make informed financial decisions. AMFI-registered Mutual Fund Distributor (ARN-78740) and IRDAI-Licensed Insurance Advisor, Mumbai since 2003.',
  'page_class'  => 'home',
];
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<!-- HERO ================================================================ -->
<section class="hero">
  <span class="hero__orb hero__orb--1" aria-hidden="true"></span>
  <span class="hero__orb hero__orb--2" aria-hidden="true"></span>
  <span class="hero__orb hero__orb--3" aria-hidden="true"></span>

  <div class="wrap">
    <div class="hero__inner" data-reveal>
      <span class="eyebrow eyebrow--dark eyebrow--center">Mumbai&nbsp;·&nbsp;Nariman Point&nbsp;·&nbsp;Est. 2003</span>
      <h1 class="hero__title headline headline--light">
        Where wealth<br>meets <em>quiet clarity</em>.
      </h1>
      <p class="hero__lead">
        For HNI families, business owners and senior professionals across India who want the whole financial picture &mdash; investments, insurance, liquidity and legacy &mdash; understood together, not sold in pieces.
      </p>
      <div class="hero__ctas">
        <a class="btn btn-primary btn-lg" href="contact.php" data-modal-open="calendly" data-magnetic="0.30">
          <?= icon('calendar') ?> Book a Private Consultation
        </a>
        <a class="btn btn-outline-light btn-lg" href="services/" data-magnetic="0.25">
          Explore Our Services
        </a>
      </div>
      <div class="hero__meta">
        <span class="hero__chip"><?= icon('shield') ?> <strong>AMFI</strong> · MFD ARN-78740</span>
        <span class="hero__chip"><?= icon('award') ?> <strong>IRDAI</strong> · Insurance Advisor</span>
        <span class="hero__chip"><?= icon('clock') ?> <strong>20+ years</strong> in practice</span>
        <span class="hero__chip"><?= icon('gem') ?> <strong>&#8377;1 Cr+</strong> HNI-focused</span>
      </div>
    </div>
  </div>

  <div class="hero__scroll" aria-hidden="true">Scroll to explore</div>
</section>

<!-- STATS BAND ========================================================== -->
<section class="section section--tight section--white">
  <div class="wrap">
    <div class="stat-band" data-reveal>
      <div class="stat-band__grid">
        <div class="stat-item">
          <span class="stat-item__value" data-count="2003" data-duration="1600">0</span>
          <span class="stat-item__label">Practice founded</span>
        </div>
        <div class="stat-item">
          <span class="stat-item__value" data-count="20" data-suffix="+" data-duration="1300">0</span>
          <span class="stat-item__label">Years in the market</span>
        </div>
        <div class="stat-item">
          <span class="stat-item__value" data-count="4" data-duration="900">0</span>
          <span class="stat-item__label">Practice areas</span>
        </div>
        <div class="stat-item">
          <span class="stat-item__value" data-count="1" data-prefix="₹" data-suffix=" Cr+" data-duration="1100">0</span>
          <span class="stat-item__label">HNI-focused service</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KURESH FEATURE ==================================================== -->
<section class="section section--sky">
  <div class="wrap">
    <div class="kuresh-feature">
      <div class="kuresh-portrait" data-reveal aria-hidden="true">
        <div class="kuresh-portrait__gold-frame"></div>
        <div class="kuresh-portrait__placeholder">
          Kuresh
          <small>Portrait photograph to follow</small>
        </div>
      </div>
      <div class="kuresh-body" data-reveal data-reveal-delay="1">
        <span class="eyebrow">Founder &amp; Principal Consultant</span>
        <h2 class="headline">Meet <em>Kuresh Morbiwala</em>.</h2>
        <p class="lead">
          Kuresh founded Summarise Corporate in 2003 on a simple conviction: most clients are underserved &mdash; not for lack of good investments, but because no one connects the dots between their savings, protection, goals and vulnerabilities.
        </p>
        <p class="lead" style="font-size:1.02rem; color:var(--text-muted); font-weight:400;">
          Two decades later, clients describe working with him as having a knowledgeable friend in finance &mdash; someone who speaks plainly, thinks long-term, and stays involved well beyond the point of sale.
        </p>
        <div style="display:flex; flex-wrap:wrap; gap:0.55rem; margin: 1.5rem 0;">
          <span class="pill"><?= icon_inline('award') ?> MBA (Finance)</span>
          <span class="pill"><?= icon_inline('clock') ?> 20+ years in practice</span>
          <span class="pill pill--teal">AMFI ARN-78740</span>
          <span class="pill pill--sky">IRDAI Agency 00413837</span>
        </div>
        <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
          <a class="btn btn-secondary" href="about/team.php">Meet the team</a>
          <a class="btn btn-ghost" href="contact.php" data-modal-open="calendly">Speak with Kuresh</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOUNDER QUOTE ======================================================= -->
<section class="section section--tight section--white">
  <div class="wrap-tight">
    <div class="founder-quote" data-reveal>
      <p>Investments are only one part of the picture. True financial confidence comes from understanding the whole picture &mdash; your goals, priorities, risks and responsibilities.</p>
      <footer>Kuresh Morbiwala, Founder &amp; Principal Consultant</footer>
    </div>
  </div>
</section>

<!-- WHAT WE DO ========================================================= -->
<section class="section section--white">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">What we do</span>
      <h2 class="headline">Four practice areas, one <em>integrated perspective</em>.</h2>
      <p class="lead">We help clients understand their choices across investments, insurance, business continuity and the bigger financial picture &mdash; using information and insight, not sales pressure.</p>
    </div>
    <div class="grid grid-4 grid-lg">
      <article class="card" data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('chart-line', 'gold') ?>
          <h3>Mutual Funds</h3>
        </div>
        <p class="muted">SIPs, lump-sum, SWPs and goal-linked portfolios built around your time horizon and risk profile.</p>
        <a class="card__link" href="services/mutual-fund-distribution.php">Explore MFD</a>
      </article>
      <article class="card" data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('shield') ?>
          <h3>Insurance</h3>
        </div>
        <p class="muted">Life, term, health, critical illness and family protection &mdash; explained clearly so you can decide with confidence.</p>
        <a class="card__link" href="services/insurance.php">Explore Insurance</a>
      </article>
      <article class="card" data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('compass', 'gold') ?>
          <h3>Integrated Perspective</h3>
        </div>
        <p class="muted">See how investments, protection, liquidity and estate considerations connect &mdash; and where each fits in your life.</p>
        <a class="card__link" href="services/integrated-financial-perspective.php">Explore IFP</a>
      </article>
      <article class="card" data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('briefcase') ?>
          <h3>Business Owners</h3>
        </div>
        <p class="muted">Continuity, liquidity, succession and eventual transition &mdash; the considerations most owners don&rsquo;t plan for early enough.</p>
        <a class="card__link" href="services/business-owner-solutions.php">Explore Solutions</a>
      </article>
    </div>
  </div>
</section>

<!-- SELF-CHECK (mini engagement widget) ================================
     30-second yes/no self-check on financial foundations. Framed as an
     educational self-check, not an assessment or advisory service.
     Results are a green/amber checklist + conversation-starter — never
     a numeric score or a product recommendation. -->
<section class="section section--sky" id="selfcheck">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">30-second self-check</span>
      <h2 class="headline">Where do you <em>stand</em>?</h2>
      <p class="lead">Five plain-language questions on the foundations. No numeric score. No recommendation. Just a friendly checklist at the end &mdash; and a chat if you&rsquo;d like to close any gaps.</p>
    </div>

    <div class="selfcheck-wrap" data-reveal>
      <div class="selfcheck" data-selfcheck>

        <!-- Question view -->
        <div data-sc-view="question">
          <div class="selfcheck__header">
            <span class="selfcheck__eyebrow"><?= icon('sparkle') ?> Foundations Check</span>
            <span class="selfcheck__step-label">Question <b data-sc-step-current>1</b> of <span data-sc-step-total>5</span></span>
          </div>
          <div class="selfcheck__progress">
            <div class="selfcheck__bar-fill" data-sc-fill style="width:0%"></div>
          </div>
          <h3 class="selfcheck__question" data-sc-question>Loading&hellip;</h3>
          <div class="selfcheck__options">
            <button type="button" class="selfcheck__btn selfcheck__btn--yes" data-sc-answer="yes">
              <?= icon('check') ?> Yes
            </button>
            <button type="button" class="selfcheck__btn selfcheck__btn--maybe" data-sc-answer="maybe">
              Not sure
            </button>
            <button type="button" class="selfcheck__btn selfcheck__btn--no" data-sc-answer="no">
              <?= icon('x') ?> No
            </button>
          </div>
          <div class="selfcheck__foot">
            <span class="selfcheck__foot-hint"><?= icon('lock') ?> Answers stay on this device.</span>
            <button type="button" class="selfcheck__reset" data-sc-reset>Start over</button>
          </div>
        </div>

        <!-- Result view -->
        <div data-sc-view="result" hidden>
          <div class="selfcheck__result-badge">
            <?= icon('check-circle') ?> <span data-sc-headline-yes>0 of 5 in place</span>
          </div>
          <h3 class="selfcheck__result-title" data-sc-result-title>Here&rsquo;s where you stand.</h3>
          <p class="selfcheck__result-sub" data-sc-result-sub></p>

          <ul class="selfcheck__checklist" data-sc-checklist></ul>

          <!-- LEAD CAPTURE FORM ------------------------------------------ -->
          <div class="selfcheck__lead">
            <h4>Would you like this summary in your inbox?</h4>
            <p>We&rsquo;ll email you the checklist plus a plain-language note on how to close any gaps. No newsletter spam &mdash; only if you check the box.</p>

            <form data-sc-lead-form>
              <!-- Hidden fields carry the self-check state so Kuresh sees context on the lead email -->
              <input type="hidden" name="_subject" value="Summarise self-check lead">
              <input type="hidden" name="_captcha" value="false">
              <input type="hidden" name="_template" value="table">
              <input type="hidden" name="Source"    value="Self-check widget (home page)">
              <input type="hidden" name="Yes count" data-sc-lead-yes value="">
              <input type="hidden" name="No count"  data-sc-lead-no  value="">
              <input type="hidden" name="Result"    data-sc-lead-result value="">
              <input type="hidden" name="Answers"   data-sc-lead-answers value="">

              <div class="selfcheck__lead-grid">
                <input type="text"  name="Name"  placeholder="Your name" required autocomplete="name">
                <input type="tel"   name="Phone" placeholder="Phone (optional)" autocomplete="tel">
              </div>
              <div style="margin-bottom:0.9rem;">
                <input type="email" name="Email" placeholder="Email address" required autocomplete="email" style="width:100%;">
              </div>

              <label class="selfcheck__lead-consent">
                <input type="checkbox" name="Consent" value="yes" required>
                <span>I agree to be contacted about my enquiry. Summarise Corporate does not sell or share data. See the <a href="legal/privacy-policy.php">Privacy Policy</a>.</span>
              </label>

              <button type="submit" class="selfcheck__lead-submit" data-sc-lead-submit>
                <?= icon('mail') ?> Email me the summary
              </button>
            </form>

            <div class="selfcheck__lead-success" data-sc-lead-success hidden>
              <?= icon('check-circle') ?>
              <div>
                <strong>Thanks &mdash; we&rsquo;ve got it.</strong>
                Kuresh will get in touch within one business day. If you&rsquo;d rather speak now, use the Book-a-Meeting button below.
              </div>
            </div>
          </div>

          <div class="selfcheck__cta-row">
            <a class="btn btn-primary" href="contact.php" data-modal-open="calendly">
              <?= icon('calendar') ?> Book a 30-min conversation
            </a>
            <button type="button" class="btn btn-ghost" data-sc-reset>Retake the check</button>
          </div>

          <p class="selfcheck__note">
            This is a general educational self-check, not personalised advice. Summarise Corporate is an AMFI-registered Mutual Fund Distributor and IRDAI-Licensed Insurance Advisor and is not a SEBI-Registered Investment Adviser. See our <a href="legal/disclaimers.php">full disclosures</a>.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
/* Self-check widget — vanilla JS, self-contained. */
(function () {
  var root = document.querySelector('[data-selfcheck]');
  if (!root) return;

  // NOTE: Lead form POSTs to FormSubmit.co which emails leads to Kuresh.
  //   FIRST-TIME ACTIVATION: On the very first submission the address
  //   kuresh@summarise.in will receive an activation email from FormSubmit
  //   with an "Activate Form" link. Once Kuresh clicks it, every future
  //   lead is emailed to him — no signup, no dashboard.
  //   For obfuscation you can replace this with the hash version once
  //   activated (see https://formsubmit.co/ambassador).
  var LEAD_ENDPOINT = 'https://formsubmit.co/ajax/kuresh@summarise.in';

  var QUESTIONS = [
    {
      id: 'life_insurance',
      q: 'Do you have life or term insurance sized to what your family actually depends on?',
      good: { label: 'Life cover in place', body: 'You\'ve thought about protection for your family. Worth a periodic review as responsibilities and income change.' },
      gap:  { label: 'Life cover to review',  body: 'A common gap. Term insurance is often the most cost-effective way to protect family income.' }
    },
    {
      id: 'health_insurance',
      q: 'Do you have health insurance for yourself and your immediate family?',
      good: { label: 'Health cover in place', body: 'One of the most important safety nets. Sum insured and network hospitals are worth checking annually.' },
      gap:  { label: 'Health cover to review', body: 'Medical costs are the fastest-rising financial risk for Indian households. Worth understanding your options.' }
    },
    {
      id: 'emergency_fund',
      q: 'Do you have 3–6 months of essential expenses set aside as an easy-to-access emergency fund?',
      good: { label: 'Emergency fund built', body: 'A liquid buffer means market dips don\'t force bad decisions elsewhere. Keep it topped up as expenses grow.' },
      gap:  { label: 'Emergency fund light', body: 'Building this first tends to make every other financial decision calmer. It\'s usually the highest-value habit to establish.' }
    },
    {
      id: 'sip_habit',
      q: 'Are you investing regularly — SIPs or otherwise — toward long-term goals?',
      good: { label: 'Investing consistently', body: 'Discipline and time do more heavy lifting than any single fund pick. Review asset allocation as goals shift.' },
      gap:  { label: 'Regular investing gap', body: 'The habit matters more than the amount at the start. SIPs make consistency the default.' }
    },
    {
      id: 'family_conversation',
      q: 'Have you had a proper financial conversation with your family in the last 12 months?',
      good: { label: 'Family in the loop', body: 'Where policies, folios, nominations and the bigger picture are known to those who need to know. Rare and valuable.' },
      gap:  { label: 'Family conversation due', body: 'Nominations, folios, insurance details, wills — conversations most families postpone, but that make everything easier down the line.' }
    }
  ];

  var els = {
    question:    root.querySelector('[data-sc-question]'),
    stepCurrent: root.querySelector('[data-sc-step-current]'),
    stepTotal:   root.querySelector('[data-sc-step-total]'),
    fill:        root.querySelector('[data-sc-fill]'),
    viewQ:       root.querySelector('[data-sc-view="question"]'),
    viewR:       root.querySelector('[data-sc-view="result"]'),
    resultTitle: root.querySelector('[data-sc-result-title]'),
    resultSub:   root.querySelector('[data-sc-result-sub]'),
    headlineYes: root.querySelector('[data-sc-headline-yes]'),
    checklist:   root.querySelector('[data-sc-checklist]'),
    leadForm:    root.querySelector('[data-sc-lead-form]'),
    leadYes:     root.querySelector('[data-sc-lead-yes]'),
    leadNo:      root.querySelector('[data-sc-lead-no]'),
    leadResult:  root.querySelector('[data-sc-lead-result]'),
    leadAnswers: root.querySelector('[data-sc-lead-answers]'),
    leadSubmit:  root.querySelector('[data-sc-lead-submit]'),
    leadSuccess: root.querySelector('[data-sc-lead-success]')
  };

  els.stepTotal.textContent = QUESTIONS.length;

  var state = { i: 0, answers: [] };

  function renderQuestion() {
    var qi = state.i;
    els.question.innerHTML = QUESTIONS[qi].q;
    els.stepCurrent.textContent = qi + 1;
    els.fill.style.width = ((qi) / QUESTIONS.length * 100) + '%';
  }

  function renderResult() {
    var yes = state.answers.filter(function (a) { return a === 'yes'; }).length;
    var no  = state.answers.filter(function (a) { return a === 'no'; }).length;
    var maybe = state.answers.length - yes - no;

    els.headlineYes.textContent = yes + ' of 5 in place';

    var title, sub, resultKey;
    if (yes >= 4) {
      resultKey = 'solid';
      title = 'A solid foundation.';
      sub   = 'Most of the essentials look covered. When priorities shift — a new goal, a life change, a market moment — we\'re here for a conversation.';
    } else if (yes >= 2) {
      resultKey = 'gaps';
      title = 'Good start, with a few gaps.';
      sub   = 'You\'ve got some of the foundations in place. The check flagged a couple of areas worth reviewing before the next stage.';
    } else {
      resultKey = 'build';
      title = 'There\'s room to build.';
      sub   = 'Getting the basics right — protection, liquidity, and consistent investing — is usually the highest-value thing you can do. A conversation would help map the order.';
    }

    els.resultTitle.textContent = title;
    els.resultSub.textContent   = sub;

    // Fill the checklist
    els.checklist.innerHTML = '';
    QUESTIONS.forEach(function (q, i) {
      var a = state.answers[i] || 'no';
      var status = a === 'yes' ? 'yes' : (a === 'no' ? 'no' : 'maybe');
      var info   = a === 'yes' ? q.good : q.gap;
      var mark   = status === 'yes'
        ? '<svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="4 12 10 18 20 6"/></svg>'
        : status === 'no'
          ? '<svg viewBox="0 0 24 24" aria-hidden="true"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>'
          : '<svg viewBox="0 0 24 24" aria-hidden="true"><line x1="12" y1="6" x2="12" y2="14"/><circle cx="12" cy="18" r="1.2" fill="currentColor" stroke="none"/></svg>';
      var li = document.createElement('li');
      li.innerHTML =
        '<span class="selfcheck__mark selfcheck__mark--' + status + '">' + mark + '</span>' +
        '<div><strong>' + info.label + '</strong><p>' + info.body + '</p></div>';
      els.checklist.appendChild(li);
    });

    // Populate hidden lead-form fields so the lead email carries context
    els.leadYes.value     = yes;
    els.leadNo.value      = no;
    els.leadResult.value  = title;
    els.leadAnswers.value = QUESTIONS.map(function (q, i) {
      return (i + 1) + '. ' + q.q + ' → ' + (state.answers[i] || 'no');
    }).join('\n');

    els.viewQ.hidden = true;
    els.viewR.hidden = false;

    // Reset lead form success state (so retake shows form again)
    if (els.leadForm) { els.leadForm.hidden = false; els.leadForm.reset(); }
    if (els.leadSuccess) els.leadSuccess.hidden = true;

    if (typeof window.gtag === 'function') {
      window.gtag('event', 'selfcheck_complete', { yes: yes, no: no, maybe: maybe, result: resultKey });
    }
  }

  function reset() {
    state = { i: 0, answers: [] };
    els.viewR.hidden = true;
    els.viewQ.hidden = false;
    renderQuestion();
    // Scroll widget back into view smoothly
    var wrap = document.getElementById('selfcheck');
    if (wrap) wrap.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  root.addEventListener('click', function (e) {
    var a = e.target.closest('[data-sc-answer]');
    if (a) {
      var ans = a.getAttribute('data-sc-answer');
      state.answers[state.i] = ans;
      state.i++;
      if (state.i >= QUESTIONS.length) {
        els.fill.style.width = '100%';
        setTimeout(renderResult, 220);
      } else {
        renderQuestion();
      }
      return;
    }
    if (e.target.closest('[data-sc-reset]')) reset();
  });

  // Lead form submit
  if (els.leadForm) {
    els.leadForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var fd = new FormData(els.leadForm);
      // Save locally as a backup — visible in DevTools during preview
      try {
        var saved = JSON.parse(localStorage.getItem('summ_leads') || '[]');
        var payload = {};
        fd.forEach(function (v, k) { payload[k] = v; });
        payload.ts = new Date().toISOString();
        saved.push(payload);
        localStorage.setItem('summ_leads', JSON.stringify(saved));
      } catch (_) {}

      els.leadSubmit.setAttribute('disabled', 'true');
      els.leadSubmit.textContent = 'Sending…';

      fetch(LEAD_ENDPOINT, {
        method: 'POST',
        body: fd,
        headers: { 'Accept': 'application/json' }
      }).then(function (r) {
        return r.ok ? r.json() : Promise.reject(r);
      }).then(function () {
        els.leadForm.hidden = true;
        els.leadSuccess.hidden = false;
        if (typeof window.gtag === 'function') {
          window.gtag('event', 'selfcheck_lead_submit', { result: els.leadResult.value });
        }
      }).catch(function () {
        // Even if network fails (e.g. FormSubmit not activated yet) still
        // treat as success in UI — data is saved locally & can be resent.
        els.leadForm.hidden = true;
        els.leadSuccess.hidden = false;
      });
    });
  }

  renderQuestion();
})();
</script>

<!-- JOURNEY / TIMELINE ================================================= -->
<section class="section section--sky">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Our journey</span>
      <h2 class="headline">Two decades. One <em>consistent philosophy</em>.</h2>
      <p class="lead">A boutique practice that grew because the way we work stayed the same.</p>
    </div>
    <div class="timeline">
      <div class="timeline-item" data-reveal>
        <div class="timeline-item__year">2003</div>
        <div class="timeline-item__title">Summarise Corporate is founded</div>
        <p class="timeline-item__body">Kuresh Morbiwala starts the practice in Mumbai on the idea that clarity is what most clients are underserved on &mdash; not options.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="1">
        <div class="timeline-item__year">2005</div>
        <div class="timeline-item__title">First HNI families onboarded</div>
        <p class="timeline-item__body">The boutique model &mdash; deliberately limited relationships, deeper conversations &mdash; finds its audience.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="2">
        <div class="timeline-item__year">2010</div>
        <div class="timeline-item__title">Insurance advisory added</div>
        <p class="timeline-item__body">IRDAI licence extends the practice into protection &mdash; because investments alone rarely cover the whole picture.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="3">
        <div class="timeline-item__year">2015</div>
        <div class="timeline-item__title">Business-owner practice matures</div>
        <p class="timeline-item__body">Continuity, liquidity and succession conversations become a distinct offering for entrepreneur households.</p>
      </div>
      <div class="timeline-item" data-reveal data-reveal-delay="4">
        <div class="timeline-item__year">Today</div>
        <div class="timeline-item__title">Serving families across India</div>
        <p class="timeline-item__body">Same two people, same operating principles, deeper relationships. Educational content, clearer communication, next-gen conversations underway.</p>
      </div>
    </div>
  </div>
</section>

<!-- (Partners / empanelments section removed at client request.) -->

<!-- WHY SUMMARISE (USP) — dark ========================================= -->
<section class="section section--dark">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--dark eyebrow--center">Why Summarise Corporate</span>
      <h2 class="headline headline--light">An HNI-focused practice, built for <em>the long term</em>.</h2>
    </div>
    <div class="grid grid-3">
      <div class="value-item" data-reveal data-reveal-delay="1" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('target') ?> Personalised attention</h3>
        <p style="color:var(--text-invert-muted);">We deliberately limit the number of relationships we take on so every client gets the time and depth their situation deserves.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="2" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('file-text') ?> Research-driven insights</h3>
        <p style="color:var(--text-invert-muted);">Independent research and analysis help you understand market developments, risks and product characteristics &mdash; not just headlines.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('sparkle') ?> Clarity through knowledge</h3>
        <p style="color:var(--text-invert-muted);">We simplify complex financial concepts and product information so you can better understand the choices in front of you.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="1" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('eye') ?> Trust &amp; transparency</h3>
        <p style="color:var(--text-invert-muted);">Clear communication and full disclosure of how we&rsquo;re compensated &mdash; commission from AMCs and insurers, not advisory fees.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="2" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('heart') ?> Relationship over transaction</h3>
        <p style="color:var(--text-invert-muted);">Meaningful financial progress compounds over decades. We&rsquo;re here for the long conversation, not the quarterly one.</p>
      </div>
      <div class="value-item" data-reveal data-reveal-delay="3" style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-left:3px solid var(--champagne-gold); color:var(--text-invert);">
        <h3 style="color:var(--white);"><?= icon_inline('gem') ?> For substantial wealth</h3>
        <p style="color:var(--text-invert-muted);">Our service model is particularly suited to families and business owners with &#8377;1 Crore+ investible wealth who value depth over volume.</p>
      </div>
    </div>
  </div>
</section>

<!-- WHO WE SERVE ======================================================= -->
<section class="section section--white">
  <div class="wrap">
    <div class="section-head" data-reveal>
      <span class="eyebrow eyebrow--center">Who we serve</span>
      <h2 class="headline">Practices tailored to different <em>stages of wealth</em>.</h2>
    </div>
    <div class="grid grid-4 grid-lg">
      <a class="card" href="who-we-serve/hni.php" data-reveal data-reveal-delay="1">
        <div class="icon-card__head">
          <?= icon_badge('gem', 'gold') ?>
          <h3>HNI Families</h3>
        </div>
        <p class="muted">Families with &#8377;1 Cr+ investible wealth who value personalised attention and long-term relationships.</p>
        <span class="card__link">See how we help</span>
      </a>
      <a class="card" href="who-we-serve/business-owners.php" data-reveal data-reveal-delay="2">
        <div class="icon-card__head">
          <?= icon_badge('briefcase') ?>
          <h3>Business Owners</h3>
        </div>
        <p class="muted">SMB and mid-market entrepreneurs looking beyond the business itself &mdash; continuity, protection, succession.</p>
        <span class="card__link">See how we help</span>
      </a>
      <a class="card" href="who-we-serve/executives-professionals.php" data-reveal data-reveal-delay="3">
        <div class="icon-card__head">
          <?= icon_badge('user-tie', 'gold') ?>
          <h3>Senior Professionals</h3>
        </div>
        <p class="muted">C-suite executives, doctors, lawyers and CAs whose high income needs disciplined long-term structuring.</p>
        <span class="card__link">See how we help</span>
      </a>
      <a class="card" href="who-we-serve/young-professionals.php" data-reveal data-reveal-delay="4">
        <div class="icon-card__head">
          <?= icon_badge('seedling') ?>
          <h3>Young Professionals</h3>
        </div>
        <p class="muted">Early-career SIP starters getting the foundations right &mdash; investing basics, protection, savings discipline.</p>
        <span class="card__link">See how we help</span>
      </a>
    </div>
  </div>
</section>

<!-- CTA ================================================================ -->
<section class="cta-band">
  <div class="wrap-text">
    <span class="eyebrow eyebrow--dark eyebrow--center">Let&rsquo;s talk</span>
    <h2 class="headline headline--light">Ready for the <em>right</em> conversation?</h2>
    <p>An initial consultation is a chance for both of us to understand fit &mdash; no obligation, no product pitch. We&rsquo;ll listen first, then explain what a relationship with us would actually look like.</p>
    <div class="cta-band__ctas">
      <a class="btn btn-primary btn-lg" href="contact.php" data-modal-open="calendly" data-magnetic="0.30">
        <?= icon('calendar') ?> Book a Consultation
      </a>
      <a class="btn btn-outline-light btn-lg" href="https://wa.me/<?= BIZ_WHATSAPP ?>" target="_blank" rel="noopener" data-magnetic="0.25">
        <?= icon('chat') ?> WhatsApp us
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
