<?php
get_header();
$text = get_field('home_text');
$main_title= get_field('main_title');
$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];

?>
       

<div class="banner-home"> 
<img src="<?php echo $picture; ?>" class="bg-img">      
<div class="container">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <div><?php the_content(); ?>
                    <?php if ($text): ?>
                    <p class="title"><?= $text ?></p>
                    
                <?php endif; ?>

                <?php if ($main_title): ?>
                    <p class="main-title"><?= $main_title?></p>
                <?php endif; ?>
            </div>   
    <?php
        endwhile;
    endif; ?>
    
</div> 
</div>
<?php get_footer(); ?>


