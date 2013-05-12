<?php
//Hook Widget
add_action( 'widgets_init', 'techgasp_socialmaster_widget' );
//Register Widget
function techgasp_socialmaster_widget() {
register_widget( 'techgasp_socialmaster_widget' );
}
class techgasp_socialmaster_widget extends WP_Widget
{
	function techgasp_socialmaster_widget() {
	$widget_ops = array( 'classname' => 'Social Master', 'description' => __('Social Master is a light weight and shiny clean code wordpress plugin that you need to boost your wordpress social engagement, attracting new users, visits or sales. ', 'Social Master') );	
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'techgasp-socialmaster-widget' );
	$this->WP_Widget( 'techgasp-socialmaster-widget', __('Social Master', 'social master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$title = "Social Master";
		$uribase = site_url( $path, $scheme );
		$uricurrent = get_page_uri( $page_id );
		$socialspacer ="'";
		$show_facebook = isset( $instance['show_facebook'] ) ? $instance['show_facebook'] :false;
		$facebook_id = $instance['facebook_id'];
		$show_twitter = isset( $instance['show_twitter'] ) ? $instance['show_twitter'] :false;
		$twitter_user = $instance['twitter_user'];
		$show_google = isset( $instance['show_google'] ) ? $instance['show_google'] :false;
		echo $before_widget;
		// Display the widget title
		if ( $title )
			echo $before_title . $title . $after_title;
		//Display Facebook
            if ( $show_facebook )
            echo '<center><div class="fb-like" data-href="'.$uribase.'/'.$uricurrent.'" data-send="false" data-layout="box_count" data-width="90" data-show-faces="false" style="overflow: hidden !important;"></div>' .
			'<div id="fb-root"></div>' .
			'<script>(function(d, s, id) {' .
			'var js, fjs = d.getElementsByTagName(s)[0];' .
			'if (d.getElementById(id)) return;' .
			'js = d.createElement(s); js.id = id;' .
			'js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$facebook_id.'";' .
			'fjs.parentNode.insertBefore(js, fjs);' .
			'}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'facebook-jssdk'.$socialspacer.'));</script></center>';
		//Display Twitter
			if ( $show_twitter )
			echo '<center><iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://mikeseese.com/tw_vert_follow.php?username='.$twitter_user.'" style="height: 62px; width: 60px;"></iframe></br>'.
			'<a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$uribase.'.'.$uricurrent.'" data-via="'.$twitter_user.'" data-count="none">Tweet</a>' .
			'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'.$socialspacer.'http'.$socialspacer.':'.$socialspacer.'https'.$socialspacer.';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'.$socialspacer.'://platform.twitter.com/widgets.js'.$socialspacer.';fjs.parentNode.insertBefore(js,fjs);}}(document, '.$socialspacer.'script'.$socialspacer.', '.$socialspacer.'twitter-wjs'.$socialspacer.');</script>';
		//Display Google Plus
			if ( $show_google )
			echo '<center><div class="g-plusone" data-size="tall"></div>' .
			'<script type="text/javascript">' .
			'(function() {' .
			'var po = document.createElement('.$socialspacer.'script'.$socialspacer.'); po.type = '.$socialspacer.'text/javascript'.$socialspacer.'; po.async = true;' .
			'po.src = '.$socialspacer.'https://apis.google.com/js/plusone.js'.$socialspacer.';' .
			'var s = document.getElementsByTagName('.$socialspacer.'script'.$socialspacer.')[0]; s.parentNode.insertBefore(po, s);' .
			'})();' .
			'</script></center>';
		
		echo $after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show_facebook'] = $new_instance['show_facebook'];
		$instance['facebook_id'] = strip_tags( $new_instance['facebook_id'] );
		$instance['show_twitter'] = $new_instance['show_twitter'];
		$instance['twitter_user'] = $new_instance['twitter_user'];
		$instance['show_google'] = $new_instance['show_google'];
		return $instance;
	}
	function form( $instance ) {
		//Set up some default widget settings.
		$defaults = array( 'title' => __('Social Master', 'social master'), 'show_facebook' => false, 'show_twitter' => false, 'show_google' => false );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<b>Check the buttons to be displayed:</b>
		<p>
                        <input type="checkbox" <?php checked( (bool) $instance['show_facebook'], true ); ?> id="<?php echo $this->get_field_id( 'show_facebook' ); ?>" name="<?php echo $this->get_field_name( 'show_facebook' ); ?>" />
                        <label for="<?php echo $this->get_field_id( 'show_facebook' ); ?>"><b><?php _e('Facebook Button', 'social master'); ?></b></label></br>
                </p>
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook_id' ); ?>"><?php _e('Facebook Application ID (optional, leave blank):', 'social master'); ?></label></br>
			<input id="<?php echo $this->get_field_id( 'facebook_id' ); ?>" name="<?php echo $this->get_field_name( 'facebook_id' ); ?>" value="<?php echo $instance['facebook_id']; ?>" style="width:auto;" />
		</p>
		<hr>
		<p>
			<input type="checkbox" <?php checked( (bool) $instance['show_twitter'], true ); ?> id="<?php echo $this->get_field_id( 'show_twitter' ); ?>" name="<?php echo $this->get_field_name( 'show_twitter' ); ?>" />
                        <label for="<?php echo $this->get_field_id( 'show_twitter' ); ?>"><b><?php _e('Twitter Button', 'social master'); ?></b></label></br>
		</p>
		<p>
                        <label for="<?php echo $this->get_field_id( 'twitter_user' ); ?>"><?php _e('Twitter Username:', 'social master'); ?></label></br>
                        <input id="<?php echo $this->get_field_id( 'twitter_user' ); ?>" name="<?php echo $this->get_field_name( 'twitter_user' ); ?>" value="<?php echo $instance['twitter_user']; ?>" style="width:auto;" />
                </p>
		<hr>
		<p>
                        <input type="checkbox" <?php checked( (bool) $instance['show_google'], true ); ?> id="<?php echo $this->get_field_id( 'show_google' ); ?>" name="<?php echo $this->get_field_name( 'show_google' ); ?>" />
                        <label for="<?php echo $this->get_field_id( 'show_google' ); ?>"><b><?php _e('Google Button', 'social master'); ?></b></label>
                </p>
		<hr>
		<p><b>Add all Social Networks to this widget.</b> Faceook Like and Send, Twitter Follow and Re-Tweet, Google + plus, LinkedIn Share, Pinterest "pin it" Share, View on Instagram, Youtube Subscribe, Soundcloud Connect,  StumbleUpon Share, MySpace Share, Digg Share, Reddit Share.</p>
		<p><a class="button-primary" href="http://2w.techgasp.com/download/social-sharing/social-master-for-wordpress/" target="_blank" title="More Social Networks">Add More Social Networks</a></p>
	<?php
	}
}
?>
