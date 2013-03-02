<?php
/**
 * The template for displaying search forms in Paulo Neves
 *
 * @package Paulo Neves
 * @since Paulo Neves 1.0
 */
?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _ex( 'Search', 'assistive text', 'pauloneves' ); ?></label>
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'pauloneves' ); ?>" />
		<input type="submit" class="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'pauloneves' ); ?>" />
	</form>
