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
<section class="container-fluid banner-recipe">
    <img src="<?php echo $resto_picture; ?>" class="bg-img img-fluid img-resto">
    <div class="container">
        <div class="banner-row row my-5  ">
            <div class="main-title col-6 ">
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