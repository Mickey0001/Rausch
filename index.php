<?php include('includes/header.php'); ?>

    	<div class="main-content index-main">
          <div class="ui container">
            
            <div class="ui two column stackable grid">
              
                <div class="column">
                          <?php 

                          if (have_posts()) :
                            while (have_posts()) : the_post(); ?>

                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <?php the_content();?>

                          <?php endwhile;

                          else :
                            echo '<p></p>';

                          endif;
                            
                          ?>
              </div> <!-- column -->
              
              </div> <!-- column -->
            </div> <!-- grid -->
          </div> <!-- container -->
    	</div> <!-- main-content -->
    	
      <?php include('includes/footer.php'); ?>