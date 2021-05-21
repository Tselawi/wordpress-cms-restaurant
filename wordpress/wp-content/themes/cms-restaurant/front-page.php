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


<?php get_footer(); ?>