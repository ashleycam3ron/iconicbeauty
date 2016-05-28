<?php

add_action('wp_enqueue_scripts', 'enqueue');
function enqueue(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');

	//Bootstrap
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', NULL, '3.3.4');

	//Fancybox
	wp_register_script('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.js', NULL, '2.1.4');

	//Isotope
	wp_register_script('isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js', NULL, '2.2.2');
	wp_register_script('isotope-fix', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.0.0/imagesloaded.pkgd.min.js', array('jquery'),  true );

	//Sticky (menu)
	//wp_register_script('sticky', get_stylesheet_directory_uri().'/js/jquery.sticky.js');

	//jQuery UI
	wp_register_script('jquery-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js');

	//jQuery Mobile
	wp_register_script('jquery-mobile', get_stylesheet_directory_uri() . '/js/jquery.mobile.custom.min.js', NULL, NULL);

	//TouchSwipe
	wp_register_script('touch-swipe', get_stylesheet_directory_uri() . '/js/jquery.touchSwipe.min.js', NULL, NULL);

	//Lazy Load
	wp_register_script('lazyload', get_stylesheet_directory_uri() . '/js/jquery.lazyload.min.js', NULL, NULL);

	//Theme Functions
	wp_register_script('functions', get_stylesheet_directory_uri() . '/js/functions.js', NULL, NULL);

	//Google Analytics (previous account)
	wp_register_script('analytics', get_stylesheet_directory_uri().'/js/analytics.js', NULL, NULL);


//enqueue scripts
	wp_enqueue_script(array('jquery','bootstrap','fancybox2','functions', 'packery','analytics'));

	//styles
	//Bootstrap Core CSS
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', NULL, '3.3.4');

	//Custom Fonts
	//wp_register_style('font-awesome', get_stylesheet_directory_uri().'/font-awesome/css/font-awesome.min.css');

	wp_register_style('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.css', NULL, '2.1.4');

	//Theme stylesheet
	wp_register_style('styles', get_stylesheet_directory_uri().'/style.css', NULL, NULL);


//enqueue styles
	wp_enqueue_style(array('bootstrap','fancybox2','styles'));

//mobile
	if ( wp_is_mobile() ) {
		wp_enqueue_script('touch-swipe');
	}

//lazy load on blog
	if ( is_page(8) ) {
		wp_enqueue_script(array('lazyload','isotope-fix','isotope'));
	}

}

