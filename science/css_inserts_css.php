<?php 
$fa_height = 380;
$fa_width = 750;
$social_icons = "/files/2012/09/socialicons.png";
$cuny_icons = "/files/2012/09/cuny_logo1.png";
?>
.socialicons .twitterlink {background: url(<?php echo site_url().$social_icons; ?>) no-repeat -22px 0;}
.socialicons .youtubelink {background: url(<?php echo site_url().$social_icons; ?>) no-repeat -44px 0;}
.socialicons .linkedinlink {background: url(<?php echo site_url().$social_icons; ?>) no-repeat -66px 0;}
.socialicons .facebooklink {background: url(<?php echo site_url().$social_icons; ?>) no-repeat -88px 0;}
.socialicons .rsslink {background: url(<?php echo site_url().$social_icons; ?>) no-repeat 0 0;}
.socialicons .cuny {background: url('<?php echo site_url().$cuny_icons; ?>') no-repeat 0px -22px;}

/* featured articles slider styles */
#controls-next, #controls-prev	{ top: <?php echo floor(($fa_height-30)/2); ?>px; z-index: 1000; opacity: 0.8; border: none; }
#controls-prev         { background: url(<?php echo site_url(); ?>/wp-content/themes/arras-theme/images/prev.png) no-repeat; float: left; position: absolute; left: 10px; }
#controls-next         { background: url(<?php echo site_url(); ?>/wp-content/themes/arras-theme/images/next.png) no-repeat; float: right; position: absolute; right: 10px; }
#controls-next:hover, #controls-prev:hover { opacity: 1; border: none;}
.featured-image { overflow: hidden; position: relative; }