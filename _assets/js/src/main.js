$(document).ready(function(){

    var menu = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('.trigger-menu'),
		insertBefore: '<img src="' + $('#assets').val() + 'images/moby-logo.svg">',
		insertAfter: 'If you find a better library, let minnow',
		overlay: true,
		subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
		subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
		menuClass: 'right-side',
		closeButton: true,
		closeButtonContent: '<i class="material-icons">&#xE5CD;</i> Close Menu ',
		breakpoint: 960,
		enableEscape: true
    });
});