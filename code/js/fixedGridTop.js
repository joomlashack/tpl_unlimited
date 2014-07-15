jQuery(document).ready(function($) {

    function fix_grid_tops(position){
        var position_height = jQuery(position).height();
        var window_height = jQuery(window).height();
        var slider_height = window_height - position_height;

        jQuery('.slidermanImgCont').attr('style' , 'height :' + slider_height + 'px !important');
		jQuery('.js-header').css('height' , slider_height + 'px');
		if (jQuery(window).width() < 767){
        	jQuery('.slidermanImgCont').attr('style' , 'height : 500px !important');
    	}
    }

	jQuery(window).load(function(){
		fix_grid_tops('#grid-top');
	});

	jQuery(window).resize(function(){
		fix_grid_tops('#grid-top');
	});

});