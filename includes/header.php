<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <header>
           <div class="ui left sidebar large menu">
              <div class="vert-menu">
                  <a href="home" class="item">Home</a>
                  <a href="about" class="item">About</a>
                  <a href="work" class="item">My Work</a>
                  <a href="client" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
              </div> <!-- .left Menu -->
            </div> <!-- listing menut -->
          <div class="primary-menu">
              <div class="ui secondary inverted menu">
               <div class="left menu">
                <a class="toc item toogle-menu"><span></span><p>Menu</p></a>
                <a href="home" class="logo"><img src="images/logo.png" width="100"  class="ui image"></a>
                </div>
                <div class="right menu">
                  <a href="home" class="active item">Home</a>
                  <a href="about" class="item">About</a>
                  <a href="work" class="item">My Work</a>
                  <a href="client" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
                </div>
              </div>
    		</div> <!-- site branding -->
    	</header> <!-- header -->