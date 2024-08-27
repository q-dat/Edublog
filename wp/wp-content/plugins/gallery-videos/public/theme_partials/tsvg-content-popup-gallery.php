<style type="text/css">
	:root{
		--tsvg_g_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_01 ), FILTER_VALIDATE_INT ); ?>;
		--tsvg_g_border_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_03 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_border_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ) ); ?>;
		--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_05 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_shadow_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_07 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_shadow_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_08 ) ); ?>;
		--tsvg_hp_overlay_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_10 ) ); ?>;
		--tsvg_to_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_12 ) ); ?>;
		--tsvg_to_font_size_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_13 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_to_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_14 ) ); ?>;
		--tsvg_to_background_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_15 ) ); ?>;
		--tsvg_lit_Width_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_17 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lit_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_18 ) ); ?>;
		--tsvg_lo_border_Width_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_20 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_border_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_21 ) ); ?>;
		--tsvg_lo_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_22 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_background_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_23 ) ); ?>;
		--tsvg_lo_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_24 ) ); ?>;
		--tsvg_lo_font_size_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_26 ) ); ?>;
		--tsvg_lo_hover_background_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_27 ) ); ?>;
		--tsvg_lo_hover_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_28 ) ); ?>;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>	 .tsvg-main-content-parent-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		position: relative;
		width: 100%;
		float: left;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-block-inner{
		position: relative;
		padding-bottom: 56.25%;
		width: 100%!important;
		height: 100%!important; 
		margin: 0;
	}
	.tsvg-cp-block-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		display:none;
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a.tsvg-cp-block-info-link {
		background: var(--tsvg_lo_background_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color:  var(--tsvg_lo_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size:  var(--tsvg_lo_font_size_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border:  var(--tsvg_lo_border_Width_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_lo_border_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: var(--tsvg_lo_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a.tsvg-cp-block-info-link:hover {
		background: var(--tsvg_lo_hover_background_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_lo_hover_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		   width:calc( calc(100% - calc(2 * var(--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) *  var(--tsvg_g_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) ) / var(--tsvg_g_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))!important;
		height: 100%;
		margin: var(--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border: var(--tsvg_g_border_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_g_border_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		cursor: pointer !important;
		overflow: hidden;
		float:left;
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-shadow='true'] {
		-webkit-box-shadow: 0px 0px var(--tsvg_g_shadow_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_shadow_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_g_shadow_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_shadow_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_g_shadow_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_shadow_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-show='false'] {
		display: none !important;
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .mask, 
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .content<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		width: 100%!important;
		height:100%;
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> h2 {
		color: var(--tsvg_to_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center;
		font-size: var(--tsvg_to_font_size_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_to_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		text-transform: none !important;
		letter-spacing: 0 !important;
		font-weight: normal !important;
		transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		-webkit-transform: translate3d(0, 0, 0);
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> p {
		line-height: normal !important;
	}
	.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-second h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-fourth h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-sixth h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-tenth h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-fifth h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth h2 {
		border-bottom: var(--tsvg_lit_Width_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_lit_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-first h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-third h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-fifth h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-seventh h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-eighth h2,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth figcaption {
		background: var(--tsvg_to_background_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-first .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-second .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-third .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-fourth .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-fifth .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-sixth .mask,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-seventh .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-eighth .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-tenth .mask, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth .tsvg-block-inner-column-second, .tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth .tsvg-block-inner-column-one {
		background-color: var(--tsvg_hp_overlay_color_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth figcaption {
		height:100%;
	}
	.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth figcaption,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth .tsvg-block-inner-column-one,.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-cp-block-view-ninth .tsvg-block-inner-column-second  {
		position: absolute;
		overflow: hidden;
		top: 0;
		left: 0;
	}
	.tsvg-cp-block-view-fifth .mask {
		-webkit-transform: translateX(-101%);
		-moz-transform: translateX(-101%);
		-o-transform: translateX(-101%);
		-ms-transform: translateX(-101%);
		transform: translateX(-101%);
	}
	.tsvg-cp-block-view-fifth:hover img {
		-webkit-transform: translateX(100%);
		-moz-transform: translateX(100%);
		-o-transform: translateX(100%);
		-ms-transform: translateX(100%);
		transform: translateX(100%);
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>	 .tsvg-cp-block-view .mask li:first-child {
		width: 90%;
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
	}
	.tsvg-cp-block-view .mask > p {
		width: 90%;
		overflow: hidden;
		display: block;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="500px"]{
		--tsvg_g_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 2;
		--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:5px;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="400px"]{
		--tsvg_g_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 1;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="400px"] > figure > ul > li{
		--tsvg_g_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 1;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="400px"]  nav > ul > li{
		margin-bottom: 6px !important
	}
	.tsvg-cp-block-view-second .mask {
		padding:0 !important;
		opacity: 1 !important;
		background: transparent !important;
		-webkit-transform: unset !important; 
		-moz-transform: unset !important;
		-o-transform: unset !important;
		-ms-transform: unset !important;
		transform: unset !important; 
	}
	.tsvg-cp-block-view-second h2{
		-webkit-transform: unset !important;
		-moz-transform: unset !important;
		-o-transform: unset !important;
		-ms-transform: unset !important;
		transform: unset !important;
	}
	.tsvg-cp-blocks-list a[href=''], .tsvg-cp-blocks-list a[href='#']{
		display:none !important;
	}
	.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-block-inner img{
		display: block !important; /* lazy load */
	}
</style>
<?php
	$tsvg_videos_data_html  = '';
	$tsvg_cp_block_mask_arr = array( '', 'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth' );
	$tsvg_cp_block_index    = 0;
	foreach ( $tsvg_videos_data as $key => $value ) {
		$tsvg_cp_block_index++;
		$tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
		$tsvg_media_url_target             = $tsvg_videos_data_object->TotalSoftVGallery_Vid_vont == 'true' ? '_blank' : '_self';
		$tsvg_block_video_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd == '' ? $tsvg_default_video : $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd;
		$tsvg_block_link_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link;
		$tsvg_block_desc                   = $tsvg_videos_data_object->TotalSoftVGallery_Vid_desc;
		$tsvg_block_img_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
		$tsvg_videos_data_html .= sprintf(
			'
			<li class="tsvg-content-popup-block-%1$s tsvg-cp-block-view tsvg-cp-block-view-%1$s tsvg-cp-block-view-%2$s " data-tsvg-target="%3$s"  data-tsvg-link="%4$s"  data-tsvg-href="%5$s"   data-tsvg-id="%6$s" style="-moz-animation-delay:  %7$ss;-webkit-animation-delay:  %7$ss;animation-delay:  %7$ss;" data-tsvg-shadow="%8$s">
				<figure class="tsvg-block-inner">
					<img  width="" height="" src="%9$s" alt="%10$s"  title="%10$s" >
					<div class="mask">
						<div></div>
						<div class="tsvg-block-inner-column-one" ></div>
						<div class="tsvg-block-inner-column-second" ></div>
						<figcaption>
							<h2 class="tsvg-cp-block-title-%1$s" data-tsvg-show="%11$s" >%10$s</h2>
							<div class="tsvg-cp-block-desc-%1$s" data-tsvg-show="%15$s"> %14$s </div>
							<a class="tsvg-cp-block-info-%1$s tsvg-cp-block-info tsvg-cp-block-info-link"  href="%4$s" target="%3$s"  data-tsvg-show="%13$s">%12$s</a>
						</figcaption>
					</div>
				</figure>
			</li>
			',
			esc_attr( $tsvg_shortcode_id ),
			esc_attr( $tsvg_cp_block_mask_arr[ $tsvg_style_options->TotalSoft_GV_1_09 ] ),
			esc_attr( $tsvg_media_url_target ),
			esc_url( $tsvg_block_link_url ),
			esc_url( $tsvg_block_video_url ),
			esc_attr( $tsvg_videos_data[ $key ]->id ),
			esc_attr( 0.3 * $tsvg_cp_block_index ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_06 ),
			esc_url( $tsvg_block_img_url ),
			esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_11 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_19 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_32 ),
			wp_unslash( html_entity_decode( $tsvg_block_desc ) ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_16 )
		);
	}
	echo sprintf(
		'
		<main class="tsvg-main-content-%1$s tsvg-main-content-parent-%1$s"  data-item-open="%2$s"  data-item-number="%3$s" data-pagination="%4$s" data-p-lm="%5$s">
			<figure  class="tsvg-cp-blocks-container tsvg-cp-blocks-container-%1$s">
				<ul class="tsvg-cp-blocks-list">
					%6$s  
				</ul>
			</figure>
		</main>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_07 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_02 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
		esc_attr(  $tsvg_style_options->TotalSoft_GV_2_33 ),
		$tsvg_videos_data_html
	);
?>