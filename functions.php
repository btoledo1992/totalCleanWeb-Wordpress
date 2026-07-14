<?php
/**
 * Total Clean - functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Estilos y scripts
function totalclean_assets() {
    // Fuente Manrope (Google Fonts)
    wp_enqueue_style(
        'totalclean-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    // Hoja de estilos principal del tema
    wp_enqueue_style(
        'totalclean-style',
        get_stylesheet_uri(),
        [ 'totalclean-fonts' ],
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    // JS del tema (carrusel, antes/después, FAQ)
    wp_enqueue_script(
        'totalclean-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        filemtime( get_stylesheet_directory() . '/assets/js/main.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'totalclean_assets' );

// Soporte de tema
function totalclean_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

    // Menú de navegación principal (Apariencia > Menús)
    register_nav_menus( [
        'primary' => __( 'Menú principal', 'totalclean' ),
    ] );
}
add_action( 'after_setup_theme', 'totalclean_setup' );

// Fallback simple del menú si todavía no se creó uno en Apariencia > Menús
function totalclean_fallback_menu() {
    echo '<div class="navlinks">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">Inicio</a>';
    echo '<a href="' . esc_url( home_url( '/servicios' ) ) . '">Servicios</a>';
    echo '<a href="' . esc_url( home_url( '/quienes-somos' ) ) . '">Quienes somos</a>';
    echo '<a href="' . esc_url( home_url( '/contacto' ) ) . '">Contacto</a>';
    echo '</div>';
}
