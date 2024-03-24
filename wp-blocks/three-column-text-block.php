<?php // THREE COLUMN TEXT BLOCK?>

<div class="container-fluid three-column-text-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <?php the_field('text_column_1'); ?>
            </div>
            <div class="col-md-6 col-lg-4">
                <?php the_field('text_column_2'); ?>
            </div>
            <div class="col-md-6 col-lg-4">
                <?php the_field('text_column_3'); ?>
            </div>
        </div>
    </div>
</div>