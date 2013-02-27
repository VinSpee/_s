<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 * @since _s 1.0
 */
?>

<article <?php post_class('entry'); ?>>
	<header class="entry__heading">
		<h1 class="entry__headline"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry__content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page__links">' . __( 'Pages:', '_s' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_s' ), '<footer class="entry__meta--footer"><span class="entry__action--edit">', '</span></footer>' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
