$(document).ready(function(){

    // var template = '<div class="moby-inner">';
    // template +=        '<div class="moby-close"><span class="moby-close-icon"></span></div>';
    // template +=        '<div class="moby-wrap">';
    // template +=            '<div>';
    // template +=                '<img src="' + $('#assets').val() + 'images/moby-logo-white.svg">';
    // template +=                '<div class="moby-menu"></div>';
    // template +=            '</div>';
    // template +=        '</div>';
    // template +=        '<p>If you see a better mobile menu, let minnow</p>';
    // template +=    '</div>';
    //
    // var demo = new Moby({
    //     menu: $('#main-nav'),
    //     insertBefore: '<div><img src="' + $('#assets').val() + 'images/moby-logo-white.svg"></div>',
    //     insertAfter: '<p>If you find a better library, let minnow</p>',
    //     mobyTrigger: $('#right-side'),
    //     overlay: true,
    //     subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
    //     subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
    //     menuClass: 'moby-demo',
    //     template : template,
    //     breakpoint: 960,
    //     enableEscape: true
    // });

    var top = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#top-full'),
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'top-full',
        breakpoint: 960,
    });

    var left = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#left-side'),
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'left-side',
        breakpoint: 960,
    });

    var right = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#right-side'),
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'right-side',
        breakpoint: 960,
    });

    var bottom = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#bottom-full'),
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'bottom-full',
        breakpoint: 960,
    });

    var grow = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#grow-out'),
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'grow-out',
        breakpoint: 960,
    });

    var shrink = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#shrink-in'),
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'shrink-in',
        breakpoint: 960,
    });

    var fade = new Moby({
        menu: $('#main-nav'),
        mobyTrigger: $('#fade'),
        subMenuOpenIcon: '<i class="material-icons">&#xE313;</i>',
        subMenuCloseIcon: '<i class="material-icons">&#xE316;</i>',
        menuClass: 'fade',
        breakpoint: 960,
    });
});