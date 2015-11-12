jQuery(document).ready(function($) {

    function fix_grid_tops(position){

		// only Shackslides 3
		// -------------------

		if (jQuery('#slider-position .owl-carousel .owl-item .jss-image').length) {
			var position_image_height = jQuery(position + ' .img-block').height() + 20;
			var slider_height = jQuery('#slider-position .owl-carousel .owl-item .jss-image').height();
			var slider_height_default = 651;
			var position_image_slider_height = slider_height_default + position_image_height;
			var slider_new_height = 0;
			var window_height = jQuery(window).height();
			var window_width = jQuery(window).width();

			if (window_height > position_image_slider_height) {
				slider_new_height = window_height - position_image_height;
				jQuery('#slider-position .owl-carousel .owl-item .jss-image').height(slider_new_height);
			}
		}

    }

	fix_grid_tops('#grid-top');

	jQuery(window).load(function() {
		fix_grid_tops('#grid-top');
	});

	jQuery(window).resize(function() {
		fix_grid_tops('#grid-top');
	});

});