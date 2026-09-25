<?php
$page = [
    'title' => 'Careers — Al Hashar Group',
    'description' => 'Careers at Al Hashar Group — a collaborative, rewarding place to grow across a diverse range of industries in Oman.',
    'og_description' => 'Join a team built on trust, excellence and a shared commitment to moving forward together.',
    'og_image' => 'assets/images/about-bg-01.jpg',
    'nav' => 'careers',
];
require __DIR__ . '/includes/forms.php';
$formStatus = form_status(handle_application(), 'Thank you — your application has been received. Our HR team will be in touch.');
require __DIR__ . '/includes/header.php';
?>
    <main id="main">
      <!-- ═════════════════════════════════════════════════════════════════
           Hero — Careers
           ═════════════════════════════════════════════════════════════════ -->
      <section class="page-hero" aria-labelledby="hero-title">
        <div class="page-hero-media" aria-hidden="true">
          <img
            src="assets/images/about-bg-01.jpg"
            alt=""
            width="1737"
            height="683"
            fetchpriority="high"
          />
        </div>

        <div class="page-hero-body">
          <div class="container">
            <div class="page-hero-content page-hero-content--xwide">
              <nav class="breadcrumb-nav" aria-label="Breadcrumb">
                <ol>
                  <li><a href="index.php">Home</a></li>
                  <li aria-current="page">Careers</li>
                </ol>
              </nav>

              <h1 class="page-hero-title page-hero-title--inline" id="hero-title">
                Careers <em>at Al Hashar.</em>
              </h1>
              <p class="page-hero-headline">
                At Al Hashar Group, our people are at the heart of our success.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Working at Al Hashar Group — copy beside a photo, reusing the
           About page's intro layout (pages/_about.scss).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section about-intro" aria-labelledby="careers-title">
        <div class="container">
          <div class="about-intro-grid">
            <div class="about-intro-text" data-aos="fade-up">
              <div class="section-head">
                <span class="section-eyebrow">Careers</span>
                <h2 class="section-title" id="careers-title">
                  Working at <em>Al&nbsp;Hashar&nbsp;Group</em>
                </h2>
              </div>
              <p>
                Working across a diverse range of industries, we offer a collaborative and rewarding
                environment where employees can develop their skills, embrace new opportunities and
                contribute to Oman’s continued progress. Join a team built on trust, excellence and
                a shared commitment to moving forward together.
              </p>
              <a class="link-arrow link-arrow--plain" href="contact.php">
                Get in touch <i class="bi bi-arrow-right" aria-hidden="true"></i>
              </a>
            </div>

            <div class="about-intro-media" data-aos="fade-up" data-aos-delay="150">
              <img
                src="assets/images/hero-management.jpg"
                alt="Al Hashar Group colleagues working together around a meeting table"
                width="1920"
                height="945"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- ═════════════════════════════════════════════════════════════════
           Open positions
           PLACEHOLDER vacancies — the client hasn't supplied real roles
           yet. Replace every <details class="job"> below (and the matching
           <option>s in the application form) with the real list.
           The filter buttons show/hide jobs by data-division, and each
           "Apply" pre-selects its role in the form (main.js, initJobs).
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section section--surface jobs" aria-labelledby="jobs-title">
        <div class="container">
          <div class="section-head section-head--row" data-aos="fade-up">
            <div>
              <span class="section-eyebrow">Join our team</span>
              <h2 class="section-title" id="jobs-title">Open <em>Positions</em></h2>
            </div>
            <p class="jobs-count" aria-live="polite"><span data-jobs-count>8</span> open roles</p>
          </div>

          <div
            class="jobs-filters"
            role="group"
            aria-label="Filter positions by business"
            data-aos="fade-up"
          >
            <button class="jobs-filter" type="button" data-filter="all" aria-pressed="true">
              All
            </button>
            <button class="jobs-filter" type="button" data-filter="automotive" aria-pressed="false">
              Automotive
            </button>
            <button
              class="jobs-filter"
              type="button"
              data-filter="hospitality"
              aria-pressed="false"
            >
              Hospitality
            </button>
            <button
              class="jobs-filter"
              type="button"
              data-filter="electronics"
              aria-pressed="false"
            >
              Electronics
            </button>
            <button
              class="jobs-filter"
              type="button"
              data-filter="construction"
              aria-pressed="false"
            >
              Construction
            </button>
            <button class="jobs-filter" type="button" data-filter="corporate" aria-pressed="false">
              Corporate
            </button>
          </div>

          <div class="jobs-list" data-jobs data-aos="fade-up">
            <details class="job" data-division="automotive">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">Sales Executive</span>
                  <span class="job-meta">
                    <span
                      ><i class="bi bi-briefcase" aria-hidden="true"></i>Al Hashar Automotive</span
                    >
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Muscat</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Automotive</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Drive new-vehicle sales for our Nissan and Infiniti showrooms, guiding customers
                  from first enquiry to handover.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Welcome walk-in and online leads and arrange test drives</li>
                      <li>Present models, finance options and trade-in offers</li>
                      <li>Meet monthly sales and customer-satisfaction targets</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>2+ years in automotive or retail sales</li>
                      <li>Valid Omani driving licence</li>
                      <li>Fluent English; Arabic is an advantage</li>
                    </ul>
                  </div>
                </div>
                <a class="btn btn--dark job-apply" href="#apply" data-position="Sales Executive">
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
            <details class="job" data-division="automotive">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">Service Advisor</span>
                  <span class="job-meta">
                    <span
                      ><i class="bi bi-briefcase" aria-hidden="true"></i>Al Hashar Automotive</span
                    >
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Azaiba, Muscat</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Automotive</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Be the customer’s point of contact in our after-sales workshop, from booking to
                  vehicle return.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Receive vehicles, record concerns and open job cards</li>
                      <li>Explain work, estimates and timelines clearly</li>
                      <li>Coordinate with technicians and parts teams</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>Diploma in automotive or mechanical engineering</li>
                      <li>1–3 years in a dealership service reception</li>
                      <li>Strong communication and organisation skills</li>
                    </ul>
                  </div>
                </div>
                <a class="btn btn--dark job-apply" href="#apply" data-position="Service Advisor">
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
            <details class="job" data-division="hospitality">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">Front Office Associate</span>
                  <span class="job-meta">
                    <span
                      ><i class="bi bi-briefcase" aria-hidden="true"></i>Sheraton Oman Hotel</span
                    >
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Ruwi, Muscat</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Hospitality</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Create a warm first impression for every guest at one of Muscat’s landmark hotels.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Handle check-in, check-out and guest requests</li>
                      <li>Manage reservations and room allocation</li>
                      <li>Resolve guest concerns with care and discretion</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>Hospitality diploma or equivalent experience</li>
                      <li>Experience with Opera PMS is a plus</li>
                      <li>Friendly, well-presented and service-minded</li>
                    </ul>
                  </div>
                </div>
                <a
                  class="btn btn--dark job-apply"
                  href="#apply"
                  data-position="Front Office Associate"
                >
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
            <details class="job" data-division="hospitality">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">Chef de Partie</span>
                  <span class="job-meta">
                    <span
                      ><i class="bi bi-briefcase" aria-hidden="true"></i>Sheraton Oman Hotel</span
                    >
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Ruwi, Muscat</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Hospitality</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Run a section of our kitchen, delivering consistent quality across our restaurants
                  and banquets.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Prepare and present dishes to hotel standards</li>
                      <li>Supervise and train commis chefs</li>
                      <li>Maintain HACCP food-safety and hygiene standards</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>3+ years in a five-star kitchen</li>
                      <li>Culinary qualification</li>
                      <li>Calm and organised under pressure</li>
                    </ul>
                  </div>
                </div>
                <a class="btn btn--dark job-apply" href="#apply" data-position="Chef de Partie">
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
            <details class="job" data-division="electronics">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">Showroom Sales Consultant</span>
                  <span class="job-meta">
                    <span
                      ><i class="bi bi-briefcase" aria-hidden="true"></i>Alhashar Electronics</span
                    >
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Muscat</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Electronics</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Help customers choose the right air-conditioning, appliances and kitchens for
                  their homes.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Advise customers on products from our partner brands</li>
                      <li>Prepare quotations and follow up on leads</li>
                      <li>Keep displays and stock information up to date</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>1–2 years in retail or consumer electronics sales</li>
                      <li>Good product knowledge and presentation skills</li>
                      <li>English required; Arabic preferred</li>
                    </ul>
                  </div>
                </div>
                <a
                  class="btn btn--dark job-apply"
                  href="#apply"
                  data-position="Showroom Sales Consultant"
                >
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
            <details class="job" data-division="electronics">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">HVAC Technician</span>
                  <span class="job-meta">
                    <span
                      ><i class="bi bi-briefcase" aria-hidden="true"></i>Alhashar Electronics</span
                    >
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Sohar</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Electronics</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Install, service and repair residential and commercial air-conditioning systems.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Carry out installations and preventive maintenance</li>
                      <li>Diagnose and fix split, ducted and VRF systems</li>
                      <li>Complete service reports accurately</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>Technical diploma in HVAC or refrigeration</li>
                      <li>3+ years of hands-on field experience</li>
                      <li>Valid driving licence</li>
                    </ul>
                  </div>
                </div>
                <a class="btn btn--dark job-apply" href="#apply" data-position="HVAC Technician">
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
            <details class="job" data-division="construction">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">Site Engineer (Civil)</span>
                  <span class="job-meta">
                    <span><i class="bi bi-briefcase" aria-hidden="true"></i>Oasis Grace L.L.C</span>
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Muscat</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Construction</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Supervise day-to-day site works on commercial and institutional building projects.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Supervise works against drawings and specifications</li>
                      <li>Coordinate subcontractors and site resources</li>
                      <li>Report progress, quality and safety issues</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>B.Sc. in Civil Engineering</li>
                      <li>3–5 years of building-site experience</li>
                      <li>Registered with the Oman Society of Engineers</li>
                    </ul>
                  </div>
                </div>
                <a
                  class="btn btn--dark job-apply"
                  href="#apply"
                  data-position="Site Engineer (Civil)"
                >
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
            <details class="job" data-division="corporate">
              <summary class="job-summary">
                <span class="job-heading">
                  <span class="job-title">Accountant</span>
                  <span class="job-meta">
                    <span><i class="bi bi-briefcase" aria-hidden="true"></i>Al Hashar Group</span>
                    <span><i class="bi bi-geo-alt" aria-hidden="true"></i>Muttrah, Muscat</span>
                    <span><i class="bi bi-clock" aria-hidden="true"></i>Full-time</span>
                  </span>
                </span>
                <span class="job-tag">Corporate</span>
                <span class="job-chevron" aria-hidden="true"><i class="bi bi-plus-lg"></i></span>
              </summary>
              <div class="job-body">
                <p class="job-lead">
                  Support Group Finance with accurate, timely reporting across our businesses.
                </p>
                <div class="job-cols">
                  <div>
                    <h3 class="job-subtitle">What you’ll do</h3>
                    <ul>
                      <li>Maintain ledgers and monthly closing</li>
                      <li>Prepare reconciliations and management reports</li>
                      <li>Support audits and VAT compliance</li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="job-subtitle">What you’ll bring</h3>
                    <ul>
                      <li>Bachelor’s in Accounting or Finance</li>
                      <li>3+ years of experience; ACCA/CMA is an advantage</li>
                      <li>Advanced Excel and ERP skills</li>
                    </ul>
                  </div>
                </div>
                <a class="btn btn--dark job-apply" href="#apply" data-position="Accountant">
                  Apply for this role <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </details>
          </div>

          <p class="jobs-empty" data-jobs-empty hidden>
            No openings in this area right now — send us a general application below.
          </p>
        </div>
      </section>

      <!-- ═════════════════════════════════════════════════════════════════
           Application form — posted to handle_application() in
           includes/forms.php, which mails it to HR with the CV attached.
           ═════════════════════════════════════════════════════════════════ -->
      <section class="section apply" id="apply" aria-labelledby="apply-title">
        <div class="container">
          <div class="apply-grid">
            <div class="apply-intro" data-aos="fade-up">
              <span class="section-eyebrow">Careers</span>
              <h2 class="section-title" id="apply-title">Apply <em>Now</em></h2>
              <p>
                Tell us a little about yourself and attach your CV. Our HR team reviews every
                application and will contact shortlisted candidates.
              </p>
              <p>
                Don’t see the right role? Choose “General application” and we’ll keep your CV on
                file.
              </p>

              <ol class="apply-steps">
                <li><span>01</span>Submit your application</li>
                <li><span>02</span>HR review &amp; shortlisting</li>
                <li><span>03</span>Interview with the hiring team</li>
                <li><span>04</span>Offer &amp; onboarding</li>
              </ol>

              <p class="apply-contact">
                <i class="bi bi-envelope" aria-hidden="true"></i>
                <!-- PLACEHOLDER address — confirm with the client. -->
                <a href="mailto:careers@alhashargroup.com">careers@alhashargroup.com</a>
              </p>
            </div>

            <div class="apply-card" data-aos="fade-up" data-aos-delay="150">
              <form
                class="apply-form"
                action="careers.php#apply"
                method="post"
                enctype="multipart/form-data"
                aria-labelledby="apply-title"
                data-form
              >
                <div class="float-field">
                  <input
                    class="float-input"
                    type="text"
                    id="app-first"
                    name="first_name"
                    autocomplete="given-name"
                    placeholder=" "
                    required
                  />
                  <label class="float-label" for="app-first">First name*</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="text"
                    id="app-last"
                    name="last_name"
                    autocomplete="family-name"
                    placeholder=" "
                    required
                  />
                  <label class="float-label" for="app-last">Last name*</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="email"
                    id="app-email"
                    name="email"
                    autocomplete="email"
                    placeholder=" "
                    required
                  />
                  <label class="float-label" for="app-email">Email*</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="tel"
                    id="app-phone"
                    name="phone"
                    autocomplete="tel"
                    placeholder=" "
                    required
                  />
                  <label class="float-label" for="app-phone">Phone*</label>
                </div>
                <div class="float-field float-field--select">
                  <select class="float-input" id="app-position" name="position" required>
                    <option value="" selected disabled></option>
                    <option>Sales Executive</option>
                    <option>Service Advisor</option>
                    <option>Front Office Associate</option>
                    <option>Chef de Partie</option>
                    <option>Showroom Sales Consultant</option>
                    <option>HVAC Technician</option>
                    <option>Site Engineer (Civil)</option>
                    <option>Accountant</option>
                    <option>General application</option>
                  </select>
                  <label class="float-label" for="app-position">Position*</label>
                </div>
                <div class="float-field float-field--select">
                  <select class="float-input" id="app-experience" name="experience" required>
                    <option value="" selected disabled></option>
                    <option>Less than 1 year</option>
                    <option>1–3 years</option>
                    <option>3–5 years</option>
                    <option>5–10 years</option>
                    <option>10+ years</option>
                  </select>
                  <label class="float-label" for="app-experience">Experience*</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="text"
                    id="app-location"
                    name="location"
                    autocomplete="address-level2"
                    placeholder=" "
                  />
                  <label class="float-label" for="app-location">Current location</label>
                </div>
                <div class="float-field">
                  <input
                    class="float-input"
                    type="url"
                    id="app-linkedin"
                    name="linkedin"
                    placeholder=" "
                  />
                  <label class="float-label" for="app-linkedin">LinkedIn profile</label>
                </div>

                <div class="file-field">
                  <input
                    class="file-input"
                    type="file"
                    id="app-cv"
                    name="cv"
                    accept=".pdf,.doc,.docx"
                    required
                  />
                  <label class="file-drop" for="app-cv">
                    <i class="bi bi-cloud-arrow-up" aria-hidden="true"></i>
                    <span class="file-drop-text" data-file-name>
                      <strong>Upload your CV*</strong> or drag it here
                    </span>
                    <span class="file-drop-hint">PDF, DOC or DOCX · max 5 MB</span>
                  </label>
                </div>

                <div class="float-field float-field--full">
                  <textarea
                    class="float-input"
                    id="app-message"
                    name="message"
                    rows="3"
                    placeholder=" "
                  ></textarea>
                  <label class="float-label" for="app-message">Cover letter / message</label>
                </div>

                <div class="form-check apply-consent">
                  <input type="checkbox" id="app-consent" name="consent" required />
                  <label for="app-consent">
                    I agree to Al Hashar Group storing my details for recruitment purposes, as set
                    out in the <a href="privacy.php">Privacy Policy</a>.*
                  </label>
                </div>

                <!-- Honeypot: hidden from people; main.js drops the submit if a bot fills it. -->
                <div class="form-hp" aria-hidden="true">
                  <label for="app-website">Website</label>
                  <input
                    type="text"
                    id="app-website"
                    name="website"
                    tabindex="-1"
                    autocomplete="off"
                  />
                </div>

                <div class="apply-actions">
                  <button class="btn btn--dark" type="submit">Submit application</button>
                  <p class="form-status" role="status" aria-live="polite"<?php if ($formStatus): ?> data-state="<?= e($formStatus["state"]) ?>"<?php endif; ?>><?= e($formStatus["message"] ?? "") ?></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
