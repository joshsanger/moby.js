jQuery(document).ready(function($){
	
	// checks if tablet > media query
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		var screenWidth = window.outerWidth;
        if(screenWidth > 980 ) {
            $('body').addClass('tablet');
        } else if (screenWidth < 980) {
            $('body').removeClass('tablet');
        }
	}

	$('#main-nav').moby({
		mobyTrigger: $('.trigger-menu'),
		insertBefore: '<img src="./images/moby.svg">',
		insertAfter: 'If you find a better library, let minnow',
		overlay: true,
		subMenuOpenIcon: "<i class='fa fa-angle-down'></i>", 
		subMenuCloseIcon: "<i class='fa fa-angle-up'></i>",
		menuClass: 'right-side',
		closeButton: true,
		closeButtonContent: '<i class="fa fa-close"></i> Close Menu ', 
		breakpoint: 960, 
		enableEscape: true
	}, true);




});