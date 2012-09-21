<?php if ( is_front_page() || is_archive() ) { //start masonry brick	?>
<div class="box col1 masonry-brick">
<?php if ( function_exists('post_class') ) { ?>
		<div <?php if ( is_page() ) { post_class('post'); } else { post_class(); } ?> id="post-<?php the_ID(); ?>">
<?php } else { ?>
		<div class="<?php echo ( is_page() ? 'page ' : '' ) . 'post" id="post-'; the_ID(); ?>">
<?php }
	if( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
<?php }
	bfa_post_kicker('<div class="post-kicker">','</div>');
	bfa_post_headline('<div class="post-headline">','</div>');
	bfa_post_byline('<div class="post-byline">','</div>'); ?>
	<div class="post-bodycopy clearfix">
		<?php the_excerpt(); ?>
	</div>
<?php bfa_post_pagination('<p class="post-pagination"><strong>'.__('Pages:','atahualpa').'</strong>','</p>');
bfa_post_footer('<div class="post-footer">','</div>'); ?>
</div><!-- / Post -->
</div><!-- / brick -->
<?php } else {  //not archive or front page ?>
<?php bfa_next_previous_post_links('Top');
/* Post Container starts here */
if ( function_exists('post_class') ) { ?>
	<div <?php 
		if ( is_page() ) { 
			post_class('post'); 
		} else { post_class(); } 
	?> id="post-<?php the_ID(); ?>">
<?php } else { ?>
	<div class="<?php echo ( is_page() ? 'page ' : '' ) . 'post" id="post-'; the_ID(); ?>">
<?php }
bfa_post_kicker('<div class="post-kicker">','</div>');
bfa_post_headline('<div class="post-headline">','</div>');
bfa_post_byline('<div class="post-byline">','</div>');
bfa_post_bodycopy('<div class="post-bodycopy clearfix">','</div>');
bfa_post_pagination('<p class="post-pagination"><strong>'.__('Pages:','atahualpa').'</strong>','</p>');
bfa_post_footer('<div class="post-footer">','</div>');
?>
</div><!-- / Post -->
<?php } //not-front-page ?>