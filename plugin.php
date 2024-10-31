<?php
/**
 * Plugin Name: Schema -Google Blocks
 * Plugin URI: https://gutenberglab.com/schema-for-gutenberg-editor/
 * Description: schema — Add schema code on your webpages using Gutenberg editor
 * Author: Gutenberglab
 * Author URI: https://gutenberglab.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';


function google_schema( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'google-schema',
				'title' => __( 'Google Schema', 'Google Schema' ),
			),
		)
	);

}

add_filter( 'block_categories', 'google_schema', 10, 2);
