<?php
get_header();
$text = get_field('text_title');
$main_title = get_field('main_title');
$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
?>
       

<section class="landing-page"> 
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

                             <?php if ($text): ?>
                                    <h3><?= $text ?></h3>
                                    
                                <?php endif; ?>

                                <?php if ($main_title): ?>
                                    <h1 class="title text-uppercase"><?= $main_title ?></h1>
                                <?php endif; ?> 
                </div>
                <div class="col"></div>
        
        </div>
   
</section>
<?php get_footer(); ?>


