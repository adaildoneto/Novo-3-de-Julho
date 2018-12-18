<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

</div>
</div>
</div>
	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l4">
					<?php if ( dynamic_sidebar('footer-sidebar') ) : else : endif; ?>
				</div>
				<div class="col s12 m12 l4">
					<?php if ( dynamic_sidebar('footer2-sidebar') ) : else : endif; ?>
				</div>
				<div class="col s12 m12 l4">
					<?php if ( dynamic_sidebar('footer3-sidebar') ) : else : endif; ?>
				</div>

			</div>
			<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Powered by the <a href="%s" rel="nofollow" target="_blank">Odin</a> forces and <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>

</body>
</html>
