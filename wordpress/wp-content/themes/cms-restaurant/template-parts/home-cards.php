

<div class="container border border-warning">
       <div class="row">
        <?php if(have_rows('content')) :?>
            
            <?php while(have_rows('content')) : the_row(); ?>


                <?php if(get_row_layout() == 'columns_section'):
                    $columns = get_sub_field('columns');
                    ?>
                                 <?php if(have_rows('columns')) : ?>
                                    <?php while(have_rows('columns')) : the_row(); ?> 

                                        <img src="<?php echo  $column['image_title']['sizes']['medium']; ?>">

                                    <?php endwhile;?> 
                                <?php endif; ?> 

                           
                   
                 <?php endif; ?>   

            <?php endwhile; ?>
         <?php endif; ?> 
                </div>  
         </div>
    

<!-- <div class="container border border-warning">
       <div class="row">
           <div class="col-4 border border-info  text-center">
               <div class="card border border-dark">
  <img class="card-img-top" src="<?= $img_first_icon ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
</div>
           <div class="col-4 border border-info text-center">
               <div class="card border border-dark">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
</div>
           <div class="col-4 border border-info text-center">
               <div class="card border border-dark">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
</div>
       </div>
   </div>

   </div> -->