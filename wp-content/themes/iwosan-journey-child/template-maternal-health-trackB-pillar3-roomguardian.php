<?php
/**
 * Template Name: Iwosan Maternal Health — Track B Pillar 3: WOC The Unapologetic Room Guardian
 * Description: Maternal Health Track B pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>WOC The Unapologetic Room Guardian</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK B, PILLAR 3: WOC The Unapologetic Room Guardian
     ============================================ -->
<style>
.iwj-b3-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-b3-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#8B5E3C;margin-bottom:.75rem;}
.iwj-b3-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-b3-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-b3-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-b3-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-b3-section{margin-bottom:2.75rem}
.iwj-b3-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#8B5E3C;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-b3-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-b3-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-b3-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-b3-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-b3-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-b3-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-b3-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-b3-table td.what{color:#5F5E5A}
.iwj-b3-table td.why{font-weight:600;color:#1C3A2A}
.iwj-b3-script-card{background:#FAF8F4;border-left:3px solid #8B5E3C;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-b3-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.95rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-b3-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;margin-bottom:.6rem;}
.iwj-b3-script-why{font-size:.82rem;line-height:1.6;color:#7A6E65;}
.iwj-b3-script-why strong{color:#5F5E5A}
.iwj-b3-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b3-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-b3-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(139,94,60,.15);padding-top:.75rem;}
.iwj-b3-travel-box{background:#F5EFE7;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-b3-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-b3-travel-list li{margin-bottom:.6rem}
.iwj-b3-travel-list li:last-child{margin-bottom:0}
.iwj-b3-travel-list strong{color:#0A1F44}
.iwj-b3-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F5EFE7;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}

/* ---------- WOC Room Guardian & Hemorrhage Watch Checklist ---------- */
.iwj-rgw{--iwj-primary:#0A1F44;--iwj-accent:#8B5E3C;--iwj-accent-hover:#6f4a2f;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;--iwj-alert-bg:#FBEFED;--iwj-alert-text:#7A2E24;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-rgw *{box-sizing:border-box}
.iwj-rgw-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-rgw-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-rgw-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-rgw-content{padding:1.5rem}
.iwj-rgw-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-rgw-grid{grid-template-columns:1fr}}
.iwj-rgw-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-rgw-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-rgw-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-rgw-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-rgw-alert{background:var(--iwj-alert-bg);border-left:4px solid var(--iwj-alert-text);padding:1rem;border-radius:0 8px 8px 0;margin-top:1.25rem;font-size:.86rem;line-height:1.55}
.iwj-rgw-alert h4{color:var(--iwj-alert-text);margin-bottom:.5rem;font-size:.92rem;font-weight:800}
.iwj-rgw-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-rgw-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-rgw-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-rgw{border:none;box-shadow:none;max-width:100%}
  .iwj-rgw-btn-wrap,.iwj-rgw-header p{display:none}
  .iwj-rgw-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-rgw-item:not(.is-checked){display:none}
  .iwj-rgw-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-rgw-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-b3-page">
  <div class="iwj-b3-eyebrow">Maternal Health &mdash; Track B: WOC Advocacy Sanctuary &mdash; Pillar 3</div>
  <p class="iwj-b3-subtitle">
    Protecting Her in the Delivery Room: Bias Defense, Consent Enforcement, and Hemorrhage Watch
  </p>

  <img class="iwj-b3-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/high-bp-scaled.png" alt="Representing cardiovascular vigilance in the delivery room">

  <!-- SECTION 1: THE WOC REALITY CHECK -->
  <div class="iwj-b3-section">
    <div class="iwj-b3-section-title">The WOC Reality Check</div>
    <div class="iwj-b3-heading">In This Room, You Are Her Chief Medical Advocate.</div>
    <p class="iwj-b3-body">
      In hospital delivery rooms, Black, Brown, and Indigenous birthing
      parents are statistically more likely to experience obstetric
      violence &mdash; such as procedures performed without consent,
      dismissal of severe pain, or delayed responses to vital sign drops.
    </p>
    <p class="iwj-b3-body">
      When her physical and mental bandwidth is consumed by labor, she
      cannot fight the system alone.
    </p>
    <p class="iwj-b3-body">
      Under Iwosan Journeys, our stance is unequivocal: You are not there to
      be polite to the staff; you are there to protect her life. Being an
      &ldquo;Unapologetic Room Guardian&rdquo; means watching her baseline,
      questioning deviations from protocol, and activating the hospital's
      chain of command the moment her voice is ignored.
    </p>
  </div>

  <!-- SECTION 2: 3 LAWS -->
  <div class="iwj-b3-section">
    <div class="iwj-b3-section-title">The 3 Laws of the Unapologetic Room Guardian</div>
    <div class="iwj-b3-table-wrap">
      <table class="iwj-b3-table">
        <thead><tr><th>The Guardian Law</th><th>What It Looks Like in Action</th><th>Why It Is Crucial for WOC Safety</th></tr></thead>
        <tbody>
          <tr>
            <td>1. Enforce Explicit Verbal Consent</td>
            <td class="what">Standing between the bed and any provider attempting a cervical check or intervention until they explain why and receive her verbal &ldquo;yes.&rdquo;</td>
            <td class="why">WOC experience significantly higher rates of unconsented vaginal exams and sweeps. No hand touches her body without her explicit permission.</td>
          </tr>
          <tr>
            <td>2. Watch the Blood Loss &amp; Vitals</td>
            <td class="what">Observing the monitor and the bedding after delivery. Asking direct questions about blood volume and uterine tone.</td>
            <td class="why">Postpartum hemorrhage is a leading cause of preventable WOC maternal mortality. Early recognition saves lives.</td>
          </tr>
          <tr>
            <td>3. Break the &ldquo;Polite Silence&rdquo;</td>
            <td class="what">If she says she is in severe pain, can't breathe, or feels faint, and a nurse says &ldquo;that's normal,&rdquo; you escalate immediately.</td>
            <td class="why">Polite silence in the face of dismissal is dangerous. Your job is to demand an attending physician evaluation immediately.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <img class="iwj-b3-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/couple-scaled.jpg" alt="A partner standing by her side, representing the Room Guardian role">

  <!-- SECTION 3: SURVIVAL SCRIPTS -->
  <div class="iwj-b3-section">
    <div class="iwj-b3-section-title">Survival Scripts for the Room Guardian</div>
    <p class="iwj-b3-body">
      Keep these exact, professional, and firm scripts ready on your phone.
      Use them the moment you sense her safety, comfort, or consent is being
      compromised:
    </p>

    <div class="iwj-b3-script-card">
      <div class="iwj-b3-script-label">1. The &ldquo;Consent Check&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Before any physical exam or intervention)</span></div>
      <div class="iwj-b3-script-say">&ldquo;Doctor/Nurse, before we proceed with that cervical check/intervention, please pause. Has she given explicit verbal consent for this procedure right now? Let's take a moment so she can hear the clinical reason and answer.&rdquo;</div>
      <div class="iwj-b3-script-why"><strong>Why It Works:</strong> It immediately halts autopilot medical behavior and forces the provider to honor her bodily autonomy.</div>
    </div>

    <div class="iwj-b3-script-card">
      <div class="iwj-b3-script-label">2. The &ldquo;Hemorrhage &amp; Vital Sign Challenge&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(After birth, if bleeding or grogginess seems abnormal)</span></div>
      <div class="iwj-b3-script-say">&ldquo;I am looking at her bleeding and her skin tone, and she is reporting dizziness/nausea. What is her current blood pressure baseline, what is her estimated blood loss, and has her fundus (uterus) been checked for firmness in the last 15 minutes?&rdquo;</div>
      <div class="iwj-b3-script-why"><strong>Why It Works:</strong> It uses precise clinical terminology (estimated blood loss, fundus, baseline) that forces the nurse to treat the situation with clinical urgency rather than a casual brush-off.</div>
    </div>

    <div class="iwj-b3-script-card">
      <div class="iwj-b3-script-label">3. The &ldquo;Emergency Chain of Command&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(If your concerns are ignored)</span></div>
      <div class="iwj-b3-script-say">&ldquo;We are reporting severe symptoms that are not being clinically investigated. I am activating the hospital chain of command. Please page the Attending OB/GYN on call, the Floor Charge Nurse, and the Hospital Patient Advocate to this room immediately. Document in her chart that I requested an attending evaluation at [Current Time].&rdquo;</div>
      <div class="iwj-b3-script-why"><strong>Why It Works:</strong> Establishing a timestamped request in the medical record creates legal accountability and almost always brings senior medical staff to the room within minutes.</div>
    </div>
  </div>

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-b3-section">
    <div class="iwj-b3-section-title">Interactive Tool for WOC Pillar 3</div>
    <div class="iwj-b3-tool-heading">The WOC Room Guardian &amp; Hemorrhage Watch Checklist</div>
    <div class="iwj-b3-tool-subhead">
      Use this in the hospital room during labor and the first 2 hours after
      delivery. Check the monitoring steps you are actively enforcing, then
      print your Guardian Briefing to keep with your hospital papers.
    </div>

    <div class="iwj-rgw">
      <div class="iwj-rgw-header">
        <h3>WOC Room Guardian &amp; Hemorrhage Watch Checklist</h3>
        <p>Check the monitoring rules you are enforcing in the delivery room. Print or save this briefing to track her safety during labor and the immediate postpartum hours.</p>
      </div>
      <div class="iwj-rgw-content">
        <div class="iwj-rgw-grid">
          <div class="iwj-rgw-card">
            <div class="iwj-rgw-card-title">1. Consent &amp; Autonomy Guarding</div>
            <label class="iwj-rgw-item"><input type="checkbox" checked> I require verbal permission before any provider touches her body or performs a cervical exam.</label>
            <label class="iwj-rgw-item"><input type="checkbox" checked> I am enforcing the B.R.A.I.N. consent briefing before any induction, membrane sweep, or medication order.</label>
            <label class="iwj-rgw-item"><input type="checkbox"> I am monitoring and limiting unneeded medical students or residents in the delivery room.</label>
          </div>
          <div class="iwj-rgw-card">
            <div class="iwj-rgw-card-title">2. Immediate Postpartum Hemorrhage Watch</div>
            <label class="iwj-rgw-item"><input type="checkbox" checked> I am monitoring bleeding pad saturation (alerting staff immediately if a pad is soaked in under 1 hour).</label>
            <label class="iwj-rgw-item"><input type="checkbox" checked> I am verifying that the nurse checks her fundus (uterine tone) for firmness every 15 to 30 minutes after birth.</label>
            <label class="iwj-rgw-item"><input type="checkbox"> I am watching her alertness &mdash; alerting staff immediately if she complains of faintness, ringing ears, or severe chills.</label>
          </div>
          <div class="iwj-rgw-card">
            <div class="iwj-rgw-card-title">3. Cardiovascular &amp; Pain Vigilance</div>
            <label class="iwj-rgw-item"><input type="checkbox" checked> I am watching the blood pressure monitor for sudden spikes (Preeclampsia) or sudden drops (Hemorrhage).</label>
            <label class="iwj-rgw-item"><input type="checkbox"> If she reports severe headache, chest pressure, or upper abdominal pain, I demand an immediate physician check.</label>
            <label class="iwj-rgw-item"><input type="checkbox"> I am ensuring her requests for pain management or anesthesia are answered without unreasonable delay.</label>
          </div>
          <div class="iwj-rgw-card">
            <div class="iwj-rgw-card-title">4. Chain of Command Activation</div>
            <label class="iwj-rgw-item"><input type="checkbox" checked> If our reports of pain or bleeding are dismissed, I will immediately request the Floor Charge Nurse.</label>
            <label class="iwj-rgw-item"><input type="checkbox"> If necessary, I will demand the Attending Physician on call and call the Hospital Patient Advocate.</label>
          </div>
        </div>

        <div class="iwj-rgw-alert">
          <h4>THE EMERGENCY CHAIN OF COMMAND PROTOCOL</h4>
          <p>&ldquo;We are reporting severe symptoms that are not being clinically investigated. I am activating the hospital chain of command. Please page the Attending OB/GYN on call, the Floor Charge Nurse, and the Hospital Patient Advocate to this room immediately. Document in her chart that I requested an attending evaluation at [Current Time].&rdquo;</p>
        </div>

        <div class="iwj-rgw-btn-wrap">
          <button class="iwj-rgw-btn" onclick="iwjRgwPrint()">Print / Save Room Guardian Briefing</button>
        </div>
      </div>
    </div>

    <p class="iwj-b3-tool-disclaimer">
      This checklist helps you organize what to advocate for with a licensed care team. It is not a substitute for professional medical advice, diagnosis, or treatment. If she is experiencing a medical emergency, seek immediate emergency care.
    </p>
  </div>

  <!-- SECTION 5: CONNECTION TO ADVOCACY TRAINING -->
  <div class="iwj-b3-section">
    <div class="iwj-b3-section-title">Connection to Advocacy Training</div>
    <div class="iwj-b3-heading" style="font-size:1.1rem;">Live Guardian Training &amp; Event Integration</div>
    <div class="iwj-b3-travel-box">
      <p class="iwj-b3-body" style="margin-bottom:1rem;">
        Being an Unapologetic Room Guardian is a skill that can be learned
        and practiced. Through our live events and retreats booked via
        Checked Bags and Good Vibes (bagsandvibes.com), we provide:
      </p>
      <ul class="iwj-b3-travel-list">
        <li><strong>Live Room Guardian Simulation Workshops:</strong> Interactive sessions at our regional Summits where partners practice their push-back scripts and chain-of-command escalation in realistic hospital role-play scenarios.</li>
        <li><strong>Culturally Congruent Birth Navigation:</strong> Connecting families with independent WOC Doulas and Patient Advocates who can travel or accompany you in the hospital room.</li>
      </ul>
    </div>
  </div>

  <img class="iwj-b3-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/ER-red-alert-scaled.png" alt="Representing emergency escalation and urgent hospital response">

  <div class="iwj-b3-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  window.iwjRgwPrint = function(){
    var items = document.querySelectorAll('.iwj-rgw-item');
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
