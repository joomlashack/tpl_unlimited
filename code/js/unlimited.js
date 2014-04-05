// jQuery(document).ready(function(){

// 	function mainSetHeight(e1,e2,e3) {

// 		e1Height = 0;
// 		e2Height = 0;
// 		e3Height = 0;

// 		if (jQuery(e1).length){
// 			e1Height = jQuery(e1).height();
// 		}
// 		if (jQuery(e2).length){
// 			e2Height = jQuery(e2).height();
// 		}
// 		if (jQuery(e3).length){
// 			e3Height = jQuery(e3).height();
// 		}

// 		if (e1Height > e2Height && e1Height > e3Height) {
// 			if (jQuery(e2).length){
// 				jQuery(e2).css({
// 					'height' : e1Height + 'px'
// 				});
// 			}
// 			if (jQuery(e3).length){
// 				jQuery(e3).css({
// 					'height' : e1Height + 'px'
// 				});
// 			}
// 		}
// 		if (e2Height > e1Height && e2Height > e3Height) {
// 			if (jQuery(e1).length){
// 				jQuery(e1).css({
// 					'height' : e2Height + 'px'
// 				});
// 			}
// 			if (jQuery(e3).length){
// 				jQuery(e3).css({
// 					'height' : e2Height + 'px'
// 				});
// 			}
// 		}
// 		if (e3Height > e1Height && e3Height > e2Height) {
// 			if (jQuery(e1).length){
// 				jQuery(e1).css({
// 					'height' : e3Height + 'px'
// 				});
// 			}
// 			if (jQuery(e2).length){
// 				jQuery(e2).css({
// 					'height' : e3Height + 'px'
// 				});
// 			}
// 		}

// 	}

// 	jQuery(window).load(function(){
// 		mainSetHeight('#sidebar1', '#main', '#sidebar2');
// 	});

// });