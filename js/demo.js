jQuery(document).ready(function($){
	
	function openmoby(targetMenu, overlay, subMenuOpenIcon, subMenuCloseIcon, insertAfter) {
		
        
        // Themes / different menus to be added here
        $('#moby').removeClass('demo').addClass('moby-active');
        $('body').addClass('moby-body-fixed');
        
        if(overlay == true) {
            $('#moby-overlay').addClass('moby-overlay-active');
        }
        
        if($('#moby-clone').length < 1) {
            
            $('#' + targetMenu).clone().appendTo('#moby');
            $('#moby #' + targetMenu).attr('id', 'moby-clone');
            $('#moby #moby-clone li').find('ul').parent().find('> a').append("<span class='moby-expand'>" + subMenuOpenIcon + '</span>');
            $('.moby-expand').attr({
                'data-open': subMenuOpenIcon, 
                'data-close': subMenuCloseIcon
            });
            if(insertAfter !== '' && $('#moby-after').length < 1) {
                $('#moby').append('<div id="moby-after">' + insertAfter + '</div>');
            }
            
        }
	}

    function closemoby(overlay) {
        if(overlay == true) {
            $('#moby-overlay').removeClass('moby-overlay-active');
        }
        
      
        $('#moby').removeClass('moby-active');
        $('body').removeClass('moby-body-fixed');

        // demo
        if($('.demo-example').length > 0) {
            setTimeout(function(){
                $('#moby-clone').remove();
                $('#moby-after').remove();
                $('#moby').addClass('demo');
            },450);    
        }
        

    }

    function breakpointResize(breakpoint, overlay) {
        var w = window.outerWidth;
        if (w > breakpoint && $('#moby').hasClass('moby-active')) {
            closemoby(overlay);
        }
    }

    function mobyExpandSubMenu(e) {
        e.preventDefault();
        var mobyOpenIcon = $(this).data('open');
        var mobyCloseIcon = $(this).data('close');

        if(!$(this).hasClass('moby-submenu-open')) {
            $(this).html(mobyCloseIcon);
            $(this).addClass('moby-submenu-open');
            $(this).parent('a').parent('li').find('> ul').slideDown(200);
        } else {
            $(this).html(mobyOpenIcon);
            $(this).removeClass('moby-submenu-open');
            $(this).parent('a').parent('li').find('> ul').slideUp(200);
        }
        /*if($(this).find('i.fa').hasClass('fa-angle-down')) {
            $(this).find('i.fa').addClass('fa-angle-up').removeClass('fa-angle-down');
            
        } else {
            $(this).find('i.fa').addClass('fa-angle-down').removeClass('fa-angle-up');
            $(this).parent('a').parent('li').find('> ul').slideUp(200);
        } */
    }
	
	$.fn.extend({

		/* ---------------------------
		       P A R A M E T E R S
		   ---------------------------
			1. openmoby     (JQUERY ELEM | The elemtent that will open the Mobile Menu)
			2. closemoby    (JQUERY ELEM | The element that will close the Mobile Menu)
			3. breakpoint       (STRING | when the site switched from Mobile to desktop menus)
			4. subMenuIcon      (OBJECT |  hidden: icon to display when sub menu is hidden, visible: icon to display when sub menu is visible)
			5. menuClass 			(STRING | Which menu to assign)
			6. overlay 			(BOOLEAN | If the menu has an overlay or not)
            7. prepend    (STRING)

		*/

		moby: function(moby){   

            // the menu that will become mobile
            var targetMenu = $(this).attr('id');
			
            // if mobyTrigger is not defined, set to TRUE
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
            if (typeof(moby.closeButtonContent) =='undefined') { 
                moby.closeButtonContent = '<span>X</span> Close Menu'; 
            }

            // if breakpoint is not defined assign 980 as default
            if (typeof(moby.breakpoint) =='undefined') { 
                moby.breakpoint = 960; 
            }
            if (typeof(moby.enableEscape) == 'undefined') { 
                moby.enableEscape = true; 
            } 
            if (typeof(moby.insertAfter) == 'undefined') { 
                moby.insertAfter = ''; 
            } 
            if (typeof(moby.overlayClass) == 'undefined') { 
                moby.overlayClass = 'dark'; 
            } 

            // if overlay is true 
            if(moby.overlay == true) {
                $('body').prepend('<div id="moby-overlay" class="' + moby.overlayClass + '"></div>');    
                // assign function when overlay is clicked
                $('#moby-overlay').on('click', function(){
                    closemoby(moby.overlay);
                });
            }

            // create moby
            $('body').prepend('<div id="moby"></div>');    

            if(moby.insertBefore !== 'undefined') {
                $('#moby').prepend('<div id="moby-before">' + moby.insertBefore + '</div>');
            }


            if(moby.closeButton == true) {
                $('#moby').prepend('<div id="moby-close">' + moby.closeButtonContent + '</div>');
                $('#moby').find('#moby-close').on('click', function(){
                    closemoby(moby.overlay);
                });
            }

            if(moby.enableEscape == true) {

                $(document).on('keydown', function(e){
                    if(e.keyCode == 27) {           
                        closemoby(moby.overlay);    
                    }
                });
                
            }
            
            // add class / type of menu
            $('#moby').addClass(moby.menuClass);


			moby.mobyTrigger.on('click', function(){
                var id = $(this).attr('data-target');
                $('#moby').removeClass('left-side right-side grow-out shrink-in top-full bottom-full fade').addClass(id + ' demo');
                setTimeout(function(){
                    openmoby(targetMenu, moby.overlay, moby.subMenuOpenIcon, moby.subMenuCloseIcon, moby.insertAfter);
                }, 50);
				
			});

            $(window).on('resize', function(){
                breakpointResize(moby.breakpoint, moby.overlay);
            });
            $('#moby').on('click', '.moby-expand', mobyExpandSubMenu);

		}

	});



});