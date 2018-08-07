<footer>
    	  <div class="ui container">
    	    <div class="footer-content">
              <div class="copyright">&copy;<?php echo date("Y"); ?> <a href=""> Gamaliel Rausch</a>All rights reserved</div>
              <div class="right-content">
                <div class="ui horizontal list">
                <?php $args = array('theme_location' => 'footer'); ?>
                  <?php wp_nav_menu($args);?>
                  <a href="work" class="item">My Work</a>
                  <a href="client" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
                </div> <!-- list -->
              </div>
    	    </div> <!-- footer content -->
    	  </div> <!-- ui container -->
    	</footer>
    	
      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>
    <?php wp_footer(); ?>
  </body>
</html>