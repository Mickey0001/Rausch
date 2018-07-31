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
           <div class="ui left sidebar large menu">
              <div class="vert-menu">
                  <a href="index.php" class="item">Home</a>
                  <a href="about.php" class="item">About</a>
                  <a href="work.php" class="item">My Work</a>
                  <a href="client.php" class="item">Clients</a>
                  <a href="tel:015901076051" class="item">01591076041</a>
                  <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>
              </div> <!-- .left Menu -->
            </div> <!-- listing menut -->
            

          <?php

$menu_name = 'primary'; // this is the registered menu name

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menu_items = wp_get_nav_menu_items($menu->term_id);
  echo '<div class="primary-menu">';
  echo '<div class="ui secondary inverted menu">';
  echo '<div class="ui secondary inverted menu">';
  echo '<div class="left menu">';
  echo '<a class="toc item toogle-menu"><span></span><p>Menu</p></a>';
  echo '<a href="index.php" class="logo"><img src="" width="100"  class="ui image"/></a>';
  echo '</div>';
  echo '<div class="right menu">';
     echo'<a href="/index.php" class="active item">Home (Static Menu)</a>';
     echo '<a href="about.php" class="item">About</a>';
     echo '<a href="/work.php" class="item">My Work</a>';
     echo '<a href="/client.php" class="item">Clients</a>';
     echo '<a href="tel:015901076051" class="item">01591076041</a>';
    echo ' <a href="mailto:gamaliel.rausch@gmail.com?subject=Rausch Creative enquiry" class="item">gamaliel.rausch@gmail.com</a>';
   echo '</div>';
 echo '</div>';
    foreach ( (array) $menu_items as $key => $menu_item ) :
      $title = $menu_item->title;
      $url = $menu_item->url;
      $class = $menu_item->classes; // get array with class names
      if ( get_the_ID() == $menu_item->object_id ) { // check for current page
        echo '<a class="active item" href="' . $url . '">';
      } else {
        echo '<a class="item" href="' . $url . '">';
      } 
        echo '<i class="item ' . implode(' ', $class) . '"></i>' . $title;
      echo '</a>';
    endforeach;
  echo '</div>';
else :
  echo '<div class="ui error message"><p>Menu "' . $menu_name . '" not defined.</p></div>';
endif;

?>
      </header> <!-- header -->
