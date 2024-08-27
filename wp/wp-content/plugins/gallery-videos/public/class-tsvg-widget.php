<?php
class TS_Video_Gallery_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'TS_Video_Gallery_Widget',
			esc_html( 'TS Video Gallery Widget' ),
			array( 'description' => esc_html( 'Gallery is a user-friendly plugin to display user or hashtag-based gallery feeds as a responsive customizable gallery.' ) )
		);
	}
	public function tsvg_get_all_records( $tsvg_return = false, $tsvg_id = '' ) {
		global $wpdb;
		$tsvg_db_manager_table = esc_sql( $wpdb->prefix . 'ts_galleryv_manager' );
		$tsvg_sql = $wpdb->prepare("SELECT `id`,`TS_VG_Title` FROM {$tsvg_db_manager_table}");
		$tsvg_all_records   = $wpdb->get_results(  $tsvg_sql, ARRAY_A );
		if ( $tsvg_return == true ) {
			$tsvg_return_options = '';
			array_unshift(
				$tsvg_all_records,
				array(
					"id"          => "",
					"TS_VG_Title" => "Select video gallery"
				)
			);
			foreach ( $tsvg_all_records as $tsvg_value ) {
				$tsvg_return_options .= sprintf(
					'
                    <option value="%1$s" %2$s>%3$s</option>
                 	',
					esc_attr( $tsvg_value['id'] ),
					$tsvg_value['id'] == $tsvg_id ? esc_attr( 'selected' ) : '',
					esc_html( wp_strip_all_tags( html_entity_decode( htmlspecialchars_decode( $tsvg_value['TS_VG_Title'] ), ENT_QUOTES ) ) )
				);
			}
			return $tsvg_return_options;
		} else {
			return $tsvg_all_records;
		}
	}
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		$tsvg_id = empty( $instance['tsvg_id'] ) ? '' : $instance['tsvg_id'];
		if ( $tsvg_id ) {
			$tsvg_get_records = array_column( $this->tsvg_get_all_records(), 'TS_VG_Title', 'id' );
			if ( array_key_exists( absint( $tsvg_id ), $tsvg_get_records ) ) {
				echo do_shortcode( sprintf( '[TS_Video_Gallery id="%s"]', absint( $tsvg_id ) ) );
			} else {
				echo '<p>Selected gallery is not defined.</p>';
			}
		}
		echo $args['after_widget'];
	}
	public function form( $instance ) {
		$tsvg_id = ! empty( $instance['tsvg_id'] ) ? $instance['tsvg_id'] : '';
		echo sprintf(
			'
            <p>
                <select class="widefat" id="%1$s" name="%2$s">
                    %3$s
                </select>
            </p>
			',
			esc_attr( $this->get_field_id( 'ts-video-gallery' ) ),
			esc_attr( $this->get_field_name( 'tsvg_id' ) ),
			$this->tsvg_get_all_records( true, $tsvg_id )
		);
	}
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['tsvg_id'] = ( ! empty( $new_instance['tsvg_id'] ) ) ? absint( sanitize_text_field( $new_instance['tsvg_id'] ) ) : '';
		return $instance;
	}
}
