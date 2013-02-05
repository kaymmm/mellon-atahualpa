<table id="logoarea" cellpadding="0" cellspacing="0" border="0" width="100%"><tbody>
	<tr><td rowspan="2" valign="top" class="logoarea-logo" style="padding-bottom: 10px;">
		<a href="http://gc.cuny.edu/"><img class="logo" src="<?php echo $gc_logo_url; ?>" alt="The CUNY Graduate Center"></a>
	</td>
	<td rowspan="2" valign="middle" class="logoarea-title" style="padding-left: 10px;">
		<a href="<?php echo site_url(); ?>"><img src="<?php echo $logo_url; ?>" alt="<?php bloginfo('name'); ?>"></a>
	</td>
	<td class="feed-icons" valign="top" align="right">
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