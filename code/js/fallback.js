jQuery(document).ready(function($) {

	function setBlogItems(){
		jQuery(".items-row .item").equalHeights();
		jQuery("#grid-top > div > div").equalHeights();
		jQuery("#grid-bottom2 > div > div").equalHeights();
		jQuery(".newsflash-horiz > div > div").equalHeights();
		jQuery(".categories-module > div").equalHeights();
	}

	jQuery(window).load(function(){
			setBlogItems();
	});
	jQuery(window).resize(function(){
		if (jQuery(".is_internet.v_9").length) {
			setBlogItems();
		}
	});

});