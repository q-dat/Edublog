<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Album and Image Gallery Plus Lightbox
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div id="aigpl_welcome_tabs" class="aigpl-vtab-cnt aigpl_welcome_tabs aigpl-clearfix">	

	<div class="aigpl-deal-offer-wrap">
		<h3 style="font-weight: bold; font-size: 30px; color:#ffef00; text-align:center; margin: 15px 0 5px 0;">Why Invest Time On Free version?</h3>

		<h3 style="font-size: 18px; text-align:center; margin:0; color:#fff;">Explore Slick Slider Pro with Essential Bundle Free for 5 Days.</h3>			

		<div class="aigpl-deal-free-offer">
			<a href="<?php echo esc_url( AIGPL_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="aigpl-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
		</div>
	</div>

	<!-- <h1 class="aigpl-sf-heading">Create effective image <span class="aigpl-sf-blue">albums and galleries</span> to show off your <span class="aigpl-sf-blue">beautiful photographs and other images </span> on your website.</h1> -->

	<div class="aigpl-sf-welcome-wrap" style="border: 1px solid #ddd; background: #fff;box-shadow: 0 3px 2px rgb(0 0 0 / 5%);padding: 50px; margin-bottom: 1rem;">
		<div class="aigpl-sf-welcome-inr aigpl-sf-center">

			<h5 class="aigpl-sf-content" style="font-size:20px;">Experience <span class="aigpl-sf-blue">7 Layouts</span>, <span class="aigpl-sf-blue">30+ stunning designs</span>  with which you can showcase your images on your website the way you want.</h5>
			<h5 class="aigpl-sf-content" style="font-size:18px;"><span class="aigpl-sf-blue">10,000+ </span>websites are using <span class="aigpl-sf-blue">Album and Image Gallery Plus Lightbox </span>.</h5>
			<div style="margin-top: 15px; text-transform: uppercase; text-align:center;">
				<a href="<?php echo esc_url( $aigpl_add_link ); ?>" class="aigpl-sf-btn">Launch Gallery With Free Features</a>
			</div>
		</div>
	</div>

</div>