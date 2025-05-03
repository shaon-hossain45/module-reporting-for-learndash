<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Module_Reporting_For_Learndash
 * @subpackage Module_Reporting_For_Learndash/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Module_Reporting_For_Learndash
 * @subpackage Module_Reporting_For_Learndash/admin
 * @author     Md Shaon Hossain <shaonhossain615@gmail.com>
 */
class Module_Reporting_For_Learndash_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->admin_load_dependencies();
		if ( class_exists( 'Module_Reporting_For_Learndash_Admin_Display' ) ) {
			new Module_Reporting_For_Learndash_Admin_Display();
		}

	}

	/**
	 * Load Dependencies.
	 *
	 * @since    1.0.0
	 */
	private function admin_load_dependencies() {
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/module-reporting-for-learndash-admin-display.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Module_Reporting_For_Learndash_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Module_Reporting_For_Learndash_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/module-reporting-for-learndash-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Module_Reporting_For_Learndash_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Module_Reporting_For_Learndash_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/module-reporting-for-learndash-admin.js', array( 'jquery' ), $this->version, false );

	}

}
