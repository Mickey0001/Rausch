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
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
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
                <a href="home" class="logo"><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.png" width="100"  class="ui image"></a>
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


<!-- maybeeee

      	'menu_id'         => "navigation", 
							'echo'            => false,
							'container'       => '', 
							'container_class' => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'container_id'    => 'navigation_bar', 
							'theme_location'  => 'rt-theme-main-navigation',
							'walker' => new RT_Menu_Class_Walker -->