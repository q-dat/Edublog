<?php
class TS_Video_Gallery_Block {
	public function __construct() {
        if (function_exists("register_block_type")) {
            add_action( 'enqueue_block_editor_assets', [ $this, 'tsvg_editor_scripts' ] );
            add_action( 'init', [ $this, 'tsvg_register_block' ] );
        }
	}
	public function tsvg_register_block() {
        wp_register_script(
            'tsvg-block-script',
			plugin_dir_url( __FILE__ ) . 'js/tsvg-block.js',
            array( 'jquery', 'wp-blocks', 'wp-element', 'wp-editor','wp-components')
        );
        wp_register_style( 'tsvg-block-css', plugin_dir_url( __FILE__ ) . 'css/tsvg-block.css');
        wp_enqueue_style('tsvg-block-css');
        register_block_type( 'tsvideogallery/gallery-block',
            array(
                'editor_script' => 'tsvg-block-script',
                'render_callback' => [$this,'tsvg_block_render_callback'],
                'attributes' => array(
                    'tsvg_id' => array(
                        'type' => 'string'
                    ),
                    'preview'     => array(
                        'type'    => 'boolean',
                        'default' => false
                    )
                )
            )
        );
	}
	public function tsvg_get_all_records() {
        global $wpdb;
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . 'ts_galleryv_manager' );
        $tsvg_sql = $wpdb->prepare("SELECT `id`,`TS_VG_Title` FROM {$tsvg_db_manager_table} WHERE id > %d ", 0);
        $tsvg_all_records = $wpdb->get_results( $tsvg_sql , ARRAY_A);
        return $tsvg_all_records;
    }
	public function tsvg_editor_scripts() {
        $tsvg_all_records = $this->tsvg_get_all_records();
        $tsvg_records_list = array(
            array(
                'value' => 0,
                'label' => 'Select a gallery'
            )
        );
        foreach ( $tsvg_all_records as $tsvg_record ) {
            $tsvg_title =  $tsvg_record['TS_VG_Title'];
            if ( empty( $tsvg_title ) ) {
                $tsvg_title = "";
            }
            $tsvg_records_list[] = array(
                'value' => esc_attr($tsvg_record['id']),
                'label' => esc_html(html_entity_decode( $tsvg_title ))
            );
        }
        $tsvg_records_count = count($tsvg_all_records);
        wp_localize_script( 
            'tsvg-block-script',
            'tsvg_block_data',
            array(
                'tsvg_records_count' => $tsvg_records_count,
                'tsvg_records_list' => $tsvg_records_list,
                'ts_video_gallery_logo' => esc_url( plugin_dir_url( __FILE__ ) . 'img/ts-video-gallery-logo.png' ),
                'ts_video_gallery_preview' => esc_url( plugin_dir_url( __FILE__ ) . 'img/ts-video-gallery-block.png' ) 
            )
        );
    }   
    public function tsvg_block_render_callback( $tsvg_attributes ) {
		$tsvg_id = empty( $tsvg_attributes['tsvg_id'] ) ? 0 : $tsvg_attributes['tsvg_id'];
		if ( $tsvg_id ) {
            $tsvg_get_all_records = array_column($this->tsvg_get_all_records(), 'TS_VG_Title', 'id');
			if ( array_key_exists( absint( $tsvg_id ), $tsvg_get_all_records ) ) {
				if( strstr($_SERVER['REQUEST_URI'], 'gallery-block') ) {
                    return  sprintf( '
                        <div class="notice notice-error is-dismissible"><p>%2$s</p></br>[TS_Video_Gallery id="%1$d"] </div>
                        </br>
                        ', absint( $tsvg_id ),
                        esc_html__("In the preview of page you can see result of shortcode.")
                    );
				}else{
					return  sprintf( '[TS_Video_Gallery id="%d"]', absint( $tsvg_id ) );
				}
			} else {
				return sprintf( '<p>%s</p>', 'Selected gallery is not defined.' );
			}
		}
	}
}
