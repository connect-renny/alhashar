<?php
$page = [
    'title' => 'About Us — Al Hashar Group',
    'description' => 'The vision, mission and values that have guided Al Hashar Group through more than five decades in Oman.',
    'og_description' => 'To be Oman’s most trusted and progressive business group, creating lasting value for people, partners and the nation.',
    'og_image' => 'assets/images/hero-about-us.jpg',
    'nav' => 'group',
    'subnav' => 'about',
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
            src="assets/images/hero-about-us.jpg"
            alt=""
            width="1920"
            height="900"
            fetchpriority="high"
          />
        </div>

        <div class="page-hero-body">
          <div class="container">
            <div class="page-hero-content page-hero-content--wide">
              <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                <ol>
                  <li><a href="index.php">Home</a></li>
                  <li>Our Group</li>
                  <li aria-current="page">About us</li>
                </ol>
              </nav>

              <h1 class="page-hero-title page-hero-title--bold" id="hero-title">
                Alhashar Group <em>About Us.</em>
              </h1>
            </div>
          </div>
        </div>

        <div class="page-hero-scroll" aria-hidden="true"><span>Scroll</span></div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           About Al Hashar Group
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section about-intro" aria-labelledby="about-intro-title">
        <div class="container">
          <div class="about-intro-grid">
            <div class="about-intro-text" data-aos="fade-up">
              <div class="section-head">
                <span class="section-eyebrow">About Al Hashar Group</span>
                <h2 class="section-title" id="about-intro-title">
                  Over 50 Years of <em>Excellence</em>
                </h2>
              </div>
              <p class="about-intro-lead">
                For more than five decades, Al Hashar Group has been part of Oman’s journey of
                growth and progress. Established through the vision of its founder, the late Sheikh
                Saeed Bin Nasser Al Hashar, the Group has evolved into one of the Sultanate’s
                established and diversified family-owned business groups.
              </p>
              <p>
                Today, Al Hashar Group operates across a broad range of sectors, including
                automotive, home appliances and electronics, heavy equipment, trading and services,
                engineering, hospitality and construction &amp; contracting. Through these diverse
                businesses, the Group connects customers and organisations across Oman with trusted
                international brands, quality products and dependable services.
              </p>
              <p>
                From the beginning, our customers have remained at the heart of everything we do.
                This commitment is supported by the expertise of our people and enduring
                relationships with leading global partners—relationships built on trust, shared
                values and long-term success.
              </p>
            </div>

            <div class="about-intro-media" data-aos="fade-up" data-aos-delay="150">
              <img
                src="assets/images/about-alhashar-pic.jpg"
                alt="Illustration of Oman’s heritage and modern skyline within the outline of the country"
                width="600"
                height="575"
                loading="lazy"
              />
            </div>
          </div>

          <p class="about-intro-outro" data-aos="fade-up">
            As we look to the future, we remain guided by our founder’s legacy while continuing to
            evolve, innovate and pursue new opportunities. Through every business and partnership,
            Al Hashar Group is committed to creating lasting value for its customers, its people,
            its partners and the Sultanate of Oman.
          </p>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Vision, mission & values
           Navy band, three statements side by side. Each card draws a gold
           line along its top on hover (pages/_about.scss › .purpose-card).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section section--brand purpose" id="vision" aria-labelledby="purpose-title">
        <div class="container">
          <div class="section-head" data-aos="fade-up">
            <span class="section-eyebrow">What Drives Us</span>
            <h2 class="section-title" id="purpose-title">Vision, Mission <em>&amp; Values</em></h2>
          </div>

          <div class="purpose-grid">
            <article class="purpose-card" data-aos="fade-up">
              <span class="purpose-card-icon" aria-hidden="true"><i class="bi bi-eye"></i></span>
              <h3 class="purpose-card-title">Our <em>Vision</em></h3>
              <p class="purpose-card-text">
                To be Oman’s most trusted and progressive business group, creating lasting value
                for people, partners and the nation.
              </p>
            </article>
            <article class="purpose-card" id="mission" data-aos="fade-up" data-aos-delay="150">
              <span class="purpose-card-icon" aria-hidden="true"><i class="bi bi-compass"></i></span>
              <h3 class="purpose-card-title">Our <em>Mission</em></h3>
              <p class="purpose-card-text">
                To enrich lives and enable progress in Oman by connecting people and businesses
                with trusted global brands, quality products and services, and experiences shaped
                by local understanding.
              </p>
            </article>
            <article class="purpose-card" data-aos="fade-up" data-aos-delay="300">
              <span class="purpose-card-icon" aria-hidden="true"><i class="bi bi-gem"></i></span>
              <h3 class="purpose-card-title">Our <em>Values</em></h3>
              <p class="purpose-card-text">
                Inspired by our founder’s principles and shaped by more than five decades of
                experience, our values guide how we serve our customers, support our people, build
                lasting partnerships and contribute to Oman’s progress.
              </p>
            </article>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Our values
           Heading, then six cards three across on desktop: gold
           icon tile, two-line title, description.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section values" id="values" aria-labelledby="values-title">
        <div class="container">
          <div class="section-head values-head" data-aos="fade-up">
            <h2 class="section-title" id="values-title">The Principles <em>That Guide Us</em></h2>
          </div>
          <ul class="values-grid">
<?php
$values = [
    ['icon' => 'bi-shield-check', 'title' => 'Trust and', 'em' => 'Integrity', 'text' => 'We act with honesty, fairness and professionalism, honoring our commitments and protecting the trust placed in us by our customers, employees and partners.'],
    ['icon' => 'bi-person-heart', 'title' => 'Customer', 'em' => 'Commitment', 'text' => 'We place our customers at the heart of every decision, striving to understand their needs and provide quality experiences supported by dependable service and long-term care.'],
    ['icon' => 'bi-people', 'title' => 'People and', 'em' => 'Belonging', 'text' => 'We value the people behind our progress and foster a respectful, inclusive environment where employees feel supported, recognised and empowered to grow.'],
    ['icon' => 'bi-link-45deg', 'title' => 'Enduring', 'em' => 'Partnerships', 'text' => 'We build relationships for the long term, working closely with our principals, partners and stakeholders to create mutual value and shared success.'],
    ['icon' => 'bi-award', 'title' => 'Excellence with', 'em' => 'Purpose', 'text' => 'We pursue the highest standards of quality, efficiency and accountability, ensuring that everything we do delivers meaningful and lasting value.'],
    ['icon' => 'bi-graph-up-arrow', 'title' => 'Progress for', 'em' => 'Oman', 'text' => 'We embrace innovation, pursue new opportunities and continuously evolve in ways that support Oman’s economic growth and future prosperity.'],
];
foreach ($values as $i => $value): ?>
            <li class="value-card" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 100 ?>">
              <span class="value-card-icon" aria-hidden="true"><i class="bi <?= e($value['icon']) ?>"></i></span>
              <h3 class="value-card-title"><?= e($value['title']) ?> <em><?= e($value['em']) ?></em></h3>
              <p class="value-card-text"><?= e($value['text']) ?></p>
            </li>
<?php endforeach; ?>
          </ul>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
