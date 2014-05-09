jQuery(document).ready(function($) {

	function setImages(){
		jQuery('.main-wrapp > .row > * img').each(function (i) {
			var newWidth = jQuery('.container-flexbox > div > *').width();
			jQuery(this).css('max-width' , newWidth + 'px');
		});
	}

	function setBlogItems(){
		jQuery(".items-row .item").equalHeights();
		jQuery("#grid-top > div > div").equalHeights();
		jQuery("#grid-bottom2 > div > div").equalHeights();
	}

	jQuery(window).load(function(){
			setImages();
			setBlogItems();
	});
	jQuery(window).resize(function(){
		if (jQuery(".is_internet.v_9").length) {
			setImages();
			setBlogItems();
		}
	});

});