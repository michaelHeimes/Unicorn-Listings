(function($) {
	'use strict';
	
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});	
	
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	
	     //>=, not <=
	    if (scroll >= 10) {
	        //clearHeader, not clearheader - caps H
	        $("header.header").addClass("scrolled");
	        
	    } else {
	        $("header.header").removeClass("scrolled");
	    }
	});
	
	$(document).on('click', 'a#menu-toggle', function(){
		$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});
	
	if( $('.img-slider').length ) {
	
	var sliderTimer = 5000;
	var $imageSlider = $('.img-slider');
	$imageSlider.slick({
		autoplay: true,
		fade: true,
		autoplaySpeed: sliderTimer,
		speed: 1000,
		arrows: false,
		dots: false,
		adaptiveHeight: false,
		pauseOnFocus: false,
		pauseOnHover: false,
	});


	function progressBar(){
		$('.slider-progress').find('span').removeAttr('style');
		$('.slider-progress').find('span').removeClass('active');
		setTimeout(function(){
			$('.slider-progress').find('span').css('transition-duration', (sliderTimer/950)+'s').addClass('active');
		}, 0);
	}
	progressBar();
	$imageSlider.on('beforeChange', function(e, slick) {
		progressBar();
	});
	  
	};
		

	
})(jQuery);