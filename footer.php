<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Villeconin
 */
?>

	</div><!-- #content -->

	<?php get_sidebar(); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">
			oui
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'villeconin' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'villeconin' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'villeconin' ), 'Villeconin', '<a href="https://github.com/pboettch" rel="designer">Patrick Boettcher</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
