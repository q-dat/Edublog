<style>
	:root{
		--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_02 ) ); ?>;
		--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_03 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_po_br_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_04 ) ); ?>;
		--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_05 ) ); ?>;
		--tsvg_popup_lip_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_12 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_lip_br_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_13 ) ); ?>;
		--tsvg_popup_lip_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_14 ) ); ?>;
		--tsvg_popup_lip_br_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_15 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_lip_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_16 ) ); ?>;
		--tsvg_popup_lip_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_17 ) ); ?>;    
		--tsvg_popup_lip_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_18 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_lip_lip_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_19 ) ); ?>;
		--tsvg_popup_lip_h_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_20 ) ); ?>;
		--tsvg_popup_lip_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_21 ) ); ?>;
		--tsvg_popup_tip_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_06 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_tip_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_07 ) ); ?>;
		--tsvg_popup_tip_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_08 ) ); ?>;
		--tsvg_popup_tip_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_09 ) ); ?>;
		--tsvg_popup_iip_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_22 ) ); ?>;
		--tsvg_popup_iip_ci_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_23 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_iip_ci_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_24 ) ); ?>;
		--tsvg_popup_iip_a_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_27 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_iip_a_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_28 ) ); ?>;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> div:before, #tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> div:after {
		display: none !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:none;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 99999999;
		width: 100vw;
		height: 100vh;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		position: absolute;
		width: 100vw;
		height: 100vh;
		background-color:black;
		opacity: 0.5;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		position: absolute;
		top: -110%;
		bottom: 0;
		right: 0;
		left: -110%;
		margin: auto !important;
		background-color: var(--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border: var(--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_popup_po_br_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		max-width: 98%;
		overflow:hidden;
		width: 10%;
		height: max-content;
    	min-height: 10%;
    	border-radius: 100%
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
    	justify-content: space-between;
		height: 40px;
		transform: translate(0,-80px);
		-webkit-transition: all 0.5s ease-in-out 0s;
		-moz-transition: all 0.5s ease-in-out 0s;
		-o-transition: all 0.5s ease-in-out 0s;
		-ms-transition: all 0.5s ease-in-out 0s;
		transition: all 0.5s ease-in-out 0s;
		background-color: var(--tsvg_popup_iip_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		padding: 0 10px;
		display: none;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		width: 60%;
    	height: 100%;
		display: flex;
    	justify-content: space-between;
		align-items:center;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
	    width: 40%;
	    height: 100%;
	    display: flex;
    	justify-content: flex-end;
		align-items:center;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-left {
		font-size: var(--tsvg_popup_iip_a_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_popup_iip_a_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-right{
		font-size: var(--tsvg_popup_iip_a_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_popup_iip_a_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close{
		font-size: var(--tsvg_popup_iip_ci_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_popup_iip_ci_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		padding:10px;
		display:flex;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		width: 60%;
		position: relative;
		top:0;
		left:0;
		height: 0;
		padding-bottom:33.75%;
		overflow: hidden;
		margin-top: 10px;
    	margin-left: 3px;
		-webkit-transform: translateX(-1200px);
		-moz-transform: translateX(-1200px);
		-o-transform: translateX(-1200px);
		-ms-transform: translateX(-1200px);
		transform: translateX(-1200px);
		-webkit-transition: all 0.5s ease-in-out 0.5s;
		-moz-transition: all 0.5s ease-in-out 0.5s;
		-o-transition: all 0.5s ease-in-out 0.5s;
		-ms-transition: all 0.5s ease-in-out 0.5s;
		transition: all 0.5s ease-in-out 0.5s;
		-webkit-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
		-ms-transition-delay: 0s;
		transition-delay: 0s;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe,#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img{
		position: absolute;
		left:0;
		top:0;
		width:100%;
		height:100%;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		width: 40%;
		display: flex;
    	justify-content: center;
    	align-content: center;
		-webkit-transform: translateX(1200px);
		-moz-transform: translateX(1200px);
		-o-transform: translateX(1200px);
		-ms-transform: translateX(1200px);
		transform: translateX(1200px);
		-webkit-transition: all 0.5s ease-in-out 0s;
		-moz-transition: all 0.5s ease-in-out 0s;
		-o-transition: all 0.5s ease-in-out 0s;
		-ms-transition: all 0.5s ease-in-out 0s;
		transition: all 0.5s ease-in-out 0s;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		width:100%;
		display: flex;
    	flex-direction: column;
    	justify-content: space-between;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='def']{
		-moz-transform: scale(0.1,0.2);
		-o-transform: scale(0.1,0.2);
		-ms-transform: scale(0.1,0.2);
		transform: scale(0.1,0.2);
    	transition: transform .3s ease-in-out;
		-webkit-transition: -moz-transform .3s ease-in-out; 
   		-moz-transition: -webkit-transform .3s ease-in-out; 
   		-o-transition: -o-transform .3s ease-in-out; 
    	transition: transform .3s ease-in-out;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		width:100%;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display: flex;
    	justify-content: flex-end;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		font-size: var(--tsvg_popup_tip_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		line-height: var(--tsvg_popup_tip_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-family: var(--tsvg_popup_tip_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_popup_tip_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		background-color: var(--tsvg_popup_tip_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		margin: 10px;
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> h2{
		padding:4px;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-titl_position='left'] .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		text-align:left;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-titl_position='center'] .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		text-align:center;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-titl_position='right'] .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		text-align:right;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar {
		width: 0.5em;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px<?php echo esc_html($tsvg_style_options->TotalSoft_GV_2_08); ?>;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar-thumb {
		background-color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_2_09); ?>;
		outline: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_2_09); ?>;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 10px;
    	margin: 10px !important;
		-webkit-transition: all 0.5s ease-in-out 0s;
		-moz-transition: all 0.5s ease-in-out 0s;
		-o-transition: all 0.5s ease-in-out 0s;
		-ms-transition: all 0.5s ease-in-out 0s;
		transition: all 0.5s ease-in-out 0s;
		text-align: left;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		max-height: 23vh;
		overflow-y: auto;
		overflow-x: hidden;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> span{
		line-height: 1.2 !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		background: var(--tsvg_popup_lip_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_popup_lip_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-size: var(--tsvg_popup_lip_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_popup_lip_lip_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border: var(--tsvg_popup_lip_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_popup_lip_br_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_popup_lip_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border-radius: var(--tsvg_popup_lip_br_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		margin:10px;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover {
		background: var(--tsvg_popup_lip_h_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_popup_lip_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, 	.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, -1200px);
		-moz-transform: translate(0, -1200px);
		-o-transform: translate(0, -1200px);
		-ms-transform: translate(0, -1200px);
		transform: translate(0, -1200px);
		-webkit-transition: all 0.5s ease-in-out 0s;
		-moz-transition: all 0.5s ease-in-out 0s;
		-o-transition: all 0.5s ease-in-out 0s;
		-ms-transition: all 0.5s ease-in-out 0s;
		transition: all 0.5s ease-in-out 0s;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?> i, .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> i{
		cursor: pointer;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode01']{
		top: 0;
		left: 0;
		border-radius: 0;
		opacity: 0;
		width:80%;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode01'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode01'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode01'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		opacity:0;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode01'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode02'] {
		bottom:-110%;
		top:0;
		left:0;
		width:80%;
		border-radius: 0;
		-webkit-transform: translateX(0) translateY(0);
		-moz-transform: translateX(0) translateY(0);
		-o-transform: translateX(0) translateY(0);
		-ms-transform: translateX(0) translateY(0);
		transform: translateX(0) translateY(0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode02'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode02'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode02'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode02'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode03']   {
		width: 80%;
		border-radius:0;
		left:-110%;
		top:0;
		-webkit-transform: translateY(0) translateX(0) scale(0.9);
		-moz-transform: translateY(0) translateX(0) scale(0.9);
		transform: translateY(0) translateX(0) scale(0.9);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode03'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode03'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode03'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode03'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode04']   {
		width: 80%;
		border-radius:0;
		left:-110%;
		top:0;
		-webkit-transform: translateY(0) translateX(0) scale(0.9);
		-moz-transform: translateY(0) translateX(0) scale(0.9);
		transform: translateY(0) translateX(0) scale(0.9);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode04'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode04'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode04'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode04'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode05']   {
		width: 80%;
		border-radius:0;
		left:-110%;
		top:0;
		-webkit-transform: translateY(0) translateX(0) scale(0.9);
		-moz-transform: translateY(0) translateX(0) scale(0.9);
		transform: translateY(0) translateX(0) scale(0.9);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode05'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode05'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode05'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode05'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode06']   {
		width: 80%;
		border-radius:0;
		left:-110%;
		top:0;
		-webkit-transform: translateY(0) translateX(0) scale(0.9);
		-moz-transform: translateY(0) translateX(0) scale(0.9);
		transform: translateY(0) translateX(0) scale(0.9);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode06'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode06'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode06'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode06'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode07']   {
		width: 80%;
		border-radius:0;
		left:-110%;
		top:0;
		-webkit-transform: translateY(0) translateX(0) scale(0.9);
		-moz-transform: translateY(0) translateX(0) scale(0.9);
		transform: translateY(0) translateX(0) scale(0.9);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode07'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode07'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode07'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode07'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode08']   {
		width: 80%;
		border-radius:0;
		left:-110%;
		top:0;
		-webkit-transform: translateY(0) translateX(0) scale(0.9);
		-moz-transform: translateY(0) translateX(0) scale(0.9);
		transform: translateY(0) translateX(0) scale(0.9);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode08'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:flex !important;
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode08'] .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div{
		-webkit-transform: translateX(0);
		-moz-transform: translateX(0);
		-o-transform: translateX(0);
		-ms-transform: translateX(0);
		transform: translateX(0);
	} 
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode08'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height: 40px;
		display:flex !important;
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		transform: translate(0,0);
	}
	#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-mode='mode08'] .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		-ms-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> video{
		position: absolute;
    	height: 100%;
	}
	@media screen and (min-width: 641px) and (max-width:1024px){
		.fusion-tb-footer{
			margin-top:5vh;
		}
	}
	@media screen and (max-width: 920px) {
		#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			flex-wrap:wrap;
		}
		#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			width: 100%;
		}
		#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			width: 100%;
		}
		#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			padding-bottom: 50%;
		}
	}
	@media screen and (max-height: 650px) {
		.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> 
		.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			overflow-y: scroll !important;
			overflow-x : hidden  !important;
			height: 80vh !important;
			margin: 10vh auto !important;
			-ms-overflow-style: none;
  			scrollbar-width: none; 
		}
		.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> 
		.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar {
			display: none;
		}
		.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			font-size:17px !important;
		}
		.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> em span{
			line-height:1 !important;
			font-size:15px;
		}
	}
	@media screen and (max-height:600px){
		.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			top: 20vh;
		}
	}
</style>
<?php
	echo sprintf(
		'
		<div class="tsvg-content-popup-%1$s" id="tsvg-content-popup-%1$s" data-tsvg-autoplay="%8$s">
			<div class="tsvg-content-popup-overlay-%1$s"></div>
			<div class="tsvg-content-popup-info-%1$s" data-mode="%7$s" data-tsvg-titl_position="%5$s">
				<div class="tsvg-content-popup-icons-%1$s">
					<div class="tsvg-content-popup-arrow-%1$s">
						<i class="tsvg-content-popup-arrow-left %2$s"></i> 
						<i class="tsvg-content-popup-arrow-right %3$s"></i>
					</div>
					<div class="tsvg-content-popup-arrow-close-%1$s">
						<i class="tsvg-content-popup-arrow-close %4$s"></i>
					</div>
				</div>
				<div class="tsvg-content-popup-elements-%1$s">
					<div class="tsvg-content-popup-element-iframe-%1$s">
						<iframe src="" frameborder="0" allowfullscreen></iframe>
						<img src="">
						<video src="" controls></video>
					</div>
					<div class="tsvg-content-popup-element-desc-section-%1$s">
						<div class="tsvg-content-popup-element-desc-inner-%1$s">
							<div class="tsvg-content-popup-element-desc-div-%1$s">
								<h2 class="tsvg-content-popup-element-title-%1$s"></h2>
								<div class="tsvg-content-popup-element-paragraph-%1$s"></div>
							</div>
							<div class="tsvg-content-popup-element-link-wrapper-%1$s">
								<a style="padding:5px 10px;" href="" class="tsvg-content-popup-element-link-%1$s">
									%6$s
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_30 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_31 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_26 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_10 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_11 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_34 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_37 )
	);
?>
<script type="text/javascript">
	let tsvgContentCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function () {
		if( typeof(jQuery) != "undefined" && jQuery != null  ){
			jQuery( document ).ready(function() {
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').fadeIn();
			});
			jQuery(document).on("click", '.tsvg-cp-block-view-<?php echo esc_attr( $tsvg_shortcode_id ); ?>', function (event) {
				jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display','block');
				let tsvgAutoplay = jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-autoplay'),
					tsvgVideoURL = jQuery(this).attr('data-tsvg-href'),
					tsvgTargetLink = jQuery(this).attr('data-tsvg-link') == '' ? '#' : jQuery(this).attr('data-tsvg-link'),
					tsvgTarget = jQuery(this).attr('data-tsvg-target'),
					tsvgImgURL = jQuery(this).find('img').attr('src'),
					tsvgTitle = jQuery(this).find('h2').text(),
					tsvgParagraph = jQuery(this).find('.tsvg-cp-block-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-show') == 'true' ? jQuery(this).find('.tsvg-cp-block-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html() :  '' ,
					tsvgIndex = jQuery(".tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > ul > li").index(jQuery(this)),
					tsvgContentPopupMode = jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-mode');
				jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  a').attr('href', '');
				jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-idx', tsvgIndex);
				jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
				jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
				let tsvgIsVideo = 'false', tsvgIsVideoMP4 = 'false';
				if (tsvgVideoURL.indexOf('youtube.com/shorts/') > -1 ) {
					tsvgVideoURL = tsvgVideoURL.replace("shorts", "embed")
				}else if (tsvgVideoURL.indexOf('watch?v=') > -1){
					var tsvgVideoURLSplit = tsvgVideoURL.split("=");
					tsvgVideoURL = 'https://www.youtube.com/embed/' + tsvgVideoURLSplit[1];
				}
				if (tsvgVideoURL.indexOf('youtube.com/embed/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?autoplay=1&mute=1';
					}
				} else if (tsvgVideoURL.indexOf('player.vimeo.com/video/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?autoplay=1&muted=1';
					}
				} else if (tsvgVideoURL.indexOf('.mp4') > -1) {
					tsvgIsVideo = 'true';
					tsvgIsVideoMP4 = 'true';
				} else if (tsvgVideoURL.indexOf('fast.wistia.net/embed/iframe/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?wvideo=hashedid';
					}
				} else if (tsvgVideoURL.indexOf('rumble.com/') > -1) {
					tsvgIsVideo = 'true';
				}	
				if (tsvgIsVideo == 'true') {
					if(tsvgIsVideoMP4 == 'true'){
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('src', tsvgVideoURL);
						if (tsvgAutoplay == "true") {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('autoplay', true);
						} else {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').removeAttr('autoplay');
						}
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","none");
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","block");
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("width","100%");
					} else{
						if( tsvgVideoURL.indexOf('rumble.com/') > -1){
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('sandbox','allow-scripts');
						} else {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').removeAttr('sandbox');
						}
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('src', tsvgVideoURL);
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","none");
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","block");
					}
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').css("display","none");
				} else {
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').attr('src', tsvgVideoURL);
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","none");
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","none");
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').css("display","block");
				}
				if (tsvgContentPopupMode == 'def') {
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'width':'80%' })
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'height': '100%', }, 300).css({ 'max-width': '100vw' });
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({
						'top': '0', 'left': '0', 'opacity': '1', 'animation': 'unset', '-webkit-animation': 'unset', '-moz-animation': 'unset'
					}, 400);
					setTimeout(function () {
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'scale(1)', '-ms-transform': 'scale(1)', '-o-transform': 'scale(1)', '-moz-transform': 'scale(1)', '-webkit-transform': 'scale(1)'
						}).animate({ 'border-radius':'0' }, 300);
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').fadeIn('slow').css('display','flex');
					},300);
					if (tsvgTargetLink) {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
					}
					if (tsvgTarget == '_blank') {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
					}
					setTimeout(function () {
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'translate(0, 0)', '-ms-transform': 'translate(0, 0)', '-o-transform': 'translate(0, 0)', '-moz-transform': 'translate(0, 0)', '-webkit-transform': 'translate(0, 0)'
						});	
					}, 300)
					setTimeout(function () {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'translate(0, 0)', '-ms-transform': 'translate(0, 0)', '-o-transform': 'translate(0, 0)', '-moz-transform': 'translate(0, 0)', '-webkit-transform': 'translate(0, 0)'
						});
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'translate(0, 0)', '-ms-transform': 'translate(0, 0)', '-o-transform': 'translate(0, 0)', '-moz-transform': 'translate(0, 0)', '-webkit-transform': 'translate(0, 0)'
						});
						jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'translateX(0px)', '-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)', '-moz-transform': 'translateX(0px)', '-webkit-transform': 'translateX(0px)'
						});
						jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'translateX(0px)', '-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)', '-moz-transform': 'translateX(0px)', '-webkit-transform': 'translateX(0px)'
						});
					}, 400)
				} else if (tsvgContentPopupMode == 'mode01') {
					if (tsvgTargetLink) {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
						jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
							'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
						});
					}
					if (tsvgTarget == '_blank') {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
					}
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'height': '100%', 'background-color': 'rgba(0,0,0,0.5)', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({
						'top': '0', 'left': '0', 'opacity': '1', 'animation': 'unset', '-webkit-animation': 'unset', '-moz-animation': 'unset', 'width':'80%', 'border-radius':'0',
					}, 300);
					jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translate(0, 0)', '-ms-transform': 'translate(0, 0)', '-o-transform': 'translate(0, 0)', '-moz-transform': 'translate(0, 0)', '-webkit-transform': 'translate(0, 0)', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards','opacity':'1'
					});
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(0px)', '-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)', '-moz-transform': 'translateX(0px)', '-webkit-transform': 'translateX(0px)','opacity':'1'
					})
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(0px)', '-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)', '-moz-transform': 'translateX(0px)', '-webkit-transform': 'translateX(0px)'
					});
					jQuery('.TotalSoft_GV_CP_Iframe<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css({
						'transform': 'translateX(0px)', '-ms-transform': 'translateX(0px)', '-o-transform': 'translateX(0px)', '-moz-transform': 'translateX(0px)', '-webkit-transform': 'translateX(0px)'
					});
				} else if (tsvgContentPopupMode == 'mode02') {
					if (tsvgTargetLink) {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
						jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
							'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
						});
					}
					if (tsvgTarget == '_blank') {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
					}
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'height': '100%', 'background-color': 'rgba(0,0,0,0.5)', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '0', 'animation': 'moveUpCPM 0.65s ease forwards', '-webkit-animation': 'moveUpCPM 0.65s ease forwards', '-moz-animation': 'moveUpCPM 0.65s ease forwards', '-moz-animation-delay': '1s','-webkit-animation-delay': '1s','animation-delay': '1s'
					});   
				} else {
					if (tsvgTargetLink) {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
						jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
							'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
						});
					}
					if (tsvgTarget == '_blank') {
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
					}
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'height': '100%', 'background-color': 'rgba(0,0,0,0.5)', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'left': '0'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '0', 'animation': 'scaleUpCPM 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPM 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPM 0.65s ease-in-out forwards'
					});
				}
			}).children().find('.tsvg-cp-block-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').click(function () {
				return false;
			});
			jQuery(document).on("click", '.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>', function (event){
				var tsvgContentPopupMode = jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-mode');
				if (tsvgContentPopupMode == 'def') {
					jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translate(0, -1200px)', '-ms-transform': 'translate(0, -1200px)', '-o-transform': 'translate(0, -1200px)', '-moz-transform': 'translate(0, -1200px)', '-webkit-transform': 'translate(0, -1200px)'
					});
					jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translate(0, -1200px)', '-ms-transform': 'translate(0, -1200px)', '-o-transform': 'translate(0, -1200px)', '-moz-transform': 'translate(0, -1200px)', '-webkit-transform': 'translate(0, -1200px)'
					});
					jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(1200px)', '-ms-transform': 'translateX(1200px)', '-o-transform': 'translateX(1200px)', '-moz-transform': 'translateX(1200px)', '-webkit-transform': 'translateX(1200px)'
					});
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(-1200px)', '-ms-transform': 'translateX(-1200px)', '-o-transform': 'translateX(-1200px)', '-moz-transform': 'translateX(-1200px)', '-webkit-transform': 'translateX(-1200px)'
					});
					setTimeout(function() {
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'translate(0, -80px)', '-ms-transform': 'translate(0, -80px)', '-o-transform': 'translate(0, -80px)', '-moz-transform': 'translate(0, -80px)', '-webkit-transform': 'translate(0, -80px)'
						});
					}, 300)
					setTimeout(function() {
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'width': '10%','height':'10%', 'border-radius':'100%' }, 500);
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').hide('500');
						jQuery('.tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({'height':'0'}, 500);
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'top': '-110%', 'left': '-110%' }, 300)
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'height': '0%' }, 1300).css({ 'max-width': '100vw' });
					}, 500);
					setTimeout(function () {
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div').removeAttr('style');
						jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 1500)
				} else if (tsvgContentPopupMode == 'mode01') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img').attr('src', '');
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards', 'opacity':'0'
					});
					setTimeout(function () {
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'height': '0%', 'opacity':'0' });
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 400)
				} else if (tsvgContentPopupMode == 'mode02') {
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'bottom': '0','animation': 'moveUpCPCM 0.65s ease forwards', '-webkit-animation': 'moveUpCPCM 0.65s ease forwards', '-moz-animation': 'moveUpCPCM 0.65s ease forwards'
					});
					setTimeout(function () {
						jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
						jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img').attr('src', '');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'height': '0%', 'opacity':'0' });
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'bottom' : '-110%', 'top': '0' });
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 800)
				} else {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img').attr('src', '');
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'scaleUpCPCM 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPCM 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPCM 0.65s ease-in-out forwards'
					});
					setTimeout(function () {
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'height': '0%' });
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'left': '-110%' });
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 400)
				}
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> video').attr('src', '');
			})
			jQuery(document).on("click", '.tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close', function (event) {
				let tsvgContentPopupMode = jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-mode');
				if (tsvgContentPopupMode == 'def') {
					jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translate(0, -1200px)', '-ms-transform': 'translate(0, -1200px)', '-o-transform': 'translate(0, -1200px)', '-moz-transform': 'translate(0, -1200px)', '-webkit-transform': 'translate(0, -1200px)'
					});
					jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-close-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translate(0, -1200px)', '-ms-transform': 'translate(0, -1200px)', '-o-transform': 'translate(0, -1200px)', '-moz-transform': 'translate(0, -1200px)', '-webkit-transform': 'translate(0, -1200px)'
					});
					jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(1200px)', '-ms-transform': 'translateX(1200px)', '-o-transform': 'translateX(1200px)', '-moz-transform': 'translateX(1200px)', '-webkit-transform': 'translateX(1200px)'
					});
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(-1200px)', '-ms-transform': 'translateX(-1200px)', '-o-transform': 'translateX(-1200px)', '-moz-transform': 'translateX(-1200px)', '-webkit-transform': 'translateX(-1200px)'
					});
					setTimeout(function() {
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
							'transform': 'translate(0, -80px)', '-ms-transform': 'translate(0, -80px)', '-o-transform': 'translate(0, -80px)', '-moz-transform': 'translate(0, -80px)', '-webkit-transform': 'translate(0, -80px)'
						});
					}, 300)
					setTimeout(function() {
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'width': '10%', 'height':'10%','border-radius':'100%' }, 500);
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').hide('500');
						jQuery('.tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({'height':'0'}, 500);
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'top': '-110%', 'left': '-110%' }, 300)
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'height': '0%' }, 1300).css({ 'max-width': '100vw' });
					}, 500);
					setTimeout(function () {
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > div').removeAttr('style');
						jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-elements-<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 1500)
				} else if (tsvgContentPopupMode == 'mode01') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img').attr('src', '');
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards', 'opacity':'0'
					});
					setTimeout(function () {
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'height': '0%', 'opacity':'0' });
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 400)
				} else if (tsvgContentPopupMode == 'mode02') {
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'bottom': '0','animation': 'moveUpCPCM 0.65s ease forwards', '-webkit-animation': 'moveUpCPCM 0.65s ease forwards', '-moz-animation': 'moveUpCPCM 0.65s ease forwards'
					});
					setTimeout(function () {
						jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
						jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img').attr('src', '');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'height': '0%', 'opacity':'0' });
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'bottom' : '-110%', 'top': '0' });
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 800)
				} else {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img').attr('src', '');
					jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'scaleUpCPCM 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPCM 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPCM 0.65s ease-in-out forwards'
					});
					setTimeout(function () {
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'height': '0%' });
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'left': '-110%' });
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
						jQuery('.tsvg-content-popup-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').removeAttr('style');
					}, 400)
				}
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> video').attr('src', '');
			})
			jQuery(document).on("click", '.tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-left', function (event) {
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> video').attr('src', '');
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
				let tsvgIndex = jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-idx'),
					$this = jQuery('.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > ul li').eq(tsvgIndex).prev();
				if (!$this.length) {
					$this = jQuery('.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > ul li').last();
				}
				let tsvgAutoplay = jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-autoplay'),
					tsvgVideoURL = $this.attr('data-tsvg-href'),
					tsvgTargetLink = $this.attr('data-tsvg-link') == '' ? '#' : $this.attr('data-tsvg-link'),
					tsvgTarget = $this.attr('data-tsvg-target'),
					tsvgImgURL = $this.find('img').attr('src'),
					tsvgTitle = $this.find('h2').text(),
					tsvgParagraph = $this.find('.tsvg-cp-block-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(),
					tsvgContentPopupMode = jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-mode');
				tsvgIndex = jQuery(".tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > ul > li").index(jQuery($this));
				jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', '');
				jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-idx', tsvgIndex);
				let tsvgIsVideo = 'false', tsvgIsVideoMP4 = 'false';
				if (tsvgVideoURL.indexOf('youtube.com/shorts/') > -1 ) {
					tsvgVideoURL = tsvgVideoURL.replace("shorts", "embed")
				}else if (tsvgVideoURL.indexOf('watch?v=') > -1){
					var tsvgVideoURLSplit = tsvgVideoURL.split("=");
					tsvgVideoURL = 'https://www.youtube.com/embed/' + tsvgVideoURLSplit[1];
				}
				if (tsvgVideoURL.indexOf('youtube.com/embed/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?autoplay=1&mute=1';
					}
				} else if (tsvgVideoURL.indexOf('player.vimeo.com/video/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?autoplay=1&muted=1';
					}
				} else if (tsvgVideoURL.indexOf('.mp4') > -1) {
					tsvgIsVideo = 'true';
					tsvgIsVideoMP4 = 'true';
				} else if (tsvgVideoURL.indexOf('fast.wistia.net/embed/iframe/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?wvideo=hashedid';
					}
				} else if (tsvgVideoURL.indexOf('rumble.com/') > -1) {
					tsvgIsVideo = 'true';
				}
				if (tsvgIsVideo == 'true') {
					if(tsvgIsVideoMP4 == 'true'){
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('src', tsvgVideoURL);
						if (tsvgAutoplay == "true") {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('autoplay', true);
						} else {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').removeAttr('autoplay');
						}
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","none");
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","block");
					} else{
						if( tsvgVideoURL.indexOf('rumble.com/') > -1){
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('sandbox','allow-scripts');
						}else {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').removeAttr('sandbox');
						}
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('src', tsvgVideoURL);
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","none");
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","block");
					}
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').css("display","none");
				} else {
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').attr('src', tsvgVideoURL);
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","none");
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","none");
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').css("display","block");
				}
				if (tsvgContentPopupMode == 'def') {
					jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(1200px)', '-ms-transform': 'translateX(1200px)', '-o-transform': 'translateX(1200px)', '-moz-transform': 'translateX(1200px)', '-webkit-transform': 'translateX(1200px)'
					});
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(-1200px)', '-ms-transform': 'translateX(-1200px)', '-o-transform': 'translateX(-1200px)', '-moz-transform': 'translateX(-1200px)', '-webkit-transform': 'translateX(-1200px)'
					});
				} else if (tsvgContentPopupMode == 'mode01') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
				} else if (tsvgContentPopupMode == 'mode02') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'moveUpCPNU 0.65s ease forwards', '-webkit-animation': 'moveUpCPNU 0.65s ease forwards', '-moz-animation': 'moveUpCPNU 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'moveUpCPNU 0.65s ease forwards', '-webkit-animation': 'moveUpCPNU 0.65s ease forwards', '-moz-animation': 'moveUpCPNU 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'moveUpCPNU 0.65s ease forwards', '-webkit-animation': 'moveUpCPNU 0.65s ease forwards', '-moz-animation': 'moveUpCPNU 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'moveUpCPNU 0.65s ease forwards', '-webkit-animation': 'moveUpCPNU 0.65s ease forwards', '-moz-animation': 'moveUpCPNU 0.65s ease forwards'
					});
				} else if (tsvgContentPopupMode == 'mode03') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPNU 0.65s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPNU 0.65s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPNU 0.65s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPNU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPNU 0.65s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode04') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPPU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode05') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flyCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'flyCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'flyCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'flyCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPPU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode06') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPPU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPPU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode07') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPPU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPPU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPPU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPPU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPPU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPPU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPPU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode08') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
				}
				setTimeout(function () {
					if (tsvgContentPopupMode == 'def') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							jQuery('.tsvg-content-popup-icons-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'height': '40px', }, 500);
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
							}
							jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'transform': 'translateX(0)', '-ms-transform': 'translateX(0)', '-o-transform': 'translateX(0)', '-moz-transform': 'translateX(0)', '-webkit-transform': 'translateX(0)'
							});
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'transform': 'translateX(0)', '-ms-transform': 'translateX(0)', '-o-transform': 'translateX(0)', '-moz-transform': 'translateX(0)', '-webkit-transform': 'translateX(0)'
							});
						}, 500);
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
					}else if (tsvgContentPopupMode == 'mode01') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
						}, 500);
					}else if (tsvgContentPopupMode == 'mode02') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
							});
						}, 500);
					}else if (tsvgContentPopupMode == 'mode03') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
						}, 500);
					}else if (tsvgContentPopupMode == 'mode04') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}else if (tsvgContentPopupMode == 'mode05') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}else if (tsvgContentPopupMode == 'mode06') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}else if (tsvgContentPopupMode == 'mode07') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}else if (tsvgContentPopupMode == 'mode08') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
						}, 500)
					}
				}, 600)
			});
			jQuery(document).on("click", '.tsvg-content-popup-arrow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-arrow-right', function (event) {
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> video').attr('src', '');
				jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe').attr('src', '');
				let tsvgIndex = jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-idx'),
					$this = jQuery('.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ul li').eq(tsvgIndex).next();
				if (!$this.length) {
					$this = jQuery('.tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > ul li').first();
				}
				let tsvgAutoplay = jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-autoplay'),
					tsvgVideoURL = jQuery($this).attr('data-tsvg-href'),
					tsvgTargetLink = jQuery($this).attr('data-tsvg-link') == '' ? '#' : jQuery($this).attr('data-tsvg-link'),
					tsvgTarget = jQuery($this).attr('data-tsvg-target'),
					tsvgImgURL = jQuery($this).find('img').attr('src'),
					tsvgTitle = jQuery($this).find('h2').text(),
					tsvgParagraph = jQuery($this).find('.tsvg-cp-block-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(),
					tsvgContentPopupMode = jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-mode');
				tsvgIndex = jQuery(".tsvg-cp-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > ul > li").index(jQuery($this));
				jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', '');
				jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-idx', tsvgIndex);
				let tsvgIsVideo = 'false' , tsvgIsVideoMP4 = 'false';
				if (tsvgVideoURL.indexOf('youtube.com/shorts/') > -1 ) {
					tsvgVideoURL = tsvgVideoURL.replace("shorts", "embed")
				}else if (tsvgVideoURL.indexOf('watch?v=') > -1){
					var tsvgVideoURLSplit = tsvgVideoURL.split("=");
					tsvgVideoURL = 'https://www.youtube.com/embed/' + tsvgVideoURLSplit[1];
				}
				if (tsvgVideoURL.indexOf('youtube.com/embed/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?autoplay=1&mute=1';
					}
				} else if (tsvgVideoURL.indexOf('player.vimeo.com/video/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?autoplay=1&muted=1';
					}
				} else if (tsvgVideoURL.indexOf('.mp4') > -1) {
					tsvgIsVideo = 'true';
					tsvgIsVideoMP4 = 'true';
				} else if (tsvgVideoURL.indexOf('fast.wistia.net/embed/iframe/') > -1) {
					tsvgIsVideo = 'true';
					if(tsvgAutoplay == "true"){
						tsvgVideoURL = tsvgVideoURL + '?wvideo=hashedid';
					}
				} else if (tsvgVideoURL.indexOf('rumble.com/') > -1) {
					tsvgIsVideo = 'true';
				}
				if (tsvgIsVideo == 'true') {
					if(tsvgIsVideoMP4 == 'true'){
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('src', tsvgVideoURL);
						if (tsvgAutoplay == "true") {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('autoplay', true);
						} else {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').removeAttr('autoplay');
						}
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","none");
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","block");
					}
					else{
						if( tsvgVideoURL.indexOf('rumble.com/') > -1){
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('sandbox','allow-scripts');
						}else {
							jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').removeAttr('sandbox');
						}
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('src', tsvgVideoURL);
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","none");
						jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","block");
					}
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').css("display","none");
				} else {
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').attr('src', tsvgVideoURL);
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').css("display","none");
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').css("display","none");
					jQuery('.tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').css("display","block");
				}
				if (tsvgContentPopupMode == 'def') {
					jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(1200px)', '-ms-transform': 'translateX(1200px)', '-o-transform': 'translateX(1200px)', '-moz-transform': 'translateX(1200px)', '-webkit-transform': 'translateX(1200px)'
					});
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'transform': 'translateX(-1200px)', '-ms-transform': 'translateX(-1200px)', '-o-transform': 'translateX(-1200px)', '-moz-transform': 'translateX(-1200px)', '-webkit-transform': 'translateX(-1200px)'
					});
				} else if (tsvgContentPopupMode == 'mode01') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'opacity': '1', 'animation': 'fadeOut 0.65s ease forwards', '-webkit-animation': 'fadeOut 0.65s ease forwards', '-moz-animation': 'fadeOut 0.65s ease forwards'
					});
				} else if (tsvgContentPopupMode == 'mode02') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'moveUpCPPU 0.65s ease forwards', '-webkit-animation': 'moveUpCPPU 0.65s ease forwards', '-moz-animation': 'moveUpCPPU 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'moveUpCPPU 0.65s ease forwards', '-webkit-animation': 'moveUpCPPU 0.65s ease forwards', '-moz-animation': 'moveUpCPPU 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'moveUpCPPU 0.65s ease forwards', '-webkit-animation': 'moveUpCPPU 0.65s ease forwards', '-moz-animation': 'moveUpCPPU 0.65s ease forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'moveUpCPPU 0.65s ease forwards', '-webkit-animation': 'moveUpCPPU 0.65s ease forwards', '-moz-animation': 'moveUpCPPU 0.65s ease forwards'
					});
				} else if (tsvgContentPopupMode == 'mode03') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPU 0.65s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPU 0.65s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPU 0.65s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPU 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPU 0.65s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode04') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPNU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode05') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flyCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'flyCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'flyCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
						'animation': 'flyCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flyCPNU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode06') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'flipCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPNU 0.8s ease-in-out forwards', '-moz-animation': 'flipCPNU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode07') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPNU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPNU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPNU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPNU 0.8s ease-in-out forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'helixCPNU 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPNU 0.8s ease-in-out forwards', '-moz-animation': 'helixCPNU 0.8s ease-in-out forwards'
					});
				} else if (tsvgContentPopupMode == 'mode08') {
					jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
					jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
					jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
					jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
						'animation': 'popUpCPPU 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPU 0.8s ease-in forwards', '-moz-animation': 'popUpCPPU 0.8s ease-in forwards'
					});
				}
				setTimeout(function () {
					if (tsvgContentPopupMode == 'def') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a').css('display', 'initial');
								if (tsvgTarget == 'true') {
									jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
							}
							jQuery('.tsvg-content-popup-element-desc-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'transform': 'translateX(0)', '-ms-transform': 'translateX(0)', '-o-transform': 'translateX(0)', '-moz-transform': 'translateX(0)', '-webkit-transform': 'translateX(0)'
							});
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'transform': 'translateX(0)', '-ms-transform': 'translateX(0)', '-o-transform': 'translateX(0)', '-moz-transform': 'translateX(0)', '-webkit-transform': 'translateX(0)'
							});
						}, 500)
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
					}  else if (tsvgContentPopupMode == 'mode01') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-info-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
							});
						}, 500);
					}
					else if (tsvgContentPopupMode == 'mode02') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'moveUpCPPD 0.65s ease forwards', '-webkit-animation': 'moveUpCPPD 0.65s ease forwards', '-moz-animation': 'moveUpCPPD 0.65s ease forwards'
							});
						}, 500)
					}
					else if (tsvgContentPopupMode == 'mode03') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-webkit-animation': 'scaleUpCPPD 0.65s ease-in-out forwards', '-moz-animation': 'scaleUpCPPD 0.65s ease-in-out forwards'
							});
						}, 500)
					}
					else if (tsvgContentPopupMode == 'mode04') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?> ').css({
								'animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-webkit-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards', '-moz-animation': 'fallPerspectiveCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}
					else if (tsvgContentPopupMode == 'mode05') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flyCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flyCPND 0.8s ease-in-out forwards', '-moz-animation': 'flyCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}
					else if (tsvgContentPopupMode == 'mode06') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'flipCPND 0.8s ease-in-out forwards', '-webkit-animation': 'flipCPND 0.8s ease-in-out forwards', '-moz-animation': 'flipCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}
					else if (tsvgContentPopupMode == 'mode07') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'helixCPND 0.8s ease-in-out forwards', '-webkit-animation': 'helixCPND 0.8s ease-in-out forwards', '-moz-animation': 'helixCPND 0.8s ease-in-out forwards'
							});
						}, 500)
					}
					else if (tsvgContentPopupMode == 'mode08') {
						jQuery('.tsvg-content-popup-element-desc-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(tsvgTitle);
						jQuery('#tsvg-content-popup-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgParagraph);
						setTimeout(function () {
							if (tsvgTargetLink) {
								if (tsvgTarget == 'true') {
									jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', '_blank');
								}
								jQuery('.tsvg-content-popup-element-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgTargetLink);
								jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
									'opacity': '0', 'animation': 'fadeIn 0.65s ease forwards', '-webkit-animation': 'fadeIn 0.65s ease forwards', '-moz-animation': 'fadeIn 0.65s ease forwards'
								});
							}
							jQuery('.tsvg-content-popup-element-iframe-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
							jQuery('.tsvg-content-popup-element-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
							jQuery('.tsvg-content-popup-element-paragraph-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
							jQuery('.tsvg-content-popup-element-link-wrapper-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({
								'animation': 'popUpCPPD 0.8s ease-in forwards', '-webkit-animation': 'popUpCPPD 0.8s ease-in forwards', '-moz-animation': 'popUpCPPD 0.8s ease-in forwards'
							});
						}, 500)
					}
				}, 600)
			});
			<?php if ( $tsvg_edit != 'true' ) { ?>
				jQuery('body').append(jQuery('#tsvg-content-popup-<?php echo esc_attr($tsvg_shortcode_id); ?>'));
			<?php } ?>
			clearInterval(tsvgContentInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
		}
	},
	tsvgContentInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setInterval(tsvgContentCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 1000);
</script>
