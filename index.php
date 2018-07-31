<?php include('includes/header.php'); ?>

        <div class="hero">
           <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/hero.jpg" alt="" class="ui image">
            <div class="hero-overlay">
              <p><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span></p>
            </div> <!-- hero overlay -->
        </div> <!-- hero -->
    	
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
                            echo '<p>No Content Found.</p>';

                          endif;
                            
                          ?>
              </div> <!-- column -->
              <div class="middle aligned column">
                          <?php include('home_text.php'); ?>
              </div> <!-- column -->
            </div> <!-- grid -->
          </div> <!-- container -->
    	</div> <!-- main-content -->
    	
      <?php include('includes/footer.php'); ?>