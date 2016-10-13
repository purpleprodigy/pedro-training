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
 * This function outputs sitemap-esque columns displaying all pages,
 * categories, authors, monthly archives, and recent posts.
 *
 * @since 1.6
 */
function genesis_page_archive_content() { ?>

		<?php wp_list_pages(
			'exclude=11,12,79',
			'title_li=',
			'sort_column=post_date'
) ?>


	<?php
}

genesis();
