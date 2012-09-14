<div class="featured clear fix">
	<div id="controls">
	<a href="" class="prev">Prev</a> 
	<a href="" class="next">Next</a>
	</div>
	<div id="featured-slideshow">
<?php
$format = <<< EOM
{has_image}
<div class="featured-article" onclick="document.location='#_EVENTURL'">
	<img src="#_EVENTIMAGEURL" alt="#_EVENTNAME" class="attachment-featured-slideshow-thumb wp-post-image" />
	<div class="featured-entry">
		<span class="entry-date"> #F #j #g.#i#a </span>
		<span class="entry-title">#_EVENTNAME</span>
		<span class="entry-summary">#_EVENTEXCERPT</span>
	</div>
</div>
{/has_image}
EOM;
	echo EM_Events::output(array(
		'limit'=>6, 
		'order'=>'DESC',
		'orderby'=>'event_start_date,event_name',
		'scope'=>'all',
		'format'=>$format
		));	?>
	</div> <!-- featured -->
</div> <!-- slideshow -->