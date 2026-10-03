<?php
$page = [
    'title' => 'Chairman’s Message — Al Hashar Group',
    'description' => 'A message from Al Muhannad Al Hashar, Chairman of Al Hashar Group.',
    'og_description' => 'Guided by our values, focused on the future.',
    'og_image' => 'assets/images/hero-management.jpg',
    'nav' => 'group',
    'subnav' => 'chairman',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — breadcrumb and title only.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
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
                  <li aria-current="page">Chairman’s Message</li>
                </ol>
              </nav>

              <h1 class="page-hero-title page-hero-title--bold" id="hero-title">
                Alhashar Group <em>Chairman’s Message.</em>
              </h1>
            </div>
          </div>
        </div>

        <div class="page-hero-scroll" aria-hidden="true"><span>Scroll</span></div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Chairman's message
           Reuses the founder layout (pages/_home.scss › .founder-*).
           TODO: replace the body with the Chairman's full message.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section founder" aria-labelledby="chairman-title">
        <div class="container">
          <div class="founder-grid">
            <div class="founder-text" data-aos="fade-up">
              <div class="section-head">
                <span class="section-eyebrow">Chairman’s Message</span>
                <h2 class="section-title" id="chairman-title">
                  Guided by Our Values,<br />
                  <em>Focused on the Future</em>
                </h2>
              </div>

              <div class="founder-body">
                <p>
                  Supported by the trust of our customers, the dedication of our employees and the
                  strength of our partnerships, Al Hashar Group continues to evolve, innovate and
                  contribute to Oman’s ongoing progress.
                </p>
              </div>

              <p class="founder-signature">
                Al Muhannad Al Hashar
                <span class="founder-role">Chairman, Al Hashar Group</span>
              </p>
            </div>

            <div class="founder-media" data-aos="fade-up" data-aos-delay="150">
              <img
                src="assets/images/chairman-hashar.jpg"
                alt="Al Muhannad Al Hashar, Chairman of Al Hashar Group"
                width="580"
                height="620"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
