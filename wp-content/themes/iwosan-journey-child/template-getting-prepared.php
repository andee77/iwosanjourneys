<?php
/**
 * Template Name: Iwosan Getting Prepared
 * Description: Custom coded Getting Prepared sub-page for Iwosan Journeys
 */

get_header(); iwosan_back_button( 'top' );
?>

<section class="ij-page-banner">
	<h1>Getting Prepared</h1>
</section>

<svg class="ij-path-divider" viewBox="0 0 1080 40" preserveAspectRatio="none" aria-hidden="true">
	<path d="M0 20 Q 270 0, 540 20 T 1080 20" fill="none" stroke="#C9A052" stroke-width="1.5"/>
</svg>

<div class="ij-section">
	<p>A 15-minute appointment goes a lot further when you walk in with a plan instead of winging it. This is the prep work that turns a rushed visit into an actual conversation.</p>

	<h2>Before you go</h2>
	<p><strong>Name your top 3 concerns.</strong><br>
	Not everything — the three things that are actually disrupting your life right now. Write them down. If you don't lead with them, they can get lost in a short appointment.</p>
	<p><strong>Describe the impact, not just the symptom.</strong><br>
	"I'm tired" is easy to wave off. "I'm losing three hours of sleep a night and it's affecting my work" is harder to dismiss. Specifics change how seriously you're taken.</p>

<h2>Questions worth asking</h2>
	<p>Tick the questions you want to ask, then print a sheet with just those, plus room to write down the answers. Nothing you tick is saved or sent anywhere.</p>

	<style>
.iwj-gp-wrap{max-width:850px;margin:0 auto 32px;box-sizing:border-box}
.iwj-gp-wrap *{box-sizing:border-box}
.iwj-gp{--iwj-primary:#0A1F44;--iwj-accent:#4DAEAF;--iwj-accent-hover:#3a8f90;--iwj-bg:#FAF8F4;--iwj-card-bg:#ffffff;--iwj-border:#E5E0D5;font-family:'Lato',sans-serif;background:var(--iwj-card-bg);border-radius:8px;box-shadow:0 4px 18px rgba(10,31,68,.06);border:1px solid var(--iwj-border);overflow:hidden}
.iwj-gp-header{background:var(--iwj-primary);color:#FAF8F4;padding:1.6rem;text-align:center}
.iwj-gp-header h3{font-family:'Montserrat',sans-serif;font-weight:700;font-size:1.15rem;margin:0 0 .4rem}
.iwj-gp-header p{font-size:.9rem;color:#E5E0D5;font-weight:300;margin:0}
.iwj-gp-content{padding:1.5rem}
.iwj-gp-item{display:flex;align-items:flex-start;margin:0 0 .5rem;padding:.55rem .7rem;border-radius:6px;font-size:.95rem;line-height:1.5;color:#0A1F44;cursor:pointer}
.iwj-gp-item:hover{background:var(--iwj-bg)}
.iwj-gp-item input{margin:.15rem .8rem 0 0;accent-color:var(--iwj-accent);width:20px;height:20px;flex-shrink:0;cursor:pointer}
.iwj-gp-item input:focus-visible{outline:3px solid var(--iwj-accent);outline-offset:2px}
.iwj-gp-btn-wrap{text-align:center;margin-top:1.5rem;padding-top:1rem;border-top:1px solid var(--iwj-border)}
.iwj-gp-count{font-size:.85rem;color:#4A5568;margin:0 0 .8rem}
.iwj-gp-btn{background:var(--iwj-accent);color:#fff;border:none;padding:.75rem 1.5rem;font-family:'Montserrat',sans-serif;font-size:.9rem;font-weight:700;border-radius:6px;cursor:pointer}
.iwj-gp-btn:hover,.iwj-gp-btn:focus-visible{background:var(--iwj-accent-hover);color:#fff}
.iwj-gp-btn:focus-visible{outline:3px solid var(--iwj-primary);outline-offset:2px}
.iwj-gp-msg{min-height:1.4em;margin:.7rem 0 0;font-size:.88rem;font-weight:700;color:#B91C1C}
#iwj-gp-sheet{display:none}
@media (max-width:600px){
  .iwj-gp-content{padding:1rem .6rem}
  .iwj-gp-item{padding:.7rem .5rem}
  .iwj-gp-btn{width:100%;padding:.9rem 1rem}
}
@media print{
  header,footer,#masthead,#colophon,#mobile-drawer,.site-header,.site-footer,.kadence-sticky-header,#kt-scroll-up,#kt-scroll-up-reader,.ij-page-banner,.ij-path-divider,.ij-back-wrap{display:none!important}
  .ij-section>*:not(.iwj-gp-wrap){display:none!important}
  .ij-section{max-width:100%!important;margin:0!important;padding:0!important}
  .iwj-gp-wrap{max-width:100%;margin:0;padding:0}
  .iwj-gp-wrap>*:not(#iwj-gp-sheet){display:none!important}
  #iwj-gp-sheet{display:block;color:#000;font-family:'Lato',sans-serif;font-size:11pt;line-height:1.4}
  #iwj-gp-sheet .iwj-gp-sheet-title{font-family:'Montserrat',sans-serif;font-weight:700;font-size:16pt;color:#0A1F44;margin:0 0 .8rem;padding:0 0 .4rem;border-bottom:2px solid #0A1F44;clear:none}
  #iwj-gp-sheet .iwj-gp-meta{margin:0 0 1.2rem}
  #iwj-gp-sheet .iwj-gp-field{display:flex;align-items:flex-end;margin:0 0 .9rem}
  #iwj-gp-sheet .iwj-gp-field-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:10pt;color:#0A1F44;margin-right:.6rem;white-space:nowrap}
  #iwj-gp-sheet .iwj-gp-field-line{flex:1;border-bottom:1px solid #000;height:1.2rem}
  #iwj-gp-sheet .iwj-gp-q{break-inside:avoid;page-break-inside:avoid;margin:0 0 1.1rem}
  #iwj-gp-sheet .iwj-gp-q-text{font-weight:700;color:#0A1F44;margin:0 0 .2rem}
  #iwj-gp-sheet .iwj-gp-answer-line{border-bottom:1px solid #777;height:1.9rem}
  #iwj-gp-sheet .iwj-gp-empty{font-style:italic}
  #iwj-gp-sheet .iwj-gp-sheet-foot{margin:1.2rem 0 0;font-size:9pt;color:#555}
}
</style>

<div class="iwj-gp-wrap">
	<div class="iwj-gp" id="iwj-gp">
		<div class="iwj-gp-header">
			<h3>My Questions for the Doctor</h3>
			<p>Tick the ones you want to ask. Print a sheet with just those.</p>
		</div>
		<div class="iwj-gp-content">
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"What are my treatment options for these specific symptoms?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"Can we discuss the benefits and risks of each option, given my history?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"What non-prescription or non-hormonal options are available?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"If my labs come back 'normal,' how do we address the fact that my symptoms are still severe?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"What would you recommend if I were your patient with these exact symptoms?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"What could be causing these symptoms, and what else should we rule out?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"What tests do you recommend, and what will the results tell us?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"How will we know if this treatment is working, and when should we follow up?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"If this doesn't help, what is our next step?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"Should I see a specialist for this?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"Can you note in my chart that I raised these concerns today?"</span></label>
			<label class="iwj-gp-item"><input type="checkbox" autocomplete="off"><span>"How do I get a copy of my visit notes and test results?"</span></label>
			<div class="iwj-gp-btn-wrap">
				<p class="iwj-gp-count" id="iwj-gp-count" aria-live="polite">0 of 12 questions ticked</p>
				<button type="button" class="iwj-gp-btn" id="iwj-gp-print">Print my questions</button>
				<p class="iwj-gp-msg" id="iwj-gp-msg" role="status" aria-live="polite"></p>
			</div>
		</div>
	</div>
	<div id="iwj-gp-sheet" aria-hidden="true"></div>
</div>

<script>
(function () {
  var box = document.getElementById('iwj-gp');
  if (!box) { return; }
  var sheet = document.getElementById('iwj-gp-sheet');
  var btn = document.getElementById('iwj-gp-print');
  var msg = document.getElementById('iwj-gp-msg');
  var count = document.getElementById('iwj-gp-count');
  var inputs = box.querySelectorAll('.iwj-gp-item input');
  function el(tag, cls, text) {
    var n = document.createElement(tag);
    if (cls) { n.className = cls; }
    if (text) { n.textContent = text; }
    return n;
  }
  function field(label) {
    var row = el('div', 'iwj-gp-field');
    row.appendChild(el('span', 'iwj-gp-field-label', label));
    row.appendChild(el('span', 'iwj-gp-field-line'));
    return row;
  }
  function ticked() {
    var out = [];
    for (var i = 0; i < inputs.length; i++) { if (inputs[i].checked) { out.push(inputs[i]); } }
    return out;
  }
  function build() {
    var t = ticked();
    while (sheet.firstChild) { sheet.removeChild(sheet.firstChild); }
    sheet.appendChild(el('h2', 'iwj-gp-sheet-title', 'My Questions for My Provider'));
    var meta = el('div', 'iwj-gp-meta');
    meta.appendChild(field('Name'));
    meta.appendChild(field('Date'));
    meta.appendChild(field('Provider'));
    sheet.appendChild(meta);
    if (!t.length) {
      sheet.appendChild(el('p', 'iwj-gp-empty', 'No questions are ticked. Go back to the page and tick the ones you want to ask.'));
      return 0;
    }
    for (var i = 0; i < t.length; i++) {
      var q = el('div', 'iwj-gp-q');
      q.appendChild(el('p', 'iwj-gp-q-text', (i + 1) + '. ' + t[i].parentNode.querySelector('span').textContent));
      for (var j = 0; j < 3; j++) { q.appendChild(el('div', 'iwj-gp-answer-line')); }
      sheet.appendChild(q);
    }
    sheet.appendChild(el('p', 'iwj-gp-sheet-foot', 'Iwosan Journeys · iwosanjourney.com'));
    return t.length;
  }
  function update() {
    var n = ticked().length;
    count.textContent = n + ' of ' + inputs.length + ' questions ticked';
    if (n) { msg.textContent = ''; }
  }
  function clearAll() {
    for (var i = 0; i < inputs.length; i++) { inputs[i].checked = false; }
    update();
  }
  box.addEventListener('change', update);
  btn.addEventListener('click', function () {
    if (!build()) { msg.textContent = 'Tick at least one question first.'; return; }
    msg.textContent = '';
    window.print();
  });
  window.addEventListener('beforeprint', build);
  window.addEventListener('pageshow', function (e) { if (e.persisted) { clearAll(); } });
  clearAll();
})();
</script>

	<h2>Scripts to keep handy</h2>
	<p><strong>If you're dismissed because of your age:</strong></p>
	<div class="ij-quote">"I understand my age, but current clinical guidance shows this can start well before what's considered typical. I'd like to discuss symptom management."</div>

	<p><strong>If you're told your labs are "normal":</strong></p>
	<div class="ij-quote">"I understand the labs are within range, but my symptoms are significantly impacting my quality of life. I'd like to explore treatment based on symptoms, not just labs."</div>

	<p><strong>If you're denied treatment:</strong></p>
	<div class="ij-quote">"Could you please document in my chart that I requested treatment for these symptoms, and that it was declined?"</div>

	<p><strong>If you feel rushed:</strong></p>
	<div class="ij-quote">"I'd like a moment to fully explain my symptoms before we decide on next steps."</div>

	<p style="margin-top: 20px;"><strong>One last reminder:</strong> you are not asking for too much. You are asking for appropriate care.</p>

	<h2>Keep going</h2>
	<div class="ij-journal-teasers">
		<div class="ij-journal-teaser">
			<h3>Advocacy</h3>
			<p>Back to the main hub — four practical ways to make yourself heard.</p>
			<p style="margin-top: 10px;"><a href="/advocacy/">Back to Advocacy &rarr;</a></p>
		</div>
		<div class="ij-journal-teaser">
			<h3>Know Your Rights</h3>
			<p>What you're actually entitled to as a patient, every visit.</p>
			<p style="margin-top: 10px;"><a href="/know-your-rights/">Learn more &rarr;</a></p>
		</div>
		<div class="ij-journal-teaser">
			<h3>Patient Power Pack</h3>
			<p>A tangible toolkit to help you navigate the healthcare system.</p>
			<p style="margin-top: 10px;"><a href="/patient-power-pack/">Learn more &rarr;</a></p>
		</div>
	</div>
</div>

<?php iwosan_back_button( 'bottom' ); get_footer(); ?>
