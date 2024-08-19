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

<div id="aigpl_themes_tabs" class="aigpl-vtab-cnt aigpl_themes_tabs aigpl-clearfix">
	
	<div class="aigpl-features-section">
		<div class="aigpl-sf-center aigpl-features-ttl">
			<h1 class="aigpl-sf-heading">Powerful Pro Features, Simplified</h1>
		</div>
		<div class="aigpl-sf-welcome-wrap aigpl-sf-center">
			<div class="aigpl-features-box-wrap">
				<ul class="aigpl-features-box-grid">
					<li>
					<div class="aigpl-popup-icon"><img src="<?php echo esc_url( AIGPL_URL ); ?>assets/images/popup-icon/grid.png" /></div>
					Album Grid with Lightbox</li>
					<li>
					<div class="aigpl-popup-icon"><img src="<?php echo esc_url( AIGPL_URL ); ?>assets/images/popup-icon/carousel.png" /></div>
					Album Slider View</li>
					<li>
					<div class="aigpl-popup-icon"><img src="<?php echo esc_url( AIGPL_URL ); ?>assets/images/popup-icon/grid.png" /></div>
					Album with Reload Gallery</li>
					<li>
					<div class="aigpl-popup-icon"><img src="<?php echo esc_url( AIGPL_URL ); ?>assets/images/popup-icon/grid.png" /></div>
					Image Gallery Grid View</li>
					<li>
					<div class="aigpl-popup-icon"><img src="<?php echo esc_url( AIGPL_URL ); ?>assets/images/popup-icon/carousel.png" /></div>
					Image Gallery Slider View</li>
					<li>
					<div class="aigpl-popup-icon"><img src="<?php echo esc_url( AIGPL_URL ); ?>assets/images/popup-icon/masonry.png" /></div>
					Album && Gallery Masonry View</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- <div class="aigpl-deal-offer-wrap">
        <div class="aigpl-deal-offer"> 
            <div class="aigpl-inn-deal-offer">
                <h3 class="aigpl-inn-deal-hedding"><span>Buy Album and Image Gallery Plus Lightbox</span> today and unlock all the powerful features.</h3>
                <h4 class="aigpl-inn-deal-sub-hedding"><span style="color:red;">Extra Bonus: </span>Users will get <span>15% off</span> on the regular price using this coupon code.</h4>
            </div>
            <div class="aigpl-inn-deal-offer-btn">
                <div class="aigpl-inn-deal-code"><span>EPS15</span></div>
                <a href="<?php //echo esc_url(AIGPL_PLUGIN_BUNDLE_LINK); ?>" target="_blank" class="aigpl-sf-btn aigpl-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Get Essential Bundle Now</a>
                <em class="risk-free-guarantee"><span class="heading">Risk-Free Guarantee </span> - We offer a <span>30-day money back guarantee on all purchases</span>. If you are not happy with your purchases, we will refund your purchase. No questions asked!</em>
            </div>
        </div>
    </div> -->

    <div class="aigpl-deal-offer-wrap">
		<div class="aigpl-deal-offer"> 
			<div class="aigpl-inn-deal-offer">
				<h3 class="aigpl-inn-deal-hedding"><span>Try Album and Image Gallery Plus Lightbox Pro</span> in Essential Bundle Free For 5 Days.</h3>
			</div>
			<div class="aigpl-deal-free-offer">
				<a href="<?php echo esc_url( AIGPL_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="aigpl-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
			</div>
		</div>
	</div>

</div>