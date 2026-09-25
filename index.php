<?php
$page = [
    'title' => 'Al Hashar Group — Decades of Trust. A Future of Excellence.',
    'description' => 'Al Hashar Group, Oman — 65 years of excellence across automotive, heavy vehicles, electronics, tyres and hospitality.',
    'og_title' => 'Al Hashar Group',
    'og_description' => 'Decades of Trust. A Future of Excellence. 65 years of Al Hashar Group in Oman.',
    'og_image' => 'assets/images/hero-video-poster.jpg',
    'nav' => 'home',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero
           ═════════════════════════════════════════════════════════════════ -->
      <section class="hero" aria-labelledby="hero-title">
        <div class="hero-media" aria-hidden="true">
          <video
            autoplay
            muted
            loop
            playsinline
            preload="metadata"
            poster="assets/images/hero-video-poster.jpg"
          >
            <source src="assets/videos/hero-video.mp4" type="video/mp4" />
          </video>
        </div>
        <div class="hero-scrim" aria-hidden="true"></div>

        <div class="hero-body">
          <div class="container">
            <div class="hero-content">
              <h1 class="hero-title" id="hero-title">
                Decades of <em>Trust.</em><br />
                A Future of <em>Excellence.</em>
              </h1>
              <a class="link-arrow link-arrow--plain hero-link" href="about.php">
                Explore more about Alhashar Group
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
              </a>
            </div>

            <aside class="hero-news" aria-labelledby="hero-news-title">
              <h2 class="hero-news-title" id="hero-news-title">Latest Updates</h2>
              <div
                class="swiper js-swiper"
                data-swiper-name="heroNews"
                data-swiper='{"loop": true, "speed": 1000, "spaceBetween": 16, "autoplay": {"delay": 5000, "disableOnInteraction": false}, "a11y": {"enabled": true}}'
              >
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a class="hero-news-item" href="news.php">
                      <span class="tag">New</span>
                      <p>Aston Martin Vantage debuts in Oman</p>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a class="hero-news-item" href="news.php">
                      <span class="tag">New</span>
                      <p>Aston Martin Vantage debuts in Oman</p>
                    </a>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Group at a glance
           Numbers roll in via data-count (main.js → components/_odometer).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section facts" aria-labelledby="facts-title">
        <div class="container">
          <div class="section-head" data-aos="fade-up">
            <h2 class="section-title" id="facts-title">Al Hashar Group <em>at a Glance</em></h2>
          </div>

          <div class="row gy-5">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
              <div class="stat">
                <img
                  class="stat-icon"
                  src="assets/images/facts-icon-01.png"
                  alt=""
                  width="72"
                  height="72"
                />
                <p class="stat-value">
                  <span class="stat-num" data-count="65">65</span><span class="stat-sign">+</span>
                </p>
                <span class="stat-label">Years of Excellence</span>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="stat">
                <img
                  class="stat-icon"
                  src="assets/images/facts-icon-02.png"
                  alt=""
                  width="72"
                  height="72"
                />
                <p class="stat-value">
                  <span class="stat-num" data-count="9">9</span><span class="stat-sign">+</span>
                </p>
                <span class="stat-label">Business Divisions</span>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="stat">
                <img
                  class="stat-icon"
                  src="assets/images/facts-icon-03.png"
                  alt=""
                  width="72"
                  height="72"
                />
                <p class="stat-value">
                  <span class="stat-num" data-count="500">500</span><span class="stat-sign">+</span>
                </p>
                <span class="stat-label">Team Members</span>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="stat">
                <img
                  class="stat-icon"
                  src="assets/images/facts-icon-04.png"
                  alt=""
                  width="72"
                  height="72"
                />
                <p class="stat-value">
                  <span class="stat-num" data-count="50">50</span><span class="stat-sign">+</span>
                </p>
                <span class="stat-label">Global Partners</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Our founder
           .founder-scroll is its own scroll pane (the message runs long).
           data-lenis-prevent keeps the smooth-scroll from hijacking the
           wheel inside it; tabindex lets keyboard users scroll it.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section section--flush-top founder" aria-labelledby="founder-title">
        <div class="container">
          <div class="founder-grid">
            <div class="founder-text" data-aos="fade-up">
              <div class="section-head">
                <span class="section-eyebrow">Our Founder</span>
                <h2 class="section-title" id="founder-title">
                  A Vision That Continues<br />
                  <em>to Inspire Us</em>
                </h2>
              </div>

              <div class="founder-scroll-wrap">
                <div
                  class="founder-scroll"
                  data-lenis-prevent
                  tabindex="0"
                  role="region"
                  aria-label="Founder's message"
                >
                  <div class="founder-body">
                    <p>
                      Al Hashar Group’s journey has been shaped by the vision of its founder, the
                      late Sheikh Saeed Bin Nasser Al Hashar. His ambition, foresight and commitment
                      to serving Oman laid the foundation for what has become one of the Sultanate’s
                      established and diversified business groups.
                    </p>
                    <p>
                      From the outset, his vision placed customers at the heart of the organization.
                      Today, this principle continues to guide us as we build lasting relationships
                      with generations of customers through quality, trust and personalized service.
                    </p>
                    <p>
                      Our progress has also been strengthened by enduring partnerships with leading
                      international brands and principals. These relationships extend beyond
                      delivering world-class products and services to the Omani market. They are
                      built on shared values, mutual success and a long-term commitment to providing
                      dependable after-sales care.
                    </p>
                    <p>
                      At the heart of Al Hashar Group is our people. Their expertise, dedication and
                      loyalty—demonstrated by colleagues who have been part of our journey for
                      decades—continue to drive the Group forward.
                    </p>
                    <p>
                      As we look to the future, we remain guided by the values established by our
                      founder. Supported by the trust of our customers, the dedication of our
                      employees and the strength of our partnerships, Al Hashar Group continues to
                      evolve, innovate and contribute to Oman’s ongoing progress.
                    </p>
                  </div>
                </div>
              </div>

              <p class="founder-signature">
                Late Sheikh Saeed Bin Nasser Al Hashar
                <span class="founder-role">Founder, Al Hashar Group</span>
              </p>
            </div>

            <div class="founder-media" data-aos="fade-up" data-aos-delay="150">
              <img
                src="assets/images/founder-pic.jpg"
                alt="Late Sheikh Saeed Bin Nasser Al Hashar, founder of Al Hashar Group"
                width="676"
                height="705"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           About Al Hashar Group
           Background slideshow is decorative (aria-hidden); the copy sits in
           flow on top. No vertical padding of its own — the sections either
           side carry it.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="about" aria-labelledby="about-title">
        <div class="about-cover">
          <div
            class="swiper js-swiper about-slider"
            data-swiper-name="about"
            data-swiper='{"loop": true, "effect": "fade", "speed": 1500, "allowTouchMove": false, "autoplay": {"delay": 2000, "disableOnInteraction": false}}'
            aria-hidden="true"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  src="assets/images/about-bg-01.jpg"
                  alt=""
                  width="1737"
                  height="683"
                  loading="lazy"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="assets/images/about-bg-02.jpg"
                  alt=""
                  width="1737"
                  height="683"
                  loading="lazy"
                />
              </div>
            </div>
          </div>

          <div class="about-scrim" aria-hidden="true"></div>

          <div class="about-body">
            <div class="container">
              <div class="about-content" data-aos="fade-up">
                <div class="section-head">
                  <span class="section-eyebrow">About Al Hashar Group</span>
                  <h2 class="section-title" id="about-title">
                    Over 50 Years of <em>Excellence</em>
                  </h2>
                </div>
                <p>
                  For more than five decades, Al Hashar Group has been part of Oman’s journey of
                  growth and progress. Established through the vision of its founder, the late
                  Sheikh Saeed Bin Nasser Al Hashar, the Group has evolved into one of the
                  Sultanate’s established and diversified family-owned business groups.
                </p>
                <p>
                  Today, Al Hashar Group operates across a broad range of sectors, including
                  automotive, home appliances and electronics, heavy equipment, trading and
                  services, engineering, hospitality and construction &amp; contracting. Through
                  these diverse businesses, the Group connects customers and organisations across
                  Oman with trusted international brands, quality products and dependable services.
                </p>
                <a class="link-arrow link-arrow--plain about-link" href="about.php">
                  Explore more <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Our diverse businesses
           Rows animate in with GSAP + ScrollTrigger (main.js) and replay on
           every pass. .division-rule is the hairline, drawn in by the
           timeline.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section section--flush-bottom diverse" aria-labelledby="diverse-title">
        <div class="container">
          <div class="section-head section-head--center" data-aos="fade-up">
            <h2 class="section-title" id="diverse-title">Our Diverse <em>Businesses</em></h2>
          </div>

          <div class="division-list">
            <article class="division-item">
              <span class="division-num" aria-hidden="true">01</span>
              <div class="division-head">
                <h3 class="division-title">Alhashar Automotive SAOC</h3>
                <a class="link-arrow link-arrow--plain division-link" href="automotive.php">
                  Explore more <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="division-media">
                <img
                  src="assets/images/diverse-business-01.jpg"
                  alt=""
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
              <div class="division-info">
                <p class="division-lead">
                  Nissan &amp; Infiniti Sales, Service and Parts Distribution
                </p>
                <ul>
                  <li>New Vehicle Sales</li>
                  <li>Genuine Parts</li>
                  <li>After Sales Services</li>
                  <li>Customer Support</li>
                </ul>
              </div>
              <span class="division-rule" aria-hidden="true"></span>
            </article>
            <article class="division-item">
              <span class="division-num" aria-hidden="true">02</span>
              <div class="division-head">
                <h3 class="division-title">Alhashar &amp; Co. LLC</h3>
              </div>
              <div class="division-media">
                <img
                  src="assets/images/diverse-business-02.jpg"
                  alt=""
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
              <div class="division-info">
                <p class="division-lead">Core Trading &amp; Business Management Services</p>
                <ul>
                  <li>Trading Operations</li>
                  <li>Strategic Partnership</li>
                  <li>After Sales Services</li>
                  <li>Customer Support</li>
                </ul>
              </div>
              <span class="division-rule" aria-hidden="true"></span>
            </article>
            <article class="division-item">
              <span class="division-num" aria-hidden="true">03</span>
              <div class="division-head">
                <h3 class="division-title">Al Hashar Engineering LLC</h3>
              </div>
              <div class="division-media">
                <img
                  src="assets/images/diverse-business-03.jpg"
                  alt=""
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
              <div class="division-info">
                <p class="division-lead">Consultancy services in the following areas</p>
                <ul>
                  <li>Project management</li>
                  <li>Architectural and engineering design</li>
                  <li>Interior design and execution</li>
                  <li>Logistics and warehousing</li>
                </ul>
              </div>
              <span class="division-rule" aria-hidden="true"></span>
            </article>
            <article class="division-item">
              <span class="division-num" aria-hidden="true">04</span>
              <div class="division-head">
                <h3 class="division-title">Al Hashar Trading Co. LLC</h3>
              </div>
              <div class="division-media">
                <img
                  src="assets/images/diverse-business-04.jpg"
                  alt=""
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
              <div class="division-info">
                <p class="division-lead">Global Car Rental &amp; Leasing</p>
                <ul>
                  <li>Car rental and leasing services</li>
                  <li>Limousine services</li>
                  <li>Hotel transfers</li>
                  <li>Chauffeur-driven vehicles</li>
                </ul>
              </div>
              <span class="division-rule" aria-hidden="true"></span>
            </article>
            <article class="division-item">
              <span class="division-num" aria-hidden="true">05</span>
              <div class="division-head">
                <h3 class="division-title">Alhashar Electronics LLC</h3>
                <a class="link-arrow link-arrow--plain division-link" href="electronics.php">
                  Explore more <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="division-media">
                <img
                  src="assets/images/diverse-business-05.jpg"
                  alt=""
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
              <div class="division-info">
                <p class="division-lead">Undertakes the Master Distribution of</p>
                <ul>
                  <li>Air-conditioning &amp; Refrigeration</li>
                  <li>Household Appliances</li>
                  <li>Built-in &amp; Free Standing Kitchens</li>
                  <li>Televisions</li>
                </ul>
              </div>
              <span class="division-rule" aria-hidden="true"></span>
            </article>
            <article class="division-item">
              <span class="division-num" aria-hidden="true">06</span>
              <div class="division-head">
                <h3 class="division-title">Al Hashar Hotels LLC</h3>
                <a class="link-arrow link-arrow--plain division-link" href="hospitality.php">
                  Explore more <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="division-media">
                <img
                  src="assets/images/diverse-business-06.jpg"
                  alt=""
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
              <div class="division-info">
                <p class="division-lead">
                  The Sheraton Oman Hotel, opened in 1985, is a landmark in Muscat
                </p>
                <ul>
                  <li>Tallest building in Muscat</li>
                  <li>230 stylish rooms</li>
                  <li>Extensive event facilities</li>
                  <li>1,200 square meters</li>
                </ul>
              </div>
              <span class="division-rule" aria-hidden="true"></span>
            </article>
            <article class="division-item">
              <span class="division-num" aria-hidden="true">07</span>
              <div class="division-head">
                <h3 class="division-title">Construction &amp; Contracting</h3>
                <a class="link-arrow link-arrow--plain division-link" href="construction.php">
                  Explore more <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
              <div class="division-media">
                <img
                  src="assets/images/diverse-business-07.jpg"
                  alt=""
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
              <div class="division-info">
                <p class="division-lead">
                  Oasis Grace L.L.C is a fullservice general contracting firm
                </p>
                <ul>
                  <li>Phase Analysis</li>
                  <li>Estimation</li>
                  <li>Design/Build</li>
                  <li>Construction Management</li>
                </ul>
              </div>
              <span class="division-rule" aria-hidden="true"></span>
            </article>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Our partners
           One tab per business; each panel is a horizontally scrolling
           track of logo cards, with prev/next buttons that page through it
           when it overflows. Automotive also has sub-tabs that scroll the
           track to their group and follow along as it scrolls
           (main.js, initPartners). Logos: assets/images/partners/. The .svg
           ones are PLACEHOLDER wordmarks (dashed outline) for partners
           with no artwork yet — replace them with the real logos.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section section--flush-bottom partners" aria-labelledby="partners-title">
        <div class="container">
          <div class="section-head section-head--center" data-aos="fade-up">
            <h2 class="section-title" id="partners-title">Our <em>Partners</em></h2>
          </div>

          <div class="partners-tabs-wrap" data-aos="fade-up">
            <button
              class="partners-tabs-arrow partners-tabs-arrow--prev"
              type="button"
              aria-label="Show previous businesses"
              tabindex="-1"
              hidden
            >
              <i class="bi bi-chevron-left" aria-hidden="true"></i>
            </button>
            <div class="partners-tabs" role="tablist" aria-label="Our businesses">
              <button
                class="partners-tab"
                type="button"
                role="tab"
                id="partners-tab-automotive"
                aria-controls="partners-panel-automotive"
                aria-selected="true"
              >
                Automotive
              </button>
              <button
                class="partners-tab"
                type="button"
                role="tab"
                id="partners-tab-heavy"
                aria-controls="partners-panel-heavy"
                aria-selected="false"
                tabindex="-1"
              >
                Construction &amp; Heavy Equipment
              </button>
              <button
                class="partners-tab"
                type="button"
                role="tab"
                id="partners-tab-electronics"
                aria-controls="partners-panel-electronics"
                aria-selected="false"
                tabindex="-1"
              >
                Home Appliances &amp; Electronics
              </button>
              <button
                class="partners-tab"
                type="button"
                role="tab"
                id="partners-tab-hospitality"
                aria-controls="partners-panel-hospitality"
                aria-selected="false"
                tabindex="-1"
              >
                Hospitality
              </button>
              <button
                class="partners-tab"
                type="button"
                role="tab"
                id="partners-tab-trading"
                aria-controls="partners-panel-trading"
                aria-selected="false"
                tabindex="-1"
              >
                Trading
              </button>
              <button
                class="partners-tab"
                type="button"
                role="tab"
                id="partners-tab-engineering"
                aria-controls="partners-panel-engineering"
                aria-selected="false"
                tabindex="-1"
              >
                Engineering
              </button>
              <button
                class="partners-tab"
                type="button"
                role="tab"
                id="partners-tab-contracting"
                aria-controls="partners-panel-contracting"
                aria-selected="false"
                tabindex="-1"
              >
                Construction &amp; Contracting
              </button>
            </div>
            <button
              class="partners-tabs-arrow partners-tabs-arrow--next"
              type="button"
              aria-label="Show more businesses"
              tabindex="-1"
              hidden
            >
              <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </button>
          </div>

          <div class="partners-panels" data-aos="fade-up">
            <div
              class="partners-panel is-active"
              role="tabpanel"
              id="partners-panel-automotive"
              aria-labelledby="partners-tab-automotive"
              tabindex="0"
            >
              <div class="partners-subnav" aria-label="Automotive categories">
                <button
                  class="partners-sub"
                  type="button"
                  data-target="partners-automotive-luxury"
                  aria-current="true"
                >
                  Luxury Vehicles
                </button>
                <button
                  class="partners-sub"
                  type="button"
                  data-target="partners-automotive-passenger"
                  aria-current="false"
                >
                  Passenger Cars
                </button>
                <button
                  class="partners-sub"
                  type="button"
                  data-target="partners-automotive-tyres"
                  aria-current="false"
                >
                  Tyres, Batteries &amp; Lubricants
                </button>
              </div>
              <div class="partners-track" data-partners-track>
                <ul class="partner-group" id="partners-automotive-luxury">
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/aston-martin.png"
                      alt="Aston Martin"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/infiniti.png" alt="INFINITI" loading="lazy" />
                  </li>
                </ul>
                <ul class="partner-group" id="partners-automotive-passenger">
                  <li class="partner-card">
                    <img src="assets/images/partners/nissan.png" alt="Nissan" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/peugeot.png" alt="Peugeot" loading="lazy" />
                  </li>
                  <li class="partner-card is-placeholder">
                    <img
                      src="assets/images/partners/renault.svg"
                      alt="Renault (placeholder logo)"
                      loading="lazy"
                    />
                  </li>
                </ul>
                <ul class="partner-group" id="partners-automotive-tyres">
                  <li class="partner-card">
                    <span class="partner-cat">Tyres</span>
                    <img
                      src="assets/images/partners/firestone.png"
                      alt="Firestone"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card is-placeholder">
                    <span class="partner-cat">Tyres</span>
                    <img
                      src="assets/images/partners/goodride.svg"
                      alt="Goodride (placeholder logo)"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card is-placeholder">
                    <span class="partner-cat">Tyres</span>
                    <img
                      src="assets/images/partners/ascenso.svg"
                      alt="Ascenso (placeholder logo)"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card">
                    <span class="partner-cat">Tyres</span>
                    <img
                      src="assets/images/partners/roadshine.png"
                      alt="Roadshine"
                      loading="lazy"
                    />
                  </li>
                </ul>
                <ul class="partner-group">
                  <li class="partner-card is-placeholder">
                    <span class="partner-cat">Batteries</span>
                    <img
                      src="assets/images/partners/k-viron.svg"
                      alt="K Viron (placeholder logo)"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card is-placeholder">
                    <span class="partner-cat">Batteries</span>
                    <img
                      src="assets/images/partners/powerpack.svg"
                      alt="Powerpack (placeholder logo)"
                      loading="lazy"
                    />
                  </li>
                </ul>
                <ul class="partner-group">
                  <li class="partner-card">
                    <span class="partner-cat">Lubricants</span>
                    <img
                      src="assets/images/partners/liqui-moly.png"
                      alt="Liqui Moly"
                      loading="lazy"
                    />
                  </li>
                </ul>
              </div>
              <div class="partners-nav">
                <button class="partners-prev" type="button" aria-label="Scroll partners left">
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="partners-next" type="button" aria-label="Scroll partners right">
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div
              class="partners-panel"
              role="tabpanel"
              id="partners-panel-heavy"
              aria-labelledby="partners-tab-heavy"
              tabindex="0"
              hidden
            >
              <div class="partners-track" data-partners-track>
                <ul class="partner-group">
                  <li class="partner-card">
                    <img src="assets/images/partners/tadano.png" alt="Tadano" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/develon.png" alt="Develon" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/pm.png" alt="PM" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/tailift.png" alt="Tailift" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/ud-trucks.png"
                      alt="UD Trucks"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/daewoo-trucks.png"
                      alt="Daewoo Trucks"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/tata.png" alt="TATA" loading="lazy" />
                  </li>
                </ul>
              </div>
              <div class="partners-nav">
                <button class="partners-prev" type="button" aria-label="Scroll partners left">
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="partners-next" type="button" aria-label="Scroll partners right">
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div
              class="partners-panel"
              role="tabpanel"
              id="partners-panel-electronics"
              aria-labelledby="partners-tab-electronics"
              tabindex="0"
              hidden
            >
              <div class="partners-track" data-partners-track>
                <ul class="partner-group">
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/mitsubishi-electric.png"
                      alt="Mitsubishi Electric"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/sharp.png" alt="Sharp" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/ariston.png" alt="Ariston" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/rinnai.png" alt="Rinnai" loading="lazy" />
                  </li>
                  <li class="partner-card">
                    <img src="assets/images/partners/voltas.png" alt="Voltas" loading="lazy" />
                  </li>
                  <li class="partner-card is-placeholder">
                    <img
                      src="assets/images/partners/kardex-remstar.svg"
                      alt="Kardex Remstar (placeholder logo)"
                      loading="lazy"
                    />
                  </li>
                  <li class="partner-card is-placeholder">
                    <img
                      src="assets/images/partners/ae-general.svg"
                      alt="AE General (placeholder logo)"
                      loading="lazy"
                    />
                  </li>
                </ul>
              </div>
              <div class="partners-nav">
                <button class="partners-prev" type="button" aria-label="Scroll partners left">
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="partners-next" type="button" aria-label="Scroll partners right">
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div
              class="partners-panel"
              role="tabpanel"
              id="partners-panel-hospitality"
              aria-labelledby="partners-tab-hospitality"
              tabindex="0"
              hidden
            >
              <div class="partners-track" data-partners-track>
                <ul class="partner-group">
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/sheraton.png"
                      alt="Sheraton Hotels"
                      loading="lazy"
                    />
                  </li>
                </ul>
              </div>
              <div class="partners-nav">
                <button class="partners-prev" type="button" aria-label="Scroll partners left">
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="partners-next" type="button" aria-label="Scroll partners right">
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div
              class="partners-panel"
              role="tabpanel"
              id="partners-panel-trading"
              aria-labelledby="partners-tab-trading"
              tabindex="0"
              hidden
            >
              <div class="partners-track" data-partners-track>
                <ul class="partner-group">
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/global-car-rental.png"
                      alt="Global Car Rental &amp; Leasing"
                      loading="lazy"
                    />
                  </li>
                </ul>
              </div>
              <div class="partners-nav">
                <button class="partners-prev" type="button" aria-label="Scroll partners left">
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="partners-next" type="button" aria-label="Scroll partners right">
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div
              class="partners-panel"
              role="tabpanel"
              id="partners-panel-engineering"
              aria-labelledby="partners-tab-engineering"
              tabindex="0"
              hidden
            >
              <div class="partners-track" data-partners-track>
                <ul class="partner-group">
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/al-hashar-engineering.png"
                      alt="Al Hashar Engineering"
                      loading="lazy"
                    />
                  </li>
                </ul>
              </div>
              <div class="partners-nav">
                <button class="partners-prev" type="button" aria-label="Scroll partners left">
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="partners-next" type="button" aria-label="Scroll partners right">
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div
              class="partners-panel"
              role="tabpanel"
              id="partners-panel-contracting"
              aria-labelledby="partners-tab-contracting"
              tabindex="0"
              hidden
            >
              <div class="partners-track" data-partners-track>
                <ul class="partner-group">
                  <li class="partner-card">
                    <img
                      src="assets/images/partners/oasis-grace.png"
                      alt="Oasis Grace LLC"
                      loading="lazy"
                    />
                  </li>
                </ul>
              </div>
              <div class="partners-nav">
                <button class="partners-prev" type="button" aria-label="Scroll partners left">
                  <i class="bi bi-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="partners-next" type="button" aria-label="Scroll partners right">
                  <i class="bi bi-chevron-right" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Latest news
           The three stories are listed twice: Swiper's loop needs more
           slides than are visible at once (3-up on desktop) to clone and
           wrap cleanly. Drop the repeat once there are 4+ real stories.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section section--flush-bottom news" aria-labelledby="news-title">
        <div class="container">
          <div class="section-head section-head--row" data-aos="fade-up">
            <h2 class="section-title" id="news-title">Latest <em>News</em></h2>
            <a class="link-arrow link-arrow--plain" href="news.php">
              Explore more <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>

          <div
            class="swiper js-swiper news-slider"
            data-swiper-name="news"
            data-swiper='{"loop": true, "speed": 1000, "slidesPerView": 1, "spaceBetween": 24, "autoplay": {"delay": 3500, "disableOnInteraction": false, "pauseOnMouseEnter": true}, "breakpoints": {"768": {"slidesPerView": 2, "spaceBetween": 32}, "1200": {"slidesPerView": 3, "spaceBetween": 60}}, "navigation": {"prevEl": ".news-prev", "nextEl": ".news-next"}, "a11y": {"enabled": true}}'
            data-aos="fade-up"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <article class="news-card">
                  <h3 class="news-card-title">
                    <a href="news.php"
                      >Al-Hashar Motors to be the official and authorized dealer of the Infiniti
                      brand in Oman</a
                    >
                  </h3>
                  <span class="news-card-more" aria-hidden="true">
                    Explore <i class="bi bi-arrow-right"></i>
                  </span>
                  <div class="news-card-media">
                    <img
                      src="assets/images/news-thumb-01.jpg"
                      alt=""
                      width="395"
                      height="225"
                      loading="lazy"
                    />
                    <time class="news-card-date" datetime="2026-08-02">
                      <span class="day">02</span>
                      <span class="month">Aug</span>
                    </time>
                  </div>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <h3 class="news-card-title">
                    <a href="news.php"
                      >Al-Hashar Motors to be the official and authorized dealer of the Infiniti
                      brand in Oman</a
                    >
                  </h3>
                  <span class="news-card-more" aria-hidden="true">
                    Explore <i class="bi bi-arrow-right"></i>
                  </span>
                  <div class="news-card-media">
                    <img
                      src="assets/images/news-thumb-02.jpg"
                      alt=""
                      width="395"
                      height="225"
                      loading="lazy"
                    />
                    <time class="news-card-date" datetime="2026-08-02">
                      <span class="day">02</span>
                      <span class="month">Aug</span>
                    </time>
                  </div>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <h3 class="news-card-title">
                    <a href="news.php"
                      >Al-Hashar Motors to be the official and authorized dealer of the Infiniti
                      brand in Oman</a
                    >
                  </h3>
                  <span class="news-card-more" aria-hidden="true">
                    Explore <i class="bi bi-arrow-right"></i>
                  </span>
                  <div class="news-card-media">
                    <img
                      src="assets/images/news-thumb-03.jpg"
                      alt=""
                      width="395"
                      height="225"
                      loading="lazy"
                    />
                    <time class="news-card-date" datetime="2026-08-02">
                      <span class="day">02</span>
                      <span class="month">Aug</span>
                    </time>
                  </div>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <h3 class="news-card-title">
                    <a href="news.php"
                      >Al-Hashar Motors to be the official and authorized dealer of the Infiniti
                      brand in Oman</a
                    >
                  </h3>
                  <span class="news-card-more" aria-hidden="true">
                    Explore <i class="bi bi-arrow-right"></i>
                  </span>
                  <div class="news-card-media">
                    <img
                      src="assets/images/news-thumb-01.jpg"
                      alt=""
                      width="395"
                      height="225"
                      loading="lazy"
                    />
                    <time class="news-card-date" datetime="2026-08-02">
                      <span class="day">02</span>
                      <span class="month">Aug</span>
                    </time>
                  </div>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <h3 class="news-card-title">
                    <a href="news.php"
                      >Al-Hashar Motors to be the official and authorized dealer of the Infiniti
                      brand in Oman</a
                    >
                  </h3>
                  <span class="news-card-more" aria-hidden="true">
                    Explore <i class="bi bi-arrow-right"></i>
                  </span>
                  <div class="news-card-media">
                    <img
                      src="assets/images/news-thumb-02.jpg"
                      alt=""
                      width="395"
                      height="225"
                      loading="lazy"
                    />
                    <time class="news-card-date" datetime="2026-08-02">
                      <span class="day">02</span>
                      <span class="month">Aug</span>
                    </time>
                  </div>
                </article>
              </div>
              <div class="swiper-slide">
                <article class="news-card">
                  <h3 class="news-card-title">
                    <a href="news.php"
                      >Al-Hashar Motors to be the official and authorized dealer of the Infiniti
                      brand in Oman</a
                    >
                  </h3>
                  <span class="news-card-more" aria-hidden="true">
                    Explore <i class="bi bi-arrow-right"></i>
                  </span>
                  <div class="news-card-media">
                    <img
                      src="assets/images/news-thumb-03.jpg"
                      alt=""
                      width="395"
                      height="225"
                      loading="lazy"
                    />
                    <time class="news-card-date" datetime="2026-08-02">
                      <span class="day">02</span>
                      <span class="month">Aug</span>
                    </time>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="news-slider-nav">
            <button class="news-prev" type="button" aria-label="Previous news">
              <i class="bi bi-chevron-left" aria-hidden="true"></i>
            </button>
            <button class="news-next" type="button" aria-label="Next news">
              <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Head office location
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section section--flush-bottom office" aria-labelledby="office-title">
        <div class="office-map">
          <img
            src="assets/images/location-map.jpg"
            alt="Map showing Al Hashar Group head office in Al Azaiba, Muscat"
            width="1920"
            height="640"
            loading="lazy"
          />
          <div class="office-overlay">
            <div class="container">
              <div class="office-card" data-aos="fade-up">
                <div class="section-head">
                  <h2 class="section-title" id="office-title">Head Office <em>Location</em></h2>
                </div>
                <div class="office-card-body">
                  <img
                    class="office-card-logo"
                    src="assets/images/alhashar-logo-dark.png"
                    alt="Al Hashar Group"
                    width="145"
                    height="120"
                    loading="lazy"
                  />
                  <div>
                    <h3 class="office-card-title">Head Office - Muscat</h3>
                    <address class="office-card-address">
                      Al Maardih Street, Al Azaiba,<br />
                      Muscat 114, Oman
                    </address>
                    <a
                      class="link-arrow link-arrow--plain office-card-link"
                      href="https://www.google.com/maps/search/?api=1&amp;query=Al+Hashar+Group%2C+Al+Maardih+Street%2C+Al+Azaiba%2C+Muscat+114%2C+Oman"
                      target="_blank"
                      rel="noopener"
                    >
                      Get Direction <i class="bi bi-arrow-right" aria-hidden="true"></i>
                      <span class="sr-only">(opens Google Maps in a new tab)</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
