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

    $wp_customize->add_setting('home-hero-heading-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'home-hero-heading-image',
            array(
                'label'      => __( 'Home Hero Image', 'theme_name' ),
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


    $wp_customize->add_setting('client-hero-heading-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'client-hero-heading-image',
            array(
                'label'      => __( 'Client Hero Image', 'theme_name' ),
                'section'    => 'client-hero-heading-section',
                'settings'   => 'client-hero-heading-image'
            )
        )
    );
}

add_action('customize_register', 'themename_hero_client_headings_setup');
//Client page hero image header end


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


//Client Widget Start
function clientWidgetsInit() 

{

    register_sidebar( array(
        'name' => 'Clients Widgets Area',
        'id'   => 'clients_bar',
        'before_widget' => '<div class="column"><div class="c-card">',
        'after_widget' => '</div></div>'
    ));

}

add_action('widgets_init', 'clientWidgetsInit');
//Client Widget End

//Work Widget Start
function workWidgetsInit() 

{

    register_sidebar( array(
        'name' => 'Work Widgets Area',
        'id'   => 'work_bar',
        'before_widget' => '<div class="work-column">',
        'after_widget' => '</div>'
    ));

}

add_action('widgets_init', 'workWidgetsInit');
//Work Widget End


//Project Widget Start
function projectWidgetsInit() 

{

    register_sidebar( array(
        'name' => 'Project Widgets Area',
        'id'   => 'project_bar',
        'before_widget' => '<div class="sections"> <div class="devices">',
        'after_widget' => '</div></div>'
    ));

}

add_action('widgets_init', 'projectWidgetsInit');
//Project Widget End

add_action( 'wp_enqueue_scripts', 'add_script_style', 10 );    

add_action('customize_register', 'themename_first_about_slider_setup');
add_action('customize_register', 'themename_second_about_slider_setup');
add_action('customize_register', 'themename_third_about_slider_setup');
add_action('customize_register', 'themename_fourth_about_slider_setup');


