<?php
$page = [
    'title' => 'Car Rental & Leasing — Al Hashar Group',
    'description' => 'Global Car Rental & Leasing — professional car rental, leasing, limousine, hotel transfer and chauffeur services across Oman.',
    'og_description' => 'Car rental and leasing from economy to luxury, with outlets in Muscat, Sohar and Salalah.',
    'og_image' => 'assets/images/hero-about-us.jpg',
    'nav' => 'businesses',
    'subnav' => 'car-rental-leasing',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Car Rental & Leasing (Global Car Rental & Leasing)
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-about-us.jpg"
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
                  <li aria-current="page">Car Rental &amp; Leasing</li>
                </ol>
              </nav>

              <h1 class="page-hero-title" id="hero-title">Car Rental &amp; Leasing.</h1>
              <p class="page-hero-text">
                Professional car rental and leasing services of the highest quality and standard,
                with limousine services, hotel transfers and chauffeur-driven vehicles across the
                Sultanate of Oman.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           About Global Car Rental — the .brand-row layout from the
           Automotive page (pages/_automotive.scss). The picture wipes in on
           scroll (main.js › initBrandRows).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section car-rental-about" aria-labelledby="global-car-rental-title">
        <div class="container">
          <article class="brand-row">
            <div class="brand-row-body">
              <h2 class="brand-row-logo" id="global-car-rental-title">
                <img
                  src="assets/images/car-rental-logo-global.png"
                  alt="Global Car Rental &amp; Leasing"
                  width="182"
                  height="56"
                  loading="lazy"
                />
              </h2>
              <p class="brand-row-lead">
                Global Car Rental &amp; Leasing provides professional car rental and leasing
                services of the highest quality and standard.
              </p>
              <p class="brand-row-text">
                Sporting an impeccable fleet of the latest vehicles from economy to luxury
                categories, be it a sedan, an SUV, MPV or 4WD, they offer the best options and also
                provide limousine services, hotel transfers and chauffeur services.
              </p>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about Global Car Rental &amp; Leasing</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media">
                <img
                  src="assets/images/car-rental-leasing.jpg"
                  alt="A row of rental cars parked in the evening sun"
                  width="750"
                  height="540"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us :
                  <a href="mailto:global@alhashargroup.com">global@alhashargroup.com</a>
                </p>
                <ul class="brand-row-actions">
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="http://www.globalcarrental-oman.com"
                      target="_blank"
                      rel="noopener"
                    >
                      Visit Website <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="link-arrow link-arrow--plain" href="#outlets">
                      View Sales Outlets <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Sales outlets — phone and fax per branch (components/_outlets-table.scss).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section outlets" id="outlets" aria-labelledby="outlets-title">
        <div class="container">
          <div class="section-head" data-aos="fade-up">
            <h2 class="section-title" id="outlets-title">Sales <em>Outlets.</em></h2>
          </div>

          <div class="outlets-table-wrap" data-aos="fade-up">
            <table class="outlets-table">
              <thead>
                <tr>
                  <th scope="col">Location</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">Fax</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Muscat</th>
                  <td><a href="tel:+96824697140">24697140</a></td>
                  <td>24696393</td>
                </tr>
                <tr>
                  <th scope="row">Sohar</th>
                  <td><a href="tel:+96826844768">26844768</a></td>
                  <td>26841177</td>
                </tr>
                <tr>
                  <th scope="row">Salalah</th>
                  <td><a href="tel:+96823210143">23210143</a></td>
                  <td>23210143</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
