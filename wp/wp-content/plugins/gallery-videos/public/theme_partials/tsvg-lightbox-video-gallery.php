<style type="text/css">
    :root{
	  	--tsvg_general_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_01 ), FILTER_VALIDATE_INT ); ?>;
	  	--tsvg_general_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_02 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_general_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_03 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_general_sh_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ) ); ?>;
	  	--tsvg_general_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_05 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_general_bd_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_07 ) ); ?>;
	  	--tsvg_general_bd_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_08 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_11 ), FILTER_VALIDATE_FLOAT ); ?>s;
	  	--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_22 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_24 ) ); ?>;
	  	--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_26 ), FILTER_VALIDATE_FLOAT ); ?>s;
		--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_12 ) ); ?>;
	  	--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_14 ), FILTER_VALIDATE_FLOAT ); ?>s;
		--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_15 ) ); ?>;
	  	--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_16 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_17 ) ); ?>;
	  	--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_21 ), FILTER_VALIDATE_FLOAT ); ?>s;
		--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_18 ) ); ?>;
	  	--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_27 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_28 ) ); ?>;
		--tsvg_l_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_29 ) ); ?>;
	  	--tsvg_l_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_30 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_34 ), FILTER_VALIDATE_FLOAT ); ?>s;
		--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_19 ) ); ?>;
	}
   	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	.tsvg-lb-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-lb-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-blocks-list {
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		position: relative;
		text-align: center;
	}
	.tsvg-lb-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-blocks-list  li {
		display: flex;
		justify-content: center;
		overflow: hidden;
		cursor:pointer;
		list-style: none !important;
		width: 100%;
		max-width:calc( calc(100% - calc(2 * var(--tsvg_general_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) *  var(--tsvg_general_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) ) / var(--tsvg_general_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))!important;
		margin: var(--tsvg_general_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border-radius: var(--tsvg_general_bd_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border: var(--tsvg_general_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_general_bd_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0px 0px var(--tsvg_general_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_general_sh_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
	}
	.tsvg-lb-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-blocks-list  li[data-tsvg-border='solid']{ border-style: solid; }    
	.tsvg-lb-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-blocks-list  li[data-tsvg-border='dashed']{ border-style: dashed; }
	.tsvg-lb-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-blocks-list  li[data-tsvg-border='dotted']{ border-style: dotted; }
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: flex;
		justify-content: center;
		flex-direction: column;
		flex-wrap: nowrap;
		width: 100%;
		position: relative;
		overflow: hidden;
		box-shadow: inset -5px -5px 15px 5px var(--tsvg_general_sh_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		padding-top: 56.25%;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover li {
		left: none !important;
		letter-spacing: normal !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		width: 100%;
		height: 100%;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='none'] {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		max-width: none !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='lImgZoom1'] {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		max-width: none !important;
		-o-transform: rotate(0deg) scale(1, 1);
		-ms-transform: rotate(0deg) scale(1, 1);
		-moz-transform: rotate(0deg) scale(1, 1);
		-webkit-transform: rotate(0deg) scale(1, 1);
		transform: rotate(0deg) scale(1, 1);
		transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-img='lImgZoom1'] {
		-ms-transform: rotate(25deg) scale(2, 2);
		-moz-transform: rotate(25deg) scale(2, 2);
		-o-transform: rotate(25deg) scale(2, 2);
		-webkit-transform: rotate(25deg) scale(2, 2);
		transform: rotate(25deg) scale(2, 2);
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='lImgZoom2'] {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		max-width: none !important;
		-ms-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-o-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-img='lImgZoom2'] {
		width: 200%;
		left: -50%;
		top: -50%;
		-ms-transform: rotate(-25deg);
		-webkit-transform: rotate(-25deg);
		-moz-transform: rotate(-25deg);
		transform: rotate(-25deg);
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='lImgZoom3'] {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		max-width: none !important;
		-ms-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-o-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-img='lImgZoom3'] {
		width: 150%;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='lImgZoom4'] {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		max-width: none !important;
		min-height: 100%;
		-ms-transform: rotate(0deg) scale(1);
		-moz-transform: rotate(0deg) scale(1);
		-o-transform: rotate(0deg) scale(1);
		-webkit-transform: rotate(0deg) scale(1);
		transform: rotate(0deg) scale(1);
		transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-o-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-img='lImgZoom4'] {
		-ms-transform: rotate(0deg) scale(1.5);
		-moz-transform: rotate(0deg) scale(1.5);
		-o-transform: rotate(0deg) scale(1.5);
		-webkit-transform: rotate(0deg) scale(1.5);
		transform: rotate(0deg) scale(1.5);
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='lImgZoom5'] {
		position: absolute;
		top: 0px;
		right: 0px;
		width: 100%;
		max-width: none !important;
		-ms-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-o-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-img='lImgZoom5'] {
		width: 150%;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='lImgZoom6'] {
		position: absolute;
		bottom: 0px;
		right: 0px;
		width: 100%;
		max-width: none !important;
		-ms-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-o-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-img='lImgZoom6'] {
		width: 150%;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-tsvg-img='lImgZoom7'] {
		position: absolute;
		bottom: 0px;
		left: 0px;
		width: 100%;
		max-width: none !important;
		transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-o-transition: all var(--tsvg_general_z_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-tsvg-img='lImgZoom7'] {
		width: 150%;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink1'] {
		position: absolute !important;
		top: 40% !important;
		left: 50% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-size: 0px !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>); 
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 5px 0px !important;
		text-align: center !important;
		opacity: 1 !important; 
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink1'] {
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink2'] {
		position: absolute !important;
		top: 40% !important;
		left: 50% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color:  var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 5px 0px !important;
		text-align: center !important;
		opacity: 0 !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink2'] {
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		opacity: 1 !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink3'] {
		position: absolute !important;
		top: 70% !important;
		left: 5% !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 5px 0px !important;
		text-align: center !important;
		opacity: 0 !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink3'] {
		left: 15% !important;
		opacity: 1 !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink4'] {
		position: absolute !important;
		top: 50% !important;
		left: 90% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 5px 0px !important;
		text-align: center !important;
		opacity: 0 !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink4'] {
		left: 50% !important;
		opacity: 1 !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink5'] {
		position: absolute !important;
		top: 80% !important;
		left: 50% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: 0px !important;
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 5px 0px !important;
		text-align: center !important;
		opacity: 0 !important;
		border: none !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink5'] {
		top: 50% !important;
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		opacity: 1 !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink6'] {
		position: absolute !important;
		top: 50% !important;
		left: 40% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 5px 0px !important;
		text-align: center !important;
		opacity: 0 !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink6'] {
		left: 50% !important;
		opacity: 1 !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink7'] {
		position: absolute !important;
		top: 60% !important;
		left: 50% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 0px 7px !important;
		border:  var(--tsvg_l_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_l_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		text-align: center !important;
		opacity: 0 !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-webkit-backface-visibility: hidden;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink7'][data-tsvg-border='solid']{ border-style: solid!important; }    
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink7'][data-tsvg-border='dashed']{ border-style: dashed!important; }
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink7'][data-tsvg-border='dotted']{ border-style: dotted!important; }
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink7'] {
		opacity: 1 !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink8'] {
		position: absolute !important;
		top: -100% !important;
		left: 50% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 0px 7px !important;
		border: var(--tsvg_l_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_l_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center !important;
		opacity: 1 !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink8'][data-tsvg-border='solid']{ border-style: solid!important; }    
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink8'][data-tsvg-border='dashed']{ border-style: dashed!important; }
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink8'][data-tsvg-border='dotted']{ border-style: dotted!important; }
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink8'] {
		opacity: 1 !important;
		top: 60% !important;
		z-index: 1;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink9'] {
		position: absolute !important;
		top: 60% !important;
		left: 50% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		font-family:  var(--tsvg_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: 0px !important;
		color: var(--tsvg_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		padding: 0px 7px !important;
		border:  var(--tsvg_l_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_l_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center !important;
		opacity: 0 !important;
		transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_l_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink9'][data-tsvg-border='solid']{ border-style: solid!important; }    
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink9'][data-tsvg-border='dashed']{ border-style: dashed!important; }
	.tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink9'][data-tsvg-border='dotted']{ border-style: dotted!important; }
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-link-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hover='hovLink9'] {
		opacity: 1 !important;
		z-index: 1;
		font-size: var(--tsvg_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit1']{
		position: absolute !important;
		z-index: 1;
		top: -55% !important;
		width: 100% !important;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 1px 0px !important;
		margin: 0px !important;
		text-align: center !important;
		text-transform: none !important;
		letter-spacing: 0px !important;
		font-weight: 100 !important;
		line-height: 1.2 !important;
		font-family:  var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		background: var(--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit1']{
		top: 5% !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit2']{
		position: absolute !important;
		z-index: 1;
		top: 5% !important;
		left: 100% !important;
		transform: rotate(-90deg) !important;
		-ms-transform: rotate(-90deg) !important;
		-webkit-transform: rotate(-90deg) !important;
		width: 100% !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size:  var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 1px 0px !important;
		text-align: center !important;
		background:  var(--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit2']{
		left: 0% !important;
		transform: rotate(0deg) !important;
		-ms-transform: rotate(0deg) !important;
		-moz-transform: rotate(0deg) !important;
		-o-transform: rotate(0deg) !important;
		-webkit-transform: rotate(0deg) !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit3']{
		position: absolute !important;
		text-transform: none !important;
		font-weight: normal !important;
		letter-spacing: normal !important;
		z-index: 1;
		top: 10% !important;
		left: 15% !important;
		width: 70% !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size: 0px !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 0px 0px !important;
		text-align: center !important;
		background:  var(--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		opacity: 0 !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit3']{
		left: 0% !important;
		top: 5% !important;
		width: 100% !important;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		opacity: 0.8 !important;
		padding: 1px 0px !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit4']{
		position: absolute !important;
		z-index: 1;
		top: 25% !important;
		left: 0% !important;
		width: 100% !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 1px 0px !important;
		text-align: center !important;
		background:  var(--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit4']{
		top: 5% !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit5']{
		position: absolute !important;
		z-index: 1;
		top: 5% !important;
		width: 100% !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		padding: 1px 0px !important;
		text-align: center !important;
		background:  var(--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit6']{
		position: absolute !important;
		z-index: 1;
		top: 50% !important;
		left: 0% !important;
		width: 100% !important;
		display: inline !important;
		padding: 0px !important;
		margin: 0px !important;
		transform: translateY(-50%) !important;
		-ms-transform: translateY(-50%) !important;
		-moz-transform: translateY(-50%) !important;
		-o-transform: translateY(-50%) !important;
		-webkit-transform: translateY(-50%) !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center !important;
		opacity: 1 !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit6']{
		opacity: 0 !important;
		z-index: 1;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit7']{
		position: absolute !important;
		top: 100% !important;
		left: 0% !important;
		width: 100% !important;
		z-index: 1;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		background:  var(--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center !important;
		transform: translateY(0%);
		-ms-transform: translateY(0%);
		-webkit-transform: translateY(0%);
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit7']{
		top: 0% !important;
		z-index: 1;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit8']{
		position: absolute !important;
		top: 50% !important;
		right: 0% !important;
		width: 85% !important;
		display: inline !important;
		z-index: 1;
		padding: 0px !important;
		margin: 0px !important;
		transform: translateY(-50%) !important;
		-ms-transform: translateY(-50%) !important;
		-moz-transform: translateY(-50%) !important;
		-o-transform: translateY(-50%) !important;
		-webkit-transform: translateY(-50%) !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: left !important;
		opacity: 1 !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit9']{
		position: absolute !important;
		top: 45% !important;
		left: 0% !important;
		width: 100% !important;
		display: inline !important;
		z-index: 1;
		padding: 0px !important;
		margin: 0px !important;
		transform: translateY(-50%) !important;
		-ms-transform: translateY(-50%) !important;
		-moz-transform: translateY(-50%) !important;
		-o-transform: translateY(-50%) !important;
		-webkit-transform: translateY(-50%) !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center !important;
		opacity: 1 !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit10'] {
		position: absolute !important;
		top: 20% !important;
		left: 0% !important;
		width: 0% !important;
		z-index: 1;
		display: inline !important;
		padding: 0px !important;
		margin: 0px !important;
		left: 50% !important;
		font-size: 0px !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center !important;
		opacity: 1 !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit10'] {
		width: 100% !important;
		top: 30% !important;
		left: 0% !important;
		z-index: 1;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [data-hover ='hovTit11'] {
		position: absolute !important;
		top: 20% !important;
		left: 10% !important;
		width: 40% !important;
		z-index: 1;
		display: inline !important;
		transform: translateX(0%) !important;
		-ms-transform: translateX(0%) !important;
		-moz-transform: translateX(0%) !important;
		-o-transform: translateX(0%) !important;
		-webkit-transform: translateX(0%) !important;
		padding: 0px !important;
		margin: 0px !important;
		font-family: var(--tsvg_title_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		font-size: var(--tsvg_title_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_title_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: center !important;
		opacity: 0 !important;
		transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_title_ht_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [data-hover='hovTit11'] {
		top: 30% !important;
		left: 50% !important;
		transform: translateX(-50%) !important;
		-ms-transform: translateX(-50%) !important;
		-moz-transform: translateX(-50%) !important;
		-o-transform: translateX(-50%) !important;
		-webkit-transform: translateX(-50%) !important;
		opacity: 1 !important;
	}
	.tsvg-block-link-hover, .tsvg-block-link-hover:hover {
		text-decoration: none !important;
		box-shadow: none !important;
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-sizing: border-box !important;
		-moz-box-sizing: border-box !important;
		-webkit-box-sizing: border-box !important;
	}
	.tsvg-block-link-hover:focus {
		border: none;
		outline: none !important;
	}
	.tsvg_pp_top<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		position: relative;
	}
	* html .tsvg_pp_top<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 0 20px;
	}
	.tsvg_pp_top<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_left<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		left: 0;
		position: absolute;
		width: 20px;
	}
	.tsvg_pp_top<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_middle<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		left: 20px;
		position: absolute;
		right: 20px;
	}
	* html .tsvg_pp_top<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_middle<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		left: 0;
		position: static;
	}
	.tsvg_pp_top<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_right<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		left: auto;
		position: absolute;
		right: 0;
		top: 0;
		width: 20px;
	}
	.tsvg_pp_content<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		overflow: hidden;
	}
	.tsvg_pp_hover_container<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 0;
		width: 100%;
		z-index: 2000;
	}
	 .tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		left: 50%;
		margin-top: -50px;
		position: absolute;
		z-index: 10000;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> ul {
		float: left;
		height: 35px;
		margin: 0 0 0 5px;
		overflow: hidden;
		padding: 0;
		position: relative;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> ul a {
		border: 1px rgba(0, 0, 0, 0.5) solid;
		display: block;
		float: left;
		height: 33px;
		overflow: hidden;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> ul a:hover, .tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> li.selected a {
		border-color: #fff;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> ul a img {
		border: 0;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> li {
		display: block;
		float: left;
		margin: 0 5px 0 0;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> li.default a {
		background: url(../Images/default_thumbnail.gif) 0 0 no-repeat;
		display: block;
		height: 33px;
		width: 50px;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> li.default a img {
		display: none;
	}
	 .tsvg_pp_bottom<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		position: relative;
		z-index: -1;
	}
	* html .tsvg_pp_bottom<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 0 20px;
	}
	.tsvg_pp_bottom<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_left<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		left: 0;
		position: absolute;
		width: 20px;
	}
	.tsvg_pp_bottom<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_middle<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		left: 20px;
		position: absolute;
		right: 20px;
	}
	* html .tsvg_pp_bottom<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_middle<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		left: 0;
		position: static;
	}
	.tsvg_pp_bottom<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg_pp_right<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		height: 20px;
		left: auto;
		position: absolute;
		right: 0;
		top: 0;
		width: 20px;
	}
	.tsvg_pp_top<?php echo esc_attr( $tsvg_shortcode_id ); ?> div {
		background: none !important;
	}
	.tsvg_pp_bottom<?php echo esc_attr( $tsvg_shortcode_id ); ?> div {
		background: none !important;
	}
	div.ppt<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		color: #fff;
		display: none;
		font-size: 17px;
		margin: 0 0 5px 15px;
		z-index: 9999;
	}
	div.ppt<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none !important;
	}
	.tsvg-pagination-pages<?php echo esc_attr( $tsvg_shortcode_id ); ?> li:before {
		transform: none !important;
		perspective-origin: 800px;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG1']{
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		z-index: 1;
		max-width: none !important;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		opacity: 0;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG1']{
		opacity: 0.8;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG2']{
		position: absolute !important;
		top: 0% !important;
		left: 100% !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transform: rotate(-90deg) !important;
		-ms-transform: rotate(-90deg) !important;
		-moz-transform: rotate(-90deg) !important;
		-o-transform: rotate(-90deg) !important;
		-webkit-transform: rotate(-90deg) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG2']{
		left: 0% !important;
		top: 0% !important;
		transform: rotate(0deg) !important;
		-ms-transform: rotate(0deg) !important;
		-moz-transform: rotate(0deg) !important;
		-webkit-transform: rotate(0deg) !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG3']{
		position: absolute !important;
		top: 0% !important;
		left: 100% !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transform: rotateY(-180deg) !important;
		-ms-transform: rotateY(-180deg) !important;
		-moz-transform: rotateY(-180deg) !important;
		-o-transform: rotateY(-180deg) !important;
		-webkit-transform: rotateY(-180deg) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG3']{
		left: 0% !important;
		top: 0% !important;
		transform: rotateY(0deg) !important;
		-ms-transform: rotateY(0deg) !important;
		-moz-transform: rotateY(0deg) !important;
		-o-transform: rotateY(0deg) !important;
		-webkit-transform: rotateY(0deg) !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG4']{
		position: absolute !important;
		top: 50% !important;
		left: 50% !important;
		width: 0% !important;
		height: 0% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transform: translateY(-50%) translateX(-50%) rotate(-180deg) !important;
		-ms-transform: translateY(-50%) translateX(-50%) rotate(-180deg) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) rotate(-180deg) !important;
		-moz-transform: translateY(-50%) translateX(-50%) rotate(-180deg) !important;
		-o-transform: translateY(-50%) translateX(-50%) rotate(-180deg) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG4']{
		left: 0% !important;
		top: 0% !important;
		width: 100% !important;
		height: 100% !important;
		transform: rotate(0deg) !important;
		-ms-transform: rotate(0deg) !important;
		-moz-transform: rotate(0deg) !important;
		-o-transform: rotate(0deg) !important;
		-webkit-transform: rotate(0deg) !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG5']{
		position: absolute !important;
		top: 50% !important;
		left: 50% !important;
		width: 0% !important;
		height: 0% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transform: translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
		-ms-transform: translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
		-moz-transform: translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
		-o-transform: translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG5']{
		width: 100% !important;
		height: 100% !important;
		transform: translateY(-50%) translateX(-50%) rotateX(0deg) !important;
		-ms-transform: translateY(-50%) translateX(-50%) rotateX(0deg) !important;
		-moz-transform: translateY(-50%) translateX(-50%) rotateX(0deg) !important;
		-o-transform: translateY(-50%) translateX(-50%) rotateX(0deg) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) rotateX(0deg) !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG6']{
		position: absolute !important;
		top: 50% !important;
		left: 50% !important;
		width: 0% !important;
		height: 0% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transform: translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
		-ms-transform: translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
		-moz-transform: translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
		-o-transform: translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG6']{
		width: 100% !important;
		height: 100% !important;
		transform: translateY(-50%) translateX(-50%) rotateY(0deg) !important;
		-ms-transform: translateY(-50%) translateX(-50%) rotateY(0deg) !important;
		-moz-transform: translateY(-50%) translateX(-50%) rotateY(0deg) !important;
		-o-transform: translateY(-50%) translateX(-50%) rotateY(0deg) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) rotateY(0deg) !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG7']{
		position: absolute !important;
		top: 50% !important;
		left: 50% !important;
		width: 0% !important;
		height: 0% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG7']{
		left: 0% !important;
		top: 0% !important;
		width: 100% !important;
		height: 100% !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG8']{
		position: absolute !important;
		top: 50% !important;
		left: 0% !important;
		width: 100% !important;
		height: 0% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		visibility: hidden !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG8']{
		top: 0% !important;
		height: 100% !important;
		visibility: visible !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG9']{
		position: absolute !important;
		top: 0% !important;
		left: 50% !important;
		width: 0% !important;
		height: 100% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG9']{
		left: 0% !important;
		width: 100% !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG10'] {
		position: absolute !important;
		top: -100% !important;
		left: 0% !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		opacity: 0 !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG10'] {
		top: 0% !important;
		opacity: 0.8 !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG11'] {
		position: absolute !important;
		top: 0% !important;
		left: 0% !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 1;
		border: 20px solid var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		opacity: 0 !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG11'] {
		opacity: 0.8 !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG12'] {
		position: absolute !important;
		top: 0% !important;
		left: 0% !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 1;
		border: 20px solid var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-lightbox-block-hover-layout-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-hoverlay='hovLayTVG13'] {
		position: absolute !important;
		top: 0% !important;
		left: 0% !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 1;
		background: var(--tsvg_hoo_bc_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-o-transition: all var(--tsvg_hoo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine1'] {
		position: absolute !important;
		width: 10% !important;
		height: 10% !important;
		z-index: 1;
		border: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		top: 50% !important;
		left: 50% !important;
		opacity: 0 !important;
		transform: translateY(-50%) translateX(-50%) !important;
		-ms-transform: translateY(-50%) translateX(-50%) !important;
		-moz-transform: translateY(-50%) translateX(-50%) !important;
		-o-transform: translateY(-50%) translateX(-50%) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) !important;
		transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-webkit-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-ms-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-moz-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-o-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine1'] {
		width: 90% !important;
		height: 90% !important;
		opacity: 1 !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine2'] {
		position: absolute !important;
		width: 110% !important;
		height: 110% !important;
		z-index: 1;
		border: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		top: 50% !important;
		left: 50% !important;
		opacity: 0 !important;
		transform: translateY(-50%) translateX(-50%) !important;
		-ms-transform: translateY(-50%) translateX(-50%) !important;
		-moz-transform: translateY(-50%) translateX(-50%) !important;
		-o-transform: translateY(-50%) translateX(-50%) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) !important;
		transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-webkit-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-ms-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-moz-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-o-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine2'] {
		width: 90% !important;
		height: 90% !important;
		opacity: 1 !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine3'] {
		position: absolute !important;
		width: 90% !important;
		height: 90% !important;
		z-index: 1;
		border: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border-right: 0px solid #fff !important;
		top: 50% !important;
		left: 40% !important;
		opacity: 0 !important;
		transform: translateY(-50%) translateX(-50%) !important;
		-ms-transform: translateY(-50%) translateX(-50%) !important;
		-moz-transform: translateY(-50%) translateX(-50%) !important;
		-o-transform: translateY(-50%) translateX(-50%) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) !important;
		transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-webkit-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-ms-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-moz-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-o-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine3'] {
		left: 50% !important;
		opacity: 1 !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine4'] {
		position: absolute !important;
		width: 0% !important;
		height: 0% !important;
		z-index: 1;
		border: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		top: 50% !important;
		left: 10% !important;
		opacity: 0 !important;
		transform: translateY(-50%) translateX(0%) !important;
		-ms-transform: translateY(-50%) translateX(0%) !important;
		-moz-transform: translateY(-50%) translateX(0%) !important;
		-o-transform: translateY(-50%) translateX(0%) !important;
		-webkit-transform: translateY(-50%) translateX(0%) !important;
		transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-webkit-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-ms-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-moz-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-o-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine4'] {
		width: 80% !important;
		opacity: 1 !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine5'] {
		position: absolute !important;
		width: 0% !important;
		height: 90% !important;
		z-index: 1;
		border-top: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border-bottom: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		top: 5% !important;
		left: 50% !important;
		opacity: 0 !important;
		transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-webkit-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-ms-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-moz-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-o-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine5'] {
		width: 80% !important;
		opacity: 1 !important;
		left: 10% !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine6'] {
		position: absolute !important;
		width: 120px !important;
		height: 120px !important;
		z-index: 1;
		border: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		border-radius: 50% !important;
		top: 100% !important;
		left: 100% !important;
		opacity: 0 !important;
		transform: translateY(-50%) translateX(-50%) !important;
		-ms-transform: translateY(-50%) translateX(-50%) !important;
		-moz-transform: translateY(-50%) translateX(-50%) !important;
		-o-transform: translateY(-50%) translateX(-50%) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) !important;
		transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-webkit-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-ms-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-moz-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-o-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine6'] {
		top: 50% !important;
		left: 50% !important;
		opacity: 1 !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine7'] {
		position: absolute !important;
		width: 0px !important;
		height: 0px !important;
		z-index: 1;
		border: var(--tsvg_hlo_l_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_hlo_l_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		top: 50% !important;
		left: 50% !important;
		opacity: 0 !important;
		transform: translateY(-50%) translateX(-50%) rotate(0deg) !important;
		-ms-transform: translateY(-50%) translateX(-50%) rotate(0deg) !important;
		-moz-transform: translateY(-50%) translateX(-50%) rotate(0deg) !important;
		-o-transform: translateY(-50%) translateX(-50%) rotate(0deg) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) rotate(0deg) !important;
		transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-webkit-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-ms-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-moz-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
		-o-transition: all var(--tsvg_hlo_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear !important;
	}
	.tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[ data-hoverline='hovLine7'] {
		width: 100px !important;
		height: 100px !important;
		transform: translateY(-50%) translateX(-50%) rotate(45deg) !important;
		-ms-transform: translateY(-50%) translateX(-50%) rotate(45deg) !important;
		-moz-transform: translateY(-50%) translateX(-50%) rotate(45deg) !important;
		-o-transform: translateY(-50%) translateX(-50%) rotate(45deg) !important;
		-webkit-transform: translateY(-50%) translateX(-50%) rotate(45deg) !important;
		opacity: 1 !important;
	}
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-border='solid']{ border-style: solid!important; }
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-border='dashed']{ border-style: dashed!important; }
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-border='dotted']{ border-style: dotted!important; }
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-border='solid'][ data-hoverline='hovLine5']{border-left:none!important; border-right: none!important; border-style: solid!important; }
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-border='dashed'][ data-hoverline='hovLine5']{ border-left:none!important; border-right: none!important; border-style: dashed; }
	.tsvg-block-hover-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-border='dotted'][ data-hoverline='hovLine5']{ border-left:none!important; border-right: none!important; border-style: dotted; }
	a.tsvg_pp_expand<?php echo esc_attr( $tsvg_shortcode_id ); ?>, a.pp_contract<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		cursor: pointer;
		display: none;
		height: 20px;
		position: absolute;
		right: 30px;
		text-indent: -10000px;
		top: 10px;
		width: 20px;
		z-index: 20000;
	}
	.tsvg_pp_loader_icon<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: block;
		height: 24px;
		left: 50%;
		margin: -12px 0 0 -12px;
		position: absolute;
		top: 50%;
		width: 24px;
	}
	.tsvg_pp_gallery<?php echo esc_attr( $tsvg_shortcode_id ); ?> a {
		background: none !important;
		border: none !important;
		display: none !important;
		height: 146px;
		padding: 2px !important;
		width: 235px;
	}
	.tsvg-lightbox-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-lightbox-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-block-image-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display:block !important; /* lazy load */
	}
	a[href=''] {
		display:none!important;
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
		$tsvg_media_link                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link;
		$tsvg_media_img_url                  = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
		$tsvg_videos_data_html .= sprintf(
			'
			<li class="tsvg-lightbox-block tsvg-lightbox-block-%1$s" data-tsvg-border="%3$s" data-tsvg-id="%4$s" style="-moz-animation-delay:  %5$ss;-webkit-animation-delay:  %5$ss;animation-delay:  %5$ss;">
				<figure class="tsvg-lightbox-block-inner-%1$s"  data-tsvg-href="%6$s" data-tsvg-title="%7$s">
					<div class="tsvg-lightbox-block-hover-layout-%1$s" data-hoverlay="%8$s" ></div>
					<figcaption class="tsvg-block-title-hover-layout-%1$s" data-hover="%9$s">
						%7$s
					</figcaption>
					<div class="tsvg-block-hover-line-%1$s" data-hoverline="%10$s" data-tsvg-border="%11$s"></div>
					<img  width="" height="" src="%12$s" alt="img" class="tsvg-block-image tsvg-block-image-%1$s" data-tsvg-img="%13$s" >
					<a href="%14$s" class="tsvg-block-link-hover tsvg-block-link-hover-%1$s"  data-hover="%15$s"  target="%16$s" data-tsvg-border="%17$s">
						%2$s  
					</a>
				</figure>
			</li>
			',
			esc_attr( $tsvg_shortcode_id ),
			esc_html( $tsvg_style_options->TotalSoft_GV_2_32 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_06 ),
			esc_attr( $tsvg_videos_data[ $key ]->id ),
			esc_attr( 0.3 * $tsvg_media_index ),
			esc_url( $tsvg_media_video_url ),
			esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_13 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_20 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_25 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_23 ),
			esc_url( $tsvg_media_img_url ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_10 ),
			esc_url( $tsvg_media_link ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_2_33 ),
			esc_attr( $tsvg_media_url_target ),
			esc_html( $tsvg_style_options->TotalSoft_GV_2_31 )
		);
	}
	echo sprintf(
		'
		<main data-tsvg-autoplay="%2$s" class="tsvg-main-content-%1$s"   data-item-open="%3$s" data-item-number="%4$s" data-pagination="%5$s"  data-p-lm="%6$s">
			<figure  class="tsvg-lb-blocks-container-%1$s" data-item-play="%7$s" data-item-paus="%8$s" data-item-close="%9$s" data-item-next="%10$s" data-item-prev="%11$s"  data-item-close-text="%12$s" data-item-title-show="%13$s" data-item-title-align="%14$s" >
				<ul class="tsvg-blocks-list">
					%15$s  
				</ul>
			</figure>
		</main>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_38 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_07 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_02 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_35 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_20 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_21 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_25 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_32 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_31 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_28 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_14 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_15 ),
		$tsvg_videos_data_html
	);
?>
