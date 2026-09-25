<?php
$page = [
    'title' => 'Management Team — Al Hashar Group',
    'description' => 'The Al Hashar Group management team — proven leadership building on a legacy of trust in Oman.',
    'og_description' => 'Our dedicated Management Team is the cornerstone of Alhashar Group, uniting proven leadership with a commitment to delivering exceptional value.',
    'og_image' => 'assets/images/hero-management.jpg',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Founder / Management / Chairman's message
           The tabs along the bottom swap the panel (main.js › initHeroTabs).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title" data-hero-tabs>
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-management.jpg"
            alt=""
            width="1920"
            height="945"
            fetchpriority="high"
          />
        </div>

        <div class="page-hero-body">
          <div class="container">
            <div class="page-hero-content page-hero-content--wide">
              <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                <ol>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">Our Group</a></li>
                  <li aria-current="page">Management</li>
                </ol>
              </nav>

              <div
                class="page-hero-panel"
                id="hero-founder"
                role="tabpanel"
                aria-labelledby="tab-founder"
                hidden
              >
                <h2 class="page-hero-title page-hero-title--bold">
                  Alhashar Group <em>Our Founder.</em>
                </h2>
                <p class="page-hero-lead">A vision that continues to inspire us.</p>
                <p class="page-hero-text">
                  Al Hashar Group’s journey has been shaped by the vision of its founder, the late
                  Sheikh Saeed Bin Nasser Al Hashar — his ambition, foresight and commitment to
                  serving Oman laid the foundation for the Group we are today.
                </p>
              </div>

              <div
                class="page-hero-panel is-active"
                id="hero-management"
                role="tabpanel"
                aria-labelledby="tab-management"
              >
                <h1 class="page-hero-title page-hero-title--bold" id="hero-title">
                  Alhashar Group <em>Management Team.</em>
                </h1>
                <p class="page-hero-lead">Building on a legacy of trust.</p>
                <p class="page-hero-text">
                  Our dedicated Management Team is the cornerstone of Alhashar Group, uniting proven
                  leadership with an unwavering commitment to delivering exceptional value,
                  empowering our people, and shaping the future of business in Oman.
                </p>
              </div>

              <div
                class="page-hero-panel"
                id="hero-chairman"
                role="tabpanel"
                aria-labelledby="tab-chairman"
                hidden
              >
                <h2 class="page-hero-title page-hero-title--bold">
                  Alhashar Group <em>Chairman’s Message.</em>
                </h2>
                <p class="page-hero-lead">Guided by our values, focused on the future.</p>
                <p class="page-hero-text">
                  Supported by the trust of our customers, the dedication of our employees and the
                  strength of our partnerships, Al Hashar Group continues to evolve, innovate and
                  contribute to Oman’s ongoing progress.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="page-hero-scroll" aria-hidden="true"><span>Scroll</span></div>

        <div class="page-hero-tabs">
          <div class="container">
            <ul role="tablist" aria-label="Founder, management and chairman’s message">
              <li role="presentation">
                <button
                  type="button"
                  role="tab"
                  id="tab-founder"
                  aria-controls="hero-founder"
                  aria-selected="false"
                >
                  <span>Our Founder</span>
                  <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
              </li>
              <li role="presentation">
                <button
                  type="button"
                  role="tab"
                  id="tab-management"
                  aria-controls="hero-management"
                  aria-selected="true"
                >
                  <span>Our Management</span>
                  <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
              </li>
              <li role="presentation">
                <button
                  type="button"
                  role="tab"
                  id="tab-chairman"
                  aria-controls="hero-chairman"
                  aria-selected="false"
                >
                  <span>Chairman’s Message</span>
                  <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Group management
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section management" aria-labelledby="management-title">
        <div class="container">
          <div class="section-head section-head--center" data-aos="fade-up">
            <h2 class="section-title" id="management-title">Group <em>Management</em></h2>
          </div>

          <div class="management-grid">
            <article class="management-card" data-aos="fade-up">
              <div class="management-card-media">
                <img
                  src="assets/images/chairman-hashar.jpg"
                  alt="Al Muhannad Al Hashar, Chairman"
                  width="580"
                  height="620"
                  loading="lazy"
                />
              </div>
              <h3 class="management-card-name">Al Muhannad Al Hashar</h3>
              <span class="management-card-role">Chairman</span>
            </article>
            <article class="management-card" data-aos="fade-up" data-aos-delay="150">
              <div class="management-card-media">
                <img
                  src="assets/images/director-kharusi.jpg"
                  alt="Sultan Al Kharusi, Managing Director"
                  width="580"
                  height="620"
                  loading="lazy"
                />
              </div>
              <h3 class="management-card-name">Sultan Al Kharusi</h3>
              <span class="management-card-role">Managing Director</span>
            </article>
          </div>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
