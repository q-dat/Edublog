<?php
	/*
		Plugin name: Gallery
		Plugin URI: https://total-soft.com/wp-video-gallery/
		Description: Gallery is a user-friendly plugin to display user or hashtag-based gallery feeds as a responsive customizable gallery.
		Version: 2.3.7
		Author: Video Gallery by Total-Soft
		Author URI: https://total-soft.com/
		License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
	*/
	if ( ! defined( 'WPINC' ) ) {
		die;
	}
	define( 'TSVG_VERSION', '2.3.7' );
	define( 'TSVG_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
	define( 'TSVG_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
	function tsvg_acitvate_plugin() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-tsvg-activator.php';
		TS_Video_Gallery_Activate::activate();
	}
	function tsvg_deacitvate_plugin() {
		require_once plugin_dir_path( __FILE__ ) . 'includes/class-tsvg-deactivator.php';
		TS_Video_Gallery_Deactivate::deactivate();
	}
	register_activation_hook( __FILE__, 'tsvg_acitvate_plugin' );
	register_deactivation_hook( __FILE__, 'tsvg_deacitvate_plugin' );
	require plugin_dir_path( __FILE__ ) . 'includes/class-tsvg-gallery.php';
	function tsvg_run_plugin() {
		$tsvg_plugin = new TS_Video_Gallery();
		$tsvg_plugin->run();
	}
	tsvg_run_plugin();
?>
