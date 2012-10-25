jQuery(document).ready(function($) {
	
	$( 'body' ).removeClass( 'no-js' );

//initialize the slider
	$('#featured-content').cycle( {
		slideExpr: '.featured-post',
		speed: 300,
		timeout: 7000,
		pause: 1,
		cleartypeNoBg: true,
		pager: '#slide-thumbs',
		containerResize: false,
		slideResize: false,
		fit: false,
		fx: 'uncover',
		next: '#slider-next',
		prev: '#slider-prev',
		pagerAnchorBuilder: function( idx, slide ) { 
			return '#slide-thumbs li:eq(' + idx + ') a'; 
    	}
	});

	//resize the images for the slider
	$('#featured-content').imagesLoaded(function() {
		$('img.featured-thumbnail').each(function() {
			var originalDimensions = getOriginalDimensionsOfImg(this);
			var tw = $(this).parents("div").width();
			var th = $(this).parents("div").height();
	   		var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
	   		$(this).css("width",result.width);
	   		$(this).css("height",result.height);
	   		$(this).css("left", result.targetleft);
			$(this).css("top", result.targettop);
			$(this).css("position","absolute");
		});
	});
	$('#slider-nav').imagesLoaded(function() {
		$('img.slider-nav-thumbnail').each(function() {
			var originalDimensions = getOriginalDimensionsOfImg(this);
	   		var tw = $(this).parent().width();
			var th = 150;
	   		var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
	   		$(this).css("width",result.width);
	   		$(this).css("height",result.height);
	   		$(this).css("left", result.targetleft);
			$(this).css("top", result.targettop);
		});
	});

	$('#hfeed').imagesLoaded(function() {
		$('img.hentry-thumbnail').each(function() {
			var originalDimensions = getOriginalDimensionsOfImg(this);
			var tw = $(this).parents("div").width();
			var th = $(this).parents("div").height();
			var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
			$(this).css("width",result.width);
			$(this).css("height",result.height);
			$(this).css("left", result.targetleft);
			$(this).css("top", Math.floor(result.targettop/2));
		});
	}); 
});