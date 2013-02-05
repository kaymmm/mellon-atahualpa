<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/includes/mellon.css"  type="text/css" media="all">
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/km/css/km.css"  type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Economica|Radley' rel='stylesheet' type='text/css'>
<?php
wp_deregister_script( 'jquery' );    
wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', array(), null, false );
wp_register_script( 'jquery.ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js', array('jquery'), null, false );
wp_register_script( 'jquery.masonry', 'http://desandro.github.com/masonry/jquery.masonry.min.js', array('jquery'), null, false );
wp_register_script( 'jquery.imagesloaded', 'http://desandro.github.com/imagesloaded/jquery.imagesloaded.min.js', array( 'jquery' ),null,false ); 
wp_register_script( 'scaleimage', 'http://kaymmm.github.com/mellon-atahualpa/includes/scaleimage.min.js', array(),null,false ); 
wp_register_script( 'resizeimages', 'http://kaymmm.github.com/mellon-atahualpa/km/js/resize.min.js', array('jquery','jquery.masonry','jquery.imagesloaded','scaleimage'),null,false ); 	
wp_register_script( 'stickyscroll', 'http://kaymmm.github.com/mellon-atahualpa/km/js/stickyscroll.js', array('jquery','jquery.ui'),null,false ); 	

wp_enqueue_script('resizeimages');
wp_enqueue_script('stickyscroll');
?>
<!--wp_register_script( 'hoverIntent', 'http://kaymmm.github.com/mellon-atahualpa/km/js/superfish/js/hoverIntent.js', array('jquery'),null,false );
wp_register_script( 'superfish', 'http://kaymmm.github.com/mellon-atahualpa/km/js/superfish/js/superfish.js', array('jquery','hoverIntent'),null,false );
wp_register_script( 'superfishInit', 'http://kaymmm.github.com/mellon-atahualpa/km/js/superfish-init.js', array('jquery','superfish','hoverIntent'),null,false );
wp_enqueue_script('superfishInit');
?>

<link rel="stylesheet" media="screen" href="http://kaymmm.github.com/mellon-atahualpa/km/js/superfish/css/superfish.css" /> 
<link rel="stylesheet" media="screen" href="http://kaymmm.github.com/mellon-atahualpa/km/js/superfish/css/superfish-navbar.css" />
-->