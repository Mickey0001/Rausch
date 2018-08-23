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
             <h2>My Work</h2>
           </div> <!-- home text -->
         </div> <!-- ui text container -->
    	  <div class="works">
            <div class="ui fluid container">
            <?php // WP_Query arguments
                $args = array (
                	'post_type'              => array( 'work_folio' ),
                	'post_status'            => array( 'publish' ),
                	'nopaging'               => true,
                	'order'                  => 'DESC',
                );
                
                // The Query
                $services = new WP_Query( $args );
                
                // The Loop
                if ( $services->have_posts() ) {
                    $j = 0;
                	while ( $services->have_posts() ) {
                		$services->the_post(); 
                		$even_odd_class = (++$j % 2 == 0) ? 'work_even' : 'work_odd';
                		
                		$img_url = get_the_post_thumbnail_url();
                		//var_dump($img_url);
                		$work_title = get_the_title();
                		$work_cat = work_details_get_meta( 'work_details_type_category' );
                		$work_link= work_details_get_meta( 'work_details_link' );
                		?>
                		<div class="work-column">
                            <img src="<?php echo $img_url;?>" class="ui image">
                            <div class="info">
                              <p><?php echo $work_title;?> <span><?php echo $work_cat;?></span></p>
                            </div>
                            <a href="<?php echo $work_link;?>"></a>
                        </div>
                <?php        
                	}
                } else {
                	// no posts found
                }
                // Restore original Post Data
                wp_reset_postdata();
            ?>
            </div> <!-- ui fluid container -->
    	  </div> <!-- works -->
    	</div> <!-- main-content -->

        


      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>

<?php include('includes/footer.php'); ?>