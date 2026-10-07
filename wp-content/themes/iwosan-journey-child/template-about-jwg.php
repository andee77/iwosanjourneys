<?php
/**
 * Template Name: Iwosan About JWG
 * Description: Custom coded About JWG (JourneyWell Global) page for Iwosan Journeys
 */

get_header(); iwosan_back_button( 'top' );
?>

<section class="ij-page-banner">
	<h1>About JWG</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     ABOUT JWG — JourneyWell Global
     Newsletter form posts to a shared MenoWell Kit/ConvertKit form
     (confirmed decision, not a placeholder) via a no-cors fetch, since
     Kit's browser endpoint never reports real HTTP failures back to JS.
     ============================================ -->
<style>
  .iwj-ajwg-page {
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
  .iwj-ajwg-page * { box-sizing: border-box; }
  .iwj-ajwg-page h1, .iwj-ajwg-page h2, .iwj-ajwg-page h3 { font-family: var(--font-heading); color: var(--primary-navy); }
  .iwj-ajwg-page a:focus-visible, .iwj-ajwg-page button:focus-visible { outline: 3px solid var(--accent-gold); outline-offset: 3px; }
  .iwj-ajwg-page p { color: var(--text-muted); }

  .iwj-ajwg-breadcrumb { max-width: 1100px; margin: 0 auto; padding: 24px 20px 0; }
  .iwj-ajwg-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; }
  .iwj-ajwg-breadcrumb a:hover { color: var(--accent-gold); }

  .iwj-ajwg-eyebrow { font-family: var(--font-heading); font-size: 0.78rem; font-weight: 700; letter-spacing: 1.6px; text-transform: uppercase; color: var(--accent-gold); margin-bottom: 14px; }
  .iwj-ajwg-gold-rule { width: 60px; height: 3px; background: var(--accent-gold); margin: 18px 0 26px; }
  .iwj-ajwg-gold-rule.iwj-ajwg-center { margin-left: auto; margin-right: auto; }

  .iwj-ajwg-btn { display: inline-block; padding: 16px 30px; border-radius: 6px; font-family: var(--font-heading); font-weight: 700; text-decoration: none; border: none; cursor: pointer; transition: background 0.2s, transform 0.15s; font-size: 1rem; }
  .iwj-ajwg-btn-primary { background-color: var(--primary-navy); color: var(--white); }
  .iwj-ajwg-btn-primary:hover { background-color: var(--accent-gold); color: var(--primary-navy); transform: translateY(-1px); }

  .iwj-ajwg-hero { background: var(--primary-navy); padding: 90px 20px 80px; text-align: center; }
  .iwj-ajwg-hero-inner { max-width: 780px; margin: 0 auto; }
  .iwj-ajwg-hero .iwj-ajwg-eyebrow { justify-content: center; }
  .iwj-ajwg-hero h1 { font-size: 2.7rem; font-weight: 800; color: var(--bg-cream); line-height: 1.15; margin-bottom: 22px; letter-spacing: -0.5px; }
  .iwj-ajwg-hero p { font-size: 1.15rem; color: #C8D2E0; max-width: 640px; margin: 0 auto; }

  .iwj-ajwg-vision-section { max-width: 780px; margin: 0 auto; padding: 80px 20px; }
  .iwj-ajwg-vision-section h2 { font-size: 2rem; margin-bottom: 6px; }
  .iwj-ajwg-vision-quote { font-family: var(--font-heading); font-weight: 700; font-size: 1.4rem; color: var(--primary-green); border-left: 4px solid var(--accent-gold); padding-left: 20px; margin: 24px 0; }
  .iwj-ajwg-vision-section p { font-size: 1.08rem; margin-bottom: 18px; }

  .iwj-ajwg-story-section { background: var(--bg-cream); padding: 80px 20px; }
  .iwj-ajwg-story-inner { max-width: 780px; margin: 0 auto; }
  .iwj-ajwg-story-section .iwj-ajwg-eyebrow { color: var(--earth-brown); }
  .iwj-ajwg-story-section h2 { font-size: 2rem; margin-bottom: 22px; }
  .iwj-ajwg-story-section p { font-size: 1.08rem; margin-bottom: 18px; }
  .iwj-ajwg-story-section strong { color: var(--primary-navy); }
  .iwj-ajwg-story-section a,
  .iwj-ajwg-story-section a:visited { color: var(--earth-brown); font-weight: 700; text-decoration: underline; text-underline-offset: 3px; }
  .iwj-ajwg-story-section a:hover,
  .iwj-ajwg-story-section a:focus,
  .iwj-ajwg-story-section a:active { color: var(--primary-navy); }
  .iwj-ajwg-story-section .iwj-ajwg-feature-list { margin: 6px 0 22px; padding: 0; }
  .iwj-ajwg-story-section .iwj-ajwg-feature-list li { font-size: 1.05rem; line-height: 1.65; }

  .iwj-ajwg-pillars-section { background: var(--primary-navy); padding: 90px 20px; }
  .iwj-ajwg-pillars-inner { max-width: 1150px; margin: 0 auto; }
  .iwj-ajwg-pillars-inner > h2 { color: var(--bg-cream); font-size: 2rem; text-align: center; margin-bottom: 50px; }
  .iwj-ajwg-pillars-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; background: rgba(201,160,82,0.15); }
  .iwj-ajwg-pillar-card { background: var(--primary-navy); padding: 36px 30px; }
  .iwj-ajwg-pillar-num { font-family: var(--font-heading); font-size: 2.4rem; font-weight: 800; color: rgba(201,160,82,0.3); margin-bottom: 14px; }
  .iwj-ajwg-pillar-card h3 { color: var(--bg-cream); font-size: 1.25rem; margin-bottom: 6px; }
  .iwj-ajwg-pillar-pronounce { font-size: 0.85rem; color: var(--accent-teal); font-style: italic; margin-bottom: 14px; display: block; }
  .iwj-ajwg-pillar-card p { color: #B7C4DA; font-size: 0.92rem; }

  .iwj-ajwg-promise-section { background: var(--bg-cream); padding: 80px 20px; text-align: center; }
  .iwj-ajwg-promise-inner { max-width: 780px; margin: 0 auto; }
  .iwj-ajwg-promise-inner p { font-family: var(--font-heading); font-weight: 700; font-size: 1.3rem; color: var(--primary-navy); line-height: 1.5; }
  .iwj-ajwg-promise-inner p strong { color: var(--primary-green); }

  .iwj-ajwg-content-block { padding: 80px 20px; }
  .iwj-ajwg-content-block.iwj-ajwg-cream { background: var(--bg-cream); }
  .iwj-ajwg-content-block.iwj-ajwg-white { background: var(--white); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); }
  .iwj-ajwg-content-inner { max-width: 900px; margin: 0 auto; }
  .iwj-ajwg-content-inner h2 { font-size: 2rem; margin-bottom: 8px; }
  .iwj-ajwg-content-locations { font-family: var(--font-heading); font-size: 0.85rem; font-weight: 700; color: var(--earth-brown); margin: 16px 0 20px; }
  .iwj-ajwg-content-inner > p.iwj-ajwg-lead { font-size: 1.08rem; margin-bottom: 26px; max-width: 680px; }
  .iwj-ajwg-feature-list { list-style: none; }
  .iwj-ajwg-feature-list li { padding: 14px 0; border-bottom: 1px dashed var(--border-light); display: flex; gap: 12px; font-size: 0.98rem; color: var(--text-muted); }
  .iwj-ajwg-feature-list li:last-child { border-bottom: none; }
  .iwj-ajwg-feature-list li::before { content: "\25B8"; color: var(--accent-gold); font-weight: 700; flex-shrink: 0; }
  .iwj-ajwg-feature-list li strong { color: var(--primary-navy); }

  .iwj-ajwg-community-intro { background: var(--primary-green); padding: 90px 20px; }
  .iwj-ajwg-community-intro-inner { max-width: 780px; margin: 0 auto; }
  .iwj-ajwg-community-intro-inner .iwj-ajwg-eyebrow { color: var(--accent-gold); }
  .iwj-ajwg-community-intro-inner h2 { color: var(--bg-cream); font-size: 2.1rem; margin-bottom: 20px; }
  .iwj-ajwg-community-intro-inner p { color: #CFE0D4; font-size: 1.08rem; margin-bottom: 16px; }
  .iwj-ajwg-community-intro-inner p strong { color: var(--bg-cream); }

  .iwj-ajwg-community-cards-section { background: var(--white); padding: 80px 20px; }
  .iwj-ajwg-community-cards-inner { max-width: 1150px; margin: 0 auto; }
  .iwj-ajwg-community-cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
  .iwj-ajwg-community-card { background: var(--bg-cream); border-radius: 10px; padding: 28px 26px; border-top: 4px solid var(--primary-green); }
  .iwj-ajwg-community-card:nth-child(2) { border-top-color: var(--accent-gold); }
  .iwj-ajwg-community-card:nth-child(3) { border-top-color: var(--accent-teal); }
  .iwj-ajwg-card-tag { font-family: var(--font-heading); font-size: 0.68rem; font-weight: 700; letter-spacing: 1.4px; text-transform: uppercase; color: var(--primary-green); margin-bottom: 10px; display: block; }
  .iwj-ajwg-community-card:nth-child(2) .iwj-ajwg-card-tag { color: var(--earth-brown); }
  .iwj-ajwg-community-card:nth-child(3) .iwj-ajwg-card-tag { color: var(--accent-teal); }
  .iwj-ajwg-community-card h3 { font-size: 1.1rem; margin-bottom: 10px; }
  .iwj-ajwg-community-card p.iwj-ajwg-desc { font-size: 0.92rem; margin-bottom: 16px; }
  .iwj-ajwg-community-card ul { list-style: none; }
  .iwj-ajwg-community-card ul li { font-size: 0.85rem; color: var(--text-muted); padding: 5px 0; padding-left: 16px; position: relative; }
  .iwj-ajwg-community-card ul li::before { content: "\2014"; position: absolute; left: 0; color: var(--accent-gold); }

  .iwj-ajwg-quote-stats-section { background: var(--primary-navy); padding: 80px 20px; }
  .iwj-ajwg-quote-stats-inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .iwj-ajwg-quote-block p { font-family: var(--font-heading); font-style: italic; font-size: 1.25rem; color: var(--bg-cream); line-height: 1.55; margin-bottom: 16px; }
  .iwj-ajwg-quote-block span { font-size: 0.78rem; font-weight: 700; letter-spacing: 1.4px; text-transform: uppercase; color: var(--accent-gold); }
  .iwj-ajwg-stats-block { display: flex; flex-direction: column; gap: 18px; }
  .iwj-ajwg-stat-row { display: flex; align-items: center; gap: 20px; background: rgba(255,255,255,0.05); padding: 18px 20px; border-radius: 8px; }
  .iwj-ajwg-stat-num { font-family: var(--font-heading); font-weight: 800; font-size: 1.5rem; color: var(--accent-gold); min-width: 64px; }
  .iwj-ajwg-stat-label { font-size: 0.9rem; color: #B7C4DA; }

  .iwj-ajwg-final-cta { max-width: 700px; margin: 0 auto; padding: 90px 20px; text-align: center; }
  .iwj-ajwg-final-cta h2 { font-size: 2rem; margin-bottom: 16px; }
  .iwj-ajwg-final-cta p { font-size: 1.05rem; margin-bottom: 30px; }

  .iwj-ajwg-newsletter-form { display: flex; gap: 12px; max-width: 460px; margin: 0 auto; }
  .iwj-ajwg-newsletter-form input {
    flex: 1; padding: 15px 16px; border-radius: 6px; border: 1px solid var(--border-light);
    font-family: var(--font-body); font-size: 1rem; background: var(--white); color: var(--text-main);
  }
  .iwj-ajwg-newsletter-form .iwj-ajwg-btn { white-space: nowrap; }
  .iwj-ajwg-newsletter-status { min-height: 1.4em; font-size: 0.9rem; color: var(--accent-gold); margin-top: 14px; }

  .iwj-ajwg-substack-row {
    margin-top: 40px; padding-top: 30px; border-top: 1px solid var(--border-light);
    display: flex; align-items: center; justify-content: center; gap: 16px; flex-wrap: wrap;
  }
  .iwj-ajwg-substack-row span { font-size: 0.95rem; color: var(--text-muted); }
  .iwj-ajwg-btn-outline { background: transparent; color: var(--primary-navy); border: 2px solid var(--primary-navy); }
  .iwj-ajwg-btn-outline:hover { background: var(--white); }

  @media (max-width: 480px) {
    .iwj-ajwg-newsletter-form { flex-direction: column; }
  }
  @media (max-width: 900px) {
    .iwj-ajwg-hero h1 { font-size: 2.1rem; }
    .iwj-ajwg-pillars-grid { grid-template-columns: 1fr; }
    .iwj-ajwg-community-cards-grid { grid-template-columns: 1fr; }
    .iwj-ajwg-quote-stats-inner { grid-template-columns: 1fr; }
  }
  @media (prefers-reduced-motion: reduce) {
    .iwj-ajwg-btn { transition: none; }
  }
</style>

<div class="iwj-ajwg-page">

  <section class="iwj-ajwg-hero">
    <div class="iwj-ajwg-hero-inner">
      <div class="iwj-ajwg-eyebrow" style="display:flex;justify-content:center;align-items:center;gap:10px;">About JWG &middot; The Journey</div>
      <h1>Your Roadmap to Wellness, Connection, &amp; Care</h1>
      <p>A comprehensive, three-tiered ecosystem: Education, Advocacy, and Experiences. Whether navigating daily life transitions or planning a major medical journey, supporting a family member or friend, our platform supports you every step of the way.</p>
    </div>
  </section>

  <section class="iwj-ajwg-story-section">
    <div class="iwj-ajwg-story-inner">
      <div class="iwj-ajwg-eyebrow">The JourneyWell Story</div>
      <h2>Two Gaps, One Answer</h2>
      <p>JourneyWell Global began in October 2025 with two realizations that wouldn't let go.</p>
      <p><strong>The first came from the work.</strong> After nearly 20 years in public health, Andrea learned that new mothers in many other countries have access to dedicated postpartum care centers, a level of support that barely exists in the United States. That gap led her into the world of medical travel, where she found another one: people who want safe, affordable care abroad, but have no one to help them plan it, vet it, or feel confident doing it.</p>
      <p><strong>The second came from home.</strong> When menopause arrived suddenly, a year before Andrea and LaDon's wedding, it reshaped their relationship, and they found almost no support built for both of them. Sitting at her grandmother's kitchen table, Andrea saw it clearly: big health transitions never happen to just one person. <a href="/our-story/">Read the full story</a></p>
      <p><strong>Two gaps, one answer.</strong> Andrea and LaDon set out to build the safety net they couldn't find: a place that helps people understand their health, speak up for themselves, and find care and healing wherever it lives, at home or around the world.</p>
      <p><strong>Why "JourneyWell"?</strong> As the vision took shape, one phrase kept coming back: the journey to wellness. Healing isn't a single appointment or a finish line. It's a road, and no one should have to walk it alone or unprepared.</p>
      <p><strong>One family, three paths.</strong> JourneyWell Global is the parent company, and its work lives in three brands:</p>
      <ul class="iwj-ajwg-feature-list">
        <li><span><strong>Iwosan Journeys.</strong> Iwosan (ee-woh-sahn) is a Yoruba word meaning healing, cure, or restoration to health. This brand is for advocacy, health education, and healing experiences.</span></li>
        <li><span><strong>MenoWell</strong>, for menopause education and support, for women and everyone who walks beside them.</span></li>
        <li><span><strong>Checked Bags &amp; Good Vibes</strong>, for group travel that brings people together to rest and reconnect.</span></li>
      </ul>
      <p>Each brand serves a different part of the journey. Together, they share one belief: health is a right, not a privilege, and everyone deserves to navigate it with dignity and a clear plan.</p>
    </div>
  </section>

  <section class="iwj-ajwg-vision-section">
    <div class="iwj-ajwg-eyebrow">The Vision Behind JourneyWell</div>
    <h2>Health Sovereignty Is a Universal Right</h2>
    <p class="iwj-ajwg-vision-quote">"As this ecosystem was taking shape, one phrase kept repeating in my mind: The journey to wellness."</p>
    <p>We believe that health sovereignty is a universal human right. No matter your race, sexual orientation, gender identity, or socio-economic standing, you deserve access to a healthy life and a smooth, supported road on your healing journey. Wellness is not a destination reserved for the privileged; it is an active, daily practice that everyone deserves to navigate with dignity.</p>
    <p>To bring this vision to life, we built JourneyWell Global &mdash; a comprehensive ecosystem resting on three distinct pillars, each designed to help you build a sovereign plan for a healthy life.</p>
  </section>

  <section class="iwj-ajwg-pillars-section">
    <div class="iwj-ajwg-pillars-inner">
      <h2>Three Pillars, One Ecosystem</h2>
      <div class="iwj-ajwg-pillars-grid">
        <div class="iwj-ajwg-pillar-card">
          <div class="iwj-ajwg-pillar-num">01</div>
          <h3>Iwosan Journeys</h3>
          <span class="iwj-ajwg-pillar-pronounce">Pronounced: ee-WOH-sahn &mdash; Yoruba for "healing" or "cure"</span>
          <p>Our flagship advocacy hub. Here, we equip patients and their loved ones with survival-grade tools, interactive symptom translators, and medical briefing builders to dismantle clinical bias and demand the healing they deserve. Because health sovereignty should not be limited by borders, Iwosan also serves as your guide to medical tourism &mdash; providing the research, frameworks, and advocacy necessary to safely access high-quality international healthcare when the local system falls short.</p>
        </div>
        <div class="iwj-ajwg-pillar-card">
          <div class="iwj-ajwg-pillar-num">02</div>
          <h3>MenoWell</h3>
          <span class="iwj-ajwg-pillar-pronounce">The Transition Arm</span>
          <p>Our specialized sanctuary for navigating the hormonal shifts of perimenopause and menopause. We recognize this transition does not happen in a vacuum, and it does not only happen to cisgender women. MenoWell is designed for everyone impacted by the change &mdash; the women experiencing it, the transgender men and gender-diverse individuals navigating it, and the partners, families, and friends who support them. We provide the data, the community, and the strategies to reclaim your rhythm together.</p>
        </div>
        <div class="iwj-ajwg-pillar-card">
          <div class="iwj-ajwg-pillar-num">03</div>
          <h3>Checked Bags and Good Vibes</h3>
          <span class="iwj-ajwg-pillar-pronounce">The Experiential &amp; Logistics Arm</span>
          <p>Healing doesn't only happen in clinics; it happens in community, in rest, and in new environments. This is our experiential travel and connection hub &mdash; your one-stop destination to find, plan, or join restorative wellness trips around the world. For clients utilizing medical tourism, this is our dedicated logistics engine, coordinating flights, seamless travel, and post-procedure recovery accommodations. It's also the central registration portal for all JourneyWell retreats, live summits, and conferences.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="iwj-ajwg-promise-section">
    <div class="iwj-ajwg-promise-inner">
      <div class="iwj-ajwg-eyebrow" style="justify-content:center;display:flex;">The JourneyWell Promise</div>
      <p>Through these three arms &mdash; <strong>advocacy and medical tourism, specialized transition care, and experiential travel</strong> &mdash; we are changing the way people move through the medical system and the world. We build advocates, we nurture transitions, and we travel toward healing.</p>
    </div>
  </section>

  <section class="iwj-ajwg-content-block iwj-ajwg-cream">
    <div class="iwj-ajwg-content-inner">
      <div class="iwj-ajwg-eyebrow">Education &middot; Coming Late 2027</div>
      <h2>A Private Community</h2>
      <p class="iwj-ajwg-lead">A gated, secure member portal &mdash; your judgment-free zone for peer support and private connection. Healing happens in community. Our upcoming platform will provide a safe, private space to ask the hard questions and share your story without judgment.</p>
      <ul class="iwj-ajwg-feature-list">
        <li><strong>Dedicated Support Spaces:</strong>&nbsp;Specialized channels for men's health, mental wellness, and medical travel prep. Menopause support is housed at our flagship platform, MenoWell, launching July 2026.</li>
        <li><strong>Expert Access:</strong>&nbsp;Exclusive Q&amp;A sessions with our vetted network of wellness and travel professionals.</li>
        <li><strong>JourneyWell App (Jan 1, 2028):</strong>&nbsp;Symptom tracking, recovery hubs, partner-sync capabilities, and a digital pre-appointment builder right in your pocket.</li>
      </ul>
    </div>
  </section>

  <section class="iwj-ajwg-content-block iwj-ajwg-white">
    <div class="iwj-ajwg-content-inner">
      <div class="iwj-ajwg-eyebrow">Experiences</div>
      <h2>Live Events &amp; Mini-Conferences</h2>
      <p class="iwj-ajwg-content-locations">Upcoming Locations: Cleveland, OH and St. Petersburg Beach, FL</p>
      <p class="iwj-ajwg-lead">High-energy, educational gatherings where the community comes together to learn, connect, and advocate.</p>
      <ul class="iwj-ajwg-feature-list">
        <li><strong>Expert Panels:</strong>&nbsp;Insights from specialists in hormone health, mental wellness, and global medical tourism.</li>
        <li><strong>Self-Advocacy Workshops:</strong>&nbsp;The exact tools and frameworks you need to navigate healthcare systems and demand the right care.</li>
        <li><strong>Real Networking:</strong>&nbsp;Meet your digital community face-to-face and build a lasting local support system.</li>
        <li><strong>Online Registration:</strong>&nbsp;Secure your spot directly through the JWG platform, launching Fall 2026.</li>
      </ul>
    </div>
  </section>

  <section class="iwj-ajwg-content-block iwj-ajwg-cream">
    <div class="iwj-ajwg-content-inner">
      <div class="iwj-ajwg-eyebrow">Experiences</div>
      <h2>Medical Travel &amp; Curated Retreats</h2>
      <p class="iwj-ajwg-content-locations">Wellness Retreat Destinations: Ghana, Barbados, St. Lucia, Key West (FL), Tennessee<br>Medical Travel Hubs: Thailand, Mexico, Malaysia, and Beyond</p>
      <p class="iwj-ajwg-lead">Intentional getaways designed for rest, recovery, and cultural immersion. We go wherever you need to go to heal.</p>
      <ul class="iwj-ajwg-feature-list">
        <li><strong>Curated Wellness Retreats:</strong>&nbsp;Intimate, culturally immersive getaways designed for profound rest and burnout recovery.</li>
        <li><strong>Supported Medical Tourism:</strong>&nbsp;Trusted intermediary services offering logistics, hospitality, and advocacy at JCI-accredited facilities worldwide.</li>
        <li><strong>1-on-1 Coordination:</strong>&nbsp;Private medical travel planning for those ready to pursue care on their own timeline.</li>
        <li><strong>Holistic Recovery:</strong>&nbsp;We support your complete recovery journey, ensuring a seamless transition back home.</li>
      </ul>
    </div>
  </section>

  <section class="iwj-ajwg-content-block iwj-ajwg-white">
    <div class="iwj-ajwg-content-inner">
      <div class="iwj-ajwg-eyebrow">Education</div>
      <h2>The JWG Academy</h2>
      <p class="iwj-ajwg-content-locations">Launching Fall 2026</p>
      <p class="iwj-ajwg-lead">Step-by-step digital education. Knowledge is the foundation of self-advocacy.</p>
      <ul class="iwj-ajwg-feature-list">
        <li><strong>Interactive Assessments:</strong>&nbsp;Quizzes designed to help you understand your symptoms, evaluate medical travel eligibility, and determine your next right steps.</li>
        <li><strong>Deep-Dive Modules:</strong>&nbsp;Comprehensive courses on medical travel prep, everyday vitality, and burnout recovery.</li>
        <li><strong>Physical Tools:</strong>&nbsp;Printable Patient Power Packs and the 90-Day Lifestyle Wellness Journal.</li>
        <li><strong>App Integration (2027):</strong>&nbsp;All course content will sync seamlessly to the JourneyWell app upon launch.</li>
      </ul>
    </div>
  </section>

  <section class="iwj-ajwg-community-intro">
    <div class="iwj-ajwg-community-intro-inner">
      <div class="iwj-ajwg-eyebrow">Community Reach</div>
      <h2>Wellness for Everyone &mdash; Regardless of Resources</h2>
      <p>We have seen firsthand how cost, lack of access, and cultural barriers cause people &mdash; <strong>especially Black women and their families</strong> &mdash; to suffer in silence.</p>
      <p>That is why JourneyWell Global is committed to bringing wellness directly into underserved communities through accessible, low-barrier, and culturally responsive programming. <strong>No premium membership, expensive retreat fee, or medical background is required.</strong></p>
      <p>This is not charity, it is equity. And it is at the heart of everything we do.</p>
    </div>
  </section>

  <section class="iwj-ajwg-community-cards-section">
    <div class="iwj-ajwg-community-cards-inner">
      <div class="iwj-ajwg-community-cards-grid">
        <div class="iwj-ajwg-community-card">
          <span class="iwj-ajwg-card-tag">Experiences</span>
          <h3>1-Day Community Retreats</h3>
          <p class="iwj-ajwg-desc">Locally hosted, one-day healing experiences designed to give underserved communities a real taste of wellness, rest, and self-care &mdash; without the cost barrier.</p>
          <ul>
            <li>Hosted in community centers, houses of worship, and local event spaces</li>
            <li>Culturally curated programming honoring participants' heritage</li>
            <li>Guided movement, breathwork, and group reflection</li>
            <li>Takeaway tools, including Patient Power Packs and self-care guides</li>
            <li>Free or sliding-scale admission, funded through JWG partnerships</li>
          </ul>
        </div>
        <div class="iwj-ajwg-community-card">
          <span class="iwj-ajwg-card-tag">Education</span>
          <h3>Free Wellness Classes</h3>
          <p class="iwj-ajwg-desc">Short-format, high-impact sessions brought directly into neighborhoods, schools, clinics, and community organizations, delivered in plain, accessible language.</p>
          <ul>
            <li>Stress &amp; Burnout Relief: practical, daily tools</li>
            <li>Nutrition Basics: eating well on a real budget</li>
            <li>Movement &amp; Body Care: for all fitness levels</li>
            <li>Sleep Hygiene &amp; Mental Wellness: the fundamentals</li>
            <li>Menopause 101: breaking the silence in the community</li>
          </ul>
        </div>
        <div class="iwj-ajwg-community-card">
          <span class="iwj-ajwg-card-tag">Advocacy</span>
          <h3>Self-Help &amp; Advocacy Sessions</h3>
          <p class="iwj-ajwg-desc">Hands-on workshops teaching community members how to navigate the healthcare system using the same self-advocacy tools available to JWG members.</p>
          <ul>
            <li>Patient Power Pack walkthroughs</li>
            <li>Live "Symptom Translator" exercises in small groups</li>
            <li>"Interview Your Doctor" role-play practice</li>
            <li>Medical gaslighting: how to recognize it and respond</li>
            <li>Understanding your rights as a patient</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="iwj-ajwg-quote-stats-section">
    <div class="iwj-ajwg-quote-stats-inner">
      <div class="iwj-ajwg-quote-block">
        <p>"We refuse to build a wellness brand that only serves people who can already afford to be well. True healing has to be accessible &mdash; or it isn't healing, it's just luxury."</p>
        <span>&mdash; Andrea Peaten Headen, Founder</span>
      </div>
      <div class="iwj-ajwg-stats-block">
        <div class="iwj-ajwg-stat-row">
          <div class="iwj-ajwg-stat-num">Free</div>
          <div class="iwj-ajwg-stat-label">Admission for all community programming is funded through JWG partnerships and sponsorships.</div>
        </div>
        <div class="iwj-ajwg-stat-row">
          <div class="iwj-ajwg-stat-num">Local</div>
          <div class="iwj-ajwg-stat-label">Events are held in familiar, accessible community spaces &mdash; no travel required to benefit from JWG.</div>
        </div>
        <div class="iwj-ajwg-stat-row">
          <div class="iwj-ajwg-stat-num">Real</div>
          <div class="iwj-ajwg-stat-label">Culturally responsive programming that speaks to lived experience &mdash; not a one-size-fits-all approach.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="iwj-ajwg-final-cta" id="newsletter">
    <h2>Stay Close to the Journey</h2>
    <p>Get updates on new tools, live events, and everything coming next from JourneyWell Global &mdash; straight to your inbox.</p>

    <form id="jwg-newsletter-form" class="iwj-ajwg-newsletter-form">
      <input type="email" id="jwg-newsletter-email" placeholder="you@email.com" aria-label="Email address" required>
      <button type="submit" class="iwj-ajwg-btn iwj-ajwg-btn-primary">Subscribe for Updates</button>
    </form>
    <p id="jwg-newsletter-status" class="iwj-ajwg-newsletter-status" role="status" aria-live="polite"></p>

    <div class="iwj-ajwg-substack-row">
      <span>Prefer long-form reads?</span>
      <a href="https://iwosanjourneys.substack.com/" target="_blank" rel="noopener" class="iwj-ajwg-btn iwj-ajwg-btn-outline">Read Us on Substack</a>
    </div>
  </section>

</div>

<script>
(function () {
  var form = document.getElementById('jwg-newsletter-form');
  if (!form) { return; }
  var statusEl = document.getElementById('jwg-newsletter-status');
  var emailEl = document.getElementById('jwg-newsletter-email');
  var btn = form.querySelector('button[type="submit"]');
  var ENDPOINT = 'https://app.kit.com/forms/9372376/subscriptions'; // Shared MenoWell Kit form (confirmed decision, not a placeholder)
  var COLOR = { info: '#4A5568', ok: '#1C3A2A', err: '#B91C1C' };
  var busyNow = false;

  // Posts the way Kit's own embed does (Accept: application/json), shows Kit's security check
  // (the "guard") when Kit asks for it, and reports success ONLY when Kit confirms.
  function say(kind, text) {
    statusEl.style.color = COLOR[kind];
    statusEl.textContent = text;
  }
  function sayError() {
    statusEl.style.color = COLOR.err;
    statusEl.textContent = 'Something went wrong. Please try again, or email ';
    var a = document.createElement('a');
    a.href = 'mailto:info@journeywellglobal.com';
    a.textContent = 'info@journeywellglobal.com';
    a.style.cssText = 'color:#8B5E3C;font-weight:700;text-decoration:underline;';
    statusEl.appendChild(a);
    statusEl.appendChild(document.createTextNode('.'));
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var email = emailEl.value.trim();
    if (!email || busyNow) { return; }
    var btnText = btn ? btn.textContent : '';
    var overlay = null, frame = null, onMsg = null;

    function busy(on) {
      busyNow = on;
      emailEl.disabled = on;
      if (btn) { btn.disabled = on; btn.textContent = on ? 'Sending…' : btnText; }
    }
    function closeGuard() {
      if (onMsg) { window.removeEventListener('message', onMsg); onMsg = null; }
      if (overlay && overlay.parentNode) { overlay.parentNode.removeChild(overlay); }
      overlay = null;
      frame = null;
    }
    function fail() { closeGuard(); busy(false); sayError(); }
    function done() {
      closeGuard();
      busy(false);
      say('ok', "You're in — check your inbox to confirm.");
      form.reset();
    }
    function openGuard(url) {
      overlay = document.createElement('div');
      overlay.style.cssText = 'position:fixed;left:0;top:0;right:0;bottom:0;z-index:99999;background:rgba(10,31,68,0.6);display:flex;align-items:center;justify-content:center;padding:16px;';
      var box = document.createElement('div');
      box.setAttribute('role', 'dialog');
      box.setAttribute('aria-modal', 'true');
      box.setAttribute('aria-label', 'Security check');
      box.style.cssText = 'position:relative;background:#fff;border-radius:10px;max-width:100%;max-height:100%;overflow:auto;box-shadow:0 10px 40px rgba(0,0,0,0.3);';
      var close = document.createElement('button');
      close.type = 'button';
      close.setAttribute('aria-label', 'Close');
      close.textContent = '×';
      close.style.cssText = 'position:absolute;right:6px;top:4px;z-index:2;width:44px;height:44px;border:none;background:transparent;font-size:28px;line-height:1;cursor:pointer;color:#0A1F44;';
      close.onclick = function () { fail(); };
      frame = document.createElement('iframe');
      frame.src = url;
      frame.title = 'Security check';
      frame.style.cssText = 'display:block;border:0;width:min(420px,92vw);height:300px;max-width:100%;';
      box.appendChild(close);
      box.appendChild(frame);
      overlay.appendChild(box);
      document.body.appendChild(overlay);
      onMsg = function (ev) {
        if (!frame || ev.source !== frame.contentWindow || !ev.data) { return; }
        if (ev.data.name === 'ckjs:guard:size' && ev.data.height) {
          frame.style.height = Math.min(ev.data.height, window.innerHeight - 40) + 'px';
          if (ev.data.width) { frame.style.width = Math.min(ev.data.width, window.innerWidth - 32) + 'px'; }
        }
        if (ev.data.name === 'ckjs:guard:confirmed') { done(); }
      };
      window.addEventListener('message', onMsg);
      close.focus();
    }

    busy(true);
    say('info', 'Submitting…');
    var fd = new FormData();
    fd.append('email_address', email);
    fd.append('referrer', document.referrer || '');
    fd.append('host', window.location.href);
    fd.append('search', window.location.search);
    fd.append('ckjs_version', '6');
    fetch(ENDPOINT, { method: 'POST', body: fd, headers: { 'Accept': 'application/json' } })
      .then(function (r) { if (!r.ok) { throw new Error('HTTP ' + r.status); } return r.json(); })
      .then(function (d) {
        if (d && d.status === 'success') { done(); }
        else if (d && d.status === 'quarantined' && typeof d.url === 'string' && /^https:\/\/([a-z0-9-]+\.)?kit\.com\//.test(d.url)) { openGuard(d.url); }
        else { fail(); }
      })
      .catch(function () { fail(); });
  });
})();
</script>

<?php iwosan_back_button( 'bottom' ); get_footer(); ?>
