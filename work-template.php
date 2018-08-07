<?php

/*

Template Name: Work Template

*/
include('includes/header.php');
?>
  	
 <div class="pusher">
    <div class="wrapper">

            	<div class="main-content">
         <div class="ui text container">
           <div class="home-text profile-content">
             <h2>	<?php the_title(); ?></h2>
           </div> <!-- home text -->
         </div> <!-- ui text container -->

         <div class="works">
            <div class="ui fluid container">

              <div class="work-column">
                <img src=" <?php echo get_theme_mod('project-first-thumbnail-image');?>" class="ui image">
                <div class="info">
                  <p>
                    <?php echo get_theme_mod('project-first-thumbnail-headline');?>
                  <span>
                    <?php echo get_theme_mod('project-first-thumbnail-type');?>
                  </span>
                  </p>
                </div>
                <a href="<?php echo get_permalink(get_theme_mod('project-first-thumbnail-link')); ?>"></a>
              </div>

              <div class="work-column">
                <img src="<?php echo get_theme_mod('project-second-thumbnail-image');?>" class="ui image">
                <div class="info">
                  <p>
                    <?php echo get_theme_mod('project-second-thumbnail-headline');?>
                  <span>
                    <?php echo get_theme_mod('project-second-thumbnail-type');?>
                  </span>
                  </p>
                </div>
                <a href="<?php echo get_permalink(get_theme_mod('project-second-thumbnail-link')); ?>"></a>
              </div> 

              <div class="work-column">
                <img src="<?php echo get_theme_mod('project-third-thumbnail-image');?>" class="ui image">
                <div class="info">
                  <p>
                     <?php echo get_theme_mod('project-third-thumbnail-headline');?>
                  <span>
                  <?php echo get_theme_mod('project-third-thumbnail-type');?>
                  </span>
                  </p>
                </div>
                <a href="<?php echo get_permalink(get_theme_mod('project-third-thumbnail-link')); ?>"></a>
              </div>

              <div class="work-column">
                  <img src=" <?php echo get_theme_mod('project-fourth-thumbnail-image');?>" class="ui image">
                  <div class="info">
                    <p>
                      <?php echo get_theme_mod('project-fourth-thumbnail-headline');?>
                    <span>
                      <?php echo get_theme_mod('project-fourth-thumbnail-type');?>
                    </span>
                    </p>
                  </div>
                  <a href="<?php echo get_permalink(get_theme_mod('project-fourth-thumbnail-link')); ?>"></a>
              </div>

              <div class="work-column">
                  <img src=" <?php echo get_theme_mod('project-fifth-thumbnail-image');?>" class="ui image">
                  <div class="info">
                    <p>
                      <?php echo get_theme_mod('project-fifth-thumbnail-headline');?>
                    <span>
                      <?php echo get_theme_mod('project-fifth-thumbnail-type');?>
                    </span>
                    </p>
                  </div>
                  <a href="<?php echo get_permalink(get_theme_mod('project-fifth-thumbnail-link')); ?>"></a>
              </div>

              <div class="work-column">
                  <img src=" <?php echo get_theme_mod('project-sixth-thumbnail-image');?>" class="ui image">
                  <div class="info">
                    <p>
                      <?php echo get_theme_mod('project-sixth-thumbnail-headline');?>
                    <span>
                      <?php echo get_theme_mod('project-sixth-thumbnail-type');?>
                    </span>
                    </p>
                  </div>
                  <a href="<?php echo get_permalink(get_theme_mod('project-sixth-thumbnail-link')); ?>"></a>
              </div>

            </div> <!-- ui fluid container -->
    	  </div> <!-- works -->
    	</div> <!-- main-content -->
    	



      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>

	<?php include('includes/footer.php'); ?>

