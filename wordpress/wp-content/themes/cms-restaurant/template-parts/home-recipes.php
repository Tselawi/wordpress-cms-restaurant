<div class="container">
    <?php if(have_rows('content')): ?>
        <?php while(have_rows('content')): the_row();?>
            <?php if(get_row_layout() == 'recipes_section'): 
                $recipeSub = get_sub_field('recipe_sub');
                $recipeMain = get_sub_field('recipe_main');
                ?>
                <div class="text-center pt-5">
                <p class="fs-1"><?= $recipeSub; ?></p>
                <h1 class="fs-1 text-uppeercase fw-bold"><?= $recipeMain; ?></h1>
                </div>
                <div class="row">
                    <?php if(have_rows('recipes_cards')) : ?>
                        <?php while(have_rows('recipes_cards')): the_row(); 
                        $recipeImage = get_sub_field('recipe_image');
                        $recipeImageSize = $recipeImage['sizes']['large'];
                        $recipeDate= get_sub_field('recipe_date');
                        $recipeCardTitle = get_sub_field('recipe_card_title');
                        $recipeDescription = get_sub_field('recipe_description');
                        $recipeLink = get_sub_field('recipe_link');
                        $recipeUrl = $recipeLink['url'];
                        $recipeTarget = $recipeLink['target'] ? $recipeLink['target'] : '_self';
                        ?>
                                <div class="col-3">
                                        <div class="card recipe-cards" style="width: 20rem;">
                                            <img src="<?= $recipeImageSize; ?>" class="card-img-top img-recipe" alt="recipes">
                                        <div class="card-body">
                                        <p class="date"><i class="far fa-clock"></i> <?= $recipeDate; ?></p>
                                        <h5 class="fs-5 pb-3 fw-bold"><?= $recipeCardTitle; ?></h5>
                                        <p class="pt-2"><?= $recipeDescription; ?></p>
                                        <?php if($recipeLink): ?>
                                            <a href="<?= esc_url($recipeUrl) ?>" target="<?= esc_attr($recipeTarget) ?>" class="btn btn-link recipe-link text-uppercase fw-bold">.................. Read more</a>
                                        <?php endif; ?>
                                    </div>
                                    </div>
                                </div> 
                        <?php endwhile;?>
                    <?php endif; ?>                   
                </div>
            <?php endif;?>    
        <?php endwhile;?>    
    <?php endif ?>    
</div>