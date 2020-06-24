<?php
/**
 * Plugin Name: Spazio_Graphite_Plugin
 * Plugin URI: https://github.com/bissanti/Spazio_Graphite_Plugin
 * Description: A Spazio Graphite Plugins collection
 * Version: 0.1.2
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


?>