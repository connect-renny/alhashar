<?php
$page = [
    'title' => 'News — Al Hashar Group',
    'description' => 'The latest news from Al Hashar Group — new launches, partnerships and milestones across Oman.',
    'og_description' => 'Al Hashar Group celebrates new milestones in innovation, customer trust and industry leadership across Oman.',
    'og_image' => 'assets/images/hero-news.jpg',
    'nav' => 'news',
];
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — News
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-news.jpg"
            alt=""
            width="1920"
            height="945"
            fetchpriority="high"
          />
        </div>

        <div class="page-hero-body">
          <div class="container">
            <div class="page-hero-content page-hero-content--xwide">
              <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                <ol>
                  <li><a href="index.php">Home</a></li>
                  <li aria-current="page">News</li>
                </ol>
              </nav>

              <h1 class="page-hero-title page-hero-title--inline" id="hero-title">
                News <em>Updates.</em>
              </h1>
              <p class="page-hero-headline">
                Al Hashar Group Celebrates New Milestones in Innovation, Customer Trust, and
                Industry Leadership Across Oman.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Latest news — two-up cards. The whole card is one link (the
           title's, stretched); hovering it runs the picture's zoom, light
           sweep and frame (pages/_news.scss).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section news" aria-labelledby="news-title">
        <div class="container">
          <div class="section-head" data-aos="fade-up">
            <h2 class="section-title" id="news-title">Latest <em>News</em></h2>
          </div>

          <div class="news-grid">
            <article class="news-card" data-aos="fade-up">
              <div class="news-card-media">
                <img
                  src="assets/images/news-item-01.jpg"
                  alt="Aston Martin Vantage unveiled with Al Hashar and Aston Martin representatives"
                  width="640"
                  height="325"
                  loading="lazy"
                />
                <time class="news-card-date" datetime="08-02"><span>02</span> Aug</time>
              </div>
              <div class="news-card-body">
                <h3 class="news-card-title">
                  <a href="news-details.php">Aston Martin Vantage debuts in Oman</a>
                </h3>
                <p class="news-card-text">
                  Aston Martin Vantage, the latest addition to the luxury marque’s sportscar
                  line-up, made its official debut at the Aston Martin Oman showroom in the
                  Sultanate of Oman recently.
                </p>
                <span class="link-arrow link-arrow--plain news-card-more" aria-hidden="true">
                  Explore <i class="bi bi-arrow-right"></i>
                </span>
              </div>
            </article>
            <article class="news-card" data-aos="fade-up" data-aos-delay="150">
              <div class="news-card-media">
                <img
                  src="assets/images/news-item-02.jpg"
                  alt="The Al Hashar Group head office in Azaiba with Aston Martin and Peugeot showrooms"
                  width="640"
                  height="325"
                  loading="lazy"
                />
                <time class="news-card-date" datetime="08-02"><span>02</span> Aug</time>
              </div>
              <div class="news-card-body">
                <h3 class="news-card-title">
                  <a href="news-details.php"
                    >Al Hashar &amp; Peugeot announce a strategic partnership</a
                  >
                </h3>
                <p class="news-card-text">
                  Al Hashar Group, launched the Peugeot brand with a glittering ceremony held at its
                  head office in Azaiba.
                </p>
                <span class="link-arrow link-arrow--plain news-card-more" aria-hidden="true">
                  Explore <i class="bi bi-arrow-right"></i>
                </span>
              </div>
            </article>
            <article class="news-card" data-aos="fade-up">
              <div class="news-card-media">
                <img
                  src="assets/images/news-item-03.jpg"
                  alt="A Nissan distributorship agreement signing ceremony in Oman"
                  width="640"
                  height="325"
                  loading="lazy"
                />
                <time class="news-card-date" datetime="08-02"><span>02</span> Aug</time>
              </div>
              <div class="news-card-body">
                <h3 class="news-card-title">
                  <a href="news-details.php">Aston Martin Vantage debuts in Oman</a>
                </h3>
                <p class="news-card-text">
                  Aston Martin Vantage, the latest addition to the luxury marque’s sportscar
                  line-up, made its official debut at the Aston Martin Oman showroom in the
                  Sultanate of Oman recently.
                </p>
                <span class="link-arrow link-arrow--plain news-card-more" aria-hidden="true">
                  Explore <i class="bi bi-arrow-right"></i>
                </span>
              </div>
            </article>
            <article class="news-card" data-aos="fade-up" data-aos-delay="150">
              <div class="news-card-media">
                <img
                  src="assets/images/news-item-04.jpg"
                  alt="An Infiniti certificate presentation"
                  width="640"
                  height="325"
                  loading="lazy"
                />
                <time class="news-card-date" datetime="08-02"><span>02</span> Aug</time>
              </div>
              <div class="news-card-body">
                <h3 class="news-card-title">
                  <a href="news-details.php"
                    >Al Hashar &amp; Peugeot announce a strategic partnership</a
                  >
                </h3>
                <p class="news-card-text">
                  Al Hashar Group, launched the Peugeot brand with a glittering ceremony held at its
                  head office in Azaiba.
                </p>
                <span class="link-arrow link-arrow--plain news-card-more" aria-hidden="true">
                  Explore <i class="bi bi-arrow-right"></i>
                </span>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
