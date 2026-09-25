<?php
$page = [
    'title' => 'Contact Us — Al Hashar Group',
    'description' => 'Get in touch with Al Hashar Group — propelling Oman’s growth and global standing through innovative business excellence.',
    'og_description' => 'Get in touch with Al Hashar Group.',
    'og_image' => 'assets/images/hero-contact.jpg',
    'nav' => 'contact',
];
require __DIR__ . '/includes/forms.php';
$formStatus = form_status(handle_enquiry(), 'Thank you — your enquiry has been sent. We’ll be in touch shortly.');
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Contact
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/hero-contact.jpg"
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
                  <li aria-current="page">Contact Us</li>
                </ol>
              </nav>

              <h1 class="page-hero-title page-hero-title--inline" id="hero-title">
                Contact <em>Us.</em>
              </h1>
              <p class="page-hero-headline page-hero-headline--narrow">
                Propelling Oman’s growth and global standing through innovative business excellence.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Contact details, then the enquiry form beside a map.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section contact" aria-labelledby="contact-title">
        <div class="container">
          <div class="contact-top">
            <div class="contact-card" data-aos="fade-right">
              <h2 class="contact-card-title" id="contact-title">Alhashar Group</h2>
              <address class="contact-card-address">
                <p>
                  P.O.Box 28, Muttrah<br />
                  Postal Code - 114<br />
                  Sultanate of Oman.
                </p>
                <p>
                  Tel: <a href="tel:+96824596434">+968-24596434</a><br />
                  Fax: +968-24503453<br />
                  Email: <a href="mailto:ahcgroup@omantel.net.om">ahcgroup@omantel.net.om</a>
                </p>
              </address>
            </div>
            <div class="contact-photo" data-aos="fade-left">
              <img
                src="assets/images/contact-al-hashar.jpg"
                alt=""
                width="715"
                height="370"
                loading="lazy"
              />
            </div>
          </div>

          <div class="contact-bottom">
            <div class="contact-form-wrap" data-aos="fade-up">
              <h2 class="section-title contact-form-title" id="enquiry-title">
                For <em>Enquiry</em>
              </h2>

              <!-- Handled by handle_enquiry() in includes/forms.php. -->
              <form
                class="contact-form"
                id="enquiry"
                action="contact.php#enquiry"
                method="post"
                aria-labelledby="enquiry-title"
                data-form
              >
                <div class="float-field">
                  <input
                    class="float-input"
                    type="text"
                    id="enq-name"
                    name="name"
                    autocomplete="name"
                    placeholder=" "
                    required
                  />
                  <label class="float-label" for="enq-name">Name*</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="email"
                    id="enq-email"
                    name="email"
                    autocomplete="email"
                    placeholder=" "
                    required
                  />
                  <label class="float-label" for="enq-email">Email*</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="tel"
                    id="enq-phone"
                    name="phone"
                    autocomplete="tel"
                    placeholder=" "
                  />
                  <label class="float-label" for="enq-phone">Phone</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="text"
                    id="enq-subject"
                    name="subject"
                    placeholder=" "
                    required
                  />
                  <label class="float-label" for="enq-subject">Subject*</label>
                </div>
                <div class="float-field float-field--full">
                  <textarea
                    class="float-input"
                    id="enq-message"
                    name="message"
                    rows="2"
                    placeholder=" "
                    required
                  ></textarea>
                  <label class="float-label" for="enq-message">Message*</label>
                </div>

                <!-- Honeypot: hidden from people; main.js drops the submit if a bot fills it. -->
                <div class="form-hp" aria-hidden="true">
                  <label for="enq-website">Website</label>
                  <input
                    type="text"
                    id="enq-website"
                    name="website"
                    tabindex="-1"
                    autocomplete="off"
                  />
                </div>

                <div class="contact-form-actions">
                  <button class="btn btn--dark" type="submit">Submit</button>
                  <p class="form-status" role="status" aria-live="polite"<?php if ($formStatus): ?> data-state="<?= e($formStatus["state"]) ?>"<?php endif; ?>><?= e($formStatus["message"] ?? "") ?></p>
                </div>
              </form>
            </div>

            <div class="contact-map" data-aos="fade-left">
              <iframe
                src="https://www.google.com/maps?q=Al+Hashar+Group,+Muscat,+Oman&amp;z=15&amp;output=embed"
                title="Map: Al Hashar Group head office, Muscat"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
      </section>

      <!-- Next sections go here. -->
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
