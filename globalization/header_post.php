<?php /* header post */
	if (is_front_page() ) { ?>
		<div id="full-width">
			<?php bfa_widget_area('name=front_header&cells=2&align=9&align_2=3&width_1=700'); ?>
		</div>
	<?php } //front page 
} //main site (not publications)
/* end header post */ ?>