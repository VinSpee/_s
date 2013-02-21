<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

		<div class="site__content">

		<article class="post--404">
			<header class="entry__heading">
				<h1 class="entry__headline"><?php _e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry__content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_s' ); ?></p>

				<?php get_search_form(); ?>

				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<div class="widget">
					<h2 class="widgettitle"><?php _e( 'Most Used Categories', '_s' ); ?></h2>
					<ul>
					<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
					</ul>
				</div><!-- .widget -->

				<?php
				/* translators: %1$s: smiley */
				$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', '_s' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
				?>

				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div><!-- .entry-content -->
		</article><!-- #post-0 .post .error404 .not-found -->

		</div><!-- #content .site-content -->

<?php get_footer(); ?>
