<?php

/*

Template Name: Client Template

*/
include('includes/header.php');
?>

 <div class="pusher">
    <div class="wrapper">
				
        <div class="main-content">
          <div class="ui text container">
            <div class="home-text client-text">

													<?php if(have_posts()) : ?>
											<?php while(have_posts()) : the_post(); ?>
                      <h3>
													<?php the_title(); ?>
                      </h3>
                      <div class="ui horizontal divider"></div>

											<?php the_content(); ?>
										</div><!-- /.blog-post -->
										<?php endwhile; ?>
									<?php else : ?>
										<p><?php __('No Page Found'); ?></p>
									<?php endif; ?>
									
                  </div> <!-- home-text -->
          </div> <!-- container -->

    	</div> <!-- main content -->



      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>


<?php include('includes/footer.php'); ?>