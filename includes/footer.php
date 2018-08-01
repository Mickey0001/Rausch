<footer>
    	  <div class="ui container">
    	    <div class="footer-content">
              <div class="copyright">&copy;<?php echo date("Y"); ?> <a href=""> Gamaliel Rausch</a>All rights reserved</div>
              <div class="right-content">
                <div class="ui horizontal list">
                <?php $args = array('theme_location' => 'primary'); ?>
                  <?php wp_nav_menu($args);?>
                  <a class="item">Support</a>
                  <a class="item">Contact Us</a>
                  <a class="item">Services</a>
                  <a class="item">Reviews</a>
                  <a class="item">Credits</a>
                </div> <!-- list -->
              </div>
    	    </div> <!-- footer content -->
    	  </div> <!-- ui container -->
    	</footer>
    	
      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>
    <script defer src="<?php bloginfo('template_url'); ?>/assets/js/1.12.4/jquery.min.js"></script>
    <script defer src="<?php bloginfo('template_url'); ?>/assets/core/semantic.min.js"></script>
    <script defer src="<?php bloginfo('template_url'); ?>/assets/core/components/search.js"></script>
    <script defer src="<?php bloginfo('template_url'); ?>/assets/js/slick.min.js"></script>
    <script defer src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>