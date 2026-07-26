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
  'wordpress-developers-india.php' => [
    'title'    => 'WordPress Developers India: Why Businesses Worldwide Choose Indian WordPress Experts',
    'category' => 'WordPress',
    'read'     => '7 min read',
    'icon'     => 'bi-wordpress',
    'color'    => '#2563EB',
    'bg'       => '#F0F7FF',
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
