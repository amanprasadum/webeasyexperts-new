    // ── Video lightbox (mega menu) ──
    function openMegaVideo(url) {
      document.getElementById('megaLightboxFrame').src = url + '?autoplay=1';
      document.getElementById('megaLightbox').classList.add('open');
      document.body.style.overflow = 'hidden';
      // Close all mega menus
      document.querySelectorAll('.mega-parent.open').forEach(p => closeMega(p));
    }
    function closeMegaVideo() {
      document.getElementById('megaLightboxFrame').src = '';
      document.getElementById('megaLightbox').classList.remove('open');
      document.body.style.overflow = '';
    }
    document.getElementById('megaLightbox').addEventListener('click', function (e) {
      if (e.target === this) closeMegaVideo();
    });

    // ── Mega Menu (desktop) ──
    let megaTimer = null;
    function openMega(parent) {
      document.querySelectorAll('.mega-parent.open').forEach(p => { if (p !== parent) closeMega(p); });
      clearTimeout(megaTimer);
      parent.classList.add('open');
      parent.querySelector('.mega-menu').classList.add('open');
      parent.querySelector('.mega-bridge').classList.add('open');
    }
    function closeMega(parent) {
      parent.classList.remove('open');
      parent.querySelector('.mega-menu').classList.remove('open');
      parent.querySelector('.mega-bridge').classList.remove('open');
    }
    document.querySelectorAll('.mega-parent').forEach(parent => {
      const menu = parent.querySelector('.mega-menu');
      const bridge = parent.querySelector('.mega-bridge');
      parent.querySelector('.nav-link-item').addEventListener('mouseenter', () => { clearTimeout(megaTimer); openMega(parent); });
      bridge.addEventListener('mouseenter', () => clearTimeout(megaTimer));
      menu.addEventListener('mouseenter', () => clearTimeout(megaTimer));
      parent.querySelector('.nav-link-item').addEventListener('mouseleave', () => { megaTimer = setTimeout(() => closeMega(parent), 120); });
      bridge.addEventListener('mouseleave', () => { megaTimer = setTimeout(() => closeMega(parent), 120); });
      menu.addEventListener('mouseleave', () => { megaTimer = setTimeout(() => closeMega(parent), 120); });
    });
    document.addEventListener('click', e => {
      if (!e.target.closest('.mega-parent')) {
        document.querySelectorAll('.mega-parent.open').forEach(p => closeMega(p));
      }
    });

    // ── Mobile accordion nav ──
    function setupMobAccordion(toggleId, subId) {
      const toggle = document.getElementById(toggleId);
      const sub = document.getElementById(subId);
      if (!toggle || !sub) return;
      toggle.addEventListener('click', () => {
        const isOpen = sub.classList.contains('open');
        // close all others
        document.querySelectorAll('.mob-sub.open').forEach(s => s.classList.remove('open'));
        document.querySelectorAll('.mob-link.expanded').forEach(t => t.classList.remove('expanded'));
        if (!isOpen) {
          sub.classList.add('open');
          toggle.classList.add('expanded');
        }
      });
    }
    setupMobAccordion('mobServicesToggle', 'mobServicesSub');
    setupMobAccordion('mobIndustriesToggle', 'mobIndustriesSub');

    // ── AOS ──
    AOS.init({ duration: 550, easing: 'ease-out', once: true, offset: 60 });

    // ── Navbar shadow on scroll ──
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 20));

    // ── Portfolio filter ──
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const f = btn.dataset.filter;
        document.querySelectorAll('#portfolioGrid > [data-cat]').forEach(card => {
          card.style.display = (f === 'all' || card.dataset.cat === f) ? '' : 'none';
        });
      });
    });

    // ── Process tabs ──
    document.querySelectorAll('.proc-tab').forEach(tab => {
      tab.addEventListener('click', () => {
        document.querySelectorAll('.proc-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.proc-panel').forEach(p => p.classList.remove('active'));
        tab.classList.add('active');
        const t = document.getElementById('proc-' + tab.dataset.proc);
        if (t) t.classList.add('active');
      });
    });

    // ── FAQ accordion ──
    document.querySelectorAll('.faq-q').forEach(q => {
      q.addEventListener('click', () => {
        const a = q.nextElementSibling, isOpen = q.classList.contains('open');
        document.querySelectorAll('.faq-q').forEach(oq => { oq.classList.remove('open'); oq.nextElementSibling.classList.remove('open'); });
        if (!isOpen) { q.classList.add('open'); a.classList.add('open'); }
      });
    });

    // ── Scroll to top ──
    const stb = document.getElementById('scrollTop');
    window.addEventListener('scroll', () => stb.classList.toggle('visible', window.scrollY > 400));
    stb.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // ── Counter animation ──
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        const el = e.target, target = +el.dataset.target, step = target / 60;
        let cur = 0;
        const tick = () => { cur += step; el.textContent = cur < target ? Math.floor(cur) : target; if (cur < target) requestAnimationFrame(tick); };
        tick(); obs.unobserve(el);
      });
    }, { threshold: 0.5 });
    document.querySelectorAll('.counter').forEach(c => obs.observe(c));