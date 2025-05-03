<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/shaon-hossain45/
 * @since             1.0.0
 * @package           Module_Reporting_For_Learndash
 *
 * @wordpress-plugin
 * Plugin Name:       Module Reporting for LearnDash
 * Plugin URI:        https://https://github.com/shaon-hossain45/module-reporting-for-learndash
 * Description:       Module Reporting for LearnDash, Support with HTML & SCORM file with iframe.
 * Version:           1.0.0
 * Author:            Md Shaon Hossain
 * Author URI:        https://https://github.com/shaon-hossain45//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       module-reporting-for-learndash
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MODULE_REPORTING_FOR_LEARNDASH_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-module-reporting-for-learndash-activator.php
 */
function activate_module_reporting_for_learndash() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-module-reporting-for-learndash-activator.php';
	Module_Reporting_For_Learndash_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-module-reporting-for-learndash-deactivator.php
 */
function deactivate_module_reporting_for_learndash() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-module-reporting-for-learndash-deactivator.php';
	Module_Reporting_For_Learndash_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_module_reporting_for_learndash' );
register_deactivation_hook( __FILE__, 'deactivate_module_reporting_for_learndash' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-module-reporting-for-learndash.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_module_reporting_for_learndash() {

	$plugin = new Module_Reporting_For_Learndash();
	$plugin->run();

}
run_module_reporting_for_learndash();
