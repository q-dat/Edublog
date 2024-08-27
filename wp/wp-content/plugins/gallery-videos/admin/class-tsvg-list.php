<?php
if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}
class TS_Video_Gallery_List_Table extends WP_List_Table {
	public function __construct() {
		parent::__construct(
			array(
				'singular' => __( 'gallery' ),
				'plural'   => __( 'galleries' ),
				'ajax'     => false
			)
		);
	}
	public static function tsvg_get_galleries( $tsvg_per_page = 10, $tsvg_page_number = 1 ) {
		global $wpdb;
		$tsvg_get_result = $wpdb->get_results(
			$wpdb->prepare(
				'SELECT `id`,`TS_VG_Title`,`TS_VG_Option`,`TS_VG_Sort`,`created_at` FROM %1$s %2$s %3$s ORDER BY %4$s %5$s LIMIT %6$d OFFSET %7$d',
				esc_sql( $wpdb->prefix . 'ts_galleryv_manager' ),
				isset( $_REQUEST['s'] ) && ! empty( sanitize_text_field( $_REQUEST['s'] ) ) ? "WHERE TS_VG_Title like " : " ",
				isset( $_REQUEST['s'] ) && ! empty( sanitize_text_field( $_REQUEST['s'] ) ) ? '%' . $wpdb->esc_like( $_REQUEST['s'] ) . '%' : " ",
				isset( $_REQUEST['orderby'] ) && ! empty( sanitize_text_field( $_REQUEST['orderby'] ) ) ? sanitize_text_field( $_REQUEST['orderby'] ) : "id",
				isset( $_REQUEST['order'] ) && ! empty( sanitize_text_field($_REQUEST['order']) ) ? ' ' . sanitize_text_field( $_REQUEST['order'] ) : "ASC",
				(int) $tsvg_per_page,
				(int) ( $tsvg_page_number - 1 ) * $tsvg_per_page,
			),
			ARRAY_A
		);
		return $tsvg_get_result;
	}
	public static function tsvg_remove_record( $id ) {
		global $wpdb;
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . 'ts_galleryv_manager' );
		$tsvg_db_videos_table  = esc_sql( $wpdb->prefix . 'ts_galleryv_videos' );
		$wpdb->delete(
			$tsvg_db_manager_table,
			array( 'id' => $id ),
			array( '%d' )
		);
		$wpdb->delete(
			$tsvg_db_videos_table,
			array( 'TS_VG_SetType' => $id ),
			array( '%d' )
		);
	}
	public static function tsvg_copy_record( $id ) {
		global $wpdb;
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . 'ts_galleryv_manager' );
		$tsvg_db_videos_table  = esc_sql( $wpdb->prefix . 'ts_galleryv_videos' );
		$tsvg_record = $wpdb->get_row( $wpdb->prepare( "SELECT `TS_VG_Title`, `TS_VG_Option`, `TS_VG_Style`, `TS_VG_Settings`,`TS_VG_Option_Style`, `TS_VG_Sort`, `TS_VG_Old_User` FROM $tsvg_db_manager_table WHERE id = %d", $id ) );
		$wpdb->insert(
			$tsvg_db_manager_table,
			array(
				'id'                 => '',
				'TS_VG_Title'        => $tsvg_record->TS_VG_Title,
				'TS_VG_Option'       => $tsvg_record->TS_VG_Option,
				'TS_VG_Style'        => $tsvg_record->TS_VG_Style,
				'TS_VG_Settings'     => $tsvg_record->TS_VG_Settings,
				'TS_VG_Option_Style' => $tsvg_record->TS_VG_Option_Style,
				'TS_VG_Sort'         => '',
				'TS_VG_Old_User' 	 => 'no',
				'created_at'         => date( 'd.m.Y h:i:sa' ),
				'updated_at'         => date( 'd.m.Y h:i:sa' ),
			),
			array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' )
		);
		$tsvg_insert_id = $wpdb->insert_id;
		$tsvg_video_records = $wpdb->get_results( $wpdb->prepare( "SELECT `id`, `TS_VG_SetType`, `TS_VG_SetName`, `TS_VG_Options` FROM {$tsvg_db_videos_table} WHERE TS_VG_SetType = %d ", $id ) );
		if ( count( $tsvg_video_records ) != 0 ) {
			$tsvg_video_records_sort = explode( ',', $tsvg_record->TS_VG_Sort );
			$tsvg_video_records_columned = array_column( json_decode( json_encode( $tsvg_video_records ), true ), null, 'id' );
			for ( $i = 0; $i < count( $tsvg_video_records ); $i++ ) {
				$wpdb->insert(
					$tsvg_db_videos_table,
					array(
						'id'            => '',
						'TS_VG_SetType' => (int) $tsvg_insert_id,
						'TS_VG_SetName' => $tsvg_video_records_columned[ $tsvg_video_records_sort[ $i ] ]['TS_VG_SetName'],
						'TS_VG_Options' => $tsvg_video_records_columned[ $tsvg_video_records_sort[ $i ] ]['TS_VG_Options'],
					),
					array( '%d', '%d', '%s', '%s' )
				);
			}
			$tsvg_insert_video_records = $wpdb->get_results( $wpdb->prepare( "SELECT `id` FROM {$tsvg_db_videos_table} WHERE TS_VG_SetType = %d", (int) $tsvg_insert_id ) );
			$tsvg_insert_video_records_sort = implode( ',', array_column( json_decode( json_encode( $tsvg_insert_video_records ), true ), 'id' ) );
			$wpdb->update( $tsvg_db_manager_table, array( 'TS_VG_Sort' => $tsvg_insert_video_records_sort ), array( 'id' => $tsvg_insert_id ), array( '%s' ), array( '%d' ) );
		}
	}
	public static function tsvg_copy_record_change_theme( $tsvg_id, $tsvg_theme ) {
		global $wpdb;
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . 'ts_galleryv_manager' );
		$tsvg_db_videos_table  = esc_sql( $wpdb->prefix . 'ts_galleryv_videos' );
		$tsvg_get_all = new TS_Video_Gallery_Function();
		$tsvg_themes_arr = array(
			'Grid Video Gallery'     => 'grid_video_gallery',
			'LightBox Video Gallery' => 'lightbox_video_gallery',
			'Thumbnails Video'       => 'thumbnails_video',
			'Content Popup'          => 'content_popup',
			'Elastic Gallery'        => 'elastic_gallery',
			'Fancy Gallery'          => 'fancy_gallery',
			'Parallax Engine'        => 'parallax_engine',
			'Classic Gallery'        => 'classic_gallery',
			'Space Gallery'          => 'space_gallery'
		);
		$tsvg_theme_key = $tsvg_themes_arr[ $tsvg_theme ];
		$tsvg_design_options = $tsvg_get_all->tsvg_get_theme_params( $tsvg_theme_key );
		$tsvg_record  = $wpdb->get_row( $wpdb->prepare( "SELECT `TS_VG_Title`, `TS_VG_Option`, `TS_VG_Style`, `TS_VG_Settings`,`TS_VG_Option_Style`, `TS_VG_Sort` FROM {$tsvg_db_manager_table} WHERE id = %d", $tsvg_id ) );
		$wpdb->insert(
			$tsvg_db_manager_table,
			array(
				'id'                 => '',
				'TS_VG_Title'        => $tsvg_record->TS_VG_Title,
				'TS_VG_Option'       => '{"TS_vgallery_Q_Theme":"' . $tsvg_theme . '"}',
				'TS_VG_Style'        => json_encode( $tsvg_design_options ),
				'TS_VG_Settings'     => $tsvg_record->TS_VG_Settings,
				'TS_VG_Option_Style' => $tsvg_record->TS_VG_Option_Style,
				'TS_VG_Sort'         => '',
				'TS_VG_Old_User' 	 => 'no',
				'created_at'         => date( 'd.m.Y h:i:sa' ),
				'updated_at'         => date( 'd.m.Y h:i:sa' )
			),
			array( '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' )
		);
		$tsvg_insert_id = $wpdb->insert_id;
		$tsvg_video_records = $wpdb->get_results( $wpdb->prepare( "SELECT `id`, `TS_VG_SetType`, `TS_VG_SetName`, `TS_VG_Options` FROM {$tsvg_db_videos_table} WHERE TS_VG_SetType = %d", $tsvg_id ) );
		if ( count( $tsvg_video_records ) != 0 ) {
			$tsvg_video_records_sort = explode( ',', $tsvg_record->TS_VG_Sort );
			$tsvg_video_records_columned = array_column( json_decode( json_encode( $tsvg_video_records ), true ), null, 'id' );
			for ( $i = 0; $i < count( $tsvg_video_records ); $i++ ) {
				$wpdb->insert(
					$tsvg_db_videos_table,
					array(
						'id'            => '',
						'TS_VG_SetType' => (int) $tsvg_insert_id,
						'TS_VG_SetName' => $tsvg_video_records_columned[ $tsvg_video_records_sort[ $i ] ]['TS_VG_SetName'],
						'TS_VG_Options' => $tsvg_video_records_columned[ $tsvg_video_records_sort[ $i ] ]['TS_VG_Options'],
					),
					array( '%d', '%d', '%s', '%s' )
				);
			}
			$tsvg_insert_video_records = $wpdb->get_results( $wpdb->prepare( "SELECT `id` FROM {$tsvg_db_videos_table} WHERE TS_VG_SetType = %d ", (int) $tsvg_insert_id ) );
			$tsvg_insert_video_records_sort = implode( ',', array_column( json_decode( json_encode( $tsvg_insert_video_records ), true ), 'id' ) );
			$wpdb->update( $tsvg_db_manager_table, array( 'TS_VG_Sort' => $tsvg_insert_video_records_sort ), array( 'id' => $tsvg_insert_id ), array( '%s' ), array( '%d' ) );
		}
	}
	public static function tsvg_records_count() {
		global $wpdb;
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . "ts_galleryv_manager" );
		return $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM " . $tsvg_db_manager_table . " WHERE id > %d" , 0) );
	}
	public function no_items() {
		_e( 'No galleries avaliable.' );
	}
	function tsvg_column_name( $tsvg_item ) {
		$tsvg_item_info = json_decode( $tsvg_item['TS_VG_Option'], true );
		$tsvg_title = sprintf( '<strong><a href="?page=%1$s&tsvg-id=%2$d" target="_blank">%3$s</a></strong>', esc_attr( 'tsvg-builder' ), absint( $tsvg_item['id'] ), esc_html( html_entity_decode( htmlspecialchars_decode( $tsvg_item['TS_VG_Title'] ), ENT_QUOTES ) ) );
		$tsvg_actions = array(
			'edit'    => sprintf( '<a href="?page=%1$s&tsvg-id=%2$d">Edit</a>', esc_attr( 'tsvg-builder' ), absint( $tsvg_item['id'] ) ),
			'copy'    => sprintf( '<a data-tsvg-action="%1$s" data-tsvg-id="%2$d">Copy</a>', 'copy', absint( $tsvg_item['id'] ) ),
			'copy-to' => sprintf( '<a data-tsvg-action="%1$s" data-tsvg-id="%2$d" data-tsvg-theme="%3$s">Copy theme</a>', 'copy-to', absint( $tsvg_item['id'] ), esc_html( $tsvg_item_info['TS_vgallery_Q_Theme'] ) ),
			'delete'  => sprintf( '<a data-tsvg-action="%1$s" data-tsvg-id="%2$d">Delete</a>', 'delete', absint( $tsvg_item['id'] ) )
		);
		return $tsvg_title . $this->row_actions( $tsvg_actions );
	}
	public function column_default( $tsvg_item, $tsvg_column_name ) {
		switch ( $tsvg_column_name ) {
			case 'TS_VG_Title':
				return self::tsvg_column_name( $tsvg_item );
			case 'id':
				return '[TS_Video_Gallery id="' . $tsvg_item[ $tsvg_column_name ] . '"] <span class="tsvg_copy_shorcode" data-tsvg-id="' . $tsvg_item[ $tsvg_column_name ] . '">Copy</span>';
			case 'TS_VG_Option':
				$tsvg_item_info = json_decode( $tsvg_item[ $tsvg_column_name ], true );
				return esc_html( $tsvg_item_info['TS_vgallery_Q_Theme'] );
			case 'created_at':
				return esc_html( date( 'F jS, Y', strtotime( $tsvg_item[ $tsvg_column_name ] ) ) );
			case 'TS_VG_Sort':
				$tsvg_record_sort = explode(",", $tsvg_item[$tsvg_column_name]);
				return count( $tsvg_record_sort );
			default:
				return print_r( $tsvg_item, true );
		}
	}
	function column_cb( $item ) {
		return sprintf(
			'<input type="checkbox" name="tsvg_record_ids[]" value="%1$s" />',
			$item['id']
		);
	}
	function get_columns() {
		$columns = array(
			'cb'           => '<input type="checkbox" />',
			'TS_VG_Title'  => __( 'Title' ),
			'id'           => __( 'Shortcode' ),
			'TS_VG_Option' => __( 'Video theme' ),
			'created_at'   => __( 'Created At' ),
			'TS_VG_Sort' => __( 'Videos Count')
		);
		return $columns;
	}
	public function get_sortable_columns() {
		$sortable_columns = array(
			'created_at'  => array( 'created_at', false ),
			'TS_VG_Title' => array( 'TS_VG_Title', true ),
		);
		return $sortable_columns;
	}
	public function get_bulk_actions() {
		$actions = array(
			'bulk-delete' => 'Delete',
			'bulk-copy'   => 'Copy',
		);
		return $actions;
	}
	public function tsvg_admin_notice( $tsvg_notice_class, $tsvg_notice_message ) {
		return sprintf( '<div class="%1$s is-dismissible"><p>%2$s</p></div>', esc_attr( $tsvg_notice_class ), esc_html( $tsvg_notice_message ) );
	}
	public function process_bulk_action() {
		if ( isset( $_POST['action'] ) || isset( $_POST['action2'] ) ) {
			if ( ! isset( $_POST['tsvg_action_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( $_POST['tsvg_action_nonce'] ), 'tsvg_action' ) ) {
				echo self::tsvg_admin_notice( 'notice notice-error ', 'Sorry, your nonce did not verify.' );
				exit;
			} else {
				$tsvg_post_action = isset( $_POST['action'] ) ? sanitize_text_field( $_POST['action'] ) : sanitize_text_field( $_POST['action2'] );
				if ( isset( $_POST['tsvg_record_ids'] ) ) {
					$tsvg_record_ids = array_map( 'sanitize_text_field', esc_sql( $_POST['tsvg_record_ids'] ) );
					$tsvg_count = count( $tsvg_record_ids );
					if ( $tsvg_post_action == 'bulk-delete' ) {
						foreach ( $tsvg_record_ids as $id ) {
							self::tsvg_remove_record( $id );
						}
						echo self::tsvg_admin_notice( 'notice notice-success', "{$tsvg_count} galleries was successfully deleted." );
					} elseif ( $tsvg_post_action == 'bulk-copy' ) {
						foreach ( $tsvg_record_ids as $id ) {
							self::tsvg_copy_record( $id );
						}
						echo self::tsvg_admin_notice( 'notice notice-success', "{$tsvg_count} galleries was successfully copied." );
					} elseif ( $tsvg_post_action == 'copy_with_change_theme' ) {
						$tsvg_change_to = sanitize_text_field( $_POST['tsvg_theme_input'] );
						foreach ( $tsvg_record_ids as $id ) {
							self::tsvg_copy_record_change_theme( $id, $tsvg_change_to );
						}
						echo self::tsvg_admin_notice( 'notice notice-success', "{$tsvg_count} galleries was successfully copied." );
					} else {
						echo self::tsvg_admin_notice( 'notice notice-error ', 'Not valid action.' );
					}
				}
			}
		}
	}
	public function tsvg_nonce_field() {
		return wp_nonce_field( 'tsvg_action', 'tsvg_action_nonce' );
	}
	public function tsvg_confirm_modal() {
		echo sprintf(
			'
			<section id="tsvg-confirm-modal" style="display: none;">
    			<div id="tsvg-confirm-modal-inner" >
					<div id="tsvg-confirm-content">
    		    		<header>
							<div></div>
							<p>Are you sure?</p>
						</header>
    		    		<main></main>
    		    		</hr>
    		   			<footer>
    		   			    <form action="" id="tsvg-confirm-modal-form" method="POST">
    		   			        %1$s
    		   			        <input type="hidden" id="tsvg-action-item" name="tsvg_record_ids[]" value="" style="display:none;">
    		   			        <input type="hidden" id="tsvg-action-input" name="action" value="" style="display:none;">
    		   			        <input type="button" class="tsvg-cancel-btn" value="Cancel"><input type="submit" name="submit" value="Delete" class="tsvg-submit-btn">
    		   			    </form>
    		   			</footer>
    		    		<button type="button" id="tsvg-close-btn">×</button>
					</div>
				</div>
			</section>
			',
			self::tsvg_nonce_field()
		);
	}
	public function prepare_items() {
		$this->_column_headers = $this->get_column_info();
		$this->process_bulk_action();
		$per_page     = $this->get_items_per_page( 'tsvg_records_per_page', 15 );
		$current_page = $this->get_pagenum();
		$total_items  = self::tsvg_records_count();
		$this->set_pagination_args(
			array(
				'total_items' => $total_items, // WE have to calculate the total number of items
				'per_page'    => $per_page, // WE have to determine how many items to show on a page
			)
		);
		$this->items = self::tsvg_get_galleries( $per_page, $current_page );
	}
}
