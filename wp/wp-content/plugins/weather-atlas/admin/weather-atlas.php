<?php
	
	/**
	 * Provide a admin area view for the plugin
	 * This file is used to markup the admin-facing aspects of the plugin.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/admin
	 */
	
	if ( isset( $_GET[ 'action' ], $_GET[ 'widget_id' ] ) && $_GET[ 'action' ] == 'delete' )
	{
		// Sanitize the widget ID
		$widget_id = sanitize_text_field( $_GET[ 'widget_id' ] );
		
		// Check if widget exists before attempting deletion
		if ( get_option( 'weather_atlas_widget_' . $widget_id ) !== FALSE )
		{
			// Delete the widget option
			delete_option( 'weather_atlas_widget_' . $widget_id );
			
			// Provide user feedback
			$feedback_message = __( 'Widget deleted successfully.', 'weather-atlas' );
		}
		else
		{
			// Handle non-existent widget case
			$feedback_message = __( 'This widget does not exist.', 'weather-atlas' );
		}
	}

?>

<div class="wrap" style="max-width:1000px">
	
	
	<h1
		class="wp-heading-inline"><?php _e( 'Weather Atlas - Your Widgets', 'weather-atlas' ); ?></h1>
	
	
	<!-- Display feedback message if set -->
	<?php if ( isset( $feedback_message ) ): ?>
		<div class="notice notice-success">
			<p><?php echo $feedback_message; ?></p>
		</div>
	<?php endif; ?>
	
	<?php
		
		global $wpdb;
		$prefix  = 'weather_atlas_widget_';
		$query   = $wpdb->prepare( "SELECT * FROM {$wpdb->options} WHERE option_name LIKE %s", $prefix . '%' );
		$widgets = $wpdb->get_results( $query );
		
		// Unserialize and sort $widgets by 'widget_name'
		usort( $widgets, function( $a, $b ) {
			$a_data = unserialize( $a->option_value );
			$b_data = unserialize( $b->option_value );
			
			return strcmp( $a_data[ "widget_name" ], $b_data[ "widget_name" ] );
		} );
		
		foreach ( $widgets as $option )
		{
			$widget_data = maybe_unserialize( $option->option_value );
			
			// Extract widget ID from the option name
			$widget_id   = str_replace( "weather_atlas_widget_", "", $option->option_name );
			$widget_name = isset( $widget_data[ 'widget_name' ] ) ? $widget_data[ 'widget_name' ] : 'Weather Atlas Widget ' . $widget_id;
			
			// Generate edit link
			$edit_link = admin_url( 'admin.php?page=weather-atlas-widget&edit_widget_id=' . $widget_id );
			
			// Generate delete link
			$delete_link = admin_url( 'admin.php?page=weather-atlas&action=delete&widget_id=' . $widget_id );
			
			// Display edit and delete links
			
			echo "<div class='weather_demo_wrapper'>";
			echo do_shortcode( '[shortcode-weather-atlas selected_widget_id=' . $widget_id . ']' );
			echo "</div>";
			echo "<div style='text-align:center;'>";
			echo "<a href='" . esc_url( $edit_link ) . "' class='button button-primary button-large'>" . __( 'Edit' ) . " " . esc_html( $widget_name ) . "</a> ";
			echo "<a href='" . esc_url( $delete_link ) . "' class='button button-large' onclick='return confirm(\"" . esc_js( __( 'Are you sure you want to delete this widget?', 'weather-atlas' ) ) . "\")'>" . __( 'Delete' ) . "</a>";
			echo "</div>";
			
			echo "<br/><br/><br/>";
		}
		
		if ( count( $widgets ) < 10 )
		{
			// Link to add new
			echo "<div style='text-align:center;margin:20px 0 30px 0;'>";
			echo "<a href='" . esc_url( admin_url( 'admin.php?page=weather-atlas-widget&new_widget=true' ) ) . "' class='button button-primary button-hero'>" . __( 'Add New Location', 'weather-atlas' ) . "</a>";
			echo "</div>";
		}
		else
		{
			echo "<div class='notice notice-error' style='margin:20px 0 30px 0;'>";
			echo "<p>" . __( 'Fair usage policy restricts widget instances to a maximum of 10. Please edit or delete existing widgets before adding new ones.', 'weather-atlas' ) . "</p>";
			echo "</div>";
		}
	?>


</div>