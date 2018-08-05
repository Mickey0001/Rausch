<?php
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));

    function themename_custom_header_setup() {
        $defaults = array(
            // Default Header Image to display
            'default-image'         => get_template_directory_uri() . '/assets/images/hero.jpg',
            // Display the header text along with the image
            'header-text'           => false,
            // Header text color default
            'default-text-color'        => '000',
            // Header image width (in pixels)
            'width'             => 1000,
            // Header image height (in pixels)
            'height'            => 198,
            // Header image random rotation default
            'random-default'        => false,
            // Enable upload of image file in admin 
            'uploads'       => false,
            // function to be called in theme head section
            'wp-head-callback'      => 'wphead_cb',
            //  function to be called in preview page head section
            'admin-head-callback'       => 'adminhead_cb',
            // function to produce preview markup in the admin screen
            'admin-preview-callback'    => 'adminpreview_cb',
            );
    }
    add_action( 'after_setup_theme', 'themename_custom_header_setup' );
?>


