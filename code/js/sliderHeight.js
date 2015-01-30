jQuery(document).ready(function($) {

	function sliderAlign() {

		if (jQuery('.jss-slider').length) {
			var headerHeight = jQuery('.jss-slider').height();
		}
		else {
			var headerHeight = jQuery('.shackSliderslider').height();
		}

		jQuery('.js-header').css('min-height' , headerHeight + 'px');

	}

	jQuery(window).load(function(){
		sliderAlign();
	});
	jQuery(window).resize(function(){
		sliderAlign();
	});

});