<style type="text/css">
	section.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		margin-bottom:50px;
	}
	.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
		margin-right:unset !important;
		margin-left:unset !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		width: 100%!important;
		max-width: 100%!important;
		display:flex;
		flex-direction: column;
		height: auto;
		position: relative;
		padding: 0;
		margin: 0;
	}
	<?php if ($tsvg_theme_name != 'Grid Video Gallery') { ?>
		#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> main.tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> >figure> ul,
		#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> nav > ul {
			margin: 0;
			margin-left:calc(100% -  calc( var(--tsvg_general_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) * calc(calc(100% - var(--tsvg_general_place_between_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))  / var(--tsvg_general_img_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>))));
		}
	<?php } ?>
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > figure > ul{
		padding: unset !important;
	}
	.tsvg-pagination-pages > li{
		margin-bottom: 6px !important;
	}
	.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> a{
		text-decoration: none!important;
	}
	.TS_VGallery__Content *:not(.TS_VGallery_tsvg-section-<?php echo esc_attr($tsvg_shortcode_id); ?>-wrap *) {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		margin-left: auto;
		margin-right: auto;
		max-width: 100%;
	}
   	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  #TS_VGallery_pagination<?php echo esc_attr( $tsvg_shortcode_id ); ?> li {
		border: none !important;
		list-style: none !important;
		display: inline-block !important;
		padding: 0 !important
	}
	<?php if( $tsvg_old_user=='yes'){?>
		#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper li a {
			box-shadow:unset;
		}
	<?php } ?>
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='fadeIn'] >figure> ul>li{
		opacity: 0;
		animation: old-fadeIn 0.65s ease  0s forwards;
		-webkit-animation:  old-fadeIn 0.65s ease  0s forwards;
		-moz-animation:  old-fadeIn 0.65s ease  0s forwards;
		-webkit-transform: none !important;
		-moz-transform: none !important;
		transform: none !important;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='moveUp'] >figure> ul>li{
		opacity: 0;
		-webkit-transform: translateY(200px);
		-moz-transform: translateY(200px);
		transform: translateY(200px);
		animation: old-moveUp 0.65s ease  0s forwards;
		-webkit-animation: old-moveUp 0.65s ease  0s forwards;
		-moz-animation: old-moveUp 0.65s ease  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='scaleUp'] >figure> ul>li{
		opacity: 0;
		-webkit-transform: scale(0.6);
		-moz-transform: scale(0.6);
		transform: scale(0.6);
		animation: old-scaleUp 0.65s ease  0s forwards;
		-webkit-animation: old-scaleUp 0.65s ease  0s forwards;
		-moz-animation: old-scaleUp 0.65s ease  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='fallPerspective'] >figure> ul>li{
		opacity: 0;
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		transform-style: preserve-3d;
		-webkit-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
		-moz-transform: translateZ(400px) translateY(300px) rotateX(-90deg);
		transform: translateZ(400px) translateY(300px) rotateX(-90deg);
		animation:  0.8s ease-in-out 0.2s 1 normal forwards running  old-fallPerspectives;
		-webkit-animation:  0.8s ease-in-out 0.2s 1 normal forwards running  old-fallPerspective;
		-moz-animation:  0.8s ease-in-out 0.2s 1 normal forwards running  old-fallPerspective;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='fly'] >figure> ul>li{
		opacity: 0;
		-webkit-transform-style: preserve-3d!important;
		-moz-transform-style: preserve-3d!important;
		transform-style: preserve-3d!important;
		-webkit-transform-origin: 50% 50% -300px!important;
		-moz-transform-origin: 50% 50% -300px!important;
		transform-origin: 50% 50% -300px!important;
		-webkit-transform: rotateX(-180deg);
		-moz-transform: rotateX(-180deg);
		transform: rotateX(-180deg);
		animation: old-fly 0.8s ease  0s forwards;
		-webkit-animation: old-fly 0.8s ease  0s forwards;
		-moz-animation: old-fly 0.8s ease  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='flip'] >figure> ul>li{
		opacity: 0;
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		transform-style: preserve-3d;
		-webkit-transform-origin: 0% 0%;
		-moz-transform-origin: 0% 0%;
		transform-origin: 0% 0%;
		-webkit-transform: rotateX(-80deg);
		-moz-transform: rotateX(-80deg);
		transform: rotateX(-80deg);
		animation: old-flip 0.8s ease  0s forwards;
		-webkit-animation: old-flip 0.8s ease  0s forwards;
		-moz-animation: old-flip 0.8s ease  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='helix'] >figure> ul>li{
		opacity: 0;
		-webkit-transform-style: preserve-3d;
		-moz-transform-style: preserve-3d;
		transform-style: preserve-3d;
		-webkit-transform: rotateY(-180deg);
		-moz-transform: rotateY(-180deg);
		transform: rotateY(-180deg);
		animation: old-helix 0.8s ease  0s forwards;
		-webkit-animation: old-helix 0.8s ease  0s forwards;
		-moz-animation: old-helix 0.8s ease  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='popUp'] >figure> ul>li{
		opacity: 0;
		-moz-transform-style: preserve-3d;
		transform-style: preserve-3d;
		-webkit-transform: scale(0.4);
		-moz-transform: scale(0.4);
		transform: scale(0.4);
		animation: old-popUp 0.8s ease  0s forwards;
		-webkit-animation: old-popUp 0.8s ease  0s forwards;
		-moz-animation: old-popUp 0.8s ease  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='animno'] >figure> ul>li{
		display: block;
		opacity: 0;
		animation: animno 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
		-webkit-animation: animno 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
		-moz-animation: animno 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='animsc'] >figure> ul>li{
		display: block;
		opacity: 0;
		animation: animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
		-webkit-animation: animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
		-moz-animation: animsc 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
	}
	#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm='animtr'] >figure> ul>li{
		display: block;
		opacity: 0;
		animation: animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
		-webkit-animation: animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
		-moz-animation: animtr 3s cubic-bezier(0.77, 0.35, 0, 1.6)  0s forwards;
	}
	@media only screen and (max-width: 400px) {
		#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-main-content-<?php echo esc_attr( $tsvg_shortcode_id ); ?> > figure > ul{
			padding: 0 !important;
		}
	}
	@-webkit-keyframes animate-height { 0% {transform: scaleY(0); } 100% {transform: scaleY(1); opacity: 1; } }
	@-moz-keyframes animate-height { 0% {transform: scaleY(0); } 100% {transform: scaleY(1); opacity: 1; } }
	@keyframes animate-height { 0% {transform: scaleY(0); } 100% { transform: scaleY(1);opacity: 1; } }
	@-webkit-keyframes old-fadeIn { 0% { } 100% { opacity: 1; } }
	@-moz-keyframes old-fadeIn { 0% { } 100% { opacity: 1; } }
	@keyframes old-fadeIn { 0% { } 100% { opacity: 1; } }
	@-webkit-keyframes old-moveUp { 0% { } 100% { -webkit-transform: translateY(0); opacity: 1; } }
	@-moz-keyframes old-moveUp { 0% { } 100% { -moz-transform: translateY(0); opacity: 1; } }
	@keyframes old-moveUp { 0% { } 100% { -webkit-transform: translateY(0); transform: translateY(0); opacity: 1; } }
	@-webkit-keyframes old-scaleUp { 0% { } 100% { -webkit-transform: scale(1); opacity: 1; } }
	@-moz-keyframes old-scaleUp { 0% { } 100% { -moz-transform: scale(1); opacity: 1; } }
	@keyframes old-scaleUp { 0% { } 100% { -webkit-transform: scale(1); transform: scale(1); opacity: 1; } }
	@-webkit-keyframes old-fallPerspective { 0% { } 100% { -webkit-transform: translateZ(0px) translateY(0px) rotateX(0deg); opacity: 1; } }
	@-moz-keyframes old-fallPerspective { 0% { } 100% { -moz-transform: translateZ(0px) translateY(0px) rotateX(0deg); opacity: 1; } }
	@keyframes old-fallPerspective { 0% { } 100% { -webkit-transform: translateZ(0px) translateY(0px) rotateX(0deg); transform: translateZ(0px) translateY(0px) rotateX(0deg); opacity: 1; } }
	@-webkit-keyframes old-fly { 0% { } 100% { -webkit-transform: rotateX(0deg); opacity: 1; } }
	@-moz-keyframes old-fly { 0% { } 100% { -moz-transform: rotateX(0deg); opacity: 1; } }
	@keyframes old-fly { 0% { } 100% { -webkit-transform: rotateX(0deg); transform: rotateX(0deg); opacity: 1; } }
	@-webkit-keyframes old-flip { 0% { } 100% { -webkit-transform: rotateX(0deg); opacity: 1; } }
	@-moz-keyframes old-flip { 0% { } 100% { -moz-transform: rotateX(0deg); opacity: 1; } }
	@keyframes old-flip { 0% { } 100% { -webkit-transform: rotateX(0deg); transform: rotateX(0deg); opacity: 1; } }
	@-webkit-keyframes old-helix { 0% { } 100% { -webkit-transform: rotateY(0deg); opacity: 1; } }
	@-moz-keyframes old-helix { 0% { } 100% { -moz-transform: rotateY(0deg); opacity: 1; } }
	@keyframes old-helix { 0% { } 100% { -webkit-transform: rotateY(0deg); transform: rotateY(0deg); opacity: 1; } }
	@-webkit-keyframes old-popUp {
		0% { }
		70% { -webkit-transform: scale(1.1); opacity: .8; -webkit-animation-timing-function: ease-out; }
		100% { -webkit-transform: scale(1); opacity: 1; }
	}
	@-moz-keyframes old-popUp {
		0% { }
		70% { -moz-transform: scale(1.1); opacity: .8; -moz-animation-timing-function: ease-out; }
		100% { -moz-transform: scale(1); opacity: 1; }
	}
	@keyframes old-popUp {
		0% { }
		70% { transform: scale(1.1); opacity: .8; animation-timing-function: ease-out; }
		100% { transform: scale(1); opacity: 1; }
	}
	@-webkit-keyframes animtr {
		0% {
			-webkit-transform: translateY(100px);
			-moz-transform: translateY(100px);
			transform: translateY(100px);
		}
		70% {
			-webkit-transform: translateY(0px);
			-moz-transform: translateY(0px);
			transform: translateY(0px);
		}
		100% {
			opacity: 1;
		}
	}
	@-moz-keyframes animtr {
		0% {
			-moz-transform: translateY(100px);
			-moz-transform: translateY(100px);
			-moz-transform: translateY(100px);
		}
		70% {
			-moz-transform: translateY(0px);
			-moz-transform: translateY(0px);
			-moz-transform: translateY(0px);
		}
		100% {
			opacity: 1;
		}
	}
	@keyframes animtr {
		0% {
			-webkit-transform: translateY(100px);
			-moz-transform: translateY(100px);
			transform: translateY(100px);
		}
		70% {
			-webkit-transform: translateY(0px);
			-moz-transform: translateY(0px);
			transform: translateY(0px);
		}
		100% {
			opacity: 1;
		}
	}
	@-webkit-keyframes animsc {
		0% {
			-webkit-transform: scale(0.7);
			-moz-transform: scale(0.7);
			transform: scale(0.7);
		}
		50% {
			-webkit-transform: scale(1.2);
			-moz-transform: scale(1.2);
			transform: scale(1.2);
		}
		70% {
			-webkit-transform: scale(1);
			-moz-transform: scale(1);
			transform: scale(1);
		}
		100% {
			opacity: 1;
		}
	}
	@-moz-keyframes animsc {
		0% {
			-moz-transform: scale(0.7);
			-moz-transform: scale(0.7);
			-moz-transform: scale(0.7);
		}
		50% {
			-moz-transform: scale(1.2);
			-moz-transform: scale(1.2);
			-moz-transform: scale(1.2);
		}
		70% {
			-moz-transform: scale(1);
			-moz-transform: scale(1);
			-moz-transform: scale(1);
		}
		100% {
			opacity: 1;
		}
	}
	@keyframes animsc {
		0% {
			-webkit-transform: scale(0.7);
			-moz-transform: scale(0.7);
			transform: scale(0.7);
		}
		50% {
			-webkit-transform: scale(1.2);
			-moz-transform: scale(1.2);
			transform: scale(1.2);
		}
		70% {
			-webkit-transform: scale(1);
			-moz-transform: scale(1);
			transform: scale(1);
		}
		100% {
			opacity: 1;
		}
	}
	@-webkit-keyframes animno {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 0.5;
		}
		70% {
			opacity: 0.7;
		}
		100% {
			opacity: 1;
		}
	}
	@-moz-keyframes animno {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 0.5;
		}
		70% {
			opacity: 0.7;
		}
		100% {
			opacity: 1;
		}
	}
	@keyframes animno {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 0.5;
		}
		70% {
			opacity: 0.7;
		}
		100% {
			opacity: 1;
		}
	}
	<?php if ($tsvg_edit !== 'true') {
		if ($this->theme_details->name == 'Crio'|| $this->theme_details->parent_theme == 'Crio') {  ?>
			@media only screen and (max-width: 768px) {
				section.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
					width: 90vw !important;
				}
			}
			@media only screen and (max-height: 550px) {
				section.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>{
					width: 90vw !important;
				}
			}
	<?php }
		} ?>
</style>