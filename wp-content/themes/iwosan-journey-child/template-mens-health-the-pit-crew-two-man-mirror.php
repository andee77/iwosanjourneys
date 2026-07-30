<?php
/**
 * Template Name: Iwosan Men's Health — The Two-Man Mirror
 * Description: Custom coded Men's Health "The Two-Man Mirror" partner subpage for Iwosan Journey's
 */

get_header();
?>

<section class="ij-page-banner">
	<h1>The Two-Man Mirror</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<!-- ============================================
     IWOSAN JOURNEY'S — THE TWO-MAN MIRROR
     (Men's Health > The Pit Crew > Two-Man Mirror)
     ============================================ -->
<style>
.iwj-tmm-page{
  font-family:'Lato',sans-serif;
  max-width:900px;
  margin:0 auto;
  padding:2.5rem 6% 4rem;
  color:#3D3228;
}
.iwj-tmm-eyebrow{
  font-family:'Montserrat',sans-serif;
  font-weight:600;
  font-size:.85rem;
  letter-spacing:.08em;
  text-transform:uppercase;
  color:#C9A052;
  margin-bottom:.75rem;
}
.iwj-tmm-subtitle{
  font-size:1rem;
  line-height:1.6;
  font-weight:300;
  font-style:italic;
  color:#5F5E5A;
  max-width:640px;
  margin-bottom:2rem;
}
.iwj-tmm-hero-img{
  width:100%;
  border-radius:8px;
  margin-bottom:2rem;
  display:block;
  object-fit:cover;
  object-position:center 27%;
  max-height:420px;
}
.iwj-tmm-lede{
  font-size:1rem;
  line-height:1.75;
  font-weight:300;
  max-width:680px;
  margin-bottom:2.5rem;
}
.iwj-tmm-section{margin-bottom:2.75rem}
.iwj-tmm-section-title{
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
.iwj-tmm-heading{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.25rem;
  color:#0A1F44;
  line-height:1.3;
  margin-bottom:1rem;
}
.iwj-tmm-body{
  font-size:.95rem;
  line-height:1.75;
  font-weight:300;
  max-width:680px;
  margin-bottom:1rem;
}
.iwj-tmm-reason-list{
  margin:1.25rem 0 0;
  padding:0;
  list-style:none;
}
.iwj-tmm-reason-list li{
  display:flex;
  gap:.9rem;
  padding:1rem 0;
  border-bottom:1px solid #E5E0D5;
  font-size:.92rem;
  line-height:1.65;
  font-weight:300;
}
.iwj-tmm-reason-list li:last-child{border-bottom:none}
.iwj-tmm-reason-list strong{
  color:#0A1F44;
  font-weight:700;
  white-space:nowrap;
}
.iwj-tmm-script-card{
  background:#FAF8F4;
  border-left:3px solid #4DAEAF;
  border-radius:0 6px 6px 0;
  padding:1.25rem 1.5rem;
  margin-bottom:1.25rem;
}
.iwj-tmm-script-num{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:.95rem;
  color:#0A1F44;
  margin-bottom:.5rem;
}
.iwj-tmm-script-say{
  font-size:.92rem;
  line-height:1.7;
  font-style:italic;
  color:#3D3228;
  margin-bottom:.6rem;
}
.iwj-tmm-script-why{
  font-size:.82rem;
  line-height:1.6;
  color:#7A6E65;
}
.iwj-tmm-script-why strong{color:#5F5E5A}
.iwj-tmm-tool-heading{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.3rem;
  color:#0A1F44;
  margin-bottom:.4rem;
}
.iwj-tmm-tool-subhead{
  font-size:.88rem;
  font-weight:300;
  font-style:italic;
  color:#7A6E65;
  margin-bottom:1.25rem;
}
.iwj-tmm-tool-disclaimer{
  margin-top:1rem;
  font-size:.75rem;
  font-weight:300;
  font-style:italic;
  color:#8A8178;
  line-height:1.5;
  border-top:1px solid rgba(28,58,42,.1);
  padding-top:.75rem;
}
.iwj-tmm-golden-box{
  background:#0A1F44;
  color:#FAF8F4;
  border-radius:8px;
  padding:1.75rem 2rem;
}
.iwj-tmm-golden-title{
  font-family:'Montserrat',sans-serif;
  font-weight:700;
  font-size:1.1rem;
  margin-bottom:1rem;
}
.iwj-tmm-golden-list{
  margin:0;
  padding-left:1.2rem;
  font-size:.9rem;
  line-height:1.7;
  font-weight:300;
}
.iwj-tmm-golden-list li{margin-bottom:.75rem}
.iwj-tmm-golden-list li:last-child{margin-bottom:0}
.iwj-tmm-page-disclaimer{
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

/* ---------- Two-Man Engine Check (Mutual Agenda Builder) ---------- */
.iwj-tme{
  --iwj-primary:#0A1F44;
  --iwj-accent:#4DAEAF;
  --iwj-accent-hover:#3a8f90;
  --iwj-bg:#FAF8F4;
  --iwj-card-bg:#ffffff;
  --iwj-border:#E5E0D5;
  --iwj-col-a-bg:#F0F8F8;
  --iwj-col-b-bg:#FAF8F4;
  font-family:'Lato',sans-serif;
  max-width:900px;
  margin:0 auto;
  background:var(--iwj-card-bg);
  border-radius:8px;
  box-shadow:0 4px 18px rgba(10,31,68,.06);
  border:1px solid var(--iwj-border);
  overflow:hidden;
}
.iwj-tme *{box-sizing:border-box}
.iwj-tme-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-tme-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin-bottom:.4rem}
.iwj-tme-header p{font-size:.85rem;color:#C9C4B8;font-weight:300}
.iwj-tme-content{padding:1.5rem}
.iwj-tme-columns{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem;margin-bottom:1.25rem}
@media(max-width:760px){.iwj-tme-columns{grid-template-columns:1fr}}
.iwj-tme-col{border:1px solid var(--iwj-border);border-radius:8px;padding:1rem}
.iwj-tme-col-a{background:var(--iwj-col-a-bg);border-top:4px solid var(--iwj-accent)}
.iwj-tme-col-b{background:var(--iwj-col-b-bg);border-top:4px solid var(--iwj-primary)}
.iwj-tme-col-title{font-family:'Montserrat',sans-serif;font-size:1.02rem;font-weight:700;color:var(--iwj-primary);margin-bottom:.25rem}
.iwj-tme-col-subtitle{font-size:.74rem;color:#7A6E65;margin-bottom:1rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-tme-section-head{font-family:'Montserrat',sans-serif;font-size:.78rem;font-weight:700;color:var(--iwj-accent);margin:.85rem 0 .5rem;text-transform:uppercase;letter-spacing:.03em}
.iwj-tme-item{display:flex;align-items:flex-start;margin-bottom:.6rem;font-size:.85rem;cursor:pointer;line-height:1.45}
.iwj-tme-item input{margin-right:.6rem;margin-top:.2rem;accent-color:var(--iwj-accent);width:16px;height:16px;flex-shrink:0}
.iwj-tme-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-tme-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.85rem 1.75rem;font-family:'Montserrat',sans-serif;font-size:.95rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-tme-btn:hover{background:var(--iwj-accent-hover)}

@media print{
  .iwj-tme{border:none;box-shadow:none;max-width:100%}
  .iwj-tme-btn-wrap,.iwj-tme-header p{display:none}
  .iwj-tme-header{background:none;color:var(--iwj-primary);padding:0;text-align:left;border-bottom:2px solid var(--iwj-primary);margin-bottom:1rem}
  .iwj-tme-item:not(.is-checked){display:none}
  .iwj-tme-col{background:#fff;border:1px solid #ccc;margin-bottom:1rem;page-break-inside:avoid}
}
</style>

<div class="iwj-tmm-page">
  <div class="iwj-tmm-eyebrow">The Pit Crew &mdash; The Two-Man Mirror</div>
  <p class="iwj-tmm-subtitle">
    Partner Advocacy for Husbands &amp; Boyfriends: How to Watch Out for Him Without Looking the Other Way About Yourself
  </p>

  <img class="iwj-tmm-hero-img" src="https://iwosanjourney.com/wp-content/uploads/2026/07/man-mirror-scaled.jpg" alt="Two men, one reflected as if in a mirror, representing mutual health advocacy">

  <p class="iwj-tmm-lede">
    A man will often show up with fierce, meticulous advocacy for his husband or
    boyfriend &mdash; tracking his appointments, worrying about his sleep apnea, noticing
    his mood shifts &mdash; while completely ignoring the check-engine light flashing on
    his own body. It often stems from an old survival habit: focusing on taking care of
    someone else is an easy way to avoid feeling vulnerable about your own aging or
    health.
  </p>

  <!-- SECTION 1: THE REALITY CHECK -->
  <div class="iwj-tmm-section">
    <div class="iwj-tmm-section-title">The Reality Check</div>
    <div class="iwj-tmm-heading">Are You Fighting for His Health While Ignoring Your Own?</div>
    <p class="iwj-tmm-body">
      In same-sex relationships, we often see a powerful but dangerous pattern: The
      Caregiver Deflection.
    </p>
    <p class="iwj-tmm-body">
      You might be the first to notice your partner's snoring, his afternoon energy
      crash, or his shorter fuse. You encourage him to get his blood work done, you
      worry about his stress levels, and you push him to see a doctor. But if he turned
      around and asked about your last checkup, your sleep quality, or your baseline
      labs, what would you say?
    </p>
    <p class="iwj-tmm-body">
      Too often, two men in a relationship fall into opposite roles: one man becomes the
      caretaker, and the other becomes the patient &mdash; even when both engines need
      maintenance.
    </p>
    <p class="iwj-tmm-body">
      Under Iwosan Journeys, true advocacy means breaking the deflection cycle. You
      cannot be a strong anchor for the man you love if you are running your own battery
      to zero.
    </p>
  </div>

  <!-- SECTION 2: WHY WE LOOK THE OTHER WAY -->
  <div class="iwj-tmm-section">
    <div class="iwj-tmm-section-title">Why We Look the Other Way</div>
    <p class="iwj-tmm-body">
      Why do men in relationships often ignore their own symptoms while fussing over
      their partner's?
    </p>
    <ul class="iwj-tmm-reason-list">
      <li><strong>The &ldquo;One of Us Has to Be the Strong One&rdquo; Trap:</strong> It feels easier to focus on his fatigue or stress than to admit that your own stamina or focus is dropping.</li>
      <li><strong>Shared Aging Anxiety:</strong> Seeing a partner deal with biological shifts (like dropping testosterone, joint stiffness, or metabolism changes) can hold a mirror up to our own aging &mdash; so we focus entirely on &ldquo;fixing&rdquo; him to avoid looking in the mirror.</li>
      <li><strong>The Double-Stigma of Men's Care:</strong> Culturally, men are taught to avoid medical vulnerability. When two men build a life together, it is easy to accidentally reinforce each other's avoidance habits unless you consciously build a different culture at home.</li>
    </ul>
  </div>

  <!-- SECTION 3: MUTUAL PACT SCRIPTS -->
  <div class="iwj-tmm-section">
    <div class="iwj-tmm-section-title">Conversation Scripts: The &ldquo;Mutual Pact&rdquo; Approach</div>
    <p class="iwj-tmm-body">
      When talking to your husband or boyfriend about health, the most effective way to
      drop his defensiveness &mdash; and keep yourself honest &mdash; is to make it a
      two-man job.
    </p>

    <div class="iwj-tmm-script-card">
      <div class="iwj-tmm-script-num">1. The &ldquo;Side-by-Side Checkup&rdquo; Approach <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Best for routine baselines &amp; blood work)</span></div>
      <div class="iwj-tmm-script-say">&ldquo;I've been thinking about our long-term health and realized neither of us has a solid baseline on paper. I'm scheduling a comprehensive blood and hormone screening for myself this month so I know where my numbers stand. I want us both running strong &mdash; let's book yours for the same week so we do it together.&rdquo;</div>
      <div class="iwj-tmm-script-why"><strong>Why It Works:</strong> It completely removes the feeling of &ldquo;being singled out&rdquo; or nagged. You are leading by example and stepping into vulnerability first.</div>
    </div>

    <div class="iwj-tmm-script-card">
      <div class="iwj-tmm-script-num">2. The &ldquo;Call-Out the Mirror&rdquo; Approach <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Best when you've been deflecting your own health)</span></div>
      <div class="iwj-tmm-script-say">&ldquo;I know I've been on your case lately about your sleep and your stress levels, but I need to be honest &mdash; I've been ignoring my own check-engine lights too. My energy hasn't been great either. Instead of me just worrying about you, let's make a mutual pact to get our baselines checked.&rdquo;</div>
      <div class="iwj-tmm-script-why"><strong>Why It Works:</strong> It disarms pride immediately. Admitting your own physical shifts turns the conversation from a critique into intimacy and mutual support.</div>
    </div>

    <div class="iwj-tmm-script-card">
      <div class="iwj-tmm-script-num">3. The &ldquo;Stress &amp; Bandwidth&rdquo; Check-In <span style="color:#7A6E65;font-weight:400;font-style:italic;">(Best for silent burnout &amp; irritability)</span></div>
      <div class="iwj-tmm-script-say">&ldquo;We've both been carrying a heavy mental load lately, and I can feel that our tempers are shorter and we're both drained by the evening. Let's look at our routines &mdash; what is one thing we can take off our plates this week, and when can we schedule our preventative checkups?&rdquo;</div>
      <div class="iwj-tmm-script-why"><strong>Why It Works:</strong> It acknowledges that burnout is a shared household ecosystem, not just one guy's personal failure.</div>
    </div>
  </div>

  <!-- SECTION 4: INTERACTIVE TOOL -->
  <div class="iwj-tmm-section">
    <div class="iwj-tmm-section-title">Interactive Tool for Couples</div>
    <div class="iwj-tmm-tool-heading">The Two-Man Engine Check</div>
    <div class="iwj-tmm-tool-subhead">
      Don't just build an agenda for him &mdash; build one for both of you. Check off what
      you are noticing in your partner and what you are feeling in your own body, then
      print two separate, customized sheets you can each take to your doctors.
    </div>

    <div class="iwj-tme">
      <div class="iwj-tme-header">
        <h3>The Two-Man Engine Check: Mutual Health Agenda</h3>
        <p>Don't look the other way about your own health. Check the symptoms and questions for both of you, then print your side-by-side doctor agendas.</p>
      </div>
      <div class="iwj-tme-content">
        <div class="iwj-tme-columns">
          <div class="iwj-tme-col iwj-tme-col-a">
            <div class="iwj-tme-col-title">My Own Health Agenda</div>
            <div class="iwj-tme-col-subtitle">What I'm checking for myself</div>

            <div class="iwj-tme-section-head">My Symptom Check</div>
            <label class="iwj-tme-item"><input type="checkbox"> I've been experiencing afternoon fatigue or lower daily energy.</label>
            <label class="iwj-tme-item"><input type="checkbox"> My sleep is restless, or I wake up unrefreshed.</label>
            <label class="iwj-tme-item"><input type="checkbox"> My stress tolerance is down, or I feel persistent burnout.</label>
            <label class="iwj-tme-item"><input type="checkbox"> I've noticed shifts in my physical recovery, strength, or libido.</label>

            <div class="iwj-tme-section-head">My Questions for the Doc</div>
            <label class="iwj-tme-item"><input type="checkbox"> Can we order a full metabolic and lipid baseline screening?</label>
            <label class="iwj-tme-item"><input type="checkbox"> Can we order a male hormone panel (Free &amp; Total Testosterone)?</label>
            <label class="iwj-tme-item"><input type="checkbox"> How can we optimize my cardiovascular and preventative health?</label>
          </div>

          <div class="iwj-tme-col iwj-tme-col-b">
            <div class="iwj-tme-col-title">His Health Agenda</div>
            <div class="iwj-tme-col-subtitle">What I've noticed about him</div>

            <div class="iwj-tme-section-head">His Symptom Check</div>
            <label class="iwj-tme-item"><input type="checkbox"> He experiences afternoon energy crashes or heavy fatigue.</label>
            <label class="iwj-tme-item"><input type="checkbox"> He snores heavily, gasps during sleep, or wakes up tired.</label>
            <label class="iwj-tme-item"><input type="checkbox"> He seems more irritable, stressed, or withdrawn from routines.</label>
            <label class="iwj-tme-item"><input type="checkbox"> He has noticed shifts in physical stamina or intimate vitality.</label>

            <div class="iwj-tme-section-head">His Questions for the Doc</div>
            <label class="iwj-tme-item"><input type="checkbox"> Can we order a full metabolic and lipid baseline screening?</label>
            <label class="iwj-tme-item"><input type="checkbox"> Can we order a male hormone panel (Free &amp; Total Testosterone)?</label>
            <label class="iwj-tme-item"><input type="checkbox"> Does his snoring/sleep pattern warrant a sleep apnea check?</label>
          </div>
        </div>

        <div class="iwj-tme-btn-wrap">
          <button class="iwj-tme-btn" onclick="iwjTmePrint()">Print / Save Our Mutual Doctor Agendas</button>
        </div>
      </div>
    </div>

    <p class="iwj-tmm-tool-disclaimer">
      This checklist helps two people organize what to discuss with a licensed provider. It is not a substitute for professional medical advice, diagnosis, or treatment for either partner.
    </p>
  </div>

  <!-- SECTION 5: THE MUTUAL PACT GOLDEN RULE -->
  <div class="iwj-tmm-section">
    <div class="iwj-tmm-section-title">The Mutual Pact Golden Rule</div>
    <div class="iwj-tmm-golden-box">
      <div class="iwj-tmm-golden-title">Remember: You Are Each Other's Advocate, Not Each Other's Healthcare Provider.</div>
      <p style="font-size:.9rem;font-weight:300;line-height:1.7;margin-bottom:1rem;">
        Breaking the Caregiver Deflection cycle means neither of you carries this alone
        &mdash; and neither of you outsources your own health to the other's worry.
      </p>
      <ol class="iwj-tmm-golden-list">
        <li><strong>Take turns leading, not managing:</strong> Whoever notices something first can bring it up &mdash; but the goal is both of you speaking for yourselves in the doctor's office, not one of you managing the other's care.</li>
        <li><strong>Protect both of your bandwidths:</strong> Use our Iwosan Journeys Mental Health Pillar worksheets (like Boundary Mapping and Nurturing vs. Depleting Activities) so neither of you runs your own battery to zero while watching out for the other.</li>
        <li><strong>Explore our live experiences together:</strong> Join us at an upcoming &ldquo;Meeting Me&rdquo; Summit or group retreat booked via Checked Bags and Good Vibes (bagsandvibes.com), where couples connect and learn together.</li>
      </ol>
    </div>
  </div>

  <div class="iwj-tmm-page-disclaimer">
    <strong>A note on this page:</strong> The information and interactive tool here are educational and self-reflective in nature. They do not diagnose, treat, or replace a conversation with a licensed healthcare provider for either partner. If something here concerns you about yourself or him, the right next step is always an appointment.
  </div>
</div>

<script>
(function(){
  window.iwjTmePrint = function(){
    var items = document.querySelectorAll('.iwj-tme-item');
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
