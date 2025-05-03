<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Module_Reporting_For_Learndash
 * @subpackage Module_Reporting_For_Learndash/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Module_Reporting_For_Learndash
 * @subpackage Module_Reporting_For_Learndash/includes
 * @author     Md Shaon Hossain <shaonhossain615@gmail.com>
 */
class Module_Reporting_For_Learndash_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'module-reporting-for-learndash',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
