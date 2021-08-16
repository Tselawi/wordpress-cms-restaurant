<?php 
$text = get_field('text_title');
$main_title = get_field('second_text');
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
?>


<div class="container">
        <div class="banner-row row my-5">
                <div class="main-title col-6">
                    <?php if ($text): ?>
                        <h3 class="text-white"><?= $text ?></h3>
                        
                    <?php endif; ?>

                    <?php if ($main_title): ?>
                        <h1 class="title text-uppercase"><?= $main_title ?></h1>
                    <?php endif; ?> 
                    <div class="menu-link text-white">
                    </div>
                </div>
                <div class="col"></div>
                
        </div>
        <img src="<?= $pictureBorder; ?>" class="border-img-home"> 