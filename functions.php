<?php
// functions.php
function theme_setup(){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function load_scripts_and_styles(){
	wp_enqueue_style('style', get_stylesheet_uri());	
}
add_action('wp_enqueue_scripts', 'load_scripts_and_styles');

require_once('library/index.php');