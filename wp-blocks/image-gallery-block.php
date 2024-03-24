<?php //IMAGE GALLERY BLOCK ?>

<?php if( have_rows('image_gallery') ): ?>

    <div class="container-fluid image-gallery" id="<?php the_field('unique_block_id') ?>">
        <div class="row">
        <?php while( have_rows('image_gallery') ) : the_row(); 
            $image = get_sub_field('image');
        ?>
    <div class="col-md-2 col-sm-6 col-6">
        <img src="<?php echo $image['url'];?>" alt="oneoneair">
    </div>     

        <?php endwhile; ?>
        </div>
    </div>
 <?php endif; ?>

 <div class="container caption">
    <div class="row">
        <div class="col">
            <?php the_field('caption')?>
        </div>
    </div>
 </div>