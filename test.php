<?php if (is_page(1185)) { ?>
<script type="text/javascript" src="http://form.jotform.us/jsform/22394946321153"></script>
<?php } ?>
<?php if (is_front_page() ) {
	bfa_widget_area('name=front_header&cells=1&align=9');
} ?>
<h3>Recent Posts and Announcements</h3>
<?php 
if ( is_front_page() || is_archive() ) {
//global $wp_query;
$paged = (get_query_var('page')) ? get_query_var('page') : ((get_query_var('paged')) ? get_query_var('paged') : 1);
//WPD_print("paged:".$paged);
$args = array('post_type' => array('post','event'),'scope' => 'all','paged' => $paged,'posts_per_page' => 8);
query_posts($args);
WPD_print('wp_query:'.$wp_query);
/*global $wp_query;
WPD_print('wp_query:'.$wp_query);
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$args = array('post_type' => array('post','event'),'scope' => 'all','paged' => $paged,'posts_per_page' => 8);
$wp_query->query($args);
WPD_print('wp_query new:'.$wp_query);*/
?>
	<div id="tumblelog" class="clearfix fluid masonry" >
<?php } else {
	bfa_next_previous_page_links('Top'); 
} ?>