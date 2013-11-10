<?php
//Hook Widget
add_action( 'widgets_init', 'social_master_widget' );
//Register Widget
function social_master_widget() {
register_widget( 'social_master_widget' );
}

class social_master_widget extends WP_Widget {
	function social_master_widget() {
	$widget_ops = array( 'classname' => 'Social Master', 'description' => __('Social Master is a light weight and shiny clean code wordpress plugin that you need to boost your wordpress social engagement, attracting new users, visits or sales. ', 'social_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'social_master_widget' );
	$this->WP_Widget( 'social_master_widget', __('Social Master', 'social_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$name = "Social Master";
		$title = isset( $instance['title'] ) ? $instance['title'] :false;
		@$uribase = site_url( $path, $scheme );
		@$uricurrent ="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$socialspacer ="'";
		$show_facebook = isset( $instance['show_facebook'] ) ? $instance['show_facebook'] :false;
		$facebook_display = isset( $instance['facebook_display'] ) ? $instance['facebook_display'] :false;
		$facebook_page = $instance['facebook_page'];
		$facebook_id = $instance['facebook_id'];
		$show_twitter = isset( $instance['show_twitter'] ) ? $instance['show_twitter'] :false;
		$twitter_user = $instance['twitter_user'];
		$show_google = isset( $instance['show_google'] ) ? $instance['show_google'] :false;
		echo $before_widget;
		
		// Display the widget title
	if ( $title )
		echo $before_title . $name . $after_title;
	//Display Facebook
	if ( $show_facebook ){
		echo '<center>';
		require( dirname( __FILE__ ) . '/social-master-facebook.php');
		echo '</center>';
	}
	else{
	}
	//Display Twitter
	if ( $show_twitter ){
		echo '<center>';
		require( dirname( __FILE__ ) . '/social-master-twitter.php');
		echo '</center>';
	}
	else{
	}
	//Display Google Plus
	if ( $show_google ){
		echo '<center>';
		require(dirname( __FILE__ ) . '/social-master-google.php');
		echo '</center>';
	}
	else{
	}
		echo $after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show_facebook'] = $new_instance['show_facebook'];
		$instance['facebook_display'] = $new_instance['facebook_display'];
		$instance['facebook_page'] = strip_tags( $new_instance['facebook_page'] );
		$instance['facebook_id'] = strip_tags( $new_instance['facebook_id'] );
		$instance['show_twitter'] = $new_instance['show_twitter'];
		$instance['twitter_user'] = $new_instance['twitter_user'];
		$instance['show_google'] = $new_instance['show_google'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'name' => __('Social Master', 'social_master'), 'title' => true, 'show_facebook' => false, 'facebook_display' => false, 'facebook_page' => false, 'facebook_id' => false, 'show_twitter' => false, 'twitter_user' => false, 'show_google' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
	<b>Check the buttons to be displayed:</b>
		<!--TITLE-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['title'], true ); ?> id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><b><?php _e('Display Widget Title', 'social_master'); ?></b></label></br>
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--FACEBOOK-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_facebook'], true ); ?> id="<?php echo $this->get_field_id( 'show_facebook' ); ?>" name="<?php echo $this->get_field_name( 'show_facebook' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_facebook' ); ?>"><b><?php _e('Facebook Button', 'social_master'); ?></b></label></br>
	</p>
	<input type="checkbox" <?php checked( (bool) $instance['facebook_display'], true ); ?> id="<?php echo $this->get_field_id( 'facebook_display' ); ?>" name="<?php echo $this->get_field_name( 'facebook_display' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'facebook_display' ); ?>"><?php _e('Activate to Show Fanpage Total Count', 'social_master'); ?></label></br>
	<p>
	<label for="<?php echo $this->get_field_id( 'facebook_page' ); ?>"><?php _e('insert Facebook Page link (if above Total Count is selected):', 'social_master'); ?></label></br>
	<input id="<?php echo $this->get_field_id( 'facebook_page' ); ?>" name="<?php echo $this->get_field_name( 'facebook_page' ); ?>" value="<?php echo $instance['facebook_page']; ?>" style="width:auto;" />
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'facebook_id' ); ?>"><?php _e('Facebook Application ID (optional, leave blank):', 'social_master'); ?></label></br>
	<input id="<?php echo $this->get_field_id( 'facebook_id' ); ?>" name="<?php echo $this->get_field_name( 'facebook_id' ); ?>" value="<?php echo $instance['facebook_id']; ?>" style="width:auto;" />
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--TWITTER-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_twitter'], true ); ?> id="<?php echo $this->get_field_id( 'show_twitter' ); ?>" name="<?php echo $this->get_field_name( 'show_twitter' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_twitter' ); ?>"><b><?php _e('Twitter Button', 'social_master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'twitter_user' ); ?>"><?php _e('Twitter Username:', 'social_master'); ?></label></br>
	<input id="<?php echo $this->get_field_id( 'twitter_user' ); ?>" name="<?php echo $this->get_field_name( 'twitter_user' ); ?>" value="<?php echo $instance['twitter_user']; ?>" style="width:auto;" />
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--GOOGLE-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_google'], true ); ?> id="<?php echo $this->get_field_id( 'show_google' ); ?>" name="<?php echo $this->get_field_name( 'show_google' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_google' ); ?>"><b><?php _e('Google Button', 'social_master'); ?></b></label>
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--LINKEDIN-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>LinkedIn Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--TUMBLR-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Tumblr Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--YOUTUBE-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Youtube Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--INSTAGRAM-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Instagram Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--PINTEREST-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Pinterest Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--SOUNDCLOUD-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Soundcloud Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--REVERBNATION-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Reverbnation Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--SPOTIFY-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Spotify Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--STUMBLEUPON-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>StumbleUpon Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--BUFFER-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Buffer Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--REDDIT-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Reddit Button</b>
	</p>
	<div class="description">Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<!--NETWORKS-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Social Master Website</b>
	</p>
	<p><a class="button-secondary" href="http://wordpress.techgasp.com/social-master/" target="_blank" title="Social Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/social-master-documentation/" target="_blank" title="Social Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.techgasp.com/social-master/" target="_blank" title="Social Master Wordpress">Advanced Version</a></p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<p>
		<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
		&nbsp;
		<b>Advanced Version Updater:</b>
		</p>
		<div class="description">The advanced version updater allows to automatically update your advanced plugin. Only available in advanced version.</div>
	<?php
	}
 }
?>