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

function videoSwitch() {
	$('a[href^="vid"]').click() {
		$('.video.active').removeClass('active');

	}
}