<?php
/**
 * Template Name: Iwosan Maternal Health — Track B Pillar 4: WOC Partner Vigilance & Mental Load
 * Description: Maternal Health Track B pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>WOC Partner Vigilance &amp; Mental Load</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK B, PILLAR 4: WOC Partner Vigilance & Mental Load
     ============================================ -->
<style>
.iwj-b4-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-b4-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#8B5E3C;margin-bottom:.75rem;}
.iwj-b4-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-b4-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-b4-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-b4-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-b4-section{margin-bottom:2.75rem}
.iwj-b4-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#8B5E3C;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-b4-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-b4-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-b4-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-b4-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-b4-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-b4-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-b4-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-b4-table td.says{color:#7A6E65;font-style:italic;}
.iwj-b4-table td.why{font-weight:600;color:#1C3A2A}
.iwj-b4-script-card{background:#FAF8F4;border-left:3px solid #8B5E3C;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-b4-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-b4-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;}
.iwj-b4-question-list{margin:1rem 0 0 0;padding-left:1.2rem;font-size:.92rem;line-height:1.75;font-weight:300;}
.iwj-b4-question-list li{margin-bottom:.75rem}
.iwj-b4-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b4-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-b4-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(139,94,60,.15);padding-top:.75rem;}
.iwj-b4-travel-box{background:#F5EFE7;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-b4-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-b4-travel-list li{margin-bottom:.6rem}
.iwj-b4-travel-list li:last-child{margin-bottom:0}
.iwj-b4-travel-list strong{color:#0A1F44}
.iwj-b4-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F5EFE7;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}

/* ---------- WOC Partner Vigilance & Bandwidth Check-In ---------- */
.iwj-pv{--iwj-primary:#0A1F44;--iwj-accent:#8B5E3C;--iwj-accent-hover:#6f4a2f;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-pv *{box-sizing:border-box}
.iwj-pv-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-pv-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-pv-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-pv-content{padding:1.5rem}
.iwj-pv-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-pv-grid{grid-template-columns:1fr}}
.iwj-pv-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-pv-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-pv-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-pv-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-pv-custom{margin-top:1.25rem;padding:1rem;background:#F5EFE7;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-pv-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-pv-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;}
.iwj-pv-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-pv-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-pv-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-pv{border:none;box-shadow:none;max-width:100%}
  .iwj-pv-btn-wrap,.iwj-pv-custom,.iwj-pv-header p{display:none}
  .iwj-pv-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-pv-item:not(.is-checked){display:none}
  .iwj-pv-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-pv-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-b4-page">
  <div class="iwj-b4-eyebrow">Maternal Health &mdash; Track B: WOC Advocacy Sanctuary &mdash; Pillar 4</div>
  <p class="iwj-b4-subtitle">
    Carrying the Weight Without Breaking: Navigating Mortality Vigilance, Burnout, and Your Own Mental Health
  </p>

  <img class="iwj-b4-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/fathers-worries-scaled.png" alt="Representing a partner's silent worry and protective vigilance">

  <p class="iwj-b4-lede">
    When you look at maternal health education, almost no one acknowledges
    what is happening in the mind of the partner of a Woman of Color.
    Partners of Black, Brown, and Indigenous birthing parents carry an
    unspoken, heavy weight: &ldquo;Maternal Mortality Vigilance
    Trauma.&rdquo; You are constantly bombarded by the statistical reality
    that the person you love is at a much higher risk in a medical room.
    You are told to &ldquo;be the guard dog,&rdquo; watch every monitor,
    fight bias, and protect your baby &mdash; all while trying to provide
    emotional warmth and financial stability.
  </p>

  <!-- SECTION 1: THE WOC PARTNER REALITY CHECK -->
  <div class="iwj-b4-section">
    <div class="iwj-b4-section-title">The WOC Partner Reality Check</div>
    <div class="iwj-b4-heading">You Cannot Guard the Room If Your Own Battery Is at Zero.</div>
    <p class="iwj-b4-body">
      Supporting a Woman of Color through pregnancy and birth means carrying
      a mental load that standard birth partners never have to experience.
    </p>
    <p class="iwj-b4-body">
      You aren't just thinking about car seats, diapers, and cribs &mdash;
      you are constantly asking yourself: &ldquo;What if they don't listen
      to her?&rdquo; &ldquo;What if I miss a warning sign?&rdquo; &ldquo;What
      if something goes wrong and I can't protect her?&rdquo;
    </p>
    <p class="iwj-b4-body">
      That chronic hyper-vigilance keeps your nervous system flooded with
      adrenaline and cortisol. Too often, partners suffer in silence,
      believing that admitting anxiety or exhaustion makes them
      &ldquo;weak&rdquo; or &ldquo;selfish&rdquo; when she is the one giving
      birth.
    </p>
    <p class="iwj-b4-body">
      Under Iwosan Journeys, our truth is simple: Your mental health is a
      critical piece of the maternal safety net. You cannot be a strong,
      clear-headed advocate for your family if you are silently collapsing
      under the pressure.
    </p>
  </div>

  <!-- SECTION 2: DECODING VIGILANCE BURNOUT -->
  <div class="iwj-b4-section">
    <div class="iwj-b4-section-title">Decoding Vigilance Burnout <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Normal Stress vs. Compassion Fatigue)</span></div>
    <p class="iwj-b4-body">
      Recognize how chronic protective stress impacts your body and mind so
      you can address it before it turns into full burnout:
    </p>
    <div class="iwj-b4-table-wrap">
      <table class="iwj-b4-table">
        <thead><tr><th>What You Might Experience</th><th>Why Partners Hide It</th><th>Why It Requires Proactive Action</th></tr></thead>
        <tbody>
          <tr>
            <td>Hyper-Vigilance &amp; Insomnia</td>
            <td class="says">&ldquo;I need to stay awake and alert in case something happens.&rdquo;</td>
            <td class="why">Lying awake running worst-case medical scenarios disrupts your sleep architecture, impairing your focus and reaction time when you actually need to advocate.</td>
          </tr>
          <tr>
            <td>The &ldquo;Short Fuse&rdquo; &amp; Snapping</td>
            <td class="says">&ldquo;I'm just stressed from work and the baby preparations.&rdquo;</td>
            <td class="why">Chronic adrenaline overload lowers your tolerance for daily friction, leading to irritability or pulling away from the person you are trying to protect.</td>
          </tr>
          <tr>
            <td>Silent Dread or Chest Tightness</td>
            <td class="says">&ldquo;It's my job to carry the worry so she doesn't have to.&rdquo;</td>
            <td class="why">Unprocessed anxiety manifests physically as elevated blood pressure, chest tightness, and panic symptoms that can mirror your own health crises.</td>
          </tr>
          <tr>
            <td>Numbness or Emotional Detachment</td>
            <td class="says">&ldquo;I just need to stay focused on the logistics right now.&rdquo;</td>
            <td class="why">Detachment is a neurological defense mechanism against overwhelming fear. It is a core symptom of Partner Postpartum Depression &amp; Anxiety (PPDA).</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- SECTION 3: WHAT TO TELL & ASK YOUR DOCTOR -->
  <div class="iwj-b4-section">
    <div class="iwj-b4-section-title">What to Tell &amp; Ask Your Doctor <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(The Partner's Script)</span></div>
    <p class="iwj-b4-body">
      You deserve medical and mental health support too. When you visit your
      own primary care provider or therapist, use these scripts to advocate
      for your baseline:
    </p>

    <div class="iwj-b4-script-card">
      <div class="iwj-b4-script-label">1. What to Tell Your Doctor <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Naming the WOC Vigilance Load)</span></div>
      <div class="iwj-b4-script-say">&ldquo;Doctor, I am expecting a baby / a new parent, and my partner is a Woman of Color. Given the known maternal health disparities, I have been carrying a high level of hyper-vigilance and protective stress. Over the last few months, I have noticed [severe insomnia / chest tightness / shorter temper / feeling emotionally numb]. I want to evaluate my physical and mental baseline today so I don't hit burnout.&rdquo;</div>
    </div>

    <div class="iwj-b4-heading" style="font-size:1.05rem;margin-top:1.75rem;">2. What to Ask Your Doctor <span style="color:#7A6E65;font-weight:300;font-style:italic;font-size:.85rem;">(The 3 Strategic Questions)</span></div>
    <ul class="iwj-b4-question-list">
      <li><strong>The Stress &amp; Endocrine Audit Question:</strong> &ldquo;Can we run a metabolic panel, check my blood pressure, and test my thyroid or free/total testosterone to see how chronic stress and sleep deprivation are impacting my physical baseline?&rdquo;</li>
      <li><strong>The PPDA Screening Question:</strong> &ldquo;Can we complete a validated screening for Partner Postpartum Depression and Anxiety, and discuss warning signs I should watch for in myself?&rdquo;</li>
      <li><strong>The Culturally Safe Mental Health Referral Question:</strong> &ldquo;Can you refer me to a therapist or support group that understands BIPOC family dynamics, birth trauma, and the mental load of maternal advocacy?&rdquo;</li>
    </ul>

    <div class="iwj-b4-script-card" style="margin-top:1.5rem;">
      <div class="iwj-b4-script-label">3. How to Talk to Your Partner <span style="color:#7A6E65;font-weight:400;font-style:italic;">(The &ldquo;Shared Shield&rdquo; Conversation)</span></div>
      <p class="iwj-b4-body" style="margin-bottom:.6rem;">Do not hide your feelings from her; share them in a way that builds intimacy rather than burdening her:</p>
      <div class="iwj-b4-script-say">&ldquo;I love you, and I am 100% committed to advocating for you and protecting us. But I also want to be honest &mdash; carrying the fear of how the medical system treats Women of Color has been weighing heavily on my sleep and stress levels. I'm taking steps to support my own mental health so I can show up at my strongest for you.&rdquo;</div>
    </div>
  </div>

  <img class="iwj-b4-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/couple-talking-scaled.png" alt="A couple in honest conversation, representing the Shared Shield approach">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-b4-section">
    <div class="iwj-b4-section-title">Interactive Tool for WOC Pillar 4</div>
    <div class="iwj-b4-tool-heading">The WOC Partner Vigilance &amp; Bandwidth Check-In</div>
    <div class="iwj-b4-tool-subhead">
      Audit your protective stress, emotional bandwidth, and self-advocacy
      plan. Print your Vigilance Plan to take to your doctor or share with a
      trusted support person.
    </div>

    <div class="iwj-pv">
      <div class="iwj-pv-header">
        <h3>WOC Partner Vigilance &amp; Bandwidth Audit</h3>
        <p>Check the statements that describe your current stress load. Print this sheet to discuss with your own physician, therapist, or support network.</p>
      </div>
      <div class="iwj-pv-content">
        <div class="iwj-pv-grid">
          <div class="iwj-pv-card">
            <div class="iwj-pv-card-title">1. My Protective Stress &amp; Vigilance Load</div>
            <label class="iwj-pv-item"><input type="checkbox"> I experience anxiety or insomnia stemming from fear of medical bias or maternal complications.</label>
            <label class="iwj-pv-item"><input type="checkbox"> I feel constant internal pressure to be on guard and protect her in every clinical setting.</label>
            <label class="iwj-pv-item"><input type="checkbox"> I am experiencing chest tightness, headaches, or physical exhaustion from chronic vigilance.</label>
          </div>
          <div class="iwj-pv-card">
            <div class="iwj-pv-card-title">2. My Emotional &amp; Relational Bandwidth</div>
            <label class="iwj-pv-item"><input type="checkbox"> My fuse is shorter than usual; I find myself irritable or easily frustrated by daily tasks.</label>
            <label class="iwj-pv-item"><input type="checkbox"> I feel emotionally numb, disconnected, or isolated because I am suppressing my own worries.</label>
            <label class="iwj-pv-item"><input type="checkbox"> I feel guilty whenever I take time to rest or focus on my own physical needs.</label>
          </div>
          <div class="iwj-pv-card">
            <div class="iwj-pv-card-title">3. My Clinical Support Plan</div>
            <label class="iwj-pv-item"><input type="checkbox" checked> I request a screening for Partner Postpartum Depression/Anxiety (PPDA) and chronic stress.</label>
            <label class="iwj-pv-item"><input type="checkbox" checked> I request a metabolic and blood pressure check to ensure chronic stress isn't harming my baseline.</label>
            <label class="iwj-pv-item"><input type="checkbox"> I want a referral to a culturally competent therapist or BIPOC parents' support group.</label>
          </div>
          <div class="iwj-pv-card">
            <div class="iwj-pv-card-title">4. My Non-Negotiable Boundaries</div>
            <label class="iwj-pv-item"><input type="checkbox" checked> I will block out 30 minutes twice a week for physical release (workout, walk, silence) without guilt.</label>
            <label class="iwj-pv-item"><input type="checkbox" checked> I will speak honestly with my partner about our shared emotional load so we carry it together.</label>
          </div>
        </div>

        <div class="iwj-pv-custom">
          <h4>My Personal Self-Advocacy Note / Commitment</h4>
          <input type="text" placeholder="e.g., 'I will stop checking medical statistics late at night so I can get restful sleep.'">
        </div>

        <div class="iwj-pv-btn-wrap">
          <button class="iwj-pv-btn" onclick="iwjPvPrint()">Print / Save Partner Bandwidth Plan</button>
        </div>
      </div>
    </div>

    <p class="iwj-b4-tool-disclaimer">
      This tool is an educational self-check, not a diagnostic instrument. If you're experiencing persistent anxiety, insomnia, or thoughts that concern you, please reach out to a licensed provider or a mental health professional.
    </p>
  </div>

  <!-- SECTION 5: CONNECTION TO LIVE RETREATS -->
  <div class="iwj-b4-section">
    <div class="iwj-b4-section-title">Connection to Live Retreats</div>
    <div class="iwj-b4-heading" style="font-size:1.1rem;">Sanctuary for the Protector</div>
    <div class="iwj-b4-travel-box">
      <p class="iwj-b4-body" style="margin-bottom:1rem;">
        Carrying the protective shield requires space to set it down.
        Through our travel arm Checked Bags and Good Vibes
        (bagsandvibes.com), we provide:
      </p>
      <ul class="iwj-b4-travel-list">
        <li><strong>BIPOC Couples' Restorative Retreats:</strong> Safe, culturally congruent destination getaways where partners and expectant/new parents can recalibrate their nervous systems together away from clinical triggers.</li>
        <li><strong>Partner Support Circles:</strong> Live workshops at our regional Meeting Me Summits where partners connect, share the WOC advocacy load, and learn tangible de-escalation tools.</li>
      </ul>
    </div>
  </div>

  <div class="iwj-b4-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  window.iwjPvPrint = function(){
    var items = document.querySelectorAll('.iwj-pv-item');
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
