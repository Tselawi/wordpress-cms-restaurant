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

	<header class="sticky-top">

		<div class="container">
			<!-- <h3 class="logo">DEV RESTAURANT</h3> -->
			<nav class="navbar navbar-expand-lg navbar-light justify-content-between m-auto">
				<h3 class="navbar-brand" href="#">DEV RESTAURANT</h3>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php wp_nav_menu(
						array(
							'theme_location' => 'menu-header-1',
							'menu_class' => 'navigation',

						)
					); ?>
				</div>
			</nav>
		</div>
	</header>