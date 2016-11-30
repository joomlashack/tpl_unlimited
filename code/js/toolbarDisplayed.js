jQuery(document).ready(function($) {
	jQuery('.toolbar-switch').click(function (b) {
		var toolbarHeight = jQuery('#nav-toolbar').height();

		if (jQuery('.wrappToolbar').hasClass('collapsedToolbar')) {

			jQuery('.wrappToolbar.collapsedToolbar .navbar-inner .collapsedToolbarInner').animate(
				{ height: toolbarHeight + 'px' },'fast', function() {
					jQuery('.wrappToolbar.collapsedToolbar').removeClass('collapsedToolbar')
					jQuery('.wrappToolbar .toolbar-container').removeClass('collapsedToolbarInner');
				}
			);

			jQuery(this).children('i').toggleClass('icon-angle-down', 'fast');
			jQuery(this).children('i').toggleClass('icon-angle-up', 'fast');
		}
		else {
			jQuery('.wrappToolbar').addClass('collapsedToolbar');
			jQuery('.wrappToolbar.collapsedToolbar .toolbar-container').addClass('collapsedToolbarInner');
			// jQuery(this).animate({ color: '#000'}, 'fast');
			jQuery(this).animate({top: '0'}, 'fast');
			jQuery('.wrappToolbar.collapsedToolbar .navbar-inner .collapsedToolbarInner').animate(
				{ height: '0px' },'fast'
			);
			jQuery(this).children('i').toggleClass('icon-angle-down', 'fast');
			jQuery(this).children('i').toggleClass('icon-angle-up', 'fast');
		}

		jQuery('.wrappToolbar .wrapper-toolbar').css({minHeight: toolbarHeight + 'px'});
	});
});
