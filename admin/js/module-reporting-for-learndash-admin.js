(function ($) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	document.addEventListener('DOMContentLoaded', function () {
		const copyButtons = document.querySelectorAll('.copy-link-btn');

		copyButtons.forEach(button => {
			button.addEventListener('click', function () {
				const link = this.getAttribute('data-link');

				navigator.clipboard.writeText(link).then(() => {
					// Change button text to "Copied"
					this.textContent = 'Copied';
					this.disabled = true;

					// Optionally reset back to "Copy Link" after 2 seconds
					setTimeout(() => {
						this.textContent = 'Copy Link';
						this.disabled = false;
					}, 2000);
				}).catch(err => {
					console.error('Failed to copy link:', err);
				});
			});
		});
	});

})(jQuery);
