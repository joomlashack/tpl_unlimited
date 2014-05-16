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
	});

	jQuery(window).resize(function(){
		sliderAlign();
	});

});