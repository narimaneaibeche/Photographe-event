<?php 
add_theme_support('title-tag');


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
// Chargement du js/script.js pour nos personnalisations
function add_scripts() {
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri()  . '/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

/* nav menu  commence ici */
function register_my_menu(){
    register_nav_menus(
        array(
        'main-menu' => __( 'Menu principal' ),
        'footer-menu' => __( 'Menu Footer' ),
        )
        );
  }
  add_action( 'after_setup_theme', 'register_my_menu' );

