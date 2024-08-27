<style type="text/css">
    :root{
		--tsvg_popup_ps_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_31 ) ); ?>;
		--tsvg_popup_ps_b_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_32 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_ps_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_33 ) ); ?>;
		--tsvg_popup_ps_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_34 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_ps_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_35 ) ); ?>;
		--tsvg_popup_ps_vt_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_37 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_popup_ps_vt_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_38 ) ); ?>;
		--tsvg_popup_ps_vt_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_39 ) ); ?>;
		--tsvg_popup_ps_o_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_36 ) ); ?>;
		--tsvg_popup_po_o_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_28 ) ); ?>;
		--tsvg_popup_psi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_2_02 ) ); ?>;
		--tsvg_popup_psi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_2_01 ), FILTER_VALIDATE_INT ); ?>px;
    }
    #tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxOverlay<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxWrapper<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 9999999999;
    }
    #tsvgParallaxColorBoxWrapper<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        max-width: none;
    }
    #tsvgParallaxColorBoxOverlay<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: fixed;
        width: 100%;
        height: 100%;
    }
    #tsvgParallaxColorBoxMiddleLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxBottomLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        clear: left;
    }
    #tsvgParallaxColorBoxContent<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: relative;
        max-width:95vw;
        background: #fff;
        overflow: visible;
        border: 15px solid red;
        border-radius: 5px;
        width: calc(100% - calc(2 * var(--tsvg_popup_ps_b_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)));
    }
    #tsvgParallaxColorBoxLoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        overflow: auto;
        -webkit-overflow-scrolling: touch;
    }
    #tsvgParallaxColorBoxTitle<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        margin: 0;
    }
    #tsvgParallaxColorBoxLoadingOverlay<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxLoadingGraphic<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    #tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxSlideshow<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        cursor: pointer;
    }
    .tsvgParallaxColorBoxPhoto<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        float: left;
        margin: auto;
        border: 0;
        display: block;
        max-width: none;
        -ms-interpolation-mode: bicubic;
    }
    .tsvgParallaxColorBoxIframe<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        width: 100%;
        height: 100%;
        display: block;
        border: 0;
        padding: 0;
        margin: 0;
    }
    #tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxContent<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxLoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        box-sizing: content-box;
        -moz-box-sizing: content-box;
        -webkit-box-sizing: content-box;
    }
    #tsvgParallaxColorBoxOverlay<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        background: rgba(0, 0, 0, 0.7);
    }
    #tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        outline: 0;
    }
    #tsvgParallaxColorBoxTopLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        width: 0px;
        height: 0px;
        background: #fff;
        display: none;
    }
    #tsvgParallaxColorBoxTopRight<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        width: 0px;
        height: 0px;
        background: #fff;
        display: none;
    }
    #tsvgParallaxColorBoxBottomLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        width: 0px;
        height: 0px;
        background: #fff;
        display: none;
    }
    #tsvgParallaxColorBoxBottomRight<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        width: 0px;
        height: 0px;
        background: #fff;
        display: none;
    }
    #tsvgParallaxColorBoxMiddleLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        width: 0px;
        background: #fff;
        display: none;
    }
    #tsvgParallaxColorBoxMiddleRight<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        width: 0px;
        background: #fff;
        display: none;
    }
    #tsvgParallaxColorBoxTopCenter<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        height: 0px;
        background: #fff;
        display: none;
    }
    #tsvgParallaxColorBoxBottomCenter<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        height: 0px;
        background: #fff;
        display: none;
    }
    .tsvgParallaxColorBoxIframe<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        background: #fff;
    }
    #tsvgParallaxColorBoxError {
        padding: 50px;
        border: 1px solid #ccc;
    }
    #tsvgParallaxColorBoxLoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        margin-top: 0px !important;
    }
    #tsvgParallaxColorBoxTitle<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: relative;
        top: var(--tsvg_popup_ps_b_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
        left: 0;
        text-align: center;
        width: 100%;
        color: #949494;
    }
    #tsvgParallaxColorBoxCurrent {
        position: absolute;
        bottom: 4px;
        left: 58px;
        color: #949494;
    }
    #tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxSlideshow<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        border: 0;
        padding: 0;
        margin: 0;
        overflow: visible;
        width: auto;
        background: none;
    }
    #tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?>:active, #tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?>:active, #tsvgParallaxColorBoxSlideshow<?php echo esc_attr( $tsvg_shortcode_id ); ?>:active, #tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?>:active {
        outline: 0;
    }
    #tsvgParallaxColorBoxSlideshow<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: absolute;
        bottom: 4px;
        right: 30px;
        color: #0092ef;
    }
    #tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: absolute;
        top: calc(100% + var(--tsvg_popup_ps_b_<?php echo esc_attr( $tsvg_shortcode_id ); ?>));
        left: 0;
        font-size: 25px;
        opacity: 0.7;
        color: red;
        display: inline !important;
    }
    #tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover {
        opacity: 1;
    }
    #tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: absolute;
        top: calc(100% + var(--tsvg_popup_ps_b_<?php echo esc_attr( $tsvg_shortcode_id ); ?>));
        left: 40px;
        font-size: 25px;
        color: red;
        opacity: 0.7;
        display: inline !important;
    }
    #tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover {
        opacity: 1;
    }
    #tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        position: absolute;
        top: calc(100% + var(--tsvg_popup_ps_b_<?php echo esc_attr( $tsvg_shortcode_id ); ?>));
        right: 0;
        color: red;
        font-size: 25px;
        opacity: 0.7;
    }
    #tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover {
        opacity: 1;
    }
    .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxTopLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxTopCenter<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxTopRight<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxBottomLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxBottomCenter<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxBottomRight<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxMiddleLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvgParallaxColorBoxIE #tsvgParallaxColorBoxMiddleRight<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF, endColorstr=#00FFFFFF);
    }
    html.tsvg-paralax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        overflow: hidden !important;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay img {
        border: none !important;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 99999999 !important;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider {
        height: 100%;
        left: 0;
        top: 0;
        width: 100%;
        white-space: nowrap;
        position: absolute;
        display: none;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        background: url("../Images/loading.gif") no-repeat center center;
        height: 100%;
        width: 100%;
        text-align: center;
        display: inline-block;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
        content: "";
        display: inline-block;
        height: 50%;
        width: 1px;
        margin-right: -1px;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> img, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video-container {
        display: inline-block;
        max-height: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
        width: auto;
        height: auto;
        vertical-align: middle;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video-container {
        background: none;
        max-width: 650px;
        max-height: 100%;
        width: 100%;
        padding: 5%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video-container .tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video {
        width: 100%!important;
        height:100%!important;
        padding-bottom: 56.25%!important;
        overflow: hidden;
        position: relative;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video-container .tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video iframe {
        width: 100% !important;
        height: 100% !important;
        position: absolute;
        top: 0;
        left: 0;
        background: #ffffff;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption {
        position: absolute;
        left: 0;
        z-index: 999;
        height: 50px;
        width: 100%;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action {
        bottom: -50px;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action.tsvg-parallax-visible-bars {
        bottom: 0;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action.tsvg-parallax-force-visible-bars {
        bottom: 0 !important;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption {
        top: -50px;
        text-align: center;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption.tsvg-parallax-visible-bars {
        top: 0;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption.tsvg-parallax-force-visible-bars {
        top: 0 !important;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close {
        border: none !important;
        text-decoration: none !important;
        cursor: pointer;
        position: absolute;
        font-size: 25px;
        color: #fff;
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -o-transform: translateY(-50%);
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close {
        background-position: 15px 12px;
        left: 40px;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev {
        background-position: -32px 13px;
        right: 100px;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next {
        background-position: -78px 13px;
        right: 40px;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev.disabled, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next.disabled {
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=30);
        opacity: 0.3;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider.tsvgRightSpring {
        animation: tsvgRightSpring 0.3s;
        -moz-animation: tsvgRightSpring 0.3s;
        -webkit-animation: tsvgRightSpring 0.3s;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider.tsvgLeftSpring {
        animation: tsvgLeftSpring 0.3s;
        -moz-animation: tsvgLeftSpring 0.3s;
        -webkit-animation: tsvgLeftSpring 0.3s;
    }
    @keyframes tsvgRightSpring {
        0% {
            margin-left: 0px;
        }
        50% {
            margin-left: -30px;
        }
        100% {
            margin-left: 0px;
        }
    }
    @keyframes tsvgLeftSpring {
        0% {
            margin-left: 0px;
        }
        50% {
            margin-left: 30px;
        }
        100% {
            margin-left: 0px;
        }
    }
    @-moz-keyframes tsvgRightSpring {
        0% {
            margin-left: 0px;
        }
        50% {
            margin-left: -30px;
        }
        100% {
            margin-left: 0px;
        }
    }
    @-moz-keyframes tsvgLeftSpring {
        0% {
            margin-left: 0px;
        }
        50% {
            margin-left: 30px;
        }
        100% {
            margin-left: 0px;
        }
    }
    @-webkit-keyframes tsvgRightSpring {
        0% {
            margin-left: 0px;
        }
        50% {
            margin-left: -30px;
        }
        100% {
            margin-left: 0px;
        }
    }
    @-webkit-keyframes tsvgLeftSpring {
        0% {
            margin-left: 0px;
        }
        50% {
            margin-left: 30px;
        }
        100% {
            margin-left: 0px;
        }
    }
    @media screen and (max-width: 800px) {
        #tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			width:100vw !important;
		}
		#tsvgParallaxColorBoxContent<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
			left:2.5vw !important;
			right:2.5vw !important;
		}
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay {
        background: rgba(0, 0, 0, 0.7);
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption {
        text-shadow: 1px 1px 1px black;
        background-color: #0d0d0d;
        background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #0d0d0d), color-stop(100%, #000000));
        background-image: -webkit-linear-gradient(#0d0d0d, #000000);
        background-image: -moz-linear-gradient(#0d0d0d, #000000);
        background-image: -o-linear-gradient(#0d0d0d, #000000);
        background-image: linear-gradient(#0d0d0d, #000000);
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=95);
        opacity: 0.95;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption {
        color: white !important;
        font-size: 15px;
        line-height: 43px;
        font-family: Helvetica, Arial, sans-serif;
    }
    #tsvgParallaxColorBoxOverlay<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay {
        background: var(--tsvg_popup_po_o_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption {
        background: var(--tsvg_popup_ps_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        opacity: 1 !important;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> img, #tsvgParallaxColorBoxContent<?php echo esc_attr( $tsvg_shortcode_id ); ?>, .tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video {
        border: var(--tsvg_popup_ps_b_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_popup_ps_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        box-shadow: 0px 0px var(--tsvg_popup_ps_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_popup_ps_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        -moz-box-shadow: 0px 0px var(--tsvg_popup_ps_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_popup_ps_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        -webkit-box-shadow: 0px 0px var(--tsvg_popup_ps_sh_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  var(--tsvg_popup_ps_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }
    #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
        box-sizing: border-box !important;
        -moz-box-sizing: border-box !important;
        -webkit-box-sizing: border-box !important;
        margin-top: 0px !important;
    }
    #tsvgParallaxColorBoxContent<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action {
        background: var(--tsvg_popup_ps_o_bc_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        opacity: 1 !important;
    }
    #tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxOverlay<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxWrapper<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        overflow: visible !important;
        max-width: 100% !important;
    }
    #tsvgParallaxColorBoxTitle<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption {
        font-size: var(--tsvg_popup_ps_vt_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)  !important;
        font-family: var(--tsvg_popup_ps_vt_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        color: var(--tsvg_popup_ps_vt_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        bottom: 0px !important;
    }
    #tsvgParallaxColorBoxTitle<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
        line-height: calc(7 + var(--tsvg_popup_ps_vt_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>)) !important;
    }
    #tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next {
        font-size: var(--tsvg_popup_psi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
        color: var(--tsvg_popup_psi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) !important;
    }
    <?php if ( $tsvg_style_options->TotalSoft_GV_2_05 == '1' ) { ?>
        #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxLoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
            background: url("<?php echo esc_url(plugins_url( '../Images/loading1.gif', __FILE__ )); ?>") no-repeat center center !important;
        }
    <?php } elseif ( $tsvg_style_options->TotalSoft_GV_2_05 == '2' ) { ?>
        #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxLoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
            background: url("<?php echo esc_url(plugins_url( '../Images/loading2.gif', __FILE__ )); ?>") no-repeat center center !important;
        }
    <?php } else { ?>
        #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>, #tsvgParallaxColorBoxLoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
            background: url("<?php echo esc_url(plugins_url( '../Images/loading.gif', __FILE__ )); ?>") no-repeat center center !important;
        }
    <?php } ?>
    @media screen and (max-width: 410px) {
        :root{
            --tsvg_g_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:1;
        }
    }
</style>
<script type="text/javascript">
    let tsvgParallaxCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = function () {
        if( typeof(jQuery) != "undefined" && jQuery != null  ){
            (function (t, e, i) {
                function o(i, o, n) {
                    var r = e.createElement(i);
                    return o && (r.id = Z + o), n && (r.style.cssText = n), t(r)
                }
                function n() {
                    return i.innerHeight ? i.innerHeight : t(i).height()
                }
                function r(e, i) {
                    i !== Object(i) && (i = {}), this.cache = {}, this.el = e, this.get = function (e) {
                        var o, n;
                        return void 0 !== this.cache[e] ? n = this.cache[e] : (o = t(this.el).attr("data-cbox-" + e), void 0 !== o ? n = o : void 0 !== i[e] ? n = i[e] : void 0 !== X[e] && (n = X[e]), this.cache[e] = n), t.isFunction(n) ? n.call(this.el) : n
                    }
                }
                function h(t) {
                    var e = E.length, i = (z + t) % e;
                    return 0 > i ? e + i : i
                }
                function s(t, e) {
                    return Math.round((/%/.test(t) ? ("x" === e ? W.width() : n()) / 100 : 1) * parseInt(t, 10))
                }
                function a(t, e) {
                    return t.get("photo") || t.get("photoRegex").test(e)
                }
                function l(t, e) {
                    return t.get("retinaUrl") && i.devicePixelRatio > 1 ? e.replace(t.get("photoRegex"), t.get("retinaSuffix")) : e
                }
                function d(t) {
                    "contains" in x[0] && !x[0].contains(t.target) && (t.stopPropagation(), x.focus())
                }
                function c(t) {
                    c.str !== t && (x.add(v).removeClass(c.str).addClass(t), c.str = t)
                }
                function g() {
                    z = 0, rel && "nofollow" !== rel ? (E = t("." + te).filter(function () {
                        var e = t.data(this, Y), i = new r(this, e);
                        return i.get("rel") === rel
                    }), z = E.index(_.el), -1 === z && (E = E.add(_.el), z = E.length - 1)) : E = t(_.el)
                }
                function u(i) {
                    t(e).trigger(i), se.triggerHandler(i)
                }
                function f(i) {
                    var n;
                    jQuery("#tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?>,#tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?>,#tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?>").removeAttr('class');
                    jQuery("#tsvgParallaxColorBoxClose<?php echo esc_attr( $tsvg_shortcode_id ); ?>").addClass(jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-close'));
                    jQuery("#tsvgParallaxColorBoxNext<?php echo esc_attr( $tsvg_shortcode_id ); ?>").addClass(jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-next'));
                    jQuery("#tsvgParallaxColorBoxPrevious<?php echo esc_attr( $tsvg_shortcode_id ); ?>").addClass(jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-prev'));
                    G || (n = t(i).data("tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), _ = new r(i, n), rel = _.get("rel"), g(), $ || ($ = q = !0, c(_.get("className")), x.css({
                        visibility: "hidden", display: "block"
                    }), L = o(ae, "LoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?>", "width:0; height:0; overflow:hidden; visibility:hidden"), b.css({
                        width: "", height: ""
                    }).append(L), D = T.height() + k.height() + b.outerHeight(!0) - b.height(), j = C.width() + H.width() + b.outerWidth(!0) - b.width(), A = L.outerHeight(!0), N = L.outerWidth(!0), _.w = s(_.get("initialWidth"), "x"), _.h = s(_.get("initialHeight"), "y"), L.css({
                        width: "", height: _.h
                    }), J.position(), u(ee), _.get("onOpen"), O.add(R).hide(), x.focus(), _.get("trapFocus") && e.addEventListener && (e.addEventListener("focus", d, !0), se.one(re, function () {
                        e.removeEventListener("focus", d, !0)
                    })), _.get("returnFocus") && se.one(re, function () {
                        t(_.el).focus()
                    })), v.css({
                        opacity: parseFloat(_.get("opacity")), cursor: _.get("overlayClose") ? "pointer" : "auto", visibility: "visible"
                    }).show(), _.get("closeButton") ? B.html(_.get("close")).appendTo(b) : B.appendTo("<div/>"), w())
                }
                function p() {
                    !x && e.body && (V = !1, W = t(i), x = o(ae).attr({
                        id: Y, "class": t.support.opacity === !1 ? Z + "IE" : "", role: "dialog", tabindex: "-1"
                    }).hide(), v = o(ae, "Overlay<?php echo esc_attr( $tsvg_shortcode_id ); ?>").hide(), M = t([o(ae, "LoadingOverlay<?php echo esc_attr( $tsvg_shortcode_id ); ?>")[0], o(ae, "LoadingGraphic<?php echo esc_attr( $tsvg_shortcode_id ); ?>")[0]]), y = o(ae, "Wrapper<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), b = o(ae, "Content<?php echo esc_attr( $tsvg_shortcode_id ); ?>").append(R = o(ae, "Title<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), F = o(ae, "Current"), P = t('<i class="' + jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-prev') + '" />').attr({ id: Z + "Previous<?php echo esc_attr( $tsvg_shortcode_id ); ?>" }), K = t('<i class="' + jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-next') + '"/>').attr({ id: Z + "Next<?php echo esc_attr( $tsvg_shortcode_id ); ?>" }), I = o("button", "Slideshow<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), M), B = t('<i class="' + jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-close') + '"/>').attr({ id: Z + "Close<?php echo esc_attr( $tsvg_shortcode_id ); ?>" }), y.append(o(ae).append(o(ae, "TopLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), T = o(ae, "TopCenter<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), o(ae, "TopRight<?php echo esc_attr( $tsvg_shortcode_id ); ?>")), o(ae, !1, "clear:left").append(C = o(ae, "MiddleLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), b, H = o(ae, "MiddleRight<?php echo esc_attr( $tsvg_shortcode_id ); ?>")), o(ae, !1, "clear:left").append(o(ae, "BottomLeft<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), k = o(ae, "BottomCenter<?php echo esc_attr( $tsvg_shortcode_id ); ?>"), o(ae, "BottomRight<?php echo esc_attr( $tsvg_shortcode_id ); ?>"))).find("div div").css({ "float": "left" }), S = o(ae, !1, "position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"), O = K.add(P).add(F).add(I), t(e.body).append(v, x.append(y, S)))
                }
                function m() {
                    function i(t) {
                        t.which > 1 || t.shiftKey || t.altKey || t.metaKey || t.ctrlKey || (t.preventDefault(), f(this))
                    }
                    return x ? (V || (V = !0, K.click(function () {
                        J.next()
                    }), P.click(function () {
                        J.prev()
                    }), B.click(function () {
                        J.close()
                    }), v.click(function () {
                        _.get("overlayClose") && J.close()
                    }), t(e).bind("keydown." + Z, function (t) {
                        var e = t.keyCode;
                        $ && _.get("escKey") && 27 === e && (t.preventDefault(), J.close()), $ && _.get("arrowKey") && E[1] && !t.altKey && (37 === e ? (t.preventDefault(), P.click()) : 39 === e && (t.preventDefault(), K.click()))
                    }), t.isFunction(t.fn.on) ? t(e).on("click." + Z, "." + te, i) : t("." + te).on("click." + Z, i)), !0) : !1
                }
                function w() {
                    var n, r, h, d = J.prep, c = ++le;
                    q = !0, U = !1, u(he), u(ie), _.get("onLoad"), _.h = _.get("height") ? s(_.get("height"), "y") - A - D : _.get("innerHeight") && s(_.get("innerHeight"), "y"), _.w = _.get("width") ? s(_.get("width"), "x") - N - j : _.get("innerWidth") && s(_.get("innerWidth"), "x"), _.mw = _.w, _.mh = _.h, _.get("maxWidth") && (_.mw = s(_.get("maxWidth"), "x") - N - j, _.mw = _.w && _.mw > _.w ? _.w : _.mw), _.get("maxHeight") && (_.mh = s(_.get("maxHeight"), "y") - A - D, _.mh = _.h && _.mh > _.h ? _.h : _.mh), n = _.get("href"), Q = setTimeout(function () {
                        M.show()
                    }, 100), _.get("inline") ? (h = o(ae).hide().insertBefore(t(n)[0]), se.one(he, function () {
                        h.replaceWith(L.children())
                    }), d(t(n))) : _.get("iframe") ? d(" ") : _.get("html") ? d(_.get("html")) : a(_, n) ? (n = l(_, n), U = e.createElement("img"), t(U).addClass(Z + "Photo<?php echo esc_attr( $tsvg_shortcode_id ); ?>").bind("error", function () {
                        d(o(ae, "Error").html(_.get("imgError")))
                    }).one("load", function () {
                        var e;
                        c === le && (t.each(["alt", "longdesc", "aria-describedby"], function (e, i) {
                            var o = t(_.el).attr(i) || t(_.el).attr("data-" + i);
                            o && U.setAttribute(i, o)
                        }), _.get("retinaImage") && i.devicePixelRatio > 1 && (U.height = U.height / i.devicePixelRatio, U.width = U.width / i.devicePixelRatio), _.get("scalePhotos") && (r = function () {
                            U.height -= U.height * e, U.width -= U.width * e
                        }, _.mw && U.width > _.mw && (e = (U.width - _.mw) / U.width, r()), _.mh && U.height > _.mh && (e = (U.height - _.mh) / U.height, r())), _.h && (U.style.marginTop = Math.max(_.mh - U.height, 0) / 2 + "px"), E[1] && (_.get("loop") || E[z + 1]) && (U.style.cursor = "pointer", U.onclick = function () {
                            J.next()
                        }), U.style.width = U.width + "px", U.style.height = U.height + "px", setTimeout(function () {
                            d(U)
                        }, 1))
                    }), setTimeout(function () {
                        U.src = n
                    }, 1)) : n && S.load(n, _.get("data"), function (e, i) {
                        c === le && d("error" === i ? o(ae, "Error").html(_.get("xhrError")) : t(this).contents())
                    })
                }
                var v, x, y, b, T, C, H, k, E, W, L, S, M, R, F, I, K, P, B, O, _, D, j, A, N, z, U, $, q, G, Q, J, V, X = {
                    html: !1,
                    photo: !1,
                    iframe: !1,
                    inline: !1,
                    transition: "elastic",
                    speed: 300,
                    fadeOut: 300,
                    width: !1,
                    initialWidth: "60",
                    innerWidth: !1,
                    maxWidth: !1,
                    height: !1,
                    initialHeight: "45",
                    innerHeight: !1,
                    maxHeight: !1,
                    scalePhotos: !0,
                    scrolling: !0,
                    opacity: .9,
                    preloading: !0,
                    className: !1,
                    overlayClose: !0,
                    escKey: !0,
                    arrowKey: !0,
                    top: !1,
                    bottom: !1,
                    left: !1,
                    right: !1,
                    fixed: !1,
                    data: void 0,
                    closeButton: !0,
                    fastIframe: !0,
                    open: !1,
                    reposition: !0,
                    loop: !0,
                    slideshow: !1,
                    slideshowAuto: !1,
                    slideshowSpeed: 2500,
                    slideshowStart: "start slideshow",
                    slideshowStop: "stop slideshow",
                    photoRegex: /\.(ashx|gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,
                    retinaImage: !1,
                    retinaUrl: !1,
                    retinaSuffix: "@2x.$1",
                    current: "{current}/{total}",
                    previous: "",
                    next: "",
                    close: "",
                    xhrError: "This content failed to load.",
                    imgError: "This image failed to load.",
                    returnFocus: !0,
                    trapFocus: !0,
                    onOpen: !1,
                    onLoad: !1,
                    onComplete: !1,
                    onCleanup: !1,
                    onClosed: !1,
                    rel: function () {
                        return this.rel
                    },
                    href: function () {
                        let isAutoplay<?php echo esc_attr( $tsvg_shortcode_id ); ?> = jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-autoplay'),
                            url = t(this).attr("data-href");
                        if(url.indexOf('shorts') > -1){
                            url = url.replace('shorts','embed');
                        }
                        if(isAutoplay<?php echo esc_attr( $tsvg_shortcode_id ); ?> == 'true' && url.indexOf('vimeo') > -1){
                            url = url += "?autoplay=1&muted=1";
                        } else if (isAutoplay<?php echo esc_attr( $tsvg_shortcode_id ); ?> == 'true' && url.indexOf('youtube') > -1){
                            url = url += "?autoplay=1&mute=1";
                        }
                        return url;
                    },
                    title: function () {
                        return t(this).attr("data-name")
                    }
                }, Y = "tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>", Z = "tsvgParallaxColorBox", te = Z + "Element<?php echo esc_attr( $tsvg_shortcode_id ); ?>", ee = Z + "_open", ie = Z + "_load", oe = Z + "_complete", ne = Z + "_cleanup", re = Z + "_closed", he = Z + "_purge", se = t("<a/>"), ae = "div", le = 0, de = {}, ce = function () {
                    function t() {
                        clearTimeout(h)
                    }
                    function e() {
                        (_.get("loop") || E[z + 1]) && (t(), h = setTimeout(J.next, _.get("slideshowSpeed")))
                    }
                    function i() {
                        I.html(_.get("slideshowStop")).unbind(a).one(a, o), se.bind(oe, e).bind(ie, t), x.removeClass(s + "off").addClass(s + "on")
                    }
                    function o() {
                        t(), se.unbind(oe, e).unbind(ie, t), I.html(_.get("slideshowStart")).unbind(a).one(a, function () {
                            J.next(), i()
                        }), x.removeClass(s + "on").addClass(s + "off")
                    }
                    function n() {
                        r = !1, I.hide(), t(), se.unbind(oe, e).unbind(ie, t), x.removeClass(s + "off " + s + "on")
                    }
                    var r, h, s = Z + "Slideshow<?php echo esc_attr( $tsvg_shortcode_id ); ?>_", a = "click." + Z;
                    return function () {
                        r ? _.get("slideshow") || (se.unbind(ne, n), n()) : _.get("slideshow") && E[1] && (r = !0, se.one(ne, n), _.get("slideshowAuto") ? i() : o(), I.show())
                    }
                }();
                t.tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?> || (t(p), J = t.fn[Y] = t[Y] = function (e, i) {
                    var o, n = this;
                    if (e = e || {}, t.isFunction(n)) n = t("<a/>"), e.open = !0; else if (!n[0]) return n;
                    return n[0] ? (p(), m() && (i && (e.onComplete = i), n.each(function () {
                        var i = t.data(this, Y) || {};
                        t.data(this, Y, t.extend(i, e))
                    }).addClass(te), o = new r(n[0], e), o.get("open") && f(n[0])), n) : n
                }, J.position = function (e, i) {
                    function o() {
                        T[0].style.width = k[0].style.width = b[0].style.width = parseInt(x[0].style.width, 10) - j + "px", b[0].style.height = C[0].style.height = H[0].style.height = parseInt(x[0].style.height, 10) - D + "px"
                    }
                    var r, h, a, l = 0, d = 0, c = x.offset();
                    let src_url, url_heigth;
                    url_heigth = Math.round(jQuery(window).width() * 0.7 / 16 * 9);
                    if (_.get("href")) {
                        src_url = _.get("href");
                        url_heigth = Math.round(jQuery(window).width() * 0.7 / 16 * 9);
                    }
                    if (W.unbind("resize." + Z), x.css({
                        top: -9e4, left: -9e4
                    }), h = W.scrollTop(), a = W.scrollLeft(), _.get("fixed") ? (c.top -= h, c.left -= a, x.css({ position: "fixed" })) : (l = h, d = a, x.css({ position: "fixed" })), d += _.get("right") !== !1 ? Math.max(W.width() - _.w - N - j - s(_.get("right"), "x"), 0) : _.get("left") !== !1 ? s(_.get("left"), "x") : Math.round(Math.max(W.width() - _.w - N - j, 0) / 2), l += _.get("bottom") !== !1 ? Math.max(n() - _.h - A - D - s(_.get("bottom"), "y"), 0) : _.get("top") !== !1 ? s(_.get("top"), "y") : Math.round(Math.max(n() - _.h - A - D, 0) / 2), x.css({
                        top: c.top, left: c.left, visibility: "visible"
                    }), y[0].style.width = y[0].style.height = "9999px", r = {
                        width: _.w + N + j, height: _.h + A + D > 150 ? url_heigth : 0, top: (jQuery(window).height() - Math.round(jQuery(window).width() * 0.7 / 16 * 9)) / 2, left: d
                    }, e) {
                        var g = 0;
                        t.each(r, function (t) {
                            return r[t] !== de[t] ? (g = e, void 0) : void 0
                        }), e = g
                    }
                    de = r, e || x.css(r), x.dequeue().animate(r, {
                        duration: e || 0, complete: function () {
                            o(), q = !1, y[0].style.width = _.w + N + j + "px", y[0].style.height = _.h + A + D + "px", _.get("reposition") && setTimeout(function () {
                                W.bind("resize." + Z, J.position)
                            }, 1), i && i()
                        }, step: o
                    })
                }, J.resize = function (t) {
                    var e;
                    $ && (t = t || {}, t.width && (_.w = s(t.width, "x") - N - j), t.innerWidth && (_.w = s(t.innerWidth, "x")), L.css({ width: _.w }), t.height && (_.h = s(t.height, "y") - A - D), t.innerHeight && (_.h = s(t.innerHeight, "y")), t.innerHeight || t.height || (e = L.scrollTop(), L.css({ height: "auto" }), _.h = L.height()), L.css({ height: _.h }), e && L.scrollTop(e), J.position("none" === _.get("transition") ? 0 : _.get("speed")))
                }, J.prep = function (i) {
                    function n() {
                        return _.w = _.w || L.width(), _.w = _.mw && _.w > _.mw ? _.mw : _.w, _.w
                    }
                    function s() {
                        return _.h = _.h || L.height(), _.h = _.mh && _.h > _.mh ? _.mh : _.h, _.h
                    }
                    if ($) {
                        var d, g = "none" === _.get("transition") ? 0 : _.get("speed");
                        L.remove(), L = o(ae, "LoadedContent<?php echo esc_attr( $tsvg_shortcode_id ); ?>").append(i), L.hide().appendTo(S.show()).css({
                            width: '100%', position: 'relative', overflow: _.get("scrolling") ? "auto" : "hidden"
                        }).css({ height: '100%' }).prependTo(b), S.hide(), t(U).css({ "float": "none" }), c(_.get("className")), d = function () {
                            function i() {
                                t.support.opacity === !1 && x[0].style.removeAttribute("filter")
                            }
                            var o, n, s = E.length;
                            $ && (n = function ( tsvgIsMP4 = false ) {
                                if (tsvgIsMP4 === true) {
                                    o = e.createElement("video"), so = e.createElement("source"),t(so).attr({src : _.get("href")}).appendTo(o),  t(o).attr({
                                        autoplay : jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-autoplay')  == 'true' ,controls : "", controlslist : "nodownload", name: (new Date).getTime(), "class": Z + "Iframe<?php echo esc_attr( $tsvg_shortcode_id ); ?>"
                                    }).one("load", n).appendTo(L), se.one(he, function () {
                                        so.src = "//about:blank"
                                    }), t(o).trigger("load")
                                }
                                clearTimeout(Q), M.hide(), u(oe), _.get("onComplete")
                            }, R.html(_.get("title")).show(), L.show(), s > 1 ? ("string" == typeof _.get("current") && F.html(_.get("current").replace("{current}", z + 1).replace("{total}", s)).show(), K[_.get("loop") || s - 1 > z ? "show" : "hide"]().html(_.get("next")), P[_.get("loop") || z ? "show" : "hide"]().html(_.get("previous")), ce(), _.get("preloading") && t.each([h(-1), h(1)], function () {
                                var i, o = E[this], n = new r(o, t.data(o, Y)), h = n.get("href");
                                h && a(n, h) && (h = l(n, h), i = e.createElement("img"), i.src = h)
                            })) : O.hide(), _.get("iframe")  && _.get("href").indexOf('.mp4') == -1 ? (
                                o = e.createElement("iframe"), "frameBorder" in o && (o.frameBorder = 0), "allowTransparency" in o && (o.allowTransparency = "true"), _.get("scrolling") || (o.scrolling = "no"), _.get("href").indexOf('rumble.com/') != -1 ? t(o).attr('sandbox','allow-scripts') : t(o).removeAttr('sandbox'), t(o).attr({
                                    src: _.get("href"), name: (new Date).getTime(), "class": Z + "Iframe<?php echo esc_attr( $tsvg_shortcode_id ); ?>", allowFullScreen: !0 
                                }).one("load", n).appendTo(L), _.get("href").indexOf('rumble.com/') != -1 ? t(o).attr('sandbox','allow-scripts') : t(o).removeAttr('sandbox'), se.one(he, function () {
                                    o.src = "//about:blank"
                                }), _.get("fastIframe") && t(o).trigger("load")
                            ) : n( true ), "fade" === _.get("transition") ? x.fadeTo(g, 1, i) : i())
                        }, "fade" === _.get("transition") ? x.fadeTo(g, 0, function () {
                            J.position(0, d)
                        }) : J.position(g, d)
                    }
                }, J.next = function () {
                    !q && E[1] && (_.get("loop") || E[z + 1]) && (z = h(1), f(E[z]))
                }, J.prev = function () {
                    !q && E[1] && (_.get("loop") || z) && (z = h(-1), f(E[z]))
                }, J.close = function () {
                    $ && !G && (G = !0, $ = !1, u(ne), _.get("onCleanup"), W.unbind("." + Z), v.fadeTo(_.get("fadeOut") || 0, 0), x.stop().fadeTo(_.get("fadeOut") || 0, 0, function () {
                        x.add(v).css({ opacity: 1, cursor: "auto" }).hide(), u(he), L.remove(), setTimeout(function () {
                            G = !1, u(re), _.get("onClosed")
                        }, 1)
                    }))
                }, J.remove = function () {
                    x && (x.stop(), t.tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>.close(), x.stop().remove(), v.remove(), G = !1, x = null, t("." + te).removeData(Y).removeClass(te), t(e).unbind("click." + Z))
                }, J.element = function () {
                    return t(_.el)
                }, J.settings = X)
            })(jQuery, document, window);
            !function (window, document, $, undefined) {
                $.tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?> = function (elem, options) {
                    var defaults = {
                        useCSS: true, initialIndexOnArray: 0, hideBarsDelay: 3e3, videoMaxWidth: 62, vimeoColor: "CCCCCC", beforeOpen: null, afterClose: null
                    }, plugin = this, elements = [], elem = elem, selector = elem, $selector = $(selector), isTouch = document.createTouch !== undefined || "ontouchstart" in window || "onmsgesturechange" in window || navigator.msMaxTouchPoints, supportSVG = !!window.SVGSVGElement, winWidth = window.innerWidth ? window.innerWidth : $(window).width(), winHeight = window.innerHeight ? window.innerHeight : $(window).height(),
                        html = '<div id="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay"><div id="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider"></div><div id="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption"></div><div id="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action"><i id="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close" class="' + jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-close') + '"></i><i id="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev" class="' + jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-prev') + '"></i><i id="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next" class="' + jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-next') + '"></i></div></div>';
                    plugin.settings = {};
                    plugin.init = function () {
                        plugin.settings = $.extend({}, defaults, options);
                        if ($.isArray(elem)) {
                            elements = elem;
                            ui.target = $(window);
                            ui.init(plugin.settings.initialIndexOnArray)
                        }
                        else {
                            $selector.click(function (e) {
                                elements = [];
                                var index, relType, relVal;
                                if (!relVal) {
                                    relType = "rel";
                                    relVal = $(this).attr(relType)
                                }
                                if (relVal && relVal !== "" && relVal !== "nofollow") {
                                    $elem = $selector.filter("[" + relType + '="' + relVal + '"]')
                                }
                                else {
                                    $elem = $(selector)
                                }
                                $elem.each(function () {
                                    var title = null, href = null;
                                    if ($(this).attr("data-name")) title = $(this).attr("data-name");
                                    if ($(this).attr("data-href")) href = $(this).attr("data-href");
                                    elements.push({ href: href, title: title })
                                });
                                index = $elem.index($(this));
                                e.preventDefault();
                                e.stopPropagation();
                                ui.target = $(e.target);
                                ui.init(index)
                            })
                        }
                    };
                    plugin.refresh = function () {
                        if (!$.isArray(elem)) {
                            ui.destroy();
                            $elem = $(selector);
                            ui.actions()
                        }
                    };
                    var ui = {
                        init: function (index) {
                            if (plugin.settings.beforeOpen) plugin.settings.beforeOpen();
                            this.target.trigger("tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-start");
                            $.tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>.isOpen = true;
                            this.build();
                            this.openSlide(index);
                            this.openMedia(index);
                            this.preloadMedia(index + 1);
                            this.preloadMedia(index - 1)
                        }, build: function () {
                            var $this = this;
                            $("body").append(html);
                            jQuery("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next,#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev,#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close").removeAttr('class');
                            jQuery("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close").addClass(jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-close'));
                            jQuery("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next").addClass(jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-next'));
                            jQuery("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev").addClass(jQuery(".tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").attr('data-item-prev'));
                            if ($this.doCssTrans()) {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").css({
                                    "-webkit-transition": "left 0.4s ease", "-moz-transition": "left 0.4s ease", "-o-transition": "left 0.4s ease", "-khtml-transition": "left 0.4s ease", transition: "left 0.4s ease"
                                });
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay").css({
                                    "-webkit-transition": "opacity 1s ease", "-moz-transition": "opacity 1s ease", "-o-transition": "opacity 1s ease", "-khtml-transition": "opacity 1s ease", transition: "opacity 1s ease"
                                });
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption").css({
                                    "-webkit-transition": "0.5s", "-moz-transition": "0.5s", "-o-transition": "0.5s", "-khtml-transition": "0.5s", transition: "0.5s"
                                })
                            }
                            if (supportSVG) {
                                var bg = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close").css("background-image");
                                bg = bg.replace("png", "svg");
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev,#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next,#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close").css({ "background-image": bg })
                            }
                            $.each(elements, function () {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").append('<div class="tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>"></div>')
                            });
                            $this.setDim();
                            $this.actions();
                            $this.keyboard();
                            $this.gesture();
                            $this.animBars();
                            $this.resize()
                        }, setDim: function () {
                            var width, height, sliderCss = {};
                            if ("onorientationchange" in window) {
                                window.addEventListener("orientationchange", function () {
                                    if (window.orientation == 0) {
                                        width = winWidth;
                                        height = winHeight
                                    }
                                    else if (window.orientation == 90 || window.orientation == -90) {
                                        width = winHeight;
                                        height = winWidth
                                    }
                                }, false)
                            }
                            else {
                                width = window.innerWidth ? window.innerWidth : $(window).width();
                                height = window.innerHeight ? window.innerHeight : $(window).height()
                            }
                            sliderCss = { width: width, height: height };
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay").css(sliderCss)
                        }, resize: function () {
                            var $this = this;
                            $(window).resize(function () {
                                $this.setDim()
                            }).resize()
                        }, supportTransition: function () {
                            var prefixes = "transition WebkitTransition MozTransition OTransition msTransition KhtmlTransition".split(" ");
                            for (var i = 0; prefixes.length > i; i++) {
                                if (document.createElement("div").style[prefixes[i]] !== undefined) {
                                    return prefixes[i]
                                }
                            }
                            return false
                        }, doCssTrans: function () {
                            if (plugin.settings.useCSS && this.supportTransition()) {
                                return true
                            }
                        }, gesture: function () {
                            if (isTouch) {
                                var $this = this, distance = null, swipMinDistance = 10, startCoords = {}, endCoords = {};
                                var bars = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action");
                                bars.addClass("tsvg-parallax-visible-bars");
                                $this.setTimeout();
                                $("body").bind("touchstart", function (e) {
                                    $(this).addClass("touching");
                                    endCoords = e.originalEvent.targetTouches[0];
                                    startCoords.pageX = e.originalEvent.targetTouches[0].pageX;
                                    $(".touching").bind("touchmove", function (e) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        endCoords = e.originalEvent.targetTouches[0]
                                    });
                                    return false
                                }).bind("touchend", function (e) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                    distance = endCoords.pageX - startCoords.pageX;
                                    if (distance >= swipMinDistance) {
                                        $this.getPrev()
                                    }
                                    else if (distance <= -swipMinDistance) {
                                        $this.getNext()
                                    }
                                    else {
                                        if (!bars.hasClass("tsvg-parallax-visible-bars")) {
                                            $this.showBars();
                                            $this.setTimeout()
                                        }
                                        else {
                                            $this.clearTimeout();
                                            $this.hideBars()
                                        }
                                    }
                                    $(".touching").off("touchmove").removeClass("touching")
                                })
                            }
                        }, setTimeout: function () {
                            if (plugin.settings.hideBarsDelay > 0) {
                                var $this = this;
                                $this.clearTimeout();
                                $this.timeout = window.setTimeout(function () {
                                    $this.hideBars()
                                }, plugin.settings.hideBarsDelay)
                            }
                        }, clearTimeout: function () {
                            window.clearTimeout(this.timeout);
                            this.timeout = null
                        }, showBars: function () {
                            var bars = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action");
                            if (this.doCssTrans()) {
                                bars.addClass("tsvg-parallax-visible-bars");
                                var current = jQuery('div.tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>.current');
                                var x = jQuery(current[0].children[0].children[0]);
                                x[0].children[0].controls = true;
                            }
                            else {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption").animate({ top: 0 }, 500);
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action").animate({ bottom: 0 }, 500);
                                setTimeout(function () {
                                    bars.addClass("tsvg-parallax-visible-bars")
                                }, 1e3)
                            }
                        }, hideBars: function () {
                            var bars = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action");
                            if (this.doCssTrans()) {
                                bars.removeClass("tsvg-parallax-visible-bars")
                            }
                            else {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption").animate({ top: "-50px" }, 500);
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action").animate({ bottom: "-50px" }, 500);
                                setTimeout(function () {
                                    bars.removeClass("tsvg-parallax-visible-bars")
                                }, 1e3)
                            }
                        }, animBars: function () {
                            var $this = this;
                            var bars = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action");
                            bars.addClass("tsvg-parallax-visible-bars");
                            $this.setTimeout();
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").click(function (e) {
                                if (!bars.hasClass("tsvg-parallax-visible-bars")) {
                                    $this.showBars();
                                    $this.setTimeout()
                                }
                            });
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-action").hover(function () {
                                $this.showBars();
                                bars.addClass("tsvg-parallax-force-visible-bars");
                                $this.clearTimeout()
                            }, function () {
                                bars.removeClass("tsvg-parallax-force-visible-bars");
                                $this.setTimeout()
                            })
                        }, keyboard: function () {
                            var $this = this;
                            $(window).bind("keyup", function (e) {
                                e.preventDefault();
                                e.stopPropagation();
                                if (e.keyCode == 37) {
                                    $this.getPrev()
                                }
                                else if (e.keyCode == 39) {
                                    $this.getNext()
                                }
                                else if (e.keyCode == 27) {
                                    $this.closeSlide()
                                }
                            })
                        }, actions: function () {
                            var $this = this;
                            if (2 > elements.length2) {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next").hide()
                            }
                            else {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev").bind("click touchend", function (e) {
                                    var iframes = jQuery('.tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe');
                                    jQuery(iframes).each(function (i, el) {
                                        var src = jQuery(el).attr('src');
                                        jQuery(el).attr('src', src);
                                    });
                                    e.preventDefault();
                                    e.stopPropagation();
                                    $this.getPrev();
                                    $this.setTimeout()
                                });
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next").bind("click touchend", function (e) {
                                    var iframes = jQuery('.tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>').find('iframe');
                                    jQuery(iframes).each(function (i, el) {
                                        var src = jQuery(el).attr('src');
                                        jQuery(el).attr('src', src);
                                    });
                                    e.preventDefault();
                                    e.stopPropagation();
                                    $this.getNext();
                                    $this.setTimeout()
                                })
                            }
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-close").bind("click touchend", function (e) {
                                $this.closeSlide()
                            })
                        }, setSlide: function (index,prevIndex,isFirst) {
                            isFirst = isFirst || false;
                            var videoSlide = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>").eq(prevIndex);
                            var iframePlayer = videoSlide.find('iframe').get(0);
                            var mp4Player = videoSlide.find('video').get(0);
                            if(iframePlayer){
                                videoSlide.find('iframe').attr("src",videoSlide.find('iframe').attr("src"));
                            }else if (mp4Player){ 
                                mp4Player.pause();
                                mp4Player.currentTime = 0;
                            }
                            var slider = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider");
                            if (this.doCssTrans()) {
                                slider.css({ left: -index * 100 + "%" })
                            }
                            else {
                                slider.animate({ left: -index * 100 + "%" })
                            }
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>").removeClass("current");
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>").eq(index).addClass("current");
                            this.setTitle(index);
                            if (isFirst) {
                                slider.fadeIn()
                            }
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev, #tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next").removeClass("disabled");
                            if (index == 0) {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-prev").addClass("disabled")
                            }
                            else if (index == elements.length - 1) {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-next").addClass("disabled")
                            }
                        }, openSlide: function (index) {
                            $("html").addClass("tsvg-paralax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>");
                            $(window).trigger("resize");
                            this.setSlide(index, 0 , true)
                        }, preloadMedia: function (index) {
                            var $this = this, src = null;
                            if (elements[index] !== undefined) {
                                src = elements[index].href;
                                var r = src.replace('embed/', 'watch?v=');
                            }
                            src = r;
                            if (!$this.isVideo(src)) {
                                setTimeout(function () {
                                    $this.openMedia(index)
                                }, 1e3)
                            }
                            else {
                                $this.openMedia(index)
                            }
                        }, openMedia: function (index) {
                            var $this = this, src = null;
                            if (elements[index] !== undefined && elements[index].href !== null) {
                                src = elements[index].href;
                                if(src.indexOf('shorts/') > -1 ){
                                    src = src.replace("shorts/", "watch?v=");
                                }
                                else if(src.indexOf('embed/') > -1 ){
                                    src = src.replace('embed/', 'watch?v=');
                                }
                            }
                            if (0 > index || index >= elements.length) {
                                return false
                            }
                            if (!$this.isVideo(src)) {
                                $this.loadMedia(src, function () {
                                    $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>").eq(index).html(this)
                                })
                            } else {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>").eq(index).html($this.getVideo(src))
                            }
                        }, setTitle: function (index, isFirst) {
                            var title = null;
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption").empty();
                            if (elements[index] !== undefined) title = elements[index].title;
                            if (title) {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-caption").append(title)
                            }
                        }, isVideo: function (src) {
                            if (src) {
                                if (src.match(/youtube\.com\/watch\?v=([a-zA-Z0-9\-_]+)/) || src.match(/vimeo\.com\/([0-9]*)/) || src.match(/wistia\.net\/([a-zA-Z0-9\-_]+)/) || src.indexOf('mp4') != -1 || src.indexOf('rumble.com/') != -1) {
                                    return true;
                                }
                            }
                        }, getVideo: function (url) {
                            var iframe = "";
                            var output = "";
                            var youtubeUrl = url.match(/watch\?v=([a-zA-Z0-9\-_]+)/);
                            var vimeoUrl = url.match(/vimeo\.com\/([0-9]*)/);
                            var wistiaUrl = url.match(/wistia\.net\/([a-zA-Z0-9\-_]+)/);
                            let url_heigth = Math.round(jQuery(window).width() * 0.7 / 16 * 9);
                            var tsvg_autoplay = jQuery('.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-tsvg-autoplay');
                            if (youtubeUrl) {
                                url_heigth = Math.round(jQuery(window).width() * 0.7 / 16 * 9);
                                var s = youtubeUrl.input.replace('watch?v=', 'embed/');
                                if (youtubeUrl.input.indexOf('start') === -1) {
                                    var url_end =  tsvg_autoplay == "true" ? '?autoplay=1&mute=1' : '?&rel=0;iv_load_policy=3';
                                    var url_yutub = 'https://www.youtube.com/embed/' + youtubeUrl[1] + url_end
                                    iframe = '<iframe width="560" height="315" src="' + url_yutub + '" frameborder="0" allowfullscreen></iframe>'
                                }else {
                                    iframe = '<iframe width="560" height="315" src="' + s + '&mute=0&enablejsapi=1&rel=0&;iv_load_policy=3" frameborder="0" allowfullscreen></iframe>'
                                }
                            }else if (url.indexOf("mp4") != -1) {
                                if (tsvg_autoplay == "true") {
                                    var iframe = '<video class="videos" style="width: 100.5% !important;height: 100.5% !important;position: absolute;top: 0;left: 0;background: #ffffff;" controls  controlslist="nodownload" name="media" autoplay ><source src="' + url + ' " type="video/mp4"></video>'
                                }else{
                                    var iframe = '<video class="videos" style="width: 100.5% !important;height: 100.5% !important;position: absolute;top: 0;left: 0;background: #ffffff;" controls controlslist="nodownload" name="media"><source src="' + url + ' " type="video/mp4"></video>'
                                }
                            }else if (vimeoUrl) {
                                if (tsvg_autoplay == "true") {
                                    var vim = vimeoUrl.input + '?autoplay=1&muted=1';
                                    var iframe = '<iframe width="560" height="315"  src="' + vim + "&amp;byline=0&amp;portrait=0&amp;color=" + plugin.settings.vimeoColor + '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
                                } else{
                                    var iframe = '<iframe width="560" height="315"  src="' + vimeoUrl.input + "?byline=0&amp;portrait=0&amp;color=" + plugin.settings.vimeoColor + '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
                                }
                            }
                            if (url.indexOf("wistia") != -1) {
                                wistiaUrl = wistiaUrl.input;
                                wistiaUrl = wistiaUrl.replace('watch?v=', 'embed/');
                                iframe = '<iframe width="560" height="315" src="' + wistiaUrl + '" allowtransparency="true" scrolling="no" frameborder="0" allowfullscreen></iframe>'
                            } else if(url.indexOf('rumble.com/') != -1) {
                                var regExp = url.split('rumble.com/');
                                var match = regExp[1];
                                tsvgRumbleUrl = 'https://rumble.com/' + match;
                                if (tsvgRumbleUrl.indexOf('watch?v=') > -1) {
                                    tsvgRumbleUrl = tsvgRumbleUrl.replace('watch?v=','embed/');
                                }
                                iframe = '<iframe width="560" height="315" src="' + tsvgRumbleUrl + '" allowtransparency="true" scrolling="no" frameborder="0" allowfullscreen sandbox="allow-scripts"></iframe>'
                            }
                            return '<div class="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video-container" style="max-width:' + plugin.settings.videoMaxWidth + '%"><div class="tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-video"   style="height:' + url_heigth + 'px; ">' + iframe + "</div></div>"
                        }, loadMedia: function (src, callback) {
                            if (!this.isVideo(src)) {
                                var img = $("<img>").on("load", function () {
                                    callback.call(img)
                                });
                                img.attr("src", src)
                            }
                        }, getNext: function () {
                            var $this = this;
                            index = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>").index($("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>.current"));
                            var prevIndex = index;
                            if (elements.length > index + 1) {
                                index++;
                                $this.setSlide(index,prevIndex);
                                $this.preloadMedia(index + 1)
                            }
                            else {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").addClass("tsvgRightSpring");
                                setTimeout(function () {
                                    $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").removeClass("tsvgRightSpring")
                                }, 500)
                            }
                        }, getPrev: function () {
                            index = $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>").index($("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider .tsvgParallaxEngineSlide<?php echo esc_attr( $tsvg_shortcode_id ); ?>.current"));
                            var prevIndex = index;
                            if (index > 0) {
                                index--;
                                this.setSlide(index,prevIndex);
                                this.preloadMedia(index - 1)
                            }
                            else {
                                $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").addClass("tsvgLeftSpring");
                                setTimeout(function () {
                                    $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").removeClass("tsvgLeftSpring")
                                }, 500)
                            }
                        }, closeSlide: function () {
                            $("html").removeClass("tsvg-paralax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>");
                            $(window).trigger("resize");
                            this.destroy()
                        }, destroy: function () {
                            $(window).unbind("keyup");
                            $("body").unbind("touchstart");
                            $("body").unbind("touchmove");
                            $("body").unbind("touchend");
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-slider").unbind();
                            $("#tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-overlay").remove();
                            if (!$.isArray(elem)) elem.removeData("_tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>");
                            if (this.target) this.target.trigger("tsvg-parallax-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>-destroy");
                            $.tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>.isOpen = false;
                            if (plugin.settings.afterClose) plugin.settings.afterClose()
                        }
                    };
                    plugin.init()
                };
                $.fn.tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?> = function (options) {
                    if (!$.data(this, "_tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>")) {
                        var tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?> = new $.tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>(this, options);
                        this.data("_tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>", tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>)
                    }
                    return this.data("_tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>");
                }
            }(window, document, jQuery);
            ;(function($){
                $(function(){
                    let tsvgParallaxPopupType<?php echo esc_attr( $tsvg_shortcode_id ); ?> = $('.tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-item-type'),
                        tsvgParallaxPopupTransition<?php echo esc_attr( $tsvg_shortcode_id ); ?> = $('.tsvg-parallax-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').attr('data-item-efect');
                    $(document).ready(function() {
                        $('.tsvg-section-<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>').fadeIn();
                        if(tsvgParallaxPopupType<?php echo esc_attr( $tsvg_shortcode_id ); ?> == 1) {
                            $('.tsvg-parallax-block-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>();
                        } else {
                            $('.tsvg-parallax-block-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>').tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>({
                                iframe: true, transition: tsvgParallaxPopupTransition<?php echo esc_attr( $tsvg_shortcode_id ); ?>, innerWidth: $(window).width() * 0.7, innerHeight: $(window).width() * 0.7 * 0.6, maxWidth: "80%", maxHeight: "80%", current: "", rel: 'slideshow', slideshow: false
                            });
                        }
                    });
                    <?php if ( $tsvg_edit === 'true' ) { ?>
                        window.tsvgParalaxEngine = function(setType,setTransition){
                            if (setType == 1) {
                                $(".tsvg-parallax-block-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").tsvgParallaxSwipeBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>();
                            } else {
                                $(".tsvg-parallax-block-swipebox-<?php echo esc_attr( $tsvg_shortcode_id ); ?>").tsvgColorBox<?php echo esc_attr( $tsvg_shortcode_id ); ?>(
                                    {
                                        iframe: true, transition: setTransition, innerWidth: $(window).width() * 0.7, innerHeight: $(window).width() * 0.7 * 0.6, maxWidth: "80%", maxHeight: "80%", current: "", rel: 'slideshow', slideshow: false
                                    }
                                );
                            }
                        }
                    <?php } ?>
                    $(document).on('mousemove', '.tsvg-parallax-block-<?php echo esc_attr($tsvg_shortcode_id); ?>',function (event) {
                        event=event || window.event
                        let tsvgImgEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?> = $(this).attr("data-tsvg-ef"),
                            tsvgTitleEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?> = $(this).find('.tsvg-parallax-block-title-effect').attr("data-tsvg-ef"),
                            tsvgLineEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?> = $(this).find('.mask').attr("data-tsvg-ef");
                        switch (tsvgLineEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?>) {
                            case "TotalSoft_HovLine1":
                                $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").css({
                                    "transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-webkit-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-ms-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-moz-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-o-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine1']").offset().left) / 10 - $(this).width() / 2)) + "px)"
                                })
                                break;
                            case "TotalSoft_HovLine5":
                                $(this).find("[data-tsvg-ef='TotalSoft_HovLine5']").css({
                                    "transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-webkit-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-ms-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-moz-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-o-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)"
                                })
                                break;
                            case "TotalSoft_HovLine8":
                                $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").css({
                                    "transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-webkit-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-ms-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-moz-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-o-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine8']").offset().left) / 10 - $(this).width() / 2)) + "px)"
                                })
                                break;
                            case "TotalSoft_HovLine9":
                                $(this).find("[data-tsvg-ef='TotalSoft_HovLine9']").css({
                                    "transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-webkit-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-ms-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-moz-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-o-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)"
                                })
                                break;
                            case "TotalSoft_HovLine10":
                                $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").css({
                                    "transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-webkit-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-ms-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-moz-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().left) / 10 - $(this).width() / 2)) + "px)",
                                    "-o-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().top) / 10 - $(this).height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_HovLine10']").offset().left) / 10 - $(this).width() / 2)) + "px)"
                                })
                                break;
                            case "TotalSoft_HovLine11":
                                $(this).find("[data-tsvg-ef='TotalSoft_HovLine11']").css({
                                    "transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-webkit-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-ms-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-moz-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)",
                                    "-o-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg) translateY(-50%) translateX(-50%)"
                                })
                                break;      
                            default:
                                break;
                        }
                        if(tsvgImgEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?>=="TotalSoft_H_Ef<?php echo esc_attr($tsvg_shortcode_id); ?>1") {
                            $(this).css({
                                "transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg)",
                                "-webkit-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg)",
                                "-ms-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg)",
                                "-moz-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg)",
                                "-o-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 15) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 15) + "deg)"
                            })
                        }else if(tsvgImgEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?>=="TotalSoft_H_Ef<?php echo esc_attr($tsvg_shortcode_id); ?>2") {
                            $(this).css({
                                "transform": "translateY(" + Math.floor(((event.pageY - $(this).offset().top - $(this).height() / 2) / 15)) + "px) translateX(" + Math.floor(((event.pageX - $(this).offset().left - $(this).width() / 2) / 15)) + "px)",
                                "-webkit-transform": "translateY(" + Math.floor(((event.pageY - $(this).offset().top - $(this).height() / 2) / 15)) + "px) translateX(" + Math.floor(((event.pageX - $(this).offset().left - $(this).width() / 2) / 15)) + "px)",
                                "-ms-transform": "translateY(" + Math.floor(((event.pageY - $(this).offset().top - $(this).height() / 2) / 15)) + "px) translateX(" + Math.floor(((event.pageX - $(this).offset().left - $(this).width() / 2) / 15)) + "px)",
                                "-moz-transform": "translateY(" + Math.floor(((event.pageY - $(this).offset().top - $(this).height() / 2) / 15)) + "px) translateX(" + Math.floor(((event.pageX - $(this).offset().left - $(this).width() / 2) / 15)) + "px)",
                                "-o-transform": "translateY(" + Math.floor(((event.pageY - $(this).offset().top - $(this).height() / 2) / 15)) + "px) translateX(" + Math.floor(((event.pageX - $(this).offset().left - $(this).width() / 2) / 15)) + "px)"
                            })
                        }
                        if(tsvgTitleEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?>=="TotalSoft_Title_Ef1") {
                            $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").css({
                                "transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().top) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().left) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").width() / 2)) + "px) translate3d(0, 0, 0)",
                                "-webkit-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().top) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().left) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").width() / 2)) + "px) translate3d(0, 0, 0)",
                                "-ms-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().top) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().left) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").width() / 2)) + "px) translate3d(0, 0, 0)",
                                "-moz-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().top) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().left) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").width() / 2)) + "px) translate3d(0, 0, 0)",
                                "-o-transform": "translateY(" + Math.floor(((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().top) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").height() / 2)) + "px) translateX(" + Math.floor(((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").offset().left) / 5 - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef1']").width() / 2)) + "px) translate3d(0, 0, 0)"
                            })
                        }else if(tsvgTitleEffect<?php echo esc_attr( $tsvg_shortcode_id ); ?>=="TotalSoft_Title_Ef4") {
                            $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef4']").css({
                                "transform": "rotateX(" + Math.floor((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef4']").offset().left - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef4']").width() / 2) / 10) + "deg) rotateY(" + Math.floor((event.pageY - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef4']").offset().top + $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef4']").height() / 2) / 10) + "deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)",
                                "-webkit-transform": "rotateX(" + Math.floor((event.pageX - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef4']").offset().left - $(this).find("[data-tsvg-ef='TotalSoft_Title_Ef4']").width() / 2) / 10) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 10) + "deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)",
                                "-ms-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 10) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 10) + "deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)",
                                "-moz-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 10) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 10) + "deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)",
                                "-o-transform": "rotateX(" + Math.floor((event.pageX - $(this).offset().left - $(this).width() / 2) / 10) + "deg) rotateY(" + Math.floor((event.pageY - $(this).offset().top + $(this).height() / 2) / 10) + "deg) translateY(-50%) translateX(-50%) translate3d(0, 0, 0)"
                            })
                        }
                    });
                });
            })(jQuery);
            clearInterval(tsvgParallaxInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
        }
    },
    tsvgParallaxInterval<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setInterval(tsvgParallaxCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 1000);
</script>
