jQuery(document).ready(function($) {

    function fix_grid_tops(position){
        var position_height = jQuery(position).height();
        var window_height = jQuery(window).height();
        var slider_height = window_height - position_height;

		if (jQuery(window).width() < 767 || jQuery(window).height() < 802) {
        	jQuery('.slidermanImgCont').attr('style' , 'height : 500px !important');
       		jQuery('.js-header').css('height' , 'auto');
			jQuery('.owl-stage-outer .owl-height').attr('style' , 'height :' + 'auto');
			jQuery('.jss-slider .owl-carousel .owl-item .jss-image').css('height' , 'auto');
			jQuery('.jss-slider .owl-carousel .owl-item .jss-image img').css({
				'height' : 'auto',
				'max-width' : '100%',
				'width' : '100%'
			});
    	}
    	else {
	        jQuery('.slidermanImgCont').attr('style' , 'height :' + slider_height + 'px !important');
			jQuery('.js-header').css('height' , slider_height + 'px');
			jQuery('.owl-stage-outer .owl-height').attr('style' , 'height :' + slider_height + 'px');
			jQuery('.jss-slider .owl-carousel .owl-item .jss-image').css('height' , slider_height + 'px');

			if (jQuery('.jss-slider .owl-carousel .owl-item .jss-image img').height() < jQuery('.jss-slider .owl-carousel .owl-item .jss-image').height()) {
				jQuery('.jss-slider .owl-carousel .owl-item .jss-image img').css({
					'height' : slider_height + 'px',
					'max-width' : '9000px',
					'width' : 'auto'
				});

			}
			else {
				if (jQuery('.jss-slider .owl-carousel .owl-item .jss-image img').width() < jQuery(window).width()) {
					jQuery('.jss-slider .owl-carousel .owl-item .jss-image img').css({
						'height' : 'auto',
						'width' : '100%'
					});
				}
			}
    	}

		if (jQuery(window).width() < 767) {
			jQuery('.jss-slider .owl-carousel .owl-item .jss-title-description').hide();
		}
		else {
			jQuery('.jss-slider .owl-carousel .owl-item .jss-title-description').show();
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