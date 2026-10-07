/**
 * Iwosan Journeys — Wellness Self-Assessments
 * "The Quiet Signals" (PHQ-9 + GAD-7, mood & anxiety) — lives on the Men's Health page,
 *   as a third section alongside the existing physical Check-Engine checklist and the
 *   partner-facing Co-Pilot guide (both untouched, unrelated to this file).
 * PTSD Screening (PC-PTSD-5) — lives on the Mental Health page, standalone.
 *
 * Enqueue this file only on pages that use it.
 * Mount points expected in page markup:
 *   #iwosan-quietsignals-mount   (Men's Health page)
 *   #iwosan-ptsd-mount        (Mental Health page)
 * Each mount renders independently — they do not share state, and a page only needs
 * to include whichever mount(s) are relevant to it.
 *
 * Email capture: wired to ConvertKit (Kit) form via the shared MenoWell form, ID 9372376.
 */

(function () {
  'use strict';

  // Confirmed from the live MenoWell embed (simplymenowell.com): a classic Kit HTML form post,
  // not the newer JS-embed/data-uid pattern. Same form ID used across the JourneyWell brand family.
  const CONVERTKIT_FORM_ID = '9372376';
  const CONVERTKIT_ENDPOINT = `https://app.kit.com/forms/${CONVERTKIT_FORM_ID}/subscriptions`;

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
   * Submits an email (plus optional assessment scores) to the shared Kit form (ID 9372376).
   * Custom fields confirmed in the Kit dashboard: gad7_score, phq9_score, ptsd_score.
   *
   * Posts the way Kit's own embed does (Accept: application/json) so Kit's answer can be read:
   *  - "success"     -> resolves { ok: true }
   *  - "quarantined" -> Kit's spam protection holds the signup until the person completes a quick
   *                     security check; it is shown in a pop-up and we resolve { ok: true } ONLY
   *                     after Kit confirms it (resolves { ok: false } if the pop-up is closed)
   *  - anything else (HTTP error, network error, timeout, rejected) -> { ok: false, reason }
   */
  function showKitGuard(url) {
    return new Promise(resolve => {
      const overlay = document.createElement('div');
      overlay.style.cssText = 'position:fixed;left:0;top:0;right:0;bottom:0;z-index:99999;background:rgba(10,31,68,0.6);display:flex;align-items:center;justify-content:center;padding:16px;';
      const box = document.createElement('div');
      box.setAttribute('role', 'dialog');
      box.setAttribute('aria-modal', 'true');
      box.setAttribute('aria-label', 'Security check');
      box.style.cssText = 'position:relative;background:#fff;border-radius:10px;max-width:100%;max-height:100%;overflow:auto;box-shadow:0 10px 40px rgba(0,0,0,0.3);';
      const close = document.createElement('button');
      close.type = 'button';
      close.setAttribute('aria-label', 'Close');
      close.textContent = '×';
      close.style.cssText = 'position:absolute;right:6px;top:4px;z-index:2;width:44px;height:44px;border:none;background:transparent;font-size:28px;line-height:1;cursor:pointer;color:#0A1F44;';
      const frame = document.createElement('iframe');
      frame.src = url;
      frame.title = 'Security check';
      frame.style.cssText = 'display:block;border:0;width:min(420px,92vw);height:300px;max-width:100%;';
      box.appendChild(close);
      box.appendChild(frame);
      overlay.appendChild(box);
      document.body.appendChild(overlay);

      function finish(result) {
        window.removeEventListener('message', onMsg);
        if (overlay.parentNode) { overlay.parentNode.removeChild(overlay); }
        resolve(result);
      }
      function onMsg(ev) {
        if (ev.source !== frame.contentWindow || !ev.data) { return; }
        if (ev.data.name === 'ckjs:guard:size' && ev.data.height) {
          frame.style.height = Math.min(ev.data.height, window.innerHeight - 40) + 'px';
          if (ev.data.width) { frame.style.width = Math.min(ev.data.width, window.innerWidth - 32) + 'px'; }
        }
        if (ev.data.name === 'ckjs:guard:confirmed') { finish({ ok: true }); }
      }
      window.addEventListener('message', onMsg);
      close.onclick = () => finish({ ok: false, reason: 'guard_closed' });
      close.focus();
    });
  }

  function submitToConvertKit(email, fields) {
    const body = new FormData();
    body.append('email_address', email);
    Object.keys(fields || {}).forEach(key => {
      body.append(`fields[${key}]`, fields[key]);
    });
    body.append('referrer', document.referrer || '');
    body.append('host', window.location.href);
    body.append('search', window.location.search);
    body.append('ckjs_version', '6');

    const controller = new AbortController();
    const timeout = setTimeout(() => controller.abort(), 15000);

    return fetch(CONVERTKIT_ENDPOINT, {
      method: 'POST',
      headers: { 'Accept': 'application/json' },
      body,
      signal: controller.signal
    }).then(response => {
      clearTimeout(timeout);
      if (!response.ok) { throw new Error('HTTP ' + response.status); }
      return response.json();
    }).then(data => {
      if (data && data.status === 'success') { return { ok: true }; }
      if (data && data.status === 'quarantined' && typeof data.url === 'string' && /^https:\/\/([a-z0-9-]+\.)?kit\.com\//.test(data.url)) {
        return showKitGuard(data.url);
      }
      console.error('Kit did not accept the signup:', data);
      return { ok: false, reason: 'kit_rejected' };
    }).catch(err => {
      clearTimeout(timeout);
      const reason = err.name === 'AbortError' ? 'timeout' : 'network_error';
      console.error('Kit submission failed:', reason, err);
      return { ok: false, reason };
    });
  }

  function promptForEmail(onSubmit) {
    const email = window.prompt('Enter your email to get a copy of your results:');
    if (email && email.includes('@')) {
      onSubmit(email);
    }
  }

  /* ---------------- "The Quiet Signals" Assessment (Men's Health, PHQ-9 + GAD-7) ---------------- */

  function mountQuietSignals(root) {
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
        <span class="instrument-tag tag-quietsignals">Mood &amp; Anxiety Check</span>
        <h2>The Quiet Signals</h2>
        <p>The Check-Engine checklist above covers what you can feel physically. This one looks at what's
        running underneath — mood and anxiety, the parts of the engine that don't always throw an obvious
        warning light. 16 short questions, about 3 minutes.</p>
        <button class="start-btn" id="qs-start">Start the assessment</button>
        <div class="disclaimer">Uses the PHQ-9 and GAD-7, standard clinical screening tools. This is a self-check,
        not a diagnosis — your results are something to bring to a conversation with a doctor, not a replacement
        for one.</div>
      `;
      root.querySelector('#qs-start').addEventListener('click', start);
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
        <div class="back-link" id="qs-back">← Back</div>
      `;
      root.querySelectorAll('.opt-btn').forEach(btn => {
        btn.addEventListener('click', () => answer(parseInt(btn.dataset.val, 10)));
      });
      root.querySelector('#qs-back').addEventListener('click', back);
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
          <button class="primary-btn" id="qs-email">Email me my results</button>
        </div>

        <a class="outbound-link" href="https://deconstructingstigma.org/screenings" target="_blank" rel="noopener">
          Want the full clinical screening experience? Take it at Deconstructing Stigma →
        </a>

        <div class="citation">
          PHQ-9 and GAD-7: Pfizer Inc. Reproduced under the free-use terms published at phqscreeners.com.
          Screening only — not a diagnostic instrument.
        </div>
        <div class="back-link" id="qs-retake" style="margin-top:14px;">↻ Retake</div>
      `;

      root.querySelector('#qs-email').addEventListener('click', () => {
        promptForEmail(email => {
          submitToConvertKit(email, {
            phq9_score: phqScore,
            gad7_score: gadScore
          }).then(result => {
            if (result.ok) {
              window.alert('Thanks — check your inbox shortly.');
            } else {
              window.alert('Something went wrong. Please try again, or email info@journeywellglobal.com.');
            }
          });
        });
      });
      root.querySelector('#qs-retake').addEventListener('click', () => { step = 'intro'; render(); });
    }

    function render() {
      if (step === 'intro') renderIntro();
      else if (step === 'question') renderQuestion();
      else renderResult();
    }

    render();
  }

  /* ---------------- PTSD Screening (Mental Health page, PC-PTSD-5) ---------------- */

  function mountPTSD(root) {
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
        <span class="instrument-tag tag-ptsd">Ongoing Monitoring</span>
        <h2>PTSD Screening</h2>
        <p>Some experiences leave a mark that keeps showing up long after the moment has passed — in sleep, in
        mood, in how safe the world feels. This is a quick, repeatable check-in for whether past events may still
        be affecting you day to day. 5 short questions, about 90 seconds.</p>
        <button class="start-btn co-btn" id="pt-start">Start the check-in</button>
        <div class="disclaimer">Uses the PC-PTSD-5, developed by the VA National Center for PTSD. This is a
        screening tool, not a diagnosis — a positive result is a prompt to talk to a professional, not a
        conclusion.</div>
      `;
      root.querySelector('#pt-start').addEventListener('click', start);
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
        <div class="back-link" id="pt-back">← Back</div>
      `;
      root.querySelectorAll('.opt-btn').forEach(btn => {
        btn.addEventListener('click', () => answer(parseInt(btn.dataset.val, 10)));
      });
      root.querySelector('#pt-back').addEventListener('click', back);
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
          <p>Want a copy of your results to bring to a conversation with a provider?</p>
          <button class="primary-btn co-btn" id="pt-email">Email me my results</button>
        </div>

        <a class="outbound-link" href="https://deconstructingstigma.org/screenings" target="_blank" rel="noopener">
          Want a fuller clinical screening? Visit Deconstructing Stigma →
        </a>

        <div class="citation">
          PC-PTSD-5: developed by the U.S. Department of Veterans Affairs, National Center for PTSD. Public domain —
          free to reproduce. Screening only — not a diagnostic instrument.
        </div>
        <div class="back-link" id="pt-retake" style="margin-top:14px;">↻ Retake</div>
      `;

      root.querySelector('#pt-email').addEventListener('click', () => {
        promptForEmail(email => {
          submitToConvertKit(email, {
            ptsd_score: score
          }).then(result => {
            if (result.ok) {
              window.alert('Thanks — check your inbox shortly.');
            } else {
              window.alert('Something went wrong. Please try again, or email info@journeywellglobal.com.');
            }
          });
        });
      });
      root.querySelector('#pt-retake').addEventListener('click', () => { step = 'intro'; render(); });
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
    const quietSignalsMount = document.getElementById('iwosan-quietsignals-mount');
    if (quietSignalsMount) mountQuietSignals(quietSignalsMount);

    const ptsdMount = document.getElementById('iwosan-ptsd-mount');
    if (ptsdMount) mountPTSD(ptsdMount);
  });
})();

(function () {
  'use strict';
  document.addEventListener('DOMContentLoaded', function () {
    const configs = [
      { listId: 'checkengine-checklist', ctaId: 'checkengine-cta', threshold: 2 },
      { listId: 'copilot-checklist', ctaId: 'copilot-cta', threshold: 2 }
    ];

    configs.forEach(cfg => {
      const list = document.getElementById(cfg.listId);
      const cta = document.getElementById(cfg.ctaId);
      if (!list || !cta) return;

      cta.classList.add('ij-cta-highlight');
      const items = list.querySelectorAll('li');

      function updateCta() {
        const checkedCount = list.querySelectorAll('li.is-checked').length;
        cta.classList.toggle('is-active', checkedCount >= cfg.threshold);
      }

      items.forEach(item => {
        item.setAttribute('role', 'checkbox');
        item.setAttribute('aria-checked', 'false');
        item.setAttribute('tabindex', '0');

        function toggle() {
          const nowChecked = !item.classList.contains('is-checked');
          item.classList.toggle('is-checked', nowChecked);
          item.setAttribute('aria-checked', String(nowChecked));
          updateCta();
        }

        item.addEventListener('click', toggle);
        item.addEventListener('keydown', function (e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            toggle();
          }
        });
      });
    });
  });
})();
