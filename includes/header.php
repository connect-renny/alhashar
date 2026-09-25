<?php
/**
 * Everything from <!doctype> to </header>. Set $page before including:
 *
 *   $page = ['title' => '…', 'description' => '…', 'nav' => 'about'];
 *   require __DIR__ . '/includes/header.php';
 */
require_once __DIR__ . '/config.php';

$businesses = [
    ['key' => 'automotive', 'href' => 'automotive.php', 'icon' => 'bi-car-front', 'label' => 'Automotive'],
    ['key' => 'heavy-equipment', 'href' => '#', 'icon' => 'bi-truck', 'label' => 'Construction & Heavy Equipment'],
    ['key' => 'electronics', 'href' => 'electronics.php', 'icon' => 'bi-tv', 'label' => 'Home Appliances & Electronics'],
    ['key' => 'trading', 'href' => '#', 'icon' => 'bi-box-seam', 'label' => 'Trading'],
    ['key' => 'hospitality', 'href' => 'hospitality.php', 'icon' => 'bi-building', 'label' => 'Hospitality'],
    ['key' => 'construction', 'href' => 'construction.php', 'icon' => 'bi-bricks', 'label' => 'Construction & Contracting'],
    ['key' => 'engineering', 'href' => '#', 'icon' => 'bi-gear-wide-connected', 'label' => 'Engineering'],
];

$navLinks = [
    ['key' => 'careers', 'href' => 'careers.php', 'label' => 'Careers'],
    ['key' => 'contact', 'href' => 'contact.php', 'label' => 'Contact Us'],
    ['key' => 'news', 'href' => 'news.php', 'label' => 'Media center'],
];

/** class + aria-current for a top-level nav link. */
$navState = function (string $key, string $class = 'nav-link') use ($page): string {
    $active = $page['nav'] === $key;
    return 'class="' . $class . ($active ? ' is-active' : '') . '"'
        . ($active && $key !== 'businesses' ? ' aria-current="page"' : '');
};
?>
<!doctype html>
<html lang="en" dir="ltr" class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

    <title><?= e($page['title']) ?></title>
    <meta
      name="description"
      content="<?= e($page['description']) ?>"
    />

    <!-- Social cards. og:image wants 1200×630. -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= e($page['og_title'] ?? $page['title']) ?>" />
    <meta
      property="og:description"
      content="<?= e($page['og_description'] ?? $page['description']) ?>"
    />
    <meta property="og:image" content="<?= e($page['og_image']) ?>" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- One scalable icon covers every size in modern browsers… -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml" />
    <!-- …with raster fallbacks for those that won't take an SVG. -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon-192.png" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png" />

    <!-- Browser chrome colour. -->
    <meta name="theme-color" content="#0b1f41" />

    <!-- The two faces on screen at first paint, preloaded so text renders in
         them straight away. Keep in sync with scss/base/_fonts.scss. -->
    <link
      rel="preload"
      href="assets/fonts/poppins-latin-400-normal.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="assets/fonts/AbrilDisplay-SemiBoldItalic.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <!-- style.css last — it owns the tokens everything above is themed with. -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- The preloader plays once per browser session. Runs before first paint
         so later page views never flash it. -->
    <script>
      try {
        if (sessionStorage.getItem("ah-loader-seen")) document.documentElement.classList.add("loader-seen");
      } catch (e) {}
    </script>
  </head>

  <body>
    <!-- ═══════════════════════════════════════════════════════════════════
         Preloader — wordmark over a filling bar, counter bottom-right.
         main.js (initLoader) wipes it up on `load` (min 2.4s, 5s failsafe).
         ═══════════════════════════════════════════════════════════════════ -->
    <div class="loader-overlay" id="loader" aria-hidden="true">
      <p class="loader-tag"><span class="loader-dot"></span>Al Hashar Group · 65 Years</p>
      <div class="loader">
        <p class="loader-mark">
          <span class="loader-mark__solid">Al Hashar</span>
          <span class="loader-mark__outline">Decades of Trust</span>
        </p>
        <p class="loader-line">A future of excellence<span class="loader-dots"></span></p>
      </div>
      <p class="loader-count">
        <span data-loader-num>000</span><span class="loader-count__suffix">%</span>
      </p>
      <span class="loader-bar"><span class="loader-bar__fill" data-loader-bar></span></span>
    </div>

    <a class="skip-link" href="#main">Skip to content</a>

    <!-- ═══════════════════════════════════════════════════════════════════
         Header / navigation
         Transparent over the hero; main.js adds .navbar-fixed past 10px of
         scroll. Below `lg` the .navbar-nav block becomes the off-canvas
         drawer, driven by the hamburger.
         ═══════════════════════════════════════════════════════════════════ -->
    <header class="header">
      <nav class="navbar-main" aria-label="Main">
        <div class="navbar-inner">
          <a class="navbar-brand" href="index.php">
            <img
              src="assets/images/alhashar-logo-white.png"
              alt="Al Hashar Group"
              width="90"
              height="72"
            />
            <img
              src="assets/images/65-anniversary.png"
              alt="Celebrating 65th anniversary"
              width="90"
              height="72"
            />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            aria-controls="main-nav"
            aria-expanded="false"
            aria-label="Open menu"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>

          <div class="navbar-nav" id="main-nav">
            <button class="navbar-close" type="button" aria-label="Close menu">
              <i class="bi bi-x-lg" aria-hidden="true"></i>
            </button>

            <ul class="navbar-menu">
              <li>
                <a <?= $navState('home', 'nav-link nav-link--icon') ?> href="index.php">
                  <i class="bi bi-house-door-fill" aria-hidden="true"></i>
                  <span class="sr-only">Home</span>
                </a>
              </li>
              <li>
                <a <?= $navState('about') ?> href="about.php">About us</a>
              </li>
              <li class="nav-item has-dropdown">
                <span <?= $navState('businesses') ?>>Our Businesses</span>
                <button
                  class="nav-dropdown-toggle"
                  type="button"
                  aria-expanded="false"
                  aria-controls="nav-businesses"
                  aria-label="Show Our Businesses menu"
                >
                  <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="nav-dropdown" id="nav-businesses">
<?php foreach ($businesses as $item): ?>
                  <li>
                    <a href="<?= e($item['href']) ?>"<?= $page['subnav'] === $item['key'] ? ' aria-current="page"' : '' ?>
                      ><i class="bi <?= e($item['icon']) ?>" aria-hidden="true"></i><?= e($item['label']) ?></a
                    >
                  </li>
<?php endforeach; ?>
                </ul>
              </li>
<?php foreach ($navLinks as $item): ?>
              <li><a <?= $navState($item['key']) ?> href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a></li>
<?php endforeach; ?>
            </ul>

            <ul class="navbar-tools">
              <!-- Search — hidden for now.
              <li>
                <button class="nav-tool" type="button" aria-label="Search">
                  <i class="bi bi-search" aria-hidden="true"></i>
                </button>
              </li>
              -->
              <li>
                <a
                  class="nav-tool"
                  href="ar/index.php"
                  hreflang="ar"
                  lang="ar"
                  aria-label="العربية"
                >
                  <i class="bi bi-globe" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="navbar-backdrop"></div>
    </header>

