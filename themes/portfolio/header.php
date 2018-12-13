<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
	<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#fff">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icons/favicon.ico"
	/>
	<meta name="msapplication-config" content="icons/browserconfig.xml">
	<meta name="theme-color" content="#222">
	<meta name="msapplication-navbutton-color" content="#222">
	<meta name="apple-mobile-web-app-status-bar-style" content="#222">
	<meta itemprop="url" content="https://portfolio.freeko.pl/">
	<meta name="description" content="Portfolio">
	<meta name="dcterms.description" lang="eng" content="Portfolio">
	<meta name="keywords" content="Portfolio">
	<meta name="dcterms.subject" lang="eng" content="Portfolio">
	<meta name="application-name" content="Portfolio">
	<meta property="og:site_name" content="Portfolio">
	<meta property="og:url" content="https://portfolio.freeko.pl/">
	<meta property="og:title" content="Portfolio">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="container">
		<header class="header">

			<nav class="navigation" id="main-navigation" role="navigation">
				<img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" class="navigation__logo"
				 alt="logo">

				<?php
						// Display Main Navigation.
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'navigation__list navigation__list',
							'echo' => true,
							)
						);
					?>

				<button class="navigation__toggle" type="button" aria-label="Toggle Menu" aria-expanded="false" aria-controls="main-menu"
				 title="Toggle Menu">
					<span class="sr-only">Open Menu</span>
					<i class="navigation__icon navigation__icon fa fa-bars" aria-hidden="true"></i>
				</button>

			</nav>

			<h1 class="header__heading js--header__text">Example Portfolio</h1>

		</header>