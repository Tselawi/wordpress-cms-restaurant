<!-- code for the type of flexible content -->
<?php if (have_rows('restaurant_section')): ?>
<?php   while (have_rows('restaurant_section')):the_row(); ?>
<!-- code for the type of repeater -->
<?php if (get_row_layout() == 'submit_section') :  ?>
<?php if(have_rows('submit_container')) : ?>
<?php while(have_rows('submit_container')) : the_row(); ?>


<?php 
           $submitSubTitle= get_sub_field('submit_sub_title');
           $submitTitle= get_sub_field('submit_title');
           $submitImage=get_sub_field('reserve_image');
           $submitImageSize= $submitImage['sizes']['large'];
          
            
?>

<div class="container-fluid py-5">
    <div class="container text-center py-5">
        <h5 class="fs-3"><?php echo $submitSubTitle ?></h5>
        <h3 class="text-uppercase fw-bold fs-2"><?php echo $submitTitle ?></h3>

        <div class="row my-5 py-5">
            <div class="col-6 border border-info">
                <img src="<?= $submitImageSize;?>" alt="" class=" profile-img">
            </div>
            <div class="col-6 border border-danger p-5 center ">
                <form class="reserve-form border border-warning p-5">
                    <div class="form-row d-flex mx-3 py-3">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-row d-flex mx-3 py-3">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-row d-flex mx-3 py-3">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark px-4">Sign in</button>
                </form>



            </div>
        </div>
    </div>
</div>






<?php endwhile; ?>
<?php endif;?>
<?php endif;?>
<?php endwhile;
endif; ?>