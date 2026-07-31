<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Pillar 3: The Advocate Partner
 * Description: Maternal Health Track A pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The Advocate Partner</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK A, PILLAR 3: The Advocate Partner
     ============================================ -->
<style>
.iwj-p3a-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-p3a-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#C9A052;margin-bottom:.75rem;}
.iwj-p3a-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-p3a-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-p3a-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-p3a-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-p3a-section{margin-bottom:2.75rem}
.iwj-p3a-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#1C3A2A;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-p3a-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-p3a-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-p3a-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-p3a-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-p3a-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-p3a-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-p3a-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-p3a-table td.what{color:#5F5E5A}
.iwj-p3a-table td.why{font-weight:600;color:#1C3A2A}
.iwj-p3a-script-card{background:#FAF8F4;border-left:3px solid #4DAEAF;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-p3a-script-num{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.95rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-p3a-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;margin-bottom:.6rem;}
.iwj-p3a-script-why{font-size:.82rem;line-height:1.6;color:#7A6E65;}
.iwj-p3a-script-why strong{color:#5F5E5A}
.iwj-p3a-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p3a-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-p3a-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(28,58,42,.1);padding-top:.75rem;}
.iwj-p3a-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F1EFE8;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}

/* ---------- Room Guardian Pocket Checklist ---------- */
.iwj-rg{--iwj-primary:#0A1F44;--iwj-accent:#4DAEAF;--iwj-accent-hover:#3a8f90;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:850px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-rg *{box-sizing:border-box}
.iwj-rg-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-rg-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-rg-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-rg-content{padding:1.5rem}
.iwj-rg-section-title{font-family:'Montserrat',sans-serif;font-size:.9rem;font-weight:700;color:var(--iwj-primary);margin:1rem 0 .6rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;}
.iwj-rg-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.88rem;cursor:pointer;line-height:1.5;}
.iwj-rg-item input{margin-right:.7rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0;}
.iwj-rg-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-rg-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.75rem 1.5rem;font-family:'Montserrat',sans-serif;font-size:.9rem;font-weight:700;border-radius:6px;cursor:pointer;}
.iwj-rg-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-rg{border:none;box-shadow:none;max-width:100%}
  .iwj-rg-btn-wrap,.iwj-rg-header p{display:none}
  .iwj-rg-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-rg-item:not(.is-checked){display:none}
}
</style>

<div class="iwj-p3a-page">
  <div class="iwj-p3a-eyebrow">Maternal Health &mdash; Track A &mdash; Pillar 3</div>
  <p class="iwj-p3a-subtitle">
    The Room Guardian: How to Speak Up, Protect Her Peace, and Guard the Room During Labor
  </p>

  <img class="iwj-p3a-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/3-dad-at-appointment-scaled.jpg" alt="A partner supporting someone in labor">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-p3a-section">
    <div class="iwj-p3a-section-title">The Reality Check</div>
    <div class="iwj-p3a-heading">You Are Not Furniture &mdash; You Are Her First Line of Defense.</div>
    <p class="iwj-p3a-body">
      When the person you love is in active labor, they cannot be expected to negotiate
      with hospital staff, read complex consent forms, or argue over protocols. Their
      entire physical and mental bandwidth is focused on childbirth.
    </p>
    <p class="iwj-p3a-body">That makes you the Room Guardian.</p>
    <p class="iwj-p3a-body">
      Under Iwosan Journeys, our stance is that partners are not just there to watch
      &mdash; they are there to act as the primary self-advocacy anchor. Your job is to
      slow down the room, ensure her birth preferences are respected, and speak up when
      she can't.
    </p>
  </div>

  <!-- SECTION 2: 3 CORE RESPONSIBILITIES -->
  <div class="iwj-p3a-section">
    <div class="iwj-p3a-section-title">Your 3 Core Responsibilities as the Room Guardian</div>
    <div class="iwj-p3a-table-wrap">
      <table class="iwj-p3a-table">
        <thead>
          <tr><th>Responsibility</th><th>What It Looks Like in the Hospital</th><th>Why It Matters</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>1. Protect the Environment</td>
            <td class="what">Keeping lights dim, voices calm, and asking unneeded medical students or residents to step outside.</td>
            <td class="why">A calm, low-stress environment keeps adrenaline down and oxytocin high &mdash; which is biologically necessary for labor to progress.</td>
          </tr>
          <tr>
            <td>2. Enforce the &ldquo;10-Minute Rule&rdquo;</td>
            <td class="what">Whenever staff suggests a non-emergency intervention (Pitocin, breaking water, epidural adjustments), asking for 10 minutes alone.</td>
            <td class="why">Prevents her from feeling pressured or steamrolled into interventions without having time to process the decision.</td>
          </tr>
          <tr>
            <td>3. Watch the Baseline</td>
            <td class="what">Paying attention to how she looks and feels &mdash; if she says something is wrong, you elevate it immediately to the nurses.</td>
            <td class="why">You know her baseline better than any nurse who just walked onto their shift.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- IMAGE BREAK REMOVED per 2-image standing rule -->
  <!-- SECTION 3: ROOM GUARDIAN POCKET SCRIPTS -->
  <div class="iwj-p3a-section">
    <div class="iwj-p3a-section-title">The &ldquo;Room Guardian&rdquo; Pocket Scripts</div>
    <p class="iwj-p3a-body">
      Do not try to wing it when emotions are running high. Keep these exact, non-medical
      scripts on your phone or printed in your bag so you know what to say to hospital
      staff:
    </p>

    <div class="iwj-p3a-script-card">
      <div class="iwj-p3a-script-num">1. The &ldquo;Pause &amp; Privacy&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(When staff suggests a new intervention)</span></div>
      <div class="iwj-p3a-script-say">&ldquo;Thank you for explaining that. Unless the baby or my partner is in immediate danger, we are going to take 10 minutes to talk this over in private before we give our answer. We will press the call button when we're ready.&rdquo;</div>
      <div class="iwj-p3a-script-why"><strong>Why It Works:</strong> It firmly establishes that consent is required and gives her breathing room.</div>
    </div>

    <div class="iwj-p3a-script-card">
      <div class="iwj-p3a-script-num">2. The &ldquo;Elevate the Symptom&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(When she says something feels wrong and is ignored)</span></div>
      <div class="iwj-p3a-script-say">&ldquo;I need to be very clear: she is telling you that this pressure/pain is completely different from her baseline labor contractions. I need the attending physician or head charge nurse in this room right now to evaluate her.&rdquo;</div>
      <div class="iwj-p3a-script-why"><strong>Why It Works:</strong> It cuts through passive brush-offs and demands a clinical reassessment.</div>
    </div>

    <div class="iwj-p3a-script-card">
      <div class="iwj-p3a-script-num">3. The &ldquo;Protecting Her Wishes&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(When a provider ignores her preferences)</span></div>
      <div class="iwj-p3a-script-say">&ldquo;We have a written Birth Preference sheet attached to her chart. She specifically requested [delayed cord clamping / verbal consent before cervical exams / spontaneous pushing]. Can you please explain why we are deviating from that right now?&rdquo;</div>
      <div class="iwj-p3a-script-why"><strong>Why It Works:</strong> It holds the care team accountable to her documented wishes.</div>
    </div>
  </div>

  <!-- IMAGE BREAK 3 -->
  <img class="iwj-p3a-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/3-dad-talking-to-doctor-scaled.png" alt="">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-p3a-section">
    <div class="iwj-p3a-section-title">Interactive Tool for the Advocate Partner</div>
    <div class="iwj-p3a-tool-heading">The Room Guardian Pocket Checklist</div>
    <div class="iwj-p3a-tool-subhead">
      Use this interactive hospital checklist during labor and delivery. Select the
      active preferences you are protecting, and print your Guardian Sheet to keep in
      your pocket.
    </div>

    <div class="iwj-rg">
      <div class="iwj-rg-header">
        <h3>The Room Guardian Pocket Checklist</h3>
        <p>Check the duties you are actively managing in the hospital room. Print or save this as your quick-reference sheet during labor.</p>
      </div>
      <div class="iwj-rg-content">
        <div class="iwj-rg-section-title">1. Environment &amp; Consent Guarding</div>
        <label class="iwj-rg-item"><input type="checkbox" checked> I am monitoring who enters the room and asking non-essential personnel to leave.</label>
        <label class="iwj-rg-item"><input type="checkbox" checked> I am requesting verbal permission before any cervical check or physical intervention.</label>
        <label class="iwj-rg-item"><input type="checkbox" checked> I am enforcing our &ldquo;10-Minute Privacy Rule&rdquo; before any non-emergency decision.</label>

        <div class="iwj-rg-section-title">2. Labor &amp; Comfort Support</div>
        <label class="iwj-rg-item"><input type="checkbox"> I am reminding her to drink water/electrolytes after every contraction series.</label>
        <label class="iwj-rg-item"><input type="checkbox"> I am helping her change positions every 30 to 45 minutes to keep labor progressing.</label>
        <label class="iwj-rg-item"><input type="checkbox"> I am advocating for her preferred pain management (unmedicated, epidural, etc.).</label>

        <div class="iwj-rg-section-title">3. Delivery &amp; Newborn Advocacy</div>
        <label class="iwj-rg-item"><input type="checkbox" checked> I am verbally reminding the team to delay cord clamping until pulsing stops.</label>
        <label class="iwj-rg-item"><input type="checkbox" checked> I am ensuring baby is placed immediately skin-to-skin on her chest.</label>

        <div class="iwj-rg-btn-wrap">
          <button class="iwj-rg-btn" onclick="iwjRgPrint()">Print / Save My Guardian Checklist</button>
        </div>
      </div>
    </div>

    <p class="iwj-p3a-tool-disclaimer">
      This checklist helps you organize what to advocate for with a licensed care team. It is not a substitute for professional medical advice, diagnosis, or treatment.
    </p>
  </div>

  <div class="iwj-p3a-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  window.iwjRgPrint = function(){
    var items = document.querySelectorAll('.iwj-rg-item');
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
