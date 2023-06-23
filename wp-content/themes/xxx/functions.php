<?php
// Constants
define('THEME_URI', get_stylesheet_directory_uri());

// Setup theme
if (!function_exists('setup_theme')) {
    function setup_theme()
    {
        foreach (glob(dirname(__FILE__) . '/inc/*.php') as $file) {
            include $file;
        }
    }

    add_action('init', 'setup_theme');
}

// After setup theme
if (!function_exists('after_setup_theme')) {
    function after_setup_theme()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('menus');
        add_theme_support('admin-bar', array('callback' => '__return_false'));

        register_nav_menu('primary', 'Header Menu');
    }

    add_action('after_setup_theme', 'after_setup_theme');
}

// Embed CSS
if (!function_exists('styles')) {
    function styles()
    {
        // wp_enqueue_style('tailwind', THEME_URI . '/resources/css/theme.css');
        wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/css/tailwind.prod.css', array(), filemtime(get_template_directory() . '/css/tailwind.prod.css'), 'all');
        wp_enqueue_style('main-style', THEME_URI . '/css/css-all.min.css');
    }

    add_action('wp_enqueue_scripts', 'styles');
}

// Embed JS
if (!function_exists('scripts')) {
    function scripts()
    {
        wp_enqueue_script('main-script', THEME_URI . '/js/main.js', array(), false, true);
    }

    add_action('wp_enqueue_scripts', 'scripts');
}

function enqueue_slick_scripts()
{
    // Enqueue Slick styles
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    // Enqueue Slick script and its dependency (jQuery)
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'enqueue_slick_scripts');
