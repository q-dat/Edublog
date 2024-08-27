<style type="text/css">
  	:root{
	  	--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_26 ) ); ?>;
		--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_27 ) ); ?>;
	  	--tsvg_popup_pt_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_28 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_pt_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_29 ) ); ?>;
		--tsvg_popup_pt_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_30 ) ); ?>;
	  	--tsvg_popup_lat_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_31 ), FILTER_VALIDATE_INT ); ?>%;
	  	--tsvg_popup_lat_h_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_32 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_lat_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_33 ) ); ?>;
	  	--tsvg_popup_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_20 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_i_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_21 ) ); ?>;
	  	--tsvg_popup_l_b_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_02 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_l_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_03 ) ); ?>;
	  	--tsvg_popup_l_b_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_04 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_l_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_06 ) ); ?>;
		--tsvg_popup_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_07 ) ); ?>;
		--tsvg_popup_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_10 ) ); ?>;
	  	--tsvg_popup_l_f_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_11 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_l_h_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_12 ) ); ?>;
		--tsvg_popup_l_h_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_13 ) ); ?>;
		--tsvg_popup_l_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_15 ) ); ?>;
		--tsvg_popup_l_i_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_16 ) ); ?>;
		--tsvg_popup_l_i_hc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_17 ) ); ?>;
	}
	.tsvg-space-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		max-width:3000px !important;
		position: fixed;
		width: 0%;
		height: 0%;
		top: 50%;
		left: 50%;
		background: rgba(0, 0, 0, 0.1);
		z-index: 10000000;
		cursor: pointer;
	}
	.tsvg-space-popup-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		max-width:3000px !important;
		position: fixed;
		display: none;
		width: 100%;
		top: 50%;
		left: 0;
		z-index: 999999999;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
	}
	.tsvg-space-popup-box-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		margin: 0 25%;
		width: 50%;
		height: inherit;
		display: none;
		height: 100%;
		transition: transform 1s;
		-webkit-transition: transform 1s;
		-moz-transition: transform 1s;
		transition-delay: 1s;
		-webkit-transition-delay: 1s;
		-moz-transition-delay: 1s;
		transform: translateX(0);
		-webkit-transform: translateX(0%);
		-moz-transform: translateX(0%);
	}
	.tsvg-space-popup-box-inner-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-moz-transition-delay: 0s;
		transform: translateX(-25%);
		-webkit-transform: translateX(-25%);
		-moz-transform: translateX(-25%);
	}
	.tsvg-space-popup-media-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		padding-top: 56.25%;
		width: 100%;
		z-index: 2;
		border: var(--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  solid var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		background: var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		overflow: hidden;
		backface-visibility: hidden;
	}
	.tsvg-space-popup-media-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100% !important;
		height: 100%;
		transform: translateZ(0);
		-moz-transform: translateZ(0);
		-webkit-transform: translateZ(0);
	}
	.tsvg-space-popup-media-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		position: absolute;
		top: 0;
		left: 50%;
		width: auto;
		margin: 0 !important;
		height: 100%;
		transform: translateZ(0) translateX(-50%);
		-moz-transform: translateZ(0) translateX(-50%);
		-webkit-transform: translateZ(0) translateX(-50%);
	}
	.tsvg-space-popup-info-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		height: 50px;
		width: 50px;
		background: var(--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 50%;
		right: 0px;
		border: var(--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  solid var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transform: rotate(45deg) translate(0px, -36px) translate3d(0, 0, 0);
		-webkit-transform: rotate(45deg) translate(0px, -36px) translate3d(0, 0, 0);
		-moz-transform: rotate(45deg) translate(0px, -36px) translate3d(0, 0, 0);
		perspective: 800px;
		transition-delay: 1s;
		-webkit-transition-delay: 1s;
		-moz-transition-delay: 1s;
		transition-duration: 1s;
		-webkit-transition-duration: 1s;
		-moz-transition-duration: 1s;
		cursor: pointer;
		z-index: 1;
	}
	.tsvg-space-popup-info-toggle-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		transition-duration: 1s;
		-webkit-transition-duration: 1s;
		-moz-transition-duration: 1s;
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-moz-transition-delay: 0s;
		transform: rotate(45deg) translate(-25px, -10px);
		-webkit-transform: rotate(45deg) translate(-25px, -10px);
		-moz-transform: rotate(45deg) translate(-25px, -10px);
	}
	.tsvg-space-popup-info-open-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(20%, -100%) rotate(-45deg);
		-webkit-transform: translate(20%, -100%) rotate(-45deg);
		-moz-transform: translate(20%, -100%) rotate(-45deg);
		color: var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-space-popup-info-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(20%, -100%) rotate(-45deg);
		-webkit-transform: translate(20%, -100%) rotate(-45deg);
		-moz-transform: translate(20%, -100%) rotate(-45deg);
		color: var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		height: 100%;
		width: 50%;
		background: var(--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		padding: 10px 10px 10px 45px;
		top: 0;
		right: 0;
		border: var(--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  solid var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-left: none;
		transition: transform 2s;
		-webkit-transition: transform 2s;
		-moz-transition: transform 2s;
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-moz-transition-delay: 0s;
		transform: translateX(0%);
		-webkit-transform: translateX(0%);
		-moz-transform: translateX(0%);
		overflow-y: auto;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-webkit-backface-visibility: hidden;
	}
	.tsvg-space-popup-box-info-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		transition-delay: 0.3s;
		-webkit-transition-delay: 0.3s;
		-moz-transition-delay: 0.3s;
		transform: translateX(99%);
		-webkit-transform: translateX(99%);
		-moz-transform: translateX(99%);
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-space-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		word-wrap: break-word;
	}
	@media (max-width: 1000px) {
		.tsvg-space-popup-box-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translateY(0%);
			-webkit-transform: translateY(0%);
			-moz-transform: translateY(0%);
		}
		.tsvg-space-popup-box-inner-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translateY(-25%);
			-webkit-transform: translateY(-25%);
			-moz-transform: translateY(-25%);
		}
		.tsvg-space-popup-info-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			top: 100%;
			right: 50%;
			transform: rotate(45deg) translate(0px, -36px);
			-webkit-transform: rotate(45deg) translate(0px, -36px);
			-moz-transform: rotate(45deg) translate(0px, -36px);
			transition-delay: 1s;
			-webkit-transition-delay: 1s;
			-moz-transition-delay: 1s;
			transition-duration: 1s;
			-webkit-transition-duration: 1s;
			-moz-transition-duration: 1s;
		}
		.tsvg-space-popup-info-toggle-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transition-duration: 1s;
			-webkit-transition-duration: 1s;
			-moz-transition-duration: 1s;
			transition-delay: 0s;
			-webkit-transition-delay: 0s;
			-moz-transition-delay: 0s;
			transform: rotate(45deg) translate(-25px, -62px);
			-webkit-transform: rotate(45deg) translate(-25px, -62px);
			-moz-transform: rotate(45deg) translate(-25px, -62px);
		}
		.tsvg-space-popup-info-open-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translate(20%, 0%) rotate(45deg);
			-webkit-transform: translate(20%, 0%) rotate(45deg);
			-moz-transform: translate(20%, 0%) rotate(45deg);
		}
		.tsvg-space-popup-info-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translate(20%, 0%) rotate(45deg);
			-webkit-transform: translate(20%, 0%) rotate(45deg);
			-moz-transform: translate(20%, 0%) rotate(45deg);
		}
		.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			height: 50%;
			width: 100%;
			padding: 35px 10px 10px 10px;
			top: 50%;
			left: 0;
			border: var(--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  solid var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
			border-top: none;
			transform: translateY(0%);
			-webkit-transform: translateY(0%);
			-moz-transform: translateY(0%);
		}
		.tsvg-space-popup-box-info-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translateY(99%);
			-webkit-transform: translateY(99%);
			-moz-transform: translateY(99%);
		}
	}
	@media (max-width: 600px) {
		.tsvg-space-popup-box-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			width: 60%;
			margin: 0 5%;
			transform: translateY(-20%);
			-webkit-transform: translateY(-20%);
			-moz-transform: translateY(-20%);
		}
		.tsvg-space-popup-box-inner-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translateY(-20%);
			-webkit-transform: translateY(-20%);
			-moz-transform: translateY(-20%);
		}
		.tsvg-space-popup-info-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			display: none;
		}
		.tsvg-space-popup-info-toggle-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			display: none;
		}
		.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			height: 45%;
			padding: 10px 10px 10px 10px;
			transform: translateY(99%);
			-webkit-transform: translateY(99%);
			-moz-transform: translateY(99%);
		}
		.tsvg-space-popup-box-info-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translateY(99%);
			-webkit-transform: translateY(99%);
			-moz-transform: translateY(99%);
		}
		.tsvg-space-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translate(-50%, -50%) !important;
			-webkit-transform: translate(-50%, -50%) !important;
			-moz-transform: translate(-50%, -50%) !important;
		}
	}
	@media (max-width: 400px) {
		.tsvg-space-popup-box-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			width: 98%;
			margin: 0 1%;
			transform: translateY(-25%);
			-webkit-transform: translateY(-25%);
			-moz-transform: translateY(-25%);
		}
		.tsvg-space-popup-box-inner-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translateY(-25%);
			-webkit-transform: translateY(-25%);
			-moz-transform: translateY(-25%);
		}
		.tsvg-space-popup-info-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			display: none;
		}
		.tsvg-space-popup-info-toggle-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			display: none;
		}
		.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			top: 20%;
			height: 80%;
			padding: 10px 10px 10px 10px;
			transform: translateY(99%);
			-webkit-transform: translateY(99%);
			-moz-transform: translateY(99%);
		}
		.tsvg-space-popup-box-info-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translateY(99%);
			-webkit-transform: translateY(99%);
			-moz-transform: translateY(99%);
		}
		.tsvg-space-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			transform: translate(0%, -100%) !important;
			-webkit-transform: translate(0%, -100%) !important;
			-moz-transform: translate(0%, -100%) !important;
		}
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar {
		width: 6px;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px var(--tsvg_popup_pt_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar-thumb {
		background-color: var(--tsvg_popup_pt_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		outline: var(--tsvg_popup_pt_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-space-popup-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		font-size: var(--tsvg_popup_pt_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_popup_pt_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_popup_pt_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		display: block;
		text-align: center;
		padding: 7px 0;
	}
	.tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		padding: 10px 0;
	}
	.tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?> span {
		width: var(--tsvg_popup_lat_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		height: var(--tsvg_popup_lat_h_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		background: var(--tsvg_popup_lat_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		display: block;
	}
	.tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-line_position='left'] span { margin-right: auto;}
	.tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-line_position='center'] span {margin: 0 auto;}
	.tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-line_position='right'] span {margin-left: auto;}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> * {
		line-height: 1;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> p {
		margin: 0;
		padding: 0;
	}
	.tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 5px 10px;
		width: 60%;
		display: flex;
		align-items: center;
		border:var(--tsvg_popup_l_b_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_popup_l_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		border-radius:var(--tsvg_popup_l_b_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		text-decoration: none;
		box-shadow: none !important;
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		line-height: 1 !important;
		background-color:  var(--tsvg_popup_l_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color:  var(--tsvg_popup_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		text-align: center;
		font-family: var(--tsvg_popup_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_popup_l_f_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
	  	max-width: 100%;
	  	word-break: break-word;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> span {
	  	margin:5px;
	}
	.tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='before']  {
	  	flex-direction: row;
	}
	.tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='after']  {
	  	flex-direction: row-reverse;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
	 	position: relative;
	 	display: flex;
	 	flex-direction: row;
	 	flex-wrap: nowrap;
	 	align-content: center;
	 	align-items: center;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position-link='left'] .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  justify-content: flex-start;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position-link='right'] .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  justify-content: flex-end;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position-link='center'] .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
	   justify-content: center;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position-link='full']  .tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  width: 100%;
	  justify-content: center;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='beforetitle']  .tsvg-space-popup-title-container  {
	  order: 2;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='beforetitle']  .tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 3;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='beforetitle']  .tsvg-space-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 4;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='beforetitle']  .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 1;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='aftertitle']  .tsvg-space-popup-title-container  {
	  order: 1;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='aftertitle']  .tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 3;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='aftertitle']  .tsvg-space-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 4;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='aftertitle']  .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 2;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterline']  .tsvg-space-popup-title-container  {
	  order: 1;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterline']  .tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 2;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterline']  .tsvg-space-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 4;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterline']  .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 3;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterdesc']  .tsvg-space-popup-title-container  {
	  order: 1;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterdesc']  .tsvg-space-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 2;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterdesc']  .tsvg-space-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 3;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-position='afterdesc']  .tsvg-space-popup-link-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  order: 4;
	}
	.tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover {
		text-decoration: none !important;
		background-color:  var(--tsvg_popup_l_h_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color:  var(--tsvg_popup_l_h_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		box-shadow: none !important;
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
	}
	.tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus {
		box-shadow: none !important;
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		outline: none !important;
	}
	.tsvg-space-popup-link-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		font-size: var(--tsvg_popup_l_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_popup_l_i_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-space-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-space-popup-link-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		color: var(--tsvg_popup_l_i_hc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-space-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 0;
		left: 0;
		z-index: 3;
		font-size: var(--tsvg_popup_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_popup_i_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		cursor: pointer;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
	  display: flex;
	  flex-direction: column;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-space-popup-box-inner{
	  display: flex;
	  width: 100%;
	  flex-direction: column;
	}
	.tsvg-space-popup-box-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-space-popup-box-inner> div{
	  position: relative;
	  width: 100%;
	}
	.tsvg-space-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?> p {
		line-height: 1.2;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="500px"]{
		--tsvg_g_c_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 2;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="400px"]{
		--tsvg_g_c_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 1;
	}
</style>
<?php
	echo sprintf(
		'
		<div class="tsvg-space-popup-backface-%1$s"></div>
		<div class="tsvg-space-popup-box-%1$s">
			<div class="tsvg-space-popup-box-inner-%1$s">
				<div class="tsvg-space-popup-media-container-%1$s">
					<iframe src="" frameborder="0" allowfullscreen></iframe>
					<img src="">
				</div>
				<i class="tsvg-space-popup-close-icon-%1$s %2$s"></i>
				<div class="tsvg-space-popup-info-container-%1$s tsvg-space-popup-info-open-container-%1$s" >
					<i class="tsvg-space-popup-info-open-icon-%1$s ts-vgallery ts-vgallery-chevron-right"></i>
				</div>
				<div class="tsvg-space-popup-info-container-%1$s tsvg-space-popup-info-close-container-%1$s tsvg-space-popup-info-toggle-%1$s" >
					<i class="tsvg-space-popup-info-close-icon-%1$s ts-vgallery ts-vgallery-chevron-left"></i>
				</div>
				<div class="tsvg-space-popup-box-info-%1$s" data-position="%3$s"  data-position-link="%4$s">
					<div class="tsvg-space-popup-box-inner">
						<div class="tsvg-space-popup-title-container"  style="position: relative;">
							<span class="tsvg-space-popup-title-%1$s"></span>
						</div>
						<div class="tsvg-space-popup-title-line-%1$s" data-tsvg-line_position="%5$s">
							<span></span>
						</div>
						<div class="tsvg-space-popup-desc-%1$s" style="position: relative; padding: 5px 0;"></div>
						<div class="tsvg-space-popup-link-container-%1$s" style="position: relative;">
							<a class="tsvg-space-popup-link-%1$s" href="" target="" data-position="%6$s">
								<i class="tsvg-space-popup-link-icon-%1$s ts-vgallery ts-vgallery-%7$s" style="margin-right: 5px;"></i>
								<span>%8$s</span>       
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_19 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_08 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_09 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_01 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_18 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_14 ),
		esc_html( $tsvg_style_options->TotalSoft_GV_2_05 )
	);
?>
<script type="text/javascript">
	let tsvgSpaceCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function () {
		if( typeof(jQuery) != "undefined" && jQuery != null  ){
			jQuery( document ).ready(function() {
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').fadeIn();
			});
			function tsvgSpaceClose<?php echo esc_js( $tsvg_shortcode_id ); ?>() {
				jQuery('.tsvg-space-popup-box-<?php echo esc_js( $tsvg_shortcode_id ); ?>').css({'display': 'none'});
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>').css('display', 'none');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?> img').attr('src', '');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?> video source').attr('src', '');
				jQuery('.tsvg-space-popup-backface-<?php echo esc_js( $tsvg_shortcode_id ); ?>').animate({'width': '0%', 'height': '0%', 'top': '50%', 'left': '50%'}, 500);
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?> .tsvg-space-popup-info-close-container-<?php echo esc_js( $tsvg_shortcode_id ); ?>').addClass('tsvg-space-popup-info-toggle-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?> .tsvg-space-popup-info-open-container-<?php echo esc_js( $tsvg_shortcode_id ); ?>').removeClass('tsvg-space-popup-info-toggle-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
			}
			function tsvgSpaceCloseInfo<?php echo esc_js( $tsvg_shortcode_id ); ?>() {
				jQuery('.tsvg-space-popup-box-info-<?php echo esc_js( $tsvg_shortcode_id ); ?>').removeClass('tsvg-space-popup-box-info-div-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>').removeClass('tsvg-space-popup-box-inner-div-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>  .tsvg-space-popup-info-close-container-<?php echo esc_js( $tsvg_shortcode_id ); ?>').addClass('tsvg-space-popup-info-toggle-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>  .tsvg-space-popup-info-open-container-<?php echo esc_js( $tsvg_shortcode_id ); ?>').removeClass('tsvg-space-popup-info-toggle-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
			}
			jQuery(document).on("click", ".tsvg-space-block-popup-btn-<?php echo esc_attr( $tsvg_shortcode_id ); ?>", function() {
				let $this = this;
				jQuery('.tsvg-space-popup-backface-<?php echo esc_js( $tsvg_shortcode_id ); ?>').animate({'width': '100%', 'height': '100%', 'top': '0', 'left': '0'}, 500);
				setTimeout(function() {
					let tsvgSpaceMediaUrl = jQuery($this).closest('.tsvg-space-block-<?php echo esc_js( $tsvg_shortcode_id ); ?>').attr('data-tsvg-src');
					if(tsvgSpaceMediaUrl.indexOf('youtube.com/shorts/') > -1 ){
						tsvgSpaceMediaUrl = tsvgSpaceMediaUrl.replace("shorts", "embed");
					}
					if(!tsvgSpaceMediaUrl) {
						tsvgSpaceMediaUrl = jQuery($this).closest('.tsvg-space-block-<?php echo esc_js( $tsvg_shortcode_id ); ?>').find('video source').attr('src');
					}
					if(!tsvgSpaceMediaUrl) {
						tsvgSpaceBlockImgUrl = jQuery($this).closest('.tsvg-space-block-<?php echo esc_js( $tsvg_shortcode_id ); ?>').find('img').attr('src');
					}
					let tsvgSpaceBlockTitle = jQuery($this).closest('.tsvg-space-block-<?php echo esc_js( $tsvg_shortcode_id ); ?>').find('.tsvg-space-block-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(),
						tsvgSpaceBlockDesc = jQuery($this).closest('.tsvg-space-block-<?php echo esc_js( $tsvg_shortcode_id ); ?>').find('.tsvg-space-block-desc').html(),
						tsvgSpaceBlockLink = jQuery($this).closest('.tsvg-space-block-<?php echo esc_js( $tsvg_shortcode_id ); ?>').attr('data-tsvg-link'),
						tsvgSpaceBlockLinkTarget = jQuery($this).closest('.tsvg-space-block-<?php echo esc_js( $tsvg_shortcode_id ); ?>').attr('data-tsvg-target');
					if(!tsvgSpaceMediaUrl) {
						jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find(' iframe').css('display', 'none');
						jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find(' img').attr('src', tsvgSpaceBlockImgUrl);
					}else {
						if( tsvgSpaceMediaUrl.indexOf('rumble.com/') > -1){
							jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find(' iframe').attr('sandbox','allow-scripts');
						} else {
							jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find('iframe').removeAttr('sandbox');
						}
						jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find(' iframe').attr('src', tsvgSpaceMediaUrl);
						jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find(' img').css('display', 'none');
					}
					jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find('.tsvg-space-popup-title-<?php echo esc_js( $tsvg_shortcode_id ); ?>').text(tsvgSpaceBlockTitle);
					jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find('.tsvg-space-popup-desc-<?php echo esc_js( $tsvg_shortcode_id ); ?>').html(tsvgSpaceBlockDesc);
					if(tsvgSpaceBlockLink && tsvgSpaceBlockLink!='#'){
						jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find('.tsvg-space-popup-link-<?php echo esc_js( $tsvg_shortcode_id ); ?>').attr('target',tsvgSpaceBlockLinkTarget).css('display', 'block');
						jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find('.tsvg-space-popup-link-<?php echo esc_js( $tsvg_shortcode_id ); ?>').attr('href',tsvgSpaceBlockLink)
					}else{
						jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).find('.tsvg-space-popup-link-<?php echo esc_js( $tsvg_shortcode_id ); ?>').attr('href','#').css({'display': 'none'})
					}
					jQuery('.tsvg-space-popup-box-<?php echo esc_js( $tsvg_shortcode_id ); ?>').css({'display': 'block', 'display': '-webkit-flex','justify-content':'center'});
					jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>').css('display', 'none');
					jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>' ).css({'display': 'block'});
				}, 500)
			});
			jQuery(document).on("click", ".tsvg-space-popup-info-close-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>", function() {
				tsvgSpaceCloseInfo<?php echo esc_js( $tsvg_shortcode_id ); ?>();
			});
			jQuery(document).on("click", ".tsvg-space-popup-info-open-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>", function() {
				jQuery('.tsvg-space-popup-box-info-<?php echo esc_js( $tsvg_shortcode_id ); ?>').addClass('tsvg-space-popup-box-info-div-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?>').addClass('tsvg-space-popup-box-inner-div-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?> .tsvg-space-popup-info-open-container-<?php echo esc_js( $tsvg_shortcode_id ); ?>').addClass('tsvg-space-popup-info-toggle-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
				jQuery('.tsvg-space-popup-box-inner-<?php echo esc_js( $tsvg_shortcode_id ); ?> .tsvg-space-popup-info-close-container-<?php echo esc_js( $tsvg_shortcode_id ); ?>').removeClass('tsvg-space-popup-info-toggle-<?php echo esc_js( $tsvg_shortcode_id ); ?>');
			});
			jQuery(document).on("click", ".tsvg-space-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-space-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>", function() {
				tsvgSpaceCloseInfo<?php echo esc_js( $tsvg_shortcode_id ); ?>();
				tsvgSpaceClose<?php echo esc_js( $tsvg_shortcode_id ); ?>();
			});
			<?php if ( $tsvg_edit != 'true' ) { ?>
				jQuery('body').append( jQuery('.tsvg-space-popup-backface-<?php echo esc_attr($tsvg_shortcode_id); ?>'));
				jQuery('body').append( jQuery('.tsvg-space-popup-box-<?php echo esc_attr($tsvg_shortcode_id); ?>'));
			<?php } ?>
			let tsvgScrollY<?php echo esc_attr( $tsvg_shortcode_id ); ?> = 0;
			function onFullScreenChange<?php echo esc_attr( $tsvg_shortcode_id ); ?>() {
				let inFullScreen<?php echo esc_attr( $tsvg_shortcode_id ); ?> = Boolean(document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement);
				if (!inFullScreen<?php echo esc_attr( $tsvg_shortcode_id ); ?>) {
					window.scrollTo(0, tsvgScrollY<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
				}
			}
			document.addEventListener('fullscreenchange', onFullScreenChange<?php echo esc_attr( $tsvg_shortcode_id ); ?>)
			document.addEventListener('mozfullscreenchange', onFullScreenChange<?php echo esc_attr( $tsvg_shortcode_id ); ?>)
			document.addEventListener('msfullscreenchange', onFullScreenChange<?php echo esc_attr( $tsvg_shortcode_id ); ?>)
			document.addEventListener('webkitfullscreenchange', onFullScreenChange<?php echo esc_attr( $tsvg_shortcode_id ); ?>)
			window.addEventListener("scroll", () => {
				if (window.scrollY === 0) {
					window.scrollTo(0, tsvgScrollY<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
					return;
				}
				tsvgScrollY<?php echo esc_attr( $tsvg_shortcode_id ); ?> = window.scrollY;
			});
			clearInterval(tsvgSpaceInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
		}
	},
	tsvgSpaceInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setInterval(tsvgSpaceCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 1000);
</script>