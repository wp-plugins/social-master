<?php
/**
Plugin Name: Social Master
Plugin URI: http://wordpress.techgasp.com/social-master/
Version: 4.4.1.6
Author: TechGasp
Author URI: http://wordpress.techgasp.com
Text Domain: social-master
Description: Social Master is a light weight and shiny clean code wordpress plugin that you need to boost your wordpress social engagement, attracting new users, visits or sales. Social Master replaces a bunch of extensions keeping your wordpress website code clean and with fast page loading times because it makes NO use of Javascipt or Ajax. Buil-in html5 and iframe, Social Master combines all major social networks.
License: GPL2 or later
*/
/*
Copyright 2013 TechGasp  (email : info@techgasp.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if(!class_exists('social_master')) :
///////DEFINE DIR///////
define( 'SOCIAL_MASTER_DIR', plugin_dir_path( __FILE__ ) );
///////DEFINE URL///////
define( 'SOCIAL_MASTER_URL', plugin_dir_url( __FILE__ ) );
///////DEFINE ID//////
define('SOCIAL_MASTER_ID', 'social-master');
///////DEFINE VERSION///////
define( 'SOCIAL_MASTER_VERSION', '4.4.1.6' );
global $social_master_version, $social_master_name;
$social_master_version = "4.4.1.6"; //for other pages
$social_master_name = "Social Master"; //pretty name
if( is_multisite() ) {
update_site_option( 'social_master_installed_version', $social_master_version );
update_site_option( 'social_master_name', $social_master_name );
}
else{
update_option( 'social_master_installed_version', $social_master_version );
update_option( 'social_master_name', $social_master_name );
}
// HOOK ADMIN
require_once( dirname( __FILE__ ) . '/includes/social-master-admin.php');
// HOOK ADMIN SETTINGS PAGE » ONLY ADVANCED
require_once( dirname( __FILE__ ) . '/includes/social-master-admin-settings-wide.php');
// HOOK ADMIN IN & UN SHORTCODE
require_once( dirname( __FILE__ ) . '/includes/social-master-admin-shortcodes.php');
// HOOK ADMIN WIDGETS
require_once( dirname( __FILE__ ) . '/includes/social-master-admin-widgets.php');
// HOOK ADMIN ADDONS
require_once( dirname( __FILE__ ) . '/includes/social-master-admin-addons.php');
// HOOK ADMIN UPDATER
require_once( dirname( __FILE__ ) . '/includes/social-master-admin-updater.php');
// HOOK WIDGET BASIC
require_once( dirname( __FILE__ ) . '/includes/social-master-widget-basic.php');

class social_master{
//REGISTER PLUGIN
public static function social_master_register(){
register_activation_hook( __FILE__, array( __CLASS__, 'social_master_activate' ) );
}
public static function content_with_quote($content){
$quote = '<p>' . get_option('tsm_quote') . '</p>';
	return $content . $quote;
}
//SETTINGS LINK IN PLUGIN MANAGER
public static function social_master_links( $links, $file ) {
if ( $file == plugin_basename( dirname(__FILE__).'/social-master.php' ) ) {
		if( is_network_admin() ){
		$techgasp_plugin_url = network_admin_url( 'admin.php?page=social-master' );
		}
		else {
		$techgasp_plugin_url = admin_url( 'admin.php?page=social-master' );
		}
	$links[] = '<a href="' . $techgasp_plugin_url . '">'.__( 'Settings' ).'</a>';
	}
	return $links;
}

public static function social_master_updater_version_check(){
global $social_master_version;
//CHECK NEW VERSION
$social_master_slug = basename(dirname(__FILE__));
$current = get_site_transient( 'update_plugins' );
$social_plugin_slug = $social_master_slug.'/'.$social_master_slug.'.php';
@$r = $current->response[ $social_plugin_slug ];
if (empty($r)){
$r = false;
$social_plugin_slug = false;
if( is_multisite() ) {
update_site_option( 'social_master_newest_version', $social_master_version );
}
else{
update_option( 'social_master_newest_version', $social_master_version );
}
}
if (!empty($r)){
$social_plugin_slug = $social_master_slug.'/'.$social_master_slug.'.php';
@$r = $current->response[ $social_plugin_slug ];
if( is_multisite() ) {
update_site_option( 'social_master_newest_version', $r->new_version );
}
else{
update_option( 'social_master_newest_version', $r->new_version );
}
}
}
//Remove WP Updater
// Advanced Updater
//Updater Label Message
//END CLASS
}
if ( is_admin() ){
	add_action('admin_init', array('social_master', 'social_master_register'));
	add_action('init', array('social_master', 'social_master_updater_version_check'));
}
add_filter('the_content', array('social_master', 'content_with_quote'));
add_filter( 'plugin_action_links', array('social_master', 'social_master_links'), 10, 2 );
endif;
?>