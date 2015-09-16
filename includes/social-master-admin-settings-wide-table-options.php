<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class social_master_admin_settings_wide_table_options extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
if ( $_POST) {
//Facebook
if ( isset($_POST['social_master_system_wide_facebook_display']) )
update_option('social_master_system_wide_facebook_display', $_POST['social_master_system_wide_facebook_display'] );
else
update_option('social_master_system_wide_facebook_display', 'false' );
if ( isset($_POST['social_master_system_wide_facebook_page']) )
update_option('social_master_system_wide_facebook_page', $_POST['social_master_system_wide_facebook_page'] );
else
update_option('social_master_system_wide_facebook_page', '' );
if ( isset($_POST['social_master_system_wide_facebook_id']) )
update_option('social_master_system_wide_facebook_id', $_POST['social_master_system_wide_facebook_id'] );
else
update_option('social_master_system_wide_facebook_id', '' );
if ( isset($_POST['social_master_system_wide_facebook_og_name_on']) )
update_option('social_master_system_wide_facebook_og_name_on', $_POST['social_master_system_wide_facebook_og_name_on'] );
else
update_option('social_master_system_wide_facebook_og_name_on', 'false' );
if ( isset($_POST['social_master_system_wide_facebook_og_type_on']) )
update_option('social_master_system_wide_facebook_og_type_on', $_POST['social_master_system_wide_facebook_og_type_on'] );
else
update_option('social_master_system_wide_facebook_og_type_on', 'false' );
if ( isset($_POST['social_master_system_wide_facebook_og_title_on']) )
update_option('social_master_system_wide_facebook_og_title_on', $_POST['social_master_system_wide_facebook_og_title_on'] );
else
update_option('social_master_system_wide_facebook_og_title_on', 'false' );
if ( isset($_POST['social_master_system_wide_facebook_og_url_on']) )
update_option('social_master_system_wide_facebook_og_url_on', $_POST['social_master_system_wide_facebook_og_url_on'] );
else
update_option('social_master_system_wide_facebook_og_url_on', 'false' );
if ( isset($_POST['social_master_system_wide_facebook_og_description_on']) )
update_option('social_master_system_wide_facebook_og_description_on', $_POST['social_master_system_wide_facebook_og_description_on'] );
else
update_option('social_master_system_wide_facebook_og_description_on', 'false' );
if ( isset($_POST['social_master_system_wide_facebook_og_image_on']) )
update_option('social_master_system_wide_facebook_og_image_on', $_POST['social_master_system_wide_facebook_og_image_on'] );
else
update_option('social_master_system_wide_facebook_og_image_on', 'false' );
if ( isset($_POST['social_master_system_wide_facebook_og_image']) )
update_option('social_master_system_wide_facebook_og_image', $_POST['social_master_system_wide_facebook_og_image'] );
else
update_option('social_master_system_wide_facebook_og_image', '' );
//Twitter
if ( isset($_POST['social_master_system_wide_twitter_user']) )
update_option('social_master_system_wide_twitter_user', $_POST['social_master_system_wide_twitter_user'] );
else
update_option('social_master_system_wide_twitter_user', '' );
if ( isset($_POST['social_master_system_wide_twitter_follow_w']) )
update_option('social_master_system_wide_twitter_follow_w', $_POST['social_master_system_wide_twitter_follow_w'] );
else
update_option('social_master_system_wide_twitter_follow_w', 'false' );
if ( isset($_POST['social_master_system_wide_twitter_tweet_w']) )
update_option('social_master_system_wide_twitter_tweet_w', $_POST['social_master_system_wide_twitter_tweet_w'] );
else
update_option('social_master_system_wide_twitter_tweet_w', 'false' );
//Linkedin
if ( isset($_POST['social_master_system_wide_linkedin_page']) )
update_option('social_master_system_wide_linkedin_page', $_POST['social_master_system_wide_linkedin_page'] );
else
update_option('social_master_system_wide_linkedin_page', '' );
//Youtube
if ( isset($_POST['social_master_system_wide_youtube_id']) )
update_option('social_master_system_wide_youtube_id', $_POST['social_master_system_wide_youtube_id'] );
else
update_option('social_master_system_wide_youtube_id', '' );
//Instagram
if ( isset($_POST['social_master_system_wide_instagram_user']) )
update_option('social_master_system_wide_instagram_user', $_POST['social_master_system_wide_instagram_user'] );
else
update_option('social_master_system_wide_instagram_user', '' );
//Soundcloud
if ( isset($_POST['social_master_system_wide_soundcloud_page']) )
update_option('social_master_system_wide_soundcloud_page', $_POST['social_master_system_wide_soundcloud_page'] );
else
update_option('social_master_system_wide_soundcloud_page', '' );
//Reverbnation
if ( isset($_POST['social_master_system_wide_reverbnation_page']) )
update_option('social_master_system_wide_reverbnation_page', $_POST['social_master_system_wide_reverbnation_page'] );
else
update_option('social_master_system_wide_reverbnation_page', '' );
//Spotify
if ( isset($_POST['social_master_system_wide_spotify_page']) )
update_option('social_master_system_wide_spotify_page', $_POST['social_master_system_wide_spotify_page'] );
else
update_option('social_master_system_wide_spotify_page', '' );
?>
<div id="message" class="updated fade">
<p><strong><?php _e('Settings Saved!', 'social_master'); ?></strong></p>
</div>
<?php
}
?>
<form method="post" width='1'>
<fieldset class="options">

<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="cb" class="manage-column column-cb check-column" scope="col" style="vertical-align:middle"><input type="checkbox"></th>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="250"><legend><h3><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;System Wide Settings', 'social_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-cb check-column" scope="col"></th>
			<th class="manage-column column-columnname" scope="col" width="250"></th>
			<th class="manage-column column-columnname" scope="col"></th>
		</tr>
	</tfoot>

	<tbody>
			<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Facebook Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row">
<input name="social_master_system_wide_facebook_display" id="social_master_system_wide_facebook_display" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_facebook_display') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_display"><b><?php _e('Activate to Show Fanpage Total Count', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<div class="description">
If <b>On</b>, (you need a Facebook Fan Page). Displays your facebook page total likes count and new likes are added to your facebook fan page.
<br>If <b>Off</b>, shows individual wordpress pages and posts likes. New likes are just for that specific page or post.</div>
<br>What to select?
<br>If you want to boost your Facebook Fan Page likes and get lots of people liking it and following it, select On.
<br>If you have a nice blog with lots of pages and posts, then you will probably want people liking and sharing individual pages and posts, select Off.
<br>If you do not have a Facebook Fan Page, select Off.
</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_page"><?php _e('Facebook Fan Page Link:', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_facebook_page" name="social_master_system_wide_facebook_page" type="text" size="22" value="<?php echo get_option('social_master_system_wide_facebook_page'); ?>">
<div class="description">Mandatory if above Show Fanpage Total Count is On. Example: https://www.facebook.com/TechGasp
<br>Leave empty or blank if Fanpage Total Count is Off.
</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_id"><?php _e('Facebook Application ID Number:', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_facebook_id" name="social_master_system_wide_facebook_id" type="text" size="22" value="<?php echo get_option('social_master_system_wide_facebook_id'); ?>">
<div class="description">Optional, if you have a Facebook Application. <a href="https://developers.facebook.com/apps" target="_blank">Get App ID Number</a>.
<br>Leave empty or blank if you do not have a Facebook Application.
</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<b>Facebook "og" settings</b>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<div class="description">Adds "og" properties to facebook like and share buttons.
<br>These settings should be passed by themes inside the header tags but they are missing in the majority of themes.
<br>For awesome facebook likes and shares, Social Master will automatically retrieve data from pages and posts to automatically generate facebook og settings.
<br>When you activate these settings, it might take Facebook 48 hours to clear it's cache and apply these new settings.
<br>If you don't know if your theme contains "og" settings, activate them. <b>Default is On</b> for all of them.
</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row">
<input name="social_master_system_wide_facebook_og_name_on" id="social_master_system_wide_facebook_og_name_on" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_facebook_og_name_on') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_og_name_on"><?php _e('Activate "og" Name', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
			<div class="description">
			Passes website / blog name to Facebook.
			</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row">
<input name="social_master_system_wide_facebook_og_type_on" id="social_master_system_wide_facebook_og_type_on" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_facebook_og_type_on') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_og_type_on"><?php _e('Activate "og" Type', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
			<div class="description">
			Passes website / blog type to Facebook.
			</div>
			</td>
		</tr>
			<tr class="alternate">
			<th class="check-column" scope="row">
<input name="social_master_system_wide_facebook_og_title_on" id="social_master_system_wide_facebook_og_title_on" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_facebook_og_title_on') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_og_title_on"><?php _e('Activate "og" Title', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
			<div class="description">
			Passes current page / post title to Facebook.
			</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row">
<input name="social_master_system_wide_facebook_og_url_on" id="social_master_system_wide_facebook_og_url_on" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_facebook_og_url_on') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_og_url_on"><?php _e('Activate "og" Url', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
			<div class="description">
			Passes current page / post  url to Facebook.
			</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row">
<input name="social_master_system_wide_facebook_og_description_on" id="social_master_system_wide_facebook_og_description_on" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_facebook_og_description_on') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_og_description_on"><?php _e('Activate "og" Description', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
			<div class="description">
			Passes current page / post description to Facebook.
			</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row">
<input name="social_master_system_wide_facebook_og_image_on" id="social_master_system_wide_facebook_og_image_on" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_facebook_og_image_on') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_og_image_on"><?php _e('Activate "og" Image', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
			<div class="description">
			Passes current page / post featured image to Facebook.
			</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_facebook_og_image"><?php _e('override "og" image:', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_facebook_og_image" name="social_master_system_wide_facebook_og_image" type="text" size="22" value="<?php echo get_option('social_master_system_wide_facebook_og_image'); ?>">
<div class="description">Optional, if you haven't set featured image in your pages and posts insert a link to your wordpress logo or any image.
<br>When sharing or liking it will always display the same image. That kinda sucks!
<br>You should set a different featured image in each page and post, and leave this field empty or blank.
</div>
			</td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Twitter Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_twitter_user"><b><?php _e('Twitter Username:', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_twitter_user" name="social_master_system_wide_twitter_user" type="text" size="22" value="<?php echo get_option('social_master_system_wide_twitter_user'); ?>">
<div class="description">Insert your Twitter username to display the Follow Button.
<br>If you do not wish to display the Twitter follow Button... you might not have a twitter account, leave this field empty or blank and the follow button will not be generated.
</div>
			</td>
		</tr>
		<tr>
			<th class="check-column" scope="row">
<input name="social_master_system_wide_twitter_follow_w" id="social_master_system_wide_twitter_follow_w" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_twitter_follow_w') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_twitter_follow_w"><?php _e('Activate Bigger Follow Bubble', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<div class="description">
Optional for Horizontal buttons Display.
<br>Activate if you have thousands of followers and the Follow Button Bubble is being cut.
</div>
			</td>
		</tr>
		<tr>
			<th class="check-column" scope="row">
<input name="social_master_system_wide_twitter_tweet_w" id="social_master_system_wide_twitter_tweet_w" value="true" type="checkbox" <?php echo get_option('social_master_system_wide_twitter_tweet_w') == 'true' ? 'checked="checked"':''; ?> />
			</th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_twitter_tweet_w"><?php _e('Activate Bigger Tweet Bubble', 'social_master'); ?></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<div class="description">
Optional for Horizontal buttons Display.
<br>Activate if you have thousands of tweets and the Tweet Button Bubble is being cut.
</div>
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Linkedin Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_linkedin_page"><b><?php _e('LinkedIn Profile Page:', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_linkedin_page" name="social_master_system_wide_linkedin_page" type="text" size="22" value="<?php echo get_option('social_master_system_wide_linkedin_page'); ?>">
			</td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Youtube Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_youtube_id"><b><?php _e('Youtube User or Channel ID:', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_youtube_id" name="social_master_system_wide_youtube_id" type="text" size="22" value="<?php echo get_option('social_master_system_wide_youtube_id'); ?>">
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Instagram Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_instagram_user"><b><?php _e('Instagram Username:', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_instagram_user" name="social_master_system_wide_instagram_user" type="text" size="22" value="<?php echo get_option('social_master_system_wide_instagram_user'); ?>">
			</td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Soundcloud Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_soundcloud_page"><b><?php _e('Soundcloud User Profile Link:', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_soundcloud_page" name="social_master_system_wide_soundcloud_page" type="text" size="22" value="<?php echo get_option('social_master_system_wide_soundcloud_page'); ?>">
			</td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Reverbnation Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr class="alternate">
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_reverbnation_page"><b><?php _e('Reverbnation User Profile Link:', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_reverbnation_page" name="social_master_system_wide_reverbnation_page" type="text" size="22" value="<?php echo get_option('social_master_system_wide_reverbnation_page'); ?>">
			</td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<h2>Spotify Options</h2>
			</td>
			<td class="column-columnname"></td>
		</tr>
		<tr>
			<th class="check-column" scope="row"></th>
			<td class="column-columnname" width="250">
<label for="social_master_system_wide_spotify_page"><b><?php _e('Spotify User / Artist Profile URI:', 'social_master'); ?></b></label>
			</td>
			<td class="column-columnname" style="vertical-align:middle">
<input id="social_master_system_wide_spotify_page" name="social_master_system_wide_spotify_page" type="text" size="22" value="<?php echo get_option('social_master_system_wide_spotify_page'); ?>">
<div class="description">
Spotify Artist URI. Example:
<br>spotify:artist:1vCWHaC5f2uS3yhpwWbIA6
</div>
			</td>
		</tr>
	</tbody>
</table>
<p class="submit"><input class='button-primary' type='submit' name='update' value='<?php _e("Save Settings", 'social_master'); ?>' id='submitbutton' /></p>
</fieldset>
</form>
<?php
	}
//CLASS ENDS
}