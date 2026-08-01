<?php
/**
 * Template Name: Iwosan Maternal Health — Track B Pillar 2: WOC Prenatal Bias Defense & The Preeclampsia Watch
 * Description: Maternal Health Track B pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>WOC Prenatal Bias Defense &amp; The Preeclampsia Watch</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK B, PILLAR 2: WOC Prenatal Bias Defense & The Preeclampsia Watch
     ============================================ -->
<style>
.iwj-b2-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-b2-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#8B5E3C;margin-bottom:.75rem;}
.iwj-b2-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-b2-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-b2-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-b2-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-b2-section{margin-bottom:2.75rem}
.iwj-b2-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#8B5E3C;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-b2-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-b2-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-b2-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-b2-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-b2-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-b2-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-b2-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-b2-table td.says{color:#7A6E65;font-style:italic;}
.iwj-b2-table td.demand{font-weight:600;color:#7A2E24;}
.iwj-b2-script-card{background:#FAF8F4;border-left:3px solid #8B5E3C;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-b2-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.95rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-b2-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;margin-bottom:.6rem;}
.iwj-b2-script-why{font-size:.82rem;line-height:1.6;color:#7A6E65;}
.iwj-b2-script-why strong{color:#5F5E5A}
.iwj-b2-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b2-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-b2-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(139,94,60,.15);padding-top:.75rem;}
.iwj-b2-travel-box{background:#F5EFE7;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-b2-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-b2-travel-list li{margin-bottom:.6rem}
.iwj-b2-travel-list li:last-child{margin-bottom:0}
.iwj-b2-travel-list strong{color:#0A1F44}
.iwj-b2-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F5EFE7;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}

/* ---------- WOC Preeclampsia & Bias-Defense Dashboard ---------- */
.iwj-pbd{--iwj-primary:#0A1F44;--iwj-accent:#8B5E3C;--iwj-accent-hover:#6f4a2f;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;--iwj-alert-bg:#FBEFED;--iwj-alert-border:#D9A9A1;--iwj-alert-text:#7A2E24;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-pbd *{box-sizing:border-box}
.iwj-pbd-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-pbd-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-pbd-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-pbd-content{padding:1.5rem}
.iwj-pbd-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-pbd-grid{grid-template-columns:1fr}}
.iwj-pbd-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-pbd-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-pbd-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-pbd-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-pbd-alert{background:var(--iwj-alert-bg);border-left:4px solid var(--iwj-alert-text);padding:1rem;border-radius:0 8px 8px 0;margin-top:1.25rem;font-size:.86rem;line-height:1.55}
.iwj-pbd-alert h4{color:var(--iwj-alert-text);margin-bottom:.5rem;font-size:.92rem;font-weight:800}
.iwj-pbd-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-pbd-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-pbd-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-pbd{border:none;box-shadow:none;max-width:100%}
  .iwj-pbd-btn-wrap,.iwj-pbd-header p{display:none}
  .iwj-pbd-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-pbd-item:not(.is-checked){display:none}
  .iwj-pbd-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-pbd-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-b2-page">
  <div class="iwj-b2-eyebrow">Maternal Health &mdash; Track B: WOC Advocacy Sanctuary &mdash; Pillar 2</div>
  <p class="iwj-b2-subtitle">
    Protecting Your Life: How to Cut Through Clinical Bias and Track Your Cardiovascular Baseline
  </p>

  <img class="iwj-b2-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/know-my-body-scaled.png" alt="Representing the confidence of knowing your own body's baseline">

  <!-- SECTION 1: THE WOC REALITY CHECK -->
  <div class="iwj-b2-section">
    <div class="iwj-b2-section-title">The WOC Reality Check</div>
    <div class="iwj-b2-heading">You Know Your Body Better Than a 10-Minute Clinical Protocol.</div>
    <p class="iwj-b2-body">
      The most dangerous phrase a pregnant Woman of Color can hear in an exam
      room is: &ldquo;You're just having normal pregnancy
      swelling/headaches &mdash; stop worrying so much.&rdquo;
    </p>
    <p class="iwj-b2-body">
      Black and Indigenous mothers face dramatically higher rates of
      preeclampsia (pregnancy-induced high blood pressure), gestational
      diabetes, and preterm labor. Tragically, when WOC report the early
      warning signs &mdash; such as headaches, vision changes, or chest
      shortness of breath &mdash; they are routinely mislabeled as
      &ldquo;anxious&rdquo; or &ldquo;aggressive.&rdquo;
    </p>
    <p class="iwj-b2-body">
      Under Iwosan Journeys, we teach you to move from passive patient to
      Chief Medical Advocate for your own body. We equip you with objective
      home monitoring protocols and survival scripts to demand immediate,
      respectful clinical investigation.
    </p>
  </div>

  <!-- SECTION 2: RED-FLAG AUDIT -->
  <div class="iwj-b2-section">
    <div class="iwj-b2-section-title">The WOC Preeclampsia &amp; Cardiovascular Red-Flag Audit</div>
    <p class="iwj-b2-body">
      Do not wait for your monthly clinic checkup. Preeclampsia can spike in
      a matter of hours. Track these symptoms at home:
    </p>
    <div class="iwj-b2-table-wrap">
      <table class="iwj-b2-table">
        <thead><tr><th>What You Are Feeling</th><th>The Dangerous Brush-Off</th><th>When You Must Demand Immediate Evaluation</th></tr></thead>
        <tbody>
          <tr>
            <td>Persistent or Severe Headache</td>
            <td class="says">&ldquo;Take Tylenol and drink more water.&rdquo;</td>
            <td class="demand">Any headache that does not resolve with rest/hydration &mdash; especially if accompanied by spots in your vision, sensitivity to light, or neck pain &mdash; demands an immediate blood pressure check and preeclampsia lab work.</td>
          </tr>
          <tr>
            <td>Upper Right Abdominal Pain</td>
            <td class="says">&ldquo;That's just baby's foot kicking your ribs.&rdquo;</td>
            <td class="demand">Sharp, dull, or burning pain right below your right ribcage is a red-flag symptom of HELLP Syndrome (a severe liver/blood complication of preeclampsia). Do not wait.</td>
          </tr>
          <tr>
            <td>Sudden Swelling in Face / Hands</td>
            <td class="says">&ldquo;All pregnant women get swollen ankles.&rdquo;</td>
            <td class="demand">Gradual foot swelling happens, but sudden puffiness in your face, around your eyes, or hands that can't close/remove rings is a cardiovascular warning sign.</td>
          </tr>
          <tr>
            <td>Shortness of Breath or Chest Pain</td>
            <td class="says">&ldquo;Baby is crowding your lungs.&rdquo;</td>
            <td class="demand">Shortness of breath while resting, chest tightness, or a racing heartbeat can indicate peripartum cardiomyopathy or pulmonary embolism. Go to the hospital immediately.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- SECTION 3: CONVERSATION SCRIPTS -->
  <div class="iwj-b2-section">
    <div class="iwj-b2-section-title">Conversation Scripts <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Cutting Through Bias)</span></div>
    <p class="iwj-b2-body">
      When you present with a warning sign, use these evidence-based scripts
      to force the care team to evaluate your physiological data rather than
      judging your tone:
    </p>

    <div class="iwj-b2-script-card">
      <div class="iwj-b2-script-label">1. The &ldquo;Objective Baseline&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(When told you are &ldquo;just anxious&rdquo;)</span></div>
      <div class="iwj-b2-script-say">&ldquo;Do not label my symptoms as anxiety. My normal pre-pregnancy blood pressure baseline is [115/75]. Right now, it is [140/90] and I have a persistent headache. That is an objective clinical spike. What differential diagnoses are we ruling out right now?&rdquo;</div>
      <div class="iwj-b2-script-why"><strong>Why It Works:</strong> It strips away subjective bias and forces the provider to respond to objective physiological numbers.</div>
    </div>

    <div class="iwj-b2-script-card">
      <div class="iwj-b2-script-label">2. The &ldquo;Escalate the Room&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(When a nurse or doctor ignores your pain or symptoms)</span></div>
      <div class="iwj-b2-script-say">&ldquo;I am reporting a severe symptom that is a documented warning sign for preeclampsia/complications. Since my concerns are not being investigated, I request the Charge Nurse, the Attending Physician on call, and the hospital's Patient Advocate to come to this room immediately.&rdquo;</div>
      <div class="iwj-b2-script-why"><strong>Why It Works:</strong> It activates the hospital's internal accountability chain of command.</div>
    </div>

    <div class="iwj-b2-script-card">
      <div class="iwj-b2-script-label">3. The &ldquo;B.R.A.I.N. + WOC Equity&rdquo; Consent Script</div>
      <div class="iwj-b2-script-say">&ldquo;Before we agree to [Name of Induction / Intervention], let's walk through the B.R.A.I.N. framework: What are the Benefits, Risks, and Alternatives? And specifically, how does this intervention impact my risk for maternal hemorrhage or Cesarean delivery, given my clinical baseline?&rdquo;</div>
      <div class="iwj-b2-script-why"><strong>Why It Works:</strong> It demands evidence-based informed consent while explicitly naming the risk factors that impact Women of Color.</div>
    </div>
  </div>

  <img class="iwj-b2-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/Not-listening-scaled.png" alt="Representing the frustration of concerns being dismissed">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-b2-section">
    <div class="iwj-b2-section-title">Interactive Tool for WOC Prenatal Advocacy</div>
    <div class="iwj-b2-tool-heading">The WOC Preeclampsia &amp; Bias-Defense Dashboard</div>
    <div class="iwj-b2-tool-subhead">
      Audit your home symptoms, log your baseline blood pressure, and
      generate a printable WOC Hospital Advocacy &amp; Legal Briefing with
      the exact documentation scripts to protect your care.
    </div>

    <div class="iwj-pbd">
      <div class="iwj-pbd-header">
        <h3>WOC Preeclampsia Watch &amp; Bias-Defense Briefing</h3>
        <p>Check any symptoms you are experiencing and print this briefing. Use it in the hospital or exam room to demand objective cardiovascular testing and document accountability.</p>
      </div>
      <div class="iwj-pbd-content">
        <div class="iwj-pbd-grid">
          <div class="iwj-pbd-card">
            <div class="iwj-pbd-card-title">1. Cardiovascular &amp; Preeclampsia Red Flags</div>
            <label class="iwj-pbd-item"><input type="checkbox"> I have a persistent or severe headache that is not relieved by hydration or rest.</label>
            <label class="iwj-pbd-item"><input type="checkbox"> I am experiencing visual changes (spots, blurriness, flashing lights, or light sensitivity).</label>
            <label class="iwj-pbd-item"><input type="checkbox"> I feel sharp, dull, or burning pain below my right ribcage or upper abdomen.</label>
            <label class="iwj-pbd-item"><input type="checkbox"> I have sudden, noticeable swelling in my face, around my eyes, or in my hands.</label>
          </div>
          <div class="iwj-pbd-card">
            <div class="iwj-pbd-card-title">2. Required Clinical Diagnostic Demands</div>
            <label class="iwj-pbd-item"><input type="checkbox" checked> I request an immediate, manual blood pressure check and a review against my pre-pregnancy baseline.</label>
            <label class="iwj-pbd-item"><input type="checkbox" checked> I request a complete Preeclampsia Laboratory Panel (CBC, liver enzymes, serum uric acid, and urine protein).</label>
            <label class="iwj-pbd-item"><input type="checkbox"> I request a Non-Stress Test (NST) or Biophysical Profile (BPP) to evaluate baby's well-being.</label>
          </div>
          <div class="iwj-pbd-card">
            <div class="iwj-pbd-card-title">3. Bias-Defense &amp; Communication Rules</div>
            <label class="iwj-pbd-item"><input type="checkbox" checked> Please evaluate my symptoms using objective physiological lab markers, not subjective impressions of anxiety.</label>
            <label class="iwj-pbd-item"><input type="checkbox" checked> I request verbal explanations of all differential diagnoses being considered for my pain/symptoms.</label>
            <label class="iwj-pbd-item"><input type="checkbox"> I designate my accompanying support partner as my authorized verbal advocate in all room discussions.</label>
          </div>
          <div class="iwj-pbd-card">
            <div class="iwj-pbd-card-title">4. Accountability &amp; Escalation Clause</div>
            <label class="iwj-pbd-item"><input type="checkbox" checked> If a requested diagnostic screening or blood test is declined, I require the provider to formally document the refusal in my medical chart.</label>
            <label class="iwj-pbd-item"><input type="checkbox"> I reserve the right to request the attending physician on call and the Hospital Patient Advocate if my symptoms are dismissed.</label>
          </div>
        </div>

        <div class="iwj-pbd-alert">
          <h4>THE &ldquo;DOCUMENT THE REFUSAL&rdquo; ADVOCACY LAW</h4>
          <p>&ldquo;I understand that is your clinical opinion. Please document in my official medical chart right now that I explicitly requested [Name of Test / Panel] for my reported symptoms, and note that you refused to order it. I request a printed copy of my clinical visit notes before I leave the room today.&rdquo;</p>
        </div>

        <div class="iwj-pbd-btn-wrap">
          <button class="iwj-pbd-btn" onclick="iwjPbdPrint()">Print / Save WOC Advocacy Briefing</button>
        </div>
      </div>
    </div>

    <p class="iwj-b2-tool-disclaimer">
      This tool helps you organize what to discuss with a licensed provider. It is not a substitute for professional medical advice, diagnosis, or treatment. If you are experiencing a medical emergency, seek immediate emergency care.
    </p>
  </div>

  <!-- SECTION 5: CONNECTION TO CULTURALLY SAFE TRAVEL -->
  <div class="iwj-b2-section">
    <div class="iwj-b2-section-title">Connection to Culturally Safe Travel</div>
    <div class="iwj-b2-heading" style="font-size:1.1rem;">Finding Safe Sanctuaries for WOC Care</div>
    <div class="iwj-b2-travel-box">
      <p class="iwj-b2-body" style="margin-bottom:1rem;">
        No Woman of Color should feel forced to give birth in a facility
        where she feels unsafe or unheard. Through our travel arm Checked
        Bags and Good Vibes (bagsandvibes.com), we assist families with:
      </p>
      <ul class="iwj-b2-travel-list">
        <li><strong>Medical Travel Navigation for Culturally Congruent Care:</strong> Assisting with travel and lodging logistics to connect expectant mothers with Black- and Brown-led Midwifery practices, freestanding birth centers, and culturally safe hospital systems.</li>
        <li><strong>Prenatal Rest &amp; Nervous System Calibration:</strong> Curating low-stress babymoons designed to lower systemic cortisol and support healthy blood pressure baselines before birth.</li>
      </ul>
    </div>
  </div>

  <img class="iwj-b2-break-img" style="object-position:50% 30%;" src="https://iwosanjourney.com/wp-content/uploads/2026/07/Dismissive-statements-scaled.png" alt="Representing the harm of dismissive clinical statements">

  <div class="iwj-b2-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  window.iwjPbdPrint = function(){
    var items = document.querySelectorAll('.iwj-pbd-item');
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
