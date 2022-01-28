<?php
function theme_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri()."/style.css", array(), false, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'theme_stylesheets');


function theme_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri(). '/assets/js/jquery-3.6.0.min.js', '', 1,true);
}
    add_action('wp_enqueue_scripts', 'theme_jquery');



function theme_js()
{
   wp_register_script('customjs', get_template_directory_uri() . "/assets/js/scripts.js", '', 1, true);
   wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'theme_js');


add_theme_support('menus');
add_theme_support( 'custom-background' );


//assigning location to the menus
register_nav_menus(
    array(

        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
    );



// Registering custom navbar walker
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );