
<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="#" class="logo">
          <span class="logo-dot"></span>
          <span>Aukse</span>
        </a>
        <p>Share your budget. Keep your privacy. The budgeting app made for couples and families.</p>
      </div>
      <div class="footer-col">
        <h4>Product</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>">Features</a></li>
          <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>">Pricing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/download/' ) ); ?>">Download</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Resources</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/guides/' ) ); ?>">Guides</a></li>
          <li><a href="<?php echo esc_url( home_url( '/compare/' ) ); ?>">Compare</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Aukse. Built by <a href="https://domarkas.co/" target="_blank">Domarkas</a>.</span>
      <?php /*
      <div class="social">
        <a href="#" aria-label="GitHub">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
        </a>
        <a href="#" aria-label="Twitter">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
        </a>
        <a href="#" aria-label="RSS">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11a9 9 0 0 1 9 9"/><path d="M4 4a16 16 0 0 1 16 16"/><circle cx="5" cy="19" r="1"/></svg>
        </a>
      </div>
        */ ?>
    </div>
  </div>
</footer>

</main>

<!-- GSAP + LENIS -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js"></script>

<script>
(() => {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const isTouchDevice = window.matchMedia('(hover: none)').matches;

  gsap.registerPlugin(ScrollTrigger, SplitText);

  // LENIS smooth scroll
  if (!prefersReducedMotion) {
    const lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smoothWheel: true,
      smoothTouch: false,
    });
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);
  }

  // HERO intro
  if (!prefersReducedMotion) {
    const heroTitle = document.querySelector('[data-hero-title]');
    const heroLede = document.querySelector('[data-hero-lede]');
    const heroActions = document.querySelector('[data-hero-actions]');
    const heroIllu = document.querySelector('[data-hero-illu]');

    const split = new SplitText(heroTitle, { type: 'chars,words' });
    gsap.set(split.chars, { y: '100%', opacity: 0 });

    gsap.timeline({ defaults: { ease: 'power4.out' } })
      .to(split.chars, {
        y: '0%', opacity: 1,
        duration: 1.1, stagger: 0.025,
      })
      .from(heroLede, { y: 30, opacity: 0, duration: 0.8 }, '-=0.6')
      .from(heroActions.children, { y: 20, opacity: 0, scale: 0.9, duration: 0.6, stagger: 0.08 }, '-=0.5')
      .from(heroIllu, { y: 60, opacity: 0, scale: 0.96, duration: 1.2, ease: 'power3.out' }, '-=0.7');
  }

  // MARQUEE
  if (!prefersReducedMotion) {
    const marquee = document.getElementById('marquee');
    const marqueeTl = gsap.to(marquee, {
      xPercent: -50,
      duration: 40,
      ease: 'none',
      repeat: -1,
    });
    marquee.addEventListener('mouseenter', () => marqueeTl.timeScale(0.2));
    marquee.addEventListener('mouseleave', () => marqueeTl.timeScale(1));
  }

  // SCROLL REVEALS
  if (!prefersReducedMotion) {
    document.querySelectorAll('[data-reveal-words]').forEach(el => {
      const split = new SplitText(el, { type: 'words,lines' });
      gsap.set(split.words, { y: '100%', opacity: 0 });
      ScrollTrigger.create({
        trigger: el,
        start: 'top 80%',
        once: true,
        onEnter: () => {
          gsap.to(split.words, {
            y: '0%', opacity: 1, duration: 0.9, ease: 'power3.out', stagger: 0.04,
          });
        },
      });
    });

    document.querySelectorAll('[data-reveal]').forEach(el => {
      gsap.set(el, { y: 30, opacity: 0 });
      ScrollTrigger.create({
        trigger: el,
        start: 'top 85%',
        once: true,
        onEnter: () => gsap.to(el, { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out' }),
      });
    });
  }

  // BENTO stagger
  if (!prefersReducedMotion) {
    const tiles = gsap.utils.toArray('[data-tile]');
    gsap.set(tiles, { y: 60, opacity: 0 });
    ScrollTrigger.create({
      trigger: '[data-bento]',
      start: 'top 75%',
      once: true,
      onEnter: () => {
        gsap.to(tiles, {
          y: 0, opacity: 1, duration: 0.9, ease: 'power3.out',
          stagger: { each: 0.08, from: 'start' },
        });
      },
    });
  }

  // TIMELINE — draw line + activate steps
  if (!prefersReducedMotion) {
    const track = document.getElementById('timeline-track');
    const trackFill = track ? track.querySelector('::before') : null;
    const steps = gsap.utils.toArray('[data-timeline-step]');

    if (track && steps.length) {
      // Initial entrance — fade steps in as section appears
      gsap.set(steps, { y: 30, opacity: 0 });

      ScrollTrigger.create({
        trigger: '#timeline',
        start: 'top 70%',
        once: true,
        onEnter: () => {
          gsap.to(steps, {
            y: 0, opacity: 1, duration: 0.8, ease: 'power3.out', stagger: 0.15,
          });
        },
      });

      // Draw the gold line as you scroll through the timeline
      gsap.to(track, {
        '--track-fill': '100%',
        scrollTrigger: {
          trigger: '#timeline',
          start: 'top 60%',
          end: 'bottom 70%',
          scrub: 0.8,
          onUpdate: (self) => {
            // Update the ::before pseudo via inline style on a CSS custom property workaround:
            // We set height directly on the ::before via a CSS variable on the parent.
            track.style.setProperty('--fill', (self.progress * 100) + '%');
          }
        }
      });

      // Activate each step as it enters viewport center
      steps.forEach((step, i) => {
        ScrollTrigger.create({
          trigger: step,
          start: 'top 65%',
          end: 'bottom 35%',
          onEnter: () => step.classList.add('is-active'),
          onEnterBack: () => step.classList.add('is-active'),
        });
      });
    }
  } else {
    // Reduced motion: just activate all steps so they look right
    document.querySelectorAll('[data-timeline-step]').forEach(s => s.classList.add('is-active'));
  }

  // MANIFESTO parallax
  if (!prefersReducedMotion) {
    const manifesto = document.querySelector('[data-manifesto]');
    if (manifesto) {
      gsap.to(manifesto, {
        scale: 1.02,
        scrollTrigger: {
          trigger: manifesto,
          start: 'top bottom',
          end: 'bottom top',
          scrub: 1,
        }
      });
    }
  }

  // BUDGET BAR fill
  if (!prefersReducedMotion) {
    document.querySelectorAll('[data-budget-fill]').forEach(bar => {
      const target = bar.dataset.target;
      gsap.to(bar, {
        width: target + '%',
        duration: 1.6,
        delay: 1.4,
        ease: 'power3.out',
      });
    });
  }

  // POST CARDS 3D tilt
  if (!isTouchDevice && !prefersReducedMotion) {
    document.querySelectorAll('[data-tilt]').forEach(card => {
      const rotX = gsap.quickTo(card, 'rotationX', { duration: 0.6, ease: 'power3' });
      const rotY = gsap.quickTo(card, 'rotationY', { duration: 0.6, ease: 'power3' });

      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width;
        const y = (e.clientY - rect.top) / rect.height;
        card.style.setProperty('--mx', `${x * 100}%`);
        card.style.setProperty('--my', `${y * 100}%`);
        rotY((x - 0.5) * 8);
        rotX((y - 0.5) * -8);
      });

      card.addEventListener('mouseleave', () => {
        rotX(0);
        rotY(0);
      });
    });
  }

  // Site header hide/show (+ reading mode on single posts)
  {
    const header = document.getElementById('site-header');
    const singleEntry = document.querySelector('.single-entry');
    const isSingle = document.body.classList.contains('single');
    let lastY = 0;

    const setSiteHeaderHeight = () => {
      if (!header) return;
      document.documentElement.style.setProperty('--site-header-height', `${header.offsetHeight}px`);
    };
    setSiteHeaderHeight();
    window.addEventListener('resize', setSiteHeaderHeight);

    const scrolledAt = isSingle ? 16 : 100;
    const hideAfter = isSingle ? 56 : 300;
    const readingAt = isSingle ? 120 : Infinity;

    ScrollTrigger.create({
      onUpdate: (self) => {
        const y = self.scroll();
        const scrollingDown = y > lastY;

        if (y > scrolledAt) header.classList.add('scrolled');
        else header.classList.remove('scrolled');

        if (scrollingDown && y > hideAfter) {
          header.classList.add('hidden');
        } else if (!scrollingDown || y <= hideAfter) {
          header.classList.remove('hidden');
        }

        if (isSingle && singleEntry) {
          if (y > readingAt && scrollingDown) {
            singleEntry.classList.add('is-reading');
          } else if (y <= readingAt || !scrollingDown) {
            singleEntry.classList.remove('is-reading');
          }
        }

        lastY = y;
      },
    });
  }

  window.addEventListener('load', () => ScrollTrigger.refresh());
})();
</script>

<!-- Connect the --fill CSS variable to the ::before height -->
<style>
  .timeline-track::before {
    height: var(--fill, 0%);
  }
</style>

</body>
</html>
