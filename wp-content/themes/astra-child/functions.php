<?php
/**
 * Activation theme
 */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    // Load the parent theme's stylesheet
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/css/style.css');
    
    // Load the child theme's stylesheet with version based on file modification time
    $child_css_path = get_stylesheet_directory() . '/assets/css/theme.css';
    $child_css_version = file_exists($child_css_path) ? filemtime($child_css_path) : '1.0';
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array('parent-style'), $child_css_version);
}

// Fonction pour conditionner l'affichage du lien "Admin"
function custom_admin_menu_link($items) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajoute le lien "Admin" à la fin du menu
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
// Ajoute le lien à la fin du menu principal
add_filter('wp_nav_menu_items', 'custom_admin_menu_link', 10, 2);

?>
