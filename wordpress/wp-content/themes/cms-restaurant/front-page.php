<?php
get_header();
$text = get_field('home_text');
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
            <h1 class="title"><?= $text ?></h1>
            <?php endif; ?>
        </div>   
    <?php
        endwhile;
    endif; ?>
    
</div> 
</div>
<?php get_footer(); ?>
