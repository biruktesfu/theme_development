<?php
function theme_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri()."/style.css", array(), false, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'theme_stylesheets');


function theme_js()
{
   wp_register_script('customjs', get_template_directory_uri() . "/js/scripts.js", 1, true);
   wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'theme_js');

function theme_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.6.0.min.js', '', 1,true);
}
    add_action('wp_enqueue_scripts', 'theme_jquery');