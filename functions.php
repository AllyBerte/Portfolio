<?php
function load_stylesheet()
{
    wp_register_style('stylesheet', get_template_directory_uri() . "/style.css");
    wp_enqueue_style('stylesheet');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheet');