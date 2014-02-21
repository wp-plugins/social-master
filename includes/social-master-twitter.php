<?php
get_post_custom();
//Display Twitter
if ( $show_display == 'on' ){
	echo '<div class="twitter-follow-button" style="width: 140px !important;">' .
		'<a href="https://twitter.com/'.$twitter_user.'" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false"></a>' .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'.$socialspacer.'http'.$socialspacer.':'.$socialspacer.'https'.$socialspacer.';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'.$socialspacer.'://platform.twitter.com/widgets.js'.$socialspacer.';fjs.parentNode.insertBefore(js,fjs);}}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'twitter-wjs'.$socialspacer.');</script>' .
		'</div>' .
		'<div class="twitter-share-button" style="width: 85px !important; margin-left: 5px;">' . 
		'<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$uricurrent.'" data-via="'.$twitter_user.'">Tweet</a>'  .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'.$socialspacer.'http'.$socialspacer.':'.$socialspacer.'https'.$socialspacer.';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'.$socialspacer.'://platform.twitter.com/widgets.js'.$socialspacer.';fjs.parentNode.insertBefore(js,fjs);}}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'twitter-wjs'.$socialspacer.');</script>' .
		'</div>';
}
else{
	echo '<center>' .
		'<div style="padding-top:4px;">' .
		'<a href="https://twitter.com/'.$twitter_user.'" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false"></a>' .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'.$socialspacer.'http'.$socialspacer.':'.$socialspacer.'https'.$socialspacer.';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'.$socialspacer.'://platform.twitter.com/widgets.js'.$socialspacer.';fjs.parentNode.insertBefore(js,fjs);}}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'twitter-wjs'.$socialspacer.');</script>' .
		'</div>'.
		'<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$uricurrent.'" data-via="'.$twitter_user.'" data-count="vertical">Tweet</a>'  .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></center>';
}
?>