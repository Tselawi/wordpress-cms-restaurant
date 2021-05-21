<?php // Template Name: restau
    // Template Post Type: post
?>
<?php get_header(); 

$imagePost= get_field('post_image');
$imageSize= $imagePost['sizes']['medium'];



?>

<section class=" restaurant-presentation container-fluid border border-danger border-5 bg-light ">
    <div class="container py-5 text-center">
        <h3 class="subtitle-restaurant-pre">Welcome In Liège </h3>
        <h4 class="title-restaurant text-uppercase">Presentation</h4>

        <div class="card my-5 border-secondary border-1 bg-light" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="<?php echo $imageSize;?>" alt="">
                </div>

                <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h5 class="card-title my-2">Small Card Title</h5>
                        <h3 class="card-title fw-bold my-2"><?php the_title(); ?></h3>

                        <p class=" lead card-text my-2 lh-lg "><?php the_content(); ?></p>

                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;
        endif; ?>

        <div class="card my-5 border-secondary border-1 bg-light" style="max-width: 100%;">
            <div class="row g-0">

                <div class="col-lg-6">
                    <div class="card-body">
                        <h5 class="card-title my-2">Small Card Title</h5>
                        <h3 class="card-title fw-bold my-2"><?php the_title(); ?></h3>
                        <p class=" lead card-text my-2 lh-lg "></p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="..." alt="..." class="card-img">
                </div>
            </div>
        </div>


    </div>
</section>

<?php get_footer(); ?>