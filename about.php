<?php
$page = [
    'title' => 'About Us — Al Hashar Group',
    'description' => 'The vision, mission and values that have guided Al Hashar Group through more than five decades in Oman.',
    'og_description' => 'To be Oman’s most trusted and progressive business group, creating lasting value for people, partners and the nation.',
    'og_image' => 'assets/images/hero-about-us.jpg',
    'nav' => 'about',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Vision / Mission / Values
           The tabs along the bottom swap the panel (main.js › initHeroTabs).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title" data-hero-tabs>
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-about-us.jpg"
            alt=""
            width="1920"
            height="900"
            fetchpriority="high"
          />
        </div>

        <div class="page-hero-body">
          <div class="container">
            <div class="page-hero-content">
              <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                <ol>
                  <li><a href="index.php">Home</a></li>
                  <li aria-current="page">About us</li>
                </ol>
              </nav>

              <div
                class="page-hero-panel is-active"
                id="hero-vision"
                role="tabpanel"
                aria-labelledby="tab-vision"
              >
                <h1 class="page-hero-title" id="hero-title">Our <em>Vision</em></h1>
                <p class="page-hero-text">
                  To be Oman’s most trusted and progressive business group, creating lasting value
                  for people, partners and the nation.
                </p>
              </div>

              <div
                class="page-hero-panel"
                id="hero-mission"
                role="tabpanel"
                aria-labelledby="tab-mission"
                hidden
              >
                <h2 class="page-hero-title">Our <em>Mission</em></h2>
                <p class="page-hero-text">
                  To enrich lives and enable progress in Oman by connecting people and businesses
                  with trusted global brands, quality products and services, and experiences shaped
                  by local understanding.
                </p>
              </div>

              <div
                class="page-hero-panel"
                id="hero-values"
                role="tabpanel"
                aria-labelledby="tab-values"
                hidden
              >
                <h2 class="page-hero-title">Our <em>Values</em></h2>
                <p class="page-hero-text">
                  Inspired by our founder’s principles and shaped by more than five decades of
                  experience, our values guide how we serve our customers, support our people, build
                  lasting partnerships and contribute to Oman’s progress.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="page-hero-scroll" aria-hidden="true"><span>Scroll</span></div>

        <div class="page-hero-tabs">
          <div class="container">
            <ul role="tablist" aria-label="Vision, mission and values">
              <li role="presentation">
                <button
                  type="button"
                  role="tab"
                  id="tab-vision"
                  aria-controls="hero-vision"
                  aria-selected="true"
                >
                  <span>Our Vision</span>
                  <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
              </li>
              <li role="presentation">
                <button
                  type="button"
                  role="tab"
                  id="tab-mission"
                  aria-controls="hero-mission"
                  aria-selected="false"
                >
                  <span>Our Mission</span>
                  <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
              </li>
              <li role="presentation">
                <button
                  type="button"
                  role="tab"
                  id="tab-values"
                  aria-controls="hero-values"
                  aria-selected="false"
                >
                  <span>Our Values</span>
                  <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           About Al Hashar Group
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section about-intro" aria-labelledby="about-intro-title">
        <div class="container">
          <div class="about-intro-grid">
            <div class="about-intro-text" data-aos="fade-up">
              <div class="section-head">
                <span class="section-eyebrow">About Al Hashar Group</span>
                <h2 class="section-title" id="about-intro-title">
                  Over 50 Years of <em>Excellence</em>
                </h2>
              </div>
              <p class="about-intro-lead">
                For more than five decades, Al Hashar Group has been part of Oman’s journey of
                growth and progress. Established through the vision of its founder, the late Sheikh
                Saeed Bin Nasser Al Hashar, the Group has evolved into one of the Sultanate’s
                established and diversified family-owned business groups.
              </p>
              <p>
                Today, Al Hashar Group operates across a broad range of sectors, including
                automotive, home appliances and electronics, heavy equipment, trading and services,
                engineering, hospitality and construction &amp; contracting. Through these diverse
                businesses, the Group connects customers and organisations across Oman with trusted
                international brands, quality products and dependable services.
              </p>
              <p>
                From the beginning, our customers have remained at the heart of everything we do.
                This commitment is supported by the expertise of our people and enduring
                relationships with leading global partners—relationships built on trust, shared
                values and long-term success.
              </p>
            </div>

            <div class="about-intro-media" data-aos="fade-up" data-aos-delay="150">
              <img
                src="assets/images/about-alhashar-pic.jpg"
                alt="Illustration of Oman’s heritage and modern skyline within the outline of the country"
                width="600"
                height="575"
                loading="lazy"
              />
            </div>
          </div>

          <p class="about-intro-outro" data-aos="fade-up">
            As we look to the future, we remain guided by our founder’s legacy while continuing to
            evolve, innovate and pursue new opportunities. Through every business and partnership,
            Al Hashar Group is committed to creating lasting value for its customers, its people,
            its partners and the Sultanate of Oman.
          </p>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Our values
           Hover/focus opens a band (CSS only, see pages/_about.scss); the
           first is open at rest. Bands are focusable so keyboard users can
           open them too.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="values" aria-labelledby="values-title">
        <h2 class="sr-only" id="values-title">Our values</h2>
        <div class="values-list">
          <article class="value-band" tabindex="0">
            <div class="value-band-media" aria-hidden="true">
              <img
                src="assets/images/values-bg-01.jpg"
                alt=""
                width="1920"
                height="750"
                loading="lazy"
              />
            </div>
            <div class="container value-band-body">
              <h3 class="value-band-title">Trust and <em>Integrity</em></h3>
              <div class="value-band-text">
                <p>
                  We act with honesty, fairness and professionalism, honoring our commitments and
                  protecting the trust placed in us by our customers, employees and partners.
                </p>
              </div>
            </div>
          </article>
          <article class="value-band" tabindex="0">
            <div class="value-band-media" aria-hidden="true">
              <img
                src="assets/images/values-bg-02.jpg"
                alt=""
                width="1920"
                height="750"
                loading="lazy"
              />
            </div>
            <div class="container value-band-body">
              <h3 class="value-band-title">Customer <em>Commitment</em></h3>
              <div class="value-band-text">
                <p>
                  We place our customers at the heart of every decision, striving to understand
                  their needs and provide quality experiences supported by dependable service and
                  long-term care.
                </p>
              </div>
            </div>
          </article>
          <article class="value-band" tabindex="0">
            <div class="value-band-media" aria-hidden="true">
              <img
                src="assets/images/values-bg-03.jpg"
                alt=""
                width="1920"
                height="750"
                loading="lazy"
              />
            </div>
            <div class="container value-band-body">
              <h3 class="value-band-title">People and <em>Belonging</em></h3>
              <div class="value-band-text">
                <p>
                  We value the people behind our progress and foster a respectful, inclusive
                  environment where employees feel supported, recognised and empowered to grow.
                </p>
              </div>
            </div>
          </article>
          <article class="value-band" tabindex="0">
            <div class="value-band-media" aria-hidden="true">
              <img
                src="assets/images/values-bg-04.jpg"
                alt=""
                width="1920"
                height="750"
                loading="lazy"
              />
            </div>
            <div class="container value-band-body">
              <h3 class="value-band-title">Enduring <em>Partnerships</em></h3>
              <div class="value-band-text">
                <p>
                  We build relationships for the long term, working closely with our principals,
                  partners and stakeholders to create mutual value and shared success.
                </p>
              </div>
            </div>
          </article>
          <article class="value-band" tabindex="0">
            <div class="value-band-media" aria-hidden="true">
              <img
                src="assets/images/values-bg-05.jpg"
                alt=""
                width="1920"
                height="750"
                loading="lazy"
              />
            </div>
            <div class="container value-band-body">
              <h3 class="value-band-title">Excellence with <em>Purpose</em></h3>
              <div class="value-band-text">
                <p>
                  We pursue the highest standards of quality, efficiency and accountability,
                  ensuring that everything we do delivers meaningful and lasting value.
                </p>
              </div>
            </div>
          </article>
          <article class="value-band" tabindex="0">
            <div class="value-band-media" aria-hidden="true">
              <img
                src="assets/images/values-bg-06.jpg"
                alt=""
                width="1920"
                height="750"
                loading="lazy"
              />
            </div>
            <div class="container value-band-body">
              <h3 class="value-band-title">Progress for <em>Oman</em></h3>
              <div class="value-band-text">
                <p>
                  We embrace innovation, pursue new opportunities and continuously evolve in ways
                  that support Oman’s economic growth and future prosperity.
                </p>
              </div>
            </div>
          </article>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
