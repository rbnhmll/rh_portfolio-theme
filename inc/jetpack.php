<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package RH_portfolio
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function rh_portfolio_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'rh_portfolio_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function rh_portfolio_jetpack_setup
add_action( 'after_setup_theme', 'rh_portfolio_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function rh_portfolio_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function rh_portfolio_infinite_scroll_render
