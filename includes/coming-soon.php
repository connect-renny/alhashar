<?php
/**
 * "Content will update soon" body for business pages that have no copy yet.
 * Set $page (as for header.php) plus $soon = ['title', 'lead', 'image'] and
 * require this file instead of header.php / footer.php.
 */
[$heroW, $heroH] = getimagesize(__DIR__ . '/../' . $soon['image']) ?: [1920, 945];

require __DIR__ . '/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — <?= e($soon['title']) ?>
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="<?= e($soon['image']) ?>"
            alt=""
            width="<?= $heroW ?>"
            height="<?= $heroH ?>"
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
                  <li aria-current="page"><?= e($soon['title']) ?></li>
                </ol>
              </nav>

              <h1 class="page-hero-title" id="hero-title"><?= e($soon['title']) ?>.</h1>
              <p class="page-hero-text"><?= e($soon['lead']) ?></p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Placeholder until the division's content arrives.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section coming-soon" aria-labelledby="coming-soon-title">
        <div class="container">
          <div class="coming-soon-card" data-aos="fade-up">
            <span class="coming-soon-icon" aria-hidden="true">
              <i class="bi bi-hourglass-split"></i>
            </span>
            <h2 class="section-title" id="coming-soon-title">Content will <em>update soon.</em></h2>
            <p class="section-lead coming-soon-lead">
              We're preparing this page. In the meantime, get in touch with our team for
              details on <?= e($soon['title']) ?> at Al Hashar Group.
            </p>
            <div class="coming-soon-actions">
              <a class="btn btn--dark" href="contact.php">
                Contact us <i class="bi bi-arrow-right" aria-hidden="true"></i>
              </a>
              <a class="btn btn--outline" href="index.php">Back to home</a>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>
