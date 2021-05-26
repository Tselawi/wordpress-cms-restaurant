
<?php 
$borderImage = get_field('border_image');
$pictureBorder = $borderImage['sizes']['my_custom_border_size'];
?>
<footer>
<?php wp_footer(); ?>
    <div class="container bg-dark footer-container text-center">
            <img src="<?= $pictureBorder ?>" class="border-footer-1" alt="border">
                <div class="row footer-r">
                    <?php if(have_rows('footer_content')) :?>
                        <?php while(have_rows('footer_content')): the_row();?>
                            <?php if(get_row_layout() == 'footer_section'): 
                                $mainText= get_sub_field('main_footer_text');
                                ?>
                                    <div class="col-6">
                                        <h2 class="text-uppercase text-white"><?= $mainText; ?></h2>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="footer-input" placeholder="Your Email Address">
                                        <a href="#" class="btn btn-light btn-footer text-uppercase" type="button">Subscribe</a>
                                    </div>
                            <?php endif; ?>    
                        <?php endwhile; ?>        
                    <?php endif; ?>  
                </div>     
    </div>
    <div class="container-fluid footer-top bg-dark">
    <img src="<?= $pictureBorder ?>" class="border-footer-2" alt="border">
        <div class="container footer-squre pb-4">
            <div class="row footer-row text-white mx-1">
                <?php if(have_rows('footer_content')) :?>
                    <?php while(have_rows('footer_content')): the_row() ?>
                        <?php if(get_row_layout() == 'footer_section'): ?>
                            <?php if(have_rows('footer_contents')):?>
                                <?php while(have_rows('footer_contents')): the_row();
                                   $footerLogo = get_sub_field('footer_logo');
                                   $footerDes = get_sub_field('footer_des');
                                   $footerIcon1= get_sub_field('footer_icons_1');
                                   $footerIcon2= get_sub_field('footer_icons_2');
                                   $footerIcon3= get_sub_field('footer_icons_3');
                                   $footerIcon4 = get_sub_field('footer_icons_4');
                                   $hoursText = get_sub_field('hours_text');
                                   $contact= get_sub_field('contact_us');
                                   $images = get_sub_field('footer_images');

                                ?>        
                                    <div class="col-3">
                                        <h3 class="fw-bold pb-5"><?= $footerLogo; ?></h3>
                                        <p class="font-des"><?= $footerDes; ?></p>
                                        <div class="icon-ft">
                                        <a href="https://www.facebook.com" class="icon-1"><?= $footerIcon1; ?></a>
                                        <a href="https://www.twitter.com" class="icon-2"><?= $footerIcon2; ?></a>
                                        <a href="https://www.instagram.com" class="icon-3"><?= $footerIcon3; ?></a>
                                        <a href="https://www.linkedin.com" class="icon-4"><?= $footerIcon4; ?></a>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <h5 class="mx-5 pb-1"><?= $hoursText; ?></h5>
                                        <ul class="footer-list">
                                            <li><i class="far fa-clock"></i>  Mondays ⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯ Closed</li>
                                            <li><i class="far fa-clock"></i>  Tue-Fri ⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯ 10am - 12am</li>
                                            <li><i class="far fa-clock"></i>  Sat-Sun ⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯ 7am - 1am</li>
                                            <li><i class="far fa-clock"></i>  Public Holidays ⎯⎯⎯ 7am - 1am</li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <h5 class="mx-5 pb-1"><?=$contact; ?></h5>
                                        <ul class="footer-list">
                                            <li><i class="fas fa-phone-alt"></i> +1(123)xxx-xxxx</li>
                                            <li style="width:185px;"><i class="fas fa-map-marker-alt"></i> Rue de Mulhouse,36 4020 Liège Belgium</li>
                                            <li><i class="fas fa-envelope"></i> Odevdesign.studio@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="col-3">
                                        <div class="parent-footer">
                                            <?php if($images):?>
                                                <?php foreach($images as $image): ?>
                                                    <img src="<?= $image['sizes']['thumbnail'];?>" class="img-fluid" alt="footer-img">
                                                 <?php endforeach; ?>   
                                            <?php endif; ?>    
                                        </div>
                                    </div>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>    
                            <div class="pt-4">

                                <hr>
                                <p class="text-center"> © 2021 - Zena & Tariq</p>  

                            </div>
                        

                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>                             
            </div>
        </div>
    </div>        
</footer>

</body>
</html>