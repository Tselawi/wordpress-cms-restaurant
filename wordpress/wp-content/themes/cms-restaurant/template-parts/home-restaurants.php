<?php 
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
?>

<div class="container-fluid bg-main-resto">
    <?php if(have_rows('content')) :?>

        <?php while(have_rows('content')) : the_row(); ?>
            <!-- for bg, title & subtitle-->
            <?php if(get_row_layout() == 'columns_section') : ?>
                <?php if(have_rows('restaurant_columns')): ?>
                    <?php while(have_rows('restaurant_columns')) : the_row(); ?>
                            <?php
                                $bg_image = get_sub_field('image_background');
                                $bg_size = $bg_image['sizes']['my_custom_size'];
                                $resto_subtitle = get_sub_field('resto_sub_title');
                                $resto_main_title = get_sub_field('resto_main_title');
                            ?>
                            <img src="<?= $pictureBorder; ?>" class="bg-border-1">
                            <img src="<?= $bg_size ?>" class="bg-resto" >
                                <div class="container">
                                    <div class="row pt-5">
                                        <div class="col"></div>
                                        <div class="col-4">
                                            <p class="text-center fs-2"><?= $resto_subtitle; ?></p>
                                            <h1 class="text-center fs-3 fw-bold text-uppercase"><?= $resto_main_title; ?></h1>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            <img src="<?= $pictureBorder; ?>" class="bg-border-2">
                    <?php endwhile; ?>
                <?php endif; ?> 
            <?php endif; ?>

            <?php if(get_row_layout() == 'restaurant_card_section') : ?>
                <?php if(have_rows('restaurant_card_columns')): ?>
                    <?php while(have_rows('restaurant_card_columns')) : the_row(); ?>
                    
                    <?php endwhile; ?>
                <?php endif; ?> 
            <?php endif; ?>


        <?php endwhile; ?>
    <?php endif; ?>        
</div>