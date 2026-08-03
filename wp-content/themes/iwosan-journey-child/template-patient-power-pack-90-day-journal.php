<?php
/**
 * Template Name: Iwosan Patient Power Pack — 90-Day Journal
 * Description: Custom coded Patient Power Pack "90-Day Lifestyle & Wellness Journal" child page for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>90-Day Lifestyle &amp; Wellness Journal</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     PATIENT POWER PACK — 90-DAY LIFESTYLE & WELLNESS JOURNAL
     Landing page; "Order Hardcopy" (no WooCommerce listing yet) and
     "Download 7-Day Sample" (PDF not built yet) are both placeholders.
     ============================================ -->
<style>
  .iwj-jn-page {
    --primary-navy: #0A1F44;
    --primary-green: #1C3A2A;
    --accent-gold: #C9A052;
    --accent-teal: #4DAEAF;
    --earth-brown: #8B5E3C;
    --bg-cream: #FAF8F4;
    --text-main: #0A1F44;
    --text-muted: #4A5568;
    --white: #FFFFFF;
    --border-light: #E2E8F0;
    --font-heading: 'Montserrat', sans-serif;
    --font-body: 'Lato', sans-serif;
    font-family: var(--font-body); color: var(--text-main); line-height: 1.65;
  }
  .iwj-jn-page * { box-sizing: border-box; }
  .iwj-jn-page h1, .iwj-jn-page h2, .iwj-jn-page h3 { font-family: var(--font-heading); color: var(--primary-navy); }
  .iwj-jn-page a:focus-visible, .iwj-jn-page button:focus-visible { outline: 3px solid var(--accent-gold); outline-offset: 3px; }

  .iwj-jn-breadcrumb { max-width: 1100px; margin: 0 auto; padding: 24px 20px 0; }
  .iwj-jn-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; }
  .iwj-jn-breadcrumb a:hover { color: var(--accent-gold); }

  .iwj-jn-hero { max-width: 1100px; margin: 0 auto; padding: 60px 20px 40px; display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 60px; align-items: center; }
  .iwj-jn-hero-eyebrow { font-family: var(--font-heading); font-size: 0.8rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--earth-brown); margin-bottom: 16px; }
  .iwj-jn-hero h1 { font-size: 2.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 20px; letter-spacing: -0.5px; }
  .iwj-jn-hero .iwj-jn-sub { font-size: 1.15rem; color: var(--text-muted); margin-bottom: 30px; max-width: 480px; }
  .iwj-jn-cta-row { display: flex; flex-wrap: wrap; gap: 14px; }
  .iwj-jn-btn { display: inline-block; padding: 15px 26px; border-radius: 6px; font-family: var(--font-heading); font-weight: 700; text-decoration: none; border: none; cursor: pointer; transition: background 0.2s, transform 0.15s; font-size: 0.95rem; }
  .iwj-jn-btn-primary { background-color: var(--accent-gold); color: var(--primary-navy); }
  .iwj-jn-btn-primary:hover { background-color: #b58e46; transform: translateY(-1px); }
  .iwj-jn-btn-outline { background: transparent; color: var(--primary-navy); border: 2px solid var(--primary-navy); }
  .iwj-jn-btn-outline:hover { background: var(--white); }

  .iwj-jn-mockup { background: var(--white); border-radius: 10px; box-shadow: 0 20px 45px rgba(10,31,68,0.12); border: 1px solid var(--border-light); overflow: hidden; position: relative; }
  .iwj-jn-mockup::before { content: "DAY 47 OF 90"; position: absolute; top: -13px; left: 50%; transform: translateX(-50%); background: var(--accent-gold); color: var(--primary-navy); font-family: var(--font-heading); font-size: 0.65rem; font-weight: 700; letter-spacing: 1px; padding: 5px 14px; border-radius: 4px; }
  .iwj-jn-spread { display: grid; grid-template-columns: 1fr 1fr; }
  .iwj-jn-spread > div { padding: 30px 22px 22px; }
  .iwj-jn-spread .iwj-jn-left { border-right: 1px dashed var(--border-light); }
  .iwj-jn-spread h4 { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.5px; color: var(--earth-brown); margin-bottom: 14px; }
  .iwj-jn-spread ul { list-style: none; }
  .iwj-jn-spread .iwj-jn-left li { font-size: 0.85rem; padding: 6px 0; color: var(--text-muted); display: flex; gap: 8px; }
  .iwj-jn-spread .iwj-jn-left li::before { content: "\2610"; color: var(--accent-gold); }
  .iwj-jn-spread .iwj-jn-right p.iwj-jn-prompt { font-size: 0.8rem; color: var(--text-muted); font-style: italic; margin-bottom: 8px; }
  .iwj-jn-battery { display: flex; gap: 3px; margin-bottom: 16px; }
  .iwj-jn-battery span { width: 16px; height: 22px; border: 1.5px solid var(--primary-navy); border-radius: 2px; }
  .iwj-jn-battery span.iwj-jn-filled { background: var(--accent-gold); border-color: var(--accent-gold); }

  .iwj-jn-hook-section { max-width: 760px; margin: 0 auto; padding: 60px 20px 70px; }
  .iwj-jn-hook-section p { font-size: 1.1rem; color: var(--text-muted); margin-bottom: 18px; }
  .iwj-jn-hook-section p.iwj-jn-callout { font-family: var(--font-heading); font-weight: 700; color: var(--primary-navy); font-size: 1.3rem; margin: 30px 0; padding-left: 20px; border-left: 4px solid var(--accent-gold); }

  .iwj-jn-features-section { background: var(--white); padding: 80px 20px; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); }
  .iwj-jn-features-inner { max-width: 1000px; margin: 0 auto; }
  .iwj-jn-features-inner h2 { font-size: 2rem; margin-bottom: 50px; text-align: center; }
  .iwj-jn-features-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; }
  .iwj-jn-feature { padding: 28px 26px; border-radius: 10px; background: var(--bg-cream); border-top: 4px solid var(--accent-gold); }
  .iwj-jn-feature h3 { font-size: 1.1rem; margin-bottom: 10px; }
  .iwj-jn-feature p { font-size: 0.95rem; color: var(--text-muted); }

  .iwj-jn-purchase-section { max-width: 700px; margin: 0 auto; padding: 80px 20px; text-align: center; }
  .iwj-jn-purchase-section h2 { font-size: 1.9rem; margin-bottom: 14px; }
  .iwj-jn-purchase-section p { color: var(--text-muted); margin-bottom: 30px; font-size: 1.05rem; }
  .iwj-jn-purchase-row { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; }
  .iwj-jn-price-tag { font-family: var(--font-heading); font-weight: 800; }
  .iwj-jn-placeholder-flag { max-width: 520px; margin: 20px auto 0; font-size: 0.75rem; color: var(--earth-brown); background: rgba(139,94,60,0.08); border: 1px dashed var(--earth-brown); border-radius: 6px; padding: 10px 14px; }
  .iwj-jn-disclaimer-note { font-size: 0.8rem; color: var(--text-muted); margin-top: 24px; }
  .iwj-jn-disclaimer-note a { color: var(--accent-gold); }

  @media (max-width: 860px) {
    .iwj-jn-hero { grid-template-columns: 1fr; padding-top: 30px; }
    .iwj-jn-hero h1 { font-size: 2rem; }
    .iwj-jn-features-grid { grid-template-columns: 1fr; }
    .iwj-jn-spread { grid-template-columns: 1fr; }
    .iwj-jn-spread .iwj-jn-left { border-right: none; border-bottom: 1px dashed var(--border-light); }
  }
  @media (prefers-reduced-motion: reduce) {
    .iwj-jn-btn { transition: none; }
  }
</style>

<div class="iwj-jn-page">

  <div class="iwj-jn-breadcrumb"><a href="/patient-power-pack/">&larr; Back to the Patient Power Pack</a></div>

  <section class="iwj-jn-hero">
    <div>
      <div class="iwj-jn-hero-eyebrow">The 90-Day Lifestyle &amp; Wellness Journal</div>
      <h1>The Evidence Is in Your Routine. Prove Your Case.</h1>
      <p class="iwj-jn-sub">A 10-minute clinic visit cannot solve a 24/7 mystery. Track your physiological baselines, mental load, and check-engine lights to uncover the patterns your doctor missed.</p>
      <div class="iwj-jn-cta-row">
        <a href="#iwj-jn-purchase" class="iwj-jn-btn iwj-jn-btn-primary">Order the Hardcopy Journal &mdash; <span class="iwj-jn-price-tag">$XX</span></a>
        <a href="#iwj-jn-purchase" class="iwj-jn-btn iwj-jn-btn-outline">Download a 7-Day Sample</a>
      </div>
    </div>
    <div class="iwj-jn-mockup">
      <div class="iwj-jn-spread">
        <div class="iwj-jn-left">
          <h4>Left Page &mdash; Clinical &amp; Lifestyle</h4>
          <ul>
            <li>Brain Fog / Confusion</li>
            <li>Unexplained Pain</li>
            <li>Heart Palpitations</li>
            <li>Digestive Distress</li>
            <li>Temperature Shifts</li>
          </ul>
        </div>
        <div class="iwj-jn-right">
          <h4>Right Page &mdash; Mental Processing</h4>
          <div class="iwj-jn-battery">
            <span class="iwj-jn-filled"></span><span class="iwj-jn-filled"></span><span class="iwj-jn-filled"></span><span></span><span></span>
          </div>
          <p class="iwj-jn-prompt">"Today my boundary was tested when..."</p>
          <p class="iwj-jn-prompt">"A moment I felt safe in my body today was..."</p>
        </div>
      </div>
    </div>
  </section>

  <section class="iwj-jn-hook-section">
    <p>You are the Chief Medical Officer of your body; your doctors are just your consultants. But a consultant can't help you if you don't have the data.</p>
    <p class="iwj-jn-callout">Bridge the gap between how you feel at home and what you can prove in the clinic.</p>
    <p>The 90-Day Lifestyle &amp; Wellness Journal is a physical, daily data-gathering tool designed to track your invisible symptoms. Track your energy, isolate your pain triggers, and validate your mental exhaustion in a medical system that wasn't built to listen to you.</p>
  </section>

  <section class="iwj-jn-features-section">
    <div class="iwj-jn-features-inner">
      <h2>What's Inside</h2>
      <div class="iwj-jn-features-grid">
        <div class="iwj-jn-feature">
          <h3>The &ldquo;Check-Engine Light&rdquo; Dashboard</h3>
          <p>Track daily flares in brain fog, digestive distress, and heart palpitations without overwhelming yourself.</p>
        </div>
        <div class="iwj-jn-feature">
          <h3>Mental Bandwidth Processing</h3>
          <p>Daily logs to validate your stress, emotional exhaustion, and the heavy mental load of navigating the healthcare system.</p>
        </div>
        <div class="iwj-jn-feature">
          <h3>30-Day Clinical Rollups</h3>
          <p>Monthly summaries that aggregate your data so you can spot trends &mdash; "My pelvic pain spikes exactly 4 days before my cycle."</p>
        </div>
        <div class="iwj-jn-feature">
          <h3>Tear-Sheet Prep Guides</h3>
          <p>Tear out the back pages to hand directly to your doctor at your next appointment.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="iwj-jn-purchase-section" id="iwj-jn-purchase">
    <h2>90 days of data your doctor can't dismiss.</h2>
    <p>Choose the physical journal, or start with a free 7-day sample.</p>
    <div class="iwj-jn-purchase-row">
      <a href="#" class="iwj-jn-btn iwj-jn-btn-primary" onclick="event.preventDefault(); alert('Placeholder only — WooCommerce checkout is not yet connected.');">Order the Hardcopy Journal &mdash; $XX</a>
      <a href="#" class="iwj-jn-btn iwj-jn-btn-outline" onclick="event.preventDefault(); alert('Placeholder only — the 7-day sample PDF has not been built yet.');">Download a 7-Day Digital Sample</a>
    </div>
    <div class="iwj-jn-placeholder-flag">&#9888; Both buttons are placeholders. "Order the Hardcopy Journal" needs a WooCommerce product listing (price, shipping) once final copy is drafted from the Content Architecture doc and the journal is designed/printed. "Download a 7-Day Digital Sample" needs that same final copy before a sample PDF can be built.</div>
    <p class="iwj-jn-disclaimer-note">This journal supports conversations with your provider &mdash; it does not replace professional medical advice. See our <a href="/medical-disclaimer/">Medical Disclaimer</a>.</p>
  </section>

</div>

<?php get_footer(); ?>
