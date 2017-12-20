<?php
add_action( 'wp_enqueue_scripts', 'my_assets' );
function my_assets() {
    
    // enqueue parent styles
	wp_enqueue_style( 'twentytwelve', get_template_directory_uri() . '/style.css' );

	
	// enqueue child styles
	//wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/css/styles.css', array('parent-theme'));
	
	wp_enqueue_style( 'tennenbaum-2017-styles', get_stylesheet_directory_uri() . '/css/styles.css' );
}
?>

