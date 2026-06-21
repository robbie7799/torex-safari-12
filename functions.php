<?php
/**
 * TOREX SAFARI Theme Functions
 *
 * @package TOREX_SAFARI
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'TOREX_VERSION', '1.0.0' );
define( 'TOREX_DIR', get_template_directory() );
define( 'TOREX_URI', get_template_directory_uri() );

/* ========== Theme Setup ========== */
function torex_setup() {
    // Title tag support
    add_theme_support( 'title-tag' );
    
    // Post thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'torex-destination', 600, 400, true );
    add_image_size( 'torex-hero', 1920, 1080, true );
    add_image_size( 'torex-blog', 800, 500, true );
    add_image_size( 'torex-thumb', 400, 300, true );
    
    // Custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 70,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    
    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ) );
    
    // Custom background
    add_theme_support( 'custom-background', array(
        'default-color' => 'FBF7F0',
    ) );
    
    // Automatic feed links
    add_theme_support( 'automatic-feed-links' );
    
    // Wide alignment for block editor
    add_theme_support( 'align-wide' );
    
    // Register nav menus
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'torex-safari' ),
        'footer'    => __( 'Footer Menu', 'torex-safari' ),
    ) );
    
    // Content width
    if ( ! isset( $content_width ) ) {
        $content_width = 1200;
    }
}
add_action( 'after_setup_theme', 'torex_setup' );

/* ========== Enqueue Styles & Scripts ========== */
function torex_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'torex-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&family=Playfair+Display:wght@400;600;700;800;900&display=swap',
        array(),
        null
    );
    
    // Theme stylesheet
    wp_enqueue_style(
        'torex-style',
        get_stylesheet_uri(),
        array( 'torex-fonts' ),
        TOREX_VERSION
    );
    
    // Lucide Icons (lightweight)
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest/dist/umd/lucide.js',
        array(),
        null,
        true
    );
    
    // Theme JavaScript
    wp_enqueue_script(
        'torex-scripts',
        TOREX_URI . '/assets/js/theme.js',
        array( 'lucide-icons' ),
        TOREX_VERSION,
        true
    );
    
    // Pass PHP data to JS
    wp_localize_script( 'torex-scripts', 'torexData', array(
        'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'torex_nonce' ),
        'themeUri' => TOREX_URI,
    ) );
    
    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'torex_scripts' );

/* ========== Include Inc Files ========== */
require_once TOREX_DIR . '/inc/customizer.php';
require_once TOREX_DIR . '/inc/custom-post-types.php';
require_once TOREX_DIR . '/inc/widget-areas.php';

/* ========== Register Sidebars ========== */
function torex_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'torex-safari' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Appears on blog and single post pages.', 'torex-safari' ),
        'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'torex-safari' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'torex-safari' ),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Column 3', 'torex-safari' ),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Column 4', 'torex-safari' ),
        'id'            => 'footer-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'torex_sidebars' );

/* ========== Custom Excerpt Length ========== */
function torex_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'torex_excerpt_length' );

function torex_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'torex_excerpt_more' );

/* ========== Breadcrumb ========== */
function torex_breadcrumb() {
    if ( is_front_page() ) return;
    
    echo '<div class="breadcrumb">';
    echo '<a href="' . home_url() . '">' . __( 'Home', 'torex-safari' ) . '</a> &raquo; ';
    
    if ( is_category() ) {
        single_cat_title();
    } elseif ( is_single() ) {
        $categories = get_the_category();
        if ( $categories ) {
            echo '<a href="' . get_category_link( $categories[0]->term_id ) . '">' . $categories[0]->name . '</a> &raquo; ';
        }
        the_title();
    } elseif ( is_page() ) {
        the_title();
    } elseif ( is_search() ) {
        _e( 'Search Results', 'torex-safari' );
    } elseif ( is_404() ) {
        _e( 'Page Not Found', 'torex-safari' );
    }
    
    echo '</div>';
}

/* ========== Dynamic CSS from Customizer ========== */
function torex_custom_css() {
    $primary = get_theme_mod( 'torex_primary_color', '#1B4332' );
    $accent  = get_theme_mod( 'torex_accent_color', '#D4A017' );
    $hero_bg = get_theme_mod( 'torex_hero_bg_image', '' );
    
    $css = ':root {';
    $css .= '--primary:' . esc_attr( $primary ) . ';';
    $css .= '--primary-light:' . esc_attr( torex_adjust_color( $primary, 30 ) ) . ';';
    $css .= '--primary-dark:' . esc_attr( torex_adjust_color( $primary, -20 ) ) . ';';
    $css .= '--accent:' . esc_attr( $accent ) . ';';
    $css .= '--accent-light:' . esc_attr( torex_adjust_color( $accent, 30 ) ) . ';';
    $css .= '--accent-dark:' . esc_attr( torex_adjust_color( $accent, -20 ) ) . ';';
    $css .= '}';
    
    if ( $hero_bg ) {
        $css .= '.hero-bg { background-image: url(' . esc_url( $hero_bg ) . '); }';
    }
    
    wp_add_inline_style( 'torex-style', $css );
}
add_action( 'wp_enqueue_scripts', 'torex_custom_css', 20 );

/* ========== Color Helper ========== */
function torex_adjust_color( $hex, $steps ) {
    $hex = str_replace( '#', '', $hex );
    $r = max( 0, min( 255, hexdec( substr( $hex, 0, 2 ) ) + $steps ) );
    $g = max( 0, min( 255, hexdec( substr( $hex, 2, 2 ) ) + $steps ) );
    $b = max( 0, min( 255, hexdec( substr( $hex, 4, 2 ) ) + $steps ) );
    return '#' . sprintf( '%02x%02x%02x', $r, $g, $b );
}

/* ========== Disable Default WP Block Styles (optional clean slate) ========== */
function torex_clean_block_styles() {
    // Remove emoji scripts for performance
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'torex_clean_block_styles' );
