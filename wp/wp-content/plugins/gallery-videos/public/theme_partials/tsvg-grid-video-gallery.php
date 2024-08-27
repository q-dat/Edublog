<style type="text/css">
	:root{
	  	--tsvg_general_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_03 ), FILTER_VALIDATE_INT ); ?>;
	  	--tsvg_general_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ), FILTER_VALIDATE_INT ); ?>;
	  	--tsvg_vertical_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_general_video_radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_05 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_general_opacity_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( ( $tsvg_style_options->TotalSoft_GV_1_07 ) ), FILTER_VALIDATE_FLOAT ); ?>;
		--tsvg_general_dr_sh_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_08 ) ); ?>;
		--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_09 ) ); ?>;
	  	--tsvg_title_mt_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_10 ), FILTER_VALIDATE_INT ); ?>px;
	  	--tsvg_to_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_11 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_to_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_12 ) ); ?>;
		--tsvg_to_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_13 ) ); ?>;
		--tsvg_content_mg_<?php echo esc_attr( $tsvg_shortcode_id ); ?> : 0;
	}
	.tsvg-grid-slide-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?> p span{
		line-height:1;
		color:#000000;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .-wrap_<?php echo esc_attr($tsvg_shortcode_id); ?>{
		max-width: 95%;
		margin: 0 auto;
		padding: 0;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-content-items{
		list-style-type: none;
		padding: 0!important;
		margin: 0 ;
		position: relative;
		list-style: none;
		<?php if ( $tsvg_style_options->TotalSoft_GV_2_26 == 'fallPerspective'
			|| $tsvg_style_options->TotalSoft_GV_2_26 == 'fly'
			|| $tsvg_style_options->TotalSoft_GV_2_26 == 'flip'
			|| $tsvg_style_options->TotalSoft_GV_2_26 == 'helix'
			|| $tsvg_style_options->TotalSoft_GV_2_26 == 'popUp'
		) { ?> 
			-webkit-perspective: 1300px;-moz-perspective: 1300px;perspective: 1300px;
		<?php } ?>
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-layout-item{
	   	display: flex; 
		-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;
		-webkit-justify-content: center;-ms-justify-content: center; justify-content: center;
		align-self: flex-start;
		position: absolute;
		margin : 0px 0px var(--tsvg_vertical_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) 0px;
		cursor: pointer;
		opacity: 1;
		<?php if ( $tsvg_style_options->TotalSoft_GV_2_26 == 'moveUp' ) { ?> 
			-webkit-transform: translateY(200px);-moz-transform: translateY(200px);transform: translateY(200px);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_26 == 'scaleUp' ) { ?>
			-webkit-transform: scale(0.6);-moz-transform: scale(0.6); transform: scale(0.6);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_26 == 'fallPerspective' ) { ?>
			 -webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d; transform-style: preserve-3d;-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
			-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg); transform: translateZ(400px) translateY(300px) rotateX(-90deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_26 == 'fly' ) { ?>
			 -webkit-transform-style: preserve-3d;-moz-transform-style: preserve-3d;transform-style: preserve-3d;
			-webkit-transform-origin: 50% 50% -300px;-moz-transform-origin: 50% 50% -300px;transform-origin: 50% 50% -300px;
			-webkit-transform: rotateX(-180deg); -moz-transform: rotateX(-180deg);transform: rotateX(-180deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_26 == 'flip' ) { ?>
			-webkit-transform-style: preserve-3d;-moz-transform-style: preserve-3d; transform-style: preserve-3d;
			-webkit-transform-origin: 0% 0%;-moz-transform-origin: 0% 0%;transform-origin: 0% 0%;
			-webkit-transform: rotateX(-80deg);-moz-transform: rotateX(-80deg);transform: rotateX(-80deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_26 == 'helix' ) { ?> 
			-webkit-transform-style: preserve-3d;-moz-transform-style: preserve-3d; transform-style: preserve-3d;
			-webkit-transform: rotateY(-180deg); -moz-transform: rotateY(-180deg);transform: rotateY(-180deg);
		<?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_26 == 'popUp' ) { ?> 
			-webkit-transform-style: preserve-3d;-moz-transform-style: preserve-3d;transform-style: preserve-3d;
			-webkit-transform: scale(0.4); -moz-transform: scale(0.4);transform: scale(0.4);
		<?php } ?>
	}
	.tsvg-grid-layout-item:before {
		content: '' !important;
	}
   	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-grid-layout-item figure{
		display: flex;
		-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;
		-webkit-justify-content: center;-ms-justify-content: center;justify-content: center;
		-webkit-flex-wrap: nowrap;-ms-flex-wrap: nowrap;flex-wrap: nowrap;
		align-content: center;
		align-items: stretch;
		margin: 0;
		height: 100%;
		-webkit-transition: opacity 0.2s;
		transition: opacity 0.2s;
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=none] {
		-webkit-filter: none; filter: none;
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=blur] {
		-webkit-filter: blur(2px); filter: blur(2px);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=brightness] {
		-webkit-filter: brightness(120%);filter: brightness(120%);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=contrast] {
		-webkit-filter: contrast(150%); filter: contrast(150%);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=grayscale] {
		-webkit-filter: grayscale(100%);filter: grayscale(100%);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=hue-rotate] {
		-webkit-filter: hue-rotate(90deg); filter: hue-rotate(90deg);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=invert] {
		-webkit-filter: invert(100%); filter: invert(100%);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=drop-shadow] {
	   -webkit-filter: drop-shadow(0px 0px 3px var(--tsvg_general_dr_sh_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)); filter: drop-shadow(0px 0px 3px var(--tsvg_general_dr_sh_cl_<?php echo esc_attr( $tsvg_shortcode_id ); ?>));
	}
	.tsvg-grid-layout-item:hover  .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=opacity] {
		-webkit-filter: opacity(var(--tsvg_general_opacity_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)); filter: opacity(var(--tsvg_general_opacity_<?php echo esc_attr( $tsvg_shortcode_id ); ?>));
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=sepia] {
		-webkit-filter: sepia(100%); filter: sepia(100%);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=saturate] {
		-webkit-filter: saturate(8);filter: saturate(8);
	}
	.tsvg-grid-layout-item:hover .tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect=contrast-brightness] {
		-webkit-filter: contrast(120%) brightness(120%);  filter: contrast(120%) brightness(120%);
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure img{
		max-width: 100%;
		border: none;
		font-size: inherit;
		line-height: inherit;
		margin: 0 !important;
		padding: 0;
		text-align: inherit;
		height: 100%;
		width: 100%;
		flex: 1;
		-o-object-fit: cover;
		object-fit: cover;
		display: block !important; /* lazy load */
		cursor: pointer;
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure h3{
		margin: 0;
		padding: 5px 17px;
		text-align: center;
		margin-top:  var(--tsvg_title_mt_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		margin-bottom: 0 !important;
		word-wrap: break-word;
		font-size: var(--tsvg_to_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		line-height:calc(var(--tsvg_to_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) + 2px) !important;
		font-family: var(--tsvg_to_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		color:  var(--tsvg_to_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)!important;
		border-bottom: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_15); ?>px <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_16); ?> <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_17); ?> !important;
		font-weight: 400 !important;
		text-transform: none !important;perspective: 800px;transform: translate3d(0, 0, 0);-moz-transform: translate3d(0, 0, 0);-webkit-transform: translate3d(0, 0, 0);
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure h3[data-tsvg-title='left']{
		text-align:left ;
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure h3[data-tsvg-title='center']{
		text-align:center ;
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure h3[data-tsvg-title='right']{
		text-align:right ;
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure figcaption{
		width: 100%;
		max-height: 100%;
		overflow: auto;
		text-align: center;
		font-size: .8em;
		margin: 0;
		padding: 5px 17px;
		margin-bottom: 0 !important;
		word-wrap: break-word;
		line-height: normal;
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure[data-tsvg-bool="false"] .tsvg-grid-layout-item-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure[data-tsvg-bool="false"] .tsvg-grid-layout-item-caption-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		background:  var(--tsvg_title_bc_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-grid-layout-item figure figcaption ol ul {
		list-style-type: decimal;
		display: list-item;
		font-size: 13px;
	}
	.tsvg-grid-layout-item figcaption > ul li {
		position: unset !important;
		word-wrap: break-word;
		width: unset !important;
	}
	.tsvg-grid-layout-item figure figcaption ul, .tsvg-grid-layout-item figure figcaption ol {
		left: 0;
		margin-left: 0;
	}
	.tsvg-grid-layout-item figure figcaption ul  ul {
		display: list-item;
		list-style-type: disc;
	}
	.tsvg-grid-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		max-width: 100%;
		display: flex;
		flex-direction: row;
		align-items: center;
		align-content: center;
		justify-content: center;
		width: 100%;
		margin: 0 !important;
		padding: 13px 40px;
	}
	.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		width: 100%;
		margin: 0px auto;
	}
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
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-open {
		opacity: 1;
		display: block;
		-webkit-transition: opacity 0.4s;
		-moz-transition: opacity 0.4s;
		transition: opacity 0.4s;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		width: 100%;
		height: 100%;
		margin: 0;
		list-style: none;
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		transform-style: preserve-3d;
		-webkit-transition: -webkit-transform 0.5s;
		-moz-transition: -moz-transform 0.5s;
		transition: transform 0.5s;
	}
	.tsvg-grid-slides-animateable > .tsvg-grid-slide {
		-webkit-transition: -webkit-transform 0.7s,  top 0.7s;
		-moz-transition: -moz-transform 0.7s,  top 0.7s;
		transition: transform 0.7s,  top 0.7s;
	}
	.tsvg-grid-slides-animateable{
		display: inline-table;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > .tsvg-grid-slide:after
	{
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		-webkit-transition: opacity 0.5s;-moz-transition: opacity 0.5s;transition: opacity 0.5s;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slides-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  {
		display: flex;
		-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide.tsvg-grid-slide-visiable<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		visibility: visible;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure {
		position: absolute;
		width: 100%;
		overflow: hidden;
		background-color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_18); ?>;
		border: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_19); ?>px <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_20); ?> <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_21); ?>;
		border-radius: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_22); ?>px;
		padding: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_23); ?>px;
		padding-top:0 ;
		max-width: 100%;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figcaption {
		padding: 5px 0;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-video-wrapper,   .tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-media-wrapper,.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide .tsvg-media-wrapper{
		position: relative;
		padding-top: 56.25%;
	}
   	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide figure iframe,
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide figure img, 
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide  figure video {
		height: auto;
		min-width: 100%!important;
		position: absolute;
		top: 0;
		left:0;
		width: 100%;
		height: 100%;
		min-height: 100%!important;
		max-height: 100%!important;
		margin: 0;
		display: block;
		max-height:auto!important;
		margin-left: 0!important;
	}
	.tsvg-grid-slide-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img.emoji[draggable='false'] {
		min-width: 1em !important;
    	min-height: 1em !important;
		position:unset !important;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide  figure img {
		height: auto;
		width: auto;
		margin: 0 auto !important;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div {
		margin-top: 5px;
		height: auto;
		width: 100%;
		word-break: break-all;
		line-height: normal;
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
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		overflow-y: auto;
		overflow-x: hidden;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > .tsvg-grid-slide:after {
		background-color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_18); ?>;
		border-radius: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_22); ?>px;
		opacity: 0.8;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ol, .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure ul {
		margin-left: 0 !important;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  figcaption{
		font-size: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_24); ?>px;
		font-family: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_25); ?> !important;
		color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_26); ?> !important;
		text-align: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_27); ?> !important;
		border-bottom: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_28); ?>px <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_29); ?> <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_30); ?> !important;
		margin-bottom: 0 !important;
		line-height: 1 !important;
		font-weight: 400 !important;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span {
		position: fixed;
		z-index: 1000;
		padding: 3%;
		cursor: pointer;
		background: none !important;
		background-color: inherit !important;
		width: auto !important;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span:before, .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span:after {
		content: none;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div::-webkit-scrollbar {
		width: 0.5em;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px<?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_18); ?>;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-grid-slide-div::-webkit-scrollbar-thumb {
		background-color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_26); ?>;
		outline: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_26); ?>;
	}
	.tsvg-grid-slide-visiable<?php echo esc_attr($tsvg_shortcode_id); ?> {
		-webkit-transition: opacity 1s ease-out 0.5s;-moz-transition: opacity 1s ease-out 0.5s; -o-transition: opacity 1s ease-out 0.5s; transition: opacity 1s ease-out 0.5s;
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
		font-size: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_35); ?>px;
		color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_34); ?>;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-close-btn {
		font-size: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_39); ?>px;
		color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_38); ?>;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn, .tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn{
		top: 50%;
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-prev-btn {
		left: 0;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-next-btn {
		right: 0;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav span.tsvg-grid-slideshow-close-btn {
		top: 3%;
		right: 0;
	}
	.tsvg-grid-slideshow-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-slide .tsvg-media-wrapper iframe{
		width:100%;
	}
	.tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-layout-item-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		padding: 10px 5px;
	}
	.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-layout-item-caption-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-layout-item-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display: none;
		opacity: unset !important;
	}
	.tsvg-grid-layout-item-caption-<?php echo esc_attr( $tsvg_shortcode_id ); ?> p{
		color: inherit !important;
	}
	.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-show-desc='true'] .tsvg-grid-layout-item-caption-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-show-title='true'] .tsvg-grid-layout-item-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		display: block;
	}
	.tsvg-grid-layout-item-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> figure figcaption ol ul{
		list-style-type: decimal;
		display: list-item;
		font-size: 13px;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-layout-item figure{
		overflow: hidden;
		border-radius: var(--tsvg_general_video_radius_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > figure.tsvg-grid-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > ul.tsvg-grid-content-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		margin : 0px var(--tsvg_content_mg_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) 0px var(--tsvg_content_mg_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-layout-item-title-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-hide='true']{
		padding: unset;
	}
	.tsvg-grid-layout-item-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-grid-layout-item-caption-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-hide='true']{
		padding: unset;
	}
</style>
<?php
$tsvg_videos_data_html = '';
$i = 0;
foreach ( $tsvg_videos_data as $key => $value ) {
	$i++;
	$tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
	$tsvg_block_img_url = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_img.jpg', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
	$tsvg_videos_data_html .= sprintf(
		'
      	<li class="tsvg-grid-layout-item tsvg-grid-layout-item-%1$s" data-tsvg-id="%3$s" style="-moz-animation-delay: %4$ss;-webkit-animation-delay: %4$ss;animation-delay: %4$ss;">
      	  	<figure class="tsvg-grid-layout-item-block-%1$s" data-tsvg-effect="%5$s" data-tsvg-bool="%6$s">
      	  	  	<img  width="" height="" src="%7$s" alt="img" >
      	  	  	<h3 class="tsvg-grid-layout-item-title-%1$s"  data-tsvg-title="%8$s" data-tsvg-hide="%10$s">
      	  	    	%9$s  
      	  	  	</h3>
      	  	  	<figcaption class="tsvg-grid-layout-item-caption-%1$s" data-tsvg-hide="%11$s">
      	  	  	  	%2$s
      	  	  	</figcaption>
      	  	</figure>
      	</li>
    	',
		esc_attr( $tsvg_shortcode_id ),
		wp_unslash( html_entity_decode( $tsvg_videos_data_object->TotalSoftVGallery_Vid_desc ) ),
		esc_attr( $tsvg_videos_data[ $key ]->id ),
		esc_attr( 0.3 * $i ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_06 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_40 ),
		esc_url( $tsvg_block_img_url ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_14 ),
		esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
        esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ) == '' ? 'true"': 'false' ,
        wp_unslash( html_entity_decode( $tsvg_videos_data_object->TotalSoftVGallery_Vid_desc ) ) == '' ? 'true"': 'false' ,
	);
}
echo sprintf(
	'
 	<main class="tsvg-main-content-%1$s"  data-item-open="%2$s" data-item-number="%3$s" data-pagination="%4$s"  data-p-lm="%5$s">
 	  	<figure class="tsvg-grid-content-%1$s">
 	   		<ul class="tsvg-grid-content-items-%1$s tsvg-grid-content-items"  data-show-title="%6$s"  data-show-desc="%7$s">
 	   			%8$s  
 	   		</ul>
 	   	</figure>
 	</main>
	',
	esc_attr( $tsvg_shortcode_id ),
	esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_07 ),
	esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_02 ),
	esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
	esc_attr( $tsvg_style_options->TotalSoft_GV_2_26 ),
	esc_attr( $tsvg_style_options->TotalSoft_GV_1_01 ),
	esc_attr( $tsvg_style_options->TotalSoft_GV_1_02 ),
	$tsvg_videos_data_html
);
?>