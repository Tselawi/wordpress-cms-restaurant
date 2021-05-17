<?php get_header(); ?>

<div class="container">
   

    <h1><?php the_title(); ?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div><?php the_content(); ?>
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('largest'); ?>" class="img-fluid">
            <?php endif; ?> 
        </div>

    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>