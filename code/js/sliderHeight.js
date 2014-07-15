jQuery(document).ready(function($) {

	function sliderAlign(){
		var headerHeight = jQuery('.shackSliderslider').height();
		jQuery('.js-header').css('min-height' , headerHeight + 'px');
	}

	jQuery(window).load(function(){
		sliderAlign();
	});
	jQuery(window).resize(function(){
		sliderAlign();
	});

});