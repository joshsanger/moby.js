$(document).ready(function(){

    var leftMenu = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#left-side'),
		insertBefore: '<img src="' + $('#assets').val() + 'images/moby-logo.svg">',
		insertAfter: 'If you find a better library, let minnow',
		overlay: true,
		subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
		subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
		menuClass: 'left-side',
		closeButton: true,
		// closeButtonContent: '<i class="material-icons">&#xE5CD;</i> Close Menu ',
		breakpoint: 960,
		enableEscape: true
    });
    var rightMenu = new Moby({
        menu: $('#main-nav'),
        insertBefore: '<div><img src="' + $('#assets').val() + 'images/moby-logo-white.svg"></div>',
        insertAfter: '<p>If you find a better library, let minnow</p>',
        mobyTrigger: $('#right-side'),
        overlay: true,
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'moby-demo',
        closeButton: true,
        closeButtonContent: '<span class="moby-close-icon"></span>',
        breakpoint: 960,
        enableEscape: true
    });

    var top = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#top-full'),
        overlay: true,
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'top-full',
        closeButton: true,
        // closeButtonContent: '<i class="material-icons">&#xE5CD;</i> Close Menu ',
        breakpoint: 960,
        enableEscape: true
    });

    rightMenu.openMoby();
});