<?php
class TS_Video_Gallery_Public {
	private $plugin_name;
	private $version;
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version     = $version;
	}
	public function enqueue_styles() {
		wp_enqueue_style( 'tsvg-fonts', plugin_dir_url( __DIR__ ) . 'public/css/tsvg-fonts.css', array(), $this->version, 'all' );
	}
	public function enqueue_scripts() {
		wp_enqueue_script("jquery");
	}
}
