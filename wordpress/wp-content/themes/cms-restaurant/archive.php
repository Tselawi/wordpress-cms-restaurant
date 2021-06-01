<?php  get_header();?>

<section class="container-fluid banner-recipe">
    <?php get_template_part('recipeTemplate-parts/recipe', 'title'); ?>
</section>
<section class="container-fluid pt-5 bg-light">
    <?php get_template_part('recipeTemplate-parts/recipe','lists'); ?>
</section>


<?php get_footer();?>