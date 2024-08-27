<style type="text/css">
	:root{
        --tsvg_popup_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_18 ) ); ?>;
		--tsvg_popup_bw_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_19 ), FILTER_VALIDATE_INT ); ?>px;
        --tsvg_popup_bdc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_21 ) ); ?>;
		--tsvg_popup_rd_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_22 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_p_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_23 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_24 ), FILTER_VALIDATE_INT ); ?>px;
        --tsvg_popup_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ) ); ?>;
        --tsvg_popup_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_26 ) ); ?>;
		--tsvg_popup_l_t_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_28 ), FILTER_VALIDATE_INT ); ?>px;
        --tsvg_popup_l_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_30 ) ); ?>;
        --tsvg_popup_ar_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_34 ) ); ?>;
		--popup_ar_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_35 ), FILTER_VALIDATE_INT ); ?>px;
        --tsvg_popup_cl_i_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_38 ) ); ?>;
		--tsvg_header_cl_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_39 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_bdw_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_01 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_lo_bds_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_02 ) ); ?>;
        --tsvg_lo_bdc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_03 ) ); ?>;
		--tsvg_lo_bdr_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_04 ), FILTER_VALIDATE_INT ); ?>px;
        --tsvg_lo_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_06 ) ); ?>;
        --tsvg_lo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_07 ) ); ?>;
		--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_08 ), FILTER_VALIDATE_INT ); ?>px;
        --tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_09 ) ); ?>;
        --tsvg_lo_hbc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_10 ) ); ?>;
        --tsvg_lo_hc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_11 ) ); ?>;
	}
  	<?php if ( $tsvg_edit === 'true' ) { ?>
		.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-popup-content='builder-show'] ,.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-popup-content='builder-show'] .tsvg-grid-slide,
        .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-popup-content='builder-show'] .tsvg-grid-slide >figure,
        .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-popup-content='builder-show'] .tsvg-grid-slide-href-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		  	position: static!important;
		}
		.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-popup-content='builder-show']  .tsvg-grid-slide{
		  	display:flex;
		}
		.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-popup-content='builder-show'] .tsvg-media-wrapper img{
		  	max-width: 100%;
		}
  	<?php } ?>
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: fixed;
		background: rgba(0, 0, 0, 0.6);
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		z-index: 99999999999 !important;
		opacity: 0;
		display: none;
		overflow: hidden;
		-webkit-perspective: 1000px;
		-moz-perspective: 1000px;
		perspective: 1000px;
		-webkit-transition: opacity 0.5s;
		-moz-transition: opacity 0.5s;
		transition: opacity 0.5s;
	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-open .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		opacity: 1;
		display: block;
		-webkit-transition: opacity 0.4s;
		-moz-transition: opacity 0.4s;
		transition: opacity 0.4s;
  	}
    .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		padding:0;
	}
    .tsvg-grid-slide{
        display: flex;
        justify-content: center;
    }
  	.tsvg-grid-slides-animateable > .tsvg-grid-slide {
		-webkit-transition: -webkit-transform 0.7s,  top 0.7s;
		-moz-transition: -moz-transform 0.7s,  top 0.7s;
		transition: transform 0.7s,  top 0.7s;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *{
		-webkit-transition: all 0.7s ease-out;
		-moz-transition: all 0.7s ease-out;
		-o-transition: all 0.7s ease-out;
		-ms-transition: all 0.7s ease-out;
		transition: all 0.7s ease-out;
	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		margin:0;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > .tsvg-grid-slide {
	  	padding-left: 0rem;
	  	width: 600px;
	  	max-width: 95%;
	  	position: absolute;
	  	margin: 0 auto;
	  	top: calc(calc(100vh - var(--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) / 2);
        left: 50%;
        transform: translate(-50%,0%); 
	  	height: max-content;
	  	visibility: hidden;
	  	box-sizing: border-box;
	  	background: none !important;
	  	background-color: inherit  !important;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > .tsvg-grid-slide.tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		visibility: hidden;
		opacity: 0;
		-webkit-transition: opacity 0.1s, visibility 0s 0.1s; -moz-transition: opacity 0.1s, visibility 0s 0.1s;transition: opacity 0.1s, visibility 0s 0.1s;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide.tsvg-grid-slide-visiable{
		visibility: visible;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure {
	  	position: absolute;
	  	width: 90%;
	  	overflow: hidden;
	  	background-color: var(--tsvg_popup_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	border-width: var(--tsvg_popup_bw_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	border-color: var(--tsvg_popup_bdc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	margin: 0;
	  	border-radius: var(--tsvg_popup_rd_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	padding: var(--tsvg_popup_p_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	padding-top:0 ;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure[data-tsvg-effect='solid']{ border-style: solid; }
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure[data-tsvg-effect='none']{ border-style: none; }
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure[data-tsvg-effect='dashed']{ border-style: dashed; }
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure[data-tsvg-effect='dotted']{  
        -webkit-border-style: dotted;
        border-style:dotted;
    }
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide .tsvg-video-wrapper{
	   	position: relative;
	   	padding-top: 56.25%;
   	}
   	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide  figure video,.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide  figure iframe {
	  	height: auto;
	  	position: absolute;
	  	top: 0;
	  	left:0;
	  	width: 100%;
	  	height: 100%;
	  	min-width: 100%;
	  	margin: 0;
	  	display: block;
  	}
  	div.tsvg-media-wrapper  img{
		height: 100%!important;
		width: 100%!important;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide  figure img {
	  	height: auto;
	  	width: auto;
	  	margin: 0 auto !important;
  	}
    .tsvg-grid-slide-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
        max-height: 5em;
    }
    .tsvg-grid-slide-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?> p{
        line-height: 15px !important;
        overflow: revert;
    }
    .tsvg-grid-slide-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		height:30px;
        margin: 5px 0;
        padding: unset !important;
		margin-top:10px;
        min-height: 25px;
		text-align:right;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-end;
        align-items: center;
        width: 100%;
 	} 
    .tsvg-grid-slide-href-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
	  	padding: 3px 10px !important;
	  	border-width: var(--tsvg_lo_bdw_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	border-color: var(--tsvg_lo_bdc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
        border-style: var(--tsvg_lo_bds_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	border-radius: var(--tsvg_lo_bdr_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	text-decoration: none !important;
	  	background-color: var(--tsvg_lo_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
	  	color: var(--tsvg_lo_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	line-height: 1 !important;
	  	font-family: var(--tsvg_lo_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	font-size: var(--tsvg_lo_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	box-shadow: none !important;-moz-box-shadow: none !important;-webkit-box-shadow: none !important;
  	}
  	.tsvg-grid-slide-href-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover {
	  	text-decoration: none !important;
	  	background-color: var(--tsvg_lo_hbc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	color: var(--tsvg_lo_hc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important;
  	}
  	.tsvg-grid-slide-href-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus {
		box-shadow: none !important;-moz-box-shadow: none !important;-webkit-box-shadow: none !important; outline: none !important;
  	}  
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div ul {
	  	margin-bottom: 0px;
	  	margin-left: 10px;
	  	line-height: 15px;
	  	position: relative !important;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div ul li {
	  	top: unset !important;
	  	position: relative;
	  	margin-bottom: 0px;
	  	margin-top: 0px;
	  	list-style-type: disc !important;
	  	position: relative !important;
	  	visibility: inherit;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > .tsvg-grid-slide:after {
	  	background-color:  var(--tsvg_popup_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	border-radius: var(--tsvg_popup_rd_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	opacity: 0.8;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ol, .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul {
	  	margin-left: 0 !important;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption{
	  	font-size: var(--tsvg_popup_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	font-family: var(--tsvg_popup_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	color: var(--tsvg_popup_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	  	border: 0!important;
	  	border-bottom-width:var(--tsvg_popup_l_t_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
	  	border-bottom-color:var(--tsvg_popup_l_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
	  	margin-bottom: 0 !important;
	  	line-height: 1 !important;
	  	font-weight: 400 !important;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption[data-tsvg-position='left']{ text-align:left !important;}.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption[data-tsvg-position='center']{ text-align:center !important ;}.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption[data-tsvg-position='right']{ text-align:right !important ;}.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption[data-tsvg-effect='solid']{ border-style: solid !important;}.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption[data-tsvg-effect='dashed']{ border-style: dashed !important;}.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption[data-tsvg-effect='dotted']{ border-style: dotted !important;}.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px      var(--tsvg_popup_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div::-webkit-scrollbar-thumb {
		background-color:  var(--tsvg_popup_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		outline:  var(--tsvg_popup_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
  	}
  	@media screen and (max-width: 820px) {
	  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span {
			cursor: default !important;
	  	}
  	}
  	@media screen and (max-width: 480px) {
	  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figcaption {
		  	padding-bottom: 10px !important;
	  	}
	  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure {
		  	padding: 20px;
	  	}
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn, .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn {
	  	font-size:  var(--popup_ar_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	color: var(--tsvg_popup_ar_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
  	}
    .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn i{
        font-size: inherit;
        color:inherit;
    }
    .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn i{
        font-size: inherit;
        color:inherit;
    }
    .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-close-btn i{
        font-size: inherit;
        color:inherit;
    }
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-close-btn {
	  	font-size: var(--tsvg_header_cl_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	color: var(--tsvg_popup_cl_i_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn, .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn{
        top : calc(calc(calc(100vh - var(--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) / 2) + calc(var(--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) / 2) + calc(var(--tsvg_header_cl_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) / 2));
  	}
    @media only screen and (max-width: 650px) {
        .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn, 
        .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn{
            top : calc(calc(calc(100vh - var(--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) / 2) + 
            calc(var(--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ) + 
            var(--tsvg_header_cl_i_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) );
  	    }
    }
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn {
		left: 0;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn {
		right: 0;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-close-btn {
		top: 2%;
		right: 0;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> li.tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
	  	visibility: visible!important;
  	}
  	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > .tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		z-index: 999999 !important;
  	}
  	.tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		-webkit-transition: opacity 1s ease-out 0.5s;
		-moz-transition: opacity 1s ease-out 0.5s;
		-o-transition: opacity 1s ease-out 0.5s;
		transition: opacity 1s ease-out 0.5s;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-open {
		opacity: 1;
		display: block;
		-webkit-transition: opacity 0.4s;
		-moz-transition: opacity 0.4s;
		transition: opacity 0.4s;
	}
    .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?> >.tsvg-grid-slide:not(.tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_shortcode_id ); ?>) .tsvg-wrapper-bgc {
        display:block !important;
  	}
    .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?> >.tsvg-grid-slide:not(.tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_shortcode_id ); ?>) .tsvg-grid-slideshow-loader {
        display:none !important;
  	}
    .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide figure .tsvg-grid-slideshow-loader-hidden{
        display:none;
    }
    .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide figure .tsvg-grid-slideshow-loader{
        height: auto!important;
		width: 35px!important;
        min-width: 0!important;
        min-height:0!important;
        left: 50%;
        top:50%;
        transform: translate(-50%, -50%);
    }
	a[href=""], 
    .tsvg-grid-slide-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-bool="false"],
    .tsvg-grid-slide-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-bool="false"],
    .tsvg-grid-slide-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-bool="false"]{
		display:none !important;
	}
    .tsvg-grid-slideshow-btn-<?php echo esc_attr( $tsvg_shortcode_id ); ?> i{
        cursor:pointer;
    }
    @media only screen and (max-width: 720px) and (max-height: 600px) {
        .tsvg-grid-slide{
            max-width: 80vw !important;
        }
        .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn, .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn{
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    }
    @media only screen and (max-height: 550px) {
        .tsvg-grid-slide-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
            max-height: 85vh !important;
        }
        .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
            position: relative;
        }
        .tsvg-grid-slide-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
            overflow-y: auto !important;
            overflow-x: hidden !important;
        }
    }
    .tsvg-iframe-wrapper iframe{
        max-width:100% !important;
        max-height:100% !important;
        left: 0 !important;
    }
</style>
<?php
    $tsvg_slides_data = '';
    $tsvg_slide_index = 0;
    foreach ( $tsvg_videos_data as $key => $value ) {
        $tsvg_slide_index ++;
        $tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
        $tsvg_media_has_link = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link ? 'true' : 'false';
        $tsvg_media_has_title = empty(esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) )) ? 'false' : $tsvg_style_options->TotalSoft_GV_2_22;
        $tsvg_media_has_desc = empty(wp_unslash( html_entity_decode( $tsvg_videos_data_object->TotalSoftVGallery_Vid_desc ) )) ? 'false' : $tsvg_style_options->TotalSoft_GV_2_23;
        $tsvg_media_video_url = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd;
        $tsvg_media_img_url = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( '/img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
        $tsvg_media_target = $tsvg_videos_data_object->TotalSoftVGallery_Vid_vont == '' ? '_self' : '_blank';
        if ($tsvg_media_video_url == '') {
            $tsvg_grid_media_element      = sprintf( '<div class="tsvg-media-wrapper"><img src="%s"></div>', esc_url( $tsvg_media_img_url ) );
            $tsvg_grid_class = 'tsvg-media-img-container';
        }elseif (strpos( $tsvg_media_video_url, '.mp4' ) > - 1) {
            $tsvg_grid_media_element      = sprintf( '<div class="tsvg-video-wrapper"> <video controls controlslist="nodownload"  poster="%s"> <source src="%s" type="video/mp4"> </video></div>', esc_url( $tsvg_media_img_url ), esc_url( $tsvg_media_video_url ) );
            $tsvg_grid_class = 'tsvg-media-video-container';
        }elseif (strpos( $tsvg_media_video_url, 'youtube' ) > - 1) {
            $tsvg_grid_media_element      = sprintf( '<div class="tsvg-media-wrapper tsvg-iframe-wrapper" data-creat_src="%s"><img src="%s" class="tsvg-wrapper-bgc"><img src="%s" class="tsvg-grid-slideshow-loader tsvg-grid-slideshow-loader-hidden"></div>', esc_url($tsvg_media_video_url ), esc_url($tsvg_media_img_url ),esc_url( plugin_dir_url( __DIR__ ) . '/img/loading.gif') );
            $tsvg_grid_class = 'tsvg-media-iframe-container';
        }else{
            $tsvg_grid_media_element      = sprintf( '<div class="tsvg-media-wrapper tsvg-iframe-wrapper" data-creat_src="%s"><img src="%s" class="tsvg-wrapper-bgc"><img src="%s" class="tsvg-grid-slideshow-loader tsvg-grid-slideshow-loader-hidden"></div>', esc_url($tsvg_media_video_url ), esc_url( $tsvg_media_img_url ),esc_url( plugin_dir_url( __DIR__ ) . '/img/loading.gif') );
            $tsvg_grid_class = 'tsvg-media-iframe-container';
        }
        $tsvg_slides_data .= sprintf(
            '
            <li class="%1$s tsvg-grid-slide tsvg-%2$s" data-tsvg-id="%3$s"  >
                <figure class="tsvg-grid-slide-block-%4$s" data-tsvg-effect="%5$s">
                    <figcaption class="tsvg-grid-slide-title-%4$s" data-tsvg-position="%6$s"  data-tsvg-bool="%7$s" data-tsvg-effect="%8$s" >
                        %9$s
                    </figcaption>
                    <div class="tsvg-grid-slide-div tsvg-grid-slide-desc-%4$s" data-tsvg-bool="%10$s">
                        %11$s
                    </div>
                    <div class="tsvg-grid-slide-div tsvg-grid-slide-link-%4$s" data-tsvg-bool="%12$s" >
                        <a class="tsvg-grid-slide-href-%4$s" href="%13$s" target="%14$s" >%15$s</a>
                    </div>
                    %16$s
                </figure>
            </li>
            ',
            esc_attr( $tsvg_grid_class ),
            esc_attr( $tsvg_slide_index ),
            $tsvg_videos_data[ $key ]->id,
            esc_attr( $tsvg_shortcode_id ),
            esc_attr( $tsvg_style_options->TotalSoft_GV_1_20 ),
            esc_attr( $tsvg_style_options->TotalSoft_GV_1_27 ),
            esc_attr( $tsvg_media_has_title ),
            esc_attr( $tsvg_style_options->TotalSoft_GV_1_29 ),
            esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
            esc_attr( $tsvg_media_has_desc ),
            wp_unslash( html_entity_decode( $tsvg_videos_data_object->TotalSoftVGallery_Vid_desc ) ),
            esc_attr( $tsvg_media_has_link ),
            esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_link ),
            esc_attr( $tsvg_media_target ),
            esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_style_options->TotalSoft_GV_2_05 ), ENT_QUOTES ) ),
            $tsvg_grid_media_element
        );
    }
    echo sprintf(
        '
        <figure  class="tsvg-grid-slideshow-%1$s " data-popup-content="builder-hide" data-popup-label="Popup 1"  >
            <ul class="tsvg-grid-slides-%1$s">   
                %2$s
            </ul>
            <nav>
                <span class="tsvg-grid-slideshow-btn-%1$s tsvg-grid-slideshow-prev-btn">
                    <i class="%3$s"></i>
                </span>
                <span class="tsvg-grid-slideshow-btn-%1$s tsvg-grid-slideshow-next-btn">
                    <i  class="%4$s"></i>
                </span>
                <span class="tsvg-grid-slideshow-btn-%1$s tsvg-grid-slideshow-close-btn " >
                    <i class="%5$s"></i>
                </span>
            </nav>
        </figure>
        ',
        esc_attr( $tsvg_shortcode_id ),
        $tsvg_slides_data,
        esc_attr( $tsvg_style_options->TotalSoft_GV_1_32 ),
        esc_attr( $tsvg_style_options->TotalSoft_GV_1_33 ),
        esc_attr( $tsvg_style_options->TotalSoft_GV_1_36 )
    );
?>
<script>
    let tsvgGridInit<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = false,
        tsvgGridInstance<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = false,
        tsvgGridIResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>,
        tsvgGridIResizeTo2<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>,
        tsvgGridWidth<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 0,
        tsvgGridCheck<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function (){
            if( typeof(jQuery) != "undefined" && jQuery != null && 
                typeof(window.Modernizr) != "undefined" && window.Modernizr != null && 
                typeof(window.imagesLoaded) != "undefined" && window.imagesLoaded != null && 
                typeof(window.CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>) != "undefined" &&
                window.CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> != null && 
                document.readyState === 'complete'
            ){
                return true;
            }
            return false;
        },
        tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function () {
            let docElem<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = window.document.documentElement,
                client<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = docElem<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>['clientWidth'],
                inner<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = window['innerWidth'];
            if( inner<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> > client<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ) {
                return inner<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>;
            } else {
                return client<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>;
            }
        },
        <?php if ( $tsvg_edit === 'true' ) { ?>
            tsvgGridAdmin = function (tsvgItem = false , tsvgReInit = false){
                if(tsvgGridCheck<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() === true){
                    tsvgGridInstance<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = new CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(document.getElementById('tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'));
                    if (tsvgReInit === true) {
                        tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.masonry('destroy');
                        tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.removeData('masonry');
                        tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = false;
                        return;
                    }
                    if(tsvgItem !== false){
                        setTimeout(() => {
                            jQuery("li.tsvg-grid-layout-item[data-tsvg-id='"+ tsvgItem +"']").css("display","");
                            tsvgSetSizes<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
                        }, 500);
                    }
                }
            },
        <?php } ?>
        tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = false,
        tsvgGridPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function (tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>){
            if(tsvgGridCheck<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() === true){
                if(tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> === false){
                    tsvgGridInstance<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = new CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(document.getElementById('tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'));
                }else{
                    if (jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').attr("data-pagination") === "pagination") {
                        tsvgSetSizes<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
                    } else {
                        tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.masonry().append( jQuery(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>) ).masonry( 'appended', jQuery(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>) ).masonry();
                    }
                }
                setTimeout(() => {
					jQuery(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>).removeClass('tsvg-layout-item-show-none');
				}, 400);
                return true;
            }
            return false;
        },
        tsvgSetSizes<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function ( ) {
            let tsvgLayoutWidth = jQuery('.tsvg-grid-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').width(),
                tsvgColumnSpaces = getComputedStyle(document.documentElement).getPropertyValue('--tsvg_general_place_between_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'),
                tsvgColumnCount = getComputedStyle(document.documentElement).getPropertyValue('--tsvg_general_img_w_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                if(400 >= jQuery('.tsvg-grid-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').innerWidth()){
                    tsvgColumnCount = 1;
                }else if ( 500 >= jQuery('.tsvg-grid-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').innerWidth()){
                    tsvgColumnCount = 2;
                }
                let tsvgLayoutCleanWidth = tsvgLayoutWidth - ((+tsvgColumnCount - 1) * +tsvgColumnSpaces),
                    tsvgColumnWidth = Math.floor(tsvgLayoutCleanWidth / +tsvgColumnCount),
                    tsvgLayoutMargin = Math.floor((tsvgLayoutWidth - (tsvgColumnWidth * +tsvgColumnCount) - ((+tsvgColumnCount - 1) * +tsvgColumnSpaces)) / 2);
			    document.documentElement.style.setProperty('--tsvg_content_mg_<?php echo esc_attr( $tsvg_shortcode_id ); ?>', tsvgLayoutMargin + "px");
			    document.documentElement.style.setProperty('--tsvg_vertical_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>', tsvgColumnSpaces + "px");
                jQuery('.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').css("width",+tsvgColumnWidth + 'px');
            if( tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> !== false ){
                tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.masonry('destroy');
                tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.removeData('masonry');
            }
            tsvgMasonry<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = jQuery('ul.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').masonry({
                itemSelector: jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').attr("data-pagination") != 'all' ? 'li.tsvg-layout-item-show' : '.tsvg-grid-layout-item',
                columnWidth : +tsvgColumnWidth,
                gutter: +tsvgColumnSpaces
            });
        },
        tsvgPaginationTop<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 0,
        tsvgGridCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function () {
            if(tsvgGridCheck<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() === true){
                if(!tsvgGridInit<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>){
                    function tsvgDoneResizing<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
                        setTimeout(() => {
                            tsvgSetSizes<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
                            if(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').hasClass('tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>-open')){
                                if (400 >=  jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul').height()) {
                                    jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> figcaption p').css('display', 'none');
                                    jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> nav span.nav-close').css('top', '0%');
                                } else {
                                    jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> figcaption p').css('display', 'block');
                                    jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> nav span.nav-close').css('top', '0%');
                                }
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').css('width', Math.floor(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').height() * 16 / 9));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').css('min-width', '100%');
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').css('min-height', Math.floor(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').width() * 9 / 16));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').css('max-height', Math.floor(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').width() * 9 / 16));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').css('margin-left', Math.floor((jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure').width() - jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure iframe').width()) / 2));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').css('width', Math.floor(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').height() * 16 / 9));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').css('min-width', '100%');
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').css('max-width', '100%');
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').css('min-height', Math.floor(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').width() * 9 / 16));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').css('max-height', Math.floor(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').width() * 9 / 16));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').css('margin-left', Math.floor((jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure').width() - jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ul li figure video').width()) / 2));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> figcaption p').css('font-size', Math.floor(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> figcaption p').css('font-size') * jQuery(window).width() / (jQuery(window).width() + 150)));
                                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> figcaption p').css('line-height', jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> figcaption p').css('font-size'));
                            }
                        }, 150);
                    }
                    if( typeof(ResizeSensor) != "undefined" && ResizeSensor != null ){
                        new ResizeSensor(jQuery('#tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'), function(event){
                            if( tsvgGridWidth<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> !== event.width ){
                                tsvgGridWidth<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = event.width;
                                clearTimeout(tsvgGridIResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
                                tsvgGridIResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setTimeout(tsvgDoneResizing<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 500);
                            }
                        });
                    }else{
                        jQuery(window).resize(function() {
                            clearTimeout(tsvgGridIResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
                            tsvgGridIResizeTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setTimeout(tsvgDoneResizing<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 500);
                        });
                    }
                }
                let tsvgGridIframeHeight=jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').find('.tsvg-media-iframe-container').find('iframe').height();
                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').find('.tsvg-media-video-container').find('video').css({
                    'min-height': tsvgGridIframeHeight + 'px', 'max-height': tsvgGridIframeHeight + 'px'
                });
                setTimeout(() => {
                    jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').fadeIn();
                }, 300);
                tsvgGridInstance<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = new CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(document.getElementById('tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'));
                clearInterval(tsvgGridInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
                <?php if ( $tsvg_edit != 'true' ) { ?>
                    jQuery('body').append( jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'));
                <?php }  ?>
                tsvgGridInit<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = true;
            }
        },
        tsvgGridInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setInterval(tsvgGridCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 1000);
    (function (window) {
        'use strict';
        let tsvgDocElem<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = window.document.documentElement,
            transEndEventNames<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = {
                'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend'
            },
            transEndEventName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = {},
            support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = {},
            tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function(transformElement, transformStyle) {
                if(transformElement){
                    transformElement.style.WebkitTransform = transformStyle;
                    transformElement.style.msTransform = transformStyle;
                    transformElement.style.transform = transformStyle;
                }
            },
            tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function() {
                let tsvgWindowVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = tsvgDocElem<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>['clientWidth'], tsvgWindowInner<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = window['innerWidth'];
                if (tsvgWindowInner<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> > tsvgWindowVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> ) return tsvgWindowInner<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>; else return tsvgWindowVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>;
            },
            tsvgGridExtend<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function(a, b) {
                for (let key in b) {
                    if (b.hasOwnProperty(key)) {
                        a[key] = b[key];
                    }
                }
                return a;
            },
            CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function(el, options) {
                this.el = el;
                this.options = tsvgGridExtend<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>({}, this.options);
                tsvgGridExtend<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(this.options, options);
                transEndEventName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = transEndEventNames<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>[Modernizr.prefixed('transition')];
                support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = { transitions: Modernizr.csstransitions, support3d: Modernizr.csstransforms3d };
                jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').replaceWith(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').clone());
                if(this.el){
                    this._init();
                }  
            };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype.options = {};
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._init = function () {
            this.grid = this.el.querySelector('ul.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
            this.gridItems = [].slice.call(this.grid.querySelectorAll('li'));
            this.itemsCount = this.gridItems.length;
            this.tsvgGridSlideShow = document.querySelector('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> > ul');
            this.slideshowItems = [].slice.call(this.tsvgGridSlideShow.children);
            this.current = -1;
            this.prevBtn = document.querySelector('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> > nav > span.tsvg-grid-slideshow-prev-btn');
            this.nextBtn = document.querySelector('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> > nav > span.tsvg-grid-slideshow-next-btn');
            this.closeBtn = document.querySelector('.tsvg-grid-slides-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
            this.closeIcon = document.querySelector('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> > nav > span.tsvg-grid-slideshow-close-btn');
            this._initMasonry();
            this._initEvents();
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._initMasonry = function () {
            let grid = this.grid;
            imagesLoaded(grid, function () {
                setTimeout(() => {
                    tsvgSetSizes<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
                }, 350);
            });
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._initEvents = function () {
            var tsvgGridSelf = this;
            this.gridItems.forEach(function (item, idx) {
                item = jQuery(item).find('img');
                jQuery(item).on("click", function (e) {
                    if (e.target !== this) {
                        return;
                    } else {
                        e.preventDefault();
                        tsvgGridSelf._openSlideshow(idx);
                        jQuery('html, body').css({
                            'overflow': 'hidden'
                        });
                    }
                })
            });
            this.nextBtn.addEventListener('click', function () {
                tsvgGridSelf._navigate('next');
            });
            this.prevBtn.addEventListener('click', function () {
                tsvgGridSelf._navigate('prev');
            });
            this.closeBtn.addEventListener('click', function (e) {
                if (e.target !== this) {
                    return;
                } else {
                    tsvgGridSelf._closeSlideshow();
                    jQuery('html, body').css({
                        'overflow': 'auto',
                    });
                }
                tsvgGridSelf._closeSlideshow();
            });
            this.closeIcon.addEventListener('click', function () {
                tsvgGridSelf._closeSlideshow();
                jQuery('html, body').css({
                    'overflow': 'auto',
                });
            });
            window.addEventListener('resize', function () {
                tsvgGridSelf._resizeHandler();
            });
            document.addEventListener('keydown', function (ev) {
                if (tsvgGridSelf.isSlideshowVisible) {
                    var keyCode = ev.keyCode || ev.which;
                    switch (keyCode) {
                        case 37:
                            tsvgGridSelf._navigate('prev');
                            break;
                        case 39:
                            tsvgGridSelf._navigate('next');
                            break;
                        case 27:
                            tsvgGridSelf._closeSlideshow();
                            break;
                    }
                }
            });
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._openSlideshow = function (tsvgOpenIndex) {
            this.isSlideshowVisible = true;
            this.current = tsvgOpenIndex;
            classie.addClass(document.querySelector('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'), 'tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>-open');
            this._setViewportItems();
            classie.addClass(this.tsvgCurrentItem, 'tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
            classie.addClass(this.tsvgCurrentItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
            if (jQuery(this.tsvgCurrentItem).hasClass('tsvg-media-iframe-container')) {
                if(jQuery(this.tsvgCurrentItem).find('.tsvg-iframe-wrapper').length){
                    jQuery(this.tsvgCurrentItem).find('.tsvg-iframe-wrapper .tsvg-grid-slideshow-loader').removeClass('tsvg-grid-slideshow-loader-hidden');
                    let tsvgGridVideoSrc = jQuery(this.tsvgCurrentItem).find('.tsvg-iframe-wrapper').attr('data-creat_src');
                    if (tsvgGridVideoSrc.indexOf('youtube.com/shorts/') > -1 ) {
                        tsvgGridVideoSrc = tsvgGridVideoSrc.replace("shorts", "embed");
                    } else if (tsvgGridVideoSrc.indexOf('watch?v=') > -1 ) {
                        let src_youtube = tsvgGridVideoSrc.split("=");
                        tsvgGridVideoSrc = 'https://www.youtube.com/embed/' + src_youtube[0];
                    } else if (tsvgGridVideoSrc.indexOf('youtu.be/') > -1 ) {
                        let src_youtube = tsvgGridVideoSrc.split("/");
                        tsvgGridVideoSrc = 'https://www.youtube.com/embed/' +  src_youtube[src_youtube.length - 1];
                    }
                    let tsvgRumble,tsvgRumbleCheck;
                    tsvgGridVideoSrc.indexOf('rumble.com/') > -1 ? tsvgRumble='sandbox' : '';
                    tsvgGridVideoSrc.indexOf('rumble.com/') > -1 ? tsvgRumbleCheck='allow-scripts' : '';
                    jQuery(this.tsvgCurrentItem).find('.tsvg-iframe-wrapper').append(jQuery('<iframe>').attr(tsvgRumble,tsvgRumbleCheck).attr('src',tsvgGridVideoSrc).attr("frameborder","0").attr("allowFullScreen","1").hide());
                    setTimeout(() => {
                        jQuery(this.tsvgCurrentItem).find('.tsvg-iframe-wrapper .tsvg-wrapper-bgc').hide();
                        jQuery(this.tsvgCurrentItem).find('.tsvg-iframe-wrapper .tsvg-grid-slideshow-loader').addClass('tsvg-grid-slideshow-loader-hidden');
                        jQuery(this.tsvgCurrentItem).find('.tsvg-iframe-wrapper>iframe').show();
                    }, 1000);
                }
            }
            if (this.prevItem) {
                var size = jQuery(window).width();
                var items = jQuery('.tsvg-grid-slides-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').children('li');
                classie.addClass(this.prevItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                var translateVal = Number(-1 * (tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2 + this.prevItem.offsetWidth / 2));
                tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(this.prevItem, support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d(' + translateVal + 'px, 0, -150px)' : 'translate(' + translateVal + 'px)');
            }
            if (this.nextItem) {
                classie.addClass(this.nextItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                var translateVal = Number(tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2 - this.nextItem.offsetWidth / 2);
                tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(this.nextItem, support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d(' + translateVal + 'px, 0, -150px)' : 'translate(' + translateVal + 'px)');
            }
            let tsvgPopupHeight = jQuery(this.tsvgCurrentItem).find("figure").outerHeight(true),
                root = document.documentElement;
                root.style.setProperty('--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>', tsvgPopupHeight + "px");
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._navigate = function (dir) {
            if (this.isAnimating) return;
            if (dir === 'next' && this.current === this.itemsCount - 1 || dir === 'prev' && this.current === 0) {
                this._closeSlideshow();
                return;
            }
            this.isAnimating = true;
            this._setViewportItems();
            var tsvgGridSelf = this, itemWidth = this.tsvgCurrentItem != undefined ? this.tsvgCurrentItem.offsetWidth : 0,
                transformLeftStr = support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d(-' + Number(tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2 + itemWidth / 2) + 'px, 0, -150px)' : 'translate(-' + Number(tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2 + itemWidth / 2) + 'px)',
                transformRightStr = support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d(' + Number(tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2 - itemWidth / 2) + 'px, 0, -150px)' : 'translate(' + Number(tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2 + itemWidth / 2) + 'px)',
                transformCenterStr = '', transformOutStr, transformIncomingStr,
                tsvgIncomingSlide;
            if (dir === 'next') {
                transformOutStr = support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d( -' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 + itemWidth / 2) + 'px, 0, -150px )' : 'translate(-' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 + itemWidth / 2) + 'px)';
                transformIncomingStr = support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d( ' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 + itemWidth / 2) + 'px, 0, -150px )' : 'translate(' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 + itemWidth / 2) + 'px)';
                var size = jQuery(window).width();
                if (820 > size ) {
                    var items = jQuery('.tsvg-grid-slides-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').children('li');
                    jQuery(items).each(function (i, el) {
                        if(jQuery(el).hasClass('tsvg-media-iframe-container') && jQuery(el).hasClass('tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>') && jQuery(el).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                            jQuery(el).css({}).animate({ opacity: 1 }, 100);
                        }
                        if(jQuery(el).hasClass('tsvg-media-iframe-container') && jQuery(el).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')  && !jQuery(el).hasClass('tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                            jQuery(el).css({
                                "z-index": '0',
                            }).animate({ opacity: 1 }, 500);
                        }
                    }); 
                }
            } else {
                transformOutStr = support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d( ' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 - itemWidth / 2) + 'px, 0, -150px )' : 'translate(' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 + itemWidth / 2) + itemWidth + 'px)';
                transformIncomingStr = support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d( -' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 - itemWidth / 2) + 'px, 0, -150px )' : 'translate(-' + Number((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() * 2) / 2 + itemWidth / 2) + 'px)';
                var size = jQuery(window).width();
                if (820 > size) {
                    var items = jQuery('.tsvg-grid-slides-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').children('li');
                    var x = 0;
                    jQuery(items).each(function (i, el) {
                        x--;
                        if(jQuery(el).hasClass('tsvg-media-iframe-container') && jQuery(el).hasClass('tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>') && jQuery(el).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                            jQuery(el).css({
                                "opacity": "0",
                            }).animate({ opacity: 1 }, 200);
                        }
                        if(jQuery(el).hasClass('tsvg-media-iframe-container') && jQuery(el).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>') && !jQuery(el).hasClass('tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                            jQuery(el).css({
                                "z-index": x, "opacity": "0",
                            }).animate({ opacity: 1 }, 400);
                        }
                    });
                }
            }
            if(tsvgGridSelf.tsvgGridSlideShow){
                classie.removeClass(tsvgGridSelf.tsvgGridSlideShow, 'tsvg-grid-slides-animateable');
            }
            if ((dir === 'next' && this.itemsCount - 2 > this.current) || (dir === 'prev' && this.current > 1)) {
                tsvgIncomingSlide = this.slideshowItems[dir === 'next' ? this.current + 2 : this.current - 2];
                tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgIncomingSlide, transformIncomingStr);
                if(tsvgIncomingSlide){
                    classie.addClass(tsvgIncomingSlide, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                }
            }
            var tsvgGridSlide<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function () {
                if(tsvgGridSelf.tsvgGridSlideShow){
                    classie.addClass(tsvgGridSelf.tsvgGridSlideShow, 'tsvg-grid-slides-animateable');
                }
                if (jQuery(tsvgGridSelf.tsvgCurrentItem).hasClass('tsvg-media-video-container')) {
                    jQuery(tsvgGridSelf.tsvgCurrentItem).find('video').get(0).currentTime = 0;
                    jQuery(tsvgGridSelf.tsvgCurrentItem).find('video').get(0).pause();
                }
                else if (jQuery(tsvgGridSelf.tsvgCurrentItem).hasClass('tsvg-media-iframe-container')) {
                    jQuery(tsvgGridSelf.tsvgCurrentItem).find('.tsvg-iframe-wrapper .tsvg-wrapper-bgc').show();
                    jQuery(tsvgGridSelf.tsvgCurrentItem).find('.tsvg-iframe-wrapper> iframe').remove();
                }
                if(tsvgGridSelf.tsvgCurrentItem){
                    classie.removeClass(tsvgGridSelf.tsvgCurrentItem, 'tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                }
                var tsvgNewCurrentSlide = dir === 'next' ? tsvgGridSelf.nextItem : tsvgGridSelf.prevItem;
                if(tsvgNewCurrentSlide){
                    classie.addClass(tsvgNewCurrentSlide, 'tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                }
                if (jQuery(tsvgNewCurrentSlide).hasClass('tsvg-media-iframe-container')) {
                    if(jQuery(tsvgNewCurrentSlide).find('.tsvg-iframe-wrapper').length){
                        jQuery(tsvgNewCurrentSlide).find('.tsvg-iframe-wrapper .tsvg-grid-slideshow-loader').removeClass('tsvg-grid-slideshow-loader-hidden');
                        let tsvgGridVideoSrc = jQuery(tsvgNewCurrentSlide).find('.tsvg-iframe-wrapper').attr('data-creat_src');
                        if (tsvgGridVideoSrc.indexOf('youtube.com/shorts/') > -1 ) {
                            tsvgGridVideoSrc = tsvgGridVideoSrc.replace("shorts", "embed");
                        } else if (tsvgGridVideoSrc.indexOf('watch?v=') > -1 ) {
                            let src_youtube = tsvgGridVideoSrc.split("=");
                            tsvgGridVideoSrc = 'https://www.youtube.com/embed/' + src_youtube[0];
                        } else if (tsvgGridVideoSrc.indexOf('youtu.be/') > -1 ) {
                            let src_youtube = tsvgGridVideoSrc.split("/");
                            tsvgGridVideoSrc = 'https://www.youtube.com/embed/' +  src_youtube[src_youtube.length - 1];
                        }
                        let tsvgRumble,tsvgRumbleCheck;
                        tsvgGridVideoSrc.indexOf('rumble.com/') > -1 ? tsvgRumble='sandbox' : '';
                        tsvgGridVideoSrc.indexOf('rumble.com/') > -1 ? tsvgRumbleCheck='allow-scripts' : '';
                        jQuery(tsvgNewCurrentSlide).find('.tsvg-iframe-wrapper').append(jQuery('<iframe>').attr(tsvgRumble,tsvgRumbleCheck).attr('src',tsvgGridVideoSrc).attr("frameborder","0").attr("allowFullScreen","").hide());
                        setTimeout(() => {
                            jQuery(tsvgNewCurrentSlide).find('.tsvg-iframe-wrapper .tsvg-wrapper-bgc').hide();
                            jQuery(tsvgNewCurrentSlide).find('.tsvg-iframe-wrapper .tsvg-grid-slideshow-loader').addClass('tsvg-grid-slideshow-loader-hidden');
                            jQuery(tsvgNewCurrentSlide).find('.tsvg-iframe-wrapper>iframe').show();
                        }, 1000);
                    }
                }
                tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgGridSelf.tsvgCurrentItem, dir === 'next' ? transformLeftStr : transformRightStr);
                if (tsvgGridSelf.nextItem) {
                    tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgGridSelf.nextItem, dir === 'next' ? transformCenterStr : transformOutStr);
                }
                if (tsvgGridSelf.prevItem) {
                    tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgGridSelf.prevItem, dir === 'next' ? transformOutStr : transformCenterStr);
                }
                if (tsvgIncomingSlide) {
                    tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgIncomingSlide, dir === 'next' ? transformRightStr : transformLeftStr);
                }
                var onEndTransitionFn = function (ev) {
                    if (support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.transitions) {
                        if (ev.propertyName.indexOf('transform') === -1) return false;
                        this.removeEventListener(transEndEventName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, onEndTransitionFn);
                    }
                    if (tsvgGridSelf.prevItem && dir === 'next') {
                        classie.removeClass(tsvgGridSelf.prevItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                    }
                    else if (tsvgGridSelf.nextItem && dir === 'prev') {
                        var last_item = jQuery('.tsvg-grid-slides-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').children('li:last-child');
                        var pre = jQuery(last_item[0]).prev();
                        if(jQuery(pre[0]).hasClass('tsvg-media-iframe-container') && jQuery(pre[0]).hasClass('tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>') && jQuery(pre[0]).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                            jQuery(last_item[0]).not('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                        }
                        if(!jQuery(pre[0]).hasClass('tsvg-media-iframe-container') || !jQuery(pre[0]).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>') || !jQuery(pre[0]).hasClass('tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                            if(tsvgGridSelf.nextItem){
                                classie.removeClass(tsvgGridSelf.nextItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                            }
                        }
                    }
                    if (dir === 'next') {
                        tsvgGridSelf.prevItem = tsvgGridSelf.tsvgCurrentItem;
                        tsvgGridSelf.tsvgCurrentItem = tsvgGridSelf.nextItem;
                        if (tsvgIncomingSlide) {
                            tsvgGridSelf.nextItem = tsvgIncomingSlide;
                        }
                        jQuery(tsvgGridSelf.prevItem).fadeIn("0.2");
                    }
                    else {
                        tsvgGridSelf.nextItem = tsvgGridSelf.tsvgCurrentItem;
                        tsvgGridSelf.tsvgCurrentItem = tsvgGridSelf.prevItem;
                        if (tsvgIncomingSlide) {
                            tsvgGridSelf.prevItem = tsvgIncomingSlide;
                        }
                    }
                    tsvgGridSelf.current = dir === 'next' ? tsvgGridSelf.current + 1 : tsvgGridSelf.current - 1;
                    tsvgGridSelf.isAnimating = false;
                    let tsvgPopupHeight = jQuery(tsvgGridSelf.tsvgCurrentItem).find("figure").outerHeight(true),
                        root = document.documentElement;
                        root.style.setProperty('--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>', tsvgPopupHeight + "px");
                };
                if (support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.transitions) {
                    if(tsvgGridSelf.tsvgCurrentItem){
                        tsvgGridSelf.tsvgCurrentItem.addEventListener(transEndEventName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, onEndTransitionFn);
                    }
                    else{
                        tsvgGridSelf.isAnimating = false;
                    }
                }
                else {
                    onEndTransitionFn();
                }
            };
            setTimeout(tsvgGridSlide<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 25);
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._closeSlideshow = function () {
            jQuery('html, body').css({'overflow':'visible'});
            if(jQuery('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').hasClass('tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>-open')){
                classie.removeClass(document.querySelector('.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>'), 'tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>-open');
            }
            if(jQuery(this.tsvgGridSlideShow).hasClass('tsvg-grid-slides-animateable')){
                classie.removeClass(this.tsvgGridSlideShow, 'tsvg-grid-slides-animateable');
            }
            var tsvgGridSelf = this,
                onEndTransitionFn = function (ev) {
                    if (support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.transitions) {
                        if (ev.tagName.toLowerCase() !== 'ul') return;
                    }
                    if(jQuery(tsvgGridSelf.tsvgCurrentItem).hasClass('tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                        classie.removeClass(tsvgGridSelf.tsvgCurrentItem, 'tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                    }
                    if(jQuery(tsvgGridSelf.tsvgCurrentItem).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')){
                        classie.removeClass(tsvgGridSelf.tsvgCurrentItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                    }
                    if (jQuery(tsvgGridSelf.tsvgCurrentItem).hasClass('tsvg-media-video-container')) {
                        jQuery(tsvgGridSelf.tsvgCurrentItem).find('video').get(0).pause();
                    }
                    else if (jQuery(tsvgGridSelf.tsvgCurrentItem).hasClass('tsvg-media-iframe-container')) {
                        jQuery(tsvgGridSelf.tsvgCurrentItem).find('.tsvg-iframe-wrapper .tsvg-wrapper-bgc').show();
                        jQuery(tsvgGridSelf.tsvgCurrentItem).find('.tsvg-iframe-wrapper> iframe').remove();
                    }
                    if (tsvgGridSelf.prevItem && jQuery(tsvgGridSelf.prevItem).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')) {
                        classie.removeClass(tsvgGridSelf.prevItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                    }
                    if (tsvgGridSelf.nextItem && jQuery(tsvgGridSelf.nextItem).hasClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>')) {
                        classie.removeClass(tsvgGridSelf.nextItem, 'tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
                    }
                    tsvgGridSelf.slideshowItems.forEach(function (item) {
                        tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(item, '');
                    });
                    tsvgGridSelf.isSlideshowVisible = false;
                };
            if (support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.transitions) {
                onEndTransitionFn( this.tsvgGridSlideShow);
            } else {
                onEndTransitionFn();
            }
            var items = jQuery('.tsvg-grid-slides-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').children('li');
            jQuery(items).removeClass('tsvg-grid-slide-display-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>');
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._setViewportItems = function () {
            this.tsvgCurrentItem = null;
            this.prevItem = null;
            this.nextItem = null;
            if (this.current > 0) {
                this.prevItem = this.slideshowItems[this.current - 1];
            }
            if (this.itemsCount - 1 > this.current ) {
                this.nextItem = this.slideshowItems[this.current + 1];
            }
            this.tsvgCurrentItem = this.slideshowItems[this.current];
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._resizeHandler = function () {
            var tsvgGridSelf = this;
            function tsvgGridDelayed<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
                tsvgGridSelf._resize();
                tsvgGridSelf._resizeTimeout = null;
            }
            if (this._resizeTimeout) {
                clearTimeout(this._resizeTimeout);
            }
            this._resizeTimeout = setTimeout(tsvgGridDelayed<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 50);
        };
        CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.prototype._resize = function () {
            if (this.isSlideshowVisible) {
                let tsvgPopupHeight = jQuery(this.tsvgCurrentItem).find("figure").outerHeight(true),
                    tsvgPopupWidth = jQuery(this.tsvgCurrentItem).find("figure").width(),
                root = document.documentElement;
                root.style.setProperty('--tsvg_popup_elem_height_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>', tsvgPopupHeight + "px");
                if (!jQuery(this.nextItem).hasClass("tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>")) {
                    let translateValNext = parseFloat( Math.floor(tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2 ) - Math.floor(this.nextItem.tsvgPopupWidth / 2) );
                    tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(this.nextItem, support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d(' + translateValNext + 'px, 0, -150px)' : 'translate(' + translateValNext + 'px)');
                }
                if (!jQuery(this.prevItem).hasClass("tsvg-grid-slide-current-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>")) {
                    let translateValPrev = parseFloat( -1 * Math.floor((tsvgGridGetVW<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() / 2  ) + Math.floor(this.prevItem.tsvgPopupWidth / 2 ) ) );
                    tsvgGridSetTransform<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(this.prevItem, support<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.support3d ? 'translate3d(' + translateValPrev + 'px, 0, -150px)' : 'translate(' + translateValPrev + 'px)');
                }
            }
        };
        window.CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = CBPGridGallery_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>;
    })(window);
</script>