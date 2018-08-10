<?php

/*

Template Name: Project Template

*/
include('includes/header.php');
?>
  	
  <div class="pusher">
     <div class="wrapper">

     
     <div class="main-content">
          <div class="ui container">
            <div class="ui two column stackable grid">
             <div class="middle aligned column">
               <h1><?php the_title(); ?></h1>
             </div> 
              <div class="column">
                <div class="home-text">
                  <p>
                      <?php if(have_posts()) : ?>
                          <?php while(have_posts()) : the_post(); ?>

                          <?php the_content(); ?>
                        </div><!-- /.blog-post -->
                        <?php endwhile; ?>
                      <?php else : ?>
                        <p><?php __('No Page Found'); ?></p>
                      <?php endif; ?>
                  </p>
          
                </div>
              </div> <!-- column -->
            </div> <!-- grid -->

    
              <?php dynamic_sidebar('project_bar'); ?>   
         
          </div> <!-- container -->
    	</div> <!-- main-content -->

        


      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>

<?php include('includes/footer.php'); ?>

