jQuery(document).ready(function($) {

	function slider_align(){
		var toolbar = jQuery(".toolbar-container");
		var toolbar_height = toolbar.height();
		var menu = jQuery(".logo-menu");
		var menu_height = menu.height();

		if(toolbar_height == 0)
			menu_height += 55;

		if(toolbar.length)
			menu_height += toolbar_height;

		jQuery('.slidermanDescriptionText').css('padding-top' , menu_height + 'px');
	}

	jQuery(window).load(function(){
		slider_align();
	});

	jQuery(window).resize(function(){
		slider_align();
	});

});