<?php /* header main */ ?>
<table id="logoarea" cellpadding="0" cellspacing="0" border="0" width="100%"><tbody>
<tr>
<td rowspan="2" valign="middle" class="logoarea-title">
<a href="<?php echo site_url(); ?>"><span style="font-size: 3em; font-family: 'Economica', sans-serif;"><span style="color:#FD253C;">KEITH</span><span style="color:#F9791E;">K</span><span style="color:#D2E102;">MIYAKE</span></span></a>
</td>
</tr>
<tr><td valign="bottom" class="search-box" align="right">
	<div class="searchbox"><form method="get" class="searchform" action="<?php echo site_url(); ?>">
		<div class="searchbox-form"><input type="text" class="text inputblur" onfocus="this.value=''" value="search the site" onblur="this.value='search the site'" name="s"></div>
	</form></div> 
</td></tr>
</tbody></table>
%pages
<?php /* end header main */ 
function has_parent($post, $post_id) {
	if ($post->ID == $post_id) return true;
	else if ($post->post_parent == 0) return false;
	else return has_parent(get_post($post->post_parent),$post_id);
}
?>