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
<div id="aigpl_basic_tabs" class="aigpl-vtab-cnt aigpl_basic_tabs aigpl-clearfix">

	<h3 style="text-align:center">Compare <span class="aigpl-blue">"Album and Image Gallery Plus Lightbox"</span> Basic VS Pro</h3>

	<!-- <div class="aigpl-deal-offer-wrap">
		<div class="aigpl-deal-offer"> 
			<div class="aigpl-inn-deal-offer">
				<h3 class="aigpl-inn-deal-hedding"><span>Buy Album and Image Gallery Plus Lightbox</span> today and unlock all the powerful features.</h3>
				<h4 class="aigpl-inn-deal-sub-hedding"><span style="color:red;">Extra Bonus: </span>Users will get <span>15% off</span> on the regular price using this coupon code.</h4>
			</div>
			<div class="aigpl-inn-deal-offer-btn">
				<div class="aigpl-inn-deal-code"><span>EPS15</span></div>
				<a href="<?php // echo esc_url(AIGPL_PLUGIN_BUNDLE_LINK); ?>" target="_blank" class="aigpl-sf-btn aigpl-sf-btn-orange"><span class="dashicons dashicons-cart"></span> Get Essential Bundle Now</a>
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

	<table class="wpos-plugin-pricing-table">
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
		<thead>
			<tr>
				<th></th>
				<th>
					<h2>Free</h2>
				</th>
				<th>
					<h2 class="wpos-epb">Premium</h2>
				</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th>Designs <span>Designs that make your website better</span></th>
				<td>1</td>
				<td>15+</td>
			</tr>
			<tr>
				<th>Shortcodes <span>Shortcode provide output to the front-end side</span></th>
				<td>4 Types of diffrent shortcodes</td>
				<td>4 Types of diffrent shortcodes with additional parameters</td>
			</tr>
			<tr>
				<th>Shortcode Parameters <span>Add extra power to the shortcode</span></th>
				<td>23</td>
				<td>34+</td>
			</tr>
			<tr>
				<th>Shortcode Generator <span>Play with all shortcode parameters with preview panel. No documentation required!!</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>WP Templating Features <span class="subtext">You can modify plugin html/designs in your current theme.</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Gutenberg Block Supports <span>Use this plugin with Gutenberg easily</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Elementor Page Builder Support <em class="wpos-new-feature">New</em> <span>Use this plugin with Elementor easily</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Beaver Builder Support <em class="wpos-new-feature">New</em> <span>Use this plugin with Beaver Builder easily</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>SiteOrigin Page Builder Support <em class="wpos-new-feature">New</em> <span>Use this plugin with SiteOrigin easily</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Divi Page Builder Native Support <em class="wpos-new-feature">New</em> <span>Use this plugin with Divi Builder easily</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			</tr>
			<tr>
				<th>Fusion Page Builder (Avada) native support <em class="wpos-new-feature">New</em> <span>Use this plugin with Fusion( Avada ) Builder easily</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>WPBakery Page Builder Support <span>Use this plugin with Visual Composer easily</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Album image with popup <span>Display Album image with popup on click</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>

			<tr>
				<th>Album category wise <span> Display album category wise.</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Album Masonry style<span> Masonry style for Album.</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Gallery Masonry style<span> Masonry style for image gallery.</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Drag & Drop Album Order Change <span>Arrange your desired Albums with your desired order and display</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Loop Control <span class="subtext">Infinite scroll control </span></th>
				<td><i class="dashicons dashicons-yes"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Custom CSS <span> Custom CSS to override plugin CSS.</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Image album with title and description<span>Display image album with title and description.</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Custom link to gallery image<span>Display Custom link to gallery image</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Slider Center Mode Effect<span>Slider supports center mode effect</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Display Album for Particular Categories <span class="subtext">Display only the album with particular category</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Exclude Some Album <span class="subtext">Do not display the album you want</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Exclude Some Categories <span class="subtext">Do not display the album for particular categories</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Album Gallery Order / Order By Parameters <span class="subtext">Display album according to date, title and etc</span></th>
				<td><i class="dashicons dashicons-no-alt"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
				<th>Multiple Album Gallery Parameters <span class="subtext">Album Gallery parameters like autoplay, number of album, album dots and etc.</span></th>
				<td><i class="dashicons dashicons-yes"> </i></td>
				<td><i class="dashicons dashicons-yes"> </i></td>
			</tr>
			<tr>
			<tr>
				<th>100% Multi language<span>Supports 100% Multi language</span></th>
				<td><i class="dashicons dashicons-no-alt"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Responsive<span>Design fully responsive</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Multiple Slider Parameters <span>Slider parameters like autoplay, number of slide, sider dots and etc.</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Slider RTL Support <span>Slider supports for RTL website</span></th>
				<td><i class="dashicons dashicons-yes"></i></td>
				<td><i class="dashicons dashicons-yes"></i></td>
			</tr>
			<tr>
				<th>Automatic Update <span>Get automatic  plugin updates </span></th>
				<td>Lifetime</td>
				<td>Lifetime</td>
			</tr>
			<tr>
				<th>Support <span>Get support for plugin</span></th>
				<td>Limited</td>
				<td>1 Year</td>
			</tr>
		</tbody>
	</table>

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