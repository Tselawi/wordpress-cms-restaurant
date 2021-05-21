<?php 
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
?>

<div class="container-fluid border border-info">
    <?php if(have_rows('content')) :?>

        <?php while(have_rows('content')) : the_row(); ?>

            <?php if(get_row_layout() == 'columns_section') : ?>
                <?php if(have_rows('restaurant_columns')): ?>
                    <?php while(have_rows('restaurant_columns')) : the_row(); ?>
                            <?php
                                $bg_image = get_sub_field('image_background');
                                $bg_size = $bg_image['sizes']['my_custom_size'];
                            ?>
                            <img src="<?= $pictureBorder; ?>" class="bg-info">
                            <img src="<?= $bg_size ?>" class="bg-resto" >
                                <div class="container border border-warning">
                                    <div class="row border border-primary">
                                        <div class="col"></div>
                                        <div class="col-4">
                                            <p class="text-center">hello</p>
                                            <h1 class="text-center text-uppercase">hello tariq</h1>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            <img src="<?= $pictureBorder; ?>" class="bg-info">
                    <?php endwhile; ?>
                <?php endif; ?> 

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>        
</div>