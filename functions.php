<?php

  if ( ! function_exists( 'add_script_style' ) ) {
    function add_script_style() {

        /* Register & Enqueue Styles. */
        wp_register_style( 'semantic.min.css', get_template_directory_uri().'/assets/core/semantic.min.css' );
        wp_enqueue_style( 'semantic.min.css' );

        wp_register_style( 'style.css', get_template_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style( 'style.css' );

        wp_register_style( 'slick.css', get_template_directory_uri().'/assets/css/slick.css' );
        wp_enqueue_style( 'slick.css' );

        wp_register_style( 'slick-theme.css', get_template_directory_uri().'/assets/css/slick-theme.css' );
        wp_enqueue_style( 'slick-theme.css' );

        /* Register & Enqueue scripts. */
        wp_register_script( 'jquery.min.js', get_template_directory_uri().'/assets/js/jquery.min.js' );
        wp_enqueue_script( 'jquery.min.js');

        wp_register_script( 'main.js', get_template_directory_uri().'/assets/js/main.js' );
        wp_enqueue_script( 'main.js');

        wp_register_script( 'slick.min.js', get_template_directory_uri().'/assets/js/slick.min.js' );
        wp_enqueue_script( 'slick.min.js');

        wp_register_script( 'semantic.min.js', get_template_directory_uri().'/assets/core/semantic.min.js' );
        wp_enqueue_script( 'semantic.min.js');
        
    }
}

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
                'default' => 'Client',
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
            'default' => 'Client',
        ));

        $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-second-thumbnail-headline-control', array(
            'label' => 'Second Thumbnail Headline',
            'section' => 'client-second-thumbnail-section',
            'settings' => 'client-second-thumbnail-headline',
        )));

        $wp_customize->add_setting('client-second-thumbnail-link');

        $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-second-thumbnail-link-control', array(
            'label' => 'Second Thumbnail Link',
            'section' => 'client-second-thumbnail-section',
            'settings' => 'client-second-thumbnail-link',
            'type' => 'dropdown-pages'
        )));
    }

    function themename_third_client_thumbnails_setup($wp_customize)

    {
        $wp_customize->add_section('client-third-thumbnail-section', array(
            'title' => 'Third Client Thumbnail',
        ));
    
        $wp_customize->add_setting('client-third-thumbnail-headline', array(
            'default' => 'Client',
        ));
    
        $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-third-thumbnail-headline-control', array(
            'label' => 'third Thumbnail Headline',
            'section' => 'client-third-thumbnail-section',
            'settings' => 'client-third-thumbnail-headline',
        )));
    
        $wp_customize->add_setting('client-third-thumbnail-link');
    
        $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-third-thumbnail-link-control', array(
            'label' => 'Third Thumbnail Link',
            'section' => 'client-third-thumbnail-section',
            'settings' => 'client-third-thumbnail-link',
            'type' => 'dropdown-pages'
        )));
    }

    function themename_fourth_client_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('client-fourth-thumbnail-section', array(
        'title' => 'Fourth Client Thumbnail',
    ));

    $wp_customize->add_setting('client-fourth-thumbnail-headline', array(
        'default' => 'Client',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-fourth-thumbnail-headline-control', array(
        'label' => 'Fourth Thumbnail Headline',
        'section' => 'client-fourth-thumbnail-section',
        'settings' => 'client-fourth-thumbnail-headline',
    )));

    $wp_customize->add_setting('client-fourth-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-fourth-thumbnail-link-control', array(
        'label' => 'Fourth Thumbnail Link',
        'section' => 'client-fourth-thumbnail-section',
        'settings' => 'client-fourth-thumbnail-link',
        'type' => 'dropdown-pages'
    )));
}

function themename_fifth_client_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('client-fifth-thumbnail-section', array(
        'title' => 'Fifth Client Thumbnail',
    ));

    $wp_customize->add_setting('client-fifth-thumbnail-headline', array(
        'default' => 'Client',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-fifth-thumbnail-headline-control', array(
        'label' => 'Fifth Thumbnail Headline',
        'section' => 'client-fifth-thumbnail-section',
        'settings' => 'client-fifth-thumbnail-headline',
    )));

    $wp_customize->add_setting('client-fifth-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-fifth-thumbnail-link-control', array(
        'label' => 'Fifth Thumbnail Link',
        'section' => 'client-fifth-thumbnail-section',
        'settings' => 'client-fifth-thumbnail-link',
        'type' => 'dropdown-pages'
    )));
}

function themename_sixth_client_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('client-sixth-thumbnail-section', array(
        'title' => 'Sixth Client Thumbnail',
    ));

    $wp_customize->add_setting('client-sixth-thumbnail-headline', array(
        'default' => 'Client',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-sixth-thumbnail-headline-control', array(
        'label' => 'Sixth Thumbnail Headline',
        'section' => 'client-sixth-thumbnail-section',
        'settings' => 'client-sixth-thumbnail-headline',
    )));

    $wp_customize->add_setting('client-sixth-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-sixth-thumbnail-link-control', array(
        'label' => 'Sixth Thumbnail Link',
        'section' => 'client-sixth-thumbnail-section',
        'settings' => 'client-sixth-thumbnail-link',
        'type' => 'dropdown-pages'
    )));
}
function themename_seventh_client_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('client-seventh-thumbnail-section', array(
        'title' => 'Seventh Client Thumbnail',
    ));

    $wp_customize->add_setting('client-seventh-thumbnail-headline', array(
        'default' => 'Client',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-seventh-thumbnail-headline-control', array(
        'label' => 'Seventh Thumbnail Headline',
        'section' => 'client-seventh-thumbnail-section',
        'settings' => 'client-seventh-thumbnail-headline',
    )));

    $wp_customize->add_setting('client-seventh-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-seventh-thumbnail-link-control', array(
        'label' => 'Seventh Thumbnail Link',
        'section' => 'client-seventh-thumbnail-section',
        'settings' => 'client-seventh-thumbnail-link',
        'type' => 'dropdown-pages'
    )));
}

function themename_eighth_client_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('client-eighth-thumbnail-section', array(
        'title' => 'Eighth Client Thumbnail',
    ));

    $wp_customize->add_setting('client-eighth-thumbnail-headline', array(
        'default' => 'Client',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-eighth-thumbnail-headline-control', array(
        'label' => 'Eighth Thumbnail Headline',
        'section' => 'client-eighth-thumbnail-section',
        'settings' => 'client-eighth-thumbnail-headline',
    )));

    $wp_customize->add_setting('client-eighth-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-eighth-thumbnail-link-control', array(
        'label' => 'Eighth Thumbnail Link',
        'section' => 'client-eighth-thumbnail-section',
        'settings' => 'client-eighth-thumbnail-link',
        'type' => 'dropdown-pages'
    )));
}

//Custom Project Thumbnails
function themename_first_project_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('project-first-thumbnail-section', array(
        'title' => 'First Project Thumbnail',
    ));

    $wp_customize->add_setting('project-first-thumbnail-headline', array(
        'default' => 'Project',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-first-thumbnail-headline-control', array(
        'label' => 'First Project Thumbnail Headline',
        'section' => 'project-first-thumbnail-section',
        'settings' => 'project-first-thumbnail-headline',
    )));

    $wp_customize->add_setting('project-first-thumbnail-type', array(
        'default' => 'Digital',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-first-thumbnail-type-control', array(
        'label' => 'First Project Thumbnail Type',
        'section' => 'project-first-thumbnail-section',
        'settings' => 'project-first-thumbnail-type',
    )));

    $wp_customize->add_setting('project-first-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-first-thumbnail-link-control', array(
        'label' => 'First Project Thumbnail Link',
        'section' => 'project-first-thumbnail-section',
        'settings' => 'project-first-thumbnail-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('project-first-thumbnail-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project-first-thumbnail-image',
            array(
                'label'      => __( 'Project Image', 'theme_name' ),
                'section'    => 'project-first-thumbnail-section',
                'settings'   => 'project-first-thumbnail-image'
            )
        )
    );

}

add_action( 'wp_enqueue_scripts', 'add_script_style', 10 );    

add_action('customize_register', 'themename_first_client_thumbnails_setup');
add_action('customize_register', 'themename_second_client_thumbnails_setup');
add_action('customize_register', 'themename_third_client_thumbnails_setup');
add_action('customize_register', 'themename_fourth_client_thumbnails_setup');
add_action('customize_register', 'themename_fifth_client_thumbnails_setup');
add_action('customize_register', 'themename_sixth_client_thumbnails_setup');
add_action('customize_register', 'themename_seventh_client_thumbnails_setup');
add_action('customize_register', 'themename_eighth_client_thumbnails_setup');

add_action('customize_register', 'themename_first_project_thumbnails_setup');

