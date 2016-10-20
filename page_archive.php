<?php
/**
 * Set up the sitemap page.
 *
 * @package     PEDRO\PedroTraining\Sitemap
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PEDRO\PedroTraining\Sitemap;

// Remove standard post content output.
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

add_action( 'genesis_entry_content', __NAMESPACE__ . '\genesis_page_archive_content' );
add_action( 'genesis_post_content', __NAMESPACE__ . '\genesis_page_archive_content' );


/**
 * This function outputs a sitemap displaying  pages required to be shown.
 *
 * @since 1.6
 */
function genesis_page_archive_content() {
	wp_list_pages( array(
		'exclude'     => 79,
		'title_li'    => '',
		'sort_column' => 'post_date'
	) );
}

genesis();

