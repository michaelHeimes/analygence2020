$(document).ready(function() {
	
	var iframe = $('#splash-video');
    var player = new Vimeo.Player(iframe);

    player.on('ended', function() {
        $('.splash').addClass('load-text'); 
    });

});

/*

$(document).ready(function() {

	var setMediaSize = function( event ) {
		$( ".splash" ).each( function() {
			var $container = $(this);
			var containerWidth = $container.outerWidth();
			var containerHeight = $container.outerHeight();
			var containerRatio = containerWidth / containerHeight;

			var $media = $('#splash-video');
			$media.each( function() {

				var $image = $( this );
				var imageWidth = $image.outerWidth();
				var imageHeight = $image.outerHeight();
				var imageRatio = parseFloat( $image.attr("data-aspect-ratio") );

				var newWidth, newHeight;
				if( imageRatio <= containerRatio ) {
					newWidth = ( containerWidth / 2 ).toFixed( 0 );
					newHeight = 'auto';
					if( newWidth / imageRatio < containerHeight / 2 ) {
						newHeight = containerHeight / 2;
						newWidth = 'auto';
					}
				} else {
					newHeight = ( containerHeight / 2 ).toFixed( 0 );
					newWidth = 'auto';
					if( newHeight * imageRatio < containerWidth / 2 ) {
						newHeight = 'auto';
						newWidth = containerWidth / 2;
					}
				}

				if ($image.is('iframe')) {
					$image.css({
						width : (newWidth == 'auto' ? (50 * imageRatio) + '%': "50%"),
						height: (newHeight == "auto" ? (50 * imageRatio) + '%' : "50%")
					}).addClass("is-resized");
				} else {
					$image.css({
						width : (newWidth == 'auto' ? newWidth : "50%"),
						height: (newHeight == "auto" ? newHeight : "50%")
					}).addClass("is-resized");
				}
			});

			if( $(this).is("iframe") ) {
				$(this).on( "loadeddata", setMediaSize );
			} else {
				$(this).load( setMediaSize );
			}
		});
	};

	$( window ).on( "resize", setMediaSize ).trigger( "resize" );

	

});
*/