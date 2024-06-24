<?php
/**
 * Activation theme
 */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    // Load the parent theme's stylesheet
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Load the child theme's stylesheet with version based on file modification time
    $child_css_path = get_stylesheet_directory() . '/assets/css/theme.css';
    $child_css_version = file_exists($child_css_path) ? filemtime($child_css_path) : '1.0';
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array('parent-style'), $child_css_version);
}
?>
