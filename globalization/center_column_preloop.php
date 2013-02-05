<?php if (is_page(3186)) { ?>
<iframe allowtransparency="true" src="http://form.jotform.us/form/22395128228152" frameborder="0" style="width:100%; height:852px; border:none;" scrolling="no">
</iframe>
<?php } 
bfa_next_previous_page_links('Top'); 
if ( is_front_page() || is_archive() ) { 
	if (is_front_page()) {
		bfa_widget_area('name=front_header&cells=1&align=9'); ?>
		<h2>Recent Posts</h2>
	<?php } ?>
	<div id="tumblelog" class="clearfix fluid masonry" >
<?php } else { 
	bfa_next_previous_page_links('Top');
} ?>