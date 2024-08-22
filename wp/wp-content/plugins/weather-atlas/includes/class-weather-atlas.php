<?php
	
	/**
	 * The file that defines the core plugin class
	 * A class definition that includes attributes and functions used across both the
	 * public-facing side of the site and the admin area.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 */
	
	/**
	 * The core plugin class.
	 * This is used to define internationalization, admin-specific hooks, and
	 * public-facing site hooks.
	 * Also maintains the unique identifier of this plugin as well as the current
	 * version of the plugin.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 * @author     Weather Atlas <admin@weather-atlas.com>
	 */
	class Weather_Atlas extends WP_Widget
	{
		
		/**
		 * The loader that's responsible for maintaining and registering all hooks that power
		 * the plugin.
		 *
		 * @access   protected
		 * @var      Weather_Atlas_Loader $loader Maintains and registers all hooks for the plugin.
		 */
		protected $loader;
		
		/**
		 * The unique identifier of this plugin.
		 *
		 * @access   protected
		 * @var      string $plugin_name The string used to uniquely identify this plugin.
		 */
		protected $plugin_name;
		
		/**
		 * The current version of the plugin.
		 *
		 * @access   protected
		 * @var      string $version The current version of the plugin.
		 */
		protected $version;
		
		/**
		 * Define the core functionality of the plugin.
		 * Set the plugin name and the plugin version that can be used throughout the plugin.
		 * Load the dependencies, define the locale, and set the hooks for the admin area and
		 * the public-facing side of the site.
		 */
		
		/**
		 * Initialize the plugin
		 */
		public function __construct()
		{
			if ( defined( 'WEATHER_ATLAS_VERSION' ) )
			{
				$this->version = WEATHER_ATLAS_VERSION;
			}
			else
			{
				$this->version = '3.0.1';
			}
			
			// Set the plugin name.
			$this->plugin_name = 'weather-atlas';
			
			// Define widget options including the description text.
			$widget_ops = array (
				'description' => __( 'Display current conditions and weather forecast on your website.', 'weather-atlas' )
			);
			
			// Call the parent constructor of WP_Widget to initialize the base widget functionality.
			parent::__construct( FALSE, 'Weather Atlas Widget', $widget_ops );
			
			// Load plugin dependencies (such as other classes or functions necessary for the plugin to run).
			$this->load_dependencies();
			
			// Set the localization feature to make the plugin translatable.
			$this->set_locale();
			
			// Define hooks that will affect the admin area of WordPress.
			$this->define_admin_hooks();
			
			// Define hooks that will affect the public-facing side of the site.
			$this->define_public_hooks();
			
			// Run the loader to execute all hooks
			$this->loader->run();
			
			// Hook to register Gutenberg block
			add_action( 'init', array (
				$this,
				'register_gutenberg_block'
			) );
		}
		
		/**
		 * Load the required dependencies for this plugin.
		 * Include the following files that make up the plugin:
		 * - Weather_Atlas_Loader. Orchestrates the hooks of the plugin.
		 * - Weather_Atlas_i18n. Defines internationalization functionality.
		 * - Weather_Atlas_Admin. Defines all hooks for the admin area.
		 * - Weather_Atlas_Public. Defines all hooks for the public side of the site.
		 * Create an instance of the loader which will be used to register the hooks
		 * with WordPress.
		 *
		 * @access   private
		 */
		
		private function load_dependencies()
		{
			/**
			 * The class responsible for orchestrating the actions and filters of the
			 * core plugin.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-weather-atlas-loader.php';
			
			/**
			 * The class responsible for defining internationalization functionality
			 * of the plugin.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-weather-atlas-i18n.php';
			
			/**
			 * The class responsible for defining all actions that occur in the admin area.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-weather-atlas-admin.php';
			
			/**
			 * The class responsible for defining all actions that occur in the public-facing
			 * side of the site.
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-weather-atlas-public.php';
			
			/**
			 * Initialize the Weather_Atlas_Loader object to manage and execute the plugin's hooks
			 * (actions and filters)
			 */
			
			$this->loader = new Weather_Atlas_Loader();
		}
		
		/**
		 * Define the locale for this plugin for internationalization.
		 * Uses the Weather_Atlas_i18n class in order to set the domain and to register the hook
		 * with WordPress.
		 *
		 * @access   private
		 */
		private function set_locale()
		{
			$plugin_i18n = new Weather_Atlas_i18n();
			
			$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
		}
		
		/**
		 * Register all of the hooks related to the admin area functionality
		 * of the plugin.
		 *
		 * @access   private
		 */
		private function define_admin_hooks()
		{
			$plugin_admin = new Weather_Atlas_Admin( $this->get_plugin_name(), $this->get_version() );
			
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		}
		
		/**
		 * Register all of the hooks related to the public-facing functionality
		 * of the plugin.
		 *
		 * @access   private
		 */
		private function define_public_hooks()
		{
			$plugin_public = new Weather_Atlas_Public( $this->get_plugin_name(), $this->get_version() );
			
			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
			$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		}
		
		/**
		 * The name of the plugin used to uniquely identify it within the context of
		 * WordPress and to define internationalization functionality.
		 *
		 * @return    string    The name of the plugin.
		 */
		public function get_plugin_name()
		{
			return $this->plugin_name;
		}
		
		/**
		 * Retrieve the version number of the plugin.
		 *
		 * @return    string    The version number of the plugin.
		 */
		public function get_version()
		{
			return $this->version;
		}
		
		public function run()
		{
			add_action( 'widgets_init', array (
				$this,
				'register_widgets'
			) );
		}
		
		public function register_widgets()
		{
			register_widget( $this );
		}
		
		public function register_gutenberg_block()
		{
			$script_path      = plugins_url( '/block/block.min.js', dirname( __FILE__ ) );
			$script_file_path = plugin_dir_path( dirname( __FILE__ ) ) . 'block/block.min.js';
			
			// Register block editor script
			wp_register_script( 'weather-atlas-block-editor', $script_path, array (
				'wp-blocks',
				'wp-element',
				'wp-editor'
			), file_exists( $script_file_path ) ? filemtime( $script_file_path ) : FALSE );
			
			register_block_type( 'weather-atlas/weather-widget', array (
				'editor_script'   => 'weather-atlas-block-editor',
				'render_callback' => function( $attributes ) {
					return Weather_Atlas::handle_shortcode( [
						                                        'selected_widget_id' => $attributes[ 'selected_widget_id' ] ?? ''
					                                        ] );
				}
			) );
		}
		
		public static function handle_shortcode( $attributes )
		{
			if ( isset( $attributes[ 'selected_widget_id' ] ) )
			{
				// New shortcode format
				$widget_id  = $attributes[ 'selected_widget_id' ];
				$attributes = get_option( 'weather_atlas_widget_' . $widget_id );
			}
			elseif ( isset( $attributes[ 'city_selector' ] ) )
			{
				// Legacy shortcode format
			}
			else
			{
				// No identifier provided, handle this case (perhaps return an error or default widget)
				return 'Please specify a widget ID or city selector.';
			}
			
			// Instantiate the widget with dummy args and the fetched config
			$widget   = new self();
			$args     = []; // Necessary args for widget display
			$instance = $attributes; // Use the fetched config as instance parameters
			
			// Capture the output of the widget method
			ob_start();
			$widget->widget( $args, $instance );
			
			return ob_get_clean();
		}
		
		/*--------------------------------------------------*/
		/* Widget API Functions
		/*--------------------------------------------------*/
		
		/**
		 * Generates the administration form for the widget.
		 *
		 * This method handles the HTML form displayed in the WordPress admin
		 * dashboard for the widget. It allows users to modify settings such as title,
		 * category, etc. It outputs form fields for these settings, which are filled with
		 * data from the current $instance of the widget or default values.
		 *
		 * @param array instance The array of keys and values for the widget.
		 */
		
		// The widget form in WP Admin
		public function form( $instance )
		{
		}
		
		/**
		 * Processes the widget's options to be saved.
		 *
		 * This method is called when the widget is saved in the admin dashboard. It allows
		 * developers to filter and sanitize widget options before they are saved to the database.
		 * The sanitized instance is then returned and saved to the database.
		 *
		 * @param array new_instance The new instance of values to be generated via the update.
		 * @param array old_instance The previous instance of values before the update.
		 *
		 * @return array The sanitized instance that will be saved to the database.
		 */
		
		// Update widget settings
		public function update( $new_instance, $old_instance )
		{
			return $new_instance;
		}
		
		/**
		 * Front-end display of the widget
		 * Outputs the content of the widget.
		 *
		 * @param array args  The array of form elements
		 * @param array instance The current instance of the widget
		 */
		public function widget( $args, $instance )
		{
			// Setup widget markup elements.
			$before_widget = $args[ 'before_widget' ] ?? '';
			$after_widget  = $args[ 'after_widget' ] ?? '';
			$before_title  = $args[ 'before_title' ] ?? '';
			$after_title   = $args[ 'after_title' ] ?? '';
			
			// Retrieve and process widget instance settings.
			// Default values are provided for each setting.
			$city_selector    = intval( $instance[ 'city_selector' ] ?? 2372139 );
			$country_selector = intval( $instance[ 'country_selector' ] ?? 250 );
			$current          = intval( $instance[ 'current' ] ?? 1 );
			$sunrise_sunset   = intval( $instance[ 'sunrise_sunset' ] ?? 1 );
			$hourly           = intval( $instance[ 'hourly' ] ?? 5 );
			$daily            = intval( $instance[ 'daily' ] ?? 5 );
			$text_today       = intval( $instance[ 'text_today' ] ?? 0 );
			$text_tomorrow    = intval( $instance[ 'text_tomorrow' ] ?? 0 );
			$text_long_term   = intval( $instance[ 'text_long_term' ] ?? 0 );
			
			$heading   = ! empty( $instance[ 'heading' ] ) ? remove_stray_quotes( $instance[ 'heading' ] ) : FALSE;
			$header    = ! empty( $instance[ 'header' ] ) ? remove_stray_quotes( $instance[ 'header' ] ) : FALSE;
			$font_size = $instance[ 'font_size' ] ?? FALSE;
			$layout    = ! empty( $instance[ 'layout' ] ) ? remove_stray_quotes( $instance[ 'layout' ] ) : 'horizontal';
			$unit_c_f  = ! empty( $instance[ 'unit_c_f' ] ) ? remove_stray_quotes( $instance[ 'unit_c_f' ] ) : 'f';
			
			// Extract primary language code from site's locale.
			$locale_components = explode( "_", get_locale() );
			$locale_root       = $locale_components[ 0 ];
			$language_root_wp  = in_array( $locale_root, [
				'en',
				'es',
				'zh'
			] ) ? $locale_root : 'en';
			
			// Define units based on temperature scale.
			if ( $unit_c_f === 'c' )
			{
				// Units for Celsius
				$def_unit_temperature   = '°C';
				$unit_kph_mph           = 'kph';
				$def_unit_windspeed     = 'km/h';
				$unit_mm_in             = 'mm';
				$def_unit_precipitation = 'mm';
				$unit_mb_in             = 'mb';
				$def_unit_pressure      = 'mbar';
				$unit_km_mi             = 'km';
				$def_unit_distance      = 'km';
			}
			else
			{
				// Units for Fahrenheit
				$def_unit_temperature   = '°F';
				$unit_kph_mph           = 'mph';
				$def_unit_windspeed     = 'mph';
				$unit_mm_in             = 'in';
				$def_unit_precipitation = '"';
				$unit_mb_in             = 'in';
				$def_unit_pressure      = '"Hg';
				$unit_km_mi             = 'mi';
				$def_unit_distance      = 'mi';
			}
			// Common units not depending on temperature scale
			$def_unit_degree  = '°';
			$def_unit_percent = '%';
			
			$us_states_abbr = [
				"Alabama"                              => "AL",
				"Alaska"                               => "AK",
				"Arizona"                              => "AZ",
				"Arkansas"                             => "AR",
				"California"                           => "CA",
				"Colorado"                             => "CO",
				"Connecticut"                          => "CT",
				"Delaware"                             => "DE",
				"Florida"                              => "FL",
				"Georgia"                              => "GA",
				"Hawaii"                               => "HI",
				"Idaho"                                => "ID",
				"Illinois"                             => "IL",
				"Indiana"                              => "IN",
				"Iowa"                                 => "IA",
				"Kansas"                               => "KS",
				"Kentucky"                             => "KY",
				"Louisiana"                            => "LA",
				"Maine"                                => "ME",
				"Maryland"                             => "MD",
				"Massachusetts"                        => "MA",
				"Michigan"                             => "MI",
				"Minnesota"                            => "MN",
				"Mississippi"                          => "MS",
				"Missouri"                             => "MO",
				"Montana"                              => "MT",
				"Nebraska"                             => "NE",
				"Nevada"                               => "NV",
				"New Hampshire"                        => "NH",
				"New Jersey"                           => "NJ",
				"New Mexico"                           => "NM",
				"New York"                             => "NY",
				"North Carolina"                       => "NC",
				"North Dakota"                         => "ND",
				"Ohio"                                 => "OH",
				"Oklahoma"                             => "OK",
				"Oregon"                               => "OR",
				"Pennsylvania"                         => "PA",
				"Rhode Island"                         => "RI",
				"South Carolina"                       => "SC",
				"South Dakota"                         => "SD",
				"Tennessee"                            => "TN",
				"Texas"                                => "TX",
				"Utah"                                 => "UT",
				"Vermont"                              => "VT",
				"Virginia"                             => "VA",
				"Washington"                           => "WA",
				"West Virginia"                        => "WV",
				"Wisconsin"                            => "WI",
				"Wyoming"                              => "WY",
				"District of Columbia"                 => "DC",
				"American Samoa"                       => "AS",
				"Guam"                                 => "GU",
				"Northern Mariana Islands"             => "MP",
				"Puerto Rico"                          => "PR",
				"United States Minor Outlying Islands" => "UM",
				"Virgin Islands, U.S."                 => "VI"
			];
			
			// 12h clock - United States, United Kingdom, Ireland, Canada, Australia, New Zealand, India, Pakistan, Bangladesh, Philippines, Malaysia, Malta, Egypt, Mexico, Nepal
			$twelve_country_selector_array = array (
				250,
				219,
				110,
				54,
				33,
				155,
				106,
				163,
				36,
				169,
				133,
				136,
				9,
				142,
				153
			);
			
			// Fetch weather data.
			$weather_atlas_data = weather_atlas_data( $city_selector );
			
			// If no data is returned, abort the widget rendering.
			if ( ! empty( $weather_atlas_data ) )
			{
				// json2array
				// Decode the JSON-formatted weather data into an associative array.
				$weather_atlas_data_array = json_decode( $weather_atlas_data, TRUE );
				
				// Check if the decoded data is a valid array.
				if ( is_array( $weather_atlas_data_array ) )
				{
					// Check if the data is not empty and is an array before processing.
					if ( ! empty( $weather_atlas_data ) && is_array( $weather_atlas_data_array ) )
					{
						// Process city-related information from the weather data
						if ( array_key_exists( "city", $weather_atlas_data_array ) )
						{
							$city_selector                         = array_key_exists( 'city_selector', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'city_selector' ] : FALSE;
							$country_selector                      = array_key_exists( 'country_selector', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'country_selector' ] : FALSE;
							$iso_3166_2                            = array_key_exists( 'iso_3166_2', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'iso_3166_2' ] : FALSE;
							$http_root                             = array_key_exists( 'http_root', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'http_root' ] : FALSE;
							${'country_name_' . $language_root_wp} = array_key_exists( 'country_name_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'country_name_' . $language_root_wp ] : FALSE;
							if ( $country_selector == 250 )
							{
								// Split the country name to get the state
								$country_name_abbr = explode( ', ', ${'country_name_' . $language_root_wp} );
								// Replace the state name with its abbreviation if it exists in the array
								if ( count( $country_name_abbr ) === 2 && array_key_exists( trim( $country_name_abbr[ 0 ] ), $us_states_abbr ) )
								{
									$country_name_abbr = $us_states_abbr[ trim( $country_name_abbr[ 0 ] ) ];
								}
							}
							else
							{
								$country_name_abbr = strtoupper( $iso_3166_2 );
							}
							${'country_name_rewrite_' . $language_root_wp} = array_key_exists( 'country_name_rewrite_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'country_name_rewrite_' . $language_root_wp ] : FALSE;
							${'city_name_' . $language_root_wp}            = array_key_exists( 'city_name_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'city_name_' . $language_root_wp ] : FALSE;
							${'city_name_rewrite_' . $language_root_wp}    = array_key_exists( 'city_name_rewrite_' . $language_root_wp, $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'city_name_rewrite_' . $language_root_wp ] : FALSE;
							$time_of_sunrise                               = array_key_exists( 'time_of_sunrise', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'time_of_sunrise' ] : FALSE;
							$time_of_sunset                                = array_key_exists( 'time_of_sunset', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'time_of_sunset' ] : FALSE;
							$timezone_abbr                                 = array_key_exists( 'timezone_abbr', $weather_atlas_data_array[ 'city' ] ) ? $weather_atlas_data_array[ 'city' ][ 'timezone_abbr' ] : FALSE;
						}
						
						if ( array_key_exists( "def", $weather_atlas_data_array ) )
						{
							${'def_tomorrow_rewrite_' . $language_root_wp}  = array_key_exists( 'def_tomorrow_rewrite_' . $language_root_wp, $weather_atlas_data_array[ 'def' ] ) ? $weather_atlas_data_array[ 'def' ][ 'def_tomorrow_rewrite_' . $language_root_wp ] : FALSE;
							${'def_long_term_rewrite_' . $language_root_wp} = array_key_exists( 'def_long_term_rewrite_' . $language_root_wp, $weather_atlas_data_array[ 'def' ] ) ? $weather_atlas_data_array[ 'def' ][ 'def_long_term_rewrite_' . $language_root_wp ] : FALSE;
							${'def_climate_rewrite_' . $language_root_wp}   = array_key_exists( 'def_climate_rewrite_' . $language_root_wp, $weather_atlas_data_array[ 'def' ] ) ? $weather_atlas_data_array[ 'def' ][ 'def_climate_rewrite_' . $language_root_wp ] : FALSE;
						}
						
						if ( array_key_exists( "text", $weather_atlas_data_array ) )
						{
							${'text_today_' . $unit_c_f}     = array_key_exists( 'today_' . $unit_c_f, $weather_atlas_data_array[ 'text' ] ) ? $weather_atlas_data_array[ 'text' ][ 'today_' . $unit_c_f ] : FALSE;
							${'text_tomorrow_' . $unit_c_f}  = array_key_exists( 'tomorrow_' . $unit_c_f, $weather_atlas_data_array[ 'text' ] ) ? $weather_atlas_data_array[ 'text' ][ 'tomorrow_' . $unit_c_f ] : FALSE;
							${'text_long_term_' . $unit_c_f} = array_key_exists( 'long_term_' . $unit_c_f, $weather_atlas_data_array[ 'text' ] ) ? $weather_atlas_data_array[ 'text' ][ 'long_term_' . $unit_c_f ] : FALSE;
						}
						
						if ( array_key_exists( "current", $weather_atlas_data_array ) )
						{
							${'current_temp_' . $unit_c_f}           = array_key_exists( 'current_temp_' . $unit_c_f, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_temp_' . $unit_c_f ] : FALSE;
							${'current_temp_feelslike_' . $unit_c_f} = array_key_exists( 'current_temp_feelslike_' . $unit_c_f, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_temp_feelslike_' . $unit_c_f ] : FALSE;
							$weather_current_icon                    = array_key_exists( 'current_icon', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_icon' ] : FALSE;
							$current_text_en                         = array_key_exists( 'current_text_en', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_text_en' ] : FALSE;
							${'current_wind_' . $unit_kph_mph}       = array_key_exists( 'current_wind_' . $unit_kph_mph, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_wind_' . $unit_kph_mph ] : FALSE;
							$weather_current_wind_dir                = array_key_exists( 'current_wind_dir', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_wind_dir' ] : FALSE;
							$weather_current_wind_deg                = array_key_exists( 'current_wind_deg', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_wind_deg' ] : FALSE;
							$weather_current_humidity_relative       = array_key_exists( 'current_humidity_relative', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_humidity_relative' ] : FALSE;
							// ${'current_dew_point_' . $unit_c_f}         = array_key_exists( 'current_dew_point_' . $unit_c_f, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_dew_point_' . $unit_c_f ] : FALSE;
							${'current_pressure_' . $unit_mb_in} = array_key_exists( 'current_pressure_' . $unit_mb_in, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_pressure_' . $unit_mb_in ] : FALSE;
							// ${'current_precip_' . $unit_mm_in}         = array_key_exists( 'current_precip_' . $unit_mm_in, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_precip_' . $unit_mm_in ] : FALSE;
							// ${'current_visibility_' . $unit_km_mi}         = array_key_exists( 'current_visibility_' . $unit_km_mi, $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_visibility_' . $unit_km_mi ] : FALSE;
							$weather_current_uv_index = array_key_exists( 'current_uv_index', $weather_atlas_data_array[ 'current' ] ) ? $weather_atlas_data_array[ 'current' ][ 'current_uv_index' ] : FALSE;
						}
						
						// Determine the background and text colors based on the current temperature.
						if ( array_key_exists( "current", $weather_atlas_data_array ) && array_key_exists( "current_temp_c", $weather_atlas_data_array[ 'current' ] ) )
						{
							// Get color based on the current temperature.
							list( $background_color, $text_color ) = weather_atlas_temperature_color( $weather_atlas_data_array[ 'current' ][ 'current_temp_c' ] );
							
							// Override with user-defined colors if provided and sanitize them.
							$background_color = ! empty( $instance[ 'background_color' ] ) ? sanitize_color( $instance[ 'background_color' ] ) : $background_color;
							$text_color       = ! empty( $instance[ 'text_color' ] ) ? sanitize_color( $instance[ 'text_color' ] ) : $text_color;
						}
						else
						{
							// Default colors if no temperature data is available.
							$background_color = '#fafafa'; // Default background color.
							$text_color       = '#333'; // Default text color.
						}
						
						// Adjust the border color based on the background color.
						$border_color = weather_atlas_adjust_brightness( $background_color, - 17 );
						
						//
						//
						//
						//
						//
						
						// Output the widget's before and after title markup
						echo $before_widget;
						
						if ( ! empty( $heading ) )
						{
							// If the heading is not empty, apply the filter for widget title and display it
							echo $before_title . apply_filters( 'widget_title', $heading ) . $after_title;
						}
						
						// Start building the widget HTML.
						echo "<div class='weather-atlas-wrapper' style='";
						
						// Add font size to the style if it's set.
						if ( ! empty( $font_size ) )
						{
							echo "font-size:" . esc_attr( $font_size ) . ";";
						}
						
						// Continue building the style attribute with background color, border, and text color.
						echo "background:" . esc_attr( $background_color ) . ";";
						echo "border:" . esc_attr( $border_color ) . ";";
						echo "color:" . esc_attr( $text_color ) . ";'>";
						
						// Add the widget header with dynamic styling for the border.
						echo "<div class='weather-atlas-header' style='border-bottom:" . esc_attr( $border_color ) . "'>";
						
						// Determine the header title based on provided attributes or default to the city name.
						$header_title = ! empty( $header ) ? $header : ${'city_name_' . $language_root_wp} . ", " . esc_html( $country_name_abbr );
						
						// Append the header title to the output string.
						echo esc_html( $header_title );
						
						// Close the header div.
						echo '</div>';
						
						//
						
						// Start building the HTML content for the widget body.
						echo "<div class='weather-atlas-body'>";
						
						// Default to vertical layout if $current is empty.
						if ( empty( $current ) )
						{
							$layout = 'vertical';
						}
						
						// Apply horizontal layout styling if specified.
						if ( $layout === 'horizontal' )
						{
							echo "<div class='current_horizontal'>";
						}
						
						//
						//
						//
						
						// Display the current temperature.
						echo "<div class='current_temp'>";
						
						// Include weather icon if available.
						if ( ! empty( $weather_current_icon ) )
						{
							echo "<i class='wi wi-fw wi-weather-$weather_current_icon'></i>";
						}
						
						// Show the current temperature if set and numeric.
						if ( isset( ${'current_temp_' . $unit_c_f} ) && is_numeric( ${'current_temp_' . $unit_c_f} ) )
						{
							echo "<span class='temp'>" . ${'current_temp_' . $unit_c_f} . $def_unit_degree . "</span>";
						}
						
						// Display current weather text if available.
						if ( ! empty( $current_text_en ) )
						{
							echo "<div class='current_text'>" . esc_html( __( $current_text_en, 'weather-atlas' ) ) . "</div>";
						}
						
						// Show sunrise and sunset times if available.
						if ( ( $sunrise_sunset == '1' ) && ! empty( $time_of_sunrise ) && ! empty( $time_of_sunset ) && ! empty( $timezone_abbr ) )
						{
							echo "<div class='sunrise_sunset'>" . esc_html( $time_of_sunrise ) . "<i class='wi wi-fw wi-weather-32'></i>" . esc_html( $time_of_sunset ) . " " . esc_html( $timezone_abbr ) . "</div>";
						}
						
						echo "</div>"; // Close current_temp div
						
						// Check if current weather data is available and the 'current' key exists in the data array.
						if ( ! empty( $current ) && array_key_exists( "current", $weather_atlas_data_array ) )
						{
							echo "<span class='current_text_2'>";
							
							// Display 'Feels Like' temperature if available.
							if ( is_numeric( ${'current_temp_feelslike_' . $unit_c_f} ) )
							{
								echo esc_html( __( 'Feels like', 'weather-atlas' ) ) . ": ";
								echo esc_html( ${'current_temp_feelslike_' . $unit_c_f} ) . "<small>" . esc_html( $def_unit_temperature ) . "</small><br/>";
							}
							
							// Display wind details if available.
							if ( is_numeric( ${'current_wind_' . $unit_kph_mph} ) )
							{
								echo esc_html( __( 'Wind', 'weather-atlas' ) ) . ": ";
								echo esc_html( ${'current_wind_' . $unit_kph_mph} ) . "<small>" . esc_html( $def_unit_windspeed ) . "</small>";
								echo ( $language_root_wp == 'en' ) ? " " . esc_html( $weather_current_wind_dir ) : " " . esc_html( $weather_current_wind_deg ) . "<small>" . esc_html( $def_unit_degree ) . "</small>";
								echo "<br/>";
							}
							
							// Display humidity if available.
							if ( is_numeric( $weather_current_humidity_relative ) )
							{
								echo esc_html( __( 'Humidity', 'weather-atlas' ) ) . ": ";
								echo esc_html( $weather_current_humidity_relative ) . "<small>" . esc_html( $def_unit_percent ) . "</small><br/>";
							}
							
							// Display pressure if available.
							if ( is_numeric( ${'current_pressure_' . $unit_mb_in} ) )
							{
								echo esc_html( __( 'Pressure', 'weather-atlas' ) ) . ": ";
								echo esc_html( ${'current_pressure_' . $unit_mb_in} ) . "<small>" . esc_html( $def_unit_pressure ) . "</small><br/>";
							}
							
							// Display UV index if available.
							if ( is_numeric( $weather_current_uv_index ) )
							{
								echo esc_html( __( 'UV index', 'weather-atlas' ) ) . ": ";
								echo esc_html( $weather_current_uv_index );
							}
							echo "</span>";
						}
						
						// Close the horizontal layout div if horizontal layout is used.
						if ( $layout === 'horizontal' )
						{
							echo "</div>";
						}
						
						//
						//
						//
						
						// Check if hourly data is available and included in the data array.
						if ( ! empty( $hourly ) && array_key_exists( "hourly", $weather_atlas_data_array ) )
						{
							echo "<div class='hourly hours' style='border-bottom:" . esc_attr( $border_color ) . "'>";
							
							// Loop through the hourly data.
							for ( $ii = 1; $ii <= $hourly; $ii ++ )
							{
								if ( array_key_exists( $ii, $weather_atlas_data_array[ 'hourly' ] ) )
								{
									echo "<span class='extended_hour extended_hour_$ii'>";
									
									// Get hour information from the data array.
									$hour = array_key_exists( 'hour', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour' ] : FALSE;
									
									// Display the hour in appropriate format.
									if ( is_numeric( $hour ) )
									{
										if ( in_array( $country_selector, $twelve_country_selector_array ) )
										{
											// Convert to 12h format.
											$formatted_hour = convert_to_12_hour_format( $hour );
											echo esc_html( $formatted_hour );
										}
										else
										{
											// Display in 24h format.
											echo esc_html( $hour ) . "<small>" . esc_html( __( 'h', 'weather-atlas' ) ) . "</small>";
										}
									}
									
									echo "</span>";
								}
							}
							echo "</div>"; // Closing div for hourly data
							
							echo "<div class='hourly'>";
							
							// Loop again for additional hourly data.
							for ( $ii = 1; $ii <= $hourly; $ii ++ )
							{
								if ( array_key_exists( $ii, $weather_atlas_data_array[ 'hourly' ] ) )
								{
									${'hour_temp_' . $unit_c_f} = array_key_exists( 'hour_temp_' . $unit_c_f, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_temp_' . $unit_c_f ] : FALSE;
									// ${'hour_temp_feelslike_' . $unit_c_f} = array_key_exists( 'hour_temp_feelslike_' . $unit_c_f, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_temp_feelslike_' . $unit_c_f ] : FALSE;
									$weather_hourly_icon = array_key_exists( 'hour_icon', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_icon' ] : FALSE;
									$hour_text_en        = array_key_exists( 'hour_text_en', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_text_en' ] : FALSE;
									// ${'hour_wind_' . $unit_kph_mph}     = array_key_exists( 'hour_wind_' . $unit_kph_mph, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_wind_' . $unit_kph_mph ] : FALSE;
									// $weather_hourly_wind_dir                      = array_key_exists( 'hour_wind_dir', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_wind_dir' ] : FALSE;
									// $weather_hourly_wind_deg                      = array_key_exists( 'hour_wind_deg', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_wind_deg' ] : FALSE;
									// $weather_hourly_humidity_relative             = array_key_exists( 'hour_humidity_relative', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_humidity_relative' ] : FALSE;
									// ${'hour_dew_point_' . $unit_c_f}    = array_key_exists( 'hour_dew_point_' . $unit_c_f, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_dew_point_' . $unit_c_f ] : FALSE;
									// ${'hour_pressure_' . $unit_mb_in}   = array_key_exists( 'hour_pressure_' . $unit_mb_in, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_pressure_' . $unit_mb_in ] : FALSE;
									// ${'hour_precip_' . $unit_mm_in}     = array_key_exists( 'hour_precip_' . $unit_mm_in, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_precip_' . $unit_mm_in ] : FALSE;
									// $weather_hourly_precipitation_probability            = array_key_exists( 'hour_precipitation_probability', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_precipitation_probability' ] : FALSE;
									// ${'hour_visibility_' . $unit_km_mi} = array_key_exists( 'hour_visibility_' . $unit_km_mi, $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_visibility_' . $unit_km_mi ] : FALSE;
									// $weather_hourly_uv_index                      = array_key_exists( 'hour_uv_index', $weather_atlas_data_array[ 'hourly' ][ $ii ] ) ? $weather_atlas_data_array[ 'hourly' ][ $ii ][ 'hour_uv_index' ] : FALSE;
									
									echo "<span class='extended_hour extended_hour_$ii'";
									if ( ! empty( $hour_text_en ) )
									{
										echo " title='";
										echo __( $hour_text_en, 'weather-atlas' );
										echo "'";
									}
									echo ">";
									if ( is_numeric( ${'hour_temp_' . $unit_c_f} ) )
									{
										echo ${'hour_temp_' . $unit_c_f} . "<small>" . $def_unit_temperature . "</small>";
									}
									if ( ! empty( $weather_hourly_icon ) )
									{
										echo "<br/><i class='wi wi-fw wi-weather-$weather_hourly_icon'></i>";
									}
									echo "</span>";
								}
							}
							
							echo "</div>";
						}
						
						//
						//
						//
						
						// Check if daily data is available and included in the data array.
						if ( ! empty( $daily ) && array_key_exists( "daily", $weather_atlas_data_array ) )
						{
							echo "<div class='daily days' style='border-bottom:" . esc_attr( $border_color ) . "'>";
							
							// Loop through the daily data.
							for ( $ii = 1; $ii <= $daily; $ii ++ )
							{
								if ( array_key_exists( $ii, $weather_atlas_data_array[ 'daily' ] ) )
								{
									echo "<span class='extended_day extended_day_$ii'>";
									
									// Get the short day name and display it if available.
									$day_name_en_short = array_key_exists( 'day_name_en_short', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_name_en_short' ] : FALSE;
									if ( ! empty( $day_name_en_short ) )
									{
										echo esc_html( __( $day_name_en_short, 'weather-atlas' ) );
									}
									
									echo "</span>";
								}
							}
							echo "</div>";
							
							// Prepare HTML for daily weather details.
							echo "<div class='daily'>";
							for ( $ii = 1; $ii <= $daily; $ii ++ )
							{
								if ( array_key_exists( $ii, $weather_atlas_data_array[ 'daily' ] ) )
								{
									${'day_temp_high_' . $unit_c_f} = array_key_exists( 'day_temp_high_' . $unit_c_f, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_temp_high_' . $unit_c_f ] : FALSE;
									${'day_temp_low_' . $unit_c_f}  = array_key_exists( 'day_temp_low_' . $unit_c_f, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_temp_low_' . $unit_c_f ] : FALSE;
									$weather_daily_icon             = array_key_exists( 'day_icon', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_icon' ] : FALSE;
									$day_text_en                    = array_key_exists( 'day_text_en', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_text_en' ] : FALSE;
									
									// ${'day_wind_' . $unit_kph_mph} = array_key_exists( 'day_wind_' . $unit_kph_mph, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_wind_' . $unit_kph_mph ] : FALSE;
									// $weather_daily_wind_dir                  = array_key_exists( 'day_wind_dir', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_wind_dir' ] : FALSE;
									// $weather_daily_wind_deg                  = array_key_exists( 'day_wind_deg', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_wind_deg' ] : FALSE;
									// $weather_daily_humidity_relative         = array_key_exists( 'day_humidity_relative', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_humidity_relative' ] : FALSE;
									// ${'day_precip_' . $unit_mm_in} = array_key_exists( 'day_precip_' . $unit_mm_in, $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_precip_' . $unit_mm_in ] : FALSE;
									// $weather_daily_precipitation_probability        = array_key_exists( 'day_precipitation_probability', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_precipitation_probability' ] : FALSE;
									// $weather_daily_uv_index                  = array_key_exists( 'day_uv_index', $weather_atlas_data_array[ 'daily' ][ $ii ] ) ? $weather_atlas_data_array[ 'daily' ][ $ii ][ 'day_uv_index' ] : FALSE;
									
									// Build the HTML structure for each day.
									echo "<span class='extended_day extended_day_$ii'";
									if ( ! empty( $day_text_en ) )
									{
										echo " title='" . esc_attr( __( $day_text_en, 'weather-atlas' ) ) . "'";
									}
									echo ">";
									
									// Display high and low temperatures.
									if ( is_numeric( ${'day_temp_high_' . $unit_c_f} ) )
									{
										echo ( ${'day_temp_high_' . $unit_c_f} != '-99' ) ? esc_html( ${'day_temp_high_' . $unit_c_f} ) . "<small>" . esc_html( $def_unit_temperature ) . "</small> / " : "min ";
									}
									if ( is_numeric( ${'day_temp_low_' . $unit_c_f} ) )
									{
										echo esc_html( ${'day_temp_low_' . $unit_c_f} ) . "<small>" . esc_html( $def_unit_temperature ) . "</small>";
									}
									
									// Display the weather icon if available.
									if ( ! empty( $weather_daily_icon ) )
									{
										echo "<br/><i class='wi wi-fw wi-weather-" . esc_attr( $weather_daily_icon ) . "'></i>";
									}
									// echo "<br/><small>" . esc_attr( __( $day_text_en, 'weather-atlas' ) ) . "</small>";
									
									echo "</span>";
								}
							}
							echo "</div>";
						}
						
						//
						
						// Construct the URL for the weather details.
						$url = $http_root . '/' . $language_root_wp;
						if ( ! empty( ${'country_name_rewrite_' . $language_root_wp} ) && ! empty( ${'city_name_rewrite_' . $language_root_wp} ) )
						{
							$url .= "/" . ${'country_name_rewrite_' . $language_root_wp} . "/" . ${'city_name_rewrite_' . $language_root_wp};
						}
						
						if ( $country_selector == 250 && $unit_c_f == 'c' )
						{
							$url_units = "?units=c,mm,mb,km";
						}
						elseif ( $country_selector != 250 && $unit_c_f == 'f' )
						{
							$url_units = "?units=f,in,in,mi";
						}
						else
						{
							$url_units = "";
						}
						
						//
						//
						//
						
						if ( $text_today == '1' || $text_tomorrow == '1' || $text_long_term == '1' )
						{
							echo "<div class='weather-atlas-text' style='border:" . esc_attr( $border_color ) . "'>";
						}
						
						//
						
						if ( ! empty( $text_today ) )
						{
							echo "<a href='" . esc_url( $url . $url_units ) . "' title='" . esc_attr( ${'city_name_' . $language_root_wp} ) . ", " . esc_attr( $country_name_abbr ) . " - " . esc_attr( __( 'Weather forecast for today' ) ) . "' style='color:" . esc_attr( $text_color ) . "'>";
							echo esc_html( __( 'Weather forecast for today' ) );
							echo "</a>";
							echo "<hr style='border:" . esc_attr( $border_color ) . "'>";
							
							echo nl2br( ${'text_today_' . $unit_c_f} ) . "<br /><br />";
						}
						
						//
						
						if ( ! empty( $text_tomorrow ) )
						{
							echo "<a href='" . esc_url( $url . "-" . esc_attr( ${'def_tomorrow_rewrite_' . $language_root_wp} ) . $url_units ) . "' title='" . esc_attr( ${'city_name_' . $language_root_wp} ) . ", " . esc_attr( $country_name_abbr ) . " - " . esc_attr( __( 'Weather forecast for tomorrow' ) ) . "' style='color:" . esc_attr( $text_color ) . "'>";
							echo esc_html( __( 'Weather forecast for tomorrow' ) );
							echo "</a>";
							echo "<hr style='border:" . esc_attr( $border_color ) . "'>";
							
							echo nl2br( ${'text_tomorrow_' . $unit_c_f} ) . "<br /><br />";
						}
						
						//
						
						if ( ! empty( $text_long_term ) )
						{
							echo "<a href='" . esc_url( $url . "-" . esc_attr( ${'def_long_term_rewrite_' . $language_root_wp} ) . $url_units ) . "' title='" . esc_attr( ${'city_name_' . $language_root_wp} ) . ", " . esc_attr( $country_name_abbr ) . " - " . esc_attr( __( '10 days weather forecast' ) ) . "' style='color:" . esc_attr( $text_color ) . "'>";
							echo esc_html( __( 'Long term weather forecast' ) );
							echo "</a>";
							echo "<hr style='border:" . esc_attr( $border_color ) . "'>";
							
							echo nl2br( ${'text_long_term_' . $unit_c_f} ) . "<br /><br />";
						}
						
						if ( $text_today == '1' || $text_tomorrow == '1' || $text_long_term == '1' )
						{
							echo "</div>";
						}
						
						//
						//
						//
						
						// Close the weather-atlas-body div.
						
						echo "</div>";
						
						//
						//
						//
						
						// Create the footer with a link to the detailed weather forecast.
						echo "<div class='weather-atlas-footer' style='border-top:" . esc_attr( $border_color ) . "'>";
						
						//
						
						if ( is_home() || is_front_page() )
						{
							// Set random_url to 1 on the home page or front page
							$random_url = 1;
						}
						else
						{
							// Generate a random number when in the footer or sidebar and not on home/front pages
							if ( isset( $args[ 'id' ] ) && ( strpos( $args[ 'id' ], 'footer' ) !== FALSE || strpos( $args[ 'id' ], 'sidebar' ) !== FALSE ) )
							{
								$random_url = rand( 1, 20 );
							}
							else
							{
								$random_url = rand( 1, 4 );
							}
						}
						
						//
						
						if ( ( ! empty( $text_tomorrow ) ) AND ( $random_url == 2 ) )
						{
							$random_url = 3;
						}
						if ( ( ! empty( $text_long_term ) ) AND ( $random_url == 3 ) )
						{
							$random_url = 2;
						}
						
						//
						
						switch ( $random_url )
						{
							case 2:
								// Append tomorrow's weather rewrite to the URL and set the title
								$url   .= "-" . esc_attr( ${'def_tomorrow_rewrite_' . $language_root_wp} );
								$title = esc_html( __( 'Weather forecast for tomorrow' ) );
								break;
							
							case 3:
								// Append long-term forecast rewrite to the URL and set the title
								$url   .= "-" . esc_attr( ${'def_long_term_rewrite_' . $language_root_wp} );
								$title = esc_html( __( '10 days weather forecast' ) );
								break;
							
							case 4:
								// Append climate forecast rewrite to the URL and set the title
								$url   .= "-" . esc_attr( ${'def_climate_rewrite_' . $language_root_wp} );
								$title = esc_html( __( 'Climate' ) );
								break;
							
							default:
								// Use the default weather forecast title and base URL
								$title = esc_html( __( 'Weather forecast' ) );
								
								break;
						}
						
						//
						
						// Add the link or branding to the footer
						if ( $random_url <= 4 )
						{
							echo "<a href='" . esc_url( $url . $url_units ) . "' title='" . esc_attr( ${'city_name_' . $language_root_wp} ) . ", " . esc_attr( $country_name_abbr ) . " - " . esc_attr( $title ) . "' style='color:" . esc_attr( $text_color ) . "'>";
							echo "<span class='weather-atlas-footer-block'>";
							echo esc_html( ${'city_name_' . $language_root_wp} ) . ", " . esc_html( $country_name_abbr );
							echo "</span>";
							echo " " . esc_html( strtolower( $title ) ) . " &#9656;";
							echo "</a>";
						}
						else
						{
							echo "powered by <span class='weather-atlas-footer-block'>";
							echo "Weather Atlas";
							echo "</span>";
						}
						
						echo "</div>";
						
						// Close building the widget HTML.
						
						echo "</div>";
						
						// Output the widget's after widget markup
						echo $after_widget;
					}
				}
			}
		}
	}
	
	//
	//
	//
	
	// Registers the shortcode and links it to the static method in Weather_Atlas class
	add_shortcode( 'shortcode-weather-atlas', array (
		'Weather_Atlas',
		'handle_shortcode'
	) );
	
	//
	//
	//
	
	function weather_atlas_data( $city_selector )
	{
		$weather_transient_name = 'weather_atlas_transient_' . $city_selector;
		$return                 = '';
		
		if ( FALSE === ( $value = get_transient( $weather_transient_name ) ) )
		{
			$weather_atlas_settings = get_option( 'weather_atlas_settings', [] );
			$key_owm                = isset( $weather_atlas_settings[ 'key_owm' ] ) ? $weather_atlas_settings[ 'key_owm' ] : '';
			
			$wp_remote_get_url      = 'https://www.weather-atlas.com/weather/api.php';
			$wp_remote_get_url      .= '?city_selector=' . $city_selector;
			$wp_remote_get_url      .= '&key=' . md5( get_site_url() );
			$wp_remote_get_url      .= '&key_owm=' . $key_owm;
			$wp_remote_get_response = wp_remote_get( esc_url_raw( $wp_remote_get_url ) );
			$weather_transient_data = wp_remote_retrieve_body( $wp_remote_get_response );
			
			if ( ! empty ( $weather_transient_data ) )
			{
				set_transient( $weather_transient_name, $weather_transient_data, 900 );
				
				$return = $weather_transient_data;
			}
		}
		else
		{
			$return = get_transient( $weather_transient_name );
		}
		
		return $return;
	}
	
	//
	//
	//
	
	function weather_atlas_hex( $value )
	{
		return sprintf( "%02X", $value );
	}
	
	function sanitize_color( $color )
	{
		// Check for RGBA/RGB format
		if ( preg_match( '/rgba?\((\d{1,3}),\s*(\d{1,3}),\s*(\d{1,3})(,\s*(0|1|0?\.\d+))?\)/', $color ) )
		{
			return $color; // Return the color if it's a valid RGBA/RGB
		}
		else
		{
			// Check for Hexadecimal format
			$sanitized_hex = sanitize_hex_color( $color );
			if ( $sanitized_hex )
			{
				return $sanitized_hex; // Return the color if it's a valid Hex
			}
		}
		
		return ''; // Return empty string if the color is not valid
	}
	
	function weather_atlas_range_pos( $value, $start, $stop )
	{
		if ( $start < $stop )
		{
			if ( $value < $start )
			{
				return 0;
			}
			elseif ( $value > $stop )
			{
				return 1;
			}
			else
			{
				return ( $value - $start ) / ( $stop - $start );
			}
		}
		else
		{
			if ( $value < $stop )
			{
				return 1;
			}
			elseif ( $value > $start )
			{
				return 0;
			}
			else
			{
				return ( $start - $value ) / ( $start - $stop );
			}
		}
	}
	
	function weather_atlas_temperature_color( $celsius )
	{
		$background = "";
		$color      = "";
		
		if ( $celsius < 10 )
		{
			$celsius    = $celsius - 5;
			$background = weather_atlas_hex( weather_atlas_range_pos( $celsius, 0, 10 ) * 255 );
		}
		else
		{
			$celsius    = $celsius + 6;
			$background = weather_atlas_hex( weather_atlas_range_pos( $celsius, 70, 35 ) * 255 );
		}
		if ( $celsius <= 10 )
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, - 35, 10 ) * 255 );
		}
		else
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, 45, 10 ) * 255 );
		}
		if ( $celsius < - 35 )
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, - 90, - 35 ) * 255 );
		}
		else
		{
			$background = $background . weather_atlas_hex( weather_atlas_range_pos( $celsius, 18, 10 ) * 255 );
		}
		if ( ( $celsius < 10 ) OR ( $celsius > 10 ) )
		{
			$color = "fff";
		}
		else
		{
			$color = "000";
		}
		
		return array (
			"#" . $background,
			"#" . $color
		);
	}
	
	function weather_atlas_adjust_brightness( $color, $steps )
	{
		$steps = max( - 255, min( 255, $steps ) );
		
		// Handling RGB/RGBA colors
		if ( preg_match( '/rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)/', $color, $matches ) )
		{
			$r = max( 0, min( 255, $matches[ 1 ] + $steps ) );
			$g = max( 0, min( 255, $matches[ 2 ] + $steps ) );
			$b = max( 0, min( 255, $matches[ 3 ] + $steps ) );
			$a = $matches[ 4 ] ?? 1; // Default to 1 if alpha is not provided
			
			return "1px solid rgba($r, $g, $b, $a)";
		}
		// Handling HEX colors
		elseif ( preg_match( '/#?[0-9a-fA-F]{3,6}/', $color ) )
		{
			$hex = str_replace( '#', '', $color );
			if ( strlen( $hex ) == 3 )
			{
				$hex = str_repeat( substr( $hex, 0, 1 ), 2 ) . str_repeat( substr( $hex, 1, 1 ), 2 ) . str_repeat( substr( $hex, 2, 1 ), 2 );
			}
			
			$r = max( 0, min( 255, hexdec( substr( $hex, 0, 2 ) ) + $steps ) );
			$g = max( 0, min( 255, hexdec( substr( $hex, 2, 2 ) ) + $steps ) );
			$b = max( 0, min( 255, hexdec( substr( $hex, 4, 2 ) ) + $steps ) );
			
			return "1px solid #" . sprintf( "%02x%02x%02x", $r, $g, $b );
		}
		else
		{
			// Invalid color format
			return FALSE;
		}
	}
	
	//
	
	function remove_stray_quotes( $string )
	{
		// Remove any stray single quotes or double quotes
		$string = trim( str_replace( array (
			                             "'",
			                             "\""
		                             ), '', $string ) );
		
		return $string;
	}
	
	function convert_to_12_hour_format( $hour )
	{
		// Function to convert 24-hour format to 12-hour format.
		if ( $hour == 0 )
		{
			return "12 am";
		}
		elseif ( $hour == 12 )
		{
			return "12 pm";
		}
		elseif ( $hour > 12 )
		{
			return ( $hour - 12 ) . " pm";
		}
		else
		{
			return $hour . " am";
		}
	}