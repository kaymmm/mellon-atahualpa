<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/includes/html_css_inserts.css"  type="text/css" media="all">
<?php $fa_height = 380; ?>
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/science/css/sciencestudies.css"  type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<?php if ( is_home() ) { ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script type="text/javascript" src="http://kaymmm.github.com/mellon-altahualpa/includes/scaleimage.min.js"></script>
<script type="text/javascript" src="https://raw.github.com/desandro/imagesloaded/master/jquery.imagesloaded.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	
//	$( 'body' ).removeClass( 'no-js' );

//initialize the slider
	$('#featured-content').cycle( {
		slideExpr: '.featured-post',
		fx: 'fade',
		speed: 300,
		timeout: 7000,
		pause: 1,
		cleartypeNoBg: true,
		pager: '#slide-thumbs',
		slideResize:   true,
		containerResize: false,
		width: '100%',
		fit: 1,
		next: '#controls-next',
		prev: '#controls-prev',
		pagerAnchorBuilder: function( idx, slide ) { 
			return '#slide-thumbs li:eq(' + idx + ') a'; 
    	}
	});

	//resize the images for the slider
	$('#featured-content img.featured-thumbnail').imagesLoaded(function() {
		$(this).each(function() {
			var originalDimensions = getOriginalDimensionsOfImg($(this)[0]);
			var tw = 750;
			var th = 380;
	   		var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
	   		$(this).css("width",result.width);
	   		$(this).css("height",result.height);
	   		$(this).css("left", result.targetleft);
			$(this).css("top", result.targettop);	
		});
	});
	$('#slider-nav img.slider-nav-thumbnail').imagesLoaded(function() {
		$(this).each(function() {
			var originalDimensions = getOriginalDimensionsOfImg($(this)[0]);
	   		var tw = $(this).parent().width();
			var th = $(this).parent().height();
	   		var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
	   		$(this).css("width",result.width);
	   		$(this).css("height",result.height);
	   		$(this).css("left", result.targetleft);
			$(this).css("top", result.targettop);
		});
	});

	$('#hfeed img.hentry-thumbnail').imagesLoaded(function() {
		$(this).each(function() {
			var originalDimensions = getOriginalDimensionsOfImg($(this)[0]);
			var tw = $(this).parents("div").width();
			var th = $(this).parents("div").height();
			var result = ScaleImage(originalDimensions.width, originalDimensions.height, tw, th, false);
			$(this).css("width",result.width);
			$(this).css("height",result.height);
			$(this).css("left", result.targetleft);
			$(this).css("top", result.targettop);
		});
	}); 
});

function getOriginalDimensionsOfImg(img_element) {
	var t = new Image();
	var result = { width: 0, height: 0 };
	t.src = (img_element.getAttribute ? img_element.getAttribute("src") : false) || img_element.src;
	result.width=t.width;
	result.height=t.height;
	return result;
}
</script>
<?php } //front page ?>