<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/includes/mellon.css"  type="text/css" media="all">
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/religion/css/studyofreligion.css"  type="text/css" media="all">

<?php if ( is_front_page() ) {
	wp_deregister_script( 'jquery' );    
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', array(), null, false );        
	wp_register_script( 'jquery.imagesloaded', 'http://kaymmm.github.com/mellon-atahualpa/includes/jquery.imagesloaded.min.js', array( 'jquery' ),null,false ); 
	wp_register_script( 'scaleimage', 'http://kaymmm.github.com/mellon-atahualpa/includes/scaleimage.min.js', array(),null,false ); 
	wp_register_script( 'resizeimages', 'http://kaymmm.github.com/mellon-atahualpa/religion/js/resize.min.js', array('jquery','jquery.imagesloaded','scaleimage'),null,false ); 
	
	wp_enqueue_script('resizeimages');
?>

<?php } //home ?>

