/* BoostronixX — lead form submission + validation (project-core).
 *
 * Binds in the CAPTURE phase and stops propagation, so it pre-empts the
 * theme's old "simulate + redirect" submit handlers without editing them.
 * If this plugin is deactivated, the forms fall back to that old behaviour.
 *
 * Responsibilities:
 *   - strict client-side validation with inline, per-field messages
 *     (HTML5 type=email alone accepts "abc@gmail" — no TLD required)
 *   - intl-tel-input on every phone field: country auto-selected from the
 *     visitor's IP, placeholder + length/format rules supplied by the library
 *   - AJAX submit to the bx_submit_lead endpoint
 */
(function () {
  if (!window.BX_FORMS) return;

  var SOURCES = {
    contactForm: 'contact',
    blogContact: 'blog-contact',
    hpForm: 'home-popup',
    bpForm: 'blog-modal',
    newsForm: 'newsletter'
  };

  /* Requires a dot-separated domain ending in a 2+ letter TLD, so "abc@gmail"
   * and "abc@x.y" are rejected. Deliberately stricter than the HTML5 spec. */
  var EMAIL_RE = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?(?:\.[A-Za-z0-9](?:[A-Za-z0-9-]*[A-Za-z0-9])?)*\.[A-Za-z]{2,}$/;

  var FALLBACK_CC = (window.BX_FORMS.defaultCountry || 'in').toLowerCase();

  /* ============================================================
   * Country lookup by IP (free endpoints, cached in localStorage)
   * ========================================================== */
  var GEO_KEY = 'bx_iti_cc';
  var GEO_TTL = 7 * 24 * 60 * 60 * 1000; // 7 days

  function cachedCountry() {
    try {
      var o = JSON.parse(localStorage.getItem(GEO_KEY) || 'null');
      if (o && o.cc && (Date.now() - o.t) < GEO_TTL) return o.cc;
    } catch (e) {}
    return null;
  }

  function storeCountry(cc) {
    try { localStorage.setItem(GEO_KEY, JSON.stringify({ cc: cc, t: Date.now() })); } catch (e) {}
  }

  function fetchJson(url, ms) {
    var ctl = typeof AbortController !== 'undefined' ? new AbortController() : null;
    var timer = setTimeout(function () { if (ctl) ctl.abort(); }, ms || 2500);
    var opts = { mode: 'cors', credentials: 'omit' };
    if (ctl) opts.signal = ctl.signal;
    return fetch(url, opts)
      .then(function (r) { if (!r.ok) throw new Error('bad status'); return r.json(); })
      .then(
        function (d) { clearTimeout(timer); return d; },
        function (e) { clearTimeout(timer); throw e; }
      );
  }

  /* Ordered fastest-first. ipapi.co is last because its free tier rate-limits
   * hard (429s from a shared office IP), and every second on this list is a
   * second the field sits on the "unknown country" globe. */
  var ENDPOINTS = [
    { url: 'https://ipwho.is/', pick: function (d) { return d && d.country_code; } },
    { url: 'https://get.geojs.io/v1/ip/country.json', pick: function (d) { return d && d.country; } },
    { url: 'https://ipapi.co/json/', pick: function (d) { return d && d.country_code; } }
  ];

  var ENDPOINT_TIMEOUT = 1500;
  var OVERALL_DEADLINE = 2500;

  /* Resolved once per page load and shared by every phone field. */
  var countryPromise = null;
  function resolveCountry() {
    if (countryPromise) return countryPromise;
    var hit = cachedCountry();
    if (hit) {
      countryPromise = Promise.resolve(hit);
      return countryPromise;
    }
    var chain = new Promise(function (resolve) {
      var i = 0;
      (function next() {
        if (i >= ENDPOINTS.length) { resolve(FALLBACK_CC); return; }
        var ep = ENDPOINTS[i++];
        fetchJson(ep.url, ENDPOINT_TIMEOUT)
          .then(function (d) {
            var cc = ep.pick(d);
            if (!cc) { next(); return; }
            cc = String(cc).toLowerCase();
            storeCountry(cc);
            resolve(cc);
          })
          .catch(function () { next(); });
      })();
    });
    // Hard deadline: whatever happens upstream, the field must not be left
    // showing the globe. Falls back to the configured default country.
    var deadline = new Promise(function (resolve) {
      setTimeout(function () { resolve(FALLBACK_CC); }, OVERALL_DEADLINE);
    });
    countryPromise = Promise.race([chain, deadline]);
    return countryPromise;
  }

  /* ============================================================
   * intl-tel-input
   * ========================================================== */
  function initPhone(input) {
    if (!window.intlTelInput || input.__iti) return;

    var wrap = input.closest('.field, .bxfld');
    if (wrap) {
      wrap.classList.add('bx-iti-field');
      // .field already has a "permanently floated label" state in the theme
      // (used by the selects) — reuse it so the phone field matches exactly.
      if (wrap.classList.contains('field')) wrap.classList.add('float');
    }

    // Option names below are v29's. The older `initialCountry:'auto'` +
    // `geoIpLookup` pair no longer exists — the lookup is now a function
    // returning a Promise<iso2>, and it only runs while `initialCountry` is
    // empty. Likewise `autoPlaceholder` is now `placeholderNumberPolicy`.
    // The library caches the resolved country across every instance on the
    // page, so this fires once no matter how many phone fields there are.
    input.__iti = window.intlTelInput(input, {
      initialCountry: '',
      initialCountryLookup: function () { return resolveCountry(); },
      // Always show an example number for the selected country as the
      // placeholder, refreshed whenever the country changes.
      placeholderNumberPolicy: 'AGGRESSIVE',
      // Shows the dial code beside the flag and restricts typing to digits
      // valid for that country (length capped per country by libphonenumber).
      separateDialCode: true,
      strictMode: true,
      countrySearch: true,
      formatAsYouType: true,
      uiTranslations: { searchPlaceholder: 'Search country' }
    });

    // Clear a stale error as soon as the visitor edits the field.
    input.addEventListener('input', function () { clearError(input); });
    input.addEventListener('countrychange', function () { clearError(input); });
  }

  function initAllPhones(root) {
    var tels = (root || document).querySelectorAll('input[type="tel"]');
    [].forEach.call(tels, initPhone);
  }

  /* ============================================================
   * Inline validation
   * ========================================================== */
  function fieldWrap(el) {
    return el.closest('.field, .bxfld') || el.parentElement;
  }

  function clearError(el) {
    var wrap = fieldWrap(el);
    if (!wrap) return;
    wrap.classList.remove('bx-invalid');
    el.classList.remove('bx-invalid');
    var msg = wrap.querySelector('.bx-field-error');
    if (msg) msg.remove();
  }

  function clearAllErrors(form) {
    [].forEach.call(form.querySelectorAll('.bx-field-error'), function (n) { n.remove(); });
    [].forEach.call(form.querySelectorAll('.bx-invalid'), function (n) { n.classList.remove('bx-invalid'); });
    [].forEach.call(form.querySelectorAll('.bx-invalid-check'), function (n) { n.classList.remove('bx-invalid-check'); });
  }

  function setError(el, message) {
    var wrap = fieldWrap(el);
    if (!wrap) return;
    if (el.type === 'checkbox') {
      wrap.classList.add('bx-invalid-check');
    } else {
      wrap.classList.add('bx-invalid');
      el.classList.add('bx-invalid');
    }
    if (!wrap.querySelector('.bx-field-error')) {
      var span = document.createElement('span');
      span.className = 'bx-field-error';
      span.setAttribute('role', 'alert');
      span.textContent = message;
      wrap.appendChild(span);
    }
  }

  function labelFor(el) {
    var wrap = fieldWrap(el);
    var lab = wrap && wrap.querySelector('label');
    var txt = lab ? lab.textContent : (el.name || 'This field');
    return txt.replace(/\*/g, '').trim() || 'This field';
  }

  function validate(form) {
    clearAllErrors(form);
    var firstBad = null;

    function bad(el, msg) {
      setError(el, msg);
      if (!firstBad) firstBad = el;
    }

    var controls = form.querySelectorAll('input, select, textarea');
    [].forEach.call(controls, function (el) {
      if (el.name === 'bx_hp' || el.type === 'hidden' || el.disabled) return;

      var val = (el.value || '').trim();

      if (el.type === 'checkbox') {
        if (el.required && !el.checked) bad(el, 'Please tick this box to continue.');
        return;
      }

      if (el.type === 'email') {
        if (!val) {
          if (el.required) bad(el, 'Please enter your email address.');
          return;
        }
        if (!EMAIL_RE.test(val)) {
          bad(el, 'Enter a complete email address, e.g. name@example.com');
        }
        return;
      }

      if (el.type === 'tel') {
        var iti = el.__iti;
        if (!val) {
          if (el.required) bad(el, 'Please enter your phone number.');
          return;
        }
        if (iti && typeof iti.isValidNumber === 'function' && !iti.isValidNumber()) {
          // v29 renamed getSelectedCountryData() -> getSelectedCountry().
          var cd = iti.getSelectedCountry ? iti.getSelectedCountry() : null;
          bad(el, 'Enter a valid ' + ((cd && cd.name) ? cd.name + ' ' : '') + 'phone number.');
        }
        return;
      }

      if (el.required && !val) {
        bad(el, 'Please enter your ' + labelFor(el).toLowerCase() + '.');
      }
    });

    if (firstBad) {
      try { firstBad.focus({ preventScroll: true }); } catch (e) { firstBad.focus(); }
      var wrap = fieldWrap(firstBad);
      if (wrap && wrap.scrollIntoView) wrap.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    return !firstBad;
  }

  /* ============================================================
   * Wire up
   * ========================================================== */
  initAllPhones(document);

  Object.keys(SOURCES).forEach(function (id) {
    var form = document.getElementById(id);
    if (!form) return;

    // Honeypot — appended off-screen; real users never fill it.
    var hp = document.createElement('input');
    hp.type = 'text';
    hp.name = 'bx_hp';
    hp.tabIndex = -1;
    hp.autocomplete = 'off';
    hp.setAttribute('aria-hidden', 'true');
    hp.style.cssText = 'position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;opacity:0';
    form.appendChild(hp);

    // Clear a field's error as soon as it is edited.
    form.addEventListener('input', function (e) {
      if (e.target && e.target.classList.contains('bx-invalid')) clearError(e.target);
    });
    form.addEventListener('change', function (e) {
      if (e.target && e.target.type === 'checkbox') {
        var w = fieldWrap(e.target);
        if (w) w.classList.remove('bx-invalid-check');
        var m = w && w.querySelector('.bx-field-error');
        if (m) m.remove();
      }
    });

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();

      if (!validate(form)) return;

      var btn = form.querySelector('[type=submit]');
      var spin = form.querySelector('.spinner');
      var labels = form.querySelectorAll('[id$="Label"]');
      function busy(on) {
        if (btn) btn.disabled = on;
        if (spin) spin.classList.toggle('hidden', !on);
        [].forEach.call(labels, function (l) { l.classList.toggle('hidden', on); });
      }
      function fail(res) {
        busy(false);
        var msg = (res && res.data && res.data.message) || 'Something went wrong. Please try again.';
        var el = form.querySelector('#formError, #bcError, [role=alert]:not(.bx-field-error)');
        if (el) { el.textContent = msg; el.classList.remove('hidden'); }
        else { alert(msg); }
      }

      busy(true);
      var fd = new FormData(form);

      // Submit the full international number (E.164), not what was typed.
      var tel = form.querySelector('input[type="tel"]');
      if (tel && tel.__iti && tel.value.trim()) {
        var full = tel.__iti.getNumber();
        if (full) fd.set(tel.name || 'phone', full);
      }

      fd.append('action', 'bx_submit_lead');
      fd.append('nonce', window.BX_FORMS.nonce);
      fd.append('source', SOURCES[id]);
      fd.append('page', location.href);

      fetch(window.BX_FORMS.ajaxUrl, { method: 'POST', body: fd, credentials: 'same-origin' })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (!res || !res.success) { fail(res); return; }
          try {
            var nameEl = form.querySelector('[name=name]');
            if (nameEl) sessionStorage.setItem('bx_name', nameEl.value.trim());
          } catch (err) {}

          if (id === 'newsForm') {
            var ok = document.getElementById('newsOk');
            if (ok) { ok.classList.remove('hidden'); ok.style.display = 'flex'; }
            var em = form.querySelector('[name=email]');
            if (em) em.value = '';
            busy(false);
          } else {
            window.location.href = window.BX_FORMS.thankYou;
          }
        })
        .catch(function () { fail(); });
    }, true); // capture
  });
})();
