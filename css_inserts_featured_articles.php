/* featured articles slider styles */
.featured               { margin: 0 0 30px 0; overflow: hidden; width:100%; height:<?php echo $fa_height; ?>px; float:left; border: 2px solid #999; }
#controls               { position: relative; float: left; z-index: 100; top: <?php echo floor(($fa_height-30)/2); ?>px; width: 100%; }
.featured-article       { overflow: hidden; display: block; position: relative; width: 100%; height:<?php echo $fa_height; ?>px; text-decoration: none !important; cursor:pointer; margin: 0; padding: 0; }
.featured-entry         { position: absolute; bottom: 0px; overflow: hidden; background: #333; max-height: <?php echo floor($fa_height/3); ?>px; min-height:50px; color: #a7a7a7; padding: 0; display: block; opacity: 0.7; filter: alpha(opacity = 70); right: 0px; left: 0px; text-align: right;}
