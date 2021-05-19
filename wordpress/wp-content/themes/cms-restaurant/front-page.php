<?php
get_header();
$text = get_field('text_title');
$main_title = get_field('main_title');
$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
$link = get_field('menu_link');
$link_url = $link['url'];
$link_target = $link['target'] ? $link['target'] : '_self';

// cards
$img_first_icon = get_field('first_icon_card');
?>
       
       
<section class="container-fluid border border-success border-5 banner-top"> 
<img src="<?php echo $picture; ?>" class="bg-img"> 
<div class="container">
        <div class="banner-row row my-5 border border-warning border-5 ">
        <!-- <div class="col-2"></div> -->
                <div class="main-title col-6 border border-primary border-5">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div><?php the_content(); ?></div>
                    <?php
                        endwhile;
                    endif; ?>

                             <?php if ($text): ?>
                                    <h3 class="text-white"><?= $text ?></h3>
                                    
                                <?php endif; ?>

                                <?php if ($main_title): ?>
                                    <h1 class="title text-uppercase"><?= $main_title ?></h1>
                                <?php endif; ?> 
                                <div class="menu-link text-white">
                                <?php if ($link): ?>
                                    ⎯⎯⎯⎯ <a href="<?php echo esc_url(
                                       $link_url
                                   ); ?>" target="<?php echo esc_attr(
    $link_target
); ?>">Check Our Menu</a>
                                <?php endif; ?>
                                </div>
                </div>
                <div class="col"></div>
        
        </div>
        </section>
   <div class="container border border-warning">
       <div class="row">
           <div class="col-4 border border-info  text-center">
               <div class="card border border-dark">
  <img class="card-img-top" src="<?= $img_first_icon ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
</div>
           <div class="col-4 border border-info text-center">
               <div class="card border border-dark">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
</div>
           <div class="col-4 border border-info text-center">
               <div class="card border border-dark">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
</div>
       </div>
   </div>
   </div>

<?php get_footer(); ?>


