<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1 data-hero-title>Money, <em>together.</em></h1>
    <p class="lede" data-hero-lede>Aukse is the household budget app for couples and families. Share expenses, set budgets together, and finally get on the same page about money.</p>
    <div class="hero-actions" data-hero-actions>
      <a href="https://accounts.aukse.app/sign-up/" class="btn btn-primary">Sign up now <span class="btn-arrow"></span></a>
      <a href="#how" class="btn btn-secondary">See how it works</a>
    </div>

    <div class="hero-illustration" data-hero-illu>
      <div class="hero-illu-grid">
        <div class="ui-panel">
          <div class="ui-panel-title">The Bennett household</div>
          <div class="household-row">
            <div class="person">
              <div class="avatar av-1">JB</div>
              <div>
                <div class="person-name">Jack</div>
                <div class="person-role">Admin</div>
              </div>
            </div>
            <div class="amount">€1,840</div>
          </div>
          <div class="household-row">
            <div class="person">
              <div class="avatar av-2">EB</div>
              <div>
                <div class="person-name">Emma</div>
                <div class="person-role">Member</div>
              </div>
            </div>
            <div class="amount">€1,210</div>
          </div>
          <div class="household-row">
            <div class="person">
              <div class="avatar av-3">+</div>
              <div>
                <div class="person-name">Invite a member</div>
                <div class="person-role">Send a link</div>
              </div>
            </div>
          </div>
        </div>

        <div class="ui-panel">
          <div class="ui-panel-title">Groceries · this month</div>
          <div style="font-family: var(--font-display); font-weight: 600; font-size: 36px; letter-spacing: -0.02em; margin-bottom: 4px;">€312<span style="color: var(--muted); font-size: 18px; font-weight: 500;"> / €450</span></div>
          <div style="font-size: 13px; color: var(--muted); margin-bottom: 20px;">69% used · 12 days left</div>
          <div class="budget-bar-wrap">
            <div class="budget-bar"><div class="budget-fill" data-budget-fill data-target="69"></div></div>
          </div>

          <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid var(--border);">
            <div style="font-size: 13px; color: var(--muted); margin-bottom: 12px;">Recent</div>
            <div style="display: flex; justify-content: space-between; font-size: 14px; padding: 6px 0;">
              <span>Lidl · Emma</span>
              <span style="font-weight: 500;">€42.10</span>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: 14px; padding: 6px 0;">
              <span>Supermarket · Jack</span>
              <span style="font-weight: 500;">€28.90</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="built-strip">
  <div class="marquee" id="marquee">
    <span class="marquee-item">No bank connections</span>
    <span class="marquee-item">Hosted in Europe</span>
    <span class="marquee-item">GDPR-compliant</span>
    <span class="marquee-item">Your data is never sold</span>
    <span class="marquee-item">Free during beta</span>
    <span class="marquee-item">Built for two</span>
    <span class="marquee-item">Export anytime</span>
    <span class="marquee-item">No ads</span>
    <span class="marquee-item">Made for couples</span>
    <!-- Duplicate set for seamless loop -->
    <span class="marquee-item">No bank connections</span>
    <span class="marquee-item">Hosted in Europe</span>
    <span class="marquee-item">GDPR-compliant</span>
    <span class="marquee-item">Your data is never sold</span>
    <span class="marquee-item">Free during beta</span>
    <span class="marquee-item">Built for two</span>
    <span class="marquee-item">Export anytime</span>
    <span class="marquee-item">No ads</span>
    <span class="marquee-item">Made for couples</span>
  </div>
</div>

<!-- PROBLEM — both halves wrapped to force clean 2-line break -->
<section class="problem">
  <div class="container">
    <h2 data-reveal-words><span class="nowrap">Two people, one budget&mdash;</span> <span class="nowrap">finally on the same page.</span></h2>
    <p class="lede" style="text-align: center;" data-reveal>Most budgeting apps were built for one person. Aukse is built for the way money actually moves through a household — together.</p>
  </div>
</section>

<!-- BENTO -->
<section id="features">
  <div class="container">
    <div class="bento-header">
      <span class="eyebrow" data-reveal>Features</span>
      <h2 data-reveal-words>Designed for households.</h2>
      <p class="lede" data-reveal>Shared budgets, shared categories, shared visibility. Aukse keeps both of you in sync without the spreadsheet wars.</p>
    </div>

    <div class="bento" data-bento>
      <div class="tile tile-gold" data-tile>
        <div>
          <div class="pill"><span class="pill-dot"></span> Together</div>
          <h3>One budget. Both of you.</h3>
          <p>Set monthly limits per category as a household. Both members see real-time progress, no awkward end-of-month conversations.</p>
        </div>
        <div class="tile-illu">
          <div class="illu-shared">
            <div class="row"><span class="label">Groceries</span><span class="val">€312 / €450</span></div>
            <div class="row"><span class="label">Eating out</span><span class="val">€88 / €150</span></div>
            <div class="row"><span class="label">Transport</span><span class="val">€124 / €200</span></div>
          </div>
        </div>
      </div>

      <div class="tile tile-plum" data-tile>
        <div>
          <div class="tile-eyebrow">Households</div>
          <h3>Invite your partner.</h3>
        </div>
        <div class="tile-illu">
          <div class="illu-invite">
            <div class="av">+</div>
            <div class="txt">emma@example.com</div>
            <span class="add">→</span>
          </div>
        </div>
      </div>

      <div class="tile tile-sage" data-tile>
        <div>
          <div class="tile-eyebrow">Categories</div>
          <h3>Make them yours.</h3>
        </div>
        <div class="tile-illu">
          <div class="illu-cats">
            <span class="cat-pill">Groceries</span>
            <span class="cat-pill">Rent</span>
            <span class="cat-pill">Pets</span>
            <span class="cat-pill">Date night</span>
            <span class="cat-pill">Travel</span>
            <span class="cat-pill">+</span>
          </div>
        </div>
      </div>

      <div class="tile tile-coral" data-tile>
        <div>
          <div class="tile-eyebrow">Splits</div>
          <h3>Who paid what, settled fast.</h3>
          <p>See who owes whom at a glance. Settle up monthly — or never, if you share everything.</p>
        </div>
        <div class="tile-illu">
          <div class="illu-split">
            <div class="top"><span>Jack 60%</span><span>Emma 40%</span></div>
            <div class="split-bar">
              <div class="split-a"></div>
              <div class="split-b"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="tile tile-ink" data-tile>
        <div>
          <div class="tile-eyebrow">Privacy</div>
          <h3>Your data, your rules.</h3>
          <p>No bank connections. No data resold. Hosted in Europe.</p>
        </div>
        <div class="tile-illu">
          <div class="illu-privacy">
            <span class="priv-tag gold">No banks</span>
            <span class="priv-tag">EU-hosted</span>
            <span class="priv-tag">GDPR</span>
            <span class="priv-tag">Export anytime</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS — CONNECTED TIMELINE -->
<section id="how" class="how-section">
  <div class="container">
    <div class="how-header">
      <span class="eyebrow" data-reveal>How it works</span>
      <h2 data-reveal-words>Set up in five minutes.</h2>
      <p class="lede" data-reveal>Three steps. No bank syncing, no spreadsheet imports, no manual reconciling. Just sign up and start tracking.</p>
    </div>

    <div class="timeline" id="timeline">
      <div class="timeline-track" id="timeline-track"></div>

      <div class="timeline-step" data-timeline-step="0">
        <div class="timeline-marker">01</div>
        <div class="timeline-content">
          <h3>Create your household</h3>
          <p>Sign up, name your household, set your default currency. No bank connections, no syncing, no awkward permissions screens.</p>
          <div class="timeline-detail">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <span>Takes 60 seconds</span>
          </div>
        </div>
      </div>

      <div class="timeline-step" data-timeline-step="1">
        <div class="timeline-marker">02</div>
        <div class="timeline-content">
          <h3>Invite your partner</h3>
          <p>Send an invite link by email or messages. Once they join, you both see the same budgets, categories, and transactions — in real time.</p>
          <div class="timeline-detail">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
            <span>Works on web & mobile</span>
          </div>
        </div>
      </div>

      <div class="timeline-step" data-timeline-step="2">
        <div class="timeline-marker">03</div>
        <div class="timeline-content">
          <h3>Track together</h3>
          <p>Log expenses as they happen, from your phone or laptop. Watch shared budgets fill up in real time. End every month knowing exactly where the money went.</p>
          <div class="timeline-detail">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            <span>Always in sync, both of you</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MANIFESTO -->
<section class="manifesto-wrap" id="about">
  <div class="manifesto" data-manifesto>
    <div class="manifesto-inner">
      <span class="eyebrow" data-reveal>Why Aukse</span>
      <h2 data-reveal-words>Built by one person. For two.</h2>
      <p data-reveal>Aukse is made by one developer who wanted a budgeting app that actually fit how a couple manages money. <strong>No venture funding. No data brokers. No bank connections.</strong></p>
      <p data-reveal>Because it answers to no investors and sells no ads, Aukse can keep one simple promise: <strong>your money data stays yours</strong> — stored in Europe, never sold, exportable anytime.</p>
      <p style="margin-top: 32px;">
        <a href="#how" class="btn btn-primary">See how it works <span class="btn-arrow"></span></a>
      </p>
    </div>
  </div>
</section>

<!-- GUIDES -->
<section id="guides">
  <div class="container">
    <div class="blog-header">
      <div>
        <span class="eyebrow" data-reveal>Guides</span>
        <h2 data-reveal-words>Practical guides for couples.</h2>
      </div>
      <a href="<?php echo esc_url( get_post_type_archive_link( 'guide' ) ); ?>" class="btn btn-secondary">All guides <span class="btn-arrow"></span></a>
    </div>
    <div class="blog-grid">
      <?php
      $guides_query = new WP_Query(
        array(
          'post_type'      => 'guide',
          'posts_per_page' => 3,
          'orderby'        => 'date',
          'order'          => 'DESC',
        )
      );

      if ( $guides_query->have_posts() ) :
        while ( $guides_query->have_posts() ) :
          $guides_query->the_post();
          get_template_part( 'template-parts/guide', 'card' );
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section style="padding: 0 0 120px;">
  <div class="final-cta">
    <h2 data-reveal-words>Start tracking, together.</h2>
    <p class="lede" data-reveal>Free during beta. No credit card. No bank connections. Just you, your partner, and a budget that actually works.</p>
    <a href="https://accounts.aukse.app/sign-up/" class="btn btn-primary">Create your household <span class="btn-arrow"></span></a>
  </div>
</section>

<?php get_footer(); ?>