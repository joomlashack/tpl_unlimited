jQuery(document).ready(function($) {
	jQuery(window).load(function(){
		if(jQuery('.is_internet.v_9').length){
			jQuery("#grid-top .row > *").equalHeights(); 
			jQuery(".main-wrapp .row > *").equalHeights(); 
			jQuery("#grid-bottom2 .row > *").equalHeights(); 
			jQuery(".items-row .item").equalHeights(); 
			jQuery(".items-leading [class*='leading-']").equalHeights(); 
		}
		if(jQuery('.is_internet.v_8').length){
			jQuery("#grid-top .row > *").equalHeights(); 
			jQuery(".main-wrapp .row > *").equalHeights(); 
			jQuery("#grid-bottom2 .row > *").equalHeights(); 
			jQuery(".items-row .item").equalHeights(); 
			jQuery(".items-leading [class*='leading-']").equalHeights();
		}
	});
	jQuery(window).resize(function(){
		if(jQuery('.is_internet.v_9').length){
			console.log('resize');
			jQuery("#grid-top .row > *").equalHeights(); 
			jQuery(".main-wrapp .row > *").equalHeights(); 
			jQuery("#grid-bottom2 .row > *").equalHeights(); 
			jQuery(".items-row .item").equalHeights(); 
			jQuery(".items-leading [class*='leading-']").equalHeights(); 
		}		
	});
});