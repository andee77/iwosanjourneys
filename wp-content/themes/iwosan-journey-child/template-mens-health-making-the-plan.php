<?php
/**
 * Template Name: Iwosan Men's Health — Making the Plan
 * Description: Custom coded Men's Health "Making the Plan" subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Making the Plan</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MAKING THE PLAN (Men's Health subpage)
     Three tools in sequence: Engine & Vitality Check -> Reality & Prevention
     Engine (IFTTT) -> Appointment Agenda Builder
     ============================================ -->

<style>
/* ---------- Shared page chrome ---------- */
.iwj-mtp-page{
  font-family:'Lato',sans-serif;
  max-width:900px;
  margin:0 auto;
  padding:2.5rem 6% 4rem;
  color:#3D3228;
}
.iwj-mtp-eyebrow{
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.85rem;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.75rem;
}
.iwj-mtp-intro{
  font-size:1rem;
  line-height:1.75;
  font-weight:300;
  max-width:640px;
  margin-bottom:2rem;
}
.iwj-mtp-page-disclaimer{
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
.iwj-mtp-tool-wrap{
  margin-bottom:3.5rem;
}
.iwj-mtp-tool-heading{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.3rem;
  color:#0A1F44;
  margin-bottom:.4rem;
}
.iwj-mtp-tool-subhead{
  font-size:.88rem;
  font-weight:300;
  font-style:italic;
  color:#7A6E65;
  margin-bottom:1.25rem;
}
.iwj-mtp-tool-disclaimer{
  margin-top:1rem;
  font-size:.75rem;
  font-weight:300;
  font-style:italic;
  color:#8A8178;
  line-height:1.5;
  border-top:1px solid rgba(28,58,42,.1);
  padding-top:.75rem;
}

/* =========================================================
   TOOL 1 — ENGINE & VITALITY CHECK (Dashboard)
   ========================================================= */
.iwj-dash{
  --iwj-primary:#0A1F44;
  --iwj-accent:#4DAEAF;
  --iwj-accent-hover:#3a8f90;
  --iwj-bg:#FAF8F4;
  --iwj-card-bg:#ffffff;
  --iwj-text-main:#3D3228;
  --iwj-text-muted:#7A6E65;
  --iwj-border:#E5E0D5;
  --iwj-alert:#B5473D;
  --iwj-warn:#C9A052;
  --iwj-good:#1C3A2A;
  font-family:'Lato',sans-serif;
  max-width:850px;
  margin:0 auto;
  background:var(--iwj-card-bg);
  border-radius:8px;
  box-shadow:0 4px 18px rgba(10,31,68,.06);
  border:1px solid var(--iwj-border);
  overflow:hidden;
}
.iwj-dash *{box-sizing:border-box}
.iwj-dash-header{
  background:var(--iwj-primary);
  color:#FAF8F4;
  padding:1.6rem;
  text-align:center;
}
.iwj-dash-header h3{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.2rem;
  margin-bottom:.4rem;
}
.iwj-dash-header p{
  font-size:.85rem;
  color:#C9C4B8;
  font-weight:300;
}
.iwj-dash-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:1.5rem;
  padding:1.5rem;
}
@media(max-width:760px){.iwj-dash-grid{grid-template-columns:1fr}}
.iwj-dash-section-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.85rem;
  letter-spacing:.03em;
  margin-bottom:1rem;
  color:var(--iwj-primary);
  border-bottom:2px solid var(--iwj-border);
  padding-bottom:.5rem;
}
.iwj-dash-slider-group{margin-bottom:1.25rem}
.iwj-dash-slider-label{
  display:flex;
  justify-content:space-between;
  font-weight:600;
  font-size:.9rem;
  margin-bottom:.4rem;
}
.iwj-dash-slider-value{font-weight:700;color:var(--iwj-accent)}
.iwj-dash input[type=range]{
  width:100%;
  height:8px;
  background:var(--iwj-border);
  border-radius:4px;
  outline:none;
  -webkit-appearance:none;
}
.iwj-dash input[type=range]::-webkit-slider-thumb{
  -webkit-appearance:none;
  width:20px;height:20px;
  border-radius:50%;
  background:var(--iwj-accent);
  cursor:pointer;
}
.iwj-dash input[type=range]::-moz-range-thumb{
  width:20px;height:20px;
  border:none;
  border-radius:50%;
  background:var(--iwj-accent);
  cursor:pointer;
}
.iwj-dash-toggles{display:grid;gap:.6rem}
.iwj-dash-toggle-label{
  display:flex;align-items:center;
  padding:.6rem .85rem;
  background:var(--iwj-bg);
  border:1px solid var(--iwj-border);
  border-radius:6px;
  cursor:pointer;
  font-size:.85rem;
  transition:border-color .2s;
}
.iwj-dash-toggle-label:hover{border-color:var(--iwj-accent)}
.iwj-dash-toggle-label input{
  margin-right:.7rem;
  accent-color:var(--iwj-accent);
  width:16px;height:16px;
}
.iwj-dash-output{
  background:var(--iwj-bg);
  border-radius:8px;
  padding:1.25rem;
  border:1px solid var(--iwj-border);
  display:flex;flex-direction:column;justify-content:space-between;
}
.iwj-dash-score-container{
  text-align:center;
  padding:1rem 0;
  border-bottom:1px solid var(--iwj-border);
  margin-bottom:1rem;
}
.iwj-dash-score-title{
  font-family:'Montserrat',sans-serif;
  font-size:.75rem;
  text-transform:uppercase;
  letter-spacing:.06em;
  color:var(--iwj-text-muted);
  margin-bottom:.5rem;
}
.iwj-dash-score-display{
  font-family:'Montserrat',sans-serif;
  font-size:2.6rem;
  font-weight:800;
  color:var(--iwj-primary);
  line-height:1;
}
.iwj-dash-score-status{font-size:.9rem;font-weight:600;margin-top:.5rem}
.iwj-dash-bar-row{margin-bottom:.75rem}
.iwj-dash-bar-label{
  font-size:.78rem;color:var(--iwj-text-muted);
  margin-bottom:.25rem;display:flex;justify-content:space-between;
}
.iwj-dash-bar-track{height:9px;background:var(--iwj-border);border-radius:5px;overflow:hidden}
.iwj-dash-bar-fill{height:100%;width:0%;transition:width .3s ease,background-color .3s ease}
.iwj-dash-script-box{
  background:#F1EFE8;
  border-left:3px solid var(--iwj-accent);
  padding:.9rem;
  border-radius:0 6px 6px 0;
  font-size:.82rem;
  line-height:1.55;
}
.iwj-dash-script-box h4{
  font-family:'Montserrat',sans-serif;
  color:var(--iwj-primary);
  margin-bottom:.4rem;
  font-size:.85rem;
}
.iwj-dash-script-box p{color:var(--iwj-text-main);font-style:italic}

/* =========================================================
   TOOL 2 — REALITY & PREVENTION ENGINE (IFTTT)
   ========================================================= */
.iwj-ifttt{
  --iwj-primary:#0A1F44;
  --iwj-accent:#4DAEAF;
  --iwj-accent-hover:#3a8f90;
  --iwj-bg:#FAF8F4;
  --iwj-card-bg:#ffffff;
  --iwj-border:#E5E0D5;
  --iwj-danger-bg:#FBEFED;
  --iwj-danger-border:#D9A9A1;
  --iwj-danger-text:#7A2E24;
  --iwj-success-bg:#EEF3EE;
  --iwj-success-border:#9FB8A6;
  --iwj-success-text:#1C3A2A;
  font-family:'Lato',sans-serif;
  max-width:850px;
  margin:0 auto;
  background:var(--iwj-card-bg);
  border-radius:8px;
  box-shadow:0 4px 18px rgba(10,31,68,.06);
  border:1px solid var(--iwj-border);
  overflow:hidden;
}
.iwj-ifttt *{box-sizing:border-box}
.iwj-ifttt-header{
  background:var(--iwj-primary);
  color:#FAF8F4;
  padding:1.6rem;
  text-align:center;
}
.iwj-ifttt-header h3{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.2rem;
  margin-bottom:.4rem;
}
.iwj-ifttt-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-ifttt-body{padding:1.5rem}
.iwj-ifttt-instruction{
  font-family:'Montserrat',sans-serif;
  font-size:.78rem;
  font-weight:700;
  color:var(--iwj-primary);
  margin-bottom:.75rem;
  text-transform:uppercase;
  letter-spacing:.05em;
}
.iwj-ifttt-issue-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:.75rem;
  margin-bottom:1.5rem;
}
.iwj-ifttt-issue-btn{
  background:var(--iwj-card-bg);
  border:2px solid var(--iwj-border);
  border-radius:6px;
  padding:.85rem .75rem;
  font-family:'Lato',sans-serif;
  font-size:.9rem;
  font-weight:600;
  color:var(--iwj-primary);
  cursor:pointer;
  transition:all .2s ease;
  text-align:left;
  display:flex;align-items:center;justify-content:space-between;
}
.iwj-ifttt-issue-btn:hover{border-color:var(--iwj-accent);background:#F0F8F8}
.iwj-ifttt-issue-btn.active{
  border-color:var(--iwj-accent);
  background:var(--iwj-accent);
  color:#fff;
}
.iwj-ifttt-outcome{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:1.25rem;
  opacity:0;
  transform:translateY(8px);
  transition:opacity .3s ease,transform .3s ease;
}
.iwj-ifttt-outcome.show{opacity:1;transform:translateY(0)}
@media(max-width:760px){.iwj-ifttt-outcome{grid-template-columns:1fr}}
.iwj-ifttt-card{
  border-radius:8px;
  padding:1.2rem;
  border:1px solid;
  display:flex;flex-direction:column;justify-content:space-between;
}
.iwj-ifttt-card-danger{background:var(--iwj-danger-bg);border-color:var(--iwj-danger-border);color:var(--iwj-danger-text)}
.iwj-ifttt-card-success{background:var(--iwj-success-bg);border-color:var(--iwj-success-border);color:var(--iwj-success-text)}
.iwj-ifttt-card-header{
  font-family:'Montserrat',sans-serif;
  font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;margin-bottom:.5rem;
}
.iwj-ifttt-card-title{font-family:'Montserrat',sans-serif;font-size:1.05rem;font-weight:700;margin-bottom:.75rem}
.iwj-ifttt-card-list{margin-left:1.1rem;font-size:.88rem;line-height:1.5;margin-bottom:1rem}
.iwj-ifttt-card-list li{margin-bottom:.4rem}
.iwj-ifttt-card-action{
  margin-top:.75rem;padding-top:.75rem;
  border-top:1px solid rgba(0,0,0,.1);
  font-size:.8rem;font-weight:600;
}

/* =========================================================
   TOOL 3 — APPOINTMENT AGENDA & DIALOGUE BUILDER
   ========================================================= */
.iwj-agenda{
  --iwj-primary:#0A1F44;
  --iwj-accent:#4DAEAF;
  --iwj-accent-hover:#3a8f90;
  --iwj-bg:#FAF8F4;
  --iwj-card-bg:#ffffff;
  --iwj-border:#E5E0D5;
  font-family:'Lato',sans-serif;
  max-width:900px;
  margin:0 auto;
  background:var(--iwj-card-bg);
  border-radius:8px;
  box-shadow:0 4px 18px rgba(10,31,68,.06);
  border:1px solid var(--iwj-border);
  overflow:hidden;
}
.iwj-agenda *{box-sizing:border-box}
.iwj-agenda-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-agenda-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.2rem;margin-bottom:.4rem}
.iwj-agenda-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-agenda-body{padding:1.5rem}
.iwj-agenda-category{margin-bottom:1.5rem;border:1px solid var(--iwj-border);border-radius:8px;overflow:hidden}
.iwj-agenda-category-title{
  background:#F1EFE8;
  padding:.75rem 1rem;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  color:var(--iwj-primary);
  font-size:.92rem;
  border-bottom:1px solid var(--iwj-border);
}
.iwj-agenda-category-content{
  padding:1rem;
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:1rem;
}
@media(max-width:760px){.iwj-agenda-category-content{grid-template-columns:1fr}}
.iwj-agenda-list-block h4{
  font-family:'Montserrat',sans-serif;
  font-size:.72rem;
  text-transform:uppercase;
  letter-spacing:.04em;
  color:var(--iwj-accent);
  margin-bottom:.6rem;
}
.iwj-agenda-checkbox-item{
  display:flex;align-items:flex-start;
  margin-bottom:.6rem;
  font-size:.86rem;
  cursor:pointer;line-height:1.45;
}
.iwj-agenda-checkbox-item input{
  margin-right:.6rem;margin-top:.2rem;
  accent-color:var(--iwj-accent);
  width:16px;height:16px;flex-shrink:0;
}
.iwj-agenda-custom-box{
  margin-top:1.25rem;
  padding:1rem;
  background:var(--iwj-bg);
  border:1px dashed var(--iwj-border);
  border-radius:8px;
}
.iwj-agenda-custom-box h4{font-family:'Montserrat',sans-serif;font-size:.88rem;color:var(--iwj-primary);margin-bottom:.5rem}
.iwj-agenda-custom-box input{
  width:100%;padding:.6rem .7rem;
  border:1px solid var(--iwj-border);
  border-radius:6px;font-size:.88rem;margin-bottom:.6rem;
  font-family:'Lato',sans-serif;
}
.iwj-agenda-btn-container{
  text-align:center;margin-top:1.5rem;
  padding-top:1.25rem;border-top:2px solid var(--iwj-border);
}
.iwj-agenda-btn-print{
  background:var(--iwj-accent);color:#fff;border:none;
  padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;
  font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer;
  transition:background .2s;
}
.iwj-agenda-btn-print:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-agenda{border:none;box-shadow:none;max-width:100%}
  .iwj-agenda-btn-container,.iwj-agenda-custom-box,.iwj-agenda-header p{display:none}
  .iwj-agenda-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-agenda-category{border:none;margin-bottom:1rem}
  .iwj-agenda-category-title{background:none;border-bottom:1px solid var(--iwj-primary);padding:.2rem 0;margin-bottom:.5rem}
  .iwj-agenda-checkbox-item:not(.is-checked){display:none}
  .iwj-agenda-category-content{padding:0;gap:.5rem}
}
</style>

<div class="iwj-mtp-page">
  <div class="iwj-mtp-eyebrow">For Him</div>
  <p class="iwj-mtp-intro">
    Three quick tools, in order. Check your engine, see what's actually at stake if you
    ignore it, then build the exact agenda to bring into your next appointment. Ten minutes,
    no guesswork.
  </p>

  <!-- ================= TOOL 1: ENGINE & VITALITY CHECK ================= -->
  <div class="iwj-mtp-tool-wrap">
    <div class="iwj-mtp-tool-heading">1. Engine &amp; Vitality Check</div>
    <div class="iwj-mtp-tool-subhead">Adjust the sliders to your last 30 days. Get an instant baseline read.</div>

    <div class="iwj-dash">
      <div class="iwj-dash-header">
        <h3>Men's Health Engine &amp; Vitality Check</h3>
        <p>Adjust the sliders to your 30-day baseline to generate your custom doctor dialogue script.</p>
      </div>

      <div class="iwj-dash-grid">
        <div class="iwj-dash-input-panel">
          <div class="iwj-dash-section-title">1. Engine Sliders (1&ndash;10)</div>

          <div class="iwj-dash-slider-group">
            <div class="iwj-dash-slider-label"><span>Energy &amp; Stamina</span><span class="iwj-dash-slider-value" id="iwj-dash-val-energy">7</span></div>
            <input type="range" id="iwj-dash-slide-energy" min="1" max="10" value="7">
          </div>
          <div class="iwj-dash-slider-group">
            <div class="iwj-dash-slider-label"><span>Sleep Quality</span><span class="iwj-dash-slider-value" id="iwj-dash-val-sleep">6</span></div>
            <input type="range" id="iwj-dash-slide-sleep" min="1" max="10" value="6">
          </div>
          <div class="iwj-dash-slider-group">
            <div class="iwj-dash-slider-label"><span>Stress &amp; Temper</span><span class="iwj-dash-slider-value" id="iwj-dash-val-stress">7</span></div>
            <input type="range" id="iwj-dash-slide-stress" min="1" max="10" value="7">
          </div>
          <div class="iwj-dash-slider-group">
            <div class="iwj-dash-slider-label"><span>Physical Vitality</span><span class="iwj-dash-slider-value" id="iwj-dash-val-vitality">7</span></div>
            <input type="range" id="iwj-dash-slide-vitality" min="1" max="10" value="7">
          </div>

          <div class="iwj-dash-section-title" style="margin-top:1.5rem;">2. Slow-Drain Warnings</div>
          <div class="iwj-dash-toggles">
            <label class="iwj-dash-toggle-label"><input type="checkbox" class="iwj-dash-warning-toggle" value="the afternoon energy crash"> Afternoon Energy Crash (2&ndash;3 PM)</label>
            <label class="iwj-dash-toggle-label"><input type="checkbox" class="iwj-dash-warning-toggle" value="a shorter fuse and irritability"> Short Fuse / Irritability</label>
            <label class="iwj-dash-toggle-label"><input type="checkbox" class="iwj-dash-warning-toggle" value="waking up at 3:00 AM restless"> Sleep Struggle (3 AM wakeups)</label>
            <label class="iwj-dash-toggle-label"><input type="checkbox" class="iwj-dash-warning-toggle" value="slow physical recovery and aches"> Recovery Lag / Persistent Aches</label>
          </div>
        </div>

        <div class="iwj-dash-output">
          <div>
            <div class="iwj-dash-score-container">
              <div class="iwj-dash-score-title">Overall Vitality Score</div>
              <div class="iwj-dash-score-display" id="iwj-dash-total-score">6.8</div>
              <div class="iwj-dash-score-status" id="iwj-dash-score-status" style="color:#4DAEAF;">Moderate Vitality</div>
            </div>

            <div class="iwj-dash-chart">
              <div class="iwj-dash-bar-row">
                <div class="iwj-dash-bar-label"><span>Energy</span><span id="iwj-dash-bar-val-energy">7/10</span></div>
                <div class="iwj-dash-bar-track"><div class="iwj-dash-bar-fill" id="iwj-dash-bar-energy"></div></div>
              </div>
              <div class="iwj-dash-bar-row">
                <div class="iwj-dash-bar-label"><span>Sleep</span><span id="iwj-dash-bar-val-sleep">6/10</span></div>
                <div class="iwj-dash-bar-track"><div class="iwj-dash-bar-fill" id="iwj-dash-bar-sleep"></div></div>
              </div>
              <div class="iwj-dash-bar-row">
                <div class="iwj-dash-bar-label"><span>Stress</span><span id="iwj-dash-bar-val-stress">7/10</span></div>
                <div class="iwj-dash-bar-track"><div class="iwj-dash-bar-fill" id="iwj-dash-bar-stress"></div></div>
              </div>
              <div class="iwj-dash-bar-row">
                <div class="iwj-dash-bar-label"><span>Vitality</span><span id="iwj-dash-bar-val-vitality">7/10</span></div>
                <div class="iwj-dash-bar-track"><div class="iwj-dash-bar-fill" id="iwj-dash-bar-vitality"></div></div>
              </div>
            </div>
          </div>

          <div class="iwj-dash-script-box">
            <h4>Your 15-Minute Doctor Dialogue Script</h4>
            <p id="iwj-dash-generated-script">
              "Doc, I'm here for a baseline check. Over the last few months, my sleep quality has dropped below my normal baseline. I'd like to run a preventative screening so we have actual numbers to look at."
            </p>
          </div>
        </div>
      </div>
    </div>

    <p class="iwj-mtp-tool-disclaimer">
      This tool is an educational self-check, not a diagnostic instrument. Your scores and the generated script are conversation starters for your doctor, not a medical assessment.
    </p>
  </div>

  <!-- ================= TOOL 2: REALITY & PREVENTION ENGINE ================= -->
  <div class="iwj-mtp-tool-wrap">
    <div class="iwj-mtp-tool-heading">2. What's Actually at Stake</div>
    <div class="iwj-mtp-tool-subhead">Pick a warning sign. See the real-world cost of ignoring it next to the fix.</div>

    <div class="iwj-ifttt">
      <div class="iwj-ifttt-header">
        <h3>If This, Then That: Men's Health Reality Engine</h3>
        <p>Select a common warning sign below to see the real-world operational cost vs. the proactive fix.</p>
      </div>

      <div class="iwj-ifttt-body">
        <div class="iwj-ifttt-instruction">1. Choose a Warning Sign or Issue</div>

        <div class="iwj-ifttt-issue-grid">
          <button class="iwj-ifttt-issue-btn active" data-issue="heart">
            <span>Heart &amp; BP Alerts</span><span>&rarr;</span>
          </button>
          <button class="iwj-ifttt-issue-btn" data-issue="sleep">
            <span>Chronic Sleep Loss</span><span>&rarr;</span>
          </button>
          <button class="iwj-ifttt-issue-btn" data-issue="joints">
            <span>Persistent Aches</span><span>&rarr;</span>
          </button>
          <button class="iwj-ifttt-issue-btn" data-issue="stress">
            <span>Silent Burnout</span><span>&rarr;</span>
          </button>
        </div>

        <div class="iwj-ifttt-instruction" style="margin-top:.5rem;">2. Reality &amp; Prevention Analysis</div>

        <div class="iwj-ifttt-outcome show" id="iwj-ifttt-outcome">
          <div class="iwj-ifttt-card iwj-ifttt-card-danger">
            <div>
              <div class="iwj-ifttt-card-header">Unchecked Reality (The Cost)</div>
              <div class="iwj-ifttt-card-title" id="iwj-ifttt-cost-title">You suffer a major cardiac event.</div>
              <ul class="iwj-ifttt-card-list" id="iwj-ifttt-cost-list">
                <li>You lose months of work and fall behind on bills.</li>
                <li>Your family absorbs the stress and financial load.</li>
                <li>Recovery takes months or years to regain independence.</li>
              </ul>
            </div>
            <div class="iwj-ifttt-card-action">Cost: massive loss of time, income &amp; autonomy.</div>
          </div>

          <div class="iwj-ifttt-card iwj-ifttt-card-success">
            <div>
              <div class="iwj-ifttt-card-header">Proactive Move (The Fix)</div>
              <div class="iwj-ifttt-card-title" id="iwj-ifttt-fix-title">Schedule a 15-min cardiovascular checkup.</div>
              <ul class="iwj-ifttt-card-list" id="iwj-ifttt-fix-list">
                <li>Check blood pressure, cholesterol, and baseline markers.</li>
                <li>Get clear numbers without guessing.</li>
                <li>Keep yourself running strong and prevent sudden downtime.</li>
              </ul>
            </div>
            <div class="iwj-ifttt-card-action">Action: proactive prevention keeps you in the driver's seat.</div>
          </div>
        </div>
      </div>
    </div>

    <p class="iwj-mtp-tool-disclaimer">
      These scenarios describe general, possible outcomes for educational purposes — not a diagnosis or a prediction for your specific situation. Talk to a doctor about your actual risk.
    </p>
  </div>

  <!-- ================= TOOL 3: APPOINTMENT AGENDA BUILDER ================= -->
  <div class="iwj-mtp-tool-wrap">
    <div class="iwj-mtp-tool-heading">3. Build Your Appointment Agenda</div>
    <div class="iwj-mtp-tool-subhead">Check what fits. Print a clean, one-page briefing to hand your doctor.</div>

    <div class="iwj-agenda">
      <div class="iwj-agenda-header">
        <h3>My Appointment Agenda &amp; Dialogue Builder</h3>
        <p>Select the symptom statements and questions below that fit what you are experiencing. Click "Print / Save" at the bottom to create your clinic-ready sheet.</p>
      </div>

      <div class="iwj-agenda-body">

        <!-- CATEGORY 1 -->
        <div class="iwj-agenda-category">
          <div class="iwj-agenda-category-title">1. Energy, Stamina &amp; Daily Fatigue</div>
          <div class="iwj-agenda-category-content">
            <div class="iwj-agenda-list-block">
              <h4>Symptom Statements to Tell Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I experience an afternoon energy crash between 2&ndash;4 PM that makes it hard to focus.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I wake up physically exhausted even after 7 to 8 hours of sleep.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> My stamina has dropped; I no longer have energy for workouts or family routines.</label>
            </div>
            <div class="iwj-agenda-list-block">
              <h4>Questions to Ask Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Can we run a blood panel to check my ferritin, Vitamin D, and B12 levels?</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Could this fatigue be linked to a sleep disorder, thyroid, or adrenal issue?</label>
            </div>
          </div>
        </div>

        <!-- CATEGORY 2 -->
        <div class="iwj-agenda-category">
          <div class="iwj-agenda-category-title">2. Sleep Quality &amp; Nocturnal Patterns</div>
          <div class="iwj-agenda-category-content">
            <div class="iwj-agenda-list-block">
              <h4>Symptom Statements to Tell Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I wake up between 2&ndash;4 AM with a racing mind and struggle to fall back asleep.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> My partner says I snore loudly or stop breathing during sleep.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I wake up with morning headaches, dry mouth, and grogginess.</label>
            </div>
            <div class="iwj-agenda-list-block">
              <h4>Questions to Ask Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Do my symptoms warrant a home sleep apnea screening?</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> What non-medication steps do you recommend to regulate my sleep cycle?</label>
            </div>
          </div>
        </div>

        <!-- CATEGORY 3 -->
        <div class="iwj-agenda-category">
          <div class="iwj-agenda-category-title">3. Hormones, Vitality &amp; Intimate Health</div>
          <div class="iwj-agenda-category-content">
            <div class="iwj-agenda-list-block">
              <h4>Symptom Statements to Tell Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I have noticed a gradual, noticeable drop in my sex drive and desire.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I am losing muscle mass and strength despite maintaining normal activity.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I am gaining stubborn midsection fat that resists diet or exercise changes.</label>
            </div>
            <div class="iwj-agenda-list-block">
              <h4>Questions to Ask Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Can we order a hormone panel checking free/total testosterone and SHBG?</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> What are the lifestyle, nutritional, and clinical options to optimize my numbers?</label>
            </div>
          </div>
        </div>

        <!-- CATEGORY 4 -->
        <div class="iwj-agenda-category">
          <div class="iwj-agenda-category-title">4. Mood, Stress &amp; Cognitive Focus</div>
          <div class="iwj-agenda-category-content">
            <div class="iwj-agenda-list-block">
              <h4>Symptom Statements to Tell Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> My patience has shortened; I find myself snapping over minor daily friction.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I am experiencing brain fog&mdash;struggling with word recall and task focus.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I feel a persistent low-level anxiety or chest tightness about daily tasks.</label>
            </div>
            <div class="iwj-agenda-list-block">
              <h4>Questions to Ask Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> How can we check if this is driven by chronic stress vs. a hormonal imbalance?</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> What markers should we check to ensure my thyroid and adrenals are healthy?</label>
            </div>
          </div>
        </div>

        <!-- CATEGORY 5 (added — was missing from the original build) -->
        <div class="iwj-agenda-category">
          <div class="iwj-agenda-category-title">5. Joint Mobility, Recovery &amp; Physical Pain</div>
          <div class="iwj-agenda-category-content">
            <div class="iwj-agenda-list-block">
              <h4>Symptom Statements to Tell Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> My joints feel persistently stiff and achy in the mornings, taking an hour or more to loosen up.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> My muscles and joints take twice as long to recover from physical labor or workouts as they did a year ago.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I have a lingering, dull ache in my lower back or knees that limits my physical movement.</label>
            </div>
            <div class="iwj-agenda-list-block">
              <h4>Questions to Ask Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Should we run inflammatory blood markers (like hs-CRP or ESR) to check for systemic inflammation?</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Would you recommend a physical therapy screening or preventative imaging before this minor pain turns into a structural injury?</label>
            </div>
          </div>
        </div>

        <!-- CATEGORY 6 (added — was missing from the original build) -->
        <div class="iwj-agenda-category">
          <div class="iwj-agenda-category-title">6. Cardiovascular &amp; Preventative Aging</div>
          <div class="iwj-agenda-category-content">
            <div class="iwj-agenda-list-block">
              <h4>Symptom Statements to Tell Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I occasionally feel shortness of breath, heart fluttering, or physical tightness during moderate exertion.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I have a family history of heart disease, high blood pressure, or early heart attacks, and I want a proactive checkup.</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> I experience frequent heartburn, indigestion, or poor circulation in my hands and feet.</label>
            </div>
            <div class="iwj-agenda-list-block">
              <h4>Questions to Ask Doctor</h4>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Beyond standard cholesterol, should we check advanced cardiovascular markers like ApoB, Lp(a), or schedule a Coronary Calcium Scan?</label>
              <label class="iwj-agenda-checkbox-item"><input type="checkbox" class="iwj-agenda-sync-check"> Based on my age and family history, what is my #1 preventative priority over the next 5 to 10 years?</label>
            </div>
          </div>
        </div>

        <div class="iwj-agenda-custom-box">
          <h4>Don't see what you are experiencing? Add your own notes for the doctor:</h4>
          <input type="text" id="iwj-agenda-custom-symptom" placeholder="My custom symptom statement (e.g., 'I experience joint stiffness in my right knee...')">
          <input type="text" id="iwj-agenda-custom-question" placeholder="My custom question to ask (e.g., 'Should I get a physical therapy referral?')">
        </div>

        <div class="iwj-agenda-btn-container">
          <button class="iwj-agenda-btn-print" onclick="iwjAgendaPrint()">Print / Save My Doctor Agenda</button>
        </div>
      </div>
    </div>

    <p class="iwj-mtp-tool-disclaimer">
      This checklist helps you organize what to discuss with a licensed provider. It is not a substitute for professional medical advice, diagnosis, or treatment.
    </p>
  </div>

  <div class="iwj-mtp-page-disclaimer">
    <strong>A note on these tools:</strong> Everything on this page &mdash; the Engine &amp; Vitality Check, the Reality &amp; Prevention Engine, and the Appointment Agenda Builder &mdash; is educational and self-reflective in nature. None of it diagnoses, treats, or replaces a conversation with a licensed healthcare provider. If something here concerns you, the right next step is always an appointment, not a bigger number on a slider.
  </div>
</div>

<script>
(function(){
  // ---------- TOOL 1: Engine & Vitality Check ----------
  var dSliders = {
    energy: document.getElementById('iwj-dash-slide-energy'),
    sleep: document.getElementById('iwj-dash-slide-sleep'),
    stress: document.getElementById('iwj-dash-slide-stress'),
    vitality: document.getElementById('iwj-dash-slide-vitality')
  };
  var dVals = {
    energy: document.getElementById('iwj-dash-val-energy'),
    sleep: document.getElementById('iwj-dash-val-sleep'),
    stress: document.getElementById('iwj-dash-val-stress'),
    vitality: document.getElementById('iwj-dash-val-vitality')
  };
  var dBarFills = {
    energy: document.getElementById('iwj-dash-bar-energy'),
    sleep: document.getElementById('iwj-dash-bar-sleep'),
    stress: document.getElementById('iwj-dash-bar-stress'),
    vitality: document.getElementById('iwj-dash-bar-vitality')
  };
  var dBarVals = {
    energy: document.getElementById('iwj-dash-bar-val-energy'),
    sleep: document.getElementById('iwj-dash-bar-val-sleep'),
    stress: document.getElementById('iwj-dash-bar-val-stress'),
    vitality: document.getElementById('iwj-dash-bar-val-vitality')
  };
  var dTotalScoreEl = document.getElementById('iwj-dash-total-score');
  var dScoreStatusEl = document.getElementById('iwj-dash-score-status');
  var dScriptEl = document.getElementById('iwj-dash-generated-script');
  var dCheckboxes = document.querySelectorAll('.iwj-dash-warning-toggle');

  function dBarColor(v){
    if (v <= 4) return '#B5473D';
    if (v <= 6) return '#C9A052';
    return '#1C3A2A';
  }

  function dUpdate(){
    var e = parseInt(dSliders.energy.value, 10);
    var s = parseInt(dSliders.sleep.value, 10);
    var st = parseInt(dSliders.stress.value, 10);
    var v = parseInt(dSliders.vitality.value, 10);

    dVals.energy.textContent = e;
    dVals.sleep.textContent = s;
    dVals.stress.textContent = st;
    dVals.vitality.textContent = v;

    function updateBar(key, val){
      dBarFills[key].style.width = (val * 10) + '%';
      dBarFills[key].style.backgroundColor = dBarColor(val);
      dBarVals[key].textContent = val + '/10';
    }
    updateBar('energy', e);
    updateBar('sleep', s);
    updateBar('stress', st);
    updateBar('vitality', v);

    var avg = ((e + s + st + v) / 4).toFixed(1);
    dTotalScoreEl.textContent = avg;

    if (avg >= 8){
      dScoreStatusEl.textContent = 'Optimal Vitality';
      dScoreStatusEl.style.color = '#1C3A2A';
    } else if (avg >= 6){
      dScoreStatusEl.textContent = 'Moderate Vitality';
      dScoreStatusEl.style.color = '#4DAEAF';
    } else {
      dScoreStatusEl.textContent = 'Engine Warning — Action Needed';
      dScoreStatusEl.style.color = '#B5473D';
    }

    dGenerateScript(e, s, st, v);
  }

  function dGenerateScript(e, s, st, v){
    var scores = [
      { name: 'energy & stamina', val: e },
      { name: 'sleep quality', val: s },
      { name: 'stress management', val: st },
      { name: 'physical vitality', val: v }
    ];
    scores.sort(function(a, b){ return a.val - b.val; });
    var lowestArea = scores[0].name;

    var activeWarnings = Array.prototype.filter.call(dCheckboxes, function(box){ return box.checked; })
      .map(function(box){ return box.value; });

    var symptomString = 'my ' + lowestArea + ' has dropped below my normal baseline';
    if (activeWarnings.length === 1){
      symptomString += ', and I’ve been experiencing ' + activeWarnings[0];
    } else if (activeWarnings.length > 1){
      symptomString += ', along with ' + activeWarnings[0] + ' and ' + activeWarnings[1];
    }

    dScriptEl.textContent = '"Doc, I’m here for a routine baseline check. Over the last few months, ' + symptomString + '. I’d like to run a preventative blood and hormone screening so we have actual numbers to look at."';
  }

  Object.keys(dSliders).forEach(function(key){
    dSliders[key].addEventListener('input', dUpdate);
  });
  dCheckboxes.forEach(function(box){
    box.addEventListener('change', dUpdate);
  });
  dUpdate();

  // ---------- TOOL 2: IFTTT Reality Engine ----------
  var ifData = {
    heart: {
      costTitle: 'You suffer a major cardiac event.',
      costList: [
        'You lose months of work and fall behind on bills.',
        'Your family absorbs the heavy stress and financial load.',
        'Recovery takes months or years to regain independence.'
      ],
      fixTitle: 'Schedule a 15-min cardiovascular checkup.',
      fixList: [
        'Check blood pressure, cholesterol, and baseline markers.',
        'Get clear numbers without guessing.',
        'Keep yourself running strong and prevent sudden downtime.'
      ]
    },
    sleep: {
      costTitle: 'Your cognitive engine & testosterone crash.',
      costList: [
        'Reaction times drop, increasing accident risk at work or driving.',
        'Chronic fatigue kills motivation, libido, and patience.',
        'Long-term risk of hypertension and diabetes skyrockets.'
      ],
      fixTitle: 'Run a sleep & metabolic audit with your doctor.',
      fixList: [
        'Rule out sleep apnea or nocturnal cortisol spikes.',
        'Make simple targeted adjustments to your evening routine.',
        'Protect your daily focus, mood, and stamina before burnout hits.'
      ]
    },
    joints: {
      costTitle: 'A minor mechanical issue becomes a structural tear.',
      costList: [
        'You end up needing surgery or intensive long-term rehab.',
        'You are sidelined from workouts, sports, and physical labor.',
        'Chronic pain erodes your daily mood and patience.'
      ],
      fixTitle: 'Get an early check or physical therapy screen.',
      fixList: [
        'Address minor joint inflammation or mobility limits early.',
        'Learn targeted strengthening for supporting muscles.',
        'Keep your physical independence and active lifestyle intact.'
      ]
    },
    stress: {
      costTitle: 'You hit an emotional or physical wall.',
      costList: [
        'Relationships strain under short tempers and withdrawal.',
        'Chronic cortisol damages your digestive and immune systems.',
        'Sudden burnout forces you to step away from responsibilities.'
      ],
      fixTitle: 'Establish a weekly ‘Release Valve’ & baseline screening.',
      fixList: [
        'Build non-negotiable weekly recharge habits into your calendar.',
        'Check cortisol, thyroid, and blood sugar levels with your doctor.',
        'Vent the pressure safely so you stay strong for those who depend on you.'
      ]
    }
  };

  var ifButtons = document.querySelectorAll('.iwj-ifttt-issue-btn');
  var ifPanel = document.getElementById('iwj-ifttt-outcome');
  var ifCostTitle = document.getElementById('iwj-ifttt-cost-title');
  var ifCostList = document.getElementById('iwj-ifttt-cost-list');
  var ifFixTitle = document.getElementById('iwj-ifttt-fix-title');
  var ifFixList = document.getElementById('iwj-ifttt-fix-list');

  function ifUpdate(issueKey){
    var content = ifData[issueKey];
    ifPanel.classList.remove('show');
    setTimeout(function(){
      ifCostTitle.textContent = content.costTitle;
      ifCostList.innerHTML = content.costList.map(function(item){ return '<li>' + item + '</li>'; }).join('');
      ifFixTitle.textContent = content.fixTitle;
      ifFixList.innerHTML = content.fixList.map(function(item){ return '<li>' + item + '</li>'; }).join('');
      ifPanel.classList.add('show');
    }, 150);
  }

  ifButtons.forEach(function(btn){
    btn.addEventListener('click', function(){
      ifButtons.forEach(function(b){ b.classList.remove('active'); });
      btn.classList.add('active');
      ifUpdate(btn.getAttribute('data-issue'));
    });
  });

  // ---------- TOOL 3: Agenda Builder print ----------
  window.iwjAgendaPrint = function(){
    var items = document.querySelectorAll('.iwj-agenda-checkbox-item');
    items.forEach(function(item){
      var input = item.querySelector('input');
      if (input && input.checked){
        item.classList.add('is-checked');
      } else {
        item.classList.remove('is-checked');
      }
    });
    window.print();
  };
})();
</script>

<?php get_footer(); ?>
