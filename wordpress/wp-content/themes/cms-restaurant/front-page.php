<?php
get_header();

?>
       
       
        <section class="container-fluid border border-success border-5 banner-top"> 
                <?php get_template_part('template-parts/home','titles'); ?>
        </section>
        <section>
                <?php get_template_part('template-parts/home','cards');?>
        </section>


<?php get_footer(); ?>


