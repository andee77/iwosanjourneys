<?php
/**
 * Template Name: Iwosan Patient Power Pack — Advocacy Guides
 * Description: Custom coded Patient Power Pack "Advocacy Guides by Topic & Life Stage" child page for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Advocacy Guides</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     PATIENT POWER PACK — ADVOCACY GUIDES BY TOPIC & LIFE STAGE
     12 direct-download sheets, no email capture (matches the direct-link
     approach chosen for the Core Scripts page).
     ============================================ -->
<style>
  .iwj-ag-page {
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
  .iwj-ag-page * { box-sizing: border-box; }
  .iwj-ag-page h1, .iwj-ag-page h2, .iwj-ag-page h3 { font-family: var(--font-heading); color: var(--primary-navy); }
  .iwj-ag-page a:focus-visible { outline: 3px solid var(--primary-green); outline-offset: 3px; }

  .iwj-ag-breadcrumb { max-width: 1100px; margin: 0 auto; padding: 24px 20px 0; }
  .iwj-ag-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; }
  .iwj-ag-breadcrumb a:hover { color: var(--primary-green); }

  .iwj-ag-hero { max-width: 760px; margin: 0 auto; padding: 50px 20px 60px; text-align: center; }
  .iwj-ag-hero-eyebrow { font-family: var(--font-heading); font-size: 0.8rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--primary-green); margin-bottom: 16px; }
  .iwj-ag-hero h1 { font-size: 2.2rem; font-weight: 800; line-height: 1.2; margin-bottom: 18px; letter-spacing: -0.5px; }
  .iwj-ag-hero p { font-size: 1.1rem; color: var(--text-muted); }

  .iwj-ag-section { max-width: 1100px; margin: 0 auto; padding: 20px 20px 60px; }
  .iwj-ag-section-title { font-size: 1.6rem; margin-bottom: 8px; text-align: center; }
  .iwj-ag-section-note { text-align: center; color: var(--text-muted); font-size: 0.95rem; margin-bottom: 28px; }
  .iwj-ag-section-photo { width: 100%; max-width: 1100px; height: 240px; object-fit: cover; border-radius: 10px; display: block; margin: 0 auto 36px; }
  .iwj-ag-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 22px; }

  .iwj-ag-card { padding: 24px 22px; border-radius: 10px; background: var(--bg-cream); border-top: 4px solid var(--primary-green); display: flex; flex-direction: column; }
  .iwj-ag-card h3 { font-size: 1rem; margin-bottom: 8px; }
  .iwj-ag-card p { font-size: 0.88rem; color: var(--text-muted); margin-bottom: 18px; flex-grow: 1; }
  .iwj-ag-btn { display: inline-block; padding: 10px 18px; border-radius: 6px; font-family: var(--font-heading); font-weight: 700; text-decoration: none; font-size: 0.8rem; background-color: var(--primary-green); color: var(--white); transition: background 0.2s; align-self: flex-start; }
  .iwj-ag-btn:hover { background-color: var(--primary-navy); }

  .iwj-ag-section.iwj-ag-lifestage .iwj-ag-card { border-top-color: var(--accent-teal); }

  .iwj-ag-disclaimer-wrap { max-width: 640px; margin: 20px auto 70px; text-align: center; padding: 0 20px; }
  .iwj-ag-disclaimer-note { font-size: 0.8rem; color: var(--text-muted); }
  .iwj-ag-disclaimer-note a { color: var(--primary-green); }

  @media (max-width: 980px) {
    .iwj-ag-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 560px) {
    .iwj-ag-grid { grid-template-columns: 1fr; }
    .iwj-ag-hero h1 { font-size: 1.7rem; }
  }
</style>

<div class="iwj-ag-page">

  <div class="iwj-ag-breadcrumb"><a href="/patient-power-pack/">&larr; Back to the Patient Power Pack</a></div>

  <section class="iwj-ag-hero">
    <div class="iwj-ag-hero-eyebrow">Patient Power Pack</div>
    <h1>Guides for Every Body, Every Stage</h1>
    <p>Twelve print-ready advocacy sheets &mdash; organized by health topic and by life stage &mdash; because every appointment is different, and so is every body walking into one.</p>
  </section>

  <section class="iwj-ag-section iwj-ag-topic">
    <h2 class="iwj-ag-section-title">By Health Topic</h2>
    <p class="iwj-ag-section-note">Scripts and questions built around a specific condition or concern.</p>
    <img class="iwj-ag-section-photo" src="https://placehold.co/1100x480/1C3A2A/FAF8F4?text=By+Health+Topic" alt="Placeholder — By Health Topic section photo">
    <div class="iwj-ag-grid">
      <div class="iwj-ag-card">
        <h3>Menopause &amp; Perimenopause</h3>
        <p>You are the expert on your body. Use this to guide your care.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Menopause_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Men's Health</h3>
        <p>Your body's check-engine lights, translated.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Mens_Health_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Mental Health</h3>
        <p>Your mind and body are one system.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Mental_Health_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Female Health</h3>
        <p>Your pain is data, not drama.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Female_Health_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Cancer Care</h3>
        <p>Clarity and partnership, every step.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Cancer_Care_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Heart Disease</h3>
        <p>Know your numbers before they become an emergency.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Heart_Disease_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Diabetes</h3>
        <p>Your plan should move with you.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Diabetes_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
    </div>
  </section>

  <section class="iwj-ag-section iwj-ag-lifestage">
    <h2 class="iwj-ag-section-title">By Life Stage</h2>
    <p class="iwj-ag-section-note">Advocacy looks different at every age &mdash; these are built for exactly where you are.</p>
    <img class="iwj-ag-section-photo" src="https://placehold.co/1100x480/4DAEAF/0A1F44?text=By+Life+Stage" alt="Placeholder — By Life Stage section photo">
    <div class="iwj-ag-grid">
      <div class="iwj-ag-card">
        <h3>Children's Health</h3>
        <p>Advocating for the patient who can't yet advocate for themselves.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Childrens_Health_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Teen Health</h3>
        <p>Your questions matter, starting now.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Teen_Health_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Young Adults</h3>
        <p>You're not too young for this.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Young_Adults_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Adults</h3>
        <p>Your health can't wait for a slower season.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Adults_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
      <div class="iwj-ag-card">
        <h3>Seniors</h3>
        <p>Aging is not a diagnosis.</p>
        <a href="https://iwosanjourney.com/wp-content/uploads/2026/09/Seniors_Advocacy_Sheet.pdf" target="_blank" rel="noopener" class="iwj-ag-btn">Download PDF</a>
      </div>
    </div>
  </section>

  <div class="iwj-ag-disclaimer-wrap">
    <p class="iwj-ag-disclaimer-note">These sheets support conversations with your provider &mdash; they do not replace professional medical advice. See our <a href="/medical-disclaimer/">Medical Disclaimer</a>.</p>
  </div>

</div>

<?php get_footer(); ?>
