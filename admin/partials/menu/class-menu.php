<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Module_Reporting_For_Learndash
 * @subpackage Module_Reporting_For_Learndash/admin/partials
 */

if ( ! class_exists( 'MenuSetup' ) ) {
	class MenuSetup {

		public $functional;

		public function __construct( $functional ) {
			$this->functional = $functional;
			add_action( 'admin_menu', array( $this, 'wpdocs_register_my_custom_menu_page' ) );
		}

		/**
		 * Register a custom menu page.
		 *
		 * @return void
		 */
		public function wpdocs_register_my_custom_menu_page() {
			add_menu_page(
				__( 'module_reporting', 'module-reporting-for-learndash' ),
				'Module Reporting',
				'manage_options',
				'module_reporting',
				array( $this->functional, 'module_reporting_menu_page' ),
				'dashicons-tagcloud',
				6
			);
		}

		/**
		 * Register a sub menu page.
		 *
		 * @return void
		 */
		public function wpdocs_register_my_custom_submenu_page() {

			add_submenu_page(
				'module_reporting',
				'Module Reporting',
				'Module Reporting',
				'manage_options',
				'module_reporting',
				array( $this->functional, 'module_reporting_menu_page' ),
			);

			// add_submenu_page(
			// 	'module_reporting',
			// 	'Add New',
			// 	'Add New',
			// 	'manage_options',
			// 	'add_new',
			// 	array( $this->functional, 'module_reporting_sub_menu_page_addnew' ),
			// );
		}


	}
}