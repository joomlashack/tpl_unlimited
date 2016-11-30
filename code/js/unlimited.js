jQuery(document).ready(function($) {

	var slider_container = jQuery('.jss-slider');
	var slider_id = [];

	slider_container.each(function() {
		slider_id.push('#' + jQuery(this).attr('id'));
	});

	for (var i = 0; i < slider_id.length; i++) {
		jQuery('#slider-position').find(slider_id[i] + ' .jss-image').css('height', '100vh');
	}

});
