<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */
?>

		<footer class="site__footer" role="contentinfo">

			<nav class="site__navigation--primary" role="navigation">
				<div class="site__navigation__skip"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', '_s' ); ?></a></div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- .site-navigation .main-navigation -->
			<small class="site__colophon">
				<?php do_action( '_s_credits' ); ?>
			</small><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!-- [role=main] .site -->

	<?php wp_footer(); ?>

	</body>
</html>
