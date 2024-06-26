<?php
/**
 * Plugin Name:       Block Course Plugin
 * Description:       example plugin.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Sifat
 * Text Domain:      blocks-course
 *
 */

 include_once('php/metabox.php');
 include_once('php/templates.php');
 include_once('php/patterns.php');
 include_once('php/filters.php');

function blocks_course_plugin_enqueue_assets() {

    $asset_file = include(plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_enqueue_script( 'blocks-course-plugin-script', plugins_url('build/index.js', __FILE__), $asset_file['dependencies'], $asset_file['version']); 
}

add_action( 'enqueue_block_editor_assets', 'blocks_course_plugin_enqueue_assets' );