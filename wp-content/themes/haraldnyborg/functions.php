<?php

function addstyles(){
	wp_register_style('custom', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'addstyles');


function addjs(){
	wp_register_script('scripts', get_template_directory_uri() . '/script.js', array() , 1, 1, 1);
	wp_enqueue_script('scripts');

}
add_action('wp_enqueue_scripts', 'addjs');



function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  
}
add_action( 'init', 'register_my_menu' );



?>

