<?php
/**
 * Template Name: Iwosan Maternal Health — Track B Pillar 7: The Surviving Partner's Sanctuary
 * Description: Maternal Health Track B pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The Surviving Partner's Sanctuary</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK B, PILLAR 7: The Surviving Partner's Sanctuary
     ============================================ -->
<style>
.iwj-b7-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-b7-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#8B5E3C;margin-bottom:.75rem;}
.iwj-b7-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-b7-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-b7-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-b7-section{margin-bottom:2.75rem}
.iwj-b7-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#8B5E3C;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-b7-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-b7-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-b7-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-b7-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-b7-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-b7-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-b7-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-b7-table td.guilt{color:#7A6E65;font-style:italic;}
.iwj-b7-table td.truth{font-weight:600;color:#1C3A2A}
.iwj-b7-script-card{background:#FAF8F4;border-left:3px solid #8B5E3C;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-b7-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-b7-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;}
.iwj-b7-question-list{margin:1rem 0 0 0;padding-left:1.2rem;font-size:.92rem;line-height:1.75;font-weight:300;}
.iwj-b7-question-list li{margin-bottom:.75rem}
.iwj-b7-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-b7-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-b7-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(139,94,60,.15);padding-top:.75rem;}
.iwj-b7-travel-box{background:#F5EFE7;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-b7-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-b7-travel-list li{margin-bottom:.6rem}
.iwj-b7-travel-list li:last-child{margin-bottom:0}
.iwj-b7-travel-list strong{color:#0A1F44}
.iwj-b7-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F5EFE7;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}
.iwj-b7-support-note{margin-top:1.25rem;padding:1.25rem 1.5rem;background:#EEF3EE;border-left:3px solid #1C3A2A;border-radius:4px;font-size:.85rem;font-weight:300;color:#1C3A2A;line-height:1.65;}

/* ---------- Surviving Partner's Resilience & Accountability Plan ---------- */
.iwj-sra{--iwj-primary:#0A1F44;--iwj-accent:#8B5E3C;--iwj-accent-hover:#6f4a2f;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;--iwj-alert-bg:#FBEFED;--iwj-alert-text:#7A2E24;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-sra *{box-sizing:border-box}
.iwj-sra-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-sra-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-sra-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-sra-content{padding:1.5rem}
.iwj-sra-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-sra-grid{grid-template-columns:1fr}}
.iwj-sra-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-sra-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-sra-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-sra-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-sra-custom{margin-top:1.25rem;padding:1rem;background:#F5EFE7;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-sra-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-sra-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;margin-top:.3rem;}
.iwj-sra-alert{background:var(--iwj-alert-bg);border-left:4px solid var(--iwj-alert-text);padding:1rem;border-radius:0 8px 8px 0;margin-top:1.25rem;font-size:.86rem;line-height:1.55}
.iwj-sra-alert h4{color:var(--iwj-alert-text);margin-bottom:.5rem;font-size:.92rem;font-weight:800}
.iwj-sra-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-sra-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-sra-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-sra{border:none;box-shadow:none;max-width:100%}
  .iwj-sra-btn-wrap,.iwj-sra-custom,.iwj-sra-header p{display:none}
  .iwj-sra-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-sra-item:not(.is-checked){display:none}
  .iwj-sra-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-sra-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-b7-page">
  <div class="iwj-b7-eyebrow">Maternal Health &mdash; Track B: WOC Advocacy Sanctuary &mdash; Pillar 7</div>
  <p class="iwj-b7-subtitle">
    When the Unthinkable Happens: Navigating Life After Maternal or Infant Loss, Dismantling Guardian Guilt, and Rebuilding
  </p>

  <img class="iwj-b7-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/mothers-loss-scaled.png" alt="A quiet, gentle image representing space to grieve and heal">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-b7-section">
    <div class="iwj-b7-section-title">The Reality Check</div>
    <div class="iwj-b7-heading">You Are Not Just &ldquo;The Leftover Parent&rdquo; &mdash; You Are a Survivor of Medical Tragedy.</div>
    <p class="iwj-b7-body">
      When a Black, Brown, or Indigenous mother dies during pregnancy,
      birth, or the postpartum period &mdash; or when a baby does not come
      home &mdash; the world often expects the surviving partner to
      immediately harden into a stoic caretaker.
    </p>
    <p class="iwj-b7-body">
      You are told to &ldquo;be strong for the baby,&rdquo; to &ldquo;keep
      moving forward,&rdquo; or to accept that &ldquo;the doctors did
      everything they could.&rdquo;
    </p>
    <p class="iwj-b7-body">
      Under Iwosan Journeys, we refuse to look away from the hardest truths.
      If you lost your partner or your child to a healthcare system that
      failed to protect them, your grief is compounded by profound trauma
      and anger.
    </p>
    <p class="iwj-b7-body">
      You do not have to perform resilience here. This sanctuary is built to
      help you dismantle the guilt of what happened in that hospital room,
      protect your surviving family, and demand legal and clinical
      accountability on your own terms.
    </p>
  </div>

  <!-- SECTION 2: DISMANTLING ROOM GUARDIAN GUILT -->
  <div class="iwj-b7-section">
    <div class="iwj-b7-section-title">Dismantling &ldquo;Room Guardian Guilt&rdquo;</div>
    <p class="iwj-b7-body">
      If you stood in that hospital room advocating for her, it is almost
      guaranteed that your mind is tormenting you with &ldquo;what-ifs.&rdquo;
      Read these truths and anchor yourself in reality:
    </p>
    <div class="iwj-b7-table-wrap">
      <table class="iwj-b7-table">
        <thead><tr><th>The Guilt You Carry</th><th>The Systemic Reality</th></tr></thead>
        <tbody>
          <tr>
            <td class="guilt">&ldquo;I should have fought harder when the nurse dismissed her pain.&rdquo;</td>
            <td class="truth">You are not to blame for institutional bias. You were a partner in a hospital room; the licensed medical professionals carried the legal and moral duty to triage and treat her symptoms.</td>
          </tr>
          <tr>
            <td class="guilt">&ldquo;I was supposed to be her protector, and I failed.&rdquo;</td>
            <td class="truth">You did not fail her; the safety net failed you both. You loved her, you spoke up for her, and you stood by her. The burden of a preventable medical outcome belongs on the healthcare system, not on your love.</td>
          </tr>
          <tr>
            <td class="guilt">&ldquo;I don't deserve to rest or feel joy when she is gone.&rdquo;</td>
            <td class="truth">She wanted you to live. Whether you are raising a surviving child or honoring an empty nursery, destroying your own mental and physical survival does not honor her memory.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <img class="iwj-b7-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/sad-blk-father-holding-baby-scaled.png" alt="A grieving father, representing the profound loss and love of a surviving partner">

  <!-- SECTION 3: WHAT TO TELL & ASK -->
  <div class="iwj-b7-section">
    <div class="iwj-b7-section-title">What to Tell &amp; Ask <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Clinical &amp; Legal Accountability)</span></div>
    <p class="iwj-b7-body">
      When a maternal death or stillbirth occurs, hospital risk-management
      teams often step in quickly with vague explanations. You have the
      right to independent answers:
    </p>

    <div class="iwj-b7-script-card">
      <div class="iwj-b7-script-label">1. Demanding the Complete Medical Record <span style="color:#7A6E65;font-weight:400;font-style:italic;">(What to Put in Writing to the Hospital)</span></div>
      <div class="iwj-b7-script-say">&ldquo;As the legal next of kin / surviving partner, I am formally requesting the complete, unedited, timestamped electronic medical record &mdash; including all physician, nursing, and surgical shift notes, vital sign logs, and fetal monitor strips &mdash; for my late partner/child from [Admission Date] to [Discharge/Date of Loss].&rdquo;</div>
    </div>

    <div class="iwj-b7-heading" style="font-size:1.05rem;margin-top:1.75rem;">2. What to Ask an Independent Medical Examiner or Second-Opinion MFM</div>
    <ul class="iwj-b7-question-list">
      <li>&ldquo;Can you review the autopsy, placenta pathology, and vital sign logs to tell me exactly when her clinical baseline began to decompensate, and whether earlier intervention could have altered the outcome?&rdquo;</li>
      <li>&ldquo;Were standard obstetric hemorrhage, preeclampsia, or sepsis protocols initiated in a timely manner according to national safety standards?&rdquo;</li>
    </ul>

    <div class="iwj-b7-script-card" style="margin-top:1.5rem;">
      <div class="iwj-b7-script-label">3. What to Tell Your Own Doctor/Therapist <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Your Survival Baseline)</span></div>
      <div class="iwj-b7-script-say">&ldquo;I am a surviving partner who recently lost my partner/child to maternal/infant mortality. I am experiencing acute traumatic bereavement. I need a complete physical baseline check &mdash; including cardiac and blood pressure monitoring for acute stress &mdash; and an immediate referral to a trauma therapist who specializes in BIPOC maternal loss and medical PTSD.&rdquo;</div>
    </div>
  </div>

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-b7-section">
    <div class="iwj-b7-section-title">Interactive Tool for Pillar 7</div>
    <div class="iwj-b7-tool-heading">The Surviving Partner's Resilience &amp; Accountability Plan</div>
    <div class="iwj-b7-tool-subhead">
      When you are surviving acute shock, daily decisions are overwhelming.
      Set strict boundaries with outsiders, identify what practical help you
      need, and organize your accountability steps, then print your
      Sanctuary Plan to keep with your trusted records.
    </div>

    <div class="iwj-sra">
      <div class="iwj-sra-header">
        <h3>The Surviving Partner's Sanctuary Plan</h3>
        <p>Select the boundaries, practical support, and accountability steps you need right now. Print or save this sheet to share with a trusted family member or advocate who can help you carry the load.</p>
      </div>
      <div class="iwj-sra-content">
        <div class="iwj-sra-grid">
          <div class="iwj-sra-card">
            <div class="iwj-sra-card-title">1. Protective Social &amp; Family Boundaries</div>
            <label class="iwj-sra-item"><input type="checkbox" checked> I am not accepting phone calls or visitors without prior agreement; all communication must go through my designated support person.</label>
            <label class="iwj-sra-item"><input type="checkbox" checked> I refuse to accept platitudes like &ldquo;you have to be strong now&rdquo; or &ldquo;she's in a better place.&rdquo;</label>
            <label class="iwj-sra-item"><input type="checkbox"> I give myself permission to grieve visibly, angrily, or silently without managing other people's discomfort.</label>
          </div>
          <div class="iwj-sra-card">
            <div class="iwj-sra-card-title">2. Solo Parenting &amp; Practical Defense <span style="font-weight:400;font-style:italic;">(If Baby Survived)</span></div>
            <label class="iwj-sra-item"><input type="checkbox" checked> I am delegating household logistics (meals, laundry, errands) to a specific support circle so I can focus on infant care and grief.</label>
            <label class="iwj-sra-item"><input type="checkbox"> I request a pediatric social worker or postpartum doula to assist with infant feeding/formula navigation and newborn sleep.</label>
            <label class="iwj-sra-item"><input type="checkbox"> I am designating a trusted family member to attend all pediatric visits with me so I am not alone.</label>
          </div>
          <div class="iwj-sra-card">
            <div class="iwj-sra-card-title">3. Clinical &amp; Legal Accountability Steps</div>
            <label class="iwj-sra-item"><input type="checkbox" checked> I am formally requesting the complete, unedited hospital chart and nursing/physician shift notes.</label>
            <label class="iwj-sra-item"><input type="checkbox"> I plan to request an independent review of the clinical timeline by an outside Maternal-Fetal Medicine expert or legal advocate.</label>
            <label class="iwj-sra-item"><input type="checkbox"> I will not sign hospital release or settlement documents without independent legal counsel.</label>
          </div>
          <div class="iwj-sra-card">
            <div class="iwj-sra-card-title">4. My Own Physical &amp; Trauma Survival</div>
            <label class="iwj-sra-item"><input type="checkbox" checked> I will schedule a complete medical baseline check (including blood pressure and cardiac stress markers) for myself.</label>
            <label class="iwj-sra-item"><input type="checkbox" checked> I request a referral to a trauma therapist specializing in BIPOC maternal mortality and medical PTSD.</label>
          </div>
        </div>

        <div class="iwj-sra-custom">
          <h4>My Designated Point-Person / Protector</h4>
          <input type="text" placeholder="Name and Role (e.g., 'My sister Marcus will handle all family questions and paperwork.')">
        </div>

        <div class="iwj-sra-alert">
          <h4>THE MEDICAL RECORDS ACCOUNTABILITY REQUEST</h4>
          <p>&ldquo;As the legal next of kin / surviving partner, I am formally requesting the complete, unedited, timestamped electronic medical record &mdash; including all physician, nursing, and surgical shift notes, vital sign logs, and fetal monitor strips &mdash; for my late partner/child from admission to discharge.&rdquo;</p>
        </div>

        <div class="iwj-sra-btn-wrap">
          <button class="iwj-sra-btn" onclick="iwjSraPrint()">Print / Save Surviving Partner Plan</button>
        </div>
      </div>
    </div>

    <p class="iwj-b7-tool-disclaimer">
      This tool is a self-reflective organizing aid, not a substitute for grief counseling, trauma therapy, or legal counsel. There is no right timeline for this kind of loss.
    </p>

    <div class="iwj-b7-support-note">
      Acute grief can bring overwhelming thoughts, including thoughts of
      not wanting to go on. If you are having thoughts of harming
      yourself, please reach out right away. Call or text
      <strong>988</strong> (the Suicide &amp; Crisis Lifeline, available
      24/7), or contact a local crisis agency or mental health
      professional in your area. You do not have to carry this alone, and
      reaching out is not a sign of weakness.
      <br><br>
      Additional grief and bereavement resources:
      <a href="https://www.griefcounselor.org/resources/helpful-websites/" target="_blank" rel="noopener" style="color:#1C3A2A;">griefcounselor.org &mdash; Helpful Websites</a>,
      <a href="https://www.chop.edu/health-resources/grief-related-websites" target="_blank" rel="noopener" style="color:#1C3A2A;">chop.edu &mdash; Grief-Related Websites</a>,
      <a href="https://www.samhsa.gov/communities/coping-bereavement-grief" target="_blank" rel="noopener" style="color:#1C3A2A;">SAMHSA &mdash; Coping With Bereavement and Grief</a>
    </div>
  </div>

  <!-- SECTION 5: CONNECTION TO RESTORATIVE TRAVEL & COMMUNITY -->
  <div class="iwj-b7-section">
    <div class="iwj-b7-section-title">Connection to Restorative Travel &amp; Community</div>
    <div class="iwj-b7-heading" style="font-size:1.1rem;">You Do Not Have to Walk This Empty Room Alone</div>
    <div class="iwj-b7-travel-box">
      <p class="iwj-b7-body" style="margin-bottom:1rem;">
        Through our travel arm Checked Bags and Good Vibes
        (bagsandvibes.com), we provide dedicated support for surviving
        partners and fathers:
      </p>
      <ul class="iwj-b7-travel-list">
        <li><strong>Surviving Partners' Bereavement &amp; Healing Retreats:</strong> Safe, BIPOC-led sanctuaries where fathers and partners who have lost a spouse or child to maternal mortality can grieve, speak the unspeakable, and receive trauma-informed bodywork and counseling among peers who understand.</li>
        <li><strong>Travel Assistance for Specialized Grief Care:</strong> Assisting with travel logistics if you or your surviving child need specialized out-of-state pediatric care or intensive traumatic bereavement programs.</li>
      </ul>
    </div>
  </div>

  <img class="iwj-b7-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/men-circle-of-healing-scaled.png" alt="A community of men in a circle of healing and mutual support">

  <div class="iwj-b7-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider, grief counselor, mental health professional, or legal counsel.
  </div>
</div>

<script>
(function(){
  window.iwjSraPrint = function(){
    var items = document.querySelectorAll('.iwj-sra-item');
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
