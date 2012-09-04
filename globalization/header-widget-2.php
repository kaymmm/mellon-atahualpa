<div id="header-widget-2" style="background-color: #f2f2e9; right: 0; top: 0; width: 80%; height: 100%; padding: 7px 7px 13px 13px; margin: 0; -moz-box-shadow: inset 0 0 4px #333; -webkit-box-shadow: inset 0 0 4px #333; box-shadow: inset 0 0 4px #333; }">
<a href="/refractions/" title="Refractions"><img src="http://globalization.commons.gc.cuny.edu/wp-content/blogs.dir/1011/files/2012/09/refractions-small.png" alt="Refractions" /></a>
<div class="header-widget">
	<a href="/refractions/interventions/" style="border-bottom: 1px solid #999;"><h3>Interventions</h3></a><ul class="refractions-list">
<?php 
	$args = array ( 'post_type' => 'post',
					'orderby' => 'desc',
					'cat' => 34589,
					'showposts' => 3
					);
	$recent_posts = new WP_Query($args);
	while ( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 	
	<?php endwhile;
	wp_reset_postdata(); ?>
	</ul>
</div>
<div class="header-widget">
	<a href="/refractions/topical-dossiers/" style="border-bottom: 1px solid #999;"><h3>Topical Dossiers</h3></a><ul class="refractions-list">
<?php 
	$args = array ( 'post_type' => 'post',
					'orderby' => 'desc',
					'cat' => 98891,
					'showposts' => 3
					);
	$recent_posts = new WP_Query($args);
	while ( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
	<?php endwhile;
	wp_reset_postdata(); ?>
	</ul>
</div>
<div class="header-widget">
	<a href="/refractions/working-papers/" style="border-bottom: 1px solid #999;"><h3>Working Papers</h3></a><ul class="refractions-list">
<?php 
	$args = array ( 'post_type' => 'post',
					'orderby' => 'desc',
					'cat' => 85068,
					'showposts' => 3
					);
	$recent_posts = new WP_Query($args);
	while ( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
	<?php endwhile;
	wp_reset_postdata(); ?>
	</ul>
</div>
</div>