<?php get_header(); ?>
<?php
$image = get_field('feature_image');
$pictureSize = $image['sizes']['my_custom_size'];
?>
       


       <img src="<?= $pictureSize ?>" class="img-fluid">
<div class="container">

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <div><?php the_content(); ?></div>
            
    <?php
        endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>
