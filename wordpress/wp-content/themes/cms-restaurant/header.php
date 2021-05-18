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
	<main class="container-fluid h-100 border border-info border-5">

	<div class="container justify-content-center align-center h-100 border border-danger border-5">
		<header class=" d-flex flex-wrap justify-content-center py-3 mb-4 bg-dark">
			<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark 		text-decoration-none">
				
				<span class="fs-4"><?php bloginfo('name'); ?></span>
      		</a>
				<!-- <nav class="navbar py-5"> -->
					<?php wp_nav_menu([
				'theme_location' => 'menu-header-1',
				'menu_class' => 'navigation',
			]); ?>
				<!-- </nav> -->
		</header>
	

		
	

      <!-- <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>
  </div> -->
								