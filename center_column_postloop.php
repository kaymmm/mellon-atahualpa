<?php /* Displayed on SINGLE post pages if activated at ATO -> Next/Previous Navigation: */
bfa_next_previous_post_links('Middle'); ?>

<?php /* Load Comments template (on single post pages, and static pages, if set on options page): */
bfa_get_comments(); ?>

<?php /* Displayed on SINGLE post pages if activated at ATO -> Next/Previous Navigation: */
bfa_next_previous_post_links('Bottom'); ?>
		
<?php /* Archives Pages. Displayed on a specific static page, if configured at ATO -> Archives Pages: */
bfa_archives_page('<div class="archives-page">','</div>'); ?>
			
<?php /* Displayed on MULTI post pages if activated at ATO -> Next/Previous Navigation: */
bfa_next_previous_page_links('Bottom'); ?>