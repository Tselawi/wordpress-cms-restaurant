<?php get_header();
$restaurant_title = get_field('restaurant_title');
$restaurant_title_small = get_field('title_small');
$image_bg = get_field('resto_image');
$picture = $image_bg['sizes']['my_custom_size'];
$borderImage_resto = get_field('border_image_resto');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
$link = get_field('link_menu');
$link_url = $link['url'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>


<section class="restaurant-page"> 
<!-- <img src="<?php echo $picture; ?>" class="bg-img">       -->
  
        <div class="row my-5 border border-dark border-5 ">
                <div class="main-title col-6 border border-primary border-5">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div><?php the_content(); ?></div>
                    <?php
                        endwhile;
                    endif; ?>

                             <?php if ($restaurant_title_small): ?>
                                    <h3><?= $restaurant_title_small ?></h3>
                                    
                                <?php endif; ?>

                                <?php if ($restaurant_title): ?>
                                    <h1 class="title text-uppercase text-bold"><?= $restaurant_title ?></h1>
                                <?php endif; ?> 

                                <?php if ($link): ?>
                                    <div class="d-inline">

                                        <hr class="d-inline-block "><a class=" d-inline-block menu-link text-dark px-3" href="<?php echo esc_url(
                                        $link_url
                                    ); ?>" target="<?php echo esc_attr(
                                    $link_target
                                    ); ?>">Check Our Menu</a></div>
                                <?php endif; ?>
                </div>
                <div class="col"></div>
        
        </div>
</section>
<?php get_footer(); ?>
