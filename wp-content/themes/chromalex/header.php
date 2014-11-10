<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-us" class="no-js ie9"> <![endif]-->   
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title><?php
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

		?></title>
	<script src="<?php bloginfo('template_url'); ?>/modernizr-2.5.3.js" type="text/javascript" charset="utf-8"></script>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<!--[if lt IE 9]>
	   	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie.css" type="text/css" media="screen" />
	<![endif]-->
	<?php wp_head(); ?>
	
</head>

<body>
	
	<div id="wrapper">
	
		<header id="page-header">
			
			<img src="<?php bloginfo('template_url'); ?>/images/chromalex-logo.png" class="header-logo">
			
			<div class="social-icons">
				<a href="http://www.facebook.com/chromalex"><img src="<?php bloginfo('template_url'); ?>/images/facebook_16.png"></a>
				<!--<a href="#" class="zocial icon twitter"><img src="<?php bloginfo('template_url'); ?>/images/twitter_16.png"></a> -->
				<div class="qtrans_language_chooser">
					<?php if ( function_exists( 'qtrans_generateLanguageSelectCode' ) ) chromalex_qtrans_generateLanguageSelectCode('dropdown'); ?>
				</div>
			</div>
			
			<nav class="top-nav">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'container' => false ) ); ?>
			</nav>
			
		</header>