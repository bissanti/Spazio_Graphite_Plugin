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
			'access_token' => '77d5e10bad2e6a09dc647695147f6d230c28a3f8', // Access private repositories by authorizing under Appearance > GitHub Updates when this example plugin is installed
		);
		new WP_GitHub_Updater($config);
	}

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