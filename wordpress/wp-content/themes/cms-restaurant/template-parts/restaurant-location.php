<!-- code for the type of flexible content -->
<?php if (have_rows('restaurant_section')): ?>
<?php   while (have_rows('restaurant_section')):the_row(); ?>
<!-- code for the type of repeater -->
<?php if (get_row_layout() == 'location_section') :  ?>
<?php if(have_rows('map_container')) : ?>
<?php while(have_rows('map_container')) : the_row(); ?>


<?php 
           $subTitle= get_sub_field('sub_title');
           $locationTitle= get_sub_field('location_title');
            
?>

<div class="container-fluid">
    <div class="container">
        <h3><?php echo $subTitle ?></h3>
        <h4><?php echo $locationTitle ?></h4>
    </div>
</div>


<?php endwhile; ?>
<?php endif;?>
<?php endif;?>
<?php endwhile;
endif; ?>