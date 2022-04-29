$(document).ready(function() {
	
	$('body').on('click', '.hamburger', function(e) {
		$( e.delegateTarget ).toggleClass('nav-open');
		$(this).toggleClass('is-active'); 
	});	
	
	$( '.mobile-nav-inner-nav .sub-menu' ).each(function( index ) {
	  $( this ).before('<button type="button" class="sub-menu-toggle"></button>');
	});
	
	$('.sub-menu-toggle').on('click', function(e) {
		$(this).next().slideToggle(200);
		$(this).toggleClass('is-active');
	});
	

});