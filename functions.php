<?php
/**
 * PedroTraining theme.
 *
 * @package     PEDRO\PedroTraining
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */
namespace PEDRO\PedroTraining;

include_once( 'lib/init.php' );

include_once( 'lib/functions/autoload.php' );

//* Start the Genesis framework
include_once( get_template_directory() . '/lib/init.php' );

//* Unregister secondary sidebar
unregister_sidebar( 'sidebar-alt' );