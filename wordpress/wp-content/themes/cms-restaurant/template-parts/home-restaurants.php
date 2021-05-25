<?php 
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
?>

<div class="container-fluid  bg-main-resto">
            <?php if(have_rows('content')) :?>

                <?php while(have_rows('content')) : the_row(); ?>
        
            <!-- for bg, title & subtitle-->
                    <?php if(get_row_layout() == 'restaurant_columns_section') : ?>

                        <?php if(have_rows('restaurant_columns')): ?>       

                            <?php while(have_rows('restaurant_columns')) : the_row(); ?>

                                    <?php
                                        $bg_image = get_sub_field('image_background');
                                        $bg_size = $bg_image['sizes']['large'];
                                        $resto_subtitle = get_sub_field('resto_sub_title');
                                        $resto_main_title = get_sub_field('resto_main_title');
                                    ?>
                                            <img src="<?= $pictureBorder; ?>" class="bg-border-1">
                                                <img src="<?= $bg_size ?>" class="bg-resto" >
                                                    <div class="container restos-title text-center">
                                                        <p class="text-center fs-1"><?= $resto_subtitle; ?></p>
                                                        <h1 class="text-center fs-2 fw-bold text-uppercase"><?= $resto_main_title; ?></h1>
                                                    </div>
                                            <img src="<?= $pictureBorder; ?>" class="bg-border-2">
                                            <?php endwhile; ?>

                                <?php endif; ?> 

                            <?php endif; ?>
            <!-- Restaurants Cards  -->
           
                                        <?php if(get_row_layout() == 'restaurant_card_section') : 
                                                        $subTitle= get_sub_field('card_sub_text');
                                                        $restoTitle= get_sub_field('card_main_text');
                                                        $restoDesc=get_sub_field('card_description');
                                                        $imagePost= get_sub_field('card_image');
                                                        $imageSize= $imagePost['sizes']['large'];
                                                        $restoLink = get_sub_field('card_link');
                                                        $restoLinkUrl = $restoLink['url'];
                                                        $restoLinkTarget= $restoLink['target'] ? $restoLink['target'] : '_self';   
                                                        $side_image = get_sub_field('change_side');  
                                                ?>
                                                            <div class="container card-main-container ">       
                                                                <div class="row">
                                                                        <?php if($side_image == 'left'):?>
                                                                        <div class="col-lg-6">
                                                                            <img src="<?= $imageSize; ?>" class="cafe-img-left">
                                                                        </div>
                                                                        <div class="col-lg-6 card-container text-center">
                                                                            <div class="card card-sizes">
                                                                                <div class="card-body">
                                                                                    <p class="fs-3"><?= $subTitle ?></p>
                                                                                    <h5 class="card-title text-uppercase fw-bold fs-2 pb-4"><?= $restoTitle ?></h5>
                                                                                    <p><?= $restoDesc; ?></p>
                                                                                    <?php if($restoLink) :?>
                                                                                        <a href="<?= esc_url($restoLinkUrl) ?>" target="<?= esc_attr($restoLinkTarget) ?>" class="btn btn-dark btn-lg" type="button">More info</a>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                       <?php else: ?>
                                                                        <div class="col-lg-6 card-container text-center">
                                                                            <div class="card card-sizes">
                                                                                <div class="card-body">
                                                                                    <p class="fs-3"><?= $subTitle ?></p>
                                                                                    <h5 class="card-title text-uppercase fw-bold fs-2 pb-4"><?= $restoTitle ?></h5>
                                                                                    <p><?= $restoDesc; ?></p>
                                                                                    <?php if($restoLink) :?>
                                                                                        <a href="<?= esc_url($restoLinkUrl) ?>" target="<?= esc_attr($restoLinkTarget) ?>" class="btn btn-dark btn-lg" type="button">More info</a>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 my-5 pb-5">
                                                                            <img src="<?= $imageSize; ?>" class="cafe-img-right">
                                                                        </div>
                                                                        <?php endif; ?>
                                                             
                                                                </div>      
                                                                </div>                                                                     
                                            <?php endif; ?>
            <?php endwhile; ?>

        <?php endif; ?>        

</div> 