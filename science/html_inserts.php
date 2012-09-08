<?php $fa_height = 360; ?>
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/science/css/sciencestudies.css"  type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<?php
/* front page slider and masonry includes */
if ( is_front_page() ) { ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.lite.js"></script>
<script type="text/javascript" src="http://kaymmm.github.com/mellon-altahualpa/includes/scaleimage.min.js"></script>
<script type="text/javascript" src="https://raw.github.com/desandro/imagesloaded/master/jquery.imagesloaded.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	//resize the images for the slider
	$('img.attachment-featured-slideshow-thumb').load(function() {
		var w = ($(this).width()===0?150:$(this).width());
		var h = ($(this).height()===0?150:$(this).height());
		var tw = $(this).parent().width();
		var th = $(this).parent().height();
   		var result = ScaleImage(w, h, tw, th, false);
   		$(this).css("width",result.width);
   		$(this).css("height",result.height);
   		$(this).css("left", result.targetleft);
		$(this).css("top", result.targettop);
	});
	//initialize the slider
	$('#featured-slideshow').cycle({speed: 300, next: '#controls .next', prev: '#controls .prev', timeout: 7000, pause: 1, containerResize: 0});

	$('img.archive-thumbnail.featured').load(function() {
		var w = ($(this).width()===0?150:$(this).width());
		var h = ($(this).height()===0?150:$(this).height());
		var tw = $(this).parent().width();
		var th = $(this).parent().height();
		var result = ScaleImage(w, h, tw, th, false);
		$(this).css("width",result.width);
		$(this).css("height",result.height);
		$(this).css("left", result.targetleft);
		$(this).css("top", result.targettop);
	}); 
});
</script>
<?php } //front page ?>