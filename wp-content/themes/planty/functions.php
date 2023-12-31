<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    // Chargement du /css/widgets/image-titre-widget.css pour notre widget image titre
};




    function my_wp_nav_menu_args( $args = '' ) {
        if( !is_user_logged_in() ) { 
            $args['menu'] = 'Menu-Visiteur';
        } else { 
            $args['menu'] = 'Menu-Principal';
        }
            return $args;
        } ;
    add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

    /*add_action('logged_out_menu', 'menu_remove_item');
    function menu_remove_item() {
        if ( !is_user_logged_in() ) {
            remove_menu_page('admin.php');
        }
    };*/