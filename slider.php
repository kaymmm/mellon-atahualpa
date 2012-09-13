<div class="featured clear fix">
	<div id="controls">
	<a href="" class="prev">Prev</a> 
	<a href="" class="next">Next</a>
	</div>
	<div id="featured-slideshow">
	<?php 
	$args = array ( 'post_type' => 'event',
					'orderby' => 'desc',
					'showposts' => 5
					);
	$recent_posts = new WP_Query($args);
	while ( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
		<?php  if (has_post_thumbnail()) { ?>
			<div class="featured-article" onclick="document.location='<?php the_permalink(); ?>'" style="cursor:pointer;">
				<?php the_post_thumbnail("large", array ('class' => 'attachment-featured-slideshow-thumb wp-post-image')); ?>
				<div class="featured-entry">
					<span class="entry-title"><?php the_title(); ?></span> 
					<span class="entry-summary"><?php the_excerpt(); ?></span>
				</div>
			</div>
		<?php } ?>
	<?php endwhile;
	wp_reset_postdata(); ?>
	</div> <!-- featured -->
</div> <!-- slideshow -->