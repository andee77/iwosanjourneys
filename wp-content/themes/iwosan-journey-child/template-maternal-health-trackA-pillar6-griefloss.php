<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Pillar 6: Maternal Loss, Grief & Healing
 * Description: Maternal Health Track A pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Maternal Loss, Grief & Healing</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK A, PILLAR 6: Maternal Loss, Grief & Healing
     ============================================ -->
<style>
.iwj-p6a-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-p6a-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#C9A052;margin-bottom:.75rem;}
.iwj-p6a-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-p6a-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-p6a-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;object-position:center 64%;}
.iwj-p6a-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-p6a-section{margin-bottom:2.75rem}
.iwj-p6a-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#1C3A2A;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-p6a-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-p6a-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-p6a-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-p6a-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-p6a-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-p6a-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-p6a-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-p6a-table td.says{color:#7A6E65;font-style:italic;}
.iwj-p6a-table td.truth{font-weight:600;color:#1C3A2A}
.iwj-p6a-script-card{background:#FAF8F4;border-left:3px solid #4DAEAF;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-p6a-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-p6a-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;}
.iwj-p6a-question-card{background:#fff;border:1px solid #E5E0D5;border-left:3px solid #C9A052;border-radius:0 6px 6px 0;padding:1.1rem 1.4rem;margin-bottom:1rem;}
.iwj-p6a-question-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p6a-question-say{font-size:.9rem;line-height:1.65;font-style:italic;color:#3D3228;}
.iwj-p6a-boundary-card{background:#F1EFE8;border-radius:8px;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-p6a-boundary-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.9rem;color:#0A1F44;margin-bottom:.6rem;}
.iwj-p6a-boundary-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;}
.iwj-p6a-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p6a-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-p6a-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(28,58,42,.1);padding-top:.75rem;}
.iwj-p6a-travel-box{background:#F1EFE8;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-p6a-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-p6a-travel-list li{margin-bottom:.6rem}
.iwj-p6a-travel-list li:last-child{margin-bottom:0}
.iwj-p6a-travel-list strong{color:#0A1F44}
.iwj-p6a-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F1EFE8;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}
.iwj-p6a-support-note{margin-top:1.25rem;padding:1.25rem 1.5rem;background:#EEF3EE;border-left:3px solid #1C3A2A;border-radius:4px;font-size:.85rem;font-weight:300;color:#1C3A2A;line-height:1.65;}

/* ---------- Grief Bandwidth & Boundary Builder ---------- */
.iwj-gb{--iwj-primary:#0A1F44;--iwj-accent:#4DAEAF;--iwj-accent-hover:#3a8f90;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:850px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-gb *{box-sizing:border-box}
.iwj-gb-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-gb-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-gb-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-gb-content{padding:1.5rem}
.iwj-gb-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-gb-grid{grid-template-columns:1fr}}
.iwj-gb-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-gb-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-gb-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-gb-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-gb-custom{margin-top:1.25rem;padding:1rem;background:#F1EFE8;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-gb-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-gb-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;}
.iwj-gb-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-gb-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-gb-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-gb{border:none;box-shadow:none;max-width:100%}
  .iwj-gb-btn-wrap,.iwj-gb-custom,.iwj-gb-header p{display:none}
  .iwj-gb-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-gb-item:not(.is-checked){display:none}
  .iwj-gb-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-gb-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-p6a-page">
  <div class="iwj-p6a-eyebrow">Maternal Health &mdash; Track A &mdash; Pillar 6</div>
  <p class="iwj-p6a-subtitle">
    Honoring Your Grief, Protecting Your Peace, and Navigating Healing on Your Own Timeline
  </p>

  <img class="iwj-p6a-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/6-baby-loss-white-family-scaled.png" alt="A quiet, gentle image representing space for grief and healing">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-p6a-section">
    <div class="iwj-p6a-section-title">The Reality Check</div>
    <div class="iwj-p6a-heading">Grief Does Not Follow a Standard Medical Timeline.</div>
    <p class="iwj-p6a-body">
      Whether a loss happens at 6 weeks, 20 weeks, at birth, or through the quiet
      heartbreak of fertility struggles, your grief is valid, your love is real, and
      your body still requires care.
    </p>
    <p class="iwj-p6a-body">
      Too often, society and medical systems treat early pregnancy loss as a minor
      clinical event or expect parents to &ldquo;move on&rdquo; quickly after stillbirth
      or infant loss. Worse, partners are frequently forgotten entirely in the grieving
      process.
    </p>
    <p class="iwj-p6a-body">
      Under Iwosan Journeys, our stance is unwavering: You owe no one a smile, an
      explanation, or a hurried recovery. True self-advocacy during loss means giving
      yourself permission to grieve unapologetically, setting strict boundaries with the
      world around you, and demanding follow-up care that honors both your physical
      healing and your emotional survival.
    </p>
  </div>

  <!-- SECTION 2: FOUR TRUTHS -->
  <div class="iwj-p6a-section">
    <div class="iwj-p6a-section-title">The Four Truths of Maternal &amp; Parental Grief</div>
    <p class="iwj-p6a-body">
      When you are navigating loss, well-meaning friends, family, and medical staff
      often say hurtful things in an attempt to &ldquo;comfort&rdquo; you. Ground
      yourself in these four non-medical truths:
    </p>
    <div class="iwj-p6a-table-wrap">
      <table class="iwj-p6a-table">
        <thead><tr><th>What Society / People Often Say</th><th>The Iwosan Journeys Truth</th></tr></thead>
        <tbody>
          <tr>
            <td class="says">&ldquo;At least it happened early.&rdquo;</td>
            <td class="truth">Love is not measured by weeks. The bond with a future child begins the moment you envision them. An early loss is still a complete loss of a future you planned.</td>
          </tr>
          <tr>
            <td class="says">&ldquo;You can always try again.&rdquo;</td>
            <td class="truth">A future pregnancy does not replace the loss of this one. You are allowed to mourn the specific baby and pregnancy you lost without being rushed toward &ldquo;next time.&rdquo;</td>
          </tr>
          <tr>
            <td class="says">&ldquo;You need to stay strong and get back to routine.&rdquo;</td>
            <td class="truth">Numbness is not strength. Forcing yourself to suppress grief to make others comfortable only delays your healing.</td>
          </tr>
          <tr>
            <td class="says">(To the Partner) &ldquo;How is she doing?&rdquo;</td>
            <td class="truth">Partners grieve too. While the birthing parent bears the physical recovery, partners experience a profound emotional loss that deserves equal support and validation.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- IMAGE BREAK REMOVED per 2-image standing rule -->
  <!-- SECTION 3: WHAT TO TELL & ASK YOUR DOCTOR -->
  <div class="iwj-p6a-section">
    <div class="iwj-p6a-section-title">What to Tell &amp; Ask Your Doctor <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(The Post-Loss Clinical Follow-Up)</span></div>
    <p class="iwj-p6a-body">
      Medical follow-up after loss is often rushed. When you attend your physical
      recovery or bereavement checkup, use these scripts to ensure your physical
      healing and future questions are addressed with care:
    </p>

    <div class="iwj-p6a-script-card">
      <div class="iwj-p6a-script-label">1. What to Tell the Doctor <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Setting the Room Tone)</span></div>
      <div class="iwj-p6a-script-say">&ldquo;Doctor, I am here today for my physical follow-up after my pregnancy loss. I am grieving, and I need our conversation today to proceed gently. My primary goal today is to confirm that my body is healing safely and to understand what clinical evaluations make sense for me when I am ready.&rdquo;</div>
    </div>

    <div class="iwj-p6a-heading" style="font-size:1.05rem;margin-top:1.75rem;">2. What to Ask the Doctor <span style="color:#7A6E65;font-weight:300;font-style:italic;font-size:.85rem;">(The 3 Essential Questions)</span></div>

    <div class="iwj-p6a-question-card">
      <div class="iwj-p6a-question-label">The Physical Recovery Question</div>
      <div class="iwj-p6a-question-say">&ldquo;Can we verify &mdash; through blood work (like hCG levels) or ultrasound &mdash; that my uterus has healed completely and that my physical baseline is safe?&rdquo;</div>
    </div>
    <div class="iwj-p6a-question-card">
      <div class="iwj-p6a-question-label">The Diagnostic Understanding Question</div>
      <div class="iwj-p6a-question-say">&ldquo;Based on my medical history and the circumstances of this loss, are there chromosomal, hormonal, or uterine screenings you recommend we explore when I feel ready, or was this a random occurrence?&rdquo;</div>
    </div>
    <div class="iwj-p6a-question-card">
      <div class="iwj-p6a-question-label">The Bereavement Referral Question</div>
      <div class="iwj-p6a-question-say">&ldquo;Can you connect me (and my partner) with a specialized perinatal bereavement counselor or a local/virtual grief support group that specializes in pregnancy and infant loss?&rdquo;</div>
    </div>
  </div>

  <!-- SECTION 4: BOUNDARY SCRIPTS -->
  <div class="iwj-p6a-section">
    <div class="iwj-p6a-section-title">Boundary Scripts <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(What to Say to Family, Friends &amp; Work)</span></div>
    <p class="iwj-p6a-body">
      You do not have to manage other people's discomfort around your grief. Use these
      copy-and-paste scripts to protect your mental bandwidth:
    </p>

    <div class="iwj-p6a-boundary-card">
      <div class="iwj-p6a-boundary-label">1. To Well-Meaning Friends &amp; Family <span style="color:#7A6E65;font-weight:400;font-style:italic;font-size:.85rem;">(Text/Email Template)</span></div>
      <div class="iwj-p6a-boundary-say">&ldquo;Thank you so much for reaching out and caring about us. We are currently grieving our pregnancy loss and taking time to heal privately. We aren't ready for phone calls or visits right now, but we feel your love and will reach out when we are ready to connect.&rdquo;</div>
    </div>
    <div class="iwj-p6a-boundary-card">
      <div class="iwj-p6a-boundary-label">2. When Someone Says Something Unhelpful or Insensitive</div>
      <div class="iwj-p6a-boundary-say">&ldquo;I know you mean well, but saying [&lsquo;everything happens for a reason&rsquo; / &lsquo;at least you can try again&rsquo;] is painful for me to hear right now. What I need most today is simply space to grieve without trying to fix it.&rdquo;</div>
    </div>
    <div class="iwj-p6a-boundary-card">
      <div class="iwj-p6a-boundary-label">3. To Your Employer / HR <span style="color:#7A6E65;font-weight:400;font-style:italic;font-size:.85rem;">(Requesting Bereavement / Leave)</span></div>
      <div class="iwj-p6a-boundary-say">&ldquo;I am writing to formally request leave/adjustments to my schedule due to a medical loss and family bereavement. I will be taking [Number] days to recover physically and emotionally, and I plan to return on [Date]. Please let me know what documentation is required.&rdquo;</div>
    </div>
  </div>

  <!-- IMAGE BREAK 3 -->
  <img class="iwj-p6a-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/6-Bible-and-flower-sad-scaled.jpg" alt="">

  <!-- SECTION 5: INTERACTIVE TOOL -->
  <div class="iwj-p6a-section">
    <div class="iwj-p6a-section-title">Interactive Tool</div>
    <div class="iwj-p6a-tool-heading">The Grief Bandwidth &amp; Boundary Builder</div>
    <div class="iwj-p6a-tool-subhead">
      Decide what support you actually need this week and what boundaries you need to
      set. Print your Boundary Plan to share with your partner, a trusted support
      person, or keep for yourself.
    </div>

    <div class="iwj-gb">
      <div class="iwj-gb-header">
        <h3>My Grief Bandwidth &amp; Boundary Plan</h3>
        <p>Select the boundaries and support measures that protect your peace right now. Print or save this sheet to share with your partner or support person.</p>
      </div>
      <div class="iwj-gb-content">
        <div class="iwj-gb-grid">
          <div class="iwj-gb-card">
            <div class="iwj-gb-card-title">1. Social &amp; Family Boundaries</div>
            <label class="iwj-gb-item"><input type="checkbox" checked> I am not taking phone calls right now; text messages are preferred.</label>
            <label class="iwj-gb-item"><input type="checkbox" checked> I am pausing attendance at baby showers, kids' birthdays, or triggering social events.</label>
            <label class="iwj-gb-item"><input type="checkbox"> I request that my partner/support person handle all family updates on my behalf.</label>
          </div>
          <div class="iwj-gb-card">
            <div class="iwj-gb-card-title">2. Practical Household Help Needed</div>
            <label class="iwj-gb-item"><input type="checkbox"> I welcome meal deliveries or gift cards so we do not have to cook.</label>
            <label class="iwj-gb-item"><input type="checkbox"> I need help with basic household chores, laundry, or walking pets.</label>
            <label class="iwj-gb-item"><input type="checkbox"> I need help childcare for older siblings so I can rest and attend appointments.</label>
          </div>
          <div class="iwj-gb-card">
            <div class="iwj-gb-card-title">3. Clinical &amp; Emotional Support</div>
            <label class="iwj-gb-item"><input type="checkbox" checked> I plan to connect with a perinatal bereavement counselor or grief therapist.</label>
            <label class="iwj-gb-item"><input type="checkbox"> I want my partner/support person present at all medical follow-up visits.</label>
            <label class="iwj-gb-item"><input type="checkbox"> I request a physical follow-up to confirm my recovery without being rushed.</label>
          </div>
          <div class="iwj-gb-card">
            <div class="iwj-gb-card-title">4. Partner Mutual Care</div>
            <label class="iwj-gb-item"><input type="checkbox" checked> We will set aside 15 minutes each evening to check in on each other's grief without trying to fix it.</label>
            <label class="iwj-gb-item"><input type="checkbox"> We give each other permission to grieve differently and on different days.</label>
          </div>
        </div>

        <div class="iwj-gb-custom">
          <h4>My Personal Rule for Protecting My Peace This Week</h4>
          <input type="text" placeholder="e.g., 'I give myself permission to cancel plans without apologizing or feeling guilty.'">
        </div>

        <div class="iwj-gb-btn-wrap">
          <button class="iwj-gb-btn" onclick="iwjGbPrint()">Print / Save My Boundary Plan</button>
        </div>
      </div>
    </div>

    <p class="iwj-p6a-tool-disclaimer">
      This tool is a self-reflective organizing aid, not a substitute for grief counseling or medical care. Grieving looks different for everyone, and there is no wrong way or wrong timeline to do it.
    </p>

    <div class="iwj-p6a-support-note">
      If your grief feels unmanageable, or you're having thoughts of harming yourself, please reach out to a mental health professional or a crisis line right away &mdash; you don't have to carry this alone.
    </div>
  </div>

  <!-- SECTION 6: CONNECTION TO RESTORATIVE TRAVEL -->
  <div class="iwj-p6a-section">
    <div class="iwj-p6a-section-title">Connection to Restorative Travel</div>
    <div class="iwj-p6a-heading" style="font-size:1.1rem;">Sanctuaries for Grief &amp; Reconnection</div>
    <div class="iwj-p6a-travel-box">
      <p class="iwj-p6a-body" style="margin-bottom:1rem;">
        Healing after loss requires a safe space to breathe, cry, and reconnect away
        from daily triggers. Through our travel partner Checked Bags and Good Vibes
        (bagsandvibes.com), we assist families with:
      </p>
      <ul class="iwj-p6a-travel-list">
        <li><strong>Restorative Bereavement Travel:</strong> Helping couples find quiet, low-stimulus sanctuaries where they can mourn and hold each other without the pressure of normal daily routines.</li>
        <li><strong>Culturally Congruent Healing Retreats:</strong> Connecting grieving parents with specialized grief retreats led by trauma-informed perinatal counselors.</li>
      </ul>
    </div>
  </div>

  <div class="iwj-p6a-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider, grief counselor, or mental health professional.
  </div>
</div>

<script>
(function(){
  window.iwjGbPrint = function(){
    var items = document.querySelectorAll('.iwj-gb-item');
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
