jQuery(document).ready(function($){
	

	$('#off-canvas-icon').click(function(){
		$('#off-canvas').toggleClass('is-active');
	});


	// Slider slick

	$('.bs-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<span type="button" class="slick-prev slick-prev-next"><i class="bs_arrow bs_arrow_left"></i></span>',
		nextArrow: '<span type="button" class="slick-next slick-prev-next"><i class="bs_arrow bs_arrow_right"></i></span>',
		// fade: true,
		// asNavFor: '.da-slider-nav',
		//autoplay: true,
	});

});

