<?php if (is_page(642)) { ?>
	<script type="text/javascript" src="http://form.jotform.us/jsform/22394977548168"></script>
<?php } ?>
<?php if ( is_front_page() ) { ?>
<div class="welcome">The Committee for the Study of Religion exists to promote interdisciplinary research on religion and religions. It develops various historical and comparative research projects that address religion and the sacred, and their complex and diverse manifestations in modern societies. In addition to the ‘world religions’, our concerns extend to modern spirituality and new religions. The Committee encourages research into the globalization of religion and global religions. Questions surrounding secularism, secularization and post-secular society are also considered by the Committee.</div>

<h2 class="welcome">Recent and Upcoming Events</h2>
<?php 
}
if ( is_front_page() || is_archive() ) {
	global $wp_query;
	$wp_query = new WP_Query();
	$paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
	$args = array(
		'post_type' => array('event','post'),
		'scope' => 'all',
		'posts_per_page' => 8,
		'paged' => $paged
	);
	query_posts($args);
?>
<div id="tumblelog" class="clearfix fluid masonry" >
<?php } else {
	bfa_next_previous_page_links('Top'); 
} ?>