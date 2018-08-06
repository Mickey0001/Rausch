<?php
    register_nav_menus
    (array(
        'primary' => __('Primary Menu'),
    ));

    function themename_custom_header_setup()
    {
    $defaults = array
    (
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 2000,
        // Header image height (in pixels)
        'height'            => 1105,
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

        $header_info = array
        (
            'width'         => 2000,
            'height'        => 1105,
            'default-image' => get_template_directory_uri() . '/assets/images/hero.jpg',
        );

        add_theme_support( 'custom-header', $header_info );

        $header_images = array
        (
            'hero' => array(
                    'url'           => get_template_directory_uri() . '/assets/images/hero.jpg',
                    'thumbnail_url' => get_template_directory_uri() . '/assets/images/hero.jpg',
                    'description'   => 'Hero',
            ),
        );

        register_default_headers( $header_images );
}

add_action( 'after_setup_theme', 'themename_custom_header_setup' );


//Custom Client Thumbnails
function themename_first_client_thumbnails_setup($wp_customize)

        {
            $wp_customize->add_section('client-first-thumbnail-section', array(
                'title' => 'First Client Thumbnail',
            ));

            $wp_customize->add_setting('client-first-thumbnail-headline', array(
                'default' => 'Client Thumbnail Heading Goes Here',
            ));

            $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-first-thumbnail-headline-control', array(
                'label' => 'First Thumbnail Headline',
                'section' => 'client-first-thumbnail-section',
                'settings' => 'client-first-thumbnail-headline',
            )));

            $wp_customize->add_setting('client-first-thumbnail-link');

            $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-first-thumbnail-link-control', array(
                'label' => 'First Thumbnail Link',
                'section' => 'client-first-thumbnail-section',
                'settings' => 'client-first-thumbnail-link',
                'type' => 'dropdown-pages'
            )));
        }

        function themename_second_client_thumbnails_setup($wp_customize)

        {
            $wp_customize->add_section('client-second-thumbnail-section', array(
                'title' => 'Second Client Thumbnail',
            ));
        
            $wp_customize->add_setting('client-second-thumbnail-headline', array(
                'default' => 'Client Thumbnail Heading Goes Here',
            ));
        
            $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-second-thumbnail-headline-control', array(
                'label' => 'Second Thumbnail Headline',
                'section' => 'client-second-thumbnail-section',
                'settings' => 'client-second-thumbnail-headline',
            )));
        
            $wp_customize->add_setting('client-second-thumbnail-link');
        
            $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-second-thumbnail-link-control', array(
                'label' => 'second Thumbnail Link',
                'section' => 'client-second-thumbnail-section',
                'settings' => 'client-second-thumbnail-link',
                'type' => 'dropdown-pages'
            )));
        }
        
add_action('customize_register', 'themename_first_client_thumbnails_setup');
add_action('customize_register', 'themename_second_client_thumbnails_setup');






