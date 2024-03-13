<?php
function casey_theme_support()
{
    // Add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'casey_theme_support');

// Add dynamic menus 
function casey_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'casey_menus');

header('Access-Control-Allow-Origin: *');

function casey_register_styles()
{
    $version = wp_get_theme()->get('Version');
    $ver = date("Y-m-d") + time();
    wp_enqueue_style('tailwind', get_template_directory_uri() . "/src/output.css", $version, $ver);
    wp_enqueue_style('casey-style', get_template_directory_uri() . "/style.css", $version, $ver);
    wp_enqueue_style('casey-header', get_template_directory_uri() . "/assets/css/header.css", $version, $ver);
    wp_enqueue_style('casey-footer', get_template_directory_uri() . "/assets/css/footer.css", $version, $ver);
    wp_enqueue_style('casey-archive', get_template_directory_uri() . "/assets/css/archive.css", $version, 'all');
    wp_enqueue_style('casey-article', get_template_directory_uri() . "/assets/css/article.css", $version, 'all');
    wp_enqueue_style('casey-single-article', get_template_directory_uri() . "/assets/css/single-post.css", $version, 'all');
    wp_enqueue_style('casey-front-page', get_template_directory_uri() . "/assets/css/front-page.css", $version, 'all');
    wp_enqueue_style('casey-page-full', get_template_directory_uri() . "/assets/css/page-full.css", $version, 'all');
    wp_enqueue_style('casey-page', get_template_directory_uri() . "/assets/css/page.css", $version, 'all');
    wp_enqueue_style('casey-sidebar-promo', get_template_directory_uri() . "/assets/css/sidebar-promo.css", $version, 'all');
    wp_enqueue_style('casey-sidebar-right', get_template_directory_uri() . "/assets/css/sidebar-right.css", $version, 'all');
    wp_enqueue_style('casey-sidebar-footer', get_template_directory_uri() . "/assets/css/sidebar-footer.css", $version, 'all');
    wp_enqueue_style('casey-tags', get_template_directory_uri() . "/assets/css/tags.css", $version, 'all');
    wp_enqueue_style('casey-theme', get_template_directory_uri() . "/assets/css/theme.css", $version, 'all');
}

add_action('wp_enqueue_scripts', 'casey_register_styles');

function casey_register_scripts()
{
    wp_enqueue_script('casey-main', get_template_directory_uri() . "/assets/js/main.js", array(), '5', true);
    wp_enqueue_script('casey-toggleTheme', get_template_directory_uri() . "/assets/js/toggleTheme.js", array(), '5', true);
}

add_action('wp_enqueue_scripts', 'casey_register_scripts');

function casey_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="homepage-image">',
            'after_widget' => '</div>',
            'name' => 'Homepage Image Widget',
            'id' => 'homepage-image-widget',
            'description' => 'Homepage Image Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Homepage Widget',
            'id' => 'homepage-widget',
            'description' => 'Homepage Widget Area'
        )
    );

    // register_sidebar(
    //     array(
    //         'before_title' => '',
    //         'after_title' => '',
    //         'before_widget' => '<div class="homepage-image">',
    //         'after_widget' => '</div>',
    //         'name' => 'Single Page Image Widget',
    //         'id' => 'single-page-image-widget',
    //         'description' => 'Single Page Image Widget Area'
    //     )
    // );

    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="sidebar--widget sidebar--bio">',
            'after_widget' => '</div>',
            'name' => 'Right Sidebar Bio Area',
            'id' => 'sidebar-right',
            'description' => 'Right Sidebar Widget Bio Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="sidebar--widget">',
            'after_widget' => '</div>',
            'name' => 'Right Sidebar Promo Area',
            'id' => 'sidebar-promo-area',
            'description' => 'Right Sidebar Promo Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<div class="sidebar--footer--widget">',
            'after_widget' => '</div>',
            'name' => 'Footer Sidebar Area',
            'id' => 'sidebar-footer',
            'description' => 'Sidebar Footer Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'name' => 'Footer Widget Area',
            'id' => 'footer-widget-area',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'casey_widget_areas');
?>

<?php
// Limit excerpt word count
function casey_excerpt_length($length)
{
    return 19;
}
add_filter('excerpt_length', 'casey_excerpt_length', 999);
?>

<?php
function add_cors_http_header()
{
    header("Access-Control-Allow-Origin: *");
}

add_action('init', 'add_cors_http_header');
?>

<?php
add_filter('jpeg_quality', function ($arg) {
    return 100;
});
add_filter('jpg_quality', function ($arg) {
    return 100;
});
add_filter('png_quality', function ($arg) {
    return 100;
});

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
?>

<?php

define('WP_AUTO_UPDATE_CORE', false);
add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');

?>



<?php
function get_breadcrumb()
{

    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';

    if (is_category() || is_single()) {
        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="breadcrumb-divider flex-shrink-0 h-5 w-5 text-gray-400 pt-1"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
        the_category(' &#187; ');

        if (is_single()) {
            echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="breadcrumb-divider flex-shrink-0 h-5 w-5 text-gray-400 pt-1"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            the_title();
        }
    } elseif (is_page()) {
        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="breadcrumb-divider flex-shrink-0 h-5 w-5 text-gray-400 pt-1"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
        echo the_title();
    } elseif (is_search()) {
        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="breadcrumb-divider flex-shrink-0 h-5 w-5 text-gray-400 pt-1"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

?>

<?php
// Add this code to your theme's functions.php file or a custom plugin.
add_filter('unzip_file_use_ziparchive', '__return_false');
?>