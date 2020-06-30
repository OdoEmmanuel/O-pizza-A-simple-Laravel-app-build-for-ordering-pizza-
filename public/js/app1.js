(function($, document, window){
	
	$(document).ready(function(){
		$(".slider").flexslider({
			controlNav: true,
			directionNav: false
		});
		$(".menu-toggle").click(function(){
			$(".mobile-navigation").slideToggle();
		});
		$(".mobile-navigation").append($(".main-navigation .menu").clone());

		$(".more-student").height( $(".more-student").innerWidth() );

		$(".accordion-toggle").click(function(){
			var current = $(this).parent();
			if( !current.hasClass("expanded") ){
				current.siblings(".accordion").removeClass("expanded").find(".accordion-content").slideUp();
				current.addClass("expanded").find(".accordion-content").slideDown();
			} else {
				current.removeClass("expanded");
				current.find(".accordion-content").slideUp();
			}
		});

		if( $(".map").length ){
			$('.map').gmap3({
				map: {
					options: {
						maxZoom: 14,
						scrollwheel: false
					}  
				},
				marker:{
					address: "40 Sibley St, Detroit",
				}
			},
			"autofit" );
	    }
	});

	$(window).resize(function(){
		$(".more-student").height( $(".more-student").innerWidth() );
	});

	$(window).load(function(){

	});

})(jQuery, document, window);