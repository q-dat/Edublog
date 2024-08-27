<style type="text/css">
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *::after, #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *::before, #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> * {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *::after, #tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *::before {
		line-height: 1 !important;	
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul li,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul li,.tsvg-pagination-pages-wrapper[data-pagination='all'],.tsvg-pagination-disabled-item{
		display: none!important;
	}
	.tsvg-pagination-pages-wrapper[data-pagination='pagination']{
		display: flex !important;
		transition : all 3s;
		position: relative;
	}
	.tsvg-pagination-page-item a:focus{
	  outline:none!important;
	  box-shadow:unset!important;
	}
	<?php if ( $tsvg_theme_name == 'Grid Video Gallery' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: flex!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'LightBox Video Gallery' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: flex!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'Thumbnails Video' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: flex!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'Content Popup' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: inline-block!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'Elastic Gallery' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: inline-block!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'Fancy Gallery' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: inline-block!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'Parallax Engine' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: inline-block!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'Classic Gallery' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: inline-block!important;
		}
	<?php } ?>
	<?php if ( $tsvg_theme_name == 'Space Gallery' ) { ?>
		.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
			display: block!important;
		}
	<?php } ?>
	:root{
		--tsvg_s_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_04 ) ); ?>;
		--tsvg_s_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_03 ) ); ?>;
		--tsvg_s_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_10 ) ); ?>;
		--tsvg_s_h_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_09 ) ); ?>;
		--tsvg_s_ac_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_08 ) ); ?>;
		--tsvg_s_ac_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_07 ) ); ?>;
		--tsvg_s_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_05 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_s_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_06 ) ); ?>;
		--tsvg_s_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_11 ) ); ?>;
		--tsvg_s_b_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_12 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_s_pl_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_13 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_s_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_19 ) ); ?>;
		--tsvg_s_l_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_20 ) ); ?>;
		--tsvg_s_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_21 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_s_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_22 ) ); ?>;
		--tsvg_s_l_bc_2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_23 ) ); ?>;
		--tsvg_s_l_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_25 ) ); ?>;
		--tsvg_s_l_h_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_26 ) ); ?>;
		--tsvg_s_l_h_bc_2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_pagination_options->TotalSoft_VGallery_Sty_27 ) ); ?>;
	}
	.tsvg-pagination-pages-wrapper{
	   display: flex;
	   justify-content: center;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages{
		font-family: var(--tsvg_s_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		display: inline-flex;
		align-items: center;
		position: relative;
		padding-left: 0;
		padding: 20px 0!important;
		margin: 20px 0;
		border-radius: 4px;
		flex-direction: row;
		overflow-x: auto;
		overflow-y: hidden;
		max-width: 100%;
		flex-wrap: wrap;
		justify-content: center;
		align-content: center;
		text-align: center;
		width: unset !important;
		overflow: hidden !important;
	}
	.tsvg-pagination-pages>li {
		display: inline;
		font-family: var(--tsvg_s_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
	}
	.tsvg-pagination-pages>li>a, .tsvg-pagination-pages>li>span {
		position: relative;
		float: left;
		padding: 6px 12px;
		margin-left: -1px;
		line-height: 1.42857143;
		color: #337ab7 ;
		text-decoration: none;
		background-color: #fff ;
		border: 1px solid #ddd;
	}
	.tsvg-pagination-page-link{
	  	padding: 0 8px !important;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure .tsvg-load{
		-webkit-transition: height 3s ease-out;
		-moz-transition: height 3s ease-out;
		-o-transition: height 3s ease-out;
		-ms-transition: height 3s ease-out;
		transition: height 3s ease-out;
	}
	/* ef1 */
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-item a.tsvg-pagination-page-link{
		display: flex !important;
		justify-content: center;
		flex-direction: column;
		color: var(--tsvg_s_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		background-color: var(--tsvg_s_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-weight: 500 !important;
		min-height: 35px;
		min-width: 35px;
		height: auto;
		width: auto;
		padding: 0px;
		margin: 0 8px;
		border-radius: 10px;
		border: none !important;
		position: relative;
		z-index: 1;
		transition: all 0.4s ease 0s;
		box-shadow: none !important;
		text-align:center !important;
		font-family: inherit;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-item:not(li.tsvg-pagination-page-item[data-item-number="next"],li.tsvg-pagination-page-item[data-item-number="prev"]) a.tsvg-pagination-page-link{
		font-size: var(--tsvg_s_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-item[data-item-number="next"] a.tsvg-pagination-page-link,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-item[data-item-number="prev"] a.tsvg-pagination-page-link{
		font-size: var(--tsvg_s_pl_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-page-link span{
		height: unset !important;
		width: unset !important;
		margin-right: unset !important;
		text-transform: none !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li:first-child a.tsvg-pagination-page-link span,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li:last-child a.tsvg-pagination-page-link span{
		font-size: var(--tsvg_s_pl_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color:var(--tsvg_s_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		font-weight: 600 !important;
		border: unset !important;
		background: unset !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link span:hover{
		color:var(--tsvg_s_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link:hover{
		color:var(--tsvg_s_h_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		background-color: transparent !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link:hover,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link{
		color:var(--tsvg_s_ac_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		background-color: transparent;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link:before,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link:after{
		content: '';
		height: 100%;
		width: 100%;
		border: 2px solid var(--tsvg_s_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: 50%;
		opacity: 0;
		position: absolute;
		left: 0;
		top: 0;
		z-index: -1;
		transition: all 0.4s ease 0s;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link:after{
		height: 10px;
		width: 10px;
		border: none !important;
		transform: scale(0);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link:hover:before,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link:hover:before,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link:before{
		opacity: 1;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link:hover:after,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link:hover:after,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link:after{
		opacity: 1;
		transform: scale(1);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li a.tsvg-pagination-page-link:hover:after{
	  background-color:var(--tsvg_s_h_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link:hover:after,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages[data-ef='ef-1'] li.tsvg-pagination-page-active a.tsvg-pagination-page-link:after{
	  background-color:var(--tsvg_s_ac_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	@media only screen and (max-width: 480px){
		.tsvg-pagination-pages[data-ef='ef-1']{
			font-size: 0;
			display: inline-block;
		}
		.tsvg-pagination-pages[data-ef='ef-1'] li{
			display: inline-block;
			vertical-align: top;
			margin: 10px 0;
		}
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-pagination-pages-wrapper .btn{
		outline:0;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-load-vw='ef-1'] .btn,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-load-vw='ef-1'] .btn:hover{
	   color:  var(--tsvg_s_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	   background:  var(--tsvg_s_l_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	   font-family:  var(--tsvg_s_l_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
	   font-size:  var(--tsvg_s_l_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	   font-weight: 500;
		margin: 20px 0;
	   text-transform: uppercase;
	   letter-spacing: 1px;
	   padding: 11px 25px 10px;
	   border: none;
	   border-radius: 30px;
	   box-shadow: 0 15px 35px rgba(0,0,0,0.2);
	   position: relative;
	   z-index: 1;
	   transition: all 0.3s ease 0s;
	   text-decoration: none;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-load-vw='ef-1'] .btn:before,
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-load-vw='ef-1'] .btn:after{
		content: "";
		background: var(--tsvg_s_l_bc_2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		width: 30px;
		height: 7px;
		border-radius: 10px 10px;
		box-shadow: 0 0 5px var(--tsvg_s_l_bc_2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		transform: translateX(-50%);
		position: absolute;
		left: 50%;
		top: -4px;
		margin:0;
		opacity:1;
		outline:0;
		z-index: -1;
		transition: all 0.3s;
	}
	.tsvg-pagination-pages-wrapper[data-load-vw='ef-1'] .btn:after{
	 	top: auto!important;
	 	bottom: -4px;
	}
	@media only screen and (max-width: 767px){
		.tsvg-pagination-pages-wrapper[data-load-vw='ef-1'] .btn{ margin-bottom: 30px; }
	}
	.tsvg_position_select[data-change-elem=".tsvg-pagination-pages"],.tsvg_position_select[data-change-elem=".tsvg-pagination-pages-wrapper"]{
	  	padding:0!important;
	}
	.tsvg_position_select[data-change-elem=".tsvg-pagination-pages"] >.tsvg_position_item {
	  	padding-bottom:0!important;
		padding-left:20px;
	}
	.tsvg_position_select[data-change-elem=".tsvg-pagination-pages-wrapper"] >.tsvg_position_item {
	  	padding-bottom:0!important;
	}
	.tsvg_position_select[data-change-elem=".tsvg-pagination-pages-wrapper"]>.tsvg_position_item {
	  	width: 47%;
	}
	.tsvg_position_select[data-change-elem=".tsvg-pagination-pages"] >.tsvg_position_item>img,.tsvg_position_select[data-change-elem=".tsvg-pagination-pages-wrapper"] >.tsvg_position_item>img {
	  	position: unset!important;
	  	left: unset!important;
	  	top: unset!important;
	  	bottom: unset!important;
	  	right: unset!important;
	}
	.tsvg_position_select[data-change-elem=".tsvg-pagination-pages"] .tsvg_position_item.tsvg_active:before {
	 	top: 50%;
	 	transform: translate(0, -50%);
	 	margin:0;
	 	left: 0;
	}
	.tsvg-pagination-pages .tsvg-pagination-page-item .tsvg-pagination-page-link .ts-vgallery {
		line-height: 1.4;
	} 
	@-webkit-keyframes line {
	 	5%, 10% {
			transform: translateY(-30px);
	 	}
	 	40% {
			transform: translateY(-20px);
	 	}
	 	65% {
			transform: translateY(0);
	 	}
	 	75%, 100% {
			transform: translateY(30px);
	 	}
	}
	@keyframes line {
	  	5%, 10% {
			transform: translateY(-30px);
	  	}
	  	40% {
			transform: translateY(-20px);
	  	}
	  	65% {
			transform: translateY(0);
	  	}
	  	75%, 100% {
			transform: translateY(30px);
	  	}
	}
	@-webkit-keyframes svg {
	 	0%, 20% {
			stroke-dasharray: 0;
			stroke-dashoffset: 0;
	 	}
	 	21%, 89% {
			stroke-dasharray: 26px;
			stroke-dashoffset: 26px;
			stroke-width: 3px;
			margin: -10px 0 0 -10px;
			stroke:var(--tsvg_s_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	 	}
	  	100% {
			stroke-dasharray: 26px;
			stroke-dashoffset: 0;
			margin: -10px 0 0 -10px;
			stroke:var(--tsvg_s_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	}
	  	12% {
			opacity: 1;
	  	}
	  	20%, 89% {
			opacity: 0;
	  	}
	  	90%, 100% {
			opacity: 1;
	  	}
	}
	@keyframes svg {
	  	0%, 20% {
			stroke-dasharray: 0;
			stroke-dashoffset: 0;
	  	}
	  	21%, 89% {
			stroke-dasharray: 26px;
			stroke-dashoffset: 26px;
			stroke-width: 3px;
			margin: -10px 0 0 -10px;
			stroke:var(--tsvg_s_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	}
	  	100% {
			stroke-dasharray: 26px;
			stroke-dashoffset: 0;
			margin: -10px 0 0 -10px;
			stroke:var(--tsvg_s_l_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	  	}
	  	12% {
			opacity: 1;
	  	}
	  	20%, 89% {
			opacity: 0;
	  	}
	  	90%, 100% {
			opacity: 1;
	  	}
	}
	@-webkit-keyframes background {
	  	10% {
			transform: scaleY(0);
	  	}
	  	40% {
			transform: scaleY(0.15);
	  	}
	  	65% {
			transform: scaleY(0.5);
			border-radius: 0 0 50% 50%;
	  	}
	  	75% {
			border-radius: 0 0 50% 50%;
	  	}
	  	90%, 100% {
			border-radius: 0;
	  	}
	  	75%, 100% {
			transform: scaleY(1);
	  	}
	}
	@keyframes background {
	  	10% {
			transform: scaleY(0);
	  	}
	  	40% {
			transform: scaleY(0.15);
	  	}
	  	65% {
			transform: scaleY(0.5);
			border-radius: 0 0 50% 50%;
	  	}
	  	75% {
			border-radius: 0 0 50% 50%;
	  	}
	  	90%, 100% {
			border-radius: 0;
	  	}
	  	75%, 100% {
			transform: scaleY(1);
	  	}
	}
	@media (max-width: 400px) {
	 	body .container .button {
			margin: 12px;
	 	}
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-pages-wrapper[data-pagination='load-more'] .btn-lg span,.tsvg-pagination-pages-wrapper[data-pagination='load-more'] .btn-lg i{
	  display:none;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-icon-show='false'] i{
	  display:none;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-icon-show='true'] span{
	  display:none;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='text'] .btn-lg span{
	  display:inline-block;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='icon'] .btn-lg i{
	  display:inline-block;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='text-icon'] .btn-lg span,.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='text-icon'] .btn-lg i{
	  display:inline-block;
	}
	a.tsvg-pagination-page-link{
	  	display:inline-block!important;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-layout-item-show-none{
		visibility: hidden !important;
	}
</style>
<?php
	echo sprintf(
		'
		<nav class="tsvg-pagination-pages-wrapper" data-short-id="%1$s" data-short-theme="%2$s"  data-pagination="%3$s" data-load-vw="%4$s" data-icon-show="%5$s" data-load-icon="%6$s" >
			<ul class="tsvg-pagination-pages" data-ef="%7$s" data-vw="%8$s"  data-next-item="%9$s" data-prev-item="%10$s" data-prev-icon="%11$s" data-next-icon="%12$s" data-load-icon="%13$s" data-load-text="%14$s">
			</ul>
		</nav>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_theme_name ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_08 ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_16"] ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_17"] ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_05 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_06 ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_01"] ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_02"] ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_14"] ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_15"] ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_24"] ),
		esc_attr( $tsvg_design_options["TotalSoft_VGallery_Sty_18"] )
	);
?>
<script>
	let tsvgPaginationLoad<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 'false';
	function tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>,tsvgFrom<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, tsvgTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>) {
		let tsvgShowData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.slice(tsvgFrom<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, tsvgTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
		let tsvgThemeName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = jQuery(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>).closest('section').find('.tsvg-pagination-pages-wrapper').attr('data-short-theme');
		jQuery.each( tsvgShowData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, function (index, value) {
			let tsvgAnimDelay<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 0.3 * (index + 1);	
			if(tsvgPaginationLoad<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> == 'true'){
				tsvgAnimDelay<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 0.9 * (index + 1);	
			}
		   	jQuery(this).css({'-moz-animation-delay': tsvgAnimDelay<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>+'s','-webkit-animation-delay': tsvgAnimDelay<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>+'s','animation-delay': tsvgAnimDelay<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>+'s'});
			jQuery(this).addClass('tsvg-layout-item-show');
			if( tsvgThemeName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> == 'Grid Video Gallery' ) {
            	jQuery(this).addClass('tsvg-layout-item-show-none');
				if(tsvgShowData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.length - 1 === index){
					let tsvgGridUpdateInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>= setInterval(tsvgGridUpdate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 100);
					function tsvgGridUpdate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
						if( tsvgGridPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>) === true ){
							clearInterval(tsvgGridUpdateInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
						}
					}
				}
			}
		})
		if( jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').attr("data-pagination") == 'load-more' && !jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> figure ul li').not('.tsvg-layout-item-show').length){ jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>  .tsvg-pagination-pages li,.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> .tsvg-pagination-pages-wrapper .btn').remove();}
	}
	function tsvgPaginationGenerate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
		let tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure>ul>li'),
			tsvgItemsLength = tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.length,
			tsvgNumberItemsPerPage =  Math.ceil(jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-item-number')),
			tsvgPaginationItemsLenth,
			tsvgPaginationResultLength,
			tsvgShowFrom,
			tsvgShowTo,
			tsvgPageNumber = 1,
			tsvgNextText = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-next-item'),
			tsvgPrevText = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-prev-item'),
			tsvgPrevIcon = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-prev-icon'),
			tsvgNextIcon = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-next-icon'),
			tsvgLoadIcon = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-load-icon'), 
			tsvgLoadText = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-load-text'),
			tsvgMaxHeight =jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').height(), 
			tsvgCurrentPosition = 1,
			tsvgPageView = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-vw');
		jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul').removeClass('tsvg-load');
		jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul li').removeClass('tsvg-layout-item-show');
		jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages li,.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper .btn').remove();
		if( jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr("data-pagination") == 'pagination'){
			tsvgPaginationItemsLenth = Math.ceil(tsvgItemsLength / tsvgNumberItemsPerPage);
			tsvgPaginationResultLength = tsvgPaginationItemsLenth = tsvgPaginationItemsLenth < 1 ? 1 : tsvgPaginationItemsLenth;
			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').append('<li class="tsvg-pagination-page-item tsvg-pagination-page-item-prev" data-item-number="prev"><a href="javascript:void(0)" class="tsvg-pagination-page-link"  ><span >'+tsvgPrevText+'</span> <i class="'+tsvgPrevIcon+'"></i></a></li>')
			for (let i = 0; i < tsvgPaginationResultLength; i++) {
				let tsvgItemNumber = i + 1;
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-pages').append('<li data-item-number="' + tsvgItemNumber + '" class="tsvg-pagination-page-item tsvg-pagination-page-number "><a class="tsvg-pagination-page-link" href="javascript:void(0)">' + tsvgItemNumber + '</a></li>')
			}
			if(tsvgPageView == 'vw-4'){ jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number').addClass('tsvg-pagination-disabled-item');}
			if(tsvgPageView == 'vw-2' && tsvgPaginationItemsLenth > 7){
				if((tsvgPaginationResultLength + 1) < tsvgPaginationItemsLenth) jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').append('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>')
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').append('<li data-item-number="' + tsvgPaginationItemsLenth + '" class="tsvg-pagination-page-item "><a class="tsvg-pagination-page-link" href="javascript:void(0)">' + tsvgPaginationItemsLenth + '</a></li>')
			}
			if(tsvgPageView=='vw-3'&& tsvgPaginationItemsLenth>4){
				if((tsvgPaginationResultLength+1) < tsvgPaginationItemsLenth)jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').append('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>')
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-pages').append('<li data-item-number="' + tsvgPaginationItemsLenth + '" class="tsvg-pagination-page-item "><a class="tsvg-pagination-page-link" href="javascript:void(0)">' + tsvgPaginationItemsLenth + '</a></li>')
			}
			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').append('<li class="tsvg-pagination-page-item tsvg-pagination-page-item-next" data-item-number="next"><a href="javascript:void(0)" class="tsvg-pagination-page-link"  ><span>'+tsvgNextText+'</span><i class="'+tsvgNextIcon+'"></i></a></li>')
			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  ul.tsvg-pagination-pages li').not('.page-null').on("click",function (e) {
				if( jQuery(this).hasClass('tsvg-pagination-page-active')){
					return false;
			  	}
			  	tsvgMaxHeight = jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').height();
				if(jQuery(this).parent().find('.tsvg-pagination-page-active').length){
					const tsvgMain = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>')[0];
					const tsvgHeaderOffset = 200;
					const tsvgMainPosition = tsvgMain.getBoundingClientRect().top;
					const tsvgOffsetPosition = tsvgMainPosition + window.pageYOffset - tsvgHeaderOffset;
					window.scrollTo({
					  top: tsvgOffsetPosition,
					  behavior: "smooth"
					});
				}
				let tsvgEffectOpenType =  jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-item-open');
				if(tsvgEffectOpenType!='effect-1'){
				  	jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({'min-height': tsvgMaxHeight+'px','transition':'unset'});
				}
				jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul li').removeClass('tsvg-layout-item-show');
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages li').removeClass('tsvg-pagination-page-active')
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-item[item-number="prev"]').removeClass('tsvg-pagination-disabled-item')
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-item[item-number="next"]').removeClass('tsvg-pagination-disabled-item')
				jQuery(this).addClass('tsvg-pagination-page-active');
				tsvgPageNumber = jQuery(this).attr('data-item-number');
				if (tsvgPageNumber == '1') {
					jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').addClass('tsvg-pagination-disabled-item');
				} else{
					jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').removeClass('tsvg-pagination-disabled-item');
				}
				if (+tsvgPageNumber == tsvgPaginationItemsLenth) {
					jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="next"]').addClass('tsvg-pagination-disabled-item');
				}else{
					jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="next"]').removeClass('tsvg-pagination-disabled-item');
				}
				tsvgShowFrom = tsvgNumberItemsPerPage * (tsvgPageNumber - 1);
				tsvgShowTo = tsvgShowFrom + tsvgNumberItemsPerPage;
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').unbind('click')
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').click(function () {
					if(jQuery(this).parent().find('.tsvg-pagination-page-active').length){
						const tsvgMain = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>')[0]
						const tsvgHeaderOffset = 200;
						const tsvgMainPosition = tsvgMain.getBoundingClientRect().top;
						const tsvgOffsetPosition = tsvgMainPosition + window.pageYOffset - tsvgHeaderOffset;
						window.scrollTo({
						  top: tsvgOffsetPosition,
						  behavior: "smooth"
						});
					}
					tsvgCurrentPosition = parseInt(jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  li.tsvg-pagination-page-item.tsvg-pagination-page-active').attr('data-item-number'))
					let tsvgLastElement = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  li.tsvg-pagination-page-item.tsvg-pagination-page-active').hasClass( "tsvg-pagination-page-number" );
					let tsvgPrevPosition = tsvgCurrentPosition - 1;
					jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item').removeClass('tsvg-pagination-page-active')
					let tsvgFirstItemPosition =  parseInt(jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-page-number").first().attr('data-item-number'));
					if(tsvgFirstItemPosition>1&&tsvgLastElement){
						jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").each(function(){
							let tsvgItemPosition =  parseInt(jQuery(this).attr('data-item-number'))-1;
							jQuery(this).attr('data-item-number',tsvgItemPosition).find('a').text(tsvgItemPosition)
						});
					}
					if(tsvgPaginationItemsLenth > (parseInt(jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) && !jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages").find('.page-null').length && (tsvgPageView=='vw-2' || tsvgPageView=='vw-3'))jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().after('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>') 
					if((parseInt(jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) >= tsvgPaginationItemsLenth && (tsvgPageView=='vw-2' || tsvgPageView=='vw-3'))jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages").find('.page-null').remove();
					if(tsvgLastElement){ } else { jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="' +  parseInt(jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().attr('data-item-number')) + '"]').addClass('tsvg-pagination-page-active') } 
					if (tsvgCurrentPosition == '1') {
						jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').addClass('tsvg-pagination-disabled-item');
					} else{
						jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').removeClass('tsvg-pagination-disabled-item');
					}
					if (+tsvgCurrentPosition == tsvgPaginationItemsLenth) {
						jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="next"]').addClass('tsvg-pagination-disabled-item');
					}else{
						jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="next"]').removeClass('tsvg-pagination-disabled-item');
					}
					jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="' + tsvgPrevPosition + '"]').click()
				})
	  			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="next"]').unbind('click')
	  			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="next"]').click(function () {
	  				if(jQuery(this).parent().find('.tsvg-pagination-page-active').length){
						const tsvgMain = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>')[0]
						const tsvgHeaderOffset = 200;
						const tsvgMainPosition = tsvgMain.getBoundingClientRect().top;
						const tsvgOffsetPosition = tsvgMainPosition + window.pageYOffset - tsvgHeaderOffset;
						window.scrollTo({
						  top: tsvgOffsetPosition,
						  behavior: "smooth"
						});
	  				}
	 				tsvgCurrentPosition = parseInt(jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  li.tsvg-pagination-page-item.tsvg-pagination-page-active').attr('data-item-number'))
	 				let tsvgNextPosition = tsvgCurrentPosition + 1;
	 				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item').removeClass('tsvg-pagination-page-active')
	 				let tsvgLastItemPosition =  parseInt(jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().attr('data-item-number'));
	 				if(((tsvgPaginationItemsLenth-1)>tsvgLastItemPosition && (tsvgPageView=='vw-2' || tsvgPageView=='vw-3'))||((tsvgPaginationItemsLenth-1)>=tsvgLastItemPosition && (tsvgPageView=='vw-4' || tsvgPageView=='vw-5'))){
		  				jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").each(function(){
							let tsvgItemPosition =  parseInt(jQuery(this).attr('data-item-number'))+1;
							jQuery(this).attr('data-item-number',tsvgItemPosition).find('a').text(tsvgItemPosition)
		  				});
	 				}
	 				if(tsvgPaginationItemsLenth > (parseInt(jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) && !jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages").find('.page-null').length && (tsvgPageView=='vw-2' || tsvgPageView=='vw-3') )jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().after('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>') 
	 				if((parseInt(jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) >= tsvgPaginationItemsLenth && (tsvgPageView=='vw-2' || tsvgPageView=='vw-3'))jQuery(".tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages").find('.page-null').remove();
	 				if (tsvgCurrentPosition == '1') {
		  				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').addClass('tsvg-pagination-disabled-item');
	  				} else{
						jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="prev"]').removeClass('tsvg-pagination-disabled-item');
					}
	  				if (+tsvgCurrentPosition == tsvgPaginationItemsLenth) {
						  jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-page-item[data-item-number="next"]').addClass('tsvg-pagination-disabled-item');
	  				}else{
						  jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="next"]').removeClass('tsvg-pagination-disabled-item');
	  				}
	  				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-page-item[data-item-number="' + tsvgNextPosition + '"]').click();
	  			})
				tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>,tsvgShowFrom, tsvgShowTo)
	  			if(tsvgEffectOpenType=='effect-1' && jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure>ul>li').length>1){
		  			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-pages-wrapper').attr('style','transition:unset; transform: translateY(200%);');
		  			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('style','transition:unset; margin-bottom:140px;');
		  			setTimeout(() => {
						jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper').attr('style','transition: transform 3s  ease-out;transform: translateY(0%);');
						jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('style','transition: margin 3s  ease-out;margin-bottom:0;');
		  			}, 1000);
	  			}else{
		  			setTimeout(() => {
						jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({'transition':'min-height 3s  ease-in-out','min-height':'0px'});
		  			}, 1000);
		  		}
			})
			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-pagination-page-number:nth-child(2)').click();
		}else if( jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr("data-pagination")=='load-more'){
			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages-wrapper').append('<a href="javascript:void(0)" class="btn btn-lg"><span>'+tsvgLoadText+'</span><i class="'+tsvgLoadIcon+'"></i></a>');
			jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .btn-lg').click(function (e) {
		 		let tsvgMaxHeight =jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').height(); 
		 		let tsvgMainLength = jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul li').length;
				tsvgPaginationLoad<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 'false';
		  		jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({'max-height': tsvgMaxHeight+'px','transition':'unset'});
		  		setTimeout(() => {
				  	jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({'transition':'max-height 3s  ease-in-out','max-height':tsvgMainLength+'000vh'});
				}, 100);
		  		tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul li').not('.tsvg-layout-item-show'),0, tsvgNumberItemsPerPage);
			})
			tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul li').not('.tsvg-layout-item-show'),0, tsvgNumberItemsPerPage)
	  	}
	}
	function tsvgNewPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(){
		let tsvgPaginationInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setInterval(tsvgSetPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 100);
		function tsvgSetPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
			if( typeof(jQuery) != "undefined" && jQuery != null ){
				if( jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr("data-pagination") == 'pagination' || jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr("data-pagination") == 'load-more'){
					tsvgPaginationGenerate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
				}
				clearInterval(tsvgPaginationInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
			}
		}
	}
	tsvgNewPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
	function tsvgPaginationGenerate(){
		tsvgPaginationGenerate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
	}
</script>