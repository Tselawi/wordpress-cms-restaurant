<div class="container p-5">
<nav>
                    <ul class="d-flex justify-content-between my-5 list-unstyled fw-bold" style="width:70%;">
        <?php if (have_rows('food_category')): ?>
            <?php while(have_rows('food_category')): the_row();?>
                <?php if(get_row_layout() == 'food_lists'): 
                    $foodTitle = get_sub_field('recipes_types');
                    $foodIcon = get_sub_field('recipes_icons');
                    ?>
                        <li><?= $foodIcon?> <?= $foodTitle?></li>
                <?php endif ;?>    
            <?php endwhile;?>
        <?php endif;?>            
        </ul>
            </nav>
          
                    <?php if(have_rows('recipes_cards_lists')): ?>
                        <?php while(have_rows('recipes_cards_lists')): the_row();
                    
                             <?php if(get_row_layout() == 'recipes_cards'):
                           

                                $recipeDate = get_sub_field('recipe_date');
                                $recipeIcon = get_sub_field('recipe_icon');
                                $recipeSubtitle = get_sub_field('recipe_subtitle');
                                $recipeTitle = get_sub_field('recipe_title');
                                $recipeContent = get_sub_field('recipe_content');
                                $recipeLink = get_sub_field('recipe_link');
                                $recipeLinkUrl = $recipeLink['url'];
                                $recipeLinkTarget = $recipeLink['target'] ? $recipeLink['target'] : '_self';
                                $recipeImage = get_sub_field('recipe_image');
                                $recipeImageSize = $recipeImage['sizes']['large'];
                                $recipeSideImage = get_sub_field('recipe_side_image');
                                 
                                ?> 
                                   
                                    
                                    <?php if($recipeSideImage == 'right'): ?>
                                        <div class="row bg-white pb-5">
                                            <div class="col-lg-5 center-recipe text-center">
                                                <div class="card content-recipe">
                                                    <p class="date-recipe text-uppercase pb-4"><i class="far fa-clock"></i> <?= $recipeDate; ?></p>
                                                    <p class="fw-bold fs-4"><i><?= $recipeIcon; ?></i> <?= $recipeSubtitle; ?></p>
                                                    <h2><?= $recipeTitle; ?></h2>
                                                    <div class="card-body my-3">
                                                        <p><?= $recipeContent; ?></p>
                                                        <div class="menu-link">
                                                        <?php if($recipeLink): ?>
                                                        <a href="<?= esc_url($recipeLinkUrl); ?>" target="<?= esc_attr($recipeLinkTarget) ?>" type="button" class="btn btn-dark text-uppercase">Read more</a>
                                                        <?php endif;?> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 p-0">
                                                    <img src="<?= $recipeImageSize; ?>" alt="recipe" class="recipe-image">        
                                            </div>
                                        </div>
                                        <?php else: ?>
                                            <div class="row bg-white pb-5">
                                                <div class="col-lg-7 p-0">
                                                    <img src="<?= $recipeImageSize; ?>" alt="recipe" class="recipe-image">        
                                                </div>
                                                <div class="col-lg-5 center-recipe text-center">
                                                    <div class="card content-recipe">
                                                        <p class="date-recipe text-uppercase pb-4"><i class="far fa-clock"></i> <?= $recipeDate; ?></p>
                                                        <p class="fw-bold fs-4"><i><?= $recipeIcon; ?></i> <?= $recipeSubtitle; ?></p>
                                                        <h2><?= $recipeTitle; ?></h2>
                                                        <div class="card-body my-3">
                                                            <p><?= $recipeContent; ?></p>
                                                            <div class="menu-link">
                                                            <?php if($recipeLink): ?>
                                                            <a href="<?= esc_url($recipeLinkUrl); ?>" target="<?= esc_attr($recipeLinkTarget) ?>" type="button" class="btn btn-dark text-uppercase">Read more</a>
                                                            <?php endif;?> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        <?php endif;?>                        
                                    
                                <?php endif;?>
                                
                    
                        <?php endwhile; ?>
                       
                        
                    <?php endif;?>   
                  
       
                              
       
</div>

