<?php /* For MULTI post pages if activated at ATO -> Next/Previous Navigation: */
bfa_next_previous_page_links('Top'); ?>

<?php /* For the plugin Page2Cat http://wordpress.org/extend/plugins/page2cat/ */
if( is_category() AND function_exists('page2cat_output')) { page2cat_output($cat); } ?>