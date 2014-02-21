<?php
//Hook Widget
add_action( 'widgets_init', 'social_master_widget_basic' );
//Register Widget
function social_master_widget_basic() {
register_widget( 'social_master_widget_basic' );
}

class social_master_widget_basic extends WP_Widget {
	function social_master_widget_basic() {
	$widget_ops = array( 'classname' => 'Social Master Basic', 'description' => __('This Widget was specially designed in html5 to be easy to use and deploy, all settings are on auto mode. Extremely fast page load times and small system trace. ', 'social_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'social_master_widget_basic' );
	$this->WP_Widget( 'social_master_widget_basic', __('Social Master Basic', 'social_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$social_title = isset( $instance['social_title'] ) ? $instance['social_title'] :false;
		$social_title_new = isset( $instance['social_title_new'] ) ? $instance['social_title_new'] :false;
		@$uribase = site_url( $path, $scheme );
		@$uricurrent ="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$socialspacer ="'";
		$show_display = isset( $instance['show_display'] ) ? $instance['show_display'] :false;
		$show_facebook = isset( $instance['show_facebook'] ) ? $instance['show_facebook'] :false;
		$facebook_display = isset( $instance['facebook_display'] ) ? $instance['facebook_display'] :false;
		$facebook_page = $instance['facebook_page'];
		$facebook_id = $instance['facebook_id'];
		$show_twitter = isset( $instance['show_twitter'] ) ? $instance['show_twitter'] :false;
		$twitter_user = $instance['twitter_user'];
		$show_google = isset( $instance['show_google'] ) ? $instance['show_google'] :false;
		echo $before_widget;
		
		// Display the widget title
	if ( $social_title ){
		if (empty ($social_title_new)){
		$social_title_new = get_option('social_master_name');
		}
		echo $before_title . $social_title_new . $after_title;
	}
	else{
	}
//CSS FOR BUTTONS
	//display vertical
	if ( $show_display == 'on' ) {
	echo '<div class="social-master-buttons" style="display:flex !important;">';
	//Display Facebook
	if ( $show_facebook ){
		require( dirname( __FILE__ ) . '/social-master-facebook.php');
	}
	else{
	}
	//Display Twitter
	if ( $show_twitter ){
		require( dirname( __FILE__ ) . '/social-master-twitter.php');
	}
	else{
	}
	//Display Google Plus
	if ( $show_google ){
		require( dirname( __FILE__ ) . '/social-master-google.php');
	}
	else{
	}
}
//display horizontal
else{
	//Display Facebook
	if ( $show_facebook ){
		require( dirname( __FILE__ ) . '/social-master-facebook.php');
	}
	else{
	}
	//Display Twitter
	if ( $show_twitter ){
		require( dirname( __FILE__ ) . '/social-master-twitter.php');
	}
	else{
	}
	//Display Google Plus
	if ( $show_google ){
		require( dirname( __FILE__ ) . '/social-master-google.php');
	}
	else{
	}
}
		echo $after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['social_title'] = strip_tags( $new_instance['social_title'] );
		$instance['social_title_new'] = $new_instance['social_title_new'];
		$instance['show_display'] = $new_instance['show_display'];
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
	$defaults = array( 'social_title_new' => __('Social Master', 'social_master'), 'social_title' => true, 'social_title_new' => false, 'show_display' => false, 'show_facebook' => false, 'facebook_display' => false, 'facebook_page' => false, 'facebook_id' => false, 'show_twitter' => false, 'twitter_user' => false, 'show_google' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
	<br>
	<b>Check the buttons to be displayed:</b>
		<!--TITLE-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['social_title'], true ); ?> id="<?php echo $this->get_field_id( 'social_title' ); ?>" name="<?php echo $this->get_field_name( 'social_title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'social_title' ); ?>"><b><?php _e('Display Widget Title', 'social_master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'social_title_new' ); ?>"><?php _e('Change Title:', 'social_master'); ?></label>
	<br>
	<input id="<?php echo $this->get_field_id( 'social_title_new' ); ?>" name="<?php echo $this->get_field_name( 'social_title_new' ); ?>" value="<?php echo $instance['social_title_new']; ?>" style="width:auto;" />
	</p>
		<!--DISPLAY-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_display'], true ); ?> id="<?php echo $this->get_field_id( 'show_display' ); ?>" name="<?php echo $this->get_field_name( 'show_display' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_display' ); ?>"><b><?php _e('Activates Horizontal Display', 'social_master'); ?></b></label></br>
	</p>
	<div class="description">Unchecked display is Vertical.</div>
	<br>
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
		<!--NETWORKS-->
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Social Master Website</b>
	</p>
	<p><a class="button-secondary" href="http://wordpress.techgasp.com/social-master/" target="_blank" title="Social Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/social-master-documentation/" target="_blank" title="Social Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.techgasp.com/social-master/" target="_blank" title="Visit Website">Get Add-ons</a></p>
	<?php
	}
 }
?>