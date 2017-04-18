/**
 * T A B L E   O F   C O N T E N T S
 *
 * @author      Josh Sanger
 * @version     1.7.3
 *
 * 01. GLOBAL VARIABLES
 * 02. OPEN MOBY
 * 03. CLOSE MOBY
 * 04. BREAKPOINT RESIZE
 * 05. MOBY EXPAND SUB MENU
 * 06. MOBY PREVENT DUMMY LINKS
 * 07. MOBY SET UP
 *
 */



/**
 * 01. GLOBAL VARIABLES
 * Global Variables that will be used throughout the Library
 *
 */
var mobyUsersSettings = {};



/**
 * 02. INIT MOBY
 * Sets up the moby class
 */

var Moby = function() {

};



/**
 * 03. OPEN MOBY
 * Function that runs when the Moby trigger is clicked, or the mobyOpen method is called
 * @param       targetMenu          string      The Id of the menu that will be clones for mobile
 * @param       overlay             boolean     Set to true if the overlay is to be shown
 * @param       SubMenuOpenIcon     string      The markup for the icon to open sub-menus
 * @param       SubMenuCloseIcon    string      The markup for the icon to close sub-menus
 */
Moby.prototype.mobyOpen = function(targetMenu, overlay, subMenuOpenIcon, subMenuCloseIcon) {

    // LEFT OFF HERE
}



/**
 * 02. OPEN MOBY
 * Function that runs when the Moby trigger is clicked, or the mobyOpen method is called
 *
 * @param       targetMenu          string      The Id of the menu that will be clones for mobile
 * @param       overlay             boolean     Set to true if the overlay is to be shown
 * @param       SubMenuOpenIcon     string      The markup for the icon to open sub-menus
 * @param       SubMenuCloseIcon    string      The markup for the icon to close sub-menus
 */
function openmoby(targetMenu, overlay, subMenuOpenIcon, subMenuCloseIcon) {

    // remove the moby-hidden class if it exists
    if($('#moby.moby-hidden').length > 0) {
        $('#moby').removeClass('moby-hidden');
    }

    // .moby-active should be used to initiate the animation in your css file
    $('#moby').addClass('moby-active');

    // When the menu is open, don't allow the user to scroll through the page
    $('body').addClass('moby-body-fixed');

    // Show the overlay
    if(overlay == true) {
        $('#moby-overlay').addClass('moby-overlay-active');
    }
    // The first time the button is clicked, clone the desired menu, assign sub menu open and close icons, and insert content after mobile menu
    if($('#moby-clone').length < 1) {
        $('#' + targetMenu).clone().appendTo('#moby');
        $('#moby #' + targetMenu).attr('id', 'moby-clone').removeAttr('class');
        $('#moby li').find('ul').parent().find('> a').append("<span class='moby-expand'>" + subMenuOpenIcon + '</span>');
        $('.moby-expand').attr({
            'data-open': subMenuOpenIcon,
            'data-close': subMenuCloseIcon
        });

        // If #moby-after exists, move it to the bottom of #moby
        if($('#moby-after').length > 0) {
            $('#moby-after').appendTo('#moby');
        }
    }
}




/**
 * 03. CLOSE MOBY
 * Closes Moby when the close button, overlay, escape key, or the mobyClose method is called
 *
 * @param       overlay             boolean     Set to true if the overlay is to be shown
 */
function closemoby(overlay) {
    if($('#moby').hasClass('moby-active')) {
        if(overlay == true) {
            $('#moby-overlay').removeClass('moby-overlay-active');
        }
        $('#moby').removeClass('moby-active');
        $('body').removeClass('moby-body-fixed');
    }
}


/**
 * 04. BREAKPOINT RESIZE
 * Closes Moby if the user increases the screen size past the mobile menu breakpoint
 *
 * @see     closemoby()
 */
function breakpointResize(breakpoint, overlay) {
    var w = window.outerWidth;
    if (w > breakpoint && $('#moby').hasClass('moby-active')) {
        closemoby(overlay);
    }
}

/**
 * 05. MOBY EXPAND SUB MENU
 * Expands hidden sub menu items. This function takes advantage of jQuery's slideUp and slideDown functions,
 * and swaps the icons depending on the open state of the sub menu.
 *
 * @param       elem            element     The element that was clicked
 * @param       multiLevel      boolean     Set to true if the menu has multilevel
 *
 */
function mobyExpandSubMenu(elem, multiLevel) {

    var mobyOpenIcon = elem.data('open');
    var mobyCloseIcon =elem.data('close');

    if(!elem.hasClass('moby-submenu-open')) {
        elem.html(mobyCloseIcon);
        elem.addClass('moby-submenu-open');
        if(multiLevel === true) {
            elem.parent('a').parent('li').parent('ul').addClass('moby-ul-overflow').animate({
                scrollTop : 0
            }, 400);
            elem.parent('a').parent('li').find('> ul').addClass('moby-ul-active');
        } else {
            elem.parent('a').parent('li').find('> ul').slideDown(200);
        }
    } else {
        elem.html(mobyOpenIcon);
        elem.removeClass('moby-submenu-open');
        if(multiLevel === true) {
            elem.parent('a').parent('li').find('> ul').removeClass('moby-ul-active');
        } else {
            elem.parent('a').parent('li').find('> ul').slideUp(200);
        }
    }
    if($('body').find('#moby').find('ul.moby-ul-active').length > 0) {
        $('body').find('#moby').addClass('moby-prev-visible');
    } else {
        $('body').find('#moby').removeClass('moby-prev-visible');
    }
}


/**
 * 06. MOBY PREVENT DUMMY LINKS
 * Prevents the default link behavior on links with no URL, then triggers the .moby-expand
 *
 */
function mobyPreventDummyLinks(e) {
    if($(this).attr('href') == "#") {
        e.preventDefault();
        if($(this).find('> .moby-expand').length > 0) {
            $(this).find(' > .moby-expand').trigger('click');
        }
    }
}


/**
 * 03. POLY FILL FOR CUSTOM EVENTS
 * Poly fill for custom events for IE
 */
(function () {
    function CustomEvent ( event, params ) {
        params = params || { bubbles: false, cancelable: false, detail: undefined };
        var evt = document.createEvent( 'CustomEvent' );
        evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
        return evt;
    }

    CustomEvent.prototype = window.Event.prototype;

    window.CustomEvent = CustomEvent;
})();

/**
 * 07. MOBY SET UP
 * Sets up the moby menu, settings, and methods
 *
 * @see     closemoby
 * @see     openmoby
 */

$(document).ready(function(){


    $.fn.extend({

        // Method to close Moby
        mobyClose: function(){
            closemoby(mobyUsersSettings.overlay);
        },

        // Method to open Moby
        mobyOpen: function(){
            openmoby(mobyUsersSettings.userMenu, mobyUsersSettings.overlay, mobyUsersSettings.subMenuOpenIcon, mobyUsersSettings.subMenuCloseIcon, mobyUsersSettings.insertAfter);
        },

        // Main moby function
        moby: function(moby){
            // the menu that will become mobile friendly
            var targetMenu = $(this).attr('id');


            // if mobyTrigger is not defined, set to default button
            if (typeof(moby.mobyTrigger) =='undefined') {
                moby.mobyTrigger = $('#moby-button');
            }

            // if overlay is not defined, set to TRUE
            if (typeof(moby.overlay) =='undefined') {
                moby.overlay = true;
            }

            // If menuClass  is not defined assign right-side as default
            if (typeof(moby.menuClass) =='undefined') {
                moby.menuClass = 'right-side';
            }

            // If subMenuOpenIcon  is not defined assign fa-angle-down as default
            if (typeof(moby.subMenuOpenIcon) =='undefined') {
                moby.subMenuOpenIcon = '<span>&#x25BC;</span>';
            }

            // If subMenuCloseIcon is not defined assign fa-angle-up as default
            if (typeof(moby.subMenuCloseIcon) =='undefined') {
                moby.subMenuCloseIcon = '<span>&#x25B2;</span>';
            }

            // if closeButton is not defined assign FALSE as default
            if (typeof(moby.closeButton) =='undefined') {
                moby.closeButton = true;
            }

            // if closeButtonContent is not defined assign icon as default
            if (typeof(moby.closeButtonContent) == 'undefined') {
                moby.closeButtonContent = '<span>X</span> Close Menu';
            }

            // if breakpoint is not defined assign 980 as default
            if (typeof(moby.breakpoint) == 'undefined') {
                moby.breakpoint = 1024;
            }

            // if enableEscape is not defines, assign TRUE as default
            if (typeof(moby.enableEscape) == 'undefined') {
                moby.enableEscape = true;
            }
            // if insertAfter is not definded, leave blank
            if (typeof(moby.insertAfter) == 'undefined') {
                moby.insertAfter = '';
            }

            // if insertBefore is not definded, leave blank
            if (typeof(moby.insertBefore) == 'undefined') {
                moby.insertBefore = '';
            }

            // if overlayClass is not defined, assign dark as the default
            if (typeof(moby.overlayClass) == 'undefined') {
                moby.overlayClass = 'dark';
            }
            // if multiLevel is not defined, set default to false
            if (typeof(moby.multiLevel) =='undefined') {
                moby.multiLevel = false;
            }
            // if the previous button text is not defined, set as 'Previous'
            if (typeof(moby.previousContent) =='undefined') {
                moby.previousContent = '<span>&larr; Previous</span>';
            }

            // if overlay is true
            if(moby.overlay == true) {

                // add the overlay to the beginning of the body
                $('body').prepend('<div id="moby-overlay" class="' + moby.overlayClass + '"></div>');

                // assign function when overlay is clicked
                $('#moby-overlay').on('click', function(){
                    closemoby(moby.overlay);
                });
            }

            // create moby
            $('body').prepend('<div id="moby"></div>');
            var mobySelector = $('body').find('#moby');

            // if the multi layer option is chosen, do not allow insert before / after
            if(moby.multiLevel !== true) {
                // If user specified insertBefore, then insert into #moby
                if(moby.insertBefore !== '') {
                    mobySelector.prepend('<div id="moby-before">' + moby.insertBefore + '</div>');
                }

                // If user specified insertafter, then insert into #moby
                if(moby.insertAfter !== '') {
                    mobySelector.append('<div id="moby-after">' + moby.insertAfter + '</div>');
                }
            }

            // If the user specified that the menu is multi-level, prepend the previous markup
            if(moby.multiLevel === true) {
                mobySelector.addClass('moby-has-multi-level');
                mobySelector.prepend('<div id="moby-top-wrap"><div id="moby-prev"><span>' + moby.previousContent + '</span></div></div>');
                mobySelector.on('click', '#moby-prev', function(){
                    mobySelector.find('.moby-submenu-open').last().trigger('click').parents('li').parent('ul').last().removeClass('moby-ul-overflow');
                })
            }
            // If the closeButton is desired (or left undefined) add the close button to #moby
            if(moby.closeButton === true) {
                if(moby.multiLevel === true) {
                    mobySelector.find('#moby-top-wrap').prepend('<div id="moby-close">' + moby.closeButtonContent + '</div>');
                } else {
                    mobySelector.prepend('<div id="moby-close">' + moby.closeButtonContent + '</div>');
                }

                mobySelector.find('#moby-close').on('click', function(){
                    closemoby(moby.overlay);
                });
            }

            // if the escapeLey functinality is desired (or left undefined), assign close function to the escape key
            if(moby.enableEscape === true) {
                $(document).on('keydown', function(e){
                    if(e.keyCode == 27) {
                        closemoby(moby.overlay);
                    }
                });
            }

            // add class / type of menu to #moby
            mobySelector.addClass(moby.menuClass + ' moby-hidden');

            // assign the open function to the mobyTrigger
            moby.mobyTrigger.on('click', function(){
                openmoby(targetMenu, moby.overlay, moby.subMenuOpenIcon, moby.subMenuCloseIcon, moby.insertAfter);
            });

            // Assign breakpointResize function when the window resizes
            $(window).on('resize', function(){
                breakpointResize(moby.breakpoint, moby.overlay);
            });

            // Assign mobyExpandSubMenu to sub menu icons
            mobySelector.on('click', '.moby-expand', function(e){
                e.preventDefault();
                e.stopPropagation();
                mobyExpandSubMenu($(this), moby.multiLevel);
            });

            // Assign mobyPreventDummyLinks to links
            mobySelector.on('click', 'a', mobyPreventDummyLinks);

            // assign the moby setting tot the global object
            mobyUsersSettings = moby;
            mobyUsersSettings.userMenu = targetMenu;

            // test for ie 11 & 10
            var is_ie_11 = false;
            var is_ie_10 = false;

            // Check if the user's browser is IE11
            if (Object.hasOwnProperty.call(window, "ActiveXObject") && !window.ActiveXObject)
            {
                is_ie_11 = true;
            }

            // Check if the user's browser is IE10
            if(document.body.style['msTouchAction'] != undefined)
            {
                is_ie_10 = true;
            }
            if(is_ie_11 || is_ie_10) {
                $('body').find('#moby').addClass('moby-ie-fix');
            }
        }
    });


    var mobyEvents = {};
    mobyEvents.beforeOpen = new CustomEvent("beforeOpen",
        {
            bubbles: true,
            cancelable: true
        }
    );
    mobyEvents.afterOpen = new CustomEvent("afterOpen",
        {
            bubbles: true,
            cancelable: true
        }
    );
    mobyEvents.beforeClose = new CustomEvent("beforeClose",
        {
            bubbles: true,
            cancelable: true
        }
    );
    mobyEvents.afterClose = new CustomEvent("afterClose",
        {
            bubbles: true,
            cancelable: true
        }
    );
});