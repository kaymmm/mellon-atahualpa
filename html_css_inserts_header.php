<<<<<<< HEAD
<?php $fa_height = 360; ?>
<?php
/* front page slider and masonry includes */
if ( is_front_page() ) { ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://raw.github.com/desandro/masonry/master/jquery.masonry.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.lite.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	//resize the images for the slider
	$('img.attachment-featured-slideshow-thumb').each(function() {
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

	$('#tumblelog img').each(function() {
		// what's the size of this image and it's parent
    		var w = $(this).width();
    		var h = $(this).height();
		var tw = $(this).parent().width();
		var th = 150; // Max height for the image

    		// compute the new size and offsets
    		var result = ScaleImage(w, h, tw, th, false);

	    	// adjust the image coordinates and size
    		$(this).css("width",result.width);
    		$(this).css("height",result.height);
    		$(this).css("left", result.targetleft);
		$(this).css("top", result.targettop);
	});
});

function ScaleImage(srcwidth, srcheight, targetwidth, targetheight, fLetterBox) {
    var result = { width: 0, height: 0, fScaleToTargetWidth: true };
    if ((srcwidth <= 0) || (srcheight <= 0) || (targetwidth <= 0) || (targetheight <= 0)) {
        return result;
    }
// scale to the target width
    var scaleX1 = targetwidth;
    var scaleY1 = (srcheight * targetwidth) / srcwidth;
// scale to the target height
    var scaleX2 = (srcwidth * targetheight) / srcheight;
    var scaleY2 = targetheight;
// now figure out which one we should use
    var fScaleOnWidth = (scaleX2 > targetwidth);
    if (fScaleOnWidth) { fScaleOnWidth = fLetterBox; }
    else { fScaleOnWidth = !fLetterBox; }
    if (fScaleOnWidth) {
        result.width = Math.floor(scaleX1);
        result.height = Math.floor(scaleY1);
        result.fScaleToTargetWidth = true;
    } else {
        result.width = Math.floor(scaleX2);
        result.height = Math.floor(scaleY2);
        result.fScaleToTargetWidth = false;
    }
    result.targetleft = Math.floor((targetwidth - result.width) / 2);
    result.targettop = Math.floor((targetheight - result.height) / 2);
    return result;
}

</script>
<?php } //front page ?>
=======
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/includes/html_css_inserts.css"  type="text/css" media="all">
>>>>>>> master
