<?php
//Display Facebook
get_post_custom();
	if ( $facebook_display ){
		echo '<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<div class="fb-like" data-href="'.$facebook_page.'" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div><br>';
	}
	else {
		echo '<div id="fb-root"></div>' .
			'<script>(function(d, s, id) {' .
			'var js, fjs = d.getElementsByTagName(s)[0];' .
			'if (d.getElementById(id)) return;' .
			'js = d.createElement(s); js.id = id;' .
			'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
			'fjs.parentNode.insertBefore(js, fjs);' .
			'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
			'<div class="fb-like" data-href="'.$uricurrent.'" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div><br>';
	}
?>