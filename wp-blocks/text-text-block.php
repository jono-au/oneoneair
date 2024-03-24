<?php //TEXT TEXT BLOCK?>

<div class="container text-text-block" id="<?php the_field('unique_block_id') ?>">
	<div class="row">

        <div class="col-lg-6">
			<div>
				<?php the_field('title')?>
				
			</div>
		</div>
        
		<div class="col-lg-6">
            <?php the_field('text')?>
		</div>
	
	</div>
</div>
