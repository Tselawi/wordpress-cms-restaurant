<?php
get_header();
$text = get_field('text_title');
$secondText = get_field('second_text');
$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
?>
       


<div class="container-fluid">
    <div class="row">
        <div>
            <?php if ($picture): ?> 
                <img src="<?= $picture ?>" class="img-bg">  
            <?php endif; ?>    
        <!-- <div class="col- border border-danger">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                <div><?php the_content(); ?></div>   
                <?php
                endwhile;
            else:
            endif; ?>
        </div> -->
        <div class="col-6 border border-danger">
                 <?php if ($text): ?>
                    <p><?= $text ?></p>
                <?php endif; ?>

                <?php if ($secondText): ?>
                    <p><?= $secondText ?></p>
                <?php endif; ?>
        </div>
        </div>
                <?php if ($pictureBorder): ?> 
                <img src="<?= $pictureBorder ?>" class="img-border">  
                <?php endif; ?> 
    </div>
</div>
<?php get_footer(); ?>


