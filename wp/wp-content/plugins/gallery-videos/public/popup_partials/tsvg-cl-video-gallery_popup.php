<style type="text/css">
	:root{
		--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_15 ) ); ?>;
		--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_16 ) ); ?>;
		--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_17 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_po_br_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_18 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_to_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_20 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_to_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_21 ) ); ?>;
		--tsvg_popup_to_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_22 ) ); ?>;
		--tsvg_popup_lat_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_25 ), FILTER_VALIDATE_INT ); ?>%;
		--tsvg_popup_lat_h_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_26 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_lat_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_27 ) ); ?>;
		--tsvg_popup_lat_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_28 ) ); ?>;
		--tsvg_popup_cl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_30 ) ); ?>;
		--tsvg_popup_cl_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_31 ), FILTER_VALIDATE_INT ); ?>px;
	}
	.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: fixed;
		display: none;
		width: 100%;
		top: 50%;
		left: 0;
		z-index: 10000001;
		margin: 0 auto;
		max-width: 100% !important;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
	}
	.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: fixed;
		width: 0%;
		height: 0%;
		top: 50%;
		left: 50%;
		z-index: 10000000;
		cursor: pointer;
		max-width: 100% !important;
	}
	.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		margin: 0 auto;
		width: 50%;
		height: inherit;
		display: none;
		padding: 1em;
		height: 100%;
		overflow-y: auto;
		border: var(--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_popup_po_br_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: var(--tsvg_popup_po_br_r_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ;
		background: var(--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		max-height: 85vh !important;
	}
	.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar {
		width: 0.3em;
	}
	.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6pxvar(--tsvg_popup_po_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::-webkit-scrollbar-thumb {
		background-color: var(--tsvg_popup_to_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		outline: var(--tsvg_popup_to_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?> h3 {
		font-size: var(--tsvg_popup_to_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		font-family: var(--tsvg_popup_to_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		color: var(--tsvg_popup_to_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
		text-align: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_23); ?> !important;
		line-height: 1 !important;
		font-weight: 400 !important;
		margin: 10px !important;
		text-transform: none !important;
		letter-spacing: 0 !important;
	}
	.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?> p {
		margin: 10px 0;
		line-height: 1.3;
	}
	i.tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: fixed;
		display: none;
		top: 4vh;
    	right: 7vw;
		color: var(--tsvg_popup_cl_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_popup_cl_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
		z-index: 10000002;
		line-height: 1;
		cursor: pointer;
	}
	.tsvg-classic-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		left: calc(-1em - var(--tsvg_popup_po_br_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>));
		padding: 0.3em 1.5em;
		top: 0;
		border-top: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_32); ?>px solid <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_33); ?>;
		border-right: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_32); ?>px solid <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_33); ?>;
		border-top-right-radius: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_34); ?>px;
		background: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_36); ?>;
		color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_37); ?> !important;
		font-size: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_38); ?>px;
		font-family: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_1_39); ?>;
		text-decoration: none !important;
		line-height: 1;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		-o-box-shadow: none !important;
	}
	.tsvg-classic-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover, .tsvg-classic-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus {
		outline: none !important;
		text-decoration: none !important;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		-o-box-shadow: none !important;
	}
	.tsvg-classic-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover {
		background: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_2_01); ?>;
		color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_2_02); ?> !important;
	}
	.tsvg-classic-popup-link-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		font-size: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_2_04); ?>px !important;
		color: <?php echo esc_html($tsvg_style_options->TotalSoft_GV_2_05); ?> !important;
	}
	.tsvg-classic-popup-title-line-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: block;
		margin: 10px auto;
		width: var(--tsvg_popup_lat_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-top: var(--tsvg_popup_lat_h_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_popup_lat_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) var(--tsvg_popup_lat_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-popup-img-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		display: block;
		text-align: center;
	}
	.tsvg-classic-popup-img-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		position: relative;
		margin: 0 auto;
		height: 300px;
		width: auto;
	}
	.tsvg-classic-popup-iframe-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		padding-bottom: 56.25%;
		padding-top: 30px;
		height: 0;
		width: 100%;
		overflow: hidden;
	}
	.tsvg-classic-popup-iframe-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}
	.tsvg-classic-popup-link-container{
	  position:relative;
	  margin-top:10px;
	}
	.tsvg-classic-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-popup-title-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
	  display:none !important;
	}
	.tsvg-classic-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-show='true'],.tsvg-classic-popup-title-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-show='true']{
	  display:block !important;
	}
	.tsvg-classic-popup-title-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-title='left'] h3{
	   text-align:left!important; ;
	}
	.tsvg-classic-popup-title-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-title='center'] h3{
		text-align:center!important; ;
	}
	.tsvg-classic-popup-title-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-title='right'] h3{
		text-align:right!important; ;
	}
	.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a[href=''], .tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a[href='#']{
	  	display:none!important;
	}
	.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > video{
		width:100%;
		height:50vh;
	}
	<?php if ( $tsvg_style_options->TotalSoft_GV_1_01 >= '1' ) { ?>
		@media (max-width: 620px) {
			.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
				width: 100%;
				margin: 0.5em 0;
			}
			.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
				width: 100%;
			}
			.tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
				z-index: 1000000000;
				top: 0.2em;
				right: 0.4em;
				font-size: 30px;
			}
		}
	<?php }
	if ( $tsvg_style_options->TotalSoft_GV_1_01 >= '3' ) { ?>
		/* Landscape phone to portrait tablet */
		@media (max-width: 850px) {
			.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
				margin: auto;
				width: 80%;
				max-height: 500px;
			}
		}
	<?php }
	if ( $tsvg_style_options->TotalSoft_GV_1_01 >= '4' ) { ?>
		/* Portrait tablet to landscape and desktop */
		@media (min-width: 850px) and (max-width: 979px) {
			.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
				width: 70%;
				max-height: 550px;
			}
		}
	<?php } ?>
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
		<div class="tsvg-classic-popup-backface-%1$s"></div>
		<i class="tsvg-classic-popup-close-icon-%1$s %2$s"></i>
		<div class="tsvg-classic-popup-content-box-%1$s">
			<div class="tsvg-classic-popup-content-%1$s" data-tsvg-autoplay="%3$s">
				<div class="tsvg-classic-popup-iframe-container-%1$s">
					<iframe src="" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="tsvg-classic-popup-video-container-%1$s">
					<video src=""  controls></video>
				</div>
				<div class="tsvg-classic-popup-img-container-%1$s" >
					<img src=""/>
				</div>
				<div class="tsvg-classic-popup-title-container-%1$s"  data-show="%4$s" data-tsvg-title="%5$s">
					<h3></h3>
					<span class="tsvg-classic-popup-title-line-%1$s"></span>
				</div>
				<p class="tsvg-classic-popup-desc-%1$s"  data-show="%6$s"></p>
				<div class="tsvg-classic-popup-link-container">
					<a class="tsvg-classic-popup-link-%1$s" href="" target="" data-position="%7$s">
						<i class="tsvg-classic-popup-link-icon-%1$s ts-vgallery ts-vgallery-%8$s" style="margin-right: 5px;"></i>
						%9$s
					</a>
				</div>
			</div>
		</div>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_29 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_37 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_19 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_23 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_24 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_06 ),
		esc_html( $tsvg_style_options->TotalSoft_GV_2_03 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_35 )
	);
?>
<script type="text/javascript">
	let tsvgClassicInterval_for_<?php echo esc_attr( $tsvg_shortcode_id ); ?> = null,  
    	tsvgClassicIntervalFunction_<?php echo esc_attr( $tsvg_shortcode_id ); ?> = function(){
    	    if(typeof jQuery === "function" && typeof(jQuery) != "undefined" && jQuery != null) {
				jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').fadeIn();
				jQuery(document).on("click", ".tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>", function() {
					if(!jQuery('.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').parent().is('body')){
						jQuery('.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').appendTo(document.body);
						jQuery('.tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').appendTo(document.body);
						jQuery('.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').appendTo(document.body);
					}
					let tsvgClassicIframeUrl = jQuery(this).attr('data-tsvg-src'),
						tsvgClassicAutoPlay = jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-autoplay'),
						tsvgClassicItemTitle = jQuery(this).find('.tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').text(),
						tsvgClassicItemDesc = jQuery(this).find('.tsvg-classic-block-desc').html(),
						tsvgClassicItemLink = jQuery(this).attr('data-tsvg-link'),
						tsvgClassicItemTarget = jQuery(this).attr('data-tsvg-target');
					jQuery('.fixed-header-box').css({'z-index': '0'});
					jQuery('.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({'width': '100%', 'height': '100%', 'top': '0', 'left': '0'}, 500);
					setTimeout(function () {
						jQuery('.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'flex', 'display': '-webkit-flex' });
						jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
						jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'block' });
						jQuery('.tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'block' });
						let tsvgClassicIsVideo = 'false',
							tsvgClassicIsMP4 = 'false';
						if ( tsvgClassicIframeUrl.indexOf('youtube.com/shorts/') > -1 ) {
							tsvgClassicIframeUrl = tsvgClassicIframeUrl.replace("shorts", "embed")
						}else if (tsvgClassicIframeUrl.indexOf('watch?v=') > -1){
							var tsvgClassicIframeUrlSplit = tsvgClassicIframeUrl.split("=");
							tsvgClassicIframeUrl = 'https://www.youtube.com/embed/' + tsvgClassicIframeUrlSplit[1];
						}
						if (tsvgClassicIframeUrl.indexOf('youtube.com/embed/') > -1 ) {
							tsvgClassicIsVideo = 'true';
							if(tsvgClassicAutoPlay == "true"){
								tsvgClassicIframeUrl = tsvgClassicIframeUrl + '?autoplay=1&mute=1';
							}
						} else if (tsvgClassicIframeUrl.indexOf('player.vimeo.com/video/') > -1) {
							tsvgClassicIsVideo = 'true';
							if(tsvgClassicAutoPlay == "true"){
								tsvgClassicIframeUrl = tsvgClassicIframeUrl + '?autoplay=1&muted=1';
							}
						} else if(tsvgClassicIframeUrl.indexOf('rumble.com/') > -1) {
							tsvgClassicIsVideo = 'true';
						} else if (tsvgClassicIframeUrl.indexOf('.mp4') > -1) {
							tsvgClassicIsVideo = 'true';
							tsvgClassicIsMP4 = 'true';
						} else if (tsvgClassicIframeUrl.indexOf('fast.wistia.net/embed/iframe/') > -1) {
							tsvgClassicIsVideo = 'true';
							if(tsvgClassicAutoPlay == "true"){
								tsvgClassicIframeUrl = tsvgClassicIframeUrl + '?wvideo=hashedid';
							}
						} 
						if (tsvgClassicIsVideo == 'true') {
							if(tsvgClassicIsMP4 == 'true'){
								jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('src', tsvgClassicIframeUrl);
								if (tsvgClassicAutoPlay == "true") {
									jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').attr('autoplay', true);
								} else {
									jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('video').removeAttr('autoplay');
								}
								jQuery('.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'block');
								jQuery('.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('width', '100%');
								jQuery('.tsvg-classic-popup-iframe-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
							} else{
								if( tsvgClassicIframeUrl.indexOf('rumble.com/') > -1){
									jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('sandbox','allow-scripts');
								} else {
									jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').removeAttr('sandbox');
								}
								jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe').attr('src', tsvgClassicIframeUrl);
								jQuery('.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
								jQuery('.tsvg-classic-popup-iframe-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'block');
							}
							jQuery('.tsvg-classic-popup-img-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
						} else {
							jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('img').attr('src', tsvgClassicIframeUrl);
							jQuery('.tsvg-classic-popup-iframe-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
							jQuery('.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
							jQuery('.tsvg-classic-popup-img-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'block');
						}
						jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('.tsvg-classic-popup-title-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('h3').text(tsvgClassicItemTitle);
						jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('.tsvg-classic-popup-desc-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').html(tsvgClassicItemDesc);
						if (tsvgClassicItemLink) {
							jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('.tsvg-classic-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('target', tsvgClassicItemTarget).css('display', 'block');
							jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('.tsvg-classic-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', tsvgClassicItemLink)
						} else {
							jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('.tsvg-classic-popup-link-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('href', '#').css({ 'display': 'none' })
						}
					}, 500);
				});
				jQuery(document).on("click", ".tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>", function () {
					jQuery('.fixed-header-box').css({ 'z-index': '10' });
					jQuery('.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' video').attr('src', '');
					jQuery('.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'none' });
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' iframe').attr('src', '');
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' img').attr('src', '');
					jQuery('.tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'none' });
					jQuery('.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'width': '0%', 'height': '0%', 'top': '50%', 'left': '50%' }, 500);
				});
				jQuery(document).on("click", ".tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>", function (e) {
					if (e.target !== this) {
						return;
					}
					jQuery('.fixed-header-box').css({ 'z-index': '10' });
					jQuery('.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' video').attr('src', '');
					jQuery('.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'none' });
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' iframe').attr('src', '');
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' img').attr('src', '');
					jQuery('.tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'none' });
					jQuery('.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'width': '0%', 'height': '0%', 'top': '50%', 'left': '50%' }, 500);
				});
				jQuery(".tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").click(function (e) {
					if (e.target !== this) {
						return;
					}
					jQuery('.fixed-header-box').css({ 'z-index': '10' });
					jQuery('.tsvg-classic-popup-video-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' video').attr('src', '');
					jQuery('.tsvg-classic-popup-content-box-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'none' });
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css('display', 'none');
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' iframe').attr('src', '');
					jQuery('.tsvg-classic-popup-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>' + ' img').attr('src', '');
					jQuery('.tsvg-classic-popup-close-icon-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').css({ 'display': 'none' });
					jQuery('.tsvg-classic-popup-backface-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').animate({ 'width': '0%', 'height': '0%', 'top': '50%', 'left': '50%' }, 500);
				});
    	       	clearInterval(tsvgClassicInterval_for_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
    	    }
    	},
		tsvgClassicReference_for_<?php echo esc_attr( $tsvg_shortcode_id ); ?> = (function tsvgClassicSameCallFunction_<?php echo esc_attr( $tsvg_shortcode_id ); ?>() {
    	    tsvgClassicInterval_for_<?php echo esc_attr( $tsvg_shortcode_id ); ?> = setInterval(tsvgClassicIntervalFunction_<?php echo esc_attr( $tsvg_shortcode_id ); ?>, 1000);
    		return tsvgClassicSameCallFunction_<?php echo esc_attr( $tsvg_shortcode_id ); ?>;
		}());
</script>
