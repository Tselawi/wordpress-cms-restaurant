<?php
$text = get_field('text_title');
$main_title = get_field('second_text');
$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
$link = get_field('menu_link');
$link_url = $link['url'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>
<img src="<?php echo $picture; ?>" class="bg-img img-fluid img-resto">  
<div class="container">
        <div class="banner-row row my-5">
                <div class="main-title col-6">
                    <?php if ($text): ?>
                        <h3 class="text-white display-6"><?= $text ?></h3>
                        
                    <?php endif; ?>

                    <?php if ($main_title): ?>
                        <h1 class="text-white display-2 text-uppercase fw-bold"><?= $main_title ?></h1>
                    <?php endif; ?> 
                    <div class="menu-link text-white">
                    <?php if ($link): ?>
                    ⎯⎯⎯⎯ <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr(
                                    $link_target
                                    ); ?>">Check Our Menu</a>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col"></div>
                
        </div>
        <img src="<?= $pictureBorder; ?>" class="border-img-recipe"> 