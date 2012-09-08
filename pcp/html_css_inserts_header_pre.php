<?php $fa_height = 360; ?>
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/pcp/includes/pcp.css"  type="text/css" media="all">
<?php
/* front page slider and masonry includes */
if ( is_front_page() ) { ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://desandro.github.com/masonry/jquery.masonry.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.lite.js"></script>
<script type="text/javascript" src="http://kaymmm.github.com/mellon-altahualpa/includes/scaleimage.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	//resize the images for the slider
	$('img.attachment-featured-slideshow-thumb').load(function() {
		var w = $(this).width();
		var h = $(this).height();
		var tw = $(this).parent().width();
		var th = $(this).parent().height();
   		// compute the new size and offsets
   		var result = ScaleImage(w, h, tw, th, false);
    	// adjust the image coordinates and size
   		$(this).css("width",result.width);
   		$(this).css("height",result.height);
   		$(this).css("left", result.targetleft);
		$(this).css("top", result.targettop);
	});
	//initialize the slider
	$('#featured-slideshow').cycle({speed: 300, next: '#controls .next', prev: '#controls .prev', timeout: 7000, pause: 1, containerResize: 0});

	// masonry resizing
	$(function(){
		$('#tumblelog').imagesLoaded( function(){
			$('#tumblelog').masonry({
				itemSelector: '.box',
				isFitWidth: true, 
				columnWidth: function( containerWidth ) {
				    return containerWidth / 2;
				}
			});
		});
	});

	$('#tumblelog img').load(function() {
		// what's the size of this image and it's parent
		var w = $(this).width();
		var h = $(this).height();
		var tw = $(this).parent().width();
		var th = 150; 
   		// compute the new size and offsets
		var result = ScaleImage(w, h, tw, th, false);
		// adjust the image coordinates and size
		$(this).css("width",result.width);
		$(this).css("height",result.height);
		$(this).css("left", result.targetleft);
		$(this).css("top", result.targettop);
	});
});
</script>
<?php } //front page ?>