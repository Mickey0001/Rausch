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
function themename_client_thumbnails_setup($wp_customize) 

        {
            $wp_customize->add_section('client-thumbnails-section', array(
                'title' => 'Client Thumbnails',
            ));

            $wp_customize->add_setting('client-thumbnails-headline', array(
                'default' => 'Client Thumbnail Heading Goes Here',
            ));

            $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-thumbnails-headline-control', array(
                'label' => 'Headline',
                'section' => 'client-thumbnails-section',
                'settings' => 'client-thumbnails-headline',
            )));

            $wp_customize->add_setting('client-thumbnails-link');

            $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-thumbnails-link-control', array(
                'label' => 'Link',
                'section' => 'client-thumbnails-section',
                'settings' => 'client-thumbnails-link',
                'type' => 'dropdown-pages'
            )));
        }

add_action('customize_register', 'themename_client_thumbnails_setup');


//For Testing and tweaking
function mcs_social($wp_customize){

    $wp_customize->add_section('mcs_social_handle', array(
        'title'    => __('Social Network Handles', 'mcs'),
        'description' => 'i.e., Acme Company\'s Facebook is https://facebook.com/acmecompany then enter "acmecompany"',
        'priority' => 70,
    ));

    //  =============================
    //  = Facebook                  =
    //  =============================
    $wp_customize->add_setting('mcs_fb_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mcs_fb', array(
        'label'      => __('Facebook Handle', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_fb_op',
    ));

        //  =============================
    //  = Twitter                  =
    //  =============================
    $wp_customize->add_setting('mcs_tw_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mcs_tw', array(
        'label'      => __('Twitter Handle', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_tw_op',
    ));

    //  =============================
    //  = RSS                       =
    //  =============================
     $wp_customize->add_setting('mcs_rs_op', array(
        'default'        => 'rss2_url',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'mcs_rs', array(
        'settings' => 'mcs_rs_op',
        'label'   => 'RSS Feed',
        'section' => 'mcs_social_handle',
        'type'    => 'select',
                'choices'       => array(
                    'rdf_url'       => 'RDF/RSS 1.0 feed',
                    'rss2_url'  => 'RSS 2.0 feed',
                    'atom_url'  => 'Atom feed',
        ),
    ));
}

//add
add_action( 'customize_register', 'mcs_social' );






