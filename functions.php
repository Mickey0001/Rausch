<?php

if (!function_exists('add_script_style')) {
    function add_script_style()
    {

        /* Register & Enqueue Styles. */
        wp_register_style('semantic.min.css', get_template_directory_uri() . '/assets/core/semantic.min.css');
        wp_enqueue_style('semantic.min.css');

        wp_register_style('style.css', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('style.css');

        wp_register_style('slick.css', get_template_directory_uri() . '/assets/css/slick.css');
        wp_enqueue_style('slick.css');

        wp_register_style('slick-theme.css', get_template_directory_uri() . '/assets/css/slick-theme.css');
        wp_enqueue_style('slick-theme.css');

        /* Register & Enqueue scripts. */
        wp_register_script('jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js');
        wp_enqueue_script('jquery.min.js');

        wp_register_script('main.js', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('main.js');

        wp_register_script('slick.min.js', get_template_directory_uri() . '/assets/js/slick.min.js');
        wp_enqueue_script('slick.min.js');

        wp_register_script('semantic.min.js', get_template_directory_uri() . '/assets/core/semantic.min.js');
        wp_enqueue_script('semantic.min.js');

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
                'label' => __('Home Hero Image', 'theme_name'),
                'section' => 'home-hero-heading-section',
                'settings' => 'home-hero-heading-image',
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
                'label' => __('Client Hero Image', 'theme_name'),
                'section' => 'client-hero-heading-section',
                'settings' => 'client-hero-heading-image',
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

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-first-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-first-slider-section',
        'settings' => 'about-first-slider-headline',
    )));

    $wp_customize->add_setting('about-first-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-first-slider-paragraph-one-textarea', array(
        'label' => 'First Paragraph',
        'type' => 'textarea',
        'section' => 'about-first-slider-section',
        'settings' => 'about-first-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-first-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-first-slider-paragraph-two-textarea', array(
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

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-second-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-second-slider-section',
        'settings' => 'about-second-slider-headline',
    )));

    $wp_customize->add_setting('about-second-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-second-slider-paragraph-one-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-second-slider-section',
        'settings' => 'about-second-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-second-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-second-slider-paragraph-two-textarea', array(
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

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-third-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-third-slider-section',
        'settings' => 'about-third-slider-headline',
    )));

    $wp_customize->add_setting('about-third-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-third-slider-paragraph-one-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-third-slider-section',
        'settings' => 'about-third-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-third-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-third-slider-paragraph-two-textarea', array(
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

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-fourth-slider-headline-control', array(
        'label' => 'Slider Headline',
        'section' => 'about-fourth-slider-section',
        'settings' => 'about-fourth-slider-headline',
    )));

    $wp_customize->add_setting('about-fourth-slider-paragraph-one-textarea', array(
        'default' => 'First Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-fourth-slider-paragraph-one-textarea', array(
        'label' => 'Second Paragraph',
        'type' => 'textarea',
        'section' => 'about-fourth-slider-section',
        'settings' => 'about-fourth-slider-paragraph-one-textarea',
    )));

    $wp_customize->add_setting('about-fourth-slider-paragraph-two-textarea', array(
        'default' => 'Second Paragraph',
    ));

    $wp_customize->add_control(new Wp_Customize_Control($wp_customize, 'about-fourth-slider-paragraph-two-textarea', array(
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

    register_sidebar(array(
        'name' => 'Clients Widgets Area',
        'id' => 'clients_bar',
        'before_widget' => '<div class="column"><div class="c-card">',
        'after_widget' => '</div></div>',
    ));

}

add_action('widgets_init', 'clientWidgetsInit');
//Client Widget End

//Work Widget Start
function workWidgetsInit()
{

    register_sidebar(array(
        'name' => 'Work Widgets Area',
        'id' => 'work_bar',
        'before_widget' => '<div class="work-column">',
        'after_widget' => '</div>',
    ));

}

add_action('widgets_init', 'workWidgetsInit');
//Work Widget End

//Project Widget Start
function projectWidgetsInit()
{

    register_sidebar(array(
        'name' => 'Project Widgets Area',
        'id' => 'project_bar',
        'before_widget' => '<div class="sections"> <div class="devices">',
        'after_widget' => '</div></div>',
    ));

}

add_action('widgets_init', 'projectWidgetsInit');
//Project Widget End

add_action('wp_enqueue_scripts', 'add_script_style', 10);

add_action('customize_register', 'themename_first_about_slider_setup');
add_action('customize_register', 'themename_second_about_slider_setup');
add_action('customize_register', 'themename_third_about_slider_setup');
add_action('customize_register', 'themename_fourth_about_slider_setup');

// Work Post type Data
add_action('after_setup_theme', 'cyb_add_image_sizes');
function cyb_add_image_sizes()
{
    add_theme_support('post-thumbnails', array('work_folio'));
    add_image_size('work_odd', 600, 375, true);
    add_image_size('work_even', 600, 331.5, true);

}

// Register post type
if (!function_exists('codeian_work_type')) {

// Register Custom Post Type
    function codeian_work_type()
    {

        $labels = array(
            'name' => _x('Work Portfolio', 'Post Type General Name', 'rausch_portfolio'),
            'singular_name' => _x('Work Portfolio', 'Post Type Singular Name', 'rausch_portfolio'),
            'menu_name' => __('Work Portfolio', 'rausch_portfolio'),
            'name_admin_bar' => __('Work Portfolio', 'rausch_portfolio'),
            'archives' => __('WorkArchives', 'rausch_portfolio'),
            'attributes' => __('Work Attributes', 'rausch_portfolio'),
            'parent_item_colon' => __('Parent Work:', 'rausch_portfolio'),
            'all_items' => __('All Works', 'rausch_portfolio'),
            'add_new_item' => __('Add New Work', 'rausch_portfolio'),
            'add_new' => __('Add New', 'rausch_portfolio'),
            'new_item' => __('New Work', 'rausch_portfolio'),
            'edit_item' => __('Edit Work', 'rausch_portfolio'),
            'update_item' => __('Update Work', 'rausch_portfolio'),
            'view_item' => __('View Work', 'rausch_portfolio'),
            'view_items' => __('View Works', 'rausch_portfolio'),
            'search_items' => __('Search Work', 'rausch_portfolio'),
            'not_found' => __('Not found', 'rausch_portfolio'),
            'not_found_in_trash' => __('Not found in Trash', 'rausch_portfolio'),
            'featured_image' => __('Featured Image', 'rausch_portfolio'),
            'set_featured_image' => __('Set featured image', 'rausch_portfolio'),
            'remove_featured_image' => __('Remove featured image', 'rausch_portfolio'),
            'use_featured_image' => __('Use as featured image', 'rausch_portfolio'),
            'insert_into_item' => __('Insert into Work', 'rausch_portfolio'),
            'uploaded_to_this_item' => __('Uploaded to this Work', 'rausch_portfolio'),
            'items_list' => __('Works list', 'rausch_portfolio'),
            'items_list_navigation' => __('Works list navigation', 'rausch_portfolio'),
            'filter_items_list' => __('Filter Works list', 'rausch_portfolio'),
        );
        $args = array(
            'label' => __('Work Portfolio', 'rausch_portfolio'),
            'labels' => $labels,
            'supports' => array('title', 'thumbnail'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-megaphone',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );
        register_post_type('work_folio', $args);

    }
    add_action('init', 'codeian_work_type', 0);

}

// if ( ! function_exists( 'work_folio_tax' ) ) {

// // Register Custom Taxonomy
// function work_folio_tax() {

//     $labels = array(
//         'name'                       => _x( 'Categories', 'Taxonomy General Name', 'rausch_portfolio' ),
//         'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'rausch_portfolio' ),
//         'menu_name'                  => __( 'Category', 'rausch_portfolio' ),
//         'all_items'                  => __( 'All Items', 'rausch_portfolio' ),
//         'parent_item'                => __( 'Parent Item', 'rausch_portfolio' ),
//         'parent_item_colon'          => __( 'Parent Item:', 'rausch_portfolio' ),
//         'new_item_name'              => __( 'New Item Name', 'rausch_portfolio' ),
//         'add_new_item'               => __( 'Add New Item', 'rausch_portfolio' ),
//         'edit_item'                  => __( 'Edit Item', 'rausch_portfolio' ),
//         'update_item'                => __( 'Update Item', 'rausch_portfolio' ),
//         'view_item'                  => __( 'View Item', 'rausch_portfolio' ),
//         'separate_items_with_commas' => __( 'Separate items with commas', 'rausch_portfolio' ),
//         'add_or_remove_items'        => __( 'Add or remove items', 'rausch_portfolio' ),
//         'choose_from_most_used'      => __( 'Choose from the most used', 'rausch_portfolio' ),
//         'popular_items'              => __( 'Popular Items', 'rausch_portfolio' ),
//         'search_items'               => __( 'Search Items', 'rausch_portfolio' ),
//         'not_found'                  => __( 'Not Found', 'rausch_portfolio' ),
//         'no_terms'                   => __( 'No items', 'rausch_portfolio' ),
//         'items_list'                 => __( 'Items list', 'rausch_portfolio' ),
//         'items_list_navigation'      => __( 'Items list navigation', 'rausch_portfolio' ),
//     );
//     $args = array(
//         'labels'                     => $labels,
//         'hierarchical'               => false,
//         'public'                     => true,
//         'show_ui'                    => true,
//         'show_admin_column'          => true,
//         'show_in_nav_menus'          => true,
//         'show_tagcloud'              => true,
//     );
//     register_taxonomy( 'work_folio_tax', array( 'work_folio' ), $args );

// }
// add_action( 'init', 'work_folio_tax', 0 );

// }

add_action('do_meta_boxes', 'work_folio_image_box');

function work_folio_image_box()
{

    remove_meta_box('postimagediv', 'work_folio', 'side');

    add_meta_box('postimagediv', __('Work Feature Image'), 'post_thumbnail_meta_box', 'work_folio', 'normal', 'high');

}

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function work_details_get_meta($value)
{
    global $post;

    $field = get_post_meta($post->ID, $value, true);
    if (!empty($field)) {
        return is_array($field) ? stripslashes_deep($field) : stripslashes(wp_kses_decode_entities($field));
    } else {
        return false;
    }
}

function work_details_add_meta_box()
{
    add_meta_box(
        'work_details-work-details',
        __('Work Details', 'work_details'),
        'work_details_html',
        'work_folio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'work_details_add_meta_box');

function work_details_html($post)
{
    wp_nonce_field('_work_details_nonce', 'work_details_nonce');?>

	<p>
		<label for="work_details_type_category"><?php _e('Type / Category', 'work_details');?></label><br>
		<input type="text" class="regular-text code" name="work_details_type_category" id="work_details_type_category" value="<?php echo work_details_get_meta('work_details_type_category'); ?>">
	</p>	<p>
		<label for="work_details_link"><?php _e('Link', 'work_details');?></label><br>
		<input type="text" class="regular-text code" name="work_details_link" id="work_details_link" value="<?php echo work_details_get_meta('work_details_link'); ?>">
	</p><?php
}

function work_details_save($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!isset($_POST['work_details_nonce']) || !wp_verify_nonce($_POST['work_details_nonce'], '_work_details_nonce')) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['work_details_type_category'])) {
        update_post_meta($post_id, 'work_details_type_category', esc_attr($_POST['work_details_type_category']));
    }

    if (isset($_POST['work_details_link'])) {
        update_post_meta($post_id, 'work_details_link', esc_attr($_POST['work_details_link']));
    }

}
add_action('save_post', 'work_details_save');

/*
Usage: work_details_get_meta( 'work_details_type_category' )
Usage: work_details_get_meta( 'work_details_link' )
 */