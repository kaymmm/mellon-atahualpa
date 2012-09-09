<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/includes/html_css_inserts.css"  type="text/css" media="all">
<?php jqufa_height = 380; ?>
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-altahualpa/science/css/sciencestudies.css"  type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<?php
/* front page slider and masonry includes */
if ( is_front_page() ) { ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script type="text/javascript" src="http://kaymmm.github.com/mellon-altahualpa/includes/scaleimage.min.js"></script>

<script type="text/javascript">
var jqu = jQuery.noConflict();

jqu( function () {
	
	jqu( 'body' ).removeClass( 'no-js' );
	
	//resize the images for the slider
	jqu('img.featured-thumbnail').load(function() {
		var w = (jqu(this).width()===0?150:jqu(this).width());
		var h = (jqu(this).height()===0?150:jqu(this).height());
		var tw = jqu(this).parent().width();
		var th = jqu(this).parent().height();
   		var result = ScaleImage(w, h, tw, th, false);
   		jqu(this).css("width",result.width);
   		jqu(this).css("height",result.height);
   		jqu(this).css("left", result.targetleft);
		jqu(this).css("top", result.targettop);
	});
	jqu('img.slider-nav-thumbnail').load(function() {
		var w = (jqu(this).width()===0?150:jqu(this).width());
		var h = (jqu(this).height()===0?150:jqu(this).height());
		var tw = jqu(this).parent().width();
		var th = jqu(this).parent().height();
   		var result = ScaleImage(w, h, tw, th, false);
   		jqu(this).css("width",result.width);
   		jqu(this).css("height",result.height);
   		jqu(this).css("left", result.targetleft);
		jqu(this).css("top", result.targettop);
	});

	//initialize the slider

jqu('#featured-content').cycle( {
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

	jqu('img.featured').load(function() {
		var w = (jqu(this).width()===0?150:jqu(this).width());
		var h = (jqu(this).height()===0?150:jqu(this).height());
		var tw = jqu(this).parent().width();
		var th = jqu(this).parent().height();
		var result = ScaleImage(w, h, tw, th, false);
		jqu(this).css("width",result.width);
		jqu(this).css("height",result.height);
		jqu(this).css("left", result.targetleft);
		jqu(this).css("top", result.targettop);
	}); 
} );
</script>
<?php } //front page ?>