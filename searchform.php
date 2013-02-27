<?php
/**
 * The template for displaying search forms in _s
 *
 * @package _s
 * @since _s 1.0
 */
?>
	<form class="site__search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<fieldset class="search__layout">
			<input type="search" class="search__field--data" name="search" value="<?php echo esc_attr( get_search_query() ); ?>" id="search" placeholder="<?php esc_attr_e( 'Search &hellip;', '_s' ); ?>" />
			<input type="submit" class="search__field--button" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', '_s' ); ?>" />
		</fieldset>
	</form>
