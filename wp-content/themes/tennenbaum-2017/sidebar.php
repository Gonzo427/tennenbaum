<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php if( get_field('sidebar_image') ): ?>
			<div id="sidebar-img">
				<img src="<?php the_field('sidebar_image'); ?>" />
			</div>
			<?php endif; ?>
			
			<?php if( get_field('light_blue_text') ): ?>
				<div id="light-blue">
					<?php the_field('light_blue_text'); ?>
				</div>
			<?php endif; ?>
			
			<?php if( get_field('dark_blue_text') ): ?>
				<div id="dark-blue">
					<?php the_field('dark_blue_text'); ?>
				</div>
			<?php endif; ?>
		</div><!-- #secondary -->
	<?php endif; ?>