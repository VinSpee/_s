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
			<small class="site__colophon">
				<?php do_action( '_s_credits' ); ?>
			</small><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	</div><!-- [role=main] .site -->

	<?php wp_footer(); ?>

	</body>
</html>
