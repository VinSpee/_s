<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

		<div class="site__content">

			<div class="site__page">

				<?php if ( have_posts() ) : ?>

					<header class="page__heading">
						<h1 class="page__headline"><?php printf( __( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php _s_content_nav( 'nav-above' ); ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'search' ); ?>

					<?php endwhile; ?>

					<?php _s_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'search' ); ?>

				<?php endif; ?>

			</div>

		</div><!-- #content .site-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
