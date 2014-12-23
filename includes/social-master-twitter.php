<?php
get_post_custom();
//Display Twitter
if ( $show_display == 'on' ){
	echo '<div class="twitter-follow-button" style="width: '.$social_master_twitter_follow_w.'px !important;">' .
		'<a href="https://twitter.com/'.$twitter_user.'" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false"></a>' .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'.$socialspacer.'http'.$socialspacer.':'.$socialspacer.'https'.$socialspacer.';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'.$socialspacer.'://platform.twitter.com/widgets.js'.$socialspacer.';fjs.parentNode.insertBefore(js,fjs);}}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'twitter-wjs'.$socialspacer.');</script>' .
		'</div>' .
		'<div class="twitter-share-button" style="width: '.$social_master_twitter_tweet_w.'px !important; margin-left: 5px;">' . 
		'<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$uricurrent.'" data-via="'.$twitter_user.'"></a>'  .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'.$socialspacer.'http'.$socialspacer.':'.$socialspacer.'https'.$socialspacer.';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'.$socialspacer.'://platform.twitter.com/widgets.js'.$socialspacer.';fjs.parentNode.insertBefore(js,fjs);}}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'twitter-wjs'.$socialspacer.');</script>' .
		'</div>';
}
else{
	echo '<div style="margin: 0 auto; display:table; padding-top:4px;">' .
		'<a href="https://twitter.com/'.$twitter_user.'" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false"></a>' .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'.$socialspacer.'http'.$socialspacer.':'.$socialspacer.'https'.$socialspacer.';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'.$socialspacer.'://platform.twitter.com/widgets.js'.$socialspacer.';fjs.parentNode.insertBefore(js,fjs);}}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'twitter-wjs'.$socialspacer.');</script>' .
		'</div>' .
		'<div style="margin: 0 auto; display:table;">' .
		'<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$uricurrent.'" data-via="'.$twitter_user.'" data-count="vertical"></a>'  .
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>' .
		'</div>';
}
?>