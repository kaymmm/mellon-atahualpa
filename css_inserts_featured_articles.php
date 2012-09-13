/* featured articles slider styles */
.featured               { margin: 0 0 30px 0; overflow: hidden; width:100%; height:<?php echo $fa_height; ?>px; float:left; border: 2px solid #999; }
#controls               { position: relative; float: left; z-index: 100; top: <?php echo floor(($fa_height-30)/2); ?>px; width: 100%; }
#controls .next, #controls .prev    { text-indent: -9000px; width: 30px; height: 30px; display: block; z-index: 1000; opacity: 0.8; }
#controls .prev         { background: url(<?php echo site_url(); ?>/wp-content/themes/arras-theme/images/prev.png) no-repeat; float: left; position: absolute; left: 10px; }
#controls .next         { background: url(<?php echo site_url(); ?>/wp-content/themes/arras-theme/images/next.png) no-repeat; float: right; position: absolute; right: 10px; }
#controls .next:hover, #controls .prev:hover { opacity: 1; }
#controls a:focus       { outline: none; }
#featured-slideshow     { position: relative; z-index: 0 !important; width: 100%; }          
.featured-article       { overflow: hidden; display: block; position: relative; width: 100%; height:<?php echo $fa_height; ?>px; text-decoration: none !important; cursor:pointer; margin: 0; padding: 0; }
.featured-entry         { position: absolute; bottom: 0px; overflow: hidden; background: #333; max-height: <?php echo floor($fa_height/3); ?>px; min-height:50px; color: #a7a7a7; padding: 0; display: block; opacity: 0.7; filter: alpha(opacity = 70); right: 0px; left: 0px; text-align: right;}
.featured-entry .entry-title    { color: #FFF; padding: 10px 15px 0 5px; display: block; font-size: 18px; font-weight: 700; line-height: 1em;}
.featured-entry .entry-summary  { padding: 0 15px; margin: 0; display: block; line-height: 1.1em;}
