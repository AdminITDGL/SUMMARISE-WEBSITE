<?php
require_once __DIR__ . '/../includes/config.php';
$page = [
  'title'       => 'Insights — Financial Information in Plain Language',
  'description' => 'Educational articles on investing basics, insurance & protection, business owner considerations and market/product updates. Written to inform, not to sell.',
  'breadcrumbs' => [['Home', '/'], ['Insights', '/insights/']],
];
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="page-head">
  <div class="wrap">
    <span class="eyebrow">Insights</span>
    <h1>Financial information, in plain language.</h1>
    <p class="lead">Educational articles written to help you understand your choices, not to sell you a product. Every article follows the same principle: information and insight, never specific advice or recommendations.</p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Categories</h2>
    <div class="grid grid-4 mt-3">
      <a class="card" href="investing-basics.php">
        <span class="card__tag">Category</span>
        <h3>Investing Basics</h3>
        <p class="muted">SIPs, asset classes, portfolio construction &mdash; the fundamentals every investor should know before they buy.</p>
        <span class="card__link">Browse category</span>
      </a>
      <a class="card" href="insurance-protection.php">
        <span class="card__tag">Category</span>
        <h3>Insurance &amp; Protection</h3>
        <p class="muted">Product understanding across life, term, health and critical illness &mdash; what you&rsquo;re buying and what you&rsquo;re not.</p>
        <span class="card__link">Browse category</span>
      </a>
      <a class="card" href="business-owners.php">
        <span class="card__tag">Category</span>
        <h3>For Business Owners</h3>
        <p class="muted">Continuity, liquidity, succession and exit considerations &mdash; written for owner-led households.</p>
        <span class="card__link">Browse category</span>
      </a>
      <a class="card" href="market-updates.php">
        <span class="card__tag">Category</span>
        <h3>Market &amp; Product Updates</h3>
        <p class="muted">Commentary on markets and regulatory developments. Never fund-specific recommendations.</p>
        <span class="card__link">Browse category</span>
      </a>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="wrap-text">
    <h2>Get our monthly note</h2>
    <p>One email a month with the articles we&rsquo;ve published, useful reads we&rsquo;ve come across, and any regulatory updates worth knowing about. No product pitches.</p>
    <form onsubmit="event.preventDefault(); alert('Newsletter wiring goes live once we connect the mail backend. For now, please email kuresh@summarise.in to be added.');" style="display:flex;gap:.6rem;flex-wrap:wrap;max-width:520px;">
      <input type="email" required placeholder="you@example.com" aria-label="Email address" style="flex:1;min-width:220px;padding:0.75rem 1rem;border:1px solid var(--line);border-radius:var(--radius);">
      <button class="btn btn-primary" type="submit">Subscribe</button>
    </form>
    <p class="small muted mt-2">By subscribing you agree to receive occasional emails from Summarise Corporate. Unsubscribe anytime.</p>
  </div>
</section>

<section class="section">
  <div class="wrap-text">
    <p class="small muted">
      <strong>Content policy.</strong> Every article published here is educational and informational. Nothing on this site should be construed as investment, tax or legal advice. Mutual fund investments are subject to market risks &mdash; read all scheme-related documents carefully before investing. Insurance is the subject matter of solicitation. See <a href="../legal/disclaimers.php">full disclosures</a>.
    </p>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
