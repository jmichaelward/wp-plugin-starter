<?php
/**
 * Plugin Name: WP Plugin Starter
 * Description: A boilerplate project to quickly scaffold up new WordPress plugins.
 * Author: Jeremy Ward
 * Author URI: https://jmichaelward.com
 * Version: 0.1.0
 *
 * @package JMichaelWard\WPPluginStarter
 */

namespace JMichaelWard\WPPluginStarter;

if ( ! class_exists( 'JMichaelWard\WPPluginStarter\Plugin' ) ) {
	try {
		require_once plugin_dir_path( __FILE__ ) . 'src/autoload.php';

		spl_autoload_register( __NAMESPACE__ . '\autoload' );
	} catch ( \Throwable $e ) {
		// @TODO Implement actual error handling.
		return;
	}
}

add_action( 'plugins_loaded', [ new Plugin(), 'run' ] );
