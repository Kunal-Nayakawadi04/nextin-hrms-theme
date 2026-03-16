<?php
/**
 * NextIn HRMS Theme – functions.php
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* --------------------------------------------------
   1. THEME SETUP
-------------------------------------------------- */
function nextin_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'nextin-hrms' ),
    ) );
}
add_action( 'after_setup_theme', 'nextin_theme_setup' );

/* --------------------------------------------------
   2. ENQUEUE STYLES & SCRIPTS
-------------------------------------------------- */
function nextin_enqueue_assets() {

    // Google Fonts – Inter
    wp_enqueue_style(
        'nextin-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Main stylesheet (style.css)
    wp_enqueue_style(
        'nextin-style',
        get_stylesheet_uri(),
        array( 'nextin-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'nextin_enqueue_assets' );

/* --------------------------------------------------
   3. CUSTOM TITLE TAG (fallback)
-------------------------------------------------- */
function nextin_wp_title( $title ) {
    if ( is_home() || is_front_page() ) {
        return 'NextIn HRMS – World\'s Simplest HR Software';
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'nextin_wp_title' );
