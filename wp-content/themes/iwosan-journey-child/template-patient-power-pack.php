<?php
/**
 * Template Name: Iwosan Patient Power Pack
 * Description: Custom coded Patient Power Pack hub page for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The Patient Power Pack</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     PATIENT POWER PACK — HUB
     Cards link directly to the 4 landing pages below Patient Power Pack (122),
     since those landing pages are themselves the tools (Briefing Builder /
     Symptom Translator) or the download/purchase placeholders (Core Scripts /
     90-Day Journal) — there is no separate "tool" URL to route through.
     ============================================ -->
<style>
  .iwj-ppp-page {
    --primary-navy: #0A1F44;
    --primary-green: #1C3A2A;
    --accent-gold: #C9A052;
    --accent-teal: #4DAEAF;
    --bg-cream: #FAF8F4;
    --text-main: #0A1F44;
    --text-muted: #4A5568;
    --white: #FFFFFF;
    --border-light: #E2E8F0;
    --font-heading: 'Montserrat', sans-serif;
    --font-body: 'Lato', sans-serif;
    font-family: var(--font-body); color: var(--text-main); line-height: 1.6;
  }
  .iwj-ppp-page * { box-sizing: border-box; }
  .iwj-ppp-page h1, .iwj-ppp-page h2, .iwj-ppp-page h3 { font-family: var(--font-heading); font-weight: 600; color: var(--primary-navy); }

  .iwj-ppp-hero {
    background: linear-gradient(to right, rgba(10, 31, 68, 0.95), rgba(28, 58, 42, 0.85)), url('https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
    padding: 100px 20px; text-align: center; color: var(--white);
  }
  .iwj-ppp-hero h1 { color: var(--bg-cream); font-size: 3rem; margin-bottom: 20px; letter-spacing: -0.5px; }
  .iwj-ppp-hero p { font-size: 1.25rem; max-width: 700px; margin: 0 auto 30px auto; color: #E2E8F0; }
  .iwj-ppp-accent-bar { width: 80px; height: 4px; background-color: var(--accent-gold); margin: 0 auto 30px auto; }

  .iwj-ppp-intro-section { max-width: 900px; margin: 60px auto; padding: 0 20px; text-align: center; }
  .iwj-ppp-intro-section h2 { font-size: 2.2rem; margin-bottom: 20px; }
  .iwj-ppp-intro-section p { font-size: 1.15rem; color: var(--text-muted); margin-bottom: 20px; }

  .iwj-ppp-toolkit-container { max-width: 1200px; margin: 0 auto 80px auto; padding: 0 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; }
  .iwj-ppp-tool-card { background: var(--white); border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(10, 31, 68, 0.05); border: 1px solid var(--border-light); border-top: 5px solid var(--primary-green); display: flex; flex-direction: column; transition: transform 0.3s ease; }
  .iwj-ppp-tool-card:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(10, 31, 68, 0.1); }
  .iwj-ppp-tool-card:nth-child(2) { border-top-color: var(--accent-teal); }
  .iwj-ppp-tool-card:nth-child(3) { border-top-color: var(--accent-gold); }

  .iwj-ppp-tool-image { height: 200px; background-size: cover; background-position: center; position: relative; }
  .iwj-ppp-tool-image-overlay { position: absolute; bottom: 0; left: 0; right: 0; padding: 15px 20px; background: linear-gradient(to top, rgba(10,31,68,0.9), transparent); }
  .iwj-ppp-tool-tag { font-family: var(--font-heading); font-size: 0.75rem; text-transform: uppercase; color: var(--bg-cream); font-weight: 600; }

  .iwj-ppp-tool-content { padding: 30px; flex-grow: 1; display: flex; flex-direction: column; }
  .iwj-ppp-tool-content h3 { font-size: 1.5rem; margin-bottom: 15px; }
  .iwj-ppp-tool-content p { color: var(--text-muted); margin-bottom: 25px; flex-grow: 1; }
  .iwj-ppp-tool-features { list-style: none; margin-bottom: 30px; border-top: 1px solid var(--border-light); padding-top: 20px; }
  .iwj-ppp-tool-features li { display: flex; align-items: flex-start; margin-bottom: 12px; font-size: 0.95rem; }
  .iwj-ppp-tool-features li svg { width: 20px; height: 20px; fill: var(--accent-gold); margin-right: 10px; flex-shrink: 0; margin-top: 2px; }

  .iwj-ppp-btn { display: inline-block; width: 100%; text-align: center; padding: 15px 20px; border-radius: 6px; font-family: var(--font-heading); font-weight: 600; text-decoration: none; border: none; cursor: pointer; transition: background 0.2s; }
  .iwj-ppp-btn-primary { background-color: var(--primary-navy); color: var(--white); }
  .iwj-ppp-btn-primary:hover { background-color: var(--primary-green); }
  .iwj-ppp-btn-outline { background-color: transparent; color: var(--primary-navy); border: 2px solid var(--primary-navy); margin-top: 10px; }
  .iwj-ppp-btn-outline:hover { background-color: var(--bg-cream); }
</style>

<div class="iwj-ppp-page">

  <section class="iwj-ppp-hero">
    <div class="iwj-ppp-accent-bar"></div>
    <h1>The Patient Power Pack</h1>
    <p>Your survival-grade toolkit for the exam room. Download the scripts, journals, and preparation guides designed to enforce your sovereignty and dismantle clinical bias.</p>
  </section>

  <section class="iwj-ppp-intro-section">
    <h2>Stop Asking For Permission.</h2>
    <p>A 10-minute clinic visit isn't enough time to formulate the right questions when you feel rushed or dismissed.</p>
    <p>These tools are designed to be printed, filled out, and taken directly into the room with you to ensure your concerns become part of your permanent medical record.</p>
  </section>

  <section class="iwj-ppp-toolkit-container">
    <div class="iwj-ppp-tool-card">
      <div class="iwj-ppp-tool-image" style="background-image: url('https://images.unsplash.com/photo-1573497620053-ea5300f94f21?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
        <div class="iwj-ppp-tool-image-overlay"><span class="iwj-ppp-tool-tag">The Core Scripts</span></div>
      </div>
      <div class="iwj-ppp-tool-content">
        <h3>Self-Advocacy Toolkit</h3>
        <p>The exact word-for-word conversation scripts and frameworks you need to cut through bias and demand objective testing.</p>
        <ul class="iwj-ppp-tool-features">
          <li><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>The B.R.A.I.N. Consent Pocket Card</li>
          <li><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>The "Document the Refusal" Tear-Sheet</li>
        </ul>
        <a href="/patient-power-pack/core-scripts/" class="iwj-ppp-btn iwj-ppp-btn-primary">Get the Core Scripts</a>
      </div>
    </div>

    <div class="iwj-ppp-tool-card">
      <div class="iwj-ppp-tool-image" style="background-image: url('https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
        <div class="iwj-ppp-tool-image-overlay"><span class="iwj-ppp-tool-tag">The Web Apps</span></div>
      </div>
      <div class="iwj-ppp-tool-content">
        <h3>Doctor-Ready Preparation Tools</h3>
        <p>Never walk into a consultation unprepared. Build a custom 1-page clinical briefing or translate your vague symptoms into medical data.</p>
        <ul class="iwj-ppp-tool-features">
          <li><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Interactive Briefing Builder</li>
          <li><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Symptom Translator App</li>
        </ul>
        <a href="/patient-power-pack/briefing-builder/" class="iwj-ppp-btn iwj-ppp-btn-primary">Build Your Briefing</a>
        <a href="/patient-power-pack/symptom-translator/" class="iwj-ppp-btn iwj-ppp-btn-outline">Translate Symptoms</a>
      </div>
    </div>

    <div class="iwj-ppp-tool-card">
      <div class="iwj-ppp-tool-image" style="background-image: url('https://images.unsplash.com/photo-1517842645767-c639042777db?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
        <div class="iwj-ppp-tool-image-overlay"><span class="iwj-ppp-tool-tag">The Daily Tracker</span></div>
      </div>
      <div class="iwj-ppp-tool-content">
        <h3>90-Day Lifestyle Wellness Journal</h3>
        <p>A guided, physical journal to track your physiological baselines, energy levels, and vital statistics over 12 weeks.</p>
        <ul class="iwj-ppp-tool-features">
          <li><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Daily check-engine light metrics</li>
          <li><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>End-of-month clinical review rollups</li>
        </ul>
        <a href="/patient-power-pack/90-day-journal/" class="iwj-ppp-btn iwj-ppp-btn-primary">See the 90-Day Journal</a>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
