<?php
/**
 * Plugin Name: Spazio_Graphite_Plugin
 * Plugin URI: https://github.com/bissanti/Spazio_Graphite_Plugin
 * Description: A Spazio Graphite Plugins collection
 * Version: 1.0.3
 * Author: Roberto Bissanti
 * Author URI: https://studiobissanti.com
 * License: GPL2
 * @package Spazio_Graphite_Plugin
 *
 * Spazio_Graphite_Plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *  
 * Spazio_Graphite_Plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *  
 * You should have received a copy of the GNU General Public License
 * along with Spazio_Graphite_Plugin. If not, see {URI to Plugin License}.
 */

/*define( 'Spazio_Graphite_Plugin_C', '1' );
if( !defined( 'Spazio_Graphite_Plugin_C' ) ) {exit();};*/

//function spazio_graphite_login_logo() { 
//	//$logo_images = plugin_dir_url( __FILE__ ) . 'imgs/spazio_graphite_login_logo.png';
//	$Content   = '<style type="text/css">';
//	$Content  .= 'body.login div#login h1 a {';
//	$Content  .= 'background-image: url(https://www.spaziographite.it/wp-content/plugins/Spazio_Graphite_Plugin/imgs/spazio_graphite_login_logo.png);';
//	$Content  .= 'padding-bottom: 30px;';
//	$Content  .= '}'; 
//	$Content  .= '</style>';
//	return $Content;
//} 
//add_action( 'login_enqueue_scripts', 'spazio_graphite_login_logo' );
//add_action( 'admin_enqueue_scripts', 'spazio_graphite_login_logo' );
//add_action( 'wp_enqueue_scripts', 'spazio_graphite_login_logo' );
include_once('updater.php');
//* Personalizzare l'immagine nella pagina di login 
  function custom_loginlogo() { 
  	echo '<style type="text/css"> h1 a {background-image: url(';
  //https://www.spaziographite.it/wp-content/plugins/Spazio_Graphite_Plugin/imgs/spazio_graphite_login_logo.png
  	echo plugin_dir_url( __FILE__ );
  	echo 'imgs/spazio_graphite_login_logo.png) !important; } </style>'; 
  } add_action('login_head', 'custom_loginlogo'); 
//* Personalizzare il link dell'immagine nella pagina di login 
  function custom_loginlogo_url($url) { return 'https://www.spaziographite.it/'; } 
	add_filter( 'login_headerurl', 'custom_loginlogo_url' ); 
//* Personalizzare title tag image 
  function custom_login_title() { return get_option( 'blogname' ); } add_filter( 'login_headertext', 'custom_login_title' );


function remove_wordpress_admin_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'remove_wordpress_admin_logo', 0);


if (is_admin()) { // note the use of is_admin() to double check that this is happening in the admin
		$config = array(
			'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
			'proper_folder_name' => 'Spazio_Graphite_Plugin', // this is the name of the folder your plugin lives in
			'api_url' => 'https://api.github.com/repos/bissanti/Spazio_Graphite_Plugin', // the GitHub API url of your GitHub repo
			'raw_url' => 'https://raw.github.com/bissanti/Spazio_Graphite_Plugin/master', // the GitHub raw url of your GitHub repo
			'github_url' => 'https://github.com/bissanti/Spazio_Graphite_Plugin', // the GitHub url of your GitHub repo
			'zip_url' => 'https://github.com/bissanti/Spazio_Graphite_Plugin/zipball/master', // the zip url of the GitHub repo
			'sslverify' => true, // whether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
			'requires' => '3.0', // which version of WordPress does your plugin require?
			'tested' => '3.3', // which version of WordPress is your plugin tested up to?
			'readme' => 'README.md', // which file to use as the readme for the version number
			'access_token' => '', // Access private repositories by authorizing under Appearance > GitHub Updates when this example plugin is installed
		);
		new WP_GitHub_Updater($config);
	}




?>