(function($) { "use strict";

	$(function() {
		var header = $(".start-style");
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});		

	$(function() {
		var header = $(".sub-nav");
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 250) {
				header.addClass("scrolled-up-sub-nav");
			} else {
				header.removeClass("scrolled-up-sub-nav")
			}
		});
	});		
		


	//Menu On Hover
		
	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
	
  })(jQuery);