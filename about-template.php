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
                      <h3>Our Ethos</h3>
                      <div class="ui horizontal divider"></div>
                      <p>My clients porfolio spans a range of industries including interior design, property, jewellery and the arts. I combina a clear design aestheti with solid commercial rationale to create projects that truly inspire, inform and engage.</p>

                      <p>This site gives you a bit of background about me and examples of <a href="work">my work</a>. If you have something in mind or are looking for something in particular, <a href="contact">get in touch</a> - that's what I am here for.</p>
                    </div> <!-- home-text -->
                   <div class="home-text">
                      <h3>Relationships</h3>
                      <div class="ui horizontal divider"></div>
                      <p>My clients porfolio spans a range of industries including interior design, property, jewellery and the arts. I combina a clear design aestheti with solid commercial rationale to create projects that truly inspire, inform and engage.</p>

                      <p>This site gives you a bit of background about me and examples of <a href="work">my work</a>. If you have something in mind or are looking for something in particular, <a href="contact">get in touch</a> - that's what I am here for.</p>
                    </div> <!-- home-text -->
                    <div class="home-text">
                      <h3>Experience</h3>
                      <div class="ui horizontal divider"></div>
                      <p>My clients porfolio spans a range of industries including interior design, property, jewellery and the arts. I combina a clear design aestheti with solid commercial rationale to create projects that truly inspire, inform and engage.</p>

                      <p>This site gives you a bit of background about me and examples of <a href="work">my work</a>. If you have something in mind or are looking for something in particular, <a href="contact">get in touch</a> - that's what I am here for.</p>
                    </div> <!-- home-text -->
                   <div class="home-text">
                      <h3>Transparency</h3>
                      <div class="ui horizontal divider"></div>
                      <p>My clients porfolio spans a range of industries including interior design, property, jewellery and the arts. I combina a clear design aestheti with solid commercial rationale to create projects that truly inspire, inform and engage.</p>

                      <p>This site gives you a bit of background about me and examples of <a href="work">my work</a>. If you have something in mind or are looking for something in particular, <a href="contact">get in touch</a> - that's what I am here for.</p>
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

