<?php
/**
 * The Header template for the home page 
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>


</head>
<!-- THIS HEADER IS FOR THE HOME PAGE ONLY -->
<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
		<div class="top-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
		</div>
		<div class="header-bg"></div>
		<!--Slideshow-->
			<div class="slideshow">
				<div class="homeSlide" id="slide-1" style="background-image: url(<?php the_field('image_1'); ?>);">
					<?php if( get_field('text_1') ): ?>
						<div class="textOverlay" id="text-1"><?php the_field('text_1'); ?> </div>
					<?php endif; ?>
					
				</div>
				<div class="homeSlide" id="slide-2" style="background-image: url(<?php the_field('image_2'); ?>);">
					<?php if( get_field('text_2') ): ?>
						<div class="textOverlay" id="text-2"><?php the_field('text_2'); ?> </div>
					<?php endif; ?>
				</div>
				<div class="homeSlide" id="slide-3" style="background-image: url(<?php the_field('image_3'); ?>);">
					<?php if( get_field('text_3') ): ?>
						<div class="textOverlay" id="text-3"><?php the_field('text_3'); ?> </div>
					<?php endif; ?>
				</div>
				<div class="homeSlide" id="slide-4" style="background-image: url(<?php the_field('image_4'); ?>);">
					<?php if( get_field('text_4') ): ?>
						<div class="textOverlay" id="text-4"><?php the_field('text_4'); ?> </div>
					<?php endif; ?>
				</div>
			</div>
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo bloginfo('stylesheet_directory');?>/images/TCP-logo.png" alt="<?php bloginfo( 'name' ); ?>" width="125" height="74"/>
				<?php //bloginfo( 'name' ); ?></a>
			</h1>
			<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
		</hgroup>


		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->
<div id="page" class="hfeed site">
	<div id="main" class="wrapper">