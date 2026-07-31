<?php
/**
 * Template Name: Iwosan Maternal Health
 * Description: Maternal Health chooser/landing page (carousel + dual-track cards) for Iwosan Journey's
 */

get_header();
?>

<style>
:root {
  --mh-primary: #0A1F44;
  --mh-text-main: #3D3228;
  --mh-text-muted: #5F5E5A;
  --mh-bg-page: #FAF8F4;
  --mh-card-bg: #ffffff;
  --mh-border: #E5E0D5;
  --mh-gold: #C9A052;

  /* Track A Colors (Holistic, Calm, Growth) */
  --mh-track-a-main: #1C3A2A;
  --mh-track-a-light: #EEF3EE;
  --mh-track-a-hover: #142a1e;

  /* Track B Colors (Grounded, Protective, Sanctuary) */
  --mh-track-b-main: #8B5E3C;
  --mh-track-b-light: #F5EFE7;
  --mh-track-b-hover: #6f4a2f;
}

.iwj-mh-landing * {
  box-sizing: border-box;
}

.iwj-mh-landing {
  background-color: var(--mh-bg-page);
  color: var(--mh-text-main);
  line-height: 1.6;
}

.iwj-mh-landing h1, .iwj-mh-landing h2, .iwj-mh-landing h3 {
  font-family: 'Montserrat', sans-serif;
}

/* CAROUSEL */
.iwj-mh-carousel-container {
  position: relative;
  width: 100%;
  height: 60vh;
  min-height: 400px;
  max-height: 600px;
  overflow: hidden;
  background-color: var(--mh-primary);
}

.iwj-mh-slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.8s ease-in-out;
  background-size: cover;
  background-position: center 30%;
}

.iwj-mh-slide.active {
  opacity: 1;
  z-index: 1;
}

.iwj-mh-slide-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, rgba(10,31,68,0.92) 0%, rgba(10,31,68,0.45) 100%);
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 0 10%;
}

.iwj-mh-slide-content .iwj-mh-eyebrow {
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  font-size: .85rem;
  letter-spacing: .1em;
  text-transform: uppercase;
  color: var(--mh-gold);
  margin-bottom: .9rem;
}

.iwj-mh-slide-content h1 {
  color: #FAF8F4;
  font-size: 2.75rem;
  font-weight: 700;
  margin-bottom: 16px;
  max-width: 800px;
  line-height: 1.15;
}

.iwj-mh-slide-content p {
  color: #DCD9D0;
  font-size: 1.1rem;
  font-weight: 300;
  max-width: 600px;
}

.iwj-mh-carousel-nav {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  gap: 10px;
  z-index: 10;
}

.iwj-mh-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(255,255,255,0.4);
  cursor: pointer;
  transition: background 0.3s;
}

.iwj-mh-dot.active {
  background: var(--mh-gold);
}

@media (max-width: 768px) {
  .iwj-mh-slide-content h1 { font-size: 2rem; }
  .iwj-mh-slide-content p { font-size: 1rem; }
  .iwj-mh-slide-overlay { padding: 0 5%; }
}

/* MISSION / WHY WE DID THIS */
.iwj-mh-mission-section {
  max-width: 1000px;
  margin: 70px auto;
  padding: 0 20px;
  text-align: center;
}

.iwj-mh-mission-section h2 {
  font-size: 1.85rem;
  color: var(--mh-primary);
  margin-bottom: 24px;
  font-weight: 700;
}

.iwj-mh-mission-section p {
  font-size: 1.05rem;
  font-weight: 300;
  color: var(--mh-text-muted);
  margin-bottom: 20px;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  line-height: 1.75;
}

.iwj-mh-mission-section strong {
  color: var(--mh-primary);
  font-weight: 600;
}

/* TRACK CARDS */
.iwj-mh-tracks-container {
  max-width: 1200px;
  margin: 0 auto 90px auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
}

@media (max-width: 900px) {
  .iwj-mh-tracks-container {
    grid-template-columns: 1fr;
  }
}

.iwj-mh-track-card {
  background: var(--mh-card-bg);
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(10,31,68,0.06);
  border: 1px solid var(--mh-border);
  display: flex;
  flex-direction: column;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.iwj-mh-track-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 20px 40px rgba(10,31,68,0.1);
}

.iwj-mh-track-header {
  padding: 40px 30px;
  text-align: center;
}

.iwj-mh-track-a .iwj-mh-track-header {
  background: var(--mh-track-a-light);
  border-bottom: 4px solid var(--mh-track-a-main);
}

.iwj-mh-track-b .iwj-mh-track-header {
  background: var(--mh-track-b-light);
  border-bottom: 4px solid var(--mh-track-b-main);
}

.iwj-mh-track-header h3 {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 12px;
  letter-spacing: -.01em;
}

.iwj-mh-track-a .iwj-mh-track-header h3 { color: var(--mh-track-a-main); }
.iwj-mh-track-b .iwj-mh-track-header h3 { color: var(--mh-track-b-main); }

.iwj-mh-track-header p {
  font-size: .95rem;
  color: var(--mh-text-muted);
  font-weight: 300;
}

.iwj-mh-track-body {
  padding: 30px;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}

.iwj-mh-pillar-list {
  list-style: none;
  margin-bottom: 30px;
  flex-grow: 1;
  padding: 0;
}

.iwj-mh-pillar-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 16px;
  font-size: .92rem;
  font-weight: 300;
}

.iwj-mh-pillar-number {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  min-width: 26px;
  height: 26px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 12px;
  font-size: .78rem;
  color: #FAF8F4;
  flex-shrink: 0;
}

.iwj-mh-track-a .iwj-mh-pillar-number { background: var(--mh-track-a-main); }
.iwj-mh-track-b .iwj-mh-pillar-number { background: var(--mh-track-b-main); }

.iwj-mh-pillar-text strong {
  display: block;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  color: var(--mh-primary);
  margin-bottom: 2px;
  font-size: .92rem;
}

.iwj-mh-track-action {
  display: block;
  width: 100%;
  text-align: center;
  padding: 15px;
  border-radius: 6px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  font-size: 1rem;
  text-decoration: none;
  color: #FAF8F4;
  transition: background 0.3s ease;
}

.iwj-mh-track-a .iwj-mh-track-action { background: var(--mh-track-a-main); }
.iwj-mh-track-a .iwj-mh-track-action:hover { background: var(--mh-track-a-hover); }

.iwj-mh-track-b .iwj-mh-track-action { background: var(--mh-track-b-main); }
.iwj-mh-track-b .iwj-mh-track-action:hover { background: var(--mh-track-b-hover); }
</style>

<div class="iwj-mh-landing">

  <!-- 1. HERO CAROUSEL -->
  <section class="iwj-mh-carousel-container">

    <div class="iwj-mh-slide active" style="background-image: url('https://iwosanjourney.com/wp-content/uploads/2026/07/moms-feeling-belly-scaled.jpg');">
      <div class="iwj-mh-slide-overlay">
        <div class="iwj-mh-slide-content">
          <div class="iwj-mh-eyebrow">Maternal Health</div>
          <h1>We Build Advocates, Not Passive Patients.</h1>
          <p>The Iwosan Journeys Maternal Health Ecosystem equips you with the tools to demand accountability and protect your growing family.</p>
        </div>
      </div>
    </div>

    <div class="iwj-mh-slide" style="background-image: url('https://iwosanjourney.com/wp-content/uploads/2026/07/dad-at-appointment-scaled.jpg');">
      <div class="iwj-mh-slide-overlay">
        <div class="iwj-mh-slide-content">
          <div class="iwj-mh-eyebrow">Maternal Health</div>
          <h1>For The Unapologetic Room Guardian.</h1>
          <p>Partners are not just furniture in the delivery room. Learn how to identify clinical neglect, enforce consent, and protect her peace.</p>
        </div>
      </div>
    </div>

    <div class="iwj-mh-slide" style="background-image: url('https://iwosanjourney.com/wp-content/uploads/2026/07/pregnant-wife.png');">
      <div class="iwj-mh-slide-overlay">
        <div class="iwj-mh-slide-content">
          <div class="iwj-mh-eyebrow">Maternal Health</div>
          <h1>A Sanctuary for Women of Color.</h1>
          <p>Navigating systemic bias requires exact scripts. Discover our dedicated track designed specifically to protect Black, Brown, and Indigenous mothers.</p>
        </div>
      </div>
    </div>

    <div class="iwj-mh-carousel-nav">
      <div class="iwj-mh-dot active" onclick="iwjMhGoToSlide(0)"></div>
      <div class="iwj-mh-dot" onclick="iwjMhGoToSlide(1)"></div>
      <div class="iwj-mh-dot" onclick="iwjMhGoToSlide(2)"></div>
    </div>
  </section>

  <!-- 2. MISSION / WHY TWO TRACKS? -->
  <section class="iwj-mh-mission-section">
    <h2>Why Did We Build Two Distinct Tracks?</h2>
    <p>
      The traditional healthcare system often asks families to trust a process that historically has not protected everyone equally. We know that when a Black or Brown mother says, <em>&ldquo;I can't breathe&rdquo;</em> or <em>&ldquo;Something feels wrong,&rdquo;</em> she is statistically more likely to be told she is anxious or exaggerating.
    </p>
    <p>
      That is why we split our maternal health education into a <strong>Dual-Track Architecture</strong>.
    </p>
    <p>
      General audiences need holistic preparation, birth planning, and standard continuity of care. But Women of Color need <strong>survival-grade self-advocacy tools</strong> designed to dismantle clinical bias, enforce the &ldquo;Document the Refusal&rdquo; law, and actively fight maternal mortality disparities.
    </p>
  </section>

  <!-- 3. THE DUAL-TRACK CARDS -->
  <section class="iwj-mh-tracks-container">

    <!-- TRACK A CARD -->
    <div class="iwj-mh-track-card iwj-mh-track-a">
      <div class="iwj-mh-track-header">
        <h3>TRACK A: The Maternal Continuum</h3>
        <p>Holistic Preparation, Informed Consent &amp; Continuous Care</p>
      </div>
      <div class="iwj-mh-track-body">
        <ul class="iwj-mh-pillar-list">
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">1</div>
            <div class="iwj-mh-pillar-text"><strong>Preconception &amp; Fertility</strong> Baseline audits and lab navigation before trying.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">2</div>
            <div class="iwj-mh-pillar-text"><strong>Prenatal Care &amp; Birth Voice</strong> B.R.A.I.N. consent and flexible birth preferences.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">3</div>
            <div class="iwj-mh-pillar-text"><strong>The Advocate Partner</strong> Guarding the room and enforcing the 10-minute privacy rule.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">4</div>
            <div class="iwj-mh-pillar-text"><strong>Voice of the Partner</strong> Processing the mental load and PPDA screening.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">5</div>
            <div class="iwj-mh-pillar-text"><strong>The 4th Trimester</strong> Pelvic floor rehab, lactation support, and recovery.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">6</div>
            <div class="iwj-mh-pillar-text"><strong>Loss, Grief &amp; Healing</strong> Validating loss, and setting emotional boundaries.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">7</div>
            <div class="iwj-mh-pillar-text"><strong>Surviving Partner Sanctuary</strong> Dismantling survivor guilt and solo parenting logistics.</div>
          </li>
        </ul>
        <a href="/maternal-health/track-a/" class="iwj-mh-track-action">Enter Track A</a>
      </div>
    </div>

    <!-- TRACK B CARD -->
    <div class="iwj-mh-track-card iwj-mh-track-b">
      <div class="iwj-mh-track-header">
        <h3>TRACK B: WOC Advocacy Sanctuary</h3>
        <p>Engineered to Protect Black, Brown &amp; Indigenous Families</p>
      </div>
      <div class="iwj-mh-track-body">
        <ul class="iwj-mh-pillar-list">
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">1</div>
            <div class="iwj-mh-pillar-text"><strong>Fibroids, PCOS &amp; Fertility</strong> Pushing past &ldquo;normal cramps&rdquo; for objective baselines.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">2</div>
            <div class="iwj-mh-pillar-text"><strong>Prenatal Bias Defense</strong> Preeclampsia watch and the &ldquo;Document the Refusal&rdquo; Law.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">3</div>
            <div class="iwj-mh-pillar-text"><strong>The Unapologetic Guardian</strong> Partner hemorrhage watch and escalation protocols.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">4</div>
            <div class="iwj-mh-pillar-text"><strong>WOC Partner Vigilance</strong> Carrying mortality vigilance trauma without burning out.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">5</div>
            <div class="iwj-mh-pillar-text"><strong>Day 1&ndash;14 Red-Alert Protocol</strong> ER readmission scripts for clots and secondary hemorrhage.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">6</div>
            <div class="iwj-mh-pillar-text"><strong>Trauma &amp; Loss Validation</strong> Healing from loss compounded by medical dismissal.</div>
          </li>
          <li class="iwj-mh-pillar-item">
            <div class="iwj-mh-pillar-number">7</div>
            <div class="iwj-mh-pillar-text"><strong>Surviving WOC Partner</strong> Demanding unedited charts and independent clinical reviews.</div>
          </li>
        </ul>
        <a href="/maternal-health/track-b/" class="iwj-mh-track-action">Enter the WOC Sanctuary</a>
      </div>
    </div>

  </section>

</div>

<script>
(function(){
  // Carousel Logic
  var currentSlide = 0;
  var slides = document.querySelectorAll('.iwj-mh-slide');
  var dots = document.querySelectorAll('.iwj-mh-dot');
  var totalSlides = slides.length;
  var slideInterval;

  function updateCarousel() {
    slides.forEach(function(slide, index){
      if (index === currentSlide) {
        slide.classList.add('active');
        dots[index].classList.add('active');
      } else {
        slide.classList.remove('active');
        dots[index].classList.remove('active');
      }
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
  }

  window.iwjMhGoToSlide = function(index) {
    currentSlide = index;
    updateCarousel();
    resetInterval();
  };

  function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, 5000);
  }

  // Start auto-slide
  resetInterval();
})();
</script>

<?php get_footer(); ?>
