/* BoostronixX — FAQ page assistant (project-core).
 *
 * Two jobs, both additive: the existing chip filter and search in app.js keep
 * working untouched.
 *
 *   1. Autotyping placeholder on #faqSearch — cycles real example questions.
 *   2. When the built-in filter finds no matching FAQ, ask the site's own
 *      knowledge base and show a grounded answer above the empty state.
 *
 * The endpoint never returns an error status, so there is no error path to
 * render here: it answers, or it offers links, or it says nothing and the page
 * behaves exactly as it did before any of this existed.
 */
(function () {
  if (!window.BX_FAQ) return;

  var input = document.getElementById('faqSearch');
  var empty = document.getElementById('faqEmpty');
  var list = document.getElementById('faqList');
  if (!input || !empty || !list) return;

  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ============================================================
   * 1. Autotyping placeholder
   * ========================================================== */
  (function typewriter() {
    var examples = (BX_FAQ.examples || []).filter(Boolean);
    if (!examples.length) return;

    var base = input.getAttribute('placeholder') || '';

    // Reduced motion: no animation, just a static example.
    if (reduce) {
      input.setAttribute('placeholder', examples[0]);
      return;
    }

    var i = 0, pos = 0, deleting = false, timer = null, stopped = false;

    function stop() {
      stopped = true;
      clearTimeout(timer);
      input.setAttribute('placeholder', base);
    }

    // The placeholder is invisible the moment there is text or focus, so
    // there is no point animating it then — and it would waste a timer.
    input.addEventListener('focus', stop, { once: true });

    function tick() {
      if (stopped) return;
      var word = examples[i];

      if (!deleting) {
        pos++;
        if (pos > word.length) {
          deleting = true;
          timer = setTimeout(tick, 1600); // hold the finished sentence
          return;
        }
      } else {
        pos--;
        if (pos <= 0) {
          deleting = false;
          i = (i + 1) % examples.length;
          timer = setTimeout(tick, 260);
          return;
        }
      }

      input.setAttribute('placeholder', word.slice(0, pos) + (deleting ? '' : '│'));
      timer = setTimeout(tick, deleting ? 28 : 55);
    }

    timer = setTimeout(tick, 900);
  })();

  /* ============================================================
   * 2. Grounded answer when nothing matches
   * ========================================================== */
  var panel = document.createElement('div');
  panel.id = 'faqAi';
  panel.className = 'faq-ai hidden';
  panel.setAttribute('aria-live', 'polite');
  list.parentNode.insertBefore(panel, empty);

  var lastQuery = '';
  var seq = 0;
  var cache = {};

  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
    });
  }

  /* "No matching questions" and an answer are contradictory, so only one of
   * them is ever on screen. app.js owns #faqEmpty normally; we take it over
   * while we have something to show and hand it straight back afterwards,
   * recomputing from the same observable app.js uses (are any .faq rows still
   * displayed) so the two can never disagree. */
  function releaseEmpty() {
    var anyVisible = [].some.call(document.querySelectorAll('.faq'), function (f) {
      return f.style.display !== 'none';
    });
    empty.classList.toggle('hidden', anyVisible);
  }

  function claimEmpty() {
    empty.classList.add('hidden');
  }

  function hide() {
    clearInterval(thinkTimer);
    panel.className = 'faq-ai hidden';
    panel.innerHTML = '';
    releaseEmpty();
  }

  /* The wait is short but it is the one moment the visitor is watching, so it
   * gets a shimmering skeleton of the answer that is about to appear, plus a
   * status line that narrates what is actually happening. */
  var THINKING_STEPS = [
    'Reading our FAQs',
    'Checking the service pages',
    'Looking through the blog',
    'Putting an answer together'
  ];
  var thinkTimer = null;

  function renderThinking() {
    // Claim it up front: app.js has just revealed the empty state, and we are
    // about to replace it. Waiting for the response would flash "no matching
    // questions" for a moment before the answer lands.
    claimEmpty();
    clearInterval(thinkTimer);

    panel.className = 'faq-ai';
    panel.innerHTML =
      '<div class="faq-ai-card faq-ai-thinking">' +
        '<p class="faq-ai-kicker">' +
          '<span class="faq-ai-orb"></span>' +
          '<span class="faq-ai-step">' + esc(THINKING_STEPS[0]) + '</span>' +
        '</p>' +
        '<div class="faq-ai-skeleton">' +
          '<span style="width:96%"></span>' +
          '<span style="width:88%"></span>' +
          '<span style="width:62%"></span>' +
        '</div>' +
      '</div>';

    if (reduce) return;

    var step = 0;
    var label = panel.querySelector('.faq-ai-step');
    thinkTimer = setInterval(function () {
      if (!label || !label.isConnected) { clearInterval(thinkTimer); return; }
      step = (step + 1) % THINKING_STEPS.length;
      label.style.opacity = '0';
      setTimeout(function () {
        label.textContent = THINKING_STEPS[step];
        label.style.opacity = '';
      }, 180);
    }, 1100);
  }

  function sourceList(sources) {
    if (!sources || !sources.length) return '';
    return (
      '<ul class="faq-ai-sources">' +
      sources
        .map(function (s) {
          return '<li><a href="' + esc(s.url) + '">' + esc(s.title) + '</a></li>';
        })
        .join('') +
      '</ul>'
    );
  }

  function render(res) {
    if (!res || res.status === 'none') {
      hide();
      return;
    }

    // We have something to show, so the empty state stays suppressed.
    clearInterval(thinkTimer);
    claimEmpty();
    panel.className = 'faq-ai';

    if (res.status === 'answer') {
      panel.innerHTML =
        '<div class="faq-ai-card">' +
          '<p class="faq-ai-kicker">Answer</p>' +
          '<p class="faq-ai-body">' + esc(res.answer) + '</p>' +
          (res.sources && res.sources.length
            ? '<p class="faq-ai-more">More on this:</p>' + sourceList(res.sources)
            : '') +
          '<p class="faq-ai-foot">Not quite it? <a href="' + esc(BX_FAQ.contact) + '">Ask us directly</a>.</p>' +
        '</div>';
      return;
    }

    // status === 'links' — no model available, but the site does cover this.
    panel.innerHTML =
      '<div class="faq-ai-card">' +
        '<p class="faq-ai-kicker">This might help</p>' +
        sourceList(res.sources) +
        '<p class="faq-ai-foot">Still stuck? <a href="' + esc(BX_FAQ.contact) + '">Ask us directly</a>.</p>' +
      '</div>';
  }

  function ask(q) {
    if (cache[q]) {
      render(cache[q]);
      return;
    }

    var mine = ++seq;
    renderThinking();

    var body = new FormData();
    body.append('action', 'bx_faq_ask');
    body.append('q', q);

    fetch(BX_FAQ.ajaxUrl, { method: 'POST', body: body, credentials: 'same-origin' })
      .then(function (r) { return r.json(); })
      .then(function (res) {
        if (mine !== seq) return; // a newer query has taken over
        var data = res && res.success ? res.data : { status: 'none' };
        cache[q] = data;
        render(data);
      })
      .catch(function () {
        // Deliberately silent: fall back to the page's own empty state.
        if (mine === seq) hide();
      });
  }

  // The chip/search filter in app.js toggles #faqEmpty. Watch it rather than
  // re-implementing the matching, so the two can never disagree.
  var debounce = null;
  function onSearchState() {
    var q = (input.value || '').trim();

    if (q.length < 3) {
      lastQuery = '';
      seq++;
      hide();
      return;
    }

    var noMatches = !empty.classList.contains('hidden');
    if (!noMatches) {
      // The visitor can see real FAQ matches; nothing to add.
      lastQuery = '';
      seq++;
      hide();
      return;
    }

    if (q === lastQuery) return;
    lastQuery = q;
    ask(q);
  }

  input.addEventListener('input', function () {
    clearTimeout(debounce);
    debounce = setTimeout(onSearchState, 450);
  });

  // Chips change what counts as "no matches" too.
  [].forEach.call(document.querySelectorAll('.chip'), function (c) {
    c.addEventListener('click', function () {
      clearTimeout(debounce);
      debounce = setTimeout(onSearchState, 120);
    });
  });
})();
