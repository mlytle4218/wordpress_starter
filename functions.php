<?php
// Load the theme stylesheets
function theme_styles()  
{ 
	//load up the css
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/bootstrap.min.css' );
	// echo get_template_directory_uri();
	wp_enqueue_style( 'myStyle', get_template_directory_uri() . '/css/style.css' );
}

function theme_js() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'theme_js' );
add_action('wp_enqueue_scripts', 'theme_styles');

?>