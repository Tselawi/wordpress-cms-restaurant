<?php get_header();
$restaurant_title = get_field('restaurant_title');
$restaurant_title_small = get_field('title_small');
$image_bg = get_field('resto_image');
$resto_picture = $image_bg['sizes']['my_custom_size'];
$borderImage_resto = get_field('border_image_resto');
$pictureBorder = $borderImage_resto['sizes']['my_custom_border_size'];
$link = get_field('link_menu');
$link_url = $link['url'];
$link_target = $link['target'] ? $link['target'] : '_self';


?>

<!--===================================== POST RESTAURANT START ==========================================-->

<!--=====================================  BANNER START ==========================================-->
<section class="container-fluid border border-success border-5 banner-top"> 
    <img src="<?php echo $resto_picture; ?>" class="bg-img img-fluid img-resto"> 
    <div class="container">
        <div class="banner-row row my-5 border border-warning border-5 ">
                <div class="main-title col-6 border border-primary border-5">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div><?php the_content(); ?></div>
                    <?php endwhile;
                    endif; ?>

                    <?php if ($restaurant_title_small): ?>
                      <h3 class="text-white"><?= $restaurant_title_small?></h3>            
                    <?php endif; ?>

                    <?php if ($restaurant_title): ?>
                        <h1 class="title text-uppercase"><?= $restaurant_title ?></h1>
                         <?php endif; ?> 
                            <div class="menu-link text-white">
                                <?php if ($link): ?>
                                ⎯⎯⎯⎯ <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr(
                                    $link_target
                                    ); ?>">Check Our Menu</a>
                                <?php endif; ?>
                            </div>
                </div>
                <div class="col"></div>
        </div>
   </div>
   <img src="<?php echo $pictureBorder; ?>" class="border-img">
</section>

<!--=====================================  BANNER END ==========================================-->

<!--=====================================  PRESENTATION START ==========================================-->

<section class=" restaurant-presentation container-fluid border border-danger border-5 bg-light ">
    <div class="container py-5 text-center">
        <h3 class="subtitle-restaurant-pre">Welcome In Liège </h3>
        <h4 class="title-restaurant text-uppercase">Presentation</h4>
        
        <div class="card my-5 border-secondary border-1 bg-light" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="..." alt="..." class="card-img">
                </div>
                <div class="col-lg-6">
                <div class="card-body">
                    <h5 class="card-title my-2">Small Card Title</h5>
                    <h3 class="card-title fw-bold my-2">Large Card Title</h3>
                    <p class=" lead card-text my-2 lh-lg ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita repudiandae excepturi eos, cum explicabo culpa dignissimos dolores, possimus voluptatibus rerum velit enim ea quia doloribus nam nostrum voluptate. In, minus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita repudiandae excepturi eos, cum explicabo culpa dignissimos dolores, possimus voluptatibus rerum velit enim ea quia doloribus nam nostrum voluptate. In, minus.</p>
                    
                </div>
                </div>
            </div>
        </div>

        <div class="card my-5 border-secondary border-1 bg-light" style="max-width: 100%;">
            <div class="row g-0">
               
                <div class="col-lg-6">
                <div class="card-body">
                    <h5 class="card-title my-2">Small Card Title</h5>
                    <h3 class="card-title fw-bold my-2">Large Card Title</h3>
                    <p class=" lead card-text my-2 lh-lg ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita repudiandae excepturi eos, cum explicabo culpa dignissimos dolores, possimus voluptatibus rerum velit enim ea quia doloribus nam nostrum voluptate. In, minus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita repudiandae excepturi eos, cum explicabo culpa dignissimos dolores, possimus voluptatibus rerum velit enim ea quia doloribus nam nostrum voluptate. In, minus.</p>
                    
                </div>
                </div>
                <div class="col-lg-6">
                    <img src="..." alt="..." class="card-img">
                </div>
            </div>
        </div>


    </div>
</section>
<!--=====================================  PRESENTATION END ==========================================-->

<!--=====================================  LOCATION START ==========================================-->

<section class="container-fluid border border-danger border-5 bg-light">
    <div class="container py-5 text-center">
        <h4>Find Us</h4>
        <h3 class="text-uppercase fw-bold mt-2">Location</h3>
    </div>

    <div class="container-fluid">
        <img src="..." class="img-fluid " alt="map"> 
    </div>
</section>
<!--=====================================  LOCATION END ==========================================-->

<?php get_footer(); ?>


