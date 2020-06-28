<?php
/**
 * Plugin Name: Spazio_Graphite_Plugin
 * Plugin URI: https://github.com/bissanti/Spazio_Graphite_Plugin
 * Description: A Spazio Graphite Plugins collection
 * Version:1.4
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


/*github updater*/
add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {
	include_once( 'inc/updater.php');
	
	define( 'WP_GITHUB_FORCE_UPDATE', true );
	
	if (is_admin()) {
	$config = array( 
			'slug' => plugin_basename(__FILE__), // l'abbreviazione del plugin 
			'proper_folder_name' => 'Spazio_Graphite_Plugin', // il nome della cartella che contiene il nostro plugin 
			'api_url' => 'http://api.github.com/repos/bissanti/Spazio_Graphite_Plugin', // la GitHub API url del repository contenente il plugin 
			'raw_url' => 'http://raw.github.com/bissanti/Spazio_Graphite_Plugin/master', // la GitHub raw url del repository contenente il plugin 
			'github_url' => 'http://github.com/bissanti/Spazio_Graphite_Plugin', // la GitHub url del repository contenente il plugin 
			'zip_url' => 'http://github.com/bissanti/Spazio_Graphite_Plugin/zipball/master', // dove si trova l'archivio .zip del repository 
			'sslverify' => true, // se WordPress deve utilizzare un certificato SSL quando effettua il controllo sull'aggiornamento 
			'requires' => '3.3', // specificare quale versione di WordPress e' richiesta da questo plugin 
			'tested' => '3.3', // fino a che versione di WordPress hai testato il plugin? 
			'readme' => 'README.md', // quale file deve essere usato per controllare la versione del plugin? 
			'access_token' => '', // serve soltanto quando utilizziamo repository WordPress privati 
		); 

		new WP_GitHub_Updater($config); 
	}
}
/*end github updater*/



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