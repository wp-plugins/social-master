<?php
//Display Facebook
get_post_custom();
$socialspacer = "'";
$social_master_system_wide_facebook_display = get_option('social_master_system_wide_facebook_display');
$social_master_system_wide_facebook_page  = get_option('social_master_system_wide_facebook_page');
$social_master_system_wide_facebook_id = get_option('social_master_system_wide_facebook_id');
if ( $show_display == 'on' ){
	if ($social_master_system_wide_facebook_display == "true"){
		echo '<div id="fb-like" style="width:133px; overflow: visible !important">' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId='.$social_master_system_wide_facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<div class="fb-like" data-href="'.$social_master_system_wide_facebook_page.'" data-send="true" data-layout="button_count" data-width="90" data-show-faces="false" style="width:450px !important; overflow: visible !important z-index:9999 !important"></div>' .
		'</div>';
	}
	else {
		echo '<div id="fb-like" style="width:133px; overflow: visible !important">' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId='.$social_master_system_wide_facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<div class="fb-like" data-href="'.$uricurrent.'" data-send="true" data-layout="button_count" data-width="90" data-show-faces="false" style="width:450px !important; overflow: visible !important z-index:9999 !important"></div>' .
		'</div>';
	}
}
else{
	if ($social_master_system_wide_facebook_display == "true"){
	echo '<div style="margin: 0 0 0 43%; overflow: visible !important">' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$social_master_system_wide_facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<div class="fb-like" data-href="'.$social_master_system_wide_facebook_page.'" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" style="width:450px !important; overflow: visible !important z-index:9999 !important"></div>' .
		'</div>';
	}
	else {
	echo '<div style="margin: 0 0 0 43%; overflow: visible !important">' .
		'<div id="fb-root"></div>' .
		'<script>(function(d, s, id) {' .
		'var js, fjs = d.getElementsByTagName(s)[0];' .
		'if (d.getElementById(id)) return;' .
		'js = d.createElement(s); js.id = id;' .
		'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$social_master_system_wide_facebook_id.'";' .
		'fjs.parentNode.insertBefore(js, fjs);' .
		'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script>' .
		'<div class="fb-like" data-href="'.$uricurrent.'" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" style="width:450px !important; overflow: visible !important z-index:9999 !important"></div>' .
		'</div>';
	}
}
?>