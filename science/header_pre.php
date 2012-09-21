<?php
$gc_logo_url = site_url()."/wp-content/blogs.dir/1013/files/2012/09/CUNY-GC-logo.png";
$social_twitter = "scistudies";
$social_facebook = "https://www.facebook.com/pages/The-Committee-for-Interdisciplinary-Science-Studies/207200129320660";
?>
<table id="logoarea" cellpadding="0" cellspacing="0" border="0" width="100%"><tbody>
	<tr><td rowspan="2" valign="middle" class="logoarea-logo">
		<a href="http://gc.cuny.edu/"><img class="logo" src="<?php echo site_url().$gc_logo_url; ?>" alt="The City University of New York Graduate Center"></a>
	</td>
	<td rowspan="2" valign="middle" class="branding">
		<h1 id="site-title">
			<a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>" rel="home"><span><?php echo get_bloginfo('name'); ?></span></a>
		</h1>
	</td>
	<td class="feed-icons" valign="middle" align="right">
		<div class="socialicons" style="bottom: 0px; right: 0;">
			<a target="_blank" href="http://twitter.com/#!/<?php echo $social_twitter; ?>" class="twitterlink"></a>
			<a target="_blank" href="<?php echo $social_facebook; ?>" class="facebooklink"></a> 
			<a target="_blank" href="http://www.cuny.edu" class="cuny"></a> 
		</div></td></tr>
	<tr><td valign="bottom" class="search-box" align="right">
		<div class="searchbox"><form method="get" class="searchform" action="<?php echo site_url(); ?>">
			<div class="searchbox-form"><input type="text" class="text inputblur" onfocus="this.value=''" value="search the site" onblur="this.value='search the site'" name="s"></div>
		</form></div> 
	</td></tr>
</tbody></table>
%pages