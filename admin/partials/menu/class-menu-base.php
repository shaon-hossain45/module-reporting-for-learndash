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

if ( ! class_exists( 'MenuBaseSetup' ) ) {
	class MenuBaseSetup {
		/**
		 * Menu page function callback
		 *
		 * @return void
		 */




		 private function get_modules_files($directory = null) {
			$uploads_dir = wp_upload_dir();
			$base_dir = $uploads_dir['basedir'] . '/modules';
			$base_url = $uploads_dir['baseurl'] . '/modules';
		
			$directory = $directory ?? $base_dir;
			$files = [];
		
			if (is_dir($directory)) {
				foreach (scandir($directory) as $file) {
					if ($file === '.' || $file === '..') {
						continue;
					}
		
					$file_path = $directory . '/' . $file;
		
					// Skip the 'data' folder
					if (is_dir($file_path) && strtolower($file) === 'data') {
						continue;
					}
		
					if (is_dir($file_path)) {
						// Recurse into subdirectories, excluding 'data'
						$files = array_merge($files, $this->get_modules_files($file_path));
					} else {
						// Add only HTML files
						if (preg_match('/\.html$/i', $file)) {
							$relative_path = str_replace($base_dir . '/', '', $file_path);
							$files[] = [
								'name' => $file,
								'path' => $relative_path,
								'url'  => $base_url . '/' . $relative_path,
							];
						}
					}
				}
			}

			return $files;
		}


		public function module_reporting_menu_page() {
			//include_once plugin_dir_path( dirname( __FILE__ ) ) . 'views/page.php';


			if (!current_user_can('manage_options')) {
				return;
			}

			$files = $this->get_modules_files();
			?>
			<div class="wrap">
				<h1>HTML Files Viewer</h1>
				<table class="wp-list-table widefat fixed striped">
					<thead>
						<tr>
							<th>File Name</th>
							<th>Path</th>
							<th>Link</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if (!empty($files)) {
							foreach ($files as $file): ?>
								<tr>
									<td><?php echo esc_html($file['name']); ?></td>
									<td>
										<?php echo esc_html('modules/' . $file['path']); ?>
									</td>
									<td>
										<a href="<?php echo esc_url($file['url']); ?>" target="_blank">
											Open File
										</a>
									</td>
									<td>
										<button class="copy-link-btn" data-link="<?php echo esc_url($file['url']); ?>">
											Copy Link
										</button>
									</td>
								</tr>
							<?php endforeach;
						} else { ?>
							<tr>
								<td colspan="3">No HTML files found in the uploads/modules directory.</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<?php

		}

		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function module_reporting_sub_menu_page_addnew() {
			echo 'shaon2222';
		}

	}
}