<?php
/**
 * Amira Clinic Theme Functions
 */

// ============================================
// Theme Setup
// ============================================
function amira_setup() {
    // Site title in document head
    add_theme_support('title-tag');

    // Featured images
    add_theme_support('post-thumbnails');

    // Custom logo
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'القائمة الرئيسية',
        'footer'  => 'قائمة الفوتر',
    ));
}
add_action('after_setup_theme', 'amira_setup');

// ============================================
// Enqueue Styles & Scripts
// ============================================
function amira_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'amira-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Noto+Serif+Arabic:wght@400;700&display=swap',
        array(),
        null
    );

    // Material Symbols (thin professional icons)
    wp_enqueue_style(
        'material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0',
        array(),
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'amira-style',
        get_stylesheet_uri(),
        array('amira-fonts'),
        wp_get_theme()->get('Version')
    );

    // Theme script
    wp_enqueue_script(
        'amira-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'amira_scripts');

// ============================================
// Custom Widgets
// ============================================
function amira_widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer-widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'amira_widgets_init');
