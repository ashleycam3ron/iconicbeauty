<?php
function editor_stylesheet($url){
	if(!empty($url)){
		$url .= ',';
	}
    $url .= get_stylesheet_uri();
    return $url;
}

if(!function_exists('base_admin_css')){
	function base_admin_css(){
		wp_enqueue_style('base-admin-css', get_stylesheet_directory_uri() .'/css/admin.css', true, '1.0', 'all');
	}
	add_action('admin_print_styles', 'base_admin_css');
}
add_filter('mce_css', 'editor_stylesheet');