<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RH_portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  id="home top">
<div id="page" class="hfeed site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'rh_portfolio' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
		<div class="outer-wrapper">
			<div class="nav-logo-container">
				<div class="site-branding">
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<div class="mini-box mini-topleft"></div>
							<div class="mini-box mini-topright"></div>
							<div class="mini-box mini-bottomleft"></div>
							<div class="mini-box mini-bottomright"></div>
						</h1>
				</div><!-- .site-branding -->
			
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div> <!-- /.nav-logo-container -->
		</div> <!-- /.outerwrapper -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
