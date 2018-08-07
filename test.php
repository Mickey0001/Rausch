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