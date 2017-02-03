jQuery(document).ready(function($) {

	var slider_container = jQuery('.jss-slider');
	var logo_menu_height = jQuery('.wrapp-logo-menu').height();
	var toolbar_height= jQuery('.wrapp-toolbar').height();
	var window_height= jQuery(window).height();
	var top_space = logo_menu_height + toolbar_height;
	var slider_height =  window_height - top_space ;
	var slider_id = [];

	slider_container.each(function() {
		slider_id.push('#' + jQuery(this).attr('id'));
	});

	for (var i = 0; i < slider_id.length; i++) {
		jQuery('#slider-position').find(slider_id[i] + ' .jss-image').height(slider_height);
	}

});
