<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/includes/html_css_inserts.css"  type="text/css" media="all">
<?php $fa_height = 380; ?>
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/science/css/sciencestudies.css"  type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<?php
/* front page slider and masonry includes */
if ( is_front_page() ) { ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script type="text/javascript" src="http://kaymmm.github.com/mellon-altahualpa/includes/scaleimage.min.js"></script>
<script type="text/javascript" src="https://raw.github.com/desandro/imagesloaded/master/jquery.imagesloaded.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
	
	$( 'body' ).removeClass( 'no-js' );
	
	//resize the images for the slider
	$('img.featured-thumbnail').imagesLoaded(function() {
		var w = ($(this).width()===0?150:$(this).width());
		var h = ($(this).height()===0?150:$(this).height());
		var tw = 750;
		var th = 380;
   		var result = ScaleImage(w, h, tw, th, false);
   		$(this).css("width",result.width);
   		$(this).css("height",result.height);
   		$(this).css("left", result.targetleft);
		$(this).css("top", result.targettop);
	});
	$('img.slider-nav-thumbnail').imagesLoaded(function() {
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

	$('img.featured').imagesLoaded(function() {
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
} );
</script>
<?php } //front page ?>