<?php
/**
 * Template Name: Iwosan Live Events (Experiences > Live Events)
 * Description: Custom coded Live Events & Experiences page for Iwosan Journey's
 */

get_header();
?>

<!-- ============================================
     LIVE EVENTS — Experiences > Live Events
     Own custom masthead/hero (not .ij-page-banner), matching the Patient Power
     Pack hub / Medical Travel pattern. The .iwj-le-masthead below is a styled
     div, NOT a <header> element — the real Kadence <header> already exists
     from get_header(), and an unscoped `header { ... }` CSS rule would
     silently override it site-wide (same fix as the Menopause page).
     ============================================ -->
<style>
  .iwj-le-page {
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
  .iwj-le-page * { box-sizing: border-box; }
  .iwj-le-page h1, .iwj-le-page h2, .iwj-le-page h3, .iwj-le-page h4 { font-family: var(--font-heading); font-weight: 600; color: var(--primary-navy); }

  /* WordPress core converts the pin/plane/laptop emoji below into
     <img class="emoji"> (s.w.org twemoji SVGs). This theme's own CSS wins
     the cascade over WP's default 1em sizing, so they render at native
     size (300px+) instead of inline with the text. Force it back. */
  .iwj-le-page img.emoji {
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

  .iwj-le-masthead {
    background-color: var(--primary-navy);
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .iwj-le-masthead h1 { color: var(--bg-cream); font-size: 1.5rem; letter-spacing: -0.5px; margin: 0; }

  .iwj-le-hero {
    background: linear-gradient(to bottom right, rgba(10, 31, 68, 0.85), rgba(28, 58, 42, 0.85)), url('https://iwosanjourney.com/wp-content/uploads/2026/08/Women-talking-on-bench.avif') center/cover no-repeat;
    padding: 120px 20px;
    text-align: center;
    color: var(--white);
  }
  .iwj-le-hero h1 { color: var(--bg-cream); font-size: 3.5rem; margin-bottom: 20px; letter-spacing: -1px; font-weight: 800; line-height: 1.1; }
  .iwj-le-hero p { font-size: 1.25rem; max-width: 800px; margin: 0 auto 30px auto; color: #E2E8F0; }
  .iwj-le-accent-bar { width: 80px; height: 4px; background-color: var(--accent-gold); margin: 0 auto 30px auto; }

  .iwj-le-section-wrapper { padding: 80px 20px; max-width: 1200px; margin: 0 auto; }
  .iwj-le-section-header { text-align: center; margin-bottom: 60px; }
  .iwj-le-section-header h2 { font-size: 2.5rem; margin-bottom: 15px; }
  .iwj-le-section-header p { font-size: 1.1rem; color: var(--text-muted); max-width: 700px; margin: 0 auto; }

  .iwj-le-events-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px; margin-bottom: 80px; }
  .iwj-le-event-card {
    background: var(--white); border-radius: 12px; overflow: hidden; box-shadow: 0 15px 35px rgba(10, 31, 68, 0.06);
    border: 1px solid var(--border-light); display: flex; flex-direction: column; transition: transform 0.3s ease;
  }
  .iwj-le-event-card:hover { transform: translateY(-8px); }

  .iwj-le-event-image { height: 220px; background-size: cover; background-position: center; position: relative; }
  .iwj-le-event-badge {
    position: absolute; top: 20px; right: 20px; background-color: var(--accent-gold); color: var(--primary-navy);
    font-family: var(--font-heading); font-weight: 700; font-size: 0.75rem; text-transform: uppercase;
    letter-spacing: 1px; padding: 6px 12px; border-radius: 20px;
  }

  .iwj-le-event-content { padding: 30px; flex-grow: 1; display: flex; flex-direction: column; }
  .iwj-le-event-content h3 { font-size: 1.5rem; margin-bottom: 10px; line-height: 1.2; }
  .iwj-le-event-location {
    font-size: 0.9rem; color: var(--accent-teal); font-family: var(--font-heading); font-weight: 600;
    text-transform: uppercase; margin-bottom: 15px; display: flex; align-items: center; gap: 5px;
  }
  .iwj-le-event-content p { color: var(--text-muted); margin-bottom: 25px; flex-grow: 1; }

  .iwj-le-feature-list { list-style: none; margin-bottom: 30px; border-top: 1px solid var(--border-light); padding-top: 20px; }
  .iwj-le-feature-list li { display: flex; align-items: flex-start; margin-bottom: 12px; font-size: 0.95rem; }
  .iwj-le-feature-list li span { color: var(--primary-green); font-weight: bold; margin-right: 8px; }

  .iwj-le-btn {
    display: inline-block; text-align: center; padding: 14px 24px; border-radius: 6px; font-family: var(--font-heading);
    font-weight: 600; text-decoration: none; transition: all 0.2s; cursor: pointer; border: none; width: 100%;
  }
  .iwj-le-btn-primary { background-color: var(--primary-navy); color: var(--white); }
  .iwj-le-btn-primary:hover { background-color: var(--primary-green); }
  .iwj-le-btn-outline { background-color: transparent; color: var(--primary-navy); border: 2px solid var(--primary-navy); }
  .iwj-le-btn-outline:hover { background-color: var(--bg-cream); }

  .iwj-le-community-banner {
    background-color: var(--primary-green); color: var(--bg-cream); border-radius: 16px; padding: 60px 40px;
    display: flex; align-items: center; gap: 40px; margin-top: 40px; box-shadow: 0 20px 40px rgba(28, 58, 42, 0.15);
  }
  .iwj-le-community-content { flex: 2; }
  .iwj-le-community-content h2 { color: var(--accent-gold); font-size: 2.2rem; margin-bottom: 20px; }
  .iwj-le-community-content p { font-size: 1.1rem; margin-bottom: 20px; color: #E2E8F0; }

  .iwj-le-community-stats {
    flex: 1; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 12px;
  }
  .iwj-le-community-stats ul { list-style: none; }
  .iwj-le-community-stats li {
    margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    font-family: var(--font-heading); font-size: 0.95rem;
  }
  .iwj-le-community-stats li:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }

  @media (max-width: 900px) {
    .iwj-le-community-banner { flex-direction: column; padding: 40px 20px; }
    .iwj-le-hero h1 { font-size: 2.8rem; }
  }
</style>

<div class="iwj-le-page">

  <div class="iwj-le-masthead">
    <h1>Iwosan Journeys</h1>
    <span style="font-family: var(--font-heading); font-size: 0.85rem; text-transform: uppercase; color: var(--bg-cream); letter-spacing: 1px;">Live Events &amp; Experiences</span>
  </div>

  <section class="iwj-le-hero">
    <div class="iwj-le-accent-bar"></div>
    <h1>Gathering to Heal, Connect, and Advocate.</h1>
    <p>Healing happens in community. Join our high-energy summits, restorative global retreats, and grassroots advocacy workshops designed to equip you with the tools for health sovereignty.</p>
  </section>

  <main class="iwj-le-section-wrapper">

    <div class="iwj-le-section-header">
      <h2>Upcoming Experiences</h2>
      <p>Whether you need to learn how to advocate in the doctor's office, or you simply need a passport and a week of profound rest, we have a space curated for you.</p>
    </div>

    <div class="iwj-le-events-grid">

      <!-- EVENT 1: Summits -->
      <div class="iwj-le-event-card">
        <div class="iwj-le-event-image" style="background-image: url('https://iwosanjourney.com/wp-content/uploads/2026/08/BLK-Women-talking.avif');">
          <div class="iwj-le-event-badge">Early 2027</div>
        </div>
        <div class="iwj-le-event-content">
          <div class="iwj-le-event-location">&#128205; Cleveland, OH &amp; Virtual</div>
          <h3>The &ldquo;Meeting Me&rdquo; Live Summits</h3>
          <p>High-energy, educational mini-conferences where our digital community comes together face-to-face. Learn directly from specialists and build a lasting local support system.</p>
          <ul class="iwj-le-feature-list">
            <li><span>&#10003;</span> Expert Panels on hormone health &amp; mental wellness.</li>
            <li><span>&#10003;</span> Live Patient Power Pack walkthroughs.</li>
            <li><span>&#10003;</span> Interactive "Interview Your Doctor" role-play.</li>
          </ul>
          <a href="#" class="iwj-le-btn iwj-le-btn-primary">Join the Waitlist</a>
        </div>
      </div>

      <!-- EVENT 2: Retreats -->
      <div class="iwj-le-event-card">
        <div class="iwj-le-event-image" style="background-image: url('https://iwosanjourney.com/wp-content/uploads/2026/08/stacked-river-stones-scaled.jpg');">
          <div class="iwj-le-event-badge">Launching by End of 2027</div>
        </div>
        <div class="iwj-le-event-content">
          <div class="iwj-le-event-location">&#9992;&#65039; Ghana, Barbados, St. Lucia, Key West</div>
          <h3>Curated Healing Retreats</h3>
          <p>Brought to you by <em>Checked Bags and Good Vibes</em>. Intentional getaways designed with a singular focus: to help <strong>You Find You!</strong> We go wherever you need to go to heal. Launching by the end of 2027.</p>
          <ul class="iwj-le-feature-list">
            <li><span>&#10003;</span> Culturally immersive global destinations.</li>
            <li><span>&#10003;</span> Profound rest and burnout recovery focus.</li>
            <li><span>&#10003;</span> Safe, judgment-free peer connection.</li>
          </ul>
          <a href="#" class="iwj-le-btn iwj-le-btn-outline">Explore Destinations</a>
        </div>
      </div>

      <!-- EVENT 3: Virtual/Workshops -->
      <div class="iwj-le-event-card">
        <div class="iwj-le-event-image" style="background-image: url('https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
          <div class="iwj-le-event-badge">Dec 2026</div>
        </div>
        <div class="iwj-le-event-content">
          <div class="iwj-le-event-location">&#128187; Virtual &amp; Local Clinics</div>
          <h3>The JWG Academy &amp; Workshops</h3>
          <p>Step-by-step digital education and hands-on virtual classes. Because knowledge is the ultimate foundation of self-advocacy.</p>
          <ul class="iwj-le-feature-list">
            <li><span>&#10003;</span> Live "Symptom Translator" exercises.</li>
            <li><span>&#10003;</span> Masterclasses on recognizing medical gaslighting.</li>
            <li><span>&#10003;</span> Deep-dive modules into Medical Travel Prep.</li>
          </ul>
          <a href="#" class="iwj-le-btn iwj-le-btn-outline">View Course Library</a>
        </div>
      </div>

    </div>

    <!-- The Community Reach Commitment -->
    <div class="iwj-le-community-banner">
      <div class="iwj-le-community-content">
        <h2>You Don't Have to Start at a Summit.</h2>
        <p>Not everyone is ready to book a flight to a retreat, and that's exactly why the road here doesn't start there. It starts in your own neighborhood &mdash; a free class at your local community center, a one-day retreat down the street, a sliding-scale seat at a summit you'd have skipped otherwise.</p>
        <p>Every live experience we build has an on-ramp. Start small, start local, and let the bigger rooms find you when you're ready for them.</p>
        <div style="margin-top: 30px;">
           <span style="font-family: var(--font-heading); font-style: italic; font-size: 1.1rem; border-left: 3px solid var(--accent-gold); padding-left: 15px;">Healing happens in community &mdash; and community should never require a boarding pass to access.</span>
        </div>
      </div>
      <div class="iwj-le-community-stats">
        <ul>
          <li><strong>Free Wellness Classes:</strong> Brought directly into neighborhoods, schools, and houses of worship.</li>
          <li><strong>1-Day Community Retreats:</strong> Local healing experiences without the cost or travel barrier.</li>
          <li><strong>Sliding-Scale Admission:</strong> Community programming funded through JWG partnerships.</li>
        </ul>
        <a href="#" class="iwj-le-btn iwj-le-btn-primary" style="background-color: var(--accent-gold); color: var(--primary-navy); margin-top: 20px;">Sponsor a Community Event</a>
      </div>
    </div>

  </main>

</div>

<?php get_footer(); ?>
