<?php if ( is_front_page() || is_archive() ) { ?>
<div class="moreposts box col2 masonry-brick">
<?php bfa_next_previous_page_links('Bottom'); ?>
</div>
</div> <!-- tumblelog -->
<?php } else {
bfa_next_previous_post_links('Middle'); 
bfa_get_comments();
bfa_next_previous_post_links('Bottom');
bfa_archives_page('<div class="archives-page">','</div>');
bfa_next_previous_page_links('Bottom'); 
} ?>