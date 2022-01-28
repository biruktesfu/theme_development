<?php
function theme_stylesheets()
{
    wp_register_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), false, 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri()."/style.css", array(), false, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'theme_stylesheets');

function theme_scripts(){
    wp_enqueue_script('bootstrap_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), true, 'all');
    wp_enqueue_style('theme_scripts');
    wp_enqueue_script('bootstrap_popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), true, 'all');
    wp_enqueue_style('theme_scripts');
    wp_enqueue_script('bootstrap_script', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), true, 'all');
    wp_enqueue_style('theme_scripts');
    wp_enqueue_script('bootstrap_main',"assets/js/main.js", array(), true, 'all');
    wp_enqueue_style('theme_scripts');
}

function theme_support(){
   // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails'); 

}
add_action('after_setup_theme', 'theme_support');



function theme_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus ($locations);
}

add_action('init','theme_menus');

function theme_sidebar(){

register_sidebar(
    array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
        'after widget' => '</ul> ',
        'name' => 'Sidebar Area',
        'id' => 'sidebar-1',
        'description' => 'Sidebar Widget Area'
        )       
    );


add_action( 'widgets_init', 'theme_sidebar');

register_sidebar(
    array(
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after widget' => '',           
        'name' => 'Footer Area',
        'id' => 'footer-1',
        'description' => 'Footer Widget Area'
        )       
    );
}

add_action( 'widgets_init', 'theme_sidebar');
?>

