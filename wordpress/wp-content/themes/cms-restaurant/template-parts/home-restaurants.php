

<div class="container-fluid border border-info">
    <?php if(have_rows('content')) :?>

        <?php while(have_rows('content')) :?>

            <?php if(get_row_layout('content')) : the_row(); ?>
                <?php
                    $bg_image = get_sub_field('image_background');
                    $bg_size = $bg_image['sizes']['my_custom_size'];
                ?>
                    <img src="<?= $bg_size ?>" >
                        <div class="container border border-warning">
                            <div class="row border border-primary">
                                <div class="col"></div>
                                <div class="col-4">
                                    <p class="text-center">hello</p>
                                    <h1 class="text-center text-uppercase">hello tariq</h1>
                                </div>
                                <div class="col"></div>

                            </div>
                        </div>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>        
</div>