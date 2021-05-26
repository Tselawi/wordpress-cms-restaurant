

<div class="conatiner text-center">

    <?php if(have_rows('menu_content')): ?>
        <?php while(have_rows('menu_content')): the_row();?>
            <?php if(get_row_layout() == 'menu_main_title'):
                $menuSubTitle = get_sub_field('menu_subtitle');
                $menuMainText = get_sub_field('menu_main_text');
                ?>

                <h5 class="fs-2"><?= $menuSubTitle; ?></h5>
                <h1 class="fw-bold text-uppercase"><?= $menuMainText; ?></h1>
            <?php endif; ?>

            <?php if(get_row_layout() == 'type_of_menu'):
                    $titleContent = get_sub_field('content_title');
                    ?>
                    <div class="row my-5 justify-content-center">
                                <?php if($titleContent):?>
                                <h3 class="text-underline text-uppercase fw-bold"><u><?= $titleContent; ?></u></h3>
                                <?php endif;?> 
                        

                <?php if(have_rows('meal_details')):?>
                    <?php while(have_rows('meal_details')): the_row();?>
                        <?php 
                        $priseTitle = get_sub_field('prise_title');
                        $mealContent = get_sub_field('meal_content');
                        ?>   <div class="col-12 text-start" style="height:80px;">
                            <div>
                                <div class="d-flex justify-content-center my-4">
                                    <ul class="unordered-list">
                                        <li class="prise"><?= $priseTitle; ?></li>
                                        <li class="meal-content"><?= $mealContent; ?></li>
                                    </ul>
                                </div>
                            </div>
                            </div>     
                    <?php endwhile; ?>
                <?php endif; ?>    
            </div>
            <?php endif; ?>  
        <?php endwhile; ?>
    <?php endif; ?> 
</div>

