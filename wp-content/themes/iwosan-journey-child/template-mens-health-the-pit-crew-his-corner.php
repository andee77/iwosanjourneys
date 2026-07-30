<?php
/**
 * Template Name: Iwosan Men's Health — Partners in His Corner
 * Description: Custom coded Men's Health "Partners in His Corner" partner subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>Partners in His Corner</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — PARTNERS IN HIS CORNER
     (Men's Health > The Pit Crew > His Corner)
     ============================================ -->
<style>
.iwj-hc-page{
  font-family:'Lato',sans-serif;
  max-width:900px;
  margin:0 auto;
  padding:2.5rem 6% 4rem;
  color:#3D3228;
}
.iwj-hc-eyebrow{
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.85rem;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.75rem;
}
.iwj-hc-subtitle{
  font-size:1rem;
  line-height:1.6;
  font-weight:300;
  font-style:italic;
  color:#5F5E5A;
  max-width:640px;
  margin-bottom:2rem;
}
.iwj-hc-hero-img{
  width:100%;
  height:420px;
  border-radius:8px;
  margin-bottom:2rem;
  display:block;
  object-fit:cover;
  object-position:center 25%;
}
.iwj-hc-lede{
  font-size:1rem;
  line-height:1.75;
  font-weight:300;
  max-width:640px;
  margin-bottom:2.5rem;
}
.iwj-hc-section{margin-bottom:2.75rem}
.iwj-hc-section-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.72rem;
  letter-spacing:.14em;
  text-transform:uppercase;
  color:#1C3A2A;
  margin-bottom:1rem;
  padding-bottom:.6rem;
  border-bottom:2px solid #C9A052;
  display:inline-block;
}
.iwj-hc-heading{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.25rem;
  color:#0A1F44;
  line-height:1.3;
  margin-bottom:1rem;
}
.iwj-hc-body{
  font-size:.95rem;
  line-height:1.75;
  font-weight:300;
  max-width:680px;
  margin-bottom:1rem;
}
.iwj-hc-table-wrap{overflow-x:auto;margin-top:1.25rem}
.iwj-hc-table{
  width:100%;
  border-collapse:collapse;
  font-size:.86rem;
  min-width:640px;
}
.iwj-hc-table th{
  background:#0A1F44;
  color:#FAF8F4;
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.75rem;
  text-transform:uppercase;
  letter-spacing:.03em;
  text-align:left;
  padding:.7rem .9rem;
}
.iwj-hc-table td{
  padding:.85rem .9rem;
  border-bottom:1px solid #E5E0D5;
  vertical-align:top;
  line-height:1.55;
}
.iwj-hc-table tr:nth-child(even) td{background:#FAF8F4}
.iwj-hc-table td.notice{color:#7A2E24;font-style:italic}
.iwj-hc-table td.feel{color:#5F5E5A}
.iwj-hc-table td.root{font-weight:600;color:#1C3A2A}
.iwj-hc-script-card{
  background:#FAF8F4;
  border-left:3px solid #4DAEAF;
  border-radius:0 6px 6px 0;
  padding:1.25rem 1.5rem;
  margin-bottom:1.25rem;
}
.iwj-hc-script-num{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.95rem;
  color:#0A1F44;
  margin-bottom:.5rem;
}
.iwj-hc-script-say{
  font-size:.92rem;
  line-height:1.7;
  font-style:italic;
  color:#3D3228;
  margin-bottom:.6rem;
}
.iwj-hc-script-why{
  font-size:.82rem;
  line-height:1.6;
  color:#7A6E65;
}
.iwj-hc-script-why strong{color:#5F5E5A}
.iwj-hc-golden-box{
  background:#0A1F44;
  color:#FAF8F4;
  border-radius:8px;
  padding:1.75rem 2rem;
}
.iwj-hc-golden-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.1rem;
  margin-bottom:1rem;
}
.iwj-hc-golden-list{
  margin:0;
  padding-left:1.2rem;
  font-size:.9rem;
  line-height:1.7;
  font-weight:300;
}
.iwj-hc-golden-list li{margin-bottom:.75rem}
.iwj-hc-golden-list li:last-child{margin-bottom:0}
.iwj-hc-tool-heading{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.3rem;
  color:#0A1F44;
  margin-bottom:.4rem;
}
.iwj-hc-tool-subhead{
  font-size:.88rem;
  font-weight:300;
  font-style:italic;
  color:#7A6E65;
  margin-bottom:1.25rem;
}
.iwj-hc-tool-disclaimer{
  margin-top:1rem;
  font-size:.75rem;
  font-weight:300;
  font-style:italic;
  color:#8A8178;
  line-height:1.5;
  border-top:1px solid rgba(28,58,42,.1);
  padding-top:.75rem;
}
.iwj-hc-page-disclaimer{
  margin-top:3rem;
  padding:1.25rem 1.5rem;
  background:#F1EFE8;
  border-left:3px solid #8B5E3C;
  border-radius:4px;
  font-size:.82rem;
  font-weight:300;
  font-style:italic;
  color:#5F5E5A;
  line-height:1.65;
}

/* ---------- Ally's Appointment Prep Sheet tool ---------- */
.iwj-ally{
  --iwj-primary:#0A1F44;
  --iwj-accent:#4DAEAF;
  --iwj-accent-hover:#3a8f90;
  --iwj-bg:#FAF8F4;
  --iwj-card-bg:#ffffff;
  --iwj-border:#E5E0D5;
  font-family:'Lato',sans-serif;
  max-width:850px;
  margin:0 auto;
  background:var(--iwj-card-bg);
  border-radius:8px;
  box-shadow:0 4px 18px rgba(10,31,68,.06);
  border:1px solid var(--iwj-border);
  overflow:hidden;
}
.iwj-ally *{box-sizing:border-box}
.iwj-ally-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-ally-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-ally-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-ally-content{padding:1.5rem}
.iwj-ally-section-title{
  font-family:'Montserrat',sans-serif;
  font-size:.9rem;
  font-weight:700;
  color:var(--iwj-primary);
  margin:1rem 0 .6rem;
  border-bottom:2px solid var(--iwj-border);
  padding-bottom:.4rem;
}
.iwj-ally-item{
  display:flex;align-items:flex-start;
  margin-bottom:.6rem;font-size:.88rem;cursor:pointer;line-height:1.5;
}
.iwj-ally-item input{
  margin-right:.7rem;margin-top:.2rem;
  accent-color:var(--iwj-accent);
  width:16px;height:16px;flex-shrink:0;
}
.iwj-ally-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-ally-btn{
  background:var(--iwj-accent);color:#fff;border:none;
  padding:.75rem 1.5rem;font-family:'Montserrat',sans-serif;
  font-size:.9rem;font-weight:700;border-radius:6px;cursor:pointer;
}
.iwj-ally-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-ally{border:none;box-shadow:none;max-width:100%}
  .iwj-ally-btn-wrap,.iwj-ally-header p{display:none}
  .iwj-ally-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-ally-item:not(.is-checked){display:none}
}

@media(max-width:640px){
  .iwj-hc-golden-box{padding:1.25rem 1.5rem}
}
</style>

<div class="iwj-hc-page">
  <div class="iwj-hc-eyebrow">The Pit Crew &mdash; Partners in His Corner</div>
  <p class="iwj-hc-subtitle">
    How to Recognize the Warning Signs, Open the Conversation, and Advocate for the Man You Love
  </p>

  <img class="iwj-hc-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/ha-nguy-n-2LR-K_esuW0-unsplash-scaled.jpg" alt="A couple in conversation, representing partner support and advocacy">

  <p class="iwj-hc-lede">
    When a man is dealing with health changes &mdash; whether it is declining testosterone,
    sleep apnea, burnout, or cardiovascular warning signs &mdash; he rarely navigates it
    alone. His partner almost always notices the shifts first. They see the shorter
    temper, the 3:00 AM wake-ups, the afternoon exhaustion, or the withdrawal from
    intimacy before he admits anything is wrong. However, partners often struggle to
    bring it up without triggering defensiveness, shame, or an argument.
  </p>

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-hc-section">
    <div class="iwj-hc-section-title">The Reality Check</div>
    <div class="iwj-hc-heading">You Usually Notice the &ldquo;Check-Engine Light&rdquo; First.</div>
    <p class="iwj-hc-body">
      Men are culturally conditioned to &ldquo;tough it out.&rdquo; When their energy,
      testosterone, sleep, or mood begins to shift, their default reaction is often
      silence, denial, or pulling away.
    </p>
    <p class="iwj-hc-body">
      As a partner, it is easy to misinterpret these physiological changes as emotional
      distance, laziness, or a relationship problem. In reality, his body's engine is
      struggling, and he likely doesn't have the vocabulary to explain it.
    </p>
    <p class="iwj-hc-body">
      Under Iwosan Journeys, our goal is to help you move from frustration to
      partnership &mdash; giving you the tools to help him protect his health without
      triggering shame or defensiveness.
    </p>
  </div>

  <!-- SECTION 2: DECODING THE SHIFTS -->
  <div class="iwj-hc-section">
    <div class="iwj-hc-section-title">Decoding the Shifts</div>
    <p class="iwj-hc-body">
      When you understand that a behavioral change often has a biological root, the
      conversation changes from criticism to care.
    </p>
    <div class="iwj-hc-table-wrap">
      <table class="iwj-hc-table">
        <thead>
          <tr>
            <th>What You Might Notice at Home</th>
            <th>What You Might Feel</th>
            <th>The Potential Biological / Health Root</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>He falls asleep on the couch at 8:00 PM or crashes every weekend.</td>
            <td class="feel">&ldquo;He's disengaged or not helping with the house.&rdquo;</td>
            <td class="root">Low Free Testosterone, Thyroid Imbalance, or Sleep Apnea. Chronic physiological fatigue depletes stamina before the day is over.</td>
          </tr>
          <tr>
            <td>He has a much shorter fuse and snaps over minor inconveniences.</td>
            <td class="feel">&ldquo;He's angry at me or always grumpy.&rdquo;</td>
            <td class="root">Elevated Cortisol / Chronic Silent Burnout. When the nervous system is overloaded, tolerance for friction drops to zero.</td>
          </tr>
          <tr>
            <td>He pulls away from physical intimacy or avoids affection.</td>
            <td class="feel">&ldquo;He isn't attracted to me anymore.&rdquo;</td>
            <td class="root">Hormonal Decline, Cardiovascular Circulation, or Performance Anxiety. Men often withdraw entirely rather than talk about intimate physical shifts.</td>
          </tr>
          <tr>
            <td>He wakes up groggy, snores heavily, or is restless at 3:00 AM.</td>
            <td class="feel">&ldquo;He's just a bad sleeper.&rdquo;</td>
            <td class="root">Obstructive Sleep Apnea or Nocturnal Blood Sugar/Cortisol Spikes. Poor sleep recovery damages his mood and cognitive focus the next day.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- SECTION 3: ZERO-DEFENSIVENESS SCRIPTS -->
  <div class="iwj-hc-section">
    <div class="iwj-hc-section-title">The &ldquo;Zero-Defensiveness&rdquo; Conversation Scripts</div>
    <p class="iwj-hc-body">
      How you bring up his health determines whether he puts up a wall or opens the
      door. Never initiate a health conversation during an argument or when he is
      already exhausted. Try these non-medical, partner-first approaches:
    </p>

    <div class="iwj-hc-script-card">
      <div class="iwj-hc-script-num">1. The &ldquo;We're on the Same Team&rdquo; Approach <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Best for general energy &amp; mood)</span></div>
      <div class="iwj-hc-script-say">&ldquo;I love you, and I want us to have a long, healthy life together. I've noticed over the last few months that your energy crashes hard by the afternoon and your sleep seems restless. You carry a lot for us, and you don't have to just &lsquo;tough out&rsquo; feeling drained. Let's get a baseline screening just to look under the hood.&rdquo;</div>
      <div class="iwj-hc-script-why"><strong>Why It Works:</strong> It frames the checkup as a way to protect your shared future, not a critique of his performance.</div>
    </div>

    <div class="iwj-hc-script-card">
      <div class="iwj-hc-script-num">2. The &ldquo;Blame the Biology&rdquo; Approach <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Best for intimacy &amp; testosterone changes)</span></div>
      <div class="iwj-hc-script-say">&ldquo;I know things have felt a little different physically lately, and I want you to know I'm not judging you or worried about our relationship. Shifts in energy, stamina, and desire are almost always tied to hormones, stress, or circulation. Let's treat it like a routine engine check and have a doctor run a hormone panel so we have real numbers.&rdquo;</div>
      <div class="iwj-hc-script-why"><strong>Why It Works:</strong> It removes the personal shame of &ldquo;impotence&rdquo; or &ldquo;getting old&rdquo; by labeling it as a solvable biological variable.</div>
    </div>

    <div class="iwj-hc-script-card">
      <div class="iwj-hc-script-num">3. The &ldquo;Advocacy Hand-Off&rdquo; Approach <span style="color:#7A6E65;font-weight:400;font-style:italic;">(When he hates making appointments)</span></div>
      <div class="iwj-hc-script-say">&ldquo;I know doctors' appointments are frustrating and feel like a waste of time when you're busy. If we use the Iwosan Journeys checklist to write down exactly what panels to ask for, would you be open to a 15-minute visit if I help coordinate the agenda?&rdquo;</div>
      <div class="iwj-hc-script-why"><strong>Why It Works:</strong> It lowers the friction of scheduling while giving him a structured game plan so he doesn't feel ambushed in the exam room.</div>
    </div>
  </div>

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-hc-section">
    <div class="iwj-hc-section-title">Interactive Tool for Partners</div>
    <div class="iwj-hc-tool-heading">The Ally's Appointment Prep Sheet</div>
    <div class="iwj-hc-tool-subhead">
      Often, a man will agree to go to the doctor, but once he sits on the exam table,
      he defaults to saying, &ldquo;Everything is fine, Doc.&rdquo; Use this checklist
      together at the kitchen table before his appointment.
    </div>

    <div class="iwj-ally">
      <div class="iwj-ally-header">
        <h3>Partner's Appointment Prep: What We Notice Together</h3>
        <p>Check the statements that describe what you and your partner have observed. Print this sheet so he can hand it directly to his doctor without feeling put on the spot.</p>
      </div>
      <div class="iwj-ally-content">
        <div class="iwj-ally-section-title">1. What We've Noticed at Home (Symptoms)</div>
        <label class="iwj-ally-item"><input type="checkbox"> He experiences a severe energy drop in the afternoon/evening despite getting normal sleep.</label>
        <label class="iwj-ally-item"><input type="checkbox"> His snoring is heavy, or he wakes up feeling unrefreshed and groggy.</label>
        <label class="iwj-ally-item"><input type="checkbox"> His stress tolerance has dropped, leading to irritability or withdrawing from family routines.</label>
        <label class="iwj-ally-item"><input type="checkbox"> We have noticed shifts in physical stamina, muscle recovery, or intimate vitality.</label>

        <div class="iwj-ally-section-title">2. What We Would Like the Doctor to Check (Questions)</div>
        <label class="iwj-ally-item"><input type="checkbox"> Can we order a preventative baseline blood panel (including metabolic markers, lipid profile, and Vitamin D/B12)?</label>
        <label class="iwj-ally-item"><input type="checkbox"> Can we order a complete male hormone panel (including free and total testosterone)?</label>
        <label class="iwj-ally-item"><input type="checkbox"> Do his sleep patterns and morning fatigue warrant a sleep apnea screening?</label>
        <label class="iwj-ally-item"><input type="checkbox"> What is the #1 preventative lifestyle adjustment he should focus on over the next 6 months?</label>

        <div class="iwj-ally-btn-wrap">
          <button class="iwj-ally-btn" onclick="iwjAllyPrint()">Print / Save His Appointment Sheet</button>
        </div>
      </div>
    </div>

    <p class="iwj-hc-tool-disclaimer">
      This checklist helps you organize an observation and conversation with a licensed provider. It is not a substitute for professional medical advice, diagnosis, or treatment.
    </p>
  </div>

  <!-- SECTION 5: GOLDEN RULE -->
  <div class="iwj-hc-section">
    <div class="iwj-hc-section-title">The Partner's Golden Rule</div>
    <div class="iwj-hc-golden-box">
      <div class="iwj-hc-golden-title">Remember: You Are His Advocate, Not His Healthcare Provider.</div>
      <p style="font-size:.9rem;font-weight:300;line-height:1.7;margin-bottom:1rem;">
        Supporting the man in your life means helping him build his toolkit, not carrying the weight of his health on your shoulders.
      </p>
      <ol class="iwj-hc-golden-list">
        <li><strong>Encourage independent self-advocacy:</strong> Give him the worksheets and let him speak for himself in the doctor's office whenever possible.</li>
        <li><strong>Protect your own mental bandwidth:</strong> Use our Iwosan Journeys Mental Health Pillar worksheets (like Boundary Mapping and Nurturing vs. Depleting Activities) to ensure your own energy cup remains full.</li>
        <li><strong>Explore our live experiences:</strong> Join us at an upcoming &ldquo;Meeting Me&rdquo; Summit or group retreat booked via Checked Bags and Good Vibes (bagsandvibes.com), where partners and allies connect and learn together.</li>
      </ol>
    </div>
  </div>

  <div class="iwj-hc-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider. If you're concerned about his health &mdash; or your own &mdash; the right next step is always an appointment.
  </div>
</div>

<script>
(function(){
  window.iwjAllyPrint = function(){
    var items = document.querySelectorAll('.iwj-ally-item');
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
