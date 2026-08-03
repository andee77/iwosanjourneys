<?php
/**
 * Template Name: Iwosan Patient Power Pack — Clinical Briefing Builder
 * Description: Custom coded Patient Power Pack "Clinical Briefing Builder" child page — landing copy + embedded interactive tool, for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Clinical Briefing Builder</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     PATIENT POWER PACK — CLINICAL BRIEFING BUILDER
     Landing copy + embedded 4-step interactive tool (Making the Plan pattern)
     ============================================ -->
<style>
  .iwj-bb-page :root,
  .iwj-bb-page {
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
  }
  .iwj-bb-page { font-family: var(--font-body); color: var(--text-main); line-height: 1.65; }
  .iwj-bb-page * { box-sizing: border-box; }
  .iwj-bb-page h1, .iwj-bb-page h2, .iwj-bb-page h3, .iwj-bb-page h4 { font-family: var(--font-heading); color: var(--primary-navy); }
  .iwj-bb-page a:focus-visible, .iwj-bb-page button:focus-visible { outline: 3px solid var(--accent-teal); outline-offset: 3px; }

  .iwj-bb-breadcrumb { max-width: 1100px; margin: 0 auto; padding: 24px 20px 0; }
  .iwj-bb-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; }
  .iwj-bb-breadcrumb a:hover { color: var(--accent-teal); }

  /* HERO */
  .iwj-bb-hero {
    max-width: 1100px; margin: 0 auto; padding: 60px 20px 80px;
    display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center;
  }
  .iwj-bb-hero-eyebrow { font-family: var(--font-heading); font-size: 0.8rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--accent-teal); margin-bottom: 16px; }
  .iwj-bb-hero h1 { font-size: 2.6rem; font-weight: 800; line-height: 1.15; margin-bottom: 20px; letter-spacing: -0.5px; }
  .iwj-bb-hero .iwj-bb-sub { font-size: 1.15rem; color: var(--text-muted); margin-bottom: 30px; max-width: 480px; }
  .iwj-bb-btn { display: inline-block; padding: 16px 30px; border-radius: 6px; font-family: var(--font-heading); font-weight: 700; text-decoration: none; border: none; cursor: pointer; transition: background 0.2s, transform 0.15s; font-size: 1rem; }
  .iwj-bb-btn-primary { background-color: var(--primary-navy); color: var(--white); }
  .iwj-bb-btn-primary:hover { background-color: var(--accent-teal); transform: translateY(-1px); }

  /* SIGNATURE: live document mockup */
  .iwj-bb-doc-mockup {
    background: var(--white); border-radius: 10px; box-shadow: 0 20px 45px rgba(10,31,68,0.12);
    border: 1px solid var(--border-light); padding: 28px 26px; position: relative;
    transform: rotate(1.2deg);
  }
  .iwj-bb-doc-mockup::before {
    content: "GENERATED IN 90 SECONDS";
    position: absolute; top: -13px; left: 26px; background: var(--accent-teal); color: var(--white);
    font-family: var(--font-heading); font-size: 0.65rem; font-weight: 700; letter-spacing: 1px;
    padding: 5px 12px; border-radius: 4px;
  }
  .iwj-bb-doc-header { display: flex; justify-content: space-between; align-items: baseline; border-bottom: 2px solid var(--primary-navy); padding-bottom: 10px; margin-bottom: 14px; }
  .iwj-bb-doc-header h3 { font-size: 1rem; text-transform: uppercase; letter-spacing: 0.5px; }
  .iwj-bb-doc-header span { font-size: 0.75rem; color: var(--text-muted); font-family: var(--font-heading); }
  .iwj-bb-doc-row { display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 8px; color: var(--text-muted); }
  .iwj-bb-doc-row strong { color: var(--text-main); }
  .iwj-bb-doc-tag { display: inline-block; font-family: var(--font-heading); font-size: 0.7rem; font-weight: 700; background: rgba(77,174,175,0.14); color: var(--accent-teal); padding: 3px 9px; border-radius: 20px; margin: 12px 0 10px; }
  .iwj-bb-doc-flags { list-style: none; margin-top: 6px; }
  .iwj-bb-doc-flags li { font-size: 0.85rem; padding: 6px 0; border-bottom: 1px dashed var(--border-light); display: flex; gap: 8px; }
  .iwj-bb-doc-flags li::before { content: "▸"; color: var(--accent-teal); font-weight: 700; }
  .iwj-bb-doc-footer-note { font-size: 0.7rem; color: var(--text-muted); margin-top: 14px; font-style: italic; }

  /* HOOK SECTION */
  .iwj-bb-hook-section { max-width: 760px; margin: 0 auto; padding: 20px 20px 70px; text-align: left; }
  .iwj-bb-hook-section p { font-size: 1.1rem; color: var(--text-muted); margin-bottom: 18px; }
  .iwj-bb-hook-section p.iwj-bb-callout { font-family: var(--font-heading); font-weight: 700; color: var(--primary-navy); font-size: 1.3rem; margin: 30px 0; padding-left: 20px; border-left: 4px solid var(--accent-gold); }

  /* HOW IT WORKS */
  .iwj-bb-how-section { background: var(--primary-navy); padding: 80px 20px; }
  .iwj-bb-how-inner { max-width: 1100px; margin: 0 auto; }
  .iwj-bb-how-inner h2 { color: var(--bg-cream); font-size: 2rem; margin-bottom: 12px; text-align: center; }
  .iwj-bb-how-inner .iwj-bb-how-sub { color: #B7C4DA; text-align: center; max-width: 560px; margin: 0 auto 50px; font-size: 1.05rem; }
  .iwj-bb-steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
  .iwj-bb-step { position: relative; padding-top: 10px; }
  .iwj-bb-step-num { font-family: var(--font-heading); font-size: 3rem; font-weight: 800; color: var(--accent-teal); opacity: 0.5; line-height: 1; margin-bottom: 10px; }
  .iwj-bb-step h3 { color: var(--bg-cream); font-size: 1.25rem; margin-bottom: 10px; }
  .iwj-bb-step p { color: #B7C4DA; font-size: 0.95rem; }

  /* TOOL SECTION HEADING */
  .iwj-bb-tool-lead-in { max-width: 900px; margin: 0 auto; padding: 70px 20px 0; text-align: center; }
  .iwj-bb-tool-lead-in h2 { font-size: 1.9rem; margin-bottom: 10px; }
  .iwj-bb-tool-lead-in p { color: var(--text-muted); font-size: 1.05rem; }

  /* FINAL CTA */
  .iwj-bb-final-cta { max-width: 700px; margin: 0 auto; padding: 80px 20px; text-align: center; }
  .iwj-bb-final-cta h2 { font-size: 1.9rem; margin-bottom: 16px; }
  .iwj-bb-final-cta p { color: var(--text-muted); margin-bottom: 30px; font-size: 1.05rem; }
  .iwj-bb-disclaimer-note { font-size: 0.8rem; color: var(--text-muted); margin-top: 20px; }
  .iwj-bb-disclaimer-note a { color: var(--accent-teal); }

  @media (max-width: 860px) {
    .iwj-bb-hero { grid-template-columns: 1fr; padding-top: 30px; }
    .iwj-bb-hero h1 { font-size: 2rem; }
    .iwj-bb-doc-mockup { transform: none; }
    .iwj-bb-steps { grid-template-columns: 1fr; }
  }
  @media (prefers-reduced-motion: reduce) {
    .iwj-bb-btn { transition: none; }
  }

  /* ============================================
     EMBEDDED TOOL (from briefing_builder_tool.html)
     ============================================ */
  .iwj-bbtool-container { max-width: 900px; margin: 40px auto; padding: 0 20px 60px; }

  .iwj-bbtool-step { background: var(--white); border-radius: 12px; box-shadow: 0 10px 25px rgba(10, 31, 68, 0.05); border: 1px solid var(--border-light); border-top: 5px solid var(--accent-gold); padding: 40px; display: none; }
  .iwj-bbtool-step.active { display: block; animation: iwjBbFadeIn 0.4s ease-in-out; }
  @keyframes iwjBbFadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

  .iwj-bbtool-step-header { margin-bottom: 30px; text-align: center; }
  .iwj-bbtool-step-header h2 { font-size: 1.8rem; margin-bottom: 10px; }
  .iwj-bbtool-step-header p { color: var(--text-muted); }

  .iwj-bbtool-instruction-banner { background-color: rgba(201, 160, 82, 0.1); border-left: 4px solid var(--accent-gold); padding: 20px; margin-bottom: 30px; border-radius: 0 8px 8px 0; }
  .iwj-bbtool-instruction-banner h4 { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; color: var(--earth-brown); }
  .iwj-bbtool-instruction-banner ul { margin-left: 20px; font-size: 0.95rem; color: var(--text-main); }
  .iwj-bbtool-instruction-banner li { margin-bottom: 6px; }

  .iwj-bbtool-grid-options { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px; }
  .iwj-bbtool-option-card { border: 2px solid var(--border-light); border-radius: 8px; padding: 20px; cursor: pointer; transition: all 0.2s ease; text-align: center; }
  .iwj-bbtool-option-card:hover { border-color: var(--primary-navy); background-color: #F8FAFC; }
  .iwj-bbtool-option-card.selected { border-color: var(--primary-green); background-color: rgba(28, 58, 42, 0.05); box-shadow: 0 0 0 1px var(--primary-green); }
  .iwj-bbtool-option-card h3 { font-size: 1.2rem; margin-bottom: 10px; }
  .iwj-bbtool-option-card p { font-size: 0.9rem; color: var(--text-muted); }

  .iwj-bbtool-form-group { margin-bottom: 25px; }
  .iwj-bbtool-form-group label { display: block; font-family: var(--font-heading); font-weight: 600; margin-bottom: 8px; color: var(--primary-navy); font-size: 0.95rem; }
  .iwj-bbtool-form-group input, .iwj-bbtool-form-group textarea { width: 100%; padding: 12px 15px; border: 1px solid var(--border-light); border-radius: 6px; font-family: var(--font-body); font-size: 1rem; transition: border-color 0.2s ease; }
  .iwj-bbtool-form-group input::placeholder, .iwj-bbtool-form-group textarea::placeholder { color: #A0AEC0; font-size: 0.9rem; }
  .iwj-bbtool-form-group input:focus, .iwj-bbtool-form-group textarea:focus { outline: none; border-color: var(--accent-teal); box-shadow: 0 0 0 3px rgba(77, 174, 175, 0.1); }
  .iwj-bbtool-form-group textarea { resize: vertical; min-height: 100px; }
  .iwj-bbtool-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }

  .iwj-bbtool-vaccine-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 12px; margin-top: 10px; padding: 15px; background: #F8FAFC; border: 1px solid var(--border-light); border-radius: 6px; }
  .iwj-bbtool-vaccine-grid label { display: flex; align-items: center; font-family: var(--font-body); font-weight: 500; font-size: 0.9rem; color: var(--primary-navy); cursor: pointer; margin-bottom: 0; }
  .iwj-bbtool-vaccine-grid input[type="checkbox"] { width: auto; margin-right: 10px; accent-color: var(--primary-green); cursor: pointer; transform: scale(1.2); }

  .iwj-bbtool-actions { display: flex; justify-content: space-between; margin-top: 40px; border-top: 1px solid var(--border-light); padding-top: 20px; }
  .iwj-bbtool-btn { padding: 12px 24px; border-radius: 6px; font-family: var(--font-heading); font-weight: 600; cursor: pointer; border: none; transition: all 0.2s ease; }
  .iwj-bbtool-btn-outline { background: transparent; border: 2px solid var(--border-light); color: var(--text-muted); }
  .iwj-bbtool-btn-outline:hover { border-color: var(--primary-navy); color: var(--primary-navy); }
  .iwj-bbtool-btn-primary { background: var(--primary-navy); color: var(--white); }
  .iwj-bbtool-btn-primary:hover { background: var(--primary-green); }

  #iwj-bbtool-print-view { display: none; background: white; padding: 40px; border-radius: 8px; margin-top: 30px; box-shadow: 0 4px 15px rgba(10, 31, 68, 0.05); border: 1px solid var(--border-light); }
  .iwj-bbtool-print-header { border-bottom: 3px solid var(--primary-navy); padding-bottom: 20px; margin-bottom: 20px; }
  .iwj-bbtool-print-section { margin-bottom: 25px; }
  .iwj-bbtool-print-section h3 { border-bottom: 1px solid var(--border-light); padding-bottom: 5px; margin-bottom: 15px; color: var(--primary-green); }
  .iwj-bbtool-data-row { display: flex; margin-bottom: 10px; }
  .iwj-bbtool-data-label { font-weight: bold; width: 200px; flex-shrink: 0; }
  .iwj-bbtool-data-value { color: #333; }

  .iwj-bbtool-message-box-overlay { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(10,31,68,0.5); display: none; align-items: center; justify-content: center; z-index: 1000; }
  .iwj-bbtool-message-box { background: white; padding: 30px; border-radius: 8px; max-width: 400px; text-align: center; }

  @media print {
    .iwj-bb-page > *:not(#iwj-bbtool-mount) { display: none !important; }
    body * { visibility: hidden; }
    #iwj-bbtool-print-view, #iwj-bbtool-print-view * { visibility: visible; }
    #iwj-bbtool-print-view { position: absolute; left: 0; top: 0; width: 100%; padding: 0; }
    .iwj-bbtool-actions { display: none !important; }
  }
  @media (max-width: 600px) {
    .iwj-bbtool-form-row { grid-template-columns: 1fr; }
    .iwj-bbtool-actions { flex-direction: column-reverse; gap: 15px; }
    .iwj-bbtool-btn { width: 100%; }
  }
</style>

<div class="iwj-bb-page">

  <div class="iwj-bb-breadcrumb"><a href="/patient-power-pack/">&larr; Back to the Patient Power Pack</a></div>

  <section class="iwj-bb-hero">
    <div>
      <div class="iwj-bb-hero-eyebrow">The Clinical Briefing Builder</div>
      <h1>Stop the &ldquo;10-Minute Clinic Panic.&rdquo; Control the Agenda.</h1>
      <p class="iwj-bb-sub">Doctors don't have time for your backstory. They need data. Use our interactive builder to generate a 1-page clinical briefing that forces providers to take you seriously.</p>
      <a href="#iwj-bbtool-mount" class="iwj-bb-btn iwj-bb-btn-primary">Build My Free Briefing</a>
    </div>
    <div class="iwj-bb-doc-mockup">
      <div class="iwj-bb-doc-header">
        <h3>Clinical Baseline Sheet</h3>
        <span>Universal Header</span>
      </div>
      <div class="iwj-bb-doc-row"><span>Demographic Module</span><strong>Women &mdash; Hormonal Bridging</strong></div>
      <div class="iwj-bb-doc-row"><span>Visit Type</span><strong>Acute Flare-Up</strong></div>
      <span class="iwj-bb-doc-tag">FLAGGED FOR DISCUSSION</span>
      <ul class="iwj-bb-doc-flags">
        <li>Cycle irregularity, 4 months</li>
        <li>Joint pain &mdash; possible autoimmune flag</li>
        <li>Systemic fatigue, non-anxiety pattern</li>
      </ul>
      <p class="iwj-bb-doc-footer-note">Tear-off: Post-Visit Referral &amp; Lab Code Tracker</p>
    </div>
  </section>

  <section class="iwj-bb-hook-section">
    <p>You know the feeling: You wait three months for an appointment, sit in the waiting room for an hour, and the second the doctor walks in, your mind goes blank. You leave with a generic prescription and zero answers.</p>
    <p class="iwj-bb-callout">Never walk into a consultation unprepared again.</p>
    <p>The Clinical Briefing Builder is a dynamic tool that takes your complex health history and formats it into the exact language doctors are trained to read. By handing this 1-page sheet to your provider the moment they walk in, you establish your sovereignty, set the baseline, and control the 10 minutes you are paying for.</p>
  </section>

  <section class="iwj-bb-how-section">
    <div class="iwj-bb-how-inner">
      <h2>What It Does</h2>
      <p class="iwj-bb-how-sub">Three steps, one printable page &mdash; built in the order your appointment actually unfolds.</p>
      <div class="iwj-bb-steps">
        <div class="iwj-bb-step">
          <div class="iwj-bb-step-num">01</div>
          <h3>Demographic Targeting</h3>
          <p>Loads the specific physiological baselines doctors need based on who you are &mdash; autoimmune markers for women, stamina flags for men, polypharmacy checks for elders.</p>
        </div>
        <div class="iwj-bb-step">
          <div class="iwj-bb-step-num">02</div>
          <h3>Visit Optimization</h3>
          <p>Tailors your briefing based on your goal: Annual Preventative, Acute Flare-Up, or Chronic Check-In.</p>
        </div>
        <div class="iwj-bb-step">
          <div class="iwj-bb-step-num">03</div>
          <h3>The Post-Visit Tracker</h3>
          <p>Includes a tear-off checklist to ensure referrals are sent and lab codes are documented before you leave the parking lot.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="iwj-bb-tool-lead-in" id="iwj-bbtool-mount">
    <h2>Build Your Briefing</h2>
    <p>Free, takes about 90 seconds, and prints straight from your browser.</p>
  </div>

  <!-- ============================================
       EMBEDDED TOOL (from briefing_builder_tool.html)
       ============================================ -->
  <div class="iwj-bbtool-container">

    <!-- STEP 1: DEMOGRAPHIC -->
    <div id="iwj-bbtool-step-1" class="iwj-bbtool-step active">
      <div class="iwj-bbtool-step-header">
        <h2>Who is this guide for?</h2>
        <p>Select the demographic to load the appropriate baseline clinical markers.</p>
      </div>

      <div class="iwj-bbtool-grid-options" id="iwj-bbtool-demo-options">
        <div class="iwj-bbtool-option-card" data-val="Men">
          <h3>Men</h3>
          <p>Cardiovascular risk, stamina &amp; silent markers.</p>
        </div>
        <div class="iwj-bbtool-option-card" data-val="Women">
          <h3>Women</h3>
          <p>Hormonal bridging, autoimmune &amp; cardiac defense.</p>
        </div>
        <div class="iwj-bbtool-option-card" data-val="Children (0-5)">
          <h3>Children (0-5)</h3>
          <p>Milestones, feeding &amp; immunity tracking.</p>
        </div>
        <div class="iwj-bbtool-option-card" data-val="Children (6-18)">
          <h3>Children (6-18)</h3>
          <p>Puberty, orthopedics &amp; mental health baselines.</p>
        </div>
        <div class="iwj-bbtool-option-card" data-val="Elders 65+">
          <h3>Elders 65+</h3>
          <p>Independence, polypharmacy &amp; mobility.</p>
        </div>
        <div class="iwj-bbtool-option-card" data-val="Transgender/Diverse">
          <h3>Transgender/Diverse</h3>
          <p>Affirming care &amp; organ-specific screening.</p>
        </div>
      </div>

      <div class="iwj-bbtool-actions" style="justify-content: flex-end;">
        <button class="iwj-bbtool-btn iwj-bbtool-btn-primary" onclick="iwjBbNextStep(2, 'demo')">Select Visit Type &rarr;</button>
      </div>
    </div>

    <!-- STEP 2: VISIT TYPE -->
    <div id="iwj-bbtool-step-2" class="iwj-bbtool-step">
      <div class="iwj-bbtool-step-header">
        <h2>What is the purpose of this visit?</h2>
        <p>This frames how your doctor will review your data.</p>
      </div>

      <div class="iwj-bbtool-grid-options" id="iwj-bbtool-visit-options">
        <div class="iwj-bbtool-option-card" data-val="The Annual Preventative">
          <h3>Annual Preventative</h3>
          <p>Establishing baselines, requesting labs &amp; screenings.</p>
        </div>
        <div class="iwj-bbtool-option-card" data-val="The Acute Flare-Up">
          <h3>Acute Flare-Up</h3>
          <p>Sudden symptoms. Focus on timeline &amp; intensity.</p>
        </div>
        <div class="iwj-bbtool-option-card" data-val="The Chronic Check-In">
          <h3>Chronic Check-In</h3>
          <p>Medication efficacy &amp; quality-of-life updates.</p>
        </div>
      </div>

      <div class="iwj-bbtool-actions">
        <button class="iwj-bbtool-btn iwj-bbtool-btn-outline" onclick="iwjBbPrevStep(1)">&larr; Back</button>
        <button class="iwj-bbtool-btn iwj-bbtool-btn-primary" onclick="iwjBbNextStep(3, 'visit')">Build My Form &rarr;</button>
      </div>
    </div>

    <!-- STEP 3: DYNAMIC FORM -->
    <div id="iwj-bbtool-step-3" class="iwj-bbtool-step">
      <div class="iwj-bbtool-step-header">
        <h2>Your Clinical Briefing</h2>
        <p>Fill out your specific baselines below to generate your printable sheet.</p>
      </div>

      <div class="iwj-bbtool-instruction-banner">
        <h4><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> How to Fill This Out Like a Pro</h4>
        <ul>
          <li><strong>Be Objective:</strong> Doctors look for data. Use numbers, timelines, and frequencies.</li>
          <li><strong>Focus on Function:</strong> Explain what you <em>cannot do</em> because of the symptom (e.g., "I cannot walk up my stairs without resting").</li>
          <li><strong>Keep it Concise:</strong> Use short sentences or bullet points. You will hand this paper to the doctor when they walk in.</li>
        </ul>
      </div>

      <div id="iwj-bbtool-dynamic-form-content">
        <h3 style="margin-bottom: 15px; color: var(--primary-green);">Universal Baseline</h3>
        <div class="iwj-bbtool-form-row">
          <div class="iwj-bbtool-form-group">
            <label>Patient Name</label>
            <input type="text" id="iwj-bbtool-f-name" placeholder="Legal/Preferred Name">
          </div>
          <div class="iwj-bbtool-form-group">
            <label>Date of Birth</label>
            <input type="date" id="iwj-bbtool-f-dob">
          </div>
        </div>
        <div class="iwj-bbtool-form-group">
          <label>Known Allergies (Medications/Environmental)</label>
          <input type="text" id="iwj-bbtool-f-allergies" placeholder="e.g., Penicillin (causes hives), Latex, None known">
        </div>
        <div class="iwj-bbtool-form-group">
          <label>Master Medication &amp; Supplement List</label>
          <textarea id="iwj-bbtool-f-meds" placeholder="e.g., Lisinopril (10mg, once daily for BP)&#10;Vitamin D3 (2000 IU, morning)&#10;Ibuprofen (As needed for joint pain)"></textarea>
        </div>

        <hr style="border: 0; border-top: 1px solid var(--border-light); margin: 30px 0;">

        <div id="iwj-bbtool-demographic-specific-fields"></div>

        <hr style="border: 0; border-top: 1px solid var(--border-light); margin: 30px 0;">

        <div id="iwj-bbtool-visit-specific-fields"></div>

        <hr style="border: 0; border-top: 1px solid var(--border-light); margin: 30px 0;">

        <div class="iwj-bbtool-form-group">
          <label>Additional Notes / Unlisted Concerns</label>
          <textarea id="iwj-bbtool-f-additional" placeholder="e.g., I also have a recurring rash on my arm, or I need a refill on my albuterol inhaler. Anything else the doctor should know?"></textarea>
        </div>
      </div>

      <div class="iwj-bbtool-actions">
        <button class="iwj-bbtool-btn iwj-bbtool-btn-outline" onclick="iwjBbPrevStep(2)">&larr; Back</button>
        <button class="iwj-bbtool-btn iwj-bbtool-btn-primary" onclick="iwjBbGenerateBriefing()">Generate Briefing (Print) &rarr;</button>
      </div>
    </div>

    <!-- STEP 4: PRINTABLE VIEW -->
    <div id="iwj-bbtool-step-4" class="iwj-bbtool-step">
      <div class="iwj-bbtool-step-header" id="iwj-bbtool-print-hide-header">
        <h2>Your Guide is Ready</h2>
        <p>Review your briefing below. Click print to generate your physical copy.</p>
        <button class="iwj-bbtool-btn iwj-bbtool-btn-primary" style="margin-top: 20px;" onclick="window.print()">&#128424; Print Document</button>
        <button class="iwj-bbtool-btn iwj-bbtool-btn-outline" style="margin-top: 20px; margin-left: 10px;" onclick="iwjBbPrevStep(3)">Edit Details</button>
      </div>

      <div id="iwj-bbtool-print-view">
        <div class="iwj-bbtool-print-header">
          <h1 style="font-size: 24px;">Patient Clinical Briefing</h1>
          <p><strong>Demographic:</strong> <span id="iwj-bbtool-p-demo"></span> | <strong>Visit Type:</strong> <span id="iwj-bbtool-p-visit"></span></p>
        </div>

        <div class="iwj-bbtool-print-section">
          <h3>Universal Baseline</h3>
          <div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-label">Name:</div><div class="iwj-bbtool-data-value" id="iwj-bbtool-p-name"></div></div>
          <div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-label">DOB:</div><div class="iwj-bbtool-data-value" id="iwj-bbtool-p-dob"></div></div>
          <div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-label">Allergies:</div><div class="iwj-bbtool-data-value" id="iwj-bbtool-p-allergies"></div></div>
          <div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-label">Meds/Supplements:</div><div class="iwj-bbtool-data-value" id="iwj-bbtool-p-meds" style="white-space: pre-line;"></div></div>
          <div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-label">Immunizations:</div><div class="iwj-bbtool-data-value" id="iwj-bbtool-p-vaccines"></div></div>
        </div>

        <div class="iwj-bbtool-print-section" id="iwj-bbtool-p-dynamic-section"></div>

        <div class="iwj-bbtool-print-section" id="iwj-bbtool-p-visit-section"></div>

        <div class="iwj-bbtool-print-section" id="iwj-bbtool-p-additional-section" style="display: none;">
          <h3>Additional Notes</h3>
          <div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-value" id="iwj-bbtool-p-additional" style="white-space: pre-line;"></div></div>
        </div>

        <div class="iwj-bbtool-print-section" style="margin-top: 40px; border: 2px dashed #CBD5E1; border-left: 4px solid var(--primary-navy); padding: 25px; background: #F8FAFC; border-radius: 8px;">
          <h3 style="margin-bottom: 15px; color: var(--primary-navy); font-size: 1.2rem;">Provider Accountability Tracker (Fill out in the room)</h3>
          <p style="margin-bottom: 12px; font-family: var(--font-body);"><strong>[ ] Referrals Promised:</strong> __________________________________________________</p>
          <p style="margin-bottom: 12px; font-family: var(--font-body);"><strong>[ ] Labs/Imaging Ordered:</strong> ______________________________________________ <br><span style="font-size: 0.85rem; color: var(--text-muted); margin-left: 20px;">(Ask for CPT codes now to check your insurance coverage later)</span></p>
          <p style="margin-bottom: 12px; font-family: var(--font-body);"><strong>[ ] Document the Refusal:</strong> Did the doctor refuse a requested test? ( Y / N ) <br><span style="font-size: 0.85rem; color: #B91C1C; margin-left: 20px;">If yes, did they document their refusal in my chart? ( Y / N )</span></p>
          <p style="font-family: var(--font-body);"><strong>[ ] Chart Audit:</strong> Log into the patient portal in 3 days to read the doctor's visit notes for accuracy and bias.</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Message Box -->
  <div class="iwj-bbtool-message-box-overlay" id="iwj-bbtool-msg-box">
    <div class="iwj-bbtool-message-box">
      <h3 id="iwj-bbtool-msg-title" style="margin-bottom: 10px;">Notice</h3>
      <p id="iwj-bbtool-msg-text" style="margin-bottom: 20px; color: var(--text-muted);"></p>
      <button class="iwj-bbtool-btn iwj-bbtool-btn-primary" onclick="iwjBbCloseMsg()">Okay</button>
    </div>
  </div>

  <section class="iwj-bb-final-cta">
    <p class="iwj-bb-disclaimer-note">This tool supports conversations with your provider &mdash; it does not replace professional medical advice. See our <a href="/medical-disclaimer/">Medical Disclaimer</a>.</p>
  </section>

</div>

<script>
(function(){
  var state = {
    demographic: null,
    visitType: null
  };

  var demoFields = {
    "Men": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">Men's Physiology Baselines</h3>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group"><label>Last Known BP / Resting Heart Rate</label><input type="text" id="iwj-bbtool-df-1" placeholder="e.g., BP 120/80 last month, RHR 65 bpm"></div>
        <div class="iwj-bbtool-form-group"><label>Family Cardiac History</label><input type="text" id="iwj-bbtool-df-2" placeholder="e.g., Father had heart attack at 55"></div>
      </div>
      <div class="iwj-bbtool-form-group"><label>Hormonal/Stamina Flags (Libido, Muscle, Sleep Apnea)</label><input type="text" id="iwj-bbtool-df-3" placeholder="e.g., Waking up exhausted, partner says I snore loudly"></div>
      <div class="iwj-bbtool-form-group">
        <label>Adult Immunizations (Check if Up-to-Date)</label>
        <div class="iwj-bbtool-vaccine-grid">
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Annual Flu"> Annual Flu</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="COVID-19"> COVID-19</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Tdap/Td (every 10 yrs)"> Tdap/Td (10 yrs)</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="HPV (if eligible)"> HPV</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Hep B (risk based)"> Hep B</label>
        </div>
      </div>
    `,
    "Women": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">Women's Physiology Baselines</h3>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group"><label>Cycle/Transition Phase (Menstruating, Peri, Post, HRT)</label><input type="text" id="iwj-bbtool-df-1" placeholder="e.g., Perimenopause, irregular cycles, currently on HRT patch"></div>
        <div class="iwj-bbtool-form-group"><label>Autoimmune Flags (Joints, Hair, Systemic Fatigue)</label><input type="text" id="iwj-bbtool-df-2" placeholder="e.g., Unexplained hair thinning, stiff hands in the morning"></div>
      </div>
      <div class="iwj-bbtool-form-group"><label>Cardiac Flags (Jaw pain, nausea, back pain)</label><input type="text" id="iwj-bbtool-df-3" placeholder="e.g., Waking up with nausea and tightness between shoulder blades"></div>
      <div class="iwj-bbtool-form-group">
        <label>Adult Immunizations (Check if Up-to-Date)</label>
        <div class="iwj-bbtool-vaccine-grid">
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Annual Flu"> Annual Flu</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="COVID-19"> COVID-19</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Tdap/Td (every 10 yrs)"> Tdap/Td (10 yrs)</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="HPV (if eligible)"> HPV</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Hep B (risk based)"> Hep B</label>
        </div>
      </div>
    `,
    "Children (0-5)": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">Pediatric (0-5) Baselines</h3>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group"><label>Growth/Feeding (Percentiles, Reflux)</label><input type="text" id="iwj-bbtool-df-1" placeholder="e.g., 50th percentile weight, spits up after every feed"></div>
        <div class="iwj-bbtool-form-group"><label>Milestones (Motor, Speech, Sleep regressions)</label><input type="text" id="iwj-bbtool-df-2" placeholder="e.g., Sitting unassisted, babbling, but waking 4x a night"></div>
      </div>
      <div class="iwj-bbtool-form-group"><label>Parental Bandwidth (Caregiver sleep/mental health)</label><input type="text" id="iwj-bbtool-df-3" placeholder="e.g., I am getting 3 hours of broken sleep and feel highly anxious."></div>
      <div class="iwj-bbtool-form-group">
        <label>Core Pediatric Vaccines (Check if Up-to-Date)</label>
        <div class="iwj-bbtool-vaccine-grid">
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="HepB"> HepB</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Rotavirus (RV)"> Rotavirus</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="DTaP"> DTaP</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Hib"> Hib</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Pneumococcal (PCV)"> Pneumococcal</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Polio (IPV)"> Polio (IPV)</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="MMR"> MMR</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Varicella"> Varicella (Chickenpox)</label>
           <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Annual Flu"> Annual Flu</label>
        </div>
      </div>
    `,
    "Children (6-18)": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">Adolescent Baselines</h3>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group"><label>Physical/Sports (Joints, Growth, Concussions)</label><input type="text" id="iwj-bbtool-df-1" placeholder="e.g., Complaining of knee pain after soccer practice, no head injuries"></div>
        <div class="iwj-bbtool-form-group"><label>Mental/Social (Anxiety, Screen time impact, ADHD)</label><input type="text" id="iwj-bbtool-df-2" placeholder="e.g., Teachers reporting lack of focus, seems withdrawn after school"></div>
      </div>
      <div class="iwj-bbtool-form-group">
        <label>Adolescent Immunizations (Check if Up-to-Date)</label>
        <div class="iwj-bbtool-vaccine-grid">
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Tdap (Age 11-12)"> Tdap (Age 11-12)</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="HPV"> HPV</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="MenACWY"> MenACWY</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="MenB"> MenB</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Annual Flu"> Annual Flu</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="COVID-19"> COVID-19</label>
        </div>
      </div>
    `,
    "Elders 65+": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">Elder / Independence Baselines</h3>
      <div class="iwj-bbtool-form-group"><label>Polypharmacy Check (Are any meds treating side effects of others?)</label><input type="text" id="iwj-bbtool-df-1" placeholder="e.g., Taking Med A for blood pressure, which causes dizziness, so taking Med B for dizziness."></div>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group"><label>Mobility / Fall Risk / Bone Density</label><input type="text" id="iwj-bbtool-df-2" placeholder="e.g., Has fallen twice in last 6 months, uses a cane"></div>
        <div class="iwj-bbtool-form-group"><label>Cognitive / Daily Living Capabilities</label><input type="text" id="iwj-bbtool-df-3" placeholder="e.g., Can still cook and drive, but forgetting to take evening meds"></div>
      </div>
      <div class="iwj-bbtool-form-group">
        <label>Elder Immunizations (Check if Up-to-Date)</label>
        <div class="iwj-bbtool-vaccine-grid">
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Flu (High-Dose/Adjuvanted)"> Flu (High-Dose)</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="RSV"> RSV</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Pneumococcal (PCV15/20)"> Pneumococcal</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Shingles (Shingrix)"> Shingles</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Tdap/Td"> Tdap/Td</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="COVID-19"> COVID-19</label>
        </div>
      </div>
    `,
    "Transgender/Diverse": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">Affirming Care Baselines</h3>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group"><label>Current HRT Protocol &amp; Last Lab Date</label><input type="text" id="iwj-bbtool-df-1" placeholder="e.g., Testosterone 50mg weekly, last labs drawn 3 months ago"></div>
        <div class="iwj-bbtool-form-group"><label>Organ-Specific Screening Reminders</label><input type="text" id="iwj-bbtool-df-2" placeholder="e.g., Due for cervical screening based on organs present"></div>
      </div>
      <div class="iwj-bbtool-form-group">
        <label>Medical Boundary Note</label>
        <input type="text" id="iwj-bbtool-df-3" value="I am here for X. Please do not attribute this to my gender identity or HRT unless there is a physiological link." readonly style="background:#eee;">
      </div>
      <div class="iwj-bbtool-form-group">
        <label>Adult Immunizations (Check if Up-to-Date)</label>
        <div class="iwj-bbtool-vaccine-grid">
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Annual Flu"> Annual Flu</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="COVID-19"> COVID-19</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Tdap/Td (every 10 yrs)"> Tdap/Td (10 yrs)</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="HPV (if eligible)"> HPV</label>
          <label><input type="checkbox" class="iwj-bbtool-vaccine-check" value="Hep B/A (risk based)"> Hep B/A</label>
        </div>
      </div>
    `
  };

  var visitFields = {
    "The Annual Preventative": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">The Primary Objective: Annual Preventative</h3>
      <div class="iwj-bbtool-form-group">
        <label>Top Priority for Today</label>
        <input type="text" class="iwj-bbtool-visit-dynamic" data-label="Top Priority" placeholder="e.g., General wellness check, requesting specific lab work.">
      </div>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group">
          <label>Specific Labs / Screenings Requested</label>
          <textarea class="iwj-bbtool-visit-dynamic" data-label="Requested Labs/Screenings" placeholder="e.g., Full metabolic panel, Vitamin D, Mammogram referral."></textarea>
        </div>
        <div class="iwj-bbtool-form-group">
          <label>New Lifestyle / Baseline Changes</label>
          <textarea class="iwj-bbtool-visit-dynamic" data-label="Baseline Changes" placeholder="e.g., I've started exercising 3x a week, but my sleep has worsened."></textarea>
        </div>
      </div>
    `,
    "The Acute Flare-Up": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">The Primary Objective: Acute Flare-Up</h3>
      <div class="iwj-bbtool-form-group">
        <label>What is the #1 thing that must be addressed today?</label>
        <input type="text" class="iwj-bbtool-visit-dynamic" data-label="Top Priority" placeholder="e.g., I need an ultrasound for severe abdominal pain.">
      </div>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group">
          <label>Timeline &amp; Intensity (1-10)</label>
          <textarea class="iwj-bbtool-visit-dynamic" data-label="Timeline &amp; Intensity" placeholder="e.g., Started 48 hours ago. It is a constant 7/10 pain."></textarea>
        </div>
        <div class="iwj-bbtool-form-group">
          <label>Functional Translation (What makes it better/worse?)</label>
          <textarea class="iwj-bbtool-visit-dynamic" data-label="Functional Impact" placeholder="e.g., Wakes me up from sleep. It gets worse right after I eat."></textarea>
        </div>
      </div>
    `,
    "The Chronic Check-In": `
      <h3 style="margin-bottom: 15px; color: var(--primary-green);">The Primary Objective: Chronic Check-In</h3>
      <div class="iwj-bbtool-form-group">
        <label>Condition Being Managed</label>
        <input type="text" class="iwj-bbtool-visit-dynamic" data-label="Condition Managed" placeholder="e.g., Hypertension and Hypothyroidism">
      </div>
      <div class="iwj-bbtool-form-row">
        <div class="iwj-bbtool-form-group">
          <label>Medication Efficacy &amp; Side Effects</label>
          <textarea class="iwj-bbtool-visit-dynamic" data-label="Medication Updates" placeholder="e.g., Current meds are controlling my BP, but causing severe dizziness in the mornings."></textarea>
        </div>
        <div class="iwj-bbtool-form-group">
          <label>Quality of Life / Symptom Changes</label>
          <textarea class="iwj-bbtool-visit-dynamic" data-label="Quality of Life" placeholder="e.g., Fatigue is slightly better since last visit, but joint pain remains a 6/10."></textarea>
        </div>
      </div>
    `
  };

  document.querySelectorAll('.iwj-bbtool-grid-options').forEach(function(grid){
    grid.addEventListener('click', function(e){
      var card = e.target.closest('.iwj-bbtool-option-card');
      if (!card) return;
      Array.from(grid.children).forEach(function(c){ c.classList.remove('selected'); });
      card.classList.add('selected');
    });
  });

  window.iwjBbNextStep = function(step, validationType){
    if (validationType === 'demo') {
      var selected = document.querySelector('#iwj-bbtool-demo-options .selected');
      if (!selected) return iwjBbShowMsg("Selection Required", "Please select a demographic to continue.");
      state.demographic = selected.dataset.val;
    }

    if (validationType === 'visit') {
      var selectedVisit = document.querySelector('#iwj-bbtool-visit-options .selected');
      if (!selectedVisit) return iwjBbShowMsg("Selection Required", "Please select a visit type to continue.");
      state.visitType = selectedVisit.dataset.val;
      iwjBbBuildDynamicForm();
    }

    document.querySelectorAll('.iwj-bbtool-step').forEach(function(el){ el.classList.remove('active'); });
    document.getElementById('iwj-bbtool-step-' + step).classList.add('active');
  };

  window.iwjBbPrevStep = function(step){
    document.querySelectorAll('.iwj-bbtool-step').forEach(function(el){ el.classList.remove('active'); });
    document.getElementById('iwj-bbtool-step-' + step).classList.add('active');
  };

  function iwjBbBuildDynamicForm(){
    document.getElementById('iwj-bbtool-demographic-specific-fields').innerHTML = demoFields[state.demographic] || '';
    document.getElementById('iwj-bbtool-visit-specific-fields').innerHTML = visitFields[state.visitType] || '';
  }

  window.iwjBbGenerateBriefing = function(){
    if (!document.getElementById('iwj-bbtool-f-name').value) {
      return iwjBbShowMsg("Incomplete Form", "Please provide a Patient Name for the briefing.");
    }

    document.getElementById('iwj-bbtool-p-demo').innerText = state.demographic;
    document.getElementById('iwj-bbtool-p-visit').innerText = state.visitType;
    document.getElementById('iwj-bbtool-p-name').innerText = document.getElementById('iwj-bbtool-f-name').value || 'N/A';
    document.getElementById('iwj-bbtool-p-dob').innerText = document.getElementById('iwj-bbtool-f-dob').value || 'N/A';
    document.getElementById('iwj-bbtool-p-allergies').innerText = document.getElementById('iwj-bbtool-f-allergies').value || 'None noted';
    document.getElementById('iwj-bbtool-p-meds').innerText = document.getElementById('iwj-bbtool-f-meds').value || 'None noted';

    var checkedVaccines = Array.prototype.map.call(document.querySelectorAll('.iwj-bbtool-vaccine-check:checked'), function(cb){ return cb.value; });
    document.getElementById('iwj-bbtool-p-vaccines').innerText = checkedVaccines.length > 0 ? checkedVaccines.join(', ') : 'None marked / Needs discussion';

    var pDynamic = document.getElementById('iwj-bbtool-p-dynamic-section');
    pDynamic.innerHTML = '<h3>' + state.demographic + ' Specifics</h3>';

    for (var i = 1; i <= 3; i++) {
      var input = document.getElementById('iwj-bbtool-df-' + i);
      if (input) {
        var label = input.previousElementSibling.innerText;
        var val = input.value || 'N/A';
        pDynamic.innerHTML += '<div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-label">' + label + ':</div><div class="iwj-bbtool-data-value">' + val + '</div></div>';
      }
    }

    var pVisit = document.getElementById('iwj-bbtool-p-visit-section');
    pVisit.innerHTML = '<h3>Visit Objective: ' + state.visitType + '</h3>';

    document.querySelectorAll('.iwj-bbtool-visit-dynamic').forEach(function(input){
      var label = input.dataset.label;
      var val = input.value || 'N/A';
      pVisit.innerHTML += '<div class="iwj-bbtool-data-row"><div class="iwj-bbtool-data-label">' + label + ':</div><div class="iwj-bbtool-data-value" style="white-space: pre-line;">' + val + '</div></div>';
    });

    var additionalText = document.getElementById('iwj-bbtool-f-additional').value.trim();
    var pAdditionalSection = document.getElementById('iwj-bbtool-p-additional-section');
    if (additionalText) {
      document.getElementById('iwj-bbtool-p-additional').innerText = additionalText;
      pAdditionalSection.style.display = 'block';
    } else {
      pAdditionalSection.style.display = 'none';
    }

    iwjBbNextStep(4);
    document.getElementById('iwj-bbtool-step-4').style.display = 'block';
    document.getElementById('iwj-bbtool-print-view').style.display = 'block';
  };

  window.iwjBbShowMsg = function(title, text){
    document.getElementById('iwj-bbtool-msg-title').innerText = title;
    document.getElementById('iwj-bbtool-msg-text').innerText = text;
    document.getElementById('iwj-bbtool-msg-box').style.display = 'flex';
  };

  window.iwjBbCloseMsg = function(){
    document.getElementById('iwj-bbtool-msg-box').style.display = 'none';
  };
})();
</script>

<?php get_footer(); ?>
