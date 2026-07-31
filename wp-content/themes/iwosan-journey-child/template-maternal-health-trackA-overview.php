<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Overview
 * Description: Track A ("The Maternal Continuum") overview/navigation page for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The Maternal Continuum</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK A OVERVIEW: The Maternal Continuum
     Lean, navigational page — vertical journey timeline linking to all 7 pillars
     ============================================ -->
<style>
.iwj-taov-page{
  font-family:'Lato',sans-serif;
  max-width:760px;
  margin:0 auto;
  padding:2.5rem 6% 4rem;
  color:#3D3228;
}
.iwj-taov-eyebrow{
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.85rem;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.6rem;
}
.iwj-taov-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.6rem;
  color:#0A1F44;
  margin-bottom:.75rem;
}
.iwj-taov-lede{
  font-size:.95rem;
  line-height:1.7;
  font-weight:300;
  color:#5F5E5A;
  max-width:640px;
  margin-bottom:3rem;
}

.iwj-taov-timeline{
  position:relative;
  padding-left:2.75rem;
}
.iwj-taov-timeline::before{
  content:'';
  position:absolute;
  left:1.1rem;
  top:.4rem;
  bottom:.4rem;
  width:2px;
  background:#E5E0D5;
}
.iwj-taov-node{
  position:relative;
  margin-bottom:1.75rem;
}
.iwj-taov-node:last-child{margin-bottom:0}
.iwj-taov-node-marker{
  position:absolute;
  left:-2.75rem;
  top:.15rem;
  width:2.2rem;
  height:2.2rem;
  border-radius:50%;
  background:#1C3A2A;
  color:#FAF8F4;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.95rem;
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:1;
}
.iwj-taov-link{
  display:block;
  text-decoration:none;
  color:inherit;
  border:1px solid #E5E0D5;
  border-radius:8px;
  padding:1rem 1.25rem;
  transition:border-color .2s ease, transform .15s ease;
}
.iwj-taov-link:hover{
  border-color:#1C3A2A;
  transform:translateX(3px);
}
.iwj-taov-node-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.02rem;
  color:#0A1F44;
  margin-bottom:.3rem;
}
.iwj-taov-node-desc{
  font-size:.87rem;
  font-weight:300;
  line-height:1.55;
  color:#5F5E5A;
}
.iwj-taov-node-cta{
  display:inline-flex;
  align-items:center;
  gap:.35rem;
  margin-top:.5rem;
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.78rem;
  color:#1C3A2A;
}
.iwj-taov-node-cta::after{
  content:'\2192';
  transition:transform .2s ease;
}
.iwj-taov-link:hover .iwj-taov-node-cta::after{
  transform:translateX(3px);
}

@media(max-width:600px){
  .iwj-taov-timeline{padding-left:2.25rem}
  .iwj-taov-node-marker{left:-2.25rem;width:1.9rem;height:1.9rem;font-size:.85rem}
}
</style>

<div class="iwj-taov-page">
  <div class="iwj-taov-eyebrow">Maternal Health &mdash; Track A</div>
  <div class="iwj-taov-title">The Maternal Continuum</div>
  <p class="iwj-taov-lede">
    Seven pillars, in order. Start wherever you are in your journey, or work through
    them from the beginning.
  </p>

  <div class="iwj-taov-timeline">

    <div class="iwj-taov-node">
      <div class="iwj-taov-node-marker">1</div>
      <a class="iwj-taov-link" href="https://iwosanjourney.com/preconception/">
        <div class="iwj-taov-node-title">Preconception &amp; Fertility Navigation</div>
        <div class="iwj-taov-node-desc">Knowing your body before the baby &mdash; baseline awareness and early self-advocacy.</div>
        <div class="iwj-taov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-taov-node">
      <div class="iwj-taov-node-marker">2</div>
      <a class="iwj-taov-link" href="https://iwosanjourney.com/prenatal-birth-voice/">
        <div class="iwj-taov-node-title">Prenatal Care &amp; The Birth Voice</div>
        <div class="iwj-taov-node-desc">Your body, your baby, your voice &mdash; self-advocacy from the exam room to the delivery room.</div>
        <div class="iwj-taov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-taov-node">
      <div class="iwj-taov-node-marker">3</div>
      <a class="iwj-taov-link" href="https://iwosanjourney.com/advocate-partner/">
        <div class="iwj-taov-node-title">The Advocate Partner</div>
        <div class="iwj-taov-node-desc">The Room Guardian &mdash; how to speak up, protect her peace, and guard the room during labor.</div>
        <div class="iwj-taov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-taov-node">
      <div class="iwj-taov-node-marker">4</div>
      <a class="iwj-taov-link" href="https://iwosanjourney.com/voice-of-the-partner/">
        <div class="iwj-taov-node-title">The Voice of the Partner</div>
        <div class="iwj-taov-node-desc">Your fears, your bandwidth, your transition &mdash; you matter in this equation too.</div>
        <div class="iwj-taov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-taov-node">
      <div class="iwj-taov-node-marker">5</div>
      <a class="iwj-taov-link" href="https://iwosanjourney.com/4th-trimester/">
        <div class="iwj-taov-node-title">The 4th Trimester &amp; Postpartum Continuity</div>
        <div class="iwj-taov-node-desc">You are still a patient &mdash; self-advocacy for your healing body, pelvic floor, and postpartum mind.</div>
        <div class="iwj-taov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-taov-node">
      <div class="iwj-taov-node-marker">6</div>
      <a class="iwj-taov-link" href="https://iwosanjourney.com/maternal-loss-grief/">
        <div class="iwj-taov-node-title">Maternal Loss, Grief &amp; Healing</div>
        <div class="iwj-taov-node-desc">Honoring your grief, protecting your peace, and navigating healing on your own timeline.</div>
        <div class="iwj-taov-node-cta">Open this pillar</div>
      </a>
    </div>

    <div class="iwj-taov-node">
      <div class="iwj-taov-node-marker">7</div>
      <a class="iwj-taov-link" href="https://iwosanjourney.com/surviving-partner-sanctuary/">
        <div class="iwj-taov-node-title">The Surviving Partner's Sanctuary</div>
        <div class="iwj-taov-node-desc">Navigating life after maternal or infant loss, and protecting your surviving family.</div>
        <div class="iwj-taov-node-cta">Open this pillar</div>
      </a>
    </div>

  </div>
</div>

<?php get_footer(); ?>
