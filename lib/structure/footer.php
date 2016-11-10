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

add_filter( 'genesis_footer_creds_text', __NAMESPACE__ . '\pp_footer_creds_filter' );
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

	$creds = 'Copyright [footer_copyright] <a href="https://training.pedro.org.au">2016 Physiotherapy Evidence Database (PEDro)</a> &middot; <a href="/contact/">Contact</a> &middot; <a href="/sitemap/" rel="nofollow">Sitemap</a> &middot; <a href="/terms/" rel="nofollow">Terms &amp; Conditions</a> &middot; Website by <a href="http://www.purpleprodigy.com">Purple Prodigy</a><br>
<div class="social-icons">
		<ul>
			<li><a href="http://www.facebook.com/PhysiotherapyEvidenceDatabase.PEDro"><i class="fa fa-facebook"><span class="screen-reader-text">Like us on Facebook</span></i></a>
			</li>
			<li><a href="https://twitter.com/#!/PEDro_CEBP"><i class="fa fa-twitter"><span class="screen-reader-text">Follow us on Twitter</span></i></a>
			</li>
			<li><a href="https://plus.google.com/101086467607648511656"><i class="fa fa-google-plus"><span class="screen-reader-text">Connect on Google+</span></i> </a>
			</li>
			<li><a href="https://www.youtube.com/channel/UCOz1EVhtpOMMQRzRioGIOtQ"><i class="fa fa-youtube"><span class="screen-reader-text">Follow us on YouTube</span></i> </a>
			</li>
		</ul>
</div>';

	return $creds;

}