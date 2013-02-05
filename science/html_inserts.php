<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/includes/mellon.css"  type="text/css" media="all">
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/science/css/sciencestudies.css"  type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<?php if ( is_front_page() ) {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', array(), null, false );
	wp_register_script( 'jquery.masonry', 'http://desandro.github.com/masonry/jquery.masonry.min.js', array('jquery'), null, false );
	wp_register_script( 'jquery.cycle', 'http://kaymmm.github.com/mellon-atahualpa/includes/jquery.cycle.all.min.js', array( 'jquery' ),null,false );
	wp_register_script( 'jquery.imagesloaded', 'http://desandro.github.com/imagesloaded/jquery.imagesloaded.min.js', array( 'jquery' ),null,false );
	wp_register_script( 'scaleimage', 'http://kaymmm.github.com/mellon-atahualpa/includes/scaleimage.min.js', array(),null,false );
	wp_register_script( 'resizeimages', 'http://kaymmm.github.com/mellon-atahualpa/science/js/resize.min.js', array('jquery','jquery.masonry','jquery.cycle','jquery.imagesloaded','scaleimage'),null,false );
	wp_enqueue_script('resizeimages');
} //front page ?>