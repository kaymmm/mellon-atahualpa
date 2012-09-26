<?php if (is_page(1185)) { ?>
<script type="text/javascript" src="http://form.jotform.us/jsform/22394946321153"></script>
<?php } else if (is_front_page() ) {
	bfa_widget_area('name=front_header&cells=1&align=9');
?>
<h3>Recent Posts and Announcements</h3>
<?php } 
if ( is_front_page() || is_archive() ) { ?>
<div id="tumblelog" class="clearfix fluid masonry" >
<?php } else {
	bfa_next_previous_page_links('Top'); 
} ?>