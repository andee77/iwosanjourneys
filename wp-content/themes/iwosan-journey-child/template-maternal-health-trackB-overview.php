<?php
/**
 * Template Name: Iwosan Maternal Health — Track B Overview
 * Description: Track B ("The WOC Advocacy Sanctuary") overview/navigation page for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The WOC Advocacy Sanctuary</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK B OVERVIEW: The WOC Advocacy Sanctuary
     Vertical journey timeline linking to all 7 pillars
     ============================================ -->
<style>
.iwj-tbov-page{
  font-family:'Lato',sans-serif;
  max-width:780px;
  margin:0 auto;
  padding:2.5rem 6% 4rem;
  color:#3D3228;
}
.iwj-tbov-eyebrow{
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.85rem;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.6rem;
}
.iwj-tbov-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.6rem;
  color:#0A1F44;
  margin-bottom:1.25rem;
}
.iwj-tbov-lede{
  font-size:.95rem;
  line-height:1.75;
  font-weight:300;
  color:#3D3228;
  max-width:660px;
  margin-bottom:1rem;
}
.iwj-tbov-lede:last-of-type{margin-bottom:3rem}

.iwj-tbov-timeline{
  position:relative;
  padding-left:2.75rem;
}
.iwj-tbov-timeline::before{
  content:'';
  position:absolute;
  left:1.1rem;
  top:.4rem;
  bottom:.4rem;
  width:2px;
  background:#E5E0D5;
}
.iwj-tbov-node{
  position:relative;
  margin-bottom:1.75rem;
}
.iwj-tbov-node:last-child{margin-bottom:0}
.iwj-tbov-node-marker{
  position:absolute;
  left:-2.75rem;
  top:.15rem;
  width:2.2rem;
  height:2.2rem;
  border-radius:50%;
  background:#8B5E3C;
  color:#FAF8F4;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.95rem;
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:1;
}
.iwj-tbov-link{
  display:block;
  text-decoration:none;
  color:inherit;
  border:1px solid #E5E0D5;
  border-radius:8px;
  padding:1rem 1.25rem;
  transition:border-color .2s ease, transform .15s ease;
}
.iwj-tbov-link:hover{
  border-color:#8B5E3C;
  transform:translateX(3px);
}
.iwj-tbov-node-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.02rem;
  color:#0A1F44;
  margin-bottom:.3rem;
}
.iwj-tbov-node-desc{
  font-size:.87rem;
  font-weight:300;
  line-height:1.55;
  color:#5F5E5A;
}
.iwj-tbov-node-cta{
  display:inline-flex;
  align-items:center;
  gap:.35rem;
  margin-top:.5rem;
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.78rem;
  color:#8B5E3C;
}
.iwj-tbov-node-cta::after{
  content:'\2192';
  transition:transform .2s ease;
}
.iwj-tbov-link:hover .iwj-tbov-node-cta::after{
  transform:translateX(3px);
}

@media(max-width:600px){
  .iwj-tbov-timeline{padding-left:2.25rem}
  .iwj-tbov-node-marker{left:-2.25rem;width:1.9rem;height:1.9rem;font-size:.85rem}
}
</style>

<div class="iwj-tbov-page">
  <div class="iwj-tbov-eyebrow">Maternal Health &mdash; Track B</div>
  <div class="iwj-tbov-title">The WOC Advocacy Sanctuary</div>

  <p class="iwj-tbov-lede">
    Welcome to Track B: The WOC Advocacy Sanctuary. When a Woman of Color
    (WOC) or a Black, Brown, or Indigenous maternal family lands on Iwosan
    Journeys, they are not looking for passive pregnancy tips. They are
    navigating a healthcare system where systemic bias, clinical racism,
    and the dismissal of pain are documented statistical realities.
  </p>
  <p class="iwj-tbov-lede">
    To make Track B a true survival-grade sanctuary, we built it around
    concrete, life-saving self-advocacy &mdash; seven pillars, in order.
    Start wherever you are in your journey, or work through them from the
    beginning.
  </p>

  <div class="iwj-tbov-timeline">

    <div class="iwj-tbov-node">
      <div class="iwj-tbov-node-marker">1</div>
      <a class="iwj-tbov-link" href="/maternal-health/track-b/woc-fertility-reproductive-baseline/">
        <div class="iwj-tbov-node-title">WOC Fertility &amp; Reproductive Baseline Defense</div>
        <div class="iwj-tbov-node-desc">Overcoming delayed diagnoses &mdash; your voice against fibroids, PCOS, and &ldquo;normal pain.&rdquo;</div>
        <div class="iwj-tbov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-tbov-node">
      <div class="iwj-tbov-node-marker">2</div>
      <a class="iwj-tbov-link" href="/maternal-health/track-b/woc-prenatal-bias-defense/">
        <div class="iwj-tbov-node-title">WOC Prenatal Bias Defense &amp; The Preeclampsia Watch</div>
        <div class="iwj-tbov-node-desc">Protecting your life &mdash; how to cut through clinical bias and track your cardiovascular baseline.</div>
        <div class="iwj-tbov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-tbov-node">
      <div class="iwj-tbov-node-marker">3</div>
      <a class="iwj-tbov-link" href="/maternal-health/track-b/woc-unapologetic-room-guardian/">
        <div class="iwj-tbov-node-title">WOC The Unapologetic Room Guardian</div>
        <div class="iwj-tbov-node-desc">Protecting her in the delivery room &mdash; bias defense, consent enforcement, and hemorrhage watch.</div>
        <div class="iwj-tbov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-tbov-node">
      <div class="iwj-tbov-node-marker">4</div>
      <a class="iwj-tbov-link" href="/maternal-health/track-b/woc-partner-vigilance/">
        <div class="iwj-tbov-node-title">WOC Partner Vigilance &amp; Mental Load</div>
        <div class="iwj-tbov-node-desc">Carrying the weight without breaking &mdash; navigating mortality vigilance, burnout, and your own mental health.</div>
        <div class="iwj-tbov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-tbov-node">
      <div class="iwj-tbov-node-marker">5</div>
      <a class="iwj-tbov-link" href="/maternal-health/track-b/woc-postpartum-red-alert/">
        <div class="iwj-tbov-node-title">WOC The Day 1 to 14 Postpartum Red-Alert Protocol</div>
        <div class="iwj-tbov-node-desc">Why the first two weeks matter most &mdash; recognizing postpartum preeclampsia, blood clots, and demanding ER readmission.</div>
        <div class="iwj-tbov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-tbov-node">
      <div class="iwj-tbov-node-marker">6</div>
      <a class="iwj-tbov-link" href="/maternal-health/track-b/woc-loss-grief-medical-trauma/">
        <div class="iwj-tbov-node-title">WOC Loss, Grief &amp; Medical Trauma Validation</div>
        <div class="iwj-tbov-node-desc">Honoring your grief, naming the trauma of dismissal, and demanding diagnostic accountability.</div>
        <div class="iwj-tbov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-tbov-node">
      <div class="iwj-tbov-node-marker">7</div>
      <a class="iwj-tbov-link" href="/maternal-health/track-b/surviving-partners-sanctuary/">
        <div class="iwj-tbov-node-title">The Surviving Partner's Sanctuary</div>
        <div class="iwj-tbov-node-desc">Navigating life after maternal or infant loss, dismantling guardian guilt, and rebuilding.</div>
        <div class="iwj-tbov-node-cta">Open this pillar</div>
      </a>
    </div>

  </div>
</div>

<?php get_footer(); ?>
