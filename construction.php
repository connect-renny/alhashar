<?php
$page = [
    'title' => 'Construction & Contracting — Al Hashar Group',
    'description' => 'Oasis Grace LLC — an Excellent Grade civil construction company in Muscat, Oman, and an Al Hashar Group company.',
    'og_description' => 'Oasis Grace LLC, an Al Hashar Group company, has been a trusted name in general contracting in Oman for over 20 years.',
    'og_image' => 'assets/images/hero-construction.jpg',
    'nav' => 'businesses',
    'subnav' => 'construction',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Construction & Contracting (Oasis Grace)
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-construction.jpg"
            alt=""
            width="1920"
            height="945"
            fetchpriority="high"
          />
        </div>

        <div class="page-hero-body">
          <div class="container">
            <div class="page-hero-content">
              <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                <ol>
                  <li><a href="index.php">Home</a></li>
                  <li>Our Business</li>
                  <li aria-current="page">Construction &amp; Contracting</li>
                </ol>
              </nav>

              <h1 class="page-hero-logo" id="hero-title">
                <img
                  src="assets/images/construction-logo-oasis-grace.png"
                  alt="Oasis Grace L.L.C. — an Al Hashar Group company"
                  width="388"
                  height="120"
                />
              </h1>
              <p class="page-hero-text page-hero-text--full">
                Incorporated in the year 2000 by Dr. Jose Mikle Robin, Oasis Grace LLC, is an
                Excellent Grade Civil Construction Company located in MBD, Ruwi, Muscat, Sultanate
                of Oman. Over the last 20 years, they have established themselves as the “Most
                Respected and Trusted company” in the field of general contracting in Oman.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           About the company — the .brand-row layout from the Automotive
           page (pages/_automotive.scss), with a text title in place of a
           logo. The picture wipes in on scroll (main.js › initBrandRows).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section construction-about" aria-labelledby="about-company-title">
        <div class="container">
          <article class="brand-row">
            <div class="brand-row-body">
              <h2 class="brand-row-title" id="about-company-title">About Company</h2>
              <p class="brand-row-lead">
                With over 700 employees, 102 successful projects, and numerous satisfied clients,
                Oasis Grace L.L.C has established itself as one of the “Most Respected and Trusted
                Names” in the Sultanate of Oman.
              </p>
              <p class="brand-row-lead">
                As a full-service general contracting firm, they specialize in turnkey projects
                across private, commercial, and institutional sectors.
              </p>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about Oasis Grace</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media" style="--media-ratio: 750 / 470">
                <img
                  src="assets/images/construction-about-company.jpg"
                  alt="A site worker in a hard hat tying steel reinforcement bars"
                  width="750"
                  height="470"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us : <a href="mailto:info@oasisgrace.com">info@oasisgrace.com</a>
                </p>
                <ul class="brand-row-actions">
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="https://www.oasisgrace.com"
                      target="_blank"
                      rel="noopener"
                    >
                      Visit Website <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           What they offer — six services, icon over label.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section offers" aria-labelledby="offers-title">
        <div class="container">
          <div class="section-head section-head--center" data-aos="fade-up">
            <h2 class="section-title" id="offers-title">What they <em>Offer.</em></h2>
            <p class="section-lead offers-lead">
              In addition to traditional general contracting services, they offer pre-construction,
              consultation management, and design/build services, including:
            </p>
          </div>

          <ul class="offer-list">
            <li class="offer" data-aos="fade-up" data-aos-delay="0">
              <span class="offer-media">
                <img
                  class="offer-icon"
                  src="assets/images/construction-offer-01.png"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                />
              </span>
              <h3 class="offer-title">Phase Analysis</h3>
            </li>
            <li class="offer" data-aos="fade-up" data-aos-delay="100">
              <span class="offer-media">
                <img
                  class="offer-icon"
                  src="assets/images/construction-offer-02.png"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                />
              </span>
              <h3 class="offer-title">Estimation</h3>
            </li>
            <li class="offer" data-aos="fade-up" data-aos-delay="200">
              <span class="offer-media">
                <img
                  class="offer-icon"
                  src="assets/images/construction-offer-03.png"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                />
              </span>
              <h3 class="offer-title">Design / Build</h3>
            </li>
            <li class="offer" data-aos="fade-up" data-aos-delay="300">
              <span class="offer-media">
                <img
                  class="offer-icon"
                  src="assets/images/construction-offer-04.png"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                />
              </span>
              <h3 class="offer-title">Construction Management</h3>
            </li>
            <li class="offer" data-aos="fade-up" data-aos-delay="400">
              <span class="offer-media">
                <img
                  class="offer-icon"
                  src="assets/images/construction-offer-05.png"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                />
              </span>
              <h3 class="offer-title">General Construction</h3>
            </li>
            <li class="offer" data-aos="fade-up" data-aos-delay="500">
              <span class="offer-media">
                <img
                  class="offer-icon"
                  src="assets/images/construction-offer-06.png"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                />
              </span>
              <h3 class="offer-title">Expansion &amp; Renovation</h3>
            </li>
          </ul>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
