<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Chargement du style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Chargement du style du thème enfant avec la version basée sur filemtime
    $child_css_version = file_exists( get_stylesheet_directory() . './assets/css/theme.css' ) ? filemtime( get_stylesheet_directory() . '/css/theme.css' ) : '1.0';
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . './assets/css/theme.css', array(), $child_css_version );
}

?>