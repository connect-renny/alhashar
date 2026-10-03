<?php
$page = [
    'title' => 'Our Founder — Al Hashar Group',
    'description' => 'The late Sheikh Saeed Bin Nasser Al Hashar, whose vision laid the foundation of Al Hashar Group.',
    'og_description' => 'A vision that continues to inspire us.',
    'og_image' => 'assets/images/founder-pic.jpg',
    'nav' => 'group',
    'subnav' => 'founder',
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
                  <li aria-current="page">Our Founder</li>
                </ol>
              </nav>

              <h1 class="page-hero-title page-hero-title--bold" id="hero-title">
                Alhashar Group <em>Our Founder.</em>
              </h1>
            </div>
          </div>
        </div>

        <div class="page-hero-scroll" aria-hidden="true"><span>Scroll</span></div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Our founder
           Full text; same layout as the home page excerpt (pages/_home.scss ›
           .founder-*).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section founder" aria-labelledby="founder-title">
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

              <div class="founder-body">
                <p>
                  Al Hashar Group’s journey has been shaped by the vision of its founder, the late
                  Sheikh Saeed Bin Nasser Al Hashar. His ambition, foresight and commitment to
                  serving Oman laid the foundation for what has become one of the Sultanate’s
                  established and diversified business groups.
                </p>
                <p>
                  From the outset, his vision placed customers at the heart of the organization.
                  Today, this principle continues to guide us as we build lasting relationships
                  with generations of customers through quality, trust and personalized service.
                </p>
                <p>
                  Our progress has also been strengthened by enduring partnerships with leading
                  international brands and principals. These relationships extend beyond delivering
                  world-class products and services to the Omani market. They are built on shared
                  values, mutual success and a long-term commitment to providing dependable
                  after-sales care.
                </p>
                <p>
                  At the heart of Al Hashar Group is our people. Their expertise, dedication and
                  loyalty—demonstrated by colleagues who have been part of our journey for
                  decades—continue to drive the Group forward.
                </p>
                <p>
                  As we look to the future, we remain guided by the values established by our
                  founder. Supported by the trust of our customers, the dedication of our employees
                  and the strength of our partnerships, Al Hashar Group continues to evolve,
                  innovate and contribute to Oman’s ongoing progress.
                </p>
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

    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
