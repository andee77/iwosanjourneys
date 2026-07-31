<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Pillar 1: Preconception & Fertility
 * Description: Maternal Health Track A pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Preconception & Fertility Navigation</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK A, PILLAR 1: Preconception & Fertility Navigation
     ============================================ -->
<style>
.iwj-p1a-page{
  font-family:'Lato',sans-serif;
  max-width:900px;
  margin:0 auto;
  padding:2.5rem 6% 4rem;
  color:#3D3228;
}
.iwj-p1a-eyebrow{
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.85rem;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.75rem;
}
.iwj-p1a-subtitle{
  font-size:1rem;
  line-height:1.6;
  font-weight:300;
  font-style:italic;
  color:#5F5E5A;
  max-width:640px;
  margin-bottom:2rem;
}
.iwj-p1a-hero-img{
  width:100%;
  height:420px;
  border-radius:8px;
  margin-bottom:2rem;
  display:block;
  object-fit:cover;
  object-position:center 5%;
}
.iwj-p1a-break-img{
  width:100%;
  height:280px;
  border-radius:8px;
  margin:2.5rem 0;
  display:block;
  object-fit:cover;
}
.iwj-p1a-lede{
  font-size:1rem;
  line-height:1.75;
  font-weight:300;
  max-width:680px;
  margin-bottom:2.5rem;
}
.iwj-p1a-section{margin-bottom:2.75rem}
.iwj-p1a-section-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.72rem;
  letter-spacing:.14em;
  text-transform:uppercase;
  color:#1C3A2A;
  margin-bottom:1rem;
  padding-bottom:.6rem;
  border-bottom:2px solid #C9A052;
  display:inline-block;
}
.iwj-p1a-heading{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.25rem;
  color:#0A1F44;
  line-height:1.3;
  margin-bottom:1rem;
}
.iwj-p1a-body{
  font-size:.95rem;
  line-height:1.75;
  font-weight:300;
  max-width:680px;
  margin-bottom:1rem;
}
.iwj-p1a-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-p1a-table{
  width:100%;
  border-collapse:collapse;
  font-size:.86rem;
  min-width:640px;
}
.iwj-p1a-table th{
  background:#0A1F44;
  color:#FAF8F4;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.75rem;
  text-transform:uppercase;
  letter-spacing:.03em;
  text-align:left;
  padding:.7rem .9rem;
}
.iwj-p1a-table td{
  padding:.85rem .9rem;
  border-bottom:1px solid #E5E0D5;
  vertical-align:top;
  line-height:1.55;
}
.iwj-p1a-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-p1a-table td.what{color:#5F5E5A}
.iwj-p1a-table td.why{font-weight:600;color:#1C3A2A}
.iwj-p1a-script-card{
  background:#FAF8F4;
  border-left:3px solid #4DAEAF;
  border-radius:0 6px 6px 0;
  padding:1.25rem 1.5rem;
  margin-bottom:1.25rem;
}
.iwj-p1a-script-num{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.95rem;
  color:#0A1F44;
  margin-bottom:.5rem;
}
.iwj-p1a-script-say{
  font-size:.92rem;
  line-height:1.7;
  font-style:italic;
  color:#3D3228;
}
.iwj-p1a-question-card{
  background:#fff;
  border:1px solid #E5E0D5;
  border-left:3px solid #C9A052;
  border-radius:0 6px 6px 0;
  padding:1.1rem 1.4rem;
  margin-bottom:1rem;
}
.iwj-p1a-question-label{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.85rem;
  color:#0A1F44;
  margin-bottom:.4rem;
}
.iwj-p1a-question-say{
  font-size:.9rem;
  line-height:1.65;
  font-style:italic;
  color:#3D3228;
}
.iwj-p1a-pushback-box{
  background:#0A1F44;
  color:#FAF8F4;
  border-radius:8px;
  padding:1.5rem 1.75rem;
  margin-top:1.5rem;
}
.iwj-p1a-pushback-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.95rem;
  margin-bottom:.6rem;
  color:#C9A052;
}
.iwj-p1a-pushback-context{
  font-size:.85rem;
  font-weight:300;
  line-height:1.6;
  margin-bottom:.9rem;
  color:#DCD9D0;
}
.iwj-p1a-pushback-say{
  font-size:.92rem;
  line-height:1.7;
  font-style:italic;
}
.iwj-p1a-tool-heading{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.3rem;
  color:#0A1F44;
  margin-bottom:.4rem;
}
.iwj-p1a-tool-subhead{
  font-size:.88rem;
  font-weight:300;
  font-style:italic;
  color:#7A6E65;
  margin-bottom:1.25rem;
}
.iwj-p1a-tool-disclaimer{
  margin-top:1rem;
  font-size:.75rem;
  font-weight:300;
  font-style:italic;
  color:#8A8178;
  line-height:1.5;
  border-top:1px solid rgba(28,58,42,.1);
  padding-top:.75rem;
}
.iwj-p1a-travel-box{
  background:#F1EFE8;
  border-radius:8px;
  padding:1.5rem 1.75rem;
}
.iwj-p1a-travel-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1rem;
  color:#0A1F44;
  margin-bottom:.75rem;
}
.iwj-p1a-travel-list{
  margin:0;
  padding-left:1.2rem;
  font-size:.9rem;
  line-height:1.65;
  font-weight:300;
}
.iwj-p1a-travel-list li{margin-bottom:.6rem}
.iwj-p1a-travel-list li:last-child{margin-bottom:0}
.iwj-p1a-travel-list strong{color:#0A1F44}
.iwj-p1a-page-disclaimer{
  margin-top:3rem;
  padding:1.25rem 1.5rem;
  background:#F1EFE8;
  border-left:3px solid #8B5E3C;
  border-radius:4px;
  font-size:.82rem;
  font-weight:300;
  font-style:italic;
  color:#5F5E5A;
  line-height:1.65;
}

/* ---------- "Before We Try" Body & Lifestyle Audit tool ---------- */
.iwj-bwt{
  --iwj-primary:#0A1F44;
  --iwj-accent:#4DAEAF;
  --iwj-accent-hover:#3a8f90;
  --iwj-bg:#FAF8F4;
  --iwj-card-bg:#ffffff;
  --iwj-border:#E5E0D5;
  --iwj-good:#1C3A2A;
  --iwj-warn:#C9A052;
  --iwj-alert:#B5473D;
  font-family:'Lato',sans-serif;
  max-width:850px;
  margin:0 auto;
  background:var(--iwj-card-bg);
  border-radius:8px;
  box-shadow:0 4px 18px rgba(10,31,68,.06);
  border:1px solid var(--iwj-border);
  overflow:hidden;
}
.iwj-bwt *{box-sizing:border-box}
.iwj-bwt-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-bwt-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-bwt-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-bwt-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;padding:1.5rem}
@media(max-width:760px){.iwj-bwt-grid{grid-template-columns:1fr}}
.iwj-bwt-section-title{
  font-family:'Montserrat',sans-serif;
  font-size:.88rem;font-weight:700;color:var(--iwj-primary);
  margin-bottom:.9rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;
}
.iwj-bwt-slider-group{margin-bottom:1.1rem}
.iwj-bwt-slider-label{display:flex;justify-content:space-between;font-weight:600;font-size:.88rem;margin-bottom:.4rem}
.iwj-bwt-slider-value{font-weight:700;color:var(--iwj-accent)}
.iwj-bwt input[type=range]{width:100%;height:8px;background:var(--iwj-border);border-radius:4px;outline:none;-webkit-appearance:none}
.iwj-bwt input[type=range]::-webkit-slider-thumb{-webkit-appearance:none;width:18px;height:18px;border-radius:50%;background:var(--iwj-accent);cursor:pointer}
.iwj-bwt input[type=range]::-moz-range-thumb{width:18px;height:18px;border:none;border-radius:50%;background:var(--iwj-accent);cursor:pointer}
.iwj-bwt-toggles{display:flex;flex-direction:column;gap:.6rem}
.iwj-bwt-item{display:flex;align-items:flex-start;padding:.6rem .75rem;background:var(--iwj-bg);border:1px solid var(--iwj-border);border-radius:6px;font-size:.85rem;cursor:pointer;line-height:1.4}
.iwj-bwt-item:hover{border-color:var(--iwj-accent)}
.iwj-bwt-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-bwt-output{background:var(--iwj-bg);border-radius:8px;padding:1.25rem;border:1px solid var(--iwj-border);display:flex;flex-direction:column;justify-content:space-between}
.iwj-bwt-score-container{text-align:center;padding:.85rem 0;border-bottom:1px solid var(--iwj-border);margin-bottom:1rem}
.iwj-bwt-score-title{font-family:'Montserrat',sans-serif;font-size:.72rem;text-transform:uppercase;letter-spacing:.05em;color:#7A6E65;margin-bottom:.35rem}
.iwj-bwt-score-display{font-family:'Montserrat',sans-serif;font-size:2.3rem;font-weight:800;color:var(--iwj-primary)}
.iwj-bwt-score-status{font-size:.88rem;font-weight:600;margin-top:.35rem}
.iwj-bwt-script-box{background:#F1EFE8;border-left:3px solid var(--iwj-accent);padding:.9rem;border-radius:0 6px 6px 0;font-size:.82rem;line-height:1.55;margin-bottom:1rem}
.iwj-bwt-script-box h4{font-family:'Montserrat',sans-serif;color:var(--iwj-primary);margin-bottom:.4rem;font-size:.85rem}
.iwj-bwt-script-box p{color:#3D3228;font-style:italic}
.iwj-bwt-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.75rem 1.25rem;font-family:'Montserrat',sans-serif;font-size:.9rem;font-weight:700;border-radius:6px;cursor:pointer;width:100%}
.iwj-bwt-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-bwt{border:none;box-shadow:none;max-width:100%}
  .iwj-bwt-btn,.iwj-bwt-header p,.iwj-bwt-grid>div:first-child{display:none}
  .iwj-bwt-grid{grid-template-columns:1fr}
  .iwj-bwt-output{border:none;padding:0;background:#fff}
  .iwj-bwt-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
}
</style>

<div class="iwj-p1a-page">
  <div class="iwj-p1a-eyebrow">Maternal Health &mdash; Track A &mdash; Pillar 1</div>
  <p class="iwj-p1a-subtitle">
    Knowing Your Body Before the Baby: Baseline Awareness and Early Self-Advocacy
  </p>

  <img class="iwj-p1a-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/bi-racial-pregnate-couple-scaled.jpg" alt="A couple exploring preconception health together">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-p1a-section">
    <div class="iwj-p1a-section-title">The Reality Check</div>
    <div class="iwj-p1a-heading">You Don't Have to Wait Until You Are Struggling to Ask Questions.</div>
    <p class="iwj-p1a-body">
      Too often, people are told that planning for a pregnancy simply means &ldquo;stop
      using birth control and see what happens.&rdquo; In reality, understanding your
      baseline reproductive health, hormone cycles, and metabolic health before
      conception is one of the most powerful self-advocacy steps you can take.
    </p>
    <p class="iwj-p1a-body">
      Whether you are hoping to conceive naturally, exploring fertility assistance, or
      simply tracking your reproductive baseline, you deserve clarity &mdash; not
      dismissal.
    </p>
    <p class="iwj-p1a-body">
      Under Iwosan Journeys, our goal is to help you organize your bodily observations,
      prepare for early clinical conversations, and walk into your provider's office
      equipped with clear questions.
    </p>
  </div>

  <!-- SECTION 2: DECODING YOUR BASELINE -->
  <div class="iwj-p1a-section">
    <div class="iwj-p1a-section-title">Decoding Your Baseline</div>
    <p class="iwj-p1a-body">
      You are the primary expert on your own daily rhythms. Tracking these foundational
      signals helps you and your provider identify patterns early:
    </p>
    <div class="iwj-p1a-table-wrap">
      <table class="iwj-p1a-table">
        <thead>
          <tr>
            <th>What to Observe at Home</th>
            <th>What It Looks Like</th>
            <th>Why It Matters for Your Baseline</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Menstrual Cycle Rhythms</td>
            <td class="what">Cycle length shorter than 21 days or longer than 35 days; unpredictable timing; heavy clotting; or severe cramping that interrupts daily life.</td>
            <td class="why">Highly irregular cycles or severe pain can be early indicators of ovulatory shifts, polycystic ovary syndrome (PCOS), or endometriosis &mdash; which should be evaluated before trying to conceive.</td>
          </tr>
          <tr>
            <td>Energy &amp; Metabolic Signals</td>
            <td class="what">Constant afternoon crashes, feeling cold when others are warm, unexplained weight shifts, or lingering brain fog.</td>
            <td class="why">Your thyroid and metabolic baseline play a major role in early reproductive health and energy.</td>
          </tr>
          <tr>
            <td>Stress &amp; Nervous System Load</td>
            <td class="what">Feeling perpetually &ldquo;on edge,&rdquo; sleeping poorly, or carrying heavy emotional/work burnout.</td>
            <td class="why">Chronic stress and elevated cortisol impact the hypothalamic-pituitary-adrenal (HPA) axis, which regulates reproductive hormones.</td>
          </tr>
          <tr>
            <td>Family Reproductive History</td>
            <td class="what">A family history of early menopause, endometriosis, fibroids, or difficult pregnancies in siblings/parents.</td>
            <td class="why">Knowing your family history allows you to ask for targeted, proactive screenings rather than waiting for an issue to arise.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- IMAGE BREAK 2 -->
  <img class="iwj-p1a-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/pregnant-couple-scaled.jpg" alt="A couple announcing their pregnancy with a 'baby coming soon' sign">

  <!-- SECTION 3: WHAT TO TELL & ASK YOUR DOCTOR -->
  <div class="iwj-p1a-section">
    <div class="iwj-p1a-section-title">What to Tell &amp; What to Ask Your Doctor</div>
    <p class="iwj-p1a-body">
      When you book a preconception or fertility consultation, use this structured
      briefing so you control the agenda and get concrete baseline data.
    </p>

    <div class="iwj-p1a-script-card">
      <div class="iwj-p1a-script-num">1. What to Tell the Doctor <span style="color:#7A6E65;font-weight:400;font-style:italic;">(The Opening Script)</span></div>
      <div class="iwj-p1a-script-say">&ldquo;Doctor, I am here today for a proactive preconception baseline check. We are planning to try to conceive in the next [3 / 6 / 12 months]. Over the last year, my cycles have been [regular / irregular / painful], and my general energy has been [steady / draining]. My goal today is to run routine preventative screenings so we have actual laboratory numbers before we start.&rdquo;</div>
    </div>

    <div class="iwj-p1a-heading" style="font-size:1.05rem;margin-top:1.75rem;">2. What to Ask the Doctor <span style="color:#7A6E65;font-weight:300;font-style:italic;font-size:.85rem;">(The 4 Essential Questions)</span></div>

    <div class="iwj-p1a-question-card">
      <div class="iwj-p1a-question-label">The Baseline Blood Work Question</div>
      <div class="iwj-p1a-question-say">&ldquo;What comprehensive preconception blood panels &mdash; including a full thyroid panel (TSH, Free T3/T4), ferritin/iron, Vitamin D, and metabolic markers &mdash; do you recommend we check today?&rdquo;</div>
    </div>
    <div class="iwj-p1a-question-card">
      <div class="iwj-p1a-question-label">The Reproductive Horizon Question</div>
      <div class="iwj-p1a-question-say">&ldquo;Based on my age, cycle history, and family background, should we check reproductive baseline markers like Anti-M&uuml;llerian Hormone (AMH) or Day 3 FSH/Estradiol now?&rdquo;</div>
    </div>
    <div class="iwj-p1a-question-card">
      <div class="iwj-p1a-question-label">The Medication &amp; Supplement Audit Question</div>
      <div class="iwj-p1a-question-say">&ldquo;Can we review my current daily medications, over-the-counter supplements, and lifestyle habits to ensure everything is optimized for preconception?&rdquo;</div>
    </div>
    <div class="iwj-p1a-question-card">
      <div class="iwj-p1a-question-label">The Partner Baseline Question</div>
      <div class="iwj-p1a-question-say">&ldquo;What initial preventative or reproductive baseline screenings do you recommend for my partner so we are looking at both sides of the equation?&rdquo;</div>
    </div>

    <div class="iwj-p1a-pushback-box">
      <div class="iwj-p1a-pushback-title">3. The Push-Back Script <span style="color:#DCD9D0;font-weight:400;font-style:italic;">(If You Are Told to &ldquo;Just Try for a Year First&rdquo;)</span></div>
      <p class="iwj-p1a-pushback-context">
        It is common for providers to brush off preconception testing by saying,
        &ldquo;Just relax and try for a year before we test anything.&rdquo; If you want
        proactive peace of mind, use this script:
      </p>
      <p class="iwj-p1a-pushback-say">&ldquo;I understand the standard clinical timeline, but given my [age / irregular cycles / family history / personal peace of mind], I would like to be proactive rather than reactive. Can we run basic preventative blood and thyroid screenings today so we aren't losing time if a simple adjustment is needed?&rdquo;</p>
    </div>
  </div>

  <!-- IMAGE BREAK REMOVED per 2-image standing rule (was pregnant-couple-scaled.jpg) -->

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-p1a-section">
    <div class="iwj-p1a-section-title">Interactive Tool for Preconception</div>
    <div class="iwj-p1a-tool-heading">The &ldquo;Before We Try&rdquo; Body &amp; Lifestyle Audit</div>
    <div class="iwj-p1a-tool-subhead">
      Adjust the sliders and check your observations to generate a customized
      Preconception Doctor Dialogue Sheet you can print and take to your next visit.
    </div>

    <div class="iwj-bwt">
      <div class="iwj-bwt-header">
        <h3>Preconception Baseline &amp; Agenda Builder</h3>
        <p>Adjust the sliders and select any observations below to generate your personalized doctor dialogue script.</p>
      </div>
      <div class="iwj-bwt-grid">
        <div>
          <div class="iwj-bwt-section-title">1. Daily Baseline Sliders (1&ndash;10)</div>

          <div class="iwj-bwt-slider-group">
            <div class="iwj-bwt-slider-label"><span>Cycle Regularity &amp; Comfort</span><span class="iwj-bwt-slider-value" id="iwj-bwt-val-cycle">8</span></div>
            <input type="range" id="iwj-bwt-slide-cycle" min="1" max="10" value="8">
          </div>
          <div class="iwj-bwt-slider-group">
            <div class="iwj-bwt-slider-label"><span>Daily Energy &amp; Metabolism</span><span class="iwj-bwt-slider-value" id="iwj-bwt-val-energy">7</span></div>
            <input type="range" id="iwj-bwt-slide-energy" min="1" max="10" value="7">
          </div>
          <div class="iwj-bwt-slider-group">
            <div class="iwj-bwt-slider-label"><span>Stress &amp; Restful Sleep</span><span class="iwj-bwt-slider-value" id="iwj-bwt-val-sleep">7</span></div>
            <input type="range" id="iwj-bwt-slide-sleep" min="1" max="10" value="7">
          </div>

          <div class="iwj-bwt-section-title" style="margin-top:1.5rem;">2. Baseline Observations</div>
          <div class="iwj-bwt-toggles">
            <label class="iwj-bwt-item"><input type="checkbox" class="iwj-bwt-warning-toggle" value="irregular cycle length or timing"> My cycle is shorter than 21 days or longer than 35 days.</label>
            <label class="iwj-bwt-item"><input type="checkbox" class="iwj-bwt-warning-toggle" value="severe menstrual cramping or clotting"> I experience heavy clotting or cramping that impacts daily life.</label>
            <label class="iwj-bwt-item"><input type="checkbox" class="iwj-bwt-warning-toggle" value="unexplained afternoon fatigue or cold sensitivity"> I experience afternoon crashes, brain fog, or cold sensitivity.</label>
            <label class="iwj-bwt-item"><input type="checkbox" class="iwj-bwt-warning-toggle" value="a family history of reproductive health challenges"> There is a family history of fibroids, PCOS, or early menopause.</label>
          </div>
        </div>

        <div class="iwj-bwt-output">
          <div>
            <div class="iwj-bwt-score-container">
              <div class="iwj-bwt-score-title">Baseline Readiness Average</div>
              <div class="iwj-bwt-score-display" id="iwj-bwt-total-score">7.3</div>
              <div class="iwj-bwt-score-status" id="iwj-bwt-score-status" style="color:#4DAEAF;">Strong Baseline Foundation</div>
            </div>
            <div class="iwj-bwt-script-box">
              <h4>Your Customized Doctor Briefing Script</h4>
              <p id="iwj-bwt-generated-script">
                "Doctor, I am here today for a proactive preconception baseline check. My daily energy and cycle regularity are generally steady, but I would like to order routine preventative blood and thyroid screenings so we have clear laboratory numbers before we start."
              </p>
            </div>
          </div>
          <button class="iwj-bwt-btn" onclick="iwjBwtPrint()">Print / Save My Preconception Agenda</button>
        </div>
      </div>
    </div>

    <p class="iwj-p1a-tool-disclaimer">
      This tool is an educational self-check, not a diagnostic instrument. Your scores and the generated script are conversation starters for your doctor, not a medical assessment.
    </p>
  </div>

  <!-- SECTION 5: CONNECTION TO TRAVEL & EVENTS -->
  <div class="iwj-p1a-section">
    <div class="iwj-p1a-section-title">Connection to Travel &amp; Events</div>
    <div class="iwj-p1a-heading" style="font-size:1.1rem;">Recharging Before the Journey</div>
    <div class="iwj-p1a-travel-box">
      <p class="iwj-p1a-body" style="margin-bottom:1rem;">
        Preconception is an ideal time to downshift your nervous system. Through our
        travel partner Checked Bags and Good Vibes (bagsandvibes.com), we help
        individuals and couples book:
      </p>
      <ul class="iwj-p1a-travel-list">
        <li><strong>Restorative &ldquo;Preconception Reset&rdquo; Travel:</strong> Low-stress, wellness-focused getaways designed to lower cortisol and prioritize intimate connection.</li>
        <li><strong>Medical Travel Navigation:</strong> If your fertility or preconception journey requires out-of-state specialists or reproductive clinics, our travel navigation team handles the logistics so you can focus entirely on your health.</li>
      </ul>
    </div>
  </div>

  <div class="iwj-p1a-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  var sliders = {
    cycle: document.getElementById('iwj-bwt-slide-cycle'),
    energy: document.getElementById('iwj-bwt-slide-energy'),
    sleep: document.getElementById('iwj-bwt-slide-sleep')
  };
  var valDisplays = {
    cycle: document.getElementById('iwj-bwt-val-cycle'),
    energy: document.getElementById('iwj-bwt-val-energy'),
    sleep: document.getElementById('iwj-bwt-val-sleep')
  };
  var totalScoreEl = document.getElementById('iwj-bwt-total-score');
  var scoreStatusEl = document.getElementById('iwj-bwt-score-status');
  var generatedScriptEl = document.getElementById('iwj-bwt-generated-script');
  var checkboxes = document.querySelectorAll('.iwj-bwt-warning-toggle');

  function updateDashboard(){
    var c = parseInt(sliders.cycle.value, 10);
    var e = parseInt(sliders.energy.value, 10);
    var s = parseInt(sliders.sleep.value, 10);

    valDisplays.cycle.textContent = c;
    valDisplays.energy.textContent = e;
    valDisplays.sleep.textContent = s;

    var avg = ((c + e + s) / 3).toFixed(1);
    totalScoreEl.textContent = avg;

    if (avg >= 7.5){
      scoreStatusEl.textContent = 'Strong Baseline Foundation';
      scoreStatusEl.style.color = '#1C3A2A';
    } else if (avg >= 5.5){
      scoreStatusEl.textContent = 'Moderate Baseline \u2014 Proactive Focus';
      scoreStatusEl.style.color = '#4DAEAF';
    } else {
      scoreStatusEl.textContent = 'Evaluation Recommended';
      scoreStatusEl.style.color = '#B5473D';
    }

    generateScript(c, e, s);
  }

  function generateScript(c, e, s){
    var scores = [
      { name: 'cycle regularity', val: c },
      { name: 'energy & metabolism', val: e },
      { name: 'stress and sleep quality', val: s }
    ];
    scores.sort(function(a, b){ return a.val - b.val; });
    var lowestArea = scores[0].name;

    var activeWarnings = Array.prototype.filter.call(checkboxes, function(box){ return box.checked; })
      .map(function(box){ return box.value; });

    var detailStr = 'I have noticed some shifts in my ' + lowestArea;
    if (activeWarnings.length === 1){
      detailStr += ', specifically ' + activeWarnings[0];
    } else if (activeWarnings.length > 1){
      detailStr += ', including ' + activeWarnings[0] + ' and ' + activeWarnings[1];
    }

    generatedScriptEl.textContent = '"Doctor, I am here today for a proactive preconception baseline check. Over the last few months, ' + detailStr + '. I would like to run a preventative metabolic, thyroid, and reproductive screening today so we have clear laboratory numbers before we start."';
  }

  Object.keys(sliders).forEach(function(key){
    sliders[key].addEventListener('input', updateDashboard);
  });
  checkboxes.forEach(function(box){
    box.addEventListener('change', updateDashboard);
  });
  updateDashboard();

  window.iwjBwtPrint = function(){
    window.print();
  };
})();
</script>

<?php get_footer(); ?>
