<?php
function menu_single_social_master_admin_settings_wide(){
	if ( is_admin() )
	add_submenu_page( 'social-master', 'Settings', 'Settings', 'manage_options', 'social-master-admin-settings-wide', 'social_master_admin_settings_wide' );
	}

function social_master_admin_settings_wide(){
?>
<div class="wrap">
<div style="width:40px; vertical-align:middle; float:left;"><img src="<?php echo plugins_url('images/techgasp-minilogo.png', dirname(__FILE__)); ?>" alt="' . esc_attr__( 'TechGasp Plugins') . '" /><br /></div>
<h2><b>&nbsp;Settings</b></h2>
<?php
if(!class_exists('social_master_admin_settings_wide')){
	require_once( dirname( __FILE__ ) . '/social-master-admin-settings-wide-table.php');
}
//Prepare Table of elements
$wp_list_table = new social_master_admin_settings_wide_table();
//Table of elements
$wp_list_table->display();

?>
</br>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
</br>
<?php
if(!class_exists('social_master_admin_settings_wide_table_options')){
	require_once( dirname( __FILE__ ) . '/social-master-admin-settings-wide-table-options.php');
}
//Prepare Table of elements
$wp_list_table = new social_master_admin_settings_wide_table_options();
//Table of elements
$wp_list_table->display();
?>
</br>
<h2>IMPORTANT: Makes no use of Javascript or Ajax to keep your website fast and conflicts free</h2>

<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>

<br>

<p>
<a class="button-secondary" href="http://wordpress.techgasp.com" target="_blank" title="Visit Website">More TechGasp Plugins</a>
<a class="button-secondary" href="http://wordpress.techgasp.com/support/" target="_blank" title="Facebook Page">TechGasp Support</a>
<a class="button-primary" href="http://wordpress.techgasp.com/social-master/" target="_blank" title="Visit Website"><?php echo get_option('social_master_name'); ?> Info</a>
<a class="button-primary" href="http://wordpress.techgasp.com/social-master-documentation/" target="_blank" title="Visit Website"><?php echo get_option('social_master_name'); ?> Documentation</a>
</p>
<?php
}

if( is_multisite() ) {
add_action( 'admin_menu', 'menu_single_social_master_admin_settings_wide' );
}
else {
add_action( 'admin_menu', 'menu_single_social_master_admin_settings_wide' );
}
?>