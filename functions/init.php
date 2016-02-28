<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );

if(!function_exists('initialize')){
	function initialize() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support('post-thumbnails');
		//add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	}
	add_action('init','initialize');
}

function custom_login_logo(){
	$logo = get_stylesheet_directory_uri().'/images/Iconic-Beauty-logo.png';
	$images = get_stylesheet_directory_uri().'/images/';
	//$l = getimagesize($path);
	echo '<style type="text/css">
body.login {background:url("'. $images .'triangle-pattern.png") !important;padding-top: 10px;}
#login {
	border: 12px solid #000;
    padding: 50px 5% 20px;
    background: #FFF;
	margin-top: 40px;
    position: absolute;
    left: 0;
    right: 0;
}
.login form {
	padding: 26px 15px;border-bottom: 1px solid #DCDCDC;}
.login form .input, .login input[type=text] {
    background: #fbfbfb;
    border: 0;
    background: #FFF;
    box-shadow: none;
    border-bottom: 2px solid #000;
}
.login label {
    color: #6D6D6D;
    font-size: 11.5px;
    text-transform: uppercase;
    letter-spacing: .25em;
    font-family: "Raleway", Arial, sans-serif;
}
input#rememberme {
    border: 2px solid #B9AD6C;
    box-shadow: none;
    background: #FFF;
}
.login form .forgetmenot label{color:#B9AD6C; letter-spacing:.1em;}
input[type=checkbox]:checked:before {
    margin: -5px 0px 0 -4px;
    color: #B9AD6C;
}
.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
    color: #B9AD6C;
}
input#wp-submit {
    background: #000;
    border: 0;
    border-radius: 0;
    text-shadow: none;
    text-transform: uppercase;
    letter-spacing: .2em;
    font-family: "Raleway", Arial, sans-serif;
    padding: 8px 26px 5px;
    height: auto;
}
h1 a { background:url("'. $logo .'") no-repeat center white !important; background-size:100% !important;width:320px !important;height: 60px !important;margin: 0 auto !important;}
.login #backtoblog a, .login #nav a, .login h1 a {color: #252121;font-weight: bold;}
.login form {margin-top:0 !important;box-shadow:none;}
		</style>';
}
add_action('login_head','custom_login_logo');
function login_header_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_header_url');

function login_header_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'login_header_title');

/*
function change_menu_labels($t) {
    global $menu;
	//pre($menu);exti;
    $menu[103][0] = 'Backup';
    foreach($menu as $k=>$v){
	    if($v[0]==''){

	    }
    }
}
add_action('admin_menu', 'change_menu_labels' ,1000);
*/

?>