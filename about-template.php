<?php

/*

Template Name: About Template

*/
include('includes/header.php');
?>
  	
 <div class="pusher">
    <div class="wrapper">

          	<div class="main-content">                               
          <div class="ui fluid container">
            <div class="about">
                <div class="ui text container">
                  <div class="home-text-slider">

                   <div class="home-text">
                      <h3><?php echo get_theme_mod('about-first-slider-headline');?></h3>
                      <div class="ui horizontal divider"></div>
                        <p>
                          <?php echo get_theme_mod('about-first-slider-paragraph-one-textarea');?>
                        </p>
                        <p>
                            <?php echo get_theme_mod('about-first-slider-paragraph-two-textarea');?>
                        </p>
                    </div> <!-- home-text -->

                   <div class="home-text">
                      <h3><?php echo get_theme_mod('about-second-slider-headline');?></h3>
                      <div class="ui horizontal divider"></div>
                        <p>
                          <?php echo get_theme_mod('about-second-slider-paragraph-one-textarea');?>
                        </p>
                        <p>
                            <?php echo get_theme_mod('about-second-slider-paragraph-two-textarea');?>
                        </p>
                    </div> <!-- home-text -->


                    <div class="home-text">
                      <h3><?php echo get_theme_mod('about-third-slider-headline');?></h3>
                      <div class="ui horizontal divider"></div>
                        <p>
                          <?php echo get_theme_mod('about-third-slider-paragraph-one-textarea');?>
                        </p>
                        <p>
                            <?php echo get_theme_mod('about-third-slider-paragraph-two-textarea');?>
                        </p>
                    </div> <!-- home-text -->


                   <div class="home-text">
                      <h3><?php echo get_theme_mod('about-fourth-slider-headline');?></h3>
                      <div class="ui horizontal divider"></div>
                        <p>
                          <?php echo get_theme_mod('about-fourth-slider-paragraph-one-textarea');?>
                        </p>
                        <p>
                            <?php echo get_theme_mod('about-fourth-slider-paragraph-two-textarea');?>
                        </p>
                    </div> <!-- home-text -->


                  </div> <!-- home-text-slider -->
                </div> <!-- home-text-slider -->
              <div class="arrows">
                <p class="left-angel"><i class="caret left icon"></i></p>
                <p class="right-angel"><i class="caret right icon"></i></p>
              </div> <!-- arrows --->
            </div> <!-- about -->
            <div class="history">
               <div class="ui stackable grid">
                <div class="three wide middle aligned column">
                  <div class="ui text container">
                    <div class="bgs"><?php the_title(); ?></div>
                  </div>
                </div>

     <div class="ten wide column">
                   <div class="ui text container">
                     <div class="home-text">
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

