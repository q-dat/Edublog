<style>
	:root{
		--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_01 ), FILTER_VALIDATE_INT ); ?>;
		--tsvg_g_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_03 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ) ); ?>;
		--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_05 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_06 ) ); ?>;
		--tsvg_g_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_07 ), FILTER_VALIDATE_INT ); ?>%;
		--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_08 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_hoo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_29 ) ); ?>;
		--tsvg_vto_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_09 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_vto_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_10 ) ); ?>;
		--tsvg_vto_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_11 ) ); ?>;
		--tsvg_vto_b_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_12 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_vto_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_14 ) ); ?>;
		--tsvg_vto_t_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_15 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_vto_t_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_16 ) ); ?>;
		--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_17 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_18 ) ); ?>;
		--tsvg_lo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_19 ) ); ?>;
		--tsvg_lo_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_21 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_22 ) ); ?>;
		--tsvg_lo_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_23 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_24 ) ); ?>;
		--tsvg_lo_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ) ); ?>;
		--tsvg_lo_h_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_26 ) ); ?>;
		--tsvg_lo_h_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_27 ) ); ?>;
		--tsvg_popup_po_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_33 ), FILTER_VALIDATE_INT ); ?>;
		--tsvg_popup_po_v_h_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_34 ), FILTER_VALIDATE_INT ); ?>;
		--tsvg_popup_po_o_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_30 ) ); ?>;
		--tsvg_popup_po_vbc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_32 ) ); ?>;
		--tsvg_popup_psi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_04 ), FILTER_VALIDATE_INT ); ?>;
		--tsvg_popup_psi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_05 ) ); ?>;
		--tsvg_popup_pt_hbr_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_35 ) ); ?>;
		--tsvg_popup_pt_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_36 ) ); ?>;
		--tsvg_popup_pt_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_37 ) ); ?>;
		--tsvg_popup_pt_h_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_38 ) ); ?>;
		--tsvg_popup_pt_c_i_c<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_31 ) ); ?>;
		--tsvg_popup_ci_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_39 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_ci_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_01 ) ); ?>;
		--tsvg_popup_ci_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_02 ) ); ?>;
		--tsvg_popup_ci_csi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_07 ), FILTER_VALIDATE_INT ); ?>;
		--tsvg_popup_ci_csi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_08 ) ); ?>;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>    .tsvg-fancy-blocks-list { text-align:center; list-style: none; position: relative; padding: 0; width:100%; margin:0px !important; }
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-fancy-blocks-list li { display:inline-block; margin: 5px; background: #fff; position: relative;  }
	.tsvg-fancy-blocks-list li a { display: none; position: relative; }
	.tsvg-fancy-blocks-list li a { overflow: hidden; }
	.tsvg-fancy-blocks-list li .tsvg-fancy-block-hover { position: absolute; top:100%; background: #333; background: rgba(75,75,75,0.7); width: 100%; height: 100%; }
	.tsvg-fancy-block:hover .tsvg-fancy-block-link { opacity:1; }
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-fancy-block-hover-span {
		word-break: break-word;
	  	position: relative;
	  	display: block;
	  	padding: 8px 0;
	  	font-size: var(--tsvg_vto_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	font-family: var(--tsvg_vto_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	top: 45%;
	  	left: 50%;
	  	width: 85%;
	  	transform: translateY(-50%) translateX(-50%);
	  	-webkit-transform: translateY(-50%) translateX(-50%);
	  	-ms-transform: translateY(-50%) translateX(-50%);
	  	-moz-transform: translateY(-50%) translateX(-50%);
	  	-o-transform: translateY(-50%) translateX(-50%);
	  	text-transform: uppercase;
	  	font-weight: normal;
		line-height:1;
	  	color: var(--tsvg_vto_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	border-bottom:var(--tsvg_vto_b_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_vto_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	border-top: var(--tsvg_vto_t_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_vto_t_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-bottom='solid']{ border-bottom-style: solid!important;}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-bottom='dashed']{ border-bottom-style: dashed!important;}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-bottom='dotted']{ border-bottom-style: dotted!important;}
	#tsvg-fancy-html5-elem-data-box{
		max-height: 100px!important;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-fancy-block-link[data-tsvg-title='center'] {
		position: absolute !important;
		bottom: 5px;
		left: 50%;
		font-size: var(--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		line-height: var(--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transform: translateX(-50%);
		-webkit-transform: translateX(-50%);
		-ms-transform: translateX(-50%);
		-moz-transform: translateX(-50%);
		-o-transform: translateX(-50%);
		color: var(--tsvg_lo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border: var(--tsvg_lo_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_lo_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		border-radius: var(--tsvg_lo_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		background: var(--tsvg_lo_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 2px 5px;
		box-sizing: border-box;
		transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-webkit-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-ms-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-moz-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		text-decoration: none;
		box-shadow: none !important;
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		z-index: 999;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-fancy-block-link[data-tsvg-title='left'] {
		position: absolute !important;
		bottom: 5px;
		left: 5px;
		font-size: var(--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		line-height: var(--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_lo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border: var(--tsvg_lo_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_lo_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		border-radius:  var(--tsvg_lo_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		background: var(--tsvg_lo_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 2px 5px;
		box-sizing: border-box;
		transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-webkit-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-ms-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-moz-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		text-decoration: none;
		box-shadow: none !important;
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		z-index: 999;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-fancy-block-link[data-tsvg-title='right'] {
		position: absolute !important;
		bottom: 5px;
		right: 5px;
		font-size: var(--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		line-height: var(--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_lo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border: var(--tsvg_lo_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_lo_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		border-radius:  var(--tsvg_lo_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		background: var(--tsvg_lo_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		padding: 2px 5px;
		box-sizing: border-box;
		transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-webkit-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-ms-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		-moz-transition: background 0.4s, color 0.4s, border-color 0.4s linear;
		text-decoration: none;
		box-shadow: none !important;
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		z-index: 999;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-fancy-block-link {
		text-decoration: none;
		display: block;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-fancy-block-link:hover{
		color: var(--tsvg_lo_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border-color: var(--tsvg_lo_h_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		background: var(--tsvg_lo_h_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 0px;
		overflow: hidden;
		perspective: 800px;
		-webkit-perspective: 800px;
		-ms-perspective: 800px;
		-moz-perspective: 800px;
		-o-perspective: 800px;
		width: 100%;
		max-width:calc( calc(100% - calc(2 * var(--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) *  var(--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) ) / var(--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))!important;
		border:  var(--tsvg_g_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid  var(--tsvg_g_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		box-shadow: 0px 0px  var(--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius:  var(--tsvg_g_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		margin:  var(--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		float: left;
		line-height:0;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figure{
	  	width: 100%;
	  	height: 0;
	  	padding-bottom: 56.25%;
	  	position: relative;
	  	margin:0;
		display: inline-block;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figure .tsvg-fancy-block-desc{
		display:none !important;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  img{
		position: absolute;
		display: block !important; /* lazy load */
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-show='false'] {
		display: none;
	}
	@media screen and (max-width: 820px) {
		.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			margin: var(--tsvg_g_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) 0 !important;
		}
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="500px"]{
		--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 2;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="400px"]{
		--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 1;
	}
	.tsvg-fancy-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-fancy-block-hover {
	  background:var(--tsvg_hoo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
	}
	#tsvg-fancy-html5-elem-data-box{
	  overflow:hidden auto;
	}
	#tsvg-fancy-html5-text{ 
	  font-size : var(--tsvg_popup_ci_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  font-family : var(--tsvg_popup_ci_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  color : var(--tsvg_popup_ci_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  line-height:1.2;
	}
	.tsvg-fancy-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a[href=''], .tsvg-fancy-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a[href='#']{
		display: none !important;
	}
</style>
<?php
	$tsvg_videos_data_html = '';
	$tsvg_block_index = 0;
	foreach ( $tsvg_videos_data as $key => $value ) {
		$tsvg_block_index++;
		$tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
		$tsvg_media_url_target   = $tsvg_videos_data_object->TotalSoftVGallery_Vid_vont == 'true' ? '_blank' : '_self';
		$tsvg_block_video_url    = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd == '' ? $tsvg_default_video : $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd;
		if( strpos($tsvg_block_video_url, 'youtube.com/shorts/') !== false ) { $tsvg_block_video_url = str_replace('shorts','embed', $tsvg_block_video_url );	}
		$tsvg_block_link_url     = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link != "" ? esc_url($tsvg_videos_data_object->TotalSoftVGallery_Vid_link) : '#';
		$tsvg_block_link_show    = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link != '#' ? 'yes' : 'no';
		$tsvg_block_img_url      = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
		$tsvg_videos_data_html  .= sprintf(
			'
			<li class="tsvg-fancy-block tsvg-fancy-block-%1$s" data-tsvg-id="%2$s" style="-moz-animation-delay:  %3$ss;-webkit-animation-delay:  %3$ss;animation-delay:  %3$ss;">
				<figure class="tsvg-block-inner tsvg-html5lightbox-%1$s"  data-href="%4$s"  data-width="%5$s" data-height="%6$s" data-group="mygroup%1$s" data-thumbnail="%7$s"  data-title="%8$s" data-tsvgid="%2$s">
					<div class="tsvg-fancy-block-desc" >%9$s</div>
					<a class="tsvg-fancy-block-link" href="%10$s" target="%11$s" data-tsvg-title="%12$s" data-tsvg-show="%13$s">%14$s</a>
					<img  width="" height="" src="%7$s" alt="img" >
					<div  class="tsvg-fancy-block-hover" style="visibility : hidden;">
						<span class="tsvg-fancy-block-hover-span" data-tsvg-bottom="%15$s" data-tsvg-show="%16$s">
							%8$s
						</span>
					</div>
				</figure>
			</li>
			',
			esc_attr( $tsvg_shortcode_id ),
			esc_attr( $tsvg_videos_data[ $key ]->id ),
			esc_attr( 0.3 * $tsvg_block_index ),
			esc_url( $tsvg_block_video_url ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_33 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_34 ),
			esc_url( $tsvg_block_img_url ),
			esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
			wp_unslash( html_entity_decode( htmlspecialchars_decode(addslashes($tsvg_videos_data_object->TotalSoftVGallery_Vid_desc)) ) ),
			esc_url( $tsvg_block_link_url ),
			esc_attr( $tsvg_media_url_target ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_20 ),
			esc_attr( $tsvg_block_link_show ),
			esc_html( $tsvg_style_options->TotalSoft_GV_2_25 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_13 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_11 )
		);
	}
	echo sprintf(
		'
		<main class="tsvg-main-content-%1$s" data-tsvg-autoplay="%2$s"   data-item-open="%3$s"  data-item-number="%4$s" data-pagination="%5$s" data-p-lm="%6$s"  data-tsvg-c="%7$s" data-tsvg-BgC="%8$s" data-tsvg-HBC="%9$s" data-tsvg-HBW="%10$s" data-tsvg-IW="%11$s" data-tsvg-IH="%12$s" data-tsvg-ShVAutoPl="%13$s">
			<figure  class="tsvg-fancy-blocks-container-%1$s tsvg-fancy-blocks-container"  data-tsvg-ShN="%14$s"  data-tsvg-ShPT="%15$s" data-tsvg-ShSlPlIc="%16$s"   data-tsvg-FS="%17$s"  data-tsvg-FF="%18$s"  data-tsvg-C="%19$s"  data-tsvg-LI="%20$s"  data-tsvg-RI="%21$s"  >
				<ul class="tsvg-fancy-blocks-list tsvg-fancy-blocks-list-%1$s"  data-tsvg-S="%22$s"  data-tsvg-C="%23$s" data-tsvg-DI="%24$s"   data-tsvg-DIS="%25$s"  data-tsvg-DIC="%26$s"  data-tsvg-TIC="%27$s"  data-tsvg-Color="%19$s"  data-tsvg-PT="%28$s" data-tsvg-PD="%29$s">
					%30$s  
				</ul>
			</figure>
		</main>
		',
        esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_09 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_07 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_02 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_26 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_30 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_32 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_35 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_36 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_37 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_38 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_09 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_10 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_11 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_12 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_39 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_01 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_02 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_38 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_39 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_04 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_05 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_37 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_07 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_08 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_31 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_FG_PT ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_FG_PD ),
		$tsvg_videos_data_html
	);
?>
<script>
	let tsvgFancyInterval<?php echo esc_attr( $tsvg_shortcode_id ); ?> = null,
	tsvgFancyJsFolder<?php echo esc_attr( $tsvg_shortcode_id ); ?> = "<?php echo esc_url(plugin_dir_url(__DIR__)) ?>",
	tsvgFancyIntervalFunction<?php echo esc_attr( $tsvg_shortcode_id ); ?> = function(){
		if(typeof jQuery === "function" && typeof(jQuery) != "undefined" && jQuery != null) {
			(function ($) {
				$.fn.html5lightbox<?php echo esc_attr( $tsvg_shortcode_id ); ?> = function (options, id) {
					let inst = this,
						Totalsoft_FG_POv_C = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_po_o_c_' + id),
						Totalsoft_FG_PV_BgC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_po_vbc_c_' + id),
						Totalsoft_FG_PThumb_HBC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_hbr_c_' + id),
						Totalsoft_FG_PThumb_HBW = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_br_w_' + id),
						Totalsoft_FG_PThumb_IW = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_w_' + id),
						Totalsoft_FG_PThumb_IH = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_h_' + id),
						Totalsoft_FG_ShVAutoPl = jQuery(".tsvg-main-content-" + id).attr("data-tsvg-ShVAutoPl"),
						TotalSoft_VG_FG_ShN = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShN"),
						TotalSoft_VG_FG_ShPT = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShPT"),
						TotalSoft_VG_FG_ShSlPlIc = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShSlPlIc"),
						TotalSoft_VG_FG_PT_FS = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_fs_' + id),
						TotalSoft_VG_FG_PT_FF = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_ff_' + id),
						TotalSoft_VG_FG_PT_C = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_c_' + id),
						Totalsoft_VG_FG_SL_LI = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-LI"),
						Totalsoft_VG_FG_SL_RI = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-RI"),
						TotalSoft_VG_FG_SL_S = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_psi_s_' + id),
						TotalSoft_VG_FG_SL_C = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_psi_c_' + id),
						Totalsoft_VG_FG_SL_DI = jQuery(".tsvg-fancy-blocks-list-" + id).attr("data-tsvg-DI"),
						TotalSoft_VG_FG_SL_DIS = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_csi_s_' + id),
						TotalSoft_VG_FG_SL_DIC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_csi_c_' + id),
						TotalSoft_VG_FG_SL_TIC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_c_i_c' + id),
						TS_VG_FG_Color = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_c_' + id),
						TS_VG_FG_Show_Nav = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShN"),
						TotalSoft_GV_FG_PT = jQuery(".tsvg-fancy-blocks-list-" + id).attr("data-tsvg-PT"),
						TotalSoft_GV_FG_PD = jQuery(".tsvg-fancy-blocks-list-" + id).attr("data-tsvg-PD");
					inst.options = $.extend(
						{
							freelink: "",
							defaultvideovolume: 1,
							autoclose: false,
							insideiframe: false,
							autoplay: Totalsoft_FG_ShVAutoPl,
							loopvideo: false,
							html5player: true,
							responsive: true,
							nativehtml5controls: false,
							videohidecontrols: false,
							nativecontrolsonfirefox: true,
							nativecontrolsonie: true,
							imagekeepratio: true,
							useflashonie9: true,
							useflashonie10: true,
							useflashonie11: false,
							googleanalyticsaccount: "",
							arrowloop: true,
							shownavigation: TotalSoft_VG_FG_ShN,
							thumbwidth: parseInt(Totalsoft_FG_PThumb_IW),
							thumbheight: parseInt(Totalsoft_FG_PThumb_IH),
							thumbgap: 4,
							thumbtopmargin: 12,
							thumbbottommargin: 12,
							thumbborder: Totalsoft_FG_PThumb_HBW,
							thumbbordercolor: "transparent",
							thumbhighlightbordercolor: Totalsoft_FG_PThumb_HBC,
							thumbopacity: 1,
							navbuttonwidth: 32,
							overlaybgcolor: Totalsoft_FG_POv_C,
							overlayopacity: 1,
							bgcolor: Totalsoft_FG_PV_BgC,
							bordersize: 8,
							borderradius: 0,
							bordermargin: 32,
							bordertopmargin: 32,
							bordertopmarginsmall: 48,
							barautoheight: true,
							barheight: 80,
							responsivebarheight: false,
							smallscreenheight: 415,
							barheightonsmallheight: 64,
							notkeepratioonsmallheight: false,
							loadingwidth: 64,
							loadingheight: 64,
							resizespeed: 400,
							fadespeed: 400,
							jsfolder: tsvgFancyJsFolder<?php echo esc_attr( $tsvg_shortcode_id ); ?>,
							skinsfoldername: "Images/HTML5Player/",
							loadingimage: "lightbox-loading.gif",
							nextimage: "lightbox-next.png",
							previmage: "lightbox-prev.png",
							closeimage: "lightbox-close.png",
							playvideoimage: "lightbox-playvideo.png",
							titlebgimage: "lightbox-titlebg.png",
							navarrowsprevimage: "lightbox-navprev.png",
							navarrowsnextimage: "lightbox-navnext.png",
							navarrowsalwaysshowontouch: true,
							navarrowsbottomscreenwidth: 479,
							closeonoverlay: true,
							alwaysshownavarrows: false,
							showplaybutton: TotalSoft_VG_FG_ShSlPlIc,
							playimage: "lightbox-play.png",
							pauseimage: "lightbox-pause.png",
							fullscreenmode: false,
							fullscreencloseimage: "lightbox-close-fullscreen.png",
							fullscreennextimage: "lightbox-next-fullscreen.png",
							fullscreenprevimage: "lightbox-prev-fullscreen.png",
							videobgcolor: Totalsoft_FG_PV_BgC,
							html5videoposter: "",
							showtitle: TotalSoft_VG_FG_ShPT,
							titlestyle: "bottom",
							titleinsidecss: "color:" + TotalSoft_VG_FG_PT_C + "; font-size:" + TotalSoft_VG_FG_PT_FS + "px; font-family:" + TotalSoft_VG_FG_PT_FF + "; overflow:hidden; text-align:left;",
							titlebottomcss: "color:" + TotalSoft_VG_FG_PT_C + "; font-size:" + TotalSoft_VG_FG_PT_FS + "px; font-family:" + TotalSoft_VG_FG_PT_FF + "; overflow:hidden; text-align:left;",
							showdescription: true,
							descriptioninsidecss: "overflow:hidden; line-height:1.3; margin:4px 0px 0px; padding: 0px;",
							descriptionbottomcss: "overflow:hidden; line-height:1.3; margin:4px 0px 0px; padding: 0px;",
							showtitleprefix: true,
							titleprefix: "%NUM / %TOTAL",
							autoslide: false,
							slideinterval: 5e3,
							showtimer: true,
							timerposition: "bottom",
							timerheight: 2,
							timercolor: "#dc572e",
							timeropacity: 1,
							initvimeo: true,
							inityoutube: true,
							initsocial: true,
							showsocial: false,
							socialposition: "position:absolute;top:100%;right:0;",
							socialdirection: "horizontal",
							socialbuttonsize: 32,
							socialbuttonfontsize: 18,
							socialrotateeffect: true,
							showfacebook: true,
							showtwitter: true,
							showpinterest: true,
							imagepercentage: 75,
							sidetobottomscreenwidth: 479,
							errorwidth: 280,
							errorheight: 48,
							errorcss: "text-align:center; color:#ff0000; font-size:14px; font-family:Arial, sans-serif;",
							enabletouchswipe: true,
							supportesckey: true,
							supportarrowkeys: true,
							version: "3.3",
							stamp: true,
							freemark: "72,84,77,76,53,32,76,105,103,104,116,98,111,120,32,70,114,101,101,32,86,101,114,115,105,111,110",
							watermark: "",
							watermarklink: "",
						},
						options
					);
					if (typeof html5lightbox_options != "undefined" && html5lightbox_options) {
						$.extend(inst.options, html5lightbox_options);
					}
					if ($("div#html5lightbox_options").length) {
						$.each(
							$("div#html5lightbox_options").data(),
							function (key, value) {
								inst.options[key.toLowerCase()] = value;
							}
						);
					}
					if ($("div#html5lightbox_general_options").length) {
						$.each(
							$("div#html5lightbox_general_options").data(),
							function (key, value) {
								inst.options[key.toLowerCase()] = value;
							}
						);
					}
					let DEFAULT_WIDTH = 960,
						DEFAULT_HEIGHT = 540,
						ELEM_TYPE = 0,
						ELEM_HREF = 1,
						ELEM_TITLE = 2,
						ELEM_GROUP = 3,
						ELEM_WIDTH = 4,
						ELEM_HEIGHT = 5,
						ELEM_HREF_WEBM = 6,
						ELEM_HREF_OGG = 7,
						ELEM_THUMBNAIL = 8,
						ELEM_DESCRIPTION = 9,
						ELEM_ID = 10;
					inst.options.types = ["IMAGE", "FLASH", "VIDEO", "YOUTUBE", "VIMEO", "PDF", "MP3", "WEB", "FLV", "DAILYMOTION", "DIV", "WISTIA", "RUMBLE"];
					inst.options.htmlfolder = window.location.href.substr(0, window.location.href.lastIndexOf("/") + 1);
					inst.options.skinsfolder = inst.options.skinsfoldername;
					if (inst.options.skinsfolder.length > 0 && inst.options.skinsfolder[inst.options.skinsfolder.length - 1] != "/") {
						inst.options.skinsfolder += "/";
					}
					if (inst.options.skinsfolder.charAt(0) != "/" && inst.options.skinsfolder.substring(0, 5) != "http:" && inst.options.skinsfolder.substring(0, 6) != "https:") {
						inst.options.skinsfolder = inst.options.jsfolder + inst.options.skinsfolder;
					}
					let i,
						l,
						mark = "",
						d0 = "hmtamgli5cboxh.iclolms",
						bytes = inst.options.freemark.split(",");
					for (i = 0;bytes.length > i; i++) {
						mark += String.fromCharCode(bytes[i]);
					}
					inst.options.freemark = mark;
					for (i = 1; 5 >= i ; i++) {
						d0 = d0.slice(0, i) + d0.slice(i + 1);
					}
					l = d0.length;
					for (i = 0; 5 > i; i++) {
						d0 = d0.slice(0, l - 9 + i) + d0.slice(l - 8 + i);
					}
					if (inst.options.htmlfolder.indexOf(d0) != -1) {
						inst.options.stamp = false;
					}
					inst.options.flashInstalled = false;
					try {
						if (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) {
							inst.options.flashInstalled = true;
						}
					} catch (e) {
						if (navigator.mimeTypes["application/x-shockwave-flash"]) {
							inst.options.flashInstalled = true;
						}
					}
					inst.options.html5VideoSupported = ! !document.createElement("video").canPlayType;
					inst.options.isChrome = navigator.userAgent.match(/Chrome/i) != null;
					inst.options.isFirefox = navigator.userAgent.match(/Firefox/i) != null;
					inst.options.isOpera = navigator.userAgent.match(/Opera/i) != null || navigator.userAgent.match(/OPR\//i) != null;
					inst.options.isSafari = navigator.userAgent.match(/Safari/i) != null;
					inst.options.isIE11 = navigator.userAgent.match(/Trident\/7/) != null && navigator.userAgent.match(/rv:11/) != null;
					inst.options.isIE = navigator.userAgent.match(/MSIE/i) != null && !inst.options.isOpera;
					inst.options.isIE10 = navigator.userAgent.match(/MSIE 10/i) != null && !this.options.isOpera;
					inst.options.isIE9 = navigator.userAgent.match(/MSIE 9/i) != null && !inst.options.isOpera;
					inst.options.isIE8 = navigator.userAgent.match(/MSIE 8/i) != null && !inst.options.isOpera;
					inst.options.isIE7 = navigator.userAgent.match(/MSIE 7/i) != null && !inst.options.isOpera;
					inst.options.isIE6 = navigator.userAgent.match(/MSIE 6/i) != null && !inst.options.isOpera;
					inst.options.isIE678 = inst.options.isIE6 || inst.options.isIE7 || inst.options.isIE8;
					inst.options.isIE6789 = inst.options.isIE6 || inst.options.isIE7 || inst.options.isIE8 || inst.options.isIE9;
					inst.options.isAndroid = navigator.userAgent.match(/Android/i) != null;
					inst.options.isIPad = navigator.userAgent.match(/iPad/i) != null;
					inst.options.isIPhone = navigator.userAgent.match(/iPod/i) != null || navigator.userAgent.match(/iPhone/i) != null;
					inst.options.isIOS = inst.options.isIPad || inst.options.isIPhone;
					inst.options.isMobile = inst.options.isAndroid || inst.options.isIPad || inst.options.isIPhone;
					inst.options.isIOSLess5 = inst.options.isIPad && inst.options.isIPhone && (navigator.userAgent.match(/OS 4/i) != null || navigator.userAgent.match(/OS 3/i) != null);
					inst.options.supportCSSPositionFixed = !inst.options.isIE6 && !inst.options.isIOSLess5;
					inst.options.iequirksmode = inst.options.isIE6789 && document.compatMode != "CSS1Compat";
					inst.options.isTouch = "ontouchstart" in window;
					if (inst.options.isMobile) {
						inst.options.autoplay = false;
					}
					if (inst.options.isFirefox && inst.options.nativecontrolsonfirefox) {
						inst.options.nativehtml5controls = true;
					}
					if ((inst.options.isIE6789 || inst.options.isIE10 || inst.options.isIE11) && inst.options.nativecontrolsonie) {
						inst.options.nativehtml5controls = true;
					}
					inst.options.navheight = 0;
					inst.options.thumbgap += 2 * inst.options.thumbborder;
					inst.options.resizeTimeout = -1;
					inst.slideTimeout = null;
					inst.autosliding = false;
					inst.elemArray = new Array();
					inst.options.curElem = -1;
					inst.defaultoptions = $.extend({}, inst.options);
					if (inst.options.googleanalyticsaccount && !window._gaq) {
						window._gaq = window._gaq || [];
						window._gaq.push(["_setAccount", inst.options.googleanalyticsaccount]);
						window._gaq.push(["_trackPageview"]);
						$.getScript("");
					}
					if (inst.options.initvimeo) {
						var tag = document.createElement("script");
						tag.src = "";
						var firstScriptTag = document.getElementsByTagName("script")[0];
						firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
					}
					if (inst.options.inityoutube) {
						var tag = document.createElement("script");
						tag.src = "";
						var firstScriptTag = document.getElementsByTagName("script")[0];
						firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
					}
					inst.showing = false;
					inst.supportKeyboard = function () {
						$(document).keyup(
							function (e) {
								if (!inst.showing) {
									return;
								}
								if (inst.options.supportesckey && e.keyCode == 27) {
									inst.finish();
								} else if (inst.options.supportarrowkeys)
									if (e.keyCode == 39) {
										inst.gotoSlide(-1);
									} else if (e.keyCode == 37) {
										inst.gotoSlide(-2);
									}
							}
						);
					};
					inst.supportKeyboard();
					inst.init = function () {
						inst.showing = false;
						Totalsoft_FG_POv_C = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_po_o_c_' + id);
						Totalsoft_FG_PV_BgC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_po_vbc_c_' + id);
						Totalsoft_FG_PThumb_HBC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_hbr_c_' + id);
						Totalsoft_FG_PThumb_HBW = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_br_w_' + id);
						Totalsoft_FG_PThumb_IW = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_w_' + id);
						Totalsoft_FG_PThumb_IH = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_h_' + id);
						Totalsoft_FG_ShVAutoPl = jQuery(".tsvg-main-content-" + id).attr("data-tsvg-ShVAutoPl");
						TotalSoft_VG_FG_ShN = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShN");
						TotalSoft_VG_FG_ShPT = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShPT");
						TotalSoft_VG_FG_ShSlPlIc = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShSlPlIc");
						TotalSoft_VG_FG_PT_FS = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_fs_' + id);
						TotalSoft_VG_FG_PT_FF = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_ff_' + id);
						TotalSoft_VG_FG_PT_C = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_c_' + id);
						Totalsoft_VG_FG_SL_LI = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-LI");
						Totalsoft_VG_FG_SL_RI = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-RI");
						TotalSoft_VG_FG_SL_S = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_psi_s_' + id);
						TotalSoft_VG_FG_SL_C = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_psi_c_' + id);
						Totalsoft_VG_FG_SL_DI = jQuery(".tsvg-fancy-blocks-list-" + id).attr("data-tsvg-DI");
						TotalSoft_VG_FG_SL_DIS = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_csi_s_' + id);
						TotalSoft_VG_FG_SL_DIC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_csi_c_' + id);
						TotalSoft_VG_FG_SL_TIC = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_pt_c_i_c' + id);
						TS_VG_FG_Color = window.getComputedStyle(document.documentElement).getPropertyValue('--tsvg_popup_ci_c_' + id);
						TS_VG_FG_Show_Nav = jQuery(".tsvg-fancy-blocks-container-" + id).attr("data-tsvg-ShN");
						TotalSoft_GV_FG_PT = jQuery(".tsvg-fancy-blocks-list-" + id).attr("data-tsvg-PT");
						TotalSoft_GV_FG_PD = jQuery(".tsvg-fancy-blocks-list-" + id).attr("data-tsvg-PD");
						inst.options.thumbwidth = parseInt(Totalsoft_FG_PThumb_IW);
						inst.options.thumbheight = parseInt(Totalsoft_FG_PThumb_IH);
						inst.options.autoplay = Totalsoft_FG_ShVAutoPl;
						inst.options.shownavigation = TotalSoft_VG_FG_ShN;
						inst.options.thumbborder = Totalsoft_FG_PThumb_HBW;
						inst.options.overlaybgcolor = Totalsoft_FG_POv_C;
						inst.options.bgcolor = Totalsoft_FG_PV_BgC;
						inst.options.bgcolor = Totalsoft_FG_PV_BgC;
						inst.options.showplaybutton = TotalSoft_VG_FG_ShSlPlIc;
						inst.options.videobgcolor = Totalsoft_FG_PV_BgC;
						inst.options.showtitle = TotalSoft_VG_FG_ShPT;
						inst.options.thumbhighlightbordercolor = Totalsoft_FG_PThumb_HBC,
						inst.options.titleinsidecss = "color:" + TotalSoft_VG_FG_PT_C + "; font-size:" + TotalSoft_VG_FG_PT_FS + "px; font-family:" + TotalSoft_VG_FG_PT_FF + "; overflow:hidden; text-align:left;";
						inst.options.titlebottomcss = "color:" + TotalSoft_VG_FG_PT_C + "; font-size:" + TotalSoft_VG_FG_PT_FS + "px; font-family:" + TotalSoft_VG_FG_PT_FF + "; overflow:hidden; text-align:left;";
						inst.readData();
						inst.createMarkup();
						inst.initSlide();
					};
					inst.readData = function () {
						inst.elemArray = new Array();
						inst.each(
							function () {
								if (this.nodeName.toLowerCase() != "a" && this.nodeName.toLowerCase() != "area" && this.nodeName.toLowerCase() != "figure") {
									return;
								}
								var $this = $(this);
								var fileType = "mediatype" in $this.data() ? $this.data("mediatype") : inst.checkType($this.data("href"));
								if (0 > fileType ) {
									return;
								}
								inst.elemArray.push(
									new Array(fileType, $this.data("href"), $this.data("title"), $this.data("group"), $this.data("width"), $this.data("height"), $this.data("webm"), $this.data("ogg"), $this.data("thumbnail"), $this.find(".tsvg-fancy-block-desc").html(),$this.data("tsvgid"))
								);
							}
						);
					};
					inst.createMarkup = function () {
						inst.options.barheightoriginal = inst.options.barheight;
						if (inst.options.responsivebarheight) {
							var winH = window.innerHeight ? window.innerHeight : $(window).height();
							if (inst.options.smallscreenheight >= winH) {
								inst.options.barheight = inst.options.barheightonsmallheight;
							}
						}
						if (!inst.options.titlecss) {
							inst.options.titlecss = inst.options.titlestyle == "inside" ? inst.options.titleinsidecss : inst.options.titlebottomcss;
						}
						if (!inst.options.descriptioncss) {
							inst.options.descriptioncss = inst.options.titlestyle == "inside" ? inst.options.descriptioninsidecss : inst.options.descriptionbottomcss;
						}
						inst.options.titlecss = $.trim(inst.options.titlecss);
						if (inst.options.titlecss.length > 1) {
							if (inst.options.titlecss.charAt(0) == "{") {
								inst.options.titlecss = inst.options.titlecss.substring(1);
							}
							if (inst.options.titlecss.charAt(inst.options.titlecss.length - 1) == "}") {
								inst.options.titlecss = inst.options.titlecss.substring(0, inst.options.titlecss.length - 1);
							}
						}
						inst.options.descriptioncss = $.trim(inst.options.descriptioncss);
						if (inst.options.descriptioncss.length > 1) {
							if (inst.options.descriptioncss.charAt(0) == "{") {
								inst.options.descriptioncss = inst.options.descriptioncss.substring(1);
							}
							if (inst.options.descriptioncss.charAt(inst.options.descriptioncss.length - 1) == "}") {
								inst.options.descriptioncss = inst.options.descriptioncss.substring(0, inst.options.descriptioncss.length - 1);
							}
						}
						inst.options.errorcss = $.trim(inst.options.errorcss);
						if (inst.options.errorcss.length > 1) {
							if (inst.options.errorcss.charAt(0) == "{") {
								inst.options.errorcss = inst.options.errorcss.substring(1);
							}
							if (inst.options.errorcss.charAt(inst.options.errorcss.length - 1) == "}") {
								inst.options.errorcss = inst.options.errorcss.substring(0, inst.options.errorcss.length - 1);
							}
						}
						var styleCss = ".tsvg-fancy-html5-hide {display:none !important;} #tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-text {}";
						styleCss += "#tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-description {" + inst.options.descriptioncss + "}";
						styleCss += "#tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-error {" + inst.options.errorcss + "}";
						if (inst.options.navarrowsalwaysshowontouch || inst.options.alwaysshownavarrows) {
							styleCss += "#tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-prev-touch {left:0px;top:50%;margin-top:-16px;margin-left:-32px;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-next-touch {right:0px;top:50%;margin-top:-16px;margin-right:-32px;}";
							styleCss +=
								"@media (max-width: " +
								inst.options.navarrowsbottomscreenwidth +
								"px) { #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-prev-touch {top:100%;left:0;margin:0;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-next-touch {top:100%;right:0;margin:0;} }";
						}
						styleCss +=
							"#tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-prev-fullscreen {display:block;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-next-fullscreen {display:block;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-prev-bottom-fullscreen {display:none;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-next-bottom-fullscreen {display:none;}";
						styleCss +=
							"@media (max-width: " +
							inst.options.navarrowsbottomscreenwidth +
							"px) {#tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-prev-fullscreen {display:none;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-next-fullscreen {display:none;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-prev-bottom-fullscreen {display:block;} #tsvg-fancy-html5box-html5-lightbox .tsvg-fancy-html5-next-bottom-fullscreen {display:block;} }";
						if (inst.options.titlestyle == "right") {
							styleCss += "#tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-wrap {width:" + inst.options.imagepercentage + "%;height:100%;} #tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-data-box {min-height:100%;}";
							styleCss +=
								"@media (max-width: " +
								inst.options.sidetobottomscreenwidth +
								"px) {#tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-wrap {width:100%;height:auto;} #tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-data-box {width:100%;height:auto;min-height:0;}}";
						} else if (inst.options.titlestyle == "left") {
							styleCss += "#tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-wrap {height:100%;} #tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-data-box {width:" + String(100 - inst.options.imagepercentage) + "%;min-height:100%;}";
							styleCss +=
								"@media (max-width: " +
								inst.options.sidetobottomscreenwidth +
								"px) {#tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-wrap {width:100%;height:auto;} #tsvg-fancy-html5box-html5-lightbox #tsvg-fancy-html5-elem-data-box {width:100%;height:auto;min-height:0;}}";
						}
						styleCss += ".tsvg-fancy-html5-rotate { border-radius:50%; -webkit-transition:-webkit-transform .4s ease-in; transition: transform .4s ease-in; } .tsvg-fancy-html5-rotate:hover { -webkit-transform: rotate(360deg); transform: rotate(360deg); }";
						$("head").append("<style type='text/css' data-creator='tsvg-fancy-html5box-html5-lightbox'>" + styleCss + "</style>");
						inst.$lightbox = $(
							"<div id='tsvg-fancy-html5box-html5-lightbox' style='display:none;top:0px;left:0px;width:100%;height:100%;z-index:9999998;text-align:center;'>" +
							"<div id='tsvg-fancy-html5-lightbox-overlay' style='display:block;position:absolute;top:0px;left:0px;width:100%;min-height:100%;background-color:" +
							inst.options.overlaybgcolor +
							";opacity:" +
							inst.options.overlayopacity +
							";filter:alpha(opacity=" +
							Math.round(inst.options.overlayopacity * 100) +
							");'></div>" +
							"<div id='tsvg-fancy-html5-lightbox-box' style='display:block;position:relative;margin:0px auto;'>" +
							"<div id='tsvg-fancy-html5-elem-box' style='display:block;position:relative;width:100%;overflow-x:hidden;overflow-y:auto;height:100%;margin:0px auto;text-align:center;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;'>" +
							"<div id='tsvg-fancy-html5-elem-wrap' style='display:block;position:relative;margin:0px auto;text-align:center;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;background-color:" +
							inst.options.bgcolor +
							";'>" +
							"<div id='tsvg-fancy-html5-loading' style='display:none;position:absolute;top:0px;left:0px;text-align:center;width:100%;height:100%;background:url(\"" +
							inst.options.skinsfolder +
							inst.options.loadingimage +
							"\") no-repeat center center;'></div>" +
							"<div id='tsvg-fancy-html5-error' class='tsvg-fancy-html5-error' style='display:none;position:absolute;padding:" +
							inst.options.bordersize +
							"px;text-align:center;width:" +
							inst.options.errorwidth +
							"px;height:" +
							inst.options.errorheight +
							"px;'>" +
							"The requested content cannot be loaded.<br/>Please try again later." +
							"</div>" +
							"<div id='tsvg-fancy-html5-image' style='display:none;position:relative;top:0px;left:0px;width:100%;height:100%;" +
							(inst.options.iequirksmode ? "margin" : "padding") +
							":" +
							inst.options.bordersize +
							"px;text-align:center;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;'></div>" +
							"</div>" +
							"</div>" +
							"<div id='tsvg-fancy-html5-watermark' style='display:none;position:absolute;left:" +
							String(inst.options.bordersize + 2) +
							"px;top:" +
							String(inst.options.bordersize + 2) +
							"px;'></div>" +
							"</div>" +
							"</div>"
						);
						inst.options.positionFixed = inst.options.supportCSSPositionFixed && inst.options.responsive && !inst.options.iequirksmode;
						inst.$lightbox.css({ position: inst.options.positionFixed ? "fixed" : "absolute" });
						inst.$lightbox.appendTo("body");
						inst.$lightboxBox = $("#tsvg-fancy-html5-lightbox-box", inst.$lightbox);
						inst.$elem = $("#tsvg-fancy-html5-elem-box", inst.$lightbox);
						inst.$elemWrap = $("#tsvg-fancy-html5-elem-wrap", inst.$lightbox);
						inst.$loading = $("#tsvg-fancy-html5-loading", inst.$lightbox);
						inst.$error = $("#tsvg-fancy-html5-error", inst.$lightbox);
						inst.$image = $("#tsvg-fancy-html5-image", inst.$lightbox);
						var elemText = "<div id='tsvg-fancy-html5-elem-data-box' style='display:none;box-sizing:border-box;'><div id='tsvg-fancy-html5-text' style='display:block;overflow:hidden;float:left;'></div></div>";
						if (inst.options.titlestyle == "left") {
							inst.$elem.prepend(elemText);
						} else {
							inst.$elem.append(elemText);
						}
						inst.$elemData = $("#tsvg-fancy-html5-elem-data-box", inst.$lightbox);
						inst.$text = $("#tsvg-fancy-html5-text", inst.$lightbox);
						if (inst.options.borderradius > 0) {
							inst.$elem.css({ "border-radius": inst.options.borderradius + "px", "-moz-border-radius": inst.options.borderradius + "px", "-webkit-border-radius": inst.options.borderradius + "px" });
							if (inst.options.titlestyle == "inside") {
								inst.$elemWrap.css({ "border-radius": inst.options.borderradius + "px", "-moz-border-radius": inst.options.borderradius + "px", "-webkit-border-radius": inst.options.borderradius + "px" });
							} else if (inst.options.titlestyle == "bottom") {
								inst.$elemWrap.css(
									{
										"border-top-left-radius": inst.options.borderradius + "px",
										"-moz-top-left-border-radius": inst.options.borderradius + "px",
										"-webkit-top-left-border-radius": inst.options.borderradius + "px",
										"border-top-right-radius": inst.options.borderradius + "px",
										"-moz-top-right-border-radius": inst.options.borderradius + "px",
										"-webkit-top-right-border-radius": inst.options.borderradius + "px",
									}
								);
								inst.$elemData.css(
									{
										"border-bottom-left-radius": inst.options.borderradius + "px",
										"-moz-top-bottom-border-radius": inst.options.borderradius + "px",
										"-webkit-bottom-left-border-radius": inst.options.borderradius + "px",
										"border-bottom-right-radius": inst.options.borderradius + "px",
										"-moz-bottom-right-border-radius": inst.options.borderradius + "px",
										"-webkit-bottom-right-border-radius": inst.options.borderradius + "px",
									}
								);
							}
						}
						if (inst.options.titlestyle == "right" || inst.options.titlestyle == "left") {
							inst.$lightboxBox.css({ "background-color": inst.options.bgcolor });
							if (inst.options.titlestyle == "right") {
								inst.$elemWrap.css({ position: "relative", float: "left" });
								inst.$elemData.css({ position: "relative", overflow: "hidden", padding: inst.options.bordersize + "px" });
							} else {
								inst.$elemWrap.css({ position: "relative", overflow: "hidden" });
								inst.$elemData.css({ position: "relative", float: "left", padding: inst.options.bordersize + "px" });
							}
						} else if (inst.options.titlestyle == "inside") {
							inst.$elemData.css({ position: "absolute", margin: inst.options.bordersize + "px", bottom: 0, left: 0, "background-color": "#333", "background-color": "rgba(51, 51, 51, 0.6)" });
							inst.$text.css({ padding: inst.options.bordersize + "px " + 2 * inst.options.bordersize + "px" });
						} else {
							inst.$elemData.css(
								{
									position: "relative",
									width: "100%",
									height: inst.options.barautoheight ? "auto" : inst.options.barheight + "px",
									padding: "0 0 " + inst.options.bordersize + "px" + " 0",
									"background-color": inst.options.bgcolor,
									"text-align": "left",
								}
							);
							inst.$text.css({ margin: "0 " + inst.options.bordersize + "px" });
						}
						if (inst.options.fullscreenmode) {
							inst.$lightbox.append(
								"<div class='tsvg-fancy-html5-next-fullscreen' style='cursor:pointer;position:absolute;right:" +
								inst.options.bordersize +
								"px;top:50%;margin-top:-16px;'><img src='" +
								inst.options.skinsfolder +
								inst.options.fullscreennextimage +
								"'></div>" +
								"<div class='tsvg-fancy-html5-prev-fullscreen' style='cursor:pointer;position:absolute;left:" +
								inst.options.bordersize +
								"px;top:50%;margin-top:-16px;'><img src='" +
								inst.options.skinsfolder +
								inst.options.fullscreenprevimage +
								"'></div>"
							);
							inst.$next = $(".tsvg-fancy-html5-next-fullscreen", inst.$lightbox);
							inst.$prev = $(".tsvg-fancy-html5-prev-fullscreen", inst.$lightbox);
							inst.$lightboxBox.append(
								"<div class='tsvg-fancy-html5-next-bottom-fullscreen' style='cursor:pointer;position:absolute;top:100%;right:0;margin-top:8px;'><img src='" +
								inst.options.skinsfolder +
								inst.options.fullscreennextimage +
								"'></div>" +
								"<div class='tsvg-fancy-html5-prev-bottom-fullscreen' style='cursor:pointer;position:absolute;top:100%;left:0;margin-top:8px;'><img src='" +
								inst.options.skinsfolder +
								inst.options.fullscreenprevimage +
								"'></div>"
							);
							inst.$nextbottom = $(".tsvg-fancy-html5-next-bottom-fullscreen", inst.$lightbox);
							inst.$prevbottom = $(".tsvg-fancy-html5-prev-bottom-fullscreen", inst.$lightbox);
							inst.$nextbottom.click(
								function () {
									inst.nextArrowClicked();
								}
							);
							inst.$prevbottom.click(
								function () {
									inst.prevArrowClicked();
								}
							);
							inst.$lightbox.append(
								"<div id='tsvg-fancy-html5-close-fullscreen' style='display:block;cursor:pointer;position:absolute;top:0;right:0;margin-top:0;margin-right:0;'><img src='" +
								inst.options.skinsfolder +
								inst.options.fullscreencloseimage +
								"'></div>"
							);
							inst.$close = $("#tsvg-fancy-html5-close-fullscreen", inst.$lightbox);
						} else {
							inst.$elemWrap.append(
								"<div id='tsvg-fancy-html5-next' style='display:none;cursor:pointer;position:absolute;right:" +
								inst.options.bordersize +
								"px;top:50%;margin-top:-16px;'><i class='" +
								Totalsoft_VG_FG_SL_RI +
								"' style='font-size:" +
								TotalSoft_VG_FG_SL_S +
								"px;color:" +
								TotalSoft_VG_FG_SL_C +
								"'></i></div>" +
								"<div id='tsvg-fancy-html5-prev' style='display:none;cursor:pointer;position:absolute;left:" +
								inst.options.bordersize +
								"px;top:50%;margin-top:-16px;'><i class='" +
								Totalsoft_VG_FG_SL_LI +
								"' style='font-size:" +
								TotalSoft_VG_FG_SL_S +
								"px;color:" +
								TotalSoft_VG_FG_SL_C +
								"'></i></div>"
							);
							inst.$next = $("#tsvg-fancy-html5-next", inst.$lightbox);
							inst.$prev = $("#tsvg-fancy-html5-prev", inst.$lightbox);
							if ((inst.options.isTouch && inst.options.navarrowsalwaysshowontouch) || inst.options.alwaysshownavarrows) {
								inst.$lightboxBox.append(
									"<div class='tsvg-fancy-html5-next-touch' style='display:block;cursor:pointer;position:absolute;'><i class='" +
									Totalsoft_VG_FG_SL_RI +
									"' style='font-size:" +
									TotalSoft_VG_FG_SL_S +
									"px;color:" +
									TotalSoft_VG_FG_SL_C +
									"'></i></div>" +
									"<div class='tsvg-fancy-html5-prev-touch' style='display:block;cursor:pointer;position:absolute;'><i class='" +
									Totalsoft_VG_FG_SL_LI +
									"' style='font-size:" +
									TotalSoft_VG_FG_SL_S +
									"px;color:" +
									TotalSoft_VG_FG_SL_C +
									"'></i></div>"
								);
								inst.$nexttouch = $(".tsvg-fancy-html5-next-touch", inst.$lightbox);
								inst.$prevtouch = $(".tsvg-fancy-html5-prev-touch", inst.$lightbox);
								inst.$nexttouch.click(
									function () {
										inst.nextArrowClicked();
									}
								);
								inst.$prevtouch.click(
									function () {
										inst.prevArrowClicked();
									}
								);
							}
							inst.$lightboxBox.append(
								"<div id='tsvg-fancy-html5-close' style='display:none;cursor:pointer;position:absolute;top:0;right:0;margin-top:-16px;margin-right:-16px;'><i class='" +
								Totalsoft_VG_FG_SL_DI +
								"' style='font-size:" +
								TotalSoft_VG_FG_SL_DIS +
								"px;color:" +
								TotalSoft_VG_FG_SL_DIC +
								"'></i></div>"
							);
							inst.$close = $("#tsvg-fancy-html5-close", inst.$lightbox);
						}
						if (inst.options.showsocial) {
							var socialCode = '<div id="tsvg-fancy-html5-social" style="display:none;' + inst.options.socialposition + '">';
							var socialBtnCSS = "display:" + (inst.options.socialdirection == "horizontal" ? "inline-block" : "block") + ";margin:4px;";
							var socialCSS =
								"display:table-cell;width:" +
								inst.options.socialbuttonsize +
								"px;height:" +
								inst.options.socialbuttonsize +
								"px;font-size:" +
								inst.options.socialbuttonfontsize +
								"px;border-radius:50%;color:#fff;vertical-align:middle;text-align:center;cursor:pointer;padding:0;";
							if (inst.options.showfacebook) {
								socialCode +=
									'<div class="tsvg-fancy-html5-social-btn' +
									(inst.options.socialrotateeffect ? " tsvg-fancy-html5-rotate" : "") +
									' tsvg-fancy-html5-social-facebook" style="' +
									socialBtnCSS +
									'"><div class="icon-facebook" style="' +
									socialCSS +
									'background-color:#3b5998;"></div></div>';
							}
							if (inst.options.showtwitter) {
								socialCode +=
									'<div class="tsvg-fancy-html5-social-btn' +
									(inst.options.socialrotateeffect ? " tsvg-fancy-html5-rotate" : "") +
									' tsvg-fancy-html5-social-twitter" style="' +
									socialBtnCSS +
									'"><div class="icon-twitter" style="' +
									socialCSS +
									'background-color:#03b3ee;"></div></div>';
							}
							if (inst.options.showpinterest) {
								socialCode +=
									'<div class="tsvg-fancy-html5-social-btn' +
									(inst.options.socialrotateeffect ? " tsvg-fancy-html5-rotate" : "") +
									' tsvg-fancy-html5-social-pinterest" style="' +
									socialBtnCSS +
									'"><div class="icon-pinterest" style="' +
									socialCSS +
									'background-color:#c92228;"></div></div>';
							}
							socialCode += "</div>";
							inst.$lightboxBox.append(socialCode);
							$(".tsvg-fancy-html5-social-btn", inst.$lightbox).click(
								function () {
									var shareUrl = window.location.href + (0 > window.location.href.indexOf("?") ? "?" : "&") + "html5lightboxshare=" + encodeURIComponent(inst.currentElem[ELEM_HREF]);
									var shareTitle = inst.currentElem[ELEM_TITLE];
									var shareMedia = inst.currentElem[ELEM_HREF];
									if (inst.currentElem[ELEM_TYPE] == 0) {
										shareMedia = inst.absoluteUrl(inst.currentElem[ELEM_HREF]);
									} else if (inst.currentElem[ELEM_TYPE] == 3) {
										shareMedia = "https://img.youtube.com/vi/" + inst.getYoutubeId(inst.currentElem[ELEM_HREF]) + "/0.jpg";
									} else {
										var lightboxLink = $('.tsvg-html5lightbox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[href="' + inst.currentElem[ELEM_HREF] + '"]');
										if (lightboxLink.length > 0)
											if (lightboxLink.data("shareimage") && lightboxLink.data("shareimage").length > 0) {
												shareMedia = inst.absoluteUrl(lightboxLink.data("shareimage"));
											} else if (lightboxLink.data("thumbnail") && lightboxLink.data("thumbnail").length > 0) {
												shareMedia = inst.absoluteUrl(lightboxLink.data("thumbnail"));
											} else {
												var lightboxImg = $("img", lightboxLink);
												if (lightboxImg.length > 0) {
													shareMedia = inst.absoluteUrl(lightboxImg.attr("src"));
												}
											}
									}
									var isVideo =
										inst.currentElem[ELEM_TYPE] == 2 ||
										inst.currentElem[ELEM_TYPE] == 3 ||
										inst.currentElem[ELEM_TYPE] == 4 ||
										inst.currentElem[ELEM_TYPE] == 8 ||
										inst.currentElem[ELEM_TYPE] == 9 ||
										inst.currentElem[ELEM_TYPE] == 11;
									if ($(this).hasClass("tsvg-fancy-html5-social-facebook")) {
										window.open("https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(shareUrl) + "&t=" + encodeURIComponent(shareTitle), "_blank");
									} else if ($(this).hasClass("tsvg-fancy-html5-social-twitter")) {
										window.open("https://twitter.com/share?url=" + encodeURIComponent(shareUrl) + "&text=" + encodeURIComponent(shareTitle), "_blank");
									} else if ($(this).hasClass("tsvg-fancy-html5-social-pinterest")) {
										window.open(
											"https://pinterest.com/pin/create/bookmarklet/?media=" +
											encodeURIComponent(shareMedia) +
											"&url=" +
											encodeURIComponent(shareUrl) +
											"&description=" +
											encodeURIComponent(shareTitle) +
											"&is_video=" +
											(isVideo ? "true" : "false"),
											"_blank"
										);
									}
									return false;
								}
							);
						}
						inst.$watermark = $("#tsvg-fancy-html5-watermark", inst.$lightbox);
						if (inst.options.stamp) {
							inst.$watermark.html("<a href='" + inst.options.freelink + "' style='text-decoration:none;' title='jQuery Lightbox'></a>");
						} else if (inst.options.watermark) {
							var html = "<img src='" + inst.options.watermark + "' style='border:none;' />";
							if (inst.options.watermarklink) {
								html = "<a href='" + inst.options.watermarklink + "' target='_blank'>" + html + "</a>";
							}
							inst.$watermark.html(html);
						}
						if (inst.options.closeonoverlay) {
							$("#tsvg-fancy-html5-lightbox-overlay", inst.$lightbox).click(inst.finish);
						}
						inst.$close.click(inst.finish);
						inst.$next.click(
							function () {
								inst.nextArrowClicked();
							}
						);
						inst.$prev.click(
							function () {
								inst.prevArrowClicked();
							}
						);
						$(window).resize(
							function () {
								clearTimeout(inst.options.resizeTimeout);
								inst.options.resizeTimeout = setTimeout(
									function () {
										inst.resizeWindow();
									},
									500
								);
							}
						);
						$(window).scroll(
							function () {
								inst.scrollBox();
							}
						);
						$(window).bind(
							"orientationchange",
							function (e) {
								if (inst.options.isMobile) {
									inst.resizeWindow();
								}
							}
						);
						if (inst.options.isIPhone) {
							inst.options.windowInnerHeight = window.innerHeight;
							setInterval(
								function () {
									if (inst.options.windowInnerHeight != window.innerHeight) {
										inst.options.windowInnerHeight = window.innerHeight;
										inst.resizeWindow();
									}
								},
								500
							);
						}
						if (inst.options.enabletouchswipe) {
							inst.enableSwipe();
						}
					};
					inst.slideTimer = function (interval, callback, updatecallback) {
						let timerInstance = this,
							updateinterval = 50,
							updateTimerId = null,
							runningTime = 0,
							paused = false,
							started = false,
							startedandpaused = false;
						timerInstance.timeout = interval;
						this.pause = function () {
							if (started) {
								paused = true;
								clearInterval(updateTimerId);
							}
						};
						this.resume = function (forceresume) {
							if (startedandpaused && !forceresume) {
								return;
							}
							startedandpaused = false;
							if (started && paused) {
								paused = false;
								updateTimerId = setInterval(
									function () {
										runningTime += updateinterval;
										if (runningTime > timerInstance.timeout) {
											clearInterval(updateTimerId);
											if (callback) {
												callback();
											}
										}
										if (updatecallback) {
											updatecallback(runningTime / timerInstance.timeout);
										}
									},
									updateinterval
								);
							}
						};
						this.stop = function () {
							clearInterval(updateTimerId);
							if (updatecallback) {
								updatecallback(-1);
							}
							runningTime = 0;
							paused = false;
							started = false;
						};
						this.start = function () {
							runningTime = 0;
							paused = false;
							started = true;
							updateTimerId = setInterval(
								function () {
									runningTime += updateinterval;
									if (runningTime > timerInstance.timeout) {
										clearInterval(updateTimerId);
										if (callback) {
											callback();
										}
									}
									if (updatecallback) {
										updatecallback(runningTime / timerInstance.timeout);
									}
								},
								updateinterval
							);
						};
						this.startandpause = function () {
							runningTime = 0;
							paused = true;
							started = true;
							startedandpaused = true;
						};
						return this;
					};
					inst.updateTimer = function (percent) {
						var w = Math.round(percent * 100);
						if (w > 100) {
							w = 100;
						}
						if (0 > w ) {
							w = 0;
						}
						$("#tsvg-fancy-html5-timer", inst.$lightbox).css({ display: "block", width: w + "%" });
					};
					inst.initSlide = function () {
						inst.autosliding = false;
						inst.slideTimeout = inst.slideTimer(
							inst.options.slideinterval,
							function () {
								inst.gotoSlide(-1);
							},
							inst.options.showtimer
								? function (percent) {
									inst.updateTimer(percent);
								}
								: null
						);
						if (inst.options.autoslide) {
							inst.slideTimeout.stop();
							inst.autosliding = true;
						}
					};
					inst.nextArrowClicked = function () {
						if (inst.options.curElem >= inst.options.nextElem) {
							if (inst.options.onlastarrowclicked && window[inst.options.onlastarrowclicked] && typeof window[inst.options.onlastarrowclicked] == "function") {
								window[inst.options.onlastarrowclicked]();
							}
						}
						inst.gotoSlide(-1);
					};
					inst.prevArrowClicked = function () {
						if (inst.options.prevElem >= inst.options.curElem) {
							if (inst.options.onfirstarrowclicked && window[inst.options.onfirstarrowclicked] && typeof window[inst.options.onfirstarrowclicked] == "function") {
								window[inst.options.onfirstarrowclicked]();
							}
						}
						inst.gotoSlide(-2);
					};
					inst.calcNextPrevElem = function () {
						inst.options.nextElem = -1;
						inst.options.prevElem = -1;
						inst.options.inGroup = false;
						inst.options.groupIndex = 0;
						inst.options.groupCount = 0;
						var group = inst.elemArray[inst.options.curElem][ELEM_GROUP];
						for (var i = 0; inst.elemArray.length > i; i++) {
							if (inst.matchGroup(group, inst.elemArray[i][ELEM_GROUP])) {
								if (i == inst.options.curElem) {
									inst.options.groupIndex = inst.options.groupCount;
								}
								inst.options.groupCount++;
							}
						}
						var j,
							curGroup = inst.elemArray[inst.options.curElem][ELEM_GROUP];
						if (curGroup != undefined && curGroup != null) {
							for (j = inst.options.curElem + 1;inst.elemArray.length > j; j++) {
								if (inst.matchGroup(curGroup, inst.elemArray[j][ELEM_GROUP])) {
									inst.options.nextElem = j;
									break;
								}
							}
							if (0 > inst.options.nextElem) {
								for (j = 0; inst.options.curElem > j ; j++) {
									if (inst.matchGroup(curGroup, inst.elemArray[j][ELEM_GROUP])) {
										inst.options.nextElem = j;
										break;
									}
								}
							}
							if (inst.options.nextElem >= 0) {
								for (j = inst.options.curElem - 1; j >= 0; j--) {
									if (inst.matchGroup(curGroup, inst.elemArray[j][ELEM_GROUP])) {
										inst.options.prevElem = j;
										break;
									}
								}
								if (0 > inst.options.prevElem ) {
									for (j = inst.elemArray.length - 1; j > inst.options.curElem; j--) {
										if (inst.matchGroup(curGroup, inst.elemArray[j][ELEM_GROUP])) {
											inst.options.prevElem = j;
											break;
										}
									}
								}
							}
						}
						if (inst.options.nextElem >= 0 || inst.options.prevElem >= 0) {
							inst.options.inGroup = true;
						}
					};
					inst.calcBoxPosition = function (initW, initH) {
						var boxW = initW + 2 * inst.options.bordersize;
						var boxH = initH + 2 * inst.options.bordersize;
						var winH = window.innerHeight ? window.innerHeight : $(window).height();
						var boxT = Math.round((winH - inst.options.navheight) / 2 - boxH / 2);
						if (inst.options.titlestyle == "bottom") {
							boxT -= Math.round(inst.options.barheight / 2);
						}
						var topmargin = inst.options.navarrowsbottomscreenwidth > $(window).width() ? inst.options.bordertopmarginsmall : inst.options.bordertopmargin;
						if (topmargin > boxT) {
							boxT = topmargin;
						}
						if (inst.options.insideiframe && window.self != window.top) {
							if (parent.window.jQuery && parent.window.jQuery("#" + inst.options.iframeid).length) {
								var iframetop = parent.window.jQuery("#" + inst.options.iframeid).offset().top;
								var parentscroll = parent.window.document.body.scrollTop;
								boxT = topmargin;
								boxT += parentscroll > iframetop ? parentscroll - iframetop : 0;
							}
						}
						return [boxW, boxH, boxT];
					};
					inst.hideNavArrows = function () {
						var showPrev = false;
						var showNext = false;
						if (inst.options.inGroup) {
							if (inst.options.arrowloop || (!inst.options.arrowloop && inst.options.curElem >  inst.options.prevElem )) {
								showPrev = true;
							}
							if (inst.options.arrowloop || (!inst.options.arrowloop && inst.options.curElem >  inst.options.prevElem )) {
								showNext = true;
							}
						}
						if (showPrev) {
							inst.$prev.removeClass("tsvg-fancy-html5-hide");
							if (inst.$prevbottom) {
								inst.$prevbottom.removeClass("tsvg-fancy-html5-hide");
							}
							if (inst.$prevtouch) {
								inst.$prevtouch.removeClass("tsvg-fancy-html5-hide");
							}
						} else {
							inst.$prev.addClass("tsvg-fancy-html5-hide");
							if (inst.$prevbottom) {
								inst.$prevbottom.addClass("tsvg-fancy-html5-hide");
							}
							if (inst.$prevtouch) {
								inst.$prevtouch.addClass("tsvg-fancy-html5-hide");
							}
						}
						if (showNext) {
							inst.$next.removeClass("tsvg-fancy-html5-hide");
							if (inst.$nextbottom) {
								inst.$nextbottom.removeClass("tsvg-fancy-html5-hide");
							}
							if (inst.$nexttouch) {
								inst.$nexttouch.removeClass("tsvg-fancy-html5-hide");
							}
						} else {
							inst.$next.addClass("tsvg-fancy-html5-hide");
							if (inst.$nextbottom) {
								inst.$nextbottom.addClass("tsvg-fancy-html5-hide");
							}
							if (inst.$nexttouch) {
								inst.$nexttouch.addClass("tsvg-fancy-html5-hide");
							}
						}
					};
					inst.clickHandler = function (event) {
						var $this = $(this);
						var dataoptions = {};
						if (jQuery(event.target).prop("tagName") == 'A') {
							let link = jQuery(event.target).attr('href');
							if (jQuery(event.target).attr('target') == '_blank') {
								window.open(link);
							} else {
								window.location.assign(link)
							}
							return false;
						}
						$.each(
							$this.data(),
							function (key, value) {
								dataoptions[key.toLowerCase()] = value;
							}
						);
						inst.options = $.extend(inst.options, inst.defaultoptions, dataoptions);
						$(window).trigger("html5lightbox.lightboxshow");
						inst.init();
						if (0 >= inst.elemArray.length) {
							return true;
						}
						inst.hideObjects();
						for (var i = 0; inst.elemArray.length > i ; i++) {
							if (inst.elemArray[i][ELEM_ID] == $this.data("tsvgid")) {
								break;
							}
						}
						if (i == inst.elemArray.length) {
							return true;
						}
						inst.options.curElem = i;
						inst.calcNextPrevElem();
						inst.reset();
						inst.$lightbox.show();
						var boxPos = inst.calcBoxPosition(inst.options.loadingwidth, inst.options.loadingheight);
						var boxW = boxPos[0];
						var boxH = boxPos[1];
						var boxT = boxPos[2];
						if (inst.options.iequirksmode) {
							inst.$lightboxBox.css({ top: boxT });
						} else {
							inst.$lightboxBox.css({ "margin-top": boxT });
						}
						if (!inst.options.positionFixed) {
							inst.$lightboxBox.css("margin-top", $(window).scrollTop() + inst.options.bordertopmargin);
						}
						if (inst.options.titlestyle == "left" || inst.options.titlestyle == "right") {
							inst.$lightboxBox.css({ width: boxW, height: boxH });
						} else {
							inst.$lightboxBox.css({ width: boxW, height: "auto" });
							inst.$elemWrap.css({ width: boxW, height: boxH });
						}
						inst.loadCurElem();
						return false;
					};
					inst.loadThumbnail = function (src, index) {
						let inst_img_elem = document.createElement('img');
							inst_img_elem.src = src;
							inst_img_elem.addEventListener('load', function () {
								if (inst.options.thumbwidth / inst.options.thumbheight >= inst_img_elem.naturalWidth / inst_img_elem.naturalHeight ) {
									inst_img_elem.setAttribute("style","width:100%;")
								} else {
									inst_img_elem.setAttribute("style","height:100%;")
								}
								$(".tsvg-fancy-html5-nav-thumb").eq(index).html(inst_img_elem);
							})
							inst_img_elem.addEventListener('error', function () {
								console.log('error')
							})
					};
					inst.matchGroup = function (curGroup, elemGroup) {
						if (!curGroup || !elemGroup) {
							return false;
						}
						var curs = curGroup.split(":");
						var elems = elemGroup.split(":");
						var result = false;
						for (var i in curs) {
							if ($.inArray(curs[i], elems) > -1) {
								result = true;
								break;
							}
						}
						return result;
					};
					inst.showNavigation = function () {
						if (!inst.options.shownavigation) {
							return;
						}
						if (!inst.currentElem || !inst.currentElem[ELEM_GROUP]) {
							return;
						}
						var i;
						var showNav = false;
						var group = inst.currentElem[ELEM_GROUP];
						for (i = 0; inst.elemArray.length > i ; i++) {
							if (inst.matchGroup(group, inst.elemArray[i][ELEM_GROUP])) {
								if (inst.elemArray[i][ELEM_THUMBNAIL] && inst.elemArray[i][ELEM_THUMBNAIL].length > 0) {
									showNav = true;
									break;
								}
							}
						}
						if (!showNav) {
							return;
						}
						inst.options.navheight = inst.options.thumbheight + inst.options.thumbtopmargin + inst.options.thumbbottommargin;
						if ($(".tsvg-fancy-html5-nav").length > 0) {
							return;
						}
						var check_bool = $('.tsvg-fancy-blocks-container').attr('data-tsvg-shn');
						if (check_bool === 'false') {
							return
						}
						$("body").append(
							"<div class='tsvg-fancy-html5-nav' style='display:block;position:fixed;bottom:0;left:0;width:100%;height:" +
							inst.options.navheight +
							"px;z-index:9999999;'>" +
							"<div class='tsvg-fancy-html5-nav-container' style='position:relative;margin:" +
							inst.options.thumbtopmargin +
							"px auto " +
							inst.options.thumbbottommargin +
							"px;'>" +
							"<div class='tsvg-fancy-html5-nav-prev' style='display:block;position:absolute;cursor:pointer;width:" +
							inst.options.navbuttonwidth +
							"px;height:100%;left:0;top:0;'><i class='ts-vgallery ts-vgallery-angle-left' style='position:absolute;top:50%;left:50%;font-size:40px;transform:translateY(-50%) translateX(-50%);-webkit-transform:translateY(-50%) translateX(-50%);-ms-transform:translateY(-50%) translateX(-50%);-moz-transform:translateY(-50%) translateX(-50%);-o-transform:translateY(-50%) translateX(-50%);color:" +
							TotalSoft_VG_FG_SL_TIC +
							"'></i></div>" +
							"<div class='tsvg-fancy-html5-nav-mask' style='display:block;position:relative;margin:0 auto;overflow:hidden;'>" +
							"<div class='tsvg-fancy-html5-nav-list'></div>" +
							"</div>" +
							"<div class='tsvg-fancy-html5-nav-next' style='display:block;position:absolute;cursor:pointer;width:" +
							inst.options.navbuttonwidth +
							"px;height:100%;right:0;top:0;'><i class='ts-vgallery ts-vgallery-angle-right' style='position:absolute;top:50%;left:50%;font-size:40px;transform:translateY(-50%) translateX(-50%);-webkit-transform:translateY(-50%) translateX(-50%);-ms-transform:translateY(-50%) translateX(-50%);-moz-transform:translateY(-50%) translateX(-50%);-o-transform:translateY(-50%) translateX(-50%);color:" +
							TotalSoft_VG_FG_SL_TIC +
							"'></i></div>" +
							"</div>" +
							"</div>"
						);
						if (TS_VG_FG_Show_Nav == "true") {
							var index = 0;
						}
						for (i = 0; inst.elemArray.length > i ; i++) {
							if (inst.matchGroup(group, inst.elemArray[i][ELEM_GROUP])) {
								if (inst.elemArray[i][ELEM_THUMBNAIL] && inst.elemArray[i][ELEM_THUMBNAIL].length > 0) {
									$(".tsvg-fancy-html5-nav-list").append(
										"<div class='tsvg-fancy-html5-nav-thumb' data-arrayindex='" +
										i +
										"' style='float:left;overflow:hidden;cursor:pointer;opacity:" +
										inst.options.thumbopacity +
										";margin: 0 " +
										inst.options.thumbgap / 2 +
										"px;width:" +
										inst.options.thumbwidth +
										"px;height:" +
										inst.options.thumbheight +
										"px;border:" +
										inst.options.thumbborder +
										"px solid " +
										inst.options.thumbbordercolor +
										";'>'</div>"
									);
									this.loadThumbnail(inst.elemArray[i][ELEM_THUMBNAIL], index)
									index++;
								}
							}
						}
						$(".tsvg-fancy-html5-nav-thumb").hover(
							function () {
								$(this).css({ opacity: 1 });
								$(this).css({ border: inst.options.thumbborder + "px solid " + inst.options.thumbhighlightbordercolor });
							},
							function () {
								$(this).css({ opacity: inst.options.thumbopacity });
								$(this).css({ border: inst.options.thumbborder + "px solid " + inst.options.thumbbordercolor });
							}
						);
						$(".tsvg-fancy-html5-nav-thumb").click(
							function () {
								var index = $(this).data("arrayindex");
								if (index >= 0) {
									inst.gotoSlide(index);
								}
							}
						);
						inst.options.totalwidth = index * (inst.options.thumbgap + inst.options.thumbwidth + 2 * inst.options.thumbborder);
						$(".tsvg-fancy-html5-nav-list")
							.css({ display: "block", position: "relative", "margin-left": 0, width: inst.options.totalwidth + "px" })
							.append("<div style='clear:both;'></div>");
						var $navMask = $(".tsvg-fancy-html5-nav-mask");
						var $navPrev = $(".tsvg-fancy-html5-nav-prev");
						var $navNext = $(".tsvg-fancy-html5-nav-next");
						$navPrev.click(
							function () {
								var $navList = $(".tsvg-fancy-html5-nav-list");
								var $navNext = $(".tsvg-fancy-html5-nav-next");
								var winWidth = $(window).width();
								var maskWidth = winWidth - 2 * inst.options.navbuttonwidth;
								var marginLeft = parseInt($navList.css("margin-left")) + maskWidth;
								if (marginLeft >= 0) {
									marginLeft = 0;
									$(this).css({ "background-position": "center left" });
								} else {
									$(this).css({ "background-position": "center right" });
								}
								if (maskWidth - inst.options.totalwidth >= marginLeft ) {
									$navNext.css({ "background-position": "center left" });
								} else {
									$navNext.css({ "background-position": "center right" });
								}
								$navList.animate({ "margin-left": marginLeft });
							}
						);
						$navNext.click(
							function () {
								var $navList = $(".tsvg-fancy-html5-nav-list");
								var $navPrev = $(".tsvg-fancy-html5-nav-prev");
								var winWidth = $(window).width();
								var maskWidth = winWidth - 2 * inst.options.navbuttonwidth;
								var marginLeft = parseInt($navList.css("margin-left")) - maskWidth;
								if (maskWidth - inst.options.totalwidth >=  marginLeft) {
									marginLeft = maskWidth - inst.options.totalwidth;
									$(this).css({ "background-position": "center left" });
								} else {
									$(this).css({ "background-position": "center right" });
								}
								if (marginLeft >= 0) {
									$navPrev.css({ "background-position": "center left" });
								} else {
									$navPrev.css({ "background-position": "center right" });
								}
								$navList.animate({ "margin-left": marginLeft });
							}
						);
						var winWidth = $(window).width();
						if (winWidth >= inst.options.totalwidth ) {
							$navMask.css({ width: inst.options.totalwidth + "px" });
							$navPrev.hide();
							$navNext.hide();
						} else {
							$navMask.css({ width: winWidth - 2 * inst.options.navbuttonwidth + "px" });
							$navPrev.show();
							$navNext.show();
						}
					};
					inst.loadElem = function (elem) {
						inst.currentElem = elem;
						inst.showing = true;
						inst.showNavigation();
						inst.$elem.unbind("mouseenter").unbind("mouseleave").unbind("mousemove");
						inst.$loading.show();
						if (inst.options.onshowitem && window[inst.options.onshowitem] && typeof window[inst.options.onshowitem] == "function") {
							window[inst.options.onshowitem](elem);
						}
						switch (elem[ELEM_TYPE]) {
							case 0:
								var imgLoader = new Image();
								$(imgLoader).load(
									function () {
										inst.showImage(elem, imgLoader.width, imgLoader.height);
									}
								);
								$(imgLoader).error(
									function () {
										inst.showError();
									}
								);
								imgLoader.src = elem[ELEM_HREF];
								break;
							case 1:
								inst.showSWF(elem);
								break;
							case 2:
							case 8:
								inst.showVideo(elem);
								break;
							case 3:
							case 4:
							case 9:
							case 11:
								inst.showYoutubeVimeo(elem);
								break;
							case 5:
								inst.showPDF(elem);
								break;
							case 6:
								inst.showMP3(elem);
								break;
							case 7:
								inst.showWeb(elem);
								break;
							case 10:
								inst.showDiv(elem);
								break;
						}
						if (inst.options.googleanalyticsaccount && window._gaq) {
							window._gaq.push(["_trackEvent", "Lightbox", "Open", elem[ELEM_HREF]]);
						}
					};
					inst.loadCurElem = function () {
						inst.loadElem(inst.elemArray[inst.options.curElem]);
					};
					inst.showError = function () {
						inst.$loading.hide();
						inst.resizeLightbox(
							inst.options.errorwidth,
							inst.options.errorheight,
							true,
							function () {
								inst.$error.show();
								inst.$elem.fadeIn(
									inst.options.fadespeed,
									function () {
										inst.showData();
									}
								);
							}
						);
					};
					inst.calcTextWidth = function (objW) {
						return objW - 36;
					};
					(inst.showTitle = function (w, t, description) {
						if (inst.options.titlestyle == "inside") {
							inst.$elemData.css({ width: w + "px" });
						}
						var text = "";
						if (inst.options.showtitle) {
							if (t && t.length > 0) {
								text += t;
							}
						}
						if (inst.options.inGroup) {
							if (inst.options.showtitleprefix) {
								text = inst.options.titleprefix.replace("%NUM", inst.options.groupIndex + 1).replace("%TOTAL", inst.options.groupCount) + " " + text;
							}
							jQuery("#tsvg-fancy-html5-elem-data-box").css("display", "none");
							if (inst.options.showplaybutton && TotalSoft_VG_FG_ShSlPlIc == "true" && TotalSoft_GV_FG_PT != "true") {
								jQuery("#tsvg-fancy-html5-elem-data-box")
									.css("display", "inline-block")
									.html(
										"<div id='tsvg-fancy-html5-text' style='display:block;overflow:hidden;float:left;'><div id='tsvg-fancy-html5-playpause' style='display:inline-block;cursor:pointer;vertical-align:middle;'><div id='tsvg-fancy-html5-play' style='display:block;'><img src='" +
										inst.options.skinsfolder +
										inst.options.playimage +
										"' style='vertical-align: top !important;'></div><div id='tsvg-fancy-html5-pause' style='display:inline-block;'><img src='" +
										inst.options.skinsfolder +
										inst.options.pauseimage +
										"'></div></div> <span class='tsvg-fancy-popup-text' style='display:none;'>" +
										text +
										"</span><div class='tsvg-fancy-popup-desc'>" +
										description +
										"</div></div>"
									);
							}
							if (inst.options.showplaybutton && TotalSoft_VG_FG_ShSlPlIc == "true" && TotalSoft_GV_FG_PT == "true") {
								jQuery("#tsvg-fancy-html5-elem-data-box")
									.css("display", "inline-block")
									.html(
										"<div id='tsvg-fancy-html5-text' style='display:block;overflow:hidden;float:left;'><div id='tsvg-fancy-html5-playpause' style='display:inline-block;cursor:pointer;vertical-align:middle;'><div id='tsvg-fancy-html5-play' style='display:block;'><img src='" +
										inst.options.skinsfolder +
										inst.options.playimage +
										"' style='vertical-align: top !important;'></div><div id='tsvg-fancy-html5-pause' style='display:none;'><img src='" +
										inst.options.skinsfolder +
										inst.options.pauseimage +
										"'></div></div> <span class='tsvg-fancy-popup-text' style='display:inline-block;padding-left:10px;color:" +
										TS_VG_FG_Color +
										"; '>" +
										text +
										"</span><div class='tsvg-fancy-popup-desc'>" +
										description +
										"</div></div>"
									);
							}
							if (TotalSoft_VG_FG_ShSlPlIc != "true" && TotalSoft_GV_FG_PT == "true") {
								jQuery("#tsvg-fancy-html5-elem-data-box")
									.css("display", "inline-block")
									.html(
										"<div id='tsvg-fancy-html5-text' style='display:block;overflow:hidden;float:left;'><div id='tsvg-fancy-html5-playpause' style='display:none;cursor:pointer;vertical-align:middle;'><div id='tsvg-fancy-html5-play' style='display:none;'><img src='" +
										inst.options.skinsfolder +
										inst.options.playimage +
										"' style='vertical-align: top !important;'></div><div id='tsvg-fancy-html5-pause' style='display:none;'><img src='" +
										inst.options.skinsfolder +
										inst.options.pauseimage +
										"'></div></div> <span class='tsvg-fancy-popup-text' style='display:inline-block;padding-left:10px;color:" +
										TS_VG_FG_Color +
										"; '>" +
										text +
										"</span><div class='tsvg-fancy-popup-desc'>" +
										description +
										"</div></div>"
									);
							}
							if (TotalSoft_VG_FG_ShSlPlIc != "true" && TotalSoft_GV_FG_PT != "true" && TotalSoft_GV_FG_PD == "true") {
								jQuery("#tsvg-fancy-html5-elem-data-box")
									.css("display", "inline-block")
									.html(
										"<div id='tsvg-fancy-html5-text' style='display:block;overflow:hidden;float:left;'><div id='tsvg-fancy-html5-playpause' style='display:none;cursor:pointer;vertical-align:middle;'><div id='tsvg-fancy-html5-play' style='display:none;'><img src='" +
										inst.options.skinsfolder +
										inst.options.playimage +
										"' style='vertical-align: top !important;'></div><div id='tsvg-fancy-html5-pause' style='display:none;'><img src='" +
										inst.options.skinsfolder +
										inst.options.pauseimage +
										"'></div></div> <span class='tsvg-fancy-popup-text' style='display:none;padding-left:10px;color:" +
										TS_VG_FG_Color +
										"; '>" +
										text +
										"</span><div class='tsvg-fancy-popup-desc'>" +
										description +
										"</div></div>"
									);
							}
							if (TotalSoft_GV_FG_PD == "true") {
								jQuery(".tsvg-fancy-popup-desc").css("display", "block");
							}
							if (TotalSoft_GV_FG_PT == "true") {
								jQuery(".tsvg-fancy-popup-text").css("display", "inline-block");
							}
							if (TotalSoft_GV_FG_PD != "true") {
								jQuery(".tsvg-fancy-popup-desc").css("display", "none");
							}
							if (TotalSoft_GV_FG_PT != "true") {
								jQuery(".tsvg-fancy-popup-text").css("display", "none");
							}
							if (TotalSoft_VG_FG_ShSlPlIc != "true" && TotalSoft_GV_FG_PT != "true" && TotalSoft_GV_FG_PD != "true") {
								jQuery("#tsvg-fancy-html5-text").css("display", "none");
							}
						}
						if (inst.options.showdescription && description && description.length > 0) {
							inst.$text.html(text);
						}
						if (inst.options.inGroup && inst.options.showplaybutton) {
							if (inst.autosliding) {
								$("#tsvg-fancy-html5-play", inst.$lightbox).hide();
								$("#tsvg-fancy-html5-pause", inst.$lightbox).show();
								if (inst.slideTimeout) {
									inst.slideTimeout.stop();
									inst.slideTimeout.start();
									inst.autosliding = true;
								}
							} else {
								$("#tsvg-fancy-html5-play", inst.$lightbox).show();
								$("#tsvg-fancy-html5-pause", inst.$lightbox).hide();
							}
							$("#tsvg-fancy-html5-play", inst.$lightbox).click(
								function () {
									$("#tsvg-fancy-html5-play", inst.$lightbox).hide();
									$("#tsvg-fancy-html5-pause", inst.$lightbox).show();
									if (inst.slideTimeout) {
										inst.slideTimeout.stop();
										inst.slideTimeout.start();
										inst.autosliding = true;
									}
								}
							);
							$("#tsvg-fancy-html5-pause", inst.$lightbox).click(
								function () {
									$("#tsvg-fancy-html5-play", inst.$lightbox).show();
									$("#tsvg-fancy-html5-pause", inst.$lightbox).hide();
									if (inst.slideTimeout) {
										inst.slideTimeout.stop();
										inst.autosliding = false;
									}
								}
							);
						}
						$("#tsvg-fancy-html5-social", inst.$lightbox).show();
					});
					(inst.showImage = function (elem, imgW, imgH) {
						var elemW, elemH;
						if (elem[ELEM_WIDTH]) {
							elemW = elem[ELEM_WIDTH];
						} else {
							elemW = imgW;
							elem[ELEM_WIDTH] = imgW;
						}
						if (elem[ELEM_HEIGHT]) {
							elemH = elem[ELEM_HEIGHT];
						} else {
							elemH = imgH;
							elem[ELEM_HEIGHT] = imgH;
						}
						var sizeObj = inst.calcElemSize({ w: elemW, h: elemH }, inst.options.imagekeepratio);
						inst.resizeLightbox(
							sizeObj.w,
							sizeObj.h,
							true,
							function () {
								inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
								var timercode =
									!inst.options.showtimer || !inst.options.inGroup
										? ""
										: "<div id='tsvg-fancy-html5-timer' style='display:none;position:absolute;" +
										inst.options.timerposition +
										":0;left:0;width:0;height:" +
										inst.options.timerheight +
										"px;background-color:" +
										inst.options.timercolor +
										";opacity:" +
										inst.options.timeropacity +
										";'></div>";
								inst.$image.show();
								inst.$image.html(
									"<div id='tsvg-fancy-html5-image-container' style='display:block;position:relative;width:100%;height:100%;" +
									(inst.options.imagekeepratio ? "" : "overflow-x:auto;overflow-y:scroll;-ms-overflow-x:auto;-ms-overflow-y:scroll;") +
									"'><img src='" +
									elem[ELEM_HREF] +
									"' width='100%' height='" +
									(inst.options.imagekeepratio ? "100%" : "auto") +
									"' />" +
									timercode +
									"</div>"
								);
								inst.$elem.fadeIn(
									inst.options.fadespeed,
									function () {
										inst.showData();
									}
								);
								if (inst.autosliding) {
									inst.slideTimeout.stop();
									inst.slideTimeout.start();
								}
							}
						);
					});
					inst.showSWF = function (elem) {
						var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : DEFAULT_WIDTH;
						var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : DEFAULT_HEIGHT;
						var sizeObj = inst.calcElemSize({ w: dataW, h: dataH }, true);
						dataW = sizeObj.w;
						dataH = sizeObj.h;
						inst.resizeLightbox(
							dataW,
							dataH,
							true,
							function () {
								inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
								inst.$image.html("<div id='tsvg-html5lightbox-swf' style='display:block;width:100%;height:100%;'></div>").show();
								inst.embedFlash($("#tsvg-html5lightbox-swf"), elem[ELEM_HREF], "window", { width: dataW, height: dataH });
								inst.$elem.show();
								inst.showData();
								if (inst.autosliding) {
									inst.slideTimeout.stop();
									inst.slideTimeout.start();
								}
							}
						);
					};
					inst.showVideo = function (elem) {
						inst.slideTimeout.stop();
						var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : DEFAULT_WIDTH;
						var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : DEFAULT_HEIGHT;
						var sizeObj = inst.calcElemSize({ w: dataW, h: dataH }, true);
						dataW = sizeObj.w;
						dataH = sizeObj.h;
						inst.resizeLightbox(
							dataW,
							dataH,
							true,
							function () {
								inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
								inst.$image.html("<div id='tsvg-html5lightbox-video' style='display:block;width:100%;height:100%;overflow:hidden;background-color:" + inst.options.videobgcolor + ";'></div>").show();
								var isHTML5 = false;
								if (inst.options.isIE678 || elem[ELEM_TYPE] == 8 || (inst.options.isIE9 && inst.options.useflashonie9) || (inst.options.isIE10 && inst.options.useflashonie10) || (inst.options.isIE11 && inst.options.useflashonie11)) {
									isHTML5 = false;
								} else if (inst.options.isMobile) {
									isHTML5 = true;
								} else if ((inst.options.html5player || !inst.options.flashInstalled) && inst.options.html5VideoSupported) {
									if ((!inst.options.isFirefox && !inst.options.isOpera) || ((inst.options.isFirefox || inst.options.isOpera) && (elem[ELEM_HREF_OGG] || elem[ELEM_HREF_WEBM]))) {
										isHTML5 = true;
									}
								}
								if (isHTML5) {
									var videoSrc = elem[ELEM_HREF];
									if (inst.options.isFirefox || inst.options.isOpera || !videoSrc) {
										videoSrc = elem[ELEM_HREF_WEBM] ? elem[ELEM_HREF_WEBM] : elem[ELEM_HREF_OGG];
									}
									inst.embedHTML5Video($("#tsvg-html5lightbox-video"), videoSrc, inst.options.autoplay, inst.options.loopvideo);
								} else {
									var videoFile = elem[ELEM_HREF];
									if (videoFile.charAt(0) != "/" && videoFile.substring(0, 5) != "http:" && videoFile.substring(0, 6) != "https:") {
										videoFile = inst.options.htmlfolder + videoFile;
									}
									inst.embedFlash(
										$("#tsvg-html5lightbox-video"),
										inst.options.jsfolder + "html5boxplayer.swf",
										"transparent",
										{
											width: dataW,
											height: dataH,
											jsobjectname: "html5Lightbox",
											hidecontrols: inst.options.videohidecontrols ? "1" : "0",
											hideplaybutton: "0",
											videofile: videoFile,
											hdfile: "",
											ishd: "0",
											defaultvolume: inst.options.defaultvideovolume,
											autoplay: inst.options.autoplay ? "1" : "0",
											loop: inst.options.loopvideo ? "1" : "0",
											errorcss: ".html5box-error" + inst.options.errorcss,
											id: 0,
										}
									);
								}
								inst.$elem.show();
								inst.showData();
							}
						);
					};
					inst.loadNext = function () {
						$(window).trigger("html5lightbox.videofinished");
						if (inst.autosliding) {
							inst.gotoSlide(-1);
						} else if (inst.options.autoclose) {
							inst.finish();
						}
					};
					inst.getYoutubeParams = function (href) {
						var result = {};
						if (0 > href.indexOf("?") ) {
							return result;
						}
						var params = href.substring(href.indexOf("?") + 1).split("&");
						for (var i = 0;params.length > i ; i++) {
							var value = params[i].split("=");
							if (value && value.length == 2 && value[0].toLowerCase() != "v") {
								result[value[0].toLowerCase()] = value[1];
							}
						}
						return result;
					};
					inst.getYoutubeId = function (href) {
						var youtubeId = "";
						var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(shorts\/)|(watch\??v?=?))([^#\&\?]*).*/;
						var match = href.match(regExp);
						if (match && match[match.length -1].length == 11) {
							youtubeId = match[match.length -1];
						}
						return youtubeId;
					};
					inst.prepareYoutubeHref = function (href) {
						let	youtubeId = inst.getYoutubeId(href),
							protocol = "https:",
							result = protocol + "//www.youtube.com/embed/" + youtubeId,
							params = this.getYoutubeParams(href),
							first = true;
						for (var key in params) {
							if (first) {
								result += "?";
								first = false;
							} else {
								result += "&";
							}
							result += key + "=" + params[key];
						}
						return result;
					};
					inst.prepareDailymotionHref = function (href) {
						if (href.match(/\:\/\/.*(dai\.ly)/i)) {
							var protocol = "https:";
							var id = href.match(/(dai\.ly\/)([a-zA-Z0-9\-\_]+)/)[2];
							href = protocol + "" + id;
						}
						return href;
					};
					inst.showYoutubeVimeo = function (elem) {
						var tsvg_autoplay = jQuery('.tsvg-main-content-' + id).attr('data-tsvg-autoplay');
						inst.slideTimeout.stop();
						var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : DEFAULT_WIDTH;
						var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : DEFAULT_HEIGHT;
						var sizeObj = inst.calcElemSize({ w: dataW, h: dataH }, true);
						dataW = sizeObj.w;
						dataH = sizeObj.h;
						inst.resizeLightbox(
							dataW,
							dataH,
							true,
							function () {
								inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
								inst.$image.html("<div id='tsvg-html5lightbox-video' style='display:block;width:100%;height:100%;overflow:hidden;'></div>").show();
								var href = elem[ELEM_HREF];
								var youtubeid = "";
								if (elem[ELEM_TYPE] == 3) {
									youtubeid = inst.getYoutubeId(href);
									href = inst.prepareYoutubeHref(href);
									if (tsvg_autoplay == "true") {
										href += "?autoplay=1&mute=1"
									}
									else {
										href += "?autoplay=0&mute=0"
									}
								}
								if (elem[ELEM_TYPE] == 9) {
									href = inst.prepareDailymotionHref(href);
								}
								if (inst.options.autoplay) {
									if (elem[ELEM_TYPE] == 4) {
										if (href.indexOf('player.vimeo.com/video/') > -1) {
											if (tsvg_autoplay == "true") {
												href += "?autoplay=1&muted=1";
											}
										}
									}
								}
								if (inst.options.loopvideo) {
									href += 0 > href.indexOf("?") ? "?" : "&";
									switch (elem[ELEM_TYPE]) {
										case 3:
											href += "loop=1&amp;playlist=" + youtubeid;
											break;
										case 4:
										case 9:
											href += "loop=1";
											break;
										case 11:
											href += "endVideoBehavior=loop";
											break;
									}
								}
								if (elem[ELEM_TYPE] == 3 && Totalsoft_FG_ShVAutoPl == "true") {
									if (0 > href.indexOf("?")) {
										href += "?wmode=transparent&rel=0&iv_load_policy=3";
									} else { 
										href += "&wmode=transparent&rel=0&iv_load_policy=3";
									}
									if (inst.options.videohidecontrols) {
										href += "&controls=0&showinfo=0";
									}
									href += "&mute=1&enablejsapi=1&origin=" + document.location.protocol + "//" + document.location.hostname;
								}
								if (href.indexOf('.mp4') > -1) {
									let autoplay_bool = tsvg_autoplay == "true" ? "autoplay muted" : "";
									$("#tsvg-html5lightbox-video").html('<video controls="" ' + autoplay_bool + ' name="media" width="100%" height="100%"><source src="' + href + '" type="video/mp4"></video>');
								} else {
									$("#tsvg-html5lightbox-video").html("<iframe id='html5boxiframevideo' width='100%' height='100%' src='" + href + "' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>");
								}
								inst.$elem.show();
								inst.showData();
								if (elem[ELEM_TYPE] == 3 && typeof YT === "object" && typeof YT.Player === "function") {
									new YT.Player(
										"html5boxiframevideo",
										{
											events: {
												onStateChange: function (event) {
													if (event.data == YT.PlayerState.ENDED) {
														$(window).trigger("html5lightbox.videofinished");
														if (inst.autosliding) {
															inst.gotoSlide(-1);
														} else if (inst.options.autoclose) {
															inst.finish();
														}
													}
												},
											},
										}
									);
								} else if (elem[ELEM_TYPE] == 4 && typeof $f === "function") {
									var vimeoIframe = $("#html5boxiframevideo")[0];
									var vimeoPlayer = $f(vimeoIframe);
									vimeoPlayer.addEvent(
										"ready",
										function () {
											vimeoPlayer.addEvent(
												"finish",
												function (id) {
													$(window).trigger("html5lightbox.videofinished");
													if (inst.autosliding) {
														inst.gotoSlide(-1);
													} else if (inst.options.autoclose) {
														inst.finish();
													}
												}
											);
										}
									);
								}
							}
						);
					};
					inst.showPDF = function (elem) { };
					inst.showMP3 = function (elem) { };
					inst.showDiv = function (elem) {
						var winWidth = $(window).width();
						var winH = window.innerHeight ? window.innerHeight : $(window).height();
						var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : winWidth;
						var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : winH - inst.options.navheight;
						var sizeObj = inst.calcElemSize({ w: dataW, h: dataH }, false);
						dataW = sizeObj.w;
						dataH = sizeObj.h;
						inst.resizeLightbox(
							dataW,
							dataH,
							true,
							function () {
								inst.$loading.hide();
								inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
								inst.$image.html("<div id='tsvg-html5lightbox-div' style='display:block;width:100%;height:100%;" + (inst.options.isIOS ? "-webkit-overflow-scrolling:touch;overflow-y:scroll;" : "overflow:auto;") + "'></div>").show();
								var divID = elem[ELEM_HREF];
								if ($(divID).length > 0) {
									$("#tsvg-html5lightbox-div").html($(divID).html());
								} else {
									$("#tsvg-html5lightbox-div").html("<div class='tsvg-fancy-html5-error'>The specified div ID does not exist.</div>");
								}
								inst.$elem.show();
								inst.showData();
								if (inst.autosliding) {
									inst.slideTimeout.stop();
									inst.slideTimeout.start();
								}
							}
						);
					};
					inst.showWeb = function (elem) {
						var winWidth = $(window).width();
						var winH = window.innerHeight ? window.innerHeight : $(window).height();
						var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : winWidth;
						var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : winH - inst.options.navheight;
						var sizeObj = inst.calcElemSize({ w: dataW, h: dataH }, false);
						var tsvgRumbleCheck = elem[ELEM_HREF].indexOf('rumble.com/') > -1 ? 'sandbox="allow-scripts"' : '';
						dataW = sizeObj.w;
						dataH = sizeObj.h;
						inst.resizeLightbox(
							dataW,
							dataH,
							true,
							function () {
								inst.$loading.hide();
								inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
								inst.$image.html("<div id='tsvg-html5lightbox-web' style='display:block;width:100%;height:100%;" + (inst.options.isIOS ? "-webkit-overflow-scrolling:touch;overflow-y:scroll;" : "") + "'></div>").show();
								$("#tsvg-html5lightbox-web").html("<iframe id='tsvg-html5lightbox-web-iframe' width='100%' height='100%' src='" + elem[ELEM_HREF] + "' frameborder='0' "+ tsvgRumbleCheck +" ></iframe>");
								inst.$elem.show();
								inst.showData();
								if (inst.autosliding) {
									inst.slideTimeout.stop();
									inst.slideTimeout.start();
								}
							}
						);
					};
					inst.scrollBox = function () { };
					inst.resizeWindow = function () {
						if (!inst.currentElem) {
							return;
						}
						if (!inst.options.responsive) {
							return;
						}
						var winWidth = $(window).width();
						var winH = window.innerHeight ? window.innerHeight : $(window).height();
						if (inst.options.responsivebarheight) {
							if (inst.options.smallscreenheight >= winH) {
								inst.options.barheight = inst.options.barheightonsmallheight;
							} else {
								inst.options.barheight = inst.options.barheightoriginal;
							}
							if (inst.options.titlestyle == "bottom" && inst.options.barautoheight != "auto") {
								inst.$elemData.css({ height: inst.options.barheight + "px", "max-height": inst.options.barheight + "px" });
							}
						}
						var elemW, elemH, keepratio;
						if (inst.currentElem[ELEM_TYPE] == 7 || inst.currentElem[ELEM_TYPE] == 10) {
							elemW = inst.currentElem[ELEM_WIDTH] ? inst.currentElem[ELEM_WIDTH] : winWidth;
							elemH = inst.currentElem[ELEM_HEIGHT] ? inst.currentElem[ELEM_HEIGHT] : winH - inst.options.navheight;
							keepratio = false;
						} else {
							elemW = inst.currentElem[ELEM_WIDTH] ? inst.currentElem[ELEM_WIDTH] : DEFAULT_WIDTH;
							elemH = inst.currentElem[ELEM_HEIGHT] ? inst.currentElem[ELEM_HEIGHT] : DEFAULT_HEIGHT;
							if (inst.currentElem[ELEM_TYPE] == 0) {
								keepratio = inst.options.imagekeepratio;
							} else {
								keepratio = true;
							}
						}
						var sizeObj = inst.calcElemSize({ w: elemW, h: elemH }, keepratio);
						var boxPos = inst.calcBoxPosition(sizeObj.w, sizeObj.h);
						var boxW = boxPos[0];
						var boxH = boxPos[1];
						var boxT = boxPos[2];
						inst.$lightboxBox.css({ "margin-top": boxT });
						if (!inst.options.positionFixed) {
							inst.$lightboxBox.css("margin-top", $(window).scrollTop() + inst.options.bordertopmargin);
						}
						if (inst.options.titlestyle == "left" || inst.options.titlestyle == "right") {
							inst.$lightboxBox.css({ width: boxW, height: boxH });
						} else {
							inst.$lightboxBox.css({ width: boxW, height: "auto" });
							inst.$elemWrap.css({ width: boxW, height: boxH });
						}
						if (inst.options.titlestyle == "inside") {
							inst.$elemData.css({ width: sizeObj.w + "px" });
						}
						if (0 >= $(".tsvg-fancy-html5-nav").length ) {
							return;
						}
						$(".tsvg-fancy-html5-nav-list").css({ "margin-left": 0 });
						var $navMask = $(".tsvg-fancy-html5-nav-mask");
						var $navPrev = $(".tsvg-fancy-html5-nav-prev");
						var $navNext = $(".tsvg-fancy-html5-nav-next");
						var winWidth = $(window).width();
						if (winWidth >= inst.options.totalwidth ) {
							$navMask.css({ width: inst.options.totalwidth + "px" });
							$navPrev.hide();
							$navNext.hide();
						} else {
							$navMask.css({ width: winWidth - 2 * inst.options.navbuttonwidth + "px" });
							$navPrev.show();
							$navNext.show();
						}
					};
					inst.calcElemSize = function (sizeObj, keepratio) {
						if (!inst.options.responsive) {
							return sizeObj;
						}
						var winWidth = $(window).width();
						winWidth = winWidth ? winWidth : $(document).width();
						var winH = window.innerHeight ? window.innerHeight : $(window).height();
						winH = winH ? winH : $(document).height();
						if ((inst.options.titlestyle == "left" || inst.options.titlestyle == "right") && winWidth > inst.options.sidetobottomscreenwidth) {
							sizeObj.w = (sizeObj.w * 100) / inst.options.imagepercentage;
						}
						var topmargin = inst.options.navarrowsbottomscreenwidth > $(window).width() ? inst.options.bordertopmarginsmall : inst.options.bordertopmargin;
						var h0 = winH - inst.options.navheight - 2 * inst.options.bordersize - 2 * topmargin;
						if (inst.options.titlestyle == "bottom") {
							h0 -= inst.options.barheight;
						}
						if (((inst.options.titlestyle == "left" || inst.options.titlestyle == "right") && inst.options.sidetobottomscreenwidth >= winWidth ) || (inst.options.notkeepratioonsmallheight && inst.options.smallscreenheight >= winH)) {
							keepratio = false;
						}
						if (sizeObj.h > h0) {
							if (keepratio) {
								sizeObj.w = Math.round((sizeObj.w * h0) / sizeObj.h);
							}
							sizeObj.h = h0;
						}
						var w0 = winWidth - 2 * inst.options.bordersize - 2 * inst.options.bordermargin;
						if (
							(inst.options.fullscreenmode && winWidth > inst.options.navarrowsbottomscreenwidth) ||
							(((inst.options.isTouch && inst.options.navarrowsalwaysshowontouch) || inst.options.alwaysshownavarrows) && winWidth > inst.options.navarrowsbottomscreenwidth)
						) {
							w0 -= 64;
						}
						if (sizeObj.w > w0) {
							if (keepratio) {
								sizeObj.h = Math.round((sizeObj.h * w0) / sizeObj.w);
							}
							sizeObj.w = w0;
						}
						return sizeObj;
					};
					inst.showData = function () {
						if (inst.$text.text().length > 0) {
							inst.$elemData.show();
						}
						if (inst.options.titlestyle == "bottom" || inst.options.titlestyle == "inside") {
							inst.$lightboxBox.css({ height: "auto" });
						}
						if (inst.$text.text().length > 0 && inst.options.titlestyle == "bottom") {
							inst.$elemData.css({ "max-height": inst.options.barheight + "px" });
						}
						$("#tsvg-fancy-html5-lightbox-overlay", inst.$lightbox).css({ height: Math.max($(window).height(), $(document).height()) });
						$(window).trigger("html5lightbox.lightboxopened");
					};
					inst.resizeLightbox = function (elemW, elemH, bAnimate, onFinish) {
						inst.hideNavArrows();
						var boxPos = inst.calcBoxPosition(elemW, elemH);
						var boxW = boxPos[0];
						var boxH = boxPos[1];
						var boxT = boxPos[2];
						inst.$loading.hide();
						inst.$watermark.hide();
						if (inst.options.curElem >= inst.options.nextElem) {
							if (inst.options.onlastitem && window[inst.options.onlastitem] && typeof window[inst.options.onlastitem] == "function") {
								window[inst.options.onlastitem](inst.currentElem);
							}
						}
						if (inst.options.prevElem >= inst.options.curElem) {
							if (inst.options.onfirstitem && window[inst.options.onfirstitem] && typeof window[inst.options.onfirstitem] == "function") {
								window[inst.options.onfirstitem](inst.currentElem);
							}
						}
						if (!inst.options.fullscreenmode && (!inst.options.isTouch || !inst.options.navarrowsalwaysshowontouch) && !inst.options.alwaysshownavarrows) {
							inst.$elem.bind(
								"mouseenter mousemove",
								function () {
									if ((inst.options.arrowloop && inst.options.prevElem >= 0) || (!inst.options.arrowloop && inst.options.prevElem >= 0 && inst.options.curElem > inst.options.prevElem )) {
										inst.$prev.fadeIn();
									}
									if ((inst.options.arrowloop && inst.options.nextElem >= 0) || (!inst.options.arrowloop && inst.options.nextElem >= 0 && inst.options.nextElem > inst.options.curElem)) {
										inst.$next.fadeIn();
									}
								}
							);
							inst.$elem.bind(
								"mouseleave",
								function () {
									inst.$next.fadeOut();
									inst.$prev.fadeOut();
								}
							);
						}
						inst.$lightboxBox.css({ "margin-top": boxT });
						if (!inst.options.positionFixed) {
							inst.$lightboxBox.css("margin-top", $(window).scrollTop() + inst.options.bordertopmargin);
						}
						if (inst.options.titlestyle == "left" || inst.options.titlestyle == "right") {
							var speed = bAnimate ? inst.options.resizespeed : 0;
							if (boxW == inst.$lightboxBox.width() && boxH == inst.$lightboxBox.height()) {
								speed = 0;
							}
							inst.$lightboxBox.animate({ width: boxW }, speed).animate(
								{ height: boxH },
								speed,
								function () {
									inst.onAnimateFinish(onFinish);
								}
							);
						} else {
							var speed = bAnimate ? inst.options.resizespeed : 0;
							if (boxW == inst.$elemWrap.width() && boxH == inst.$elemWrap.height()) {
								speed = 0;
							}
							inst.$lightboxBox.css({ width: boxW, height: "auto", "min-width": boxW - 15 });
							inst.$elemWrap.animate({ width: boxW, "min-width": boxW - 15 }, speed).animate(
								{ height: boxH, "min-height": boxH - 15 },
								speed,
								function () {
									inst.onAnimateFinish(onFinish);
								}
							);
						}
					};
					inst.onAnimateFinish = function (onFinish) {
						inst.$loading.show();
						inst.$watermark.show();
						inst.$close.show();
						inst.$elem.css({ "background-color": inst.options.bgcolor });
						onFinish();
					};
					inst.reset = function () {
						if (inst.options.stamp) {
							inst.$watermark.hide();
						}
						inst.showing = false;
						inst.$image.empty();
						inst.$text.empty();
						inst.$error.hide();
						inst.$loading.hide();
						inst.$image.hide();
						if (inst.options.titlestyle == "bottom" || inst.options.titlestyle == "inside") {
							inst.$elemData.hide();
						}
						if (!inst.options.fullscreenmode) {
							inst.$close.hide();
						}
						inst.$elem.css({ "background-color": "" });
					};
					inst.resetNavigation = function () {
						inst.options.navheight = 0;
						$(".tsvg-fancy-html5-nav").remove();
					};
					inst.finish = function () {
						if ($("#tsvg-fancy-html5-lightbox-video", inst.$lightbox).length) {
							$("#tsvg-fancy-html5-lightbox-video", inst.$lightbox).attr("src", "");
						}
						$("head")
							.find("style")
							.each(
								function () {
									if ($(this).data("creator") == "tsvg-fancy-html5box-html5-lightbox") {
										$(this).remove();
									}
								}
							);
						inst.slideTimeout.stop();
						inst.reset();
						inst.resetNavigation();
						inst.$lightbox.remove();
						$("#tsvg-fancy-html5box-html5-lightbox").remove();
						inst.showObjects();
						if (inst.options.oncloselightbox && window[inst.options.oncloselightbox] && typeof window[inst.options.oncloselightbox] == "function") {
							window[inst.options.oncloselightbox](inst.currentElem);
						}
						if (inst.onLightboxClosed && typeof inst.onLightboxClosed == "function") {
							inst.onLightboxClosed(inst.currentElem);
						}
					};
					inst.pauseSlide = function () { };
					inst.playSlide = function () { };
					inst.gotoSlide = function (slide) {
						if (slide == -1) {
							if (0 > inst.options.nextElem ) {
								return;
							}
							inst.options.curElem = inst.options.nextElem;
						} else if (slide == -2) {
							if (0 > inst.options.prevElem ) {
								return;
							}
							inst.options.curElem = inst.options.prevElem;
						} else if (slide >= 0) {
							inst.options.curElem = slide;
						}
						if (inst.autosliding) {
							inst.slideTimeout.stop();
						}
						inst.calcNextPrevElem();
						inst.reset();
						inst.loadCurElem();
					};
					inst.enableSwipe = function () {
						inst.$elem.html5lightboxTouchSwipe<?php echo esc_attr( $tsvg_shortcode_id ); ?>(
							{
								preventWebBrowser: false,
								swipeLeft: function () {
									inst.gotoSlide(-1);
								},
								swipeRight: function () {
									inst.gotoSlide(-2);
								},
							}
						);
					};
					inst.hideObjects = function () {
						$("select, embed, object").css({ visibility: "hidden" });
					};
					inst.showObjects = function () {
						$("select, embed, object").css({ visibility: "visible" });
					};
					inst.embedHTML5Video = function ($container, src, autoplay, loopvideo) {
						let embedVideoPoster = (inst.options.html5videoposter && inst.options.html5videoposter.length > 0 ? "poster='" + inst.options.html5videoposter + "'" : ""),
							embedVideoControls = (inst.options.nativehtml5controls && !inst.options.videohidecontrols ? " controls='controls'" : "");
						$container.html(
							"<div style='display:block;width:100%;height:100%;position:relative;'><video id='tsvg-fancy-html5-lightbox-video' width='100%' height='100%'" + embedVideoPoster + (autoplay ? " autoplay" : "") + (loopvideo ? " loop" : "") + embedVideoControls + " src='" + src + "'></div>"
						);
						if (!inst.options.nativehtml5controls) {
							$("video", $container).data("src", src);
							$("video", $container).lightboxHTML5VideoControls<?php echo esc_attr( $tsvg_shortcode_id ); ?>(inst.options.skinsfolder, inst, inst.options.videohidecontrols, false, inst.options.defaultvideovolume);
						}
						$("video", $container)
							.unbind("ended")
							.bind(
								"ended",
								function () {
									$(window).trigger("html5lightbox.videofinished");
									if (inst.autosliding) {
										inst.gotoSlide(-1);
									} else if (inst.options.autoclose) {
										inst.finish();
									}
								}
							);
					};
					inst.embedFlash = function ($container, src, wmode, flashVars) {
						if (inst.options.flashInstalled) {
							var htmlOptions = { pluginspage: "", quality: "high", allowFullScreen: "true", allowScriptAccess: "always", type: "application/x-shockwave-flash" };
							htmlOptions.width = "100%";
							htmlOptions.height = "100%";
							htmlOptions.src = src;
							htmlOptions.flashVars = $.param(flashVars);
							htmlOptions.wmode = wmode;
							var htmlString = "";
							for (var key in htmlOptions) {
								htmlString += key + "=" + htmlOptions[key] + " ";
							}
							$container.html("<embed " + htmlString + "/>");
						} else {
							$container.html(
								"<div class='tsvg-html5lightbox-flash-error' style='display:block; position:relative;text-align:center; width:100%; left:0px; top:40%;'><div class='tsvg-fancy-html5-error'><div>The required Adobe Flash Player plugin is not installed</div><br/><div style='display:block;position:relative;text-align:center;width:112px;height:33px;margin:0px auto;'><a href=''><img src='' alt='Get Adobe Flash player' width='112' height='33'></img></a></div></div>"
							);
						}
					};
					inst.checkType = function (href) {
						if (!href) {
							return -1;
						}
						if (href.match(/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i)) {
							return 0;
						}
						if (href.match(/[^\.]\.(swf)\s*$/i)) {
							return 1;
						}
						if (href.match(/\.(mp4|m4v|ogv|ogg|webm)(.*)?$/i)) {
							return 4;
						}
						if (href.match(/\:\/\/.*(youtube\.com)/i) || href.match(/\:\/\/.*(youtu\.be)/i)) {
							return 3;
						}
						if (href.match(/\:\/\/.*(vimeo\.com)/i)) {
							return 4;
						}
						if (href.match(/\:\/\/.*(dailymotion\.com)/i) || href.match(/\:\/\/.*(dai\.ly)/i)) {
							return 9;
						}
						if (href.match(/[^\.]\.(pdf)\s*$/i)) {
							return 5;
						}
						if (href.match(/[^\.]\.(mp3)\s*$/i)) {
							return 6;
						}
						if (href.match(/[^\.]\.(flv)\s*$/i)) {
							return 8;
						}
						if (href.match(/\#\w+/i)) {
							return 10;
						}
						if (href.match(/\:\/\/.*(wistia)/i)) {
							return 11;
						}
						return 7;
					};
					inst.getURLParams = function () {
						var result = {};
						var params = window.location.search.substring(1).split("&");
						for (var i = 0; params.length > i ; i++) {
							var value = params[i].split("=");
							if (value && value.length == 2) {
								result[value[0].toLowerCase()] = unescape(value[1]);
							}
						}
						return result;
					};
					inst.absoluteUrl = function (href) {
						var link = document.createElement("a");
						link.href = href;
						return link.protocol + "//" + link.host + link.pathname + link.search + link.hash;
					};
					inst.showLightbox = function (type, href, title, width, height, webm, ogg, thumbnail, description) {
						inst.options = $.extend(inst.options, inst.defaultoptions);
						$(window).trigger("html5lightbox.lightboxshow");
						inst.init();
						inst.reset();
						inst.$lightbox.show();
						var boxPos = inst.calcBoxPosition(inst.options.loadingwidth, inst.options.loadingheight);
						var boxW = boxPos[0];
						var boxH = boxPos[1];
						var boxT = boxPos[2];
						inst.$lightboxBox.css({ "margin-top": boxT });
						if (!inst.options.positionFixed) {
							inst.$lightboxBox.css("margin-top", $(window).scrollTop() + inst.options.bordertopmargin);
						}
						if (inst.options.titlestyle == "left" || inst.options.titlestyle == "right") {
							inst.$lightboxBox.css({ width: boxW, height: boxH });
						} else {
							inst.$lightboxBox.css({ width: boxW, height: "auto" });
							inst.$elemWrap.css({ width: boxW, height: boxH });
						}
						inst.loadElem(new Array(type, href, title, null, width, height, webm, ogg, thumbnail, description));
					};
					inst.addItem = function (href, title, group, width, height, webm, ogg, thumbnail, description, mediatype) {
						type = mediatype && mediatype >= 0 ? mediatype : inst.checkType(href);
						inst.elemArray.push(new Array(type, href, title, group, width, height, webm, ogg, thumbnail, description));
					};
					inst.showItem = function (href) {
						inst.options = $.extend(inst.options, inst.defaultoptions);
						$(window).trigger("html5lightbox.lightboxshow");
						inst.init();
						if (0 >= inst.elemArray.length) {
							return true;
						}
						inst.hideObjects();
						for (var i = 0; inst.elemArray.length > i; i++) {
							if (inst.elemArray[i][ELEM_HREF] == href) {
								break;
							}
						}
						if (i == inst.elemArray.length) {
							return true;
						}
						inst.options.curElem = i;
						inst.calcNextPrevElem();
						inst.reset();
						inst.$lightbox.show();
						var boxPos = inst.calcBoxPosition(inst.options.loadingwidth, inst.options.loadingheight);
						var boxW = boxPos[0];
						var boxH = boxPos[1];
						var boxT = boxPos[2];
						inst.$lightboxBox.css({ "margin-top": boxT });
						if (!inst.options.positionFixed) {
							inst.$lightboxBox.css("margin-top", $(window).scrollTop() + inst.options.bordertopmargin);
						}
						if (inst.options.titlestyle == "left" || inst.options.titlestyle == "right") {
							inst.$lightboxBox.css({ width: boxW, height: boxH });
						} else {
							inst.$lightboxBox.css({ width: boxW, height: "auto" });
							inst.$elemWrap.css({ width: boxW, height: boxH });
						}
						inst.loadCurElem();
						return false;
					};
					inst.unbind("click").click(inst.clickHandler);
					inst.each(
						function () {
							var self = $(this);
							if (self.data("autoopen")) {
								setTimeout(
									function () {
										self.click();
									},
									self.data("autoopendelay") ? self.data("autoopendelay") : 0
								);
								return false;
							}
						}
					);
					var urlParams = inst.getURLParams();
					if ("html5lightboxshare" in urlParams) {
						var shareUrl = decodeURIComponent(urlParams["html5lightboxshare"]);
						var shareLink = $('.tsvg-html5lightbox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[href="' + shareUrl + '"]');
						if (shareLink.length > 0) {
							shareLink.click();
						}
					}
					return inst;
				};
			})(jQuery);
			(function ($) {
				$.fn.html5lightboxTouchSwipe<?php echo esc_attr( $tsvg_shortcode_id ); ?> = function (options) {
					var defaults = { preventWebBrowser: false, swipeLeft: null, swipeRight: null, swipeTop: null, swipeBottom: null };
					if (options) {
						$.extend(defaults, options);
					}
					return this.each(
						function () {
							var startX = -1,
								startY = -1;
							var curX = -1,
								curY = -1;
							function touchStart(event) {
								var e = event.originalEvent;
								if (e.targetTouches.length >= 1) {
									startX = e.targetTouches[0].pageX;
									startY = e.targetTouches[0].pageY;
								} else {
									touchCancel(event);
								}
							}
							function touchMove(event) {
								if (defaults.preventWebBrowser) {
									event.preventDefault();
								}
								var e = event.originalEvent;
								if (e.targetTouches.length >= 1) {
									curX = e.targetTouches[0].pageX;
									curY = e.targetTouches[0].pageY;
								} else {
									touchCancel(event);
								}
							}
							function touchEnd(event) {
								if (curX > 0 || curY > 0) {
									triggerHandler();
									touchCancel(event);
								} else {
									touchCancel(event);
								}
							}
							function touchCancel(event) {
								startX = -1;
								startY = -1;
								curX = -1;
								curY = -1;
							}
							function triggerHandler() {
								if (Math.abs(curX - startX) > Math.abs(curY - startY)) {
									if (curX > startX) {
										if (defaults.swipeRight) {
											defaults.swipeRight.call();
										}
									} else {
										if (defaults.swipeLeft) {
											defaults.swipeLeft.call();
										}
									}
								} else if (curY > startY) {
									if (defaults.swipeBottom) {
										defaults.swipeBottom.call();
									}
								} else if (defaults.swipeTop) {
									defaults.swipeTop.call();
								}
							}
							try {
								$(this).bind("touchstart", touchStart);
								$(this).bind("touchmove", touchMove);
								$(this).bind("touchend", touchEnd);
								$(this).bind("touchcancel", touchCancel);
							} catch (e) {
							}
						}
					);
				};
			})(jQuery);
			(function ($) {
				$.fn.lightboxHTML5VideoControls<?php echo esc_attr( $tsvg_shortcode_id ); ?> = function (skinFolder, parentInst, hidecontrols, hideplaybutton, defaultvolume) {
					var isTouch = "ontouchstart" in window;
					var eStart = isTouch ? "touchstart" : "mousedown";
					var eMove = isTouch ? "touchmove" : "mousemove";
					var eCancel = isTouch ? "touchcancel" : "mouseup";
					var eClick = "click";
					var BUTTON_SIZE = 32;
					var BAR_HEIGHT = isTouch ? 48 : 36;
					var hideControlsTimerId = null;
					var hideVolumeBarTimeoutId = null;
					var sliderDragging = false;
					var isFullscreen = false;
					var userActive = true;
					var isIPhone = navigator.userAgent.match(/iPod/i) != null || navigator.userAgent.match(/iPhone/i) != null;
					var isHd = $(this).data("ishd");
					var hd = $(this).data("hd");
					var src = $(this).data("src");
					var $videoObj = $(this);
					$videoObj.get(0).removeAttribute("controls");
					if (isIPhone) {
						var h = $videoObj.height() - BAR_HEIGHT;
						$videoObj.css({ height: h });
					}
					var $videoPlay = $("<div class='html5boxVideoPlay'></div>");
					if (!isIPhone) {
						$videoObj.after($videoPlay);
						$videoPlay
							.css(
								{
									position: "absolute",
									top: "50%",
									left: "50%",
									display: "block",
									cursor: "pointer",
									width: 64,
									height: 64,
									"margin-left": -32,
									"margin-top": -32,
									"background-image": "url('" + skinFolder + "html5boxplayer_playvideo.png" + "')",
									"background-position": "center center",
									"background-repeat": "no-repeat",
								}
							)
							.bind(
								eClick,
								function () {
									$videoObj.get(0).play();
								}
							);
					}
					var $videoFullscreenBg = $("<div class='html5boxVideoFullscreenBg'></div>");
					var $videoControls = $(
						"<div class='html5boxVideoControls'>" +
						"<div class='html5boxVideoControlsBg'></div>" +
						"<div class='html5boxPlayPause'>" +
						"<div class='html5boxPlay'></div>" +
						"<div class='html5boxPause'></div>" +
						"</div>" +
						"<div class='html5boxTimeCurrent'>--:--</div>" +
						"<div class='html5boxFullscreen'></div>" +
						"<div class='html5boxHD'></div>" +
						"<div class='html5boxVolume'>" +
						"<div class='html5boxVolumeButton'></div>" +
						"<div class='html5boxVolumeBar'>" +
						"<div class='html5boxVolumeBarBg'>" +
						"<div class='html5boxVolumeBarActive'></div>" +
						"</div>" +
						"</div>" +
						"</div>" +
						"<div class='html5boxTimeTotal'>--:--</div>" +
						"<div class='html5boxSeeker'>" +
						"<div class='html5boxSeekerBuffer'></div>" +
						"<div class='html5boxSeekerPlay'></div>" +
						"<div class='html5boxSeekerHandler'></div>" +
						"</div>" +
						"<div style='clear:both;'></div>" +
						"</div>"
					);
					$videoObj.after($videoControls);
					$videoObj.after($videoFullscreenBg);
					$videoFullscreenBg.css({ display: "none", position: "fixed", left: 0, top: 0, bottom: 0, right: 0, "z-index": 2147483647 });
					$videoControls.css({ display: "block", position: "absolute", width: "100%", height: BAR_HEIGHT, left: 0, bottom: 0, right: 0, "max-width": "640px", margin: "0 auto" });
					var userActivate = function () {
						userActive = true;
					};
					$videoObj
						.bind(
							eClick,
							function () {
								userActive = true;
							}
						)
						.hover(
							function () {
								userActive = true;
							},
							function () {
								userActive = false;
							}
						);
					if (!hidecontrols) {
						setInterval(
							function () {
								if (userActive) {
									$videoControls.show();
									userActive = false;
									clearTimeout(hideControlsTimerId);
									hideControlsTimerId = setTimeout(
										function () {
											if (!$videoObj.get(0).paused) {
												$videoControls.fadeOut();
											}
										},
										5e3
									);
								}
							},
							250
						);
					}
					$(".html5boxVideoControlsBg", $videoControls).css({ display: "block", position: "absolute", width: "100%", height: "100%", left: 0, top: 0, "background-color": "#000000", opacity: 0.7, filter: "alpha(opacity=70)" });
					$(".html5boxPlayPause", $videoControls).css({ display: "block", position: "relative", width: BUTTON_SIZE + "px", height: BUTTON_SIZE + "px", margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2), float: "left" });
					var $videoBtnPlay = $(".html5boxPlay", $videoControls);
					var $videoBtnPause = $(".html5boxPause", $videoControls);
					$videoBtnPlay
						.css(
							{
								display: "block",
								position: "absolute",
								top: 0,
								left: 0,
								width: BUTTON_SIZE + "px",
								height: BUTTON_SIZE + "px",
								cursor: "pointer",
								"background-image": "url('" + skinFolder + "html5boxplayer_playpause.png" + "')",
								"background-position": "top left",
							}
						)
						.hover(
							function () {
								$(this).css({ "background-position": "bottom left" });
							},
							function () {
								$(this).css({ "background-position": "top left" });
							}
						)
						.bind(
							eClick,
							function () {
								$videoObj.get(0).play();
							}
						);
					$videoBtnPause
						.css(
							{
								display: "none",
								position: "absolute",
								top: 0,
								left: 0,
								width: BUTTON_SIZE + "px",
								height: BUTTON_SIZE + "px",
								cursor: "pointer",
								"background-image": "url('" + skinFolder + "html5boxplayer_playpause.png" + "')",
								"background-position": "top right",
							}
						)
						.hover(
							function () {
								$(this).css({ "background-position": "bottom right" });
							},
							function () {
								$(this).css({ "background-position": "top right" });
							}
						)
						.bind(
							eClick,
							function () {
								$videoObj.get(0).pause();
							}
						);
					var $videoTimeCurrent = $(".html5boxTimeCurrent", $videoControls);
					var $videoTimeTotal = $(".html5boxTimeTotal", $videoControls);
					var $videoSeeker = $(".html5boxSeeker", $videoControls);
					var $videoSeekerPlay = $(".html5boxSeekerPlay", $videoControls);
					var $videoSeekerBuffer = $(".html5boxSeekerBuffer", $videoControls);
					var $videoSeekerHandler = $(".html5boxSeekerHandler", $videoControls);
					$videoTimeCurrent.css(
						{
							display: "block",
							position: "relative",
							float: "left",
							"line-height": BAR_HEIGHT + "px",
							"font-weight": "normal",
							"font-size": "12px",
							margin: "0 8px",
							"font-family": "Arial, Helvetica, sans-serif",
							color: "#fff",
						}
					);
					$videoTimeTotal.css(
						{
							display: "block",
							position: "relative",
							float: "right",
							"line-height": BAR_HEIGHT + "px",
							"font-weight": "normal",
							"font-size": "12px",
							margin: "0 8px",
							"font-family": "Arial, Helvetica, sans-serif",
							color: "#fff",
						}
					);
					$videoSeeker
						.css({ display: "block", cursor: "pointer", overflow: "hidden", position: "relative", height: "10px", "background-color": "#222", margin: Math.floor((BAR_HEIGHT - 10) / 2) + "px 4px" })
						.bind(
							eStart,
							function (e) {
								var e0 = isTouch ? e.originalEvent.touches[0] : e;
								var pos = e0.pageX - $videoSeeker.offset().left;
								$videoSeekerPlay.css({ width: pos });
								$videoObj.get(0).currentTime = (pos * $videoObj.get(0).duration) / $videoSeeker.width();
								$videoSeeker.bind(
									eMove,
									function (e) {
										var e0 = isTouch ? e.originalEvent.touches[0] : e;
										var pos = e0.pageX - $videoSeeker.offset().left;
										$videoSeekerPlay.css({ width: pos });
										$videoObj.get(0).currentTime = (pos * $videoObj.get(0).duration) / $videoSeeker.width();
									}
								);
							}
						)
						.bind(
							eCancel,
							function () {
								$videoSeeker.unbind(eMove);
							}
						);
					$videoSeekerBuffer.css({ display: "block", position: "absolute", left: 0, top: 0, height: "100%", "background-color": "#444" });
					$videoSeekerPlay.css({ display: "block", position: "absolute", left: 0, top: 0, height: "100%", "background-color": "#fcc500" });
					if (!isIPhone && ($videoObj.get(0).requestFullscreen || $videoObj.get(0).webkitRequestFullScreen || $videoObj.get(0).mozRequestFullScreen || $videoObj.get(0).webkitEnterFullScreen || $videoObj.get(0).msRequestFullscreen)) {
						var switchScreen = function (fullscreen) {
							if (fullscreen) {
								if ($videoObj.get(0).requestFullscreen) {
									$videoObj.get(0).requestFullscreen();
								} else if ($videoObj.get(0).webkitRequestFullScreen) {
									$videoObj.get(0).webkitRequestFullScreen();
								} else if ($videoObj.get(0).mozRequestFullScreen) {
									$videoObj.get(0).mozRequestFullScreen();
								} else if ($videoObj.get(0).webkitEnterFullScreen) {
									$videoObj.get(0).webkitEnterFullScreen();
								}
								if ($videoObj.get(0).msRequestFullscreen) {
									$videoObj.get(0).msRequestFullscreen();
								}
							} else if (document.cancelFullScreen) {
								document.cancelFullScreen();
							} else if (document.mozCancelFullScreen) {
								document.mozCancelFullScreen();
							} else if (document.webkitCancelFullScreen) {
								document.webkitCancelFullScreen();
							} else if (document.webkitExitFullscreen) {
								document.webkitExitFullscreen();
							} else if (document.msExitFullscreen) {
								document.msExitFullscreen();
							}
						};
						var switchScreenCSS = function (fullscreen) {
							$videoControls.css({ position: fullscreen ? "fixed" : "absolute" });
							var backgroundPosY = $videoFullscreen.css("background-position") ? $videoFullscreen.css("background-position").split(" ")[1] : $videoFullscreen.css("background-position-y");
							$videoFullscreen.css({ "background-position": (fullscreen ? "right" : "left") + " " + backgroundPosY });
							$videoFullscreenBg.css({ display: fullscreen ? "block" : "none" });
							if (fullscreen) {
								$(document).bind("mousemove", userActivate);
								$videoControls.css({ "z-index": 2147483647 });
							} else {
								$(document).unbind("mousemove", userActivate);
								$videoControls.css({ "z-index": "" });
							}
						};
						document.addEventListener(
							"fullscreenchange",
							function () {
								isFullscreen = document.fullscreen;
								switchScreenCSS(document.fullscreen);
							},
							false
						);
						document.addEventListener(
							"mozfullscreenchange",
							function () {
								isFullscreen = document.mozFullScreen;
								switchScreenCSS(document.mozFullScreen);
							},
							false
						);
						document.addEventListener(
							"webkitfullscreenchange",
							function () {
								isFullscreen = document.webkitIsFullScreen;
								switchScreenCSS(document.webkitIsFullScreen);
							},
							false
						);
						$videoObj.get(0).addEventListener(
							"webkitbeginfullscreen",
							function () {
								isFullscreen = true;
							},
							false
						);
						$videoObj.get(0).addEventListener(
							"webkitendfullscreen",
							function () {
								isFullscreen = false;
							},
							false
						);
						$("head").append("<style type='text/css'>video::-webkit-media-controls { display:none !important; }</style>");
						var $videoFullscreen = $(".html5boxFullscreen", $videoControls);
						$videoFullscreen
							.css(
								{
									display: "block",
									position: "relative",
									float: "right",
									width: BUTTON_SIZE + "px",
									height: BUTTON_SIZE + "px",
									margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2),
									cursor: "pointer",
									"background-image": "url('" + skinFolder + "html5boxplayer_fullscreen.png" + "')",
									"background-position": "left top",
								}
							)
							.hover(
								function () {
									var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
									$(this).css({ "background-position": backgroundPosX + " bottom" });
								},
								function () {
									var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
									$(this).css({ "background-position": backgroundPosX + " top" });
								}
							)
							.bind(
								eClick,
								function () {
									isFullscreen = !isFullscreen;
									switchScreen(isFullscreen);
								}
							);
					}
					if (hd) {
						var $videoHD = $(".html5boxHD", $videoControls);
						$videoHD
							.css(
								{
									display: "block",
									position: "relative",
									float: "right",
									width: BUTTON_SIZE + "px",
									height: BUTTON_SIZE + "px",
									margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2),
									cursor: "pointer",
									"background-image": "url('" + skinFolder + "html5boxplayer_hd.png" + "')",
									"background-position": (isHd ? "right" : "left") + " center",
								}
							)
							.bind(
								eClick,
								function () {
									isHd = !isHd;
									$(this).css({ "background-position": (isHd ? "right" : "left") + " center" });
									parentInst.isHd = isHd;
									var isPaused = $videoObj.get(0).isPaused;
									$videoObj.get(0).setAttribute("src", (isHd ? hd : src) + "#t=" + $videoObj.get(0).currentTime);
									if (!isPaused) {
										$videoObj.get(0).play();
									} else if (!isIPhone) {
										$videoObj.get(0).pause();
									}
								}
							);
					}
					$videoObj.get(0).volume = defaultvolume;
					var volumeSaved = defaultvolume == 0 ? 1 : defaultvolume;
					var volume = $videoObj.get(0).volume;
					$videoObj.get(0).volume = volume / 2 + 0.1;
					if ($videoObj.get(0).volume === volume / 2 + 0.1) {
						$videoObj.get(0).volume = volume;
						var $videoVolume = $(".html5boxVolume", $videoControls);
						var $videoVolumeButton = $(".html5boxVolumeButton", $videoControls);
						var $videoVolumeBar = $(".html5boxVolumeBar", $videoControls);
						var $videoVolumeBarBg = $(".html5boxVolumeBarBg", $videoControls);
						var $videoVolumeBarActive = $(".html5boxVolumeBarActive", $videoControls);
						$videoVolume.css({ display: "block", position: "relative", float: "right", width: BUTTON_SIZE + "px", height: BUTTON_SIZE + "px", margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2) }).hover(
							function () {
								clearTimeout(hideVolumeBarTimeoutId);
								var volume = $videoObj.get(0).volume;
								$videoVolumeBarActive.css({ height: Math.round(volume * 100) + "%" });
								$videoVolumeBar.show();
							},
							function () {
								clearTimeout(hideVolumeBarTimeoutId);
								hideVolumeBarTimeoutId = setTimeout(
									function () {
										$videoVolumeBar.hide();
									},
									1e3
								);
							}
						);
						$videoVolumeButton
							.css(
								{
									display: "block",
									position: "absolute",
									top: 0,
									left: 0,
									width: BUTTON_SIZE + "px",
									height: BUTTON_SIZE + "px",
									cursor: "pointer",
									"background-image": "url('" + skinFolder + "html5boxplayer_volume.png" + "')",
									"background-position": "top " + (volume > 0 ? "left" : "right"),
								}
							)
							.hover(
								function () {
									var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
									$(this).css({ "background-position": backgroundPosX + " bottom" });
								},
								function () {
									var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
									$(this).css({ "background-position": backgroundPosX + " top" });
								}
							)
							.bind(
								eClick,
								function () {
									var volume = $videoObj.get(0).volume;
									if (volume > 0) {
										volumeSaved = volume;
										volume = 0;
									} else {
										volume = volumeSaved;
									}
									var backgroundPosY = $(this).css("background-position") ? $(this).css("background-position").split(" ")[1] : $(this).css("background-position-y");
									$videoVolumeButton.css({ "background-position": (volume > 0 ? "left" : "right") + " " + backgroundPosY });
									$videoObj.get(0).volume = volume;
									$videoVolumeBarActive.css({ height: Math.round(volume * 100) + "%" });
								}
							);
						$videoVolumeBar.css(
							{
								display: "none",
								position: "absolute",
								left: 4,
								bottom: "100%",
								width: 24,
								height: 80,
								"margin-bottom": Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2),
								"background-color": "#000000",
								opacity: 0.7,
								filter: "alpha(opacity=70)",
							}
						);
						$videoVolumeBarBg.css({ display: "block", position: "relative", width: 10, height: 68, margin: 7, cursor: "pointer", "background-color": "#222" });
						$videoVolumeBarActive.css({ display: "block", position: "absolute", bottom: 0, left: 0, width: "100%", height: "100%", "background-color": "#fcc500" });
						$videoVolumeBarBg
							.bind(
								eStart,
								function (e) {
									var e0 = isTouch ? e.originalEvent.touches[0] : e;
									var vol = 1 - (e0.pageY - $videoVolumeBarBg.offset().top) / $videoVolumeBarBg.height();
									vol = vol > 1 ? 1 : 0 > vol ? 0 : vol;
									$videoVolumeBarActive.css({ height: Math.round(vol * 100) + "%" });
									$videoVolumeButton.css({ "background-position": "left " + (vol > 0 ? "top" : "bottom") });
									$videoObj.get(0).volume = vol;
									$videoVolumeBarBg.bind(
										eMove,
										function (e) {
											var e0 = isTouch ? e.originalEvent.touches[0] : e;
											var vol = 1 - (e0.pageY - $videoVolumeBarBg.offset().top) / $videoVolumeBarBg.height();
											vol = vol > 1 ? 1 : 0 > vol ? 0 : vol;
											$videoVolumeBarActive.css({ height: Math.round(vol * 100) + "%" });
											$videoVolumeButton.css({ "background-position": "left " + (vol > 0 ? "top" : "bottom") });
											$videoObj.get(0).volume = vol;
										}
									);
								}
							)
							.bind(
								eCancel,
								function () {
									$videoVolumeBarBg.unbind(eMove);
								}
							);
					}
					var calcTimeFormat = function (seconds) {
						var h0 = Math.floor(seconds / 3600);
						var h = 10 > h0 ? "0" + h0 : h0;
						var m0 = Math.floor((seconds - h0 * 3600) / 60);
						var m = 10 > m0 ? "0" + m0 : m0;
						var s0 = Math.floor(seconds - (h0 * 3600 + m0 * 60));
						var s = 10 > s0 ? "0" + s0 : s0;
						var r = m + ":" + s;
						if (h0 > 0) {
							r = h + ":" + r;
						}
						return r;
					};
					if (hideplaybutton) {
						$videoPlay.hide();
					}
					if (hidecontrols) {
						$videoControls.hide();
					}
					var onVideoPlay = function () {
						if (!hideplaybutton) {
							$videoPlay.hide();
						}
						if (!hidecontrols) {
							$videoBtnPlay.hide();
							$videoBtnPause.show();
						}
					};
					var onVideoPause = function () {
						if (!hideplaybutton) {
							$videoPlay.show();
						}
						if (!hidecontrols) {
							$videoControls.show();
							clearTimeout(hideControlsTimerId);
							$videoBtnPlay.show();
							$videoBtnPause.hide();
						}
					};
					var onVideoEnded = function () {
						$(window).trigger("html5lightbox.videoended");
						if (!hideplaybutton) {
							$videoPlay.show();
						}
						if (!hidecontrols) {
							$videoControls.show();
							clearTimeout(hideControlsTimerId);
							$videoBtnPlay.show();
							$videoBtnPause.hide();
						}
					};
					var onVideoUpdate = function () {
						var curTime = $videoObj.get(0).currentTime;
						if (curTime) {
							$videoTimeCurrent.text(calcTimeFormat(curTime));
							var duration = $videoObj.get(0).duration;
							if (duration) {
								$videoTimeTotal.text(calcTimeFormat(duration));
								if (!sliderDragging) {
									var sliderW = $videoSeeker.width();
									var pos = Math.round((sliderW * curTime) / duration);
									$videoSeekerPlay.css({ width: pos });
									$videoSeekerHandler.css({ left: pos });
								}
							}
						}
					};
					var onVideoProgress = function () {
						if ($videoObj.get(0).buffered && $videoObj.get(0).buffered.length > 0 && !isNaN($videoObj.get(0).buffered.end(0)) && !isNaN($videoObj.get(0).duration)) {
							var sliderW = $videoSeeker.width();
							$videoSeekerBuffer.css({ width: Math.round((sliderW * $videoObj.get(0).buffered.end(0)) / $videoObj.get(0).duration) });
						}
					};
					try {
						$videoObj.bind("play", onVideoPlay);
						$videoObj.bind("pause", onVideoPause);
						$videoObj.bind("ended", onVideoEnded);
						$videoObj.bind("timeupdate", onVideoUpdate);
						$videoObj.bind("progress", onVideoProgress);
					} catch (e) {
					}
				};
			})(jQuery);
			<?php if ( $tsvg_edit === 'true' ) { ?>
				window.tsvgFancyAdmin = function(){
					jQuery(".tsvg-html5lightbox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").html5lightbox<?php echo esc_attr( $tsvg_shortcode_id ); ?>({},'<?php echo esc_attr( $tsvg_shortcode_id ); ?>');
				}
			<?php } ?>
			jQuery(".tsvg-html5lightbox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").html5lightbox<?php echo esc_attr( $tsvg_shortcode_id ); ?>({},'<?php echo esc_attr( $tsvg_shortcode_id ); ?>');
			jQuery(function() {
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').fadeIn();
				var tsvgFancyHoverInverse<?php echo esc_attr( $tsvg_shortcode_id ); ?> = '<?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_28); ?>';
				tsvgFancyHoverInverse<?php echo esc_attr( $tsvg_shortcode_id ); ?> = tsvgFancyHoverInverse<?php echo esc_attr( $tsvg_shortcode_id ); ?> == 'Default' ? false : true;
				jQuery('.tsvg-fancy-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > li').each(function() {
					jQuery(this).hoverdir({hoverDelay: 50, inverse:tsvgFancyHoverInverse<?php echo esc_attr( $tsvg_shortcode_id ); ?>});
				});
			});
			clearInterval(tsvgFancyInterval<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		}
	},
	tsvgFancyReference<?php echo esc_attr( $tsvg_shortcode_id ); ?> = (
		function tsvgFancySameCall<?php echo esc_attr( $tsvg_shortcode_id ); ?>() {
			tsvgFancyInterval<?php echo esc_attr( $tsvg_shortcode_id ); ?> = setInterval(tsvgFancyIntervalFunction<?php echo esc_attr( $tsvg_shortcode_id ); ?>, 1000);
			return tsvgFancySameCall<?php echo esc_attr( $tsvg_shortcode_id ); ?>;
		}()
	);
</script>