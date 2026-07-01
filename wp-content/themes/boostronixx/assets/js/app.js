/* =============================================================
 * BoostronixX — theme behaviour (app.js)
 * Extracted from the original index.html inline scripts; all
 * behaviours are guarded (they no-op when their elements are
 * absent), so this single file is safe to load site-wide.
 * Page-specific behaviours from the other pages are appended below.
 * "assets/img/" paths and the thank-you URL are injected from PHP
 * via window.BX (see inc/enqueue.php).
 * ============================================================= */
var BXIMG = (window.BX && window.BX.img) || "https://boostronixx.s3.ap-south-1.amazonaws.com/images/";
var BXTHANKYOU = (window.BX && window.BX.urls && window.BX.urls.thankYou) || "/thank-you/";

document.addEventListener("DOMContentLoaded", function () {
        var bar = document.getElementById("hdrbar");
        window.addEventListener("scroll", function () {
          if (bar)
            bar.classList.toggle(
              "shadow-[0_8px_30px_-12px_rgba(0,0,0,.18)]",
              window.scrollY > 20,
            );
        });

        var mm = document.getElementById("mobileMenu"),
          panel = document.getElementById("menuPanel"),
          menuBtn = document.getElementById("menuBtn");
        function openMenu() {
          if (menuBtn) menuBtn.setAttribute("aria-expanded", "true");
          mm.classList.remove("hidden");
          requestAnimationFrame(function () {
            panel.classList.remove("translate-x-full");
          });
          document.body.style.overflow = "hidden";
        }
        function closeMenu() {
          if (menuBtn) menuBtn.setAttribute("aria-expanded", "false");
          panel.classList.add("translate-x-full");
          document.body.style.overflow = "";
          setTimeout(function () {
            mm.classList.add("hidden");
          }, 300);
        }
        if (menuBtn) menuBtn.addEventListener("click", openMenu);
        if (mm)
          [].forEach.call(mm.querySelectorAll("[data-close]"), function (e) {
            e.addEventListener("click", closeMenu);
          });

        // reveal
        var io = new IntersectionObserver(
          function (es) {
            es.forEach(function (e) {
              if (e.isIntersecting) {
                e.target.classList.add("in");
                io.unobserve(e.target);
              }
            });
          },
          { threshold: 0.12 },
        );
        [].forEach.call(document.querySelectorAll(".reveal"), function (e) {
          io.observe(e);
        });

        // count-up
        var cio = new IntersectionObserver(
          function (es) {
            es.forEach(function (e) {
              if (!e.isIntersecting) return;
              var el = e.target,
                to = +el.dataset.to,
                c = 0,
                s = Math.max(1, Math.round(to / 45));
              var t = setInterval(function () {
                c += s;
                if (c >= to) {
                  c = to;
                  clearInterval(t);
                }
                el.textContent = to >= 1000 ? c.toLocaleString("en-IN") : c;
              }, 20);
              cio.unobserve(el);
            });
          },
          { threshold: 0.2, rootMargin: "0px 0px -10% 0px" },
        );
        [].forEach.call(document.querySelectorAll(".count"), function (c) {
          cio.observe(c);
        });

        // heart beat when in view
        var hio = new IntersectionObserver(
          function (es) {
            es.forEach(function (e) {
              if (e.isIntersecting) {
                var h = e.target;
                setTimeout(function () {
                  h.classList.add("beat");
                }, 500);
                hio.unobserve(h);
              }
            });
          },
          { threshold: 0.6 },
        );
        [].forEach.call(document.querySelectorAll(".heart"), function (h) {
          hio.observe(h);
        });

        // SEO search — looping brand SERP animation (drives both the hero mini-SERP and the service mock)
        (function () {
          var brands = [
            {
              kw: "best vegan bags online",
              domain: "www.zouk.in",
              title: "Zouk — Proudly Indian, Vegan Bags",
              snippet:
                "Vegan handbags, laptop bags & wallets — proudly Indian, cruelty-free.",
              fav: (BXIMG + "souk-favicon.avif"),
              color: "#0fa3a3",
              bars: [24, 36, 30, 48, 58, 76, 94],
            },
            {
              kw: "online learning platform",
              domain: "www.pearson.com",
              title: "Pearson | Online Learning & Education",
              snippet:
                "Courses, eBooks and tools that help learners reach their goals.",
              fav: (BXIMG + "pearson-favicon.avif"),
              color: "#7c3aed",
              bars: [30, 26, 44, 38, 56, 72, 100],
            },
            {
              kw: "best luggage brand",
              domain: "www.mokobara.com",
              title: "Mokobara — Premium Luggage & Travel Gear",
              snippet:
                "Smart suitcases, backpacks and travel essentials, beautifully built.",
              fav: (BXIMG + "mokobara-favicon.avif"),
              color: "#c58b2b",
              bars: [18, 32, 42, 52, 62, 82, 96],
            },
            {
              kw: "premium loungewear",
              domain: "www.monrow.com",
              title: "Monrow — Everyday Premium Essentials",
              snippet:
                "Soft, sustainable wardrobe staples designed for daily comfort.",
              fav: (BXIMG + "monrow-favicon.avif"),
              color: "#d6457a",
              bars: [28, 40, 34, 52, 66, 80, 100],
            },
            {
              kw: "custom home builders",
              domain: "www.uniquedreambuilders.com",
              title: "Unique Dream Builders — Custom Homes",
              snippet:
                "Designing and building premium custom homes and dream spaces.",
              fav: (BXIMG + "unique-dream-builders-favicon.avif"),
              color: "#2e7d5b",
              bars: [22, 34, 46, 40, 64, 84, 92],
            },
          ];
          var reduce =
            window.matchMedia &&
            window.matchMedia("(prefers-reduced-motion:reduce)").matches;
          function hexA(hex, a) {
            var n = parseInt(hex.slice(1), 16);
            return (
              "rgba(" +
              ((n >> 16) & 255) +
              "," +
              ((n >> 8) & 255) +
              "," +
              (n & 255) +
              "," +
              a +
              ")"
            );
          }
          function sleep(ms) {
            return new Promise(function (r) {
              setTimeout(r, ms);
            });
          }

          function runSerp(typeEl) {
            if (!typeEl) return;
            var mock =
              typeEl.closest(".mock") ||
              (function () {
                var el = typeEl;
                while (el && el !== document.body) {
                  if (
                    el.querySelector('[id^="serpCard"]') &&
                    el.querySelector(".bar")
                  )
                    return el;
                  el = el.parentElement;
                }
                return null;
              })();
            if (!mock) return;
            var card = mock.querySelector('[id^="serpCard"]');
            var favEl = mock.querySelector('[id^="serpFav"]'),
              domEl = mock.querySelector('[id^="serpDomain"]');
            var titleEl = mock.querySelector('[id^="serpTitle"]'),
              snipEl = mock.querySelector('[id^="serpSnippet"]'),
              rankEl = mock.querySelector('[id^="serpRank"]');
            var bars = [].slice.call(mock.querySelectorAll(".bar"));
            if (!card || !bars.length) return;
            var n = bars.length,
              f = n > 1 ? (brands[0].bars.length - 1) / (n - 1) : 0;
            // fixed graph colours: last 2 pillars orange (accent), the rest black — only heights change per brand
            bars.forEach(function (bar, i) {
              bar.classList.toggle("dark", i < n - 2);
              bar.style.background = "";
            });
            function paint(b) {
              if (favEl) {
                favEl.src = b.fav;
                favEl.alt = b.title;
              }
              if (domEl) domEl.textContent = b.domain;
              if (titleEl) titleEl.textContent = b.title;
              if (snipEl) snipEl.textContent = b.snippet;
              if (rankEl) {
                rankEl.style.color = b.color;
                rankEl.style.background = hexA(b.color, 0.12);
              }
              bars.forEach(function (bar, i) {
                bar.style.height = b.bars[Math.round(i * f)] + "%";
              });
            }
            async function typeKw(kw) {
              for (var i = 1; i <= kw.length; i++) {
                typeEl.textContent = kw.slice(0, i);
                await sleep(55);
              }
            }
            async function eraseKw() {
              var t = typeEl.textContent;
              for (var i = t.length; i >= 0; i--) {
                typeEl.textContent = t.slice(0, i);
                await sleep(28);
              }
            }
            async function loop() {
              var idx = 0;
              await typeKw(brands[0].kw); // type first keyword over the already-visible result
              await sleep(2300);
              while (true) {
                await eraseKw(); // erase — previous result STAYS visible
                var ni = (idx + 1) % brands.length;
                await typeKw(brands[ni].kw); // type next keyword — previous result still visible
                card.style.opacity = "0"; // only now swap to the new result
                await sleep(300);
                paint(brands[ni]);
                card.style.opacity = "1";
                idx = ni;
                await sleep(2300);
              }
            }
            function start() {
              if (reduce) {
                paint(brands[0]);
                typeEl.textContent = brands[0].kw;
                card.style.opacity = "1";
                return;
              }
              typeEl.textContent = "";
              paint(brands[0]);
              card.style.opacity = "1";
              loop();
            }
            var io = new IntersectionObserver(
              function (es) {
                es.forEach(function (e) {
                  if (e.isIntersecting) {
                    io.disconnect();
                    start();
                  }
                });
              },
              { threshold: 0.35 },
            );
            io.observe(mock);
          }

          runSerp(document.getElementById("seoType"));
          runSerp(document.getElementById("serpType2"));
        })();

        // hero — auto-playing Instagram-style post carousel
        (function () {
          var P = (BXIMG + "");
          function initIgCarousel(config) {
            var card = document.getElementById(config.cardId);
            if (!card) return;
            var imgA = document.getElementById(config.imgAId),
              imgB = document.getElementById(config.imgBId);
            var avatar = document.getElementById(config.avatarId),
              nameEl = document.getElementById(config.nameId);
            var countEl = document.getElementById(config.countId),
              dotsBox = document.getElementById(config.dotsId);
            var likesEl = document.getElementById(config.likesId),
              captionEl = document.getElementById(config.captionId);
            var heart = card.querySelector(".heart");
            var slides = config.slides;
            var reduce =
              window.matchMedia &&
              window.matchMedia("(prefers-reduced-motion:reduce)").matches;
            function fmt(n) {
              return n.toLocaleString("en-IN");
            }
            var dotBase = "h-1.5 rounded-full transition-all duration-300 ";
            slides.forEach(function (_, i) {
              var d = document.createElement("span");
              d.className =
                dotBase + (i === 0 ? "w-3 bg-accent" : "w-1.5 bg-ink/20");
              dotsBox.appendChild(d);
            });
            function setMeta(s, i) {
              avatar.src = s.fav;
              nameEl.textContent = s.name;
              countEl.textContent = i + 1 + "/" + slides.length;
              if (likesEl) likesEl.textContent = fmt(s.likes);
              if (captionEl) captionEl.textContent = s.caption || "";
              [].slice.call(dotsBox.children).forEach(function (d, di) {
                d.className =
                  dotBase + (di === i ? "w-3 bg-accent" : "w-1.5 bg-ink/20");
              });
            }
            function sleep(ms) {
              return new Promise(function (r) {
                setTimeout(r, ms);
              });
            }
            var front = imgA,
              back = imgB,
              idx = 0;
            function pulseHeart() {
              if (!heart) return;
              heart.classList.remove("beat");
              void heart.offsetWidth;
              heart.classList.add("beat");
            }
            async function loop() {
              while (true) {
                await sleep(2600);
                var ni = (idx + 1) % slides.length,
                  s = slides[ni];
                back.src = s.post;
                await new Promise(function (r) {
                  if (back.complete && back.naturalWidth) return r();
                  back.onload = r;
                  back.onerror = r;
                });
                back.style.opacity = "1";
                front.style.opacity = "0";
                setMeta(s, ni);
                pulseHeart();
                await sleep(520);
                var t = front;
                front = back;
                back = t;
                idx = ni;
              }
            }
            setMeta(slides[0], 0);
            var io = new IntersectionObserver(
              function (es) {
                es.forEach(function (e) {
                  if (e.isIntersecting) {
                    io.disconnect();
                    if (!reduce) loop();
                  }
                });
              },
              { threshold: 0.35 },
            );
            io.observe(card);
          }

          initIgCarousel({
            cardId: "igCard",
            imgAId: "igPostA",
            imgBId: "igPostB",
            avatarId: "igAvatar",
            nameId: "igName",
            countId: "igCount",
            dotsId: "igDots",
            likesId: null,
            captionId: null,
            slides: [
              {
                name: "Ashiana Housing",
                fav: P + "ashiana-favicon.avif",
                post: P + "ashiana-post.avif",
                likes: 3240,
                caption: "Campaign visuals that feel premium and local.",
              },
              {
                name: "Duolingo",
                fav: P + "duolingo-favicon.avif",
                post: P + "duolingo-post.avif",
                likes: 18920,
                caption: "Friendly, high-energy social content.",
              },
              {
                name: "The Souled Store",
                fav: P + "the-souled-store-favicon.avif",
                post: P + "the-souled-store-post.avif",
                likes: 6470,
                caption: "Bold brand styling with a retail edge.",
              },
              {
                name: "Wakefit",
                fav: P + "wakefit-favicon.avif",
                post: P + "wakefit-post.avif",
                likes: 4180,
                caption: "Clean product storytelling for trust.",
              },
              {
                name: "Simplilearn",
                fav: P + "simpli-learn-favicon.avif",
                post: P + "simpli-learn-post.avif",
                likes: 2910,
                caption: "Learning content that feels modern and expert.",
              },
            ],
          });

          initIgCarousel({
            cardId: "igCardSocial",
            imgAId: "igPostASocial",
            imgBId: "igPostBSocial",
            avatarId: "igAvatarSocial",
            nameId: "igNameSocial",
            countId: "igCountSocial",
            dotsId: "igDotsSocial",
            likesId: "igLikesSocial",
            captionId: "igCaptionSocial",
            slides: [
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-1.avif",
                likes: 12480,
                caption: "Creative feed design that stops the scroll.",
              },
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-2.avif",
                likes: 15230,
                caption: "Swipe-worthy visuals with crisp brand storytelling.",
              },
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-3.avif",
                likes: 13890,
                caption:
                  "Social content built to convert interest into action.",
              },
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-4.avif",
                likes: 16640,
                caption: "Every post designed for engagement and shareability.",
              },
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-5.avif",
                likes: 14350,
                caption: "Modern social layouts that feel premium and bold.",
              },
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-6.avif",
                likes: 15720,
                caption: "Scroll-stopping frames with a strong brand voice.",
              },
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-7.avif",
                likes: 12980,
                caption: "Strategic content that sparks trust and DMs.",
              },
              {
                name: "BoostronixX",
                fav: P + "veeba-favicon.avif",
                post: P + "veeba-carousel-8.avif",
                likes: 17840,
                caption: "Campaign-ready creatives for Instagram and beyond.",
              },
            ],
          });
        })();

        // brand board — periodic "regenerate" animation (tile pop + hex scramble + light sweep)
        (function () {
          var board = document.getElementById("brandBoard");
          if (!board) return;
          var tiles = [].slice.call(board.querySelectorAll(".bb-tile"));
          var hexes = [].slice.call(board.querySelectorAll(".bb-hex"));
          var sweep = document.getElementById("bbSweep");
          var reduce =
            window.matchMedia &&
            window.matchMedia("(prefers-reduced-motion:reduce)").matches;
          var HEX = "0123456789ABCDEF";
          function scramble(el, target, dur) {
            var start = performance.now();
            (function tick(now) {
              var p = Math.min(1, (now - start) / dur),
                lock = Math.floor(p * (target.length - 1));
              var out = "#";
              for (var i = 1; i < target.length; i++) {
                out += i <= lock ? target[i] : HEX[(Math.random() * 16) | 0];
              }
              el.textContent = out;
              if (p < 1) requestAnimationFrame(tick);
              else el.textContent = target;
            })(start);
          }
          function go(el) {
            if (!el) return;
            el.classList.remove("bb-go");
            void el.offsetWidth;
            el.classList.add("bb-go");
          }
          function cycle() {
            go(sweep);
            tiles.forEach(function (t, i) {
              setTimeout(function () {
                go(t);
              }, i * 90);
            });
            hexes.forEach(function (h, i) {
              setTimeout(
                function () {
                  scramble(h, h.getAttribute("data-hex"), 680);
                },
                120 + i * 130,
              );
            });
          }
          var timer = null;
          var io = new IntersectionObserver(
            function (es) {
              es.forEach(function (e) {
                if (e.isIntersecting) {
                  if (!timer && !reduce) {
                    cycle();
                    timer = setInterval(cycle, 5200);
                  }
                } else if (timer) {
                  clearInterval(timer);
                  timer = null;
                }
              });
            },
            { threshold: 0.4 },
          );
          io.observe(board);
        })();

        // hero word rotator
        var rot = document.getElementById("rotator");
        if (rot) {
          var words = (rot.dataset.words
            ? rot.dataset.words.split("|").map(function (w) { return w.trim(); }).filter(Boolean)
            : ["get noticed", "convert", "stand out", "scale fast"]),
            wi = 0;
          setInterval(function () {
            wi = (wi + 1) % words.length;
            rot.style.opacity = 0;
            setTimeout(function () {
              rot.textContent = words[wi];
              rot.style.opacity = 1;
            }, 220);
          }, 2200);
          rot.style.transition = "opacity .25s ease";
        }

        // faq
        [].forEach.call(document.querySelectorAll(".faq-head"), function (b) {
          b.addEventListener("click", function () {
            var i = b.closest(".faq");
            [].forEach.call(document.querySelectorAll(".faq"), function (f) {
              if (f !== i) f.classList.remove("open");
            });
            i.classList.toggle("open");
          });
        });

        // (section scroll-spy removed — header & bottom nav now use direct page links)

        // ===== TESTIMONIAL SLIDER =====
        var vp = document.getElementById("tViewport"),
          track = document.getElementById("tTrack");
        if (vp && track) {
          var slides = [].slice.call(track.children),
            dotsBox = document.getElementById("tDots");
          var index = 0,
            perView = pv(),
            timer = null,
            down = false,
            sx = 0,
            base = 0,
            moved = false;
          function pv() {
            return window.innerWidth >= 1100
              ? 3
              : window.innerWidth >= 768
                ? 2
                : 1;
          }
          function maxI() {
            return Math.max(0, slides.length - perView);
          }
          function slideW() {
            return vp.clientWidth / perView;
          }
          function apply(px, drag) {
            track.style.transform = "translate3d(" + px + "px,0,0)";
            track.classList[drag ? "add" : "remove"]("dragging");
          }
          function updateDots() {
            if (dotsBox)
              [].forEach.call(dotsBox.children, function (d, k) {
                d.classList.toggle("active", k === index);
              });
          }
          function go(i) {
            index = Math.max(0, Math.min(i, maxI()));
            apply(-index * slideW());
            updateDots();
          }
          function next() {
            go(index >= maxI() ? 0 : index + 1);
          }
          function prev() {
            go(index <= 0 ? maxI() : index - 1);
          }
          function buildDots() {
            if (!dotsBox) return;
            dotsBox.innerHTML = "";
            for (var i = 0; i <= maxI(); i++) {
              (function (i) {
                var b = document.createElement("button");
                b.type = "button";
                b.className = "tdot" + (i === 0 ? " active" : "");
                b.setAttribute("aria-label", "Slide " + (i + 1));
                b.addEventListener("click", function () {
                  go(i);
                  resetPlay();
                });
                dotsBox.appendChild(b);
              })(i);
            }
          }
          function play() {
            stop();
            timer = setInterval(next, 4500);
          }
          function stop() {
            if (timer) {
              clearInterval(timer);
              timer = null;
            }
          }
          function resetPlay() {
            play();
          }
          var nx = document.getElementById("tNext"),
            pr = document.getElementById("tPrev");
          if (nx)
            nx.addEventListener("click", function () {
              next();
              resetPlay();
            });
          if (pr)
            pr.addEventListener("click", function () {
              prev();
              resetPlay();
            });
          vp.addEventListener("pointerdown", function (e) {
            down = true;
            sx = e.clientX;
            base = -index * slideW();
            moved = false;
            stop();
            track.classList.add("dragging");
          });
          window.addEventListener("pointermove", function (e) {
            if (!down) return;
            var d = e.clientX - sx;
            if (Math.abs(d) > 4) moved = true;
            apply(base + d, true);
          });
          window.addEventListener("pointerup", function (e) {
            if (!down) return;
            down = false;
            var d = e.clientX - sx;
            track.classList.remove("dragging");
            if (Math.abs(d) > slideW() * 0.18) {
              d < 0 ? next() : prev();
            } else {
              go(index);
            }
            play();
          });
          vp.addEventListener(
            "click",
            function (e) {
              if (moved) {
                e.preventDefault();
                e.stopPropagation();
                moved = false;
              }
            },
            true,
          );
          vp.addEventListener("mouseenter", stop);
          vp.addEventListener("mouseleave", play);
          window.addEventListener("resize", function () {
            var p = pv();
            if (p !== perView) {
              perView = p;
              if (index > maxI()) index = maxI();
              buildDots();
            }
            go(index);
          });
          window.addEventListener("load", function () {
            go(index);
          });
          buildDots();
          go(0);
          play();
        }
      });

(function(){
        var pop=document.getElementById('hpPop'); if(!pop) return;
        var KEY='hp_lead_seen';
        function open(){ pop.classList.add('hp-open'); requestAnimationFrame(function(){ pop.classList.add('hp-show'); }); document.body.style.overflow='hidden'; try{ sessionStorage.setItem(KEY,'1'); }catch(e){} }
        function close(){ pop.classList.remove('hp-show'); document.body.style.overflow=''; setTimeout(function(){ pop.classList.remove('hp-open'); },430); }
        var seen=false; try{ seen=sessionStorage.getItem(KEY)==='1'; }catch(e){}
        if(!seen){ setTimeout(open, 10000); }
        pop.querySelectorAll('[data-hpclose]').forEach(function(el){ el.addEventListener('click', close); });
        document.addEventListener('keydown', function(e){ if(e.key==='Escape' && pop.classList.contains('hp-open')) close(); });
        var form=document.getElementById('hpForm');
        if(form) form.addEventListener('submit', function(e){ e.preventDefault(); if(!form.checkValidity()){ form.reportValidity(); var fi=form.querySelector(':invalid'); if(fi) fi.focus(); return; } var b=document.getElementById('hpSubmit'); b.disabled=true; b.style.opacity='.85'; document.getElementById('hpBtnLabel').classList.add('hidden'); document.getElementById('hpSpinner').classList.remove('hidden'); try{ sessionStorage.setItem('bx_name', form.querySelector('[name=name]').value.trim()); }catch(err){} setTimeout(function(){ window.location.href=BXTHANKYOU; }, 1100); });
      })();


/* =============================================================
 * Page-specific behaviours (collected from the individual pages).
 * Each is guarded by the presence of its own elements, so this is
 * safe to load site-wide. De-duplicated by code signature.
 * ============================================================= */

/* site-search-redirect  [404] */
(function(){
  document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("searchForm");
    if (!form) return;
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var qEl = document.getElementById("q");
      var q = qEl ? qEl.value.trim() : "";
      // route searches to the home page (or your search results page)
      window.location.href = q
        ? "/?s=" + encodeURIComponent(q)
        : "/";
    });
  });
})();

/* reading-progress-bar  [blog-post, d2c-ecommerce, edoovi-erp, hospitals, performance-marketing, real-estate, schools, seo-services] */
(function(){
  var progress = document.getElementById("progressBar");
  if (!progress) return;
  function onScroll(){
    var h = document.documentElement;
    var max = h.scrollHeight - h.clientHeight;
    progress.style.width = (max > 0 ? (window.scrollY / max) * 100 : 0) + "%";
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();
})();

/* toc-scrollspy  [blog-post] */
(function(){
  // TOC scrollspy — highlight the last heading scrolled past (robust for thin headings)
  var links = [].slice.call(document.querySelectorAll("#toc .toc-link"));
  if (!links.length) return;
  var sections = links.map(function(l){ return document.getElementById(l.getAttribute("href").slice(1)); }).filter(Boolean);
  if (!sections.length) return;
  function setActive(idx){
    links.forEach(function(l, i){
      var on = i === idx;
      l.classList.toggle("active", on);
      if (on) l.setAttribute("aria-current", "true"); else l.removeAttribute("aria-current");
    });
  }
  function spyScroll(){
    var line = window.scrollY + 140; // a little below the sticky header
    var idx = 0;
    for (var i = 0; i < sections.length; i++){
      if (sections[i].offsetTop <= line) idx = i; else break;
    }
    // near the very bottom, force the last item active
    if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 4) idx = sections.length - 1;
    setActive(idx);
  }
  window.addEventListener("scroll", spyScroll, { passive: true });
  spyScroll();
})();

/* copy-link-button  [blog-post] */
(function(){
  // copy link
  var cl = document.getElementById("copyLink");
  if (!cl) return;
  cl.addEventListener("click", function(){
    var url = (window.location.href.indexOf("http") === 0 ? window.location.href : "https://www.boostronixx.com/blog/branding-vs-marketing/");
    (navigator.clipboard ? navigator.clipboard.writeText(url) : Promise.reject()).then(function(){
      cl.innerHTML = '<iconify-icon icon="lucide:check"></iconify-icon>';
      setTimeout(function(){ cl.innerHTML = '<iconify-icon icon="lucide:link"></iconify-icon>'; }, 1500);
    }).catch(function(){});
  });
})();

/* contact-form-submit  [blog-post] */
(function(){
  // contact form -> thank-you
  var form = document.getElementById("blogContact"),
      btn = document.getElementById("bcSubmit"),
      label = document.getElementById("bcLabel"),
      spin = document.getElementById("bcSpinner"),
      err = document.getElementById("bcError");
  if (!form) return;
  form.addEventListener("submit", function(e){
    e.preventDefault();
    if (!form.checkValidity()){ err.classList.remove("hidden"); var fi = form.querySelector(":invalid"); if (fi) fi.focus(); return; }
    err.classList.add("hidden");
    btn.disabled = true; btn.style.opacity = ".85";
    label.classList.add("hidden"); spin.classList.remove("hidden");
    try{ sessionStorage.setItem("bx_name", document.getElementById("bcName").value.trim()); }catch(x){}
    setTimeout(function(){ window.location.href = BXTHANKYOU; }, 1200);
  });
})();

/* blog-post-modal  [blog-post] */
(function(){
  var btn = document.getElementById('bpCtaBtn'), modal = document.getElementById('bpModal');
  if (!btn || !modal) return;
  setTimeout(function(){ btn.classList.add('bp-in'); }, 1200);
  var lastFocus = null;
  function open(){ lastFocus = document.activeElement; modal.classList.add('bp-open'); requestAnimationFrame(function(){ modal.classList.add('bp-show'); }); document.body.style.overflow = 'hidden'; var f = modal.querySelector('.bp-field'); if (f) setTimeout(function(){ f.focus(); }, 260); }
  function close(){ modal.classList.remove('bp-show'); document.body.style.overflow = ''; setTimeout(function(){ modal.classList.remove('bp-open'); }, 380); if (lastFocus && lastFocus.focus) lastFocus.focus(); }
  btn.addEventListener('click', open);
  modal.querySelectorAll('[data-bpclose]').forEach(function(el){ el.addEventListener('click', close); });
  document.addEventListener('keydown', function(e){ if (e.key === 'Escape' && modal.classList.contains('bp-open')) close(); });
  var form = document.getElementById('bpForm');
  if (form) form.addEventListener('submit', function(e){
    e.preventDefault();
    if (!form.checkValidity()){ form.reportValidity(); var fi = form.querySelector(':invalid'); if (fi) fi.focus(); return; }
    var b = document.getElementById('bpSubmit'); b.disabled = true; b.style.opacity = '.85';
    document.getElementById('bpBtnLabel').classList.add('hidden'); document.getElementById('bpSpinner').classList.remove('hidden');
    try{ sessionStorage.setItem('bx_name', form.querySelector('[name=name]').value.trim()); }catch(err){}
    setTimeout(function(){ window.location.href = BXTHANKYOU; }, 1100);
  });
})();

/* newsletter-form-submit  [blog] */
(function(){
  var nf = document.getElementById("newsForm");
  if (!nf) return;
  nf.addEventListener("submit", function(e){
    e.preventDefault();
    if(!nf.checkValidity()){ nf.reportValidity(); return; }
    document.getElementById("newsEmail").disabled = true;
    var ok=document.getElementById("newsOk");
    ok.classList.remove("hidden");
    ok.classList.add("flex");
  });
})();

/* blog-search-live-filter  [blog] */
(function(){
  var grid = document.getElementById("grid");
  var empty = document.getElementById("blogEmpty");
  var search = document.getElementById("blogSearch");
  if (!grid || !empty || !search) return;
  // Category chips are real links now (server-side archives). Only the search
  // box filters live: as you type it filters the loaded cards AND hides the
  // Featured block so the matches read cleanly. Enter still submits the form
  // (→ full site search across every post).
  var posts = [].slice.call(document.querySelectorAll("#grid .post"));
  var featured = document.querySelector('section[aria-label="Featured article"]');
  function apply(){
    var term = (search.value||"").trim().toLowerCase();
    var shown = 0;
    // The Featured block is hidden while searching so results read cleanly —
    // UNLESS the featured post itself is the match (then it stays as the top result).
    var featMatch = featured ? featured.textContent.toLowerCase().indexOf(term) !== -1 : false;
    if (featured) featured.classList.toggle("hidden", term.length > 0 && !featMatch);
    if (term && featMatch) shown++;
    posts.forEach(function(p){
      var hay = ((p.dataset.title||"") + " " + (p.querySelector(".ttl")?p.querySelector(".ttl").textContent:"")).toLowerCase();
      var vis = !term || hay.indexOf(term) !== -1;
      p.classList.toggle("hide", !vis);
      var t = p.querySelector(".ttl");
      if (t){ t.innerHTML = t.textContent; if (vis && term){ var s=t.textContent, i=s.toLowerCase().indexOf(term); if(i!==-1) t.innerHTML = s.slice(0,i)+"<mark>"+s.slice(i,i+term.length)+"</mark>"+s.slice(i+term.length); } }
      if (vis) shown++;
    });
    empty.classList.toggle("hidden", !(term && shown === 0));
  }
  search.addEventListener("input", apply);
  // Enter should filter in place, not navigate off to a bare /?s= page.
  var form = search.closest("form");
  if (form) { form.addEventListener("submit", function (e) { e.preventDefault(); apply(); }); }
})();

/* select-label-float  [contact-us] */
(function(){
  var selects = document.querySelectorAll(".field.float select");
  if (!selects.length) return;
  // keep select label floated once a value is chosen
  [].forEach.call(selects, function (s) {
    s.addEventListener("change", function () {
      s.closest(".field").classList.toggle("has-value", !!s.value);
    });
  });
})();

/* contact-form-submit  [contact-us] */
(function(){
  // form submit -> validate -> simulate send -> redirect to thank-you
  var form = document.getElementById("contactForm");
  if (!form) return;
  var btn = document.getElementById("submitBtn");
  var label = document.getElementById("btnLabel");
  var spinner = document.getElementById("btnSpinner");
  var errBox = document.getElementById("formError");
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    if (!form.checkValidity()) {
      errBox.classList.remove("hidden");
      var firstInvalid = form.querySelector(":invalid");
      if (firstInvalid) firstInvalid.focus();
      return;
    }
    errBox.classList.add("hidden");
    btn.disabled = true;
    btn.style.opacity = "0.85";
    label.classList.add("hidden");
    spinner.classList.remove("hidden");
    // persist a tiny bit of context for the thank-you page
    try {
      sessionStorage.setItem("bx_name", document.getElementById("name").value.trim());
    } catch (err) {}
    setTimeout(function () {
      window.location.href = BXTHANKYOU;
    }, 1300);
  });
})();

/* error-retry-button  [error] */
(function(){
  var btn = document.getElementById("retryBtn"),
    label = document.getElementById("retryLabel"),
    spin = document.getElementById("retrySpinner");
  if (!btn || !label || !spin) return;
  btn.addEventListener("click", function () {
    label.classList.add("hidden");
    spin.classList.remove("hidden");
    btn.disabled = true;
    btn.style.opacity = "0.85";
    setTimeout(function () { window.location.reload(); }, 900);
  });
})();

/* faq-category-chip-filter-search  [faq] */
(function(){
  var chips = [].slice.call(document.querySelectorAll(".chip"));
  var search = document.getElementById("faqSearch");
  var empty = document.getElementById("faqEmpty");
  if (!chips.length || !empty) return;
  var faqs = [].slice.call(document.querySelectorAll(".faq"));
  var activeCat = "all";

  function clearMarks(el) {
    el.innerHTML = el.textContent;
  }
  function highlight(el, term) {
    var txt = el.textContent;
    if (!term) {
      el.innerHTML = txt;
      return;
    }
    var i = txt.toLowerCase().indexOf(term.toLowerCase());
    if (i === -1) {
      el.innerHTML = txt;
      return;
    }
    el.innerHTML =
      txt.slice(0, i) +
      "<mark>" +
      txt.slice(i, i + term.length) +
      "</mark>" +
      txt.slice(i + term.length);
  }

  function apply() {
    var term = ((search && search.value) || "").trim().toLowerCase();
    var shown = 0;
    faqs.forEach(function (f) {
      var catOk = activeCat === "all" || f.dataset.cat === activeCat;
      var qEl = f.querySelector(".q");
      var aEl = f.querySelector(".a");
      var hay = (qEl.textContent + " " + aEl.textContent).toLowerCase();
      var textOk = !term || hay.indexOf(term) !== -1;
      var visible = catOk && textOk;
      f.style.display = visible ? "" : "none";
      if (visible) {
        shown++;
        highlight(qEl, term);
        if (term) {
          f.classList.add("open");
        }
      } else {
        clearMarks(qEl);
        if (term) f.classList.remove("open");
      }
    });
    empty.classList.toggle("hidden", shown !== 0);
  }

  chips.forEach(function (c) {
    c.addEventListener("click", function () {
      chips.forEach(function (x) {
        x.classList.remove("active");
      });
      c.classList.add("active");
      activeCat = c.dataset.cat;
      apply();
    });
  });
  if (search) search.addEventListener("input", apply);
})();

/* floating-particles  [maintenance] */
(function(){
  var box = document.getElementById("particles");
  if (!box) return;
  var reduce = window.matchMedia && window.matchMedia("(prefers-reduced-motion:reduce)").matches;
  if (reduce) return;
  for (var i = 0; i < 24; i++) {
    var p = document.createElement("span");
    p.className = "pt";
    var s = 3 + Math.random() * 7;
    p.style.width = s + "px";
    p.style.height = s + "px";
    p.style.left = Math.random() * 100 + "vw";
    p.style.bottom = "-20px";
    p.style.opacity = 0.2 + Math.random() * 0.5;
    p.style.animationDuration = 9 + Math.random() * 10 + "s";
    p.style.animationDelay = Math.random() * 8 + "s";
    box.appendChild(p);
  }
})();

/* notify-form-submit  [maintenance] */
(function(){
  var form = document.getElementById("notifyForm");
  if (!form) return;
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    if (!form.checkValidity()) { form.reportValidity(); return; }
    document.getElementById("notifyEmail").disabled = true;
    document.getElementById("notifyLabel").textContent = "Done";
    document.getElementById("notifyIcon").setAttribute("icon", "lucide:check");
    var ok = document.getElementById("notifyOk");
    ok.classList.remove("hidden");
    ok.classList.add("flex");
  });
})();

/* category-chip-filter  [portfolio] */
(function(){
  var chips = [].slice.call(document.querySelectorAll(".chip"));
  var cards = [].slice.call(document.querySelectorAll("#grid .pcard"));
  var empty = document.getElementById("gridEmpty");
  if (!chips.length || !cards.length || !empty) return;
  chips.forEach(function (c) {
    c.addEventListener("click", function () {
      chips.forEach(function (x) { x.classList.remove("active"); });
      c.classList.add("active");
      var cat = c.dataset.cat, shown = 0;
      cards.forEach(function (card) {
        var cats = (card.dataset.cat || "").split(" ");
        var ok = cat === "all" || cats.indexOf(cat) !== -1;
        card.classList.toggle("hide", !ok);
        if (ok) shown++;
      });
      empty.classList.toggle("hidden", shown !== 0);
    });
  });
})();

/* toc-scrollspy  [privacy-policy] */
(function(){
  var links = [].slice.call(document.querySelectorAll(".toc-link"));
  if (!links.length) return;
  var map = {};
  links.forEach(function (l) {
    var id = l.getAttribute("href").slice(1);
    var sec = document.getElementById(id);
    if (sec) map[id] = l;
  });
  var spy = new IntersectionObserver(
    function (es) {
      es.forEach(function (e) {
        if (e.isIntersecting) {
          links.forEach(function (l) {
            l.classList.remove("active");
          });
          if (map[e.target.id]) map[e.target.id].classList.add("active");
        }
      });
    },
    { rootMargin: "-20% 0px -70% 0px", threshold: 0 }
  );
  Object.keys(map).forEach(function (id) {
    spy.observe(document.getElementById(id));
  });
})();

/* sitemap-page-counts  [sitemap] */
(function(){
  function init(){
    var links = [].slice.call(document.querySelectorAll(".sm-link"));
    var pageCount = document.getElementById("pageCount");
    if (!pageCount || !links.length) return;
    pageCount.textContent = links.length;
    [].forEach.call(document.querySelectorAll("[data-cat]"), function (cat) {
      var n = cat.querySelectorAll(".sm-link").length;
      var badge = cat.querySelector(".cat-count");
      if (badge) badge.textContent = n;
    });
  }
  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", init);
  else init();
})();

/* sitemap-filter  [sitemap] */
(function(){
  function init(){
    var filter = document.getElementById("mapFilter");
    var empty = document.getElementById("mapEmpty");
    var cats = [].slice.call(document.querySelectorAll("[data-cat]"));
    if (!filter || !empty || !cats.length) return;
    function applyFilter() {
      var term = (filter.value || "").trim().toLowerCase();
      var anyShown = 0;
      cats.forEach(function (cat) {
        var catLinks = [].slice.call(cat.querySelectorAll(".sm-link"));
        var shownInCat = 0;
        catLinks.forEach(function (l) {
          var hay = (l.getAttribute("data-name") + " " + l.querySelector(".sm-label").textContent).toLowerCase();
          var ok = !term || hay.indexOf(term) !== -1;
          l.style.display = ok ? "" : "none";
          var lbl = l.querySelector(".sm-label");
          lbl.innerHTML = lbl.textContent;
          if (ok && term) {
            var t = lbl.textContent, i = t.toLowerCase().indexOf(term);
            if (i !== -1) lbl.innerHTML = t.slice(0, i) + "<mark>" + t.slice(i, i + term.length) + "</mark>" + t.slice(i + term.length);
          }
          if (ok) shownInCat++;
        });
        cat.style.display = shownInCat ? "" : "none";
        if (shownInCat) anyShown++;
      });
      empty.classList.toggle("hidden", anyShown !== 0);
    }
    filter.addEventListener("input", applyFilter);
  }
  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", init);
  else init();
})();

/* phone-feed-slider  [social-media-marketing] */
(function(){
  var imgA = document.getElementById("feedImg"), imgB = document.getElementById("feedImgB");
  var likesEl = document.getElementById("feedLikes"), countEl = document.getElementById("feedCount");
  if (!imgA || !imgB || !likesEl || !countEl) return;
  var reduce = window.matchMedia && window.matchMedia("(prefers-reduced-motion:reduce)").matches;
  var slides = [
    { a:"Stop the scroll.", g:"linear-gradient(135deg,#fa5539,#ff8a5c)", likes:"12,480" },
    { a:"Build the trust.", g:"linear-gradient(135deg,#0a0a0a,#3a3a3a)", likes:"15,230" },
    { a:"Drive the action.", g:"linear-gradient(135deg,#2e7d5b,#0a0a0a)", likes:"17,840" }
  ];
  var heart = document.querySelector(".heart");
  var idx = 0, front = imgA, back = imgB;
  function go(){
    var ni = (idx+1) % slides.length, s = slides[ni];
    back.textContent = s.a; back.style.background = s.g;
    back.style.opacity = "1"; front.style.opacity = "0";
    likesEl.textContent = s.likes; countEl.textContent = (ni+1)+"/"+slides.length;
    if (heart){ heart.classList.remove("go"); void heart.offsetWidth; heart.classList.add("go"); }
    var t = front; front = back; back = t; idx = ni;
  }
  if (!reduce) setInterval(go, 2600);
})();

/* scroll-progress-bar  [terms-and-conditions] */
(function(){
  document.addEventListener("DOMContentLoaded", function () {
    var progress = document.getElementById("progressBar");
    var track = document.querySelector("[data-track]");
    if (!progress || !track) return;
    function onScroll() {
      var rect = track.getBoundingClientRect();
      var total = rect.height - window.innerHeight + rect.top;
      var scrolled = window.scrollY - (rect.top + window.scrollY) + window.innerHeight;
      var start = track.offsetTop - window.innerHeight;
      var end = track.offsetTop + track.offsetHeight;
      var p = ((window.scrollY - start) / (end - start)) * 100;
      progress.style.width = Math.max(0, Math.min(100, p)) + "%";
    }
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
  });
})();

/* thankyou-personalise-greeting  [thank-you] */
(function(){
  var heading = document.getElementById("tyHeading");
  if (!heading) return;
  document.addEventListener("DOMContentLoaded", function () {
    try {
      var name = sessionStorage.getItem("bx_name");
      if (name) {
        var first = name.split(" ")[0].replace(/[^\p{L}'-]/gu, "");
        if (first) heading.textContent = "Thank you, " + first + "!";
        sessionStorage.removeItem("bx_name");
      }
    } catch (e) {}
  });
})();

/* confetti-burst  [thank-you] */
(function(){
  var box = document.getElementById("confetti");
  if (!box) return;
  document.addEventListener("DOMContentLoaded", function () {
    var reduce = window.matchMedia && window.matchMedia("(prefers-reduced-motion:reduce)").matches;
    if (reduce) return;
    var colors = ["#fa5539", "#0a0a0a", "#ffb38a", "#f6f4f1", "#ff8a5c"];
    for (var i = 0; i < 90; i++) {
      var c = document.createElement("span");
      c.className = "conf";
      c.style.left = Math.random() * 100 + "vw";
      c.style.background = colors[(Math.random() * colors.length) | 0];
      c.style.animationDuration = 2.4 + Math.random() * 2.4 + "s";
      c.style.animationDelay = Math.random() * 1.2 + "s";
      if (Math.random() > 0.5) c.style.borderRadius = "50%";
      c.style.transform = "scale(" + (0.7 + Math.random()) + ")";
      box.appendChild(c);
    }
    // clear confetti after it falls
    setTimeout(function () { box.innerHTML = ""; }, 7000);
  });
})();

/* thankyou-redirect-countdown  [thank-you] */
(function(){
  var el = document.getElementById("count");
  var stopBtn = document.getElementById("stopRedirect");
  if (!el || !stopBtn) return;
  document.addEventListener("DOMContentLoaded", function () {
    var n = 15,
      stopped = false;
    var timer = setInterval(function () {
      if (stopped) return;
      n -= 1;
      if (el) el.textContent = n;
      if (n <= 0) {
        clearInterval(timer);
        window.location.href = "/";
      }
    }, 1000);
    if (stopBtn)
      stopBtn.addEventListener("click", function () {
        stopped = true;
        clearInterval(timer);
        stopBtn.closest("p").style.display = "none";
      });
  });
})();

/* wireframe-hifi-toggle  [ui-ux-design] */
(function(){
  var stage = document.getElementById("stage"), label = document.getElementById("stageLabel");
  if (!stage) return;
  stage.addEventListener("click", function(){ var wf = stage.classList.toggle("show-wf"); label.textContent = wf ? "Wireframe" : "Final UI"; });
})();

/* responsive-device-switcher  [website-design] */
(function(){
  var vp = document.getElementById("viewport"), btns = [].slice.call(document.querySelectorAll(".device-btn"));
  if (!vp || !btns.length) return;
  btns.forEach(function(b){ b.addEventListener("click", function(){ btns.forEach(function(x){ x.classList.remove("active"); }); b.classList.add("active"); vp.style.maxWidth = b.dataset.w; }); });
})();

/* sitemap-stagger-reveal  [sitemap]
 * The sitemap's .stagger lists need an "in" class to fade their links in.
 * The base reveal observer only adds "in" to .reveal elements, so observe
 * .stagger directly. Guarded — no-ops on pages without a .stagger. */
(function () {
  var staggers = document.querySelectorAll('.stagger');
  if (!staggers.length) return;
  var io = new IntersectionObserver(function (es) {
    es.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
    });
  }, { threshold: 0.08 });
  [].forEach.call(staggers, function (s) { io.observe(s); });
})();

/* seo-services hero — animated SERP rank mock (typewriter cycling BoostronixX
 * SEO keywords, all ranked #1). Guarded on #serpType so it only runs on the SEO
 * Services page. Ported from the original seo-services.html inline script that
 * was missed during the JS consolidation. */
(function () {
  var typeEl = document.getElementById("serpType");
  if (!typeEl) return;
  var data = [
    { kw: "seo company in jaipur", title: "SEO Company in Jaipur — BoostronixX", bars: [24, 34, 30, 48, 60, 78, 96] },
    { kw: "seo services in jaipur", title: "SEO Services in Jaipur — BoostronixX", bars: [30, 26, 42, 38, 58, 74, 100] },
    { kw: "local seo company jaipur", title: "Local SEO Company in Jaipur — BoostronixX", bars: [18, 32, 44, 40, 62, 82, 94] },
    { kw: "best seo agency jaipur", title: "Best SEO Agency in Jaipur — BoostronixX", bars: [28, 40, 34, 52, 66, 80, 98] }
  ];
  var mock = document.getElementById("serpMock");
  var card = document.getElementById("serpCard");
  var titleEl = document.getElementById("serpTitle");
  var bars = [].slice.call((mock || document).querySelectorAll(".bar"));
  var reduce = window.matchMedia && window.matchMedia("(prefers-reduced-motion:reduce)").matches;
  function sleep(ms) { return new Promise(function (r) { setTimeout(r, ms); }); }
  function paint(d) {
    if (titleEl) titleEl.textContent = d.title;
    bars.forEach(function (b, i) { if (d.bars[i] != null) b.style.height = d.bars[i] + "%"; });
  }
  async function typeKw(kw) { for (var i = 1; i <= kw.length; i++) { typeEl.textContent = kw.slice(0, i); await sleep(55); } }
  async function eraseKw() { var t = typeEl.textContent; for (var i = t.length; i >= 0; i--) { typeEl.textContent = t.slice(0, i); await sleep(28); } }
  async function loop() {
    var idx = 0;
    await typeKw(data[0].kw);
    await sleep(2300);
    while (true) {
      await eraseKw();
      var ni = (idx + 1) % data.length;
      await typeKw(data[ni].kw);
      if (card) card.style.opacity = "0";
      await sleep(300);
      paint(data[ni]);
      if (card) card.style.opacity = "1";
      idx = ni;
      await sleep(2300);
    }
  }
  var started = false;
  function start() {
    if (started) return;
    started = true;
    if (reduce) { paint(data[0]); typeEl.textContent = data[0].kw; return; }
    typeEl.textContent = "";
    paint(data[0]);
    loop();
  }
  function ready() {
    if (mock && "IntersectionObserver" in window) {
      var io = new IntersectionObserver(function (es) {
        es.forEach(function (e) { if (e.isIntersecting) { io.disconnect(); start(); } });
      }, { threshold: 0.2 });
      io.observe(mock);
    }
    setTimeout(function () {
      var r = (mock || typeEl).getBoundingClientRect();
      if (r.top < (window.innerHeight || 800) && r.bottom > 0) start();
    }, 1200);
  }
  if (document.readyState === "loading") { document.addEventListener("DOMContentLoaded", ready); } else { ready(); }
})();

/* Placeholder figures (.imgph): the <figcaption class="lbl"> is a design
 * placeholder that should only show while there is no real image. Once the
 * image loads, hide it so it can't bleed through a transparent/light image.
 * If the image fails, onerror removes it and the caption stays (as intended). */
(function () {
  [].forEach.call(document.querySelectorAll(".imgph > img"), function (img) {
    function hide() {
      var lbl = img.parentElement && img.parentElement.querySelector(".lbl");
      if (lbl) lbl.style.visibility = "hidden";
    }
    if (img.complete && img.naturalWidth > 0) hide();
    else img.addEventListener("load", hide);
  });
})();
