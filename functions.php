<?php 


function add_theme_scripts(){
    wp_enqueue_style('style2', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');



?>