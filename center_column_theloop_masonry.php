<?php bfa_next_previous_post_links('Top'); ?>
<?php /* masonry container */
if ( is_front_page() ) { //start masonry brick	?>
	<div class="box col1 masonry-brick">
<?php }

if ( function_exists('post_class') ) { ?>
	<div <?php if ( is_page() ) { post_class('post'); } else { post_class(); } ?> id="post-<?php the_ID(); ?>">
<?php } else { ?>
	<div class="<?php echo ( is_page() ? 'page ' : '' ) . 'post" id="post-'; the_ID(); ?>">
<?php }

if ( is_front_page() && has_post_thumbnail() ) { ?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
<?php } ?>

<?php
bfa_post_kicker('<div class="post-kicker">','</div>');
bfa_post_headline('<div class="post-headline">','</div>');
bfa_post_byline('<div class="post-byline">','</div>');
if ( is_front_page() ) { ?>
<div class="post-bodycopy clearfix">
<?php the_excerpt(); ?>
</div>
<?php }else{
bfa_post_bodycopy('<div class="post-bodycopy clearfix">','</div>');
}
bfa_post_pagination('<p class="post-pagination"><strong>'.__('Pages:','atahualpa').'</strong>','</p>');
bfa_post_footer('<div class="post-footer">','</div>');
?>
</div><!-- / Post -->

<?php if ( is_front_page() ) { ?>
</div><!-- / brick -->
<?php } ?>