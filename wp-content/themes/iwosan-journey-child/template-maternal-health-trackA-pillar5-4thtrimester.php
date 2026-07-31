<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Pillar 5: The 4th Trimester & Postpartum Continuity
 * Description: Maternal Health Track A pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The 4th Trimester & Postpartum Continuity</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK A, PILLAR 5: The 4th Trimester & Postpartum Continuity
     ============================================ -->
<style>
.iwj-p5a-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-p5a-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#C9A052;margin-bottom:.75rem;}
.iwj-p5a-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-p5a-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-p5a-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-p5a-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-p5a-section{margin-bottom:2.75rem}
.iwj-p5a-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#1C3A2A;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-p5a-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-p5a-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-p5a-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-p5a-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-p5a-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-p5a-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-p5a-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-p5a-table td.why{color:#5F5E5A}
.iwj-p5a-table td.demand{font-weight:600;color:#7A2E24;}
.iwj-p5a-script-card{background:#FAF8F4;border-left:3px solid #4DAEAF;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-p5a-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-p5a-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;}
.iwj-p5a-question-card{background:#fff;border:1px solid #E5E0D5;border-left:3px solid #C9A052;border-radius:0 6px 6px 0;padding:1.1rem 1.4rem;margin-bottom:1rem;}
.iwj-p5a-question-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p5a-question-say{font-size:.9rem;line-height:1.65;font-style:italic;color:#3D3228;}
.iwj-p5a-pushback-box{background:#0A1F44;color:#FAF8F4;border-radius:8px;padding:1.5rem 1.75rem;margin-top:1.5rem;}
.iwj-p5a-pushback-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.95rem;margin-bottom:.6rem;color:#C9A052;}
.iwj-p5a-pushback-say{font-size:.92rem;line-height:1.7;font-style:italic;}
.iwj-p5a-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p5a-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-p5a-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(28,58,42,.1);padding-top:.75rem;}
.iwj-p5a-travel-box{background:#F1EFE8;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-p5a-travel-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1rem;color:#0A1F44;margin-bottom:.75rem;}
.iwj-p5a-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-p5a-travel-list li{margin-bottom:.6rem}
.iwj-p5a-travel-list li:last-child{margin-bottom:0}
.iwj-p5a-travel-list strong{color:#0A1F44}
.iwj-p5a-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F1EFE8;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}

/* ---------- 4th Trimester Check-Engine Dashboard ---------- */
.iwj-4t{--iwj-primary:#0A1F44;--iwj-accent:#4DAEAF;--iwj-accent-hover:#3a8f90;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-4t *{box-sizing:border-box}
.iwj-4t-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-4t-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-4t-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-4t-content{padding:1.5rem}
.iwj-4t-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-4t-grid{grid-template-columns:1fr}}
.iwj-4t-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-4t-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-4t-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-4t-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-4t-custom{margin-top:1.25rem;padding:1rem;background:#F1EFE8;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-4t-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-4t-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;}
.iwj-4t-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-4t-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-4t-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-4t{border:none;box-shadow:none;max-width:100%}
  .iwj-4t-btn-wrap,.iwj-4t-custom,.iwj-4t-header p{display:none}
  .iwj-4t-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-4t-item:not(.is-checked){display:none}
  .iwj-4t-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-4t-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-p5a-page">
  <div class="iwj-p5a-eyebrow">Maternal Health &mdash; Track A &mdash; Pillar 5</div>
  <p class="iwj-p5a-subtitle">
    You Are Still a Patient: Self-Advocacy for Your Healing Body, Pelvic Floor, and Postpartum Mind
  </p>

  <img class="iwj-p5a-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/5-The-4th-trimester-scaled.png" alt="A new parent in the postpartum recovery period">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-p5a-section">
    <div class="iwj-p5a-section-title">The Reality Check</div>
    <div class="iwj-p5a-heading">A 6-Week Wait Is Too Long to Ignore a Flashing Warning Light.</div>
    <p class="iwj-p5a-body">
      When you leave the hospital, the medical focus almost entirely transfers to your
      newborn's pediatrician visits. Yet your body is undergoing one of the most intense
      physical and endocrine transitions a human can experience.
    </p>
    <p class="iwj-p5a-body">
      Too many parents suffer in silence with severe pelvic pain, incontinence,
      excruciating feeding struggles, or terrifying anxiety because they are told,
      &ldquo;That's just normal postpartum recovery &mdash; we'll see you at six weeks.&rdquo;
    </p>
    <p class="iwj-p5a-body">
      Under Iwosan Journeys, our stance is clear: You do not have to wait six weeks to
      ask for help, and pain is not a required badge of parenthood. True self-advocacy
      means tracking your own physical and mental baselines and demanding timely support
      when healing feels off track.
    </p>
  </div>

  <!-- SECTION 2: DECODING THE 4TH TRIMESTER -->
  <div class="iwj-p5a-section">
    <div class="iwj-p5a-section-title">Decoding the 4th Trimester</div>
    <p class="iwj-p5a-body">
      Use this non-medical guide to differentiate between expected recovery discomforts
      and symptoms that require immediate clinical or specialist evaluation:
    </p>
    <div class="iwj-p5a-table-wrap">
      <table class="iwj-p5a-table">
        <thead><tr><th>What You Are Experiencing</th><th>Why It's Often Normalized</th><th>When You Must Demand Clinical/Specialist Attention</th></tr></thead>
        <tbody>
          <tr>
            <td>Pelvic Floor Pressure, Leaking, or Pain</td>
            <td class="why">&ldquo;You just had a baby &mdash; leaking when you laugh or sneeze is normal now.&rdquo;</td>
            <td class="demand">Incontinence, vaginal heaviness/prolapse symptoms, or severe pain during movement is common, but it is not normal to live with permanently. Demand a referral to a Pelvic Floor Physical Therapist &mdash; do not settle for &ldquo;just do Kegels.&rdquo;</td>
          </tr>
          <tr>
            <td>Bleeding &amp; Abdominal Cramping</td>
            <td class="why">&ldquo;Lochia (postpartum bleeding) can last up to 6 weeks.&rdquo;</td>
            <td class="demand">If your bleeding suddenly increases, turns bright red again, passes clots larger than a plum, or has a foul odor &mdash; or if you develop a fever &mdash; demand immediate evaluation for infection or retained placenta.</td>
          </tr>
          <tr>
            <td>Breastfeeding / Infant Feeding Pain</td>
            <td class="why">&ldquo;Breastfeeding hurts at first while your nipples toughen up.&rdquo;</td>
            <td class="demand">Initial latch sensitivity happens, but blistering, bleeding, cracked skin, or toe-curling pain is a sign of a latch or oral-tie issue. Demand an immediate referral to an International Board Certified Lactation Consultant (IBCLC).</td>
          </tr>
          <tr>
            <td>Intense Worry, Weepiness, or Intrusive Thoughts</td>
            <td class="why">&ldquo;It's just the &lsquo;Baby Blues&rsquo; from sleep deprivation.&rdquo;</td>
            <td class="demand">The &ldquo;Baby Blues&rdquo; resolve within two weeks. If you experience intrusive/scary thoughts, panic attacks, insomnia even when the baby sleeps, or deep detachment beyond week two, demand immediate screening for PPD/PPA.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- IMAGE BREAK REMOVED per 2-image standing rule -->
  <!-- SECTION 3: WHAT TO TELL & ASK YOUR DOCTOR -->
  <div class="iwj-p5a-section">
    <div class="iwj-p5a-section-title">What to Tell &amp; Ask Your Doctor <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(The Postpartum Vocabulary)</span></div>
    <p class="iwj-p5a-body">
      When you contact your OB/GYN, midwife, or primary care doctor before or during
      your postpartum visit, use these structured scripts to ensure your healing is
      treated with urgency:
    </p>

    <div class="iwj-p5a-script-card">
      <div class="iwj-p5a-script-label">1. The Opening Briefing <span style="color:#7A6E65;font-weight:400;font-style:italic;">(What to Tell the Doctor)</span></div>
      <div class="iwj-p5a-script-say">&ldquo;Doctor, I am [number] weeks postpartum. While my baby is doing well, I am calling/here today to focus on my own physical and emotional recovery. Over the past two weeks, I have noticed [severe pelvic heaviness / painful feeding / intrusive anxiety / unusual bleeding]. I need us to evaluate my recovery baseline today rather than waiting.&rdquo;</div>
    </div>

    <div class="iwj-p5a-heading" style="font-size:1.05rem;margin-top:1.75rem;">2. The 4 Strategic Questions <span style="color:#7A6E65;font-weight:300;font-style:italic;font-size:.85rem;">(What to Ask the Doctor)</span></div>

    <div class="iwj-p5a-question-card">
      <div class="iwj-p5a-question-label">The Pelvic Floor Referral Question</div>
      <div class="iwj-p5a-question-say">&ldquo;Regardless of whether I had a vaginal or Cesarean birth, what is your standard protocol for referring postpartum patients to specialized Pelvic Floor Physical Therapy for rehabilitation?&rdquo;</div>
    </div>
    <div class="iwj-p5a-question-card">
      <div class="iwj-p5a-question-label">The Lactation / Feeding Advocacy Question</div>
      <div class="iwj-p5a-question-say">&ldquo;Since nursing/feeding is currently causing severe physical pain and emotional distress, can you refer me immediately to an IBCLC lactation consultant, or evaluate the baby for an oral tongue/lip tie?&rdquo;</div>
    </div>
    <div class="iwj-p5a-question-card">
      <div class="iwj-p5a-question-label">The Mental Health Screening Question</div>
      <div class="iwj-p5a-question-say">&ldquo;Can we complete a formally validated screening today &mdash; such as the Edinburgh Postnatal Depression Scale &mdash; to evaluate me for Postpartum Anxiety or Depression?&rdquo;</div>
    </div>
    <div class="iwj-p5a-question-card">
      <div class="iwj-p5a-question-label">The Blood &amp; Hormone Audit Question</div>
      <div class="iwj-p5a-question-say">&ldquo;Can we run a metabolic and thyroid panel to ensure my thyroid hasn't developed postpartum thyroiditis, and check my ferritin levels to rule out anemia from birth blood loss?&rdquo;</div>
    </div>

    <div class="iwj-p5a-pushback-box">
      <div class="iwj-p5a-pushback-title">3. The Push-Back Script <span style="color:#DCD9D0;font-weight:400;font-style:italic;">(If Told &ldquo;Let's Just Wait and See at 6 Weeks&rdquo;)</span></div>
      <p class="iwj-p5a-pushback-say">&ldquo;I understand that healing takes time, but waiting several more weeks while experiencing [pain / incontinence / severe anxiety / feeding trauma] is negatively impacting my health and my ability to care for my newborn. I would like an evaluation or a specialist referral ordered this week.&rdquo;</p>
    </div>
  </div>

  <!-- IMAGE BREAK 3 -->
  <img class="iwj-p5a-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/5-Ignoring-the-signs-scaled.png" alt="">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-p5a-section">
    <div class="iwj-p5a-section-title">Interactive Tool for the 4th Trimester</div>
    <div class="iwj-p5a-tool-heading">The 4th Trimester &ldquo;Check-Engine&rdquo; Dashboard</div>
    <div class="iwj-p5a-tool-subhead">
      Don't try to remember every symptom when you are sleep-deprived. Check your
      healing across pelvic health, feeding comfort, sleep/mood, and physical recovery,
      then print a prioritized briefing for your provider.
    </div>

    <div class="iwj-4t">
      <div class="iwj-4t-header">
        <h3>My 4th Trimester Recovery Agenda</h3>
        <p>Select any physical, emotional, or feeding challenges you are experiencing. Print this sheet to bring to your postpartum checkup or to request an early evaluation.</p>
      </div>
      <div class="iwj-4t-content">
        <div class="iwj-4t-grid">
          <div class="iwj-4t-card">
            <div class="iwj-4t-card-title">1. Pelvic Floor &amp; Core Rehabilitation</div>
            <label class="iwj-4t-item"><input type="checkbox"> I am experiencing urinary or fecal leaking when laughing, coughing, sneezing, or lifting.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I feel a persistent sense of heaviness, bulging, or downward pressure in my pelvis.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I have pain or discomfort in my perineum, Cesarean incision, or during physical movement.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I request a referral to a specialized Pelvic Floor Physical Therapist for rehabilitation.</label>
          </div>
          <div class="iwj-4t-card">
            <div class="iwj-4t-card-title">2. Feeding &amp; Breast/Chest Health</div>
            <label class="iwj-4t-item"><input type="checkbox"> Nursing/feeding is causing severe, toe-curling pain, blistering, or cracked skin.</label>
            <label class="iwj-4t-item"><input type="checkbox"> My baby is struggling to latch, clicking during feeding, or seeming constantly unsatisfied.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I have hard, red, or tender lumps in my breast tissue, or feel flu-like (checking for mastitis).</label>
            <label class="iwj-4t-item"><input type="checkbox"> I request an immediate referral to an International Board Certified Lactation Consultant (IBCLC).</label>
          </div>
          <div class="iwj-4t-card">
            <div class="iwj-4t-card-title">3. Emotional Health &amp; Mental Bandwidth</div>
            <label class="iwj-4t-item"><input type="checkbox"> I am experiencing anxiety or panic that prevents me from sleeping even when my baby sleeps.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I am having repetitive, scary, or intrusive thoughts that make me feel overwhelmed.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I feel persistently sad, numb, weeping, or disconnected from my baby or partner beyond week two.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I request a formal screening for Postpartum Depression/Anxiety and a mental health referral.</label>
          </div>
          <div class="iwj-4t-card">
            <div class="iwj-4t-card-title">4. Physical Healing &amp; Energy Audit</div>
            <label class="iwj-4t-item"><input type="checkbox"> My postpartum bleeding has increased, passed large clots, or changed odor.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I feel dizziness, shortness of breath, or palpitations during daily activities.</label>
            <label class="iwj-4t-item"><input type="checkbox"> I request a blood panel to check my ferritin (anemia) and postpartum thyroid levels.</label>
          </div>
        </div>

        <div class="iwj-4t-custom">
          <h4>Additional Recovery Notes for My Provider (Optional)</h4>
          <input type="text" placeholder="e.g., 'My tailbone pain makes it difficult to sit and feed the baby for more than 10 minutes.'">
        </div>

        <div class="iwj-4t-btn-wrap">
          <button class="iwj-4t-btn" onclick="iwj4tPrint()">Print / Save My 4th Trimester Agenda</button>
        </div>
      </div>
    </div>

    <p class="iwj-p5a-tool-disclaimer">
      This tool helps you organize what to discuss with a licensed provider. It is not a substitute for professional medical advice, diagnosis, or treatment. If you are experiencing intrusive thoughts, panic, or thoughts of harming yourself or others, please contact a healthcare provider or crisis line immediately.
    </p>
  </div>

  <!-- SECTION 5: CONNECTION TO TRAVEL & SANCTUARY -->
  <div class="iwj-p5a-section">
    <div class="iwj-p5a-section-title">Connection to Travel &amp; Sanctuary</div>
    <div class="iwj-p5a-heading" style="font-size:1.1rem;">Postpartum Rest &amp; Recalibration</div>
    <div class="iwj-p5a-travel-box">
      <p class="iwj-p5a-body" style="margin-bottom:1rem;">
        Healing from childbirth should not happen in isolation. Through our travel arm
        Checked Bags and Good Vibes (bagsandvibes.com), we help families coordinate:
      </p>
      <ul class="iwj-p5a-travel-list">
        <li><strong>4th Trimester Rest &amp; Recalibration Retreats:</strong> Connecting new parents with dedicated postpartum retreats that offer supportive nourishment, sleep support, and gentle postpartum education.</li>
        <li><strong>Medical Travel for Postpartum Care:</strong> Managing the travel logistics if your recovery requires out-of-state consultations with specialized perinatal mental health programs, corrective pelvic floor surgeons, or complex lactation specialists.</li>
      </ul>
    </div>
  </div>

  <div class="iwj-p5a-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  window.iwj4tPrint = function(){
    var items = document.querySelectorAll('.iwj-4t-item');
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
