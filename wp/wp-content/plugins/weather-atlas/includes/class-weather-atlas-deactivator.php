<?php
	
	/**
	 * Fired during plugin deactivation
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 */
	
	/**
	 * Fired during plugin deactivation.
	 * This class defines all code necessary to run during the plugin's deactivation.
	 *
	 * @package    Weather_Atlas
	 * @subpackage Weather_Atlas/includes
	 * @author     Weather Atlas <admin@weather-atlas.com>
	 */
	class Weather_Atlas_Deactivator
	{
		
		/**
		 * Clean up the database on plugin deactivation.
		 *
		 * This function is called when the plugin is deactivated. It removes all transients
		 * used by the plugin from the wp_options table, ensuring a clean deactivation and
		 * helping to prevent any potential conflicts or database bloat from unused data.
		 */
		public static function deactivate()
		{
			global $wpdb; // Gain access to the WordPress database object
			
			// SQL query to delete transients related to Weather Atlas from the options table
			$wpdb->query( "DELETE FROM `$wpdb->options` WHERE `option_name` LIKE '%weather_atlas_transient_%'" );
		}
		
	}
