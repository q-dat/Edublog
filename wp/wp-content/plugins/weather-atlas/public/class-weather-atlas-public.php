<?php
	
	/**
	 * The public-facing functionality of the plugin.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/public
	 */
	
	/**
	 * The public-facing functionality of the plugin.
	 * Defines the plugin name, version, and hooks to
	 * enqueue the admin-specific stylesheet and JavaScript.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/public
	 * @author     Weather Atlas <admin@weather-atlas.com>
	 */
	class Weather_Atlas_Public
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
		 * @param string $plugin_name The name of the plugin.
		 * @param string $version     The version of this plugin.
		 */
		public function __construct( $plugin_name, $version )
		{
			$this->plugin_name = $plugin_name;
			$this->version     = $version;
		}
		
		/**
		 * Register the stylesheets for the public-facing side of the site.
		 */
		public function enqueue_styles()
		{
			wp_enqueue_style( $this->plugin_name . '-public', plugins_url( 'public/css/weather-atlas-public.min.css', dirname( __FILE__ ) ), array (), $this->version, 'all' );
			wp_enqueue_style( 'weather-icons', plugins_url( 'public/font/weather-icons/weather-icons.min.css', dirname( __FILE__ ) ), array (), $this->version, 'all' );
			// wp_enqueue_style( 'weather-icons-wind', plugins_url( 'public/font/weather-icons/weather-icons-wind.min.css', dirname( __FILE__ ) ), array (), $this->version, 'all' );
			
			wp_enqueue_style( 'wpb-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans', FALSE );
		}
		
		/**
		 * Register the JavaScript for the public-facing side of the site.
		 */
		public function enqueue_scripts()
		{
		}
		
	}
