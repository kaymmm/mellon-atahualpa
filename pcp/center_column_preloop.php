<?php if (is_front_page() ) {
	bfa_widget_area('name=front_header&cells=1&align=9');
?>
<h3>Recent Posts and Announcements</h3>
<?php } //front page ?>
<?php if ( is_front_page() || is_archive() ) { ?>
	<div id="tumblelog" class="clearfix fluid masonry" >
<?php } else {
bfa_next_previous_page_links('Top'); 
} ?>