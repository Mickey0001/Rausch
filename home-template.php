<?php

/*

Template Name: Home Template

*/
include('includes/header.php');
?>
  	
 <div class="pusher">
    <div class="wrapper">

<?php if ( get_header_image() ) : ?>
    <div id="hero">
            <img class="ui image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
				<div class="hero-overlay">
					<p><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span></p>
        </div> <!-- hero overlay -->
    </div> <!-- hero -->
<?php endif; ?>


	
	
				<div class="main-content index-main">
          <div class="ui container">
            <div class="ui two column stackable grid">
               <div class="column">
							</div> <!-- column -->
							
												<div class="middle aligned column">
													<div class="home-text">
													<?php if(have_posts()) : ?>
											<?php while(have_posts()) : the_post(); ?>
										<div class="blog-post">
											<h4 class="blog-post-title">
													<?php the_title(); ?>
											</h4>

											<?php the_content(); ?>
										</div><!-- /.blog-post -->
										<?php endwhile; ?>
									<?php else : ?>
										<p><?php __('No Page Found'); ?></p>
									<?php endif; ?>
									
                </div> <!-- home-text -->
              </div> <!-- column -->
            </div> <!-- grid -->
          </div> <!-- container -->
    	</div> <!-- main-content -->



      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>

	<?php include('includes/footer.php'); ?>

