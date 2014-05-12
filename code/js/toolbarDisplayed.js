jQuery(document).ready(function($) {
	jQuery('.toolbar-switch').click(function (b) {
		var toolbarHeight = jQuery('#nav-toolbar').height();

		if (jQuery('.wrappToolbar').hasClass('collapsedToolbar')) {

			jQuery('.wrappToolbar.collapsedToolbar .navbar-inner .collapsedToolbarInner').animate(
				{ height: toolbarHeight + 'px' },1000, function() {
					jQuery('.wrappToolbar.collapsedToolbar').removeClass('collapsedToolbar')
					jQuery('.wrappToolbar .toolbar-container').removeClass('collapsedToolbarInner');
				}
			);
			jQuery(this).animate({ color: '#fff'}, 1000);
		}
		else {
			jQuery('.wrappToolbar').addClass('collapsedToolbar');
			jQuery('.wrappToolbar.collapsedToolbar .toolbar-container').addClass('collapsedToolbarInner');
			jQuery(this).animate({ color: '#000'}, 1000);
			jQuery('.wrappToolbar.collapsedToolbar .navbar-inner .collapsedToolbarInner').animate(
				{ height: '0px' },1000
			);
		}
		jQuery('.wrappToolbar .wrapper-toolbar').css({minHeight: toolbarHeight + 'px'});
	});
});
