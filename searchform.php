<?php
/**
 * The template for displaying search forms in wpitalyplu_s
 *
 * @package wpitalyplu_s
 */
?>
<form role="search" method="get" class="search-form pure-form pure-form-aligned" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for: &nbsp;', 'label', 'wpitalyplu_s' ); ?></span>
		<input type="search" class="search-field" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wpitalyplu_s' ); ?>">
	</label>
	<label>
	<input type="submit" class="search-submit pure-button pure-button-small pure-button-primary" value="<?php echo esc_attr_x( 'Search', 'submit button', 'wpitalyplu_s' ); ?>">
	</label>
</form>
