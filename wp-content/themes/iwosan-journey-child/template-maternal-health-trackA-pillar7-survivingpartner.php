<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Pillar 7: The Surviving Partner's Sanctuary
 * Description: Maternal Health Track A pillar subpage for Iwosan Journey's
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
     TRACK A, PILLAR 7: The Surviving Partner's Sanctuary
     ============================================ -->
<style>
.iwj-p7a-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-p7a-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#C9A052;margin-bottom:.75rem;}
.iwj-p7a-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-p7a-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-p7a-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-p7a-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-p7a-section{margin-bottom:2.75rem}
.iwj-p7a-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#1C3A2A;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-p7a-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-p7a-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-p7a-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-p7a-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-p7a-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-p7a-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-p7a-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-p7a-table td.says{color:#7A6E65;font-style:italic;}
.iwj-p7a-table td.truth{font-weight:600;color:#1C3A2A}
.iwj-p7a-script-card{background:#FAF8F4;border-left:3px solid #4DAEAF;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-p7a-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-p7a-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;}
.iwj-p7a-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p7a-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-p7a-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(28,58,42,.1);padding-top:.75rem;}
.iwj-p7a-travel-box{background:#F1EFE8;border-radius:8px;padding:1.5rem 1.75rem;}
.iwj-p7a-travel-list{margin:0;padding-left:1.2rem;font-size:.9rem;line-height:1.65;font-weight:300;}
.iwj-p7a-travel-list li{margin-bottom:.6rem}
.iwj-p7a-travel-list li:last-child{margin-bottom:0}
.iwj-p7a-travel-list strong{color:#0A1F44}
.iwj-p7a-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F1EFE8;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}
.iwj-p7a-support-note{margin-top:1.25rem;padding:1.25rem 1.5rem;background:#EEF3EE;border-left:3px solid #1C3A2A;border-radius:4px;font-size:.85rem;font-weight:300;color:#1C3A2A;line-height:1.65;}

/* ---------- Surviving Partner's Resilience & Sanctuary Plan ---------- */
.iwj-sp{--iwj-primary:#0A1F44;--iwj-accent:#4DAEAF;--iwj-accent-hover:#3a8f90;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-sp *{box-sizing:border-box}
.iwj-sp-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-sp-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-sp-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-sp-content{padding:1.5rem}
.iwj-sp-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem}
@media(max-width:760px){.iwj-sp-grid{grid-template-columns:1fr}}
.iwj-sp-card{border:1px solid var(--iwj-border);border-radius:8px;padding:1.1rem;background:var(--iwj-card-bg)}
.iwj-sp-card-title{font-family:'Montserrat',sans-serif;font-size:.85rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.75rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-sp-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.86rem;cursor:pointer;line-height:1.45}
.iwj-sp-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-sp-custom{margin-top:1.25rem;padding:1rem;background:#F1EFE8;border:1px dashed var(--iwj-accent);border-radius:8px}
.iwj-sp-custom h4{font-family:'Montserrat',sans-serif;font-size:.82rem;color:var(--iwj-primary);margin-bottom:.5rem;text-transform:uppercase}
.iwj-sp-custom input{width:100%;padding:.6rem .7rem;border:1px solid var(--iwj-border);border-radius:6px;font-size:.88rem;font-family:'Lato',sans-serif;margin-top:.3rem;}
.iwj-sp-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-sp-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-sp-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-sp{border:none;box-shadow:none;max-width:100%}
  .iwj-sp-btn-wrap,.iwj-sp-custom,.iwj-sp-header p{display:none}
  .iwj-sp-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-sp-item:not(.is-checked){display:none}
  .iwj-sp-card{border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
  .iwj-sp-grid{grid-template-columns:1fr;gap:.6rem}
}
</style>

<div class="iwj-p7a-page">
  <div class="iwj-p7a-eyebrow">Maternal Health &mdash; Track A &mdash; Pillar 7</div>
  <p class="iwj-p7a-subtitle">
    Navigating Life After Maternal or Infant Loss, Dismantling Survivor Guilt, and Protecting Your Surviving Family
  </p>

  <img class="iwj-p7a-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/7-partner-loss-2-scaled.png" alt="A quiet, gentle image representing space to grieve and heal">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-p7a-section">
    <div class="iwj-p7a-section-title">The Reality Check</div>
    <div class="iwj-p7a-heading">You Are Allowed to Grieve Without Performing &ldquo;Strength&rdquo; for the World.</div>
    <p class="iwj-p7a-body">
      When the person you built a life with &mdash; or the child you were waiting to
      bring home &mdash; is suddenly gone, society often strips away your right to fall
      apart.
    </p>
    <p class="iwj-p7a-body">
      You are told to &ldquo;hold it together,&rdquo; to &ldquo;be the anchor,&rdquo; or
      to focus entirely on logistics. If you were standing in the hospital room as the
      birth partner, you might also be carrying unbearable internal guilt, asking
      yourself over and over if you missed a sign or could have changed the outcome.
    </p>
    <p class="iwj-p7a-body">
      Under Iwosan Journeys, our stance is unwavering: You are not just a logistics
      manager or a leftover parent &mdash; you are a grieving survivor. You do not owe
      anyone stoicism. This sanctuary provides you with structured boundaries to
      insulate your peace, scripts to get clear medical answers, and a roadmap to care
      for your own physical survival while you mourn.
    </p>
  </div>

  <!-- SECTION 2: FOUR TRUTHS -->
  <div class="iwj-p7a-section">
    <div class="iwj-p7a-section-title">Four Truths for Surviving Partners</div>
    <p class="iwj-p7a-body">
      When you are navigating acute traumatic loss, well-meaning people say things that
      can feel deeply isolating. Ground yourself in these four realities:
    </p>
    <div class="iwj-p7a-table-wrap">
      <table class="iwj-p7a-table">
        <thead><tr><th>What People Often Say or Expect</th><th>The Iwosan Journeys Reality</th></tr></thead>
        <tbody>
          <tr>
            <td class="says">&ldquo;You have to be strong for the baby / your family now.&rdquo;</td>
            <td class="truth">Suppressing your grief is not strength. Numbness and stoicism only delay acute trauma. Your surviving child or family needs a parent who is supported and honest, not a silent pressure cooker.</td>
          </tr>
          <tr>
            <td class="says">&ldquo;Don't second-guess what happened; the doctors did everything they could.&rdquo;</td>
            <td class="truth">You are not to blame for medical outcomes. You were a partner and a parent, not the licensed medical team. Carrying the guilt of what happened in a clinical room is a heavy, misplaced burden.</td>
          </tr>
          <tr>
            <td class="says">&ldquo;Let me know if you need anything at all.&rdquo;</td>
            <td class="truth">Open-ended offers are exhausting. When you are in shock, you do not have the bandwidth to manage other people's schedules. Give specific tasks to specific people, or say no.</td>
          </tr>
          <tr>
            <td class="says">&ldquo;Time heals all wounds.&rdquo;</td>
            <td class="truth">Loss of this magnitude isn't &ldquo;healed&rdquo; &mdash; it is integrated. You will learn to carry this love and grief forward on your own timeline; do not let anyone rush your grief to make themselves comfortable.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- IMAGE BREAK REMOVED per 2-image standing rule -->
  <!-- SECTION 3: WHAT TO TELL & ASK -->
  <div class="iwj-p7a-section">
    <div class="iwj-p7a-section-title">What to Tell &amp; Ask <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Medical &amp; Practical Advocacy)</span></div>
    <p class="iwj-p7a-body">
      Even in grief, you have the right to clear medical understanding and personal
      health support. Use these scripts to navigate conversations with hospitals and
      your own doctors:
    </p>

    <div class="iwj-p7a-script-card">
      <div class="iwj-p7a-script-label">1. What to Ask the Hospital / Medical Team <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Demanding Clear Answers)</span></div>
      <div class="iwj-p7a-script-say">&ldquo;As the surviving partner, I am requesting a formal, sit-down clinical review with the attending physician or medical director to walk through the timeline of events. I want to understand what specific physiological or reproductive factors caused this loss, and I am requesting a complete copy of the medical chart for our family records.&rdquo;</div>
    </div>

    <div class="iwj-p7a-script-card">
      <div class="iwj-p7a-script-label">2. What to Tell Your Own Doctor <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Protecting Your Physical Baseline)</span></div>
      <div class="iwj-p7a-script-say">&ldquo;Doctor, I recently suffered the loss of my partner/child. I am operating in acute traumatic bereavement and severe stress. I am experiencing [insomnia / chest tightness / inability to eat / panic]. I need us to check my cardiovascular and blood pressure baseline today, and I want an immediate referral to a bereavement therapist who specializes in maternal/infant loss.&rdquo;</div>
    </div>

    <div class="iwj-p7a-script-card">
      <div class="iwj-p7a-script-label">3. What to Say to Well-Meaning Friends &amp; Family <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Protecting Your Peace)</span></div>
      <div class="iwj-p7a-script-say">&ldquo;We love you and appreciate how much you care, but right now I am operating on very limited bandwidth. I am not taking phone calls or hosting visitors. My designated support person, [Name], is handling all family updates and practical help so I can focus on grieving and survival.&rdquo;</div>
    </div>
  </div>

  <!-- IMAGE BREAK 3 -->
  <img class="iwj-p7a-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/7-small-casket-pink-flower-scaled.jpg" alt="">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-p7a-section">
    <div class="iwj-p7a-section-title">Interactive Tool</div>
    <div class="iwj-p7a-tool-heading">The Surviving Partner's Resilience &amp; Sanctuary Plan</div>
    <div class="iwj-p7a-tool-subhead">
      When you are surviving acute shock, making daily decisions is exhausting. Check
      off the boundaries, practical help, and clinical steps you need this week, then
      print your Sanctuary Plan to hand to your trusted advocate or support person.
    </div>

    <div class="iwj-sp">
      <div class="iwj-sp-header">
        <h3>The Surviving Partner's Sanctuary Plan</h3>
        <p>Select the boundaries, practical tasks, and support steps you need right now. Print or save this sheet and give it to your designated support person so they can protect your peace.</p>
      </div>
      <div class="iwj-sp-content">
        <div class="iwj-sp-grid">
          <div class="iwj-sp-card">
            <div class="iwj-sp-card-title">1. Protective Social &amp; Family Boundaries</div>
            <label class="iwj-sp-item"><input type="checkbox" checked> I am not answering phone calls or hosting visitors without prior agreement; text messages only.</label>
            <label class="iwj-sp-item"><input type="checkbox" checked> I decline to hear platitudes like &ldquo;you have to stay strong&rdquo; or &ldquo;everything happens for a reason.&rdquo;</label>
            <label class="iwj-sp-item"><input type="checkbox"> I am designating my trusted support person to handle all family communication on my behalf.</label>
          </div>
          <div class="iwj-sp-card">
            <div class="iwj-sp-card-title">2. Practical Household Help Needed</div>
            <label class="iwj-sp-item"><input type="checkbox" checked> I need a coordinated meal train or grocery deliveries so I do not have to think about food.</label>
            <label class="iwj-sp-item"><input type="checkbox"> I need help with basic household chores, laundry, yard work, or pet care.</label>
            <label class="iwj-sp-item"><input type="checkbox"> If raising a surviving child: I need practical help with feeding logistics, formula, and pediatric visits.</label>
          </div>
          <div class="iwj-sp-card">
            <div class="iwj-sp-card-title">3. Clinical &amp; Administrative Advocacy</div>
            <label class="iwj-sp-item"><input type="checkbox" checked> I am requesting a sit-down clinical conference with the medical team to understand what happened.</label>
            <label class="iwj-sp-item"><input type="checkbox"> I am requesting a complete, printed copy of the hospital chart and medical records for our family.</label>
            <label class="iwj-sp-item"><input type="checkbox"> I want my designated support person present at all meetings with hospital staff or insurers.</label>
          </div>
          <div class="iwj-sp-card">
            <div class="iwj-sp-card-title">4. My Own Physical &amp; Trauma Survival</div>
            <label class="iwj-sp-item"><input type="checkbox" checked> I will schedule a physical checkup with my own physician to monitor my blood pressure and stress baseline.</label>
            <label class="iwj-sp-item"><input type="checkbox" checked> I request a referral to a perinatal bereavement therapist or a surviving partners' grief support group.</label>
          </div>
        </div>

        <div class="iwj-sp-custom">
          <h4>My Designated Point-Person / Shield</h4>
          <input type="text" placeholder="Name and Phone Number (e.g., 'My brother David will coordinate all help and handle calls.')">
        </div>

        <div class="iwj-sp-btn-wrap">
          <button class="iwj-sp-btn" onclick="iwjSpPrint()">Print / Save My Sanctuary Plan</button>
        </div>
      </div>
    </div>

    <p class="iwj-p7a-tool-disclaimer">
      This tool is a self-reflective organizing aid, not a substitute for grief counseling, trauma therapy, or medical care. There is no right timeline for this kind of loss.
    </p>

    <div class="iwj-p7a-support-note">
      Acute grief can bring overwhelming thoughts, including thoughts of not wanting to go on. If you are having thoughts of harming yourself, please reach out to a mental health professional or a crisis line right away. You do not have to carry this alone, and reaching out is not a sign of weakness.
    </div>
  </div>

  <!-- SECTION 5: CONNECTION TO RESTORATIVE SANCTUARY -->
  <div class="iwj-p7a-section">
    <div class="iwj-p7a-section-title">Connection to Restorative Sanctuary</div>
    <div class="iwj-p7a-heading" style="font-size:1.1rem;">You Do Not Have to Walk This Empty Room Alone</div>
    <div class="iwj-p7a-travel-box">
      <p class="iwj-p7a-body" style="margin-bottom:1rem;">
        Through our travel arm Checked Bags and Good Vibes (bagsandvibes.com), we
        provide dedicated support for surviving partners and parents:
      </p>
      <ul class="iwj-p7a-travel-list">
        <li><strong>Surviving Partners' Bereavement Retreats:</strong> Restorative, trauma-informed sanctuaries where partners who have experienced maternal or infant loss can step away from daily triggers, receive gentle counseling, and connect with peers who understand the unimaginable.</li>
        <li><strong>Travel Coordination for Specialized Care:</strong> Handling the travel and accommodation logistics if you or a surviving infant require specialized out-of-state pediatric care or intensive traumatic grief support.</li>
      </ul>
    </div>
  </div>

  <div class="iwj-p7a-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider, grief counselor, or mental health professional.
  </div>
</div>

<script>
(function(){
  window.iwjSpPrint = function(){
    var items = document.querySelectorAll('.iwj-sp-item');
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
