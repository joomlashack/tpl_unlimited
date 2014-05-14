jQuery(document).ready(function($) {

	jQuery(window).load(function(){
		var toolbar =jQuery(".wrappToolbar");
		if(toolbar.length){
			var sliderPosition = jQuery("#slider-position");
			var toolbarHeight = toolbar.height();
			sliderPosition.css({
				'margin-top' : '-' + toolbarHeight + 'px'
			});
		}
	});

});