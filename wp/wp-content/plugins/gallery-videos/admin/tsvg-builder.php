<?php
if ( ! defined( 'WPINC' ) ) {
	die;
}
echo sprintf(
	'
  	<section id="tsvg_loader" class="tsvg_flex_col">
  		<div id="tsvg_load_circle"></div>
  		<img src="%1$s" class="tsvg_load_img">
  	</section>
  	',
	esc_url( plugin_dir_url( __FILE__ ) . 'img/ts-video-gallery-logo.png' )
);
ob_start();
if ( $this->tsvg_build == 'new' ) {
	$tsvg_theme_blocks = "";
	foreach ( $this->tsvg_themes as $key => $value ) {
		$tsvg_is_pro_theme = $key === "effective_gallery" || $key === "gallery_album";
		$tsvg_theme_blocks .= sprintf(
			'
			<div class="tsvg_theme tsvg_flex_col">
				<div class="tsvg_theme_header">
                    <a class="tsvg_theme_demo tsvg_flex_col %1$s" href="%2$s" target="_blank">
                        <i class="ts-vgallery ts-vgallery-eye"></i>
                    </a>
				    <div class="tsvg_theme_version %3$s">%4$s</div>
				    <img src="%5$s" alt="%6$s"/>
				</div>
				<div class="tsvg_theme_main">
				    <h1 class="tsvg_theme_name">%7$s</h1>
				    <div class="tsvg_theme_choose tsvg_flex_col">
				    	<a href="%8$s" %9$s class="tsvg_theme_use %10$s"><span><i class="ts-vgallery ts-vgallery-magic"></i>%11$s</span></a>
				    </div>
				</div>
			</div>
        	',
			$tsvg_is_pro_theme ? 'tsvg_theme_demo_pro' : '',
			esc_url( "https://total-soft.com/" . $this->tsvg_themes_links[$key] ),
			$tsvg_is_pro_theme ? 'tsvg_theme_version_pro' : '',
			$tsvg_is_pro_theme ? esc_html('PRO THEME') : esc_html('FREE THEME'),
			esc_url(plugin_dir_url( __FILE__ ) ."img/".$key.".png"),
			esc_attr($key),
			esc_html($value),
			$tsvg_is_pro_theme ? esc_url("https://total-soft.com/wp-video-gallery/") : esc_url(add_query_arg('tsvg-theme',$key)),
			$tsvg_is_pro_theme ? 'target="_blank"' : '',
			$tsvg_is_pro_theme ? 'tsvg_theme_use_pro' : '',
			$tsvg_is_pro_theme ? esc_html('Pro Theme') : esc_html('Use Theme')
        );
	}
	echo sprintf(
		'
		<div class="tsvg_content active" data-tsvg-section="theme" >
			%1$s
		</div>
		',
		$tsvg_theme_blocks
	);
} else {
	global $wp_embed;
	$tsvg_get_all             = new TS_Video_Gallery_Function();
	$tsvg_all_fonts_arr       = $tsvg_get_all->tsvg_get_all_fonts();
	$tsvg_font_families       = array_combine( array_keys( $tsvg_all_fonts_arr['tsvg_font_families'] ), array_keys( $tsvg_all_fonts_arr['tsvg_font_families'] ) );
	$tsvg_builder_arr         = array();
	$tsvg_builder_setting_arr = array(
		'Upcoming vgallery options' => array(
			'TotalSoft_VGallery_Set_07' => array(
				'label'       => 'open effect',
				'type'        => 'select',
				'options'     => array(
					'none'      => 'none',
					'effect-1'  => 'Effect 1',
					'effect-2'  => 'Effect 2',
					'effect-3'  => 'Effect 3',
					'effect-4'  => 'Effect 4',
					'effect-5'  => 'Effect 5',
					'effect-6'  => 'Effect 6',
					'effect-7'  => 'Effect 7',
					'effect-8'  => 'Effect 8',
					'effect-9'  => 'Effect 9',
					'effect-10' => 'Effect 10'
				),
				'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
				'change_attr' => 'data-item-open'
			)
		)
	);
	$tsvg_builder_param_base = json_decode( $this->tsvg_build_proporties['TS_VG_Option'], true );
	$tsvg_pagination_arr     = array(
		'Pagination options' => array(
			'TotalSoft_VGallery_Set_01' => array(
				'label'       => 'Gallery Show Type',
				'type'        => 'select',
				'options'     => array(
					'all'        => 'All',
					'pagination' => 'Pagination',
					'load-more'  => 'Load more'
				),
				'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id . ',.tsvg-pagination-pages-wrapper',
				'change_attr' => 'data-pagination'
			),
			'TotalSoft_VGallery_Set_02' => array(
				'label'       => 'Videos Per Page',
				'type'        => 'range',
				'options'     => array(
					'min' => 1,
					'max' => 30
				),
				'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
				'change_attr' => 'data-item-number'
			),
			'TotalSoft_VGallery_Set_03' => array(
				'label'       => 'Load More Text',
				'type'        => 'text',
				"change_elem" => '.tsvg-pagination-pages-wrapper .btn-lg span,.tsvg-pagination-pages-wrapper .btn-lg li',
				"change_attr" => ""
			),
			'TotalSoft_VGallery_Set_05' => array(
				'label'       => 'PAGINATION TYPE',
				'type'        => 'select-position-image',
				'options'     => array(
					'ef-1' => esc_url( plugins_url( 'public/img/pag1.png', __DIR__ ) ),
					'ef-2' => esc_url( plugins_url( 'public/img/pag2.png', __DIR__ ) ),
					'ef-3' => esc_url( plugins_url( 'public/img/pag3.png', __DIR__ ) ),
					'ef-4' => esc_url( plugins_url( 'public/img/pag4.png', __DIR__ ) ),
					'ef-5' => esc_url( plugins_url( 'public/img/pag5.png', __DIR__ ) ),
					'ef-6' => esc_url( plugins_url( 'public/img/pag6.png', __DIR__ ) ),
					'ef-7' => esc_url( plugins_url( 'public/img/pag7.png', __DIR__ ) )
				),
				'change_elem' => '.tsvg-pagination-pages',
				'change_attr' => 'data-ef'
			),
			'TotalSoft_VGallery_Set_06' => array(
				'label'       => 'NUMERIC PAGINATION STYLE',
				'type'        => 'select-position-image',
				'options'     => array(
					'vw-1' => esc_url( plugins_url( 'public/img/pag-type1.png', __DIR__ ) ),
					'vw-2' => esc_url( plugins_url( 'public/img/pag-type2.png', __DIR__ ) ),
					'vw-3' => esc_url( plugins_url( 'public/img/pag-type3.png', __DIR__ ) ),
					'vw-4' => esc_url( plugins_url( 'public/img/pag-type4.png', __DIR__ ) ),
					'vw-5' => esc_url( plugins_url( 'public/img/pag-type5.png', __DIR__ ) )
				),
				'change_elem' => '.tsvg-pagination-pages',
				'change_attr' => 'data-vw'
			),
			'TotalSoft_VGallery_Set_08' => array(
				'label'       => 'LOAD MORE TYPE',
				'type'        => 'select-position-image',
				'options'     => array(
					'ef-1' => esc_url( plugins_url( 'public/img/loadmore1.png', __DIR__ ) ),
					'ef-2' => esc_url( plugins_url( 'public/img/loadmore2.png', __DIR__ ) ),
					'ef-3' => esc_url( plugins_url( 'public/img/loadmore3.png', __DIR__ ) ),
					'ef-4' => esc_url( plugins_url( 'public/img/loadmore4.png', __DIR__ ) ),
					'ef-5' => esc_url( plugins_url( 'public/img/loadmore5.png', __DIR__ ) )
				),
				'change_elem' => '.tsvg-pagination-pages-wrapper',
				'change_attr' => 'data-load-vw'
			)
		)
	);
	if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
		unset($tsvg_pagination_arr['Pagination options']['TotalSoft_VGallery_Set_05']);
		unset($tsvg_pagination_arr['Pagination options']['TotalSoft_VGallery_Set_06']);
		unset($tsvg_pagination_arr['Pagination options']['TotalSoft_VGallery_Set_08']);
	}else{
		unset($tsvg_pagination_arr['Pagination options']['TotalSoft_VGallery_Set_03']);
		$tsvg_pagination_arr['Style']     = array(
			'TotalSoft_VGallery_Sty_16' => array(
				'label'       => 'Icon instead of text ',
				'type'        => 'input-toggle',
				'options'     => array(
					'yes' => 'true',
					'no'  => 'false'
				),
				'change_elem' => '.tsvg-pagination-pages-wrapper',
				'change_attr' => 'data-icon-show'
			),
			'TotalSoft_VGallery_Sty_14' => array(
				'label'       => 'Prev Icon Type',
				'type'        => 'select-icon',
				'change_elem' => '.tsvg-pagination-page-item-prev i',
				'change_attr' => 'class'
			),
			'TotalSoft_VGallery_Sty_15' => array(
				'label'       => 'Next Icon Type',
				'type'        => 'select-icon',
				'change_elem' => '.tsvg-pagination-page-item-next i',
				'change_attr' => 'class'
			),
			'TotalSoft_VGallery_Sty_01' => array(
				'label'       => 'Next Button Text',
				'type'        => 'text',
				'change_elem' => '.tsvg-pagination-page-item-next span',
				'change_attr' => ''
			),
			'TotalSoft_VGallery_Sty_02' => array(
				'label'       => 'Prev Button Text',
				'type'        => 'text',
				'change_elem' => '.tsvg-pagination-page-item-prev span',
				'change_attr' => ''
			),
			'TotalSoft_VGallery_Sty_03' => array(
				'label'       => 'Background Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_bc_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_04' => array(
				'label'       => 'Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_c_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_05' => array(
				'label'        => 'Font Size',
				'type'         => 'range',
				'options'      => array(
					'min' => 8,
					'max' => 40
				),
				'change'       => '--tsvg_s_fs_' . $this->tsvg_build_id,
				'change_param' => 'px'
			),
			'TotalSoft_VGallery_Sty_06' => array(
				'label'       => 'Font family',
				'type'        => 'select',
				'options'     => $tsvg_font_families,
				'change_attr' => '--tsvg_s_ff_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_07' => array(
				'label'       => 'Current Background Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_ac_bc_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_08' => array(
				'label'       => 'Current Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_ac_c_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_09' => array(
				'label'       => 'Hover Background Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_h_bc_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_10' => array(
				'label'       => 'Hover Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_h_c_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_11' => array(
				'label'       => 'Border Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_b_c_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_13' => array(
				'label'        => 'Prev & next font size',
				'type'         => 'range',
				'options'      => array(
					'min' => 10,
					'max' => 40
				),
				'change'       => '--tsvg_s_pl_fs_' . $this->tsvg_build_id,
				'change_param' => 'px'
			),
			'TotalSoft_VGallery_Sty_17' => array(
				'label'       => 'Button content',
				'type'        => 'select',
				'options'     => array(
					'text' 		 => 'Only text',
					'icon' 		 => 'Only Icon',
					'text-icon'  => 'Text with icon'
				),
				'change_elem' => '.tsvg-pagination-pages-wrapper',
				'change_attr' => 'data-load-icon'
			),
			'TotalSoft_VGallery_Sty_18' => array(
				'label'       => 'Load Button Text',
				'type'        => 'text',
				'change_elem' => ' .tsvg-pagination-pages-wrapper .btn-lg span,.tsvg-pagination-pages-wrapper .btn-lg li',
				'change_attr' => ''
			),
			'TotalSoft_VGallery_Sty_19' => array(
				'label'       => 'Load Color',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_l_c_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_20' => array(
				'label'       => 'Load Background Color 1',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_l_bc_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_23' => array(
				'label'       => 'Load Background Color 2',
				'type'        => 'color',
				'change_prop' => '--tsvg_s_l_bc_2_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_21' => array(
				'label'        => 'Load Font Size',
				'type'         => 'range',
				'options'      => array(
					'min' => 8,
					'max' => 40
				),
				'change'       => '--tsvg_s_l_fs_' . $this->tsvg_build_id,
				'change_param' => 'px'
			),
			'TotalSoft_VGallery_Sty_22' => array(
				'label'       => 'Load Font family',
				'type'        => 'select',
				'options'     => $tsvg_font_families,
				'change_attr' => '--tsvg_s_l_ff_' . $this->tsvg_build_id
			),
			'TotalSoft_VGallery_Sty_24' => array(
				'label'       => 'Load Icon Type',
				'type'        => 'select-icon',
				'change_elem' => '.btn-lg i',
				'change_attr' => 'class'
			)
		);
	}
	$tsvg_builder_styles_base         = $this->tsvg_build_proporties['TS_VG_Style'];
	$tsvg_builder_settings_base       = json_decode( $this->tsvg_build_proporties['TS_VG_Settings'], true );
	$tsvg_builder_pagination_base = json_decode( $this->tsvg_build_proporties['TS_VG_Option_Style'], true );
	switch ( $tsvg_builder_param_base['TS_vgallery_Q_Theme'] ) {
		case 'Grid Video Gallery':
			$tsvg_builder_arr['General options'] = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'       => 'Show Title',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-grid-content-items-' . $this->tsvg_build_id,
					'change_attr' => 'data-show-title'
				),
				'TotalSoft_GV_1_02'         => array(
					'label'       => 'Show Description',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-grid-content-items-' . $this->tsvg_build_id,
					'change_attr' => 'data-show-desc'
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Image Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_general_img_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_04'         => array(
					'label'        => 'Place Between',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_general_place_between_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_05'         => array(
					'label'        => ' Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_general_video_radius_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_06'         => array(
					'label'       => 'Hover Effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'                => 'none',
						'blur'                => 'Blur',
						'brightness'          => 'Brightness',
						'contrast'            => 'Contrast',
						'grayscale'           => 'Grayscale',
						'hue-rotate'          => ' Hue-rotate',
						'invert'              => 'Invert',
						'drop-shadow'         => 'Drop-shadow',
						'opacity'             => 'Opacity',
						'saturate'            => 'Saturate',
						'sepia'               => 'Sepia',
						'contrast-brightness' => 'Contrast-Brightness'
					),
					'change_elem' => '.tsvg-grid-layout-item-block-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-effect'
				),
				'TotalSoft_GV_1_07'         => array(
					'label'        => 'Opacity',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'change'       => '--tsvg_general_opacity_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_08'         => array(
					'label'       => 'Drop Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_general_dr_sh_cl_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Title & Description Area'] = array(
				'TotalSoft_GV_1_09' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_title_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_10' => array(
					'label'        => 'Margin Top',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 25
					),
					'change'       => '--tsvg_title_mt_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Title Option'] = array(
				'TotalSoft_GV_1_11' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_to_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_12' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_to_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_13' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_to_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_14' => array(
					'label'       => 'Text Align',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-grid-layout-item-title-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-title'
				)
			);
			$tsvg_builder_arr['Popup options'] = array(
				'TotalSoft_GV_1_18' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_19' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_popup_bw_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_20' => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dotted' => 'Dotted',
						'dashed' => 'Dashed'
					),
					'change_elem' => '.tsvg-grid-slide-block-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-effect'
				),
				'TotalSoft_GV_1_21' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_bdc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_22' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_popup_rd_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_23' => array(
					'label'        => 'Padding',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 30
					),
					'change'       => '--tsvg_popup_p_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Link Option'] = array(
				'TotalSoft_GV_2_01' => array (
						'label'      => 'Border Width',
						'type'       => 'range',
						'options'    => array(
								'min' => 0,
								'max' => 10
						),
						'change' => '--tsvg_lo_bdw_' . $this->tsvg_build_id,
						'change_param' => 'px'
				),
				'TotalSoft_GV_2_02' => array (
						'label'      => 'Border Style',
						'type'       => 'select-position-efect',
						'options'    => array(
								'none'   => 'None',
								'solid'  => 'Solid',
								'dotted' => 'Dotted',
								'dashed' => 'Dashed'
						),
						'change_attr' => '--tsvg_lo_bds_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_03' => array (
						'label'      => 'Border Color',
						'type'       => 'color',
						'change_prop' => '--tsvg_lo_bdc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_04' => array (
						'label'		 => 'Border Radius',
						'type'		 => 'range',
						'options'	 => array(
								'min' => 0,
								'max' => 10
						),
						'change' => '--tsvg_lo_bdr_' . $this->tsvg_build_id,
						'change_param' => 'px'
				),
				'TotalSoft_GV_2_05' => array (
						'label' => 'Link Text',
						'type'  => 'text',
						'change_elem' => '.tsvg-grid-slide-href-' . $this->tsvg_build_id,
						'change_attr' => ''
				),
				'TotalSoft_GV_2_06' => array (
						'label' => 'Background Color',
						'type'  => 'color',
						'change_prop' => '--tsvg_lo_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_07' => array (
						'label' => 'Text Color',
						'type'  => 'color',
						'change_prop' => '--tsvg_lo_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_08' => array (
						'label' => 'Font Size',
						'type'  => 'range',
						'options' => array (
								'min' => 8,
								'max' => 48
						),	
						'change' => '--tsvg_lo_fs_' . $this->tsvg_build_id,
						'change_param' => 'px'
				),
				'TotalSoft_GV_2_09' => array (
						'label' => 'Font Family',
						'type'  => 'select',
						'options' => $tsvg_font_families,
						'change_attr' => '--tsvg_lo_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_10' => array (
						'label' => 'Hover Background Color',
						'type'  => 'color',
						'change_prop' => '--tsvg_lo_hbc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_11' => array (
						'label' => 'Hover Text Color',
						'type'  => 'color',
						'change_prop' => '--tsvg_lo_hc_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup Title Options'] = array(
				'TotalSoft_GV_2_22' => array(
					'label'       => 'Show Title',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-grid-slide-title-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-bool'
				),
				'TotalSoft_GV_1_24' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_popup_t_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_25' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_t_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_26' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_t_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Text Align',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-grid-slide-title-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-position'
				)
			);
			$tsvg_builder_arr['Popup Description  Options'] = array(
				'TotalSoft_GV_2_23' => array(
					'label'       => 'Show Description',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-grid-slide-desc-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-bool'
				)
			);
			$tsvg_builder_arr['Line After Title in Popup'] = array(
				'TotalSoft_GV_1_28' => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_popup_l_t_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_29' => array(
					'label'       => 'Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dotted' => 'Dotted',
						'dashed' => 'Dashed'
					),
					'change_elem' => '.tsvg-grid-slideshow-' . $this->tsvg_build_id . ' figcaption',
					'change_attr' => 'data-tsvg-effect'
				),
				'TotalSoft_GV_1_30' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_t_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Arrows Option'] = array(
				'TotalSoft_GV_1_32' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-grid-slideshow-btn-' . $this->tsvg_build_id . '.tsvg-grid-slideshow-prev-btn  i',
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_33' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-grid-slideshow-btn-' . $this->tsvg_build_id . '.tsvg-grid-slideshow-next-btn  i',
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_34' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ar_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_35' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--popup_ar_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Close Icon Option'] = array(
				'TotalSoft_GV_1_36' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-grid-slideshow-btn-' . $this->tsvg_build_id . '.tsvg-grid-slideshow-close-btn  i',
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_38' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_cl_i_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_39' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_header_cl_i_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_2_12" => ["label"=>"Next Button Text","type" => "text","change_elem"=>".tsvg-pagination-page-item-next span","change_attr" => ""],
					"TotalSoft_GV_2_13" => ["label"=>"Prev Button Text","type" => "text","change_elem"=>".tsvg-pagination-page-item-prev span","change_attr" => ""],
					"TotalSoft_GV_2_14" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_15" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_16" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_17" => ["label"=>"Font family","type" => "select","options" => $tsvg_font_families,"change_attr"=> "--tsvg_p_lm_ff_".$this->tsvg_build_id],
					"TotalSoft_GV_2_18" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_19" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_20" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_21" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_24" => ["label"=>"Border Style","type" => "select-position-efect","options" => ["none" => "none","solid" => "Solid","dashed" => "Dashed","dotted" => "Dotted"],"change_attr"=> "--tsvg_p_lm_bs_".$this->tsvg_build_id],
					"TotalSoft_GV_2_25" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_26" => ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'LightBox Video Gallery':
			$tsvg_builder_arr['General options']      = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_general_img_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_02'         => array(
					'label'        => 'Place Between',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_general_place_between_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_general_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_04'         => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_general_sh_cl_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_05'         => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_general_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_07'         => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_general_bd_cl_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_06'         => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'none',
						'solid'  => 'Solid',
						'dashed' => 'Dashed',
						'dotted' => 'Dotted'
					),
					'change_elem' => '.tsvg-lightbox-block-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-border'
				),
				'TotalSoft_GV_1_08'         => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_general_bd_r_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_10'         => array(
					'label'       => 'Zoom Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none' => ' None ',
						'lImgZoom1' => ' Effect 1 ',
						'lImgZoom2' => ' Effect 2 ',
						'lImgZoom3' => ' Effect 3 ',
						'lImgZoom4' => ' Effect 4 ',
						'lImgZoom5' => ' Effect 5 ',
						'lImgZoom6' => ' Effect 6 ',
						'lImgZoom7' => ' Effect 7 '
					),
					'change_elem' => '.tsvg-block-image-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-img'
				),
				'TotalSoft_GV_2_11'         => array(
					'label'        => 'Zoom Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'time'         => 'yes',
					'change'       => '--tsvg_general_z_tm_' . $this->tsvg_build_id,
					'change_param' => 's'
				)
			);
			$tsvg_builder_arr['Hover Line Option']    = array(
				'TotalSoft_GV_2_22' => array(
					'label'        => 'Line Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 5
					),
					'change'       => '--tsvg_hlo_l_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_23' => array(
					'label'       => 'Line Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'none',
						'solid'  => 'Solid',
						'dashed' => 'Dashed',
						'dotted' => 'Dotted'
					),
					'change_elem' => '.tsvg-block-hover-line-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-border'
				),
				'TotalSoft_GV_2_24' => array(
					'label'       => 'Line Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_hlo_l_cl_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_25' => array(
					'label'       => 'Effect Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'hovLine1' => ' Effect 1 ',
						'hovLine2' => ' Effect 2 ',
						'hovLine3' => ' Effect 3 ',
						'hovLine4' => ' Effect 4 ',
						'hovLine5' => ' Effect 5 ',
						'hovLine6' => ' Effect 6 '
					),
					'change_elem' => '.tsvg-block-hover-line-' . $this->tsvg_build_id,
					'change_attr' => 'data-hoverline'
				),
				'TotalSoft_GV_2_26' => array(
					'label'        => 'Effect Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'time'         => 'yes',
					'change'       => '--tsvg_hlo_e_tm_' . $this->tsvg_build_id,
					'change_param' => 's'
				)
			);
			$tsvg_builder_arr['Hover Overlay Option'] = array(
				'TotalSoft_GV_2_12' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_hoo_bc_cl_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_13' => array(
					'label'       => 'Effect Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'		  => ' none ',
						'hovLayTVG1'  => ' Effect 1 ',
						'hovLayTVG2'  => ' Effect 2 ',
						'hovLayTVG3'  => ' Effect 3 ',
						'hovLayTVG4'  => ' Effect 4 ',
						'hovLayTVG5'  => ' Effect 5 ',
						'hovLayTVG6'  => ' Effect 6 ',
						'hovLayTVG7'  => ' Effect 7 ',
						'hovLayTVG8'  => ' Effect 8 ',
						'hovLayTVG9'  => ' Effect 9 ',
						'hovLayTVG10' => ' Effect 10 ',
						'hovLayTVG11' => ' Effect 11 ',
						'hovLayTVG12' => ' Effect 12 ',
						'hovLayTVG13' => ' Effect 13 '
					),
					'change_elem' => '.tsvg-lightbox-block-hover-layout-' . $this->tsvg_build_id,
					'change_attr' => 'data-hoverlay'
				),
				'TotalSoft_GV_2_14' => array(
					'label'        => 'Effect Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'time'         => 'yes',
					'change'       => '--tsvg_hoo_e_tm_' . $this->tsvg_build_id,
					'change_param' => 's'
				)
			);
			$tsvg_builder_arr['Title Option']         = array(
				'TotalSoft_GV_2_15' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_title_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_16' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 36
					),
					'change'       => '--tsvg_title_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_17' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_title_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_20' => array(
					'label'       => 'Hover Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'hovTit1'  => ' Effect 1 ',
						'hovTit2'  => ' Effect 2 ',
						'hovTit3'  => ' Effect 3 ',
						'hovTit4'  => ' Effect 4 ',
						'hovTit5'  => ' Effect 5 ',
						'hovTit6'  => ' Effect 6 ',
						'hovTit7'  => ' Effect 7 ',
						'hovTit8'  => ' Effect 8 ',
						'hovTit9'  => ' Effect 9 ',
						'hovTit10' => ' Effect 10 ',
						'hovTit11' => ' Effect 11 '
					),
					'change_elem' => '.tsvg-block-title-hover-layout-' . $this->tsvg_build_id,
					'change_attr' => 'data-hover'
				),
				'TotalSoft_GV_2_21' => array(
					'label'        => 'Hover Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'time'         => 'yes',
					'change'       => '--tsvg_title_ht_' . $this->tsvg_build_id,
					'change_param' => 's'
				),
				'TotalSoft_GV_2_18' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_title_ff_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Link Option']          = array(
				'TotalSoft_GV_2_27' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_l_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_28' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_l_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_29' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_l_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_30' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_l_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_31' => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'none',
						'solid'  => 'Solid',
						'dashed' => 'Dashed',
						'dotted' => 'Dotted'
					),
					'change_elem' => '.tsvg-block-link-hover-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-border'
				),
				'TotalSoft_GV_2_32' => array(
					'label'       => 'Link Text',
					'type'        => 'text',
					'change_elem' => '.tsvg-block-link-hover-' . $this->tsvg_build_id,
					'change_attr' => ''
				),
				'TotalSoft_GV_2_33' => array(
					'label'       => 'Hover Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'hovLink1' => ' Effect 1 ',
						'hovLink2' => ' Effect 2 ',
						'hovLink3' => ' Effect 3 ',
						'hovLink4' => ' Effect 4 ',
						'hovLink5' => ' Effect 5 ',
						'hovLink6' => ' Effect 6 ',
						'hovLink7' => ' Effect 7 ',
						'hovLink8' => ' Effect 8 ',
						'hovLink9' => ' Effect 9 '
					),
					'change_elem' => '.tsvg-block-link-hover-' . $this->tsvg_build_id,
					'change_attr' => 'data-hover'
				),
				'TotalSoft_GV_2_34' => array(
					'label'        => 'Hover Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'time'         => 'yes',
					'change'       => '--tsvg_l_ht_' . $this->tsvg_build_id,
					'change_param' => 's'
				),
				'TotalSoft_GV_2_19' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_l_ff_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup options']        = array(
				'TotalSoft_GV_1_09' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_10' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_popup_po_bw_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_11' => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dotted' => 'Dotted',
						'dashed' => 'Dashed'
					),
					'change_attr' => '--tsvg_popup_st_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_12' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_13' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 40
					),
					'change'       => '--tsvg_popup_po_br_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_38' => array(
					'label'       => 'Autoplay Videos',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				)
			);
			$tsvg_builder_arr['Title in Popup']       = array(
				'TotalSoft_GV_1_14' => array(
					'label'       => 'Show Title',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-title-show'
				),
				'TotalSoft_GV_1_15' => array(
					'label'       => 'Text Align',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-title-align'
				),
				'TotalSoft_GV_1_16' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_popup_tip_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_17' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_tip_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_18' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_tip_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Numbers Option']       = array(
				'TotalSoft_GV_1_35' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_popup_no_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_36' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_no_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Play Icon Option']     = array(
				'TotalSoft_GV_1_20' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-play'
				),
				'TotalSoft_GV_1_21' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-paus'
				),
				'TotalSoft_GV_1_22' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_popup_pio_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_23' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pio_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Close Icon Option']    = array(
				'TotalSoft_GV_1_25' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-close'
				),
				'TotalSoft_GV_1_26' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_popup_cio_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_cio_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_28' => array(
					'label'       => 'Text',
					'type'        => 'text',
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-close-text'
				),
				'TotalSoft_GV_1_29' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_cio_ff_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Arrows Option']        = array(
				'TotalSoft_GV_1_31' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-prev'
				),
				'TotalSoft_GV_1_32' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-lb-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-next'
				),
				'TotalSoft_GV_1_33' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_popup_ao_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_34' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ao_c_' . $this->tsvg_build_id
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_1_37" => ["label"=>"Next Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-next span","change_attr" => ""],
					"TotalSoft_GV_1_38" => ["label"=>"Prev Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-prev span","change_attr" => ""],
					"TotalSoft_GV_1_39" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_01" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_02" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_03" => ["label"=>"Font family","type" => "select","options" => $tsvg_font_families,"change_attr"=> "--tsvg_p_lm_ff_".$this->tsvg_build_id],
					"TotalSoft_GV_2_04" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_05" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_06" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_07" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_08" => ["label"=>"Border Style","type" => "select","options" => ["none" => "none","solid" => "Solid","dashed" => "Dashed","dotted" => "Dotted"],"change_attr"=> "--tsvg_p_lm_bs_".$this->tsvg_build_id],
					"TotalSoft_GV_2_09" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_35" => ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'Thumbnails Video':
			$tsvg_builder_arr['General options']    = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'       => 'Start Effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'normal'      => ' Normal ',
						'transparent' => 'Transparent ',
						'overlay'     => ' Overlay '
					),
					'change_elem' => '.tsvg-block-link-hover-' . $this->tsvg_build_id,
					'change_attr' => 'data-start-effect'
				),
				'TotalSoft_GV_1_02'         => array(
					'label'       => 'Hover Effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'normal'             => ' Normal ',
						'popout'             => ' Popout ',
						'sliceDown'          => ' Slice Down ',
						'sliceDownLeft'      => ' Slice Down Left ',
						'sliceUp'            => ' Slice Up ',
						'sliceUpLeft'        => ' Slice Up Left ',
						'sliceUpRandom'      => '  Slice Up Random ',
						'sliceDownRandom'    => ' Slice Down Random ',
						'sliceUpDown'        => ' Slice Up Down ',
						'sliceUpDownLeft'    => ' Slice Up Down Left',
						'fold'               => ' Fold',
						'foldLeft'           => ' Fold Left',
						'boxRandom'          => ' Box Random',
						'boxRain'            => ' Box Rain',
						'boxRainReverse'     => ' Box Rain Reverse ',
						'boxRainGrow'        => ' Box Rain Grow',
						'boxRainGrowReverse' => ' Rain Grow Reverse '
					),
					'change_elem' => '.tsvg-thumbnails-block-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-ef'
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Animation Speed',
					'type'         => 'range',
					'options'      => array(
						'min' => 100,
						'max' => 1000
					),
					'change'       => '--tsvg_l_fs_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_04'         => array(
					'label'       => 'Fill Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_go_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_05'         => array(
					'label'        => 'Slices',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 30
					),
					'change'       => '--tsvg_go_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_06'         => array(
					'label'        => 'Box Cols',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 30
					),
					'change'       => '--tsvg_go_bc_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_07'         => array(
					'label'        => 'Box Rows',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 30
					),
					'change'       => '--tsvg_go_br_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_08'         => array(
					'label'        => 'PopOut Margin',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 100
					),
					'change'       => '--tsvg_go_pm_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_09'         => array(
					'label'        => 'PopOut Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 40
					),
					'change'       => '--tsvg_go_ps_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_10'         => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_go_sc_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Video Options']      = array(
				'TotalSoft_GV_1_11' => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_v_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_2_11' => array(
					'label'        => 'Place Between Videos',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_p_bw_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Video Icon Options'] = array(
				'TotalSoft_GV_2_12' => array(
					'label'        => 'size',
					'type'         => 'range',
					'options'      => array(
						'min' => 10,
						'max' => 50
					),
					'change'       => '--tsvg_vi_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_13' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_vi_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_14' => array(
					'label'       => 'Icon',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-thumbnails-block-' . $this->tsvg_build_id . ' i',
					'change_attr' => 'class'
				)
			);
			$tsvg_builder_arr['Popup options']      = array(
				'TotalSoft_GV_2_22' => array(
					'label'       => 'Show Prev & Next',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-th-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-show-navigation'
				),
				'TotalSoft_GV_1_19' => array(
					'label'       => 'Overlay Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_op_oc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_20' => array(
					'label'       => 'Background',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-th-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-popup_bacg'
				),
				'TotalSoft_GV_1_21' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_op_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_22' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_popup_op_br_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_23' => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_op_sc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_37' => array(
					'label'       => 'Autoplay Videos',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				)
			);
			$tsvg_builder_arr['Arrow Options']      = array(
				'TotalSoft_GV_1_32' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ao_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_33' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ao_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_34' => array(
					'label'        => 'Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_popup_ao_r_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Title in Popup']     = array(
				'TotalSoft_GV_1_24' => array(
					'label'       => 'Background',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-th-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-titl_bacg'
				),
				'TotalSoft_GV_1_25' => array(
					'label'       => 'Background  Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_tip_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_26' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 48
					),
					'change'       => '--tsvg_popup_tip_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_tip_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_28' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_tip_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_29' => array(
					'label'       => 'Text Align',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-th-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-titl_position'
				),
				'TotalSoft_GV_1_13' => array(
					'label'       => 'Show Numbers',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'  
					),
					'change_elem' => '.tsvg-th-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-show-num'
				),
				'TotalSoft_GV_1_30' => array(
					'label'       => 'Numbers Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_tip_nc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_31' => array(
					'label'        => 'Numbers size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_popup_tip_ns_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Close Icon Options'] = array(
				'TotalSoft_GV_1_35' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_cio_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_36' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_cio_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_37' => array(
					'label'        => 'Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 30
					),
					'change'       => '--tsvg_popup_cio_r_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_1_38" => ["label"=>"Next Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-next span","change_attr" => ""],
					"TotalSoft_GV_1_39" => ["label"=>"Prev Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-prev span","change_attr" => ""],
					"TotalSoft_GV_2_01" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_02" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_03" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_04" => ["label"=>"Font family","type" => "select","options" => $tsvg_font_families,"change_attr"=> "--tsvg_p_lm_ff_".$this->tsvg_build_id],
					"TotalSoft_GV_2_05" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_06" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_07" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_08" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_09" => ["label"=>"Border Style","type" => "select","options" => ["none" => "none","solid" => "Solid","dashed" => "Dashed","dotted" => "Dotted"],"change_attr"=> "--tsvg_p_lm_bs_".$this->tsvg_build_id],
					"TotalSoft_GV_2_10" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_15" => ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'Content Popup':
			$tsvg_builder_arr['General options']     = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_g_v_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 15
					),
					'change'       => '--tsvg_g_border_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_04'         => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_border_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_05'         => array(
					'label'        => 'Place Between',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_g_place_between_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_06'         => array(
					'label'       => 'Show Shadow',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-cp-block-view-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-shadow'
				),
				'TotalSoft_GV_1_07'         => array(
					'label'        => 'Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 30
					),
					'change'       => '--tsvg_g_shadow_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_08'         => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_shadow_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Hover Options']       = array(
				'TotalSoft_GV_1_09' => array(
					'label'       => 'Effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'1'  => ' Effect 1 ',
						'2'  => ' Effect 2 ',
						'3'  => ' Effect 3 ',
						'4'  => ' Effect 4 ',
						'5'  => ' Effect 5 ',
						'6'  => ' Effect 6 ',
						'7'  => ' Effect 7 ',
						'8'  => ' Effect 8 ',
						'9'  => ' Effect 9 ',
						'10' => ' Effect 10 '
					),
					'change_elem' => '.tsvg-block-title-hover-layout-' . $this->tsvg_build_id,
					'change_attr' => 'data-hover'
				),
				'TotalSoft_GV_1_10' => array(
					'label'       => 'Overlay Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_hp_overlay_color_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Title Options']       = array(
				'TotalSoft_GV_1_11' => array(
					'label'       => 'Show',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-cp-block-title-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-show'
				),
				'TotalSoft_GV_1_12' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_to_color_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_13' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 45
					),
					'change'       => '--tsvg_to_font_size_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_14' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_to_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_15' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_to_background_color_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Description Options'] = array(
				'TotalSoft_GV_1_16' => array(
					'label'       => 'Show',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-cp-block-desc-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-show'
				)
			);
			$tsvg_builder_arr['Line After Title']    = array(
				'TotalSoft_GV_1_17' => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_lit_Width_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_18' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lit_color_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Link Option']         = array(
				'TotalSoft_GV_2_32' => array(
					'label'       => 'Show',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-cp-block-info-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-show'
				),
				'TotalSoft_GV_1_19' => array(
					'label'       => 'Text',
					'type'        => 'text',
					'change_elem' => '.tsvg-cp-block-info-' . $this->tsvg_build_id,
					'change_attr' => ''
				),
				'TotalSoft_GV_1_20' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_lo_border_Width_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_21' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_border_color_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_22' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_lo_border_Radius_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_23' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_background_color_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_24' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_color_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_25' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_lo_font_size_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_26' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_lo_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Hover Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_hover_background_color_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_28' => array(
					'label'       => 'Hover Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_hover_color_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup options']       = array(
				'TotalSoft_GV_2_02' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_03' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_popup_po_br_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_04' => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dotted' => 'Dotted',
						'dashed' => 'Dashed'
					),
					'change_attr' => '--tsvg_popup_po_br_s_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_05' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_br_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_34' => array(
					'label'       => 'Popup Effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'def'    => 'Default',
						'mode01' => 'Mode 1',
						'mode02' => 'Mode 2',
						'mode03' => 'Mode 3',
						'mode04' => 'Mode 4',
						'mode05' => 'Mode 5',
						'mode06' => 'Mode 6',
						'mode07' => 'Mode 7',
						'mode08' => 'Mode 8'
					),
					'change_elem' => '#tsvg-content-popup-' . $this->tsvg_build_id . ' .tsvg-content-popup-info-' . $this->tsvg_build_id,
					'change_attr' => 'data-mode'
				),
				'TotalSoft_GV_2_37' => array(
					'label'       => 'Autoplay Videos',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-content-popup-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				)
			);
			$tsvg_builder_arr['Link in Popup']       = array(
				'TotalSoft_GV_2_11' => array(
					'label'       => 'Text',
					'type'        => 'text',
					'change_elem' => '.tsvg-content-popup-element-link-' . $this->tsvg_build_id,
					'change_attr' => ''
				),
				'TotalSoft_GV_2_12' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_popup_lip_br_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_13' => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dotted' => 'Dotted',
						'dashed' => 'Dashed'
					),
					'change_attr' => '--tsvg_popup_lip_br_s_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_14' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_lip_br_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_15' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_popup_lip_br_r_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_16' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_lip_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_17' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_lip_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_18' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_popup_lip_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_19' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_lip_lip_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_20' => array(
					'label'       => 'Hover Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_lip_h_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_21' => array(
					'label'       => 'Hover Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_lip_h_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Title in Popup']      = array(
				'TotalSoft_GV_2_06' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 45
					),
					'change'       => '--tsvg_popup_tip_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_07' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_tip_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_08' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_tip_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_09' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_tip_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_10' => array(
					'label'       => 'Text Align',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '#tsvg-content-popup-' . $this->tsvg_build_id . ' .tsvg-content-popup-info-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-titl_position'
				)
			);
			$tsvg_builder_arr['Icons in Popup']      = array(
				'TotalSoft_GV_2_22' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_iip_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_23' => array(
					'label'        => 'Close Icon Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_popup_iip_ci_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_24' => array(
					'label'       => 'Close Icon Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_iip_ci_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_26' => array(
					'label'       => 'Close Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-content-popup-arrow-close-' . $this->tsvg_build_id . ' .tsvg-content-popup-arrow-close',
					'change_attr' => 'class'
				),
				'TotalSoft_GV_2_27' => array(
					'label'        => 'Arrows Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_popup_iip_a_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_28' => array(
					'label'       => 'Arrows Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_iip_a_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_30' => array(
					'label'       => 'Arrows Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-content-popup-arrow-' . $this->tsvg_build_id . ' .tsvg-content-popup-arrow-left',
					'change_attr' => 'class'
				),
				'TotalSoft_GV_2_31' => array(
					'label'       => 'Arrows Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-content-popup-arrow-' . $this->tsvg_build_id . ' .tsvg-content-popup-arrow-right',
					'change_attr' => 'class'
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_1_29" => ["label"=>"Next Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-next span","change_attr" => ""],
					"TotalSoft_GV_1_30" => ["label"=>"Prev Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-prev span","change_attr" => ""],
					"TotalSoft_GV_1_31" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_1_32" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_1_33" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_1_34" => ["label"=>"Font family","type" => "select","options" => $tsvg_font_families,"change_attr"=> "--tsvg_p_lm_ff_".$this->tsvg_build_id],
					"TotalSoft_GV_1_35" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_1_36" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_1_37" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_1_38" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_1_39" => ["label"=>"Border Style","type" => "select","options" => ["none" => "none","solid" => "Solid","dashed" => "Dashed","dotted" => "Dotted"],"change_attr"=> "--tsvg_p_lm_bs_".$this->tsvg_build_id],
					"TotalSoft_GV_2_01" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_33" => ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'Elastic Gallery':
			$tsvg_builder_arr['General options']      = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_g_img_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_g_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_04'         => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dashed' => 'Dashed',
						'dotted' => 'Dotted'
					),
					'change_attr' => '--tsvg_g_bd_t_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_05'         => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_06'         => array(
					'label'        => 'Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 30
					),
					'change'       => '--tsvg_g_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_07'         => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_sh_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_08'         => array(
					'label'       => 'Zoom Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'zEff1' => '  Type 1 ',
						'zEff2' => ' Type 2  ',
						'zEff3' => '  Type 3  ',
						'zEff4' => '  Type 4  ',
						'zEff5' => ' Type 5  ',
						'zEff6' => '  Type 6  ',
						'zEff7' => '  Type 7  ',
						'zEff8' => ' Type 8  '
					),
					'change_elem' => '.tsvg-elastic-block-' . $this->tsvg_build_id . ' .tsvg-elastic-block-img',
					'change_attr' => 'data-tsvg-img'
				),
				'TotalSoft_GV_1_09'         => array(
					'label'        => 'Effect Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'change'       => '--tsvg_g_e_tm_' . $this->tsvg_build_id,
					'change_param' => 's'
				)
			);
			$tsvg_builder_arr['Video Title Options']  = array(
				'TotalSoft_GV_1_10' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_vto_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_11' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_vto_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_12' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_vto_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_13' => array(
					'label'       => 'Background  Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_vto_bg_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_14' => array(
					'label'       => 'Hover Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'zTitfHov1' => '  Type 1 ',
						'zTitfHov2' => ' Type 2  ',
						'zTitfHov3' => '  Type 3  ',
						'zTitfHov4' => '  Type 4  '
					),
					'change_elem' => '.tsvg-elastic-block-' . $this->tsvg_build_id . ' figcaption',
					'change_attr' => 'data-tsvg-hover'
				),
				'TotalSoft_GV_1_15' => array(
					'label'        => 'Effect Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0.1,
						'max' => 1
					),
					'step'         => '0.1',
					'change'       => '--tsvg_vto_e_tm_' . $this->tsvg_build_id,
					'change_param' => 's'
				),
				'TotalSoft_GV_1_16' => array(
					'label'       => 'Show Title',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-elastic-block-' . $this->tsvg_build_id . ' figcaption span',
					'change_attr' => 'data-tsvg-show'
				)
			);
			$tsvg_builder_arr['Popup Icon Options']   = array(
				'TotalSoft_GV_1_17' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 10,
						'max' => 50
					),
					'change'       => '--tsvg_pio_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_18' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_pio_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_19' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-elastic-block-icon-' . $this->tsvg_build_id,
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_20' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_pio_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_21' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_pio_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_22' => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'none',
						'solid'  => 'Solid',
						'dashed' => 'Dashed',
						'dotted' => 'Dotted'
					),
					'change_attr' => '--tsvg_pio_bd_s_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_23' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_pio_bg_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Link Icon Options']    = array(
				'TotalSoft_GV_1_24' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lio_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_25' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lio_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_26' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lio_bg_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-elastic-block-link-icon-' . $this->tsvg_build_id,
					'change_attr' => 'class'
				)
			);
			$tsvg_builder_arr['Popup options']        = array(
				'TotalSoft_GV_1_28'  => array(
					'label'       => 'Overlay Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_ob_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_29'  => array(
					'label'        => 'Slider Effect Time',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_popup_po_se_t_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_30'  => array(
					'label'       => 'Close Icon Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_ci_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_31'  => array(
					'label'        => 'Close Icon Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 10,
						'max' => 50
					),
					'change'       => '--tsvg_popup_po_ci_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_32'  => array(
					'label'       => 'Close Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-elastic-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-sldelIcType'
				),
				'TotalSoft_GV_FG_PT' => array(
					'label'       => 'Show Popup Title',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-elastic-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-title-show'
				),
				'TotalSoft_GV_2_37' => array(
					'label'       => 'Autoplay Videos',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				)
			);
			$tsvg_builder_arr['Popup Slider Options'] = array(
				'TotalSoft_GV_1_33' => array(
					'label'        => 'Icon Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 10,
						'max' => 50
					),
					'change'       => '--tsvg_popup_pso_i_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_34' => array(
					'label'       => 'Icon Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pso_i_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_35' => array(
					'label'       => 'Icon Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pso_ib_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_38' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-elastic-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-slicLeftType'
				),
				'TotalSoft_GV_2_39' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-elastic-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-slicRightType'
				),
				'TotalSoft_GV_1_37' => array(
					'label'       => 'Show Autoplay',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-elastic-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				),
				'TotalSoft_GV_1_38' => array(
					'label'       => 'Loop',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-elastic-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-loop'
				),
				'TotalSoft_GV_1_39' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_popup_pso_b_w' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_01' => array(
					'label'       => 'Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dotted' => 'Dotted',
						'dashed' => 'Dashed'
					),
					'change_attr' => '--tsvg_popup_pso_br_s_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_02' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pso_b_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_03' => array(
					'label'       => 'Shadow Size',
					'type'        => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change' => '--tsvg_popup_pso_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_04' => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pso_sh_c_' . $this->tsvg_build_id
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_2_05" => ["label"=>"Next Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-next span","change_attr" => ""],
					"TotalSoft_GV_2_06" => ["label"=>"Prev Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-prev span","change_attr" => ""],
					"TotalSoft_GV_2_07" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_08" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_09" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_10" => ["label"=>"Font family","type" => "select","options" => $tsvg_font_families,"change_attr"=> "--tsvg_p_lm_ff_".$this->tsvg_build_id],
					"TotalSoft_GV_2_11" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_12" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_13" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_14" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_15" => ["label"=>"Border Style","type" => "select","options" => ["none" => "none","solid" => "Solid","dashed" => "Dashed","dotted" => "Dotted"],"change_attr"=> "--tsvg_p_lm_bs_".$this->tsvg_build_id],
					"TotalSoft_GV_2_16" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_17" =>  ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'Fancy Gallery':
			$tsvg_builder_arr['General options']            = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_g_img_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_g_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_04'         => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_05'         => array(
					'label'        => 'Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_g_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_06'         => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_sh_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_07'         => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_g_border_Radius_' . $this->tsvg_build_id,
					'change_param' => '%'
				),
				'TotalSoft_GV_1_08'         => array(
					'label'        => 'Place Between',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_g_place_between_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Hover Overlay Options']      = array(
				'TotalSoft_GV_1_28' => array(
					'label'       => 'type',
					'type'        => 'select',
					'options'     => array(
						'Default' => 'Default',
						'Inverse' => 'Inverse'
					),
					'change_elem' => '.tsvg-elastic-block-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-effect'
				),
				'TotalSoft_GV_1_29' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_hoo_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Video Title Options']        = array(
				'TotalSoft_GV_1_09' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_vto_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_11' => array(
					'label'       => 'Show Video Title',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-fancy-block-' . $this->tsvg_build_id . ' .tsvg-fancy-block-hover-span',
					'change_attr' => 'data-tsvg-show'
				),
				'TotalSoft_GV_1_10' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_vto_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_11' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_vto_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_12' => array(
					'label'        => 'Bottom Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 30
					),
					'change'       => '--tsvg_vto_b_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_13' => array(
					'label'       => 'Bottom Border Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'none',
						'solid'  => 'Solid',
						'dashed' => 'Dashed',
						'dotted' => 'Dotted'
					),
					'change_elem' => '.tsvg-fancy-block-' . $this->tsvg_build_id . ' .tsvg-fancy-block-hover-span',
					'change_attr' => 'data-tsvg-bottom'
				),
				'TotalSoft_GV_1_14' => array(
					'label'       => 'Bottom Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_vto_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_15' => array(
					'label'        => 'Top Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 30
					),
					'change'       => '--tsvg_vto_t_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_16' => array(
					'label'       => 'Top Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_vto_t_bd_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Link Options']               = array(
				'TotalSoft_GV_1_17' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_lo_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_18' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_lo_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_19' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_20' => array(
					'label'       => 'Position',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-fancy-block-' . $this->tsvg_build_id . ' .tsvg-fancy-block-link',
					'change_attr' => 'data-tsvg-title'
				),
				'TotalSoft_GV_1_21' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 5
					),
					'change'       => '--tsvg_lo_bd_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_22' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_23' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 30
					),
					'change'       => '--tsvg_lo_border_Radius_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_24' => array(
					'label'       => 'Background  Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_bg_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_25' => array(
					'label'       => 'Hover  Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_h_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_26' => array(
					'label'       => 'Hover Border  Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_h_bd_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Hover Background  Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_lo_h_bg_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_25' => array(
					'label'       => 'Text',
					'type'        => 'text',
					'change_elem' => '.tsvg-fancy-block-' . $this->tsvg_build_id . ' .tsvg-fancy-block-link',
					'change_attr' => ''
				)
			);
			$tsvg_builder_arr['Popup Options']              = array(
				'TotalSoft_GV_1_30' => array(
					'label'       => 'Overlay Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_o_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_32' => array(
					'label'       => 'Video Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_vbc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_33' => array(
					'label'        => 'Video Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 300,
						'max' => 1000
					),
					'change'       => '--tsvg_popup_po_v_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_34' => array(
					'label'        => 'Video Height',
					'type'         => 'range',
					'options'      => array(
						'min' => 200,
						'max' => 800
					),
					'change'       => '--tsvg_popup_po_v_h_' . $this->tsvg_build_id,
					'change_param' => ''
				)
			);
			$tsvg_builder_arr['Slider General Options']     = array(
				'TotalSoft_GV_2_09'  => array(
					'label'       => 'Video Autoplay',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				),
				'TotalSoft_GV_2_10'  => array(
					'label'       => 'Show Navigation',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-fancy-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-ShN'
				),
				'TotalSoft_GV_FG_PT' => array(
					'label'       => 'Show Video Title',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-fancy-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-PT'
				),
				'TotalSoft_GV_FG_PD' => array(
					'label'       => 'Show Video Descriptipn',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-fancy-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-PD'
				),
				'TotalSoft_GV_2_12'  => array(
					'label'       => 'Show Play Icon',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-fancy-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-ShSlPlIc'
				)
			);
			$tsvg_builder_arr['Popup Slider Icons Options'] = array(
				'TotalSoft_GV_2_38' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-fancy-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-LI'
				),
				'TotalSoft_GV_2_39' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-fancy-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-RI'
				),
				'TotalSoft_GV_2_04' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_popup_psi_s_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_2_05' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_psi_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup Thumbnail Options']    = array(
				'TotalSoft_GV_1_35' => array(
					'label'       => 'Hover Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pt_hbr_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_36' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 5
					),
					'change'       => '--tsvg_popup_pt_br_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_37' => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 50,
						'max' => 150
					),
					'change'       => '--tsvg_popup_pt_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_38' => array(
					'label'        => 'Height',
					'type'         => 'range',
					'options'      => array(
						'min' => 50,
						'max' => 150
					),
					'change'       => '--tsvg_popup_pt_h_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_31' => array(
					'label'       => 'Carusel Icon Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pt_c_i_c' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup Title Options']        = array(
				'TotalSoft_GV_1_39' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_popup_ci_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_01' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_ci_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_02' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ci_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Close Icon Options']         = array(
				'TotalSoft_GV_2_37' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-fancy-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-DI'
				),
				'TotalSoft_GV_2_07' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_popup_ci_csi_s_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_2_08' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ci_csi_c_' . $this->tsvg_build_id
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_2_14" => ["label"=>"Next Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-next span","change_attr" => ""],
					"TotalSoft_GV_2_13" => ["label"=>"Prev Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-prev span","change_attr" => ""],
					"TotalSoft_GV_2_15" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_16" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_17" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_18" => ["label"=>"Font family","type" => "select","options" => $tsvg_font_families,"change_attr"=> "--tsvg_p_lm_ff_".$this->tsvg_build_id],
					"TotalSoft_GV_2_19" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_20" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_21" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_22" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_23" => ["label"=>"Border Style","type" => "select","options" => ["none" => "none","solid" => "Solid","dashed" => "Dashed","dotted" => "Dotted"],"change_attr"=> "--tsvg_p_lm_bs_".$this->tsvg_build_id],
					"TotalSoft_GV_2_24" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_26" => ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'Parallax Engine':
			$tsvg_builder_arr['General options']            = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_02'         => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_g_img_w_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_04'         => array(
					'label'        => 'Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_g_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_05'         => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_sh_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_06'         => array(
					'label'       => 'Shadow Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'1' => ' Type 1 ',
						'2' => ' Type 2'
					),
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-type'
				),
				'TotalSoft_GV_1_08'         => array(
					'label'        => 'Place Between Video Images',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_g_place_between_v_i' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_g_border_Radius_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Title Options']              = array(
				'TotalSoft_GV_1_09' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_t_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_10' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_t_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_11' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_t_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_12' => array(
					'label'        => 'Text Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_t_t_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_13' => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_t_sh_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_14' => array(
					'label'       => 'Effect Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'TotalSoft_Title_Ef1' => 'Translate',
						'TotalSoft_Title_Ef2' => 'Scale',
						'TotalSoft_Title_Ef3' => ' None',
						'TotalSoft_Title_Ef4' => ' Rotate'
					),
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id . ' .tsvg-parallax-block-title-effect',
					'change_attr' => 'data-tsvg-ef'
				)
			);
			$tsvg_builder_arr['Popup Icon Options']         = array(
				'TotalSoft_GV_1_15' => array(
					'label'       => 'Show Icon',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id . ' .tsvg-parallax-block-icon',
					'change_attr' => 'data-tsvg-show'
				),
				'TotalSoft_GV_1_16' => array(
					'label'       => 'type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id . ' .tsvg-parallax-block-icon',
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_17' => array(
					'label'        => 'size',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_pi_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_18' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_pi_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Hover Line Options']         = array(
				'TotalSoft_GV_1_19' => array(
					'label'       => 'type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'TotalSoft_HovLine1'  => 'Default',
						'TotalSoft_HovLine1'  => '1',
						'TotalSoft_HovLine2'  => '2',
						'TotalSoft_HovLine3'  => '3',
						'TotalSoft_HovLine4'  => '4',
						'TotalSoft_HovLine5'  => '5',
						'TotalSoft_HovLine6'  => '6',
						'TotalSoft_HovLine7'  => '7',
						'TotalSoft_HovLine8'  => '8',
						'TotalSoft_HovLine9'  => '9',
						'TotalSoft_HovLine10' => '10',
						'TotalSoft_HovLine11' => '11',
						'TotalSoft_HovLine12' => '12',
						'TotalSoft_HovLine13' => '13'
					),
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id . ' .mask',
					'change_attr' => 'data-tsvg-ef'
				),
				'TotalSoft_GV_1_20' => array(
					'label'       => 'Show Line',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id . ' .tsvg-parallax-block-lines',
					'change_attr' => 'data-tsvg-show'
				),
				'TotalSoft_GV_1_21' => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 100
					),
					'change'       => '--tsvg_hl_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_22' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_hl_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_23' => array(
					'label'        => 'Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 100
					),
					'change'       => '--tsvg_hl_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_24' => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_hl_sh_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Hover Overlay Options']      = array(
				'TotalSoft_GV_1_25' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_ho_b_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_26' => array(
					'label'       => 'type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'TotalSoft_Hov_Overlay1' => '1',
						'TotalSoft_Hov_Overlay2' => '2',
						'TotalSoft_Hov_Overlay3' => '3',
						'TotalSoft_Hov_Overlay4' => '4',
						'TotalSoft_Hov_Overlay5' => '5'
					),
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id . ' .tsvg-parallax-block-hover',
					'change_attr' => 'data-tsvg-ef'
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Show Overlay',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-parallax-block-' . $this->tsvg_build_id . ' .tsvg-parallax-block-hover',
					'change_attr' => 'data-tsvg-show'
				)
			);
			$tsvg_builder_arr['Popup Slider Options']       = array(
				'TotalSoft_GV_1_30' => array(
					'label'       => 'Popup 2 Slider Effect Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'elastic' => 'Elastic',
						'fade'    => 'Fade'
					),
					'change_elem' => '.tsvg-parallax-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-efect'
				),
				'TotalSoft_GV_1_31' => array(
					'label'       => 'Popup 2 Slider Video Title',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ps_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_32' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_popup_ps_b_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_33' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ps_b_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_34' => array(
					'label'        => 'Shadow',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 50
					),
					'change'       => '--tsvg_popup_ps_sh_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_35' => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ps_sh_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_37' => array(
					'label'        => 'Video Title Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_popup_ps_vt_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_38' => array(
					'label'       => 'Video Title Font Family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_ps_vt_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_39' => array(
					'label'       => 'Video Title Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ps_vt_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_36' => array(
					'label'       => 'Options Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_ps_o_bc_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup Options']              = array(
				'TotalSoft_GV_1_28' => array(
					'label'       => 'Overlay Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_o_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_29' => array(
					'label'       => 'Effect Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'1' => ' Type 1 ',
						'2' => ' Type 2 '
					),
					'change_elem' => '.tsvg-parallax-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-type'
				),
				'TotalSoft_GV_2_37' => array(
					'label'       => 'Autoplay Videos',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				)
			);
			$tsvg_builder_arr['Popup Slider Icons Options'] = array(
				'TotalSoft_GV_2_01' => array(
					'label'        => 'Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_popup_psi_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_02' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_psi_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_38' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-parallax-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-prev'
				),
				'TotalSoft_GV_2_39' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-parallax-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-next'
				),
				'TotalSoft_GV_2_04' => array(
					'label'       => 'Close Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-parallax-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-close'
				)
				// 'TotalSoft_GV_2_05' => array(
				// 	'label'       => 'Loading Type',
				// 	'type'        => 'select-icon',
				// 	'change_elem' => '.TotalsofthLIcon2' . $this->tsvg_build_id,
				// 	'change_attr' => 'class',
				// )
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_2_06" => ["label"=>"Next Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-next span","change_attr" => ""],
					"TotalSoft_GV_2_07" => ["label"=>"Prev Button Text","type" => "text","change_elem"=> ".tsvg-pagination-page-item-prev span","change_attr" => ""],
					"TotalSoft_GV_2_08" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_09" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_10" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_11" => ["label"=>"Font family","type" => "select","options" => $tsvg_font_families,"change_attr"=> "--tsvg_p_lm_ff_".$this->tsvg_build_id],
					"TotalSoft_GV_2_12" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_13" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_14" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_15" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_16" => ["label"=>"Border Style","type" => "select","options" => ["none" => "none","solid" => "Solid","dashed" => "Dashed","dotted" => "Dotted"],"change_attr"=> "--tsvg_p_lm_bs_".$this->tsvg_build_id],
					"TotalSoft_GV_2_17" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_18" => ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'Classic Gallery':
			$tsvg_builder_arr['General options']      = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'        => 'Column Count',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_g_c_c_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_02'         => array(
					'label'       => 'Hover Effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'     => 'None ',
						'effect01' => 'Effect 1  ',
						'effect02' => 'Effect 2  ',
						'effect03' => 'Effect 3  ',
						'effect04' => 'Effect 4  ',
						'effect05' => 'Effect 5  ',
						'effect06' => 'Effect 6  ',
						'effect07' => 'Effect 7  ',
						'effect08' => 'Effect 8  ',
						'effect09' => 'Effect 9  ',
						'effect10' => 'Effect 10 '
					),
					'change_elem' => '.tsvg-classic-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-effect'
				),
				'TotalSoft_GV_1_03'         => array(
					'label'       => 'Hover Color 1',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_h_c1_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_04'         => array(
					'label'       => 'Hover Color 2',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_h_c2_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_05'         => array(
					'label'       => 'Shadow Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'     => 'None ',
						'effect01' => 'Effect 1 ',
						'effect02' => 'Effect 2  ',
						'effect03' => 'Effect 3  ',
						'effect04' => 'Effect 4  ',
						'effect05' => 'Effect 5  ',
						'effect06' => 'Effect 6  ',
						'effect07' => 'Effect 7  ',
						'effect08' => 'Effect 8  ',
						'effect09' => 'Effect 9  '
					),
					'change_elem' => '.tsvg-classic-block-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-effect'
				),
				'TotalSoft_GV_1_06'         => array(
					'label'       => 'Shadow Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_sh_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_07'         => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 5
					),
					'change'       => '--tsvg_g_b_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_08'         => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_g_b_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Title Options']        = array(
				'TotalSoft_GV_1_09' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_t_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_10' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_t_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_11' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_t_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Play Icon Options']    = array(
				'TotalSoft_GV_1_12' => array(
					'label'       => 'Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-classic-icon-hover-' . $this->tsvg_build_id,
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_13' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_pi_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_14' => array(
					'label'        => 'size',
					'type'         => 'range',
					'options'      => array(
						'min' => 16,
						'max' => 72
					),
					'change'       => '--tsvg_pi_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Popup Options']        = array(
				'TotalSoft_GV_1_15' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_16' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_br_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_17' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_popup_po_br_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_18' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_popup_po_br_r_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_37' => array(
					'label'       => 'Autoplay Videos',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-classic-popup-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-autoplay'
				)
			);
			$tsvg_builder_arr['Title Popup Options '] = array(
				'TotalSoft_GV_1_19' => array(
					'label'       => 'Show',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-classic-popup-title-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-show'
				),
				'TotalSoft_GV_1_20' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_popup_to_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_21' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_to_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_22' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_to_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_23' => array(
					'label'       => 'Text Align',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-classic-popup-title-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-title'
				)
			);
			$tsvg_builder_arr['Popup Description']    = array(
				'TotalSoft_GV_1_24' => array(
					'label'       => 'Show',
					'type'        => 'input-toggle',
					'options'     => array(
						'yes' => 'true',
						'no'  => 'false'
					),
					'change_elem' => '.tsvg-classic-popup-desc-' . $this->tsvg_build_id,
					'change_attr' => 'data-show'
				)
			);
			$tsvg_builder_arr['Line After Title']     = array(
				'TotalSoft_GV_1_25' => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 100
					),
					'change'       => '--tsvg_popup_lat_w_' . $this->tsvg_build_id,
					'change_param' => '%'
				),
				'TotalSoft_GV_1_26' => array(
					'label'        => 'Height',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 5
					),
					'change'       => '--tsvg_popup_lat_h_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Style',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'   => 'None',
						'solid'  => 'Solid',
						'dotted' => 'Dotted',
						'dashed' => 'Dashed'
					),
					'change_attr' => '--tsvg_popup_lat_s_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_28' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_lat_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Close Icon']           = array(
				'TotalSoft_GV_1_29' => array(
					'label'       => 'Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-classic-popup-close-icon-' . $this->tsvg_build_id,
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_30' => array(
					'label'       => ' Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_cl_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_31' => array(
					'label'        => 'size',
					'type'         => 'range',
					'options'      => array(
						'min' => 16,
						'max' => 72
					),
					'change'       => '--tsvg_popup_cl_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_2_14" => ["label"=>"Style","type" => "select","options" => ["style01" => "Style 1 ","style02" => "Style 2 ","style03" => "Style 3 ","style04" => "Style 4 ","style05" => "Style 5 ","style06" => "Style 6 "],"change_elem"=> ".tsvg-pagination-pages-wrapper","change_attr" => "data-pagina-style"],
					"TotalSoft_GV_2_09" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_07" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_08" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_10" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_11" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_12" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_13" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_15" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_38" => ["label"=>"Pagination Icon next Type ","type" => "select-icon","change_elem" => ".tsvg-pagination-page-item-next i", "change_attr" => "class"],
					"TotalSoft_GV_2_39" => ["label"=>"Pagination Icon prev Type","type" => "select-icon","change_elem" => ".tsvg-pagination-page-item-prev i", "change_attr" => "class"],
					"TotalSoft_GV_2_17" => ["label"=>"Load More Icon Type","type" => "select-icon","change_elem" => ".btn-lg i", "change_attr" => "class"],
					"TotalSoft_GV_2_18" => ["label"=>"Load More Icon Position","type"  => "select-position-efect","options" =>["After" => "  After Text","Before" => " Before Text "],"change_elem"=> ".tsvg-pagination-pages-wrapper","change_attr" => "data-item-type"],
					"TotalSoft_GV_2_19" => ["label"=>"Animation Effect","type" => "select","options" => ["none" => "none","" => "Animate Height","fadeIn" => "Fade In ","moveUp" => "Move Up","scaleUp" => "Scale Up","fallPerspective"  => "Fall Perspective","fly"  => " Fly","flip"  => "Flip","helix" => "Helix","popUp"=> "Pop Up"],"change_elem"=> ".tsvg-main-content-".$this->tsvg_build_id,"change_attr" => "data-p-lm"]
				);
			}
			break;
		case 'Space Gallery':
			$tsvg_builder_arr['General options']  = array(
				'TotalSoft_VGallery_Set_07' => array(
					'label'       => 'open effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'      => 'none',
						'effect-1'  => 'Effect 1',
						'effect-2'  => 'Effect 2',
						'effect-3'  => 'Effect 3',
						'effect-4'  => 'Effect 4',
						'effect-5'  => 'Effect 5',
						'effect-6'  => 'Effect 6',
						'effect-7'  => 'Effect 7',
						'effect-8'  => 'Effect 8',
						'effect-9'  => 'Effect 9',
						'effect-10' => 'Effect 10'
					),
					'change_elem' => '.tsvg-main-content-' . $this->tsvg_build_id,
					'change_attr' => 'data-item-open'
				),
				'TotalSoft_GV_1_01'         => array(
					'label'       => 'Show Effect',
					'type'        => 'select-position-efect',
					'options'     => array(
						'animno'          => ' None ',
						'animsc'          => ' Scale ',
						'animtr'          => ' Move ',
						'fadeIn'          => ' Fade In  ',
						'moveUp'          => ' Move Up  ',
						'scaleUp'         => ' Scale Up ',
						'fallPerspective' => 'Fall Perspective ',
						'fly'             => 'Fly',
						'flip'            => 'Flip',
						'helix'           => 'Helix',
						'popUp'           => 'Pop Up  '
					),
					'change_elem' => '.tsvg-space-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-ef'
				),
				'TotalSoft_GV_1_02'         => array(
					'label'        => 'Column Count',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_g_c_c_' . $this->tsvg_build_id,
					'change_param' => ''
				),
				'TotalSoft_GV_1_03'         => array(
					'label'        => 'Place Between',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_g_p_b_' . $this->tsvg_build_id,
					'change_param' => 'px'
				)
			);
			$tsvg_builder_arr['Title Option']     = array(
				'TotalSoft_GV_1_04' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_t_f_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_05' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_t_f_f_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_06' => array(
					'label'       => 'Text Align',
					'type'        => 'select-position-efect',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-space-block-title-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-text-ps'
				),
				'TotalSoft_GV_1_07' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_t_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_08' => array(
					'label'       => 'Background  Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'transparent' => 'Transparent ',
						'color'       => 'Color   ',
						'gradient1'   => 'Gradient 1',
						'gradient2'   => 'Gradient 2',
						'gradient3'   => 'Gradient 3',
						'gradient4'   => 'Gradient 4',
						'gradient5'   => 'Gradient 5',
						'gradient6'   => 'Gradient 6',
						'gradient7'   => 'Gradient 7',
						'gradient8'   => 'Gradient 8',
						'gradient9'   => 'Gradient 9',
						'gradient10'  => 'Gradient 10',
						'gradient11'  => 'Gradient 11',
						'gradient12'  => 'Gradient 12',
						'gradient13'  => 'Gradient 13'
					),
					'change_elem' => '.tsvg-space-block-title-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-c'
				),
				'TotalSoft_GV_1_09' => array(
					'label'       => 'Background  Color 1',
					'type'        => 'color',
					'change_prop' => '--tsvg_t_c_1_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_10' => array(
					'label'       => 'Background  Color 2',
					'type'        => 'color',
					'change_prop' => '--tsvg_t_c_2_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup Mode']       = array(
				'TotalSoft_GV_1_12' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_p_b_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_14' => array(
					'label'       => 'Text',
					'type'        => 'text',
					'change_elem' => '.tsvg-space-block-popup-span-' . $this->tsvg_build_id . ' span',
					'change_attr' => ''
				),
				'TotalSoft_GV_1_15' => array(
					'label'       => 'Background  Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_p_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_16' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_p_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_17' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_p_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_18' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_p_f_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_19' => array(
					'label'       => 'Hover Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'none'     => ' None',
						'effect01' => 'Border Fade   ',
						'effect02' => 'Overline Grow  ',
						'effect03' => 'Background Grow   ',
						'effect04' => 'Crosshair   ',
						'effect05' => 'Brackets    ',
						'effect06' => 'Border Slides Up   ',
						'effect07' => 'Three Circles  ',
						'effect08' => 'Raise From Flat    ',
						'effect09' => 'Flatten From Raised',
						'effect10' => 'Lift Sides  ',
						'effect11' => 'Flatten Sides  ',
						'effect12' => 'Curl Right Corner  ',
						'effect13' => 'Curl Right Side    ',
						'effect14' => 'Curl Bottom Corners',
						'effect15' => 'Icon Hiding        ',
						'effect16' => 'Icon Sliding  ',
						'effect17' => 'Icon From Bottom   ',
						'effect18' => 'Icon In Center     ',
						'effect19' => 'Icon Sliding Radius'
					),
					'change_elem' => '.tsvg-space-blocks-container-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-ef'
				),
				'TotalSoft_GV_1_20' => array(
					'label'       => 'Hover Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_h_b_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_21' => array(
					'label'       => 'Hover Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_h_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_22' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-space-block-popup-icon-' . $this->tsvg_build_id,
					'change_attr' => 'class'
				),
				'TotalSoft_GV_1_23' => array(
					'label'        => 'Icon Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 32
					),
					'change'       => '--tsvg_p_i_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_24' => array(
					'label'       => 'Icon Position',
					'type'        => 'select-position-efect',
					'options'     => array(
						'after'  => 'After Text ',
						'before' => 'Before Text'
					),
					'change_elem' => '.tsvg-space-blocks-list-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-ef-i'
				)
			);
			$tsvg_builder_arr['Popup Options']    = array(
				'TotalSoft_GV_1_25' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 10
					),
					'change'       => '--tsvg_popup_po_br_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_26' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_br_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_27' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_po_bc_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Popup Title']      = array(
				'TotalSoft_GV_1_28' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 48
					),
					'change'       => '--tsvg_popup_pt_fs_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_29' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_pt_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_1_30' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_pt_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Line After Title'] = array(
				'TotalSoft_GV_1_31' => array(
					'label'        => 'Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 100
					),
					'change'       => '--tsvg_popup_lat_w_' . $this->tsvg_build_id,
					'change_param' => '%'
				),
				'TotalSoft_GV_1_32' => array(
					'label'        => 'Height',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 5
					),
					'change'       => '--tsvg_popup_lat_h_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_1_33' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_lat_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_01' => array(
					'label'       => 'Text align',
					'type'        => 'select-position',
					'options'     => array(
						'left'   => 'Left',
						'center' => 'Center',
						'right'  => 'Right'
					),
					'change_elem' => '.tsvg-space-popup-title-line-' . $this->tsvg_build_id,
					'change_attr' => 'data-tsvg-line_position'
				)
			);
			$tsvg_builder_arr['Close Icon']       = array(
				'TotalSoft_GV_2_19' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-space-popup-close-icon-' . $this->tsvg_build_id,
					'change_attr' => 'class'
				),
				'TotalSoft_GV_2_20' => array(
					'label'        => 'Icon Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 16,
						'max' => 72
					),
					'change'       => '--tsvg_popup_i_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_21' => array(
					'label'       => 'Icon Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_i_c_' . $this->tsvg_build_id
				)
			);
			$tsvg_builder_arr['Link Options']     = array(
				'TotalSoft_GV_2_02' => array(
					'label'        => 'Border Width',
					'type'         => 'range',
					'options'      => array(
						'min' => 1,
						'max' => 5
					),
					'change'       => '--tsvg_popup_l_b_w_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_03' => array(
					'label'       => 'Border Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_b_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_04' => array(
					'label'        => 'Border Radius',
					'type'         => 'range',
					'options'      => array(
						'min' => 0,
						'max' => 20
					),
					'change'       => '--tsvg_popup_l_b_r_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_05' => array(
					'label'       => 'Link Text',
					'type'        => 'text',
					'change_elem' => '.tsvg-space-popup-link-' . $this->tsvg_build_id . ' span',
					'change_attr' => ''
				),
				'TotalSoft_GV_2_06' => array(
					'label'       => 'Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_bc_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_07' => array(
					'label'       => 'Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_cl_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_08' => array(
					'label'       => 'Position Type',
					'type'        => 'select-position-efect',
					'options'     => array(
						'beforetitle' => 'Before Title',
						'aftertitle'  => 'After Title ',
						'afterline'   => 'After Line  ',
						'afterdesc'   => 'After Description '
					),
					'change_elem' => '.tsvg-space-popup-box-info-' . $this->tsvg_build_id,
					'change_attr' => 'data-position'
				),
				'TotalSoft_GV_2_09' => array(
					'label'       => 'Alignment',
					'type'        => 'select-position-efect',
					'options'     => array(
						'left'   => 'Left  ',
						'right'  => 'Right ',
						'center' => 'Center',
						'full'   => ' Full '
					),
					'change_elem' => '.tsvg-space-popup-box-info-' . $this->tsvg_build_id,
					'change_attr' => 'data-position-link'
				),
				'TotalSoft_GV_2_10' => array(
					'label'       => 'Font family',
					'type'        => 'select',
					'options'     => $tsvg_font_families,
					'change_attr' => '--tsvg_popup_l_ff_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_11' => array(
					'label'        => 'Font Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 36
					),
					'change'       => '--tsvg_popup_l_f_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_12' => array(
					'label'       => 'Hover Background Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_h_bc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_13' => array(
					'label'       => 'Hover Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_h_cl_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_14' => array(
					'label'       => 'Icon Type',
					'type'        => 'select-icon',
					'change_elem' => '.tsvg-space-popup-link-icon-' . $this->tsvg_build_id,
					'change_attr' => 'class'
				),
				'TotalSoft_GV_2_15' => array(
					'label'        => 'Icon Size',
					'type'         => 'range',
					'options'      => array(
						'min' => 8,
						'max' => 72
					),
					'change'       => '--tsvg_popup_l_i_s_' . $this->tsvg_build_id,
					'change_param' => 'px'
				),
				'TotalSoft_GV_2_16' => array(
					'label'       => 'Icon Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_i_c_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_17' => array(
					'label'       => 'Icon Hover Color',
					'type'        => 'color',
					'change_prop' => '--tsvg_popup_l_i_hc_' . $this->tsvg_build_id
				),
				'TotalSoft_GV_2_18' => array(
					'label'       => 'Icon Position',
					'type'        => 'select-position-efect',
					'options'     => array(
						'after'  => 'After ',
						'before' => 'Before'
					),
					'change_elem' => '.tsvg-space-popup-link-' . $this->tsvg_build_id,
					'change_attr' => 'data-position'
				)
			);
			if($this->tsvg_build_proporties['TS_VG_Old_User']=='yes'){
				unset($tsvg_builder_arr['General options']['TotalSoft_VGallery_Set_07']);
				$tsvg_builder_arr["Pagination & Load More"] = array(
					"TotalSoft_GV_2_22" => ["label"=>"Style","type" => "select","options" => ["style01" => "Style 1 ","style02" => "Style 2 ","style03" => "Style 3 ","style04" => "Style 4 ","style05" => "Style 5 ","style06" => "Style 6 "],"change_elem"=> ".tsvg-pagination-pages-wrapper","change_attr" => "data-pagina-style"],
					"TotalSoft_GV_2_23" => ["label"=>"Font Size","type" => "range","options" => ["min" => 8,"max" => 48],"change" => "--tsvg_p_lm_fs_".$this->tsvg_build_id,"change_param" => "px"],
					"TotalSoft_GV_2_24" => ["label"=>"Background Color","type" => "color","change_prop" => "--tsvg_p_lm_bc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_25" => ["label"=>"Color","type" => "color","change_prop" => "--tsvg_p_lm_c_".$this->tsvg_build_id],
					"TotalSoft_GV_2_26" => ["label"=>"Current Background Color","type" => "color","change_prop" => "--tsvg_p_lm_cbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_27" => ["label"=>"Current Color","type" => "color","change_prop" => "--tsvg_p_lm_cc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_28" => ["label"=>"Hover Background Color","type" => "color","change_prop" => "--tsvg_p_lm_hbc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_29" => ["label"=>"Hover Color","type" => "color","change_prop" => "--tsvg_p_lm_hc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_30" => ["label"=>"Border Color","type" => "color","change_prop" => "--tsvg_p_lm__bdc_".$this->tsvg_build_id],
					"TotalSoft_GV_2_38" => ["label"=>"Pagination Icon next Type ","type" => "select-icon","change_elem" => ".tsvg-pagination-page-item-next i", "change_attr" => "class"],
					"TotalSoft_GV_2_39" => ["label"=>"Pagination Icon prev Type","type" => "select-icon","change_elem" => ".tsvg-pagination-page-item-prev i", "change_attr" => "class"],     
					"TotalSoft_GV_2_32" => ["label"=>"Load More Icon Type","type" => "select-icon","change_elem" => ".btn-lg i", "change_attr" => "class"],
					"TotalSoft_GV_2_33" => ["label"=>"Load More Icon Position","type"  => "select-position-efect","options" =>["After" => "  After Text","Before" => " Before Text "],"change_elem"=> ".tsvg-pagination-pages-wrapper","change_attr" => "data-item-type"]
				);
			}else{
				unset($tsvg_builder_arr['General options']['TotalSoft_GV_1_01']);
			}
			break;
	} ?>
	<div class="tsvg_content tsvg_flex_row active" data-tsvg-section="field_style">
		<div class="tsvg_preview_content">
			<div class="tsvg_preview_content_sizes tsvg_flex_row">
				<div data-tsvg-size="desktop" class="tsvg_flex_col tsvg_preview_content_size tsvg_preview_content_size_active ">
					<img data-tsvg-size="desktop" src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/desktop.svg' ); ?>" alt="desktop">
				</div>
				<div data-tsvg-size="tablet" class="tsvg_flex_col tsvg_preview_content_size ">
					<img data-tsvg-size="tablet" src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/tablet.svg' ); ?>" alt="tablet">
				</div>
				<div data-tsvg-size="mobile" class="tsvg_flex_col tsvg_preview_content_size ">
					<img data-tsvg-size="mobile" src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/mobile.svg' ); ?>" alt="mobile">
				</div>
			</div>
			<div class="tsvg_preview_content_shortcode">
				<div class="tsvg_preview_content_shortcode_inner">
					<?php
						echo do_shortcode( sprintf( '[TS_Video_Gallery id="%s" edit="true"]', esc_attr( $this->tsvg_build_id ) ) );
						$tsvg_builder_params = $this->tsvg_build_proporties;
					?>
				</div>
			</div>
		</div> 
		<div class="tsvg_flex_col tsvg_content_subsection active" data-tsvg-subsection="field">
			<main class="tsvg_content_fields_menu">
				<div aria-tsvg-use="field" class="tsvg_flex_col active">
					<div class="tsvg-list tsvg_flex_col" id="tsvg-list" >
					<?php
						$tsvg_sort_order = explode( ',', $tsvg_builder_params['TS_VG_Sort'] );
						uksort(
							$tsvg_builder_params['tsvg_video_records'],
							function( $x, $y ) use ( $tsvg_sort_order ) {
								if ( (int) array_search( $x, $tsvg_sort_order ) == (int) array_search( $y, $tsvg_sort_order ) ) {
									return 0;
								}
								return ( (int) array_search( $x, $tsvg_sort_order ) < (int) array_search( $y, $tsvg_sort_order ) ) ? -1 : 1;
							}
						);
						foreach ( $tsvg_builder_params['tsvg_video_records'] as $key => $value ) :
								?>
							<div class="tsvg-list-item" aria-tsvg-video="<?php esc_attr_e( $value['id'] ); ?>">
								<div class="tsvg_handle_list tsvg_list_action flex-center">
									<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/move.svg' ); ?>">
								</div>
								<div class="details tsvg_analytics_flex_r">
									<h2><?php esc_attr_e( $value['TS_VG_SetName'] ); ?></h2>
								</div>
								<div class="tsvg_list_action flex-center" data-tsvg-action="edit">
									<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/edit.svg' ); ?>">
								</div>
								<div class="tsvg_list_action flex-center" data-tsvg-action="copy">
									<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/copy.svg' ); ?>">
								</div>
								<div class="tsvg_list_action flex-center" data-tsvg-action="delete">
									<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'img/recycle.svg' ); ?>">
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="tsvg-add_video-div tsvg_flex_row">
						<div id="tsvg-add_video">
							<span class="tsvg-add_video_text">
								<span></span>
								Add video
							</span>
							<span class="right ts-vgallery ts-vgallery-plus"></span>
						</div>
					</div>
				</div>
			</main>
			<main class="tsvg_content_fields_edit " style="display:none;" >
				<div class="tsvg_back_to_videos tsvg_flex_row ts-vgallery ts-vgallery-home">
					Back to video
				</div>
				<div class="tsvg_TS_VG_Optionss">
					<div class="tsvg_select_div_edit">
						<span class="tsvg_select_div_title tsvg_field_title">
							Add title
						</span>
						<input id="tsvg_TS_VG_SetName" name="tsvg_TS_VG_SetName" type="text"  value="" placeholder="Add title"/>
					</div>
					<?php
						$tsvg_elem    = 'tsvg_content_area';
						$tsvg_content = '';
						$tsvg_args    = array(
							'tinymce'       => array(
								'toolbar1'         => 'formatselect, fontselect, fontsizeselect, image, media, code,  bold, italic, underline, blockquote, bullist, numlist, alignleft ,aligncenter, alignright, wp_more, fullscreen, strikethrough, hr, forecolor,backcolor , pastetext, removeformat, charmap, outdent, indent, undo, redo',
								'fontsize_formats' => '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
								'font_formats'     => 'Arial = arial; Arial Black = arial black; alibri = calibri; alibri Light = calibri light; Calisto MT = calisto mt; Cambria = cambria; Century Gothic = century gothic; Comic Sans MS = comic sans ms; onsolas = consolas; Constantia = constantia; Copperplate Gothic = copperplate gothic; Copperplate Gothic Light = copperplate gothic light; orbel = corbel; Courier New = courier new; Ebrima = ebrima; abriola = gabriola; adugi = gadugi; Georgia = georgia; mpact = impact; Leelawadee = leelawadee; ucida Console = lucida console; Microsoft Himalaya = microsoft himalaya; icrosoft JhengHei = microsoft jhenghei; Microsoft New Tai Lue = microsoft new tai lue; icrosoft PhagsPa = microsoft phagspa; Microsoft Sans Serif = microsoft sans serif; icrosoft Tai Le = microsoft tai le; icrosoft Uighur = microsoft uighur; icrosoft YaHei = microsoft yahei; icrosoft YaHei UI = microsoft yahei ui; Microsoft Yi Baiti = microsoft yi baiti; iriam = miriam; Mongolian Baiti = mongolian baiti; MS UI Gothic = ms ui gothic; V Boli = mv boli; yanmar Text = myanmar text; arkisim = narkisim; SimSun = nsimsun; yala = nyala; alatino Linotype = palatino linotype; egoe Print = segoe print; egoe Script = segoe script; egoe UI Symbol = segoe ui symbol; SimSun = simsun; ylfaen = sylfaen; ahoma = tahoma; rebuchet MS = trebuchet ms '
							),
							'quicktags'     => false,
							'media_buttons' => false
						);
						wp_editor( $tsvg_content, $tsvg_elem, $tsvg_args );
					?>
					<div class="tsvg_select_div_edit">
						<span class="tsvg_select_div_link tsvg_field_link">
							Target link
						</span>
						<input id="tsvg_video_link" name="tsvg_video_link" type="text"  value="" placeholder="Target link"/>
					</div>
					<div class="tsvg_color_div_edit">
						<label class="tsvg_color_label" for="tsvg_video_Video_ONT">New Tab</label>
						<input  type="checkbox" id="tsvg_video_Video_ONT" name="tsvg_video_Video_ONT"  value=""  data-tsvg-change=""/>
					</div> 
					<?php
						echo sprintf(
							'
							<div class="tsvg_video_div_edit">
								<span class="tsvg_field_title">Add video</span>
								<div class="tsvg_vd_change">
									<img src="%1$s" style="display:none;">
									<div class="tsvg_vd_hover_div">
										<span>Choose video</span>
										<input type="text"  id="tsvg_video_video_attachment_id" style="display:none;">
									</div>
									<div class="tsvg_vd_loading_div tsvg_flex_col"  style="display:none;">
										<img src="%2$s" >
									</div>
								</div>
							</div>
							<div class="tsvg_img_div_edit">
								<span class="tsvg_field_title">Add Image</span>
								<div class="tsvg_img_change">
									<img src="%3$s">
									<div class="tsvg_img_hover_div">
										<span>Choose image</span>
										<input type="text"  id="tsvg_video_attachment_id" style="display:none;">
									</div>
									<div class="tsvg_img_loading_div tsvg_flex_col"  style="display:none;">
										<img src="%4$s" >
									</div>
								</div>
							</div>
							',
							esc_url( plugin_dir_url( __DIR__ ) . 'public/img/tsvg_no_video.png' ),
							esc_url( plugin_dir_url( __DIR__ ) . 'public/img/tsvg_loading.gif' ),
							esc_url( plugin_dir_url( __DIR__ ) . 'public/img/tsvg_no_img.jpg' ),
							esc_url( plugin_dir_url( __DIR__ ) . 'public/img/tsvg_loading.gif' )
						);
					?>
				</div>
			</main>
		</div>
		<div class="tsvg_flex_col tsvg_content_subsection" data-tsvg-subsection="style">
			<div class="tsvg_styles_sidebar">
				<?php
					$tsvg_builder_styles_base_keys  = array_keys( $tsvg_builder_styles_base );
					$tsvg_builder_styles_base_count = count( $tsvg_builder_styles_base_keys );
					$tsvg_builder_styles_base       = array_merge( $tsvg_builder_styles_base, $tsvg_builder_settings_base );
					foreach ( $tsvg_builder_arr as $fields_key => $fields_value ) {
						if ( count( array_diff( $tsvg_builder_styles_base_keys, array_keys( $tsvg_builder_arr[ $fields_key ] ) ) ) == $tsvg_builder_styles_base_count ) {
							continue;
						}
						$tsvg_get_fields_html = "";
						foreach ( $fields_value as $key => $value ) {
							if ( array_key_exists( $key, $tsvg_builder_styles_base ) ) {
								$tsvg_get_fields_html .= $this->tsvg_get_field_html( $key, $value, strval( $tsvg_builder_styles_base[ $key ] ) );
							} elseif ( $key == 'TotalSoftvgallery_Q_Im' || $key == 'TotalSoftvgallery_Q_Vd' ) {
								$tsvg_get_fields_html .= $this->tsvg_get_field_html( $key, $value, $tsvg_builder_param_base[ $key ] );
							}
						}
						echo sprintf(
							'
							<div class="tsvg_accordion_item %1$s">
								<header class="tsvg_accordion_header ">
									<i class="ts-vgallery ts-vgallery-angle-right tsvg_accordion_header_icon"></i>
									<h3 class="tsvg_accordion_header_title">%2$s</h3>
								</header>
								<div class="tsvg_accordion_item_content">
									<div class="tsvg_accordion_items tsvg_analytics_flex_c">
										%3$s
									</div>
								</div>
							</div>	
							',
							esc_attr( str_replace( ' ', '-', strtolower( $fields_key ) ) ),
							esc_attr( $fields_key ),
							$tsvg_get_fields_html
						);
					}
				?>
			</div>
		</div>
		<div class="tsvg_flex_col  tsvg_content_subsection" data-tsvg-subsection="pagination">
			<div class="tsvg_styles_sidebar">
				<?php
					foreach ( $tsvg_pagination_arr as $fields_key => $fields_value ) {
						$tsvg_get_fields_html = "";
						foreach ( $fields_value as $key => $value ) {
							if ( array_key_exists( $key, $tsvg_builder_settings_base ) ) {
								$tsvg_get_fields_html .= $this->tsvg_get_field_html( $key, $value, $tsvg_builder_settings_base[ $key ] );
							}
						}
						foreach ( $fields_value as $key => $value ) {
							if ( array_key_exists( $key, $tsvg_builder_pagination_base ) ) {
								$tsvg_get_fields_html .= $this->tsvg_get_field_html( $key, $value, $tsvg_builder_pagination_base[ $key ] );
							}
						}
						echo sprintf(
							'
							<div class="tsvg_accordion_item %1$s">
								<header class="tsvg_accordion_header ">
									<i class="ts-vgallery ts-vgallery-angle-right tsvg_accordion_header_icon"></i>
									<h3 class="tsvg_accordion_header_title">%2$s</h3>
								</header>
								<div class="tsvg_accordion_item_content">
									<div class="tsvg_accordion_items tsvg_analytics_flex_c">
										%3$s
									</div>
								</div>
							</div>	
							',
							esc_attr( str_replace( ' ', '-', strtolower( $fields_key ) ) ),
							esc_attr( $fields_key ),
							$tsvg_get_fields_html
						);
					}
				?>
			</div>
		</div>
		<div class="tsvg_flex_col tsvg_content_subsection" data-tsvg-subsection="shortcode">
			<div class="tsvg_flex_col" data-tsvg-field="shortcode" >
				<p>Copy & paste the shortcode directly into any WordPress post or page.</p>
				<div class="tsvg_flex_row tsvg_shortcode_div">
					<input type="text" id="tsvg_global_shortcode" disabled="">
					<span class="ts-vgallery ts-vgallery-files-o" data-tsvg-copy="tsvg_global_shortcode"></span>
				</div>
			</div>
			<div class="tsvg_flex_col" data-tsvg-field="shortcode" >
				<p>Copy & paste this code into a template file to include the video gallery within your theme.</p>
				<div class="tsvg_flex_row tsvg_shortcode_div">
					<input type="text" id="tsvg_global_theme_shortcode" disabled="">
					<span class="ts-vgallery ts-vgallery-files-o" data-tsvg-copy="tsvg_global_theme_shortcode"></span>
				</div>
			</div>
			<div class="tsvg_flex_col" data-tsvg-field="notice" >
				<div class="tsvg_notice_div">
					<p>Please save gallery for getting shortcode.</p>
				</div>
			</div>
			<div class="tsvg_flex_col" data-tsvg-field="title" >
				<p>Video gallery title</p>
				<div class="tsvg_flex_row tsvg_shortcode_div">
					<input type="text" id="tsvg_global_title" value="<?php echo esc_html( html_entity_decode( htmlspecialchars_decode( $this->tsvg_build_proporties['TS_VG_Title'] ), ENT_QUOTES ) ); ?>">
				</div>
			</div>
		</div>
	</div>   
	<?php 
}
$tsvg_content_builder = ob_get_clean();
$tsvg_icons_html = $tsvg_icon_picker_html = '';
if ( $this->tsvg_build == 'edit' ) {
	foreach ( $tsvg_all_fonts_arr['tsvg_fonts'] as $key => $value ) {
		foreach ( $value as $icon_key => $icon_value ) {
			$tsvg_icons_html .= sprintf(
				'
        		<div class="ts-vgallery-aim-icon-item" data-library-id="%1$s" data-filter="%2$s">
        		  	<div class="ts-vgallery-aim-icon-item-inner">
        		  	  	<i class="%3$s"></i>
        		  	  	<div class="ts-vgallery-aim-icon-item-name" title="%4$s">%4$s</div>
        		  	</div>
        		</div>
        		',
				$key == 'tsvg_emojies' ? esc_attr( 'ts-vgallery-emoji-regular' ) : esc_attr( 'ts-vgallery-regular' ),
				$key == 'tsvg_emojies' ? esc_attr( str_replace( 'ts-vgallery-emoji ts-vgallery-emoji-', '', $icon_value ) ) : esc_attr( str_replace( 'ts-vgallery ts-vgallery-', '', $icon_value ) ),
				esc_attr( $icon_value ),
				$key == 'tsvg_emojies' ? esc_attr( str_replace( '-', ' ', str_replace( 'ts-vgallery-emoji ts-vgallery-emoji-', '', $icon_value ) ) ) : esc_attr( str_replace( '-', ' ', str_replace( 'ts-vgallery ts-vgallery-', '', $icon_value ) ) )
			);
		}
	}
	$tsvg_icon_picker_html  = sprintf(
		'
		<div class="ts-vgallery-aim-modal" id="ts-vgallery-aim-modal" style="display:none;">
			<div class="ts-vgallery-aim-modal--content">
				<div class="ts-vgallery-aim-modal--header">
					<div class="ts-vgallery-aim-modal--header-logo-area">
						<span class="ts-vgallery-aim-modal--header-logo-title">
							Aesthetic Icon Picker
						</span>
					</div>
					<div class="ts-vgallery-aim-modal--header-close-btn">
						<i class="ts-vgallery-fas ts-vgallery-times" title="Close"></i>
					</div>
				</div>
				<div class="ts-vgallery-aim-modal--body">
					<div id="ts-vgallery-aim-modal--sidebar" class="ts-vgallery-aim-modal--sidebar">
						<div class="ts-vgallery-aim-modal--sidebar-tabs">
							<div class="ts-vgallery-aim-modal--sidebar-tab-item aesthetic-active" data-library-id="all">
								<i class="ts-vgallery ts-vgallery-star"></i>
								all
							</div>
							<div class="ts-vgallery-aim-modal--sidebar-tab-item" data-library-id="ts-vgallery-regular">
								<i class="ts-vgallery ts-vgallery-font-awesome"></i>
								font awesome
							</div>
							<div class="ts-vgallery-aim-modal--sidebar-tab-item" data-library-id="ts-vgallery-emoji-regular">
								<i class="ts-vgallery-emoji ts-vgallery-emoji-grinning"></i>
								emojies
							</div>
						</div>
					</div>
					<div id="ts-vgallery-aim-modal--icon-preview-wrap" class="ts-vgallery-aim-modal--icon-preview-wrap">
						<div class="ts-vgallery-aim-modal--icon-search">
							<input type="text" id="ts-vgallery-aim-modal--search_input"  placeholder="Filter by name...">
							<i class="ts-vgallery-fas ts-vgallery-search"></i>
						</div>
						<div class="ts-vgallery-aim-modal--icon-preview-inner">
							<div id="ts-vgallery-aim-modal--icon-preview">
								%s
							</div>
						</div>
					</div>
				</div>
				<div class="ts-vgallery-aim-modal--footer">
					<button class="ts-vgallery-aim-insert-icon-button" id="ts-vgallery-aim-insert-icon-button">
						Select
					</button>
				</div>
			</div>
		</div>
		',
		$tsvg_icons_html
	);
	$tsvg_font_families_css = '';
	foreach ( $tsvg_all_fonts_arr['tsvg_font_families'] as $key => $value ) {
		$tsvg_font_params = $value;
		$tsvg_font_families_css .= sprintf(
			'
        	@font-face {
        	  font-family: "%1$s";
        	  font-style: normal;
        	  font-weight: 400;
        	  src: url("%2$s"); 
        	  src: url("%3$s") format("embedded-opentype"), 
        	       url("%4$s") format("woff2"), 
        	       url("%5$s") format("woff"), 
        	       url("%6$s") format("truetype"), 
        	       url("%7$s") format("svg");
        	}
      		',
			esc_attr( $key ),
			array_key_exists( 'eot', $tsvg_font_params ) ? esc_url( $tsvg_font_params['eot'] ) : '',
			array_key_exists( 'eot', $tsvg_font_params ) ? esc_url( $tsvg_font_params['eot'] ) : '',
			array_key_exists( 'woff2', $tsvg_font_params ) ? esc_url( $tsvg_font_params['woff2'] ) : '',
			array_key_exists( 'woff', $tsvg_font_params ) ? esc_url( $tsvg_font_params['woff'] ) : '',
			array_key_exists( 'ttf', $tsvg_font_params ) ? esc_url( $tsvg_font_params['ttf'] ) : '',
			array_key_exists( 'svg', $tsvg_font_params ) ? esc_url( $tsvg_font_params['svg'] ) : ''
		);
	}
	echo sprintf(
		'
    	<style id="tsvg_all_styles">
    	   %1$s 
    	</style>
  		',
		$tsvg_font_families_css
	);
}
echo sprintf(
    '
    <section id="tsvg_builder_section" class="tsvg_flex_row" style="display:none;">
        <aside id="tsvg_sidebar" class="tsvg_flex_col tsvg_sidebar" data-tsvg-use="%1$s" data-tsvg-open="open">
            <div class="ts_video_gallery_logo tsvg_flex_col">
                <img src="%2$s"  alt="TS Video Gallery Logo">
            </div>
            <div class="tsvg_sidebar_item %3$s" data-tsvg-item="theme">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 20 20" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m24 10h-24v-5a5.006 5.006 0 0 1 5-5h5v3a1 1 0 0 0 2 0v-3h2v5a1 1 0 0 0 2 0v-5h2v7a1 1 0 0 0 2 0v-6.9a5.009 5.009 0 0 1 4 4.9zm-23.7 2a7.011 7.011 0 0 0 6.7 5h2v4a3 3 0 0 0 6 0v-4h2a7.011 7.011 0 0 0 6.7-5z" fill="#8c8c8c" data-original="#000000"/></g></svg>
                <span class="tsvg_sidebar_item_title">Theme</span>  
            </div>
            <div class="tsvg_sidebar_item %4$s" data-tsvg-item="field">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 20 20" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m21 17h-11v2a1 1 0 0 1 -2 0v-2h-2v2a1 1 0 0 1 -2 0v-2h-1a3 3 0 0 0 0 6h18a3 3 0 0 0 0-6z" fill="#8c8c8c" data-original="#000000"/><path xmlns="http://www.w3.org/2000/svg" d="m21 9h-11v2a1 1 0 0 1 -2 0v-2h-2v2a1 1 0 0 1 -2 0v-2h-1a3 3 0 0 0 0 6h18a3 3 0 0 0 0-6z" fill="#8c8c8c" data-original="#000000"/><path xmlns="http://www.w3.org/2000/svg" d="m21 1h-11v2a1 1 0 0 1 -2 0v-2h-2v2a1 1 0 0 1 -2 0v-2h-1a3 3 0 0 0 0 6h18a3 3 0 0 0 0-6z" fill="#8c8c8c" data-original="#000000"/></g></svg>
                <span class="tsvg_sidebar_item_title">Fields</span>  
            </div>
            <div class="tsvg_sidebar_item" data-tsvg-item="style">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512.051 512.051" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg">	<path d="M21.359,101.359h58.368c11.52,42.386,55.219,67.408,97.605,55.888c27.223-7.399,48.489-28.665,55.888-55.888h257.472   c11.782,0,21.333-9.551,21.333-21.333s-9.551-21.333-21.333-21.333H233.22C221.7,16.306,178.001-8.716,135.615,2.804   c-27.223,7.399-48.489,28.665-55.888,55.888H21.359c-11.782,0-21.333,9.551-21.333,21.333S9.577,101.359,21.359,101.359z" fill="#8c8c8c" data-original="#000000"/>	<path d="M490.692,234.692h-58.368c-11.497-42.38-55.172-67.416-97.552-55.92c-27.245,7.391-48.529,28.674-55.92,55.92H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h257.493c11.497,42.38,55.172,67.416,97.552,55.92   c27.245-7.391,48.529-28.674,55.92-55.92h58.368c11.782,0,21.333-9.551,21.333-21.333   C512.025,244.243,502.474,234.692,490.692,234.692z" fill="#8c8c8c" data-original="#000000"/>	<path d="M490.692,410.692H233.22c-11.52-42.386-55.219-67.408-97.605-55.888c-27.223,7.399-48.489,28.665-55.888,55.888H21.359   c-11.782,0-21.333,9.551-21.333,21.333c0,11.782,9.551,21.333,21.333,21.333h58.368c11.52,42.386,55.219,67.408,97.605,55.888   c27.223-7.399,48.489-28.665,55.888-55.888h257.472c11.782,0,21.333-9.551,21.333-21.333   C512.025,420.243,502.474,410.692,490.692,410.692z" fill="#8c8c8c" data-original="#000000"/></g></g></svg>
                <span class="tsvg_sidebar_item_title">Styles</span>  
            </div>
            <div class="tsvg_sidebar_item" data-tsvg-item="pagination">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%%,54.901961%%,54.901961%%);fill-opacity:1;" d="M 18.789062 5.910156 C 18.421875 5.652344 17.945312 6.152344 18.222656 6.507812 C 19.011719 7.566406 20.015625 8.390625 20.925781 9.289062 C 21.734375 10.121094 22.722656 10.984375 22.808594 12.171875 C 22.816406 14.019531 20.660156 15.046875 19.4375 16.128906 C 19.117188 16.390625 18.792969 16.675781 18.5 16.972656 C 18.25 17.285156 17.601562 17.707031 18.023438 18.125 C 18.324219 18.386719 18.621094 18.109375 18.800781 17.859375 C 18.945312 17.699219 19.121094 17.519531 19.28125 17.375 C 20.359375 16.394531 21.683594 15.695312 22.742188 14.679688 C 26.210938 11.179688 21.714844 7.703125 18.789062 5.910156 Z M 18.789062 5.910156 "/><path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%%,54.901961%%,54.901961%%);fill-opacity:1;" d="M 5.539062 17.421875 L 5.5 17.386719 C 5.5 17.386719 4.101562 16.089844 4.101562 16.089844 C 3.070312 15.015625 1.160156 13.648438 1.164062 12.054688 C 1.464844 10.335938 4.339844 8.050781 5.425781 6.441406 C 5.707031 6.097656 5.253906 5.589844 4.875 5.832031 C 3.5625 6.664062 2.390625 7.683594 1.378906 8.863281 C -2.269531 13.09375 2.164062 15.257812 4.980469 18.027344 C 5.367188 18.394531 5.933594 17.773438 5.539062 17.421875 Z M 5.539062 17.421875 "/><path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%%,54.901961%%,54.901961%%);fill-opacity:1;" d="M 12.667969 11.226562 C 11.398438 10.285156 9.703125 11.632812 10.9375 12.917969 C 11.242188 13.203125 11.675781 13.289062 12.078125 13.238281 C 13.117188 13.179688 13.460938 11.839844 12.667969 11.226562 Z M 12.667969 11.226562 "/><path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%%,54.901961%%,54.901961%%);fill-opacity:1;" d="M 14.636719 12.476562 C 15.167969 13.890625 17.238281 13.25 17.058594 11.789062 C 16.804688 9.984375 14.121094 10.839844 14.636719 12.476562 Z M 14.636719 12.476562 "/><path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%%,54.901961%%,54.901961%%);fill-opacity:1;" d="M 6.839844 12.777344 C 7.8125 13.617188 9.339844 12.660156 8.769531 11.410156 C 7.828125 9.640625 5.417969 11.21875 6.839844 12.777344 Z M 6.839844 12.777344 "/></g></g></svg>
                <span class="tsvg_sidebar_item_title">Pagination & Load More</span>  
            </div>
            <div class="tsvg_sidebar_item" data-tsvg-item="shortcode">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g id="surface1"><path style="fill-rule:nonzero;fill:rgb(54.901961%%,54.901961%%,54.901961%%);fill-opacity:1;stroke-width:25;stroke-linecap:butt;stroke-linejoin:round;stroke:rgb(54.901961%%,54.901961%%,54.901961%%);stroke-opacity:1;stroke-miterlimit:10;" d="M 42.368475 56.519248 L 42.368475 169.480752 C 42.368475 177.310574 48.689426 183.631525 56.519248 183.631525 L 84.739234 183.631525 C 87.349175 183.631525 89.469752 185.752102 89.469752 188.321262 C 89.469752 190.931203 87.349175 193.05178 84.739234 193.05178 L 56.519248 193.05178 C 43.510324 193.011 32.989 182.489676 32.94822 169.480752 L 32.94822 56.519248 C 32.989 43.510324 43.510324 32.989 56.519248 32.94822 L 84.739234 32.94822 C 87.349175 32.94822 89.469752 35.068797 89.469752 37.678738 C 89.469752 40.247898 87.349175 42.368475 84.739234 42.368475 L 56.519248 42.368475 C 48.689426 42.368475 42.368475 48.689426 42.368475 56.519248 Z M 183.631525 169.480752 L 183.631525 56.519248 C 183.631525 48.689426 177.310574 42.368475 169.480752 42.368475 L 141.260766 42.368475 C 138.650825 42.368475 136.530248 40.247898 136.530248 37.678738 C 136.530248 35.068797 138.650825 32.94822 141.260766 32.94822 L 169.480752 32.94822 C 182.489676 32.989 193.011 43.510324 193.05178 56.519248 L 193.05178 169.480752 C 193.011 182.489676 182.489676 193.011 169.480752 193.05178 L 141.260766 193.05178 C 138.650825 193.05178 136.530248 190.931203 136.530248 188.321262 C 136.530248 185.752102 138.650825 183.631525 141.260766 183.631525 L 169.480752 183.631525 C 177.310574 183.631525 183.631525 177.310574 183.631525 169.480752 Z M 183.631525 169.480752 " transform="matrix(0.0957876,0,0,0.0957876,1.176,1.176)"/><path style=" stroke:none;fill-rule:nonzero;fill:rgb(54.901961%%,54.901961%%,54.901961%%);fill-opacity:1;" d="M 5.234375 6.589844 L 5.234375 17.410156 C 5.234375 18.160156 5.839844 18.765625 6.589844 18.765625 L 9.292969 18.765625 C 9.542969 18.765625 9.746094 18.96875 9.746094 19.214844 C 9.746094 19.464844 9.542969 19.667969 9.292969 19.667969 L 6.589844 19.667969 C 5.34375 19.664062 4.335938 18.65625 4.332031 17.410156 L 4.332031 6.589844 C 4.335938 5.34375 5.34375 4.335938 6.589844 4.332031 L 9.292969 4.332031 C 9.542969 4.332031 9.746094 4.535156 9.746094 4.785156 C 9.746094 5.03125 9.542969 5.234375 9.292969 5.234375 L 6.589844 5.234375 C 5.839844 5.234375 5.234375 5.839844 5.234375 6.589844 Z M 17.410156 18.765625 L 14.707031 18.765625 C 14.457031 18.765625 14.253906 18.96875 14.253906 19.214844 C 14.253906 19.464844 14.457031 19.667969 14.707031 19.667969 L 17.410156 19.667969 C 18.65625 19.664062 19.664062 18.65625 19.667969 17.410156 L 19.667969 6.589844 C 19.664062 5.34375 18.65625 4.335938 17.410156 4.332031 L 14.707031 4.332031 C 14.457031 4.332031 14.253906 4.535156 14.253906 4.785156 C 14.253906 5.03125 14.457031 5.234375 14.707031 5.234375 L 17.410156 5.234375 C 18.160156 5.234375 18.765625 5.839844 18.765625 6.589844 L 18.765625 17.410156 C 18.765625 18.160156 18.160156 18.765625 17.410156 18.765625 Z M 17.410156 18.765625 "/></g></svg>
                <span class="tsvg_sidebar_item_title">Shortcode</span>  
            </div>
            <a href="%5$s" class="tsvg_sidebar_item"  target="_blank">
                <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" viewBox="0 0 576 512" ><path fill="#8c8c8c" d="M576 216v16c0 13.255-10.745 24-24 24h-8l-26.113 182.788C514.509 462.435 494.257 480 470.37 480H105.63c-23.887 0-44.139-17.565-47.518-41.212L32 256h-8c-13.255 0-24-10.745-24-24v-16c0-13.255 10.745-24 24-24h67.341l106.78-146.821c10.395-14.292 30.407-17.453 44.701-7.058 14.293 10.395 17.453 30.408 7.058 44.701L170.477 192h235.046L326.12 82.821c-10.395-14.292-7.234-34.306 7.059-44.701 14.291-10.395 34.306-7.235 44.701 7.058L484.659 192H552c13.255 0 24 10.745 24 24zM312 392V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm112 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24zm-224 0V280c0-13.255-10.745-24-24-24s-24 10.745-24 24v112c0 13.255 10.745 24 24 24s24-10.745 24-24z"></path></svg>      
                <span class="tsvg_sidebar_item_title">Go pro</span>  
            </a>
            <a href="%6$s" class="tsvg_sidebar_item" data-tsvg-item="contactus" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 30 30" version="1.1"><g id="surface1"><path style="fill-rule:nonzero;fill:#8c8c8c;fill-opacity:1;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke:#8c8c8c;stroke-opacity:1;stroke-miterlimit:4;" d="M 18 3.375 C 15.7 3.375 13.76875 4.975 13.2625 7.125 L 3 7.125 C 1.965625 7.125 1.125 7.965625 1.125 9 L 1.125 18.75 C 1.125 19.784375 1.965625 20.625 3 20.625 L 16.5 20.625 C 17.534375 20.625 18.375 19.784375 18.375 18.75 L 18.375 13.125 L 19.125 13.125 L 19.125 12.375 L 18 12.375 C 15.725 12.375 13.875 10.525 13.875 8.25 C 13.875 5.975 15.725 4.125 18 4.125 C 20.275 4.125 22.125 5.975 22.125 8.25 L 22.125 9.375 C 22.125 9.7875 21.7875 10.125 21.375 10.125 C 20.9625 10.125 20.625 9.7875 20.625 9.375 L 20.625 8.25 C 20.625 6.80625 19.44375 5.625 18 5.625 C 16.55625 5.625 15.375 6.80625 15.375 8.25 C 15.375 9.69375 16.55625 10.875 18 10.875 C 18.796875 10.875 19.5125 10.51875 19.99375 9.95625 C 20.21875 10.49375 20.753125 10.875 21.375 10.875 C 22.203125 10.875 22.875 10.203125 22.875 9.375 L 22.875 8.25 C 22.875 5.5625 20.6875 3.375 18 3.375 Z M 1.875 9.0375 L 6.40625 12.75 L 1.875 16.4625 Z M 17.625 18.75 C 17.625 19.371875 17.121875 19.875 16.5 19.875 L 3 19.875 C 2.378125 19.875 1.875 19.371875 1.875 18.75 L 1.875 17.425 L 7 13.234375 L 8.5625 14.5125 C 8.90625 14.79375 9.328125 14.934375 9.75 14.934375 C 10.171875 14.934375 10.59375 14.79375 10.9375 14.5125 L 12.5 13.234375 L 17.625 17.425 Z M 17.625 13.10625 L 17.625 16.45625 L 13.09375 12.75 L 14.45 11.578125 C 15.25625 12.440625 16.375 13.0125 17.625 13.10625 Z M 13.971875 10.99375 L 10.4625 13.934375 C 10.05 14.26875 9.45 14.26875 9.034375 13.934375 L 2.1375 8.284375 C 2.34375 8.0375 2.653125 7.875 3 7.875 L 13.14375 7.875 C 13.13125 8 13.125 8.125 13.125 8.25 C 13.125 9.265625 13.4375 10.2125 13.971875 10.99375 Z M 18 10.125 C 16.965625 10.125 16.125 9.284375 16.125 8.25 C 16.125 7.215625 16.965625 6.375 18 6.375 C 19.034375 6.375 19.875 7.215625 19.875 8.25 C 19.875 9.284375 19.034375 10.125 18 10.125 Z M 18 10.125 " transform="matrix(1.25,0,0,1.25,0,0)"/></g></svg>
                <span class="tsvg_sidebar_item_title">Contact Us</span>  
            </a>
        </aside>
        <main id="tsvg_builder_main" class="tsvg_flex_col">
            <header id="tsvg_builder_head" class="tsvg_flex_item"> 
                <div id="tsvg_switch_sidebar" class="tsvg_switch_sidebar tsvg_flex_col">
                    <div id="tsvg-toggle-btn">
                        <span class="bar-top"></span>
                        <span class="bar-mid"></span>
                        <span class="bar-bot"></span>
                    </div>
                </div>     
                <div class="tsvg_buttons tsvg_flex_row">
                    %7$s
                    <a href="%8$s" class="tsvg_support tsvg_flex_item"  target="_blank" title="TS Video Gallery support forum">
                        <div class="tsvg_support-inner">
                            <div class="tsvg_support-icon">
                                <i class="ts-vgallery ts-vgallery-fw ts-vgallery-comments"></i>
                            </div>
                            <div>Support Forum</div>
                        </div>
                    </a>
                    %9$s
                </div>
                <div class="tsvg_back_wp tsvg_flex_col">
                    <a href="%10$s" id="TS_vgallery_Back_Manager" class="tsvg_flex_col" title="Back to Manager">
                        <i class="ts-vgallery ts-vgallery-times"></i>
                    </a>
                </div>
            </header>
            <section id="tsvg_builder_content">
                %11$s
                %12$s
            </section>
        </main>
    </section>
    ',
    $this->tsvg_build == "new" ? esc_attr( "false" ) : "",
    esc_url( plugin_dir_url( __FILE__ ) . "img/ts-video-gallery-logo.png" ),
    $this->tsvg_build == "new" ? esc_attr( "tsvg_active" ) : "",
    $this->tsvg_build == "edit" ? esc_attr( "tsvg_active" ) : "",
    esc_url( "https://total-soft.com/wp-video-gallery/" ),
    esc_url( "https://total-soft.com/contact-us/" ),
    $this->tsvg_build == "new" ? "" : sprintf('<span id="tsvg_TS_VG_Title_e">%1$s</span>',esc_html( $this->tsvg_build_proporties["TS_VG_Title"] )),
    esc_url( "https://wordpress.org/support/plugin/gallery-videos/" ),
    $this->tsvg_build == "new" ? "" : sprintf(
        '
        <div class="tsvg_save_btn tsvg_flex_item">
            <div class="tsvg_save_btn-inner">
                <div class="tsvg_save_btn-icon">
                    <i class="ts-vgallery ts-vgallery-folder-open ts-vgallery-fw"></i>
                </div>
                <div>%1$s</div>
            </div>
        </div>
        ',
        isset( $_GET["tsvg-theme"] ) ? esc_html( "Save" ) : esc_html( "Update" )
    ),
    esc_url( admin_url( "admin.php?page=tsvg-admin" ) ),
    $tsvg_content_builder,
    $tsvg_icon_picker_html
);
?>
