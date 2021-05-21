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
           $mapLocation = get_sub_field('map_image');
           $locationSize = $mapLocation['sizes']['large'];
            
?>

<div class="container-fluid py-5">
    <div class="container text-center py-5">
        <h5 class="fs-3"><?php echo $subTitle ?></h5>
        <h3 class="text-uppercase fw-bold fs-2"><?php echo $locationTitle ?></h3>
    </div>

    <img src="<?= $locationSize; ?>" class="img-fluid map-img" style="width:100%;">
</div>


<?php endwhile; ?>
<?php endif;?>
<?php endif;?>
<?php endwhile;
endif; ?>