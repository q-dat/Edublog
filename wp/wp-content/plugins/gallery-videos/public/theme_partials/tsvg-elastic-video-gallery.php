<style type="text/css">
	:root{
	  	--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_01 ), FILTER_VALIDATE_INT ); ?>;
	  	--tsvg_g_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_03 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_bd_t_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ) ); ?>;
		--tsvg_g_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_05 ) ); ?>;
	  	--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_06 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_07 ) ); ?>;
	  	--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo esc_html( $tsvg_style_options->TotalSoft_GV_1_09 ); ?>s;
		--tsvg_vto_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_11 ) ); ?>;
		--tsvg_vto_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_12 ) ); ?>;
	  	--tsvg_vto_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_10 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_vto_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_13 ) ); ?>;
	  	--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo esc_html( $tsvg_style_options->TotalSoft_GV_1_15 ); ?>s;
	  	--tsvg_pio_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_17 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_pio_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_18 ) ); ?>;
	  	--tsvg_pio_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_20 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_pio_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_21 ) ); ?>;
		--tsvg_pio_bd_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_22 ) ); ?>;
		--tsvg_pio_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_23 ) ); ?>;
		--tsvg_lio_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_24 ) ); ?>;
		--tsvg_lio_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ) ); ?>;
		--tsvg_lio_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_26 ) ); ?>;
	}
  	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-block-inner{
		position: relative;
		padding-bottom: 56.25%;
		width: 100%!important;
		height: 100%!important; 
		margin: 0;
	}
	.tsvg-elastic-lg-toolbar<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-icon<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		color: <?php echo esc_attr($tsvg_style_options->TotalSoft_GV_1_30); ?>;
		cursor: pointer;
		float: right;
		font-size: <?php echo esc_attr($tsvg_style_options->TotalSoft_GV_1_31); ?>px;
		height: 47px;
		line-height: 27px;
		padding: 10px 0;
		text-align: center;
		width: 50px;
		text-decoration: none !important;
		outline: medium none;
		-webkit-transition: color 0.2s linear;
		-moz-transition: color 0.2s linear;
		-o-transition: color 0.2s linear;
		transition: color 0.2s linear;
	}
	.tsvg-elastic-lg-toolbar<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-iconn {
		color: <?php echo esc_attr($tsvg_style_options->TotalSoft_GV_1_30); ?>;
		cursor: pointer;
		float: right;
		font-size: <?php echo esc_attr($tsvg_style_options->TotalSoft_GV_1_31); ?>px;
		height: 47px;
		line-height: 27px;
		padding: 10px 0;
		text-align: center;
		width: 50px;
		text-decoration: none !important;
		outline: medium none;
		-webkit-transition: color 0.2s linear;
		-moz-transition: color 0.2s linear;
		-o-transition: color 0.2s linear;
		transition: color 0.2s linear;
	}
	.tsvg-elastic-lg-toolbar<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-close<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		display: none !important;
	}
	.tsvg-elastic-lg-actions<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-next<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-elastic-lg-actions<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-prev<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		background-color: <?php echo esc_attr($tsvg_style_options->TotalSoft_GV_1_35); ?>;
		border-radius: 2px;
		color: <?php echo esc_attr($tsvg_style_options->TotalSoft_GV_1_34); ?>;
		cursor: pointer;
		display: block;
		font-size: <?php echo esc_attr($tsvg_style_options->TotalSoft_GV_1_33); ?>px;
		padding: 8px 10px 9px;
		position: absolute;
		top: 50%;
		transform: translateY(-50%) translate3d(0, 0, 0);
		-webkit-transform: translateY(-50%) translate3d(0, 0, 0);
		-ms-transform: translateY(-50%) translate3d(0, 0, 0);
		-moz-transform: translateY(-50%) translate3d(0, 0, 0);
		-o-transform: translateY(-50%) translate3d(0, 0, 0);
		perspective: 800px;
		z-index: 1080;
	}
	.tsvg-elastic-lg-actions<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-prev<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		display: none;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: inline-block;
		position: relative;
		width: calc( calc(100% - calc(2 * 5px *  var(--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) ) / var(--tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))!important;
		height: 100%;
		border:  var(--tsvg_g_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)	var(--tsvg_g_bd_t_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		box-shadow: 0px 0px var(--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		-moz-box-shadow: 0px 0px var(--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0px 0px var(--tsvg_g_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		margin: 5px;
		padding: 0;
		overflow: hidden;
		float: left;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='none']{ border-style: none;}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='solid']{ border-style: solid;}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='dashed']{ border-style: dashed;}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='dotted']{ border-style: dotted;}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff1'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 125% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [ data-tsvg-img='zEff1'] {
		top: -25%;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff2'] {
		position: absolute;
		top: -25%;
		left: 0%;
		width: 100%;
		height: 125% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover  [ data-tsvg-img='zEff2'] {
		top: 0%;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff3'] {
		position: absolute;
		top: -15%;
		left: -15%;
		width: 130%;
		max-width:130%;
		height: 130% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover  [ data-tsvg-img='zEff3'] {
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff4'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [ data-tsvg-img='zEff4'] {
		top: -15%;
		left: -15%;
		width: 130%;
		height: 130% !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff5'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [ data-tsvg-img='zEff5'] {
		width: 130%;
		height: 130% !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff6'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [ data-tsvg-img='zEff6'] {
		width: 130%;
		height: 130% !important;
		top: -30%;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff7'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [ data-tsvg-img='zEff7'] {
		width: 130%;
		height: 130% !important;
		left: -30%;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff8'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
		transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-webkit-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-moz-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
		-ms-transition: all var(--tsvg_g_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover [ data-tsvg-img='zEff8'] {
		width: 130%;
		height: 130% !important;
		left: -30%;
		top: -30%;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-img='zEff9'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		height: 100% !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[ data-tsvg-hover='zTitfHov1'] {
		position: absolute;
		bottom: -1%;
		left: 0%;
		width: 100%;
		padding-top: 5px;
		padding-bottom: 5px;
		text-align: left;
		background:  var(--tsvg_vto_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: #fff;
		transform: translateY(100%) !important;
		-webkit-transform: translateY(100%) !important;
		-moz-transform: translateY(100%) !important;
		-ms-transform: translateY(100%) !important;
		transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  linear;
		-moz-transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover *[ data-tsvg-hover='zTitfHov1'] {
		transform: translateY(0%) !important;
		-webkit-transform: translateY(0%) !important;
		-moz-transform: translateY(0%) !important;
		-ms-transform: translateY(0%) !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[ data-tsvg-hover='zTitfHov2'] {
		position: absolute;
		top: -1%;
		left: 0%;
		width: 100%;
		padding-top: 5px;
		padding-bottom: 5px;
		text-align: left;
		background:  var(--tsvg_vto_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: #fff;
		transform: translateY(-100%) !important;
		-webkit-transform: translateY(-100%) !important;
		-moz-transform: translateY(-100%) !important;
		-ms-transform: translateY(-100%) !important;
		transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-webkit-transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-moz-transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
		-ms-transition: all var(--tsvg_vto_e_tm_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) linear;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover *[ data-tsvg-hover='zTitfHov2'] {
		transform: translateY(0%) !important;
		-webkit-transform: translateY(0%) !important;
		-moz-transform: translateY(0%) !important;
		-ms-transform: translateY(0%) !important;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[ data-tsvg-hover='zTitfHov3'] {
		position: absolute;
		top: 0%;
		left: 0%;
		width: 100%;
		padding-top: 5px;
		padding-bottom: 5px;
		text-align: left;
		background:  var(--tsvg_vto_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: #fff;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *[ data-tsvg-hover='zTitfHov4'] {
		position: absolute;
		bottom: 0%;
		left: 0%;
		width: 100%;
		padding-top: 5px;
		padding-bottom: 5px;
		text-align: left;
		background: var(--tsvg_vto_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: #fff;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-block-img{
		display: block !important; /* lazy load */
		max-width:unset;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figcaption span {
		margin-left: 5px;
		font-size:var(--tsvg_vto_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color:var(--tsvg_vto_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_vto_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		line-height:1;
		display:block;
	}
	.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> [ data-tsvg-show='false'] {
		display: none;
	}
	 #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-block-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		float: right;
		padding: 5px;
		margin-right: 5px;
		font-size: var(--tsvg_pio_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border: var(--tsvg_pio_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_pio_bd_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_pio_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		background: var(--tsvg_pio_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: 50%;
		color:var(--tsvg_pio_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-elastic-block-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='solid']{ border-style: solid;}
	.tsvg-elastic-block-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='dashed']{ border-style: dashed;}
	.tsvg-elastic-block-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='dotted']{ border-style: dotted;}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-elastic-block-link-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		float: right;
		padding: 5px;
		margin-right: 5px;
		font-size: var(--tsvg_pio_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border: var(--tsvg_pio_bd_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_pio_bd_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_lio_bd_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		background: var(--tsvg_lio_bg_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: 50%;
		color: var(--tsvg_lio_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-elastic-block-link-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='solid']{ border-style: solid;}
	.tsvg-elastic-block-link-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='dashed']{ border-style: dashed;}
	.tsvg-elastic-block-link-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='dotted']{ border-style: dotted;}
	.tsvg-elastic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a[href=''],.tsvg-elastic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a[href='#']{ 
		display:none!important;
	}
	@media screen and (max-width: 820px) {
		.tsvg-elastic-block-img, .tsvg-pagination-pages li a {
			cursor: default;
		}
		.tsvg-elastic-lg-actions<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-prev<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-elastic-lg-actions<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-next<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			font-size: 15px;
		}
		.tsvg-elastic-lg-outer<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-video<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
		}
		.tsvg-elastic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			margin: 5px 0;
		}
	}
	@media screen and (max-width: 400px) {
		.tsvg-elastic-lg-outer<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-elastic-lg-video<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
			width: 100%;
			height: 0;
			padding-bottom: 56.25%;
			position: relative;
		}
	}
	.tsvg-elastic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: block;
		text-align: center;
		<?php if ( $tsvg_style_options->TotalSoft_GV_2_17 == 'fallPerspective' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_17 == 'fly' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_17 == 'flip' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_17 == 'helix' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_17 == 'popUp' ) { ?>
			-webkit-perspective: 1300px;
			-moz-perspective: 1300px;
			perspective: 1300px;
		<?php } ?>
	}
</style>
<?php
	$tsvg_videos_data_html = '';
	$tsvg_block_index = 0;
	foreach ( $tsvg_videos_data as $key => $value ) {
		$tsvg_block_index++;
		$tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
		$tsvg_media_url_target   = $tsvg_videos_data_object->TotalSoftVGallery_Vid_vont == 'true' ? '_blank' : '_self';
		$tsvg_media_video_url    = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd == '' ? $tsvg_default_video : $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd;
		$tsvg_media_link_url     = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link;
		$tsvg_media_img_url      = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
		$tsvg_videos_data_html  .= sprintf(
			'
			<li class="tsvg-elastic-block-%1$s" data-tsvg-id="%2$s" data-src="%3$s" data-poster="%4$s" data-title="%5$s" style="-moz-animation-delay:  %6$ss;-webkit-animation-delay:  %6$ss;animation-delay:  %6$ss;">
				<figure class="tsvg-block-inner">
					<img  width="" height="" src="%4$s" alt="img" class="tsvg-elastic-block-img" data-tsvg-img="%7$s" >
					<figcaption  data-tsvg-hover="%8$s">
						<span data-tsvg-show="%9$s">
							%5$s
						</span>
						<i class="tsvg-elastic-block-icon-%1$s %10$s" data-tsvg-effect ="%11$s"></i>
						<a href="%12$s" class="tsvg-elastic-block-link" target="%13$s">
							<i class="tsvg-elastic-block-link-icon-%1$s %14$s" data-tsvg-effect ="%15$s">
							</i>
						</a>
					</figcaption>
				</figure>
			</li>
			',
			esc_attr( $tsvg_shortcode_id ),
			esc_attr( $tsvg_videos_data[ $key ]->id ),
			esc_url( $tsvg_media_video_url ),
			esc_url( $tsvg_media_img_url ),
			esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
			esc_attr( 0.3 * $tsvg_block_index ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_08 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_14 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_16 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_19 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_22 ),
			esc_url( $tsvg_media_link_url ),
			esc_attr( $tsvg_media_url_target ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_27 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_22 )
		);
	}
	echo sprintf(
		'
		<main class="tsvg-main-content-%1$s" data-tsvg-autoplay="%2$s"   data-item-open="%3$s"  data-item-number="%4$s" data-pagination="%5$s" data-p-lm="%6$s">
			<figure class="tsvg-blocks-container-%1$s">
				<ul class="tsvg-elastic-blocks-list-%1$s" data-tsvg-slduration="%7$s" data-tsvg-sldelIcType="%8$s" data-tsvg-slicLeftType="%9$s" data-tsvg-slicRightType="%10$s" data-tsvg-loop="%11$s" data-tsvg-title-show="%12$s" data-tsvg-autoplay="%13$s" >
					%14$s  
				</ul>
			</figure>
		</main>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_37 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_07 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_02 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_17 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_29 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_32 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_38 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_39 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_38 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_FG_PT ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_37 ),
		$tsvg_videos_data_html
	);
?>
