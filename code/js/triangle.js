jQuery(document).ready(function($) {

	function triangle_width () {
		var triangle = jQuery('.bg-transform');

		triangle.each(function () {
			jQuery(this).css('border-right-width', jQuery('body').width() + 'px');
		});
	}

	triangle_width();

	jQuery(window).resize(function () {
		triangle_width();
	});
});
