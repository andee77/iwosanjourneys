<?php
/**
 * Template Name: Iwosan Maternal Health — Track B Pillar 6: WOC Loss, Grief & Medical Trauma Validation
 * Description: Maternal Health Track B pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>WOC Loss, Grief &amp; Medical Trauma Validation</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK B, PILLAR 6: WOC Loss, Grief & Medical Trauma Validation
     ============================================ -->
<style>
.iwj-b6-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-b6-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#8B5E3C;margin-bottom:.75rem;}
.iwj-b6-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-b6-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-b6-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-b6-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-b6-section{margin-bottom:2.75rem}
.iwj-b6-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#8B5E3C;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-b6-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-b6-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-b6-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-b6-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-b6-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-b6-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-b6-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-b6-table td.says{color:#7A6E65;font-style:italic;}
.iwj-b6-table td.truth{font-weight:600;color:#1C3A2A}
.iwj-b6-script-card{background:#FAF8F4;border-left:3px solid #8B5E3C;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-b6-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b6-script-say{font-size:.9rem;line-height:1.65;font-style:italic;color:#3D3228;}
.iwj-b6-question-card{background:#fff;border:1px solid #E5E0D5;border-left:3px solid #C9A052;border-radius:0 6px 6px 0;padding:1.1rem 1.4rem;margin-bottom:1rem;}
.iwj-b6-question-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b6-question-say{font-size:.9rem;line-height:1.65;font-style:italic;color:#3D3228;}
.iwj-b6-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b6-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-b6-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(139,94,60,.15);padding-top:.75rem;}
.iwj-b6-travel-box{background:#F5EFE7;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-b6-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-b6-travel-list li{margin-bottom:.6rem}
.iwj-b6-travel-list li:last-child{margin-bottom:0}
.iwj-b6-travel-list strong{color:#0A1F44}
.iwj-b6-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F5EFE7;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}
.iwj-b6-support-note{margin-top:1.25rem;padding:1.25rem 1.5rem;background:#EEF3EE;border-left:3px solid #1C3A2A;border-radius:4px;font-size:.85rem;font-weight:300;color:#1C3A2A;line-height:1.65;}

/* ---------- WOC Grief, Trauma & Boundary Plan ---------- */
.iwj-gtb{--iwj-primary:#0A1F44;--iwj-accent:#8B5E3C;--iwj-accent-hover:#6f4a2f;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-gtb *{box-sizing:border-box}
.iwj-gtb-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-gtb-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-gtb-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-gtb-content{padding:1.5rem}
.iwj-gtb-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-gtb-grid{grid-template-columns:1fr}}
.iwj-gtb-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-gtb-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-gtb-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-gtb-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-gtb-custom{margin-top:1.25rem;padding:1rem;background:#F5EFE7;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-gtb-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-gtb-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;margin-top:.3rem;}
.iwj-gtb-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-gtb-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-gtb-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-gtb{border:none;box-shadow:none;max-width:100%}
  .iwj-gtb-btn-wrap,.iwj-gtb-custom,.iwj-gtb-header p{display:none}
  .iwj-gtb-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-gtb-item:not(.is-checked){display:none}
  .iwj-gtb-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-gtb-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-b6-page">
  <div class="iwj-b6-eyebrow">Maternal Health &mdash; Track B: WOC Advocacy Sanctuary &mdash; Pillar 6</div>
  <p class="iwj-b6-subtitle">
    Honoring Your Grief, Naming the Trauma of Dismissal, and Demanding Diagnostic Accountability
  </p>

  <img class="iwj-b6-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/getting-answers-scaled.png" alt="Representing the search for clarity and answers after loss">

  <p class="iwj-b6-lede">
    When a Woman of Color experiences a pregnancy loss &mdash; whether
    through miscarriage, stillbirth, infertility, or a deeply traumatic,
    life-threatening birth &mdash; her grief is often complicated by a layer
    of pain that standard bereavement programs ignore: Medical Trauma and
    Institutional Betrayal. For Black, Brown, and Indigenous mothers, loss
    rarely feels like &ldquo;just bad luck.&rdquo; Too often, it is
    accompanied by the agonizing memory of having said, &ldquo;Something
    feels wrong,&rdquo; only to be ignored, rushed, or treated with clinical
    indifference.
  </p>

  <!-- SECTION 1: THE WOC REALITY CHECK -->
  <div class="iwj-b6-section">
    <div class="iwj-b6-section-title">The WOC Reality Check</div>
    <div class="iwj-b6-heading">Your Grief Is Valid, and Your Anger Is Earned.</div>
    <p class="iwj-b6-body">
      In the United States, Black and Indigenous women experience
      significantly higher rates of miscarriage, stillbirth, and near-miss
      maternal trauma than white women. Yet when Women of Color express
      their heartbreak or demand to know why a loss happened, they are
      routinely met with cold clinical jargon, told &ldquo;these things just
      happen,&rdquo; or labeled as &ldquo;hostile&rdquo; for asking hard
      questions.
    </p>
    <p class="iwj-b6-body">
      Under Iwosan Journeys, we refuse to gaslight you. We recognize that
      healing from maternal loss is impossible if the medical system denies
      your experience.
    </p>
    <p class="iwj-b6-body">
      True self-advocacy here means separating your self-worth from a broken
      system, setting fierce boundaries around your peace, and using
      structured language to demand complete, documented clinical answers
      when you feel ready.
    </p>
  </div>

  <!-- SECTION 2: DECODING THE DUAL LOAD -->
  <div class="iwj-b6-section">
    <div class="iwj-b6-section-title">Decoding the Dual Load <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Grief vs. Medical Trauma)</span></div>
    <p class="iwj-b6-body">
      Women of Color often carry two distinct wounds after a loss or a
      near-miss birth. Acknowledging both is essential for your emotional
      survival:
    </p>
    <div class="iwj-b6-table-wrap">
      <table class="iwj-b6-table">
        <thead><tr><th>What You Are Processing</th><th>How Society / Clinics Diminish It</th><th>The Iwosan Journeys Truth</th></tr></thead>
        <tbody>
          <tr>
            <td>1. The Maternal Grief <span style="font-weight:400;font-style:italic;color:#7A6E65;">(mourning your baby, pregnancy, or fertility)</span></td>
            <td class="says">&ldquo;At least you're young enough to try again later.&rdquo;</td>
            <td class="truth">You cannot replace a lost child or a lost future with a promise of &ldquo;next time.&rdquo; You are allowed to grieve this specific loss deeply, without rushing toward silver linings.</td>
          </tr>
          <tr>
            <td>2. The Medical Trauma <span style="font-weight:400;font-style:italic;color:#7A6E65;">(the memory of being ignored, mistreated, or dismissed)</span></td>
            <td class="says">&ldquo;The doctors did everything they could &mdash; try not to dwell on it.&rdquo;</td>
            <td class="truth">If your pain or warnings were ignored, that is a traumatic injury. Feeling anger, distrust, or hyper-vigilance toward healthcare providers is a normal, rational response to institutional dismissal.</td>
          </tr>
          <tr>
            <td>3. The &ldquo;Strong WOC&rdquo; Expectation <span style="font-weight:400;font-style:italic;color:#7A6E65;">(pressure to suffer silently and return to work/life)</span></td>
            <td class="says">&ldquo;Black/Brown women are resilient &mdash; you'll bounce back.&rdquo;</td>
            <td class="truth">The &ldquo;Strong Black Woman&rdquo; trope is a trap. You do not have to carry this with stoicism. You have the right to rest, weep, and receive care without performing strength for others.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <img class="iwj-b6-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/Asking-questions-Black-Father-scaled.png" alt="A father asking hard questions, seeking accountability">

  <!-- SECTION 3: WHAT TO TELL & ASK YOUR DOCTOR -->
  <div class="iwj-b6-section">
    <div class="iwj-b6-section-title">What to Tell &amp; Ask Your Doctor <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Demanding Answers)</span></div>
    <p class="iwj-b6-body">
      When you return for a medical follow-up after a loss or traumatic
      birth, do not let them rush you through a standard 10-minute check.
      Use these scripts to command the room:
    </p>

    <div class="iwj-b6-script-card">
      <div class="iwj-b6-script-label">1. What to Tell the Doctor <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Setting the Accountability Tone)</span></div>
      <div class="iwj-b6-script-say">&ldquo;Doctor, I am here today for my post-loss / post-trauma follow-up. In addition to checking my physical recovery, I am here to discuss the clinical events leading to my loss. I experienced [symptoms that were dismissed / lack of communication / delayed intervention], and I require a clear, transparent review of my medical chart today.&rdquo;</div>
    </div>

    <div class="iwj-b6-heading" style="font-size:1.05rem;margin-top:1.75rem;">2. What to Ask the Doctor <span style="color:#7A6E65;font-weight:300;font-style:italic;font-size:.85rem;">(The 3 Diagnostic Accountability Questions)</span></div>

    <div class="iwj-b6-question-card">
      <div class="iwj-b6-question-label">The Root-Cause &amp; Pathology Question</div>
      <div class="iwj-b6-question-say">&ldquo;Can you walk me step-by-step through the pathology reports, placenta examination, or lab results, and explain what specific biological or structural factors contributed to this loss?&rdquo;</div>
    </div>
    <div class="iwj-b6-question-card">
      <div class="iwj-b6-question-label">The Disparity &amp; Differential Question</div>
      <div class="iwj-b6-question-say">&ldquo;Given the known disparities impacting Black/Brown maternal health (such as fibroids, clotting disorders, or preeclampsia), what specific preventative testing &mdash; like a full reproductive immunology or coagulation panel &mdash; will we order before I consider any future pregnancy?&rdquo;</div>
    </div>
    <div class="iwj-b6-question-card">
      <div class="iwj-b6-question-label">The Chart Documentation Request</div>
      <div class="iwj-b6-question-say">&ldquo;I am requesting a complete, unedited copy of my medical records, including physician and nursing shift notes from the day of my [loss / delivery / ER visit], to review with my care team.&rdquo;</div>
    </div>

    <div class="iwj-b6-script-card" style="margin-top:1.5rem;">
      <div class="iwj-b6-script-label">3. How to Respond If Told &ldquo;We Rarely Find a Reason for These Things&rdquo;</div>
      <div class="iwj-b6-script-say">&ldquo;I understand that not every loss has a clear cause, but given my clinical history and the symptoms I reported, I am not satisfied with 'unknown.' I want referrals to a Maternal-Fetal Medicine (MFM) specialist and a Reproductive Endocrinologist ordered in my chart today for a second opinion.&rdquo;</div>
    </div>
  </div>

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-b6-section">
    <div class="iwj-b6-section-title">Interactive Tool for WOC Pillar 6</div>
    <div class="iwj-b6-tool-heading">The WOC Grief, Trauma &amp; Boundary Plan</div>
    <div class="iwj-b6-tool-subhead">
      Build your personal sanctuary plan. Check the boundaries you are
      setting against insensitive comments, select your clinical
      accountability demands, and print your Grief &amp; Trauma Plan to
      share with your partner or advocate.
    </div>

    <div class="iwj-gtb">
      <div class="iwj-gtb-header">
        <h3>WOC Grief, Trauma &amp; Boundary Plan</h3>
        <p>Select your boundaries and clinical demands below. Print or save this sheet to protect your emotional peace and guide your medical follow-up visits.</p>
      </div>
      <div class="iwj-gtb-content">
        <div class="iwj-gtb-grid">
          <div class="iwj-gtb-card">
            <div class="iwj-gtb-card-title">1. Protecting Against the &ldquo;Strong WOC&rdquo; Trap</div>
            <label class="iwj-gtb-item"><input type="checkbox" checked> I give myself permission to weep, rest, and be cared for without performing strength for others.</label>
            <label class="iwj-gtb-item"><input type="checkbox" checked> I refuse to accept statements like &ldquo;at least you can try again&rdquo; or &ldquo;everything happens for a reason.&rdquo;</label>
            <label class="iwj-gtb-item"><input type="checkbox"> I am designating my partner/advocate to communicate all family and workplace updates on my behalf.</label>
          </div>
          <div class="iwj-gtb-card">
            <div class="iwj-gtb-card-title">2. Clinical Accountability &amp; Follow-Up Demands</div>
            <label class="iwj-gtb-item"><input type="checkbox" checked> I request a complete, step-by-step review of all pathology and laboratory findings from my loss.</label>
            <label class="iwj-gtb-item"><input type="checkbox" checked> I request a full copy of my unedited hospital/clinical chart notes for my personal records.</label>
            <label class="iwj-gtb-item"><input type="checkbox"> I request a referral to a Maternal-Fetal Medicine (MFM) specialist for an independent second opinion.</label>
          </div>
          <div class="iwj-gtb-card">
            <div class="iwj-gtb-card-title">3. Culturally Safe Mental Health Support</div>
            <label class="iwj-gtb-item"><input type="checkbox" checked> I plan to connect with a BIPOC-led perinatal bereavement counselor or WOC trauma therapist.</label>
            <label class="iwj-gtb-item"><input type="checkbox"> I request a screening for medical PTSD and postpartum anxiety/depression.</label>
            <label class="iwj-gtb-item"><input type="checkbox"> I want my support partner present at all medical visits so I am not navigating clinics alone.</label>
          </div>
          <div class="iwj-gtb-card">
            <div class="iwj-gtb-card-title">4. Partner &amp; Relationship Alignment</div>
            <label class="iwj-gtb-item"><input type="checkbox" checked> We acknowledge that we may grieve differently and agree not to rush each other's timeline.</label>
            <label class="iwj-gtb-item"><input type="checkbox"> We agree to hold a 15-minute daily check-in to share our grief without trying to &lsquo;fix&rsquo; it.</label>
          </div>
        </div>

        <div class="iwj-gtb-custom">
          <h4>My Personal Rule for Protecting My Peace</h4>
          <input type="text" placeholder="e.g., 'I will step out of any room or conversation that dismisses my experience or rushes my healing.'">
        </div>

        <div class="iwj-gtb-btn-wrap">
          <button class="iwj-gtb-btn" onclick="iwjGtbPrint()">Print / Save WOC Grief &amp; Trauma Plan</button>
        </div>
      </div>
    </div>

    <p class="iwj-b6-tool-disclaimer">
      This tool is a self-reflective organizing aid, not a substitute for grief counseling, trauma therapy, or medical care. Grieving looks different for everyone, and there is no wrong way or wrong timeline to do it.
    </p>

    <div class="iwj-b6-support-note">
      If your grief feels unmanageable, or you're having thoughts of
      harming yourself, please reach out right away. Call or text
      <strong>988</strong> (the Suicide &amp; Crisis Lifeline, available
      24/7), or contact a local crisis agency or mental health
      professional in your area. You don't have to carry this alone.
      <br><br>
      Additional grief and bereavement resources:
      <a href="https://www.griefcounselor.org/resources/helpful-websites/" target="_blank" rel="noopener" style="color:#1C3A2A;">griefcounselor.org &mdash; Helpful Websites</a>,
      <a href="https://www.chop.edu/health-resources/grief-related-websites" target="_blank" rel="noopener" style="color:#1C3A2A;">chop.edu &mdash; Grief-Related Websites</a>,
      <a href="https://www.samhsa.gov/communities/coping-bereavement-grief" target="_blank" rel="noopener" style="color:#1C3A2A;">SAMHSA &mdash; Coping With Bereavement and Grief</a>
    </div>
  </div>

  <!-- SECTION 5: CONNECTION TO RESTORATIVE SANCTUARIES -->
  <div class="iwj-b6-section">
    <div class="iwj-b6-section-title">Connection to Restorative Sanctuaries</div>
    <div class="iwj-b6-heading" style="font-size:1.1rem;">Culturally Congruent Bereavement &amp; Healing Travel</div>
    <div class="iwj-b6-travel-box">
      <p class="iwj-b6-body" style="margin-bottom:1rem;">
        You do not have to heal in the same environment where your trauma
        occurred. Through our travel arm Checked Bags and Good Vibes
        (bagsandvibes.com), we assist families with:
      </p>
      <ul class="iwj-b6-travel-list">
        <li><strong>BIPOC Restorative Grief Retreats:</strong> Connecting mothers and couples with specialized bereavement getaways led by Black, Brown, and Indigenous trauma-informed therapists and bodyworkers.</li>
        <li><strong>Culturally Safe Second-Opinion Navigation:</strong> Coordinating travel and lodging logistics so you can consult with out-of-state BIPOC Maternal-Fetal Medicine specialists or reproductive immunologists who will honor your voice.</li>
      </ul>
    </div>
  </div>

  <img class="iwj-b6-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/baby-loss-black-family-scaled.png" alt="A family navigating the profound grief of loss, together">

  <div class="iwj-b6-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider, grief counselor, or mental health professional.
  </div>
</div>

<script>
(function(){
  window.iwjGtbPrint = function(){
    var items = document.querySelectorAll('.iwj-gtb-item');
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
