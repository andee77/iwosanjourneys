/**
 * Iwosan Journey's — Men's Health Assessments
 * Check-Engine Assessment (PHQ-9 + GAD-7) and Co-Pilot Assessment (PC-PTSD-5)
 *
 * Enqueue this file only on the Men's Health page.
 * Depends on: two mount points in the page markup:
 *   #iwosan-checkengine-mount
 *   #iwosan-copilot-mount
 * Each mount renders independently — they do not share state.
 *
 * Email capture: wired to ConvertKit (Kit) form via the shared MenoWell form.
 * Replace CONVERTKIT_FORM_UID below with the confirmed form UID before deploy.
 */

(function () {
  'use strict';

  // Confirmed from the live MenoWell embed (simplymenowell.com): a classic Kit HTML form post,
  // not the newer JS-embed/data-uid pattern. Same form ID used across the JourneyWell brand family.
  const CONVERTKIT_FORM_ID = '9372376';
  const CONVERTKIT_ENDPOINT = `https://app.convertkit.com/forms/${CONVERTKIT_FORM_ID}/subscriptions`;

  const scale4 = ["Not at all", "Several days", "More than half the days", "Nearly every day"];

  const PHQ9 = {
    name: "PHQ-9",
    preamble: "Over the last 2 weeks, how often have you been bothered by any of the following problems?",
    items: [
      "Little interest or pleasure in doing things",
      "Feeling down, depressed, or hopeless",
      "Trouble falling or staying asleep, or sleeping too much",
      "Feeling tired or having little energy",
      "Poor appetite or overeating",
      "Feeling bad about yourself — or that you are a failure or have let yourself or your family down",
      "Trouble concentrating on things, such as reading or watching television",
      "Moving or speaking so slowly that other people could have noticed — or the opposite, being so fidgety or restless that you've been moving around a lot more than usual",
      "Thoughts that you would be better off dead, or of hurting yourself in some way"
    ]
  };

  const GAD7 = {
    name: "GAD-7",
    preamble: "Over the last 2 weeks, how often have you been bothered by the following problems?",
    items: [
      "Feeling nervous, anxious, or on edge",
      "Not being able to stop or control worrying",
      "Worrying too much about different things",
      "Trouble relaxing",
      "Being so restless that it is hard to sit still",
      "Becoming easily annoyed or irritable",
      "Feeling afraid, as if something awful might happen"
    ]
  };

  const PCPTSD5 = {
    name: "PC-PTSD-5",
    preamble: "In your life, have you ever had any experience that was so frightening, horrible, or traumatic that, in the past month, you...",
    items: [
      "Have had nightmares about the event(s) or thought about it when you did not want to?",
      "Tried hard not to think about the event(s) or went out of your way to avoid situations that reminded you of it?",
      "Were constantly on guard, watchful, or easily startled?",
      "Felt numb or detached from people, activities, or your surroundings?",
      "Felt guilty or unable to stop blaming yourself or others for the event(s) or problems it caused?"
    ]
  };

  function sum(arr) { return arr.reduce((a, b) => a + (b || 0), 0); }

  function phqBand(score) {
    if (score <= 4) return { label: "Minimal", cls: "band-minimal" };
    if (score <= 9) return { label: "Mild", cls: "band-mild" };
    if (score <= 14) return { label: "Moderate", cls: "band-moderate" };
    if (score <= 19) return { label: "Moderately severe", cls: "band-severe" };
    return { label: "Severe", cls: "band-severe" };
  }
  function gadBand(score) {
    if (score <= 4) return { label: "Minimal", cls: "band-minimal" };
    if (score <= 9) return { label: "Mild", cls: "band-mild" };
    if (score <= 14) return { label: "Moderate", cls: "band-moderate" };
    return { label: "Severe", cls: "band-severe" };
  }

  function gaugeSVG(fraction) {
    fraction = Math.min(Math.max(fraction, 0), 1);
    const angle = -90 + (fraction * 180);
    const color = fraction < 0.35 ? '#2F7A4D' : fraction < 0.65 ? '#D98E2C' : '#B33A3A';
    return `
      <svg width="220" height="130" viewBox="0 0 220 130">
        <path d="M 20 110 A 90 90 0 0 1 200 110" fill="none" stroke="#EBE7DE" stroke-width="16" stroke-linecap="round"/>
        <path d="M 20 110 A 90 90 0 0 1 200 110" fill="none" stroke="${color}" stroke-width="16" stroke-linecap="round"
          stroke-dasharray="${fraction * 283} 283"/>
        <g transform="rotate(${angle} 110 110)">
          <line x1="110" y1="110" x2="110" y2="35" stroke="${color}" stroke-width="4" stroke-linecap="round"/>
        </g>
        <circle cx="110" cy="110" r="7" fill="${color}"/>
      </svg>
      <div class="gauge-label">Combined Signal</div>
      <div class="gauge-sub">Higher = worth a closer look</div>
    `;
  }

  /**
   * Submits an email (plus optional assessment scores) to the shared Kit form,
   * matching the classic form-post pattern live on simplymenowell.com (form ID 9372376).
   * Custom fields confirmed in the Kit dashboard: gad7_score, phq9_score, ptsd_score.
   *
   * Note on reliability: mode:'no-cors' means the browser cannot read Kit's actual response,
   * so a wrong form ID or a Kit-side validation error will look identical to success from here.
   * What THIS function can catch: network failures and requests that hang. A request timeout
   * (8s) is used so a dead connection doesn't leave the person staring at a spinner forever.
   * If you want true delivery confirmation, that requires either dropping no-cors (which means
   * solving Kit's CORS restriction some other way) or checking subscriber counts in Kit directly.
   */
  function submitToConvertKit(email, fields) {
    const body = new URLSearchParams();
    body.append('email_address', email);
    Object.keys(fields || {}).forEach(key => {
      body.append(`fields[${key}]`, fields[key]);
    });

    const controller = new AbortController();
    const timeout = setTimeout(() => controller.abort(), 8000);

    return fetch(CONVERTKIT_ENDPOINT, {
      method: 'POST',
      mode: 'no-cors',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body,
      signal: controller.signal
    }).then(() => {
      clearTimeout(timeout);
      return { ok: true };
    }).catch(err => {
      clearTimeout(timeout);
      const reason = err.name === 'AbortError' ? 'timeout' : 'network_error';
      console.error('ConvertKit submission failed:', reason, err);
      return { ok: false, reason };
    });
  }

  function promptForEmail(onSubmit) {
    const email = window.prompt('Enter your email to get a copy of your results:');
    if (email && email.includes('@')) {
      onSubmit(email);
    }
  }

  /* ---------------- Check-Engine Assessment ---------------- */

  function mountCheckEngine(root) {
    let step = 'intro';
    let qIndex = 0;
    let answers = { phq9: [], gad7: [] };
    let queue = [];

    function start() {
      step = 'question';
      qIndex = 0;
      queue = [];
      PHQ9.items.forEach((t, i) => queue.push({ set: 'phq9', i }));
      GAD7.items.forEach((t, i) => queue.push({ set: 'gad7', i }));
      render();
    }

    function answer(value) {
      const entry = queue[qIndex];
      answers[entry.set][entry.i] = value;
      if (qIndex < queue.length - 1) { qIndex++; } else { step = 'result'; }
      render();
    }

    function back() {
      if (step === 'question' && qIndex > 0) { qIndex--; render(); }
      else if (step === 'question' && qIndex === 0) { step = 'intro'; render(); }
    }

    function renderIntro() {
      root.innerHTML = `
        <span class="instrument-tag tag-checkengine">Symptom Translator</span>
        <h2>Check-Engine Assessment</h2>
        <p>A warning light doesn't tell you which part failed — it just tells you to look. This runs the same two
        panels a doctor's office would use to start narrowing down what's going on: mood and energy, and anxiety
        and tension. 16 short questions, about 3 minutes.</p>
        <button class="start-btn" id="ce-start">Start the assessment</button>
        <div class="disclaimer">Uses the PHQ-9 and GAD-7, standard clinical screening tools. This is a self-check,
        not a diagnosis — your results are something to bring to a conversation with a doctor, not a replacement
        for one.</div>
      `;
      root.querySelector('#ce-start').addEventListener('click', start);
    }

    function renderQuestion() {
      const entry = queue[qIndex];
      const setData = entry.set === 'phq9' ? PHQ9 : GAD7;
      const qText = setData.items[entry.i];
      const total = queue.length;
      const pct = Math.round((qIndex / total) * 100);

      root.innerHTML = `
        <div class="progress-row">
          <div class="progress-track"><div class="progress-fill" style="width:${pct}%;background:var(--gold)"></div></div>
          <div class="progress-label">${qIndex + 1} / ${total}</div>
        </div>
        <div class="question-sub">${setData.preamble}</div>
        <div class="question">${qText}</div>
        <div class="options">
          ${scale4.map((o, idx) => `<button class="opt-btn" data-val="${idx}">${o}</button>`).join('')}
        </div>
        <div class="back-link" id="ce-back">← Back</div>
      `;
      root.querySelectorAll('.opt-btn').forEach(btn => {
        btn.addEventListener('click', () => answer(parseInt(btn.dataset.val, 10)));
      });
      root.querySelector('#ce-back').addEventListener('click', back);
    }

    function renderResult() {
      const phqScore = sum(answers.phq9);
      const gadScore = sum(answers.gad7);
      const phq = phqBand(phqScore);
      const gad = gadBand(gadScore);
      const item9 = answers.phq9[8] || 0;

      let crisisHTML = '';
      if (item9 > 0) {
        crisisHTML = `
          <div class="crisis-box">
            <h3>Please reach out now</h3>
            <p>One of your answers touched on thoughts of self-harm. That's worth taking seriously right away, even
            if it felt minor when you answered.</p>
            <p><strong>Call or text 988</strong> — the Suicide &amp; Crisis Lifeline, free and available 24/7.</p>
            <p>Or text <strong>HOME to 741741</strong> to reach the Crisis Text Line.</p>
            <p>If you're in immediate danger, call 911 or go to your nearest emergency room.</p>
          </div>
        `;
      }

      root.innerHTML = `
        <div class="gauge-wrap">${gaugeSVG(Math.max(phqScore / 27, gadScore / 21))}</div>

        <h3 class="result-heading">Mood & Energy (PHQ-9)</h3>
        <div class="band-pill ${phq.cls}">${phq.label} · ${phqScore}/27</div>
        <p class="result-copy">This panel screens for depression symptoms — things like low energy, low interest, and mood.</p>

        <h3 class="result-heading" style="margin-top:16px;">Anxiety & Tension (GAD-7)</h3>
        <div class="band-pill ${gad.cls}">${gad.label} · ${gadScore}/21</div>
        <p class="result-copy">This panel screens for anxiety symptoms — worry, restlessness, and trouble relaxing.</p>

        ${crisisHTML}

        <div class="cta-block">
          <p>Bring these numbers to your next appointment — they help your doctor know where to start. Want a copy to take with you?</p>
          <button class="primary-btn" id="ce-email">Email me my results</button>
        </div>

        <a class="outbound-link" href="https://deconstructingstigma.org/screenings" target="_blank" rel="noopener">
          Want the full clinical screening experience? Take it at Deconstructing Stigma →
        </a>

        <div class="citation">
          PHQ-9 and GAD-7: Pfizer Inc. Reproduced under the free-use terms published at phqscreeners.com.
          Screening only — not a diagnostic instrument.
        </div>
        <div class="back-link" id="ce-retake" style="margin-top:14px;">↻ Retake</div>
      `;

      root.querySelector('#ce-email').addEventListener('click', () => {
        promptForEmail(email => {
          submitToConvertKit(email, {
            phq9_score: phqScore,
            gad7_score: gadScore
          }).then(result => {
            if (result.ok) {
              window.alert('Thanks — check your inbox shortly.');
            } else {
              window.alert("We couldn't confirm that went through. Please try again, or email us directly if it keeps happening.");
            }
          });
        });
      });
      root.querySelector('#ce-retake').addEventListener('click', () => { step = 'intro'; render(); });
    }

    function render() {
      if (step === 'intro') renderIntro();
      else if (step === 'question') renderQuestion();
      else renderResult();
    }

    render();
  }

  /* ---------------- Co-Pilot Assessment ---------------- */

  function mountCoPilot(root) {
    let step = 'intro';
    let qIndex = 0;
    let answers = [];
    let queue = [];

    function start() {
      step = 'question';
      qIndex = 0;
      queue = PCPTSD5.items.map((t, i) => i);
      answers = [];
      render();
    }

    function answer(value) {
      answers[queue[qIndex]] = value;
      if (qIndex < queue.length - 1) { qIndex++; } else { step = 'result'; }
      render();
    }

    function back() {
      if (step === 'question' && qIndex > 0) { qIndex--; render(); }
      else if (step === 'question' && qIndex === 0) { step = 'intro'; render(); }
    }

    function renderIntro() {
      root.innerHTML = `
        <span class="instrument-tag tag-copilot">Ongoing Monitoring</span>
        <h2>Co-Pilot Assessment</h2>
        <p>A co-pilot doesn't panic at one blip on the instrument panel — it watches for drift over time. This isn't
        about diagnosing a single moment; it's a quick, repeatable check-in for how you're handling ongoing stress
        or past experiences that may still be weighing on you. 5 short questions, about 90 seconds. Take it every
        few months alongside your Vitality Baseline.</p>
        <button class="start-btn co-btn" id="cp-start">Start the check-in</button>
        <div class="disclaimer">Uses the PC-PTSD-5, developed by the VA National Center for PTSD. This is a
        screening tool, not a diagnosis — a positive result is a prompt to talk to a professional, not a
        conclusion.</div>
      `;
      root.querySelector('#cp-start').addEventListener('click', start);
    }

    function renderQuestion() {
      const i = queue[qIndex];
      const qText = PCPTSD5.items[i];
      const total = queue.length;
      const pct = Math.round((qIndex / total) * 100);

      root.innerHTML = `
        <div class="progress-row">
          <div class="progress-track"><div class="progress-fill" style="width:${pct}%;background:var(--teal)"></div></div>
          <div class="progress-label">${qIndex + 1} / ${total}</div>
        </div>
        <div class="question-sub">${PCPTSD5.preamble}</div>
        <div class="question">${qText}</div>
        <div class="options">
          <button class="opt-btn co" data-val="0">No</button>
          <button class="opt-btn co" data-val="1">Yes</button>
        </div>
        <div class="back-link" id="cp-back">← Back</div>
      `;
      root.querySelectorAll('.opt-btn').forEach(btn => {
        btn.addEventListener('click', () => answer(parseInt(btn.dataset.val, 10)));
      });
      root.querySelector('#cp-back').addEventListener('click', back);
    }

    function renderResult() {
      const score = sum(answers);
      const positive = score >= 3;
      const pct = Math.round((score / 5) * 100);

      root.innerHTML = `
        <div class="instrument-panel">
          <div class="instrument-readout">
            ${score} / 5 indicators present
            <span class="sub">${positive ? "Worth a closer look" : "Currently steady"}</span>
          </div>
          <div class="altimeter-track">
            <div class="altimeter-fill" style="width:${pct}%;background:${positive ? 'var(--amber)' : 'var(--teal)'}"></div>
          </div>
          <div class="altimeter-marks"><span>0</span><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span></div>
        </div>

        <p class="result-copy">
          ${positive
            ? "A score of 3 or more suggests it may be worth talking this through with a doctor or therapist — not because something is wrong with you, but because ongoing stress responses like these respond well to support."
            : "Your current answers don't suggest a strong pattern of stress-response symptoms right now. Keep checking in every few months — patterns can shift."}
        </p>

        <div class="cta-block">
          <p>Pair this check-in with your Vitality Baseline for a fuller picture over time.</p>
          <button class="primary-btn co-btn" id="cp-email">Get my Vitality Baseline (Form 7)</button>
        </div>

        <a class="outbound-link" href="https://deconstructingstigma.org/screenings" target="_blank" rel="noopener">
          Want a fuller clinical screening? Visit Deconstructing Stigma →
        </a>

        <div class="citation">
          PC-PTSD-5: developed by the U.S. Department of Veterans Affairs, National Center for PTSD. Public domain —
          free to reproduce. Screening only — not a diagnostic instrument.
        </div>
        <div class="back-link" id="cp-retake" style="margin-top:14px;">↻ Retake</div>
      `;

      root.querySelector('#cp-email').addEventListener('click', () => {
        promptForEmail(email => {
          submitToConvertKit(email, {
            ptsd_score: score
          }).then(result => {
            if (result.ok) {
              window.alert('Thanks — check your inbox for your Vitality Baseline (Form 7).');
            } else {
              window.alert("We couldn't confirm that went through. Please try again, or email us directly if it keeps happening.");
            }
          });
        });
      });
      root.querySelector('#cp-retake').addEventListener('click', () => { step = 'intro'; render(); });
    }

    function render() {
      if (step === 'intro') renderIntro();
      else if (step === 'question') renderQuestion();
      else renderResult();
    }

    render();
  }

  /* ---------------- Init on DOM ready ---------------- */
  document.addEventListener('DOMContentLoaded', function () {
    const ceMount = document.getElementById('iwosan-checkengine-mount');
    if (ceMount) mountCheckEngine(ceMount);

    const cpMount = document.getElementById('iwosan-copilot-mount');
    if (cpMount) mountCoPilot(cpMount);
  });
})();
