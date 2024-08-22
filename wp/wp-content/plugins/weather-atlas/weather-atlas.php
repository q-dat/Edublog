<?php
	
	/**
	 * @link              https://www.weather-atlas.com
	 * @package           Weather_Atlas
	 *
	 * @wordpress-plugin
	 * Plugin Name:       Weather Atlas Widget
	 * Plugin URI:        https://wordpress.org/plugins/weather-atlas/
	 * Description:       Highly customizable, simple & beautiful Weather Widget / Responsive web design / Detailed current conditions, hourly & long-term weather forecast <strong>::::::::: <em>New feature!</em> ::::::::: Enhance your website by dedicating an entire page to the weather. In addition to all relevant weather information, the widget now displays detailed textual daily and long-term weather forecasts.</strong>
	 * Version:           3.0.1
	 * Author:            Weather Atlas
	 * Author URI:        https://www.weather-atlas.com
	 * License:           GPL-2.0+
	 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
	 * Text Domain:       weather-atlas
	 * Domain Path:       /languages
	 */
	
	// If this file is called directly, abort.
	if ( ! defined( 'WPINC' ) )
	{
		die;
	}
	
	/**
	 * Currently plugin version.
	 * Start at version 1.0.0 and use SemVer - https://semver.org
	 * Rename this for your plugin and update it as you release new versions.
	 */
	define( 'WEATHER_ATLAS_VERSION', '3.0.1' );
	
	/**
	 * The code that runs during plugin activation.
	 * This action is documented in includes/class-weather-atlas-activator.php
	 */
	function activate_weather_atlas()
	{
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-weather-atlas-activator.php';
		Weather_Atlas_Activator::activate();
	}
	
	/**
	 * The code that runs during plugin deactivation.
	 * This action is documented in includes/class-weather-atlas-deactivator.php
	 */
	function deactivate_weather_atlas()
	{
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-weather-atlas-deactivator.php';
		Weather_Atlas_Deactivator::deactivate();
	}
	
	register_activation_hook( __FILE__, 'activate_weather_atlas' );
	register_deactivation_hook( __FILE__, 'deactivate_weather_atlas' );
	
	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	require plugin_dir_path( __FILE__ ) . 'includes/class-weather-atlas.php';
	
	/**
	 * Begins execution of the plugin.
	 *
	 * Since everything within the plugin is registered via hooks,
	 * then kicking off the plugin from this point in the file does
	 * not affect the page life cycle.
	 *
	 * @since    1.0.0
	 */
	function run_weather_atlas()
	{
		$plugin = new Weather_Atlas();
		$plugin->run();
	}
	
	run_weather_atlas();
	
	//
	
	require_once plugin_dir_path( __FILE__ ) . 'block/class-weather-atlas-rest-api.php';
	$weather_atlas_rest_api = new Weather_Atlas_REST_API();