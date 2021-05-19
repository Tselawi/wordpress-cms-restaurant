<?php get_header();
$restaurant_title = get_field('restaurant_title');
$restaurant_title_small = get_field('title_small');
$image_bg = get_field('resto_image');
$resto_picture = $image_bg['sizes']['my_custom_size'];
$borderImage_resto = get_field('border_image_resto');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
$link = get_field('link_menu');
$link_url = $link['url'];
$link_target = $link['target'] ? $link['target'] : '_self';


?>

<!--============================================ restaurant-page =====================================================-->
<section class="container-fluid border border-success border-5 banner-top"> 
    <img src="<?php echo $resto_picture; ?>" class="bg-img img-fluid img-resto"> 
    <div class="container">
        <div class="banner-row row my-5 border border-warning border-5 ">
       
                <div class="main-title col-6 border border-primary border-5">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div><?php the_content(); ?></div>
                    <?php
                        endwhile;
                    endif; ?>

                             <?php if ($restaurant_title_small): ?>
                                    <h3 class="text-white"><?= $restaurant_title_small?></h3>
                                    
                                <?php endif; ?>

                                <?php if ($restaurant_title): ?>
                                    <h1 class="title text-uppercase"><?= $restaurant_title ?></h1>
                                <?php endif; ?> 
                                <?php if ($link): ?>
                                   <a class="menu-link text-white" href="<?php echo esc_url(
                                       $link_url
                                    ); ?>" target="<?php echo esc_attr(
                                    $link_target
                                    ); ?>"><hr style='display:inline-block; background-color:white; width:50px; height:2px'> Check Our Menu</a>
                                <?php endif; ?>
                </div>
                <div class="col"></div>
        
        </div>
   
   </div>
</section>
<section class="container-fluid border border-danger border-5">
    
</section>


<?php get_footer(); ?>


