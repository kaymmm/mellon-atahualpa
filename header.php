<?php /* header main */ ?>
<table id="logoarea" cellpadding="0" cellspacing="0" border="0" width="100%">
	<tbody>
		<tr>
			<td rowspan="2" valign="middle" class="logoarea-logo">
				<a href="http://gc.cuny.edu/">
					<img class="logo" src="<?php echo site_url().$gc_logo_url; ?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</td>
			<td rowspan="2" valign="middle" class="logoarea-title">
				<a href="<?php echo site_url(); ?>">
					<img width="650px" height="150px" src="<?php echo site_url().$logo_url; ?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</td>
			<td class="feed-icons" valign="middle" align="right"> 
				<!-- social icons --> 
				<div class="socialicons" style="bottom: 0px; right: 0;">
					<a target="_blank" href="http://twitter.com/#!/<?php echo $social_twitter; ?>" class="twitterlink"></a>
					<a target="_blank" href="<?php echo $social_facebook; ?>" class="facebooklink"></a> 
					<a target="_blank" href="http://www.cuny.edu" class="cuny"></a> 
				</div>
			</td>
		</tr>
		<tr>
			<td valign="bottom" class="search-box" align="right">
				<div class="searchbox">
					<form method="get" class="searchform" action="<?php echo site_url(); ?>">
						<div class="searchbox-form">
							<input type="text" class="text inputblur" onfocus="this.value=''" value="search the site" onblur="this.value='search the site'" name="s">
						</div>
					</form>
				</div> 
			</td>
		</tr>
	</tbody>
</table>

%pages

<?php /* end header main */ ?>