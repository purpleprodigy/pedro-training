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
 * Show English menu to parent and sub-pages of English template only.
 *
 * @since 1.0.0
 *
 * @param $args
 *
 * @return mixed
 */
function show_english_nav_menu( $args ){
	if( ( 'primary' == $args['theme_location'] ) && (is_page_template( 'english.php') ) )
	{
		$args['menu'] = 'English';
	}

	return $args;
}

add_filter( 'wp_nav_menu_args', __NAMESPACE__ . '\show_english_nav_menu' );