(function($) {
	'use strict';
	
// 	Accessibility Hack
	$('.menu a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});	
	
/*
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
*/
	
// 	Fixed Header Mobile Hack
	$(document).on('click', 'a#menu-toggle', function(){
		
		if ( $(this).hasClass('clicked') ) {
			$(this).removeClass('clicked');
			$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
		
		} else {
		
			$(this).addClass('clicked');
			$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
		
		}
		
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('a#menu-toggle').removeClass('clicked');
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});
	
// 	Block Hacks
	$('.wp-block-button__link').addClass('button');

	
// 	Sliders
	if( $('.img-slider').length ) {
	
	
		$('.img-slider.fade').each( function(i) {
			
			var sliderTimer = 5000;
			var $imageSlider = $(this);
			var sliderProgress = $imageSlider.next('.slider-progress');

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
					
			if (($(this).find('.slick-slide').length > 1)) {	
			
				function progressBar(){
					sliderProgress.find('span').removeAttr('style');
					sliderProgress.find('span').removeClass('active');
					setTimeout(function(){
						sliderProgress.find('span').css('transition-duration', (sliderTimer/950)+'s').addClass('active');
					}, 10);
				}
				progressBar();
				$imageSlider.on('beforeChange', function(e, slick) {
					progressBar();
				});
			
			}
			
		});
	
		$('.img-slider.slide-left').each( function(i) {
			
			var sliderTimer = 5000;
			var $imageSlider = $(this);
			var sliderProgress = $imageSlider.next('.slider-progress');

			$imageSlider.slick({
				autoplay: true,
				autoplaySpeed: sliderTimer,
				speed: 1000,
				arrows: false,
				dots: false,
				adaptiveHeight: false,
				pauseOnFocus: false,
				pauseOnHover: false,
			});
		
			if (($(this).find('.slick-slide').length > 1)) {	
				
				function progressBar(){
					sliderProgress.find('span').removeAttr('style');
					sliderProgress.find('span').removeClass('active');
					setTimeout(function(){
						sliderProgress.find('span').css('transition-duration', (sliderTimer/950)+'s').addClass('active');
					}, 10);
				}
				progressBar();
				$imageSlider.on('beforeChange', function(e, slick) {
					progressBar();
				});
			
			}
			
		});	
	  
	}
		

	if( $('.testimonial-slider').length ) {

		$('.testimonial-slider').each( function(i) {
			
			var sliderTimer = 5000;
			var $imageSlider = $(this);
			var sliderProgress = $imageSlider.next('.slider-progress');

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
			
			
			if (($(this).find('.single-testimonial').length > 1)) {		
			
				function progressBar(){
					sliderProgress.find('span').removeAttr('style');
					sliderProgress.find('span').removeClass('active');
					setTimeout(function(){
						sliderProgress.find('span').css('transition-duration', (sliderTimer/950)+'s').addClass('active');
					}, 10);
				}
				progressBar();
				$imageSlider.on('beforeChange', function(e, slick) {
					progressBar();
				});

			} else {
				
				sliderProgress.hide();
			
			}
			
		});
		
	}
	
// 	Parralax
/*
$(window).scroll(function() {
	var scrolledY = $(window).scrollTop();
	$('.s4 .bg').css('top', ((scrolledY)) + 'px');
});
*/

	
})(jQuery);