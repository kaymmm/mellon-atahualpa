<?php bfa_next_previous_page_links('Top'); ?>

<?php if (is_front_page() ) { ?>
<div id="featured-wrapper" class="featured clear fix">
	<div id="controls">
		<a href="" class="prev">Prev</a> 
		<a href="" class="next">Next</a>
	</div>
	<div id="featured-content">
		<?php
		$args = array ( 'post_type' => 'post',
				'order' => 'DESC',
				'orderby' => 'date',
				'posts_per_page' => 6
				);
		$recent_posts = new WP_Query($args);
		while ( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
			<?php  if (has_post_thumbnail()) { ?>
				<div class="featured-article" onclick="document.location='<?php the_permalink(); ?>'" style="cursor:pointer;">
					<div class="featured-image"><?php the_post_thumbnail("large", array ('class' => 'attachment-featured-slideshow-thumb wp-post-image featured-thumbnail')); ?></div>
					<div class="featured-entry"><h2 class="post-title entry-title"><?php the_title(); ?></h2></div>
				</div>
			<?php } ?>
		<?php endwhile; ?>
	</div> <!-- featured-content -->
	<div id="slider-nav">
		<ul id="slide-thumbs">
			<?php $slidecount = 1;
			$args = array ( 'post_type' => 'post',
						'order' => 'DESC',
						'orderby' => 'date'
						);
			while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
				<li class="<?php echo ( $slidecount == 6 ) ? 'last' : ''; ?>">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail("thumbnail", array('size' => 'slider-nav-thumbnail')); 
					} ?>
				</li>
				<?php $slidecount++; ?>
			<?php endwhile; ?>
		</ul>
	</div><!-- #slider-nav-->
</div> <!-- featured-wrapper-->
<div id="all-articles">
	<div id="hfeed" style="float:left; width: 450px;">
		<h4 class="section-title">Recent and Upcoming Events</h4>
		<!-- events listing -->
		<?php $args = array ( 'post_type' => 'event',
						'order' => 'DESC',
						'orderby' => 'date',
						'posts_per_page' => 5
						);
		$recent_posts = new WP_Query($args);
		while ( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
			<div <?php post_class('event'); ?> id="post-<?php the_ID(); ?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<div class="hentry-thumb">
						<?php the_post_thumbnail("large", array ('class' => 'archive-thumbnail featured')); ?>
						<a class="read-more" href="<?php the_permalink(); ?>">Event Details →</a>
					</div>
					</a>
				<?php } ?>
				<div class="entry-header">
					<h2 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="byline"><abbr class="published" title="<?php the_time('F jS, Y'); ?>"><?php the_time('F jS, Y'); ?></abbr></div>
				</div>
				<div class="byline-cat"><span class="category"><?php the_tags( '', ', ', '' ); ?></span></div>
				<div class="entry-summary"><?php the_excerpt(); ?>  <a href="<?php the_permalink(); ?>">[MORE...]</a></div>
				<?php bfa_post_footer('<div class="post-footer">','</div>'); ?>
			</div><!-- / Post -->
		<?php endwhile;
		wp_reset_postdata(); ?>
	</div><!-- /hfeed -->
	<div id="vfeed" style="float:right; width:240px;">
		<!-- articles listing -->
		<h4 class="section-title">More Posts</h4>
		<?php $args = array ( 'post_type' => 'post',
							'order' => 'DESC',
							'orderby' => 'date',
							'posts_per_page' => 5,
							'offset' => 5
							);
		$recent_posts = new WP_Query($args);
		while ( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
			<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<div class="ventry-thumb">
						<?php the_post_thumbnail(array(100,100), array ('class' => 'ventry-thumbnail')); ?>
					</div>
					</a>
				<?php } ?>
				<div class="ventry-content">
					<h4 class="post-title ventry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					<span class="ventry-date"><?php the_time('F jS, Y'); ?></span>
				</div><!-- / content -->
			</div><!-- / post -->
		<?php endwhile;
		wp_reset_postdata(); ?>
	</div><!-- /vfeed -->
</div><!-- /all articles -->
<?php } //front page ?>