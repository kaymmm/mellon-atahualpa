<?php
function better_excerpt($text) {
	$words = 55;
	$allowed_tags = '<a>,<i>,<em>,<b>,<strong>';
    $text = explode(' ', $text);
    $tot = count($text);
    for ( $i=0; $i<$words; $i++ ) {
    	$output .= $text[$i] . ' ';
	}
	$output = force_balance_tags($output);
	if ( $i < $tot ) {
		$output.='...';
	}
	$output='<p>'.preg_replace('/\[.*\]/', '', strip_tags($output, $allowed_tags)).'</p>';
	return $output;
}

function str_replace_recursive($haystack, $needle, $endneedle) {                
	$count = substr_count($haystack,$needle);
	if ($count == 0) {
		return $haystack;
	}
	$nlen = strlen($needle);
	$elen = strlen($endneedle);
	$offset = strpos($haystack, $needle);
	$endpos = strpos($haystack, $endneedle);
	$before = substr($haystack,0,$offset);
	$len = $endpos-$offset-$nlen;
	$excerpt = substr($haystack,$offset+$nlen,$len);
	$after = substr($haystack,$endpos+$elen);
	return $before.better_excerpt($excerpt).str_replace_recursive($after,$needle,$endneedle);
}

$format = <<< EOM
<div class="box col1 masonry-brick">
	{has_image}
	<div class="post-thumbnail">
		<a href="#_EVENTURL"><img src="#_EVENTIMAGEURL" alt="#_EVENTNAME" class="attachment-featured-slideshow-thumb wp-post-image" /></a>
	</div>
	{/has_image}
	<div class="post-content">
		<div class="post-headline"><a href="#_EVENTURL"><h3>#_EVENTNAME</h3></a></div>
		<div class="post-date">#F #j #g.#i#a</div>
		<div class="post-bodycopy">[EVENTTEXT]#_EVENTEXCERPT[/EVENTTEXT]</div>
	</div>
	<div class="post-footer">
		<span class="footer-loc">Location: #_LOCATIONNAME</span>
		<span class="footer-tags">Tags: #_EVENTTAGS</span>
		<span class="footer-cats">Categories: #_EVENTCATEGORIES</span>
		<span class="footer-permalink"><a href="#_EVENTURL">Permalink</a></span>
	</div>
</div>
EOM;
$theoutput = EM_Events::output(array(
		'limit'=>6, 
		'order'=>'DESC',
		'orderby'=>'event_start_date,event_name',
		'scope'=>'all',
		'format'=>$format
		));
$theoutput = str_replace_recursive($theoutput,'[EVENTTEXT]','[/EVENTTEXT]');

echo <<<EOM
<div id="tumblelog" class="clearfix fluid masonry">
	$theoutput
</div>
EOM;
?>