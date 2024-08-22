<?php
	
	/**
	 * Uninstall script for the Weather Atlas plugin.
	 *
	 * This file is executed when the plugin is uninstalled from the WordPress dashboard.
	 * It includes security checks to ensure that the uninstallation is legitimate and
	 * performed with proper authorization. Developers should ensure that this process
	 * cleans up all data created by the plugin, such as options, transients, and custom
	 * database tables, particularly for multisite installations.
	 *
	 * @link       https://www.weather-atlas.com
	 * @package    Weather_Atlas
	 */
	
	// Security check to verify that the uninstallation is initiated by WordPress.
	if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
	{
		exit; // Exit if uninstall is not called from WordPress.
	}
	
	// The following code would handle the cleanup tasks; it is currently not present:
	// - Perform nonce checks
	// - Verify user capabilities
	// - Check if the request to uninstall is for this plugin
	// - Clean up the data stored in the database (options, post meta, etc.)
	// - Optionally, handle data cleanup differently for single and multisite installations.
	
	// Note: Actual cleanup code should follow here.
