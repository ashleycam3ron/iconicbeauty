<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#e84ca2"><!-- Chrome, Firefox OS and Opera -->
	<meta name="msapplication-navbutton-color" content="#f9b3d1"><!-- Windows Phone -->
	<meta name="apple-mobile-web-app-capable" content="yes"><!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="dc.language" CONTENT="US">
	<meta name="dc.source" CONTENT="<?php echo esc_url( home_url() ) ?>">
	<meta name="dc.title" CONTENT="<?php echo wp_title(); ?>">
	<meta name="dc.subject" CONTENT="<?php bloginfo('description');?>">
	<meta name="dc.creator" content="Iconic Beauty by Bryiana Dyrdek">
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri() ?>/images/iconic-beauties.jpg" />
	<meta name="google-site-verification" content="j3sqC8Kyje6ImLv0Uu53Zw7DqEXZJZBgAUu0851UhfA" />
	<title><?php echo wp_title();?></title>
	<link href='https://fonts.googleapis.com/css?family=Old+Standard+TT:400,700|Raleway:400,700|Cinzel:400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Oswald' rel='stylesheet' type='text/css'>
	<link rel="alternate" href="http://iconicbeauty.com" hreflang="en-us" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon-pink.ico" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-192.png">
    <link rel="image_src" href="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<h3 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h3>

<header id="header" role="banner" class="row">
	<div id="subscribe">
		<h6>Subscribe & Follow Us</h6>
		<small>Follow your dreams and join our growing team</small>
		<nav class="hidden-xs">
			<h4 class="hidden">Connect on social media</h4>
			<?php wp_nav_menu( array( 'menu' => 'social') ); ?>
		</nav>
	</div>
	<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>">
		<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Iconic-Beauty-logo.png" alt="<?php bloginfo('name')?> logo">
	</a>
	<nav class="navbar navbar-default" role="navigation">
		<h2>Primary Navigation</h2>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle gradient" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php wp_nav_menu( array(
			  'menu' => 'primary',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav navbar-nav sticky',
			  'walker' => new wp_bootstrap_navwalker())
			); ?>
		</div>
	</nav>
</header>