(function ($) {
	"use strict";

    $(window).on('load', function(){
        // Remove preloader
        $('.nm-ripple').fadeOut(500, function () {
            $('#nm-preloader').fadeOut(500);
        });        
    });
})(jQuery)