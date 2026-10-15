<?php
$page = [
    'title' => 'Construction & Heavy Equipment — Al Hashar Group',
    'description' => 'Cranes, forklifts and construction equipment from Tailift, Tadano, PM and Develon, with sales outlets in Muscat, Sohar and Salalah.',
    'og_description' => 'Cranes and construction equipment from Tailift, Tadano, PM and Develon — an Al Hashar Group business.',
    'og_image' => 'assets/images/hero-heavy-equipment.jpg',
    'nav' => 'businesses',
    'subnav' => 'heavy-equipment',
];

// One .brand-row per brand. Copy is from alhashargroup.com/cranes.php.
$brands = [
    [
        'id' => 'tailift',
        'name' => 'Tailift',
        'logo' => 'assets/images/heavy-equipment-logo-01.png',
        'image' => 'assets/images/heavy-equipment-tailift.jpg',
        'image_alt' => 'A red Tailift electric forklift at a warehouse loading bay',
        'image_size' => [750, 540],
        'lead' => 'Tailift forklift models are available from 1.5 to 10.0 ton capacity.',
        'text' => 'Powered by internal combustion engines or electric motors, Tailift forklifts are a viable alternative to established brands and offer customised solutions across sectors.',
        'specs' => [],
        'email' => 'tailift@alhashargroup.com',
        'web' => null,
    ],
    [
        'id' => 'tadano',
        'name' => 'Tadano',
        'logo' => 'assets/images/heavy-equipment-logo-02.png',
        'image' => 'assets/images/heavy-equipment-tadano.jpg',
        'image_alt' => 'A blue and white Tadano crawler crane at an industrial site',
        'image_size' => [750, 540],
        'lead' => 'Tadano’s diverse product range spans rough terrain, truck mounted and all terrain cranes.',
        'text' => 'It includes 12 ton to 80 ton capacity rough terrain cranes, 35 ton to 60 ton capacity truck mounted cranes and 40 ton to 600 ton capacity all terrain cranes. The winning range also includes crawler mounted telescopic boom cranes, truck loader cranes, aerial platforms and related products & equipment.',
        'specs' => [],
        'email' => 'tadano@alhashargroup.com',
        'web' => 'https://www.tadano.co.jp',
    ],
    [
        'id' => 'pm',
        'name' => 'PM Cranes',
        'logo' => 'assets/images/heavy-equipment-logo-03.png',
        'image' => 'assets/images/heavy-equipment-pm.jpg',
        'image_alt' => 'A PM 100 SP truck mounted crane lifting a load against a blue sky',
        'image_size' => [750, 540],
        'lead' => 'PM truck mounted cranes have made a name for themselves in businesses as diverse as construction, mining, load handling and gardening.',
        'text' => 'They are found especially useful in handling electrical transformers, cable bundles, containers, heavy-duty machinery and concrete blocks, to name a few.',
        'specs' => [],
        'email' => 'pm@alhashargroup.com',
        'web' => 'https://www.pm-group.eu',
    ],
    [
        'id' => 'develon',
        'name' => 'Develon',
        'logo' => 'assets/images/heavy-equipment-logo-04.png',
        'image' => 'assets/images/heavy-equipment-develon.jpg',
        'image_alt' => 'An orange Develon crawler excavator on a construction site',
        'image_size' => [750, 540],
        'lead' => 'An unbeatable combination of performance, efficiency, durability and comfort.',
        'text' => 'Develon’s line-up consists of:',
        'specs' => [
            'Crawler Excavators — 18 ton to 70 ton',
            'Mini / Midi Excavators — 1 ton to 14 ton',
            'Wheel Excavators — 5 ton to 21 ton',
            'Wheel Loaders — 1.8 to 5 m³ bucket capacity',
            'Articulated Dump Trucks — 30 ton & 40 ton capacity',
        ],
        'email' => 'develon@alhashargroup.com',
        'web' => 'https://www.na.develon-ce.com',
    ],
];

// Shared by every brand on this page.
$outlets = [
    ['city' => 'Muscat', 'tel' => '24596434', 'fax' => '24503453'],
    ['city' => 'Sohar', 'tel' => '26843085', 'fax' => '26841177'],
    ['city' => 'Salalah', 'tel' => '23210143', 'fax' => '23210144'],
];

require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Construction & Heavy Equipment
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-heavy-equipment.jpg"
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
                  <li aria-current="page">Construction &amp; Heavy Equipment</li>
                </ol>
              </nav>

              <h1 class="page-hero-title" id="hero-title">Construction &amp; Heavy Equipment.</h1>
              <p class="page-hero-text">
                Cranes, forklifts and construction equipment from Tailift, Tadano, PM and Develon,
                supported by sales outlets in Muscat, Sohar and Salalah.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Brands — logo strip, then one .brand-row per brand
           (pages/_automotive.scss), each with a 750 × 540 photo.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section brands" aria-labelledby="brands-title">
        <div class="container">
          <h2 class="sr-only" id="brands-title">Our equipment brands</h2>

          <nav class="brand-strip brand-strip--four" aria-label="Brands" data-aos="fade-up">
            <ul>
<?php foreach ($brands as $brand): ?>
              <li>
                <a href="#brand-<?= e($brand['id']) ?>">
                  <img src="<?= e($brand['logo']) ?>" alt="<?= e($brand['name']) ?>" width="200" height="100" />
                </a>
              </li>
<?php endforeach; ?>
            </ul>
          </nav>

<?php foreach ($brands as $brand): ?>
          <article
            class="brand-row"
            id="brand-<?= e($brand['id']) ?>"
            aria-labelledby="brand-<?= e($brand['id']) ?>-title"
          >
            <div class="brand-row-body">
              <h3 class="brand-row-logo" id="brand-<?= e($brand['id']) ?>-title">
                <img
                  src="<?= e($brand['logo']) ?>"
                  alt="<?= e($brand['name']) ?>"
                  width="200"
                  height="100"
                  loading="lazy"
                />
              </h3>
              <p class="brand-row-lead"><?= e($brand['lead']) ?></p>
              <p class="brand-row-text"><?= e($brand['text']) ?></p>
<?php if ($brand['specs']): ?>
              <ul class="brand-row-specs">
<?php foreach ($brand['specs'] as $spec): ?>
                <li><?= e($spec) ?></li>
<?php endforeach; ?>
              </ul>
<?php endif; ?>
              <a class="link-arrow link-arrow--plain brand-row-link" href="contact.php">
                Enquire Now <i class="bi bi-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">about <?= e($brand['name']) ?></span>
              </a>
            </div>

            <div class="brand-row-visual">
              <div class="brand-row-media">
                <img
                  src="<?= e($brand['image']) ?>"
                  alt="<?= e($brand['image_alt']) ?>"
                  width="<?= $brand['image_size'][0] ?>"
                  height="<?= $brand['image_size'][1] ?>"
                  loading="lazy"
                />
              </div>
              <div class="brand-row-details">
                <p class="brand-row-details-title">For further details :</p>
                <p class="brand-row-mail">
                  <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                  E-mail us :
                  <a href="mailto:<?= e($brand['email']) ?>"><?= e($brand['email']) ?></a>
                </p>
                <ul class="brand-row-actions">
<?php if ($brand['web']): ?>
                  <li>
                    <a
                      class="link-arrow link-arrow--plain"
                      href="<?= e($brand['web']) ?>"
                      target="_blank"
                      rel="noopener"
                    >
                      Visit Website <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
<?php endif; ?>
                  <li>
                    <a class="link-arrow link-arrow--plain" href="#outlets">
                      View Sales Outlets <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>

<?php endforeach; ?>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Sales outlets — the same branches serve every brand above
           (components/_outlets-table.scss).
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
<?php foreach ($outlets as $outlet): ?>
                <tr>
                  <th scope="row"><?= e($outlet['city']) ?></th>
                  <td><a href="tel:+968<?= e($outlet['tel']) ?>"><?= e($outlet['tel']) ?></a></td>
                  <td><?= e($outlet['fax']) ?></td>
                </tr>
<?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
