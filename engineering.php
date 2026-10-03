<?php
$page = [
    'title' => 'Engineering — Al Hashar Group',
    'description' => 'Al Hashar Engineering LLC — business consulting and advisory services across the Middle East, India and Africa, and an Al Hashar Group company.',
    'og_description' => 'Al Hashar Engineering LLC offers a one-stop solution in engineering and design consultancy across the Middle East, India and Africa.',
    'og_image' => 'assets/images/hero-construction.jpg',
    'nav' => 'businesses',
    'subnav' => 'engineering',
];

$services = [
    ['icon' => 'bi-kanban', 'label' => 'Project Management'],
    ['icon' => 'bi-rulers', 'label' => 'Architectural & Engineering Design'],
    ['icon' => 'bi-lamp', 'label' => 'Interior Design & Execution'],
    ['icon' => 'bi-gear-wide-connected', 'label' => 'Industrial Design & Process Support'],
    ['icon' => 'bi-box-seam', 'label' => 'Logistics & Warehousing'],
    ['icon' => 'bi-lightning-charge', 'label' => 'Specialist MEP Consultancy & EPC'],
    ['icon' => 'bi-tree', 'label' => 'Energy & Environmental Products'],
    ['icon' => 'bi-tools', 'label' => 'Engineering Products'],
];

require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Engineering (Al Hashar Engineering LLC)
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <!-- Placeholder: swap for an Engineering photo when one arrives. -->
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
                  <li aria-current="page">Engineering</li>
                </ol>
              </nav>

              <h1 class="page-hero-title" id="hero-title">Engineering.</h1>
              <p class="page-hero-text">
                Al Hashar Engineering LLC is a key regional player in business consulting and
                advisory services across the Middle East, India &amp; Africa.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           About the company — .brand-row, as on the Construction page.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section construction-about" aria-labelledby="about-company-title">
        <div class="container">
          <article class="brand-row">
            <div class="brand-row-body">
              <h2 class="brand-row-title" id="about-company-title">About Company</h2>
              <p class="brand-row-lead">
                Al Hashar Engineering LLC is a key regional player in business consulting and
                advisory services field within the Middle East, India &amp; Africa regions. They
                work towards bridging the gaps in engineering and design approach, and providing
                all clients a “One stop Solution”.
              </p>              
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about Al Hashar Engineering</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media" style="--media-ratio: 585 / 230">
                <img
                  src="assets/images/diverse-business-03.jpg"
                  alt="Architectural rendering of a stepped public courtyard with people walking through it"
                  width="585"
                  height="230"
                  loading="lazy"
                />
              </div>
            </div>
          </article>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           What they offer — eight consultancy areas, icon over label.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section offers" aria-labelledby="offers-title">
        <div class="container">
          <div class="section-head section-head--center" data-aos="fade-up">
            <h2 class="section-title" id="offers-title">What they <em>Offer.</em></h2>
            <p class="section-lead offers-lead">
              The company offers consultancy in the following areas:
            </p>
          </div>

          <ul class="offer-list offer-list--quad">
<?php foreach ($services as $i => $service): ?>
            <li class="offer" data-aos="fade-up" data-aos-delay="<?= ($i % 4) * 100 ?>">
              <span class="offer-media">
                <i class="offer-icon offer-icon--glyph bi <?= e($service['icon']) ?>" aria-hidden="true"></i>
              </span>
              <h3 class="offer-title"><?= e($service['label']) ?></h3>
            </li>
<?php endforeach; ?>
          </ul>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
