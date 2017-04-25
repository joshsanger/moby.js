/**
 * T A B L E   O F   C O N T E N T S
 *
 * @author      Josh Sanger
 * @version     2.0.0
 *
 * 01. INIT MOBY
 * 02. CLASS VARIABLES
 * 03. CLOSE MOBY
 * 04. CLONE MENU
 * 05. OPEN MOBY
 * 06. BREAKPOINT RESIZE
 * 07. MOBY EXPAND SUB MENU
 * 06. MOBY PREVENT DUMMY LINKS
 * 07. POLY FILL FOR CUSTOM EVENTS
 * 08. CUSTOM EVENT SET UP
 */


/**
 * 01. INIT MOBY
 * Sets up the Moby class
 */
var Moby = function(options) {

    Moby.instances++;
    var mobyMenu = this;

    // Set defaults
    this.menu               = (typeof(options.menu) == 'undefined' ? $('#main-nav') : options.menu);
    this.mobyTrigger        = (typeof(options.mobyTrigger) == 'undefined' ? $('#moby-button') : options.mobyTrigger);
    this.overlay            = (typeof(options.overlay) == 'undefined' ? true : options.overlay);
    this.menuClass          = (typeof(options.menuClass) == 'undefined' ? 'right-side' : options.menuClass);
    this.subMenuOpenIcon    = (typeof(options.subMenuOpenIcon) == 'undefined' ? '<span>&#x25BC;</span>' : options.subMenuOpenIcon);
    this.subMenuCloseIcon   = (typeof(options.subMenuCloseIcon) == 'undefined' ? '<span>&#x25B2;</span>' : options.subMenuCloseIcon);
    this.breakpoint         = (typeof(options.breakpoint) == 'undefined' ? 1024 : options.breakpoint);
    this.enableEscape       = (typeof(options.enableEscape) == 'undefined' ? true : options.enableEscape);
    this.overlayClass       = (typeof(options.overlayClass) == 'undefined' ? 'dark' : options.overlayClass);
    this.template           = (typeof(options.template) == 'undefined' ? false : options.template);

    // add the overlay to the beginning of the body
    if (this.overlay === true) {

        $('body').prepend('<div class="moby-overlay ' + this.overlayClass + '" id="moby-overlay' + Moby.instances + '"></div>');
        this.overlaySelector = $('body').find('#moby-overlay' + Moby.instances);
        this.overlaySelector.on('click', this.closeMoby.bind(this));
    }

    // add moby markup
    $('body').prepend('<div class="moby moby-hidden ' + this.menuClass + '" id="moby' + Moby.instances + '"></div>');
    this.mobySelector = $('body').find('#moby' + Moby.instances);
    this.cloneMenu();

    // assign close function
    this.mobySelector.on('click', '.moby-close', this.closeMoby.bind(this));

    // if the escapeLey functinality is desired (or left undefined), assign close function to the escape key
    if (this.enableEscape === true) {

        $(document).on('keydown', function(e) {

            if (e.keyCode == 27) {
                this.closeMoby();
            }
        }.bind(this));
    }

    // assign the open function to the mobyTrigger
    this.mobyTrigger.on('click', this.openMoby.bind(this));

    // Assign breakpointResize function when the window resizes
    $(window).on('resize', this.breakpointResize.bind(this));

    // Assign mobyExpandSubMenu to sub menu icons
    this.mobySelector.on('click', '.moby-expand', function(e){

        e.preventDefault();
        e.stopPropagation();
        this.mobyExpandSubMenu($(e.currentTarget));
    }.bind(this));

    // Assign mobyPreventDummyLinks to links
    this.mobySelector.on('click', 'a', this.mobyPreventDummyLinks.bind(this));
};


/**
 * 02. CLASS VARIABLES
 * Variables that will be used throughout the class
 */
Moby.instances       = 0;
Moby.slideTransition = 200;


/**
 * 03. CLOSE MOBY
 * Closes the Moby menu
 */
Moby.prototype.closeMoby = function() {

    var mobyActive = $('body').find('.moby.moby-active');

    if (mobyActive.length > 0) {

        if (this.overlay === true) {
            $('body').find('.moby-overlay.moby-overlay-active').removeClass('moby-overlay-active');
        }
        mobyActive.removeClass('moby-active');
        $('body').removeClass('moby-body-fixed');
    }

    this.mobySelector.trigger('mobyClosed');
};


/**
 * 04. CLONE MENU
 * Clones the menu that the user specified and removes all ids
 */
Moby.prototype.cloneMenu = function() {

    var mobyMarkup = '';

    if (this.template === false) {
        mobyMarkup  = '<div class="moby-wrap">';
        mobyMarkup +=     '<div class="moby-close"><span class="moby-close-icon"></span> Close Menu</div>';
        mobyMarkup +=     '<div class="moby-menu"></div>';
        mobyMarkup += '</div>';
    } else {
        mobyMarkup = this.template;
    }

    this.mobySelector.append(mobyMarkup);

    if (this.mobySelector.find('.moby-menu').length < 1) {
        console.error('You must have a moby-menu class in your template!');
        return false;
    }

    this.menu.clone().appendTo(this.mobySelector.find('.moby-menu'));

    this.mobySelector.find('.moby-menu *[id]').removeAttr('id');
    this.mobySelector.find('.moby-menu li ul').parents('li').first().find('> a').append("<span class='moby-expand'>" + this.subMenuOpenIcon + '</span>');
};


/**
 * 05. OPEN MOBY
 * Opens the Moby menu
 */
Moby.prototype.openMoby = function() {

    // remove the moby-hidden class if it exists
    if (this.mobySelector.hasClass('moby-hidden')) {
        this.mobySelector.removeClass('moby-hidden');
    }

    // moby-active should be used to initiate the animation in your css file
    this.mobySelector.addClass('moby-active');

    // When the menu is open, don't allow the user to scroll through the page
    $('body').addClass('moby-body-fixed');

    // Show the overlay
    if (this.overlay === true) {
        this.overlaySelector.addClass('moby-overlay-active');
    }

    this.mobySelector.trigger('mobyOpened');
};


/**
 * 06. BREAKPOINT RESIZE
 * Checks to see if the viewport width has changed. If so, close the menu
 */
Moby.prototype.breakpointResize = function() {

    var w = window.outerWidth;

    if (this.breakpoint === false) {
        return false;
    } else {

        if (w >= this.breakpoint && this.mobySelector.hasClass('moby-active')) {
            this.closeMoby();
        }
    }
};


/**
 * 07. MOBY EXPAND SUB MENU
 * Expands the sub menu (nested <ul>)
 *
 * @param       elem        element     The element that was clicked
 */
Moby.prototype.mobyExpandSubMenu = function(elem) {

    if (!elem.hasClass('moby-submenu-open')) {
        elem.addClass('moby-submenu-open');
        elem.html(this.subMenuCloseIcon);
        elem.parents('li').first().find('> ul').slideDown(Moby.slideTransition);
    } else {
        elem.removeClass('moby-submenu-open');
        elem.html(this.subMenuOpenIcon);
        elem.parents('li').first().find('> ul').slideUp(Moby.slideTransition);
    }
};


/**
 * 06. MOBY PREVENT DUMMY LINKS
 * Prevents the default link behavior on links with no URL, then triggers the .moby-expand
 */
Moby.prototype.mobyPreventDummyLinks = function(e) {

    var mobyExpand = $(this).find('> .moby-expand');

    if ($(this).attr('href') == "#") {

        e.preventDefault();

        if (mobyExpand.length > 0) {
            mobyExpand.trigger('click');
        }
    }
};


/**
 * 07. POLY FILL FOR CUSTOM EVENTS
 * Poly fill for custom events for IE
 */
(function () {

    function CustomEvent (event, params) {
        params = params || { bubbles: false, cancelable: false, detail: undefined };
        var evt = document.createEvent( 'CustomEvent' );
        evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
        return evt;
    }

    CustomEvent.prototype = window.Event.prototype;

    window.CustomEvent = CustomEvent;
})();


/**
 * 08. CUSTOM EVENT SET UP
 * Sets up the moby menu, settings, and methods
 */
$(document).ready(function(){

    Moby.mobyEvents = {};
    Moby.mobyEvents.mobyOpened = new CustomEvent("mobyOpened",
        {
            bubbles: true,
            cancelable: true
        }
    );
    Moby.mobyEvents.mobyClosed = new CustomEvent("mobyClosed",
        {
            bubbles: true,
            cancelable: true
        }
    );
});