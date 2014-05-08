jQuery(document).ready(function($) {

	function setImages(){
		jQuery('.container-flexbox > .row > * img').each(function (i) {
			var newWidth = jQuery('.container-flexbox > div > *').width();
			jQuery(this).css('max-width' , newWidth + 'px');
		});
	}

	function setBlogItems(){
		jQuery(".items-row .item").equalHeights();
	}

	jQuery(window).load(function(){
		if (jQuery(".is_internet.v_9").length) {
			setImages();
			setBlogItems();
		}
	});
	jQuery(window).load(function(){
		if (jQuery(".is_internet.v_9").length) {
			setImages();
			setBlogItems();
		}
	});

});