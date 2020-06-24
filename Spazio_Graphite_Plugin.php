<?php
/**
 * Plugin Name: Spazio_Graphite_Plugin
 * Plugin URI: https://github.com/bissanti/Spazio_Graphite_Plugin
 * Description: A Spazio-graphite 
 * Version: 0.1.0
 * Author: Roberto Bissanti
 * Author URI: https://studiobissanti.com
 *
 * @package Spazio_Graphite_Plugin
 */

/*define( 'Spazio_Graphite_Plugin_C', '1' );
if( !defined( 'Spazio_Graphite_Plugin_C' ) ) {exit();};*/



//* Personalizzare l'immagine nella pagina di login 
  function custom_loginlogo() { echo '<style type="text/css"> h1 a {background-image: url(https://www.spaziographite.it/wp-content/plugins/Spazio_Graphite_Plugin/imgs/spazio_graphite_login_logo.png) !important; } </style>'; } add_action('login_head', 'custom_loginlogo'); 
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