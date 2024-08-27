<style>
 	:root{
	  	--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_02 ), FILTER_VALIDATE_INT ); ?>;
	  	--tsvg_g_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_03 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_05 ) ); ?>;
	  	--tsvg_g_place_between_v_i<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_08 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_10 ) ); ?>;
	  	--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_09 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_11 ) ); ?>;
	  	--tsvg_t_t_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_12 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_t_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_13 ) ); ?>;
	  	--tsvg_pi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_17 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_pi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_18 ) ); ?>;
	  	--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_21 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_22 ) ); ?>;
	  	--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_23 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_24 ) ); ?>;
	  	--tsvg_ho_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ) ); ?>;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-parallax-blocks-container {
		width: 100%;
		text-align: center;
		margin:0 auto;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>    .tsvg-parallax-blocks-container * {
		transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		-webkit-transform: translate3d(0, 0, 0);
		perspective: 800px;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  div.fluid-width-video-wrapper{
		padding-top:0;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-blocks-container> ul>li{
		padding:0;
	} 
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		max-width: 100%;
		border-radius: var(--tsvg_g_border_Radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border: none !important;
		position: relative !important;
		display: inline-block;
		overflow: hidden !important;
		width:100%;
		height: auto;
		max-width:calc( calc(100% - calc(2 * var(--tsvg_g_place_between_v_i<?php echo esc_attr( $tsvg_shortcode_id ); ?>) *  var(--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) ) / var(--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))!important;
		margin: var(--tsvg_g_place_between_v_i<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		outline: none !important;
		perspective-origin: 800px !important;
		-webkit-perspective-origin: 800px !important;
		-ms-perspective-origin: 800px !important;
		-moz-perspective-origin: 800px !important;
		-o-perspective-origin: 800px !important;
		transition: all 0s !important;
		-webkit-transition: all 0s !important;
		-ms-transition: all 0s !important;
		-moz-transition: all 0s !important;
		-o-transition: all 0s !important;
		float: left;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-type='1']{
	  box-shadow: 0px 0px var(--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-type='2']{
	  	box-shadow: 0px var(--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		width: 100% !important;
		height: 100% !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-block-inner{
		margin:0;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-block-inner{
		position: relative;
		padding-bottom: 56.25%;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-block-img{
		display:block !important; /* lazy load */
		position: absolute;
		left: 0;
		top: 0;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine1'] {
		position: absolute;
		border: 0px solid red;
		width: 90%;
		height: 90%;
		top: 50%;
		left: 50%;
		z-index: 9999;
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine2'] {
		position: absolute;
		border: 0px solid red;
		opacity: 0;
		width: 85%;
		height: 85%;
		top: 50%;
		left: 50%;
		z-index: 9999;
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine3'] {
		position: absolute;
		border: 0px solid red;
		opacity: 0;
		width: 105%;
		height: 105%;
		top: 50%;
		left: 50%;
		z-index: 9999;
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		transition: all 0.3s cubic-bezier(1, 2.5, 0.3, 1.8);
		-webkit-transition: all 0.3s cubic-bezier(1, 2.5, 0.3, 1.8);
		-ms-transition: all 0.3s cubic-bezier(1, 2.5, 0.3, 1.8);
		-moz-transition: all 0.3s cubic-bezier(1, 2.5, 0.3, 1.8);
		-o-transition: all 0.3s cubic-bezier(1, 2.5, 0.3, 1.8);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine4'] {
		position: absolute;
		border: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		opacity: 0.5;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		top: 100%;
		left: 100%;
		z-index: 9999;
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-webkit-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-ms-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-moz-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-o-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine5'] {
		position: absolute;
		border: 0px solid red;
		width: 90%;
		height: 90%;
		top: 50%;
		left: 50%;
		z-index: 9999;
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine6'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine7'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine8'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine9'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine10'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine11'] {
		position: absolute;
		border: 0px solid red;
		width: 90%;
		height: 90%;
		top: 50%;
		left: 50%;
		z-index: 9999;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine12'] {
		position: absolute;
		border: 0px solid red;
		width: 100%;
		height: 100%;
		top: 50%;
		left: 50%;
		z-index: 9999;
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine4_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine4_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine4_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine4_4'] {
		width: 0px !important;
		height: 0px !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine1_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine2_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine3_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine5_1'] {
		position: absolute;
		width: 100%;
		height: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 0px;
		left: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine1_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine2_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine3_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine5_2'] {
		position: absolute;
		width: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		height: 100%;
		top: 0px;
		right: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine1_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine2_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine3_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine5_3'] {
		position: absolute;
		width: 100%;
		height: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		bottom: 0px;
		right: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine1_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine2_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine3_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine5_4'] {
		position: absolute;
		width: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		height: 100%;
		bottom: 0px;
		left: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine6_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine8_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine9_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine12_1'] {
		position: absolute;
		width: 0%;
		height: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 0px;
		left: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine6_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine8_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine9_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine12_2'] {
		position: absolute;
		width: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		height: 0%;
		top: 0px;
		right: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine6_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine8_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine9_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine12_3'] {
		position: absolute;
		width: 0%;
		height: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		bottom: 0px;
		right: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine6_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine8_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine9_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine12_4'] {
		position: absolute;
		width: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		height: 0%;
		bottom: 0px;
		left: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine7_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine10_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine11_1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine13_1'] {
		position: absolute;
		width: 0%;
		height: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 0px;
		left: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0.6s;
		-webkit-transition-delay: 0.6s;
		-ms-transition-delay: 0.6s;
		-moz-transition-delay: 0.6s;
		-o-transition-delay: 0.6s;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine7_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine10_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine11_2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine13_2'] {
		position: absolute;
		width: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		height: 0%;
		top: 0px;
		right: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.1s linear;
		-webkit-transition: all 0.1s linear;
		-ms-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		-o-transition: all 0.1s linear;
		transition-delay: 0.5s;
		-webkit-transition-delay: 0.5s;
		-ms-transition-delay: 0.5s;
		-moz-transition-delay: 0.5s;
		-o-transition-delay: 0.5s;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-title='TotalSoft_HovLine7_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine10_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine11_3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine13_3'] {
		position: absolute;
		width: 0%;
		height: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		bottom: 0px;
		right: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.2s linear;
		-webkit-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
		transition-delay: 0.3s;
		-webkit-transition-delay: 0.3s;
		-ms-transition-delay: 0.3s;
		-moz-transition-delay: 0.3s;
		-o-transition-delay: 0.3s;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine7_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine10_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine11_4'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_HovLine13_4'] {
		position: absolute;
		width: var(--tsvg_hl_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		height: 0%;
		bottom: 0px;
		left: 0px;
		background: var(--tsvg_hl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_hl_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_hl_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-ms-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine1'] {
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine5'] {
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine6'] {
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine7'] {
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine8'] {
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine9'] {
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine10']{
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine11']{
		transition: all 0s linear;
		-moz-transition: all 0s linear;
		-webkit-transition: all 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine2']{
		opacity: 1;
		width: 90%;
		height: 90%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine3']{
		opacity: 1;
		width: 90%;
		height: 90%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine4']{
		opacity: 1;
		top: 50%;
		left: 50%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine6_1'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine6_2'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine6_3'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine6_4'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine8_1'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine8_2'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine8_3'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine8_4'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine9_1'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine9_2'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine9_3'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine9_4'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine12_1'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine12_2'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine12_3'] {
		width: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine12_4'] {
		height: 100%;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine7_1'] {
		width: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-ms-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine7_2']{
		height: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
		transition-delay: 0.3s;
		-webkit-transition-delay: 0.3s;
		-ms-transition-delay: 0.3s;
		-moz-transition-delay: 0.3s;
		-o-transition-delay: 0.3s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine7_3'] {
		width: 100%;
		transition: all 0.1s linear;
		-webkit-transition: all 0.1s linear;
		-ms-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		-o-transition: all 0.1s linear;
		transition-delay: 0.5s;
		-webkit-transition-delay: 0.5s;
		-ms-transition-delay: 0.5s;
		-moz-transition-delay: 0.5s;
		-o-transition-delay: 0.5s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine7_4']{
		height: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0.6s;
		-webkit-transition-delay: 0.6s;
		-ms-transition-delay: 0.6s;
		-moz-transition-delay: 0.6s;
		-o-transition-delay: 0.6s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine10_1']{
		width:100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-ms-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine10_2'] {
		height: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
		transition-delay: 0.3s;
		-webkit-transition-delay: 0.3s;
		-ms-transition-delay: 0.3s;
		-moz-transition-delay: 0.3s;
		-o-transition-delay: 0.3s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine10_3'] {
		width: 100%;
		transition: all 0.1s linear;
		-webkit-transition: all 0.1s linear;
		-ms-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		-o-transition: all 0.1s linear;
		transition-delay: 0.5s;
		-webkit-transition-delay: 0.5s;
		-ms-transition-delay: 0.5s;
		-moz-transition-delay: 0.5s;
		-o-transition-delay: 0.5s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine10_4'] {
		height: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0.6s;
		-webkit-transition-delay: 0.6s;
		-ms-transition-delay: 0.6s;
		-moz-transition-delay: 0.6s;
		-o-transition-delay: 0.6s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine11_1']{
		width: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-ms-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine11_2'] {
		height: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
		transition-delay: 0.3s;
		-webkit-transition-delay: 0.3s;
		-ms-transition-delay: 0.3s;
		-moz-transition-delay: 0.3s;
		-o-transition-delay: 0.3s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine11_3'] {
		width: 100%;
		transition: all 0.1s linear;
		-webkit-transition: all 0.1s linear;
		-ms-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		-o-transition: all 0.1s linear;
		transition-delay: 0.5s;
		-webkit-transition-delay: 0.5s;
		-ms-transition-delay: 0.5s;
		-moz-transition-delay: 0.5s;
		-o-transition-delay: 0.5s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine11_4'] {
		height: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0.6s;
		-webkit-transition-delay: 0.6s;
		-ms-transition-delay: 0.6s;
		-moz-transition-delay: 0.6s;
		-o-transition-delay: 0.6s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine13_1'] {
		width: 100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0s;
		-webkit-transition-delay: 0s;
		-ms-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine13_2']  {
		height:100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
		transition-delay: 0.3s;
		-webkit-transition-delay: 0.3s;
		-ms-transition-delay: 0.3s;
		-moz-transition-delay: 0.3s;
		-o-transition-delay: 0.3s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine13_3'] {
		width: 100%;
		transition: all 0.1s linear;
		-webkit-transition: all 0.1s linear;
		-ms-transition: all 0.1s linear;
		-moz-transition: all 0.1s linear;
		-o-transition: all 0.1s linear;
		transition-delay: 0.5s;
		-webkit-transition-delay: 0.5s;
		-ms-transition-delay: 0.5s;
		-moz-transition-delay: 0.5s;
		-o-transition-delay: 0.5s;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_HovLine13_4'] {
		height:100%;
		transition: all 0.3s linear;
		-webkit-transition: all 0.3s linear;
		-ms-transition: all 0.3s linear;
		-moz-transition: all 0.3s linear;
		-o-transition: all 0.3s linear;
		transition-delay: 0.6s;
		-webkit-transition-delay: 0.6s;
		-ms-transition-delay: 0.6s;
		-moz-transition-delay: 0.6s;
		-o-transition-delay: 0.6s;
	}
	.tsvg-parallax-block-title-effect {
		perspective: 800px;
		display: flex;
		flex-direction: column;
		gap: 10px;
		line-height:1;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef1'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef2'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef3'], .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef4'] {
		text-shadow: 0px 0px var(--tsvg_t_t_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_t_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef1'] {
		position: absolute;
		z-index: 9999;
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-weight: 800 !important;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-webkit-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-ms-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-moz-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-o-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-webkit-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-ms-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-moz-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-o-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef2']  {
	   	position: absolute;
		z-index: 9999;
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-weight: 800 !important;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%) scale(0, 0) translate3d(0, 0, 0)!important;
		-webkit-transform: translateY(-50%) translateX(-50%) scale(0, 0) translate3d(0, 0, 0)!important;
		-ms-transform: translateY(-50%) translateX(-50%) scale(0, 0) translate3d(0, 0, 0)!important;
		-moz-transform: translateY(-50%) translateX(-50%) scale(0, 0) translate3d(0, 0, 0)!important;
		-o-transform: translateY(-50%) translateX(-50%) scale(0, 0) translate3d(0, 0, 0)!important;
		transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-webkit-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-ms-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-moz-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
		-o-transition: transform 0.4s cubic-bezier(1, 1.5, 0.3, 1.8);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef3']  {
	   	position: absolute;
		z-index: 9999;
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-weight: 800 !important;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0)!important;
		-webkit-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0)!important;
		-ms-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0)!important;
		-moz-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0)!important;
		-o-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0)!important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Title_Ef4']  {
	   position: absolute;
		z-index: 9999;
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-weight: 800 !important;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-webkit-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-ms-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-moz-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		-o-transform: translateY(-50%) translateX(-50%) translate3d(0, 0, 0);
		transition: transform 0.4s linear;
		-webkit-transition: transform 0.4s linear;
		-ms-transition: transform 0.4s linear;
		-moz-transition: transform 0.4s linear;
		-o-transition: transform 0.4s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_Title_Ef1'] {
		transition: transform 0s linear;
		-moz-transition: transform 0s linear;
		-webkit-transition: transform 0s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_Title_Ef2']  {
	   transform: translateY(-50%) translateX(-50%) scale(1, 1) translate3d(0, 0, 0)!important;
		-moz-transform: translateY(-50%) translateX(-50%) scale(1, 1) translate3d(0, 0, 0)!important;
		-webkit-transform: translateY(-50%) translateX(-50%) scale(1, 1) translate3d(0, 0, 0)!important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_Title_Ef4']   {
	  transition: transform 0s linear;
		-moz-transition: transform 0s linear;
		-webkit-transition: transform 0s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Hov_Overlay1'] {
		position: absolute;
		width: 0%;
		height: 0%;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		background: var(--tsvg_ho_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Hov_Overlay2'] {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0%;
		left: 0%;
		background: var(--tsvg_ho_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Hov_Overlay3'] {
		position: absolute;
		width: 0%;
		height: 0%;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		background: var(--tsvg_ho_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Hov_Overlay4'] {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 50%;
		left: 50%;
		transform: translateY(-50%) translateX(-50%);
		-webkit-transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		-moz-transform: translateY(-50%) translateX(-50%);
		-o-transform: translateY(-50%) translateX(-50%);
		background: var(--tsvg_ho_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		opacity: 0 !important;
		transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-webkit-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-ms-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-moz-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
		-o-transition: all 0.4s cubic-bezier(1, 2.5, 0.3, 1.8);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[data-tsvg-ef='TotalSoft_Hov_Overlay5'] {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0%;
		left: 0%;
		background: var(--tsvg_ho_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transition: all 0.4s linear;
		-webkit-transition: all 0.4s linear;
		-ms-transition: all 0.4s linear;
		-moz-transition: all 0.4s linear;
		-o-transition: all 0.4s linear;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_Hov_Overlay1'] {
		width: 90% !important;
		height: 90% !important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_Hov_Overlay3'] {
		width: 100% !important;
		height: 100% !important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_Hov_Overlay4'] {
		opacity: 0.8 !important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-ef='TotalSoft_Hov_Overlay5'] {
		opacity: 0 !important;
	}
	.tsvg-parallax-block-lines[data-tsvg-show='true'] {
		 display: block !important;
	}
	.tsvg-parallax-block-lines[data-tsvg-show='false'] {
	   display: none !important;
	}
	.tsvg-parallax-block-hover[data-tsvg-show='true'] {
	   display: block !important;
	}
	.tsvg-parallax-block-hover[data-tsvg-show='false'] {
		display: none !important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-block-icon {
		font-size: var(--tsvg_pi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_pi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-parallax-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-block-icon[data-tsvg-show='false'] {
		display: none !important;
	}
	.tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video {
		cursor: move; /* fallback if grab cursor is unsupported */
		cursor: grab;
		cursor: -moz-grab;
		cursor: -webkit-grab;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="500px"]{
		--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 2;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="400px"]{
		--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 1;
	}
</style>
<?php
	$tsvg_videos_data_html = '';
	$tsvg_block_index = 0;
	foreach ( $tsvg_videos_data as $key => $value ) {
		$tsvg_block_index++;
		$tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
		$tsvg_media_url_target             = $tsvg_videos_data_object->TotalSoftVGallery_Vid_vont == 'true' ? '_blank' : '_self';
		$tsvg_block_video_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd == '' ? $tsvg_default_video : $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd;
		$tsvg_block_link_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link;
		$tsvg_block_desc                   = $tsvg_videos_data_object->TotalSoftVGallery_Vid_desc;
		$tsvg_block_img_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
		$tsvg_videos_data_html .= sprintf(
			'
			<li class="tsvg-parallax-block-%1$s tsvg-parallax-block-swipebox-%1$s" data-href="%2$s"  data-name="%3$s"  data-tsvg-id="%4$s" style="-moz-animation-delay:  %5$ss;-webkit-animation-delay:  %5$ss;animation-delay:  %5$ss;"  data-tsvg-type="%6$s" data-tsvg-ef="%7$s" >
				<figure class="tsvg-block-inner">
					<img class="tsvg-parallax-block-img" src="%8$s" />
					<div class="mask tsvg-parallax-block-lines" data-tsvg-ef="%9$s"  data-tsvg-show="%10$s">
						<div class="mask mask_1" data-tsvg-ef="%9$s_1"></div>
						<div class="mask mask_2" data-tsvg-ef="%9$s_2" ></div>
						<div class="mask mask_3"  data-tsvg-ef="%9$s_3" ></div>
						<div class="mask mask_4"  data-tsvg-ef="%9$s_4" ></div>
					</div>
					<div class="tsvg-parallax-block-hover" data-tsvg-ef="%11$s"  data-tsvg-show="%12$s"></div>
					<figcaption class="tsvg-parallax-block-title-effect "  data-tsvg-ef="%13$s">
						%3$s
						<i class=" tsvg-parallax-block-icon %14$s" data-tsvg-show="%15$s"></i>
					</figcaption>
				</figure>
			</li>
			',
			esc_attr( $tsvg_shortcode_id ),
			esc_url( $tsvg_block_video_url ),
			esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
			esc_attr( $tsvg_videos_data[ $key ]->id ),
			esc_attr( 0.3 * $tsvg_block_index ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_06 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_07 ),
			esc_url( $tsvg_block_img_url ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_19 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_20 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_26 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_27 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_14 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_16 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_15 )
		);
	}
	echo sprintf(
		'
		<main class="tsvg-main-content-%1$s" data-tsvg-autoplay="%2$s"   data-item-open="%3$s"  data-item-number="%4$s" data-pagination="%5$s" data-p-lm="%6$s">
			<figure  class="tsvg-parallax-blocks-container tsvg-parallax-blocks-container-%1$s"  data-item-prev="%7$s"  data-item-next="%8$s"  data-item-close="%9$s" data-item-efect="%10$s"  data-item-type="%11$s">
				<ul class="tsvg-parallax-blocks-list">
					%12$s  
				</ul>
			</figure>
		</main>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_37 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_07 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_02 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_18 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_38 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_39 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_04 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_30 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_29 ),
		$tsvg_videos_data_html
	);
?>