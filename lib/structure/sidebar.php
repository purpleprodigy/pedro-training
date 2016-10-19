<?php
/**
 * Sidebar HTML markup structure.
 *
 * @package     PEDRO\PedroTraining
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PEDRO\PedroTraining;
/**
 * Reposition secondary navigation to sidebar.
 *
 * @since 1.0.0
 *
 * @return void
 */
function reposition_secondary_nav_to_sidebar() {
	remove_action( 'genesis_after_header', 'genesis_do_subnav' );
	add_action( 'genesis_before_sidebar_widget_area', 'genesis_do_subnav' );

}