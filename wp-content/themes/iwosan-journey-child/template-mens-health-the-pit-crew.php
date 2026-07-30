<?php
/**
 * Template Name: Iwosan Men's Health — The Pit Crew
 * Description: Custom coded Men's Health "The Pit Crew" partner chooser subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The Pit Crew</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — THE PIT CREW (Men's Health > For Partners)
     Chooser/landing page: routes to one of two partner-facing subpages
     ============================================ -->
<style>
.iwj-pc-page{
  font-family:'Lato',sans-serif;
  max-width:900px;
  margin:0 auto;
  padding:2.5rem 6% 4rem;
  color:#3D3228;
}
.iwj-pc-eyebrow{
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.85rem;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.75rem;
}
.iwj-pc-intro{
  font-size:1rem;
  line-height:1.75;
  font-weight:300;
  max-width:640px;
  margin-bottom:.75rem;
}
.iwj-pc-intro-sub{
  font-size:.92rem;
  line-height:1.7;
  font-weight:300;
  color:#5F5E5A;
  max-width:640px;
  margin-bottom:2.5rem;
}
.iwj-pc-cards-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:1.75rem;
  margin-bottom:1rem;
}
.iwj-pc-card{
  position:relative;
  border-radius:6px;
  overflow:hidden;
  min-height:380px;
  display:flex;
  align-items:flex-end;
  text-decoration:none;
  isolation:isolate;
}
.iwj-pc-card img{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  object-fit:cover;
  z-index:-2;
  transition:transform .5s ease;
}
.iwj-pc-card:hover img{
  transform:scale(1.04);
}
.iwj-pc-card.iwj-pc-card-stonewall img{
  object-position:center 35%;
}
.iwj-pc-card::before{
  content:'';
  position:absolute;
  inset:0;
  background:linear-gradient(180deg, rgba(10,31,68,0) 28%, rgba(10,31,68,.9) 100%);
  z-index:-1;
}
.iwj-pc-card-body{
  padding:1.75rem 1.75rem 2rem;
  color:#FAF8F4;
  width:100%;
}
.iwj-pc-card-label{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.68rem;
  letter-spacing:.14em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.6rem;
}
.iwj-pc-card-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.4rem;
  line-height:1.2;
  margin-bottom:.6rem;
}
.iwj-pc-card-desc{
  font-size:.88rem;
  font-weight:300;
  line-height:1.55;
  color:#F1EFE8;
  max-width:32ch;
}
.iwj-pc-card-cta{
  display:inline-flex;
  align-items:center;
  gap:.4rem;
  margin-top:1rem;
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.8rem;
  color:#FAF8F4;
  letter-spacing:.03em;
}
.iwj-pc-card-cta::after{
  content:'\2192';
  transition:transform .2s ease;
}
.iwj-pc-card:hover .iwj-pc-card-cta::after{
  transform:translateX(4px);
}
.iwj-pc-note{
  font-size:.82rem;
  font-weight:300;
  font-style:italic;
  color:#7A6E65;
  line-height:1.6;
  max-width:640px;
}
@media(max-width:760px){
  .iwj-pc-cards-grid{grid-template-columns:1fr}
  .iwj-pc-card{min-height:300px}
}
</style>

<div class="iwj-pc-page">
  <div class="iwj-pc-eyebrow">The Pit Crew &mdash; For Partners</div>
  <p class="iwj-pc-intro">
    You noticed the warning signs first &mdash; the shorter temper, the 3:00 AM wake-ups,
    the afternoon exhaustion, the pulling away. This section is for you, not him.
  </p>
  <p class="iwj-pc-intro-sub">
    Choose the path that fits your relationship. Both cover how to recognize what's
    happening, open the conversation without triggering defensiveness, and help him
    walk into his next appointment prepared.
  </p>

  <div class="iwj-pc-cards-grid">

    <a class="iwj-pc-card iwj-pc-card-stonewall" href="/mens-health/the-pit-crew/his-corner/">
      <img src="https://iwosanjourney.com/wp-content/uploads/2026/05/couple_embracing_stone_wall_outdoors.jpg" alt="">
      <div class="iwj-pc-card-body">
        <div class="iwj-pc-card-label">Partners in His Corner</div>
        <div class="iwj-pc-card-title">Supporting the Man in Your Life</div>
        <p class="iwj-pc-card-desc">
          How to recognize the warning signs, open the conversation, and advocate
          for him without triggering shame or defensiveness.
        </p>
        <div class="iwj-pc-card-cta">Start here</div>
      </div>
    </a>

    <a class="iwj-pc-card" href="/mens-health/the-pit-crew/two-man-mirror/">
      <img src="https://iwosanjourney.com/wp-content/uploads/2026/05/couple_holding_hands_sofa-scaled.jpg" alt="">
      <div class="iwj-pc-card-body">
        <div class="iwj-pc-card-label">The Two-Man Mirror</div>
        <div class="iwj-pc-card-title">Partner Advocacy for Husbands &amp; Boyfriends</div>
        <p class="iwj-pc-card-desc">
          For same-sex couples: how to watch out for him without looking the
          other way about your own health.
        </p>
        <div class="iwj-pc-card-cta">Start here</div>
      </div>
    </a>

  </div>

  <p class="iwj-pc-note">
    Not sure which fits? Both cover the same ground &mdash; recognizing the signs, scripts
    for the conversation, and a printable appointment agenda you build together. Pick
    whichever speaks to your relationship.
  </p>
</div>

<?php get_footer(); ?>
