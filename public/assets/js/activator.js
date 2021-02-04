;(function () {
    "use strict";
    var $window, $document, $body;

    $window = $(window);
    $document = $(document);
    $body = $("body");
	
	
    $document.ready(function () {
	
		/*==============================================
		  Wow js activator
		 ===============================================*/
		new WOW().init();

        /*==============================================
          Scroll to down
         ===============================================*/
		  $(".scrollToDown").on('click', function(event) {
			if (this.hash !== "") {
			  event.preventDefault();
			  var hash = this.hash;
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 800, function(){
		
				window.location.hash = hash;
			  });
			}
		  });

		
        /*==============================================
          Scroll to top
         ===============================================*/
		$('.scrollToTop').on('click',(function(){
			$('html, body').animate({scrollTop : 0},600);
			return false;
		}));
		
		 
	    /*==============================================
		  Number Spinner jQuery
		 ===============================================*/
		$document.on('click', '.number-spinner button', function () {    
			var btn = $(this),
				oldValue = btn.closest('.number-spinner').find('input').val().trim(),
				newVal = 0;
			
			if (btn.attr('data-dir') == 'up') {
				newVal = parseInt(oldValue, 10) + 1;
			} else {
				if (oldValue > 1) {
					newVal = parseInt(oldValue, 10) - 1;
				} else {
					newVal = 1;
				}
			}
			btn.closest('.number-spinner').find('input').val(newVal);
		});
		
		
		/*==============================================
		 Portfolio Filtering Activate
		 ===============================================*/
		$('.portfolio-gallery').isotope({
			itemSelector: '.portfolio-item',
			 percentPosition: true,
			layoutMode: 'masonry',
            filter: "*"
		});
			
	
		/*--========= Portfolio Menu ============--*/
		$('.portfolio-menu li').on("click", function() {
			$('.portfolio-menu li').removeClass('active');
			$(this).addClass('active');

			var selector = $(this).attr('data-filter');
			$('.portfolio-gallery').isotope({
				filter: selector
			});
			return false;
		});
		
		
		
		/*==============================================
		  masonry For all
		 ===============================================*/
		$('.masonry').isotope({
		  itemSelector: ".masonry-item",
			percentPosition: true,
			layoutMode: "masonry",
			filter: "*"
		});
		
		
		
		
		/*==============================================
          Owl Carousel activating  
         ===============================================*/

		$("#client_carousel").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			navigation: true,
			pagination: true,
			items : 6,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});
		
	 
		$("#similar_item_carousel").owlCarousel({
		 
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			navigation: true,
			pagination: false,
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});
		
	 
		$("#shop_best_sell_carousel").owlCarousel({
			autoPlay: 4000, //Set AutoPlay to 4 seconds
			navigation: true,
			pagination: false,
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});
		
		$("#shop_best_sell_carousel_alt").owlCarousel({
			autoPlay: false, 
			navigation: true,
			pagination: false,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});
		


		$("#shop_recent_carousel").owlCarousel({
			autoPlay: false,
			navigation: true,
			pagination: false,
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});

		$("#shop_recent_carousel_alt").owlCarousel({
			autoPlay: false, 
			navigation: true,
			pagination: false,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});


		$("#shop_feature_carousel").owlCarousel({
		 
			autoPlay: 4000, //Set AutoPlay to 4 seconds
			navigation: true,
			pagination: false,
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});

		$("#shop_feature_carousel_alt").owlCarousel({
			autoPlay: false,
			navigation: true,
			pagination: false,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [768,2],
			itemsMobile:[479,1]
		});
			
		 
		 

       
		 

	   

    }); /*  End of document.ready */
	
	/*==============================================
	 Flexslider activate
	 ===============================================*/
	 $window.on("load", function () {
		
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 80,
			itemMargin: 8,
			asNavFor: '#slider'
		});
		 
		$('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});
	});	 
	 
	$window.on("load", function () {
		$("#flex-banner").flexslider({
			 animation: "slide",
			animationLoop: true,
		});
	});
		
	/*==============================================
	 BootStrap Touch Slider
	 ===============================================*/
	$('#bootstrap-touch-slider').bsTouchSlider();
	
	
	/*==============================================
	 BootStrap Tooltip activate
	 ===============================================*/
	$('[data-toggle="tooltip"]').tooltip(); 
	
	
	/*==============================================
	 CounterUp jQuery
	 ===============================================*/
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
		

})(jQuery);
