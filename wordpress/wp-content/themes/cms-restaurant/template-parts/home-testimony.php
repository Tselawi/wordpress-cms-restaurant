<div class="container-fluid main-people">
<?php if(have_rows('content')) :?>
            <?php while(have_rows('content')) : the_row(); ?>
                <?php if(get_row_layout() == 'people_section'):
                    $borderPeople = get_sub_field('border_people_img');
                    $borderSize = $borderPeople['sizes']['my_custom_border_size'];
                    $peopleDescription = get_sub_field('people_description');
                    $mainName = get_sub_field('main_name');
                    $peopleImage = get_sub_field('people_image');
                    $peopleImageSize = $peopleImage['sizes']['large'];
                    ?>
                        <img src="<?=$borderSize; ?>" class="people-border-1" alt="border">
                        <div class="row">
        
                        <div class="col-6 people-body bg-dark">
                                <h1 class="fs-1">”</h1>
                                <p class="fs-5"><?= $peopleDescription; ?></p>
                                <p class="fs-5">— <?= $mainName; ?></p>
                            
                        </div>
                        <div class="col-6">
                            <img src="<?= $peopleImageSize; ?>" class="people-img" alt="people">
                        </div>
                    </div>
                    <img src="<?=$borderSize; ?>" class="people-border-2" alt="border">
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>           
</div>