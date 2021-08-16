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
	<div class="container-fluid bg-dark">
	<div class="container main-header justify-content-center align-center">
		<header class=" d-flex flex-wrap justify-content-center py-3 mb-4 ">
			<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none text-uppercase">
				
				<span class="fs-4 text-white"><?php bloginfo('name'); ?></span>
      		</a>
			
					<?php wp_nav_menu([
         'theme_location' => 'menu-header-1',
         'menu_class' => 'navigation',
     ]); ?>
		</header>
		</div>
</div>
		
								