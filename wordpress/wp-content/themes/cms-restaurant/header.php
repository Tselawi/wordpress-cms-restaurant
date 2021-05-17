<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
	<title>CMS-Restaurant</title>
</head>

<body <?php body_class(); ?>>
	<!-- <h1 class="logo"><?php bloginfo('name'); ?></h1>  -->

	<header class=" wrapper-navbar">
		<div class="container">
			<nav class="navbar">
				<h3 class="navbar-brand text-white" href="#">DEV RESTAURANT</h3>
									<?php wp_nav_menu([
             'theme_location' => 'menu-header-1',
             'menu_class' => 'navigation',
         ]); ?>
			</nav>
		</div>
	</header>
								