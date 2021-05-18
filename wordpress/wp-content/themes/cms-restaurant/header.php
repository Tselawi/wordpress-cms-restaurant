<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); ?></title>
</head>

<body <?php body_class(); ?>>
	
	

	<header class=" wrapper-navbar ">
		<div class="container">
			<nav class="navbar py-5">
				<a class="navbar-brand text-white" href="#"><?php bloginfo('name'); ?></a>
									<?php wp_nav_menu([
             'theme_location' => 'menu-header-1',
             'menu_class' => 'navigation',
         ]); ?>
			</nav>
		</div>
	</header>
								