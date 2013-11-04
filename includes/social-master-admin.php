<div class="wrap">
<div class="icon32" style="width:40px; vertical-align:middle;"><img src="<?php echo plugins_url('../images/techgasp-minilogo.png', __FILE__); ?>" alt="' . esc_attr__( 'TechGasp Plugins') . '" /><br /></div>
<h2><b>TechGasp</b></h2>
<table>
<tr>
<td width="387">
<img src="<?php echo plugins_url('../images/techgasp-socialmaster-logo.png', __FILE__); ?>" alt="Social Master" align="left" width="387px" height="171px" style="padding:5px;"/>
</td>
<td width="0,5"></td>
<td width="670">
<p>Major player in the Content Management System world! Wordpress, Joomla and Jomsocial Partner with more than 100 high quality, error free Extensions. We provide website customizations and development, SEO Optimization, Facebook Apps, etc. We have fast & furious specialized Hosting for WordPress and Joomla. Our promise, the use of minimal error free code with fast loading times. Check our website for more high quality extensions. Stay up to date by "like" and "follow" our facebook and twitter page for fresh news, releases and upgrades and updates.</p>
<p>
<a class="button-primary" href="http://wordpress.techgasp.com" target="_blank" title="Visit Website">Wordpress Website</a>
<a class="button-primary" href="http://www.techgasp.com" target="_blank" title="Visit Website">Joomla Website</a>
<a class="button-primary" href="http://hosting.techgasp.com" target="_blank" title="Visit Website">Hosting Website</a>
<a class="button-secondary" href="https://www.facebook.com/TechGasp" target="_blank" title="Facebook Page">Facebook Page</a>
<a class="button-secondary" href="https://twitter.com/TechGasp" target="_blank" title="Follow Twitter">Twitter Page</a>
<a class="button-secondary" href="https://plus.google.com/118126459543511361864" target="_blank" title="Follow Google">Google Page</a>
</p>
<h3>Stay up-to-date with new extension releases, extension updates, & upgrades:</h3>
<p>
<span style="float:left; vertical-align:baseline;">
<fb:like href="https://www.facebook.com/TechGasp" send="true" layout="button_count" width="90" show_faces="false"></fb:like>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=281766848505812";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
&nbsp;
<a href="https://twitter.com/TechGasp" class="twitter-follow-button" data-show-count="true">Follow @TechGasp</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</span>
</p>
</td>
</tr>
</table>

<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>

<div id="icon-tools" class="icon32" style="width:40px; vertical-align:middle;"></br></div>
<h2><?php _e("Social Master", 'social_master'); ?></h2>
<br>
<form method="post" width='1'>
<fieldset class="options">
<legend><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Advanced Version Updater:', 'social_master'); ?></h3></legend>
<?php
if (isset($_POST['update'])){
if (isset($_POST['down_link_social'])){
		if ($new_down_link_social = $_POST['down_link_social']){
			if( is_multisite() ){
			update_site_option('down_link_social', $new_down_link_social);
			}
			else {
			update_option('down_link_social', $new_down_link_social);
			}
		}
}
?>
<div id="message" class="updated fade">
<p><strong><?php _e('Settings Saved!', 'social_master'); ?></strong></p>
</div>
<?php }
?>
<p>Download Key: <input id="down_link_social" name="down_link_social" type="text" size="16" maxlength="16" value="<?php echo get_option('down_link_social'); ?>" ></p>
<div class="description">The advanced version updater allows to automatically update your advanced plugin. Insert your download key, it can be found in your purchase email.</div>
<div class="description">Example: http://wordpress.techgasp.com/?paiddownloads_key=ngjvyqqvio1</div>
<div class="description">Your key would be: <b>ngjvyqqvio1</b></div>
</fieldset>
<p class="submit"><input class='button-primary' type='submit' name='update' value='<?php _e("Save Settings", 'social_master'); ?>' id='submitbutton' /></p>

<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>

<h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />&nbsp;Widget Options:</h3>
<div class="description">All widget options are available in your widgets page. <b>Social Master Widget</b>.</div>
<h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;"/>&nbsp;Shortcode Options:</h3>
<div class="description">All shortcode options are available inside your pages and posts when you edit them. <b>Social Master Shortcode Box</b>.</div>
<br>

<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>

<h3><img src="<?php echo plugins_url('../images/techgasp-minilogo.png', __FILE__); ?>" style="width:40px; vertical-align:middle;" alt="' . esc_attr__( 'TechGasp Plugins') . '" /> Get a TechGasp Plugin totally FREE</h3>
<div class="description">That's right!!! you can get <a href="http://wordpress.techgasp.com/facebook-master/" target="_blank">Facebook Master</a> totally <b>FREE</b>.</div>
<div class="description">Use the <b>RATE US</b> button below and give this plugin a 5 star rating in wordpress. That easy!!, afterwards let us know.</div>

<br>

<h3><img src="<?php echo plugins_url('../images/techgasp-minilogo.png', __FILE__); ?>" style="width:40px; vertical-align:middle;" alt="' . esc_attr__( 'TechGasp Plugins') . '" /> Social Master Website</h3>
<p><a class="button-secondary" href="http://wordpress.techgasp.com/social-master/" target="_blank" title="Social Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/social-master-documentation/" target="_blank" title="Social Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.org/plugins/social-master/" target="_blank" title="Social Master Wordpress">RATE US *****</a></p>
</form>
</div>