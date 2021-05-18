<?php
get_header();
$text = get_field('text_title');
$main_title= get_field('main_title');
$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];

?>
       

<section class="landing-page"> 
<!-- <img src="<?php echo $picture; ?>" class="bg-img">       -->
  
        <div class="row text-center my-5 justify-content-center align-center border border-dark border-5 ">
                <div class="main-title col-6 justify-centent-center align-middle   border border-primary border-5 ">
               
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div class="title"><?php the_content(); ?>
                                    <?php if ($text): ?>
                                    <h3 ><?= $text ?></h3>
                                    
                                <?php endif; ?>

                                <?php if ($main_title): ?>
                                    <h1 ><?= $main_title?></h1>
                                <?php endif; ?>
                            </div>   
                    <?php
                        endwhile;
                    endif; ?>

                </div>
                <div class="col"></div>
        
            </div>
   
</section>
<?php get_footer(); ?>


