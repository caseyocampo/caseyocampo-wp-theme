<?php

function minimal_theme_support()
{
    // Add dynamic title tag support
    
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'minimal_theme_support');

// Add dynamic menus 

function minimal_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'minimal_menus');

header('Access-Control-Allow-Origin: *');

function minimal_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('minimal-style', get_template_directory_uri()."/style.css", $version, 'all');
    wp_enqueue_style('minimal-archive', get_template_directory_uri()."/assets/css/archive.css", $version, 'all');
    wp_enqueue_style('minimal-article', get_template_directory_uri()."/assets/css/article.css", $version, 'all');
    wp_enqueue_style('minimal-front-page', get_template_directory_uri()."/assets/css/front-page.css", $version, 'all');
    wp_enqueue_style('minimal-page-full', get_template_directory_uri()."/assets/css/page-full.css", $version, 'all');
    wp_enqueue_style('minimal-page', get_template_directory_uri()."/assets/css/page.css", $version, 'all');
    wp_enqueue_style('minimal-promo-sidebar', get_template_directory_uri()."/assets/css/promo-sidebar.css", $version, 'all');
    wp_enqueue_style('minimal-right-sidebar', get_template_directory_uri()."/assets/css/right-sidebar.css", $version, 'all');
    wp_enqueue_style('minimal-tags', get_template_directory_uri()."/assets/css/tags.css", $version, 'all');
    wp_enqueue_style('minimal-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'minimal_register_styles');

function minimal_register_scripts()
{
    wp_enqueue_script('minimal-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1', true);
    wp_enqueue_script('minimal-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
    wp_enqueue_script('minimal-font-awesome', 'https://kit.fontawesome.com/2641fe0f3e.js', array(), '5.0', true);
}

add_action('wp_enqueue_scripts', 'minimal_register_scripts');

function minimal_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="sidebar-widget sidebar-bio">',
            'after_widget' => '</div>',
            'name' => 'Right Sidebar Bio Area',
            'id' => 'sidebar-bio-area',
            'description' => 'Right Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="sidebar-widget">',
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
            'before_widget' => '<div class="sidebar-2-widget">',
            'after_widget' => '</div>',
            'name' => 'Bottom Sidebar Area',
            'id' => 'sidebar-2',
            'description' => 'Bottom Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'minimal_widget_areas');
?>
<?php
    // Limit excerpt word count
    
    function minimal_excerpt_length( $length ) {
        return 19;
    }
    add_filter( 'excerpt_length', 'minimal_excerpt_length', 999 );
?>
<?php
	function add_cors_http_header(){
    	header("Access-Control-Allow-Origin: *");
	}

	add_action('init','add_cors_http_header');
?>
<?php
	add_filter('jpeg_quality', function($arg){return 100;});
	add_filter('jpg_quality', function($arg){return 100;});
	add_filter('png_quality', function($arg){return 100;});
?>