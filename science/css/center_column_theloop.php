<?php if (!is_front_page() ) { ?>
<?php bfa_next_previous_post_links('Top'); ?>

<?php
/* Post Container starts here */
if ( function_exists('post_class') ) { ?>
<div <?php 
if ( is_page() ) { 
	post_class('post'); } else { post_class(); } ?> id="post-<?php the_ID(); ?>">
<?php } else { ?>
	<div class="<?php echo ( is_page() ? 'page ' : '' ) . 'post" id="post-'; the_ID(); ?>">
<?php } ?>
<?php
bfa_post_kicker('<div class="post-kicker">','</div>');
bfa_post_headline('<div class="post-headline">','</div>');
bfa_post_byline('<div class="post-byline">','</div>');
bfa_post_bodycopy('<div class="post-bodycopy clearfix">','</div>');
bfa_post_pagination('<p class="post-pagination"><strong>'.__('Pages:','atahualpa').'</strong>','</p>');
bfa_post_footer('<div class="post-footer">','</div>');
?>
</div><!-- / Post -->
<?php } ?>