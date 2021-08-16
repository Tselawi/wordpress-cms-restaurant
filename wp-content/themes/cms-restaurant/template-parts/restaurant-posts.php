<div class="container py-5 text-center">
    <h3 class="subtitle-restaurant-pre">Welcome In Liège </h3>
    <h4 class="title-restaurant text-uppercase">Presentation</h4>

    <!-- code for the type of flexible content -->
    <?php if (have_rows('restaurant_section')): ?>
    <?php   while (have_rows('restaurant_section')):the_row(); ?>
    <!-- code for the type of repeater -->
    <?php if (get_row_layout() == 'new_section') :  ?>
    <?php if(have_rows('container')) : ?>
    <?php while(have_rows('container')) : the_row(); ?>

    <?php 
                        $subTitle= get_sub_field('restaurant_sub_title');
                        $restoTitle= get_sub_field('restaurant_title');
                        $restoDesc=get_sub_field('restaurant_description');
                        $imagePost= get_sub_field('post_image');
                        $imageSize= $imagePost['sizes']['large'];
                        $imageSide = get_sub_field('image_side');
                        ?>

    <div class="card my-5 resto-card" style="max-width:100%;">
        <div class="row  ">

            <?php if ($imageSide == 'left')  :?>
            <div class="col-lg-6 ">
                <img src="<?php echo $imageSize;?>" alt="" class="img-fluid">
            </div>

            <div class="col-lg-6 center p-5">
                <div class="card-body ">
                    <h5 class="fs-3 my-2"><?php echo $subTitle;?> </h5>
                    <h3 class="card-title fs-2 fw-bold my-2"><?php echo $restoTitle;?></h3>

                    <p class=" lead card-text my-2 lh-lg resto-desc"><?php echo $restoDesc; ?></p>

                </div>
            </div>

            <?php endif; ?>

            <?php if($imageSide == 'right') :?>

            <div class="col-lg-6 center p-5">
                <div class="card-body">
                    <h5 class=" fs-3 my-2"><?php echo $subTitle;?> </h5>
                    <h3 class="card-title fs-2 fw-bold my-2"><?php echo $restoTitle;?></h3>

                    <p class=" lead card-text my-2 lh-lg resto-desc"><?php echo $restoDesc; ?></p>

                </div>
            </div>

            <div class="col-lg-6 ">
                <img src="<?php echo $imageSize;?>" alt="" class="img-fluid">
            </div>
            <?php endif;?>

        </div>
    </div>
    <?php endwhile; ?>
    <?php endif;?>
    <?php endif;?>
    <?php endwhile;
                    endif; ?>

</div>