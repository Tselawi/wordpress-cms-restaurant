
<div class="container main-food">
<div class="row">
        <?php if(have_rows('content')) :?>
            
            <?php while(have_rows('content')) : the_row(); ?>

                <?php if(get_row_layout() == 'food_section'): 
                    $foodSubText = get_sub_field('food_sub_text');
                    $foodMainText = get_sub_field('food_main_text');
                    $foodDescription = get_sub_field('food_description');
                    $foodLink = get_sub_field('food_link');
                    $foodLinkUrl = $foodLink['url'];
                    $foodLinkTarget= $foodLink['target'] ? $foodLink['target'] : '_self';  
                    $images= get_sub_field('food_gallery');
                    
                    
                    ?>
                    <div class="col-6">

                        <div class="parent">
                            <?php if($images):?>

                                <?php foreach($images as $image):?>
                                    <img src="<?= $image['sizes']['large']; ?>" width="242" height="363" class="img-fluid cover" alt="food-1">
                                <?php endforeach;?>    

                            <?php endif;?>
                        </div>

                    </div>
                    <div class="col-lg-6 text-center">
                    <div class="card card-food">
                        <div class="card-body mx-5">
                            <p class="fs-3 text-uppercase"><?= $foodSubText; ?></p>
                            <h3 class="card-title text-uppercase fw-bold fs-2 pb-4"><?= $foodMainText; ?></h3>
                            <p class="my-5"><?= $foodDescription; ?></p>
                            <?php if($foodLink) :?>
                                <a href="<?= esc_url($foodLinkUrl) ?>" target="<?= esc_attr($foodLinkTarget) ?>" class="btn btn-dark btn-lg my-5" type="button">View the full Menu</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    </div> 
            <?php endif; ?>

        <?php endwhile; ?>    
    
    <?php endif; ?>    

    </div>    
</div>