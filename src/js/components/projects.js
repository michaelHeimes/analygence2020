$(document).ready(function(){

	$('.project-slider').slick({
		infinite: true,
		fade: true,
		speed: 500,
		autoplay: true,
		autoplaySpeed: 8000,
		adaptiveHeight: true,
		arrows: false,
		dots: true,
		appendDots: '.project-nav',
	});

});