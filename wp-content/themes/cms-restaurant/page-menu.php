<?php get_header(); ?>

<section>
    <?php get_template_part('menuTemplate-parts/menu','title');?>
</section>
<section>
    <?php get_template_part('menuTemplate-parts/menu','lists');?>
</section>
<section>
    <?php get_template_part('menuTemplate-parts/menu', 'recipes'); ?>
</section>

<?php get_footer(); ?>