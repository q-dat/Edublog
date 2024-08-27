<style type="text/css">
	:root{
	  	--tsvg_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_11 ), FILTER_VALIDATE_INT ); ?>;
	  	--tsvg_p_bw_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_11 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_vi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_12 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_vi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_13 ) ); ?>;
		--tsvg_popup_op_oc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_19 ) ); ?>;
		--tsvg_popup_op_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_21 ) ); ?>;
		--tsvg_popup_op_br_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_22 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_op_sc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_23 ) ); ?>;
		--tsvg_popup_ao_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_32 ) ); ?>;
		--tsvg_popup_ao_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_33 ) ); ?>;
		--tsvg_popup_ao_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_34 ), FILTER_VALIDATE_INT ); ?>%;
		--tsvg_popup_tip_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ) ); ?>;
		--tsvg_popup_tip_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_26 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_tip_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_27 ) ); ?>;
		--tsvg_popup_tip_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_28 ) ); ?>;
		--tsvg_popup_tip_nc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_30 ) ); ?>;
		--tsvg_popup_tip_ns_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_31 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_cio_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_35 ) ); ?>;
		--tsvg_popup_cio_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_36 ) ); ?>;
		--tsvg_popup_cio_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_37 ), FILTER_VALIDATE_INT ); ?>px;
	}
	.tsvg-thumbnails-effect-container<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display: flex;
		flex-wrap: nowrap;
		justify-content: center;
		width: 100%!important;
		height: 100%!important;
		<?php if ( $tsvg_style_options->TotalSoft_GV_2_15 == 'fallPerspective' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'fly' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'flip' ) { ?>
			 -webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'helix' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'popUp' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } ?>
	    position: relative;
		float: left;
		width: 100%;
	}
	.tsvg-th-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		width: 100%;
	}
	.tsvg-thumbnails-block-effect-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 0;
		<?php if ( $tsvg_style_options->TotalSoft_GV_2_15 == 'moveUp' ) { ?>
			-webkit-transform: translateY(200px);
			-moz-transform: translateY(200px);
			transform: translateY(200px);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'scaleUp' ) { ?>
			-webkit-transform: scale(0.6);
			-moz-transform: scale(0.6);
			transform: scale(0.6);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'fallPerspective' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
			-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
			transform: translateZ(400px) translateY(300px) rotateX(-90deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'fly' ) {
			?>
			 -webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform-origin: 50% 50% -300px;
			-moz-transform-origin: 50% 50% -300px;
			transform-origin: 50% 50% -300px;
			-webkit-transform: rotateX(-180deg);
			-moz-transform: rotateX(-180deg);
			transform: rotateX(-180deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'flip' ) {
			?>
			 -webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform-origin: 0% 0%;
			-moz-transform-origin: 0% 0%;
			transform-origin: 0% 0%;
			-webkit-transform: rotateX(-80deg);
			-moz-transform: rotateX(-80deg);
			transform: rotateX(-80deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'helix' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform: rotateY(-180deg);
			-moz-transform: rotateY(-180deg);
			transform: rotateY(-180deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'popUp' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform: scale(0.4);
			-moz-transform: scale(0.4);
			transform: scale(0.4);
		<?php } ?>
	}
	.tsvg-thumbnails-effect-container<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-thumbnails-effect-blocks{
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		list-style-type: none;
		width: 100%!important;
		height: 100%!important;
	}
	li.tsvg-thumbnails-block .adipoli-wrapper{
		margin: 0;
		position: unset;
	}
	.tsvg-thumbnails-effect-container<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-thumbnails-block-effect{
		display: flex;
		flex-wrap: nowrap;
		justify-content: center;
		list-style-type: none;
		margin: 0;
		width: 100%!important;
		height: 100%!important;
	}
	.tsvg-thumbnails-effect-container<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-thumbnails-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		margin: var(--tsvg_p_bw_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		width: calc( calc(100% - calc(2 * var(--tsvg_p_bw_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) *  var(--tsvg_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) ) / var(--tsvg_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))!important;
		list-style: none;
	}
	.tsvg-thumbnails-effect-container<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-thumbnails-block-effect-inner {
		display: inline-block;
		max-width: none;
		border: none;
		opacity: 1;
		width: 100% !important;
		height: 0 !important; 
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-thumbnails-block-effect-inner {
		position: relative;
		padding-bottom: 56.25%;
		width: 100% !important;
		height: 0 !important; 
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-thumbnails-block-effect-inner>img {
		position: absolute;
		top: 0;
		left: 0;
		display: block !important; /* lazy load */
		width: 100% !important;
		height: 100% !important;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .adipoli-wrapper {
		width: 100% !important;
		height: 100% !important; 
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .adipoli-wrapper>img {
		position: absolute;
		top: 0;
		left: 0;
		width: 100% !important;
		height: 100% !important;
	}
    #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .adipoli-before {
		position: absolute;
		z-index: 5;
		top: 0;
		left: 0;
		width: 100% !important;
		height: 100% !important;
		background: rgba(30, 115, 190, 0.3);
		color: rgb(255, 255, 255);
	}
    #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .adipoli-after  {
		position: absolute;
		z-index: 10;
		display: none;
	}
	.tsvg-thumbnails-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:not(.tsvg-thumbnails-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-ef='popout'])  .adipoli-after{
		width: 100% !important;
		height: 100% !important;
	}
    #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>    .adipoli-after img  {
		width: 100% !important;
		height: 100% !important;
	}
    #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .adipoli-slice {
		display: block;
		position: absolute;
		z-index: 15;
		height: 100%;
	}
    #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .adipoli-box {
		display: block;
		position: absolute;
		z-index: 15;
	}
    #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   div.boxer-caption{
		display:block;
	}
	.tsvg-thumbnails-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .adipoli-before p {
		position: relative;
		color: var(--tsvg_vi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		margin: 0px !important;
		text-align: center !important;
		top: 50%;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		z-index: 9999999999;
		font-size: var(--tsvg_vi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-thumbnails-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .adipoli-before .ts-vgallery::before ,
	.tsvg-thumbnails-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .adipoli-before .ts-vgallery-emoji::before {
		font: var(--tsvg_vi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) "FontAwesome";
	}
	.tsvg-thumbnails-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .adipoli-before .ts-vgallery::before{
		color: var(--tsvg_vi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	#boxer{ 
		max-height: 85vh;
		top: 50%;
        transform: translate(0, -50%);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> div.boxer-container{
		overflow:hidden auto !important;
	}	
	.boxer-container::-webkit-scrollbar {
		display: none;
	}
	.boxer-container {
		-ms-overflow-style: none;
		scrollbar-width: none;
	}
	#boxer-overlay.tsvg-boxer-overlay-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		background: var(--tsvg_popup_op_oc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: fixed !important;
		z-index: 999999999 !important;
		opacity: 1 !important;
		transition: opacity 0.25s linear;
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		border-radius: var(--tsvg_popup_op_br_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 0 25px var(--tsvg_popup_op_sc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-popup_bacg='true']{
		background: var(--tsvg_popup_op_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-popup_bacg='false']{
		background: var(--tsvg_popup_op_oc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-titl_bacg='true'] .boxer-container , #boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>.mobile .boxer-content {
	   	background: var(--tsvg_popup_tip_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-caption p {
		color: var(--tsvg_popup_tip_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_popup_tip_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_popup_tip_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		line-height:1;
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-titl_position='left'] .boxer-container p {text-align:left;}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-titl_position='center'] .boxer-container p {text-align:center;}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-titl_position='right'] .boxer-container p {text-align:right;}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-caption {
		background: none !important;
		border: none !important;
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-position {
		color: var(--tsvg_popup_tip_nc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_popup_tip_ns_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		perspective: 800px;
		transform: translate3d(0, 0, 0);
		-moz-transform: translate3d(0, 0, 0);
		-webkit-transform: translate3d(0, 0, 0);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-control {
		background: var(--tsvg_popup_ao_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: var(--tsvg_popup_ao_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-control.previous:before {
		border-right: 10.4px solid var(--tsvg_popup_ao_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-control.next:before {
		border-left: 10.4px solid var(--tsvg_popup_ao_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-close {
		background: var(--tsvg_popup_cio_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: var(--tsvg_popup_cio_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-close:before {
		color: var(--tsvg_popup_cio_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
	}
	.adipoli-slice {
		display: block;
		position: absolute;
		z-index: 15;
		height: 100%;
	}
	.adipoli-box {
		display: block;
		position: absolute;
		z-index: 15;
	}
	.tsvg-thumbnails-block-effect-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 0;
		<?php if ( $tsvg_style_options->TotalSoft_GV_2_15 == 'moveUp' ) { ?>
			-webkit-transform: translateY(200px);
			-moz-transform: translateY(200px);
			transform: translateY(200px);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'scaleUp' ) { ?>
			-webkit-transform: scale(0.6);
			-moz-transform: scale(0.6);
			transform: scale(0.6);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'fallPerspective' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
			-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
			transform: translateZ(400px) translateY(300px) rotateX(-90deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'fly' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform-origin: 50% 50% -300px;
			-moz-transform-origin: 50% 50% -300px;
			transform-origin: 50% 50% -300px;
			-webkit-transform: rotateX(-180deg);
			-moz-transform: rotateX(-180deg);
			transform: rotateX(-180deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'flip' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform-origin: 0% 0%;
			-moz-transform-origin: 0% 0%;
			transform-origin: 0% 0%;
			-webkit-transform: rotateX(-80deg);
			-moz-transform: rotateX(-80deg);
			transform: rotateX(-80deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'helix' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform: rotateY(-180deg);
			-moz-transform: rotateY(-180deg);
			transform: rotateY(-180deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_15 == 'popUp' ) { ?>
			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;
			transform-style: preserve-3d;
			-webkit-transform: scale(0.4);
			-moz-transform: scale(0.4);
			transform: scale(0.4);
		<?php } ?>
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="500px"]{
		--tsvg_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 2;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[max-width~="400px"]{
		--tsvg_v_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>: 1;
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .boxer-position,#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .current,#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .total{
		font-family: var(--tsvg_popup_tip_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	@media (max-height:450px) {
		#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			max-height:96vh !important;
			max-width:90vw !important;
			margin:0 auto;
		}
		#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?> div.boxer-container{
			overflow:hidden auto !important;
		}
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>.mobile{
		max-height:100vh !important;
		max-width:100vw !important;
		margin: 0;
	}
	.boxer-video-wrapper .tsvg_mp4_player{
		width:100%;
		height:100%;
	}
	#boxer.tsvg-boxer-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-show-num='false'] .boxer-position{
		display:none;
	}
	#boxer[data-tsvg-show-navigation="false"] .boxer-control {
		display: none !important;
	}
</style>
<?php
	$tsvg_videos_data_html = '';
	$tsvg_media_index = 0;
	foreach ( $tsvg_videos_data as $key => $value ) {
		$tsvg_media_index++;
		$tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
		$tsvg_media_url_target             = $tsvg_videos_data_object->TotalSoftVGallery_Vid_vont == 'true' ? '_blank' : '_self';
		$tsvg_media_video_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd == '' ? $tsvg_default_video : $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd;
		if(strpos( $tsvg_media_video_url, '/shorts' ) > - 1 ) {	$tsvg_media_video_url = str_replace('shorts','embed', $tsvg_media_video_url );	}
		$tsvg_media_iframe_url              = preg_replace( '/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i', 'https://www.youtube.com/embed/$2', $tsvg_media_video_url );
		$tsvg_media_img_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
		$tsvg_videos_data_html .= sprintf(
			'
			<li class="tsvg-thumbnails-block tsvg-thumbnails-block-%1$s"  data-tsvg-ef="%2$s" data-tsvg-id="%3$s" style="-moz-animation-delay:  %4$ss;-webkit-animation-delay:  %4$ss;animation-delay:  %4$ss;">
				<figure class="tsvg-thumbnails-block-effect">
					<a  href="%5$s" class="tsvg-thumbnails-block-effect-inner tsvg-thumbnails-block-effect-inner-%1$s" data-gallery="video_gallery_%1$s" data-id="%1$s" title="%6$s">
						<img  width="" height="" src="%7$s" alt="%6$s"  title="%6$s" class="tsvg-thumbnails-block-img-%1$s">
					</a>
				</figure>
			</li>
			',
			esc_attr( $tsvg_shortcode_id ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_02 ),
			esc_attr( $tsvg_videos_data[ $key ]->id ),
			esc_attr( 0.3 * $tsvg_media_index ),
			esc_url( $tsvg_media_iframe_url ),
			esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
			esc_url( $tsvg_media_img_url )
		);
	}
	echo sprintf(
		'
		<main class="tsvg-main-content-%1$s  tsvg-thumbnails-effect-container tsvg-thumbnails-effect-container%1$s" data-tsvg-autoplay="%2$s"   data-item-open="%3$s"  data-item-number="%4$s" data-pagination="%5$s" data-p-lm="%6$s">
			<figure  class="tsvg-th-blocks-container-%1$s" data-tsvg-show-num="%10$s" data-tsvg-popup_bacg="%7$s" data-tsvg-titl_bacg="%8$s" data-tsvg-titl_position="%9$s" data-tsvg-show-navigation="%11$s">
				<ul class="tsvg-thumbnails-effect-blocks">
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
		esc_attr(  $tsvg_style_options->TotalSoft_GV_2_15 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_20 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_24 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_29 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_13 ),
		!esc_attr( $tsvg_style_options->TotalSoft_GV_2_22 ) ? 'true' : esc_attr( $tsvg_style_options->TotalSoft_GV_2_22 ),
		$tsvg_videos_data_html
	);
?>
<script>
	jQuery(document).ready(function () {
		jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-thumbnails-block-img-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').adipoli({
			'startEffect': '<?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_01); ?>',
			'hoverEffect': '<?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_02); ?>',
			'imageOpacity': 1,
			'animSpeed': <?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_03); ?>,
			'fillColor': '<?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_04); ?>',
			'textColor': '#ffffff',
			'overlayText': '<i class="<?php echo esc_attr( $tsvg_style_options->TotalSoft_GV_2_14 ); ?>"></i>',
			'slices': <?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_05); ?>,
			'boxCols': <?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_06); ?>,
			'boxRows': <?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_07); ?>,
			'popOutMargin': <?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_08); ?>,
			'popOutShadow': <?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_09); ?>,
			'popOutShadowC': '<?php echo esc_js($tsvg_style_options->TotalSoft_GV_1_10); ?>'
		});
		jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').fadeIn();
		if (jQuery(window).width() < 820) {
			jQuery(".tsvg-thumbnails-block-effect-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").boxer({tsvgId : "<?php echo esc_attr( $tsvg_shortcode_id ); ?>", mobile: true });
		} else {
			jQuery(".tsvg-thumbnails-block-effect-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").not(".retina, .boxer_fixed, .boxer_top, .boxer_format, .boxer_mobile, .boxer_object").boxer({tsvgId : "<?php echo esc_attr( $tsvg_shortcode_id ); ?>"});
		}
		jQuery(".tsvg-thumbnails-block-effect-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>.boxer_object").click(function (e) {
			e.preventDefault();
			e.stopPropagation();
			$.boxer(jQuery('<div class="inline_content"><h2>More Content!</h2><p>This was created by jQuery and loaded into the new Boxer instance.</p></div>'));
		});
		jQuery(window).one("pronto.load", function () {
			jQuery.boxer("close");
			jQuery(".tsvg-thumbnails-block-effect-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").boxer("destroy");
		});
		<?php if ( $tsvg_edit !== 'true' ) { ?>
			let tsvgThumbnailsResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>,
				tsvgThumbnailsHeight<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 0,
				tsvgDoneResizing<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function() {
					jQuery('#tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').css("min-height",(jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').height() + jQuery('#tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper').height()) + "px");
				};
				new ResizeSensor(jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'), function(event){
				tsvgThumbnailsHeight<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = event.height;
				clearTimeout(tsvgThumbnailsResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
				tsvgThumbnailsResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setTimeout(tsvgDoneResizing<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 100);
			});
		<?php } ?>
	});
</script>