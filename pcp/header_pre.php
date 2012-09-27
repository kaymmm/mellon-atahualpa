<?php /* header pre */
$logo_url = site_url()."wp-content/blogs.dir/1109/files/2012/09/pcp-logo.png";
$gc_logo_url = site_url()."/files/2012/09/CUNY-GC-logo.png";
$social_twitter = "pcpatgc";
$social_facebook = "https://www.facebook.com/placeculturepolitics";

global $wp_query;
if (!is_singular()) {
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = array('post_type' => array('post','event'),'scope' => 'all','paged' => $paged);
	$args = array_merge($args, $wp_query->query );
	query_posts($args);
} 
/* end header pre */ ?>
