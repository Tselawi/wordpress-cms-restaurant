<?php
get_header();

?>


<section class="container-fluid banner-top">
    <?php get_template_part('template-parts/home','titles'); ?>
</section>
<section>
    <?php get_template_part('template-parts/home','cards'); ?>
</section>
<section>
    <?php get_template_part('template-parts/home','restaurants'); ?>
</section>
<section>
    <?php get_template_part('template-parts/home','foods'); ?>
</section>
<section>
    <?php get_template_part('template-parts/home', 'testimony'); ?>
</section>
<section>
    <?php get_template_part('template-parts/home','recipes');?>
</section>

<?php get_footer(); ?>