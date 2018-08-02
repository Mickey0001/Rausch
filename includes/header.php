<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> 
    <meta name="description" content="<?php bloginfo('description'); ?>"> 
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Semantic UI core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/assets/core/semantic.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href="<?php bloginfo('template_url'); ?>/assets/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/slick-theme.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="pusher">
    <div class="wrapper"> 
          <header>

         <div class="ui secondary vertical pointing menu">
         <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
       'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new understrap_WP_Bootstrap_Navwalker())
           );
       ?>                   
</div>

           <!-- <div class="ui left sidebar large menu">
           <div class="vert-menu">
                  <a href=">" class="item">
                  </a>
                  <a href="" class="item">About

                   
                  </a>
                  <a href="work.html" class="item">My Work</a>
                  <a href="client.html" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
              </div> 
            </div>  -->

          <!-- Mobile side menu -->
          <!-- <div class="primary-menu">
              <div class="ui secondary inverted menu">
               <div class="left menu">
                  <a class="toc item toogle-menu"><span></span><p>Menu</p></a>
                  <a href="" class="logo"><img src="/assets/images/logo.png" width="100"  class="ui image"></a>
                </div>
                <div class="right menu">
                <a href="" class="item">Home</a>
                  <a href="" class="item">About</a>
                  <a href="work.html" class="item">My Work</a>
                  <a href="client.html" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
                </div>
              </div> -->
              <!-- Mobile side menu -->

    		</div> <!-- site branding -->
    	</header> <!-- header -->

