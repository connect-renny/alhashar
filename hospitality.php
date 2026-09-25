<?php
$page = [
    'title' => 'Hospitality — Al Hashar Group',
    'description' => 'The Sheraton Oman Hotel — a Muscat landmark in Ruwi, offering 5-star hospitality since 1985.',
    'og_description' => 'The Sheraton Oman Hotel, opened in 1985, is a landmark in Muscat renowned for over three decades of 5-star hospitality.',
    'og_image' => 'assets/images/hero-hospitality.jpg',
    'nav' => 'businesses',
    'subnav' => 'hospitality',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Hospitality (Sheraton Oman Hotel)
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-hospitality.jpg"
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
                  <li aria-current="page">Hospitality</li>
                </ol>
              </nav>

              <h1 class="page-hero-logo page-hero-logo--compact" id="hero-title">
                <img
                  src="assets/images/hospitality-logo-sheraton.png"
                  alt="Sheraton Oman Hotel"
                  width="184"
                  height="160"
                />
              </h1>
              <p class="page-hero-text">
                The Sheraton Oman Hotel, opened in 1985, is a landmark in Muscat, renowned for over
                three decades of 5-star hospitality. Located in Ruwi, the city’s financial hub, it
                is the tallest building in Muscat.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           About Sheraton — the .brand-row layout (pages/_automotive.scss).
           The picture wipes in on scroll (main.js › initBrandRows).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section hospitality-about" aria-labelledby="about-sheraton-title">
        <div class="container">
          <article class="brand-row">
            <div class="brand-row-body">
              <h2 class="brand-row-title" id="about-sheraton-title">About Sheraton</h2>
              <p class="brand-row-lead">
                The newly renovated hotel has 230 elevated rooms, including 27 suites for their
                guests. Besides this, they have nine meeting rooms, two boardrooms and one of the
                biggest ballrooms in the country with space close to 1200 sq m.
              </p>
              <p class="brand-row-text">
                The hotel has four restaurants and a lounge. Among them is The Courtyard – an
                all-day dining place with a capacity of 220 guests and Asado – an Argentinean Steak
                House, where 100 guests can be accommodated. The hotel has two pools, one indoor and
                one outdoor, along with a spa and a fitness area.
              </p>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about the Sheraton Oman Hotel</span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media">
                <img
                  src="assets/images/hospitality-about-sheraton.jpg"
                  alt="A four-poster suite bedroom at the Sheraton Oman Hotel"
                  width="750"
                  height="540"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us : <a href="mailto:info@marriott.com">info@marriott.com</a>
                </p>
                <ul class="brand-row-actions">
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="https://www.marriott.com"
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
           Gallery — looping, autoplaying Swiper (main.js › initSliders);
           each photo opens in the lightbox (main.js › initLightbox).
           Swiper's loop needs more slides than it shows, so the three
           photos are listed twice; the lightbox skips the repeats. Point
           each link's href at a full-size image when there is one.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section gallery" aria-label="Sheraton Oman Hotel gallery">
        <div class="container">
          <div
            class="swiper js-swiper gallery-swiper"
            data-swiper-name="sheratonGallery"
            data-swiper='{"loop":true,"speed":900,"spaceBetween":14,"slidesPerView":1.15,"grabCursor":true,"autoplay":{"delay":3500,"disableOnInteraction":false,"pauseOnMouseEnter":true},"navigation":{"prevEl":".gallery-prev","nextEl":".gallery-next"},"breakpoints":{"576":{"slidesPerView":2},"992":{"slidesPerView":3}}}'
            data-aos="fade-up"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a
                  class="gallery-item"
                  href="assets/images/hospitality-sheraton-gallery-thumb-01.jpg"
                  data-lightbox="sheraton"
                >
                  <img
                    src="assets/images/hospitality-sheraton-gallery-thumb-01.jpg"
                    alt="Suite living room with sofas, a dining area and mountain views"
                    width="440"
                    height="430"
                    loading="lazy"
                  />
                  <span class="gallery-zoom" aria-hidden="true">
                    <i class="bi bi-arrows-angle-expand"></i>
                  </span>
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  class="gallery-item"
                  href="assets/images/hospitality-sheraton-gallery-thumb-02.jpg"
                  data-lightbox="sheraton"
                >
                  <img
                    src="assets/images/hospitality-sheraton-gallery-thumb-02.jpg"
                    alt="King bedroom with a timber headboard and bench"
                    width="440"
                    height="430"
                    loading="lazy"
                  />
                  <span class="gallery-zoom" aria-hidden="true">
                    <i class="bi bi-arrows-angle-expand"></i>
                  </span>
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  class="gallery-item"
                  href="assets/images/hospitality-sheraton-gallery-thumb-03.jpg"
                  data-lightbox="sheraton"
                >
                  <img
                    src="assets/images/hospitality-sheraton-gallery-thumb-03.jpg"
                    alt="Marble bathroom with a soaking tub and walk-in shower"
                    width="440"
                    height="430"
                    loading="lazy"
                  />
                  <span class="gallery-zoom" aria-hidden="true">
                    <i class="bi bi-arrows-angle-expand"></i>
                  </span>
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  class="gallery-item"
                  href="assets/images/hospitality-sheraton-gallery-thumb-01.jpg"
                  data-lightbox="sheraton"
                >
                  <img
                    src="assets/images/hospitality-sheraton-gallery-thumb-01.jpg"
                    alt="Suite living room with sofas, a dining area and mountain views"
                    width="440"
                    height="430"
                    loading="lazy"
                  />
                  <span class="gallery-zoom" aria-hidden="true">
                    <i class="bi bi-arrows-angle-expand"></i>
                  </span>
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  class="gallery-item"
                  href="assets/images/hospitality-sheraton-gallery-thumb-02.jpg"
                  data-lightbox="sheraton"
                >
                  <img
                    src="assets/images/hospitality-sheraton-gallery-thumb-02.jpg"
                    alt="King bedroom with a timber headboard and bench"
                    width="440"
                    height="430"
                    loading="lazy"
                  />
                  <span class="gallery-zoom" aria-hidden="true">
                    <i class="bi bi-arrows-angle-expand"></i>
                  </span>
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  class="gallery-item"
                  href="assets/images/hospitality-sheraton-gallery-thumb-03.jpg"
                  data-lightbox="sheraton"
                >
                  <img
                    src="assets/images/hospitality-sheraton-gallery-thumb-03.jpg"
                    alt="Marble bathroom with a soaking tub and walk-in shower"
                    width="440"
                    height="430"
                    loading="lazy"
                  />
                  <span class="gallery-zoom" aria-hidden="true">
                    <i class="bi bi-arrows-angle-expand"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <div class="gallery-nav">
            <button class="gallery-prev" type="button" aria-label="Previous slide">
              <i class="bi bi-chevron-left" aria-hidden="true"></i>
            </button>
            <button class="gallery-next" type="button" aria-label="Next slide">
              <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
