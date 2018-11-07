<?php

/**
* Plugin Name: Likebox
* Description: Simple plugin to show Facebook Likebox
* Version: 1.0.0
* Author: Boro Radojcic
*/


// add javascript files
function add_scripts(){
    wp_enqueue_script('likebox-scripts', plugins_url() .'/likebox/js/likebox.js',false);
}
add_action('wp_enqueue_scripts', 'add_scripts');

//Include Class
include('class.likebox.php');

//Register Widget
function register_likebox(){
    register_widget('Likebox_Widget');
}

add_action('widgets_init', 'register_likebox'); 