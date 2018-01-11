<?php
add_action( 'wp_enqueue_scripts', 'my_assets' );
function my_assets() {
    
    // enqueue parent styles
	wp_enqueue_style( 'twentytwelve', get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_style( 'tennenbaum-2017-styles', get_stylesheet_directory_uri() . '/css/styles.css' );

	//enqueue fonts
	wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Lato:400,700', false ); 


	wp_enqueue_script('jquery_min_script', 'https://code.jquery.com/jquery-3.2.1.min.js');


	wp_enqueue_script( 'custom_scripts', get_stylesheet_directory_uri() . '/js/scripts.js' );

	wp_enqueue_script('scrollReveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js');


}

function register_top_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_top_menu' );




?>