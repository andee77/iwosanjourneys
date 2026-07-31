<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Pillar 2: Prenatal Care & The Birth Voice
 * Description: Maternal Health Track A pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Prenatal Care & The Birth Voice</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK A, PILLAR 2: Prenatal Care & The Birth Voice
     ============================================ -->
<style>
.iwj-p2a-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-p2a-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#C9A052;margin-bottom:.75rem;}
.iwj-p2a-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-p2a-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-p2a-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-p2a-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-p2a-section{margin-bottom:2.75rem}
.iwj-p2a-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#1C3A2A;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-p2a-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-p2a-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-p2a-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-p2a-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-p2a-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-p2a-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-p2a-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-p2a-table td.why{color:#5F5E5A}
.iwj-p2a-table td.demand{font-weight:600;color:#7A2E24;}
.iwj-p2a-script-card{background:#FAF8F4;border-left:3px solid #4DAEAF;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-p2a-script-num{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.95rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-p2a-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;margin-bottom:.6rem;}
.iwj-p2a-script-why{font-size:.82rem;line-height:1.6;color:#7A6E65;}
.iwj-p2a-script-why strong{color:#5F5E5A}
.iwj-p2a-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p2a-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-p2a-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(28,58,42,.1);padding-top:.75rem;}
.iwj-p2a-travel-box{background:#F1EFE8;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-p2a-travel-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1rem;color:#0A1F44;margin-bottom:.75rem;}
.iwj-p2a-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-p2a-travel-list li{margin-bottom:.6rem}
.iwj-p2a-travel-list li:last-child{margin-bottom:0}
.iwj-p2a-travel-list strong{color:#0A1F44}
.iwj-p2a-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F1EFE8;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}

/* ---------- Birth Preferences & Consent Briefing Builder ---------- */
.iwj-bpc{--iwj-primary:#0A1F44;--iwj-accent:#4DAEAF;--iwj-accent-hover:#3a8f90;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-bpc *{box-sizing:border-box}
.iwj-bpc-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-bpc-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-bpc-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-bpc-content{padding:1.5rem}
.iwj-bpc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-bpc-grid{grid-template-columns:1fr}}
.iwj-bpc-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-bpc-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-bpc-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-bpc-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-bpc-custom{margin-top:1.25rem;padding:1rem;background:#F1EFE8;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-bpc-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-bpc-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;}
.iwj-bpc-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-bpc-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-bpc-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-bpc{border:none;box-shadow:none;max-width:100%}
  .iwj-bpc-btn-wrap,.iwj-bpc-header p{display:none}
  .iwj-bpc-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-bpc-item:not(.is-checked){display:none}
  .iwj-bpc-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-bpc-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-p2a-page">
  <div class="iwj-p2a-eyebrow">Maternal Health &mdash; Track A &mdash; Pillar 2</div>
  <p class="iwj-p2a-subtitle">
    Your Body, Your Baby, Your Voice: Self-Advocacy From the Exam Room to the Delivery Room
  </p>

  <img class="iwj-p2a-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/2-prenatal-visit-scaled.png" alt="A pregnant person at a prenatal appointment">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-p2a-section">
    <div class="iwj-p2a-section-title">The Reality Check</div>
    <div class="iwj-p2a-heading">You Are Not a Passenger in Your Own Pregnancy.</div>
    <p class="iwj-p2a-body">
      Prenatal appointments often move at lightning speed: weight check, blood pressure,
      fundal height, heartbeat, and out the door in 10 minutes. In that rushed
      environment, it is dangerously easy to feel intimidated, avoid asking &ldquo;silly&rdquo;
      questions, or accept vague answers when something feels off.
    </p>
    <p class="iwj-p2a-body">
      Under Iwosan Journeys, our stance is clear: You are an active partner in your
      prenatal care, not a bystander.
    </p>
    <p class="iwj-p2a-body">
      True self-advocacy means knowing the difference between normal bodily shifts and
      symptoms that require clinical investigation &mdash; and having the vocabulary to
      ensure your birth preferences are respected by your care team.
    </p>
  </div>

  <!-- SECTION 2: NORMAL DISCOMFORT VS DEMAND AN ANSWER -->
  <div class="iwj-p2a-section">
    <div class="iwj-p2a-section-title">&ldquo;Normal Discomfort&rdquo; vs. &ldquo;Demand an Answer&rdquo;</div>
    <p class="iwj-p2a-body">
      Pregnancy causes massive physiological shifts, but &ldquo;discomfort&rdquo; should
      never be a cover-up for a warning signal. Use this non-medical awareness guide to
      evaluate what you are feeling:
    </p>
    <div class="iwj-p2a-table-wrap">
      <table class="iwj-p2a-table">
        <thead>
          <tr><th>What You Are Feeling</th><th>Why Providers Often Dismiss It</th><th>When You Must Demand Clinical Attention</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>Severe Headache or Visual Changes</td>
            <td class="why">&ldquo;Headaches and fatigue are normal in pregnancy.&rdquo;</td>
            <td class="demand">If a headache does not go away with rest/hydration, or is accompanied by spots in your vision, sudden facial/hand swelling, or upper right abdominal pain, demand an immediate check for preeclampsia/elevated blood pressure.</td>
          </tr>
          <tr>
            <td>Pelvic Pressure or Abdominal Cramping</td>
            <td class="why">&ldquo;Your ligaments are just stretching as the baby grows.&rdquo;</td>
            <td class="demand">Rhythmic cramping, lower back pain that comes and goes, or persistent downward fluid/pelvic pressure before 37 weeks requires immediate evaluation to rule out preterm labor.</td>
          </tr>
          <tr>
            <td>Changes in Baby's Movement</td>
            <td class="why">&ldquo;Babies run out of room at the end of pregnancy and slow down.&rdquo;</td>
            <td class="demand">A baby should not stop moving. If you notice a noticeable drop in your baby's normal kick patterns or strength, do not wait until morning &mdash; demand a non-stress test (NST) immediately.</td>
          </tr>
          <tr>
            <td>Severe Sadness, Anxiety, or Rage</td>
            <td class="why">&ldquo;Your hormones are just adjusting.&rdquo;</td>
            <td class="demand">Perinatal depression and anxiety are real medical conditions. If anxiety is keeping you from sleeping or panic is overwhelming your daily routine, demand a mental health referral.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- IMAGE BREAK REMOVED per 2-image standing rule -->
  <!-- SECTION 3: CONVERSATION SCRIPTS -->
  <div class="iwj-p2a-section">
    <div class="iwj-p2a-section-title">Conversation Scripts: Holding Your Ground</div>
    <p class="iwj-p2a-body">
      Use these exact, respectful, and firm phrases when you feel rushed, dismissed, or
      pressured into an intervention without explanation.
    </p>

    <div class="iwj-p2a-script-card">
      <div class="iwj-p2a-script-num">1. The &ldquo;B.R.A.I.N.&rdquo; Consent Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(When an intervention or induction is suggested)</span></div>
      <div class="iwj-p2a-script-say">&ldquo;Before we decide on [Name of Intervention / Induction / Test], let's walk through the B.R.A.I.N. framework together: What are the Benefits? What are the Risks? What are our Alternatives? What does my Intuition say? And what happens if we do Nothing and wait 24 hours?&rdquo;</div>
      <div class="iwj-p2a-script-why"><strong>Why It Works:</strong> It slows down the clinical clock and forces the provider to give you a true, evidence-based informed consent briefing rather than a rushed order.</div>
    </div>

    <div class="iwj-p2a-script-card">
      <div class="iwj-p2a-script-num">2. The &ldquo;Don't Dismiss My Symptom&rdquo; Script</div>
      <div class="iwj-p2a-script-say">&ldquo;I understand that pregnancy causes general discomfort, but this [pain / swelling / headache / lack of movement] is a sharp departure from my baseline. I am not comfortable leaving until we run diagnostic tests to rule out an underlying issue.&rdquo;</div>
      <div class="iwj-p2a-script-why"><strong>Why It Works:</strong> It shifts the conversation from a subjective complaint to an objective diagnostic request.</div>
    </div>

    <div class="iwj-p2a-script-card">
      <div class="iwj-p2a-script-num">3. The &ldquo;Slow Down the Room&rdquo; Script <span style="color:#7A6E65;font-weight:400;font-style:italic;">(During labor or a rushed hospital check)</span></div>
      <div class="iwj-p2a-script-say">&ldquo;Unless my baby or I am in immediate, life-threatening danger, I need the room to step out for 10 minutes so my partner and I can discuss our options in private before we move forward.&rdquo;</div>
      <div class="iwj-p2a-script-why"><strong>Why It Works:</strong> It re-establishes your autonomy and reminds the staff that you have the right to private deliberation.</div>
    </div>
  </div>

  <!-- IMAGE BREAK 3 -->
  <img class="iwj-p2a-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/2-sgram-in-front-of-mom-belly-scaled.jpg" alt="">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-p2a-section">
    <div class="iwj-p2a-section-title">Interactive Tool for Prenatal Advocacy</div>
    <div class="iwj-p2a-tool-heading">The Birth Preferences &amp; Consent Builder</div>
    <div class="iwj-p2a-tool-subhead">
      A traditional &ldquo;Birth Plan&rdquo; is often ignored by hospital staff if it reads
      like a rigid demand letter. What works is a clean, 1-page Preferences &amp; Consent
      Briefing. Select your preferences below and print a clean sheet for your hospital chart.
    </div>

    <div class="iwj-bpc">
      <div class="iwj-bpc-header">
        <h3>My Birth Preferences &amp; Consent Briefing</h3>
        <p>Select your communication, labor, and newborn preferences below. Print this 1-page briefing to attach to your hospital chart so your care team knows how to respect your voice.</p>
      </div>
      <div class="iwj-bpc-content">
        <div class="iwj-bpc-grid">
          <div class="iwj-bpc-card">
            <div class="iwj-bpc-card-title">1. Communication &amp; Informed Consent</div>
            <label class="iwj-bpc-item"><input type="checkbox" checked> I request the B.R.A.I.N. (Benefits, Risks, Alternatives) briefing before any intervention is ordered.</label>
            <label class="iwj-bpc-item"><input type="checkbox" checked> Please direct all medical questions to both me and my designated support partner.</label>
            <label class="iwj-bpc-item"><input type="checkbox"> Unless in an immediate emergency, please allow 10 minutes of privacy before requiring a decision on interventions.</label>
            <label class="iwj-bpc-item"><input type="checkbox"> I prefer minimal cervical exams; please ask verbal permission before every physical check.</label>
          </div>
          <div class="iwj-bpc-card">
            <div class="iwj-bpc-card-title">2. Labor &amp; Pain Management Environment</div>
            <label class="iwj-bpc-item"><input type="checkbox"> I plan to use unmedicated comfort measures (movement, shower/tub, breathing) for as long as possible.</label>
            <label class="iwj-bpc-item"><input type="checkbox"> I prefer an early epidural; please notify the anesthesiologist when I am admitted.</label>
            <label class="iwj-bpc-item"><input type="checkbox"> Please keep the room environment calm (dim lights, quiet voices, limited student/resident observers).</label>
            <label class="iwj-bpc-item"><input type="checkbox"> I prefer to maintain freedom of movement and intermittent fetal monitoring if clinically safe.</label>
          </div>
          <div class="iwj-bpc-card">
            <div class="iwj-bpc-card-title">3. Delivery &amp; Birth Preferences</div>
            <label class="iwj-bpc-item"><input type="checkbox" checked> I prefer spontaneous pushing according to my body's urges rather than directed/coached pushing.</label>
            <label class="iwj-bpc-item"><input type="checkbox" checked> I do not consent to an episiotomy unless there is an immediate, critical fetal emergency.</label>
            <label class="iwj-bpc-item"><input type="checkbox"> If a Cesarean birth becomes necessary, I request a &ldquo;gentle/clear-drape&rdquo; Cesarean with immediate skin-to-skin.</label>
          </div>
          <div class="iwj-bpc-card">
            <div class="iwj-bpc-card-title">4. Immediate Newborn Care</div>
            <label class="iwj-bpc-item"><input type="checkbox" checked> Please delay umbilical cord clamping until the cord has completely stopped pulsing.</label>
            <label class="iwj-bpc-item"><input type="checkbox" checked> I request immediate, uninterrupted skin-to-skin contact for the first hour after birth.</label>
            <label class="iwj-bpc-item"><input type="checkbox"> Please perform all routine newborn evaluations (weighing, eye ointment) while baby is on my chest.</label>
          </div>
        </div>

        <div class="iwj-bpc-custom">
          <h4>Special Note for My Hospital Care Team (Optional)</h4>
          <input type="text" placeholder="e.g., 'I have a history of anxiety around needles; please explain IV placement slowly.'">
        </div>

        <div class="iwj-bpc-btn-wrap">
          <button class="iwj-bpc-btn" onclick="iwjBpcPrint()">Print / Save My Birth Briefing</button>
        </div>
      </div>
    </div>

    <p class="iwj-p2a-tool-disclaimer">
      This tool helps you organize preferences to discuss with a licensed provider. It is not a substitute for professional medical advice, diagnosis, or treatment.
    </p>
  </div>

  <!-- SECTION 5: CONNECTION TO TRAVEL & EVENTS -->
  <div class="iwj-p2a-section">
    <div class="iwj-p2a-section-title">Connection to Travel &amp; Events</div>
    <div class="iwj-p2a-heading" style="font-size:1.1rem;">Babymoons &amp; Prenatal Travel Safety</div>
    <div class="iwj-p2a-travel-box">
      <p class="iwj-p2a-body" style="margin-bottom:1rem;">
        Taking time to reconnect and rest before your baby arrives is a vital mental
        health practice. Through our travel arm Checked Bags and Good Vibes
        (bagsandvibes.com), we provide:
      </p>
      <ul class="iwj-p2a-travel-list">
        <li><strong>Safe &ldquo;Babymoon&rdquo; Planning:</strong> Curating low-stress, prenatal-friendly travel experiences with mapped local medical facilities and comfort amenities.</li>
        <li><strong>The Fit-to-Fly &amp; Continuity Checklist:</strong> Ensuring you have all necessary clinical travel clearances and prenatal records organized before you fly.</li>
      </ul>
    </div>
  </div>

  <div class="iwj-p2a-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  window.iwjBpcPrint = function(){
    var items = document.querySelectorAll('.iwj-bpc-item');
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
