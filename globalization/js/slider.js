jQuery(document).ready(function($) {
	//resize the images for the slider
	$('#featured-slideshow').imagesLoaded(function() {
		$('img.attachment-featured-slideshow-thumb').each(function() {
			var originalDimensions = getOriginalDimensionsOfImg(this);
			var tw = $(this).parents("div").width();
			var th = $(this).parents("div").height();
	   		var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
	   		$(this).css("width",result.width);
	   		$(this).css("height",result.height);
	   		$(this).css("left", result.targetleft);
			$(this).css("top", result.targettop/2);
			$(this).css("position","absolute");
		});
	});

	//initialize the slider
	$('#featured-slideshow').cycle({
		speed: 300, 
		next: '#controls .next', 
		prev: '#controls .prev', 
		timeout: 7000, 
		pause: 1, 
		containerResize: 0
	});
});