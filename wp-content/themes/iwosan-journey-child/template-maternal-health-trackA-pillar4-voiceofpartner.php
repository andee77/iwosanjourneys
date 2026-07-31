<?php
/**
 * Template Name: Iwosan Maternal Health — Track A Pillar 4: The Voice of the Partner
 * Description: Maternal Health Track A pillar subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The Voice of the Partner</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — MATERNAL HEALTH
     TRACK A, PILLAR 4: The Voice of the Partner
     ============================================ -->
<style>
.iwj-p4a-page{font-family:'Lato',sans-serif;max-width:900px;margin:0 auto;padding:2.5rem 6% 4rem;color:#3D3228;}
.iwj-p4a-eyebrow{font-family:'Montserrat',sans-serif;font-weight:600;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#C9A052;margin-bottom:.75rem;}
.iwj-p4a-subtitle{font-size:1rem;line-height:1.6;font-weight:300;font-style:italic;color:#5F5E5A;max-width:640px;margin-bottom:2rem;}
.iwj-p4a-hero-img{width:100%;height:420px;border-radius:8px;margin-bottom:2rem;display:block;object-fit:cover;}
.iwj-p4a-break-img{width:100%;height:280px;border-radius:8px;margin:2.5rem 0;display:block;object-fit:cover;}
.iwj-p4a-lede{font-size:1rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:2.5rem;}
.iwj-p4a-section{margin-bottom:2.75rem}
.iwj-p4a-section-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:#1C3A2A;margin-bottom:1rem;padding-bottom:.6rem;border-bottom:2px solid #C9A052;display:inline-block;}
.iwj-p4a-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.25rem;color:#0A1F44;line-height:1.3;margin-bottom:1rem;}
.iwj-p4a-body{font-size:.95rem;line-height:1.75;font-weight:300;max-width:680px;margin-bottom:1rem;}
.iwj-p4a-body-list{margin:1rem 0 1.25rem 0;padding-left:1.2rem;font-size:.95rem;line-height:1.75;font-weight:300;}
.iwj-p4a-body-list li{margin-bottom:.5rem}
.iwj-p4a-body-list strong{color:#0A1F44;font-weight:700}
.iwj-p4a-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-p4a-table{width:100%;border-collapse:collapse;font-size:.86rem;min-width:640px;}
.iwj-p4a-table th{background:#0A1F44;color:#FAF8F4;font-family:'Montserrat',sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.03em;text-align:left;padding:.7rem .9rem;}
.iwj-p4a-table td{padding:.85rem .9rem;border-bottom:1px solid #E5E0D5;vertical-align:top;line-height:1.55;}
.iwj-p4a-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-p4a-table td.guilt{color:#7A2E24;font-style:italic;}
.iwj-p4a-table td.reality{font-weight:600;color:#1C3A2A}
.iwj-p4a-script-card{background:#FAF8F4;border-left:3px solid #4DAEAF;border-radius:0 6px 6px 0;padding:1.25rem 1.5rem;margin-bottom:1.25rem;}
.iwj-p4a-script-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:.85rem;color:#0A1F44;margin-bottom:.5rem;}
.iwj-p4a-script-say{font-size:.92rem;line-height:1.7;font-style:italic;color:#3D3228;}
.iwj-p4a-question-list{margin:1rem 0 0 0;padding-left:1.2rem;font-size:.92rem;line-height:1.75;font-weight:300;}
.iwj-p4a-question-list li{margin-bottom:.75rem}
.iwj-p4a-tool-heading{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.3rem;color:#0A1F44;margin-bottom:.4rem;}
.iwj-p4a-tool-subhead{font-size:.88rem;font-weight:300;font-style:italic;color:#7A6E65;margin-bottom:1.25rem;}
.iwj-p4a-tool-disclaimer{margin-top:1rem;font-size:.75rem;font-weight:300;font-style:italic;color:#8A8178;line-height:1.5;border-top:1px solid rgba(28,58,42,.1);padding-top:.75rem;}
.iwj-p4a-page-disclaimer{margin-top:3rem;padding:1.25rem 1.5rem;background:#F1EFE8;border-left:3px solid #8B5E3C;border-radius:4px;font-size:.82rem;font-weight:300;font-style:italic;color:#5F5E5A;line-height:1.65;}

/* ---------- Partner's Bandwidth & Check-In Audit ---------- */
.iwj-pb{--iwj-primary:#0A1F44;--iwj-accent:#4DAEAF;--iwj-accent-hover:#3a8f90;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;max-width:850px;margin:0 auto;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden;}
.iwj-pb *{box-sizing:border-box}
.iwj-pb-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-pb-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-pb-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-pb-content{padding:1.5rem}
.iwj-pb-section-title{font-family:'Montserrat',sans-serif;font-size:.9rem;font-weight:700;color:var(--iwj-primary);margin:1rem 0 .6rem;border-bottom:2px solid var(--iwj-border);padding-bottom:.4rem;text-transform:uppercase;}
.iwj-pb-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.88rem;cursor:pointer;line-height:1.5;}
.iwj-pb-item input{margin-right:.7rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0;}
.iwj-pb-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-pb-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.75rem 1.5rem;font-family:'Montserrat',sans-serif;font-size:.9rem;font-weight:700;border-radius:6px;cursor:pointer;}
.iwj-pb-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-pb{border:none;box-shadow:none;max-width:100%}
  .iwj-pb-btn-wrap,.iwj-pb-header p{display:none}
  .iwj-pb-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-pb-item:not(.is-checked){display:none}
}
</style>

<div class="iwj-p4a-page">
  <div class="iwj-p4a-eyebrow">Maternal Health &mdash; Track A &mdash; Pillar 4</div>
  <p class="iwj-p4a-subtitle">
    Your Fears, Your Bandwidth, Your Transition: You Matter in This Equation Too
  </p>

  <img class="iwj-p4a-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/4-overwhelmed-parents-scaled.png" alt="A partner reflecting during the transition to parenthood">

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-p4a-section">
    <div class="iwj-p4a-section-title">The Reality Check</div>
    <div class="iwj-p4a-heading">You Are Allowed to Feel Overwhelmed Without Feeling Guilty.</div>
    <p class="iwj-p4a-body">
      When a baby arrives, 100% of the attention goes to the baby and the birthing
      parent. That is medically necessary &mdash; but it often leaves partners
      (husbands, boyfriends, wives, and same-sex partners) feeling like their own
      mental health, exhaustion, and anxiety don't matter.
    </p>
    <p class="iwj-p4a-body">Many partners suffer in silence with:</p>
    <ul class="iwj-p4a-body-list">
      <li><strong>The &ldquo;Provider Panic&rdquo;:</strong> Terrified of the new financial and emotional weight on their shoulders.</li>
      <li><strong>The &ldquo;Helplessness Guilt&rdquo;:</strong> Feeling useless because they can't physically breastfeed or heal her body.</li>
      <li><strong>Partner Postpartum Depression:</strong> Up to 10% of fathers and partners experience postpartum depression or anxiety, but rarely admit it out of shame.</li>
    </ul>
    <p class="iwj-p4a-body">
      Under Iwosan Journeys, we believe that a family cannot thrive if the partner is
      silently breaking. Your voice, your mental health, and your self-advocacy matter.
    </p>
  </div>

  <!-- SECTION 2: BREAKING THE SILENCE -->
  <div class="iwj-p4a-section">
    <div class="iwj-p4a-section-title">Breaking the Silence: Partner Truths</div>
    <p class="iwj-p4a-body">
      Read these common partner thoughts and internalize the healthy reality:
    </p>
    <div class="iwj-p4a-table-wrap">
      <table class="iwj-p4a-table">
        <thead><tr><th>The Guilt Thought</th><th>The Iwosan Journeys Reality</th></tr></thead>
        <tbody>
          <tr>
            <td class="guilt">&ldquo;I shouldn't complain about being tired; she went through birth.&rdquo;</td>
            <td class="reality">Exhaustion is not a competition. Two people can be exhausted at the same time. Acknowledging your fatigue helps you prevent burnout.</td>
          </tr>
          <tr>
            <td class="guilt">&ldquo;I don't know what I'm doing with the baby; I'm just in the way.&rdquo;</td>
            <td class="reality">No one is born knowing how to parent. You learn by doing. Step in, make mistakes, and build your confidence without apologizing.</td>
          </tr>
          <tr>
            <td class="guilt">&ldquo;I feel sad, anxious, and disconnected, but I can't tell anyone.&rdquo;</td>
            <td class="reality">Partner Postpartum Anxiety/Depression is a recognized clinical reality caused by sleep deprivation, stress, and hormone shifts. Speak up early.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- IMAGE BREAK REMOVED per 2-image standing rule -->
  <!-- SECTION 3: WHAT TO TELL & ASK YOUR DOCTOR -->
  <div class="iwj-p4a-section">
    <div class="iwj-p4a-section-title">What to Tell &amp; Ask Your Doctor <span style="font-weight:400;font-style:italic;text-transform:none;letter-spacing:normal;color:#7A6E65;font-size:.8rem;">(Yes, Your Doctor)</span></div>
    <p class="iwj-p4a-body">
      When you go to your own routine physical or checkup during the pregnancy or
      postpartum year, use these scripts to advocate for your own mental and physical
      baseline:
    </p>

    <div class="iwj-p4a-script-card">
      <div class="iwj-p4a-script-label">1. What to Tell Your Doctor</div>
      <div class="iwj-p4a-script-say">&ldquo;Doctor, I am a new parent (or expecting a baby soon). Over the last few months, my sleep has been severely cut, and I am experiencing [high anxiety / short temper / feeling disconnected / exhaustion]. I want to check my mental and physical baseline so I can stay strong for my family.&rdquo;</div>
    </div>

    <div class="iwj-p4a-heading" style="font-size:1rem;margin-top:1.5rem;">2. What to Ask Your Doctor</div>
    <ul class="iwj-p4a-question-list">
      <li>&ldquo;Can we screen for signs of Partner Postpartum Depression or chronic stress burnout?&rdquo;</li>
      <li>&ldquo;Can we run a baseline metabolic and hormone check (like testosterone or thyroid) to see how chronic sleep loss is impacting my body?&rdquo;</li>
      <li>&ldquo;What are the healthiest coping and stress-release strategies you recommend for partners during the first postpartum year?&rdquo;</li>
    </ul>
  </div>

  <!-- IMAGE BREAK 3 -->
  <img class="iwj-p4a-break-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/4-holding-tiny-baby-hand-scaled.jpg" alt="">

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-p4a-section">
    <div class="iwj-p4a-section-title">Interactive Tool for the Partner's Own Voice</div>
    <div class="iwj-p4a-tool-heading">The &ldquo;Partner's Mental Bandwidth &amp; Check-In&rdquo; Audit</div>
    <div class="iwj-p4a-tool-subhead">
      Assess your own stress, sleep, and emotional bandwidth. Print your check-in to take
      to your own doctor or as a conversation starter with your partner.
    </div>

    <div class="iwj-pb">
      <div class="iwj-pb-header">
        <h3>Partner's Bandwidth &amp; Self-Advocacy Check-In</h3>
        <p>Check the statements that describe what you are experiencing. Print this sheet to discuss with your partner or bring to your own physician.</p>
      </div>
      <div class="iwj-pb-content">
        <div class="iwj-pb-section-title">1. My Personal Stress &amp; Emotional Check</div>
        <label class="iwj-pb-item"><input type="checkbox"> I am feeling overwhelmed by the financial, protective, and emotional weight on my shoulders.</label>
        <label class="iwj-pb-item"><input type="checkbox"> I am experiencing a shorter fuse, irritability, or snapping over minor household stress.</label>
        <label class="iwj-pb-item"><input type="checkbox"> I feel disconnected, numb, or guilty about my own exhaustion.</label>

        <div class="iwj-pb-section-title">2. My Self-Advocacy &amp; Health Plan</div>
        <label class="iwj-pb-item"><input type="checkbox"> I will schedule a routine checkup with my doctor to check my stress and physical baseline.</label>
        <label class="iwj-pb-item"><input type="checkbox"> I will take one 30-minute block each week to clear my head (exercise, walk, quiet time) without guilt.</label>
        <label class="iwj-pb-item"><input type="checkbox"> I will communicate honestly with my partner about my exhaustion so we can tackle it as a team.</label>

        <div class="iwj-pb-btn-wrap">
          <button class="iwj-pb-btn" onclick="iwjPbPrint()">Print / Save My Partner Check-In</button>
        </div>
      </div>
    </div>

    <p class="iwj-p4a-tool-disclaimer">
      This tool is an educational self-check, not a diagnostic instrument. If you're experiencing persistent sadness, anxiety, or thoughts that concern you, please reach out to a licensed provider or a mental health professional.
    </p>
  </div>

  <div class="iwj-p4a-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider.
  </div>
</div>

<script>
(function(){
  window.iwjPbPrint = function(){
    var items = document.querySelectorAll('.iwj-pb-item');
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
