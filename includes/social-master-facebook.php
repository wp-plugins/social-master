<?php
//Display Facebook
get_post_custom();
if ( $show_display == 'on' ){
	if ( $facebook_display ){
		echo '<div style="height: 20px; width: 52px; overflow: hidden;">' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<div class="fb-like" data-href="'.$facebook_page.'" data-send="false" data-layout="button" data-width="50" data-show-faces="false"></div>' .
		'</div>';
	}
	else {
		echo '<div style="height: 20px; width: 52px; overflow: hidden;">' .
			'<div id="fb-root"></div>' .
			'<script>(function(d, s, id) {' .
			'var js, fjs = d.getElementsByTagName(s)[0];' .
			'if (d.getElementById(id)) return;' .
			'js = d.createElement(s); js.id = id;' .
			'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
			'fjs.parentNode.insertBefore(js, fjs);' .
			'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
			'<div class="fb-like" data-href="'.$uricurrent.'" data-send="false" data-layout="button" data-width="50" data-show-faces="false"></div>' .
			'</div>';
	}
}
else{
	if ( $facebook_display ){
		echo '<center>' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<div class="fb-like" data-href="'.$facebook_page.'" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div></center>';
	}
	else {
		echo '<center>' .
			'<div id="fb-root"></div>' .
			'<script>(function(d, s, id) {' .
			'var js, fjs = d.getElementsByTagName(s)[0];' .
			'if (d.getElementById(id)) return;' .
			'js = d.createElement(s); js.id = id;' .
			'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
			'fjs.parentNode.insertBefore(js, fjs);' .
			'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
			'<div class="fb-like" data-href="'.$uricurrent.'" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div></center>';
	}
}
?>