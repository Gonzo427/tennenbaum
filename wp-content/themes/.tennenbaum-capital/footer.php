<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tennenbaum-capital
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer ">
		<div class="site-info">
			&copy; <a href="<?php echo esc_url( __( home_url( '/' ) , 'tennenbaum-capital' ) ); ?>">
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '  %s', 'tennenbaum-capital' ), 'Tennenbaum Capital Partners, LLC' ) ;
			?></a>
			<span class="sep"> // </span>
			<?php echo date("Y"); ?>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s // %2$s.', 'tennenbaum-capital' ), '2951 28th Street, Suite 1000 Santa Monica, CA 90405', '310.566.1000' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
