<?php
/**
 * Template Name: Iwosan Patient Power Pack — Symptom Translator
 * Description: Custom coded Patient Power Pack "Symptom Translator" child page — landing copy + embedded interactive tool, for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Symptom Translator</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     PATIENT POWER PACK — SYMPTOM TRANSLATOR
     Landing copy + embedded interactive tool (Making the Plan pattern)
     ============================================ -->
<style>
  .iwj-st-page {
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
    --error-red: #B91C1C;
    --font-heading: 'Montserrat', sans-serif;
    --font-body: 'Lato', sans-serif;
    font-family: var(--font-body); color: var(--text-main); line-height: 1.65;
  }
  .iwj-st-page * { box-sizing: border-box; }
  .iwj-st-page h1, .iwj-st-page h2, .iwj-st-page h3 { font-family: var(--font-heading); color: var(--primary-navy); }
  .iwj-st-page a:focus-visible, .iwj-st-page button:focus-visible { outline: 3px solid var(--accent-teal); outline-offset: 3px; }

  .iwj-st-breadcrumb { max-width: 1100px; margin: 0 auto; padding: 24px 20px 0; }
  .iwj-st-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; }
  .iwj-st-breadcrumb a:hover { color: var(--accent-teal); }

  .iwj-st-hero { max-width: 900px; margin: 0 auto; padding: 60px 20px 40px; text-align: center; }
  .iwj-st-hero-eyebrow { font-family: var(--font-heading); font-size: 0.8rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--accent-teal); margin-bottom: 16px; }
  .iwj-st-hero h1 { font-size: 2.6rem; font-weight: 800; line-height: 1.15; margin-bottom: 20px; letter-spacing: -0.5px; }
  .iwj-st-hero .iwj-st-sub { font-size: 1.15rem; color: var(--text-muted); margin: 0 auto 34px; max-width: 620px; }
  .iwj-st-btn { display: inline-block; padding: 16px 30px; border-radius: 6px; font-family: var(--font-heading); font-weight: 700; text-decoration: none; border: none; cursor: pointer; transition: background 0.2s, transform 0.15s; font-size: 1rem; }
  .iwj-st-btn-primary { background-color: var(--primary-navy); color: var(--white); }
  .iwj-st-btn-primary:hover { background-color: var(--accent-teal); transform: translateY(-1px); }

  .iwj-st-translate-demo { max-width: 780px; margin: 0 auto 70px; padding: 0 20px; display: grid; grid-template-columns: 1fr auto 1fr; align-items: center; gap: 18px; }
  .iwj-st-translate-card { border-radius: 10px; padding: 26px 24px; }
  .iwj-st-translate-card .iwj-st-label { font-family: var(--font-heading); font-size: 0.7rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 10px; display: block; }
  .iwj-st-translate-card.iwj-st-before { background: var(--white); border: 1px dashed var(--border-light); }
  .iwj-st-translate-card.iwj-st-before .iwj-st-label { color: var(--text-muted); }
  .iwj-st-translate-card.iwj-st-before p { font-size: 1.15rem; font-style: italic; color: var(--text-muted); }
  .iwj-st-translate-card.iwj-st-after { background: var(--primary-navy); box-shadow: 0 16px 34px rgba(10,31,68,0.18); }
  .iwj-st-translate-card.iwj-st-after .iwj-st-label { color: var(--accent-teal); }
  .iwj-st-translate-card.iwj-st-after p { font-size: 1.05rem; color: var(--bg-cream); font-weight: 600; }
  .iwj-st-translate-arrow { font-size: 1.6rem; color: var(--accent-teal); font-weight: 700; }

  .iwj-st-hook-section { max-width: 760px; margin: 0 auto; padding: 20px 20px 70px; }
  .iwj-st-hook-section p { font-size: 1.1rem; color: var(--text-muted); margin-bottom: 18px; }
  .iwj-st-hook-section p.iwj-st-callout { font-family: var(--font-heading); font-weight: 700; color: var(--primary-navy); font-size: 1.3rem; margin: 30px 0; padding-left: 20px; border-left: 4px solid var(--accent-gold); }

  .iwj-st-features-section { background: var(--white); padding: 80px 20px; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); }
  .iwj-st-features-inner { max-width: 1100px; margin: 0 auto; }
  .iwj-st-features-inner h2 { font-size: 2rem; margin-bottom: 50px; text-align: center; }
  .iwj-st-features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 34px; }
  .iwj-st-feature { padding: 30px 26px; border-radius: 10px; background: var(--bg-cream); border-top: 4px solid var(--accent-teal); }
  .iwj-st-feature h3 { font-size: 1.15rem; margin-bottom: 12px; }
  .iwj-st-feature p { font-size: 0.95rem; color: var(--text-muted); }
  .iwj-st-feature .iwj-st-quote { font-style: italic; color: var(--primary-navy); display: block; margin-top: 10px; font-size: 0.9rem; }

  .iwj-st-tool-lead-in { max-width: 900px; margin: 0 auto; padding: 70px 20px 0; text-align: center; }
  .iwj-st-tool-lead-in h2 { font-size: 1.9rem; margin-bottom: 10px; }
  .iwj-st-tool-lead-in p { color: var(--text-muted); font-size: 1.05rem; }

  .iwj-st-final-cta { max-width: 700px; margin: 0 auto; padding: 80px 20px; text-align: center; }
  .iwj-st-disclaimer-note { font-size: 0.8rem; color: var(--text-muted); margin-top: 20px; }
  .iwj-st-disclaimer-note a { color: var(--accent-teal); }

  @media (max-width: 760px) {
    .iwj-st-hero h1 { font-size: 2rem; }
    .iwj-st-translate-demo { grid-template-columns: 1fr; }
    .iwj-st-translate-arrow { transform: rotate(90deg); justify-self: center; }
    .iwj-st-features-grid { grid-template-columns: 1fr; }
  }
  @media (prefers-reduced-motion: reduce) {
    .iwj-st-btn { transition: none; }
  }

  /* ============================================
     EMBEDDED TOOL (from interactive_symptom_translator.html)
     ============================================ */
  .iwj-sttool-container { max-width: 900px; margin: 40px auto; padding: 0 20px 60px; }

  .iwj-sttool-step { background: var(--white); border-radius: 12px; box-shadow: 0 10px 25px rgba(10, 31, 68, 0.05); border: 1px solid var(--border-light); border-top: 5px solid var(--accent-teal); padding: 40px; display: none; }
  .iwj-sttool-step.active { display: block; animation: iwjStFadeIn 0.4s ease-in-out; }
  @keyframes iwjStFadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

  .iwj-sttool-step-header { margin-bottom: 30px; text-align: center; }
  .iwj-sttool-step-header h2 { font-size: 1.8rem; margin-bottom: 10px; }
  .iwj-sttool-step-header p { color: var(--text-muted); }

  .iwj-sttool-grid-options { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 30px; }
  .iwj-sttool-option-card { border: 2px solid var(--border-light); border-radius: 8px; padding: 20px; cursor: pointer; transition: all 0.2s ease; position: relative; }
  .iwj-sttool-option-card:hover { border-color: var(--primary-navy); background-color: #F8FAFC; }
  .iwj-sttool-option-card.selected { border-color: var(--primary-green); background-color: rgba(28, 58, 42, 0.05); box-shadow: 0 0 0 1px var(--primary-green); }
  .iwj-sttool-option-card h3 { font-size: 1.15rem; margin-bottom: 8px; }

  .iwj-sttool-trap-quote { font-style: italic; color: var(--error-red); font-size: 0.9rem; background: #FEF2F2; padding: 8px 12px; border-radius: 4px; margin-bottom: 10px; border-left: 3px solid var(--error-red); }

  .iwj-sttool-checkbox-icon { position: absolute; top: 20px; right: 20px; width: 24px; height: 24px; border: 2px solid var(--border-light); border-radius: 4px; display: flex; align-items: center; justify-content: center; }
  .iwj-sttool-option-card.selected .iwj-sttool-checkbox-icon { background: var(--primary-green); border-color: var(--primary-green); }
  .iwj-sttool-option-card.selected .iwj-sttool-checkbox-icon::after { content: '\2713'; color: white; font-size: 14px; font-weight: bold; }

  .iwj-sttool-form-group { margin-bottom: 25px; }
  .iwj-sttool-form-group label { display: block; font-family: var(--font-heading); font-weight: 600; margin-bottom: 8px; color: var(--primary-navy); font-size: 0.95rem; }
  .iwj-sttool-form-group input, .iwj-sttool-form-group select { width: 100%; padding: 12px 15px; border: 1px solid var(--border-light); border-radius: 6px; font-family: var(--font-body); font-size: 1rem; }
  .iwj-sttool-form-group input:focus, .iwj-sttool-form-group select:focus { outline: none; border-color: var(--accent-teal); box-shadow: 0 0 0 3px rgba(77, 174, 175, 0.1); }
  .iwj-sttool-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }

  .iwj-sttool-symptom-section { background: #F8FAFC; border: 1px solid var(--border-light); border-radius: 8px; padding: 25px; margin-bottom: 30px; border-left: 4px solid var(--primary-green); }
  .iwj-sttool-symptom-section h3 { margin-bottom: 20px; color: var(--primary-green); }

  .iwj-sttool-actions { display: flex; justify-content: space-between; margin-top: 40px; border-top: 1px solid var(--border-light); padding-top: 20px; }
  .iwj-sttool-btn { padding: 12px 24px; border-radius: 6px; font-family: var(--font-heading); font-weight: 600; cursor: pointer; border: none; transition: all 0.2s ease; }
  .iwj-sttool-btn-outline { background: transparent; border: 2px solid var(--border-light); color: var(--text-muted); }
  .iwj-sttool-btn-outline:hover { border-color: var(--primary-navy); color: var(--primary-navy); }
  .iwj-sttool-btn-primary { background: var(--primary-navy); color: var(--white); }
  .iwj-sttool-btn-primary:hover { background: var(--primary-green); }

  #iwj-sttool-print-view { background: white; padding: 40px; border-radius: 8px; margin-top: 30px; box-shadow: 0 4px 15px rgba(10, 31, 68, 0.05); border: 1px solid var(--border-light); }
  .iwj-sttool-print-symptom-block { margin-bottom: 35px; padding-bottom: 25px; border-bottom: 1px solid var(--border-light); }
  .iwj-sttool-print-symptom-block h3 { color: var(--primary-navy); font-size: 1.4rem; margin-bottom: 15px; }
  .iwj-sttool-translated-data { background: rgba(77, 174, 175, 0.05); border-left: 4px solid var(--accent-teal); padding: 15px 20px; margin-bottom: 15px; }
  .iwj-sttool-translated-data strong { display: block; margin-bottom: 5px; color: var(--primary-navy); font-family: var(--font-heading); }
  .iwj-sttool-clinical-request { background: rgba(201, 160, 82, 0.1); border-left: 4px solid var(--accent-gold); padding: 15px 20px; }
  .iwj-sttool-clinical-request strong { display: block; margin-bottom: 5px; color: var(--earth-brown); font-family: var(--font-heading); }

  .iwj-sttool-message-box-overlay { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(10,31,68,0.5); display: none; align-items: center; justify-content: center; z-index: 1000; }
  .iwj-sttool-message-box { background: white; padding: 30px; border-radius: 8px; max-width: 400px; text-align: center; }

  @media print {
    body * { visibility: hidden; }
    #iwj-sttool-print-view, #iwj-sttool-print-view * { visibility: visible; }
    #iwj-sttool-print-view { position: absolute; left: 0; top: 0; width: 100%; padding: 0; }
    .iwj-sttool-actions { display: none !important; }
  }
  @media (max-width: 600px) {
    .iwj-sttool-form-row { grid-template-columns: 1fr; }
    .iwj-sttool-actions { flex-direction: column-reverse; gap: 15px; }
    .iwj-sttool-btn { width: 100%; }
  }
</style>

<div class="iwj-st-page">

  <div class="iwj-st-breadcrumb"><a href="/patient-power-pack/">&larr; Back to the Patient Power Pack</a></div>

  <section class="iwj-st-hero">
    <div class="iwj-st-hero-eyebrow">The Interactive Symptom Translator</div>
    <h1>Stop Explaining Your Pain. Start Quantifying It.</h1>
    <p class="iwj-st-sub">When you say "I'm exhausted," the system hears "stressed." Learn how to translate your subjective feelings into the objective medical data that dismantles clinical bias.</p>
    <a href="#iwj-sttool-mount" class="iwj-st-btn iwj-st-btn-primary">Translate My Symptoms</a>
  </section>

  <div class="iwj-st-translate-demo">
    <div class="iwj-st-translate-card iwj-st-before">
      <span class="iwj-st-label">What You Say</span>
      <p>"I'm just... tired all the time."</p>
    </div>
    <div class="iwj-st-translate-arrow">&rarr;</div>
    <div class="iwj-st-translate-card iwj-st-after">
      <span class="iwj-st-label">What We Translate It To</span>
      <p>"My fatigue functionally impairs my ability to walk up stairs."</p>
    </div>
  </div>

  <section class="iwj-st-hook-section">
    <p>Medical bias thrives on vague language. When marginalized patients use emotional or subjective words to describe their pain, they are routinely dismissed, prescribed anxiety medication, or told to lose weight.</p>
    <p class="iwj-st-callout">To get the care you deserve, you must learn to speak the language of the system: Functional Impairment.</p>
    <p>The Interactive Symptom Translator takes your real-world feelings and turns them into clinical red flags. Select your symptoms, answer three rapid-fire questions, and instantly generate a printable, word-for-word script to read directly to your doctor.</p>
  </section>

  <section class="iwj-st-features-section">
    <div class="iwj-st-features-inner">
      <h2>What It Does</h2>
      <div class="iwj-st-features-grid">
        <div class="iwj-st-feature">
          <h3>Eliminates the &ldquo;Stress&rdquo; Trap</h3>
          <p>Translates the words doctors dismiss into the words they act on.</p>
          <span class="iwj-st-quote">"I'm tired" &rarr; "My fatigue functionally impairs my ability to walk up stairs."</span>
        </div>
        <div class="iwj-st-feature">
          <h3>Demands Accountability</h3>
          <p>Automatically pairs your translated symptoms with the exact diagnostic labs, imaging, or specialist referrals you need to request.</p>
        </div>
        <div class="iwj-st-feature">
          <h3>Unbiased Documentation</h3>
          <p>Gives you the exact phrasing to ensure your symptoms are recorded accurately in your medical chart.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="iwj-st-tool-lead-in" id="iwj-sttool-mount">
    <h2>Say it in the language they act on.</h2>
    <p>Three rapid-fire questions. One printable script, ready for your next appointment.</p>
  </div>

  <!-- ============================================
       EMBEDDED TOOL (from interactive_symptom_translator.html)
       ============================================ -->
  <div class="iwj-sttool-container">

    <div id="iwj-sttool-step-1" class="iwj-sttool-step active">
      <div class="iwj-sttool-step-header">
        <h2>What are you feeling?</h2>
        <p>Select the vague, subjective symptoms you are experiencing. We will help you translate them into objective medical data.</p>
      </div>

      <div class="iwj-sttool-grid-options" id="iwj-sttool-symptom-options"></div>

      <div class="iwj-sttool-actions" style="justify-content: flex-end;">
        <button class="iwj-sttool-btn iwj-sttool-btn-primary" onclick="iwjStNextStep(2)">Quantify Symptoms &rarr;</button>
      </div>
    </div>

    <div id="iwj-sttool-step-2" class="iwj-sttool-step">
      <div class="iwj-sttool-step-header">
        <h2>Translate Your Feelings into Function</h2>
        <p>Doctors treat functional impairment, not subjective emotions. Answer these quick questions to quantify your symptoms.</p>
      </div>

      <div id="iwj-sttool-dynamic-forms-container"></div>

      <div class="iwj-sttool-actions">
        <button class="iwj-sttool-btn iwj-sttool-btn-outline" onclick="iwjStPrevStep(1)">&larr; Back</button>
        <button class="iwj-sttool-btn iwj-sttool-btn-primary" onclick="iwjStGenerateTranslation()">Generate Medical Script &rarr;</button>
      </div>
    </div>

    <div id="iwj-sttool-step-3" class="iwj-sttool-step">
      <div class="iwj-sttool-step-header" id="iwj-sttool-print-hide-header">
        <h2>Your Translated Scripts</h2>
        <p>Read these paragraphs directly to your provider, or hand them this printed sheet. Do not apologize for being thorough.</p>
        <button class="iwj-sttool-btn iwj-sttool-btn-primary" style="margin-top: 20px;" onclick="window.print()">&#128424; Print Scripts</button>
        <button class="iwj-sttool-btn iwj-sttool-btn-outline" style="margin-top: 20px; margin-left: 10px;" onclick="iwjStPrevStep(2)">Edit Details</button>
      </div>

      <div id="iwj-sttool-print-view">
        <div style="border-bottom: 3px solid var(--primary-navy); padding-bottom: 20px; margin-bottom: 30px;">
          <h1 style="font-size: 24px;">Patient Symptom Translation &amp; Clinical Requests</h1>
          <p style="color: var(--text-muted); margin-top: 5px;">This document outlines functional impairment and specific diagnostic requests to be added to the patient's chart.</p>
        </div>

        <div id="iwj-sttool-print-blocks-container"></div>

        <div class="iwj-sttool-print-section" style="margin-top: 40px; border: 2px dashed #CBD5E1; border-left: 4px solid var(--primary-navy); padding: 25px; background: #F8FAFC; border-radius: 8px;">
          <h3 style="margin-bottom: 15px; color: var(--primary-navy); font-size: 1.2rem;">Post-Visit Accountability Tracker (Fill out in the room)</h3>
          <p style="margin-bottom: 12px; font-family: var(--font-body);"><strong>[ ] Referrals Promised:</strong> __________________________________________________</p>
          <p style="margin-bottom: 12px; font-family: var(--font-body);"><strong>[ ] Labs/Imaging Ordered:</strong> ______________________________________________ <br><span style="font-size: 0.85rem; color: var(--text-muted); margin-left: 20px;">(Ask for CPT codes now to check your insurance coverage later)</span></p>
          <p style="margin-bottom: 12px; font-family: var(--font-body);"><strong>[ ] Document the Refusal:</strong> Did the doctor refuse a requested test? ( Y / N ) <br><span style="font-size: 0.85rem; color: var(--error-red); margin-left: 20px;">If yes, did they document their refusal in my chart? ( Y / N )</span></p>
          <p style="font-family: var(--font-body);"><strong>[ ] Chart Audit:</strong> Log into the patient portal in 3 days to read the doctor's visit notes for accuracy and bias.</p>
        </div>
      </div>
    </div>

  </div>

  <div class="iwj-sttool-message-box-overlay" id="iwj-sttool-msg-box">
    <div class="iwj-sttool-message-box">
      <h3 id="iwj-sttool-msg-title" style="margin-bottom: 10px;">Notice</h3>
      <p id="iwj-sttool-msg-text" style="margin-bottom: 20px; color: var(--text-muted);"></p>
      <button class="iwj-sttool-btn iwj-sttool-btn-primary" onclick="iwjStCloseMsg()">Okay</button>
    </div>
  </div>

  <section class="iwj-st-final-cta">
    <p class="iwj-st-disclaimer-note">This tool supports conversations with your provider &mdash; it does not replace professional medical advice. See our <a href="/medical-disclaimer/">Medical Disclaimer</a>.</p>
  </section>

</div>

<script>
(function(){
  var symptomConfig = [
    {
      id: "fatigue",
      title: "Fatigue & Exhaustion",
      trap: "I'm just so tired all the time. I have no energy.",
      description: "Fatigue is frequently written off as stress or aging. We need to prove functional impairment.",
      formHTML: `
        <div class="iwj-sttool-form-row">
          <div class="iwj-sttool-form-group">
            <label>How many hours of sleep do you get?</label>
            <input type="number" id="iwj-sttool-fatigue-sleep" placeholder="e.g., 8">
          </div>
          <div class="iwj-sttool-form-group">
            <label>What daily task requires a nap/rest afterward?</label>
            <input type="text" id="iwj-sttool-fatigue-task" placeholder="e.g., a standard trip to the grocery store">
          </div>
        </div>
        <div class="iwj-sttool-form-group">
          <label>What physical movement can you no longer do without stopping?</label>
          <input type="text" id="iwj-sttool-fatigue-move" placeholder="e.g., walk up my stairs">
        </div>
      `,
      generateTranslation: function(){
        var sleep = document.getElementById('iwj-sttool-fatigue-sleep').value || '[X]';
        var task = document.getElementById('iwj-sttool-fatigue-task').value || '[Task]';
        var move = document.getElementById('iwj-sttool-fatigue-move').value || '[Movement]';
        return 'My fatigue is functionally impairing my daily life. I sleep ' + sleep + ' hours but wake up unrefreshed. I have to take a nap/rest after ' + task + ', and I can no longer ' + move + ' without stopping to rest.';
      },
      request: "Before we discuss stress or depression, I am requesting a full thyroid panel, a ferritin (iron storage) check, Vitamin D and B12 levels, and an assessment for sleep apnea."
    },
    {
      id: "pain",
      title: "Unexplained Pain",
      trap: "My stomach/back/head hurts really bad.",
      description: "Pain is subjective and heavily subject to bias. Doctors need timelines, triggers, and 1-10 scales.",
      formHTML: `
        <div class="iwj-sttool-form-row">
          <div class="iwj-sttool-form-group">
            <label>Location & Type (Sharp, throbbing, dull?)</label>
            <input type="text" id="iwj-sttool-pain-loc" placeholder="e.g., Sharp, stabbing pain in lower right abdomen">
          </div>
          <div class="iwj-sttool-form-group">
            <label>Timeline (Exactly when did it start?)</label>
            <input type="text" id="iwj-sttool-pain-time" placeholder="e.g., 48 hours ago and hasn't stopped">
          </div>
        </div>
        <div class="iwj-sttool-form-row">
          <div class="iwj-sttool-form-group">
            <label>Intensity Level (1-10)</label>
            <select id="iwj-sttool-pain-scale">
              <option value="4/10">4/10 (Distracting)</option>
              <option value="6/10">6/10 (Hard to focus)</option>
              <option value="8/10">8/10 (Can't speak normally)</option>
              <option value="10/10">10/10 (Worst pain imaginable)</option>
            </select>
          </div>
          <div class="iwj-sttool-form-group">
            <label>Major Triggers (What makes it worse?)</label>
            <input type="text" id="iwj-sttool-pain-trigger" placeholder="e.g., Wakes me up from sleep, worse after eating">
          </div>
        </div>
      `,
      generateTranslation: function(){
        var loc = document.getElementById('iwj-sttool-pain-loc').value || '[Location]';
        var time = document.getElementById('iwj-sttool-pain-time').value || '[Timeline]';
        var scale = document.getElementById('iwj-sttool-pain-scale').value;
        var trigger = document.getElementById('iwj-sttool-pain-trigger').value || '[Trigger]';
        return 'I am experiencing a ' + loc + '. It started ' + time + '. It is a constant ' + scale + '. Specifically, it ' + trigger + '.';
      },
      request: "I need diagnostic imaging (Ultrasound/CT/MRI) to rule out structural issues, or a referral to a specialist. I also need this pain level and my request documented in my chart today."
    },
    {
      id: "brainfog",
      title: "Brain Fog & Memory",
      trap: "I just can't concentrate lately. My memory is terrible.",
      description: "Often dismissed as aging, 'mom brain,' or stress.",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>Specific Acute Memory Lapses (Give 2 examples)</label>
          <input type="text" id="iwj-sttool-fog-lapses" placeholder="e.g., Forgot my route home, losing mid-sentence vocabulary">
        </div>
        <div class="iwj-sttool-form-group">
          <label>Safety / Work Impact</label>
          <input type="text" id="iwj-sttool-fog-impact" placeholder="e.g., I left the stove on twice this week, missing work deadlines">
        </div>
      `,
      generateTranslation: function(){
        var lapses = document.getElementById('iwj-sttool-fog-lapses').value || '[Lapses]';
        var impact = document.getElementById('iwj-sttool-fog-impact').value || '[Impact]';
        return 'I am experiencing acute cognitive dysfunction that is impacting my safety/work. Specifically: ' + lapses + '. This has led to ' + impact + '.';
      },
      request: "I need a neurological baseline screening, a check of my metabolic and hormonal panels, and a review of my current medications to rule out side effects."
    },
    {
      id: "anxiety",
      title: "Anxiety vs. Palpitations",
      trap: "I feel really anxious and my chest feels tight.",
      description: "Women and WOC frequently have cardiac or thyroid issues misdiagnosed as panic attacks.",
      formHTML: `
        <div class="iwj-sttool-form-row">
          <div class="iwj-sttool-form-group">
            <label>Normal Resting Heart Rate (bpm)</label>
            <input type="number" id="iwj-sttool-anx-normal" placeholder="e.g., 70">
          </div>
          <div class="iwj-sttool-form-group">
            <label>Spiking Heart Rate (bpm)</label>
            <input type="number" id="iwj-sttool-anx-spike" placeholder="e.g., 130">
          </div>
        </div>
        <div class="iwj-sttool-form-group">
          <label>What are you doing when it spikes?</label>
          <input type="text" id="iwj-sttool-anx-context" placeholder="e.g., Sitting completely still watching TV">
        </div>
      `,
      generateTranslation: function(){
        var norm = document.getElementById('iwj-sttool-anx-normal').value || '[X]';
        var spike = document.getElementById('iwj-sttool-anx-spike').value || '[Y]';
        var context = document.getElementById('iwj-sttool-anx-context').value || '[Context]';
        return 'My resting heart rate is normally ' + norm + ' bpm, but it is spiking to ' + spike + ' bpm while I am ' + context + '. I am experiencing shortness of breath without physical exertion.';
      },
      request: "I need an EKG and a Holter monitor to rule out an arrhythmia, and a full thyroid check, before we have any conversation about anxiety medication."
    },
    {
      id: "gi",
      title: "Digestive & GI Distress",
      trap: "My stomach is always upset and I'm bloated.",
      description: "Often brushed off as IBS, poor diet, or weight-related.",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>Frequency of GI Distress</label>
          <input type="text" id="iwj-sttool-gi-freq" placeholder="e.g., Severe diarrhea 4 times a week for the last month">
        </div>
        <div class="iwj-sttool-form-group">
          <label>Accompanying Functional Symptoms (Weight, Bloating measurement)</label>
          <input type="text" id="iwj-sttool-gi-acc" placeholder="e.g., Unintended weight loss, bloating that distends stomach by 3 inches">
        </div>
      `,
      generateTranslation: function(){
        var freq = document.getElementById('iwj-sttool-gi-freq').value || '[Frequency]';
        var acc = document.getElementById('iwj-sttool-gi-acc').value || '[Symptoms]';
        return 'I am experiencing chronic GI distress. I have had ' + freq + ', accompanied by ' + acc + '.';
      },
      request: "I need a referral to a gastroenterologist, testing for inflammatory bowel markers (like a calprotectin stool test), and a Celiac screening."
    },
    {
      id: "pelvic",
      title: "Women's Health & Pelvic Pain",
      trap: "My periods are really heavy and they hurt a lot.",
      description: "Pelvic pain is notoriously normalized as 'just bad cramps.'",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>Bleeding Volume (Pads/Tampons per hour)</label>
          <input type="text" id="iwj-sttool-pelvic-bleed" placeholder="e.g., Changing a super-absorbency pad every hour for 3 hours">
        </div>
        <div class="iwj-sttool-form-group">
          <label>Functional Pain Impact (Work, Vomiting, OTC meds)</label>
          <input type="text" id="iwj-sttool-pelvic-pain" placeholder="e.g., Causes vomiting, miss 2 days of work, ibuprofen does nothing">
        </div>
      `,
      generateTranslation: function(){
        var bleed = document.getElementById('iwj-sttool-pelvic-bleed').value || '[Bleeding Volume]';
        var pain = document.getElementById('iwj-sttool-pelvic-pain').value || '[Pain Impact]';
        return 'My menstrual bleeding requires me to ' + bleed + '. The pelvic pain functionally impairs me because it ' + pain + '.';
      },
      request: "I need a transvaginal ultrasound to check for fibroids, cysts, or endometriosis, and a CBC to check iron levels for anemia. I am not willing to just go on birth control without diagnostic imaging first."
    },
    {
      id: "dizziness",
      title: "Dizziness & Fainting",
      trap: "I keep getting dizzy and feel like I'm going to pass out.",
      description: "Dizziness is vague. Doctors need to know if the room is spinning (vertigo), if your vision goes black (pre-syncope), and what posture changes trigger it.",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>Specific Sensation (Room spinning vs. Vision going dark/Tunnel vision)</label>
          <input type="text" id="iwj-sttool-dizzy-type" placeholder="e.g., My vision goes black and my ears ring">
        </div>
        <div class="iwj-sttool-form-group">
          <label>Positional Triggers & Fall Risk</label>
          <input type="text" id="iwj-sttool-dizzy-trigger" placeholder="e.g., Happens when I stand up from sitting. I had to sit on the floor twice today to avoid fainting.">
        </div>
      `,
      generateTranslation: function(){
        var type = document.getElementById('iwj-sttool-dizzy-type').value || '[Sensation]';
        var trigger = document.getElementById('iwj-sttool-dizzy-trigger').value || '[Triggers/Impact]';
        return 'I am experiencing episodes of ' + type + '. This is specifically triggered by/results in: ' + trigger + '.';
      },
      request: "I am requesting an orthostatic vitals check (taking BP and Heart Rate lying, sitting, and standing), an EKG, and a referral for tilt-table testing or vestibular therapy."
    },
    {
      id: "headache",
      title: "Headaches & Migraines",
      trap: "I've been getting really bad headaches.",
      description: "Often dismissed as dehydration, stress, or tension. You must detail neurological deficits and medication failures.",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>Frequency & Duration</label>
          <input type="text" id="iwj-sttool-ha-freq" placeholder="e.g., 3 days a week, lasting up to 12 hours">
        </div>
        <div class="iwj-sttool-form-group">
          <label>Accompanying Neurological Symptoms (Auras, Nausea, Numbness)</label>
          <input type="text" id="iwj-sttool-ha-neuro" placeholder="e.g., Extreme light sensitivity, vomiting, and blurry spots in my vision">
        </div>
      `,
      generateTranslation: function(){
        var freq = document.getElementById('iwj-sttool-ha-freq').value || '[Frequency]';
        var neuro = document.getElementById('iwj-sttool-ha-neuro').value || '[Neurological Symptoms]';
        return 'I am experiencing debilitating headaches ' + freq + '. They are accompanied by neurological symptoms, specifically: ' + neuro + '. Over-the-counter painkillers do not break the pain cycle.';
      },
      request: "I need a referral to a neurologist and a prescription for migraine-specific abortive medications (like triptans). If this is a sudden, new type of severe headache, I am requesting diagnostic imaging."
    },
    {
      id: "weight",
      title: "Unexplained Weight Gain",
      trap: "I keep gaining weight no matter what I do.",
      description: "Frequently met with 'eat less, move more' bias. You must demonstrate metabolic resistance and objective tracking.",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>Amount Gained & Timeline</label>
          <input type="text" id="iwj-sttool-wt-time" placeholder="e.g., Gained 15 lbs in 2 months without changing my diet">
        </div>
        <div class="iwj-sttool-form-group">
          <label>Other Systemic Signs (Hair loss, cold intolerance, extreme fatigue)</label>
          <input type="text" id="iwj-sttool-wt-signs" placeholder="e.g., Extreme hair shedding, brittle nails, always freezing">
        </div>
      `,
      generateTranslation: function(){
        var time = document.getElementById('iwj-sttool-wt-time').value || '[Timeline/Amount]';
        var signs = document.getElementById('iwj-sttool-wt-signs').value || '[Systemic Signs]';
        return 'I have experienced a rapid, unexplained weight gain of ' + time + ', despite maintaining an active lifestyle and caloric deficit. This is accompanied by metabolic flags: ' + signs + '.';
      },
      request: "I am requesting a comprehensive metabolic and endocrine workup, including a full thyroid panel (TSH, Free T3, Free T4, antibodies), fasting insulin, A1C, and morning cortisol. I am not looking for lifestyle advice until these labs are run."
    },
    {
      id: "joints",
      title: "Joint Stiffness & Mobility",
      trap: "My body just aches and my joints are stiff.",
      description: "Dismissed as aging or 'sleeping wrong.' Autoimmune markers require specific timelines, especially 'morning stiffness'.",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>Morning Stiffness Duration (Minutes/Hours before you can move normally)</label>
          <input type="text" id="iwj-sttool-joint-morning" placeholder="e.g., Takes 90 minutes every morning before I can bend my fingers">
        </div>
        <div class="iwj-sttool-form-group">
          <label>Is it Symmetrical? What can't you do?</label>
          <input type="text" id="iwj-sttool-joint-sym" placeholder="e.g., Yes, both wrists hurt exactly the same. I cannot open jars anymore.">
        </div>
      `,
      generateTranslation: function(){
        var morning = document.getElementById('iwj-sttool-joint-morning').value || '[Morning Duration]';
        var sym = document.getElementById('iwj-sttool-joint-sym').value || '[Impact/Symmetry]';
        return 'I am experiencing severe joint stiffness that lasts for ' + morning + '. The pain is bilateral (on both sides), and functionally prevents me from: ' + sym + '.';
      },
      request: "I am requesting an autoimmune screening panel including an ANA, Rheumatoid Factor (RF), CRP, and sedimentation rate (ESR) before we assume this is just general wear-and-tear."
    },
    {
      id: "custom",
      title: "Custom Unlisted Symptom",
      trap: "I feel weird/bad/off in a way not listed here.",
      description: "Use our guided formula to translate any subjective feeling into objective clinical data.",
      formHTML: `
        <div class="iwj-sttool-form-group">
          <label>1. What is the symptom and where is it located?</label>
          <input type="text" id="iwj-sttool-custom-symp" placeholder="e.g., Numbness and tingling in my left leg">
        </div>
        <div class="iwj-sttool-form-row">
          <div class="iwj-sttool-form-group">
            <label>2. When exactly did it start?</label>
            <input type="text" id="iwj-sttool-custom-time" placeholder="e.g., 3 weeks ago, mostly in the evenings">
          </div>
          <div class="iwj-sttool-form-group">
            <label>3. Intensity Level (1-10)</label>
            <select id="iwj-sttool-custom-scale">
              <option value="Mild (1-3)">Mild (1-3) - Noticeable</option>
              <option value="Moderate (4-6)">Moderate (4-6) - Distracting</option>
              <option value="Severe (7-9)">Severe (7-9) - Limits ability to function</option>
              <option value="Unbearable (10)">Unbearable (10) - Worst ever</option>
            </select>
          </div>
        </div>
        <div class="iwj-sttool-form-group">
          <label>4. Functional Impact (What can you no longer do?)</label>
          <input type="text" id="iwj-sttool-custom-impact" placeholder="e.g., I cannot drive for more than 15 minutes because I lose feeling in my foot">
        </div>
        <div class="iwj-sttool-form-group">
          <label>5. Specific Clinical Request (If you know what you want to ask for)</label>
          <input type="text" id="iwj-sttool-custom-request" placeholder="e.g., I would like a referral to a neurologist">
        </div>
      `,
      generateTranslation: function(){
        var symp = document.getElementById('iwj-sttool-custom-symp').value || '[Symptom]';
        var time = document.getElementById('iwj-sttool-custom-time').value || '[Timeline]';
        var scale = document.getElementById('iwj-sttool-custom-scale').value;
        var impact = document.getElementById('iwj-sttool-custom-impact').value || '[Functional Impact]';
        return 'I am experiencing ' + symp + '. It started ' + time + '. The intensity is ' + scale + '. It functionally impairs me because ' + impact + '.';
      },
      request: "I am requesting diagnostic testing or a specialist referral to identify the root cause of this functional impairment, and I would like this documented in my chart today."
    }
  ];

  var selectedSymptoms = new Set();

  function iwjStInitGrid(){
    var grid = document.getElementById('iwj-sttool-symptom-options');
    symptomConfig.forEach(function(symp){
      var card = document.createElement('div');
      card.className = 'iwj-sttool-option-card';
      card.dataset.id = symp.id;
      card.innerHTML =
        '<div class="iwj-sttool-checkbox-icon"></div>' +
        '<h3>' + symp.title + '</h3>' +
        '<div class="iwj-sttool-trap-quote">"' + symp.trap + '"</div>' +
        '<p style="font-size: 0.85rem; color: var(--text-muted);">' + symp.description + '</p>';
      card.onclick = function(){ iwjStToggleSymptom(card, symp.id); };
      grid.appendChild(card);
    });
  }

  function iwjStToggleSymptom(card, id){
    if (selectedSymptoms.has(id)) {
      selectedSymptoms.delete(id);
      card.classList.remove('selected');
    } else {
      selectedSymptoms.add(id);
      card.classList.add('selected');
    }
  }

  window.iwjStNextStep = function(step){
    if (step === 2) {
      if (selectedSymptoms.size === 0) {
        return iwjStShowMsg("Selection Required", "Please select at least one symptom to translate.");
      }
      iwjStBuildDynamicForms();
    }

    document.querySelectorAll('.iwj-sttool-step').forEach(function(el){ el.classList.remove('active'); });
    document.getElementById('iwj-sttool-step-' + step).classList.add('active');
  };

  window.iwjStPrevStep = function(step){
    document.querySelectorAll('.iwj-sttool-step').forEach(function(el){ el.classList.remove('active'); });
    document.getElementById('iwj-sttool-step-' + step).classList.add('active');
  };

  function iwjStBuildDynamicForms(){
    var container = document.getElementById('iwj-sttool-dynamic-forms-container');
    container.innerHTML = '';

    selectedSymptoms.forEach(function(id){
      var symp = symptomConfig.find(function(s){ return s.id === id; });
      var section = document.createElement('div');
      section.className = 'iwj-sttool-symptom-section';
      section.innerHTML = '<h3>' + symp.title + '</h3>' + symp.formHTML;
      container.appendChild(section);
    });
  }

  window.iwjStGenerateTranslation = function(){
    var container = document.getElementById('iwj-sttool-print-blocks-container');
    container.innerHTML = '';

    selectedSymptoms.forEach(function(id){
      var symp = symptomConfig.find(function(s){ return s.id === id; });

      var requestText = symp.request;
      if (id === 'custom') {
        var customReqInput = document.getElementById('iwj-sttool-custom-request');
        if (customReqInput && customReqInput.value.trim() !== '') {
          requestText = customReqInput.value;
        } else {
          requestText = "I am requesting diagnostic testing or a specialist referral to identify the root cause of this functional impairment, and I would like this documented in my chart today.";
        }
      }

      var translationText = symp.generateTranslation();

      var block = document.createElement('div');
      block.className = 'iwj-sttool-print-symptom-block';
      block.innerHTML =
        '<h3>' + symp.title + '</h3>' +
        '<div class="iwj-sttool-translated-data"><strong>The Objective Translation:</strong><p>' + translationText + '</p></div>' +
        '<div class="iwj-sttool-clinical-request"><strong>The Clinical Request to the Provider:</strong><p>"' + requestText + '"</p></div>';
      container.appendChild(block);
    });

    iwjStNextStep(3);
  };

  window.iwjStShowMsg = function(title, text){
    document.getElementById('iwj-sttool-msg-title').innerText = title;
    document.getElementById('iwj-sttool-msg-text').innerText = text;
    document.getElementById('iwj-sttool-msg-box').style.display = 'flex';
  };

  window.iwjStCloseMsg = function(){
    document.getElementById('iwj-sttool-msg-box').style.display = 'none';
  };

  iwjStInitGrid();
})();
</script>

<?php get_footer(); ?>
