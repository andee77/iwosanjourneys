<?php
/**
 * Template Name: Iwosan Menopause (MenoWell Explainer Hub)
 * Description: Custom coded Menopause page for Iwosan Journey's — deliberately uses
 * MenoWell's own branding (Playfair Display + Lato, charcoal/coral/sand palette)
 * instead of Iwosan's tokens, as a "you're entering MenoWell" visual signal.
 */

get_header();
?>

<!-- ============================================
     MENOPAUSE — MenoWell Explainer Hub
     Intentionally off-brand from the rest of the site (see template docblock).
     The .mw-masthead below is a styled div, NOT a <header> element — the real
     Kadence <header> already exists from get_header(), and an unscoped
     `header { ... }` CSS rule would silently override it site-wide.
     ============================================ -->
<style>
  .mw-page {
    --mw-primary: #2C3E3A;
    --mw-accent-coral: #D98871;
    --mw-accent-sand: #E3D9C6;
    --mw-bg-cream: #FAF9F6;
    --mw-text-main: #1A1A1A;
    --mw-text-muted: #595959;
    --mw-border: #E0DCD3;
    --mw-font-heading: 'Playfair Display', serif;
    --mw-font-body: 'Lato', sans-serif;
    background-color: var(--mw-bg-cream);
    color: var(--mw-text-main);
    font-family: var(--mw-font-body);
    line-height: 1.7;
    -webkit-font-smoothing: antialiased;
  }
  .mw-page * { box-sizing: border-box; }
  .mw-page h1, .mw-page h2, .mw-page h3, .mw-page h4 { font-family: var(--mw-font-heading); color: var(--mw-primary); font-weight: 600; }
  .mw-page a { text-decoration: none; color: inherit; transition: color 0.3s ease; }

  .mw-masthead {
    padding: 30px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid var(--mw-border);
    background-color: #fff;
  }
  .mw-logo { font-family: var(--mw-font-heading); font-size: 2rem; font-weight: 700; color: var(--mw-primary); }
  .mw-logo span { color: var(--mw-accent-coral); font-style: italic; }
  .mw-subsidiary-text { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: var(--mw-text-muted); font-weight: 700; }

  .mw-hero { text-align: center; padding: 100px 20px 60px; max-width: 900px; margin: 0 auto; }
  .mw-hero h1 { font-size: 3.8rem; line-height: 1.1; margin-bottom: 24px; color: var(--mw-primary); }
  .mw-hero p { font-size: 1.25rem; color: var(--mw-text-muted); max-width: 700px; margin: 0 auto 30px; }
  .mw-divider { height: 3px; width: 80px; background-color: var(--mw-accent-coral); margin: 0 auto 40px; }

  .mw-routing-banner { background-color: var(--mw-accent-sand); padding: 40px 20px; text-align: center; border-top: 1px solid var(--mw-border); border-bottom: 1px solid var(--mw-border); }
  .mw-routing-content { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; gap: 20px; }
  .mw-routing-banner h2 { font-size: 2rem; }
  .mw-btn-quiz {
    display: inline-block; background-color: var(--mw-primary); color: #fff; padding: 16px 32px;
    font-family: var(--mw-font-heading); font-size: 1.2rem; font-style: italic; border-radius: 4px;
    transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(44, 62, 58, 0.15);
  }
  .mw-btn-quiz:hover { background-color: var(--mw-accent-coral); transform: translateY(-2px); color: #fff; }

  .mw-pillars-section { padding: 100px 20px; max-width: 1200px; margin: 0 auto; }
  .mw-pillars-section > h2 { text-align: center; font-size: 2.8rem; margin-bottom: 60px; }
  .mw-pillars-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }

  @media (min-width: 1024px) {
    .mw-pillar-card:nth-child(5) { grid-column: 2 / 3; }
  }

  .mw-pillar-card {
    background: #fff; border: 1px solid var(--mw-border); padding: 34px 30px 30px; border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative; overflow: hidden;
  }
  .mw-pillar-card:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(44, 62, 58, 0.08); border-color: var(--mw-accent-coral); }
  .mw-pillar-card::before {
    content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 4px;
    background-color: var(--mw-accent-sand); transition: background-color 0.3s ease;
  }
  .mw-pillar-card:hover::before { background-color: var(--mw-accent-coral); }

  .mw-pillar-number {
    font-family: var(--mw-font-heading); font-size: 4rem; color: var(--mw-accent-sand);
    position: absolute; top: -10px; right: 20px; line-height: 1; opacity: 0.4; z-index: 0;
  }
  .mw-pillar-card-content { position: relative; z-index: 1; }
  .mw-pillar-card h3 { font-size: 1.8rem; margin-bottom: 15px; display: inline-block; line-height: 1.2; }
  .mw-pillar-card a.mw-pillar-title-link { display: block; color: var(--mw-primary); text-decoration: none; margin-bottom: 15px; }
  .mw-pillar-card a.mw-pillar-title-link:hover h3 { color: var(--mw-accent-coral); }
  .mw-pillar-card p { color: var(--mw-text-muted); font-size: 1.05rem; margin-bottom: 0; }

  .mw-bottom-action { text-align: center; padding: 40px 20px 80px; }

  .mw-footer-links { margin-bottom: 30px; display: flex; justify-content: center; gap: 30px; font-size: 0.9rem; color: var(--mw-text-muted); }
  .mw-footer-links a:hover { color: var(--mw-accent-coral); }

  .mw-btn-home {
    display: inline-block; background-color: transparent; color: var(--mw-primary); padding: 12px 30px;
    font-family: var(--mw-font-body); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;
    font-weight: 700; border-radius: 4px; border: 2px solid var(--mw-primary); transition: all 0.3s ease; margin-top: 20px;
  }
  .mw-btn-home:hover { background-color: var(--mw-primary); color: #fff; }

  @media (max-width: 768px) {
    .mw-hero h1 { font-size: 2.8rem; }
    .mw-routing-banner h2 { font-size: 1.6rem; }
    .mw-pillars-grid { grid-template-columns: 1fr; }
    .mw-masthead { flex-direction: column; gap: 10px; text-align: center; }
  }
</style>

<div class="mw-page">

  <div class="mw-masthead">
    <a href="https://simplymenowell.com/" style="text-decoration: none;">
      <div class="mw-logo">Meno<span>Well</span></div>
    </a>
    <div class="mw-subsidiary-text">A subsidiary of JourneyWell Global LLC</div>
  </div>

  <section class="mw-hero">
    <div class="mw-divider"></div>
    <h1>Navigating the Menopause Journey, Together.</h1>
    <p>A specialized sanctuary providing the data, community, and strategies to navigate the biological shifts of perimenopause and menopause.</p>
  </section>

  <section class="mw-routing-banner">
    <div class="mw-routing-content">
      <h2>Where should you start?</h2>
      <p style="color: var(--mw-text-muted); font-size: 1.1rem; max-width: 600px;">Are you experiencing cycle changes? Are you a partner looking for ways to support her? Take our quick routing quiz to find your dedicated pathway.</p>
      <a href="https://simplymenowell.com/#quiz" class="mw-btn-quiz">Take the Routing Quiz &rarr;</a>
    </div>
  </section>

  <section class="mw-pillars-section">
    <h2>The Five Pillars of Care</h2>
    <div class="mw-pillars-grid">

      <!-- Pillar 1: Menopause -->
      <div class="mw-pillar-card">
        <div class="mw-pillar-number">01</div>
        <div class="mw-pillar-card-content">
          <a href="https://simplymenowell.com/menopause/" class="mw-pillar-title-link" target="_blank" rel="noopener">
            <h3>Women in Menopause</h3>
          </a>
          <p>Welcome to the next chapter. You&rsquo;ve crossed the 12-month mark, now let&rsquo;s optimize your health, manage lingering symptoms, and reclaim your vitality.</p>
        </div>
      </div>

      <!-- Pillar 2: Perimenopause -->
      <div class="mw-pillar-card">
        <div class="mw-pillar-number">02</div>
        <div class="mw-pillar-card-content">
          <a href="https://simplymenowell.com/perimenopause/" class="mw-pillar-title-link" target="_blank" rel="noopener">
            <h3>Women in Perimenopause</h3>
          </a>
          <p>Navigating the shift. Decode the chaos of the estrogen and progesterone rollercoaster, track your data, and build your medical self-advocacy playbook.</p>
        </div>
      </div>

      <!-- Pillar 3: Partners -->
      <div class="mw-pillar-card">
        <div class="mw-pillar-number">03</div>
        <div class="mw-pillar-card-content">
          <a href="https://simplymenowell.com/partners/" class="mw-pillar-title-link" target="_blank" rel="noopener">
            <h3>Partners Supporting Women</h3>
          </a>
          <p>The Partner&rsquo;s Playbook. Learn the biology of her transition, how to communicate without pressure, and how to step up as a true ally in your relationship.</p>
        </div>
      </div>

      <!-- Pillar 4: Family & Friends -->
      <div class="mw-pillar-card">
        <div class="mw-pillar-number">04</div>
        <div class="mw-pillar-card-content">
          <a href="https://simplymenowell.com/family-friends/" class="mw-pillar-title-link" target="_blank" rel="noopener">
            <h3>Family &amp; Friends Support</h3>
          </a>
          <p>The Circle of Support. Menopause affects the whole household. Learn how to understand the changes, offer grace, and provide practical acts of support.</p>
        </div>
      </div>

      <!-- Pillar 5: Medical Professionals -->
      <div class="mw-pillar-card">
        <div class="mw-pillar-number">05</div>
        <div class="mw-pillar-card-content">
          <a href="https://simplymenowell.com/medical-professionals/" class="mw-pillar-title-link" target="_blank" rel="noopener">
            <h3>Medical Professionals</h3>
          </a>
          <p>The Clinical Hub. Elevating menopause care by bridging the gap between lived patient experience and current, evidence-based clinical practice.</p>
        </div>
      </div>

    </div>
  </section>

  <div class="mw-bottom-action">
    <a href="https://simplymenowell.com/" class="mw-btn-home">Journey to MenoWell.com</a>
  </div>

</div>

<?php get_footer(); ?>
