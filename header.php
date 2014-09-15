<?php
/**
 * 
 * Despliega todo el contenido de la sección <head> y la cabecera del sitio <header> 
 * y el comienzo de <div id="content">
 *
 * @package iaraBones
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="">
	<meta name="author" content="Enrique Ortiz C."> <!-- Verificar si genera el error en FB -->

	<!-- Facebook metatags -->
	<!-- Fin de Facebook metatags -->

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
	<!-- fin de Google Fonts -->

	<!-- íconos & favicons (para añadir otros a celulares revisar información en: http://themble.com/support/adding-icons-favicons/) -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

	<!-- Google CDN's jQuery. O a local, en caso de fallo (considera pasarlo al footer)-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"%3E%3C/script%3E'))</script>

	<!-- Modernizr 2.8.2 (Custom Build) | MIT & BSD (considera pasarlo al footer)-->
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.33479.js"></script>

	<!-- Google Analytics aquí (considera pasarlo al footer)-->
	<!-- fin de Google Analytics -->

	<!-- Wordpress head functions ¡IMPORTANTE! -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'iarabones' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'iarabones' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">