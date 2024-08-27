<style>
	:root{
		--tsvg_g_c_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_01 ), FILTER_VALIDATE_INT ); ?>;
		--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_03 ) ); ?>;
		--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_04 ) ); ?>;
		--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_06 ) ); ?>;
		--tsvg_g_b_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_07 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_g_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_08 ) ); ?>;
		--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_09 ), FILTER_VALIDATE_INT ); ?>px;
		--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_10 ) ); ?>;
		--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_11 ) ); ?>;
		--tsvg_pi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo htmlspecialchars( esc_html( $tsvg_style_options->TotalSoft_GV_1_13 ) ); ?>;
		--tsvg_pi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>:<?php echo filter_var( esc_html( $tsvg_style_options->TotalSoft_GV_1_14 ), FILTER_VALIDATE_INT ); ?>px;
	}
	.tsvg-classic-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *, .tsvg-classic-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *:before, .tsvg-classic-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> *:after {
		box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-classic-blocks-container-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		width: 100%;
		text-align: center;
		float: left;
		margin: 0 auto;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		width: calc(calc(100% /  var(--tsvg_g_c_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) ) - 1em)!important;
		display: inline-block;
		margin: 0 !important;
		border: var(--tsvg_g_b_w_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) solid var(--tsvg_g_b_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: relative;
		z-index: 0;
		cursor: pointer;
		overflow: hidden;
		opacity: 1;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?> * {
		line-height: 1 !important;
		list-style-type: none;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']:before {
		z-index: 1;
		position: absolute;
		content: "";
		left: 0.5em;
		width: calc(100% - 1em);
		top: 0.5em;
		height: calc(100% - 1em);
		-webkit-box-shadow: 0 10px 6px -6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 10px 6px -6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 10px 6px -6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 10px 6px -6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02']:before, .tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02']:after {
		z-index: 1;
		position: absolute;
		content: "";
		padding: 100%;
		bottom: 23px;
		left: 10px;
		width: 50%;
		top: 80%;
		max-width: 300px;
		background:  var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-transform: rotate(-5deg);
		-moz-transform: rotate(-5deg);
		-o-transform: rotate(-5deg);
		-ms-transform: rotate(-5deg);
		transform: rotate(-5deg);
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02']:after {
		-webkit-transform: rotate(5deg);
		-moz-transform: rotate(5deg);
		-o-transform: rotate(5deg);
		-ms-transform: rotate(5deg);
		transform: rotate(5deg);
		right: 10px;
		left: auto;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect03']:before {
		z-index: 1;
		position: absolute;
		content: "";
		padding: 100%;
		bottom: 23px;
		left: 10px;
		width: 50%;
		top: 80%;
		max-width: 300px;
		background:  var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-transform: rotate(-5deg);
		-moz-transform: rotate(-5deg);
		-o-transform: rotate(-5deg);
		-ms-transform: rotate(-5deg);
		transform: rotate(-5deg);
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04']:after {
		z-index: 1;
		position: absolute;
		content: "";
		padding: 100%;
		bottom: 23px;
		right: 10px;
		left: auto;
		width: 50%;
		top: 80%;
		max-width: 300px;
		background:  var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 11px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-transform: rotate(5deg);
		-moz-transform: rotate(5deg);
		-o-transform: rotate(5deg);
		-ms-transform: rotate(5deg);
		transform: rotate(5deg);
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05']:before, .tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05']:after {
		z-index: 1;
		position: absolute;
		content: "";
		padding: 100%;
		bottom: 25px;
		left: 10px;
		width: 50%;
		top: 80%;
		max-width: 300px;
		background:  var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-box-shadow: 0 18px 5px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 18px 5px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 18px 5px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 18px 5px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-transform: rotate(-3deg);
		-moz-transform: rotate(-3deg);
		-o-transform: rotate(-3deg);
		-ms-transform: rotate(-3deg);
		transform: rotate(-3deg);
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05']:after {
		-webkit-transform: rotate(3deg);
		-moz-transform: rotate(3deg);
		-o-transform: rotate(3deg);
		-ms-transform: rotate(3deg);
		transform: rotate(3deg);
		right: 10px;
		left: auto;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']:before, .tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']:after {
		content: "";
		position: absolute;
		z-index: 1;
		-webkit-box-shadow: 0 6px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 6px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 6px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 6px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 50%;
		bottom: 0.7em;
		left: 0.7em;
		right: 0.7em;
		-moz-border-radius: 100px / 10px;
		border-radius: 100px / 10px;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']:before, .tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']:after {
		content: "";
		position: absolute;
		z-index: 1;
		-webkit-box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 0.5em;
		bottom: 0.5em;
		left: 0.5em;
		right: 0.5em;
		-moz-border-radius: 100px / 10px;
		border-radius: 100px / 10px;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08']:before, .tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08']:after {
		content: "";
		position: absolute;
		z-index: 1;
		-webkit-box-shadow: 0 0 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 0 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 0 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 0 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 0.5em;
		bottom: 0.5em;
		left: 0.7em;
		right: 0.7em;
		-moz-border-radius: 100px / 10px;
		border-radius: 100px / 10px;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09']:before, .tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09']:after {
		content: "";
		position: absolute;
		z-index: 1;
		-webkit-box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-o-box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 1px 6px var(--tsvg_g_sh_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		top: 0.6em;
		bottom: 0.6em;
		left: 0.5em;
		right: 0.5em;
		-moz-border-radius: 100px / 10px;
		border-radius: 100px / 10px;
	}
	.tsvg-classic-block-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09']:after {
		right: 0.5em;
		-webkit-transform: skew(5deg) rotate(3deg);
		-moz-transform: skew(5deg) rotate(3deg);
		-ms-transform: skew(5deg) rotate(3deg);
		-o-transform: skew(5deg) rotate(3deg);
		transform: skew(5deg) rotate(3deg);
	}
	.tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		-webkit-transition: all 1s ease;
		-moz-transition: all 1s ease;
		-o-transition: all 1s ease;
		transition: all 1s ease;
		position: relative;
		margin:0 !important;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		overflow: hidden;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		content: '';
		background: -webkit-linear-gradient(top, transparent 0%,  var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) 100%);
		background: linear-gradient(to bottom, transparent 0%, var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>) 100%);
		width: 100%;
		height: 50%;
		opacity: 0;
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 2;
		-webkit-transition-property: top, opacity;
		-moz-transition-property: top, opacity;
		-o-transition-property: top, opacity;
		transition-property: top, opacity;
		-webkit-transition-duration: 0.3s;
		-moz-transition-duration: 0.3s;
		-o-transition-duration: 0.3s;
		transition-duration: 0.3s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 20px;
		position: absolute;
		bottom: 0;
		left: 0;
		z-index: 3;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> span {
		display: block;
		opacity: 0;
		position: relative;
		top: 100px;
		-webkit-transition-property: top, opacity;
		-moz-transition-property: top, opacity;
		-o-transition-property: top, opacity;
		transition-property: top, opacity;
		-webkit-transition-duration: 0.3s;
		-moz-transition-duration: 0.3s;
		-o-transition-duration: 0.3s;
		transition-duration: 0.3s;
		-webkit-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
		transition-delay: 0s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover:before {
		top: 50%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		top: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:focus .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect01']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		-webkit-transition-delay: 0.15s;
		-moz-transition-delay: 0.15s;
		-o-transition-delay: 0.15s;
		transition-delay: 0.15s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		overflow: hidden;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02']  .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 0;
		left: 0;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		width: 100%;
		height: 100%;
		opacity: 0;
		-webkit-transition: opacity 0.5s ease;
		-moz-transition: opacity 0.5s ease;
		-o-transition: opacity 0.5s ease;
		transition: opacity 0.5s ease;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		-moz-transform: scale(1.09, 1.09);
		-ms-transform: scale(1.09, 1.09);
		-webkit-transform: scale(1.09, 1.09);
		transform: scale(1.09, 1.09);
		-moz-transition-property: all;
		-o-transition-property: all;
		-webkit-transition-property: all;
		transition-property: all;
		-moz-transition-duration: 0.4s;
		-o-transition-duration: 0.4s;
		-webkit-transition-duration: 0.4s;
		transition-duration: 0.4s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		-moz-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		-webkit-transform: scale(1, 1);
		transform: scale(1, 1);
		-webkit-filter: blur(2px);
		filter: blur(2px);
		-moz-transition-property: all;
		-o-transition-property: all;
		-webkit-transition-property: all;
		transition-property: all;
		-moz-transition-duration: 0.8s;
		-o-transition-duration: 0.8s;
		-webkit-transition-duration: 0.8s;
		transition-duration: 0.8s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: relative;
		display: block;
		top: 50%;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		-webkit-transition-delay: 0.5s;
		transition-delay: 0.5s;
		-moz-transition-duration: 0.8s;
		-o-transition-duration: 0.8s;
		-webkit-transition-duration: 0.8s;
		transition-duration: 0.8s;
		opacity: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect02'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect03'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect03'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> span{
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect03'] .tsvg-classic-icon-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%) scale(0);
		-webkit-transform: translate(-50%, -50%) scale(0);
		-moz-transform: translate(-50%, -50%) scale(0);
		-o-transform: translate(-50%, -50%) scale(0);
		color: var(--tsvg_pi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_pi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect03'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-moz-transition-duration: 0.8s;
		-o-transition-duration: 0.8s;
		-webkit-transition-duration: 0.8s;
		transition-duration: 0.8s;
		opacity: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect03']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect03']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-icon-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		transform: translate(-50%, -50%) scale(1.1);
		-webkit-transform: translate(-50%, -50%) scale(1.1);
		-moz-transform: translate(-50%, -50%) scale(1.1);
		-o-transform: translate(-50%, -50%) scale(1.1);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::after {
		position: absolute;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		transform: scale3d(0, 0, 1);
		-webkit-transform: scale3d(0, 0, 1);
		-moz-transform: scale3d(0, 0, 1);
		-o-transform: scale3d(0, 0, 1);
		transition: transform .3s ease-out 0s;
		-webkit-transition: transform .3s ease-out 0s;
		-moz-transition: transform .3s ease-out 0s;
		-o-transition: transform .3s ease-out 0s;
		content: '';
		pointer-events: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::before {
		transform-origin: left top;
		z-index: 1;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::after {
		transform-origin: right bottom;
		background: var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::after {
		transform: scale3d(1, 1, 1);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04'] .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%) scale(0);
		-webkit-transform: translate(-50%, -50%) scale(0);
		-moz-transform: translate(-50%, -50%) scale(0);
		-o-transform: translate(-50%, -50%) scale(0);
		transition: all 300ms 0ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		z-index: 2;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect04'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		transform: translate(-50%, -50%) scale(1);
		-webkit-transform: translate(-50%, -50%) scale(1);
		-moz-transform: translate(-50%, -50%) scale(1);
		-o-transform: translate(-50%, -50%) scale(1);
		transition: all 300ms 100ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		overflow: hidden;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 0;
		left: 0;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		width: 100%;
		height: 100%;
		opacity: 0;
		-webkit-transition: opacity 0.5s ease;
		-moz-transition: opacity 0.5s ease;
		-o-transition: opacity 0.5s ease;
		transition: opacity 0.5s ease;
		padding: 30px 3em;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::before {
		position: absolute;
		top: 30px;
		right: 30px;
		bottom: 30px;
		left: 100%;
		border-left: 4px solid var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		content: '';
		opacity: 0;
		background-color: rgba(255, 255, 255, 0.5);
		-webkit-transition: all 0.5s;
		-moz-transition: all 0.5s;
		-o-transition: all 0.5s;
		transition: all 0.5s;
		-webkit-transition-delay: 0.6s;
		-moz-transition-delay: 0.6s;
		-o-transition-delay: 0.6s;
		transition-delay: 0.6s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: relative;
		display: block;
		top: 50%;
		-webkit-transform: translate3d(30%, -50%, 0);
		-moz-transform: translate3d(30%, -50%, 0);
		-o-transform: translate3d(30%, -50%, 0);
		transform: translate3d(30%, -50%, 0);
		-webkit-transition-delay: 0.3s;
		-moz-transition-delay: 0.3s;
		-o-transition-delay: 0.3s;
		transition-delay: 0.3s;
		opacity: 0;
		-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		transition: opacity 0.35s,
		-webkit-transform 0.35s,
		-moz-transform 0.35s,
		-o-transform 0.35s,
		transform 0.35s;
		text-align: left;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
		-webkit-transform: translate3d(0%, -50%, 0);
		-moz-transform: translate3d(0%, -50%, 0);
		-o-transform: translate3d(0%, -50%, 0);
		transform: translate3d(0%, -50%, 0);
		-webkit-transition-delay: 0.4s;
		-moz-transition-delay: 0.4s;
		-o-transition-delay: 0.4s;
		transition-delay: 0.4s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect05'] .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>::before {
		background: rgba(255, 255, 255, 0);
		left: 30px;
		opacity: 1;
		-webkit-transition-delay: 0s;
		-moz-transition-delay: 0s;
		-o-transition-delay: 0s;
		transition-delay: 0s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		overflow: hidden;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-one {
		bottom: 0;
		display: block;
		left: 0;
		position: absolute;
		right: 0;
		top: 0;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		opacity: 0;
		-webkit-transition: opacity 0.5s ease;
		-moz-transition: opacity 0.5s ease;
		-o-transition: opacity 0.5s ease;
		transition: opacity 0.5s ease;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: absolute;
		left: 0;
		width: 100%;
		bottom: 50%;
		-webkit-transform: translateY(50%);
		-moz-transform: translateY(50%);
		-o-transform: translateY(50%);
		transform: translateY(50%);
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-classic-hover-field-two {
		height: 78px;
		width: 78px;
		overflow: hidden;
		position: absolute;
		top: 50%;
		left: 50%;
		content: '';
		-webkit-transform: rotate(45deg) translate(-50%, -50%);
		-moz-transform: rotate(45deg) translate(-50%, -50%);
		-o-transform: rotate(45deg) translate(-50%, -50%);
		transform: rotate(45deg) translate(-50%, -50%);
		-webkit-transform-origin: 0 0;
		transform-origin: 0 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']   .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:after,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']   .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']   .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:after {
		background-color: var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: absolute;
		content: "";
		display: block;
		-webkit-transition: all 0.4s ease-in-out;
		-moz-transition: all 0.4s ease-in-out;
		-o-transition: all 0.4s ease-in-out;
		transition: all 0.4s ease-in-out;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']   .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:after {
		width: 65%;
		height: 2px;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:after {
		width: 2px;
		height: 65%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:before, .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:before {
		left: 0;
		top: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:after, .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:after {
		bottom: 0;
		right: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		-webkit-transition: all 0.3s ease-in-out;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform: scale(1.1);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-one{
		opacity: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:before {
		width: 38%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:before {
		height: 38%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-two:after {
		width: 55%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect06']   .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-hover-field-three:after {
		height: 55%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		overflow: hidden;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display:none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']   .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		content: "";
		opacity: 0;
		width: 70%;
		height: 100%;
		border-radius: 50%;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: absolute;
		top: 0;
		left: -30%;
		transform: scale(0);
		-webkit-transform: scale(0);
		-moz-transform: scale(0);
		-o-transform: scale(0);
		transition: all 0.2s ease 0s;
		-webkit-transition: all 0.2s ease 0s;
		-moz-transition: all 0.2s ease 0s;
		-o-transition: all 0.2s ease 0s;
		z-index: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']  .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover:before {
		opacity: 1;
		transform: scale(2);
		-webkit-transform: scale(2);
		-moz-transform: scale(2);
		-o-transform: scale(2);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']   .tsvg-classic-block-hover {
		position: absolute;
		top: 50%;
		left: 15%;
		transform: translate(-300%, -50%);
		-webkit-transform: translate(-300%, -50%);
		-moz-transform: translate(-300%, -50%);
		-o-transform: translate(-300%, -50%);
		transition: all 0.2s ease 0s;
		-webkit-transition: all 0.2s ease 0s;
		-moz-transition: all 0.2s ease 0s;
		-o-transition: all 0.2s ease 0s;
		z-index: 2;
		text-align: center;
		max-width: 50%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']    .tsvg-classic-block-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-hover {
		transform: translate(0, -50%);
		-webkit-transform: translate(0, -50%);
		-moz-transform: translate(0, -50%);
		-o-transform: translate(0, -50%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']   .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		margin: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']   .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 0;
		margin: 15px 0 !important;
		list-style: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect07']   .tsvg-classic-icon-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		color: var(--tsvg_pi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_pi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08']  .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display:none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08']   .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		overflow: hidden;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		content: "";
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background: rgba(0, 0, 0, 0);
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-o-transition: all 0.3s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover:after {
		background: rgba(0, 0, 0, 0.2);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-block-hover {
		position: absolute;
		top: 35%;
		left: 0;
		width: 100%;
		z-index: 1;
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-o-transition: all 0.3s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		width: 40%;
		position: relative;
		top: 0;
		padding: 5px;
		text-align: center;
		background: var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: 0 0 5px 5px;
		margin: 0 auto;
		transform: translate(0px, 0px);
		-webkit-transform: translate(0px, 0px);
		-moz-transform: translate(0px, 0px);
		-o-transform: translate(0px, 0px);
		transition: all 0.35s;
		-webkit-transition: all 0.35s;
		-moz-transition: all 0.35s;
		-o-transition: all 0.35s;
		line-height: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		transform: translate(0px, 95%);
		-webkit-transform: translate(0px, 95%);
		-moz-transform: translate(0px, 95%);
		-o-transform: translate(0px, 95%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-icon-hover-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		color: var(--tsvg_pi_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-size: var(--tsvg_pi_s_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		width: 80%;
		position: absolute;
		top: 0;
		left: 10%;
		padding: 10px;
		margin: 0;
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.85);
		text-align: center;
		transform: translate(0px, 0px);
		-webkit-transform: translate(0px, 0px);
		-moz-transform: translate(0px, 0px);
		-o-transform: translate(0px, 0px);
		transition: all 0.2s;
		-webkit-transition: all 0.2s;
		-moz-transition: all 0.2s;
		-o-transition: all 0.2s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect08'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		transform: translate(0px, -2px);
		-webkit-transform: translate(0px, -2px);
		-moz-transform: translate(0px, -2px);
		-o-transform: translate(0px, -2px);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		overflow: hidden;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-transition: all 0.45s ease 0s;
		-moz-transition: all 0.45s ease 0s;
		-o-transition: all 0.45s ease 0s;
		transition: all 0.45s ease 0s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		-webkit-transform: skew(30deg) translateX(-80%);
		-moz-transform: skew(30deg) translateX(-80%);
		-o-transform: skew(30deg) translateX(-80%);
		transform: skew(30deg) translateX(-80%);
		z-index: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover:before {
		-webkit-transform: skew(30deg) translateX(-20%);
		-moz-transform: skew(30deg) translateX(-20%);
		-o-transform: skew(30deg) translateX(-20%);
		transform: skew(30deg) translateX(-20%);
		-webkit-transition-delay: 0.05s;
		-moz-transition-delay: 0.05s;
		-o-transition-delay: 0.05s;
		transition-delay: 0.05s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		-webkit-transform: skew(-30deg) translateX(-70%);
		-moz-transform: skew(-30deg) translateX(-70%);
		-o-transform: skew(-30deg) translateX(-70%);
		transform: skew(-30deg) translateX(-70%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover:after {
		-webkit-transform: skew(-30deg) translateX(-10%);
		-moz-transform: skew(-30deg) translateX(-10%);
		-o-transform: skew(-30deg) translateX(-10%);
		transform: skew(-30deg) translateX(-10%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		z-index: 1;
		padding: 20px 40% 20px 20px;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		content: "";
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
		z-index: -1;
		-webkit-transition: all 0.45s ease 0s;
		-moz-transition: all 0.45s ease 0s;
		-o-transition: all 0.45s ease 0s;
		transition: all 0.45s ease 0s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		-webkit-transform: skew(30deg) translateX(-100%);
		-moz-transform: skew(30deg) translateX(-100%);
		-o-transform: skew(30deg) translateX(-100%);
		transform: skew(30deg) translateX(-100%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		-webkit-transform: skew(30deg) translateX(-40%);
		-moz-transform: skew(30deg) translateX(-40%);
		-o-transform: skew(30deg) translateX(-40%);
		transform: skew(30deg) translateX(-40%);
		-webkit-transition-delay: 0.15s;
		-moz-transition-delay: 0.15s;
		-o-transition-delay: 0.15s;
		transition-delay: 0.15s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		-webkit-transform: skew(-30deg) translateX(-90%);
		-moz-transform: skew(-30deg) translateX(-90%);
		-o-transform: skew(-30deg) translateX(-90%);
		transform: skew(-30deg) translateX(-90%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		-webkit-transform: skew(-30deg) translateX(-30%);
		-moz-transform: skew(-30deg) translateX(-30%);
		-o-transform: skew(-30deg) translateX(-30%);
		transform: skew(-30deg) translateX(-30%);
		-webkit-transition-delay: 0.1s;
		-moz-transition-delay: 0.1s;
		-o-transition-delay: 0.1s;
		transition-delay: 0.1s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		margin: 0;
		opacity: 0;
		-webkit-transition: all 0.5s ease 0s;
		-moz-transition: all 0.5s ease 0s;
		-o-transition: all 0.5s ease 0s;
		transition: all 0.5s ease 0s;
		z-index: 2;
		text-align: left;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect09'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 0.9;
		-webkit-transition-delay: 0.2s;
		-moz-transition-delay: 0.2s;
		-o-transition-delay: 0.2s;
		transition-delay: 0.2s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		position: relative;
		overflow: hidden;
		text-align: center;
		-webkit-transition: all 0.55s ease;
		-moz-transition: all 0.55s ease;
		-o-transition: all 0.55s ease;
		transition: all 0.55s ease;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		-webkit-transition: opacity 0.55s ease;
		-moz-transition: opacity 0.55s ease;
		-o-transition: opacity 0.55s ease;
		transition: opacity 0.55s ease;
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		opacity: 1;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 10px;
		position: absolute;
		bottom: 25px;
		right: 25px;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		content: "";
		width: 3000px;
		height: 2px;
		position: absolute;
		background: var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-transition: all 0.55s ease;
		-moz-transition: all 0.55s ease;
		-o-transition: all 0.55s ease;
		transition: all 0.55s ease;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		top: 0;
		left: 0;
		-webkit-transform: translateX(100%);
		-moz-transform: translateX(100%);
		-o-transform: translateX(100%);
		transform: translateX(100%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		bottom: 0;
		right: 0;
		-webkit-transform: translateX(-100%);
		-moz-transform: translateX(-100%);
		-o-transform: translateX(-100%);
		transform: translateX(-100%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		content: "";
		width: 2px;
		height: 3000px;
		position: absolute;
		background: var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		-webkit-transition: all 0.55s ease;
		-moz-transition: all 0.55s ease;
		-o-transition: all 0.55s ease;
		transition: all 0.55s ease;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before {
		top: 0;
		left: 0;
		-webkit-transform: translateY(100%);
		-moz-transform: translateY(100%);
		-o-transform: translateY(100%);
		transform: translateY(100%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		bottom: 0;
		right: 0;
		-webkit-transform: translateY(-100%);
		-moz-transform: translateY(-100%);
		-o-transform: translateY(-100%);
		transform: translateY(-100%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		-webkit-transform: translate(0, 0);
		-moz-transform: translate(0, 0);
		-o-transform: translate(0, 0);
		transform: translate(0, 0);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:before,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10']  .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:hover .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>:after {
		-webkit-transition-delay: 0.15s;
		-moz-transition-delay: 0.15s;
		-o-transition-delay: 0.15s;
		transition-delay: 0.15s;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='effect10'] .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-span-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		margin: 0;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='none'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		background: var(--tsvg_g_h_c1_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='none'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		line-height: 1;
		font-weight: 400;
		font-size: var(--tsvg_t_fs_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		font-family: var(--tsvg_t_ff_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		color: var(--tsvg_t_c_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		margin: 0;
		position: relative;
		display: block;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-o-transform: translateY(-50%);
		transform: translateY(-50%);
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='none'] .tsvg-classic-title-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> .tsvg-classic-title-hover-div-inner-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		padding: 5px 10px;
		border: 2px solid var(--tsvg_g_h_c2_<?php echo esc_attr( $tsvg_shortcode_id ); ?>);
		border-radius: 2px;
	}
	.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='none'] .tsvg-classic-block-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?>,.tsvg-classic-blocks-list-<?php echo esc_attr( $tsvg_shortcode_id ); ?>[data-tsvg-effect='none'] .tsvg-classic-icon-hover-div-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: none;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>   .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> {
		display: block;
		width: 100%;
		padding-top: 56.25%;
		position: relative;
	}
	#tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>     .tsvg-classic-block-items-<?php echo esc_attr( $tsvg_shortcode_id ); ?> img {
		width: 100%;
		height: 100%;
		position: absolute;
		display: block !important; /* lazy load */
		top: 0;
		left: 0;
		margin: 0;
	}
	.tsvg-classic-block-desc{
		display:none!important;
	}
</style>
<?php
	$tsvg_videos_data_html = '';
	$tsvg_block_index                = 0;
	foreach ( $tsvg_videos_data as $key => $value ) {
		$tsvg_block_index++;
		$tsvg_videos_data_object = json_decode( $tsvg_videos_data[ $key ]->TS_VG_Options );
		$tsvg_media_url_target = $tsvg_videos_data_object->TotalSoftVGallery_Vid_vont == 'true' ? '_blank' : '_self';
		$tsvg_block_video_url = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd == '' ? $tsvg_default_video : $tsvg_videos_data_object->TotalSoftVGallery_Vid_Vd;
		$tsvg_block_link_url = $tsvg_videos_data_object->TotalSoftVGallery_Vid_link;
		$tsvg_block_img_url = $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im == '' ? esc_url( plugins_url( 'img/tsvg_no_video.png', __DIR__ ) ) : esc_url( $tsvg_videos_data_object->TotalSoftVGallery_Vid_Im );
		$tsvg_videos_data_html .= sprintf(
			'
			<li class="tsvg-classic-block-%1$s"  data-tsvg-id="%2$s" style="-moz-animation-delay:  %3$ss;-webkit-animation-delay:  %3$ss;animation-delay:  %3$ss;" data-tsvg-effect="%4$s"  data-tsvg-src="%5$s" data-tsvg-link="%6$s" data-tsvg-target="%7$s">
				<figure class="tsvg-classic-block-inner-%1$s">
					<div class="tsvg-classic-block-items-%1$s" data-tsvg-effect="%8$s">
						<img  width="" height="" src="%9$s" alt="img" class="tsvg-classic-block-img-%1$s" data-tsvg-img="%10$s" >
						<div class="tsvg-classic-block-desc">%11$s</div>
						<figcaption  data-tsvg-hover="%12$s">
							<div class="tsvg-classic-block-hover" data-tsvg-ef="%13$s">
								<div class="tsvg-classic-block-hover-div-%1$s">
									<div class="tsvg-classic-hover-field-one"></div>
									<div class="tsvg-classic-hover-field-two">
										<div class="tsvg-classic-hover-field-three"></div>
									</div>
								</div>
								<div class="tsvg-classic-title-hover-div-%1$s" >
									<div class="tsvg-classic-title-hover-div-inner-%1$s">
										<span class="tsvg-classic-title-hover-span-%1$s">
											%14$s
										</span>
									</div>
								</div>
								<div class="tsvg-classic-icon-hover-div-%1$s">
									<span>
										<i class="tsvg-classic-icon-hover-%1$s %15$s"></i>
									</span>
								</div>
							</div>
						</figcaption>
					</div>
				</figure>
			</li>
			',
			esc_attr( $tsvg_shortcode_id ),
			esc_attr( $tsvg_videos_data[ $key ]->id ),
			esc_attr( 0.3 * $tsvg_block_index ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_05 ),
			esc_url( $tsvg_block_video_url ),
			esc_url( $tsvg_block_link_url ),
			esc_attr( $tsvg_media_url_target ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_04 ),
			esc_url( $tsvg_block_img_url ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_08 ),
			wp_unslash( html_entity_decode( $tsvg_videos_data_object->TotalSoftVGallery_Vid_desc ) ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_14 ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_02 ),
			esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_videos_data[ $key ]->TS_VG_SetName ), ENT_QUOTES ) ),
			esc_attr( $tsvg_style_options->TotalSoft_GV_1_12 )
		);
	}
	echo sprintf(
		'
		<main class="tsvg-main-content-%1$s "  data-item-open="%2$s"  data-item-number="%3$s" data-pagination="%4$s"  data-p-lm="%5$s">
			<figure  class="tsvg-classic-blocks-container-%1$s">
				<ul class="tsvg-classic-blocks-list-%1$s" data-tsvg-effect="%6$s" >
					%7$s  
				</ul>
			</figure>
		</main>
		',
		esc_attr( $tsvg_shortcode_id ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_07 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_02 ),
		esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_2_19 ),
		esc_attr( $tsvg_style_options->TotalSoft_GV_1_02 ),
		$tsvg_videos_data_html
	);
?>