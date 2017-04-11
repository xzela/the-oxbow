'use strict';

$(document).ready(function() {
	// carousel
	$('.hero-image').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
		centerMode: true,
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});
	// media pages
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

// 'more' links
$('a.more').click(function() {
	event.preventDefault();
	$('.more').css("visibility", "hidden");
	$('.aux').slideDown('slow');
});


// videos on media page
$('a.vidlink').click(function() {
	event.preventDefault();
	$('.active-vid').removeClass('active-vid');
	var video = $(this).attr('data-id')
	$(video).addClass('active-vid');
});
