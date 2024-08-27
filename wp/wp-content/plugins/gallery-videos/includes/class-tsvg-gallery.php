<?php
class TS_Video_Gallery {
	protected $loader;
	protected $plugin_name;
	protected $theme_details;
	protected $version;
	protected $tsvg_function_class;
	public function __construct() {
		if ( defined( 'TSVG_VERSION' ) ) {
			$this->version = TSVG_VERSION;
		} else {
			$this->version = '2.3.7';
		}
		$this->plugin_name = 'TS Video Gallery';
		$this->theme_details = wp_get_theme();
		add_shortcode( 'Total_Soft_Gallery_Video', array( $this, 'ts_video_gallery_shortcode' ) );
		add_shortcode( 'TS_Video_Gallery', array( $this, 'ts_video_gallery_shortcode' ) );
		$this->load_dependencies();
		$this->tsvg_update_plugin();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		new TS_Video_Gallery_Block();
		global $pagenow;
		if( in_array($pagenow,["post-new.php","edit.php","post.php"])){
			add_action( 'wp_enqueue_scripts', [$this,'tsvg_activate_scripts'] );
			add_action( 'admin_enqueue_scripts', [$this,'tsvg_activate_scripts'] );
		}
		if (strpos($_SERVER['REQUEST_URI'], "elementor-preview") !== false){
			$this->tsvg_activate_scripts();
		}
	}
	public function tsvg_activate_scripts() {
		wp_register_script( "tsvg-classie", plugin_dir_url( __DIR__ ) . 'public/js/classie.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-imagesloaded", plugin_dir_url( __DIR__ ) . 'public/js/imagesloaded.pkgd.min.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-masonry", plugin_dir_url( __DIR__ ) . 'public/js/masonry.pkgd.min.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-modernizr", plugin_dir_url( __DIR__ ) . 'public/js/modernizr.custom.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-adipoli", plugin_dir_url( __DIR__ ) . 'public/js/jquery.adipoli.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-boxer", plugin_dir_url( __DIR__ ) . 'public/js/jquery.fs.boxer.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-hoverdir", plugin_dir_url( __DIR__ ) . 'public/js/jquery.hoverdir.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-mousewheel", plugin_dir_url( __DIR__ ) . 'public/js/jquery.mousewheel.min.js', array("jquery"), $this->version, false );
		wp_register_script( "tsvg-froogaloop", plugin_dir_url( __DIR__ ) . 'public/js/froogaloop.min.js', array("jquery"), $this->version, false );
		wp_enqueue_script( "tsvg-resize-sensor", plugin_dir_url( __DIR__ ) . 'public/js/ResizeSensor.js', array("tsvg-classie","tsvg-imagesloaded","tsvg-masonry","tsvg-modernizr","tsvg-adipoli","tsvg-boxer","tsvg-mousewheel","tsvg-froogaloop"), $this->version, false );
		wp_enqueue_script( "tsvg-element-queries", plugin_dir_url( __DIR__ ) . 'public/js/ElementQueries.js', array("jquery","tsvg-hoverdir","tsvg_html5lightbox"), $this->version, false );
		wp_register_style( "tsvg-fonts", plugin_dir_url( __DIR__ ) . 'public/css/tsvg-fonts.css', array(),$this->version, 'all' );
		wp_register_style( "tsvg-boxer", plugin_dir_url( __DIR__ ) . 'public/css/jquery.fs.boxer.css', array(),$this->version, 'all' );
		wp_register_style( "tsvg-common", plugin_dir_url( __DIR__ ) . 'public/css/tsvg-cp-style-common.css', array(),$this->version, 'all' );
		wp_enqueue_style( "tsvg-widget", plugin_dir_url( __DIR__ ) . 'public/css/tsvg-widget.css', array("tsvg-fonts","tsvg-special","tsvg-boxer","tsvg_style9","tsvg-common"),$this->version, 'all' );
	}
	private function tsvg_update_plugin() {
		global $wpdb;
		$tsvg_db_videos_table = esc_sql( $wpdb->prefix . 'ts_galleryv_videos' );
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . 'ts_galleryv_manager' );
		$tsvg_videoes_table_check = $wpdb->get_results( $wpdb->prepare( "SELECT  table_name FROM information_schema.TABLES WHERE TABLE_SCHEMA = %s AND TABLE_NAME = %s", esc_sql( $wpdb->dbname ), $tsvg_db_videos_table ) );
		$tsvg_galleries_table_check = $wpdb->get_results( $wpdb->prepare( "SELECT  table_name FROM information_schema.TABLES WHERE TABLE_SCHEMA = %s AND TABLE_NAME = %s", esc_sql( $wpdb->dbname ), $tsvg_db_manager_table ) );
		if ( empty( $tsvg_videoes_table_check ) || empty( $tsvg_galleries_table_check ) ) {
			$tsvg_galleries_table_create = 'CREATE TABLE IF NOT EXISTS ' . $tsvg_db_manager_table . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT, TS_VG_Title VARCHAR(155) DEFAULT "", TS_VG_Option longtext NOT NULL, TS_VG_Style longtext NOT NULL, TS_VG_Settings longtext NOT NULL, TS_VG_Option_Style longtext NOT NULL,   TS_VG_Sort longtext NOT NULL,   TS_VG_Old_User longtext NOT NULL,created_at VARCHAR(50) NOT NULL,updated_at VARCHAR(50) NOT NULL, PRIMARY KEY (id))';
			$tsvg_videoes_table_create = 'CREATE TABLE IF NOT EXISTS ' . $tsvg_db_videos_table . '( id INTEGER(10) UNSIGNED AUTO_INCREMENT,TS_VG_SetType int(11) NOT NULL, TS_VG_SetName VARCHAR(255) NOT NULL, TS_VG_Options longtext NOT NULL, PRIMARY KEY (id))';
			require_once ABSPATH . 'wp-admin/includes/upgrade.php';
			dbDelta( $tsvg_galleries_table_create );
			dbDelta( $tsvg_videoes_table_create );
			$tsvg_galleries_table_convert = 'ALTER TABLE ' . $tsvg_db_manager_table . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
			$tsvg_videoes_table_convert   = 'ALTER TABLE ' . $tsvg_db_videos_table . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
			$wpdb->query( $tsvg_galleries_table_convert );
			$wpdb->query( $tsvg_videoes_table_convert );
			$tsvg_old_table_check = $wpdb->get_results( $wpdb->prepare( "SELECT  table_name FROM information_schema.TABLES WHERE TABLE_SCHEMA = %s AND TABLE_NAME = %s", esc_sql( $wpdb->dbname ), esc_sql( $wpdb->prefix . 'totalsoft_galleryv_manager' ) ) );
			if ( ! empty( $tsvg_old_table_check ) ) {
				$tsvg_sql = $wpdb->prepare("SELECT * FROM " . esc_sql( $wpdb->prefix . "totalsoft_galleryv_manager" ) );
				$tsvg_old_records = $wpdb->get_results(  $tsvg_sql , ARRAY_A );
				$tsvg_pagination_options        = array(
					'TotalSoft_VGallery_Sty_01' => 'Next',
					'TotalSoft_VGallery_Sty_02' => 'Prev',
					'TotalSoft_VGallery_Sty_03' => '#ddd',
					'TotalSoft_VGallery_Sty_04' => '#555',
					'TotalSoft_VGallery_Sty_05' => '18',
					'TotalSoft_VGallery_Sty_06' => 'Amaranth',
					'TotalSoft_VGallery_Sty_07' => '#cf095c',
					'TotalSoft_VGallery_Sty_08' => '#cf095c',
					'TotalSoft_VGallery_Sty_09' => '#cf095c',
					'TotalSoft_VGallery_Sty_10' => '#cf095c',
					'TotalSoft_VGallery_Sty_11' => '#ddd',
					'TotalSoft_VGallery_Sty_12' => '2',
					'TotalSoft_VGallery_Sty_13' => '14',
					'TotalSoft_VGallery_Sty_14' => 'ts-vgallery ts-vgallery-ban',
					'TotalSoft_VGallery_Sty_15' => 'ts-vgallery ts-vgallery-ban',
					'TotalSoft_VGallery_Sty_16' => 'false',
					'TotalSoft_VGallery_Sty_17' => 'text',
					'TotalSoft_VGallery_Sty_18' => 'Load More ...',
					'TotalSoft_VGallery_Sty_19' => '#444',
					'TotalSoft_VGallery_Sty_20' => '#fff',
					'TotalSoft_VGallery_Sty_21' => '20',
					'TotalSoft_VGallery_Sty_22' => 'Amaranth',
					'TotalSoft_VGallery_Sty_23' => '#ff1f71',
					'TotalSoft_VGallery_Sty_24' => 'ts-vgallery ts-vgallery-ban',
					'TotalSoft_VGallery_Sty_25' => '#fff',
					'TotalSoft_VGallery_Sty_26' => '#6225E6',
					'TotalSoft_VGallery_Sty_27' => '#FBC638',
				);
				for ( $i = 0; $i < count( $tsvg_old_records ); $i++ ) {
					$tsvg_old_record = $tsvg_old_record_option = $tsvg_old_video_options = $tsvg_old_record_styles = $tsvg_old_record_settings = $tsvg_old_record_sort = array();
					$tsvg_old_record = array(
						'id'                       => $tsvg_old_records[ $i ]['id'],
						'TS_VG_Title'              => $tsvg_old_records[ $i ]['TotalSoftGallery_Video_Gallery_Title'],
						'tsvg_old_record_theme_id' => $tsvg_old_records[ $i ]['TotalSoftGallery_Video_Option'],
					);
					$tsvg_old_record_settings = array(
						'TotalSoft_VGallery_Set_01' => strtolower($tsvg_old_records[ $i ]['TotalSoftGallery_Video_ShowType']),
						'TotalSoft_VGallery_Set_02' => $tsvg_old_records[ $i ]['TotalSoftGallery_Video_PerPage'],
						'TotalSoft_VGallery_Set_03' => $tsvg_old_records[ $i ]['TotalSoftGallery_LoadMore'],
						'TotalSoft_VGallery_Set_04' => ' ',
						'TotalSoft_VGallery_Set_05' => 'ef-1',
						'TotalSoft_VGallery_Set_06' => 'vw-1',
						'TotalSoft_VGallery_Set_07' => 'none',
						'TotalSoft_VGallery_Set_08' => 'ef-1',
					);
					$tsvg_old_record_settings['TotalSoft_VGallery_Set_01'] = str_replace( 'load','load-more', $tsvg_old_record_settings['TotalSoft_VGallery_Set_01'] );
					$tsvg_old_record_style_part_a = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM " . esc_sql( $wpdb->prefix . "totalsoft_galleryv_dbt_1" ) . " WHERE TotalSoftGalleryV_SetName = %s", $tsvg_old_record['tsvg_old_record_theme_id'] ), ARRAY_A );
					$tsvg_old_record_style_part_b = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM " . esc_sql( $wpdb->prefix . "totalsoft_galleryv_dbt_2" ) . " WHERE TotalSoftGalleryV_SetName = %s", $tsvg_old_record['tsvg_old_record_theme_id'] ), ARRAY_A );
					$tsvg_old_record_styles = array_merge( $tsvg_old_record_style_part_a, $tsvg_old_record_style_part_b );
					if (!array_key_exists("TotalSoft_GV_FG_PT",$tsvg_old_record_styles))
					{
						$tsvg_old_record_styles['TotalSoft_GV_FG_PT'] ='';
					}
					if (!array_key_exists("TotalSoft_GV_FG_PD",$tsvg_old_record_styles))
					{
						$tsvg_old_record_styles['TotalSoft_GV_FG_PD'] ='';
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Grid Video Gallery' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_03'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_03'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_03'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_03'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_03'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_03'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_03'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_03'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_03'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_03'] = 5;}
						if (  $tsvg_old_record_styles['TotalSoft_GV_1_06'] =='opacity' ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_07']=$tsvg_old_record_styles['TotalSoft_GV_1_07']*10;
						}
						$tsvg_old_record_styles['TotalSoft_GV_1_40'] = 'false';
						$tsvg_old_record_styles['TotalSoft_GV_1_32'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_32'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_33'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_33'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_36'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_37'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_37'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_37'] );
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'LightBox Video Gallery' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 5;}
						$tsvg_old_record_styles['TotalSoft_GV_1_20'] = str_replace( 'totalsoft totalsoft', 'ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_20'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_21'] = str_replace( 'totalsoft totalsoft', 'ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_21'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_25'] = str_replace( 'totalsoft totalsoft', 'ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_25'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_31'] = str_replace( 'totalsoft totalsoft', 'ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_31'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_32'] = str_replace( 'totalsoft totalsoft', 'ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_32'] );
						$tsvg_old_record_styles['TotalSoft_GV_2_11'] = $tsvg_old_record_styles['TotalSoft_GV_2_11']/10;
						$tsvg_old_record_styles['TotalSoft_GV_2_14'] = $tsvg_old_record_styles['TotalSoft_GV_2_14']/10;
						$tsvg_old_record_styles['TotalSoft_GV_2_21'] = $tsvg_old_record_styles['TotalSoft_GV_2_21']/10;
						$tsvg_old_record_styles['TotalSoft_GV_2_26'] = $tsvg_old_record_styles['TotalSoft_GV_2_26']/10;
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Thumbnails Video' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_11'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_11'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_11'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_11'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_11'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_11'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_11'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_11'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_11'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_11'] = 5;}
						$tsvg_old_record_styles['TotalSoft_GV_2_14'] = str_replace( 'ts-vgallery ts-vgallery', 'totalsoft totalsoft', $tsvg_old_record_styles['TotalSoft_GV_2_14'] );
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Content Popup' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 5;}
						$tsvg_old_record_styles['TotalSoft_GV_2_26'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery',$tsvg_old_record_styles['TotalSoft_GV_2_26'] );
						$tsvg_old_record_styles['TotalSoft_GV_2_30'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery',$tsvg_old_record_styles['TotalSoft_GV_2_30'] );
						$tsvg_old_record_styles['TotalSoft_GV_2_31'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery',$tsvg_old_record_styles['TotalSoft_GV_2_31'] );
						$tsvg_old_record_styles['TotalSoft_GV_2_34'] = $tsvg_old_record_styles['TotalSoft_GV_2_34'] != '' ? $tsvg_old_record_styles['TotalSoft_GV_2_34'] : 'def';
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Elastic Gallery' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 5;}
						$tsvg_old_record_styles['TotalSoft_GV_1_19'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_19'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_27'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_27'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_32'] = str_replace(  'totalsoft totalsoft','ts-vgallery ts-vgallery', $tsvg_old_record_styles['TotalSoft_GV_1_32'] );
						$tsvg_old_record_styles['TotalSoft_GV_1_09'] = $tsvg_old_record_styles['TotalSoft_GV_1_09']/10;
						$tsvg_old_record_styles['TotalSoft_GV_1_15'] = $tsvg_old_record_styles['TotalSoft_GV_1_15']/10;
						if ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '1' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-angle-double-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-angle-double-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '2' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-angle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-angle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '3' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-circle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-circle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '4' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-circle-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-circle-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '5' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '6' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-caret-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-caret-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '7' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-caret-square-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-caret-square-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '8' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-chevron-circle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-chevron-circle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '9' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-chevron-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-chevron-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '10' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-hand-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-hand-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_1_36'] == '11' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-long-arrow-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-long-arrow-right';
						}
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Fancy Gallery' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 5;}
						if ( $tsvg_old_record_styles['TotalSoft_GV_2_06'] == '1' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_37'] = 'ts-vgallery ts-vgallery-times';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_37'] == '2' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_06'] = 'ts-vgallery ts-vgallery-times-circle';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_37'] == '3' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_06'] = 'ts-vgallery ts-vgallery-times-circle-o';
						}
						if ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '1' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-angle-double-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-angle-double-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '2' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-angle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-angle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '3' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-circle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-circle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '4' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-circle-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-circle-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '5' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '6' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-caret-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-caret-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '7' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-caret-square-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-caret-square-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '8' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-chevron-circle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-chevron-circle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '9' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-chevron-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-chevron-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '10' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-hand-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-hand-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '11' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-long-arrow-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-long-arrow-right';
						}
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Parallax Engine' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 5;}
						$tsvg_old_record_styles['TotalSoft_GV_2_04'] = str_replace( 'totalsoft totalsoft','ts-vgallery ts-vgallery',  $tsvg_old_record_styles['TotalSoft_GV_2_04'] );
						if ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '1' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-angle-double-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-angle-double-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '2' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-angle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-angle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '3' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-circle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-circle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '4' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-circle-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-circle-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '5' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-arrow-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-arrow-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '6' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-caret-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-caret-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '7' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-caret-square-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-caret-square-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '8' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-chevron-circle-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-chevron-circle-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '9' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-chevron-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-chevron-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '10' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-hand-o-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-hand-o-right';
						} elseif ( $tsvg_old_record_styles['TotalSoft_GV_2_03'] == '11' ) {
							$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-long-arrow-left';
							$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-long-arrow-right';
						}
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Classic Gallery' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_01'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_01'] = 5;}
						$tsvg_old_record_styles['TotalSoft_GV_1_12'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_1_12'];
						$tsvg_old_record_styles['TotalSoft_GV_1_29'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_1_29'];
						$tsvg_old_record_styles['TotalSoft_GV_2_17'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_17'];
						$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_16'].'-left';
						$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_16'].'-right';
					}
					if ( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] == 'Space Gallery' ) {
						if ( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'] > 449 ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 1;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 350, 449 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 2;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 250, 349 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 3;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 150, 249 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 4;
						} elseif ( in_array( (int) $tsvg_old_record_styles['TotalSoft_GV_1_02'], range( 1, 149 ) ) ) {
							$tsvg_old_record_styles['TotalSoft_GV_1_02'] = 5;}
						$tsvg_old_record_styles['TotalSoft_GV_1_22'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_1_22'];
						$tsvg_old_record_styles['TotalSoft_GV_2_14'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_14'];
						$tsvg_old_record_styles['TotalSoft_GV_2_19'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_19'];
						$tsvg_old_record_styles['TotalSoft_GV_2_32'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_32'];
						$tsvg_old_record_styles['TotalSoft_GV_2_38'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_31'].'-left';
						$tsvg_old_record_styles['TotalSoft_GV_2_39'] = 'ts-vgallery ts-vgallery-' . $tsvg_old_record_styles['TotalSoft_GV_2_31'].'-right';
					}
					$tsvg_old_record_option = array( 'TS_vgallery_Q_Theme' => $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] );
					unset( $tsvg_old_record_styles['id'] );
					unset( $tsvg_old_record_styles['TotalSoftGalleryV_SetID'] );
					unset( $tsvg_old_record_styles['TotalSoftGalleryV_SetName'] );
					unset( $tsvg_old_record_styles['TotalSoftGalleryV_SetType'] );
					$tsvg_old_video_records = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM " . esc_sql( $wpdb->prefix . "totalsoft_galleryv_videos" ) . " WHERE GalleryV_ID = %d", (int) $tsvg_old_record['id'] ), ARRAY_A );
					for ( $a = 0; $a < count( $tsvg_old_video_records ); $a++ ) {
						if ( ! empty( $tsvg_old_video_records ) ) {
							$tsvg_old_video_options['TotalSoftVGallery_Vid_desc']  = $tsvg_old_video_records[ $a ]['TotalSoftGallery_Video_VDesc'];
							$tsvg_old_video_options['TotalSoftVGallery_Vid_link']  = $tsvg_old_video_records[ $a ]['TotalSoftGallery_Video_VLink'];
							$tsvg_old_video_options['TotalSoftVGallery_Vid_vont']  = $tsvg_old_video_records[ $a ]['TotalSoftGallery_Video_VONT'];
							$tsvg_old_video_options['TotalSoftVGallery_Vid_Vd']    = str_replace( 'Tsyou_', 'https://www.youtube.com/watch?v=', $tsvg_old_video_records[ $a ]['TotalSoftGallery_Video_VURL'] );
							$tsvg_old_video_options['TotalSoftVGallery_Vid_Im']    = str_replace( 'Tsyou_', 'https://img.youtube.com/vi/', $tsvg_old_video_records[ $a ]['TotalSoftGallery_Video_IURL'] );
							$tsvg_old_video_options['TotalSoftVGallery_Vid_vd_em'] = str_replace( 'Tsyou_', 'https://www.youtube.com/embed/', $tsvg_old_video_records[ $a ]['TotalSoftGallery_Video_Video'] );
						} else {
							$tsvg_old_video_options['TotalSoftVGallery_Vid_desc']  = '';
							$tsvg_old_video_options['TotalSoftVGallery_Vid_link']  = '';
							$tsvg_old_video_options['TotalSoftVGallery_Vid_vont']  = '';
							$tsvg_old_video_options['TotalSoftVGallery_Vid_Vd']    = '';
							$tsvg_old_video_options['TotalSoftVGallery_Vid_Im']    = '';
							$tsvg_old_video_options['TotalSoftVGallery_Vid_vd_em'] = '';
						}
						$wpdb->insert(
							$tsvg_db_videos_table,
							array(
								'id'            => '',
								'TS_VG_SetType' => (int) $tsvg_old_record['id'],
								'TS_VG_SetName' => $tsvg_old_video_records[ $a ]['TotalSoftGallery_Video_VT'],
								'TS_VG_Options' => json_encode( $tsvg_old_video_options ),
							),
							array( '%d', '%d', '%s', '%s' )
						);
						$tsvg_old_record_sort[] = $wpdb->insert_id;
					}
					$wpdb->insert(
						$tsvg_db_manager_table,
						array(
							'id'                 => (int) $tsvg_old_record['id'],
							'TS_VG_Title'        => $tsvg_old_record['TS_VG_Title'],
							'TS_VG_Option'       => json_encode( $tsvg_old_record_option ),
							'TS_VG_Style'        => json_encode( $tsvg_old_record_styles ),
							'TS_VG_Settings'     => json_encode( $tsvg_old_record_settings ),
							'TS_VG_Option_Style' => json_encode( $tsvg_pagination_options ),
							'TS_VG_Sort'         => implode( ',', $tsvg_old_record_sort ),
							'TS_VG_Old_User'     => 'yes',
							'created_at'         => date( 'd.m.Y h:i:sa' ),
							'updated_at'         => date( 'd.m.Y h:i:sa' )
						),
						array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' )
					);
				}
			}
		}
	}
	private function load_dependencies() {
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-tsvg-loader.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-tsvg-function.php';
		if (is_admin()) {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-tsvg-admin.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-tsvg-list.php';
		}
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-tsvg-block.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-tsvg-widget.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-tsvg-public.php';
		$this->loader = new TS_Video_Gallery_Loader();
	}
	private function define_admin_hooks() {
		if (is_admin()) {
			$plugin_admin = new TS_Video_Gallery_Admin( $this->get_plugin_name(), $this->get_version() );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
			$this->loader->add_action( 'admin_menu', $plugin_admin, 'tsvg_admin_menu', 9 );
			$this->loader->add_action( 'admin_menu', $plugin_admin, 'tsvg_admin_submenu', 90 );
			$this->loader->add_action( 'admin_menu', $plugin_admin, 'tsvg_admin_builder_submenu', 100 );
		}
	}
	private function define_public_hooks() {
		function tsvg_register_widget() {
			register_widget( 'TS_Video_Gallery_Widget' );
		}
		$plugin_public = new TS_Video_Gallery_Public( $this->get_plugin_name(), $this->get_version() );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		add_action( 'widgets_init', 'tsvg_register_widget' );
	}
	public function run() {
		$this->loader->run();
	}
	public function get_plugin_name() {
		return $this->plugin_name;
	}
	public function get_loader() {
		return $this->loader;
	}
	private function tsvg_shortcode_content( $tsvg_shortcode_id, $tsvg_edit ) {
		$tsvg_themes = array(
			'grid_video_gallery'     => 'Grid Video Gallery',
			'lightbox_video_gallery' => 'LightBox Video Gallery',
			'thumbnails_video'       => 'Thumbnails Video',
			'content_popup'          => 'Content Popup',
			'elastic_gallery'        => 'Elastic Gallery',
			'fancy_gallery'          => 'Fancy Gallery',
			'parallax_engine'        => 'Parallax Engine',
			'classic_gallery'        => 'Classic Gallery',
			'space_gallery'          => 'Space Gallery'
		);
		global $wpdb;
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . 'ts_galleryv_manager' );
		$tsvg_db_videos_table = esc_sql( $wpdb->prefix . 'ts_galleryv_videos' );
		$tsvg_stylesheet_ff = $tsvg_get_videos_data = $tsvg_videos_count = $tsvg_style_options = $tsvg_theme_name = $tsvg_setting_options = '';
		$tsvg_videos_data = $tsvg_videos_order = $tsvg_options_data = array();
		if ( is_numeric( $tsvg_shortcode_id ) && is_int( (int) $tsvg_shortcode_id ) && (int) $tsvg_shortcode_id > 0 || array_key_exists( $tsvg_shortcode_id, $tsvg_themes ) ) {
			$this->tsvg_function_class = new TS_Video_Gallery_Function();
			if ( is_numeric( $tsvg_shortcode_id ) && is_int( (int) $tsvg_shortcode_id ) && (int) $tsvg_shortcode_id > 0 ) {
				$tsvg_db_check_id = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $tsvg_db_manager_table WHERE id = %d",(int) $tsvg_shortcode_id ) );
				if ( $tsvg_db_check_id == 0 ) { return false; }
				$tsvg_options_data = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $tsvg_db_manager_table WHERE id = %d", (int) $tsvg_shortcode_id ), ARRAY_A );
				$tsvg_design_options = json_decode( $tsvg_options_data['TS_VG_Option_Style'], true );
				$tsvg_options_data['TS_VG_Style'] = json_decode( $tsvg_options_data['TS_VG_Style'], true );
				$tsvg_options_data['TS_VG_Style'] = (object) $tsvg_options_data['TS_VG_Style'];
				$tsvg_options_data['TS_VG_Old_User'] =html_entity_decode( htmlspecialchars_decode( $tsvg_options_data['TS_VG_Old_User'] ), ENT_QUOTES );
				$tsvg_default_video = esc_url("https://www.youtube.com/embed/IxxHeAUtcS4");
				$tsvg_get_videos_data = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $tsvg_db_videos_table WHERE TS_VG_SetType = %d",(int) $tsvg_shortcode_id ) );
			} elseif ( array_key_exists( $tsvg_shortcode_id, $tsvg_themes ) ) {
				$tsvg_default_data = $this->tsvg_function_class->tsvg_get_all_params();
				$tsvg_default_data['TS_VG_Option']['TS_vgallery_Q_Theme'] = $tsvg_themes[ $tsvg_shortcode_id ];
				$tsvg_theme_default_data = $this->tsvg_function_class->tsvg_get_theme_params( $tsvg_shortcode_id );
				$tsvg_design_options = $tsvg_default_data['TS_VG_Style'];
				$tsvg_options_data       = array(
					'id'                 => $tsvg_shortcode_id,
					'TS_VG_Title'        => $tsvg_default_data['TS_VG_Title'],
					'TS_VG_Settings'     => json_encode( $tsvg_default_data['TS_VG_Settings'] ),
					'TS_VG_Option_Style' => json_encode( $tsvg_default_data['TS_VG_Style'] ),
					'TS_VG_Option'       => json_encode( $tsvg_default_data['TS_VG_Option'] ),
					'TS_VG_Style'        => (object) $tsvg_theme_default_data,
					'TS_VG_Sort'         => $tsvg_default_data['TS_VG_Sort'],
					'TS_VG_Old_User'     => 'no',
					'created_at'         => date( 'd.m.Y h:i:sa' ),
					'updated_at'         => date( 'd.m.Y h:i:sa' ),
				);
				$tsvg_default_data['Videos'] = array_values( $tsvg_default_data['Videos'] );
				foreach ( $tsvg_default_data['Videos'] as $key => $value ) {
					$tsvg_default_data['Videos'][ $key ]['TS_VG_SetType'] = $tsvg_shortcode_id;
					$tsvg_default_data['Videos'][ $key ]                  = (object) $value;
					$tsvg_default_data['Videos'][ $key ]->TS_VG_Options   = json_encode( $tsvg_default_data['Videos'][ $key ]->TS_VG_Options );
				}
				$tsvg_get_videos_data = $tsvg_default_data['Videos'];
			} else {
				return false;
			}
			$tsvg_videos_count = count( $tsvg_get_videos_data ) != 0 ? count( $tsvg_get_videos_data ) : 0;
			$tsvg_style_options = $tsvg_options_data['TS_VG_Style'];
			$tsvg_pagination_options = json_decode( $tsvg_options_data['TS_VG_Option_Style'] );
			$tsvg_old_user = $tsvg_options_data['TS_VG_Old_User'];
			$tsvg_theme_info = json_decode( $tsvg_options_data['TS_VG_Option'] );
			$tsvg_theme_name = $tsvg_theme_info->TS_vgallery_Q_Theme;
			$tsvg_setting_options = json_decode( $tsvg_options_data['TS_VG_Settings'] );
			if ( $tsvg_videos_count > 1 ) {
				$tsvg_videos_order = explode( ',', $tsvg_options_data['TS_VG_Sort'] );
			} elseif ( $tsvg_videos_count === 1 ) {
				$tsvg_videos_order = array( $tsvg_options_data['TS_VG_Sort'] );
			} else {
				$tsvg_videos_order = array();
			}
			foreach ( $tsvg_get_videos_data as $key => $value ) {
				if ( is_object( $tsvg_get_videos_data[ $key ] ) ) {
					$tsvg_videos_data[ $value->id ] = $value;
				} else {
					$tsvg_videos_data[ $value['id'] ] = $value;
				}
			}
			uksort(
				$tsvg_videos_data,
				function( $x, $y ) use ( $tsvg_videos_order ) {
					if ( (int) array_search( $x, $tsvg_videos_order ) == (int) array_search( $y, $tsvg_videos_order ) ) {
						return 0;
					}
					return ( (int) array_search( $x, $tsvg_videos_order ) < (int) array_search( $y, $tsvg_videos_order ) ) ? -1 : 1;
				}
			);
		} else {
			return false;
		}
		if ( $tsvg_edit !== 'true' ) {
			switch ( $tsvg_theme_name ) {
				case 'Grid Video Gallery':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_12',
						'TotalSoft_GV_1_25'
					);
					break;
				case 'LightBox Video Gallery':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_2_18',
						'TotalSoft_GV_2_19',
						'TotalSoft_GV_1_17',
						'TotalSoft_GV_1_17',
						'TotalSoft_GV_1_29'
					);
					break;
				case 'Thumbnails Video':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_27'
					);
					break;
				case 'Content Popup':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_27',
						'TotalSoft_GV_1_14',
						'TotalSoft_GV_2_26',
						'TotalSoft_GV_2_19',
						'TotalSoft_GV_2_07'
					);
					break;
				case 'Elastic Gallery':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_12'
					);
					break;
				case 'Fancy Gallery':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_10',
						'TotalSoft_GV_2_01'
					);
					break;
				case 'Parallax Engine':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_10',
						'TotalSoft_GV_1_38'
					);
					break;
				case 'Classic Gallery':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_10',
						'TotalSoft_GV_1_21'
					);
					break;
				case 'Space Gallery':
					$tsvg_ff_swap_arr = array(
						'TotalSoft_GV_1_05',
						'TotalSoft_GV_1_17',
						'TotalSoft_GV_1_29'
					);
					break;
			}
			$tsvg_ff_swap_arr[] = 'TotalSoft_VGallery_Sty_22';
			$tsvg_ff_swap_arr[] = 'TotalSoft_VGallery_Sty_06';
			$tsvg_font_families_css	= '';
			foreach ( $tsvg_ff_swap_arr as $key => $value ) {
				if ( isset( $tsvg_style_options->$value ) || isset( $tsvg_setting_options->$value ) || isset( $tsvg_pagination_options->$value ) ) {
					if ( isset( $tsvg_style_options->$value ) ) {
						$tsvg_font_families_css .= $this->tsvg_function_class->tsvg_get_font_face( $tsvg_style_options->$value );
					} elseif ( isset( $tsvg_pagination_options->$value ) ) {
						$tsvg_font_families_css .= $this->tsvg_function_class->tsvg_get_font_face( $tsvg_pagination_options->$value );
					} else {
						$tsvg_font_families_css .= $this->tsvg_function_class->tsvg_get_font_face( $tsvg_setting_options->$value );
					}
				}
			}
			$tsvg_stylesheet_ff = sprintf(
				"
				<style id='%s'>
				   %s 
				</style>
		  		",
				'tsvg_fontface_' . $tsvg_shortcode_id,
				$tsvg_font_families_css
			);
			$tsvg_shortcode_id = rand( 100000, 999999 );
		}
		$tsvg_js_shortcode_id = $tsvg_shortcode_id;
		wp_enqueue_script("jquery");
		wp_enqueue_script("tsvg-resize-sensor", plugin_dir_url( __DIR__ ) . 'public/js/ResizeSensor.js', array(), $this->version, false );
		wp_enqueue_script("tsvg-element-queries", plugin_dir_url( __DIR__ ) . 'public/js/ElementQueries.js', array(), $this->version, false );
		wp_enqueue_style("tsvg-fonts-{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/css/tsvg-fonts.css', array(), time(), 'all' );
		wp_enqueue_script("tsvg-classie-{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/classie.js', array( 'jquery' ), time(), true );
		switch ( $tsvg_theme_name ) {
			case 'Grid Video Gallery':
				wp_enqueue_script( "tsvg_imagesloaded_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/imagesloaded.pkgd.min.js', array( 'jquery' ), time(), false );
				wp_enqueue_script( "tsvg_masonry_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/masonry.pkgd.min.js', array( 'jquery' ), time(), true );
				wp_enqueue_script( "tsvg_modernizr_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/modernizr.custom.js', array( 'jquery' ), time(), false );
				break;
			case 'Thumbnails Video':
				wp_enqueue_script( "tsvg_adipoli_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/jquery.adipoli.js', array( 'jquery' ), time(), true );
				wp_enqueue_script( "tsvg_boxer_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/jquery.fs.boxer.js', array( 'jquery' ), time(), false );
				wp_enqueue_style( "tsvg_boxer_sty_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/css/jquery.fs.boxer.css', array(), time(), 'all' );
				break;
			case 'Content Popup':
				wp_enqueue_style( "tsvg_common_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/css/tsvg-cp-style-common.css', array(), time(), 'all' );
				wp_enqueue_style( "tsvg_widget_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/css/tsvg-widget.css', array(), time(), 'all' );
				break;
			case 'Fancy Gallery':
				wp_enqueue_script( "tsvg_js_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/modernizr.custom.js', array( 'jquery' ), time(), true );
				wp_enqueue_script( "tsvg_hoverdir_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/jquery.hoverdir.js', array( 'jquery' ), time(), true );
				break;	
			case 'Elastic Gallery':
				wp_enqueue_script( "tsvg_mousewheel_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/jquery.mousewheel.min.js', array( 'jquery' ), time(), true );
				wp_enqueue_script( "tsvg_froogaloop_{$tsvg_shortcode_id}", plugin_dir_url( __DIR__ ) . 'public/js/froogaloop.min.js', array( 'jquery' ), time(), false );
				break;	
			default:
				break;
		}
		echo sprintf(
			'<section class="tsvg-section-%1$s"  id="tsvg-section-%1$s" style="display:none;" >',
			esc_attr( $tsvg_shortcode_id )
		);
		include plugin_dir_path( dirname( __FILE__ ) ) . 'public/css/tsvg-content-css.php';
		switch ($tsvg_theme_name) {
			case  'Grid Video Gallery' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-grid-video-gallery.php';
				include TSVG_PLUGIN_PATH . 'public/popup_partials/tsvg-gr-video-gallery_popup.php';				
				break;
			case  'LightBox Video Gallery' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-lightbox-video-gallery.php';
				include TSVG_PLUGIN_PATH . 'public/popup_partials/tsvg-lb-video-gallery_popup.php';				
				break;
			case  'Thumbnails Video' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-thumbnails-video-gallery.php';
				break;
			case  'Content Popup' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-content-popup-gallery.php';
				include TSVG_PLUGIN_PATH . 'public/popup_partials/tsvg-cp-video-gallery_popup.php';				
				break;
			case  'Elastic Gallery' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-elastic-video-gallery.php';
				include TSVG_PLUGIN_PATH . 'public/popup_partials/tsvg-el-video-gallery_popup.php';				
				break;
			case  'Fancy Gallery' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-fancy-gallery.php';
				break;
			case  'Parallax Engine' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-parallax-engine-gallery.php';
				include TSVG_PLUGIN_PATH . 'public/popup_partials/tsvg-px-video-gallery_popup.php';
				break;
			case  'Classic Gallery' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-classic-gallery.php';
				include TSVG_PLUGIN_PATH . 'public/popup_partials/tsvg-cl-video-gallery_popup.php';
				break;
			case  'Space Gallery' :
				include TSVG_PLUGIN_PATH . 'public/theme_partials/tsvg-space-gallery.php';
				include TSVG_PLUGIN_PATH . 'public/popup_partials/tsvg-sg-video-gallery_popup.php';
				break;
			default:
				break;
		}
		if( $tsvg_old_user=='yes'){
			switch ($tsvg_theme_name) {
				case 'Grid Video Gallery':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-gr-video-gallery_pagination.php';	
					break;
				case 'LightBox Video Gallery':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-lb-video-gallery_pagination.php';	
					break;
				case 'Content Popup':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-cp-video-gallery_pagination.php';
					break;
				case 'Elastic Gallery':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-el-video-gallery_pagination.php';
					break;
				case 'Parallax Engine':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-px-video-gallery_pagination.php';	;
					break;
				case 'Classic Gallery':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-cl-video-gallery_pagination.php';
					break;
				case 'Space Gallery':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-sp-video-gallery_pagination.php';	
					break;
				case 'Fancy Gallery':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-fn-video-gallery_pagination.php';
					break;
				case 'Thumbnails Video':
					include plugin_dir_path( dirname( __FILE__ ) ) . 'public/pagina_partials/tsvg-th-video-gallery_pagination.php';	
					break;
				default:
					break;
			}
		}else{
			include plugin_dir_path( dirname( __FILE__ ) ) . 'public/tsvg-pagination.php';
		}
		echo sprintf(
			' %1$s </section> ',
			$tsvg_stylesheet_ff
		);
	}
	public function ts_video_gallery_shortcode( $atts ) {
		$atts = shortcode_atts(
			array(
				'id'   => '',
				'edit' => ''
			),
			$atts
		);
		\ob_start();
		echo $this->tsvg_shortcode_content( sanitize_text_field($atts['id']), sanitize_text_field($atts['edit']) );
		return \ob_get_clean();
	}
	public function get_version() {
		return $this->version;
	}
}