<?php
	
	/**
	 * Fired during plugin activation
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 */
	
	/**
	 * Fired during plugin activation.
	 * This class defines all code necessary to run during the plugin's activation.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 * @author     Weather Atlas <admin@weather-atlas.com>
	 */
	class Weather_Atlas_Activator
	{
		
		/**
		 * Method to be run upon plugin activation.
		 *
		 * This function is hooked to register_activation_hook() function call and it will
		 * run when the WordPress activates the plugin. It is used to perform initial setup
		 * tasks like setting up default options and database tables for the plugin.
		 */
		public static function activate()
		{
			// Activation code should be added here.
			
			// For example:
			// add_option('weather_atlas_option_name', 'default value');
			// flush_rewrite_rules();
			// ... Any additional setup tasks ...
		}
	}
	
