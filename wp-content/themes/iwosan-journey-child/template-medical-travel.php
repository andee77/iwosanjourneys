<?php
/**
 * Template Name: Iwosan Medical Travel
 * Description: Custom coded Medical Travel page (Experiences > Medical Travel) for Iwosan Journey's
 */

get_header();
?>

<!-- ============================================
     MEDICAL TRAVEL — Experiences > Medical Travel
     Own custom hero (not .ij-page-banner), matching the Patient Power Pack
     hub pattern. Hero background is an intentional Unsplash placeholder;
     the two split-section images are real uploads, left at natural
     width/height scaling (no object-position crop math needed here).
     ============================================ -->
<style>
  .iwj-mt-page {
    --primary-navy: #0A1F44;
    --primary-green: #1C3A2A;
    --accent-gold: #C9A052;
    --accent-teal: #4DAEAF;
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
  .iwj-mt-page * { box-sizing: border-box; }
  .iwj-mt-page h1, .iwj-mt-page h2, .iwj-mt-page h3, .iwj-mt-page h4 { font-family: var(--font-heading); font-weight: 600; color: var(--primary-navy); }

  .iwj-mt-breadcrumb { max-width: 1200px; margin: 0 auto; padding: 18px 20px 0; }
  .iwj-mt-breadcrumb a { color: var(--text-muted); text-decoration: none; font-size: 0.9rem; font-family: var(--font-body); }
  .iwj-mt-breadcrumb a:hover { color: var(--accent-gold); }

  .iwj-mt-hero {
    background: linear-gradient(to right, rgba(10, 31, 68, 0.9), rgba(28, 58, 42, 0.7)), url('https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
    padding: 120px 20px;
    text-align: center;
    color: var(--white);
  }
  .iwj-mt-hero h1 { color: var(--bg-cream); font-size: 3.5rem; margin-bottom: 20px; letter-spacing: -0.5px; line-height: 1.1; }
  .iwj-mt-hero p { font-size: 1.25rem; max-width: 700px; margin: 0 auto 30px auto; color: #E2E8F0; }
  .iwj-mt-accent-bar { width: 80px; height: 4px; background-color: var(--accent-gold); margin: 0 auto 30px auto; }

  .iwj-mt-section-wrapper { padding: 80px 20px; max-width: 1200px; margin: 0 auto; }

  .iwj-mt-split-layout { display: flex; align-items: center; gap: 60px; margin-bottom: 80px; }
  .iwj-mt-split-layout.iwj-mt-reverse { flex-direction: row-reverse; }
  .iwj-mt-split-content { flex: 1; }
  .iwj-mt-split-content h2 { font-size: 2.2rem; margin-bottom: 20px; line-height: 1.2; }
  .iwj-mt-split-content h3 { font-size: 1.4rem; color: var(--primary-green); margin-bottom: 15px; margin-top: 30px; }
  .iwj-mt-split-content p { font-size: 1.1rem; color: var(--text-muted); margin-bottom: 20px; }

  .iwj-mt-split-image-container { flex: 1; position: relative; }
  .iwj-mt-split-image { width: 100%; height: auto; border-radius: 12px; box-shadow: 0 20px 40px rgba(10, 31, 68, 0.1); display: block; }
  .iwj-mt-image-accent {
    position: absolute; bottom: -20px; left: -20px; width: 150px; height: 150px;
    background-color: rgba(201, 160, 82, 0.1); border: 2px solid var(--accent-gold); border-radius: 12px; z-index: -1;
  }
  .iwj-mt-reverse .iwj-mt-image-accent { left: auto; right: -20px; }

  .iwj-mt-services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-top: 40px; }
  .iwj-mt-service-card { background: var(--white); padding: 30px; border-radius: 8px; border-top: 4px solid var(--accent-teal); box-shadow: 0 10px 20px rgba(0,0,0,0.03); }
  .iwj-mt-service-card h4 { font-size: 1.2rem; margin-bottom: 10px; }

  .iwj-mt-travel-section { margin-bottom: 80px; overflow: auto; }
  .iwj-mt-travel-float-image {
    float: left;
    width: 300px;
    max-width: 40%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 15px 30px rgba(10, 31, 68, 0.12);
    margin: 6px 30px 20px 0;
  }
  @media (max-width: 600px) {
    .iwj-mt-travel-float-image { float: none; width: 100%; max-width: 100%; margin: 0 0 20px; }
  }

  .iwj-mt-teaser-banner {
    background-color: var(--primary-navy); color: var(--bg-cream); text-align: center; padding: 60px 20px;
    border-radius: 12px; margin-top: 40px; position: relative; overflow: hidden;
  }
  .iwj-mt-teaser-banner::before {
    content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px;
    background: linear-gradient(90deg, var(--primary-green), var(--accent-gold), var(--accent-teal));
  }
  .iwj-mt-teaser-banner h2 { color: var(--white); font-size: 2.5rem; margin-bottom: 15px; }
  .iwj-mt-teaser-banner p { font-size: 1.2rem; color: #CBD5E1; max-width: 600px; margin: 0 auto; }

  .iwj-mt-coming-soon-badge {
    display: inline-block; background-color: var(--accent-gold); color: var(--primary-navy);
    font-family: var(--font-heading); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
    padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; margin-bottom: 20px;
  }

  @media (max-width: 900px) {
    .iwj-mt-split-layout, .iwj-mt-split-layout.iwj-mt-reverse { flex-direction: column; gap: 40px; }
    .iwj-mt-hero h1 { font-size: 2.5rem; }
  }
</style>

<div class="iwj-mt-page">

  <div class="iwj-mt-breadcrumb"><a href="/experiences/">&larr; Back to Experiences</a></div>

  <section class="iwj-mt-hero">
    <div class="iwj-mt-accent-bar"></div>
    <h1>Healing Beyond Borders</h1>
    <p>Discover world-class healthcare, seamless travel logistics, and restorative environments designed to heal both body and spirit.</p>
  </section>

  <main class="iwj-mt-section-wrapper">

    <div class="iwj-mt-split-layout">
      <div class="iwj-mt-split-content">
        <h2>What is Medical Tourism?</h2>
        <p>Medical tourism is no longer a luxury reserved for a few; it is a vital pathway to health sovereignty. It means traveling outside of your local healthcare system to access high-quality, specialized care on your own timeline.</p>
        <p>From routine preventative procedures to complex health issues, world-class, JCI-accredited facilities are ready to serve you. And you don't always have to cross an ocean&mdash;excellent options are as close as <strong>Mexico and Canada</strong>.</p>

        <div class="iwj-mt-services-grid">
          <div class="iwj-mt-service-card">
            <h4 style="color: var(--primary-navy);">Accessible Procedures</h4>
            <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 0;">Comprehensive dental work, cosmetic enhancements, and routine executive health check-ups.</p>
          </div>
          <div class="iwj-mt-service-card" style="border-top-color: var(--primary-green);">
            <h4 style="color: var(--primary-navy);">Complex Care</h4>
            <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 0;">Specialized surgeries, advanced fertility treatments, and chronic illness management.</p>
          </div>
        </div>
      </div>
      <div class="iwj-mt-split-image-container">
        <img src="https://iwosanjourney.com/wp-content/uploads/2026/08/hospital-scaled.png" alt="Modern, calming medical consultation" class="iwj-mt-split-image">
        <div class="iwj-mt-image-accent"></div>
      </div>
    </div>

    <div style="background-color: var(--white); padding: 60px; border-radius: 12px; border: 1px solid var(--border-light); margin-bottom: 80px; box-shadow: 0 10px 30px rgba(0,0,0,0.02);">
      <h2 style="text-align: center; margin-bottom: 40px; font-size: 2.2rem;">How We Navigate The Journey With You</h2>
      <div style="display: flex; gap: 40px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 250px;">
          <h3>The Logistics</h3>
          <p>Navigating international healthcare can feel overwhelming, but you won't do it alone. Through our experiential arm, <a href="https://bagsandvibes.com/" style="color: var(--primary-green); font-weight: 700; text-decoration: underline;" target="_blank" rel="noopener"><em>Checked Bags and Good Vibes</em></a>, we manage the entire logistical process. From booking your flights and securing comfortable recovery accommodations to arranging local transport, we ensure your only job is to heal.</p>
        </div>
        <div style="flex: 1; min-width: 250px;">
          <h3 style="color: var(--accent-gold);">The Advocacy</h3>
          <p>We are your dedicated support system on the ground. We provide the research, help you prepare clinical briefings for your international doctors, and act as your advocate. We bridge the communication gap so that your voice, your pain, and your consent are always respected.</p>
          <p style="margin-bottom: 0;"><a href="https://iwosanjourney.com/patient-power-pack/briefing-builder/" style="font-family: var(--font-heading); font-weight: 700; color: var(--primary-navy); text-decoration: none; border-bottom: 2px solid var(--accent-gold);">Build your clinical briefing &rarr;</a></p>
        </div>
      </div>
    </div>

    <div class="iwj-mt-travel-section iwj-mt-split-content">
      <h2>Travel as a Healing Experience</h2>
      <img src="https://iwosanjourney.com/wp-content/uploads/2026/08/man-standing-on-cliff-water-scaled.jpg" alt="Peaceful beach retreat setting" class="iwj-mt-travel-float-image">
      <p>True healing rarely happens in a sterile clinic alone. There is profound, documented medicine in changing your environment. Stepping away from the daily mental load of your household, your job, and your routine allows your nervous system to finally exhale.</p>
      <p>Travel is healing for the body and the spirit. It offers the quiet space required to process transition, recover from burnout, and rebuild your physical strength.</p>

      <h3>Curated Retreats</h3>
      <p>Before the end of 2027, Iwosan Journeys will begin curating exclusive Healing and Relaxing travel experiences around the globe &mdash; part of the same rollout as Iwosan Medical, our full global medical travel portal.</p>
      <p>Our inaugural series of retreats are designed with a singular, powerful focus: to help <strong>You Find You!</strong> Reclaim your identity, rest deeply, and reconnect with your inner voice in some of the most restorative destinations on earth.</p>
    </div>

    <div class="iwj-mt-teaser-banner">
      <span class="iwj-mt-coming-soon-badge">All of This, Live by End of 2027</span>
      <h2>The Future of Global Care</h2>
      <p>A new standard of health sovereignty is on the horizon. Please stay tuned for exclusive updates on the official launch of <strong>Iwosan Medical</strong> &mdash; your premier portal for global medical travel and curated recovery, arriving in full before the end of 2027.</p>
    </div>

  </main>

</div>

<?php get_footer(); ?>
