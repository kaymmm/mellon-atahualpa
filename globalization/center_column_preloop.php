<?php if (is_page( 'events' ) || 2948 == $post->post_parent) {
bfa_widget_area('name=pre-loop&cells=3&align=2&before_widget=<div id="%1$s" class="header-widget %2$s">&after_widget=</div>'); 
} else if ( is_front_page() ) { ?>
	<div id="tumblelog" class="clearfix fluid masonry"> <!-- begin masonry container -->
<?php } ?>