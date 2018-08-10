<?php

/*

Template Name: Clients Template

*/
include('includes/header.php');
?>

 <div class="pusher">
    <div class="wrapper">

    <div class="hero">
      <img src="<?php echo get_theme_mod('client-hero-heading-image');?>" alt="hero" class="ui image">
        <div class="hero-overlay">
        <p>
             <?php bloginfo('name'); ?>
           <span>
              <?php bloginfo('description'); ?>
           </span>
        </p>
        </div> <!-- hero overlay -->
    </div> <!-- hero -->
				
        <div class="main-content">
          <div class="ui text container">
            <div class="home-text client-text">

													<?php if(have_posts()) : ?>
											<?php while(have_posts()) : the_post(); ?>
                      <h3>
													<?php the_title(); ?>
                      </h3>
       

											<?php the_content(); ?>
                      <div class="ui horizontal divider"></div>
										</div><!-- /.blog-post -->
										<?php endwhile; ?>
									<?php else : ?>
										<p><?php __('No Page Found'); ?></p>
									<?php endif; ?>
									
                  </div> <!-- home-text -->
          </div> <!-- container -->



          <div class="clients-container">
            <div class="ui container">
              <div class="ui four column stackable grid">
              
                <div class="column">
                  <div class="c-card">
                    <a href="<?php echo get_permalink(get_theme_mod('client-first-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-first-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

               <div class="column">
                  <div class="c-card">
                  <a href="<?php echo get_permalink(get_theme_mod('client-second-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-second-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

               <div class="column">
                  <div class="c-card">
                  <a href="<?php echo get_permalink(get_theme_mod('client-third-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-third-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

               <div class="column">
                  <div class="c-card">
                  <a href="<?php echo get_permalink(get_theme_mod('client-fourth-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-fourth-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

               <div class="column">
                  <div class="c-card">
                  <a href="<?php echo get_permalink(get_theme_mod('client-fifth-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-fifth-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

               <div class="column">
                  <div class="c-card">
                  <a href="<?php echo get_permalink(get_theme_mod('client-sixth-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-sixth-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

               <div class="column">
                  <div class="c-card">
                  <a href="<?php echo get_permalink(get_theme_mod('client-sixth-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-seventh-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

               <div class="column">
                  <div class="c-card">
                  <a href="<?php echo get_permalink(get_theme_mod('client-sixth-thumbnail-link')); ?>">
                     <?php echo get_theme_mod('client-eighth-thumbnail-headline'); ?></a> 
                  </div> <!-- c-card -->
                </div> <!-- column -->

                </div> <!-- grid -->
            </div> <!-- ui container -->
          </div> <!-- clients-container -->
    	</div> <!-- main content -->



      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>


<?php include('includes/footer.php'); ?>