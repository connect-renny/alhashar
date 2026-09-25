<?php
/** Everything from the footer to </html>. Pair with includes/header.php. */
?>
    <!-- ═══════════════════════════════════════════════════════════════════
         Footer
         ═══════════════════════════════════════════════════════════════════ -->
    <footer class="footer">
      <div class="container">
        <div class="footer-cta">
          <h2 class="section-title">Ready to <em>partner with us?</em></h2>
          <p>Whether you’re interested in our Automotive Services, Looking for Business</p>
          <div class="footer-cta-actions">
            <a class="btn btn--light" href="contact.php">Contact us</a>
            <a class="btn btn--outline-light" href="contact.php#meeting">Schedule Meeting</a>
          </div>
        </div>

        <div class="footer-grid">
          <div class="footer-brand">
            <img
              src="assets/images/alhashar-logo-white.png"
              alt="Al Hashar Group"
              width="90"
              height="72"
              loading="lazy"
            />
            <dl>
              <dt>Call us Now!</dt>
              <dd><a href="tel:+96824596434">+968-24596434</a></dd>
              <dt>Mail us Now!</dt>
              <dd><a href="mailto:ahcgroup@omantel.net.om">ahcgroup@omantel.net.om</a></dd>
            </dl>
          </div>

          <nav aria-labelledby="footer-group">
            <h3 class="footer-title" id="footer-group">Our Group</h3>
            <ul class="footer-links footer-links--2col">
              <li><a href="about.php#founder">Our Founder</a></li>
              <li><a href="about.php#history">Our History</a></li>
              <li><a href="management.php">Management</a></li>
              <li><a href="about.php#awards">Awards &amp; Achievement</a></li>
              <li><a href="about.php#chairman">Chairman’s Message</a></li>
              <li><a href="csr.php">CSR / Community Impact</a></li>
              <li><a href="about.php#vision">Our Vision &amp; Mission</a></li>
              <li><a href="about.php#values">Our Values</a></li>
            </ul>
          </nav>

          <nav aria-labelledby="footer-business">
            <h3 class="footer-title" id="footer-business">Our Business</h3>
            <ul class="footer-links">
              <li><a href="automotive.php">Automotive</a></li>
              <li><a href="hospitality.php">Hospitality &amp; Tourism</a></li>
              <li><a href="electronics.php">Electronics &amp; Appliances</a></li>
              <li><a href="construction.php">Construction &amp; Contracting</a></li>
              <li><a href="#">Engineering &amp; Projects</a></li>
            </ul>
          </nav>

          <nav aria-labelledby="footer-quick">
            <h3 class="footer-title" id="footer-quick">Quick Links</h3>
            <ul class="footer-links">
              <li><a href="culture.php">Culture</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="careers.php">Careers</a></li>
            </ul>
          </nav>
        </div>

        <div class="footer-bottom">
          <p class="footer-copy">
            Copyright <span class="year"><?= date('Y') ?></span> © Al Hashar Group. All rights reserved
            <small>
              <a href="privacy.php">Privacy Policy</a> - <a href="terms.php">Terms of Service</a>
            </small>
          </p>
          <ul class="footer-social" aria-label="Social media">
            <li>
              <a
                href="https://www.facebook.com/"
                target="_blank"
                rel="noopener"
                aria-label="Facebook"
              >
                <i class="bi bi-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://x.com/" target="_blank" rel="noopener" aria-label="X (Twitter)">
                <i class="bi bi-twitter-x" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a
                href="https://www.linkedin.com/"
                target="_blank"
                rel="noopener"
                aria-label="LinkedIn"
              >
                <i class="bi bi-linkedin" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- Back to top. The ring fills with scroll progress (main.js sets
         --scroll-progress); the arrow is the kit's up-icon.svg. -->
    <button class="return-top" type="button" aria-label="Back to top">
      <svg class="return-top-ring" viewBox="0 0 50 50" aria-hidden="true">
        <circle class="return-top-track" cx="25" cy="25" r="22" />
        <circle class="return-top-progress" cx="25" cy="25" r="22" />
      </svg>
      <img src="assets/images/up-icon.svg" alt="" width="20" height="20" />
    </button>

    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/lenis.min.js" defer></script>
    <script src="assets/js/swiper-bundle.min.js" defer></script>
    <script src="assets/js/gsap.min.js" defer></script>
    <script src="assets/js/ScrollTrigger.min.js" defer></script>
    <script src="assets/js/aos.js" defer></script>
    <!-- main.js last: it reads window.Lenis, window.Swiper, window.gsap and window.AOS at init. -->
    <script src="assets/js/main.js" defer></script>
  </body>
</html>
