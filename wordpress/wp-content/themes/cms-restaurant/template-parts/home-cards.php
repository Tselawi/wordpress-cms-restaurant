

<div class="container">
       <div class="row">
        <?php if(have_rows('content')) :?>
            
            <?php while(have_rows('content')) : the_row(); ?>

                <?php if(get_row_layout() == 'columns_section'):  ?>
                                 <?php if(have_rows('columns')) : ?>
                                    <?php while(have_rows('columns')) : the_row(); ?> 
                                        <?php 
                                        $first_icon= get_sub_field('image_title');
                                        $first_img= $first_icon['sizes']['medium'];
                                        $card_title = get_sub_field('title');
                                        $card_text = get_sub_field('content');
                                        ?>
                                        <!-- Three Cards -->
                                        <div class="col-4">
                                            <div class="card text-center card-list">
                                                <div class="card-home">
                                            <?php if($first_img) :?>
                                                <img class="card-img-top" src="<?= $first_img; ?>" alt="Card image cap">
                                            <?php endif; ?>
                                            <div class="card-body text-center">
                                            <?php if($card_title) :?>    
                                                <h5 class="card-title my-4 text-uppercase"><?= $card_title ?></h5>
                                            <?php endif; ?>
                                            <?php if($card_text) :?>    
                                                <p class="card-text"><?= $card_text ?></p>
                                            <?php endif; ?>    
                                            </div>
                                        </div>
                                    </div>
                                    </div> 

                                    <?php endwhile;?> 
                                <?php endif; ?> 

                 <?php endif; ?>   

            <?php endwhile; ?>
         <?php endif; ?> 
     </div>  
</div>
 <!-- profile  -->              
            <div class="container">
                <div class="row">
                <?php if(have_rows('content')) :?>
            
                    <?php while(have_rows('content')) : the_row(); ?>

                        <?php if(get_row_layout() == 'columns_section'):  ?>

                            <?php if(have_rows('profile_columns')) : ?>
                                <?php while(have_rows('profile_columns')) : the_row(); ?>
                                    <?php
                                        $chefImg = get_sub_field('chef_image');
                                        $profileImg = $chefImg['sizes']['large'];
                                        $sub1=get_sub_field('sub_1');
                                        $sub2=get_sub_field('sub_2');
                                        $sub3=get_sub_field('sub_3');
                                        $mainTitle= get_sub_field('main_title');
                                        $mainText=get_sub_field('main_text');

                                    ?>
                                        <div class="col-6">
                                            <img src="<?= $profileImg;?>" class="profile-img" >
                                        </div>
                                        <div class="col-6 card-container">
                                            <div class="card card-style" style="width: 100%;">
                                                <div class="card-body profile-card">
                                                    <p class="fs-2"><?= $sub1; ?></p>
                                                    <h5 class="card-title text-uppercase fw-bold fs-1"><?= $mainTitle; ?></h5>
                                                    <p class="test-uppercase fw-bold"><?= $sub2; ?></p>
                                                    <p class="card-text"><?= $mainText; ?></p>
                                                    <p class="text-uppercase fw-bolde fs-2"><?= $sub3; ?></p>
                                                </div>
                                            </div>
                                        </div>

                                <?php endwhile; ?>
                            <?php endif;?>    

                        <?php endif; ?>    
                    <?php endwhile; ?>        
                <?php endif; ?>            
                </div>
            </div>