<?php
/**
 * Template Name: Iwosan Maternal Health — Track B Pillar 5: WOC The Day 1 to 14 Postpartum Red-Alert Protocol
 * Description: Maternal Health Track B pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>WOC The Day 1 to 14 Postpartum Red-Alert Protocol</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK B, PILLAR 5: WOC The Day 1 to 14 Postpartum Red-Alert Protocol
     ============================================ -->
<style>
.iwj-b5-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-b5-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#8B5E3C;margin-bottom:.75rem;}
.iwj-b5-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-b5-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-b5-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-b5-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-b5-section{margin-bottom:2.75rem}
.iwj-b5-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#8B5E3C;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-b5-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-b5-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-b5-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-b5-table{width:100%;border-collapse:collapse;font-size:.85rem;min-width:680px;}
.iwj-b5-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .8rem;}
.iwj-b5-table td{padding:.8rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.5;}
.iwj-b5-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-b5-table td.exp{color:#5F5E5A}
.iwj-b5-table td.says{color:#7A6E65;font-style:italic;}
.iwj-b5-table td.demand{font-weight:700;color:#7A2E24;}
.iwj-b5-script-card{background:#FAF8F4;border-left:3px solid #8B5E3C;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-b5-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.95rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-b5-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;margin-bottom:.6rem;}
.iwj-b5-script-why{font-size:.82rem;line-height:1.6;color:#7A6E65;}
.iwj-b5-script-why strong{color:#5F5E5A}
.iwj-b5-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b5-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-b5-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(139,94,60,.15);padding-top:.75rem;}
.iwj-b5-travel-box{background:#F5EFE7;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-b5-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-b5-travel-list li{margin-bottom:.6rem}
.iwj-b5-travel-list li:last-child{margin-bottom:0}
.iwj-b5-travel-list strong{color:#0A1F44}
.iwj-b5-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F5EFE7;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}
.iwj-b5-urgent-note{margin-top:1.25rem;padding:1.25rem 1.5rem;background:#FBEFED;border-left:3px solid #7A2E24;border-radius:4px;font-size:.85rem;font-weight:300;color:#7A2E24;line-height:1.65;}

/* ---------- WOC Postpartum Red-Alert & ER Briefing ---------- */
.iwj-pra{--iwj-primary:#0A1F44;--iwj-accent:#8B5E3C;--iwj-accent-hover:#6f4a2f;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;--iwj-alert-bg:#FBEFED;--iwj-alert-text:#7A2E24;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-pra *{box-sizing:border-box}
.iwj-pra-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-pra-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-pra-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-pra-content{padding:1.5rem}
.iwj-pra-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-pra-grid{grid-template-columns:1fr}}
.iwj-pra-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-pra-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-pra-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-pra-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-pra-custom{margin-top:1.25rem;padding:1rem;background:#F5EFE7;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-pra-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-pra-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;margin-top:.3rem;}
.iwj-pra-alert{background:var(--iwj-alert-bg);border-left:4px solid var(--iwj-alert-text);padding:1rem;border-radius:0 8px 8px 0;margin-top:1.25rem;font-size:.86rem;line-height:1.55}
.iwj-pra-alert h4{color:var(--iwj-alert-text);margin-bottom:.5rem;font-size:.92rem;font-weight:800}
.iwj-pra-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-pra-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-pra-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-pra{border:none;box-shadow:none;max-width:100%}
  .iwj-pra-btn-wrap,.iwj-pra-custom,.iwj-pra-header p{display:none}
  .iwj-pra-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-pra-item:not(.is-checked){display:none}
  .iwj-pra-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-pra-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-b5-page">
  <div class="iwj-b5-eyebrow">Maternal Health &mdash; Track B: WOC Advocacy Sanctuary &mdash; Pillar 5</div>
  <p class="iwj-b5-subtitle">
    Why the First Two Weeks Matter Most: Recognizing Postpartum Preeclampsia, Blood Clots, and Demanding ER Readmission
  </p>

  <img class="iwj-b5-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/taking-car-of-mom-scaled.png" alt="A family caring for a new mother during the critical early postpartum days">

  <p class="iwj-b5-lede">
    In the United States, over 50% of pregnancy-related deaths occur AFTER
    the baby is born &mdash; most frequently within the first 7 to 14 days
    postpartum. For Black, Brown, and Indigenous mothers, this window is
    extraordinarily dangerous. When a Woman of Color goes home after birth,
    she is often told that headache, fatigue, swelling, and chest pressure
    are just &ldquo;normal sleep deprivation and recovery.&rdquo; Worse,
    when WOC return to Emergency Rooms with postpartum complications like
    preeclampsia, pulmonary embolisms (blood clots), or delayed hemorrhage,
    they are statistically more likely to be made to wait, misdiagnosed with
    anxiety, or sent home.
  </p>

  <!-- SECTION 1: THE WOC REALITY CHECK -->
  <div class="iwj-b5-section">
    <div class="iwj-b5-section-title">The WOC Reality Check</div>
    <div class="iwj-b5-heading">Your Pregnancy Risk Does Not End When the Baby Is Born.</div>
    <p class="iwj-b5-body">
      The most dangerous misconception in maternal healthcare is that
      childbirth is the finish line. In reality, your cardiovascular and
      coagulation (blood-clotting) systems undergo massive, rapid shifts in
      the first two weeks after delivery.
    </p>
    <p class="iwj-b5-body">
      For Women of Color, systemic bias often creates a lethal blind spot
      during this window. Early symptoms of Postpartum Preeclampsia,
      Pulmonary Embolism (PE), and Secondary Hemorrhage are repeatedly
      dismissed as &ldquo;new-mom exhaustion&rdquo; or &ldquo;panic
      attacks.&rdquo;
    </p>
    <p class="iwj-b5-body">
      Under Iwosan Journeys, our stance is non-negotiable: You do not wait
      six weeks to check a flashing engine light. You and your partner must
      monitor your vital signs at home during the first 14 days, and if a
      red-flag symptom appears, you do not ask for permission &mdash; you
      demand immediate obstetric emergency triage.
    </p>
  </div>

  <!-- SECTION 2: THE THREE KILLERS -->
  <div class="iwj-b5-section">
    <div class="iwj-b5-section-title">The Day 1&ndash;14 Red-Flag Audit <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Know the Three Killers)</span></div>
    <p class="iwj-b5-body">
      Do not ignore these symptoms or let anyone tell you to sleep it off.
      These are the three leading causes of preventable postpartum
      mortality in Women of Color:
    </p>
    <div class="iwj-b5-table-wrap">
      <table class="iwj-b5-table">
        <thead><tr><th>The Condition</th><th>What You Experience</th><th>The Lethal Brush-Off</th><th>What You Must Do Immediately</th></tr></thead>
        <tbody>
          <tr>
            <td>1. Postpartum Preeclampsia <span style="font-weight:400;font-style:italic;color:#7A6E65;">(can strike up to 6 weeks post-birth)</span></td>
            <td class="exp">Severe headache that won't go away, spots/flashing lights/blurry vision, sudden facial/hand puffiness, BP &ge;140/90</td>
            <td class="says">&ldquo;You're just sleep-deprived and stressed from the new baby.&rdquo;</td>
            <td class="demand">Go to the ER or Labor &amp; Delivery Triage immediately. Postpartum preeclampsia can cause seizures or stroke within hours if untreated.</td>
          </tr>
          <tr>
            <td>2. Pulmonary Embolism <span style="font-weight:400;font-style:italic;color:#7A6E65;">(blood clot in lungs)</span></td>
            <td class="exp">Sudden shortness of breath while resting, sharp chest pain when breathing, racing heartbeat, one leg swollen/red/hot</td>
            <td class="says">&ldquo;Your chest just hurts from breastfeeding or carrying the baby.&rdquo;</td>
            <td class="demand">Call 911 or go to the nearest ER immediately. Demand a CT Pulmonary Angiogram or D-dimer test to rule out a clot.</td>
          </tr>
          <tr>
            <td>3. Secondary Postpartum Hemorrhage <span style="font-weight:400;font-style:italic;color:#7A6E65;">(can occur days or weeks after birth)</span></td>
            <td class="exp">Bleeding suddenly turns bright red again, soaking a pad in under an hour, passing clots larger than an egg/plum, feeling faint/dizzy/clammy</td>
            <td class="says">&ldquo;Bleeding comes and goes as your uterus shrinks.&rdquo;</td>
            <td class="demand">Go to the ER immediately. You may have retained placenta or an uterine infection requiring emergency intervention.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- SECTION 3: SURVIVAL SCRIPTS -->
  <div class="iwj-b5-section">
    <div class="iwj-b5-section-title">Survival Scripts for Emergency Room Readmission</div>
    <p class="iwj-b5-body">
      When a postpartum Woman of Color walks into a general Emergency Room,
      triage nurses often treat her as a standard medical patient rather
      than a high-risk obstetric patient. Use these exact scripts to demand
      OB Triage and cut through bias:
    </p>

    <div class="iwj-b5-script-card">
      <div class="iwj-b5-script-label">1. The &ldquo;Immediate OB Triage&rdquo; ER Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(The moment you arrive at ER Triage)</span></div>
      <div class="iwj-b5-script-say">&ldquo;I am [Number] days postpartum from a [vaginal / Cesarean] birth. I am presenting with [severe headache / BP of 140/90 / chest pain / heavy bleeding]. I am at high clinical risk for [postpartum preeclampsia / pulmonary embolism / hemorrhage]. I request an immediate transfer to Obstetric / Labor &amp; Delivery Triage or an immediate obstetric consult.&rdquo;</div>
      <div class="iwj-b5-script-why"><strong>Why It Works:</strong> Naming your exact postpartum day and stating the specific life-threatening differential diagnoses forces triage to escalate your priority level immediately.</div>
    </div>

    <div class="iwj-b5-script-card">
      <div class="iwj-b5-script-label">2. The &ldquo;Refuse the Anxiety Diagnosis&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(If an ER doctor says &ldquo;Your chest feels tight because you're having a panic attack&rdquo;)</span></div>
      <div class="iwj-b5-script-say">&ldquo;Do not discharge me with an anxiety diagnosis. I am a postpartum Woman of Color presenting with classic physiological symptoms of a [pulmonary embolism / cardiovascular event]. Have you performed a CT angiogram, a chest X-ray, or checked my cardiac enzymes and D-dimer? I will not leave until those objective tests are run.&rdquo;</div>
      <div class="iwj-b5-script-why"><strong>Why It Works:</strong> It refuses subjective psychological labeling and demands objective diagnostic imaging and blood work.</div>
    </div>

    <div class="iwj-b5-script-card">
      <div class="iwj-b5-script-label">3. The &ldquo;Document the Refusal&rdquo; ER Law <span style="color:#7A6E65;font-weight:400;font-style:italic;">(If the ER doctor refuses to run a scan, lab, or admit you)</span></div>
      <div class="iwj-b5-script-say">&ldquo;I understand that is your clinical opinion. Please document in my official hospital chart right now that I am [Number] days postpartum, that I explicitly requested [Name of Scan / Test / OB Admission] for my [chest pain / severe headache / BP spike], and note that you refused to order it. I request a printed copy of my chart notes before I walk out of this room.&rdquo;</div>
      <div class="iwj-b5-script-why"><strong>Why It Works:</strong> No ER physician wants to assume the malpractice liability of discharging a postpartum Woman of Color with a documented refusal of a clot or preeclampsia workup. They will almost always order the test.</div>
    </div>
  </div>

  <img class="iwj-b5-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/5-hardtime-breastfeeding.png" alt="A postpartum mother navigating a difficult early recovery period">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-b5-section">
    <div class="iwj-b5-section-title">Interactive Tool for WOC Pillar 5</div>
    <div class="iwj-b5-tool-heading">The WOC Postpartum Red-Alert &amp; ER Briefing</div>
    <div class="iwj-b5-tool-subhead">
      Do not rely on memory during a postpartum emergency. Use this during
      the first 14 days at home. If symptoms appear, check them off, enter
      your blood pressure, and print your ER Emergency Briefing to hand
      directly to the ER triage nurse.
    </div>

    <div class="iwj-pra">
      <div class="iwj-pra-header">
        <h3>WOC Postpartum Emergency ER Briefing</h3>
        <p>Check any symptoms you are experiencing. Print or save this briefing and hand it directly to the Emergency Room Triage Nurse to demand immediate Obstetric Triage.</p>
      </div>
      <div class="iwj-pra-content">
        <div class="iwj-pra-grid">
          <div class="iwj-pra-card">
            <div class="iwj-pra-card-title">1. Postpartum Preeclampsia Red Flags</div>
            <label class="iwj-pra-item"><input type="checkbox"> I have a severe, persistent headache that is not relieved by Tylenol/rest.</label>
            <label class="iwj-pra-item"><input type="checkbox"> I am experiencing vision changes (spots, blurriness, or flashing lights).</label>
            <label class="iwj-pra-item"><input type="checkbox"> My blood pressure is reading &ge;140/90 (or significantly above my normal baseline).</label>
            <label class="iwj-pra-item"><input type="checkbox"> I have sudden swelling in my face/hands or upper right abdominal pain.</label>
          </div>
          <div class="iwj-pra-card">
            <div class="iwj-pra-card-title">2. Blood Clot (PE) &amp; Hemorrhage Flags</div>
            <label class="iwj-pra-item"><input type="checkbox"> I have sudden shortness of breath while resting or sharp chest pain when breathing.</label>
            <label class="iwj-pra-item"><input type="checkbox"> I have one leg that is swollen, red, tender, or hot to the touch.</label>
            <label class="iwj-pra-item"><input type="checkbox"> My bleeding has suddenly increased, soaked a pad in &lt;1 hour, or passed large clots.</label>
            <label class="iwj-pra-item"><input type="checkbox"> I am experiencing dizziness, faintness, clammy skin, or a high fever.</label>
          </div>
          <div class="iwj-pra-card">
            <div class="iwj-pra-card-title">3. Required ER Triage Demands</div>
            <label class="iwj-pra-item"><input type="checkbox" checked> I am a high-risk postpartum patient; I request immediate transfer to OB / Labor &amp; Delivery Triage.</label>
            <label class="iwj-pra-item"><input type="checkbox" checked> I request a complete Postpartum Preeclampsia Workup (CBC, liver enzymes, uric acid, urine protein).</label>
            <label class="iwj-pra-item"><input type="checkbox" checked> I request a blood clot/cardiovascular evaluation (D-dimer, CT angiogram, or chest imaging).</label>
          </div>
          <div class="iwj-pra-card">
            <div class="iwj-pra-card-title">4. Patient Rights &amp; Accountability</div>
            <label class="iwj-pra-item"><input type="checkbox" checked> Please evaluate my symptoms using objective diagnostic tests, not subjective impressions of anxiety.</label>
            <label class="iwj-pra-item"><input type="checkbox" checked> If any requested diagnostic test is refused, I require formal documentation of the refusal in my medical chart today.</label>
          </div>
        </div>

        <div class="iwj-pra-custom">
          <h4>My Postpartum Clinical Details for the ER Triage Team</h4>
          <input type="text" placeholder="Days Postpartum (e.g., 'Day 6 Post-Vaginal Birth')">
          <input type="text" placeholder="Current Blood Pressure Reading (e.g., '148/94 measured at home at 2:15 PM')">
        </div>

        <div class="iwj-pra-alert">
          <h4>THE EMERGENCY CHARTING ACCOUNTABILITY LAW</h4>
          <p>&ldquo;I understand that is your clinical opinion. Please document in my official hospital chart right now that I am [Number] days postpartum, that I explicitly requested [Name of Scan / Test / OB Admission] for my reported symptoms, and note that you refused to order it. I request a printed copy of my chart notes before I walk out of this room.&rdquo;</p>
        </div>

        <div class="iwj-pra-btn-wrap">
          <button class="iwj-pra-btn" onclick="iwjPraPrint()">Print / Save ER Emergency Briefing</button>
        </div>
      </div>
    </div>

    <p class="iwj-b5-tool-disclaimer">
      This tool helps you organize what to communicate to emergency medical staff. It is not a substitute for professional medical advice, diagnosis, or treatment.
    </p>
    <div class="iwj-b5-urgent-note">
      If you are experiencing any of the red-flag symptoms above right now, do not wait to fill out this form completely &mdash; go to the nearest Emergency Room or call 911 immediately. This tool is meant to prepare you in advance, not delay urgent care.
    </div>
  </div>

  <!-- SECTION 5: CONNECTION TO POSTPARTUM SANCTUARIES -->
  <div class="iwj-b5-section">
    <div class="iwj-b5-section-title">Connection to Postpartum Sanctuaries</div>
    <div class="iwj-b5-heading" style="font-size:1.1rem;">Protecting Your Healing Environment</div>
    <div class="iwj-b5-travel-box">
      <p class="iwj-b5-body" style="margin-bottom:1rem;">
        You should never have to recover in an environment where your safety
        feels ignored. Through our travel arm Checked Bags and Good Vibes
        (bagsandvibes.com), we assist families with:
      </p>
      <ul class="iwj-b5-travel-list">
        <li><strong>Culturally Safe 4th Trimester Care Navigation:</strong> Connecting postpartum mothers with Black- and Brown-led perinatal home-visiting nurses, WOC postpartum doulas, and culturally congruent pelvic floor/lactation specialists.</li>
        <li><strong>Postpartum Rest &amp; Recalibration Sanctuaries:</strong> Arranging restorative, supportive postpartum retreat travel once the immediate clinical recovery window is safely passed.</li>
      </ul>
    </div>
  </div>

  <div class="iwj-b5-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider. If you are experiencing a medical emergency, call 911 or go to the nearest emergency room immediately.
  </div>
</div>

<script>
(function(){
  window.iwjPraPrint = function(){
    var items = document.querySelectorAll('.iwj-pra-item');
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
