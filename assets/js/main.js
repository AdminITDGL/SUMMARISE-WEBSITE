/* Summarise Corporate — site scripts (v3, premium + animated)
   No dependencies. Handles:
     - Mobile nav toggle
     - Calendly modal + 7-second auto-popup
     - Sticky actions
     - Scroll-reveal animations
     - Counter-up on stats
     - 3D-tilt on cards
     - Hero parallax
     - FAQ live search + smooth open/close
*/

(function () {
  'use strict';

  var prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // ---- Mobile nav toggle -------------------------------------------------
  var nav = document.querySelector('[data-nav]');
  var toggle = document.querySelector('[data-nav-toggle]');
  if (nav && toggle) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  // ---- Calendly modal ----------------------------------------------------
  var modal = document.querySelector('[data-modal="calendly"]');
  var iframe = modal ? modal.querySelector('iframe') : null;
  var iframeSrc = iframe ? iframe.getAttribute('data-src') : null;

  function openModal(source) {
    if (!modal) return;
    if (iframe && iframeSrc && !iframe.getAttribute('src')) {
      iframe.setAttribute('src', iframeSrc);
    }
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    if (typeof window.gtag === 'function') {
      window.gtag('event', 'book_consultation_open', {
        location: window.location.pathname,
        source: source || 'manual'
      });
    }
  }
  function closeModal() {
    if (!modal) return;
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  document.addEventListener('click', function (e) {
    var trigger = e.target.closest('[data-modal-open="calendly"]');
    if (trigger) { e.preventDefault(); openModal('cta'); return; }
    if (e.target.closest('[data-modal-close]')) { closeModal(); return; }
    if (modal && modal.classList.contains('is-open') && e.target === modal.querySelector('.modal__scrim')) {
      closeModal();
    }
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && modal && modal.classList.contains('is-open')) closeModal();
  });

  // ---- Auto-open Calendly popup (once per session, ~7s) -----------------
  var AUTO_DELAY_MS = 7000;
  var STORAGE_KEY = 'summ_autopopup_v1';
  var isExcludedPage = /\/legal\//.test(window.location.pathname);

  function tryAutoOpen() {
    if (!modal) return;
    try { if (sessionStorage.getItem(STORAGE_KEY) === '1') return; } catch (_) {}
    if (modal.classList.contains('is-open')) return;
    openModal('auto');
    try { sessionStorage.setItem(STORAGE_KEY, '1'); } catch (_) {}
  }
  if (!isExcludedPage) {
    var scheduled = false;
    function schedule() {
      if (scheduled) return;
      scheduled = true;
      setTimeout(function () {
        if (document.visibilityState === 'visible') tryAutoOpen();
        else scheduled = false;
      }, AUTO_DELAY_MS);
    }
    if (document.visibilityState === 'visible') schedule();
    document.addEventListener('visibilitychange', function () {
      if (document.visibilityState === 'visible') schedule();
    });
  }

  // ---- Active-nav highlight ---------------------------------------------
  try {
    var path = window.location.pathname.replace(/\/index\.php$/, '/').replace(/\.php$/, '');
    if (path === '') path = '/';
    document.querySelectorAll('.nav-list > li > a[href]').forEach(function (a) {
      var href = a.getAttribute('href').replace(/\/index\.php$/, '/').replace(/\.php$/, '');
      if (href === '/' && path === '/') { a.classList.add('is-active'); return; }
      if (href !== '/' && path.indexOf(href) === 0) a.classList.add('is-active');
    });
  } catch (_) {}

  // ---- Scroll reveal (IntersectionObserver) -----------------------------
  if ('IntersectionObserver' in window && !prefersReducedMotion) {
    document.documentElement.classList.add('reveal-ready');
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -20px 0px' });
    document.querySelectorAll('[data-reveal]').forEach(function (el) {
      io.observe(el);
      var rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        requestAnimationFrame(function () { el.classList.add('is-visible'); });
      }
    });
    setTimeout(function () {
      document.querySelectorAll('[data-reveal]:not(.is-visible)').forEach(function (el) {
        el.classList.add('is-visible');
      });
    }, 3000);
  }

  // ---- Counter-up on stat values ---------------------------------------
  // Any element with data-count="123" (optional data-suffix="+", data-prefix="₹")
  // will animate from 0 → target once it scrolls into view.
  function animateCount(el) {
    var target = parseFloat(el.getAttribute('data-count'));
    var suffix = el.getAttribute('data-suffix') || '';
    var prefix = el.getAttribute('data-prefix') || '';
    if (isNaN(target)) return;
    if (prefersReducedMotion) { el.textContent = prefix + target + suffix; return; }
    var duration = parseInt(el.getAttribute('data-duration') || '1400', 10);
    var start = performance.now();
    function frame(now) {
      var p = Math.min(1, (now - start) / duration);
      // easeOutCubic
      var eased = 1 - Math.pow(1 - p, 3);
      var val = target * eased;
      // Integer targets: show whole numbers; decimals: 1 dp
      var display = Number.isInteger(target) ? Math.round(val) : val.toFixed(1);
      el.textContent = prefix + display + suffix;
      if (p < 1) requestAnimationFrame(frame);
    }
    requestAnimationFrame(frame);
  }
  if ('IntersectionObserver' in window) {
    var countIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          countIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });
    document.querySelectorAll('[data-count]').forEach(function (el) { countIO.observe(el); });
  }

  // ---- Subtle 3D tilt on cards ------------------------------------------
  // Opt in with data-tilt on any card. Cheap: no dependencies, gracefully
  // disabled for reduced-motion and touch devices.
  var isTouch = window.matchMedia && window.matchMedia('(hover: none)').matches;
  if (!prefersReducedMotion && !isTouch) {
    document.querySelectorAll('[data-tilt]').forEach(function (el) {
      var raf = null;
      el.style.transformStyle = 'preserve-3d';
      el.style.transition = 'transform 200ms cubic-bezier(.22,1,.36,1)';
      el.addEventListener('mousemove', function (e) {
        var r = el.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width - 0.5;
        var py = (e.clientY - r.top)  / r.height - 0.5;
        if (raf) cancelAnimationFrame(raf);
        raf = requestAnimationFrame(function () {
          el.style.transform = 'perspective(900px) rotateX(' + (-py * 4).toFixed(2) + 'deg) rotateY(' + (px * 6).toFixed(2) + 'deg) translateY(-4px)';
        });
      });
      el.addEventListener('mouseleave', function () {
        if (raf) cancelAnimationFrame(raf);
        el.style.transform = '';
      });
    });
  }

  // ---- Hero parallax ----------------------------------------------------
  // Any element with data-parallax="0.3" (speed) drifts up on scroll.
  if (!prefersReducedMotion) {
    var parallaxEls = document.querySelectorAll('[data-parallax]');
    if (parallaxEls.length) {
      var lastY = 0, ticking = false;
      function applyParallax() {
        parallaxEls.forEach(function (el) {
          var speed = parseFloat(el.getAttribute('data-parallax')) || 0.3;
          el.style.transform = 'translate3d(0,' + (-lastY * speed).toFixed(1) + 'px,0)';
        });
        ticking = false;
      }
      window.addEventListener('scroll', function () {
        lastY = window.scrollY;
        if (!ticking) { requestAnimationFrame(applyParallax); ticking = true; }
      }, { passive: true });
    }
  }

  // ---- FAQ live filter + category tabs ---------------------------------
  var faqSearch = document.querySelector('[data-faq-search]');
  var faqItems  = document.querySelectorAll('[data-faq-item]');
  var faqTabs   = document.querySelectorAll('[data-faq-tab]');
  var faqEmpty  = document.querySelector('[data-faq-empty]');
  var faqActiveCat = 'all';
  var faqQuery = '';

  function faqFilter() {
    var q = faqQuery.trim().toLowerCase();
    var shown = 0;
    faqItems.forEach(function (item) {
      var cat = item.getAttribute('data-cat') || '';
      var text = item.textContent.toLowerCase();
      var matchCat = (faqActiveCat === 'all' || cat === faqActiveCat);
      var matchQ = !q || text.indexOf(q) !== -1;
      var show = matchCat && matchQ;
      item.hidden = !show;
      if (show) shown++;
    });
    if (faqEmpty) faqEmpty.hidden = shown > 0;
  }

  if (faqSearch) {
    faqSearch.addEventListener('input', function () { faqQuery = faqSearch.value || ''; faqFilter(); });
  }
  faqTabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      faqTabs.forEach(function (t) { t.classList.remove('is-active'); t.setAttribute('aria-pressed', 'false'); });
      tab.classList.add('is-active');
      tab.setAttribute('aria-pressed', 'true');
      faqActiveCat = tab.getAttribute('data-faq-tab') || 'all';
      faqFilter();
    });
  });

  // ---- Smooth-scroll fallback for anchor links --------------------------
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = a.getAttribute('href');
      if (id === '#' || id.length < 2) return;
      var el = document.querySelector(id);
      if (!el) return;
      e.preventDefault();
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });
})();
