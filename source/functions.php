<?php
// Theme setup
function vibe_wave_retro_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    
    // Enable support for HTML5 markup
    add_theme_support('html5', array(
        'search-form', 
        'comment-form', 
        'comment-list', 
        'gallery', 
        'caption'
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vibe-wave-retro'),
        'footer'  => __('Footer Menu', 'vibe-wave-retro'),
    ));
}
add_action('after_setup_theme', 'vibe_wave_retro_setup');

// Register sidebar
function vibe_wave_retro_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'vibe-wave-retro'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'vibe-wave-retro'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'vibe_wave_retro_widgets_init');

// Enqueue scripts and styles
function vibe_wave_retro_scripts() {
    wp_enqueue_style('vibe-wave-retro-style', get_stylesheet_uri());
    wp_enqueue_script('vibe-wave-retro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'vibe_wave_retro_scripts');
