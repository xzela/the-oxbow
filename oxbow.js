function slideSwitch() {
	var $active = $('.hero-image img.active');

	if ( $active.length == 0 ) $active = $('.hero-image img:last');

	var $next = $active.next().length ? $active.next() : $('.hero-image img:first');

	$active.addClass('last-active');

	$next.css( {opacity: 0.0} )
		.addClass('active')
		.animate( {opacity: 1.0}, 1000, function() {
			$active.removeClass('active last-active');
		});
}

$(function() {
	setInterval("slideSwitch()", 4000);
});

$('a.vidlink').click(function() {
	event.preventDefault();
	$('.active-vid').removeClass('active-vid');
	var video = $(this).attr('data-id')
	$(video).addClass('active-vid');

});

$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});