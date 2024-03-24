<?php //IMAGE & TEXT BLOCK 

$image =  get_field('image');
?>
<div class="container image-text-block" id="<?php the_field('unique_block_id') ?>">
	<div class="row">

        <div class="col-lg-4">
			<div>
				<?php the_field('title')?>
				<?php the_field('text')?>
			</div>
		</div>
        
		<div class="col-lg-8">
                <img src="<?php echo $image['url']?>" alt="avcair">
		</div>
	
	</div>
</div>
