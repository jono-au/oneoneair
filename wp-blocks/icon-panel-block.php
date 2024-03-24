<?php //ICON PANEL BLOCK ?>

<?php if( have_rows('icon_repeater') ): ?>

    <div class="container-fluid icon-panel">
        <div class="row">
        <?php while( have_rows('icon_repeater') ) : the_row(); 
            $image = get_sub_field('icon');
            $text = get_sub_field('text');
        ?>
    <div class="col-md-2">
        <img src="<?php echo $image['url'];?>" alt="oneoneair">
        <p><?php echo $text;?></p>
    </div>     

        <?php endwhile; ?>
        </div>
    </div>
 <?php endif; ?>