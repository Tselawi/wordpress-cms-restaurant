<?php // Template Name: restau
    // Template Post Type: post
?>
<?php get_header(); 




?>

<section class=" restaurant-presentation container-fluid">

    <?php get_template_part('template-parts/restaurant','posts');?>

</section>

<section class=" location-section container-fluid">

    <?php get_template_part('template-parts/restaurant','location');?>

</section>

<?php get_footer(); ?>