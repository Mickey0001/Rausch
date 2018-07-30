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

    <?php bloginfo('name'); ?> |
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