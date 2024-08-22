<?php
	
	/**
	 * The admin-specific functionality of the plugin.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/admin
	 */
	
	/**
	 * The admin-specific functionality of the plugin.
	 * Defines the plugin name, version, and hooks for how to
	 * enqueue the admin-specific stylesheet and JavaScript.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/admin
	 * @author     Weather Atlas <admin@weather-atlas.com>
	 */
	class Weather_Atlas_Admin
	{
		
		/**
		 * The ID of this plugin.
		 *
		 * @access   private
		 * @var      string $plugin_name The ID of this plugin.
		 */
		private $plugin_name;
		
		/**
		 * The version of this plugin.
		 *
		 * @access   private
		 * @var      string $version The current version of this plugin.
		 */
		private $version;
		
		/**
		 * Initialize the class and set its properties.
		 *
		 * @param string $plugin_name The name of this plugin.
		 * @param string $version     The version of this plugin.
		 */
		public function __construct( $plugin_name, $version )
		{
			$this->plugin_name = $plugin_name;
			$this->version     = $version;
			
			// Hook for adding admin menus
			add_action( 'admin_menu', array (
				$this,
				'plugin_admin_menu'
			) );
			
			// Hook the combined function to 'admin_init'
			add_action( 'admin_init', array (
				$this,
				'admin_init_actions'
			) );
		}
		
		public function admin_init_actions()
		{
			// Check if it's the main admin page
			if ( is_admin() && isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] === $this->plugin_name )
			{
				$this->check_version_update();
				$this->check_and_perform_conversion();
			}
		}
		
		/**
		 * Register the stylesheets for the admin area.
		 */
		public function enqueue_styles()
		{
			wp_enqueue_style( $this->plugin_name . '-admin', plugins_url( 'admin/css/weather-atlas-admin.min.css', dirname( __FILE__ ) ), array (), $this->version, 'all' );
			wp_enqueue_style( $this->plugin_name . '-public', plugins_url( 'public/css/weather-atlas-public.min.css', dirname( __FILE__ ) ), array (), $this->version, 'all' );
			wp_enqueue_style( 'weather-icons', plugins_url( 'public/font/weather-icons/weather-icons.min.css', dirname( __FILE__ ) ), array (), $this->version, 'all' );
			// wp_enqueue_style( 'weather-icons-wind', plugins_url( 'public/font/weather-icons/weather-icons-wind.min.css', dirname( __FILE__ ) ), array (), $this->version, 'all' );
			
			wp_enqueue_style( 'wpb-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans', FALSE );
			wp_enqueue_style( 'wp-color-picker' );
		}
		
		/**
		 * Register the JavaScript for the admin area.
		 */
		public function enqueue_scripts()
		{
			if ( is_admin() && isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] === $this->plugin_name . '-widget' )
			{
				wp_enqueue_script( $this->plugin_name . '-admin', plugins_url( 'admin/js/weather-atlas-admin.min.js', dirname( __FILE__ ) ), array (), $this->version, TRUE );
				
				wp_enqueue_script( 'wp-color-picker' );
				wp_enqueue_script( 'wp-color-picker-alpha', plugins_url( 'admin/js/wp-color-picker-alpha.min.js', dirname( __FILE__ ) ), array ( 'wp-color-picker' ), '3.0.3', TRUE );
				wp_add_inline_script( 'wp-color-picker-alpha', 'jQuery(function($) { $(".color-picker").wpColorPicker(); });' );
			}
		}
		
		//
		//
		//
		//
		//
		//
		//
		//
		
		/**
		 * Handles the addition of admin menu items for the plugin.
		 */
		
		public function plugin_admin_menu()
		{
			// Add a top-level menu item to the admin sidebar
			add_menu_page( 'Weather Atlas', // Page title
			               'Weather Atlas', // Menu title
			               'manage_options', // Capability required to access
			               $this->plugin_name, // Menu slug
			               array (
				               $this,
				               'weather_atlas'
			               ), // Callback function to display the settings page
			               'dashicons-admin-generic' // Icon URL or a Dashicons class
			);
			
			// Add a submenu item under the top-level menu with a different slug
			add_submenu_page( $this->plugin_name, // Parent menu slug
			                  __( 'Edit location', 'weather-atlas' ), // Page title
			                  __( 'Add New', 'weather-atlas' ), // Menu title
			                  'manage_options', // Capability required to access
			                  $this->plugin_name . '-widget', // Different menu slug for the submenu
			                  array (
				                  $this,
				                  'weather_atlas_add_location'
			                  ) // Callback function to display the settings page
			);
			
			// Add a submenu item under the top-level menu with a different slug
			add_submenu_page( $this->plugin_name, // Parent menu slug
			                  __( 'Settings' ), // Page title
			                  __( 'Settings' ), // Menu title
			                  'manage_options', // Capability required to access
			                  $this->plugin_name . '-settings', // Different menu slug for the submenu
			                  array (
				                  $this,
				                  'weather_atlas_locations'
			                  ) // Callback function to display the settings page
			);
		}
		
		//
		
		public function weather_atlas()
		{
			// Check user capabilities
			if ( ! current_user_can( 'manage_options' ) )
			{
				return;
			}
			
			// Include the settings page view file
			include_once( 'weather-atlas.php' );
		}
		
		//
		
		public function weather_atlas_add_location()
		{
			// Check user capabilities
			if ( ! current_user_can( 'manage_options' ) )
			{
				return;
			}
			
			// Include the settings page view file
			include_once( 'weather-atlas-widget.php' );
		}
		
		//
		
		public function weather_atlas_locations()
		{
			// Check user capabilities
			if ( ! current_user_can( 'manage_options' ) )
			{
				return;
			}
			
			// Include the settings page view file
			include_once( 'weather-atlas-settings.php' );
		}
		
		
		//
		//
		//
		//
		//
		//
		//
		//
		
		/**
		 * Adds custom action links to the plugin entry in the WordPress plugins list.
		 *
		 * @param array $links An array of existing action links for the plugin.
		 *
		 * @return array Modified list of action links.
		 */
		
		static function function_weather_atlas_plugin_action_links( $links )
		{
			// Define the additional links to prepend to the existing links
			$links_prefix = array (
				"<a href='" . admin_url( 'admin.php?page=weather-atlas' ) . "'>&#9679; " . __( 'Settings' ) . "</a><br/>",
				"<a href='https://wordpress.org/plugins/weather-atlas' target='_blank'>" . __( 'Plugin' ) . "</a>",
				"<a href='https://wordpress.org/support/plugin/weather-atlas' target='_blank'>" . __( 'Support' ) . "</a>",
				"<a href='https://wordpress.org/support/plugin/weather-atlas/reviews/' target='_blank'> " . __( 'Reviews' ) . "</a><br/>"
			);
			
			// Define the additional links to append to the existing links
			$links_suffix = array ();
			
			// Merge the new links with existing ones and return them
			return array_merge( $links_prefix, $links, $links_suffix );
		}
		
		/**
		 * Checks if the installed plugin version is up to date and updates the version stored in the database if necessary.
		 */
		public function check_version_update()
		{
			// Retrieve the currently installed version from the WordPress database
			$current_version = get_option( 'weather_atlas_version' );
			
			// Compare the stored version with the version of the plugin; if it's lower, update it to the current
			if ( empty( $current_version ) || version_compare( $current_version, $this->version, '<' ) )
			{
				// Update the version in the database to match the current version of the plugin
				update_option( 'weather_atlas_version', $this->version );
			}
		}
		
		public function check_and_perform_conversion()
		{
			// Check if the conversion has already been done
			if ( get_option( 'weather_atlas_conversion_done' ) === 'yes' )
			{
				return; // Exit if conversion has been done
			}
			
			// Retrieve old widget data
			$widget_data      = get_option( 'widget_weather_atlas' );
			$widget_instances = maybe_unserialize( $widget_data );
			
			$counter = 0; // Initialize a counter
			
			// Convert existing widgets first, up to a maximum of 10
			foreach ( $widget_instances as $instance_id => $instance_config )
			{
				if ( $instance_id !== '_multiwidget' && $counter < 10 )
				{
					$new_widget_id = 'weather_atlas_widget_' . explode( '-', wp_generate_uuid4() )[ 0 ];
					
					// Assuming $instance_config is an array, update it with a user-friendly widget name
					$instance_config[ 'widget_name' ] = str_ireplace( "weather_atlas_widget_", "imported legacy Weather Atlas Widget ", $new_widget_id );
					
					// Serialize the instance_config if it's an array
					$serialized_config = is_array( $instance_config ) ? serialize( $instance_config ) : $instance_config;
					
					update_option( $new_widget_id, $instance_config );
					$counter ++; // Increment counter
				}
			}
			
			// Add example widgets if the total count is still under 10
			if ( $counter < 10 )
			{
				$example_widgets = [
					'a:14:{s:11:"widget_name";s:14:"Athens, Greece";s:13:"city_selector";s:2:"57";s:9:"city_name";s:14:"Athens, Greece";s:7:"current";s:1:"1";s:14:"sunrise_sunset";s:1:"1";s:6:"hourly";s:1:"5";s:5:"daily";s:1:"5";s:6:"layout";s:10:"horizontal";s:7:"heading";s:0:"";s:6:"header";s:0:"";s:9:"font_size";s:0:"";s:10:"text_color";s:0:"";s:16:"background_color";s:15:"rgb(30,115,190)";s:8:"unit_c_f";s:1:"c";}',
					'a:14:{s:11:"widget_name";s:14:"Beijing, China";s:13:"city_selector";s:6:"531240";s:9:"city_name";s:14:"Beijing, China";s:7:"current";s:1:"1";s:14:"sunrise_sunset";s:1:"1";s:6:"hourly";s:1:"0";s:5:"daily";s:1:"5";s:6:"layout";s:10:"horizontal";s:7:"heading";s:0:"";s:6:"header";s:0:"";s:9:"font_size";s:0:"";s:10:"text_color";s:0:"";s:16:"background_color";s:0:"";s:8:"unit_c_f";s:1:"f";}',
					'a:14:{s:11:"widget_name";s:27:"Dubai, United Arab Emirates";s:13:"city_selector";s:5:"26905";s:9:"city_name";s:27:"Dubai, United Arab Emirates";s:7:"current";s:1:"1";s:14:"sunrise_sunset";s:1:"1";s:6:"hourly";s:1:"0";s:5:"daily";s:1:"5";s:6:"layout";s:10:"horizontal";s:7:"heading";s:0:"";s:6:"header";s:0:"";s:9:"font_size";s:0:"";s:10:"text_color";s:0:"";s:16:"background_color";s:0:"";s:8:"unit_c_f";s:1:"c";}',
					'a:17:{s:11:"widget_name";s:13:"Paris, France";s:13:"city_selector";s:2:"47";s:9:"city_name";s:13:"Paris, France";s:7:"current";s:1:"1";s:14:"sunrise_sunset";s:1:"1";s:6:"hourly";s:1:"5";s:5:"daily";s:1:"5";s:10:"text_today";s:1:"1";s:13:"text_tomorrow";s:1:"1";s:14:"text_long_term";s:1:"1";s:6:"layout";s:10:"horizontal";s:7:"heading";s:0:"";s:6:"header";s:0:"";s:9:"font_size";s:0:"";s:10:"text_color";s:0:"";s:16:"background_color";s:13:"rgb(0,90,180)";s:8:"unit_c_f";s:1:"c";}',
					'a:14:{s:11:"widget_name";s:15:"Los Angeles, CA";s:13:"city_selector";s:7:"2338111";s:9:"city_name";s:15:"Los Angeles, CA";s:7:"current";s:1:"1";s:14:"sunrise_sunset";s:1:"1";s:6:"hourly";s:1:"3";s:5:"daily";s:1:"3";s:6:"layout";s:8:"vertical";s:7:"heading";s:0:"";s:6:"header";s:0:"";s:9:"font_size";s:0:"";s:10:"text_color";s:0:"";s:16:"background_color";s:0:"";s:8:"unit_c_f";s:1:"f";}',
					'a:14:{s:11:"widget_name";s:12:"New York, NY";s:13:"city_selector";s:7:"2372139";s:9:"city_name";s:12:"New York, NY";s:7:"current";s:1:"0";s:14:"sunrise_sunset";s:1:"0";s:6:"hourly";s:1:"0";s:5:"daily";s:1:"0";s:6:"layout";s:8:"vertical";s:7:"heading";s:0:"";s:6:"header";s:0:"";s:9:"font_size";s:0:"";s:10:"text_color";s:0:"";s:16:"background_color";s:0:"";s:8:"unit_c_f";s:1:"f";}',
				];
				
				foreach ( $example_widgets as $example )
				{
					if ( $counter < 10 )
					{
						$new_widget_id = 'weather_atlas_widget_' . explode( '-', wp_generate_uuid4() )[ 0 ];
						update_option( $new_widget_id, unserialize( $example ) );
						$counter ++; // Increment counter
					}
					else
					{
						break; // Stop if we reach 10 widgets
					}
				}
			}
			
			// Set the flag indicating conversion is complete
			update_option( 'weather_atlas_conversion_done', 'yes' );
		}
		
	}
	
	// Adds a filter hook that allows modification of the plugin action links. This is typically used to add
	// custom links to the plugin list page in the WordPress admin area (such as 'Settings' or 'Configure' links).
	add_filter( 'plugin_action_links_weather-atlas/weather-atlas.php', array (
		'Weather_Atlas_Admin',
		'function_weather_atlas_plugin_action_links'
	) );// Where $priority is default 10, $accepted_args is default 1.
