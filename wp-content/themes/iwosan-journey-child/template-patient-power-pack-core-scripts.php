<?php
/**
 * Template Name: Iwosan Patient Power Pack — Core Scripts
 * Description: Custom coded Patient Power Pack "Self-Advocacy Core Scripts" child page for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Self-Advocacy Core Scripts</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     PATIENT POWER PACK — SELF-ADVOCACY CORE SCRIPTS
     Landing page; email capture is a placeholder (JS alert), not yet wired
     to Kit/ConvertKit — list decision (shared MenoWell vs. dedicated Iwosan) pending.
     ============================================ -->
<style>
  .iwj-cs-page {
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
  .iwj-cs-page * { box-sizing: border-box; }
  .iwj-cs-page h1, .iwj-cs-page h2, .iwj-cs-page h3 { font-family: var(--font-heading); color: var(--primary-navy); }
  .iwj-cs-page a:focus-visible, .iwj-cs-page button:focus-visible, .iwj-cs-page input:focus-visible { outline: 3px solid var(--primary-green); outline-offset: 3px; }

  .iwj-cs-breadcrumb { max-width: 1100px; margin: 0 auto; padding: 24px 20px 0; }
  .iwj-cs-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; }
  .iwj-cs-breadcrumb a:hover { color: var(--primary-green); }

  .iwj-cs-hero { max-width: 1100px; margin: 0 auto; padding: 60px 20px 80px; display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center; }
  .iwj-cs-hero-eyebrow { font-family: var(--font-heading); font-size: 0.8rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--primary-green); margin-bottom: 16px; }
  .iwj-cs-hero h1 { font-size: 2.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 20px; letter-spacing: -0.5px; }
  .iwj-cs-hero .iwj-cs-sub { font-size: 1.15rem; color: var(--text-muted); margin-bottom: 30px; max-width: 480px; }
  .iwj-cs-btn { display: inline-block; padding: 16px 30px; border-radius: 6px; font-family: var(--font-heading); font-weight: 700; text-decoration: none; border: none; cursor: pointer; transition: background 0.2s, transform 0.15s; font-size: 1rem; }
  .iwj-cs-btn-primary { background-color: var(--primary-green); color: var(--white); }
  .iwj-cs-btn-primary:hover { background-color: var(--primary-navy); transform: translateY(-1px); }

  .iwj-cs-brain-card { background: var(--primary-navy); border-radius: 12px; padding: 30px 28px; box-shadow: 0 20px 45px rgba(10,31,68,0.18); transform: rotate(-1deg); }
  .iwj-cs-brain-card .iwj-cs-tag { font-family: var(--font-heading); font-size: 0.7rem; font-weight: 700; letter-spacing: 1.5px; color: var(--accent-gold); text-transform: uppercase; margin-bottom: 18px; display: block; }
  .iwj-cs-brain-row { display: flex; gap: 14px; padding: 11px 0; border-bottom: 1px solid rgba(255,255,255,0.12); }
  .iwj-cs-brain-row:last-child { border-bottom: none; }
  .iwj-cs-brain-letter { font-family: var(--font-heading); font-weight: 800; font-size: 1.3rem; color: var(--accent-gold); width: 30px; flex-shrink: 0; }
  .iwj-cs-brain-text strong { color: var(--bg-cream); display: block; font-size: 0.95rem; }
  .iwj-cs-brain-text span { color: #B7C4DA; font-size: 0.82rem; }

  .iwj-cs-hook-section { max-width: 760px; margin: 0 auto; padding: 20px 20px 70px; }
  .iwj-cs-hook-section p { font-size: 1.1rem; color: var(--text-muted); margin-bottom: 18px; }
  .iwj-cs-hook-section p.iwj-cs-callout { font-family: var(--font-heading); font-weight: 700; color: var(--primary-navy); font-size: 1.3rem; margin: 30px 0; padding-left: 20px; border-left: 4px solid var(--accent-gold); }

  .iwj-cs-features-section { background: var(--white); padding: 80px 20px; border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); }
  .iwj-cs-features-inner { max-width: 1100px; margin: 0 auto; }
  .iwj-cs-features-inner h2 { font-size: 2rem; margin-bottom: 50px; text-align: center; }
  .iwj-cs-features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 34px; }
  .iwj-cs-feature { padding: 30px 26px; border-radius: 10px; background: var(--bg-cream); border-top: 4px solid var(--primary-green); }
  .iwj-cs-feature h3 { font-size: 1.1rem; margin-bottom: 12px; }
  .iwj-cs-feature p { font-size: 0.95rem; color: var(--text-muted); }

  .iwj-cs-capture-section { max-width: 640px; margin: 0 auto; padding: 80px 20px; text-align: center; }
  .iwj-cs-capture-section h2 { font-size: 1.9rem; margin-bottom: 14px; }
  .iwj-cs-capture-section p { color: var(--text-muted); margin-bottom: 30px; font-size: 1.05rem; }
  .iwj-cs-capture-form { display: flex; gap: 12px; max-width: 460px; margin: 0 auto; }
  .iwj-cs-capture-form input { flex: 1; padding: 15px 16px; border-radius: 6px; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; background: var(--white); }
  .iwj-cs-capture-form .iwj-cs-btn { white-space: nowrap; }
  .iwj-cs-capture-note { font-size: 0.78rem; color: var(--text-muted); margin-top: 16px; }
  .iwj-cs-placeholder-flag { max-width: 460px; margin: 18px auto 0; font-size: 0.75rem; color: var(--earth-brown); background: rgba(139,94,60,0.08); border: 1px dashed var(--earth-brown); border-radius: 6px; padding: 10px 14px; }
  .iwj-cs-disclaimer-note { font-size: 0.8rem; color: var(--text-muted); margin-top: 24px; }
  .iwj-cs-disclaimer-note a { color: var(--primary-green); }

  @media (max-width: 860px) {
    .iwj-cs-hero { grid-template-columns: 1fr; padding-top: 30px; }
    .iwj-cs-hero h1 { font-size: 2rem; }
    .iwj-cs-brain-card { transform: none; }
    .iwj-cs-features-grid { grid-template-columns: 1fr; }
    .iwj-cs-capture-form { flex-direction: column; }
  }
  @media (prefers-reduced-motion: reduce) {
    .iwj-cs-btn { transition: none; }
  }
</style>

<div class="iwj-cs-page">

  <div class="iwj-cs-breadcrumb"><a href="/patient-power-pack/">&larr; Back to the Patient Power Pack</a></div>

  <section class="iwj-cs-hero">
    <div>
      <div class="iwj-cs-hero-eyebrow">The Self-Advocacy Core Scripts</div>
      <h1>Do Not Ask for Permission. Use the Scripts.</h1>
      <p class="iwj-cs-sub">The ultimate survival guide for the exam room. Download the exact, word-for-word scripts designed to enforce your consent, stop medical gaslighting, and legally hold providers accountable.</p>
      <a href="#iwj-cs-download" class="iwj-cs-btn iwj-cs-btn-primary">Download the Toolkit (PDF)</a>
    </div>
    <div class="iwj-cs-brain-card">
      <span class="iwj-cs-tag">The B.R.A.I.N. Consent Card</span>
      <div class="iwj-cs-brain-row"><span class="iwj-cs-brain-letter">B</span><div class="iwj-cs-brain-text"><strong>Benefits</strong><span>What's the clinical benefit, right now?</span></div></div>
      <div class="iwj-cs-brain-row"><span class="iwj-cs-brain-letter">R</span><div class="iwj-cs-brain-text"><strong>Risks</strong><span>What are the common side effects?</span></div></div>
      <div class="iwj-cs-brain-row"><span class="iwj-cs-brain-letter">A</span><div class="iwj-cs-brain-text"><strong>Alternatives</strong><span>What are our other options?</span></div></div>
      <div class="iwj-cs-brain-row"><span class="iwj-cs-brain-letter">I</span><div class="iwj-cs-brain-text"><strong>Intuition</strong><span>Does this feel right in my gut?</span></div></div>
      <div class="iwj-cs-brain-row"><span class="iwj-cs-brain-letter">N</span><div class="iwj-cs-brain-text"><strong>Nothing</strong><span>What if we pause for 10 minutes?</span></div></div>
    </div>
  </section>

  <section class="iwj-cs-hook-section">
    <p>When a doctor says, "We don't need to run that test," or a nurse pushes a medication before explaining the side effects, the power dynamic of the room is designed to make you comply.</p>
    <p class="iwj-cs-callout">Break the cycle.</p>
    <p>The Self-Advocacy Core Scripts are your pocket-sized armor. Designed for patients, partners, and doulas, these frameworks teach you exactly how to slow down the medical machine and protect your bodily autonomy.</p>
  </section>

  <section class="iwj-cs-features-section">
    <div class="iwj-cs-features-inner">
      <h2>Inside the Toolkit (PDF Download)</h2>
      <div class="iwj-cs-features-grid">
        <div class="iwj-cs-feature">
          <h3>The &ldquo;Document the Refusal&rdquo; Strategy</h3>
          <p>The #1 anti-bias phrase that forces dismissive doctors to order the tests you requested by leveraging medical liability.</p>
        </div>
        <div class="iwj-cs-feature">
          <h3>The B.R.A.I.N. Consent Card</h3>
          <p>The 5 questions you must ask before agreeing to any sudden intervention or procedure.</p>
        </div>
        <div class="iwj-cs-feature">
          <h3>The Room Guardian Roster</h3>
          <p>Exactly how your partner or support person can block the bed, enforce the 10-minute privacy rule, and escalate to the hospital's Chain of Command if you are in danger.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="iwj-cs-capture-section" id="iwj-cs-download">
    <h2>Get your pocket-sized armor.</h2>
    <p>Enter your email and the full PDF toolkit lands in your inbox &mdash; print-ready, no login required.</p>
    <!-- PLACEHOLDER: form is not yet wired to Kit/ConvertKit or a PDF delivery mechanism.
         Pending decision: shared MenoWell list vs. dedicated Iwosan Journey's list. -->
    <form class="iwj-cs-capture-form" onsubmit="event.preventDefault(); iwjCsShowMsg();">
      <input type="email" placeholder="you@email.com" aria-label="Email address" required>
      <button type="submit" class="iwj-cs-btn iwj-cs-btn-primary">Send Me the PDF</button>
    </form>
    <p class="iwj-cs-capture-note">We'll also send the 3-part "Print it, use it, tell us how it went" follow-up series.</p>
    <div class="iwj-cs-placeholder-flag">&#9888; Placeholder form &mdash; not yet connected to an email service or PDF delivery. Functional once the Core Scripts PDF is designed and the list decision (Kit/ConvertKit shared vs. dedicated) is made.</div>
    <p class="iwj-cs-disclaimer-note">These scripts support conversations with your provider &mdash; they do not replace professional medical advice. See our <a href="/medical-disclaimer/">Medical Disclaimer</a>.</p>
  </section>

</div>

<script>
function iwjCsShowMsg(){
  alert('Placeholder only — email capture is not yet connected.');
}
</script>

<?php get_footer(); ?>
