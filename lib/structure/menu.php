<?php
/**
 * Use conditional menus for subscribers.
 *
 * @package     PEDRO\PedroTraining
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PEDRO\PedroTraining;

/**
 * Show English menu to parent and sub-pages of /english/ only.
 *
 * @since 1.0.0
 *
 * @param $args
 *
 * @return mixed
 */
function show_english_nav_menu( $args ){
	if( ( 'primary' == $args['theme_location'] ) && (is_page( 18) || is_subpage() == 18 ) )
	{
		$args['menu'] = 'English'; // Add your menu name here. My case it is "Menu for Page"
	}

	return $args;
}

add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\show_english_nav_menu' );

/**
 * Return ID of a parent page if a page has a parent.
 *
 * @since 1.0.0
 *
 * @return int
 */
function is_subpage() {
	global $post;

	if ( is_page() && $post->post_parent ) {
		return $post->post_parent;

	} else {
		return 0;
	}
}