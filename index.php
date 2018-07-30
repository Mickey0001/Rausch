<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rausch</title>
    <link rel="stylesheet" type="text/css" href="core/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="pusher">
    <div class="wrapper">
    	<header>
           <div class="ui left sidebar large menu">
              <div class="vert-menu">
                  <a href="index.html" class="item">Home</a>
                  <a href="about.html" class="item">About</a>
                  <a href="work.html" class="item">My Work</a>
                  <a href="client.html" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
              </div> <!-- .left Menu -->
            </div> <!-- listing menut -->
          <div class="primary-menu">
              <div class="ui secondary inverted menu">
               <div class="left menu">
                <a class="toc item toogle-menu"><span></span><p>Menu</p></a>
                <a href="index.html" class="logo"><img src="images/logo.png" width="100"  class="ui image"></a>
                </div>
                <div class="right menu">
                  <a href="index.html" class="active item">Home</a>
                  <a href="about.html" class="item">About</a>
                  <a href="work.html" class="item">My Work</a>
                  <a href="Client.html" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
                </div>
              </div>
    		</div> <!-- site branding -->
    	</header> <!-- header -->

        <div class="hero">
           <img src="images/hero.jpg" alt="" class="ui image">
            <div class="hero-overlay">
              <p>Rausch <span>Design and Development</span></p>
            </div> <!-- hero overlay -->
        </div> <!-- hero -->
    	
    	<div class="main-content index-main">
          <div class="ui container">
            <div class="ui two column stackable grid">
               <div class="column">
              </div> <!-- column -->
              <div class="middle aligned column">
                <div class="home-text">
                  <h4>Hey!, My Name is Gamaliel Rausch an independent Freelancer base in Berlin, Germany and I am an UI & UX Designer.I design and deliver creative collateral for some of the most world's most exclusive brands.</h4>
                  
                  <p>My clients porfolio spans a range of industries including interior design, property, jewellery and the arts. I combina a clear design aestheti with solid commercial rationale to create projects that truly inspire, inform and engage.</p>
                  
                  <p>This site gives you a bit of background about me and examples of <a href="work.html">my work</a>. If you have something in mind or are looking for something in particular, <a href="">get in touch</a> - that's what I am here for.</p>
                </div> <!-- home-text -->
              </div> <!-- column -->
            </div> <!-- grid -->
          </div> <!-- container -->
    	</div> <!-- main-content -->
    	
    	<footer>
    	  <div class="ui container">
    	    <div class="footer-content">
              <div class="copyright">©2018 <a href="">Gamaliel Rausch</a> All rights reserved</div>
              <div class="right-content">
                <div class="ui horizontal list">
                  <a class="item">Support</a>
                  <a class="item">Contact Us</a>
                  <a class="item">Services</a>
                  <a class="item">Reviews</a>
                  <a class="item">Credits</a>
                </div> <!-- list -->
              </div>
    	    </div> <!-- footer content -->
    	  </div> <!-- ui container -->
    	</footer>
    	
      </div> <!-- wrapper -->
    </div> <!-- pusher -->
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="core/semantic.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
    <script src="js/slick.min.js"></script> 
    <?php wp_footer(); ?>
  </body>
</html>