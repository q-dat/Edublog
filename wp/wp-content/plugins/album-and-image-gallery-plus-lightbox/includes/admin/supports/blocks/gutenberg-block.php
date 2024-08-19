<?php
/**
 * Blocks Initializer
 * 
 * @package WP FAQ Pro
 * @since 1.2.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Blocks Initializer
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 * 
 * 'script_handle' will be BlockName-editor-script (/ will be replaced with dash(-) in BlockName)
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function aigpl_register_guten_block() {

	$blocks = array(
						'gallery' => array(
											'callback' => 'aigpl_gallery_grid',
											'script_handle'	=> 'aigpl-gallery-editor-script',
										),
						'gallery-slider' => array(
											'callback' => 'aigpl_gallery_slider',
											'script_handle'	=> 'aigpl-gallery-slider-editor-script',
										),
						'gallery-album' => array(
											'callback' => 'aigpl_gallery_album',
											'script_handle'	=> 'aigpl-gallery-album-editor-script',
										),
						'gallery-album-slider' => array(
											'callback' => 'aigpl_gallery_album_slider',
											'script_handle'	=> 'aigpl-gallery-album-slider-editor-script',
										),
					);

	foreach ($blocks as $block_key => $block_data) {
		register_block_type( __DIR__ . "/build/{$block_key}", array(
																'render_callback' => $block_data['callback'],
															));
	
		wp_set_script_translations( $block_data['script_handle'], 'album-and-image-gallery-plus-lightbox', AIGPL_DIR . '/languages' );
	}
}
add_action( 'init', 'aigpl_register_guten_block' );

/**
 * Adds a custom variable to the JS to allow a user in the block editor
 * to preview sensitive data.
 *
 * @since 2.0
 * @return void
 */
function aigpl_block_editor_assets() {

	wp_localize_script( 'wp-block-editor', 'Aigplf_Block', array(
																'pro_demo_link' 	=> 'https://demo.essentialplugin.com/prodemo/album-and-image-gallery-plus-lightbox-pro/',
																'free_demo_link' 	=> 'https://demo.essentialplugin.com/album-and-image-gallery-plus-lightbox-demo/',
																'pro_link' 			=> AIGPL_PLUGIN_LINK_UNLOCK,
															));
}
add_action( 'enqueue_block_editor_assets', 'aigpl_block_editor_assets' );

/**
 * Adds an extra category to the block inserter
 *
 * @since 1.0
 */
function aigpl_add_block_category( $categories ) {

	$guten_cats = wp_list_pluck( $categories, 'slug' );

	if( ! empty( $guten_cats ) && ! in_array( 'essp_guten_block', $guten_cats ) ) {
		$categories[] = array(
							'slug'	=> 'essp_guten_block',
							'title'	=> __('Essential Plugin Blocks', 'album-and-image-gallery-plus-lightbox'),
							'icon'	=> null,
						);
	}

	return $categories;
}
add_filter( 'block_categories_all', 'aigpl_add_block_category' );