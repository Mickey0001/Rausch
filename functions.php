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

//Home page hero image header start
function themename_hero_home_headings_setup($wp_customize)

{
    $wp_customize->add_section('home-hero-heading-section', array(
        'title' => 'Home Hero Image',
    ));

    $wp_customize->add_setting('home-hero-heading-headline', array(
        'default' => 'home',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'home-hero-heading-headline-control', array(
        'label' => 'home Hero Image',
        'section' => 'home-hero-heading-section',
        'settings' => 'home-hero-heading-headline',
    )));

    $wp_customize->add_setting('home-hero-heading-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'home-hero-heading-image',
            array(
                'label'      => __( 'Hero home Image', 'theme_name' ),
                'section'    => 'home-hero-heading-section',
                'settings'   => 'home-hero-heading-image'
            )
        )
    );
}

add_action('customize_register', 'themename_hero_home_headings_setup');
//Home page hero image header end


//Client page hero image header start
function themename_hero_client_headings_setup($wp_customize)

{
    $wp_customize->add_section('client-hero-heading-section', array(
        'title' => 'Client Hero Image',
    ));

    $wp_customize->add_setting('client-hero-heading-headline', array(
        'default' => 'Client',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'client-hero-heading-headline-control', array(
        'label' => 'Client Hero Image',
        'section' => 'client-hero-heading-section',
        'settings' => 'client-hero-heading-headline',
    )));

    $wp_customize->add_setting('client-hero-heading-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'client-hero-heading-image',
            array(
                'label'      => __( 'Hero Client Image', 'theme_name' ),
                'section'    => 'client-hero-heading-section',
                'settings'   => 'client-hero-heading-image'
            )
        )
    );
}

add_action('customize_register', 'themename_hero_client_headings_setup');
//Client page hero image header end

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
                'label'      => __( 'First Project Image', 'theme_name' ),
                'section'    => 'project-first-thumbnail-section',
                'settings'   => 'project-first-thumbnail-image'
            )
        )
    );

}

function themename_second_project_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('project-second-thumbnail-section', array(
        'title' => 'Second Project Thumbnail',
    ));

    $wp_customize->add_setting('project-second-thumbnail-headline', array(
        'default' => 'Project',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-second-thumbnail-headline-control', array(
        'label' => 'Second Project Thumbnail Headline',
        'section' => 'project-second-thumbnail-section',
        'settings' => 'project-second-thumbnail-headline',
    )));

    $wp_customize->add_setting('project-second-thumbnail-type', array(
        'default' => 'Digital',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-second-thumbnail-type-control', array(
        'label' => 'Second Project Thumbnail Type',
        'section' => 'project-second-thumbnail-section',
        'settings' => 'project-second-thumbnail-type',
    )));

    $wp_customize->add_setting('project-second-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-second-thumbnail-link-control', array(
        'label' => 'Second Project Thumbnail Link',
        'section' => 'project-second-thumbnail-section',
        'settings' => 'project-second-thumbnail-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('project-second-thumbnail-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project-second-thumbnail-image',
            array(
                'label'      => __( 'Second Project Image', 'theme_name' ),
                'section'    => 'project-second-thumbnail-section',
                'settings'   => 'project-second-thumbnail-image'
            )
        )
    );

}

function themename_third_project_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('project-third-thumbnail-section', array(
        'title' => 'Third Project Thumbnail',
    ));

    $wp_customize->add_setting('project-third-thumbnail-headline', array(
        'default' => 'Project',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-third-thumbnail-headline-control', array(
        'label' => 'Third Project Thumbnail Headline',
        'section' => 'project-third-thumbnail-section',
        'settings' => 'project-third-thumbnail-headline',
    )));

    $wp_customize->add_setting('project-third-thumbnail-type', array(
        'default' => 'Digital',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-third-thumbnail-type-control', array(
        'label' => 'Third Project Thumbnail Type',
        'section' => 'project-third-thumbnail-section',
        'settings' => 'project-third-thumbnail-type',
    )));

    $wp_customize->add_setting('project-third-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-third-thumbnail-link-control', array(
        'label' => 'Third Project Thumbnail Link',
        'section' => 'project-third-thumbnail-section',
        'settings' => 'project-third-thumbnail-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('project-third-thumbnail-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project-third-thumbnail-image',
            array(
                'label'      => __( 'Third Project Image', 'theme_name' ),
                'section'    => 'project-third-thumbnail-section',
                'settings'   => 'project-third-thumbnail-image'
            )
        )
    );

}

function themename_fourth_project_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('project-fourth-thumbnail-section', array(
        'title' => 'Fourth Project Thumbnail',
    ));

    $wp_customize->add_setting('project-fourth-thumbnail-headline', array(
        'default' => 'Project',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-fourth-thumbnail-headline-control', array(
        'label' => 'Fourth Project Thumbnail Headline',
        'section' => 'project-fourth-thumbnail-section',
        'settings' => 'project-fourth-thumbnail-headline',
    )));

    $wp_customize->add_setting('project-fourth-thumbnail-type', array(
        'default' => 'Digital',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-fourth-thumbnail-type-control', array(
        'label' => 'Fourth Project Thumbnail Type',
        'section' => 'project-fourth-thumbnail-section',
        'settings' => 'project-fourth-thumbnail-type',
    )));

    $wp_customize->add_setting('project-fourth-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-fourth-thumbnail-link-control', array(
        'label' => 'Fourth Project Thumbnail Link',
        'section' => 'project-fourth-thumbnail-section',
        'settings' => 'project-fourth-thumbnail-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('project-fourth-thumbnail-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project-fourth-thumbnail-image',
            array(
                'label'      => __( 'Fourth Project Image', 'theme_name' ),
                'section'    => 'project-fourth-thumbnail-section',
                'settings'   => 'project-fourth-thumbnail-image'
            )
        )
    );

}

function themename_fifth_project_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('project-fifth-thumbnail-section', array(
        'title' => 'Fifth Project Thumbnail',
    ));

    $wp_customize->add_setting('project-fifth-thumbnail-headline', array(
        'default' => 'Project',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-fifth-thumbnail-headline-control', array(
        'label' => 'Fifth Project Thumbnail Headline',
        'section' => 'project-fifth-thumbnail-section',
        'settings' => 'project-fifth-thumbnail-headline',
    )));

    $wp_customize->add_setting('project-fifth-thumbnail-type', array(
        'default' => 'Digital',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-fifth-thumbnail-type-control', array(
        'label' => 'Fifth Project Thumbnail Type',
        'section' => 'project-fifth-thumbnail-section',
        'settings' => 'project-fifth-thumbnail-type',
    )));

    $wp_customize->add_setting('project-fifth-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-fifth-thumbnail-link-control', array(
        'label' => 'Fifth Project Thumbnail Link',
        'section' => 'project-fifth-thumbnail-section',
        'settings' => 'project-fifth-thumbnail-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('project-fifth-thumbnail-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project-fifth-thumbnail-image',
            array(
                'label'      => __( 'Fifth Project Image', 'theme_name' ),
                'section'    => 'project-fifth-thumbnail-section',
                'settings'   => 'project-fifth-thumbnail-image'
            )
        )
    );

}

function themename_sixth_project_thumbnails_setup($wp_customize)

{
    $wp_customize->add_section('project-sixth-thumbnail-section', array(
        'title' => 'Sixth Project Thumbnail',
    ));

    $wp_customize->add_setting('project-sixth-thumbnail-headline', array(
        'default' => 'Project',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-sixth-thumbnail-headline-control', array(
        'label' => 'Sixth Project Thumbnail Headline',
        'section' => 'project-sixth-thumbnail-section',
        'settings' => 'project-sixth-thumbnail-headline',
    )));

    $wp_customize->add_setting('project-sixth-thumbnail-type', array(
        'default' => 'Digital',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-sixth-thumbnail-type-control', array(
        'label' => 'Sixth Project Thumbnail Type',
        'section' => 'project-sixth-thumbnail-section',
        'settings' => 'project-sixth-thumbnail-type',
    )));

    $wp_customize->add_setting('project-sixth-thumbnail-link');

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'project-sixth-thumbnail-link-control', array(
        'label' => 'Sixth Project Thumbnail Link',
        'section' => 'project-sixth-thumbnail-section',
        'settings' => 'project-sixth-thumbnail-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('project-sixth-thumbnail-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project-sixth-thumbnail-image',
            array(
                'label'      => __( 'Sixth Project Image', 'theme_name' ),
                'section'    => 'project-sixth-thumbnail-section',
                'settings'   => 'project-sixth-thumbnail-image'
            )
        )
    );
}
//Projects Customizer End

//About Slider Customizer Start
function themename_first_about_slider_setup($wp_customize)

{
    $wp_customize->add_section('about-first-slider-section', array(
        'title' => 'About - First Slide',
    ));

    $wp_customize->add_setting('about-first-slider-headline', array(
        'default' => 'Test',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-first-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-first-slider-section',
        'settings' => 'about-first-slider-headline',
    )));

    $wp_customize->add_setting('about-first-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-first-slider-paragraph-one-textarea', array(
        'label' => 'First Paragraph',
        'type' => 'textarea',
        'section' => 'about-first-slider-section',
        'settings' => 'about-first-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-first-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-first-slider-paragraph-two-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-first-slider-section',
        'settings' => 'about-first-slider-paragraph-two-textarea',
    )));


}

function themename_second_about_slider_setup($wp_customize)

{
    $wp_customize->add_section('about-second-slider-section', array(
        'title' => 'About - Second Slide',
    ));

    $wp_customize->add_setting('about-second-slider-headline', array(
        'default' => 'Test',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-second-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-second-slider-section',
        'settings' => 'about-second-slider-headline',
    )));

    $wp_customize->add_setting('about-second-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-second-slider-paragraph-one-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-second-slider-section',
        'settings' => 'about-second-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-second-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-second-slider-paragraph-two-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-second-slider-section',
        'settings' => 'about-second-slider-paragraph-two-textarea',
    )));
}

function themename_third_about_slider_setup($wp_customize)

{
    $wp_customize->add_section('about-third-slider-section', array(
        'title' => 'About - Third Slide',
    ));

    $wp_customize->add_setting('about-third-slider-headline', array(
        'default' => 'Test',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-third-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-third-slider-section',
        'settings' => 'about-third-slider-headline',
    )));

    $wp_customize->add_setting('about-third-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-third-slider-paragraph-one-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-third-slider-section',
        'settings' => 'about-third-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-third-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-third-slider-paragraph-two-textarea', array(
        'label' => 'third Paragraph',
        'type' => 'textarea',
        'section' => 'about-third-slider-section',
        'settings' => 'about-third-slider-paragraph-two-textarea',
    )));
}

function themename_fourth_about_slider_setup($wp_customize)

{
    $wp_customize->add_section('about-fourth-slider-section', array(
        'title' => 'About - Fourth Slide',
    ));

    $wp_customize->add_setting('about-fourth-slider-headline', array(
        'default' => 'Test',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-fourth-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-fourth-slider-section',
        'settings' => 'about-fourth-slider-headline',
    )));

    $wp_customize->add_setting('about-fourth-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-fourth-slider-paragraph-one-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-fourth-slider-section',
        'settings' => 'about-fourth-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-fourth-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control( new Wp_Customize_Control($wp_customize, 'about-fourth-slider-paragraph-two-textarea', array(
        'label' => 'fourth Paragraph',
        'type' => 'textarea',
        'section' => 'about-fourth-slider-section',
        'settings' => 'about-fourth-slider-paragraph-two-textarea',
    )));
}
//Slider Customizer End


//Widgets Locations Start

function ourWidgetsInit() 

{

    register_sidebar( array(
        'name' => 'Clients Widgets Area',
        'id'   => 'clients_bar',
        'before_widget' => '<div class="column"><div class="c-card widget-area"><a>',
        'after_widget' => '</a></div></div>'
    ));

}


add_action('widgets_init', 'ourWidgetsInit');

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
add_action('customize_register', 'themename_second_project_thumbnails_setup');
add_action('customize_register', 'themename_third_project_thumbnails_setup');
add_action('customize_register', 'themename_fourth_project_thumbnails_setup');
add_action('customize_register', 'themename_fifth_project_thumbnails_setup');
add_action('customize_register', 'themename_sixth_project_thumbnails_setup');

add_action('customize_register', 'themename_first_about_slider_setup');
add_action('customize_register', 'themename_second_about_slider_setup');
add_action('customize_register', 'themename_third_about_slider_setup');
add_action('customize_register', 'themename_fourth_about_slider_setup');



