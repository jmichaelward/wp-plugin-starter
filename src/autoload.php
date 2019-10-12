<?php
/**
 * Fallback autoloader for WordPress installations that are not using Composer.
 *
 * @package JMichaelWard\WPPluginStarter
 */

namespace JMichaelWard\WPPluginStarter;

/**
 * Quick and dirty custom autoloader if the class files are not already available via Composer.
 *
 * This function ignores all non JMichaelWard\WPPluginStarter namespaced classes, then performs a require on the class
 * based on the PSR-4 standard. This presumes that the class file names match the name of the class itself, and
 * is following the directory structure as defined by the namespace.
 *
 * @param string $class_name Name of the class to autoload.
 *
 * @author Jeremy Ward <jeremy@jmichaelward.com>
 * @since  2019-10-12
 * @return void
 */
function autoload( $class_name ) {
	if ( false === strpos( $class_name, __NAMESPACE__ ) ) {
		return;
	}

	$parts     = explode( '\\', $class_name );
	$file_path = implode( DIRECTORY_SEPARATOR, array_splice( $parts, 2 ) );

	require_once trailingslashit( __DIR__ ) . $file_path . '.php';
}
