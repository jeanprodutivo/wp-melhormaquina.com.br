<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.livemedia.marketing/
 * @since      1.0.0
 *
 * @package    Backexit_Redirect
 * @subpackage Backexit_Redirect/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Backexit PLUS LiveMedia
 * @subpackage Backexit_Redirect/includes
 * @author     Live Media. <gerencia@nucleoexpert.com>
 */
class Backexit_Redirect_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'backexit-redirect',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
