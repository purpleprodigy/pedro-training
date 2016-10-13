<?php
/**
 * Footer HTML markup structure.
 *
 * @package     PEDRO\PedroTraining
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PEDRO\PedroTraining;

add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\pp_footer_creds_filter');
/**
 * Customise  footer credits
 *
 * @since 1.0.0
 *
 * @param $creds
 *
 * @return string
 */
function pp_footer_creds_filter( $creds ) {

	$creds = 'Copyright [footer_copyright] <a href="https://training.pedro.org.au">PEDro Scale Training</a> &middot; <a href="/sitemap/" rel="nofollow">Sitemap</a> &middot; <a href="/privacy/" rel="nofollow">Privacy</a> &middot; Website by <a href="http://www.purpleprodigy.com">Purple Prodigy</a>';
	return $creds;

}