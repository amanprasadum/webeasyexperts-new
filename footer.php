<?php if (!isset($base)) { $base = ''; } if (!isset($home)) { $home = $base . 'index.php'; } ?>
  <!-- ══════ FOOTER — Callback strip + multi-column dark footer ══════ -->
  <!-- Video Lightbox (global — used by mega menu video cards) -->
  <div class="mega-lightbox" id="megaLightbox">
    <div class="mega-lightbox-inner">
      <button class="mega-lightbox-close" onclick="closeMegaVideo()"><i class="bi bi-x-lg"></i></button>
      <iframe id="megaLightboxFrame" src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>

  <!-- ===================================================================================== -->
  <!-- Main footer -->
  <footer class="main-footer">
    <div class="container">
      <div class="row g-5">
        <!-- Brand col -->
        <div class="col-lg-3 col-md-6">
          <!-- <div class="footer-brand">
            <div class="brand-icon"><i class="bi bi-grid-3x3-gap-fill"></i></div>Web EASY Experts
          </div> -->
          <div class="footer-logo p-2">
            <!-- <img src="assets/logo-light.png" alt="Web EASY Experts Logo" class="footer-logo-light" /> -->
            <img src="<?php echo $base; ?>assets/images/footer-logo.png" alt="Web EASY Experts Logo " class="footer-logo-dark"
              style="width: 80%;" />
          </div>
          <div class="footer-tagline">A team of expert website designers and developers from India, helping businesses
            worldwide build strong, future-ready online presences.</div>
          <div class="d-flex gap-2 mb-3">
            <a href="https://www.instagram.com/webeasyexperts/" target="_blank" class="social-icon">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/web-easy-experts/" target="_blank" class="social-icon">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://www.facebook.com/WebEASYExperts" target="_blank" class="social-icon">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://x.com/webeasyexperts" target="_blank" class="social-icon">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="https://in.pinterest.com/webeasyexperts/" target="_blank" class="social-icon">
              <i class="bi bi-pinterest"></i>
            </a>
          </div>
          <!-- Contact info -->
          <div class="footer-contact-item"><i class="bi bi-whatsapp"></i><span>+91 94321 20437</span></div>
          <div class="footer-contact-item"><i class="bi bi-envelope-fill"></i><span><a
                href="/cdn-cgi/l/email-protection" class="__cf_email__"
                data-cfemail="cdbaa8afa8acbeb4a8b5bda8bfb9be8daaa0aca4a1e3aea2a0">[email&#160;protected]</a></span>
          </div>
          <div class="footer-contact-item"><i class="bi bi-geo-alt-fill"></i><span> Kolkata, India</span>
          </div>
        </div>

        <!-- Services col -->
        <div class="col-lg-2 col-6">
          <div class="footer-heading">Services</div>
          <a href="<?php echo $home; ?>#services" class="footer-link">Website Design</a>
          <a href="<?php echo $home; ?>#services" class="footer-link">eCommerce Dev</a>
          <a href="<?php echo $home; ?>#services" class="footer-link">Custom Development</a>
          <a href="<?php echo $home; ?>#services" class="footer-link">SEO Optimisation</a>
          <a href="<?php echo $home; ?>#services" class="footer-link">Performance Ads</a>
          <a href="<?php echo $home; ?>#services" class="footer-link">Social Media</a>
          <a href="<?php echo $home; ?>#services" class="footer-link">Logo & Branding</a>
          <a href="<?php echo $home; ?>#services" class="footer-link">Website Maintenance</a>
        </div>

        <!-- Industries col -->
        <div class="col-lg-2 col-6">
          <div class="footer-heading">Industries</div>
          <a href="#" class="footer-link">Real Estate</a>
          <a href="#" class="footer-link">Healthcare</a>
          <a href="#" class="footer-link">Education</a>
          <a href="#" class="footer-link">Fashion & Retail</a>
          <a href="#" class="footer-link">SaaS & Startups</a>
          <a href="#" class="footer-link">Logistics</a>
          <a href="#" class="footer-link">Finance & NBFC</a>
          <a href="#" class="footer-link">Jewellery</a>
        </div>

        <!-- Company col -->
        <div class="col-lg-2 col-6">
          <div class="footer-heading">Company</div>
          <a href="#" class="footer-link">About Us</a>
          <a href="<?php echo $home; ?>#portfolio" class="footer-link">Portfolio</a>
          <a href="<?php echo $home; ?>#blog" class="footer-link">Blog</a>
          <a href="#" class="footer-link">Case Studies</a>
          <a href="#" class="footer-link">Careers</a>
          <a href="#" class="footer-link">Press Kit</a>
          <a href="<?php echo $home; ?>#contact" class="footer-link">Contact Us</a>
        </div>

        <!-- We serve + legal col -->
        <div class="col-lg-3 col-6">
          <div class="footer-heading">We Serve</div>
          <a href="#" class="footer-link">🇦🇺 Australia</a>
          <a href="#" class="footer-link">🇺🇸 United States</a>
          <a href="#" class="footer-link">🇬🇧 United Kingdom</a>
          <a href="#" class="footer-link">🇦🇪 UAE & Middle East</a>
          <a href="#" class="footer-link">🇨🇦 Canada</a>
          <a href="#" class="footer-link">🌍 Worldwide</a>
          <div class="footer-heading mt-4">Legal</div>
          <a href="#" class="footer-link">Privacy Policy</a>
          <a href="#" class="footer-link">Terms of Service</a>
          <a href="#" class="footer-link">Cookie Policy</a>
          <a href="<?php echo $home; ?>#faq" class="footer-link">FAQ</a>
        </div>
      </div>

      <hr class="footer-divider" />
      <div class="footer-bottom">
        <span>© 2026 Web EASY Experts. All rights reserved.</span>
        <span style="display:flex;align-items:center;gap:0.5rem">
          <i class="bi bi-patch-check-fill text-success"></i>
          Powered by India's top talent 🇮🇳 &nbsp;·&nbsp; Serving the world 🌍
        </span>
      </div>
    </div>
  </footer>

  <!-- WhatsApp float -->
  <a href="https://wa.me/919432120437" class="wa-float" target="_blank" title="Chat on WhatsApp"><i
      class="bi bi-whatsapp"></i></a>

  <!-- Scroll to top -->
  <button id="scrollTop" title="Back to top"><i class="bi bi-arrow-up"></i></button>

  <!-- ══════ SCRIPTS ══════ -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="<?php echo $base; ?>assets/js/footer.js"></script>
  <script src="<?php echo $base; ?>assets/js/web3forms.js"></script>
