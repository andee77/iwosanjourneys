<?php
/**
 * Template Name: Iwosan Contact Us
 * Description: Custom coded Contact Us page for Iwosan Journey's
 *
 * Contact form is WPForms form ID 388 (Full Name, Email Address, department
 * dropdown with 5 options matching the cards below, Your Message), with
 * conditional notification rules routing each department to its matching
 * inbox.
 */

get_header();
?>

<!-- ============================================
     CONTACT US
     Own custom hero (not .ij-page-banner), matching the established pattern
     for pages with their own polished custom design (Patient Power Pack hub,
     Medical Travel, Live Events).
     ============================================ -->
<style>
  .iwj-contact-page {
    --primary-navy: #0A1F44;
    --primary-green: #1C3A2A;
    --accent-gold: #C9A052;
    --accent-teal: #4DAEAF;
    --earth-brown: #8B5E3C;
    --bg-cream: #FAF8F4;
    --white: #FFFFFF;
    --text-main: #0A1F44;
    --text-muted: #4A5568;
    --border-light: #E2E8F0;
    --font-heading: 'Montserrat', sans-serif;
    --font-body: 'Lato', sans-serif;
    background-color: var(--bg-cream);
    color: var(--text-main);
    font-family: var(--font-body);
    line-height: 1.7;
    -webkit-font-smoothing: antialiased;
  }
  .iwj-contact-page * { box-sizing: border-box; }
  .iwj-contact-page h1, .iwj-contact-page h2, .iwj-contact-page h3, .iwj-contact-page h4 { font-family: var(--font-heading); font-weight: 600; color: var(--primary-navy); }
  .iwj-contact-page a { text-decoration: none; color: var(--accent-teal); font-weight: 700; transition: color 0.2s ease; }
  .iwj-contact-page a:hover { color: var(--primary-green); }

  .iwj-contact-breadcrumb { max-width: 1200px; margin: 0 auto; padding: 18px 20px 0; }
  .iwj-contact-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; font-family: var(--font-body); font-weight: 400; }
  .iwj-contact-breadcrumb a:hover { color: var(--accent-gold); }

  .iwj-contact-hero {
    background: linear-gradient(to bottom right, rgba(10, 31, 68, 0.9), rgba(28, 58, 42, 0.85)), url('https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
    padding: 100px 20px;
    text-align: center;
    color: var(--white);
  }
  .iwj-contact-hero h1 { color: var(--bg-cream); font-size: 3.5rem; margin-bottom: 20px; letter-spacing: -1px; font-weight: 800; line-height: 1.1; }
  .iwj-contact-hero p { font-size: 1.25rem; max-width: 700px; margin: 0 auto; color: #E2E8F0; }
  .iwj-contact-accent-bar { width: 80px; height: 4px; background-color: var(--accent-gold); margin: 0 auto 30px auto; }

  .iwj-contact-main-container {
    max-width: 1200px; margin: -40px auto 80px auto; padding: 0 20px;
    display: flex; gap: 40px; position: relative; z-index: 10;
  }
  .iwj-contact-info-section { flex: 1; }
  .iwj-contact-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }

  .iwj-contact-card {
    background: var(--white); padding: 30px; border-radius: 12px; box-shadow: 0 10px 30px rgba(10, 31, 68, 0.08);
    border-top: 4px solid var(--accent-gold); display: flex; flex-direction: column;
  }
  .iwj-contact-card:nth-child(2) { border-top-color: var(--primary-green); }
  .iwj-contact-card:nth-child(3) { border-top-color: var(--accent-teal); }
  .iwj-contact-card:nth-child(4) { border-top-color: var(--primary-navy); }
  .iwj-contact-card:nth-child(5) { border-top-color: var(--earth-brown); }

  /* WordPress converts the raw pictographic emoji below (🌍🛡️✨✈️📣✉️) into
     <img class="emoji"> twemoji SVGs, and this theme's cascade overrides the
     default 1em sizing (confirmed live bug on the Live Events page). Restore
     WP's own default emoji sizing here, scoped to this page. */
  .iwj-contact-page img.emoji {
    height: 1em !important;
    width: 1em !important;
    margin: 0 .05em 0 .1em !important;
    vertical-align: -0.1em !important;
    border: none !important;
    box-shadow: none !important;
    background: none !important;
    padding: 0 !important;
    display: inline !important;
  }

  .iwj-contact-card-icon { font-size: 2rem; margin-bottom: 15px; }
  .iwj-contact-card h3 { font-size: 1.3rem; margin-bottom: 10px; line-height: 1.2; }
  .iwj-contact-card p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 15px; flex-grow: 1; }

  .iwj-contact-email-link {
    display: inline-flex; align-items: center; gap: 8px; font-family: var(--font-heading); font-size: 0.9rem;
    background: var(--bg-cream); padding: 10px 15px; border-radius: 6px; border: 1px solid var(--border-light);
    word-break: break-all;
  }

  .iwj-contact-form-section {
    flex: 1; background: var(--white); padding: 40px; border-radius: 12px;
    box-shadow: 0 15px 40px rgba(10, 31, 68, 0.08); border: 1px solid var(--border-light);
  }
  .iwj-contact-form-section h2 { font-size: 2rem; margin-bottom: 10px; }
  .iwj-contact-form-section > p { color: var(--text-muted); margin-bottom: 30px; font-weight: 400; }

  /* ============================================
     WPForms style override — scoped to this page, targeting WPForms' own
     default markup/classes so the embedded form matches the page's
     navy/gold/teal Montserrat+Lato system instead of WPForms' generic look.
     ============================================ */
  .iwj-contact-form-section .wpforms-container { margin: 0 !important; }
  .iwj-contact-form-section .wpforms-field { margin-bottom: 20px !important; padding: 0 !important; }
  .iwj-contact-form-section .wpforms-field-label {
    display: block !important; font-family: var(--font-heading) !important; font-size: 0.9rem !important;
    font-weight: 600 !important; margin-bottom: 8px !important; color: var(--primary-navy) !important;
  }
  .iwj-contact-form-section .wpforms-required-label { color: var(--accent-teal) !important; }
  .iwj-contact-form-section input[type=text],
  .iwj-contact-form-section input[type=email],
  .iwj-contact-form-section select,
  .iwj-contact-form-section textarea {
    width: 100% !important; padding: 12px 15px !important; border: 1px solid var(--border-light) !important;
    border-radius: 6px !important; font-family: var(--font-body) !important; font-size: 1rem !important;
    transition: border-color 0.2s, box-shadow 0.2s; background: var(--white) !important; color: var(--text-main) !important;
    max-width: none !important;
  }
  .iwj-contact-form-section input[type=text]:focus,
  .iwj-contact-form-section input[type=email]:focus,
  .iwj-contact-form-section select:focus,
  .iwj-contact-form-section textarea:focus {
    outline: none !important; border-color: var(--accent-teal) !important; box-shadow: 0 0 0 3px rgba(77, 174, 175, 0.1) !important;
  }
  .iwj-contact-form-section textarea { min-height: 120px !important; resize: vertical !important; }
  .iwj-contact-form-section .wpforms-field-name .wpforms-field-row { display: flex !important; gap: 15px !important; }
  .iwj-contact-form-section .wpforms-field-name-first,
  .iwj-contact-form-section .wpforms-field-name-last { flex: 1 !important; }
  .iwj-contact-form-section .wpforms-submit-container { margin-top: 0 !important; }
  .iwj-contact-form-section button.wpforms-submit {
    width: 100% !important; padding: 15px !important; background-color: var(--primary-navy) !important; color: var(--white) !important;
    border: none !important; border-radius: 6px !important; font-family: var(--font-heading) !important; font-size: 1.1rem !important;
    font-weight: 600 !important; cursor: pointer; transition: background-color 0.2s;
  }
  .iwj-contact-form-section button.wpforms-submit:hover { background-color: var(--primary-green) !important; }
  .iwj-contact-form-section .wpforms-error-container,
  .iwj-contact-form-section label.wpforms-error {
    color: #B91C1C !important; font-size: 0.85rem !important; margin-top: 6px !important; font-weight: 400 !important;
  }

  .iwj-contact-community-callout {
    text-align: center; margin-top: 60px; padding: 40px; background: var(--primary-green);
    border-radius: 12px; color: var(--white);
  }
  .iwj-contact-community-callout h2 { color: var(--accent-gold); }
  .iwj-contact-community-callout p { font-weight: 400; }
  .iwj-contact-substack-btn {
    display: inline-block; background: var(--accent-gold); color: var(--primary-navy); padding: 12px 30px;
    border-radius: 6px; font-family: var(--font-heading); text-transform: uppercase; letter-spacing: 1px; font-weight: 700;
  }
  .iwj-contact-substack-btn:hover { color: var(--primary-navy); opacity: 0.85; }

  @media (max-width: 900px) {
    .iwj-contact-main-container { flex-direction: column; }
    .iwj-contact-hero h1 { font-size: 2.8rem; }
  }
</style>

<div class="iwj-contact-page">

  <div class="iwj-contact-breadcrumb"><a href="/">&larr; Back to Home</a></div>

  <section class="iwj-contact-hero">
    <div class="iwj-contact-accent-bar"></div>
    <h1>We are here for the journey.</h1>
    <p>Whether you need support navigating the medical system, have questions about our upcoming retreats, or want to partner with us, our team is ready to connect.</p>
  </section>

  <main class="iwj-contact-main-container">

    <div class="iwj-contact-info-section">
      <div class="iwj-contact-grid">

        <!-- General Info -->
        <div class="iwj-contact-card">
          <div class="iwj-contact-card-icon">&#127760;</div>
          <h3>General &amp; Partnerships</h3>
          <p>For brand inquiries, media requests, or questions about partnering with the JourneyWell Global ecosystem.</p>
          <a href="mailto:Info@journeywellglobal.com" class="iwj-contact-email-link">
            &#9993;&#65039; Info@journeywellglobal.com
          </a>
        </div>

        <!-- Support / Advocacy -->
        <div class="iwj-contact-card">
          <div class="iwj-contact-card-icon">&#128737;&#65039;</div>
          <h3>Advocacy &amp; Tool Support</h3>
          <p>Need help with the Patient Power Pack, web apps, or logging into your upcoming Iwosan Journeys portal?</p>
          <a href="mailto:Support@iwosanjourney.com" class="iwj-contact-email-link">
            &#9993;&#65039; Support@iwosanjourney.com
          </a>
        </div>

        <!-- MenoWell -->
        <div class="iwj-contact-card">
          <div class="iwj-contact-card-icon">&#10024;</div>
          <h3>MenoWell Sanctuary</h3>
          <p>For all questions regarding the menopause transition, partner playbooks, and the MenoWell platform.</p>
          <a href="mailto:MenoWell@journeywellglobal.com" class="iwj-contact-email-link">
            &#9993;&#65039; MenoWell@journeywellglobal.com
          </a>
        </div>

        <!-- Medical Travel -->
        <div class="iwj-contact-card">
          <div class="iwj-contact-card-icon">&#9992;&#65039;</div>
          <h3>Medical Travel &amp; Retreats</h3>
          <p>Reach out to Checked Bags &amp; Good Vibes for logistics, curating your healing retreat, or global medical care coordination.</p>
          <a href="mailto:travel@iwosanjourney.com" class="iwj-contact-email-link">
            &#9993;&#65039; travel@iwosanjourney.com
          </a>
        </div>

        <!-- Press & Media -->
        <div class="iwj-contact-card">
          <div class="iwj-contact-card-icon">&#128227;</div>
          <h3>Press &amp; Media</h3>
          <p>For press inquiries, media requests, and collaboration opportunities with JourneyWell Global or any of our brands.</p>
          <a href="mailto:media@iwosanjourney.com" class="iwj-contact-email-link">
            &#9993;&#65039; media@iwosanjourney.com
          </a>
        </div>

      </div>
    </div>

    <div class="iwj-contact-form-section">
      <h2>Send a Message</h2>
      <p>Fill out the form below and we will route your inquiry to the correct department within 48 hours.</p>

      <?php echo do_shortcode( '[wpforms id="388"]' ); ?>
    </div>

  </main>

  <div style="max-width: 1200px; margin: 0 auto 80px auto; padding: 0 20px;">
    <div class="iwj-contact-community-callout">
      <h2>Join the Community</h2>
      <p style="font-size: 1.1rem; margin: 15px 0 25px 0;">Don't miss a single update. Subscribe to our newsletter to receive the Patient Power Pack tools sent directly to your inbox.</p>
      <a href="https://iwosanjourneys.substack.com" target="_blank" rel="noopener" class="iwj-contact-substack-btn">Subscribe on Substack</a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
