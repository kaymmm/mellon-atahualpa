<div id="header">
	<div id="branding">
		<h1 id="site-title">
			<a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>" rel="home"><span><?php echo get_bloginfo('name'); ?></span></a>
		</h1>
		<h2 id="site-description">
			<span><?php echo get_bloginfo ( 'description' ); ?></span>
		</h2>
	</div><!-- #branding -->
	<div id="sidebar-header" class="sidebar">
		<div id="social-widget-2" class="widget Social_Widget widget-Social_Widget">
			<div class="widget-wrap widget-inside">
				<h3 class="widget-title">
					Follow Us!
				</h3>
				<div class="socialicons">
					<a target="_blank" href="http://twitter.com/#!/<?php echo $twitter_id; ?>" class="twitterlink"></a>
					<a target="_blank" href="<?php echo $social_facebook; ?>" class="facebooklink"></a> 
					<a target="_blank" href="http://www.cuny.edu" class="cuny"></a> 
				</div>
			</div>
		</div>
	</div><!-- #sidebar-header -->
	%pages
</div>