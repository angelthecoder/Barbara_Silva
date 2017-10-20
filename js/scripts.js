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
		//adaptiveHeight: true
		// fade: true,
		// asNavFor: '.da-slider-nav',
		//autoplay: true,
	});

	// Video icon play

// 	$('video').click(function(){
// 		$(this).get(0).play();
// 		$(this).siblings('.bs_icon_play').hide();
// 		if($(this).siblings('video').get(0).paused()) {
// 			$(this).show();
// 		}
// 	});

	var $video = $("video");
	var $icon = $(".bs_icon_play");

        mousedown = false;

    $icon.click(function(){
		$icon.hide();
        if ($video.get(0).paused) {
            $video.get(0).play();
            return false;
        }
        return true;
    });

//     $video.on('mousedown', function () {
//         mousedown = true;
//     });

//     $(window).on('mouseup', function () {
//         mousedown = false;
//     });

    $video.on('play', function () {
        $video.attr('controls', '');
    });

//     $video.on('pause', function () {
//         if (!mousedown) {
//             $video.removeAttr('controls');
//         }
//     });





});

jQuery(window).load(function() {
    if (
	$('body').hasClass('home') ||
	$('body').hasClass('category-fashion') ||
	$('body').hasClass('category-bloom')
    ) {
	var maxHeight = 0;
	var articleList = $('.wk-section-wrap article');
	console.log(articleList);
	articleList.each(function() {
	    var articleHeight = $(this).height();
	    maxHeight = articleHeight > maxHeight ? articleHeight : maxHeight;
	});
	articleList.each(function() {
	    $(this).height( maxHeight );
	});
    }
});

