<?php
/**
 * Blank Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package  Blank
 * @since    0.1.0
 */

/**
 * Autoloader
 */
require_once __DIR__ . '/includes/autoload.php';

if ( ! function_exists( 'blank' ) ) {
	/**
	 * Helper function to interact with theme instance.
	 *
	 * @param string|null $key Theme object key.
	 * @return Blank\Theme|object
	 */
	function blank( $key = null ) {
		static $theme;

		if ( ! $theme ) {
			$theme = new Blank\Theme();
		}

		return $key ? $theme->$key : $theme;
	}
}

/**
 * Load theme options from `options` directory.
 */
blank()->load_options();
