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
<div><a class="featured-article" href="<?php the_permalink(); ?>">
<?php  if (has_post_thumbnail()) { ?>
    <div class="featured-image">
		<?php the_post_thumbnail("large", array ('class' => 'attachment-featured-slideshow-thumb wp-post-image')); ?>
    </div>
<?php } ?>
</a>
<span class="featured-entry">
<span class="entry-title"><?php the_title(); ?></span> 
<span class="entry-summary"><?php the_excerpt(); ?></span>
</span>
</div>
<?php endwhile;
wp_reset_postdata(); ?>
</div> <!-- featured -->
</div> <!-- slideshow -->