<?php
	// Assuming your namespace and use declarations here if you have any
	
	class Weather_Atlas_REST_API
	{
		
		public function __construct()
		{
			add_action( 'rest_api_init', array (
				$this,
				'register_routes'
			) );
		}
		
		public function register_routes()
		{
			register_rest_route( 'weather-atlas/v1', '/widgets', array (
				'methods'             => 'GET',
				'callback'            => array (
					$this,
					'get_weather_widgets'
				),
				'permission_callback' => '__return_true'
			) );
		}
		
		public function get_weather_widgets()
		{
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
			
			$formatted_widgets = array ();
			foreach ( $widgets as $widget )
			{
				$widget_data         = maybe_unserialize( $widget->option_value );
				$formatted_widgets[] = array (
					'id'          => str_replace( 'weather_atlas_widget_', '', $widget->option_name ),
					'widget_name' => $widget_data[ 'widget_name' ]
					// or other relevant data
				);
			}
			
			return $formatted_widgets;
		}
	}