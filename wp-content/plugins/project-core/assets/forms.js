/* BoostronixX — lead form submission (project-core).
 * Binds in the CAPTURE phase and stops propagation, so it pre-empts the
 * theme's old "simulate + redirect" submit handlers without editing them.
 * If this plugin is deactivated, the forms fall back to that old behaviour. */
(function () {
  if (!window.BX_FORMS) return;

  var SOURCES = {
    contactForm: 'contact',
    blogContact: 'blog-contact',
    hpForm: 'home-popup',
    bpForm: 'blog-modal',
    newsForm: 'newsletter'
  };

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

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      e.stopImmediatePropagation();

      if (form.checkValidity && !form.checkValidity()) {
        form.reportValidity();
        var fi = form.querySelector(':invalid');
        if (fi) fi.focus();
        return;
      }

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
        var el = form.querySelector('#formError, #bcError, [role=alert]');
        if (el) { el.textContent = msg; el.classList.remove('hidden'); }
        else { alert(msg); }
      }

      busy(true);
      var fd = new FormData(form);
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
