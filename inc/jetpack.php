<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package wpitalyplu_s
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wpitalyplu_s_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => false,
	) );
}
add_action( 'after_setup_theme', 'wpitalyplu_s_jetpack_setup' );
