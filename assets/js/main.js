/* ═══════════════════════════════════════════════════════════════════════════
   main.js — Al Hashar Group

   Structure
     1. Config & shared helpers
     2. Core        — smooth scroll, App.scrollTo, in-page links
     3. Navigation  — fixed navbar, mobile drawer
     4. Components  — sliders, lightbox, forms, reveal-on-scroll, hero tabs, rolling
                      counters, accordions, division rows and brand rows (GSAP), back-to-top, current year
     5. Boot        — runs the modules in order, fires `app:ready`

   Every module looks for its own markup and returns early if it isn't
   there, so any block of HTML can be removed without breaking the rest.

   Load order in the HTML: bootstrap.bundle → lenis → swiper → gsap →
   ScrollTrigger → main.js (last: it reads window.Lenis, window.Swiper and
   window.gsap at init).

   Exposes window.App and fires `app:ready` on document once everything has
   booted. Hook page-specific code there rather than on DOMContentLoaded.
   ═══════════════════════════════════════════════════════════════════════════ */

(() => {
  "use strict";

  // ═══════════════════════════════════════════════════════════════════════
  //  1. Config & shared helpers
  // ═══════════════════════════════════════════════════════════════════════

  const html = document.documentElement;
  const body = document.body;

  const BP_LG = 992; // keep in sync with $bp-lg in scss/abstracts/_variables.scss
  const REDUCE_MOTION = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const HAS_IO = "IntersectionObserver" in window;

  const FOCUSABLE =
    'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])';

  const App = {
    lenis: null,
    sliders: {},
    reduceMotion: REDUCE_MOTION,
  };

  const $ = (sel, root = document) => root.querySelector(sel);
  const $$ = (sel, root = document) => [...root.querySelectorAll(sel)];

  // One rAF-throttled scroll listener shared by every module that needs it.
  const scrollHandlers = [];
  let scrollTicking = false;

  const onScroll = (fn) => {
    scrollHandlers.push(fn);
    fn(window.scrollY);
  };

  window.addEventListener(
    "scroll",
    () => {
      if (scrollTicking) return;
      scrollTicking = true;
      requestAnimationFrame(() => {
        const y = window.scrollY;
        scrollHandlers.forEach((fn) => fn(y));
        scrollTicking = false;
      });
    },
    { passive: true }
  );

  // Runs `fn` once when each element first enters the viewport.
  // Without IntersectionObserver, runs it immediately for all of them.
  const whenVisible = (elements, fn, options = {}) => {
    if (!elements.length) return;
    if (!HAS_IO) {
      elements.forEach(fn);
      return;
    }
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        fn(entry.target);
        io.unobserve(entry.target);
      });
    }, options);
    elements.forEach((el) => io.observe(el));
  };

  // ═══════════════════════════════════════════════════════════════════════
  //  2. Core
  // ═══════════════════════════════════════════════════════════════════════

  // Measured so body.is-locked can pad the scrollbar's width and stop the
  // layout jumping when it disappears (see base/_accessibility.scss).
  function initScrollbarWidth() {
    const set = () => {
      html.style.setProperty("--scrollbar-width", `${window.innerWidth - html.clientWidth}px`);
    };
    set();
    window.addEventListener("resize", set, { passive: true });
  }

  // Lenis smooth scroll. Skipped for reduced motion — native scrolling is
  // the accessible default, not a degraded one.
  function initSmoothScroll() {
    if (!window.Lenis || REDUCE_MOTION) return;
    App.lenis = new window.Lenis({ autoRaf: true });
  }

  // App.scrollTo(target, opts): element, selector or px offset. The fixed
  // header is accounted for by scroll-padding-top on <html>, which both
  // Lenis and native scrolling honour.
  function initScrollTo() {
    App.scrollTo = (target, opts = {}) => {
      const el = typeof target === "string" ? $(target) : target;

      if (App.lenis) {
        App.lenis.scrollTo(el ?? target, opts);
      } else if (el instanceof Element) {
        el.scrollIntoView({ behavior: REDUCE_MOTION ? "auto" : "smooth" });
      } else if (typeof target === "number") {
        window.scrollTo({ top: target, behavior: REDUCE_MOTION ? "auto" : "smooth" });
      }

      // Move focus with the viewport so keyboard users carry on from there.
      if (el instanceof Element && opts.focus !== false) {
        if (!el.hasAttribute("tabindex")) el.setAttribute("tabindex", "-1");
        el.focus({ preventScroll: true });
      }
    };

    // In-page links go through App.scrollTo. Bootstrap tab/collapse triggers
    // and anything with data-no-scroll are left alone.
    document.addEventListener("click", (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link || link.hasAttribute("data-no-scroll") || link.hasAttribute("data-bs-toggle"))
        return;

      const id = link.getAttribute("href");
      const el = id.length > 1 && $(id);
      if (!el) return;

      e.preventDefault();
      App.scrollTo(el);
      history.pushState(null, "", id);
    });
  }

  // ═══════════════════════════════════════════════════════════════════════
  //  3. Navigation
  // ═══════════════════════════════════════════════════════════════════════

  // Transparent over the hero, solid once scrolled (.navbar-fixed past 10px).
  // Add `data-nav-hide` to .navbar-main to also hide it on scroll down and
  // reveal on scroll up.
  function initNavbar() {
    const navbar = $(".navbar-main");
    if (!navbar) return;

    const autoHide = navbar.hasAttribute("data-nav-hide");
    let lastY = window.scrollY;

    onScroll((y) => {
      navbar.classList.toggle("navbar-fixed", y >= 10);
      if (autoHide) {
        // Only hide once clear of the top, and never while the drawer is open.
        const hide = y > lastY && y > 120 && !navbar.classList.contains("is-menu-open");
        navbar.classList.toggle("navbar-hidden", hide);
        lastY = y;
      }
    });
  }

  // Below `lg` the .navbar-nav block is an off-canvas drawer: hamburger
  // toggles it, Tab is trapped inside, Escape / backdrop / a link tap close
  // it, focus returns to the hamburger, and it's `inert` while off-screen.
  function initDrawer() {
    const toggler = $(".navbar-toggler");
    const drawer = $(".navbar-nav");
    if (!toggler || !drawer) return;

    const navbar = $(".navbar-main");
    const backdrop = $(".navbar-backdrop");
    const closeBtn = $(".navbar-close", drawer);
    const isDesktop = () => window.innerWidth >= BP_LG;
    let open = false;

    // Desktop never inerts — the lists are visible in the bar.
    const setInert = (on) => {
      if (on && !isDesktop()) drawer.setAttribute("inert", "");
      else drawer.removeAttribute("inert");
    };

    const openDrawer = () => {
      if (open || isDesktop()) return;
      open = true;
      drawer.classList.add("is-open");
      backdrop?.classList.add("is-open");
      navbar?.classList.add("is-menu-open");
      toggler.setAttribute("aria-expanded", "true");
      toggler.setAttribute("aria-label", "Close menu");
      body.classList.add("is-locked");
      App.lenis?.stop();
      setInert(false);
      // Wait for the slide-in so the focus ring lands on-screen.
      setTimeout(() => (closeBtn ?? $(FOCUSABLE, drawer))?.focus(), 50);
    };

    const closeDrawer = ({ restoreFocus = true } = {}) => {
      if (!open) return;
      open = false;
      drawer.classList.remove("is-open");
      backdrop?.classList.remove("is-open");
      navbar?.classList.remove("is-menu-open");
      toggler.setAttribute("aria-expanded", "false");
      toggler.setAttribute("aria-label", "Open menu");
      body.classList.remove("is-locked");
      App.lenis?.start();
      setInert(true);
      if (restoreFocus) toggler.focus();
    };

    toggler.addEventListener("click", () => (open ? closeDrawer() : openDrawer()));
    closeBtn?.addEventListener("click", () => closeDrawer());
    backdrop?.addEventListener("click", () => closeDrawer());

    // A link tap closes the drawer; focus follows the navigation instead.
    drawer.addEventListener("click", (e) => {
      if (e.target.closest("a[href]")) closeDrawer({ restoreFocus: false });
    });

    document.addEventListener("keydown", (e) => {
      if (!open) return;

      if (e.key === "Escape") {
        closeDrawer();
        return;
      }

      // Trap Tab inside the drawer.
      if (e.key === "Tab") {
        const items = $$(FOCUSABLE, drawer).filter((el) => el.offsetParent);
        if (!items.length) return;
        const first = items[0];
        const last = items[items.length - 1];
        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    });

    // Crossing the breakpoint with the drawer open would leave the body
    // locked behind a bar that no longer looks like a drawer.
    window.matchMedia(`(min-width: ${BP_LG}px)`).addEventListener("change", (e) => {
      if (e.matches) closeDrawer({ restoreFocus: false });
      setInert(!e.matches);
    });

    setInert(true);
  }

  // Sub-menus (.has-dropdown): the parent link still navigates; the chevron
  // button beside it opens the list. On desktop CSS also opens it on hover
  // and focus-within; this handles click/tap, Escape and click-outside, and
  // in the mobile drawer the same button expands it in place.
  function initDropdowns() {
    const items = $$(".has-dropdown");
    if (!items.length) return;

    const setOpen = (item, on) => {
      item.classList.toggle("is-open", on);
      const btn = $(".nav-dropdown-toggle", item);
      btn?.setAttribute("aria-expanded", String(on));
    };
    const closeAll = (except) => items.forEach((it) => it !== except && setOpen(it, false));

    items.forEach((item) => {
      const btn = $(".nav-dropdown-toggle", item);
      btn?.addEventListener("click", () => {
        const on = !item.classList.contains("is-open");
        closeAll(item);
        setOpen(item, on);
      });

      // Leaving the menu by keyboard closes it on desktop.
      item.addEventListener("focusout", (e) => {
        if (window.innerWidth >= BP_LG && !item.contains(e.relatedTarget)) setOpen(item, false);
      });
    });

    document.addEventListener("click", (e) => {
      if (!e.target.closest(".has-dropdown")) closeAll();
    });

    document.addEventListener("keydown", (e) => {
      if (e.key !== "Escape") return;
      const open = items.find((it) => it.classList.contains("is-open"));
      if (!open) return;
      setOpen(open, false);
      $(".nav-dropdown-toggle", open)?.focus();
    });
  }

  // ═══════════════════════════════════════════════════════════════════════
  //  4. Components
  // ═══════════════════════════════════════════════════════════════════════

  // `.js-swiper` + data-swiper='{…}' builds a slider from JSON. Name it with
  // data-swiper-name="x" to reach it as App.sliders.x. Autoplay is dropped
  // for reduced motion.
  function initSliders() {
    if (!window.Swiper) return;

    $$(".js-swiper").forEach((el, i) => {
      let options = {};
      try {
        options = el.dataset.swiper ? JSON.parse(el.dataset.swiper) : {};
      } catch (err) {
        console.warn("[App] Bad data-swiper JSON on", el, err);
      }
      if (REDUCE_MOTION) delete options.autoplay;

      const name = el.dataset.swiperName || `custom${i}`;
      App.sliders[name] = new window.Swiper(el, options);
    });
  }

  // `data-reveal` (optionally "left" | "right" | "zoom" | "fade") fades an
  // element in the first time it enters the viewport; `data-reveal-delay`
  // (ms) staggers siblings. The motion is CSS (components/_animations.scss),
  // so with reduced motion nothing moves.
  function initReveal() {
    const elements = $$("[data-reveal]");
    elements.forEach((el) => {
      if (el.dataset.revealDelay) {
        el.style.setProperty("--reveal-delay", `${el.dataset.revealDelay}ms`);
      }
    });
    whenVisible(elements, (el) => el.classList.add("is-revealed"), {
      threshold: 0.15,
      rootMargin: "0px 0px -8% 0px",
    });
  }

  // <span data-count="500">500</span> — the digits become slot-machine
  // strips that roll up to the target when scrolled into view. Non-digit
  // characters (a comma, a point) stay static. The motion lives in
  // components/_odometer.scss; this builds the DOM and flips `.is-rolled`.
  function initCounters() {
    const counters = $$("[data-count]");
    if (!counters.length) return;

    const build = (el) => {
      const value = String(el.dataset.count);
      const chars = [...value];
      const digitCount = chars.filter((c) => /\d/.test(c)).length;

      // Screen readers get the final number once, not ten spinning digits.
      const sr = document.createElement("span");
      sr.className = "sr-only";
      sr.textContent = value;

      const visual = document.createElement("span");
      visual.className = "odometer";
      visual.setAttribute("aria-hidden", "true");

      let seen = 0;
      chars.forEach((ch) => {
        if (!/\d/.test(ch)) {
          const sep = document.createElement("span");
          sep.className = "odometer-sep";
          sep.textContent = ch;
          visual.append(sep);
          return;
        }

        const digit = document.createElement("span");
        digit.className = "odometer-digit";
        digit.style.setProperty("--to", ch);
        // Stagger from the right: the last digit starts first.
        digit.style.setProperty("--i", String(digitCount - 1 - seen));
        seen += 1;

        // 0–9 twice: a full spin before landing on the target.
        const strip = document.createElement("span");
        strip.className = "odometer-strip";
        for (let n = 0; n < 20; n += 1) {
          const d = document.createElement("span");
          d.textContent = String(n % 10);
          strip.append(d);
        }

        digit.append(strip);
        visual.append(digit);
      });

      el.replaceChildren(sr, visual);
    };

    counters.forEach(build);

    if (REDUCE_MOTION) {
      counters.forEach((el) => el.classList.add("is-rolled"));
      return;
    }
    whenVisible(counters, (el) => el.classList.add("is-rolled"), { threshold: 0.4 });
  }

  // GSAP with ScrollTrigger registered and fed by Lenis — set up once, on
  // first use. Returns null when either library is missing or motion is
  // reduced, and callers then leave their markup static.
  let scrollTriggerReady = false;
  const useScrollTrigger = () => {
    if (!window.gsap || !window.ScrollTrigger || REDUCE_MOTION) return null;
    if (!scrollTriggerReady) {
      window.gsap.registerPlugin(window.ScrollTrigger);
      // Lenis drives the scroll position; ScrollTrigger needs to hear about it.
      App.lenis?.on("scroll", window.ScrollTrigger.update);
      scrollTriggerReady = true;
    }
    return window.gsap;
  };

  // "Our diverse businesses" rows, animated with GSAP + ScrollTrigger.
  //
  // One timeline per .division-item. The row itself moves as in the v8 demo:
  // it slides in from the right while scaling up from 75% and fading in,
  // landing with a slight overshoot (back.out). Layered on top, the photo
  // wipes open while its image settles from a zoom, the hairline draws
  // across, the title rises word by word, and the rest of the copy fades
  // up. It plays once the row's top reaches 60% down the viewport and
  // reverses when you scroll back up past that point. main/.footer clip
  // overflow-x (base/_reset.scss), so the off-screen start can't cause a
  // sideways scroll.
  //
  // With reduced motion, or without GSAP, nothing runs and the rows are
  // simply static (the CSS is the resting state).
  function initDivisionRows() {
    const rows = $$(".division-item");
    if (!rows.length) return;
    const gsap = useScrollTrigger();
    if (!gsap) return;

    // Wraps each word of a title in a mask so it can rise into view.
    const splitWords = (el) => {
      const words = el.textContent.trim().split(/\s+/);
      el.textContent = "";
      words.forEach((word, i) => {
        const mask = document.createElement("span");
        mask.className = "word";
        const inner = document.createElement("span");
        inner.textContent = word;
        mask.append(inner);
        el.append(mask);
        if (i < words.length - 1) el.append(" ");
      });
      return $$(".word > span", el);
    };

    rows.forEach((row) => {
      const media = $(".division-media", row);
      const img = media && $("img", media);
      const rule = $(".division-rule", row);
      const title = $(".division-title", row);
      const words = title ? splitWords(title) : [];
      const num = $(".division-num", row);
      const link = $(".division-link", row);
      const info = $$(".division-lead, .division-info li", row);
      const fades = [num, link, ...info].filter(Boolean);

      // The hidden state is set outside the timeline on purpose: ScrollTrigger
      // reverts its animations while it re-measures the page (on load and
      // resize), and an un-played timeline comes back with no `from` values.
      // A set() owns the resting state; the timeline only tweens *to* the
      // visible one.
      gsap.set(row, { x: "50%", scale: 0.75, opacity: 0 });
      if (media) gsap.set(media, { clipPath: "inset(0 100% 0 0)" });
      if (img) gsap.set(img, { scale: 1.25 });
      if (rule) gsap.set(rule, { scaleX: 0 });
      if (words.length) gsap.set(words, { yPercent: 110 });
      if (fades.length) gsap.set(fades, { y: 16, opacity: 0 });

      const tl = gsap.timeline({
        defaults: { ease: "power3.out" },
        scrollTrigger: {
          trigger: row,
          start: "top 60%",
          toggleActions: "play none none reverse",
        },
      });

      tl.to(row, { x: "0%", scale: 1, opacity: 1, duration: 1, ease: "back.out(1.7)" }, 0);
      if (media) {
        tl.to(media, { clipPath: "inset(0 0% 0 0)", duration: 1.1, ease: "power4.inOut" }, 0.2);
      }
      if (img) tl.to(img, { scale: 1, duration: 1.5 }, 0.2);
      if (rule) tl.to(rule, { scaleX: 1, duration: 1.2, ease: "power2.inOut" }, 0.2);
      if (num) tl.to(num, { y: 0, opacity: 1, duration: 0.6 }, 0.3);
      if (words.length) {
        tl.to(words, { yPercent: 0, duration: 0.8, stagger: 0.07, ease: "power4.out" }, 0.35);
      }
      if (link) tl.to(link, { y: 0, opacity: 1, duration: 0.6 }, 0.65);
      if (info.length) tl.to(info, { y: 0, opacity: 1, duration: 0.6, stagger: 0.06 }, 0.55);
    });
  }

  // Home "Our Partners": business tabs over horizontally scrolling tracks of
  // logo cards.
  //  · Tabs follow the ARIA tabs pattern (click, ←/→, Home/End).
  //  · The tab strip scrolls sideways when it overflows; its arrow buttons
  //    only show then, and the selected tab is kept in view.
  //  · Each track pages with its prev/next buttons, which disable at the
  //    ends and hide when there's nothing to scroll.
  //  · Sub-tabs (Automotive) scroll the track to their group, and the
  //    current one follows the track as it's scrolled or swiped.
  function initPartners() {
    const root = $(".partners");
    if (!root) return;

    const strip = $(".partners-tabs", root);
    const tabs = $$('[role="tab"]', root);
    const arrowPrev = $(".partners-tabs-arrow--prev", root);
    const arrowNext = $(".partners-tabs-arrow--next", root);
    const behavior = REDUCE_MOTION ? "auto" : "smooth";

    const atStart = (el) => el.scrollLeft <= 2;
    const atEnd = (el) => el.scrollLeft + el.clientWidth >= el.scrollWidth - 2;
    const overflows = (el) => el.scrollWidth > el.clientWidth + 2;

    // Tab-strip arrows.
    const updateStrip = () => {
      const more = overflows(strip);
      if (arrowPrev) arrowPrev.hidden = !more || atStart(strip);
      if (arrowNext) arrowNext.hidden = !more || atEnd(strip);
    };
    const pageStrip = (dir) => strip.scrollBy({ left: dir * strip.clientWidth * 0.7, behavior });
    arrowPrev?.addEventListener("click", () => pageStrip(-1));
    arrowNext?.addEventListener("click", () => pageStrip(1));
    strip.addEventListener("scroll", updateStrip, { passive: true });

    // Marks the current sub-tab and, when the sub-tab row itself scrolls
    // (phones), brings it into view there.
    const setSub = (subs, current) => {
      subs.forEach((s) => s.setAttribute("aria-current", String(s === current)));
      const row = current.parentElement;
      if (!overflows(row)) return;
      const c = current.getBoundingClientRect();
      const r = row.getBoundingClientRect();
      if (c.left < r.left || c.right > r.right) {
        row.scrollBy({ left: c.left - r.left - (r.width - c.width) / 2, behavior });
      }
    };

    // Tracks.
    const panels = $$(".partners-panel", root);
    const updateTrack = (panel) => {
      const track = $("[data-partners-track]", panel);
      const nav = $(".partners-nav", panel);
      if (!track || !nav || panel.hidden) return;
      nav.classList.toggle("is-static", !overflows(track));
      $(".partners-prev", nav).disabled = atStart(track);
      $(".partners-next", nav).disabled = atEnd(track);

      // Sub-tab scroll-spy: the last group whose left edge has reached the
      // track's left edge, or the last group once scrolled to the end.
      const subs = $$(".partners-sub", panel);
      if (!subs.length || !overflows(track)) return;
      const left = track.getBoundingClientRect().left;
      let current = subs[0];
      subs.forEach((sub) => {
        const group = document.getElementById(sub.dataset.target);
        if (group && group.getBoundingClientRect().left <= left + 40) current = sub;
      });
      if (atEnd(track)) current = subs[subs.length - 1];
      setSub(subs, current);
    };

    panels.forEach((panel) => {
      const track = $("[data-partners-track]", panel);
      if (!track) return;
      const page = (dir) => track.scrollBy({ left: dir * track.clientWidth * 0.8, behavior });
      $(".partners-prev", panel)?.addEventListener("click", () => page(-1));
      $(".partners-next", panel)?.addEventListener("click", () => page(1));
      track.addEventListener("scroll", () => updateTrack(panel), { passive: true });

      $$(".partners-sub", panel).forEach((sub, _, subs) =>
        sub.addEventListener("click", () => {
          setSub(subs, sub);
          const group = document.getElementById(sub.dataset.target);
          if (!group) return;
          const offset = group.getBoundingClientRect().left - track.getBoundingClientRect().left;
          track.scrollTo({ left: track.scrollLeft + offset, behavior });
        })
      );
    });

    // Tabs.
    const select = (tab, { focus = false } = {}) => {
      tabs.forEach((t) => {
        const on = t === tab;
        t.setAttribute("aria-selected", String(on));
        t.tabIndex = on ? 0 : -1;
        const panel = document.getElementById(t.getAttribute("aria-controls"));
        if (!panel) return;
        panel.hidden = !on;
        panel.classList.toggle("is-active", on);
        if (on) {
          const track = $("[data-partners-track]", panel);
          if (track) track.scrollLeft = 0;
          updateTrack(panel);
        }
      });
      if (focus) tab.focus({ preventScroll: true });
      // Keep the chosen tab in view inside the strip (not the page).
      const t = tab.getBoundingClientRect();
      const s = strip.getBoundingClientRect();
      if (t.left < s.left || t.right > s.right) {
        strip.scrollBy({ left: t.left - s.left - (s.width - t.width) / 2, behavior });
      }
    };

    tabs.forEach((tab, i) => {
      tab.addEventListener("click", () => select(tab));
      tab.addEventListener("keydown", (e) => {
        const step = { ArrowRight: 1, ArrowLeft: -1, Home: -i, End: tabs.length - 1 - i }[e.key];
        if (step === undefined) return;
        e.preventDefault();
        select(tabs[(i + step + tabs.length) % tabs.length], { focus: true });
      });
    });

    const refresh = () => {
      updateStrip();
      panels.forEach(updateTrack);
    };
    window.addEventListener("resize", refresh, { passive: true });
    window.addEventListener("load", refresh);
    refresh();
  }

  // Inner-page hero tabs (`[data-hero-tabs]`): each [role="tab"] shows the
  // panel its aria-controls points at and hides the others. Arrow keys move
  // between tabs, as the ARIA tabs pattern expects.
  function initHeroTabs() {
    $$("[data-hero-tabs]").forEach((root) => {
      const tabs = $$('[role="tab"]', root);
      if (!tabs.length) return;

      const select = (tab, { focus = false } = {}) => {
        tabs.forEach((t) => {
          const on = t === tab;
          t.setAttribute("aria-selected", String(on));
          t.tabIndex = on ? 0 : -1;
          const panel = document.getElementById(t.getAttribute("aria-controls"));
          panel?.classList.toggle("is-active", on);
          if (panel) panel.hidden = !on;
        });
        if (focus) tab.focus();
      };

      tabs.forEach((tab, i) => {
        tab.addEventListener("click", () => select(tab));
        tab.addEventListener("keydown", (e) => {
          const step = { ArrowRight: 1, ArrowLeft: -1, Home: -i, End: tabs.length - 1 - i }[e.key];
          if (step === undefined) return;
          e.preventDefault();
          select(tabs[(i + step + tabs.length) % tabs.length], { focus: true });
        });
      });

      select(tabs.find((t) => t.getAttribute("aria-selected") === "true") ?? tabs[0]);
    });
  }

  // Automotive brand rows (`.brand-row`), played once as each scrolls into
  // view: the picture wipes open left to right while the photo inside
  // settles from a zoom, the copy rises in line by line, and the navy
  // details box lifts into place last. The hidden state is set up front, as
  // in initDivisionRows, so ScrollTrigger's re-measuring can't undo it.
  function initBrandRows() {
    const rows = $$(".brand-row");
    if (!rows.length) return;
    const gsap = useScrollTrigger();
    if (!gsap) return;

    rows.forEach((row) => {
      const media = $(".brand-row-media", row);
      const img = media && $("img", media);
      const details = $(".brand-row-details", row);
      const copy = $$(".brand-row-body > *", row);

      if (media) gsap.set(media, { clipPath: "inset(0 100% 0 0)" });
      if (img) gsap.set(img, { scale: 1.3 });
      if (details) gsap.set(details, { y: 48, opacity: 0 });
      if (copy.length) gsap.set(copy, { y: 28, opacity: 0 });

      // A standalone timeline with its own trigger: ScrollTrigger re-measures
      // on load and would otherwise rewind (or, with `once`, kill) an
      // attached timeline mid-play.
      const tl = gsap.timeline({ paused: true, defaults: { ease: "power3.out" } });

      if (media) {
        tl.to(media, { clipPath: "inset(0 0% 0 0)", duration: 1.3, ease: "power4.inOut" }, 0);
      }
      if (img) tl.to(img, { scale: 1, duration: 1.8, ease: "power3.out" }, 0.1);
      if (copy.length) tl.to(copy, { y: 0, opacity: 1, duration: 0.8, stagger: 0.1 }, 0.2);
      if (details) tl.to(details, { y: 0, opacity: 1, duration: 0.9 }, 0.75);

      // Created last: for a row already in view, onEnter fires immediately,
      // and the timeline has to be built by then.
      window.ScrollTrigger.create({
        trigger: row,
        start: "top 78%",
        once: true,
        onEnter: () => tl.play(),
      });
    });
  }

  // Accordions (`[data-accordion]`): each `.accordion-trigger` opens its
  // `.accordion-item` and closes the others; clicking an open row closes it.
  // The animation is pure CSS (pages/_electronics.scss) — this only flips
  // `.is-open` and aria-expanded. When a row above collapses, the opened one
  // slides up the page, so once things settle it's brought back into view.
  function initAccordions() {
    $$("[data-accordion]").forEach((root) => {
      const items = $$(".accordion-item", root);

      const setOpen = (item, open) => {
        item.classList.toggle("is-open", open);
        $(".accordion-trigger", item)?.setAttribute("aria-expanded", String(open));
      };

      items.forEach((item) => {
        const trigger = $(".accordion-trigger", item);
        const panel = $(".accordion-panel", item);
        if (!trigger || !panel) return;

        const settle = () => {
          const offset = $(".header")?.offsetHeight ?? 0;
          const top = trigger.getBoundingClientRect().top;
          if (top < offset || top > window.innerHeight * 0.6) {
            App.scrollTo(window.scrollY + top - offset - 16);
          }
        };

        panel.addEventListener("transitionend", (e) => {
          if (
            e.target === panel &&
            e.propertyName === "grid-template-rows" &&
            item.classList.contains("is-open")
          ) {
            settle();
          }
        });

        trigger.addEventListener("click", () => {
          const opening = !item.classList.contains("is-open");
          items.forEach((other) => setOpen(other, other === item && opening));
          if (opening && REDUCE_MOTION) settle();
        });
      });

      // Initial state is painted; let transitions run from here on.
      requestAnimationFrame(() => requestAnimationFrame(() => root.classList.add("is-ready")));
    });
  }

  // Lightbox for `a[data-lightbox="group"]` links: the link's href is the
  // image to show, its <img> alt the caption. Built on <dialog>, so focus is
  // trapped, Esc works and focus returns to the link on close.
  //
  // Opening zooms the photo out of its thumbnail; prev/next slides it across
  // with a crossfade; closing shrinks it back into whichever thumbnail for
  // that image is on screen (or fades it if none is). Arrow keys and swipes
  // move between images. Repeated hrefs in a group count once, so a looping
  // slider can list its slides twice. While open, the slider behind stops
  // autoplaying and Lenis stops scrolling the page.
  function initLightbox() {
    const links = $$("a[data-lightbox]");
    if (!links.length) return;

    const EASE = "cubic-bezier(0.22, 1, 0.36, 1)";
    const ms = (n) => (REDUCE_MOTION ? 0 : n);

    const dialog = document.createElement("dialog");
    dialog.className = "lightbox";
    dialog.setAttribute("aria-label", "Image viewer");
    // Focus lands on the dialog itself, not the first button, so a mouse
    // open doesn't light up a focus ring on Close.
    dialog.tabIndex = -1;
    dialog.innerHTML = `
      <div class="lightbox-stage">
        <figure class="lightbox-figure">
          <img class="lightbox-img" alt="" />
          <figcaption class="lightbox-caption"></figcaption>
        </figure>
      </div>
      <p class="lightbox-count" aria-live="polite"></p>
      <button class="lightbox-btn lightbox-close" type="button" aria-label="Close">
        <i class="bi bi-x-lg" aria-hidden="true"></i>
      </button>
      <button class="lightbox-btn lightbox-prev" type="button" aria-label="Previous image">
        <i class="bi bi-chevron-left" aria-hidden="true"></i>
      </button>
      <button class="lightbox-btn lightbox-next" type="button" aria-label="Next image">
        <i class="bi bi-chevron-right" aria-hidden="true"></i>
      </button>`;
    body.append(dialog);

    const stage = $(".lightbox-stage", dialog);
    const img = $(".lightbox-img", dialog);
    const caption = $(".lightbox-caption", dialog);
    const count = $(".lightbox-count", dialog);

    let items = [];
    let index = 0;
    let slider = null;
    let busy = false;

    // Unique images in a group, in document order.
    const groupItems = (group) => {
      const seen = new Map();
      $$(`a[data-lightbox="${group}"]`).forEach((a) => {
        const src = a.getAttribute("href");
        if (!seen.has(src)) seen.set(src, { src, alt: $("img", a)?.alt ?? "" });
      });
      return [...seen.values()];
    };

    // The on-screen thumbnail for an image, if any (a looping slider may
    // hold several copies, some parked off to the side).
    const visibleThumb = (src) =>
      $$(`a[data-lightbox][href="${src}"] img`).find((el) => {
        const r = el.getBoundingClientRect();
        return (
          r.width &&
          r.right > 0 &&
          r.left < window.innerWidth &&
          r.bottom > 0 &&
          r.top < window.innerHeight
        );
      });

    // Transform that maps the lightbox image onto a thumbnail's box.
    const flipFrom = (thumb) => {
      const a = thumb.getBoundingClientRect();
      const b = img.getBoundingClientRect();
      const x = a.left + a.width / 2 - (b.left + b.width / 2);
      const y = a.top + a.height / 2 - (b.top + b.height / 2);
      return `translate(${x}px, ${y}px) scale(${a.width / b.width}, ${a.height / b.height})`;
    };

    const loaded = () =>
      img.complete && img.naturalWidth ? Promise.resolve() : img.decode().catch(() => {});

    const render = () => {
      const item = items[index];
      img.src = item.src;
      img.alt = item.alt;
      caption.textContent = item.alt;
      count.textContent = `${index + 1} / ${items.length}`;
      dialog.classList.toggle("is-single", items.length < 2);
      return loaded().then(() => {
        if (img.naturalWidth)
          img.style.setProperty("--lb-ratio", img.naturalWidth / img.naturalHeight);
      });
    };

    const open = async (link) => {
      items = groupItems(link.dataset.lightbox);
      index = Math.max(
        0,
        items.findIndex((it) => it.src === link.getAttribute("href"))
      );
      slider = link.closest(".swiper")?.swiper ?? null;
      slider?.autoplay?.stop();
      App.lenis?.stop();

      img.getAnimations().forEach((a) => a.cancel());
      dialog.classList.remove("is-closing");
      dialog.showModal();
      dialog.focus();
      await render();

      const thumb = $("img", link);
      if (thumb && !REDUCE_MOTION) {
        img.animate(
          [
            { transform: flipFrom(thumb), opacity: 0.6 },
            { transform: "none", opacity: 1 },
          ],
          {
            duration: 650,
            easing: EASE,
          }
        );
      }
    };

    const go = async (step) => {
      if (busy || items.length < 2) return;
      busy = true;
      const dir = Math.sign(step);
      await img.animate(
        [
          { transform: "none", opacity: 1 },
          { transform: `translateX(${-dir * 48}px)`, opacity: 0 },
        ],
        { duration: ms(220), easing: "ease-in", fill: "forwards" }
      ).finished;
      index = (index + step + items.length) % items.length;
      await render();
      await img.animate(
        [
          { transform: `translateX(${dir * 72}px) scale(0.96)`, opacity: 0 },
          { transform: "none", opacity: 1 },
        ],
        { duration: ms(520), easing: EASE, fill: "forwards" }
      ).finished;
      img.getAnimations().forEach((a) => a.cancel());
      busy = false;
    };

    const close = async () => {
      if (!dialog.open || dialog.classList.contains("is-closing")) return;
      dialog.classList.add("is-closing");
      const thumb = visibleThumb(items[index].src);
      const frames = thumb
        ? [{ transform: "none" }, { transform: flipFrom(thumb) }]
        : [
            { transform: "none", opacity: 1 },
            { transform: "scale(0.92)", opacity: 0 },
          ];
      await img.animate(frames, { duration: ms(460), easing: EASE, fill: "forwards" }).finished;
      dialog.close();
      img.getAnimations().forEach((a) => a.cancel());
      busy = false;
      App.lenis?.start();
      slider?.autoplay?.start();
    };

    links.forEach((link) =>
      link.addEventListener("click", (e) => {
        e.preventDefault();
        open(link);
      })
    );

    $(".lightbox-close", dialog).addEventListener("click", close);
    $(".lightbox-prev", dialog).addEventListener("click", () => go(-1));
    $(".lightbox-next", dialog).addEventListener("click", () => go(1));

    // Esc: play the close animation instead of the dialog's instant close.
    dialog.addEventListener("cancel", (e) => {
      e.preventDefault();
      close();
    });
    dialog.addEventListener("keydown", (e) => {
      if (e.key === "ArrowLeft") go(-1);
      if (e.key === "ArrowRight") go(1);
    });

    // A click on the dim surround (not the photo or a button) closes.
    stage.addEventListener("click", (e) => {
      if (e.target === stage) close();
    });

    // Horizontal swipe on touch screens.
    let startX = null;
    stage.addEventListener("pointerdown", (e) => {
      startX = e.clientX;
    });
    stage.addEventListener("pointerup", (e) => {
      if (startX === null) return;
      const dx = e.clientX - startX;
      startX = null;
      if (Math.abs(dx) > 50) go(dx < 0 ? 1 : -1);
    });
  }

  // Forms marked `data-form`: the browser's own validation does the checking.
  // This drops the submit outright if the honeypot (`.form-hp input`) is
  // filled, and on a failed submit adds `.was-validated` so every invalid
  // field shows red (not just the touched ones) and focuses the first.
  function initForms() {
    $$("form[data-form]").forEach((form) => {
      form.noValidate = true;
      form.addEventListener("submit", (e) => {
        if ($(".form-hp input", form)?.value) {
          e.preventDefault();
          return;
        }
        if (!form.checkValidity()) {
          e.preventDefault();
          form.classList.add("was-validated");
          $(":invalid", form)?.focus();
          return;
        }

        // No backend yet (data-form-demo): thank the visitor instead of
        // posting. Drop the attribute once the form has a real `action`.
        if (form.hasAttribute("data-form-demo")) {
          e.preventDefault();
          const status = $(".form-status", form);
          form.reset();
          form.classList.remove("was-validated");
          form.dispatchEvent(new Event("form:reset"));
          if (status) {
            status.dataset.state = "success";
            status.textContent =
              "Thank you — your application has been received. Our HR team will be in touch.";
          }
        }
      });
    });
  }

  // Careers: division filters over the job list, "Apply" buttons that
  // pre-select their role in the form, and the CV drop zone.
  function initJobs() {
    const list = $("[data-jobs]");
    if (list) {
      const jobs = $$(".job", list);
      const count = $("[data-jobs-count]");
      const empty = $("[data-jobs-empty]");
      const filters = $$(".jobs-filter");

      filters.forEach((btn) =>
        btn.addEventListener("click", () => {
          const key = btn.dataset.filter;
          filters.forEach((b) => b.setAttribute("aria-pressed", String(b === btn)));
          let shown = 0;
          jobs.forEach((job) => {
            const match = key === "all" || job.dataset.division === key;
            job.hidden = !match;
            if (!match) job.open = false;
            if (match) shown++;
          });
          if (count) count.textContent = shown;
          if (empty) empty.hidden = shown > 0;
        })
      );

      const position = $("#app-position");
      list.addEventListener("click", (e) => {
        const apply = e.target.closest(".job-apply");
        if (!apply || !position) return;
        const option = [...position.options].find((o) => o.text === apply.dataset.position);
        if (option) position.value = option.value;
      });
    }

    $$(".file-field").forEach((field) => {
      const input = $(".file-input", field);
      const text = $("[data-file-name]", field);
      if (!input || !text) return;
      const original = text.innerHTML;
      const MAX = 5 * 1024 * 1024;

      const update = () => {
        const file = input.files?.[0];
        field.classList.toggle("has-file", Boolean(file));
        if (!file) {
          input.setCustomValidity("");
          text.innerHTML = original;
          return;
        }
        const tooBig = file.size > MAX;
        input.setCustomValidity(tooBig ? "Please choose a file under 5 MB." : "");
        text.textContent = tooBig
          ? `${file.name} is larger than 5 MB — please choose a smaller file.`
          : `${file.name} (${
              file.size < 1024 * 1024
                ? `${Math.max(1, Math.round(file.size / 1024))} KB`
                : `${(file.size / 1024 / 1024).toFixed(1)} MB`
            })`;
      };

      input.addEventListener("change", update);
      input.form?.addEventListener("form:reset", update);

      ["dragenter", "dragover"].forEach((type) =>
        field.addEventListener(type, (e) => {
          e.preventDefault();
          field.classList.add("is-dragover");
        })
      );
      ["dragleave", "drop"].forEach((type) =>
        field.addEventListener(type, () => field.classList.remove("is-dragover"))
      );
      field.addEventListener("drop", (e) => {
        e.preventDefault();
        if (!e.dataTransfer?.files.length) return;
        input.files = e.dataTransfer.files;
        update();
      });
    });
  }

  // `.return-top` appears after 400px and scrolls back to the top. Its ring
  // fills with scroll progress: --scroll-progress (0–1) drives the
  // stroke-dashoffset in components/_back-to-top.scss.
  function initBackToTop() {
    const button = $(".return-top");
    if (!button) return;

    onScroll((y) => {
      const max = html.scrollHeight - window.innerHeight;
      const progress = max > 0 ? Math.min(y / max, 1) : 0;
      button.style.setProperty("--scroll-progress", progress.toFixed(4));
      button.classList.toggle("is-visible", y > 400);
    });
    button.addEventListener("click", () => App.scrollTo(0));
  }

  // `.year` is filled with the current year — never hard-code a copyright.
  function initYear() {
    const year = new Date().getFullYear();
    $$(".year").forEach((el) => {
      el.textContent = year;
    });
  }

  // ═══════════════════════════════════════════════════════════════════════
  //  5. Boot
  // ═══════════════════════════════════════════════════════════════════════

  // `.no-js` gates CSS that needs JavaScript (reveals, the drawer).
  html.classList.remove("no-js");

  initScrollbarWidth();
  initSmoothScroll();
  initScrollTo();
  initNavbar();
  initDrawer();
  initDropdowns();
  initSliders();
  initLightbox();
  initForms();
  initJobs();
  initReveal();
  initHeroTabs();
  initPartners();
  initAccordions();
  initCounters();
  initDivisionRows();
  initBrandRows();
  initBackToTop();
  initYear();

  window.App = App;
  document.dispatchEvent(new CustomEvent("app:ready", { detail: App }));
})();
