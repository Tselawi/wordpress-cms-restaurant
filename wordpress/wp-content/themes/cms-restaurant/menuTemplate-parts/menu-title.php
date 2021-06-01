<?php 
$menuImage = get_field('menu_image');
$menuImageSize = $menuImage['sizes']['my_custom_size'];
$subTitle= get_field('sub_title');
$mainTitle = get_field('main_title');
$orderLink = get_field('order_link');
$orderLinkUrl = $menuLink['url'];
$orderLinkTarget = $orderLink['target'] ? $orderLink['target'] : '_self';
$borderImage_menu = get_field('border_image');
$pictureBorder = $borderImage_menu['sizes']['my_custom_border_size'];
?>

<!--=====================================  BANNER START ==========================================-->
<div class="container-fluid banner-recipe">
    <img src="<?= $menuImageSize; ?>" class="bg-img img-fluid img-resto">
    <div class="container">
        <div class="banner-row row my-5">
            <div class="main-title col-6">
                <?php if ($subTitle): ?>
                <h3 class="text-white"><?= $subTitle; ?></h3>
                <?php endif; ?>

                <?php if ($mainTitle): ?>
                <h1 class="title text-uppercase"><?= $mainTitle; ?></h1>
                <?php endif; ?>
                <div class="menu-link text-white">
                    <?php if ($orderLink): ?>
                    ⎯⎯⎯⎯ <a href="<?php echo esc_url($orderLink); ?>" target="<?php echo esc_attr(
                        $orderLinkTarget             
                                    ); ?>">Order online</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <img src="<?= $pictureBorder; ?>" class="border-img">
</div>
