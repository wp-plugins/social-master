<?php
//Display Facebook
get_post_custom();
if ( $show_display == 'on' ){
	if ( $facebook_display ){
		echo '<div id="fb-like" style="width:133px;">' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<style>.fb-like {overflow:visible !important; width:450px !important; margin-right:-375px !important;}</style>' .
		'<div class="fb-like" data-href="'.$facebook_page.'" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div></div>';
	}
	else {
		echo '<div id="fb-like" style="width:133px;">' .
			'<div id="fb-root"></div>' .
			'<script>(function(d, s, id) {' .
			'var js, fjs = d.getElementsByTagName(s)[0];' .
			'if (d.getElementById(id)) return;' .
			'js = d.createElement(s); js.id = id;' .
			'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
			'fjs.parentNode.insertBefore(js, fjs);' .
			'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
			'<style>.fb-like span{overflow:visible !important; width:450px !important; margin-right:-375px;}</style>' .
			'<div class="fb-like" data-href="'.$uricurrent.'" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div></div>';
	}
}
else{
	if ( $facebook_display ){
	echo '<div style="margin: 0 auto; display:table;">' .
		'<div id="fb-like" style="width:49px;">' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<style>.fb-like span{overflow:visible !important; width:450px !important; margin-right:-375px;}</style>' .
		'<div class="fb-like" data-href="'.$facebook_page.'" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div>' .
		'</div>' .
		'</div>';
	}
	else {
	echo '<div style="margin: 0 auto; display:table;">' .
		'<div id="fb-like" style="width:49px;">'.
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<style>.fb-like span{overflow:visible !important; width:450px !important; margin-right:-375px;}</style>' .
		'<div class="fb-like" data-href="'.$uricurrent.'" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div>' .
		'</div>' .
		'</div>';
	}
}
?>