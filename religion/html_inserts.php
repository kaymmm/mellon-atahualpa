<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/includes/mellon.css"  type="text/css" media="all">
<link rel="stylesheet" href="http://kaymmm.github.com/mellon-atahualpa/religion/includes/studyofreligion.css"  type="text/css" media="all">

<?php
wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-ui' );
wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', array(), null, false );
wp_register_script( 'jquery.ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js', array('jquery'), null, false );
wp_enqueue_script('jquery.ui');
wp_register_script( 'jquery.masonry', 'http://desandro.github.com/masonry/jquery.masonry.min.js', array('jquery'), null, false );        
wp_register_script( 'jquery.imagesloaded', 'http://desandro.github.com/imagesloaded/jquery.imagesloaded.min.js', array( 'jquery' ),null,false ); 
wp_register_script( 'scaleimage', 'http://kaymmm.github.com/mellon-atahualpa/includes/scaleimage.min.js', array(),null,false ); 
wp_register_script( 'resizeimages', 'http://kaymmm.github.com/mellon-atahualpa/religion/js/resize.min.js', array('jquery','jquery.masonry','jquery.imagesloaded','scaleimage'),null,false ); 
wp_enqueue_script('resizeimages');
?>