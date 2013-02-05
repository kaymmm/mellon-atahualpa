<?php /* header pre */ 
$logo_url = site_url()."/wp-content/blogs.dir/1013/files/2012/09/studyofreligion-logo.png";
$gc_logo_url = site_url()."/wp-content/blogs.dir/1013/files/2012/09/CUNY-GC-logo.png";
$social_twitter = "csratgc";
$social_facebook = "https://www.facebook.com/pages/The-Committee-for-the-Study-of-Religion/162667713794259";

global $wp_query;
if (!is_singular()) {
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$args = array('post_type' => array('post','event'),'scope' => 'all','paged' => $paged);
	$args = array_merge($args, $wp_query->query );
	query_posts($args);
} 
/* end header pre */ ?>