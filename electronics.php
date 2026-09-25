<?php
$page = [
    'title' => 'Alhashar Electronics LLC — Al Hashar Group',
    'description' => 'Alhashar Electronics LLC — world-class electronics and appliance brands, with 7 stores and 4 service centres across Oman.',
    'og_description' => 'World-class electronics and appliance brands, served through 7 stores and 4 service centres across the Sultanate.',
    'og_image' => 'assets/images/hero-electronics.jpg',
    'nav' => 'businesses',
    'subnav' => 'electronics',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Electronics & Appliances
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-electronics.jpg"
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
                  <li aria-current="page">Electronics &amp; Appliances</li>
                </ol>
              </nav>

              <h1 class="page-hero-title page-hero-title--nowrap" id="hero-title">
                Alhashar <em>Electronics LLC</em>
              </h1>
              <p class="page-hero-text">
                Adorned with a plethora of world-class brands, the company serves customers who
                value the quality, performance and value-for-money from these brands. It has a well
                spread network of 7 stores and 4 service centres across the Sultanate.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Consumer Electronics Distribution — accordion
           One item open at a time (main.js › initAccordions). Panels
           animate on grid-template-rows, so heights never need measuring.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section distribution" aria-labelledby="distribution-title">
        <div class="container">
          <div class="section-head" data-aos="fade-up">
            <h2 class="section-title" id="distribution-title">
              Consumer Electronics <em>Distribution.</em>
            </h2>
          </div>

          <div class="accordion-list" data-accordion data-aos="fade-up">
            <div class="accordion-item is-open">
              <h3 class="accordion-heading">
                <button
                  class="accordion-trigger"
                  type="button"
                  id="acc-ac"
                  aria-expanded="true"
                  aria-controls="acc-ac-panel"
                >
                  <span class="accordion-icon">
                    <img src="assets/images/electronic-item-01.png" alt="" width="60" height="60" />
                  </span>
                  <span class="accordion-label">Air-conditioning &amp; Refrigeration</span>
                  <span class="accordion-toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="accordion-panel" id="acc-ac-panel" role="region" aria-labelledby="acc-ac">
                <div class="accordion-panel-inner">
                  <ul class="brand-grid">
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/consumer-logo-01.jpg"
                        alt="Mitsubishi Electric"
                        width="230"
                        height="70"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/ac-refrigeration-01.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/consumer-logo-02.jpg"
                        alt="Daytek"
                        width="225"
                        height="80"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/ac-refrigeration-02.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/consumer-logo-03.jpg"
                        alt="Voltas"
                        width="200"
                        height="45"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/ac-refrigeration-03.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/consumer-logo-04.jpg"
                        alt="Lennox"
                        width="200"
                        height="60"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/ac-refrigeration-04.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-heading">
                <button
                  class="accordion-trigger"
                  type="button"
                  id="acc-household"
                  aria-expanded="false"
                  aria-controls="acc-household-panel"
                >
                  <span class="accordion-icon">
                    <img src="assets/images/electronic-item-02.png" alt="" width="60" height="60" />
                  </span>
                  <span class="accordion-label">Household Appliances</span>
                  <span class="accordion-toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                class="accordion-panel"
                id="acc-household-panel"
                role="region"
                aria-labelledby="acc-household"
              >
                <div class="accordion-panel-inner">
                  <ul class="brand-grid">
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/household-logo-01.jpg"
                        alt="Ariston"
                        width="295"
                        height="56"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/household-01.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/household-logo-02.jpg"
                        alt="Daytek"
                        width="222"
                        height="90"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/household-02.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-heading">
                <button
                  class="accordion-trigger"
                  type="button"
                  id="acc-kitchens"
                  aria-expanded="false"
                  aria-controls="acc-kitchens-panel"
                >
                  <span class="accordion-icon">
                    <img src="assets/images/electronic-item-03.png" alt="" width="60" height="60" />
                  </span>
                  <span class="accordion-label">Built-in &amp; Free Standing Kitchens</span>
                  <span class="accordion-toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                class="accordion-panel"
                id="acc-kitchens-panel"
                role="region"
                aria-labelledby="acc-kitchens"
              >
                <div class="accordion-panel-inner">
                  <ul class="brand-grid">
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/kitchen-logo-01.jpg"
                        alt="Rinnai"
                        width="255"
                        height="61"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/kitchen-01.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                    <li class="brand-card">
                      <img
                        class="brand-card-logo"
                        src="assets/images/kitchen-logo-02.jpg"
                        alt="Ariston"
                        width="295"
                        height="56"
                        loading="lazy"
                      />
                      <img
                        class="brand-card-media"
                        src="assets/images/kitchen-02.jpg"
                        alt=""
                        width="600"
                        height="350"
                        loading="lazy"
                      />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-heading">
                <button
                  class="accordion-trigger"
                  type="button"
                  id="acc-tv"
                  aria-expanded="false"
                  aria-controls="acc-tv-panel"
                >
                  <span class="accordion-icon">
                    <img src="assets/images/electronic-item-04.png" alt="" width="60" height="60" />
                  </span>
                  <span class="accordion-label">Televisions</span>
                  <span class="accordion-toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div class="accordion-panel" id="acc-tv-panel" role="region" aria-labelledby="acc-tv">
                <div class="accordion-panel-inner">
                  <!-- Brand cards for this category go here, as in the panels above. -->
                  <p class="accordion-empty">Brand line-up coming soon.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-heading">
                <button
                  class="accordion-trigger"
                  type="button"
                  id="acc-storage"
                  aria-expanded="false"
                  aria-controls="acc-storage-panel"
                >
                  <span class="accordion-icon">
                    <img src="assets/images/electronic-item-05.png" alt="" width="60" height="60" />
                  </span>
                  <span class="accordion-label">Storage &amp; Material Handling</span>
                  <span class="accordion-toggle" aria-hidden="true"></span>
                </button>
              </h3>
              <div
                class="accordion-panel"
                id="acc-storage-panel"
                role="region"
                aria-labelledby="acc-storage"
              >
                <div class="accordion-panel-inner">
                  <!-- Brand cards for this category go here, as in the panels above. -->
                  <p class="accordion-empty">Brand line-up coming soon.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
