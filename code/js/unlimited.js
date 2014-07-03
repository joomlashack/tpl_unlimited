jQuery(document).ready(function($) {

	function sliderAlign(){
		var toolbar =jQuery(".wrappToolbar");
		var sliderPosition = jQuery("#slider-position");
		var toolbarHeight = toolbar.height();

		if(toolbar.length){
			sliderPosition.css({
				'margin-top' : '-' + toolbarHeight + 'px'
			});
		}

		if (jQuery(window).width() <= 767) {
			sliderPosition.css({
				'margin-top' : '0'
			});
		};
	}

	jQuery(window).load(function(){
		sliderAlign();
		if(jQuery('.js-slider').length)
		{
			jQuery('.js-header').css('min-height' , jQuery('.js-slider').height() + 'px')
		}
	});

	jQuery(window).resize(function(){
		sliderAlign();
	});

});