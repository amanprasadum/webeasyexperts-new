<!DOCTYPE html>
<html lang="en">

<head>
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PFD9CDQP');</script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us — Web EASY Experts</title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">

  <!-- Apple -->
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

  <!-- Android -->
  <link rel="icon" type="image/png" sizes="192x192" href="assets/images/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="assets/images/android-chrome-512x512.png">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap"
    rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFD9CDQP" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  
  <?php $base = "/"; $home = "/"; include "header.php"; ?>
  <!-- ══════════════════════════════
     § 1  HERO — Light
══════════════════════════════ -->
  <section class="wct-hero">
    <div class="container">
      <div class="row align-items-center g-5">

        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
          <div class="wct-hero-badge"><span class="dot"></span> Contact Us</div>
          <h1 class="wct-hero-title">Let's Build Something <em>Great Together</em></h1>
          <p class="wct-hero-desc">Have a project in mind? We'd love to hear about it. Fill the form below or reach out
            directly — we respond fast.</p>

          <div class="d-flex gap-3 flex-wrap">
            <a href="mailto:webeasyexperts@gmail.com" class="wct-btn-red">
              <i class="bi bi-envelope-fill"></i> Send Email
            </a>
            <a href="https://wa.me/919432120437" target="_blank" class="wct-btn-wa">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
          <div class="wct-response">
            <span class="rdot"></span> Typically respond within 2–4 hours
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900" data-aos-delay="150">
          <div class="wct-hero-img">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=80&auto=format&fit=crop"
              alt="Team ready to help" />
            <div class="wct-img-float">
              <div class="ico"><i class="bi bi-patch-check-fill"></i></div>
              <div>
                <strong>500+ Projects Delivered</strong>
                <span>Across 9+ Countries Worldwide</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ══════════════════════════════
     § 2  FORM + INFO — White
══════════════════════════════ -->
  <section class="wct-main">
    <div class="container">
      <div class="row g-5 align-items-start">

        <!-- FORM -->
        <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
          <div class="wct-form-card">
            <h3>Send Us a Message</h3>
            <p>Fields marked <span style="color:var(--red)">*</span> are required.</p>

            <form id="wct-form" class="w3-form" data-success-id="wct-success">
              <input type="hidden" name="access_key" value="15c4b0e4-e0e7-47ca-91c6-e88f83db9a74">
              <input type="hidden" name="subject" value="New Contact Form Submission - Web EASY Experts">
              <div class="row g-0">
                <div class="col-sm-6 pe-sm-2">
                  <div class="wct-field">
                    <label>Full Name <span class="req">*</span></label>
                    <input type="text" class="wct-input" id="f-name" name="name" placeholder="John Smith" required />
                  </div>
                </div>
                <div class="col-sm-6 ps-sm-2">
                  <div class="wct-field">
                    <label>Company <span class="opt">(optional)</span></label>
                    <input type="text" class="wct-input" id="f-company" name="company" placeholder="Acme Corp" />
                  </div>
                </div>
                <div class="col-sm-6 pe-sm-2">
                  <div class="wct-field">
                    <label>Email <span class="req">*</span></label>
                    <input type="email" class="wct-input" id="f-email" name="email" placeholder="john@example.com" required />
                  </div>
                </div>
                <div class="col-sm-6 ps-sm-2">
                  <div class="wct-field">
                    <label>Phone <span class="req">*</span></label>
                    <div class="wct-phone-wrap">
                      <span class="wct-phone-pre">🌍 +</span>
                      <input type="tel" class="wct-input" id="f-phone" name="phone" placeholder="91 94321 20437" required />
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 pe-sm-2">
                  <div class="wct-field">
                    <label>Service Needed <span class="opt">(optional)</span></label>
                    <div class="wct-sel-wrap">
                      <select class="wct-select wct-input" id="f-service" name="service">
                        <option value="" disabled selected>Select a service</option>
                        <option>Website Design & Development</option>
                        <option>E-commerce Store</option>
                        <option>WordPress Development</option>
                        <option>Landing Page</option>
                        <option>Website Redesign</option>
                        <option>SEO Optimization</option>
                        <option>Website Maintenance</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 ps-sm-2">
                  <div class="wct-field">
                    <label>Budget Range <span class="opt">(optional)</span></label>
                    <div class="wct-sel-wrap">
                      <select class="wct-select wct-input" id="f-budget" name="budget">
                        <option value="" disabled selected>Select range</option>
                        <option>Under $500</option>
                        <option>$500 – $1,000</option>
                        <option>$1,000 – $2,500</option>
                        <option>$2,500 – $5,000</option>
                        <option>$5,000+</option>
                        <option>Not Sure Yet</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="wct-field mb-0">
                    <label>Message <span class="req">*</span></label>
                    <textarea class="wct-textarea" id="f-msg" name="message"
                      placeholder="Tell us about your project, goals, or any specific requirements..."
                      required></textarea>
                  </div>
                </div>
              </div>

              <button type="submit" class="wct-submit mt-4">
                <i class="bi bi-send-fill"></i> Send Message
              </button>
              <div class="wct-privacy">
                <i class="bi bi-shield-lock-fill"></i>
                Your information is secure and never shared with third parties.
              </div>
            </form>

            <div class="wct-success" id="wct-success">
              <div class="wct-sico"><i class="bi bi-check-lg"></i></div>
              <h4>Message Sent!</h4>
              <p>We'll get back to you within 2–4 hours. For faster response, WhatsApp us directly.</p>
              <a href="https://wa.me/919432120437" target="_blank" class="wct-btn-red d-inline-flex">
                <i class="bi bi-whatsapp"></i> Continue on WhatsApp
              </a>
            </div>
          </div>
        </div>

        <!-- INFO -->
        <div class="col-lg-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
          <div class="wct-info-stack">

            <div class="wct-icard">
              <div class="wct-icard-ico"><i class="bi bi-telephone-fill"></i></div>
              <div>
                <strong>Phone & WhatsApp</strong>
                <a href="tel:+919432120437">+91 94321 20437</a>
                <a href="https://wa.me/919432120437" target="_blank" style="color:#25D366;"><i
                    class="bi bi-whatsapp me-1"></i>Chat on WhatsApp</a>
              </div>
            </div>

            <div class="wct-icard">
              <div class="wct-icard-ico"><i class="bi bi-envelope-fill"></i></div>
              <div>
                <strong>Email</strong>
                <a href="mailto:webeasyexperts@gmail.com">webeasyexperts@gmail.com</a>
              </div>
            </div>

            <div class="wct-hours">
              <h6><i class="bi bi-clock-fill"></i> Working Hours</h6>
              <div class="wct-hrow"><span class="day">Monday – Friday</span><span class="time">9 AM – 7 PM IST</span>
              </div>
              <div class="wct-hrow"><span class="day">Saturday</span><span class="time">10 AM – 4 PM IST</span></div>
              <div class="wct-hrow"><span class="day">Sunday</span><span class="time off">Closed</span></div>
            </div>

            <div class="wct-icard" style="flex-direction:column; gap:12px;">
              <strong
                style="font-family:var(--display); font-size:.82rem; font-weight:700; color:var(--t500); text-transform:uppercase; letter-spacing:.08em;">Follow
                Us</strong>
              <div class="wct-soc-row">
                <a href="https://wa.me/919432120437" target="_blank" class="wa" title="WhatsApp"><i
                    class="bi bi-whatsapp"></i></a>
                <a href="https://www.linkedin.com/company/web-easy-experts/" class="li" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/webeasyexperts/" class="ig" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/WebEASYExperts" class="fb" title="Facebook"><i class="bi bi-facebook"></i></a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ══════════════════════════════
     § 3  FAQ — Light bg
══════════════════════════════ -->
  <section class="wct-faq">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center mb-5" data-aos="fade-up">
          <div class="wct-chip wct-chip-red mx-auto"><span class="dot"></span> Quick Answers</div>
          <h2 class="wct-h2">Common <em>Questions</em></h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">

          <div class="wct-acc">
            <button class="wct-acc-btn" onclick="wctToggle(this)">How long does a website take? <span
                class="wct-acc-ico"><i class="bi bi-plus-lg"></i></span></button>
            <div class="wct-acc-body">
              <p>Simple sites: 3–7 days. Full business/e-commerce websites: 2–4 weeks. We share a clear timeline after
                understanding your needs.</p>
            </div>
          </div>

          <div class="wct-acc">
            <button class="wct-acc-btn" onclick="wctToggle(this)">Do you work with international clients? <span
                class="wct-acc-ico"><i class="bi bi-plus-lg"></i></span></button>
            <div class="wct-acc-body">
              <p>Yes! We regularly work with clients across Australia, USA, UK, UAE, Canada, Ireland, Singapore,
                Germany, Netherlands & Sweden — fully remote via WhatsApp, Zoom, or email.</p>
            </div>
          </div>

          <div class="wct-acc">
            <button class="wct-acc-btn" onclick="wctToggle(this)">What is your pricing? <span class="wct-acc-ico"><i
                  class="bi bi-plus-lg"></i></span></button>
            <div class="wct-acc-body">
              <p>Pricing depends on scope and features. Share your requirements and we'll send a detailed, transparent
                quote within 24 hours — no hidden charges.</p>
            </div>
          </div>

          <div class="wct-acc">
            <button class="wct-acc-btn" onclick="wctToggle(this)">Do you provide post-launch support? <span
                class="wct-acc-ico"><i class="bi bi-plus-lg"></i></span></button>
            <div class="wct-acc-body">
              <p>Yes — 30 days free support after launch, plus optional monthly maintenance plans for ongoing updates
                and performance monitoring.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- ══════════════════════════════
     § 4  CTA — Single dark section
══════════════════════════════ -->
  <section class="wct-cta">
    <div class="container">
      <div class="wct-cta-wrap" data-aos="fade-up" data-aos-duration="800">

        <div>
          <div class="wct-chip"
            style="color:#FF8A80;background:rgba(229,57,53,.1);border:1px solid rgba(229,57,53,.28);">
            <span class="dot" style="background:var(--red);"></span> Free Consultation
          </div>
          <h2>Not Sure Where to <em>Start</em></h2>
          <p class="mt-2">Book a free 30-minute call. No pressure, no commitment — just a friendly conversation about
            your business goals.</p>
        </div>

        <div class="wct-cta-btns">
          <a href="https://wa.me/919432120437" target="_blank" class="wct-cta-btn">
            <div class="wct-cta-btn-ico g"><i class="bi bi-whatsapp"></i></div>
            <div><strong>Chat on WhatsApp</strong><span>Fastest response</span></div>
          </a>
          <a href="tel:+919432120437" class="wct-cta-btn">
            <div class="wct-cta-btn-ico r"><i class="bi bi-telephone-fill"></i></div>
            <div><strong>+91 94321 20437</strong><span>Call us directly</span></div>
          </a>
          <a href="mailto:webeasyexperts@gmail.com" class="wct-cta-btn">
            <div class="wct-cta-btn-ico b"><i class="bi bi-envelope-fill"></i></div>
            <div><strong>webeasyexperts@gmail.com</strong><span>For detailed inquiries</span></div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Main footer -->
  <?php include "footer.php"; ?>
</body>

</html>