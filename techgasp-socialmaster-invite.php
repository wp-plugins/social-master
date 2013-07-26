<?php
// HOOKS
function techgasp_socialmaster_notice() {
	global $current_user;
	global $pagenow;
	$user_id = $current_user->ID;

/* Check that the user hasn't already clicked to ignore the message */
	if ( ! get_user_meta($user_id, 'techgasp_socialmaster_notice') ) {
		parse_str($_SERVER['QUERY_STRING'], $params);
		if ( $pagenow == 'plugins.php' ) {
	        echo '<div class="updated">';
        	printf (__('<p><b>Congratulations!</b> Lite Plugin Installation Complete.</p>'));
		printf (__('<p>You have a top of the line <em>TechGasp Plugin</em>. Don\'t be shy if you need help, just issue a support ticket <a class="button" href="http://wordpress.techgasp.com/support/" target="_blank" title="Support">Technical Support</a> | <a class="button" href="http://wordpress.techgasp.com/category/support/" target="_blank" title="Documentation">Documentation</a></p>'));
		printf (__('<p><b>It\'s really important for us if you could take a minute to give us a good rating and comment in Wordpress Plugin Directory</b> <a class="button-primary" href="http://wordpress.org/plugins/social-master/" target="_blank" title="Please Rate Us"><b>RATE US</b></a></p>'));
		printf (__('<p><a href="%s">Hide Notice</a>', 'n2cpanel'), '?' . http_build_query(array_merge($params, array('techgasp_socialmaster_ignore'=>'0'))));
	        echo "</div>";
		}
	}
}
add_action( 'admin_notices', 'techgasp_socialmaster_notice' );

function techgasp_socialmaster_ignore() {
    global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['techgasp_socialmaster_ignore']) && '0' == $_GET['techgasp_socialmaster_ignore'] ) {
             add_user_meta($user_id, 'techgasp_socialmaster_notice', 'true', true);
    }
}
add_action('admin_init', 'techgasp_socialmaster_ignore');
?>