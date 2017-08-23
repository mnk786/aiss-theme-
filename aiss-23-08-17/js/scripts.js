/*
* ----------------------------------------------------------------------------------------
Author       : CodeTides
Template Name: Anza - One Page MultiPurpose Template
Version      : 1.0                                          
* ----------------------------------------------------------------------------------------
*/

(function ($) {
    'use strict';

    $(document).ready(function () {

        /*
         * ----------------------------------------------------------------------------------------
         *  PRELOADER JS
         * ----------------------------------------------------------------------------------------
         */
        if ($(window).width() > 768){
            $(window).bind('scroll', function() {
                var $=jQuery.noConflict();
                if ($(window).scrollTop() > 150) {
                    $('header.top').addClass('fixed');
                }
                else
                {
                    $('header.top').removeClass('fixed');
                }
            });
        }

        /*
         * ----------------------------------------------------------------------------------------
         *  CHANGE MENU BACKGROUND JS
         * ----------------------------------------------------------------------------------------
         */
        jQuery('.bx-slider').show().bxSlider({
            auto: true,
            speed: 2000,
            mode:'fade'
        });
        new WOW().init();





        /*
         * ----------------------------------------------------------------------------------------
         *  SMOTH SCROOL JS
         * ----------------------------------------------------------------------------------------
         */

        var lowresImages = $('img');
        lowresImages.each(function(i) {

            var dataSrc = $(this).attr('data-src');
            var src = $(this).attr('src');
            if (dataSrc != null && dataSrc != "")
            {
                if (src != dataSrc)
                    $(this).attr('src', dataSrc);
            }
        });


        /*
         * ----------------------------------------------------------------------------------------
         *  COUNTER UP JS
         * ----------------------------------------------------------------------------------------
         */

        $(".question-answer-part").ready(function(){
            var $=jQuery.noConflict();
            $(this).find(".question-part").click(function(e){
                e.preventDefault();
                var $=jQuery.noConflict();
                $(this).parent( ".question-answer-part" ).find('.answer-part-inner').toggleClass('animation');
                $(this).parent( ".question-answer-part" ).toggleClass('is-active');
            });
        });

	 

		 


        /*
         * ----------------------------------------------------------------------------------------
         *  WOW JS
         * ----------------------------------------------------------------------------------------
         */
        new WOW().init();

        var menu_height = $(".left-menus").height();
        $(".content-part").css('min-height', menu_height);


        $('#myAffix').affix({
            offset: {
                top: 0,
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true) + (+45))
                }
            }
        });

        
             
		
		
		
		
    });

})(jQuery);