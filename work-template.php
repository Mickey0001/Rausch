<?php

/*

Template Name: Work Page Template

*/
include('includes/header.php');
?>
  	
 <div class="pusher">
    <div class="wrapper">

 
										<?php if(have_posts()) : ?>
											<?php while(have_posts()) : the_post(); ?>

											<?php the_content(); ?>
                      </p>

										<?php endwhile; ?>
									<?php else : ?>
										<p><?php __('No Page Found'); ?></p>
                  <?php endif; ?>
                  </div> <!-- home-text -->
                    </div> <!-- home-text -->
                  </div> <!-- column -->
                </div> <!-- ui grid -->
              </div> <!-- home-text-slider -->
            </div> <!-- history -->
          </div> <!-- ui container -->
    	</div> <!-- main-content -->
									



      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>

	<?php include('includes/footer.php'); ?>

