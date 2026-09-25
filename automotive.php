<?php
$page = [
    'title' => 'Automotive — Al Hashar Group',
    'description' => 'Al Hashar Automotive — a leading automotive distributor in Oman for over five decades, from luxury cars to trucks, buses and construction equipment.',
    'og_description' => 'A leading automotive distributor in Oman for over five decades, with showrooms and after-sales facilities across the country.',
    'og_image' => 'assets/images/hero-automotive.jpg',
    'nav' => 'businesses',
    'subnav' => 'automotive',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Automotive
           The bar along the bottom links to each company's section below.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-automotive.jpg"
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
                  <li>Our Business</li>
                  <li aria-current="page">Automotive</li>
                </ol>
              </nav>

              <h1 class="page-hero-title" id="hero-title">Automotive.</h1>
              <p class="page-hero-lead page-hero-lead--medium">
                Al Hashar has been a leading automotive distributor for over 5 decades, since the
                renaissance of Oman, and has gained trust and established its reputation dealing
                with high ethics and professionalism.
              </p>
              <p class="page-hero-text">
                Al Hashar is a renowned name in Oman, offering a diverse range of vehicles, from
                luxury cars and family sedans to trucks, buses, cranes, and construction equipment.
                With over five decades of experience in the automotive industry, the company has
                established showrooms and after-sales facilities across the country, staffed by
                skilled professionals who ensure smooth and efficient operations.
              </p>
            </div>
          </div>
        </div>

        <nav class="page-hero-tabs page-hero-tabs--clear" aria-label="Automotive companies">
          <div class="container">
            <ul>
              <li><a class="is-active" href="#al-muhannad-al-hashar">Al Muhannad Al Hashar</a></li>
              <li><a href="#al-hashar-automotive">Al Hashar Automotive</a></li>
              <li><a href="#al-hashar-co">Al Hashar &amp; Co</a></li>
            </ul>
          </div>
        </nav>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Brands — logo strip, then one row per brand: copy on the left,
           picture with a navy details box on the right. The picture wipes
           in on scroll (main.js › initBrandRows).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section brands" aria-labelledby="brands-title">
        <div class="container">
          <h2 class="sr-only" id="brands-title">Our automotive brands</h2>

          <nav class="brand-strip" aria-label="Brands" data-aos="fade-up">
            <ul>
              <li>
                <a href="#brand-aston-martin">
                  <img
                    src="assets/images/automotive-logo-01.png"
                    alt="Aston Martin"
                    width="200"
                    height="100"
                  />
                </a>
              </li>
              <li>
                <a href="#brand-infiniti">
                  <img
                    src="assets/images/automotive-logo-02.png"
                    alt="Infiniti"
                    width="200"
                    height="100"
                  />
                </a>
              </li>
              <li>
                <a href="#brand-nissan">
                  <img
                    src="assets/images/automotive-logo-03.png"
                    alt="Nissan"
                    width="200"
                    height="100"
                  />
                </a>
              </li>
              <li>
                <a href="#brand-peugeot">
                  <img
                    src="assets/images/automotive-logo-04.png"
                    alt="Peugeot"
                    width="200"
                    height="100"
                  />
                </a>
              </li>
            </ul>
          </nav>

          <article
            class="brand-row"
            id="brand-aston-martin"
            aria-labelledby="brand-aston-martin-title"
          >
            <div class="brand-row-body">
              <h3 class="brand-row-logo" id="brand-aston-martin-title">
                <img
                  src="assets/images/automotive-logo-01.png"
                  alt="Aston Martin"
                  width="200"
                  height="100"
                  loading="lazy"
                />
              </h3>
              <p class="brand-row-lead">
                All models are and will continue to be hand-built and bespoke, using high technology
                processes within a very modern environment.
              </p>
              <p class="brand-row-text">
                Our expert team ensures that the motoring experience remains as pleasurable as it
                was ever intended to be.
              </p>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about Aston Martin</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media">
                <img
                  src="assets/images/automotive-aston-martin.jpg"
                  alt="Aston Martin vehicle"
                  width="750"
                  height="540"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us : <a href="mailto:info@www.astonmartin.com">info@www.astonmartin.com</a>
                </p>
                <ul class="brand-row-actions">
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="https://www.astonmartin.com"
                      target="_blank"
                      rel="noopener"
                    >
                      Visit Website <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="link-arrow link-arrow--plain" href="contact.php#outlets">
                      View Sales Outlets <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>

          <article class="brand-row" id="brand-infiniti" aria-labelledby="brand-infiniti-title">
            <div class="brand-row-body">
              <h3 class="brand-row-logo" id="brand-infiniti-title">
                <img
                  src="assets/images/automotive-logo-02.png"
                  alt="Infiniti"
                  width="200"
                  height="100"
                  loading="lazy"
                />
              </h3>
              <p class="brand-row-lead">
                Infiniti cars embody a fusion of luxury, performance and innovation, captivating
                drivers with their refined drive, sleek designs and advanced technology.
              </p>
              <p class="brand-row-text">
                Every model is crafted with meticulous attention to detail, offering a harmonious
                balance between comfort and exhilaration.
              </p>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about Infiniti</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media">
                <img
                  src="assets/images/automotive-infinity.jpg"
                  alt="Infiniti vehicle"
                  width="750"
                  height="540"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us : <a href="mailto:info@infiniti-oman.com">info@infiniti-oman.com</a>
                </p>
                <ul class="brand-row-actions">
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="https://www.infiniti-oman.com"
                      target="_blank"
                      rel="noopener"
                    >
                      Visit Website <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="link-arrow link-arrow--plain" href="contact.php#outlets">
                      View Sales Outlets <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>

          <article class="brand-row" id="brand-nissan" aria-labelledby="brand-nissan-title">
            <div class="brand-row-body">
              <h3 class="brand-row-logo" id="brand-nissan-title">
                <img
                  src="assets/images/automotive-logo-03.png"
                  alt="Nissan"
                  width="200"
                  height="100"
                  loading="lazy"
                />
              </h3>
              <p class="brand-row-lead">
                Nissan is renowned for its innovative designs, cutting-edge technology, and
                commitment to sustainability.
              </p>
              <p class="brand-row-text">
                With a rich history spanning decades, Nissan has continuously pushed the boundaries
                of automotive excellence, delivering vehicles that combine performance, efficiency
                and style.
              </p>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about Nissan</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media">
                <img
                  src="assets/images/automotive-nissan.jpg"
                  alt="Nissan vehicle"
                  width="750"
                  height="540"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us : <a href="mailto:info@en.nissan-oman.com">info@en.nissan-oman.com</a>
                </p>
                <ul class="brand-row-actions">
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="https://en.nissan-oman.com"
                      target="_blank"
                      rel="noopener"
                    >
                      Visit Website <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="link-arrow link-arrow--plain" href="contact.php#outlets">
                      View Sales Outlets <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>

          <article class="brand-row" id="brand-peugeot" aria-labelledby="brand-peugeot-title">
            <div class="brand-row-body">
              <h3 class="brand-row-logo" id="brand-peugeot-title">
                <img
                  src="assets/images/automotive-logo-04.png"
                  alt="Peugeot"
                  width="200"
                  height="100"
                  loading="lazy"
                />
              </h3>
              <p class="brand-row-lead">
                Peugeot cars blend French elegance, advanced technology, and dynamic performance.
              </p>
              <p class="brand-row-text">
                With over 2 centuries of innovation, each model from city cars to SUVs to vans,
                boasts sleek design and refined details. Peugeot prioritizes sustainability,
                embracing eco-friendly solutions. Urban streets or adventures, Peugeot offers style,
                comfort and driving pleasure.
              </p>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about Peugeot</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media">
                <img
                  src="assets/images/automotive-peugeot.jpg"
                  alt="Peugeot vehicle"
                  width="750"
                  height="540"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us : <a href="mailto:info@www.astonmartin.com">info@www.astonmartin.com</a>
                </p>
                <ul class="brand-row-actions">
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="https://www.peugeot.com"
                      target="_blank"
                      rel="noopener"
                    >
                      Visit Website <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a class="link-arrow link-arrow--plain" href="contact.php#outlets">
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
           Automotive facilities — three figures over the model line-up.
           The line-up picture carries its own #fbfbfb ground, which the
           section matches so the edges disappear.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section facilities" aria-labelledby="facilities-title">
        <div class="container">
          <div class="section-head section-head--center" data-aos="fade-up">
            <h2 class="section-title" id="facilities-title">Automotive <em>Facilities</em></h2>
          </div>

          <ul class="facility-list">
            <li class="facility" data-aos="fade-up">
              <img
                class="facility-icon"
                src="assets/images/automotive-sub-hd-icon-01.png"
                alt=""
                width="32"
                height="32"
                loading="lazy"
              />
              <div>
                <h3 class="facility-title">3S Facilities</h3>
                <p class="facility-text">spread across the nation</p>
              </div>
            </li>
            <li class="facility" data-aos="fade-up" data-aos-delay="150">
              <img
                class="facility-icon"
                src="assets/images/automotive-sub-hd-icon-02.png"
                alt=""
                width="32"
                height="32"
                loading="lazy"
              />
              <div>
                <h3 class="facility-title">Exclusive <br class="facility-break" />Tyre Centres</h3>
                <p class="facility-text">at Wadi Kabir, Sohar, Sur, Ibri &amp; Salalah</p>
              </div>
            </li>
            <li class="facility" data-aos="fade-up" data-aos-delay="300">
              <img
                class="facility-icon"
                src="assets/images/automotive-sub-hd-icon-03.png"
                alt=""
                width="32"
                height="32"
                loading="lazy"
              />
              <div>
                <h3 class="facility-title">
                  Additional <br class="facility-break" />Spare part Outlet
                </h3>
                <p class="facility-text">in Wadi Kabir</p>
              </div>
            </li>
          </ul>

          <div class="facilities-media" data-aos="fade-left">
            <img
              src="assets/images/automotive-facilities.jpg"
              alt="The Nissan line-up: Magnite, Kicks, X-Trail, X-Terra, Pathfinder and Patrol"
              width="1450"
              height="300"
              loading="lazy"
            />
          </div>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
