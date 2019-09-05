<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

	<header class="header">
		<nav class="main_nav">
			<h1><a href="home"><img class="main_nav__logo" src="assets/svg/logo.svg" alt="logo-nitrofilms"></a></h1>
			<button class="main_nav__openicon"><i class="fas fa-bars"></i></button>
			<div class="main_nav__menu active">
					<div class="main_nav__close"><button class="main_nav__closeicon"><i class="fas fa-times"></i></button></div>

					<ul class="main_nav__list">
						<li class="main_nav__item"><a href="home#gallery" class="main_nav__link">Work</a></li>
						<li class="main_nav__item"><a href="about" class="main_nav__link">About</a></li>
						<li class="main_nav__item"><a href="contact" class="main_nav__link">Contact</a></li>
					</ul>

					<ul class="main_nav__socialist">
						<li class="main_nav__socialitem"><a href="#" class="main_nav__socialink"><i class="fab fa-facebook-square"></i></a></li>
						<li class="main_nav__socialitem"><a href="#" class="main_nav__socialink"><i class="fab fa-instagram"></i></a></li>
						<li class="main_nav__socialitem"><a href="#" class="main_nav__socialink"><i class="fab fa-vimeo"></i></a></li>
					</ul>
			</div>
		</nav>
	</header>