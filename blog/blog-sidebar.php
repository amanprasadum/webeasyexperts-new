<?php
/* ==========================================================================
   Common blog sidebar — shared by every blog post (CTA + author + related).
   Set $current to this page's own filename before including this file,
   so it can be excluded from the "Related Posts" list automatically.
   ========================================================================== */
if (!isset($current)) { $current = ''; }

$wbeasy_blog_posts = [
  'web-experts-vs-website-experts.php' => [
    'title'    => 'Web Experts vs Website Experts: Why Choosing the Right Professional Matters',
    'category' => 'Web Development',
    'read'     => '10 min read',
    'icon'     => 'bi-people',
    'color'    => '#E53935',
    'bg'       => '#FFF0F0',
  ],
  'how-web-experts-make-your-website-user-friendly.php' => [
    'title'    => 'How Web Experts Make Your Website User-Friendly',
    'category' => 'Web Design',
    'read'     => '8 min read',
    'icon'     => 'bi-phone',
    'color'    => '#16A34A',
    'bg'       => '#F0FFF5',
  ],
  'hire-wordpress-developers-india.php' => [
    'title'    => 'WordPress Developers India: Why Businesses Worldwide Choose Indian WordPress Experts',
    'category' => 'WordPress',
    'read'     => '7 min read',
    'icon'     => 'bi-wordpress',
    'color'    => '#2563EB',
    'bg'       => '#F0F7FF',
  ],
  'hire-a-shop⁠ify-we⁠bs⁠ite-d⁠eve⁠loper-in-indi⁠a.php' => [
    'title'    => 'Shopify Website Developer India: Why Hiring the Right Expert Can Transform Your Online Business',
    'category' => 'eCommerce',
    'read'     => '11 min read',
    'icon'     => 'bi-shop',
    'color'    => '#D97706',
    'bg'       => '#FFF7ED',
  ],
];
?>
        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
          <div class="wbeasy-blog-pg-sidebar-sticky">
            <div class="wbeasy-blog-pg-sidebar">

              <!-- CTA widget -->
              <div class="wbeasy-blog-pg-cta-widget">
                <div class="wbeasy-blog-pg-cta-widget-icon"><i class="bi bi-stars"></i></div>
                <div class="wbeasy-blog-pg-cta-widget-title">Need <span>Expert Help</span> With Your Website?
                </div>
                <p class="wbeasy-blog-pg-cta-widget-sub">Get a free website audit from our experts — no commitment
                  required.</p>
                <a href="<?php echo $home; ?>#contact" class="wbeasy-blog-pg-cta-widget-btn"><i
                    class="bi bi-arrow-right-circle-fill me-1"></i> Claim Free Audit</a>
              </div>

              <!-- Quick contact form widget -->
              <div class="wbeasy-blog-pg-cta-widget" style="text-align:left;">
                <div class="wbeasy-blog-pg-cta-widget-title" style="margin-bottom:0.85rem;">Quick <span>Contact</span></div>
                <form class="w3-form" data-success-id="blog-sidebar-form-success">
                  <input type="hidden" name="access_key" value="15c4b0e4-e0e7-47ca-91c6-e88f83db9a74">
                  <input type="hidden" name="subject" value="New Contact Form Submission - Blog Sidebar">
                  <input type="text" name="name" placeholder="Your Name" required
                    style="width:100%;padding:0.65rem 0.85rem;margin-bottom:0.6rem;border:1px solid var(--border);border-radius:8px;font-size:0.85rem;font-family:inherit;">
                  <input type="email" name="email" placeholder="Your Email" required
                    style="width:100%;padding:0.65rem 0.85rem;margin-bottom:0.6rem;border:1px solid var(--border);border-radius:8px;font-size:0.85rem;font-family:inherit;">
                  <textarea name="message" placeholder="Your Message" rows="3" required
                    style="width:100%;padding:0.65rem 0.85rem;margin-bottom:0.75rem;border:1px solid var(--border);border-radius:8px;font-size:0.85rem;font-family:inherit;resize:vertical;"></textarea>
                  <button type="submit" class="wbeasy-blog-pg-cta-widget-btn" style="width:100%;justify-content:center;border:none;cursor:pointer;">
                    <i class="bi bi-send-fill me-1"></i> Send Message</button>
                </form>
                <div id="blog-sidebar-form-success" style="display:none;text-align:center;padding:0.5rem 0;">
                  <i class="bi bi-check-circle-fill" style="color:#16A34A;font-size:1.6rem;"></i>
                  <p style="margin:0.5rem 0 0;font-size:0.85rem;color:var(--t500);">Thanks! We'll get back to you
                    shortly.</p>
                </div>
              </div>

              <!-- Author widget -->
              <div class="wbeasy-blog-pg-author-widget">
                <div class="wbeasy-blog-pg-author-av">WE</div>
                <div class="wbeasy-blog-pg-author-name">Web EASY Experts</div>
                <div class="wbeasy-blog-pg-author-role">Web Development Team · Kolkata, India</div>
                <p class="wbeasy-blog-pg-author-bio">A globally renowned team of expert website designers and
                  developers helping businesses worldwide build strong, future-ready online presences.</p>
                <div style="display:flex;justify-content:center;gap:0.5rem;">
                  <a href="https://www.instagram.com/webeasyexperts/" class="wbeasy-blog-pg-share-btn"
                    title="Instagram"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/company/web-easy-experts/" class="wbeasy-blog-pg-share-btn"
                    title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                  <a href="https://www.facebook.com/WebEASYExperts" class="wbeasy-blog-pg-share-btn"
                    title="Facebook"><i class="bi bi-facebook"></i></a>
                </div>
              </div>

              <!-- Related posts (auto-generated, excludes the current post) -->
              <div class="wbeasy-blog-pg-related-widget">
                <div class="wbeasy-blog-pg-related-head">
                  <i class="bi bi-journals"></i>
                  <span>Related Posts</span>
                </div>
                <?php foreach ($wbeasy_blog_posts as $slug => $post):
                  if ($slug === $current) continue; ?>
                <a href="<?php echo $slug; ?>" class="wbeasy-blog-pg-related-item">
                  <div class="wbeasy-blog-pg-related-thumb" style="background:<?php echo $post['bg']; ?>;"><i
                      class="bi <?php echo $post['icon']; ?>" style="color:<?php echo $post['color']; ?>"></i>
                  </div>
                  <div>
                    <div class="wbeasy-blog-pg-related-item-title"><?php echo $post['title']; ?></div>
                    <div class="wbeasy-blog-pg-related-item-meta"><?php echo $post['read']; ?> ·
                      <?php echo $post['category']; ?></div>
                  </div>
                </a>
                <?php endforeach; ?>
              </div>

            </div><!-- /sidebar -->
          </div><!-- /sidebar-sticky -->
        </div><!-- /col -->
