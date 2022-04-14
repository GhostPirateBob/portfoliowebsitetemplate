<?php

if (!isset($content_width)) {
    $content_width = 1920;
}

if (!function_exists('portfolio_website_template_setup')) {

    function portfolio_website_template_setup()
    {
        register_nav_menus(
            array(
                'main-nav' => 'Main Navigation',
                'footer-nav' => 'Footer Navigation',
            )
        );

        add_theme_support('widget-customizer');

        add_theme_support('custom-logo', array('height' => 100, 'width' => 235,  'unlink-homepage-logo' => true,  'header-text' => array('site-title', 'site-description')));

        add_theme_support('title-tag');

        add_theme_support('html5', ['script', 'style', 'comment-form', 'search-form', 'gallery', 'caption']);

        add_theme_support('menus');
    }
}
add_action('after_setup_theme', 'portfolio_website_template_setup');

function portfolio_website_template_scripts()
{

    //foundation 6 for sites and icons
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', '', '', false);

    wp_enqueue_script('foundation-js', get_template_directory_uri() . '/js/vendor/foundation.min.js', array('jquery'), '', true);

    wp_enqueue_style('foundation-css', get_template_directory_uri() . '/assets/css/foundation.min.css');

    wp_enqueue_style('icons', get_template_directory_uri() . '/assets/css/icons/foundation-icons.css');

    wp_enqueue_script('what-input', get_template_directory_uri() . '/js/vendor/what-input.js', array('jquery'), '', true);

    wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);

    //AJAX
    wp_enqueue_script('jquery-form', '', array('jquery'), '', true);

    //theme styles
    if (is_front_page()) {
        wp_enqueue_style('home-css', get_template_directory_uri() . '/assets/css/home.css');
    } else if (is_page('about')) {
        wp_enqueue_style('about-css', get_template_directory_uri() . '/assets/css/about.css');
    } else if (is_page('contact')) {
        wp_enqueue_style('contact-css', get_template_directory_uri() . '/assets/css/contact.css');
        /*
        wp_enqueue_script('form-js', get_template_directory_uri() . '/js/form.js', array('jquery'), '', true);
        wp_localize_script(
            'form-js',
            'frontend_ajax_object',
            array(
                'ajaxurl' => admin_url('admin-ajax.php'),
            )
        );
        */
    } else if (is_page('gallery')) {
        wp_enqueue_style('gallery-css', get_template_directory_uri() . '/assets/css/gallery.css');
    } else if (is_search()) {
        wp_enqueue_style('search-css', get_template_directory_uri() . '/assets/css/search.css');
    } else if (is_404()) {
        wp_enqueue_style('notfound-css', get_template_directory_uri() . '/assets/css/notfound.css');
    }
}
add_action('wp_enqueue_scripts', 'portfolio_website_template_scripts');

function portfolio_website_template_custom_sidebars()
{
    register_sidebar(
        array(
            'name' => 'widget one',
            'id' => 'widget_one',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<span class="widgettitle">',
            'after_title'   => '</span>',
        )
    );
}
add_action('widgets_init', 'portfolio_website_template_custom_sidebars');

/*
add_filter('pre_option_upload_path', function ($upload_path) {
    return  get_template_directory() . '/files';
});

add_filter('pre_option_upload_url_path', function ($upload_url_path) {
    return get_template_directory_uri() . '/files';
});

add_filter( 'option_uploads_use_yearmonth_folders', '__return_false', 100 );

function portfolio_website_template_remove_admin_menus() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'portfolio_website_template_remove_admin_menus' );

function portfolio_website_template_enable_vcard_upload($mime_types)
{
    $mime_types['vcf'] = 'text/vcard';
    $mime_types['vcard'] = 'text/vcard';
    return $mime_types;
}
add_filter('upload_mimes', 'portfolio_website_template_enable_vcard_upload');

function portfolio_website_template_submit_form_1()
{

    require_once(get_template_directory() . '/inc/form-1.php');

    exit();
}
add_action('wp_ajax_submit_form_1', "portfolio_website_template_submit_form_1");
add_action('wp_ajax_nopriv_submit_form_1', 'portfolio_website_template_submit_form_1');



function portfolio_website_template_register_cptui()
{

    $labels = [
        "name" => __("storyboarding_films", "custom-post-type-ui"),
        "singular_name" => __("storyboarding_film", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("storyboarding_films", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "storyboarding_films", "with_front" => true],
        "query_var" => true,
        "supports" => ["title"],
        "show_in_graphql" => false,
    ];

    register_post_type("storyboarding_films", $args);

}
add_action('init', 'portfolio_website_template_register_cptui');
*/

function portfolio_website_template_on_theme_activation()
{
    function portfolio_website_template_post_meta($id, $key, $val)
    {
        add_post_meta($id, $key, $val, true);
    }

    if (!get_option('page_on_front')) {
        $page = array(
            'import_id'      =>  254,
            'post_title'     => 'Home',
            'post_type'      => 'page',
            'post_name'      => 'Home',
            'post_status'    => 'publish',
        );
        $id = wp_insert_post($page);
        update_option('page_on_front', $id);
        update_option('show_on_front', 'page');
        //portfolio_website_template_post_meta($id, 'heading', 'Portfolio website');
        //portfolio_website_template_post_meta($id, '_heading', 'heading'); 
    }

    if (!get_page_template_slug(256)) {
        $page = array(
            'import_id'         =>  256,
            'post_title'     => 'About',
            'post_type'      => 'page',
            'post_name'      => 'About',
            'post_status'    => 'publish',
            'page_template' => 'page-about.php',
        );
        $id = wp_insert_post($page);
        //portfolio_website_template_post_meta($id, 'heading', 'Biography');
        //portfolio_website_template_post_meta($id, '_heading', 'heading');
    }

    if (!get_page_template_slug(257)) {
        $page = array(
            'import_id'         =>  257,
            'post_title'     => 'Contact',
            'post_type'      => 'page',
            'post_name'      => 'Contact',
            'post_status'    => 'publish',
            'page_template' => 'page-contact.php',
        );
        $id = wp_insert_post($page);
        //portfolio_website_template_post_meta($id, 'heading', 'Get in touch');
        //portfolio_website_template_post_meta($id, '_heading', 'heading');
    }

    if (!get_page_template_slug(258)) {
        $page = array(
            'import_id'         =>  258,
            'post_title'     => 'Gallery',
            'post_type'      => 'page',
            'post_name'      => 'Gallery',
            'post_status'    => 'publish',
            'page_template' => 'page-gallery.php',
        );
        $id = wp_insert_post($page);
        //portfolio_website_template_post_meta($id, 'heading', 'Portfolio of work');
        //portfolio_website_template_post_meta($id, '_heading', 'heading');
    }
}
add_action('after_switch_theme', 'portfolio_website_template_on_theme_activation');
