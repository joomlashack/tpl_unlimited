jQuery(document).ready(function($) {

	function sliderAlign(){
		var toolbar = jQuery(".toolbar-container");
		var sliderPosition = jQuery("#slider-position");
		var toolbarHeight = toolbar.height();
		var menu = jQuery(".logo-menu");
		var menuHeight = menu.height();
		var headerHeight = jQuery('.shackSliderslider').height();
		if(toolbarHeight == 0)
			menuHeight += 55;

		if(toolbar.length)
			menuHeight += toolbarHeight;

		jQuery('.slidermanDescriptionText').css('padding-top' , menuHeight + 'px');
		jQuery('.js-header').css('min-height' , headerHeight + 'px');
		console.log(toolbarHeight);
		console.log(menuHeight + ' menu') ;
	}
	jQuery(window).load(function(){
		sliderAlign();
	});
	jQuery(window).resize(function(){
		sliderAlign();
	});

});